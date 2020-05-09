<?php
//Menghubungkan dengan file php lainnya
require 'php/function.php';

if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $lauda = query("SELECT * FROM lauda WHERE
                Nama_Produk LIKE '%$keyword%' OR
                Komposisi LIKE '%$keyword%' OR
                Kadaluarsa LIKE '%$keyword%' OR
                Harga LIKE '%$keyword%' ");
} else {
  $lauda = query("SELECT * FROM lauda");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 7A</title>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

  <!-- my css -->
  <link rel="stylesheet" href="css/style.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body id="home" class="scrollspy">
  <div class="navbar-fixed">
    <nav class="black">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#!" class="brand-logo">TOKO LAUDA</a>
          <ul class="right hide-on-med-and-down">
            <li>
              <a href="php/login.php" class="waves-effect waves-light btn">LOGIN</a>
            </li>
          </ul>
        </div>
    </nav>
  </div>
  <div class="container">
    <br>
    <br>
    <form action="" method="GET">
      <input type="text" name="keyword" autofocus>
      <a class="waves-effect waves-light btn"><i class="material-icons left">search</i>FIND</a>
    </form>
    <br>
    <br>
    <?php if (empty($lauda)) : ?>
      <tr>
        <td colspan="2">
          <h1>DATA TIDAK DITEMUKAN</h1>
        </td>
      </tr>
    <?php else : ?>
      <?php foreach ($lauda as $l) : ?>
        <p class="nama">
          <a href="php/detail.php?id=<?= $l['id'] ?>">
            <?= $l["nama_produk"] ?>
          </a>
        </p>
      <?php endforeach; ?>
    <?php endif ?>
  </div>
  </div>
  </div>
</body>

</html>