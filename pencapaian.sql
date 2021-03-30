-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25 Jun 2018 pada 04.46
-- Versi Server: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pencapaian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrasi`
--

CREATE TABLE IF NOT EXISTS `migrasi` (
  `rank` int(2) DEFAULT NULL,
  `class` varchar(1) CHARACTER SET utf8 DEFAULT NULL,
  `reg` varchar(5) CHARACTER SET utf8 DEFAULT NULL,
  `witel` varchar(16) CHARACTER SET utf8 DEFAULT NULL,
  `jan` varchar(4) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `migrasi`
--

INSERT INTO `migrasi` (`rank`, `class`, `reg`, `witel`, `jan`) VALUES
(0, 'C', 'REG 5', 'MADURA', ''),
(1, 'A', 'REG 2', 'JAKSEL', '5944'),
(10, 'A', 'REG 2', 'JAKPUS', '3211'),
(11, 'A', 'REG 1', 'MEDAN', '2802'),
(12, 'A', 'REG 5', 'DENPASAR', '2335'),
(13, 'B', 'REG 4', 'YOGYAKARTA', '2294'),
(14, 'A', 'REG 4', 'SEMARANG', '1924'),
(15, 'B', 'REG 5', 'SIDOARJO', '1914'),
(16, 'B', 'REG 5', 'MALANG', '1888'),
(17, 'B', 'REG 4', 'SOLO', '1503'),
(18, 'B', 'REG 1', 'RIDAR', '1372'),
(19, 'B', 'REG 3', 'BANDUNGBRT', '1218'),
(2, 'A', 'REG 5', 'SURABAYA SELATAN', '5390'),
(20, 'B', 'REG 2', 'BANTEN', '1212'),
(21, 'B', 'REG 1', 'SUMBAR', '1086'),
(22, 'C', 'REG 4', 'MAGELANG', '1066'),
(23, 'B', 'REG 1', 'SUMSEL', '996'),
(24, 'C', 'REG 1', 'SUMUT', '867'),
(25, 'C', 'REG 5', 'JEMBER', '820'),
(26, 'A', 'REG 7', 'MAKASAR', '791'),
(27, 'A', 'REG 5', 'SURABAYA UTARA', '754'),
(28, 'C', 'REG 5', 'SINGARAJA', '654'),
(29, 'B', 'REG 1', 'RIKEP', '630'),
(3, 'A', 'REG 2', 'JAKUT', '5341'),
(30, 'C', 'REG 3', 'TASIKMALAYA', '612'),
(31, 'C', 'REG 3', 'KARAWANG', '579'),
(32, 'C', 'REG 1', 'LAMPUNG', '556'),
(33, 'C', 'REG 4', 'PURWOKERTO', '537'),
(34, 'C', 'REG 5', 'KEDIRI', '534'),
(35, 'C', 'REG 1', 'JAMBI', '515'),
(36, 'B', 'REG 6', 'KALSEL', '508'),
(37, 'B', 'REG 6', 'SAMARINDA', '490'),
(38, 'C', 'REG 1', 'ACEH', '488'),
(39, 'C', 'REG 4', 'KUDUS', '452'),
(4, 'A', 'REG 2', 'TANGERANG', '4460'),
(40, 'C', 'REG 5', 'MADIUN', '413'),
(41, 'C', 'REG 1', 'BENGKULU', '404'),
(42, 'C', 'REG 7', 'SULTENG', '395'),
(43, 'C', 'REG 5', 'PASURUAN', '356'),
(44, 'B', 'REG 6', 'KALBAR', '337'),
(45, 'C', 'REG 3', 'SUKABUMI', '315'),
(46, 'C', 'REG 6', 'KALTENG', '312'),
(47, 'A', 'REG 7', 'SULUTMALUT', '309'),
(48, 'C', 'REG 3', 'CIREBON', '304'),
(49, 'B', 'REG 6', 'BALIKPAPAN', '197'),
(5, 'A', 'REG 2', 'JAKTIM', '4014'),
(50, 'C', 'REG 5', 'NTB', '183'),
(51, 'C', 'REG 4', 'PEKALONGAN', '182'),
(52, 'C', 'REG 7', 'SULTRA', '157'),
(53, 'C', 'REG 5', 'NTT', '116'),
(54, 'C', 'REG 7', 'MALUKU', '104'),
(55, 'C', 'REG 1', 'BABEL', '98'),
(56, 'C', 'REG 7', 'SULSELBAR', '75'),
(57, 'C', 'REG 6', 'KALTARA', '72'),
(58, 'C', 'REG 7', 'PAPUA', '48'),
(59, 'C', 'REG 7', 'PAPUA BARAT', '28'),
(6, 'A', 'REG 2', 'BEKASI', '3822'),
(60, 'C', 'REG 7', 'GORONTALO', '24'),
(7, 'A', 'REG 2', 'JAKBAR', '3739'),
(8, 'A', 'REG 3', 'BANDUNG', '3723'),
(9, 'A', 'REG 2', 'BOGOR', '3309');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
