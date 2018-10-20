-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2018 at 02:43 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `datamahasiswa`
--

CREATE TABLE `datamahasiswa` (
  `nama` varchar(30) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `prodi` varchar(30) NOT NULL,
  `fakultas` varchar(30) NOT NULL,
  `asal` varchar(30) NOT NULL,
  `moto_hidup` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datamahasiswa`
--

INSERT INTO `datamahasiswa` (`nama`, `nim`, `jenis_kelamin`, `prodi`, `fakultas`, `asal`, `moto_hidup`) VALUES
('Lugi', '6701170098', 'lakilaki', 'Sistem Informatika', 'FIT', 'Bandung', 'Hidup Tenang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datamahasiswa`
--
ALTER TABLE `datamahasiswa`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
