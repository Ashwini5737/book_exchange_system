-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2019 at 07:11 PM
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
-- Table structure for table `notificationtable`
--

CREATE TABLE `notificationtable` (
  `UserName` varchar(30) NOT NULL,
  `BookName` text NOT NULL,
  `UserName2` text NOT NULL,
  `Noofdays` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notificationtable`
--

INSERT INTO `notificationtable` (`UserName`, `BookName`, `UserName2`, `Noofdays`) VALUES
('Laxmi', 'abc', 'shreya123', 12),
('', 'abc', 'shreya123', 4),
('surabhi', 'abc', 'shreya123', 4),
('Laxmi', 'abc', 'shreya123', 12),
('', 'abc', 'shreya123', 4),
('Laxmi', 'abc', 'shreya123', 4),
('Laxmi', 'abc', 'shreya123', 4),
('Laxmi', '', 'shreya123', 12),
('Laxmi', 'gulivers travel\"\"\"', 'shreya123', 12),
('Laxmi', 'gulivers travel;', 'shreya123', 4),
('shreya123', 'gulivers travel', '', 12),
('shreya123', 'gulivers travel', 'shreya123', 4),
('shreya123', 'gulivers travel', 'shreya123', 4),
('Laxmi', 'qwe', 'sakshi@12', 4),
('Laxmi', 'qwe', 'sakshi@12', 4),
('Laxmi', 'hello', 'Laxmi', 4),
('Laxmi', 'bookname', 'akshita123', 12),
('Laxmi', 'bookname', 'akshita123', 12),
('Laxmi', 'hamlet', 'akshita123', 12),
('Laxmi', 'hamlet', 'akshita123', 12);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
