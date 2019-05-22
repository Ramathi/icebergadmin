-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2019 at 01:55 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iceberg_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_room_booking`
--

CREATE TABLE `add_room_booking` (
  `First Name` varchar(20) NOT NULL,
  `Last Name` varchar(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Gender` text NOT NULL,
  `Mobile Number` varchar(20) NOT NULL,
  `City` text NOT NULL,
  `Arrive` datetime(6) NOT NULL,
  `Depart` datetime(6) NOT NULL,
  `No Of Persons` int(2) NOT NULL,
  `Room Type` varchar(10) NOT NULL,
  `Address` text NOT NULL,
  `Comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `add_room_details`
--

CREATE TABLE `add_room_details` (
  `Room Number` int(10) NOT NULL,
  `AC/ Non AC` varchar(10) NOT NULL,
  `Cancellation Charges` varchar(20) NOT NULL,
  `Telephone Number` int(20) NOT NULL,
  `Room Type` varchar(30) NOT NULL,
  `Meal` text NOT NULL,
  `Bed Capacity` int(2) NOT NULL,
  `Rent Per night` varchar(20) NOT NULL,
  `Room Details` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
