<?php
// Specify the directory where uploaded images will be stored
$uploadDirectory = 'img/';

// Check if the file parameter is present and the upload was successful
if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
    // Generate a unique filename to prevent overwriting existing files
    $filename = uniqid('image_') . '_' . $_FILES['file']['name'];
    $targetPath = $uploadDirectory . $filename;

    // Move the uploaded file to the specified directory
    if (move_uploaded_file($_FILES['file']['tmp_name'], $targetPath)) {
        // Get the base URL
        $baseUrl = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']);

        // Construct the full image URL
        $imageUrl = $baseUrl . '/' . $targetPath;

        // Send a JSON response with the upload success and the full image URL
        echo json_encode(['success' => true, 'url' => $imageUrl]);
    } else {
        // Send a JSON response indicating upload failure
        echo json_encode(['success' => false, 'message' => 'Failed to move uploaded file']);
    }
} else {
    // Send a JSON response if no file was uploaded or an error occurred
    echo json_encode(['success' => false, 'message' => 'No file uploaded or upload error occurred']);
}
?>

