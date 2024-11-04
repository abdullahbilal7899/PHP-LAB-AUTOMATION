-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2023 at 11:12 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eproject_prod`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(10) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `revise_product` int(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `datee` date NOT NULL,
  `product_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `revise_product`, `product_image`, `datee`, `product_status`) VALUES
(34123, 'switch gear', 0, 'uploads/switch gear.jpg', '2023-01-04', 'pass'),
(1231313, 'capacitor', 0, 'uploads/capacitor.jpg', '2023-01-04', 'pass(By CPRI)'),
(1341415, 'fuse', 0, 'uploads/fuse.jpg', '2023-01-04', 'pass'),
(1414135, 'resistor', 0, 'uploads/resistor.jpg', '2023-01-04', 'remanufacture'),
(1414141, 'switch board', 2, 'uploads/switch board.webp', '2023-01-04', ''),
(2312312, 'ignitor', 2, 'uploads/ignitor.jpg', '2023-01-04', ''),
(12412414, 'door bell', 3, 'uploads/door bell.jpg', '2023-01-04', ''),
(141412412, 'electric circuit', 0, 'uploads/electric circuit.jpg', '2023-01-04', 'remanufacture');

-- --------------------------------------------------------

--
-- Table structure for table `testing`
--

CREATE TABLE `testing` (
  `test_id` int(255) NOT NULL,
  `test_performed` varchar(255) NOT NULL,
  `test_performer` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `result` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testing`
--

INSERT INTO `testing` (`test_id`, `test_performed`, `test_performer`, `remarks`, `product_id`, `result`, `product_name`, `product_image`) VALUES
(36, 'applying test probes to its both metal ends', 'adeen', 'Satisfied', 1341415, 'pass', 'fuse ', 'uploads/fuse.jpg '),
(37, 'Using a Contact Timing Test', 'adeen', 'Average', 34123, 'pass', 'switch gear ', 'uploads/switch gear.jpg '),
(38, 'using a voltmeter', 'faiq', 'Very Poor', 1231313, 'pass(By CPRI Testing)', 'capacitor ', 'uploads/capacitor.jpg '),
(39, 'Isolate the resistor from the circuit', 'faiq', 'Average', 1414135, 'Fail(Return For Remanufacture)', 'resistor ', 'uploads/resistor.jpg '),
(40, ' Insulation resistance test', 'faiq', 'Good\r\n', 141412412, 'Fail(Return For Remanufacture)', 'electric circuit ', 'uploads/electric circuit.jpg ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `testing`
--
ALTER TABLE `testing`
  ADD PRIMARY KEY (`test_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `testing`
--
ALTER TABLE `testing`
  MODIFY `test_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
