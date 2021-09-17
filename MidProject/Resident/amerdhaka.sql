-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2021 at 05:37 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amerdhaka`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` text NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `password` int(100) NOT NULL,
  `address` text NOT NULL,
  `dob` text NOT NULL,
  `gender` text NOT NULL,
  `image` text NOT NULL,
  `phoneno` text NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `firstname`, `lastname`, `password`, `address`, `dob`, `gender`, `image`, `phoneno`, `email`) VALUES
('kajol', 'Riyad', 'Hossain', 1234567, ' fdsagag ', '29-04-1999', 'male', '../files/download.jpg', '223454235236', 'email');

-- --------------------------------------------------------

--
-- Table structure for table `illegalstructure`
--

CREATE TABLE `illegalstructure` (
  `location` text NOT NULL,
  `details` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `illegalstructure`
--

INSERT INTO `illegalstructure` (`location`, `details`, `image`) VALUES
('gwdsgadgs', 'gdfsgsdfgfdsg', '../files/download.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mosquitoinfected`
--

CREATE TABLE `mosquitoinfected` (
  `affectedperson` text NOT NULL,
  `diseasename` text NOT NULL,
  `address` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mosquitoinfected`
--

INSERT INTO `mosquitoinfected` (`affectedperson`, `diseasename`, `address`, `image`) VALUES
('gfdsg', 'dengue', 'sfdgds', '../files/download.jpg'),
('mother', 'dengue', 'dhaka', '../files/download.jpg'),
('my father', 'dengue', 'hatir jheel', '../files/download.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mosquitolarva`
--

CREATE TABLE `mosquitolarva` (
  `location` text NOT NULL,
  `details` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mosquitolarva`
--

INSERT INTO `mosquitolarva` (`location`, `details`, `image`) VALUES
('dhaka', 'dgfsgdsfg', '../files/download.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `resident`
--

CREATE TABLE `resident` (
  `username` text NOT NULL,
  `password` int(100) NOT NULL,
  `nidno` text NOT NULL,
  `address` text NOT NULL,
  `gender` text NOT NULL,
  `area` text NOT NULL,
  `phone` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resident`
--

INSERT INTO `resident` (`username`, `password`, `nidno`, `address`, `gender`, `area`, `phone`, `email`, `image`) VALUES
('kajol', 123456, '123456788', '  mirpur,dhaka  ', 'male', 'uttara', '01923847456547', 'kajol.99bd@gmail.com', '../files/download.jpg'),
('kajol', 123456, '123456788', '  mirpur,dhaka  ', 'male', 'uttara', '01923847456547', 'kajol.99bd@gmail.com', '../files/WIN_20210308_10_30_18_Pro.jpg'),
('', 0, '', '', '<i>Please select at least one option</i>', '', '', '', '../files/'),
('', 0, '', '', '<i>Please select at least one option</i>', '', '', '', '../files/'),
('', 0, '', '', '<i>Please select at least one option</i>', '', '', '', '../files/'),
('Eshrat jahan', 123456, '42523562444', ' uttara,dhaka ', 'female', 'mirpur', '017947869048', 'eshrat@gmail.com', '../files/download.jpg'),
('mehedi', 1234567, '462362364', 'fgdshfsdhfsd', 'male', 'dsfsag', '01923847456547', 'nahid@gmail.com', '../files/WIN_20210308_10_30_18_Pro.jpg'),
('kajol khan', 123456, '12345666', ' dhaka ', 'male', 'bashundhara', '01923847456547', 'kajol.99bd@gmail.com', '../files/download.jpg'),
('abu bakker', 1234567, '098324579457', ' dhaka ', 'male', 'bashundhara', '0179834674858', 'abubakker@gmail.com', '../files/IMG_20210409_212101.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `road`
--

CREATE TABLE `road` (
  `issuetype` text NOT NULL,
  `location` text NOT NULL,
  `details` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `road`
--

INSERT INTO `road` (`issuetype`, `location`, `details`, `image`) VALUES
('manhole', 'dfasga', 'adsgasgasg', '../files/1.png'),
('manhole', 'dfasga', 'adsgasgasg', '../files/1.png'),
('mainhole', 'dgfdhs', 'sfdgsddg', '../files/images.png'),
('mainhole', 'dgfdhs', 'sfdgsddg', '../files/images.png'),
('roadsurface', 'adsfas', 'adsfadsads', '../files/images.png'),
('footpath', 'ggggg', 'aadfsafdsadsadsfdas', '../files/download (1).png'),
('manhole', 'mirpur', 'aadkfjdshgkjdaghg', '../files/Thankyou.jpg'),
('manhole', 'dhaka', 'fsgdsgfdsg', '../files/Thankyou.jpg'),
('manhole', 'bashundhara dhaka', 'road broken', '../files/download.jpg'),
('footpath', 'uttara 14 No sector', 'road broken.', '../files/download.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `streetlight`
--

CREATE TABLE `streetlight` (
  `issuetype` text NOT NULL,
  `location` text NOT NULL,
  `details` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `streetlight`
--

INSERT INTO `streetlight` (`issuetype`, `location`, `details`, `image`) VALUES
('roadsurface', 'fgdshsdfh', 'fdshsdh', '../files/Thankyou.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tender_info`
--

CREATE TABLE `tender_info` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `specialty` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL,
  `wage` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tender_info`
--

INSERT INTO `tender_info` (`id`, `name`, `contact`, `specialty`, `location`, `wage`) VALUES
(1, 'Fayeaz ahmed', '01722797614', 'Water lines', 'Dhaka', 1212),
(2, 'limon mia', '019118247', 'family planning', 'Khulna', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `waterlog`
--

CREATE TABLE `waterlog` (
  `location` text NOT NULL,
  `details` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `waterlog`
--

INSERT INTO `waterlog` (`location`, `details`, `image`) VALUES
('hfgfshs', 'fdshsd', '../files/download.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tender_info`
--
ALTER TABLE `tender_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tender_info`
--
ALTER TABLE `tender_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
