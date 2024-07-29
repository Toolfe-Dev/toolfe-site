<!DOCTYPE html>
<html lang="en">
<head>
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-4ZWGE3TCE2"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-4ZWGE3TCE2');
  </script>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="Toolfe is an IT company that provides businesses with comprehensive, cost-effective technology solutions and consulting. " />
  <title>Thanks, Message Sent</title>
  <!-- Fav Icon -->
  <link rel="icon" type="image/x-icon" href="assets/imgs/logo/favicon.webp">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700&amp;display=swap"
    rel="stylesheet">
  <!-- <meta name="google-site-verification" content="gzYMsv-tWVCI23fxkOrhXUkibSB1VVaMGfqSrevCyuw" /> -->
  <!-- All CSS files -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/all.min.css">
  <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
  <link rel="stylesheet" href="assets/css/progressbar.css">
  <link rel="stylesheet" href="assets/css/meanmenu.min.css">
  <link rel="stylesheet" href="assets/css/master.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <!-- Cursor Animation -->
  <div class="cursor1"></div>
  <div class="cursor2"></div>
  <!-- Preloader -->

  <!-- Calendly badge widget begin -->
  <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
  <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
  <!-- <script type="text/javascript">window.onload = function() { Calendly.initBadgeWidget({ url: 'https://calendly.com/jeffrinjen/30min?hide_event_type_details=1&primary_color=0d2161', text: 'Schedule Meeting', color: '#0d2161', textColor: '#ffffff', branding: undefined }); }</script> -->
  <!-- Calendly badge widget end -->
  <!-- Switcher Area Start -->
  <div class="switcher__area">
    <div class="switcher__icon">
      <a href="" class="axil-btn btn-fill-primary"
        onclick="Calendly.initPopupWidget({url: 'https://calendly.com/toolfe/30min?hide_gdpr_banner=1&primary_color=0d2161'});return false;">
        <button id="switcher_toolfe"><i class="fa fa-clock"></i></button></a>
    </div>
  </div>
  <!-- Switcher Area End -->
  <!-- Scroll Smoother -->
  <div class="has-smooth" id="has_smooth"></div>
  <!-- Go Top Button -->
  <button id="scroll_top" class="scroll-top"><i class="fa-solid fa-arrow-up"></i></button>
  <div id="smooth-wrapper">
    <div id="smooth-content">
      <main>






    <!--  Start Contact us page php -->
    <?php
    include_once 'contact/config.php';     
    if(isset($_POST['submit'])) 
    {    
        $date = date("d-m-Y");
        $time = date("h:i");
        $name = $_POST['name'];
         $email = $_POST['email'];
         $phone = $_POST['phone'];
         $subject = $_POST['subject'];
         $message = $_POST['message'];
    $sql = "INSERT INTO toolfe_contact (date,time,name,email,phone,subject,message)
         VALUES ('$date','$time','$name','$email','$phone','$subject', '$message')";
         if (mysqli_query($conn, $sql)) {
            // echo "New record has been added successfully !";
    } else {
            echo "Error: " . $sql . ":-" . mysqli_error($conn);
         }
         mysqli_close($conn);
    
        }
    ?>
    <!--End Contact us page php -->

           <!--  Start Home page php -->
    <?php
// Google reCaptcha secret key
$secretKey  = "6Lf79SskAAAAAI6Cn9Q_YADQYwY6GIpmN38uuNx0";

$statusMsg = '';
if(isset($_POST['callback'])){
if(isset($_POST['captcha-response']) && !empty($_POST['captcha-response'])){
    // Get verify response data
    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretKey.'&response='.$_POST['captcha-response']);
    $responseData = json_decode($verifyResponse);
    if($responseData->success){
        //Contact form submission code goes here ...

        $statusMsg = 'Your contact request have submitted successfully.';
    }else{
        $statusMsg = 'Robot verification failed, please try again.';
    }
}else{
    $statusMsg = 'Robot verification failed, please try again.';
}
}
?>
    
    
    
    <!--End Home page php -->











        <!-- Error page start -->
        <section class="error__page">
          <div class="container line">
            <span class="line-3"></span>
            <div class="row">
              <div class="col-xxl-12">
                <div class="error__content">
                  <img src="assets/imgs/thumb/sent.webp" alt="Page not found">
                  <h2>Your message reached us</h2>
                  <p>Our Support team will reach you within 24-Hours.</p>
                  <div class="btn_wrapper">
                    <a href="https://toolfe.com" class="wc-btn-primary btn-hover btn-item"><span></span> Back to
                      <br>Homepage <i class="fa-solid fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Error page end -->
      </main>
      <div class="footer__top-2 text-anim">
        <div class="contact_wrap">
          <div class="swiper roll__slider2">
            <div class="swiper-wrapper roll__wrapper">
              <div class="swiper-slide">
                <h2 class="rollslide_title-1">Having Purpose?</h2>
              </div>
              <div class="swiper-slide">
                <h2 class="rollslide_title-1">Don't wait!</h2>
              </div>
              <div class="swiper-slide">
                <h2 class="rollslide_title-1">Scale Up!</h2>
              </div>
            </div>
          </div>
          <a href="contact/" class="link">Contact us</a>
        </div>
      </div>
      <!-- Footer area start -->
      <footer class="footer__area-3">
        <div class="footer__top-3">
          <div class="footer__top-wrapper-3">
            <div class="footer__logo-3 pt-120">
              <img src="assets/imgs/logo/site-logo-white-2.webp" alt="Footer Logo">
              <p>We provide purpose driven digital transformation solutions to businesses worldwide.</p>
            </div>
            <div class="footer__social-3">
              <ul>
                <li><a href="https://www.facebook.com/ToolfeIT">facebook</a></li>
                <li><a href="https://twitter.com/Toolfe_official">Twitter</a></li>
                <li><a href="https://www.linkedin.com/company/toolfe">Linkedin</a></li>
                <li><a href="https://www.instagram.com/toolfe_official/?hl=en">Instagram</a></li>
              </ul>
            </div>
            <div class="footer__contact-3">
              <a class="end" href="contact/">Let’s talk</a>
            </div>
          </div>
        </div>
        <div class="footer__btm-3">
          <div class="container-fluid">
            <div class="row">
              <div class="col-xxl-4 col-xl-4 col-lg-4">
                <div class="footer__copyright-3">
                  <p>© 2023 Toolfe. All Rights Reserved by <a href="https://zotork.com/" target="_blank">Zotork Pvt
                      Ltd.</a>
                  </p>
                </div>
              </div>
              <div class="col-xxl-8 col-xl-8 col-lg-8">
                <div class="footer__nav-2">
                  <ul class="footer-menu-2 menu-anim">
                    <li><a href=https://toolfe.com>home </a> </li> <li><a href="about/">About us</a></li>
                    <li><a href="https://blog.toolfe.com">Blog</a></li>
                    <li><a href="contact">Contact us</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- Footer area end -->
    </div>
  </div>
  <!-- All JS files -->
  <script src="assets/js/jquery-3.6.0.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/swiper-bundle.min.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/gsap.min.js"></script>
  <script src="assets/js/ScrollTrigger.min.js"></script>
  <script src="assets/js/ScrollToPlugin.min.js"></script>
  <script src="assets/js/ScrollSmoother.min.js"></script>
  <script src="assets/js/SplitText.min.js"></script>
  <script src="assets/js/chroma.min.js"></script>
  <script src="assets/js/mixitup.min.js"></script>
  <script src="assets/js/vanilla-tilt.js"></script>
  <script src="assets/js/jquery.meanmenu.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>