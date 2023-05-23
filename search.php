<?php
  #Connect to Database
  $conn = new mysqli("localhost", "root", "125125", "WiFi");
  $data = [];
  $keyword_tempat_wisata = mysqli_query($conn, "SELECT * FROM keyword_tempat_wisata");

  while( $tempat_wisata = mysqli_fetch_assoc($keyword_tempat_wisata)){
    $data[] = $tempat_wisata;
  }
  $data_pariwisata = [];
  foreach($data as $place){
    $key = $place["place_name"];
    $detail_name = explode(" ", $place["detail_name"]);
    $detail_location = explode(" ",$place["detail_location"]);
    $value = array_merge($detail_name, $detail_location);
    $data_pariwisata[$key] = $value; 
  }
  
  #Data pariwisata dari Database
  // $data_pariwisata = [
  //   "GWK" => ["ganesha","wisnu","kencana", "gwk", "jimbaran", "badung"],
  //   "Tanah Lot" => ["pantai","tanah","lot", "tabanan", "kediri"],
  // ];
  # Menyimpan key untuk diambil data tempat wisatanya di database
  $temp_item = [];
  # Mengambil key yang di input oleh user
  $search_key = strtolower($_POST["search"]);
  $search_keys = explode(" ", $search_key);
  # Mencari tempat wisata sesuai dengan input dari user
  foreach($search_keys as $search_keyword){
    foreach($data_pariwisata as $key => $keywords){
      foreach($keywords as $keyword ){
        if ($keyword === $search_keyword){
          $temp_item[] = $key;
        }
      }
    }
  }
  $wisata_places = array_unique($temp_item);

  // Mengambil data path untuk foto
  while( $tempat_wisata = mysqli_fetch_assoc($keyword_tempat_wisata)){
    $data[] = mysqli_query($conn, "SELECT * FROM photo_wisata_place");
  foreach($data as $place){
    $photo_path[$place["place_name"]] = $photo_path["folder_path"];
  }
  }
  


  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wisata Find - Search</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <link rel="icon" href="assets/Logo.png" />
    <link rel="stylesheet" href="html/css/home.css" />
    <link rel="stylesheet" href="html/css/root.css" />
    <link rel="stylesheet" href="html/css/footer.css" />
    <link rel="stylesheet" href="html/css/navbar.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <nav class="nav container-fluid">
      <img src="assets/Brand.png" alt="" />
      <div class="nav-items">
        <a class="active" href="">Home</a>
        <a class="" href="">Search</a>
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
        <button class="btn-solid">Sign Up</button>
        <button class="btn-outline">Login</button>
      </div>
  </nav>
    <section class="hero container-fluid">
      <form action="" method="post" class="search-bar">
        <input type="search" placeholder="Search" name="search" />
        <input class="btn-solid" type="submit" value="Submit" />
      </form>
    </section>
    <div class="search-items">
      <?php foreach($wisata_places as $place): ?>
      <?php
        $imagePath = "Tempat Wisata\\" . $place . "\\" . $place . "-1.jpg";
        ?> 
      <img src="<?php echo $imagePath; ?>" alt="no found image" width="300px" height="300px">
      <h3><?php echo "$place"?></h3>
      <?php endforeach ?>
      </div>
    
    <section class="top-wisata container-fluid">
      <div class="text-1">Top Wisata</div>
      <div class="wisata-cards">
        <div class="wisata-card">
          <img src="assets/gwk.png" class="card-img-top" alt="..." />
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
          <button id="btn-card">
            <a
              href="#"
              class="bx bx-right-arrow-alt"
            ></a>
          </button>
        </div>
      </div>
      <button class="btn-outline">Explore <div class="bx bx-right-arrow-alt"></div></button>
    </section>

    <footer class="footer container-fluid">
      <div id="connect">
        Connect With Us
        <div class="social-icon">
          <a href="linked.com"><img src="Assets/icon/linkedin.png" alt="" /></a>
          <a href="facebook.com"><img src="Assets/icon/fb.png" alt="" /></a>
          <a href="twitter.com"><img src="Assets/icon/twt.png" alt="" /></a>
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
        <a href=""><img src="assets/Brand.png" alt="" /></a>
        © 2023 Wisata Find, All Rights Reserved.
      </div>
    </footer>
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
