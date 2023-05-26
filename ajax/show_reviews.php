<?php
    $key = $_GET["place"];
    require "..\db.php";
    $reviews = get_review(str_replace("%"," ", $key));
?>
<head>
    <link rel="stylesheet" href="assets/css/wisata.css" />
    <link rel="stylesheet" href="assets/css/root.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
</head>

<body>
    <?php foreach($reviews as $review): ?>
        <h1 class="r-name"><?php echo $review["username"]?></h1>
        <h1 class="r-review"><?php echo $review["reviews"]?></h1>
        <h1 class="r-date"><?php echo $review["date_review"]?></h1>
    <?php endforeach ?> 
</body>



