-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Bulan Mei 2020 pada 07.53
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_193040027`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nrp` varchar(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Zahra Dwi Ameilia', '193040027', '193040027.zahra@mail.unpas.ac.id', 'Teknik Informatika', 'ikon.png'),
(2, 'Seli Suhaeli Septian', '193040015', '193040015.seli@mail.unpas.ac.id', 'Teknik Informatika', 'ikon.png'),
(3, 'Kareena Kardin', '193040035', '193040035.kareena@mail.unpas.ac.id', 'Teknik Informatika', 'ikon.png'),
(4, 'Daffa Akhdan Fadillah', '193040036', '193040036.daffa@mail.unpas.ac.id', 'Teknik Informatika', 'ikon.png'),
(5, 'Ilham Akmal Rafi Pramudya', '193040038', '193040038.ilham@mail.unpas.ac.id', 'Teknik Informatika', 'ikon.png'),
(6, 'Dhiya Ulhaq Ramadhanty', '193040095', '193040095.dhiya@mail.unpas.ac.id', 'Teknik Informatika', 'ikon.png'),
(7, 'Kenny Lauda Junior', '193040028', '193040028.kenny@mail.unpas.ac.id', 'Desain Komunikasi Visual', 'ikon.png'),
(8, 'Reza Febriyanti', '193040039', '193040039.reza@mail.unpas.ac.id', 'Pendidikan Ekonomi Akuntansi', 'ikon.png'),
(9, 'Eka Gusnetta Putri Wahyudi', '193040120', '193040120.eka@mail.unpas.ac.id', 'Ilmu Hukum', 'ikon.png'),
(10, 'Ersha Bacharudin', '193040139', '193040139.ersha@mail.unpas.ac.id', 'Teknik Industri', 'ikon.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
