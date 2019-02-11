-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2019 at 07:11 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
-- -----------------------------------------------------
-- Schema sweregrade
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `sweregrade` ;

-- -----------------------------------------------------
-- Schema sweregrade
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `sweregrade` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `sweregrade` ;
-- --------------------------------------------------------

--
-- Table structure for table `historygrade`
--
DROP TABLE IF EXISTS  sweregrade.`historygrade`;

CREATE TABLE sweregrade.`historygrade` (
  `historyid` int(18) NOT NULL auto_increment,
  `studentid` varchar(10) COLLATE utf8_bin NOT NULL,
  `studentname` varchar(45) COLLATE utf8_bin NOT NULL,
  `courseid` varchar(10) COLLATE utf8_bin NOT NULL,
  `coursename` varchar(45) COLLATE utf8_bin NOT NULL,
  `term` int(5) NOT NULL,
  `year` int(5) NOT NULL,
  `grade` int(3) NOT NULL,
  PRIMARY KEY (`historyid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

DROP TABLE IF EXISTS  sweregrade.`user`;
CREATE TABLE sweregrade.`user` (
  `userid` int(10) NOT NULL auto_increment,
  `username` varchar(45) COLLATE utf8_bin NOT NULL,
  `password` varchar(18) COLLATE utf8_bin NOT NULL,
  `Firstname` varchar(45) COLLATE utf8_bin NOT NULL,
  `Lastname` varchar(45) COLLATE utf8_bin NOT NULL,
  `role` varchar(10) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
--
-- Indexes for dumped tables
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;