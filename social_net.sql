-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2021 at 11:57 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `social_net`
--

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `id` int(11) NOT NULL,
  `user1` int(11) NOT NULL,
  `user2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`id`, `user1`, `user2`) VALUES
(1, 1, 2),
(2, 2, 1),
(3, 2, 3),
(4, 3, 2),
(5, 3, 4),
(6, 3, 5),
(7, 3, 7),
(8, 4, 3),
(9, 5, 3),
(10, 5, 6),
(11, 5, 11),
(12, 5, 10),
(13, 5, 7),
(14, 6, 5),
(15, 7, 3),
(16, 7, 5),
(17, 7, 20),
(18, 7, 12),
(19, 7, 8),
(20, 8, 7),
(21, 9, 12),
(22, 10, 5),
(23, 10, 11),
(24, 11, 5),
(25, 11, 10),
(26, 11, 19),
(27, 11, 20),
(28, 12, 7),
(29, 12, 9),
(30, 12, 13),
(31, 12, 20),
(32, 13, 12),
(33, 13, 14),
(34, 13, 20),
(35, 14, 13),
(36, 14, 15),
(37, 15, 14),
(38, 16, 18),
(39, 16, 20),
(40, 17, 18),
(41, 17, 20),
(42, 18, 17),
(43, 19, 11),
(44, 19, 20),
(45, 20, 7),
(46, 20, 11),
(47, 20, 12),
(48, 20, 13),
(49, 20, 16),
(50, 20, 17),
(51, 20, 19);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `surname`, `age`, `gender`) VALUES
(1, 'Paul', 'Crowe', 28, 'male'),
(2, 'Rob', 'Fitz', 23, 'male'),
(3, 'Ben', 'O\'Carolan', 36, 'male'),
(4, 'Victor', 'Victoric', 29, 'male'),
(5, 'Peter', 'Mac', 29, 'male'),
(6, 'John', 'Barry', 18, 'male'),
(7, 'Sarah', 'Lane', 30, 'female'),
(8, 'Susan', 'Downe', 28, 'female'),
(9, 'Jack', 'Stam', 28, 'male'),
(10, 'Amy', 'Lane', 24, 'female'),
(11, 'Sandra', 'Phelan', 28, 'female'),
(12, 'Laura', 'Murphy', 33, 'female'),
(13, 'Lisa', 'Daly', 28, 'female'),
(14, 'Mark', 'Johnson', 28, 'male'),
(15, 'Seamus', 'Crowe', 24, 'male'),
(16, 'Daren', 'Slater', 28, 'male'),
(17, 'Dara', 'Zoltan', 48, 'male'),
(18, 'Marie', 'D', 28, 'female'),
(19, 'Catriona', 'Long', 28, 'female'),
(20, 'Katy', 'Couch', 28, 'female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
