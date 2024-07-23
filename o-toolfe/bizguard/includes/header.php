<?php

require_once 'db/connection.php';
require_once './constant_env.php';
require './get_datas/get-services.php';
require './get_datas/subscription-plane.php';
require_once 'funcs.php';

session_start();

if (!isset($_SESSION['id']) || !isset($_SESSION['first_name']) || !isset($_SESSION['last_name']) || !isset($_SESSION['email_address'])) {
  header("Location: login.php");
  exit();
}


// user datas in sessions

$id = $_SESSION['id'];
$full_name = $_SESSION['first_name'] . " " . $_SESSION['last_name'];
$email = $_SESSION['email_address'];

$task_count = get_ticket_details($id,$conn);

$plane_details = get_user_plane_details($id, $conn);
$user_plane = $plane_details['user_plane'];
$plane_mon = $plane_details['plane_mon'];


$tasks = get_ticket_details($id,$conn);
$all_tasks = $tasks['all_task'];
$queued_tasks = $tasks['queued'];
$opened_task = $tasks['opened'];
$closed_task = $tasks['closed'];
$monthly_task = $tasks['monthly_task'];

$plane_task_status = get_plane_task_status($user_plane, count($monthly_task), $conn);


$sql = "SELECT * FROM users WHERE id = '$id'";

$department_sql = "SELECT * FROM tickets_departments ";   
$department_query = $conn->query($department_sql);

$notifications = get_notification_data($id,$conn);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
  <meta name="keywords"
    content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="pixelstrap">
  <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
  <title>BizGuard </title>
  </title>
  <!-- Google font-->
  <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap"
    rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
  <!-- ico-font-->
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/icofont.css">
  <!-- Themify icon-->
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/themify.css">
  <!-- Flag icon-->
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/flag-icon.css">
  <!-- Feather icon-->
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/feather-icon.css">
  <!-- Plugins css start-->
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick.css">
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/scrollbar.css">
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/animate.css">
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/date-picker.css">
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/dropzone.css">
  <!-- Plugins css Ends-->
  <!-- Bootstrap css-->
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">
  <!-- App css-->
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <link id="color" rel="stylesheet" href="assets/css/color-1.css" media="screen">
  <!-- Responsive css-->
  <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
</head>

<body>
  <!-- loader starts-->
  <div class="loader-wrapper">
    <img src="./assets/imgs/loader.gif" alt="" class="">
    <!-- <div class="loader-index"> <span></span></div> -->
    <!-- <svg>
      <defs></defs>
      <filter id="goo">
        <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
        <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo"> </fecolormatrix>
      </filter>
    </svg> -->

  </div>
  <!-- loader ends-->
  <!-- tap on top starts-->
  <div class="tap-top"><i data-feather="chevrons-up"></i></div>
  <!-- tap on tap ends-->
  <!-- page-wrapper Start-->
  <div class="page-wrapper compact-wrapper dark-sidebar" id="pageWrapper">
    <!-- Page Header Start-->
    <div class="page-header">
      <div class="header-wrapper row m-0">
        <form class="form-inline search-full col" action="#" method="get">
          <div class="form-group w-100">
            <div class="Typeahead Typeahead--twitterUsers">
              <div class="u-posRelative">
                <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text"
                  placeholder="Search Cuba .." name="q" title="" autofocus>
                <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span>
                </div><i class="close-search" data-feather="x"></i>
              </div>
              <div class="Typeahead-menu"></div>
            </div>
          </div>
        </form>

        <div class="header-logo-wrapper col-auto p-0">
          <div class="logo-wrapper"><a href="index.php"><img class="img-fluid"
                src="assets/images/dashboard-5/logo-biz.png" alt=""></a></div>
          <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i>
          </div>
        </div>
        <div class="left-header col-xxl-5 col-xl-6 col-lg-5 col-md-4 col-sm-3 p-0">
          <div class="notification-slider">
<div class="d-flex h-100">
  <img src="assets/images/giftools.gif" alt="gif">
  <h6 class="mb-0 f-w-400"><span class="f-light">Turbocharge your efficiency with BizGuard</span></h6>
</div>

<div class="d-flex h-100">
  <img src="assets/images/giftools.gif" alt="gif">
  <h6 class="mb-0 f-w-400"><span class="f-light">Swift task completion within 15 hours</span></h6>
</div>

<div class="d-flex h-100">
  <img src="assets/images/giftools.gif" alt="gif">
  <h6 class="mb-0 f-w-400"><span class="f-light">Empower your business with seamless automation</span></h6>
</div>

