-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2024 at 01:17 PM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subjects_table`
--
ALTER TABLE `subjects_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subjects_table`
--
ALTER TABLE `subjects_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
