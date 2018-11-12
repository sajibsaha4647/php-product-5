-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2018 at 08:10 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_computer`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_student_info`
--

CREATE TABLE `tb_student_info` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `department` tinyint(4) NOT NULL,
  `semester` tinyint(8) NOT NULL,
  `shift` tinyint(2) NOT NULL,
  `section` tinyint(2) NOT NULL,
  `roll` int(6) NOT NULL,
  `reg` int(6) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `age` varchar(5) NOT NULL,
  `gender` tinyint(2) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_student_info`
--

INSERT INTO `tb_student_info` (`id`, `name`, `department`, `semester`, `shift`, `section`, `roll`, `reg`, `mobile`, `email`, `fname`, `mname`, `age`, `gender`, `address`) VALUES
(3, 'Md. Robiul Islam', 1, 0, 1, 0, 375978, 225123, '01767248531', '31robiulislam@gmail.com', 'Md. Rofikul Islam', 'Rahima Begum', '20', 1, 'Rangpur'),
(5, 'MD. BIPLAB HOSSAIN', 0, 0, 1, 0, 768251, 620183, '01726626832', 'hmdbiplab3@gmail.com', 'Md. Billal Hossain', 'Morzina Begum', '20', 1, 'Chatmohar, Pabna'),
(6, 'Moniruzzaman Sobuz', 2, 0, 1, 0, 256642, 144558, '01755271650', 'sobuz@gmail.com', 'Ronok Hossain', 'Rajia Parvin', '22', 1, 'Dhaka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_student_info`
--
ALTER TABLE `tb_student_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_student_info`
--
ALTER TABLE `tb_student_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
