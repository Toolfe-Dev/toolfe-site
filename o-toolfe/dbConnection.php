<?php
$host = "localhost";
$username = "u840048117_toolfe_db";
$password = "Tool@min10!";
$dbname = "u840048117_toolfe_db";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
