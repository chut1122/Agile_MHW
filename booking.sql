-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2017 at 03:53 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `satis` text NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `phone`, `satis`, `comment`) VALUES
('Chang Jie Jeng', 'chut_95@hotmail.com', '124770727', '', 'very good'),
('Chang Jie Jeng', 'chut_95@hotmail.com', '124770727', '', 'very good'),
('Chang Jie Jeng', 'chut_95@hotmail.com', '124770727', '', 'good'),
('Chang Jie Jeng', 'chut_95@hotmail.com', '124770727', 'Very Good', 'good'),
('Chang Jie Jeng', 'chut_95@hotmail.com', '124770727', 'Bad', '&*(^&*()%$&*)(#@&%$'),
('Chang Jie Jeng', 'chut_95@hotmail.com', '124770727', 'Bad', '&*(^&*()%$&*)(#@&%$'),
('Chang Jie Jeng', 'chut_95@hotmail.com', '124770727', 'Normal', 'safdasfasfasdasd'),
('sadasd', 'sdasd@sfdasdas.com', 'asdasdasdsadas', 'Excellent', 'asdasdasdasdsadada'),
('sadasd', 'me@example.com', 'asdasdasdsadas', 'Normal', 'sadasdasdasdasd'),
('123213123', 'sdasd@sfdasdas.com', 'dsadasdasdas', 'Very Good', 'sadasdasdasdasdzasd'),
('d214323123123asdasdasd', 'chut_95@hotmail.com', 'sadasdasdasdasdas', 'Bad', 'asdasdasdasd'),
('2132132132131', 'sdasd@sfdasdas.com', '2132131231231', 'Very Good', 'ased2134sadadsa');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `pp_no` text NOT NULL,
  `address` text NOT NULL,
  `email` text NOT NULL,
  `hp_no` text NOT NULL,
  `roomtype` text NOT NULL,
  `checkin` text NOT NULL,
  `checkout` text NOT NULL,
  `radio` text NOT NULL,
  `requirement` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `name`, `pp_no`, `address`, `email`, `hp_no`, `roomtype`, `checkin`, `checkout`, `radio`, `requirement`) VALUES
(1, 'chang', 'a45123465', 'shdkasjdhkjlasnd', 'chut_95@hotmail.com', '21412321', '1', '11/27/2017', '11/28/2017', 'non-smooking', 'No Requirement'),
(2, 'chang', 'a45123465', 'shdkasjdhkjlasnd', 'chut_95@hotmail.com', '21412321', '1', '11/27/2017', '11/28/2017', 'non-smooking', 'No Requirement'),
(3, 'sadasd', '21321312', 'dasdasdad15', 'chut_95@hotmail.com', '21321313', '1', '11/27/2017', '11/28/2017', 'smooking', 'be happy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
