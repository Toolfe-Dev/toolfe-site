<?php
session_start();
include '../php/db.php'; // Assuming you have a separate file for database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and escape input data
    $full_name = $conn->real_escape_string($_POST['fullname']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $email = $conn->real_escape_string($_POST['email']);
    $company_name = $conn->real_escape_string($_POST['company']);
    $industry = $conn->real_escape_string($_POST['industry']);
    $message = $conn->real_escape_string($_POST['message']);
    $budget = isset($_POST['budget']) ? (int)$_POST['budget'] : 0;
    $agree_to_terms = isset($_POST['privacy_policy_accept']) ? 1 : 0;

    // Handle checkboxes for services (array input)
    $services = isset($_POST['services']) ? implode(', ', $_POST['services']) : '';

    // SQL query to insert data
    $sql = "INSERT INTO service_form_submissions (full_name, phone, email, company_name, industry, services, message, budget, agree_to_terms) 
            VALUES ('$full_name', '$phone', '$email', '$company_name', '$industry', '$services', '$message', '$budget', '$agree_to_terms')";

    if ($conn->query($sql) === TRUE) {
        // Set a session variable to show the success message
        $_SESSION['success'] = "Form submitted successfully!";
        
        // Set a cookie for 2 minutes to indicate successful submission
        setcookie('form_submission', 'success', time() + 120, '/');
        
        // Redirect back to the form page
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>
