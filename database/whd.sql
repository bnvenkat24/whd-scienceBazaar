-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2019 at 05:52 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `whd`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(511) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `whd`
--

CREATE TABLE `whd` (
  `name` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `pincode` int(15) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` int(11) DEFAULT NULL,
  `student` varchar(255) DEFAULT NULL,
  `institute_name` varchar(255) DEFAULT NULL,
  `institute_city` varchar(255) DEFAULT NULL,
  `year_of_joining` varchar(255) DEFAULT NULL,
  `year_of_completion` varchar(255) DEFAULT NULL,
  `degree` varchar(255) DEFAULT NULL,
  `branch` varchar(255) DEFAULT NULL,
  `highest_qualification` varchar(255) DEFAULT NULL,
  `team_name` varchar(255) DEFAULT NULL,
  `member_name_1` varchar(255) DEFAULT NULL,
  `member_name_2` varchar(255) DEFAULT NULL,
  `member_name_3` varchar(255) DEFAULT NULL,
  `member_mailid_1` varchar(255) DEFAULT NULL,
  `member_mailid_2` varchar(255) DEFAULT NULL,
  `member_phonenumber_1` int(11) DEFAULT NULL,
  `member_phonenumber_2` int(11) DEFAULT NULL,
  `project_name` varchar(255) DEFAULT NULL,
  `domain` varchar(255) DEFAULT NULL,
  `team_introduction` varchar(255) DEFAULT NULL,
  `project_description` varchar(255) DEFAULT NULL,
  `project_report` varchar(255) DEFAULT NULL,
  `target_audience` varchar(255) DEFAULT NULL,
  `competition` varchar(255) DEFAULT NULL,
  `platform` varchar(255) DEFAULT NULL,
  `personas` text DEFAULT NULL,
  `feedback` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
