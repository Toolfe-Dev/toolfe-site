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
                <form id="audit-form" action="./audit-form.php" method="POST">
                    <!-- after the 5th step hide this div -->
                     <!-- dont submit the form here  -->
                    <div class="hero-contact-form-inner-wrap">
                    <!-- step form indecators -->
                        <div class="mb-5">
                            <ul class=" form-steps">
                                <li class="d-flex justify-content-center align-items-center flex-column">
                                    <div class="form-indecator">1</div>
                                    <div class="text-center"> Current Process Details</div>   
                                </li>
                                <li class="d-flex justify-content-center align-items-center flex-column">
                                    <div class="form-indecator">2</div>
                                    <div class="text-center"> Automation Potential</div>    
                                </li>
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
                                                <label for="prcss_name">Process Name</label>
                                                <input id="prcss_name" type="text" name="prcss_name" placeholder="Invoice Processing" />
                                            </div>
                                        </div>
                                        <div class="input-row field">
                                            <div class="input-group">
                                                    <label for="time_per_unit">Average Processing Time per Unit (hours)</label>
                                                    <input id="time_per_unit" type="number" max="10000" min="0" name="time_per_unit" placeholder="1 hrs / 0.5 hrs" />
                                                </div>
                                            </div>
                                        <div class="input-row field">
                                            <div class="input-group">
                                                <label for="annual_volume">Annual Volume</label>
                                                <input id="annual_volume" type="number" max="9999999" min="0" name="annual_volume" placeholder="3000" />
                                            </div>
                                        </div>
                                        <!-- first step over -->
                                    </div>
                                    <div class="second">
                                        <!-- second step starts-->
                                        <div class="input-row field">
                                            <div class="input-group">
                                                <label for="per_pro_auto">Percentage of Process Automation</label>
                                                <input id="per_pro_auto" type="number" max="100" min="0" name="per_pro_auto" placeholder="80%" />
                                            </div>
                                        </div>
                                        <div class="input-row field">
                                            <div class="input-group">
                                                <label for="auto_cost">Estimated Automation Cost</label>
                                                <input id="auto_cost" type="number" max="99999999999" min="0" name="auto_cost" placeholder="₹ 50,000.00" />
                                            </div>
                                        </div>
                                        <div class="input-row field">
                                            <div class="input-group">
                                                <label for="maint_cost">Annual Maintenance Cost</label>
                                                <input id="maint_cost" type="number" max="99999999999" min="0" name="maint_cost" placeholder="₹ 10,000.00" />
                                            </div>
                                        </div>
                                        <!-- second step over-->
                                    </div>
                                    <!-- here end for left form fields -->     
                                </div>
                                <div class="input-main-row">
                                    <!-- here my form fields for step form for right   -->
                                    <div class="first">
                                        <!-- first step -->
                                        <div class="input-row field">
                                            <div class="input-group">
                                                    <label for="fte_salary">Average FTE Salary per year</label>
                                                    <input id="fte_salary" type="number" max="99999999999" min="0" name="fte_salary" placeholder="₹ 500,000.00" />
                                                </div>
                                            </div>
                                        <div class="input-row field">
                                            <div class="input-group">
                                                <label for="add_cost">Additional Cost for FTE (%)</label>
                                                <input id="add_cost" type="number" max="100" min="0" name="add_cost" placeholder="0.25" />
                                            </div>
                                        </div>


                                    </div>
                                    <div class="second">
                                        <!-- second step -->
                                        <div class="input-row field">
                                            <div class="input-group">
                                                <label for="company_name">Company Name</label>
                                                <input id="company_name" type="text" name="company_name" placeholder="TechSys Solutions Pvt. Ltd." />
                                            </div>
                                        </div>
                                        <div class="input-row field">
                                            <div class="input-group">
                                                <label for="Industry">Industry</label>
                                                <select name="Industry" id="Industry" required>
                                                    <option value="">Please select</option>
                                                    <option value="IT Services">IT Services</option>
                                                    <option value="medical">Medical</option>
                                                    <option value="education">Education</option>
                                                </select>
                                            </div>
                                        </div>
                                            <div class="input-row field">
                                                <div class="input-group">
                                                    <label>Number of Employees doing the Process</label>
                                                    <div class="choice-a-company flex-wrap d-flex">
                                                        <div class="radio-box">
                                                            <input type="radio" id="0 - 50" name="employe_count" value="50" required />
                                                            <label for="0 - 50">0 - 50</label>
                                                        </div>
                                                        <div class="radio-box">
                                                            <input type="radio" id="50 - 100" name="employe_count" value="100" />
                                                            <label for="50 - 100">50 - 100</label>
                                                        </div>
                                                        <div class="radio-box">
                                                            <input type="radio" id="100 - 300 " name="employe_count" value="300" />
                                                            <label for="100 - 300 ">100 - 300 </label>
                                                        </div>
                                                        <div class="radio-box">
                                                            <input type="radio" id="300 - more" name="employe_count" value="500" />
                                                            <label for="300 - more">300 - more</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
<script src="../assets/js/step-form-cal.js"></script>


<?php
include '../includes/footer.php'
?>