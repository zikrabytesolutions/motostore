-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2019 at 01:33 PM
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
(1, 1, 'New Brand Inserted', 3, 1, '2019-12-02 17:35:28'),
(2, 1, 'New Brand Inserted', 3, 2, '2019-12-02 17:35:49'),
(3, 1, 'Sub Category Inserted', 2, 1, '2019-12-02 17:36:05'),
(4, 1, 'Sub Category Inserted', 2, 2, '2019-12-02 17:36:13'),
(5, 1, 'Sub Category Inserted', 2, 3, '2019-12-02 17:36:35'),
(6, 1, 'Sub Category Inserted', 2, 4, '2019-12-02 17:36:53'),
(7, 1, 'Attribute Updated', 4, 1, '2019-12-02 17:40:44'),
(8, 1, 'Attribute Inserted', 4, 1, '2019-12-02 17:43:10'),
(9, 1, 'Attribute Updated', 4, 1, '2019-12-02 17:43:19'),
(10, 1, 'Attribute Value Inserted', 5, 1, '2019-12-02 17:44:24'),
(11, 1, 'Attribute Value Inserted', 5, 1, '2019-12-02 17:45:00'),
(12, 1, 'Category Inserted', 1, 3, '2019-12-03 16:21:09'),
(13, 1, 'Category Inserted', 1, 4, '2019-12-03 16:21:11'),
(14, 1, 'Category Inserted', 1, 5, '2019-12-03 16:21:13'),
(15, 1, 'Brand Updated', 1, 1, '2019-12-03 16:44:09'),
(16, 1, 'Brand Updated', 1, 1, '2019-12-03 16:44:14'),
(17, 1, 'Category Updated', 2, 1, '2019-12-03 16:44:50'),
(18, 1, 'Sub Category Inserted', 2, 4, '2019-12-03 17:01:22'),
(19, 1, 'Attribute Value Inserted', 5, 1, '2019-12-03 17:04:37'),
(20, 1, 'Attribute Value Inserted', 5, 1, '2019-12-04 12:05:27'),
(21, 1, 'Attribute Value Inserted', 5, 1, '2019-12-04 12:05:33'),
(22, 1, 'Attribute Updated', 4, 1, '2019-12-04 12:11:07'),
(23, 1, 'Attribute Inserted', 4, 1, '2019-12-04 12:16:03'),
(24, 1, 'Attribute Value Inserted', 5, 1, '2019-12-04 12:29:29'),
(25, 1, 'Category Inserted', 1, 3, '2019-12-05 10:00:08'),
(26, 1, 'Attribute Inserted', 4, 1, '2019-12-05 10:00:25'),
(27, 1, 'Attribute Value Inserted', 5, 1, '2019-12-05 10:00:38'),
(28, 1, 'Attribute Value Inserted', 5, 1, '2019-12-05 14:49:03'),
(29, 1, 'Brand Updated', 1, 1, '2019-12-05 15:17:45');

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
(1, 'Color', '', 1, '2019-12-02 16:52:13', '0000-00-00 00:00:00', '2019-12-02 16:52:13'),
(2, 'Size', '', 0, '2019-12-02 17:43:10', '0000-00-00 00:00:00', '2019-12-02 17:43:10');

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
(1, 1, 'blue', '#ff4a4a', '', 1, '2019-12-02 17:44:24', 0, '   '),
(2, 2, 'X', '', 'x', 0, '2019-12-02 17:45:00', 0, ' '),
(3, 2, 'S', '', 'Small', 0, '2019-12-03 17:04:37', 0, ' '),
(4, 1, 'blue', '#e66465', '', 0, '2019-12-04 12:05:27', 0, ' ');

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
(1, 'Adidas', 0, '2019-12-02 17:35:28', '2019-12-02 17:35:28', 1),
(2, 'Steelbird', 0, '2019-12-02 17:35:49', '2019-12-02 17:35:49', 1);

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
(1, 'Acrylic painting workshop ', 'bengaluru', 'Learn the Acrylic painting art and make an Impressive artwork. You will learn step by step process of making beautiful art with different shapes & techniques. This is an exciting workshop for creative minds. At the end of the workshop, you will carry home a beautiful artwork/craft created by yourself\r\n\r\nDate: multiple dates\r\n\r\nDuration: 2-3 hrs\r\n\r\nAvailability: Up to 15 seats\r\n\r\nTicket price: Rs. 1400/- per person \r\n\r\nParticipant Age: Applicable for any age above 10 Years\r\n\r\nMaterials: Art materials would be provided by the host for usage during the workshop', '5de7837965d30.jpg', '2019-12-12 15:55:00', '2019-12-04 15:29:21', 1);

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
(1, 'caption', '5de783968730b.jpg', 1, '0000-00-00 00:00:00'),
(2, 'caption', '5de783968924b.png', 1, '0000-00-00 00:00:00'),
(3, 'caption', '5de783968a9bc.png', 1, '0000-00-00 00:00:00'),
(4, 'caption', '5de783968c514.png', 1, '0000-00-00 00:00:00'),
(5, 'caption', '5de783968dc84.png', 1, '0000-00-00 00:00:00');

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
(1, 'Helmets', 1, '2019-12-02 16:31:35', 1, '2019-12-02 16:31:35'),
(2, 'Riding Gears', 1, '2019-12-02 16:32:36', 1, '2019-12-02 16:32:36');

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
(1, 1, 'Bharat Kumar', '9934123737', 'Bengaluru', 858614, 'Btm layout', 'Gangothri circle', 0, '0000-00-00 00:00:00');

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
(1, 'Helmet', 'http://192.168.0.132/motostore/product/lists/VFZFOVBRPT0=/Y2F0Ymxhbms=', '12000', '5de5016914158.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `moto_ride`
--

CREATE TABLE `moto_ride` (
  `id` int(11) NOT NULL,
  `placetype` int(11) NOT NULL,
  `place` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `price` float NOT NULL,
  `images` varchar(100) NOT NULL,
  `Itinerary` text NOT NULL,
  `ridedate` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `moto_ride`
--

INSERT INTO `moto_ride` (`id`, `placetype`, `place`, `title`, `price`, `images`, `Itinerary`, `ridedate`, `status`, `created`) VALUES
(1, 2, 2, ' Nandi Hills, 60 km from Bangalore', 4345, '5de7817f4fdd6.png', '<p><span style=\"color: rgb(33, 37, 41); font-family: manrope, sans-serif; font-size: 16px; letter-spacing: 0.3px;\">Some 70 odd kilometers from&nbsp;</span><a href=\"https://www.holidify.com/bangalore\" target=\"_blank\" rel=\"noopener noreferrer\" data-mce-href=\"https://www.holidify.com/bangalore\" style=\"color: rgb(61, 129, 187); background-color: rgb(255, 255, 255); font-family: manrope, sans-serif; font-size: 16px; letter-spacing: 0.3px;\">Bangalore</a><span style=\"color: rgb(33, 37, 41); font-family: manrope, sans-serif; font-size: 16px; letter-spacing: 0.3px;\">,&nbsp;</span><a href=\"https://www.holidify.com/nandi\" target=\"_blank\" rel=\"noopener noreferrer\" data-mce-href=\"https://www.holidify.com/nandi\" style=\"color: rgb(61, 129, 187); background-color: rgb(255, 255, 255); font-family: manrope, sans-serif; font-size: 16px; letter-spacing: 0.3px;\">Nandi Hills</a><span style=\"color: rgb(33, 37, 41); font-family: manrope, sans-serif; font-size: 16px; letter-spacing: 0.3px;\">&nbsp;is a popular destination among not just car and bike enthusiasts, but also among cyclists. One of the most popular road trips from Bangalore, head over&nbsp;if you want to breathe in the beauty of this lovely spot.</span><br style=\"color: rgb(33, 37, 41); font-family: manrope, sans-serif; font-size: 16px; letter-spacing: 0.3px;\"><span style=\"font-weight: bolder; font-family: &quot;manrope bold&quot;, sans-serif; color: rgb(33, 37, 41); font-size: 16px; letter-spacing: 0.3px;\">Bangalore to Nandi Hills Road Condition:</span><span style=\"color: rgb(33, 37, 41); font-family: manrope, sans-serif; font-size: 16px; letter-spacing: 0.3px;\">&nbsp;The 60 km long stretch boasts of roads in good condition and less traffic, so this is a journey to enjoy!</span><br style=\"color: rgb(33, 37, 41); font-family: manrope, sans-serif; font-size: 16px; letter-spacing: 0.3px;\"><span style=\"font-weight: bolder; font-family: &quot;manrope bold&quot;, sans-serif; color: rgb(33, 37, 41); font-size: 16px; letter-spacing: 0.3px;\">Best time to visit:&nbsp;</span><span style=\"color: rgb(33, 37, 41); font-family: manrope, sans-serif; font-size: 16px; letter-spacing: 0.3px;\">Anytime is a good time to take this&nbsp;</span><span style=\"font-weight: bolder; font-family: &quot;manrope bold&quot;, sans-serif; color: rgb(33, 37, 41); font-size: 16px; letter-spacing: 0.3px;\">short road trip from&nbsp;<a href=\"https://www.holidify.com/bangalore\" target=\"_blank\" rel=\"noopener noreferrer\" data-mce-href=\"https://www.holidify.com/bangalore\" style=\"color: rgb(61, 129, 187);\">Bangalore</a></span><span style=\"color: rgb(33, 37, 41); font-family: manrope, sans-serif; font-size: 16px; letter-spacing: 0.3px;\">. However, its a good idea to avoid the rains as it may get slippery on the hills.</span><br></p>', '2019-12-12 00:00:00', 0, '2019-12-04 15:20:55'),
(2, 1, 1, 'Dubai Autodrome', 9856, '5de7828823f49.jpg', '<p><span style=\"font-family: Roboto, sans-serif; font-size: 16px;\">The problem with finding a place to ride bikes in Dubai is the worry that cars are going to make cycling unsafe. Which is why heading to the fastest stretch of road in the entire emirate is advisable. On a Wednesday night the Dubai Autodrome opens up the 2km+ loop for joggers and cyclists. Let kids get down to track level and show off top speeds with a whirl around the track. Perfect for wannabe Chris Hoys.</span><br style=\"font-family: Roboto, sans-serif; font-size: 16px;\"><em style=\"font-family: Roboto, sans-serif; font-size: 16px;\">Free access to cyclists on Wednesdays, 6-9pm, Motor City,&nbsp;</em><br></p>', '2019-12-05 00:00:00', 0, '2019-12-04 15:22:27');

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
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `placename` text NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`id`, `type`, `placename`, `created`) VALUES
(1, 1, 'Dubai', '2019-12-04 15:17:06'),
(2, 2, 'Bangalore', '2019-12-04 15:17:31');

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
(1, '5de5005371601', 1, 1, 2, 'Helmet', '1.jpeg', 'MOTO0001', '1', 'Male', 0, '<p><span style=\"color: rgb(106, 108, 111);\">hat is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing softw</span><br></p>', '2019-12-02 17:47:53', 1, '2019-12-02 17:47:53'),
(3, '5de5e8b38d3c9', 2, 3, 1, 'Jacket', '3.jpg', 'J02125', '1', 'Male', 1, '<div style=\"box-sizing: inherit; color: rgb(112, 112, 112); font-family: Whitney; font-size: medium;\"><p class=\"pdp-product-description-content\" style=\"box-sizing: inherit; margin-top: 12px; line-height: 1.4; font-size: 16px; letter-spacing: 1px; color: rgb(40, 44, 63); width: 400.625px;\">Green solid jacket, has a mock collar, 2 pockets, zip closure, long sleeves, straight hem, and nylon lining with 2 pockets<br style=\"box-sizing: inherit;\">Comes with a pouch bag</p></div><div class=\"pdp-sizeFitDesc\" style=\"box-sizing: inherit; color: rgb(112, 112, 112); border: none; margin-top: 12px; font-family: Whitney; font-size: medium;\"><h4 class=\"pdp-sizeFitDescTitle pdp-product-description-title\" style=\"box-sizing: inherit; margin: 0px; line-height: 28px; font-size: 16px; color: rgb(40, 44, 63); text-transform: capitalize; border: none; padding-bottom: 5px;\"><span style=\"font-weight: normal;\">Size &amp; Fit</span></h4><p class=\"pdp-sizeFitDescContent pdp-product-description-content\" style=\"box-sizing: inherit; margin-bottom: 0px; line-height: 1.4; font-size: 16px; letter-spacing: 1px; color: rgb(40, 44, 63); width: 429.234px;\">The model (height 6\') is wearing a size M</p></div><div class=\"pdp-sizeFitDesc\" style=\"box-sizing: inherit; color: rgb(112, 112, 112); border: none; margin-top: 12px; font-family: Whitney; font-size: medium;\"><h4 class=\"pdp-sizeFitDescTitle pdp-product-description-title\" style=\"box-sizing: inherit; margin: 0px; line-height: 28px; font-size: 16px; color: rgb(40, 44, 63); text-transform: capitalize; border: none; padding-bottom: 5px;\"><span style=\"font-weight: normal;\">Material &amp; Care</span></h4><p class=\"pdp-sizeFitDescContent pdp-product-description-content\" style=\"box-sizing: inherit; margin-bottom: 0px; line-height: 1.4; font-size: 16px; letter-spacing: 1px; color: rgb(40, 44, 63); width: 429.234px;\">100% Nylon<br style=\"box-sizing: inherit;\">Machine-wash</p></div>', '2019-12-03 10:18:44', 1, '2019-12-03 10:18:44'),
(4, '5de5fdabcdb38', 1, 2, 2, 'Test', '4.jpeg', 'T455', '', '', 1, '<div style=\"box-sizing: inherit; color: rgb(112, 112, 112); font-family: Whitney; font-size: medium;\"><p class=\"pdp-product-description-content\" style=\"box-sizing: inherit; margin-top: 12px; line-height: 1.4; font-size: 16px; letter-spacing: 1px; font-weight: 600; color: rgb(40, 44, 63); width: 400.625px;\">Green solid jacket, has a mock collar, 2 pockets, zip closure, long sleeves, straight hem, and nylon lining with 2 pockets<br style=\"box-sizing: inherit;\">Comes with a pouch bag</p></div><div class=\"pdp-sizeFitDesc\" style=\"box-sizing: inherit; color: rgb(112, 112, 112); border: none; margin-top: 12px; font-family: Whitney; font-size: medium;\"><h4 class=\"pdp-sizeFitDescTitle pdp-product-description-title\" style=\"box-sizing: inherit; margin: 0px; font-weight: 500; line-height: 28px; font-size: 16px; color: rgb(40, 44, 63); text-transform: capitalize; border: none; padding-bottom: 5px;\">Size &amp; Fit</h4><p class=\"pdp-sizeFitDescContent pdp-product-description-content\" style=\"box-sizing: inherit; margin-bottom: 0px; line-height: 1.4; font-size: 16px; letter-spacing: 1px; font-weight: 600; color: rgb(40, 44, 63); width: 429.234px;\">The model (height 6\') is wearing a size M</p></div>', '2019-12-03 11:49:55', 1, '2019-12-03 11:49:55'),
(5, '5de652a84323c', 1, 2, 1, 'product', '5.png', 'MOTO-003', '', 'Male', 0, '                                                <div id=\"mainbar\" role=\"main\" aria-label=\"question and answers\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, \" helvetica=\"\" neue\",=\"\" helvetica,=\"\" sans-serif;=\"\" vertical-align:=\"\" baseline;=\"\" box-sizing:=\"\" inherit;=\"\" float:=\"\" left;=\"\" width:=\"\" calc((100%=\"\" -=\"\" 300px)=\"\" 24px);=\"\" color:=\"\" rgb(36,=\"\" 39,=\"\" 41);\"=\"\"><div class=\"question\" data-questionid=\"36825227\" id=\"question\" style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit; clear: both;\"><div class=\"post-layout\" style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; display: grid; flex-wrap: wrap; justify-content: flex-end; grid-template-columns: max-content 1fr;\"><div class=\"votecell post-layout--left\" style=\"margin: 0px; padding: 0px 15px 0px 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: top; box-sizing: inherit; flex-grow: 0; width: auto; grid-column: 1 / auto;\"><div class=\"js-voting-container grid fd-column ai-stretch gs4 fc-black-200\" data-post-id=\"36825227\" style=\"margin: -2px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit; display: flex; color: rgb(187, 192, 196) !important; flex-direction: column !important; align-items: stretch !important;\"><div class=\"js-vote-count grid--cell fc-black-500 fs-title grid fd-column ai-center\" itemprop=\"upvoteCount\" data-value=\"11\" style=\"margin: 2px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-size: 1.61538rem !important; vertical-align: baseline; box-sizing: inherit; color: rgb(106, 115, 124) !important; flex-direction: column !important; align-items: center !important; display: flex;\"><br></div></div></div><div class=\"postcell post-layout--right\" style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: top; box-sizing: inherit; flex-shrink: 1; width: auto; min-width: 0px; grid-column: 2 / auto;\"><div class=\"post-text\" itemprop=\"text\" style=\"margin: 0px 0px 5px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: 1.3; font-size: 15px; vertical-align: baseline; box-sizing: inherit; width: 675px; overflow-wrap: break-word;\"><h3 style=\"margin-top: 0px; margin-bottom: 0.5rem; line-height: 28px; font-size: 1.75rem; color: rgb(112, 112, 112); font-family: Roboto;\">product</h3><p style=\"line-height: 20px; font-size: 0.9rem; letter-spacing: 1px; font-weight: 600; color: rgb(112, 112, 112); font-family: Roboto;\">Product Code : MOTO-003</p><div class=\"product-price\" style=\"color: rgb(112, 112, 112); font-family: Roboto; font-size: 14px;\"><span style=\"font-weight: bolder;\">Rs.</span>&nbsp;<del id=\"regularprice\">122</del>&nbsp;<span class=\"slash\" id=\"offerprice\" style=\"font-size: 20px;\">120</span></div><div class=\"product-overview\" style=\"color: rgb(112, 112, 112); font-family: Roboto; font-size: 14px;\"><p style=\"line-height: 20px; font-size: 0.9rem; letter-spacing: 1px; font-weight: 600;\">Availability:&nbsp;<span style=\"font-weight: bolder;\"><span id=\"stock\"><span style=\"color: red;\">Out Of Stock</span></span></span></p><h5 class=\"title-border mt-5\" style=\"margin-bottom: 25px; font-weight: 500; line-height: 28px; font-size: 1.25rem; padding-bottom: 15px; position: relative; margin-top: 3rem !important;\">Description</h5></div></div><div class=\"post-taglist grid gs4 gsy fd-column\" style=\"margin: -2px 0px 10px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit; display: flex; clear: both; flex-direction: column !important;\"></div></div></div></div></div>                                        ', '2019-12-03 17:54:33', 1, '2019-12-03 17:54:33'),
(13, '5de766fb360ff', 1, 2, 2, 'ertert', '13.png', 'MOTO-004', '', '', 1, '<p>tryrtyrt</p>', '2019-12-04 13:30:01', 1, '2019-12-04 13:30:01'),
(14, '5de778afe026c', 1, 1, 1, 'Test Product', '14.png', 'MOTO-005', '', '', 0, '<div style=\"color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 14px; float: left;\">1.</div><div style=\"color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 14px; margin-left: 20px;\"><div class=\"QIclbb XpoqFe\" style=\"font-size: small;\"><div data-dobid=\"dfn\" style=\"display: inline;\">a spoken or written account of a person, object, or event.</div><div class=\"vmod\"><div class=\"vk_gy\" style=\"color: rgb(135, 135, 135) !important;\">\"people who had seen him were able to give a description\"</div></div><div jscontroller=\"PDhHxc\" class=\"qFRZdb\" data-dsk=\"true\" data-dtpe=\"false\" data-requery=\"false\" jsaction=\"rcuQ6b:npT2md;see_full_definition:X4aiyd;g_popup_show:yJjTGf;dg_dismissed:pnFSEb;NAozHc:Gmtrjd\"><div jsname=\"KM35l\" class=\"thes-chips-wrapper vmod liveresults-dictionary-thesaurus__tcl-o\" style=\"overflow: hidden; position: relative; max-height: 30px;\"><div jsname=\"deRYT\" class=\"thes-chips-container CqMNyc\" role=\"list\" style=\"display: flex; max-width: 100%; flex-wrap: wrap; padding-right: 24px;\"><div class=\"k6UgDb\" aria-hidden=\"true\" style=\"flex-basis: 100%; width: 0px; height: 0px; overflow: hidden;\"></div><div class=\"q3q3Oc vmod fA5izc qFRZdb\" style=\"letter-spacing: 0px; display: inline-block; margin-top: 6px; margin-bottom: 2px; margin-right: 8px; font-size: 13px; height: 24px; line-height: 24px;\"><div class=\"pdpvld\" style=\"color: rgb(24, 128, 56);\">Similar:</div></div><div data-mh=\"-1\" role=\"listitem\"><div jsname=\"F457ec\" class=\"lLE0jd gWUzU F5z5N liveresults-dictionary-thesaurus__chips-text LsYFnd yaeTXd I6a0ee rjpYgb liveresults-dictionary-thesaurus__tcl-s\" jsaction=\"click:DAFmqe;\" role=\"button\" data-ved=\"2ahUKEwjL79rV05vmAhVPyjgGHV2KAgcQ8I0DMAB6BAgGEAo\" style=\"display: inline-block; color: rgb(60, 64, 67); text-align: center; line-height: 22px; height: 22px; float: left; max-width: 250px; overflow: hidden; text-overflow: ellipsis; position: relative; border: 1px solid rgb(218, 220, 224); border-radius: 32px; white-space: nowrap; padding: 0px 12px; margin-right: 4px; margin-top: 6px; font-size: 13px;\">account<div id=\"_x3jnXYvwMM-U4-EP3ZSKOA24\"><div jsname=\"sUPGue\" data-au=\"//ssl.gstatic.com/dictionary/static/sounds/20180430/account--_gb_1.mp3\" data-df=\"a report or description of an event or experience.\" data-ex=\"a detailed account of what has been achieved\" data-hw=\"account\" data-lb=\"\" data-tae=\"false\" data-te=\"false\" data-tl=\"en\" data-tldf=\"\" data-url=\"/search?rlz=1C1CHBF_enIN821IN822&amp;sxsrf=ACYBGNQAaiD8IWKylHqK4NDUFzn3cWh9IA:1575450823806&amp;q=define+account&amp;forcedict=account&amp;dictcorpus=en\"></div></div></div><div jsname=\"Stv3Z\" class=\"gWUzU F5z5N AsWFZc Inx6Z VV0w7 I6a0ee En7IMd rjpYgb liveresults-dictionary-thesaurus__tcl-s\" aria-hidden=\"true\" tabindex=\"-1\" jsaction=\"Aq3Esf\" data-ved=\"2ahUKEwjL79rV05vmAhVPyjgGHV2KAgcQ8Y0DMAB6BAgGEAs\" style=\"display: inline-block; position: relative; z-index: 0; border: 1px solid rgb(218, 220, 224); border-radius: 32px; white-space: nowrap; cursor: pointer; background-origin: content-box; background-position: center center; background-repeat: no-repeat; background-image: url(&quot;data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMHB4IiBoZWlnaHQ9IjIwcHgiIHZpZXdCb3g9IjAgMCA0OCA0OCIgZmlsbD0iIzc1NzU3NSI+CiAgICA8cGF0aCBkPSJNMzMuMTcgMTcuMTdMMjQgMjYuMzRsLTkuMTctOS4xN0wxMiAyMGwxMiAxMiAxMi0xMnoiLz4KICAgIDxwYXRoIGQ9Ik0wIDBoNDh2NDhIMHoiIGZpbGw9Im5vbmUiLz4KPC9zdmc+Cg==&quot;); margin-top: 6px; height: 22px; line-height: 22px; width: 22px; margin-right: -24px;\"></div></div><div data-mh=\"-1\" role=\"listitem\"><div jsname=\"F457ec\" class=\"lLE0jd gWUzU F5z5N liveresults-dictionary-thesaurus__chips-text LsYFnd yaeTXd I6a0ee rjpYgb liveresults-dictionary-thesaurus__tcl-s\" jsaction=\"click:DAFmqe;\" role=\"button\" data-ved=\"2ahUKEwjL79rV05vmAhVPyjgGHV2KAgcQ8I0DMAB6BAgGEAw\" style=\"display: inline-block; color: rgb(60, 64, 67); text-align: center; line-height: 22px; height: 22px; float: left; max-width: 250px; overflow: hidden; text-overflow: ellipsis; position: relative; border: 1px solid rgb(218, 220, 224); border-radius: 32px; white-space: nowrap; padding: 0px 12px; margin-right: 4px; margin-top: 6px; font-size: 13px;\">explanation<div id=\"_x3jnXYvwMM-U4-EP3ZSKOA26\"><div jsname=\"sUPGue\" data-au=\"//ssl.gstatic.com/dictionary/static/sounds/20180430/explanation--_gb_1.mp3\" data-df=\"a statement or account that makes something clear.\" data-ex=\"the birth rate is central to any explanation of population trends\" data-hw=\"explanation\" data-lb=\"\" data-tae=\"false\" data-te=\"false\" data-tl=\"en\" data-tldf=\"\" data-url=\"/search?rlz=1C1CHBF_enIN821IN822&amp;sxsrf=ACYBGNQAaiD8IWKylHqK4NDUFzn3cWh9IA:1575450823806&amp;q=define+explanation&amp;forcedict=explanation&amp;dictcorpus=en\"></div></div></div><div jsname=\"Stv3Z\" class=\"gWUzU F5z5N AsWFZc Inx6Z VV0w7 I6a0ee En7IMd rjpYgb liveresults-dictionary-thesaurus__tcl-s\" aria-hidden=\"true\" tabindex=\"-1\" jsaction=\"Aq3Esf\" data-ved=\"2ahUKEwjL79rV05vmAhVPyjgGHV2KAgcQ8Y0DMAB6BAgGEA0\" style=\"display: inline-block; position: relative; z-index: 0; border: 1px solid rgb(218, 220, 224); border-radius: 32px; white-space: nowrap; cursor: pointer; background-origin: content-box; background-position: center center; background-repeat: no-repeat; background-image: url(&quot;data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMHB4IiBoZWlnaHQ9IjIwcHgiIHZpZXdCb3g9IjAgMCA0OCA0OCIgZmlsbD0iIzc1NzU3NSI+CiAgICA8cGF0aCBkPSJNMzMuMTcgMTcuMTdMMjQgMjYuMzRsLTkuMTctOS4xN0wxMiAyMGwxMiAxMiAxMi0xMnoiLz4KICAgIDxwYXRoIGQ9Ik0wIDBoNDh2NDhIMHoiIGZpbGw9Im5vbmUiLz4KPC9zdmc+Cg==&quot;); margin-top: 6px; height: 22px; line-height: 22px; width: 22px; margin-right: -24px;\"></div></div><div data-mh=\"-1\" role=\"listitem\"><div jsname=\"F457ec\" class=\"lLE0jd gWUzU F5z5N liveresults-dictionary-thesaurus__chips-text LsYFnd yaeTXd I6a0ee rjpYgb liveresults-dictionary-thesaurus__tcl-s\" jsaction=\"click:DAFmqe;\" role=\"button\" data-ved=\"2ahUKEwjL79rV05vmAhVPyjgGHV2KAgcQ8I0DMAB6BAgGEA4\" style=\"display: inline-block; color: rgb(60, 64, 67); text-align: center; line-height: 22px; height: 22px; float: left; max-width: 250px; overflow: hidden; text-overflow: ellipsis; position: relative; border: 1px solid rgb(218, 220, 224); border-radius: 32px; white-space: nowrap; padding: 0px 12px; margin-right: 4px; margin-top: 6px; font-size: 13px;\">elucidation<div id=\"_x3jnXYvwMM-U4-EP3ZSKOA28\"><div jsname=\"sUPGue\" data-au=\"//ssl.gstatic.com/dictionary/static/sounds/20180430/elucidation--_gb_1.8.mp3\" data-df=\"explanation that makes something clear; clarification.\" data-ex=\"work that led to the elucidation of the structure of proteins\" data-hw=\"elucidation\" data-lb=\"\" data-tae=\"false\" data-te=\"false\" data-tl=\"en\" data-tldf=\"\" data-url=\"/search?rlz=1C1CHBF_enIN821IN822&amp;sxsrf=ACYBGNQAaiD8IWKylHqK4NDUFzn3cWh9IA:1575450823806&amp;q=define+elucidation&amp;forcedict=elucidation&amp;dictcorpus=en\"></div></div></div><div jsname=\"Stv3Z\" class=\"gWUzU F5z5N AsWFZc Inx6Z VV0w7 I6a0ee En7IMd rjpYgb liveresults-dictionary-thesaurus__tcl-s\" aria-hidden=\"true\" tabindex=\"-1\" jsaction=\"Aq3Esf\" data-ved=\"2ahUKEwjL79rV05vmAhVPyjgGHV2KAgcQ8Y0DMAB6BAgGEA8\" style=\"display: inline-block; position: relative; z-index: 0; border: 1px solid rgb(218, 220, 224); border-radius: 32px; white-space: nowrap; cursor: pointer; background-origin: content-box; background-position: center center; background-repeat: no-repeat; background-image: url(&quot;data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMHB4IiBoZWlnaHQ9IjIwcHgiIHZpZXdCb3g9IjAgMCA0OCA0OCIgZmlsbD0iIzc1NzU3NSI+CiAgICA8cGF0aCBkPSJNMzMuMTcgMTcuMTdMMjQgMjYuMzRsLTkuMTctOS4xN0wxMiAyMGwxMiAxMiAxMi0xMnoiLz4KICAgIDxwYXRoIGQ9Ik0wIDBoNDh2NDhIMHoiIGZpbGw9Im5vbmUiLz4KPC9zdmc+Cg==&quot;); margin-top: 6px; height: 22px; line-height: 22px; width: 22px; margin-right: -24px;\"></div></div><div data-mh=\"-1\" role=\"listitem\"><div jsname=\"F457ec\" class=\"lLE0jd gWUzU F5z5N liveresults-dictionary-thesaurus__chips-text LsYFnd yaeTXd I6a0ee rjpYgb liveresults-dictionary-thesaurus__tcl-s\" jsaction=\"click:DAFmqe;\" role=\"button\" data-ved=\"2ahUKEwjL79rV05vmAhVPyjgGHV2KAgcQ8I0DMAB6BAgGEBA\" style=\"display: inline-block; color: rgb(60, 64, 67); text-align: center; line-height: 22px; height: 22px; float: left; max-width: 250px; overflow: hidden; text-overflow: ellipsis; position: relative; border: 1px solid rgb(218, 220, 224); border-radius: 32px; white-space: nowrap; padding: 0px 12px; margin-right: 4px; margin-top: 6px; font-size: 13px;\">illustration<div id=\"_x3jnXYvwMM-U4-EP3ZSKOA30\"><div jsname=\"sUPGue\" data-au=\"//ssl.gstatic.com/dictionary/static/sounds/20180430/illustration--_gb_1.mp3\" data-df=\"a picture illustrating a book, newspaper, etc.\" data-ex=\"an illustration of a yacht\" data-hw=\"illustration\" data-lb=\"\" data-tae=\"false\" data-te=\"false\" data-tl=\"en\" data-tldf=\"\" data-url=\"/search?rlz=1C1CHBF_enIN821IN822&amp;sxsrf=ACYBGNQAaiD8IWKylHqK4NDUFzn3cWh9IA:1575450823806&amp;q=define+illustration&amp;forcedict=illustration&amp;dictcorpus=en\"></div></div></div><div jsname=\"Stv3Z\" class=\"gWUzU F5z5N AsWFZc Inx6Z VV0w7 I6a0ee En7IMd rjpYgb liveresults-dictionary-thesaurus__tcl-s\" aria-hidden=\"true\" tabindex=\"-1\" jsaction=\"Aq3Esf\" data-ved=\"2ahUKEwjL79rV05vmAhVPyjgGHV2KAgcQ8Y0DMAB6BAgGEBE\" style=\"display: inline-block; position: relative; z-index: 0; border: 1px solid rgb(218, 220, 224); border-radius: 32px; white-space: nowrap; cursor: pointer; background-origin: content-box; background-position: center center; background-repeat: no-repeat; background-image: url(&quot;data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMHB4IiBoZWlnaHQ9IjIwcHgiIHZpZXdCb3g9IjAgMCA0OCA0OCIgZmlsbD0iIzc1NzU3NSI+CiAgICA8cGF0aCBkPSJNMzMuMTcgMTcuMTdMMjQgMjYuMzRsLTkuMTctOS4xN0wxMiAyMGwxMiAxMiAxMi0xMnoiLz4KICAgIDxwYXRoIGQ9Ik0wIDBoNDh2NDhIMHoiIGZpbGw9Im5vbmUiLz4KPC9zdmc+Cg==&quot;); margin-top: 6px; height: 22px; line-height: 22px; width: 22px; margin-right: -24px;\"></div></div><div data-mh=\"-1\" role=\"listitem\"><div jsname=\"F457ec\" class=\"lLE0jd gWUzU F5z5N liveresults-dictionary-thesaurus__chips-text LsYFnd yaeTXd I6a0ee rjpYgb liveresults-dictionary-thesaurus__tcl-s\" jsaction=\"click:DAFmqe;\" role=\"button\" data-ved=\"2ahUKEwjL79rV05vmAhVPyjgGHV2KAgcQ8I0DMAB6BAgGEBI\" style=\"display: inline-block; color: rgb(60, 64, 67); text-align: center; line-height: 22px; height: 22px; float: left; max-width: 250px; overflow: hidden; text-overflow: ellipsis; position: relative; border: 1px solid rgb(218, 220, 224); border-radius: 32px; white-space: nowrap; padding: 0px 12px; margin-right: 4px; margin-top: 6px; font-size: 13px;\">representation<div id=\"_x3jnXYvwMM-U4-EP3ZSKOA32\"><div jsname=\"sUPGue\" data-au=\"//ssl.gstatic.com/dictionary/static/sounds/20180430/representation--_gb_1.mp3\" data-df=\"the description or portrayal of someone or something in a particular way.\" data-ex=\"the representation of women in newspapers\" data-hw=\"representation\" data-lb=\"\" data-tae=\"false\" data-te=\"false\" data-tl=\"en\" data-tldf=\"\" data-url=\"/search?rlz=1C1CHBF_enIN821IN822&amp;sxsrf=ACYBGNQAaiD8IWKylHqK4NDUFzn3cWh9IA:1575450823806&amp;q=define+representation&amp;forcedict=representation&amp;dictcorpus=en\"></div></div></div><div jsname=\"Stv3Z\" class=\"gWUzU F5z5N AsWFZc Inx6Z VV0w7 I6a0ee En7IMd rjpYgb liveresults-dictionary-thesaurus__tcl-s\" aria-hidden=\"true\" tabindex=\"-1\" jsaction=\"Aq3Esf\" data-ved=\"2ahUKEwjL79rV05vmAhVPyjgGHV2KAgcQ8Y0DMAB6BAgGEBM\" style=\"display: inline-block; position: relative; z-index: 0; border: 1px solid rgb(218, 220, 224); border-radius: 32px; white-space: nowrap; cursor: pointer; background-origin: content-box; background-position: center center; background-repeat: no-repeat; background-image: url(&quot;data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMHB4IiBoZWlnaHQ9IjIwcHgiIHZpZXdCb3g9IjAgMCA0OCA0OCIgZmlsbD0iIzc1NzU3NSI+CiAgICA8cGF0aCBkPSJNMzMuMTcgMTcuMTdMMjQgMjYuMzRsLTkuMTctOS4xN0wxMiAyMGwxMiAxMiAxMi0xMnoiLz4KICAgIDxwYXRoIGQ9Ik0wIDBoNDh2NDhIMHoiIGZpbGw9Im5vbmUiLz4KPC9zdmc+Cg==&quot;); margin-top: 6px; height: 22px; line-height: 22px; width: 22px; margin-right: -24px;\"></div></div></div></div></div></div></div>', '2019-12-04 14:44:21', 1, '2019-12-04 14:44:21');

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
(1, 1, '5de5005371601', 1),
(2, 1, '5de5005371601', 2),
(3, NULL, '5de5e4e9d7192', 1),
(4, 2, '5de5e6b959fa8', 1),
(5, 2, '5de5e6b959fa8', 2),
(6, 3, '5de5e8b38d3c9', 1),
(7, 3, '5de5e8b38d3c9', 2),
(8, NULL, '5de5eebd32c26', 0),
(9, NULL, '5de5e8b38d3c9', 0),
(10, NULL, '5de5f5246154a', 1),
(11, NULL, '5de5f5246154a', 2),
(12, NULL, '5de5f703add92', 1),
(13, NULL, '5de5f72c01cda', 1),
(14, NULL, '5de5f8e766b8c', 1),
(15, NULL, '5de5f8e766b8c', 2),
(16, NULL, '5de5f9e72bcb1', 1),
(17, NULL, '5de5fbeca67f8', 1),
(18, NULL, '5de5fc0812717', 2),
(19, 4, '5de5fdabcdb38', 1),
(20, 4, '5de5fdabcdb38', 2),
(21, NULL, '5de65453393b9', 1),
(22, NULL, '5de74a08610fc', 2),
(23, NULL, '5de74a08610fc', 1),
(24, NULL, '5de77c16ab9d2', 1),
(25, NULL, '5de79ebac1a43', 2),
(26, NULL, '5de79f82a3f64', 2),
(27, NULL, '5de7a28b35b64', 1),
(28, NULL, '5de7a28b35b64', 2),
(29, NULL, '5de7a912e9cb6', 1),
(30, NULL, '5de7a912e9cb6', 2),
(31, NULL, '5de7aa493ca31', 1),
(32, NULL, '5de7aa79ce945', 1),
(33, NULL, '5de7aa79ce945', 2);

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
(1, '5de5005371601', 1, 1, 1, 1),
(2, '5de5005371601', 1, 2, 2, 1),
(3, '5de5e6b959fa8', 2, 1, 1, 1),
(4, '5de5e6b959fa8', 2, 2, 2, 1),
(5, '5de5e8b38d3c9', 3, 1, 1, 1),
(6, '5de5e8b38d3c9', 3, 2, 2, 1),
(7, '5de5fdabcdb38', 4, 1, 1, 1),
(8, '5de5fdabcdb38', 4, 2, 2, 1),
(9, '5de74a08610fc', 0, 2, 2, 1),
(10, '5de74a08610fc', 0, 2, 3, 1),
(11, '5de74a08610fc', 0, 1, 1, 1),
(12, '5de77c16ab9d2', 0, 1, 1, 1),
(13, '5de7a28b35b64', 0, 1, 1, 1),
(14, '5de7a28b35b64', 0, 1, 4, 1),
(15, '5de7a28b35b64', 0, 2, 2, 1),
(16, '5de7a28b35b64', 0, 2, 3, 1),
(17, '5de7a912e9cb6', 0, 1, 1, 1),
(18, '5de7a912e9cb6', 0, 2, 2, 1),
(19, '5de7a912e9cb6', 0, 2, 3, 1),
(20, '5de7a912e9cb6', 0, 1, 4, 1),
(21, '5de7aa79ce945', 0, 1, 1, 1),
(22, '5de7aa79ce945', 0, 1, 4, 1),
(23, '5de7aa79ce945', 0, 2, 2, 1),
(24, '5de7aa79ce945', 0, 2, 3, 1);

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
(3, 1, 2, 2400, '2019-12-05 15:27:37');

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

--
-- Dumping data for table `product_cart_iteam`
--

INSERT INTO `product_cart_iteam` (`id`, `rowid`, `userid`, `proid`, `variationid`, `qty`, `price`, `subtotal`, `created`) VALUES
(3, 'a87ff679a2f3e71d9181a67b7542122c', 1, 4, 4, 1, 1200, 1200, '2019-12-05 13:15:39');

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
(1, 1, 1, 0, 12, 0, 12000, 11000, 10, '0000-00-00 00:00:00', 1, 2, '0000-00-00 00:00:00', 1, 0, '2019-12-02 17:47:53'),
(2, 2, 1, 0, 123, 1, 1233, 1232, 0, '0000-00-00 00:00:00', 1, 2, '0000-00-00 00:00:00', 1, 0, '2019-12-03 10:11:24'),
(3, 3, 1, 0, 45, 1, 45, 44, 1, '0000-00-00 00:00:00', 1, 2, '0000-00-00 00:00:00', 1, 0, '2019-12-03 10:18:44'),
(4, 4, 1, 0, 12, 1, 1200, 1200, 2, '0000-00-00 00:00:00', 1, 2, '0000-00-00 00:00:00', 1, 0, '2019-12-03 11:49:55'),
(5, 5, 0, 0, 12, 0, 122, 120, 1.63934, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 1, 0, '2019-12-03 17:54:33'),
(6, 7, 0, 0, 113, 1, 1231, 312, 74.6548, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 1, 0, '2019-12-04 12:39:27'),
(7, 8, 0, 0, 45, 1, 45, 45, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 1, 0, '2019-12-04 12:45:43'),
(8, 9, 0, 0, 45, 1, 45, 45, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 1, 0, '2019-12-04 12:47:15'),
(9, 10, 0, 0, 121, 0, 321, 320, 0.311526, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 1, 0, '2019-12-04 13:10:33'),
(10, 11, 0, 0, 43, 1, 34, 34, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 1, 0, '2019-12-04 13:15:48'),
(11, 12, 0, 0, 3, 1, 3434, 34, 99.0099, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 1, 0, '2019-12-04 13:18:31'),
(12, 13, 0, 0, 34564, 1, 34, 3, 91.1765, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 1, 0, '2019-12-04 13:30:01'),
(13, 14, 0, 0, 12, 1, 1234, 123, 90.0324, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 1, 0, '2019-12-04 14:44:21');

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
(1, '19120205531', 1, 1, 11000, '1', 0, '2019-12-02'),
(2, '19120312161', 1, 1, 44, '1', 9, '2019-12-03'),
(3, '19120305561', 1, 1, 120, '1', 2, '2019-12-03'),
(4, '19120402461', 1, 1, 246, '1', 3, '2019-12-04'),
(5, '19120510351', 1, 2, 13400, '1', 0, '2019-12-05');

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
(1, '19120205531', 1, 1, 1, 1, 11000, 11000, 0, '2019-12-02 17:53:37'),
(2, '19120312161', 1, 3, 3, 1, 44, 44, 0, '2019-12-03 12:16:20'),
(3, '19120305561', 1, 5, 5, 1, 120, 120, 0, '2019-12-03 17:56:36'),
(4, '19120402461', 1, 14, 13, 2, 123, 246, 0, '2019-12-04 14:46:02'),
(5, '19120510351', 1, 1, 1, 1, 11000, 11000, 0, '2019-12-05 10:35:05'),
(6, '19120510351', 1, 4, 4, 2, 1200, 2400, 0, '2019-12-05 10:35:05');

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
(1, 2, 'Blue'),
(2, 2, 'Green'),
(4, 4, 'Red'),
(5, 5, 'Blue'),
(6, 5, 'Red'),
(7, 12, 'Blue'),
(8, 12, 'Green');

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

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `images` varchar(100) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `images`, `created`) VALUES
(29, 'First', '5de6395555412.png', '2019-12-03 16:00:45'),
(30, 'Second', '5de63960811ca.png', '2019-12-03 16:00:56'),
(31, 'Thierd', '5de6396de8d09.png', '2019-12-03 16:01:09');

