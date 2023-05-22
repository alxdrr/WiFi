<?php
            if (isset($_POST["submit"])){
                if ($_POST['password'] === $_POST['confirm_password']){
                    echo "<p> Success </p>";
                } else{
                    echo "<p> Gagal </p>";
                }
            }
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <link rel="icon" href="html/assets/Logo.png" />
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
    <nav class="nav container-fluid" style="background-color: var(--secondary-color);">
      <img src="html/assets/Brand.png" alt="" />
      <div class="nav-items">
        <a class="" href="">Home</a>
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
        <button class="btn-outline">Login</button>
      </div>
    </nav>
    
    <div class="container" style="display: flex;"> 
    <div class="copy-image">
        <img src="html/assets/gwk.png" alt="">
        <h1>Take the first step towards your dream place</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti fugiat esse nisi praesentium blanditiis, aperiam cumque commodi. Fuga sit quidem inventore iste enim vitae quisquam, eius architecto! Facere, quibusdam sapiente.</p>
    </div>

    <div class="form">
      <form action="">
        <div class="input">
            Fullname
            <input type="text">
        </div>
        <div class="input">
            Username
            <input type="text">
        </div>
        <div class="input">
            Email
            <input type="email">
        </div>
        <div class="input">
            Password
            <input type="password">
        </div>
        <div class="input">
            Re-enter Password
            <input type="password">
        </div>
        <button>
        </button>
      </form>
    </div>
  </div>

    
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