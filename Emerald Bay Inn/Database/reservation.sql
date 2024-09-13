-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2023 at 08:41 AM
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
-- Database: `my_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `contact_no` int(10) NOT NULL,
  `address` varchar(30) NOT NULL,
  `arrival` date NOT NULL,
  `departure` date NOT NULL,
  `children` int(10) NOT NULL,
  `room` int(10) NOT NULL,
  `message` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `name`, `contact_no`, `address`, `arrival`, `departure`, `children`, `room`, `message`) VALUES
(3, 'Geesara perera', 773698521, 'No 14, ward place, colombo 07', '2023-03-24', '2023-03-31', 2, 2, 'N/A'),
(4, 'Geesara perera', 763569852, 'No 14, ward place, colombo 07', '2023-05-24', '2023-03-31', 0, 1, 'Family Room'),
(5, 'kalana ranasinghe', 756982310, 'No 14, ward place, colombo 07', '2023-03-19', '2023-03-20', 2, 1, 'N/A'),
(7, 'kalana ranasinghe', 763569852, 'No 14, ward place, colombo 07', '2023-03-23', '2023-03-24', 1, 1, 'Family Room'),
(8, 'tharuka', 763569852, 'No 14, ward place, colombo 07', '2023-03-24', '2023-03-31', 2, 1, 'Family Room'),
(9, 'kalana', 763569852, 'No 14, ward place, colombo 07', '2023-03-23', '2023-03-31', 2, 2, 'Family Room'),
(10, 'kalana', 763569852, 'No 14, ward place, colombo 07', '2023-03-23', '2023-03-31', 2, 2, 'Family Room'),
(11, 'dilan', 763569852, 'No 14, ward place, colombo 07', '2023-03-23', '2023-03-31', 4, 2, 'Family Room'),
(12, 'chathura', 763569852, 'No 14, ward place, colombo 07', '2023-03-24', '2023-03-31', 1, 2, 'Family Room');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
