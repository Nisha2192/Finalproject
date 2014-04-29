-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 29, 2014 at 05:03 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `trading_card`
--

-- --------------------------------------------------------

--
-- Table structure for table `response`
--

CREATE TABLE IF NOT EXISTS `response` (
  `Question1` varchar(30) NOT NULL,
  `Question2` varchar(30) NOT NULL,
  `Question3` varchar(30) NOT NULL,
  `Question4` varchar(30) NOT NULL,
  `Question5` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `response`
--

INSERT INTO `response` (`Question1`, `Question2`, `Question3`, `Question4`, `Question5`) VALUES
('30-40', 'Mercedez', 'Cooking', 'No', ' hindu'),
('10-20', 'BMW', 'Music', 'No', ' hello'),
('', '', '', '', ' '),
('', '', '', '', ' '),
('40 and >', 'Sedan', 'Movies', 'Yes', ' jksbdasbdppaos'),
('40 and >', 'Sedan', 'Movies', 'Yes', ' jksbdasbdppaos'),
('', '', '', '', ' ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
