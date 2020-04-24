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
  <title>Document</title>
</head>

<body>
  <h3>FORM DATA MAKANAN</h3>
  <form action="" method="POST">
    <ul>
      <li>
        <label for="Gambar">Gambar :</label>
        <input type="text" name="Gambar" id="Gambar" required><br><br>
      </li>
      <li>
        <label for="Nama_Produk">Nama Produk</label>
        <input type="text" name="Nama_Produk" id="Nama_Produk" required><br><br>
      </li>
      <li>
        <label for="Komposisi">Komposisi :</label>
        <input type="text" name="Komposisi" id="Komposisi" required><br><br>
      </li>
      <li>
        <label for="Kadaluarsa">Kadaluarsa :</label>
        <input type="text" name="Kadaluarsa" id="Kadaluarsa" required><br><br>
      </li>
      <li>
        <label for="Harga">Harga :</label>
        <input type="text" name="Harga" id="Harga" required><br><br>
      </li>
      <br>
      <button type="submit" name="tambah">Tambah Data!</button>
      <button type="submit">
        <a href="index.php" style="text-decoration: none; color: black;">Kembali</a>
      </button>
    </ul>
  </form>
</body>

</html>