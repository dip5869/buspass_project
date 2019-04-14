-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2019 at 01:35 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus-app`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `subject`, `message`) VALUES
(37, 'dipak aher', 'dipakaher000@gmail.com', 'demo', 'DASDASD'),
(38, 'dipak aher', 'dipakaher000@gmail.com', 'demo', 'aSSSADASD'),
(39, 'dipak aher', 'dipakaher000@gmail.com', 'demo', 'sdsdfsdf'),
(40, 'dipak aher', 'dipakaher000@gmail.com', 'demo', 'sdsdfsdf'),
(41, 'akshay mulay', 'akshaymulay27@gmail.com', 'demo', 'demo'),
(42, 'dipak aher', 'dipakaher000@gmail.com', 'demo', 'ssss'),
(43, 'shivam', 'shivam@gmail.com', 'demo', 'demo');

-- --------------------------------------------------------

--
-- Table structure for table `given_passes`
--

CREATE TABLE `given_passes` (
  `id` int(11) NOT NULL,
  `image` varchar(400) NOT NULL,
  `user` varchar(50) NOT NULL,
  `collge` varchar(50) NOT NULL,
  `route` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `fee` int(11) NOT NULL,
  `passid` varchar(50) NOT NULL,
  `attested` varchar(50) NOT NULL,
  `validity` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `given_passes`
--

INSERT INTO `given_passes` (`id`, `image`, `user`, `collge`, `route`, `class`, `dob`, `fee`, `passid`, `attested`, `validity`) VALUES
(8, 'IMG_20180329_171842.jpg', 'suyog hande', 'sangamner collge sangamner', 'sangamner to dhamngone avari', 'bcom', '2019-01-10', 550, '122323', 'depomanager', '2019-01-02'),
(9, 'IMG_20180329_171842.jpg', 'akshay mulay', 'sangamner collge sangamner', 'sangamner to rahuri', 'bsc', '2019-01-03', 500, '122322', 'depomanager', '2019-01-01'),
(10, 'IMG_20180329_171842.jpg', 'dipak aher', 'sangamner college sangamner', 'sangamner to ganore', 'tybcs', '1999-04-25', 500, '122323', 'depomanager', '2019-01-31');

-- --------------------------------------------------------

--
-- Table structure for table `passes`
--

CREATE TABLE `passes` (
  `id` int(11) NOT NULL,
  `route` varchar(255) NOT NULL,
  `fee` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passes`
--

INSERT INTO `passes` (`id`, `route`, `fee`) VALUES
(11, 'sangamner to virgone', 600),
(9, 'ganore to sangamner', 580),
(10, 'sangamer to sakur', 450),
(12, 'sangamner to devthan', 800),
(13, 'sangamner to nimaj', 500),
(15, 'sangamner to sakur', 550),
(21, 'sangamner to loni', 500),
(18, 'sangamner to pune', 800),
(19, 'sangamner to sangavi', 500),
(23, 'sangamner to ganore', 500),
(24, 'sangmaner to kauthe vankute', 550),
(25, 'sangamner to kauthe vankute', 550),
(26, 'sangamner to muthalane', 850);

-- --------------------------------------------------------

--
-- Table structure for table `sended_passes`
--

CREATE TABLE `sended_passes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `prn` int(11) NOT NULL,
  `collge` varchar(255) NOT NULL,
  `route` varchar(255) NOT NULL,
  `class` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `fee` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sended_passes`
--

INSERT INTO `sended_passes` (`id`, `name`, `prn`, `collge`, `route`, `class`, `dob`, `fee`) VALUES
(42, 'dipak aher', 160079, 'sangamner college sangamner', 'sangamner to ganore', 'tybcs', '1999-04-25', 500),
(41, 'akshay mulay', 160081, 'sangamner collge sangamner', 'sangamner to rahuri', 'bsc', '2019-01-03', 550);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `prn` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `collge` varchar(255) NOT NULL,
  `route` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `image` text NOT NULL,
  `bfc` text NOT NULL,
  `fee` int(11) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `prn`, `email`, `collge`, `route`, `class`, `dob`, `image`, `bfc`, `fee`, `password`) VALUES
(32, 'dipak aher', 160079, 'dipakaher000@gmail.com', 'sangamner college sangamner', 'sangamner to ganore', 'tybcs', '1999-04-25', 'IMG_20180329_171842.jpg', 'Screenshot_20170730_213102.png', 0, '123'),
(31, 'akshay mulay', 160081, 'akshaymulay27@gmail.com', 'sangamner collge sangamner', 'sangamner to rahuri', 'bsc', '2019-01-03', 'IMG_20180329_171842.jpg', 'Screenshot_20170730_213102.png', 0, '123');

-- --------------------------------------------------------

--
-- Table structure for table `stud_prn`
--

CREATE TABLE `stud_prn` (
  `id` int(11) NOT NULL,
  `prn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud_prn`
--

INSERT INTO `stud_prn` (`id`, `prn`) VALUES
(1, 160079),
(2, 160080),
(3, 160082);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `given_passes`
--
ALTER TABLE `given_passes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passes`
--
ALTER TABLE `passes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sended_passes`
--
ALTER TABLE `sended_passes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stud_prn`
--
ALTER TABLE `stud_prn`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `given_passes`
--
ALTER TABLE `given_passes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `passes`
--
ALTER TABLE `passes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `sended_passes`
--
ALTER TABLE `sended_passes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `stud_prn`
--
ALTER TABLE `stud_prn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
