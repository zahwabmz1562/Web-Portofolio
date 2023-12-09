-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2023 at 06:27 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jasa_desain`
--

-- --------------------------------------------------------

--
-- Table structure for table `informasi_portofolio`
--

CREATE TABLE `informasi_portofolio` (
  `gambar` varchar(100) NOT NULL,
  `judul` varchar(20) NOT NULL,
  `deskripsiPortofolio` varchar(100) NOT NULL,
  `tanggalPortofolio` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `informasi_portofolio`
--

INSERT INTO `informasi_portofolio` (`gambar`, `judul`, `deskripsiPortofolio`, `tanggalPortofolio`) VALUES
('', 'gambar logo', 'logo makanan ', '2023-06-01');

-- --------------------------------------------------------

--
-- Table structure for table `jasa`
--

CREATE TABLE `jasa` (
  `idJasa` int(11) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `emailPemilik` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jasa`
--

INSERT INTO `jasa` (`idJasa`, `kategori`, `emailPemilik`) VALUES
(2, 'logo', 'zahwafadilla@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `pemilik`
--

CREATE TABLE `pemilik` (
  `namaPemilik` varchar(100) NOT NULL,
  `emailPemilik` varchar(30) NOT NULL,
  `passwordPemilik` varchar(20) NOT NULL,
  `noTelpPemilik` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pemilik`
--

INSERT INTO `pemilik` (`namaPemilik`, `emailPemilik`, `passwordPemilik`, `noTelpPemilik`) VALUES
('raihan', 'raihan@gmail.com', 'raihan123', '081234567'),
('zahra', 'zahra@gmail.com', 'zahra124', '08123456');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `emailUser` varchar(30) NOT NULL,
  `noTelpUser` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  `namaUser` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`emailUser`, `noTelpUser`, `password`, `namaUser`) VALUES
('zahwafadilla@gmail.com', '0812345678', 'zahwa123', 'Zahwa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `informasi_portofolio`
--
ALTER TABLE `informasi_portofolio`
  ADD PRIMARY KEY (`gambar`);

--
-- Indexes for table `jasa`
--
ALTER TABLE `jasa`
  ADD PRIMARY KEY (`idJasa`);

--
-- Indexes for table `pemilik`
--
ALTER TABLE `pemilik`
  ADD PRIMARY KEY (`emailPemilik`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`emailUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jasa`
--
ALTER TABLE `jasa`
  MODIFY `idJasa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
