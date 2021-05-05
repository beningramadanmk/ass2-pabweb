-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 05 Bulan Mei 2021 pada 15.56
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ass2-pabweb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ipk`
--

CREATE TABLE `ipk` (
  `semester` bigint(20) NOT NULL,
  `ipk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ipk`
--

INSERT INTO `ipk` (`semester`, `ipk`) VALUES
(1, '3.63'),
(2, '3.53'),
(3, '4.00'),
(4, '4.00'),
(5, '4.00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `ipk`
--
ALTER TABLE `ipk`
  ADD PRIMARY KEY (`semester`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
