-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 11, 2017 at 01:13 PM
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
(1, 'SpectroCoin', 1.35, 1.41, 108985.25, 1.35, 10.56, 'synereo.svg', 10020, 1010),
(2, 'TetraCoin', 0.90, 0.93, 99580.00, 0.90, 10.56, 'tether.svg', 0, 420),
(3, 'PepsiCoin', 11.99, 12.07, 99879.00, 2.05, 14.56, 'potcoin.svg', 0, 121),
(4, 'OmegaCoin', 0.11, 0.11, 100000.00, 0.00, 0.11, 'waves.svg', 11257, 0),
(5, 'VergeCoin', 2.48, 2.54, 100000.00, 2.05, 10.56, 'vertcoin.svg', 0, 0),
(6, 'BetaCoin', 119.49, 120.47, 100000.00, 2.05, 136.09, 'bytecoin.svg', 802.87, 1.65),
(7, 'EmCoin', 0.82, 0.83, 100000.00, 0.82, 10.56, 'emercoin.svg', 0, 0),
(8, 'RemCoin', 19.74, 19.84, 100000.00, 2.05, 24.35, 'ripple.svg', 5.44, 0),
(9, 'MargCoin', 0.28, 0.29, 100000.00, 0.28, 10.56, 'monero.svg', 0, 0),
(10, 'CreativeCoin', 0.12, 0.12, 100000.00, 0.12, 200.64, 'counterparty.svg', 0, 0),
(11, 'DogeCoin', 2.45, 2.46, 99950.00, 2.05, 10.56, 'dogecoin.svg', 0, 50),
(12, 'TelCoin', 0.58, 0.60, 100000.00, 0.58, 10.56, 'tezos.svg', 0, 0);

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
(1, 2.05, 2.64, 2.98, 3.02, 2.98, 2.46, 3.69, 6.22, 5.15, 3.34, 2.68, 10.56, 2.05, 2.64, 2.38, 1.47, 1.35, 2.46, 3.69, 4.92, 5.68, 5.75, 6.95, 10.56),
(2, 2.05, 2.64, 2.98, 3.02, 2.98, 2.46, 3.69, 3.60, 2.64, 1.69, 1.52, 10.56, 2.05, 2.64, 1.45, 0.97, 0.90, 2.46, 3.69, 4.92, 5.68, 5.75, 6.95, 10.56),
(3, 2.05, 2.64, 2.98, 3.02, 2.98, 2.46, 3.69, 14.56, 14.02, 13.06, 12.83, 10.56, 2.05, 2.64, 12.67, 12.08, 11.99, 2.46, 3.69, 4.92, 5.68, 5.75, 6.95, 10.56),
(4, 0.00, 0.00, 0.02, 0.02, 0.02, 0.03, 0.03, 0.04, 0.08, 0.06, 0.06, 0.00, 0.00, 0.00, 0.06, 0.11, 0.11, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(5, 2.05, 2.64, 2.98, 3.02, 2.98, 2.46, 3.69, 7.39, 6.66, 5.52, 4.99, 10.56, 2.05, 2.64, 4.22, 2.72, 2.48, 2.46, 3.69, 4.92, 5.68, 5.75, 6.95, 10.56),
(6, 2.05, 2.64, 2.98, 3.02, 2.98, 2.46, 3.69, 136.09, 134.34, 126.68, 128.45, 10.56, 2.05, 2.64, 126.35, 120.54, 119.49, 2.46, 3.69, 4.92, 5.68, 5.75, 6.95, 10.56),
(7, 2.05, 2.64, 2.98, 3.02, 2.98, 2.46, 3.69, 4.59, 3.40, 2.10, 1.65, 10.56, 2.05, 2.64, 1.55, 0.84, 0.82, 2.46, 3.69, 4.92, 5.68, 5.75, 6.95, 10.56),
(8, 2.05, 2.64, 2.98, 3.02, 2.98, 2.46, 3.69, 24.35, 23.66, 21.87, 21.19, 10.56, 2.05, 2.64, 20.97, 19.92, 19.74, 2.46, 3.69, 4.92, 5.68, 5.75, 6.95, 10.56),
(9, 2.05, 2.64, 2.98, 3.02, 2.98, 2.46, 3.69, 1.26, 0.98, 0.69, 0.59, 10.56, 2.05, 2.64, 0.52, 0.31, 0.28, 2.46, 3.69, 4.92, 5.68, 5.75, 6.95, 10.56),
(10, 2.05, 200.64, 2.98, 3.02, 2.98, 2.46, 3.69, 0.50, 0.33, 0.21, 0.19, 10.56, 2.05, 2.64, 0.19, 0.13, 0.12, 2.46, 3.69, 4.92, 5.68, 5.75, 6.95, 10.56),
(11, 2.05, 2.64, 2.98, 3.02, 2.98, 2.46, 3.69, 7.89, 6.22, 5.02, 4.21, 10.56, 2.05, 2.64, 3.88, 2.58, 2.45, 2.46, 3.69, 4.92, 5.68, 5.75, 6.95, 10.56),
(12, 2.05, 2.64, 2.98, 3.02, 2.98, 2.46, 3.69, 2.62, 1.95, 1.19, 1.04, 10.56, 2.05, 2.64, 0.94, 0.62, 0.58, 2.46, 3.69, 4.92, 5.68, 5.75, 6.95, 10.56);

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
(16, 'Admin', 'test', 'admin@crypto-hoot.lt', 'man3.svg', 964068.62, 1153909.38, 125235, 0.00, 420.00, 111.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(17, 'Tadas', 'test', 'tadas@cryptohoot.lt', '', 2500.00, 0.00, 1506, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(18, 'Valiera', 'asd', 'test@test', 'girl.svg', 250.00, 0.00, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(19, 'VytasCizauskas', '789456123', 'vytas@gmail.com', 'man2.svg', 209686.98, 139253.45, 89744, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(20, 'CryptoPiotr', 'demo', 'demo@asd', 'man.svg', 2400.00, 0.00, 2655, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(21, 'demo2', 'demo2', 'demo2@asdasd', 'girl3.svg', 250.00, 0.00, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(22, 'LauraK', 'lauralaura', 'lauralauraaaaaa@ikea.lt', 'girl.svg', 2.75, 242.40, 30, 0.00, 0.00, 10.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 50.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00);

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
(16, 'You bought 111.00 PepsiCoin for $1357.51', '2017-12-10 18:24:12', 'You bought 420 TetraCoin for $385.56', '2017-12-10 18:20:38', 'You sold 10010 SpectroCoin for $13243.23', '2017-12-10 18:19:07'),
(17, 'First time you logged in!', '2017-12-09 06:57:15', 'You were gifted $250 in-game money!', '2017-12-09 06:57:15', 'You joined CRYPTO-HOOT!', '2017-12-09 06:57:15'),
(18, 'First time you logged in!', '2017-12-09 07:02:47', 'You were gifted $250 in-game money!', '2017-12-09 07:02:47', 'You joined CRYPTO-HOOT!', '2017-12-09 07:02:47'),
(19, 'You sold 1000 BetaCoin for $125714.4', '2017-12-09 13:40:41', 'You bought 1000 BetaCoin for $124746', '2017-12-09 13:38:59', 'You sold 88743 OmegaCoin for $26960.12', '2017-12-09 13:35:38'),
(20, 'First time you logged in!', '2017-12-10 08:34:11', 'You were gifted $250 in-game money!', '2017-12-10 08:34:11', 'You joined CRYPTO-HOOT!', '2017-12-10 08:34:11'),
(21, 'First time you logged in!', '2017-12-10 08:34:30', 'You were gifted $250 in-game money!', '2017-12-10 08:34:30', 'You joined CRYPTO-HOOT!', '2017-12-10 08:34:30'),
(22, 'You bought 50.00 DogeCoin for $124.95', '2017-12-10 18:44:43', 'You bought 10 PepsiCoin for $122.3', '2017-12-10 18:42:34', 'First time you logged in!', '2017-12-10 18:41:35');

-- --------------------------------------------------------

--
-- Table structure for table `users_buysell_history`
--

DROP TABLE IF EXISTS `users_buysell_history`;
CREATE TABLE `users_buysell_history` (
  `history_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `action` varchar(32) NOT NULL,
  `value` float(50,2) NOT NULL,
  `total_price` float(50,2) NOT NULL,
  `each_price` float(50,2) NOT NULL,
  `tax` float(50,2) NOT NULL,
  `curr_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_buysell_history`
--

INSERT INTO `users_buysell_history` (`history_id`, `user_id`, `action`, `value`, `total_price`, `each_price`, `tax`, `curr_id`) VALUES
(1, 16, 'SELL', 100.00, 268.00, 2.68, 2.10, 1),
(2, 16, 'BUY', 10.00, 14.10, 1.41, 0.28, 1),
(3, 16, 'BUY', 5.44, 107.93, 19.84, 2.16, 8),
(4, 16, 'BUY', 1.22, 146.97, 120.47, 2.94, 6),
(5, 16, 'BUY', 1.65, 201.10, 119.49, 3.94, 6),
(6, 16, 'SELL', 11257.00, 1213.50, 0.11, 24.77, 4),
(7, 16, 'SELL', 10.00, 13.23, 1.35, 0.27, 1),
(8, 16, 'SELL', 802.87, 94016.24, 119.49, 1918.70, 6),
(9, 16, 'SELL', 5.44, 105.24, 19.74, 2.15, 8),
(10, 16, 'BUY', 1000.00, 1377.00, 1.35, 27.00, 1),
(11, 16, 'BUY', 10.00, 13.77, 1.35, 0.27, 1),
(12, 16, 'SELL', 10010.00, 13243.23, 1.35, 270.27, 1),
(13, 16, 'BUY', 420.00, 385.56, 0.90, 7.56, 2),
(14, 16, 'BUY', 111.00, 1357.51, 11.99, 26.62, 3),
(15, 22, 'BUY', 10.00, 122.30, 11.99, 2.40, 3),
(16, 22, 'BUY', 50.00, 124.95, 2.45, 2.45, 11);

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
-- Indexes for table `users_buysell_history`
--
ALTER TABLE `users_buysell_history`
  ADD PRIMARY KEY (`history_id`);

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
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `users_buysell_history`
--
ALTER TABLE `users_buysell_history`
  MODIFY `history_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
