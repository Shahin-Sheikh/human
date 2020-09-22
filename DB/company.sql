-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2020 at 04:18 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `company`
--

-- --------------------------------------------------------

--
-- Table structure for table `chuti`
--

CREATE TABLE `chuti` (
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `bondho` varchar(255) NOT NULL,
  `days` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chuti`
--

INSERT INTO `chuti` (`fullname`, `email`, `mobile`, `position`, `gender`, `bondho`, `days`) VALUES
('Md. Shahin Sheikh', 'bevorshahin@gmail.com', '01786452354', 'Software engg', 'male', 'Sick', '10'),
('Md. Shahin Sheikh', 'tasfia@gmail.com', '0178645235', 'Manager', 'male', 'Sick leave', '5'),
('Md. Shahin Sheikh', 'tasfia@gmail.com', '0178645235', 'Manager', 'male', '', '10'),
('', 'tasfia@gmail.com', '', '', '', '', ''),
('', '', '', 'Manager', '', 'Sick leave', '5'),
('', '', '', 'Manager', '', 'Sick leave', '5');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`) VALUES
(1, 'bangladesh'),
(2, 'america'),
(3, 'england'),
(4, 'usa'),
(5, 'uk');

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `id` int(255) NOT NULL,
  `dept_num` varchar(255) NOT NULL,
  `dept_name` varchar(255) NOT NULL,
  `dept_leader` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`id`, `dept_num`, `dept_name`, `dept_leader`) VALUES
(16, '30', 'General Motors Corporation', 'shahin sheikh'),
(17, '4', 'General Motors Corporation', 'shahin'),
(21, '5', 'bsc', 'dhshi');

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `id` int(255) NOT NULL,
  `empid` varchar(255) NOT NULL,
  `empname` varchar(255) NOT NULL,
  `emprole` varchar(255) NOT NULL,
  `empdept` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`id`, `empid`, `empname`, `emprole`, `empdept`) VALUES
(4, '1', 'Eastman Kodak Company', 'Company', 'Software'),
(5, '2', 'Aleris Rolled Products', 'Company', 'Software'),
(6, '25', ' McDonald’s', 'company', 'software'),
(7, '12', 'Toyota Motor', 'company', 'car'),
(8, '89', ' The Walt Disney Company', 'company', 'software'),
(9, '65', ' Samsung ', 'compnay', 'mobile'),
(10, '45', 'Coca Cola', 'company', 'beverages'),
(11, '69', 'Facebook', 'company', 'software'),
(12, '35', ' Amazon ', 'company', 'software'),
(13, '82', 'Microsoft', 'company', 'software'),
(14, '5456', 'Google', 'company', 'computer'),
(15, '598', 'Apple', 'company', 'Mobile'),
(20, '18368321', 'Shahin Sheikh', 'Computer', 'Software E'),
(23, '5458', 'tasfia', 'cse', 'programmer'),
(24, '1548', 'tasfia78', 'CSE', 'programmer');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `repeat_password` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `street_address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `deserve` varchar(255) NOT NULL,
  `recent_project` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `email`, `password`, `repeat_password`, `full_name`, `street_address`, `city`, `zip`, `deserve`, `recent_project`) VALUES
(1, 'shahinsheikh885@gmail.com', '123456', '123456', 'ewrw34', 'dft', 'Dhaka', 'srer', 'i don\'t know', 'i don\'t know'),
(2, 'bevorshahin@gmail.com', 'shahinsheikh', 'shahinsheikh', 'Md. Shahin Sheikh', '1213', 'Khustia', '1213', 'I am confident', 'citizen service'),
(3, 'tasfia@gmail.com', '123456', '123456', 'Md. Shahin Sheikh', '54', 'dhaka', '1213', 'me', 'me'),
(4, 'shahinsheikh885@gmail.com', '123456', '123456', 'ewrw34', 'dft', 'Dhaka', 'srer', 'i don\'t know', 'i don\'t know'),
(5, 'shahinsheikh885@gmail.com', '123456', '123456', 'ewrw34', 'dft', 'Dhaka', 'srer', 'i don\'t know', 'i don\'t know');

-- --------------------------------------------------------

--
-- Table structure for table `jobapp`
--

CREATE TABLE `jobapp` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `repeat_password` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `street_address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `visa` varchar(255) NOT NULL,
  `which` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `deserve` varchar(255) NOT NULL,
  `recent_project` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jobapplication`
--

CREATE TABLE `jobapplication` (
  `ID` int(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Full name` varchar(255) NOT NULL,
  `Street adress` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `State` varchar(255) NOT NULL,
  `Zip` tinyint(255) NOT NULL,
  `legally` tinyint(255) NOT NULL,
  `Visa` varchar(255) NOT NULL,
  `Which one` varchar(255) NOT NULL,
  `Position` varchar(500) NOT NULL,
  `Hours available` text NOT NULL,
  `Why this job` varchar(5000) NOT NULL,
  `Recent project` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `joblist`
--

