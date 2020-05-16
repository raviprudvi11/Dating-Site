-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 24, 2019 at 12:15 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dating_table`
--

-- --------------------------------------------------------

--
-- Table structure for table `favourite_table`
--

DROP TABLE IF EXISTS `favourite_table`;
CREATE TABLE IF NOT EXISTS `favourite_table` (
  `user_id` varchar(100) NOT NULL,
  `fav_id` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

DROP TABLE IF EXISTS `user_table`;
CREATE TABLE IF NOT EXISTS `user_table` (
  `user_id` int(100) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) DEFAULT NULL,
  `phone` int(25) DEFAULT NULL,
  `age` int(10) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `user_type` varchar(100) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `postal_code` varchar(100) DEFAULT NULL,
  `profile_pic` longblob,
  `send_notification` tinyint(1) DEFAULT NULL,
  `rating` int(10) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `email`, `phone`, `age`, `password`, `user_type`, `first_name`, `last_name`, `gender`, `postal_code`, `profile_pic`, `send_notification`, `rating`) VALUES
(1, 'hfhhggh@jsjg.gsh', 123456, 22, '123456', NULL, 'anna', 'alex', 'female', '123456', NULL, NULL, NULL),
(2, 'hdvdhg@hgsjdh.hdf', 1046625255, 24, '123456', NULL, 'christina', 'alex', 'female', '741852', NULL, NULL, NULL),
(3, 'hfhhggh@jsjg.gsh', 123456, 22, '123456', NULL, 'anna', 'alex', 'female', '123456', NULL, NULL, NULL),
(4, 'jgsjhgsjg@jsjg.gsh', 123456, 22, '123456', NULL, 'ann', 'austine', 'female', '852963', NULL, NULL, NULL),
(5, 'jgsjhgsjg@jsjg.gsh', 123456, 22, '123456', NULL, 'ann', 'austine', 'female', '852963', NULL, NULL, NULL),
(10, 'hfhhggh@jsjg.gsh', 123456, 22, '123456', NULL, 'anna', 'alex', 'female', '123456', NULL, NULL, NULL),
(6, 'banedarknight@gmail.com', 1, 25, '123456', NULL, 'Bane', 'Alexander', 'female', '683545', NULL, NULL, NULL),
(7, 'hfhhggh@jsjg.gsh', 123456, 22, '123456', NULL, 'anna', 'alex', 'female', '123456', NULL, NULL, NULL),
(8, 'hfhhggh@jsjg.gsh', 123456, 22, '123456', NULL, 'anna', 'alex', 'female', '123456', NULL, NULL, NULL),
(9, 'fcgfhfghg', 45456565, 32, '123456', NULL, 'jbjgj', 'jgjhg', 'female', '125896', NULL, NULL, NULL),
(11, 'fcgfhfghg', 45456565, 32, '123456', NULL, 'jbjgj', 'jgjhg', 'female', '125896', NULL, NULL, NULL),
(12, 'fcgfhfghg', 45456565, 32, '123456', NULL, 'jbjgj', 'jgjhg', 'female', '125896', NULL, NULL, NULL),
(13, 'fcgfhfghg', 45456565, 32, '123456', NULL, 'jbjgj', 'jgjhg', 'female', '125896', NULL, NULL, NULL),
(14, 'fcgfhfghg', 45456565, 32, '123456', NULL, 'jbjgj', 'jgjhg', 'female', '125896', NULL, NULL, NULL),
(15, 'fcgfhfghg', 45456565, 32, '123456', NULL, 'jbjgj', 'jgjhg', 'female', '125896', NULL, NULL, NULL),
(16, 'testemail@gmail.com', 452255522, 25, '123456', NULL, 'Harry', 'sabz', 'female', '1234567', NULL, NULL, NULL),
(17, 'hdvdhg@hgsjdh.hdf', 1046625255, 24, '123456', NULL, 'christina', 'alex', 'female', '741852', NULL, NULL, NULL),
(18, 'nigil141@gjshsj.hdghg', 15452125, 24, '123456', NULL, 'Nigil', 'kurian', 'female', '1122', NULL, NULL, NULL),
(19, 'djgshgdh@gg.hgs', 3552656, 15, '2123344', NULL, 'hjhdgj', 'jhg', 'female', 'female', NULL, NULL, NULL),
(20, 'hggfg@gfg.ghg', 15552, 15, '123456', NULL, 'j', 'hkjg', 'female', '21555', NULL, NULL, NULL),
(21, 'hgfgfgf@hgfhg.dftg', 3659635, 12, '123456', NULL, 'uguyfy', 'hgjh', 'male', '123456', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wink_table`
--

DROP TABLE IF EXISTS `wink_table`;
CREATE TABLE IF NOT EXISTS `wink_table` (
  `user_id` varchar(100) NOT NULL,
  `wink_user_id` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wink_table`
--

INSERT INTO `wink_table` (`user_id`, `wink_user_id`) VALUES
('16', '1'),
('16', '6'),
('31', '1'),
('31', '1'),
('31', '1'),
('31', '2');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
