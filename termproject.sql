-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2022 at 07:25 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `termproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `busses`
--

CREATE TABLE `busses` (
  `bid` int(11) NOT NULL,
  `plate` varchar(9) DEFAULT NULL,
  `brand` varchar(15) DEFAULT NULL,
  `bus_year` int(11) DEFAULT NULL,
  `capacity` int(11) DEFAULT NULL,
  `is_wifi` varchar(5) DEFAULT NULL,
  `is_socket` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `busses`
--

INSERT INTO `busses` (`bid`, `plate`, `brand`, `bus_year`, `capacity`, `is_wifi`, `is_socket`) VALUES
(1, '42AGS397', 'Opel', 2020, 5, 'No', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cid` int(11) NOT NULL,
  `cname` varchar(20) DEFAULT NULL,
  `csurname` varchar(20) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `telephone` varchar(15) DEFAULT NULL,
  `mail` varchar(30) DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `ssn` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cid`, `cname`, `csurname`, `age`, `telephone`, `mail`, `gender`, `ssn`) VALUES
(4, 'sadi', 'gulbey', 24, '544 544 1333', 'sadi@gmail.com', 'Male', '12353243567'),
(5, 'atakan', 'yilmaz', 22, '532 509 0276', 'atakan@gmail.com', 'Male', '12398490234'),
(6, 'serra', 'akar', 23, '503 323 3493', 'serra@gmail.com', 'Female', '12301293'),
(7, 'ali', 'parlakci', 23, '342 234 2422', 'ali@test.com', 'Male', '1234435321'),
(8, 'rana', 'islek', 18, '567 432 4563', 'rana@mail.co', 'Female', '1234567898'),
(9, 'irem', 'erdogan', 32, '543 334 7654', 'irem@mail.co', 'Female', '12345678'),
(10, 'akif atakan', 'yilmaz', 12, '532 123 4567', 'atakan@test.co', 'Male', '90234829034'),
(11, 'ali', 'parlak', 23, '444 555 6666', 'test@test.com', 'Female', '1234562435');

-- --------------------------------------------------------

--
-- Table structure for table `workers`
--

CREATE TABLE `workers` (
  `wid` int(11) NOT NULL,
  `worker_name` varchar(20) DEFAULT NULL,
  `worker_surname` varchar(20) DEFAULT NULL,
  `worker_ssn` varchar(20) DEFAULT NULL,
  `salary` double DEFAULT NULL,
  `gender` varchar(8) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `worker_role` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workers`
--

INSERT INTO `workers` (`wid`, `worker_name`, `worker_surname`, `worker_ssn`, `salary`, `gender`, `age`, `worker_role`) VALUES
(1, 'atakan', 'yilmaz', '123412341234', 6500, 'Male', 23, 'Driver'),
(2, 'serra', 'akar', '21185386666', 5000, 'Female', 21, 'Bus Conductor'),
(3, 'sadi', 'gulbey', '243653675677', 3465, 'Male', 34, 'Bus Conductor'),
(4, 'ali', 'parlak', '329482390', 6908, 'Male', 65, 'Salesperson');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `busses`
--
ALTER TABLE `busses`
  ADD PRIMARY KEY (`bid`),
  ADD UNIQUE KEY `plate` (`plate`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cid`),
  ADD UNIQUE KEY `ssn` (`ssn`);

--
-- Indexes for table `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`wid`),
  ADD UNIQUE KEY `worker_ssn` (`worker_ssn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `busses`
--
ALTER TABLE `busses`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `workers`
--
ALTER TABLE `workers`
  MODIFY `wid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
