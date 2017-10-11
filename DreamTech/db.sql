-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 06, 2017 at 11:29 PM
-- Server version: 5.7.17-log
-- PHP Version: 7.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akshittopiwaladatabase`
--
CREATE DATABASE IF NOT EXISTS `akshittopiwaladatabase` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `akshittopiwaladatabase`;

-- --------------------------------------------------------
-- Create user to query the database--
GRANT SELECT,INSERT,UPDATE,DELETE
ON akshittopiwaladatabase.*
TO akshittopiwala@localhost
IDENTIFIED BY 'akshittopiwalapass';
--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `admin_name`) VALUES
('bryanl_adm', '918c5c410a4c10c5fce74b4ea98cff6e', 'Louis Bryan'),
('Aki_adm', 'dc6a1344cf31d042db7213bfcfa12e40', 'Akshit Topiwala'),
('hitesh_adm', '49b25f3514b418a21d8c8cd6645fc8e3', 'Hitesh Topiwala');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL,
  `brand_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'Adobe'),
(2, 'Microsoft'),
(3, 'Norton'),
(4, 'Apple'),
(5, 'Lenovo');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Antivirus'),
(2, 'Remote Desktop'),
(3, 'Development'),
(4, 'Basic Software'),
(5, 'Video Editing'),
(7, 'Laptops');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE `customers` (
  `customer_id` int(20) NOT NULL,
  `customer_ip` varchar(255) NOT NULL,
  `customer_name` text NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `customer_pass` varchar(100) NOT NULL,
  `customer_country` text NOT NULL,
  `customer_city` text NOT NULL,
  `customer_state` varchar(100) NOT NULL,
  `customer_zip` varchar(100) NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_add` varchar(300) NOT NULL,
  `customer_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_ip`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_state`, `customer_zip`, `customer_contact`, `customer_add`, `customer_image`) VALUES
