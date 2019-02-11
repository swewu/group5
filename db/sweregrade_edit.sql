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

INSERT INTO `sweregrade`.`user` (`username`, `password`, `Firstname`, `Lastname`, `role`) VALUES ('58142753', 'swezaza01', 'นางสาวประภาพร', 'มั่งมี', 'นักศึกษา');
INSERT INTO `sweregrade`.`user` (`username`, `password`, `Firstname`, `Lastname`, `role`) VALUES ('58143033', 'swezaza02', 'นายพงศธร', 'จันด้วง', 'นักศึกษา');
INSERT INTO `sweregrade`.`user` (`username`, `password`, `Firstname`, `Lastname`, `role`) VALUES ('58143900', 'swezaza03', 'นายมูฮัมหมัดมะฮ์ดี', 'ราโอ๊ะ', 'นักศึกษา');
INSERT INTO `sweregrade`.`user` (`username`, `password`, `Firstname`, `Lastname`, `role`) VALUES ('58144239', 'swezaza04', 'นายลิขสิทธิ์', 'สุขชาญ', 'นักศึกษา');
INSERT INTO `sweregrade`.`user` (`username`, `password`, `Firstname`, `Lastname`, `role`) VALUES ('58144924', 'swezaza05', 'นายศุภณัฐ', 'คุ้มปิยะผล', 'นักศึกษา');
INSERT INTO `sweregrade`.`user` (`username`, `password`, `Firstname`, `Lastname`, `role`) VALUES ('58145236', 'swezaza06', 'นางสาวสุดารัตน์', 'ผิวอ่อน', 'นักศึกษา');
INSERT INTO `sweregrade`.`user` (`username`, `password`, `Firstname`, `Lastname`, `role`) VALUES ('58147406', 'swezaza07', 'นายธนากร', ' ลิ้มสกุล', 'นักศึกษา');
INSERT INTO `sweregrade`.`user` (`username`, `password`, `Firstname`, `Lastname`, `role`) VALUES ('58148602', 'swezaza08', 'นางสาวสิริพร', 'พุทธวิริยะ', 'นักศึกษา');
INSERT INTO `sweregrade`.`user` (`username`, `password`, `Firstname`, `Lastname`, `role`) VALUES ('58149840', 'swezaza09', 'นายอลีฟ', 'รักไทรทอง', 'นักศึกษา');
INSERT INTO `sweregrade`.`user` (`username`, `password`, `Firstname`, `Lastname`, `role`) VALUES ('58162660', 'swezaza10', 'นายสมศักดิ์', 'หมั่นถนอม', 'นักศึกษา');
INSERT INTO `sweregrade`.`user` (`username`, `password`, `Firstname`, `Lastname`, `role`) VALUES ('58162694', 'swezaza11', 'นายสหรัฐ', 'รักดำ', 'นักศึกษา');

INSERT INTO `sweregrade`.`user` (`username`, `Firstname`, `Lastname`) VALUES ('1020001', 'กรัณรัตน์', 'ธรรมรักษ์');
INSERT INTO `sweregrade`.`user` (`username`, `Firstname`, `Lastname`) VALUES ('1202002', 'กาญจน์นัฐฐา', 'ไชยศรียา');
INSERT INTO `sweregrade`.`user` (`username`, `Firstname`, `Lastname`) VALUES ('1303002', 'กาญจนา', 'หฤหรรษพงศ์');
INSERT INTO `sweregrade`.`user` (`username`, `Firstname`, `Lastname`) VALUES ('1400214', 'โกสินทร์', 'กาฬรัตน์');
INSERT INTO `sweregrade`.`user` (`username`, `Firstname`, `Lastname`) VALUES ('1034003', 'ขุนดี', 'หลำสุบ');
INSERT INTO `sweregrade`.`user` (`username`, `Firstname`, `Lastname`) VALUES ('1023360', 'อุหมาด', 'หมัดอาด้ำ');
INSERT INTO `sweregrade`.`user` (`username`, `Firstname`, `Lastname`) VALUES ('1101002', 'ประทีป', 'คงกล้า');
INSERT INTO `sweregrade`.`user` (`username`, `Firstname`, `Lastname`) VALUES ('1022009', 'ฐิมาพร', 'เพชรแก้ว');
INSERT INTO `sweregrade`.`user` (`username`, `Firstname`, `Lastname`) VALUES ('1500256', 'พุทธิพร', 'ธนธรรมเมธี');
INSERT INTO `sweregrade`.`user` (`username`, `Firstname`, `Lastname`) VALUES ('1033025', 'เยาวเรศ', 'ศิริสถิตย์กุล');
--
-- Indexes for dumped tables
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;