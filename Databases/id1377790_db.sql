-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2017 at 08:36 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id1377790_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `temp_user_details`
--

CREATE TABLE `temp_user_details` (
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(2) NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `confirmation_code` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `temp_user_details`
--

INSERT INTO `temp_user_details` (`name`, `age`, `gender`, `email`, `username`, `password`, `confirmation_code`) VALUES
('Manan Shah', 20, 'male', 'manan@paramhansltd.com', 'manan1', 'manan', '31ee4f851daf454e4e9551d5a347af08'),
('s', 12, 'female', 'p608070@mvrht.com', 'ee', '3333', 'cb85cc13293d5ca4dad705709c1ae8fa'),
('s', 13, 'female', 'zr5dyxelkao0hl@my10minutemail.com', 'qw', 'qwer', 'bebb7c5d63df81b2ba2f6f2c3fc47000');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `age` int(2) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(35) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`username`, `password`, `age`, `gender`, `name`, `email`) VALUES
('manan', '123', 19, 'male', 'shah', 'manan03@somaiya.edu'),
('riddhi', '234', 19, 'female', 'patel', 'rsp@somaiya.edu'),
('dhaval', '345', 19, 'male', 'patania', 'dhavalpatania@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `temp_user_details`
--
ALTER TABLE `temp_user_details`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