CREATE TABLE `joblist` (
  `id` int(255) NOT NULL,
  `jobnum` varchar(255) NOT NULL,
  `jobdes` varchar(255) NOT NULL,
  `md` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `joblist`
--

INSERT INTO `joblist` (`id`, `jobnum`, `jobdes`, `md`, `salary`) VALUES
(1, '01', 'Software Developer', 'Md. Shahin Sheikh', '$105,240'),
(2, '02', 'Front End Engineer', 'Md. Shahin Sheikh', '$105,240'),
(3, '03', 'Java Developer', 'Md. Shahin Sheikh', '$105,240'),
(4, '04', 'Product Manager', 'Md. Shahin Sheikh', '$117,713'),
(5, '05', 'DevOps Engineer', 'Md. Shahin Sheikh', '$107,310'),
(6, '06', 'Data Engineer', 'Md. Shahin Sheikh', '\r\n$102,472\r\n'),
(7, '07', 'Software Engineer', 'Md. Shahin Sheikh', '$105,563'),
(8, '08', 'Speech Language Pathologist', 'Md. Shahin Sheikh', '$71,867'),
(15, '09', 'Software Engg', 'Md. Shahin Sheikh', '$1245454'),
(21, '10', 'Deputy Manager', 'Md. Shahin', '$1245454'),
(22, '09', 'Software Engg', 'Md. Shahin', '$1245454'),
(23, '56', 'Nothing', 'Shahin', '$000000000');

-- --------------------------------------------------------

--
-- Table structure for table `leaveapp`
--

CREATE TABLE `leaveapp` (
  `id` int(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `leave` varchar(255) NOT NULL,
  `days` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leaveapp`
--

INSERT INTO `leaveapp` (`id`, `fullname`, `email`, `mobile`, `position`, `gender`, `leave`, `days`) VALUES
(1, 'Md. Shahin Sheikh', 'bevorshahin@gmail.com', '01786452354', 'Software Engg', 'Male', 'Sick Leave', '5');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `username`, `password`, `usertype`) VALUES
(1, '', 'shahin', '1234', ''),
(2, '', 'mahadi', 'abcd', ''),
(3, '', 'iphone', '$2y$10$cUzMRSPJXYEBvwIGib.WBuusXlqprOQd3LfC8HOOvNnZO6Auuq6VS', ''),
(4, '', 'android', '123456', ''),
(9, '', 'manager', '123456', 'Admin'),
(10, '', 'random', '123456', 'Public'),
(11, '', 'shahin sheikh', '123456', 'Admin'),
(12, '', 'sagor', '123456', 'Public'),
(13, '', 'fultter', '123456', 'Admin'),
(14, '', 'me', '123456', 'Employye'),
(15, '', 'linux', '123456', 'Admin'),
(16, '', 'selena', 'shahin', 'Employye'),
(17, '', 'jannat', '123456', 'Admin'),
(18, 'bevor', '123456', 'Admin', 'bevorshahin@gmail.com'),
(19, 'me@gmail.com', 'she', '12345678', 'Admin'),
(20, 'ashek.mahady.aiub@gmail.com', 'ashek', '123456', 'Admin'),
(21, 'tasfia@gmail.com', 'tasfia', '123456', 'Admin'),
(22, 'tasfia3@gmail.com', 'tasfia3', '123456', 'Admin'),
(23, '', 'tasfia4', '123456', 'Admin'),
(24, '', 'tasfia5', '123456', 'Admin'),
(25, 'tasfia6@gmail.com', 'tasfia6', '123456', 'Admin'),
(26, 'tasfia78@gmail.com', 'tasfia78', '123456', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `notice` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_temp`
--

CREATE TABLE `password_reset_temp` (
  `email` varchar(250) CHARACTER SET utf8mb4 NOT NULL,
  `key` varchar(250) CHARACTER SET utf8mb4 NOT NULL,
  `expDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `password_reset_temp`
--

INSERT INTO `password_reset_temp` (`email`, `key`, `expDate`) VALUES
('me@gmail.com', '768e78024aa8fdb9b8fe87be86f64745fa64b89027', '2020-08-19 09:30:29'),
('ashek.mahady.aiub@gmail.com', '768e78024aa8fdb9b8fe87be86f64745d3b697213c', '2020-08-19 14:15:51'),
('ashek.mahady.aiub@gmail.com', '768e78024aa8fdb9b8fe87be86f64745cdc341f3e1', '2020-08-19 14:17:46'),
('ashek.mahady.aiub@gmail.com', '768e78024aa8fdb9b8fe87be86f647452ce7ccf8ec', '2020-08-19 14:21:16'),
('ashek.mahady.aiub@gmail.com', '768e78024aa8fdb9b8fe87be86f64745e844f9e409', '2020-08-19 14:22:26'),
('ashek.mahady.aiub@gmail.com', '768e78024aa8fdb9b8fe87be86f647457663aff0e3', '2020-08-19 14:22:56'),
('ashek.mahady.aiub@gmail.com', '768e78024aa8fdb9b8fe87be86f647453dc782705f', '2020-08-19 14:26:28'),
('ashek.mahady.aiub@gmail.com', '768e78024aa8fdb9b8fe87be86f64745ba134103d6', '2020-08-21 13:33:42'),
('ashek.mahady.aiub@gmail.com', '768e78024aa8fdb9b8fe87be86f64745fa72766819', '2020-08-21 18:32:48'),
('ashek.mahady.aiub@gmail.com', '768e78024aa8fdb9b8fe87be86f64745d0bf74bfc2', '2020-08-22 21:24:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `forgot_pass_identity` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `phone`, `forgot_pass_identity`, `created`, `modified`, `status`) VALUES
(1, 'shahin', 'sheikh', 'shahinsheikh@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '01786452354', '32c093aa446fc1ab0c11d2755641e6de', '2020-08-17 12:00:42', '2020-08-17 12:02:35', '1'),
(2, 'shahin', 'sheikh', 'bevorshahin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '01786452354', '4611713befee22c3a827df441396cc17', '2020-08-17 12:05:17', '2020-08-17 12:05:36', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobapplication`
--
ALTER TABLE `jobapplication`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `joblist`
--
ALTER TABLE `joblist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaveapp`
--
ALTER TABLE `leaveapp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dept`
--
ALTER TABLE `dept`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `emp`
--
ALTER TABLE `emp`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jobapplication`
--
ALTER TABLE `jobapplication`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `joblist`
--
ALTER TABLE `joblist`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `leaveapp`
--
ALTER TABLE `leaveapp`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