-- --------------------------------------------------------

--
-- Table structure for table `subscribed`
--

CREATE TABLE `subscribed` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribed`
--

INSERT INTO `subscribed` (`id`, `email`, `created`, `status`) VALUES
(4, 'bharat.bkj01@gmail.com', '2008-09-26 00:15:01', 0),
(5, 'bh@gmail.com', '2008-09-26 00:19:31', 0),
(6, 'bh@gmail.com', '2008-09-26 00:20:26', 0),
(7, 'gf@gmail.com', '2019-12-03 15:01:38', 0);

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
(1, 1, 'Full face', 1, '2019-12-02 17:36:05', 1, '2019-12-02 17:36:05'),
(2, 1, 'Half Face', 1, '2019-12-02 17:36:13', 1, '2019-12-02 17:36:13'),
(3, 2, 'Jacket', 1, '2019-12-02 17:36:35', 1, '2019-12-02 17:36:35');

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
(1, 'Bharat Kumar', '9934123737', 'bharat.bkj01@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Bengaluru', 'Btm layout', 'Gangothri circle', '858614', 0, '2019-12-02 14:56:04');

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
-- Indexes for table `moto_ride`
--
ALTER TABLE `moto_ride`
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
-- Indexes for table `place`
--
ALTER TABLE `place`
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
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribed`
--
ALTER TABLE `subscribed`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `attribute`
--
ALTER TABLE `attribute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT for table `cafe_event`
--
ALTER TABLE `cafe_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cafe_gallery`
--
ALTER TABLE `cafe_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `deliveryaddress`
--
ALTER TABLE `deliveryaddress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_tiles`
--
ALTER TABLE `home_tiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `moto_ride`
--
ALTER TABLE `moto_ride`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product_attribute`
--
ALTER TABLE `product_attribute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `product_attribute_value`
--
ALTER TABLE `product_attribute_value`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `product_cart`
--
ALTER TABLE `product_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_cart_iteam`
--
ALTER TABLE `product_cart_iteam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `product_image`
--
ALTER TABLE `product_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_order`
--
ALTER TABLE `product_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_order_iteam`
--
ALTER TABLE `product_order_iteam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_tag`
--
ALTER TABLE `product_tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `subscribed`
--
ALTER TABLE `subscribed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
