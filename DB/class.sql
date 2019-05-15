-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 15, 2019 at 09:53 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `upskillsnew`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

DROP TABLE IF EXISTS `class`;
CREATE TABLE IF NOT EXISTS `class` (
  `class_id` int(3) NOT NULL AUTO_INCREMENT,
  `course_id` text NOT NULL,
  `days` text NOT NULL,
  `total_hours` int(50) NOT NULL,
  `hours_perday` text NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  PRIMARY KEY (`class_id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `course_id`, `days`, `total_hours`, `hours_perday`, `start_time`, `end_time`, `start_date`, `end_date`) VALUES
(19, '21', 'Monday', 40, '40', '01:00:00', '03:00:00', '2019-04-08', '2019-04-08'),
(22, '21', 'Sunday', 10, '40', '02:00:00', '00:00:00', '2019-04-08', '2019-04-08'),
(23, '21', 'Sunday,Tuesday', 10, '40', '01:00:00', '02:00:00', '2019-04-08', '2019-04-08'),
(27, '21', 'Sunday,Monday', 10, '40', '01:00:00', '01:00:00', '2019-04-08', '2019-04-08'),
(30, '21', 'Sunday,Monday', 40, '40', '01:00:00', '01:00:00', '2019-04-08', '2019-04-08'),
(32, '35', 'Sunday,Monday,Tuesday,Wndnesday', 50, '4', '13:00:00', '15:00:00', '2019-04-08', '2019-04-08');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
