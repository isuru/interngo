-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2025 at 07:36 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `interngo`
--

-- --------------------------------------------------------

--
-- Table structure for table `companycredential`
--

CREATE TABLE `companycredential` (
  `id` int(5) NOT NULL,
  `compname` varchar(100) NOT NULL,
  `brno` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` int(5) NOT NULL,
  `sysdate` datetime NOT NULL DEFAULT current_timestamp(),
  `adminremarks` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `companycredential`
--

INSERT INTO `companycredential` (`id`, `compname`, `brno`, `username`, `password`, `status`, `sysdate`, `adminremarks`) VALUES
(1, 'RTR Company', '1200', 'RTR', '$2y$10$UypIhSR6YAMeAokSgV./..uh3wFQqV3YksksbxjrrxpQoJOZAMe/S', 1, '2025-02-08 20:03:04', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companycredential`
--
ALTER TABLE `companycredential`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companycredential`
--
ALTER TABLE `companycredential`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
