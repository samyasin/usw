-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2019 at 04:20 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `upskills`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `admin_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_password`, `full_name`, `admin_image`) VALUES
(1, 'mohammad@yahoo.com', '1234', 'mohammad muhsen', '1552423698-PicsArt_01-03-01.34.13.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `album_id` int(11) NOT NULL,
  `album_name` varchar(255) NOT NULL,
  `album_cover` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`album_id`, `album_name`, `album_cover`) VALUES
(1, 'Summer Camp', '1549461955-web_development_course.jpeg'),
(2, 'celebration', '1549480700-web_development.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `cat_name_ar` varchar(255) NOT NULL,
  `cat_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_name_ar`, `cat_image`) VALUES
(1, 'Full stack Web', 'تطوير مواقع الويب', '1549375171-1548544787-programming_23-2147841208.jpg'),
(2, 'Mobile Application', 'تطوير تطبيقات الهاتف', '1549375171-1548544787-programming_23-2147841208.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_subject` varchar(255) NOT NULL,
  `contact_message` varchar(255) NOT NULL,
  `contact_add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_name`, `contact_email`, `contact_subject`, `contact_message`, `contact_add_date`) VALUES
(1, 'mohammad', 'mohammad.abukhashabeh97@yahoo.com', 'Ask for training', 'I want', '2019-02-13 17:30:18'),
(2, 'sasd', 'sqd', 'dddd', 'ds', '2019-02-13 17:30:36'),
(3, 'mohammad', 'mohammad.abukhashabeh97@yahoo.com', 'Ask for training', 'I want', '0000-00-00 00:00:00'),
(4, 'mohammad', 'Mohammad.abukhashabeh97@yahoo', 'Ask for training', 'I want', '0000-00-00 00:00:00'),
(5, '', '', '', '', '2019-02-13 17:43:34'),
(6, 'mohammad', 'Mohammad.abukhashabeh97@yahoo', 'A', 's', '2019-02-13 17:44:10'),
(7, 'mohammad', 'adimn@admin.com', 's', 's', '2019-02-13 17:52:30'),
(8, 'saeed', 'saeed@yahoo.com', 'Hello', 'We', '2019-02-13 17:57:42'),
(9, 'mohammad', 'adimn@admin.com', 's', 's', '2019-02-13 18:00:59'),
(10, 'mohammad', 'adimn@admin.com', 's', 's', '2019-02-13 18:01:42'),
(11, 'mohammad', 'adimn@admin.com', 's', 's', '2019-02-13 18:02:37'),
(12, 'mohammad', 'adimn@admin.com', 's', 's', '2019-02-13 18:03:03'),
(13, 'mohammad', 'adimn@admin.com', 's', 's', '2019-02-13 18:03:58'),
(14, 'mohammad', 'adimn@admin.com', 's', 's', '2019-02-13 18:04:35'),
(15, 'mohammad', 'mohammad.abukhashabeh97@yahoo.com', 'Ask for training', 'zzzz', '2019-02-19 12:16:50'),
(16, 'mohammad', 'mohammad.abukhashabeh97@yahoo.com', 'Ask for training', 'zzzz', '2019-02-19 12:19:41');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_name_ar` varchar(255) NOT NULL,
  `course_desc` varchar(255) NOT NULL,
  `course_desc_ar` varchar(255) NOT NULL,
  `course_level` varchar(255) NOT NULL,
  `course_hours` int(11) NOT NULL,
  `course_image` text NOT NULL,
  `course_price` int(11) NOT NULL,
  `course_special_price` int(11) NOT NULL,
  `course_content` varchar(255) NOT NULL,
  `course_content_ar` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `category_id`, `course_name`, `course_name_ar`, `course_desc`, `course_desc_ar`, `course_level`, `course_hours`, `course_image`, `course_price`, `course_special_price`, `course_content`, `course_content_ar`, `start_date`, `end_date`) VALUES
(1, 1, 'Web Engineering', 'هندسة الويب', 'In this course', 'نحتوي هذه ', 'Beginner', 100, '1549974055-images.png', 400, 200, 'basic', 'basic of', '2019-01-01', '2019-01-05'),
(2, 2, 'android', 'برمجة تطبيقات الاندرويد', 'in this course', 'نحتوي هذه ', 'Intermediate', 24, '1549974055-images.png', 450, 225, 'Basic', 'اساسيات', '2019-01-01', '2019-02-02');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `event_desc` varchar(255) NOT NULL,
  `event_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `event_name`, `location`, `start_date`, `end_date`, `start_time`, `end_time`, `event_desc`, `event_image`) VALUES
