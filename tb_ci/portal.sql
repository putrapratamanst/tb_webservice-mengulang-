-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2016 at 07:11 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_portal`
--

CREATE TABLE `tbl_portal` (
  `id` int(11) NOT NULL,
  `judul` varchar(40) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `isi` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_portal`
--

INSERT INTO `tbl_portal` (`id`, `judul`, `penulis`, `isi`) VALUES
(2, 'Sejarah Politeknik Pos Indonesia', 'Ryan Septio', 'Politeknik Pos Indonesia adalah salah satu Politeknik yang terletak di Jawa Barat'),
(3, 'Tentang Politeknik Pos Indonesia', 'Fatturahman Hasan', 'Politeknik Pos Indonesia memiliki berbagai dan konsentrasi pendidikan\r\n'),
(19, 'visi misi polpos', 'Fathur', 'keunggulan'),
(20, 'Hasiil Semester Pendek', 'ryan septio', 'semester genap');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_portal`
--
ALTER TABLE `tbl_portal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_portal`
--
ALTER TABLE `tbl_portal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
