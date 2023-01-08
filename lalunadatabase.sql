-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2023 at 10:57 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lalunadatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `Owners_ID` varchar(32) NOT NULL,
  `Owners_Name` text NOT NULL,
  `Pets_Name` text NOT NULL,
  `Contact_Number` bigint(20) NOT NULL,
  `Date_Booked` datetime NOT NULL,
  `App_Date` datetime NOT NULL,
  `Total` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hotel_services`
--

CREATE TABLE `hotel_services` (
  `Owners_ID` varchar(32) NOT NULL,
  `Room_Type` text NOT NULL,
  `No_of_Nights` int(11) NOT NULL,
  `Extra_Guests1` int(11) NOT NULL,
  `Extra_Guests2` int(11) NOT NULL,
  `Pet_Size` varchar(20) NOT NULL,
  `Hotel_Total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`username`, `password`) VALUES
('admin', 'pass123');

-- --------------------------------------------------------

--
-- Table structure for table `spa_services`
--

CREATE TABLE `spa_services` (
  `Owners_ID` varchar(32) NOT NULL,
  `Groomer` text NOT NULL,
  `Bath_Type` text NOT NULL,
  `Pet_Size` varchar(5) NOT NULL,
  `Discount` int(11) NOT NULL,
  `Add-on_Services` text DEFAULT NULL,
  `Spa_Total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`Owners_ID`);

--
-- Indexes for table `hotel_services`
--
ALTER TABLE `hotel_services`
  ADD PRIMARY KEY (`Owners_ID`);

--
-- Indexes for table `spa_services`
--
ALTER TABLE `spa_services`
  ADD PRIMARY KEY (`Owners_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
