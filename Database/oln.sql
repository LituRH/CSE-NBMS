-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 16, 2015 at 03:50 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `oln`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `e_id` int(10) NOT NULL,
  `name` varchar(50) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`e_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`e_id`, `name`) VALUES
(9876, 'Hasn'),
(12345, 'Najrul Islam');

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE IF NOT EXISTS `admin_details` (
  `e_id` int(50) NOT NULL,
  `name` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `desig` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(40) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`e_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`e_id`, `name`, `desig`, `username`, `password`) VALUES
(12345, 'Najrul Islam', 'Maintanance Officer', '12345', '123');

-- --------------------------------------------------------

--
-- Table structure for table `catagory_tb`
--

CREATE TABLE IF NOT EXISTS `catagory_tb` (
  `cat_no` int(10) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(50) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`cat_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `catagory_tb`
--

INSERT INTO `catagory_tb` (`cat_no`, `cat_name`) VALUES
(1, 'Select Catagory'),
(2, 'Academic'),
(3, 'Department Activity'),
(4, 'Addmission'),
(5, 'Workshop & Seminar'),
(6, 'Thesis & Project Presentation'),
(7, 'TSet cat');

-- --------------------------------------------------------

--
-- Table structure for table `core_admin`
--

CREATE TABLE IF NOT EXISTS `core_admin` (
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(50) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `core_admin`
--

INSERT INTO `core_admin` (`username`, `password`) VALUES
('admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE IF NOT EXISTS `notices` (
  `n_id` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `n_title` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `n_cat` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `n_cat_no` int(20) NOT NULL,
  `n_pub` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `n_by` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `p_name` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `file` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `texts` varchar(500) COLLATE latin1_general_ci NOT NULL,
  `id` int(100) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`n_id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=68 ;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`n_id`, `n_title`, `n_cat`, `n_cat_no`, `n_pub`, `n_by`, `p_name`, `file`, `texts`, `id`) VALUES
('CSE314', 'Admission From Freedom Fighter', 'Academic', 2, '11/01/2015', 'admin', 'admin', 'CSE31420151115admin.pdf ', '                ', 43),
('CSE998', 'Admission From Waiting List', 'Academic', 2, '11/03/2015', 'admin', 'admin', 'CSE99820151115admin.pdf ', 'Admission From Waiting List Will Started at 20/11/2015 at 10.00pm in OLD ACADEMIC Building.\r\n                ', 44),
('CSE198', 'Admission Notice 2014-15', 'Addmission', 4, '10/16/2015', 'admin', 'admin', 'CSE19820151115admin.pdf ', 'Admission Test of 2105-2016 Will Start 22 February 2016.              ', 45),
('CSE9826', 'Eligible Candidates For Written Test', 'Addmission', 4, '10/30/2015', 'admin', 'admin', ' ', 'The List of Eligible Candidates for Written Test 2015-2016 Published!!                ', 46),
('CSE/9920', 'Sit Distribution At Various Hall', 'Academic', 2, '11/14/2015', 'admin', 'admin', 'CSE/992020151115admin.pdf ', '                ', 47),
('CSE/1290', 'Students Course Registration', 'Department Activity', 3, '03/24/2015', 'admin', 'admin', 'CSE/129020151115admin.pdf ', 'Course Registration Will Start From 22/11/2016. Students Can Registration in Online.                ', 48),
('CSE990', 'Thesis Presentation of Final Yaer', 'Thesis & Project Presentation', 6, '11/06/2015', '12345', 'Najrul Islam', '3811.pdf', 'See The Attachment.  ', 50),
('CSE1240', 'Semineers Notice', 'Workshop & seminar', 5, '11/06/2015', 'admin', 'admin', 'CSE124020151115admin.pdf ', 'A Semineers Will Be Held at 2.00pm Friday In Old Academic Building.                ', 49),
('CSE1231', 'Workshop Notice', 'Addmission', 4, '11/03/2015', '12345', 'Najrul Islam', 'CSE12312015111512345.pdf ', 'A WorkShop Will Held For CSE Department Students. Details In Attachment.                ', 51),
('CSE8765', 'Project Presentation', 'Thesis & Project Presentation', 6, '11/01/2015', '12345', 'Najrul Islam', ' ', 'Details Comming Soon........             ', 52),
('CSE991', 'Seminners Notice', 'Workshop & seminar', 5, '11/09/2015', '12345', 'Najrul Islam', 'CSE9912015111512345.pdf ', 'See Attachment for More Details....                ', 53),
('CSE90132', 'Rental Library Notice', 'Department Activity', 3, '11/14/2015', 'admin', 'admin', 'CSE9013220151115admin.pdf ', 'See The Attachment.                ', 57),
('CSE9919', 'Second Convocation 2016!!', 'Academic', 0, '11/13/2015', 'admin', 'admin', '7926.pdf', 'See The Attachments.\r\nComing More Details....                   ', 61),
('cse12345', 'Test', 'Department Activity', 3, '11/16/2015', 'admin', 'admin', ' ', 'rrrrr                ', 67);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
