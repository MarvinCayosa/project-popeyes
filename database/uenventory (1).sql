-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2024 at 09:23 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uenventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `name` int(64) NOT NULL,
  `email` int(64) NOT NULL,
  `password` int(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `email`, `password`) VALUES
(2147483647, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE `inbox` (
  `student_id` bigint(11) NOT NULL,
  `student_name` varchar(64) NOT NULL,
  `student_status` mediumtext NOT NULL,
  `request_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`student_id`, `student_name`, `student_status`, `request_date`) VALUES
(20190126556, 'Clarizza M. Reyes', 'Approved', '2002-05-30'),
(20202020201, 'Errol John Antonio', 'Approved', '2022-12-11'),
(20202020202, 'Errol John Antonio', 'Rejected', '2022-12-11'),
(20202020203, 'Errol John Antonio', 'Pending', '2022-12-11'),
(20220125555, 'Sean Vincent Vien Viñas', 'Rejected', '2022-12-11'),
(20220126555, 'Sean Vincent Vien Viñas', 'Approved', '2022-12-11'),
(20220126556, 'Sean Vincent Vien Viñas', 'Pending', '2022-12-11');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(4) NOT NULL,
  `item_name` varchar(64) NOT NULL,
  `total_quantity` int(3) NOT NULL,
  `available_quantity` int(3) NOT NULL,
  `date_added` date NOT NULL,
  `consumability` varchar(64) NOT NULL,
  `item_description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item_name`, `total_quantity`, `available_quantity`, `date_added`, `consumability`, `item_description`) VALUES
(1, 'Arduino', 75, 75, '2024-12-11', 'yes', 'Microcontroller'),
(2, 'ESP32', 75, 75, '0000-00-00', 'yes', 'Microcontroller'),
(3, 'Breadboard', 75, 75, '0000-00-00', 'yes', 'Breadboard'),
(4, 'Breadboard', 75, 75, '0000-00-00', '', 'Breadboard'),
(5, 'Breadboard', 75, 75, '0000-00-00', '', 'Breadboard'),
(6, 'Arduino', 14, 14, '2024-11-26', 'consumable', 'MicroController'),
(7, 'Ultrasonic Sensor', 2, 2, '2024-11-26', 'non-consumable', 'Sensors Distance using Sound Waves'),
(8, 'Flame Sensor', 10, 10, '2024-11-26', 'consumable', 'Senses Flames'),
(9, 'ESP32', 3, 3, '2024-11-26', 'consumable', 'klkl');

-- --------------------------------------------------------

--
-- Table structure for table `qw`
--

CREATE TABLE `qw` (
  `qw` int(11) NOT NULL,
  `qwqw` int(11) NOT NULL,
  `qwqwq` int(11) NOT NULL,
  `qwqwwq` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `password`) VALUES
(20220126556, 'Sean Vincent Vien Viñas', 'vinas.seanvincentvien@ue.edu.ph', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
