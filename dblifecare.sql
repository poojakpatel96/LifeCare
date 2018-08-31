-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2016 at 06:49 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dblifecare`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `adminid` int(11) NOT NULL,
  `fullname` varchar(60) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `emailid` varchar(40) DEFAULT NULL,
  `mobileno` decimal(10,0) DEFAULT NULL,
  `status` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`adminid`, `fullname`, `username`, `password`, `emailid`, `mobileno`, `status`) VALUES
(1, 'admin', 'admin', 'admin', 'admin@gmail.com', '9998238102', b'1'),
(2, 'Kresha', 'kresha', 'kresha', 'kresha96@gmail.com', '9728471644', b'1'),
(4, 'Ketan Patel', 'ketan', 'ketan', 'ketan@gmail.com', '9837287362', b'1'),
(6, 'Anshul Desai', 'anshul', 'anshul', 'anshul@gmail.com', '7482649273', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `tblbloodcamp`
--

CREATE TABLE `tblbloodcamp` (
  `cid` int(11) NOT NULL,
  `nameofcamp` varchar(50) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time NOT NULL,
  `status` bit(1) DEFAULT NULL,
  `cityid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbloodcamp`
--

INSERT INTO `tblbloodcamp` (`cid`, `nameofcamp`, `address`, `image`, `description`, `date`, `time`, `status`, `cityid`) VALUES
(8, 'Camp3', 'DDU', '../image/request.jpg', 'Camp at DDU college', '2016-09-30', '10:00:00', b'1', 25),
(9, 'Camp1', 'Tejas Vidhyalaya', '../image/635997155736864588171916043_Blood_646x300.jpg', 'Camp at School', '2016-10-20', '09:00:00', b'1', 35);

-- --------------------------------------------------------

--
-- Table structure for table `tblbloodgroup`
--

CREATE TABLE `tblbloodgroup` (
  `bgid` int(11) NOT NULL,
  `groupname` varchar(40) NOT NULL,
  `adminid` int(11) DEFAULT NULL,
  `cdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbloodgroup`
--

INSERT INTO `tblbloodgroup` (`bgid`, `groupname`, `adminid`, `cdate`) VALUES
(1, 'A+', 1, '2016-08-27 04:12:11'),
(2, 'A-', 1, '2016-08-27 04:13:44'),
(3, 'B+', 1, '2016-08-27 04:15:01'),
(11, 'O+', 1, '2016-08-27 05:30:48'),
(12, 'O-', 1, '2016-08-27 05:31:02'),
(13, 'AB+', 1, '2016-08-29 12:43:19'),
(14, 'AB-', 1, '2016-08-29 08:06:57'),
(16, 'B-', 2, '2016-09-10 10:12:20');

-- --------------------------------------------------------

--
-- Table structure for table `tblbloodreq`
--

CREATE TABLE `tblbloodreq` (
  `rid` int(11) NOT NULL,
  `bgid` int(11) DEFAULT NULL,
  `rpatientid` int(11) DEFAULT NULL,
  `units` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `rstatus` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbloodreq`
--

