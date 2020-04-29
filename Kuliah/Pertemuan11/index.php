<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

//ketika tombol cari di klik
if (isset($_POST['cari'])) {
  cari($_POST['keyword']);
}

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

  <a href="tambah.php">Tambah Data Mahasiswa</a>
  <br><br>

  <form action="" method="POST">
    <input type="text" name="keyword" size="50" placeholder="Masukkan Keyword Pencarian.." autocomplete="off" autofocus>
    <button type="submit" name="cari">Cari!</button>
  </form>
  <br>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>Nama</th>
      <th>Aksi</th>
    </tr>

    <?php if (empty($mahasiswa)) : ?>

      <tr>
        <td colspan="4">
          <p>Data Tidak Ditemukan!</p>
        </td>
      </tr>

    <?php endif; ?>

    <?php foreach ($mahasiswa as $m) : ?>
      <tr>
        <td><?= $m['ID']; ?></td>
        <td><img src="img/<?= $m['Gambar']; ?>" width="60"></td>
        <td><?= $m['Nama']; ?></td>
        <td>
          <a href="detail.php?id=<?= $m['ID']; ?>">Lihat Detail</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>

</body>

</html>