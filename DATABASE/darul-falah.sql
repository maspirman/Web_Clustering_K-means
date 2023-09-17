-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2022 at 11:56 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `darul-falah`
--

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `logo` varchar(255) NOT NULL,
  `tentang` varchar(1000) NOT NULL,
  `no_tlp` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`logo`, `tentang`, `no_tlp`, `alamat`, `email`) VALUES
('', 'Pondok Pesantren Darul Falah 1 adalah lembaga pendidikan non formal keagamaan yang telah dirintis oleh al-maghfurlah KH. Ali Ahmad sejak tahun 1971. Sebagai lembaga yang konsen dalam tafaqquh fii ad-Din, pesantren ini dilanjutkan generasi sekarang sebagai bentuk kebulatan tekad untuk memfasilitasi para generasi muslimah dalam menimba ilmu pengetahuan. \r\nIlmu inilah yang diharapkan nanti menjadi bekal para santriwati ketika mereka kembali ke masyarakat sebagai mundzirul qoum.\r\n', '800-123-4567 6587', 'Jln. Masjid Jami’ Roudlotul Arifin, Cukir, Diwek, Jombang', 'darulfalahcukir@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `name`, `username`, `password`) VALUES
(1, 'administrtor', 'admin', 'admin'),
(2, 'Siti Khumairoh', 'siti', 'siti');

-- --------------------------------------------------------

--
-- Table structure for table `tb_clustering`
--

CREATE TABLE `tb_clustering` (
  `id_clustering` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `c1` int(11) NOT NULL,
  `c2` int(11) NOT NULL,
  `c3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_clustering`
--

INSERT INTO `tb_clustering` (`id_clustering`, `id_kriteria`, `c1`, `c2`, `c3`) VALUES
(1, 1, 90, 78, 55),
(2, 2, 88, 78, 50),
(3, 3, 90, 75, 50),
(4, 4, 88, 77, 49);

-- --------------------------------------------------------

--
-- Table structure for table `tb_hasil_clustering`
--

CREATE TABLE `tb_hasil_clustering` (
  `id_santri` varchar(300) DEFAULT NULL,
  `nama_santri` varchar(300) DEFAULT NULL,
  `alquran` varchar(300) DEFAULT NULL,
  `tajwid` varchar(300) DEFAULT NULL,
  `fashohah` varchar(300) DEFAULT NULL,
  `tartil` varchar(300) DEFAULT NULL,
  `c1` varchar(300) DEFAULT NULL,
  `c2` varchar(300) DEFAULT NULL,
  `c3` varchar(300) DEFAULT NULL,
  `jarak` varchar(300) DEFAULT NULL,
  `Cluster` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_hasil_clustering`
--

INSERT INTO `tb_hasil_clustering` (`id_santri`, `nama_santri`, `alquran`, `tajwid`, `fashohah`, `tartil`, `c1`, `c2`, `c3`, `jarak`, `Cluster`) VALUES
('1', 'Arikta Dama Ilahi', '76', '72', '65', '62', '32.73543945848', '17.894878224416', '10.422553891903', '10.422553891903', 'B'),
('2', 'Aulia Dwi Safitri', '89', '85', '90', '85', '6.2466600072098', '54.524245371516', '29.317546256781', '6.2466600072098', 'A'),
('3', 'Aulia Ismi', '88', '86', '80', '78', '7.50824229911', '45.753251250594', '20.773023817406', '7.50824229911', 'A'),
('4', 'Aulia Nur Rohmah', '85', '85', '88', '85', '4.1113397070604', '51.705189939373', '26.53648780802', '4.1113397070604', 'A'),
('5', 'Alya Aisya Putri', '68', '60', '60', '55', '47.82895562878', '3.8764244693618', '24.611800843107', '3.8764244693618', 'C'),
('6', 'Fajriyah Mabruroh', '68', '65', '62', '60', '41.56451607489', '7.1898076005783', '18.177112185587', '7.1898076005783', 'C'),
('7', 'Fii Amrina Himmatul U', '83', '80', '81', '78', '7.8977023508198', '40.818623200691', '15.533714826026', '7.8977023508198', 'A'),
('8', 'Jessica Mutia Wardana', '78', '70', '75', '73', '21.216465499807', '28.369467155142', '6.1433493096796', '6.1433493096796', 'B'),
('9', 'Sausan EL Fatih Novianti', '65', '60', '58', '56', '49.556475769141', '1.3012814197295', '26.216336439257', '1.3012814197295', 'C'),
('10', 'Siflia Khusna Syafa', '68', '67', '60', '60', '41.871900546349', '7.8799323178142', '18.552228577322', '7.8799323178142', 'C'),
('11', 'Siti Faridatus Saniyah', '85', '80', '84', '80', '4.834635707284', '44.468265838311', '19.332375455198', '4.834635707284', 'A'),
('12', 'Uswatun Khasanah', '80', '78', '80', '78', '10.885373189789', '38.080966374293', '13.045504405165', '10.885373189789', 'A'),
('13', 'Zanuba Khanza Zakiyya', '89', '85', '87', '85', '4.3274292135881', '52.857292149081', '27.583543134482', '4.3274292135881', 'A'),
('14', 'Eisya Rahma Aulia', '75', '75', '70', '67', '25.96304267175', '23.337237768568', '3.6767538017276', '3.6767538017276', 'B'),
('15', 'Filza Nur Aini', '78', '75', '73', '70', '21.19982372454', '27.677186754919', '2.6176042198644', '2.6176042198644', 'B'),
('16', 'Iin Nur Kholidah', '85', '80', '80', '80', '6.9508905107715', '42.317372319179', '17.151827459055', '6.9508905107715', 'A'),
('17', 'Izzatul Laili', '55', '50', '50', '49', '66.883723924073', '18.551549800488', '43.675147607289', '18.551549800488', 'C'),
('18', 'Maknun Filsafah', '65', '60', '59', '55', '49.56715761658', '1.6613247725836', '26.233283919197', '1.6613247725836', 'C'),
('19', 'Musfirah Dalliah H Q', '70', '65', '68', '65', '34.871489231831', '14.413882197382', '12.145720172905', '12.145720172905', 'B'),
('20', 'Novia Rahmawati', '68', '60', '62', '60', '44.041660051242', '6.1122827159744', '21.012342052197', '6.1122827159744', 'C'),
('21', 'Nurus Saidah Al-fauzani', '75', '75', '70', '68', '25.372927839097', '23.816520876624', '3.0852096393144', '3.0852096393144', 'B'),
('22', 'Rizka Lailatul Hamidah', '90', '88', '85', '80', '6.3308439228184', '51.222000481564', '26.063313225611', '6.3308439228184', 'A'),
('23', 'Seila Viona Rosalina', '73', '70', '70', '68', '28.364593651424', '20.391828428728', '5.3713919845653', '5.3713919845653', 'B'),
('24', 'Umdatul Khoiriyah', '80', '78', '75', '70', '18.248856436656', '31.25742578439', '6.6136783064147', '6.6136783064147', 'B'),
('25', 'Umi Khusnul Kholifah', '78', '75', '70', '68', '24.201790090789', '25.255230481361', '3.4907284605344', '3.4907284605344', 'B'),
('26', 'Uswatun Khasanah', '85', '80', '80', '78', '7.9311483523416', '41.225720127125', '16.005785990859', '7.9311483523416', 'A'),
('27', 'Aisha Mutiara Yudha Sahila', '60', '55', '58', '55', '54.854005667009', '7.8162224465104', '31.811365311205', '7.8162224465104', 'C'),
('28', 'Alda Sayyidatul Fatimah', '70', '70', '72', '68', '28.916057966198', '20.604853797103', '7.208534037026', '7.208534037026', 'B'),
('29', 'Elsa Meiva Hasavila', '80', '78', '78', '75', '13.410603664915', '35.313264740982', '10.020349664927', '10.020349664927', 'B'),
('30', 'Husnatul Amini', '78', '75', '70', '67', '24.819765535671', '24.803763155349', '4.0230815533848', '4.0230815533848', 'B'),
('31', 'Idamatul Ezmi Azizah', '85', '85', '85', '83', '1.7880804886554', '48.941052978728', '23.654143791702', '1.7880804886554', 'A'),
('32', 'Isma Fitri Fatimatuz Zahro', '68', '66', '65', '62', '38.404467372779', '10.428806259587', '15.12785020589', '10.428806259587', 'C'),
('33', 'Istiqomatun Nisa’ A', '88', '85', '87', '85', '3.7522772785452', '52.405724878108', '27.128637322265', '3.7522772785452', 'A'),
('34', 'Nadila Auliatul Faizah', '73', '70', '70', '72', '26.521193457726', '22.939630918275', '5.7316535006795', '5.7316535006795', 'B'),
('35', 'Novelia Bilqis', '67', '66', '60', '58', '43.813342677086', '5.8731025304632', '20.433269892959', '5.8731025304632', 'C'),
('36', 'Nurul Kamalia', '78', '75', '74', '70', '20.644544844436', '28.208036679878', '3.1210159789307', '3.1210159789307', 'B'),
('37', 'Revalina Febrianti A', '90', '88', '90', '88', '9.2493336522357', '57.938127918208', '32.645684871675', '9.2493336522357', 'A'),
('38', 'Farasyifa Ulinajwa Jasmine', '77', '74', '72', '70', '22.592753837272', '26.190838092738', '1.1385500851066', '1.1385500851066', 'B'),
('39', 'Marta Rindra Mayang P', '63', '60', '56', '55', '52.070287870269', '3.56277045757', '28.700883971417', '3.56277045757', 'C'),
('40', 'Syafa Tirsyah Rahma I', '69', '67', '65', '60', '38.622877205079', '10.390380166288', '15.281312722359', '10.390380166288', 'C'),
('41', 'Rahayu Intan', '87', '85', '88', '87', '5.4414149391305', '53.644136057293', '28.459848259662', '5.4414149391305', 'A'),
('42', 'Fina Rodia', '59', '57', '50', '50', '61.24413678596', '12.765578717786', '37.861834589974', '12.765578717786', 'C'),
('43', 'Vera Kristina', '76', '75', '73', '70', '22.048546625673', '26.776108753887', '1.7533037597844', '1.7533037597844', 'B'),
('44', 'Elvi Erma', '85', '85', '87', '85', '3.4840218576378', '51.144501170703', '25.947953605175', '3.4840218576378', 'A'),
('45', 'Anti Wijaya', '68', '65', '60', '58', '43.802600608516', '5.5821142947811', '20.411507284609', '5.5821142947811', 'C'),
('46', 'Yuni Ernawati', '60', '58', '55', '50', '57.609922011637', '9.1484060542443', '34.243680141446', '9.1484060542443', 'C'),
('47', 'Adelia Florenza', '83', '80', '85', '83', '4.8950932285568', '45.867490302682', '20.948791178773', '4.8950932285568', 'A'),
('48', 'Yolanda', '78', '78', '75', '77', '15.28619704404', '34.090467875933', '9.3788572311856', '9.3788572311856', 'B'),
('49', 'Puput Dwi', '88', '88', '90', '87', '8.034312230078', '56.543434632148', '31.272399379692', '8.034312230078', 'A'),
('50', 'Nidaul Izah', '76', '75', '77', '71', '19.516739332861', '29.601126104705', '5.3506662790376', '5.3506662790376', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kriteria`
--

CREATE TABLE `tb_kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `jenis_kriteria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kriteria`
--

INSERT INTO `tb_kriteria` (`id_kriteria`, `jenis_kriteria`) VALUES
(1, 'Membaca Alqur\'an'),
(2, 'Tajwid'),
(3, 'Fashohah'),
(4, 'Tartil');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penilaian`
--

CREATE TABLE `tb_penilaian` (
  `id_nilai` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `id_santri` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_penilaian`
--

INSERT INTO `tb_penilaian` (`id_nilai`, `id_admin`, `id_santri`, `id_kriteria`, `nilai`) VALUES
(2, 1, 2, 1, 90),
(3, 1, 3, 1, 89),
(4, 1, 4, 1, 88),
(5, 1, 5, 1, 85),
(6, 1, 6, 1, 68),
(7, 1, 7, 1, 68),
(8, 1, 8, 1, 83),
(9, 1, 9, 1, 78),
(10, 1, 10, 1, 65),
(11, 1, 11, 1, 68),
(12, 1, 12, 1, 85),
(13, 1, 13, 1, 80),
(14, 1, 14, 1, 89),
(15, 1, 15, 1, 75),
(16, 1, 16, 1, 78),
(17, 1, 17, 1, 85),
(18, 1, 18, 1, 55),
(19, 1, 19, 1, 65),
(20, 1, 20, 1, 70),
(21, 1, 21, 1, 68),
(22, 1, 22, 1, 75),
(23, 1, 23, 1, 90),
(24, 1, 24, 1, 73),
(25, 1, 25, 1, 80),
(26, 1, 26, 1, 78),
(27, 1, 27, 1, 85),
(28, 1, 28, 1, 60),
(29, 1, 29, 1, 70),
(30, 1, 30, 1, 80),
(31, 1, 31, 1, 78),
(32, 1, 32, 1, 85),
(33, 1, 33, 1, 68),
(34, 1, 34, 1, 88),
(35, 1, 35, 1, 73),
(36, 1, 36, 1, 67),
(37, 1, 37, 1, 78),
(38, 1, 38, 1, 90),
(39, 1, 39, 1, 77),
(40, 1, 40, 1, 63),
(41, 1, 41, 1, 69),
(42, 1, 42, 1, 87),
(43, 1, 43, 1, 59),
(44, 1, 44, 1, 76),
(45, 1, 45, 1, 85),
(46, 1, 46, 1, 68),
(47, 1, 47, 1, 60),
(48, 1, 48, 1, 83),
(49, 1, 49, 1, 78),
(50, 1, 50, 1, 88),
(51, 1, 51, 1, 76),
(52, 1, 2, 2, 76),
(53, 1, 3, 2, 85),
(54, 1, 4, 2, 86),
(55, 1, 5, 2, 85),
(56, 1, 6, 2, 60),
(57, 1, 7, 2, 65),
(58, 1, 8, 2, 80),
(59, 1, 9, 2, 70),
(60, 1, 10, 2, 60),
(61, 1, 11, 2, 67),
(62, 1, 12, 2, 80),
(63, 1, 13, 2, 78),
(64, 1, 14, 2, 85),
(65, 1, 15, 2, 75),
(66, 1, 16, 2, 75),
(67, 1, 17, 2, 80),
(68, 1, 18, 2, 50),
(69, 1, 19, 2, 60),
(70, 1, 20, 2, 65),
(71, 1, 21, 2, 60),
(72, 1, 22, 2, 75),
(73, 1, 23, 2, 88),
(74, 1, 24, 2, 70),
(75, 1, 25, 2, 78),
(76, 1, 26, 2, 75),
(77, 1, 27, 2, 80),
(78, 1, 28, 2, 55),
(79, 1, 29, 2, 70),
(80, 1, 30, 2, 78),
(81, 1, 31, 2, 75),
(82, 1, 32, 2, 85),
(83, 1, 33, 2, 66),
(84, 1, 34, 2, 85),
(85, 1, 35, 2, 70),
(86, 1, 36, 2, 66),
(87, 1, 37, 2, 75),
(88, 1, 38, 2, 88),
(89, 1, 39, 2, 74),
(90, 1, 40, 2, 60),
(91, 1, 41, 2, 67),
(92, 1, 42, 2, 85),
(93, 1, 43, 2, 57),
(94, 1, 44, 2, 75),
(95, 1, 45, 2, 85),
(96, 1, 46, 2, 65),
(97, 1, 47, 2, 58),
(98, 1, 48, 2, 80),
(99, 1, 49, 2, 78),
(100, 1, 50, 2, 88),
(101, 1, 51, 2, 75),
(102, 1, 2, 3, 56),
(103, 1, 3, 3, 90),
(104, 1, 4, 3, 80),
(105, 1, 5, 3, 88),
(106, 1, 6, 3, 60),
(107, 1, 7, 3, 62),
(108, 1, 8, 3, 81),
(109, 1, 9, 3, 75),
(110, 1, 10, 3, 58),
(111, 1, 11, 3, 60),
(112, 1, 12, 3, 84),
(113, 1, 13, 3, 80),
(114, 1, 14, 3, 87),
(115, 1, 15, 3, 70),
(116, 1, 16, 3, 73),
(117, 1, 17, 3, 80),
(118, 1, 18, 3, 50),
(119, 1, 19, 3, 59),
(120, 1, 20, 3, 68),
(121, 1, 21, 3, 62),
(122, 1, 22, 3, 70),
(123, 1, 23, 3, 85),
(124, 1, 24, 3, 70),
(125, 1, 25, 3, 75),
(126, 1, 26, 3, 70),
(127, 1, 27, 3, 80),
(128, 1, 28, 3, 58),
(129, 1, 29, 3, 72),
(130, 1, 30, 3, 78),
(131, 1, 31, 3, 70),
(132, 1, 32, 3, 85),
(133, 1, 33, 3, 65),
(134, 1, 34, 3, 87),
(135, 1, 35, 3, 70),
(136, 1, 36, 3, 60),
(137, 1, 37, 3, 74),
(138, 1, 38, 3, 90),
(139, 1, 39, 3, 72),
(140, 1, 40, 3, 56),
(141, 1, 41, 3, 65),
(142, 1, 42, 3, 88),
(143, 1, 43, 3, 50),
(144, 1, 44, 3, 73),
(145, 1, 45, 3, 87),
(146, 1, 46, 3, 60),
(147, 1, 47, 3, 55),
(148, 1, 48, 3, 85),
(149, 1, 49, 3, 75),
(150, 1, 50, 3, 90),
(151, 1, 51, 3, 77),
(152, 1, 2, 4, 10),
(153, 1, 3, 4, 85),
(154, 1, 4, 4, 78),
(155, 1, 5, 4, 85),
(156, 1, 6, 4, 55),
(157, 1, 7, 4, 60),
(158, 1, 8, 4, 78),
(159, 1, 9, 4, 73),
(160, 1, 10, 4, 56),
(161, 1, 11, 4, 60),
(162, 1, 12, 4, 80),
(163, 1, 13, 4, 78),
(164, 1, 14, 4, 85),
(165, 1, 15, 4, 67),
(166, 1, 16, 4, 70),
(167, 1, 17, 4, 80),
(168, 1, 18, 4, 49),
(169, 1, 19, 4, 55),
(170, 1, 20, 4, 65),
(171, 1, 21, 4, 60),
(172, 1, 22, 4, 68),
(173, 1, 23, 4, 80),
(174, 1, 24, 4, 68),
(175, 1, 25, 4, 70),
(176, 1, 26, 4, 68),
(177, 1, 27, 4, 78),
(178, 1, 28, 4, 55),
(179, 1, 29, 4, 68),
(180, 1, 30, 4, 75),
(181, 1, 31, 4, 67),
(182, 1, 32, 4, 83),
(183, 1, 33, 4, 62),
(184, 1, 34, 4, 85),
(185, 1, 35, 4, 72),
(186, 1, 36, 4, 58),
(187, 1, 37, 4, 70),
(188, 1, 38, 4, 88),
(189, 1, 39, 4, 70),
(190, 1, 40, 4, 55),
(191, 1, 41, 4, 60),
(192, 1, 42, 4, 87),
(193, 1, 43, 4, 50),
(194, 1, 44, 4, 70),
(195, 1, 45, 4, 85),
(196, 1, 46, 4, 58),
(197, 1, 47, 4, 50),
(198, 1, 48, 4, 83),
(199, 1, 49, 4, 77),
(200, 1, 50, 4, 87),
(201, 1, 51, 4, 71);

-- --------------------------------------------------------

--
-- Table structure for table `tb_santri_2`
--

CREATE TABLE `tb_santri_2` (
  `id_santri` int(11) NOT NULL,
  `nama_santri` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` varchar(100) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `alquran` varchar(100) NOT NULL,
  `tajwid` int(100) NOT NULL,
  `fashohah` int(100) NOT NULL,
  `tartil` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_santri_2`
--

INSERT INTO `tb_santri_2` (`id_santri`, `nama_santri`, `tempat_lahir`, `tanggal_lahir`, `no_hp`, `alamat`, `alquran`, `tajwid`, `fashohah`, `tartil`) VALUES
(1, 'Arikta Dama Ilahi', 'Jakarta', '10-12-2004', '087665465656', 'Jakarta Selatan', '76', 72, 65, 62),
(2, 'Aulia Dwi Safitri', 'Jakarta', '10-12-2004', '08734343566', 'jombang', '89', 85, 90, 85),
(3, 'Aulia Ismi', 'bjn', '10-12-1490', '08734343566', 'lsdnlkdsmlkvsl', '88', 86, 80, 78),
(4, 'Aulia Nur Rohmah', '', '', '0', NULL, '85', 85, 88, 85),
(5, 'Alya Aisya Putri', '', '', '0', NULL, '68', 60, 60, 55),
(6, 'Fajriyah Mabruroh', '', '', '0', NULL, '68', 65, 62, 60),
(7, 'Fii Amrina Himmatul U', '', '', '0', NULL, '83', 80, 81, 78),
(8, 'Jessica Mutia Wardana', '', '', '0', NULL, '78', 70, 75, 73),
(9, 'Sausan EL Fatih Novianti', '', '', '0', NULL, '65', 60, 58, 56),
(10, 'Siflia Khusna Syafa', '', '', '0', NULL, '68', 67, 60, 60),
(11, 'Siti Faridatus Saniyah', '', '', '0', NULL, '85', 80, 84, 80),
(12, 'Uswatun Khasanah', '', '', '0', NULL, '80', 78, 80, 78),
(13, 'Zanuba Khanza Zakiyya', '', '', '0', NULL, '89', 85, 87, 85),
(14, 'Eisya Rahma Aulia', '', '', '0', NULL, '75', 75, 70, 67),
(15, 'Filza Nur Aini', '', '', '0', NULL, '78', 75, 73, 70),
(16, 'Iin Nur Kholidah', '', '', '0', NULL, '85', 80, 80, 80),
(17, 'Izzatul Laili', '', '', '0', NULL, '55', 50, 50, 49),
(18, 'Maknun Filsafah', '', '', '0', NULL, '65', 60, 59, 55),
(19, 'Musfirah Dalliah H Q', '', '', '0', NULL, '70', 65, 68, 65),
(20, 'Novia Rahmawati', '', '', '0', NULL, '68', 60, 62, 60),
(21, 'Nurus Saidah Al-fauzani', '', '', '0', NULL, '75', 75, 70, 68),
(22, 'Rizka Lailatul Hamidah', '', '', '0', NULL, '90', 88, 85, 80),
(23, 'Seila Viona Rosalina', '', '', '0', NULL, '73', 70, 70, 68),
(24, 'Umdatul Khoiriyah', '', '', '0', NULL, '80', 78, 75, 70),
(25, 'Umi Khusnul Kholifah', '', '', '0', NULL, '78', 75, 70, 68),
(26, 'Uswatun Khasanah', '', '', '0', NULL, '85', 80, 80, 78),
(27, 'Aisha Mutiara Yudha Sahila', '', '', '0', NULL, '60', 55, 58, 55),
(28, 'Alda Sayyidatul Fatimah', '', '', '0', NULL, '70', 70, 72, 68),
(29, 'Elsa Meiva Hasavila', '', '', '0', NULL, '80', 78, 78, 75),
(30, 'Husnatul Amini', '', '', '0', NULL, '78', 75, 70, 67),
(31, 'Idamatul Ezmi Azizah', '', '', '0', NULL, '85', 85, 85, 83),
(32, 'Isma Fitri Fatimatuz Zahro', '', '', '0', NULL, '68', 66, 65, 62),
(33, 'Istiqomatun Nisa’ A', '', '', '0', NULL, '88', 85, 87, 85),
(34, 'Nadila Auliatul Faizah', '', '', '0', NULL, '73', 70, 70, 72),
(35, 'Novelia Bilqis', '', '', '0', NULL, '67', 66, 60, 58),
(36, 'Nurul Kamalia', '', '', '0', NULL, '78', 75, 74, 70),
(37, 'Revalina Febrianti A', '', '', '0', NULL, '90', 88, 90, 88),
(38, 'Farasyifa Ulinajwa Jasmine', '', '', '0', NULL, '77', 74, 72, 70),
(39, 'Marta Rindra Mayang P', '', '', '0', NULL, '63', 60, 56, 55),
(40, 'Syafa Tirsyah Rahma I', '', '', '0', NULL, '69', 67, 65, 60),
(41, 'Rahayu  Intan', '', '', '0', NULL, '87', 85, 88, 87),
(42, 'Fina Rodia', '', '', '0', NULL, '59', 57, 50, 50),
(43, 'Vera Kristina', '', '', '0', NULL, '76', 75, 73, 70),
(44, 'Elvi Erma', '', '', '0', NULL, '85', 85, 87, 85),
(45, 'Anti Wijaya', '', '', '0', NULL, '68', 65, 60, 58),
(46, 'Yuni Ernawati', '', '', '0', NULL, '60', 58, 55, 50),
(47, 'Adelia Florenza', '', '', '0', NULL, '83', 80, 85, 83),
(48, 'Yolanda', '', '', '0', NULL, '78', 78, 75, 77),
(49, 'Puput Dwi', '', '', '0', NULL, '88', 88, 90, 87),
(50, 'Nidaul Izah', '', '', '0', NULL, '76', 75, 77, 71);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_clustering`
--
ALTER TABLE `tb_clustering`
  ADD PRIMARY KEY (`id_clustering`);

--
-- Indexes for table `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `tb_penilaian`
--
ALTER TABLE `tb_penilaian`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `tb_santri_2`
--
ALTER TABLE `tb_santri_2`
  ADD PRIMARY KEY (`id_santri`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_clustering`
--
ALTER TABLE `tb_clustering`
  MODIFY `id_clustering` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_penilaian`
--
ALTER TABLE `tb_penilaian`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;

--
-- AUTO_INCREMENT for table `tb_santri_2`
--
ALTER TABLE `tb_santri_2`
  MODIFY `id_santri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
