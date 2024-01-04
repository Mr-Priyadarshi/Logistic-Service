-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2022 at 06:25 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vls`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminaccount`
--

CREATE TABLE `adminaccount` (
  `user_id` int(11) NOT NULL,
  `FullName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminaccount`
--

INSERT INTO `adminaccount` (`user_id`, `FullName`, `Email`, `Password`, `Phone`) VALUES
(1, 'Anuj Kumar Pandey', 'pandeyanuj824@gmail.com', '25f9e794323b453885f5181f1b624d0b', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `bookingdetails`
--

CREATE TABLE `bookingdetails` (
  `id` int(11) NOT NULL,
  `itemid` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `item` varchar(255) NOT NULL,
  `source` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `weight` int(11) NOT NULL,
  `bookingstatus` varchar(255) NOT NULL DEFAULT 'Under Process',
  `deliverystatus` varchar(255) NOT NULL DEFAULT 'Not Delivered',
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookingdetails`
--

INSERT INTO `bookingdetails` (`id`, `itemid`, `userID`, `item`, `source`, `destination`, `weight`, `bookingstatus`, `deliverystatus`, `price`) VALUES
(1, 0, 13, 'tyre', 'basti', 'pryj', 2300, 'Under Process', 'Not Delivered', 0),
(2, 0, 13, 'Copy', 'Mirzapur', 'Kanpur', 10, 'Under Process', 'Not Delivered', 0),
(5, 149, 4, 'Cartoon', 'allahabad', 'mirzapur', 10, 'Payment Complete ', 'Delivered ', 0),
(6, 752, 4, 'Wire', 'Mirzapur', 'Kanpur', 5, 'Payment Complete ', 'Not Delivered', 0),
(7, 922, 4, 'Plastic', 'Banda', 'Gonda', 100, 'Under Process', 'Not Delivered', 20000),
(10, 437, 14, 'Iron', 'Patana', 'Kanpur', 9, 'Payment Completed ', 'Delivered ', 14400),
(11, 930, 4, 'Car', 'Mumbai', 'Kochhi', 27, 'Payment Complete ', 'Gujarat ', 1512000),
(12, 436, 4, 'Glass', 'Begusarai', 'Prayagraj', 20, 'Payment Completed ', 'Delivered ', 480000),
(13, 615, 16, 'Tyre', 'Alld', 'Mzp', 8, 'Completed ', 'Naini ', 51200),
(14, 675, 17, 'Plastic', 'Kanpur ', 'Ranchi', 18, 'Payment Completed ', 'Delivered ', 720000),
(15, 244, 4, 'Wire', 'Allahabad', 'Banaras', 20, 'Payment Complete ', 'Delivered ', 198400);

-- --------------------------------------------------------

--
-- Table structure for table `useraccount`
--

CREATE TABLE `useraccount` (
  `user_id` int(11) NOT NULL,
  `FullName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `C_Password` varchar(255) NOT NULL,
  `Phone` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `useraccount`
--

INSERT INTO `useraccount` (`user_id`, `FullName`, `Email`, `Password`, `C_Password`, `Phone`) VALUES
(4, 'Anuj Kumar Pandey', 'pandeyanuj824@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e', 2147483647),
(13, 'Ashish ', 'ashish@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b', 2147483647),
(14, 'Pratyush', 'pratyush@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b', 2147483647),
(15, 'Pushpam Singh', 'pushpam@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b', 2147483647),
(17, 'Pushpanjali ', 'pushpanjali@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b', 2147483647),
(18, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'd41d8cd98f00b204e9800998ecf8427e', 0),
(19, 'Pushpam', 'pushpam@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminaccount`
--
ALTER TABLE `adminaccount`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `bookingdetails`
--
ALTER TABLE `bookingdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminaccount`
--
ALTER TABLE `adminaccount`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bookingdetails`
--
ALTER TABLE `bookingdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `useraccount`
--
ALTER TABLE `useraccount`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
