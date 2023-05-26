-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2023 at 04:36 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `football-api`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_odds`
--

CREATE TABLE `user_odds` (
  `id` int(11) NOT NULL,
  `fixture_id` varchar(150) NOT NULL,
  `user_value` varchar(150) NOT NULL,
  `user_money` varchar(150) NOT NULL,
  `total_money` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_odds`
--

INSERT INTO `user_odds` (`id`, `fixture_id`, `user_value`, `user_money`, `total_money`) VALUES
(3, '868317', '5.25', '2000', '10500'),
(4, '868319', '6.00', '2000', '12000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_odds`
--
ALTER TABLE `user_odds`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_odds`
--
ALTER TABLE `user_odds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
