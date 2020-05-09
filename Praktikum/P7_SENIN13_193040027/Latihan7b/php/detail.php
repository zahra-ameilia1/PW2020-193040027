<?php

require 'function.php';

// mengambil id dari url
$id = $_GET['id'];

// mengecek apakah ada id yang dikirimkan
// jika tidak maka akan dikembalikan ke halaman index.php
// if (!isset($_GET['id'])) {
//     header("location: ../index.php");
//     exit;
// }





// melakukan query dengan parameter id yang diambil dari url
$lauda = query("SELECT * FROM lauda WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Latihan 5C</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />

    <!-- my css -->
    <link rel="stylesheet" href="../css/style.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <div class="navbar-fixed">
        <nav class="black">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="#!" class="brand-logo">TOKO LAUDA</a>
                </div>
            </div>
        </nav>
    </div>

    <div class="container">
        <div class="gambar">
            <center><img width="200px" src="../assets/img/<?= $lauda["gambar"]; ?>" ; alt=""></center>
        </div>
        <div class="keterangan">
            <p><?= $lauda["nama_produk"]; ?></p>
            <p><?= $lauda["komposisi"]; ?></p>
            <p><?= $lauda["kadaluarsa"]; ?></p>
            <p><?= $lauda["harga"]; ?></p>
        </div>

        <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>

</body>

</html>