<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ohmu Collection</title>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"
    />
    />
    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Style -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!-- Navbar Start -->
    <nav class="navbar">
      <a href="#" class="navbar-logo">Ohmu<span>Collection</span></a>

      <div class="navbar-nav">
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="collection.php">Collection</a>
        <a href="login.php">Login</a>
      </div>

      <div class="navbar-extra">
        <a href="collection.php" id="search"><i data-feather="search"></i></a>
        <a href="collection.php" id="archive"
          ><i data-feather="archive"></i
        ></a>
        <a href="#" id="menu"><i data-feather="menu"></i></a>
      </div>
    </nav>
    <!-- Navbar End -->

    <!-- Hero Section -->
    <section class="hero" id="home">
      <main class="content">
        <h1>Mari Lihat-Lihat <span>Koleksi</span></h1>
        <p>Lorem ipsum color</p>
        <a href="collection.php" class="cta">Lihat Koleksi</a>
      </main>
    </section>
    <!-- Hero Section End -->

    <!-- Feather Icons End -->
    <script>
      feather.replace();
    </script>

    <!-- Javascript -->
    <script src="src/index.js" type="module"></script>
    <script src="js/script.js"></script>
  </body>
</html>
