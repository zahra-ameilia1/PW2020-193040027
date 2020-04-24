<?php
//Menghubungkan dengan file php lainnya
require 'php/function.php';

//Melakukan query
$lauda = query("SELECT * FROM lauda")
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 6B</title>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

  <!-- my css -->
  <link rel="stylesheet" href="css/style.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body bgcolor="#fce4ec" id="home" class="scrollspy">
  <div class="navbar-fixed">
    <nav>
      <div class="container">
        <div class="nav-wrapper">
          <a href="#!" class="brand-logo">Lauda</a>
          <ul class="right hide-on-med-and-down">
            <li><a href="sass.html">Sass</a></li>
            <li><a href="badges.html">Components</a></li>
          </ul>
        </div>
    </nav>
  </div>
  <?php foreach ($lauda as $l) : ?>
    <p class="nama">
      <a href="php/detail.php?id=<?= $l['id'] ?>">
        <?= $l["Nama_Produk"] ?>
      </a>
    </p>
  <?php endforeach; ?>
  </div>
  </div>
</body>

</html>