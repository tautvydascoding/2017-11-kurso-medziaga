-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 09, 2017 at 12:30 AM
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
-- Database: `crypto_hoot`
--
CREATE DATABASE IF NOT EXISTS `crypto_hoot` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `crypto_hoot`;

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

DROP TABLE IF EXISTS `currencies`;
CREATE TABLE `currencies` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `lastPrice` float(50,2) DEFAULT NULL,
  `priceBefore` float(50,2) NOT NULL,
  `volume` float(100,2) DEFAULT NULL,
  `low` float(50,2) DEFAULT NULL,
  `high` float(50,2) DEFAULT NULL,
  `img` varchar(125) DEFAULT NULL,
  `users_sold` float NOT NULL DEFAULT '0',
  `users_bought` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `currencies`
--

INSERT INTO `currencies` (`id`, `name`, `lastPrice`, `priceBefore`, `volume`, `low`, `high`, `img`, `users_sold`, `users_bought`) VALUES
(1, 'SpectroCoin', 10.32, 10.81, 971.93, 0.01, 0.01, 'synereo.svg', 0, 0),
(2, 'TetraCoin', 11.00, 10.92, 99995.00, 0.01, 0.01, 'tether.svg', 0, 0),
(3, 'PepsiCoin', 15.00, 18.22, 100000.00, 0.01, 0.01, 'potcoin.svg', 0, 0),
(4, 'OmegaCoin', 9.00, 4.60, 99990.00, 0.01, 0.01, 'waves.svg', 0, 0),
(5, 'VergeCoin', 10.50, 10.11, 100000.00, 0.01, 0.01, 'vertcoin.svg', 0, 0),
(6, 'ByteCoin', 14.12, 14.36, 100000.00, 0.01, 0.01, 'bytecoin.svg', 0, 0),
(7, 'EmCoin', 5.55, 6.66, 100000.00, 0.01, 0.01, 'emercoin.svg', 0, 0),
(8, 'RemCoin', 9.55, 8.25, 100000.00, 0.01, 0.01, 'ripple.svg', 0, 0),
(9, 'MargCoin', 9.89, 9.03, 100000.00, 0.01, 0.01, 'monero.svg', 0, 0),
(10, 'CreativeCoin', 20.40, 25.36, 100000.00, 0.01, 0.01, 'counterparty.svg', 0, 0),
(11, 'DogeCoin', 9.00, 9.00, 100000.00, 0.01, 0.01, 'dogecoin.svg', 0, 0),
(12, 'TelCoin', 7.20, 7.18, 100000.00, 0.01, 0.01, 'tezos.svg', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `currhistory`
--

DROP TABLE IF EXISTS `currhistory`;
CREATE TABLE `currhistory` (
  `id` int(11) NOT NULL,
  `hour00` float(50,2) DEFAULT NULL,
  `hour01` float(50,2) DEFAULT NULL,
  `hour02` float(50,2) DEFAULT NULL,
  `hour03` float(50,2) DEFAULT NULL,
  `hour04` float(50,2) DEFAULT NULL,
  `hour05` float(50,2) DEFAULT NULL,
  `hour06` float(50,2) DEFAULT NULL,
  `hour07` float(50,2) DEFAULT NULL,
  `hour08` float(50,2) DEFAULT NULL,
  `hour09` float(50,2) DEFAULT NULL,
  `hour10` float(50,2) DEFAULT NULL,
  `hour11` float(50,2) DEFAULT NULL,
  `hour12` float(50,2) DEFAULT NULL,
  `hour13` float(50,2) DEFAULT NULL,
  `hour14` float(50,2) DEFAULT NULL,
  `hour15` float(50,2) DEFAULT NULL,
  `hour16` float(50,2) DEFAULT NULL,
  `hour17` float(50,2) DEFAULT NULL,
  `hour18` float(50,2) DEFAULT NULL,
  `hour19` float(50,2) DEFAULT NULL,
  `hour20` float(50,2) DEFAULT NULL,
  `hour21` float(50,2) DEFAULT NULL,
  `hour22` float(50,2) DEFAULT NULL,
  `hour23` float(50,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `currhistory`
--

INSERT INTO `currhistory` (`id`, `hour00`, `hour01`, `hour02`, `hour03`, `hour04`, `hour05`, `hour06`, `hour07`, `hour08`, `hour09`, `hour10`, `hour11`, `hour12`, `hour13`, `hour14`, `hour15`, `hour16`, `hour17`, `hour18`, `hour19`, `hour20`, `hour21`, `hour22`, `hour23`) VALUES
(1, 2.05, 2.64, 2.98, 3.02, 2.98, 2.46, 3.69, 4.92, 5.68, 5.75, 6.95, 10.56, 2.05, 2.64, 2.98, 3.02, 2.98, 2.46, 3.69, 4.92, 5.68, 5.75, 6.95, 10.56);

-- --------------------------------------------------------

--
-- Table structure for table `serverparams`
--

DROP TABLE IF EXISTS `serverparams`;
CREATE TABLE `serverparams` (
  `lastUpdate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `serverparams`
--

INSERT INTO `serverparams` (`lastUpdate`) VALUES
(1512424800);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(16) NOT NULL,
  `email` varchar(64) NOT NULL,
  `profile_pic` varchar(56) NOT NULL,
  `wallet` float(255,2) DEFAULT NULL,
  `invested` float(255,2) DEFAULT '0.00',
  `xp` int(11) DEFAULT '0',
  `curr_1` float(100,2) DEFAULT '0.00',
  `curr_2` float(100,2) DEFAULT '0.00',
  `curr_3` float(100,2) DEFAULT '0.00',
  `curr_4` float(100,2) DEFAULT '0.00',
  `curr_5` float(100,2) DEFAULT '0.00',
  `curr_6` float(100,2) DEFAULT '0.00',
  `curr_7` float(100,2) DEFAULT '0.00',
  `curr_8` float(100,2) DEFAULT '0.00',
  `curr_9` float(100,2) DEFAULT '0.00',
  `curr_10` float(100,2) DEFAULT '0.00',
  `curr_11` float(100,2) DEFAULT '0.00',
  `curr_12` float(100,2) DEFAULT '0.00',
  `curr_13` float(100,2) DEFAULT '0.00',
  `curr_14` float(100,2) DEFAULT '0.00',
  `curr_15` float(100,2) DEFAULT '0.00',
  `curr_16` float(100,2) DEFAULT '0.00',
  `curr_17` float(100,2) DEFAULT '0.00',
  `curr_18` float(100,2) DEFAULT '0.00',
  `curr_19` float(100,2) DEFAULT '0.00',
  `curr_20` float(100,2) DEFAULT '0.00',
  `curr_21` float(100,2) DEFAULT '0.00',
  `curr_22` float(100,2) DEFAULT '0.00',
  `curr_23` float(100,2) DEFAULT '0.00',
  `curr_24` float(100,2) DEFAULT '0.00',
  `curr_25` float(100,2) DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `profile_pic`, `wallet`, `invested`, `xp`, `curr_1`, `curr_2`, `curr_3`, `curr_4`, `curr_5`, `curr_6`, `curr_7`, `curr_8`, `curr_9`, `curr_10`, `curr_11`, `curr_12`, `curr_13`, `curr_14`, `curr_15`, `curr_16`, `curr_17`, `curr_18`, `curr_19`, `curr_20`, `curr_21`, `curr_22`, `curr_23`, `curr_24`, `curr_25`) VALUES
(16, 'Admin', '745361', 'admin@crypto-hoot.lt', 'man3.svg', 300.00, 1046609.44, 49673, 99013.32, 5.00, 0.00, 10.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `users_activity`
--

DROP TABLE IF EXISTS `users_activity`;
CREATE TABLE `users_activity` (
  `user_id` int(11) NOT NULL DEFAULT '0',
  `activity1` varchar(255) DEFAULT NULL,
  `activity1_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `activity2` varchar(255) DEFAULT NULL,
  `activity2_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `activity3` varchar(255) DEFAULT NULL,
  `activity3_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_activity`
--

INSERT INTO `users_activity` (`user_id`, `activity1`, `activity1_time`, `activity2`, `activity2_time`, `activity3`, `activity3_time`) VALUES
(16, 'You bought 99000 SpectroCoin for $1066348.8', '2017-12-08 18:49:12', 'You bought 13.32 SpectroCoin for $143.47', '2017-12-08 18:36:24', 'You sold 1 TelCoin for $7.06', '2017-12-08 18:36:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currhistory`
--
ALTER TABLE `currhistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users_activity`
--
ALTER TABLE `users_activity`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
