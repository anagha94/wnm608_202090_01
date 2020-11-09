-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 09, 2020 at 02:18 AM
-- Server version: 5.7.32
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anaghava_wnm608final`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `prize` decimal(10,0) NOT NULL,
  `category` varchar(32) NOT NULL,
  `size` varchar(32) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `prize`, `category`, `size`, `date_created`, `date_modified`, `description`, `thumbnail`, `images`) VALUES
(1, 'Brown Sugar Milk', 6, 'specialty_drinks', '', '2020-11-09 02:03:18', '2020-11-09 02:03:18', 'Whole Milk\r\nBoba Included', '', ''),
(2, 'Bee-Long', 6, 'specialty_drinks', '', '2020-11-09 02:04:28', '2020-11-09 02:04:28', 'Honey Oolong\r\nSalted Crema', '', ''),
(3, 'House Coffee', 5, 'specialty_drinks', '', '2020-11-09 02:05:27', '2020-11-09 02:05:27', 'Made with your choice of milk', '', ''),
(4, 'Vietnamese Coffee', 5, 'specialty_drinks', '', '2020-11-09 02:07:19', '2020-11-09 02:07:19', 'Made with condensed milk', '', ''),
(5, 'Lychee Refresher', 5, 'specialty_drinks', '', '2020-11-09 02:08:20', '2020-11-09 02:08:20', 'Lychee Green Tea\r\nCucumber Puree', '', ''),
(6, 'Thai Tea', 5, 'specialty_drinks', '', '2020-11-09 02:09:01', '2020-11-09 02:09:01', 'Made with evaporated milk', '', ''),
(7, 'Watermelon Tea', 5, 'specialty_drinks', '', '2020-11-09 02:09:50', '2020-11-09 02:09:50', 'We love it with Salted Crema', '', ''),
(8, 'Lavender Rose ', 6, 'specialty_drinks', '', '2020-11-09 02:10:45', '2020-11-09 02:10:45', '', '', ''),
(9, 'Matcha Latte', 6, 'specialty_drinks', '', '2020-11-09 02:12:29', '2020-11-09 02:12:29', 'Fresh Milk Option\r\n\r\nOptional Flavors \r\nStrawberry | Mango | Lychee | Peach', '', ''),
(10, 'Milk Trifecta', 5, 'specialty_drinks', '', '2020-11-09 02:13:55', '2020-11-09 02:13:55', 'Fresh Milk Option\r\n\r\nIncludes Red Bean, Lychee, Jelly, Boba', '', ''),
(11, 'Taro Milk', 6, 'specialty_drinks', '', '2020-11-09 02:14:42', '2020-11-09 02:14:42', 'Fresh Milk Option\r\nReal Taro', '', ''),
(12, 'Kumquat Lemon Green Tea', 6, 'specialty_drinks', '', '2020-11-09 02:16:47', '2020-11-09 02:16:47', 'Comes with Lychee Jelly\r\n\r\nPopping Boba Options Include\r\nMango | Strawberry | Lychee', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
