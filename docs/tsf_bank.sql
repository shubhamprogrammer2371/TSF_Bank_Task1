-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2021 at 08:31 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tsf_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`sno`, `sender`, `receiver`, `balance`, `datetime`) VALUES
(1, 'Maari', 'Shubham', 10000, '2021-11-03 22:48:52'),
(2, 'Nikhil', 'Shubham', 1000, '2021-11-03 22:50:56'),
(3, 'Ram', 'Shubham', 10000, '2021-11-04 22:21:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` int(10) NOT NULL,
  `balance` int(8) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `bloodgroup` varchar(5) NOT NULL,
  `maritialstatus` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `contact`, `balance`, `occupation`, `bloodgroup`, `maritalstatus`, `country`, `state`, `city`) VALUES
(1, 'Shubham', 'shubham@gmail.com', 1234567890, 71000, 'Software Designer', 'A+', 'Unmarried', 'India', 'Maharashtra', 'Mumbai'),
(2, 'Maari', 'maari@gmail.com', 2147483647, 20000, 'Game Developer', 'AB+', 'Married', 'India', 'Maharashtra', 'Pune'),
(3, 'Kevin', 'kevin@gmail.com', 2147483647, 100000, 'Web Developer', 'O+', 'Married', 'India', 'Maharashtra', 'Mumbai'),
(4, 'Mihir', 'Mihir@gmail.com', 2147483647, 10000, 'Graphics Designer', 'O-', 'Unmarried', 'India', 'Maharashtra', 'Bangalore'),
(5, 'Nimesh', 'Nimesh@gmail.com', 2147483647, 500000, 'Data Analyst', 'A+', 'Married', 'India', 'Maharashtra', 'Bangalore'),
(6, 'Ram', 'Ram@gmail.com', 2147483647, 40000, 'UI/UX Designer', 'B+', 'Married', 'India', 'Maharashtra', 'Mumbai'),
(7, 'Raju', 'Raju@gmail.com', 2147483647, 90000, 'Full Stack Java Developer', 'AB+', 'Unmarried', 'India', 'Maharashtra', 'Bangalore'),
(8, 'Nikhil', 'Nikhil@gmail.com', 2147483647, 199000, 'Body Builder', 'A-', 'Married', 'India', 'Maharashtra', 'Pune'),
(9, 'Manoj', 'Manoj@gmail.com', 2147483647, 2000, 'Bank Manager', 'A-', 'Unmarried', 'India', 'Maharashtra', 'Bangalore'),
(10, 'Sarthak', 'Sarthak@gmail.com', 2147483647, 200000, 'Pharmacist', 'A+', 'Unmarried', 'India', 'Maharashtra', 'Mumbai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
