-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2017 at 01:04 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dimobis`
--
CREATE DATABASE IF NOT EXISTS `dimobis` DEFAULT CHARACTER SET utf8 COLLATE utf8_lithuanian_ci;
USE `dimobis`;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `firstname` varchar(32) COLLATE utf8_lithuanian_ci NOT NULL,
  `lastname` varchar(32) COLLATE utf8_lithuanian_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_lithuanian_ci NOT NULL,
  `passwd` varchar(32) COLLATE utf8_lithuanian_ci NOT NULL,
  `address` varchar(32) COLLATE utf8_lithuanian_ci NOT NULL,
  `city` varchar(32) COLLATE utf8_lithuanian_ci NOT NULL,
  `postcode` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `firstname`, `lastname`, `email`, `passwd`, `address`, `city`, `postcode`) VALUES
(1, 'as', 'as', 'as@as.as', 'as', 'as', '123', 123);

-- --------------------------------------------------------

--
-- Table structure for table `img_links`
--

DROP TABLE IF EXISTS `img_links`;
CREATE TABLE `img_links` (
  `id` int(11) NOT NULL,
  `name` varchar(128) COLLATE utf8_lithuanian_ci NOT NULL,
  `img_link` varchar(128) COLLATE utf8_lithuanian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Dumping data for table `img_links`
--

INSERT INTO `img_links` (`id`, `name`, `img_link`) VALUES
(1, 'First Carousel Pic', 'carousel/carousel_1.jpg'),
(2, 'Second Carousel Pic', 'carousel/carousel_2.jpg'),
(3, 'First Adverticing image', 'adv_1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

DROP TABLE IF EXISTS `info`;
CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `name` varchar(128) COLLATE utf8_lithuanian_ci NOT NULL,
  `text` text COLLATE utf8_lithuanian_ci NOT NULL,
  `brand_name` varchar(128) COLLATE utf8_lithuanian_ci NOT NULL,
  `brand_text` text COLLATE utf8_lithuanian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `name`, `text`, `brand_name`, `brand_text`) VALUES
(1, '<h4>pristatymas</h4>', '<p>\r\n                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation\r\n                </p>', '', ''),
(2, '<h4>kontaktai</h4>', '<p>\r\n                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation\r\n                </p>', '', ''),
(3, '<h4>pristatymas</h4>', '<p>\r\n                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation\r\n                </p>', '', ''),
(4, '<h5>priedai kazikokie</h5>', '<p>\r\n                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n                </p>', '<h5>dimobis.lt</h5>', '<p>\r\n                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation\r\n                </p>');

-- --------------------------------------------------------

--
-- Table structure for table `info_links`
--

DROP TABLE IF EXISTS `info_links`;
CREATE TABLE `info_links` (
  `id` int(11) NOT NULL,
  `name` varchar(128) COLLATE utf8_lithuanian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Dumping data for table `info_links`
--

INSERT INTO `info_links` (`id`, `name`) VALUES
(1, '<h3>ausinės</h3>'),
(2, '<h4>automobiliniai</h4>\r\n                            <h3>įkrovikliai</h3>'),
(3, '<h3>automobiliniai</h3>\r\n                            <h4>telefonų</h4>\r\n                            <h5>laikikliai</h5>'),
(4, '<h3>usb</h3>\r\n                            <h4>laidai</h4>'),
(5, '<h3>akumuliatoriai</h3>\r\n                            <h4>telefonams</h4>');

-- --------------------------------------------------------

--
-- Table structure for table `info_text`
--

DROP TABLE IF EXISTS `info_text`;
CREATE TABLE `info_text` (
  `id` int(11) NOT NULL,
  `headline` varchar(128) COLLATE utf8_lithuanian_ci NOT NULL,
  `name_1` varchar(128) COLLATE utf8_lithuanian_ci NOT NULL,
  `text_1` text COLLATE utf8_lithuanian_ci NOT NULL,
  `name_2` varchar(128) COLLATE utf8_lithuanian_ci NOT NULL,
  `text_2` text COLLATE utf8_lithuanian_ci NOT NULL,
  `name_3` varchar(128) COLLATE utf8_lithuanian_ci NOT NULL,
  `text_3` text COLLATE utf8_lithuanian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Dumping data for table `info_text`
--

INSERT INTO `info_text` (`id`, `headline`, `name_1`, `text_1`, `name_2`, `text_2`, `name_3`, `text_3`) VALUES
(1, '<h2>Tekstas</h2>', '<p class="bold">Tekstas</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '<p class="bold">Tekstas</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '<p class="bold">Tekstas</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

DROP TABLE IF EXISTS `manufacturer`;
CREATE TABLE `manufacturer` (
  `id` int(11) NOT NULL,
  `name` varchar(32) COLLATE utf8_lithuanian_ci NOT NULL,
  `model_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`id`, `name`, `model_id`) VALUES
