<?php
include './includes/header.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['delete_notification'])) {
    $notificationId = $_POST['notification_id'];

    if (!empty($notificationId)) {
      $query = "DELETE FROM `notifications` WHERE `id` = ?";
      $stmt = $conn->prepare($query);
      $stmt->bind_param('i', $notificationId);

      if ($stmt->execute()) {
        $notifications = get_notification_data($id, $conn);
        echo "Notification deleted successfully.";
      } else {
        echo "Error deleting notification: " . $stmt->error;
      }
    } else {
      echo "Invalid notification ID.";
    }
  } elseif (isset($_POST['clear_all_notifications'])) {
    $userId = $id; // Assuming user ID is stored in a session or passed with the form

    if (!empty($userId)) {
      $query = "DELETE FROM `notifications` WHERE `user_id` = ?";
      $stmt = $conn->prepare($query);
      $stmt->bind_param('i', $userId);

      if ($stmt->execute()) {
        $notifications = get_notification_data($id, $conn);
        echo "All notifications cleared successfully.";
      } else {
        echo "Error clearing notifications: " . $stmt->error;
      }
    } else {
      echo "Invalid user ID.";
    }
  } else {
    echo "Invalid form submission.";
  }
} else {
  echo "Invalid request method.";
}
?>

<!-- Page Sidebar Ends-->
<div class="page-body">
  <div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-6">
          <h3>Tasks</h3>
        </div>
        <div class="col-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">
                <svg class="stroke-icon">
                  <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                </svg></a></li>
            <li class="breadcrumb-item">Apps</li>
            <li class="breadcrumb-item active">Tasks</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <div class="email-wrap bookmark-wrap">
      <div class="row">
        <div class="col-xl-9 col-md-12 mx-auto box-col-12">
          <div class="email-right-aside bookmark-tabcontent">
            <div class="card email-body radius-left">
              <div class="ps-0">
                <div class="tab-content">
                  <div class="tab-pane fade active show" id="pills-created" role="tabpanel"
                    aria-labelledby="pills-created-tab">
                    <div class="card mb-0">
                      <div class="card-header d-flex">
                        <h5 class="mb-0">Notifications</h5>
                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST"
                          style="display:inline;">
                          <input type="hidden" name="user_id" value="<?php echo $userId; ?>">
                          <!-- Assuming you have the user ID stored somewhere -->
                          <button type="submit" name="clear_all_notifications"
                            style="border:none;background:none;color:red;cursor:pointer;">
                            <i class="me-2" data-feather="trash-2"></i>Clear All
                          </button>
                        </form>
                      </div>
                      <div class="card-body p-0">
                        <div class="taskadd">
                          <div class="table-responsive">
                            <table class="table">
                              <?php if (empty($notifications)) { ?>
                                <tr>
                                  <td colspan="2" class="text-center" style="min-height: 600px;">
                                    <img src="assets/imgs/notification-page.svg" alt="No Notifications" style="width: 400px;">
                                    <h5>No notifications available</h5>
                                  </td>
                                </tr>
                              <?php } else { ?>
                                <?php foreach ($notifications as $notification) { ?>
                                  <tr class="">
                                    <td>
                                      <a href="./task-details.php?id=<?php echo extractTicketNumber($notification['location']) ?>"
                                        class="">
                                        <h6 class="task_title_0">
                                          <?php echo getNotificationMessage($notification['message_key']) ?></h6>
                                      </a>
                                      <p class="project_name_0"><?php echo get_updated_time($notification['created_at']) ?>
                                      </p>
                                    </td>
                                    <td class="text-end">
                                      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST"
                                        style="display:inline;">
                                        <input type="hidden" name="notification_id"
                                          value="<?php echo $notification['id']; ?>">
                                        <button type="submit" name="delete_notification"
                                          style="border:none;background:none;color:red;cursor:pointer;">
                                          <i data-feather="trash-2"></i>
                                        </button>
                                      </form>
                                    </td>
                                  </tr>
                                <?php } ?>
                              <?php } ?>
                            </table>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
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