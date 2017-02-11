-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2017 at 08:18 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carddb`
--

-- --------------------------------------------------------

--
-- Table structure for table `yugioh`
--

CREATE TABLE `yugioh` (
  `id` int(11) NOT NULL,
  `amt` int(11) NOT NULL DEFAULT '1',
  `cardname` text NOT NULL,
  `cardnumber` text NOT NULL,
  `rareity` text NOT NULL,
  `condition` int(11) NOT NULL DEFAULT '1',
  `edition` int(11) NOT NULL,
  `buycost` float NOT NULL DEFAULT '0',
  `mysellprice` float NOT NULL DEFAULT '0',
  `notes` text NOT NULL,
  `forsell` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yugioh`
--

INSERT INTO `yugioh` (`id`, `amt`, `cardname`, `cardnumber`, `rareity`, `condition`, `edition`, `buycost`, `mysellprice`, `notes`, `forsell`) VALUES
(1, 1, 'Super-Ancient Dinobeast', 'LODT-EN088', 'Ultra', 1, 2, 0, 6.49, 'None', 1),
(2, 1, 'Feather Shot', 'EEN-EN042', 'Ultimate Rare', 1, 2, 0, 0.5, 'none', 1),
(3, 1, 'Nitro Warrior', 'DP08-EN013', 'Rare', 1, 1, 0, 0.5, 'none', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `yugioh`
--
ALTER TABLE `yugioh`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `yugioh`
--
ALTER TABLE `yugioh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
