-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 17, 2015 at 01:31 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `exam_db`
--
CREATE DATABASE IF NOT EXISTS `exam_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `exam_db`;

-- --------------------------------------------------------

--
-- Table structure for table `exam_tb`
--

CREATE TABLE IF NOT EXISTS `exam_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `surname` varchar(25) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `other_name` varchar(25) NOT NULL,
  `father` varchar(25) NOT NULL,
  `mother` varchar(25) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `status` varchar(9) NOT NULL,
  `place_of_birth` varchar(50) NOT NULL,
  `day_of_birth` varchar(2) NOT NULL,
  `month_of_birth` varchar(15) NOT NULL,
  `year_of_birth` varchar(4) NOT NULL,
  `telephon` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `program` varchar(50) NOT NULL,
  `cours` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `telephon` (`telephon`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `exam_tb`
--

INSERT INTO `exam_tb` (`id`, `surname`, `first_name`, `other_name`, `father`, `mother`, `gender`, `status`, `place_of_birth`, `day_of_birth`, `month_of_birth`, `year_of_birth`, `telephon`, `email`, `password`, `nationality`, `program`, `cours`) VALUES
(1, 'jgjgfjg', 'jxcjkc', 'asjdsoi', 'asodso', 'aODSO', 'Male', 'Married', 'asdodsfoj', '19', 'March', '1973', 0, 'fabrice@gmal.com', 'opikhj', '14_43', '246_35818', '2_355');

-- --------------------------------------------------------

--
-- Table structure for table `exa_tb`
--

CREATE TABLE IF NOT EXISTS `exa_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `surname` varchar(19) NOT NULL,
  `first_name` varchar(19) NOT NULL,
  `other_name` varchar(19) NOT NULL,
  `father` varchar(15) NOT NULL,
  `mother` varchar(32) NOT NULL,
  `gender` varchar(21) NOT NULL,
  `status` varchar(21) NOT NULL,
  `place_of_birth` varchar(34) NOT NULL,
  `day_of_birth` varchar(21) NOT NULL,
  `month_of_birth` varchar(12) NOT NULL,
  `year_of_birth` varchar(12) NOT NULL,
  `telphon` int(16) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(23) NOT NULL,
  `nationality` varchar(23) NOT NULL,
  `program` varchar(23) NOT NULL,
  `cours` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `questio_tb`
--

CREATE TABLE IF NOT EXISTS `questio_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reponse` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `reg_tb`
--

CREATE TABLE IF NOT EXISTS `reg_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
