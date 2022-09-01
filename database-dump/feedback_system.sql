-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2022 at 10:38 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feedback_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `course_events`
--

CREATE TABLE `course_events` (
  `event_id` int(11) NOT NULL,
  `teacher_name` varchar(250) NOT NULL,
  `event_title` varchar(280) NOT NULL,
  `event_description` varchar(350) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `school` varchar(56) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_events`
--

INSERT INTO `course_events` (`event_id`, `teacher_name`, `event_title`, `event_description`, `date_created`, `school`) VALUES
(1, 'MR. PUTIN', 'assignment feedback', 'how was the assignment', '0000-00-00 00:00:00', 'school of arts');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(11) NOT NULL,
  `student_name` varchar(250) NOT NULL,
  `comment` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `feedback_type` varchar(56) NOT NULL,
  `subject` varchar(230) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `student_name`, `comment`, `date`, `feedback_type`, `subject`) VALUES
(1, 'John Kamau', 'it was hard!', '0000-00-00 00:00:00', 'comment', 'REF: feedback on assignment');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(280) NOT NULL,
  `full_names` varchar(350) NOT NULL,
  `course` varchar(350) NOT NULL,
  `school` varchar(250) NOT NULL,
  `date_registered` date NOT NULL DEFAULT current_timestamp(),
  `user_type` varchar(35) NOT NULL,
  `class_enrolled` varchar(230) NOT NULL,
  `interests` varchar(1200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `full_names`, `course`, `school`, `date_registered`, `user_type`, `class_enrolled`, `interests`) VALUES
(1, 'johndoe@gmail.com', 'johndoe', 'John doe msomi', 'BSC. Medicine', 'School of the Biological sciences', '2022-05-12', 'student', '', ''),
(2, 'johndoemsomi@gmail.com', 'admin', 'John doe msomi', 'BSC. Arts', 'School of the arts', '2022-05-13', 'student', '', ''),
(3, 'johndoemsomi@gmail.com', 'admin', 'Joan doe ', 'BSC. Agriculture', 'School of the Biological sciences', '2022-05-13', 'student', '', ''),
(4, 'joddsomi@gmail.com', 'admin', 'Jon doe ', 'BSC. IT', 'School of the Computer sciences', '2022-05-13', 'student', '', ''),
(5, 'frr@gmail.com', 'admin', 'francis', 'BSC Business', 'School of the Management', '2022-05-13', 'student', '', ''),
(6, 'johndoemsomi@gmail.com', 'admin', 'John doe msomi', 'BSC. Medicine', 'School of the arts', '2022-05-13', 'student', '', ''),
(7, 'johndoemsomi@gmail.com', 'admin', 'Joan doe ', 'BSC. IT', 'School of Communication', '2022-05-13', 'student', '', ''),
(8, 'johndoemsomi@gmail.com', 'admin', 'francis g', 'BSC. Agriculture', 'School of Educational Studies', '2022-05-13', 'student', '', ''),
(9, 'johndoemsomi@gmail.com', 'admin', 'Jon doe ', 'BSC. Agriculture', 'School of the Management', '2022-05-13', 'student', '', ''),
(10, 'johndoemsomi@gmail.com', 'admin', 'francis g', 'BSC. Medicine', 'School of the Biological sciences', '2022-05-13', 'student', '', ''),
(11, 'johndoemsomi@gmail.com', 'admin', 'Jon doe ', 'BSC. IT', 'School of Educational Studies', '2022-05-13', 'student', '', ''),
(12, 'johndoemsomi@gmail.com', 'admin', 'John doe msomi', 'BSC Business', 'School of the Management', '2022-05-13', 'student', '', ''),
(13, 'johndoemsomi@gmail.com', 'admin', 'John doe msomi', 'BSC. IT', 'School of the arts', '2022-05-13', 'student', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course_events`
--
ALTER TABLE `course_events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course_events`
--
ALTER TABLE `course_events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
