-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2015 at 12:03 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `younginnovation`
--
CREATE DATABASE IF NOT EXISTS `younginnovation` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `younginnovation`;

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE IF NOT EXISTS `awards` (
  `contractName` varchar(50) NOT NULL,
  `contractDate` date DEFAULT NULL,
  `completionDate` date DEFAULT NULL,
  `awardee` varchar(50) NOT NULL,
  `awardeeLocation` varchar(50) NOT NULL,
  `Amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contracts`
--

CREATE TABLE IF NOT EXISTS `contracts` (
  `contractname` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `bidPurchaseDeadline` date DEFAULT NULL,
  `bidSubmissionDeadline` date DEFAULT NULL,
  `bidOpeningDate` date DEFAULT NULL,
  `tenderid` varchar(50) NOT NULL,
  `publicationDate` date DEFAULT NULL,
  `publishedIn` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `final`
--

CREATE TABLE IF NOT EXISTS `final` (
  `contractname` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `bidPurchaseDeadline` date DEFAULT NULL,
  `bidSubmissionDeadline` date DEFAULT NULL,
  `bidOpeningDate` date DEFAULT NULL,
  `tenderid` varchar(50) NOT NULL,
  `publicationDate` date DEFAULT NULL,
  `publishedIn` varchar(100) NOT NULL,
  `contractDate` date DEFAULT NULL,
  `completionDate` date DEFAULT NULL,
  `awardee` varchar(50) NOT NULL,
  `awardeeLocation` varchar(50) NOT NULL,
  `Amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
