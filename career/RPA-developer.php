<?php
include '../includes/header.php'
?>

<!-- Main -->
<main class="main-page service-details-page portfolio-details-page">
  <?php include '../includes/head.php' ?>
  <!-- Portfolio Details Content -->

  <section class="hero-service-wrap hero-section-wrap hero-career-wrap hero-our-field-wrap">
    <div class="hero-section-content-wrap">
      <img src="../assets/imgs/bg-shape-1.svg" alt="Shape" class="animation-slide-left bg-shape" />
      <div class="custom-container">
        <div class="hero-portfolio-body">
          <div class="hero-section-content text-center">
            <h5 class="section-subtitle">Career</h5>
            <h1 class="section-title fade-in">We are Hiring!</h1>
            <p>
            Join our team and help shape the future with your skills and passion.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Service Section -->

  <section class="career-area">
    <div class="custom-container">
      <div class="d-flex justify-content-between align-items-center mb-5">
        <h1 class="section-title">RPA Developer</h1>
        <a href="#career-form" class="">
        <button id="#" class="theme-btn" style="background-color:#fff; color: #000;">Apply Now</button>
        </a>
        
      </div>
      <div class="career-body d-flex g-2 p-0" style="background-color: #fff;">
        <div class="career-lists ps-3 pe-5">
      <div class="left">
            <h2>Job Overview</h2>
            <p style="color: #141414">
              Seeking an RPA Developer to design, develop, and implement automation solutions using RPA technologies. Must have a strong background in software development and process analysis, with experience in tools like UiPath, Blue Prism, or Automation Anywhere.
            </p>
            <br />
            <h2>Responsibilities</h2>
            <br />
            <ul style="list-style-type: disc">
              <li>
                Design, develop, and deploy RPA solutions. 
              </li>
              <li>
              Collaborate with business analysts to understand process requirements. 
              </li>
              <li>
              Develop and maintain RPA workflows using RPA tools. 
              </li>
              <li>
              Perform unit testing, integration testing, and UAT. 
              </li>
              <li>
              Monitor and maintain RPA solutions for performance and reliability. 
              </li>
              <li>
              Provide technical support for RPA-related issues. 
              </li>
              <li>
              Document RPA solutions and create user guides. 
              </li>
              <li>
              Stay current with RPA trends and best practices. 
              </li>
              <li>
              Train and mentor junior developers. 
              </li>
            </ul>
            <br />
            <h2>Qualifications</h2>
            <br />
            <ul style="list-style-type: disc">
              <li>
              Bachelor’s degree in Computer Science, IT, or related field. 
              </li>
              <li>
              Experience as an RPA Developer or similar role. 
              </li>
              <li>
              Proficiency in RPA tools like UiPath, Blue Prism, or Automation Anywhere. 
              </li>
              <li>Programming skills in C#, Python, or Java. </li>
              <li>Experience with process analysis and optimization. </li>
              <li>
              Knowledge of database management and SQL. 
              </li>
              <li>
              Strong problem-solving skills and attention to detail.  
              </li>
              <li>
              Excellent communication and collaboration skills. 
              </li>
            </ul>
            <br />
            <h2>Preferred Qualifications</h2>
            <br />
            <ul style="list-style-type: disc">
              <li>
              RPA certification (e.g., UiPath Certified RPA Developer). 
              </li>
              <li>
              Experience with AI and machine learning. 
              </li>
              <li>
              Familiarity with Agile and Scrum methodologies. 
              </li>
            </ul>
            <br />
            <h2>Benefits</h2>
            <br />
            <ul style="list-style-type: disc">
              <li>
                Professional development opportunities.  
              </li>
              <li>
                Flexible working hours . 
              </li>
              <li>
                Collaborative and inclusive work environment. 
              </li>
            </ul>
          </div>
        </div>
        <div class="career-left border-0">
        <ul class="mt-5">
                  <li>
                    <div class="how-we-do-card">
                      <div class="how-we-do-icon">
                        <div class="">
                          <img src="../assets/imgs/location.svg" alt="" class="">
                        </div>
                      </div>
                      <div class="how-we-do-content mt-4">
                        <h4>Location</h4>
                        <p class="content border-0">Chennai</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="how-we-do-card">
                      <div class="how-we-do-icon">
                      <div class="">
                          <img src="../assets/imgs/experience.svg" alt="" class="">
                        </div>
                      </div>
                      <div class="how-we-do-content mt-4">
                        <h4>Experience</h4>
                        <p class="content border-0">2-4 yrs</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="how-we-do-card">
                      <div class="how-we-do-icon">
                      <div class="">
                          <img src="../assets/imgs/jobtitle.svg" alt="" class="">
                        </div>
                      </div>
                      <div class="how-we-do-content mt-4">
                        <h4>Job Type</h4>
                        <p class="content border-0">Full Time</p>
                      </div>
                    </div>
                  </li>
                </ul>
        </div>
      </div>
    </div>
  </section>
  <section class="contact-area" id="career-form" >
    <div class="custom-container">
      <div class="custom-row">
        <div class="contact-form-wrap">
          <div class="contact-form-body">
            <h5 class="section-subtitle">Contact</h5>
            <h1 class="fw-bold mb-2">Join Our Team</h1>
            <p>
            Shape Your Future with Us <br>
              <!-- <a class="section-subtitle" href="mailto:support@toolfe.com">support@toolfe.com</a> -->
            </p>
            <form id="careerForm" action="career-form.php" method="POST" class="contact-form" enctype="multipart/form-data">
    <input type="hidden" name="role" value="RPA"/>
    <div class="input-row field">
        <div class="input-row">
            <div class="input-group">
                <label>Full Name</label>
                <input type="text" name="FullName" placeholder="Enter Your name"/>
                <div class="error" id="nameError"></div>
            </div>
        </div>
    </div>
    <div class="input-row field">
        <div class="input-group">
            <label>Email</label>
            <input type="text" name="Email" placeholder="Enter Your Email"/>
            <div class="error" id="emailError"></div>
        </div>
        <div class="input-group field">
            <label>Phone</label>
            <input type="text" name="Phone" placeholder="Eg: +1 12123232"/>
            <div class="error" id="phoneError"></div>
        </div>
    </div>
    <div class="input-row field">
        <div class="input-group">
            <label>Resume/CV</label>
            <input type="file" name="resume" accept=".pdf,.doc,.docx"/>
            <div class="error" id="resumeError"></div>
        </div>
    </div>
    <div class="input-row field">
        <div class="input-group">
            <label>Message</label>
            <textarea name="Message" placeholder="Leave us a message...."></textarea>
        </div>
    </div>
    <div class="input-row field">
        <div class="input-group input-checkbox">
            <input type="checkbox" name="AgreeToTerms" value="yes"/>
            <label>You agree to our
                <a href="../trust-center/terms-and-conditions.php" target="_blank">terms and conditions.</a>
            </label>
            <div class="error" id="termsError"></div>
        </div>
    </div>
    <div class="input-row field is-grouped">
        <div class="input-group control">
            <button type="submit" class="theme-btn">Submit</button>
        </div>
    </div>
