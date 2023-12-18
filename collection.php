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
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      rel="stylesheet"
      type="text/css"
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
    <!-- Collection Section Start -->
    <section class="collection-1" id="collection-1">
      <!-- Search Bar Start-->
      <div class="search-container">
        <input
          type="text"
          class="search-input"
          placeholder="Q Search Spesimen..."
        />
        <button type="submit" class="search-button">
          <i class="fa fa-search"></i>
        </button>
      </div>
      <!-- Search Bar End -->
      <!-- Dropdown type spesimen -->
      <div class="dropdown-type">
        <button class="dropbtn">
          Species Type | <i class="fa fa-caret-down" aria-hidden="true"></i>
        </button>
        <div id="typeDropdown" class="dropdown-content">
          <a href="#All">All</a>
          <a href="#Myriapoda">Myriapoda</a>
          <a href="#Arachnid">Arachnid</a>
          <a href="#Insecta">Insecta</a>
        </div>
      </div>
      <!-- Dropdown type spesimen End-->
      <!-- Add Data Button & Modal Start -->
      <div class="add-button">
        <button class="addbtn">Add Data</button>
        <div id="id01" class="modal">
          <!-- Modal Content -->
          <form
            method="post"
            enctype="multipart/form-data"
            id="speciesForm"
            class="modal-content"
            action="insert_data.php"
          >
            <div class="modal-container">
              <label for="sctname"><b>Species Name</b></label>
              <input
                class="sctname-input"
                id="sctname"
                type="text"
                placeholder="Enter Scientific Name"
                name="sctname"
                required
              />
              <br />
              <label for="cmname"><b>Common Name</b></label>
              <input
                class="cmname-input"
                id="cmname"
                type="text"
                placeholder="Enter Common Name"
                name="cmname"
                required
              />
              <br />
              <label for="tp"><b>Type</b></label>
              <input
                class="tp-input"
                id="tp"
                type="text"
                placeholder="Enter Type"
                name="tp"
                required
              />
              <br />
              <label for="makanan"><b>Makanan</b></label>
              <input
                class="makanan-input"
                id="makanan"
                type="text"
                placeholder="Enter Type"
                name="makanan"
                required
              />
              <br />
              <label for="deskripsi"><b>Deskripsi</b></label>
              <textarea class="deskripsi-input"
                id="deskripsi"
                type="text"
                placeholder="Deskripsi Hewan"
                name="deskripsi"
                ></textarea>
              <br>
              <form action="">
                <label for="spcimg"><b>Foto</b></label>
                <input
                  class="img-input"
                  type="file"
                  id="spcimg"
                  name="spcimg"
                />
              </form>
              <button class="addspc" type="submit">Add Species</button>
              <div class="cancelbtn-container">
                <button class="cancelbtn" type="button">Cancel</button>
              </div>
            </div>
          </form>
          <!-- Modal Content End -->
        </div>
      </div>
      <!-- Add Data Button & Modal Start End -->
    </section>
    <section  class="collection-2" id="collection-2">
      
        <!-- PHP Data Start-->
        <?php
        include 'config.php';
        // Fetch data from the database
        $query = "SELECT * FROM species";
        $result = $connect->query($query);
        // Check if there are rows in the result
        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                $speciesId = $row['id'];
                $speciesName = $row['sctname'];
                $speciesImage = $row['spcimg'];

                // Display the data in your HTML
                echo '<div class="card">';
                  echo '<div class="image">';
                  echo '<img src="spcfoto/' . $speciesImage . '" alt="" class="img" />';
                  echo '</div>';
                  echo '<div class="caption">';
                  echo '<a href="species_detail.php?id=' . $speciesId . '">' . $speciesName . '</a>';
                  echo '</div>';
                  echo '</div>';
            }
        } else {
            // If no data found
            echo "No species data available.";
        }
        // Close the database connection
        $connect->close();
        ?>
        <!-- PHP Data End-->
    </section>
    <!-- Collection Section End -->
    <!-- Feather Icons End -->
    <script>
      feather.replace();
    </script>
    <!-- Javascript -->
    <script src="src/index.js" type="module"></script>
    <script src="js/script.js"></script>
  </body>
</html>
