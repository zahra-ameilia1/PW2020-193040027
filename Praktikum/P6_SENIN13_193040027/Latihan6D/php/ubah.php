<?php
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
  <title>Document</title>
</head>

<body>

  <h3>FORM UBAH MAKANAN</h3>
  <form action="" method="POST">
    <input type="hidden" name="id" id="id" value="<?= $l['id']; ?>">
    <ul>
      <li>
        <label for="Gambar">Gambar :</label>
        <input type="text" name="Gambar" id="Gambar" required value="<?= $l['Gambar']; ?>"><br><br>
      </li>
      <li>
        <label for="Nama_Produk">Nama Produk</label>
        <input type="text" name="Nama_Produk" id="Nama_Produk" required value="<?= $l['Nama_Produk']; ?>"><br><br>
      </li>
      <li>
        <label for="Komposisi">Komposisi :</label>
        <input type="text" name="Komposisi" id="Komposisi" required value="<?= $l['Komposisi']; ?>"><br><br>
      </li>
      <li>
        <label for="Kadaluarsa">Kadaluarsa :</label>
        <input type="text" name="Kadaluarsa" id="Kadaluarsa" required value="<?= $l['Kadaluarsa']; ?>"><br><br>
      </li>
      <li>
        <label for="Harga">Harga :</label>
        <input type="text" name="Harga" id="Harga" required value="<?= $l['Harga']; ?>"><br><br>
      </li>
      <br>
      <button type="submit" name="ubah">Ubah Data!</button>
      <button type="submit">
        <a href="index.php" style="text-decoration: none; color: black;">Kembali</a>
      </button>
    </ul>
  </form>
</body>

</html>