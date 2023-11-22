-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2017 at 08:47 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

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
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `prj_name` varchar(50) NOT NULL,
  `sht_des` varchar(150) NOT NULL,
  `fll_des` varchar(750) NOT NULL,
  `appl` varchar(150) NOT NULL,
  `rl_no_1` varchar(10) NOT NULL,
  `rl_no_2` varchar(10) NOT NULL,
  `rl_no_3` int(10) NOT NULL,
  `rl_no_4` int(10) NOT NULL,
  `rl_no_5` int(10) NOT NULL,
  `rl_no_6` int(10) NOT NULL,
  `fcl_inc` varchar(30) NOT NULL,
  `tch_usd` varchar(100) NOT NULL,
  `ipr` varchar(30) NOT NULL,
  `uniq` varchar(100) NOT NULL,
  `lk_fr` int(50) NOT NULL,
  `ftr_wrks` int(150) NOT NULL,
  `int_fnd` int(10) NOT NULL,
  `tot_fnd` int(20) NOT NULL,
  `cnt_mail` varchar(100) NOT NULL,
  `phn_num` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`prj_name`, `sht_des`, `fll_des`, `appl`, `rl_no_1`, `rl_no_2`, `rl_no_3`, `rl_no_4`, `rl_no_5`, `rl_no_6`, `fcl_inc`, `tch_usd`, `ipr`, `uniq`, `lk_fr`, `ftr_wrks`, `int_fnd`, `tot_fnd`, `cnt_mail`, `phn_num`) VALUES
('wadadasd', 'asdasd', 'sdas', 'dasdasdasdasd', 'adas', 'd', 0, 0, 0, 0, 'sadasd', 'sdasd', 'asdsddsa', 'dasd', 484, 0, 5445, 5454, 'bjkj@ser', 6486);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
