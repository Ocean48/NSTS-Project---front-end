-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 11, 2021 at 05:22 PM
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
  `product` varchar(40) CHARACTER SET utf8 NOT NULL,
  `price` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf16;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`email`, `product`, `price`) VALUES
('sirayno2@gmail.com', 'test 2', 22.23),
('sirayno2@gmail.com', 'test1', 100.2),
('sirayno2@gmail.com', 'test 3', 865);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

DROP TABLE IF EXISTS `event`;
CREATE TABLE IF NOT EXISTS `event` (
  `title` varchar(40) CHARACTER SET utf8 NOT NULL,
  `short_info` text CHARACTER SET utf8 NOT NULL,
  `main_description` text CHARACTER SET utf8 NOT NULL,
  `upload_date` varchar(40) CHARACTER SET utf8 NOT NULL,
  `image_url` varchar(200) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf16;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`title`, `short_info`, `main_description`, `upload_date`, `image_url`) VALUES
('first evetn title test', 'short info should only have 100-250 char, it is a short information of the event.\r\nshort info should only have 100-250 char, it is a short information of the event.\r\nshort info should only have 100-250 char, it is a short information of the event.\r\n', 'Apart from counting words and characters, our online editor can help you to improve word choice and writing style, and, optionally, help you to detect grammar mistakes and plagiarism. To check word count, simply place your cursor into the text box above and start typing. You\'ll see the number of characters and words increase or decrease as you type, delete, and edit them. You can also copy and paste text from another program over into the online editor above. The Auto-Save feature will make sure you won\'t lose any changes while editing, even if you leave the site and come back later. Tip: Bookmark this page now.\r\n\r\nKnowing the word count of a text can be important. For example, if an author has to write a minimum or maximum amount of words for an article, essay, report, story, book, paper, you name it. WordCounter will help to make sure its word count reaches a specific requirement or stays within a certain limit.\r\n\r\nIn addition, WordCounter shows you the top 10 keywords and keyword density of the article you\'re writing. This allows you to know which keywords you use how often and at what percentages. This can prevent you from over-using certain words or word combinations and check for best distribution of keywords in your writing.\r\n\r\nIn the Details overview you can see the average speaking and reading time for your text, while Reading Level is an indicator of the education level a person would need in order to understand the words you’re using.\r\n\r\nDisclaimer: We strive to make our tools as accurate as possible but we cannot guarantee it will always be so.', 'Aus. 08, 2021', 'https://i.ibb.co/3S6wCq6/map.png'),
('event without image', 'this is the short info for event without image', 'this is the short info for event without image\r\nthis is the short info for event without image', '', ''),
('event without image', 'this is the short info for event without image', 'this is the short info for event without image\r\nthis is the short info for event without image', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `name` varchar(40) CHARACTER SET utf8 NOT NULL,
  `image_url` varchar(200) CHARACTER SET utf8 NOT NULL,
  `price` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf16;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`name`, `image_url`, `price`) VALUES
('test1', 'https://i.ibb.co/3S6wCq6/map.png', 100.2),
('test 2', 'https://i.ibb.co/zxSMYhB/address.png', 22.23),
('test 3', 'https://i.ibb.co/3S6wCq6/map.png', 865),
('test4', 'https://i.ibb.co/3S6wCq6/map.png', 342.32),
('test 5', 'https://i.ibb.co/3S6wCq6/map.png', 5343.99),
('test 6', 'https://i.ibb.co/3S6wCq6/map.png', 232.29),
('test', 'test', 223.29);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
