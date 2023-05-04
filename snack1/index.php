<?php

$matches = [
    [
        "home" => "Banco di Sardegna Sassari",
        "away" => "Bertram Yachts Derthona Tortona",
        "homePoint" => rand(50, 150),
        "awayPoint" => rand(50, 150),
    ],
    [
        "home" => "Carpegna Prosciutto Pesaro",
        "away" => "Dolomiti Energia Trentino",
        "homePoint" => rand(50, 150),
        "awayPoint" => rand(50, 150),
    ],
    [
        "home" => "EA7 Emporio Armani Milano",
        "away" => "Germani Brescia",
        "homePoint" => rand(50, 150),
        "awayPoint" => rand(50, 150),
    ],
    [
        "home" => "GeVi Napoli Basket",
        "away" => "Givova Scafati",
        "homePoint" => rand(50, 150),
        "awayPoint" => rand(50, 150),
    ],
]

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack1</title>
</head>

<body>
    <?php foreach ($matches as $match) : ?>
        <p><?= $match["home"] . " - " . $match["homePoint"] . " | " . $match["awayPoint"] . " - " . $match["away"] ?></p>
    <?php endforeach; ?>
</body>

</html>