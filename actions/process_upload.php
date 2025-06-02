<?php
session_start();

// Include DB connection
include '../includes/db_connect.php';

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate required fields
    if (isset($_FILES['music_file']) && isset($_POST['title']) && !empty($_POST['title'])) {
        $title = $conn->real_escape_string($_POST['title']);

        // Handle file upload
        $file = $_FILES['music_file'];
        $target_dir = "../assets/uploads/";
        $target_file = $target_dir . basename($file['name']);

        // Validate file type (example: only mp3, wav allowed)
        $allowed_types = ['audio/mpeg', 'audio/wav'];
        if (!in_array($file['type'], $allowed_types)) {
            $_SESSION['error'] = "Only MP3 and WAV files are allowed.";
            header("Location: ../views/upload.php");
            exit();
        }

        // Move uploaded file
        if (move_uploaded_file($file['tmp_name'], $target_file)) {
            // Save upload info to database
            $sql = "INSERT INTO music (title, filename) VALUES ('$title', '" . $conn->real_escape_string($file['name']) . "')";

            if ($conn->query($sql) === TRUE) {
                $_SESSION['success'] = "Music uploaded successfully!";
                header("Location: ../views/gallery.php");
                exit();
            } else {
                $_SESSION['error'] = "Database error: " . $conn->error;
                header("Location: ../views/upload.php");
                exit();
            }
        } else {
            $_SESSION['error'] = "Failed to move uploaded file.";
            header("Location: ../views/upload.php");
            exit();
        }
    } else {
        $_SESSION['error'] = "Please provide a title and select a music file.";
        header("Location: ../views/upload.php");
        exit();
    }
} else {
    // Invalid request method
    header("Location: ../views/upload.php");
    exit();
}
