<?php  
 

session_start();

 // Check if the admin is logged in
 if (!isset($_SESSION['admin_id'])) {
     // If the session variable 'admin_id' is not set, redirect to login.php
     header("Location: auth/login.php");
     exit();
 }
 
 // Include the database connection file
 include '../../php/db.php';
 
 // Query to fetch data from the `contact_form` table
 $sql = "SELECT `id`, `full_name`, `phone`, `email`, `company_name`, `message`, `agree_to_terms`, `created_at` FROM `contact_form`";
 $result = $conn->query($sql);
 
 // Close the database connection
 $conn->close();
include '../includes/header.php';
?>
<!-- Nav Header Component End -->
        <!--Nav End-->
      
<div class="conatiner-fluid content-inner mt-n5 py-0">
<div class="row">

   <div class="col-md-12 col-lg-12">
      <div class="row">

         <div class="col-md-12 col-xl-6">
            <div class="card" data-aos="fade-up" data-aos-delay="900">
               <div class="flex-wrap card-header d-flex justify-content-between">
                  <div class="header-title">
                     <h4 class="card-title">Earnings</h4>            
                  </div>   
                  <div class="dropdown">
                     <a href="#" class="text-gray dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        This Week
                     </a>
                     <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">This Week</a></li>
                        <li><a class="dropdown-item" href="#">This Month</a></li>
                        <li><a class="dropdown-item" href="#">This Year</a></li>
                     </ul>
                  </div>
               </div>
               <div class="card-body">
                  <div class="flex-wrap d-flex align-items-center justify-content-between">
                     <div id="myChart" class="col-md-8 col-lg-8 myChart"></div>
                     <div class="d-grid gap col-md-4 col-lg-4">
                        <div class="d-flex align-items-start">
                           <svg class="mt-2 icon-14" xmlns="http://www.w3.org/2000/svg" width="14" viewBox="0 0 24 24" fill="#3a57e8">
                              <g>
                                 <circle cx="12" cy="12" r="8" fill="#3a57e8"></circle>
                              </g>
                           </svg>
                           <div class="ms-3">
                              <span class="text-gray">Fashion</span>
                              <h6>251K</h6>
                           </div>
                        </div>
                        <div class="d-flex align-items-start">
                           <svg class="mt-2 icon-14" xmlns="http://www.w3.org/2000/svg" width="14" viewBox="0 0 24 24" fill="#4bc7d2">
                              <g>
                                 <circle cx="12" cy="12" r="8" fill="#4bc7d2"></circle>
                              </g>
                           </svg>
                           <div class="ms-3">
                              <span class="text-gray">Accessories</span>
                              <h6>176K</h6>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-12 col-xl-6">
            <div class="card" data-aos="fade-up" data-aos-delay="1000">
               <div class="flex-wrap card-header d-flex justify-content-between">
                  <div class="header-title">
                     <h4 class="card-title">Conversions</h4>            
                  </div>
                  <div class="dropdown">
                     <a href="#" class="text-gray dropdown-toggle" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                        This Week
                     </a>
                     <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton3">
                        <li><a class="dropdown-item" href="#">This Week</a></li>
                        <li><a class="dropdown-item" href="#">This Month</a></li>
                        <li><a class="dropdown-item" href="#">This Year</a></li>
                     </ul>
                  </div>
               </div>
               <div class="card-body">
                  <div id="d-activity" class="d-activity"></div>
               </div>
            </div>
         </div>
         <div class="col-md-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Contact Details</h4>
               </div>
            </div>
            <div class="card-body">
               <div class="table-responsive">
                  <table id="datatable" class="table table-striped" data-toggle="data-table">

                        <thead>
                           <tr>
                              <th>ID</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Phone</th>
                              <th>Company</th>
                              <th>Message</th>
                              <th>Agree to Terms</th>
                              <th>Created At</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                           if ($result->num_rows > 0) {
                              // Output data of each row
                              while($row = $result->fetch_assoc()) {
                           ?>
                           <tr>
                              <td><?php echo $row["id"]; ?></td>
                              <td><?php echo $row["full_name"]; ?></td>
                              <td><?php echo $row["email"]; ?></td>
                              <td><?php echo $row["phone"]; ?></td>
                              <td><?php echo $row["company_name"]; ?></td>
                              <td title="<?php echo $row["message"]; ?>" class="" style="max-width:300px; overflow: hidden;"><?php echo $row["message"]; ?></td>
                              <td><?php echo $row["agree_to_terms"] ? 'Yes' : 'No'; ?></td>
                              <td><?php echo $row["created_at"]; ?></td>
                           </tr>
                           <?php
                              }
                           } else {
                              echo "<tr><td colspan='8'>No results found</td></tr>";
                           }
                           ?>
                        </tbody>
                     <tfoot>
                           <tr>
                              <th>ID</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Phone</th>
                              <th>Company</th>
                              <th>Message</th>
                              <th>Agree to Terms</th>
                              <th>Created At</th>
                           </tr>
                     </tfoot>
                  </table>
               </div>
            </div>
         </div>
         </div>  
      </div>
   </div> 
</div>
</div>
      <!-- Footer Section Start -->
      
      <!-- Footer Section End -->   

<?php include_once "../includes/footer.php"; ?>