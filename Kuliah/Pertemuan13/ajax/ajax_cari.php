<?php

require '../functions.php';
$mahasiswa = cari($_GET['keyword']);
?>

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
      <td><?= $m['id']; ?></td>
      <td><img src="img/<?= $m['gambar']; ?>" width="60"></td>
      <td><?= $m['nama']; ?></td>
      <td>
        <a href="detail.php?id=<?= $m['id']; ?>">Lihat Detail</a>
      </td>
    </tr>
  <?php endforeach; ?>
</table>