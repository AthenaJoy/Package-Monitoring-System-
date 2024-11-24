-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2024 at 03:21 AM
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
-- Database: `package_user`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `Fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `confirm_password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Fullname`, `email`, `age`, `password`, `address`, `confirm_password`, `created_at`, `img`) VALUES
(1, 'athena campania', '1234@gmail.com', 0, '1234', '', '', '2024-11-21 08:27:29', ''),
(2, 'athema campania', 'admin@gmail.com', 0, '1234', '', '', '2024-11-21 08:27:29', ''),
(3, 'athema campania', 'admin@gmail.com', 0, '1234', '', '', '2024-11-21 08:27:29', ''),
(4, 'athema campania', 'admin@gmail.com', 0, '1234', '', '', '2024-11-21 08:27:29', ''),
(5, 'athema campania', 'admin@gmail.com', 0, '1234', '', '', '2024-11-21 08:27:29', ''),
(6, 'Ejie Florida', 'ejieflorida123@gmail.com', 0, '123', '', '123', '2024-11-22 06:24:16', '../photo/default.avif'),
(7, 'AthenajoyBarolaCamapnia', 'athena123@gmail.com', 0, '123', '', '123', '2024-11-22 06:25:12', '../photo/default.avif');

-- --------------------------------------------------------

--
-- Table structure for table `costumer`
--

CREATE TABLE `costumer` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `costumer`
--

INSERT INTO `costumer` (`id`, `fullname`, `email`, `password`, `confirm_password`, `created_at`, `img`) VALUES
(9, 'ejie', '12345@gmail.com', '0987', '0987', '2024-11-09 11:48:29', ''),
(10, 'ejie', '1234@gmail.com', 'ejie', 'ejie', '2024-11-09 11:48:48', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `costumer`
--
ALTER TABLE `costumer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `costumer`
--
ALTER TABLE `costumer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
