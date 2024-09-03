<?php
$title = 'Business Audit';
include '../includes/header.php';
session_start();

// Check if session values are set and retrieve them
if (isset($_SESSION['companyName'])) {
    $companyName = $_SESSION['companyName'];
    $processName = $_SESSION['processName'];
    $currentAnnualCost = $_SESSION['currentAnnualCost'];
    $estimatedAnnualCostAfterAutomation = $_SESSION['estimatedAnnualCostAfterAutomation'];
    $potentialCostSavings = $_SESSION['potentialCostSavings'];
    $fteSavings = $_SESSION['fteSavings'];
    $fteCostSavings = $_SESSION['fteCostSavings'];
    $hoursSaved = $_SESSION['hoursSaved'];
    $daysSaved = $_SESSION['daysSaved'];
    $roi = $_SESSION['roi'];
    $percentageReductionInCost = $_SESSION['percentageReductionInCost'];
    $paybackPeriodDays = $_SESSION['paybackPeriodDays'];
    $Currency = $_SESSION['Currency'];

} else {
    // If no session data is found, print a message
    echo "<p>No data available. Please complete the form first.</p>";
}
function currency_sym($code){
  $symbol = '$';
  if ($code == 'INR') {
    $symbol = '₹';
  }elseif($code == 'EUR'){
    $symbol = '€';
  }
  return $symbol;

};
?>


<!-- Main -->
<main class="main-page service-details-page portfolio-details-page">

    <section class="hero-section-wrap hero-home2 pb-0" style="background-color: #f6f6f6;"  id="contact-us">

