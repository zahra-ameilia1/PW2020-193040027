<?php 
    //Menghubungkan dengan file php lainnya
    require 'php/function.php';

    //Melakukan query
    $lauda = query("SELECT *FROM lauda")
?>

<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 5B</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!-- my css -->
      <link rel="stylesheet"  href="css/style.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <style>
        img{
            height: 250px;
        }
        td, h2{
            text-align: center;
        }
        h1{
            text-align: justify;
        }
        
    </style>
</head>
<body bgcolor="#fce4ec" id="home" class="scrollspy">
<div class="navbar-fixed">
    <nav>
        <div class="container">
      <div class="nav-wrapper">
        <a href="#home" class="brand-logo">Lauda</a>
        <ul class="right hide-on-med-and-down">
          <li><a href="https://www.google.com/maps/place/Kec.+Purwadadi,+Kabupaten+Subang,+Jawa+Barat/@-6.4408117,107.6143908,12z/data=!3m1!4b1!4m5!3m4!1s0x2e693ff1a7d60d21:0x6b2da51d11b2b4e7!8m2!3d-6.4435345!4d107.680727">Location</a></li>
          <li><a href="https://www.instagram.com/muhunbusanapwd/">Contact Us</a></li>
        </ul>
      </div>
      </div>
    </nav>
  </div>
    <div class="container">
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
        <?php foreach ($lauda as $l) : ?>
        <tr>
            <td align="center"><?= $i; ?></td>
            <td align="center"><img src="assets/img/<?= $l ["Gambar"]; ?>"></td>
            <td align="center"><?= $l ["Nama_Produk"]; ?></td>
            <td align="center"><?= $l ["Komposisi"]; ?></td>
            <td align="center"><?= $l ["Kadaluarsa"]; ?></td>
            <td align="center"><?= $l ["Harga"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach ?>
        </div>
    </table>

</body>
</html>