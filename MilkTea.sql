-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 06, 2020 at 08:55 AM
-- Server version: 5.7.28-0ubuntu0.18.04.4
-- PHP Version: 7.2.24-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `MilkTea`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `productName` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `imgProduct` varchar(255) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`productName`, `price`, `imgProduct`, `id`) VALUES
('tra sua ', 10000, '20:21:04download.jpeg', 24),
('tra sua ', 10000, '20:19:43download.jpeg', 31);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customerName` varchar(255) DEFAULT NULL,
  `customerAddress` varchar(255) DEFAULT NULL,
  `customerPhone` int(11) DEFAULT NULL,
  `productNumber` int(5) DEFAULT NULL,
  `shopMilkTea_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customerName`, `customerAddress`, `customerPhone`, `productNumber`, `shopMilkTea_id`) VALUES
(12, 'quang', 'bac giang', 355, 2, NULL),
(13, 'quang', 'bac giang', 984383097, 3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `productName` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `shopMilkTea_id` int(11) DEFAULT NULL,
  `imgProduct` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productName`, `price`, `shopMilkTea_id`, `imgProduct`) VALUES
(29, 'tra sua ', 111111, NULL, ''),
(30, 'tra sua ', 22222, NULL, '00:08:05download.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `shopMilkTea`
--

CREATE TABLE `shopMilkTea` (
  `id` int(11) NOT NULL,
  `shopName` varchar(255) DEFAULT NULL,
  `shopAddress` varchar(255) DEFAULT NULL,
  `shopPhone` int(11) DEFAULT NULL,
  `imgShop` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shopMilkTea`
--

INSERT INTO `shopMilkTea` (`id`, `shopName`, `shopAddress`, `shopPhone`, `imgShop`) VALUES
(1, 'Royaltea', 'ha noi', 984383097, NULL),
(2, 'ToCoToCo', 'Ha Noi', 984383097, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders` (`shopMilkTea_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products` (`shopMilkTea_id`);

--
-- Indexes for table `shopMilkTea`
--
ALTER TABLE `shopMilkTea`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `shopMilkTea`
--
ALTER TABLE `shopMilkTea`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`shopMilkTea_id`) REFERENCES `shopMilkTea` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`shopMilkTea_id`) REFERENCES `shopMilkTea` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
