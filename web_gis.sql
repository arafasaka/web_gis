-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2020 at 04:55 PM
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
-- Database: `web_gis`
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
(4, 'Burjo Cafe', '110.4370456', '-7.0673298');

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
(100, 'Mulawarman V', 'Keterangan Lahan Mulawarman V', 'gambar_1.jpg'),
(200, 'Es Kelapa Muda', 'Keterangan lahan Es Kelapa muda', 'gambar_2.jpg'),
(300, 'Kontrakan Gondang Legend', 'Keterangan kontrakan gondang', 'gambar_3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dokumentasi`
--

CREATE TABLE `dokumentasi` (
  `dokumentasi_id` int(11) NOT NULL,
  `dokumentasi_bidang_id` varchar(200) NOT NULL,
  `dokumentasi_gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokumentasi`
--

INSERT INTO `dokumentasi` (`dokumentasi_id`, `dokumentasi_bidang_id`, `dokumentasi_gambar`) VALUES
(1, '100', 'gambar_10.jpg'),
(2, '100', 'gambar_11.jpg'),
(3, '100', 'gambar_12.jpg');

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
  MODIFY `bangunan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
