-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 23, 2025 at 01:27 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abtend`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int NOT NULL,
  `email` varchar(100) NOT NULL,
  `waktu_masuk` datetime DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `kelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `email`, `waktu_masuk`, `status`, `kelas`) VALUES
(2, 'Yones01@abtend.com', '2025-10-27 22:55:23', 'Terlambat', ''),
(4, 'Yones01@abtend.com', '2025-10-28 19:53:37', 'Terlambat', ''),
(5, 'Yones01@abtend.com', '2025-10-30 07:10:45', 'Terlambat', ''),
(6, 'Yones01@abtend.com', '2025-11-01 18:14:10', 'Terlambat', ''),
(7, 'Yones01@abtend.com', '2025-11-04 13:10:16', 'Terlambat', ''),
(8, 'Yones01@abtend.com', '2025-11-05 21:32:26', 'Terlambat', ''),
(9, 'collinlee01@abtend.com', '2025-11-05 22:30:55', 'Terlambat', ''),
(10, 'Yones01@abtend.com', '2025-11-06 12:40:46', 'Terlambat', ''),
(11, 'Yones01@abtend.com', '2025-11-11 12:40:05', 'Terlambat', ''),
(12, 'Yones01@abtend.com', '2025-11-11 12:40:28', 'Terlambat', ''),
(13, 'Yones01@abtend.com', '2025-11-13 14:02:29', 'Terlambat', ''),
(14, 'Yones01@abtend.com', '2025-11-13 14:05:52', 'Terlambat', ''),
(15, 'Yones01@abtend.com', '2025-11-20 13:05:30', 'Terlambat', ''),
(16, 'Yones01@abtend.com', '2025-11-20 13:18:46', 'Terlambat', ''),
(17, 'Yones01@abtend.com', '2025-11-20 13:19:04', 'Terlambat', ''),
(18, 'Yones01@abtend.com', '2025-11-20 13:19:25', 'Terlambat', ''),
(19, 'Yones01@abtend.com', '2025-11-21 20:29:31', 'Terlambat', ''),
(20, 'Yones01@abtend.com', '2025-11-23 17:24:57', 'Terlambat', ''),
(21, 'Yones01@abtend.com', '2025-11-23 19:12:34', 'Terlambat', 'XI TKJ 2'),
(22, 'Albert@abtend.com', '2025-11-23 19:58:29', 'Terlambat', 'XI TKJ 2'),
(23, 'admin@abtend.com', '2025-11-23 20:14:04', 'Terlambat', '-'),
(24, 'admin@abtend.com', '2025-11-23 20:14:47', 'Terlambat', '-'),
(25, 'admin@abtend.com', '2025-11-23 20:17:22', 'Terlambat', '-'),
(26, 'admin@abtend.com', '2025-11-23 20:23:49', 'Terlambat', '-'),
(27, 'grachia@abtend.com', '2025-11-23 20:24:57', 'Terlambat', 'XI TKJ 2'),
(28, 'admin@abtend.com', '2025-11-23 20:25:06', 'Terlambat', '-');

-- --------------------------------------------------------

--
-- Table structure for table `userpass`
--

CREATE TABLE `userpass` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(20) NOT NULL DEFAULT 'STUDENT',
  `kelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `userpass`
--

INSERT INTO `userpass` (`id`, `name`, `email`, `password`, `role`, `kelas`) VALUES
(1, 'Collin Lee', 'collinlee01@abtend.com', '$2y$10$/oVGB8PI63Yhh1bb/rQzo.3gaeH7EpACy1XOIUtQo3LRbewPKDOtG', 'STUDENT', 'XI TKJ 2'),
(2, 'Yones01', 'Yones01@abtend.com', '$2y$10$.c2Omsu4xiHySLi/PB2Oc.4.FDLSKth.dLR43/HFelNKN.E/Sp3J2', 'STUDENT', 'XI TKJ 2'),
(5, 'Albert', 'Albert@abtend.com', '$2y$10$qQoCGD.K0UX3AM346D72Ee65bfHXknCH6WGkSeLhbRZIaL2nUIyP6', 'STUDENT', 'XI TKJ 2'),
(7, 'admin', 'admin@abtend.com', '$2y$10$/4QkWYtQt/yEOReN.HFe1ukkdnirwJ1VB64Z50N99PRKtnORmpjgG', 'ADMIN', '-'),
(8, 'Grachia', 'grachia@abtend.com', '$2y$10$zk0WDzQjsMoCyeEsRiEpI.7FR1q8yxiSAjrS2c.NdcM/rMjABobxW', 'STUDENT', 'XI TKJ 2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userpass`
--
ALTER TABLE `userpass`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `userpass`
--
ALTER TABLE `userpass`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
