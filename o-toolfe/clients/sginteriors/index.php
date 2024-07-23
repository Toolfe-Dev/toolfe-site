<?php error_reporting(0); ?>
<?php
    $action=$_REQUEST['action'];
    if ($action=="")    /* display the contact form */
        {
?>
<!DOCTYPE html>
<html lang="zxx">
    
<head>
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <meta name="description" content="Mrittik is a Modern Architecture Theme">
        <meta name="author" content="">

        <!-- Favicon and touch Icons -->
        <link href="assets/img/favicon.png" rel="shortcut icon" type="image/png">
        <link href="assets/img/apple-touch-icon.html" rel="apple-touch-icon">
        <link href="assets/img/apple-touch-icon-72x72.html" rel="apple-touch-icon" sizes="72x72">
        <link href="assets/img/apple-touch-icon-114x114.html" rel="apple-touch-icon" sizes="114x114">
        <link href="assets/img/apple-touch-icon-144x144.html" rel="apple-touch-icon" sizes="144x144">

        <!-- Page Title -->
        <title>Sri Gajamukha Interiors | Your Dream Our Designs</title>    
        
        <!-- Styles Include -->
        <link rel="stylesheet" href="assets/css/style.css">
        
    </head>
    <script>
        var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?98167';
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = url;
        var options = {
      "enabled":true,
      "chatButtonSetting":{
          "backgroundColor":"#4dc247",
          "ctaText":"",
          "borderRadius":"25",
          "marginLeft":"0",
          "marginBottom":"50",
          "marginRight":"50",
          "position":"right"
      },
      "brandSetting":{
          "brandName":"Sri Gajamukha Interiors",
          "brandSubTitle":"Typically replies within a day",
          "brandImg":"https://toolfe.com/assets/imgs/clients/favicon-whatsapp.png",
          "welcomeText":"Hi there!\nHow can I help you?",
          "messageText":"Hello, I have a question about {{page_link}} and {{page_title}}",
          "backgroundColor":"#1271BB",
          "ctaText":"Start Chat",
          "borderRadius":"25",
          "autoShow":false,
          "phoneNumber":"9677064719"
      }
    };
        s.onload = function() {
            CreateWhatsappChatWidget(options);
        };
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
    </script>

    <body class="bg-white">

        <!-- Preloader -->
        <!-- <div id="preloader">
			<div class="preloader-inner">
				<div class="spinner"></div>
				<div class="loading-text">
					<span data-preloader-text="M" class="characters">M</span>
					
					<span data-preloader-text="R" class="characters">R</span>
					
					<span data-preloader-text="I" class="characters">I</span>
					
					<span data-preloader-text="T" class="characters">T</span>
					
					<span data-preloader-text="T" class="characters">T</span>

					<span data-preloader-text="I" class="characters">I</span>

					<span data-preloader-text="K" class="characters">K</span>
				</div>
			</div>
		</div> -->

        <!-- Color Mode Switcher -->
		<div id="mode_switcher" class="d-none">
			<span><i class="bi bi-moon-fill"></i></span>	
		</div>        

        <!-- Cursor Effect -->
        <div class="pointer bnz-pointer" id="bnz-pointer"></div>

        <!-- Header -->
		<header class="header">				
            <div class="container">
                <div class="header_inner d-flex align-items-center justify-content-between">
                    <div class="logo">
                        <a href="index.html" class="light_logo"><img src="assets/img/logo-light.svg" alt="logo"></a>
                        <a href="index.html" class="dark_logo"><img src="assets/img/logo-dark.svg" alt="logo"></a>
                    </div>

                    
                    <div class="mainnav d-none d-lg-block">
                        <ul class="main_menu">
                            <li class="menu-item active"><a href="index.html">Home</a></li>
                            <li class="menu-item"><a href="#">About us</a></li>
                            <li class="menu-item"><a href="#">Services</a></li>
                            <li class="menu-item"><a href="#">Contact us</a></li>
                        </ul>
                    </div>
                    <div class="header_right_part d-flex align-items-center">
                        <button class="aside_open">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </button>
           						
                        <button class="ma5menu__toggle d-lg-none d-block" type="button">
                            <i class="bi bi-list"></i>
                        </button>
                    </div>
                </div>
			</div>
		</header>

        <div class="aside_info_wrapper">
			<button class="aside_close"><i class="bi bi-x-lg"></i></button>
            <div class="aside_logo">
                <a href="index.html" class="light_logo"><img src="assets/img/logo-light.svg" alt="logo"></a>
                <a href="index.html" class="dark_logo"><img src="assets/img/logo-dark.svg" alt="logo"></a>
            </div>
			<div class="aside_info_inner">
                <p>We Connect The Dots Between You And Your Dream Home. Your home defines YOU.</p>
                
                <div class="aside_info_inner_box">
                    <h5>Contact Info</h5>
                    <p>+91 9845423279 | +91 9880322036 | +91 8639615680</p> 
                    <p>info@srigajamukhainteriors.com</p>
                    <h5>Office Address</h5>
                    <p>#58 A, 11thcross, 20th main BTM Layout, <br> 1st Stage Bangalore-560068</p>
                </div>
                <div class="social_sites">
                    <ul class="d-flex align-items-center justify-content-center">
                        <li><a target="_blank" href="https://www.facebook.com/profile.php?id=100076405071367"><i class="bi bi-facebook"></i></a></li>
                        <li><a target="_blank" href="https://twitter.com/srigajamukha"><i class="bi bi-twitter"></i></a></li>
                        <li><a target="_blank" href="https://www.linkedin.com/in/sri-gajamukha-interiors-b72806222/"><i class="bi bi-linkedin"></i></a></li>
                        <li><a target="_blank" href="https://www.instagram.com/srigajamukhainteriors/"><i class="bi bi-instagram"></i></a></li>
                        <li><a target="_blank" href="https://www.youtube.com/channel/UC0bp2kU6fTeQuozuYYEGVtA"><i class="bi bi-youtube"></i></a></li>
                    </ul>
                </div>
			</div>
		</div>
        
        <!-- Main Wrapper-->
        <main class="wrapper">
            <div class="theme_slider bg-black">
                <div class="container">
                    <div class="swiper swiper_theme_slider">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="slider" style="background-image: url('assets/img/slider/5.jpg')">
                                    <div class="slide_content">
                                        <div class="slide_content_wrapper mb-0 h-auto bg-dark-100">
                                            <div class="slide_content_inner">
                                                <div class="meta m-0">
                                                    <div class="category text-olive text-uppercase">Living Rooms</div>
                                                </div>
                                                <h4><a href="project-details.html" class="text-white">Spacious Living Rooms</a></h4>
                                                <div class="details_link">
                                                    <a href="project-details.html">
                                                        <span class="link_text">View Projects</span> 
                                                        <span class="link_icon">
                                                            <span class="line"></span> 
                                                            <span class="circle"></span>
                                                            <span class="dot"></span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="slider" style="background-image: url('assets/img/slider/14.jpg')">
                                    <div class="slide_content">
                                        <div class="slide_content_wrapper mb-0 h-auto bg-dark-100">
                                            <div class="slide_content_inner">
                                                <div class="meta m-0">
                                                    <div class="category text-olive text-uppercase">Modular Kitchen</div>
                                                </div>
                                                <h4><a href="project-details.html" class="text-white">Quality modules and materials</a></h4>
                                                <div class="details_link">
                                                    <a href="project-details.html">
                                                        <span class="link_text">View Projects</span> 
                                                        <span class="link_icon">
                                                            <span class="line"></span> 
                                                            <span class="circle"></span>
                                                            <span class="dot"></span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="slider" style="background-image: url('assets/img/slider/5.jpg')">
                                    <div class="slide_content">
                                        <div class="slide_content_wrapper mb-0 h-auto bg-dark-100">
                                            <div class="slide_content_inner">
                                                <div class="meta m-0">
                                                    <div class="category text-olive text-uppercase">Dining Rooms</div>
                                                </div>
                                                <h4><a href="project-details.html" class="text-white">Kline, Dine & Unwind!</a></h4>
                                                <div class="details_link">
                                                    <a href="project-details.html">
                                                        <span class="link_text">View Projects</span> 
                                                        <span class="link_icon">
                                                            <span class="line"></span> 
                                                            <span class="circle"></span>
                                                            <span class="dot"></span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="slider" style="background-image: url('assets/img/slider/8.jpg')">
                                    <div class="slide_content">
                                        <div class="slide_content_wrapper mb-0 h-auto bg-dark-100">
                                            <div class="slide_content_inner">
                                                <div class="meta m-0">
                                                    <div class="category text-olive text-uppercase">Bedrooms</div>
                                                </div>
                                                <h4><a href="project-details.html" class="text-white">Personality and Style</a></h4>
                                                <div class="details_link">
                                                    <a href="project-details.html">
                                                        <span class="link_text">View Projects</span> 
                                                        <span class="link_icon">
                                                            <span class="line"></span> 
                                                            <span class="circle"></span>
                                                            <span class="dot"></span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>

                        <!-- Add Buttons -->
                        <div class="swiper-navigation">
                            <div class="swiper-button-prev"><i class="bi bi-arrow-left"></i></div>
                            <div class="swiper-button-next"><i class="bi bi-arrow-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="divider_bg bg-dark-100"></div>
            </div>

            <section class="services bg-dark-100 pt-4 pb-0">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4" data-aos="fade-up" data-aos-duration="500">
                            <div class="icon_box">
                                <h6>01</h6>
                                <img src="https://wpthemebooster.com/demo/themeforest/html/mrittik/assets/img/icon_box/d1.svg" alt="Icon Box" class="dark">
                                <img src="https://wpthemebooster.com/demo/themeforest/html/mrittik/assets/img/icon_box/d1-light.svg" alt="Icon Box" class="light">
                                <h4 class="text-white"><a href="service-details.html">Ideate & Design</a></h4>
                                <p class="text-gray-600">Stakeholders meet, agree on the project's goals and objectives, and ideate and conceptualize the project.</p>
                          
                            </div>
                        </div>
                        <div class="col-lg-4" data-aos="fade-up" data-aos-duration="700">
                            <div class="icon_box">
                                <h6>02</h6>
                                <img src="https://wpthemebooster.com/demo/themeforest/html/mrittik/assets/img/icon_box/d1.svg" alt="Icon Box" class="dark">
                                <img src="https://wpthemebooster.com/demo/themeforest/html/mrittik/assets/img/icon_box/d1-light.svg" alt="Icon Box" class="light">
                                <h4 class="text-white"><a href="service-details.html">Create & Develop</a></h4>
                                <p class="text-gray-600">Our team creates and develops the project based on the agreed-upon concept and design.</p>
                             
                            </div>
                        </div>
                        <div class="col-lg-4" data-aos="fade-up" data-aos-duration="900">
                            <div class="icon_box">
                                <h6>03</h6>
                                <img src="https://wpthemebooster.com/demo/themeforest/html/mrittik/assets/img/icon_box/d1.svg" alt="Icon Box" class="dark">
                                <img src="https://wpthemebooster.com/demo/themeforest/html/mrittik/assets/img/icon_box/d1-light.svg" alt="Icon Box" class="light">
                                <h4 class="text-white"><a href="service-details.html">Install & Implement</a></h4>
                                <p class="text-gray-600">In this final step, Our team installs and implements the project, ensuring that it meets the agreed-upon specifications and objectives.</p>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="about bg-dark-100">
                <div class="large_font">
                    <h2 class="floating_element text-dark-200 d-flex justify-content-center" data-aos="fade-right" data-aos-duration="1000">About</h2>
                </div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-5">
                            <div class="about_image">
                                <img src="assets/img/about/a1.jpg" alt="img">
                                <img src="https://wpthemebooster.com/demo/themeforest/html/mrittik/assets/img/about/e1.svg" alt="About" data-aos="fade-down" data-aos-duration="1000">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-7">
                            <div class="about_text_inner">
                                <div class="about_text">
                                    <h2 class="text-white">About us</h2>
                                    <p>We make your dream home a reflection of your personality and desires. As a top interior design firm in Bangalore, we offer innovative plans and advanced technology. Our team delivers high-quality, personalized designs that guarantee your satisfaction.</p>
                                </div>

                                <div class="about_icon_box">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="icon_box_flex">
                                                <div class="icon_size">
                                                    <img src="https://wpthemebooster.com/demo/themeforest/html/mrittik/assets/img/about/i2.svg" alt="Icon">
                                                </div>
                                                <h6>Interior Expertise</h6>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="icon_box_flex">
                                                <div class="icon_size">
                                                    <img src="https://wpthemebooster.com/demo/themeforest/html/mrittik/assets/img/about/i3.svg" alt="Icon">
                                                </div>
                                                <h6>Affordable Pricing</h6>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="icon_box_flex">
                                                <div class="icon_size">
                                                    <img src="https://wpthemebooster.com/demo/themeforest/html/mrittik/assets/img/about/i1.svg" alt="Icon">
                                                </div>
                                                <h6>On-Time Delivery</h6>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="icon_box_flex">
                                                <div class="icon_size">
                                                    <img src="https://wpthemebooster.com/demo/themeforest/html/mrittik/assets/img/about/i4.svg" alt="Icon">
                                                </div>
                                                <h6>Quality Assurance</h6>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="icon_box_flex">
                                                <div class="icon_size">
                                                    <img src="https://wpthemebooster.com/demo/themeforest/html/mrittik/assets/img/about/i1.svg" alt="Icon">
                                                </div>
                                                <h6>Transparency</h6>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="icon_box_flex">
                                                <div class="icon_size">
                                                    <img src="https://wpthemebooster.com/demo/themeforest/html/mrittik/assets/img/about/i4.svg" alt="Icon">
                                                </div>
                                                <h6>24 / 7 Support</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn_group" data-aos="fade-down" data-aos-duration="1000">
                                    <a href="#" class="btn gray">Contact us</a>  
                                </div>
                            </div>
                                                
                        </div>
                    </div>
                </div>
            </section>


            <div class="page_header in-service">
                <div class="page_header_inner">
                    <div class="container">
                        <div class="page_header_content d-flex align-items-center justify-content-between">
                            <h2 class="heading">Why choose us</h2>
                        </div>
                    </div>
                </div>        
            </div>
            <div class="header-layer-bg"></div>

            <!-- Why us Section -->
            <section class="services in-service pb-0">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4" data-aos="fade-up" data-aos-duration="500">
                            <div class="icon_box type-2">
                                <img src="assets/img/icon_box/bg-1.jpg" alt="img" class="post-bg">
                                <div class="icon_box_inner">
                                    <img src="assets/img/icon_box/3.png" alt="Icon Box">
                                    <h4 class="text-white"><a href="service-1.html">Budget Estimation</a></h4>
                                    <p class="text-gray-600">Our top priority is to deliver designs that offer the best quality and value, while staying within the budget.</p>
                                    <div class="arrow_effect">
                                        <a href="service-1.html"><span class="crossline1"></span><span class="crossline2"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4" data-aos="fade-up" data-aos-duration="700">
                            <div class="icon_box type-2">
                                <img src="assets/img/icon_box/bg-2.jpg" alt="img" class="post-bg">
                                <div class="icon_box_inner">
                                    <img src="assets/img/icon_box/2.png" alt="Icon Box">
                                    <h4 class="text-white"><a href="service-1.html">Design Your Own</a></h4>
                                    <p class="text-gray-600">Our goal is to assist you in bringing your dream house to life by creating custom designs tailored to your preferences.</p>
                                    <div class="arrow_effect">
                                        <a href="service-1.html"><span class="crossline1"></span><span class="crossline2"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4" data-aos="fade-up" data-aos-duration="900">
                            <div class="icon_box type-2">
                                <img src="assets/img/icon_box/bg-3.jpg" alt="img" class="post-bg">
                                <div class="icon_box_inner">
                                    <img src="assets/img/icon_box/1.png" alt="Icon Box">
                                    <h4 class="text-white"><a href="service-1.html">Free Samples</a></h4>
                                    <p class="text-gray-600">We offer complimentary samples that are easy to browse and choose from.</p>
                                    <div class="arrow_effect">
                                        <a href="service-1.html"><span class="crossline1"></span><span class="crossline2"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1100">
                            <div class="icon_box type-2">
                                <img src="assets/img/icon_box/bg-4.jpg" alt="img" class="post-bg">
                                <div class="icon_box_inner">
                                    <img src="assets/img/icon_box/5.png" alt="Icon Box">
                                    <h4 class="text-white"><a href="service-1.html">Free Consultation</a></h4>
                                    <p class="text-gray-600">We will be accessible to you via phone, email, and office visits throughout the entire project timeline.</p>
                                    <div class="arrow_effect">
                                        <a href="service-1.html"><span class="crossline1"></span><span class="crossline2"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1300">
                            <div class="icon_box type-2">
                                <img src="assets/img/icon_box/bg-5.jpg" alt="img" class="post-bg">
                                <div class="icon_box_inner">
                                    <img src="assets/img/icon_box/6.png" alt="Icon Box">
                                    <h4 class="text-white"><a href="service-1.html">Visualization</a></h4>
                                    <p class="text-gray-600">Preview your home with stunning 3D interior concepts, providing a realistic feel of your finished space.</p>
                                    <div class="arrow_effect">
                                        <a href="service-1.html"><span class="crossline1"></span><span class="crossline2"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1500">
                            <div class="icon_box type-2">
                                <img src="assets/img/icon_box/bg-6.jpg" alt="img" class="post-bg">
                                <div class="icon_box_inner">
                                    <img src="assets/img/icon_box/4.png" alt="Icon Box">
                                    <h4 class="text-white"><a href="service-1.html">Onsite Supervision</a></h4>
                                    <p class="text-gray-600">Our skilled team of Project Managers and Site Supervisors guarantee a hassle-free and enjoyable experience for your home interior project.</p>
                                    <div class="arrow_effect">
                                        <a href="service-1.html"><span class="crossline1"></span><span class="crossline2"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>    




            <section class="funfacts bg_1" id="funfacts">
                <div class="container">
                    <div class="row">
                        <div class="col">

                            <div class="funfacts_inner">
                                <div class="funfact2 d-flex align-items-center">
                                    <div class="fun_img">
                                        <img src="assets/img/fact-1.png" alt="img">
                                    </div>
                                    <div class="funfact_content">
                                        <p>PROJECTS COMPLETED</p>
                                        <div class="d-flex align-items-center"><h2 class="fun-number">2586</h2></div>                                
                                    </div>
                                </div>                            
                                <div class="funfact2 d-flex align-items-center">
                                    <div class="fun_img">
                                        <img src="assets/img/fact-2.png" alt="img">
                                    </div>
                                    <div class="funfact_content">
                                        <p>HAPPY CLIENTS</p>
                                        <div class="d-flex align-items-center"><h2 class="fun-number">2565</h2><span>+</span></div>
                                    </div>
                                </div>                            
                                <div class="funfact2 d-flex align-items-center">
                                    <div class="fun_img">
                                        <img src="assets/img/fact-3.png" alt="img">
                                    </div>
                                    <div class="funfact_content">
                                        <p>YEARS OF EXPERTISE</p>
                                        <div class="d-flex align-items-center"><h2 class="fun-number">12</h2><span>+</span></div>
                                    </div>
                                </div>                            
                                <div class="funfact2 d-flex align-items-center">
                                    <div class="fun_img">
                                        <img src="assets/img/fact-4.png" alt="img">
                                    </div>
                                    <div class="funfact_content">
                                        <p>POSITIVE FEEDBACKS</p>
                                        <div class="d-flex align-items-center"><h2 class="fun-number">2086</h2><span>+</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

    

            <section class="projects packery">
                <!-- Section Grid Lines -->
                <ul class="grid_lines d-none d-md-flex justify-content-between">
                    <li class="grid_line"></li>
                    <li class="grid_line"></li>
                    <li class="grid_line"></li>
                    <li class="grid_line"></li>
                    <li class="grid_line"></li>
                    <li class="grid_line"></li>
                    <li class="grid_line"></li>
                </ul>
                <div class="large_font">
                    <h2 class="floating_element text-dark-200 d-flex justify-content-center" data-aos="fade-right" data-aos-duration="1000">Gallery</h2>
                </div>
                <div class="container">
                    <div class="section-header text-center has_line">
                        <h2 class="text-white">Our Service Portfolio</h2>
                        <div class="section-desc row align-items-center justify-content-center">
                            <div class="col-lg-6 text-end">
                                <p>Explore our portfolio of stunning interior design projects, featuring innovative designs that reflect our clients' unique personalities and lifestyles.</p>
                            </div>
                            <div class="col-lg-6 text-start">
                                <p>We approach each project with a fresh perspective, taking into account our clients' unique needs and preferences.</p>
                            </div>
                        </div>
                    </div>

                    <div class="portfolio-filters-content">
                        <div class="filters-button-group">
                            <button class="button is-checked" data-filter="*">All<sup class="filter-count"></sup></button>
                            <button class="button" data-filter=".kitchen">Modular Kitchen<sup class="filter-count"></sup></button>
                            <button class="button" data-filter=".storage_wardrobe">Storage Wardrobe<sup class="filter-count"></sup></button>
                            <button class="button" data-filter=".Crockery">Crockery Units<sup class="filter-count"></sup></button>
                            <button class="button" data-filter=".space_furnitures">Space Saving Furnitures<sup class="filter-count"></sup></button>
                            <button class="button" data-filter=".tv">Tv Units<sup class="filter-count"></sup></button>
                            <button class="button" data-filter=".study_table">Study Tables<sup class="filter-count"></sup></button>
                            <button class="button" data-filter=".false_ceiling">False Ceiling<sup class="filter-count"></sup></button>
                            <button class="button" data-filter=".lights">Lights<sup class="filter-count"></sup></button>
                            <button class="button" data-filter=".wallpapers">Wallpapers<sup class="filter-count"></sup></button>
                            <button class="button" data-filter=".wall_paint">Wall Paint<sup class="filter-count"></sup></button>
                            <button class="button" data-filter=".bathroom_sanitary">Bathroom Sanitary<sup class="filter-count"></sup></button>
                            <button class="button" data-filter=".foyer_designs">Foyer Designs<sup class="filter-count"></sup></button>
                            <button class="button" data-filter=".pooja">Pooja Units<sup class="filter-count"></sup></button>                  
                        </div>
                    </div>
                    <div class="grid gutter-20 clearfix"> 
                        <div class="grid-sizer"></div>            
                        
                        <!-- Bathroom Sanitary -->
                        <div class="grid-item bathroom_sanitary width-100">
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/bath_1.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">Bathroom Sanitary</a></h6> 
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>       
                        <div class="grid-item bathroom_sanitary width-50"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/bath_2.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">Bathroom Sanitary</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="grid-item bathroom_sanitary width-50"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/bath_3.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">Bathroom Sanitary</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="grid-item landscape bathroom_sanitary width-100"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/bath_4.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">Bathroom Sanitary</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class="grid-item bathroom_sanitary width-50"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/bath_5.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">Bathroom Sanitary</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                        <div class="grid-item bathroom_sanitary width-50"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/bath_6.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">Bathroom Sanitary</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                        <!-- End bathroom sanitary -->
                        
                        <!-- Crockery Units -->
                        <div class="grid-item landscape Crockery width-100"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/cro_1.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">Crockery Units</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class="grid-item Crockery width-50"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/cro_2.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">Crockery Units</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                        <div class="grid-item Crockery width-50"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/cro_3.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">Crockery Units</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                        <div class="grid-item Crockery width-100">
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/cro_4.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">Crockery Units</a></h6> 
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                        <!-- End Crockery Units -->
                        
                        <!-- False ceiling -->
                        <div class="grid-item landscape false_ceiling width-100"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/fal_4.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">False ceiling</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="grid-item false_ceiling width-50"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/fal_1.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">False ceiling</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                        <div class="grid-item false_ceiling width-50"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/fal_2.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">False ceiling</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                        <div class="grid-item false_ceiling width-100">
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/fal_3.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">False ceiling</a></h6> 
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                        <!-- End False celing -->
                        
                        <!-- Foyer Design -->
                        <div class="grid-item landscape foyer_designs width-100"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/foy_1.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">Foyer Designs</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <!-- End Foyer Design -->

                        <!-- Light -->
                        <div class="grid-item landscape lights width-100"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/light_1.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">Lights</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class="grid-item lights width-50"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/light_2.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">Lights</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                        <div class="grid-item lights width-50"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/light_3.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">Lights</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                        <div class="grid-item lights width-100">
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/light_4.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">Lights</a></h6> 
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>      
                        <div class="grid-item landscape lights width-100"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/light_5.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">Lights</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Light -->

                        <!-- Modular Kitchen -->
                        <div class="grid-item kitchen width-50"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/kitc_1.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">Modular Kitchen</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                        <div class="grid-item kitchen width-50"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/kitc_2.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">Modular Kitchen</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                        <div class="grid-item kitchen width-100">
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/kitc_3.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">Modular Kitchen</a></h6> 
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class="grid-item landscape kitchen width-100"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/kitc_4.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">Modular Kitchen</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class="grid-item kitchen width-50"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/kitc_5.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">Modular Kitchen</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                        <div class="grid-item kitchen width-50"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/kitc_6.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">Modular Kitchen</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <!-- End Modular Kitchen -->

                        <!-- Pooja Units -->
                        <div class="grid-item pooja width-50"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/pooja_1.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">Pooja Units</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                        <div class="grid-item pooja width-50"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/Pooja_2.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">Pooja Units</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                        <div class="grid-item landscape pooja width-100"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/pooja_3.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">Pooja Units</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class="grid-item pooja width-50"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/pooja_4.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">Pooja Units</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                        <div class="grid-item pooja width-50"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/pooja_5.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">Pooja Units</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="grid-item pooja width-50"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/pooja_6.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">Pooja Units</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                        <div class="grid-item pooja width-50"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/pooja_7.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">Pooja Units</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <!-- End Pooja Units -->

                        <!-- Space saving furnitures -->
                        <div class="grid-item landscape space_furnitures width-100"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/space_1.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">Space Saving Furnitures</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class="grid-item space_furnitures width-50"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/space_2.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">Space Saving Furnitures</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                        <div class="grid-item space_furnitures width-50"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/space_3.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">Space Saving Furnitures</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                        <div class="grid-item space_furnitures width-100">
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/space_4.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">Space Saving Furnitures</a></h6> 
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item landscape space_furnitures width-100"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/space_5.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">Space Saving Furnitures</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <!-- End Space saving furnitures -->

                        <!-- Storage Wardrobes -->
                        <div class="grid-item landscape storage_wardrobe width-100"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/store_1.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">Storage Wardrobes</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="grid-item storage_wardrobe width-50"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/store_2.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">Storage Wardrobes</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class="grid-item storage_wardrobe width-50"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/store_3.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">Storage Wardrobes</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class="grid-item storage_wardrobe width-100">
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/store_4.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">Storage Wardrobes</a></h6> 
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item storage_wardrobe width-50"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/store_5.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">Storage Wardrobes</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="grid-item storage_wardrobe width-50"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/store_6.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">Storage Wardrobes</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <!-- End Storage Wardrobes -->

                        <!-- Study Table -->
                        <div class="grid-item study_table width-50"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/study_1.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">Study Table</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class="grid-item study_table width-50"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/study_2.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">Study Table</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class="grid-item landscape study_table width-100"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/study_3.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">Study Table</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class="grid-item study_table width-50"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/study_4.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">Study Table</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class="grid-item study_table width-50"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/study_5.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">Study Table</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class="grid-item study_table width-50"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/study_6.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">Study Table</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class="grid-item study_table width-50"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/study_7.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">Study Table</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <!-- End Study Table -->

                        <!-- TV Units -->
                        <div class="grid-item tv width-100">
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/tv_1.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">TV Units</a></h6> 
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>      
                        <div class="grid-item tv width-50"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/tv_2.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">TV Units</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item tv width-50"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/tv_3.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">TV Units</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item landscape tv width-100"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/tv_4.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">TV Units</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item tv width-50"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/tv_5.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">TV Units</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item tv width-50"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/tv_6.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">TV Units</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item landscape tv width-100"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/tv_7.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">TV Units</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item tv width-50"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/tv_8.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">TV Units</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item tv width-50"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/tv_9.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">TV Units</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End TV Units -->

                        <!-- Wall Paints -->
                        <div class="grid-item landscape wall_paint width-100"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/wall_1.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">Wall Paints</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item wall_paint width-50"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/wall_2.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">Wall Paints</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item wall_paint width-50"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/wall_3.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">Wall Paints</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item wall_paint width-50"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/wall_4.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">Wall Paints</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item wall_paint width-50"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/wall_5.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">Wall Paints</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item landscape wall_paint width-100"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/wall_6.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">Wall Paints</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Wall Paints -->

                        <!-- Wallpapers -->
                        <div class="grid-item wallpapers width-50"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/wallpaper_1.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">Wallpapers</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item wallpapers width-50"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/wallpaper_2.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">Wallpapers</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item landscape wallpapers width-100"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/wallpaper_3.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">Wallpapers</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item wallpapers width-50"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/wallpaper_4.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">Wallpapers</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item wallpapers width-50"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/wallpaper_5.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">Wallpapers</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item wallpapers width-100">
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/wallpaper_6.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">Wrallpapers</a></h6> 
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class="grid-item wallpapers width-50"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/wallpaper_7.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">Wallpapers</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item wallpapers width-50"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/wallpaper_8.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">Wallpapers</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item landscape wallpapers width-100"> 
                            <div class="thumb">
                                <img class="item_image" src="assets/img/portfolio/wallpaper_9.png" alt="">
                                <div class="works-info">
                                    <div class="label-text">
                                        <h6><a href="#">Wallpapers</a></h6>
                                        <div class="details_link"><a href="project-details.html"><span class="link_text">Contact us</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Wallpapers -->



                    </div>
                    <div class="btn_group mt-4 w-100 text-center">
                        <button id="load-more" class="btn olive w-100">Show More Project(s)</button>
                    </div>
                </div>
            </section>

            <section class="testimonial box_padding pb-0">
                <!-- Section Grid Lines -->
                <ul class="grid_lines d-none d-md-flex justify-content-between">
                    <li class="grid_line"></li>
                    <li class="grid_line"></li>
                    <li class="grid_line"></li>
                    <li class="grid_line"></li>
                    <li class="grid_line"></li>
                    <li class="grid_line"></li>
                    <li class="grid_line"></li>
                </ul>
                <div class="has_line_lg"></div>
                <div class="testimonial_inner bg-black">
                    <!-- Swiper Testimonial -->
                    <div class="swiper swiper_testimonial">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-block text-center">
                                    <p>“I have completed my home interior work with Gajamukha interiors. Mr Dinesh & team have done an excellent job with in my budget. I could get the work completed with in the estimated shedule. They are flexible to change or modify the designs as per our ideas. I recomend M/s. Gajamukha interiors to all who are planning to complete interior works. I wish all the very best for a bright future…thanks Dinesh & team.. "</p>
                                    <h6 class="text-olive">Aneesh Kumar, Customer</h6>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-block text-center">
                                    <p>“They have done our interiors at Sipani and the outcome is really good. The carpenters very well understand the design and can replicate the same, the owners, Dinesh and Kishore are very proactive in their responses and if there is any Gap they will make sure to get that addressed and sorted. They will understand your requirements and budget and will suggest the materials accordingly. Overall a very good experience with them and would recommend you all to go with them. Good quality materials are used and the outcome is very good."</p>
                                    <h6 class="text-olive">Victor Chakraborty, Customer</h6>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-block text-center">
                                    <p>“Professionalism, Responsiveness, Value" A team of professionals, who knows how to get the job done in the customer’s budget. The       best things is that they are flexible and ready to adjust for changes if it needed. Well done to Dinesh and team for the great work. Keep doing good job. Thanks. A Happy customer 🙂</p>
                                    <h6 class="text-olive">Swapnil Gupta, Customer</h6>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-block text-center">
                                    <p>“Professionalism, Punctuality, Quality, Responsiveness, Value” Excellent quality work. Must go for great interior work. Thanks for the awesome work 🙂 Happy and satisfied customer.</p>
                                    <h6 class="text-olive">Srinu P, Customer</h6>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </section>

            <!-- <section class="blog pt-lg bg-dark-100">
                <div class="large_font">
                    <h2 class="floating_element text-dark-200 d-flex justify-content-center">Latest</h2>
                </div>
                <div class="container">
                    <div class="section-header text-center has_line">
                        <h2 class="text-white">LATEST BLOGS</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="blog_post mb-0">
                                <img src="assets/img/blog/1.jpg" alt="img">
                                <div class="blog_content">                                    
                                    <h2 class="post-count">01</h2>
                                    <div class="meta">
                                        <time class="text-olive" datetime="2022-10-20">OCTOBER 20, 2022</time>
                                    </div>
                                    <h5><a href="blog-details.html" class="text-white">Recent trends in designing space interiors 2019</a></h5>
                                    <p>Lorem ipsum dolor sit amet consecteur adipiscing elitsed do eiusmod tempor incididunt labo dolore magnaaliqua. Ut eni ad minim veniam dolor sit amet consecteur.....</p>
                                    <div class="details_link"><a href="blog-details.html"><span class="link_text">View Details</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="blog_post mb-0">
                                <img src="assets/img/blog/2.jpg" alt="img">
                                <div class="blog_content">                                    
                                    <h2 class="post-count">02</h2>
                                    <div class="meta">
                                        <time class="text-olive" datetime="2022-10-20">OCTOBER 20, 2022</time>
                                    </div>
                                    <h5><a href="blog-details.html" class="text-white">Space optimization is now considered as art</a></h5>
                                    <p>Lorem ipsum dolor sit amet consecteur adipiscing elitsed do eiusmod tempor incididunt labo dolore magnaaliqua. Ut eni ad minim veniam dolor sit amet consecteur.....</p>
                                    <div class="details_link"><a href="blog-details.html"><span class="link_text">View Details</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="blog_post mb-0">
                                <img src="assets/img/blog/3.jpg" alt="img">
                                <div class="blog_content">                                    
                                    <h2 class="post-count">03</h2>
                                    <div class="meta">
                                        <time class="text-olive" datetime="2022-10-20">OCTOBER 20, 2022</time>
                                    </div>
                                    <h5><a href="blog-details.html" class="text-white">Aga khan Award , 2019 see the best shots</a></h5>
                                    <p>Lorem ipsum dolor sit amet consecteur adipiscing elitsed do eiusmod tempor incididunt labo dolore magnaaliqua. Ut eni ad minim veniam dolor sit amet consecteur.....</p>
                                    <div class="details_link"><a href="blog-details.html"><span class="link_text">View Details</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->

            <section class="contact_us bg-dark-200">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-lg-5">
                            <div class="section-header">
                                <h2 class="text-white text-uppercase mb-4">Contact us Today!</h2>
                                <p class="$gray-600">Get in touch with us today to discuss your interior design needs and let our expert team help you create a beautiful and functional space that reflects your style and personality.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="home_contact">
                                <form action="" method="POST" enctype="multipart/form-data">
                                    
                                    
                                    <input type="hidden" name="action" value="submit">
                                    
                                    <input class="form-control form-control-lg" name="con_name" id="name" type="text" placeholder="Your Name*" required aria-label=".form-control-lg example">
                                    <input class="form-control form-control-lg" name="con_phone" id="phone" type="number" placeholder="Your Phone No" aria-label=".form-control-lg example">
                                    <input class="form-control form-control-lg" name="con_email" id="email" type="email" placeholder="Your Email*" required aria-label=".form-control-lg example">
                                    <textarea class="form-control pt-4" name="con_message" id="message" placeholder="Your Message" rows="3"></textarea>
                                    
                                    <div class="btn_group">
                                        <button type="submit" class="btn olive">Send Mail</button>  
                                        <p class="form-messege"></p>
                                        <!--<input type="submit" value="Send message"> -->
                                    </div>
                                    
                                    
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Clients Logo -->
                    <div class="partner_flex">
                        <div class="partner_content">
                            <img src="assets/img/hettich.svg" alt="img">
                            <img src="assets/img/hettich.svg" alt="img">
                        </div>
                        <div class="partner_content">
                            <img src="assets/img/elica.svg" alt="img">
                            <img src="assets/img/elica.svg" alt="img">
                        </div>
                        <div class="partner_content">
                            <img src="assets/img/faber.svg" alt="img">
                            <img src="assets/img/faber.svg" alt="img">
                        </div>
                        <div class="partner_content">
                            <img src="assets/img/airolam.svg" alt="img">
                            <img src="assets/img/airolam.svg" alt="img">
                        </div>
                        <div class="partner_content">
                            <img src="assets/img/greenply.svg" alt="img">
                            <img src="assets/img/greenply.svg" alt="img">
                        </div>
                    </div>
                </div>
            
                <!-- Section Grid Lines -->
                <ul class="grid_lines d-none d-md-flex justify-content-between">
                    <li class="grid_line"></li>
                    <li class="grid_line"></li>
                    <li class="grid_line"></li>
                    <li class="grid_line"></li>
                    <li class="grid_line"></li>
                    <li class="grid_line"></li>
                    <li class="grid_line"></li>
                </ul>
            </section>

        </main>

        <!-- Footer-->
        <footer class="footer bg-dark-100 box_padding">
            <div class="footer_inner bg-black">
                <div class="container">
                    <div class="row align-items-end">
                        <div class="col-lg-4 col-md-2 col-sm-2">
                            <div class="section-header">
                                <h2><br> Contact us today</h2>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5 col-sm-5">
                            <div class="communication">
                                <div class="info_body">
                                    <h6>Sri Gajamukha Interiors</h6>
                                    <h5>Our belief in excellence, quality, honesty, and transparency reflects in the beautiful home <br> interiors we design, making us the best <br> interior designers in Bangalore.</h5>
                                </div>
                                <div class="info_body">
                                    <h6>Email Address</h6>
                                    <h5>info@srigajamukhainteriors.com</h5>
                                </div>
                                <div class="info_body">
                                    <h6>Phone No</h6>
                                    <h5>+91 9845423279</h5>
                                    <h5>+91 9880322036</h5>
                                    <h5>+91 8639615680</h5>

                                </div>
                                <div class="info_body">
                                    <h6>Office Address</h6>
                                    <h5>#58 A, 11thcross, 20th main BTM Layout, 1st Stage Bangalore-560068</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5 col-sm-5">
                            <div class="footer_elements d-flex align-items-center justify-content-end">
                                <div class="footer_elements_inner">
                                    <div class="footer_logo">
                                        <a href="index.html" class="light_logo"><img src="assets/img/logo-light.svg" alt="logo"></a>
                                    </div>
                                    <div class="footer_social">
                                        <ul class="social_list">
                                            <li class="facebook"><a target="_blank" href="https://www.facebook.com/profile.php?id=100076405071367"><i class="bi bi-facebook"></i></a></li>
                                            <li class="twitter"><a target="_blank" href="https://twitter.com/srigajamukha"><i class="bi bi-twitter"></i></a></li>
                                            <li class="instagram"><a target="_blank" href="https://www.instagram.com/srigajamukhainteriors/"><i class="bi bi-linkedin"></i></a></li>
                                            <li class="instagram"><a target="_blank" href="https://www.instagram.com/srigajamukhainteriors/"><i class="bi bi-instagram"></i></a></li>
                                            <li class="youbetube"><a target="_blank" href="https://www.youtube.com/channel/UC0bp2kU6fTeQuozuYYEGVtA"><i class="bi bi-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="terms_condition">
                                        <ul>
                                            <li><a href="https://toolfe.com" target="_blank">Site developed by Toolfe</a></li>
                                        </ul>
                                    </div>
                                    <div class="copyright">
                                        <p>Sri Gajamukha Interior © 2023. All Rights Reserved</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <!-- Section Grid Lines -->
                <ul class="grid_lines d-none d-md-flex justify-content-between">
                    <li class="grid_line"></li>
                    <li class="grid_line"></li>
                    <li class="grid_line"></li>
                    <li class="grid_line"></li>
                    <li class="grid_line"></li>
                    <li class="grid_line"></li>
                    <li class="grid_line"></li>
                </ul>
            </div>
        </footer>

        <div class="totop">
            <a href="#">UP</a>
        </div>

        <!-- Section Grid Lines -->
        <ul class="grid_lines d-none d-md-flex justify-content-between">
            <li class="grid_line"></li>
            <li class="grid_line"></li>
            <li class="grid_line"></li>
            <li class="grid_line"></li>
            <li class="grid_line"></li>
            <li class="grid_line"></li>
            <li class="grid_line"></li>
        </ul>
        

        <!-- Core JS -->
        <script src="assets/js/jquery-3.6.0.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>

        <!-- Side Menu -->
        <script src="plugins/menu/ma5-menu.min.js"></script>
        
        <!-- Swiper for Slider Type -->
        <script src="plugins/swiper/swiper-bundle.min.js"></script>
        
        <!-- Funfacts -->
        <script src="assets/js/funfacts.js"></script>
        
        <!-- Portfolio -->
        <script src="plugins/isotope/isotope.pkgd.min.js"></script>
        <script src="plugins/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="plugins/isotope/packery-mode.pkgd.js"></script>
        <script src="plugins/isotope/tilt.jquery.js"></script>
        <script src="plugins/isotope/isotope-init.js"></script>
        
        

        <!-- Cursor Effect -->
        <script src="plugins/cursor-effect/cursor-effect.js"></script>
        
        <!-- Select2 -->
        <script src="plugins/select2/js/select2.min.js"></script>
        
        <!-- AOS effect JS -->
        <script src="plugins/aos/aos.js"></script>
        
        <!-- Theme Custom JS -->
        <script src="assets/js/theme.js"></script>
    </body>
</html>



<?php
                                    } 
                                else                /* send the submitted data */
                                    {
                                    $con_name=$_REQUEST['con_name'];
                                    $con_email=$_REQUEST['con_email'];
                                    $con_phone=$_REQUEST['con_phone'];
                                    $con_message=$_REQUEST['con_message'];
                                      
                                        $from="From: $con_name<$con_email>\r\nReturn-path: $con_email";
                                        $subject="Message sent using your contact form of Srigajamukhainteriors.com";
                                        $con_message="Name : $con_name,| Phone : $con_phone, | Email : $con_email, | Message : $con_message";
                                        mail("jeffrinjen10@gmail.com,admin@toolfe.com", $subject, $con_message, $from);
                                        echo "Your Message has been sent!";
                                    
                                    } 
                                ?>