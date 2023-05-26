<?php
require "db.php";
require "function.php";

$sql = "SELECT * FROM users";
$arrUser = get_query($sql);

if (isset($_POST['submit'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "SELECT COUNT(*) AS sum FROM `users` WHERE username = '$user' AND password = '$pass'";
    $arrLogin = get_query($sql);

    if ($arrLogin[0]['sum'] == '1') {
        header("location: index.html");
    }
    $_SESSION['save'] = $user;
}
?>