<?php

$pemainbola = ["Mohammad Salah", "Cristiano Ronaldo", "Lionel Messi", "Zlatan Ibrahimovic", "Neymar Jr"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemain Bola Terkenal</title>
</head>
<body>
    <h4>Daftar Pemain Bola Terkenal</h4>
    <ol>
    <?php foreach ($pemainbola as $nama):?>
        <li><?= $nama ?></li>
    <?php endforeach; ?>
    </ol>
    <br>
    <?php
        $pemainbola[]="Luca Modric";
        $pemainbola[] = "Sadio Mane";
        sort($pemainbola)
    ?>

    <h4>Daftar Pemain Bola Terbaru</h4>
    <ol>
        <?php foreach ($pemainbola as $nama): ?>
            <li><?php echo $nama; ?></li>
        <?php endforeach; ?>
    </ol>
    <br>
    <br>
    <table border=1 cellpadding=10>
        <tr>
            <td><a href="Index.php">INDEX</a></td>
        </tr>
    </table>
</body>
</html>