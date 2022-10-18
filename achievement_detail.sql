-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 16 Sep 2022 pada 02.37
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `media_temas1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `achievement_detail`
--

CREATE TABLE `achievement_detail` (
  `id` int(11) NOT NULL,
  `achieve_name` varchar(255) NOT NULL,
  `achieve_img` varchar(255) NOT NULL,
  `tag` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `achievement_detail`
--

INSERT INTO `achievement_detail` (`id`, `achieve_name`, `achieve_img`, `tag`, `created_at`, `updated_at`) VALUES
(1, 'Lomba Juara 3 Karate Tingkat Nasional', 'https://via.placeholder.com/300x400', 'Karate,O2SN,Nasional', '2022-09-14 05:37:45', '2022-09-14 05:37:45'),
(2, 'Lomba Juara 3 Sepak Bola Tingkat Kota', 'https://via.placeholder.com/150', 'Sepakbola', '2022-09-14 05:37:45', '2022-09-14 05:37:45'),
(3, 'Lomba Juara 5 Pantomim Tingkat Kecamatan', 'https://via.placeholder.com/150', 'Pantomim', '2022-09-14 05:37:45', '2022-09-14 05:37:45'),
(4, 'Lomba Juara 1 Tari Tingkat Kota', 'https://via.placeholder.com/150', 'Tari', '2022-09-14 05:37:45', '2022-09-14 05:37:45'),
(10, 'Lomba Juara 3 Karate Tingkat Nasional', 'https://via.placeholder.com/300x400', 'Karate,O2SN,Nasional', '2022-09-14 05:37:45', '2022-09-14 05:37:45'),
(11, 'Lomba Juara 3 Karate Tingkat Nasional', 'https://via.placeholder.com/300x400', 'Karate,O2SN,Nasional', '2022-09-14 05:37:45', '2022-09-14 05:37:45'),
(12, 'Lomba Juara 3 Karate Tingkat Nasional', 'https://via.placeholder.com/300x400', 'Karate,O2SN,Nasional', '2022-09-14 05:37:45', '2022-09-14 05:37:45');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `achievement_detail`
--
ALTER TABLE `achievement_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `achievement_detail`
--
ALTER TABLE `achievement_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
