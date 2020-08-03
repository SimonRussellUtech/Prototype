-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Aug 03, 2020 at 03:38 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thesystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `advisorinfo`
--

DROP TABLE IF EXISTS `advisorinfo`;
CREATE TABLE IF NOT EXISTS `advisorinfo` (
  `IDnum` int(11) NOT NULL,
  `Fname` text NOT NULL,
  `Lname` text NOT NULL,
  `Email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advisorinfo`
--

INSERT INTO `advisorinfo` (`IDnum`, `Fname`, `Lname`, `Email`, `password`) VALUES
(100, 'Denise ', 'Allen', 'dallen@utech.edu.jm', '1234567'),
(101, 'Penrose', 'Whittaker', 'pwhittaker@utech.edu.jm', '1234567'),
(102, 'David', 'White', 'dwhite@utech.edu.jm', '1234567'),
(103, 'Karlene', 'Black', 'kblack@utech.edu.jm', '1234567');

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

DROP TABLE IF EXISTS `modules`;
CREATE TABLE IF NOT EXISTS `modules` (
  `Code` varchar(10) NOT NULL,
  `MName` varchar(30) NOT NULL,
  `Credits` int(10) NOT NULL,
  `Level` int(10) NOT NULL,
  PRIMARY KEY (`Code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`Code`, `MName`, `Credits`, `Level`) VALUES
('CMP1024', 'Programming 1', 4, 1),
('CMP1025', 'Programming 2', 4, 1),
('CMP1026', 'Computer Networks 1', 3, 1),
('INT1001', 'Information Technology', 3, 1),
('CIT2004 ', 'Object Oriented Programming', 4, 2),
('CMP2006', 'Data Structures', 4, 2),
('CMP2019 ', 'Software Engineering:Analysis ', 3, 2),
('CMP2018 ', 'Database Design', 3, 2),
('CIT2011', 'Web Programming', 3, 2),
('CIT3002 ', 'Operating Systems', 3, 3),
('CIT3003', 'Analysis of Algorithms', 3, 3),
('CIT3009', 'Advanced Programming', 4, 3),
('CIT3006', 'Theory of Computation', 3, 3),
('CMP4011', 'Artificial Intelligence', 4, 4),
('CIT4004 ', 'Analysis of Programming Langua', 4, 4),
('PRJ4020', 'Major Project', 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `studentinfo`
--

DROP TABLE IF EXISTS `studentinfo`;
CREATE TABLE IF NOT EXISTS `studentinfo` (
  `ID` int(7) NOT NULL,
  `Fname` text NOT NULL,
  `Lname` text NOT NULL,
  `Pass` text NOT NULL,
  `GPA` decimal(10,0) NOT NULL,
  `Stage` int(11) NOT NULL,
  `advisorID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentinfo`
--

INSERT INTO `studentinfo` (`ID`, `Fname`, `Lname`, `Pass`, `GPA`, `Stage`, `advisorID`) VALUES
(1502472, 'Simon', 'Russell', '1234567', '2', 0, 100),
(1502480, 'John', 'Brown', '1234567', '2', 0, 101),
(1502490, 'Zoya', 'Nash', '1234567', '3', 0, 101),
(1503000, 'Ryhane ', 'Roberts', '1234567', '2', 0, 102);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
