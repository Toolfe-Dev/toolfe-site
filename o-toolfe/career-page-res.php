<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View All CVs</title>
</head>
<body>
 <h1>this is test Page</h1>
<?php
include('./dbConnection.php');

$sql = "SELECT * FROM `career_form`";
$result = $conn->query($sql);

if ($result) {
    while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $phone = $row['phone'];
        $role = $row['role'];
        $cv = $row['resume'];
        $question1 = $row['question_1'];
        $question2 = $row['question_2'];
        $question3 = $row['question_3'];
        $question4 = $row['question_4'];
        $question5 = $row['question_5'];
        $question6 = $row['question_6']; 
        $question7 = $row['question_7'];
        $question8 = $row['question_8'];
        $question9 = $row['question_9'];
        $question10 = $row['question_10'];

        echo "<div>";
        echo "<h3>$name's Details</h3>";
        echo "<p>Email: $email</p>";
        echo "<p>Phone: $phone</p>";
        echo "<p>Role: $role</p>";
        echo "<p>question 1: $question1</p>";
        echo "<p>question 2: $question3</p>";
        echo "<p>question 3: $question4</p>";
        echo "<p>question 4: $question5</p>";
        echo "<p>question 5: $question6</p>";
        echo "<p>question 6: $question7</p>";
        echo "<p>question 7: $question8</p>";
        echo "<p>question 8: $question2</p>";
        echo "<p>question 9: $question9</p>";
        echo "<p>question 10: $question10</p>";
        echo "<p><a href='$cv' target='_blank'>View CV</a></p>";
        echo "</div>";
    }

    $result->free_result();
} else {
    echo "Error: " . $conn->error;
}



$conn->close();
?>

</body>
</html>
