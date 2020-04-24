<?php
// functions untuk melakukan koneksi ke database
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
    mysqli_select_db($conn, "tubes_193040027") or die("Database salah!");

    return $conn;
}

// function untuk melakukan query ke database
function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

//function untuk menambahkan data didalam database
function tambah($data)
{
    $conn = koneksi();

    $gambar = htmlspecialchars($data['Gambar']);
    $nama = htmlspecialchars($data['Nama_Produk']);
    $komposisi = htmlspecialchars($data['Komposisi']);
    $kadaluarsa = htmlspecialchars($data['Kadaluarsa']);
    $harga = htmlspecialchars($data['Harga']);

    $query = "INSERT INTO lauda
                VALUES
                ('','$gambar','$nama','$komposisi','$kadaluarsa','$harga')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

//function untuk menghapuskan data didalam database
function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM lauda WHERE id = $id");

    return mysqli_affected_rows($conn);
}
