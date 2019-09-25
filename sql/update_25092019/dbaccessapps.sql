-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2019 at 07:39 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbaccessapps`
--
CREATE DATABASE IF NOT EXISTS `dbaccessapps` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dbaccessapps`;

-- --------------------------------------------------------

--
-- Table structure for table `maplikasi`
--

DROP TABLE IF EXISTS `maplikasi`;
CREATE TABLE `maplikasi` (
  `id_maplikasi` int(11) NOT NULL,
  `sortdata` int(3) NOT NULL,
  `kode_aplikasi` varchar(20) NOT NULL,
  `nama_aplikasi` varchar(80) NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maplikasi`
--

INSERT INTO `maplikasi` (`id_maplikasi`, `sortdata`, `kode_aplikasi`, `nama_aplikasi`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(6, 0, 'test', 'Module Test', 'active', 1, '2019-08-10 10:34:17', NULL, NULL, NULL, NULL),
(7, 0, 'pu', 'Subsidi Perumahan', 'active', 1, '2019-08-14 00:36:00', NULL, NULL, NULL, NULL),
(8, 1, 'master', 'Master Data', 'active', 1, '2019-08-19 05:35:15', NULL, NULL, NULL, NULL),
(9, 2, 'trx', 'Transaksi Data', 'active', 1, '2019-08-19 05:35:29', NULL, NULL, NULL, NULL),
(10, 3, 'rpt', 'Laporan', 'active', 1, '2019-08-19 05:35:35', NULL, NULL, NULL, NULL),
(11, 4, 'utl', 'Utility', 'active', 1, '2019-08-19 05:35:44', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `maplikasigroup`
--

DROP TABLE IF EXISTS `maplikasigroup`;
CREATE TABLE `maplikasigroup` (
  `id_maplikasigroup` int(11) NOT NULL,
  `id_maplikasi` int(11) NOT NULL DEFAULT '0',
  `kode_group` varchar(20) NOT NULL,
  `nama_group` varchar(60) NOT NULL,
  `spesialgroup` varchar(1) NOT NULL DEFAULT 'N' COMMENT 'N= user biasa dan harus di setting menunya, Y= bisa akses semua menu tanpa harus di setting menunya',
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maplikasigroup`
--

INSERT INTO `maplikasigroup` (`id_maplikasigroup`, `id_maplikasi`, `kode_group`, `nama_group`, `spesialgroup`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(10, 6, 'admin', 'Super Administrator', 'Y', 'active', 1, '2019-08-10 10:35:07', NULL, NULL, NULL, NULL),
(11, 6, 'generaluser', 'User Umum', 'N', 'active', 1, '2019-08-10 10:35:28', NULL, NULL, NULL, NULL),
(12, 7, 'admin', 'Super Administrator', 'Y', 'active', 1, '2019-08-14 00:36:21', NULL, NULL, NULL, NULL),
(13, 7, 'generaluser', 'General User', 'N', 'active', 1, '2019-08-14 00:36:33', NULL, NULL, NULL, NULL),
(14, 8, 'admin', 'Administrator', 'Y', 'active', 1, '2019-08-19 05:36:06', NULL, NULL, NULL, NULL),
(15, 8, 'generaluser', 'General User', 'N', 'active', 1, '2019-08-19 05:36:17', NULL, NULL, NULL, NULL),
(16, 10, 'admin', 'Administrator', 'Y', 'active', 1, '2019-08-19 05:43:05', NULL, NULL, NULL, NULL),
(17, 9, 'admin', 'Administrator', 'Y', 'active', 1, '2019-08-19 05:43:19', NULL, NULL, NULL, NULL),
(18, 11, 'admin', 'Administrator', 'Y', 'active', 1, '2019-08-19 05:48:01', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `maplikasigroupmenu`
--

DROP TABLE IF EXISTS `maplikasigroupmenu`;
CREATE TABLE `maplikasigroupmenu` (
  `id_maplikasigroupmenu` int(11) NOT NULL,
  `id_maplikasigroup` int(11) DEFAULT '0',
  `id_mmenu` int(11) NOT NULL COMMENT 'combobox',
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maplikasigroupmenu`
--

INSERT INTO `maplikasigroupmenu` (`id_maplikasigroupmenu`, `id_maplikasigroup`, `id_mmenu`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(25, 11, 47, 'active', 1, '2019-08-10 10:42:13', NULL, NULL, NULL, NULL),
(26, 15, 56, 'nonactive', 1, '2019-09-12 11:02:13', NULL, NULL, 1, '2019-09-12 11:02:33');

-- --------------------------------------------------------

--
-- Table structure for table `maplikasigroupmenubutton`
--

DROP TABLE IF EXISTS `maplikasigroupmenubutton`;
CREATE TABLE `maplikasigroupmenubutton` (
  `id_maplikasigroupmenubutton` int(11) NOT NULL,
  `id_maplikasigroupmenu` int(11) NOT NULL DEFAULT '0',
  `id_mbutton` int(11) NOT NULL DEFAULT '0',
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maplikasigroupmenubutton`
--

INSERT INTO `maplikasigroupmenubutton` (`id_maplikasigroupmenubutton`, `id_maplikasigroupmenu`, `id_mbutton`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(240, 25, 18, 'active', 1, '2019-08-10 10:42:21', NULL, NULL, NULL, NULL),
(241, 25, 19, 'active', 1, '2019-08-10 10:42:21', NULL, NULL, NULL, NULL),
(242, 25, 20, 'active', 1, '2019-08-10 10:42:21', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `maplikasigroupuser`
--

DROP TABLE IF EXISTS `maplikasigroupuser`;
CREATE TABLE `maplikasigroupuser` (
  `id_maplikasigroupuser` int(11) NOT NULL,
  `id_maplikasigroup` int(11) NOT NULL DEFAULT '0',
  `id_user` int(11) NOT NULL DEFAULT '0' COMMENT 'combobox',
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maplikasigroupuser`
--

INSERT INTO `maplikasigroupuser` (`id_maplikasigroupuser`, `id_maplikasigroup`, `id_user`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(36, 10, 1, 'nonactive', 1, '2019-08-10 10:38:43', NULL, NULL, 1, '2019-08-19 05:42:31'),
(37, 12, 1, 'nonactive', 1, '2019-08-14 00:43:19', NULL, NULL, 1, '2019-08-19 05:42:48'),
(38, 14, 1, 'active', 1, '2019-08-19 05:42:15', NULL, NULL, NULL, NULL),
(39, 17, 1, 'active', 1, '2019-08-19 05:43:25', NULL, NULL, NULL, NULL),
(40, 16, 1, 'active', 1, '2019-08-19 05:43:39', NULL, NULL, NULL, NULL),
(41, 18, 1, 'active', 1, '2019-08-19 05:48:08', NULL, NULL, NULL, NULL),
(42, 10, 1, 'nonactive', 1, '2019-09-12 11:03:34', NULL, NULL, 1, '2019-09-12 11:04:05');

-- --------------------------------------------------------

--
-- Table structure for table `maplikasigroupuserproyekpt`
--

DROP TABLE IF EXISTS `maplikasigroupuserproyekpt`;
CREATE TABLE `maplikasigroupuserproyekpt` (
  `id_maplikasigroupuserproyekpt` int(11) NOT NULL,
  `id_maplikasigroupuser` int(11) NOT NULL DEFAULT '0',
  `id_proyekpt` int(11) NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mbutton`
--

DROP TABLE IF EXISTS `mbutton`;
CREATE TABLE `mbutton` (
  `id_mbutton` int(11) NOT NULL,
  `id_maplikasi` int(11) NOT NULL DEFAULT '0',
  `btncode` varchar(20) NOT NULL,
  `btnname` varchar(50) NOT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mbutton`
--

INSERT INTO `mbutton` (`id_mbutton`, `id_maplikasi`, `btncode`, `btnname`, `icon`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(18, 6, 'btn_add', 'Add', 'fa fa-add', 'active', 1, '2019-08-10 10:41:22', NULL, NULL, NULL, NULL),
(19, 6, 'btn_edit', 'Edit', 'fas fa-edit', 'active', 1, '2019-08-10 10:41:31', NULL, NULL, NULL, NULL),
(20, 6, 'btn_delete', 'Delete', 'fa fa-trash', 'active', 1, '2019-08-10 10:41:44', NULL, NULL, NULL, NULL),
(21, 7, 'btn_create', 'Create', 'fa fa-plus', 'active', 1, '2019-08-14 00:37:14', NULL, NULL, NULL, NULL),
(22, 7, 'btn_edit', 'Edit', 'fa fa-pencil', 'active', 1, '2019-08-14 00:37:36', NULL, NULL, NULL, NULL),
(23, 7, 'btn_delete', 'Delete', 'fa fa-trash', 'active', 1, '2019-08-14 00:37:51', NULL, NULL, NULL, NULL),
(24, 8, 'btn_create', 'Button Create', 'fas fa-plus', 'active', 1, '2019-08-19 05:40:53', 1, '2019-08-19 05:41:59', NULL, NULL),
(25, 8, 'btn_add', 'Button Add', 'fas fa-plus', 'active', 1, '2019-08-19 05:41:09', 1, '2019-08-19 05:41:50', NULL, NULL),
(26, 8, 'btn_edit', 'Button Edit', 'fas fa-edit', 'active', 1, '2019-08-19 05:41:27', NULL, NULL, NULL, NULL),
(27, 8, 'btn_delete', 'Button Delete', 'fa fa-trash', 'active', 1, '2019-08-19 05:41:39', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mmenu`
--

DROP TABLE IF EXISTS `mmenu`;
CREATE TABLE `mmenu` (
  `id_mmenu` int(11) NOT NULL,
  `id_maplikasi` int(11) NOT NULL DEFAULT '0',
  `id_parent` int(11) NOT NULL DEFAULT '0' COMMENT 'combobox',
  `urutan` int(5) NOT NULL DEFAULT '0',
  `nama_menu` varchar(100) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `url_menu` varchar(50) DEFAULT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mmenu`
--

INSERT INTO `mmenu` (`id_mmenu`, `id_maplikasi`, `id_parent`, `urutan`, `nama_menu`, `icon`, `url_menu`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(46, 6, 0, 1, 'Master', '', '', 'active', 1, '2019-08-10 10:37:32', NULL, NULL, NULL, NULL),
(47, 6, 46, 1, 'Test 1', '', 'test/Test1', 'active', 1, '2019-08-10 10:39:59', NULL, NULL, NULL, NULL),
(48, 6, 46, 2, 'Test 2', '', 'test/Test2', 'active', 1, '2019-08-10 10:40:43', NULL, NULL, NULL, NULL),
(49, 7, 0, 1, 'Master', '', '', 'nonactive', 1, '2019-08-14 00:41:07', NULL, NULL, 1, '2019-08-14 00:42:32'),
(50, 7, 0, 1, 'Master', '', '', 'active', 1, '2019-08-14 00:42:43', NULL, NULL, NULL, NULL),
(51, 7, 50, 1, 'Pekerjaan', '', 'pu/Pekerjaan', 'active', 1, '2019-08-14 00:43:08', NULL, NULL, NULL, NULL),
(52, 7, 50, 2, 'Badan Hukum', '', 'pu/Badanhukum', 'active', 1, '2019-08-14 01:36:59', NULL, NULL, NULL, NULL),
(53, 7, 50, 3, 'Jenis KPR', '', 'pu/Jeniskpr', 'active', 1, '2019-08-14 01:45:35', NULL, NULL, NULL, NULL),
(54, 7, 50, 4, 'Bank', '', 'pu/bank', 'active', 1, '2019-08-14 01:50:30', NULL, NULL, NULL, NULL),
(55, 7, 50, 5, 'Provinsi', '', 'pu/Provinsi', 'active', 1, '2019-08-14 06:58:36', NULL, NULL, NULL, NULL),
(56, 8, 0, 1, 'Penanda Tangan', '', 'pu/Penandatangan', 'active', 1, '2019-08-19 05:37:19', NULL, NULL, NULL, NULL),
(57, 8, 0, 2, 'Pekerjaan', '', 'pu/Pekerjaan', 'active', 1, '2019-08-19 05:38:23', NULL, NULL, NULL, NULL),
(58, 8, 0, 4, 'Jenis KPR', '', 'pu/Jeniskpr', 'active', 1, '2019-08-19 05:38:49', 1, '2019-08-19 07:12:32', NULL, NULL),
(59, 8, 0, 4, 'Badan hukum', '', 'pu/Badanhukum', 'active', 1, '2019-08-19 05:39:18', NULL, NULL, NULL, NULL),
(60, 8, 0, 5, 'Bank', '', 'pu/bank', 'active', 1, '2019-08-19 05:39:47', NULL, NULL, NULL, NULL),
(61, 8, 0, 7, 'Provinsi', '', 'pu/Provinsi', 'active', 1, '2019-08-19 05:40:15', 1, '2019-09-18 04:00:26', NULL, NULL),
(62, 8, 0, 3, 'Jenis Rumah', '', 'pu/Jenisrumah', 'active', 1, '2019-08-19 07:12:55', NULL, NULL, NULL, NULL),
(63, 8, 0, 8, 'Batasan Perumahan', '', '', 'active', 1, '2019-09-10 06:50:19', NULL, NULL, NULL, NULL),
(64, 8, 63, 1, 'Penghasilan', '', 'pu/Bataspenghasilan', 'active', 1, '2019-09-10 07:23:40', NULL, NULL, NULL, NULL),
(65, 8, 63, 2, 'Harga Jual Rumah', '', 'pu/Batashargajualrumah', 'active', 1, '2019-09-11 20:16:43', NULL, NULL, NULL, NULL),
(66, 8, 63, 3, 'Harga Jual Rumah Pengecualian', '', 'pu/Batashargajualrumahpengecualian', 'active', 1, '2019-09-11 21:31:37', NULL, NULL, NULL, NULL),
(67, 9, 0, 1, 'Pengajuan Bank', '', 'pu/Pengajuanbank', 'active', 1, '2019-09-12 05:38:19', NULL, NULL, NULL, NULL),
(68, 8, 0, 6, 'BI Rate', '', 'pu/Msukubungabi', 'active', 1, '2019-09-18 03:59:26', 1, '2019-09-18 04:00:12', NULL, NULL),
(69, 9, 0, 2, 'Validasi pengajuan bank', '', 'pu/Validasipengajuanbank', 'active', 1, '2019-09-26 00:34:00', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `proyek`
--

DROP TABLE IF EXISTS `proyek`;
CREATE TABLE `proyek` (
  `id_proyek` int(11) NOT NULL,
  `kode_proyek` varchar(10) NOT NULL,
  `nama_proyek` varchar(100) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `proyekpt`
--

DROP TABLE IF EXISTS `proyekpt`;
CREATE TABLE `proyekpt` (
  `id_proyekpt` int(11) NOT NULL,
  `id_proyek` int(11) NOT NULL,
  `id_pt` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pt`
--

DROP TABLE IF EXISTS `pt`;
CREATE TABLE `pt` (
  `id_pt` int(11) NOT NULL,
  `kode_pt` varchar(10) NOT NULL,
  `nama_pt` varchar(100) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roleapps`
--

DROP TABLE IF EXISTS `roleapps`;
CREATE TABLE `roleapps` (
  `id_role` int(11) NOT NULL,
  `roleapps` varchar(60) NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roleapps`
--

INSERT INTO `roleapps` (`id_role`, `roleapps`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 'Administrator', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'User', 'active', 1, '2019-06-27 08:27:37', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `useraccess`
--

DROP TABLE IF EXISTS `useraccess`;
CREATE TABLE `useraccess` (
  `id_user` int(11) NOT NULL,
  `id_role` int(11) NOT NULL COMMENT 'combobox',
  `username` varchar(120) NOT NULL,
  `password` text NOT NULL COMMENT 'dont',
  `fullname` varchar(50) NOT NULL,
  `email` varchar(120) NOT NULL,
  `no_handphone` varchar(50) DEFAULT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useraccess`
--

INSERT INTO `useraccess` (`id_user`, `id_role`, `username`, `password`, `fullname`, `email`, `no_handphone`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 1, 'administrator', '202cb962ac59075b964b07152d234b70', 'Administrator', 'ahmadriadi.ti@gmail.com', NULL, 'active', NULL, NULL, 23, '2019-07-05 09:42:37', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

DROP TABLE IF EXISTS `userlog`;
CREATE TABLE `userlog` (
  `id_userlog` int(11) NOT NULL,
  `id_useraccess` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `requestdata` text,
  `ipaddress` varchar(20) NOT NULL,
  `browser` varchar(160) NOT NULL,
  `systemdevice` varchar(50) NOT NULL,
  `accesstime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id_userlog`, `id_useraccess`, `url`, `requestdata`, `ipaddress`, `browser`, `systemdevice`, `accesstime`) VALUES
(1, 1, 'http://localhost:80/pu/index.php/Dashboard', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-25 17:38:38'),
(2, 1, 'http://localhost:80/pu/index.php/Dashboard/getnotification', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-25 17:38:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `maplikasi`
--
ALTER TABLE `maplikasi`
  ADD PRIMARY KEY (`id_maplikasi`),
  ADD KEY `kode_aplikasi` (`kode_aplikasi`);

--
-- Indexes for table `maplikasigroup`
--
ALTER TABLE `maplikasigroup`
  ADD PRIMARY KEY (`id_maplikasigroup`),
  ADD KEY `SECONDARY` (`id_maplikasi`);

--
-- Indexes for table `maplikasigroupmenu`
--
ALTER TABLE `maplikasigroupmenu`
  ADD PRIMARY KEY (`id_maplikasigroupmenu`),
  ADD KEY `SECONDARY` (`id_maplikasigroup`,`id_mmenu`);

--
-- Indexes for table `maplikasigroupmenubutton`
--
ALTER TABLE `maplikasigroupmenubutton`
  ADD PRIMARY KEY (`id_maplikasigroupmenubutton`),
  ADD KEY `SECONDARY` (`id_maplikasigroupmenu`,`id_mbutton`);

--
-- Indexes for table `maplikasigroupuser`
--
ALTER TABLE `maplikasigroupuser`
  ADD PRIMARY KEY (`id_maplikasigroupuser`),
  ADD KEY `SECONDARY` (`id_maplikasigroup`,`id_user`);

--
-- Indexes for table `maplikasigroupuserproyekpt`
--
ALTER TABLE `maplikasigroupuserproyekpt`
  ADD PRIMARY KEY (`id_maplikasigroupuserproyekpt`),
  ADD KEY `SECONDARY` (`id_maplikasigroupuser`);

--
-- Indexes for table `mbutton`
--
ALTER TABLE `mbutton`
  ADD PRIMARY KEY (`id_mbutton`),
  ADD KEY `SECONDARY` (`id_maplikasi`);

--
-- Indexes for table `mmenu`
--
ALTER TABLE `mmenu`
  ADD PRIMARY KEY (`id_mmenu`),
  ADD KEY `SECONDARY` (`id_maplikasi`,`id_parent`);

--
-- Indexes for table `proyek`
--
ALTER TABLE `proyek`
  ADD PRIMARY KEY (`id_proyek`);

--
-- Indexes for table `proyekpt`
--
ALTER TABLE `proyekpt`
  ADD PRIMARY KEY (`id_proyekpt`);

--
-- Indexes for table `pt`
--
ALTER TABLE `pt`
  ADD PRIMARY KEY (`id_pt`);

--
-- Indexes for table `roleapps`
--
ALTER TABLE `roleapps`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `useraccess`
--
ALTER TABLE `useraccess`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id_userlog`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `maplikasi`
--
ALTER TABLE `maplikasi`
  MODIFY `id_maplikasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `maplikasigroup`
--
ALTER TABLE `maplikasigroup`
  MODIFY `id_maplikasigroup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `maplikasigroupmenu`
--
ALTER TABLE `maplikasigroupmenu`
  MODIFY `id_maplikasigroupmenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `maplikasigroupmenubutton`
--
ALTER TABLE `maplikasigroupmenubutton`
  MODIFY `id_maplikasigroupmenubutton` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=243;

--
-- AUTO_INCREMENT for table `maplikasigroupuser`
--
ALTER TABLE `maplikasigroupuser`
  MODIFY `id_maplikasigroupuser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `maplikasigroupuserproyekpt`
--
ALTER TABLE `maplikasigroupuserproyekpt`
  MODIFY `id_maplikasigroupuserproyekpt` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mbutton`
--
ALTER TABLE `mbutton`
  MODIFY `id_mbutton` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `mmenu`
--
ALTER TABLE `mmenu`
  MODIFY `id_mmenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `proyek`
--
ALTER TABLE `proyek`
  MODIFY `id_proyek` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `proyekpt`
--
ALTER TABLE `proyekpt`
  MODIFY `id_proyekpt` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pt`
--
ALTER TABLE `pt`
  MODIFY `id_pt` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roleapps`
--
ALTER TABLE `roleapps`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `useraccess`
--
ALTER TABLE `useraccess`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id_userlog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
