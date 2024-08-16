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
                                    <div class="text-center">Digital & Technology Adoption</div>   
                                </li>
                                <li class="d-flex justify-content-center align-items-center flex-column">
                                    <div class="form-indecator">2</div>
                                    <div class="text-center">Digital & Technology Adoption</div>    
                                </li>
                                <li class="d-flex justify-content-center align-items-center flex-column">
                                    <div class="form-indecator">3</div>    
                                    <div class="text-center">Digital & Technology Adoption</div>    
                                </li>
                                <li class="d-flex justify-content-center align-items-center flex-column">
                                    <div class="form-indecator">4</div>  
                                    <div class="text-center">Digital & Technology Adoption</div>  
                                </li>
                                <li class="d-flex justify-content-center align-items-center flex-column">
                                    <div class="form-indecator">5</div>    
                                    <div class="text-center">Digital & Technology Adoption</div>    
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
                                                <label for="q1">1. How would you rate your company's overall digital maturity?</label>
                                                <select name="q1" id="q1" required>
                                                    <option value="">Please select</option>
                                                    <option value="3">High</option>
                                                    <option value="2">Medium</option>
                                                    <option value="1">Low</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="input-row field">
                                            <div class="input-group">
                                                <label>2. How often does your company review and optimize its business processes?</label>
                                                <div class="choice-a-company flex-wrap d-flex">
                                                    <div class="radio-box">
                                                        <input type="radio" id="Continuously" name="q2" value="3" required />
                                                        <label for="Continuously">Continuously</label>
                                                    </div>
                                                    <div class="radio-box">
                                                        <input type="radio" id="Annually" name="q2" value="3" />
                                                        <label for="Annually">Annually</label>
                                                    </div>
                                                    <div class="radio-box">
                                                        <input type="radio" id="Every_few_years" name="q2" value="2" />
                                                        <label for="Every_few_years">Every few years</label>
                                                    </div>
                                                    <div class="radio-box">
                                                        <input type="radio" id="Rarely_or_never" name="q2" value="2" />
                                                        <label for="Rarely_or_never">Rarely or never</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-row field">
                                            <div class="input-group">
                                                <label>3. Which of the following technologies has your company implemented or is planning to implement?</label>
                                                <div class="feedback-checkboxes d-flex flex-wrap">
                                                    <div class="feedback-item">
                                                        <input type="checkbox" id="ai" name="q3[]" value="1" />
                                                        <label for="ai">Artificial Intelligence</label>
                                                    </div>
                                                    <div class="feedback-item">
                                                        <input type="checkbox" id="vr_ar" name="q3[]" value="1" />
                                                        <label for="vr_ar">Virtual or Augmented Reality</label>
                                                    </div>
                                                    <div class="feedback-item">
                                                        <input type="checkbox" id="iot" name="q3[]" value="1" />
                                                        <label for="iot">Internet of Things (IoT)</label>
                                                    </div>
                                                    <div class="feedback-item">
                                                        <input type="checkbox" id="5g" name="q3[]" value="1" />
                                                        <label for="5g">5G</label>
                                                    </div>
                                                    <div class="feedback-item">
                                                        <input type="checkbox" id="blockchain" name="q3[]" value="1" />
                                                        <label for="blockchain">Blockchain</label>
                                                    </div>
                                                    <div class="feedback-item">
                                                        <input type="checkbox" id="none" name="q3[]" value="0" />
                                                        <label for="none">None of the above</label>
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
                                                    <label for="q6">6. What is your company's primary focus for digital transformation in the next year?</label>
                                                    <select name="q6" id="q6" required>
                                                        <option value="">Please select</option>
                                                        <option value="customer_experience">Improving customer experience</option>
                                                        <option value="operational_efficiency">Enhancing operational efficiency</option>
                                                        <option value="new_business_models">Developing new business models</option>
                                                        <option value="data_analytics">Leveraging data analytics</option>
                                                        <option value="cybersecurity">Strengthening cybersecurity</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="input-row field">
                                                <div class="input-group">
                                                    <label>7. How would you describe your company's approach to innovation?</label>
                                                    <div class="choice-a-company flex-wrap d-flex">
                                                        <div class="radio-box">
                                                            <input type="radio" id="proactive" name="q7" value="proactive" required />
                                                            <label for="proactive">Proactive - We actively seek and implement new ideas</label>
                                                        </div>
                                                        <div class="radio-box">
                                                            <input type="radio" id="reactive" name="q7" value="reactive" />
                                                            <label for="reactive">Reactive - We adapt when necessary</label>
                                                        </div>
                                                        <div class="radio-box">
                                                            <input type="radio" id="conservative" name="q7" value="conservative" />
                                                            <label for="conservative">Conservative - We prefer tried and tested methods</label>
                                                        </div>
                                                        <div class="radio-box">
                                                            <input type="radio" id="uncertain" name="q7" value="uncertain" />
                                                            <label for="uncertain">Uncertain - We don't have a clear innovation strategy</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="input-row field">
                                                <div class="input-group">
                                                    <label>8. Which of the following digital skills does your company prioritize in hiring or training?</label>
                                                    <div class="feedback-checkboxes d-flex flex-wrap">
                                                        <div class="feedback-item">
                                                            <input type="checkbox" id="data_analysis" name="q8[]" value="data_analysis" />
                                                            <label for="data_analysis">Data analysis and interpretation</label>
                                                        </div>
                                                        <div class="feedback-item">
                                                            <input type="checkbox" id="digital_marketing" name="q8[]" value="digital_marketing" />
                                                            <label for="digital_marketing">Digital marketing</label>
                                                        </div>
                                                        <div class="feedback-item">
                                                            <input type="checkbox" id="cybersecurity_skills" name="q8[]" value="cybersecurity_skills" />
                                                            <label for="cybersecurity_skills">Cybersecurity</label>
                                                        </div>
                                                        <div class="feedback-item">
                                                            <input type="checkbox" id="cloud_computing" name="q8[]" value="cloud_computing" />
                                                            <label for="cloud_computing">Cloud computing</label>
                                                        </div>
                                                        <div class="feedback-item">
                                                            <input type="checkbox" id="ai_ml" name="q8[]" value="ai_ml" />
                                                            <label for="ai_ml">Artificial Intelligence / Machine Learning</label>
                                                        </div>
                                                        <div class="feedback-item">
                                                            <input type="checkbox" id="no_priority" name="q8[]" value="no_priority" />
                                                            <label for="no_priority">We don't prioritize any specific digital skills</label>
                                                        </div>
                                                    </div>
                                                    <div class="error" id="error-skills"></div>
                                                </div>
                                            </div>
                                        <!-- second step over-->
                                    </div>
                                    <div class="third">
                                        <!-- third step starts-->
                                        <div class="input-row field">
                                            <div class="input-group">
                                                    <label for="q11">11. How would you rate your company's cybersecurity preparedness?</label>
                                                    <select name="q11" id="q11" required>
                                                        <option value="">Please select</option>
                                                        <option value="very_prepared">Very prepared</option>
                                                        <option value="somewhat_prepared">Somewhat prepared</option>
                                                        <option value="neutral">Neither prepared nor unprepared</option>
                                                        <option value="somewhat_unprepared">Somewhat unprepared</option>
                                                        <option value="very_unprepared">Very unprepared</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="input-row field">
                                                <div class="input-group">
                                                    <label>12. What is the biggest challenge your company faces in digital transformation?</label>
                                                    <div class="choice-a-company flex-wrap d-flex">
                                                        <div class="radio-box">
                                                            <input type="radio" id="budget_constraints" name="q12" value="budget_constraints" required />
                                                            <label for="budget_constraints">Budget constraints</label>
                                                        </div>
                                                        <div class="radio-box">
                                                            <input type="radio" id="skill_gaps" name="q12" value="skill_gaps" />
                                                            <label for="skill_gaps">Skill gaps in the workforce</label>
                                                        </div>
                                                        <div class="radio-box">
                                                            <input type="radio" id="legacy_systems" name="q12" value="legacy_systems" />
                                                            <label for="legacy_systems">Integration with legacy systems</label>
                                                        </div>
                                                        <div class="radio-box">
                                                            <input type="radio" id="cultural_resistance" name="q12" value="cultural_resistance" />
                                                            <label for="cultural_resistance">Cultural resistance to change</label>
                                                        </div>
                                                        <div class="radio-box">
                                                            <input type="radio" id="data_security" name="q12" value="data_security" />
                                                            <label for="data_security">Data security and privacy concerns</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="input-row field">
                                                <div class="input-group">
                                                    <label>13. Which of the following digital initiatives has your company implemented in the last year?</label>
                                                    <div class="feedback-checkboxes d-flex flex-wrap">
                                                        <div class="feedback-item">
                                                            <input type="checkbox" id="remote_work" name="q13[]" value="remote_work" />
                                                            <label for="remote_work">Enhanced remote work capabilities</label>
                                                        </div>
                                                        <div class="feedback-item">
                                                            <input type="checkbox" id="ecommerce" name="q13[]" value="ecommerce" />
                                                            <label for="ecommerce">Expanded e-commerce presence</label>
                                                        </div>
                                                        <div class="feedback-item">
                                                            <input type="checkbox" id="cloud_migration" name="q13[]" value="cloud_migration" />
                                                            <label for="cloud_migration">Cloud migration of core systems</label>
                                                        </div>
                                                        <div class="feedback-item">
                                                            <input type="checkbox" id="customer_analytics" name="q13[]" value="customer_analytics" />
                                                            <label for="customer_analytics">Advanced customer analytics</label>
                                                        </div>
                                                        <div class="feedback-item">
                                                            <input type="checkbox" id="automation" name="q13[]" value="automation" />
                                                            <label for="automation">Process automation</label>
                                                        </div>
                                                        <div class="feedback-item">
                                                            <input type="checkbox" id="no_initiatives" name="q13[]" value="no_initiatives" />
                                                            <label for="no_initiatives">No major digital initiatives implemented</label>
                                                        </div>
                                                    </div>
                                                    <div class="error" id="error-initiatives"></div>
                                                </div>
                                            </div>
                                        <!-- third step over-->
                                    </div>
                                    <div class="fourth">
                                        <!-- fourth step starts-->
                                        <div class="input-row field">
                                            <div class="input-group">
                                                <label for="q16">16. How would you rate your company's data analytics capabilities?</label>
                                                <select name="q16" id="q16" required>
                                                    <option value="">Please select</option>
                                                    <option value="advanced">Advanced - We use predictive and prescriptive analytics</option>
                                                    <option value="intermediate">Intermediate - We use descriptive and diagnostic analytics</option>
                                                    <option value="basic">Basic - We mainly use simple reporting and dashboards</option>
                                                    <option value="limited">Limited - We rarely use data analytics</option>
                                                    <option value="none">None - We don't use data analytics</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="input-row field">
                                            <div class="input-group">
                                                <label>17. What is your company's primary motivation for digital transformation?</label>
                                                <div class="choice-a-company flex-wrap d-flex">
                                                    <div class="radio-box">
                                                        <input type="radio" id="competitive_advantage" name="q17" value="competitive_advantage" required />
                                                        <label for="competitive_advantage">Gaining competitive advantage</label>
                                                    </div>
                                                    <div class="radio-box">
                                                        <input type="radio" id="cost_reduction" name="q17" value="cost_reduction" />
                                                        <label for="cost_reduction">Reducing operational costs</label>
                                                    </div>
                                                    <div class="radio-box">
                                                        <input type="radio" id="customer_demands" name="q17" value="customer_demands" />
                                                        <label for="customer_demands">Meeting changing customer demands</label>
                                                    </div>
                                                    <div class="radio-box">
                                                        <input type="radio" id="new_revenue" name="q17" value="new_revenue" />
                                                        <label for="new_revenue">Creating new revenue streams</label>
                                                    </div>
                                                    <div class="radio-box">
                                                        <input type="radio" id="regulatory_compliance" name="q17" value="regulatory_compliance" />
                                                        <label for="regulatory_compliance">Ensuring regulatory compliance</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="input-row field">
                                            <div class="input-group">
                                                <label>18. Which of the following emerging technologies do you believe will have the biggest impact on your industry in the next 5 years?</label>
                                                <div class="feedback-checkboxes d-flex flex-wrap">
                                                    <div class="feedback-item">
                                                        <input type="checkbox" id="ai_impact" name="q18[]" value="ai_impact" />
                                                        <label for="ai_impact">Artificial Intelligence and Machine Learning</label>
                                                    </div>
                                                    <div class="feedback-item">
                                                        <input type="checkbox" id="blockchain_impact" name="q18[]" value="blockchain_impact" />
                                                        <label for="blockchain_impact">Blockchain</label>
                                                    </div>
                                                    <div class="feedback-item">
                                                        <input type="checkbox" id="iot_impact" name="q18[]" value="iot_impact" />
                                                        <label for="iot_impact">Internet of Things (IoT)</label>
                                                    </div>
                                                    <div class="feedback-item">
                                                        <input type="checkbox" id="quantum_computing" name="q18[]" value="quantum_computing" />
                                                        <label for="quantum_computing">Quantum Computing</label>
                                                    </div>
                                                    <div class="feedback-item">
                                                        <input type="checkbox" id="edge_computing" name="q18[]" value="edge_computing" />
                                                        <label for="edge_computing">Edge Computing</label>
                                                    </div>
                                                    <div class="feedback-item">
                                                        <input type="checkbox" id="no_significant_impact" name="q18[]" value="no_significant_impact" />
                                                        <label for="no_significant_impact">None will have a significant impact</label>
                                                    </div>
                                                </div>
                                                <div class="error" id="error-emerging-tech"></div>
                                            </div>
                                        </div>
                                        <!-- fourth step over-->
                                    </div>
                                    <div class="fifth">
                                        <!-- fifth step starts-->


                                        <div class="input-row field">
                                            <div class="input-group">
                                                <label>21. How often does your company provide digital skills training to employees?</label>
                                                <div class="choice-a-company flex-wrap d-flex">
                                                    <div class="radio-box">
                                                        <input type="radio" id="continuous_training" name="q21" value="continuous_training" required />
                                                        <label for="continuous_training">Continuously throughout the year</label>
                                                    </div>
                                                    <div class="radio-box">
                                                        <input type="radio" id="quarterly_training" name="q21" value="quarterly_training" />
                                                        <label for="quarterly_training">Quarterly</label>
                                                    </div>
                                                    <div class="radio-box">
                                                        <input type="radio" id="annual_training" name="q21" value="annual_training" />
                                                        <label for="annual_training">Annually</label>
                                                    </div>
                                                    <div class="radio-box">
                                                        <input type="radio" id="occasional_training" name="q21" value="occasional_training" />
                                                        <label for="occasional_training">Occasionally, as needed</label>
                                                    </div>
                                                    <div class="radio-box">
                                                        <input type="radio" id="no_training" name="q21" value="no_training" />
                                                        <label for="no_training">We don't provide digital skills training</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="input-row field">
                                            <div class="input-group">
                                                <label>22. Which of the following digital transformation metrics does your company track?</label>
                                                <div class="feedback-checkboxes d-flex flex-wrap">
                                                    <div class="feedback-item">
                                                        <input type="checkbox" id="revenue_growth" name="q22[]" value="revenue_growth" />
                                                        <label for="revenue_growth">Digital revenue growth</label>
                                                    </div>
                                                    <div class="feedback-item">
                                                        <input type="checkbox" id="operational_efficiency" name="q22[]" value="operational_efficiency" />
                                                        <label for="operational_efficiency">Operational efficiency improvements</label>
                                                    </div>
                                                    <div class="feedback-item">
                                                        <input type="checkbox" id="customer_satisfaction" name="q22[]" value="customer_satisfaction" />
                                                        <label for="customer_satisfaction">Customer satisfaction scores</label>
                                                    </div>
                                                    <div class="feedback-item">
                                                        <input type="checkbox" id="employee_productivity" name="q22[]" value="employee_productivity" />
                                                        <label for="employee_productivity">Employee productivity</label>
                                                    </div>
                                                    <div class="feedback-item">
                                                        <input type="checkbox" id="innovation_rate" name="q22[]" value="innovation_rate" />
                                                        <label for="innovation_rate">Innovation rate (new products/services launched)</label>
                                                    </div>
                                                    <div class="feedback-item">
                                                        <input type="checkbox" id="no_metrics" name="q22[]" value="no_metrics" />
                                                        <label for="no_metrics">We don't track specific digital transformation metrics</label>
                                                    </div>
                                                </div>
                                                <div class="error" id="error-metrics"></div>
                                            </div>
                                        </div>
                                        <div class="input-row field">
                                            <div class="input-group">
                                                <label for="q23">23. How would you describe your company's digital customer experience strategy?</label>
                                                <select name="q23" id="q23" required>
                                                    <option value="">Please select</option>
                                                    <option value="comprehensive">Comprehensive - fully integrated across all channels</option>
                                                    <option value="developing">Developing - some integration, but still working on improvements</option>
                                                    <option value="limited">Limited - minimal digital customer experience strategy</option>
                                                    <option value="nonexistent">Nonexistent - we don't have a digital customer experience strategy</option>
                                                    <option value="unsure">Unsure</option>
                                                </select>
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
                                        <div class="input-row field">
                                            <div class="input-group">
                                                <label>4. How often does your company conduct employee training programs?</label>
                                                <div class="choice-a-company flex-wrap d-flex">
                                                    <!-- Radio buttons for training frequency -->
                                                    <div class="radio-box">
                                                        <input type="radio" id="monthly_training" name="q4" value="2" />
                                                        <label for="monthly_training">Monthly</label>
                                                    </div>
                                                    <div class="radio-box">
                                                        <input type="radio" id="quarterly_training" name="q4" value="2" />
                                                        <label for="quarterly_training">Quarterly</label>
                                                    </div>
                                                    <div class="radio-box">
                                                        <input type="radio" id="annually_training" name="q4" value="3" />
                                                        <label for="annually_training">Annually</label>
                                                    </div>
                                                    <div class="radio-box">
                                                        <input type="radio" id="rarely_training" name="q4" value="2" />
                                                        <label for="rarely_training">Rarely or never</label>
                                                    </div>
                                                </div>
                                                <div class="error" id="error-q4"></div>
                                            </div>
                                        </div>

                                        <div class="input-row field">
                                            <div class="input-group">
                                                <label>5. Does your company have a formal performance evaluation system?</label>
                                                <div class="d-flex justify-content-start align-items-center">
                                                    <label for="yes_q5" class="m-0 me-3">Yes</label>
                                                    <input class="me-3" type="radio" id="yes_q5" name="q5" value="3" />
                                                </div>
                                                <div class="d-flex justify-content-start align-items-center">
                                                    <label for="no_q5" class="m-0 me-3">No</label>
                                                    <input class="me-3" type="radio" id="no_q5" name="q5" value="2" />
                                                </div>
                                                <div class="error" id="error-q5"></div>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="second">
                                        <!-- second step -->
                                        <div class="input-row field">
                                            <div class="input-group">
                                                <label>9. How frequently does your company update its cybersecurity measures?</label>
                                                <div class="choice-a-company flex-wrap d-flex">
                                                    <!-- Radio buttons for cybersecurity update frequency -->
                                                    <div class="radio-box">
                                                        <input type="radio" id="cyber_continuous" name="q9" value="Continuously" />
                                                        <label for="cyber_continuous">Continuously</label>
                                                    </div>
                                                    <div class="radio-box">
                                                        <input type="radio" id="cyber_annually" name="q9" value="Annually" />
                                                        <label for="cyber_annually">Annually</label>
                                                    </div>
                                                    <div class="radio-box">
                                                        <input type="radio" id="cyber_few_years" name="q9" value="Every few years" />
                                                        <label for="cyber_few_years">Every few years</label>
                                                    </div>
                                                    <div class="radio-box">
                                                        <input type="radio" id="cyber_rarely" name="q9" value="Rarely or never" />
                                                        <label for="cyber_rarely">Rarely or never</label>
                                                    </div>
                                                </div>
                                                <div class="error" id="error-q9"></div>
                                            </div>
                                        </div>

                                        <div class="input-row field">
                                            <div class="input-group">
                                                <label>10. Does your company have a disaster recovery plan in place?</label>
                                                <div class="d-flex justify-content-start align-items-center">
                                                    <label for="yes_q10" class="m-0 me-3">Yes</label>
                                                    <input class="me-3" type="radio" id="yes_q10" name="q10" value="Yes" />
                                                </div>
                                                <div class="d-flex justify-content-start align-items-center">
                                                    <label for="no_q10" class="m-0 me-3">No</label>
                                                    <input class="me-3" type="radio" id="no_q10" name="q10" value="No" />
                                                </div>
                                                <div class="error" id="error-q10"></div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="third">
                                        <!-- third step -->
                                        <div class="input-row field">
                                            <div class="input-group">
                                                <label>14. How often does your company conduct market research?</label>
                                                <div class="choice-a-company flex-wrap d-flex">
                                                    <!-- Radio buttons for market research frequency -->
                                                    <div class="radio-box">
                                                        <input type="radio" id="market_continuous" name="q14" value="Continuously" />
                                                        <label for="market_continuous">Continuously</label>
                                                    </div>
                                                    <div class="radio-box">
                                                        <input type="radio" id="market_annually" name="q14" value="Annually" />
                                                        <label for="market_annually">Annually</label>
                                                    </div>
                                                    <div class="radio-box">
                                                        <input type="radio" id="market_few_years" name="q14" value="Every few years" />
                                                        <label for="market_few_years">Every few years</label>
                                                    </div>
                                                    <div class="radio-box">
                                                        <input type="radio" id="market_rarely" name="q14" value="Rarely or never" />
                                                        <label for="market_rarely">Rarely or never</label>
                                                    </div>
                                                </div>
                                                <div class="error" id="error-q14"></div>
                                            </div>
                                        </div>

                                        <div class="input-row field">
                                            <div class="input-group">
                                                <label>15. Does your company use any automation tools for marketing activities?</label>
                                                <div class="d-flex justify-content-start align-items-center">
                                                    <label for="yes_q15" class="m-0 me-3">Yes</label>
                                                    <input class="me-3" type="radio" id="yes_q15" name="q15" value="Yes" />
                                                </div>
                                                <div class="d-flex justify-content-start align-items-center">
                                                    <label for="no_q15" class="m-0 me-3">No</label>
                                                    <input class="me-3" type="radio" id="no_q15" name="q15" value="No" />
                                                </div>
                                                <div class="error" id="error-q15"></div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="fourth">
                                        <!-- fourth step -->
                                        <div class="input-row field">
                                            <div class="input-group">
                                                <label>19. How often does your company update its software systems?</label>
                                                <div class="choice-a-company flex-wrap d-flex">
                                                    <!-- Radio buttons for software update frequency -->
                                                    <div class="radio-box">
                                                        <input type="radio" id="software_continuous" name="q19" value="Continuously" />
                                                        <label for="software_continuous">Continuously</label>
                                                    </div>
                                                    <div class="radio-box">
                                                        <input type="radio" id="software_annually" name="q19" value="Annually" />
                                                        <label for="software_annually">Annually</label>
                                                    </div>
                                                    <div class="radio-box">
                                                        <input type="radio" id="software_few_years" name="q19" value="Every few years" />
                                                        <label for="software_few_years">Every few years</label>
                                                    </div>
                                                    <div class="radio-box">
                                                        <input type="radio" id="software_rarely" name="q19" value="Rarely or never" />
                                                        <label for="software_rarely">Rarely or never</label>
                                                    </div>
                                                </div>
                                                <div class="error" id="error-q19"></div>
                                            </div>
                                        </div>

                                        <div class="input-row field">
                                            <div class="input-group">
                                                <label>20. Does your company have a cloud migration strategy?</label>
                                                <div class="d-flex justify-content-start align-items-center">
                                                    <label for="yes_q20" class="m-0 me-3">Yes</label>
                                                    <input class="me-3" type="radio" id="yes_q20" name="q20" value="Yes" />
                                                </div>
                                                <div class="d-flex justify-content-start align-items-center">
                                                    <label for="no_q20" class="m-0 me-3">No</label>
                                                    <input class="me-3" type="radio" id="no_q20" name="q20" value="No" />
                                                </div>
                                                <div class="error" id="error-q20"></div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="fifth">
                                        <!-- fifth step -->
                                        <div class="input-row field">
                                            <div class="input-group">
                                                <label>24. How often does your company evaluate its customer satisfaction?</label>
                                                <div class="choice-a-company flex-wrap d-flex">
                                                    <!-- Radio buttons for customer satisfaction evaluation frequency -->
                                                    <div class="radio-box">
                                                        <input type="radio" id="satisfaction_continuous" name="q24" value="Continuously" />
                                                        <label for="satisfaction_continuous">Continuously</label>
                                                    </div>
                                                    <div class="radio-box">
                                                        <input type="radio" id="satisfaction_annually" name="q24" value="Annually" />
                                                        <label for="satisfaction_annually">Annually</label>
                                                    </div>
                                                    <div class="radio-box">
                                                        <input type="radio" id="satisfaction_few_years" name="q24" value="Every few years" />
                                                        <label for="satisfaction_few_years">Every few years</label>
                                                    </div>
                                                    <div class="radio-box">
                                                        <input type="radio" id="satisfaction_rarely" name="q24" value="Rarely or never" />
                                                        <label for="satisfaction_rarely">Rarely or never</label>
                                                    </div>
                                                </div>
                                                <div class="error" id="error-q24"></div>
                                            </div>
                                        </div>

                                        <div class="input-row field">
                                            <div class="input-group">
                                                <label>25. Does your company use data analytics to drive business decisions?</label>
                                                <div class="d-flex justify-content-start align-items-center">
                                                    <label for="yes_q25" class="m-0 me-3">Yes</label>
                                                    <input class="me-3" type="radio" id="yes_q25" name="q25" value="Yes" />
                                                </div>
                                                <div class="d-flex justify-content-start align-items-center">
                                                    <label for="no_q25" class="m-0 me-3">No</label>
                                                    <input class="me-3" type="radio" id="no_q25" name="q25" value="No" />
                                                </div>
                                                <div class="error" id="error-q25"></div>
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
<script src="../assets/js/step-form.js"></script>


<?php
include '../includes/footer.php'
?>