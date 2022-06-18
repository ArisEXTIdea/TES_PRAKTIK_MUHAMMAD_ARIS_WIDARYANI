-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 18, 2022 at 02:15 PM
-- Server version: 5.7.24
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
-- Database: `mhsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(20) NOT NULL,
  `nama` text NOT NULL,
  `gender` enum('0','1') NOT NULL,
  `ttl` text NOT NULL,
  `agama` text NOT NULL,
  `program_studi` text NOT NULL,
  `email` text NOT NULL,
  `hp` text NOT NULL,
  `asal_sekolah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `gender`, `ttl`, `agama`, `program_studi`, `email`, `hp`, `asal_sekolah`) VALUES
('2211001', 'Nur Ahmad', '0', 'Jepara, 17 Agustus 1945', 'Islam', 'Teknik Informatika', 'nur@unisnu.ac.id', '0857-4030-0101', 'SMK 01 Jepara'),
('2211002', 'Ismail', '0', 'Jepara, 1945-08-10', 'Islam', 'Teknik Informatika', 'ismail@unisnu.ac.id', '085740300100', 'SMK 01 JEPARA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
