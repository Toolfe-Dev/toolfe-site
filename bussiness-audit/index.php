<?php
$title='Business Audit';
include '../includes/header.php'
?>

<!-- Main -->
<main class="main-page service-details-page portfolio-details-page">
    <?php include '../includes/head.php' ?>

    <!-- Hero -->
    <section class="hero-section-wrap hero-home2">
        <div class="hero-section-content-wrap">
            <img class="bg-shape slide-left" src="../assets/imgs/bg-shape-6.svg" alt="bg-shape-6" />
            <img class="bg-shape2 slide-right" src="../assets/imgs/bg-shape-5.svg" alt="bg-shape-5" />
            <div class="custom-container">
                <div class="hero-section-content text-center">
                    <h5 class="section-subtitle">Audit & Improvement</h5>
                    <h1 class="section-title fade-in">Uncover Optimization Areas with Our Insightful Audit</h1>
                    <p>Welcome to Toolfe's Business Audit Tool. Fast insights into your company's performance and potential enhancements.</p>
                    <a href="#contact-us" class="theme-btn2">
                    Let’s Calculate
                        <i class="iconoir-arrow-up-right"></i>
                    </a>
                </div>
            </div>
        </div>


    </section>



    <section class="news2-area about2-area">
        <div class="custom-container">
            <div class="about2-inner-box">


            <div class="hero-service-about">
        <div class="section-header d-flex align-items-center justify-content-between w-full">
          <div class="left">
            <h5 class="section-subtitle">What we are offering</h5>
            <h1 class="section-title">
            How Can Toolfe’s Audit Tool Assist You?
            </h1>
            <p>We invite you to explore our Audit Tool and become part of the journey towards growth.</p>
          </div>
        </div>

        <img src="../assets/imgs/industry/ecom7.webp" alt="ecom7" />
        <div class="hero-service-about-body">
          <p>
          This comprehensive assessment will evaluate your company's performance across key areas, including revenue, capabilities, digital transformation, technology adoption, automation, and business optimization. In just a few minutes, you'll gain valuable insights into your business's current state and potential areas for improvement.
          </p>
          <ul>
            <li><i class="las la-check"></i> Identify your business's strengths</li>
            <li><i class="las la-check"></i> Find Growth oppourtunities</li>
            <li><i class="las la-check"></i>Benchmark against industry standards</li>
          </ul>
        </div>
      </div>
              

            </div>
        </div>
    </section>

    <section class="case-studio-area">
                <div class="custom-container">
                    <div class="case-studio-header text-center">
                        <h5 class="section-subtitle">CASE STUDIES</h5>
                        <h1 class="section-title">Proven Results Through Innovation</h1>
                    </div>

                </div>
            </section>


    <!-- Hero -->
    <section class="hero-section-wrap hero-home2" id="contact-us">

        <div class="custom-container">

            <div class="hero-contact-form-wrap">
                <form id="audit-form" method="POST">
                    <!-- after the 5th step hide this div -->
                     <!-- dont submit the form here  -->
                    <div class="hero-contact-form-inner-wrap">
                    <!-- step form indecators -->
                        <div class="">
                            <ul class=" form-steps">
                                <li class="form-indecator">1</li>
                                <li class="form-indecator">2</li>
                                <li class="form-indecator">3</li>
                                <li class="form-indecator">4</li>
                                <li class="form-indecator">5</li>
                            </ul>
                        </div>
                    <!-- step form indecators -->
                        <div class="hero-contact-form-header d-flex align-items-center justify-content-between">
                            <p>Please answer the following questions honestly to ensure an accurate assessment.</p>
                        </div>
                    <!-- here my form starts -->
                        <div class="hero-contact-form">
                            <div class="contact-form d-flex">
                                <div class="input-main-row">
                                    <!-- here my form fields for step form  for left -->
                                    <div class="first">
                                        <!-- first step starts-->
                                            <div class="input-row field">
                                                <div class="input-group">
                                                    <label for="first_name">Name</label>
                                                    <input type="text" placeholder="First Name" id="first_name" name="fullname"  />
                                                    <div class="error" id="error-name"></div>
                                                </div>
                                            </div>
                                            <div class="input-row field">
                                                <div class="input-group">
                                                    <label for="email">Email</label>
                                                    <input type="email" placeholder="Your Email" id="email" name="email"  />
                                                    <div class="error" id="error-email"></div>
                                                </div>
                                                <div class="input-group phone-number">
                                                    <label for="phone_number">Phone</label>
                                                    <input type="text" name="phone" placeholder="+1 912 323232"  />
                                                    <div class="error" id="error-phone"></div>
                                                </div>
                                            </div>
                                            <div class="input-row field">
                                                <div class="input-group">
                                                    <label for="last_name">Company Name</label>
                                                    <input type="text" placeholder="Eg. Microsoft" id="company_name" name="company"  />
                                                    <div class="error" id="error-company"></div>
                                                </div>
                                            </div>
                                            <div class="input-row field">
                                                <div class="input-group">
                                                    <label>Select Your Industry</label>
                                                    <div class="choice-a-company flex-wrap d-flex">
                                                        <!-- Radio buttons for industry selection -->
                                                        <div class="radio-box">
                                                            <input type="radio" id="healthcare" name="industry" value="Healthcare"  />
                                                            <label for="healthcare">Healthcare</label>
                                                        </div>
                                                        <div class="radio-box">
                                                            <input type="radio" id="finance" name="industry" value="Finance and Banking"  />
                                                            <label for="finance">Finance and Banking</label>
                                                        </div>
                                                        <div class="radio-box">
                                                            <input type="radio" id="ecom" name="industry" value="E-Commerce"  />
                                                            <label for="ecom">E-Commerce</label>
                                                        </div>
                                                        <div class="radio-box">
                                                            <input type="radio" id="education" name="industry" value="Education"  />
                                                            <label for="education">Education</label>
                                                        </div>
                                                        <div class="radio-box">
                                                            <input type="radio" id="realestate" name="industry" value="Real Estate"  />
                                                            <label for="realestate">Real Estate</label>
                                                        </div>
                                                        <div class="radio-box">
                                                            <input type="radio" id="manufacturing" name="industry" value="Manufacturing"  />
                                                            <label for="manufacturing">Manufacturing</label>
                                                        </div>
                                                        <div class="radio-box">
                                                            <input type="radio" id="media" name="industry" value="Media and Entertainment"  />
                                                            <label for="media">Media and Entertainment</label>
                                                        </div>
                                                        <div class="radio-box">
                                                            <input type="radio" id="logistics" name="industry" value="Logistics and Transportation"
                                                                />
                                                            <label for="logistics">Logistics and Transportation</label>
                                                        </div>
                                                        <div class="radio-box">
                                                            <input type="radio" id="telecommunications" name="industry" value="Telecommunications"
                                                                />
                                                            <label for="telecommunications">Telecommunications</label>
                                                        </div>
                                                        <div class="radio-box">
                                                            <input type="radio" id="energy" name="industry" value="Energy and Utilities"  />
                                                            <label for="energy">Energy and Utilities</label>
                                                        </div>
                                                        <div class="radio-box">
                                                            <input type="radio" id="other" name="industry" value="Other"  />
                                                            <label for="other">Other</label>
                                                        </div>
                                                    </div>
                                                    <div class="error" id="error-industry"></div>
                                                </div>
                                            </div>
                                            <div class="input-row field">
                                                <div class="input-group">
                                                    <label>What you need from us?</label>
                                                    <div class="feedback-checkboxes d-flex flex-wrap">
                                                        <div class="feedback-item">
                                                            <input type="checkbox" id="web_design" name="services[]" value="Web design" />
                                                            <label for="web_design">Process Automation</label>
                                                        </div>
                                                        <div class="feedback-item">
                                                            <input type="checkbox" id="app_design" name="services[]" value="App design" />
                                                            <label for="app_design">Generative AI</label>
                                                        </div>
                                                        <div class="feedback-item">
                                                            <input type="checkbox" id="branding" name="services[]" value="Branding" />
                                                            <label for="branding">Data Analytics</label>
                                                        </div>
                                                        <div class="feedback-item">
                                                            <input type="checkbox" id="development" name="services[]" value="Development" />
                                                            <label for="development">Market Research</label>
                                                        </div>
                                                        <div class="feedback-item">
                                                            <input type="checkbox" id="cloud_service" name="services[]" value="Cloud service" />
                                                            <label for="cloud_service">Web Development</label>
                                                        </div>
                                                        <div class="feedback-item">
                                                            <input type="checkbox" id="other_service" name="services[]" value="Other" />
                                                            <label for="other_service">Other</label>
                                                        </div>
                                                    </div>
                                                    <div class="error" id="error-services"></div>
                                                </div>
                                            </div>
                                        <!-- first step over -->
                                    </div>
                                    <div class="second">
                                        <!-- second step starts-->
                                            <div class="input-row field">
                                                <div class="input-group">
                                                    <label for="first_name">Name</label>
                                                    <input type="text" placeholder="First Name" id="first_name" name="fullname"  />
                                                    <div class="error" id="error-name"></div>
                                                </div>
                                            </div>
                                            <div class="input-row field">
                                                <div class="input-group">
                                                    <label for="email">Email</label>
                                                    <input type="email" placeholder="Your Email" id="email" name="email"  />
                                                    <div class="error" id="error-email"></div>
                                                </div>
                                                <div class="input-group phone-number">
                                                    <label for="phone_number">Phone</label>
                                                    <input type="text" name="phone" placeholder="+1 912 323232"  />
                                                    <div class="error" id="error-phone"></div>
                                                </div>
                                            </div>
                                            <div class="input-row field">
                                                <div class="input-group">
                                                    <label for="last_name">Company Name</label>
                                                    <input type="text" placeholder="Eg. Microsoft" id="company_name" name="company"  />
                                                    <div class="error" id="error-company"></div>
                                                </div>
                                            </div>
                                            <div class="input-row field">
                                                <div class="input-group">
                                                    <label>Select Your Industry</label>
                                                    <div class="choice-a-company flex-wrap d-flex">
                                                        <!-- Radio buttons for industry selection -->
                                                        <div class="radio-box">
                                                            <input type="radio" id="healthcare" name="industry" value="Healthcare"  />
                                                            <label for="healthcare">Healthcare</label>
                                                        </div>
                                                        <div class="radio-box">
                                                            <input type="radio" id="finance" name="industry" value="Finance and Banking"  />
                                                            <label for="finance">Finance and Banking</label>
                                                        </div>
                                                        <div class="radio-box">
                                                            <input type="radio" id="ecom" name="industry" value="E-Commerce"  />
                                                            <label for="ecom">E-Commerce</label>
                                                        </div>
                                                        <div class="radio-box">
                                                            <input type="radio" id="education" name="industry" value="Education"  />
                                                            <label for="education">Education</label>
                                                        </div>
                                                        <div class="radio-box">
                                                            <input type="radio" id="realestate" name="industry" value="Real Estate"  />
                                                            <label for="realestate">Real Estate</label>
                                                        </div>
                                                        <div class="radio-box">
                                                            <input type="radio" id="manufacturing" name="industry" value="Manufacturing"  />
                                                            <label for="manufacturing">Manufacturing</label>
                                                        </div>
                                                        <div class="radio-box">
                                                            <input type="radio" id="media" name="industry" value="Media and Entertainment"  />
                                                            <label for="media">Media and Entertainment</label>
                                                        </div>
                                                        <div class="radio-box">
                                                            <input type="radio" id="logistics" name="industry" value="Logistics and Transportation"
                                                                />
                                                            <label for="logistics">Logistics and Transportation</label>
                                                        </div>
                                                        <div class="radio-box">
                                                            <input type="radio" id="telecommunications" name="industry" value="Telecommunications"
                                                                />
                                                            <label for="telecommunications">Telecommunications</label>
                                                        </div>
                                                        <div class="radio-box">
                                                            <input type="radio" id="energy" name="industry" value="Energy and Utilities"  />
                                                            <label for="energy">Energy and Utilities</label>
                                                        </div>
                                                        <div class="radio-box">
                                                            <input type="radio" id="other" name="industry" value="Other"  />
                                                            <label for="other">Other</label>
                                                        </div>
                                                    </div>
                                                    <div class="error" id="error-industry"></div>
                                                </div>
                                            </div>
                                            <div class="input-row field">
                                                <div class="input-group">
                                                    <label>What you need from us?</label>
                                                    <div class="feedback-checkboxes d-flex flex-wrap">
                                                        <div class="feedback-item">
                                                            <input type="checkbox" id="web_design" name="services[]" value="Web design" />
                                                            <label for="web_design">Process Automation</label>
                                                        </div>
                                                        <div class="feedback-item">
                                                            <input type="checkbox" id="app_design" name="services[]" value="App design" />
                                                            <label for="app_design">Generative AI</label>
                                                        </div>
                                                        <div class="feedback-item">
                                                            <input type="checkbox" id="branding" name="services[]" value="Branding" />
                                                            <label for="branding">Data Analytics</label>
                                                        </div>
                                                        <div class="feedback-item">
                                                            <input type="checkbox" id="development" name="services[]" value="Development" />
                                                            <label for="development">Market Research</label>
                                                        </div>
                                                        <div class="feedback-item">
                                                            <input type="checkbox" id="cloud_service" name="services[]" value="Cloud service" />
                                                            <label for="cloud_service">Web Development</label>
                                                        </div>
                                                        <div class="feedback-item">
                                                            <input type="checkbox" id="other_service" name="services[]" value="Other" />
                                                            <label for="other_service">Other</label>
                                                        </div>
                                                    </div>
                                                    <div class="error" id="error-services"></div>
                                                </div>
                                            </div>
                                        <!-- second step over-->
                                    </div>
                                    <div class="third">
                                        <!-- third step starts-->
                                            <div class="input-row field">
                                                <div class="input-group">
                                                    <label for="first_name">Name</label>
                                                    <input type="text" placeholder="First Name" id="first_name" name="fullname"  />
                                                    <div class="error" id="error-name"></div>
                                                </div>
                                            </div>
                                            <div class="input-row field">
                                                <div class="input-group">
                                                    <label for="email">Email</label>
                                                    <input type="email" placeholder="Your Email" id="email" name="email"  />
                                                    <div class="error" id="error-email"></div>
                                                </div>
                                                <div class="input-group phone-number">
                                                    <label for="phone_number">Phone</label>
                                                    <input type="text" name="phone" placeholder="+1 912 323232"  />
                                                    <div class="error" id="error-phone"></div>
                                                </div>
                                            </div>
                                            <div class="input-row field">
                                                <div class="input-group">
                                                    <label for="last_name">Company Name</label>
                                                    <input type="text" placeholder="Eg. Microsoft" id="company_name" name="company"  />
                                                    <div class="error" id="error-company"></div>
                                                </div>
                                            </div>
                                            <div class="input-row field">
                                                <div class="input-group">
                                                    <label>Select Your Industry</label>
                                                    <div class="choice-a-company flex-wrap d-flex">
                                                        <!-- Radio buttons for industry selection -->
                                                        <div class="radio-box">
                                                            <input type="radio" id="healthcare" name="industry" value="Healthcare"  />
                                                            <label for="healthcare">Healthcare</label>
                                                        </div>
                                                        <div class="radio-box">
                                                            <input type="radio" id="finance" name="industry" value="Finance and Banking"  />
                                                            <label for="finance">Finance and Banking</label>
                                                        </div>
                                                        <div class="radio-box">
                                                            <input type="radio" id="ecom" name="industry" value="E-Commerce"  />
                                                            <label for="ecom">E-Commerce</label>
                                                        </div>
                                                        <div class="radio-box">
                                                            <input type="radio" id="education" name="industry" value="Education"  />
                                                            <label for="education">Education</label>
                                                        </div>
                                                        <div class="radio-box">
                                                            <input type="radio" id="realestate" name="industry" value="Real Estate"  />
                                                            <label for="realestate">Real Estate</label>
                                                        </div>
                                                        <div class="radio-box">
                                                            <input type="radio" id="manufacturing" name="industry" value="Manufacturing"  />
                                                            <label for="manufacturing">Manufacturing</label>
                                                        </div>
                                                        <div class="radio-box">
                                                            <input type="radio" id="media" name="industry" value="Media and Entertainment"  />
                                                            <label for="media">Media and Entertainment</label>
                                                        </div>
                                                        <div class="radio-box">
                                                            <input type="radio" id="logistics" name="industry" value="Logistics and Transportation"
                                                                />
                                                            <label for="logistics">Logistics and Transportation</label>
                                                        </div>
                                                        <div class="radio-box">
                                                            <input type="radio" id="telecommunications" name="industry" value="Telecommunications"
                                                                />
                                                            <label for="telecommunications">Telecommunications</label>
                                                        </div>
                                                        <div class="radio-box">
                                                            <input type="radio" id="energy" name="industry" value="Energy and Utilities"  />
                                                            <label for="energy">Energy and Utilities</label>
                                                        </div>
                                                        <div class="radio-box">
                                                            <input type="radio" id="other" name="industry" value="Other"  />
                                                            <label for="other">Other</label>
                                                        </div>
                                                    </div>
                                                    <div class="error" id="error-industry"></div>
                                                </div>
                                            </div>
                                            <div class="input-row field">
                                                <div class="input-group">
                                                    <label>What you need from us?</label>
                                                    <div class="feedback-checkboxes d-flex flex-wrap">
                                                        <div class="feedback-item">
                                                            <input type="checkbox" id="web_design" name="services[]" value="Web design" />
                                                            <label for="web_design">Process Automation</label>
                                                        </div>
                                                        <div class="feedback-item">
                                                            <input type="checkbox" id="app_design" name="services[]" value="App design" />
                                                            <label for="app_design">Generative AI</label>
                                                        </div>
                                                        <div class="feedback-item">
                                                            <input type="checkbox" id="branding" name="services[]" value="Branding" />
                                                            <label for="branding">Data Analytics</label>
                                                        </div>
                                                        <div class="feedback-item">
                                                            <input type="checkbox" id="development" name="services[]" value="Development" />
                                                            <label for="development">Market Research</label>
                                                        </div>
                                                        <div class="feedback-item">
                                                            <input type="checkbox" id="cloud_service" name="services[]" value="Cloud service" />
                                                            <label for="cloud_service">Web Development</label>
                                                        </div>
                                                        <div class="feedback-item">
                                                            <input type="checkbox" id="other_service" name="services[]" value="Other" />
                                                            <label for="other_service">Other</label>
                                                        </div>
                                                    </div>
                                                    <div class="error" id="error-services"></div>
                                                </div>
                                            </div>
                                        <!-- third step over-->
                                    </div>
                                    <div class="fourth">
                                        <!-- fourth step starts-->
                                        <div class="input-row field">
                                                <div class="input-group">
                                                    <label for="first_name">Name</label>
                                                    <input type="text" placeholder="First Name" id="first_name" name="fullname"  />
                                                    <div class="error" id="error-name"></div>
                                                </div>
                                            </div>
                                            <div class="input-row field">
                                                <div class="input-group">
                                                    <label for="email">Email</label>
                                                    <input type="email" placeholder="Your Email" id="email" name="email"  />
                                                    <div class="error" id="error-email"></div>
                                                </div>
                                                <div class="input-group phone-number">
                                                    <label for="phone_number">Phone</label>
                                                    <input type="text" name="phone" placeholder="+1 912 323232"  />
                                                    <div class="error" id="error-phone"></div>
                                                </div>
                                            </div>
                                            <div class="input-row field">
                                                <div class="input-group">
                                                    <label for="last_name">Company Name</label>
                                                    <input type="text" placeholder="Eg. Microsoft" id="company_name" name="company"  />
                                                    <div class="error" id="error-company"></div>
                                                </div>
                                            </div>
                                            <div class="input-row field">
                                                <div class="input-group">
                                                    <label>Select Your Industry</label>
                                                    <div class="choice-a-company flex-wrap d-flex">
                                                        <!-- Radio buttons for industry selection -->
                                                        <div class="radio-box">
                                                            <input type="radio" id="healthcare" name="industry" value="Healthcare"  />
                                                            <label for="healthcare">Healthcare</label>
                                                        </div>
                                                        <div class="radio-box">
                                                            <input type="radio" id="finance" name="industry" value="Finance and Banking"  />
                                                            <label for="finance">Finance and Banking</label>
                                                        </div>
                                                        <div class="radio-box">
                                                            <input type="radio" id="ecom" name="industry" value="E-Commerce"  />
                                                            <label for="ecom">E-Commerce</label>
                                                        </div>
                                                        <div class="radio-box">
                                                            <input type="radio" id="education" name="industry" value="Education"  />
                                                            <label for="education">Education</label>
                                                        </div>
                                                        <div class="radio-box">
                                                            <input type="radio" id="realestate" name="industry" value="Real Estate"  />
                                                            <label for="realestate">Real Estate</label>
                                                        </div>
                                                        <div class="radio-box">
                                                            <input type="radio" id="manufacturing" name="industry" value="Manufacturing"  />
                                                            <label for="manufacturing">Manufacturing</label>
                                                        </div>
                                                        <div class="radio-box">
                                                            <input type="radio" id="media" name="industry" value="Media and Entertainment"  />
                                                            <label for="media">Media and Entertainment</label>
                                                        </div>
                                                        <div class="radio-box">
                                                            <input type="radio" id="logistics" name="industry" value="Logistics and Transportation"
                                                                />
                                                            <label for="logistics">Logistics and Transportation</label>
                                                        </div>
                                                        <div class="radio-box">
                                                            <input type="radio" id="telecommunications" name="industry" value="Telecommunications"
                                                                />
                                                            <label for="telecommunications">Telecommunications</label>
                                                        </div>
                                                        <div class="radio-box">
                                                            <input type="radio" id="energy" name="industry" value="Energy and Utilities"  />
                                                            <label for="energy">Energy and Utilities</label>
                                                        </div>
                                                        <div class="radio-box">
                                                            <input type="radio" id="other" name="industry" value="Other"  />
                                                            <label for="other">Other</label>
                                                        </div>
                                                    </div>
                                                    <div class="error" id="error-industry"></div>
                                                </div>
                                            </div>
                                            <div class="input-row field">
                                                <div class="input-group">
                                                    <label>What you need from us?</label>
                                                    <div class="feedback-checkboxes d-flex flex-wrap">
                                                        <div class="feedback-item">
                                                            <input type="checkbox" id="web_design" name="services[]" value="Web design" />
                                                            <label for="web_design">Process Automation</label>
                                                        </div>
                                                        <div class="feedback-item">
                                                            <input type="checkbox" id="app_design" name="services[]" value="App design" />
                                                            <label for="app_design">Generative AI</label>
                                                        </div>
                                                        <div class="feedback-item">
                                                            <input type="checkbox" id="branding" name="services[]" value="Branding" />
                                                            <label for="branding">Data Analytics</label>
                                                        </div>
                                                        <div class="feedback-item">
                                                            <input type="checkbox" id="development" name="services[]" value="Development" />
                                                            <label for="development">Market Research</label>
                                                        </div>
                                                        <div class="feedback-item">
                                                            <input type="checkbox" id="cloud_service" name="services[]" value="Cloud service" />
                                                            <label for="cloud_service">Web Development</label>
                                                        </div>
                                                        <div class="feedback-item">
                                                            <input type="checkbox" id="other_service" name="services[]" value="Other" />
                                                            <label for="other_service">Other</label>
                                                        </div>
                                                    </div>
                                                    <div class="error" id="error-services"></div>
                                                </div>
                                            </div>
                                        <!-- fourth step over-->
                                    </div>
                                    <div class="fifth">
                                        <!-- fifth step starts-->
                                        <div class="input-row field">
                                                <div class="input-group">
                                                    <label for="first_name">Name</label>
                                                    <input type="text" placeholder="First Name" id="first_name" name="fullname"  />
                                                    <div class="error" id="error-name"></div>
                                                </div>
                                            </div>
                                            <div class="input-row field">
                                                <div class="input-group">
                                                    <label for="email">Email</label>
                                                    <input type="email" placeholder="Your Email" id="email" name="email"  />
                                                    <div class="error" id="error-email"></div>
                                                </div>
                                                <div class="input-group phone-number">
                                                    <label for="phone_number">Phone</label>
                                                    <input type="text" name="phone" placeholder="+1 912 323232"  />
                                                    <div class="error" id="error-phone"></div>
                                                </div>
                                            </div>
                                            <div class="input-row field">
                                                <div class="input-group">
                                                    <label for="last_name">Company Name</label>
                                                    <input type="text" placeholder="Eg. Microsoft" id="company_name" name="company"  />
                                                    <div class="error" id="error-company"></div>
                                                </div>
                                            </div>
                                            <div class="input-row field">
                                                <div class="input-group">
                                                    <label>Select Your Industry</label>
                                                    <div class="choice-a-company flex-wrap d-flex">
                                                        <!-- Radio buttons for industry selection -->
                                                        <div class="radio-box">
                                                            <input type="radio" id="healthcare" name="industry" value="Healthcare"  />
                                                            <label for="healthcare">Healthcare</label>
                                                        </div>
                                                        <div class="radio-box">
                                                            <input type="radio" id="finance" name="industry" value="Finance and Banking"  />
                                                            <label for="finance">Finance and Banking</label>
                                                        </div>
                                                        <div class="radio-box">
                                                            <input type="radio" id="ecom" name="industry" value="E-Commerce"  />
                                                            <label for="ecom">E-Commerce</label>
                                                        </div>
                                                        <div class="radio-box">
                                                            <input type="radio" id="education" name="industry" value="Education"  />
                                                            <label for="education">Education</label>
                                                        </div>
                                                        <div class="radio-box">
                                                            <input type="radio" id="realestate" name="industry" value="Real Estate"  />
                                                            <label for="realestate">Real Estate</label>
                                                        </div>
                                                        <div class="radio-box">
                                                            <input type="radio" id="manufacturing" name="industry" value="Manufacturing"  />
                                                            <label for="manufacturing">Manufacturing</label>
                                                        </div>
                                                        <div class="radio-box">
                                                            <input type="radio" id="media" name="industry" value="Media and Entertainment"  />
                                                            <label for="media">Media and Entertainment</label>
                                                        </div>
                                                        <div class="radio-box">
                                                            <input type="radio" id="logistics" name="industry" value="Logistics and Transportation"
                                                                />
                                                            <label for="logistics">Logistics and Transportation</label>
                                                        </div>
                                                        <div class="radio-box">
                                                            <input type="radio" id="telecommunications" name="industry" value="Telecommunications"
                                                                />
                                                            <label for="telecommunications">Telecommunications</label>
                                                        </div>
                                                        <div class="radio-box">
                                                            <input type="radio" id="energy" name="industry" value="Energy and Utilities"  />
                                                            <label for="energy">Energy and Utilities</label>
                                                        </div>
                                                        <div class="radio-box">
                                                            <input type="radio" id="other" name="industry" value="Other"  />
                                                            <label for="other">Other</label>
                                                        </div>
                                                    </div>
                                                    <div class="error" id="error-industry"></div>
                                                </div>
                                            </div>
                                            <div class="input-row field">
                                                <div class="input-group">
                                                    <label>What you need from us?</label>
                                                    <div class="feedback-checkboxes d-flex flex-wrap">
                                                        <div class="feedback-item">
                                                            <input type="checkbox" id="web_design" name="services[]" value="Web design" />
                                                            <label for="web_design">Process Automation</label>
                                                        </div>
                                                        <div class="feedback-item">
                                                            <input type="checkbox" id="app_design" name="services[]" value="App design" />
                                                            <label for="app_design">Generative AI</label>
                                                        </div>
                                                        <div class="feedback-item">
                                                            <input type="checkbox" id="branding" name="services[]" value="Branding" />
                                                            <label for="branding">Data Analytics</label>
                                                        </div>
                                                        <div class="feedback-item">
                                                            <input type="checkbox" id="development" name="services[]" value="Development" />
                                                            <label for="development">Market Research</label>
                                                        </div>
                                                        <div class="feedback-item">
                                                            <input type="checkbox" id="cloud_service" name="services[]" value="Cloud service" />
                                                            <label for="cloud_service">Web Development</label>
                                                        </div>
                                                        <div class="feedback-item">
                                                            <input type="checkbox" id="other_service" name="services[]" value="Other" />
                                                            <label for="other_service">Other</label>
                                                        </div>
                                                    </div>
                                                    <div class="error" id="error-services"></div>
                                                </div>
                                            </div>
                                        <!-- fifth step over-->
                                    </div>
                                    <!-- here end for left form fields -->
                                    
                                </div>
                                <div class="input-main-row">
                                    <!-- here my form fields for step form for right   -->
                                    <div class="first">
                                        <!-- first step -->
                                        <p>form 1</p>
                                    </div>
                                    <div class="second">
                                        <!-- second step -->
                                        <p>form 2</p>
                                    </div>
                                    <div class="third">
                                        <!-- third step -->
                                        <p>form 3</p>
                                    </div>
                                    <div class="fourth">
                                        <!-- fourth step -->
                                        <p>form 4</p>
                                    </div>
                                    <div class="fifth">
                                        <!-- fifth step -->
                                        <p>form 5</p>
                                    </div>
                                    <!-- here end for right form fields -->
                                    
                                    <div class="input-row field">
                                        <!-- disable the previous button when in first step  -->
                                        <div class="input-group">
                                            <button class="theme-btn" type="button">Previous</button>
                                        </div>
                                        <div class="input-group phone-number">
                                            <button class="theme-btn"  type="button">Next</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="alert-message alert-message-style"></div>
                        </div>
                    <!-- here my form end  -->

                    </div>
                    <!-- after the 5th step display this div -->
                    <div class="hero-contact-form-inner-wrap d-none" >
                        <div class="hero-contact-form-header d-flex align-items-center justify-content-between">
                            <h2>Business Audit Score Board</h2>
                        </div>
                        <div class="hero-contact-form">
                            <div class="contact-form d-flex">
                                <div class="input-main-row">
                                    <div class="chart">
                                        <div id="ch-main" style="width: 600px;height:400px;"></div>
                                    </div>
                                    <div class="stats">
                                        <div class="d-flex justify-content-start align-items-center mb-2">
                                                <h3 class="">31%</h3>
                                                <p class="mb-0 ms-3">Financial Health & Operations</p>
                                        </div>
                                        <div class="progress mb-5">

                                            <div class="progress-bar progress-bar-info  rounded-pill" role="progressbar" aria-valuenow="31"
                                            aria-valuemin="0" aria-valuemax="100" style="width:31% ;background-color: #F87708B2;">
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-start align-items-center mb-2">
                                                <h3 class="">17%</h3>
                                                <p class="mb-0 ms-3">Digital & Technology Adoption</p>
                                        </div>
                                        <div class="progress mb-5">

                                            <div class="progress-bar progress-bar-info  rounded-pill" role="progressbar" aria-valuenow="17"
                                            aria-valuemin="0" aria-valuemax="100" style="width:17%;background-color: #FB4A55B2;">
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-start align-items-center mb-2">
                                                <h3 class="">12%</h3>
                                                <p class="mb-0 ms-3">Automation & Business Optimization</p>
                                        </div>
                                        <div class="progress mb-5">

                                            <div class="progress-bar progress-bar-info rounded-pill" role="progressbar" aria-valuenow="12"
                                            aria-valuemin="0" aria-valuemax="100" style="width:12%;background-color: #E620AFB2;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="stats-foot mt-5">
                                        <div class="input-row field">
                                            <button class="theme-btn rounded-2 mb-4" type="button">Improve your score</button>
                                        </div>
                                        <p class="">Discover how Toolfe can rapidly elevate your score in a short period of time.</p>
                                    </div>
                                </div>
                                <div class="input-main-row">
                                    <!-- i have a form submission button here -->
                                        <h3 class="mb-4">Recommendations to enhance your Business Performance</h3>
                                        <div class="report-card">
                                            <h4 class="">Revenue and Financial Health</h4>
                                            <p class="">Your score indicates there's room for improvement in your financial strategy. Consider implementing a more robust budgeting process and exploring ways to increase profitability.</p>
                                            <div class="position-relative ">
                                                <div class="card-blur">
                                                    <h4 class="">Revenue and Financial Health</h4>
                                                    <p class="">Your score indicates there's room for improvement in your financial strategy. Consider implementing a more robust budgeting process and exploring ways to increase profitability.</p>
                                                    <h4 class="">Revenue and Financial Health</h4>
                                                    <p class="">Your score indicates there's room for improvement in your financial strategy. Consider implementing a more robust budgeting process and exploring ways to increase profitability.</p>
                                                    <h4 class="">Revenue and Financial Health</h4>
                                                    <p class="">Your score indicates there's room for improvement in your financial strategy. Consider implementing a more robust budgeting process and exploring ways to increase profitability.</p>
                                                </div>
                                                <div class="position-absolute full-report w-100 h-100">
                                                    <button class="theme-btn rounded-2 mx-auto my-4" type="button">View Full Report</button>
                                                    
                                                    <ul class="mt-5 mx-auto">
                                                        <li class="">
                                                            <p class="">6+ Pages comprehensive Report</p>
                                                        </li>
                                                        <li class="">
                                                            <p class="">6+ Pages comprehensive Report</p>
                                                        </li>
                                                        <li class="">
                                                            <p class="">6+ Pages comprehensive Report</p>
                                                        </li>
                                                        <li class="">
                                                            <p class="">6+ Pages comprehensive Report</p>
                                                        </li>
                                                        <li class="">
                                                            <p class="">6+ Pages comprehensive Report</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                </form>
            </div>
        </div>
    </section>

