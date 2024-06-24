-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2024 at 10:42 AM
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
-- Database: `student_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `parents_contact_no` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `adhaar_no` varchar(255) NOT NULL,
  `permanent_address` varchar(255) NOT NULL,
  `correspondence_address` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `roll_no` varchar(10) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `academic_year` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `caste` varchar(255) NOT NULL,
  `sub_caste` varchar(255) NOT NULL,
  `ssc_roll` varchar(255) NOT NULL,
  `ssc_marks_obtained` int(11) NOT NULL,
  `ssc_total_marks` int(11) NOT NULL,
  `ssc_percentage` float(4,2) NOT NULL,
  `board_type_1` varchar(255) NOT NULL,
  `hssc_roll` varchar(255) NOT NULL,
  `hssc_marks_obtained` int(11) NOT NULL,
  `hssc_total_marks` int(11) NOT NULL,
  `hssc_percentage` float(4,2) NOT NULL,
  `board_type_2` varchar(255) NOT NULL,
  `gate_roll` varchar(255) NOT NULL,
  `gate_marks_obtained` int(11) NOT NULL,
  `gate_total_marks` int(11) NOT NULL,
  `gate_percentage` float(4,2) NOT NULL,
  `gate_rank` varchar(255) NOT NULL,
  `k_cet_marks` int(11) NOT NULL,
  `k_cet_rank` varchar(255) NOT NULL,
  `jee_marks` int(11) NOT NULL,
  `jee_rank` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `agent` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `first_name`, `middle_name`, `last_name`, `gender`, `date_of_birth`, `contact_no`, `parents_contact_no`, `email`, `adhaar_no`, `permanent_address`, `correspondence_address`, `course`, `roll_no`, `branch`, `academic_year`, `year`, `section`, `category`, `caste`, `sub_caste`, `ssc_roll`, `ssc_marks_obtained`, `ssc_total_marks`, `ssc_percentage`, `board_type_1`, `hssc_roll`, `hssc_marks_obtained`, `hssc_total_marks`, `hssc_percentage`, `board_type_2`, `gate_roll`, `gate_marks_obtained`, `gate_total_marks`, `gate_percentage`, `gate_rank`, `k_cet_marks`, `k_cet_rank`, `jee_marks`, `jee_rank`, `time`, `date`, `ip`, `agent`) VALUES
(2, 'Sankalp', 'Santosh', 'Naik', 'Male', '2002-11-05', '6361699484', '6361699484', 'snklpnaik@gmail.com', '656666666666', 'Kaigawada ,Mallapur\r\nKarwar', 'MITE Hostel', 'PG', '4MT20CS138', 'Computer Science and Engineering', '2022-2023', 'I Year', '03', 'RESERVED', 'OBC II A', 'Kshatriya Komarpanth', '123', 490, 500, 98.00, 'CBSE', '234', 475, 500, 95.00, 'CBSE', '12771', 222, 300, 74.00, '587986', 65, '64000', 21, '255796', '04:23:09 AM', '23/01/2023', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36'),
(3, 'A', 'A', 'A', 'Others', '2002-12-05', '6361699484', '9449378488', 'aaa@gmail.com', '555555555555', 'Udupi', 'Udupi', 'UG', '4MT20EC103', 'Computer Science and Engineering', '2022-2023', 'I Year', '02', 'OPEN', 'General', 'Brahmin', '11', 55, 100, 55.00, 'CBSE', '22', 65, 100, 65.00, 'State', '88', 77, 100, 77.00, '11111', 12, '66666', 45, '7777', '05:09:55 AM', '23/01/2023', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36'),
(4, 'Sakshi', 'Sadashiv', 'Shetty', 'Female', '2002-10-23', '9485664877', '6466587895', 'shettysakshi@gmail.com', '564585223555', 'Brahmavar, Udupi', 'Brahmavar, Udupi', 'UG', '4MT20CS136', 'Electronics and Commumnication Engineering', '2019-2020', 'Third Year', '02', 'OPEN', 'General', 'Brahmin', '577888', 89, 100, 89.00, 'State', '644577', 95, 100, 95.00, 'State', '-', 0, 0, 0.00, '-', 85, '21000', 50, '123554', '05:41:55 AM', '31/01/2023', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36'),
(7, 'Sanka', 'S', 'Nai', 'Male', '2024-06-04', '555555555', '6361699484', 'snlpnaik@gmail.com', '555588899988', 'MITE Hostel, T-315, Mangalore Institute Of Technology And Engineering, Mangalore, Mijar, Mudbidri, Mangalore', 'MITE Hostel, T-315, Mangalore Institute Of Technology And Engineering, Mangalore, Mijar, Mudbidri, Mangalore', 'UG', '4444444', 'Computer Science and Engineering', '2019-2020', 'Second Year', '03', 'OPEN', 'F', 'F', '44', 44, 44, 99.99, 'CBSE', '44', 44, 44, 99.99, 'CBSE', '44', 44, 44, 99.99, '44', 44, '44', 44, '44', '10:40:48 AM', '24/06/2024', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll_no` (`roll_no`),
  ADD UNIQUE KEY `adhaar_no` (`adhaar_no`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
