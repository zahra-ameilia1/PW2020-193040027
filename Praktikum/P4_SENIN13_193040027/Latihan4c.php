<?php
$pemainbola = [
    "Cristian Ronaldo" => "Juventus",
    "Lionel Messi" => "Barcelona",
    "Luca Modric" => "Real Madrid",
    "Mohammad Salah" => "Liverpool",
    "Neymar Jr" => "Paris Saint Germain",
    "Sadio Mane" => "Liverpool",
    "Zlatan Ibrahimovic" => "AC Milan",
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Associative</title>
    <style>
        tabel {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h4>Daftar Pemain Bola Terkenal dan Klubnya</h4>
    <table>
        <?php foreach ($pemainbola as $nama => $klub): ?>
            <tr>
                <td><b><?= "$nama";?></b></td>
                <td>:</td>
                <td><?= "$klub" ?></td>
            </tr>
            <?php endforeach ?>
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