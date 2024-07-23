<?php

function generateRandomString($length = 12) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function generateUniqueFileName($fileType) {
    // Generate a random string
    $randomString = bin2hex(random_bytes(8)); // 16 characters

    // Get the file extension
    $fileExtension = pathinfo($fileType, PATHINFO_EXTENSION);

    // Combine the random string with the file extension
    $newFileName = $randomString . "." . $fileExtension;

    return $newFileName;
}

?>