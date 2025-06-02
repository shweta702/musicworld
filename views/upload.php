<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Upload Song</title>
</head>
<body>
  <h1>Upload a New Song</h1>
  <form action="process_upload.php" method="POST" enctype="multipart/form-data">
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
