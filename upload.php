<?php
if (isset($_POST['submit'])) {
    // Directory where you want to save the uploaded file
    $uploadDir = "uploads/";

    // Create the directory if it doesn't exist
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    // Get the file info
    $file = $_FILES['file'];
    $fileName = basename($file['name']);
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileType = $file['type'];

    // Set the target file path
    $targetFile = $uploadDir . $fileName;

    // Check if there was an error with the upload
    if ($fileError === 0) {
        // Move the file to the target directory
        if (move_uploaded_file($fileTmpName, $targetFile)) {
            echo "The file " . htmlspecialchars($fileName) . " has been uploaded successfully.";
        } else {
            echo "An error occurred while uploading the file.";
        }
    } else {
        echo "Error uploading the file. Error code: $fileError";
    }
} else {
    echo "No file submitted.";
}
?>
