-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2023 at 08:43 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ci_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `flat`
--

CREATE TABLE `flat` (
  `flat_id` int(11) NOT NULL,
  `flat_name` varchar(255) NOT NULL,
  `flat_size` int(255) NOT NULL,
  `rent` int(255) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flat`
--

INSERT INTO `flat` (`flat_id`, `flat_name`, `flat_size`, `rent`, `status`) VALUES
(1, 'A1', 700, 9000, 'Unoccupied'),
(2, 'A1', 700, 9000, 'Unoccupied');

-- --------------------------------------------------------

--
-- Table structure for table `gks`
--

CREATE TABLE `gks` (
  `gk_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `nid` int(20) NOT NULL,
  `shift` varchar(40) NOT NULL,
  `status` varchar(255) NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gks`
--

INSERT INTO `gks` (`gk_id`, `name`, `address`, `phone`, `nid`, `shift`, `status`, `image`) VALUES
(1, 'Shariful Haque', '51/28 Shahibag , Savar , Dhaka ,Bangladesh', '+8801685752087', 0, 'sdfsd', '', '1697139893_d7300460cbf770d308fe.png'),
(2, 'd', 'd', 'd', 0, 'Night', '', '1697147021_aa40fdb2aca75dd48aa1.png'),
(3, 'Shariful Haque', '51/28 Shahibag , Savar , Dhaka ,Bangladesh', '+8801685752087', 2147483647, 'Night', 'Active', '1697147137_6db257b28f961658a0f9.png'),
(4, 's', 'sdfsdfdf', '0165852', 2247721, 'Night', 'active', '1697514355_a2e014d7c849e2916598.jpg'),
(5, 'Shariful Haque', '51/28 Shahibag , Savar , Dhaka ,Bangladesh', '+8801685752087', 2147483647, 'Day', 'Active', '1697652307_d3357725cab5fe02c1f6.webp');

-- --------------------------------------------------------

--
-- Table structure for table `pays`
--

CREATE TABLE `pays` (
  `p_id` int(11) NOT NULL,
  `tanent_name` varchar(255) NOT NULL,
  `flat` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `rent` varchar(11) NOT NULL,
  `cost` varchar(11) NOT NULL,
  `total` varchar(11) NOT NULL,
  `paid` varchar(11) NOT NULL,
  `due` varchar(11) NOT NULL,
  `paymeth` varchar(11) NOT NULL,
  `tx_id` varchar(50) NOT NULL,
  `invoice` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pays`
--

INSERT INTO `pays` (`p_id`, `tanent_name`, `flat`, `month`, `rent`, `cost`, `total`, `paid`, `due`, `paymeth`, `tx_id`, `invoice`) VALUES
(1, 'shuvo', 'A4', 'January', '100000', '2000', '120000', '120000', '0.0', 'cash', 'cash', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nid` int(20) NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `username`, `email`, `password`, `nid`, `image`) VALUES
(7, 'Shariful Haque rfhjs', 'Bangladesh', 'sharif.shuvo44200@gmail.com', '123456', 2147483647, '1697310705_89d441b31edbff370064.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `flat`
--
ALTER TABLE `flat`
  ADD PRIMARY KEY (`flat_id`);

--
-- Indexes for table `gks`
--
ALTER TABLE `gks`
  ADD PRIMARY KEY (`gk_id`);

--
-- Indexes for table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `flat`
--
ALTER TABLE `flat`
  MODIFY `flat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gks`
--
ALTER TABLE `gks`
  MODIFY `gk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pays`
--
ALTER TABLE `pays`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
