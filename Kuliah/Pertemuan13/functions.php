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

//fungsi upload
function upload()
{
  $nama_file = $_FILES['gambar']['name'];
  $tipe_file = $_FILES['gambar']['type'];
  $ukuran_file = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmp_file = $_FILES['gambar']['tmp_name'];

  //Ketika tidak ada gambar yang dipilih
  if ($error == 4) {
    //echo "<script>
    //    alert('pilih gambar terlebih dahulu!');
    //  </script>";
    return 'non.png';
  }

  //CEK EKSTENSI FILE
  $daftar_gambar = ['jpg', 'jpeg', 'png'];
  $ekstensi_file = explode('.', $nama_file);
  $ekstensi_file = strtolower(end($ekstensi_file));
  if (!in_array($ekstensi_file, $daftar_gambar)) {
    echo "<script>
        alert('Yang anda pilih bukan gambar!');
      </script>";
    return false;
  }

  //CEK TIPE FILE
  if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
    echo "<script>
        alert('Yang anda pilih bukan gambar!');
      </script>";
    return false;
  }

  //UKURAN FILE
  //MAKSIMAL 5MB
  if ($ukuran_file > 5000000) {
    echo "<script>
        alert('Ukuran terlalu besar!');
      </script>";
    return false;
  }

  //LOLOS PENGECEKAN
  //SIAP UPLOAD FILE
  //GENERATE NAMA FILE
  $nama_file_baru = uniqid();
  $nama_file_baru .= '.';
  $nama_file_baru .= $ekstensi_file;
  move_uploaded_file($tmp_file, 'img/' . $nama_file_baru);

  return $nama_file_baru;
}

function tambah($data)
{
  $conn = koneksi();
  $nama = htmlspecialchars($data['nama']);
  $nrp = htmlspecialchars($data['nrp']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);
  //$gambar = htmlspecialchars($data['gambar']);

  //upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  if ($gambar == 'non.png') {
    $gambar = $gambar_lama;
  }

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

  //MENGHAPUS GAMBAR DI FOLDER IMG
  $mhs = query("SELECT * FROM mahasiswa WHERE id = $id");
  if ($mhs['gambar'] != 'non.png') {
    unlink('img/' . $mhs['gambar']);
  }


  mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = koneksi();

  $id = ($data['id']);
  $nama = htmlspecialchars($data['Nama']);
  $nrp = htmlspecialchars($data['NRP']);
  $email = htmlspecialchars($data['Email']);
  $jurusan = htmlspecialchars($data['Jurusan']);
  $gambar_lama = htmlspecialchars($data['gambar_lama']);

  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  $query = "UPDATE mahasiswa SET
            nama = '$nama',
            nrp = '$nrp',
            email = '$email',
            jurusan = '$jurusan',
            gambar = '$gambar'
          WHERE id = $id";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function cari($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM mahasiswa
            WHERE Nama LIKE '%$keyword%'";

  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function login($data)
{
  $conn = koneksi();


  $username = htmlspecialchars($data['username']);
  $password = htmlspecialchars($data['password']);


  //CEK USERNAME
  if ($user = query("SELECT * FROM user WHERE username = '$username'")) {
    //CEK PASSWORD
    if (password_verify($password, $user['password'])) {
      //SET SESSION
      $_SESSION['login'] = true;

      header('Location: index.php');
      exit;
    }
  }
  return [
    'error' => true,
    'pesan' => 'Username / Password Salah!'
  ];
}

function registrasi($data)
{
  $conn = koneksi();

  $username = htmlspecialchars(strtolower($data['username']));
  $password1 = mysqli_real_escape_string($conn, $data['password1']);
  $password2 = mysqli_real_escape_string($conn, $data['password2']);


  //JIKA USERNAME ATAU PASSWORD KOSONG
  if (empty($username) || empty($password1) || empty($password2)) {
    echo "<script>
            alert('username / password tidak boleh kosong!');
            document.location.href = 'registrasi.php'
         </script>";
    return false;
  }

  //JIKA USERNAME SUDAH ADA
  if (query("SELECT * FROM user WHERE username = '$username'")) {
    echo "<script>
            alert('username sudah ada!');
            document.location.href = 'registrasi.php'
         </script>";
    return false;
  }

  //JIKA KONFIRMASI PASSWORD TIDAK SESUAI
  if ($password1 !== $password2) {
    echo "<script>
            alert('konfirmasi password tidak sesuai!');
            document.location.href = 'registrasi.php'
         </script>";
    return false;
  }


  //JIKA PASSWORD LEBIH KECIL DARI 5 DIGIT
  if (strlen($password1) < 5) {
    echo "<script>
            alert('password terlalu pendek!');
            document.location.href = 'registrasi.php'
         </script>";
    return false;
  }

  //JIKA PASSWORD DAN USERNAME SUDAH SESUAI
  //ENKRIPSI PASSWORD
  $password_baru = password_hash($password1, PASSWORD_DEFAULT);

  //INSERT KE TABLE USER
  $query = "INSERT INTO user
            VALUES
          (null, '$username','$password_baru')
          ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}
