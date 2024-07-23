    <?php
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
    ?>