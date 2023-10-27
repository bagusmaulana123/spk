-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2023 at 12:01 PM
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
-- Database: `db_sp`
--

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id` int(11) NOT NULL,
  `nama_kriteria` varchar(255) NOT NULL,
  `sifat_kriteria` varchar(255) NOT NULL,
  `bobot_kriteria` varchar(255) NOT NULL,
  `normalisasi` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id`, `nama_kriteria`, `sifat_kriteria`, `bobot_kriteria`, `normalisasi`) VALUES
(1, 'Keindahan', 'C01', '82', 0.326531),
(2, 'Aksesibilitas', 'C02', '80', 0.326531),
(18, 'Fasilitas', 'C03', '80', 0.346939);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'anjay', 'de12f5798f86bdcc5c759a645e913e4c'),
(2, 'user', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `rel_alternatif`
--

CREATE TABLE `rel_alternatif` (
  `id` int(11) NOT NULL,
  `kode_alternatif` varchar(16) NOT NULL,
  `nilai1` double NOT NULL,
  `nilai2` double NOT NULL,
  `nilai3` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rel_alternatif`
--

INSERT INTO `rel_alternatif` (`id`, `kode_alternatif`, `nilai1`, `nilai2`, `nilai3`) VALUES
(1, 'A01', 90, 80, 80);

-- --------------------------------------------------------

--
-- Table structure for table `wisata_alam`
--

CREATE TABLE `wisata_alam` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `rank` int(11) NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wisata_alam`
--

INSERT INTO `wisata_alam` (`id`, `nama`, `tempat`, `rank`, `total`) VALUES
(1, 'Bukit Matang Keladan', 'Pelaihari', 0, 0),
(2, 'Sungai Duyung', 'Banjarmasin', 0, 0),
(3, 'Kuin Kacil', 'Banjarmasin', 0, 0),
(8, 'Pantai Turki', 'Pagatan', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rel_alternatif`
--
ALTER TABLE `rel_alternatif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wisata_alam`
--
ALTER TABLE `wisata_alam`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rel_alternatif`
--
ALTER TABLE `rel_alternatif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wisata_alam`
--
ALTER TABLE `wisata_alam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
