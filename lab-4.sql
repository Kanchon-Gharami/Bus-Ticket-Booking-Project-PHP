-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Apr 03, 2021 at 06:22 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab-4`
--

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `BUS_NO` int(11) NOT NULL,
  `SOURCE` varchar(20) NOT NULL,
  `DESTINATION` varchar(20) NOT NULL,
  `COUCH_TYPE` varchar(20) NOT NULL,
  `FAIR_NUMBER` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`BUS_NO`, `SOURCE`, `DESTINATION`, `COUCH_TYPE`, `FAIR_NUMBER`) VALUES
(100, 'Rajshahi', 'Dhaka', 'Deluxe', 100),
(200, 'Dhaka', 'Chittagoung', 'Regular', 200),
(300, 'Dhaka', 'Shylet', 'Premium', 300),
(400, 'Rajshahi', 'USA', 'Pagla Express', 400);

-- --------------------------------------------------------

--
-- Table structure for table `cancellation`
--

CREATE TABLE `cancellation` (
  `PNR_NO` int(11) NOT NULL,
  `NO_OF_SEATS` int(11) NOT NULL,
  `ADDRESS` varchar(50) NOT NULL,
  `CONTACT_NO` int(11) NOT NULL,
  `STATUS` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE `passenger` (
  `TICKET_NO` int(11) NOT NULL,
  `NAME` varchar(200) NOT NULL,
  `AGE` int(11) NOT NULL,
  `SEX` char(4) NOT NULL,
  `CONTACT_NO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `PNR_NO` int(11) NOT NULL,
  `NO_OF_SEATS` int(11) NOT NULL,
  `ADDRESS` varchar(50) NOT NULL,
  `CONTACT_NO` int(11) NOT NULL,
  `STATUS` varchar(20) NOT NULL,
  `BUS_NO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`PNR_NO`, `NO_OF_SEATS`, `ADDRESS`, `CONTACT_NO`, `STATUS`, `BUS_NO`) VALUES
(100, 11, '221B Baker Street', 1812345678, 'Ticket Confirm', 100),
(200, 22, 'gdsg', 222, 'Ticket Confirm', 200),
(400, 4, 'UK', 215421515, 'Waiting', 400);

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `TICKET_NO` int(11) NOT NULL,
  `AGE` int(11) NOT NULL,
  `SEX` char(4) NOT NULL,
  `SOURCE` varchar(20) NOT NULL,
  `DESTINATION` varchar(20) NOT NULL,
  `DEP_TIME` varchar(20) NOT NULL,
  `JOURNEY_DATE` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`BUS_NO`),
  ADD UNIQUE KEY `BUS_NO` (`BUS_NO`);

--
-- Indexes for table `cancellation`
--
ALTER TABLE `cancellation`
  ADD PRIMARY KEY (`PNR_NO`);

--
-- Indexes for table `passenger`
--
ALTER TABLE `passenger`
  ADD PRIMARY KEY (`TICKET_NO`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`PNR_NO`),
  ADD UNIQUE KEY `PNR_NO` (`PNR_NO`),
  ADD KEY `busnumconstraint` (`BUS_NO`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`TICKET_NO`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `busnumconstraint` FOREIGN KEY (`BUS_NO`) REFERENCES `bus` (`BUS_NO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
