-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2020 at 01:36 AM
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
-- Database: `lessential_kpi`
--

-- --------------------------------------------------------

--
-- Table structure for table `kpi`
--

CREATE TABLE `kpi` (
  `kpi_id` int(11) NOT NULL,
  `detail_id` int(11) NOT NULL,
  `kpi_objective` varchar(225) NOT NULL,
  `bobot` int(3) NOT NULL,
  `kpi_value` varchar(5) NOT NULL,
  `supporting_information` text NOT NULL,
  `target_objective` varchar(3) NOT NULL,
  `target_kpi` varchar(3) NOT NULL,
  `jan` varchar(2) NOT NULL DEFAULT '0',
  `feb` varchar(2) NOT NULL DEFAULT '0',
  `mar` varchar(2) NOT NULL DEFAULT '0',
  `apr` varchar(2) NOT NULL DEFAULT '0',
  `mei` varchar(2) NOT NULL DEFAULT '0',
  `jun` varchar(2) NOT NULL DEFAULT '0',
  `jul` varchar(2) NOT NULL DEFAULT '0',
  `ags` varchar(2) NOT NULL DEFAULT '0',
  `sep` varchar(2) NOT NULL DEFAULT '0',
  `okt` varchar(2) NOT NULL DEFAULT '0',
  `nov` varchar(2) NOT NULL DEFAULT '0',
  `des` varchar(2) NOT NULL DEFAULT '0',
  `actual` int(2) NOT NULL,
  `target_vs_actual` varchar(10) NOT NULL,
  `pembagi` int(2) NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kpi`
--

INSERT INTO `kpi` (`kpi_id`, `detail_id`, `kpi_objective`, `bobot`, `kpi_value`, `supporting_information`, `target_objective`, `target_kpi`, `jan`, `feb`, `mar`, `apr`, `mei`, `jun`, `jul`, `ags`, `sep`, `okt`, `nov`, `des`, `actual`, `target_vs_actual`, `pembagi`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 1, 'absen', 20, '1', 'absen', '100', '5', '5', '5', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 5, '100', 2, 'active', 1, '2020-08-28 04:24:36', NULL, NULL, NULL, NULL),
(2, 2, 'hadir', 25, '1.25', 'hadir', '100', '5', '5', '5', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 5, '100', 2, 'active', 1, '2020-08-28 04:25:46', NULL, NULL, NULL, NULL),
(3, 3, 'ini punya saya', 15, '0.75', 'saya', '100', '5', '5', '5', '5', '5', '5', '5', '0', '0', '0', '0', '0', '0', 5, '100', 6, 'active', 1, '2020-08-28 04:33:05', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `periode`
--

CREATE TABLE `periode` (
  `periode_id` int(11) NOT NULL,
  `periode_awal` varchar(4) NOT NULL,
  `periode_akhir` varchar(4) NOT NULL,
  `departement` varchar(10) NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `periode`
--

INSERT INTO `periode` (`periode_id`, `periode_awal`, `periode_akhir`, `departement`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, '2020', '2021', 'IT', 'active', 1, '2020-07-27 12:10:17', NULL, NULL, NULL, NULL),
(2, '2021', '2022', 'IT', 'active', 1, '2020-07-27 14:18:30', NULL, NULL, NULL, NULL),
(3, '2022', '2023', 'IT', 'nonactive', 1, '2020-07-29 08:52:52', NULL, NULL, 1, '2020-08-04 11:14:25'),
(4, '2022', '2023', 'IT', 'nonactive', 1, '2020-08-04 14:54:04', NULL, NULL, 1, '2020-08-04 15:07:06'),
(5, '2023', '2024', 'IT', 'nonactive', 1, '2020-08-04 14:54:33', NULL, NULL, 1, '2020-08-04 15:07:04'),
(6, '2023', '2024', 'IT', 'nonactive', 1, '2020-08-11 17:00:53', NULL, NULL, 1, '2020-08-25 03:06:16'),
(7, '2019', '2020', 'IT', 'active', 135, '2020-10-16 02:29:34', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `periode_detail`
--

CREATE TABLE `periode_detail` (
  `detail_id` int(11) NOT NULL,
  `periode_id` int(11) NOT NULL,
  `namaKaryawan` varchar(100) NOT NULL,
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

--
-- Dumping data for table `periode_detail`
--

INSERT INTO `periode_detail` (`detail_id`, `periode_id`, `namaKaryawan`, `position_code`, `position_name`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 1, 'BUDI IRWAN FIRMANSYAH', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 1, 'JOKO YUANA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 1, 'MOEHAMAD SALDY AMIRULLAH JAFAR', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 1, 'MOH. BAYU EDHI WIBOWO', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 1, 'STEFANUS LAY', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 2, 'BUDI IRWAN FIRMANSYAH', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 2, 'JOKO YUANA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 2, 'MOEHAMAD SALDY AMIRULLAH JAFAR', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 2, 'MOH. BAYU EDHI WIBOWO', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 2, 'STEFANUS LAY', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 3, 'BUDI IRWAN FIRMANSYAH', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 3, 'JOKO YUANA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 3, 'MOEHAMAD SALDY AMIRULLAH JAFAR', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 3, 'MOH. BAYU EDHI WIBOWO', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(15, 3, 'STEFANUS LAY', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(16, 4, 'BUDI IRWAN FIRMANSYAH', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(17, 4, 'JOKO YUANA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(18, 4, 'MOEHAMAD SALDY AMIRULLAH JAFAR', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(19, 4, 'MOH. BAYU EDHI WIBOWO', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(20, 4, 'STEFANUS LAY', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(21, 5, 'BUDI IRWAN FIRMANSYAH', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(22, 5, 'JOKO YUANA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(23, 5, 'MOEHAMAD SALDY AMIRULLAH JAFAR', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(24, 5, 'MOH. BAYU EDHI WIBOWO', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(25, 5, 'STEFANUS LAY', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(26, 6, 'BUDI IRWAN FIRMANSYAH', '', '', 'nonactive', NULL, NULL, NULL, NULL, 1, '2020-08-25 03:06:16'),
(27, 6, 'MOEHAMAD SALDY AMIRULLAH JAFAR', '', '', 'nonactive', NULL, NULL, NULL, NULL, 1, '2020-08-25 03:06:16'),
(28, 6, 'MOH. BAYU EDHI WIBOWO', '', '', 'nonactive', NULL, NULL, NULL, NULL, 1, '2020-08-25 03:06:16'),
(29, 6, 'STEFANUS LAY', '', '', 'nonactive', NULL, NULL, NULL, NULL, 1, '2020-08-25 03:06:16'),
(30, 7, 'BUDI IRWAN FIRMANSYAH', '', '', 'active', 135, '2020-10-16 02:29:34', NULL, NULL, NULL, NULL),
(31, 7, 'MOEHAMAD SALDY AMIRULLAH JAFAR', '', '', 'active', 135, '2020-10-16 02:29:34', NULL, NULL, NULL, NULL),
(32, 7, 'MOH. BAYU EDHI WIBOWO', '', '', 'active', 135, '2020-10-16 02:29:34', NULL, NULL, NULL, NULL),
(33, 7, 'STEFANUS LAY', '', '', 'active', 135, '2020-10-16 02:29:34', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kpi`
--
ALTER TABLE `kpi`
  ADD PRIMARY KEY (`kpi_id`);

--
-- Indexes for table `periode`
--
ALTER TABLE `periode`
  ADD PRIMARY KEY (`periode_id`);

--
-- Indexes for table `periode_detail`
--
ALTER TABLE `periode_detail`
  ADD PRIMARY KEY (`detail_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kpi`
--
ALTER TABLE `kpi`
  MODIFY `kpi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `periode`
--
ALTER TABLE `periode`
  MODIFY `periode_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `periode_detail`
--
ALTER TABLE `periode_detail`
  MODIFY `detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
