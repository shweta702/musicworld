<?php
include 'db_connect.php';  // adjust path if needed

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title']);
    $artist = trim($_POST['artist']);
    $file = $_FILES['audio'];

    // Check file type and size (optional but recommended)
    $allowedTypes = ['audio/mpeg'];
    if (!in_array($file['type'], $allowedTypes)) {
        die("Error: Only MP3 files are allowed.");
    }

    // Create uploads folder if not exists
    $uploadDir = 'uploads/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    $targetFile = $uploadDir . basename($file['name']);

    if (move_uploaded_file($file['tmp_name'], $targetFile)) {
        $stmt = $conn->prepare("INSERT INTO songs (title, artist, file_path) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $title, $artist, $targetFile);
        if ($stmt->execute()) {
            echo "Song uploaded successfully! <a href='gallery.php'>Go to Gallery</a>";
        } else {
            echo "Database error: " . $stmt->error;
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
} else {
    echo "Invalid request.";
}
