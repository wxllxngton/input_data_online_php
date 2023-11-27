-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2023 at 04:17 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kca`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE IF NOT EXISTS `student_details` (
  `id` int(11) NOT NULL,
  `f_name` varchar(256) NOT NULL,
  `m_name` varchar(256) DEFAULT NULL,
  `l_name` varchar(256) NOT NULL,
  `age` int(11) NOT NULL,
  `phone_no` varchar(256) NOT NULL,
  `reg_no` varchar(256) NOT NULL,
  `course` varchar(256) NOT NULL,
  `guardian_name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`id`, `f_name`, `m_name`, `l_name`, `age`, `phone_no`, `reg_no`, `course`, `guardian_name`) VALUES
(1, 'John', 'Robert', 'Doe', 20, '123-456-7890', 'S12345', 'Computer Science', 'Jane Doe'),
(2, 'Alice', NULL, 'Smith', 22, '987-654-3210', 'S54321', 'Mathematics', 'Bob Smith'),
(3, 'Eva', 'Maria', 'Johnson', 21, '555-123-4567', 'S67890', 'Physics', 'David Johnson'),
(4, 'Michael', 'Andrew', 'Brown', 23, '111-222-3333', 'S11223', 'Chemistry', 'Laura Brown'),
(5, 'Olivia', NULL, 'Miller', 20, '444-555-6666', 'S44556', 'Biology', 'Chris Miller'),
(6, 'Sophia', 'Grace', 'Wilson', 22, '777-888-9999', 'S77889', 'History', 'Emily Wilson'),
(7, 'Daniel', 'Joseph', 'Taylor', 21, '333-444-5555', 'S33445', 'English', 'Emma Taylor'),
(8, 'Aiden', NULL, 'Clark', 23, '666-777-8888', 'S66778', 'Geography', 'Sophie Clark'),
(9, 'Emma', 'Rose', 'Jones', 20, '999-000-1111', 'S90111', 'Economics', 'Matthew Jones'),
(10, 'John', '', 'Ombuya', 96, '+25479898989', '20/456456', 'BSc. Software Development', 'Mama John'),
(11, 'Shannon', '', 'Kioko', 16, '+25474646464646', '20/465298', 'BSc. Software Development', 'Mama Shan'),
(12, 'Neil', '', 'Degrassi', 59, '+25487894123', '20/132138', 'Economics', 'Baba Neil'),
(13, 'Kong', 'Long', 'Mong', 26, '+25487953231', '20/04513321', 'Applied Computing', 'Mr. Long Kong');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
