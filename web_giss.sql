-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2020 at 06:50 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_giss`
--

-- --------------------------------------------------------

--
-- Table structure for table `bangunan`
--

CREATE TABLE `bangunan` (
  `bangunan_id` int(11) NOT NULL,
  `bangunan_nama` varchar(100) NOT NULL,
  `bangunan_lat` varchar(100) NOT NULL,
  `bangunan_long` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bangunan`
--

INSERT INTO `bangunan` (`bangunan_id`, `bangunan_nama`, `bangunan_lat`, `bangunan_long`) VALUES
(1, 'Tower Cafe', '110.4343843', '-7.0628697'),
(2, 'Anak Panah Cafe', '110.4339333', '-7.0626357'),
(3, 'Bertiga Cafe', '110.4361753', '-7.0652547'),
(4, 'Burjo Cafe', '110.4370456', '-7.0673298'),
(5, 'lalasrrs', '110.433269', '-7.064986'),
(6, 'RUMAH ARIA YOYOY', '106.964943', '-6.330929'),
(7, 'Polteknes', '110.434456', '-7.05334');

-- --------------------------------------------------------

--
-- Table structure for table `bidang`
--

CREATE TABLE `bidang` (
  `bidang_kode` int(11) NOT NULL,
  `bidang_nama` varchar(200) NOT NULL,
  `bidang_keterangan` text NOT NULL,
  `bidang_gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bidang`
--

INSERT INTO `bidang` (`bidang_kode`, `bidang_nama`, `bidang_keterangan`, `bidang_gambar`) VALUES
(10, 'Fakultas Teknik Undip', 'Wiayah bangunan Fakultas Teknik Undip', 'ft_undip1.jpg'),
(20, 'FISIP Undip', 'Wilayah Fakultas Ilmuu Sosial Politik Undip', 'fisip1.png'),
(30, 'Fakultas Hukum', 'Fakultas Sosial dan Politik berdiri tanggal 1 Januari 1969 yang merupakan pemekaran dari Fakultas Hukum dan Masyarakat. Saat ini memiliki 5 Program S1, 3 Program S2 dan 2 Program Doktor.', 'Fakultas_hukum1.jpg'),
(40, 'Sekolah Vokasi', 'Universitas Diponegoro telah menyelenggarakan pendidikan vokasi khususnya program Diploma III di berbagai bidang ilmu. Selama ini, penyelenggaraan program Diploma III dilaksanakan dalam 21 Program Studi Diploma, yang terbagi dalam 4 departemen, yaitu Departemen Teknologi Industri, Departemen Sipil dan Perencanaan, Departemen Ekonomi dan Keuangan serta Departemen Sosial dan Bahasa dengan jumlah keseluruhan mahasiswa pada tahun 2016 adalah sebanyak 5.835 orang.', 'vokasi_undip1.jpg'),
(50, 'FIB', 'Fakultas Ilmu Budaya Universitas Diponegoro atau disingkat FIB UNDIP adalah salah satu fakultas di bawah Universitas Diponegoro yang mengkhususkan diri dalam ilmu pengetahuan budaya', 'fib_undip1.jpg'),
(60, 'FPIK', 'Fakultas Perikanan dan Ilmu Kelautan berdiri pada tanggal 8 Oktober 1968 merupakan pemekaran dari Fakultas Peternakan dan Perikanan. Saat ini memiliki 6 Program S1 semua terakreditasi A dan 2 Program S2 dan 1 Program Doktor.', 'fpik_undip1.jpg'),
(70, 'FSM', 'Fakultas Sains dan Matematika Universitas Diponegoro disingkat FSM UNDIP adalah salah satu Fakultas di Universitas Diponegoro, Semarang. Sebelum Tahun 2012, Fakultas Sains dan Matematika Universitas Diponegoro bernama Fakultas Matematika dan Ilmu Pengetahuan Alam', 'fsm1.jpg'),
(80, 'FEB', 'Fakultas Ekonomika dan Bisnis Universitas Diponegoro yang telah berdiri pada tanggal 14 Maret 1960 adalah salah satu Fakultas di Universitas Diponegoro, Semarang', 'febb-undip1.jpg'),
(90, 'FKM', 'Fakultas Kesehatan Masyarakat Universitas Diponegoro (FKM UNDIP) adalah satu dari lima FKM pertama di Indonesia dan merupakan lembaga pendidikan tinggi kesehatan masyarakat terkemuka serta menjadi referensi bagi institusi pendidikan tinggi sejenis lainnya di Indonesia. Sejak berdiri tahun 1985', 'fkm1.png'),
(100, 'FK', 'Fakultas Kedokteran, Universitas Diponegoro merupakan salah satu fakultas kedokteran terdepan di Indonesia. Fakultas Kedokteran Universitas Diponegoro didirikan pada 1 Oktober 1961, dan pada tahun 2011 merayakan 50 tahun keemasannya dalam memberikan tri dharma perguruan tinggi di Indonesia', 'fk_undip2.jpg'),
(110, 'FPP', 'Fakultas Peternakan dan Pertanian Universitas Diponegoro atau biasa disingkat FPP UNDIP adalah salah satu fakultas di bawah Universitas Diponegoro yang saat ini dipimpin oleh Dekan Prof. Dr. Ir. Mukh Arifin, M.Sc.', 'fppUNDIP1.jpg'),
(120, 'Fpsi', 'Fakultas Psikologi yang lebih mengarah pada Menguasai pengetahuan dasar psikologi dan teknik pengamatan objektif dalam menginterpretasikan tingkah laku manusia menurut kaidah-kaidah psikologi', 'psikologi_undip.jpg'),
(130, 'Fakultas Teknik Undip', 'Wilayah Fakultas Teknik Undip daerah GKB', 'ft_undip2.jpg'),
(200, 'Es Kelapa Muda', 'Keterangan lahan Es Kelapa muda', 'gambar_2.jpg'),
(300, 'Rumah aria', 'Aria jelek', 'WIN_20200410_19_53_07_Pro.jpg');

-- --------------------------------------------------------

--
-- Stand-in structure for view `bidang_dokumentasi`
-- (See below for the actual view)
--
CREATE TABLE `bidang_dokumentasi` (
`bidang_kode` int(11)
,`bidang_nama` varchar(200)
,`bidang_keterangan` text
,`bidang_gambar` varchar(200)
,`dokumentasi_gambar` varchar(200)
);

-- --------------------------------------------------------

--
-- Table structure for table `dokumentasi`
--

CREATE TABLE `dokumentasi` (
  `dokumentasi_id` int(11) NOT NULL,
  `bidang_kode` varchar(200) NOT NULL,
  `dokumentasi_gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokumentasi`
--

INSERT INTO `dokumentasi` (`dokumentasi_id`, `bidang_kode`, `dokumentasi_gambar`) VALUES
(1, '100', 'gambar_10.jpg'),
(2, '100', 'gambar_11.jpg'),
(3, '100', 'gambar_12.jpg'),
(6, '130', 'dekanat2.jpg'),
(7, '130', 'tekling1.jpg'),
(8, '130', 'teknik_komputer11.jpg');

-- --------------------------------------------------------

--
-- Structure for view `bidang_dokumentasi`
--
DROP TABLE IF EXISTS `bidang_dokumentasi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `bidang_dokumentasi`  AS  select `b`.`bidang_kode` AS `bidang_kode`,`b`.`bidang_nama` AS `bidang_nama`,`b`.`bidang_keterangan` AS `bidang_keterangan`,`b`.`bidang_gambar` AS `bidang_gambar`,`d`.`dokumentasi_gambar` AS `dokumentasi_gambar` from (`bidang` `b` left join `dokumentasi` `d` on(`b`.`bidang_kode` = `d`.`bidang_kode`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bangunan`
--
ALTER TABLE `bangunan`
  ADD PRIMARY KEY (`bangunan_id`);

--
-- Indexes for table `bidang`
--
ALTER TABLE `bidang`
  ADD PRIMARY KEY (`bidang_kode`);

--
-- Indexes for table `dokumentasi`
--
ALTER TABLE `dokumentasi`
  ADD PRIMARY KEY (`dokumentasi_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bangunan`
--
ALTER TABLE `bangunan`
  MODIFY `bangunan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `dokumentasi`
--
ALTER TABLE `dokumentasi`
  MODIFY `dokumentasi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
