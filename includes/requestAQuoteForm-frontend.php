
<div class="hero-contact-form">
        <form id="service-form" method="POST" class="contact-form d-flex">
            <div class="input-main-row">
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
            </div>
            <div class="input-main-row">
                <div class="input-row field">
                    <div class="input-group">
                        <label for="message">Message</label>
                        <textarea name="message" placeholder="Leave us a message...." ></textarea>
                        <div class="error" id="error-message"></div>
                    </div>
                </div>
                <div class="input-row field">
                    <div class="input-group">
                        <label for="budget">Budget (Optional)</label>
                        <input class="p-0" id="pi_input" type="range" min="0" max="500000" step="1"  name="budget" />
                        <div class="budget-values d-flex align-items-center justify-content-between w-full">
                            <div class="left-value">$<span id="budget-value">200</span></div>
                            <div class="right-value">$500k +</div>
                        </div>
                    </div>
                </div>
                <div class="input-row field"> 
                    <div class="input-group input-checkbox">
                        <input type="checkbox" id="privacy_policy_accept" name="privacy_policy_accept" value="1" >
                        <label for="privacy_policy_accept">Click the box and agree to our <a href="../trust-center/terms-and-conditions.php" target="_blank">terms and conditions.</a></label>
                        <div class="error" id="error-privacy"></div>
                    </div>
                </div>
                <div class="input-row field is-grouped">
                    <div class="input-group control">
                        <button class="theme-btn" id="submit-button" type="submit">Submit</button>
                    </div>
                </div>
                <p id="alert-message"></p>
            </div>
        </form>

        <div id="alert-message alert-message-style"></div>
    </div>