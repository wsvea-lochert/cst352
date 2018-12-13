-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 13, 2018 at 07:12 PM
-- Server version: 5.5.57-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `c9`
--

-- --------------------------------------------------------

--
-- Table structure for table `lab10_quiz`
--

CREATE TABLE `lab10_quiz` (
  `userId` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `score` tinyint(4) NOT NULL,
  `attempts` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lab10_quiz`
--

INSERT INTO `lab10_quiz` (`userId`, `email`, `score`, `attempts`) VALUES
(1, 'alalonso@csumb.edu', 5, 1),
(2, 'sam@csumb.edu', 5, 1),
(3, 'vy@csumb.edu', 10, 2),
(4, 'moises@csumb.edu', 10, 1),
(5, 'ana@csumb.edu', 10, 1),
(6, 'willi@csumb.edu', 0, 1),
(7, 'steph@csumb.edu', 5, 1),
(8, 'zak@csumb.edu', 10, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lab10_quiz`
--
ALTER TABLE `lab10_quiz`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lab10_quiz`
--
ALTER TABLE `lab10_quiz`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
