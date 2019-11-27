-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2019 at 08:36 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `motostore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `mobile`, `password`) VALUES
(1, 'Bharat Kumar', 'bharat.bkj01@gmail.com', '9934123737', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `admin_activity_log`
--

CREATE TABLE `admin_activity_log` (
  `id` int(11) NOT NULL,
  `activity_by` int(11) NOT NULL,
  `title` text NOT NULL,
  `codes` int(11) NOT NULL,
  `activity_id` int(11) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_activity_log`
--

INSERT INTO `admin_activity_log` (`id`, `activity_by`, `title`, `codes`, `activity_id`, `created`) VALUES
(1, 1, 'New Brand Inserted', 3, 1, '2019-10-21 16:19:47'),
(2, 1, 'New Brand Inserted', 3, 2, '2019-10-21 16:20:13'),
(3, 1, 'Category Inserted', 1, 1, '2019-10-21 16:21:48'),
(4, 1, 'Sub Category Inserted', 2, 1, '2019-10-21 16:23:38'),
(5, 1, 'Sub Category Inserted', 2, 2, '2019-10-21 16:24:39'),
(6, 1, 'Category Inserted', 1, 2, '2019-10-21 16:26:57'),
(7, 1, 'Sub Category Inserted', 2, 3, '2019-10-21 16:27:11'),
(8, 1, 'Sub Category Inserted', 2, 4, '2019-10-21 16:27:21'),
(9, 1, 'Attribute Inserted', 4, 1, '2019-10-21 16:27:40'),
(10, 1, 'Attribute Value Inserted', 5, 1, '2019-10-21 16:28:12'),
(11, 1, 'Attribute Value Inserted', 5, 1, '2019-10-21 16:28:28'),
(12, 1, 'Attribute Value Inserted', 5, 1, '2019-10-21 16:28:48'),
(13, 1, 'Attribute Inserted', 4, 1, '2019-10-21 16:29:00'),
(14, 1, 'Attribute Value Inserted', 5, 1, '2019-10-21 16:29:16'),
(15, 1, 'Attribute Value Inserted', 5, 1, '2019-10-21 16:29:50'),
(16, 1, 'Attribute Value Inserted', 5, 1, '2019-10-21 16:30:06'),
(17, 1, 'Attribute Value Inserted', 5, 1, '2019-10-30 15:42:36'),
(18, 1, 'Category Inserted', 1, 3, '2019-11-01 15:22:50'),
(19, 1, 'Sub Category Inserted', 2, 5, '2019-11-01 15:23:14'),
(20, 1, 'Sub Category Inserted', 2, 6, '2019-11-01 15:23:25'),
(21, 1, 'Pin Updated', 6, 1, '2019-11-06 16:00:06'),
(22, 1, 'Pin Updated', 6, 1, '2019-11-08 13:11:12'),
(23, 1, 'Category Inserted', 1, 4, '2019-11-11 14:47:39'),
(24, 1, 'Category Updated', 1, 1, '2019-11-11 14:50:42'),
(25, 1, 'Category Inserted', 1, 5, '2019-11-11 14:51:05'),
(26, 1, 'Brand Updated', 1, 1, '2019-11-18 11:45:23'),
(27, 1, 'Brand Updated', 1, 1, '2019-11-18 11:45:33'),
(28, 1, 'Attribute Value Inserted', 5, 1, '2019-11-18 12:18:48'),
(29, 1, 'New Brand Inserted', 6, 1, '2019-11-18 12:22:03'),
(30, 1, 'Pin Updated', 6, 1, '2019-11-18 12:23:35'),
(31, 1, 'Category Inserted', 1, 4, '2019-11-18 17:15:32'),
(32, 1, 'Category Inserted', 1, 5, '2019-11-18 17:25:44'),
(33, 1, 'New Brand Inserted', 6, 1, '2019-11-18 17:26:20'),
(34, 1, 'New Brand Inserted', 6, 1, '2019-11-18 17:26:32'),
(35, 1, 'Category Inserted', 1, 6, '2019-11-19 17:10:07'),
(36, 1, 'Sub Category Inserted', 2, 7, '2019-11-19 17:39:49'),
(37, 1, 'Sub Category Inserted', 2, 8, '2019-11-19 17:39:57'),
(38, 1, 'Sub Category Inserted', 2, 9, '2019-11-19 17:40:06'),
(39, 1, 'Sub Category Inserted', 2, 10, '2019-11-19 17:40:14'),
(40, 1, 'Sub Category Inserted', 2, 11, '2019-11-19 17:40:23'),
(41, 1, 'Category Inserted', 1, 7, '2019-11-20 12:16:55'),
(42, 1, 'Category Updated', 2, 1, '2019-11-20 12:18:07'),
(43, 1, 'Category Updated', 2, 1, '2019-11-20 12:18:18'),
(44, 1, 'Category Updated', 2, 1, '2019-11-20 12:18:42'),
(45, 1, 'Category Updated', 2, 1, '2019-11-20 12:19:02'),
(46, 1, 'Category Updated', 2, 1, '2019-11-20 12:19:23'),
(47, 1, 'Brand Updated', 1, 1, '2019-11-20 12:20:03'),
(48, 1, 'Category Updated', 1, 1, '2019-11-20 12:24:41'),
(49, 1, 'Sub Category Inserted', 2, 12, '2019-11-20 12:25:23'),
(50, 1, 'Sub Category Inserted', 2, 13, '2019-11-20 12:25:38'),
(51, 1, 'Sub Category Inserted', 2, 14, '2019-11-20 12:25:49'),
(52, 1, 'Sub Category Inserted', 2, 15, '2019-11-20 12:26:01'),
(53, 1, 'Sub Category Inserted', 2, 16, '2019-11-20 12:26:12'),
(54, 1, 'Category Updated', 1, 1, '2019-11-20 12:27:14'),
(55, 1, 'New Brand Inserted', 3, 3, '2019-11-20 18:43:28'),
(56, 1, 'Category Updated', 1, 1, '2019-11-22 14:46:08'),
(57, 1, 'Category Updated', 1, 1, '2019-11-22 14:46:18'),
(58, 1, 'Category Inserted', 1, 8, '2019-11-22 15:03:54'),
(59, 1, 'Sub Category Inserted', 2, 17, '2019-11-22 15:04:46'),
(60, 1, 'Sub Category Inserted', 2, 18, '2019-11-22 15:04:59'),
(61, 1, 'Sub Category Inserted', 2, 19, '2019-11-22 15:05:11'),
(62, 1, 'Sub Category Inserted', 2, 20, '2019-11-22 15:05:30'),
(63, 1, 'Sub Category Inserted', 2, 21, '2019-11-22 15:05:51'),
(64, 1, 'Category Inserted', 1, 9, '2019-11-22 15:10:29'),
(65, 1, 'Category Inserted', 1, 10, '2019-11-22 15:10:38');

-- --------------------------------------------------------

--
-- Table structure for table `attribute`
--

