<?php
$a = "A";
$b = "B";
$c = "C";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Bulat</title>

    <style>
    .lingkaran {
        height: 50px;
        width: 50px;
        border: 2px solid black;
        background-color: salmon;
        text-align: center;
        margin: 2px;
        line-height: 50px;
        float: left;
        border-radius: 100px; 
    }
    .clear {
        clear: both;
    }
    </style>
</head>
<body>
<!-- Baris 1 -->
<div class="lingkaran"><?php echo $a?></div>
<div class="clear"></div>

<!-- Baris 2 -->
<div class="lingkaran"><?php echo $b?></div>
<div class="lingkaran"><?php echo $b?></div>
<div class="clear"></div>

<!-- Baris 3 -->
<div class="lingkaran"><?php echo $c?></div>
<div class="lingkaran"><?php echo $c?></div>
<div class="lingkaran"><?php echo $c?></div>
<div class="clear"></div>

</body>
</html>