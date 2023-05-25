<?php
    $key = $_GET["place"];
    require "..\db.php";
    $events = get_events(str_replace("%"," ", $key));
?>

<div id="list review">
    <table id="tabel review">
        <tr>
            <th>Date</th>
            <th>Event Name</th>
            <th>Detail</th>
        </tr>
        <?php foreach($events as $event): ?>
        <tr>
            <td><?php echo $event["event_date"]?></td >
            <td><?php echo $event["event_name"]?></td>
            <td><?php echo $event["detail"]?></td>
        </tr>
        <?php endforeach ?>
    </table>
</div>

