-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2018 at 09:13 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelgo`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` varchar(10) NOT NULL,
  `id_pesawat` varchar(10) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jamberangkat` time DEFAULT NULL,
  `sisakursi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `id_pesawat`, `tanggal`, `jamberangkat`, `sisakursi`) VALUES
('J001', 'P001', '2018-12-11', '07:00:00', 10),
('J002', 'P003', '2019-01-09', '09:00:00', 6),
('J003', 'P002', '2019-01-08', '11:00:00', 1),
('J004', 'P005', '2018-09-13', '11:00:00', 2),
('J005', 'P004', '2018-12-05', '09:00:00', 3);

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id_kota` varchar(10) NOT NULL,
  `nama_kota` varchar(20) NOT NULL,
  `provinsi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id_kota`, `nama_kota`, `provinsi`) VALUES
('K001', 'BANDUNG', 'JAWA BARAT'),
('K002', 'JAKARTA', 'DKI JAKART'),
('K003', 'MEDAN', 'SUMATERA U'),
('K004', 'DENPASAR', 'BALI'),
('K005', 'BALIKPAPAN', 'KALIMANTAN');

-- --------------------------------------------------------

--
-- Table structure for table `pesawat`
--

CREATE TABLE `pesawat` (
  `id_pesawat` varchar(10) NOT NULL,
  `nama_pesawat` varchar(20) NOT NULL,
  `kapasitas` int(5) NOT NULL,
  `class` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesawat`
--

INSERT INTO `pesawat` (`id_pesawat`, `nama_pesawat`, `kapasitas`, `class`) VALUES
('P001', 'LION', 100, 'BUSSINESS'),
('P002', 'QATAR AIRWAYS', 200, 'EXECUTIVE'),
('P003', 'LION', 130, 'BUSSINESS'),
('P004', 'FLY EMIRATES', 200, 'EXECUTIVE'),
('P005', 'GARUDA', 200, 'EXECUTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `fname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `cpassword` varchar(20) NOT NULL,
  `pnumber` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` varchar(10) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `id_kota` varchar(10) DEFAULT NULL,
  `id_jadwal` varchar(10) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `FK_jadwal` (`id_pesawat`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id_kota`);

--
-- Indexes for table `pesawat`
--
ALTER TABLE `pesawat`
  ADD PRIMARY KEY (`id_pesawat`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `FK_transaksi1` (`email`),
  ADD KEY `FK_transaksi2` (`id_kota`),
  ADD KEY `FK_transaksi3` (`id_jadwal`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `FK_jadwal` FOREIGN KEY (`id_pesawat`) REFERENCES `pesawat` (`id_pesawat`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `FK_transaksi1` FOREIGN KEY (`email`) REFERENCES `signup` (`email`),
  ADD CONSTRAINT `FK_transaksi2` FOREIGN KEY (`id_kota`) REFERENCES `kota` (`id_kota`),
  ADD CONSTRAINT `FK_transaksi3` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal` (`id_jadwal`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
