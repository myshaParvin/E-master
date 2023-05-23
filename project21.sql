-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 22, 2021 at 05:12 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project21`
--

-- --------------------------------------------------------

--
-- Table structure for table `course_info`
--

CREATE TABLE `course_info` (
  `course_id` int(10) NOT NULL,
  `course_code` varchar(10) NOT NULL,
  `coursename` varchar(50) NOT NULL,
  `coursetype` varchar(10) NOT NULL,
  `course_facultyid` int(10) NOT NULL,
  `course_session` year(4) NOT NULL,
  `class_time` time(6) NOT NULL,
  `duration` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_info`
--

INSERT INTO `course_info` (`course_id`, `course_code`, `coursename`, `coursetype`, `course_facultyid`, `course_session`, `class_time`, `duration`) VALUES
(1, 'Java', 'Java Beginners Course', 'Free', 1002, 2021, '10:00:00.000000', '3 months'),
(6, 'testing230', 'vkfnd', 'Paid', 1005, 2013, '00:00:12.000000', '1month');

-- --------------------------------------------------------

--
-- Table structure for table `facultypayment_info`
--

CREATE TABLE `facultypayment_info` (
  `fpayment_id` int(10) NOT NULL,
  `payment_session` varchar(50) NOT NULL,
  `payment_purpose` varchar(50) NOT NULL,
  `payment_to` int(10) NOT NULL,
  `payment_date` datetime(6) NOT NULL,
  `amount` int(10) NOT NULL,
  `t_amount` int(10) NOT NULL,
  `payment_method` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculty_info`
--

CREATE TABLE `faculty_info` (
  `faculty_id` int(10) NOT NULL,
  `facultyname` varchar(50) NOT NULL,
  `offered_courses` varchar(20) NOT NULL,
  `designation` varchar(20) NOT NULL,
  `nationality` varchar(10) NOT NULL,
  `joined` datetime(6) NOT NULL,
  `experience` int(2) NOT NULL,
  `email` varchar(50) NOT NULL,
  `faculty_type` varchar(10) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `role` varchar(10) NOT NULL,
  `mobile` int(11) NOT NULL,
  `password` varchar(10) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`firstname`, `lastname`, `email`, `dob`, `gender`, `role`, `mobile`, `password`, `user_id`) VALUES
('A', 'B', 'ab@mail.com', '2002-03-04', 'female', 'student', 16800, '1234', 12),
('mysha', 'parvin', 'mp@gmail.com', '1990-04-07', 'female', 'Admin', 178965432, 'oishee0987', 50),
('a', 'z', 'user@mail.com', '2021-11-02', 'Female', 'Student', 1684223960, '12345678', 59),
('a', 'z', 'user@mail.com', '2021-11-02', 'Female', 'Student', 1684223960, '12345678', 60),
('a', 'z', 'user@mail.com', '2021-11-02', 'Female', 'Student', 1684223960, '12345678', 61),
('a', 'z', 'user@mail.com', '2021-11-02', 'Female', 'Student', 1684223960, '12345678', 62),
('test', 'ing', 'test@hotmail.com', '1989-01-12', 'Male', 'Admin', 9876, 'test', 64),
('z', 'x', 'zx@gmail.com', '2003-01-09', 'Female', 'Admin', 9876, '1122', 1001),
('Eli', 'Porter', 'ep@hotmail.com', '2000-09-09', 'Female', 'Teacher', 1819171610, '1111', 1002),
('R', 'D', 'rd12@mail.com', '1996-02-05', 'Male', 'Teacher', 1213300501, '0099', 1003);

-- --------------------------------------------------------

--
-- Table structure for table `result_info`
--

CREATE TABLE `result_info` (
  `result_id` int(10) NOT NULL,
  `result_type` varchar(50) NOT NULL,
  `result_session` varchar(50) NOT NULL,
  `course_id` int(10) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `grade` varchar(50) NOT NULL,
  `cgpa` double NOT NULL,
  `remark` varchar(100) NOT NULL,
  `student_id` int(10) NOT NULL,
  `faculty_id` int(10) NOT NULL,
  `entry_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result_info`
--

INSERT INTO `result_info` (`result_id`, `result_type`, `result_session`, `course_id`, `course_name`, `grade`, `cgpa`, `remark`, `student_id`, `faculty_id`, `entry_date`) VALUES
(1, 'Quiz 1', '2021', 1, 'Java Beginners Course', 'B+', 3.02, 'Need to improve more, not satisfactory!', 12, 1002, '2021-12-16'),
(3, 'Quiz 2', '2021', 1, 'Mathematics', 'B', 3, 'Not Satisfactory', 61, 1002, '2021-12-02'),
(4, 'Quiz 2', '2021', 1, 'Mathematics', 'B', 3, 'Not Satisfactory', 61, 1002, '2021-12-02'),
(5, 'Quiz 3', '2021', 3, 'Biology', 'A-', 3.3, 'Average', 60, 1005, '2021-12-14');

-- --------------------------------------------------------

--
-- Table structure for table `stdpayment_info`
--

CREATE TABLE `stdpayment_info` (
  `payment_id` int(10) NOT NULL,
  `payment_session` varchar(50) NOT NULL,
  `payment_purpose` varchar(50) NOT NULL,
  `payment_by` int(10) NOT NULL,
  `payment_date` datetime(6) NOT NULL,
  `amount` int(20) NOT NULL,
  `t_amount` int(20) NOT NULL,
  `payment_method` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_ef_list`
--

CREATE TABLE `student_ef_list` (
  `id` int(10) NOT NULL,
  `student_id` int(10) NOT NULL,
  `ef_no` varchar(100) NOT NULL,
  `course_id` int(10) NOT NULL,
  `total_fee` float NOT NULL,
  `date_created` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `student_id` int(10) NOT NULL,
  `studentname` varchar(50) NOT NULL,
  `nationality` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `t_coursenumber` int(100) NOT NULL,
  `batch` varchar(10) NOT NULL,
  `session` varchar(10) NOT NULL,
  `completed_course` int(50) NOT NULL,
  `user_id` int(10) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course_info`
--
ALTER TABLE `course_info`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `facultypayment_info`
--
ALTER TABLE `facultypayment_info`
  ADD PRIMARY KEY (`fpayment_id`);

--
-- Indexes for table `faculty_info`
--
ALTER TABLE `faculty_info`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `result_info`
--
ALTER TABLE `result_info`
  ADD PRIMARY KEY (`result_id`);

--
-- Indexes for table `stdpayment_info`
--
ALTER TABLE `stdpayment_info`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `student_ef_list`
--
ALTER TABLE `student_ef_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course_info`
--
ALTER TABLE `course_info`
  MODIFY `course_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `facultypayment_info`
--
ALTER TABLE `facultypayment_info`
  MODIFY `fpayment_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1004;

--
-- AUTO_INCREMENT for table `result_info`
--
ALTER TABLE `result_info`
  MODIFY `result_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `stdpayment_info`
--
ALTER TABLE `stdpayment_info`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_ef_list`
--
ALTER TABLE `student_ef_list`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