(1, 'Become free lancer..', 'amman - jordan', '2019-01-01', '2019-02-02', '22:00:00', '14:02:00', 'ZXzx', '1549375913-1548544787-programming_23-2147841208.jpg'),
(2, 'Become a full stacl developer', 'amman - jordan', '2019-01-01', '2019-02-02', '13:00:00', '14:00:00', 'Talking about...', '1549985063-ele-running.gif'),
(3, 'Programming Language', 'Amman - university of jorfan', '2019-01-01', '2019-01-05', '13:00:00', '16:00:00', 'Discussion importance of..', '1550229895-images.png');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `album_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL,
  `image_src` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`album_id`, `image_id`, `image_src`) VALUES
(2, 4, '1549402304-ele-running.gif'),
(1, 11, '1548329830-php1.jpg'),
(1, 16, '1549460914-programming_23-2147841208.jpg'),
(1, 17, '1549461955-php1.jpg'),
(1, 18, '1549461955-web_development_course.jpeg'),
(2, 19, '1549480700-web_development.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `meta`
--

CREATE TABLE `meta` (
  `No.` int(11) NOT NULL,
  `page_name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `title_ar` varchar(255) NOT NULL,
  `description_ar` varchar(255) NOT NULL,
  `keywords_ar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `meta`
--

INSERT INTO `meta` (`No.`, `page_name`, `title`, `description`, `keywords`, `title_ar`, `description_ar`, `keywords_ar`) VALUES
(1, 'course-single', 'Courses | Upskills Academy', 'Upskills provide their student set of certifications..', 'php,asp,fullstack,front end', '', '', ''),
(8, 'index', 'Home | UpSkills Academy', 'Upskills is an academy ...', 'courses,academy,php,asp,training', '', '', ''),
(25, 'courses', 'Courses | Upskills Academy', 'Upskills provide their student set of certifications..', 'php,asp,fullstack,front end', 'الرئيسية | اكاديمية تطوير المهارات', 'تهدف اكاديمية تطوير المهارات', 'تدريب,برمجة,دورات');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `No.` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `image_id` int(11) NOT NULL,
  `image_src` text NOT NULL,
  `english_title` varchar(255) NOT NULL,
  `english_text` varchar(255) NOT NULL,
  `english_desc` varchar(255) NOT NULL,
  `arabic_title` varchar(255) NOT NULL,
  `arabic_text` varchar(255) NOT NULL,
  `arabic_desc` varchar(255) NOT NULL,
  `text_alignment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`image_id`, `image_src`, `english_title`, `english_text`, `english_desc`, `arabic_title`, `arabic_text`, `arabic_desc`, `text_alignment`) VALUES
(28, '1550492440programm.jpg', 'Upskills Academy', 'Full Stack Web course', 'Upskills Academy', 'دورة تصميم المواقع الشاملة', 'أكاديمية تطوير المهارات للإستشارات التعليمية', 'تتناول الدورة تصميم المواقع وبرمجتها ', 'center'),
(29, '1550492555los.jpg', 'Upskills Academy', 'Full Stack Web course', 'The course Included..', 'دورة تصميم المواقع الشاملة', 'أكاديمية تطوير المهارات للإستشارات التعليمية', 'تتناول الدورة تصميم المواقع وبرمجتها ', 'left'),
(30, '1550492605graphic33-01.jpg', 'Upskills Academy', 'Full Stack Web course', 'The course Included..', 'دورة تصميم المواقع الشاملة', 'أكاديمية تطوير المهارات للإستشارات التعليمية', 'تتناول الدورة تصميم المواقع وبرمجتها ', 'left');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `std_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `std_name` varchar(255) NOT NULL,
  `std_email` varchar(255) NOT NULL,
  `std_major` varchar(255) NOT NULL,
  `phone_number` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`std_id`, `course_id`, `std_name`, `std_email`, `std_major`, `phone_number`) VALUES
(2, 2, 'mohammad', 'muh@yahoo.com', 'SWE', '079'),
(3, 1, 'salameh yassine', 'salameh@gmail.com', 'SWE', '0798836033');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`album_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `course_ibfk_1` (`category_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `album_id` (`album_id`);

--
-- Indexes for table `meta`
--
ALTER TABLE `meta`
  ADD PRIMARY KEY (`No.`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`No.`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`std_id`),
  ADD KEY `student_ibfk_1` (`course_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `meta`
--
ALTER TABLE `meta`
  MODIFY `No.` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `No.` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `std_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`album_id`) REFERENCES `album` (`album_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
