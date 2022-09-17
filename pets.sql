-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2022 at 08:14 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pets`
--

-- --------------------------------------------------------

--
-- Table structure for table `for_review`
--

CREATE TABLE `for_review` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `pet_id` int(11) NOT NULL,
  `status` varchar(10) DEFAULT 'unchecked'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `for_review`
--

INSERT INTO `for_review` (`id`, `fname`, `lname`, `email`, `phone`, `details`, `pet_id`, `status`) VALUES
(0, 'Md', 'Robiuddin', 'mrrobi040@gmail.com', '01319430780', 'Really Cat Friendly Home has 5 cats of our own', 2, 'Qualified'),
(0, 'Md', 'Robiuddin', 'mrrobi040@gmail.com', '01319430780', 'Nice PEt environment', 5, 'Qualified');

-- --------------------------------------------------------

--
-- Table structure for table `pet_info`
--

CREATE TABLE `pet_info` (
  `id` int(11) NOT NULL,
  `pet_name` varchar(30) DEFAULT NULL,
  `pet_age` varchar(10) DEFAULT NULL,
  `pet_photo` varchar(300) DEFAULT NULL,
  `pet_gender` varchar(10) DEFAULT NULL,
  `pet_type` varchar(20) DEFAULT NULL,
  `pet_owner` varchar(30) DEFAULT NULL,
  `contact_no` varchar(15) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `medical_condition` varchar(300) DEFAULT NULL,
  `adoption_status` varchar(20) DEFAULT 'unadopted'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pet_info`
--

INSERT INTO `pet_info` (`id`, `pet_name`, `pet_age`, `pet_photo`, `pet_gender`, `pet_type`, `pet_owner`, `contact_no`, `address`, `medical_condition`, `adoption_status`) VALUES
(1, 'Meow', '3 years', NULL, 'Male', 'Cat', 'Joya', '01500000000', '   Aftabnagar, Rampura   ', 'Stray Cat not vaccinated. fluffy tail', 'unadopted'),
(2, 'Minu', '3 Year', NULL, 'Female', 'Cat', 'Joya', '01500000000', 'Aftabnagar, Rampura', 'Stray Cat not vaccinated.', 'adopted'),
(3, 'Mimo', '2 Year', NULL, 'Female', 'Cat', 'Joya', '01500000000', 'Aftabnagar, Rampura', 'Stray Cat not vaccinated.', 'unadopted'),
(4, 'Pickachu', '5 year', NULL, 'Male', 'Cat', 'Alif', '01500000000', 'Uttor Madani Nagar, Narayanganj Sadar', 'Stray Cat', 'unadopted'),
(5, 'Pickachu_jr', '3 years', NULL, 'Female', 'Dog', 'Alif', '01500000000', '  Uttor Madani Nagar, Narayanganj Sadar  ', 'Stray Cat', 'adopted');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `role` varchar(100) DEFAULT 'inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, 'Moriomer Nesa', 'moriom@pets.com', 'moriom', 'Admin'),
(2, 'Robiuddin Robi', 'mrrobi040@hotmail.com', 'wJtjir9C8GA', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `for_review`
--
ALTER TABLE `for_review`
  ADD PRIMARY KEY (`email`,`pet_id`) USING BTREE,
  ADD KEY `fk1` (`pet_id`);

--
-- Indexes for table `pet_info`
--
ALTER TABLE `pet_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pet_info`
--
ALTER TABLE `pet_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `for_review`
--
ALTER TABLE `for_review`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`pet_id`) REFERENCES `pet_info` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
