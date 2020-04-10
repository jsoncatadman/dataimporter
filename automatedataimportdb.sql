-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2020 at 12:03 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `automatedataimportdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblpuis`
--

CREATE TABLE `tblpuis` (
  `CODE` int(11) DEFAULT NULL,
  `AGE` varchar(255) DEFAULT NULL,
  `SEX` varchar(255) DEFAULT NULL,
  `BARANGAY` varchar(255) DEFAULT NULL,
  `ADMITTED` varchar(255) DEFAULT NULL,
  `STILL_ON_HOME_QUARANTINE` varchar(255) DEFAULT NULL,
  `COMPLETED_HOME_QUARANTINE` varchar(255) DEFAULT NULL,
  `RESULT` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblpuisinlantaka`
--

CREATE TABLE `tblpuisinlantaka` (
  `CODE` int(11) DEFAULT NULL,
  `AGE` varchar(255) DEFAULT NULL,
  `SEX` varchar(255) DEFAULT NULL,
  `BARANGAY` varchar(255) DEFAULT NULL,
  `ADDRESS` varchar(255) DEFAULT NULL,
  `HEALTH_FACILITY` varchar(255) DEFAULT NULL,
  `ADMITTED` varchar(255) DEFAULT NULL,
  `STILL_ON_HOME_QUARANTINE` varchar(255) DEFAULT NULL,
  `COMPLETED_HOME_QUARANTINE` varchar(255) DEFAULT NULL,
  `RESULT` varchar(255) DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblpums`
--

CREATE TABLE `tblpums` (
  `ID` int(11) DEFAULT NULL,
  `Home_Quarantined` varchar(255) DEFAULT NULL,
  `ADMITTED` varchar(255) DEFAULT NULL,
  `DATE_OF_BIRTH` varchar(255) DEFAULT NULL,
  `AGE` varchar(255) DEFAULT NULL,
  `SEX` varchar(255) DEFAULT NULL,
  `PLACE` varchar(255) DEFAULT NULL,
  `ARRIVAL_IN_ZC` varchar(255) DEFAULT NULL,
  `FLIGHT` varchar(255) DEFAULT NULL,
  `ADDRESS_PLACE_OF_STAY_IN_ZC` varchar(255) DEFAULT NULL,
  `ADDRESS_BY_BARANGAY` varchar(255) DEFAULT NULL,
  `HEALTH_DISTRICT` varchar(255) DEFAULT NULL,
  `CATEGORY` varchar(255) DEFAULT NULL,
  `End` varchar(255) DEFAULT NULL,
  `No` varchar(255) DEFAULT NULL,
  `Remaining_Days` varchar(255) DEFAULT NULL,
  `DIAGNOSIS` varchar(255) DEFAULT NULL,
  `DATE_ENCODED` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`id`, `fullname`, `username`, `password`) VALUES
(1, 'Super Admin', 'yodadmin', 'xC0d3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
