<?php
session_start();
require 'function.php';

//Melakukan pengecekan apakah user sudah melakukan Login jika sudah redirect ke halaman admin
if (isset($_SESSION['username'])) {
  header("Location: admin.php");
  exit;
}

//LOGIN
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");

  //mencocokkan USERNAME dan PASSWORD
  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if ($password == $row['password']) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = $row['id'];
    }
    if ($row['id'] == $_SESSION['hash']) {
      header("Location: admin.php");
      die;
    }
    header("Location: ../index.php");
    die;
  }
  $error = true;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LOGIN</title>
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
    <form action="" method="POST">
      <?php if (isset($error)) : ?>
        <p style="color: red; font-style: italic;">Username atau Password Salah!</p>
      <?php endif; ?>
      <table>
        <tr>
          <td><label for="username">Username</label></td>
          <td>:</td>
          <td><input type="text" name="username"></td>
        </tr>
        <tr>
          <td><label for="password">Password</label></td>
          <td>:</td>
          <td><input type="password" name="password"></td>
        </tr>
      </table>
      <p>
        <label>
          <input type="checkbox" class="filled-in" checked="checked" name="remember" />
          <span>Remember me</span>
        </label>
      </p>
      <a href="admin.php" class="waves-effect waves-light btn">LOGIN</a>
      <a href="../index.php" class="waves-effect waves-light btn">BACK</a>
    </form>
  </div>

</body>

</html>