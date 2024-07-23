<?php

require '../db/connection.php';
require '../utils/utils.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $rapid = isset($_POST['rapid']) ? $_POST['rapid'] : 0;

    $uploadedFiles = [];
    $uploadDir = '../admin/uploads/images/attachments/';

    // Check for file uploads
    if (isset($_FILES['task_attachments'])) {
        foreach ($_FILES['task_attachments']['tmp_name'] as $index => $tmp_name) { 
            if ($_FILES['task_attachments']['error'][$index] == 0) {
                $fileExtension = strtolower(pathinfo($_FILES['task_attachments']['name'][$index], PATHINFO_EXTENSION));
                $newFileName = generateRandomString(12) . '.' . $fileExtension;
                $uploadFile = $uploadDir . $newFileName;

                // Validate file type and size
                
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
    } else {
        echo "No files uploaded or an error occurred while uploading the files.";
        exit;
    }

    // Retrieve POST data
    $subject = $_POST['task_title'];
    $message = $_POST['description'];
    $priority = $_POST['priority'];
    $department_id = $_POST['department'];

    // Store uploaded files as a JSON string
    $attachment = json_encode(array_column($uploadedFiles, 'file'));

    // Retrieve user data from session
    $user_id = $_SESSION['id'];
    $security_key = generateRandomString(12);  // Pass length argument
    $email_address = $_SESSION['email_address'];
    $email_attempts = 0;
    $is_read = 0;
    $is_read_assigned = 1;
    $reopened_awaiting = 0;
    $sub_status = 1;
    $created_month_year = date('Y-m-d');
    $created_at = time();
    $last_agent_replied_at = null; // Assuming this should be null initially

    // Prepare the SQL statement with placeholders
    $ticket_post_sql = "INSERT INTO `tickets`(`subject`, `message`, `attachment`, `priority`, `user_id`, `department_id`, `security_key`, `email_address`, `is_read`, `is_read_assigned`, `last_agent_replied_at`, `reopened_awaiting`, `sub_status`,  `created_month_year`, `created_at`) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Prepare the SQL statement
    $stmt = $conn->prepare($ticket_post_sql);

    // Bind parameters and execute the statement
    $stmt->bind_param("sssssssssssssss", $subject, $message, $attachment, $priority, $user_id, $department_id, $security_key, $email_address, $is_read, $is_read_assigned, $last_agent_replied_at, $reopened_awaiting, $sub_status, $created_month_year, $created_at);

    // Execute the statement
    if ($stmt->execute()) {
        // Get the last inserted ticket ID
        $ticket_id = $stmt->insert_id;

        // Prepare the SQL statement for inserting into tickets_attachments
        $attachments_sql = "INSERT INTO `tickets_attachments`(`ticket_id`, `attachment`, `attachment_name`) VALUES (?, ?, ?)";
        $attachments_stmt = $conn->prepare($attachments_sql);

        // Bind parameters and execute the statement for each attachment
        foreach ($uploadedFiles as $file) {
            $attachments_stmt->bind_param("iss", $ticket_id, $file['file'], $file['original']);
            $attachments_stmt->execute();
        }

        // Redirect to ticket page after submission
        if($rapid == 1) {
            header('location: ../form-submission.php');
            exit(); // Make sure to exit after redirection
        }else {
            header('location: ../form-submission.php');
            exit(); // Make sure to exit after redirection
        }
    } else {
        echo "Error occurred while submitting the ticket.";
    }
} else {
    echo "Only POST requests are allowed.";
}

?>
