-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 11, 2017 at 01:14 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mposh`
--
CREATE DATABASE IF NOT EXISTS `mposh` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `mposh`;

-- --------------------------------------------------------

--
-- Table structure for table `clientreviews`
--

CREATE TABLE `clientreviews` (
  `id` int(6) NOT NULL,
  `username` varchar(16) CHARACTER SET latin1 DEFAULT NULL,
  `content` varchar(200) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clientreviews`
--

INSERT INTO `clientreviews` (`id`, `username`, `content`) VALUES
(1, 'Tomas', 'Labai gera muzika, puikus darbas, nesustok!'),
(2, 'Joe', 'Wow, well done! Looking forward in hearing more from mr. Posh!');

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` int(2) NOT NULL,
  `name` varchar(12) CHARACTER SET latin1 DEFAULT NULL,
  `link` varchar(50) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `name`, `link`) VALUES
(1, 'facebook', 'https://www.facebook.com/mantas.paseveckas'),
(2, 'instagram', 'https://www.instagram.com/matthewposh/?hl=en'),
(3, 'soundcloud', 'https://soundcloud.com/mantaspaseveckas');

-- --------------------------------------------------------

--
-- Table structure for table `statsimg`
--

CREATE TABLE `statsimg` (
  `id` int(2) NOT NULL,
  `link` varchar(50) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `statsimg`
--

INSERT INTO `statsimg` (`id`, `link`) VALUES
(1, './img/stats/guy_comp.jpg'),
(2, './img/stats/bw_comp.jpg'),
(3, './img/stats/event2_comp.jpg'),
(4, './img/stats/bw2_comp.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientreviews`
--
ALTER TABLE `clientreviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statsimg`
--
ALTER TABLE `statsimg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientreviews`
--
ALTER TABLE `clientreviews`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `statsimg`
--
ALTER TABLE `statsimg`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
