<?php
    //Kirim Data kesini masuk
    //$place_name = $_POST["place_name"];
    //sementara
    $place_name = "GWK";
    $data = [
        "GWK" => [
            "title" => "Garuda Wisnu Kencana",
            "address" => "Jl. Raya Uluwatu, Ungasan, Kuta Sel, Kabupaten Badung, Bali",
        ],
        "Tanah Lot" => [
            "title" => "Pantai Tanah Lot",
            "address" => "Br. Beraban, Kec. Kediri, Kabupaten Tabanan, Bali",
        ],
    ];
    $selected_data = $data[$place_name]; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "$place_name"?> | Page</title>
</head>
<body>
    <img src="<?php echo "Tempat Wisata\\" . $place_name . "\\" . $place_name . "-1.jpg"; ?>" alt="">
    <h1><?php echo $selected_data["title"]?></h1>
    <h3>Alamat :</h3>
    <h5><?php echo $selected_data["address"] ?></h5>
    <h3>Foto - Foto Tempat Wisatanya :</h3>
    <?php for($i = 1; $i <= 10; $i++): ?>
        <img src="<?php echo "Tempat Wisata\\" . $place_name . "\\" . $place_name . "-$i.jpg"; ?>" alt="error" width="25%">
    <?php endfor ?>
</body>
</html>