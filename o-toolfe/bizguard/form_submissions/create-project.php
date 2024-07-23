<?php

require '../db/connection.php';
require '../utils/utils.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $uploadedFiles = [];
    $uploadDir = '../admin/uploads/images/attachments/';

    // Check for file uploads
    if (isset($_FILES['task_attachments'])) {
        foreach ($_FILES['task_attachments']['tmp_name'] as $index => $tmp_name) {
            if ($_FILES['task_attachments']['error'][$index] == 0) {
                $fileExtension = strtolower(pathinfo($_FILES['task_attachments']['name'][$index], PATHINFO_EXTENSION));
                $newFileName = generateRandomString(12) . '.' . $fileExtension;
                $uploadFile = $uploadDir . $newFileName;

                // Validate file size
                if ($_FILES['task_attachments']['size'][$index] > 5 * 1024 * 1024) {
                    echo "File size exceeds limit for file " . $_FILES['task_attachments']['name'][$index] . ".";
                    exit;
                }

                // Move the file
                if (move_uploaded_file($tmp_name, $uploadFile)) {
                    $uploadedFiles[] = ['file' => $newFileName, 'original' => $_FILES['task_attachments']['name'][$index]];
                } else {
                    echo "File upload failed for file " . $_FILES['task_attachments']['name'][$index] . ".";
                    exit;
                }
            } else {
                echo "Error occurred while uploading file " . $_FILES['task_attachments']['name'][$index] . ".";
                exit;
            }
        }
    }

    // Store uploaded files as a JSON string
    $attachments = json_encode(array_column($uploadedFiles, 'file'));
    $attachment_names = json_encode(array_column($uploadedFiles, 'original'));

    // Retrieve POST data
    $title = $_POST['title'];
    $priority = $_POST['priority'];
    $category = $_POST['category'];
    $rate = $_POST['rate'];
    $starting_date = $_POST['starting_date'];
    $ending_date = $_POST['ending_date'];
    $description = $_POST['description'];

    // Retrieve user data from session
    $created_at = date('Y-m-d H:i:s');

    // Prepare the SQL statement with placeholders
    $project_sql = "INSERT INTO `project_request`(`title`, `priority`, `category`, `rate`, `starting_date`, `ending_date`, `description`, `attachments`, `attachmet_name`, `created_at`) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Prepare the SQL statement
    $stmt = $conn->prepare($project_sql);

    // Bind parameters and execute the statement
    $stmt->bind_param("ssssssssss", $title, $priority, $category, $rate, $starting_date, $ending_date, $description, $attachments, $attachment_names, $created_at);

    // Execute the statement
    if ($stmt->execute()) {
        // Redirect to the project page after submission
        header('location: ../form-submission.php');
        echo "Project request submitted successfully!";
        exit(); // Make sure to exit after success message
    } else {
        echo "Error occurred while submitting the project request.";
    }
} else {
    echo "Only POST requests are allowed.";
}

?>
