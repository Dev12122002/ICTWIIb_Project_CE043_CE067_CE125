-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2021 at 07:41 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `qualification` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `username`, `password`, `email`, `qualification`) VALUES
(3, 'Giri Anish', '@EG1', 'asAS23@#', 'girianishpramodbhai@gmail.com', 'Computer Engineer'),
(4, 'Dev Oza', '@EB1', 'asAS23@#', 'girianishpramodbhai@gmail.com', 'Computer Engineer'),
(5, 'Pratham Tailor', '@EC1', 'asAS23@#', 'girianishpramodbhai@gmail.com', 'Computer Engineer'),
(6, 'Giri Anish', '@EF1', 'asAS23@#', 'girianishpramodbhai@gmail.com', 'Computer Engineer'),
(7, 'Dev Oza', '@EL1', 'asAS23@#', 'girianishpramodbhai@gmail.com', 'LLB'),
(8, 'Pratham Tailor', '@ED1', 'asAS23@#', 'girianishpramodbhai@gmail.com', 'Computer Engineer'),
(9, 'Giri Anish', '@EO1', 'asAS23@#', 'girianishpramodbhai@gmail.com', 'Computer Engineer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
