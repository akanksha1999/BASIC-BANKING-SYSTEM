-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2021 at 02:13 PM
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
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `SENDER_ID` int(25) NOT NULL,
  `SENDER_NAME` varchar(50) NOT NULL,
  `RECEIVER_ID` int(25) NOT NULL,
  `RECEIVER_NAME` varchar(50) NOT NULL,
  `AMOUNT` double NOT NULL DEFAULT 0,
  `TRANSACTION_TIME` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`SENDER_ID`, `SENDER_NAME`, `RECEIVER_ID`, `RECEIVER_NAME`, `AMOUNT`, `TRANSACTION_TIME`) VALUES
(1, 'Akanksha Chouhan', 2, 'Aishwarya Singh', 400, '2021-04-18 19:58:10'),
(1, 'Akanksha Chouhan', 2, 'Aishwarya Singh', 100, '2021-04-19 08:49:03'),
(1, 'Akanksha Chouhan', 2, 'Aishwarya Singh', 100, '2021-04-19 10:21:46'),
(1, 'Akanksha Chouhan', 2, 'Aishwarya Singh', 100, '2021-04-19 10:24:23'),
(1, 'Akanksha Chouhan', 2, 'Aishwarya Singh', 100, '2021-04-19 10:24:38'),
(1, 'Akanksha Chouhan', 2, 'Aishwarya Singh', 100, '2021-04-19 10:43:04'),
(1, 'Akanksha Chouhan', 2, 'Aishwarya Singh', 100, '2021-04-19 11:34:42'),
(1, 'Akanksha Chouhan', 2, 'Aishwarya Singh', 100, '2021-04-19 11:35:22'),
(1, 'Akanksha Chouhan', 2, 'Aishwarya Singh', 100, '2021-04-19 11:35:46'),
(1, 'Akanksha Chouhan', 2, 'Aishwarya Singh', 100, '2021-04-19 11:35:55'),
(1, 'Akanksha Chouhan', 2, 'Aishwarya Singh', 100, '2021-04-19 11:40:50'),
(1, 'Akanksha Chouhan', 2, 'Aishwarya Singh', 100, '2021-04-19 11:40:56'),
(1, 'Akanksha Chouhan', 2, 'Aishwarya Singh', 100, '2021-04-19 11:41:34'),
(1, 'Akanksha Chouhan', 2, 'Aishwarya Singh', 800, '2021-04-19 11:42:37'),
(1, 'Akanksha Chouhan', 2, 'Aishwarya Singh', 90, '2021-04-19 12:01:27'),
(1, 'Akanksha Chouhan', 2, 'Aishwarya Singh', 90, '2021-04-19 12:03:07'),
(1, 'Akanksha Chouhan', 2, 'Aishwarya Singh', 90, '2021-04-19 12:03:13'),
(1, 'Akanksha Chouhan', 2, 'Aishwarya Singh', 30, '2021-04-19 12:05:09'),
(1, 'Akanksha Chouhan', 2, 'Aishwarya Singh', 100, '2021-04-19 13:10:26'),
(1, 'Akanksha Chouhan', 2, 'Aishwarya Singh', 1000, '2021-04-19 13:11:19'),
(1, 'Akanksha Chouhan', 2, 'Aishwarya Singh', 600, '2021-04-19 15:31:59'),
(1, 'Akanksha Chouhan', 2, 'Aishwarya Singh', 600, '2021-04-19 15:32:48'),
(1, 'Akanksha Chouhan', 2, 'Aishwarya Singh', 100, '2021-04-19 17:29:02'),
(1, 'Akanksha Chouhan', 2, 'Aishwarya Singh', 100, '2021-04-19 17:29:02'),
(1, 'Akanksha Chouhan', 2, 'Aishwarya Singh', 200, '2021-04-20 07:49:11'),
(1, 'Akanksha Chouhan', 2, 'Aishwarya Singh', 1000, '2021-04-20 07:56:05'),
(1, 'Akanksha Chouhan', 2, 'Aishwarya Singh', 1000, '2021-04-20 07:59:16'),
(2, 'Aishwarya Singh', 1, 'Akanksha Chouhan', 3000, '2021-04-20 09:05:01');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
