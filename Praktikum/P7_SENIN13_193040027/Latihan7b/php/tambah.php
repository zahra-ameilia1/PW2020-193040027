<?php
require 'function.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('Data Berhasil Ditambahkan!');
            document.location.href = 'admin.php';
          </script>";
  } else {
    echo "<script>
            alert('Data Gagal Ditambahkan!');
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
  <title>TAMBAH DATA</title>
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
    <h4>FORM TAMBAH DATA MAKANAN</h4>
    <form action="" method="POST">
      <ul>
        <li>
          <label for="gambar">Gambar :</label>
          <input type="text" name="gambar" id="gambar" required><br><br>
        </li>
        <li>
          <label for="nama_produk">Nama Produk</label>
          <input type="text" name="nama_produk" id="nama_produk" required><br><br>
        </li>
        <li>
          <label for="komposisi">Komposisi :</label>
          <input type="text" name="komposisi" id="komposisi" required><br><br>
        </li>
        <li>
          <label for="kadaluarsa">Kadaluarsa :</label>
          <input type="text" name="kadaluarsa" id="kadaluarsa" required><br><br>
        </li>
        <li>
          <label for="harga">Harga :</label>
          <input type="text" name="harga" id="harga" required><br><br>
        </li>
        <br>
        <button type="submit" name="tambah">Tambah Data!</button>
        <button type="submit">
          <a href="admin.php">Kembali</a>
        </button>
      </ul>
    </form>
  </div>
</body>

</html>