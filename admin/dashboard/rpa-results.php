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
$sql = "SELECT * FROM `rpa_cals_submissions` ORDER BY id DESC";
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
                  <h4 class="card-title">RPA Results</h4>
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
                           <th>Process Name</th>
                           <th>Current Annual Cost</th>
                           <th>Estimated Annual Cost After Automation</th>
                           <th>Potential Cost Savings</th>
                           <th>FTE Savings</th>
                           <th>Hours Saved</th>
                           <th>ROI</th>
                           <th>% Reduction in Cost</th>
                           <th>Payback Period (Days)</th>
                           <th>Full Name</th>
                           <th>Email</th>
                           <th>Phone</th>
                           <th>Company</th>
                           <th>Designation</th>
                           <th>Agree to Terms</th>
                           <th>Submit Type</th>
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
                           <td><?php echo $counter; ?></td> <!-- Counter as ID -->
                           <td><?php echo $row["processName"]; ?></td>
                           <td><?php echo $row["currentAnnualCost"]; ?></td>
                           <td><?php echo $row["estimatedAnnualCostAfterAutomation"]; ?></td>
                           <td><?php echo $row["potentialCostSavings"]; ?></td>
                           <td><?php echo $row["fteSavings"]; ?></td>
                           <td><?php echo $row["hoursSaved"]; ?></td>
                           <td><?php echo $row["roi"]; ?></td>
                           <td><?php echo $row["percentageReductionInCost"]; ?></td>
                           <td><?php echo $row["paybackPeriodDays"]; ?></td>
                           <td><?php echo $row["FullName"]; ?></td>
                           <td><?php echo $row["Email"]; ?></td>
                           <td><?php echo $row["Phone"]; ?></td>
                           <td><?php echo $row["Company"]; ?></td>
                           <td title="<?php echo $row["Message"]; ?>" style="max-width:300px; overflow:hidden; text-overflow:ellipsis; white-space:nowrap;">
                              <?php echo $row["Message"]; ?>
                           </td>
                           <td><?php echo $row["AgreeToTerms"] ? 'Yes' : 'No'; ?></td>
                           <td><?php echo $row["submit_type"]; ?></td>
                           <td><?php echo $row["submitted_at"]; ?></td>
                            <td>
                                 <form method="POST" action="delete-data.php" onsubmit="return confirm('Are you sure you want to delete this entry?');">
                                    <input type="hidden" name="table" value="rpa_cals_submissions"> <!-- Specify the table name -->
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
                           echo "<tr><td colspan='18'>No results found</td></tr>";
                        }
                     ?>
                     </tbody>
                     <tfoot>
                        <tr>
                           <th>ID</th>
                           <th>Process Name</th>
                           <th>Current Annual Cost</th>
                           <th>Estimated Annual Cost After Automation</th>
                           <th>Potential Cost Savings</th>
                           <th>FTE Savings</th>
                           <th>Hours Saved</th>
                           <th>ROI</th>
                           <th>% Reduction in Cost</th>
                           <th>Payback Period (Days)</th>
                           <th>Full Name</th>
                           <th>Email</th>
                           <th>Phone</th>
                           <th>Company</th>
                           <th>Designation</th>
                           <th>Agree to Terms</th>
                           <th>Submit Type</th>
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