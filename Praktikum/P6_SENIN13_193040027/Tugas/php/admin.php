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
  <title>Document</title>
</head>

<body>
  <div class="add">
    <a href="tambah.php">Tambah Data</a>
  </div>
  <form action="" method="GET">
    <input type="text" name="keyword" autofocus>
    <button type="submit" name="cari">Cari!</button>
  </form>
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
            <a href="hapus.php?id=<? $l['id'] ?>" onclick="return confirm('Hapus Data??')"><button>Hapus</button></a>
          </td>
          <td><img src="../assets/img/<?= $l['Gambar']; ?>" width="120"></td>
          <td><?= $l['Nama_Produk']; ?></td>
          <td><?= $l['Komposisi']; ?></td>
          <td><?= $l['Kadaluarsa']; ?></td>
          <td><?= $l['Harga']; ?></td>
        </tr>
        <?php $i++; ?>
      <?php endforeach; ?>
    <?php endif; ?>
  </table>
</body>

</html>