<?php
$servername = "srv1508.hstgr.io";
$username = "u840048117_toolfe_new";
$password = "Toolfe10!";
$dbname = "u840048117_toolfe_new";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set the character set to UTF-8 (optional)
$conn->set_charset("utf8");

?>