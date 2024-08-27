<?php
include '../php/db.php';
session_start();

// Get form data
$processName = $_POST['processName'];
$currentAnnualCost = $_POST['currentAnnualCost'];
$estimatedAnnualCostAfterAutomation = $_POST['estimatedAnnualCostAfterAutomation'];
$potentialCostSavings = $_POST['potentialCostSavings'];
$fteSavings = $_POST['fteSavings'];
$hoursSaved = $_POST['hoursSaved'];
$roi = $_POST['roi'];
$percentageReductionInCost = $_POST['percentageReductionInCost'];
$paybackPeriodDays = $_POST['paybackPeriodDays'];
$fullName = $_POST['FullName'];
$phone = $_POST['Phone'];
$email = $_POST['Email'];
$company = $_POST['Company'];
$message = $_POST['Message'];
$agreeToTerms = isset($_POST['Agree To Terms']) ? 'yes' : 'no';
$submitType = isset($_POST['submit']) ? $_POST['submit'] : '';

// Insert data into the database
$sql = "INSERT INTO rpa_cals_submissions (processName, currentAnnualCost, estimatedAnnualCostAfterAutomation, potentialCostSavings, fteSavings, hoursSaved, roi, percentageReductionInCost, paybackPeriodDays, FullName, Phone, Email, Company, Message, AgreeToTerms, submit_type)
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sdddddddsdssssss", $processName, $currentAnnualCost, $estimatedAnnualCostAfterAutomation, $potentialCostSavings, $fteSavings, $hoursSaved, $roi, $percentageReductionInCost, $paybackPeriodDays, $fullName, $phone, $email, $company, $message, $agreeToTerms, $submitType);

if ($stmt->execute()) {
    echo "Form submitted successfully!";
    header("Location: ./");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
