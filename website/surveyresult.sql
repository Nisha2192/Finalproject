-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 29, 2014 at 05:04 AM
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
-- Table structure for table `surveyresult`
--

CREATE TABLE IF NOT EXISTS `surveyresult` (
  `Question1` varchar(100) NOT NULL,
  `Answer1` varchar(100) NOT NULL,
  `Question2` varchar(100) NOT NULL,
  `Answer2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surveyresult`
--

INSERT INTO `surveyresult` (`Question1`, `Answer1`, `Question2`, `Answer2`) VALUES
('What is your name?', ' Kawal', ' What is your hobby?', ' Playing games'),
('What is your name?', ' Kawal', ' What is your hobby?', ' Playing games'),
(' What is your name?', ' Navi', ' What is your hobby?', ' Playing'),
(' What is your name?', ' Navi', ' What is your hobby?', ' Playing'),
(' What is your name?', ' Navi', ' What is your hobby?', ' Cooking'),
('What is your house number?', '412', 'What is the street name?', 'Tuxedo'),
('ncblnslclks', ' md cl slkdncnsol', ' kjndcsdncnsdpojjposd', ' ncnksnokncosdnoc'),
(' What is your address?', ' Tuxedo', ' What is your age?', ' 20'),
(' What is your pet name?', ' tommy', ' What is your favourite sport?', ' cricket'),
('xnclspfpsnpl;', ' cnsc;snlcnasnconaso', ' cjnsdocsncdsdop', ' cncnsnsoconsdojcn'),
('xnclspfpsnpl;', ' cnsc;snlcnasnconaso', ' cjnsdocsncdsdop', ' cncnsnsoconsdojcn'),
(' nxcaosnpocposan', ' c kjsanocnoasncnlas', ' clnaskncoanpocpoa', ' cnnn'),
(' ', ' ', ' ', ' '),
(' ', ' ', ' ', ' '),
(' ', ' ', ' ', ' ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
