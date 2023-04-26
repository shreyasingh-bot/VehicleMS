-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2023 at 07:03 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vehicle`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `unid` int(50) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `mob` bigint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`unid`, `name`, `email`, `password`, `mob`) VALUES
(1, 'Shreya', 'shreya@gmail.com', '12345', 9523359861);

-- --------------------------------------------------------

--
-- Table structure for table `approve`
--

CREATE TABLE `approve` (
  `rqtid` int(50) NOT NULL,
  `lunid` int(30) NOT NULL,
  `unid` int(30) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `cid` int(30) NOT NULL,
  `vname` varchar(30) NOT NULL,
  `vnum` varchar(30) NOT NULL,
  `days` int(30) NOT NULL,
  `date` date NOT NULL,
  `pick` varchar(100) NOT NULL,
  `tid` bigint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `approve`
--

INSERT INTO `approve` (`rqtid`, `lunid`, `unid`, `uname`, `cid`, `vname`, `vnum`, `days`, `date`, `pick`, `tid`) VALUES
(3, 4, 5, 'tt', 3, 'sf', 'hrdg', 3, '2023-04-28', 'check', 234543),
(10, 1, 11, 'Shreya Singh', 1, 'MahindraTHAR', 'OD-08-2684', 5, '2023-04-30', 'tas,patna', 8767245634567),
(11, 1, 1, 'Shreya Singh', 1, 'MahindraTHAR', 'OD-08-2684', 4, '2023-04-21', 'tas,patna', 7624366),
(13, 1, 563, 'eris louis', 1, 'MahindraTHAR', 'OD-08-2684', 5, '2023-04-29', 'tas,patna', 345678765);

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lender`
--

CREATE TABLE `lender` (
  `unid` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` bigint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lender`
--

INSERT INTO `lender` (`unid`, `name`, `email`, `password`, `address`, `mobile`) VALUES
(1, 'Shreya Singh', 's@gmail.com', '1234', 'Chetna smiti sri nagar north of ag colony', 1234556789),
(2, 'yell will', 'yell@gmail.com', '1234', 'vani vihar,bbsr', 4527487293);

-- --------------------------------------------------------

--
-- Table structure for table `note_lender`
--

CREATE TABLE `note_lender` (
  `id` int(30) NOT NULL,
  `note` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `note_lender`
--

INSERT INTO `note_lender` (`id`, `note`) VALUES
(104, 'byeee'),
(105, 'hello jii');

-- --------------------------------------------------------

--
-- Table structure for table `note_user`
--

CREATE TABLE `note_user` (
  `id` int(30) NOT NULL,
  `note` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `note_user`
--

INSERT INTO `note_user` (`id`, `note`) VALUES
(1, 'hii user'),
(2, 'bye user');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `rqtid` int(50) NOT NULL,
  `unid` int(30) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `lunid` int(30) NOT NULL,
  `cid` int(30) NOT NULL,
  `vname` varchar(50) NOT NULL,
  `vnum` varchar(50) NOT NULL,
  `days` int(30) NOT NULL,
  `date` date NOT NULL,
  `pick` varchar(100) NOT NULL,
  `tid` bigint(50) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`rqtid`, `unid`, `uname`, `lunid`, `cid`, `vname`, `vnum`, `days`, `date`, `pick`, `tid`, `time`) VALUES
(19, 563, 'eris louis', 1, 1, 'MahindraTHAR', 'OD-08-2684', 1, '2023-05-07', 'tas,patna', 23456789876, '2023-04-26 21:43:11');

-- --------------------------------------------------------

--
-- Table structure for table `ssue`
--

CREATE TABLE `ssue` (
  `Srno` int(50) NOT NULL,
  `issue` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ssue`
--

INSERT INTO `ssue` (`Srno`, `issue`) VALUES
(1, 'hii there'),
(4, 'bad services'),
(5, 'hii');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `unid` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(30) NOT NULL,
  `mobile` bigint(40) NOT NULL,
  `address` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`unid`, `name`, `email`, `password`, `mobile`, `address`) VALUES
(11, 'Shreya Singh', 's@gmail.com', '1234', 82749294, 'BBSR'),
(563, 'eris louis', 'eri@gmail.com', '1234', 7246386289, 'patia,bbsr');

-- --------------------------------------------------------

--
-- Table structure for table `vehi`
--

CREATE TABLE `vehi` (
  `cid` int(30) NOT NULL,
  `lunid` int(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `vehno` varchar(50) NOT NULL,
  `desp` varchar(200) NOT NULL,
  `price` int(30) NOT NULL,
  `address` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehi`
--

INSERT INTO `vehi` (`cid`, `lunid`, `lname`, `name`, `type`, `vehno`, `desp`, `price`, `address`) VALUES
(1, 1, 'Shreya', 'MahindraTHAR', 'Jeep', 'OD-08-2684', ' Thar TGDI Petrol will make you forget your car. Both AMT and Manual', 1230, 'boring road.bbsr');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`unid`);

--
-- Indexes for table `approve`
--
ALTER TABLE `approve`
  ADD PRIMARY KEY (`rqtid`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lender`
--
ALTER TABLE `lender`
  ADD PRIMARY KEY (`unid`);

--
-- Indexes for table `note_lender`
--
ALTER TABLE `note_lender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `note_user`
--
ALTER TABLE `note_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`rqtid`);

--
-- Indexes for table `ssue`
--
ALTER TABLE `ssue`
  ADD PRIMARY KEY (`Srno`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`unid`);

--
-- Indexes for table `vehi`
--
ALTER TABLE `vehi`
  ADD PRIMARY KEY (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `unid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `lender`
--
ALTER TABLE `lender`
  MODIFY `unid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `note_lender`
--
ALTER TABLE `note_lender`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `note_user`
--
ALTER TABLE `note_user`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `rqtid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `ssue`
--
ALTER TABLE `ssue`
  MODIFY `Srno` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `unid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=564;

--
-- AUTO_INCREMENT for table `vehi`
--
ALTER TABLE `vehi`
  MODIFY `cid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
