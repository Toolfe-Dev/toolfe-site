<?php
include '../includes/header.php'
?>

<!-- Main -->
<main class="main-page service-details-page portfolio-details-page">
  <?php include '../includes/head.php' ?>
  <!-- Portfolio Details Content -->

  <section class="hero-service-wrap hero-section-wrap hero-career-wrap hero-our-field-wrap">
    <div class="hero-section-content-wrap">
      <img src="../assets/imgs/bg-shape-1.svg" alt="bg-shape-1" class="animation-slide-left bg-shape" />
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
      <h1 class="section-title">RPA Developer Internship - 6 Months </h1>
      <a href="#career-form" class="">
        <button id="#" class="theme-btn book-free-con">Apply Now</button>
        </a>
      </div>
      <div class="career-body d-flex g-2 p-0 career-body-bg">
        <div class="career-lists ps-3 pe-5">
        <div class="left">
            <br />
            <h2>Responsibilities</h2>
            <br />
            <ul class="list-style-res">
              <li>
              Assist in the development and deployment of Robotic Process Automation (RPA) solutions to streamline sales processes. 
              </li>
              <li>
              Work closely with the sales team to identify repetitive tasks that can be automated to enhance efficiency and productivity.  
              </li>
              <li>
              Design, develop, and test automation workflows using RPA tools (e.g., UiPath, Automation Anywhere, Blue Prism). 
              </li>
              <li>
              Collaborate with the sales and IT teams to integrate RPA solutions with existing sales tools and systems. 
              </li>
              <li>
              Document and maintain technical specifications for RPA solutions. 
              </li>
              <li>
              Monitor and maintain deployed RPA bots to ensure their smooth operation and troubleshoot issues as they arise.  
              <li>
              Assist in training the sales team on how to use the RPA tools and solutions effectively. 
              </li>
              <li>
              Stay updated with the latest trends and best practices in RPA and automation technologies. 
              </li>
            </ul>
            <br />
            <h2> Requirements:</h2>
            <br />
            <ul class="list-style-res">
              <li>
              Currently pursuing or recently completed a degree in Computer Science, IT, Engineering, or a related field. 
              <li>
              Basic understanding of RPA tools like UiPath, Automation Anywhere, or Blue Prism. 
              </li>
              <li>
              Familiarity with programming languages such as Python, Java, or C#.  
              </li>
              <li>Strong analytical and problem-solving skills. </li>
              <li>Ability to work collaboratively with cross-functional teams. </li>
              <li>
              Strong communication skills and attention to detail.  
              </li>
              <li>
              Eagerness to learn and adapt to new technologies and processes.  
              </li>
            </ul>
            <br />
            <h2>Benefits</h2>
            <br />
            <ul class="list-style-res">
              <li>
              Hands-on experience with cutting-edge RPA technologies. 
              </li>
              <li>
              Mentorship from experienced RPA developers and sales professionals.  
              </li>
              <li>
              Opportunity to work on real-world projects and make a tangible impact on the sales team's efficiency. 
              </li>
              <li>
              Potential for a full-time position upon successful completion of the internship 
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
                          <img src="../assets/imgs/location.svg" alt="location" class="">
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
                          <img src="../assets/imgs/experience.svg" alt="experience" class="">
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
                          <img src="../assets/imgs/jobtitle.svg" alt="jobtitle" class="">
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
  <section class="contact-area" id="career-form">
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
    <input type="hidden" name="role" value="MERN"/>
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

<div id="alert-message alert-message-style"></div>

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
              <img src="../assets/imgs/contact_us/location.svg" alt="location" />
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