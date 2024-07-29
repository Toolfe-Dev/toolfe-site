<?php
require './db/connection.php';
include ('./includes/header.php');

// Fetch all tasks
$all_task_query = "SELECT * FROM tickets WHERE user_id = '$id'";
$closed_task_query = "SELECT * FROM tickets WHERE user_id = '$id' AND status = 2";
$open_task_query = "SELECT * FROM tickets WHERE user_id = '$id' AND status = 1 ";

$all_task_result = $conn->query($all_task_query);
$closed_task_result = $conn->query($closed_task_query);
$open_task_result = $conn->query($open_task_query);

$all_task = [];
$closed_task = [];
$open_task = [];

// Fetch tasks into arrays
while ($row = $all_task_result->fetch_assoc()) {
    $all_task[] = $row;
}

while ($row = $closed_task_result->fetch_assoc()) {
    $closed_task[] = $row;
}

while ($row = $open_task_result->fetch_assoc()) {
    $open_task[] = $row;
}

// Reverse the arrays
$all_task = array_reverse($all_task);
$closed_task = array_reverse($closed_task);
$open_task = array_reverse($open_task);
?>

<!-- Page Sidebar Ends-->
<div class="page-body">
  <div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-6">
          <h3>Bizguard Task</h3>
        </div>
        <div class="col-6">
          <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">                                       
                        <svg class="stroke-icon">
                          <use href="assets/svg/icon-sprite.svg#stroke-home"></use>
                        </svg></a></li>
            <li class="breadcrumb-item active">Bizguard Task</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <div class="row project-cards">
      <div class="col-md-12 project-list">
        <div class="card">
          <div class="row">
            <div class="col-md-6">
              <ul class="nav nav-tabs border-tab" id="top-tab" role="tablist">
                <li class="nav-item"><a class="nav-link active" id="top-home-tab" data-bs-toggle="tab" href="#top-home"
                    role="tab" aria-controls="top-home" aria-selected="true"><i data-feather="target"></i>All Task</a></li>
                    <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-bs-toggle="tab" href="#top-contact"
                    role="tab" aria-controls="top-contact" aria-selected="false"><i
                      data-feather="check-circle"></i>Open Task</a></li>
                    <li class="nav-item"><a class="nav-link" id="profile-top-tab" data-bs-toggle="tab" href="#top-profile"
                    role="tab" aria-controls="top-profile" aria-selected="false"><i data-feather="info"></i>Closed Task</a>
                </li>

              </ul>
            </div>
            <div class="col-md-6">
              <div class="form-group mb-0 me-0"></div><a class="btn btn-primary" href="create-task.php"> <i
                  data-feather="plus-square"> </i>Create New Task</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-12">
        <div class="card">
          <div class="card-body">
            <div class="tab-content" id="top-tabContent">
              <div class="tab-pane fade show active" id="top-home" role="tabpanel" aria-labelledby="top-home-tab">
                <div class="row">
                  <?php
                  if (empty($all_task)) {
                    echo '<div class="text-center">
                            <h3 class="display-6">No Tasks Available</h3>
                            <img src="./assets/imgs/task-not-available.webp" alt="No tasks available" class="img-fluid">
                          </div>';
                } else {
                    foreach ($all_task as $row) {
                        if ($row['status'] == 1) {
                            $status = '<div class=" mt-2 fw-medium text-white rounded-1 text-center w-auto px-2 py-1" style="font-size: 10px; background : #087990; ">Open</div>';
                        } elseif ($row['status'] == 2) {
                            $status = '<div class=" mt-2 fw-medium text-white rounded-1 text-center w-auto px-2 py-1" style="font-size: 10px; background : #E35D6A; ">Closed</div>';
                        } else {
                            $status = '<div class=" mt-2 fw-medium text-white rounded-1 text-center w-auto px-2 py-1" style="font-size: 10px; background : #6F42C1; ">Queued</div>';
                        }
                
                        if ($row['updated_at']) {
                          $updated_at = date("Y/m/d h:i a", $row['updated_at'] + (5.5 * 3600));
                      } else {
                          $updated_at = date("Y/m/d h:i a", $row['created_at'] + (5.5 * 3600));
                      }
                
                        echo '<div class="col-xxl-4 col-md-6">
                                <div class="project-box">
                                  <div class="d-flex justify-content-between ">
                                    <div class="">
                                      <div class="course-widget"> 
                                        <div class="course-icon"> 
                                          <svg class="fill-icon">
                                            <text x="2" y="18"  class="h5 fw-medium" fill="white">11</text>
                                          </svg>
                                        </div>
                                      </div>
                                      <a href="./task-details.php?id=' . $row['id'] . '" class=""><h5 class="mt-3">' . $row['subject'] . '</h5></a>
                                      <div class="d-flex align-items-center">
                                        <i style="color:#f27b01; width:15px;" class="me-2" data-feather="cpu"></i><span class="">Request #' . $row['id'] . '</span>
                                      </div>
                                      <div class="d-flex align-items-center">
                                        <i style="color:#f27b01; width:15px;" class="me-2" data-feather="clock"></i><span class="">Last Activity: ' . $updated_at . '</span>
                                      </div>  
                                    </div>
                                    <div class="">
                                    ' . get_task_status($row['sub_status']) . '
                                      ' . $status . '
                                    </div>
                                  </div>     
                                  <div class=" d-flex justify-content-end align-items-center">
                                    <img src="./assets/imgs/task-lable.webp" alt="#tasks" class="">
                                  </div>                     
                                </div>
                              </div>';
                    }
                }
                  ?>
                </div>
              </div>
              <div class="tab-pane fade" id="top-profile" role="tabpanel" aria-labelledby="profile-top-tab">
                <div class="row">
                  <?php
                  if (empty($closed_task)) {
                    echo '<div class="text-center">
                            <h3 class="display-6">No Tasks Available</h3>
                            <img src="./assets/imgs/task-not-available.webp" alt="No tasks available" class="img-fluid">
                          </div>';
                } else {
                    foreach ($closed_task as $row) {
                      if ($row['status'] == 1) {
                        $status = '<div class=" mt-2 fw-medium text-white rounded-1 text-center w-auto px-2 py-1" style="font-size: 10px; background : #087990; ">Open</div>';
                    } elseif ($row['status'] == 2) {
                        $status = '<div class=" mt-2 fw-medium text-white rounded-1 text-center w-auto px-2 py-1" style="font-size: 10px; background : #E35D6A; ">Closed</div>';
                    } else {
                        $status = '<div class=" mt-2 fw-medium text-white rounded-1 text-center w-auto px-2 py-1" style="font-size: 10px; background : #6F42C1; ">Queued</div>';
                    }
                
                    if ($row['updated_at']) {
                      $updated_at = date("Y/m/d h:i a", $row['updated_at'] + (3.5 * 3600));
                  } else {
                      $updated_at = date("Y/m/d h:i a", $row['created_at'] + (3.5 * 3600));
                  }
                
                        echo '<div class="col-xxl-4 col-md-6">
                                <div class="project-box">
                                  <div class="d-flex justify-content-between ">
                                    <div class="">
                                      <div class="course-widget"> 
                                        <div class="course-icon"> 
                                          <svg class="fill-icon">
                                            <text x="2" y="18"  class="h5 fw-medium" fill="white">11</text>
                                          </svg>
                                        </div>
                                      </div>
                                      <a href="./task-details.php?id=' . $row['id'] . '" class=""><h5 class="mt-3">' . $row['subject'] . '</h5></a>
                                      <div class="d-flex align-items-center">
                                        <i style="color:#f27b01; width:15px;" class="me-2" data-feather="cpu"></i><span class="">Request #' . $row['id'] . '</span>
                                      </div>
                                      <div class="d-flex align-items-center">
                                        <i style="color:#f27b01; width:15px;" class="me-2" data-feather="clock"></i><span class="">Last Activity: ' . $updated_at . '</span>
                                      </div>  
                                    </div>
                                    <div class="">
                                    ' . get_task_status($row['sub_status']) . '
                                    ' . $status . '</div>
                                  </div>     
                                  <div class=" d-flex justify-content-end align-items-center">
                                    <img src="./assets/imgs/task-lable.webp" alt="#tasks" class="">
                                  </div>                     
                                </div>
                              </div>';
                    }
                }
                  ?>
                </div>
              </div>
              <div class="tab-pane fade" id="top-contact" role="tabpanel" aria-labelledby="contact-top-tab">
                <div class="row">
                  <?php
                  if (empty($open_task)) {
                    echo '<div class="text-center">
                            <h3 class="display-6">No Tasks Available</h3>
                            <img src="./assets/imgs/task-not-available.webp" alt="No tasks available" class="img-fluid">
                          </div>';
                } else {
                    foreach ($open_task as $row) {
                      if ($row['status'] == 1) {
                        $status = '<div class=" mt-2 fw-medium text-white rounded-1 text-center w-auto px-2 py-1" style="font-size: 10px; background : #087990; ">Open</div>';
                    } elseif ($row['status'] == 2) {
                        $status = '<div class=" mt-2 fw-medium text-white rounded-1 text-center w-auto px-2 py-1" style="font-size: 10px; background : #E35D6A; ">Closed</div>';
                    } else {
                        $status = '<div class=" mt-2 fw-medium text-white rounded-1 text-center w-auto px-2 py-1" style="font-size: 10px; background : #6F42C1; ">Queued</div>';
                    }
                
                    if ($row['updated_at']) {
                      $updated_at = date("Y/m/d h:i a", $row['updated_at'] + (3.5 * 3600));
                  } else {
                      $updated_at = date("Y/m/d h:i a", $row['created_at'] + (3.5 * 3600));
                  }
                
                        echo '<div class="col-xxl-4 col-md-6">
                                <div class="project-box">
                                  <div class="d-flex justify-content-between ">
                                    <div class="">
                                      <div class="course-widget"> 
                                        <div class="course-icon"> 
                                          <svg class="fill-icon">
                                            <text x="2" y="18"  class="h5 fw-medium" fill="white">11</text>
                                          </svg>
                                        </div>
                                      </div>
                                      <a href="./task-details.php?id=' . $row['id'] . '" class=""><h5 class="mt-3">' . $row['subject'] . '</h5></a>
                                      <div class="d-flex align-items-center">
                                        <i style="color:#f27b01; width:15px;" class="me-2" data-feather="cpu"></i><span class="">Request #' . $row['id'] . '</span>
                                      </div>
                                      <div class="d-flex align-items-center">
                                        <i style="color:#f27b01; width:15px;" class="me-2" data-feather="clock"></i><span class="">Last Activity: ' . $updated_at . '</span>
                                      </div>  
                                    </div>
                                    <div class="">
                                    ' . get_task_status($row['sub_status']) . '
                                    ' . $status . '</div>
                                  </div>     
                                  <div class=" d-flex justify-content-end align-items-center">
                                    <img src="./assets/imgs/task-lable.webp" alt="#tasks" class="">
                                  </div>                     
                                </div>
                              </div>';
                    }
                }
                  ?>
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

<?php
include ('./includes/footer.php');
?>
