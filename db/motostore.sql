-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2019 at 01:37 PM
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
(20, 1, 'Sub Category Inserted', 2, 6, '2019-11-01 15:23:25');

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
(1, 'color', '', 0, '2019-10-21 16:27:40', '0000-00-00 00:00:00', '2019-10-21 16:27:40'),
(2, 'Size', '', 0, '2019-10-21 16:29:00', '0000-00-00 00:00:00', '2019-10-21 16:29:00');

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
(1, 1, 'Red', '#FF2D00', 'Dull Red', 0, '2019-10-21 16:28:12', 0, ' desc'),
(2, 1, 'Black', '#000000', 'Pure Black', 0, '2019-10-21 16:28:28', 0, ' '),
(3, 1, 'White', '#ffffff', 'Slug here', 0, '2019-10-21 16:28:48', 0, ' description here'),
(4, 2, 'L', '', 'Large', 0, '2019-10-21 16:29:16', 0, 'desc'),
(5, 2, 'M', '', 'Medium', 0, '2019-10-21 16:29:50', 0, ' desc'),
(6, 2, 'XL', '', 'Extra Large', 0, '2019-10-21 16:30:06', 0, ' desc');

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
(1, 'Steelbird ', 1, '2019-10-21 16:19:47', '2019-10-21 16:19:47', 1),
(2, 'Studds ', 0, '2019-10-21 16:20:13', '2019-10-21 16:20:13', 1);

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
(1, 'Painted', 1, '2019-10-21 16:21:48', 1, '2019-10-21 16:21:48'),
(2, 'chorme', 1, '2019-10-21 16:26:57', 1, '2019-10-21 16:26:57'),
(3, 'Colorfull', 0, '2019-11-01 15:22:50', 1, '2019-11-01 15:22:50');

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
  `type` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `description` text,
  `created` datetime NOT NULL,
  `update_by` int(11) NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `commonid`, `cat_id`, `subcat_id`, `brand_id`, `product`, `photo`, `type`, `status`, `description`, `created`, `update_by`, `updated`) VALUES
