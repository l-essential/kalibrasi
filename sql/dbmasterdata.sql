-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 18, 2019 at 03:27 AM
-- Server version: 10.0.38-MariaDB-0ubuntu0.16.04.1
-- PHP Version: 7.0.33-0ubuntu0.16.04.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmasterdata`
--
CREATE DATABASE IF NOT EXISTS `dbmasterdata` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `dbmasterdata`;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

DROP TABLE IF EXISTS `notification`;
CREATE TABLE `notification` (
  `id_notification` int(11) NOT NULL,
  `typedata` enum('approval','information') NOT NULL DEFAULT 'approval',
  `groupnotification` enum('user','global') NOT NULL DEFAULT 'user',
  `for_user` varchar(50) NOT NULL,
  `module` varchar(50) NOT NULL,
  `title` varchar(160) NOT NULL,
  `message` varchar(255) NOT NULL,
  `transaksi` varchar(80) NOT NULL,
  `keydata` varchar(255) NOT NULL,
  `status_notification` enum('waiting','reject','approve','information','close') NOT NULL DEFAULT 'waiting',
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id_notification`),
  ADD KEY `groupnotification` (`groupnotification`),
  ADD KEY `module` (`module`),
  ADD KEY `transaksi` (`transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id_notification` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
