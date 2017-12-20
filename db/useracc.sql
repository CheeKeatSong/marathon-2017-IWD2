-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2017 at 03:04 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marathon_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `useracc`
--

CREATE TABLE `useracc` (
  `uid` int(10) NOT NULL,
  `password` varchar(32) NOT NULL,
  `fname` varchar(75) NOT NULL,
  `lname` varchar(75) NOT NULL,
  `idno` varchar(24) NOT NULL,
  `age` int(4) NOT NULL,
  `email` varchar(64) NOT NULL,
  `finding` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useracc`
--

INSERT INTO `useracc` (`uid`, `password`, `fname`, `lname`, `idno`, `age`, `email`, `finding`) VALUES
(1, '202cb962ac59075b964b07152d234b70', 'Ru', 'Bitch', '943284773829', 22, 'ru@gmail.com', 'Friend'),
(3, '202cb962ac59075b964b07152d234b70', 'Wong', 'Reuben', '910293384758', 26, 'wong@gmail.com', 'Online Artic'),
(4, '202cb962ac59075b964b07152d234b70', 'Calvin', 'Bitch', '943475849372', 23, 'calvin@gmail.com', 'Advertisemen'),
(5, '202cb962ac59075b964b07152d234b70', 'Ru', 'Lancau', '2938734329', 24, 'ru@rocketmail.com', 'Friend'),
(7, '202cb962ac59075b964b07152d234b70', 'muhammad', 'ali', '12351234125', 25, 'testing@gmail.com', 'Advertisemen'),
(8, '202cb962ac59075b964b07152d234b70', 'user2', 'user2', '123123123123', 13, 'user2@yahoo.com', 'Friend'),
(18, '202cb962ac59075b964b07152d234b70', 'user6', 'user6', '910283765748', 28, '123@gmail.com', 'Friend'),
(19, '202cb962ac59075b964b07152d234b70', 'Fariz', '-', '123123123123', 32, 'fariz@yahoo.com', 'Friend');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `useracc`
--
ALTER TABLE `useracc`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `useracc`
--
ALTER TABLE `useracc`
  MODIFY `uid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
