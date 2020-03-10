-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2020 at 02:53 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lessential_accessapps`
--
CREATE DATABASE IF NOT EXISTS `lessential_accessapps` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `lessential_accessapps`;

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
  `icon` varchar(25) NOT NULL,
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

INSERT INTO `maplikasi` (`id_maplikasi`, `sortdata`, `kode_aplikasi`, `nama_aplikasi`, `icon`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(6, 0, 'test', 'Module Test', '', 'nonactive', 1, '2019-08-10 10:34:17', NULL, NULL, 1, '2020-02-12 08:23:02'),
(7, 0, 'sp', 'Belum Tau', 'fas fa-retweet', 'active', 1, '2019-08-14 00:36:00', 65, '2020-02-27 12:58:29', NULL, NULL),
(8, 5, 'pu', 'Penyimpangan', 'fas fa-map-signs', 'active', 1, '2019-08-19 05:35:15', 66, '2020-02-27 13:55:44', NULL, NULL),
(9, 6, 'rtr', 'Retur', 'fas fa-retweet', 'active', 1, '2019-08-19 05:35:29', 56, '2020-02-22 13:39:36', NULL, NULL),
(10, 7, 'prl', 'Pelatihan', 'fas fa-book-reader', 'active', 1, '2019-08-19 05:35:35', 66, '2020-02-27 14:00:40', NULL, NULL),
(11, 2, 'utl', 'Utility', 'fab fa-dropbox', 'active', 1, '2019-08-19 05:35:44', 56, '2020-02-22 14:01:54', NULL, NULL),
(12, 0, 'mst', 'master', '', 'nonactive', 1, '2020-02-12 08:30:04', NULL, NULL, 1, '2020-02-12 09:32:16'),
(13, 0, 'trs', '123', '', 'nonactive', 1, '2020-02-12 08:34:49', NULL, NULL, 1, '2020-02-12 13:33:29'),
(14, 0, 'tes123', '12345', '', 'nonactive', 1, '2020-02-12 08:36:19', NULL, NULL, 1, '2020-02-12 13:33:34'),
(15, 0, 'qqq', 'qqqq', '', 'nonactive', 1, '2020-02-12 13:52:18', NULL, NULL, 1, '2020-02-12 13:52:28'),
(16, 0, 'mst1', '123', '', 'nonactive', 1, '2020-02-12 13:53:23', NULL, NULL, 1, '2020-02-12 13:53:30'),
(17, 0, 'mst1', 'tes', '', 'nonactive', 1, '2020-02-12 13:55:58', NULL, NULL, 1, '2020-02-12 15:05:01'),
(18, 1, 'access', 'Access Management', 'fas fa-user-secret', 'active', 1, '2020-02-12 15:09:48', 56, '2020-02-22 13:08:33', NULL, NULL),
(19, 0, 'mst1', 'nama tes', '', 'nonactive', 1, '2020-02-12 21:09:55', NULL, NULL, 1, '2020-02-12 21:10:11'),
(20, 4, 'asm', 'Asset Management', 'fas fa-pallet', 'active', 56, '2020-02-22 13:05:24', 66, '2020-02-27 13:55:24', NULL, NULL),
(21, 3, 'prt', 'Portal', 'fas fa-bullhorn', 'active', 66, '2020-02-27 13:55:16', 66, '2020-02-27 14:03:37', NULL, NULL);

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
(12, 7, 'admin', 'Super Administrator', 'N', 'active', 1, '2019-08-14 00:36:21', 1, '2020-02-12 08:25:45', NULL, NULL),
(13, 7, 'generaluser', 'General User', 'N', 'active', 1, '2019-08-14 00:36:33', 1, '2020-02-12 08:25:35', NULL, NULL),
(14, 8, 'admin', 'Administrator', 'N', 'nonactive', 1, '2019-08-19 05:36:06', 1, '2020-02-10 00:27:29', 1, '2020-02-12 15:33:00'),
(15, 8, 'ACC', 'All Access', 'Y', 'nonactive', 1, '2019-08-19 05:36:17', 1, '2020-02-19 08:55:30', 1, '2020-02-21 11:45:11'),
(16, 10, 'admin', 'Administrator', 'Y', 'active', 1, '2019-08-19 05:43:05', NULL, NULL, NULL, NULL),
(17, 9, 'admin', 'Administrator', 'Y', 'active', 1, '2019-08-19 05:43:19', NULL, NULL, NULL, NULL),
(18, 11, 'admin', 'Administrator', 'Y', 'active', 1, '2019-08-19 05:48:01', NULL, NULL, NULL, NULL),
(19, 8, 'UPP', 'User Pelapor', 'N', 'active', 1, '2020-01-23 16:44:55', 1, '2020-02-13 21:40:40', NULL, NULL),
(20, 8, 'tes', 'tes', 'N', 'nonactive', 1, '2020-02-10 00:30:40', NULL, NULL, 1, '2020-02-12 15:32:42'),
(21, 12, 'asal', 'coba', 'N', 'active', 1, '2020-02-12 08:31:11', NULL, NULL, NULL, NULL),
(22, 18, 'accs', 'all Access Management', 'N', 'active', 1, '2020-02-12 15:11:37', 65, '2020-02-27 13:13:36', NULL, NULL),
(23, 8, 'UA', 'User Admin', 'N', 'active', 1, '2020-02-21 11:35:30', NULL, NULL, NULL, NULL),
(24, 8, 'admt', 'administrator', 'Y', 'nonactive', 1, '2020-02-21 11:44:30', 1, '2020-02-21 11:44:42', 1, '2020-02-21 11:47:56'),
(25, 8, 'adt', 'administrator', 'Y', 'active', 1, '2020-02-21 11:47:31', NULL, NULL, NULL, NULL),
(26, 8, 'uap', 'user approve', 'N', 'active', 56, '2020-02-21 13:18:13', NULL, NULL, NULL, NULL),
(27, 10, 'ua', 'user admin', 'N', 'active', 56, '2020-02-21 13:41:10', NULL, NULL, NULL, NULL),
(28, 20, 'adm', 'administrator', 'Y', 'active', 56, '2020-02-22 13:06:26', NULL, NULL, NULL, NULL),
(29, 11, 'usr', 'User biasa', 'N', 'active', 56, '2020-02-22 21:04:32', NULL, NULL, NULL, NULL),
(30, 18, 'coba', 'coba123', 'N', 'nonactive', 56, '2020-02-25 10:05:13', NULL, NULL, 56, '2020-02-25 10:06:48'),
(31, 18, 'RQS', 'Reques user', 'N', 'active', 65, '2020-02-26 13:52:15', NULL, NULL, NULL, NULL),
(32, 21, 'adtr', 'administrator', 'N', 'active', 66, '2020-02-27 13:57:03', NULL, NULL, NULL, NULL);

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
(26, 15, 56, 'nonactive', 1, '2019-09-12 11:02:13', 1, '2020-02-08 06:55:18', 1, '2020-02-09 20:32:45'),
(27, 19, 56, 'active', 1, '2020-01-23 16:46:14', NULL, NULL, NULL, NULL),
(28, 19, 57, 'active', 1, '2020-01-23 16:46:14', NULL, NULL, NULL, NULL),
(29, 19, 62, 'active', 1, '2020-01-23 16:46:15', NULL, NULL, NULL, NULL),
(30, 19, 59, 'active', 1, '2020-01-23 16:46:17', NULL, NULL, NULL, NULL),
(31, 19, 58, 'active', 1, '2020-01-23 16:46:17', NULL, NULL, NULL, NULL),
(32, 19, 60, 'active', 1, '2020-01-23 16:46:18', NULL, NULL, NULL, NULL),
(33, 19, 68, 'active', 1, '2020-01-23 16:46:19', NULL, NULL, NULL, NULL),
(34, 10, 46, 'active', 1, '2020-02-08 06:50:56', NULL, NULL, NULL, NULL),
(35, 10, 47, 'active', 1, '2020-02-08 06:50:56', NULL, NULL, NULL, NULL),
(36, 10, 48, 'active', 1, '2020-02-08 06:50:56', NULL, NULL, NULL, NULL),
(37, 12, 51, 'nonactive', 1, '2020-02-09 20:30:41', 1, '2020-02-12 08:03:03', 1, '2020-02-12 08:03:13'),
(38, 14, 56, 'nonactive', 1, '2020-02-09 23:23:49', NULL, NULL, 1, '2020-02-10 00:26:14'),
(39, 14, 62, 'nonactive', 1, '2020-02-10 00:26:34', NULL, NULL, 1, '2020-02-10 00:26:44'),
(40, 14, 58, 'nonactive', 1, '2020-02-10 00:26:35', NULL, NULL, 1, '2020-02-10 00:26:45'),
(41, 14, 57, 'nonactive', 1, '2020-02-10 00:29:00', NULL, NULL, 1, '2020-02-10 00:29:06'),
(42, 15, 74, 'active', 1, '2020-02-11 14:09:28', 1, '2020-02-21 11:43:29', 0, '0000-00-00 00:00:00'),
(43, 12, 50, 'nonactive', 1, '2020-02-12 08:03:03', NULL, NULL, 1, '2020-02-12 08:03:13'),
(44, 12, 52, 'nonactive', 1, '2020-02-12 08:03:03', NULL, NULL, 1, '2020-02-12 08:03:13'),
(45, 12, 53, 'nonactive', 1, '2020-02-12 08:03:03', NULL, NULL, 1, '2020-02-12 08:03:13'),
(46, 12, 54, 'nonactive', 1, '2020-02-12 08:03:03', NULL, NULL, 1, '2020-02-12 08:03:13'),
(47, 12, 55, 'nonactive', 1, '2020-02-12 08:03:03', NULL, NULL, 1, '2020-02-12 08:03:13'),
(48, 14, 60, 'active', 1, '2020-02-12 08:27:42', 1, '2020-02-12 08:33:36', 0, '0000-00-00 00:00:00'),
(49, 14, 80, 'active', 1, '2020-02-12 08:33:53', NULL, NULL, NULL, NULL),
(50, 22, 81, 'active', 1, '2020-02-12 15:14:59', 56, '2020-02-21 13:24:53', 0, '0000-00-00 00:00:00'),
(51, 19, 80, 'nonactive', 1, '2020-02-12 15:31:41', NULL, NULL, 1, '2020-02-12 15:39:33'),
(52, 22, 82, 'active', 1, '2020-02-12 21:39:37', 1, '2020-02-12 21:42:39', 0, '0000-00-00 00:00:00'),
(53, 22, 83, 'active', 1, '2020-02-13 09:04:32', 56, '2020-02-21 13:25:45', 0, '0000-00-00 00:00:00'),
(54, 15, 63, 'active', 1, '2020-02-13 22:33:59', 1, '2020-02-21 11:43:29', 0, '0000-00-00 00:00:00'),
(55, 15, 76, 'active', 1, '2020-02-13 22:33:59', 1, '2020-02-21 11:43:29', 0, '0000-00-00 00:00:00'),
(56, 15, 75, 'active', 1, '2020-02-13 22:33:59', 1, '2020-02-21 11:43:29', 0, '0000-00-00 00:00:00'),
(57, 15, 77, 'active', 1, '2020-02-13 22:33:59', 1, '2020-02-21 11:43:29', 0, '0000-00-00 00:00:00'),
(58, 15, 78, 'active', 1, '2020-02-13 22:33:59', 1, '2020-02-21 11:43:29', 0, '0000-00-00 00:00:00'),
(59, 15, 79, 'active', 1, '2020-02-13 22:33:59', 1, '2020-02-21 11:43:29', 0, '0000-00-00 00:00:00'),
(60, 15, 60, 'active', 1, '2020-02-17 15:11:48', 1, '2020-02-18 10:34:18', 0, '0000-00-00 00:00:00'),
(61, 15, 80, 'active', 1, '2020-02-18 10:35:06', 1, '2020-02-21 11:43:28', 0, '0000-00-00 00:00:00'),
(62, 23, 60, 'active', 1, '2020-02-21 11:35:42', NULL, NULL, NULL, NULL),
(63, 15, 85, 'active', 1, '2020-02-21 11:43:29', NULL, NULL, NULL, NULL),
(64, 23, 80, 'active', 56, '2020-02-21 13:05:00', NULL, NULL, NULL, NULL),
(65, 23, 63, 'active', 56, '2020-02-21 13:05:01', NULL, NULL, NULL, NULL),
(66, 23, 76, 'active', 56, '2020-02-21 13:05:01', NULL, NULL, NULL, NULL),
(67, 23, 74, 'active', 56, '2020-02-21 13:05:01', NULL, NULL, NULL, NULL),
(68, 23, 75, 'active', 56, '2020-02-21 13:05:01', NULL, NULL, NULL, NULL),
(69, 23, 77, 'active', 56, '2020-02-21 13:05:01', NULL, NULL, NULL, NULL),
(70, 23, 85, 'active', 56, '2020-02-21 13:05:01', NULL, NULL, NULL, NULL),
(71, 23, 78, 'active', 56, '2020-02-21 13:05:01', NULL, NULL, NULL, NULL),
(72, 23, 79, 'active', 56, '2020-02-21 13:05:01', NULL, NULL, NULL, NULL),
(73, 26, 60, 'active', 56, '2020-02-21 13:18:38', NULL, NULL, NULL, NULL),
(74, 22, 89, 'active', 56, '2020-02-22 12:56:22', NULL, NULL, NULL, NULL),
(75, 25, 63, 'active', 56, '2020-02-22 20:58:56', 56, '2020-02-22 20:59:06', 0, '0000-00-00 00:00:00'),
(76, 25, 76, 'active', 56, '2020-02-22 20:58:56', 56, '2020-02-22 20:59:06', 0, '0000-00-00 00:00:00'),
(77, 25, 74, 'active', 56, '2020-02-22 20:58:56', 56, '2020-02-22 20:59:06', 0, '0000-00-00 00:00:00'),
(78, 25, 75, 'active', 56, '2020-02-22 20:58:56', 56, '2020-02-22 20:59:06', 0, '0000-00-00 00:00:00'),
(79, 25, 77, 'active', 56, '2020-02-22 20:58:56', 56, '2020-02-22 20:59:06', 0, '0000-00-00 00:00:00'),
(80, 25, 85, 'active', 56, '2020-02-22 20:58:56', 56, '2020-02-22 20:59:06', 0, '0000-00-00 00:00:00'),
(81, 25, 78, 'active', 56, '2020-02-22 20:58:56', 56, '2020-02-22 20:59:06', 0, '0000-00-00 00:00:00'),
(82, 25, 79, 'active', 56, '2020-02-22 20:58:56', 56, '2020-02-22 20:59:06', 0, '0000-00-00 00:00:00'),
(83, 29, 88, 'active', 56, '2020-02-22 21:04:48', NULL, NULL, NULL, NULL),
(84, 22, 96, 'active', 56, '2020-02-24 15:30:52', 56, '2020-02-25 09:53:16', 0, '0000-00-00 00:00:00'),
(85, 30, 96, 'active', 56, '2020-02-25 10:05:27', NULL, NULL, NULL, NULL),
(86, 31, 96, 'active', 65, '2020-02-26 13:52:27', NULL, NULL, NULL, NULL),
(87, 32, 97, 'active', 66, '2020-02-27 14:06:40', NULL, NULL, NULL, NULL),
(88, 32, 98, 'active', 66, '2020-02-27 14:06:41', 1, '2020-02-27 17:03:00', 0, '0000-00-00 00:00:00'),
(89, 32, 99, 'active', 66, '2020-02-27 14:06:41', NULL, NULL, NULL, NULL),
(90, 32, 100, 'active', 66, '2020-02-27 14:06:42', NULL, NULL, NULL, NULL),
(91, 32, 103, 'active', 1, '2020-02-27 16:45:57', NULL, NULL, NULL, NULL),
(92, 32, 102, 'active', 1, '2020-02-27 16:45:58', NULL, NULL, NULL, NULL),
(93, 32, 101, 'active', 1, '2020-02-27 16:45:58', 1, '2020-02-27 17:03:00', 0, '0000-00-00 00:00:00'),
(94, 32, 104, 'active', 1, '2020-02-27 17:03:00', NULL, NULL, NULL, NULL);

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
(242, 25, 20, 'active', 1, '2019-08-10 10:42:21', NULL, NULL, NULL, NULL),
(243, 27, 18, 'active', 1, '2020-01-23 16:46:35', 1, '2020-01-23 16:47:08', 0, '0000-00-00 00:00:00'),
(244, 27, 19, 'nonactive', 1, '2020-01-23 16:46:35', 1, '2020-01-23 16:47:01', 1, '2020-01-23 16:47:04'),
(245, 27, 20, 'nonactive', 1, '2020-01-23 16:46:36', 1, '2020-01-23 16:47:01', 1, '2020-01-23 16:47:04'),
(246, 27, 21, 'nonactive', 1, '2020-01-23 16:46:36', 1, '2020-01-23 16:47:01', 1, '2020-01-23 16:47:04'),
(247, 27, 22, 'nonactive', 1, '2020-01-23 16:46:36', 1, '2020-01-23 16:47:01', 1, '2020-01-23 16:47:04'),
(248, 27, 23, 'nonactive', 1, '2020-01-23 16:46:36', 1, '2020-01-23 16:47:01', 1, '2020-01-23 16:47:04'),
(249, 27, 24, 'nonactive', 1, '2020-01-23 16:46:36', 1, '2020-01-23 16:47:01', 1, '2020-01-23 16:47:04'),
(250, 27, 25, 'nonactive', 1, '2020-01-23 16:46:36', 1, '2020-01-23 16:47:01', 1, '2020-01-23 16:47:04'),
(251, 27, 26, 'nonactive', 1, '2020-01-23 16:46:36', 1, '2020-01-23 16:47:02', 1, '2020-01-23 16:47:04'),
(252, 27, 27, 'nonactive', 1, '2020-01-23 16:46:36', 1, '2020-01-23 16:47:02', 1, '2020-01-23 16:47:04'),
(253, 34, 18, 'active', 1, '2020-02-08 06:51:01', NULL, NULL, NULL, NULL),
(254, 34, 19, 'active', 1, '2020-02-08 06:51:01', NULL, NULL, NULL, NULL),
(255, 34, 20, 'active', 1, '2020-02-08 06:51:01', NULL, NULL, NULL, NULL),
(256, 35, 18, 'active', 1, '2020-02-08 06:51:06', NULL, NULL, NULL, NULL),
(257, 35, 19, 'active', 1, '2020-02-08 06:51:08', NULL, NULL, NULL, NULL),
(258, 35, 20, 'active', 1, '2020-02-08 06:51:08', NULL, NULL, NULL, NULL),
(259, 36, 18, 'active', 1, '2020-02-08 06:51:10', NULL, NULL, NULL, NULL),
(260, 36, 19, 'active', 1, '2020-02-08 06:51:10', NULL, NULL, NULL, NULL),
(261, 36, 20, 'active', 1, '2020-02-08 06:51:11', NULL, NULL, NULL, NULL),
(262, 28, 24, 'active', 1, '2020-02-10 00:12:34', 1, '2020-02-10 00:12:37', 0, '0000-00-00 00:00:00'),
(263, 28, 25, 'active', 1, '2020-02-10 00:12:34', 1, '2020-02-10 00:12:37', 0, '0000-00-00 00:00:00'),
(264, 28, 26, 'active', 1, '2020-02-10 00:12:34', 1, '2020-02-10 00:12:37', 0, '0000-00-00 00:00:00'),
(265, 28, 27, 'active', 1, '2020-02-10 00:12:34', 1, '2020-02-10 00:12:37', 0, '0000-00-00 00:00:00'),
(266, 42, 25, 'active', 1, '2020-02-11 14:09:36', 1, '2020-02-13 22:34:13', 0, '0000-00-00 00:00:00'),
(267, 42, 26, 'active', 1, '2020-02-11 14:09:36', 1, '2020-02-13 22:34:13', 0, '0000-00-00 00:00:00'),
(268, 42, 27, 'active', 1, '2020-02-11 14:09:36', 1, '2020-02-13 22:34:13', 0, '0000-00-00 00:00:00'),
(269, 49, 18, 'nonactive', 1, '2020-02-12 08:33:57', NULL, NULL, 1, '2020-02-12 08:34:00'),
(270, 49, 19, 'nonactive', 1, '2020-02-12 08:33:57', NULL, NULL, 1, '2020-02-12 08:34:00'),
(271, 49, 20, 'nonactive', 1, '2020-02-12 08:33:57', NULL, NULL, 1, '2020-02-12 08:34:00'),
(272, 49, 21, 'nonactive', 1, '2020-02-12 08:33:57', NULL, NULL, 1, '2020-02-12 08:34:00'),
(273, 49, 22, 'nonactive', 1, '2020-02-12 08:33:58', NULL, NULL, 1, '2020-02-12 08:34:01'),
(274, 49, 23, 'nonactive', 1, '2020-02-12 08:33:58', NULL, NULL, 1, '2020-02-12 08:34:01'),
(275, 49, 25, 'nonactive', 1, '2020-02-12 08:33:58', NULL, NULL, 1, '2020-02-12 08:34:01'),
(276, 49, 26, 'nonactive', 1, '2020-02-12 08:33:58', NULL, NULL, 1, '2020-02-12 08:34:01'),
(277, 49, 27, 'nonactive', 1, '2020-02-12 08:33:58', NULL, NULL, 1, '2020-02-12 08:34:01'),
(278, 48, 25, 'nonactive', 1, '2020-02-12 14:53:56', 1, '2020-02-12 14:54:00', 1, '2020-02-12 14:54:06'),
(279, 48, 26, 'nonactive', 1, '2020-02-12 14:54:00', NULL, NULL, 1, '2020-02-12 14:54:07'),
(280, 48, 27, 'nonactive', 1, '2020-02-12 14:54:00', NULL, NULL, 1, '2020-02-12 14:54:08'),
(281, 32, 25, 'active', 1, '2020-02-12 15:31:46', 56, '2020-02-26 09:56:25', 0, '0000-00-00 00:00:00'),
(282, 51, 26, 'nonactive', 1, '2020-02-12 15:31:55', NULL, NULL, 1, '2020-02-12 15:31:56'),
(283, 32, 26, 'active', 1, '2020-02-12 15:41:02', 1, '2020-02-28 08:41:11', 0, '0000-00-00 00:00:00'),
(284, 32, 27, 'nonactive', 1, '2020-02-12 15:42:04', 1, '2020-02-20 14:54:43', 1, '2020-02-20 14:54:45'),
(285, 54, 25, 'active', 1, '2020-02-13 22:34:06', NULL, NULL, NULL, NULL),
(286, 54, 26, 'active', 1, '2020-02-13 22:34:07', NULL, NULL, NULL, NULL),
(287, 54, 27, 'active', 1, '2020-02-13 22:34:07', NULL, NULL, NULL, NULL),
(288, 55, 25, 'active', 1, '2020-02-13 22:34:09', NULL, NULL, NULL, NULL),
(289, 55, 26, 'active', 1, '2020-02-13 22:34:10', NULL, NULL, NULL, NULL),
(290, 55, 27, 'active', 1, '2020-02-13 22:34:10', NULL, NULL, NULL, NULL),
(291, 56, 25, 'active', 1, '2020-02-13 22:34:15', NULL, NULL, NULL, NULL),
(292, 56, 26, 'active', 1, '2020-02-13 22:34:15', NULL, NULL, NULL, NULL),
(293, 56, 27, 'active', 1, '2020-02-13 22:34:15', NULL, NULL, NULL, NULL),
(294, 57, 25, 'active', 1, '2020-02-13 22:34:17', NULL, NULL, NULL, NULL),
(295, 57, 26, 'active', 1, '2020-02-13 22:34:17', NULL, NULL, NULL, NULL),
(296, 57, 27, 'active', 1, '2020-02-13 22:34:17', NULL, NULL, NULL, NULL),
(297, 58, 25, 'active', 1, '2020-02-13 22:34:18', NULL, NULL, NULL, NULL),
(298, 58, 26, 'active', 1, '2020-02-13 22:34:19', NULL, NULL, NULL, NULL),
(299, 58, 27, 'active', 1, '2020-02-13 22:34:19', NULL, NULL, NULL, NULL),
(300, 59, 25, 'active', 1, '2020-02-13 22:34:20', NULL, NULL, NULL, NULL),
(301, 59, 26, 'active', 1, '2020-02-13 22:34:21', NULL, NULL, NULL, NULL),
(302, 59, 27, 'active', 1, '2020-02-13 22:34:21', NULL, NULL, NULL, NULL),
(303, 60, 25, 'active', 1, '2020-02-17 15:11:52', 1, '2020-02-18 10:36:07', 0, '0000-00-00 00:00:00'),
(304, 60, 26, 'active', 1, '2020-02-17 15:11:54', 1, '2020-02-18 10:36:07', 0, '0000-00-00 00:00:00'),
(305, 60, 27, 'nonactive', 1, '2020-02-17 15:11:55', 1, '2020-02-18 10:36:07', 1, '2020-02-18 10:36:08'),
(306, 62, 26, 'active', 1, '2020-02-21 11:35:45', 56, '2020-02-21 13:05:06', 0, '0000-00-00 00:00:00'),
(307, 62, 25, 'active', 56, '2020-02-21 13:05:06', NULL, NULL, NULL, NULL),
(308, 62, 27, 'active', 56, '2020-02-21 13:05:06', NULL, NULL, NULL, NULL),
(309, 62, 28, 'active', 56, '2020-02-21 13:05:06', NULL, NULL, NULL, NULL),
(310, 64, 25, 'active', 56, '2020-02-21 13:05:09', NULL, NULL, NULL, NULL),
(311, 64, 26, 'active', 56, '2020-02-21 13:05:09', NULL, NULL, NULL, NULL),
(312, 64, 27, 'active', 56, '2020-02-21 13:05:09', NULL, NULL, NULL, NULL),
(313, 64, 28, 'active', 56, '2020-02-21 13:05:09', NULL, NULL, NULL, NULL),
(314, 65, 25, 'active', 56, '2020-02-21 13:05:11', NULL, NULL, NULL, NULL),
(315, 65, 26, 'active', 56, '2020-02-21 13:05:11', NULL, NULL, NULL, NULL),
(316, 65, 27, 'active', 56, '2020-02-21 13:05:11', NULL, NULL, NULL, NULL),
(317, 65, 28, 'active', 56, '2020-02-21 13:05:11', NULL, NULL, NULL, NULL),
(318, 66, 25, 'active', 56, '2020-02-21 13:05:13', NULL, NULL, NULL, NULL),
(319, 66, 26, 'active', 56, '2020-02-21 13:05:13', NULL, NULL, NULL, NULL),
(320, 66, 27, 'active', 56, '2020-02-21 13:05:13', NULL, NULL, NULL, NULL),
(321, 66, 28, 'active', 56, '2020-02-21 13:05:13', NULL, NULL, NULL, NULL),
(322, 67, 25, 'active', 56, '2020-02-21 13:05:17', NULL, NULL, NULL, NULL),
(323, 67, 26, 'active', 56, '2020-02-21 13:05:17', NULL, NULL, NULL, NULL),
(324, 67, 27, 'active', 56, '2020-02-21 13:05:17', NULL, NULL, NULL, NULL),
(325, 67, 28, 'active', 56, '2020-02-21 13:05:17', NULL, NULL, NULL, NULL),
(326, 68, 25, 'active', 56, '2020-02-21 13:05:19', NULL, NULL, NULL, NULL),
(327, 68, 26, 'active', 56, '2020-02-21 13:05:19', NULL, NULL, NULL, NULL),
(328, 68, 27, 'active', 56, '2020-02-21 13:05:19', NULL, NULL, NULL, NULL),
(329, 68, 28, 'active', 56, '2020-02-21 13:05:19', NULL, NULL, NULL, NULL),
(330, 69, 25, 'active', 56, '2020-02-21 13:05:21', NULL, NULL, NULL, NULL),
(331, 69, 26, 'active', 56, '2020-02-21 13:05:22', NULL, NULL, NULL, NULL),
(332, 69, 27, 'active', 56, '2020-02-21 13:05:22', NULL, NULL, NULL, NULL),
(333, 69, 28, 'active', 56, '2020-02-21 13:05:22', NULL, NULL, NULL, NULL),
(334, 70, 25, 'active', 56, '2020-02-21 13:05:24', NULL, NULL, NULL, NULL),
(335, 70, 26, 'active', 56, '2020-02-21 13:05:24', NULL, NULL, NULL, NULL),
(336, 70, 27, 'active', 56, '2020-02-21 13:05:24', NULL, NULL, NULL, NULL),
(337, 70, 28, 'active', 56, '2020-02-21 13:05:24', NULL, NULL, NULL, NULL),
(338, 71, 25, 'active', 56, '2020-02-21 13:05:26', NULL, NULL, NULL, NULL),
(339, 71, 26, 'active', 56, '2020-02-21 13:05:26', NULL, NULL, NULL, NULL),
(340, 71, 27, 'active', 56, '2020-02-21 13:05:26', NULL, NULL, NULL, NULL),
(341, 71, 28, 'active', 56, '2020-02-21 13:05:27', NULL, NULL, NULL, NULL),
(342, 72, 25, 'active', 56, '2020-02-21 13:05:28', NULL, NULL, NULL, NULL),
(343, 72, 26, 'active', 56, '2020-02-21 13:05:28', NULL, NULL, NULL, NULL),
(344, 72, 27, 'active', 56, '2020-02-21 13:05:29', NULL, NULL, NULL, NULL),
(345, 72, 28, 'active', 56, '2020-02-21 13:05:29', NULL, NULL, NULL, NULL),
(346, 73, 25, 'active', 56, '2020-02-21 13:18:43', NULL, NULL, NULL, NULL),
(347, 73, 26, 'active', 56, '2020-02-21 13:18:43', NULL, NULL, NULL, NULL),
(348, 73, 27, 'active', 56, '2020-02-21 13:18:43', NULL, NULL, NULL, NULL),
(349, 73, 28, 'active', 56, '2020-02-21 13:18:43', 56, '2020-02-22 21:51:50', 0, '0000-00-00 00:00:00'),
(350, 75, 25, 'active', 56, '2020-02-22 20:59:16', 56, '2020-02-26 11:51:12', 0, '0000-00-00 00:00:00'),
(351, 75, 26, 'active', 56, '2020-02-22 20:59:16', 56, '2020-02-26 11:51:12', 0, '0000-00-00 00:00:00'),
(352, 75, 27, 'active', 56, '2020-02-22 20:59:16', 56, '2020-02-26 11:51:12', 0, '0000-00-00 00:00:00'),
(353, 75, 28, 'active', 56, '2020-02-22 20:59:16', 56, '2020-02-26 11:51:12', 0, '0000-00-00 00:00:00'),
(354, 83, 29, 'active', 56, '2020-02-22 21:04:54', NULL, NULL, NULL, NULL),
(355, 84, 32, 'nonactive', 56, '2020-02-25 09:56:54', NULL, NULL, 56, '2020-02-25 10:00:03'),
(356, 84, 33, 'nonactive', 56, '2020-02-25 10:00:00', NULL, NULL, 56, '2020-02-25 10:04:41'),
(357, 84, 34, 'nonactive', 56, '2020-02-25 10:00:01', NULL, NULL, 56, '2020-02-25 10:04:41'),
(358, 85, 32, 'active', 56, '2020-02-25 10:05:31', NULL, NULL, NULL, NULL),
(359, 85, 33, 'active', 56, '2020-02-25 10:05:33', NULL, NULL, NULL, NULL),
(360, 76, 25, 'active', 56, '2020-02-26 11:51:15', NULL, NULL, NULL, NULL),
(361, 76, 26, 'active', 56, '2020-02-26 11:51:15', NULL, NULL, NULL, NULL),
(362, 76, 27, 'active', 56, '2020-02-26 11:51:15', NULL, NULL, NULL, NULL),
(363, 76, 28, 'active', 56, '2020-02-26 11:51:15', NULL, NULL, NULL, NULL),
(364, 77, 25, 'active', 56, '2020-02-26 11:51:18', NULL, NULL, NULL, NULL),
(365, 77, 26, 'active', 56, '2020-02-26 11:51:18', NULL, NULL, NULL, NULL),
(366, 77, 27, 'active', 56, '2020-02-26 11:51:18', NULL, NULL, NULL, NULL),
(367, 77, 28, 'active', 56, '2020-02-26 11:51:18', NULL, NULL, NULL, NULL),
(368, 78, 25, 'active', 56, '2020-02-26 11:51:21', NULL, NULL, NULL, NULL),
(369, 78, 26, 'active', 56, '2020-02-26 11:51:21', NULL, NULL, NULL, NULL),
(370, 78, 27, 'active', 56, '2020-02-26 11:51:21', NULL, NULL, NULL, NULL),
(371, 78, 28, 'active', 56, '2020-02-26 11:51:21', NULL, NULL, NULL, NULL),
(372, 79, 25, 'active', 56, '2020-02-26 11:51:23', NULL, NULL, NULL, NULL),
(373, 79, 26, 'active', 56, '2020-02-26 11:51:23', NULL, NULL, NULL, NULL),
(374, 79, 27, 'active', 56, '2020-02-26 11:51:23', NULL, NULL, NULL, NULL),
(375, 79, 28, 'active', 56, '2020-02-26 11:51:23', NULL, NULL, NULL, NULL),
(376, 80, 25, 'active', 56, '2020-02-26 11:51:26', NULL, NULL, NULL, NULL),
(377, 80, 26, 'active', 56, '2020-02-26 11:51:26', NULL, NULL, NULL, NULL),
(378, 80, 27, 'active', 56, '2020-02-26 11:51:26', NULL, NULL, NULL, NULL),
(379, 80, 28, 'active', 56, '2020-02-26 11:51:26', NULL, NULL, NULL, NULL),
(380, 81, 25, 'active', 56, '2020-02-26 11:51:28', NULL, NULL, NULL, NULL),
(381, 81, 26, 'active', 56, '2020-02-26 11:51:28', NULL, NULL, NULL, NULL),
(382, 81, 27, 'active', 56, '2020-02-26 11:51:28', NULL, NULL, NULL, NULL),
(383, 81, 28, 'active', 56, '2020-02-26 11:51:28', NULL, NULL, NULL, NULL),
(384, 82, 25, 'active', 56, '2020-02-26 11:51:30', NULL, NULL, NULL, NULL),
(385, 82, 26, 'active', 56, '2020-02-26 11:51:30', NULL, NULL, NULL, NULL),
(386, 82, 27, 'active', 56, '2020-02-26 11:51:30', NULL, NULL, NULL, NULL),
(387, 82, 28, 'active', 56, '2020-02-26 11:51:31', NULL, NULL, NULL, NULL),
(388, 86, 32, 'active', 65, '2020-02-26 13:52:33', NULL, NULL, NULL, NULL);

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
(38, 14, 1, 'active', 1, '2019-08-19 05:42:15', NULL, NULL, NULL, NULL),
(44, 10, 30, 'active', 1, '2020-02-08 06:50:46', NULL, NULL, NULL, NULL),
(46, 20, 30, 'active', 1, '2020-02-10 00:30:51', NULL, NULL, NULL, NULL),
(48, 21, 1, 'active', 1, '2020-02-12 08:32:00', NULL, NULL, NULL, NULL),
(54, 15, 1, 'active', 1, '2020-02-21 11:37:09', NULL, NULL, NULL, NULL),
(56, 24, 1, 'active', 1, '2020-02-21 11:44:52', NULL, NULL, NULL, NULL),
(57, 25, 1, 'active', 1, '2020-02-21 11:47:44', NULL, NULL, NULL, NULL),
(58, 22, 1, 'active', 1, '2020-02-21 11:49:40', NULL, NULL, NULL, NULL),
(62, 16, 1, 'active', 56, '2020-02-21 13:23:39', NULL, NULL, NULL, NULL),
(63, 18, 1, 'active', 56, '2020-02-21 13:24:15', NULL, NULL, NULL, NULL),
(66, 28, 1, 'active', 56, '2020-02-22 13:06:41', NULL, NULL, NULL, NULL),
(67, 17, 1, 'active', 56, '2020-02-22 13:38:01', NULL, NULL, NULL, NULL),
(86, 31, 7, 'active', 2, '2020-03-03 09:40:49', NULL, NULL, NULL, NULL),
(85, 23, 7, 'active', 2, '2020-03-03 09:40:08', NULL, NULL, NULL, NULL),
(84, 26, 6, 'active', 1, '2020-02-28 14:34:22', NULL, NULL, NULL, NULL),
(83, 19, 5, 'active', 1, '2020-02-28 14:06:51', NULL, NULL, NULL, NULL),
(72, 30, 57, 'active', 56, '2020-02-25 10:05:23', NULL, NULL, NULL, NULL),
(73, 25, 3, 'active', 56, '2020-02-26 11:50:50', NULL, NULL, NULL, NULL),
(74, 22, 3, 'active', 56, '2020-02-26 13:50:25', NULL, NULL, NULL, NULL),
(75, 31, 57, 'nonactive', 65, '2020-02-26 13:52:23', NULL, NULL, 2, '2020-03-03 09:40:44'),
(76, 18, 3, 'active', 65, '2020-02-27 12:46:10', NULL, NULL, NULL, NULL),
(77, 25, 2, 'active', 65, '2020-02-27 13:11:38', NULL, NULL, NULL, NULL),
(78, 22, 2, 'active', 65, '2020-02-27 13:12:29', NULL, NULL, NULL, NULL),
(79, 18, 2, 'active', 65, '2020-02-27 13:14:40', NULL, NULL, NULL, NULL),
(80, 32, 1, 'active', 66, '2020-02-27 13:58:04', NULL, NULL, NULL, NULL),
(81, 32, 2, 'active', 66, '2020-02-27 13:58:08', NULL, NULL, NULL, NULL),
(82, 32, 3, 'active', 66, '2020-02-27 13:58:13', NULL, NULL, NULL, NULL);

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
(24, 8, 'btn_create', 'Button Create', 'fas fa-plus', 'nonactive', 1, '2019-08-19 05:40:53', 1, '2019-08-19 05:41:59', 1, '2020-02-10 08:58:56'),
(25, 8, 'btn_add', 'Button Add', 'fas fa-file-signature', 'active', 1, '2019-08-19 05:41:09', 1, '2020-02-10 16:05:26', NULL, NULL),
(26, 8, 'btn_edit', 'Button Edit', 'fas fa-edit', 'active', 1, '2019-08-19 05:41:27', NULL, NULL, NULL, NULL),
(27, 8, 'btn_delete', 'Button Delete', 'fa fa-trash', 'active', 1, '2019-08-19 05:41:39', NULL, NULL, NULL, NULL),
(28, 8, ' btn_approve', 'Button Approve', 'fas fa-user-check', 'active', 1, '2020-02-19 17:02:05', NULL, NULL, NULL, NULL),
(29, 11, 'btn_add', 'Button Add', 'fas fa-file-signature', 'active', 56, '2020-02-22 08:24:03', NULL, NULL, NULL, NULL),
(30, 11, 'btn_edit', 'Button Edit', 'far fa-edit', 'active', 56, '2020-02-22 08:25:17', NULL, NULL, NULL, NULL),
(31, 11, 'btn_delete', 'Button Delete', 'far fa-trash-alt', 'active', 56, '2020-02-22 08:26:08', NULL, NULL, NULL, NULL),
(32, 18, 'btn_add', 'Button Add', 'fas fa-file-signature', 'active', 56, '2020-02-25 09:53:45', NULL, NULL, NULL, NULL),
(33, 18, 'btn_edit', 'Button Edit', 'fas fa-edit', 'active', 56, '2020-02-25 09:54:57', 56, '2020-02-25 09:55:21', NULL, NULL),
(34, 18, 'btn_delete', 'Button Delete', 'far fa-trash-alt', 'active', 56, '2020-02-25 09:55:37', NULL, NULL, NULL, NULL),
(35, 21, 'btn_add', 'Button Add', 'fas fa-file-signature', 'active', 66, '2020-02-27 13:57:36', NULL, NULL, NULL, NULL);

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
(56, 8, 63, 1, 'Penanda Tangan', '', 'pu/Penandatangan', 'nonactive', 1, '2019-08-19 05:37:19', 1, '2020-02-10 00:10:47', 1, '2020-02-10 10:46:46'),
(57, 8, 0, 2, 'Pekerjaan', '', 'pu/Pekerjaan', 'nonactive', 1, '2019-08-19 05:38:23', NULL, NULL, 1, '2020-02-10 10:51:23'),
(58, 8, 0, 4, 'Jenis KPR', '', 'pu/Jeniskpr', 'nonactive', 1, '2019-08-19 05:38:49', 1, '2019-08-19 07:12:32', 1, '2020-02-10 10:51:26'),
(59, 8, 0, 4, 'Badan hukum', '', 'pu/Badanhukum', 'nonactive', 1, '2019-08-19 05:39:18', NULL, NULL, 1, '2020-02-10 10:51:29'),
(60, 8, 0, 1, 'Home', '', 'pu/Formulir', 'active', 1, '2019-08-19 05:39:47', 1, '2020-02-12 10:20:20', NULL, NULL),
(61, 8, 0, 7, 'Provinsi', '', 'pu/Provinsi', 'nonactive', 1, '2019-08-19 05:40:15', 1, '2019-09-18 04:00:26', 1, '2020-02-10 10:51:32'),
(62, 8, 0, 3, 'Jenis Rumah', '', 'pu/Jenisrumah', 'nonactive', 1, '2019-08-19 07:12:55', NULL, NULL, 1, '2020-02-10 10:51:36'),
(63, 8, 0, 9, 'Master Data', 'fas fa-chevron-circle-down', '', 'active', 1, '2019-09-10 06:50:19', 1, '2020-02-13 09:59:55', NULL, NULL),
(64, 8, 63, 1, 'Penghasilan', '', 'pu/Bataspenghasilan', 'nonactive', 1, '2019-09-10 07:23:40', NULL, NULL, 1, '2020-02-10 10:46:52'),
(65, 8, 63, 2, 'Harga Jual Rumah', '', 'pu/Batashargajualrumah', 'nonactive', 1, '2019-09-11 20:16:43', NULL, NULL, 1, '2020-02-10 10:46:24'),
(66, 8, 63, 3, 'Harga R Pengecualian', '', 'pu/Batashargajualrumahpengecualian', 'nonactive', 1, '2019-09-11 21:31:37', 1, '2020-02-09 23:56:37', 1, '2020-02-10 10:46:56'),
(67, 9, 0, 1, 'title apps', '', 'pu/Pengajuanbank', 'active', 1, '2019-09-12 05:38:19', 1, '2020-02-13 10:18:56', NULL, NULL),
(68, 8, 0, 6, 'BI Rate', '', 'pu/Msukubungabi', 'nonactive', 1, '2019-09-18 03:59:26', 1, '2019-09-18 04:00:12', 1, '2020-02-10 00:33:48'),
(69, 9, 0, 2, 'title apps', '', 'pu/Validasipengajuanbank', 'active', 1, '2019-09-26 00:34:00', 1, '2020-02-13 10:19:02', NULL, NULL),
(70, 8, 0, 8, 'Perumahan', '', 'pu/Perumahan', 'nonactive', 1, '2019-10-22 05:59:32', NULL, NULL, 1, '2020-02-10 10:51:59'),
(71, 9, 0, 3, 'title apps', '', 'pu/Temporarydataform1', 'active', 1, '2019-10-22 06:15:51', 1, '2020-02-13 10:19:08', NULL, NULL),
(72, 9, 0, 4, 'title apps', '', 'pu/Peserta', 'active', 1, '2019-10-29 17:21:41', 1, '2020-02-13 10:19:15', NULL, NULL),
(73, 9, 0, 5, 'title apps', '', 'pu/Pesertaangsuran', 'active', 1, '2019-11-12 03:12:12', 1, '2020-02-13 10:19:22', NULL, NULL),
(74, 8, 63, 4, 'Katagori', '', 'pu/Mkatagori', 'active', 1, '2020-02-10 10:37:07', NULL, NULL, NULL, NULL),
(75, 8, 63, 5, 'Jenis', '', 'pu/Mjenis', 'active', 1, '2020-02-10 10:43:48', NULL, NULL, NULL, NULL),
(76, 8, 63, 0, 'Ruang Lingkup', '', 'pu/Mruanglingkup', 'active', 1, '2020-02-10 10:44:15', NULL, NULL, NULL, NULL),
(77, 8, 63, 7, 'Tipe', '', 'pu/Mtipe', 'active', 1, '2020-02-10 10:44:46', NULL, NULL, NULL, NULL),
(78, 8, 63, 9, 'File evaluasi', '', 'pu/File_evaluasi', 'active', 1, '2020-02-10 16:04:25', 1, '2020-02-11 08:11:42', NULL, NULL),
(79, 8, 63, 10, 'File analisis', '', 'pu/File_analisis', 'active', 1, '2020-02-11 10:15:20', 1, '2020-02-11 10:15:50', NULL, NULL),
(80, 8, 0, 2, 'Report', '', 'pu/Laporan/home_laporan', 'active', 1, '2020-02-11 14:47:44', 1, '2020-02-19 10:09:54', NULL, NULL),
(81, 18, 0, 1, 'Apps Group', 'far fa-circle nav-icon', 'scr/Application', 'active', 1, '2020-02-12 15:14:42', 56, '2020-02-22 13:43:47', NULL, NULL),
(82, 18, 0, 3, 'User access', 'far fa-circle nav-icon', 'scr/Useraccess', 'active', 1, '2020-02-12 15:27:45', 56, '2020-02-22 13:44:04', NULL, NULL),
(83, 18, 0, 5, 'Role Access', 'far fa-circle', 'scr/Role', 'active', 1, '2020-02-13 09:04:14', 56, '2020-02-24 15:30:01', NULL, NULL),
(84, 8, 0, 0, 'Batasharga', '', 'pu/Batashargajualrumahpengecualian', 'nonactive', 1, '2020-02-13 11:59:14', 1, '2020-02-13 12:19:51', 1, '2020-02-13 14:12:40'),
(85, 8, 63, 8, 'Tingkat Resiko', 'far fa-circle', 'pu/Mresiko', 'active', 1, '2020-02-14 22:41:35', NULL, NULL, NULL, NULL),
(86, 11, 0, 1, 'Department', 'far fa-circle nav-icon', 'utl/Department', 'active', 56, '2020-02-21 16:28:06', 56, '2020-02-22 13:53:24', NULL, NULL),
(87, 11, 0, 3, 'logno', 'far fa-circle nav-icon', 'utl/Logno', 'active', 56, '2020-02-21 16:28:44', 56, '2020-02-22 13:53:35', NULL, NULL),
(88, 11, 0, 2, 'Penandatangan', 'far fa-circle nav-icon', 'utl/penandatangan', 'active', 56, '2020-02-21 16:29:53', 56, '2020-02-22 13:53:30', NULL, NULL),
(89, 18, 0, 2, 'Maplikasi', 'far fa-circle', 'scr/Maplikasi', 'active', 56, '2020-02-22 12:54:09', 56, '2020-02-22 13:43:57', NULL, NULL),
(90, 20, 0, 2, 'master Data', 'fas fa-chevron-circle-down', '', 'active', 56, '2020-02-22 13:11:01', 56, '2020-02-24 08:15:49', NULL, NULL),
(91, 20, 90, 0, 'Asset', 'far fa-circle', 'asm/Assets', 'active', 56, '2020-02-22 13:13:31', 56, '2020-02-24 11:10:11', NULL, NULL),
(92, 20, 90, 0, 'Lokasi', 'far fa-circle', 'asm/Location', 'active', 56, '2020-02-22 13:35:31', 56, '2020-02-24 11:09:22', NULL, NULL),
(93, 20, 90, 0, 'UOM', 'far fa-circle', 'asm/Uom', 'active', 56, '2020-02-22 13:41:41', 56, '2020-02-24 10:44:14', NULL, NULL),
(94, 11, 0, 4, 'icon', 'far fa-circle', 'utl/Icon', 'active', 56, '2020-02-22 13:53:14', 56, '2020-02-26 12:48:41', NULL, NULL),
(95, 20, 0, 1, 'Home', '', 'asm/Bank', 'active', 56, '2020-02-24 08:15:20', 56, '2020-02-24 09:13:25', NULL, NULL),
(96, 18, 0, 4, 'Request User access', 'far fa-circle', 'scr/Request', 'active', 56, '2020-02-24 15:29:39', 56, '2020-02-24 15:29:53', NULL, NULL),
(97, 21, 0, 1, 'Public', 'nav-icon  fas fa-chevron-circle-down', '', 'active', 66, '2020-02-27 14:02:11', 1, '2020-02-27 16:56:49', NULL, NULL),
(98, 21, 104, 5, 'Support Bottom', 'far fa-circle', 'prt/Support_bottom', 'active', 66, '2020-02-27 14:02:36', 1, '2020-02-27 17:02:44', NULL, NULL),
(99, 21, 0, 6, 'Slide Show', 'nav-icon fas fa-info-circle', 'prt/Info', 'active', 66, '2020-02-27 14:05:05', 1, '2020-02-29 10:53:28', NULL, NULL),
(100, 21, 0, 0, 'Project Progress', 'far fa-circle', 'prt/Progress', 'active', 66, '2020-02-27 14:06:10', 1, '2020-02-27 16:46:25', NULL, NULL),
(101, 21, 104, 4, 'Support Up', 'far fa-circle', 'prt/Support_up', 'active', 1, '2020-02-27 16:41:14', 1, '2020-02-27 17:02:34', NULL, NULL),
(102, 21, 97, 3, 'Public Bottom', 'far fa-circle', 'prt/Public_bottom', 'active', 1, '2020-02-27 16:42:02', 1, '2020-02-27 16:54:33', NULL, NULL),
(103, 21, 97, 2, 'Public Up', 'far fa-circle', 'prt/Public_up', 'active', 1, '2020-02-27 16:42:34', 1, '2020-02-27 16:55:30', NULL, NULL),
(104, 21, 0, 3, 'Support', 'nav-icon fas fa-chevron-circle-down', '', 'active', 1, '2020-02-27 17:02:16', 1, '2020-02-27 17:04:09', NULL, NULL);

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
(2, 'User Admin', 'active', 1, '2019-06-27 08:27:37', 1, '2020-02-21 11:34:43', NULL, NULL),
(5, 'User Pelapor', 'active', 1, '2020-02-21 11:34:35', 1, '2020-02-21 11:34:54', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `useraccess`
--

DROP TABLE IF EXISTS `useraccess`;
CREATE TABLE `useraccess` (
  `id_user` int(11) NOT NULL,
  `namaKaryawan` varchar(200) NOT NULL COMMENT 'combobox',
  `department_name` varchar(25) NOT NULL COMMENT 'combobox',
  `id_role` int(11) NOT NULL COMMENT 'combobox',
  `username` varchar(120) NOT NULL,
  `password` text NOT NULL COMMENT 'dont',
  `fullname` varchar(50) NOT NULL,
  `email` varchar(120) NOT NULL,
  `notif_email` int(1) NOT NULL DEFAULT '0' COMMENT '0=not notif, 1=can email',
  `no_handphone` varchar(15) DEFAULT NULL,
  `note` text NOT NULL,
  `status_login` int(1) NOT NULL DEFAULT '0' COMMENT '0=request,1=active',
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

INSERT INTO `useraccess` (`id_user`, `namaKaryawan`, `department_name`, `id_role`, `username`, `password`, `fullname`, `email`, `notif_email`, `no_handphone`, `note`, `status_login`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 'MOEHAMAD SALDY AMIRULLAH JAFAR', 'IT', 1, 'moehamad', '202cb962ac59075b964b07152d234b70', '', 'moeh.saldy@gmail.com', 0, '', '', 1, 'active', 1, '2020-02-21 11:36:49', 56, '2020-02-21 16:26:42', NULL, NULL),
(2, 'itadministrator', 'IT', 2, 'itadministrator', '267445782010e79918e9c54090cd9e5a', 'itadministrator', 'itadministrator@lessential', 0, NULL, '', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'JOKO YUANA', 'IT', 2, 'joko', '202cb962ac59075b964b07152d234b70', '', 'full@mail.com', 0, '', '', 1, 'active', 56, '2020-02-26 11:49:38', 56, '2020-02-26 11:50:31', NULL, NULL),
(4, 'LUTFI ALDILLAH', 'IT', 5, 'tes', '202cb962ac59075b964b07152d234b70', '', 'full@mail.com', 0, '', 'hasil', 1, 'active', 1, '2020-02-28 08:44:41', 2, '2020-02-28 09:39:27', NULL, NULL),
(5, 'ARMET KOSAPUTRA', 'WH', 5, 'wh_armet', '202cb962ac59075b964b07152d234b70', '', 'armet@lessial.com', 0, '', '', 1, 'active', 2, '2020-02-28 14:06:01', 2, '2020-02-28 14:06:07', NULL, NULL),
(6, 'DENNY RACHMADI', 'WH', 2, 'wh_denny', '202cb962ac59075b964b07152d234b70', '', 'denny@lessential.com', 0, '', '', 1, 'active', 1, '2020-02-28 14:34:01', NULL, NULL, NULL, NULL),
(7, 'NAULI MARSHA ANDIANI', 'QA', 2, 'qa_nauli', '202cb962ac59075b964b07152d234b70', '', 'full@mail.com', 0, '', '', 1, 'active', 2, '2020-03-03 09:39:48', NULL, NULL, NULL, NULL);

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
(1, 56, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/Dashboard', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 05:44:55'),
(2, 56, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/Dashboard/getnotification', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 05:45:09'),
(3, 56, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Formulir', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 05:45:30'),
(4, 56, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 05:45:30'),
(5, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 05:45:39'),
(6, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/Dashboard/getnotification', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 05:45:40'),
(7, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/Dashboard', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 05:45:40'),
(8, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Formulir', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 05:45:41'),
(9, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 05:45:42'),
(10, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 05:45:55'),
(11, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 05:45:55'),
(12, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/edit/11', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 05:45:58'),
(13, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/home_group/11', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 05:45:59'),
(14, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/grid_group/11', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 05:45:59'),
(15, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/home_groupuser/18', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 05:46:03'),
(16, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/grid_groupuser/18', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 05:46:03'),
(17, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/add_groupuser/18', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 05:46:05'),
(18, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatagroupuserhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatagroupuser/create', '{\"id_maplikasigroupuser\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"id_maplikasigroup\",\"checkdata2\":\"id_user\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_maplikasigroup\":\"18\",\"id_user\":\"65\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 05:46:10'),
(19, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/home_groupmenu/18', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 05:46:12'),
(20, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/getgroupmenulist', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 05:46:12'),
(21, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Department', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 05:46:22'),
(22, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Department/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 05:46:22'),
(23, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/utl/penandatangan', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 05:46:29'),
(24, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Penandatangan/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 05:46:30'),
(25, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Logno', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 05:46:36'),
(26, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Logno/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 05:46:36'),
(27, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Logno/edit/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 05:46:59'),
(28, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Logno/index', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 05:47:02'),
(29, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Icon', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 05:47:23'),
(30, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Icon/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 05:47:24'),
(31, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/File_evaluasi', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 05:47:36'),
(32, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/File_evaluasi/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 05:47:36'),
(33, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/File_analisis', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 05:47:39'),
(34, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/File_analisis/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 05:47:39'),
(35, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/edit/7', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 05:57:51'),
(36, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/home_group/7', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 05:57:51'),
(37, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/grid_group/7', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 05:57:52'),
(38, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Maplikasi', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 05:57:57'),
(39, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Maplikasi/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 05:57:58'),
(40, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Maplikasi/edit/7', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 05:58:00'),
(41, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Maplikasi/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Maplikasi/postdata/update', '{\"id_maplikasi\":\"7\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"kode_aplikasi\",\"checkdata2\":\"nama_aplikasi\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"sortdata\":\"0\",\"kode_aplikasi\":\"sp\",\"nama_aplikasi\":\"Belum Tau\",\"icon\":\"fas fa-retweet\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 05:58:29'),
(42, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Maplikasi/index', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 05:58:29'),
(43, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Useraccess', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:05:22'),
(44, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Useraccess/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:05:22'),
(45, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Useraccess/add', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:05:23'),
(46, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/edit/8', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:10:03'),
(47, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/home_group/8', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:10:03'),
(48, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/grid_group/8', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:10:03'),
(49, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Useraccess/edit/66', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:10:15'),
(50, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Useraccess/index', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:10:33'),
(51, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/home_groupuser/23', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:11:24'),
(52, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/grid_groupuser/23', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:11:24'),
(53, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/add_groupuser/23', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:11:27'),
(54, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/home_groupuser/25', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:11:32'),
(55, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/grid_groupuser/25', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:11:33'),
(56, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/add_groupuser/25', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:11:35'),
(57, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatagroupuserhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatagroupuser/create', '{\"id_maplikasigroupuser\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"id_maplikasigroup\",\"checkdata2\":\"id_user\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_maplikasigroup\":\"25\",\"id_user\":\"66\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:11:38'),
(58, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/edit/18', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:11:59'),
(59, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/home_group/18', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:12:00'),
(60, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/grid_group/18', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:12:00'),
(61, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/home_groupuser/22', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:12:06'),
(62, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/grid_groupuser/22', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:12:06'),
(63, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/add_groupuser/22', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:12:09'),
(64, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatagroupuserhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatagroupuser/create', '{\"id_maplikasigroupuser\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"id_maplikasigroup\",\"checkdata2\":\"id_user\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_maplikasigroup\":\"22\",\"id_user\":\"65\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:12:12'),
(65, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/home_groupmenu/22', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:12:14'),
(66, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/home_groupmenubutton/22', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:12:16'),
(67, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/getbuttoncheckbox', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:12:16'),
(68, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/getstatusbuttunaccess', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:12:17'),
(69, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatagroupuserhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatagroupuser/create', '{\"id_maplikasigroupuser\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"id_maplikasigroup\",\"checkdata2\":\"id_user\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_maplikasigroup\":\"22\",\"id_user\":\"66\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:12:29'),
(70, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/edit_group/22', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:12:52'),
(71, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatagrouphttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatagroup/update', '{\"id_maplikasigroup\":\"22\",\"id_maplikasi\":\"18\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"kode_group\",\"checkdata2\":\"id_maplikasi\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"kode_group\":\"accs\",\"nama_group\":\"all Access Management\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:13:36'),
(72, 65, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatagroupuserhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatagroupuser/create', '{\"id_maplikasigroupuser\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"id_maplikasigroup\",\"checkdata2\":\"id_user\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_maplikasigroup\":\"18\",\"id_user\":\"66\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:14:40'),
(73, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:15:00'),
(74, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/Dashboard', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:15:01'),
(75, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/Dashboard/getnotification', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:15:01'),
(76, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Role', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:15:08'),
(77, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Role/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:15:08'),
(78, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Formulir', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:15:12'),
(79, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:15:12'),
(80, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/approve', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:15:54'),
(81, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:15:54'),
(82, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/evaluasi', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:16:22'),
(83, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Evaluasi/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:16:22'),
(84, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/edit/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:28:25'),
(85, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/getdata', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:28:25'),
(86, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/home_rca/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:28:25'),
(87, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/grid_rca/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:28:26'),
(88, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:30:32'),
(89, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:30:32'),
(90, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/edit/8', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:30:34'),
(91, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/home_group/8', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:30:35'),
(92, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/grid_group/8', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:30:35'),
(93, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/home_groupuser/19', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:30:36'),
(94, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/grid_groupuser/19', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:30:36'),
(95, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Maplikasi', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:30:40'),
(96, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Maplikasi/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:30:40'),
(97, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Useraccess', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:30:42'),
(98, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Useraccess/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:30:42'),
(99, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Request', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:31:01'),
(100, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Request/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:31:01'),
(101, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Request/edit/56', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:31:03'),
(102, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Request/index', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:31:07'),
(103, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Logno', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:31:15'),
(104, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Logno/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:31:15'),
(105, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/utl/penandatangan', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:31:16'),
(106, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Penandatangan/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:31:16'),
(107, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Department', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:31:18'),
(108, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Department/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:31:18'),
(109, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Icon', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:31:19'),
(110, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Icon/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:31:19'),
(111, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/edit/11', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:31:31'),
(112, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/home_group/11', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:31:31'),
(113, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/grid_group/11', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:31:31'),
(114, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Maplikasi/add', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:51:36'),
(115, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Maplikasi/index', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:51:39'),
(116, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Maplikasi/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Maplikasi/postdata/create', '{\"id_maplikasi\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"kode_aplikasi\",\"checkdata2\":\"nama_aplikasi\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"sortdata\":\"3\",\"kode_aplikasi\":\"ptl\",\"nama_aplikasi\":\"Portal\",\"icon\":\"fas fa-bullhorn\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:55:16'),
(117, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Maplikasi/edit/20', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:55:21'),
(118, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Maplikasi/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Maplikasi/postdata/update', '{\"id_maplikasi\":\"20\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"kode_aplikasi\",\"checkdata2\":\"nama_aplikasi\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"sortdata\":\"4\",\"kode_aplikasi\":\"asm\",\"nama_aplikasi\":\"Asset Management\",\"icon\":\"fas fa-pallet\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:55:24'),
(119, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Maplikasi/edit/8', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:55:41'),
(120, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Maplikasi/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Maplikasi/postdata/update', '{\"id_maplikasi\":\"8\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"kode_aplikasi\",\"checkdata2\":\"nama_aplikasi\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"sortdata\":\"5\",\"kode_aplikasi\":\"pu\",\"nama_aplikasi\":\"Penyimpangan\",\"icon\":\"fas fa-map-signs\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:55:44'),
(121, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Maplikasi/edit/10', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:55:53'),
(122, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Maplikasi/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Maplikasi/postdata/update', '{\"id_maplikasi\":\"10\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"kode_aplikasi\",\"checkdata2\":\"nama_aplikasi\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"sortdata\":\"7\",\"kode_aplikasi\":\"plt\",\"nama_aplikasi\":\"Pelatihan\",\"icon\":\"fas fa-book-reader\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:55:57'),
(123, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/edit/21', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:56:19'),
(124, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/home_group/21', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:56:19'),
(125, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/grid_group/21', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:56:19'),
(126, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/add_group/21', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:56:22'),
(127, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatagrouphttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatagroup/create', '{\"id_maplikasigroup\":\"0\",\"id_maplikasi\":\"21\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"kode_group\",\"checkdata2\":\"id_maplikasi\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"kode_group\":\"adtr\",\"nama_group\":\"administrator\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:57:03'),
(128, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/home_menu/21', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:57:06'),
(129, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/grid_menu/21', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:57:06'),
(130, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/add_menu/21', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:57:11'),
(131, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/home_button/21', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:57:25'),
(132, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/grid_button/21', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:57:25'),
(133, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/add_button/21', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:57:27'),
(134, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatabuttonhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatabutton/create', '{\"id_mbutton\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"id_maplikasi\",\"checkdata2\":\"btncode\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_maplikasi\":\"21\",\"btncode\":\"btn_add\",\"btnname\":\"Button Add\",\"icon\":\"fas fa-file-signature\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:57:36'),
(135, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/home_groupuser/32', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:57:59'),
(136, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/grid_groupuser/32', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:57:59'),
(137, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/add_groupuser/32', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:58:01'),
(138, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatagroupuserhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatagroupuser/create', '{\"id_maplikasigroupuser\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"id_maplikasigroup\",\"checkdata2\":\"id_user\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_maplikasigroup\":\"32\",\"id_user\":\"56\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:58:04'),
(139, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatagroupuserhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatagroupuser/create', '{\"id_maplikasigroupuser\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"id_maplikasigroup\",\"checkdata2\":\"id_user\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_maplikasigroup\":\"32\",\"id_user\":\"66\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:58:08'),
(140, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatagroupuserhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatagroupuser/create', '{\"id_maplikasigroupuser\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"id_maplikasigroup\",\"checkdata2\":\"id_user\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_maplikasigroup\":\"32\",\"id_user\":\"65\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 06:58:13'),
(141, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Maplikasi/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Maplikasi/postdata/update', '{\"id_maplikasi\":\"10\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"kode_aplikasi\",\"checkdata2\":\"nama_aplikasi\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"sortdata\":\"7\",\"kode_aplikasi\":\"prl\",\"nama_aplikasi\":\"Pelatihan\",\"icon\":\"fas fa-book-reader\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 07:00:40'),
(142, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenuhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenu/create', '{\"id_mmenu\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"id_parent\",\"checkdata2\":\"url_menu\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_maplikasi\":\"21\",\"id_parent\":\"0\",\"nama_menu\":\"Public\",\"urutan\":\"1\",\"icon\":\"far fa-circle\",\"url_menu\":\"prl\\/Public\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 07:02:11'),
(143, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenuhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenu/create', '{\"id_mmenu\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"id_parent\",\"checkdata2\":\"url_menu\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_maplikasi\":\"21\",\"id_parent\":\"0\",\"nama_menu\":\"Support\",\"urutan\":\"2\",\"icon\":\"far fa-circle\",\"url_menu\":\"prt\\/Support\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 07:02:36'),
(144, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Maplikasi/edit/21', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 07:03:16'),
(145, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Maplikasi/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Maplikasi/postdata/update', '{\"id_maplikasi\":\"21\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"kode_aplikasi\",\"checkdata2\":\"nama_aplikasi\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"sortdata\":\"3\",\"kode_aplikasi\":\"prt\",\"nama_aplikasi\":\"Portal\",\"icon\":\"fas fa-bullhorn\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 07:03:37'),
(146, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/edit_menu/97', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 07:03:50'),
(147, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenuhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenu/update', '{\"id_mmenu\":\"97\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"id_parent\",\"checkdata2\":\"url_menu\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_maplikasi\":\"21\",\"id_parent\":\"0\",\"nama_menu\":\"Public\",\"urutan\":\"1\",\"icon\":\"far fa-circle\",\"url_menu\":\"prt\\/Public\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 07:03:55'),
(148, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenuhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenu/create', '{\"id_mmenu\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"id_parent\",\"checkdata2\":\"url_menu\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_maplikasi\":\"21\",\"id_parent\":\"0\",\"nama_menu\":\"Slide Show\",\"urutan\":\"3\",\"icon\":\"far fa-circle\",\"url_menu\":\"prt\\/Slideshow\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 07:05:05'),
(149, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenuhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenu/create', '{\"id_mmenu\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"id_parent\",\"checkdata2\":\"url_menu\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_maplikasi\":\"21\",\"id_parent\":\"0\",\"nama_menu\":\"Project Progress\",\"urutan\":\"4\",\"icon\":\"far fa-circle\",\"url_menu\":\"prt\\/Project\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 07:06:10'),
(150, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/home_groupmenu/32', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 07:06:38'),
(151, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/getgroupmenulist', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 07:06:38'),
(152, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postgroupmenuhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postgroupmenu/create', '{\"id_mmenu\":\"97\",\"actiondata\":\"create\",\"id_maplikasi\":\"21\",\"id_maplikasigroup\":\"32\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 07:06:40'),
(153, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postgroupmenuhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postgroupmenu/create', '{\"id_mmenu\":\"98\",\"actiondata\":\"create\",\"id_maplikasi\":\"21\",\"id_maplikasigroup\":\"32\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 07:06:41'),
(154, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postgroupmenuhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postgroupmenu/create', '{\"id_mmenu\":\"99\",\"actiondata\":\"create\",\"id_maplikasi\":\"21\",\"id_maplikasigroup\":\"32\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 07:06:41'),
(155, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postgroupmenuhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postgroupmenu/create', '{\"id_mmenu\":\"100\",\"actiondata\":\"create\",\"id_maplikasi\":\"21\",\"id_maplikasigroup\":\"32\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 07:06:42'),
(156, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/home_groupmenubutton/32', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 07:06:43'),
(157, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/getbuttoncheckbox', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 07:06:43'),
(158, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/getstatusbuttunaccess', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 07:06:44'),
(159, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/edit_menu/99', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 07:08:45'),
(160, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenuhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenu/update', '{\"id_mmenu\":\"99\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"id_parent\",\"checkdata2\":\"url_menu\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_maplikasi\":\"21\",\"id_parent\":\"0\",\"nama_menu\":\"Slide Show\",\"urutan\":\"3\",\"icon\":\"fas fa-info-circle\",\"url_menu\":\"prt\\/Slideshow\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 07:09:03'),
(161, 56, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 07:09:20'),
(162, 56, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 07:09:26'),
(163, 56, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 07:09:26'),
(164, 56, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/edit/21', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 07:09:31'),
(165, 56, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/home_group/21', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 07:09:32'),
(166, 56, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/grid_group/21', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 07:09:32'),
(167, 56, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/home_menu/21', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 07:09:34'),
(168, 56, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/grid_menu/21', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 07:09:34'),
(169, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/analisis', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 07:18:15'),
(170, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 07:18:15'),
(171, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/edit/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 07:18:17'),
(172, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/getdata', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 07:18:17'),
(173, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/home_detail/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 07:18:18'),
(174, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/home_rca/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 07:18:18'),
(175, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/grid_detail/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 07:18:18'),
(176, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/grid_rca/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 07:18:18'),
(177, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/add_detail/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 07:18:20'),
(178, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Evaluasi/edit/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 07:18:58'),
(179, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Evaluasi/getdata', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 07:18:59'),
(180, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Evaluasi/home_nilai_evaluasi/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 07:19:00'),
(181, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Evaluasi/grid_nilaievaluasi/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 07:19:00'),
(182, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Evaluasi/index', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 07:19:03'),
(183, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/postdatadetail', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 07:48:05'),
(184, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/edit_detail/13', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 08:08:18'),
(185, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/edit/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 08:16:52'),
(186, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/index', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 08:16:58'),
(187, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/update', '{\"id_formulir\":\"1\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"\",\"h_kt\":\"\",\"h_th\":\"2020\",\"h_bln\":\"02\",\"h_no\":\"\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/02\\/1\",\"tanggal\":\"2020-02-24\",\"title_improvement\":\"Rabu\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"rabu\",\"rincian_tindakan\":\"rabu\",\"dampak\":\"0\",\"uraian\":\"\",\"statusevaluasi\":\"1\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 08:19:17'),
(188, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/update', '{\"id_formulir\":\"1\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"\",\"h_kt\":\"\",\"h_th\":\"2020\",\"h_bln\":\"02\",\"h_no\":\"\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/02\\/1\",\"tanggal\":\"2020-02-24\",\"title_improvement\":\"Rabu\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"rabu\",\"rincian_tindakan\":\"rabu\",\"dampak\":\"2\",\"uraian\":\"\",\"statusevaluasi\":\"1\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 08:21:46'),
(189, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/update', '{\"id_formulir\":\"1\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"\",\"h_kt\":\"\",\"h_th\":\"2020\",\"h_bln\":\"02\",\"h_no\":\"\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/02\\/1\",\"tanggal\":\"2020-02-24\",\"title_improvement\":\"Rabu\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"rabu\",\"rincian_tindakan\":\"rabu\",\"dampak\":\"1\",\"uraian\":\"tes\",\"statusevaluasi\":\"1\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 08:25:42'),
(190, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Evaluasi/Preview/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 08:26:35'),
(191, 66, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/edit_detail/15', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 08:42:34'),
(192, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:05:19'),
(193, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/Dashboard', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:05:20'),
(194, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/Dashboard/getnotification', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:05:20'),
(195, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/edit/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:05:20'),
(196, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/getdata', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:05:20'),
(197, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/home_detail/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:05:20'),
(198, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/home_rca/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:05:20'),
(199, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/grid_detail/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:05:20'),
(200, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/grid_rca/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:05:20'),
(201, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:05:35'),
(202, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/Dashboard/getnotification', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:05:35'),
(203, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/Dashboard', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:05:35'),
(204, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Formulir', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:11:50'),
(205, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:11:51'),
(206, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Formulir', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:12:12'),
(207, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:12:12'),
(208, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/approve', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:12:15'),
(209, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:12:15'),
(210, 3, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:12:52'),
(211, 3, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/Dashboard/getnotification', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:12:53'),
(212, 3, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/Dashboard', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:12:53'),
(213, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:18:39'),
(214, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:18:39'),
(215, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/edit/21', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:39:26'),
(216, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/home_group/21', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:39:27'),
(217, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/grid_group/21', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:39:27'),
(218, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/home_menu/21', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:39:28'),
(219, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/grid_menu/21', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:39:28'),
(220, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/edit_menu/97', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:39:37'),
(221, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenuhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenu/update', '{\"id_mmenu\":\"97\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"id_parent\",\"checkdata2\":\"url_menu\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_maplikasi\":\"21\",\"id_parent\":\"0\",\"nama_menu\":\"Public\",\"urutan\":\"1\",\"icon\":\"far fa-circle\",\"url_menu\":\"prt\\/Info\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:39:43'),
(222, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/edit_menu/100', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:39:55'),
(223, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenuhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenu/update', '{\"id_mmenu\":\"100\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"id_parent\",\"checkdata2\":\"url_menu\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_maplikasi\":\"21\",\"id_parent\":\"0\",\"nama_menu\":\"Project Progress\",\"urutan\":\"4\",\"icon\":\"far fa-circle\",\"url_menu\":\"prt\\/Progress\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:40:01'),
(224, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/edit_menu/98', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:40:06'),
(225, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenuhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenu/update', '{\"id_mmenu\":\"98\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"id_parent\",\"checkdata2\":\"url_menu\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_maplikasi\":\"21\",\"id_parent\":\"0\",\"nama_menu\":\"Support\",\"urutan\":\"2\",\"icon\":\"far fa-circle\",\"url_menu\":\"prt\\/Support_bottom\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:40:13');
INSERT INTO `userlog` (`id_userlog`, `id_useraccess`, `url`, `requestdata`, `ipaddress`, `browser`, `systemdevice`, `accesstime`) VALUES
(226, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenuhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenu/update', '{\"id_mmenu\":\"98\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"id_parent\",\"checkdata2\":\"url_menu\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_maplikasi\":\"21\",\"id_parent\":\"0\",\"nama_menu\":\"Support Bottom\",\"urutan\":\"2\",\"icon\":\"far fa-circle\",\"url_menu\":\"prt\\/Support_bottom\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:40:43'),
(227, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/add_menu/21', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:40:45'),
(228, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenuhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenu/create', '{\"id_mmenu\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"id_parent\",\"checkdata2\":\"url_menu\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_maplikasi\":\"21\",\"id_parent\":\"0\",\"nama_menu\":\"Support Up\",\"urutan\":\"\",\"icon\":\"far fa-circle\",\"url_menu\":\"prt\\/Support_up\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:41:14'),
(229, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenuhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenu/create', '{\"id_mmenu\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"id_parent\",\"checkdata2\":\"url_menu\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_maplikasi\":\"21\",\"id_parent\":\"0\",\"nama_menu\":\"Public Bottom\",\"urutan\":\"\",\"icon\":\"far fa-circle\",\"url_menu\":\"prt\\/Public_bottom\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:42:02'),
(230, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenuhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenu/create', '{\"id_mmenu\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"id_parent\",\"checkdata2\":\"url_menu\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_maplikasi\":\"21\",\"id_parent\":\"0\",\"nama_menu\":\"Public Up\",\"urutan\":\"\",\"icon\":\"far fa-circle\",\"url_menu\":\"prt\\/Public_up\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:42:34'),
(231, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/edit_menu/103', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:42:50'),
(232, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenuhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenu/update', '{\"id_mmenu\":\"103\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"id_parent\",\"checkdata2\":\"url_menu\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_maplikasi\":\"21\",\"id_parent\":\"0\",\"nama_menu\":\"Public Up\",\"urutan\":\"2\",\"icon\":\"far fa-circle\",\"url_menu\":\"prt\\/Public_up\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:42:55'),
(233, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/edit_menu/102', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:42:58'),
(234, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenuhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenu/update', '{\"id_mmenu\":\"102\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"id_parent\",\"checkdata2\":\"url_menu\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_maplikasi\":\"21\",\"id_parent\":\"0\",\"nama_menu\":\"Public Bottom\",\"urutan\":\"3\",\"icon\":\"far fa-circle\",\"url_menu\":\"prt\\/Public_bottom\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:43:01'),
(235, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/edit_menu/101', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:43:05'),
(236, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenuhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenu/update', '{\"id_mmenu\":\"101\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"id_parent\",\"checkdata2\":\"url_menu\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_maplikasi\":\"21\",\"id_parent\":\"0\",\"nama_menu\":\"Support Up\",\"urutan\":\"4\",\"icon\":\"far fa-circle\",\"url_menu\":\"prt\\/Support_up\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:43:09'),
(237, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenuhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenu/update', '{\"id_mmenu\":\"97\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"id_parent\",\"checkdata2\":\"url_menu\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_maplikasi\":\"21\",\"id_parent\":\"0\",\"nama_menu\":\"Public\",\"urutan\":\"0\",\"icon\":\"far fa-circle\",\"url_menu\":\"prt\\/Info\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:43:50'),
(238, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenuhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenu/update', '{\"id_mmenu\":\"98\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"id_parent\",\"checkdata2\":\"url_menu\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_maplikasi\":\"21\",\"id_parent\":\"0\",\"nama_menu\":\"Support Bottom\",\"urutan\":\"9\",\"icon\":\"far fa-circle\",\"url_menu\":\"prt\\/Support_bottom\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:43:56'),
(239, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenuhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenu/update', '{\"id_mmenu\":\"97\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"id_parent\",\"checkdata2\":\"url_menu\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_maplikasi\":\"21\",\"id_parent\":\"0\",\"nama_menu\":\"Public\",\"urutan\":\"9\",\"icon\":\"far fa-circle\",\"url_menu\":\"prt\\/Info\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:44:00'),
(240, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/edit_menu/99', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:44:31'),
(241, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenuhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenu/update', '{\"id_mmenu\":\"99\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"id_parent\",\"checkdata2\":\"url_menu\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_maplikasi\":\"21\",\"id_parent\":\"0\",\"nama_menu\":\"Slide Show\",\"urutan\":\"5\",\"icon\":\"fas fa-info-circle\",\"url_menu\":\"prt\\/Slideshow\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:44:34'),
(242, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenuhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenu/update', '{\"id_mmenu\":\"100\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"id_parent\",\"checkdata2\":\"url_menu\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_maplikasi\":\"21\",\"id_parent\":\"0\",\"nama_menu\":\"Project Progress\",\"urutan\":\"7\",\"icon\":\"far fa-circle\",\"url_menu\":\"prt\\/Progress\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:44:49'),
(243, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenuhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenu/update', '{\"id_mmenu\":\"98\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"id_parent\",\"checkdata2\":\"url_menu\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_maplikasi\":\"21\",\"id_parent\":\"0\",\"nama_menu\":\"Support Bottom\",\"urutan\":\"5\",\"icon\":\"far fa-circle\",\"url_menu\":\"prt\\/Support_bottom\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:45:09'),
(244, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenuhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenu/update', '{\"id_mmenu\":\"99\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"id_parent\",\"checkdata2\":\"url_menu\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_maplikasi\":\"21\",\"id_parent\":\"0\",\"nama_menu\":\"Slide Show\",\"urutan\":\"6\",\"icon\":\"fas fa-info-circle\",\"url_menu\":\"prt\\/Slideshow\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:45:37'),
(245, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/home_groupuser/32', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:45:53'),
(246, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/grid_groupuser/32', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:45:53'),
(247, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/home_groupmenu/32', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:45:55'),
(248, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/getgroupmenulist', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:45:55'),
(249, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postgroupmenuhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postgroupmenu/create', '{\"id_mmenu\":\"103\",\"actiondata\":\"create\",\"id_maplikasi\":\"21\",\"id_maplikasigroup\":\"32\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:45:57'),
(250, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postgroupmenuhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postgroupmenu/create', '{\"id_mmenu\":\"102\",\"actiondata\":\"create\",\"id_maplikasi\":\"21\",\"id_maplikasigroup\":\"32\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:45:58'),
(251, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postgroupmenuhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postgroupmenu/create', '{\"id_mmenu\":\"101\",\"actiondata\":\"create\",\"id_maplikasi\":\"21\",\"id_maplikasigroup\":\"32\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:45:58'),
(252, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/home_groupmenubutton/32', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:46:00'),
(253, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/getbuttoncheckbox', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:46:00'),
(254, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/getstatusbuttunaccess', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:46:01'),
(255, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenuhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenu/update', '{\"id_mmenu\":\"100\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"id_parent\",\"checkdata2\":\"url_menu\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_maplikasi\":\"21\",\"id_parent\":\"0\",\"nama_menu\":\"Project Progress\",\"urutan\":\"0\",\"icon\":\"far fa-circle\",\"url_menu\":\"prt\\/Progress\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:46:25'),
(256, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenuhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenu/update', '{\"id_mmenu\":\"97\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"id_parent\",\"checkdata2\":\"url_menu\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_maplikasi\":\"21\",\"id_parent\":\"0\",\"nama_menu\":\"Public\",\"urutan\":\"1\",\"icon\":\"far fa-circle\",\"url_menu\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:53:33'),
(257, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenuhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenu/update', '{\"id_mmenu\":\"102\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"id_parent\",\"checkdata2\":\"url_menu\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_maplikasi\":\"21\",\"id_parent\":\"97\",\"nama_menu\":\"Public Bottom\",\"urutan\":\"3\",\"icon\":\"far fa-circle\",\"url_menu\":\"prt\\/Public_bottom\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:54:33'),
(258, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenuhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenu/update', '{\"id_mmenu\":\"103\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"id_parent\",\"checkdata2\":\"url_menu\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_maplikasi\":\"21\",\"id_parent\":\"97\",\"nama_menu\":\"Public Up\",\"urutan\":\"2\",\"icon\":\"far fa-circle\",\"url_menu\":\"prt\\/Public_up\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:55:30'),
(259, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenuhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenu/update', '{\"id_mmenu\":\"97\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"id_parent\",\"checkdata2\":\"url_menu\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_maplikasi\":\"21\",\"id_parent\":\"0\",\"nama_menu\":\"Public\",\"urutan\":\"1\",\"icon\":\"fab fa-chevron-circle-down\",\"url_menu\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:56:05'),
(260, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenuhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenu/update', '{\"id_mmenu\":\"97\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"id_parent\",\"checkdata2\":\"url_menu\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_maplikasi\":\"21\",\"id_parent\":\"0\",\"nama_menu\":\"Public\",\"urutan\":\"1\",\"icon\":\"nav-icon  fas fa-chevron-circle-down\",\"url_menu\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:56:49'),
(261, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenuhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenu/create', '{\"id_mmenu\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"id_parent\",\"checkdata2\":\"url_menu\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_maplikasi\":\"21\",\"id_parent\":\"0\",\"nama_menu\":\"Support\",\"urutan\":\"3\",\"icon\":\"nav-icon  fas fa-chevron-circle-down\",\"url_menu\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:57:38'),
(262, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenuhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenu/create', '{\"id_mmenu\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"id_parent\",\"checkdata2\":\"url_menu\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_maplikasi\":\"21\",\"id_parent\":\"0\",\"nama_menu\":\"Support\",\"urutan\":\"3\",\"icon\":\"fab fa-chevron-circle-down\",\"url_menu\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:58:02'),
(263, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenuhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenu/create', '{\"id_mmenu\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"id_parent\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_maplikasi\":\"21\",\"id_parent\":\"0\",\"nama_menu\":\"Support\",\"urutan\":\"3\",\"icon\":\"fab fa-chevron-circle-down\",\"url_menu\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:59:02'),
(264, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenuhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenu/create', '{\"id_mmenu\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"id_parent\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_maplikasi\":\"21\",\"id_parent\":\"0\",\"nama_menu\":\"Support\",\"urutan\":\"3\",\"icon\":\"fab fa-chevron-circle-down\",\"url_menu\":\"q\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:59:15'),
(265, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenuhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenu/create', '{\"id_mmenu\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"id_parent\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_maplikasi\":\"21\",\"id_parent\":\"0\",\"nama_menu\":\"Support\",\"urutan\":\"0\",\"icon\":\"q\",\"url_menu\":\"q\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 09:59:25'),
(266, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/add_group/21', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 10:00:20'),
(267, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenuhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenu/create', '{\"id_mmenu\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"id_parent\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_maplikasi\":\"21\",\"id_parent\":\"0\",\"nama_menu\":\"Support\",\"urutan\":\"3\",\"icon\":\"fab fa-chevron-circle-down\",\"url_menu\":\"prt\\/support\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 10:00:51'),
(268, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenuhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenu/create', '{\"id_mmenu\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"nama_menu\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_maplikasi\":\"21\",\"id_parent\":\"0\",\"nama_menu\":\"Support\",\"urutan\":\"3\",\"icon\":\"fab fa-chevron-circle-down\",\"url_menu\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 10:02:16'),
(269, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenuhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenu/update', '{\"id_mmenu\":\"101\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"nama_menu\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_maplikasi\":\"21\",\"id_parent\":\"104\",\"nama_menu\":\"Support Up\",\"urutan\":\"4\",\"icon\":\"far fa-circle\",\"url_menu\":\"prt\\/Support_up\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 10:02:34'),
(270, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenuhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenu/update', '{\"id_mmenu\":\"98\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"nama_menu\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_maplikasi\":\"21\",\"id_parent\":\"104\",\"nama_menu\":\"Support Bottom\",\"urutan\":\"5\",\"icon\":\"far fa-circle\",\"url_menu\":\"prt\\/Support_bottom\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 10:02:44'),
(271, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postgroupmenuhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postgroupmenu/create', '{\"id_mmenu\":\"104\",\"actiondata\":\"create\",\"id_maplikasi\":\"21\",\"id_maplikasigroup\":\"32\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 10:03:00'),
(272, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/edit_menu/104', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 10:03:39'),
(273, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenuhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenu/update', '{\"id_mmenu\":\"104\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"nama_menu\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_maplikasi\":\"21\",\"id_parent\":\"0\",\"nama_menu\":\"Support\",\"urutan\":\"3\",\"icon\":\"fab fa-chevron-circle-down nav-icon\",\"url_menu\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 10:03:47'),
(274, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenuhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenu/update', '{\"id_mmenu\":\"104\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"nama_menu\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_maplikasi\":\"21\",\"id_parent\":\"0\",\"nama_menu\":\"Support\",\"urutan\":\"3\",\"icon\":\"nav-icon fas fa-chevron-circle-down\",\"url_menu\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 10:04:09'),
(275, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/prt/Progress', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 10:05:15'),
(276, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/edit/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 13:51:31'),
(277, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/getdata', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 13:51:31'),
(278, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/home_rca/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 13:51:31'),
(279, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/grid_rca/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 13:51:32'),
(280, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/add', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 13:51:52'),
(281, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/index', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 13:54:04'),
(282, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/edit/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 14:01:18'),
(283, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/edit/2', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 14:01:39'),
(284, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/analisis', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 14:16:58'),
(285, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 14:16:59'),
(286, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/postdata/update', '{\"id_formulir\":\"1\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/02\\/1\",\"tanggal\":\"2020-02-24\",\"title_improvement\":\"Rabu\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"rabu\",\"rincian_tindakan\":\"rabu\",\"dataintablerca_length\":\"10\",\"id\":\"\",\"kesimpulan_akar\":\"tes\",\"dataintable_length\":\"5\",\"kesimpulan_akhir\":\"tes\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 14:21:42'),
(287, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/index', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 14:30:02'),
(288, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/edit/2', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 14:30:04'),
(289, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/home_detail/2', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 14:30:04'),
(290, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/home_rca/2', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 14:30:04'),
(291, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/grid_detail/2', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 14:30:04'),
(292, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/grid_rca/2', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 14:30:04'),
(293, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/postdata/update', '{\"id_formulir\":\"2\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/02\\/2\",\"tanggal\":\"2020-02-20\",\"title_improvement\":\"kamis\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"kamis\",\"rincian_tindakan\":\"kamis\",\"dataintablerca_length\":\"10\",\"id\":\"\",\"kesimpulan_akar\":\"tes\",\"dataintable_length\":\"5\",\"kesimpulan_akhir\":\"tes\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 14:31:18'),
(294, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/update', '{\"id_formulir\":\"1\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"\",\"h_kt\":\"\",\"h_th\":\"2020\",\"h_bln\":\"02\",\"h_no\":\"\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/02\\/1\",\"tanggal\":\"2020-02-24\",\"title_improvement\":\"Rabu\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"rabu\",\"rincian_tindakan\":\"rabu\",\"uraian\":\"\",\"statusevaluasi\":\"1\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 14:33:03'),
(295, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/update', '{\"id_formulir\":\"2\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"\",\"h_kt\":\"\",\"h_th\":\"2020\",\"h_bln\":\"02\",\"h_no\":\"\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/02\\/2\",\"tanggal\":\"2020-02-20\",\"title_improvement\":\"kamis\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"kamis\",\"rincian_tindakan\":\"kamis\",\"uraian\":\"\",\"statusevaluasi\":\"1\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 14:33:09'),
(296, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/update', '{\"id_formulir\":\"1\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"\",\"h_kt\":\"\",\"h_th\":\"2020\",\"h_bln\":\"02\",\"h_no\":\"\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/02\\/1\",\"tanggal\":\"2020-02-24\",\"title_improvement\":\"Rabu\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"rabu\",\"rincian_tindakan\":\"rabu\",\"uraian\":\"\",\"statusevaluasi\":\"0\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 14:38:26'),
(297, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/update', '{\"id_formulir\":\"1\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"\",\"h_kt\":\"\",\"h_th\":\"2020\",\"h_bln\":\"02\",\"h_no\":\"\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/02\\/1\",\"tanggal\":\"2020-02-24\",\"title_improvement\":\"Rabu\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"rabu\",\"rincian_tindakan\":\"rabu\",\"uraian\":\"\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 14:40:47'),
(298, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/update', '{\"id_formulir\":\"1\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"\",\"h_kt\":\"\",\"h_th\":\"2020\",\"h_bln\":\"02\",\"h_no\":\"\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/02\\/1\",\"tanggal\":\"2020-02-24\",\"title_improvement\":\"Rabu\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"rabu\",\"rincian_tindakan\":\"rabu\",\"uraian\":\"\",\"statusevaluasi\":\"\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 15:03:15'),
(299, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/update', '{\"id_formulir\":\"1\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"\",\"h_kt\":\"\",\"h_th\":\"2020\",\"h_bln\":\"02\",\"h_no\":\"\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/02\\/1\",\"tanggal\":\"2020-02-24\",\"title_improvement\":\"Rabu\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"rabu\",\"rincian_tindakan\":\"rabu\",\"uraian\":\"\",\"statusevaluasi\":\"Rabu\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-27 15:05:54'),
(300, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Request', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 01:39:23'),
(301, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Request/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 01:39:24'),
(302, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/edit/8', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 01:40:06'),
(303, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/home_group/8', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 01:40:07'),
(304, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/grid_group/8', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 01:40:07'),
(305, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/home_groupuser/19', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 01:40:55'),
(306, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/grid_groupuser/19', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 01:40:56'),
(307, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/home_groupmenubutton/19', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 01:40:58'),
(308, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postgroupmenubuttonhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postgroupmenubutton/delete', '{\"id_mbutton\":\"26\",\"actiondata\":\"delete\",\"id_maplikasi\":\"8\",\"id_maplikasigroup\":\"19\",\"id_mmenu\":\"60\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 01:41:01'),
(309, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postgroupmenubuttonhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postgroupmenubutton/create', '{\"id_mbutton\":\"26\",\"actiondata\":\"create\",\"id_maplikasi\":\"8\",\"id_maplikasigroup\":\"19\",\"id_mmenu\":\"60\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 01:41:11'),
(310, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Useraccess', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 01:41:50'),
(311, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Useraccess/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 01:41:50'),
(312, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Useraccess/add', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 01:44:05'),
(313, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Useraccess/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Useraccess/postdata/create', '{\"id_user\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"username\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"namaKaryawan\":\"LUTFI ALDILLAH\",\"department_name\":\"IT\",\"id_role\":\"5\",\"username\":\"tes\",\"password\":\"123\",\"email\":\"full@mail.com\",\"no_handphone\":\"\",\"note\":\"hasil\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 01:44:41'),
(314, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Useraccess/index', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 01:44:41'),
(315, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Useraccess/edit/4', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 01:51:35'),
(316, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Request/edit/4', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 02:00:18'),
(317, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Request/index', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 02:00:22'),
(318, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Request/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Request/postdata/update', '{\"id_user\":\"4\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"username\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"namaKaryawan\":\"LUTFI ALDILLAH\",\"department_name\":\"IT\",\"id_role\":\"2\",\"username\":\"tes\",\"password\":\"\",\"email\":\"full@mail.com\",\"no_handphone\":\"\",\"note\":\"hasil\",\"statusdata\":\"active\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 02:00:31'),
(319, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Request/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Request/postdata/update', '{\"id_user\":\"4\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"username\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"namaKaryawan\":\"LUTFI ALDILLAH\",\"department_name\":\"IT\",\"id_role\":\"5\",\"username\":\"tes\",\"password\":\"\",\"email\":\"full@mail.com\",\"no_handphone\":\"\",\"note\":\"hasil\",\"statusdata\":\"active\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 02:00:40'),
(320, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/evaluasi', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 02:03:04'),
(321, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Evaluasi/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 02:03:05'),
(322, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Useraccess', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 02:05:02'),
(323, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Useraccess/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 02:05:02'),
(324, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Request', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 02:13:36'),
(325, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Request/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 02:13:36'),
(326, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Useraccess/Preview/4', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 02:17:47'),
(327, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Useraccess/edit/4', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 02:25:08'),
(328, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Useraccess/index', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 02:25:14'),
(329, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Useraccess/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Useraccess/postdata/update', '{\"id_user\":\"4\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"username\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"namaKaryawan\":\"LUTFI ALDILLAH\",\"department_name\":\"IT\",\"id_role\":\"5\",\"username\":\"tes\",\"password\":\"\",\"email\":\"full@mail.com\",\"no_handphone\":\"\",\"note\":\"hasil\",\"status_login\":\"1\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 02:32:44'),
(330, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Useraccess/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Useraccess/postdata/update', '{\"id_user\":\"4\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"username\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"namaKaryawan\":\"LUTFI ALDILLAH\",\"department_name\":\"IT\",\"id_role\":\"5\",\"username\":\"tes\",\"password\":\"\",\"email\":\"full@mail.com\",\"no_handphone\":\"\",\"note\":\"hasil\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 02:32:51'),
(331, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 02:43:01'),
(332, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 02:43:01'),
(333, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/edit/8', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 02:43:03'),
(334, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/home_group/8', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 02:43:04'),
(335, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/grid_group/8', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 02:43:04'),
(336, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Request/add', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 02:44:18'),
(337, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/add', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 02:45:55'),
(338, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/cekdatalog', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 02:46:38'),
(339, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevNB\",\"h_kt\":\"K\",\"h_th\":\"2020\",\"h_bln\":\"02\",\"h_no\":\"3\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/02\\/3\",\"tanggal\":\"24-02-2020\",\"title_improvement\":\"penyimpangan\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"7\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"penyimpangan\",\"rincian_tindakan\":\"penyimpangan\",\"dampak\":\"2\",\"uraian\":\"\",\"statusevaluasi\":\"1\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 02:49:20'),
(340, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevNB\",\"h_kt\":\"K\",\"h_th\":\"2020\",\"h_bln\":\"02\",\"h_no\":\"3\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/02\\/3\",\"tanggal\":\"24-02-2020\",\"title_improvement\":\"penyimpangan\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"7\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"penyimpangan\",\"rincian_tindakan\":\"penyimpangan\",\"dampak\":\"1\",\"uraian\":\"test\",\"statusevaluasi\":\"1\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 02:49:36'),
(341, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevNB\",\"h_kt\":\"K\",\"h_th\":\"2020\",\"h_bln\":\"02\",\"h_no\":\"3\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/02\\/3\",\"tanggal\":\"24-02-2020\",\"title_improvement\":\"penyimpangan\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"7\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"penyimpangan\",\"rincian_tindakan\":\"penyimpangan\",\"dampak\":\"1\",\"uraian\":\"test\",\"department_name\":[\"IT\",\"QA\",\"QC\"],\"statusevaluasi\":\"1\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 02:49:43'),
(342, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/index', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 02:49:43'),
(343, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Evaluasi/edit/3', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 02:50:31'),
(344, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Evaluasi/getdata', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 02:50:32'),
(345, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Evaluasi/home_nilai_evaluasi/3', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 02:50:32'),
(346, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Evaluasi/grid_nilaievaluasi/3', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 02:50:32'),
(347, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Evaluasi/add_nilai_evaluasi/3', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 02:50:43'),
(348, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Evaluasi/postdata_nilai_evaluasi', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 02:51:28'),
(349, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Evaluasi/index', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 02:52:05'),
(350, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/edit/3', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 02:52:13'),
(351, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/home_rca/3', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 02:52:13'),
(352, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/home_detail/3', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 02:52:13'),
(353, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/grid_rca/3', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 02:52:13'),
(354, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/grid_detail/3', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 02:52:13'),
(355, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/add_rca/3', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 02:52:52'),
(356, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/Preview/3', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 02:53:44'),
(357, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Evaluasi/Preview/3', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 02:53:50'),
(358, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/update', '{\"id_formulir\":\"1\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"Y\",\"h_kp\":\"\",\"h_kt\":\"\",\"h_th\":\"2020\",\"h_bln\":\"02\",\"h_no\":\"\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/02\\/1\",\"tanggal\":\"2020-02-24\",\"title_improvement\":\"Rabu\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"rabu\",\"rincian_tindakan\":\"rabu\",\"dampak\":\"2\",\"uraian\":\"\",\"statusevaluasi\":\"Rabu\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 03:10:53'),
(359, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/cekdatalog', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 03:14:33'),
(360, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"Y\",\"h_kp\":\"DevNB\",\"h_kt\":\"K\",\"h_th\":\"2020\",\"h_bln\":\"02\",\"h_no\":\"4\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/02\\/4\",\"tanggal\":\"28-02-2020\",\"title_improvement\":\"judul\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"6\",\"number\":\"NA\",\"id_resiko\":\"1\",\"rincian_penyimpangan\":\"judul\",\"rincian_tindakan\":\"judul\",\"dampak\":\"2\",\"uraian\":\"\",\"department_name\":[\"IT\",\"QA\",\"QC\"],\"statusevaluasi\":\"1\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 03:17:03'),
(361, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"Y\",\"h_kp\":\"DevNB\",\"h_kt\":\"K\",\"h_th\":\"2020\",\"h_bln\":\"02\",\"h_no\":\"4\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/02\\/4\",\"tanggal\":\"28-02-2020\",\"title_improvement\":\"judul\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"judul\",\"rincian_tindakan\":\"judul\",\"dampak\":\"2\",\"uraian\":\"\",\"department_name\":[\"IT\",\"QA\"],\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 03:18:09'),
(362, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/edit/4', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 03:19:40');
INSERT INTO `userlog` (`id_userlog`, `id_useraccess`, `url`, `requestdata`, `ipaddress`, `browser`, `systemdevice`, `accesstime`) VALUES
(363, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/update', '{\"id_formulir\":\"4\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"Y\",\"h_kp\":\"\",\"h_kt\":\"\",\"h_th\":\"2020\",\"h_bln\":\"02\",\"h_no\":\"\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/02\\/4\",\"tanggal\":\"2020-02-28\",\"title_improvement\":\"judul\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"judul\",\"rincian_tindakan\":\"judul\",\"uraian\":\"\",\"statusevaluasi\":\"judul\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 03:19:43'),
(364, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/update', '{\"id_formulir\":\"4\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"Y\",\"h_kp\":\"\",\"h_kt\":\"\",\"h_th\":\"2020\",\"h_bln\":\"02\",\"h_no\":\"\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/02\\/4\",\"tanggal\":\"2020-02-28\",\"title_improvement\":\"judul\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"judul\",\"rincian_tindakan\":\"judul\",\"dampak\":\"2\",\"uraian\":\"\",\"statusevaluasi\":\"1\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 03:22:48'),
(365, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Evaluasi/edit/4', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 03:25:19'),
(366, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Evaluasi/home_nilai_evaluasi/4', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 03:25:20'),
(367, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Evaluasi/grid_nilaievaluasi/4', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 03:25:20'),
(368, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Evaluasi/add_nilai_evaluasi/4', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 03:25:22'),
(369, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Evaluasi/Preview/4', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 04:02:27'),
(370, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/edit/3', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 04:20:45'),
(371, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/home_rca/3', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 04:20:45'),
(372, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/grid_rca/3', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 04:20:45'),
(373, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/add_rca/3', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 04:20:50'),
(374, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/postrca', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 04:25:07'),
(375, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/edit_rca/11', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 04:27:03'),
(376, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/edit/4', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 04:30:32'),
(377, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/home_rca/4', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 04:30:33'),
(378, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/home_detail/4', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 04:30:33'),
(379, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/grid_rca/4', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 04:30:33'),
(380, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/grid_detail/4', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 04:30:33'),
(381, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/Preview/4', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 04:38:48'),
(382, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/Preview/2', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 04:39:06'),
(383, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"Y\",\"h_kp\":\"DevNB\",\"h_kt\":\"K\",\"h_th\":\"2020\",\"h_bln\":\"02\",\"h_no\":\"5\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/02\\/5\",\"tanggal\":\"28-02-2020\",\"title_improvement\":\"testing\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"7\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"testing\",\"rincian_tindakan\":\"testing\",\"dampak\":\"2\",\"uraian\":\"\",\"department_name\":[\"IT\",\"QA\",\"QC\"],\"statusevaluasi\":\"1\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 06:46:38'),
(384, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"Y\",\"h_kp\":\"DevNB\",\"h_kt\":\"U\",\"h_th\":\"2020\",\"h_bln\":\"02\",\"h_no\":\"1\",\"improvement_code\":\"DevNB\\/U\\/IT\\/2020\\/02\\/1\",\"tanggal\":\"27-02-2020\",\"title_improvement\":\"testing\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"3\",\"id_jenis\":\"8\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"testing\",\"rincian_tindakan\":\"testing\",\"dampak\":\"2\",\"uraian\":\"\",\"department_name\":[\"IT\",\"QA\"],\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 06:47:15'),
(385, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Useraccess/add', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 07:04:29'),
(386, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Department', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 07:04:52'),
(387, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Department/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 07:04:52'),
(388, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Department/edit/11', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 07:04:59'),
(389, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Department/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Department/postdata/update', '{\"id_department\":\"11\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"department_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"department_code\":\"Warehouse\",\"department_name\":\"WH\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 07:05:04'),
(390, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Department/index', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 07:05:04'),
(391, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Useraccess/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Useraccess/postdata/create', '{\"id_user\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"username\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"namaKaryawan\":\"ARMET KOSAPUTRA\",\"department_name\":\"WH\",\"id_role\":\"5\",\"username\":\"wh_armet\",\"password\":\"123\",\"email\":\"armet@lessial.com\",\"no_handphone\":\"\",\"note\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 07:06:01'),
(392, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Useraccess/edit/5', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 07:06:04'),
(393, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Useraccess/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Useraccess/postdata/update', '{\"id_user\":\"5\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"username\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"namaKaryawan\":\"ARMET KOSAPUTRA\",\"department_name\":\"WH\",\"id_role\":\"5\",\"username\":\"wh_armet\",\"password\":\"\",\"email\":\"armet@lessial.com\",\"no_handphone\":\"\",\"note\":\"\",\"status_login\":\"1\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 07:06:07'),
(394, 5, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 07:06:28'),
(395, 5, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/Dashboard', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 07:06:28'),
(396, 5, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/Dashboard/getnotification', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 07:06:28'),
(397, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/add_groupuser/19', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 07:06:47'),
(398, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatagroupuserhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatagroupuser/create', '{\"id_maplikasigroupuser\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"id_maplikasigroup\",\"checkdata2\":\"id_user\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_maplikasigroup\":\"19\",\"id_user\":\"5\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 07:06:51'),
(399, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/home_groupmenu/19', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 07:06:53'),
(400, 5, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Formulir', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 07:07:20'),
(401, 5, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 07:07:21'),
(402, 5, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/add', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 07:07:24'),
(403, 5, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/cekdatalog', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 07:07:36'),
(404, 5, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"Y\",\"h_kp\":\"DevNB\",\"h_kt\":\"K\",\"h_th\":\"2020\",\"h_bln\":\"02\",\"h_no\":\"6\",\"improvement_code\":\"DevNB\\/K\\/WH\\/2020\\/02\\/6\",\"tanggal\":\"28-02-2020\",\"title_improvement\":\"testing\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"testing\",\"rincian_tindakan\":\"testing\",\"dampak\":\"2\",\"uraian\":\"\",\"department_name\":[\"IT\",\"QA\"],\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 07:07:49'),
(405, 5, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"Y\",\"h_kp\":\"DevNB\",\"h_kt\":\"O\",\"h_th\":\"2020\",\"h_bln\":\"02\",\"h_no\":\"1\",\"improvement_code\":\"DevNB\\/O\\/WH\\/2020\\/02\\/1\",\"tanggal\":\"27-02-2020\",\"title_improvement\":\"testing\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"2\",\"id_jenis\":\"6\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"testing\",\"rincian_tindakan\":\"testing\",\"dampak\":\"2\",\"uraian\":\"\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 07:08:27'),
(406, 5, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"Y\",\"h_kp\":\"DevNB\",\"h_kt\":\"O\",\"h_th\":\"2020\",\"h_bln\":\"02\",\"h_no\":\"1\",\"improvement_code\":\"DevNB\\/O\\/WH\\/2020\\/02\\/1\",\"tanggal\":\"27-02-2020\",\"title_improvement\":\"testing\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"2\",\"id_jenis\":\"6\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"testing\",\"rincian_tindakan\":\"testing\",\"dampak\":\"2\",\"uraian\":\"\",\"department_name\":[\"IT\",\"QA\"],\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 07:08:52'),
(407, 5, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"Y\",\"h_kp\":\"DevNB\",\"h_kt\":\"O\",\"h_th\":\"2020\",\"h_bln\":\"02\",\"h_no\":\"2\",\"improvement_code\":\"DevNB\\/O\\/WH\\/2020\\/02\\/2\",\"tanggal\":\"27-02-2020\",\"title_improvement\":\"testing\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"2\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"testing\",\"rincian_tindakan\":\"testing\",\"dampak\":\"1\",\"uraian\":\"testing\",\"department_name\":[\"IT\",\"QA\"],\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 07:09:19'),
(408, 5, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"Y\",\"h_kp\":\"DevNB\",\"h_kt\":\"O\",\"h_th\":\"2020\",\"h_bln\":\"02\",\"h_no\":\"2\",\"improvement_code\":\"DevNB\\/O\\/WH\\/2020\\/02\\/2\",\"tanggal\":\"27-02-2020\",\"title_improvement\":\"testing\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"2\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"testing\",\"rincian_tindakan\":\"testing\",\"dampak\":\"1\",\"uraian\":\"testing\",\"department_name\":[\"IT\",\"QA\",\"WH\"],\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 07:09:27'),
(409, 5, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"Y\",\"h_kp\":\"DevNB\",\"h_kt\":\"U\",\"h_th\":\"2020\",\"h_bln\":\"02\",\"h_no\":\"2\",\"improvement_code\":\"DevNB\\/U\\/WH\\/2020\\/02\\/2\",\"tanggal\":\"27-02-2020\",\"title_improvement\":\"testing\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"3\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"testing\",\"rincian_tindakan\":\"testing\",\"dampak\":\"2\",\"uraian\":\"\",\"department_name\":[\"IT\",\"QA\"],\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 07:10:47'),
(410, 5, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"Y\",\"h_kp\":\"DevNB\",\"h_kt\":\"U\",\"h_th\":\"2020\",\"h_bln\":\"02\",\"h_no\":\"3\",\"improvement_code\":\"DevNB\\/U\\/WH\\/2020\\/02\\/3\",\"tanggal\":\"27-02-2020\",\"title_improvement\":\"testing\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"3\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"testing\",\"rincian_tindakan\":\"testing\",\"dampak\":\"2\",\"uraian\":\"\",\"department_name\":[\"IT\",\"QA\"],\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 07:12:08'),
(411, 5, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevNB\",\"h_kt\":\"K\",\"h_th\":\"2020\",\"h_bln\":\"02\",\"h_no\":\"7\",\"improvement_code\":\"DevNB\\/K\\/WH\\/2020\\/02\\/7\",\"tanggal\":\"27-02-2020\",\"title_improvement\":\"testing\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"7\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"testing\",\"rincian_tindakan\":\"testing\",\"dampak\":\"2\",\"uraian\":\"\",\"department_name\":[\"IT\",\"QA\"],\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 07:13:15'),
(412, 5, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevNB\",\"h_kt\":\"O\",\"h_th\":\"2020\",\"h_bln\":\"02\",\"h_no\":\"3\",\"improvement_code\":\"DevNB\\/O\\/WH\\/2020\\/02\\/3\",\"tanggal\":\"27-02-2020\",\"title_improvement\":\"testing\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"2\",\"id_jenis\":\"6\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"testing\",\"rincian_tindakan\":\"testing\",\"dampak\":\"2\",\"uraian\":\"\",\"department_name\":[\"IT\",\"QA\"],\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 07:14:35'),
(413, 5, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevNB\",\"h_kt\":\"K\",\"h_th\":\"2020\",\"h_bln\":\"02\",\"h_no\":\"8\",\"improvement_code\":\"DevNB\\/K\\/WH\\/2020\\/02\\/8\",\"tanggal\":\"27-02-2020\",\"title_improvement\":\"testing\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"testing\",\"rincian_tindakan\":\"testing\",\"dampak\":\"2\",\"uraian\":\"\",\"department_name\":[\"IT\",\"QA\"],\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 07:16:17'),
(414, 5, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/index', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 07:16:17'),
(415, 5, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevNB\",\"h_kt\":\"O\",\"h_th\":\"2020\",\"h_bln\":\"02\",\"h_no\":\"4\",\"improvement_code\":\"DevNB\\/O\\/WH\\/2020\\/02\\/4\",\"tanggal\":\"26-02-2020\",\"title_improvement\":\"testing\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"2\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"testing\",\"rincian_tindakan\":\"testing\",\"dampak\":\"2\",\"uraian\":\"\",\"department_name\":[\"IT\",\"QA\"],\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 07:18:17'),
(416, 5, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevNB\",\"h_kt\":\"U\",\"h_th\":\"2020\",\"h_bln\":\"02\",\"h_no\":\"4\",\"improvement_code\":\"DevNB\\/U\\/WH\\/2020\\/02\\/4\",\"tanggal\":\"24-02-2020\",\"title_improvement\":\"testing\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"3\",\"id_jenis\":\"7\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"testing\",\"rincian_tindakan\":\"testing\",\"dampak\":\"2\",\"uraian\":\"\",\"department_name\":[\"IT\",\"QA\"],\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 07:20:40'),
(417, 5, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevNB\",\"h_kt\":\"U\",\"h_th\":\"2020\",\"h_bln\":\"02\",\"h_no\":\"5\",\"improvement_code\":\"DevNB\\/U\\/WH\\/2020\\/02\\/5\",\"tanggal\":\"28-02-2020\",\"title_improvement\":\"hidden\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"3\",\"id_jenis\":\"7\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"hidden\",\"rincian_tindakan\":\"hidden\",\"dampak\":\"2\",\"uraian\":\"\",\"department_name\":[\"IT\",\"QA\"],\"statusevaluasi\":\"0\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 07:25:38'),
(418, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/home_groupuser/26', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 07:32:58'),
(419, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/grid_groupuser/26', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 07:32:58'),
(420, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/add_groupuser/26', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 07:33:00'),
(421, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Useraccess/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Useraccess/postdata/create', '{\"id_user\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"username\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"namaKaryawan\":\"DENNY RACHMADI\",\"department_name\":\"WH\",\"id_role\":\"2\",\"username\":\"wh_denny\",\"password\":\"123\",\"email\":\"denny@lessential.com\",\"no_handphone\":\"\",\"note\":\"\",\"status_login\":\"1\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 07:34:01'),
(422, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatagroupuserhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatagroupuser/create', '{\"id_maplikasigroupuser\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"id_maplikasigroup\",\"checkdata2\":\"id_user\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_maplikasigroup\":\"26\",\"id_user\":\"6\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 07:34:22'),
(423, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/home_groupmenu/26', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 07:34:23'),
(424, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/home_groupmenubutton/26', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 07:34:26'),
(425, 6, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 07:34:43'),
(426, 6, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/Dashboard', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 07:34:44'),
(427, 6, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/Dashboard/getnotification', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 07:34:44'),
(428, 6, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Formulir', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 07:34:47'),
(429, 6, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 07:34:47'),
(430, 6, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/evaluasi', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 07:34:55'),
(431, 6, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Evaluasi/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 07:34:55'),
(432, 6, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/approve', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 07:34:58'),
(433, 6, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 07:34:58'),
(434, 6, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/edit/9', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 07:35:02'),
(435, 6, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/update', '{\"id_formulir\":\"9\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"\",\"h_kt\":\"\",\"h_th\":\"2020\",\"h_bln\":\"02\",\"h_no\":\"\",\"improvement_code\":\"DevNB\\/U\\/WH\\/2020\\/02\\/5\",\"tanggal\":\"2020-02-28\",\"title_improvement\":\"hidden\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"3\",\"id_jenis\":\"7\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"hidden\",\"rincian_tindakan\":\"hidden\",\"dampak\":\"2\",\"uraian\":\"\",\"statusevaluasi\":\"1\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 07:35:06'),
(436, 6, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/index', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 07:35:06'),
(437, 6, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/edit/7', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 07:35:08'),
(438, 6, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/update', '{\"id_formulir\":\"7\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"\",\"h_kt\":\"\",\"h_th\":\"2020\",\"h_bln\":\"02\",\"h_no\":\"\",\"improvement_code\":\"DevNB\\/K\\/WH\\/2020\\/02\\/8\",\"tanggal\":\"2020-02-27\",\"title_improvement\":\"testing\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"testing\",\"rincian_tindakan\":\"testing\",\"uraian\":\"\",\"statusevaluasi\":\"1\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 07:35:11'),
(439, 6, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/edit/8', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 07:35:13'),
(440, 6, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/update', '{\"id_formulir\":\"8\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"\",\"h_kt\":\"\",\"h_th\":\"2020\",\"h_bln\":\"02\",\"h_no\":\"\",\"improvement_code\":\"DevNB\\/U\\/WH\\/2020\\/02\\/4\",\"tanggal\":\"2020-02-24\",\"title_improvement\":\"testing\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"3\",\"id_jenis\":\"7\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"testing\",\"rincian_tindakan\":\"testing\",\"uraian\":\"\",\"statusevaluasi\":\"1\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 07:35:16'),
(441, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/edit/8', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 07:37:46'),
(442, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/home_rca/5', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 07:37:46'),
(443, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/grid_rca/5', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 07:37:46'),
(444, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/add_rca/5', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 07:38:05'),
(445, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/edit/5', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 07:38:14'),
(446, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/edit/4', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 08:52:44'),
(447, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/home_rca/4', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 08:52:44'),
(448, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/grid_rca/4', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 08:52:44'),
(449, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevNB\",\"h_kt\":\"O\",\"h_th\":\"2020\",\"h_bln\":\"02\",\"h_no\":\"5\",\"improvement_code\":\"DevNB\\/O\\/IT\\/2020\\/02\\/5\",\"tanggal\":\"28-02-2020\",\"title_improvement\":\"test\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"2\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"test\",\"rincian_tindakan\":\"test\",\"dampak\":\"2\",\"uraian\":\"\",\"statusevaluasi\":\"0\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 08:56:16'),
(450, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Evaluasi/edit/5', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 09:07:47'),
(451, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Evaluasi/home_nilai_evaluasi/5', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 09:07:48'),
(452, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Evaluasi/grid_nilaievaluasi/5', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 09:07:48'),
(453, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Evaluasi/edit/9', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 09:07:59'),
(454, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Evaluasi/home_nilai_evaluasi/9', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 09:08:01'),
(455, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Evaluasi/grid_nilaievaluasi/9', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 09:08:01'),
(456, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Evaluasi/edit_nilai_evaluasi/5', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-28 09:08:07'),
(457, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/prt/Public_up', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 01:50:44'),
(458, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/prt/Public_up/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 01:50:44'),
(459, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/prt/Progress/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 01:51:38'),
(460, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/prt/Support_up', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 02:04:46'),
(461, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/prt/Support_up/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 02:04:46'),
(462, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/prt/Support_bottom', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 02:05:55'),
(463, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/prt/Support_bottom/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 02:05:55'),
(464, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenuhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenu/update', '{\"id_mmenu\":\"99\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"nama_menu\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_maplikasi\":\"21\",\"id_parent\":\"0\",\"nama_menu\":\"Slide Show\",\"urutan\":\"6\",\"icon\":\"fas fa-info-circle\",\"url_menu\":\"prt\\/Info\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 02:28:33'),
(465, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/prt/Info', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 02:28:40'),
(466, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/prt/Info/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 02:28:40'),
(467, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/prt/Info/add', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 02:28:49'),
(468, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/prt/Info/index', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 02:28:53'),
(469, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/eml/Email', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 03:33:41'),
(470, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/eml/Email/add', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 03:40:20'),
(471, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Icon', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 03:40:31'),
(472, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Icon/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 03:40:31'),
(473, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Maplikasi', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 03:51:54'),
(474, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Maplikasi/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 03:51:54'),
(475, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenuhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatamenu/update', '{\"id_mmenu\":\"99\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"nama_menu\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_maplikasi\":\"21\",\"id_parent\":\"0\",\"nama_menu\":\"Slide Show\",\"urutan\":\"6\",\"icon\":\"nav-icon fas fa-info-circle\",\"url_menu\":\"prt\\/Info\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 03:53:28'),
(476, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/prt/Progress', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 07:20:03'),
(477, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/prt/Progress/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 07:20:03'),
(478, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/prt/Progress/add', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 07:20:06'),
(479, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/prt/Progress/index', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 07:20:11'),
(480, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/prt/Support_up', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 07:23:50'),
(481, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/prt/Support_up/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 07:23:50'),
(482, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/prt/Support_up/add', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 07:23:51'),
(483, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/prt/Support_up/index', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 07:24:44'),
(484, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/edit/7', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 07:26:01'),
(485, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/home_group/7', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 07:26:01'),
(486, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/grid_group/7', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 07:26:01'),
(487, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Maplikasi', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 07:26:03'),
(488, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Maplikasi/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 07:26:03'),
(489, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Role', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 07:26:08'),
(490, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Role/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 07:26:08'),
(491, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/utl/penandatangan', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 07:26:12'),
(492, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Penandatangan/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 07:26:13'),
(493, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Logno', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 07:26:14'),
(494, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Logno/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 07:26:14'),
(495, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Icon', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 07:26:17'),
(496, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Icon/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 07:26:17'),
(497, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/eml/Email', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 07:30:34'),
(498, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Laporan/home_laporan', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 07:41:17'),
(499, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Laporan/generatereport', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 07:41:22'),
(500, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/prt/Info', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 07:58:59'),
(501, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/prt/Info/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 07:58:59'),
(502, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/prt/Public_up', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 08:02:23'),
(503, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/prt/Public_up/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 08:02:23'),
(504, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/prt/Public_bottom', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 08:11:20'),
(505, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/prt/Public_bottom/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 08:11:20'),
(506, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/prt/Support_bottom', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 08:14:57'),
(507, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/prt/Support_bottom/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 08:14:58'),
(508, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Mruanglingkup', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 08:17:55'),
(509, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/mruanglingkup/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 08:17:55'),
(510, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Mkatagori', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 08:17:58'),
(511, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/mkatagori/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 08:17:58'),
(512, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Mjenis', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 08:18:00'),
(513, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/mjenis/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 08:18:00'),
(514, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Mtipe', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 08:18:01'),
(515, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/mtipe/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 08:18:01'),
(516, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Mresiko', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 08:18:03'),
(517, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/mresiko/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 08:18:03'),
(518, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/File_evaluasi', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 08:18:04'),
(519, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/File_evaluasi/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 08:18:05'),
(520, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/File_analisis', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 08:18:05'),
(521, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/File_analisis/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 08:18:05'),
(522, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/edit/5', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 08:55:58'),
(523, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/home_approve/4', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 09:10:30'),
(524, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/grid_bankquota/4', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 09:11:04'),
(525, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Formulir/home_evaluasi', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 09:44:57'),
(526, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/evaluasigrid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 09:44:57'),
(527, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/Dashboard/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/Dashboard/postdata/', '{\"actiondata\":\"\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"statuspreview\":\"1\",\"uraian\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 09:48:56'),
(528, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/home_approve/6', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 09:49:50'),
(529, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/home_groupuser/19', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 09:57:11'),
(530, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/grid_groupuser/19', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 09:57:11'),
(531, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/add_groupuser/19', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 09:57:14'),
(532, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevNB\",\"h_kt\":\"K\",\"h_th\":\"2020\",\"h_bln\":\"02\",\"h_no\":\"9\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/02\\/9\",\"tanggal\":\"29-02-2020\",\"title_improvement\":\"sabtu\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"1\",\"rincian_penyimpangan\":\"sabtu\",\"rincian_tindakan\":\"sabtu\",\"dampak\":\"0\",\"uraian\":\"\",\"department_name\":[\"IT\",\"QA\",\"QC\"],\"statusevaluasi\":\"0\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 12:25:22'),
(533, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevNB\",\"h_kt\":\"O\",\"h_th\":\"2020\",\"h_bln\":\"02\",\"h_no\":\"5\",\"improvement_code\":\"DevNB\\/O\\/IT\\/2020\\/02\\/5\",\"tanggal\":\"29-02-2020\",\"title_improvement\":\"sabtu\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"2\",\"id_jenis\":\"6\",\"number\":\"NA\",\"id_resiko\":\"1\",\"rincian_penyimpangan\":\"sabtu\",\"rincian_tindakan\":\"sabtu\",\"dampak\":\"0\",\"uraian\":\"\",\"department_name\":[\"IT\",\"QA\"],\"statusevaluasi\":\"0\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 12:54:27'),
(534, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevNB\",\"h_kt\":\"K\",\"h_th\":\"2020\",\"h_bln\":\"02\",\"h_no\":\"9\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/02\\/9\",\"tanggal\":\"29-02-2020\",\"title_improvement\":\"sabtu\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"1\",\"rincian_penyimpangan\":\"sabtu\",\"rincian_tindakan\":\"sabtu\",\"dampak\":\"0\",\"uraian\":\"\",\"department_name\":[\"IT\",\"QA\"],\"statusevaluasi\":\"0\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 12:55:50'),
(535, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevNB\",\"h_kt\":\"K\",\"h_th\":\"2020\",\"h_bln\":\"02\",\"h_no\":\"10\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/02\\/10\",\"tanggal\":\"29-02-2020\",\"title_improvement\":\" \\\"id_formulir\\\"          => $pa\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"7\",\"number\":\"NA\",\"id_resiko\":\"1\",\"rincian_penyimpangan\":\" \\\"id_formulir\\\"          => $param [\'id_formulir\'],\",\"rincian_tindakan\":\" \\\"id_formulir\\\"          => $param [\'id_formulir\'],\",\"dampak\":\"0\",\"uraian\":\"\",\"department_name\":[\"IT\"],\"statusevaluasi\":\"0\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 12:59:50'),
(536, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/edit/4', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 13:05:31');
INSERT INTO `userlog` (`id_userlog`, `id_useraccess`, `url`, `requestdata`, `ipaddress`, `browser`, `systemdevice`, `accesstime`) VALUES
(537, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevNB\",\"h_kt\":\"K\",\"h_th\":\"2020\",\"h_bln\":\"02\",\"h_no\":\"10\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/02\\/10\",\"tanggal\":\"29-02-2020\",\"title_improvement\":\"\\\"id_formulir\\\"          => $par\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"6\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"\\\"id_formulir\\\"          => $param [\'id_formulir\'],\",\"rincian_tindakan\":\"\\\"id_formulir\\\"          => $param [\'id_formulir\'],\",\"dampak\":\"0\",\"uraian\":\"\",\"department_name\":[\"IT\",\"QA\"],\"statusevaluasi\":\"0\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 13:23:11'),
(538, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevNB\",\"h_kt\":\"K\",\"h_th\":\"2020\",\"h_bln\":\"02\",\"h_no\":\"10\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/02\\/10\",\"tanggal\":\"29-02-2020\",\"title_improvement\":\"tes id\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"tes id\",\"rincian_tindakan\":\"tes id\",\"dampak\":\"0\",\"uraian\":\"\",\"department_name\":[\"IT\",\"QA\"],\"statusevaluasi\":\"0\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 13:59:33'),
(539, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevB\",\"h_kt\":\"K\",\"h_th\":\"2020\",\"h_bln\":\"02\",\"h_no\":\"11\",\"improvement_code\":\"DevB\\/K\\/IT\\/2020\\/02\\/11\",\"tanggal\":\"29-02-2020\",\"title_improvement\":\"tes id\",\"id_tipe\":\"1\",\"id_katagori\":\"1\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"1\",\"rincian_penyimpangan\":\"tes id\",\"rincian_tindakan\":\"tes id\",\"dampak\":\"0\",\"uraian\":\"\",\"department_name\":[\"IT\",\"QA\"],\"statusevaluasi\":\"0\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 14:02:17'),
(540, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevNB\",\"h_kt\":\"K\",\"h_th\":\"2020\",\"h_bln\":\"02\",\"h_no\":\"12\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/02\\/12\",\"tanggal\":\"29-02-2020\",\"title_improvement\":\"$id_formulir\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"$id_formulir\",\"rincian_tindakan\":\"$id_formulir\",\"dampak\":\"0\",\"uraian\":\"\",\"department_name\":[\"IT\",\"QA\"],\"statusevaluasi\":\"0\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 14:08:14'),
(541, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevB\",\"h_kt\":\"K\",\"h_th\":\"2020\",\"h_bln\":\"02\",\"h_no\":\"13\",\"improvement_code\":\"DevB\\/K\\/IT\\/2020\\/02\\/13\",\"tanggal\":\"29-02-2020\",\"title_improvement\":\"e01_ts_formulir\",\"id_tipe\":\"2\",\"id_katagori\":\"1\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"7\",\"number\":\"NA\",\"id_resiko\":\"1\",\"rincian_penyimpangan\":\"e01_ts_formulir\",\"rincian_tindakan\":\"e01_ts_formulir\",\"dampak\":\"0\",\"uraian\":\"\",\"department_name\":[\"IT\",\"QA\"],\"statusevaluasi\":\"0\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 14:09:43'),
(542, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevNB\",\"h_kt\":\"K\",\"h_th\":\"2020\",\"h_bln\":\"02\",\"h_no\":\"14\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/02\\/14\",\"tanggal\":\"29-02-2020\",\"title_improvement\":\"tes\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"1\",\"rincian_penyimpangan\":\"id_formulir\",\"rincian_tindakan\":\"id_formulir\",\"dampak\":\"0\",\"uraian\":\"\",\"department_name\":[\"IT\",\"QA\"],\"statusevaluasi\":\"0\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 14:22:22'),
(543, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevNB\",\"h_kt\":\"K\",\"h_th\":\"2020\",\"h_bln\":\"02\",\"h_no\":\"15\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/02\\/15\",\"tanggal\":\"29-02-2020\",\"title_improvement\":\"lagi\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"1\",\"rincian_penyimpangan\":\"lagi\",\"rincian_tindakan\":\"lagi\",\"dampak\":\"0\",\"uraian\":\"\",\"department_name\":[\"IT\",\"QA\"],\"statusevaluasi\":\"0\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 14:26:01'),
(544, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevNB\",\"h_kt\":\"K\",\"h_th\":\"2020\",\"h_bln\":\"02\",\"h_no\":\"16\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/02\\/16\",\"tanggal\":\"29-02-2020\",\"title_improvement\":\"16\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"6\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"16\",\"rincian_tindakan\":\"16\",\"dampak\":\"0\",\"uraian\":\"\",\"department_name\":[\"IT\",\"QA\"],\"statusevaluasi\":\"0\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 14:32:33'),
(545, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevNB\",\"h_kt\":\"K\",\"h_th\":\"2020\",\"h_bln\":\"02\",\"h_no\":\"17\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/02\\/17\",\"tanggal\":\"29-02-2020\",\"title_improvement\":\"17\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"6\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"17\",\"rincian_tindakan\":\"17\",\"dampak\":\"0\",\"uraian\":\"\",\"department_name\":[\"IT\",\"QA\"],\"statusevaluasi\":\"0\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 14:34:51'),
(546, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevNB\",\"h_kt\":\"K\",\"h_th\":\"2020\",\"h_bln\":\"02\",\"h_no\":\"17\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/02\\/17\",\"tanggal\":\"29-02-2020\",\"title_improvement\":\"e01_ts_formulir\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"1\",\"rincian_penyimpangan\":\"e01_ts_formulir\",\"rincian_tindakan\":\"e01_ts_formulir\",\"dampak\":\"0\",\"uraian\":\"\",\"department_name\":[\"IT\",\"QA\"],\"statusevaluasi\":\"0\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 14:38:55'),
(547, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevNB\",\"h_kt\":\"K\",\"h_th\":\"2020\",\"h_bln\":\"02\",\"h_no\":\"18\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/02\\/18\",\"tanggal\":\"29-02-2020\",\"title_improvement\":\"111\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"6\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"111\",\"rincian_tindakan\":\"111\",\"dampak\":\"0\",\"uraian\":\"\",\"department_name\":[\"IT\",\"QA\"],\"statusevaluasi\":\"0\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 14:54:42'),
(548, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/edit/10', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 14:55:26'),
(549, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevNB\",\"h_kt\":\"K\",\"h_th\":\"2020\",\"h_bln\":\"02\",\"h_no\":\"19\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/02\\/19\",\"tanggal\":\"29-02-2020\",\"title_improvement\":\"ter\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"1\",\"rincian_penyimpangan\":\"insert_id\",\"rincian_tindakan\":\"insert_id\",\"dampak\":\"0\",\"uraian\":\"\",\"department_name\":[\"IT\",\"QA\"],\"statusevaluasi\":\"0\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 15:18:04'),
(550, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevNB\",\"h_kt\":\"K\",\"h_th\":\"2020\",\"h_bln\":\"02\",\"h_no\":\"19\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/02\\/19\",\"tanggal\":\"29-02-2020\",\"title_improvement\":\"id_formulir\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"id_formulir\",\"rincian_tindakan\":\"id_formulir\",\"dampak\":\"0\",\"uraian\":\"\",\"department_name\":[\"IT\",\"QA\"],\"statusevaluasi\":\"0\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-02-29 15:44:05'),
(551, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevNB\",\"h_kt\":\"K\",\"h_th\":\"2020\",\"h_bln\":\"03\",\"h_no\":\"1\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/03\\/1\",\"tanggal\":\"01-03-2020\",\"title_improvement\":\"tesd\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"3\",\"rincian_penyimpangan\":\" function insertdata($record,$recordtwin) {\\r\\n        $param = $this->input->post();\\r\\n        $checkfiield = $this->checkfield(\\\"createby\\\");\\r\\n        if ($checkfiield > 0) {\\r\\n            $record[\'createby\'] = $this->session->userdata(\'ses_id_user\');\\r\\n            $record[\'createtime\'] = $this->datetimeserver;\\r\\n            $record[\'department_name\'] =  json_encode(implode(\\\",\\\", $param[\'department_name\']));\\r\\n        }\\r\\n        $this->db->insert($this->table, $record);\\r\\n        $insert_id = $this->db->insert_id($this->table);\\r\\n        return $insert_id;\\r\\n    }\",\"rincian_tindakan\":\" function insertdata($record,$recordtwin) {\\r\\n        $param = $this->input->post();\\r\\n        $checkfiield = $this->checkfield(\\\"createby\\\");\\r\\n        if ($checkfiield > 0) {\\r\\n            $record[\'createby\'] = $this->session->userdata(\'ses_id_user\');\\r\\n            $record[\'createtime\'] = $this->datetimeserver;\\r\\n            $record[\'department_name\'] =  json_encode(implode(\\\",\\\", $param[\'department_name\']));\\r\\n        }\\r\\n        $this->db->insert($this->table, $record);\\r\\n        $insert_id = $this->db->insert_id($this->table);\\r\\n        return $insert_id;\\r\\n    }\",\"dampak\":\"0\",\"uraian\":\"\",\"department_name\":[\"IT\",\"QA\"],\"statusevaluasi\":\"0\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-01 01:06:57'),
(552, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/edit/14', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-01 01:08:51'),
(553, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/eml/Email/add', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-01 01:55:51'),
(554, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/edit/20', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-01 03:04:10'),
(555, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/prt/Info/add', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-01 03:37:21'),
(556, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/prt/Info/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/prt/Info/postdata/create', '{\"id_info\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"content_info\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"Y\",\"title_info\":\"tess\",\"content_info\":\"<p>rererere<\\/p>\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-01 03:37:53'),
(557, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/prt/Info/index', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-01 03:38:04'),
(558, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Useraccess/Userinfo', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-01 03:55:24'),
(559, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Evaluasi/Preview/5', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-01 04:19:07'),
(560, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Evaluasi/Preview/7', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-01 04:44:37'),
(561, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/edit/20', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-01 11:15:39'),
(562, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevNB\",\"h_kt\":\"K\",\"h_th\":\"2020\",\"h_bln\":\"03\",\"h_no\":\"2\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/03\\/2\",\"tanggal\":\"01-03-2020\",\"title_improvement\":\"tes minggu\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"tes minggu\",\"rincian_tindakan\":\"tes minggu\",\"dampak\":\"0\",\"uraian\":\"\",\"department_name\":[\"IT\",\"QA\"],\"statusevaluasi\":\"0\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-01 11:16:47'),
(563, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevNB\",\"h_kt\":\"K\",\"h_th\":\"2020\",\"h_bln\":\"03\",\"h_no\":\"3\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/03\\/3\",\"tanggal\":\"02-03-2020\",\"title_improvement\":\"insertdata\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"insertdata\",\"rincian_tindakan\":\"insertdata\",\"dampak\":\"0\",\"uraian\":\"\",\"department_name\":[\"IT\",\"QA\"],\"statusevaluasi\":\"0\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-01 11:30:29'),
(564, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Logno/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Logno/postdata/delete', '{\"actiondata\":\"delete\",\"id\":\"4\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-01 11:41:18'),
(565, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Logno/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Logno/postdata/delete', '{\"actiondata\":\"delete\",\"id\":\"1\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-01 11:41:20'),
(566, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Logno/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Logno/postdata/delete', '{\"actiondata\":\"delete\",\"id\":\"2\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-01 11:41:23'),
(567, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Logno/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Logno/postdata/delete', '{\"actiondata\":\"delete\",\"id\":\"3\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-01 11:41:25'),
(568, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevNB\",\"h_kt\":\"K\",\"h_th\":\"2020\",\"h_bln\":\"03\",\"h_no\":\"4\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/03\\/4\",\"tanggal\":\"01-03-2020\",\"title_improvement\":\"insert data id formulir\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"insert data id formulir\",\"rincian_tindakan\":\"insert data id formulir\",\"dampak\":\"0\",\"uraian\":\"\",\"department_name\":[\"IT\",\"QA\"],\"statusevaluasi\":\"0\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-01 11:42:01'),
(569, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevNB\",\"h_kt\":\"K\",\"h_th\":\"2020\",\"h_bln\":\"03\",\"h_no\":\"5\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/03\\/5\",\"tanggal\":\"01-03-2020\",\"title_improvement\":\"TRUNCATE table\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"1\",\"rincian_penyimpangan\":\"TRUNCATE table\",\"rincian_tindakan\":\"TRUNCATE table\",\"dampak\":\"0\",\"uraian\":\"\",\"department_name\":[\"IT\",\"QA\"],\"statusevaluasi\":\"0\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-01 11:43:46'),
(570, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevNB\",\"h_kt\":\"K\",\"h_th\":\"2020\",\"h_bln\":\"03\",\"h_no\":\"6\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/03\\/6\",\"tanggal\":\"01-03-2020\",\"title_improvement\":\"insert_id\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"insert_id\",\"rincian_tindakan\":\"insert_id\",\"dampak\":\"0\",\"uraian\":\"\",\"department_name\":[\"IT\",\"QA\"],\"statusevaluasi\":\"0\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-01 11:45:23'),
(571, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevNB\",\"h_kt\":\"K\",\"h_th\":\"2020\",\"h_bln\":\"03\",\"h_no\":\"6\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/03\\/6\",\"tanggal\":\"01-03-2020\",\"title_improvement\":\"insert_id\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"6\",\"number\":\"NA\",\"id_resiko\":\"1\",\"rincian_penyimpangan\":\"insert_id\",\"rincian_tindakan\":\"insert_id\",\"dampak\":\"0\",\"uraian\":\"\",\"department_name\":[\"IT\",\"QA\"],\"statusevaluasi\":\"0\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-01 11:48:07'),
(572, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevNB\",\"h_kt\":\"K\",\"h_th\":\"2020\",\"h_bln\":\"03\",\"h_no\":\"7\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/03\\/7\",\"tanggal\":\"01-03-2020\",\"title_improvement\":\"tes\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"6\",\"number\":\"NA\",\"id_resiko\":\"1\",\"rincian_penyimpangan\":\"id_formulir\",\"rincian_tindakan\":\"id_formulir\",\"dampak\":\"0\",\"uraian\":\"\",\"department_name\":[\"IT\",\"QA\"],\"statusevaluasi\":\"0\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-01 12:00:49'),
(573, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevB\",\"h_kt\":\"K\",\"h_th\":\"2020\",\"h_bln\":\"03\",\"h_no\":\"7\",\"improvement_code\":\"DevB\\/K\\/IT\\/2020\\/03\\/7\",\"tanggal\":\"01-03-2020\",\"title_improvement\":\" $this->modeldata->insertdata(\",\"id_tipe\":\"2\",\"id_katagori\":\"1\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\" $this->modeldata->insertdata($record),\",\"rincian_tindakan\":\" $this->modeldata->insertdata($record),\",\"dampak\":\"0\",\"uraian\":\"\",\"department_name\":[\"IT\",\"QA\"],\"statusevaluasi\":\"0\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-01 12:05:28'),
(574, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevNB\",\"h_kt\":\"K\",\"h_th\":\"2020\",\"h_bln\":\"03\",\"h_no\":\"8\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/03\\/8\",\"tanggal\":\"01-03-2020\",\"title_improvement\":\"ini\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"1\",\"rincian_penyimpangan\":\"mnbvcxz\",\"rincian_tindakan\":\"mnbvcxz\",\"dampak\":\"0\",\"uraian\":\"\",\"department_name\":[\"IT\",\"QA\"],\"statusevaluasi\":\"0\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-01 12:10:32'),
(575, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevNB\",\"h_kt\":\"K\",\"h_th\":\"2020\",\"h_bln\":\"03\",\"h_no\":\"9\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/03\\/9\",\"tanggal\":\"01-03-2020\",\"title_improvement\":\"mnbh\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"1\",\"rincian_penyimpangan\":\"mnjkl\",\"rincian_tindakan\":\"jklmn\",\"dampak\":\"0\",\"uraian\":\"\",\"department_name\":[\"IT\",\"QA\",\"QC\",\"GA\",\"HR\",\"FA & Acc\"],\"statusevaluasi\":\"0\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-01 12:14:05'),
(576, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevB\",\"h_kt\":\"K\",\"h_th\":\"2020\",\"h_bln\":\"03\",\"h_no\":\"10\",\"improvement_code\":\"DevB\\/K\\/IT\\/2020\\/03\\/10\",\"tanggal\":\"01-03-2020\",\"title_improvement\":\"saldy\",\"id_tipe\":\"2\",\"id_katagori\":\"1\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"1\",\"rincian_penyimpangan\":\"qwerty\",\"rincian_tindakan\":\"qwerty\",\"dampak\":\"0\",\"uraian\":\"\",\"department_name\":[\"IT\",\"QA\",\"QC\",\"GA\",\"HR\",\"FA & Acc\"],\"statusevaluasi\":\"0\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-01 12:14:54'),
(577, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevB\",\"h_kt\":\"K\",\"h_th\":\"2020\",\"h_bln\":\"03\",\"h_no\":\"11\",\"improvement_code\":\"DevB\\/K\\/IT\\/2020\\/03\\/11\",\"tanggal\":\"01-03-2020\",\"title_improvement\":\"poiuy\",\"id_tipe\":\"1\",\"id_katagori\":\"1\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"1\",\"rincian_penyimpangan\":\"po\",\"rincian_tindakan\":\"po\",\"dampak\":\"0\",\"uraian\":\"\",\"department_name\":[\"IT\",\"QA\"],\"statusevaluasi\":\"0\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-01 12:16:29'),
(578, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevB\",\"h_kt\":\"K\",\"h_th\":\"2020\",\"h_bln\":\"03\",\"h_no\":\"12\",\"improvement_code\":\"DevB\\/K\\/IT\\/2020\\/03\\/12\",\"tanggal\":\"01-03-2020\",\"title_improvement\":\"cek\",\"id_tipe\":\"2\",\"id_katagori\":\"1\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"1\",\"rincian_penyimpangan\":\"cek\",\"rincian_tindakan\":\"cek\",\"dampak\":\"0\",\"uraian\":\"\",\"department_name\":[\"IT\",\"QA\",\"QC\"],\"statusevaluasi\":\"0\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-01 12:28:52'),
(579, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevNB\",\"h_kt\":\"O\",\"h_th\":\"2020\",\"h_bln\":\"03\",\"h_no\":\"1\",\"improvement_code\":\"DevNB\\/O\\/IT\\/2020\\/03\\/1\",\"tanggal\":\"01-03-2020\",\"title_improvement\":\"uff\",\"id_tipe\":\"1\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"2\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"1\",\"rincian_penyimpangan\":\"poiuy\",\"rincian_tindakan\":\"poiuy\",\"dampak\":\"0\",\"uraian\":\"\",\"department_name\":[\"IT\",\"QA\"],\"statusevaluasi\":\"0\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-01 12:35:48'),
(580, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevNB\",\"h_kt\":\"K\",\"h_th\":\"2020\",\"h_bln\":\"03\",\"h_no\":\"13\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/03\\/13\",\"tanggal\":\"01-03-2020\",\"title_improvement\":\"lkjhg\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"poiuyt\",\"rincian_tindakan\":\"poiuy\",\"dampak\":\"0\",\"uraian\":\"\",\"department_name\":[\"IT\",\"QA\",\"QC\"],\"statusevaluasi\":\"0\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-01 12:38:47'),
(581, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevNB\",\"h_kt\":\"K\",\"h_th\":\"2020\",\"h_bln\":\"03\",\"h_no\":\"13\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/03\\/13\",\"tanggal\":\"01-03-2020\",\"title_improvement\":\"lkjhg\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"mnb\",\"rincian_tindakan\":\"mnb\",\"dampak\":\"0\",\"uraian\":\"\",\"department_name\":[\"IT\",\"QA\"],\"statusevaluasi\":\"0\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-01 12:41:12'),
(582, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/edit/7', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-01 15:18:24'),
(583, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/home_group/7', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-01 15:18:24'),
(584, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/grid_group/7', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-01 15:18:25'),
(585, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/home_groupuser/12', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-01 15:18:26'),
(586, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/grid_groupuser/12', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-01 15:18:26'),
(587, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/edit/37', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-01 15:27:24'),
(588, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/update', '{\"id_formulir\":\"37\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"\",\"h_kt\":\"\",\"h_th\":\"2020\",\"h_bln\":\"03\",\"h_no\":\"\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/03\\/13\",\"tanggal\":\"2020-03-01\",\"title_improvement\":\"lkjhg\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"mnb\",\"rincian_tindakan\":\"mnb\",\"uraian\":\"\",\"statusevaluasi\":\"1\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-01 15:29:07'),
(589, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/edit/37', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-01 15:29:13'),
(590, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/home_rca/37', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-01 15:29:13'),
(591, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/grid_rca/37', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-01 15:29:13'),
(592, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/Preview/37', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-01 15:38:32'),
(593, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Evaluasi/Preview/37', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-01 15:38:38'),
(594, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/add_rca/37', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-01 15:49:17'),
(595, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Evaluasi/edit/37', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-02 01:30:55'),
(596, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Evaluasi/home_nilai_evaluasi/37', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-02 01:30:56'),
(597, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Evaluasi/grid_nilaievaluasi/37', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-02 01:30:56'),
(598, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/edit/37', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-02 01:31:03'),
(599, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/home_detail/37', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-02 01:31:04'),
(600, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/home_rca/37', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-02 01:31:04'),
(601, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/grid_detail/37', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-02 01:31:04'),
(602, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/grid_rca/37', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-02 01:31:04'),
(603, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/add_detail/37', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-02 01:32:47'),
(604, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/add_rca/37', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-02 02:13:54'),
(605, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/postdataapprove', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-02 03:13:58'),
(606, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/postdatadetail', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-02 06:16:48'),
(607, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/edit_detail/16', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-02 06:16:51'),
(608, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/edit_detail/16', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-02 06:27:22'),
(609, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevNB\",\"h_kt\":\"K\",\"h_th\":\"2020\",\"h_bln\":\"03\",\"h_no\":\"14\",\"improvement_code\":\"DevNB\\/K\\/\\/2020\\/03\\/14\",\"tanggal\":\"02-03-2020\",\"title_improvement\":\"trewq\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"1\",\"rincian_penyimpangan\":\"trewq\",\"rincian_tindakan\":\"trewq\",\"dampak\":\"0\",\"uraian\":\"\",\"department_name\":[\"IT\",\"QA\"],\"statusevaluasi\":\"0\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-02 06:31:19'),
(610, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevNB\",\"h_kt\":\"K\",\"h_th\":\"2020\",\"h_bln\":\"03\",\"h_no\":\"15\",\"improvement_code\":\"DevNB\\/K\\/\\/2020\\/03\\/15\",\"tanggal\":\"02-03-2020\",\"title_improvement\":\"qwerty\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"qwerty\",\"rincian_tindakan\":\"qwerty\",\"dampak\":\"0\",\"uraian\":\"\",\"department_name\":[\"IT\",\"QA\"],\"statusevaluasi\":\"0\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-02 06:35:51'),
(611, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevNB\",\"h_kt\":\"K\",\"h_th\":\"2020\",\"h_bln\":\"03\",\"h_no\":\"15\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/03\\/15\",\"tanggal\":\"02-03-2020\",\"title_improvement\":\"qwertyu\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"2\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"qwertyu\",\"rincian_tindakan\":\"qwertyu\",\"dampak\":\"0\",\"uraian\":\"\",\"department_name\":[\"IT\",\"QA\"],\"statusevaluasi\":\"0\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-02 07:12:50'),
(612, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevNB\",\"h_kt\":\"K\",\"h_th\":\"2020\",\"h_bln\":\"03\",\"h_no\":\"15\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/03\\/15\",\"tanggal\":\"02-03-2020\",\"title_improvement\":\"record2\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"record2\",\"rincian_tindakan\":\"record2\",\"dampak\":\"0\",\"uraian\":\"\",\"department_name\":[\"IT\",\"QA\"],\"statusevaluasi\":\"0\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-02 07:55:02'),
(613, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevNB\",\"h_kt\":\"K\",\"h_th\":\"2020\",\"h_bln\":\"03\",\"h_no\":\"16\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/03\\/16\",\"tanggal\":\"02-03-2020\",\"title_improvement\":\"$this->modeldata->insertdata($\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"1\",\"rincian_penyimpangan\":\"$this->modeldata->insertdata($insert_id);\",\"rincian_tindakan\":\"$this->modeldata->insertdata($insert_id);\",\"dampak\":\"0\",\"uraian\":\"\",\"department_name\":[\"IT\",\"QA\"],\"statusevaluasi\":\"0\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-02 07:57:50'),
(614, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevNB\",\"h_kt\":\"K\",\"h_th\":\"2020\",\"h_bln\":\"03\",\"h_no\":\"17\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/03\\/17\",\"tanggal\":\"02-03-2020\",\"title_improvement\":\"$this->modeldata->insertdata($\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"$this->modeldata->insertdata($insert_id);\",\"rincian_tindakan\":\"$this->modeldata->insertdata($insert_id);\",\"dampak\":\"0\",\"uraian\":\"\",\"department_name\":[\"IT\",\"QA\"],\"statusevaluasi\":\"0\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-02 07:59:33'),
(615, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevNB\",\"h_kt\":\"K\",\"h_th\":\"2020\",\"h_bln\":\"03\",\"h_no\":\"18\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/03\\/18\",\"tanggal\":\"02-03-2020\",\"title_improvement\":\"$insert_id\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"$insert_id\",\"rincian_tindakan\":\"$insert_id\",\"dampak\":\"0\",\"uraian\":\"\",\"department_name\":[\"IT\",\"QA\"],\"statusevaluasi\":\"0\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-02 08:18:20'),
(616, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevNB\",\"h_kt\":\"K\",\"h_th\":\"2020\",\"h_bln\":\"03\",\"h_no\":\"19\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/03\\/19\",\"tanggal\":\"02-03-2020\",\"title_improvement\":\"$insert_id\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"$insert_id\",\"rincian_tindakan\":\"$insert_id\",\"dampak\":\"0\",\"uraian\":\"\",\"department_name\":[\"IT\",\"QA\"],\"statusevaluasi\":\"0\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-02 08:19:46'),
(617, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevNB\",\"h_kt\":\"K\",\"h_th\":\"2020\",\"h_bln\":\"03\",\"h_no\":\"20\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/03\\/20\",\"tanggal\":\"02-03-2020\",\"title_improvement\":\"insert_id\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"insert_id\",\"rincian_tindakan\":\"insert_id\",\"dampak\":\"0\",\"uraian\":\"\",\"department_name\":[\"IT\",\"QA\"],\"statusevaluasi\":\"0\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-02 08:29:10'),
(618, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevNB\",\"h_kt\":\"K\",\"h_th\":\"2020\",\"h_bln\":\"03\",\"h_no\":\"21\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/03\\/21\",\"tanggal\":\"02-03-2020\",\"title_improvement\":\"id_formulir\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"7\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"id_formulir\",\"rincian_tindakan\":\"id_formulir\",\"dampak\":\"0\",\"uraian\":\"\",\"department_name\":[\"IT\",\"QA\"],\"statusevaluasi\":\"0\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-02 08:34:22'),
(619, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevNB\",\"h_kt\":\"K\",\"h_th\":\"2020\",\"h_bln\":\"03\",\"h_no\":\"22\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/03\\/22\",\"tanggal\":\"02-03-2020\",\"title_improvement\":\"id_formulir12345\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"6\",\"number\":\"NA\",\"id_resiko\":\"1\",\"rincian_penyimpangan\":\"id_formulir12345\",\"rincian_tindakan\":\"id_formulir12345\",\"dampak\":\"0\",\"uraian\":\"\",\"department_name\":[\"IT\",\"QA\"],\"statusevaluasi\":\"0\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-02 08:35:13'),
(620, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevNB\",\"h_kt\":\"K\",\"h_th\":\"2020\",\"h_bln\":\"03\",\"h_no\":\"23\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/03\\/23\",\"tanggal\":\"02-03-2020\",\"title_improvement\":\"saldy\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"6\",\"number\":\"NA\",\"id_resiko\":\"1\",\"rincian_penyimpangan\":\"id_formulir12345\",\"rincian_tindakan\":\"id_formulir12345\",\"dampak\":\"0\",\"uraian\":\"\",\"department_name\":[\"IT\",\"QA\"],\"statusevaluasi\":\"0\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-02 08:37:37');
INSERT INTO `userlog` (`id_userlog`, `id_useraccess`, `url`, `requestdata`, `ipaddress`, `browser`, `systemdevice`, `accesstime`) VALUES
(621, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevNB\",\"h_kt\":\"K\",\"h_th\":\"2020\",\"h_bln\":\"03\",\"h_no\":\"24\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/03\\/24\",\"tanggal\":\"02-03-2020\",\"title_improvement\":\"erwin\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"id_formulir12345\",\"rincian_tindakan\":\"id_formulir12345\",\"dampak\":\"0\",\"uraian\":\"\",\"department_name\":[\"IT\",\"QA\"],\"statusevaluasi\":\"0\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-02 08:38:41'),
(622, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevNB\",\"h_kt\":\"K\",\"h_th\":\"2020\",\"h_bln\":\"03\",\"h_no\":\"1\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/03\\/1\",\"tanggal\":\"02-03-2020\",\"title_improvement\":\"Create - Penyimpangan\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"Create - Penyimpangan\\r\\n\",\"rincian_tindakan\":\"Create - Penyimpangan\\r\\n\",\"dampak\":\"0\",\"uraian\":\"\",\"department_name\":[\"IT\",\"QA\"],\"statusevaluasi\":\"0\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-02 08:56:39'),
(623, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/update', '{\"id_formulir\":\"1\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"\",\"h_kt\":\"\",\"h_th\":\"2020\",\"h_bln\":\"03\",\"h_no\":\"\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/03\\/1\",\"tanggal\":\"2020-03-02\",\"title_improvement\":\"Create - Penyimpangan\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"Create - Penyimpangan\",\"rincian_tindakan\":\"Create - Penyimpangan\",\"uraian\":\"\",\"statusevaluasi\":\"1\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-02 14:03:44'),
(624, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/edit/10', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-02 14:43:45'),
(625, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/home_group/10', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-02 14:43:45'),
(626, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/grid_group/10', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-02 14:43:45'),
(627, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/home_groupuser/16', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-02 14:43:49'),
(628, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/grid_groupuser/16', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-02 14:43:49'),
(629, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/home_detail/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-02 15:10:04'),
(630, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/grid_detail/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-02 15:10:04'),
(631, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/edit_approve/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-02 15:15:41'),
(632, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/add_rca/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-02 15:48:27'),
(633, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/postdatabankquota', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-02 15:53:20'),
(634, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/prt/Support_bottom/edit/14', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 01:15:17'),
(635, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/prt/Support_bottom/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/prt/Support_bottom/postdata/update', '{\"id_support_bottom\":\"14\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"keterangan\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"code_public\":\"\",\"apps_name\":\"Assets\",\"url_apps\":\"http:\\/\\/192.168.0.252\\/sim\\/\",\"icon_apps\":\"fa fa-briefcase\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 01:15:35'),
(636, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/prt/Support_bottom/index', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 01:16:04'),
(637, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/prt/Support_bottom/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/prt/Support_bottom/postdata/update', '{\"id_support_bottom\":\"14\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"keterangan\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"apps_code\":\"SIM\",\"apps_name\":\"Assets\",\"url_apps\":\"http:\\/\\/192.168.0.252\\/sim\\/\",\"icon_apps\":\"fa fa-briefcase\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 01:17:40'),
(638, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/prt/Public_bottom', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 01:20:21'),
(639, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/prt/Public_bottom/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 01:20:21'),
(640, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/prt/Progress/edit/8', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 01:24:52'),
(641, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/prt/Progress/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/prt/Progress/postdata/update', '{\"id_progress\":\"8\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"progress_title\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"progress_title\":\"Penyimpangan\",\"progress_persen\":\"95\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 01:24:58'),
(642, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/prt/Progress/index', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 01:24:58'),
(643, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/prt/Progress/add', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 01:25:27'),
(644, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Department', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 01:25:42'),
(645, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Department/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 01:25:42'),
(646, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/approve_bydeprt/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 02:22:47'),
(647, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Useraccess/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Useraccess/postdata/create', '{\"id_user\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"username\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"namaKaryawan\":\"NAULI MARSHA ANDIANI\",\"department_name\":\"QA\",\"id_role\":\"2\",\"username\":\"qa_nauli\",\"password\":\"123\",\"email\":\"full@mail.com\",\"no_handphone\":\"\",\"note\":\"\",\"status_login\":\"1\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 02:39:48'),
(648, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/home_groupuser/23', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 02:40:01'),
(649, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/grid_groupuser/23', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 02:40:01'),
(650, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/add_groupuser/23', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 02:40:04'),
(651, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatagroupuserhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatagroupuser/create', '{\"id_maplikasigroupuser\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"id_maplikasigroup\",\"checkdata2\":\"id_user\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_maplikasigroup\":\"23\",\"id_user\":\"7\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 02:40:08'),
(652, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/home_groupmenu/23', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 02:40:09'),
(653, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/getgroupmenulist', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 02:40:09'),
(654, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/home_groupmenubutton/23', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 02:40:11'),
(655, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/getbuttoncheckbox', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 02:40:11'),
(656, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/getstatusbuttunaccess', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 02:40:12'),
(657, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/edit/18', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 02:40:38'),
(658, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/home_group/18', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 02:40:38'),
(659, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/grid_group/18', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 02:40:38'),
(660, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/home_groupuser/31', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 02:40:42'),
(661, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/grid_groupuser/31', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 02:40:42'),
(662, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatagroupuserhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatagroupuser/delete', '{\"actiondata\":\"delete\",\"id_maplikasigroupuser\":\"75\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 02:40:44'),
(663, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/add_groupuser/31', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 02:40:46'),
(664, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatagroupuserhttp://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/postdatagroupuser/create', '{\"id_maplikasigroupuser\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"id_maplikasigroup\",\"checkdata2\":\"id_user\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"id_maplikasigroup\":\"31\",\"id_user\":\"7\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 02:40:49'),
(665, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 02:41:07'),
(666, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/Dashboard', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 02:41:07'),
(667, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/Dashboard/getnotification', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 02:41:07'),
(668, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Formulir', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 02:41:09'),
(669, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 02:41:10'),
(670, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/approve', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 02:41:11'),
(671, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 02:41:11'),
(672, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/edit/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 02:41:25'),
(673, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/getdata', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 02:41:26'),
(674, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/home_rca/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 02:41:26'),
(675, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/grid_rca/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 02:41:26'),
(676, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/approve_bydeprt/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 02:45:23'),
(677, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/postdataapprove', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 02:45:26'),
(678, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/edit', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 02:45:26'),
(679, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/add', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 02:47:32'),
(680, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/cekdatalog', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 02:47:43'),
(681, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevNB\",\"h_kt\":\"K\",\"h_th\":\"2020\",\"h_bln\":\"03\",\"h_no\":\"2\",\"improvement_code\":\"DevNB\\/K\\/QA\\/2020\\/03\\/2\",\"tanggal\":\"03-03-2020\",\"title_improvement\":\"test 03\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"test 03\",\"rincian_tindakan\":\"test 03\",\"dampak\":\"0\",\"uraian\":\"\",\"department_name\":[\"IT\",\"GA\"],\"statusevaluasi\":\"1\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 02:48:06'),
(682, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/index', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 02:48:07'),
(683, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/edit/2', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 02:48:37'),
(684, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/home_rca/2', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 02:48:37'),
(685, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/grid_rca/2', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 02:48:37'),
(686, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/approve_bydeprt/2', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 02:48:39'),
(687, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/edit', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 02:48:42'),
(688, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/approve_bydeprt', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 02:50:16'),
(689, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/edit/2', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 02:59:43'),
(690, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/home_rca/2', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 02:59:44'),
(691, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/grid_rca/2', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 02:59:44'),
(692, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/approve_bydeprt/2', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 03:00:07'),
(693, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/approve_bydeprt/2/2', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 04:05:06'),
(694, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/add_rca/2', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 04:20:27'),
(695, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/home_approve/2', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 04:39:39'),
(696, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/grid_approve/2', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 04:54:13'),
(697, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/edit_approve/3', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 05:40:01'),
(698, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/home_approve/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 06:41:13'),
(699, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/grid_approve/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 06:41:13'),
(700, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/edit_approve/2', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 06:41:46'),
(701, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/home_approve/2', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 06:46:22'),
(702, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/grid_approve/2', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 06:46:22'),
(703, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/add_rca/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 07:25:08'),
(704, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/postdata/update', '{\"id_formulir\":\"1\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/03\\/1\",\"tanggal\":\"2020-03-02\",\"title_improvement\":\"Create - Penyimpangan\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"Create - Penyimpangan\",\"rincian_tindakan\":\"Create - Penyimpangan\",\"dataintablerca_length\":\"10\",\"id\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 07:31:22'),
(705, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/edit/2', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 07:51:13'),
(706, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Request', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 07:51:47'),
(707, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Request/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 07:51:48'),
(708, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Request/add', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 07:51:49'),
(709, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Request/index', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 07:59:59'),
(710, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/evaluasi', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 08:26:42'),
(711, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Evaluasi/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 08:26:42'),
(712, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Evaluasi/edit/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 08:26:43'),
(713, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Evaluasi/getdata', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 08:26:44'),
(714, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Evaluasi/home_nilai_evaluasi/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 08:26:44'),
(715, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Evaluasi/grid_nilaievaluasi/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 08:26:44'),
(716, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Evaluasi/edit/2', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 08:26:53'),
(717, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Evaluasi/home_nilai_evaluasi/2', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 08:26:54'),
(718, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Evaluasi/grid_nilaievaluasi/2', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 08:26:54'),
(719, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/analisis', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 08:26:59'),
(720, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 08:26:59'),
(721, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/edit/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 08:27:01'),
(722, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/getdata', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 08:27:01'),
(723, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/home_rca/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 08:27:01'),
(724, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/home_detail/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 08:27:01'),
(725, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/grid_rca/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 08:27:02'),
(726, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/grid_detail/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 08:27:02'),
(727, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/index', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 08:28:16'),
(728, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Evaluasi/Preview/2', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 09:27:57'),
(729, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Laporan/home_laporan', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 09:33:56'),
(730, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Laporan/generatereport', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 09:34:02'),
(731, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/Preview/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 09:47:29'),
(732, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevNB\",\"h_kt\":\"K\",\"h_th\":\"2020\",\"h_bln\":\"03\",\"h_no\":\"3\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/03\\/3\",\"tanggal\":\"03-03-2020\",\"title_improvement\":\"malam\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"malam\",\"rincian_tindakan\":\"malam\",\"uraian\":\"\",\"statusevaluasi\":\"0\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 11:49:02'),
(733, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevNB\",\"h_kt\":\"K\",\"h_th\":\"2020\",\"h_bln\":\"03\",\"h_no\":\"3\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/03\\/3\",\"tanggal\":\"03-03-2020\",\"title_improvement\":\"malam\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"malam\",\"rincian_tindakan\":\"malam\",\"dampak\":\"1\",\"uraian\":\"malam\",\"department_name\":[\"IT\",\"QA\"],\"statusevaluasi\":\"1\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 11:49:25'),
(734, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/home_approve/3', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 11:49:38'),
(735, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/grid_approve/3', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 11:49:38'),
(736, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/edit_approve/5', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 11:49:42'),
(737, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/edit/3', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 11:51:36'),
(738, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/home_rca/3', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 11:51:36'),
(739, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/home_approve/3', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 11:51:36'),
(740, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/grid_rca/3', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 11:51:36'),
(741, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/grid_approve/3', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 11:51:36'),
(742, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/edit_rca/5', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 12:13:00'),
(743, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/add_rca/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 12:27:29'),
(744, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/postrca', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 12:27:38'),
(745, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/edit_approve/6', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 12:29:47'),
(746, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Evaluasi/add_nilai_evaluasi/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 12:31:08'),
(747, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/postrca', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 12:38:35'),
(748, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/edit_rca/7', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 12:54:26'),
(749, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/edit_rca/5', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 13:02:31'),
(750, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/edit/3', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 13:16:32'),
(751, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/home_rca/3', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 13:16:33'),
(752, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/home_detail/3', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 13:16:33'),
(753, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/grid_rca/3', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 13:16:33'),
(754, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/grid_detail/3', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 13:16:33'),
(755, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/edit/3', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 13:37:34'),
(756, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevNB\",\"h_kt\":\"K\",\"h_th\":\"2020\",\"h_bln\":\"03\",\"h_no\":\"4\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/03\\/4\",\"tanggal\":\"03-03-2020\",\"title_improvement\":\"malam kamis\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"malam kamis\",\"rincian_tindakan\":\"malam kamis\",\"dampak\":\"0\",\"uraian\":\"\",\"department_name\":[\"IT\",\"QA\"],\"statusevaluasi\":\"0\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 13:44:09'),
(757, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/edit/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 13:44:12'),
(758, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/update', '{\"id_formulir\":\"1\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"\",\"h_kt\":\"\",\"h_th\":\"2020\",\"h_bln\":\"03\",\"h_no\":\"\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/03\\/4\",\"tanggal\":\"2020-03-03\",\"title_improvement\":\"malam kamis\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"5\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"malam kamis\",\"rincian_tindakan\":\"malam kamis\",\"uraian\":\"\",\"statusevaluasi\":\"1\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 13:44:16'),
(759, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/home_approve/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 13:44:35'),
(760, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Approve/grid_approve/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 13:44:35'),
(761, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Evaluasi/edit/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 13:44:57'),
(762, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Evaluasi/home_nilai_evaluasi/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 13:44:58'),
(763, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Evaluasi/grid_nilaievaluasi/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 13:44:58'),
(764, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/edit/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 13:51:50'),
(765, 7, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/edit_detail/15', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 13:52:33'),
(766, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/edit_detail/15', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 14:11:31'),
(767, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/edit/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 14:11:36'),
(768, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/getdata', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 14:11:36'),
(769, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/home_rca/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 14:11:36'),
(770, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/home_detail/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 14:11:36'),
(771, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/grid_rca/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 14:11:36'),
(772, 1, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/grid_detail/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 14:11:36'),
(773, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/edit_detail/15', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 14:12:30'),
(774, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/add_detail/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 14:22:14'),
(775, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/edit_detail/17', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 14:28:05'),
(776, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/add_rca/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 14:33:14'),
(777, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/edit_detail/19', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 14:35:11'),
(778, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/edit_detail/20', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 14:36:28'),
(779, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/edit_detail/21', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 14:52:18'),
(780, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/edit_detail/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 14:56:18'),
(781, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/Analisis/edit_detail/2', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-03 16:22:47'),
(782, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Penandatangan/edit/1', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-04 03:53:26'),
(783, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Penandatangan/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Penandatangan/postdata/update', '{\"id_penandatangan\":\"1\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"nip\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"nip\":\"196310231985032003\",\"department_name\":\"QA\",\"nama_penandatangan\":\"RITA\",\"jabatan_penandatangan\":\"Manager\",\"tanggal_tmt\":\"2018-01-01\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-04 03:53:34'),
(784, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Penandatangan/index', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-04 03:54:18'),
(785, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Penandatangan/add', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-04 04:00:14'),
(786, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Penandatangan/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Penandatangan/postdata/create', '{\"id_penandatangan\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"nip\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"nip\":\"12345\",\"department_name\":\"QA\",\"namaKaryawan\":\"RITA LUTHVIANA\",\"jabatan_penandatangan\":\"Manager\",\"tanggal_tmt\":\"04-03-2020\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-04 04:00:42'),
(787, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Penandatangan/edit/3', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-04 04:01:26'),
(788, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Penandatangan/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Penandatangan/postdata/create', '{\"id_penandatangan\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"nip\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"nip\":\"1234567\",\"department_name\":\"QC\",\"namaKaryawan\":\"LUTFI ALDILLAH\",\"jabatan_penandatangan\":\"manager\",\"tanggal_tmt\":\"04-03-2020\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-04 04:06:31'),
(789, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Penandatangan/edit/4', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-04 04:06:35'),
(790, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Penandatangan/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Penandatangan/postdata/update', '{\"id_penandatangan\":\"1\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"nip\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"nip\":\"196310231985032003\",\"department_name\":\"GA\",\"namaKaryawan\":\"LUTFI ALDILLAH\",\"jabatan_penandatangan\":\"Manager\",\"tanggal_tmt\":\"2018-01-01\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-04 04:13:12'),
(791, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Penandatangan/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Penandatangan/postdata/update', '{\"id_penandatangan\":\"1\",\"actiondata\":\"update\",\"dynamicpost\":\"Y\",\"checkdata1\":\"nip\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"nip\":\"196310231985032003\",\"department_name\":\"CEO\",\"namaKaryawan\":\"LUTFI ALDILLAH\",\"jabatan_penandatangan\":\"Manager\",\"tanggal_tmt\":\"2018-01-01\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-04 04:13:24'),
(792, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Penandatangan/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Penandatangan/postdata/delete', '{\"actiondata\":\"delete\",\"id_penandatangan\":\"4\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-04 04:16:17'),
(793, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Penandatangan/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Penandatangan/postdata/delete', '{\"actiondata\":\"delete\",\"id_penandatangan\":\"3\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-04 04:16:20'),
(794, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Penandatangan/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Penandatangan/postdata/delete', '{\"actiondata\":\"delete\",\"id_penandatangan\":\"1\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-04 04:16:25'),
(795, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Penandatangan/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Penandatangan/postdata/create', '{\"id_penandatangan\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"nip\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"department_name\":\"QA\",\"namaKaryawan\":\"RITA LUTHVIANA\",\"jabatan_penandatangan\":\"manager\",\"tanggal_tmt\":\"04-03-2020\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-04 04:18:41'),
(796, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Penandatangan/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Penandatangan/postdata/create', '{\"id_penandatangan\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"nip\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"department_name\":\"GA\",\"namaKaryawan\":\"RITA LUTHVIANA\",\"jabatan_penandatangan\":\"manager\",\"tanggal_tmt\":\"04-03-2020\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-04 04:19:01'),
(797, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Penandatangan/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Penandatangan/postdata/delete', '{\"actiondata\":\"delete\",\"id_penandatangan\":\"6\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-04 04:19:08'),
(798, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Penandatangan/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Penandatangan/postdata/delete', '{\"actiondata\":\"delete\",\"id_penandatangan\":\"5\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-04 04:19:10'),
(799, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Penandatangan/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Penandatangan/postdata/create', '{\"id_penandatangan\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"nip\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"department_name\":\"WH\",\"namaKaryawan\":\"DENNY RACHMADI\",\"jabatan_penandatangan\":\"manager\",\"tanggal_tmt\":\"04-03-2020\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-04 04:20:37'),
(800, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Penandatangan/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/utl/Penandatangan/postdata/create', '{\"id_penandatangan\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"nip\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"department_name\":\"IT\",\"namaKaryawan\":\"JOKO YUANA\",\"jabatan_penandatangan\":\"manager\",\"tanggal_tmt\":\"04-03-2020\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-04 04:20:54'),
(801, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdatahttp://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/postdata/create', '{\"id_formulir\":\"0\",\"actiondata\":\"create\",\"dynamicpost\":\"Y\",\"checkdata1\":\"improvement_code\",\"checkdata2\":\"\",\"checkdata3\":\"\",\"checkdata4\":\"\",\"dengangambar\":\"N\",\"h_kp\":\"DevNB\",\"h_kt\":\"K\",\"h_th\":\"2020\",\"h_bln\":\"03\",\"h_no\":\"1\",\"improvement_code\":\"DevNB\\/K\\/IT\\/2020\\/03\\/1\",\"tanggal\":\"04-03-2020\",\"title_improvement\":\"saldy\",\"id_tipe\":\"2\",\"id_katagori\":\"2\",\"id_ruanglingkup\":\"1\",\"id_jenis\":\"8\",\"etc\":\"lain lain\",\"number\":\"NA\",\"id_resiko\":\"2\",\"rincian_penyimpangan\":\"lain\",\"rincian_tindakan\":\"lain\",\"dampak\":\"0\",\"uraian\":\"\",\"department_name\":[\"BDTM\"],\"statusevaluasi\":\"1\",\"reason\":\"\"}', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-04 06:52:44'),
(802, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/home_detailApprove/undefined', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-04 08:33:07'),
(803, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/home_detailApprove/grid_detailapprove', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-04 08:47:10'),
(804, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/home_detailApprove/griddata', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-04 08:47:31'),
(805, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/home_detailApprove/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-04 08:59:26'),
(806, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/grid/home_detailApprove/grid_detailapprove', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-04 09:07:19'),
(807, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/grid/home_detailApprove/grid', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-04 09:15:19'),
(808, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/grid_detailapprove', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-04 09:22:31'),
(809, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/approve/grid_rca', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-04 09:35:43'),
(810, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/approve/Preview', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-04 09:36:33'),
(811, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/grid_detailapprove/2', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-04 09:44:32'),
(812, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/pu/formulir/home_detailapprove/2', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-04 09:54:14'),
(813, 2, 'http://localhost:8080/L-essential-dev/perbaikan/index.php/scr/Application/home_groupmenu/19', '', '::1', 'Chrome', 'Windows 10 - SYSTEM', '2020-03-04 10:09:15');

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
  MODIFY `id_maplikasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `maplikasigroup`
--
ALTER TABLE `maplikasigroup`
  MODIFY `id_maplikasigroup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `maplikasigroupmenu`
--
ALTER TABLE `maplikasigroupmenu`
  MODIFY `id_maplikasigroupmenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `maplikasigroupmenubutton`
--
ALTER TABLE `maplikasigroupmenubutton`
  MODIFY `id_maplikasigroupmenubutton` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=389;

--
-- AUTO_INCREMENT for table `maplikasigroupuser`
--
ALTER TABLE `maplikasigroupuser`
  MODIFY `id_maplikasigroupuser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `mbutton`
--
ALTER TABLE `mbutton`
  MODIFY `id_mbutton` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `mmenu`
--
ALTER TABLE `mmenu`
  MODIFY `id_mmenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `roleapps`
--
ALTER TABLE `roleapps`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `useraccess`
--
ALTER TABLE `useraccess`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id_userlog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=814;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
