-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2023 at 09:47 PM
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
  `serial` int(11) NOT NULL,
  `flat_id` varchar(255) NOT NULL,
  `flat_size` int(255) NOT NULL,
  `rent` int(255) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(3, 'Shariful Haque', '51/28 Shahibag , Savar , Dhaka ,Bangladesh', '+8801685752087', 2147483647, 'Night', 'Active', '1697147137_6db257b28f961658a0f9.png');

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
(6, 'Shariful Haque', '51/28 Shahibag , Savar , Dhaka ,Bangladesh', '01685752087', 'B6', 2147483647, '1697309868_249d98001c4c09dd24a2.png'),
(7, 'Shariful Haque rfhjs', 'Bangladesh', 'sharif.shuvo44200@gmail.com', '123456', 2147483647, '1697310705_89d441b31edbff370064.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `flat`
--
ALTER TABLE `flat`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `gks`
--
ALTER TABLE `gks`
  ADD PRIMARY KEY (`gk_id`);

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
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gks`
--
ALTER TABLE `gks`
  MODIFY `gk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
