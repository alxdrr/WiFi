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
</head>
<body>
    <form method="post" action="">
        <input type="text" placeholder="Nama" name="nama">
        <input type="text" placeholder="Username" name="username">
        <input type="email" placeholder="Email" name="email">
        <input type="number" placeholder="No. Telp" name="number">
        <input type="password" placeholder="Password" name="password">
        <input type="password" placeholder="Confirm Password" name="confirm_password">
        <input type="submit" name="submit">
    </form>
    
</body>
</html>