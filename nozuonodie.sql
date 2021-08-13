-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 13, 2021 at 02:43 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nozuonodie`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE IF NOT EXISTS `account` (
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf16;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`email`, `password`) VALUES
('sirayno2@gmail.com', 'siray123'),
('test@gamil.com', '123456'),
('abc@gmail.com', '654321'),
('gg@g.g', 'gggggg'),
('test2@gmail.com', '666666'),
('siray@gmail.com', '111111'),
('test3@gmail.ca', '000000'),
('n@n.n', 'nnnnnn'),
('test48@gmail.com', '000000'),
('test5@gmail.com', '123456'),
('test6@gmail.com', '222222'),
('test7@gmail.com', 'pass123');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `email` varchar(40) CHARACTER SET utf8 NOT NULL,
  `product` varchar(200) CHARACTER SET utf8 NOT NULL,
  `price` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf16;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`email`, `product`, `price`) VALUES
('sirayno2@gmail.com', 'Test Product 3', 880),
('abc@gmail.com', 'Test Product', 1299),
('abc@gmail.com', 'Test Product', 1299),
('abc@gmail.com', 'Test Product 3', 880);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

DROP TABLE IF EXISTS `event`;
CREATE TABLE IF NOT EXISTS `event` (
  `title` varchar(200) CHARACTER SET utf8 NOT NULL,
  `short_info` text CHARACTER SET utf8 NOT NULL,
  `upload_date` varchar(40) CHARACTER SET utf8 NOT NULL,
  `image_url` varchar(200) CHARACTER SET utf8 NOT NULL,
  `image_url2` varchar(200) CHARACTER SET utf8 NOT NULL,
  `image_url3` varchar(200) CHARACTER SET utf8 NOT NULL,
  `image_url4` varchar(200) CHARACTER SET utf8 NOT NULL,
  `image_url5` varchar(200) CHARACTER SET utf8 NOT NULL,
  `image_url6` varchar(200) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf16;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`title`, `short_info`, `upload_date`, `image_url`, `image_url2`, `image_url3`, `image_url4`, `image_url5`, `image_url6`) VALUES
('Congratulations to NPPV & LTOT officially entering the North American market', 'Congratulations, NPPV & LTOT is officially stationed in the North American market starting today!', '2021, 08 02', 'https://i.ibb.co/x84KJR3/news1.png', 'https://i.ibb.co/vJDcyqp/news2.png', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `price` float NOT NULL,
  `image_url` varchar(200) CHARACTER SET utf8 NOT NULL,
  `image_url2` varchar(200) CHARACTER SET utf8 NOT NULL,
  `image_url3` varchar(200) CHARACTER SET utf8 NOT NULL,
  `image_url4` varchar(200) CHARACTER SET utf8 NOT NULL,
  `image_url5` varchar(200) CHARACTER SET utf8 NOT NULL,
  `image_url6` varchar(200) CHARACTER SET utf8 NOT NULL,
  `image_url7` varchar(200) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf16;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`name`, `price`, `image_url`, `image_url2`, `image_url3`, `image_url4`, `image_url5`, `image_url6`, `image_url7`) VALUES
('Test Product', 1299, 'https://i.ibb.co/GMG4z0V/image3.png', 'https://i.ibb.co/7g7cbNV/product1.png', 'https://i.ibb.co/qCLVPnc/product2.png', '', '', '', ''),
('Test Product 2', 680, 'https://i.ibb.co/D71KkWw/image4.png', 'https://i.ibb.co/7g7cbNV/product1.png', 'https://i.ibb.co/qCLVPnc/product2.png', '', '', '', ''),
('Test Product 3', 880, 'https://i.ibb.co/GMG4z0V/image3.png', 'https://i.ibb.co/7g7cbNV/product1.png', 'https://i.ibb.co/qCLVPnc/product2.png', '', '', '', ''),
('Test Product 4', 1680, 'https://i.ibb.co/D71KkWw/image4.png', 'https://i.ibb.co/7g7cbNV/product1.png', 'https://i.ibb.co/qCLVPnc/product2.png', '', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
