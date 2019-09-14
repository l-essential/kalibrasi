-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2019 at 01:08 AM
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
(61, 8, 0, 6, 'Provinsi', '', 'pu/Provinsi', 'active', 1, '2019-08-19 05:40:15', NULL, NULL, NULL, NULL),
(62, 8, 0, 3, 'Jenis Rumah', '', 'pu/Jenisrumah', 'active', 1, '2019-08-19 07:12:55', NULL, NULL, NULL, NULL),
(63, 8, 0, 8, 'Batasan Perumahan', '', '', 'active', 1, '2019-09-10 06:50:19', NULL, NULL, NULL, NULL),
(64, 8, 63, 1, 'Penghasilan', '', 'pu/Bataspenghasilan', 'active', 1, '2019-09-10 07:23:40', NULL, NULL, NULL, NULL),
(65, 8, 63, 2, 'Harga Jual Rumah', '', 'pu/Batashargajualrumah', 'active', 1, '2019-09-11 20:16:43', NULL, NULL, NULL, NULL),
(66, 8, 63, 3, 'Harga Jual Rumah Pengecualian', '', 'pu/Batashargajualrumahpengecualian', 'active', 1, '2019-09-11 21:31:37', NULL, NULL, NULL, NULL),
(67, 9, 0, 1, 'Pengajuan Bank', '', 'pu/Pengajuanbank', 'active', 1, '2019-09-12 05:38:19', NULL, NULL, NULL, NULL);

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
(1, 1, 'http://localhost:80/sh1apps/core/apps/index.php/', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-08 23:35:14'),
(2, 1, 'http://localhost:80/sh1apps/core/apps/index.php/Dashboard', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-08 23:35:15'),
(3, 1, 'http://localhost:80/sh1apps/core/apps/index.php/Dashboard/getnotification', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-08 23:35:15'),
(4, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Jenisrumah', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-08 23:35:19'),
(5, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Jenisrumah/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-08 23:35:21'),
(6, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Jenisrumah/edit/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-08 23:35:30'),
(7, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Jenisrumah/index', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-08 23:35:32'),
(8, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Jeniskpr', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-08 23:35:36'),
(9, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Jeniskpr/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-08 23:35:37'),
(10, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Jeniskpr/edit/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-08 23:35:57'),
(11, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Jeniskpr/index', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-08 23:36:00'),
(12, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Jeniskpr/edit/2', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-08 23:48:10'),
(13, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Badanhukum', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-08 23:48:23'),
(14, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Badanhukum/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-08 23:48:24'),
(15, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/bank', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-08 23:48:28'),
(16, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Bank/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-08 23:48:29'),
(17, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Bank/edit/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-08 23:48:32'),
(18, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Bank/getdata', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-08 23:48:32'),
(19, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Bank/home_bankquota/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-08 23:48:32'),
(20, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Bank/home_bunga/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-08 23:48:32'),
(21, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Bank/home_detail/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-08 23:48:32'),
(22, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Bank/grid_bankquota/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-08 23:48:32'),
(23, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Bank/grid_bunga/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-08 23:48:32'),
(24, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Bank/grid_detail/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-08 23:48:32'),
(25, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Bank/add_bankquota/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-08 23:48:39'),
(26, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Provinsi', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-09 21:36:37'),
(27, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Provinsi/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-09 21:36:38'),
(28, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Provinsi/edit/2', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-09 21:37:08'),
(29, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Provinsi/getdata', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-09 21:37:09'),
(30, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Provinsi/home_detail/2', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-09 21:37:09'),
(31, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Provinsi/grid_detail/2', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-09 21:37:09'),
(32, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Provinsi/edit_detail/2', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-09 21:37:12'),
(33, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Provinsi/getdatakecamatan', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-09 21:37:13'),
(34, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Provinsi/home_kecamatan/2', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-09 21:37:13'),
(35, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Provinsi/grid_kecamatan/2', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-09 21:37:13'),
(36, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Provinsi/postdatadetail', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-09 21:37:21'),
(37, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Provinsi/index', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-09 21:37:28'),
(38, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Bank/edit_detail/2', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-09 21:48:52'),
(39, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Bank/index', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-09 21:51:07'),
(40, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Badanhukum/edit/2', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-09 21:51:16'),
(41, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Badanhukum/index', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-09 21:51:21'),
(42, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Bank/edit_bunga/2', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-09 22:01:44'),
(43, 1, 'http://localhost:80/sh1apps/core/apps/index.php/scr/Application', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-09 23:49:07'),
(44, 1, 'http://localhost:80/sh1apps/core/apps/index.php/scr/Application/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-09 23:49:08'),
(45, 1, 'http://localhost:80/sh1apps/core/apps/index.php/scr/Application/edit/8', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-09 23:49:13'),
(46, 1, 'http://localhost:80/sh1apps/core/apps/index.php/scr/Application/home_group/8', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-09 23:49:14'),
(47, 1, 'http://localhost:80/sh1apps/core/apps/index.php/scr/Application/grid_group/8', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-09 23:49:14'),
(48, 1, 'http://localhost:80/sh1apps/core/apps/index.php/scr/Application/home_menu/8', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-09 23:49:20'),
(49, 1, 'http://localhost:80/sh1apps/core/apps/index.php/scr/Application/grid_menu/8', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-09 23:49:20'),
(50, 1, 'http://localhost:80/sh1apps/core/apps/index.php/scr/Application/add_menu/8', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-09 23:49:23'),
(51, 1, 'http://localhost:80/sh1apps/core/apps/index.php/scr/Application/postdatamenuhttp://localhost:80/sh1apps/core/apps/index.php/scr/Application/postdatamenu/create', '{\"id_mmenu\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"id_parent\",\"checkdata2\":\"nama_menu\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_maplikasi\":\"8\",\"id_parent\":\"0\",\"nama_menu\":\"Batasan Perumahan\",\"urutan\":\"8\",\"icon\":\"\",\"url_menu\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-09 23:50:19'),
(52, 1, 'http://localhost:80/sh1apps/core/apps/index.php/scr/Useraccess', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-10 00:22:14'),
(53, 1, 'http://localhost:80/sh1apps/core/apps/index.php/scr/Useraccess/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-10 00:22:14'),
(54, 1, 'http://localhost:80/sh1apps/core/apps/index.php/scr/Application/postdatamenuhttp://localhost:80/sh1apps/core/apps/index.php/scr/Application/postdatamenu/create', '{\"id_mmenu\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"id_parent\",\"checkdata2\":\"nama_menu\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_maplikasi\":\"8\",\"id_parent\":\"63\",\"nama_menu\":\"Penghasilan\",\"urutan\":\"1\",\"icon\":\"\",\"url_menu\":\"pu\\/Bataspenghasilan\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-10 00:23:40'),
(55, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Bataspenghasilan', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-10 00:23:51'),
(56, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Bataspenghasilan/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-10 00:24:35'),
(57, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Bataspenghasilan/add', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-10 00:26:20'),
(58, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Bataspenghasilan/postdatahttp://localhost:80/sh1apps/core/apps/index.php/pu/Bataspenghasilan/postdata/create', '{\"id_m_bataspengasilan\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"tanggal_tmt\",\"checkdata2\":\"id_provinsi\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_provinsi\":\"3\",\"tanggal_tmt\":\"11-09-2019\",\"batasnilai_rumahtapak\":\"1000000\",\"batasnilai_rumahsusun\":\"2000000\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-10 22:38:08'),
(59, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Bataspenghasilan/index', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-10 22:38:08'),
(60, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Bataspenghasilan/postdatahttp://localhost:80/sh1apps/core/apps/index.php/pu/Bataspenghasilan/postdata/create', '{\"id_m_bataspengasilan\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"tanggal_tmt\",\"checkdata2\":\"id_provinsi\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_provinsi\":\"3\",\"tanggal_tmt\":\"11-09-2019\",\"batasnilai_rumahtapak\":\"1000000\",\"batasnilai_rumahsusun\":\"10000000\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-10 22:38:41'),
(61, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Bataspenghasilan/postdatahttp://localhost:80/sh1apps/core/apps/index.php/pu/Bataspenghasilan/postdata/create', '{\"id_m_bataspengasilan\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"tanggal_tmt\",\"checkdata2\":\"id_provinsi\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_provinsi\":\"3\",\"tanggal_tmt\":\"27-09-2019\",\"batasnilai_rumahtapak\":\"1000000\",\"batasnilai_rumahsusun\":\"10000000\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-10 22:38:51'),
(62, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Bataspenghasilan/edit/2', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-10 22:38:56'),
(63, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Bataspenghasilan/edit/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-10 22:39:52'),
(64, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Bataspenghasilan/postdatahttp://localhost:80/sh1apps/core/apps/index.php/pu/Bataspenghasilan/postdata/update', '{\"id_m_bataspengasilan\":\"1\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"tanggal_tmt\",\"checkdata2\":\"id_provinsi\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"tanggal_tmt\":\"11-09-2019\",\"batasnilai_rumahtapak\":\"1000000\",\"batasnilai_rumahsusun\":\"2000000\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-10 22:43:29'),
(65, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Bataspenghasilan/postdatahttp://localhost:80/sh1apps/core/apps/index.php/pu/Bataspenghasilan/postdata/update', '{\"id_m_bataspengasilan\":\"2\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"tanggal_tmt\",\"checkdata2\":\"id_provinsi\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"tanggal_tmt\":\"27-09-2019\",\"batasnilai_rumahtapak\":\"10000000\",\"batasnilai_rumahsusun\":\"10000000\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-10 22:43:37'),
(66, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Bataspenghasilan/postdatahttp://localhost:80/sh1apps/core/apps/index.php/pu/Bataspenghasilan/postdata/delete', '{\"actiondata\":\"delete\",\"id_m_bataspengasilan\":\"2\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-10 22:43:43'),
(67, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Bataspenghasilan/postdatahttp://localhost:80/sh1apps/core/apps/index.php/pu/Bataspenghasilan/postdata/delete', '{\"actiondata\":\"delete\",\"id_m_bataspengasilan\":\"1\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-10 22:43:47'),
(68, 1, 'http://localhost:80/sh1apps/core/apps/index.php/scr/Application/add', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 13:15:56'),
(69, 1, 'http://localhost:80/sh1apps/core/apps/index.php/scr/Application/home_group/0', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 13:15:57'),
(70, 1, 'http://localhost:80/sh1apps/core/apps/index.php/scr/Application/grid_group/0', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 13:15:57'),
(71, 1, 'http://localhost:80/sh1apps/core/apps/index.php/scr/Application/index', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 13:15:59'),
(72, 1, 'http://localhost:80/sh1apps/core/apps/index.php/scr/Application/postdatamenuhttp://localhost:80/sh1apps/core/apps/index.php/scr/Application/postdatamenu/create', '{\"id_mmenu\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"id_parent\",\"checkdata2\":\"nama_menu\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_maplikasi\":\"8\",\"id_parent\":\"63\",\"nama_menu\":\"Harga Jual Rumah\",\"urutan\":\"2\",\"icon\":\"\",\"url_menu\":\"pu\\/Batashargajualrumah\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 13:16:43'),
(73, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumah', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 14:19:31'),
(74, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumah/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 14:19:32'),
(75, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumah/add', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 14:21:38'),
(76, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumah/index', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 14:23:35'),
(77, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumah/postdatahttp://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumah/postdata/create', '{\"id_m_batashargarumah\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"tanggal_tmt\",\"checkdata2\":\"id_provinsi\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_provinsi\":\"2\",\"tanggal_tmt\":\"11-09-2019\",\"harga_perm2\":\"1000000\",\"batasnilai_rumahtapak\":\"128000000\",\"batasnilai_rumahsusun\":\"200000000\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 14:25:56'),
(78, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumah/edit/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 14:27:19'),
(79, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumah/postdatahttp://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumah/postdata/create', '{\"id_m_batashargarumah\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"tanggal_tmt\",\"checkdata2\":\"id_provinsi\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_provinsi\":\"4\",\"tanggal_tmt\":\"01-01-2018\",\"harga_perm2\":\"12222222\",\"batasnilai_rumahtapak\":\"877777777777777\",\"batasnilai_rumahsusun\":\"777777777777\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 14:27:50'),
(80, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumah/edit/2', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 14:27:56'),
(81, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumah/postdatahttp://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumah/postdata/update', '{\"id_m_batashargarumah\":\"2\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"tanggal_tmt\",\"checkdata2\":\"id_provinsi\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"tanggal_tmt\":\"01-01-2018\",\"harga_perm2\":\"12222222\",\"batasnilai_rumahtapak\":\"120000000\",\"batasnilai_rumahsusun\":\"900000000\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 14:28:21'),
(82, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumah/postdatahttp://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumah/postdata/update', '{\"id_m_batashargarumah\":\"2\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"tanggal_tmt\",\"checkdata2\":\"id_provinsi\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"tanggal_tmt\":\"01-01-2018\",\"harga_perm2\":\"12222222\",\"batasnilai_rumahtapak\":\"120000000\",\"batasnilai_rumahsusun\":\"1000000000\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 14:28:48'),
(83, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumah/postdatahttp://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumah/postdata/delete', '{\"actiondata\":\"delete\",\"id_m_batashargarumah\":\"2\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 14:28:53'),
(84, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Pekerjaan', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 14:29:28'),
(85, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Pekerjaan/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 14:29:29'),
(86, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Penandatangan', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 14:29:30'),
(87, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Penandatangan/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 14:29:31'),
(88, 1, 'http://localhost:80/sh1apps/core/apps/index.php/scr/Application/postdatamenuhttp://localhost:80/sh1apps/core/apps/index.php/scr/Application/postdatamenu/create', '{\"id_mmenu\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"id_parent\",\"checkdata2\":\"nama_menu\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_maplikasi\":\"8\",\"id_parent\":\"63\",\"nama_menu\":\"Harga Jual Rumah Pengecualian\",\"urutan\":\"3\",\"icon\":\"\",\"url_menu\":\"pu\\/Batashargajualrumahpengecualian\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 14:31:37'),
(89, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumahpengecualian', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 15:02:53'),
(90, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumahpengecualian/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 15:03:26'),
(91, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumahpengecualian/add', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 15:06:43'),
(92, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Combobox/getdynamic_kotakabupaten', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 16:15:26'),
(93, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Combobox/getdynamic_kecamatan', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 16:19:03'),
(94, 1, 'http://localhost:80/sh1apps/core/apps/index.php/', '', '127.0.0.1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 16:22:10'),
(95, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Combobox/getdynamic_desa', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 16:35:35'),
(96, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumahpengecualian/postdatahttp://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumahpengecualian/postdata/create', '{\"id_m_batashargarumahpengecualian\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"tanggal_tmt\",\"checkdata2\":\"id_provinsi\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_provinsi\":\"3\",\"id_kota\":\"3\",\"id_kecamatan\":\"\",\"tanggal_tmt\":\"11-09-2019\",\"harga_perm2\":\"1000000\",\"batasnilai_rumahtapak\":\"10000000\",\"batasnilai_rumahsusun\":\"100000000\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 16:40:12'),
(97, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumahpengecualian/index', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 16:40:12'),
(98, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumahpengecualian/postdatahttp://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumahpengecualian/postdata/create', '{\"id_m_batashargarumahpengecualian\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"tanggal_tmt\",\"checkdata2\":\"id_provinsi\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_provinsi\":\"2\",\"id_kota\":\"2\",\"id_kecamatan\":\"4\",\"id_desa\":\"\",\"tanggal_tmt\":\"12-09-2019\",\"harga_perm2\":\"1000000\",\"batasnilai_rumahtapak\":\"1000000000\",\"batasnilai_rumahsusun\":\"10000000000\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 16:41:53'),
(99, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumahpengecualian/edit/2', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 16:41:57'),
(100, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumahpengecualian/edit/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 16:42:11'),
(101, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumahpengecualian/postdatahttp://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumahpengecualian/postdata/update', '{\"id_m_batashargarumahpengecualian\":\"1\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"tanggal_tmt\",\"checkdata2\":\"id_provinsi\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_kota\":\"3\",\"tanggal_tmt\":\"11-09-2019\",\"harga_perm2\":\"1000000\",\"batasnilai_rumahtapak\":\"10000000\",\"batasnilai_rumahsusun\":\"100000000\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 16:42:15'),
(102, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumahpengecualian/postdatahttp://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumahpengecualian/postdata/update', '{\"id_m_batashargarumahpengecualian\":\"1\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"tanggal_tmt\",\"checkdata2\":\"id_provinsi\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_kota\":\"3\",\"id_kecamatan\":\"3\",\"tanggal_tmt\":\"11-09-2019\",\"harga_perm2\":\"1000000\",\"batasnilai_rumahtapak\":\"10000000\",\"batasnilai_rumahsusun\":\"100000000\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 16:42:37'),
(103, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumahpengecualian/postdatahttp://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumahpengecualian/postdata/update', '{\"id_m_batashargarumahpengecualian\":\"2\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"tanggal_tmt\",\"checkdata2\":\"id_provinsi\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_kota\":\"2\",\"id_kecamatan\":\"4\",\"id_desa\":\"5\",\"tanggal_tmt\":\"12-09-2019\",\"harga_perm2\":\"1000000\",\"batasnilai_rumahtapak\":\"1000000000\",\"batasnilai_rumahsusun\":\"2147483647\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 16:42:48'),
(104, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumahpengecualian/postdatahttp://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumahpengecualian/postdata/create', '{\"id_m_batashargarumahpengecualian\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"tanggal_tmt\",\"checkdata2\":\"id_provinsi\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_provinsi\":\"3\",\"id_kota\":\"\",\"tanggal_tmt\":\"11-09-2019\",\"harga_perm2\":\"\",\"batasnilai_rumahtapak\":\"10000000\",\"batasnilai_rumahsusun\":\"10000000000\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 16:46:30'),
(105, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumahpengecualian/postdatahttp://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumahpengecualian/postdata/create', '{\"id_m_batashargarumahpengecualian\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"tanggal_tmt\",\"checkdata2\":\"id_provinsi\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_provinsi\":\"5\",\"id_kota\":\"\",\"tanggal_tmt\":\"11-09-2019\",\"harga_perm2\":\"\",\"batasnilai_rumahtapak\":\"10000000\",\"batasnilai_rumahsusun\":\"10000000000\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 16:46:39'),
(106, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumahpengecualian/edit/3', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 16:52:13'),
(107, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumahpengecualian/postdatahttp://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumahpengecualian/postdata/update', '{\"id_m_batashargarumahpengecualian\":\"3\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"tanggal_tmt\",\"checkdata2\":\"id_provinsi\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"tanggal_tmt\":\"11-09-2019\",\"harga_perm2\":\"0\",\"batasnilai_rumahtapak\":\"10000000\",\"batasnilai_rumahsusun\":\"2147483647\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 16:52:17'),
(108, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumahpengecualian/postdatahttp://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumahpengecualian/postdata/create', '{\"id_m_batashargarumahpengecualian\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"tanggal_tmt\",\"checkdata2\":\"id_provinsi\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_provinsi\":\"2\",\"id_kota\":\"2\",\"id_kecamatan\":\"\",\"tanggal_tmt\":\"12-09-2019\",\"harga_perm2\":\"\",\"batasnilai_rumahtapak\":\"100000\",\"batasnilai_rumahsusun\":\"111111111111\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 16:53:16'),
(109, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumahpengecualian/postdatahttp://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumahpengecualian/postdata/create', '{\"id_m_batashargarumahpengecualian\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"tanggal_tmt\",\"checkdata2\":\"id_provinsi\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_provinsi\":\"4\",\"id_kota\":\"4\",\"tanggal_tmt\":\"12-09-2019\",\"harga_perm2\":\"\",\"batasnilai_rumahtapak\":\"10000000\",\"batasnilai_rumahsusun\":\"111111111111\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 16:53:31'),
(110, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumahpengecualian/postdatahttp://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumahpengecualian/postdata/update', '{\"id_m_batashargarumahpengecualian\":\"2\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"tanggal_tmt\",\"checkdata2\":\"id_provinsi\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_kota\":\"2\",\"id_kecamatan\":\"4\",\"id_desa\":\"5\",\"tanggal_tmt\":\"12-09-2019\",\"harga_perm2\":\"1000000\",\"batasnilai_rumahtapak\":\"10000000\",\"batasnilai_rumahsusun\":\"10000000\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 16:54:38'),
(111, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumahpengecualian/postdatahttp://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumahpengecualian/postdata/create', '{\"id_m_batashargarumahpengecualian\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"tanggal_tmt\",\"checkdata2\":\"id_provinsi\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_provinsi\":\"3\",\"id_kota\":\"\",\"tanggal_tmt\":\"12-09-2019\",\"harga_perm2\":\"1000000\",\"batasnilai_rumahtapak\":\"100000000\",\"batasnilai_rumahsusun\":\"29999999\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 17:02:08'),
(112, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumahpengecualian/postdatahttp://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumahpengecualian/postdata/create', '{\"id_m_batashargarumahpengecualian\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"tanggal_tmt\",\"checkdata2\":\"id_provinsi\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_provinsi\":\"3\",\"id_kota\":\"\",\"tanggal_tmt\":\"12-09-2019\",\"harga_perm2\":\"\",\"batasnilai_rumahtapak\":\"12999999\",\"batasnilai_rumahsusun\":\"199999999\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 17:02:44'),
(113, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumahpengecualian/postdatahttp://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumahpengecualian/postdata/create', '{\"id_m_batashargarumahpengecualian\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"tanggal_tmt\",\"checkdata2\":\"id_provinsi\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_provinsi\":\"3\",\"id_kota\":\"3\",\"id_kecamatan\":\"\",\"tanggal_tmt\":\"12-09-2019\",\"harga_perm2\":\"\",\"batasnilai_rumahtapak\":\"12999999\",\"batasnilai_rumahsusun\":\"199999999\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 17:03:06'),
(114, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumahpengecualian/postdatahttp://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumahpengecualian/postdata/create', '{\"id_m_batashargarumahpengecualian\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"tanggal_tmt\",\"checkdata2\":\"id_provinsi\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_provinsi\":\"3\",\"id_kota\":\"\",\"tanggal_tmt\":\"12-09-2019\",\"harga_perm2\":\"2000000\",\"batasnilai_rumahtapak\":\"20000000\",\"batasnilai_rumahsusun\":\"20000000\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 17:06:30'),
(115, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumahpengecualian/postdatahttp://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumahpengecualian/postdata/create', '{\"id_m_batashargarumahpengecualian\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"tanggal_tmt\",\"checkdata2\":\"id_provinsi\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_provinsi\":\"3\",\"id_kota\":\"3\",\"id_kecamatan\":\"\",\"tanggal_tmt\":\"12-09-2019\",\"harga_perm2\":\"2000000\",\"batasnilai_rumahtapak\":\"20000000\",\"batasnilai_rumahsusun\":\"20000000\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 17:06:37'),
(116, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumahpengecualian/postdatahttp://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumahpengecualian/postdata/create', '{\"id_m_batashargarumahpengecualian\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"tanggal_tmt\",\"checkdata2\":\"id_provinsi\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_provinsi\":\"3\",\"id_kota\":\"3\",\"id_kecamatan\":\"3\",\"tanggal_tmt\":\"12-09-2019\",\"harga_perm2\":\"2000000\",\"batasnilai_rumahtapak\":\"20000000\",\"batasnilai_rumahsusun\":\"20000000\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 17:06:43'),
(117, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumahpengecualian/postdatahttp://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumahpengecualian/postdata/update', '{\"id_m_batashargarumahpengecualian\":\"3\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"tanggal_tmt\",\"checkdata2\":\"id_provinsi\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_kota\":\"3\",\"id_kecamatan\":\"3\",\"tanggal_tmt\":\"12-09-2019\",\"harga_perm2\":\"2000000\",\"batasnilai_rumahtapak\":\"20000000\",\"batasnilai_rumahsusun\":\"30000000\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 17:06:58'),
(118, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumahpengecualian/postdatahttp://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumahpengecualian/postdata/delete', '{\"actiondata\":\"delete\",\"id_m_batashargarumahpengecualian\":\"3\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 17:07:03'),
(119, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumahpengecualian/postdatahttp://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumahpengecualian/postdata/delete', '{\"actiondata\":\"delete\",\"id_m_batashargarumahpengecualian\":\"2\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 17:07:07'),
(120, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumahpengecualian/postdatahttp://localhost:80/sh1apps/core/apps/index.php/pu/Batashargajualrumahpengecualian/postdata/delete', '{\"actiondata\":\"delete\",\"id_m_batashargarumahpengecualian\":\"1\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 17:07:11'),
(121, 1, 'http://localhost:80/sh1apps/core/apps/index.php/scr/Application/edit/9', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 22:37:37'),
(122, 1, 'http://localhost:80/sh1apps/core/apps/index.php/scr/Application/home_group/9', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 22:37:37'),
(123, 1, 'http://localhost:80/sh1apps/core/apps/index.php/scr/Application/grid_group/9', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 22:37:38'),
(124, 1, 'http://localhost:80/sh1apps/core/apps/index.php/scr/Application/home_menu/9', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 22:37:44'),
(125, 1, 'http://localhost:80/sh1apps/core/apps/index.php/scr/Application/grid_menu/9', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 22:37:45'),
(126, 1, 'http://localhost:80/sh1apps/core/apps/index.php/scr/Application/add_menu/9', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 22:37:47'),
(127, 1, 'http://localhost:80/sh1apps/core/apps/index.php/scr/Application/postdatamenuhttp://localhost:80/sh1apps/core/apps/index.php/scr/Application/postdatamenu/create', '{\"id_mmenu\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"id_parent\",\"checkdata2\":\"nama_menu\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_maplikasi\":\"9\",\"id_parent\":\"0\",\"nama_menu\":\"Pengajuan Bank\",\"urutan\":\"1\",\"icon\":\"\",\"url_menu\":\"pu\\/Pengajuanbank\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 22:38:19'),
(128, 1, 'http://localhost:80/sh1apps/core/apps/index.php/scr/Application/add_group/9', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 22:38:30'),
(129, 1, 'http://localhost:80/sh1apps/core/apps/index.php/scr/Application/home_groupuser/17', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 22:38:37'),
(130, 1, 'http://localhost:80/sh1apps/core/apps/index.php/scr/Application/grid_groupuser/17', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 22:38:37'),
(131, 1, 'http://localhost:80/sh1apps/core/apps/index.php/scr/Application/add_groupuser/17', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 22:38:39'),
(132, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Penandatangan/add', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 23:49:05'),
(133, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Penandatangan/index', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 23:49:09'),
(134, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Pengajuanbank', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 23:54:51'),
(135, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Pengajuanbank/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-11 23:54:51'),
(136, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Pengajuanbank/add', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-12 00:00:16'),
(137, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Combobox/getdynamic_bankquota', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-12 00:07:48'),
(138, 1, 'http://localhost:80/sh1apps/core/apps/index.php/scr/Useraccess/edit/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-12 03:55:54'),
(139, 1, 'http://localhost:80/sh1apps/core/apps/index.php/scr/Useraccess/index', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-12 03:57:52'),
(140, 1, 'http://localhost:80/sh1apps/core/apps/index.php/scr/Application/add_group/8', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-12 04:01:13'),
(141, 1, 'http://localhost:80/sh1apps/core/apps/index.php/scr/Application/home_groupuser/15', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-12 04:01:52'),
(142, 1, 'http://localhost:80/sh1apps/core/apps/index.php/scr/Application/grid_groupuser/15', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-12 04:01:53'),
(143, 1, 'http://localhost:80/sh1apps/core/apps/index.php/scr/Application/home_groupmenu/15', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-12 04:01:58'),
(144, 1, 'http://localhost:80/sh1apps/core/apps/index.php/scr/Application/getgroupmenulist', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-12 04:01:59'),
(145, 1, 'http://localhost:80/sh1apps/core/apps/index.php/scr/Application/home_groupmenubutton/15', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-12 04:02:05'),
(146, 1, 'http://localhost:80/sh1apps/core/apps/index.php/scr/Application/getstatusbuttunaccess', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-12 04:02:05'),
(147, 1, 'http://localhost:80/sh1apps/core/apps/index.php/scr/Application/postgroupmenuhttp://localhost:80/sh1apps/core/apps/index.php/scr/Application/postgroupmenu/create', '{\"id_mmenu\":\"56\",\"actiondata\":\"create\",\"id_maplikasi\":\"8\",\"id_maplikasigroup\":\"15\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-12 04:02:13'),
(148, 1, 'http://localhost:80/sh1apps/core/apps/index.php/scr/Application/getbuttoncheckbox', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-12 04:02:16'),
(149, 1, 'http://localhost:80/sh1apps/core/apps/index.php/scr/Application/postgroupmenuhttp://localhost:80/sh1apps/core/apps/index.php/scr/Application/postgroupmenu/delete', '{\"id_mmenu\":\"56\",\"actiondata\":\"delete\",\"id_maplikasi\":\"8\",\"id_maplikasigroup\":\"15\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-12 04:02:33'),
(150, 1, 'http://localhost:80/sh1apps/core/apps/index.php/scr/Application/edit/6', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-12 04:03:10'),
(151, 1, 'http://localhost:80/sh1apps/core/apps/index.php/scr/Application/home_group/6', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-12 04:03:11'),
(152, 1, 'http://localhost:80/sh1apps/core/apps/index.php/scr/Application/grid_group/6', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-12 04:03:11'),
(153, 1, 'http://localhost:80/sh1apps/core/apps/index.php/scr/Application/home_groupuser/10', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-12 04:03:24'),
(154, 1, 'http://localhost:80/sh1apps/core/apps/index.php/scr/Application/grid_groupuser/10', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-12 04:03:25'),
(155, 1, 'http://localhost:80/sh1apps/core/apps/index.php/scr/Application/add_groupuser/10', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-12 04:03:29'),
(156, 1, 'http://localhost:80/sh1apps/core/apps/index.php/scr/Application/postdatagroupuserhttp://localhost:80/sh1apps/core/apps/index.php/scr/Application/postdatagroupuser/create', '{\"id_maplikasigroupuser\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"id_maplikasigroup\",\"checkdata2\":\"id_user\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_maplikasigroup\":\"10\",\"id_user\":\"1\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-12 04:03:34'),
(157, 1, 'http://localhost:80/sh1apps/core/apps/index.php/scr/Application/postdatagroupuserhttp://localhost:80/sh1apps/core/apps/index.php/scr/Application/postdatagroupuser/delete', '{\"actiondata\":\"delete\",\"id_maplikasigroupuser\":\"42\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-12 04:04:04'),
(158, 1, 'http://localhost:80/sh1apps/core/apps/index.php/scr/Application/home_menu/6', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-12 04:04:17'),
(159, 1, 'http://localhost:80/sh1apps/core/apps/index.php/scr/Application/grid_menu/6', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-12 04:04:17'),
(160, 1, 'http://localhost:80/sh1apps/core/apps/index.php/scr/Application/home_button/6', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-12 04:04:36'),
(161, 1, 'http://localhost:80/sh1apps/core/apps/index.php/scr/Application/grid_button/6', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-12 04:04:37'),
(162, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Pekerjaan/edit/4', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-12 04:05:49'),
(163, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Pekerjaan/index', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-12 04:05:52'),
(164, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Pekerjaan/postdatahttp://localhost:80/sh1apps/core/apps/index.php/pu/Pekerjaan/postdata/delete', '{\"actiondata\":\"delete\",\"id_pekerjaan\":\"4\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-12 04:06:26'),
(165, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Pekerjaan/add', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-12 04:06:28'),
(166, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Pekerjaan/postdatahttp://localhost:80/sh1apps/core/apps/index.php/pu/Pekerjaan/postdata/create', '{\"id_pekerjaan\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"kode\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"kode\":\"3\",\"pekerjaan\":\"test\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-12 04:06:37'),
(167, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Pekerjaan/postdatahttp://localhost:80/sh1apps/core/apps/index.php/pu/Pekerjaan/postdata/create', '{\"id_pekerjaan\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"kode\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"kode\":\"4\",\"pekerjaan\":\"WIRASWASTA\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-12 04:06:49'),
(168, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Provinsi/add', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-12 04:17:03'),
(169, 1, 'http://localhost:80/sh1apps/core/apps/index.php/pu/Pengajuanbank/index', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2019-09-12 04:58:19');

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
  MODIFY `id_mmenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

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
  MODIFY `id_userlog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
