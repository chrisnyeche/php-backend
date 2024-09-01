-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2024 at 10:00 PM
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
-- Database: `my_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment_text` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `user_id`, `comment_text`, `username`, `created_at`) VALUES
(4, 2, 'I am commenting for the first time', 'john_doe', '2024-08-15 13:15:49'),
(5, 2, 'I am commenting for the second time', 'john_doe', '2024-08-15 13:19:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`) VALUES
(2, 'john_doe', 'john@example.com', 'password123', '2024-08-10 04:57:41'),
(4, 'mike_brown', 'mike@example.com', '$2y$10$eRR34ib23cJJD3aB0vXCqu6XcdotZfTfoMyFyZf0fNuNZBb3BuiXa', '2024-08-10 04:57:41'),
(5, 'emily_jones', 'emily@example.com', 'emily654', '2024-08-10 04:57:41'),
(6, 'sarah_lee', 'sarah@example.com', 'sarah321', '2024-08-10 04:57:41'),
(7, 'royalhouse', 'royalhouse@hotmail.com', '$2y$10$f2CaDeySzLwIVa07BFHsr.xqc5DAN5S.mu5HNgxcRI9dIxUYztbqu', '2024-08-11 18:17:44'),
(8, 'testbeta', 'testbeta@gmail.com', '$2y$10$QkmuPRHNL1VQM4PbHszLD./56sUANO316TNStRaxip8mVL9B73C72', '2024-08-11 18:49:52'),
(9, 'favour.nyeche', 'nyeche.favour@cinfores.com', '$2y$10$ejrVC4X2FGW6KX2EVHVwJeyL7yN9t2iD9F1jvuHtSAmu4Onve3bDC', '2024-08-26 20:14:57'),
(19, 'tubo-ibibo.west', 'mails4sommy@yahoo.com', '$2y$10$RZL58uf7UoofRZ5ieIVe6.pRkcOgHY80ggbtcdu8RfBa4H5IM7Sye', '2024-08-26 20:23:23'),
(40, 'royalh', 'jane_smith@gmail.com', '$2y$10$JDI8jdTNkFqE4qQO762iKOH9KIKlRcVHcKxnb0E9fvICwZ837x0eK', '2024-08-29 15:31:09'),
(44, 'royalhike12', 'janee_smith@gmail.com', '$2y$10$UD/HDD.jEjHwyQEmv2A10eW9uV6fVEXOXqGaeQF6h27sVK7dxnkd.', '2024-08-29 15:40:03'),
(45, 'royalhike1234', 'roni_smith@gmail.com', '$2y$10$ee34giBnytLpKZRi2VIcDeRZe33pF9URc3X9HNsUw5PqoA2zCTKAC', '2024-08-29 15:45:14'),
(46, 'royalhouse5555', 'kingnyeche100@gmail.com', '$2y$10$99OuDWulGvNIjL5472irKuFun4gmsIL/pCb2.qKcYu4KqZwTV3G6i', '2024-08-29 15:49:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
