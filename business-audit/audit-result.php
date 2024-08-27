<?php
$title='Business Audit';
include '../includes/header.php';
session_start();

 if($_SESSION['total']) {
    // Retrieve the total value from the query parameters
    $total = $_SESSION['total'];

} else {
  $total = 23;
    echo "<p>No total value received.</p>". $_SESSION['total'];;
}
?>

<!-- Main -->
<main class="main-page service-details-page portfolio-details-page">

    <section class="hero-section-wrap hero-home2" id="contact-us">

<div class="custom-container">

    <div class="hero-contact-form-wrap">
            <!-- after the 5th step hide this div -->
             <!-- dont submit the form here  -->
            <!-- after the 5th step display this div -->
            <div class="hero-contact-form-inner-wrap" >
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
    </div>
</div>
</section>


    <!-- Footer -->

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
          value: <?php echo $total; ?>
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