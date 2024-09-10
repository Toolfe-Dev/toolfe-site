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

// Query to fetch data from the `careerform` table
$sql = "SELECT `id`, `role`, `fullName`, `email`, `phone`, `resume`, `message`, `agreeToTerms`, `submittedAt` FROM `careerform` ORDER BY id DESC";
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
                  <h4 class="card-title">Job Applications</h4>
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
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Message</th>
                            <th>Role</th>
                            <th>Resume</th>
                            <th>Created At</th>
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
                            <td><?php echo  $counter  ?></td>
                            <td><?php echo  $row["fullName"]  ?></td>
                            <td><?php echo  $row["email"]  ?></td>
                            <td><?php echo  $row["phone"]  ?></td>
                            <td title="<?php echo  $row["message"]  ?>" class="" style="max-width:300px; overflow: hidden;"><?php echo  $row["message"]  ?></td>
                            <td><?php echo  $row["role"]  ?></td>
                            <td><a href="/uploads/<?php echo  $row["resume"]  ?>" target="_blank" ><?php echo  $row["resume"]  ?></a></td>
                            <td><?php echo  $row["submittedAt"]  ?></td>
                            <td>
                                 <form method="POST" action="delete-data.php" onsubmit="return confirm('Are you sure you want to delete this entry?');">
                                    <input type="hidden" name="table" value="careerform"> <!-- Specify the table name -->
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
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Message</th>
                            <th>Role</th>
                            <th>Resume</th>
                            <th>Created At</th>
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