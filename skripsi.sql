-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2019 at 03:45 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_latih`
--

CREATE TABLE `data_latih` (
  `id` int(11) NOT NULL,
  `urban` varchar(6) NOT NULL,
  `lokal` varchar(6) NOT NULL,
  `milenial` varchar(6) NOT NULL,
  `pramil` varchar(6) NOT NULL,
  `belum_menikah` varchar(6) NOT NULL,
  `sudah_menikah` varchar(6) NOT NULL,
  `pernah_menikah` varchar(6) NOT NULL,
  `perempuan` varchar(6) NOT NULL,
  `laki_laki` varchar(6) NOT NULL,
  `golput` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_latih`
--

INSERT INTO `data_latih` (`id`, `urban`, `lokal`, `milenial`, `pramil`, `belum_menikah`, `sudah_menikah`, `pernah_menikah`, `perempuan`, `laki_laki`, `golput`) VALUES
(1, 'rendah', 'tinggi', 'rendah', 'rendah', 'rendah', 'tinggi', 'tinggi', 'tinggi', 'rendah', 'besar'),
(2, 'rendah', 'tinggi', 'rendah', 'tinggi', 'rendah', 'tinggi', 'tinggi', 'tinggi', 'rendah', 'besar'),
(3, 'rendah', 'tinggi', 'rendah', 'tinggi', 'rendah', 'rendah', 'tinggi', 'rendah', 'tinggi', 'kecil'),
(4, 'rendah', 'tinggi', 'tinggi', 'rendah', 'rendah', 'tinggi', 'tinggi', 'rendah', 'tinggi', 'kecil'),
(5, 'rendah', 'tinggi', 'tinggi', 'tinggi', 'rendah', 'tinggi', 'tinggi', 'rendah', 'tinggi', 'kecil'),
(6, 'rendah', 'tinggi', 'tinggi', 'rendah', 'rendah', 'tinggi', 'tinggi', 'rendah', 'rendah', 'besar'),
(7, 'rendah', 'tinggi', 'tinggi', 'rendah', 'rendah', 'rendah', 'tinggi', 'rendah', 'tinggi', 'kecil'),
(8, 'tinggi', 'rendah', 'rendah', 'rendah', 'rendah', 'tinggi', 'rendah', 'tinggi', 'rendah', 'besar'),
(9, 'rendah', 'tinggi', 'rendah', 'rendah', 'rendah', 'tinggi', 'tinggi', 'tinggi', 'rendah', 'besar'),
(10, 'rendah', 'tinggi', 'rendah', 'rendah', 'tinggi', 'rendah', 'tinggi', 'tinggi', 'rendah', 'besar'),
(11, 'rendah', 'tinggi', 'tinggi', 'rendah', 'tinggi', 'rendah', 'rendah', 'tinggi', 'rendah', 'kecil'),
(12, 'tinggi', 'rendah', 'tinggi', 'tinggi', 'rendah', 'tinggi', 'rendah', 'rendah', 'tinggi', 'kecil'),
(13, 'tinggi', 'rendah', 'tinggi', 'rendah', 'tinggi', 'tinggi', 'rendah', 'rendah', 'rendah', 'besar'),
(14, 'tinggi', 'rendah', 'tinggi', 'rendah', 'rendah', 'tinggi', 'tinggi', 'tinggi', 'rendah', 'kecil'),
(15, 'tinggi', 'rendah', 'tinggi', 'rendah', 'rendah', 'tinggi', 'tinggi', 'rendah', 'tinggi', 'besar'),
(16, 'rendah', 'tinggi', 'rendah', 'tinggi', 'rendah', 'rendah', 'tinggi', 'tinggi', 'rendah', 'kecil'),
(17, 'tinggi', 'rendah', 'tinggi', 'rendah', 'tinggi', 'tinggi', 'tinggi', 'rendah', 'tinggi', 'kecil'),
(18, 'rendah', 'tinggi', 'tinggi', 'tinggi', 'tinggi', 'tinggi', 'tinggi', 'rendah', 'tinggi', 'besar'),
(19, 'tinggi', 'rendah', 'rendah', 'tinggi', 'tinggi', 'rendah', 'tinggi', 'tinggi', 'rendah', 'kecil'),
(20, 'rendah', 'tinggi', 'tinggi', 'tinggi', 'tinggi', 'rendah', 'tinggi', 'tinggi', 'rendah', 'kecil'),
(21, 'rendah', 'tinggi', 'rendah', 'rendah', 'rendah', 'tinggi', 'tinggi', 'rendah', 'tinggi', 'besar'),
(22, 'rendah', 'tinggi', 'rendah', 'tinggi', 'rendah', 'tinggi', 'tinggi', 'rendah', 'tinggi', 'besar'),
(23, 'rendah', 'tinggi', 'rendah', 'rendah', 'rendah', 'tinggi', 'tinggi', 'rendah', 'tinggi', 'besar'),
(24, 'rendah', 'tinggi', 'rendah', 'rendah', 'rendah', 'tinggi', 'rendah', 'tinggi', 'rendah', 'besar'),
(25, 'rendah', 'tinggi', 'rendah', 'rendah', 'tinggi', 'rendah', 'tinggi', 'tinggi', 'rendah', 'besar'),
(26, 'rendah', 'tinggi', 'rendah', 'rendah', 'tinggi', 'rendah', 'tinggi', 'tinggi', 'rendah', 'besar'),
(27, 'rendah', 'tinggi', 'rendah', 'tinggi', 'tinggi', 'rendah', 'tinggi', 'rendah', 'tinggi', 'besar'),
(28, 'rendah', 'tinggi', 'rendah', 'rendah', 'rendah', 'tinggi', 'rendah', 'rendah', 'tinggi', 'besar'),
(29, 'rendah', 'tinggi', 'rendah', 'rendah', 'tinggi', 'rendah', 'tinggi', 'tinggi', 'rendah', 'besar'),
(30, 'rendah', 'tinggi', 'rendah', 'rendah', 'rendah', 'tinggi', 'tinggi', 'tinggi', 'rendah', 'besar'),
(31, 'rendah', 'tinggi', 'rendah', 'tinggi', 'rendah', 'tinggi', 'tinggi', 'tinggi', 'rendah', 'besar'),
(32, 'tinggi', 'rendah', 'rendah', 'tinggi', 'rendah', 'tinggi', 'rendah', 'rendah', 'tinggi', 'kecil'),
(33, 'tinggi', 'rendah', 'tinggi', 'rendah', 'tinggi', 'rendah', 'rendah', 'rendah', 'tinggi', 'kecil'),
(34, 'tinggi', 'rendah', 'tinggi', 'rendah', 'tinggi', 'rendah', 'rendah', 'tinggi', 'rendah', 'kecil'),
(35, 'tinggi', 'rendah', 'tinggi', 'rendah', 'tinggi', 'tinggi', 'rendah', 'tinggi', 'rendah', 'kecil'),
(36, 'tinggi', 'rendah', 'tinggi', 'rendah', 'tinggi', 'rendah', 'rendah', 'tinggi', 'rendah', 'kecil'),
(37, 'tinggi', 'rendah', 'tinggi', 'tinggi', 'rendah', 'tinggi', 'rendah', 'tinggi', 'rendah', 'kecil'),
(38, 'tinggi', 'rendah', 'rendah', 'tinggi', 'rendah', 'tinggi', 'rendah', 'rendah', 'tinggi', 'kecil'),
(39, 'tinggi', 'rendah', 'tinggi', 'rendah', 'tinggi', 'rendah', 'tinggi', 'rendah', 'rendah', 'besar'),
(40, 'tinggi', 'rendah', 'rendah', 'tinggi', 'tinggi', 'rendah', 'rendah', 'rendah', 'tinggi', 'besar'),
(41, 'tinggi', 'tinggi', 'tinggi', 'rendah', 'tinggi', 'rendah', 'rendah', 'tinggi', 'rendah', 'besar'),
(42, 'tinggi', 'rendah', 'rendah', 'tinggi', 'tinggi', 'tinggi', 'rendah', 'tinggi', 'rendah', 'besar'),
(43, 'tinggi', 'rendah', 'tinggi', 'rendah', 'tinggi', 'rendah', 'rendah', 'tinggi', 'rendah', 'kecil'),
(44, 'tinggi', 'rendah', 'rendah', 'tinggi', 'tinggi', 'tinggi', 'tinggi', 'tinggi', 'rendah', 'besar'),
(45, 'tinggi', 'rendah', 'rendah', 'tinggi', 'rendah', 'tinggi', 'rendah', 'rendah', 'tinggi', 'besar'),
(46, 'tinggi', 'rendah', 'tinggi', 'rendah', 'tinggi', 'rendah', 'rendah', 'tinggi', 'rendah', 'besar'),
(47, 'tinggi', 'rendah', 'tinggi', 'tinggi', 'tinggi', 'rendah', 'tinggi', 'rendah', 'tinggi', 'besar'),
(48, 'tinggi', 'rendah', 'rendah', 'rendah', 'tinggi', 'rendah', 'tinggi', 'tinggi', 'rendah', 'kecil'),
(49, 'tinggi', 'rendah', 'rendah', 'tinggi', 'tinggi', 'tinggi', 'rendah', 'tinggi', 'rendah', 'besar'),
(50, 'tinggi', 'rendah', 'tinggi', 'tinggi', 'tinggi', 'rendah', 'tinggi', 'tinggi', 'rendah', 'besar'),
(51, 'tinggi', 'rendah', 'tinggi', 'rendah', 'tinggi', 'rendah', 'rendah', 'rendah', 'tinggi', 'besar'),
(52, 'tinggi', 'rendah', 'tinggi', 'tinggi', 'rendah', 'tinggi', 'rendah', 'tinggi', 'rendah', 'kecil'),
(53, 'rendah', 'tinggi', 'rendah', 'tinggi', 'tinggi', 'tinggi', 'tinggi', 'tinggi', 'rendah', 'besar'),
(54, 'rendah', 'tinggi', 'rendah', 'tinggi', 'tinggi', 'tinggi', 'rendah', 'rendah', 'tinggi', 'kecil'),
(55, 'rendah', 'tinggi', 'tinggi', 'tinggi', 'tinggi', 'rendah', 'tinggi', 'rendah', 'tinggi', 'kecil'),
(56, 'rendah', 'tinggi', 'tinggi', 'rendah', 'rendah', 'tinggi', 'tinggi', 'rendah', 'tinggi', 'kecil'),
(57, 'rendah', 'tinggi', 'rendah', 'tinggi', 'rendah', 'tinggi', 'rendah', 'tinggi', 'rendah', 'kecil'),
(58, 'rendah', 'tinggi', 'rendah', 'rendah', 'rendah', 'tinggi', 'rendah', 'tinggi', 'rendah', 'kecil'),
(59, 'rendah', 'tinggi', 'tinggi', 'tinggi', 'rendah', 'tinggi', 'tinggi', 'tinggi', 'rendah', 'kecil'),
(60, 'tinggi', 'rendah', 'tinggi', 'rendah', 'tinggi', 'tinggi', 'rendah', 'rendah', 'tinggi', 'kecil'),
(61, 'tinggi', 'rendah', 'tinggi', 'rendah', 'tinggi', 'rendah', 'rendah', 'tinggi', 'rendah', 'kecil'),
(62, 'tinggi', 'rendah', 'tinggi', 'rendah', 'tinggi', 'rendah', 'rendah', 'rendah', 'tinggi', 'besar'),
(63, 'tinggi', 'rendah', 'tinggi', 'rendah', 'tinggi', 'rendah', 'rendah', 'tinggi', 'rendah', 'kecil'),
(64, 'tinggi', 'rendah', 'rendah', 'tinggi', 'rendah', 'tinggi', 'tinggi', 'tinggi', 'rendah', 'kecil'),
(65, 'tinggi', 'rendah', 'rendah', 'tinggi', 'rendah', 'tinggi', 'rendah', 'rendah', 'tinggi', 'besar'),
(66, 'tinggi', 'rendah', 'tinggi', 'rendah', 'tinggi', 'rendah', 'tinggi', 'tinggi', 'rendah', 'besar'),
(67, 'tinggi', 'rendah', 'tinggi', 'rendah', 'rendah', 'rendah', 'tinggi', 'rendah', 'tinggi', 'besar'),
(68, 'rendah', 'tinggi', 'rendah', 'tinggi', 'tinggi', 'tinggi', 'tinggi', 'tinggi', 'rendah', 'besar'),
(69, 'rendah', 'tinggi', 'rendah', 'rendah', 'rendah', 'tinggi', 'tinggi', 'rendah', 'tinggi', 'besar'),
(70, 'rendah', 'tinggi', 'rendah', 'tinggi', 'rendah', 'tinggi', 'tinggi', 'rendah', 'tinggi', 'besar');

