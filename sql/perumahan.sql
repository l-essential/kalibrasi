-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2019 at 02:04 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `db_pu`
--

-- --------------------------------------------------------

--
-- Table structure for table `perumahan`
--

DROP TABLE IF EXISTS `perumahan`;
CREATE TABLE `perumahan` (
  `id_perumahan` int(11) NOT NULL,
  `nama_perumahan` varchar(80) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kabkota` varchar(60) NOT NULL,
  `kodepos` int(10) NOT NULL,
  `luastanah` int(5) NOT NULL DEFAULT '0',
  `luasbangunan` int(5) NOT NULL DEFAULT '0',
  `keterangan` varchar(255) DEFAULT NULL,
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
-- Indexes for table `perumahan`
--
ALTER TABLE `perumahan`
  ADD PRIMARY KEY (`id_perumahan`),
  ADD KEY `INDEX_GETPERUMAHAN` (`nama_perumahan`,`kabkota`,`kodepos`,`luastanah`,`luasbangunan`,`statusdata`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `perumahan`
--
ALTER TABLE `perumahan`
  MODIFY `id_perumahan` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;
