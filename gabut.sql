-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2016 at 06:59 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gabut`
--

-- --------------------------------------------------------

--
-- Table structure for table `bibit_pupuk`
--

CREATE TABLE `bibit_pupuk` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `jenis` int(2) NOT NULL,
  `detail` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bibit_pupuk`
--

INSERT INTO `bibit_pupuk` (`id`, `nama`, `jumlah`, `harga`, `jenis`, `detail`, `foto`, `tgl`) VALUES
(1, 'temp', 0, 0, 0, 'temp', '', '2016-12-16 03:29:59'),
(5, 'Padi Mekongga', 100, 4500, 1, 'merupakan bibit unggul', '1481772689.jpg', '2016-12-19 11:49:33'),
(10, 'Pupuk Merang', 50, 5000, 2, 'Kualitas Bagus', '1481705787.jpg', '2016-12-19 11:49:38'),
(11, 'Pupuk npk 121217', 18, 5400, 2, 'nitrophoska pupuk dengan kualitas no 1', '1481772049.jpg', '2016-12-19 17:45:35');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_bibit` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `satuan` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `foto_barang` varchar(255) NOT NULL,
  `perjanjian` varchar(255) NOT NULL,
  `tgl_transaksi` datetime NOT NULL,
  `tgl_tebus` datetime NOT NULL,
  `foto_barang_user` varchar(255) NOT NULL,
  `bibit_user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `id_user`, `id_bibit`, `nama_barang`, `harga`, `satuan`, `status`, `foto_barang`, `perjanjian`, `tgl_transaksi`, `tgl_tebus`, `foto_barang_user`, `bibit_user`) VALUES
(14, 7, 5, 'kipas', 5000, 1, 3, '80elha.jpg', '', '2016-12-19 08:53:04', '2016-12-22 00:00:00', '', '14elha.jpg'),
(15, 7, 11, 'kipas', 30000, 5, 3, '', '15elha1.jpg', '2016-12-19 15:59:30', '2016-12-21 00:00:00', '15elha.jpg', '15elha.jpg'),
(16, 9, 11, 'lampu', 50000, 9, 1, '36rudi.jpg', '', '2016-12-19 18:45:35', '0000-00-00 00:00:00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `jenis` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `pass`, `nama`, `email`, `alamat`, `no_telp`, `jenis`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '', '', '', 2),
(7, 'elha', '94b94a14609bf9e0a69ab65fe70cebbe', 'Bahruddin el hayat', 'bbandroel@gmail.com', '', '111111', 1),
(8, 'udin', '6bec9c852847242e384a4d5ac0962ba0', '', 'udin@gmail.com', '', '', 1),
(9, 'rudi', '1755e8df56655122206c7c1d16b1c7e3', 'rudi habibi', 'rudi@gmail.com', '', '0867123419', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bibit_pupuk`
--
ALTER TABLE `bibit_pupuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bibit_pupuk`
--
ALTER TABLE `bibit_pupuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