</form>

<div id="alert-message" style="
    display: none;
    margin: 20px;
    font-weight: bold;
    color: #f87708;
    padding: 8px;
    background-color: beige;
    border-radius: 4px;
    border-color: aquamarine;
"></div>

          </div>
        </div>

        <div class="contact-experience">
          <ul>
            <li>
              <h1>Innovative Atmosphere</h1>
              <p class="contact-text" >Learning programs fuel growth.</p>
            </li>

            <li>
              <h1>Collaborative Culture</h1>
              <p class="contact-text" >Projects delivered ahead thanks to teamwork</p>
            </li>

            <li>
              <h1>Diverse Inclusion</h1>
              <p class="contact-text" >Embracing diversity to drive team unity.</p>
            </li>


          </ul>
        </div>
        <div class="contact-infos">
          <div class="contact-infos-inner">
            <div class="contact-info mb-0 border-0">
              <img src="../assets/imgs/contact_us/location.svg" alt="Map" />
              <h3>Contact Info</h3>
            </div>
            <div class="contact-office-info contact-info mb-0 border-0">
              <h5 class="contact-text text-uppercase">INDIA</h5>
              <p>12, HP Complex, Habibullah Road, T-Nagar, Chennai-600017, India.<br><a href="tel:+91 8217 460 923">+91 8217 460 923 </a></p><br>
              <h5 class="contact-text text-uppercase">United States</h5>
              <p>5665 W. Wilshire Blvd, Los Angeles, CA 90036<br><a href="tel:(213) 340 1515">+1 (213) 340 1515</a></p>
            </div>

            <ul class="contact-social-links">
              <li>
                <a href="mailto:support@toolfe.com">
                  <i class="iconoir-mail"></i>Email
                </a>
              </li>
              <li>
                <a href="https://in.linkedin.com/company/toolfe">
                  <i class="iconoir-linkedin"></i>LinkedIn
                </a>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include '../includes/foot.php';  ?>
</main>
<?php include './validate.php'?>
<?php
include '../includes/footer.php'
?>