<section class="cta-area">
     <div class="custom-container">
      <div class="cta-body text-center">
        <img src="../assets/imgs/bg-shape-11.svg" alt="bg-shape-11" class="animation-slide-left bg-shape" />
        <div class="our-expert-team-box">
          <div class="our-expert-team-box-inner d-flex align-items-center">

          </div>
        </div>
        <h2>Let Toolfe Help You Reach Your Full Potential</h2>
        <p>Feel free to reach out for any inquiries or assistance.</p>
        <div data-cal-link="toolfe/revolutionize-your-business" data-cal-config='{"layout":"week_view"}' data-cal-namespace="" class="theme-simple-btn">Let's Connect
        </div>
      </div>
</section>



    <!-- Footer -->
    <?php include '../includes/foot.php';  ?>

</main>

<?php
include '../includes/requestAQuoteForm.php'
?>
<script src="../assets/js/step-form.js"></script>
<script src="https://cdn.jsdelivr.net/npm/echarts@5.5.1/dist/echarts.min.js"></script>
<script type="text/javascript">
      // Initialize the echarts instance based on the prepared dom
      var myChart = echarts.init(document.getElementById('ch-main'));

      // Specify the configuration items and data for the chart

      option = {
  series: [
    {
      type: 'gauge',
      startAngle: 180,
      endAngle: 0,
      min: 0,
      max: 100,
      splitNumber: 4,
      radius: "80%",
      itemStyle: {
        color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [
          {
            offset: 0,
            color: 'rgb(255, 158, 68)'
          },
          {
            offset: 1,
            color: 'rgb(255, 70, 131)'
          }
        ]),
        shadowColor: '#FB4A55B2',
        shadowBlur: 10,
        shadowOffsetX: 2,
        shadowOffsetY: 2
      },
      progress: {
        show: true,
        roundCap: true,
        width: 40
      },
      pointer: {
        show:false,
      },
      axisLine: {
        roundCap: true,
        lineStyle: {
          width: 40
        }
      },
      axisTick: {
        splitNumber: 1,
        lineStyle: {
          width: 0,
          color: '#999'
        }
      },
      splitLine: {
        length: -80,
        lineStyle: {
          width: 0,
          color: '#999'
        }
      },
      axisLabel: {
        distance: 30,
        color: '#999',
        fontSize: 20
      },
      title: {
        show: false
      },
      detail: {
        backgroundColor: '#fff',
        width: '60%',
        lineHeight: 40,
        height: 40,
        borderRadius: 8,
        offsetCenter: [0, '0'],
        valueAnimation: true,
        formatter: function (value) {
          return '{value|' + value.toFixed(0) + '}%';
        },
        rich: {
          value: {
            fontSize: 30,
            fontWeight: 'bolder',
            color: '#777'
          },
          unit: {
            fontSize: 20,
            color: '#999',
            padding: [0, 0, -20, 10]
          }
        }
      },
      data: [
        {
          value: 60
        }
      ]
    }
  ]
};

     // Display the chart using the configuration items and data just specified.
      myChart.setOption(option);
    </script>

<?php
include '../includes/footer.php'
?>