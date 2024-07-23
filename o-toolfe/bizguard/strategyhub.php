<?php 
include './includes/header.php';

$announcments = get_announcemnet_data($id, $conn);
?>

<!-- Page Sidebar Ends-->
<div class="page-body">
  <div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-6">
          <h3>Strategy Hub </h3>
        </div>
        <div class="col-6">
          <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">                                       
                        <svg class="stroke-icon">
                          <use href="assets/svg/icon-sprite.svg#stroke-home"></use>
                        </svg></a>
                      </li>
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
                    <?php if (empty($announcments)) { ?>
                      <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                        <img src="assets/imgs/announcment.svg" class="mt-5" width="450px" alt="">
                      </div>
                    <?php } else { ?>
                      <?php foreach($announcments as $announcment) { ?>
                        <div class="info-block">
                          <div class="d-flex justify-content-between">
                            <p><?php echo date('d/m/y H:i', $announcment['created_at']); ?></p>
                          </div>
                          <a href="strategy-details.php?subject_id=<?php echo $announcment['id']; ?>"><h6><?php echo $announcment['subject']; ?></h6></a>
                          <p><?php echo $announcment['description']; ?></p>
                        </div>
                      <?php } ?>
                    <?php } ?>
                  </div>
                  <div class="col-xxl-3 col-xl-4 box-col-12">
                    <div class="info-block d-flex justify-content-center flex-column">
                      <img src="assets/imgs/strategy.svg" width="240px" alt="" class="align-self-center">
                      <h4 class="mb-2">Immediate Help at Your Fingertips</h4>
                      <p>Don't hesitate! Create a task now and we'll respond as soon as possible. Enjoy fast and efficient service tailored to your needs.</p>
                      <a href="create-task.php" class=""><button class="btn btn-primary align-self-start mt-4">Creat Task</button></a>
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
