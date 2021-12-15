-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2021 at 12:21 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dealership`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `cars_id` int(10) UNSIGNED NOT NULL,
  `cars_brand` text NOT NULL,
  `cars_model` text NOT NULL,
  `cars_sellerid` int(11) NOT NULL,
  `cars_when` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`cars_id`, `cars_brand`, `cars_model`, `cars_sellerid`, `cars_when`) VALUES
(1, 'BMW', 'M3', 1, '2021-12-02 15:25:25'),
(6, 'Audi', 'RS7', 2, '2021-12-09 23:36:06'),
(7, 'Audi', 'Q4', 2, '2021-12-16 13:08:00');

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `sellers_id` int(10) UNSIGNED NOT NULL,
  `sellers_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`sellers_id`, `sellers_name`) VALUES
(1, 'Zdzisław'),
(2, 'Arkadiusz');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`cars_id`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`sellers_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `cars_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `sellers_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
