<?php
require './db/connection.php';
include ('./includes/header.php');

?>

<div class="page-body">
  <div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-6">
          <h3>
          Upgrade Plan</h3>
        </div>
        <div class="col-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">
                <svg class="stroke-icon">
                  <use href="files-front/svg/icon-sprite.svg#stroke-home"></use>
                </svg></a></li>
            <li class="breadcrumb-item active">plans</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid starts-->
  <div class="container-fluid">
            <stripe-pricing-table 
                pricing-table-id="prctbl_1OWegSSJP6fMVZP7QfFcliT3"
                publishable-key="pk_live_51NdBPGSJP6fMVZP7Q5jtiXM6spgFtTt8OX7jUmEKLaVMS6p18r8qC4bosLRlFak5gEMhn1mZWIHz82TWaTNFFnaa00neG9yf4V">
            </stripe-pricing-table>
  </div>
  <!-- Container-fluid Ends-->
</div>



<?php include ('./includes/footer.php'); ?>