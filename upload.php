<?php
// upload.php

// Set the target directory where uploaded files will be stored
$targetDir = 'uploads/';

// Create the directory if it doesn't exist
if (!file_exists($targetDir)) {
    mkdir($targetDir, 0777, true);
}

// Check if a file was uploaded
if (isset($_FILES['fileToUpload'])) {
    $file = $_FILES['fileToUpload'];

    // Get the file name
    $fileName = basename($file['name']);

    // Set the target path
    $targetPath = $targetDir . $fileName;

    // Move the uploaded file to the target location
    if (move_uploaded_file($file['tmp_name'], $targetPath)) {
        echo "File uploaded successfully!";
        // You can store additional information (e.g., file metadata) in a database if needed.
    } else {
        echo "Error uploading file.";
    }
}
?>
