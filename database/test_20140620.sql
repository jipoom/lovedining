-- phpMyAdmin SQL Dump
-- version 4.1.13
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 20, 2014 at 06:45 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`) VALUES
(1, 'Italian'),
(2, 'Japanese'),
(4, 'BBQ'),
(5, 'Brunch'),
(6, 'American'),
(7, 'Thai'),
(8, 'Korean');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `review_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `rating` int(11) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `review_id`, `user_id`, `content`, `rating`, `date_added`) VALUES
(1, 1, 21, 'ทดสอบ comment 1', 5, '2014-06-18 21:16:08'),
(2, 1, 20, 'ทดสอบ comment 2', 4, '2014-06-18 21:34:29'),
(3, 2, 22, 'test comment 1', 3, '2014-06-20 00:27:20');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_06_11_163544_create_users_table', 1),
('2012_12_06_225921_migration_cartalyst_sentry_install_users', 2),
('2012_12_06_225929_migration_cartalyst_sentry_install_groups', 2),
('2012_12_06_225945_migration_cartalyst_sentry_install_users_groups_pivot', 2),
('2012_12_06_225988_migration_cartalyst_sentry_install_throttle', 2);

-- --------------------------------------------------------

--
-- Table structure for table `picture`
--

CREATE TABLE IF NOT EXISTS `picture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `review_id` int(11) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `caption` text,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `private_message`
--

CREATE TABLE IF NOT EXISTS `private_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_added` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `review_title` text NOT NULL,
  `restaurant_name` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `tel` varchar(32) NOT NULL,
  `price_range` tinyint(4) DEFAULT NULL,
  `take_reservation` tinyint(4) DEFAULT NULL,
  `delivery` tinyint(4) DEFAULT NULL,
  `take_out` tinyint(4) DEFAULT NULL,
  `parking` tinyint(4) DEFAULT NULL,
  `wifi` tinyint(4) DEFAULT NULL,
  `tv` tinyint(4) DEFAULT NULL,
  `alcohol` tinyint(4) DEFAULT NULL,
  `content` text NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `menu_url` varchar(255) DEFAULT NULL,
  `sub_district` varchar(45) DEFAULT NULL,
  `district` varchar(45) DEFAULT NULL,
  `province` varchar(45) DEFAULT NULL,
  `zip_code` varchar(8) DEFAULT NULL,
  `country` varchar(32) DEFAULT NULL,
  `mon` varchar(45) DEFAULT NULL,
  `tue` varchar(45) DEFAULT NULL,
  `wed` varchar(45) DEFAULT NULL,
  `thu` varchar(45) DEFAULT NULL,
  `fri` varchar(45) DEFAULT NULL,
  `sat` varchar(45) DEFAULT NULL,
  `sun` varchar(45) DEFAULT NULL,
  `date_added` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `review_title`, `restaurant_name`, `category_id`, `tel`, `price_range`, `take_reservation`, `delivery`, `take_out`, `parking`, `wifi`, `tv`, `alcohol`, `content`, `url`, `menu_url`, `sub_district`, `district`, `province`, `zip_code`, `country`, `mon`, `tue`, `wed`, `thu`, `fri`, `sat`, `sun`, `date_added`) VALUES
(1, 'สุดยอดร้านติมซำ', 'test', 0, '0985845442', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ร้านที่อร่อยที่สุดในย่านสามย่าน', NULL, NULL, NULL, NULL, 'กรุงเทพ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2014-06-18 10:59:02'),
(2, 'สุดยอดร้านซูชิ', 'test2', 0, '0985845442', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, 'ชุมพร', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2014-06-18 10:59:05');

-- --------------------------------------------------------

--
-- Table structure for table `review_edit`
--

CREATE TABLE IF NOT EXISTS `review_edit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `review_id` int(11) NOT NULL,
  `date_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `temp_user`
--

CREATE TABLE IF NOT EXISTS `temp_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tel` varchar(12) NOT NULL,
  `salary` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `sex` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `temp_user`
--

INSERT INTO `temp_user` (`id`, `username`, `firstname`, `lastname`, `email`, `password`, `tel`, `salary`, `age`, `sex`) VALUES
(20, 'Ning001', 'Ning', 'Test', 'suriyaporna1@gmail.com', '$2y$10$184TBgbj/wVp4yp5knw5kunoF./OBIXPeoYpzmHYAuCURWdE6m8nu', '988329088', '2', '31-40', 'female'),
(21, 'Ning002', 'Ning', 'Test', 'suriyaporna@gmail.com', '$2y$10$7M0VPZsDEdYsTcrPEy60S.bx0VpAekHIEZPH3GQB8WdKcgkasqhWK', '988329088', '2', '31-40', 'female'),
(22, 'jipoom', 'Jirapat', 'Temvuttirojn', 'jipoom@gmail.com', '$2y$10$CaFwjjmjTumYE.lEfbltvOFAvFBHiJfYKE/JL22svilNEpjMDy7Ia', '985845442', '2', '21-30', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `user_favorite`
--

CREATE TABLE IF NOT EXISTS `user_favorite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `review_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_unread_content`
--

CREATE TABLE IF NOT EXISTS `user_unread_content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `review_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
