-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2021 at 02:12 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schema1`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `ID` int(25) NOT NULL,
  `NAME` varchar(50) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `CURRENT_BALANCE` double DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`ID`, `NAME`, `EMAIL`, `CURRENT_BALANCE`) VALUES
(1, 'Akanksha Chouhan', 'akanksha.chouhan1999@gmail.com', 5000),
(2, 'Aishwarya Singh', 'aish26@gmail.com', 67180),
(3, 'Akshay Kabra', 'ak_27@gmail.com', 57000),
(4, 'Ashi Sonel', 'ashi19@gmail.com', 72000),
(5, 'Abhishek Choubey', 'venom_brole@gmail.com', 81320),
(6, 'Abhishek Pandey', 'ap1200@gmail.com', 90000),
(7, 'Samisha Chourey', 'sam17@gmail.com', 35000),
(8, 'Sakari Choube', 'sakari90@gmail.com', 44500),
(9, 'Urvashi Rana', 'uraaaa@gmail.com', 55700),
(10, 'Kshama Gupta', 'kshama12@gmail.com', 1700);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
