<?php
require '../db/connection.php'; // Include your database connection file
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["current_password"]) && isset($_POST["new_password"]) && isset($_POST["re_enter_password"])) {
        $currentPassword = $_POST["current_password"];
        $newPassword = $_POST["new_password"];
        $reEnteredPassword = $_POST["re_enter_password"];

        $realPassword = $_SESSION['password'];        
        if (password_verify($realPassword, $currentPassword)) {
            // If the current password entered by the user does not match the actual password in the session, display an error
            echo "Current password is incorrect.";
            exit();
        }
        
        if ($newPassword !== $reEnteredPassword) {
            // If the new password and re-entered password do not match, display an error
            // $_SESSION["error"] = "New password and re-entered password do not match.";
            // header("Location: change_password.php"); 
            echo "New password and re-entered password do not match.";
            exit();
        }

        $user_id = $_SESSION['id'];
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

        // Prepare and execute the SQL statement to update the user's password in the database
        $password_update_sql = "UPDATE `users` SET `password` = '$hashedPassword' WHERE `id` = $user_id";
        if ($conn->query($password_update_sql) === TRUE) {
            echo "Password changed successfully!";
            
        } else {
            echo "Error updating password: " . $conn->error;
        }

        exit();
    } else {
        // If any of the required fields are missing in the form submission, display an error
        echo "All fields are required.";
        exit();
    }
} else {
    // If the request method is not POST, redirect to the change_password.php page
    header("Location: change_password.php");
    exit();
}
?>
