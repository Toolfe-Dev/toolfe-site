<?php
require './db/connection.php';
require './includes/funcs.php';
include './includes/header.php';



if (isset($_GET['id'])) {
    $task_id = $_GET['id'];
    if(isset($_POST['submit'])){
        update_task_status($task_id, $_POST['status'], $conn);
    }

    // Validate task_id
    if (!is_numeric($task_id)) {
        header("Location: index.php");
        exit();
    }

    // Fetch attachments
    $chat_replies_attachment_sql = "SELECT * FROM tickets_replies_attachments WHERE ticket_reply_id IN (SELECT id FROM tickets_replies WHERE ticket_id = ?)";
    $stmt_attachments = $conn->prepare($chat_replies_attachment_sql);
    $stmt_attachments->bind_param("i", $task_id);
    $stmt_attachments->execute();
    $attachments_result = $stmt_attachments->get_result();

    // Create an associative array of attachments indexed by the reply id
    $attachments = [];
    while ($attachment = $attachments_result->fetch_assoc()) {
        $attachments[$attachment['ticket_reply_id']][] = $attachment;
    }

    $stmt_attachments->close();

    // Fetch task details
    $task_details_sql = "SELECT * FROM tickets WHERE id = ?";
    $stmt_task_details = $conn->prepare($task_details_sql);
    $stmt_task_details->bind_param("i", $task_id);
    $stmt_task_details->execute();
    $task_details = $stmt_task_details->get_result();
    $task_data = $task_details->fetch_assoc();
    $stmt_task_details->close();

    // Fetch chat replies
    $chat_replies_sql = "SELECT * FROM tickets_replies WHERE ticket_id = ?";
    $stmt_chat_replies = $conn->prepare($chat_replies_sql);
    $stmt_chat_replies->bind_param("i", $task_id);
    $stmt_chat_replies->execute();
    $chat_replies = $stmt_chat_replies->get_result();
    $stmt_chat_replies->close();



} else {
    header("Location: index.php");
    exit();
}


?>

