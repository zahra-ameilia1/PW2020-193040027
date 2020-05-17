<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3A</title>
<style>
.tulisan {
    font-family : arial;
    color : #8c782d;
    font-size : 30px;
    font-weight : bold;
    font-style : italic;
    text-align : center;
}

.kotak {
    box-shadow : 10px 10px 10px rgba(0,0,0,0.5);
    border : 3px solid black;
    border-radius : 10px;
}
</style>
</head>
<body>
<?php
    function ganti_Style($tulisan, $style1, $style2){
        echo "<div class='$style2'>
        <p class='$style1'>$tulisan</p>
        </div>";
     
    } ?>
    <?php
    echo ganti_Style("Selamat datang di praktikum PW 2020","kotak","tulisan");
?>
<br>
<br>
    <table border=1 cellpadding=10>
        <tr>
            <td><a href="Index.php">INDEX</a></td>
        </tr>
    </table>
</body>
</html>