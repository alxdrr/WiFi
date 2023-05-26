<?php
    $key = $_GET["place"];
    require "..\db.php";
    $events = get_events(str_replace("%"," ", $key));
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
    <?php foreach($events as $event): ?>
    <h1 class="e-title"><?php echo $event["event_name"]?></h1>
    <h1 class="e-date"><?php echo $event["event_date"]?></h1>
    <h1 class="e-desc"><?php echo $event["detail"]?></h1>
    <?php endforeach ?>  
</body>


