-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Aug 02, 2020 at 02:53 AM
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
