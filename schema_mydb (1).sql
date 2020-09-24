-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2020 at 11:06 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schema_mydb`
--
CREATE DATABASE IF NOT EXISTS `schema_mydb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `schema_mydb`;

-- --------------------------------------------------------

--
-- Table structure for table `my_db`
--

DROP TABLE IF EXISTS `my_db`;
CREATE TABLE `my_db` (
  `my_db_id` int(11) NOT NULL,
  `name_mydb` varchar(35) NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `my_db`
--

INSERT INTO `my_db` (`my_db_id`, `name_mydb`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 'lessential', 'active', 1, '2020-01-01 00:00:00', NULL, NULL, NULL, NULL),
(2, 'lessential_accessapps', 'active', 1, '2020-01-01 00:00:00', NULL, NULL, NULL, NULL),
(3, 'lessential_chat', 'active', 1, '2020-01-01 00:00:00', NULL, NULL, NULL, NULL),
(4, 'lessential_dbmasterdata', 'active', 1, '2020-01-01 00:00:00', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `my_fields`
--

DROP TABLE IF EXISTS `my_fields`;
CREATE TABLE `my_fields` (
  `id_position` int(11) NOT NULL,
  `id_location` int(11) NOT NULL,
  `location_code` varchar(11) NOT NULL,
  `position_code` varchar(25) NOT NULL,
  `position_name` varchar(25) NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `my_table`
--

DROP TABLE IF EXISTS `my_table`;
CREATE TABLE `my_table` (
  `my_table_id` int(11) NOT NULL,
  `my_db_id` int(11) NOT NULL,
  `my_table_name` varchar(35) NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `my_db`
--
ALTER TABLE `my_db`
  ADD PRIMARY KEY (`my_db_id`);

--
-- Indexes for table `my_fields`
--
ALTER TABLE `my_fields`
  ADD PRIMARY KEY (`id_position`);

--
-- Indexes for table `my_table`
--
ALTER TABLE `my_table`
  ADD PRIMARY KEY (`my_table_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `my_db`
--
ALTER TABLE `my_db`
  MODIFY `my_db_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `my_fields`
--
ALTER TABLE `my_fields`
  MODIFY `id_position` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `my_table`
--
ALTER TABLE `my_table`
  MODIFY `my_table_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
