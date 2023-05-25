<?php
require "db.php";
require "function.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrasi Wisata Find</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
  <link rel="icon" href="assets/Logo.png" />
  <link rel="stylesheet" href="css/home.css" />
  <link rel="stylesheet" href="css/root.css" />
  <link rel="stylesheet" href="css/navbar.css" />
  <link rel="stylesheet" href="css/registrasi.css" />
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>

<body>
  <nav class="nav container-fluid" style="background-color: var(--secondary-color);">
    <img src="assets/Brand.png" alt="" />
    <div class="nav-items d-flex align-items-center">
      <a class="" href="">Home</a>
      <a class="" href="">Search</a>
      <a class="" href="">Top Wisata</a>
      <div class="dropdown">
        <button class="btn-dropdown dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          Help
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">FAQ</a></li>
          <li><a class="dropdown-item" href="#">Contact Us</a></li>
          <li><a class="dropdown-item" href="#">About</a></li>
        </ul>
      </div>
      <div class="button-stack">
        <a href="login.html">
          <button class="btn-outline">Login</button>
        </a>
      </div>
    </div>
  </nav>

  <div class="container-fluid" style="display:flex">
    <div class="img">
      <img src="assets\home-1.png" alt="">
      <h1 class="text-center">Take the first step towards your dream place</h1>
      <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti fugiat esse nisi praesentium blanditiis, aperiam cumque commodi. Fuga sit quidem inventore iste enim vitae quisquam, eius architecto! Facere, quibusdam sapiente.</p>
    </div>

    <form method="POST" action="">
      <h1 class="h1 mt-5 fw-normal text-center">Form Registrasi</h1>
      <div class="form-floating mt-3">
        <input type="text" class="form-control" name="fullname" required>
        <label for="floatingInput">Fullname</label>
      </div>
      <div class="form-floating mt-3">
        <input type="text" class="form-control" name="username" required>
        <label for="floatingInput">Username</label>
      </div>
      <div class="form-floating mt-3">
        <input type="email" class="form-control" name="email" required>
        <label for="floatingInput">Email</label>
      </div>
      <div class="form-floating mt-3">
        <input type="password" class="form-control" name="password" required>
        <label for="floatingInput">Password</label>
      </div>
      <div class="form-floating mt-3">
        <input type="password" class="form-control" name="confirm_password" required>
        <label for="floatingInput">Confirm Password</label>
      </div>
      <button class="w-100 btn btn-primary mt-3" value="registrasi" name="registrasi">
        Registrasi
      </button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>

</html>

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
      header("location: login.html");
    } else {
      echo "<script>alert('username sudah digunakan')</script>";
    }
  } else {
    echo "<p> Gagal </p>";
  }
}
?>