-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2021 at 10:10 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payfees`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data`
--

CREATE TABLE `tbl_data` (
  `matNum` varchar(15) NOT NULL,
  `stName` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `dept` varchar(255) NOT NULL,
  `level` int(3) NOT NULL,
  `acc` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_data`
--

INSERT INTO `tbl_data` (`matNum`, `stName`, `phone`, `dept`, `level`, `acc`) VALUES
('17d/121212', 'Chahyaandida Ishaya', '08143171712', 'Computer Science', 400, 1000),
('17U/360106', 'Denarius Jesse', '08143171712', 'Computer Science', 200, 85000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dept`
--

CREATE TABLE `tbl_dept` (
  `deptId` int(11) NOT NULL,
  `deptName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fees`
--

CREATE TABLE `tbl_fees` (
  `feesId` int(3) NOT NULL,
  `classlevel` varchar(255) NOT NULL,
  `fees` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_fees`
--

INSERT INTO `tbl_fees` (`feesId`, `classlevel`, `fees`) VALUES
(1, '100', 35000),
(2, '200', 40000),
(3, '300', 20000),
(4, '400', 15000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_level`
--

CREATE TABLE `tbl_level` (
  `levelId` int(3) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `loginId` int(3) NOT NULL,
  `MatNum` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `pws` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`loginId`, `MatNum`, `Email`, `pws`, `role`) VALUES
(1, '17d/121212', 'example@email.com', 'user123', 'user'),
(2, 'Admin', 'admin@email.com', 'admin123', 'admin'),
(3, '17u/360106', 'email@example.com', 'user123', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaction`
--

CREATE TABLE `tbl_transaction` (
  `transactionId` int(3) NOT NULL,
  `matNum` varchar(15) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `transactionAmount` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_transaction`
--

INSERT INTO `tbl_transaction` (`transactionId`, `matNum`, `phone`, `transactionAmount`) VALUES
(7, '17d/121212', '08143171712', 14000),
(9, '17U/360106', '08143171712', 40000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_data`
--
ALTER TABLE `tbl_data`
  ADD PRIMARY KEY (`matNum`),
  ADD KEY `myconstr` (`dept`),
  ADD KEY `myconstr1` (`level`);

--
-- Indexes for table `tbl_dept`
--
ALTER TABLE `tbl_dept`
  ADD PRIMARY KEY (`deptId`);

--
-- Indexes for table `tbl_fees`
--
ALTER TABLE `tbl_fees`
  ADD PRIMARY KEY (`feesId`);

--
-- Indexes for table `tbl_level`
--
ALTER TABLE `tbl_level`
  ADD PRIMARY KEY (`levelId`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`loginId`);

--
-- Indexes for table `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  ADD PRIMARY KEY (`transactionId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_dept`
--
ALTER TABLE `tbl_dept`
  MODIFY `deptId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_fees`
--
ALTER TABLE `tbl_fees`
  MODIFY `feesId` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_level`
--
ALTER TABLE `tbl_level`
  MODIFY `levelId` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `loginId` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  MODIFY `transactionId` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
