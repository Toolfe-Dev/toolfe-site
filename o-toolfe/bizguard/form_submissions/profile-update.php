<?php
require '../db/connection.php';
require '../utils/utils.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Fetch user input
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $dateFormat = $_POST['date_format'];
    $language = $_POST['language'];
    $timeFormat = $_POST['time_format'];
    $timezone = $_POST['timezone'];
    $emailNotification = isset($_POST['email_notification']) ? 1 : 0;
    $userId = $_SESSION['id'];

    $uploadFile = null; 


    // Handle profile picture upload
    if (isset($_FILES['profile_picture']) && $_FILES['profile_picture']['error'] == UPLOAD_ERR_OK) {
        $uploadDir = '../admin/uploads/images/users/'; // Ensure the path is correct and points outside the web root
        $fileTmpPath = $_FILES['profile_picture']['tmp_name'];
        $fileName = $_FILES['profile_picture']['name'];
        $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        $newfileName = generateRandomString() . '.' . $fileExtension;
        $uploadFile = $uploadDir . $newfileName;

        // Validate file type and size
        $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
        if (!in_array($fileExtension, $allowedExtensions)) {
            echo "Invalid file type.";
            exit;
        }
        if ($_FILES['profile_picture']['size'] > 5 * 1024 * 1024) {
            echo "File size exceeds limit.";
            exit;
        }

        // Ensure the upload directory exists
        if (!is_dir($uploadDir) && !mkdir($uploadDir, 0755, true)) {
            echo "Failed to create upload directory.";
            exit;
        }

        // Move the file
        if (!move_uploaded_file($fileTmpPath, $uploadFile)) {
            echo "File upload failed.";
            exit;
        }
    }

    // Construct query based on whether a new picture is uploaded
    if ($uploadFile) {
        $query = "UPDATE users SET 
                    first_name = ?, 
                    last_name = ?, 
                    email_address = ?, 
                    username = ?, 
                    date_format = ?, 
                    language = ?, 
                    time_format = ?, 
                    timezone = ?, 
                    send_email_notifications = ?, 
                    picture = ?, 
                    updated_at = NOW() 
                  WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param(
            'ssssssssssi',
            $firstName,
            $lastName,
            $email,
            $username,
            $dateFormat,
            $language,
            $timeFormat,
            $timezone,
            $emailNotification,
            $newfileName,
            $userId
        );
    } else {
        $query = "UPDATE users SET 
                    first_name = ?, 
                    last_name = ?, 
                    email_address = ?, 
                    username = ?, 
                    date_format = ?, 
                    language = ?, 
                    time_format = ?, 
                    timezone = ?, 
                    send_email_notifications = ?, 
                    updated_at = NOW() 
                  WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param(
            'sssssssssi',
            $firstName,
            $lastName,
            $email,
            $username,
            $dateFormat,
            $language,
            $timeFormat,
            $timezone,
            $emailNotification,
            $userId
        );
    }

    // Execute the statement
    if ($stmt->execute()) {
        header("Location: ../account-update.php");
    } else {
        echo "Failed to update profile: " . $stmt->error;
    }
}
?>
