<?php

function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'pw_193040027');
}

function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);

  //jika hasilnya hanya satu
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }


  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function tambah($data)
{
  $conn = koneksi();
  $nama = htmlspecialchars($data['Nama']);
  $nrp = htmlspecialchars($data['NRP']);
  $email = htmlspecialchars($data['Email']);
  $jurusan = htmlspecialchars($data['Jurusan']);
  $gambar = htmlspecialchars($data['Gambar']);

  $query = "INSERT INTO
              mahasiswa
            VALUES
            (null,'$nama','$nrp','$email','$jurusan','$gambar');
            ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = koneksi();

  $id = ($data['ID']);
  $nama = htmlspecialchars($data['Nama']);
  $nrp = htmlspecialchars($data['NRP']);
  $email = htmlspecialchars($data['Email']);
  $jurusan = htmlspecialchars($data['Jurusan']);
  $gambar = htmlspecialchars($data['Gambar']);

  $query = "UPDATE mahasiswa SET
            Nama = '$nama',
            NRP = '$nrp',
            Email = '$email',
            Jurusan = '$jurusan',
            Gambar = '$gambar'
          WHERE id = $id";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function cari($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM mahasiswa
            WHERE nama LIKE '%keyword%'";

  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}
