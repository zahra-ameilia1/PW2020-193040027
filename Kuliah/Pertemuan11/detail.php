<?php
require 'functions.php';

//ambil id dari URL
$id = $_GET['id'];

//query mahasiswa berdasarkan id
$m = query("SELECT * FROM mahasiswa WHERE id = $id");

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DETAIL MAHASISWA</title>
</head>

<body>
  <h3>Detail Mahasiswa</h3>
  <ul>
    <li><img src="img/<?= $m['Gambar']; ?>" width="100"></li>
    <li>NRP : <?= $m['NRP']; ?></li>
    <li>Nama : <?= $m['Nama']; ?></li>
    <li>Email : <?= $m['Email']; ?></li>
    <li>Jurusan : <?= $m['Jurusan']; ?></li>
    <li><a href="ubah.php?id=<?= $m['id'] ?>">Ubah</a> | <a href="hapus.php?id=<?= $m['id'] ?>" onclick="return confirm ('Apakah anda yakin menghapus data?')">Hapus</a></li>
    <li><a href="index.php">Kembali</a></li>
  </ul>
</body>

</html>