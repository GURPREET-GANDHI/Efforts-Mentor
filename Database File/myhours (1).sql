-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2017 at 06:13 PM
-- Server version: 5.5.36
-- PHP Version: 5.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `myhours`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE IF NOT EXISTS `activity` (
  `act_id` varchar(50) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`act_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`act_id`, `description`) VALUES
('Coding', 'Technical Coding'),
('Documentation', 'Technical Documnentation');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `un` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `phone` text COLLATE utf8_unicode_ci NOT NULL,
  `admin_flag` int(11) NOT NULL,
  PRIMARY KEY (`un`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`name`, `un`, `pass`, `mail`, `phone`, `admin_flag`) VALUES
('Gurpreet', '469934', 'india', 'gg00469934@techmahindra.com', '0', 1),
('Vivek Khare', '676767', 'techm', 'vk0004847@techmahindra.com', '7878787787', 0),
('Varun Kummar', '8980889', 'techm', 'vk00469933@techmahindra.com', '87837878387', -1);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `proj_id` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `target` float NOT NULL,
  `check` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`proj_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`proj_id`, `description`, `target`, `check`) VALUES
('WSSBA-01', 'test', 40, 0),
('WSSBA-02', 'testfdd', 60, 1);

-- --------------------------------------------------------

--
-- Table structure for table `timesheet`
--

CREATE TABLE IF NOT EXISTS `timesheet` (
  `line_no` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `name` varchar(50) NOT NULL,
  `proj_id` varchar(50) NOT NULL,
  `act_id` varchar(50) NOT NULL,
  `t_in` text NOT NULL,
  `t_out` text NOT NULL,
  `dur` float NOT NULL,
  `sysdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`line_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `timesheet`
--

INSERT INTO `timesheet` (`line_no`, `date`, `name`, `proj_id`, `act_id`, `t_in`, `t_out`, `dur`, `sysdate`) VALUES
(46, '1970-01-01', '469934', 'WSSBA-01', 'Coding', '11:30 PM', '11:30 PM', 0, '2017-05-23 18:07:23'),
(47, '2017-05-17', '469934', 'WSSBA-01', 'Coding', '12:30 AM', '11:30 PM', 23, '2017-05-23 18:10:59'),
(48, '2017-05-09', '469934', 'WSSBA-01', 'Coding', '11:30 PM', '11:30 PM', 0, '2017-05-23 18:12:18'),
(49, '2017-05-17', '469934', 'WSSBA-02', 'Coding', '11:30 PM', '11:59 PM', 0.483, '2017-05-23 18:13:17'),
(50, '2017-05-24', '469934', 'WSSBA-01', 'Coding', '11:30 PM', '11:59 PM', 0.48, '2017-05-23 18:16:03'),
(51, '2017-05-17', '469934', 'WSSBA-01', 'Documentation', '11:45 AM', '11:45 PM', 12, '2017-05-23 18:16:37'),
(52, '2017-05-02', '469934', 'WSSBA-01', 'Coding', '12:00 AM', '12:00 PM', 12, '2017-05-23 18:17:23'),
(53, '2017-05-23', '469934', 'WSSBA-01', 'Coding', '12:00 AM', '12:59 PM', 12.98, '2017-05-23 18:18:22'),
(54, '2017-05-30', '469934', 'WSSBA-01', 'Coding', '12:00 AM', '11:59 PM', 23.98, '2017-05-23 18:19:08');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