<div class="d-flex h-100">
  <img src="assets/images/giftools.gif" alt="gif">
  <h6 class="mb-0 f-w-400"><span class="f-light">Stay ahead with our AI solutions</span></h6>
</div>

<div class="d-flex h-100">
  <img src="assets/images/giftools.gif" alt="gif">
  <h6 class="mb-0 f-w-400"><span class="f-light">Unlock actionable insights effortlessly</span></h6>
</div>

<div class="d-flex h-100">
  <img src="assets/images/giftools.gif" alt="gif">
  <h6 class="mb-0 f-w-400"><span class="f-light">Boost productivity with expert taskmasters</span></h6>
</div>

<div class="d-flex h-100">
  <img src="assets/images/giftools.gif" alt="gif">
  <h6 class="mb-0 f-w-400"><span class="f-light">Experience unparalleled dedication and efficiency</span></h6>
</div>

<div class="d-flex h-100">
  <img src="assets/images/giftools.gif" alt="gif">
  <h6 class="mb-0 f-w-400"><span class="f-light">Achieve more with BizGuard's precision</span></h6>
</div>

          </div>
        </div>
        <div class="nav-right col-xxl-7 col-xl-6 col-md-7 col-8 pull-right right-header p-0 ms-auto">
          <ul class="nav-menus">

            <li class="d-flex">
                  <div class="border border-primary  d-flex justify-content-center align-items-center" style="padding: 0; border-radius: 5px; width:50px; height:50px; ">
                    <h5 class="p-0 m-0"><?php echo $plane_task_status['total_tasks'];  ?></h5>
                  </div>
                  <h6 class="mx-3 mt-1 pe-3 border-r-primary"> Total <br/> Tasks</h6>
                </li>
                <li class="d-flex">
                  <div class="border border-primary   d-flex justify-content-center align-items-center" style="padding: 10px; border-radius: 5px; width:50px; height:50px; ">
                    <h5 class="p-0 m-0"><?php echo $plane_task_status['balance_tasks'];  ?></h5>
                  </div>
                  <h6 class="mx-3 mt-1 ">Tasks <br/> Remaining</h6>
            </li>

            <!-- <li>
              <div class="mode">
                <svg><use href="assets/svg/icon-sprite.svg#moon"></use></svg>
              </div>
            </li> -->

            <li class="onhover-dropdown">
            <a class="f-w-700" href="notification.php">
              <div class="notification-box">
                <svg>
                  <use href="assets/svg/icon-sprite.svg#notification"></use>
                </svg><span class="badge rounded-pill badge-secondary"><?php echo count($notifications) ?></span>
              </div>
              </a>
              <!-- <div class="onhover-show-div notification-dropdown">
                <h6 class="f-18 mb-0 dropdown-title">Notitications </h6>
                <ul>
                <?php foreach ($notifications as $notification) { ?>
                  <li class="b-l-primary border-4">
                    <p>Delivery processing <span class="font-danger">10 min.</span></p>
                  </li>
                  <?php } ?>
                  <li><a class="f-w-700" href="notification.php">Check all</a></li>
                </ul>
              </div> -->
            </li>
            <li class="profile-nav onhover-dropdown pe-0 py-0">
              <div class="media profile-media">
                <img class=" rounded-circle" src="<?php echo get_profile_id($id,$conn) ?>" style="width:35px; height:35px; border-radius: 80px; "  alt="">
                <div class="media-body"><span>
                    <?php echo $full_name ?>
                  </span>
                  <p class="mb-0">Client <i class="middle fa fa-angle-down"></i></p>
                </div>
              </div>
              <ul class="profile-dropdown onhover-show-div">
                <li><a href="account-update.php"><i data-feather="settings"></i><span>Settings</span></a></li>
                <li><div class="mode me-1">
                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <circle cx="12.5" cy="12.5" r="12" stroke="#F27B01"/>
                      <mask id="path-2-inside-1_126_43" fill="white">
                      <path d="M12.5 5C12.5 4.44772 12.9493 3.99392 13.4978 4.05873C15.3846 4.28171 17.1533 5.13252 18.5104 6.48959C20.1045 8.08365 21 10.2457 21 12.5C21 14.7543 20.1045 16.9163 18.5104 18.5104C17.1533 19.8675 15.3846 20.7183 13.4978 20.9413C12.9493 21.0061 12.5 20.5523 12.5 20L12.5 12.5L12.5 5Z"/>
                      </mask>
                      <path d="M12.5 5C12.5 4.44772 12.9493 3.99392 13.4978 4.05873C15.3846 4.28171 17.1533 5.13252 18.5104 6.48959C20.1045 8.08365 21 10.2457 21 12.5C21 14.7543 20.1045 16.9163 18.5104 18.5104C17.1533 19.8675 15.3846 20.7183 13.4978 20.9413C12.9493 21.0061 12.5 20.5523 12.5 20L12.5 12.5L12.5 5Z" fill="#F27B01" stroke="#F27B01" stroke-width="2" mask="url(#path-2-inside-1_126_43)"/>
                    </svg>
                  <span>DARK MODE</span>
                </div></li>
                <li><a href="login.php"><i data-feather="log-in"> </i><span>Log Out</span></a></li>
              </ul>
            </li>
          </ul>
        </div>
        <script class="result-template" type="text/x-handlebars-template">
            <div class="ProfileCard u-cf">                        
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName">{{name}}</div>
            </div>
            </div>
          </script>
        <script class="empty-template"
          type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
      </div>
    </div>
    <!-- Page Header Ends -->
    <!-- Page Body Start -->
    <div class="page-body-wrapper">
      <!-- Page Sidebar Start -->
      <div class="sidebar-wrapper" sidebar-layout="stroke-svg">
        <div>
          <div class="logo-wrapper"><a href="index.php"><img class="img-fluid for-light"
                src="assets/images/dashboard-5/logo-biz.png" alt=""><img class="img-fluid for-dark"
                src="assets/images/dashboard-5/logo-biz-white.png" alt=""></a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
          </div>
          <div class="logo-icon-wrapper"><a href="index.php"><img class="img-fluid"
                src="assets/images/favicon.png" alt=""></a></div>
          <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
              <ul class="sidebar-links" id="simple-bar">
                <li class="back-btn"><a href="index.php"><img class="img-fluid" src="assets/images/favicon.png"
                      alt=""></a>
                  <div class="mobile-back text-end">
                    <span>Back</span>
                    <i class="fa fa-angle-right ps-2" aria-hidden="true"></i>
                  </div>
                </li>
                <li class="pin-title sidebar-main-title">
                  <div>
                    <h6>Pinned</h6>
                  </div>
                </li>
                <li class="sidebar-main-title">
                  <div>
                    <h6 class="lan-1">General</h6>
                  </div>
                </li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                  <a class="sidebar-link sidebar-title link-nav" href="index.php">
                    <i data-feather="grid"></i><span>Dashboard</span></a>
                </li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                  <a class="sidebar-link sidebar-title link-nav" href="all-tasks.php">
                  <i data-feather="list"></i><span>Bizguard Tasks</span></a>
                </li>
                <!-- <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                    <i data-feather="list"></i><span class="">Bizguard Tasks</span></a>
                  <ul class="sidebar-submenu">
                    <li><a href="all-tasks.php">All Task</a></li>
                    <li><a href="all-tasks.php">Open Task</a></li>
                    <li><a href="all-tasks.php">Closed Task</a></li>
                  </ul>
                </li> -->
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                  <a class="sidebar-link sidebar-title link-nav" href="strategyhub.php">
                    <svg class="bulb">
                      <use href="assets/svg/icon-sprite.svg#moon"></use>
                    </svg>
                    <span>Strategy Hub</span>
                  </a>
                </li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                  <a class="sidebar-link sidebar-title link-nav" href="project-inquiry.php">
                    <i data-feather="bell"></i><span>Project Inquiry</span></a>
                </li>
                <li class="sidebar-main-title">
                  <div>
                    <h6>Tasks</h6>
                  </div>
                </li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                  <a class="sidebar-link sidebar-title link-nav" href="rapid-task.php">
                    <i data-feather="zap"></i><span class="">Rapid Task</span>
                  </a>
                </li>

                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav"
                    href="create-task.php">
                    <i data-feather="file-plus"></i><span>Create Task</span></a>
                </li>

                <li class="sidebar-main-title">
                  <div>
                    <h6>Others</h6>
                  </div>
                </li>

                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                  <a class="sidebar-link sidebar-title link-nav" href="upgrade-plane.php">
                    <img src="assets/images/giftools.gif" class="mb-2" width="25px" height="25px" alt="gif">
                    <span class=" ms-1">Upgrade Plan</span>
                  </a>
                </li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                  <a class="sidebar-link sidebar-title link-nav" href="#">
                    <i data-feather="server"></i><span>Bizguard Home</span>
                  </a>
                </li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                  <a class="sidebar-link sidebar-title link-nav" href="account-update.php">
                    <i data-feather="settings"></i><span> Settings</span>
                  </a>
                </li>
              </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
          </nav>
        </div>
      </div>