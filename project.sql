-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2020 at 11:05 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `getstudent` (IN `g` INT(6) ZEROFILL)  NO SQL
select usn,name,room_no,gender,batch from student$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin_signin`
--

CREATE TABLE `admin_signin` (
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_signin`
--

INSERT INTO `admin_signin` (`username`, `password`) VALUES
('roushan', 'raja'),
('srinivas', 'srini');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `name` varchar(230) NOT NULL,
  `email` varchar(25) NOT NULL,
  `message` varchar(2555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`name`, `email`, `message`) VALUES
('ROUSHAN RAJA', 'roushan12@gmail.com', 'can i pay my fees in 3 installment'),
('SRINIVAS D R ', 'srini@gmail.com', 'what is mess timing?'),
('SUDHANVA', 'sujay@gmail.com', 'WHAT IS THE WARDEN NUMBER?'),
('TEJAS', 'khaki@yahoo.com', 'my room fan is not working?'),
('anusha', 'anu143@yahoo.com', 'hot water is not coming?'),
('ROUSHAN RAJA', 'roushan12@gmail.com', 'i want to get admitted,can you tell me the ');

-- --------------------------------------------------------

--
-- Table structure for table `complaint_forum`
--

CREATE TABLE `complaint_forum` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint_forum`
--

INSERT INTO `complaint_forum` (`name`, `email`, `message`) VALUES
('Mohd Mizan Farooqui', 'roushan@gmail.com', 'I am a decent boy.'),
('ROUSHAN RAJA', 'roushan12@gmail.com', 'hot water is not coming?'),
('SUDHANVA', 'sujay@gmail.com', 'my room fan is not working?'),
('SRINIVAS D R ', 'srini@gmail.com', 'FOOD IS NOT GOOD'),
('TEJAS', 'khaki@yahoo.com', 'light got defused');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `usn` varchar(10) DEFAULT NULL,
  `department_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`usn`, `department_name`) VALUES
('1VK17CS032', 'Computer Science and Technology'),
('1vk17cs047', 'CSE'),
('1vk17cs061', 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `usn` varchar(10) DEFAULT NULL,
  `fees_submitted` varchar(20) DEFAULT NULL,
  `total_fees` varchar(345) NOT NULL DEFAULT '70000',
  `recipt_no` varchar(345) NOT NULL,
  `due_date` varchar(345) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`usn`, `fees_submitted`, `total_fees`, `recipt_no`, `due_date`) VALUES
('1VK17CS032', '30000', '70000', '321', 'knfkl'),
('1vk17cs047', '30000', '60000', '321', 'knfkl'),
('1vk17cs061', '20000', '70000', '329', 'sdsfs');

