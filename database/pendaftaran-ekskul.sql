-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2022 at 05:13 PM
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
(17, 'Pramuka', 'Pramuka adalah singkatan dari Praja Muda Karana dan merupakan organisasi atau gerakan kepanduan.', 'Addison              ', 'rabu', '15:19:00', '1.jpg'),
(19, 'Musik', 'Musik adalah karya cipta berupa bunyi atau suara yang memiliki nada, irama dan keselarasan.', 'Addison              ', 'rabu', '15:00:00', '3.jpg'),
(21, 'Papua', 'Papua adalah sebuah negara ', 'Addison              ', 'sabtu', '00:31:00', '2.jpg'),
(22, 'Anime', 'Anime digemari oleh banyak orang terutama untuk para wibu. Anda wibu? Join Sekarang!!', 'Addison              ', 'jumat', '06:40:00', 'cat.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `saran`
--

CREATE TABLE `saran` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL
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
(1, 'Janssen Addison', 'Janssen125', '202cb962ac59075b964b07152d234b70', '085101556689', 'janssenaddisonchen@gmail.com', 'Murid'),
(3, 'Addison', 'Addison125', '202cb962ac59075b964b07152d234b70', '085101556689', 'addison@gmail.com', 'Admin'),
(4, 'Andi Hiangkidinata Mongkareng', 'andi', 'ce0e5bf55e4f71749eade7a8b95c4e46', '085101556689', 'tes@gmail.com', 'Guru');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list_ekskul`
--
ALTER TABLE `list_ekskul`
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
-- AUTO_INCREMENT for table `list_ekskul`
--
ALTER TABLE `list_ekskul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `saran`
--
ALTER TABLE `saran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
