<?php 
include './includes/header.php';

$services = get_ticket_details($id,$conn);

?>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-6">
                  <h4>
                    BizGuard 
                  </h4>
                </div>
                <div class="col-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">                                       
                        <svg class="stroke-icon">
                          <use href="assets/svg/icon-sprite.svg#stroke-home"></use>
                        </svg></a>
                      </li>
                    <li class="breadcrumb-item active">Dashboard</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col-xxl-3 col-ed-4 col-xl-4 box-col-4">
                <div class="row"> 
                  <div class="col-xl-12 col-md-6"> 
                    <div class="card social-profile">
                      <div class="card-body">
                        <div class="social-img-wrap"> 
                          <div class="social-img"><img src="<?php echo get_profile_id($id,$conn) ?>" alt="profile" style="width:80px; height:80px;"></div>
                          <div class="edit-icon">
                            <svg>
                              <use href="assets/svg/icon-sprite.svg#profile-check"></use>
                            </svg>
                          </div>
                        </div>
                        <div class="social-details">
                          <h5 class="mb-1"><a href="">
                            <?php 
                              echo $full_name;
                            ?>
                          </a></h5><span class="f-light">
                            <?php 
                              echo $email;
                            ?>
                          </span>
                          <ul class="social-follow">
                            <li>
                              <h5 class="mb-0"><?php echo count($closed_task)*23 . ' hrs' ?></h5><span class="f-light">Hours Saved</span>
                            </li>
                            <li>
                              <h6 class="mb-0"><?php echo get_user_plane_name($user_plane);  ?></h6><span class="f-light"><?php echo get_subscription_type($plane_mon); ?></span>
                            </li>
                            <li>
                              <h5 class="mb-0"><?php  echo count($services['all_task']); ?></h5><span class="f-light">All Tasks</span>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-12 col-md-6"> 
                  <div class="card ">
                  <div class="card-body text-center pt-3"> 
                    <div class=" mx-auto d-flex justify-content-center align-items-center">
                      <img src="./assets/images/premium-gold.png" alt="" class="mx-auto">
                    </div>
                    <h6 class="mb-3 text-center">
                      <a href="#">Upgrade to Premium </a> for exclusive benefits, skipping the line for a seamless experience
                    </h6>
                      <a class="purchase-btn mx-auto text-center btn btn-primary btn-hover-effect f-w-500" href="upgrade-plane.php" target="">Purchase Now</a>
                  </div>
                </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-9 col-ed-8 col-xl-8 box-col-8e"> 
                <div class="row"> 
                  <div class="col-md-4 col-sm-6"> 
                    <div class="card social-widget widget-hover">
                      <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                          <div class="d-flex align-items-center gap-2">
                            <div class="social-icons"><img src="assets/imgs/all-task.png" alt="facebook icon"></div><span>Task in Queue</span>
                          </div><span class="font-success f-12 d-xxl-block d-xl-none"></span>
                        </div>
                        <div class="social-content">
                          <div> 
                            <h1 class=" ms-5 p-0 fw-bolder" style="color: #f27b01;">
                              <?php  echo count($services['queued']); ?>
                            </h1><span class="f-light"></span>
                          </div>
                          <div class="social-chart">
                            <div id="radial-facebook" data-task="<?php echo task_percentage(count($monthly_task),count($services['queued'])) ; ?>"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6"> 
                    <div class="card social-widget widget-hover">
                      <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                          <div class="d-flex align-items-center gap-2">
                            <div class="social-icons"><img src="assets/imgs/open-task.png" alt="instagram icon"></div><span>Open Tasks</span>
                          </div><span class="font-success f-12 d-xxl-block d-xl-none"></span>
                        </div>
                        <div class="social-content">
                          <div> 
                          <h1 class=" ms-5 p-0 fw-bolder" style="color: #f27b01;">
                              <?php  echo count($services['opened']); ?>
                            </h1><span class="f-light"></span>
                          </div>
                          <div class="social-chart">
                            <div id="radial-instagram" data-task="<?php echo task_percentage(count($monthly_task),count($services['opened'])) ; ?>" ></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4"> 
                    <div class="card social-widget widget-hover">
                      <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                          <div class="d-flex align-items-center gap-2">
                            <div class="social-icons"><img src="assets/imgs/closed-task.png" alt="twitter icon"></div><span>Closed Tasks</span>
                          </div><span class="font-success f-12 d-xxl-block d-xl-none"></span>
                        </div>
                        <div class="social-content">
                          <div> 
                            <h1 class=" ms-5 p-0 fw-bolder" style="color: #f27b01;">
                              <?php  echo count($services['closed']);  ?>
                            </h1><span class="f-light"></span>
                          </div>
                          <div class="social-chart">
                            <div id="radial-twitter" data-task="<?php echo task_percentage(count($monthly_task),count($services['closed'])) ; ?>" ></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-8"> 
                  <div class="card schedule-card d-flex " style="height: 90%;">
                  <div class="card-header card-no-border">
                    <div class="header-top">
                      <h5 class="m-0">Recent Services</h5>
                      <div class="card-header-right-icon">
                        <a class="btn btn-light-primary" href="create-task.php">+ Create</a>
                      </div>
                    </div>
                  </div>
                  <div class="card-body pt-0"> 
                    <ul class="schedule-list overflow-y-auto"> 
                     
                      <?php 
                          
                          if (count($services['opened']) > 0) {
                            $count = 0;
                              foreach ($services['opened']  as $ticket) {
                                  if ($count >= 3) break;
                                  echo('
                                  <li class="primary">
                                  <!-- <img src="assets/images/dashboard/user/4.jpg" alt="profile"> -->
                                    <div> 
                                    <a href="task-details.php?id='.$ticket['id'].'">
                                    
                                      <h6 class="mb-1">'.$ticket['subject'].' </h6></a>
                                      <ul>
                                        <li class="f-light">
                                          <svg class="fill-icon f-light">
                                            <use href="assets/svg/icon-sprite.svg#bag"></use>
                                          </svg><span>'.date("F j, Y", $ticket['created_at']).'</span>
                                        </li>
                                        <li class="f-light">
                                          <svg class="fill-icon f-success">
                                            <use href="assets/svg/icon-sprite.svg#clock"></use>
                                          </svg><span> '.date("g:i a",$ticket['created_at']).'</span>
                                        </li>
                                        
                                      </ul>
                                      <div class="mt-3">
                                          </svg><span class=" bg-primary px-2 py-1 rounded-1">Opened</span></div>
                                    </div>
                                  </li>
                                  ');
                              }
                            }
                           

                            
                            else {
                            echo('
                                  <div class="text-center d-flex align-items-center justify-content-center w-100 h-auto mt-5">
                                    <img src="assets/imgs/task-not-available2.png" width="200px" alt="profile">
                                  </div>
                            ');
                        };
                          
                      ?>
                      
                    </ul>
                    <div class="w-100 d-flex justify-content-end">
                      <?php 
                        if (count($services['opened']) > 3){
                          echo('
                           <button class="btn mb-3 btn-primary btn-sm">see more </button>

                          ');
                        }
                      ?>
                    </div>
                  </div>
                </div>
                  </div>
                  <div class="col-md-4"> 
                    <div class="row"> 
                      <div class="col-md-12 col-sm-6">
                        <div class="card click-widgets widget-hover">
                          <div class="card-body p-0 border-0"> 
                          <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="./assets/imgs/home_baner.png" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="./assets/imgs/home_baner1.png" class="d-block w-100" alt="...">
                              </div>
                              <!-- <div class="carousel-item">
                                <img src="..." class="d-block w-100" alt="...">
                              </div> -->
                            </div>
                          </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 col-sm-6">
                        <div class="card height-equal-2"> 
                          <div class="card-body">
                            <div class="default-datepicker">
                              <div class="datepicker-here" data-language="en"></div>
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
