-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2019 at 04:35 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

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
  `Ebirthdate` datetime NOT NULL,
  `Edept` varchar(255) NOT NULL,
  `rank` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblemployee`
--

INSERT INTO `tblemployee` (`ID`, `Efname`, `Elname`, `Egender`, `Ebirthdate`, `Edept`, `rank`) VALUES
(1, 'John', 'Doe', 'Male', '1993-11-25 00:00:00', 'IT', '3'),
(3, 'Mae', 'Evangelista', 'Female', '1993-12-25 00:00:00', 'CSIO', '22'),
(4, 'Sheila', 'Bustamante', 'Female', '1993-10-25 00:00:00', 'CASHIER', '18'),
(5, 'Delrosario', 'Marneli', 'Female', '1993-09-25 00:00:00', 'CLERK', '6'),
(6, 'Napana', 'Jassy', 'Female', '1993-08-25 00:00:00', 'CASHIER', '8'),
(7, 'Ortiz', 'Stacey', 'Female', '1993-07-25 00:00:00', 'CLERK', '6'),
(8, 'Campano', 'Maye', 'Female', '1993-06-25 00:00:00', 'CLERK', '6'),
(9, 'Caballes', 'Felix', 'Male', '1993-05-25 00:00:00', 'GUARD', '3'),
(10, 'Campos', 'Carlo', 'Male', '1993-04-25 00:00:00', 'CLERK', '6'),
(11, 'Sandoval', 'Aiza', 'Female', '1993-03-25 00:00:00', 'PAIMS', '8'),
(12, 'Moran', 'Rowena', 'Female', '1993-02-25 00:00:00', 'CLERK', '8');

-- --------------------------------------------------------

--
-- Table structure for table `tbusers`
--

CREATE TABLE `tbusers` (
  `ID` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbusers`
--

INSERT INTO `tbusers` (`ID`, `Username`, `Password`, `Role`) VALUES
(1, 'CARLO', '12345', 'Admin'),
(2, 'FRANCES', '54321', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblemployee`
--
ALTER TABLE `tblemployee`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbusers`
--
ALTER TABLE `tbusers`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblemployee`
--
ALTER TABLE `tblemployee`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbusers`
--
ALTER TABLE `tbusers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
