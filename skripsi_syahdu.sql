-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2019 at 02:42 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsi_syahdu`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataset`
--

CREATE TABLE `dataset` (
  `tahun` int(4) NOT NULL,
  `desa` varchar(30) NOT NULL,
  `jumlah_balita` int(11) NOT NULL,
  `jumlah_kematian` int(11) NOT NULL,
  `jumlah_hidup` int(11) NOT NULL,
  `gizi_buruk` int(11) NOT NULL,
  `gizi_kurang` int(11) NOT NULL,
  `id_dataset` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dataset`
--

INSERT INTO `dataset` (`tahun`, `desa`, `jumlah_balita`, `jumlah_kematian`, `jumlah_hidup`, `gizi_buruk`, `gizi_kurang`, `id_dataset`) VALUES
(2017, 'kotorejo', 414, 2, 412, 1, 20, 505),
(2017, 'wonodadi', 446, 1, 445, 2, 15, 506),
(2017, 'kepuhpandak', 539, 3, 536, 3, 29, 507),
(2017, 'kepuharum', 297, 0, 297, 2, 10, 508),
(2017, 'gedangan', 408, 1, 407, 1, 23, 509),
(2017, 'karangdiyeng', 477, 5, 472, 4, 47, 510),
(2017, 'singowangi', 390, 4, 386, 1, 14, 511),
(2017, 'karangasem', 315, 0, 315, 1, 13, 512),
(2017, 'kaligoro', 366, 2, 364, 1, 18, 513);

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `id_penyakit` int(11) NOT NULL,
  `nama_penyakit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id_penyakit`, `nama_penyakit`) VALUES
(1, 'Diare'),
(2, 'ISPA'),
(3, 'Influenza'),
(4, 'Campak'),
(5, 'dbd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dataset`
--
ALTER TABLE `dataset`
  ADD PRIMARY KEY (`id_dataset`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dataset`
--
ALTER TABLE `dataset`
  MODIFY `id_dataset` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=514;

--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id_penyakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
