-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2020 at 02:09 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_wedding`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_access`
--

CREATE TABLE `tb_access` (
  `id` int(11) NOT NULL,
  `access_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_access`
--

INSERT INTO `tb_access` (`id`, `access_code`) VALUES
(1, 'MOCHIUWU');

-- --------------------------------------------------------

--
-- Table structure for table `tb_visitor`
--

CREATE TABLE `tb_visitor` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `access_code` varchar(20) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_visitor`
--

INSERT INTO `tb_visitor` (`id`, `name`, `access_code`, `date`) VALUES
(1, 'Dichan Desu', 'ABC123', '29 Aug 2020 12:29:35'),
(2, 'No Name', 'ABC123', '29 Aug 2020 13:19:14'),
(3, 'Dichan Desu', 'ABC123', '29 Aug 2020 13:35:47'),
(4, 'Dichan Desu', 'MOCHIUWU', '29 Aug 2020 14:29:21'),
(5, 'No Name', 'MOCHIUWU', '29 Aug 2020 15:51:28'),
(6, 'No Name', 'MOCHIUWU', '29 Aug 2020 16:01:37'),
(7, 'No Name', 'MOCHIUWU', '29 Aug 2020 16:06:55'),
(8, 'No Name', 'MOCHIUWU', '29 Aug 2020 21:06:34'),
(9, 'No Name', 'MOCHIUWU', '31 Aug 2020 19:49:55'),
(10, 'No Name', 'MOCHIUWU', '31 Aug 2020 19:57:40'),
(11, 'No Name', 'MOCHIUWU', '31 Aug 2020 20:08:25'),
(12, 'No Name', 'MOCHIUWU', '01 Sep 2020 9:38:40'),
(13, 'No Name', 'MOCHIUWU', '01 Sep 2020 10:29:31'),
(14, 'No Name', 'MOCHIUWU', '01 Sep 2020 10:30:24'),
(15, 'No Name', 'MOCHIUWU', '01 Sep 2020 10:45:01'),
(16, 'No Name', 'MOCHIUWU', '01 Sep 2020 10:45:56'),
(17, 'Dichan Desu', 'MOCHIUWU', '01 Sep 2020 14:43:34'),
(18, 'No Name', 'MOCHIUWU', '01 Sep 2020 15:35:15'),
(19, 'No Name', 'MOCHIUWU', '01 Sep 2020 16:56:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_access`
--
ALTER TABLE `tb_access`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_visitor`
--
ALTER TABLE `tb_visitor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_access`
--
ALTER TABLE `tb_access`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_visitor`
--
ALTER TABLE `tb_visitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
