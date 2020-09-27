-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 27, 2020 at 09:50 AM
-- Server version: 5.7.31-0ubuntu0.16.04.1
-- PHP Version: 7.2.33-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeigniter`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `body` varchar(500) NOT NULL,
  `created_by` tinyint(4) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `body`, `created_by`, `date`, `status`) VALUES
(2, 'qwerg123', '1234567zcxvbnmh', 2, '2020-06-13 07:17:32', 0),
(4, 'qwertyu b ug 8 f8 fd&#039;sjb g u giug\\jajihx jiauxiab/', 'qwertyu b ug 8 f8 fd&#039;sjb g u giug\\jajihx jiauxiab/ hg  giua g', 2, '2020-06-13 06:00:15', 0),
(6, 'ayush', 'ayush', 2, '2020-06-13 06:00:39', 0),
(7, 'other', 'other', 2, '2020-06-13 06:05:12', 0),
(8, 'other1', 'other', 2, '2020-06-13 06:05:42', 0),
(9, 'This is my test ad', 'This is my test ad', 2, '2020-06-13 06:07:33', 0),
(10, '123', '123', 2, '2020-06-13 06:15:14', 0),
(11, 'we123', '123qwer', 2, '2020-06-13 06:15:51', 0),
(12, 'qwer', 'q2we', 2, '2020-06-13 06:18:29', 0),
(13, 'This is my test ad 112', 'qwer1', 2, '2020-06-13 06:20:42', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `user_name`, `password`, `timestamp`) VALUES
(1, 'root', '123456', '2020-06-11 10:37:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
