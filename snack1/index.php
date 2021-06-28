## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60

<?php 
    $match = [
        [
            "home" => "Hawks",
            "guest" => "Bucks",
            "home-score" => '102',
            "guest-score" => "113"
        ],
        [
            "home" => "Clippers",
            "guest" => "Suns",
            "home-score" => '80',
            "guest-score" => "84"
        ],
        [
            "home" => "Lakers",
            "guest" => "Knicks",
            "home-score" => '109',
            "guest-score" => "95"
        ]
    ]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php
        for ($i = 0; $i < count($match); $i++) {
            
            echo $match[$i]["home"] . " - " . $match[$i]["guest"] . " | " . $match[$i]["home-score"] . " - " . $match[$i]["guest-score"] . "<br>";

        }
    ?></p>
</body>
</html>
