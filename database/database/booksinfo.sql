-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2019 at 07:09 PM
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
-- Table structure for table `booksinfo`
--

CREATE TABLE `booksinfo` (
  `srno` int(11) NOT NULL,
  `UserName` varchar(30) NOT NULL,
  `BookName` text NOT NULL,
  `Author` text NOT NULL,
  `Description` text NOT NULL,
  `Categories` varchar(30) NOT NULL,
  `pics` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booksinfo`
--

INSERT INTO `booksinfo` (`srno`, `UserName`, `BookName`, `Author`, `Description`, `Categories`, `pics`) VALUES
(1, 'sakshi', '', '', '', '', NULL),
(2, 'shreya123', '', '', '', '', NULL),
(3, 'shreya123', 'abc', 'byu', 'asddfg', 'volvo', NULL),
(4, 'shreya123', 'abc1', 'byu1', 'asddfg1', 'volvo', NULL),
(5, 'shreya123', 'Gulliver', 'charles dicken', 'fheahfiaeh', 'fiction', NULL),
(6, 'shreya123', 'gulivers travel', 'charles dicken', 'aefsyduesgv', 'fantasy', NULL),
(7, 'shreya123', 'gulivers travel;', 'charles dicken', 'aefsyduesgv', 'fantasy', NULL),
(8, 'shreya123', 'gulivers travel\"\"\"', 'charles dicken', 'aefsyduesgv', 'fantasy', NULL),
(9, 'shreya123', 'gulivers travel\"\"\"', 'charles dicken', 'aefsyduesgv', 'fantasy', NULL),
(10, 'Laxmi', 'hello', 'ashu', 'wesrkj', 'Children', NULL),
(11, 'Laxmi', 'hello1', 'hello', 'wesrkjdrghu', 'Children', NULL),
(12, 'Laxmi', 'shyamachi aai', 'sane guruji', 'xdfchgbj', 'general', NULL),
(13, 'sakshi@12', 'qwe', 'qwer', 'qwerfgh', 'Children', NULL),
(14, 'sakshi@12', 'qwe', 'qwer', 'qwerfgh', 'Children', NULL),
(15, '', '', '', '', '', NULL),
(16, 'shreya123', '', '', '', '', NULL),
(17, 'akshita123', 'bookname', 'bookauthor', 'book description', 'fiction', NULL),
(18, 'Laxmi', 'In Search of Lost Time', 'Marcel Proust', 'Search of Lost Time follows the narrator\'s recollections of childhood and experiences into adulthood during late 19th century to early 20th century aristocratic France, while reflecting on the loss of time and lack of meaning to the world.[1] The novel began to take shape in 1909. Proust continued to work on it until his final illness in the autumn of 1922 forced him to break off. Proust established the structure early on, but even after volumes were initially finished he kept adding new material and edited one volume after another for publication.', 'General', 'images/inSearch.jpg'),
(19, 'shreya123', 'Don Quixote', 'Miguel de Cervantes', 'Don Quixote is the most influential work of literature from the Spanish Golden Age and the entire Spanish literary canon. As a founding work of modern Western literature and the earliest canonical novel,[citation needed] it regularly appears high on lists of the greatest works of fiction ever published, such as the Bokklubben World Library collection that cites Don Quixote as the authors\' choice for the \"best literary work ever written\".[2]\r\nThe story follows the adventures of a noble (hidalgo) named Alonso Quixano who reads so many chivalric romances that he loses his sanity and decides to become a knight-errant (caballero andante), reviving chivalry and serving his country, under the name Don Quixote de la Mancha.\r\n', 'Fantasy', 'images/donQuixote.jpg'),
(20, 'akshita123', 'The Great Gatsby', 'F. Scott Fitzgerald', 'The Great Gatsby is a 1925 novel written by American author F. Scott Fitzgerald that follows a cast of characters living in the fictional towns of West Egg and East Egg on prosperous Long Island in the summer of 1922. The story primarily concerns the young and mysterious millionaire Jay Gatsby and his quixotic passion and obsession with the beautiful former debutante Daisy Buchanan. Considered to be Fitzgerald\'s magnum opus, The Great Gatsby explores themes of decadence, idealism, resistance to change, social upheaval, and excess, creating a portrait of the Roaring Twenties that has been described as a cautionary tale regarding the American Dream', 'series', 'images/theGreat.jpg'),
(21, 'akshita123', 'hamlet', 'Shakespeare', 'The Tragedy of Hamlet, Prince of Denmark, often shortened to Hamlet (/\'hæml?t/), is a tragedy written by William Shakespeare at an uncertain date between 1599 and 1602. Set in Denmark, the play dramatises the revenge Prince Hamlet is called to wreak upon his uncle, Claudius, by the ghost of Hamlet\'s father, King Hamlet. Claudius had murdered his own brother and seized the throne, also marrying his deceased brother\'s widow.\r\n', 'Romance', 'images/hamlet.jpg'),
(22, 'shreya123', 'War and Peace', 'Leo Tolstoy', 'The novel chronicles the history of the French invasion of Russia and the impact of the Napoleonic era on Tsarist society through the stories of five Russian aristocratic families. Portions of an earlier version, titled The Year 1805,[4] were serialized in The Russian Messenger from 1865 to 1867. The novel was first published in its entirety in 1869.[5]\r\nTolstoy said War and Peace is \"not a novel, even less is it a poem, and still less a historical chronicle\".\r\n\r\n', 'General', 'images/warandpeace.jpg'),
(23, 'shreya123', 'Shakespeare', 'Roland', 'The art of dramastic', 'biographies', 'images/shake.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booksinfo`
--
ALTER TABLE `booksinfo`
  ADD PRIMARY KEY (`srno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booksinfo`
--
ALTER TABLE `booksinfo`
  MODIFY `srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
