-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2019 at 07:12 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `signuptable`
--

-- --------------------------------------------------------

--
-- Table structure for table `infotable`
--

CREATE TABLE `infotable` (
  `srno` int(11) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `MiddleName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Place` varchar(30) NOT NULL,
  `MobileNo` varchar(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Gender` text NOT NULL,
  `UserName` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `infotable`
--

INSERT INTO `infotable` (`srno`, `FirstName`, `MiddleName`, `LastName`, `Place`, `MobileNo`, `Email`, `Gender`, `UserName`, `Password`) VALUES
(9, 'Laxmi', 'appasaheb', 'kalshetty', 'natepute', '8379868369', 'laxmi.kalshetty16@vit.edu', 'female', 'Laxmi', '1234'),
(18, 'surabhi', 'xyz', 'gade', 'solapur', '9876543210', 'surabhi.gade16@vit.edu', 'female', 'surabhi', '1234'),
(20, 'surabhi', 'appasaheb', 'kalshetty', 'natepute', '8379868369', 'laxmi.kalshetty16@vit.edu', 'female', 'Laxmi', '1234'),
(22, 'laxmi', 'appasaheb', 'kalshetty', 'natepute', '8379868369', 'laxmi.kalshetty16@vit.edu', 'female', 'Laxmi1235', '1234'),
(23, 'laxmi', 'appasaheb', 'kalshetty', 'natepute', '8379868369', 'laxmi.kalshetty16@vit.edu', 'female', 'shreya', '1234'),
(24, 'shreya', '', 'karmakar', 'pune', '8379868369', 'laxmi.kalshetty16@vit.edu', 'female', 'shreya123', '1234'),
(26, 'a', 'a', 'a', 'a', '1', 'a', '', 'abcd1234', '1'),
(27, 'a', 'a', 'a', 'a', '1', 'a', '', 'pradnya', '1'),
(28, 'a', 'a', 'a', 'a', '1', 'a', '', 'pradnya123', '1'),
(29, 'a', 'a', 'a', 'a', '1', 'a', '', 'pradnya1234', '1'),
(30, 'akshita', 'tejraj', 'headoo', 'mumbai', '9876543456', 'laxmi.kalshetty16@vit.edu', '', 'akshita123', '987'),
(31, 'akshita', 'tejraj', 'headoo', 'mumbai', '9876543456', 'laxmi.kalshetty16@vit.edu', '', 'akshita123456', '1'),
(32, 'akshita', 'tejraj', 'headoo', 'mumbai', '9876543456', 'laxmi.kalshetty16@vit.edu', '', 'akshita12345', '1'),
(33, 'akshita', 'tejraj', 'headoo', 'mumbai', '9876543456', 'laxmi.kalshetty16@vit.edu', '', 'akshita123459', '1'),
(34, 'akshita', 'tejraj', 'headoo', 'mumbai', '9876543456', 'laxmi.kalshetty16@vit.edu', '', 'akshita1234590', '1'),
(35, 'sakshi', 'prashant', 'aher', 'nasik', '9876543210', 'laxmi.kalshetty16@vit.edu', '', 'sakshi@1', '1234'),
(36, 'sakshi', 'prashant', 'aher', 'nasik', '9876543210', 'laxmi.kalshetty16@vit.edu', '', 'sakshi@12', '1'),
(37, 'aa', 'aa', 'aa', 'aa', '12', 'aa', '', 'aa', '11'),
(38, 'bb', 'bb', 'bb', 'bb', '8379868369', 'laxmi.kalshetty16@vit.edu', '', 'bb', '12'),
(39, 'bb', 'bb', 'bb', 'bb', '12345', 'bb', '', 'abcdfre', '1'),
(40, 'surabhi', '', 'gade', 'solapur', '', 'surabhi.gade16@vit.edu', '', '', ''),
(41, '', '', '', '', '', '', '', '', ''),
(42, '', '', '', '', '', '', '', '', ''),
(43, '', '', '', '', '', '', '', '', ''),
(44, '', '', '', '', '', '', '', '', ''),
(45, '', '', '', '', '', '', '', '', ''),
(46, '', '', '', '', '', '', '', '', ''),
(47, '', '', '', '', '', '', '', '', ''),
(48, '', '', '', '', '', '', '', '', ''),
(49, '', '', '', '', '', '', '', '', ''),
(50, '', '', '', '', '', '', '', '', ''),
(51, '', '', '', '', '', '', '', '', ''),
(52, '', '', '', '', '', '', '', '', ''),
(53, 'surabhi', '', 'gade', 'solapur', '', 'surabhi.gade16@vit.edu', '', '', ''),
(54, 'surabhi', '', 'gade', 'solapur', '94035464', 'surabhi.gade16@vit.edu', '', '', ''),
(55, 'surabhi', '', 'gade', 'solapur', '1234567890', 'surabhi.gade16@vit.edu', '', '', ''),
(56, 'Surabhi', '', 'gade', 'solapur', '9403467899', 'surabhi.gade16@vit.edu', '', '', ''),
(57, 'surabhi', '', 'gade', 'solapur', '945468', 'surabhi.gade16@vit.edu', '', '', ''),
(58, 'neha', 'ganesh', 'ghongade', 'pune', '8379868369', 'nehaghonda', '', 'neha123', '1234'),
(59, 'neha', 'ganesh', 'ghongade', 'pune', '8379868369', 'nehaghonda', '', 'neha1234', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `infotable`
--
ALTER TABLE `infotable`
  ADD PRIMARY KEY (`srno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `infotable`
--
ALTER TABLE `infotable`
  MODIFY `srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
