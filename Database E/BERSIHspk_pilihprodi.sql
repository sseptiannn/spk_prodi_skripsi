-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02 Nov 2018 pada 06.28
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `spknya`
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pv_kriteria`
--

CREATE TABLE IF NOT EXISTS `pv_kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
