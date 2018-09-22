-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 06, 2018 at 04:23 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voting-system`
--

-- --------------------------------------------------------

--
-- Table structure for table `candiates`
--

CREATE TABLE `candiates` (
  `id` int(11) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `const` varchar(100) NOT NULL,
  `age` int(5) NOT NULL,
  `cphoto` varchar(100) NOT NULL,
  `pphoto` varchar(100) NOT NULL,
  `contr` varchar(100) NOT NULL,
  `vote` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candiates`
--

INSERT INTO `candiates` (`id`, `cname`, `pname`, `address`, `const`, `age`, `cphoto`, `pphoto`, `contr`, `vote`) VALUES
(6, 'saran', 'Cong', 'coimbatore', 'coimbatore', 34, 'pol6.jpg', 'sym6.jpg', 'psdf', 9),
(7, 'Naresh', 'MJP', 'Coimbatore', 'Coimbatore', 45, 'pol2.jpg', 'sym7.jpg', 'testing', 5),
(8, 'Manikandan', 'Communist', 'coimbatore', 'Coimbatore', 45, 'pol4.jpg', 'sym7.jpg', 'social', 8);

-- --------------------------------------------------------

--
-- Table structure for table `voter_details`
--

CREATE TABLE `voter_details` (
  `VoterID` int(10) NOT NULL,
  `Adhar_num` int(16) NOT NULL,
  `voter_name` varchar(40) NOT NULL,
  `fathername` varchar(20) NOT NULL,
  `address` tinytext NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `city` varchar(30) DEFAULT NULL,
  `const` varchar(10) DEFAULT NULL,
  `ward` varchar(10) DEFAULT NULL,
  `mobile` int(10) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `uname` varchar(30) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL,
  `voter_photo` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voter_details`
--

INSERT INTO `voter_details` (`VoterID`, `Adhar_num`, `voter_name`, `fathername`, `address`, `gender`, `dob`, `city`, `const`, `ward`, `mobile`, `email`, `uname`, `pass`, `voter_photo`) VALUES
(6, 12121, 'hari', 'ran', 'adfa', 'male', '2015-02-03', 'coimbatore', 'tamilnadu', '2', 2147483647, 'prharishankar@gmail.com', 'hari', '12345', ''),
(7, 5584455, 'magesh', 'ran', 'adfa', 'male', '2015-02-03', 'coimbatore', 'tamilnadu', '2', 2147483647, 'prharishankar@gmail.com', 'magesh', '123456', ''),
(8, 5584455, 'magesh', 'ran', 'adfa', 'male', '2015-02-03', 'coimbatore', 'tamilnadu', '2', 2147483647, 'prharishankar@gmail.com', 'magesh', '123455', ''),
(9, 5584455, 'magesh', 'ran', 'adfa', 'male', '2015-02-03', 'coimbatore', 'tamilnadu', '2', 2147483647, 'prharishankar@gmail.com', 'magesh', '11111', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candiates`
--
ALTER TABLE `candiates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voter_details`
--
ALTER TABLE `voter_details`
  ADD PRIMARY KEY (`VoterID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candiates`
--
ALTER TABLE `candiates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `voter_details`
--
ALTER TABLE `voter_details`
  MODIFY `VoterID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