(1, 'Apple', 1),
(2, 'Samsung', 2),
(3, 'Sony', 3),
(4, 'LG', 4),
(5, 'HTC', 5),
(6, 'Microsoft', 6),
(7, 'Huawey', 7);

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

DROP TABLE IF EXISTS `model`;
CREATE TABLE `model` (
  `id` int(11) NOT NULL,
  `name` varchar(32) COLLATE utf8_lithuanian_ci NOT NULL,
  `manufacturer_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Dumping data for table `model`
--

INSERT INTO `model` (`id`, `name`, `manufacturer_id`) VALUES
(1, 'iPhone 4/4s', 1),
(2, 'iPhone 5/5s', 1),
(3, 'iPhone 6/6s', 1),
(4, 'iPhone 6 Plus', 1),
(5, 'iPhone 7/8', 1),
(6, 'iPhone 7 Plus', 1),
(7, 'iPhone x', 1),
(8, 'Galaxy A3', 2),
(9, 'Galaxy A3 2016', 2),
(10, 'Galaxy A3 2017', 2),
(11, 'Galaxy A5', 2),
(12, 'Galaxy A5 2016', 2),
(13, 'Galaxy A5 2017', 2),
(14, 'Galaxy Alpha', 2),
(15, 'Galaxy Core Plus', 2),
(16, 'Galaxy J1 2016', 2),
(17, 'Galaxy J3 2016', 2),
(18, 'Galaxy J3 2017', 2),
(19, 'Galaxy J5', 2),
(20, 'Galaxy J5 2016', 2),
(21, 'Galaxy J5 2017', 2),
(22, 'Galaxy J7 2016', 2),
(23, 'Galaxy J7 2017', 2),
(24, 'Galaxy Note 3', 2),
(25, 'Galaxy Note 4', 2),
(45, 'Xperia E5', 3),
(44, 'Xperia E1g', 3),
(26, 'Galaxy Note 5', 2),
(27, 'Galaxy Note 7', 2),
(28, 'Galaxy Note 8', 2),
(29, 'Galaxy S3', 2),
(30, 'Galaxy S4', 2),
(31, 'Galaxy S4 Mini', 2),
(32, 'Galaxy S5', 2),
(33, 'Galaxy S5 Mini', 2),
(34, 'Galaxy S6 Edge', 2),
(35, 'Galaxy S6', 2),
(36, 'Galaxy S7', 2),
(37, 'Galaxy S7 Edge', 2),
(38, 'Galaxy S8', 2),
(39, 'Galaxy S8 Plus', 2),
(40, 'Galaxy Xcover 3', 2),
(41, 'Galaxy Xcover 4', 2),
(46, 'Xperia L1', 3),
(47, 'Xperia M2', 3),
(48, 'Xperia M4 Aqua', 3),
(49, 'Xperia M5', 3),
(50, 'Xperia T3', 3),
(51, 'Xperia X', 3),
(52, 'Xperia X Compact', 3),
(53, 'Xperia X Performance', 3),
(54, 'Xperia XA', 3),
(55, 'Xperia A1', 3),
(56, 'Xperia XA Ultra', 3),
(57, 'Xperia XA1 Ultra', 3),
(58, 'Xperia XZ/XZs', 3),
(59, 'XZ Premium', 3),
(60, 'Xperia Z1', 3),
(61, 'Xperia Z1 Compact', 3),
(62, 'Xperia Z2', 3),
(63, 'Xperia Z3', 3),
(64, 'Xperia Z3 Compact', 3),
(65, 'Xperia Z3+', 3),
(66, 'Xperia Z4 Compact', 3),
(67, 'Xperia Z5', 3),
(68, 'Xperia Z5 Compact', 3),
(69, 'Xperia Z5 Premium', 3),
(70, 'G Flex', 4),
(71, 'G2', 4),
(72, 'G2 Mini', 4),
(73, 'G3', 4),
(74, 'G3s', 4),
(75, 'G4', 4),
(76, 'G4c', 4),
(77, 'G4 Stylus', 4),
(78, 'G4s', 4),
(79, 'G5', 4),
(80, 'G6', 4),
(81, 'Google Nexus 5X', 4),
(82, 'Joy', 4),
(83, 'K3 2017', 4),
(86, 'K8', 4),
(87, 'K8 2017', 4),
(84, 'K4', 4),
(85, 'K4 2017', 4),
(90, 'K10', 4),
(91, 'K10 2017', 4),
(92, 'L50', 4),
(93, 'Leon', 4),
(94, 'Magna', 4),
(95, 'Q6', 4),
(96, 'Spirit', 4),
(97, 'V10', 4),
(98, 'Stylus 2', 4),
(99, 'Zero', 4),
(100, 'Desire 320', 5),
(101, 'Desire 510', 5),
(102, 'Desire 610', 5),
(104, 'Desire 820', 5),
(105, 'Desire 830', 5),
(108, 'One Mini 2', 5),
(103, 'Desire 620', 5),
(106, 'Desire X', 5),
(109, 'One (A9)', 5),
(110, 'One (A9S)', 5),
(111, 'One (E8)', 5),
(112, 'One (M7)', 5),
(113, 'One (M8/M8S)', 5),
(114, 'One (M9/M9S)', 5),
(115, 'One (M10)', 5),
(116, 'One U11', 5),
(117, 'Lumia 630/635', 6),
(118, 'Lumia 640', 6),
(119, 'Lumia 640 Xl', 6),
(120, 'Lumia 650', 6),
(121, 'Lumia 730/735', 6),
(122, 'Lumia 830', 6),
(123, 'Lumia 930', 6),
(124, 'Lumia 950', 6),
(125, 'Lumia 950 XL', 6),
(126, 'Ascend G620s', 7),
(127, 'Ascend G7', 7),
(128, 'Ascend Mate 7', 7),
(129, 'Ascend Y3 II (2016)', 7),
(130, 'Ascend Y5 II (2016)', 7),
(131, 'Ascend Y6', 7),
(132, 'Ascend Y6 II (2016)', 7),
(133, 'Honor 5x', 7),
(134, 'Honor 7', 7),
(135, 'Honor 6', 7),
(136, 'Honor 6X', 7),
(137, 'Honor 7 Lite', 7),
(138, 'Honor 8', 7),
(139, 'Honor 9', 7),
(140, 'Mate S', 7),
(141, 'Mate 9', 7),
(142, 'Nova', 7),
(143, 'P8', 7),
(144, 'P8 Lite', 7),
(145, 'P9', 7),
(146, 'P8 Lite 2017/ P9 Lite 2017', 7),
(147, 'P9 Lite', 7),
(148, 'P9 Lite Mini', 7),
(149, 'P 10', 7),
(150, 'P10 Lite', 7),
(151, 'P10 Plus', 7),
(152, 'Y6 2017', 7),
(153, 'Y7', 7);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(128) COLLATE utf8_lithuanian_ci NOT NULL,
  `price` varchar(10) COLLATE utf8_lithuanian_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `data_add` datetime NOT NULL,
  `data_upd` datetime NOT NULL,
  `model_id` int(11) NOT NULL,
  `manufacturer_id` int(11) NOT NULL,
  `img_link` varchar(128) COLLATE utf8_lithuanian_ci NOT NULL,
  `about` text COLLATE utf8_lithuanian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `quantity`, `data_add`, `data_upd`, `model_id`, `manufacturer_id`, `img_link`, `about`) VALUES
(1, 'Ilgas prekės pavadinimas Ilgas prekės pavadinimas ', '0.00', 999, '2017-12-09 00:00:00', '2017-12-09 00:00:00', 1, 1, 'product/case_1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `img_links`
--
ALTER TABLE `img_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info_links`
--
ALTER TABLE `info_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info_text`
--
ALTER TABLE `info_text`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model`
--
ALTER TABLE `model`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `img_links`
--
ALTER TABLE `img_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `info_links`
--
ALTER TABLE `info_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `info_text`
--
ALTER TABLE `info_text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `model`
--
ALTER TABLE `model`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