-- --------------------------------------------------------

--
-- Table structure for table `data_testing`
--

CREATE TABLE `data_testing` (
  `id` int(11) NOT NULL,
  `urban` varchar(6) NOT NULL,
  `lokal` varchar(6) NOT NULL,
  `milenial` varchar(6) NOT NULL,
  `pramil` varchar(6) NOT NULL,
  `belum_menikah` varchar(6) NOT NULL,
  `sudah_menikah` varchar(6) NOT NULL,
  `pernah_menikah` varchar(6) NOT NULL,
  `laki_laki` varchar(6) NOT NULL,
  `perempuan` varchar(6) NOT NULL,
  `golput` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_testing`
--

INSERT INTO `data_testing` (`id`, `urban`, `lokal`, `milenial`, `pramil`, `belum_menikah`, `sudah_menikah`, `pernah_menikah`, `laki_laki`, `perempuan`, `golput`) VALUES
(1, 'rendah', 'tinggi', 'tinggi', 'rendah', 'rendah', 'tinggi', 'rendah', 'rendah', 'tinggi', 'kecil'),
(2, 'tinggi', 'rendah', 'tinggi', 'rendah', 'tinggi', 'rendah', 'tinggi', 'rendah', 'tinggi', 'kecil'),
(3, 'rendah', 'tinggi', 'tinggi', 'tinggi', 'rendah', 'tinggi', 'rendah', 'rendah', 'tinggi', 'kecil'),
(4, 'tinggi', 'rendah', 'rendah', 'tinggi', 'rendah', 'tinggi', 'tinggi', 'tinggi', 'rendah', 'kecil'),
(5, 'rendah', 'tinggi', 'tinggi', 'rendah', 'rendah', 'tinggi', 'tinggi', 'rendah', 'tinggi', 'kecil'),
(6, 'tinggi', 'rendah', 'tinggi', 'tinggi', 'tinggi', 'tinggi', 'rendah', 'tinggi', 'rendah', 'kecil'),
(7, 'tinggi', 'rendah', 'tinggi', 'rendah', 'tinggi', 'rendah', 'tinggi', 'rendah', 'tinggi', 'kecil'),
(8, 'rendah', 'tinggi', 'rendah', 'tinggi', 'tinggi', 'rendah', 'tinggi', 'rendah', 'tinggi', 'kecil'),
(9, 'tinggi', 'rendah', 'rendah', 'tinggi', 'rendah', 'tinggi', 'tinggi', 'rendah', 'tinggi', 'kecil'),
(10, 'tinggi', 'rendah', 'rendah', 'tinggi', 'tinggi', 'rendah', 'tinggi', 'rendah', 'tinggi', 'kecil'),
(11, 'tinggi', 'rendah', 'tinggi', 'tinggi', 'rendah', 'rendah', 'tinggi', 'tinggi', 'rendah', 'kecil'),
(12, 'tinggi', 'rendah', 'rendah', 'tinggi', 'tinggi', 'rendah', 'tinggi', 'tinggi', 'rendah', 'kecil'),
(13, 'rendah', 'tinggi', 'tinggi', 'tinggi', 'rendah', 'tinggi', 'tinggi', 'rendah', 'tinggi', 'kecil'),
(14, 'rendah', 'tinggi', 'rendah', 'tinggi', 'rendah', 'rendah', 'tinggi', 'rendah', 'tinggi', 'kecil'),
(15, 'tinggi', 'rendah', 'tinggi', 'rendah', 'tinggi', 'rendah', 'rendah', 'rendah', 'tinggi', 'kecil'),
(16, 'tinggi', 'rendah', 'tinggi', 'rendah', 'tinggi', 'rendah', 'rendah', 'tinggi', 'rendah', 'kecil'),
(17, 'tinggi', 'rendah', 'rendah', 'tinggi', 'rendah', 'tinggi', 'rendah', 'rendah', 'tinggi', 'besar'),
(18, 'tinggi', 'rendah', 'tinggi', 'rendah', 'tinggi', 'rendah', 'tinggi', 'tinggi', 'rendah', 'besar'),
(19, 'tinggi', 'rendah', 'tinggi', 'rendah', 'tinggi', 'rendah', 'tinggi', 'tinggi', 'rendah', 'besar'),
(20, 'rendah', 'tinggi', 'rendah', 'rendah', 'tinggi', 'rendah', 'rendah', 'rendah', 'tinggi', 'besar'),
(21, 'rendah', 'tinggi', 'rendah', 'rendah', 'tinggi', 'tinggi', 'rendah', 'tinggi', 'rendah', 'besar'),
(22, 'rendah', 'tinggi', 'rendah', 'rendah', 'tinggi', 'rendah', 'rendah', 'tinggi', 'rendah', 'besar'),
(23, 'rendah', 'tinggi', 'rendah', 'tinggi', 'tinggi', 'rendah', 'tinggi', 'tinggi', 'rendah', 'besar'),
(24, 'rendah', 'tinggi', 'rendah', 'rendah', 'tinggi', 'rendah', 'tinggi', 'rendah', 'tinggi', 'besar'),
(25, 'rendah', 'tinggi', 'rendah', 'tinggi', 'tinggi', 'rendah', 'tinggi', 'tinggi', 'rendah', 'besar'),
(26, 'rendah', 'tinggi', 'rendah', 'rendah', 'rendah', 'tinggi', 'rendah', 'rendah', 'tinggi', 'besar'),
(27, 'rendah', 'tinggi', 'rendah', 'rendah', 'rendah', 'tinggi', 'rendah', 'rendah', 'tinggi', 'besar'),
(28, 'rendah', 'tinggi', 'rendah', 'rendah', 'rendah', 'tinggi', 'rendah', 'tinggi', 'rendah', 'besar'),
(29, 'rendah', 'tinggi', 'rendah', 'tinggi', 'rendah', 'tinggi', 'tinggi', 'rendah', 'tinggi', 'besar'),
(30, 'rendah', 'tinggi', 'rendah', 'rendah', 'rendah', 'tinggi', 'tinggi', 'tinggi', 'rendah', 'besar');

-- --------------------------------------------------------

--
-- Table structure for table `probabilitas`
--

CREATE TABLE `probabilitas` (
  `probabilitas` varchar(10) NOT NULL,
  `besar` int(11) NOT NULL,
  `kecil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_latih`
--
ALTER TABLE `data_latih`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_testing`
--
ALTER TABLE `data_testing`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
