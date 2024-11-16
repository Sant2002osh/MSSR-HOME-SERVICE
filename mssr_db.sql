-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Nov 16, 2024 at 06:42 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mssr_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin_tb`
--

CREATE TABLE `adminlogin_tb` (
  `a_login_id` int(11) NOT NULL,
  `a_name` varchar(60) NOT NULL,
  `a_email` varchar(60) NOT NULL,
  `a_password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `adminlogin_tb`
--

INSERT INTO `adminlogin_tb` (`a_login_id`, `a_name`, `a_email`, `a_password`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `assets_tb`
--

CREATE TABLE `assets_tb` (
  `pid` int(11) NOT NULL,
  `pname` varchar(60) NOT NULL,
  `pdop` date NOT NULL,
  `pava` int(11) NOT NULL,
  `ptotal` int(11) NOT NULL,
  `poriginalcost` int(11) NOT NULL,
  `psellingcost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `assets_tb`
--

INSERT INTO `assets_tb` (`pid`, `pname`, `pdop`, `pava`, `ptotal`, `poriginalcost`, `psellingcost`) VALUES
(1, 'Tap', '2024-10-03', 10, 10, 400, 500),
(2, 'Switch', '2024-10-02', 18, 30, 100, 150),
(3, 'Steel', '2024-10-20', 9998, 10, 15000, 18000);

-- --------------------------------------------------------

--
-- Table structure for table `assignwork_tb`
--

CREATE TABLE `assignwork_tb` (
  `rno` int(11) NOT NULL,
  `request_id` int(11) NOT NULL,
  `request_info` text NOT NULL,
  `request_desc` text NOT NULL,
  `requester_name` varchar(60) NOT NULL,
  `requester_add1` text NOT NULL,
  `requester_add2` text NOT NULL,
  `requester_city` varchar(60) NOT NULL,
  `requester_state` varchar(60) NOT NULL,
  `requester_zip` int(11) NOT NULL,
  `requester_email` varchar(60) NOT NULL,
  `requester_mobile` bigint(11) NOT NULL,
  `assign_tech` varchar(60) NOT NULL,
  `assign_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `assignwork_tb`
--

INSERT INTO `assignwork_tb` (`rno`, `request_id`, `request_info`, `request_desc`, `requester_name`, `requester_add1`, `requester_add2`, `requester_city`, `requester_state`, `requester_zip`, `requester_email`, `requester_mobile`, `assign_tech`, `assign_date`) VALUES
(1, 1, 'plumber required', 'plumber required for tap repair', 'Santosh M', 'No. 4,marcel Avenue, Periya Sekkadu, Mmc Post, Madhavaram', 'Madhavaram', 'Chennai', 'Tamil Nadu', 600051, 'sandysantosh062@gmail.com', 7092283751, 'tech2', '2024-10-30'),
(2, 2, 'plumber required', 'plumber required for tap repair', 'Santosh M', 'No. 4,marcel Avenue, Periya Sekkadu, Mmc Post, Madhavaram', 'Madhavaram', 'Chennai', 'Tamil Nadu', 600051, 'sandysantosh062@gmail.com', 7092283751, 'tech2', '2024-11-07'),
(3, 2, 'plumber required', 'plumber required for tap repair', 'Santosh M', 'No. 4,marcel Avenue, Periya Sekkadu, Mmc Post, Madhavaram', 'Madhavaram', 'Chennai', 'Tamil Nadu', 600051, 'sandysantosh062@gmail.com', 7092283751, 'tech2', '2024-11-07'),
(4, 4, 'tv repair', 'tv not on', 'harshath', 'No. 4,marcel Avenue, Periya Sekkadu, Mmc Post, Madhavaram', 'Madhavaram', 'Chennai', 'Tamil Nadu', 600051, 'harshath@gmail.com', 8883157198, 'tech2', '2024-11-09'),
(5, 4, 'tv repair', 'tv not on', 'harshath', 'No. 4,marcel Avenue, Periya Sekkadu, Mmc Post, Madhavaram', 'Madhavaram', 'Chennai', 'Tamil Nadu', 600051, 'harshath@gmail.com', 8883157198, 'tech2', '2024-11-09');

-- --------------------------------------------------------

--
-- Table structure for table `customerlogin_tb`
--

CREATE TABLE `customerlogin_tb` (
  `r_login_id` int(11) NOT NULL,
  `r_name` varchar(60) NOT NULL,
  `r_email` varchar(60) NOT NULL,
  `r_password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `customerlogin_tb`
--

INSERT INTO `customerlogin_tb` (`r_login_id`, `r_name`, `r_email`, `r_password`) VALUES
(1, ' santosh', 'sandysantosh062@gmail.com', 'user'),
(2, '  anath', 'anath@gmail.com', 'user'),
(3, 'ajay', 'ajay@gmail.com', 'user'),
(4, ' visakan', 'visakan@gmail.com', 'user'),
(5, 'dinesh', 'dinesh@gmail.com', 'user'),
(6, 'santosh', 'sant2002osh@gmail.com', 'user'),
(7, 'praveen kumar', 'kumarpraveen70@gmail.com', '9444291206'),
(8, 'sharvin', 'sarvin@gmail.com', '123456789'),
(9, 'persin', 'wjfnja@gmail.com', '123456'),
(10, 'persin', 'sandy@gmail.com', 'user'),
(11, 'muthu', 'muthu@gmail.com', 'uaer'),
(12, 'karthikeyan', 'karthi@gmail.com', 'user'),
(13, 'thanush', 'thanush@gmail.com', 'user'),
(15, 'vijay', 'vijay@gmail.com', 'user'),
(16, 'antony', 'antony@gmail.com', 'user'),
(17, 'dilli', 'dilli@gmail.com', 'user'),
(18, 'venkat', 'venkat@gmail.com', 'user'),
(22, 'harshath', 'harshath@gmail.com', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `customer_tb`
--

CREATE TABLE `customer_tb` (
  `custid` int(11) NOT NULL,
  `custname` varchar(60) NOT NULL,
  `custadd` varchar(60) NOT NULL,
  `cpname` varchar(60) NOT NULL,
  `cpquantity` int(11) NOT NULL,
  `cpeach` int(11) NOT NULL,
  `cptotal` int(11) NOT NULL,
  `cpdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `customer_tb`
--

INSERT INTO `customer_tb` (`custid`, `custname`, `custadd`, `cpname`, `cpquantity`, `cpeach`, `cptotal`, `cpdate`) VALUES
(2, 'Pandey ji', 'Ranchi', 'Mouse', 2, 600, 600, '2024-10-13'),
(3, 'Musaddi Lal', 'Bokaro', 'Mouse', 5, 600, 3000, '2024-10-13'),
(4, 'Jay Ho', 'Ranchi', 'Mouse', 2, 600, 1200, '2024-10-13'),
(5, 'something', 'somethingadd', 'Mouse', 1, 600, 600, '2024-10-13'),
(6, 'someone', 'someoneadd', 'Keyboard', 1, 500, 500, '2024-10-13'),
(7, 'jay', 'jay ho', 'Keyboard', 1, 500, 500, '2024-10-09'),
(8, 'Jay', 'Bokaro', 'Keyboard', 2, 500, 1000, '2024-10-21'),
(9, 'Kumar', 'Bokaro', 'Keyboard', 1, 500, 500, '2024-10-20'),
(10, 'kkk', 'asdsa', 'Keyboard', 1, 500, 500, '2024-10-20'),
(11, 'Shukla Ji', 'Ranchi', 'Samsung LCD', 1, 12000, 12000, '2024-10-20'),
(19, 'sdsads', 'dasdsa', 'Keyboard', 1, 500, 500, '2024-10-20'),
(20, 'asdas', 'asdsad', 'Keyboard', 1, 500, 500, '2024-10-20'),
(21, 'dsadas', 'asdasd', 'Samsung LCD', 1, 12000, 12000, '2024-10-20'),
(22, 'sdfsdf', 'dfsdf', 'Samsung LCD', 1, 12000, 12000, '2024-10-20'),
(23, 'Ramu', 'sadsad', 'Samsung LCD', 1, 12000, 12000, '2024-10-20'),
(24, 'gfdgfdg', 'fgfdgfdg', 'Samsung LCD', 1, 12000, 12000, '2024-10-20'),
(25, 'rrr', 'fgdf', 'Mouse', 1, 600, 600, '2024-10-20'),
(26, 'Jay', 'ranchi', 'Samsung LCD', 1, 12000, 12000, '2024-10-20'),
(27, 'dfsdfsd', 'sdfdsf', 'Mouse', 1, 600, 600, '2024-10-20'),
(28, 'Kunal', 'Ranchi', 'Rode Mic', 1, 18000, 18000, '2024-10-20'),
(29, 'santosh', 'No:12,perumal koil street, poothapedu,ramapuram', 'Keyboard', 2, 500, 1000, '2024-11-12'),
(30, 'santosh', 'No:12,perumal koil street, poothapedu,ramapuram', 'Steel', 2, 18000, 36000, '2024-11-08');

-- --------------------------------------------------------

--
-- Table structure for table `submitrequest_tb`
--

CREATE TABLE `submitrequest_tb` (
  `request_id` int(11) NOT NULL,
  `request_info` text NOT NULL,
  `request_desc` text NOT NULL,
  `requester_name` varchar(60) NOT NULL,
  `requester_add1` text NOT NULL,
  `requester_add2` text NOT NULL,
  `requester_city` varchar(60) NOT NULL,
  `requester_state` varchar(60) NOT NULL,
  `requester_zip` int(11) NOT NULL,
  `requester_email` varchar(60) NOT NULL,
  `requester_mobile` bigint(11) NOT NULL,
  `request_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `submitrequest_tb`
--

INSERT INTO `submitrequest_tb` (`request_id`, `request_info`, `request_desc`, `requester_name`, `requester_add1`, `requester_add2`, `requester_city`, `requester_state`, `requester_zip`, `requester_email`, `requester_mobile`, `request_date`) VALUES
(1, 'plumber required', 'plumber required for tap repair', 'Santosh M', 'No. 4,marcel Avenue, Periya Sekkadu, Mmc Post, Madhavaram', 'Madhavaram', 'Chennai', 'Tamil Nadu', 600051, 'sandysantosh062@gmail.com', 7092283751, '2024-11-11'),
(2, 'plumber required', 'plumber required for tap repair', 'Santosh M', 'No. 4,marcel Avenue, Periya Sekkadu, Mmc Post, Madhavaram', 'Madhavaram', 'Chennai', 'Tamil Nadu', 600051, 'sandysantosh062@gmail.com', 7092283751, '2024-11-14'),
(4, 'tv repair', 'tv not on', 'harshath', 'No. 4,marcel Avenue, Periya Sekkadu, Mmc Post, Madhavaram', 'Madhavaram', 'Chennai', 'Tamil Nadu', 600051, 'harshath@gmail.com', 8883157198, '2024-11-09');

-- --------------------------------------------------------

--
-- Table structure for table `technician_tb`
--

CREATE TABLE `technician_tb` (
  `empid` int(11) NOT NULL,
  `empName` varchar(60) NOT NULL,
  `empCity` varchar(60) NOT NULL,
  `empMobile` bigint(11) NOT NULL,
  `empEmail` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `technician_tb`
--

INSERT INTO `technician_tb` (`empid`, `empName`, `empCity`, `empMobile`, `empEmail`) VALUES
(1, 'Tech1', 'chennai', 9876543215, 'tech1@gmail.com'),
(2, 'tech2', 'Chennai', 7092283751, 'tech2@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin_tb`
--
ALTER TABLE `adminlogin_tb`
  ADD PRIMARY KEY (`a_login_id`);

--
-- Indexes for table `assets_tb`
--
ALTER TABLE `assets_tb`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `assignwork_tb`
--
ALTER TABLE `assignwork_tb`
  ADD PRIMARY KEY (`rno`);

--
-- Indexes for table `customerlogin_tb`
--
ALTER TABLE `customerlogin_tb`
  ADD PRIMARY KEY (`r_login_id`);

--
-- Indexes for table `customer_tb`
--
ALTER TABLE `customer_tb`
  ADD PRIMARY KEY (`custid`);

--
-- Indexes for table `submitrequest_tb`
--
ALTER TABLE `submitrequest_tb`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `technician_tb`
--
ALTER TABLE `technician_tb`
  ADD PRIMARY KEY (`empid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin_tb`
--
ALTER TABLE `adminlogin_tb`
  MODIFY `a_login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assets_tb`
--
ALTER TABLE `assets_tb`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `assignwork_tb`
--
ALTER TABLE `assignwork_tb`
  MODIFY `rno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customerlogin_tb`
--
ALTER TABLE `customerlogin_tb`
  MODIFY `r_login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `customer_tb`
--
ALTER TABLE `customer_tb`
  MODIFY `custid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `submitrequest_tb`
--
ALTER TABLE `submitrequest_tb`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `technician_tb`
--
ALTER TABLE `technician_tb`
  MODIFY `empid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
