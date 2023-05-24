<?php

$host = "localhost";
$name = "wisata_finder";
$user = "root";
$pass = "";
$conn = mysqli_connect($host, $user, $pass, $name);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
