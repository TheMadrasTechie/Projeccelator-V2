-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2017 at 04:53 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `work`
--

-- --------------------------------------------------------

--
-- Table structure for table `mini_prjct_ssn_dtls`
--

CREATE TABLE `mini_prjct_ssn_dtls` (
  `slno` int(11) NOT NULL,
  `from_d` varchar(20) NOT NULL,
  `to_d` varchar(20) NOT NULL,
  `dpt` varchar(50) NOT NULL,
  `date` varchar(20) NOT NULL,
  `no_stud` int(11) NOT NULL,
  `int_fac` varchar(50) NOT NULL,
  `ext_fac` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mini_prjct_ssn_dtls`
--

INSERT INTO `mini_prjct_ssn_dtls` (`slno`, `from_d`, `to_d`, `dpt`, `date`, `no_stud`, `int_fac`, `ext_fac`) VALUES
(1, '01:05 AM', 'to_time', 'Aeronautical Enginee', '22/5/01', 40, 'bala', 'guru'),
(2, '01:05 AM', '01:05 AM', 'Aeronautical Enginee', '22/5/01', 40, 'bala', 'guru'),
(3, '01:05 AM', '01:05 AM', 'School of Management', '6/3/01', 7, 'kumar', 'sankar'),
(4, '06:40 PM', '08:40 PM', 'Information Technolo', '6/4/178', 12, 'sundar', 'arjun'),
(5, '01:05 AM', '01:05 AM', 'Civil Engineering', 'ss/sss/sssss', 6, 'ssss', 'ssss'),
(6, '01:05 AM', '01:05 AM', 'Aeronautical Engineering', 'gb/hghc/uyfg', 6, 'iygiu', 'iougiu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mini_prjct_ssn_dtls`
--
ALTER TABLE `mini_prjct_ssn_dtls`
  ADD PRIMARY KEY (`slno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mini_prjct_ssn_dtls`
--
ALTER TABLE `mini_prjct_ssn_dtls`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
