-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2020 at 04:59 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movies`
--

-- --------------------------------------------------------

--
-- Table structure for table `movie_ratings`
--

CREATE TABLE `movie_ratings` (
  `Id` int(11) NOT NULL,
  `Movie_Name` varchar(100) COLLATE utf8_bin NOT NULL,
  `Movie_URL` text COLLATE utf8_bin NOT NULL,
  `Movie_Rating` int(2) NOT NULL,
  `Vote` int(11) NOT NULL,
  `creation_timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `movie_ratings`
--

INSERT INTO `movie_ratings` (`Id`, `Movie_Name`, `Movie_URL`, `Movie_Rating`, `Vote`, `creation_timestamp`) VALUES
(12, 'Matrix 1', 'https://www.imdb.com/title/tt0133093/', 9, 4, '2020-11-05 15:36:45'),
(13, 'Matrix 2', 'https://www.imdb.com/title/tt10838180/', 7, 2, '2020-11-05 15:48:45'),
(14, 'Matrix 3', 'www.facebook.com', 0, 1, '2020-11-05 15:49:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movie_ratings`
--
ALTER TABLE `movie_ratings`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movie_ratings`
--
ALTER TABLE `movie_ratings`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
