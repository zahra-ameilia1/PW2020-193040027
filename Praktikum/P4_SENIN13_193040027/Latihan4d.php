<?php
$pemainbola = [
    [
    "nama" => "Cristian Ronaldo",
    "klub" => "Juventus",
    "main" => 100,
    "gol" => 76,
    "assist" => 30
    ],
    [
    "nama" => "Lionel Messi",
    "klub" => "Barcelona",
    "main" => 120,
    "gol" => 80,
    "assist" => 12
    ],
    [
    "nama" => "Luca Modric",
    "klub" => "Real Madrid",
    "main" => 87,
    "gol" => 12,
    "assist" => 48
    ],
    [
    "nama" => "Mohammad Salah",
    "klub" => "Real Madrid",
    "main" => 90,
    "gol" => 103,
    "assist" => 8
    ],
    [
    "nama" => "Neymar Jr",
    "klub" => "Paris Saint Germain",
    "main" => 109,
    "gol" => 56,
    "assist" => 15
    ],
    [
    "nama" => "Sadio Mane",
    "klub" => "Liverpool",
    "main" => 63,
    "gol" => 30,
    "assist" => 70
    ],
    [
    "nama" => "Zlatan Ibrahimovic",
    "klub" => "AC Milan",
    "main" => 100,
    "gol" => 10,
    "assist" => 12
    ],
];
$totalmain = 0;
$totalgol = 0;
$totalassist = 0;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pemain Terkenal</title>
    <style>
        table {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <td><b>NO</b></td>
            <td><b>NAMA</b></td>
            <td><b>KLUB</b></td>
            <td><b>MAIN</b></td>
            <td><b>GOL</b></td>
            <td><b>ASSIST</b></td>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($pemainbola as $p) : ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $p ["nama"] ?></td>
                <td><?= $p ["klub"] ?></td>
                <td><?= $p ["main"]?></td>
                <td><?= $p ["gol"] ?></td>
                <td><?= $p ["assist"] ?></td>
            </tr>
            <?php $i++;
            $totalmain += $p ["main"];
            $totalgol += $p ["gol"];
            $totalassist += $p ["assist"];
            ?>
        <?php endforeach ?>
    </tr>
    <tr>
        <td>#</td>
        <td colspan= "2"><b><center>Jumlah</center></b></td>
        <td><?= $totalmain ?></td>
        <td><?= $totalgol ?></td>
        <td><?= $totalassist ?></td>
    </tr>
    </table>
    <br>
    <br>
    <table border=1 cellpadding=10>
        <tr>
            <td><a href="Index.php">INDEX</a></td>
        </tr>
    </table>
</body>
</html>