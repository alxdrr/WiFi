<?php
require "function.php";
?>
<?php
if (isset($_POST["registrasi"])) {
  if ($_POST['password'] === $_POST['confirm_password']) {
    $fullname = $_POST["fullname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $sql = "SELECT COUNT(*) AS sum FROM `users` WHERE username = '$username'";
    $arrUser = get_query($sql);
    if ($arrUser[0]['sum'] == '0') {
      $sql = "INSERT INTO `users` (`fullname`, `username`, `email`, `password`, `role`) VALUES ('$fullname', '$username', '$email', '$password', '0');";
      mysqli_query($conn, $sql);
      $_SESSION['save'] = $username;
      header("location: index.php");
      exit();
    } else {
      echo "<script>alert('username sudah digunakan')</script>";
    }
  } else {
    echo "<p> Gagal </p>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <link rel="icon" href="assets/Logo.png" />
    <link rel="stylesheet" href="assets/css/root.css" />
    <link rel="stylesheet" href="assets/css/footer.css" />
    <link rel="stylesheet" href="assets/css/navbar.css" />
    <link rel="stylesheet" href="assets/css/registrasi.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <title>Login Wisata-Find</title>
  </head>

<body>
  <nav class="nav container-fluid">
        <img src="assets/image/Brand.png" alt="" />
        <div class="nav-items">
          <a class="" href="index.php">Home</a>
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
          <a href="login.php"><button class="btn-outline">Login</button></a>
        </div>
  </nav>

  <div class="main container-fluid">
    <div class="img">
      <img src="assets\image\regist.png" alt="">
      <h1 class="header">Take the first step towards your dream place</h1>
      <p class="desc p-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti fugiat esse nisi praesentium blanditiis, aperiam cumque commodi. Fuga sit quidem inventore iste enim vitae quisquam, eius architecto! Facere, quibusdam sapiente.</p>
    </div>

    <form method="POST" action="">
      <h1 class="text display-3 fw-bold">Sign Up</h1>
      <div class="form-floating">
        <input type="text" class="form-control" name="fullname" required>
        <label for="floatingInput">Fullname</label>
      </div>
      <div class="form-floating">
        <input type="text" class="form-control" name="username" required>
        <label for="floatingInput">Username</label>
      </div>
      <div class="form-floating">
        <input type="email" class="form-control" name="email" required>
        <label for="floatingInput">Email</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" name="password" required>
        <label for="floatingInput">Password</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" name="confirm_password" required>
        <label for="floatingInput">Confirm Password</label>
      </div>
      <button class="w-100 btn btn-primary mb-3" value="registrasi" name="registrasi">
        Sign Up
      </button>
    </form>
  </div>
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
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>

</html>

