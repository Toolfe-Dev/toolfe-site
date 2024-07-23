<?php

include ('includes/header.php');

$department_sql = "SELECT * FROM tickets_departments ";
$department_query = $conn->query($department_sql);

?>
<div class="page-body">
  <div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-6">
          <h3>Create Task</h3>
        </div>
        <div class="col-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">
                <svg class="stroke-icon">
                  <use href="files-front/svg/icon-sprite.svg#stroke-home"></use>
                </svg></a></li>
            <li class="breadcrumb-item active">Create Tasks</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid starts-->
  <div class="container-fluid">
  <form action="./form_submissions/create-task.php" method="POST" class="needs-validation custom-input" novalidate="" enctype="multipart/form-data" id="createTaskForm">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <?php if ($plane_task_status['task_status']):?>
                        <div class="form theme-form">
                            <div class="row">
                                <div class="col position-relative">
                                    <div class="mb-3">
                                        <label class="form-label" for="validationTooltip01">Task Title</label>
                                        <input class="form-control" id="validationTooltip01" name="task_title" type="text" placeholder="Enter your Task Title *" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label>Priority</label>
                                        <select name="priority" id="priority" class="form-select" required>
                                            <option value="">Select Priority</option>
                                            <option value="low">Low</option>
                                            <option value="medium">Medium</option>
                                            <option value="high">High</option>
                                            <option value="rapid">Rapid Task (Buy premium $3999)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label>Department</label>
                                        <select name="department" class="form-select" required>
                                            <option value="">Select Department</option>
                                            <?php
                                            if ($department_query->num_rows > 0) {
                                                while ($row = $department_query->fetch_assoc()) {
                                                    echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label>Task Description</label>
                                        <textarea name="description" placeholder="Enter your task details" class="form-control" id="exampleFormControlTextarea4" rows="3" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label>Include Relevant Documents</label>
                                        <div class="dropzone position-relative overflow-y-auto" id="singleFileUpload">
                                            <input type="file" name="task_attachments[]" class="opacity-0 position-absolute z-2 top-0 bottom-0 start-0 end-0" multiple onchange="processFiles(event)">
                                            <div id="uploadMessage" class="dz-message needsclick">
                                                <i class="icon-cloud-up"></i>
                                                <h6>Drop files here or click to upload.</h6>
                                                <span class="note needsclick">You can also upload <strong>multiple files</strong> together</span>
                                            </div>
                                            <div id="filePreviewContainer" class="bg-body-secondary bg-opacity-10 d-flex flex-wrap justify-content-center align-items-center position-absolute top-0 bottom-0 start-0 end-0"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <!-- <div class="text-start"><a class="btn btn-outline-dark btn-hover-effect f-w-500" href="https://buy.stripe.com/eVa4il7jb5GG1jy9AA">Buy Priority Tasks @Rs.3,999 /-</a></div> -->
                                </div>
                                <div class="col">
                                    <div class="text-end">
                                        <a class="btn font-danger" href="create-task.php" type="reset">Clear</a>
                                        <button type="submit" class="btn btn-primary btn-hover-effect f-w-500" name="createTask">Create Task</button>
                                        <button type="submit" class="purchase-btn btn btn-primary btn-hover-effect f-w-500 hidden" id="buyRapidBtn" name="buyRapidTask">Buy Rapid Task</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php else:?>
                        <div class="">
                            <div class="row p-4 align-items-center justify-content-between rounded-3 ">
                                <div class="col-lg-4 p-0 overflow-hidden ">
                                    <div class="lc-block"><img class="rounded-start w-100" src="assets/imgs/upgrade-plan.svg" width="720"></div>
                                </div>
                                <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                                    <div class="lc-block mb-3">
                                        <div class="d-flex flex-column justify-content-center">
                                        <div editable="rich " class="d-flex align-items-center">
                                            <img src="assets/imgs/alert.png" alt="alert" class=" me-4">
                                            <h3 class="fw-semibold display-6 mb-lg-3">You have reached your plan limits</h3>
                                        </div>
                                    </div>
                                    <div class="lc-block mb-3">
                                        <div editable="rich">
                                            <p class="fs-6 mb-lg-5">Task limit reached? Don’t let anything hold you back! Upgrade your plan now or choose Rapid for unlimited productivity and seamless workflow. Keep your momentum going strong.</p>
                                        </div>          
                                    </div>
                                        </div>
                                    <div class="lc-block d-grid gap-2 d-md-flex justify-content-md-start">
                                        <a class="" href="rapid-task.php" role="button">
                                            <button class="btn btn-warning-gradien" type="button" title="btn btn-warning-gradien">Buy Rapid Task</button>
                                        </a>
                                        <a class="btn btn-outline-primary px-4" href="upgrade-plane.php" role="button">Upgrade Plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
    </form>
  </div>
  <!-- Container-fluid Ends-->
</div>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById('createTaskForm');

    form.addEventListener('submit', function(event) {
        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
        }

        form.classList.add('was-validated');
    }, false);
});

// Example of handling Rapid Task purchase button
document.getElementById('priority').addEventListener('change', function() {
    const buyRapidBtn = document.getElementById('buyRapidBtn');
    if (this.value === 'rapid') {
        buyRapidBtn.classList.remove('hidden');
    } else {
        buyRapidBtn.classList.add('hidden');
    }
});
</script>


<!-- footer start-->
<?php include 'includes/footer.php'; ?>