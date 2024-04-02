-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2024 at 01:08 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `course_table`
--

CREATE TABLE `course_table` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_table`
--

INSERT INTO `course_table` (`id`, `Name`) VALUES
(1, 'BCA'),
(2, 'BBA'),
(3, 'BIT'),
(4, 'BA'),
(5, 'CSIT'),
(6, 'BBS'),
(7, 'BCA'),
(8, 'BBA'),
(9, 'BIT'),
(10, 'BA'),
(11, 'CSIT'),
(12, 'BBS'),
(13, 'BCA'),
(14, 'BBA'),
(15, 'BIT'),
(16, 'BA'),
(17, 'CSIT'),
(18, 'BBS');

-- --------------------------------------------------------

--
-- Table structure for table `section_table`
--

CREATE TABLE `section_table` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `year_id` int(11) DEFAULT NULL,
  `sem_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section_table`
--

INSERT INTO `section_table` (`id`, `Name`, `year_id`, `sem_id`) VALUES
(1, 'section A', 1, 1),
(2, 'section B', 1, 1),
(3, 'section A', 1, 2),
(4, 'section B', 1, 2),
(5, 'section A', 2, 3),
(6, 'section B', 2, 3),
(7, 'section A', 2, 4),
(8, 'section B', 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `semester_table`
--

CREATE TABLE `semester_table` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `year_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `semester_table`
--

INSERT INTO `semester_table` (`id`, `Name`, `year_id`) VALUES
(1, 'First semester', 1),
(2, 'second semester', 1),
(3, 'third semester', 2),
(4, 'fourth semester', 2),
(5, 'fifth semester', 3),
(6, 'sixth semester', 3),
(7, 'seventh semester', 4),
(8, 'eighth semester', 4);

-- --------------------------------------------------------

--
-- Table structure for table `student_table`
--

CREATE TABLE `student_table` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `login_pwd` varchar(20) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `course_type` varchar(30) DEFAULT NULL,
  `std_course` varchar(255) NOT NULL,
  `year` varchar(50) DEFAULT NULL,
  `semester` varchar(50) DEFAULT NULL,
  `section` varchar(10) DEFAULT NULL,
  `RegistrationNo` varchar(30) NOT NULL,
  `RollNo` varchar(30) NOT NULL,
  `address` varchar(255) NOT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_table`
--

INSERT INTO `student_table` (`id`, `Name`, `Email`, `Phone`, `login_pwd`, `DOB`, `course_type`, `std_course`, `year`, `semester`, `section`, `RegistrationNo`, `RollNo`, `address`, `Gender`, `image`, `status`) VALUES
(2, 'Nabin Thapa', 'nabin@thapa.com', '9876543210', 'SlP02QlN', '2024-03-07', 'on', 'BCA', 'second year', 'fourth semester', 'A', '1342342', '21', 'jawalakhel', 'Male', '65f297018b279.png', 1),
(7, 'Ahyam Lal chaudhari', 'ahm@bal.com', '9876543211', 'gu5+!Ulc', '2024-03-13', 'semester-wise', 'BCA', 'second year', 'fifth semester', 'A', '654321', '123', 'patna', 'Male', '65ffc8c1d1be7.jpg', 1),
(8, 'Ram Lal', 'ram@lal.com', '9876543215', '9uvW@B.B', '2024-03-05', 'yearly', 'BBA', 'second year', '', 'A', '34523', '21', 'jawalakhel', 'Male', '65ffd6329f1cb.jpg', 1),
(9, 'Shyam Lal', 'Shyam@lal.com', '9876543215', 'Nlk?wx6$', '2024-03-05', 'yearly', 'BBA', 'second year', '', 'A', '34523', '21', 'jawalakhel', 'Male', '65ffd734dca30.jpg', 1),
(10, 'Narayan Hari', 'narayan@gmail.com', '9876543245', 'G%a9&!UC', '2024-03-13', 'yearly', 'BIT', 'second year', '', 'D', '3455412', '232', 'Patan', 'Male', '65ffd7cb7a3e3.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subjects_table`
--

CREATE TABLE `subjects_table` (
  `id` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Course` varchar(100) DEFAULT NULL,
  `Year` varchar(50) DEFAULT NULL,
  `Year_id` int(11) DEFAULT NULL,
  `Semester` varchar(50) DEFAULT NULL,
  `Sem_id` int(11) DEFAULT NULL,
  `Section` int(11) DEFAULT NULL,
  `Subject_code` varchar(50) DEFAULT NULL,
  `Course_type` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subjects_table`
--

INSERT INTO `subjects_table` (`id`, `Title`, `Course`, `Year`, `Year_id`, `Semester`, `Sem_id`, `Section`, `Subject_code`, `Course_type`) VALUES
(2, 'DBMS', 'BCA', 'second year', 2, 'fourth semester', 4, 0, 'CACS205', 'semester wise'),
(3, 'DBMS', 'BCA', 'second year', 2, 'fourth semester', 4, 0, 'CACS101', 'semester wise'),
(4, 'Scripting Language', 'BCA', 'second year', 2, 'fourth semester', 4, 0, 'CACS102', 'semester wise'),
(5, 'NUmerical Method', 'BCA', 'second year', 2, 'fourth semester', 4, 0, 'CACS103', 'semester wise'),
(6, 'java', 'BCA', 'second year', 2, 'third semester', 3, 0, 'CACS201', 'semester wise'),
(7, 'DSA', 'BIT', 'first year', 1, 'second semester', 2, 0, 'CACS301', 'semester wise');

-- --------------------------------------------------------

--
-- Table structure for table `year_table`
--

CREATE TABLE `year_table` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `course_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `year_table`
--

INSERT INTO `year_table` (`id`, `Name`, `course_id`) VALUES
(1, 'First year', NULL),
(2, 'Second year', NULL),
(3, 'Third year', NULL),
(4, 'Fourth year', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course_table`
--
ALTER TABLE `course_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_table`
--
ALTER TABLE `section_table`
  ADD PRIMARY KEY (`id`),
  ADD KEY `year_id` (`year_id`),
  ADD KEY `sem_id` (`sem_id`);

--
-- Indexes for table `semester_table`
--
ALTER TABLE `semester_table`
  ADD PRIMARY KEY (`id`),
  ADD KEY `year_id` (`year_id`);

--
-- Indexes for table `student_table`
--
ALTER TABLE `student_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects_table`
--
ALTER TABLE `subjects_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `year_table`
--
ALTER TABLE `year_table`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_id` (`course_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course_table`
--
ALTER TABLE `course_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `section_table`
--
ALTER TABLE `section_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `semester_table`
--
ALTER TABLE `semester_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `student_table`
--
ALTER TABLE `student_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `subjects_table`
--
ALTER TABLE `subjects_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `year_table`
--
ALTER TABLE `year_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `section_table`
--
ALTER TABLE `section_table`
  ADD CONSTRAINT `section_table_ibfk_1` FOREIGN KEY (`year_id`) REFERENCES `year_table` (`id`),
  ADD CONSTRAINT `section_table_ibfk_2` FOREIGN KEY (`sem_id`) REFERENCES `semester_table` (`id`);

--
-- Constraints for table `semester_table`
--
ALTER TABLE `semester_table`
  ADD CONSTRAINT `semester_table_ibfk_1` FOREIGN KEY (`year_id`) REFERENCES `year_table` (`id`);

--
-- Constraints for table `year_table`
--
ALTER TABLE `year_table`
  ADD CONSTRAINT `year_table_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course_table` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
