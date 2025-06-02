<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Music World - Music</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background-color: #111;
      color: #fff;
    }
    header {
      background: #000;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 40px;
      position: sticky;
      top: 0;
      z-index: 1000;
    }
    header h1 {
      margin: 0;
      font-size: 24px;
      color: #ffa502;
    }
    nav ul {
      list-style: none;
      display: flex;
      gap: 20px;
      margin: 0;
      padding: 0;
    }
    nav ul li a {
      color: #fff;
      text-decoration: none;
      font-weight: bold;
      transition: 0.3s;
    }
    nav ul li a:hover {
      color: #ffa502;
    }
    .btn-login {
      padding: 10px 20px;
      background-color: #ff4757;
      color: white;
      text-decoration: none;
      border-radius: 5px;
    }
    main {
      padding: 40px;
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
      gap: 30px;
    }
    .card {
      background: #1f1f1f;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 4px 10px rgba(0,0,0,0.4);
    }
    .card-content {
      padding: 20px;
    }
    .card-content h2 {
      margin: 0 0 10px;
      color: #ffa502;
    }
    .card-content p {
      margin: 0;
      font-size: 15px;
      color: #ccc;
    }
    audio {
      width: 100%;
      margin-top: 10px;
    }
    .card img {
      width: 100%;
      height: auto;
    }
    footer {
      background: #000;
      color: #fff;
      text-align: center;
      padding: 30px 10px;
      margin-top: 40px;
    }
  </style>
  <?php
  session_start();
  
  if (!isset($_SESSION['user_id'])) {
      header("Location: login.html"); // Redirect to login page if not logged in
      exit();
  }
  ?>
  
</head>
<body>
  <header>
    <h1>Music World</h1>
    <nav>
      <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="music.php">Music</a></li>
        <li><a href="gallery.html">Gallery</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
    <a class="btn-login" href="newform.html">Login / Register</a>
  </header>

  <main>
    <div class="card">
      <div class="card-content">
        <h2>Now Playing</h2>
        <p>Relax and vibe with today's featured track.</p>
        <audio controls>
          <source src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3" type="audio/mpeg">
          Your browser does not support the audio element.
        </audio>
        <img src="../assets/images/90spop.jpg" alt="90spop">
      </div>
    </div>

    <div class="card">
      <img src="../assets/images/trending.jpg" alt="Trending Music">
      <div class="card-content">
        <h2>Trending Now</h2>
        <p>Explore the hottest tracks topping global charts this week!</p>
      </div>
    </div>

    <div class="card">
      <img src="../assets/images/genre2.jpg" alt="Genre Vibes">
      <div class="card-content">
        <h2>Vibes by Genre</h2>
        <p>Dive into curated collections from chillhop, indie, pop, and more.</p>
      </div>
    </div>
  </main>

  <footer>
    <p>&copy; 2025 Music World. All rights reserved.</p>
  </footer>
</body>
</html>
