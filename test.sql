-- phpMyAdmin SQL Dump
-- version 4.1.13
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 17, 2014 at 07:02 PM
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
  `restaurant_id` int(11) NOT NULL,
  `picture` blob NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE IF NOT EXISTS `restaurant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `type` varchar(32) NOT NULL,
  `hrs_operation` time DEFAULT NULL,
  `tel` varchar(32) NOT NULL,
  `price_range` tinyint(4) DEFAULT NULL,
  `take_reservation` tinyint(4) DEFAULT NULL,
  `delivery` tinyint(4) DEFAULT NULL,
  `take_out` tinyint(4) DEFAULT NULL,
  `parking` tinyint(4) DEFAULT NULL,
  `wifi` tinyint(4) DEFAULT NULL,
  `tv` tinyint(4) DEFAULT NULL,
  `alcohol` tinyint(4) DEFAULT NULL,
  `description` tinyint(4) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `menu_url` varchar(255) DEFAULT NULL,
  `sub_district` varchar(45) DEFAULT NULL,
  `district` varchar(45) DEFAULT NULL,
  `province` varchar(45) DEFAULT NULL,
  `zip_code` varchar(8) DEFAULT NULL,
  `country` varchar(32) DEFAULT NULL,
  `date_added` datetime DEFAULT CURRENT_TIMESTAMP,
  `date_last_modified` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `restaurant_id` int(11) NOT NULL,
  `title` varchar(55) NOT NULL,
  `content` text NOT NULL,
  `rating` int(11) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
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
  `activation_key` varchar(255) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `temp_user`
--

INSERT INTO `temp_user` (`id`, `username`, `firstname`, `lastname`, `email`, `password`, `activation_key`, `active`) VALUES
(11, 'nuning', 'Suriyaporn', 'Aekanantakul', 'ji_poom@hotmail.com', '$2y$10$IQsZ7KQdZBO8B0e1IMO.ZO7ug/09dGwdlg0E59KVVHrIbKgWlf34u', '7ad808b72fed5d05412e59e8563c1963', 0),
(12, 'jipoom', 'Jirapat', 'Temvuttirojn', 'jipoom@gmail.com', '$2y$10$OxaBK/lUz1poSiv7UB6z5OH/fZZ0l4zvotU99nwKRd1XBvYOY.zYm', '', 1),
(18, 'sunsunny', 'Jirapat', 'Temvuttirojn', 'suriyaporna@gmail.com', '$2y$10$hPa1jTpjNL.oJyU0d8zntee8pe2EtpsRnECmjsFUkjlQLWKs66qwe', 'e87f996090ae89337ccbae3a24c44a58', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_favorite`
--

CREATE TABLE IF NOT EXISTS `user_favorite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `restaurant_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_unread_content`
--

CREATE TABLE IF NOT EXISTS `user_unread_content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `favorite_id` int(11) NOT NULL,
  `review_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
