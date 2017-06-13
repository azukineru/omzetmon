-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2017 at 04:58 AM
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
  `password` varchar(32) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `atype` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_account`
--

INSERT INTO `tb_account` (`username`, `password`, `fname`, `lname`, `phone`, `atype`) VALUES
('daman', 'eb0bb1a30a87e7247b3d3eec9a75ba63', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dpodp`
--

CREATE TABLE `tb_dpodp` (
  `id` varchar(15) NOT NULL,
  `sto` varchar(3) NOT NULL,
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
  `sto` varchar(3) NOT NULL,
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

--
-- Dumping data for table `tb_history`
--

INSERT INTO `tb_history` (`id`, `sto`, `no_telp`, `no_internet`, `qr`, `data_lama`, `data_baru`, `status`, `keterangan`, `tanggal`, `issuer`, `followup`) VALUES
('r3593a2371d844a', '', '0214804893', '14200000089712', 'TE456YH88', 'ODP', 'ODP-2', 'NEW', 'Pindah', '2017-06-09 04:26:25', 'daman', ''),
('r3593a238820fc2', '', '0214804822', '1420000008765', 'TE456UH60', 'ODP-1', 'ODP-2', 'NEW', 'Pindah', '2017-06-09 04:26:48', 'daman', ''),
('r3593a2371d844a', '', '0214804893', '14200000089712', 'TE456YH88', 'ODP', 'ODP-2', 'REJECTED', 'Nama ODP Data Lama tidak ditemukan', '2017-06-09 04:27:10', 'daman', 'daman'),
('r3593a238820fc2', '', '0214804822', '1420000008765', 'TE456UH60', 'ODP-1', 'ODP-2', 'CLOSED', 'Ticket Close, Ok!', '2017-06-09 04:27:25', 'daman', 'daman'),
('r3593a23f42a0fe', '', '0247685771', '1420006788945', 'TE456UH69', 'ODP-1', 'ODP-2', 'NEW', 'Pindah', '2017-06-09 04:28:36', 'assurance', ''),
('r3593a23f42a0fe', '', '0247685771', '1420006788945', 'TE456UH69', 'ODP-1', 'ODP-2', 'CLOSED', 'Ticket Close, Ok!', '2017-06-09 04:29:14', 'assurance', 'daman'),
('r3593a5fdf82f45', '', '0214804893', '14200000089712', 'TE456YH88', 'ODP-1', 'ODP-2', 'NEW', 'Pindah', '2017-06-09 08:44:15', 'daman', ''),
('r3593a5fdf82f45', '', '0214804893', '14200000089712', 'TE456YH88', 'ODP-1', 'ODP-2', 'CLOSED', 'Ok', '2017-06-09 08:46:14', 'daman', 'daman'),
('r1593cd9bdaa463', '', '', '14200000089712', 'TE456YH88', 'ODP-1', 'ODP-2', 'NEW', 'Pindah', '2017-06-11 05:48:45', 'daman', ''),
('r1593cd9d63b5fd', '', '0214804893', '', 'TE456YH88', 'ODP-1', 'ODP-2', 'NEW', 'Pindah', '2017-06-11 05:49:10', 'daman', ''),
('r1593df1132fc51', '', '0214804893', '', 'TE456YH88', 'ODP', 'ODP-2', 'NEW', 'Pindah', '2017-06-12 01:40:35', 'daman', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pa`
--

CREATE TABLE `tb_pa` (
  `id` varchar(15) NOT NULL,
  `sto` varchar(3) NOT NULL,
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

--
-- Dumping data for table `tb_pa`
--

INSERT INTO `tb_pa` (`id`, `sto`, `no_telp`, `no_internet`, `qr`, `data_lama`, `data_baru`, `status`, `keterangan`, `tanggal`, `issuer`, `followup`) VALUES
('r1593cd9bdaa463', '', '', '14200000089712', 'TE456YH88', 'ODP-1', 'ODP-2', 'NEW', 'Pindah', '2017-06-11 05:48:45', 'daman', ''),
('r1593cd9d63b5fd', '', '0214804893', '', 'TE456YH88', 'ODP-1', 'ODP-2', 'NEW', 'Pindah', '2017-06-11 05:49:10', 'daman', ''),
('r1593df1132fc51', '', '0214804893', '', 'TE456YH88', 'ODP', 'ODP-2', 'NEW', 'Pindah', '2017-06-12 01:40:35', 'daman', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pos`
--

CREATE TABLE `tb_pos` (
  `id` varchar(15) NOT NULL,
  `sto` varchar(3) NOT NULL,
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