INSERT INTO `tblbloodreq` (`rid`, `bgid`, `rpatientid`, `units`, `date`, `rstatus`) VALUES
(3, 1, 2, 3, '2016-08-30 10:26:41', b'1'),
(4, 1, 2, 7, '2016-08-30 08:42:35', b'1'),
(5, 13, 4, 3, '2016-08-30 08:43:05', b'1'),
(6, 13, 4, 3, '2016-08-30 08:49:55', b'1'),
(7, 11, 3, 9, '2016-08-30 08:50:09', b'1'),
(9, 13, 3, 5, '2016-08-30 08:54:11', b'1'),
(11, 1, 9, 3, '2016-08-31 07:52:06', b'1'),
(12, 1, 2, 5, '2016-09-05 05:19:12', b'1'),
(13, 3, 2, 4, '2016-09-05 05:20:20', b'1'),
(17, 1, 2, 5, '2016-09-11 06:37:30', b'1'),
(18, 1, 3, 8, '2016-09-11 06:38:38', b'0'),
(19, 2, 2, 4, '2016-09-11 06:39:20', b'1'),
(20, 1, 2, 7, '2016-09-11 06:44:12', b'0'),
(22, 1, 2, 6, '2016-09-11 06:49:28', b'0'),
(23, 2, 2, 9, '2016-09-11 06:50:31', b'0'),
(24, 1, 2, 8, '2016-09-12 06:27:12', b'0'),
(25, 2, 2, 8, '2016-09-12 06:27:43', b'1'),
(26, 1, 2, 6, '2016-09-30 10:13:42', b'0'),
(27, 2, 2, 3, '2016-09-30 10:15:41', b'1'),
(28, 2, 3, 3, '2016-09-30 11:07:21', b'1'),
(29, 1, 4, 4, '2016-09-30 11:22:10', b'0'),
(30, 3, 20, 7, '2016-10-01 12:52:16', b'1'),
(31, 1, 20, 7, '2016-10-02 03:25:15', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `tblbloodstock`
--

CREATE TABLE `tblbloodstock` (
  `sid` int(11) NOT NULL,
  `bgid` int(11) DEFAULT NULL,
  `tunits` int(11) DEFAULT NULL,
  `mid` int(11) DEFAULT NULL,
  `mdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbloodstock`
--

INSERT INTO `tblbloodstock` (`sid`, `bgid`, `tunits`, `mid`, `mdate`) VALUES
(1, 1, 20, 1, '2016-09-07 09:19:00'),
(2, 2, 26, 1, '2016-09-30 05:40:45'),
(3, 3, 16, 4, '2016-09-10 14:00:00'),
(4, 11, 16, 1, '2016-09-02 07:00:00'),
(5, 12, 25, 1, '2016-09-01 09:00:00'),
(6, 13, 21, 1, '2016-10-01 10:09:22'),
(7, 14, 25, 6, '2016-09-08 10:00:00'),
(8, 16, 25, 4, '2016-09-09 11:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblcity`
--

CREATE TABLE `tblcity` (
  `cityid` int(11) NOT NULL,
  `name` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcity`
--

INSERT INTO `tblcity` (`cityid`, `name`) VALUES
(1, 'Ahmedabad'),
(2, 'Anand'),
(3, 'Ankleshwar'),
(4, 'Bardoli'),
(5, 'Bhachau'),
(6, 'Bharuch'),
(7, 'Bhavnagar'),
(8, 'Bhuj'),
(9, 'Borsad'),
(10, 'Dakor'),
(11, 'Dholka'),
(12, 'Dwarka'),
(13, 'Gandhinagar'),
(14, 'Godhra'),
(15, 'Halol'),
(16, 'Himatnagar'),
(17, 'Jamnagar'),
(18, 'Junagadh'),
(19, 'Kalol'),
(20, 'Kandla'),
(21, 'Khambhat'),
(22, 'Kheda'),
(23, 'Mandavi'),
(24, 'Modasa'),
(25, 'Nadiad'),
(26, 'Navsari'),
(27, 'Palanpur'),
(28, 'Patan'),
(29, 'Petlad'),
(30, 'Porbandar'),
(31, 'Rajkot'),
(32, 'Sidhpur'),
(33, 'Surat'),
(34, 'Unjha'),
(35, 'Vadodara'),
(36, 'Valsad'),
(37, 'Vapi');

-- --------------------------------------------------------

--
-- Table structure for table `tbldonor`
--

CREATE TABLE `tbldonor` (
  `donorid` int(11) NOT NULL,
  `fullname` varchar(60) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `bloodgrp` int(11) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `mobileno` decimal(10,0) DEFAULT NULL,
  `status` bit(1) DEFAULT NULL,
  `cityid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbldonor`
--

INSERT INTO `tbldonor` (`donorid`, `fullname`, `username`, `password`, `bloodgrp`, `email`, `mobileno`, `status`, `cityid`) VALUES
(1, 'Heta Shah', 'heta', 'heta', 1, 'heta97@gmail.com', '9284718371', b'1', 1),
(2, 'Dipti Patel', 'dipti', 'dipti', 13, 'dipti@gmail.com', '9999999999', b'1', 1),
(4, 'Anushka Zinzuwadia', 'anu', 'anu', 13, 'anu@gmail.com', '9999999999', b'1', 33),
(5, 'Yukta Patel', 'yukta', 'yukta', 11, 'yukta@gmail.com', '9283948284', b'1', 2),
(6, 'Shambhavi Shah', 'shambhavi', 'shambhavi', 1, 'shambhavi@gmail.com', '9999999999', b'1', 2),
(7, 'donor', 'donor', 'donor', 3, 'donor@gmail.com', '9374859284', b'1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblhospital`
--

CREATE TABLE `tblhospital` (
  `hospitalid` int(11) NOT NULL,
  `hname` varchar(40) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `mobileno` decimal(10,0) DEFAULT NULL,
  `status` bit(1) DEFAULT NULL,
  `cityid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblhospital`
--

INSERT INTO `tblhospital` (`hospitalid`, `hname`, `username`, `password`, `email`, `mobileno`, `status`, `cityid`) VALUES
(1, 'Civil Hospital', 'civil', 'civil', 'civilhospital@gmail.com', '9361837182', b'1', 1),
(2, 'Grishma', 'grishma', 'grishma', 'grishma@gmail.com', '9876253416', b'1', 25),
(4, 'Bhailal Amin', 'bhailalamin', 'amin', 'bhailalamin@gmail.com', '9278374827', b'1', 35),
(5, 'Sterling', 'sterling', 'sterling', 'sterling@gmail.com', '9367482736', b'1', 10),
(6, 'Zydus Hospital', 'zydus', 'zydus', 'zydus@gmail.com', '9273648273', b'1', 2),
(7, 'Shriners', 'shriners', 'shriners', 'shriners@gmail.com', '9737462637', b'1', 35);

-- --------------------------------------------------------

--
-- Table structure for table `tblpatient`
--

CREATE TABLE `tblpatient` (
  `patientid` int(11) NOT NULL,
  `fullname` varchar(60) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `bloodgrp` int(11) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `mobileno` decimal(10,0) DEFAULT NULL,
  `status` bit(1) DEFAULT NULL,
  `cityid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpatient`
--

INSERT INTO `tblpatient` (`patientid`, `fullname`, `username`, `password`, `bloodgrp`, `email`, `mobileno`, `status`, `cityid`) VALUES
(2, 'Pooja Patel', 'pooja96', 'dhwani93', 3, 'pooja96@gmail.com', '9601477882', b'1', 35),
(3, 'Dhwani Patel', 'dhwani93', 'aaa', 1, 'd@jj', '3940', b'1', 1),
(4, 'Pooja Shah', 'pooja', 'aaa', 1, 'email@email', '9601477882', b'1', 8),
(5, 'Svara', 'svara', 'svara', 1, 'svara@gmail.com', '9275718372', b'1', 18),
(9, 'Hemali Patel', 'hemzz', 'aaa', 1, 'hemzz@gmail.com', '9274816732', b'1', 25),
(10, 'Anish Zinzuwadia', 'anish', 'anish', 11, 'anish@gmail.com', '9273847261', b'1', 2),
(11, 'Pooja', 'pooja9693', 'pooja', 3, 'p@gmail.com', '9284872837', b'1', 16),
(15, 'Ashka Patel', 'ashka', 'ashka', 3, 'ashka@gmail.com', '9274826374', b'1', 1),
(18, 'Hetal Desai', 'hetal', 'hetal', 3, 'hetal@gmail.com', '9263728376', b'1', 1),
(19, 'Nili Vacchani', 'nili', 'nili', 14, 'nili@gmail.com', '9374829384', b'1', 1),
(20, 'patient', 'patient', 'patient', 2, 'patient@gmail.com', '9374859283', b'1', 35);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`adminid`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `emailed` (`emailid`);

--
-- Indexes for table `tblbloodcamp`
--
ALTER TABLE `tblbloodcamp`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `cityid` (`cityid`);

--
-- Indexes for table `tblbloodgroup`
--
ALTER TABLE `tblbloodgroup`
  ADD PRIMARY KEY (`bgid`),
  ADD KEY `adminid` (`adminid`);

--
-- Indexes for table `tblbloodreq`
--
ALTER TABLE `tblbloodreq`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `bgid` (`bgid`),
  ADD KEY `patientid` (`rpatientid`);

--
-- Indexes for table `tblbloodstock`
--
ALTER TABLE `tblbloodstock`
  ADD PRIMARY KEY (`sid`),
  ADD KEY `bgid` (`bgid`),
  ADD KEY `mid` (`mid`);

--
-- Indexes for table `tblcity`
--
ALTER TABLE `tblcity`
  ADD PRIMARY KEY (`cityid`);

--
-- Indexes for table `tbldonor`
--
ALTER TABLE `tbldonor`
  ADD PRIMARY KEY (`donorid`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `bloodgrp` (`bloodgrp`),
  ADD KEY `cityid` (`cityid`);

--
-- Indexes for table `tblhospital`
--
ALTER TABLE `tblhospital`
  ADD PRIMARY KEY (`hospitalid`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `cityid` (`cityid`);

--
-- Indexes for table `tblpatient`
--
ALTER TABLE `tblpatient`
  ADD PRIMARY KEY (`patientid`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `bloodgrp` (`bloodgrp`),
  ADD KEY `cityid` (`cityid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tblbloodcamp`
--
ALTER TABLE `tblbloodcamp`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tblbloodgroup`
--
ALTER TABLE `tblbloodgroup`
  MODIFY `bgid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tblbloodreq`
--
ALTER TABLE `tblbloodreq`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `tblbloodstock`
--
ALTER TABLE `tblbloodstock`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tblcity`
--
ALTER TABLE `tblcity`
  MODIFY `cityid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `tbldonor`
--
ALTER TABLE `tbldonor`
  MODIFY `donorid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tblhospital`
--
ALTER TABLE `tblhospital`
  MODIFY `hospitalid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tblpatient`
--
ALTER TABLE `tblpatient`
  MODIFY `patientid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblbloodcamp`
--
ALTER TABLE `tblbloodcamp`
  ADD CONSTRAINT `tblbloodcamp_ibfk_1` FOREIGN KEY (`cityid`) REFERENCES `tblcity` (`cityid`);

--
-- Constraints for table `tblbloodgroup`
--
ALTER TABLE `tblbloodgroup`
  ADD CONSTRAINT `tblbloodgroup_ibfk_1` FOREIGN KEY (`adminid`) REFERENCES `tbladmin` (`adminid`);

--
-- Constraints for table `tblbloodreq`
--
ALTER TABLE `tblbloodreq`
  ADD CONSTRAINT `tblbloodreq_ibfk_1` FOREIGN KEY (`bgid`) REFERENCES `tblbloodgroup` (`bgid`),
  ADD CONSTRAINT `tblbloodreq_ibfk_2` FOREIGN KEY (`rpatientid`) REFERENCES `tblpatient` (`patientid`);

--
-- Constraints for table `tblbloodstock`
--
ALTER TABLE `tblbloodstock`
  ADD CONSTRAINT `tblbloodstock_ibfk_1` FOREIGN KEY (`bgid`) REFERENCES `tblbloodgroup` (`bgid`),
  ADD CONSTRAINT `tblbloodstock_ibfk_2` FOREIGN KEY (`mid`) REFERENCES `tbladmin` (`adminid`);

--
-- Constraints for table `tbldonor`
--
ALTER TABLE `tbldonor`
  ADD CONSTRAINT `tbldonor_ibfk_1` FOREIGN KEY (`bloodgrp`) REFERENCES `tblbloodgroup` (`bgid`),
  ADD CONSTRAINT `tbldonor_ibfk_2` FOREIGN KEY (`cityid`) REFERENCES `tblcity` (`cityid`);

--
-- Constraints for table `tblhospital`
--
ALTER TABLE `tblhospital`
  ADD CONSTRAINT `tblhospital_ibfk_1` FOREIGN KEY (`cityid`) REFERENCES `tblcity` (`cityid`);

--
-- Constraints for table `tblpatient`
--
ALTER TABLE `tblpatient`
  ADD CONSTRAINT `tblpatient_ibfk_1` FOREIGN KEY (`bloodgrp`) REFERENCES `tblbloodgroup` (`bgid`),
  ADD CONSTRAINT `tblpatient_ibfk_2` FOREIGN KEY (`cityid`) REFERENCES `tblcity` (`cityid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
