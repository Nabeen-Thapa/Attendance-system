-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2024 at 01:10 PM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_table`
--
ALTER TABLE `student_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_table`
--
ALTER TABLE `student_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
