-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2018 at 09:53 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tickeristictrav`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(255) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `gender` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(255) NOT NULL,
  `reservation_code` int(200) NOT NULL,
  `reservation_at` varchar(15) NOT NULL,
  `reservation_date` date NOT NULL,
  `customerid` int(255) NOT NULL,
  `seat_code` int(40) NOT NULL,
  `ruteid` int(255) NOT NULL,
  `depart_at` varchar(25) NOT NULL,
  `price` varchar(15) NOT NULL,
  `userid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rute`
--

CREATE TABLE `rute` (
  `id` int(255) NOT NULL,
  `depart_at` date NOT NULL,
  `rute_from` varchar(15) NOT NULL,
  `rute_to` varchar(15) NOT NULL,
  `price` varchar(15) NOT NULL,
  `transportationid` varchar(255) NOT NULL,
  `lokasi_gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rute`
--

INSERT INTO `rute` (`id`, `depart_at`, `rute_from`, `rute_to`, `price`, `transportationid`, `lokasi_gambar`) VALUES
(1, '2018-02-21', 'jakarta', 'makasar', '300000', '33', 'http://localhost/booktravel/assets/images/makasar.jpg'),
(23, '2018-02-07', 'Jakarta', 'Bandung', '250000', '33', 'http://localhost/booktravel/assets/images/bandung.jpg'),
(24, '2018-02-12', 'jakarta', 'purwokerto', '120000', '33', 'http://localhost/booktravel/assets/images/purwokerto.jpg'),
(25, '0000-00-00', 'solo', 'jogja', '500000', '33', '');

-- --------------------------------------------------------

--
-- Table structure for table `transportation_type`
--

CREATE TABLE `transportation_type` (
  `id` int(255) NOT NULL,
  `description` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transportation_type`
--

INSERT INTO `transportation_type` (`id`, `description`) VALUES
(1, 'ekonomi');

-- --------------------------------------------------------

--
-- Table structure for table `trasportation`
--

CREATE TABLE `trasportation` (
  `id` int(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `description` varchar(10) NOT NULL,
  `seat_qty` varchar(15) NOT NULL,
  `transportation_typed` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trasportation`
--

INSERT INTO `trasportation` (`id`, `code`, `description`, `seat_qty`, `transportation_typed`) VALUES
(33, 'ar556', 'malaysiair', '99', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `email`, `password`, `fullname`, `level`) VALUES
(1, 'coba', 'adfasd@gmail.com', '959cc1fd37fad2473c1363d5662bb552', 'coba aja ya', 'admin'),
(125, 'ghuyub', 'raditya@admin.com', '202cb962ac59075b964b07152d234b70', 'ghuyub', 'user'),
(128, 'ra', 'ra@gmial.com', 'cdf6b37f50728ed655037ac8edfa658d', 'ra', 'user'),
(129, 'rohmet', 'rohmet@gmail.com', 'cf81a9e580806e4fb055116ef5c07a3b', 'rohmet', 'user'),
(134, 'hammam', 'hammam@gmail.com', '843f2da5f92e4f333b71f59518c09eae', 'hammam', 'user'),
(135, 'rafi', 'rafi@gmail.com', '139c4e89cdbedaf144d05ca54a12a57b', 'rafi', 'user'),
(138, 'fahmi', 'fahmi@gmail.com', 'f11d50d63d3891a44c332e46d6d7d561', 'fahmi nb', 'user'),
(139, 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', 'admin doang', 'admin'),
(140, 'amel', 'amel@gmail.com', 'da0e22de18e3fbe1e96bdc882b912ea4', 'amel', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rute`
--
ALTER TABLE `rute`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rute`
--
ALTER TABLE `rute`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
