<?php
    $key = $_GET["place"];
    require "..\db.php";
    $reviews = get_review(str_replace("%"," ", $key));
?>

<div id="list review">
    <table id="tabel review">
        <tr>
            <th>Date</th>
            <th>user</th>
            <th>review</th>
        </tr>
        <?php foreach($reviews as $review): ?>
        <tr>
            <td><?php echo $review["date_review"]?></td>
            <td><?php echo $review["username"]?></td >
            <td><?php echo $review["reviews"]?></td>
        </tr>
        <?php endforeach ?>
    </table>
</div>