<!-- Page Sidebar Ends-->
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h4>Task Discussion</h4>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">
                                <svg class="stroke-icon">
                                    <use href="assets/svg/icon-sprite.svg#stroke-home"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="breadcrumb-item">Bizguard Task</li>
                        <li class="breadcrumb-item active">Task Discussion</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row g-0">
            <div class="col-xxl-9 col-xl-8 col-md-7 box-col-7">
                <div class="card right-sidebar-chat">
                    <div class="right-sidebar-title">
                        <div class="common-space">
                            <div class="chat-time">
                                <div class="text-white chart-heading">
                                    <h4 class="chart-heading"><?php echo htmlspecialchars($task_data['subject']); ?></h4>
                                    <span class="chart-heading"><?php echo htmlspecialchars(get_department_name($task_data['department_id'], $conn)); ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right-sidebar-Chats">
                        <div class="msger">
                            <div class="msger-chat">


                                <?php while ($chat_reply = $chat_replies->fetch_assoc()): ?>
                                    <?php
                                    $is_current_user = $chat_reply['user_id'] == $_SESSION['id'];
                                    $msg_class = $is_current_user ? 'right-msg' : 'left-msg';
                                    $msg_profile_id = $is_current_user ? $_SESSION['id'] : $chat_reply['user_id'];
                                    $msg_name = $is_current_user ? $_SESSION['first_name'] : 'Admin';
                                    ?>
                                    <div class="msg <?php echo $msg_class; ?>">
                                        <div class="msg-img">
                                            <img src="<?php echo get_profile_id($msg_profile_id,$conn) ?>" alt="user-img" class="w-100 h-100 rounded-circle">
                                        </div>
                                        <div class="msg-bubble">
                                            <div class="msg-info">
                                                <div class="msg-info-name"><?php echo htmlspecialchars($msg_name); ?></div>
                                                <div class="msg-info-time">
                                                    <?php echo date("Y/m/d H:i", $chat_reply['replied_at']); ?>
                                                </div>
                                            </div>
                                            <pre
                                                class="msg-text"><?php echo htmlspecialchars($chat_reply['message']); ?></pre>

                                            <?php if (isset($attachments[$chat_reply['id']])): ?>
                                                <?php foreach ($attachments[$chat_reply['id']] as $attachment): ?>
                                                    <div class="msg-attachment">
                                                        <?php if (strpos($attachment['attachment'], '.pdf') !== false): ?>
                                                            <a href="https://bizguard.toolfe.com/admin/uploads/images/attachments/<?php echo htmlspecialchars($attachment['attachment']); ?>"
                                                                class="d-flex align-items-center" download target="_blank">
                                                                <img src="./assets/imgs/attachment_Icon.svg" alt="PDF Attachment">
                                                                <p class="mt-3 ms-1">
                                                                    <?php echo htmlspecialchars($attachment['attachment']); ?></p>
                                                            </a>
                                                        <?php else: ?>
                                                            <a href="https://bizguard.toolfe.com/admin/uploads/images/attachments/<?php echo htmlspecialchars($attachment['attachment']); ?>"
                                                                download>
                                                                <img src="https://bizguard.toolfe.com/admin/uploads/images/attachments/<?php echo htmlspecialchars($attachment['attachment']); ?>"
                                                                    alt="<?php echo htmlspecialchars($attachment['attachment_name']); ?>"
                                                                    style="max-width: 150px; max-height: 100px;" target="_blank">
                                                            </a>
                                                        <?php endif; ?>
                                                    </div>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endwhile; ?>


                            </div>
                            <?php  if ($task_data['status'] == 1): ?>
                                <form class="msger-inputarea" method="POST" action="./form_submissions/task-chat.php" enctype="multipart/form-data">
                                    <input type="hidden" name="ticket_id" value="<?php echo $task_id; ?>">
                                    <div class="dropdown-form" onclick="triggerFileUpload()">
                                        <img src="./assets/imgs/attachment.svg" alt="attachment">
                                        <span id="fileCount" class="badge p-1 badge-secondary fw-lighter" style="display: none;">0 files selected</span>
                                        <span id="clearFile" class="badge p-1 badge-secondary" style="display: none; cursor:pointer;" onclick="clearFileUpload(event)">X</span>
                                    </div>
                                    <input type="file" id="fileUpload" name="attachments[]" style="display: none;" onchange="handleFileSelect(event)" multiple />
                                    <textarea name="message" class="msger-input two uk-textarea" placeholder="Type Message here.."></textarea>
                                    <div class="open-emoji">
                                        <div class="p-0 d-flex align-items-center">
                                            <input type="checkbox" name="is_solved" id="flexCheckDefault" value="1" class="ms-2 mb-3 form-check-input form-check-input border border-primary">
                                            <label for="" class="text-secondary">Mark as Solved</label>
                                        </div>
                                    </div>
                                    <button class="msger-send-btn" type="submit"><i class="fa fa-location-arrow"></i></button>
                                </form>
                            <?php elseif ($task_data['status'] == 2): ?>
                                <div class="msger-inputarea">
                                   <p class="mx-auto">This Task has been closed .</p>
                                </div>

                            <?php else : ?>
                                <div class="msger-inputarea">
                                   <p class="mx-auto">This is under review and will be completed within a day.</p>
                                </div>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-md-5 box-col-5">
                <div class="left-sidebar-wrapper">
                    <div class="card">
                        <div class="card-header card-no-border">
                            <div class="header-top">
                                <h5 class="m-0">Activities</h5>
                            </div>
                        </div>
                        <div class="card-body pt-0 activity-card">
                            <div class="appointment-table customer-table table-responsive">
                                <table class="table table-bordernone">
                                    <tbody>
                                        <?php if ($task_details->num_rows > 0): ?>
                                            <tr>
                                                <td class="img-content-box fw-bolder w-100">Requester</td>
                                                <td class=""><span
                                                        class="d-block f-light"><?php echo htmlspecialchars($_SESSION['first_name'] . ' ' . $_SESSION['last_name']); ?></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="img-content-box fw-bolder w-100">Department</td>
                                                <td class=""><span
                                                        class="d-block f-light"><?php echo htmlspecialchars(get_department_name($task_data['department_id'], $conn)); ?></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="img-content-box fw-bolder w-100">Status</td>
                                                <td class=""><span
                                                        class="d-block f-light"><?php echo get_task_status($task_data['sub_status']); ?></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="img-content-box fw-bolder w-100">Priority</td>
                                                <td class=""><span
                                                        class="d-block f-light"><?php echo htmlspecialchars($task_data['priority']); ?></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="img-content-box fw-bolder w-100">Last Activity</td>
                                                <td class=""><span
                                                        class="d-block f-light"><?php echo htmlspecialchars(get_updated_time($task_data['updated_at'])); ?></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="img-content-box fw-bolder w-100">Created</td>
                                                <td class=""><span
                                                        class="d-block f-light"><?php echo htmlspecialchars(get_updated_time($task_data['created_at'])); ?></span>
                                                </td>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <td colspan="2">No results found.</td>
                                            </tr>
                                        <?php endif; ?>
                                        <tr>
                                            <?php if($task_data['status'] != 0):  ?>
                                            <td>
                                                <form action="<?php echo $_SERVER['PHP_SELF'].'?id='.$task_id; ?>" method="POST" class="">
                                                    <input type="text" name="status" value="<?php echo $task_data['status'] == 1 ? 2 : 1 ?> " class="hidden">                                                    
                                                    <button class="btn btn-outline-primary mx-auto" name="submit" value="submit" type="submit">
                                                        <?php echo get_task_opened($task_data['status'])  ?>
                                                    </button>
                                                </form>
                                            </td>
                                            <?php endif; ?>
                                            <td>
                                                <a href="./create-task.php" class="">
                                                    <button class="btn btn-primary mx-auto">Create New</button>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>
<!-- footer start-->
<?php include './includes/footer.php'; ?>