-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 13 Sep 2022 pada 06.13
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
-- Struktur dari tabel `achievement`
--

CREATE TABLE `achievement` (
  `id` int(11) NOT NULL,
  `achievement_name` varchar(50) NOT NULL,
  `achievement_icon` varchar(50) NOT NULL,
  `achievement_caption` varchar(200) NOT NULL,
  `achievement_contents` longtext NOT NULL,
  `achievement_image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `achievement`
--

INSERT INTO `achievement` (`id`, `achievement_name`, `achievement_icon`, `achievement_caption`, `achievement_contents`, `achievement_image`, `created_at`, `updated_at`) VALUES
(1, 'Karate', 'mdi mdi-karate', 'Karate ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '<p><strong>Lorem ipsum dolor sit amet</strong>, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vitae et leo duis ut. Congue eu consequat ac felis donec et odio pellentesque diam. Aliquet risus feugiat in ante metus dictum at. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Consequat nisl vel pretium lectus quam id leo in. Diam in arcu cursus euismod quis. Mollis aliquam ut porttitor leo a diam sollicitudin tempor id. Facilisis volutpat est velit egestas dui. Sem integer vitae justo eget magna fermentum iaculis eu non. Praesent elementum facilisis leo vel fringilla est ullamcorper eget. Quisque id diam vel quam elementum pulvinar etiam non quam. Vitae purus faucibus ornare suspendisse sed nisi lacus sed. Tellus in metus vulputate eu scelerisque.</p>', 'https://admin.sdntemas1.sch.id/assets/images/extra_image/img_3.jpg', '2022-09-05 04:50:44', '2022-09-05 04:50:44'),
(3, 'Volleyball', 'mdi mdi-volleyball', 'Voli ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ornare aenean euismod elementum nisi quis eleifend quam. Felis eget velit aliquet sagittis. Venenatis tellus in metus vulputate eu scelerisque felis imperdiet proin. Nisl vel pretium lectus quam id leo in vitae. Nulla aliquet porttitor lacus luctus. Sem nulla pharetra diam sit amet nisl suscipit adipiscing. Adipiscing bibendum est ultricies integer. Vestibulum sed arcu non odio euismod lacinia at quis. Egestas purus viverra accumsan in nisl nisi scelerisque. Erat pellentesque adipiscing commodo elit at imperdiet dui. Eget gravida cum sociis natoque penatibus et magnis. Purus in mollis nunc sed id semper risus. Tristique nulla aliquet enim tortor at auctor urna nunc id. Duis ultricies lacus sed turpis tincidunt id aliquet risus. In mollis nunc sed id semper risus in hendrerit.</p>', 'https://admin.sdntemas1.sch.id/assets/images/achievement_image/img_8.jpg', '2022-09-05 12:35:17', '2022-09-05 12:35:17'),
(4, 'Karate', 'mdi mdi-karate', 'Karate ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '<p><strong>Lorem ipsum dolor sit amet</strong>, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vitae et leo duis ut. Congue eu consequat ac felis donec et odio pellentesque diam. Aliquet risus feugiat in ante metus dictum at. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Consequat nisl vel pretium lectus quam id leo in. Diam in arcu cursus euismod quis. Mollis aliquam ut porttitor leo a diam sollicitudin tempor id. Facilisis volutpat est velit egestas dui. Sem integer vitae justo eget magna fermentum iaculis eu non. Praesent elementum facilisis leo vel fringilla est ullamcorper eget. Quisque id diam vel quam elementum pulvinar etiam non quam. Vitae purus faucibus ornare suspendisse sed nisi lacus sed. Tellus in metus vulputate eu scelerisque.</p>', 'https://admin.sdntemas1.sch.id/assets/images/extra_image/img_3.jpg', '2022-09-05 04:50:44', '2022-09-05 04:50:44'),
(5, 'Volleyball', 'mdi mdi-volleyball', 'Voli ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ornare aenean euismod elementum nisi quis eleifend quam. Felis eget velit aliquet sagittis. Venenatis tellus in metus vulputate eu scelerisque felis imperdiet proin. Nisl vel pretium lectus quam id leo in vitae. Nulla aliquet porttitor lacus luctus. Sem nulla pharetra diam sit amet nisl suscipit adipiscing. Adipiscing bibendum est ultricies integer. Vestibulum sed arcu non odio euismod lacinia at quis. Egestas purus viverra accumsan in nisl nisi scelerisque. Erat pellentesque adipiscing commodo elit at imperdiet dui. Eget gravida cum sociis natoque penatibus et magnis. Purus in mollis nunc sed id semper risus. Tristique nulla aliquet enim tortor at auctor urna nunc id. Duis ultricies lacus sed turpis tincidunt id aliquet risus. In mollis nunc sed id semper risus in hendrerit.</p>', 'https://admin.sdntemas1.sch.id/assets/images/achievement_image/img_8.jpg', '2022-09-05 12:35:17', '2022-09-05 12:35:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `akses` varchar(25) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `akses`, `created_at`, `updated_at`) VALUES
(1, 'habibi', 't!BGwJ5XkaZ!nmSo5j02y7qkVm7IQg9z0AJVnAAbqRDjru6$CE', 'superadmin', '2022-09-07 01:24:41', '2022-09-07 01:24:41'),
(2, 'daffarizky', '3wT4ek8%qm8fbY0q70xJXg1WXg3MQ1cc83DVuy$&Q*#41UVk4A', 'admin', '2022-09-09 09:14:20', '2022-09-09 09:41:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `alumni`
--

CREATE TABLE `alumni` (
  `id` int(11) NOT NULL,
  `alumni_name` varchar(50) NOT NULL,
  `alumni_image` varchar(255) NOT NULL,
  `alumni_testimoni` varchar(255) NOT NULL,
  `alumni_instansi` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `alumni`
--

INSERT INTO `alumni` (`id`, `alumni_name`, `alumni_image`, `alumni_testimoni`, `alumni_instansi`, `created_at`, `updated_at`) VALUES
(1, 'Abdul', '/assets/images/person_2-min.jpg', 'mantap', 'Kuliah', '2022-09-04 05:43:08', '2022-09-07 08:30:19'),
(3, 'Eugene Sha', 'https://admin.sdntemas1.sch.id/assets/images/alumni_image/person_4-min.jpg', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.', 'SMP TEMAS 5 Batu', '2022-09-04 11:30:30', '2022-09-04 11:30:30'),
(4, 'Shea Anna', 'https://admin.sdntemas1.sch.id/assets/images/alumni_image/person_5-min.jpg', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.', 'SMP TEMAS 6 Batu', '2022-09-04 05:43:08', '2022-09-04 11:31:20'),
(7, 'Daffa', 'https://admin.sdntemas1.sch.id/assets/images/alumni_image/person_6-min4.jpg', 'Selain mengamalkan nilai budaya, akademis sangat didukung, beriringan dengan murid yang semkain banyak percaya diri!', 'SMPN 4 Mojokerto', '2022-09-04 11:49:26', '2022-09-04 11:49:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `background_slider`
--

CREATE TABLE `background_slider` (
  `id` int(11) NOT NULL,
  `source_img` longtext NOT NULL,
  `title_img` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `background_slider`
--

INSERT INTO `background_slider` (`id`, `source_img`, `title_img`, `created_at`, `updated_at`) VALUES
(1, 'https://admin.sdntemas1.sch.id/assets/images/bg_slide/2022_08_30_09_44_IMG_21451.jpeg', 'Carnaval', '2022-08-26 02:07:02', '2022-09-05 01:55:37'),
(2, 'https://admin.sdntemas1.sch.id/assets/images/bg_slide/IMG_75871.jpeg', 'Env', '2022-08-26 02:07:02', '2022-09-05 01:54:43'),
(3, 'https://admin.sdntemas1.sch.id/assets/images/bg_slide/IMG_11841.jpeg', 'Students', '2022-08-26 02:07:02', '2022-09-05 01:55:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `extra`
--

CREATE TABLE `extra` (
  `id` int(11) NOT NULL,
  `extra_name` varchar(50) NOT NULL,
  `extra_icon` varchar(50) NOT NULL,
  `extra_caption` varchar(200) NOT NULL,
  `extra_contents` longtext NOT NULL,
  `extra_image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `extra`
--

INSERT INTO `extra` (`id`, `extra_name`, `extra_icon`, `extra_caption`, `extra_contents`, `extra_image`, `created_at`, `updated_at`) VALUES
(1, 'Karate', 'mdi mdi-karate', 'Karate ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '<p><strong>Lorem ipsum dolor sit amet</strong>, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vitae et leo duis ut. Congue eu consequat ac felis donec et odio pellentesque diam. Aliquet risus feugiat in ante metus dictum at. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Consequat nisl vel pretium lectus quam id leo in. Diam in arcu cursus euismod quis. Mollis aliquam ut porttitor leo a diam sollicitudin tempor id. Facilisis volutpat est velit egestas dui. Sem integer vitae justo eget magna fermentum iaculis eu non. Praesent elementum facilisis leo vel fringilla est ullamcorper eget. Quisque id diam vel quam elementum pulvinar etiam non quam. Vitae purus faucibus ornare suspendisse sed nisi lacus sed. Tellus in metus vulputate eu scelerisque.</p>', 'https://admin.sdntemas1.sch.id/assets/images/extra_image/img_3.jpg', '2022-09-02 09:38:46', '2022-09-02 09:38:46'),
(2, 'Pramuka', 'mdi mdi-campfire', 'Pramuka ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vitae et leo duis ut. Congue eu consequat ac felis donec et odio pellentesque diam. Aliquet risus feugiat in ante metus dictum at. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Consequat nisl vel pretium lectus quam id leo in. Diam in arcu cursus euismod quis. Mollis aliquam ut porttitor leo a diam sollicitudin tempor id. Facilisis volutpat est velit egestas dui. Sem integer vitae justo eget magna fermentum iaculis eu non. Praesent elementum facilisis leo vel fringilla est ullamcorper eget. Quisque id diam vel quam elementum pulvinar etiam non quam. Vitae purus faucibus ornare suspendisse sed nisi lacus sed. Tellus in metus vulputate eu scelerisque.</p>', 'https://admin.sdntemas1.sch.id/assets/images/extra_image/img_4.jpg', '2022-09-02 09:38:46', '2022-09-02 09:38:46'),
(7, 'Karawitan', 'mdi mdi-record-circle', 'Karawitan ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ornare aenean euismod elementum nisi quis eleifend quam. Felis eget velit aliquet sagittis. Venenatis tellus in metus vulputate eu scelerisque felis imperdiet proin. Nisl vel pretium lectus quam id leo in vitae. Nulla aliquet porttitor lacus luctus. Sem nulla pharetra diam sit amet nisl suscipit adipiscing. Adipiscing bibendum est ultricies integer. Vestibulum sed arcu non odio euismod lacinia at quis. Egestas purus viverra accumsan in nisl nisi scelerisque. Erat pellentesque adipiscing commodo elit at imperdiet dui. Eget gravida cum sociis natoque penatibus et magnis. Purus in mollis nunc sed id semper risus. Tristique nulla aliquet enim tortor at auctor urna nunc id. Duis ultricies lacus sed turpis tincidunt id aliquet risus. In mollis nunc sed id semper risus in hendrerit.</p>', 'https://admin.sdntemas1.sch.id/assets/images/extra_image/img_7.jpg', '2022-09-04 05:53:47', '2022-09-04 05:53:47'),
(8, 'Volleyball', 'mdi mdi-volleyball', 'Voli ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ornare aenean euismod elementum nisi quis eleifend quam. Felis eget velit aliquet sagittis. Venenatis tellus in metus vulputate eu scelerisque felis imperdiet proin. Nisl vel pretium lectus quam id leo in vitae. Nulla aliquet porttitor lacus luctus. Sem nulla pharetra diam sit amet nisl suscipit adipiscing. Adipiscing bibendum est ultricies integer. Vestibulum sed arcu non odio euismod lacinia at quis. Egestas purus viverra accumsan in nisl nisi scelerisque. Erat pellentesque adipiscing commodo elit at imperdiet dui. Eget gravida cum sociis natoque penatibus et magnis. Purus in mollis nunc sed id semper risus. Tristique nulla aliquet enim tortor at auctor urna nunc id. Duis ultricies lacus sed turpis tincidunt id aliquet risus. In mollis nunc sed id semper risus in hendrerit.</p>', 'https://admin.sdntemas1.sch.id/assets/images/extra_image/img_31.jpg', '2022-09-04 06:02:54', '2022-09-04 06:02:54'),
(12, 'Football', 'mdi mdi-soccer', 'Footbal ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ornare aenean euismod elementum nisi quis eleifend quam. Felis eget velit aliquet sagittis. Venenatis tellus in metus vulputate eu scelerisque felis imperdiet proin. Nisl vel pretium lectus quam id leo in vitae. Nulla aliquet porttitor lacus luctus. Sem nulla pharetra diam sit amet nisl suscipit adipiscing. Adipiscing bibendum est ultricies integer. Vestibulum sed arcu non odio euismod lacinia at quis. Egestas purus viverra accumsan in nisl nisi scelerisque. Erat pellentesque adipiscing commodo elit at imperdiet dui. Eget gravida cum sociis natoque penatibus et magnis. Purus in mollis nunc sed id semper risus. Tristique nulla aliquet enim tortor at auctor urna nunc id. Duis ultricies lacus sed turpis tincidunt id aliquet risus. In mollis nunc sed id semper risus in hendrerit.</p>', 'https://admin.sdntemas1.sch.id/assets/images/extra_image/img_2.jpg', '2022-09-04 09:00:43', '2022-09-04 09:00:43'),
(13, 'Pantomim', 'mdi mdi-domino-mask', 'Pantomim ipsum dolor sit amet, consectetur adipisci...', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vitae et leo duis ut. Congue eu consequat ac felis donec et odio pellentesque diam. Aliquet risus feugiat in ante metus dictum at. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Consequat nisl vel pretium lectus quam id leo in. Diam in arcu cursus euismod quis. Mollis aliquam ut porttitor leo a diam sollicitudin tempor id. Facilisis volutpat est velit egestas dui. Sem integer vitae justo eget magna fermentum iaculis eu non. Praesent elementum facilisis leo vel fringilla est ullamcorper eget. Quisque id diam vel quam elementum pulvinar etiam non quam. Vitae purus faucibus ornare suspendisse sed nisi lacus sed. Tellus in metus vulputate eu scelerisque.</p>', 'https://admin.sdntemas1.sch.id/assets/images/extra_image/img_41.jpg', '2022-09-05 01:33:06', '2022-09-05 01:33:06'),
(14, 'Seni Teater', 'mdi mdi-drama-masks', 'Seni Teater ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vitae et leo duis ut. Congue eu consequat ac felis donec et odio pellentesque diam. Aliquet risus feugiat in ante metus dictum at. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Consequat nisl vel pretium lectus quam id leo in. Diam in arcu cursus euismod quis. Mollis aliquam ut porttitor leo a diam sollicitudin tempor id. Facilisis volutpat est velit egestas dui. Sem integer vitae justo eget magna fermentum iaculis eu non. Praesent elementum facilisis leo vel fringilla est ullamcorper eget. Quisque id diam vel quam elementum pulvinar etiam non quam. Vitae purus faucibus ornare suspendisse sed nisi lacus sed. Tellus in metus vulputate eu scelerisque.</p>', 'https://admin.sdntemas1.sch.id/assets/images/extra_image/img_32.jpg', '2022-09-06 01:55:51', '2022-09-06 01:55:51'),
(15, 'Traditional Dances', 'mdi mdi-dance-ballroom', 'Traditional Dances ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vitae et leo duis ut. Congue eu consequat ac felis donec et odio pellentesque diam. Aliquet risus feugiat in ante metus dictum at. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Consequat nisl vel pretium lectus quam id leo in. Diam in arcu cursus euismod quis. Mollis aliquam ut porttitor leo a diam sollicitudin tempor id. Facilisis volutpat est velit egestas dui. Sem integer vitae justo eget magna fermentum iaculis eu non. Praesent elementum facilisis leo vel fringilla est ullamcorper eget. Quisque id diam vel quam elementum pulvinar etiam non quam. Vitae purus faucibus ornare suspendisse sed nisi lacus sed. Tellus in metus vulputate eu scelerisque.</p>', 'https://admin.sdntemas1.sch.id/assets/images/extra_image/img_21.jpg', '2022-09-06 02:00:09', '2022-09-06 02:00:09'),
(16, 'Tilawah', 'mdi mdi-food-halal', ' ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vitae et leo duis ut. Congue eu consequat ac felis donec et odio pellentesque diam. Aliquet risus feugiat in ante metus dictum at. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Consequat nisl vel pretium lectus quam id leo in. Diam in arcu cursus euismod quis. Mollis aliquam ut porttitor leo a diam sollicitudin tempor id. Facilisis volutpat est velit egestas dui. Sem integer vitae justo eget magna fermentum iaculis eu non. Praesent elementum facilisis leo vel fringilla est ullamcorper eget. Quisque id diam vel quam elementum pulvinar etiam non quam. Vitae purus faucibus ornare suspendisse sed nisi lacus sed. Tellus in metus vulputate eu scelerisque.</p>', 'https://admin.sdntemas1.sch.id/assets/images/extra_image/img_5.jpg', '2022-09-06 02:06:41', '2022-09-06 02:06:41'),
(17, 'Pencak Silat', 'mdi mdi-kabaddi', 'Pencak Silat ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vitae et leo duis ut. Congue eu consequat ac felis donec et odio pellentesque diam. Aliquet risus feugiat in ante metus dictum at. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Consequat nisl vel pretium lectus quam id leo in. Diam in arcu cursus euismod quis. Mollis aliquam ut porttitor leo a diam sollicitudin tempor id. Facilisis volutpat est velit egestas dui. Sem integer vitae justo eget magna fermentum iaculis eu non. Praesent elementum facilisis leo vel fringilla est ullamcorper eget. Quisque id diam vel quam elementum pulvinar etiam non quam. Vitae purus faucibus ornare suspendisse sed nisi lacus sed. Tellus in metus vulputate eu scelerisque.</p>', 'https://admin.sdntemas1.sch.id/assets/images/extra_image/img_71.jpg', '2022-09-06 02:16:15', '2022-09-06 02:16:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `game`
--

CREATE TABLE `game` (
  `id` int(11) NOT NULL,
  `soal` varchar(255) NOT NULL,
  `a` varchar(255) NOT NULL,
  `b` varchar(255) NOT NULL,
  `c` varchar(255) NOT NULL,
  `kunci` varchar(255) NOT NULL,
  `jenis_soal` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `game`
--

INSERT INTO `game` (`id`, `soal`, `a`, `b`, `c`, `kunci`, `jenis_soal`, `created_at`, `updated_at`) VALUES
(1, '꧋ꦲꦏꦸꦣꦺꦴꦭꦤ꧀ꦤꦁꦱꦼꦏꦺꦴꦭꦃ', 'aku dolan nang sekolah', 'aku dolanan nang omah', 'aku dolan sekolah', 'aku dolan nang sekolah', 'aksara_jawa', '2022-09-11 07:35:00', '2022-09-11 07:35:00'),
(2, '꧋ꦥꦼꦠꦿꦸꦏ꧀ꦠꦼꦏꦤ꧀ꦗꦮꦧꦫꦠ꧀', 'petruk tekan jawa timur', 'petruk tekan jawa barat', 'semar tekan jawa barat', 'petruk tekan jawa barat', 'aksara_jawa', '2022-09-11 07:36:00', '2022-09-11 07:36:00'),
(3, '꧋ꦏꦶꦭꦸꦫꦃꦧꦣꦿꦤꦪ', 'ki lurah badranaya', 'ki lurah badrayana', 'ki lurah badaranaya', 'ki lurah badranaya', 'aksara_jawa', '2022-09-11 07:36:00', '2022-09-11 07:36:00'),
(5, 'aku pinter jawa', '꧋ꦲꦏꦸꦥꦼꦤ꧀ꦠꦼꦂꦄꦏ꧀ꦱꦫꦗꦮ', '꧋ꦲꦏꦸꦗꦮ', '꧋ꦲꦏꦸꦥꦶꦤ꧀ꦠꦺꦂꦗꦮ', '꧋ꦲꦏꦸꦥꦶꦤ꧀ꦠꦺꦂꦗꦮ', 'aksara_jawa', '2022-09-11 07:41:53', '2022-09-11 07:41:53'),
(6, '꧋ꦲꦏꦸꦠꦸꦫꦸ', 'aku tilem', 'aku badhe turu', 'aku turu', 'aku turu', 'aksara_jawa', '2022-09-11 20:41:05', '2022-09-11 20:41:05'),
(7, '꧋ꦲꦏꦸꦩ꧀ꦭꦏꦸ', 'aku mlaku - mlaku', 'aku mlaku', 'aku playon', 'aku mlaku', 'aksara_jawa', '2022-09-11 20:41:05', '2022-09-11 20:41:05'),
(8, 'Siti menyang sawah', '꧋ꦱꦶꦠꦶꦩꦼꦚꦁꦱꦮꦃ', '꧋ꦱꦶꦠꦶꦧꦶꦣꦭ꧀ꦱꦮꦃ', '꧋ꦱꦶꦠꦶꦏꦠꦺꦱꦮꦃ', '꧋ꦱꦶꦠꦶꦩꦼꦚꦁꦱꦮꦃ', 'aksara_jawa', '2022-09-11 20:41:05', '2022-09-11 20:41:05'),
(9, 'Dadi wong apik', '꧋ꦣꦣꦶꦮꦺꦴꦁ', '꧋ꦣꦣꦶꦲꦥꦶꦏ꧀', '꧋ꦣꦣꦶꦮꦺꦴꦁꦄꦥꦶꦏ꧀', '꧋ꦣꦣꦶꦮꦺꦴꦁꦄꦥꦶꦏ꧀', '', '2022-09-11 20:41:05', '2022-09-11 20:41:05'),
(10, 'Lina budhal kerjo', '꧋ꦭꦶꦤꦧꦣꦺꦏꦼꦂꦗꦺꦴ', '꧋ꦭꦶꦤꦧꦸꦣꦭ꧀ꦏꦼꦂꦗꦺꦴ', '꧋ꦭꦶꦤꦩꦼꦚꦁꦏꦼꦂꦗꦺꦴ', '꧋ꦭꦶꦤꦧꦸꦣꦭ꧀ꦏꦼꦂꦗꦺꦴ', '', '2022-09-11 20:41:05', '2022-09-11 20:41:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `news_title` varchar(50) NOT NULL,
  `news_image` varchar(255) NOT NULL,
  `news_content` longtext NOT NULL,
  `news_writer` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `news`
--

INSERT INTO `news` (`id`, `news_title`, `news_image`, `news_content`, `news_writer`, `created_at`, `updated_at`) VALUES
(3, 'News3!!', 'https://admin.sdntemas1.sch.id/assets/images/news_image/img_5.jpg', '<p><em><strong>Lorem ipsum dolor sit amet</strong>,</em></p>\r\n<ol>\r\n<li><em>consectetur adipisicing elit,</em></li>\r\n<li><em>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</em></li>\r\n<li><em>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</em></li>\r\n<li><em>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</em></li>\r\n<li><em>Excepteur sint occaecat cupidatat non proident,</em></li>\r\n<li><em>sunt in culpa qui officia deserunt mollit anim id est laborum.</em></li>\r\n</ol>', 'Vita Amalia', '2022-08-30 20:55:47', '2022-09-08 08:48:48'),
(4, 'Test 4 Judul', 'https://admin.sdntemas1.sch.id/assets/images/news_image/img_61.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'Rizky', '2022-08-30 20:55:47', '2022-08-30 20:55:47'),
(6, 'Membuat Karnaval', 'https://admin.sdntemas1.sch.id/assets/images/news_image/img_21.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pharetra diam sit amet nisl suscipit adipiscing bibendum. Fringilla ut morbi tincidunt augue interdum velit euismod in pellentesque. Volutpat diam ut venenatis tellus. Libero nunc consequat interdum varius sit amet mattis. Nunc aliquet bibendum enim facilisis gravida neque convallis. Sodales ut etiam sit amet. Ullamcorper morbi tincidunt ornare massa eget egestas. Feugiat in ante metus dictum at tempor commodo ullamcorper. Non quam lacus suspendisse faucibus interdum. Lacus sed turpis tincidunt id aliquet risus feugiat in. Amet massa vitae tortor condimentum. Nullam eget felis eget nunc lobortis mattis aliquam faucibus. Velit egestas dui id ornare arcu odio ut sem nulla. In ante metus dictum at tempor. Eget nullam non nisi est sit. Euismod elementum nisi quis eleifend quam adipiscing. Fermentum iaculis eu non diam phasellus vestibulum lorem sed risus.&nbsp; Sit amet massa vitae tortor condimentum lacinia quis vel. Est ullamcorper eget nulla facilisi. Consequat interdum varius sit amet mattis vulputate enim. Commodo elit at imperdiet dui accumsan sit amet nulla facilisi. Nibh cras pulvinar mattis nunc sed blandit libero volutpat sed. Amet facilisis magna etiam tempor orci. Morbi tristique senectus et netus et malesuada fames. Id diam maecenas ultricies mi eget. Dui ut ornare lectus sit amet est placerat in egestas. Est ante in nibh mauris. Non quam lacus suspendisse faucibus interdum posuere. Neque egestas congue quisque egestas diam. Pretium lectus quam id leo in vitae. Hendrerit gravida rutrum quisque non tellus orci. Cras semper auctor neque vitae. Amet consectetur adipiscing elit pellentesque habitant morbi tristique senectus et. Faucibus in ornare quam viverra orci sagittis eu volutpat. Purus in mollis nunc sed id semper risus in. Mi ipsum faucibus vitae aliquet nec ullamcorper sit amet risus.</p>', 'Arolina', '2022-09-01 11:48:57', '2022-09-02 05:47:45'),
(8, 'Lorem Ipsum', 'https://admin.sdntemas1.sch.id/assets/images/news_image/img_22.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pharetra diam sit amet nisl suscipit adipiscing bibendum. Fringilla ut morbi tincidunt augue interdum velit euismod in pellentesque. Volutpat diam ut venenatis tellus. Libero nunc consequat interdum varius sit amet mattis. Nunc aliquet bibendum enim facilisis gravida neque convallis. Sodales ut etiam sit amet. Ullamcorper morbi tincidunt ornare massa eget egestas. Feugiat in ante metus dictum at tempor commodo ullamcorper. Non quam lacus suspendisse faucibus interdum. Lacus sed turpis tincidunt id aliquet risus feugiat in. Amet massa vitae tortor condimentum. Nullam eget felis eget nunc lobortis mattis aliquam faucibus. Velit egestas dui id ornare arcu odio ut sem nulla. In ante metus dictum at tempor. Eget nullam non nisi est sit. Euismod elementum nisi quis eleifend quam adipiscing. Fermentum iaculis eu non diam phasellus vestibulum lorem sed risus.&nbsp; Sit amet massa vitae tortor condimentum lacinia quis vel. Est ullamcorper eget nulla facilisi. Consequat interdum varius sit amet mattis vulputate enim. Commodo elit at imperdiet dui accumsan sit amet nulla facilisi. Nibh cras pulvinar mattis nunc sed blandit libero volutpat sed. Amet facilisis magna etiam tempor orci. Morbi tristique senectus et netus et malesuada fames. Id diam maecenas ultricies mi eget. Dui ut ornare lectus sit amet est placerat in egestas. Est ante in nibh mauris. Non quam lacus suspendisse faucibus interdum posuere. Neque egestas congue quisque egestas diam. Pretium lectus quam id leo in vitae. Hendrerit gravida rutrum quisque non tellus orci. Cras semper auctor neque vitae. Amet consectetur adipiscing elit pellentesque habitant morbi tristique senectus et. Faucibus in ornare quam viverra orci sagittis eu volutpat. Purus in mollis nunc sed id semper risus in. Mi ipsum faucibus vitae aliquet nec ullamcorper sit amet risus.</p>', 'Ungga', '2022-09-02 05:41:48', '2022-09-02 05:47:09'),
(11, 'Hehe!!', 'https://admin.sdntemas1.sch.id/assets/images/news_image/img_81.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'Daffa Rizky', '2022-09-09 09:04:56', '2022-09-09 09:05:03'),
(12, 'Hehe!!', 'https://admin.sdntemas1.sch.id/assets/images/news_image/img_81.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'Daffa Rizky', '2022-09-09 09:04:56', '2022-09-09 09:05:03'),
(13, 'Test 4 Judul', 'https://admin.sdntemas1.sch.id/assets/images/news_image/img_61.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'Rizky', '2022-08-30 20:55:47', '2022-08-30 20:55:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `teacher_name` varchar(50) NOT NULL,
  `teacher_caption` varchar(200) NOT NULL,
  `teacher_image` varchar(255) NOT NULL,
  `tenaga_pendidik` varchar(50) NOT NULL DEFAULT 'tenaga_pendidik',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `teacher`
--

INSERT INTO `teacher` (`id`, `teacher_name`, `teacher_caption`, `teacher_image`, `tenaga_pendidik`, `created_at`, `updated_at`) VALUES
(2, 'Hendra S.Kom', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere officiis inventore cumque tenetur laboriosam, minus culpa doloremque odio, neque molestias?\r\n\r\n', 'https://admin.sdntemas1.sch.id/assets/images/teacher_image/8.png', 'tenaga_pendidik', '2022-09-06 03:24:08', '2022-09-06 03:24:08'),
(3, 'Arolina S.Kom', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere officiis inventore cumque tenetur laboriosam, minus culpa doloremque odio, neque molestias?\r\n\r\n', 'https://admin.sdntemas1.sch.id/assets/images/teacher_image/9.png', 'tenaga_pendidik', '2022-09-06 03:24:08', '2022-09-06 03:24:08'),
(4, 'Ungga Putra S.Kom', 'Kota Batu lumayan dingin, hehe :D', 'https://admin.sdntemas1.sch.id/assets/images/teacher_image/10.png', 'tenaga_pendidik', '2022-09-06 03:24:08', '2022-09-07 08:24:47'),
(5, 'Daffa S.Kom', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere officiis inventore cumque tenetur laboriosam, minus culpa doloremque odio, neque molestias?', 'https://admin.sdntemas1.sch.id/assets/images/teacher_image/12.png', 'tenaga_pendidik', '2022-09-06 03:24:08', '2022-09-06 03:24:08'),
(8, 'Habibi', 'Guru Kelas 6 - \"Test tes teszzzz\"', 'https://admin.sdntemas1.sch.id/assets/images/teacher_image/31.jpeg', 'jabatan', '2022-09-12 09:16:25', '2022-09-12 10:53:54'),
(9, 'tes', 'tes kepsyen', 'https://admin.sdntemas1.sch.id/assets/images/teacher_image/21.jpeg', 'jabatan', '2022-09-12 09:17:47', '2022-09-12 09:17:47'),
(10, 'test2', 'tes kepsyen jika terdapat kalimat yang panjang dan hampir menyentuh jumlah 100 karakter alfabek dengan kombinasi angka 1234567890', 'https://admin.sdntemas1.sch.id/assets/images/teacher_image/11.jpeg', 'jabatan', '2022-09-12 09:18:33', '2022-09-12 09:18:33');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `achievement`
--
ALTER TABLE `achievement`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `background_slider`
--
ALTER TABLE `background_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `extra`
--
ALTER TABLE `extra`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `achievement`
--
ALTER TABLE `achievement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `background_slider`
--
ALTER TABLE `background_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `extra`
--
ALTER TABLE `extra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `game`
--
ALTER TABLE `game`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
