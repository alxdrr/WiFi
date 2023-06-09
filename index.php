<?php
  require "function.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wisata Find - Home</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <link rel="icon" href="assets/Logo.png" />
    <link rel="stylesheet" href="assets/css/home.css" />
    <link rel="stylesheet" href="assets/css/root.css" />
    <link rel="stylesheet" href="assets/css/footer.css" />
    <link rel="stylesheet" href="assets/css/navbar.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>

  <body>
    <nav class="nav container-fluid">
      <img src="assets/image/Brand.png" alt="" />
      <div class="nav-items">
        <a class="active" href="index.html">Home</a>
        <a class="" href="search.php">Search</a>
        <a class="" href="">Top Wisata</a>
        <div class="dropdown">
          <button
            class="btn-dropdown dropdown-toggle"
            type="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            Help
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">FAQ</a></li>
            <li><a class="dropdown-item" href="#">Contact Us</a></li>
            <li><a class="dropdown-item" href="#">About</a></li>
          </ul>
        </div>
      </div>
      <div class="button-stack">
        <?php (isset($_SESSION['save']))? "":show_button_regis_login() ?>
      </div>
    </nav>

    <section class="hero container-fluid">
      <img src="assets/image/home-1.png" alt="" />
      <div class="hero-text">
        Discover the enchanting beauty of Bali's hidden treasures
      </div>
      <form action="search.php" method="post" class="search-bar">
        <input
          class="form-control"
          type="text"
          placeholder="Search"
          aria-label="default input example"
          name="search"
        />
        <input class="btn-solid" type="submit" value="Explore" />
      </form>
    </section>

    <section class="top-wisata container-fluid">
      <div class="text-1">Top Wisata</div>
      <div class="wisata-cards">
        <div class="wisata-card">
          <img src="assets/image/gwk.png" class="card-img-top" alt="..." />
          <div class="card-body">
            <h1 class="card-title">Garuda Wisnu Kencana Cultural Park</h1>
            <h1 class="card-desc">Taman Wisata</h1>
            <h1 class="card-location">Jimbaran, Jl. Raya Uluwatu</h1>

            <p class="card-text">
              GWK Cultural Park is home to some of the most iconic cultural
              landmarks in Bali, including the magnificent Garuda Wisnu Kencana
              statue
            </p>
          </div>

          <a
            id="btn-card"
            href="#"
            class="bx bx-right-arrow-alt"
            type="button"
          ></a>
        </div>

        <div class="wisata-card">
          <img src="assets/image/gwk.png" class="card-img-top" alt="..." />
          <div class="card-body">
            <h1 class="card-title">Garuda Wisnu Kencana Cultural Park</h1>
            <h1 class="card-desc">Taman Wisata</h1>
            <h1 class="card-location">Jimbaran, Jl. Raya Uluwatu</h1>

            <p class="card-text">
              GWK Cultural Park is home to some of the most iconic cultural
              landmarks in Bali, including the magnificent Garuda Wisnu Kencana
              statue
            </p>
          </div>

          <a
            id="btn-card"
            href="#"
            class="bx bx-right-arrow-alt"
            type="button"
          ></a>
        </div>
        <div class="wisata-card">
          <img src="assets/image/gwk.png" class="card-img-top" alt="..." />
          <div class="card-body">
            <h1 class="card-title">Garuda Wisnu Kencana Cultural Park</h1>
            <h1 class="card-desc">Taman Wisata</h1>
            <h1 class="card-location">Jimbaran, Jl. Raya Uluwatu</h1>

            <p class="card-text">
              GWK Cultural Park is home to some of the most iconic cultural
              landmarks in Bali, including the magnificent Garuda Wisnu Kencana
              statue
            </p>
          </div>

          <a
            id="btn-card"
            href="#"
            class="bx bx-right-arrow-alt"
            type="button"
          ></a>
        </div>
      </div>
      <button class="btn-outline">
        Explore
        <div class="bx bx-right-arrow-alt"></div>
      </button>
    </section>

    <footer class="footer container-fluid">
      <div id="connect">
        Connect With Us
        <div class="social-icon">
          <a href="linked.com"
            ><img src="assets/image/linkedin.png" alt=""
          /></a>
          <a href="facebook.com"><img src="assets/image/fb.png" alt="" /></a>
          <a href="twitter.com"><img src="assets/image/twt.png" alt="" /></a>
        </div>
      </div>
      <div id="explore">
        Explore
        <ul class="navigation">
          <li>
            <a href="#">Top Wisata</a>
          </li>
          <li>
            <a href="#">Navigation 2</a>
          </li>
          <li>
            <a href="#">Navigation 3</a>
          </li>
        </ul>
      </div>

      <div id="support">
        Support
        <ul class="navigation">
          <li>
            <a href="#">FAQ</a>
          </li>
          <li>
            <a href="#">Contact Us</a>
          </li>
          <li>
            <a href="#">Visit Us</a>
          </li>
        </ul>
      </div>

      <div id="copyright">
        <a href="index.php"><img src="assets/image/Brand.png" alt="" /></a>
        © 2023 Wisata Find, All Rights Reserved.
      </div>
    </footer>
    <script src="assets/js/navbar.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
      integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
      integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
      crossorigin="anonymous"
    ></script>
  </body>
</html>