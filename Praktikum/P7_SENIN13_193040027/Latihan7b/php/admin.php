<?php
//menghubungkan dengan file php lainnya
require 'function.php';

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
  <meta name="viewport" content="width=, initial-scale=1.0">
  <title>LATIHAN 7A</title>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />

  <!-- my css -->
  <link rel="stylesheet" href="css/style.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>

  <div class="navbar-fixed">
    <nav class="black">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#!" class="brand-logo">TOKO LAUDA</a>
          <ul class="right hide-on-med-and-down">
            <li><a href="tambah.php">Tambah Data</a></li>
            <li><a href="logout.php">LOGOUT</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>


  <div class="container">
    <br>
    <br>
    <form action="" method="GET">
      <input type="text" name="keyword" autofocus>
      <button type="submit" name="cari">Cari!</button>
    </form>
    <br>
    <br>
    <table border="1" cellpadding="13" cellspacing="0">
      <tr>
        <th>#</th>
        <th>Opsi</th>
        <th>Gambar</th>
        <th>Nama Produk</th>
        <th>Komposisi</th>
        <th>Kadaluarsa</th>
        <th>Harga</th>
      </tr>
      <?php if (empty($lauda)) : ?>
        <tr>
          <td colspan="2">
            <h1>DATA TIDAK DITEMUKAN</h1>
          </td>
        </tr>
      <?php else : ?>
        <?php $i = 1; ?>
        <?php foreach ($lauda as $l) : ?>
          <tr>
            <td><?= $i; ?></td>
            <td>
              <a href="ubah.php?id=<?= $l['id'] ?>"><button>Ubah</button></a>
              <a href="hapus.php?id=<?= $l['id'] ?>" onclick="return confirm('Hapus Data??')"><button>Hapus</button></a>
            </td>
            <td><img src="../assets/img/<?= $l['gambar']; ?>" width="120"></td>
            <td><?= $l['nama_produk']; ?></td>
            <td><?= $l['komposisi']; ?></td>
            <td><?= $l['kadaluarsa']; ?></td>
            <td><?= $l['harga']; ?></td>
          </tr>
          <?php $i++; ?>
        <?php endforeach; ?>
      <?php endif; ?>
    </table>
  </div>
</body>

</html>