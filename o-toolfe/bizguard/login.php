<?php 
require './db/connection.php';

session_start();
session_unset();
session_destroy();

$error_message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $errors = array();

  $username = $_POST['username'];
  $password = $_POST['login']['password'];

  if ($username && $password) {
    $sql = "SELECT * FROM users WHERE email_address = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) { 
      while($row = $result->fetch_assoc()) {
        if (password_verify($password, $row['password'])) {
          session_start();
          $_SESSION['id'] = $row['id'];
          $_SESSION['first_name'] = $row['first_name'];
          $_SESSION['last_name'] = $row['last_name'];
          $_SESSION['email_address'] = $row['email_address'];
          $_SESSION['role'] = $row['role'];
          $_SESSION['password'] = $row['password'];
          $_SESSION['is_online'] = $row['is_online'];
          $_SESSION['online_date'] = $row['online_date'];
          $_SESSION['online_time'] = $row['online_time'];
          $_SESSION['status'] = $row['status'];
          $_SESSION['user_plane'] = $row['user_plane'];
          $_SESSION['last_activity'] = $row['last_activity'];
          $_SESSION['last_login'] = $row['last_login'];
          $_SESSION['plan_start'] = $row['registered_month_year'];
          $_SESSION['plan_end'] = $row['plane_expire'];
          header('location: index.php');
          exit;
        } else {
          $error_message = 'Username or password is incorrect.';
        }
      }
    } else {
      $error_message = 'Username or password is incorrect.';
    }
  } else {
    $error_message = 'Please enter both username and password.';
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="files-front/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="files-front/images/favicon.png" type="image/x-icon">
    <title>Toolfe BizGuard - Your Business Our Protection</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="files-front/css/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="files-front/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="files-front/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="files-front/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="files-front/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="files-front/css/vendors/slick.css">
    <link rel="stylesheet" type="text/css" href="files-front/css/vendors/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="files-front/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="files-front/css/vendors/animate.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="files-front/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="files-front/css/style.css">
    <link id="color" rel="stylesheet" href="files-front/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="files-front/css/responsive.css">
  </head>
  <body> 
    <!-- loader starts-->
    <div class="loader-wrapper">
      <div class="loader-index"> <span></span></div>
      <svg>
        <defs></defs>
        <filter id="goo">
          <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
          <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo"> </fecolormatrix>
        </filter>
      </svg>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-7 order-1 d-flex justify-content-center align-content-center"><img class="" src="./assets/imgs/login-page.svg" style="width: 700px;" alt="looginpage"></div>
        <div class="col-xl-5 p-0">
          <div class="login-card login-dark">
            <div>
              <div class="login-main"> 
                <div><a class="logo text-start" href="index.php"><img class="img-fluid for-light" src="files-front/images/dashboard-5/logo-biz.png" alt="looginpage"><img class="img-fluid for-dark" src="files-front/images/dashboard-5/logo-biz-white.png" alt="looginpage"></a></div>

                <form class="theme-form" method="POST" action="login.php">
                  <h4>Sign in to BizGuard account</h4>
                  <p>Enter your email & password to login</p>
                  <div class="form-group">
                    <label class="col-form-label">Email Address</label>
                    <input class="form-control" name="username" type="email" required="" placeholder="example@example.com">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label">Password</label>
                    <div class="form-input position-relative">
                      <input class="form-control" type="password" name="login[password]" required="" placeholder="*********">
                      <div class="show-hide"><span class="show"></span></div>
                    </div>
                  </div>
                  <?php if ($error_message): ?>
                  <div class="error-message">
                    <p class="text-danger"><?php echo $error_message; ?></p>
                  </div>
                  <?php endif; ?>
                  <div class="form-group mb-0">
                    <div class="text-end mt-5">
                      <button class="btn btn-primary btn-block w-100" type="submit">Sign in</button>
                    </div>
                  </div>
                
                  <script>
                    (function() {
                    'use strict';
                    window.addEventListener('load', function() {
                    var forms = document.getElementsByClassName('needs-validation');
                    var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                    }, false);
                    });
                    }, false);
                    })();
                  </script>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- latest jquery-->
      <script src="files-front/js/jquery.min.js"></script>
      <!-- Bootstrap js-->
      <script src="files-front/js/bootstrap/bootstrap.bundle.min.js"></script>
      <!-- feather icon js-->
      <script src="files-front/js/icons/feather-icon/feather.min.js"></script>
      <script src="files-front/js/icons/feather-icon/feather-icon.js"></script>
      <!-- scrollbar js-->
      <!-- Sidebar jquery-->
      <script src="files-front/js/config.js"></script>
      <!-- Plugins JS start-->
      <!-- Plugins JS Ends-->
      <!-- Theme js-->
      <script src="files-front/js/script.js"></script>
    </div>
  </body>
</html>
