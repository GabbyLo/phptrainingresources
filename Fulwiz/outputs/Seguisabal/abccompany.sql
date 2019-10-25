-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2019 at 04:35 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abccompany`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblemployee`
--

CREATE TABLE `tblemployee` (
  `ID` int(11) NOT NULL,
  `Efname` varchar(255) NOT NULL,
  `Elname` varchar(255) NOT NULL,
  `Egender` varchar(6) NOT NULL,
  `Ebirthdate` date NOT NULL,
  `Edept` varchar(255) NOT NULL,
  `rank` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblemployee`
--

INSERT INTO `tblemployee` (`ID`, `Efname`, `Elname`, `Egender`, `Ebirthdate`, `Edept`, `rank`) VALUES
(1, 'JOHN', 'DOE', 'MALE', '1993-11-25', 'IT', '3'),
(2, 'JOHN', 'DOE', 'MALE', '1993-11-25', 'IT', ''),
(3, 'MARK', 'DOE', 'MALE', '1994-12-15', 'ACCOUNTING', '1'),
(4, 'NEL', 'MAY', 'FEMALE', '1992-08-03', 'IT', '3'),
(5, 'ZAF', 'IRAH', 'FEMALE', '2013-11-10', 'MARKETING', '1'),
(6, 'ROSA', 'DALE', 'FEMALE', '1993-08-03', 'SOCIAL STUDIES', '2'),
(7, 'JAY', 'AR', 'MALE', '1991-12-15', 'EDUCATION', '3'),
(8, 'MAR', 'CELO', 'MALE', '1966-10-30', 'GSU', '3'),
(9, 'ING', 'RID', 'FEMALE', '1971-07-04', 'HR', '2'),
(10, 'AR', 'DING', 'FEMALE', '1930-03-05', 'SALES', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `ID` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `Role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`ID`, `Username`, `Password`, `Role`) VALUES
(1, 'PH001', 'xxxxx', 'staff'),
(2, 'PH000', 'zzzzz', 'admin'),
(3, 'PH002', 'xxxxx', 'staff'),
(4, 'PH003', 'xxxxx', 'staff'),
(5, 'PH004', 'xxxxx', 'staff'),
(6, 'PH005', 'xxxxx', 'staff'),
(7, 'PH010', 'zzzzz', 'admin'),
(8, 'PH020', 'zzzzz', 'admin'),
(9, 'PH006', 'xxxxx', 'staff'),
(10, 'PH007', 'xxxxx', 'staff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblemployee`
--
ALTER TABLE `tblemployee`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblemployee`
--
ALTER TABLE `tblemployee`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
