-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 15, 2019 at 02:33 PM
-- Server version: 5.7.25-0ubuntu0.16.04.2
-- PHP Version: 7.0.33-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hkp`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_form`
--

CREATE TABLE `booking_form` (
  `id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `mobile` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `address` varchar(100) NOT NULL,
  `zip_code` varchar(10) NOT NULL,
  `city` varchar(35) NOT NULL,
  `state` varchar(35) NOT NULL,
  `country` varchar(35) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `adult_guest` int(3) NOT NULL,
  `child_guest` int(3) NOT NULL,
  `no_of_rooms` int(3) NOT NULL,
  `type_of_room` varchar(15) NOT NULL,
  `any_requirements` varchar(300) DEFAULT NULL,
  `user_agent` varchar(50) DEFAULT NULL,
  `platform` varchar(50) DEFAULT NULL,
  `ip_address` varchar(25) DEFAULT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(9) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` text NOT NULL,
  `user_agent` varchar(50) DEFAULT NULL,
  `platform` varchar(50) DEFAULT NULL,
  `ip_address` varchar(25) DEFAULT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Holds data filled through website contact form';

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `name`, `mobile`, `email`, `message`, `user_agent`, `platform`, `ip_address`, `created`) VALUES
(1, 'Mohammed Bhoraniya', '9594158901', 'mdbhoraniya@gmail.com', 'test', 'Firefox 64.0', 'Linux', '127.0.0.1', '2019-02-17 21:56:36'),
(2, 'Mohammed Bhoraniya', '9594158901', 'mdbhoraniya@gmail.com', 'test', 'Firefox 64.0', 'Linux', '127.0.0.1', '2019-02-17 21:59:56'),
(3, 'Mohammed Bhoraniya', '9594158901', 'mdbhoraniya@gmail.com', 'ttt', 'Firefox 64.0', 'Linux', '127.0.0.1', '2019-02-18 21:25:49'),
(4, 'Mohammed Bhoraniya', '9594158901', 'mdbhoraniya@gmail.com', 'ttt', 'Firefox 64.0', 'Linux', '127.0.0.1', '2019-02-18 21:41:25'),
(5, 'Mohammed Bhoraniya', '9594158901', 'mdbhoraniya@gmail.com', 'ttt', 'Firefox 64.0', 'Linux', '127.0.0.1', '2019-02-18 21:41:31'),
(6, 'Mohammed Bhoraniya', '9594158901', 'mdbhoraniya@gmail.com', 'ttt', 'Firefox 64.0', 'Linux', '127.0.0.1', '2019-02-18 21:41:31'),
(7, 'Mohammed Bhoraniya', '9594158901', 'mdbhoraniya@gmail.com', 'ttttt', 'Firefox 64.0', 'Linux', '127.0.0.1', '2019-02-18 21:46:18'),
(8, 'Mohammed Bhoraniya', '9594158901', 'mdbhoraniya@gmail.com', 'ttttt', 'Firefox 64.0', 'Linux', '127.0.0.1', '2019-02-18 21:48:27'),
(9, 'Mohammed Bhoraniya', '9594158901', 'mdbhoraniya@gmail.com', 'ttttt', 'Firefox 64.0', 'Linux', '127.0.0.1', '2019-02-18 21:52:31'),
(10, 'Mohammed Bhoraniya', '9594158901', 'mdbhoraniya@gmail.com', 'ttttt', 'Firefox 64.0', 'Linux', '127.0.0.1', '2019-02-18 21:59:30'),
(11, 'Mohammed Bhoraniya', '9594158901', 'mdbhoraniya@gmail.com', 'ttttt', 'Firefox 64.0', 'Linux', '127.0.0.1', '2019-02-18 22:13:03'),
(12, 'Mohammed Bhoraniya', '9594158901', 'mdbhoraniya@gmail.com', 'ttttt', 'Firefox 64.0', 'Linux', '127.0.0.1', '2019-02-18 22:13:58'),
(13, 'Mohammed Bhoraniya', '9594158901', 'mdbhoraniya@gmail.com', 'ttttt', 'Firefox 64.0', 'Linux', '127.0.0.1', '2019-02-18 22:14:33'),
(14, 'Mohammed Bhoraniya', '9594158901', 'mdbhoraniya@gmail.com', 'ttttt', 'Firefox 64.0', 'Linux', '127.0.0.1', '2019-02-18 22:14:53'),
(15, 'Mohammed Bhoraniya', '9594158901', 'mdbhoraniya@gmail.com', 'te', 'Firefox 65.0', 'Linux', '127.0.0.1', '2019-02-24 20:16:05'),
(16, 'Mohammed Bhoraniya', '9594158901', 'mdbhoraniya@gmail.com', 'te', 'Firefox 65.0', 'Linux', '127.0.0.1', '2019-02-24 20:18:15'),
(17, 'Mohammed Bhoraniya', '9594158901', 'mdbhoraniya@gmail.com', 'tttttt', 'Firefox 65.0', 'Linux', '127.0.0.1', '2019-02-24 20:18:35'),
(18, 'Mohammed Bhoraniya', '9594158901', 'mdbhoraniya@gmail.com', 'tttt', 'Firefox 65.0', 'Linux', '127.0.0.1', '2019-02-24 20:21:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_form`
--
ALTER TABLE `booking_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_form`
--
ALTER TABLE `booking_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
