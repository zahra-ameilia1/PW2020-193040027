<?php

session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

require 'function.php';

$id = $_GET['id'];

$l = query("SELECT * FROM lauda WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
            alert('Data Berhasil Diubah!');
            document.location.href = 'admin.php';
          </script>";
  } else {
    echo "<script>
            alert('Data Gagal Diubah!');
            document.location.href = 'admin.php';
          </script>";
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UBAH DATA</title>
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
        </div>
      </div>
    </nav>
  </div>

  <div class="container">
    <h3>FORM UBAH DATA MAKANAN</h3>
    <form action="" method="POST">
      <input type="hidden" name="id" id="id" value="<?= $l['id']; ?>">
      <ul>
        <li>
          <label for="gambar">Gambar :</label>
          <input type="text" name="gambar" id="gambar" required value="<?= $l['gambar']; ?>"><br><br>
        </li>
        <li>
          <label for="nama_produk">Nama Produk</label>
          <input type="text" name="nama_produk" id="nama_produk" required value="<?= $l['nama_produk']; ?>"><br><br>
        </li>
        <li>
          <label for="komposisi">Komposisi :</label>
          <input type="text" name="komposisi" id="komposisi" required value="<?= $l['komposisi']; ?>"><br><br>
        </li>
        <li>
          <label for="kadaluarsa">Kadaluarsa :</label>
          <input type="text" name="kadaluarsa" id="kadaluarsa" required value="<?= $l['kadaluarsa']; ?>"><br><br>
        </li>
        <li>
          <label for="harga">Harga :</label>
          <input type="text" name="harga" id="harga" required value="<?= $l['harga']; ?>"><br><br>
        </li>
        <br>
        <button type="submit" name="ubah">Ubah Data!</button>
        <button type="submit">
          <a href="admin.php">Kembali</a>
        </button>
      </ul>
    </form>
  </div>
</body>

</html>