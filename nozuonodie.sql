-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 08, 2021 at 10:18 PM
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
('', ''),
('lol@lol.lol', '888888'),
('test2@gmail.com', '333333'),
('lol@lol.lol', '222222'),
('siray@gmail.com', '111111'),
('test3@gmail.ca', '000000');

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
  `info` text CHARACTER SET utf8 NOT NULL,
  `price` float NOT NULL,
  `chart_url` varchar(200) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf16;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`name`, `image_url`, `info`, `price`, `chart_url`) VALUES
('test1', 'https://i.ibb.co/3S6wCq6/map.png', '谁可以来加拿大旅游：Effective August 9: American citizens and permanent residents of the United States, who currently reside in the United States, who meet specific criteria to qualify as fully vaccinated. September 7 (intended start date): All other foreign nationals who qualify as fully vaccinated. The 3-night hotel stopover requirement will be eliminated for all travellers arriving by air after 12:01 A.M. EDT on August 9.(加拿大永久公民， 加拿大公民直系亲属， 外交人员， 航空公司工作人员和美国公民)\r\n加拿大公共卫生署的新型冠状病毒肺炎咨询热线1-833-784-4397，邮箱phac.info.aspc@canada.ca\r\n航空公司\r\n点击此处了解加拿大航空公司（和加航Rouge）对新型冠状病毒肺炎的应对措施。\r\n点击此处了解西捷航空对新型冠状病毒肺炎的应对措施。\r\n点击此处了解越洋航空对新型冠状病毒肺炎的应对措施。\r\n      -    点击此处了解Swoop航空对新型冠状病毒肺炎的应对措施。\r\n     -     点击此处了解波特航空对新型冠状病毒肺炎的应对措施。\r\n新冠疫情对于加拿大经济的影响（我自己想的）：\r\n', 100.2, 'https://i.ibb.co/3S6wCq6/map.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
