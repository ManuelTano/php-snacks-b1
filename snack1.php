<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php
$games = [
    ['home' => 'Los Angeles Lakers', 'away' => 'Chicago Bulls', 'homescore' => '122', 'awayscore' => '110' ],
    ['home' => 'Golden State Warrios', 'away' => 'New York Knicks', 'homescore' => '95', 'awayscore' => '98' ],
    ['home' => 'San Antonio Spurs', 'away' => 'Miami Heat', 'homescore' => '115', 'awayscore' => '113' ],
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
    <h2>Prima giornata NBA</h2>
    <ul>
        <li>
            <?php for ($i = 0; $i < count($games); $i++) : ?>
            <span><?= $games[$i]['home'] ?></span>
            <span>-</span>
            <span><?= $games[$i]['away']  ?></span>
            <span>|</span>
            <span><?= $games[$i]['homescore'] ?></span>
            <span>-</span>
            <span><?= $games[$i]['awayscore'] ?></span> <br>
        </li>
            <?php endfor; ?>
    </ul>
</body>
</html>