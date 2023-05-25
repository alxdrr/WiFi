<?php
    $data = [
        "Tanah Lot" => [
            [
                "user" => "Ode Ardika",
                "date" => "2023-06-01",
                "review" => "<p> Tempatnya sangat bagus, Bersih tempatnya, Puranya bagus, sunset bagus"
            ],
            [
                "user" => "Andi",
                "date" => "2023-06-02",
                "review" => "<p> Banyak ada makanan enak, Tempatnya sangat bagus ada goa ular juga"
            ],
        ]
    ];
?>

<div id="list review">
    <table id="tabel review">
        <tr>
            <th>Date</th>
            <th>user</th>
            <th>review</th>
        </tr>
        <?php foreach($data["Tanah Lot"] as $review): ?>
        <tr>
            <td><?php echo $review["date"]?></td>
            <td><?php echo $review["user"]?></td >
            <td><?php echo $review["review"]?></td>
        </tr>
        <?php endforeach ?>
    </table>
</div>

