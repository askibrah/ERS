-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2022 at 07:23 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ers`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `indexNo` varchar(20) NOT NULL,
  `level` varchar(10) NOT NULL,
  `dept` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `indexNo`, `level`, `dept`) VALUES
(13, 'UTB3500311', '100', 'Bsc. Computer Science'),
(14, 'UTB3500222', '100', 'Bsc. Computer Science'),
(15, 'UTB3500323', '100', 'Bsc. Computer Science'),
(16, 'UTB3500324', '100', 'Bsc. Computer Science'),
(17, 'UTB3500325', '100', 'Bsc. Computer Science'),
(18, 'UTB3500322', '100', 'Bsc. Computer Science'),
(19, 'UTB350032A', '100', 'Bsc. Computer Science'),
(20, 'UTB350032W', '200', 'Bsc. Computer Science'),
(21, 'UTB350032R', '200', 'Bsc. Computer Science'),
(22, 'UTB350032T', '200', 'Bsc. Computer Science'),
(23, 'UTB350032J', '200', 'Bsc. Computer Science'),
(24, 'UTB3500328', '200', 'Bsc. Computer Science'),
(25, 'UTB350032H', '200', 'Bsc. Computer Science'),
(26, 'UTB3500327', '200', 'Bsc. Computer Science'),
(27, 'UTB350032B', '200', 'Bsc. Computer Science'),
(28, 'UTB350032U', '200', 'Bsc. Computer Science'),
(29, 'UTB350032I', '200', 'Bsc. Computer Science'),
(30, 'UTB350032P', '200', 'Bsc. Computer Science'),
(31, 'UTB350032C', '200', 'Bsc. Computer Science'),
(32, 'UTB350032Z', '200', 'Bsc. Computer Science'),
(33, 'UTB350032X', '200', 'Bsc. Computer Science'),
(34, 'UTB350032Q', '200', 'Bsc. Computer Science'),
(35, 'UTB350032Y', '200', 'Bsc. Computer Science'),
(36, 'UTB350032K', '200', 'Bsc. Computer Science'),
(37, 'UTB35003MX', '100', 'lAW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `indexNo` (`indexNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
