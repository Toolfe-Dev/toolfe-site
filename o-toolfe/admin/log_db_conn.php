      <?php

// $conn = mysqli_connect("localhost", "u278366876_ZotorkAdmin", "^KzJS^[q;Gv6", "u278366876_zotorkdb");

  $servername='localhost';
 $username='u840048117_toolfe_db';
    $password='Tool@min10!';
    $dbname = "u840048117_toolfe_db";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
        else{
            // echo "Connected";
        }
            date_default_timezone_set("Asia/Kolkata");
            // echo date_default_timezone_get();
            // echo date("d-m-Y h:i:a");
    ?>
    
 