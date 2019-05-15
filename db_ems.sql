-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2019 at 09:04 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ems`
--

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE `batch` (
  `b_year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`b_year`) VALUES
(2015),
(2016),
(2017),
(2018);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`) VALUES
(101, 'JAVA'),
(102, 'DBMS'),
(103, 'HISTORY');

-- --------------------------------------------------------

--
-- Table structure for table `invigilator_notice`
--

CREATE TABLE `invigilator_notice` (
  `date` varchar(11) NOT NULL,
  `timings` varchar(45) DEFAULT NULL,
  `teacher_teacher_id` int(11) NOT NULL,
  `seating_plan_room_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `invigilator_notice`
--

INSERT INTO `invigilator_notice` (`date`, `timings`, `teacher_teacher_id`, `seating_plan_room_no`) VALUES
('11.09.2018', 'Morning', 1002, 206),
('11.09.2018', 'Morning', 1006, 307),
('12.09.2018', 'Evening', 1004, 307),
('13.09.2018', 'Morning', 1004, 206),
('13.09.2018', 'Evening', 1006, 307),
('15.09.2018', 'Morning', 1002, 206),
('15.09.2018', 'Evening', 1006, 206);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `cgpa` int(11) DEFAULT NULL,
  `sgpa` varchar(45) DEFAULT NULL,
  `student_student_id` int(11) NOT NULL,
  `stream_stream` varchar(20) NOT NULL,
  `batch_b_year` int(11) NOT NULL,
  `course_course_id` int(11) NOT NULL,
  `Semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`cgpa`, `sgpa`, `student_student_id`, `stream_stream`, `batch_b_year`, `course_course_id`, `Semester`) VALUES
(8, '8.00', 1055, 'CSE', 2017, 101, 1),
(8, '8.3', 1055, 'CSE', 2017, 102, 1),
(9, '8.5', 1069, 'BCA', 2016, 101, 1),
(9, '8.7', 1126, 'BCA', 2018, 102, 1),
(9, '8.9', 1136, 'CSE', 2016, 101, 1),
(9, '8.7', 1136, 'CSE', 2016, 102, 1),
(8, '8.6', 1378, 'ARTS', 2018, 103, 1);

-- --------------------------------------------------------

--
-- Table structure for table `seating_plan`
--

CREATE TABLE `seating_plan` (
  `room_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `seating_plan`
--

INSERT INTO `seating_plan` (`room_no`) VALUES
(206),
(307);

-- --------------------------------------------------------

--
-- Table structure for table `stream`
--

CREATE TABLE `stream` (
  `stream` varchar(20) NOT NULL,
  `stream_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stream`
--

INSERT INTO `stream` (`stream`, `stream_id`) VALUES
('ARTS', 1),
('BCA', 2),
('CSE', 3);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `student_name` varchar(45) DEFAULT NULL,
  `batch_b_year` int(11) NOT NULL,
  `stream_stream` varchar(20) NOT NULL,
  `seating_plan_room_no` int(11) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_name`, `batch_b_year`, `stream_stream`, `seating_plan_room_no`, `password`) VALUES
(1055, 'Arun Saini', 2017, 'CSE', 307, 'arun6153'),
(1069, 'Ayush Walia', 2016, 'BCA', 307, 'yureka@4G'),
(1126, 'Jatin Arora', 2018, 'BCA', 206, 'jatin6153'),
(1136, 'Karan Goel', 2016, 'CSE', 307, 'catbrokg'),
(1378, 'Mridul Oberoi', 2018, 'ARTS', 206, 'mridul6153');

-- --------------------------------------------------------

--
-- Table structure for table `student_has_course`
--

CREATE TABLE `student_has_course` (
  `student_student_id` int(11) NOT NULL,
  `course_course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_has_course`
--

INSERT INTO `student_has_course` (`student_student_id`, `course_course_id`) VALUES
(1055, 101),
(1055, 102),
(1069, 101),
(1126, 101),
(1136, 102),
(1378, 101),
(1378, 103);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(11) NOT NULL,
  `teacher_name` varchar(45) DEFAULT NULL,
  `department` varchar(45) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `teacher_name`, `department`, `password`) VALUES
(1002, 'Dr. Shivani Gautam', 'DBMS', 'shivanig'),
(1004, 'S Aggarwal', 'JAVA', 'shankara'),
(1006, 'Dr. Neha Kishore Mam', 'CST', 'nehakish');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batch`
--
ALTER TABLE `batch`
  ADD PRIMARY KEY (`b_year`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `invigilator_notice`
--
ALTER TABLE `invigilator_notice`
  ADD PRIMARY KEY (`date`,`teacher_teacher_id`,`seating_plan_room_no`),
  ADD KEY `fk_invigilator_notice_teacher1_idx` (`teacher_teacher_id`),
  ADD KEY `fk_invigilator_notice_seating_plan1_idx` (`seating_plan_room_no`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`student_student_id`,`stream_stream`,`batch_b_year`,`course_course_id`),
  ADD KEY `fk_result_stream1_idx` (`stream_stream`),
  ADD KEY `fk_result_batch1_idx` (`batch_b_year`),
  ADD KEY `fk_result_course1_idx` (`course_course_id`);

--
-- Indexes for table `seating_plan`
--
ALTER TABLE `seating_plan`
  ADD PRIMARY KEY (`room_no`);

--
-- Indexes for table `stream`
--
ALTER TABLE `stream`
  ADD PRIMARY KEY (`stream`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`,`batch_b_year`,`stream_stream`,`seating_plan_room_no`),
  ADD KEY `fk_student_seating_plan1_idx` (`seating_plan_room_no`);

--
-- Indexes for table `student_has_course`
--
ALTER TABLE `student_has_course`
  ADD PRIMARY KEY (`student_student_id`,`course_course_id`),
  ADD KEY `fk_student_has_course_course1_idx` (`course_course_id`),
  ADD KEY `fk_student_has_course_student1_idx` (`student_student_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batch`
--
ALTER TABLE `batch`
  MODIFY `b_year` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2019;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1379;
--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1007;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `invigilator_notice`
--
ALTER TABLE `invigilator_notice`
  ADD CONSTRAINT `fk_invigilator_notice_seating_plan1` FOREIGN KEY (`seating_plan_room_no`) REFERENCES `seating_plan` (`room_no`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_invigilator_notice_teacher1` FOREIGN KEY (`teacher_teacher_id`) REFERENCES `teacher` (`teacher_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `fk_result_batch1` FOREIGN KEY (`batch_b_year`) REFERENCES `batch` (`b_year`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_result_course1` FOREIGN KEY (`course_course_id`) REFERENCES `course` (`course_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_result_stream1` FOREIGN KEY (`stream_stream`) REFERENCES `stream` (`stream`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_result_student1` FOREIGN KEY (`student_student_id`) REFERENCES `student` (`student_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `fk_student_seating_plan1` FOREIGN KEY (`seating_plan_room_no`) REFERENCES `seating_plan` (`room_no`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `student_has_course`
--
ALTER TABLE `student_has_course`
  ADD CONSTRAINT `fk_student_has_course_course1` FOREIGN KEY (`course_course_id`) REFERENCES `course` (`course_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_student_has_course_student1` FOREIGN KEY (`student_student_id`) REFERENCES `student` (`student_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
