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
            </p>
            <h5 class="section-subtitle">Career</h5>
            <h1 class="section-title fade-in">We are Hiring!</h1>
            <p>
            Join our team and help shape the future with your skills and passion.
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Service Section -->

  <section class="career-area">
    <div class="custom-container">
      <div class="d-flex justify-content-between align-items-center mb-5">
        <h1 class="section-title pe-0">Senior Social Media Manager </h1>
        <h2>- B2B Lead Conversion</h2>
        <a href="#career-form" class="">
        <button id="#" class="theme-btn form-style ">Apply Now</button>
        </a>
        
      </div>
      <div class="career-body d-flex g-2 p-0 career-body-bg">
        <div class="career-lists ps-3 pe-5">
      <div class="left">
            <h2>Responsibilities</h2>
            <br />
            <ul class="list-style-res">
              <li>
              Develop and execute a strategic social media plan tailored to B2B audiences to drive brand awareness and lead generation.
              </li>
              <li>
              Create and manage high-impact content across social media platforms (e.g., LinkedIn, Twitter, Facebook) aimed at engaging B2B clients. 
              </li>
              <li>
              Use social media channels to generate and nurture leads through targeted content, messaging, and campaigns.
              </li>
              <li>
              Collaborate with the sales team to design and implement social media campaigns that align with sales goals and target specific business audiences. 
              </li>
              <li>
              Monitor and analyze social media performance metrics to optimize lead generation strategies and improve lead conversion rates.
              </li>
              <li>
              Engage with industry influencers, partners, and potential clients to build relationships and expand the company's reach.
              </li>
              <li>
              Implement and manage paid social media campaigns to drive lead generation and conversion.
              </li>
              <li>
              Stay informed about the latest trends and tools in B2B social media marketing to continuously enhance strategies.
              </li>
            </ul>
            <br />
            <h2>Skills Required:</h2>
            <br />
            <ul class="list-style-res">
              <li>
              Deep understanding of B2B social media marketing and lead conversion strategies.  
              </li>
              <li>
              Experience with social media platforms relevant to B2B marketing (e.g., LinkedIn). 
              </li>
              <li>
              Strong analytical skills and experience with social media analytics tools.
              </li>
              <li> Proven ability to create compelling content that drives B2B engagement and conversions.</li>
              <li>Excellent communication, writing, and editing skills.</li>
              <li>
              Familiarity with CRM systems and lead tracking tools. 
              </li>
              <li>
              Strong project management skills and the ability to manage multiple campaigns simultaneously.
              </li>
            </ul>
            <br />
            <h2>Benefits</h2>
            <br />
            <ul class="list-style-res">
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
    <input type="hidden" name="role" value="Social Media"/>
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