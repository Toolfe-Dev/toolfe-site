<?php
// Database credentials
$servername = "localhost";
$username = "u840048117_toolfe_new";
$password = "Toolfe10!";
$dbname = "u840048117_toolfe_new";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO careerform (role, fullName, email, phone, resume, message, agreeToTerms) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssi", $role, $fullName, $email, $phone, $resume, $message, $agreeToTerms);

// Get form data
$role = $_POST['role'];
$fullName = $_POST['FullName'];
$email = $_POST['Email'];
$phone = $_POST['Phone'];
$message = $_POST['Message'];
$agreeToTerms = isset($_POST['Agree To Terms']) ? 1 : 0;

// Handle file upload
if (isset($_FILES['resume']) && $_FILES['resume']['error'] == UPLOAD_ERR_OK) {
    $uploadsDir = '../uploads/';
    $fileTmpPath = $_FILES['resume']['tmp_name'];
    $fileName = $_FILES['resume']['name'];
    $destinationPath = $uploadsDir . $fileName;

    // Create uploads directory if it doesn't exist
    if (!is_dir($uploadsDir)) {
        mkdir($uploadsDir, 0777, true);
    }

    // Move the file to the uploads directory
    if (move_uploaded_file($fileTmpPath, $destinationPath)) {
        $resume = $fileName; // Save the file name in the database
    } else {
        $resume = null;
        echo "Error moving the uploaded file.";
    }
} else {
    $resume = null;
}

// Execute the statement
if ($stmt->execute()) {
   header('Location:./career-form.php');
} else {
    echo "Error: " . $stmt->error;
}

// Close connections
$stmt->close();
$conn->close();
?>
