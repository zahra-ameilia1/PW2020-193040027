<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3B</title>
    <style>
        .kotak {
            box-shadow : 1px 1px 1px rgba(0,0,0,1);
            border : 2px solid black;

        }
    </style>
</head>
<body>
    <?php 
    $jawabanisset = "Isset adalah salah satu perintah php yang berfungsi untuk memeriksa sebuah objek dari form, apakah ada atau tidak nilai yang di lempar dari suatu form <br><br>";
    $jawabanempty = "Empty pada PHP berfungsi sebagai penanda suatu kondisi.";
    $GLOBALS ['Isset'] = $jawabanisset;
    $GLOBALS ['Empty'] = $jawabanempty;
        function soal($style){
            echo "<div class='$style'>
             <p>$GLOBALS[Isset]</p> 
             <p>$GLOBALS[Empty]</p>
             </div>";
         
        }
        ?>
        <?php
        echo soal("kotak");
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