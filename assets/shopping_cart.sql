-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2015 at 03:21 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shopping_cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
`id` int(5) NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'member');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE IF NOT EXISTS `invoice` (
`id` int(10) NOT NULL,
  `date` datetime NOT NULL,
  `due_date` datetime NOT NULL,
  `user_id` int(10) NOT NULL,
  `status` enum('paid','unpaid','canceled','expired') NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `date`, `due_date`, `user_id`, `status`) VALUES
(1, '2015-05-04 12:22:19', '2015-05-05 12:22:19', 0, 'unpaid'),
(2, '2015-05-05 07:53:51', '2015-05-06 07:53:51', 0, 'unpaid'),
(4, '2015-05-06 08:19:31', '2015-05-07 08:19:31', 0, 'unpaid'),
(5, '2015-05-12 04:27:44', '2015-05-13 04:27:44', 1, 'unpaid'),
(6, '2015-05-12 04:28:25', '2015-05-13 04:28:25', 1, 'unpaid'),
(7, '2015-05-12 04:38:54', '2015-05-13 04:38:54', 1, 'unpaid'),
(8, '2015-05-12 04:52:29', '2015-05-13 04:52:29', 2, 'unpaid'),
(9, '2015-05-12 04:53:05', '2015-05-13 04:53:05', 2, 'unpaid'),
(10, '2015-05-12 05:16:15', '2015-05-13 05:16:15', 2, 'unpaid'),
(11, '2015-05-12 05:33:56', '2015-05-13 05:33:56', 2, 'unpaid'),
(12, '2015-05-12 11:29:53', '2015-05-13 11:29:53', 2, 'unpaid'),
(13, '2015-05-12 11:38:21', '2015-05-13 11:38:21', 2, 'unpaid'),
(14, '2015-05-12 14:05:53', '2015-05-13 14:05:53', 2, 'unpaid');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
`id` int(10) NOT NULL,
  `invoice_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `qty` int(3) NOT NULL,
  `price` int(9) NOT NULL,
  `options` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `invoice_id`, `product_id`, `product_name`, `qty`, `price`, `options`) VALUES
(1, 1, 1, 'Celana Jeans', 1, 260000, ''),
(2, 1, 2, 'Celana Jeans', 1, 245000, ''),
(3, 2, 10, 'Emba Jeans', 1, 287920, ''),
(4, 2, 11, 'Emba T-Shirt', 1, 199000, ''),
(5, 3, 10, 'Emba Jeans', 1, 287920, ''),
(6, 4, 11, 'Emba T-Shirt', 1, 199000, ''),
(7, 5, 9, 'Emba T-Shirt', 1, 349000, ''),
(8, 5, 10, 'Emba Jeans', 1, 287920, ''),
(9, 6, 9, 'Emba T-Shirt', 1, 349000, ''),
(10, 6, 10, 'Emba Jeans', 1, 287920, ''),
(11, 7, 10, 'Emba Jeans', 1, 287920, ''),
(12, 7, 11, 'Emba T-Shirt', 1, 199000, ''),
(13, 8, 10, 'Emba Jeans', 1, 287920, ''),
(14, 8, 11, 'Emba T-Shirt', 1, 199000, ''),
(15, 9, 9, 'Emba T-Shirt', 1, 349000, ''),
(16, 9, 10, 'Emba Jeans', 1, 287920, ''),
(17, 10, 10, 'Emba Jeans', 1, 287920, ''),
(18, 11, 11, 'Emba T-Shirt', 1, 199000, ''),
(19, 11, 12, 'Emba T-Shirt', 1, 349000, ''),
(20, 12, 10, 'Emba Jeans', 1, 287920, ''),
(21, 12, 11, 'Emba T-Shirt', 1, 199000, ''),
(22, 13, 11, 'Emba T-Shirt', 1, 199000, ''),
(23, 13, 12, 'Emba T-Shirt', 1, 349000, ''),
(24, 14, 10, 'Emba Jeans', 1, 287920, ''),
(25, 14, 11, 'Emba T-Shirt', 1, 199000, '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
`id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(150) NOT NULL,
  `price` int(10) NOT NULL,
  `stok` int(5) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `price`, `stok`, `image`) VALUES
(9, 'Emba T-Shirt', '1130520151 T-Shirt', 349000, 1, 'emba_shirt1.jpg'),
(10, 'Emba Jeans', 'Basic 08B Jeans', 287920, 1, 'emba-jeans-8015-395677-1.jpg'),
(11, 'Emba T-Shirt', '2070026911 T-Shirt', 199000, 1, 'emba-jeans-2742-648638-1.jpg'),
(12, 'Emba T-Shirt', 'emba-jeans-2370-468638-1', 349000, 1, 'emba-jeans-2370-468638-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `shopping_sessions`
--

CREATE TABLE IF NOT EXISTS `shopping_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shopping_sessions`
--

INSERT INTO `shopping_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('7465cd49b17ee5b1304b101c955f6eed', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36', 1431423398, 'a:3:{s:9:"user_data";s:0:"";s:8:"username";s:4:"dana";s:6:"groups";s:1:"2";}'),
('903db8ce8608781e907899982d9df64c', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36', 1431436703, 'a:2:{s:9:"user_data";s:0:"";s:13:"cart_contents";a:3:{s:32:"45c48cce2e2d7fbdea1afc51c7c6ad26";a:6:{s:5:"rowid";s:32:"45c48cce2e2d7fbdea1afc51c7c6ad26";s:2:"id";s:1:"9";s:3:"qty";s:1:"1";s:5:"price";s:6:"349000";s:4:"name";s:12:"Emba T-Shirt";s:8:"subtotal";i:349000;}s:11:"total_items";i:1;s:10:"cart_total";i:349000;}}'),
('9ad910c04b6ba7b8cb334c5c31360975', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36', 1431423398, 'a:3:{s:9:"user_data";s:0:"";s:8:"username";s:4:"dana";s:6:"groups";s:1:"2";}');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
  `id_trans` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `total_items` int(11) NOT NULL,
  `total_payment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `groups` int(5) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `groups`) VALUES
(1, 'admin', 'admin', 1),
(2, 'dana', '123', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shopping_sessions`
--
ALTER TABLE `shopping_sessions`
 ADD PRIMARY KEY (`session_id`), ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
