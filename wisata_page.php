<?php
    require "function.php";
    $place_name = $_GET["place"];
    $selected_data = get_detail_wisata($place_name);
    $price = explode(' ', $selected_data['price'])
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "$place_name"?> | Page</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <link rel="icon" href="assets/Logo.png" />
    <link rel="stylesheet" href="assets/css/wisata.css" />
    <link rel="stylesheet" href="assets/css/root.css" />
    <link rel="stylesheet" href="assets/css/footer.css" />
    <link rel="stylesheet" href="assets/css/navbar.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
</head>
<body id="nilai" getNilai="<?php echo $place_name;?>">
    <nav class="nav container-fluid" style="z-index: 1;">
      <img src="assets/image/Brand.png" alt="" />
      <div class="nav-items">
        <a class="" href="index.php">Home</a>
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
    <section class="hero">
        <img class="bg-img" src="<?php echo "Tempat Wisata\\" . $place_name . "\\" . $place_name . "-1.jpg"; ?>" alt="">
        <div class="copy">
            <h1 class="header"><?php echo $selected_data["title"]?></h1>
            <h1 class="address"><?php echo $selected_data["address"] ?></h1> 
        </div>
    </section>
    
    <section class="content">
        <section class="left-content">
            <section class="info">
                <h1 class="title"><?php echo $selected_data["title"]?></h1>
                <h1 class="desc">Dictumst scelerisque ut commodo dis. Risus ac tellus sapien gravida sit elementum dui eget nunc. Eu arcu montes, sit elit, maecenas feugiat. Urna, habitant suspendisse suspendisse pharetra nec. Nibh mauris nullam nec mattis.</h1>
                <h1 class="fee">Price: <?php echo $price[0]?>/<?php echo $price[1]?> </h1>
            </section>

            <section class="gallery">
                <h1 class="title">Gallery</h1>
                <div id="carousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="<?php echo "Tempat Wisata\\" . $place_name . "\\" . $place_name . "-2.jpg"; ?>" class="d-block w-100" alt="unavailable">
                        </div>
                        <div class="carousel-item">
                        <img src="<?php echo "Tempat Wisata\\" . $place_name . "\\" . $place_name . "-3.jpg"; ?>" class="d-block w-100" alt="unavailable">
                        </div>
                        <div class="carousel-item">
                        <img src="<?php echo "Tempat Wisata\\" . $place_name . "\\" . $place_name . "-4.jpg"; ?>" class="d-block w-100" alt="unavailable">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    </div>
            </section>
        </section>
        <div class="divider"></div>
        <section class="right-content">
            <section class="event">
                <h1 class="title" id="event">Events</h1>
                <div id="list-event"><!-- nanti list eventnya disini --></div>
            </section>
            <section class="reviews">
                    <h1 class="title" id="review">Reviews</h1>
                    <div id="list-review"><!-- nanti list reviewnya disini --></div>
            </section>
        </section>
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
        <a href="index.html"><img src="assets/image/Brand.png" alt="" /></a>
        © 2023 Wisata Find, All Rights Reserved.
      </div>
    </footer>
    <script src="assets/js/navbar.js"></script>
    <script src="js\function.js"></script>
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