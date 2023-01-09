-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2023 at 07:45 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

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

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`Owners_ID`, `Owners_Name`, `Pets_Name`, `Contact_Number`, `Date_Booked`, `App_Date`, `Total`) VALUES
('774de7b7b63e8c7dc203b62580c28e68', 'Yanna', 'Thea', 9952214003, '2023-01-08 06:49:53', '2023-01-10 08:50:00', '3502600');

-- --------------------------------------------------------

--
-- Table structure for table `groomer_details`
--

CREATE TABLE `groomer_details` (
  `Groomer_name` varchar(30) NOT NULL,
  `Commission` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `groomer_details`
--

INSERT INTO `groomer_details` (`Groomer_name`, `Commission`) VALUES
('Groomer 1', 10);

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

--
-- Dumping data for table `hotel_services`
--

INSERT INTO `hotel_services` (`Owners_ID`, `Room_Type`, `No_of_Nights`, `Extra_Guests1`, `Extra_Guests2`, `Pet_Size`, `Hotel_Total`) VALUES
('774de7b7b63e8c7dc203b62580c28e68', 'Suite', 3, 0, 0, 'X-XXL Dog', 2600);

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
('yanna', '123');

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
-- Dumping data for table `spa_services`
--

INSERT INTO `spa_services` (`Owners_ID`, `Groomer`, `Bath_Type`, `Pet_Size`, `Discount`, `Add-on_Services`, `Spa_Total`) VALUES
('774de7b7b63e8c7dc203b62580c28e68', 'Name2', 'Basic Bath', 'M', 50, '[Professional Styling] [Teeth Cleaning] ', 350);

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
