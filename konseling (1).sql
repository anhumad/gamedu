-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Jan 2023 pada 23.00
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `konseling`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`) VALUES
(1, 'admin3', '12345', 'admin3@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `frogram`
--

CREATE TABLE `frogram` (
  `id_nama` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nomor` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `tanggal` date NOT NULL,
  `program` varchar(50) NOT NULL,
  `dokter` varchar(50) NOT NULL,
  `submit` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `frogram`
--

INSERT INTO `frogram` (`id_nama`, `nama`, `nomor`, `email`, `tanggal`, `program`, `dokter`, `submit`) VALUES
(2, 'ahmad', '1234567', 'ahmadnurdiyansyah26@gmail.com', '2023-01-31', 'Konseling kesehatan', 'Abella Saragih, S.Psi., M.Psi., Psikolog', '12:32:40pm');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konseling`
--

CREATE TABLE `konseling` (
  `nama` varchar(100) NOT NULL,
  `nomor` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `program` varchar(50) NOT NULL,
  `dokter` varchar(100) NOT NULL,
  `submit` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `konseling`
--

INSERT INTO `konseling` (`nama`, `nomor`, `email`, `tanggal`, `program`, `dokter`, `submit`) VALUES
('ahmad', '123456', 'ahmadnurdiyansyah26@gmail.com', '2023-01-27', 'Konseling kesehatan', 'Abella Saragih, S.Psi., M.Psi., Psikolog', '10:14:38pm');

-- --------------------------------------------------------

--
-- Struktur dari tabel `program`
--

CREATE TABLE `program` (
  `nama` varchar(100) NOT NULL,
  `nomor` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `program` varchar(50) NOT NULL,
  `submit` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `program`
--

INSERT INTO `program` (`nama`, `nomor`, `email`, `tanggal`, `program`, `submit`) VALUES
('ahmad', '1234567', 'ahmadnurdiyansyah26@gmail.com', '2023-01-26', 'Konseling kesehatan', '08:33:45pm'),
('ahhmad', '454545', 'ahmadnurdiyansyah26@gmail.com', '2023-01-26', 'Konseling kesehatan', '09:08:50am'),
('ahmad', '123', 'ahmadnurdiyansyah26@gmail.com', '2023-01-26', 'Konseling kesehatan', '12:09:27pm');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`,`username`,`password`,`email`);

--
-- Indeks untuk tabel `frogram`
--
ALTER TABLE `frogram`
  ADD PRIMARY KEY (`id_nama`);

--
-- Indeks untuk tabel `konseling`
--
ALTER TABLE `konseling`
  ADD UNIQUE KEY `dokter` (`dokter`),
  ADD UNIQUE KEY `nama` (`nama`,`nomor`,`email`,`tanggal`,`program`,`submit`) USING HASH;

--
-- Indeks untuk tabel `program`
--
ALTER TABLE `program`
  ADD UNIQUE KEY `nama` (`nama`,`nomor`,`email`,`tanggal`,`program`,`submit`) USING HASH;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `frogram`
--
ALTER TABLE `frogram`
  MODIFY `id_nama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
