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
-- Database: `lessential_recyclebin`
--

-- --------------------------------------------------------

--
-- Table structure for table `recyclebin`
--

CREATE TABLE `recyclebin` (
  `recycle_id` int(11) NOT NULL,
  `data_id` int(11) NOT NULL,
  `name_apps` varchar(150) NOT NULL,
  `code_data` varchar(150) NOT NULL,
  `user_delete` varchar(150) NOT NULL,
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
-- Table structure for table `shortcut`
--

CREATE TABLE `shortcut` (
  `shortcut_id` int(11) NOT NULL,
  `apps_name` varchar(50) NOT NULL,
  `icon` varchar(30) NOT NULL,
  `url_apps` text NOT NULL,
  `to_apps` varchar(150) NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shortcut`
--

INSERT INTO `shortcut` (`shortcut_id`, `apps_name`, `icon`, `url_apps`, `to_apps`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(3, 'HRIS', 'fas fa-users', 'http://192.168.0.91/lessential/login', '', 'active', 1, '2020-08-25 21:44:49', NULL, NULL, NULL, NULL),
(4, 'New Customer', 'fas fa-user-plus', 'http://192.168.0.91/sim/login', '', 'active', 1, '2020-08-25 21:45:42', NULL, NULL, NULL, NULL),
(5, 'Visit MR', 'far fa-id-badge', 'https://192.168.0.191/sim2/login', '', 'active', 1, '2020-08-25 21:46:54', NULL, NULL, NULL, NULL),
(6, 'Sticker', 'far fa-sticky-note', 'http://192.168.0.91/sticker/login', '', 'active', 1, '2020-08-25 21:47:42', NULL, NULL, NULL, NULL),
(7, 'Jadwal Produksi', 'far fa-calendar-alt', 'http://192.168.0.240/ppic/', '', 'active', 1, '2020-08-25 21:48:27', NULL, NULL, NULL, NULL),
(8, 'Perubahan', 'fas fa-exchange-alt', 'http://192.168.0.240/qa/perubahan/', '', 'active', 1, '2020-08-25 21:49:11', NULL, NULL, NULL, NULL),
(9, 'Pemusnahan', 'fas fa-trash-alt', 'http://192.168.0.240/qa/pemusnahan_master/', '', 'active', 1, '2020-08-25 21:50:07', NULL, NULL, NULL, NULL),
(10, 'QC', 'far fa-question-circle', 'http://192.168.0.91/qc/login', '', 'active', 1, '2020-08-25 21:51:36', NULL, NULL, NULL, NULL),
(11, 'Princing', 'fas fa-money-bill-wave', 'http://192.168.0.91/pricing/login', '', 'active', 1, '2020-08-25 21:52:48', NULL, NULL, NULL, NULL),
(12, 'DMS', 'fab fa-digital-ocean', 'http://192.168.0.91/dokumen/login', '', 'active', 1, '2020-08-25 21:53:38', NULL, NULL, NULL, NULL),
(13, 'Expedisi', 'fas fa-truck', 'http://192.168.0.91/expedisi/login', '', 'active', 1, '2020-08-25 21:54:16', NULL, NULL, NULL, NULL),
(14, 'FPP', 'fas fa-ticket-alt', 'http://192.168.0.91/fpp/login', '', 'active', 1, '2020-08-25 21:55:06', NULL, NULL, NULL, NULL),
(15, 'Cetak Label', 'fas fa-print', 'http://192.168.0.240/reobe/', '', 'active', 1, '2020-08-25 21:56:42', NULL, NULL, NULL, NULL),
(16, 'Legalitas Maklon', 'fas fa-balance-scale', 'http://192.168.0.191/registrasi/login', '', 'active', 1, '2020-08-25 21:57:41', NULL, NULL, NULL, NULL),
(17, 'Sample', 'fas fa-vials', 'http://192.168.0.91/app_sample/login', '', 'active', 1, '2020-08-25 21:58:25', NULL, NULL, NULL, NULL),
(18, 'Kantin', 'fas fa-utensils', 'https://192.168.0.240/kantin', '', 'active', 1, '2020-08-25 21:59:08', NULL, NULL, NULL, NULL),
(19, 'Assets', 'fas fa-desktop', 'http://192.168.0.240/aset/', '', 'active', 1, '2020-08-25 22:00:06', NULL, NULL, NULL, NULL),
(20, 'Meeting', 'fab fa-meetup', 'http://192.168.0.240/ememes/admin', '', 'active', 1, '2020-08-25 22:00:53', NULL, NULL, NULL, NULL),
(21, 'Expenses', 'fas fa-desktop', 'http://192.168.0.191/expenses/', '', 'active', 1, '2020-08-25 22:01:52', NULL, NULL, NULL, NULL),
(22, 'Cekkes', 'fas fa-notes-medical', 'https://192.168.0.240/cekes', '', 'active', 1, '2020-08-25 22:03:45', NULL, NULL, NULL, NULL),
(23, 'Cek Kendaraan', 'fas fa-biking', 'https://192.168.0.240/kendaraan/', '', 'active', 1, '2020-08-25 22:05:24', NULL, NULL, NULL, NULL),
(24, 'QrCode', 'fas fa-qrcode', 'https://192.168.0.240/qfa', '', 'active', 1, '2020-08-25 22:06:38', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `themes`
--

CREATE TABLE `themes` (
  `themes_id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `background` varchar(30) NOT NULL,
  `color_text` text NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `themes`
--

INSERT INTO `themes` (`themes_id`, `user_id`, `background`, `color_text`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(4, '1', '3.jpg', '#131212c9', 'active', 1, '2020-08-24 09:23:09', 1, '2020-08-24 09:24:10', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recyclebin`
--
ALTER TABLE `recyclebin`
  ADD PRIMARY KEY (`recycle_id`);

--
-- Indexes for table `shortcut`
--
ALTER TABLE `shortcut`
  ADD PRIMARY KEY (`shortcut_id`);

--
-- Indexes for table `themes`
--
ALTER TABLE `themes`
  ADD PRIMARY KEY (`themes_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recyclebin`
--
ALTER TABLE `recyclebin`
  MODIFY `recycle_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shortcut`
--
ALTER TABLE `shortcut`
  MODIFY `shortcut_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `themes`
--
ALTER TABLE `themes`
  MODIFY `themes_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
