-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 07, 2019 at 11:22 AM
-- Server version: 5.5.62-0+deb8u1
-- PHP Version: 5.6.40-0+deb8u2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `upskillsnew`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
`stu_id` int(10) NOT NULL,
  `stu_name` varchar(50) DEFAULT NULL,
  `stu_name_ar` varchar(50) DEFAULT NULL,
  `stu_birth` date DEFAULT NULL,
  `stu_nat` varchar(50) DEFAULT NULL,
  `stu_phone` varchar(50) DEFAULT NULL,
  `stu_mobile` varchar(50) DEFAULT NULL,
  `stu_email` varchar(50) DEFAULT NULL,
  `stu_qualifications` varchar(500) DEFAULT NULL,
  `stu_major` varchar(500) DEFAULT NULL,
  `stu_univ` varchar(500) DEFAULT NULL,
  `stu_job` varchar(500) DEFAULT NULL,
  `category_id` int(3) DEFAULT NULL,
  `emp_name` varchar(300) DEFAULT NULL,
  `reg_date` date DEFAULT NULL,
  `image_sign` text,
  `stu_nat_num` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
 ADD PRIMARY KEY (`stu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
MODIFY `stu_id` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
