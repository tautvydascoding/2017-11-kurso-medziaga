-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 11, 2017 at 01:47 PM
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
-- Database: `projektas`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `artclTitle` varchar(30) CHARACTER SET utf8 NOT NULL,
  `artclContent` text CHARACTER SET utf8 NOT NULL,
  `artclAuthor` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `date`, `artclTitle`, `artclContent`, `artclAuthor`) VALUES
(45, '2017-12-10 14:08:01', 'Jaunimas', 'JAUNIMAS JAUNIMAS. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'admin'),
(46, '2017-12-10 14:08:24', 'APIE MUS', 'APIE APIE MUS. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'admin'),
(47, '2017-12-10 14:08:55', 'Slovinimas', 'SLOVINIMAS SLOVINIMAS. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'admin'),
(48, '2017-12-10 14:10:15', 'Vizija', 'VIZIJA VIZIJA.. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'admin'),
(49, '2017-12-10 15:17:39', 'Straipsnis', 'Dar vienas', 'admin'),
(55, '2017-12-11 13:41:56', 'straipsnis', 'pabandymui', 'dar vienas'),
(57, '2017-12-11 13:49:38', 'straipsnis', 'pabandymui', 'ir dar vienas'),
(58, '2017-12-11 13:50:09', 'sdasd', 'asdasda', 'dasda'),
(60, '2017-12-11 13:55:13', 'asdasd', 'aadsadad', 'adin'),
(61, '2017-12-11 13:55:54', 'dasdas', 'dasdasd', 'sadasd'),
(62, '2017-12-11 13:56:14', 'sdasdas', 'dasdasd', 'dasdasd'),
(63, '2017-12-11 13:59:18', 'asdas', 'asdasda', 'sdas');

-- --------------------------------------------------------

--
-- Table structure for table `kontaktai`
--

CREATE TABLE `kontaktai` (
  `id` int(5) NOT NULL,
  `vardas` varchar(255) NOT NULL,
  `pavarde` varchar(255) NOT NULL,
  `numeris` int(5) NOT NULL,
  `adresas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontaktai`
--

INSERT INTO `kontaktai` (`id`, `vardas`, `pavarde`, `numeris`, `adresas`) VALUES
(1, 'Juozas', 'Juozaitis', 2147483647, 'Kursiu g. 7, Kaunas, 53421'),
(2, 'Petras', 'Kasparaitis', 2147483647, 'Kursiu g. 14'),
(3, 'Pienius', 'Kabalis', 866434512, 'Kursiu g. 14'),
(4, 'Kevis', 'Lecis', 65321558, 'D?kšt? g. 28, Kaunas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontaktai`
--
ALTER TABLE `kontaktai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `kontaktai`
--
ALTER TABLE `kontaktai`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
