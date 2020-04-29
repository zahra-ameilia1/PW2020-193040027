<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>

  <H3>Daftar Mahasiswa</H3>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>NRP</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
      <th>Aksi</th>
    </tr>

    <?php foreach ($mahasiswa as $m) : ?>
      <tr>
        <td><?= $m['ID']; ?></td>
        <td><img src="img/<?= $m['Gambar']; ?>" width="60"></td>
        <td><?= $m['NRP']; ?></td>
        <td><?= $m['Nama']; ?></td>
        <td><?= $m['Email']; ?></td>
        <td><?= $m['Jurusan']; ?></td>
        <td>
          <a href="">Ubah</a> | <a href="">Hapus</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>

</body>

</html>