-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 04, 2019 at 03:45 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `furn`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `sno` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `address` text,
  `phone` varchar(100) NOT NULL,
  `admin` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`sno`, `name`, `email`, `password`, `address`, `phone`, `admin`) VALUES
(17, 'Arun Daniel', 'arundanielkennedy@gmail.com', 'asd', NULL, '9952056265', 1);

-- --------------------------------------------------------

--
-- Table structure for table `prodcat`
--

CREATE TABLE `prodcat` (
  `slno` int(11) NOT NULL,
  `catname` varchar(300) NOT NULL,
  `cimg` text,
  `updated` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prodcat`
--

INSERT INTO `prodcat` (`slno`, `catname`, `cimg`, `updated`) VALUES
(1, 'Tv stand', '/static/category/15596437075.jpg', '2019-06-04 06:51:47'),
(2, 'Double Bed', '/static/category/15596446303.jpg', '2019-06-04 09:32:35'),
(3, 'Double Sofa', '/static/category/15596467991.jpg', '2019-06-04 09:50:50'),
(4, 'Dining Table', '/static/category/155964469333.jpg', '2019-06-04 10:10:11');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(100) NOT NULL,
  `pname` varchar(300) DEFAULT NULL,
  `pcat` varchar(100) DEFAULT NULL,
  `pdes` text,
  `pprice` varchar(100) DEFAULT NULL,
  `pimg` text,
  `prating` varchar(100) DEFAULT NULL,
  `pstock` int(250) DEFAULT NULL,
  `pbuyprice` varchar(100) DEFAULT NULL,
  `pdisc` varchar(100) DEFAULT NULL,
  `pcolour` varchar(100) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `pname`, `pcat`, `pdes`, `pprice`, `pimg`, `prating`, `pstock`, `pbuyprice`, `pdisc`, `pcolour`, `updated_at`) VALUES
(1, 'White Sofa', 'Double Sofa', 'A very White sofa it is', '10000', '/static/product/15596546381.jpg', NULL, 11, NULL, NULL, NULL, '2019-06-04 09:28:00'),
(2, 'Black bed', 'Double Bed', 'A queen sized double bed', '10000', '/static/product/15596546847.jpg', NULL, 30, NULL, NULL, NULL, '2019-06-04 09:32:35'),
(3, 'Glass top table', 'Dining Table', 'Elegant table', '40000', '/static/product/155965561133.jpg', NULL, 7, NULL, NULL, NULL, '2019-06-04 10:10:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `prodcat`
--
ALTER TABLE `prodcat`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `sno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
