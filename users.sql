-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2025 at 01:44 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin1`
--

CREATE TABLE `admin1` (
  `id` int(50) NOT NULL,
  `user` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `role` varchar(500) NOT NULL,
  `contact_number` varchar(15) DEFAULT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin1`
--

INSERT INTO `admin1` (`id`, `user`, `email`, `role`, `contact_number`, `password`) VALUES
(21, 'admin', 'admin@gmail.com', '', '1234567890', '$2y$10$/PHBt495U6bEJo8B9CvekO3RTcxk/yQjDhln96Z62xikJiV5/d8OC'),
(22, 'Nimrod', 'nimrod@gmail.com', '', '09158541683', '$2y$10$7M4EumNn.KkbknFh1qFLFePk6PeyYa5qHoghYqsAQSeI9ACERlCvu'),
(23, 'lledo', 'lledo@gmail.com', '', '123456789', '$2y$10$tBt4zTy7BnfI/ZRhIxbFQuGs5b1nORz7XQXZJOKtOAPPazeGhhVei'),
(25, 'sto.tomas', 'sto.tomas@gmail.com', '', '09158541683', '$2y$10$JZjeXMj1pM7ooOFtHaPP8e7sAyEP7aTVLabowRCQMOTvn3R8s1LMC'),
(26, 'yuan', 'yuhan@gmail.com', '', '19284658339', '$2y$10$z85l1iD5sawLXb4KnN5XVeKCxQUlEdbwMi6kOU/3TxBczrsTPq7gu'),
(28, 'totoy', 'msavvy7@gmail.com', '', '1234567890', '$2y$10$ynnPCep5pAVj.dXKZDqOVO/cJjjAVB25DUbffv6rnRFPa6bryoUZm');

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `image_path` varchar(500) NOT NULL,
  `uploaded_at` datetime(6) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `user_id`, `image_path`, `uploaded_at`, `location`) VALUES
(66, 22, 'uploads/photo_67b3013a3fb6b.jpg\r\n', '0000-00-00 00:00:00.000000', 'In'),
(67, 22, 'uploads/photo_67b3019dcbc51.jpg', '0000-00-00 00:00:00.000000', 'In'),
(68, 22, 'uploads/photo_67b302fc73e7d.jpg', '0000-00-00 00:00:00.000000', 'Out'),
(69, 22, 'uploads/photo_67b30312e2153.jpg', '0000-00-00 00:00:00.000000', 'Out');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin1`
--
ALTER TABLE `admin1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user` (`user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin1`
--
ALTER TABLE `admin1`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
