-- phpMyAdmin SQL Dump
-- version 5.2.1deb3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 06, 2024 at 06:18 PM
-- Server version: 10.11.8-MariaDB-0ubuntu0.24.04.1
-- PHP Version: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mySite`
--

-- --------------------------------------------------------

--
-- Table structure for table `myFooter`
--

CREATE TABLE `myFooter` (
  `title` varchar(50) NOT NULL,
  `landing` varchar(200) NOT NULL,
  `display` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `myFooter`
--

INSERT INTO `myFooter` (`title`, `landing`, `display`) VALUES
('linkedin', 'https://www.linkedin.com/in/arielle-revis/', 'linkedin.com/ariellerevis'),
('mail', 'mailto:arielle.a.revis@gmail.com', 'arielle.a.revis@gmail.com'),
('number', 'tel:8482379843', '(848) - 237 9843');

-- --------------------------------------------------------

--
-- Table structure for table `myLabs`
--

CREATE TABLE `myLabs` (
  `labid` smallint(5) UNSIGNED NOT NULL,
  `title` char(100) NOT NULL,
  `landing` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `myLabs`
--

INSERT INTO `myLabs` (`labid`, `title`, `landing`) VALUES
(1, 'Lab 1: Basic Setup', 'lab1landing.php'),
(2, 'Lab 2: Resume', 'revisa-ariellerevis-resume.php'),
(3, 'Lab 3: Portfolio', 'lab3landing.php'),
(4, 'Lab 4: XML', 'lab4landing.php'),
(5, 'Lab 5: Javascript', 'lab5landing.php'),
(6, 'Lab 6: jQuery', 'lab6landing.php'),
(7, 'Lab 7: HCI', 'lab7landing.php'),
(8, 'Lab 8: Javascript, JSON, AJAX', 'lab8landing.php'),
(9, 'Lab 9: Databases and SQL', 'index.php'),
(10, 'Lab 10: Promoting Servers', 'lab10landing.php');

-- --------------------------------------------------------

--
-- Table structure for table `myProjects`
--

CREATE TABLE `myProjects` (
  `projid` smallint(5) UNSIGNED NOT NULL,
  `name` char(50) NOT NULL,
  `landing` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `myProjects`
--

INSERT INTO `myProjects` (`projid`, `name`, `landing`) VALUES
(1, 'grpDir', 'http://revisarpi.eastus.cloudapp.azure.com/grpDir/');

-- --------------------------------------------------------

--
-- Table structure for table `mySiteUsers`
--

CREATE TABLE `mySiteUsers` (
  `userid` smallint(5) UNSIGNED NOT NULL,
  `username` char(50) NOT NULL,
  `pw` char(50) NOT NULL,
  `userType` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mySiteUsers`
--

INSERT INTO `mySiteUsers` (`userid`, `username`, `pw`, `userType`) VALUES
(1, 'revisa', 'iloveintroit', 'admin'),
(2, 'rachel', 'test1', 'admin'),
(3, 'felix', 'test1', 'admin'),
(4, 'chiplaco', 'pasul', 'user'),
(5, 'test', 'test', 'admin'),
(6, 'test2', 'test2', 'admin'),
(7, 'test3', 'test3', 'admin'),
(8, 'test4', 'test4', 'user'),
(9, 'test5', 'test5', 'admin'),
(10, 'test5', 'test5', 'admin'),
(11, 'test6', 'test6', 'user'),
(12, 'test7', 'test7', 'admin'),
(13, 'test8', 'test8', 'user'),
(14, 'test7', 'test7', 'admin'),
(15, 'test8', 'test8', 'admin'),
(16, 'test9', 'test9', 'admin'),
(17, 'test10', 'test10', 'admin'),
(18, 'test10', 'test10', 'admin'),
(19, 'test11', 'test11', 'user'),
(20, 'test12', 'test12', 'admin'),
(21, 'test13', 'test13', 'admin'),
(22, 'test14', 'test14', 'user'),
(23, 'test15', 'test15', 'admin'),
(24, 'test16', 'test16', 'user'),
(25, 'test17', 'test17', 'admin'),
(26, 'test17', 'test17', 'user'),
(27, 'test18', 'test18', 'user'),
(28, 'test19', 'test19', 'admin'),
(29, 'test19', 'test19', 'user'),
(30, 'test20', 'test20', 'user'),
(31, 'test21', 'test21', 'user'),
(32, 'test22', 'test22', 'admin'),
(33, 'test22', 'test22', 'admin'),
(34, 'test18', 'test18', 'admin'),
(35, 'test23', 'test23', 'admin'),
(36, 'test24', 'test24', 'admin'),
(37, 'test26', 'test26', 'user'),
(38, 'test27', 'test27', 'admin'),
(39, 'test28', 'test28', 'admin'),
(40, 'test29', 'test29', 'admin'),
(41, 'test30', 'test30', 'admin'),
(42, 'test34', 'test34', 'admin'),
(43, 'test35', 'test35', 'admin'),
(44, 'test36', 'test36', 'admin'),
(45, 'test36', 'test36', 'admin'),
(46, 'test37', 'test37', 'admin'),
(47, 'test38', 'test38', 'admin'),
(48, 'test39', 'test39', 'admin'),
(49, 'test40', 'test40', 'admin'),
(50, 'test41', 'test41', 'admin'),
(51, 'test42', 'test42', 'admin'),
(52, 'test43', 'test43', 'admin'),
(53, 'test44', 'test44', 'admin'),
(54, 'test44', 'test44', 'admin'),
(55, 'test45', 'test45', 'admin'),
(56, 'test46', 'test46', 'admin'),
(57, 'test47', 'test47', 'admin'),
(58, 'test48', 'test48', 'admin'),
(59, 'test49', 'test49', 'admin'),
(60, 'test50', 'test50', 'admin'),
(61, 'test51', 'test51', 'admin'),
(62, 'test52', 'test52', 'admin'),
(63, 'test53', 'test53', 'admin'),
(64, 'test53', 'test53', 'admin'),
(65, 'superfifafreak2', 'iluvdds', 'admin'),
(66, 'superfifafreak3', 'rutgers', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `myFooter`
--
ALTER TABLE `myFooter`
  ADD PRIMARY KEY (`title`);

--
-- Indexes for table `myLabs`
--
ALTER TABLE `myLabs`
  ADD PRIMARY KEY (`labid`);

--
-- Indexes for table `myProjects`
--
ALTER TABLE `myProjects`
  ADD PRIMARY KEY (`projid`);

--
-- Indexes for table `mySiteUsers`
--
ALTER TABLE `mySiteUsers`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `myLabs`
--
ALTER TABLE `myLabs`
  MODIFY `labid` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `myProjects`
--
ALTER TABLE `myProjects`
  MODIFY `projid` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mySiteUsers`
--
ALTER TABLE `mySiteUsers`
  MODIFY `userid` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
