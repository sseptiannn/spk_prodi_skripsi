-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 28 Okt 2018 pada 01.58
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `spk_pilihprodi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(30) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama`) VALUES
(4, 'septian', '5b3bb3e5458e02aa356f2fc671ae08d9', 'Septian Pratama'),
(5, 'admin', 'eab06c87fd04f97d3e4b5386bf71f796', 'Comel Anyeonghaseyo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `alternatif`
--

CREATE TABLE IF NOT EXISTS `alternatif` (
  `id_alternatif` int(11) NOT NULL AUTO_INCREMENT,
  `nama_alternatif` varchar(20) NOT NULL,
  PRIMARY KEY (`id_alternatif`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `nama_alternatif`) VALUES
(1, 'Akuntansi'),
(2, 'Manajemen'),
(3, 'Ekonomi Pembangunan'),
(4, 'Ilmu Hukum'),
(5, 'Teknik Sipil'),
(6, 'Teknik Mesin'),
(7, 'Teknik Informatika'),
(8, 'Agribisnis');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil`
--

CREATE TABLE IF NOT EXISTS `hasil` (
  `id_alternatif` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasil`
--

INSERT INTO `hasil` (`id_alternatif`, `id_pengguna`, `nilai`) VALUES
(1, 1, 33.6788),
(2, 1, 33.4735),
(3, 1, 33.4223),
(4, 1, 33.4975),
(5, 1, 33.6585),
(6, 1, 33.6094),
(7, 1, 33.7098),
(8, 1, 33.5077),
(1, 3, 36.5244),
(2, 3, 34.8922),
(3, 3, 34.8343),
(4, 3, 38.2942),
(5, 3, 36.9713),
(6, 3, 38.9403),
(7, 3, 34.4283),
(8, 3, 40.1591),
(1, 2, 34.8191),
(2, 2, 34.5813),
(3, 2, 34.5813),
(4, 2, 34.0593),
(5, 2, 34.1773),
(6, 2, 33.4795),
(7, 2, 34.1773),
(8, 2, 33.8092),
(1, 4, 33.6029),
(2, 4, 39.4642),
(3, 4, 35.4839),
(4, 4, 44.4712),
(5, 4, 37.709),
(6, 4, 33.9747),
(7, 4, 34.0839),
(8, 4, 38.1377),
(1, 5, 39.1681),
(2, 5, 36.473),
(3, 5, 46.3094),
(4, 5, 50.232),
(5, 5, 37.3308),
(6, 5, 39.7828),
(7, 5, 43.652),
(8, 5, 35.4059),
(1, 6, 35.3282),
(2, 6, 35.0801),
(3, 6, 34.9851),
(4, 6, 35.4689),
(5, 6, 34.1973),
(6, 6, 35.9135),
(7, 6, 35.0194),
(8, 6, 36.2462),
(1, 7, 36.6512),
(2, 7, 34.8273),
(3, 7, 34.4512),
(4, 7, 34.6641),
(5, 7, 35.6066),
(6, 7, 34.8065),
(7, 7, 35.9742),
(8, 7, 35.6375),
(1, 8, 36.2974),
(2, 8, 36.4252),
(3, 8, 37.1533),
(4, 8, 38.1662),
(5, 8, 37.129),
(6, 8, 36.0406),
(7, 8, 38.7371),
(8, 8, 35.9919),
(1, 9, 43.0985),
(2, 9, 43.6735),
(3, 9, 43.2111),
(4, 9, 44.3014),
(5, 9, 37.8943),
(6, 9, 38.407),
(7, 9, 38.3467),
(8, 9, 37.8699),
(1, 10, 33.6515),
(2, 10, 34.4332),
(3, 10, 34.2309),
(4, 10, 34.4748),
(5, 10, 33.9083),
(6, 10, 33.9153),
(7, 10, 34.1173),
(8, 10, 33.8465),
(1, 11, 33.9828),
(2, 11, 33.9961),
(3, 11, 33.9961),
(4, 11, 34.1311),
(5, 11, 33.7945),
(6, 11, 34.2518),
(7, 11, 33.7945),
(8, 11, 33.9961),
(1, 12, 47.2301),
(2, 12, 46.2426),
(3, 12, 45.5261),
(4, 12, 47.1556),
(5, 12, 47.8202),
(6, 12, 56.2705),
(7, 12, 38.5727),
(8, 12, 63.6483),
(1, 13, 39.4561),
(2, 13, 35.2765),
(3, 13, 33.7938),
(4, 13, 34.6866),
(5, 13, 38.9648),
(6, 13, 37.3312),
(7, 13, 41.5205),
(8, 13, 33.7081),
(1, 14, 33.3333),
(2, 14, 33.3333),
(3, 14, 33.3333),
(4, 14, 33.3333),
(5, 14, 33.3333),
(6, 14, 33.3333),
(7, 14, 33.3333),
(8, 14, 33.3333),
(1, 15, 33.8742),
(2, 15, 33.9881),
(3, 15, 34.1592),
(4, 15, 34.6376),
(5, 15, 34.0067),
(6, 15, 34.3017),
(7, 15, 34.0489),
(8, 15, 33.7732),
(1, 16, 34.7809),
(2, 16, 34.3961),
(3, 16, 34.3961),
(4, 16, 33.8927),
(5, 16, 34.168),
(6, 16, 33.3968),
(7, 16, 34.168),
(8, 16, 33.7238),
(1, 17, 33.771),
(2, 17, 33.9291),
(3, 17, 33.6691),
(4, 17, 34.1459),
(5, 17, 34.813),
(6, 17, 33.6204),
(7, 17, 33.7471),
(8, 17, 34.0863);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ir`
--

CREATE TABLE IF NOT EXISTS `ir` (
  `jumlah` int(11) NOT NULL,
  `nilai` float NOT NULL,
  PRIMARY KEY (`jumlah`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ir`
--

INSERT INTO `ir` (`jumlah`, `nilai`) VALUES
(1, 0),
(2, 0),
(3, 0.58),
(4, 0.9),
(5, 1.12),
(6, 1.24),
(7, 1.32),
(8, 1.41),
(9, 1.45),
(10, 1.49),
(11, 1.51),
(12, 1.48),
(13, 1.56),
(14, 1.57),
(15, 1.59);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE IF NOT EXISTS `kriteria` (
  `id_kriteria` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(20) NOT NULL,
  PRIMARY KEY (`id_kriteria`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama`) VALUES
(1, 'Bahasa Indonesia'),
(2, 'Matematika (Umum)'),
(3, 'Bahasa Inggris'),
(4, 'Biologi'),
(5, 'Fisika'),
(6, 'Kimia'),
(7, 'Geografi'),
(8, 'Ekonomi'),
(9, 'Sosiologi'),
(10, 'Komputer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_rapor`
--

CREATE TABLE IF NOT EXISTS `nilai_rapor` (
  `id_nilai_rapor` int(5) NOT NULL AUTO_INCREMENT,
  `id_pengguna` int(5) NOT NULL,
  `id_kriteria` int(5) NOT NULL,
  `n_smstrtiga` float NOT NULL,
  `n_smstrempat` float NOT NULL,
  `n_smstrlima` float NOT NULL,
  PRIMARY KEY (`id_nilai_rapor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=171 ;

--
-- Dumping data untuk tabel `nilai_rapor`
--

INSERT INTO `nilai_rapor` (`id_nilai_rapor`, `id_pengguna`, `id_kriteria`, `n_smstrtiga`, `n_smstrempat`, `n_smstrlima`) VALUES
(1, 1, 1, 89, 90, 89),
(2, 1, 2, 89, 93, 88),
(3, 1, 3, 89, 89, 88),
(4, 1, 4, 87, 87, 88),
(5, 1, 5, 85, 87, 88),
(6, 1, 6, 86, 86, 88),
(7, 1, 7, 1, 1, 1),
(8, 1, 8, 1, 1, 1),
(9, 1, 9, 1, 1, 1),
(10, 1, 10, 89, 93, 87),
(11, 3, 1, 3, 6, 3),
(12, 3, 2, 5, 3, 4),
(13, 3, 3, 4, 5, 5),
(14, 3, 4, 2, 6, 3),
(15, 3, 5, 5, 3, 4),
(16, 3, 6, 6, 5, 3),
(17, 3, 7, 5, 3, 5),
(18, 3, 8, 3, 5, 3),
(19, 3, 9, 3, 3, 6),
(20, 3, 10, 5, 5, 3),
(21, 2, 1, 95, 83, 85),
(22, 2, 2, 91, 75, 85),
(23, 2, 3, 85, 85, 85),
(24, 2, 4, 80, 90, 90),
(25, 2, 5, 70, 80, 82),
(26, 2, 6, 74, 78, 78),
(27, 2, 7, 1, 1, 1),
(28, 2, 8, 1, 1, 1),
(29, 2, 9, 1, 1, 1),
(30, 2, 10, 83, 82, 72),
(31, 4, 1, 1, 3, 3),
(32, 4, 2, 2, 4, 2),
(33, 4, 3, 8, 3, 4),
(34, 4, 4, 2, 4, 5),
(35, 4, 5, 3, 4, 6),
(36, 4, 6, 2, 5, 4),
(37, 4, 7, 3, 3, 3),
(38, 4, 8, 2, 2, 4),
(39, 4, 9, 3, 4, 2),
(40, 4, 10, 5, 4, 5),
(41, 5, 1, 2, 3, 5),
(42, 5, 2, 3, 3, 3),
(43, 5, 3, 5, 4, 5),
(44, 5, 4, 2, 5, 3),
(45, 5, 5, 5, 5, 4),
(46, 5, 6, 2, 25, 3),
(47, 5, 7, 53, 5, 5),
(48, 5, 8, 55, 4, 3),
(49, 5, 9, 3, 5, 5),
(50, 5, 10, 6, 3, 6),
(51, 6, 1, 4, 6, 4),
(52, 6, 2, 78, 96, 97),
(53, 6, 3, 99, 98, 67),
(54, 6, 4, 87, 56, 78),
(55, 6, 5, 88, 76, 77),
(56, 6, 6, 77, 87, 76),
(57, 6, 7, 1, 1, 1),
(58, 6, 8, 1, 1, 1),
(59, 6, 9, 1, 1, 1),
(60, 6, 10, 8, 8, 5),
(61, 7, 1, 56, 58, 96),
(62, 7, 2, 86, 96, 96),
(63, 7, 3, 67, 76, 67),
(64, 7, 4, 1, 1, 1),
(65, 7, 5, 1, 1, 1),
(66, 7, 6, 1, 1, 1),
(67, 7, 7, 88, 89, 68),
(68, 7, 8, 65, 56, 76),
(69, 7, 9, 89, 76, 54),
(70, 7, 10, 56, 78, 86),
(71, 8, 1, 68, 97, 79),
(72, 8, 2, 80, 86, 65),
(73, 8, 3, 79, 99, 77),
(74, 8, 4, 69, 57, 77),
(75, 8, 5, 8, 68, 77),
(76, 8, 6, 68, 58, 76),
(77, 8, 7, 1, 1, 1),
(78, 8, 8, 1, 1, 1),
(79, 8, 9, 1, 1, 1),
(80, 8, 10, 78, 79, 87),
(81, 9, 1, 85, 91, 79),
(82, 9, 2, 82, 77, 89),
(83, 9, 3, 84, 67, 82),
(84, 9, 4, 1, 1, 1),
(85, 9, 5, 90, 91, 1),
(86, 9, 6, 1, 1, 1),
(87, 9, 7, 1, 1, 1),
(88, 9, 8, 1, 1, 1),
(89, 9, 9, 1, 1, 1),
(90, 9, 10, 85, 79, 78),
(91, 10, 1, 8, 8, 7),
(92, 10, 2, 6, 7, 6),
(93, 10, 3, 7, 7, 6),
(94, 10, 4, 1, 1, 1),
(95, 10, 5, 1, 1, 1),
(96, 10, 6, 1, 1, 1),
(97, 10, 7, 7, 7, 6),
(98, 10, 8, 9, 8, 8),
(99, 10, 9, 9, 8, 8),
(100, 10, 10, 6, 6, 7),
(101, 11, 1, 6, 7, 8),
(102, 11, 2, 7, 7, 7),
(103, 11, 3, 7, 7, 7),
(104, 11, 4, 8, 8, 8),
(105, 11, 5, 8, 8, 8),
(106, 11, 6, 6, 7, 7),
(107, 11, 7, 6, 6, 6),
(108, 11, 8, 7, 5, 7),
(109, 11, 9, 6, 6, 6),
(110, 11, 10, 8, 8, 7),
(111, 12, 1, 76, 67, 5),
(112, 12, 2, 86, 6, 768),
(113, 12, 3, 7, 668, 76),
(114, 12, 4, 8, 8, 5),
(115, 12, 5, 9, 6, 7),
(116, 12, 6, 7, 7, 5),
(117, 12, 7, 6, 5, 8),
(118, 12, 8, 56, 868, 9),
(119, 12, 9, 75, 55, 75),
(120, 12, 10, 9, 7, 6),
(121, 13, 1, 44, 66, 33),
(122, 13, 2, 44, 66, 33),
(123, 13, 3, 44, 66, 33),
(124, 13, 4, 8, 7, 5),
(125, 13, 5, 44, 66, 33),
(126, 13, 6, 8, 7, 5),
(127, 13, 7, 8, 7, 5),
(128, 13, 8, 8, 7, 5),
(129, 13, 9, 8, 7, 5),
(130, 13, 10, 44, 66, 33),
(131, 14, 1, 2, 2, 2),
(132, 14, 2, 2, 2, 2),
(133, 14, 3, 2, 2, 2),
(134, 14, 4, 2, 2, 2),
(135, 14, 5, 2, 2, 2),
(136, 14, 6, 2, 2, 2),
(137, 14, 7, 2, 2, 2),
(138, 14, 8, 2, 2, 2),
(139, 14, 9, 2, 2, 2),
(140, 14, 10, 2, 2, 2),
(141, 15, 1, 88, 86, 86),
(142, 15, 2, 88, 86, 86),
(143, 15, 3, 88, 88, 67),
(144, 15, 4, 88, 78, 87),
(145, 15, 5, 77, 67, 78),
(146, 15, 6, 87, 86, 78),
(147, 15, 7, 86, 78, 65),
(148, 15, 8, 86, 67, 78),
(149, 15, 9, 78, 66, 66),
(150, 15, 10, 67, 77, 78),
(151, 16, 1, 95, 83, 85),
(152, 16, 2, 91, 75, 85),
(153, 16, 3, 85, 85, 85),
(154, 16, 4, 80, 90, 90),
(155, 16, 5, 70, 80, 82),
(156, 16, 6, 74, 78, 78),
(157, 16, 7, 1, 1, 1),
(158, 16, 8, 1, 1, 1),
(159, 16, 9, 1, 1, 1),
(160, 16, 10, 83, 82, 72),
(161, 17, 1, 82, 89, 85),
(162, 17, 2, 76, 88, 77),
(163, 17, 3, 87, 74, 89),
(164, 17, 4, 1, 1, 1),
(165, 17, 5, 1, 1, 1),
(166, 17, 6, 1, 1, 1),
(167, 17, 7, 83, 91, 93),
(168, 17, 8, 88, 85, 84),
(169, 17, 9, 79, 71, 85),
(170, 17, 10, 82, 88, 79);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
  `id_pengguna` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `asal_sklh` varchar(35) NOT NULL,
  `hasil` varchar(20) NOT NULL,
  `tgl_kunjung` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_pengguna`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama`, `asal_sklh`, `hasil`, `tgl_kunjung`) VALUES
(1, 'Habibah Turrahmah', 'SMAN 4 Kota Bima', 'Teknik Informatika', '2018-09-24 03:37:27'),
(3, 'Septian Pratama', 'SMAN 1', 'Agribisnis', '2018-09-27 09:14:06'),
(4, 'Nur Fitri Asih Alwani', 'SMA', 'Ilmu Hukum', '2018-10-16 05:07:09'),
(5, 'Fachmi', 'SMA N 1 KALASAN', 'Ilmu Hukum', '2018-10-23 08:27:45'),
(6, 'Fuji Handayani', 'SMA Froter Palopo', 'Akuntansi', '2018-10-19 04:15:46'),
(9, 'Taofik Krisdiyanto', 'SMKN 2 WONOSARI', 'Ilmu Hukum', '2018-10-19 05:50:02'),
(10, 'siti zulfa Nur Sabatini', 'MA Syamsul Ulum', 'Ilmu Hukum', '2018-10-19 06:22:11'),
(11, 'andre cahya pradana', 'SMA N 1 GALUR KULON PROGO', 'Teknik Mesin', '2018-10-19 06:30:13'),
(15, 'Khen', 'jogja', 'Ilmu Hukum', '2018-10-25 09:06:57'),
(16, 'ALDINO YUHAN PRATAMA', 'SMAN 8 YOGYAKARTA', 'Akuntansi', '2018-10-27 00:58:44'),
(17, 'Muhammad Nur Aziz', 'SMAN 2 Yogyakarta', 'Teknik Sipil', '2018-10-27 23:55:31'),
(18, 'Ahmadal Hadi Sarosa', 'SMK N 2 Kebumen', 'Kosong', '2018-10-27 23:54:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perbandingan_kriteria`
--

CREATE TABLE IF NOT EXISTS `perbandingan_kriteria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pengguna` int(11) NOT NULL,
  `kriteria1` int(11) NOT NULL,
  `kriteria2` int(11) NOT NULL,
  `nilai` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=766 ;

--
-- Dumping data untuk tabel `perbandingan_kriteria`
--

INSERT INTO `perbandingan_kriteria` (`id`, `id_pengguna`, `kriteria1`, `kriteria2`, `nilai`) VALUES
(1, 1, 1, 2, 2),
(2, 1, 1, 3, 0.333333),
(3, 1, 1, 4, 2),
(4, 1, 1, 5, 0.5),
(5, 1, 1, 6, 0.5),
(6, 1, 1, 7, 2),
(7, 1, 1, 8, 2),
(8, 1, 1, 9, 2),
(9, 1, 1, 10, 0.5),
(10, 1, 2, 3, 0.333333),
(11, 1, 2, 4, 1),
(12, 1, 2, 5, 0.5),
(13, 1, 2, 6, 0.5),
(14, 1, 2, 7, 1),
(15, 1, 2, 8, 1),
(16, 1, 2, 9, 1),
(17, 1, 2, 10, 0.5),
(18, 1, 3, 4, 3),
(19, 1, 3, 5, 3),
(20, 1, 3, 6, 3),
(21, 1, 3, 7, 3),
(22, 1, 3, 8, 3),
(23, 1, 3, 9, 3),
(24, 1, 3, 10, 0.5),
(25, 1, 4, 5, 0.5),
(26, 1, 4, 6, 0.5),
(27, 1, 4, 7, 1),
(28, 1, 4, 8, 1),
(29, 1, 4, 9, 1),
(30, 1, 4, 10, 0.5),
(31, 1, 5, 6, 2),
(32, 1, 5, 7, 2),
(33, 1, 5, 8, 1),
(34, 1, 5, 9, 2),
(35, 1, 5, 10, 0.5),
(36, 1, 6, 7, 2),
(37, 1, 6, 8, 1),
(38, 1, 6, 9, 2),
(39, 1, 6, 10, 0.5),
(40, 1, 7, 8, 1),
(41, 1, 7, 9, 1),
(42, 1, 7, 10, 0.5),
(43, 1, 8, 9, 1),
(44, 1, 8, 10, 0.5),
(45, 1, 9, 10, 0.5),
(46, 3, 1, 2, 2),
(47, 3, 1, 3, 2),
(48, 3, 1, 4, 2),
(49, 3, 1, 5, 3),
(50, 3, 1, 6, 1),
(51, 3, 1, 7, 2),
(52, 3, 1, 8, 2),
(53, 3, 1, 9, 2),
(54, 3, 1, 10, 2),
(55, 3, 2, 3, 2),
(56, 3, 2, 4, 1),
(57, 3, 2, 5, 3),
(58, 3, 2, 6, 1),
(59, 3, 2, 7, 1),
(60, 3, 2, 8, 1),
(61, 3, 2, 9, 1),
(62, 3, 2, 10, 1),
(63, 3, 3, 4, 3),
(64, 3, 3, 5, 3),
(65, 3, 3, 6, 3),
(66, 3, 3, 7, 3),
(67, 3, 3, 8, 3),
(68, 3, 3, 9, 3),
(69, 3, 3, 10, 2),
(70, 3, 4, 5, 1),
(71, 3, 4, 6, 2),
(72, 3, 4, 7, 1),
(73, 3, 4, 8, 1),
(74, 3, 4, 9, 1),
(75, 3, 4, 10, 3),
(76, 3, 5, 6, 2),
(77, 3, 5, 7, 2),
(78, 3, 5, 8, 1),
(79, 3, 5, 9, 2),
(80, 3, 5, 10, 1),
(81, 3, 6, 7, 2),
(82, 3, 6, 8, 1),
(83, 3, 6, 9, 2),
(84, 3, 6, 10, 2),
(85, 3, 7, 8, 1),
(86, 3, 7, 9, 1),
(87, 3, 7, 10, 1),
(88, 3, 8, 9, 1),
(89, 3, 8, 10, 3),
(90, 3, 9, 10, 1),
(91, 2, 1, 2, 1),
(92, 2, 1, 3, 1),
(93, 2, 1, 4, 1),
(94, 2, 1, 5, 1),
(95, 2, 1, 6, 1),
(96, 2, 1, 7, 1),
(97, 2, 1, 8, 1),
(98, 2, 1, 9, 1),
(99, 2, 1, 10, 1),
(100, 2, 2, 3, 2),
(101, 2, 2, 4, 2),
(102, 2, 2, 5, 2),
(103, 2, 2, 6, 2),
(104, 2, 2, 7, 2),
(105, 2, 2, 8, 2),
(106, 2, 2, 9, 2),
(107, 2, 2, 10, 2),
(108, 2, 3, 4, 3),
(109, 2, 3, 5, 3),
(110, 2, 3, 6, 3),
(111, 2, 3, 7, 3),
(112, 2, 3, 8, 3),
(113, 2, 3, 9, 3),
(114, 2, 3, 10, 3),
(115, 2, 4, 5, 1),
(116, 2, 4, 6, 1),
(117, 2, 4, 7, 1),
(118, 2, 4, 8, 1),
(119, 2, 4, 9, 1),
(120, 2, 4, 10, 1),
(121, 2, 5, 6, 2),
(122, 2, 5, 7, 2),
(123, 2, 5, 8, 1),
(124, 2, 5, 9, 2),
(125, 2, 5, 10, 1),
(126, 2, 6, 7, 2),
(127, 2, 6, 8, 2),
(128, 2, 6, 9, 2),
(129, 2, 6, 10, 2),
(130, 2, 7, 8, 2),
(131, 2, 7, 9, 2),
(132, 2, 7, 10, 2),
(133, 2, 8, 9, 1),
(134, 2, 8, 10, 1),
(135, 2, 9, 10, 1),
(136, 4, 1, 2, 3),
(137, 4, 1, 3, 2),
(138, 4, 1, 4, 1),
(139, 4, 1, 5, 3),
(140, 4, 1, 6, 1),
(141, 4, 1, 7, 1),
(142, 4, 1, 8, 3),
(143, 4, 1, 9, 3),
(144, 4, 1, 10, 2),
(145, 4, 2, 3, 2),
(146, 4, 2, 4, 2),
(147, 4, 2, 5, 3),
(148, 4, 2, 6, 2),
(149, 4, 2, 7, 3),
(150, 4, 2, 8, 3),
(151, 4, 2, 9, 2),
(152, 4, 2, 10, 2),
(153, 4, 3, 4, 3),
(154, 4, 3, 5, 2),
(155, 4, 3, 6, 3),
(156, 4, 3, 7, 3),
(157, 4, 3, 8, 1),
(158, 4, 3, 9, 1),
(159, 4, 3, 10, 3),
(160, 4, 4, 5, 3),
(161, 4, 4, 6, 1),
(162, 4, 4, 7, 3),
(163, 4, 4, 8, 3),
(164, 4, 4, 9, 1),
(165, 4, 4, 10, 3),
(166, 4, 5, 6, 1),
(167, 4, 5, 7, 3),
(168, 4, 5, 8, 3),
(169, 4, 5, 9, 1),
(170, 4, 5, 10, 1),
(171, 4, 6, 7, 2),
(172, 4, 6, 8, 1),
(173, 4, 6, 9, 3),
(174, 4, 6, 10, 2),
(175, 4, 7, 8, 3),
(176, 4, 7, 9, 1),
(177, 4, 7, 10, 1),
(178, 4, 8, 9, 1),
(179, 4, 8, 10, 2),
(180, 4, 9, 10, 2),
(181, 5, 1, 2, 1),
(182, 5, 1, 3, 1),
(183, 5, 1, 4, 1),
(184, 5, 1, 5, 1),
(185, 5, 1, 6, 1),
(186, 5, 1, 7, 1),
(187, 5, 1, 8, 1),
(188, 5, 1, 9, 1),
(189, 5, 1, 10, 1),
(190, 5, 2, 3, 1),
(191, 5, 2, 4, 1),
(192, 5, 2, 5, 3),
(193, 5, 2, 6, 1),
(194, 5, 2, 7, 3),
(195, 5, 2, 8, 1),
(196, 5, 2, 9, 1),
(197, 5, 2, 10, 1),
(198, 5, 3, 4, 1),
(199, 5, 3, 5, 1),
(200, 5, 3, 6, 1),
(201, 5, 3, 7, 3),
(202, 5, 3, 8, 1),
(203, 5, 3, 9, 1),
(204, 5, 3, 10, 1),
(205, 5, 4, 5, 1),
(206, 5, 4, 6, 1),
(207, 5, 4, 7, 1),
(208, 5, 4, 8, 1),
(209, 5, 4, 9, 1),
(210, 5, 4, 10, 1),
(211, 5, 5, 6, 1),
(212, 5, 5, 7, 1),
(213, 5, 5, 8, 1),
(214, 5, 5, 9, 1),
(215, 5, 5, 10, 1),
(216, 5, 6, 7, 1),
(217, 5, 6, 8, 1),
(218, 5, 6, 9, 1),
(219, 5, 6, 10, 1),
(220, 5, 7, 8, 1),
(221, 5, 7, 9, 1),
(222, 5, 7, 10, 1),
(223, 5, 8, 9, 1),
(224, 5, 8, 10, 1),
(225, 5, 9, 10, 1),
(226, 6, 1, 2, 2),
(227, 6, 1, 3, 2),
(228, 6, 1, 4, 1),
(229, 6, 1, 5, 1),
(230, 6, 1, 6, 1),
(231, 6, 1, 7, 2),
(232, 6, 1, 8, 3),
(233, 6, 1, 9, 2),
(234, 6, 1, 10, 2),
(235, 6, 2, 3, 3),
(236, 6, 2, 4, 1),
(237, 6, 2, 5, 3),
(238, 6, 2, 6, 3),
(239, 6, 2, 7, 3),
(240, 6, 2, 8, 3),
(241, 6, 2, 9, 2),
(242, 6, 2, 10, 3),
(243, 6, 3, 4, 1),
(244, 6, 3, 5, 3),
(245, 6, 3, 6, 3),
(246, 6, 3, 7, 3),
(247, 6, 3, 8, 3),
(248, 6, 3, 9, 3),
(249, 6, 3, 10, 3),
(250, 6, 4, 5, 3),
(251, 6, 4, 6, 3),
(252, 6, 4, 7, 1),
(253, 6, 4, 8, 3),
(254, 6, 4, 9, 1),
(255, 6, 4, 10, 3),
(256, 6, 5, 6, 1),
(257, 6, 5, 7, 3),
(258, 6, 5, 8, 3),
(259, 6, 5, 9, 1),
(260, 6, 5, 10, 1),
(261, 6, 6, 7, 3),
(262, 6, 6, 8, 1),
(263, 6, 6, 9, 1),
(264, 6, 6, 10, 3),
(265, 6, 7, 8, 3),
(266, 6, 7, 9, 1),
(267, 6, 7, 10, 1),
(268, 6, 8, 9, 3),
(269, 6, 8, 10, 2),
(270, 6, 9, 10, 1),
(271, 7, 1, 2, 2),
(272, 7, 1, 3, 2),
(273, 7, 1, 4, 1),
(274, 7, 1, 5, 1),
(275, 7, 1, 6, 1),
(276, 7, 1, 7, 2),
(277, 7, 1, 8, 3),
(278, 7, 1, 9, 2),
(279, 7, 1, 10, 2),
(280, 7, 2, 3, 3),
(281, 7, 2, 4, 1),
(282, 7, 2, 5, 3),
(283, 7, 2, 6, 3),
(284, 7, 2, 7, 3),
(285, 7, 2, 8, 3),
(286, 7, 2, 9, 2),
(287, 7, 2, 10, 3),
(288, 7, 3, 4, 1),
(289, 7, 3, 5, 3),
(290, 7, 3, 6, 3),
(291, 7, 3, 7, 3),
(292, 7, 3, 8, 3),
(293, 7, 3, 9, 3),
(294, 7, 3, 10, 3),
(295, 7, 4, 5, 3),
(296, 7, 4, 6, 3),
(297, 7, 4, 7, 1),
(298, 7, 4, 8, 3),
(299, 7, 4, 9, 1),
(300, 7, 4, 10, 3),
(301, 7, 5, 6, 1),
(302, 7, 5, 7, 3),
(303, 7, 5, 8, 3),
(304, 7, 5, 9, 1),
(305, 7, 5, 10, 1),
(306, 7, 6, 7, 3),
(307, 7, 6, 8, 1),
(308, 7, 6, 9, 1),
(309, 7, 6, 10, 3),
(310, 7, 7, 8, 3),
(311, 7, 7, 9, 1),
(312, 7, 7, 10, 1),
(313, 7, 8, 9, 3),
(314, 7, 8, 10, 2),
(315, 7, 9, 10, 1),
(316, 8, 1, 2, 2),
(317, 8, 1, 3, 2),
(318, 8, 1, 4, 1),
(319, 8, 1, 5, 1),
(320, 8, 1, 6, 1),
(321, 8, 1, 7, 2),
(322, 8, 1, 8, 3),
(323, 8, 1, 9, 2),
(324, 8, 1, 10, 2),
(325, 8, 2, 3, 3),
(326, 8, 2, 4, 1),
(327, 8, 2, 5, 3),
(328, 8, 2, 6, 3),
(329, 8, 2, 7, 3),
(330, 8, 2, 8, 3),
(331, 8, 2, 9, 2),
(332, 8, 2, 10, 3),
(333, 8, 3, 4, 1),
(334, 8, 3, 5, 3),
(335, 8, 3, 6, 3),
(336, 8, 3, 7, 3),
(337, 8, 3, 8, 3),
(338, 8, 3, 9, 3),
(339, 8, 3, 10, 3),
(340, 8, 4, 5, 3),
(341, 8, 4, 6, 3),
(342, 8, 4, 7, 1),
(343, 8, 4, 8, 3),
(344, 8, 4, 9, 1),
(345, 8, 4, 10, 3),
(346, 8, 5, 6, 1),
(347, 8, 5, 7, 3),
(348, 8, 5, 8, 3),
(349, 8, 5, 9, 1),
(350, 8, 5, 10, 1),
(351, 8, 6, 7, 3),
(352, 8, 6, 8, 1),
(353, 8, 6, 9, 1),
(354, 8, 6, 10, 3),
(355, 8, 7, 8, 3),
(356, 8, 7, 9, 1),
(357, 8, 7, 10, 1),
(358, 8, 8, 9, 3),
(359, 8, 8, 10, 2),
(360, 8, 9, 10, 1),
(361, 9, 1, 2, 0.5),
(362, 9, 1, 3, 2),
(363, 9, 1, 4, 2),
(364, 9, 1, 5, 2),
(365, 9, 1, 6, 2),
(366, 9, 1, 7, 2),
(367, 9, 1, 8, 2),
(368, 9, 1, 9, 2),
(369, 9, 1, 10, 0.333333),
(370, 9, 2, 3, 2),
(371, 9, 2, 4, 2),
(372, 9, 2, 5, 2),
(373, 9, 2, 6, 2),
(374, 9, 2, 7, 2),
(375, 9, 2, 8, 2),
(376, 9, 2, 9, 2),
(377, 9, 2, 10, 0.333333),
(378, 9, 3, 4, 2),
(379, 9, 3, 5, 2),
(380, 9, 3, 6, 2),
(381, 9, 3, 7, 2),
(382, 9, 3, 8, 2),
(383, 9, 3, 9, 2),
(384, 9, 3, 10, 0.333333),
(385, 9, 4, 5, 0.5),
(386, 9, 4, 6, 2),
(387, 9, 4, 7, 2),
(388, 9, 4, 8, 2),
(389, 9, 4, 9, 2),
(390, 9, 4, 10, 0.333333),
(391, 9, 5, 6, 2),
(392, 9, 5, 7, 2),
(393, 9, 5, 8, 2),
(394, 9, 5, 9, 2),
(395, 9, 5, 10, 0.333333),
(396, 9, 6, 7, 0.5),
(397, 9, 6, 8, 0.5),
(398, 9, 6, 9, 0.5),
(399, 9, 6, 10, 0.333333),
(400, 9, 7, 8, 2),
(401, 9, 7, 9, 2),
(402, 9, 7, 10, 0.333333),
(403, 9, 8, 9, 2),
(404, 9, 8, 10, 0.333333),
(405, 9, 9, 10, 0.333333),
(406, 10, 1, 2, 1),
(407, 10, 1, 3, 0.5),
(408, 10, 1, 4, 1),
(409, 10, 1, 5, 1),
(410, 10, 1, 6, 1),
(411, 10, 1, 7, 1),
(412, 10, 1, 8, 0.5),
(413, 10, 1, 9, 0.333333),
(414, 10, 1, 10, 1),
(415, 10, 2, 3, 0.5),
(416, 10, 2, 4, 1),
(417, 10, 2, 5, 1),
(418, 10, 2, 6, 1),
(419, 10, 2, 7, 1),
(420, 10, 2, 8, 0.5),
(421, 10, 2, 9, 0.5),
(422, 10, 2, 10, 1),
(423, 10, 3, 4, 2),
(424, 10, 3, 5, 2),
(425, 10, 3, 6, 2),
(426, 10, 3, 7, 2),
(427, 10, 3, 8, 0.5),
(428, 10, 3, 9, 0.5),
(429, 10, 3, 10, 2),
(430, 10, 4, 5, 1),
(431, 10, 4, 6, 1),
(432, 10, 4, 7, 1),
(433, 10, 4, 8, 0.5),
(434, 10, 4, 9, 0.5),
(435, 10, 4, 10, 1),
(436, 10, 5, 6, 1),
(437, 10, 5, 7, 1),
(438, 10, 5, 8, 0.5),
(439, 10, 5, 9, 0.5),
(440, 10, 5, 10, 1),
(441, 10, 6, 7, 1),
(442, 10, 6, 8, 0.5),
(443, 10, 6, 9, 0.5),
(444, 10, 6, 10, 1),
(445, 10, 7, 8, 0.5),
(446, 10, 7, 9, 0.5),
(447, 10, 7, 10, 1),
(448, 10, 8, 9, 2),
(449, 10, 8, 10, 2),
(450, 10, 9, 10, 2),
(451, 11, 1, 2, 0.5),
(452, 11, 1, 3, 0.5),
(453, 11, 1, 4, 0.333333),
(454, 11, 1, 5, 0.5),
(455, 11, 1, 6, 0.5),
(456, 11, 1, 7, 1),
(457, 11, 1, 8, 1),
(458, 11, 1, 9, 1),
(459, 11, 1, 10, 0.5),
(460, 11, 2, 3, 2),
(461, 11, 2, 4, 0.333333),
(462, 11, 2, 5, 0.333333),
(463, 11, 2, 6, 0.333333),
(464, 11, 2, 7, 2),
(465, 11, 2, 8, 2),
(466, 11, 2, 9, 1),
(467, 11, 2, 10, 0.5),
(468, 11, 3, 4, 0.333333),
(469, 11, 3, 5, 0.333333),
(470, 11, 3, 6, 2),
(471, 11, 3, 7, 2),
(472, 11, 3, 8, 1),
(473, 11, 3, 9, 1),
(474, 11, 3, 10, 0.5),
(475, 11, 4, 5, 0.333333),
(476, 11, 4, 6, 0.5),
(477, 11, 4, 7, 3),
(478, 11, 4, 8, 3),
(479, 11, 4, 9, 3),
(480, 11, 4, 10, 0.5),
(481, 11, 5, 6, 2),
(482, 11, 5, 7, 2),
(483, 11, 5, 8, 2),
(484, 11, 5, 9, 2),
(485, 11, 5, 10, 0.5),
(486, 11, 6, 7, 2),
(487, 11, 6, 8, 2),
(488, 11, 6, 9, 2),
(489, 11, 6, 10, 2),
(490, 11, 7, 8, 1),
(491, 11, 7, 9, 1),
(492, 11, 7, 10, 0.5),
(493, 11, 8, 9, 1),
(494, 11, 8, 10, 1),
(495, 11, 9, 10, 1),
(496, 12, 1, 2, 1),
(497, 12, 1, 3, 2),
(498, 12, 1, 4, 2),
(499, 12, 1, 5, 3),
(500, 12, 1, 6, 3),
(501, 12, 1, 7, 1),
(502, 12, 1, 8, 1),
(503, 12, 1, 9, 1),
(504, 12, 1, 10, 1),
(505, 12, 2, 3, 1),
(506, 12, 2, 4, 1),
(507, 12, 2, 5, 1),
(508, 12, 2, 6, 1),
(509, 12, 2, 7, 1),
(510, 12, 2, 8, 1),
(511, 12, 2, 9, 1),
(512, 12, 2, 10, 1),
(513, 12, 3, 4, 1),
(514, 12, 3, 5, 1),
(515, 12, 3, 6, 1),
(516, 12, 3, 7, 1),
(517, 12, 3, 8, 3),
(518, 12, 3, 9, 3),
(519, 12, 3, 10, 1),
(520, 12, 4, 5, 1),
(521, 12, 4, 6, 1),
(522, 12, 4, 7, 1),
(523, 12, 4, 8, 1),
(524, 12, 4, 9, 1),
(525, 12, 4, 10, 1),
(526, 12, 5, 6, 1),
(527, 12, 5, 7, 1),
(528, 12, 5, 8, 1),
(529, 12, 5, 9, 2),
(530, 12, 5, 10, 1),
(531, 12, 6, 7, 2),
(532, 12, 6, 8, 1),
(533, 12, 6, 9, 2),
(534, 12, 6, 10, 3),
(535, 12, 7, 8, 1),
(536, 12, 7, 9, 1),
(537, 12, 7, 10, 1),
(538, 12, 8, 9, 1),
(539, 12, 8, 10, 1),
(540, 12, 9, 10, 1),
(541, 13, 1, 2, 2),
(542, 13, 1, 3, 2),
(543, 13, 1, 4, 2),
(544, 13, 1, 5, 2),
(545, 13, 1, 6, 2),
(546, 13, 1, 7, 2),
(547, 13, 1, 8, 2),
(548, 13, 1, 9, 2),
(549, 13, 1, 10, 2),
(550, 13, 2, 3, 2),
(551, 13, 2, 4, 2),
(552, 13, 2, 5, 2),
(553, 13, 2, 6, 3),
(554, 13, 2, 7, 2),
(555, 13, 2, 8, 2),
(556, 13, 2, 9, 2),
(557, 13, 2, 10, 2),
(558, 13, 3, 4, 2),
(559, 13, 3, 5, 2),
(560, 13, 3, 6, 2),
(561, 13, 3, 7, 2),
(562, 13, 3, 8, 2),
(563, 13, 3, 9, 2),
(564, 13, 3, 10, 0.333333),
(565, 13, 4, 5, 1),
(566, 13, 4, 6, 1),
(567, 13, 4, 7, 1),
(568, 13, 4, 8, 1),
(569, 13, 4, 9, 1),
(570, 13, 4, 10, 0.333333),
(571, 13, 5, 6, 2),
(572, 13, 5, 7, 2),
(573, 13, 5, 8, 2),
(574, 13, 5, 9, 2),
(575, 13, 5, 10, 0.333333),
(576, 13, 6, 7, 1),
(577, 13, 6, 8, 1),
(578, 13, 6, 9, 1),
(579, 13, 6, 10, 0.333333),
(580, 13, 7, 8, 1),
(581, 13, 7, 9, 1),
(582, 13, 7, 10, 0.333333),
(583, 13, 8, 9, 1),
(584, 13, 8, 10, 0.333333),
(585, 13, 9, 10, 0.333333),
(586, 14, 1, 2, 1),
(587, 14, 1, 3, 1),
(588, 14, 1, 4, 1),
(589, 14, 1, 5, 1),
(590, 14, 1, 6, 1),
(591, 14, 1, 7, 1),
(592, 14, 1, 8, 1),
(593, 14, 1, 9, 1),
(594, 14, 1, 10, 1),
(595, 14, 2, 3, 1),
(596, 14, 2, 4, 1),
(597, 14, 2, 5, 1),
(598, 14, 2, 6, 1),
(599, 14, 2, 7, 1),
(600, 14, 2, 8, 2),
(601, 14, 2, 9, 1),
(602, 14, 2, 10, 1),
(603, 14, 3, 4, 1),
(604, 14, 3, 5, 1),
(605, 14, 3, 6, 1),
(606, 14, 3, 7, 1),
(607, 14, 3, 8, 1),
(608, 14, 3, 9, 1),
(609, 14, 3, 10, 1),
(610, 14, 4, 5, 1),
(611, 14, 4, 6, 1),
(612, 14, 4, 7, 1),
(613, 14, 4, 8, 1),
(614, 14, 4, 9, 1),
(615, 14, 4, 10, 1),
(616, 14, 5, 6, 1),
(617, 14, 5, 7, 1),
(618, 14, 5, 8, 1),
(619, 14, 5, 9, 1),
(620, 14, 5, 10, 1),
(621, 14, 6, 7, 1),
(622, 14, 6, 8, 1),
(623, 14, 6, 9, 1),
(624, 14, 6, 10, 1),
(625, 14, 7, 8, 1),
(626, 14, 7, 9, 1),
(627, 14, 7, 10, 1),
(628, 14, 8, 9, 1),
(629, 14, 8, 10, 1),
(630, 14, 9, 10, 1),
(631, 15, 1, 2, 1),
(632, 15, 1, 3, 1),
(633, 15, 1, 4, 1),
(634, 15, 1, 5, 1),
(635, 15, 1, 6, 1),
(636, 15, 1, 7, 1),
(637, 15, 1, 8, 3),
(638, 15, 1, 9, 1),
(639, 15, 1, 10, 1),
(640, 15, 2, 3, 1),
(641, 15, 2, 4, 1),
(642, 15, 2, 5, 1),
(643, 15, 2, 6, 1),
(644, 15, 2, 7, 3),
(645, 15, 2, 8, 1),
(646, 15, 2, 9, 1),
(647, 15, 2, 10, 1),
(648, 15, 3, 4, 1),
(649, 15, 3, 5, 1),
(650, 15, 3, 6, 1),
(651, 15, 3, 7, 1),
(652, 15, 3, 8, 1),
(653, 15, 3, 9, 1),
(654, 15, 3, 10, 1),
(655, 15, 4, 5, 1),
(656, 15, 4, 6, 1),
(657, 15, 4, 7, 1),
(658, 15, 4, 8, 1),
(659, 15, 4, 9, 1),
(660, 15, 4, 10, 1),
(661, 15, 5, 6, 1),
(662, 15, 5, 7, 1),
(663, 15, 5, 8, 1),
(664, 15, 5, 9, 1),
(665, 15, 5, 10, 1),
(666, 15, 6, 7, 1),
(667, 15, 6, 8, 1),
(668, 15, 6, 9, 1),
(669, 15, 6, 10, 1),
(670, 15, 7, 8, 1),
(671, 15, 7, 9, 1),
(672, 15, 7, 10, 1),
(673, 15, 8, 9, 1),
(674, 15, 8, 10, 1),
(675, 15, 9, 10, 1),
(676, 16, 1, 2, 0.5),
(677, 16, 1, 3, 0.333333),
(678, 16, 1, 4, 3),
(679, 16, 1, 5, 0.5),
(680, 16, 1, 6, 0.333333),
(681, 16, 1, 7, 1),
(682, 16, 1, 8, 1),
(683, 16, 1, 9, 1),
(684, 16, 1, 10, 2),
(685, 16, 2, 3, 2),
(686, 16, 2, 4, 0.333333),
(687, 16, 2, 5, 2),
(688, 16, 2, 6, 0.333333),
(689, 16, 2, 7, 1),
(690, 16, 2, 8, 1),
(691, 16, 2, 9, 0.5),
(692, 16, 2, 10, 1),
(693, 16, 3, 4, 2),
(694, 16, 3, 5, 1),
(695, 16, 3, 6, 0.333333),
(696, 16, 3, 7, 1),
(697, 16, 3, 8, 1),
(698, 16, 3, 9, 1),
(699, 16, 3, 10, 1),
(700, 16, 4, 5, 0.5),
(701, 16, 4, 6, 1),
(702, 16, 4, 7, 1),
(703, 16, 4, 8, 1),
(704, 16, 4, 9, 1),
(705, 16, 4, 10, 0.5),
(706, 16, 5, 6, 0.5),
(707, 16, 5, 7, 1),
(708, 16, 5, 8, 1),
(709, 16, 5, 9, 1),
(710, 16, 5, 10, 1),
(711, 16, 6, 7, 2),
(712, 16, 6, 8, 1),
(713, 16, 6, 9, 2),
(714, 16, 6, 10, 1),
(715, 16, 7, 8, 1),
(716, 16, 7, 9, 0.5),
(717, 16, 7, 10, 0.5),
(718, 16, 8, 9, 0.333333),
(719, 16, 8, 10, 0.5),
(720, 16, 9, 10, 1),
(721, 17, 1, 2, 1),
(722, 17, 1, 3, 0.5),
(723, 17, 1, 4, 1),
(724, 17, 1, 5, 1),
(725, 17, 1, 6, 1),
(726, 17, 1, 7, 0.333333),
(727, 17, 1, 8, 0.333333),
(728, 17, 1, 9, 0.333333),
(729, 17, 1, 10, 1),
(730, 17, 2, 3, 1),
(731, 17, 2, 4, 1),
(732, 17, 2, 5, 1),
(733, 17, 2, 6, 1),
(734, 17, 2, 7, 0.5),
(735, 17, 2, 8, 0.5),
(736, 17, 2, 9, 0.5),
(737, 17, 2, 10, 1),
(738, 17, 3, 4, 1),
(739, 17, 3, 5, 1),
(740, 17, 3, 6, 1),
(741, 17, 3, 7, 0.5),
(742, 17, 3, 8, 0.333333),
(743, 17, 3, 9, 3),
(744, 17, 3, 10, 1),
(745, 17, 4, 5, 1),
(746, 17, 4, 6, 1),
(747, 17, 4, 7, 0.333333),
(748, 17, 4, 8, 0.333333),
(749, 17, 4, 9, 0.333333),
(750, 17, 4, 10, 1),
(751, 17, 5, 6, 1),
(752, 17, 5, 7, 0.5),
(753, 17, 5, 8, 0.333333),
(754, 17, 5, 9, 0.333333),
(755, 17, 5, 10, 1),
(756, 17, 6, 7, 0.5),
(757, 17, 6, 8, 0.5),
(758, 17, 6, 9, 0.333333),
(759, 17, 6, 10, 1),
(760, 17, 7, 8, 2),
(761, 17, 7, 9, 2),
(762, 17, 7, 10, 2),
(763, 17, 8, 9, 2),
(764, 17, 8, 10, 2),
(765, 17, 9, 10, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pv_kriteria`
--

CREATE TABLE IF NOT EXISTS `pv_kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pv_kriteria`
--

INSERT INTO `pv_kriteria` (`id_kriteria`, `id_pengguna`, `nilai`) VALUES
(1, 1, 0.0966068),
(2, 1, 0.0604639),
(3, 1, 0.203253),
(4, 1, 0.0604639),
(5, 1, 0.115507),
(6, 1, 0.101812),
(7, 1, 0.0604639),
(8, 1, 0.0698118),
(9, 1, 0.0604639),
(10, 1, 0.171153),
(1, 3, 0.164387),
(2, 3, 0.109872),
(3, 3, 0.17312),
(4, 3, 0.0936211),
(5, 3, 0.0855529),
(6, 3, 0.0939699),
(7, 3, 0.0664081),
(8, 3, 0.0856211),
(9, 3, 0.0664081),
(10, 3, 0.0610394),
(1, 2, 0.0941682),
(2, 2, 0.16167),
(3, 2, 0.189259),
(4, 2, 0.0753085),
(5, 2, 0.0972993),
(6, 2, 0.0979514),
(7, 2, 0.0863774),
(8, 2, 0.0674382),
(9, 2, 0.0630903),
(10, 2, 0.0674382),
(1, 4, 0.168136),
(2, 4, 0.153457),
(3, 4, 0.138329),
(4, 4, 0.118314),
(5, 4, 0.0777083),
(6, 4, 0.0983669),
(7, 4, 0.0667716),
(8, 4, 0.0595746),
(9, 4, 0.0702578),
(10, 4, 0.0490856),
(1, 5, 0.0977289),
(2, 5, 0.128681),
(3, 5, 0.112015),
(4, 5, 0.0977289),
(5, 5, 0.0900366),
(6, 5, 0.0977289),
(7, 5, 0.0828938),
(8, 5, 0.0977289),
(9, 5, 0.0977289),
(10, 5, 0.0977289),
(1, 6, 0.142707),
(2, 6, 0.168844),
(3, 6, 0.142615),
(4, 6, 0.13678),
(5, 6, 0.0836615),
(6, 6, 0.0840615),
(7, 6, 0.0654353),
(8, 6, 0.0627145),
(9, 6, 0.0642904),
(10, 6, 0.0488899),
(1, 7, 0.142707),
(2, 7, 0.168844),
(3, 7, 0.142615),
(4, 7, 0.13678),
(5, 7, 0.0836615),
(6, 7, 0.0840615),
(7, 7, 0.0654353),
(8, 7, 0.0627145),
(9, 7, 0.0642904),
(10, 7, 0.0488899),
(1, 8, 0.142707),
(2, 8, 0.168844),
(3, 8, 0.142615),
(4, 8, 0.13678),
(5, 8, 0.0836615),
(6, 8, 0.0840615),
(7, 8, 0.0654353),
(8, 8, 0.0627145),
(9, 8, 0.0642904),
(10, 8, 0.0488899),
(1, 9, 0.119056),
(2, 9, 0.135832),
(3, 9, 0.104702),
(4, 9, 0.0810135),
(5, 9, 0.0921564),
(6, 9, 0.0458331),
(7, 9, 0.0709905),
(8, 9, 0.0618823),
(9, 9, 0.0535358),
(10, 9, 0.234998),
(1, 10, 0.073148),
(2, 10, 0.075587),
(3, 10, 0.134766),
(4, 10, 0.075587),
(5, 10, 0.075587),
(6, 10, 0.075587),
(7, 10, 0.075587),
(8, 10, 0.177573),
(9, 10, 0.160991),
(10, 10, 0.075587),
(1, 11, 0.0556315),
(2, 11, 0.0831769),
(3, 11, 0.0862804),
(4, 11, 0.144791),
(5, 11, 0.167473),
(6, 11, 0.139289),
(7, 11, 0.0556315),
(8, 11, 0.0653298),
(9, 11, 0.0686631),
(10, 11, 0.133735),
(1, 12, 0.149935),
(2, 12, 0.0937527),
(3, 12, 0.118183),
(4, 12, 0.087231),
(5, 12, 0.0921999),
(6, 12, 0.117958),
(7, 12, 0.088914),
(8, 12, 0.0868562),
(9, 12, 0.0776696),
(10, 12, 0.0873011),
(1, 13, 0.170887),
(2, 13, 0.153045),
(3, 13, 0.108027),
(4, 13, 0.0644902),
(5, 13, 0.0891226),
(6, 13, 0.058205),
(7, 13, 0.0606441),
(8, 13, 0.0606441),
(9, 13, 0.0606441),
(10, 13, 0.174291),
(1, 14, 0.0996172),
(2, 14, 0.108708),
(3, 14, 0.0996172),
(4, 14, 0.0996172),
(5, 14, 0.0996172),
(6, 14, 0.0996172),
(7, 14, 0.0996172),
(8, 14, 0.0943541),
(9, 14, 0.0996172),
(10, 14, 0.0996172),
(1, 15, 0.114762),
(2, 15, 0.114762),
(3, 15, 0.0980952),
(4, 15, 0.0980952),
(5, 15, 0.0980952),
(6, 15, 0.0980952),
(7, 15, 0.0909524),
(8, 15, 0.0909524),
(9, 15, 0.0980952),
(10, 15, 0.0980952),
(1, 16, 0.0910176),
(2, 16, 0.0946956),
(3, 16, 0.0971769),
(4, 16, 0.0869636),
(5, 16, 0.0929995),
(6, 16, 0.163374),
(7, 16, 0.0723646),
(8, 16, 0.0782712),
(9, 16, 0.113469),
(10, 16, 0.109668),
(1, 17, 0.0604924),
(2, 17, 0.0721881),
(3, 17, 0.0996324),
(4, 17, 0.0647178),
(5, 17, 0.0679436),
(6, 17, 0.0705752),
(7, 17, 0.181975),
(8, 17, 0.171626),
(9, 17, 0.138661),
(10, 17, 0.0721881);

-- --------------------------------------------------------

--
-- Struktur dari tabel `relasi`
--

CREATE TABLE IF NOT EXISTS `relasi` (
  `id_relasi` int(10) NOT NULL AUTO_INCREMENT,
  `id_alternatif` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  PRIMARY KEY (`id_relasi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=119 ;

--
-- Dumping data untuk tabel `relasi`
--

INSERT INTO `relasi` (`id_relasi`, `id_alternatif`, `id_kriteria`) VALUES
(11, 7, 1),
(12, 7, 2),
(13, 7, 3),
(14, 7, 5),
(15, 7, 10),
(31, 3, 1),
(32, 3, 2),
(33, 3, 7),
(34, 3, 8),
(35, 3, 9),
(41, 8, 1),
(42, 8, 3),
(43, 8, 4),
(44, 8, 5),
(45, 8, 8),
(46, 5, 1),
(47, 5, 2),
(48, 5, 5),
(49, 5, 7),
(50, 5, 10),
(78, 6, 2),
(79, 6, 3),
(80, 6, 5),
(81, 6, 6),
(82, 6, 10),
(99, 4, 2),
(100, 4, 3),
(101, 4, 7),
(102, 4, 8),
(103, 4, 9),
(109, 2, 1),
(110, 2, 2),
(111, 2, 3),
(112, 2, 8),
(113, 2, 9),
(114, 1, 1),
(115, 1, 2),
(116, 1, 3),
(117, 1, 8),
(118, 1, 10);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
