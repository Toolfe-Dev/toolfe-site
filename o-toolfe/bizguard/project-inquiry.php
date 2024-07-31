<?php
require './db/connection.php';
include ('./includes/header.php');

$services = [
    "UX/UI Design" => [
        "Crafting intuitive and engaging interfaces",
        "User research and persona development",
        "Wireframing and prototyping",
        "Usability testing"
    ],
    "Web Development" => [
        "Custom website design and development",
        "Responsive and mobile-first design",
        "E-commerce solutions",
        "CMS integration (WordPress, Joomla, etc.)"
    ],
    "App Development" => [
        "Native and cross-platform mobile apps",
        "Progressive Web Apps (PWA)",
        "App store optimization and deployment",
        "Maintenance and support"
    ],
    "Process Automation" => [
        "Workflow automation",
        "Robotic Process Automation (RPA)",
        "Custom script and tool development",
        "Integration with existing systems"
    ],
    "AI / ML Services" => [
        "Machine learning model development",
        "Natural language processing (NLP)",
        "Predictive analytics",
        "AI-driven insights and recommendations"
    ],
    "Data Analytics" => [
        "Data warehousing and management",
        "Business intelligence solutions",
        "Data visualization and dashboarding",
        "Advanced analytics and reporting"
    ],
    "Web App/Software Development" => [
        "Custom software solutions",
        "SaaS product development",
        "API development and integration",
        "Cloud-based applications"
    ],
    "Market Research" => [
        "Market analysis and segmentation",
        "Competitor analysis",
        "Consumer behavior studies",
        "Custom research reports"
    ],
    "Cloud & On-Premises Solutions" => [
        "Cloud migration and management",
        "Hybrid cloud strategies",
        "On-premises infrastructure setup and support",
        "Security and compliance"
    ]
];

?>

<!-- Page Sidebar Ends-->
<div class="page-body">
  <div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-6">
          <h3>Project Inquiry</h3>
        </div>
        <div class="col-6">
          <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">                                       
                        <svg class="stroke-icon">
                          <use href="assets/svg/icon-sprite.svg#stroke-home"></use>
                        </svg></a>
                      </li>
            <li class="breadcrumb-item active">Project Inquiry</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <div class="row project-cards">
      <div class="col-md-12 project-list">
        <div class="card">
          <div class="row">
            <div class="col-md-6">
              
            </div>
            <div class="col-md-6">
              <div class="form-group mb-0 me-0"></div><a class="btn btn-primary" href="project-request.php"> <i
                  data-feather="plus-square"> </i>Initiate Project</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-12">
        <div class="card">
          <div class="card-body">
            <div class="tab-content" id="top-tabContent">

                <div class="heading pb-5">
                    <h2 class="pb-3">Welcome to Bizguard Services!</h2>
                    <p class="">We specialize in delivering cutting-edge IT solutions to meet your business needs. Whether you’re a start-up looking to establish a strong online presence, an enterprise seeking to streamline operations, or an organization aiming to leverage the power of data and artificial intelligence, we have the expertise to bring your vision to life. Explore our range of services and reach out to discuss how we can collaborate on your next project.</p>
                </div>

                <div class="row">
            <?php foreach($services as $service => $details): ?>
                <div class="col-xxl-4 col-md-6 mb-4">
                    <div class="project-box p-lg-5 p-md-3 p-2">
                        <h5 class=" pb-3" style="color:#F27B01;"><?php echo strtoupper($service); ?></h5>
                        <ul class="ms-4" style="list-style-type: disc;">
                            <?php foreach($details as $detail): ?>
                                <li><?php echo $detail; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid Ends-->
</div>
<!-- footer start-->

<?php
include ('./includes/footer.php');
?>