(1, '5dad93167f8e8', 1, 1, 1, 'Steelbird SBA-1 mahavir Painted Motorbike Helmet  (Matt Black / white)', '1.jpeg', 2, 1, '1. High Impact ABS Material Shell. 2. Multi layer EPS (Thermocol) 3. High Density and low density for more Safety with Air Channels. 4. Micro-Metric Buckle meeting European Standards. 5. The ventilation of the helmet\'s upper part uses the \"Air Booster\" system. 6. Innovative ventilation system is also equipped with an air intake in the chin guard, an air intake in the frontal & Top area and two rear extractors recycling air inside the helmet. 7. Italian Design Hygenic Interior with Multipore breathable Pedding 8. Neck Protector for extra comfort extra comfort padding 9. Polycarbonate Anti Scratch Coated Visor 10. Quick Release Visor mechanism Kit. 11. Odourless mouth guard', '2019-10-21 18:24:42', 1, '2019-10-21 18:24:42'),
(2, '5db12d1e46d2c', 2, 4, 2, 'Studds Ninja Pastel Plain Motorsports Helmet  (Cherry Red)', '2.jpeg', 1, 1, 'When you are riding at high speed in a race, the chances of head injury are high. Hence, it is advisable that you give your head the right protection by using this Studds Ninja Helmet.\r\nFull-face Helmet\r\nThe higher the possibility of danger, the better prepared you should be. A full-face helmet like this gives complete protection to your head and neck.\r\nThermoplastic Outer Shell\r\nThe flexibility of thermoplastic ensures that the shell endures impact without getting cracked. It is highly durable\r\nEPS Padding\r\nThis padding ensures that your helmet stays put on your head and also cushions your head against jerks.\r\nDynamic Ventilation\r\nThis system allows adequate air-flow around your head, keeping it cool.', '2019-10-24 10:21:47', 1, '2019-10-24 10:21:47'),
(3, '5db2a082412a0', 1, 2, 1, 'Steelbird Adonis Majestic Motorbike Helmet  (Black // Red)', '3.jpeg', 2, 1, '1-Sheel Material-Hi Impact-ABS2-Helmet Full Face3-Hygienic Interior with breathable padding4-Quick Release Micro Metric Buckle5-High-Density EPS(Thermocol for safety6-Italian Design7-Designer Graphic8-Polycarbonate Visor With Hard Coated', '2019-10-25 12:45:48', 1, '2019-10-25 12:45:48'),
(4, '5db9156f53fb7', 1, 2, 2, 'Studds Thunder D1 N1 C/L Motorbike Helmet  (Matt Black)', '4.jpeg', 2, 1, '', '2019-10-30 10:19:00', 1, '2019-10-30 10:19:00'),
(5, '5dba6458b992e', 1, 2, 2, 'Studds Shifter D5 N5 Motorbike Helmet  (Black)', '5.jpeg', 1, 1, 'Low rating for the Seller but the Product gets a Good rating.\r\n\r\nI received a different color (matt white & black) but happy since I actually wanted that color but was not available online. Therefore did not return it. Also I had to assemble the the Sun Shield as it came dismantled in the box, also one of the\r\nThis is my second Shifter helmet, replaced the first one as it was involved in a crash.\r\nPROS: The Studds Shifter helmet has got the Basics Right', '2019-10-31 10:08:46', 1, '2019-10-31 10:08:46'),
(6, '5dba659be6dbb', 1, 2, 2, 'Studds Shifter D7 N10 Motorbike Helmet  (White)', '6.jpeg', 1, 1, 'STUDDS ACCESSORIES LIMITED,Regd. Office : 23/7 , Mathura Road, Ballabgarh , Faridabad - 121004, Haryana (INDIA)', '2019-10-31 10:28:46', 1, '2019-10-31 10:28:46'),
(7, '5dba6a68da3bf', 1, 2, 1, 'STEELBIRD jetstar D8 Built Motorbike Helmet  (Matt Black)', '7.jpeg', 2, 1, 'What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2019-10-31 10:34:12', 1, '2019-10-31 10:34:12'),
(9, '5dbc1eac787bf', 2, 4, 2, 'VEGA Off Road D/V Motorsports Helmet  (Dull Black)', '9.jpeg', 2, 1, 'Scratch Resistant Visor\r\n\r\nMade of superior quality materials, this Off Road Motorsports Helmet from Vega with a scratch resistant visor is easy to maintain and ensures that you get a clear and unobstructed view.\r\nTraction Plates on Sides\r\nThe traction plates on the side help in holding your goggles securely in place.\r\nDual Port Exhaust Vents\r\nThe exhaust vents flush out heat and humidity and provide excellent ventilation to keep you cool at all times.\r\nComfort Provided Using Advanced CAD Technology\r\nThe CAD technology offers a soft and comfortable fit and helps in effectively absorbing shock and impact.\r\nBuilt-in Goggles\r\nThe built-in goggles protect your eyes from the harmful UV radiation of the sun and dust particles.', '2019-11-01 17:46:48', 1, '2019-11-01 17:46:48'),
(10, '5dbd2afedc585', 2, 3, 1, 'VEGA Off Road D/V Motorsports Helmet  (Dull Black)', '10.jpeg', 2, 1, 'Scratch Resistant Visor\r\n\r\nMade of superior quality materials, this Off Road Motorsports Helmet from Vega with a scratch resistant visor is easy to maintain and ensures that you get a clear and unobstructed view.\r\n\r\nTraction Plates on Sides\r\nThe traction plates on the side help in holding your goggles securely in place.\r\nDual Port Exhaust Vents\r\n\r\nThe exhaust vents flush out heat and humidity and provide excellent ventilation to keep you cool at all times.\r\nComfort Provided Using Advanced CAD Technology\r\n\r\nThe CAD technology offers a soft and comfortable fit and helps in effectively absorbing shock and impact.\r\nBuilt-in Goggles\r\nThe built-in goggles protect your eyes from the harmful UV radiation of the sun and dust particles.', '2019-11-02 12:43:42', 1, '2019-11-02 12:43:42');

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
(26, 10, '5dbd2afedc585', 2);

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
  `pro_details_id` int(20) NOT NULL,
  `createdby` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_attribute_value`
--

INSERT INTO `product_attribute_value` (`id`, `commonid`, `productid`, `attributeid`, `valueid`, `pro_details_id`, `createdby`) VALUES
(2, '5dad93167f8e8', 1, 1, 3, 0, 1),
(3, '5dad93167f8e8', 1, 1, 2, 0, 1),
(4, '5dad93167f8e8', 1, 2, 4, 0, 1),
(5, '5dad93167f8e8', 1, 2, 5, 0, 1),
(6, '5db12d1e46d2c', 2, 2, 4, 0, 1),
(7, '5db12d1e46d2c', 2, 2, 5, 0, 1),
(8, '5db12d1e46d2c', 2, 1, 1, 0, 1),
(9, '5db2a082412a0', 3, 1, 2, 0, 1),
(10, '5db2a082412a0', 3, 1, 1, 0, 1),
(11, '5db2a082412a0', 3, 2, 5, 0, 1),
(12, '5db9156f53fb7', 4, 1, 1, 0, 1),
(13, '5db9156f53fb7', 4, 2, 6, 0, 1),
(14, '5db9156f53fb7', 4, 2, 4, 0, 1),
(15, '5db9156f53fb7', 4, 2, 5, 0, 1),
(16, '5dba6458b992e', 5, 1, 1, 0, 1),
(17, '5dba6458b992e', 5, 2, 4, 0, 1),
(19, '5dba659be6dbb', 6, 1, 3, 0, 1),
(20, '5dba659be6dbb', 6, 2, 6, 0, 1),
(21, '5dba6a68da3bf', 7, 1, 2, 0, 1),
(22, '5dba6a68da3bf', 7, 2, 4, 0, 1),
(23, '5dba6a68da3bf', 7, 2, 6, 0, 1),
(29, '5dbc1eac787bf', 9, 1, 2, 0, 1),
(30, '5dbc1eac787bf', 9, 1, 1, 0, 1),
(31, '5dbc1eac787bf', 9, 2, 4, 0, 1),
(32, '5dbc1eac787bf', 9, 2, 5, 0, 1),
(33, '5dbd2afedc585', 10, 2, 4, 0, 1),
(34, '5dbd2afedc585', 10, 2, 6, 0, 1),
(35, '5dbd2afedc585', 10, 2, 5, 0, 1),
(36, '5dbd2afedc585', 10, 1, 1, 0, 1),
(37, '5dbd2afedc585', 10, 1, 3, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `variation` int(11) NOT NULL,
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
  `image` varchar(100) NOT NULL,
  `image1` varchar(100) NOT NULL,
  `image2` varchar(100) NOT NULL,
  `image3` varchar(100) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`id`, `pro_id`, `variation`, `productquantity`, `stockstatus`, `regular_price`, `offer_price`, `offer_per`, `validform`, `first`, `second`, `validto`, `visible`, `sr_no`, `image`, `image1`, `image2`, `image3`, `created`) VALUES
(1, 1, 1, 11, 1, 120, 100, 16, '0000-00-00 00:00:00', 2, 4, '0000-00-00 00:00:00', 1, 0, '1.jpeg', '1.jpeg', '1.jpeg', '1.jpeg', '2019-10-21 18:24:42'),
(2, 1, 1, 15, 0, 200, 100, 50, '0000-00-00 00:00:00', 2, 5, '0000-00-00 00:00:00', 1, 1, '', '', '', '', '2019-10-21 18:24:42'),
(3, 1, 1, 500, 0, 500, 300, 40, '2019-10-15 00:00:00', 3, 4, '2019-10-24 00:00:00', 1, 2, '', '', '', '', '2019-10-21 18:24:42'),
(4, 1, 1, 65, 1, 300, 150, 50, '2019-10-15 00:00:00', 3, 5, '2019-10-31 00:00:00', 1, 3, '', '', '', '', '2019-10-21 18:24:42'),
(5, 2, 0, 12, 0, 12000, 10000, 16.6667, '2019-10-25 00:00:00', 0, 0, '2019-10-31 00:00:00', 1, 0, '', '', '', '', '2019-10-24 10:21:47'),
(6, 3, 1, 120, 1, 520, 420, 10, '2019-10-24 00:00:00', 0, 0, '2019-10-31 00:00:00', 1, 0, '', '', '', '', '2019-10-25 12:45:48'),
(7, 3, 1, 569, 0, 520, 1000, 125, '2019-10-31 00:00:00', 0, 0, '2019-11-02 00:00:00', 1, 1, '', '', '', '', '2019-10-25 12:45:48'),
(8, 4, 1, 12, 1, 1800, 1750, 12, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 1, 0, '', '', '', '', '2019-10-30 10:19:00'),
(9, 4, 1, 14, 1, 1820, 1750, 12, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 1, 1, '', '', '', '', '2019-10-30 10:19:00'),
(10, 4, 1, 78, 0, 1880, 1730, 12, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 1, 2, '', '', '', '', '2019-10-30 10:19:00'),
(11, 5, 0, 21, 0, 3000, 2800, 6.66667, '2019-10-31 00:00:00', 0, 0, '2019-11-14 00:00:00', 1, 0, '', '', '', '', '2019-10-31 10:08:46'),
(12, 6, 0, 32, 0, 3500, 3400, 2.85714, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 1, 0, '', '', '', '', '2019-10-31 10:28:46'),
(13, 7, 1, 14, 1, 4000, 3800, 20, '2019-11-01 00:00:00', 0, 0, '2019-11-01 00:00:00', 1, 0, '', '', '', '', '2019-10-31 10:34:12'),
(14, 7, 1, 12, 0, 3900, 1200, 12, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 1, 1, '', '', '', '', '2019-10-31 10:34:12'),
(21, 9, 1, 12, 1, 1234, 1233, 3, '0000-00-00 00:00:00', 1, 4, '0000-00-00 00:00:00', 1, 0, '', '', '', '', '2019-11-01 17:46:48'),
(22, 9, 1, 3, 1, 1235, 1231, 5, '0000-00-00 00:00:00', 1, 5, '0000-00-00 00:00:00', 1, 1, '', '', '', '', '2019-11-01 17:46:48'),
(23, 9, 1, 45, 0, 1238, 1123, 3, '0000-00-00 00:00:00', 2, 4, '0000-00-00 00:00:00', 1, 2, '', '', '', '', '2019-11-01 17:46:48'),
(24, 9, 1, 12, 1, 1239, 1234, 5, '0000-00-00 00:00:00', 2, 5, '0000-00-00 00:00:00', 1, 3, '', '', '', '', '2019-11-01 17:46:48'),
(25, 10, 1, 12, 0, 1500, 1400, 5, '0000-00-00 00:00:00', 1, 4, '0000-00-00 00:00:00', 1, 0, '', '', '', '', '2019-11-02 12:43:42'),
(26, 10, 1, 7, 1, 1520, 1420, 5, '2019-11-05 00:00:00', 1, 5, '2019-11-14 00:00:00', 1, 1, '', '', '', '', '2019-11-02 12:43:42'),
(27, 10, 1, 6, 0, 1530, 1430, 5, '0000-00-00 00:00:00', 1, 6, '0000-00-00 00:00:00', 1, 2, '', '', '', '', '2019-11-02 12:43:42'),
(28, 10, 1, 45, 0, 1540, 1440, 5, '0000-00-00 00:00:00', 3, 4, '0000-00-00 00:00:00', 1, 3, '', '', '', '', '2019-11-02 12:43:42'),
(29, 10, 1, 12, 0, 1550, 1450, 5, '2019-11-07 00:00:00', 3, 5, '2019-11-20 00:00:00', 1, 4, '', '', '', '', '2019-11-02 12:43:42'),
(30, 10, 1, 52, 1, 1560, 1460, 6, '0000-00-00 00:00:00', 3, 6, '0000-00-00 00:00:00', 1, 5, '', '', '', '', '2019-11-02 12:43:42');

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
(48, 10, 'Maroon');

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
(1, 1, ' Mahadev', 0, '2019-10-21 16:23:38', 1, '2019-10-21 16:23:38'),
(2, 1, 'Lining', 0, '2019-10-21 16:24:39', 1, '2019-10-21 16:24:39'),
(3, 2, 'economy ', 0, '2019-10-21 16:27:11', 1, '2019-10-21 16:27:11'),
(4, 2, 'Eco ', 0, '2019-10-21 16:27:21', 1, '2019-10-21 16:27:21'),
(5, 3, 'All color', 0, '2019-11-01 15:23:14', 1, '2019-11-01 15:23:14'),
(6, 3, 'Only Green', 1, '2019-11-01 15:23:25', 1, '2019-11-01 15:23:25');

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
-- Indexes for table `category`
--
ALTER TABLE `category`
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
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_tag`
--
ALTER TABLE `product_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `attribute`
--
ALTER TABLE `attribute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `attribute_value`
--
ALTER TABLE `attribute_value`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pin`
--
ALTER TABLE `pin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pincode`
--
ALTER TABLE `pincode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product_attribute`
--
ALTER TABLE `product_attribute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `product_attribute_value`
--
ALTER TABLE `product_attribute_value`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `product_tag`
--
ALTER TABLE `product_tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
