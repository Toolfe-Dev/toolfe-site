<?php
include '../php/db.php';
session_start();

// Function to validate and return the correct integer value
function getPostValue($postValue) {
    if (is_array($postValue)) {
        return count($postValue);  // Return the count of array elements
    }
    if (empty($postValue) || !is_numeric($postValue)) {
        return 0;  // Return 0 if the value is empty, not numeric, or an invalid type
    }
    return (int)$postValue;  // Convert the value to an integer if it's numeric
}

// Assign POST values to variables first
$q1 = getPostValue($_POST['q1']);
$q2 = getPostValue($_POST['q2']);
$q3 = getPostValue($_POST['q3']);
$q4 = getPostValue($_POST['q4']);
$q5 = getPostValue($_POST['q5']);
$q6 = getPostValue($_POST['q6']);
$q7 = getPostValue($_POST['q7']);
$q8 = getPostValue($_POST['q8']);
$q9 = getPostValue($_POST['q9']);
$q10 = getPostValue($_POST['q10']);
$q11 = getPostValue($_POST['q11']);
$q12 = getPostValue($_POST['q12']);
$q13 = getPostValue($_POST['q13']);
$q14 = getPostValue($_POST['q14']);
$q15 = getPostValue($_POST['q15']);
$q16 = getPostValue($_POST['q16']);
$q17 = getPostValue($_POST['q17']);
$q18 = getPostValue($_POST['q18']);
$q19 = getPostValue($_POST['q19']);
$q20 = getPostValue($_POST['q20']);
$q21 = getPostValue($_POST['q21']);
$q22 = getPostValue($_POST['q22']);
$q23 = getPostValue($_POST['q23']);
$q24 = getPostValue($_POST['q24']);
$q25 = getPostValue($_POST['q25']);

$total = $q1 + $q2 + $q3 + $q4 + $q5 + $q6 + $q7 + $q8 + $q9 + $q10 +
$q11 + $q12 + $q13 + $q14 + $q15 + $q16 + $q17 + $q18 + $q19 + $q20 +
$q21 + $q22 + $q23 + $q24 + $q25;

// Prepare and bind the SQL statement
$sql = "INSERT INTO audit_responses (q1, q2, q3, q4, q5, q6, q7, q8, q9, q10, q11, q12, q13, q14, q15, q16, q17, q18, q19, q20, q21, q22, q23, q24, q25,total)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?)";

$stmt = $conn->prepare($sql);

// Bind parameters from POST request
$stmt->bind_param("iiiiiiiiiiiiiiiiiiiiiiiiii", 
    $q1, $q2, $q3, $q4, $q5, $q6, $q7, $q8, $q9, $q10, 
    $q11, $q12, $q13, $q14, $q15, $q16, $q17, $q18, $q19, $q20, 
    $q21, $q22, $q23, $q24, $q25,$total 
);

// Execute the statement
if ($stmt->execute()) {
    $_SESSION['total'] = $total;

    // Redirect to audit-result.php with query parameters
    $url = "audit-result.php" ;

    header("Location: $url");
    exit(); 
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
