-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2019 at 07:08 PM
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
-- Table structure for table `booksgiven`
--

CREATE TABLE `booksgiven` (
  `UserName1` varchar(30) NOT NULL,
  `BookName` varchar(30) NOT NULL,
  `UserName2` varchar(30) NOT NULL,
  `DateIssued` date NOT NULL,
  `DueDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booksgiven`
--

INSERT INTO `booksgiven` (`UserName1`, `BookName`, `UserName2`, `DateIssued`, `DueDate`) VALUES
('root', 'hello', 'Laxmi', '0000-00-00', '0000-00-00'),
('Laxmi', 'hello', 'Laxmi', '0000-00-00', '0000-00-00'),
('Laxmi', 'hello', 'Laxmi', '0000-00-00', '0000-00-00'),
('Laxmi', 'hello', 'Laxmi', '0000-00-00', '0000-00-00'),
('akshita123', 'bookname', 'Laxmi', '0000-00-00', '0000-00-00'),
('akshita123', 'bookname', 'Laxmi', '0000-00-00', '0000-00-00'),
('akshita123', 'bookname', 'Laxmi', '0000-00-00', '0000-00-00'),
('akshita123', 'bookname', 'Laxmi', '0000-00-00', '0000-00-00'),
('akshita123', 'bookname', 'Laxmi', '0000-00-00', '0000-00-00'),
('akshita123', 'bookname', 'Laxmi', '0000-00-00', '0000-00-00'),
('akshita123', 'hamlet', 'Laxmi', '0000-00-00', '0000-00-00'),
('akshita123', 'hamlet', 'Laxmi', '0000-00-00', '0000-00-00'),
('akshita123', 'hamlet', 'Laxmi', '0000-00-00', '0000-00-00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
