-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2024 at 06:12 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `hostel` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `hostel`) VALUES
(101, 'admin1', 'admin1', 'N'),
(102, 'admin2', 'admin2', 'M'),
(103, 'ggarg_be20@thapar.edu', 'admin3', 'K'),
(104, 'admin4', 'admin4', 'L');

-- --------------------------------------------------------

--
-- Table structure for table `leaveextension`
--

CREATE TABLE `leaveextension` (
  `id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `enddate` date NOT NULL,
  `cdate` datetime NOT NULL DEFAULT current_timestamp(),
  `approval` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `leaverequest`
--

CREATE TABLE `leaverequest` (
  `srno` int(11) NOT NULL,
  `id` int(100) NOT NULL,
  `begindate` date NOT NULL,
  `enddate` date NOT NULL,
  `approval` varchar(10) NOT NULL,
  `hostel` varchar(10) NOT NULL,
  `reqid` varchar(20) NOT NULL,
  `gateid` varchar(12) NOT NULL,
  `timestmp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pass`
--

CREATE TABLE `pass` (
  `pid` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pass`
--

INSERT INTO `pass` (`pid`, `username`, `password`, `id`) VALUES
(0, 'harsh@gmail.com', '1234567', 11),
(0, 'sahil@gmail.com', '123456', 12);

-- --------------------------------------------------------

--
-- Table structure for table `pdfdownload`
--

CREATE TABLE `pdfdownload` (
  `id` int(100) NOT NULL,
  `pdf` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `returnh`
--

CREATE TABLE `returnh` (
  `id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_content`
--

CREATE TABLE `user_content` (
  `pid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `roll` int(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `hostel` varchar(100) NOT NULL,
  `pemail` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_content`
--

INSERT INTO `user_content` (`pid`, `name`, `roll`, `branch`, `hostel`, `pemail`, `id`) VALUES
(0, 'harsh', 1212, 'cse', 'A', 'kapilaharsh16@gmail.com', 11),
(0, 'sahil', 1111, 'cse', 'B', 'kapilaharsh16@gmail.com', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `leaveextension`
--
ALTER TABLE `leaveextension`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaverequest`
--
ALTER TABLE `leaverequest`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `pass`
--
ALTER TABLE `pass`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `returnh`
--
ALTER TABLE `returnh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_content`
--
ALTER TABLE `user_content`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `leaveextension`
--
ALTER TABLE `leaveextension`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `leaverequest`
--
ALTER TABLE `leaverequest`
  MODIFY `srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `pass`
--
ALTER TABLE `pass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `returnh`
--
ALTER TABLE `returnh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_content`
--
ALTER TABLE `user_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
