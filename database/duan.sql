-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2022 at 10:02 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `1951060679_kttv_bdkh`
--

-- --------------------------------------------------------

--
-- Table structure for table `duan`
--

CREATE TABLE `duan` (
  `maduan` int(11) NOT NULL,
  `tenduan` varchar(100) NOT NULL,
  `namthuchien` year(4) NOT NULL,
  `linhvuc` varchar(100) NOT NULL,
  `nhiemvu` varchar(100) NOT NULL,
  `coquanthuchien` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `duan`
--

INSERT INTO `duan` (`maduan`, `tenduan`, `namthuchien`, `linhvuc`, `nhiemvu`, `coquanthuchien`) VALUES
(1, 'Xây dựng và triển khai dư án chống lũ quét sạt lở', 2015, 'Thiên tai', 'Phòng chống thiên tai', 'Trung tâm phòng chống thiên tai'),
(2, 'Xây dựng kế hoạch hành dộng và ứng phó với biến đổi khí hậu', 2018, 'Biến đổi khí hậu', 'Nghiên cứu biến đổi khí hậu', 'Trung tâm nghiên cứu biến đổi khí hậu'),
(3, 'Triển Khai kế hoạch hành động và ứng phó với bão ', 2017, 'Thiên tai', 'Phòng chống bão', 'Trung tam phòng chống thiên tai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `duan`
--
ALTER TABLE `duan`
  ADD PRIMARY KEY (`maduan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `duan`
--
ALTER TABLE `duan`
  MODIFY `maduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
