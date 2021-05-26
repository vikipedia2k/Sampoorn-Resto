-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2021 at 05:34 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_services`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_table`
--

CREATE TABLE `book_table` (
  `id` int(111) NOT NULL,
  `cname` varchar(111) NOT NULL,
  `cemail` varchar(111) NOT NULL,
  `date` date NOT NULL,
  `pnumber` int(111) NOT NULL,
  `time` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_table`
--

INSERT INTO `book_table` (`id`, `cname`, `cemail`, `date`, `pnumber`, `time`) VALUES
(1, 'murtaza painter ', 'ali@gmail.com', '2021-03-20', 0, ''),
(2, 'ali', 'mp@gmail.com', '2021-03-05', 4, '5:00AM:7:00PM'),
(3, 'hussain patawala', 'mp@gmail.com', '2021-03-31', 7, '10:00AM-2:00PM');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(111) NOT NULL,
  `name` varchar(1111) NOT NULL,
  `price` varchar(1111) NOT NULL,
  `quantity` int(111) NOT NULL,
  `total` int(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `price`, `quantity`, `total`) VALUES
(32, 'Tandoori Roti', '20', 7, 140),
(33, 'Fried Rice', '180', 2, 360),
(34, 'Biryani', '150', 2, 300),
(35, 'Chicke Kebab', '200', 1, 200);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(111) NOT NULL,
  `name` varchar(1111) NOT NULL,
  `price` varchar(1111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `price`) VALUES
(18, 'Butter chicken', '200'),
(19, 'Chicken', '300'),
(21, 'Fried Rice', '180'),
(22, 'Chicke Kebab', '200'),
(23, 'Biryani', '150'),
(24, 'Tandoori Roti', '20');

-- --------------------------------------------------------

--
-- Table structure for table `userid`
--

CREATE TABLE `userid` (
  `uid` int(11) NOT NULL,
  `username` varchar(111) NOT NULL,
  `mobile` int(111) NOT NULL,
  `total` int(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userid`
--

INSERT INTO `userid` (`uid`, `username`, `mobile`, `total`) VALUES
(2, 'aliakber', 2147483647, 1125);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_table`
--
ALTER TABLE `book_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userid`
--
ALTER TABLE `userid`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_table`
--
ALTER TABLE `book_table`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `userid`
--
ALTER TABLE `userid`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
