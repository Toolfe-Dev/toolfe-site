<?php  
 

// Start the session
session_start();

// Check if the admin is logged in
if (!isset($_SESSION['admin_id'])) {
    // If the session variable 'admin_id' is not set, redirect to login.php
    header("Location: auth/login.php");
    exit();
}

// Include the database connection file
include '../../php/db.php';

// Query to fetch data from the `service_form_submissions` table
$sql = "SELECT * FROM `rpa_calculator_results` ORDER BY id DESC";
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

         <div class="col-md-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">RPA Response</h4>
               </div>
            </div>
            <?php if (isset($_GET['message'])) { ?>
                     <div class='alert m-5 alert-warning alert-dismissible fade show' role="alert">
                        <?php echo htmlspecialchars($_GET['message'])?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                     </div>
            <?php    } ?>
            <div class="card-body">
               <div class="table-responsive">
                  <table id="datatable" class="table table-striped" data-toggle="data-table">


                        <thead>
                           <tr>
                              <th>ID</th>
                              <th>Company</th>
                              <th>Industry</th>
                              <th>Process Name</th>
                              <th>Emp Count</th>
                              <th>Avg Processing Time (unit)</th>
                              <th>Annual volume</th>
                              <th>Percentage Automation</th>
                              <th>Average Fte Salary</th>
                              <th>Submission Date</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                        <?php
                              if ($result->num_rows > 0) {
                                 // Initialize a counter variable
                                 $counter = 1;

                                 // Output data of each row
                                 while($row = $result->fetch_assoc()) {
                           ?>
                                 <tr>
                                       <td><?php echo $counter; ?></td> <!-- Use the counter instead of the row ID -->
                                       <td><?php echo $row["company_name"]; ?></td>
                                       <td><?php echo $row["industry"]; ?></td>
                                       <td><?php echo $row["process_name"]; ?></td>
                                       <td><?php echo $row["employee_count"]; ?></td>
                                       <td><?php echo $row["average_processing_time"]; ?></td>
                                       <td><?php echo $row["annual_volume"]; ?></td>
                                       <td title="<?php echo $row["percentage_automation"]; ?>" class="" style="max-width:300px; overflow: hidden;"><?php echo $row["percentage_automation"]; ?></td>
                                       <td><?php echo $row["average_fte_salary"]; ?></td>
                                       <td><?php echo $row["submission_date"]; ?></td>
                                       <td>
                                             <form method="POST" action="delete-data.php" onsubmit="return confirm('Are you sure you want to delete this entry?');">
                                                <input type="hidden" name="table" value="rpa_calculator_results"> <!-- Specify the table name -->
                                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                             </form>
                                       </td>
                                 </tr>
                           <?php
                                       // Increment the counter after each row
                                       $counter++;
                                 }
                              } else {
                                 echo "<tr><td colspan='11'>No results found</td></tr>";
                              }
                           ?>

                        </tbody>
                     <tfoot>
                           <tr>
                              <th>ID</th>
                              <th>Company</th>
                              <th>Industry</th>
                              <th>Process Name</th>
                              <th>Emp Count</th>
                              <th>Avg Processing Time (unit)</th>
                              <th>Annual volume</th>
                              <th>Percentage Automation</th>
                              <th>Average Fte Salary</th>
                              <th>Submission Date</th>
                              <th>Action</th>
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