<div class="custom-container">

    <div class="hero-contact-form-wrap">
            <div class="hero-contact-form-inner-wrap">
                <div class="hero-contact-form-header">
                  <center>
                    <h5 class="section-subtitle text-center">RPA CALCULATION</h5>
                  </center>
                    <h2 class="text-center">Business RPA Calculator</h2>
                </div>
            <!-- this is a first content to show initly -->
                <div class="hero-contact-form report">
                    <div class="contact-form d-flex">
                        <div class="input-main-row">
                            <h4 class="mb-4 company-res"><?php echo "Hey <span>{$companyName}</span> , you are planning to automate <span>{$processName}</span> \n" ;  ?></h4>
                            <div class="chart position-relative w-100" style="">
                                <div id="ch-main" class="w-100" style="height:400px;"></div>
                                
                                <div class="tot-exp" style="">
                                  <center><p class="">of your annual OPEX can be saved </p></center>
                                  <div class="box">Your annual savings : <span class="text-grad text-bold fw-bold "><span><?php echo currency_sym($Currency); ?></span> <?php echo number_format($potentialCostSavings, 0)  ?></span> </div>
                                </div>
                            </div>
                            <div class="stats">
                              <p class="">With Toolfe,</p>
                              <ul class="stats">
                                <li><p class="">By implementing Toolfe solutions, you can reduce your current expenses of <span class="text-grad text-bold fw-bold "><span><?php echo currency_sym($Currency); ?></span> <?php echo number_format($currentAnnualCost, 0)  ?></span>  to <span class="text-grad text-bold fw-bold "><span><?php echo currency_sym($Currency); ?></span> <?php echo number_format($estimatedAnnualCostAfterAutomation, 0)  ?></span> .</p></li>
                                <li><p class=""> You can save <span class="text-grad text-bold fw-bold "> <span><?php echo currency_sym($Currency); ?></span> <?php echo number_format($potentialCostSavings, 0)  ?></span> after implementing Process Automation.</p></li>
                                <li><p class=""> You can save <span class="text-grad text-bold fw-bold "> <?php echo number_format($fteSavings, 2) ; ?></span> FTEs which reduces your annual labor costs by <span class="text-grad text-bold fw-bold "><span><?php echo currency_sym($Currency); ?></span> <?php echo number_format($fteCostSavings, 0) ?></span>.</p></li>
                                <li><p class=""> Annually you will save<span class="text-grad text-bold fw-bold "> <?php echo number_format($hoursSaved, 0)  ?></span> hours or<span class="text-grad text-bold fw-bold "> <?php echo number_format($daysSaved, 0) ?></span> Days.</p></li>
                                <li><p class=""> You’ll see a <span class="text-grad text-bold fw-bold "><span><?php echo currency_sym($Currency); ?></span> <?php echo number_format($roi, 2)   ?></span> return on each <span><?php echo currency_sym($Currency); ?></span>1 spent on our automation, with benefits beginning in <span class="text-grad text-bold fw-bold "> <?php echo number_format($paybackPeriodDays, 0)  ?></span> days. </p></li>
                              </ul>
                              
                            </div>
                            <div class="stats-foot mt-5">
                              <p class="">Discover how Toolfe can rapidly elevate your score in a short period of time.</p>
                              <div class="input-row field">
                                  <button class="theme-btn rounded-2 w-fit " id="improveBtn" type="button">Improve your score</button>
                              </div>
                            </div>
                        </div>
                        <div class="input-main-row">
                            <!-- i have a form submission button here -->
                                <h3 class="mb-4"></h3>
                                <div class="report-card">
                                    <h4 class="">Unleash Automation’s Full Power</h4>
                                    <p class="">Unlock the full potential of automation with our expert audit. Get advanced, precise reports and tailored implementation strategies. </p>
                                    <div class="position-relative ">
                                        <div class="card-blur">
                                            <h4 class="">Revenue and Financial Health</h4>
                                            <p class="">Your score indicates there's room for improvement in your financial strategy. Consider implementing a more robust budgeting process and exploring ways to increase profitability.</p>
                                            <h4 class="">Revenue and Financial Health</h4>
                                            <p class="">Your score indicates there's room for improvement in your financial strategy. Consider implementing a more robust budgeting process and exploring ways to increase profitability.</p>
                                            <h4 class="d-md-block d-none">Revenue and Financial Health</h4>
                                            <p class="d-md-block d-none">Your score indicates there's room for improvement in your financial strategy. Consider implementing a more robust budgeting process and exploring ways to increase profitability.</p>
                                        </div>
                                        <div class="position-absolute full-report w-100 h-100">
                                            <button id="fullReportBtn" class="theme-btn rounded-2 mx-auto my-4" type="button">View Full Report</button>
                                            <p class=""><strong>Our deliverables </strong></p>
                                            <ul class="ps-3 mx-auto">
                                                <li class="">
                                                    <p class="">Advanced Cost Reduction Analysis</p>
                                                </li>
                                                <li class="">
                                                    <p class="">Automation Savings Breakdown</p>
                                                </li>
                                                <li class="">
                                                    <p class="">Time Reclamation Report</p>
                                                </li>
                                                <li class="">
                                                    <p class="">Toolfe Solutions & Benefits Report.</p>
                                                </li>
                                                <li class="">
                                                    <p class="">Expert Insights Compilation</p>
                                                </li>
                                            </ul>
                                            <p class=""><strong>And more ...</strong></p>
                                        </div>
                                    </div>

                                </div>
                        </div>
                    </div>
                </div>

                <div class="hero-contact-form contact-2">
                <section class="contact-area p-0">
                  <div class="">
                      <div class="custom-row">
                      <div class="contact-infos">
                              <div class="contact-infos-inner ">
                                  <ul class="contact-social-links mb-5">
                                      <li>
                                        <img src="../assets/imgs/contact_us/tick.svg" alt="tick" />
                                        <h6 class="mt-3 mb-3">Unlock Savings with Automation</h6>
                                        <p class="mb-3"> Cut Costs, Boost Efficiency, Maximize Returns.</p>
                                      </li>
                                      <li>
                                        <img src="../assets/imgs/contact_us/tick.svg" alt="tick" />
                                        <h6 class="mt-3 mb-3">See Your Investment’s True Value</h6>
                                        <p class="mb-3"> Track Gains, Measure Impact, and Optimize Returns.</p>
                                      </li>
                                      <li>
                                        <img src="../assets/imgs/contact_us/tick.svg" alt="tick" />
                                        <h6 class="mt-3 mb-3">Maximize Budget Efficiency</h6>
                                        <p class="mb-3"> Track Expenses, Uncover Savings, and Optimize Financial Impact.</p>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                          <div class="contact-form-wrap">
                              <div class="contact-form-body">
                                  <h5 class="section-subtitle">Audit report</h5>
                                  <h1 class="fw-bold mb-2"> Unlock an accurate audit report with our Expertise</h1>
                                  <p>
                                     Fill out the form now for the better insights <br>
                                      <!-- <a class="section-subtitle" href="mailto:support@toolfe.com">support@toolfe.com</a> -->
                                  </p>
                                  <form id="rpa-cals" method="POST" class="contact-form" action="./rpa-cals-submission.php" >
                                      <input type="hidden" name="processName" value="<?php echo $processName ?>" >
                                      <input type="hidden" name="currentAnnualCost" value="<?php echo $currentAnnualCost ?>" >
                                      <input type="hidden" name="estimatedAnnualCostAfterAutomation" value="<?php echo $estimatedAnnualCostAfterAutomation ?>" >
                                      <input type="hidden" name="potentialCostSavings" value="<?php echo $potentialCostSavings ?>" >
                                      <input type="hidden" name="fteSavings" value="<?php echo $fteSavings ?>" >
                                      <input type="hidden" name="hoursSaved" value="<?php echo $hoursSaved ?>" >
                                      <input type="hidden" name="roi" value="<?php echo $roi ?>" >
                                      <input type="hidden" name="percentageReductionInCost" value="<?php echo $percentageReductionInCost ?>" >
                                      <input type="hidden" name="paybackPeriodDays" value="<?php echo $paybackPeriodDays ?>" >
                                      <div class="input-row field">
                                        <div class="input-group">
                                          <label for="name">Full Name</label>
                                          <input type="text" id="name" name="FullName" placeholder="Enter Your name" />
                                          <div class="error" id="nameError"></div>
                                        </div>
                                      </div>
                                      <div class="input-row field">
                                        <div class="input-group">
                                          <label for="Phone">Phone</label>
                                          <input id="Phone" type="text" name="Phone" placeholder="Eg: +1 12123232" />
                                          <div class="error" id="phoneError"></div>
                                        </div>
                                        <div class="input-group">
                                          <label for="email">Email</label>
                                          <input id="email" type="text" name="Email" placeholder="Enter Your Email" />
                                          <div class="error" id="emailError"></div>
                                        </div>
                                      </div>
                                      <div class="input-row field">
                                        <div class="input-group">
                                          <label for="organization">Company Name</label>
                                          <input id="organization" value="<?php echo $companyName ?>" readonly type="text" name="Company" placeholder="Eg. Microsoft" />
                                          <div class="error" id="companyError"></div>
                                        </div>
                                      </div>
                                      <div class="input-row field">
                                        <div class="input-group">
                                          <label for="message">Designation</label>
                                          <input name="Message" id="message"  type="text"  placeholder="Enter your Designation" />
                                          <div class="error" id="messageError"></div>
                                        </div>
                                      </div>
                                      <div class="input-row field">
                                        <div class="input-group input-checkbox">
                                          <input type="checkbox" name="Agree To Terms" value="yes" id="privacy_policy_accept" />
                                          <label for="privacy_policy_accept">You agree to our
                                            <a href="../trust-center/terms-and-conditions.php" target="_blank">terms and conditions.</a>
                                          </label>
                                          <div class="error" id="termsError"></div>
                                        </div>
                                      </div>

                                      <div class="input-row field is-grouped">
                                        <div class="input-group control">
                                          <button id="submit-button" type="submit" class="theme-btn">Submit</button>
                                        </div>
                                      </div>
                                    </form>
                                  <div id="alert-message alert-message-style">
                                  </div>
                              </div>
                          </div>

                      </div>
                  </div>
              </section>
                </div>
                
                
            </div>
    </div>
</div>
</section>


    <!-- Footer -->

</main>

<?php
include '../includes/requestAQuoteForm.php'
?>
<script>
  // Wait for the document to be fully loaded
  document.addEventListener("DOMContentLoaded", function () {
    // Get the elements
    const improveScoreButton = document.getElementById("improveBtn");
    const viewFullReportButton = document.getElementById("fullReportBtn");
    const contact2Section = document.querySelector(".hero-contact-form.contact-2");
    const reportSection = document.querySelector(".hero-contact-form.report");

    // Hide the contact-2 section initially
    contact2Section.style.display = "none";

    // Function to show the contact-2 section and hide the report section
    function showContact2Section() {
      console.log("cliecked")
      contact2Section.style.display = "block";  // Show contact-2 section
      reportSection.style.display = "none";     // Hide the initial report section
    }

    // Add event listeners to buttons
    improveScoreButton.addEventListener("click", showContact2Section);
    viewFullReportButton.addEventListener("click", showContact2Section);
  });
</script>

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
          value: <?php echo $percentageReductionInCost; ?>,
          name: 'Grade Rating'
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