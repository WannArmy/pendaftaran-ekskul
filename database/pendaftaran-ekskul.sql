-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2022 at 01:50 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran-ekskul`
--

-- --------------------------------------------------------

--
-- Table structure for table `historysaran`
--

CREATE TABLE `historysaran` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `ekskul` varchar(25) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `tanggal_post` varchar(25) NOT NULL,
  `tanggal_hapus` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `list_ekskul`
--

CREATE TABLE `list_ekskul` (
  `id` int(11) NOT NULL,
  `judul` varchar(25) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `guru` varchar(50) NOT NULL,
  `hari` varchar(6) NOT NULL,
  `jam` time NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `list_ekskul`
--

INSERT INTO `list_ekskul` (`id`, `judul`, `keterangan`, `guru`, `hari`, `jam`, `gambar`) VALUES
(4, 'Musik', 'Musik adalah karya cipta berupa bunyi atau suara yang memiliki nada, irama dan keselarasan.', 'guru1              ', 'kamis', '15:00:00', '3.jpg'),
(5, 'Pramuka', 'Pramuka adalah singkatan dari Praja Muda Karana dan merupakan organisasi atau gerakan kepanduan.', 'guru              ', 'rabu', '15:08:00', '1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `minat`
--

CREATE TABLE `minat` (
  `id` int(11) NOT NULL,
  `siswa` varchar(50) NOT NULL,
  `ekskul` varchar(25) NOT NULL,
  `kelas` varchar(3) NOT NULL,
  `tanggal` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `minat`
--

INSERT INTO `minat` (`id`, `siswa`, `ekskul`, `kelas`, `tanggal`) VALUES
(1, 'Murid1', 'Pramuka', 'X', '2022/11/10 04:47:17'),
(2, 'Murid1', 'Pramuka', 'X', '2022/11/10 04:51:10'),
(3, 'Murid2', 'Musik', 'X', '2022/11/10 06:01:12'),
(4, 'Murid2', 'Pramuka', 'X', '2022/11/10 06:01:21');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int(4) NOT NULL,
  `ekskul` varchar(25) NOT NULL,
  `pesan` text NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `saran`
--

CREATE TABLE `saran` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `ekskul` varchar(25) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(3) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nohp` varchar(13) NOT NULL,
  `email` varchar(70) NOT NULL,
  `hak_akses` enum('Admin','Guru','Murid') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `nohp`, `email`, `hak_akses`) VALUES
(1, 'admin', 'Admin', '202cb962ac59075b964b07152d234b70', '012345678910', 'admin@gmail.com', 'Admin'),
(2, 'guru', 'Guru', '202cb962ac59075b964b07152d234b70', '0812112345678', 'guru@gmail.com', 'Guru'),
(3, 'Murid1', 'Moerid1', '202cb962ac59075b964b07152d234b70', '080812312381', 'murid1@gmail.com', 'Murid'),
(4, 'Murid2', 'Moerid2', '202cb962ac59075b964b07152d234b70', '081927479121', 'murid2@gmail.com', 'Murid'),
(5, 'guru1', 'Guru1', '202cb962ac59075b964b07152d234b70', '019326912123', 'guru1@gmail.com', 'Guru');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `historysaran`
--
ALTER TABLE `historysaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_ekskul`
--
ALTER TABLE `list_ekskul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `minat`
--
ALTER TABLE `minat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `historysaran`
--
ALTER TABLE `historysaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `list_ekskul`
--
ALTER TABLE `list_ekskul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `minat`
--
ALTER TABLE `minat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `saran`
--
ALTER TABLE `saran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
