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

    $gambar = htmlspecialchars($data['gambar']);
    $nama = htmlspecialchars($data['nama_produk']);
    $komposisi = htmlspecialchars($data['komposisi']);
    $kadaluarsa = htmlspecialchars($data['kadaluarsa']);
    $harga = htmlspecialchars($data['harga']);

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

//function untuk mengubah data didalam database
function ubah($data)
{
    $conn = koneksi();

    $gambar = htmlspecialchars($data['gambar']);
    $nama = htmlspecialchars($data['nama_produk']);
    $komposisi = htmlspecialchars($data['komposisi']);
    $kadaluarsa = htmlspecialchars($data['kadaluarsa']);
    $harga = htmlspecialchars($data['harga']);

    $query = "UPDATE lauda
            SET
            gambar = '$gambar',
            nama_produk = '$nama',
            komposisi = '$komposisi',
            kadaluarsa = '$kadaluarsa'
            WHERE harga = '$harga'
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
