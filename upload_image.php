<?php
session_start();

// Ensure the user is logged in
if (!isset($_SESSION['user_id'])) {
    die("You must be logged in to upload an image.");
}

require 'db.php';

// Handle image upload
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['image'])) {
    $image = $_FILES['image'];
    $user_id = $_SESSION['user_id'];

    // Check for upload errors
    if ($image['error'] !== UPLOAD_ERR_OK) {
        die("Error uploading file. Code: " . $image['error']);
    }

    // Check if the file is an image
    $imageType = mime_content_type($image['tmp_name']);
    if (strpos($imageType, 'image') === false) {
        die("Uploaded file is not a valid image.");
    }

    // Generate a unique filename and move the uploaded file
    $targetDir = 'uploads/';
    $fileName = uniqid('img_', true) . '.' . pathinfo($image['name'], PATHINFO_EXTENSION);
    $targetFile = $targetDir . $fileName;

    if (!move_uploaded_file($image['tmp_name'], $targetFile)) {
        die("Failed to move uploaded file.");
    }

    // Save the image path to the database
    try {
        $stmt = $pdo->prepare("INSERT INTO uploads (user_id, image_path, location, uploaded_at) VALUES (?, ?, ?, NOW())");
        $stmt->execute([$user_id, $targetFile, 'Location not set']); // Update location as needed
        echo "Image uploaded successfully!";
    } catch (PDOException $e) {
        die("Database error: " . $e->getMessage());
    }
} else {
    echo "No file uploaded.";
}
?>
