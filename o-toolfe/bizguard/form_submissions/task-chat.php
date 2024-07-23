<?php

require '../db/connection.php';
require '../utils/utils.php';
require '../includes/funcs.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $ticket_id = $_POST['ticket_id'];
    $user_id = $_SESSION['id'];
    $message = trim($_POST['message']);
    $is_solved = isset($_POST['is_solved']) ? 1 : 0;
    $updated_at = time();
    $replied_at = time();

    // Check for file uploads
    $uploadedFiles = [];
    $uploadDir = '../admin/uploads/images/attachments/';

    // Check for multiple file uploads
    if (isset($_FILES['attachments'])) {
        $files = $_FILES['attachments'];

        for ($i = 0; $i < count($files['name']); $i++) {
            if ($files['error'][$i] == 0) {
                $fileExtension = strtolower(pathinfo($files['name'][$i], PATHINFO_EXTENSION));
                $newFileName = generateRandomString(12) . '.' . $fileExtension;
                $uploadFile = $uploadDir . $newFileName;

                // Allow all kinds of attachments without validation
                if (move_uploaded_file($files['tmp_name'][$i], $uploadFile)) {
                    $uploadedFiles[] = ['file' => $newFileName, 'original' => $files['name'][$i]];
                } else {
                    echo "File upload failed.";
                    exit;
                }
            }
        }
    }

    // Insert message and file details into `tickets_replies` and `tickets_replies_attachments` tables
    $attachmentDetails = [];
    if (!empty($message) || !empty($uploadedFiles)) {
        // Prepare the SQL statement for inserting message into `tickets_replies` table
        $reply_sql = "INSERT INTO `tickets_replies`(`ticket_id`, `user_id`, `message`, `updated_at`, `replied_at`) 
        VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($reply_sql);
        $stmt->bind_param("iisss", $ticket_id, $user_id, $message, $updated_at, $replied_at);
        if ($stmt->execute()) {
            $reply_id = $stmt->insert_id;

            // Prepare the SQL statement for inserting file details into `tickets_replies_attachments` table
            $attachment_sql = "INSERT INTO `tickets_replies_attachments`(`ticket_reply_id`, `attachment`, `attachment_name`) 
            VALUES (?, ?, ?)";
            $attachment_stmt = $conn->prepare($attachment_sql);
            foreach ($uploadedFiles as $file) {
                $attachment_stmt->bind_param("iss", $reply_id, $file['file'], $file['original']);
                $attachment_stmt->execute();
                $attachmentDetails[] = ['file' => $file['file'], 'original' => $file['original']];
            }

            // Update ticket status if marked as solved


            // Redirect to the ticket page after submission
            header('Location: ../task-details.php?id=' . $ticket_id);
            exit(); // Make sure to exit after redirection
        } else {
            echo "Error occurred while submitting the reply.";
        }
    } else {
        header('Location: ../task-details.php?id=' . $ticket_id);
    }
    if ($is_solved) {
        update_task_subStatus($ticket_id,3 , $conn);
    }
} else {
    echo "Only POST requests are allowed.";
}

?>
