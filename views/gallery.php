<?php
include 'db_connect.php';

$result = $conn->query("SELECT * FROM songs ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Music Gallery</title>
</head>
<body>
  <h1>Music Gallery</h1>

  <?php if ($result->num_rows > 0): ?>
    <?php while ($row = $result->fetch_assoc()): ?>
      <div style="margin-bottom: 20px;">
        <h3><?= htmlspecialchars($row['title']) ?> — <?= htmlspecialchars($row['artist']) ?></h3>
        <audio controls>
          <source src="<?= htmlspecialchars($row['file_path']) ?>" type="audio/mpeg" />
          Your browser does not support the audio element.
        </audio>
      </div>
    <?php endwhile; ?>
  <?php else: ?>
    <p>No songs found.</p>
  <?php endif; ?>

</body>
</html>
