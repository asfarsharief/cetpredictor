-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2020 at 03:57 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `collegedatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `cet_ranks`
--

CREATE TABLE `cet_ranks` (
  `Percentage` int(5) NOT NULL,
  `Rank_Upper` int(10) NOT NULL,
  `Rank_Lower` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cet_ranks`
--

INSERT INTO `cet_ranks` (`Percentage`, `Rank_Upper`, `Rank_Lower`) VALUES
(95, 0, 100),
(90, 100, 500),
(85, 500, 1000),
(80, 1000, 2000),
(75, 2000, 5000),
(70, 5000, 10000),
(65, 10000, 20000),
(60, 20000, 40000),
(55, 40000, 60000),
(50, 60000, 80000);

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `CollegeID` varchar(5) NOT NULL,
  `CollegeName` varchar(100) NOT NULL,
  `Info` varchar(1000) NOT NULL,
  `Address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`CollegeID`, `CollegeName`, `Info`, `Address`) VALUES
('E005', 'R.V College Of Engineering', 'R.V. College of Engineering (RVCE) established in 1963 is one of the earliest self-financing engineering colleges in the country. ', 'Mysore Rd, RV Vidyaniketan, Post, Bengaluru, Karnataka 560059'),
('E006', 'M S Ramaiah Institute of Technology', 'Ramaiah Institute of Technology, formerly M.S. Ramaiah Institute of Technology, is an autonomous private engineering college located in Bangalore, Karnataka and is affiliated to the Visvesvaraya Technological University', 'MSRIT Post, M S Ramaiah Nagar, MSR Nagar, Bengaluru, Karnataka 560054'),
('E048', 'BMS Institute Of Technology', 'B.M.S. College of Engineering (BMSCE) was Founded in the year 1946 by Late Sri. B. M. Sreenivasaiah a great visionary and philanthropist', ' Bull Temple Rd, Basavanagudi, Bengaluru, Karnataka 560019'),
('E078', 'The Oxford College Of Engineering', 'Very bad ', 'Near KR Puram'),
('E096', 'East Point College Of Engineering ', 'Sachin ke bhai ki college ', 'OMBR Layout '),
('E097', 'CMR Institute Of Technology', 'Email:principal@cmrit.ac.in,\r\nWebsite:www.cmrit.ac.in', '132, AECS Layout, ITPL Park Road, Kundalahalli\r\nVillage, BANGALORE - 560037');

-- --------------------------------------------------------

--
-- Table structure for table `college_ranks`
--

CREATE TABLE `college_ranks` (
  `index_no` int(4) NOT NULL,
  `CollegeID` varchar(5) NOT NULL,
  `Branch` varchar(5) NOT NULL,
  `Rank` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `college_ranks`
--

INSERT INTO `college_ranks` (`index_no`, `CollegeID`, `Branch`, `Rank`) VALUES
(1, 'E097', 'CSE', 8000),
(2, 'E097', 'ISE', 14000),
(3, 'E097', 'ECE', 16000),
(4, 'E097', 'EEE', 27000),
(5, 'E097', 'ME', 36000),
(6, 'E097', 'CE', 47000),
(7, 'E005', 'CE', 3395),
(8, 'E005', 'CSE', 80),
(9, 'E005', 'ECE', 232),
(10, 'E005', 'ISE', 225),
(11, 'E005', 'ME', 583),
(12, 'E005', 'EEE', 404),
(13, 'E006', 'CSE', 553),
(14, 'E006', 'CE', 7537),
(15, 'E006', 'ECE', 992),
(16, 'E006', 'EEE', 2114),
(17, 'E006', 'ISE', 977),
(18, 'E006', 'ME', 3211),
(19, 'E048', 'CE', 9746),
(20, 'E048', 'CSE', 453),
(21, 'E048', 'ECE', 883),
(22, 'E048', 'EEE', 2606),
(23, 'E048', 'ISE', 742),
(24, 'E048', 'ME', 2759),
(25, 'E096', 'CE', 145947),
(26, 'E096', 'CSE', 61659),
(27, 'E096', 'ECE', 145144),
(28, 'E096', 'EEE', 144013),
(29, 'E096', 'ISE', 108423),
(30, 'E096', 'ME', 144931),
(31, 'E078', 'CE', 79815),
(32, 'E078', 'CSE', 22413),
(33, 'E078', 'ECE', 37315),
(34, 'E078', 'EEE', 73863),
(35, 'E078', 'ISE', 38743),
(36, 'E078', 'ME', 90993);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Name` varchar(100) NOT NULL,
  `Age` int(3) NOT NULL,
  `Board` varchar(10) NOT NULL,
  `Phy` int(10) NOT NULL,
  `Che` int(10) NOT NULL,
  `Maths` int(10) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Name`, `Age`, `Board`, `Phy`, `Che`, `Maths`, `Username`, `Password`) VALUES
('Abhi', 18, 'CBSE', 88, 78, 68, 'abhi', 'abhi '),
('Abhi', 18, 'CBSE', 88, 78, 68, 'abhi12', 'abhi '),
('Arihant Bhat', 21, 'cbse', 80, 90, 100, 'arihant', 'arihant '),
('fgfg', 56, 'hm', 95, 65, 98, 'asd', 'asd '),
('Asfar', 18, 'CBSE', 89, 89, 82, 'asfar', 'asfar '),
('arjun', 18, 'cbse', 89, 88, 80, 'cmarjun', 'arjun '),
('shaurya', 18, '56', 48, 56, 89, 'shaurya', 'abcd ');

--
-- Triggers `login`
--
DELIMITER $$
CREATE TRIGGER `Add_Marks` AFTER INSERT ON `login` FOR EACH ROW INSERT INTO stud_marks (Username,Total_Marks) (Select lg.Username, lg.Phy+lg.Che+lg.Maths from login as lg WHERE lg.Username = new.Username)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `Update_Marks` AFTER UPDATE ON `login` FOR EACH ROW UPDATE stud_marks SET Username = (Select lg.Username from login as lg WHERE lg.Username = new.Username),
Total_Marks = (Select lg.Phy+lg.Che+lg.Maths from login as lg WHERE lg.Username = new.Username) 
WHERE Username = new.Username
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `stud_marks`
--

CREATE TABLE `stud_marks` (
  `index` int(2) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Total_Marks` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stud_marks`
--

INSERT INTO `stud_marks` (`index`, `Username`, `Total_Marks`) VALUES
(3, 'asfar', 260),
(4, 'abhi', 234),
(5, 'abhi12', 234),
(6, 'asd', 258),
(7, 'cmarjun', 257),
(8, 'arihant', 270),
(9, 'shaurya', 193);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`CollegeID`);

--
-- Indexes for table `college_ranks`
--
ALTER TABLE `college_ranks`
  ADD PRIMARY KEY (`index_no`),
  ADD KEY `CollegeID` (`CollegeID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `stud_marks`
--
ALTER TABLE `stud_marks`
  ADD PRIMARY KEY (`index`),
  ADD KEY `Username` (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `college_ranks`
--
ALTER TABLE `college_ranks`
  MODIFY `index_no` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `stud_marks`
--
ALTER TABLE `stud_marks`
  MODIFY `index` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `college_ranks`
--
ALTER TABLE `college_ranks`
  ADD CONSTRAINT `college_ranks_ibfk_1` FOREIGN KEY (`CollegeID`) REFERENCES `college` (`CollegeID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `stud_marks`
--
ALTER TABLE `stud_marks`
  ADD CONSTRAINT `stud_marks_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `login` (`Username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
