-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 13, 2021 at 12:26 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customer`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_bin NOT NULL,
  `email` varchar(200) COLLATE utf8_bin NOT NULL,
  `phone` varchar(14) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `date_create` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `name`, `email`, `phone`, `date_create`, `active`) VALUES
(6, 'Roelvis Coello Abijana', 'rcabijana@gmail.com', '(786) 712-2310', '2021-09-08 02:59:38', 0),
(11, 'Susana Fuentes', 'susanaperez@gmail.com', '(786) 865-2310', '2021-09-29 01:21:08', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer_award`
--

CREATE TABLE `customer_award` (
  `id_award` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `award` varchar(11) COLLATE utf8_bin NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `customer_award`
--

INSERT INTO `customer_award` (`id_award`, `id_customer`, `award`, `create_date`) VALUES
(3, 3, '400', '2021-09-29 23:00:46'),
(4, 11, '400', '2021-09-29 23:00:46'),
(5, 3, '450', '2021-09-29 23:11:22'),
(7, 9, '500', '2021-09-29 23:32:09'),
(8, 9, 'BANKRUPT', '2021-09-29 23:56:14'),
(9, 9, '500', '2021-10-06 22:55:10'),
(10, 9, '500', '2021-10-06 23:00:40'),
(11, 9, '600', '2021-10-06 23:03:50'),
(12, 9, '400', '2021-10-06 23:04:36'),
(13, 9, '600', '2021-10-06 23:06:33'),
(14, 9, '800', '2021-10-06 23:08:36'),
(15, 9, 'BANKRUPT', '2021-10-06 23:50:08'),
(16, 9, '1000', '2021-10-06 23:57:16'),
(17, 9, 'LOOSE TURN', '2021-10-07 00:04:55'),
(18, 9, '300', '2021-10-07 00:16:14'),
(19, 9, '450', '2021-10-07 00:16:47'),
(20, 9, 'BANKRUPT', '2021-10-07 00:18:36'),
(21, 9, '600', '2021-10-07 00:18:53'),
(22, 14, '350', '2021-10-10 00:51:36'),
(23, 8, '800', '2021-10-10 00:57:05'),
(24, 8, '750', '2021-10-13 10:43:37'),
(25, 6, '500', '2021-10-13 10:44:31'),
(26, 8, '500', '2021-10-13 10:44:31'),
(27, 6, '450', '2021-11-03 23:49:43'),
(28, 8, '450', '2021-11-03 23:49:43'),
(29, 6, '400', '2021-11-08 22:14:43'),
(30, 8, '400', '2021-11-08 22:14:43'),
(31, 6, '450', '2021-11-10 23:45:59'),
(32, 8, '450', '2021-11-10 23:45:59'),
(33, 14, '650', '2021-11-10 23:47:12'),
(34, 14, '300', '2021-11-11 00:00:12'),
(35, 14, '600', '2021-11-11 00:04:43'),
(36, 14, '700', '2021-11-11 00:08:54'),
(37, 14, '600', '2021-11-11 00:17:54'),
(38, 14, '300', '2021-11-11 00:27:20'),
(39, 14, '800', '2021-11-11 00:42:14'),
(40, 14, '400', '2021-11-11 00:49:32'),
(41, 14, '400', '2021-11-11 00:51:16'),
(42, 14, '700', '2021-11-11 00:51:35'),
(43, 14, 'BANKRUPT', '2021-11-11 00:52:30'),
(44, 14, 'BANKRUPT', '2021-11-11 00:54:23'),
(45, 14, '900', '2021-11-11 00:54:41'),
(46, 14, '350', '2021-11-11 01:01:24'),
(47, 14, '650', '2021-11-11 01:04:20'),
(48, 14, '750', '2021-11-11 01:06:03'),
(49, 14, '1000', '2021-11-11 01:06:29'),
(50, 14, '700', '2021-11-11 01:07:24'),
(51, 14, '500', '2021-11-11 01:09:34'),
(52, 14, '1000', '2021-11-11 10:00:27'),
(53, 14, '600', '2021-11-11 10:08:47'),
(54, 14, '350', '2021-11-11 10:10:35'),
(55, 11, '700', '2021-11-11 10:11:11'),
(56, 14, '800', '2021-11-11 10:11:40'),
(57, 9, 'BANKRUPT', '2021-11-11 10:12:37'),
(58, 14, 'BANKRUPT', '2021-11-11 10:12:37'),
(59, 9, 'BANKRUPT', '2021-11-11 10:13:28'),
(60, 9, 'BANKRUPT', '2021-11-11 10:15:48'),
(61, 9, '350', '2021-11-11 10:18:22'),
(62, 9, '400', '2021-11-11 10:27:28'),
(63, 9, '300', '2021-11-11 10:51:14'),
(64, 9, '500', '2021-11-11 11:13:34'),
(65, 9, '600', '2021-11-11 11:18:11'),
(66, 9, '750', '2021-11-11 11:20:07'),
(67, 9, '400', '2021-11-12 01:21:33'),
(68, 9, '600', '2021-11-12 01:43:12'),
(69, 11, 'BANKRUPT', '2021-11-12 02:30:41'),
(70, 11, '3000', '2021-11-12 02:35:21'),
(71, 6, '1000', '2021-11-12 11:00:57'),
(72, 6, '800', '2021-11-12 11:08:42'),
(73, 6, '400', '2021-11-12 11:25:56'),
(74, 6, '800', '2021-11-12 11:27:19'),
(75, 11, '700', '2021-11-12 18:39:55'),
(76, 11, '350', '2021-11-12 18:41:40'),
(77, 11, '400', '2021-11-12 18:51:07'),
(78, 11, '3000', '2021-11-12 18:51:48'),
(79, 11, 'BANKRUPT', '2021-11-12 18:52:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `customer_award`
--
ALTER TABLE `customer_award`
  ADD PRIMARY KEY (`id_award`) USING BTREE,
  ADD KEY `id_customer` (`id_customer`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `customer_award`
--
ALTER TABLE `customer_award`
  MODIFY `id_award` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
