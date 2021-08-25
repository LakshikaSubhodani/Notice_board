-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2021 at 10:21 AM
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
-- Stand-in structure for view `no_admin_view`
-- (See below for the actual view)
--
CREATE TABLE `no_admin_view` (
`user_Id` int(50)
,`user_firstname` varchar(45)
,`user_lastname` varchar(45)
,`user_email` varchar(50)
,`user_status` varchar(45)
,`faculty` varchar(100)
);

-- --------------------------------------------------------

--
-- Table structure for table `no_attachment`
--

CREATE TABLE `no_attachment` (
  `attachment_Id` int(11) NOT NULL,
  `notice_Id` int(11) NOT NULL,
  `attachment_name` varchar(255) NOT NULL,
  `attachment_url` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `no_attachment`
--

INSERT INTO `no_attachment` (`attachment_Id`, `notice_Id`, `attachment_name`, `attachment_url`) VALUES
(6, 12, '1st-Year-EAG-TEA-PLT.pdf', 'http://localhost/assests/uploads/1st-Year-EAG-TEA-PLT.pdf'),
(7, 13, '2nd-Year-EAG-TEA-PLT.pdf', 'http://localhost/assests/uploads/2nd-Year-EAG-TEA-PLT.pdf'),
(8, 14, '3rd-Year-EAG-TEA-PLT_compressed.pdf', 'http://localhost/assests/uploads/3rd-Year-EAG-TEA-PLT_compressed.pdf'),
(9, 19, 'assessment_methods_semester.pdf', 'http://localhost/assests/uploads/assessment_methods_semester.pdf'),
(10, 20, 'countinuos_assessments_smesetr_sct.pdf', 'http://localhost/assests/uploads/countinuos_assessments_smesetr_sct.pdf'),
(11, 21, 'NOTICE1.docx', 'http://localhost/assests/uploads/NOTICE1.docx'),
(12, 21, 'NOTICE1.pdf', 'http://localhost/assests/uploads/NOTICE1.pdf'),
(13, 22, 'NOTICE2.docx', 'http://localhost/assests/uploads/NOTICE2.docx'),
(14, 22, 'NOTICE2.pdf', 'http://localhost/assests/uploads/NOTICE2.pdf'),
(15, 23, 'Graduate_Profiles_ENM.pdf', 'http://localhost/assests/uploads/Graduate_Profiles_ENM.pdf'),
(16, 24, 'NOTICE11.docx', 'http://localhost/assests/uploads/NOTICE11.docx'),
(17, 24, 'NOTICE11.pdf', 'http://localhost/assests/uploads/NOTICE11.pdf'),
(18, 25, 'NOTICE21.docx', 'http://localhost/assests/uploads/NOTICE21.docx'),
(19, 25, 'NOTICE21.pdf', 'http://localhost/assests/uploads/NOTICE21.pdf'),
(20, 26, 'bet_cources_2021.pdf', 'http://localhost/assests/uploads/bet_cources_2021.pdf'),
(21, 31, 'requesting_degree_completion_medium_of_instructions_letters_and_final_results_sheets.pdf', 'http://localhost/assests/uploads/requesting_degree_completion_medium_of_instructions_letters_and_final_results_sheets.pdf'),
(22, 32, 'repeat_exam_application.pdf', 'http://localhost/assests/uploads/repeat_exam_application.pdf'),
(23, 34, 'medical_application.pdf', 'http://localhost/assests/uploads/medical_application.pdf'),
(24, 35, 'NOTICE.docx', 'http://localhost/assests/uploads/NOTICE.docx'),
(25, 35, 'NOTICE.pdf', 'http://localhost/assests/uploads/NOTICE.pdf'),
(26, 36, 'Union_Notice1.docx', 'http://localhost/assests/uploads/Union_Notice1.docx'),
(27, 36, 'Union_Notice1.pdf', 'http://localhost/assests/uploads/Union_Notice1.pdf'),
(28, 37, 'Union_Notice2.docx', 'http://localhost/assests/uploads/Union_Notice2.docx'),
(29, 37, 'Union_Notice2.pdf', 'http://localhost/assests/uploads/Union_Notice2.pdf'),
(30, 38, 'Union_NOTICE3.docx', 'http://localhost/assests/uploads/Union_NOTICE3.docx'),
(31, 38, 'Union_NOTICE3.pdf', 'http://localhost/assests/uploads/Union_NOTICE3.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `no_coverimage`
--

CREATE TABLE `no_coverimage` (
  `cover_Id` int(11) NOT NULL,
  `notice_Id` int(11) NOT NULL,
  `cover_name` varchar(255) NOT NULL,
  `cover_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `no_coverimage`
--

INSERT INTO `no_coverimage` (`cover_Id`, `notice_Id`, `cover_name`, `cover_url`) VALUES
(8, 15, 'NOTICE1.PNG', 'http://localhost/assests/uploads/NOTICE1.PNG'),
(9, 16, 'NOTICE2.PNG', 'http://localhost/assests/uploads/NOTICE2.PNG'),
(10, 17, 'agnovator.jpg', 'http://localhost/assests/uploads/agnovator.jpg'),
(11, 18, 'Agribusiness-Management.png', 'http://localhost/assests/uploads/Agribusiness-Management.png'),
(12, 21, 'mobile_app_development.jpg', 'http://localhost/assests/uploads/mobile_app_development.jpg'),
(13, 22, 'learn-web-development.jpg', 'http://localhost/assests/uploads/learn-web-development.jpg'),
(14, 25, 'entreprenurship.jpg', 'http://localhost/assests/uploads/entreprenurship.jpg'),
(15, 27, 'NOTICE11.PNG', 'http://localhost/assests/uploads/NOTICE11.PNG'),
(16, 28, 'NOTICE21.PNG', 'http://localhost/assests/uploads/NOTICE21.PNG'),
(17, 29, 'NOTICE3.PNG', 'http://localhost/assests/uploads/NOTICE3.PNG'),
(18, 30, 'NOTICE5.PNG', 'http://localhost/assests/uploads/NOTICE5.PNG'),
(19, 33, 'Academic_Calender.jpg', 'http://localhost/assests/uploads/Academic_Calender.jpg'),
(20, 35, 'HostelCalling.PNG', 'http://localhost/assests/uploads/HostelCalling.PNG');

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
-- Table structure for table `no_links`
--

CREATE TABLE `no_links` (
  `link_Id` int(11) NOT NULL,
  `notice_Id` int(11) NOT NULL,
  `link_name` varchar(255) NOT NULL,
  `link_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `no_links`
--

INSERT INTO `no_links` (`link_Id`, `notice_Id`, `link_name`, `link_url`) VALUES
(3, 22, 'https://us04web.zoom.us/j/2586690703?pwd=bUxISnhnWjJXM2tDWHVYV2Fw YVVLdz09', 'https://us04web.zoom.us/j/2586690703?pwd=bUxISnhnWjJXM2tDWHVYV2Fw YVVLdz09'),
(4, 35, 'https://docs.google.com/forms/d/e/1FAIpQLSfE5Z7EUPKQN9wdiQgIMMCwy1BSuiltbSOjE9f7gQKc0zIE4Q/viewform?usp=sf_link ', 'https://docs.google.com/forms/d/e/1FAIpQLSfE5Z7EUPKQN9wdiQgIMMCwy1BSuiltbSOjE9f7gQKc0zIE4Q/viewform?usp=sf_link ');

-- --------------------------------------------------------

--
-- Table structure for table `no_notice`
--

CREATE TABLE `no_notice` (
  `notice_Id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `discription` text DEFAULT NULL,
  `notice_type` varchar(45) NOT NULL,
  `expire_date` date NOT NULL,
  `notice_status` varchar(25) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp(),
  `update_date` datetime NOT NULL DEFAULT current_timestamp(),
  `delete_date` datetime DEFAULT NULL,
  `faculty_Id` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `no_notice`
--

INSERT INTO `no_notice` (`notice_Id`, `title`, `discription`, `notice_type`, `expire_date`, `notice_status`, `create_date`, `update_date`, `delete_date`, `faculty_Id`) VALUES
(12, 'Academic Time Table For First Year- Department of Export Agriculture', 'Academic Time Table for First Year 2020/2021- Department of Export Agriculture(EAG, PLT, TEA)', 'News', '2021-08-25', 'active', '2021-08-02 12:05:49', '2021-08-02 12:05:49', NULL, 5),
(13, 'Academic Time Table For Scond Year- Department of Export Agriculture', 'Academic Time Table for Second Year 2020/2021- Department of Export Agriculture(EAG, PLT, TEA)', 'News', '2021-08-02', 'active', '2021-08-02 12:08:28', '2021-08-02 12:08:28', NULL, 5),
(14, 'Academic Time Table For Third Year- Department of Export Agriculture', 'Academic Time Table for Third Year 2020/2021- Department of Export Agriculture(EAG, PLT, TEA)', 'News', '2021-08-25', 'active', '2021-08-02 12:15:43', '2021-08-02 12:15:43', NULL, 5),
(15, 'Sessions for students on Agriculture', '', 'Notice', '2021-08-25', 'active', '2021-08-02 12:18:57', '2021-08-02 12:18:57', NULL, 5),
(16, 'Sessions for students on Development of Export Agriculture', '', 'News', '2021-08-25', 'active', '2021-08-02 12:22:11', '2021-08-02 12:22:11', NULL, 5),
(17, 'Agnovator-2019 (Wings to new ideas)', '', 'News', '2021-08-02', 'active', '2021-08-02 12:26:33', '2021-08-02 12:26:33', NULL, 5),
(18, 'Certificate course in Agribusiness Management', '', 'News', '2021-08-25', 'active', '2021-08-02 12:42:26', '2021-08-02 12:42:26', NULL, 5),
(19, 'Assesments method Time table for MRT', 'Assesments method Time table for 2017/2018, 2018/2019, 2019/2020 batches of Mineral Resources and Technology Degree Program', 'Notice', '2021-08-31', 'active', '2021-08-25 07:26:57', '2021-08-25 07:26:57', NULL, 3),
(20, 'Assesments method Time table for SCT', 'Assesments method Time table for 2017/2018, 2018/2019, 2019/2020 batches of Science and Technology Degree Program \r\n', 'Notice', '2021-08-31', 'active', '2021-08-25 07:28:34', '2021-08-25 07:28:34', NULL, 3),
(21, 'Webinar on mobile application development', 'Webinar series conducted by faculty of Applied Sciences will be start from 20th August, 2021.\r\n', 'Event', '2021-08-31', 'active', '2021-08-25 07:31:11', '2021-08-25 07:31:11', NULL, 3),
(22, 'Webinar on web application development', 'Webinar series conducted by faculty of Applied Sciences will be start from 5th August, 2021.\r\n', 'Event', '2021-08-31', 'active', '2021-08-25 07:33:28', '2021-08-25 07:33:28', NULL, 3),
(23, 'Graduate Profile - ENM', '', 'Notice', '2021-08-31', 'active', '2021-08-25 07:48:15', '2021-08-25 07:48:15', NULL, 4),
(24, 'Discussion session on Affect of Covid-19 on Tourism Industry', 'Faculty of Management is going to held discussion session on affects of covid-19 on tourism industry on 23rd July 2021 from 5.00pm- 7.00pm. The guest speaker is president of hotel owners society Sri Lanka, Mr. Malith Karunarathna. We invite you all to join with this discussion. Zoom link will be provide later.\r\n\r\nThank you.\r\nFaculty of Management,\r\nUva Wellassa University,\r\nPassara Rd,\r\nBadulla.', 'Notice', '2021-08-31', 'active', '2021-08-25 07:51:44', '2021-08-25 07:51:44', NULL, 4),
(25, 'Session on Entrepreneurship', 'Faculty of Management is going to held session on Entrepreneurship on 30th July 2021 from 5.00pm- 7.00pm. The guest speaker is Mr. Dhammika Perera. We invite you all to join with this session. Zoom link will be provide later.\r\n\r\nThank you.\r\n\r\nFaculty of Management,\r\nUva Wellassa University,\r\nPassara Rd,\r\nBadulla.', 'Notice', '2021-08-31', 'active', '2021-08-25 07:58:10', '2021-08-25 07:58:10', NULL, 4),
(26, 'Courses in BET Degree Program', 'Courses in BET Degree Program for 2021', 'Notice', '2021-08-31', 'active', '2021-08-25 08:28:11', '2021-08-25 08:28:11', NULL, 6),
(27, 'Outline of curricullun - third year', 'Outline of the curricullum of 3rd year Bio Systems Technology Degree program', 'Notice', '2021-08-31', 'active', '2021-08-25 08:50:02', '2021-08-25 08:50:02', NULL, 6),
(28, 'Outline of curricullun - first year', 'Outline of the curricullum of 1st year Bio Systems Technology Degree program', 'Notice', '2021-08-31', 'active', '2021-08-25 08:51:00', '2021-08-25 08:51:00', NULL, 6),
(29, 'Outline of curricullun - second year', 'Outline of the curricullum of 2nd year Bio Systems Technology Degree program', 'Notice', '2021-08-31', 'active', '2021-08-25 08:52:04', '2021-08-25 08:52:04', NULL, 6),
(30, 'Credit Distribution - first year', 'Credit Distribution of 1st year Bio Systems Technology Degree program', 'Notice', '2021-08-31', 'active', '2021-08-25 08:53:04', '2021-08-25 08:53:04', NULL, 6),
(31, 'Requesting degree completion medium of instructions letters and final results sheets', '', 'Notice', '2021-08-31', 'active', '2021-08-25 09:15:07', '2021-08-25 09:15:07', NULL, 1),
(32, 'Application Form for Semester Examination Registration Repeat Attempts', '', 'News', '2021-08-31', 'active', '2021-08-25 09:51:03', '2021-08-25 09:51:03', NULL, 1),
(33, 'Resived Academic Calender for Acdemic year - 2020/2021', '', 'Notice', '2021-08-31', 'active', '2021-08-25 09:52:54', '2021-08-25 09:52:54', NULL, 1),
(34, 'Submission of medical certificates for Absense at semester Examnation', '', 'Notice', '2021-08-31', 'active', '2021-08-25 09:55:08', '2021-08-25 09:55:08', NULL, 1),
(35, 'Calling Applications for Hostels', 'Calling applications for hostels is started now. If you hope to apply for hostel facilities please fill the form attached with this and upload completely filled forms to the following link. Please note that you have to send this form before 30th July 2021.\r\n\r\nThank you.', 'Hostel', '2021-08-31', 'active', '2021-08-25 10:04:40', '2021-08-25 10:04:40', NULL, 1),
(36, 'Student Difficulties - covid 19 pandemic situation', 'Due to Covid-19 situation if you are facing any sort of difficulty when continuing studies, please inform Main Student Union. We will try to help you to overcome your problems.\r\n\r\nContact us: 0123456789 - Sandun\r\n0223456789 - Kavindu\r\n\r\nThank you.\r\n\r\nMain Students’ Union\r\nUva Wellassa University', 'Notice', '2021-08-31', 'active', '2021-08-25 13:17:26', '2021-08-25 13:17:26', NULL, 2),
(37, 'Lost purse', 'The purse of Malith Dayarathna, 2nd year student was lost on 2021.06.20 at university premises. It was black color and contain Student ID, NIC, 2 bank cards and about Rs.2000.00. If any of you found that purse please contact below persons or hand over it to the Main Student Union Office.\r\n\r\nContact : 032-1234567 - Malith\r\n0123456789 - Sandun\r\n0223456789 - Kavindu\r\n\r\nThank you.\r\n\r\nMain Students’ Union\r\nUva Wellassa University', 'News', '2021-08-31', 'active', '2021-08-25 13:20:08', '2021-08-25 13:20:08', NULL, 2),
(38, 'Annual Meeting', 'We hope to conduct the Annual Meeting of Student’s Union of Uva\r\nWellassa University on 10th July at 6.00pm via Zoom. We hope all of\r\nyour participation on that day.\r\n\r\nThank you.\r\n\r\nMain Students’ Union\r\nUva Wellassa University', 'News', '2021-08-31', 'active', '2021-08-25 13:21:47', '2021-08-25 13:21:47', NULL, 2);

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
(12, 5, 12),
(13, 5, 13),
(14, 5, 14),
(15, 5, 15),
(16, 5, 16),
(17, 5, 17),
(18, 5, 18),
(19, 3, 19),
(20, 3, 20),
(21, 3, 21),
(22, 3, 22),
(23, 4, 23),
(24, 4, 24),
(25, 4, 25),
(26, 6, 26),
(27, 6, 27),
(28, 6, 28),
(29, 6, 29),
(30, 6, 30),
(31, 1, 31),
(32, 1, 32),
(33, 1, 33),
(34, 1, 34),
(35, 1, 35),
(36, 2, 36),
(37, 2, 37),
(38, 2, 38);

-- --------------------------------------------------------

--
-- Stand-in structure for view `no_student_view`
-- (See below for the actual view)
--
CREATE TABLE `no_student_view` (
`user_Id` int(50)
,`enrollment_Id` varchar(45)
,`user_firstname` varchar(45)
,`user_lastname` varchar(45)
,`user_email` varchar(50)
,`user_status` varchar(45)
,`faculty` varchar(100)
);

-- --------------------------------------------------------

--
-- Table structure for table `no_system_log`
--

CREATE TABLE `no_system_log` (
  `system_log_Id` int(11) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `user_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `no_system_log`
--

INSERT INTO `no_system_log` (`system_log_Id`, `activity`, `date`, `user_Id`) VALUES
(1, 'Add new Admin User', '2021-07-07 20:07:52', 1036),
(2, 'insert notice id - 10', '2021-07-07 20:13:26', 1036),
(3, 'Create new notice. Id - 11', '2021-07-07 20:45:45', 1036),
(4, 'Delete Admin. Id - 1049', '2021-07-07 20:47:16', 1036),
(5, 'Delete Admin. Id - 1045', '2021-07-07 20:48:13', 1036),
(6, 'Delete Admin. Id - 1041', '2021-07-07 20:48:19', 1036),
(7, 'Delete Admin. Id - 1040', '2021-07-07 20:48:24', 1036),
(8, 'Insert new Admin. Id - 1050', '2021-07-25 07:55:20', 1036),
(9, 'Delete notice. Id - 11', '2021-07-25 07:59:32', 1036),
(10, 'Delete notice. Id - 10', '2021-07-25 07:59:39', 1036),
(11, 'Delete notice. Id - 9', '2021-07-25 07:59:44', 1036),
(12, 'Delete notice. Id - 8', '2021-07-25 07:59:49', 1036),
(13, 'Delete notice. Id - 4', '2021-07-25 07:59:54', 1036),
(14, 'Delete notice. Id - 3', '2021-07-25 07:59:58', 1036),
(15, 'Delete notice. Id - 7', '2021-07-25 08:00:29', 1037),
(16, 'Delete Student. Id - 1043', '2021-07-25 08:47:01', 1040),
(17, 'Create new notice. Id - 12', '2021-08-02 12:05:50', 1040),
(18, 'Create new notice. Id - 13', '2021-08-02 12:08:28', 1040),
(19, 'Create new notice. Id - 14', '2021-08-02 12:15:43', 1040),
(20, 'Create new notice. Id - 15', '2021-08-02 12:18:57', 1040),
(21, 'Create new notice. Id - 16', '2021-08-02 12:22:11', 1040),
(22, 'Create new notice. Id - 17', '2021-08-02 12:26:33', 1040),
(23, 'Create new notice. Id - 18', '2021-08-02 12:42:26', 1040),
(24, 'Create new notice. Id - 19', '2021-08-25 07:26:58', 1038),
(25, 'Create new notice. Id - 20', '2021-08-25 07:28:34', 1038),
(26, 'Create new notice. Id - 21', '2021-08-25 07:31:11', 1038),
(27, 'Create new notice. Id - 22', '2021-08-25 07:33:28', 1038),
(28, 'Create new notice. Id - 23', '2021-08-25 07:48:15', 1039),
(29, 'Create new notice. Id - 24', '2021-08-25 07:51:44', 1039),
(30, 'Create new notice. Id - 25', '2021-08-25 07:58:10', 1039),
(31, 'Create new notice. Id - 26', '2021-08-25 08:28:11', 1041),
(32, 'Create new notice. Id - 27', '2021-08-25 08:50:02', 1041),
(33, 'Create new notice. Id - 28', '2021-08-25 08:51:00', 1041),
(34, 'Create new notice. Id - 29', '2021-08-25 08:52:04', 1041),
(35, 'Create new notice. Id - 30', '2021-08-25 08:53:04', 1041),
(36, 'Create new notice. Id - 31', '2021-08-25 09:15:07', 1036),
(37, 'Create new notice. Id - 32', '2021-08-25 09:51:03', 1036),
(38, 'Create new notice. Id - 33', '2021-08-25 09:52:54', 1036),
(39, 'Create new notice. Id - 34', '2021-08-25 09:55:08', 1036),
(40, 'Create new notice. Id - 35', '2021-08-25 10:04:40', 1036),
(41, 'Create new notice. Id - 36', '2021-08-25 13:17:26', 1037),
(42, 'Create new notice. Id - 37', '2021-08-25 13:20:08', 1037),
(43, 'Create new notice. Id - 38', '2021-08-25 13:21:47', 1037);

-- --------------------------------------------------------

--
-- Table structure for table `no_user`
--

CREATE TABLE `no_user` (
  `user_Id` int(50) NOT NULL,
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

INSERT INTO `no_user` (`user_Id`, `user_firstname`, `user_lastname`, `user_contact`, `user_email`, `user_dob`, `user_password`, `user_status`, `faculty_Id`) VALUES
(1001, 'Lakshika', 'Subhodani', 763019544, 'wwlakshika@gmail.com', '1996-05-13', '12345', 'active', 3),
(1002, 'Sachini33', 'Rajapaksha', 753153755, 'sachiniperera123@gmail.com', '1987-09-16', '1234', 'delete', 3),
(1036, 'Nirmala', 'Rathnayake', 758969544, 'nirmala@gmail.com', '1982-02-15', '1234', 'active', 1),
(1037, 'Munasinghe', 'Bandara', 712222138, 'bandara@gmail.com', '1981-03-21', '1234', 'active', 2),
(1038, 'Priyanthi', 'Weerasinghe', 753153755, 'priyanthi@gmail.com', '1982-07-20', '1234', 'active', 3),
(1039, 'Sumudu', 'Nuwarapaksha', 782275053, 'sumudu@gmail.com', '1981-03-21', '1234', 'active', 4),
(1040, 'Prabhath', 'Tharaka', 753153755, 'prabhath@gmail.com', '1981-02-05', '1234', 'active', 5),
(1041, 'Hansika', 'Lakshani', 749428053, 'hansika@gmail.com', '1983-08-15', '1234', 'active', 6),
(1042, 'Malkanthi', 'Thennakon', 755375533, 'malkanthi@gmail.com', '1980-03-15', '1234', 'active', 2),
(1043, 'Niroda', 'Lakmali', 758956123, 'cst18001@std.uwu.ac.lk', '2021-07-26', '1996lucky', 'delete', 5),
(1044, 'Dilshan', 'Anjula', 758963123, 'anjula@uwu.ac.lk', '1990-01-16', '1234', 'active', 2),
(1045, 'Isuru', 'Wimukkthi', 758956123, 'amasha@std.uwu.ac.lk', '2021-07-02', '1234', 'active', 3),
(1046, 'Dimuthu', 'Sanjaya', 758945896, 'bet18001@std.uwu.ac.lk', '2021-07-27', '1996lucky', 'active', 6),
(1049, 'Kanaka', 'Prabhath', 766041733, 'kanakaprabhath@gmail.com', '2021-07-07', '12345', 'active', 1),
(1050, 'Gayan ', 'Rathnayaka', 758963456, 'gayan@uwu.ac.lk', '2019-06-18', '1234', 'active', 5),
(1057, 'Vihanga', 'Sathsara', 758956123, 'mrt18001@std.uwu.ac.lk', '1996-06-13', '1996lucky', 'active', 3),
(1058, 'Gaweshika', 'Maduhansi', 748596123, 'sct18001@std.uwu.ac.lk', '1996-05-14', '1996lucky', 'active', 3),
(1059, 'Mandira', 'Premathilaka', 748596123, 'iit18001@std.uwu.ac.lk', '1997-08-08', '1996lucky', 'active', 3),
(1060, 'Kusala', 'Edirithilaka', 748596123, 'tea18001@std.uwu.ac.lk', '1996-09-11', '1996lucky', 'active', 5),
(1061, 'Namal', 'Perera', 774856123, 'aqt18001@std.uwu.ac.lk', '1995-07-04', '1996lucky', 'active', 5),
(1062, 'Sahan', 'Randika', 758996456, 'eag18001@std.uwu.ac.lk', '1998-05-15', '1996lucky', 'active', 5),
(1063, 'Yoshani', 'Perera', 758963231, 'plt18001@std.uwu.ac.lk', '1995-03-08', '1996lucky', 'active', 5),
(1064, 'Gimhani', 'Sandareka', 758956123, 'ans18001@std.uwu.ac.lk', '1998-07-09', '1996lucky', 'active', 5),
(1065, 'Banuka', 'Perera', 758956123, 'enm18001@uwu.ac.lk', '1996-07-10', '1996lucky', 'active', 4),
(1066, 'Dineli', 'Madubhashini', 748596123, 'hte18001@uwu.ac.lk', '1996-07-16', '1996lucky', 'active', 4);

-- --------------------------------------------------------

--
-- Table structure for table `no_user_admin`
--

CREATE TABLE `no_user_admin` (
  `admin_Id` int(11) NOT NULL,
  `admin_type` varchar(100) NOT NULL,
  `user_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `no_user_admin`
--

INSERT INTO `no_user_admin` (`admin_Id`, `admin_type`, `user_Id`) VALUES
(1, 'Super admin', 1036),
(2, 'Union admin', 1037),
(3, 'Applied faculty admin', 1038),
(4, 'Management faculty admin', 1039),
(5, 'Agri faculty admin', 1040),
(6, 'Technology faculty admin', 1041),
(7, 'Union admin', 1042),
(8, 'Union_Admin', 1044),
(9, 'Applied_Faculty_Admin', 1045),
(11, 'Super_Admin', 1049),
(12, 'Agri_Faculty_Admin', 1050);

-- --------------------------------------------------------

--
-- Table structure for table `no_user_student`
--

CREATE TABLE `no_user_student` (
  `student_Id` int(11) NOT NULL,
  `enrollment_Id` varchar(45) NOT NULL,
  `user_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `no_user_student`
--

INSERT INTO `no_user_student` (`student_Id`, `enrollment_Id`, `user_Id`) VALUES
(1, 'UWUCST18037', 1001),
(2, 'UWUCST18028', 1002),
(3, 'UWUCST18001', 1043),
(4, 'UWUBET18001', 1046),
(11, 'UWUMRT18001', 1057),
(12, 'UWUSCT18001', 1058),
(13, 'UWUIIT18001', 1059),
(14, 'UWUTEA18001', 1060),
(15, 'UWUAQT18001', 1061),
(16, 'UWUEAG18001', 1062),
(17, 'UWUPLT18001', 1063),
(18, 'UWUANS18001', 1064),
(19, 'UWUENM18001', 1065),
(20, 'UWUHTE18001', 1066);

-- --------------------------------------------------------

--
-- Structure for view `no_admin_view`
--
DROP TABLE IF EXISTS `no_admin_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `no_admin_view`  AS  select `u`.`user_Id` AS `user_Id`,`u`.`user_firstname` AS `user_firstname`,`u`.`user_lastname` AS `user_lastname`,`u`.`user_email` AS `user_email`,`u`.`user_status` AS `user_status`,`f`.`faculty` AS `faculty` from ((`no_user` `u` join `no_user_admin` `ad` on(`ad`.`user_Id` = `u`.`user_Id`)) join `no_faculty` `f` on(`f`.`faculty_Id` = `u`.`faculty_Id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `no_student_view`
--
DROP TABLE IF EXISTS `no_student_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `no_student_view`  AS  select `u`.`user_Id` AS `user_Id`,`st`.`enrollment_Id` AS `enrollment_Id`,`u`.`user_firstname` AS `user_firstname`,`u`.`user_lastname` AS `user_lastname`,`u`.`user_email` AS `user_email`,`u`.`user_status` AS `user_status`,`f`.`faculty` AS `faculty` from ((`no_user` `u` join `no_user_student` `st` on(`st`.`user_Id` = `u`.`user_Id`)) join `no_faculty` `f` on(`f`.`faculty_Id` = `u`.`faculty_Id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `no_attachment`
--
ALTER TABLE `no_attachment`
  ADD PRIMARY KEY (`attachment_Id`),
  ADD KEY `notice_Id` (`notice_Id`);

--
-- Indexes for table `no_coverimage`
--
ALTER TABLE `no_coverimage`
  ADD PRIMARY KEY (`cover_Id`),
  ADD KEY `notice_Id` (`notice_Id`);

--
-- Indexes for table `no_faculty`
--
ALTER TABLE `no_faculty`
  ADD PRIMARY KEY (`faculty_Id`);

--
-- Indexes for table `no_links`
--
ALTER TABLE `no_links`
  ADD PRIMARY KEY (`link_Id`),
  ADD KEY `notice_Id` (`notice_Id`);

--
-- Indexes for table `no_notice`
--
ALTER TABLE `no_notice`
  ADD PRIMARY KEY (`notice_Id`);

--
-- Indexes for table `no_notice_author`
--
ALTER TABLE `no_notice_author`
  ADD PRIMARY KEY (`notice_author_Id`),
  ADD KEY `notice_Id` (`notice_Id`),
  ADD KEY `admin_Id` (`admin_Id`);

--
-- Indexes for table `no_system_log`
--
ALTER TABLE `no_system_log`
  ADD PRIMARY KEY (`system_log_Id`),
  ADD KEY `user_Id` (`user_Id`);

--
-- Indexes for table `no_user`
--
ALTER TABLE `no_user`
  ADD PRIMARY KEY (`user_Id`),
  ADD UNIQUE KEY `user_email` (`user_email`),
  ADD KEY `faculty_Id` (`faculty_Id`);

--
-- Indexes for table `no_user_admin`
--
ALTER TABLE `no_user_admin`
  ADD PRIMARY KEY (`admin_Id`),
  ADD KEY `user_Id` (`user_Id`);

--
-- Indexes for table `no_user_student`
--
ALTER TABLE `no_user_student`
  ADD PRIMARY KEY (`student_Id`),
  ADD UNIQUE KEY `enrollment_Id` (`enrollment_Id`),
  ADD KEY `user_Id` (`user_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `no_attachment`
--
ALTER TABLE `no_attachment`
  MODIFY `attachment_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `no_coverimage`
--
ALTER TABLE `no_coverimage`
  MODIFY `cover_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `no_faculty`
--
ALTER TABLE `no_faculty`
  MODIFY `faculty_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `no_links`
--
ALTER TABLE `no_links`
  MODIFY `link_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `no_notice`
--
ALTER TABLE `no_notice`
  MODIFY `notice_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `no_notice_author`
--
ALTER TABLE `no_notice_author`
  MODIFY `notice_author_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `no_system_log`
--
ALTER TABLE `no_system_log`
  MODIFY `system_log_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `no_user`
--
ALTER TABLE `no_user`
  MODIFY `user_Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1067;

--
-- AUTO_INCREMENT for table `no_user_admin`
--
ALTER TABLE `no_user_admin`
  MODIFY `admin_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `no_user_student`
--
ALTER TABLE `no_user_student`
  MODIFY `student_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `no_attachment`
--
ALTER TABLE `no_attachment`
  ADD CONSTRAINT `no_attachment_ibfk_1` FOREIGN KEY (`notice_Id`) REFERENCES `no_notice` (`notice_Id`);

--
-- Constraints for table `no_coverimage`
--
ALTER TABLE `no_coverimage`
  ADD CONSTRAINT `no_coverimage_ibfk_1` FOREIGN KEY (`notice_Id`) REFERENCES `no_notice` (`notice_Id`);

--
-- Constraints for table `no_links`
--
ALTER TABLE `no_links`
  ADD CONSTRAINT `no_links_ibfk_1` FOREIGN KEY (`notice_Id`) REFERENCES `no_notice` (`notice_Id`);

--
-- Constraints for table `no_notice_author`
--
ALTER TABLE `no_notice_author`
  ADD CONSTRAINT `no_notice_author_ibfk_2` FOREIGN KEY (`notice_Id`) REFERENCES `no_notice` (`notice_Id`),
  ADD CONSTRAINT `no_notice_author_ibfk_3` FOREIGN KEY (`admin_Id`) REFERENCES `no_user_admin` (`admin_Id`);

--
-- Constraints for table `no_system_log`
--
ALTER TABLE `no_system_log`
  ADD CONSTRAINT `no_system_log_ibfk_1` FOREIGN KEY (`user_Id`) REFERENCES `no_user` (`user_Id`);

--
-- Constraints for table `no_user`
--
ALTER TABLE `no_user`
  ADD CONSTRAINT `no_user_ibfk_1` FOREIGN KEY (`faculty_Id`) REFERENCES `no_faculty` (`faculty_Id`);

--
-- Constraints for table `no_user_admin`
--
ALTER TABLE `no_user_admin`
  ADD CONSTRAINT `no_user_admin_ibfk_1` FOREIGN KEY (`user_Id`) REFERENCES `no_user` (`user_Id`);

--
-- Constraints for table `no_user_student`
--
ALTER TABLE `no_user_student`
  ADD CONSTRAINT `no_user_student_ibfk_1` FOREIGN KEY (`user_Id`) REFERENCES `no_user` (`user_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
