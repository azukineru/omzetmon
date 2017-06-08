-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2017 at 08:31 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mozet`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_account`
--

CREATE TABLE `tb_account` (
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_account`
--

INSERT INTO `tb_account` (`username`, `password`) VALUES
('assurance', '8c6fd2bc9bc0beac1f74ea2563295cc9'),
('daman', 'eb0bb1a30a87e7247b3d3eec9a75ba63'),
('deployment', '21d468685a9c72781f824b791db751d2'),
('maintenance', 'fae183f46774fd69072e7ccea975a7c6'),
('migration', 'fb1e20be27ed5db9ac79303e51382a9d'),
('provisioning', '425baaefb0e055829cb494d1bcd5ac3d');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dpodp`
--

CREATE TABLE `tb_dpodp` (
  `id` varchar(15) NOT NULL,
  `no_telp` varchar(30) NOT NULL,
  `no_internet` varchar(30) NOT NULL,
  `qr` varchar(12) NOT NULL,
  `data_lama` varchar(50) NOT NULL,
  `data_baru` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `issuer` varchar(20) NOT NULL,
  `followup` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_history`
--

CREATE TABLE `tb_history` (
  `id` varchar(15) NOT NULL,
  `no_telp` varchar(30) NOT NULL,
  `no_internet` varchar(30) NOT NULL,
  `qr` varchar(12) NOT NULL,
  `data_lama` varchar(50) NOT NULL,
  `data_baru` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `issuer` varchar(20) NOT NULL,
  `followup` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pa`
--

CREATE TABLE `tb_pa` (
  `id` varchar(15) NOT NULL,
  `no_telp` varchar(30) NOT NULL,
  `no_internet` varchar(30) NOT NULL,
  `qr` varchar(12) NOT NULL,
  `data_lama` varchar(50) NOT NULL,
  `data_baru` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `issuer` varchar(20) NOT NULL,
  `followup` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pos`
--

CREATE TABLE `tb_pos` (
  `id` varchar(15) NOT NULL,
  `no_telp` varchar(30) NOT NULL,
  `no_internet` varchar(30) NOT NULL,
  `qr` varchar(12) NOT NULL,
  `data_lama` varchar(50) NOT NULL,
  `data_baru` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `issuer` varchar(20) NOT NULL,
  `followup` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_account`
--
ALTER TABLE `tb_account`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tb_dpodp`
--
ALTER TABLE `tb_dpodp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pa`
--
ALTER TABLE `tb_pa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pos`
--
ALTER TABLE `tb_pos`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
