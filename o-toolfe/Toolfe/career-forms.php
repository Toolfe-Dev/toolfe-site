<?php
include('./dbConnection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uploadsFolder = 'uploads';
    if (!is_dir($uploadsFolder)) {
        mkdir($uploadsFolder, 0777, true);
    }

    if (isset($_FILES["cv"]) && $_FILES["cv"]["error"] == 0) {
        $targetFilePath = $uploadsFolder . '/' . basename($_FILES["cv"]["name"]);
        if (move_uploaded_file($_FILES["cv"]["tmp_name"], $targetFilePath)) {
            $resume = $targetFilePath;
        } else {
            echo "Error moving uploaded file."; 
            exit();
        }
    } else {
        echo "Error uploading CV file.";
        exit();
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $role = $_POST['role'];
    $question1 = $_POST['question'];
    $question2 = $_POST['question-2'];
    $question3 = $_POST['question-3'];
    $question4 = $_POST['question-4'];
    $question5 = $_POST['question-5'];
    $question6 = $_POST['question-6']; 
    $question7 = $_POST['question-7'];
    $question8 = $_POST['question-8'];
    $question9 = $_POST['question-9'];
    $question10 = $_POST['question-10'];

    $sql = "INSERT INTO `career_form` 
            (`name`, `email`, `phone`, `role`, `resume`, `question_1`, `question_2`, `question_3`, `question_4`, `question_5`, `question_6`, `question_7`, `question_8`, `question_9`, `question_10`) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("sssssssssssssss", $name, $email, $phone, $role, $resume, $question1, $question2, $question3, $question4, $question5, $question6, $question7, $question8, $question9, $question10);

        if ($stmt->execute()) {
            echo "Form submitted successfully!";
            header("Location: career.html");
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
