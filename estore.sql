-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2016 at 04:32 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `estore`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(300) NOT NULL,
  `Message` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`ID`, `Name`, `Email`, `Message`) VALUES
(4, 'Sanjay kumar mahto', 'mahto.sanjay41@gmail.com', 'hi...\r\n'),
(5, 'vijay kumar mahto', 'mahtovijay@gmail.com', 'hello how are you!'),
(6, 'Sanjay kumar mahto', 'mahto.sanjay41@gmail.com', 'Hi!!! I found your website very attracting for shopping.');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `PID` int(25) NOT NULL AUTO_INCREMENT,
  `Price` int(10) NOT NULL,
  `cart` int(11) NOT NULL,
  PRIMARY KEY (`PID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`PID`, `Price`, `cart`) VALUES
(1, 5000, 0),
(2, 4000, 0),
(3, 4000, 0),
(4, 4000, 0),
(5, 4000, 0),
(6, 4000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE IF NOT EXISTS `persons` (
  `PID` int(25) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Contact` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  PRIMARY KEY (`PID`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`PID`, `Name`, `Email`, `Password`, `Contact`, `City`, `Address`) VALUES
(9, 'Sanjay kumar mahto', 'mahto.sanjay41@gmail.com', '7a3dab08d67c59cfb4787f972e5fb7be', '9162772864', 'Ranchi', 'Jharkhand'),
(10, 'vijay kumar mahto', 'mahtovijay@gmail.com', '7a3dab08d67c59cfb4787f972e5fb7be', '9162184775', 'Ranchi', 'Jharkhand');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
