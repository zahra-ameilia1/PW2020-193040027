<?php
$a = "1";
$b = "2";
$c = "3";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Lingkarans</title>

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
<?php
    for ($i = 1; $i <= 3; $i++) {
        for ($k = 1; $k <= $i; $k++) {
        echo '<div class="lingkaran">' . $k . '</div>';
        }
        echo '<div class="clear"></div>';
    }
?>
    <br>
    <table border=1 cellpadding=10>
        <tr>
            <td><a href="Index.php">INDEX</a></td>
        </tr>
    </table>
</body>
</html>