-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2023 at 11:38 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `speedypark`
--

-- --------------------------------------------------------

--
-- Table structure for table `apartment_rentals`
--

CREATE TABLE `apartment_rentals` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `start_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `end_date` date NOT NULL,
  `apartment_address` varchar(255) NOT NULL,
  `capacity` int(6) NOT NULL,
  `vehicle_number` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `apartment_rentals`
--

INSERT INTO `apartment_rentals` (`id`, `name`, `created_at`, `start_date`, `end_date`, `apartment_address`, `capacity`, `vehicle_number`, `location`) VALUES
(48, 'Stanley Gaitonde', '2023-04-09 16:01:54', '0000-00-00 00:00:00', '2023-04-09', '706, Block B , Tirupati Complex', 3, 'MP 06 5674, MP 06 5678, MP 06 4567', 'Harda'),
(49, 'Anushka Dubey', '2023-04-10 06:27:23', '0000-00-00 00:00:00', '2023-04-10', 'asdfghjkl', 1, 'mp 08 6789 ', 'Indore');

-- --------------------------------------------------------

--
-- Table structure for table `registereduser`
--

CREATE TABLE `registereduser` (
  `id` int(255) NOT NULL,
  `username` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `verification_type` varchar(100) NOT NULL,
  `verification_proof` blob NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registereduser`
--

INSERT INTO `registereduser` (`id`, `username`, `name`, `email`, `phone`, `address`, `verification_type`, `verification_proof`, `password`) VALUES
(86, 'abhi123', 'Anushka Dubey', 'anushkaaddubeyy@gmail.com', '0799917277', 'jkl', 'driver_license', 0x696d616765732f, 'nm,'),
(87, 'panda', 'panda', 'panda@gmail.com', '787878787', 'asdfghjkl;', 'national_id', 0x696d616765732f616e757368686b612064756265795443532e706466, '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apartment_rentals`
--
ALTER TABLE `apartment_rentals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `start_date` (`start_date`);

--
-- Indexes for table `registereduser`
--
ALTER TABLE `registereduser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apartment_rentals`
--
ALTER TABLE `apartment_rentals`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `registereduser`
--
ALTER TABLE `registereduser`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
