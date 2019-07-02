-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 06, 2019 at 02:47 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `2008b4a5723p`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(65) NOT NULL DEFAULT '',
  `credit` int(11) NOT NULL,
  `instructor` varchar(65) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `name`, `credit`, `instructor`) VALUES
(5, 'CSE1002', 4, 'ASD'),
(6, 'cse2003', 3, 'HHS'),
(7, 'cse2003', 3, 'HHS');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(65) NOT NULL DEFAULT '',
  `password` varchar(65) NOT NULL DEFAULT '',
  `branch` varchar(65) NOT NULL DEFAULT '',
  `year` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `password`, `branch`, `year`) VALUES
(4, 'AKASH', 'Akashdeep@', '2016', 2020),
(5, 'HARSH', 'Harsh@24', '2016', 2020);

-- --------------------------------------------------------

--
-- Table structure for table `regis`
--

CREATE TABLE IF NOT EXISTS `regis` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `uname` varchar(65) NOT NULL DEFAULT '',
  `cname` varchar(65) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `regis`
--

INSERT INTO `regis` (`id`, `uname`, `cname`) VALUES
(10, 'AKASH', 'cse2003');
