<?php
session_start();

if (isset($_SESSION['error'])) {
  echo '<p style="color:red;">' . $_SESSION['error'] . '</p>';
  unset($_SESSION['error']);
}

if (isset($_SESSION['success'])) {
  echo '<p style="color:green;">' . $_SESSION['success'] . '</p>';
  unset($_SESSION['success']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Upload Song</title>
</head>

<body>
  <h1>Upload a New Song</h1>
  <form action="../actions/process_upload.php" method="post" enctype="multipart/form-data">
    <label>Song Title:</label><br />
    <input type="text" name="title" required /><br /><br />

    <label>Artist:</label><br />
    <input type="text" name="artist" /><br /><br />

    <label>Audio File (MP3 only):</label><br />
    <input type="file" name="audio" accept="audio/mpeg" required /><br /><br />

    <button type="submit">Upload Song</button>
  </form>
</body>

</html>