-- phpMyAdmin SQL Dump
-- version 4.1.8
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Jun 15, 2015 at 05:57 PM
-- Server version: 5.5.34
-- PHP Version: 5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `f3ajax`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(500) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ID` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `fname`, `lname`, `email`) VALUES
(1, 'John', 'Doe', 'john.doe@fakeemail.com'),
(2, 'Jane', 'Doe', 'jane.doe@fakeemail.com'),
(3, 'Bilbo', 'Baggins', 'bilbo@thehobbithole.com');
