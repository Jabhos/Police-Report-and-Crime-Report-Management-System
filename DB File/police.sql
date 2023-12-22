-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2023 at 07:39 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `police`
--

-- --------------------------------------------------------

--
-- Table structure for table `archrive`
--

CREATE TABLE `archrive` (
  `id` int(11) NOT NULL,
  `case_id` varchar(10) NOT NULL,
  `cid` varchar(10) NOT NULL,
  `report` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `archrive`
--

INSERT INTO `archrive` (`id`, `case_id`, `cid`, `report`, `date`) VALUES
(1, '230108105', '005', '                           case complete', '2023-01-08 18:16:43'),
(2, '230108105', '005', '                                            case is properly completed            ', '2023-01-08 18:22:32');

-- --------------------------------------------------------

--
-- Table structure for table `case_table`
--

CREATE TABLE `case_table` (
  `case_id` varchar(20) NOT NULL,
  `statement` varchar(200) NOT NULL,
  `caseid` int(11) NOT NULL,
  `date_added` datetime DEFAULT NULL,
  `staffid` varchar(30) NOT NULL,
  `case_type` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `cid` varchar(20) NOT NULL DEFAULT 'Not Yet',
  `complete_date` date NOT NULL,
  `diaryofaction` varchar(200) NOT NULL,
  `submit_to_court` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `case_table`
--

INSERT INTO `case_table` (`case_id`, `statement`, `caseid`, `date_added`, `staffid`, `case_type`, `status`, `cid`, `complete_date`, `diaryofaction`, `submit_to_court`) VALUES
('230107101', '', 1, '2023-01-07 01:10:15', '112', 'Theft Case', '', 'Not Yet', '0000-00-00', 'abcdkjhslkjdsn dso s[ idpsdposp do', 0),
('230107102', '', 2, '2023-01-07 01:10:59', '112', 'Domestic Violence', '', 'Not Yet', '0000-00-00', 'kasjakps\r\n', 0),
('230107103', '', 3, '2023-01-07 01:11:44', '112', 'Theft Case', '', 'Not Yet', '0000-00-00', 'ajshkajlsk\r\n', 0),
('230107104', '', 4, '2023-01-07 01:12:13', '112', 'Fraud', '', 'Not Yet', '0000-00-00', 'abcd abcd abcd', 0),
('230108105', '                                            case is properly completed            ', 5, '2023-01-08 18:11:57', '112', 'Domestic Violence', 'Completed', '005', '2023-01-08', 'Domestic violence', 1);

-- --------------------------------------------------------

--
-- Table structure for table `complainant`
--

CREATE TABLE `complainant` (
  `case_id` varchar(20) NOT NULL,
  `comp_name` varchar(100) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `occupation` varchar(20) NOT NULL,
  `region` varchar(50) NOT NULL,
  `district` varchar(100) NOT NULL,
  `loc` varchar(50) NOT NULL,
  `addrs` varchar(100) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `statement` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complainant`
--

INSERT INTO `complainant` (`case_id`, `comp_name`, `tel`, `occupation`, `region`, `district`, `loc`, `addrs`, `age`, `gender`, `date_added`, `statement`) VALUES
('230107101', 'Moeller', '5617343946', 'student', 'Chittagong', 'Bondor Thana', 'Bettendorf', '4069 Langtown Road', 22, 'Male', '2023-01-07 01:10:11', 'abcdkjhslkjdsn dso s[ idpsdposp do'),
('230107102', 'abc', '123', 'abc', 'Chittagong', 'Kotuwali Thana', 'abc', 'abc, abc', 12, 'Male', '2023-01-07 01:10:49', ''),
('230107103', 'cdef', '1234567', 'student', 'Chittagong', 'Kotuwali Thana', 'aknska', 'abc, abc,z', 19, 'Male', '2023-01-07 01:11:36', ''),
('230107104', 'm', '123', 'student', 'Chittagong', 'Patenga Thana', 'abcd', 'abcd, abcd', 12, 'Male', '2023-01-07 01:12:11', 'abcd abcd abcd'),
('230108105', 'Naima', '0987654', 'house maker', 'Dhaka', 'Dhanmondi Thana', 'Dhaka', 'housing society,Dhaka', 30, 'Female', '2023-01-08 18:11:52', 'Domestic violence');

-- --------------------------------------------------------

--
-- Table structure for table `court`
--

CREATE TABLE `court` (
  `id` int(11) NOT NULL,
  `case_id` int(11) DEFAULT NULL,
  `next_hearing_date` date DEFAULT NULL,
  `hearing_info` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `court`
--

INSERT INTO `court` (`id`, `case_id`, `next_hearing_date`, `hearing_info`) VALUES
(1, 230108105, '2023-01-09', 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `crime_type`
--

CREATE TABLE `crime_type` (
  `id` int(11) NOT NULL,
  `des` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crime_type`
--

INSERT INTO `crime_type` (`id`, `des`) VALUES
(1, 'Domestic Violence'),
(2, 'Murder Case'),
(3, 'Assault'),
(4, 'Theft Case'),
(5, 'Defilement'),
(6, 'Robbing'),
(7, 'Fraud'),
(8, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `hearings`
--

CREATE TABLE `hearings` (
  `id` int(11) NOT NULL,
  `case_id` varchar(30) DEFAULT NULL,
  `court_statement` text DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `staff_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hearings`
--

INSERT INTO `hearings` (`id`, `case_id`, `court_statement`, `updated_at`, `staff_id`) VALUES
(1, '230108105', 'Case will ongoing', '2023-01-08 18:19:46', 1000),
(2, '230108105', 'case is dismiss.', '2023-01-08 18:23:50', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `investigation`
--

CREATE TABLE `investigation` (
  `case_id` varchar(20) NOT NULL,
  `investigator` varchar(20) NOT NULL,
  `statement2` text NOT NULL,
  `assigned_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status2` varchar(100) NOT NULL,
  `completed_date` varchar(20) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `prev_complain`
--

CREATE TABLE `prev_complain` (
  `id` int(11) NOT NULL,
  `comp_name` varchar(100) DEFAULT NULL,
  `tel` varchar(10) DEFAULT NULL,
  `occupation` varchar(20) DEFAULT NULL,
  `loc` varchar(50) DEFAULT NULL,
  `addrs` varchar(100) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `date_added` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `NID` int(11) DEFAULT NULL,
  `statement` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prev_complain`
--

INSERT INTO `prev_complain` (`id`, `comp_name`, `tel`, `occupation`, `loc`, `addrs`, `age`, `gender`, `date_added`, `NID`, `statement`, `status`) VALUES
(1, '', NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-07 01:06:31', NULL, NULL, 0),
(2, 'Moeller', '5617343946', 'student', 'Bettendorf', '4069 Langtown Road', 22, 'Male', '2023-01-07 01:10:11', 121346453, 'abcdkjhslkjdsn dso s[ idpsdposp do', 1),
(3, 'm', '123', 'student', 'abcd', 'abcd, abcd', 12, 'Male', '2023-01-07 01:12:11', 1234, 'abcd abcd abcd', 1),
(4, 'z', '1234', 'student', 'abc', 'abc, abc', 20, 'Male', '2023-01-07 01:09:22', 12345, 'abc abc abc abc', 0),
(5, 'Naima', '0987654', 'house maker', 'Dhaka', 'housing society,Dhaka', 30, 'Female', '2023-01-08 18:11:52', 1237809, 'Domestic violence', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sos`
--

CREATE TABLE `sos` (
  `id` int(11) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `user_ip` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sos`
--

INSERT INTO `sos` (`id`, `latitude`, `longitude`, `user_ip`, `status`, `time`) VALUES
(21, 22.2829823, 91.7807933, '164.223.49.201', 1, '2023-01-07 00:17:44');

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE `support` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `nid` varchar(20) NOT NULL,
  `issue` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `support`
--

INSERT INTO `support` (`id`, `name`, `tel`, `email`, `nid`, `issue`, `date`) VALUES
(1, 'korim', '098765', 'korim@gmail.com', '123080', 'murder', '2023-01-12 18:37:01');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `id` int(11) NOT NULL,
  `staffid` varchar(20) NOT NULL,
  `status` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `othernames` varchar(50) NOT NULL,
  `confirmation` text DEFAULT NULL,
  `email` varchar(256) NOT NULL,
  `phone_no` varchar(256) NOT NULL,
  `nid_no` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`id`, `staffid`, `status`, `password`, `surname`, `othernames`, `confirmation`, `email`, `phone_no`, `nid_no`) VALUES
(0, '005', 'CID', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Osman ', 'Wumpini', 'approve', 'osman@gmail.com', '765439', '87654'),
(0, '1000', 'Court', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'dsdsds', 'ds', 'approve', 'ds@gmail.com', '786543', '98765'),
(0, '1111', 'Admin', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Osman', 'Yahaya', 'approve', 'yahaya@gmail.com', '982353', '23456'),
(0, '112', 'NCO', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Danaa', 'Shafaw', 'approve', 'danaa@gmail.com', '987654', '76543'),
(0, '123', 'CID', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Naima', 'Mahnoor', 'unapprove', 'naima@gmail.com', '23456', '345768'),
(0, '234', 'NCO', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'korim', 'Mahi', 'unapprove', 'korim@gmil.com', '234565', '34445');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `archrive`
--
ALTER TABLE `archrive`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `case_table`
--
ALTER TABLE `case_table`
  ADD PRIMARY KEY (`caseid`);

--
-- Indexes for table `complainant`
--
ALTER TABLE `complainant`
  ADD PRIMARY KEY (`case_id`);

--
-- Indexes for table `court`
--
ALTER TABLE `court`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crime_type`
--
ALTER TABLE `crime_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hearings`
--
ALTER TABLE `hearings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `investigation`
--
ALTER TABLE `investigation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prev_complain`
--
ALTER TABLE `prev_complain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sos`
--
ALTER TABLE `sos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`staffid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `archrive`
--
ALTER TABLE `archrive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `case_table`
--
ALTER TABLE `case_table`
  MODIFY `caseid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `court`
--
ALTER TABLE `court`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `crime_type`
--
ALTER TABLE `crime_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hearings`
--
ALTER TABLE `hearings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `investigation`
--
ALTER TABLE `investigation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prev_complain`
--
ALTER TABLE `prev_complain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sos`
--
ALTER TABLE `sos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `support`
--
ALTER TABLE `support`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
