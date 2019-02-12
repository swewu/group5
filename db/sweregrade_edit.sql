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
  `studentid` varchar(10) COLLATE utf8_general_ci NOT NULL,
  `studentfirstname` varchar(45) COLLATE utf8_general_ci NOT NULL,
  `studentlastname` varchar(45) COLLATE utf8_general_ci NOT NULL,
  `courseid` varchar(10) COLLATE utf8_general_ci NOT NULL,
  `coursename` varchar(45) COLLATE utf8_general_ci NOT NULL,
  `term` int(5) NOT NULL,
  `year` int(5) NOT NULL,
  `grade` VARCHAR(2) NOT NULL,
  `status` int(1) NOT NULL,
  `userid` INT(10) NOT NULL,
  PRIMARY KEY (`historyid`),
  FOREIGN KEY (`userid`) REFERENCES `sweregrade`.`user` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `sweregrade`.`historygrade` (`studentid`, `studentfirstname`, `studentlastname`, `courseid`, `coursename`, `term`, `year`, `grade`, `status`) VALUES ('58143033', 'นายพงศธร', 'จันด้วง', 'SWE-204', 'โครงสร้างซอฟต์แวร์2', '1', '2018', 'F', '1');
INSERT INTO `sweregrade`.`historygrade` (`studentid`, `studentfirstname`, `studentlastname`, `courseid`, `coursename`, `term`, `year`, `grade`, `status`) VALUES ('58144239', 'นายลิขสิทธิ์ ', 'สุขชาญ', 'SWE-204', 'โครงสร้างซอฟต์แวร์2', '1', '2018', 'D+', '2');
INSERT INTO `sweregrade`.`historygrade` (`studentid`, `studentfirstname`, `studentlastname`, `courseid`, `coursename`, `term`, `year`, `grade`, `status`) VALUES ('58145236', 'นางสาวสุดารัตน์', 'ผิวอ่อน', 'SWE-206', 'การเขียนโปรแกรมเชิงวัตถุ', '1', '2018', 'F', '2');
INSERT INTO `sweregrade`.`historygrade` (`studentid`, `studentfirstname`, `studentlastname`, `courseid`, `coursename`, `term`, `year`, `grade`, `status`) VALUES ('59141242', 'นางสาวณกรตา ', 'เปียทอง', 'SWE-214', 'ระบบฐานข้อมูล', '1', '2019', 'F', '1');
INSERT INTO `sweregrade`.`historygrade` (`studentid`, `studentfirstname`, `studentlastname`, `courseid`, `coursename`, `term`, `year`, `grade`, `status`) VALUES ('60140852', 'นางสาวจุติมาศ', 'มาลัย', 'SWE60-214', 'ระบบฐานข้อมูล', '2', '2019', 'D+', '1');
INSERT INTO `sweregrade`.`historygrade` (`studentid`, `studentfirstname`, `studentlastname`, `courseid`, `coursename`, `term`, `year`, `grade`, `status`) VALUES ('60140365', 'นายกิตติพงษ์', 'ทูรย์ภานุประพันธ์', 'SWE60-214', 'ระบบฐานข้อมูล', '2', '2019', 'D', '2');


