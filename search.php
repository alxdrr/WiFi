<?php
  #Connect to Database
  
  // [Parjay] database kita beda jadi harus disesuaiin dulu passwordnya
  $conn = new mysqli("localhost", "root", "", "wisata_finder");
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
  
  // [Parjay] kalok mau liat datanya bisa di uncomment
  // var_dump($data_pariwisata);

  #Data pariwisata dari Database
  // $data_pariwisata = [
  //   "GWK" => ["ganesha","wisnu","kencana", "gwk", "jimbaran", "badung"],
  //   "Tanah Lot" => ["pantai","tanah","lot", "tabanan", "kediri"],
  // ];
  # Menyimpan key untuk diambil data tempat wisatanya di database
  $temp_item = [];
  # Mengambil key yang di input oleh user
  
  // kalok $_POST["search"] ada valuenya baru search
  if (isset($_POST["search"])) {
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
  }

  $wisata_places = array_unique($temp_item);
  // Mengambil data path untuk foto
  while( $tempat_wisata = mysqli_fetch_assoc($keyword_tempat_wisata)) {
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
    <title>Wisata Find - Home</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <link rel="icon" href="assets/Logo.png" />
    <link rel="stylesheet" href="assets/css/search.css" />
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
        <a class="" href="index.html">Home</a>
        <a class="active" href="">Search</a>
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
        <a href="regis.php"><button class="btn-solid">Sign Up</button></a>
        <a href="login.html"><button class="btn-outline">Login</button></a>
      </div>
  </nav>

    <section class="hero container-fluid">
      <img src="assets/image/home-1.png" alt="" />
      <div class="hero-text">
        Discover the enchanting beauty of Bali's hidden treasures
      </div>
      <form action="" method="post" class="search-bar" >
        <input
          class="form-control"
          type="text"
          name="search"
          placeholder="Search"
          aria-label="default input example"
          value="<?php echo isset($search_key) ? $search_key : ''; ?>"
        />
        <input class="btn-solid" type="submit" value="Explore" />
      </form>
    </section>

    <section class="result-cards">
      <?php foreach($wisata_places as $place): ?>
        <div class="result-card">
          <?php $imagePath = "Tempat Wisata\\" . $place . "\\" . $place . "-1.jpg"; ?> 
          <img src="<?php echo $imagePath; ?>" class="card-img-top" alt="no found image" />
          <div class="card-body">
                <h1 class="card-title"><?php echo "$place"?></h1>
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
        <?php endforeach ?>
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
