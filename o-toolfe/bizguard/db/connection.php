<?php

$servername = "srv1001.hstgr.io";
$username = "u840048117_bizg";
$password = "Toolfe10!";
$database = "u840048117_bizg";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
