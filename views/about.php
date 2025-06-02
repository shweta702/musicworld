<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Music World - About</title>
  <link rel="icon" href="favicon.ico" type="image/x-icon" />
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background-color: #121212;
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

    .about-content {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 40px;
      text-align: center;
    }

    .about-card {
      background: #1f1f1f;
      border-radius: 15px;
      padding: 25px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
      width: 80%;
      max-width: 600px;
    }

    .about-card h2 {
      color: #ffa502;
    }

    footer {
      background: #000;
      color: #fff;
      text-align: center;
      padding: 30px 10px;
      margin-top: 40px;
    }
  </style>
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

  <section class="about-content">
    <div class="about-card">
      <h2>About Us</h2>
      <p>At Music World, we believe music is more than just sound—it's a way of life. Our mission is to provide music
        lovers with a platform to explore, share, and enjoy music from all genres and time periods.</p>
      <p>Whether you’re into classic rock, pop hits, or underground beats, we bring you everything to enhance your
        musical journey.</p>
    </div>
  </section>

  <footer>
    <p>&copy; 2025 Music World. All rights reserved.</p>
  </footer>

</body>

</html>