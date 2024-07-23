<?php 
include './includes/header.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $subject_id = $_GET['subject_id'];

    $announcment_data = get_announcemnet_details($subject_id,$conn);
    

}

?>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-6">
                  <h3>Strategy Hub</h3>
                </div>
                <div class="col-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">                                       
                        <svg class="stroke-icon">
                          <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                        </svg></a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Strategy Hub</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid search-page">
            <div class="row">
              <div class="col-sm-12">
                <div class="card" style="min-height: 80vh;">
                  <div class="card-body">
                    <div class="tab-content" id="top-tabContent">
                      <div class="search-links tab-pane fade show active" id="all-links" role="tabpanel" aria-labelledby="all-link">
                        <div class="row">
                          <div class="col-xxl-9 col-xl-8 box-col-12">
                            <div class="pb-3 border-b-primary d-flex justify-content-between">
                              <div class="">
                                <h3 class=""><?php echo $announcment_data['subject'] ; ?></h3>
                                <p class=""><?php echo date('d/m/y h:i',$announcment_data['created_at']) ; ?></p>
                              </div>
                              <a href="./create-task.php" class="">
                                  <button class="btn btn-primary align-self-end mt-4">Create Task</button>
                                </a>
                            </div>
                            <div class="body py-3">
                              <p class=""><?php echo $announcment_data['description'] ; ?></p>
                            <?php echo $announcment_data['announcement'] ; ?>
                            </div>
                          </div>
                          <div class="col-xxl-3 col-xl-4 box-col-12">
                          
                            <div class="info-block d-flex justify-content-center  flex-column ">
                                <img src="assets/imgs/strategy.svg" width="240px" alt="" class="align-self-center">
                                <h3 class="">Still no luck? we can help!</h3>
                                <p class="">Submit a ticket and we’ll get back to you as soon as possible.</p>
                                <a href="./project-request.php" class="">
                                  <button class="btn btn-primary align-self-end mt-4">Submit a Project</button>
                                </a>
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