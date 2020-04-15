-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Apr 2020 pada 15.13
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
  `ID` int(11) NOT NULL,
  `Nama` varchar(100) DEFAULT NULL,
  `NRP` varchar(10) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Jurusan` varchar(100) DEFAULT NULL,
  `Gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`ID`, `Nama`, `NRP`, `Email`, `Jurusan`, `Gambar`) VALUES
(1, 'Zahra Dwi Ameilia', '193040027', '193040027.zahra@mail.unpas.ac.id', 'Teknik Informatika', 'zahra.jpeg'),
(2, 'Seli Suhaeli Septian', '193040015', '193040015.seli@mail.unpas.ac.id', 'Teknik Informatika', 'seli.jpeg'),
(3, 'Kareena Kardin', '193040035', '193040035.kareena@mail.unpas.ac.id', 'Teknik Informatika', 'kareena.jpeg'),
(4, 'Daffa Akhdan Fadillah', '193040036', '193040036.daffa@mail.unpas.ac.id', 'Teknik Informatika', 'daffa.jpeg'),
(5, 'Ilham Akmal Rafi Pramudya', '193040038', '193040038.ilham@mail.unpas.ac.id', 'Teknik Informatika', 'ilham.jpeg'),
(6, 'Dhiya Ulha Ramadhanty', '193040095', '193040095.dhiya@mail.unpas.ac.id', 'Teknik Informatika', 'dhiya.jpeg'),
(7, 'Kenny Lauda Junior', '193040028', '193040028.kenny@mail.unpas.ac.id', 'Teknik Informatika', 'kenny.jpeg'),
(8, 'Reza Febriyanti', '193040039', '193040039.reza@mail.unpas.ac.id', 'Teknik Informatika', 'reza.jpeg'),
(9, 'Eka Gusnetta Putri Wahyudi', '193040120', '193040120.eka@mail.unpas.ac.id', 'Teknik Informatika', 'eka.jpeg'),
(10, 'Ersha Bacharudin', '193040139', '193040139.ersha@mail.unpas.ac.id', 'Teknik Informatika', 'ersha.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
