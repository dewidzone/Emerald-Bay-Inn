-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2023 at 08:42 AM
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `role_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `name`, `email`, `mobile`, `username`, `password`, `role_type`) VALUES
(11, 'kalana ranasinghe', 'kalana@gmail.com', 756982310, 'kalana', '12345', ''),
(12, 'admin1', 'admin@gmail.com', 112233456, 'admin', '12345', ''),
(14, 'Geesara perera', 'geesara@gmail.com', 773698521, 'geesara', '12345', ''),
(15, 'tharuka', 'tharuka@gmail.com', 765612375, 'tharuka', '12345', ''),
(21, 'dhananjaya', 'dhananjaya@gmail.com', 773698521, 'dhananjaya', '12345', 'admin'),
(22, '', 'samarakoon@gmail.com', 773698521, 'samarakoon', '12345', 'staff'),
(24, '', 'kamila@gmail.com', 773698521, 'kamila', '12345', 'admin'),
(25, 'dilan akash', 'dilan@gmail.com', 112233445, 'dilan', '12345', ''),
(27, 'chathura', 'chathura@gmail.com', 773698521, 'chathura', '12345', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
