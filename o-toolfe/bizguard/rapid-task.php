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
          <h3>Create Rapid Task</h3>
        </div>
        <div class="col-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">
                <svg class="stroke-icon">
                  <use href="files-front/svg/icon-sprite.svg#stroke-home"></use>
                </svg></a></li>
            <li class="breadcrumb-item">Create Task</li>
            <li class="breadcrumb-item active">Rapid Task</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <form action="./form_submissions/create-task.php" method="POST" class="needs-validation" novalidate enctype="multipart/form-data" id="createTaskForm">
      <input type="hidden" value="1" name="rapid" class="">
      <div class="row">
        <div class="col-sm-12">
          <div class="card">
            <div class="card-body">
              <div class="form theme-form">
                <div class="row">
                  <div class="col">
                    <div class="mb-3">
                      <label>Task Title</label>
                      <input class="form-control" id="validationTooltip01" name="task_title" type="text" placeholder="Enter your Task Title *" required>
                      <div class="invalid-feedback">Please enter a task title.</div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="mb-3">
                      <label>Priority</label>
                      <input class="form-control" value="Rapid" readonly type="text" placeholder="">
                      <input class="form-control" hidden value="rapid" readonly name="priority" type="text" placeholder="">
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
                      <div class="invalid-feedback">Please select a department.</div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <div class="mb-3">
                      <label>Task Description</label>
                      <textarea name="description" placeholder="Enter your task details" class="form-control" id="exampleFormControlTextarea4" rows="3" required></textarea>
                      <div class="invalid-feedback">Please enter a task description.</div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <div class="mb-3">
                      <label>Include Relevant Documents</label>
                      <div class="dropzone position-relative overflow-y-auto" id="singleFileUpload">
                        <input type="file" name="task_attachments[]" class="opacity-0 position-absolute z-2 top-0 bottom-0 start-0 end-0" multiple onchange="processFiles(event)" required>
                        <div id="uploadMessage" class="dz-message needsclick">
                          <i class="icon-cloud-up"></i>
                          <h6>Drop files here or click to upload.</h6>
                          <span class="note needsclick">You can also upload <strong>multiple files</strong> together</span>
                        </div>
                        <div id="filePreviewContainer" class="bg-body-secondary bg-opacity-10 d-flex flex-wrap justify-content-center align-items-center position-absolute top-0 bottom-0 start-0 end-0"></div>
                      </div>
                      <div class="invalid-feedback">Please upload at least one valid file (JPEG, PNG, PDF, max 2MB).</div>
                    </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col">
                    <div class="text-start">
                      <a class="btn font-danger" href="">Clear</a>
                    </div>
                  </div>
                  <div class="col">
                    <div class="text-end">
                      <button class="btn btn-warning-gradien" type="submit" title="btn btn-warning-gradien">Buy Rapid Task</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
  <!-- Container-fluid Ends-->
</div>



<!-- footer start-->
<?php include 'includes/footer.php'; ?>

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
</script>
