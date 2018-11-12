-- phpMyAdmin SQL Dump
-- version 2.9.2
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Mar 18, 2013 at 07:01 PM
-- Server version: 5.0.33
-- PHP Version: 5.2.1
-- 
-- Database: `workhr`
-- 
CREATE DATABASE `workhr` DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci;
USE `workhr`;

-- --------------------------------------------------------

-- 
-- Table structure for table `users`
-- 

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL auto_increment,
  `fst_name` varchar(50) collate latin1_general_ci NOT NULL,
  `lst_name` varchar(50) collate latin1_general_ci NOT NULL,
  `email` varchar(50) collate latin1_general_ci NOT NULL,
  `pass` varchar(50) collate latin1_general_ci NOT NULL,
  `date` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=13 ;

-- 
-- Dumping data for table `users`
-- 

INSERT INTO `users` VALUES (11, 'a', 'd', 'e', 'e', '2013-03-15 20:01:57');
INSERT INTO `users` VALUES (10, 'Monir', 'Khan', 'monirkhan707@gmail.com', '123456', '2013-03-15 19:45:26');
INSERT INTO `users` VALUES (12, 'a', 'd', 'e', 'e', '2013-03-15 20:02:01');