DROP TABLE IF EXISTS  sweregrade.`user`;
CREATE TABLE sweregrade.`user` (
  `userid` int(10) NOT NULL,
  `username` varchar(45) COLLATE utf8_general_ci NOT NULL,
  `password` varchar(18) COLLATE utf8_general_ci NOT NULL,
  `Firstname` varchar(45) COLLATE utf8_general_ci NOT NULL,
  `Lastname` varchar(45) COLLATE utf8_general_ci NOT NULL,
  `role` varchar(10) COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `sweregrade`.`user` (`userid`, `username`, `password`, `Firstname`, `Lastname`, `role`) VALUES ('58142753', '58142753', 'swezaza01', 'นางสาวประภาพร', 'มั่งมี', 'นักศึกษา');
INSERT INTO `sweregrade`.`user` (`userid`, `username`, `password`, `Firstname`, `Lastname`, `role`) VALUES ('58143033', '58143033', 'swezaza02', 'นายพงศธร', 'จันด้วง', 'นักศึกษา');
INSERT INTO `sweregrade`.`user` (`userid`, `username`, `password`, `Firstname`, `Lastname`, `role`) VALUES ('58143900', '58143900', 'swezaza03', 'นายมูฮัมหมัดมะฮ์ดี', 'ราโอ๊ะ', 'นักศึกษา');
INSERT INTO `sweregrade`.`user` (`userid`, `username`, `password`, `Firstname`, `Lastname`, `role`) VALUES ('58144239', '58144239', 'swezaza04', 'นายลิขสิทธิ์', 'สุขชาญ', 'นักศึกษา');
INSERT INTO `sweregrade`.`user` (`userid`, `username`, `password`, `Firstname`, `Lastname`, `role`) VALUES ('58144924', '58144924', 'swezaza05', 'นายศุภณัฐ', 'คุ้มปิยะผล', 'นักศึกษา');
INSERT INTO `sweregrade`.`user` (`userid`, `username`, `password`, `Firstname`, `Lastname`, `role`) VALUES ('58145236', '58145236', 'swezaza06', 'นางสาวสุดารัตน์', 'ผิวอ่อน', 'นักศึกษา');
INSERT INTO `sweregrade`.`user` (`userid`, `username`, `password`, `Firstname`, `Lastname`, `role`) VALUES ('58147406', '58147406', 'swezaza07', 'นายธนากร', ' ลิ้มสกุล', 'นักศึกษา');
INSERT INTO `sweregrade`.`user` (`userid`, `username`, `password`, `Firstname`, `Lastname`, `role`) VALUES ('58148602', '58148602', 'swezaza08', 'นางสาวสิริพร', 'พุทธวิริยะ', 'นักศึกษา');
INSERT INTO `sweregrade`.`user` (`userid`, `username`, `password`, `Firstname`, `Lastname`, `role`) VALUES ('58149840', '58149840', 'swezaza09', 'นายอลีฟ', 'รักไทรทอง', 'นักศึกษา');
INSERT INTO `sweregrade`.`user` (`userid`, `username`, `password`, `Firstname`, `Lastname`, `role`) VALUES ('58162660', '58162660', 'swezaza10', 'นายสมศักดิ์', 'หมั่นถนอม', 'นักศึกษา');
INSERT INTO `sweregrade`.`user` (`userid`, `username`, `password`, `Firstname`, `Lastname`, `role`) VALUES ('58162694', '58162694', 'swezaza11', 'นายสหรัฐ', 'รักดำ', 'นักศึกษา');

INSERT INTO `sweregrade`.`user` (`userid`, `username`, `password`, `Firstname`, `Lastname`, `role`) VALUES ('1020001', 'kanchan.th@wu.ac.th', 'swe001', 'กรัณรัตน์', 'ธรรมรักษ์', 'อาจารย์');
INSERT INTO `sweregrade`.`user` (`userid`, `username`, `password`, `Firstname`, `Lastname`, `role`) VALUES ('1202002', 'csomjit@wu.ac.th', 'swe002', 'กาญจน์นัฐฐา', 'ไชยศรียา', 'อาจารย์');
INSERT INTO `sweregrade`.`user` (`userid`, `username`, `password`, `Firstname`, `Lastname`, `role`) VALUES ('1303002', 'hkanjana@wu.ac.th', 'swe003', 'กาญจนา', 'หฤหรรษพงศ์', 'อาจารย์');
INSERT INTO `sweregrade`.`user` (`userid`, `username`, `password`, `Firstname`, `Lastname`, `role`) VALUES ('1400214', 'kosin.ka@wu.ac.th', 'swe004', 'โกสินทร์', 'กาฬรัตน์', 'อาจารย์');
INSERT INTO `sweregrade`.`user` (`userid`, `username`, `password`, `Firstname`, `Lastname`, `role`) VALUES ('1034003', 'khundee.la@wu.ac.th', 'swe005', 'ขุนดี', 'หลำสุบ', 'อาจารย์');
INSERT INTO `sweregrade`.`user` (`userid`, `username`, `password`, `Firstname`, `Lastname`, `role`) VALUES ('1023360', 'muhamard@wu.ac.th', 'swe006', 'อุหมาด', 'หมัดอาด้ำ', 'อาจารย์');
INSERT INTO `sweregrade`.`user` (`userid`, `username`, `password`, `Firstname`, `Lastname`, `role`) VALUES ('1101002', 'prateep.ko@wu.ac.th', 'swe007', 'ประทีป', 'คงกล้า', 'อาจารย์');
INSERT INTO `sweregrade`.`user` (`userid`, `username`, `password`, `Firstname`, `Lastname`, `role`) VALUES ('1022009', 'pthimapo@wu.ac.th', 'swe008', 'ฐิมาพร', 'เพชรแก้ว', 'อาจารย์');
INSERT INTO `sweregrade`.`user` (`userid`, `username`, `password`, `Firstname`, `Lastname`, `role`) VALUES ('1500256', 'putthiporn.th@wu.ac.th', 'swe009', 'พุทธิพร', 'ธนธรรมเมธี', 'อาจารย์');
INSERT INTO `sweregrade`.`user` (`userid`, `username`, `password`, `Firstname`, `Lastname`, `role`) VALUES ('1033025', 'syaowara@wu.ac.th', 'swe010', 'เยาวเรศ', 'ศิริสถิตย์กุล', 'อาจารย์');

--
-- Indexes for dumped tables
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;