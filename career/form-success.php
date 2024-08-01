<?php
include '../includes/header.php';
$url = "./";

header("Refresh:5; url=$url");
?>

<!-- Main -->
<main class="main-page service-details-page portfolio-details-page" style=" width: 100vw; overflow: hidden; position: fixed; max-height: 100%;">
  <!-- Portfolio Details Content -->

  <section class="hero-section-wrap hero-home2">
    <div class="hero-section-content-wrap">
      <img class="bg-shape slide-left" src="../assets/imgs/bg-shape-6.svg" alt="Shape" />
      <img class="bg-shape2 slide-right" src="../assets/imgs/bg-shape-5.svg" alt="Shape" />
      <div class="custom-container">
        <div class="hero-section-content text-center">
          <!-- <h5 class="section-subtitle">About Us</h5> -->
          <!-- <img class="../assets/email.svg" alt="img" />      -->
          <img src="../assets/imgs/email.svg" alt="img" class=""/>
          <br/>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
          <h2 class="section-title fade-in mt-4">
            Thank You For Your Applicataion
            
          </h2>
          <br/>
          <p>Your application is submitted. We appreciate your interest and will contact you if qualifications match our needs.</p>
          <a href="./" class="">
            <button class="theme-btn" style="width: 200px; text-align: center; justify-content: center; " >Back</button>
          </a>
        </div>
      </div>
    </div>
  </section>

</main>
<?php
include '../includes/footer.php'
?>