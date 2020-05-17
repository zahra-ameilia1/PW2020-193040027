<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS 1</title>
</head>
<body>
    <table width="400px"cellspacing="0px" cellpadding="0px" border="1px">
        <?php
            for($r=1; $r <= 8; $r++){
               echo "<tr>";
               for($c=1; $c <= 8; $c++){
                   $hasil = $r + $c;
                   if($hasil%2==0){
                       echo "<td height=35px width=30px bgcolor=skyblue></td>";
                   }
                   else {
                       echo "<td height=35px width=30px bgcolor=salmon></td>";
                   }
               } 
               echo "</tr>";
            }
        ?>

    </table>

    <br>
    <table border=1 cellpadding=10>
        <tr>
            <td><a href="Index.php">INDEX</a></td>
        </tr>
    </table>
</body>
</html>