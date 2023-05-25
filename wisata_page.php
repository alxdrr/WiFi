<?php
    require "db.php";
    $place_name = $_GET["place"];
    $detail = get_detail_wisata($place_name);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "$place_name"?> | Page</title>
</head>
<body id="nilai" getNilai="<?php echo $place_name;?>">
    <img src="<?php echo "Tempat Wisata\\" . $place_name . "\\" . $place_name . "-1.jpg"; ?>" alt="">
    <h1><?php echo $detail["title"]?></h1>
    <h3>Alamat :</h3>
    <h5><?php echo $detail["address"] ?></h5>
    <h3>Harga Ticket : Rp <?php echo $detail["price"] ?></h3>
    <label id="event">Events</label>
    <div id="list event"></div><br>
    <label id="review">Reviews</label>
    <div id="list review"></div>
    <h3>Foto - Foto Tempat Wisatanya :</h3>
    <?php for($i = 1; $i <= 10; $i++): ?>
        <img src="<?php echo "Tempat Wisata\\" . $place_name . "\\" . $place_name . "-$i.jpg"; ?>" alt="error" width="25%">
    <?php endfor ?>

    <script src="js\function.js"></script>
</body>
</html>