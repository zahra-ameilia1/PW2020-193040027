<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

//mengambil id dari URL
$id = $_GET['id'];


if (hapus($id) > 0) {
  echo "<script>
          alert('data berhasil dihapuskan');
           document.location.href = 'index.php';
      </script>";
} else {
  echo "data gagal dihapuskan!";
}
