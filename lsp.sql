-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Okt 2021 pada 16.51
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lsp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `arsip`
--

CREATE TABLE `arsip` (
  `id` int(11) NOT NULL,
  `nomor_surat` varchar(255) NOT NULL DEFAULT '',
  `kategori` varchar(255) NOT NULL DEFAULT '',
  `judul` varchar(255) NOT NULL DEFAULT '',
  `waktu_pengarsipan` datetime NOT NULL DEFAULT current_timestamp(),
  `file` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `arsip`
--

INSERT INTO `arsip` (`id`, `nomor_surat`, `kategori`, `judul`, `waktu_pengarsipan`, `file`) VALUES
(28, '225', 'Nota Dinas', '7 Cara Mudah Menghemat Pengeluaran Rumah Tangga', '2021-10-23 22:18:46', '225_-_Nota_Dinas_-_7_Cara_Mudah_Menghemat_Pengeluaran_Rumah_Tangga.pdf'),
(29, '225', 'Pengumuman', 'Mudah Menghemat Pengeluaran Rumah Tangga', '2021-10-23 22:38:30', '225_-_Pengumuman_-_Mudah_Menghemat_Pengeluaran_Rumah_Tangga.pdf');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `arsip`
--
ALTER TABLE `arsip`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `arsip`
--
ALTER TABLE `arsip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
