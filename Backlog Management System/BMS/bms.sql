-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2018 at 04:14 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bms`
--
CREATE DATABASE IF NOT EXISTS `bms` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bms`;

-- --------------------------------------------------------

--
-- Table structure for table `backlogs`
--

CREATE TABLE IF NOT EXISTS `backlogs` (
  `RollNo` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Regulation` varchar(50) NOT NULL,
  `DeptName` varchar(50) NOT NULL,
  `Semester` varchar(10) NOT NULL,
  `SubjectCode` varchar(50) NOT NULL,
  `SubjectName` varchar(50) NOT NULL,
  `AcademicYear` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `backlogs`
--

INSERT INTO `backlogs` (`RollNo`, `Name`, `Regulation`, `DeptName`, `Semester`, `SubjectCode`, `SubjectName`, `AcademicYear`) VALUES
('158w1f0034', 'saikiran', '15MCA', 'MCA', '1', '15MCA2103', 'COMPUTER ORGANIZATION', '2017-2018'),
('158w1f0033', 'brahmani', '15MCA', 'MCA', '1', '15MCA2103', 'COMPUTER ORGANIZATION', '2017-2018'),
('158w1f0032', 'jaya', '15MCA', 'MCA', '1', '15MCA2103', 'COMPUTER ORGANIZATION', '2017-2018'),
('158w1f0001', 'ravi', 'VR101', 'MCA', '3', 'vr222', 'bigdata', '2015-2016'),
('158w1f0002', 'ravali', 'VR101', 'MCA', '3', 'vr222', 'bigdata', '2015-2016'),
('158w1f0003', 'lokesh', 'VR101', 'MCA', '3', 'vr222', 'bigdata', '2015-2016'),
('158w1f0034', 'saikiran', '15MCA', 'MCA', '4', '15MCA2405D', 'COMPUTER GRAPHICS', '2016-2017'),
('158w1f0004', 'pavan sai ', '15MCA', 'MCA', '4', '15MCA2405D', 'COMPUTER GRAPHICS', '2016-2017'),
('158w1f0007', 'harsha', '15MCA', 'MCA', '4', '15MCA2405D', 'COMPUTER GRAPHICS', '2016-2017'),
('158w1f0034', 'saikiran', 'VR101', 'MCA', '2', 'vr22', '.net', '2014-2015'),
('158w1f0007', 'aarisa', 'VR101', 'MCA', '2', 'vr22', '.net', '2014-2015'),
('158w1f0008', 'narendra', 'VR101', 'MCA', '2', 'vr22', '.net', '2014-2015'),
('158w1f0011', 'subbu', 'VR101', 'MCA', '5', 'vr11111', 'hadoop', '2017-2018'),
('158w1f0022', 'madhu', 'VR101', 'MCA', '5', 'vr11111', 'hadoop', '2017-2018'),
('158w1f0047', 'jaheer', 'VR101', 'MCA', '5', 'vr11111', 'hadoop', '2017-2018'),
('158w1f0011', 'subbu', '15MCA', 'MCA', '2', '15MCA2205', 'OPERATING SYSTEMS', '2015-2016'),
('158w1f0012', 'reddy', '15MCA', 'MCA', '2', '15MCA2205', 'OPERATING SYSTEMS', '2015-2016'),
('158w1f0013', 'jyothi', '15MCA', 'MCA', '2', '15MCA2205', 'OPERATING SYSTEMS', '2015-2016'),
('158w1f0017', 'bhagi', '15MCA', 'MBA', '1', 'mba2', 'finance', '2015-2016'),
('158w1f0018', 'theerdha', '15MCA', 'MBA', '1', 'mba2', 'finance', '2015-2016'),
('158w1f0020', 'siva', '15MCA', 'MBA', '1', 'mba2', 'finance', '2015-2016'),
('158w1f0034', 'saikiran', '15MCA', 'MCA', '5', '15MCA2505A', 'BIG DATA ANALYTICS', '2017-2018'),
('158w1f0056', 'raja', '15MCA', 'MCA', '5', '15MCA2505A', 'BIG DATA ANALYTICS', '2017-2018'),
('158w1f0036', 'guru', '15MCA', 'MCA', '5', '15MCA2505A', 'BIG DATA ANALYTICS', '2017-2018'),
('158w1f0021', 'kavitha', '15MCA', 'MCA', '3', '15MCA2301', 'DATABASE MANAGEMENT SYSTEMS', '2017-2018'),
('158w1f0022', 'madhu', '15MCA', 'MCA', '3', '15MCA2301', 'DATABASE MANAGEMENT SYSTEMS', '2017-2018'),
('158w1f0025', 'anusha', '15MCA', 'MCA', '3', '15MCA2301', 'DATABASE MANAGEMENT SYSTEMS', '2017-2018'),

('158w1f0030', 'nagarjuna', '15MCA', 'MBA', '3', 'mba222', 'consumer relation management', '2015-2016'),
('158w1f0031', 'sahithi', '15MCA', 'MBA', '3', 'mba222', 'consumer relation management', '2015-2016'),

('158w1f0034', 'saikiran', '15MCA', 'MCA', '6', '15MCA4653', 'MAJOR PROJECT', '2015-2016'),
('158w1f0033', 'brahmani', '15MCA', 'MCA', '6', '15MCA4653', 'MAJOR PROJECT', '2015-2016'),
('158w1f0035', 'satya', '15MCA', 'MCA', '6', '15MCA4653', 'MAJOR PROJECT', '2015-2016'),
('158w1f0047', 'jaheer', '15MCA', 'MCA', '6', '15MCA4653', 'MAJOR PROJECT', '2015-2016'),
('158w1f0007', 'harsha', '15MCA', 'MCA', '6', '15MCA4653', 'MAJOR PROJECT', '2015-2016'),
('158w1f0056', 'raja', '15MCA', 'MCA', '4', '15MCA2403', 'DATA WARE HOUSING AND DATA MINING', '2017-2018'),
('158w1f0014', 'jagadheesh', '15MCA', 'MCA', '4', '15MCA2402', 'MOBILE APPLICATION DEVELOPMENT', '2016-2017'),
('158w1f0015', 'salmon', '15MCA', 'MCA', '4', '15MCA2402', 'MOBILE APPLICATION DEVELOPMENT', '2016-2017'),
('158w1f0016', 'sravanthi', '15MCA', 'MCA', '4', '15MCA2402', 'MOBILE APPLICATION DEVELOPMENT', '2016-2017'),
('158w1f0099', 'darling', '15MCA', 'MCA', '3', '15MCA2351', 'DATABASE MANAGEMENT SYSTEMS LAB', '2017-2018');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Username`, `Password`) VALUES
('admin', 'admin')
('faculty', 'faculty')
('student', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `regulation`
--

CREATE TABLE IF NOT EXISTS `regulation` (
  `Regulation` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regulation`
--

INSERT INTO `regulation` (`Regulation`) VALUES
('VR101'),
('15MCA'),
('15MBA'),
('16MCA'),
('15Btech'),
('16Mtech');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `DeptName` varchar(50) NOT NULL,
  `SujectCode` varchar(50) NOT NULL,
  `SubjectName` varchar(50) NOT NULL,
  `Semester` varchar(50) NOT NULL,
  `Regulation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`DeptName`, `SujectCode`, `SubjectName`, `Semester`, `Regulation`) VALUES
('MCA', 'vr2', 'java', '1', 'VR101'),
('MCA', 'vr11', 'php', '2', 'VR101'),
('MCA', 'vr22', '.net', '2', 'VR101'),

('MCA', 'vr111', 'datamining', '3', 'VR101'),
('MCA', 'vr222', 'bigdata', '3', 'VR101'),
('MCA', 'vr333', 'cloud computing', '3', 'VR101'),
('MCA', 'vr1111', 'C#', '4', 'VR101'),
('MCA', 'vr2222', 'sql', '4', 'VR101'),
('MCA', 'vr3333', 'android', '4', 'VR101'),
('MCA', 'vr11111', 'hadoop', '5', 'VR101'),
('MCA', 'vr22222', 'excel', '5', 'VR101'),
('MCA', 'vr33333', 'linux', '5', 'VR101'),
('MCA', 'vr111111', 'robotics', '6', 'VR101'),
('MCA', 'vr222222', 'perl', '6', 'VR101'),
('MCA', 'vr333333', 'ruby', '6', 'VR101'),
('MCA', '15MCA2101', 'IT FUNDAMENTALS', '1', '15MCA'),
('MCA', '15MCA2102', 'PROGRAMMING IN C', '1', '15MCA'),
('MCA', '15MCA2103', 'COMPUTER ORGANIZATION', '1', '15MCA'),
('MCA', '15MCA1104', 'ENGLISH LANGUAGE COMMUNICATION SKILLS', '1', '15MCA'),
('MCA', '15MCA1105', 'PROBABILITY AND STATISTICS', '1', '15MCA'),
('MCA', '15MCA2151', 'IT FUNDAMENTALS LAB', '1', '15MCA'),
('MCA', '15MCA2152', 'C PROGRAMMING LAB', '1', '15MCA'),
('MCA', '15MCA1153', 'ENGLISH LANGUAGE COMMUNICATION SKILLS LAB', '1', '15MCA'),
('MCA', '15MCA1201', 'DISCRETE MATHEMATICS', '2', '15MCA'),
('MCA', '15MCA2202', 'DATA STRUCTURES USING C', '2', '15MCA'),
('MCA', '15MCA2203', 'COMPUTER NETWORKS', '2', '15MCA'),
('MCA', '15MCA2204', 'OBJECT ORIENTED PROGRAMMING THROUGH JAVA', '2', '15MCA'),
('MCA', '15MCA2205', 'OPERATING SYSTEMS', '2', '15MCA'),
('MCA', '15MCA2251', 'DATA STRUCTURES LAB', '2', '15MCA'),
('MCA', '15MCA2252', 'OBJECT ORIENTED PROGRAMMING THROUGH JAVA LAB', '2', '15MCA'),
('MCA', '15MCA2253', 'OPERATING SYSTEMS LAB', '2', '15MCA'),
('MCA', '15MCA1254', 'PROFESSIONAL COMMUNICATION PRACTICE LAB', '2', '15MCA'),
('MCA', '15MCA2301', 'DATABASE MANAGEMENT SYSTEMS', '3', '15MCA'),
('MCA', '15MCA2302', 'ADVANCED JAVA PROGRAMMING', '3', '15MCA'),
('MCA', '15MCA2303', 'DESIGN AND ANALYSIS OF ALGORITHMS', '3', '15MCA'),
('MCA', '15MCA2304', 'WEB DEVELOPMENT', '3', '15MCA'),
('MCA', '15MCA2305', 'INDUSTRIAL MANAGEMENT', '3', '15MCA'),
('MCA', '15MCA2351', 'DATABASE MANAGEMENT SYSTEMS LAB', '3', '15MCA'),
('MCA', '15MCA2352', 'ADVANCED JAVA PROGRAMMING LAB', '3', '15MCA'),
('MCA', '15MCA2353', 'WEB DEVELOPMENT LAB', '3', '15MCA'),
('MCA', '15MCA5354', 'SOFT SKILLS-1', '3', '15MCA'),
('MCA', '15MCA2401', 'SOFTWARE ENGINEERING', '4', '15MCA'),
('MCA', '15MCA2402', 'MOBILE APPLICATION DEVELOPMENT', '4', '15MCA'),
('MCA', '15MCA2403', 'DATA WARE HOUSING AND DATA MINING', '4', '15MCA'),
('MCA', '15MCA1404', 'OPTIMIZATION TECHNIQUES', '4', '15MCA'),
('MCA', '15MCA2405D', 'COMPUTER GRAPHICS', '4', '15MCA'),
('MCA', '15MCA2451', '.NET LAB', '4', '15MCA'),
('MCA', '15MCA2452', 'MOBILE APPLICATION DEVELOPMENT LAB', '4', '15MCA'),
('MCA', '15MCA2453', 'DATAMINING  LAB', '4', '15MCA'),
('MCA', '15MCA5454', 'SOFT SKILLS-11', '4', '15MCA'),
('MCA', '15MCA2501', 'CRYPTOGRAPHY AND NETWORK SECURITY', '5', '15MCA'),
('MCA', '15MCA3502C', 'E-COMMERCE', '5', '15MCA'),
('MCA', '15MCA2503', 'PYTHON PROGRAMMING', '5', '15MCA'),
('MCA', '15MCA2504B', 'CLOUD COMPUTING', '5', '15MCA'),
('MCA', '15MCA2505A', 'BIG DATA ANALYTICS', '5', '15MCA'),
('MCA', '15MCA2551', 'PYTHON PROGRAMMING LAB', '5', '15MCA'),
('MCA', '15MCA4552', 'MINI PROJECT', '5', '15MCA'),
('MCA', '15MCA4653', 'MAJOR PROJECT', '6', '15MCA'),
('MBA', 'mba1', 'hr', '1', '15MCA'),
('MBA', 'mba2', 'finance', '1', '15MCA'),
('MBA', 'mba11', 'marketing', '2', '15MCA'),
('MBA', 'mba22', 'realtional management', '2', '15MCA'),
('MBA', 'mba111', 'business marketing', '3', '15MCA'),
('MBA', 'mba222', 'consumer relation management', '3', '15MCA');
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
