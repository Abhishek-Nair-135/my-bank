-- phpMyAdmin SQL Dump
-- version 4.0.10deb1ubuntu0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 25, 2018 at 10:24 AM
-- Server version: 5.5.62-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mybank`
--

-- --------------------------------------------------------

--
-- Table structure for table `accmaster`
--

CREATE TABLE IF NOT EXISTS `accmaster` (
  `acctype` varchar(20) NOT NULL DEFAULT '',
  `prefix` varchar(5) DEFAULT NULL,
  `minbal` double DEFAULT NULL,
  `interest` double DEFAULT NULL,
  PRIMARY KEY (`acctype`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accmaster`
--

INSERT INTO `accmaster` (`acctype`, `prefix`, `minbal`, `interest`) VALUES
('current', 'cv', 100000, 6),
('savings', 'sv', 0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `accno` int(11) NOT NULL,
  `custid` int(11) DEFAULT NULL,
  `accstatus` varchar(10) DEFAULT NULL,
  `opendate` date DEFAULT NULL,
  `balance` double DEFAULT NULL,
  PRIMARY KEY (`accno`),
  KEY `custid` (`custid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE IF NOT EXISTS `address` (
  `aid` int(11) NOT NULL,
  `city` varchar(20) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`aid`, `city`, `state`, `address`) VALUES
(1, 'chikodi', 'karnataka', 'at post chikodi, tq- chikodi, dist - belagavi '),
(2, 'jamkhandi', 'Karnataka', 'at post jamkhandi, tq- mudhol, dist - bagalkot'),
(3, 'mahalingpur', 'karnataka', 'at post mahalingpur tq- mudhol dist bagalkot pin - 587312'),
(4, 'vadagaon', 'maharastra', 'at post vadagaon tq-khatav  dist satara');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE IF NOT EXISTS `branch` (
  `ifsc` varchar(10) NOT NULL,
  `bname` varchar(20) DEFAULT NULL,
  `aid` int(11) DEFAULT NULL,
  PRIMARY KEY (`ifsc`),
  KEY `aid` (`aid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`ifsc`, `bname`, `aid`) VALUES
('MBI000001', 'chikodi', 1),
('MBI000003', 'vadagaon', 4);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `custid` int(11) NOT NULL,
  `ifsc` varchar(10) DEFAULT NULL,
  `fname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `loginid` int(11) DEFAULT NULL,
  `aid` int(11) DEFAULT NULL,
  `phoneno` varchar(12) DEFAULT NULL,
  `emailid` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`custid`),
  KEY `ifsc` (`ifsc`),
  KEY `loginid` (`loginid`),
  KEY `aid` (`aid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`custid`, `ifsc`, `fname`, `lname`, `loginid`, `aid`, `phoneno`, `emailid`) VALUES
(1, 'MBI000001', 'amit', 'gharge', 1111, 1, '9620197585', 'amit@gmail.com'),
(2, 'MBI000001', 'sourab', 'zutti', 1234, 2, '7760439401', 'sourab@gmail.com'),
(3, 'MBI000001', 'rudra', 'bhaumik', 4321, 3, '7760439402', 'rudra@gmail.com'),
(4, 'MBI000001', 'prasad', 'khot', 1212, 4, '7760439482', 'prasad@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `empid` int(11) NOT NULL,
  `fname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `loginid` varchar(20) DEFAULT NULL,
  `passwd` varchar(100) DEFAULT NULL,
  `phoneno` varchar(12) DEFAULT NULL,
  `emailid` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`empid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`empid`, `fname`, `lname`, `loginid`, `passwd`, `phoneno`, `emailid`) VALUES
(1, 'amit', 'gharge', '1111', 'amit', '9620197585', 'amit@gmail.com'),
(2, 'danish', 'maruf', '2222', 'danish', '9620197511', 'danish@gmail.com'),
(3, 'shravani', 'burud', '3333', 'shravani', '9620197522', 'shravani@gmail.com'),
(4, 'munna', 'page', '4444', 'munna', '9620197533', 'munna@gmail.com'),
(5, 'raj', 'patil', '5555', 'raj', '9620197544', 'raj@gmail.com'),
(6, 'guru', 'shetty', '6666', 'guru', '9620197555', 'guru@gmail.com'),
(7, 'zoya', 'khureshi', '7777', 'zoya', '9620197566', 'zoya@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE IF NOT EXISTS `loan` (
  `lid` int(11) NOT NULL,
  `custid` int(11) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `startdate` date DEFAULT NULL,
  `period` int(11) DEFAULT NULL,
  `interest` double DEFAULT NULL,
  PRIMARY KEY (`lid`),
  KEY `custid` (`custid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `loginid` int(11) NOT NULL DEFAULT '0',
  `passwd` varchar(100) DEFAULT NULL,
  `tpasswd` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`loginid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`loginid`, `passwd`, `tpasswd`) VALUES
(1111, 'amit', 'amit'),
(1212, 'prasad', 'prasad'),
(1234, 'sourab', 'sourab'),
(4321, 'rudra', 'rudra');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
  `tid` int(11) NOT NULL,
  `sdate` date DEFAULT NULL,
  `payeeid` int(11) DEFAULT NULL,
  `receiverid` int(11) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`tid`),
  KEY `payeeid` (`payeeid`),
  KEY `receiverid` (`receiverid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accounts`
--
ALTER TABLE `accounts`
  ADD CONSTRAINT `accounts_ibfk_1` FOREIGN KEY (`custid`) REFERENCES `customers` (`custid`) ON DELETE CASCADE;

--
-- Constraints for table `branch`
--
ALTER TABLE `branch`
  ADD CONSTRAINT `branch_ibfk_1` FOREIGN KEY (`aid`) REFERENCES `address` (`aid`) ON DELETE CASCADE;

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_ibfk_1` FOREIGN KEY (`ifsc`) REFERENCES `branch` (`ifsc`) ON DELETE CASCADE,
  ADD CONSTRAINT `customers_ibfk_2` FOREIGN KEY (`loginid`) REFERENCES `login` (`loginid`) ON DELETE CASCADE,
  ADD CONSTRAINT `customers_ibfk_3` FOREIGN KEY (`aid`) REFERENCES `address` (`aid`) ON DELETE CASCADE;

--
-- Constraints for table `loan`
--
ALTER TABLE `loan`
  ADD CONSTRAINT `loan_ibfk_1` FOREIGN KEY (`custid`) REFERENCES `customers` (`custid`) ON DELETE CASCADE;

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`payeeid`) REFERENCES `customers` (`custid`) ON DELETE CASCADE,
  ADD CONSTRAINT `transaction_ibfk_2` FOREIGN KEY (`receiverid`) REFERENCES `customers` (`custid`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
