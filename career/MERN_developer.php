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
              Enhancing Customer Experience and Operational Efficiency through
              Cutting-Edge Technology
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
      <h1 class="section-title">MERN Stack Developer - Web Development </h1>
      <a href="#career-form" class="">
        <button id="#" class="theme-btn" style="background-color:#fff; color: #000;">Apply Now</button>
        </a>
      </div>
      <div class="career-body d-flex g-2 p-0" style="background-color: #fff;">
        <div class="career-lists ps-3 pe-5">
        <div class="left">
            <h2>Job Overview</h2>
            <p style="color: #141414">
            We are looking for a skilled MERN Stack Developer to join our web development team. The ideal candidate will have extensive experience in building dynamic and responsive web applications using MongoDB, Express.js, React.js, and Node.js. This role involves working closely with designers and back-end developers to deliver high-quality web solutions. 
            </p>
            <br />
            <h2>Responsibilities</h2>
            <br />
            <ul style="list-style-type: disc">
              <li>
              Develop and maintain web applications using the MERN stack (MongoDB, Express.js, React.js, Node.js). 
              </li>
              <li>
              Collaborate with UX/UI designers to implement design into the code. 
              </li>
              <li>
              Write clean, scalable, and well-documented code. 
              </li>
              <li>
              Perform unit testing and debugging to ensure application quality and performance. 
              </li>
              <li>
              Integrate third-party APIs and services as needed. 
              </li>
              <li>
              Participate in code reviews and contribute to continuous improvement of development practices. 
              <li>
              Work closely with back-end developers to integrate front-end components with the server-side logic. 
              </li>
              <li>
              Ensure the responsiveness and cross-browser compatibility of web applications. 
              </li>
              <li>
              Stay updated with the latest web development trends and technologies. 
              </li>
            </ul>
            <br />
            <h2>Qualifications</h2>
            <br />
            <ul style="list-style-type: disc">
              <li>
              Bachelor’s degree in Computer Science, Information Technology, or a related field. 
              <li>
              Proven experience as a MERN Stack Developer or similar role. 
              </li>
              <li>
              Strong proficiency in JavaScript, including ES6+ syntax. 
              </li>
              <li>In-depth knowledge of MongoDB, Express.js, React.js, and Node.js. </li>
              <li>Experience with front-end technologies such as HTML5, CSS3, and JavaScript frameworks. </li>
              <li>
              Familiarity with RESTful APIs and web services. 
              </li>
              <li>
              Knowledge of version control systems like Git. 
              </li>
              <li>
              Strong problem-solving skills and attention to detail. 
              </li>
              <li>
              Excellent communication and collaboration skills. 
              </li>
              <li>
              Ability to work independently and as part of a team in a fast-paced environment.  
              </li>
            </ul>
            <br />
            <h2>Preferred Qualifications</h2>
            <br />
            <ul style="list-style-type: disc">
              <li>
              Experience with TypeScript. 
              </li>
              <li>
              Knowledge of state management libraries like Redux or MobX. 
              </li>
              <li>
              Familiarity with CI/CD pipelines and DevOps practices. 
              </li>
              <li>
              Experience with testing frameworks like Jest or Mocha.  
              </li>
              <li>
              Understanding of agile methodologies. 
              </li>
            </ul>
            <br />
            <h2>Benefits</h2>
            <br />
            <ul style="list-style-type: disc">
              <li>
              Opportunities for professional development and career advancement. 
              </li>
              <li>
              Flexible working hours and remote work options. 
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
                                <input type="file" name="resume"/>
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
                                <input type="checkbox" name="Agree To Terms" value="yes"/>
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
        color: linear-gradient(93deg, #f87708 4.1%, #fb4a55 59.93%, #e620af 98.17%);
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

<?php
include '../includes/footer.php'
?>