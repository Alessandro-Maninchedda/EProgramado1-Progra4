-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Alessandro Maninchedda - Progra 4
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2020 at 04:20 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogs`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(5) NOT NULL,
  `owner` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `blog` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `owner`, `description`, `blog`) VALUES
(17, 'Alessandro Maninchedda', 'Blog 1 - Prueba: Uvas', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. '),
(20, 'Jorge Wray', 'Peras', 'Peras Peras Peras Peras Peras Peras'),
(21, 'Francesca Maninchedda', 'Pies de mora', 'Me gustan muchisimo los pies de mora, son increibles'),
(22, 'Jerry Myers', 'Crazy about carrot cake', 'The recipes I found on this website are amazing, 100% recommended.'),
(23, 'Dafne', 'Alessandro', 'El profe debería darle un 100 a Alessandro en el proyecto.'),
(24, 'Nonno', 'Test 6 - five last blogs', 'This is just a test.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
