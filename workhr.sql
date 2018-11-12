-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 03, 2013 at 01:33 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `workhr`
--

-- --------------------------------------------------------

--
-- Table structure for table `addhours`
--

CREATE TABLE IF NOT EXISTS `addhours` (
  `addhrs_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `timein` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `timeout` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `breaktime` int(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`addhrs_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=21 ;

--
-- Dumping data for table `addhours`
--

INSERT INTO `addhours` (`addhrs_id`, `user_id`, `timein`, `timeout`, `breaktime`, `date`) VALUES
(1, 74, '2013-04-28 05:00:00', '2013-04-28 05:50:00', 30, '2013-04-28 05:58:41'),
(2, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '2013-04-28 06:18:22'),
(3, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '2013-04-28 06:35:31'),
(4, 0, '2013-04-27 22:00:00', '2013-04-28 00:01:00', 30, '2013-04-28 06:36:39'),
(5, 77, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '2013-04-28 06:38:25'),
(6, 74, '2013-04-30 20:55:00', '2013-05-01 05:00:00', 30, '2013-05-01 04:56:28'),
(7, 74, '2013-04-30 15:00:00', '2013-04-30 23:00:00', 20, '2013-05-01 05:44:07'),
(8, 77, '2013-04-30 17:00:00', '2013-04-30 23:10:00', 29, '2013-05-01 05:56:04'),
(10, 77, '2013-04-30 17:00:00', '0000-00-00 00:00:00', 0, '2013-05-01 06:14:11'),
(11, 77, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '2013-05-01 06:14:16'),
(12, 77, '2013-05-01 07:09:00', '2013-05-01 17:00:00', 30, '2013-05-01 06:17:42'),
(13, 77, '2013-05-01 06:00:00', '2013-05-01 15:00:00', 30, '2013-05-01 06:58:34'),
(14, 77, '2013-05-01 05:00:00', '2013-05-03 05:00:00', 31, '2013-05-01 07:08:47'),
(15, 77, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '2013-05-01 07:30:10'),
(16, 77, '2013-04-30 20:55:00', '2013-05-01 04:15:00', 30, '2013-05-01 07:31:01'),
(17, 77, '2013-05-02 06:00:00', '2013-05-02 15:00:00', 30, '2013-05-01 08:09:41'),
(18, 77, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '2013-05-01 08:09:49'),
(19, 77, '2013-05-02 06:00:00', '2013-05-02 15:00:00', 30, '2013-05-01 08:10:50'),
(20, 77, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '2013-05-01 08:11:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `fst_name` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `lst_name` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `pass` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=79 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fst_name`, `lst_name`, `email`, `pass`, `date`) VALUES
(75, 'Shamima', 'Juma', 'juma@mail.com', '1e48c4420b7073bc11916c6c1de226bb', '2013-03-28 06:42:00'),
(76, 'sayed', 'farazi', 'sayed@umb.edu', '202cb962ac59075b964b07152d234b70', '2013-04-28 06:03:10'),
(77, 'juma', 'khan', 'juma@ya.com', '628631f07321b22d8c176c200c855e1b', '2013-04-28 06:26:11'),
(78, 'sohag', 'mollah', 'so@gmail.com', '628631f07321b22d8c176c200c855e1b', '2013-05-01 05:46:07'),
(74, 'MD', 'KHAN', 'monirkhan707@gmail.com', '628631f07321b22d8c176c200c855e1b', '2013-03-28 06:41:13');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
