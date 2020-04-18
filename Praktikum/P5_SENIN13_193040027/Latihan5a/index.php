<?php
    //Koneksi ke Database
    $conn = mysqli_connect("localhost", "root", "") or die ("Koneksi ke DB Gagal");

    //Memilih Database
    mysqli_select_db($conn, "tubes_193040027") or die ("Database Salah!"); 

    //Query Mengambil Objek Dari Tabel Didalam Database
    $result = mysqli_query($conn, "SELECT * from lauda"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2</title>
    <style>
        table {
            border: 1px solid black;
        }
        td, h2 {
            text-align: center;
        }
        h1 {
            text-align: justify;
        }
        img {
            height: 250px;
        }
    </style>
</head>
<body>
    <h1>TOKO LAUDA</h1>
    <table border="1" cellpadding="3" cellspacing="0">
        <tr>
            <td align="center"><b>No.</b></td>
            <td align="center"><b>Foto</b></td>
            <td align="center"><b>Nama Makanan</b></td>
            <td align="center"><b>Komposisi</b></td>
            <td align="center"><b>Kadaluarsa</b></td>
            <td align="center"><b>Harga (Rp.)</b></td>
        </tr>
        <?php $i = 1; ?>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td align="center"><?= $i; ?></td>
            <td align="center"><img src="assets/img/<?= $row["Gambar"]; ?>"></td>
            <td align="center"><?= $row ["Nama_Produk"]; ?></td>
            <td align="center"><?= $row ["Komposisi"]; ?></td>
            <td align="center"><?= $row ["Kadaluarsa"]; ?></td>
            <td align="center"><?= $row ["Harga"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endwhile ?>
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