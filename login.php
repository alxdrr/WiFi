<?php
require "function.php";
if (isset($_POST['submit'])) {
  check_login($_POST['username'],$_POST['password']);
}


?>
<html>
  <head>
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
    <link rel="stylesheet" href="assets/css/login.css" />
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
        <a class="" href="index.html">Home</a>
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
        <a href="registrasi.php"><button class="btn-solid">Sign Up</button></a>
      </div>
    </nav>

    <main class="form-signin container-fluid">
      <form method="post" action="login.php">
        <h1 class="text display-1 fw-bold">Login</h1>
        <div class="form-floating">
          <input
            required
            type="text"
            name="username"
            class="form-control"
            id="floatingInput"
          />
          <label for="floatingInput">Username</label>
        </div>
        <div class="form-floating">
          <input
            required
            type="password"
            name="password"
            class="form-control"
            id="floatingPassword"
          />
          <label for="floatingPassword">Password</label>
        </div>
        <div class="checkbox text-start">
          <label>
            <input type="checkbox" name="remember" value="remember-me" />
            Remember me
          </label>
        </div>
        <button
          class="w-100 btn btn-lg btn-primary"
          type="submit"
          name="submit"
        >
          Login
        </button>
        <div class="div">
          <label class="" for=""
            >Don't have account?
            <a href="registrasi.php"> Register Here </a>
          </label>
        </div>
        <p class="text-body-secondary mt-5 mb-2">
          &copy; 2023 Wisata Find, All Rights Reserved.
        </p>
      </form>

      <div class="img">
        <img src="assets\image\regist.png" alt="" />
        <h1 class="header">
          Experience the magic of Bali at your fingertips with our user-friendly
          login feature.
        </h1>
      </div>
    </main>


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
