<?php
session_start();
include '../php/db.php';

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $conn->real_escape_string($_POST['FullName']);
    $phone = $conn->real_escape_string($_POST['Phone']);
    $email = $conn->real_escape_string($_POST['Email']);
    $company_name = $conn->real_escape_string($_POST['Company']);
    $message = $conn->real_escape_string($_POST['Message']);
    $agree_to_terms = isset($_POST['Agree To Terms']) ? 1 : 0; // Convert checkbox to boolean

    // SQL query to insert data
    $sql = "INSERT INTO contact_form (full_name, phone, email, company_name, message, agree_to_terms) 
            VALUES ('$full_name', '$phone', '$email', '$company_name', '$message', '$agree_to_terms')";

    // Execute query and check for success
    if ($conn->query($sql) === TRUE) {
        // Set a session variable to show the success message
        $_SESSION['success'] = "Form submitted successfully!";

        // Set a cookie for 2 minutes to indicate successful submission
        setcookie('form_submission', 'success', time() + 120, '/');

        // Redirect back to the form page
        header("Location: ".$_SERVER['HTTP_REFERER']);
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>
