<?php
    $data = [
        "Tanah Lot" => [
            [
                "name" => "Tanah Lot Arts Festival",
                "date" => "Start: 2023-06-01 End: 2023-06-30",
                "detail" => "<p>The town of Tabanan, Bali is home to Tanah Lot Temple. A beautiful and magnificent temple standing on an offshore island. Right in the northwestern of Denpasar. Thousands of tourist visit this site every year. Then the government thought of an upgrade. That's how Tanah Lot Arts Festival started.".
                            "<p>The target was 55,000 thousand visitors. It also introduces a massive performance by 1800 dancers called Rejang Sandat. Tanah Lot Arts Festival runs for three days showcasing numerous cultural Tabanan heritage.".
                            "<p>While the schedule isn't limited to arts, it also has culinary sections. Where the coffee festival will also take part, it exhibits local coffee varieties as well as talented baristas from coffee shops across the city.",
            ],
            [
                "name" => "Tanah Lot Arts Festival",
                "date" => "Start: 2023-06-01 End: 2023-06-30",
                "detail" => "<p>The town of Tabanan, Bali is home to Tanah Lot Temple. A beautiful and magnificent temple standing on an offshore island. Right in the northwestern of Denpasar. Thousands of tourist visit this site every year. Then the government thought of an upgrade. That's how Tanah Lot Arts Festival started.".
                            "<p>The target was 55,000 thousand visitors. It also introduces a massive performance by 1800 dancers called Rejang Sandat. Tanah Lot Arts Festival runs for three days showcasing numerous cultural Tabanan heritage.".
                            "<p>While the schedule isn't limited to arts, it also has culinary sections. Where the coffee festival will also take part, it exhibits local coffee varieties as well as talented baristas from coffee shops across the city.",
            ],
        ]
    ];
?>

<div id="list review">
    <table id="tabel review">
        <tr>
            <th>Date</th>
            <th>Event Name</th>
            <th>Detail</th>
        </tr>
        <?php foreach($data["Tanah Lot"] as $event): ?>
        <tr>
            <td><?php echo $event["date"]?></td >
            <td><?php echo $event["name"]?></td>
            <td><?php echo $event["detail"]?></td>
        </tr>
        <?php endforeach ?>
    </table>
</div>

