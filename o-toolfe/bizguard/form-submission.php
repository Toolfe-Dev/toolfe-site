<?php
include './includes/header.php';



?>


<div class="page-body">

  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <form action="./form_submissions/create-task.php" method="POST" class="needs-validation custom-input" novalidate="" enctype="multipart/form-data" id="createTaskForm">
      <div class="row">
        <div class="col-sm-12">
          <div class="">
            <div class="">
            <div class="">
                <div class="row p-4 align-items-center rounded-3 " style="height: 80vh;">
                  <div class="col-lg-4 p-0 overflow-hidden">
                    <div class="lc-block"><img class="rounded-start w-100" src="assets/imgs/submit-img.png" width="720"></div>
                  </div>
                  <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                    <div class="lc-block mb-3">
                      <div editable="rich " class="d-flex align-items-center">
                        <img src="assets/imgs/tick-mark.png" alt="alert" class=" me-4">
                        <h3 class="fw-semibold display-6">Your request has been successfully submitted</h3>
                      </div>
                    </div>
                    <div class="lc-block mb-3">
                      <div editable="rich">
                        <p class="">Our team will be in touch with you within the next 2 hours. Thank you for your patience and understanding. You will now be redirected to the task page in next 20 seconds.</p>
                      </div>
                    </div>
                    <div class="lc-block d-grid gap-2 d-md-flex justify-content-md-start">
                      <a class="" href="rapid-task.php" role="button">
                        <button class="btn btn-primary" type="button" title="btn btn-warning-gradien">Go to Bizguard Task</button>
                      </a>
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




<?php include './includes/footer.php'  ?>