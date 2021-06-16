-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2021 at 05:37 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `notice_board`
--

-- --------------------------------------------------------

--
-- Table structure for table `no_admin`
--

CREATE TABLE `no_admin` (
  `admin_Id` int(11) NOT NULL,
  `admin_firstname` varchar(50) NOT NULL,
  `admin_lastname` varchar(50) NOT NULL,
  `admin_contact` int(10) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_dob` date NOT NULL,
  `admin_password` varchar(50) NOT NULL,
  `admin_status` varchar(50) NOT NULL,
  `faculty_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `no_admin`
--

INSERT INTO `no_admin` (`admin_Id`, `admin_firstname`, `admin_lastname`, `admin_contact`, `admin_email`, `admin_dob`, `admin_password`, `admin_status`, `faculty_Id`) VALUES
(101, 'Nirmala', 'Rathnayake', 758969544, 'nirmala@gmail.com', '1982-02-15', '1234', 'active', 1),
(102, 'Munasinghe', 'Bandara', 712222138, 'bandara@gmail.com', '1980-03-15', '12345', 'active', 2),
(103, 'Priyanthi', 'Weerasinghe', 770502002, 'priyanthi@gmail.com', '1982-07-20', '12345', 'active', 3),
(104, 'Sumudu', 'Nuwarapaksha', 782275053, 'sumudu@gmail.com', '1983-08-15', '1234', 'active', 4),
(105, 'Prabhath', 'Tharaka', 717575755, 'prabhath@gmail.com', '1985-04-14', '1234', 'active', 5),
(106, 'Hansika', 'Lakshani', 749428053, 'hansika@gmail.com', '1981-03-21', '1234', 'active', 6),
(107, 'Malkanthi', 'Thennakon', 755375533, 'malkanthi@gmail.com', '1981-02-05', '1234', 'delete', 2);

-- --------------------------------------------------------

--
-- Table structure for table `no_faculty`
--

CREATE TABLE `no_faculty` (
  `faculty_Id` int(11) NOT NULL,
  `faculty` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `no_faculty`
--

INSERT INTO `no_faculty` (`faculty_Id`, `faculty`) VALUES
(1, 'All Faculties'),
(2, 'Union'),
(3, 'Faculty of Applied Sciences'),
(4, 'Faculty of Management'),
(5, 'Faculty of Animal Science and Export Agriculture'),
(6, 'Faculty of Technological Studies');

-- --------------------------------------------------------

--
-- Table structure for table `no_system_log`
--

CREATE TABLE `no_system_log` (
  `system_log_Id` int(11) NOT NULL,
  `activity` varchar(45) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `user_Id` int(11) NOT NULL,
  `faculty_Id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `no_user`
--

CREATE TABLE `no_user` (
  `user_Id` int(50) NOT NULL,
  `enrollment_Id` varchar(50) NOT NULL,
  `user_firstname` varchar(45) NOT NULL,
  `user_lastname` varchar(45) NOT NULL,
  `user_contact` int(10) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_dob` date NOT NULL,
  `user_password` varchar(45) NOT NULL,
  `user_status` varchar(45) NOT NULL,
  `faculty_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `no_user`
--

INSERT INTO `no_user` (`user_Id`, `enrollment_Id`, `user_firstname`, `user_lastname`, `user_contact`, `user_email`, `user_dob`, `user_password`, `user_status`, `faculty_Id`) VALUES
(108, 'UWUCST18037', 'Lakshika', 'Subhodani', 763019544, 'wwlakshika@gmail.com', '1996-05-13', '1234', 'active', 3),
(109, 'UWUCST18028', 'Sachini', 'Rajapaksha', 753153755, 'sachini@gmail.com', '1996-05-13', '1234', 'delete', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `no_admin`
--
ALTER TABLE `no_admin`
  ADD PRIMARY KEY (`admin_Id`),
  ADD KEY `faculty_Id` (`faculty_Id`);

--
-- Indexes for table `no_faculty`
--
ALTER TABLE `no_faculty`
  ADD PRIMARY KEY (`faculty_Id`);

--
-- Indexes for table `no_system_log`
--
ALTER TABLE `no_system_log`
  ADD PRIMARY KEY (`system_log_Id`),
  ADD KEY `user_Id` (`user_Id`),
  ADD KEY `faculty_Id` (`faculty_Id`);

--
-- Indexes for table `no_user`
--
ALTER TABLE `no_user`
  ADD PRIMARY KEY (`user_Id`),
  ADD UNIQUE KEY `enrollment_Id` (`enrollment_Id`),
  ADD KEY `faculty_Id` (`faculty_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `no_admin`
--
ALTER TABLE `no_admin`
  MODIFY `admin_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `no_faculty`
--
ALTER TABLE `no_faculty`
  MODIFY `faculty_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `no_system_log`
--
ALTER TABLE `no_system_log`
  MODIFY `system_log_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `no_user`
--
ALTER TABLE `no_user`
  MODIFY `user_Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `no_admin`
--
ALTER TABLE `no_admin`
  ADD CONSTRAINT `no_admin_ibfk_1` FOREIGN KEY (`faculty_Id`) REFERENCES `no_faculty` (`faculty_Id`);

--
-- Constraints for table `no_system_log`
--
ALTER TABLE `no_system_log`
  ADD CONSTRAINT `no_system_log_ibfk_1` FOREIGN KEY (`user_Id`) REFERENCES `no_user` (`user_Id`),
  ADD CONSTRAINT `no_system_log_ibfk_2` FOREIGN KEY (`faculty_Id`) REFERENCES `no_faculty` (`faculty_Id`);

--
-- Constraints for table `no_user`
--
ALTER TABLE `no_user`
  ADD CONSTRAINT `no_user_ibfk_1` FOREIGN KEY (`faculty_Id`) REFERENCES `no_faculty` (`faculty_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
