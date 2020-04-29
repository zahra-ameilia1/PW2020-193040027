-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Apr 2020 pada 15.15
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
-- Database: `tubes_193040027`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `lauda`
--

CREATE TABLE `lauda` (
  `No` int(11) NOT NULL,
  `Gambar` varchar(100) DEFAULT NULL,
  `Nama_Produk` varchar(100) DEFAULT NULL,
  `Komposisi` varchar(500) DEFAULT NULL,
  `Kadaluarsa` date DEFAULT NULL,
  `Harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lauda`
--

INSERT INTO `lauda` (`No`, `Gambar`, `Nama_Produk`, `Komposisi`, `Kadaluarsa`, `Harga`) VALUES
(1, 'Twister.jfif', 'Twister Thins Vanilla', 'Gula, Tepung terigu, Minyak Nabati, Whey bubuk, Susu Skim, Kakao bubuk, Pengemulsi,Garam, Perisa Vanilla', '2021-11-21', 2000),
(2, 'Deka.jpg', 'Deka Crepes', 'Tepung Terigu, gula, pasta kacang, minyak nabati, coklat bubuk, susu full cream, pengemulsi', '2020-10-12', 2500),
(3, 'Pocky.jfif', 'Pocky Double Choco', 'Tepung terigu, minyak nabati, gula, coklat bubuk, lemak reroti, susu skim bubuk, cokelat, vanilla, mentega, pengemulsi, garam, ragi', '2021-02-01', 10000),
(4, 'Regal.jpg', 'Regal Biskuit Marie', 'Tepung Terigu, Gula, Susu Bubuk, Mentega, lemak reroti, telur, pengembang, garam', '2020-10-03', 21000),
(5, 'selamat.jfif', 'Selamat Double Chocolate Sandwich Wafer', 'Gula, Tepung Terigu, Minyak Nabati, Kakao bubuk, Susu skim bubuk, pengemulsi, Garam, Pengembang', '2021-12-11', 13000),
(6, 'slai.jpg', 'Slai O\'lai Strawberry', 'Tepung terigu, minyak nabati, gula, glukosa, gliserin, susu bubuk, pengembang, kalsium karbonat, pewarna makanan', '2020-08-08', 8000),
(7, 'oat.jpg', 'Oatbits', 'Tepung terigu, Oat, Gula, Minyak Nabati, wortel, tomat, konsetrat jeruk, glukosa, whey bubuk, pengembang, kalsium karbonat, garam, pengemulsi ', '2021-05-12', 12000),
(8, 'timtam.jfif', 'Timtam Smooth & Crunchy', 'Gula, Lemak Nabati, Tepung Terigu, Kakao bubuk, Whey bubuk, susu bubuk full cream, garam, pengemulsi', '2020-08-06', 18000),
(9, 'gandum.jfif', 'Sari Gandum Sandwich', 'Tepung Gandum, minyak nabati, gula, tepung tapioka, susu skim bubuk, telur, whey bubuk, cokelat bubuk, kelapa, garam, pengembang, pengemulsi', '2020-03-20', 15000),
(10, 'malkist.jfif', 'Malkist Crackers', 'Tepung Terigu, minyak nabati, gula, tepung tapioka, susu bubuk, garam, ragi, pengembang, susu', '2020-10-02', 7000),
(11, 'beng2.jfif', 'Beng Beng', 'Glukosa, Lemak nabati, gula, tepung terigu, susu bubuk, krispi beras, kakao massa, pemanis alami, krimer nabati, garam, pengembang', '2021-03-21', 2500),
(12, 'oreo.jfif', 'Oreo Original', 'Tepung Terigu, gula, minyak nabati, cokelat bubuk, pengembang, garam, pati jagung, pengemulsi, perisa', '2020-11-13', 7000),
(13, 'tango.jfif', 'Tango Wafer Vanilla', 'Tepung terigu, gula, lemak nabati, minyak nabati, susu bubuk full cream, whey bubu, pengemulsi, garam, telur, perisa', '2020-01-27', 8000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `lauda`
--
ALTER TABLE `lauda`
  ADD PRIMARY KEY (`No`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `lauda`
--
ALTER TABLE `lauda`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
