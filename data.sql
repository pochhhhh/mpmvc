-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 18, 2019 at 02:11 AM
-- Server version: 5.6.35
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `MPMVC`
--

-- --------------------------------------------------------

--
-- Table structure for table `Notes`
--

CREATE TABLE `Notes` (
  `id` int(11) NOT NULL,
  `note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Notes`
--

INSERT INTO `Notes` (`id`, `note`) VALUES
(27, 'Orange is both a fruit and a colour!'),
(28, 'Web Development is fun'),
(29, 'I like ice cream'),
(30, 'PHP is great!'),
(31, 'Laracasts is awesome!'),
(32, 'Coding is good for the brain'),
(33, 'Cats and dogs'),
(34, 'Go to the store'),
(35, 'This weekend is Easter'),
(36, 'Blue sky'),
(37, 'Coffee for the win!'),
(38, 'Yay!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Notes`
--
ALTER TABLE `Notes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Notes`
--
ALTER TABLE `Notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;