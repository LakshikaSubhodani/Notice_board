-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2021 at 04:13 AM
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
-- Table structure for table `no_attachment`
--

CREATE TABLE `no_attachment` (
  `attachment_Id` int(11) NOT NULL,
  `attachment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `no_attachment`
--

INSERT INTO `no_attachment` (`attachment_Id`, `attachment`) VALUES
(1, '1624326320.png');

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
-- Table structure for table `no_notice`
--

CREATE TABLE `no_notice` (
  `notice_Id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `discription` varchar(500) NOT NULL,
  `notice_type` varchar(45) NOT NULL,
  `expire_date` datetime NOT NULL,
  `notice_status` varchar(25) NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  `delete_date` datetime DEFAULT NULL,
  `attachment_Id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `no_notice`
--

INSERT INTO `no_notice` (`notice_Id`, `title`, `discription`, `notice_type`, `expire_date`, `notice_status`, `create_date`, `update_date`, `delete_date`, `attachment_Id`) VALUES
(1, 'Notice created by super admin', 'ng it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident', 'News', '2021-06-20 00:00:00', 'Active', '2021-06-20 15:39:57', '2021-06-20 15:39:57', '0000-00-00 00:00:00', NULL),
(2, 'Notice create by Union', 'consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in sect', 'Hostal', '2021-06-30 15:45:01', 'Active', '2021-06-20 15:45:01', '2021-06-20 15:45:01', NULL, NULL),
(3, 'Notice create by applied faculty admin', 'something goes here', 'applied result', '2021-06-24 08:33:59', 'Active', '2021-06-21 08:33:59', '2021-06-21 08:33:59', NULL, NULL),
(4, 'Management faculty notice', 'something goes here', 'managemet  faculty result sheet', '2021-06-24 08:37:18', 'Active', '2021-06-21 08:37:18', '2021-06-21 08:37:18', NULL, NULL),
(5, 'Applied faculty delete notice', 'something goes here', 'applied result', '2021-06-24 08:42:14', 'Delete', '2021-06-21 08:42:14', '2021-06-21 08:42:14', '2021-06-23 08:42:14', NULL),
(6, 'database check', 'else', 'check', '2021-06-23 00:00:00', 'Active', '2021-06-22 00:00:00', '2021-06-22 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Stand-in structure for view `no_notice_all_view`
-- (See below for the actual view)
--
CREATE TABLE `no_notice_all_view` (
`notice_Id` int(11)
,`title` varchar(255)
,`discription` varchar(500)
,`notice_type` varchar(45)
,`expire_date` datetime
,`notice_status` varchar(25)
,`create_date` datetime
,`update_date` datetime
,`admin_Id` int(11)
,`admin_firstname` varchar(50)
,`admin_lastname` varchar(50)
,`faculty_Id` int(11)
,`faculty` varchar(100)
);

-- --------------------------------------------------------

--
-- Table structure for table `no_notice_author`
--

CREATE TABLE `no_notice_author` (
  `notice_author_Id` int(11) NOT NULL,
  `admin_Id` int(11) NOT NULL,
  `notice_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `no_notice_author`
--

INSERT INTO `no_notice_author` (`notice_author_Id`, `admin_Id`, `notice_Id`) VALUES
(1, 101, 1),
(2, 102, 2),
(3, 103, 3),
(4, 104, 4),
(5, 103, 5);

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
(1001, 'UWUCST18037', 'Lakshika', 'Subhodani', 763019544, 'wwlakshika@gmail.com', '1996-05-13', '1234', 'active', 3),
(1002, 'UWUCST18028', 'Sachini', 'Rajapaksha', 753153755, 'sachini@gmail.com', '1996-05-13', '1234', 'delete', 3),
(1003, 'UWUCST18045', 'Amasha', 'Perera', 768996321, 'cst18045@std.uwu.ac.lk', '1996-03-12', '1234', 'active', 3),
(1004, 'UWUCST18030', 'Dilshan', 'Anjula', 748596123, 'cst18030@std.uwu.ac.lk', '1998-06-14', '12345', 'active', 3),
(1005, 'UWUCST18039', 'Nimesha', 'Amarasekara', 758945896, 'cst18039@std.uwu.ac.lk', '1996-06-15', '1234', 'active', 3),
(1007, 'UWUCST18025', 'Niroda', 'Lakmali', 758956123, 'cst18025@std.uwu.ac.lk', '2021-06-01', '1234', 'active', 3),
(1008, 'UWUCST18003', 'Ravindu', 'Deerarathna', 774856123, 'cst18003@std.uwu.ac.lk', '2021-06-28', '1234', 'active', 3),
(1009, 'UWUCST004', 'Anil', 'Sanadakalum', 758963321, 'cst18004@std.uwu.ac.lk', '2021-06-26', '1234', 'active', 3),
(1011, 'UWUCST18066', 'Niroda', 'Subhodani', 748596123, 'amasha@std.uwu.ac.lk', '2021-06-16', '1996lucky', 'active', 5),
(1012, 'UWUCST18065', 'Niroda', 'Lakmali', 332256789, 'amasha@std.uwu.ac.lk', '2021-06-18', '1996lucky', 'active', 5),
(1013, 'UWUCST18064', 'Niroda', 'Lakmali', 332256789, 'admin@gmail.com', '2021-06-09', '1996lucky', 'active', 5),
(1014, 'UWUCST18063', 'Amasha', 'Subhodani', 758956123, 'cst18045@std.uwu.ac.lk', '2021-06-19', '1996lucky', 'active', 5),
(1015, 'UWUCST18059', 'Amasha', 'Perera', 748596123, 'cst18045@std.uwu.ac.lk', '2021-06-07', '1996lucky', 'active', 5),
(1016, 'UWUCST18062', 'Niroda', 'Perera', 758963123, 'cst18039@std.uwu.ac.lk', '2021-07-04', '1996lucky', 'active', 5),
(1017, 'UWUCST18001', 'Ruwini', 'Perera', 758963123, 'cst18045@std.uwu.ac.lk', '2021-07-08', '1996lucky', 'active', 5),
(1018, 'UWUCST18089', 'Niroda', 'Subhodani', 758945896, 'cst18039@std.uwu.ac.lk', '2021-07-05', '1996lucky', 'active', 3),
(1019, 'UWUCST18056', 'Amasha', 'Subhodani', 332256789, 'cst18030@std.uwu.ac.lk', '2021-06-14', '1996lucky', 'active', 5),
(1020, 'UWUCST18005', 'Wasana', 'Madushani', 758963456, 'wasana@gmail.com', '2021-06-16', '1234', '1234', 4);

-- --------------------------------------------------------

--
-- Structure for view `no_notice_all_view`
--
DROP TABLE IF EXISTS `no_notice_all_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `no_notice_all_view`  AS  select `n`.`notice_Id` AS `notice_Id`,`n`.`title` AS `title`,`n`.`discription` AS `discription`,`n`.`notice_type` AS `notice_type`,`n`.`expire_date` AS `expire_date`,`n`.`notice_status` AS `notice_status`,`n`.`create_date` AS `create_date`,`n`.`update_date` AS `update_date`,`ad`.`admin_Id` AS `admin_Id`,`ad`.`admin_firstname` AS `admin_firstname`,`ad`.`admin_lastname` AS `admin_lastname`,`f`.`faculty_Id` AS `faculty_Id`,`f`.`faculty` AS `faculty` from (((`no_notice` `n` join `no_notice_author` `a`) join `no_admin` `ad`) join `no_faculty` `f`) where `n`.`notice_Id` = `a`.`notice_Id` and `ad`.`admin_Id` = `a`.`admin_Id` and `ad`.`faculty_Id` = `f`.`faculty_Id` ;

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
-- Indexes for table `no_attachment`
--
ALTER TABLE `no_attachment`
  ADD PRIMARY KEY (`attachment_Id`);

--
-- Indexes for table `no_faculty`
--
ALTER TABLE `no_faculty`
  ADD PRIMARY KEY (`faculty_Id`);

--
-- Indexes for table `no_notice`
--
ALTER TABLE `no_notice`
  ADD PRIMARY KEY (`notice_Id`),
  ADD KEY `attachment_Id` (`attachment_Id`);

--
-- Indexes for table `no_notice_author`
--
ALTER TABLE `no_notice_author`
  ADD PRIMARY KEY (`notice_author_Id`),
  ADD KEY `admin_Id` (`admin_Id`),
  ADD KEY `notice_Id` (`notice_Id`);

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
-- AUTO_INCREMENT for table `no_attachment`
--
ALTER TABLE `no_attachment`
  MODIFY `attachment_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `no_faculty`
--
ALTER TABLE `no_faculty`
  MODIFY `faculty_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `no_notice`
--
ALTER TABLE `no_notice`
  MODIFY `notice_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `no_notice_author`
--
ALTER TABLE `no_notice_author`
  MODIFY `notice_author_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `no_system_log`
--
ALTER TABLE `no_system_log`
  MODIFY `system_log_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `no_user`
--
ALTER TABLE `no_user`
  MODIFY `user_Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1021;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `no_admin`
--
ALTER TABLE `no_admin`
  ADD CONSTRAINT `no_admin_ibfk_1` FOREIGN KEY (`faculty_Id`) REFERENCES `no_faculty` (`faculty_Id`);

--
-- Constraints for table `no_notice`
--
ALTER TABLE `no_notice`
  ADD CONSTRAINT `no_notice_ibfk_1` FOREIGN KEY (`attachment_Id`) REFERENCES `no_attachment` (`attachment_Id`);

--
-- Constraints for table `no_notice_author`
--
ALTER TABLE `no_notice_author`
  ADD CONSTRAINT `no_notice_author_ibfk_1` FOREIGN KEY (`admin_Id`) REFERENCES `no_admin` (`admin_Id`),
  ADD CONSTRAINT `no_notice_author_ibfk_2` FOREIGN KEY (`notice_Id`) REFERENCES `no_notice` (`notice_Id`);

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
