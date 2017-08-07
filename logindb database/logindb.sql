-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2017 at 10:26 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logindb`
--

-- --------------------------------------------------------

--
-- Table structure for table `logintable`
--

CREATE TABLE `logintable` (
  `id` int(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `Tpr` int(4) NOT NULL,
  `Tach` int(4) NOT NULL,
  `percentage` float NOT NULL,
  `grade` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logintable`
--

INSERT INTO `logintable` (`id`, `name`, `date`, `Tpr`, `Tach`, `percentage`, `grade`) VALUES
(1, 'dhaval', '2016-07-13', 100, 55, 55, 'C'),
(2, 'manan', '2015-07-14', 150, 160, 106.667, 'S'),
(3, 'riddhi', '2015-07-22', 100, 90, 90, 'A'),
(4, 'avi', '2014-02-02', 200, 40, 20, 'D'),
(5, 'Abh', '2006-01-31', 234, 67, 28.6325, 'D'),
(6, 'fsdghsdrh', '2010-01-05', 797, 653, 81.9322, 'A'),
(7, 'gddfw', '2015-06-19', 435, 212, 48.7356, 'C'),
(8, 'ajay', '2011-07-11', 598, 469, 78.4281, 'A'),
(9, 'Powl', '2015-06-29', 732, 813, 111.066, 'S'),
(10, 'Uday', '2014-05-07', 1000, 200, 20, 'D'),
(11, 'Seem', '2011-06-01', 600, 100, 16.6667, 'D'),
(12, 'Harsha', '2016-11-16', 660, 635, 96.2121, 'S'),
(13, 'rajaa', '2016-02-09', 200, 150, 75, 'B'),
(14, 'Vishaal', '2007-06-12', 400, 150, 37.5, 'D'),
(15, 'lEYMANN', '2009-06-25', 400, 375, 93.75, 'A'),
(16, 'bobby', '2015-07-14', 1000, 650, 65, 'B'),
(17, 'john', '2014-01-17', 934, 578, 61.8844, 'B'),
(18, 'Hydra', '2013-06-05', 500, 120, 24, 'D'),
(19, 'mamta', '2014-06-17', 456, 234, 51.3158, 'C');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
