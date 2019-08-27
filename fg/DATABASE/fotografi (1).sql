-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2018 at 01:23 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fotografi`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subd` varchar(50) NOT NULL,
  `msgd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `subd`, `msgd`) VALUES
('Chaitanya', 'chaitanyamaralihalli18@gmail.com', 'Improvement', 'Improvement in mail system mail are not being rece'),
('Bob', 'bob@gmail.com', 'Improvement', 'Site can still improve '),
('Mahantesh', 'mantupv@gmail.com', 'Date Clash', 'There is a clash in dates contact me as soon as po'),
('Ashish', 'apnightfury@gmail.com', 'Date Clash', 'There is a clash in dates plz contact me on email ');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `feed` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `feed`) VALUES
('Mahantesh', 'mantupv@gmail.com', 'Good job'),
('Ashish', 'apnightfury@gmail.com', 'Good photographs good price'),
('Bob', 'bob@gmail.com', 'No good expirence, arrived late at event'),
('Chaitanya', 'chaitanyamaralihalli18@gmail.com', 'Professional Photographers good job, nice clicks ');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `padd` varchar(50) NOT NULL,
  `eadd` varchar(50) NOT NULL,
  `services` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `dt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`name`, `email`, `phone`, `padd`, `eadd`, `services`, `price`, `dt`) VALUES
('Ashish', 'apnightfury@gmail.com', '8197500885', 'Belgaum, Angol', 'Goa, Madgaon', 'TRAVEL-PHOTOGRAPHY', '35,000-49,999', '2018-01-10'),
('Chaitanya', 'chaitanyamaralihalli18@gmail.com', '7722883344', 'Belgaum, City', 'Goa, Shiroda', 'LIFESTYLE-PHOTOGRAPHY', '20,000-34,999', '2018-01-11'),
('Mahantesh', 'mantupv@gmail.com', '8904144770', 'Belgaum, Jain clg', 'Belgaum, Jain clg', 'SPORTS-PHOTOGRAPHY', 'FROM 50,000', '2018-06-20'),
('Bob', 'bob@gmail.com', '1234567890', 'Belgaum, Piranwadi', 'Mumbai, Thane', 'POST-WEDDING', '10,000-19,999', '2018-12-26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`msgd`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feed`);
ALTER TABLE `feedback` ADD FULLTEXT KEY `email` (`email`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`dt`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