CREATE TABLE `attribute` (
  `id` int(11) NOT NULL,
  `attribute` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `created_by` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attribute`
--

INSERT INTO `attribute` (`id`, `attribute`, `description`, `status`, `created`, `created_by`, `updated`) VALUES
(1, 'Color', '', 1, '2019-10-21 16:27:40', '0000-00-00 00:00:00', '2019-10-21 16:27:40'),
(2, 'Size', '', 1, '2019-10-21 16:29:00', '0000-00-00 00:00:00', '2019-10-21 16:29:00');

-- --------------------------------------------------------

--
-- Table structure for table `attribute_value`
--

CREATE TABLE `attribute_value` (
  `id` int(11) NOT NULL,
  `attribute_id` int(11) NOT NULL,
  `value_name` varchar(100) NOT NULL,
  `codes` varchar(20) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `deleted` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attribute_value`
--

INSERT INTO `attribute_value` (`id`, `attribute_id`, `value_name`, `codes`, `slug`, `status`, `created`, `deleted`, `description`) VALUES
(1, 1, 'Red', '#FF2D00', 'Dull Red', 1, '2019-10-21 16:28:12', 0, ' desc'),
(2, 1, 'Black', '#000000', 'Pure Black', 1, '2019-10-21 16:28:28', 0, ' '),
(3, 1, 'White', '#ffffff', 'Slug here', 1, '2019-10-21 16:28:48', 0, ' description here'),
(4, 2, 'L', '', 'Large', 1, '2019-10-21 16:29:16', 0, 'desc'),
(5, 2, 'M', '', 'Medium', 1, '2019-10-21 16:29:50', 0, ' desc'),
(6, 2, 'XL', '', 'Extra Large', 1, '2019-10-21 16:30:06', 0, ' desc'),
(7, 1, 'ss', '#e66465', '', 1, '2019-11-18 12:18:48', 0, ' ');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `brand`, `status`, `created`, `updated`, `updated_by`) VALUES
(1, 'Steelbird', 1, '2019-10-21 16:19:47', '2019-10-21 16:19:47', 1),
(2, 'Studds ', 1, '2019-10-21 16:20:13', '2019-10-21 16:20:13', 1),
(3, 'Puma', 0, '2019-11-20 18:43:28', '2019-11-20 18:43:28', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cafe_event`
--

CREATE TABLE `cafe_event` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `place` varchar(110) NOT NULL,
  `description` text NOT NULL,
  `images` varchar(200) NOT NULL,
  `eventdate` datetime NOT NULL,
  `created` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cafe_event`
--

INSERT INTO `cafe_event` (`id`, `name`, `place`, `description`, `images`, `eventdate`, `created`, `status`) VALUES
(5, 'DD#9: Cultural Resources', 'Banglore', 'Design Dialogues at The Courtyard invites you to a public debate on the current state of capacity development initiatives: contribution of independent practitioners versus the benefits of institutional setups. If community engagement has been a platform for creative explorations and cultural impact-making, the tool to such possibilities would be the exchange of resources and capacities. But have we pondered further about the nature of these mechanisms: Do these frameworks have a neutral voice? Where does the ownership lie? Are these initiatives self-sustainable?Through the experiences of a few guest speakers from diverse disciplines, this dialogue intends to anchor a discourse around relevance of capacity development initiatives and ethics of community engagement.\r\n', '5dde13204e1b8.jpg', '2019-12-30 13:58:00', '2019-11-27 11:39:36', 1),
(6, 'Open Mic', 'Banglore', 'The Courtyard Open Mic is back! 24th Nov | Sunday | 6pm FREE WALK IN ENTRY Language no bar Age no bar Genre of performance no bar See you there!\r\n\r\n', '5dde18cfd7dd5.jpg', '2019-11-29 16:30:00', '2019-11-27 12:03:51', 1),
(7, 'Movie Under the Stars - Nightmare Before Christmas', 'Banglore', 'Nightmare Before Christmas 23rd November | 7 PM onwardsTickets on Insider and at the Venue.Bored with the same old scare-and-scream routine, Pumpkin King Jack Skellington longs to spread the joy of Christmas. But his merry mission puts Santa in jeopardy and creates a nightmare for good little boys and girls everywhere!It was nominated for an Academy Award for Best Visual Effects, a first for an animated film.', '5dde1921b0b96.png', '2019-11-28 15:55:00', '2019-11-27 12:05:13', 1),
(8, 'Stories from Cameras - I Dream in Another Language', 'Mysuru', 'I Dream in Another Language | Directed by Ernesto Contreras | Mexico | 103 minutes | 2017 An indigenous language is in peril, as its last two speakers had a quarrel in the past and haven\'t spoken to each other in over 50 years. Martín, a young linguist, will undertake the challenge of bringing the old friends back together and convincing them to speak once again so he can obtain a recorded registration of the language and study it.\r\n\r\n', '5dde19a073fe8.png', '2019-12-11 17:00:00', '2019-11-27 12:07:20', 1),
(9, 'Quiz Night at The Courtyard - TV Quiz', 'Mysuru', 'QUIZ NIGHT AT THE COURTYARD ON NOVEMBER 13 (WEDNESDAY) Join us for edition 11 of Quiz Night at The Courtyard (in association with the KQA) on November 13 (Wednesday) at 8 PM. Manish, Rajat and Santosh return to conduct another season of the TV quiz - be content with Content with a quiz on all things television (note: no essay type qs on soldering capacitors to circuit boards or anything), whether Peak TV or pique TV. Come for the questions, stay for the recommendations. A quiz for teams of two. The quiz is open to all\r\n\r\n', '5dde19e2b4a3e.png', '2019-11-30 16:58:00', '2019-11-27 12:08:26', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cafe_gallery`
--

CREATE TABLE `cafe_gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `images` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cafe_gallery`
--

INSERT INTO `cafe_gallery` (`id`, `title`, `images`, `status`, `created`) VALUES
(3, 'Studio', '5dde1afd9c453.jpg', 1, '2019-11-27 12:13:09'),
(4, 'Courtyard', '5dde1b0ab78d9.png', 1, '2019-11-27 12:13:22'),
(5, 'Rooftop', '5dde1b160482d.png', 1, '2019-11-27 12:13:34'),
(6, 'BnB', '5dde1b2625350.png', 1, '2019-11-27 12:13:50'),
(7, 'The cafe', '5dde1b40e8a65.png', 1, '2019-11-27 12:14:16');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`, `status`, `created`, `updated_by`, `updated`) VALUES
(1, 'HELMETS', 1, '2019-11-20 12:16:55', 1, '2019-11-20 12:16:55'),
(7, 'RIDING GEAR', 1, '2019-10-21 16:21:48', 1, '2019-10-21 16:21:48'),
(8, 'LUGGAGE', 1, '2019-11-22 15:03:54', 1, '2019-11-22 15:03:54');

-- --------------------------------------------------------

--
-- Table structure for table `deliveryaddress`
--

CREATE TABLE `deliveryaddress` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `city` varchar(50) NOT NULL,
  `postcode` int(7) NOT NULL,
  `streetaddress` text NOT NULL,
  `streetaddress1` text NOT NULL,
  `profiledata` int(11) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deliveryaddress`
--

INSERT INTO `deliveryaddress` (`id`, `userid`, `name`, `mobile`, `city`, `postcode`, `streetaddress`, `streetaddress1`, `profiledata`, `created`) VALUES
(6, 21, '', '', '', 0, '', '', 0, '2019-11-20 15:21:30'),
(9, 23, '', '', '', 0, '', '', 0, '2019-11-20 19:29:34'),
(10, 25, '', '', '', 0, '', '', 0, '2019-11-22 12:33:51'),
(14, 7, 'Bharat Kumar', '9934123737', 'Patna', 800001, ' Dak Bunglow, Fraser Rd', '216 & 217, 2nd Floor, Grand Plaza', 0, '0000-00-00 00:00:00'),
(18, 41, 'Ali', '6546335345', 'bangalore', 654654, 'st jayanagar11', '101 Apartment next to sobha bolivad', 0, '0000-00-00 00:00:00'),
(22, 6, 'Testing', '9798777779', 'bengalure', 876543, 'kjhdf liuhrtdfg hoigfcklbdgshjdfdjjjjjjjjjjjjjjjjjjjjjjj jjjjjjjjjjjjjjjjjjjjjjjjjjjjj jjjjjjjjjjjjjjjjjjjjjjjjjj jjjjjjjjjjjjjjjjjjjjj jjjjjjjjjjjjjjjjjjjj jjjjjjjjjjjjjjjjjjjj jjjjjjjjjjjjjjjjjjjjj jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjaj', 'kjhdf liuhrtdfg hoigfcklbdgshjdfdjjjjjjjjjjjjjjjjjjjjjjj jjjjjjjjjjjjjjjjjjjjjjjjjjjjj jjjjjjjjjjjjjjjjjjjjjjjjjj jjjjjjjjjjjjjjjjjjjjj jjjjjjjjjjjjjjjjjjjj jjjjjjjjjjjjjjjjjjjj jjjjjjjjjjjjjjjjjjjjj jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjaj', 0, '0000-00-00 00:00:00'),
(23, 6, 'product 1', '9798777779', 'Patnaa', 876543, 'WWW', 'WW', 0, '0000-00-00 00:00:00'),
(25, 2, 'pooja', '9876453212', 'bengalure', 876543, 'WWW', 'kjhdf liuhrtdfg hoigfcklbdgshjdfdjjjjjjjjjjjjjjjjjjjjjjj jjjjjjjjjjjjjjjjjjjjjjjjjjjjj jjjjjjjjjjjjjjjjjjjjjjjjjj jjjjjjjjjjjjjjjjjjjjj jjjjjjjjjjjjjjjjjjjj jjjjjjjjjjjjjjjjjjjj jjjjjjjjjjjjjjjjjjjjj jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjaj', 0, '0000-00-00 00:00:00'),
(27, 2, 'Testing', '9798777779', 'bengalure', 876543, 'WWW', 'WW', 0, '0000-00-00 00:00:00'),
(30, 12, 'aa ss', '9999999999', '', 999999, '11', 'aaa', 0, '0000-00-00 00:00:00'),
(31, 14, 'ertyhrty', '7567635734', 'ertyertyerty', 345634, 'ertyertyer', 'tyertyertyerty', 0, '2019-11-25 18:20:07'),
(32, 15, 'kjhgfohuas', '9827364927', 'aksjdfhlj', 987984, 'akjsdhflkjahlk', 'ajshdfkjhdf', 0, '2019-11-25 18:21:59'),
(33, 15, 'm m', '9999999999', 'asas', 111111, 'aaa', 'qqq', 0, '0000-00-00 00:00:00'),
(34, 16, 'ABHI', '9999988888', 'aaa', 999000, '11', 'aasd', 0, '2019-11-25 19:01:03'),
(35, 17, 'retyerty', '8956846784', 'ertyerty', 347634, 'ertyerty', 'ertyerty', 0, '2019-11-25 19:13:13'),
(36, 18, 'retyerty', '8956846785', 'ertyerty', 347634, 'ertyerty', 'ertyerty', 0, '2019-11-25 19:13:58'),
(37, 19, 'retyerty', '8956846788', 'ertyerty', 347634, 'ertyerty', 'ertyerty', 0, '2019-11-25 19:15:47'),
(38, 20, 'retyerty', '7657363457', 'ertyerty', 347634, 'ertyerty', 'ertyerty', 0, '2019-11-25 19:16:20'),
(39, 21, 'retyerty', '9874576894', 'ertyerty', 347634, 'ertyerty', 'ertyerty', 0, '2019-11-25 19:17:14'),
(40, 22, 'hjkghjkghjk', '7856785678', 'ghjkghjkghjk', 485678, 'ghkghjk', 'ghkghkghjk', 0, '2019-11-25 19:18:33'),
(41, 23, 'hjkghjkghjk', '9578957689', 'ghjkghjkghjk', 485678, 'ghkghjk', 'ghkghkghjk', 0, '2019-11-25 19:19:35'),
(42, 24, 'yuityuityui', '5786785678', 'tyuityuityui', 678456, 'tyuiyuityui', 'tyuityuityui', 0, '2019-11-25 19:21:32'),
(43, 25, 'tryrfthdfghfgh', '7565767676', 'fghfghfgh', 567356, 'fghfghfgh', 'fhfghfgh', 0, '2019-11-25 19:25:21'),
(44, 27, 'sdfgsdg', '8865785678', 'ertyertyerty', 956789, 'ertyerty', 'ertyerty', 0, '2019-11-25 19:40:04'),
(45, 28, 'frghdfhdfg', '7856784568', 'dfhjfghjdf', 764567, 'dfhjdfhjdfgh', 'dfghdfghdfgh', 0, '2019-11-25 19:41:49'),
(46, 29, 'fdgdg', '9999999999', 'bvcbvcb', 564646, 'vcbvcb', 'cvbcvb', 0, '2019-11-25 19:46:24'),
(47, 30, 'rtytryty', '8888888888', 'rtyrty', 456465, 'rtytry', 'rtyrtyrty', 0, '2019-11-25 19:51:10'),
(48, 31, 'aaa', '9888888888', 'ghgfhfgh', 564565, 'fghfh', 'dfhgdfh', 0, '2019-11-25 19:58:09'),
(50, 32, 'ghdfghdfgh', '8465687456', 'dfhdfghdfgh', 764645, 'dfghdfghdfgh', 'dfhdfghdfgh', 0, '2019-11-25 20:28:01'),
(51, 33, 'gfrhdfghdfgh', '7567345764', 'dfhdfghdf', 457645, 'ghdfhdfgh', 'dfhdfghd', 0, '2019-11-25 20:29:51'),
(52, 35, 'Akanksha', '8149494969', 'bengaluru', 876543, 'Gangothri circle', 'Gangothri circle', 0, '2019-11-25 20:36:05'),
(53, 37, 'Testing', '6545678777', 'bengaluru', 987654, 'Gangothri circle', 'Gangothri circle', 0, '2019-11-25 21:11:18'),
(54, 36, 'Pankaja', '8763212356', 'bengaluru', 765432, 'Gangothri circle', 'Gangothri circle', 0, '0000-00-00 00:00:00'),
(55, 38, 'sdffsd', '9856567567', 'sdfsdf', 453533, 'sdfdsfds', 'dfdsfds', 0, '2019-11-25 21:21:06'),
(66, 17, 'Bharat Kumar', '8956846784', 'Banglor', 347634, 'BTM Layout', 'Gangothri Circle', 1, '0000-00-00 00:00:00'),
(67, 39, 'Aishwarya', '9876543234', 'bengaluru', 987654, 'Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle ', 'Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle ', 1, '0000-00-00 00:00:00'),
(68, 39, 'Testing', '9876543234', 'bengaluru', 761236, 'Gangothri circle', 'Gangothri circle', 0, '0000-00-00 00:00:00'),
(69, 40, 'Testing', '7654323456', 'bengaluru', 761236, 'Gangothri circle', 'Gangothri circle', 0, '2019-11-26 16:59:23'),
(70, 41, 'as', '9876543098', 'aa', 999999, '11', '111', 0, '2019-11-26 18:19:16');

-- --------------------------------------------------------

--
-- Table structure for table `home_tiles`
--

CREATE TABLE `home_tiles` (
  `id` int(11) NOT NULL,
  `tiles_name` varchar(100) NOT NULL,
  `url` text NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_tiles`
--

INSERT INTO `home_tiles` (`id`, `tiles_name`, `url`, `price`, `image`) VALUES
(10, 'Riding gears', '7', '', '5dd66a8e6df6a.jpg'),
(11, 'Helmet', '1', '', '5dd66ff1d823d.png'),
(12, 'Shoes', '1', '', '5dd69ebb1af1f.jpg'),
(13, 'Shoes', '1', '', '5dd69eeba3da9.png'),
(15, 'Shoes', '1', '2000', '5dd6a53e1d3a3.jpg'),
(16, 'Riding gears', 'http://192.168.0.132/motostore/product/lists/VFZFOVBRPT0=/Helmet', '1230', '5dd786a6caca4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pin`
--

CREATE TABLE `pin` (
  `id` int(11) NOT NULL,
  `pin` int(11) NOT NULL,
  `place` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `updated_by` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pin`
--

INSERT INTO `pin` (`id`, `pin`, `place`, `status`, `created`, `updated`, `updated_by`) VALUES
(1, 802214, 'bikramganj', 1, '0000-00-00 00:00:00', '2019-11-06 15:59:22', '0000-00-00 00:00:00'),
(2, 802213, 'Dinara', 0, '0000-00-00 00:00:00', '2019-11-06 15:59:22', '0000-00-00 00:00:00'),
(6, 802212, 'bikramganj', 0, '0000-00-00 00:00:00', '2019-11-13 17:22:33', '0000-00-00 00:00:00'),
(7, 802218, 'saraon', 1, '0000-00-00 00:00:00', '2019-11-13 17:22:33', '0000-00-00 00:00:00'),
(8, 0, '', 0, '2019-11-18 12:22:03', '2019-11-18 12:22:03', '0000-00-00 00:00:00'),
(9, 0, '', 0, '2019-11-18 17:26:20', '2019-11-18 17:26:20', '0000-00-00 00:00:00'),
(10, 0, '', 0, '2019-11-18 17:26:32', '2019-11-18 17:26:32', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `pincode`
--

CREATE TABLE `pincode` (
  `id` int(11) NOT NULL,
  `Place` varchar(200) NOT NULL,
  `pin` int(11) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `commonid` varchar(29) NOT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `subcat_id` int(11) DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `product` varchar(100) DEFAULT NULL,
  `photo` varchar(200) NOT NULL,
  `productcode` varchar(100) NOT NULL,
  `producttype` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `description` text,
  `created` datetime NOT NULL,
  `update_by` int(11) NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `commonid`, `cat_id`, `subcat_id`, `brand_id`, `product`, `photo`, `productcode`, `producttype`, `gender`, `status`, `description`, `created`, `update_by`, `updated`) VALUES
(1, '5dad93167f8e8', 1, 1, 1, 'Steelbird SBA-1 mahavir Painted Motorbike Helmet  ', '1.jpeg', 'SKU0056', '1', 'Male', 0, '                                                                        <ol><li><b>&nbsp;High Impact ABS Material Shell.</b></li><li> 2. Multi layer EPS (Thermocol) </li><li>3. High Density and low density for more Safety with Air Channels. </li><li>4. Micro-Metric Buckle meeting European Standards.</li><li> 5. The ventilation of the helmet\'s upper part uses the \"Air Booster\" system</li></ol><h3><b style=\"color: inherit;\">Material</b><br></h3><p><style type=\"text/css\"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}--></style><span style=\"font-size: 11pt; font-family: Calibri, Arial;\" data-sheets-value=\"{\" 1\":2,\"2\":\"components:\\n•=\"\" 88%=\"\" polyester,=\"\" 12%=\"\" elastane.\\nmaterials:\\n•=\"\" high-density=\"\" polyester.\\n•=\"\" mesh=\"\" inserts=\"\" in=\"\" the=\"\" armpit=\"\" and=\"\" kidney=\"\" areas.\"}\"=\"\" data-sheets-userformat=\"{\" 2\":10241,\"3\":{\"1\":0,\"3\":1},\"14\":{\"1\":3,\"3\":1},\"16\":11}\"=\"\">COMPONENTS:<br>• 88% polyester, 12% elastane.<br>MATERIALS:<br>• High-density polyester.<br>• Mesh inserts in the armpit and kidney areas.</span><br></p>                                                            ', '2019-10-21 18:24:42', 1, '2019-10-21 18:24:42'),
(2, '5db12d1e46d2c', 2, 4, 2, 'Studds Ninja Pastel Plain Motorsports Helmet  ', '2.jpeg', 'SKM325', '2', 'Male', 1, 'When you are riding at high speed in a race, the chances of head injury are high. Hence, it is advisable that you give your head the right protection by using this Studds Ninja Helmet.\r\nFull-face Helmet\r\nThe higher the possibility of danger, the better prepared you should be. A full-face helmet like this gives complete protection to your head and neck.\r\nThermoplastic Outer Shell\r\nThe flexibility of thermoplastic ensures that the shell endures impact without getting cracked. It is highly durable\r\nEPS Padding\r\nThis padding ensures that your helmet stays put on your head and also cushions your head against jerks.\r\nDynamic Ventilation\r\nThis system allows adequate air-flow around your head, keeping it cool.', '2019-10-24 10:21:47', 1, '2019-10-24 10:21:47'),
(3, '5db2a082412a0', 1, 2, 1, 'Steelbird Adonis Majestic Motorbike Helmet \r\n', '3.jpeg', '', '1', 'Female', 1, '1-Sheel Material-Hi Impact-ABS2-Helmet Full Face3-Hygienic Interior with breathable padding4-Quick Release Micro Metric Buckle5-High-Density EPS(Thermocol for safety6-Italian Design7-Designer Graphic8-Polycarbonate Visor With Hard Coated', '2019-10-25 12:45:48', 1, '2019-10-25 12:45:48'),
(4, '5db9156f53fb7', 1, 2, 2, 'Studds Thunder D1 N1 C/L Motorbike Helmet  \r\n', '4.jpeg', '', '2', 'Female', 1, '', '2019-10-30 10:19:00', 1, '2019-10-30 10:19:00'),
(5, '5dba6458b992e', 1, 2, 2, 'Studds Shifter D5 N5 Motorbike Helmet  (Black)', '5.jpeg', '', '1', 'Female', 1, 'Low rating for the Seller but the Product gets a Good rating.\r\n\r\nI received a different color (matt white & black) but happy since I actually wanted that color but was not available online. Therefore did not return it. Also I had to assemble the the Sun Shield as it came dismantled in the box, also one of the\r\nThis is my second Shifter helmet, replaced the first one as it was involved in a crash.\r\nPROS: The Studds Shifter helmet has got the Basics Right', '2019-10-31 10:08:46', 1, '2019-10-31 10:08:46'),
(6, '5dba659be6dbb', 1, 2, 2, 'Studds Shifter D7 N10 Motorbike Helmet  ', '6.jpeg', '', '2', 'Male', 1, 'STUDDS ACCESSORIES LIMITED,Regd. Office : 23/7 , Mathura Road, Ballabgarh , Faridabad - 121004, Haryana (INDIA)', '2019-10-31 10:28:46', 1, '2019-10-31 10:28:46'),
(7, '5dba6a68da3bf', 1, 2, 1, 'STEELBIRD jetstar D8 Built Motorbike Helmet  ', '7.jpeg', '', '2', 'Male', 1, 'What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2019-10-31 10:34:12', 1, '2019-10-31 10:34:12'),
(9, '5dbc1eac787bf', 2, 4, 2, 'VEGA Off Road D/V Motorsports Helmet', '9.jpeg', '', '2', 'Male', 1, 'Scratch Resistant Visor\r\n\r\nMade of superior quality materials, this Off Road Motorsports Helmet from Vega with a scratch resistant visor is easy to maintain and ensures that you get a clear and unobstructed view.\r\nTraction Plates on Sides\r\nThe traction plates on the side help in holding your goggles securely in place.\r\nDual Port Exhaust Vents\r\nThe exhaust vents flush out heat and humidity and provide excellent ventilation to keep you cool at all times.\r\nComfort Provided Using Advanced CAD Technology\r\nThe CAD technology offers a soft and comfortable fit and helps in effectively absorbing shock and impact.\r\nBuilt-in Goggles\r\nThe built-in goggles protect your eyes from the harmful UV radiation of the sun and dust particles.', '2019-11-01 17:46:48', 1, '2019-11-01 17:46:48'),
(10, '5dbd2afedc585', 2, 3, 1, 'VEGA Off Road D/V Motorsports Helmet ', '10.jpeg', '', '1', 'Male', 1, '                                                                                                                                                                                                                                                                                                                                                                        <b>                                                Scratch<span style=\"background-color: rgb(255, 0, 0);\"><font color=\"#ffffff\"> </font></span></b><span style=\"background-color: rgb(255, 0, 0);\"><font color=\"#ffffff\">Resistant</font></span> <font color=\"#ffffff\"><span style=\"background-color: rgb(0, 0, 255);\">Visor</span>\r\n</font>\r\nMade of superior quality materials, this Off Road Motorsports Helmet from Vega with a scratch resistant visor is easy to maintain and ensures that you get a clear and unobstructed view.\r\n\r\nTraction Plates on Sides\r\nThe traction plates on the side help in holding your goggles securely in place.\r\nDual Port Exhaust Vents\r\n\r\nThe exhaust vents flush out heat and humidity and provide excellent ventilation to keep you cool at all times.\r\nComfort Provided Using Advanced CAD Technology\r\n\r\nThe CAD technology offers a soft and comfortable fit and helps in effectively absorbing shock and impact.\r\nBuilt-in Goggles\r\nThe built-in goggles protect your eyes from the harmful UV radiation of the sun and dust particles.                                                                                                                                                                                                                                                                                                                                                    ', '2019-11-02 12:43:42', 1, '2019-11-02 12:43:42'),
(11, '5dc3e13f5846e', 2, 3, 2, 'VEGA Crux DX Camouflage Motorbike Helmet  \r\n', '11.jpeg', '', '1', 'Male', 1, 'Bank Offer5% Unlimited Cashback on Flipkart Axis Bank Credit CardT&C\r\nBank OfferExtra 5% off* with Axis Bank Buzz Credit CardT&C\r\nSpecial PriceGet extra 4% off (price inclusive of discount)T&C\r\nNo Cost EMI on Flipkart Axis Bank Credit CardT&C', '2019-11-07 15:16:57', 1, '2019-11-07 15:16:57'),
(12, '5dc3ea79077c5', 2, 4, 1, 'Steelbird AIR SBA 1 Matt Desert Storm Motorbike Helmet ', '12.jpeg', 'SKU0308', '1', 'Male', 1, 'Bank Offer5% Unlimited Cashback on Flipkart Axis Bank Credit CardT&C\r\nBank OfferExtra 5% off* with Axis Bank Buzz Credit CardT&C\r\nSpecial PriceGet extra 3% off (price inclusive of discount)T&C', '2019-11-07 15:46:43', 1, '2019-11-07 15:46:43'),
(14, '5dccf42897dd4', 2, 3, 2, 'Studds Thunder MR Motorbike Helmet ', '14.jpeg', '1452', '1', 'Male', 1, 'Shipping Charges For Flipkart Assured Items\r\nShipping charges are calculated based on the number of units, distance and delivery date.\r\nFor Plus customers, shipping charges are free.\r\nFor non-Plus customers, if the total value of FAssured items is more than Rs.500, shipping charges are free. If the total value of FAssured items is less than Rs.500, shipping charges = Rs.40 per unit\r\n* For faster delivery, shipping charges will be applicable.', '2019-11-14 12:03:07', 1, '2019-11-14 12:03:07'),
(16, '5dd53bfde8640', 7, 12, 3, 'Jacket', '16.jpg', 'J987', '2', 'Male', 1, 'g and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popula', '2019-11-20 18:44:43', 1, '2019-11-20 18:44:43'),
(17, '5dd53d1f77fa9', 7, 14, 3, 'Pant', '17.png', '123', '3', 'Male', 1, 'qiwiewioe', '2019-11-20 18:51:39', 1, '2019-11-20 18:51:39');

-- --------------------------------------------------------

--
-- Table structure for table `product_attribute`
--

CREATE TABLE `product_attribute` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `commonid` varchar(29) NOT NULL,
  `attribute_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_attribute`
--

INSERT INTO `product_attribute` (`id`, `product_id`, `commonid`, `attribute_id`) VALUES
(1, 1, '5dad93167f8e8', 1),
(2, 1, '5dad93167f8e8', 2),
(7, 2, '5db12d1e46d2c', 2),
(8, 2, '5db12d1e46d2c', 1),
(11, 3, '5db2a082412a0', 1),
(12, 3, '5db2a082412a0', 2),
(13, 4, '5db9156f53fb7', 1),
(14, 4, '5db9156f53fb7', 2),
(15, 5, '5dba6458b992e', 1),
(16, 5, '5dba6458b992e', 2),
(17, 6, '5dba659be6dbb', 1),
(18, 6, '5dba659be6dbb', 2),
(19, 7, '5dba6a68da3bf', 1),
(20, 7, '5dba6a68da3bf', 2),
(21, 8, '5dbbe2a7dc62a', 1),
(22, 8, '5dbbe2a7dc62a', 2),
(23, 9, '5dbc1eac787bf', 1),
(24, 9, '5dbc1eac787bf', 2),
(25, 10, '5dbd2afedc585', 1),
(26, 10, '5dbd2afedc585', 2),
(27, NULL, '5dc3c6722bfb0', 1),
(28, NULL, '5dc3c6722bfb0', 2),
(29, NULL, '5dc3c9a471834', 1),
(30, NULL, '5dc3c9a471834', 2),
(31, 11, '5dc3e13f5846e', 1),
(32, 11, '5dc3e13f5846e', 2),
(33, 12, '5dc3ea79077c5', 1),
(34, 12, '5dc3ea79077c5', 2),
(35, NULL, '5dc5617bcb562', 1),
(36, NULL, '5dc5617bcb562', 2),
(37, NULL, '5dccecd7d3681', 1),
(38, NULL, '5dccecd7d3681', 2),
(39, NULL, '5dccf2200dbc6', 1),
(40, NULL, '5dccf2200dbc6', 2),
(41, 14, '5dccf42897dd4', 1),
(42, 14, '5dccf42897dd4', 2),
(43, NULL, '5dccf7b4c830e', 1),
(44, NULL, '5dccf8b5e4ed9', 0),
(45, NULL, '5dccf8d08c6ec', 0),
(46, NULL, '5dce7bd695fe8', 1),
(47, NULL, '5dd52f573715b', 1),
(48, NULL, '5dd52f573715b', 2),
(49, NULL, '5dd536b59e165', 1),
(50, NULL, '5dd538f6be50f', 2),
(51, NULL, '5dd538f6be50f', 1),
(52, 16, '5dd53bfde8640', 1),
(53, 16, '5dd53bfde8640', 2),
(54, 17, '5dd53d1f77fa9', 1),
(55, 17, '5dd53d1f77fa9', 2);

-- --------------------------------------------------------

--
-- Table structure for table `product_attribute_value`
--

CREATE TABLE `product_attribute_value` (
  `id` int(11) NOT NULL,
  `commonid` varchar(20) NOT NULL,
  `productid` int(11) NOT NULL,
  `attributeid` int(11) NOT NULL,
  `valueid` int(11) NOT NULL,
  `createdby` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_attribute_value`
--

INSERT INTO `product_attribute_value` (`id`, `commonid`, `productid`, `attributeid`, `valueid`, `createdby`) VALUES
(2, '5dad93167f8e8', 1, 1, 3, 1),
(3, '5dad93167f8e8', 1, 1, 2, 1),
(4, '5dad93167f8e8', 1, 2, 4, 1),
(5, '5dad93167f8e8', 1, 2, 5, 1),
(6, '5db12d1e46d2c', 2, 2, 4, 1),
(7, '5db12d1e46d2c', 2, 2, 5, 1),
(8, '5db12d1e46d2c', 2, 1, 1, 1),
(9, '5db2a082412a0', 3, 1, 2, 1),
(10, '5db2a082412a0', 3, 1, 1, 1),
(11, '5db2a082412a0', 3, 2, 5, 1),
(12, '5db9156f53fb7', 4, 1, 1, 1),
(13, '5db9156f53fb7', 4, 2, 6, 1),
(14, '5db9156f53fb7', 4, 2, 4, 1),
(15, '5db9156f53fb7', 4, 2, 5, 1),
(16, '5dba6458b992e', 5, 1, 1, 1),
(17, '5dba6458b992e', 5, 2, 4, 1),
(19, '5dba659be6dbb', 6, 1, 3, 1),
(20, '5dba659be6dbb', 6, 2, 6, 1),
(21, '5dba6a68da3bf', 7, 1, 2, 1),
(22, '5dba6a68da3bf', 7, 2, 4, 1),
(23, '5dba6a68da3bf', 7, 2, 6, 1),
(29, '5dbc1eac787bf', 9, 1, 2, 1),
(30, '5dbc1eac787bf', 9, 1, 1, 1),
(31, '5dbc1eac787bf', 9, 2, 4, 1),
(32, '5dbc1eac787bf', 9, 2, 5, 1),
(33, '5dbd2afedc585', 10, 2, 4, 1),
(34, '5dbd2afedc585', 10, 2, 6, 1),
(35, '5dbd2afedc585', 10, 2, 5, 1),
(36, '5dbd2afedc585', 10, 1, 1, 1),
(37, '5dbd2afedc585', 10, 1, 3, 1),
(38, '5dc3c6722bfb0', 0, 1, 1, 1),
(39, '5dc3c6722bfb0', 0, 1, 3, 1),
(40, '5dc3c6722bfb0', 0, 2, 4, 1),
(41, '5dc3c9a471834', 0, 1, 1, 1),
(42, '5dc3c9a471834', 0, 2, 4, 1),
(43, '5dc3e13f5846e', 11, 1, 1, 1),
(44, '5dc3e13f5846e', 11, 1, 2, 1),
(45, '5dc3e13f5846e', 11, 2, 5, 1),
(46, '5dc3ea79077c5', 12, 1, 1, 1),
(47, '5dc3ea79077c5', 12, 1, 2, 1),
(48, '5dc3ea79077c5', 12, 2, 4, 1),
(49, '5dc5617bcb562', 0, 1, 1, 1),
(50, '5dc5617bcb562', 0, 1, 3, 1),
(51, '5dc5617bcb562', 0, 1, 2, 1),
(52, '5dc5617bcb562', 0, 2, 4, 1),
(53, '5dc5617bcb562', 0, 2, 6, 1),
(54, '5dc5617bcb562', 0, 2, 5, 1),
(56, '5dccecd7d3681', 0, 1, 2, 1),
(57, '5dccecd7d3681', 0, 2, 4, 1),
(58, '5dccecd7d3681', 0, 2, 5, 1),
(59, '5dccf2200dbc6', 0, 1, 1, 1),
(60, '5dccf2200dbc6', 0, 1, 2, 1),
(61, '5dccf2200dbc6', 0, 2, 4, 1),
(62, '5dccf2200dbc6', 0, 2, 6, 1),
(63, '5dccf42897dd4', 14, 1, 2, 1),
(64, '5dccf42897dd4', 14, 2, 4, 1),
(65, '5dce7bd695fe8', 0, 1, 1, 1),
(66, '5dce7bd695fe8', 0, 1, 3, 1),
(67, '5dce7bd695fe8', 0, 1, 2, 1),
(68, '5dd52f573715b', 0, 1, 1, 1),
(69, '5dd52f573715b', 0, 1, 3, 1),
(70, '5dd52f573715b', 0, 2, 6, 1),
(71, '5dd52f573715b', 0, 2, 4, 1),
(72, '5dd536b59e165', 0, 1, 1, 1),
(73, '5dd536b59e165', 0, 1, 2, 1),
(74, '5dd538f6be50f', 0, 2, 4, 1),
(75, '5dd538f6be50f', 0, 1, 2, 1),
(76, '5dd53bfde8640', 16, 1, 1, 1),
(77, '5dd53bfde8640', 16, 2, 5, 1),
(78, '5dd53d1f77fa9', 17, 1, 1, 1),
(79, '5dd53d1f77fa9', 17, 2, 4, 1),
(80, '5dd53d1f77fa9', 17, 2, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_cart`
--

CREATE TABLE `product_cart` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `iteam` int(11) NOT NULL,
  `grandtotal` float NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_cart`
--

INSERT INTO `product_cart` (`id`, `userid`, `iteam`, `grandtotal`, `created`) VALUES
(137, 16, 0, 0, '2019-11-25 19:06:28'),
(139, 18, 0, 0, '2019-11-25 19:13:58'),
(140, 19, 0, 0, '2019-11-25 19:15:47'),
(141, 20, 0, 0, '2019-11-25 19:16:20'),
(142, 21, 0, 0, '2019-11-25 19:17:15'),
(144, 23, 0, 0, '2019-11-25 19:19:35'),
(152, 29, 8, 2340, '2019-11-25 20:12:42'),
(154, 30, 1, 100, '2019-11-25 19:51:43'),
(157, 26, 2, 400, '2019-11-25 20:30:49'),
(161, 34, 1, 100, '2019-11-25 20:37:13'),
(167, 35, 0, 0, '2019-11-25 21:03:27'),
(173, 36, 4, 1980, '2019-11-25 22:51:31'),
(183, 38, 1, 100, '2019-11-25 23:05:03'),
(198, 40, 1, 300, '2019-11-26 18:02:59'),
(200, 17, 0, 0, '2019-11-26 18:18:57');

-- --------------------------------------------------------

--
-- Table structure for table `product_cart_iteam`
--

CREATE TABLE `product_cart_iteam` (
  `id` int(11) NOT NULL,
  `rowid` varchar(100) NOT NULL,
  `userid` int(11) NOT NULL,
  `proid` int(11) NOT NULL,
  `variationid` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` float NOT NULL,
  `subtotal` float NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `variation` int(11) NOT NULL,
  `opening` int(11) NOT NULL,
  `productquantity` int(11) NOT NULL,
  `stockstatus` int(11) NOT NULL,
  `regular_price` float NOT NULL,
  `offer_price` float NOT NULL,
  `offer_per` float NOT NULL,
  `validform` datetime NOT NULL,
  `first` int(11) NOT NULL,
  `second` int(11) NOT NULL,
  `validto` datetime NOT NULL,
  `visible` int(11) NOT NULL,
  `sr_no` int(11) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`id`, `pro_id`, `variation`, `opening`, `productquantity`, `stockstatus`, `regular_price`, `offer_price`, `offer_per`, `validform`, `first`, `second`, `validto`, `visible`, `sr_no`, `created`) VALUES
(1, 1, 1, 600, 11, 0, 120, 100, 16, '0000-00-00 00:00:00', 2, 4, '0000-00-00 00:00:00', 1, 0, '2019-10-21 18:24:42'),
(2, 1, 1, 600, 15, 1, 200, 100, 50, '0000-00-00 00:00:00', 2, 5, '0000-00-00 00:00:00', 1, 1, '2019-10-21 18:24:42'),
(3, 1, 1, 600, 0, 1, 500, 300, 40, '2019-10-15 00:00:00', 3, 4, '2019-10-24 00:00:00', 1, 2, '2019-10-21 18:24:42'),
(4, 1, 1, 600, 65, 1, 300, 150, 50, '2019-10-15 00:00:00', 3, 5, '2019-10-31 00:00:00', 1, 3, '2019-10-21 18:24:42'),
(5, 2, 0, 600, 12, 1, 12000, 10000, 16.6667, '2019-10-25 00:00:00', 0, 0, '2019-10-31 00:00:00', 1, 0, '2019-10-24 10:21:47'),
(6, 3, 1, 600, 120, 1, 520, 420, 10, '2019-10-24 00:00:00', 0, 0, '2019-10-31 00:00:00', 1, 0, '2019-10-25 12:45:48'),
(7, 3, 1, 600, 569, 1, 520, 1000, 125, '2019-10-31 00:00:00', 0, 0, '2019-11-02 00:00:00', 1, 1, '2019-10-25 12:45:48'),
(8, 4, 1, 600, 12, 1, 1800, 1750, 12, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 1, 0, '2019-10-30 10:19:00'),
(9, 4, 1, 600, 14, 1, 1820, 1750, 12, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 1, 1, '2019-10-30 10:19:00'),
(10, 4, 1, 600, 78, 1, 1880, 1730, 12, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 1, 2, '2019-10-30 10:19:00'),
(11, 5, 0, 600, 21, 1, 3000, 2800, 6.66667, '2019-10-31 00:00:00', 0, 0, '2019-11-14 00:00:00', 1, 0, '2019-10-31 10:08:46'),
(12, 6, 0, 600, 32, 0, 3500, 3400, 2.85714, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 1, 0, '2019-10-31 10:28:46'),
(13, 7, 1, 600, 14, 1, 4000, 3800, 20, '2019-11-01 00:00:00', 0, 0, '2019-11-01 00:00:00', 1, 0, '2019-10-31 10:34:12'),
(14, 7, 1, 600, 12, 1, 3900, 1200, 12, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 1, 1, '2019-10-31 10:34:12'),
(21, 9, 1, 600, 12, 1, 1234, 1233, 3, '0000-00-00 00:00:00', 1, 4, '0000-00-00 00:00:00', 1, 0, '2019-11-01 17:46:48'),
(22, 9, 1, 600, 3, 1, 1235, 1231, 5, '0000-00-00 00:00:00', 1, 5, '0000-00-00 00:00:00', 1, 1, '2019-11-01 17:46:48'),
(23, 9, 1, 600, 45, 0, 1238, 1123, 3, '0000-00-00 00:00:00', 2, 4, '0000-00-00 00:00:00', 1, 2, '2019-11-01 17:46:48'),
(24, 9, 1, 600, 12, 1, 1239, 1234, 5, '0000-00-00 00:00:00', 2, 5, '0000-00-00 00:00:00', 1, 3, '2019-11-01 17:46:48'),
(25, 10, 1, 600, 11, 0, 1500, 1401, 5, '0000-00-00 00:00:00', 1, 4, '0000-00-00 00:00:00', 1, 0, '2019-11-02 12:43:42'),
(26, 10, 1, 600, 7, 1, 1520, 1420, 5, '0000-00-00 00:00:00', 1, 5, '0000-00-00 00:00:00', 1, 1, '2019-11-02 12:43:42'),
(27, 10, 1, 600, 6, 0, 1530, 1430, 5, '0000-00-00 00:00:00', 1, 6, '0000-00-00 00:00:00', 1, 2, '2019-11-02 12:43:42'),
(28, 10, 1, 600, 45, 1, 1540, 1440, 5, '0000-00-00 00:00:00', 3, 4, '0000-00-00 00:00:00', 1, 3, '2019-11-02 12:43:42'),
(29, 10, 1, 600, 12, 0, 1550, 1450, 5, '0000-00-00 00:00:00', 3, 5, '0000-00-00 00:00:00', 1, 4, '2019-11-02 12:43:42'),
(30, 10, 1, 600, 52, 1, 1560, 1460, 6, '0000-00-00 00:00:00', 3, 6, '0000-00-00 00:00:00', 1, 5, '2019-11-02 12:43:42'),
(31, 11, 1, 600, 12, 0, 2200, 1800, 4, '2019-11-07 00:00:00', 1, 5, '2019-11-09 00:00:00', 1, 0, '2019-11-07 15:16:57'),
(32, 11, 1, 600, 14, 1, 2260, 1900, 3, '2019-11-07 00:00:00', 2, 5, '2019-11-08 00:00:00', 1, 1, '2019-11-07 15:16:57'),
(33, 12, 1, 600, 15, 0, 700, 650, 5, '0000-00-00 00:00:00', 1, 4, '0000-00-00 00:00:00', 1, 0, '2019-11-07 15:46:43'),
(34, 12, 1, 600, 32, 0, 788, 655, 2, '2019-11-15 00:00:00', 2, 4, '2019-11-21 00:00:00', 1, 1, '2019-11-07 15:46:43'),
(35, 14, 0, 0, 1200, 0, 1200, 1180, 1.6, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '2019-11-14 12:03:07'),
(36, 16, 1, 0, 12, 1, 1222, 1000, 0, '0000-00-00 00:00:00', 1, 5, '0000-00-00 00:00:00', 1, 0, '2019-11-20 18:44:43'),
(37, 17, 1, 0, 1, 1, 100, 90, 0, '0000-00-00 00:00:00', 1, 4, '0000-00-00 00:00:00', 1, 0, '2019-11-20 18:51:39'),
(38, 17, 1, 0, 2, 1, 70, 60, 0, '0000-00-00 00:00:00', 1, 6, '0000-00-00 00:00:00', 1, 1, '2019-11-20 18:51:39');

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE `product_image` (
  `id` int(11) NOT NULL,
  `proid` int(11) NOT NULL,
  `prodetailsid` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_image`
--

INSERT INTO `product_image` (`id`, `proid`, `prodetailsid`, `image`) VALUES
(8, 10, 25, '10-25-1.jpeg'),
(9, 10, 25, '10-25-2.jpeg'),
(10, 10, 25, '10-25-3.jpeg'),
(11, 10, 25, '10-25-4.jpeg'),
(12, 10, 26, '10-26-1.jpeg'),
(13, 10, 26, '10-26-2.jpeg'),
(14, 10, 26, '10-26-3.jpeg'),
(15, 10, 30, '10-30-0.jpeg'),
(16, 10, 30, '10-30-1.jpeg'),
(17, 10, 30, '10-30-2.jpeg'),
(18, 10, 30, '10-30-3.jpeg'),
(19, 10, 30, '10-30-4.jpeg'),
(20, 10, 27, '5dcbb73741821.jpeg'),
(21, 10, 27, '5dcbb73741821.jpeg'),
(22, 10, 27, '5dcbb73741821.jpeg'),
(23, 10, 27, '5dcbb73741821.jpeg'),
(24, 10, 29, '5dcbb7707c2b3.jpeg'),
(25, 10, 29, '5dcbb7707e5dc.jpeg'),
(26, 10, 29, '5dcbb77083015.jpeg'),
(27, 10, 29, '5dcbb77084b6d.jpeg'),
(28, 10, 29, '5dcbb77085ef6.jpeg'),
(29, 10, 28, '5dcbcaa7143ea.jpeg'),
(30, 10, 28, '5dcbcaa716afa.jpeg'),
(31, 12, 34, '5dccd65c500d6.jpeg'),
(32, 12, 34, '5dccd65c67bc4.jpeg'),
(33, 12, 34, '5dccd65c68f4c.jpeg'),
(34, 1, 1, '5dce7b7e1a331.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_order`
--

CREATE TABLE `product_order` (
  `id` int(11) NOT NULL,
  `orderid` varchar(20) NOT NULL,
  `userid` int(11) NOT NULL,
  `iteam` int(11) NOT NULL,
  `grand` float NOT NULL,
  `delivery_address` varchar(10) NOT NULL,
  `status` int(11) NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_order`
--

INSERT INTO `product_order` (`id`, `orderid`, `userid`, `iteam`, `grand`, `delivery_address`, `status`, `created`) VALUES
(77, '19112507010', 16, 1, 1000, '34', 0, '2019-11-25'),
(78, '19112507061', 16, 1, 100, '34', 0, '2019-11-25'),
(79, '19112507132', 17, 1, 100, '35', 0, '2019-11-25'),
(80, '19112507183', 22, 1, 100, '40', 0, '2019-11-25'),
(81, '19112507214', 24, 1, 100, '42', 0, '2019-11-25'),
(82, '19112507255', 25, 1, 100, '43', 0, '2019-11-25'),
(83, '19112507406', 27, 1, 420, '44', 0, '2019-11-25'),
(84, '19112507417', 28, 1, 100, '45', 0, '2019-11-25'),
(85, '19112507468', 29, 1, 100, '46', 0, '2019-11-25'),
(86, '19112507519', 30, 1, 100, '47', 0, '2019-11-25'),
(87, '191125075810', 31, 1, 100, '48', 0, '2019-11-25'),
(88, '191125075916', 31, 5, 12170, '48', 0, '2019-11-25'),
(89, '191125082816', 32, 1, 100, '50', 0, '2019-11-25'),
(90, '191125082917', 33, 1, 100, '51', 0, '2019-11-25'),
(91, '191125083618', 35, 1, 400, '52', 0, '2019-11-25'),
(92, '191125084120', 17, 2, 200, '35', 0, '2019-11-25'),
(93, '191125084520', 35, 1, 100, '52', 0, '2019-11-25'),
(94, '191125085220', 17, 2, 200, '35', 0, '2019-11-25'),
(95, '191125085620', 17, 1, 100, '35', 0, '2019-11-25'),
(96, '191125085720', 17, 1, 100, '35', 0, '2019-11-25'),
(97, '191125090521', 17, 1, 100, '35', 0, '2019-11-25'),
(98, '191125091125', 37, 2, 3200, '53', 0, '2019-11-25'),
(99, '191125092022', 36, 2, 1100, '54', 0, '2019-11-25'),
(100, '191125092129', 38, 1, 1000, '55', 0, '2019-11-25'),
(101, '191125093323', 36, 1, 100, '54', 0, '2019-11-25'),
(102, '191125105023', 17, 2, 1850, '35', 0, '2019-11-25'),
(103, '191125105023', 17, 1, 1000, '35', 0, '2019-11-25'),
(104, '191125110724', 17, 1, 100, '35', 0, '2019-11-25'),
(105, '191125110824', 17, 1, 100, '35', 0, '2019-11-25'),
(106, '191125110824', 17, 1, 1000, '35', 0, '2019-11-25'),
(107, '191125110824', 17, 1, 1000, '35', 0, '2019-11-25'),
(108, '191125110924', 17, 1, 420, '35', 0, '2019-11-25'),
(109, '191125110924', 17, 1, 3800, '35', 0, '2019-11-25'),
(110, '191125110924', 17, 1, 3400, '35', 0, '2019-11-25'),
(111, '191125111024', 17, 1, 2800, '35', 0, '2019-11-25'),
(112, '191126045024', 39, 1, 100, '68', 0, '2019-11-26'),
(113, '191126045943', 40, 1, 420, '69', 0, '2019-11-26'),
(114, '191126051625', 40, 1, 8750, '69', 0, '2019-11-26'),
(115, '191126061945', 41, 1, 2000, '70', 0, '2019-11-26');

-- --------------------------------------------------------

--
-- Table structure for table `product_order_iteam`
--

CREATE TABLE `product_order_iteam` (
  `id` int(11) NOT NULL,
  `orderdid` varchar(50) NOT NULL,
  `userid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `variationid` int(15) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  `total` float NOT NULL,
  `status` int(11) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_order_iteam`
--

INSERT INTO `product_order_iteam` (`id`, `orderdid`, `userid`, `productid`, `variationid`, `quantity`, `price`, `total`, `status`, `created`) VALUES
(105, '19112507010', 16, 16, 36, 1, 1000, 1000, 0, '2019-11-25 19:01:03'),
(106, '19112507061', 16, 1, 1, 1, 100, 100, 0, '2019-11-25 19:06:25'),
(107, '19112507132', 17, 1, 1, 1, 100, 100, 0, '2019-11-25 19:13:13'),
(108, '19112507183', 22, 1, 1, 1, 100, 100, 0, '2019-11-25 19:18:33'),
(109, '19112507214', 24, 1, 1, 1, 100, 100, 0, '2019-11-25 19:21:32'),
(110, '19112507255', 25, 1, 1, 1, 100, 100, 0, '2019-11-25 19:25:21'),
(111, '19112507406', 27, 3, 6, 1, 420, 420, 0, '2019-11-25 19:40:04'),
(112, '19112507417', 28, 1, 1, 1, 100, 100, 0, '2019-11-25 19:41:49'),
(113, '19112507468', 29, 1, 2, 1, 100, 100, 0, '2019-11-25 19:46:25'),
(114, '19112507519', 30, 1, 1, 1, 100, 100, 0, '2019-11-25 19:51:10'),
(115, '191125075810', 31, 1, 1, 1, 100, 100, 0, '2019-11-25 19:58:09'),
(116, '191125075916', 31, 3, 6, 1, 420, 420, 0, '2019-11-25 19:59:32'),
(117, '191125075916', 31, 4, 8, 1, 1750, 1750, 0, '2019-11-25 19:59:32'),
(118, '191125075916', 31, 5, 11, 1, 2800, 2800, 0, '2019-11-25 19:59:32'),
(119, '191125075916', 31, 7, 13, 1, 3800, 3800, 0, '2019-11-25 19:59:32'),
(120, '191125075916', 31, 6, 12, 1, 3400, 3400, 0, '2019-11-25 19:59:32'),
(121, '191125082816', 32, 1, 1, 1, 100, 100, 0, '2019-11-25 20:28:01'),
(122, '191125082917', 33, 1, 1, 1, 100, 100, 0, '2019-11-25 20:29:51'),
(123, '191125083618', 35, 1, 1, 4, 100, 400, 0, '2019-11-25 20:36:05'),
(124, '191125084120', 17, 1, 1, 1, 100, 100, 0, '2019-11-25 20:41:17'),
(125, '191125084520', 35, 1, 1, 1, 100, 100, 0, '2019-11-25 20:45:32'),
(126, '191125085220', 17, 1, 1, 1, 100, 100, 0, '2019-11-25 20:52:21'),
(127, '191125085620', 17, 1, 1, 1, 100, 100, 0, '2019-11-25 20:56:09'),
(128, '191125085720', 17, 1, 1, 1, 100, 100, 0, '2019-11-25 20:57:08'),
(129, '191125090521', 17, 1, 1, 1, 100, 100, 0, '2019-11-25 21:05:08'),
(130, '191125091125', 37, 1, 2, 2, 100, 200, 0, '2019-11-25 21:11:18'),
(131, '191125091125', 37, 16, 36, 3, 1000, 3000, 0, '2019-11-25 21:11:18'),
(132, '191125092022', 36, 1, 1, 1, 100, 100, 0, '2019-11-25 21:20:00'),
(133, '191125092022', 36, 16, 36, 1, 1000, 1000, 0, '2019-11-25 21:20:00'),
(134, '191125092129', 38, 16, 36, 1, 1000, 1000, 0, '2019-11-25 21:21:06'),
(135, '191125093323', 36, 1, 1, 1, 100, 100, 0, '2019-11-25 21:33:37'),
(136, '191125105023', 17, 1, 1, 1, 100, 100, 0, '2019-11-25 22:50:12'),
(137, '191125105023', 17, 4, 8, 1, 1750, 1750, 0, '2019-11-25 22:50:12'),
(138, '191125105023', 17, 16, 36, 1, 1000, 1000, 0, '2019-11-25 22:50:56'),
(139, '191125110724', 17, 1, 1, 1, 100, 100, 0, '2019-11-25 23:07:47'),
(140, '191125110824', 17, 1, 1, 1, 100, 100, 0, '2019-11-25 23:08:33'),
(141, '191125110824', 17, 16, 36, 1, 1000, 1000, 0, '2019-11-25 23:08:46'),
(142, '191125110824', 17, 16, 36, 1, 1000, 1000, 0, '2019-11-25 23:08:57'),
(143, '191125110924', 17, 3, 6, 1, 420, 420, 0, '2019-11-25 23:09:08'),
(144, '191125110924', 17, 7, 13, 1, 3800, 3800, 0, '2019-11-25 23:09:18'),
(145, '191125110924', 17, 6, 12, 1, 3400, 3400, 0, '2019-11-25 23:09:43'),
(146, '191125111024', 17, 5, 11, 1, 2800, 2800, 0, '2019-11-25 23:10:53'),
(147, '191126045024', 39, 1, 1, 1, 100, 100, 0, '2019-11-26 16:50:36'),
(148, '191126045943', 40, 3, 6, 1, 420, 420, 0, '2019-11-26 16:59:23'),
(149, '191126051625', 40, 4, 8, 5, 1750, 8750, 0, '2019-11-26 17:16:09'),
(150, '191126061945', 41, 16, 36, 2, 1000, 2000, 0, '2019-11-26 18:19:16');

-- --------------------------------------------------------

--
-- Table structure for table `product_tag`
--

CREATE TABLE `product_tag` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `tag` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_tag`
--

INSERT INTO `product_tag` (`id`, `product_id`, `tag`) VALUES
(11, 1, 'Blue'),
(12, 1, 'Red'),
(13, 2, 'Blue'),
(14, 2, 'Red'),
(15, 2, 'Green'),
(16, 2, 'Maroon'),
(17, 3, 'Blue'),
(18, 3, 'Red'),
(19, 3, 'Green'),
(20, 3, 'Maroon'),
(21, 4, 'Blue'),
(22, 4, 'Red'),
(23, 4, 'Green'),
(24, 5, 'Blue'),
(25, 5, 'Red'),
(26, 5, 'Green'),
(30, 6, 'Blue'),
(31, 6, 'Red'),
(32, 6, 'Maroon'),
(33, 7, 'Blue'),
(34, 7, 'Red'),
(35, 7, 'Green'),
(44, 8, 'Blue'),
(45, 8, 'Red'),
(46, 8, 'Green'),
(47, 8, 'Maroon'),
(48, 10, 'Maroon'),
(79, 11, 'Blue'),
(80, 11, 'Green'),
(81, 11, 'Maroon'),
(94, 12, 'Blue'),
(95, 12, 'Red'),
(96, 12, 'Green'),
(97, 15, 'Blue'),
(98, 15, 'Red'),
(99, 15, 'Green'),
(100, 16, 'Blue'),
(101, 16, 'Red'),
(102, 16, 'Green');

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`id`, `type`, `status`, `created`) VALUES
(1, 'On Road', 0, '2019-11-11 00:00:00'),
(2, 'Off Road', 0, '2019-11-11 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `sub_category_name` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `cat_id`, `sub_category_name`, `status`, `created`, `updated_by`, `updated`) VALUES
(1, 1, ' Mahadev', 1, '2019-10-21 16:23:38', 1, '2019-10-21 16:23:38'),
(2, 1, 'Lining', 1, '2019-10-21 16:24:39', 1, '2019-10-21 16:24:39'),
(3, 2, 'economy ', 1, '2019-10-21 16:27:11', 1, '2019-10-21 16:27:11'),
(4, 2, 'Eco ', 1, '2019-10-21 16:27:21', 1, '2019-10-21 16:27:21'),
(5, 3, 'All color', 1, '2019-11-01 15:23:14', 1, '2019-11-01 15:23:14'),
(6, 3, 'Only Green', 1, '2019-11-01 15:23:25', 1, '2019-11-01 15:23:25'),
(7, 6, 'Full Face', 1, '2019-11-19 17:39:49', 1, '2019-11-19 17:39:49'),
(8, 6, 'Open Face', 1, '2019-11-19 17:39:57', 1, '2019-11-19 17:39:57'),
(9, 6, 'Modular', 1, '2019-11-19 17:40:06', 1, '2019-11-19 17:40:06'),
(10, 6, 'Dual sport', 1, '2019-11-19 17:40:14', 1, '2019-11-19 17:40:14'),
(11, 6, 'Studds Driving', 0, '2019-11-19 17:40:23', 1, '2019-11-19 17:40:23'),
(12, 7, 'Jackets', 0, '2019-11-20 12:25:23', 1, '2019-11-20 12:25:23'),
(13, 7, 'Gloves', 0, '2019-11-20 12:25:38', 1, '2019-11-20 12:25:38'),
(14, 7, 'Pants', 0, '2019-11-20 12:25:49', 1, '2019-11-20 12:25:49'),
(15, 7, 'Boots', 0, '2019-11-20 12:26:01', 1, '2019-11-20 12:26:01'),
(16, 7, 'Riding Suits', 0, '2019-11-20 12:26:12', 1, '2019-11-20 12:26:12'),
(17, 8, 'SADDLE BAGS', 0, '2019-11-22 15:04:46', 1, '2019-11-22 15:04:46'),
(18, 8, 'TANK BAGS', 0, '2019-11-22 15:04:59', 1, '2019-11-22 15:04:59'),
(19, 8, 'TAIL BAGS', 0, '2019-11-22 15:05:11', 1, '2019-11-22 15:05:11'),
(20, 8, 'BACKPACKS', 0, '2019-11-22 15:05:30', 1, '2019-11-22 15:05:30'),
(21, 8, 'TOOL KIT', 0, '2019-11-22 15:05:51', 1, '2019-11-22 15:05:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `city` varchar(100) NOT NULL,
  `streetaddress` text NOT NULL,
  `streetaddress1` text NOT NULL,
  `postcode` varchar(6) NOT NULL,
  `status` int(11) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `mobile`, `email`, `password`, `city`, `streetaddress`, `streetaddress1`, `postcode`, `status`, `created`) VALUES
(16, 'ABHI', '9999988888', 'abhi@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 'aaa', '11', 'aasd', '999000', 0, '2019-11-25 19:01:03'),
(17, 'Bharat Kumar', '8956846784', 'bharat@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 'Banglor', 'BTM Layout', 'Gangothri Circle', '347634', 0, '2019-11-25 19:13:13'),
(18, 'retyerty', '8956846785', 'bharatbkj@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'ertyerty', 'ertyerty', 'ertyerty', '347634', 0, '2019-11-25 19:13:58'),
(19, 'retyerty', '8956846788', 'bharatbkj1@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'ertyerty', 'ertyerty', 'ertyerty', '347634', 0, '2019-11-25 19:15:47'),
(20, 'retyerty', '7657363457', 'bharatbkj14@gmail.com', '98e5c3a7d79ccf2502fe2000cc1fa1e6', 'ertyerty', 'ertyerty', 'ertyerty', '347634', 0, '2019-11-25 19:16:20'),
(21, 'retyerty', '9874576894', 'bharatbkj18@gmail.com', '8f8c1a1b278f4c366324f850742a07fb', 'ertyerty', 'ertyerty', 'ertyerty', '347634', 0, '2019-11-25 19:17:14'),
(22, 'hjkghjkghjk', '7856785678', 'fghjfh@gmail.com', '8a884e7d07f6ea9001f81c2d3210bb93', 'ghjkghjkghjk', 'ghkghjk', 'ghkghkghjk', '485678', 0, '2019-11-25 19:18:33'),
(23, 'hjkghjkghjk', '9578957689', 'fghjfh7@gmail.com', 'f2c69862c12be230815b90919eedcd69', 'ghjkghjkghjk', 'ghkghjk', 'ghkghkghjk', '485678', 0, '2019-11-25 19:19:35'),
(24, 'yuityuityui', '5786785678', 'b@gmail.com', '071c7af5dc8c27871fa8cd2f642affaa', 'tyuityuityui', 'tyuiyuityui', 'tyuityuityui', '678456', 0, '2019-11-25 19:21:32'),
(25, 'tryrfthdfghfgh', '7565767676', 'ok@gmail.com', '89761dbe6d4e677752520ac25b8c0b6d', 'fghfghfgh', 'fghfghfgh', 'fhfghfgh', '567356', 0, '2019-11-25 19:25:21'),
(26, 'testing', '9945427815', 'Testing@gmail.com', 'c33367701511b4f6020ec61ded352059', '', 'abc', 'ABC', '761236', 1, '2019-11-25 19:27:25'),
(27, 'sdfgsdg', '8865785678', 'as@gmail.com', 'becb3fb94354f80014199dc23c931ec9', 'ertyertyerty', 'ertyerty', 'ertyerty', '956789', 0, '2019-11-25 19:40:04'),
(28, 'frghdfhdfg', '7856784568', 'kjdfg@gmail.com', 'a26ebcb9bb355d7336bdc46622c98c4f', 'dfhjfghjdf', 'dfhjdfhjdfgh', 'dfghdfghdfgh', '764567', 0, '2019-11-25 19:41:49'),
(29, 'fdgdg', '9999999999', 'ali.cubikey1@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'bvcbvcb', 'vcbvcb', 'cvbcvb', '564646', 0, '2019-11-25 19:46:24'),
(30, 'rtytryty', '8888888888', 'ali@testt.com', 'e807f1fcf82d132f9bb018ca6738a19f', 'rtyrty', 'rtytry', 'rtyrtyrty', '456465', 0, '2019-11-25 19:51:10'),
(31, 'aaa', '9888888888', 'test@ttt.com', '6ebe76c9fb411be97b3b0d48b791a7c9', 'ghgfhfgh', 'fghfh', 'dfhgdfh', '564565', 0, '2019-11-25 19:58:09'),
(32, 'ghdfghdfgh', '8465687456', 'gfj@gmail.com', 'bc23938eb8c6cbf82563cb0cdc2957a8', 'dfhdfghdfgh', 'dfghdfghdfgh', 'dfhdfghdfgh', '764645', 0, '2019-11-25 20:28:01'),
(33, 'gfrhdfghdfgh', '7567345764', 'gfjgfhj@gmail.com', '59e9b6b126245587c5f132e354a2831d', 'dfhdfghdf', 'ghdfhdfgh', 'dfhdfghd', '457645', 0, '2019-11-25 20:29:51'),
(34, 'qwerty', '6666666666', 'test@ali.com', 'e10adc3949ba59abbe56e057f20f883e', 'fgdfgdfg', 'dfggdfg', 'dfgfdgfdg', '565465', 1, '2019-11-25 20:35:54'),
(35, 'Akanksha', '8149494969', 'akku@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'bengaluru', 'Gangothri circle', 'Gangothri circle', '876543', 0, '2019-11-25 20:36:05'),
(36, '', '8763212356', 'Pankaja@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'bengaluru', 'Gangothri circle', 'Gangothri circle', '765432', 1, '2019-11-25 21:04:06'),
(37, 'Testing', '6545678777', 'Testing1@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'bengaluru', 'Gangothri circle', 'Gangothri circle', '987654', 0, '2019-11-25 21:11:18'),
(38, 'sdffsd', '9856567567', 'test@tq.com', 'e10adc3949ba59abbe56e057f20f883e', 'sdfsdf', 'sdfdsfds', 'dfdsfds', '453533', 0, '2019-11-25 21:21:06'),
(39, 'Aishwarya', '9876543234', 'Testing4@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'bengaluru', 'Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle ', 'Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle Gangothri circle ', '987654', 1, '2019-11-25 22:52:32'),
(40, 'Testing', '7654323456', 'Testing5@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'bengaluru', 'Gangothri circle', 'Gangothri circle', '761236', 0, '2019-11-26 16:59:23'),
(41, 'as', '9876543098', 'as1@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'aa', '11', '111', '999999', 0, '2019-11-26 18:19:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_activity_log`
--
ALTER TABLE `admin_activity_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attribute`
--
ALTER TABLE `attribute`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attribute_value`
--
ALTER TABLE `attribute_value`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cafe_event`
--
ALTER TABLE `cafe_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cafe_gallery`
--
ALTER TABLE `cafe_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deliveryaddress`
--
ALTER TABLE `deliveryaddress`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_tiles`
--
ALTER TABLE `home_tiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pin`
--
ALTER TABLE `pin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pincode`
--
ALTER TABLE `pincode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_attribute`
--
ALTER TABLE `product_attribute`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_attribute_value`
--
ALTER TABLE `product_attribute_value`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_cart`
--
ALTER TABLE `product_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_cart_iteam`
--
ALTER TABLE `product_cart_iteam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_order`
--
ALTER TABLE `product_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_order_iteam`
--
ALTER TABLE `product_order_iteam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_tag`
--
ALTER TABLE `product_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_activity_log`
--
ALTER TABLE `admin_activity_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `attribute`
--
ALTER TABLE `attribute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `attribute_value`
--
ALTER TABLE `attribute_value`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cafe_event`
--
ALTER TABLE `cafe_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cafe_gallery`
--
ALTER TABLE `cafe_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `deliveryaddress`
--
ALTER TABLE `deliveryaddress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `home_tiles`
--
ALTER TABLE `home_tiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pin`
--
ALTER TABLE `pin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pincode`
--
ALTER TABLE `pincode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `product_attribute`
--
ALTER TABLE `product_attribute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `product_attribute_value`
--
ALTER TABLE `product_attribute_value`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `product_cart`
--
ALTER TABLE `product_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT for table `product_cart_iteam`
--
ALTER TABLE `product_cart_iteam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `product_image`
--
ALTER TABLE `product_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `product_order`
--
ALTER TABLE `product_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `product_order_iteam`
--
ALTER TABLE `product_order_iteam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `product_tag`
--
ALTER TABLE `product_tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
