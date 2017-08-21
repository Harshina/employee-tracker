-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2017 at 07:01 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manage`
--

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `emp_no` int(5) NOT NULL,
  `task_no` int(11) NOT NULL,
  `task_desp` varchar(150) NOT NULL,
  `file` varchar(255) NOT NULL,
  `task_regis` varchar(100) NOT NULL,
  `task_action` varchar(100) NOT NULL,
  `regis_dt` date NOT NULL,
  `closed_dt` date NOT NULL,
  `status` varchar(50) NOT NULL,
  `comments` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`emp_no`, `task_no`, `task_desp`, `file`, `task_regis`, `task_action`, `regis_dt`, `closed_dt`, `status`, `comments`) VALUES
(12345, 3, 'frtf', 'FullSizeRender 3.jpg', 'gfdgfd', 'fdgfgf', '2017-08-16', '2017-08-26', 'closed', 'fgfd'),
(54544, 5, 'th hello', 'ds-1.docx', 'the hello', 'action', '2017-08-16', '2017-08-31', 'open', 'there'),
(12345, 6, 'analyse the following file', 'ArrayListDemo.java', 'sarah', 'misha', '2017-08-16', '2017-08-24', 'open', 'no comments'),
(12345, 7, 'complete task by due date', 'download (1).txt', 'john', 'pojo', '2017-08-18', '2017-09-15', 'open', 'no comments');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`task_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `task_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
