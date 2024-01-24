-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2024 at 03:42 AM
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
-- Database: `onlineschooldocuments_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course`
--

CREATE TABLE `tbl_course` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_decription` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_course`
--

INSERT INTO `tbl_course` (`course_id`, `course_name`, `course_decription`, `date_created`) VALUES
(14, 'Technical-Vocational Livelihood (TVL) ICT', 'Technical-Vocational Livelihood (TVL) ICT', '2023-12-02 17:15:24'),
(15, 'Technical-Vocational Livelihood (TVL) HE', 'Technical-Vocational Livelihood (TVL) HE', '2023-12-02 17:15:48'),
(16, 'Accountancy, Business, and Management (ABM)', 'Accountancy, Business, and Management (ABM)', '2023-12-02 17:16:30'),
(17, 'Science, technology, engineering, and mathematics (STEM)', 'Science, technology, engineering, and mathematics (STEM)', '2023-12-02 17:17:02'),
(19, 'Humanities and Social Sciences (HUMSS)', 'Humanities and Social Sciences (HUMSS)', '2023-12-02 17:18:12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_document`
--

CREATE TABLE `tbl_document` (
  `document_id` int(11) NOT NULL,
  `document_name` varchar(255) NOT NULL,
  `document_decription` varchar(255) NOT NULL,
  `image_size` text NOT NULL,
  `student_id` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_documentrequest`
--

CREATE TABLE `tbl_documentrequest` (
  `request_id` int(11) NOT NULL,
  `control_no` varchar(255) NOT NULL,
  `studentID_no` varchar(255) NOT NULL,
  `document_name` varchar(255) NOT NULL,
  `no_ofcopies` varchar(255) NOT NULL,
  `amount_to_pay` int(255) NOT NULL,
  `date_request` varchar(255) NOT NULL,
  `date_releasing` varchar(255) NOT NULL,
  `processing_officer` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `student_id` int(11) NOT NULL,
  `notif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` int(11) NOT NULL,
  `control_no` text NOT NULL,
  `studentID_no` text NOT NULL,
  `document_name` text NOT NULL,
  `date_releasing` text NOT NULL,
  `ref_number` text NOT NULL,
  `total_amount` text NOT NULL,
  `amount_paid` text NOT NULL,
  `date_ofpayment` text NOT NULL,
  `proof_ofpayment` varchar(255) NOT NULL,
  `student_id` int(11) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`payment_id`, `control_no`, `studentID_no`, `document_name`, `date_releasing`, `ref_number`, `total_amount`, `amount_paid`, `date_ofpayment`, `proof_ofpayment`, `student_id`, `status`) VALUES
(2, 'CTRL-0335', 'STDNT-23983', 'TOR', 'Nov 26, 2021', 'hbq0KQ8DlB', '3000', '5000', '2021-11-23', 'GCASH', 2, 'Paid');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `student_id` int(11) NOT NULL,
  `studentID_no` text NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `year_level` varchar(255) NOT NULL,
  `date_ofbirth` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `complete_address` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `account_status` text NOT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`student_id`, `studentID_no`, `first_name`, `middle_name`, `last_name`, `course`, `year_level`, `date_ofbirth`, `gender`, `complete_address`, `email_address`, `mobile_number`, `username`, `password`, `account_status`, `date_created`) VALUES
(7, 'STDNT-083635', 'Clark Kent', 'Supilanas', 'Neri', 'Technical-Vocational Livelihood (TVL) ICT', '11', '2006-03-05', 'Male', 'Malabag Silang Cavite', 'clarkkentneri123@gmail.com', '09552331550', 'poypoy', 'poypoy123', 'Active', '2023-12-02'),
(8, 'STDNT-2032002', 'Alex', 'L.', 'Doe', 'Technical-Vocational Livelihood (TVL) ICT', '11', '2006-01-01', 'Annonymous', '@@', '@@', '@@', '2032002', '123456', 'Active', '2024-01-24'),
(9, 'STDNT-53223309', 'Jummy', 'L.', 'Doe', 'Technical-Vocational Livelihood (TVL) ICT', '11', '2006-01-01', 'Annonymous', '@@', '@@', '@@', '53223309', '123456', 'Active', '2024-01-24'),
(10, 'STDNT-030320', 'Hemi', 'L', 'Lou', 'Technical-Vocational Livelihood (TVL) ICT', '12', '2006-01-01', 'Annonymous', '@@', '@@', '@@', '030320', '123456', 'Active', '2024-01-24'),
(11, 'STDNT-0334532', 'Nebu', 'L', 'Loe', 'Technical-Vocational Livelihood (TVL) HE', '11', '2006-01-01', 'Annonymous', '@@', '@@', '@@', '0334532', '123456', 'Active', '2024-01-24'),
(12, 'STDNT-23640050', 'Abby', 'L', 'Loe', 'Technical-Vocational Livelihood (TVL) HE', '11', '2006-01-01', 'Annonymous', '@@', '@@', '@@', '23640050', '123456', 'Active', '2024-01-24'),
(13, 'STDNT-3323353', 'Nehemiah', 'L', 'Moe', 'Technical-Vocational Livelihood (TVL) HE', '12', '2006-01-01', 'Annonymous', '@@', '@@', '@@', '3323353', '123456', 'Active', '2024-01-24'),
(14, 'STDNT-039030', 'Abbie', 'L', 'Loe', 'Accountancy, Business, and Management (ABM)', '11', '2005-01-01', 'Annonymous', '@@', '@@', '@@', '039030', '123456', 'Active', '2024-01-24'),
(15, 'STDNT-30202232', 'Alec', 'L', 'Doe', 'Accountancy, Business, and Management (ABM)', '12', '2005-01-01', 'Annonymous', '@@', '@@', '@@', '30202232', '123456', 'Active', '2024-01-24'),
(16, 'STDNT-37700338', 'Alice', 'L', 'Doe', 'Accountancy, Business, and Management (ABM)', '11', '2004-01-01', 'Annonymous', '@@', '@@', '@@', '37700338', '123456', 'Active', '2024-01-24'),
(17, 'STDNT-50222720', 'Hummy', 'L', 'Loe', 'Science, technology, engineering, and mathematics (STEM)', '12', '0005-01-01', 'Annonymous', '@@', '@@', '@@', '50222720', '123456', 'Active', '2024-01-24'),
(18, 'STDNT-2222307', 'Emma', 'L', 'Doe', 'Science, technology, engineering, and mathematics (STEM)', '12', '2006-01-01', 'Annonymous', '@@', '@@', '@@', '2222307', '123456', 'Active', '2024-01-24'),
(19, 'STDNT-2949025', 'Abel', 'L', 'Doe', 'Science, technology, engineering, and mathematics (STEM)', '11', '2006-01-01', 'Annonymous', '@@', '@@', '@@', '2949025', '123456', 'Active', '2024-01-24'),
(20, 'STDNT-3233003', 'David', 'L.', 'Loe', 'Humanities and Social Sciences (HUMSS)', '11', '2006-01-01', 'Annonymous', '@@', '@@', '@@', '3233003', '123456', 'Active', '2024-01-24'),
(21, 'STDNT-800533', 'Lily', 'L', 'Doe', 'Humanities and Social Sciences (HUMSS)', '12', '2006-01-01', 'Annonymous', '@@', '@@', '@@', '800533', '123456', 'Active', '2024-01-24'),
(22, 'STDNT-42372', 'Henry', 'L', 'Loe', 'Humanities and Social Sciences (HUMSS)', '12', '2005-01-01', 'Annonymous', '@@', '@@', '@@', '42372', '123456', 'Active', '2024-01-24');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_usermanagement`
--

CREATE TABLE `tbl_usermanagement` (
  `user_id` int(11) NOT NULL,
  `complete_name` varchar(255) NOT NULL,
  `desgination` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` text NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_usermanagement`
--

INSERT INTO `tbl_usermanagement` (`user_id`, `complete_name`, `desgination`, `email_address`, `phone_number`, `username`, `password`, `status`, `role`) VALUES
(1, 'admin admin', 'programmer', 'admin@gmail.com', '09978978999', 'admin', 'admin', 'Active', 'Administrator'),
(4, 'NERI', 'oc', 'clarkkentneri123@gmail.com', '09552331550', 'poyi1', 'poyi1', 'Active', ''),
(5, 'Om Ara', 'OC', 'N/A', '09729632193', 'Ara0@', '123456', 'Active', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_course`
--
ALTER TABLE `tbl_course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `tbl_document`
--
ALTER TABLE `tbl_document`
  ADD PRIMARY KEY (`document_id`);

--
-- Indexes for table `tbl_documentrequest`
--
ALTER TABLE `tbl_documentrequest`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `tbl_usermanagement`
--
ALTER TABLE `tbl_usermanagement`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_course`
--
ALTER TABLE `tbl_course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_document`
--
ALTER TABLE `tbl_document`
  MODIFY `document_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_documentrequest`
--
ALTER TABLE `tbl_documentrequest`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_usermanagement`
--
ALTER TABLE `tbl_usermanagement`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
