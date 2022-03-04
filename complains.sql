-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2022 at 08:21 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `complains`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `id` int(255) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `nic` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `dpt` varchar(233) NOT NULL,
  `status` varchar(255) NOT NULL,
  `subcat` varchar(255) NOT NULL,
  `pro` varchar(255) NOT NULL,
  `ref` varchar(111) NOT NULL,
  `email` varchar(111) NOT NULL,
  `whatsapp` varchar(111) NOT NULL,
  `fb` varchar(111) NOT NULL,
  `dt` varchar(255) NOT NULL,
  `user_id` varchar(112) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`id`, `c_name`, `address`, `nic`, `district`, `province`, `dpt`, `status`, `subcat`, `pro`, `ref`, `email`, `whatsapp`, `fb`, `dt`, `user_id`) VALUES
(62, 'NEtwork issue', 'islamabad', '9876543456789', 'islamabad', 'Panjab', 'English', 'others', 'disable', 'No', 'EAN13', 'saqib', '1234567', 'asif', '', '1'),
(68, 'internet issue', 'gulshan', '4250162876343', 'east krachi', 'Sindh', 'I.T', 'male', 'disable', 'no', 'EAN13', 'asif@gmail.com', '012341234', 'asifaslam', '2022-01-19 19:27:48', '1'),
(69, 'network issue', 'karachi', '1234567', 'powerhouse', 'Sindh', 'I.T', 'male', 'sound', 'no', 'EAN13', 'basit@gmail.com', '123456', 'basit', '2022-01-20 11:56:45', '4'),
(70, 'as', 'karachi', '1234567', 'malir', 'Sindh', 'Physics', 'others', 'disable', 'no', 'EAN13', 'asif@gmail.com', '123456', 'asif', '2022-01-20 12:05:14', '5');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `privilege` varchar(255) DEFAULT NULL,
  `login` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `userSettings_id` bigint(20) DEFAULT NULL,
  `status` varchar(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `notify` int(11) NOT NULL DEFAULT '1',
  `subacc_id` int(11) NOT NULL,
  `allowed_actions` varchar(45) NOT NULL DEFAULT '000000000000000000000000000000000000000000000',
  `independent_exist` varchar(45) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `dpt` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `privilege`, `login`, `password`, `userSettings_id`, `status`, `description`, `address`, `telephone`, `email`, `notify`, `subacc_id`, `allowed_actions`, `independent_exist`, `image`, `dpt`) VALUES
(1, 'asif', 'admin', 'asif@gmail.com', 'd9685f80aa4cda507cb894c739e4af44', 1, '1', 'asif1234', '', '', 'asif@gmail.com', 1, 0, '000000000000000000000000000000000000000000000', NULL, NULL, ''),
(3, 'sohail', 'dpt_user', 'sohail@gmail.com', 'ed2b1f468c5f915f3f1cf75d7068baae', 1, '1', '12341234', '', '', 'sohail@gmail.com', 1, 0, '000000000000000000000000000000000000000000000', NULL, NULL, 'Physics'),
(4, 'basit', 'dpt_user', 'basit@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1, '1', '123456', '', '', 'basit@gmail.com', 1, 0, '000000000000000000000000000000000000000000000', NULL, NULL, 'I.T'),
(5, 'samad', 'dpt_user', 'samad@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1, '1', '123456', '', '', 'samad@gmail.com', 1, 0, '000000000000000000000000000000000000000000000', NULL, NULL, 'Physics');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
