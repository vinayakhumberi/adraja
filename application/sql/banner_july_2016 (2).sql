-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 17, 2016 at 05:25 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `banner_july_2016`
--

-- --------------------------------------------------------

--
-- Table structure for table `analytics`
--

CREATE TABLE IF NOT EXISTS `analytics` (
  `analytic_id` int(11) NOT NULL AUTO_INCREMENT,
  `bill_id` int(11) DEFAULT NULL,
  `design_id` int(11) DEFAULT NULL,
  `print_id` int(11) DEFAULT NULL,
  `analytic_properties` varchar(255) DEFAULT NULL,
  `analytic_likes` int(11) DEFAULT NULL,
  `andlytic_dislikes` int(11) DEFAULT NULL,
  `analytic_counters` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_on` datetime NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`analytic_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE IF NOT EXISTS `area` (
  `area_id` int(10) NOT NULL AUTO_INCREMENT,
  `area_name` varchar(255) DEFAULT NULL,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL,
  `city_id` int(10) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_on` datetime NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`area_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`area_id`, `area_name`, `latitude`, `longitude`, `city_id`, `is_deleted`, `created_on`, `created_by`, `modified_on`, `modified_by`) VALUES
(1, 'Silk Board', 12.9164, 77.6195, 1, 0, '2016-07-28 00:00:00', 119, '2016-07-28 18:00:08', 119),
(2, 'Udpi Garden', 12.9138, 77.6106, 1, 0, '2016-07-28 00:00:00', 119, '2016-07-28 18:00:08', 119);

-- --------------------------------------------------------

--
-- Table structure for table `billboards`
--

CREATE TABLE IF NOT EXISTS `billboards` (
  `bill_id` int(10) NOT NULL AUTO_INCREMENT,
  `bill_name` varchar(255) DEFAULT NULL,
  `bill_address` varchar(255) DEFAULT NULL,
  `bill_description` text,
  `bill_owner_user_id` int(11) DEFAULT NULL,
  `area_id` int(11) DEFAULT NULL,
  `dimensions` varchar(20) DEFAULT NULL,
  `direction` varchar(256) DEFAULT NULL,
  `lighting` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0-Not light 1-Front light 2-Back light',
  `price` int(10) DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_on` datetime NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`bill_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `billboards`
--

INSERT INTO `billboards` (`bill_id`, `bill_name`, `bill_address`, `bill_description`, `bill_owner_user_id`, `area_id`, `dimensions`, `direction`, `lighting`, `price`, `is_deleted`, `created_on`, `created_by`, `modified_on`, `modified_by`) VALUES
(1, 'Silkboard Gold', 'Central silkboard circle ', 'Very great billboard with a history of 15+ years.', 1, 1, '1230x1503', 'Towards Bhanshankri,\nFacing Whitefeild', 0, NULL, 0, '0000-00-00 00:00:00', NULL, '2016-09-04 05:22:18', NULL),
(2, 'Silkboard Silver', 'Near Silkboard Circle', 'Cool very cool billboard that defies gravity.', 1, 1, '1239x7895', 'Towards Electronic city Facing Kormangala', 1, 12345, 0, '2016-09-04 00:00:00', 119, '2016-09-04 10:36:32', 119);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `city_id` int(10) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(255) NOT NULL,
  `state_id` int(10) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_on` datetime NOT NULL,
  `created_by` int(10) DEFAULT NULL,
  `modified_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` int(10) DEFAULT NULL,
  PRIMARY KEY (`city_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`, `state_id`, `is_deleted`, `created_on`, `created_by`, `modified_on`, `modified_by`) VALUES
(1, 'Bengaluru', 1, 0, '2016-07-28 00:00:00', 119, '2016-07-28 17:55:15', 119),
(2, 'Hubli', 1, 0, '2016-07-28 00:00:00', 119, '2016-07-28 17:55:15', 119),
(3, 'Belgaum', 1, 0, '2016-07-31 00:00:00', 119, '2016-07-31 08:33:41', 119);

-- --------------------------------------------------------

--
-- Table structure for table `combination`
--

CREATE TABLE IF NOT EXISTS `combination` (
  `combination_id` int(11) NOT NULL AUTO_INCREMENT,
  `bill_id` int(11) DEFAULT NULL,
  `design_id` int(11) DEFAULT NULL,
  `print_id` int(11) DEFAULT NULL,
  `combination_by` varchar(255) DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_on` datetime NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`combination_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `designer`
--

CREATE TABLE IF NOT EXISTS `designer` (
  `designer_id` int(11) NOT NULL AUTO_INCREMENT,
  `designer_name` varchar(256) DEFAULT NULL,
  `designer_description` text,
  `designer_user_id` int(11) DEFAULT NULL,
  `designer_link` varchar(255) DEFAULT NULL,
  `area_id` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_on` datetime NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`designer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `designer`
--

INSERT INTO `designer` (`designer_id`, `designer_name`, `designer_description`, `designer_user_id`, `designer_link`, `area_id`, `is_deleted`, `created_on`, `created_by`, `modified_on`, `modified_by`) VALUES
(1, 'Ghanti Photography', 'very good and pleasant designs', 2, 'https://www.facebook.com/ghantiphotography/photos/pb.611589382275570.-2207520000.1465264052./679391032162071/?type=3,https://www.facebook.com/ghantiphotography/photos/pb.611589382275570.-2207520000.1465264052./679391032162071/?type=3', 1, 0, '2016-09-06 00:00:00', 119, '2016-09-06 16:17:56', 119),
(2, 'Saikiran Giraddi', 'Good good !!', 3, NULL, 1, 0, '2016-09-06 00:00:00', 119, '2016-09-06 05:42:44', 119);

-- --------------------------------------------------------

--
-- Table structure for table `filters`
--

CREATE TABLE IF NOT EXISTS `filters` (
  `filter_id` int(11) NOT NULL AUTO_INCREMENT,
  `filter_name` varchar(255) DEFAULT NULL,
  `filter_type` varchar(255) DEFAULT NULL,
  `bill_id` int(11) DEFAULT NULL,
  `design_id` int(11) DEFAULT NULL,
  `print_id` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_on` datetime NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`filter_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE IF NOT EXISTS `pictures` (
  `picture_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `bill_id` int(11) DEFAULT NULL,
  `design_id` int(11) DEFAULT NULL,
  `print_id` int(11) DEFAULT NULL,
  `picture_link` varchar(255) DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_on` datetime NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`picture_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`picture_id`, `user_id`, `bill_id`, `design_id`, `print_id`, `picture_link`, `is_deleted`, `created_on`, `created_by`, `modified_on`, `modified_by`) VALUES
(1, NULL, 1, NULL, NULL, 'http://www.w3schools.com/bootstrap/img_flower.jpg', 0, '2016-09-04 00:00:00', 119, '2016-09-04 06:10:55', 119),
(2, NULL, 1, NULL, NULL, 'http://www.w3schools.com/bootstrap/img_chania.jpg', 0, '2016-09-04 00:00:00', 119, '2016-09-04 06:11:59', 119),
(3, NULL, 1, NULL, NULL, 'http://www.w3schools.com/bootstrap/img_chania2.jpg', 0, '2016-09-04 00:00:00', 119, '2016-09-04 06:11:59', 119);

-- --------------------------------------------------------

--
-- Table structure for table `printer`
--

CREATE TABLE IF NOT EXISTS `printer` (
  `print_id` int(11) NOT NULL AUTO_INCREMENT,
  `print_address` varchar(255) DEFAULT NULL,
  `print_description` text,
  `print_user_id` int(11) DEFAULT NULL,
  `print_contact` int(12) DEFAULT NULL,
  `area_id` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_on` datetime NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`print_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `state_id` int(10) NOT NULL AUTO_INCREMENT,
  `state_name` varchar(255) DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_on` datetime NOT NULL,
  `created_by` int(10) DEFAULT NULL,
  `modified_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` int(10) DEFAULT NULL,
  PRIMARY KEY (`state_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state_name`, `is_deleted`, `created_on`, `created_by`, `modified_on`, `modified_by`) VALUES
(1, 'Karnataka', 0, '2016-07-28 00:00:00', 119, '2016-07-28 17:53:41', 119);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) DEFAULT NULL,
  `user_adress` varchar(255) DEFAULT NULL,
  `user_contact` int(12) DEFAULT NULL,
  `is_advertiser` tinyint(1) NOT NULL DEFAULT '0',
  `is_designer` tinyint(1) NOT NULL DEFAULT '0',
  `is_printer` tinyint(1) NOT NULL DEFAULT '0',
  `user_email` varchar(255) DEFAULT NULL,
  `user_password` varchar(255) DEFAULT NULL,
  `area_id` int(11) DEFAULT NULL,
  `user_social` varchar(255) DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_on` datetime NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_adress`, `user_contact`, `is_advertiser`, `is_designer`, `is_printer`, `user_email`, `user_password`, `area_id`, `user_social`, `is_deleted`, `created_on`, `created_by`, `modified_on`, `modified_by`) VALUES
(1, 'Ram Kishan Advertisements', 'Jaynagar 4th block', 2147483647, 1, 0, 0, 'ram_agencies@gmail.com', '000', 1, NULL, 0, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
