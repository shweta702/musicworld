<?php
$servername = "localhost";  // or your hosting provider's database server
$username = "root";         // your database username
$password = "";             // your database password
$dbname = "music_world";    // the name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
