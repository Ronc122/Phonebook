-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 24, 2018 at 01:43 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Phonebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `username`, `email`, `password`) VALUES
(2, 'cajan', 'cajanr@gmail.com', 'a407a87802cb98535d3ef3ca8d62c634'),
(6, 'ronil', 'ron@gmail.com', 'kage'),
(7, 'john', 'john@gmail.com', 'a407a87802cb98535d3ef3ca8d62c634');

-- --------------------------------------------------------

--
-- Table structure for table `users_account`
--

CREATE TABLE `users_account` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `zip` int(11) DEFAULT NULL,
  `image` varchar(200) NOT NULL,
  `bio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_account`
--

INSERT INTO `users_account` (`id`, `username`, `firstname`, `lastname`, `number`, `age`, `address`, `city`, `zip`, `image`, `bio`) VALUES
(19, 'cajan', 'Ronil', 'Cajan', 2147483647, 21, 'Locc', 'Proper', 2121, 'ustp.jpg', 'ewrwerwredsfds'),
(22, 'cajan', 'ronil', 'lsdlgk', 3213213, 0, ';ldsllkgf;lkg', 'k;ldfsldfskld', 323, 'bday1.jpg', 'heyhey'),
(28, 'cajan', 'ron', 'fdsfdsf', 312321, 0, 'dsadasd3', '21321', 3232, 'bday1.jpg', 'fdsfdsf'),
(30, 'cajan', 'fdfsf', 'dsds', 23213, 21, 'qeqwewq', 'dsadsa', 322, 'thea5.jpg', 'efdfdsfdsf'),
(33, 'cajan', 'dino', 'saur', 2312312, 23, 'fgfdgdf', 'ghgfhfg', 4343, 'bg.jpg', 'dino'),
(34, 'john', 'cajan', 'dsfdsf', 23123, 232, 'dsdsfsd', 'fsdfds', 323, 'bg.jpg', 'hello');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `users_account`
--
ALTER TABLE `users_account`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_account` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users_account`
--
ALTER TABLE `users_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_account`
--
ALTER TABLE `users_account`
  ADD CONSTRAINT `fk_account` FOREIGN KEY (`username`) REFERENCES `account` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