--
-- Triggers `fees`
--
DELIMITER $$
CREATE TRIGGER `feelog` AFTER INSERT ON `fees` FOR EACH ROW insert into fees_log values(NEW.usn,(SELECT total_fees from fees where usn=NEW.usn)-(SELECT fees_submitted from fees where usn=NEW.usn),NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `feelogu` AFTER UPDATE ON `fees` FOR EACH ROW update fees_log SET fee_left=(SELECT total_fees from fees where usn=NEW.usn)-(select fees_submitted from fees where usn=NEW.usn),date=NOW() where usn=NEW.usn
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `fees_log`
--

CREATE TABLE `fees_log` (
  `usn` varchar(20) DEFAULT NULL,
  `fee_left` varchar(345) NOT NULL,
  `date` varchar(340) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fees_log`
--

INSERT INTO `fees_log` (`usn`, `fee_left`, `date`) VALUES
('1VK17CS032', '40000', '2020-02-13 10:07:57'),
('1vk17cs047', '30000', '2020-02-13 10:20:05'),
('1vk17cs061', '50000', '2020-02-13 10:23:54');

-- --------------------------------------------------------

--
-- Table structure for table `hostel`
--

CREATE TABLE `hostel` (
  `hostel_id` varchar(10) NOT NULL,
  `hostel_type` varchar(10) DEFAULT NULL,
  `no_of_rooms` varchar(100) DEFAULT NULL,
  `block` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostel`
--

INSERT INTO `hostel` (`hostel_id`, `hostel_type`, `no_of_rooms`, `block`) VALUES
('1', 'Boys', '100', 'North'),
('2', 'Boys', '100', 'South'),
('3', 'Girls', '50', 'North'),
('4', 'Girls', '50', 'South');

-- --------------------------------------------------------

--
-- Table structure for table `mess`
--

CREATE TABLE `mess` (
  `day` varchar(15) DEFAULT NULL,
  `breakfast` varchar(20) DEFAULT NULL,
  `lunch` varchar(20) DEFAULT NULL,
  `snacks` varchar(20) DEFAULT NULL,
  `dinner` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mess`
--

INSERT INTO `mess` (`day`, `breakfast`, `lunch`, `snacks`, `dinner`) VALUES
('SUNDAY', 'ALOO PARATHA', 'PULAO', 'BISCUITS', 'EGG CURRY,RICE'),
('MONDAY', 'SET DOSA', 'ANNA SAMBAR', 'MADDUR VADA', 'RICE DAL'),
('TUESDAY', 'PALAV', 'ANNA SAMBAR', 'BREAD JAM', 'RICE BATH'),
('WEDNESDAY', 'IDLI VADA', 'ROTTI DAL', 'ALOO BONDA', 'CHICKEN BIRIYANI'),
('THURSDAY', 'PULIYOGARE', 'ANNA SAMBAR', 'MASALA VADA', 'CHAPATHI ANNA SAMBAR'),
('FRIDAY', 'MASALA DOSA', 'ANNA SAMBAR', 'SAMOSA', 'RAGI BALL SAMBAR'),
('SATURDAY', 'PURI', 'PALAV', 'EGG PUP', 'FISH CURRY');

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`username`, `password`) VALUES
('aniket', 'aniket123'),
('kavan', 'kavan'),
('raja', 'raja'),
('roushan', 'raja'),
('srinivas', 'srini'),
('sujay', 'pangari'),
('vinayak', 'vkit');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `name` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `usn` varchar(10) NOT NULL,
  `hostel_id` varchar(10) DEFAULT NULL,
  `batch` varchar(10) DEFAULT NULL,
  `img_src` varchar(789) NOT NULL,
  `room_no` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `gender`, `usn`, `hostel_id`, `batch`, `img_src`, `room_no`) VALUES
('Mohd. Mizan Farooqui', 'MALE', '1VK17CS032', '1', '2017', '../student_img/IMG-20191126-WA0005.jpg', '136'),
('Roushan Raja', 'M', '1vk17cs047', '1', '2017', '../student_img/logo1.jpg', '234'),
('Sujay', 'M', '1vk17cs061', '1', '2017', '../student_img/vkit.jpg', '234');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `usn` varchar(10) DEFAULT NULL,
  `f_name` varchar(30) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone_no` varchar(13) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`usn`, `f_name`, `address`, `phone_no`, `email`) VALUES
('1VK17CS032', 'Mohammed Farooqui', 'lucknow,Uttarpardesh', '8863094272', 'mizandada@hotmail.com'),
('1vk17cs047', 'Arun', 'BEngaluru', '9060994949', 'nfjnjd'),
('1vk17cs061', 'Shrivallabha', 'BEngaluru', '9060994949', 'df');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD KEY `department` (`usn`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD KEY `fees` (`usn`);

--
-- Indexes for table `fees_log`
--
ALTER TABLE `fees_log`
  ADD KEY `consd` (`usn`);

--
-- Indexes for table `hostel`
--
ALTER TABLE `hostel`
  ADD PRIMARY KEY (`hostel_id`);

--
-- Indexes for table `signin`
--
ALTER TABLE `signin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`usn`),
  ADD KEY `student` (`hostel_id`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD KEY `de` (`usn`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `department` FOREIGN KEY (`usn`) REFERENCES `student` (`usn`) ON DELETE CASCADE;

--
-- Constraints for table `fees`
--
ALTER TABLE `fees`
  ADD CONSTRAINT `fees` FOREIGN KEY (`usn`) REFERENCES `student` (`usn`) ON DELETE CASCADE;

--
-- Constraints for table `fees_log`
--
ALTER TABLE `fees_log`
  ADD CONSTRAINT `consd` FOREIGN KEY (`usn`) REFERENCES `student` (`usn`) ON DELETE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student` FOREIGN KEY (`hostel_id`) REFERENCES `hostel` (`hostel_id`) ON DELETE CASCADE;

--
-- Constraints for table `student_details`
--
ALTER TABLE `student_details`
  ADD CONSTRAINT `de` FOREIGN KEY (`usn`) REFERENCES `student` (`usn`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
