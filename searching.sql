-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2021 at 05:33 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `searching`
--

CREATE TABLE `searching` (
  `ID` int(11) NOT NULL,
  `user_name` varchar(191) NOT NULL,
  `age` int(11) NOT NULL,
  `country` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `searching`
--

INSERT INTO `searching` (`ID`, `user_name`, `age`, `country`) VALUES
(31, 'Hina', 20, 'Pakistan'),
(32, 'Midhat', 20, 'Canada'),
(33, 'Batool', 18, 'UK'),
(34, 'Shiza', 23, 'Germany'),
(35, 'Seher', 24, 'China'),
(36, 'Areeba', 19, 'France');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `searching`
--
ALTER TABLE `searching`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `searching`
--
ALTER TABLE `searching`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
