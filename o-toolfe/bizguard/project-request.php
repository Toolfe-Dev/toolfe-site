<?php

include './includes/header.php';

?>
<!-- Page Sidebar Ends-->
<div class="page-body">
  <div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-6">
          <h3>
            Create Project </h3>
        </div>
        <div class="col-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">
                <svg class="stroke-icon">
                  <use href="assets/svg/icon-sprite.svg#stroke-home"></use>
                </svg></a></li>
            <li class="breadcrumb-item active">Create Project </li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-body">
            <form method="POST" action="form_submissions/create-project.php" enctype="multipart/form-data"
              class="form theme-form needs-validation" novalidate id="createProjectForm">
              <div class="row">
                <div class="col-sm-6">
                  <div class="mb-3">
                    <label>Project Title <span class="required">*</span></label>
                    <input class="form-control" type="text" name="title" placeholder="Project name *" required>
                    <div class="invalid-feedback">Please enter a project title.</div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="mb-3">
                    <label>Priority <span class="required">*</span></label>
                    <select class="form-select" name="priority" required>
                      <option value="" disabled selected>Select Priority</option>
                      <option value="low">Low</option>
                      <option value="medium">Medium</option>
                      <option value="high">High</option>
                      <option value="urgent">Urgent</option>
                    </select>
                    <div class="invalid-feedback">Please select a priority.</div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="mb-3">
                    <label>Project Category <span class="required">*</span></label>
                    <select class="form-select" name="category" required>
                      <option value="" disabled selected>Select Category</option>
                      <option value="UX/UI Design">UX/UI Design</option>
                      <option value="Web Development">Web Development</option>
                      <option value="Software Development">Software Development</option>
                      <option value="Software Testing">Software Testing</option>
                      <option value="Cloud Automation">Cloud Automation</option>
                    </select>
                    <div class="invalid-feedback">Please select a category.</div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="mb-3">
                    <label>Project Budget range <span class="required">*</span></label>
                    <select class="form-select" name="rate" required>
                      <option value="" disabled selected>Select Budget Range</option>
                      <option value="0-5k">0-50K</option>
                      <option value="50k-3l">50K-3L</option>
                      <option value="3l-10l">3L-10L</option>
                      <option value="10l">Above 10L</option>
                    </select>
                    <div class="invalid-feedback">Please select a budget range.</div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="mb-3">
                    <label>Starting date</label>
                    <input class="datepicker-here form-control" type="text" name="starting_date" required >
                    <div class="invalid-feedback">Please enter a starting date.</div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="mb-3">
                    <label>Ending date</label>
                    <input class="datepicker-here form-control" type="text" name="ending_date" required>
                    <div class="invalid-feedback">Please enter an ending date.</div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="mb-3">
                    <label>Enter Project Description <span class="required">*</span></label>
                    <textarea class="form-control" name="description" id="exampleFormControlTextarea4" rows="3"
                      required></textarea>
                    <div class="invalid-feedback">Please enter a project description.</div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="mb-3">
                    <label>Include Relevant Documents</label>
                    <div class="dropzone position-relative overflow-y-auto" id="singleFileUpload">
                      <input type="file" name="task_attachments[]"
                        class="opacity-0 position-absolute z-2 top-0 bottom-0 start-0 end-0" multiple
                        onchange="processFiles(event)">
                      <div id="uploadMessage" class="dz-message needsclick">
                        <i class="icon-cloud-up"></i>
                        <h6>Drop files here or click to upload.</h6>
                        <span class="note needsclick">You can also upload <strong>multiple files</strong>
                          together</span>
                      </div>
                      <div id="filePreviewContainer"
                        class="bg-body-secondary bg-opacity-10 d-flex flex-wrap justify-content-center align-items-center position-absolute top-0 bottom-0 start-0 end-0">
                      </div>
                    </div>
                    <div class="invalid-feedback">Please upload at least one valid file (JPEG, PNG, PDF, max 2MB).</div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="text-end">
                    <a class="btn btn-outline-danger me-3" href="">Clear</a>
                    <button class="btn btn-primary" type="submit">Submit</button>
                  </div>
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid Ends-->
</div>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById('createProjectForm');

    form.addEventListener('submit', function (event) {
      if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add('was-validated');
    }, false);
  });
</script>
<!-- footer start-->
<?php include './includes/footer.php'; ?>

