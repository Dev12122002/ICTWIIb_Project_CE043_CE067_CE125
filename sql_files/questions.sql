-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2021 at 07:42 PM
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
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `answer_by` varchar(200) NOT NULL,
  `topic` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `username`, `question`, `answer`, `answer_by`, `topic`) VALUES
(4, 'asdf', 'How to buy mobile?', 'syfdsgouh.                          5qhgq                                                 5qhbibqgabg5', '@EG1', 'gadget'),
(5, 'asdfvb', 'how to buy laptop?', '', '', 'gadget'),
(7, 'shivaay_27', 'How to restart my laptop?', 'Depends on your use', '@EG1', 'gadget'),
(14, 'sfgxgf', 'Why my redmi phone get heated?', 'Due to less late update and more use', '@EG234', 'gadget'),
(19, '_shivaay_27', 'How to start a billion dollar business', '', '', 'business'),
(20, 'badboy', 'How to be a good son?', '', '', 'family'),
(21, 'anprde', 'Please help me', '', '', 'other'),
(22, 'anprde', 'Why phone get heated?', 'Due to less late update and more use', '@EG1', 'gadget'),
(25, 'anprde', 'how to buy a laptop?', 'Depends on your use', '@EG1', 'gadget'),
(26, 'anprde', 'How to play volleyball?', '', '', 'other');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