(2, '::1', 'Akshit Topiwala', 'nextgenaht@yahoo.com', 'dc6a1344cf31d042db7213bfcfa12e40', 'United States', 'Passaic', 'New Jersey', '07055', '2017905910', '89 Gregory ave apt 7', 'order riya.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `trasaction_id` int(255) NOT NULL,
  `order_id` int(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `order_status` text NOT NULL,
  `product_title` text NOT NULL,
  `product_price` int(255) NOT NULL,
  `product_total` varchar(255) NOT NULL,
  `ordered_qty` int(255) NOT NULL,
  `cust_comments` varchar(255) NOT NULL,
  `cust_add` varchar(255) NOT NULL,
  `cust_city` varchar(100) NOT NULL,
  `cust_state` varchar(100) NOT NULL,
  `cust_zip` varchar(255) NOT NULL,
  `cust_country` varchar(100) NOT NULL,
  `product_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`trasaction_id`, `order_id`, `customer_email`, `order_status`, `product_title`, `product_price`, `product_total`, `ordered_qty`, `cust_comments`, `cust_add`, `cust_city`, `cust_state`, `cust_zip`, `cust_country`, `product_image`) VALUES
(18, 12, 'nextgenaht@yahoo.com', 'Processed', 'Microsoft Office Excel', 60, '60', 1, '', '89 Gregory ave apt 7', 'Passaic', 'New Jersey', '07055', 'United States', 'excel.png'),
(18, 13, 'nextgenaht@yahoo.com', 'Processed', 'Adobe After Effects', 230, '690', 3, '', '89 Gregory ave apt 7', 'Passaic', 'New Jersey', '07055', 'United States', 'Aftereffects.png'),
(19, 14, 'nextgenaht@yahoo.com', 'Processed', 'Microsoft Office Excel', 60, '60', 1, 'i Want this to be shipped as gift', '89 Gregory ave apt 7', 'Passaic', 'New Jersey', '07055', 'United States', 'excel.png'),
(19, 15, 'nextgenaht@yahoo.com', 'Processed', 'Adobe After Effects', 230, '230', 1, 'i Want this to be shipped as gift', '89 Gregory ave apt 7', 'Passaic', 'New Jersey', '07055', 'United States', 'Aftereffects.png');

-- --------------------------------------------------------

--
-- Table structure for table `ordersarchive`
--

DROP TABLE IF EXISTS `ordersarchive`;
CREATE TABLE `ordersarchive` (
  `trasaction_id` int(255) NOT NULL,
  `order_id` int(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `order_status` text NOT NULL,
  `product_title` text NOT NULL,
  `product_price` int(255) NOT NULL,
  `product_total` varchar(255) NOT NULL,
  `ordered_qty` int(255) NOT NULL,
  `cust_comments` varchar(255) NOT NULL,
  `cust_add` varchar(255) NOT NULL,
  `cust_city` varchar(100) NOT NULL,
  `cust_state` varchar(100) NOT NULL,
  `cust_zip` varchar(255) NOT NULL,
  `cust_country` varchar(100) NOT NULL,
  `product_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ordersarchive`
--

INSERT INTO `ordersarchive` (`trasaction_id`, `order_id`, `customer_email`, `order_status`, `product_title`, `product_price`, `product_total`, `ordered_qty`, `cust_comments`, `cust_add`, `cust_city`, `cust_state`, `cust_zip`, `cust_country`, `product_image`) VALUES
(17, 10, 'nextgenaht@yahoo.com', 'Shipped', 'Microsoft Office Excel', 60, '60', 1, '', '89 Gregory ave apt 7', 'Passaic', 'New Jersey', '07055', 'United States', 'excel.png');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES
(2, 4, 2, 'Microsoft Office Excel', 60, 'Microsoft Excel 2010 makes it possible to analyze, manage, and share information in more ways than ever before, helping you make better, smarter decisions.', 'excel.png', 'Excel, 2010, Microsoft, Office, word'),
(3, 5, 1, 'Adobe After Effects', 230, 'Create incredible motion graphics and visual effects.\r\nThe industry-standard animation and creative compositing app lets you design and deliver professional motion graphics and visual effects for film, TV, video, and web.', 'Aftereffects.png', 'After Effects');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE `transactions` (
  `trasaction_id` int(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_ip` varchar(255) NOT NULL,
  `transaction_date` varchar(100) NOT NULL,
  `method_pay` text NOT NULL,
  `total_qty` int(255) NOT NULL,
  `total_price` text NOT NULL,
  `cust_add` varchar(255) NOT NULL,
  `cust_city` varchar(100) NOT NULL,
  `cust_state` varchar(255) NOT NULL,
  `cust_zip` varchar(100) NOT NULL,
  `cust_country` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`trasaction_id`, `customer_email`, `customer_ip`, `transaction_date`, `method_pay`, `total_qty`, `total_price`, `cust_add`, `cust_city`, `cust_state`, `cust_zip`, `cust_country`) VALUES
(17, 'nextgenaht@yahoo.com', '::1', 'Saturday 6th May 2017 04:39:51 AM', 'paypal', 8, '1670', '89 Gregory ave apt 7', 'Passaic', 'New Jersey', '07055', 'United States'),
(18, 'nextgenaht@yahoo.com', '::1', 'Saturday 6th May 2017 08:30:09 PM', 'paypal', 4, '750', '89 Gregory ave apt 7', 'Passaic', 'New Jersey', '07055', 'United States'),
(19, 'nextgenaht@yahoo.com', '::1', 'Saturday 6th May 2017 09:38:49 PM', 'paypal', 2, '290', '89 Gregory ave apt 7', 'Passaic', 'New Jersey', '07055', 'United States');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `ordersarchive`
--
ALTER TABLE `ordersarchive`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`trasaction_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `ordersarchive`
--
ALTER TABLE `ordersarchive`
  MODIFY `order_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `trasaction_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
