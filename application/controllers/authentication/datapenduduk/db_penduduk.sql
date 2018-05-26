-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2018 at 05:09 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_penduduk`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `nok` varchar(10) NOT NULL,
  `nik` varchar(10) NOT NULL,
  `namaA` varchar(50) NOT NULL,
  `jk` char(1) NOT NULL,
  `telah` varchar(30) NOT NULL,
  `tglah` date NOT NULL,
  `pendidikan` varchar(30) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`nok`, `nik`, `namaA`, `jk`, `telah`, `tglah`, `pendidikan`, `pekerjaan`) VALUES
('123', '1', '3sd', 'P', 'sdf', '2018-04-30', 'd', 'd'),
('1', '10', 'adfad', 'L', 'sdf', '2018-05-21', 'Tamat SMA/Sederajat', 'sdfs'),
('123', '121', 'adfadfadf', 'L', 'werwera', '2018-05-09', 'adsfadf', 'adfadf'),
('125', '1231', 'adff', 'L', 'sdfsf', '2018-05-01', 'Tamat S1/Sederajat', 'sdfsf'),
('1254', '123122', 'adfasdf', 'L', 'werr', '2018-05-01', 'Tamat S1/Sederajat', 'adfadf'),
('123123', '12414', 'sdfsdf', 'P', 'werwr', '2018-05-14', 'Tamat SMA/Sederajat', 'asdf'),
('1234', '234', 'adfadf', 'L', 'adfadf', '2018-05-08', 'adfadf', 'adfadf'),
('1234', '2342', 'sdfaff', 'P', 'adfa', '2018-05-07', 'adfa', 'adfadf');

-- --------------------------------------------------------

--
-- Table structure for table `kepala`
--

CREATE TABLE `kepala` (
  `nok` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kpos` int(5) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `kabupaten` varchar(30) NOT NULL,
  `provinsi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kepala`
--

INSERT INTO `kepala` (`nok`, `nama`, `alamat`, `kpos`, `kecamatan`, `kabupaten`, `provinsi`) VALUES
('1', '10', 'asdfadf', 3234, 'Sukaresmi', 'Cianjur', 'Jawa Barat'),
('122', 'adfjhdjf', 'adjhf', 32, 'Cipanas', 'Cianjur', 'Jawa Timur'),
('124', 'aa', 'ad', 34, 'Cipanas', 'Cianjur', 'Jawa Barat'),
('125', 'aa', 'adf', 23, 'Cipanas', 'Cianjur', 'Jawa Barat'),
('2342', 'sdffss', 'sdff', 2323, 'Cipanas', 'Sukabumi', 'Jawa Timur');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','operator','','') NOT NULL,
  `active` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `level`, `active`) VALUES
(12345, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '1'),
(12346, 'operator', '4b583376b2767b923c3e1da60d10de59', 'operator', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `kepala`
--
ALTER TABLE `kepala`
  ADD PRIMARY KEY (`nok`) USING BTREE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
