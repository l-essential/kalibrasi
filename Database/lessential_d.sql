-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2020 at 09:33 AM
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
-- Database: `lessential_d`
--

-- --------------------------------------------------------

--
-- Table structure for table `apps_00_manual_book_app`
--

CREATE TABLE `apps_00_manual_book_app` (
  `manual_bkapp_id` int(11) NOT NULL,
  `manual_book_app` text NOT NULL,
  `nama_gambar` text NOT NULL,
  `lokasi_gambar` text NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apps_00_manual_book_app`
--

INSERT INTO `apps_00_manual_book_app` (`manual_bkapp_id`, `manual_book_app`, `nama_gambar`, `lokasi_gambar`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, '', 'Pejabat Pembuat Komitmen Satker Ditjen Pembiayaan Perumahan', '2018-01-01', 'nonactive', 1, '2019-08-19 06:15:21', 1, '2020-01-27 09:01:08', 1, '2020-02-09 21:57:37'),
(2, '', 'Pejabat Pembuat Komitmen Satker Ditjen Pembiayaan Perumahan', '2017-01-01', 'nonactive', 1, '2019-08-19 06:24:48', NULL, NULL, 1, '2020-01-24 15:42:03'),
(3, '', '12332112', '2020-02-04', 'nonactive', 1, '2020-02-09 21:53:12', NULL, NULL, 1, '2020-02-09 21:53:17'),
(4, '', 'weqqweqweqwe', '2020-02-06', 'nonactive', 1, '2020-02-09 21:57:31', NULL, NULL, 1, '2020-02-09 22:04:44'),
(5, '', 'qeqeqweqweeqweqw', '2020-02-06', 'nonactive', 1, '2020-02-09 21:59:15', NULL, NULL, 1, '2020-02-09 21:59:19'),
(6, '', 'eqwrtyurewertyuyre', '2020-02-06', 'nonactive', 1, '2020-02-09 22:00:36', NULL, NULL, 1, '2020-02-09 22:00:40'),
(7, '', 'rewrewrewrewrewrewrew', '2020-02-19', 'active', 1, '2020-02-09 22:01:28', NULL, NULL, NULL, NULL),
(8, '', 'qqqqqqqqqqqqqqqqqqqq', '2020-02-06', 'nonactive', 1, '2020-02-09 22:04:37', NULL, NULL, 1, '2020-02-09 22:04:41'),
(9, '', 'trrrrrrrrr', '2020-02-05', 'nonactive', 1, '2020-02-09 22:07:39', NULL, NULL, 1, '2020-02-09 22:07:43'),
(10, '', '', '', 'active', 2, '2020-03-08 16:38:06', NULL, NULL, NULL, NULL),
(11, '', '', '', 'active', 2, '2020-03-08 17:46:55', NULL, NULL, NULL, NULL),
(12, '', '', '', 'active', 2, '2020-03-08 17:49:22', NULL, NULL, NULL, NULL),
(13, '', '', '', 'active', 2, '2020-03-08 18:11:54', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `apps_05_file`
--

CREATE TABLE `apps_05_file` (
  `file_id` int(11) NOT NULL,
  `nama_gambar` text NOT NULL,
  `lokasi_gambar` text NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apps_05_file`
--

INSERT INTO `apps_05_file` (`file_id`, `nama_gambar`, `lokasi_gambar`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 'Pejabat Pembuat Komitmen Satker Ditjen Pembiayaan Perumahan', '2018-01-01', 'nonactive', 1, '2019-08-19 06:15:21', 1, '2020-01-27 09:01:08', 1, '2020-02-09 21:57:37'),
(2, 'Pejabat Pembuat Komitmen Satker Ditjen Pembiayaan Perumahan', '2017-01-01', 'nonactive', 1, '2019-08-19 06:24:48', NULL, NULL, 1, '2020-01-24 15:42:03'),
(3, '12332112', '2020-02-04', 'nonactive', 1, '2020-02-09 21:53:12', NULL, NULL, 1, '2020-02-09 21:53:17'),
(4, 'weqqweqweqwe', '2020-02-06', 'nonactive', 1, '2020-02-09 21:57:31', NULL, NULL, 1, '2020-02-09 22:04:44'),
(5, 'qeqeqweqweeqweqw', '2020-02-06', 'nonactive', 1, '2020-02-09 21:59:15', NULL, NULL, 1, '2020-02-09 21:59:19'),
(6, 'eqwrtyurewertyuyre', '2020-02-06', 'nonactive', 1, '2020-02-09 22:00:36', NULL, NULL, 1, '2020-02-09 22:00:40'),
(7, 'rewrewrewrewrewrewrew', '2020-02-19', 'active', 1, '2020-02-09 22:01:28', NULL, NULL, NULL, NULL),
(8, 'qqqqqqqqqqqqqqqqqqqq', '2020-02-06', 'nonactive', 1, '2020-02-09 22:04:37', NULL, NULL, 1, '2020-02-09 22:04:41'),
(9, 'trrrrrrrrr', '2020-02-05', 'nonactive', 1, '2020-02-09 22:07:39', NULL, NULL, 1, '2020-02-09 22:07:43'),
(10, '', '', 'active', 2, '2020-03-08 16:38:06', NULL, NULL, NULL, NULL),
(11, '', '', 'active', 2, '2020-03-08 17:46:55', NULL, NULL, NULL, NULL),
(12, '', '', 'active', 2, '2020-03-08 17:49:22', NULL, NULL, NULL, NULL),
(13, '', '', 'active', 2, '2020-03-08 18:11:54', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `apps_05_progress`
--

CREATE TABLE `apps_05_progress` (
  `progress_id` int(11) NOT NULL,
  `progress_title` varchar(225) NOT NULL,
  `progress_content` text NOT NULL,
  `progress_createby` varchar(50) NOT NULL,
  `progress_leader` varchar(50) NOT NULL,
  `progress_detail_dept` int(11) NOT NULL,
  `progress_detail_file` int(11) NOT NULL,
  `progress_percent` int(3) NOT NULL,
  `progress_status` int(1) NOT NULL DEFAULT '0' COMMENT '0=Open, 1 =Closed',
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apps_05_progress`
--

INSERT INTO `apps_05_progress` (`progress_id`, `progress_title`, `progress_content`, `progress_createby`, `progress_leader`, `progress_detail_dept`, `progress_detail_file`, `progress_percent`, `progress_status`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(14, 'saldy', 'saldy', 'joko', 'MOEHAMAD SALDY AMIRULLAH JAFAR', 0, 0, 90, 1, 'active', 1, '2020-04-16 16:21:20', 136, '2020-04-18 17:30:42', NULL, NULL),
(15, 'meeting abses karyawan tidak masuk', '1.harus ada approve by manager\r\n2.sesuai dengan jadwal yang telah di tetapkan', 'joko', 'JOKO YUANA', 1, 0, 100, 1, 'active', 1, '2020-04-16 16:25:52', 136, '2020-04-18 17:37:22', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `apps_05_progressdetail_child`
--

CREATE TABLE `apps_05_progressdetail_child` (
  `progresschild_id` int(11) NOT NULL,
  `progressdetail_id` int(11) NOT NULL,
  `progressdetail_text` text NOT NULL,
  `progressdetail_createby` varchar(50) NOT NULL,
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
-- Table structure for table `apps_05_progress_detail`
--

CREATE TABLE `apps_05_progress_detail` (
  `progressdetail_id` int(11) NOT NULL,
  `progress_id` int(11) NOT NULL,
  `progressdetail_text` text NOT NULL,
  `progressdetail_createby` varchar(50) NOT NULL,
  `nama_gambar` text NOT NULL,
  `lokasi_gambar` text NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apps_05_progress_detail`
--

INSERT INTO `apps_05_progress_detail` (`progressdetail_id`, `progress_id`, `progressdetail_text`, `progressdetail_createby`, `nama_gambar`, `lokasi_gambar`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(16, 15, '<p>saldy y</p>', 'moehamad', '', '', 'active', 1, '2020-04-18 11:22:31', NULL, NULL, NULL, NULL),
(17, 15, '<p>coba deh</p>', 'moehamad', '', '', 'active', 1, '2020-04-18 11:23:47', NULL, NULL, NULL, NULL),
(18, 15, '<p>saldy</p>', 'moehamad', '', '', 'active', 1, '2020-04-18 11:27:36', NULL, NULL, NULL, NULL),
(19, 15, '<p>lagi dan lagi</p>', 'moehamad', '', '', 'active', 1, '2020-04-18 11:27:58', NULL, NULL, NULL, NULL),
(20, 14, '<p>saya no 222222222222222222222222222222</p>', 'moehamad', '', '', 'active', 1, '2020-04-18 11:48:45', NULL, NULL, NULL, NULL),
(21, 15, '<p>ini aplikasi chating pertama saya</p>', 'moehamad', '', '', 'active', 1, '2020-04-18 11:56:17', NULL, NULL, NULL, NULL),
(22, 15, '<p>ini hari sabtu mas bro</p>', 'moehamad', '', '', 'active', 1, '2020-04-18 12:31:06', NULL, NULL, NULL, NULL),
(23, 15, '<p>lah iya ya</p>', 'moehamad', '', '', 'active', 1, '2020-04-18 12:31:24', NULL, NULL, NULL, NULL),
(24, 15, '<p>berapa ini ya</p>', 'moehamad', '', '', 'active', 1, '2020-04-18 12:32:26', NULL, NULL, NULL, NULL),
(25, 15, '<p>sabtu sore ini mas</p>', 'moehamad', '', '', 'active', 1, '2020-04-18 17:05:55', NULL, NULL, NULL, NULL),
(26, 15, '<p>saldy tes sore</p>', 'moehamad', '', '', 'active', 1, '2020-04-18 17:07:22', NULL, NULL, NULL, NULL),
(27, 15, '<p><span style=\"color: rgb(45, 45, 45); font-family: Lato, sans-serif;\">output yang di hasilkan oleh perulangan for hampir mirip dengan perulangan while jika kita melihat dari contoh sederhana ini namun pada penggunaanya yang lebih luas perulangan while dan for memiliki fungsi yang berbeda sesuai dengan kebutuhan.</span><br></p>', 'moehamad', '', '', 'active', 1, '2020-04-18 17:07:42', NULL, NULL, NULL, NULL),
(28, 15, '<p>oke mas saldy saya terima ya, untuk reportnya jangan lupa ya</p>', 'moehamad', '', '', 'active', 136, '2020-04-18 17:12:45', NULL, NULL, NULL, NULL),
(29, 15, '<p>joko</p>', 'joko', '', '', 'active', 136, '2020-04-18 17:18:30', NULL, NULL, NULL, NULL),
(30, 15, '<p>tes</p>', 'joko', '', '', 'active', 136, '2020-04-18 17:29:15', NULL, NULL, NULL, NULL),
(31, 14, '<p>tes joko</p>', 'joko', '', '', 'active', 136, '2020-04-18 17:29:39', NULL, NULL, NULL, NULL),
(32, 15, '<p><img src=\"data:image/png;base64,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\" data-filename=\"favicon.png\" style=\"width: 125px;\"></p><p>ini gambarnya</p>', 'joko', '', '', 'active', 136, '2020-04-18 17:39:14', NULL, NULL, NULL, NULL),
(33, 15, '<p>saldy</p>', 'moehamad', '', '', 'active', 1, '2020-04-18 21:18:18', NULL, NULL, NULL, NULL),
(34, 15, '<p>saldy lagi deh</p>', 'moehamad', '', '', 'active', 1, '2020-04-18 21:18:42', NULL, NULL, NULL, NULL),
(35, 15, '<p>uploads</p>', 'moehamad', '', '', 'active', 1, '2020-04-18 21:22:48', NULL, NULL, NULL, NULL),
(36, 15, '<p>qwerty</p>', 'moehamad', '', '', 'active', 1, '2020-04-18 21:25:17', NULL, NULL, NULL, NULL),
(37, 15, '<p>tew qwerty</p>', 'moehamad', '', '', 'active', 1, '2020-04-18 21:35:26', NULL, NULL, NULL, NULL),
(38, 15, '<p>febri saldy</p>', 'moehamad', '', '', 'active', 1, '2020-04-18 21:42:41', NULL, NULL, NULL, NULL),
(39, 15, '', 'moehamad', '', '', 'active', 1, '2020-04-18 21:43:59', NULL, NULL, NULL, NULL),
(40, 15, '', 'moehamad', '', '', 'active', 1, '2020-04-18 21:44:56', NULL, NULL, NULL, NULL),
(41, 15, '<p>1qw23e4</p>', 'moehamad', '', '', 'active', 1, '2020-04-18 21:48:43', NULL, NULL, NULL, NULL);
INSERT INTO `apps_05_progress_detail` (`progressdetail_id`, `progress_id`, `progressdetail_text`, `progressdetail_createby`, `nama_gambar`, `lokasi_gambar`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(42, 15, '<p><img src=\"data:image/png;base64,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', 'moehamad', '', '', 'active', 1, '2020-04-19 07:57:19', NULL, NULL, NULL, NULL);
INSERT INTO `apps_05_progress_detail` (`progressdetail_id`, `progress_id`, `progressdetail_text`, `progressdetail_createby`, `nama_gambar`, `lokasi_gambar`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(43, 15, '<p><img src=\"data:image/jpeg;base64,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\" data-filename=\"Halal.jpg\" style=\"width: 186px;\"><br></p>', 'moehamad', '', '', 'active', 1, '2020-04-19 07:58:26', NULL, NULL, NULL, NULL),
(44, 15, '', 'moehamad', '', '', 'active', 1, '2020-04-19 08:06:59', NULL, NULL, NULL, NULL),
(45, 15, '<p>contoh buat erwin</p>', 'moehamad', '', '', 'active', 1, '2020-05-02 23:43:38', NULL, NULL, NULL, NULL),
(46, 14, '<p>tes</p>', 'moehamad', '', '', 'active', 1, '2020-05-09 21:56:44', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `e00_location`
--

CREATE TABLE `e00_location` (
  `id_location` int(11) NOT NULL,
  `location_code` varchar(7) NOT NULL,
  `location_name` varchar(25) NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e00_location`
--

INSERT INTO `e00_location` (`id_location`, `location_code`, `location_name`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(24, '', 'Departemen QC', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(25, '', 'Departemen R&d Cosmetic', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(26, '', 'Departemen Produksi', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(27, '', 'Departemen Gudang', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(28, '', 'Departemen R&d Pharma', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(29, '', 'Departemen QA', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(30, '', 'Departemen Main & Eng', 'active', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `e00_position`
--

CREATE TABLE `e00_position` (
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

--
-- Dumping data for table `e00_position`
--

INSERT INTO `e00_position` (`id_position`, `id_location`, `location_code`, `position_code`, `position_name`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 0, 'GDB', 'ACC', 'Accounting', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 0, 'AP005', 'ADLT3', 'ADMIN', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 0, 'GDB', 'ADMIN PRODUKSI', 'Admin Produksi', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 0, 'GDA', 'ADMP', 'Ruang Administrasi Produk', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 0, 'GDF', 'AFG', 'Admi FG', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 0, 'AP005', 'ALT1', 'APOTIK Lt.1', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 0, 'GDE', 'AM', 'Admin WH Maklon', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 0, 'GDB', 'AP', 'Admin Produksi', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 0, 'GDF', 'APM', 'Admin PM', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 0, 'GDF', 'ARM', 'Admin RM', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 0, 'GDF', 'ASP', 'Admin Sales Support', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 0, 'GDF', 'AWH', 'Admin Gudang', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 0, 'GDA', 'DIP', 'DIP', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 0, 'GDA', 'GA', 'GA', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(15, 0, 'AP005', 'GLTD', 'GUDANG', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(16, 0, 'GDB', 'HR', 'HR', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(17, 0, 'GDB', 'IT', 'IT', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(18, 0, 'GDF', 'KEMAS', 'Kemas', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(19, 0, 'GDA', 'KSR', 'Kasir', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(20, 0, 'GDA', 'MSL2A', 'MUSHOLAH LT2 GEDUNG A', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(21, 0, 'GDA', 'MSL3A', 'MUSHOLAH TL3 GEDUNG A', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(22, 0, 'GDA', 'PNT', 'Pantry', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(23, 0, 'GDB', 'PPIC', 'PPIC', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(24, 0, 'GDA', 'PR', 'Purchasing', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(25, 0, 'AP005', 'PRC1', 'PERACIKAN 1', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(26, 0, 'AP005', 'PRC2', 'PERACIKAN 2', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(27, 0, 'GDF', 'PRODUKSI', 'Produksi', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(28, 0, 'GDB', 'QC', 'QC', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(29, 0, 'GDB', 'R-ADMIN', 'PPIC', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(30, 0, 'GDA', 'RAC', 'Ruang Accounting', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(31, 0, 'AP005', 'RADM', 'RUANG ADMIN', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(32, 0, 'GDA', 'RAI', 'Ruang Audit Intrenal', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(33, 0, 'GDA', 'RCP', 'Ruang Climatic Dan Pertin', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(34, 0, 'GDA', 'RDG', 'Ruang Design Grafis', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(35, 0, 'GDA', 'RDR', 'Ruang Direktur', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(36, 0, 'GDA', 'RDS', 'Ruang Direksi', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(37, 0, 'GDB', 'RGD', 'Ruang QC', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(38, 0, 'GDA', 'RIHPLC', 'Ruang Instrumental HPLC', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(39, 0, 'GDA', 'RKK', 'Ruang Konsultan Keamanan', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(40, 0, 'GDA', 'RKO', 'Ruang Kemas Obat', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(41, 0, 'GDA', 'RM1', 'Ruang Meeting 1', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(42, 0, 'GDA', 'RM2', 'Ruang Meeting 2', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(43, 0, 'GDA', 'RM3', 'Ruang Meeting 3', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(44, 0, 'GDA', 'RM4', 'Ruang Meeting 4', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(45, 0, 'GDA', 'RM5', 'Ruang Meeting 5', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(46, 0, 'GDA', 'RM6', 'Ruang Meeting 6', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(47, 0, 'GDA', 'RMA', 'Ruang Manager Accounting', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(48, 0, 'GDA', 'RME', 'Ruang Mecanical / Electri', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(49, 0, 'GDA', 'RMH', 'Ruang Manager HR', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(50, 0, 'GDA', 'RMQA', 'Ruang Manager Quality Asu', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(51, 0, 'GDA', 'RMRND', 'Ruang Manager Staff RND', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(52, 0, 'GDA', 'RPO', 'Ruang Produksi Obat', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(53, 0, 'GDA', 'RPPIC', 'Ruang PPIC', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(54, 0, 'GDA', 'RQA', 'Ruang Quality Asurance', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(55, 0, 'GDA', 'RQCO', 'Ruang Quality Control Oba', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(56, 0, 'GDA', 'RRGS', 'Ruang Registrasi', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(57, 0, 'GDA', 'RRND', 'Ruang RnD', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(58, 0, 'GDA', 'RSA', 'Ruang Staff Accounting', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(59, 0, 'GDA', 'RSR', 'Ruang Server', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(60, 0, 'GDA', 'RSS', 'Resepsionis', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(61, 0, 'GDA', 'RUS', 'Ruang Uji Stabilitas', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(62, 0, 'GDB', 'WHM', 'Wirehouse Maklon', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(63, 0, 'GDF', 'WIREHOUSE', 'Wirehouse', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(64, 0, 'N/A', 'RLFK', 'R. Lab Fisika Kimia', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(65, 0, 'N/A', 'RIPF', 'R. IPC Proses F', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(66, 0, 'N/A', 'RLM', 'R. Lab Mikrobiologi', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(67, 0, 'N/A', 'RIPM', 'R. IPC proses G', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(68, 0, 'N/A', 'RPM', 'R. Preparasi Mikrobiologi', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(69, 0, 'N/A', 'RIPG2', 'R. IPC Proses G2', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(70, 0, 'N/A', 'RIPG1', 'R. IPC Proses G1', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(71, 0, 'N/A', 'LGA', 'Lab Gedung A', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(72, 0, 'N/A', 'RMK', 'R. Mixing Krim, Pasta, Ge', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(73, 0, 'N/A', 'RT', 'R. Timbang', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(74, 0, 'N/A', 'LQA', 'Lab QC', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(75, 0, 'N/A', 'RI', 'R. Instrumen', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(76, 0, 'N/A', 'RIP', 'R. IPC Produksi', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(77, 0, 'N/A', 'LQC', 'Laboratorium QC', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(78, 0, 'N/A', 'LAB', 'Laboratorium ', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(79, 0, 'N/A', 'LABP', 'Lab. Preparasi', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(80, 0, '', '2', '1', 'active', 1, '2020-04-30 09:31:30', 1, '2020-04-30 09:31:37', NULL, NULL),
(81, 0, 'N/A', 'CDG', 'Cadangan', 'active', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `e00_scope`
--

CREATE TABLE `e00_scope` (
  `scope_id` int(11) NOT NULL,
  `scope_code` varchar(5) NOT NULL,
  `scope_name` varchar(50) NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e00_scope`
--

INSERT INTO `e00_scope` (`scope_id`, `scope_code`, `scope_name`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 'K', 'Kosmetik', 'active', 2, '2020-01-31 10:50:34', NULL, NULL, NULL, NULL),
(2, 'O', 'Obat', 'active', 2, '2020-01-31 10:50:43', NULL, NULL, NULL, NULL),
(3, 'U', 'Umum', 'active', 2, '2020-01-31 10:50:52', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `e00_signatory`
--

CREATE TABLE `e00_signatory` (
  `id_penandatangan` int(11) NOT NULL,
  `department_name` varchar(15) NOT NULL COMMENT 'combobox',
  `nip` varchar(20) NOT NULL,
  `namaKaryawan` varchar(80) NOT NULL COMMENT 'combobox',
  `jabatan_penandatangan` varchar(60) NOT NULL,
  `tanggal_tmt` date NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e00_signatory`
--

INSERT INTO `e00_signatory` (`id_penandatangan`, `department_name`, `nip`, `namaKaryawan`, `jabatan_penandatangan`, `tanggal_tmt`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 'QA', '', 'RITA LUTHVIANA', 'manager', '2020-03-04', 'active', 2, '2020-03-04 11:19:58', NULL, NULL, NULL, NULL),
(2, 'WH', '', 'DENNY RACHMADI', 'manager', '2020-03-04', 'active', 2, '2020-03-04 11:20:37', NULL, NULL, NULL, NULL),
(3, 'IT', '', 'JOKO YUANA', 'manager', '2020-03-04', 'active', 2, '2020-03-04 11:20:54', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `e00_support_subject`
--

CREATE TABLE `e00_support_subject` (
  `subject_id` int(11) NOT NULL,
  `subject_by` varchar(5) NOT NULL,
  `subject_code` varchar(7) NOT NULL,
  `subject_name` varchar(25) NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e00_support_subject`
--

INSERT INTO `e00_support_subject` (`subject_id`, `subject_by`, `subject_code`, `subject_name`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 'IT', 'SFW', 'Software', 'active', NULL, NULL, 1, '2020-03-21 20:16:25', NULL, NULL),
(2, 'IT', 'HRD', 'Hardware', 'active', 1, '2020-03-21 20:16:43', NULL, NULL, NULL, NULL),
(3, 'IT', 'NTW', 'Network', 'active', 1, '2020-03-21 20:17:14', NULL, NULL, NULL, NULL),
(4, 'IT', 'Printer', 'Printer', 'nonactive', 1, '2020-03-24 11:56:58', NULL, NULL, 1, '2020-03-24 11:57:04');

-- --------------------------------------------------------

--
-- Table structure for table `e01_ms_jenis_penyimpangan`
--

CREATE TABLE `e01_ms_jenis_penyimpangan` (
  `id_jenis` int(11) NOT NULL,
  `kode_jenis` varchar(5) NOT NULL,
  `nama_jenis` varchar(50) NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e01_ms_jenis_penyimpangan`
--

INSERT INTO `e01_ms_jenis_penyimpangan` (`id_jenis`, `kode_jenis`, `nama_jenis`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 'PR', 'Produk ruahan', 'active', 2, '2020-01-31 10:46:46', NULL, NULL, NULL, NULL),
(2, 'PA', 'Produk antara', 'active', 2, '2020-01-31 10:47:20', NULL, NULL, NULL, NULL),
(3, 'PJ', 'Produk jadi', 'active', 2, '2020-01-31 10:47:33', NULL, NULL, NULL, NULL),
(4, 'KHL', 'Kehalalan (bahan/produk)', 'active', 2, '2020-01-31 10:48:11', NULL, NULL, NULL, NULL),
(5, 'ST', 'Sistem', 'active', 2, '2020-01-31 10:48:28', NULL, NULL, NULL, NULL),
(6, 'AL', 'Alat', 'active', 2, '2020-01-31 10:48:41', NULL, NULL, NULL, NULL),
(7, 'DK', 'Dokumen', 'active', 2, '2020-01-31 10:48:54', NULL, NULL, NULL, NULL),
(8, 'LL', 'Lain-lain', 'active', 2, '2020-01-31 10:49:05', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `e01_ms_katagori`
--

CREATE TABLE `e01_ms_katagori` (
  `id_katagori` int(11) NOT NULL,
  `kode_katagori` varchar(5) NOT NULL,
  `nama_katagori` varchar(50) NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e01_ms_katagori`
--

INSERT INTO `e01_ms_katagori` (`id_katagori`, `kode_katagori`, `nama_katagori`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 'DevB', 'Batch', 'active', 2, '2020-01-31 10:49:48', NULL, NULL, NULL, NULL),
(2, 'DevNB', 'Non Batch', 'active', 2, '2020-01-31 10:50:14', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `e01_ms_resiko`
--

CREATE TABLE `e01_ms_resiko` (
  `id_resiko` int(11) NOT NULL,
  `kode_resiko` varchar(2) NOT NULL,
  `nama_resiko` varchar(10) NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e01_ms_resiko`
--

INSERT INTO `e01_ms_resiko` (`id_resiko`, `kode_resiko`, `nama_resiko`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 'C', 'Critical', 'active', 2, '2020-01-31 10:49:48', NULL, NULL, NULL, NULL),
(2, 'M', 'Major', 'active', 2, '2020-01-31 10:50:14', NULL, NULL, NULL, NULL),
(3, 'm', 'Minor', 'active', 2, '2020-02-14 00:00:00', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `e01_ms_ruanglingkup`
--

CREATE TABLE `e01_ms_ruanglingkup` (
  `id_ruanglingkup` int(11) NOT NULL,
  `kode_ruanglingkup` varchar(5) NOT NULL,
  `nama_ruanglingkup` varchar(50) NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e01_ms_ruanglingkup`
--

INSERT INTO `e01_ms_ruanglingkup` (`id_ruanglingkup`, `kode_ruanglingkup`, `nama_ruanglingkup`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 'K', 'Kosmetik', 'active', 2, '2020-01-31 10:50:34', NULL, NULL, NULL, NULL),
(2, 'O', 'Obat', 'active', 2, '2020-01-31 10:50:43', NULL, NULL, NULL, NULL),
(3, 'U', 'Umum', 'active', 2, '2020-01-31 10:50:52', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `e01_ms_tipe`
--

CREATE TABLE `e01_ms_tipe` (
  `id_tipe` int(11) NOT NULL,
  `kode_tipe` varchar(5) NOT NULL,
  `nama_tipe` varchar(50) NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e01_ms_tipe`
--

INSERT INTO `e01_ms_tipe` (`id_tipe`, `kode_tipe`, `nama_tipe`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 'P', 'Planned', 'active', 2, '2020-01-31 11:41:33', NULL, NULL, NULL, NULL),
(2, 'U', 'Unplanned', 'active', 2, '2020-01-31 11:41:52', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `e01_tmp_penyimpangan`
--

CREATE TABLE `e01_tmp_penyimpangan` (
  `id_formulir` int(11) NOT NULL,
  `improvement_code` varchar(30) NOT NULL,
  `title_improvement` varchar(225) NOT NULL,
  `tanggal` date NOT NULL,
  `number` varchar(150) NOT NULL,
  `id_katagori` int(2) NOT NULL DEFAULT '0' COMMENT 'dont	',
  `id_tipe` int(11) NOT NULL DEFAULT '0' COMMENT 'dont	',
  `id_ruanglingkup` char(2) NOT NULL DEFAULT '0' COMMENT 'dont	',
  `id_jenis` int(11) NOT NULL DEFAULT '0' COMMENT 'dont	',
  `etc` varchar(225) NOT NULL,
  `rincian_penyimpangan` text NOT NULL,
  `rincian_tindakan` text NOT NULL,
  `id_resiko` int(11) NOT NULL COMMENT 'dont',
  `dampak` int(1) NOT NULL DEFAULT '1' COMMENT '0=no,1=yes',
  `uraian` text NOT NULL,
  `department_name` text NOT NULL COMMENT 'dont',
  `kesimpulan_akar` text NOT NULL,
  `kesimpulan_akhir` text NOT NULL,
  `status_penyimpangan` int(1) NOT NULL DEFAULT '1' COMMENT '1=Open, 0=Closed',
  `tindaklajuti_oleh` varchar(11) NOT NULL COMMENT 'dont',
  `lokasi_gambar` varchar(255) NOT NULL,
  `nama_gambar` varchar(255) NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e01_tmp_penyimpangan`
--

INSERT INTO `e01_tmp_penyimpangan` (`id_formulir`, `improvement_code`, `title_improvement`, `tanggal`, `number`, `id_katagori`, `id_tipe`, `id_ruanglingkup`, `id_jenis`, `etc`, `rincian_penyimpangan`, `rincian_tindakan`, `id_resiko`, `dampak`, `uraian`, `department_name`, `kesimpulan_akar`, `kesimpulan_akhir`, `status_penyimpangan`, `tindaklajuti_oleh`, `lokasi_gambar`, `nama_gambar`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 'DevNB/U/QA/2020/03/02', 'Jadwal monitoring pest & rodent control', '1970-01-01', '2', 2, 3, 'La', 0, 'NA', '', '', 0, 1, '', '', '', '', 1, '', '', '', 'active', 1, '2020-07-14 08:54:45', NULL, NULL, NULL, NULL),
(2, 'DevNB/U/QA/2020/02/01', 'Kalibrasi internal timbangan Dept. Produksi Obat, dan QC Obat.', '1970-01-01', '2', 2, 3, 'Al', 0, 'Timbangan PRD/O/TMB/2013/001, 002, 003, dan QC/O/TMB/2015/003.', '', '', 0, 1, '', '', '', '', 1, '', '', '', 'active', 1, '2020-07-14 08:54:45', NULL, NULL, NULL, NULL),
(3, 'DevNB/U/QA/2020/03/01', 'Jadwal pelaksanaan audit internal CPOB dan CPKB (Audit kecil) tahun 2020).', '1970-01-01', '2', 2, 3, 'La', 0, 'NA', '', '', 0, 1, '', '', '', '', 1, '', '', '', 'active', 1, '2020-07-14 08:54:45', NULL, NULL, NULL, NULL),
(4, 'DevNB/U/QA/2020/05/01', 'Realisasi pelatihan Bulan April 2020', '1970-01-01', '2', 2, 3, 'La', 0, 'NA', '', '', 0, 1, '', '', '', '', 1, '', '', '', 'active', 1, '2020-07-14 08:54:45', NULL, NULL, NULL, NULL),
(5, 'DevNB/U/QA/2020/05/02', 'Tidak terlaksana pelatihan internal Bulan Mei 2020', '1970-01-01', '2', 2, 3, 'La', 0, 'NA', '', '', 0, 1, '', '', '', '', 1, '', '', '', 'active', 1, '2020-07-14 08:54:45', NULL, NULL, NULL, NULL),
(6, 'DevNB/U/QA/2020/05/03', 'Pelaksanaan audit internal SJH Semester 1 Tahun 2020', '1970-01-01', '2', 2, 3, 'La', 0, 'NA', '', '', 0, 1, '', '', '', '', 1, '', '', '', 'active', 1, '2020-07-14 08:54:45', NULL, NULL, NULL, NULL),
(7, 'DevNB/U/QA/2020/03/01', 'Jadwal pelaksanaan audit internal CPOB dan CPKB (Audit kecil) tahun 2020).', '1970-01-01', '2', 2, 3, 'La', 0, 'NA', '', '', 0, 1, '', '', '', '', 1, '', '', '', 'active', 1, '2020-07-14 08:54:45', NULL, NULL, NULL, NULL),
(8, 'DevNB/U/QA/2020/05/01', 'Realisasi pelatihan Bulan April 2020', '1970-01-01', '2', 2, 3, 'La', 0, 'NA', '', '', 0, 1, '', '', '', '', 1, '', '', '', 'active', 1, '2020-07-14 08:54:45', NULL, NULL, NULL, NULL),
(9, 'DevNB/U/QA/2020/05/02', 'Tidak terlaksana pelatihan internal Bulan Mei 2020', '1970-01-01', '2', 2, 3, 'La', 0, 'NA', '', '', 0, 1, '', '', '', '', 1, '', '', '', 'active', 1, '2020-07-14 08:54:45', NULL, NULL, NULL, NULL),
(10, 'DevNB/U/QA/2020/05/03', 'Pelaksanaan audit internal SJH Semester 1 Tahun 2020', '1970-01-01', '2', 2, 3, 'La', 0, 'NA', '', '', 0, 1, '', '', '', '', 1, '', '', '', 'active', 1, '2020-07-14 08:54:45', NULL, NULL, NULL, NULL),
(11, 'DevNB/U/QA/2020/06/01', 'Tidak terlaksana pelatihan internal Bulan Juni 2020, pelatihan ulang, dan evaluasi pelatihan.', '1970-01-01', '2', 2, 3, 'La', 0, 'NA', '', '', 0, 1, '', '', '', '', 1, '', '', '', 'active', 1, '2020-07-14 08:54:45', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `e01_ts_capa`
--

CREATE TABLE `e01_ts_capa` (
  `id_capa` int(11) NOT NULL,
  `id_formulir` int(11) NOT NULL DEFAULT '0',
  `correct_act` text NOT NULL,
  `correct_duedate` date NOT NULL,
  `correct_status` varchar(6) NOT NULL COMMENT '0=open,1=closed',
  `correct_pic` varchar(100) NOT NULL,
  `preventive_act` text NOT NULL,
  `preventive_duedate` date NOT NULL,
  `preventive_status` varchar(7) NOT NULL COMMENT 'dont',
  `preventive_pic` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nama_gambar` varchar(225) DEFAULT NULL,
  `lokasi_gambar` varchar(225) NOT NULL,
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
-- Table structure for table `e01_ts_capa_corrective`
--

CREATE TABLE `e01_ts_capa_corrective` (
  `corrective_id` int(11) NOT NULL,
  `id_formulir` int(11) NOT NULL DEFAULT '0',
  `correct_act` text NOT NULL,
  `correct_duedate` date NOT NULL,
  `correct_status` varchar(6) NOT NULL,
  `correct_pic` varchar(100) NOT NULL,
  `corrective_finis` date NOT NULL,
  `nama_gambar` varchar(225) DEFAULT NULL,
  `lokasi_gambar` varchar(225) NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e01_ts_capa_corrective`
--

INSERT INTO `e01_ts_capa_corrective` (`corrective_id`, `id_formulir`, `correct_act`, `correct_duedate`, `correct_status`, `correct_pic`, `corrective_finis`, `nama_gambar`, `lokasi_gambar`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 1, 'wtwtt', '2020-08-06', 'CLOSED', '2', '2020-08-06', NULL, '', 'active', 136, '2020-08-06 11:45:05', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `e01_ts_capa_preventive`
--

CREATE TABLE `e01_ts_capa_preventive` (
  `id_preventive` int(11) NOT NULL,
  `id_formulir` int(11) NOT NULL DEFAULT '0',
  `preventive_act` text NOT NULL,
  `preventive_duedate` date NOT NULL,
  `preventive_status` varchar(7) NOT NULL COMMENT 'dont',
  `preventive_pic` varchar(100) NOT NULL,
  `preventive_finis` date NOT NULL,
  `nama_gambar` varchar(225) DEFAULT NULL,
  `lokasi_gambar` varchar(225) NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e01_ts_capa_preventive`
--

INSERT INTO `e01_ts_capa_preventive` (`id_preventive`, `id_formulir`, `preventive_act`, `preventive_duedate`, `preventive_status`, `preventive_pic`, `preventive_finis`, `nama_gambar`, `lokasi_gambar`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 1, 'test', '2020-08-11', 'closed', '12', '0000-00-00', NULL, '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 1, 'test', '2020-08-11', 'closed', '12', '0000-00-00', NULL, '', 'active', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `e01_ts_depart_terkait`
--

CREATE TABLE `e01_ts_depart_terkait` (
  `id_approve` int(11) NOT NULL,
  `id_formulir` int(11) NOT NULL,
  `improvement_code` varchar(30) DEFAULT NULL,
  `department_name` varchar(15) DEFAULT NULL,
  `status_approve` int(1) DEFAULT '0' COMMENT '0=not approve, 1=approve, 2=notapprove',
  `reason` text,
  `nama_user` varchar(50) NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e01_ts_depart_terkait`
--

INSERT INTO `e01_ts_depart_terkait` (`id_approve`, `id_formulir`, `improvement_code`, `department_name`, `status_approve`, `reason`, `nama_user`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 1, 'DevNB/U/IT/2020/08/04', 'IT', 0, NULL, '', 'nonactive', NULL, NULL, NULL, NULL, 1, '2020-08-06 13:24:58'),
(2, 2, 'DevNB/U/IT/2020/08/04', 'IT', 0, NULL, '', 'nonactive', NULL, NULL, NULL, NULL, 136, '2020-08-06 13:09:51'),
(3, 1, 'DevNB/U/IT/2020/08/04', 'QA', 0, NULL, '', 'nonactive', NULL, NULL, NULL, NULL, 1, '2020-08-06 13:24:58'),
(4, 3, 'DevNB/U/IT/2020/08/05', 'IT', 0, NULL, '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 4, 'DevNB/U/IT/2020/08/06', 'IT', 0, NULL, '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 5, 'DevNB/U/IT/2020/08/07', 'IT', 0, NULL, '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 6, 'DevNB/U/IT/2020/08/08', 'IT', 0, NULL, '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 7, 'DevNB/U/IT/2020/08/09', 'IT', 0, NULL, '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 8, 'DevNB/U/QA/2020/08/10', 'QA', 0, NULL, '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 9, 'DevNB/U/IT/2020/08/11', 'IT', 0, NULL, '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 10, 'DevNB/O/IT/2020/08/01', 'IT', 0, NULL, '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 11, 'DevNB/O/IT/2020/08/02', 'IT', 0, NULL, '', 'active', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `e01_ts_ditindak_lanjuti`
--

CREATE TABLE `e01_ts_ditindak_lanjuti` (
  `dilanjuti_id` int(11) NOT NULL,
  `id_formulir` int(11) NOT NULL,
  `ditindak_lanjuti` text NOT NULL,
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
-- Table structure for table `e01_ts_evaluasi_tindakan`
--

CREATE TABLE `e01_ts_evaluasi_tindakan` (
  `id_evaluasi_tindakan` int(11) NOT NULL,
  `id_formulir` int(11) NOT NULL,
  `improvement_code` varchar(30) NOT NULL,
  `evaluasi_tindakan` text NOT NULL,
  `L` int(11) NOT NULL,
  `S` int(11) NOT NULL,
  `D` int(11) NOT NULL,
  `RPN` int(11) NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e01_ts_evaluasi_tindakan`
--

INSERT INTO `e01_ts_evaluasi_tindakan` (`id_evaluasi_tindakan`, `id_formulir`, `improvement_code`, `evaluasi_tindakan`, `L`, `S`, `D`, `RPN`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 1, 'DevNB/U/IT/2020/08/04', 'oke', 2, 2, 3, 12, 'active', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `e01_ts_finalconclusion`
--

CREATE TABLE `e01_ts_finalconclusion` (
  `finalconclusion_id` int(11) NOT NULL,
  `id_formulir` int(11) NOT NULL DEFAULT '0',
  `improvement_code` varchar(30) NOT NULL,
  `finalconclusion` text NOT NULL,
  `finalconclusion_status` int(1) NOT NULL DEFAULT '0' COMMENT '0=OPEN, 1=CLOSED',
  `finalconclusion_department` varchar(25) NOT NULL COMMENT 'dont',
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e01_ts_finalconclusion`
--

INSERT INTO `e01_ts_finalconclusion` (`finalconclusion_id`, `id_formulir`, `improvement_code`, `finalconclusion`, `finalconclusion_status`, `finalconclusion_department`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 1, 'DevNB/U/IT/2020/07/14', '', 0, '', 'nonactive', 1, '2020-07-28 16:55:17', NULL, NULL, 1, '2020-08-06 13:24:58'),
(2, 2, 'DevNB/U/IT/2020/07/15', '', 0, '', 'nonactive', 1, '2020-07-30 11:10:27', NULL, NULL, 136, '2020-08-06 13:09:51'),
(3, 3, 'DevNB/U/IT/2020/07/16', '', 0, '', 'active', 1, '2020-07-30 11:17:16', NULL, NULL, NULL, NULL),
(4, 4, 'DevNB/U/IT/2020/07/17', '', 0, '', 'active', 1, '2020-07-30 11:19:18', NULL, NULL, NULL, NULL),
(5, 5, 'DevNB/U/IT/2020/07/18', '', 0, '', 'active', 1, '2020-07-30 11:24:12', NULL, NULL, NULL, NULL),
(6, 6, 'DevNB/U/IT/2020/08/01', '', 0, '', 'active', 1, '2020-08-03 15:28:50', NULL, NULL, NULL, NULL),
(7, 7, 'DevNB/U/IT/2020/08/02', '', 0, '', 'active', 1, '2020-08-03 15:36:36', NULL, NULL, NULL, NULL),
(8, 8, 'DevNB/U/IT/2020/08/03', '', 0, '', 'active', 1, '2020-08-03 15:55:04', NULL, NULL, NULL, NULL),
(9, 1, 'DevNB/U/IT/2020/08/04', '', 0, '', 'nonactive', 1, '2020-08-06 11:40:34', NULL, NULL, 1, '2020-08-06 13:24:58'),
(10, 2, 'DevNB/U/IT/2020/08/04', '', 0, '', 'nonactive', 1, '2020-08-06 11:40:35', NULL, NULL, 136, '2020-08-06 13:09:51'),
(11, 3, 'DevNB/U/IT/2020/08/05', '', 0, '', 'active', 1, '2020-08-06 14:53:41', NULL, NULL, NULL, NULL),
(12, 4, 'DevNB/U/IT/2020/08/06', '', 0, '', 'active', 1, '2020-08-06 15:00:24', NULL, NULL, NULL, NULL),
(13, 5, 'DevNB/U/IT/2020/08/07', '', 0, '', 'active', 1, '2020-08-06 15:06:06', NULL, NULL, NULL, NULL),
(14, 6, 'DevNB/U/IT/2020/08/08', '', 0, '', 'active', 1, '2020-08-06 15:08:17', NULL, NULL, NULL, NULL),
(15, 7, 'DevNB/U/IT/2020/08/09', '', 0, '', 'active', 1, '2020-08-06 15:13:18', NULL, NULL, NULL, NULL),
(16, 8, 'DevNB/U/QA/2020/08/10', '', 0, '', 'active', 352, '2020-08-07 13:20:44', NULL, NULL, NULL, NULL),
(17, 9, 'DevNB/U/IT/2020/08/11', '', 0, '', 'active', 1, '2020-08-11 08:33:17', NULL, NULL, NULL, NULL),
(18, 10, 'DevNB/O/IT/2020/08/01', '', 0, '', 'active', 1, '2020-08-11 14:18:10', NULL, NULL, NULL, NULL),
(19, 11, 'DevNB/O/IT/2020/08/02', '', 0, '', 'active', 1, '2020-08-11 14:21:30', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `e01_ts_formulir`
--

CREATE TABLE `e01_ts_formulir` (
  `id_formulir` int(11) NOT NULL,
  `improvement_code` varchar(30) NOT NULL,
  `title_improvement` text NOT NULL,
  `tanggal` date NOT NULL,
  `number` varchar(30) NOT NULL,
  `id_katagori` int(2) NOT NULL DEFAULT '0' COMMENT 'dont	',
  `id_tipe` int(11) NOT NULL DEFAULT '0' COMMENT 'dont	',
  `id_ruanglingkup` char(2) NOT NULL DEFAULT '0' COMMENT 'dont	',
  `id_jenis` int(11) NOT NULL DEFAULT '0' COMMENT 'dont	',
  `etc` varchar(225) DEFAULT NULL,
  `rincian_penyimpangan` text NOT NULL,
  `rincian_tindakan` text NOT NULL,
  `id_resiko` int(11) NOT NULL COMMENT 'dont',
  `dampak` int(1) NOT NULL DEFAULT '1' COMMENT '0=no,1=yes',
  `uraian` text,
  `department_name` text NOT NULL COMMENT 'dont',
  `status_penyimpangan` int(1) NOT NULL DEFAULT '0' COMMENT '0=draft, 1=evalusi,3=analisis, 5=open, 7=closed',
  `lokasi_gambar` varchar(255) NOT NULL,
  `nama_gambar` varchar(255) NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e01_ts_formulir`
--

INSERT INTO `e01_ts_formulir` (`id_formulir`, `improvement_code`, `title_improvement`, `tanggal`, `number`, `id_katagori`, `id_tipe`, `id_ruanglingkup`, `id_jenis`, `etc`, `rincian_penyimpangan`, `rincian_tindakan`, `id_resiko`, `dampak`, `uraian`, `department_name`, `status_penyimpangan`, `lokasi_gambar`, `nama_gambar`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 'DevNB/U/IT/2020/08/04', 'percoban v 3', '2020-08-06', 'NA', 2, 1, '3', 7, NULL, 'percoban v 3', 'percoban v 3', 3, 0, '', 'null', 7, '', '', 'active', 1, '2020-08-06 11:40:34', NULL, NULL, 1, '2020-08-06 13:24:58'),
(3, 'DevNB/U/IT/2020/08/05', 'percobaan 2', '2020-08-06', 'NA', 2, 2, '3', 7, NULL, 'percobaan 2', 'percobaan 2', 3, 0, '', 'null', 0, '', '', 'active', 1, '2020-08-06 14:53:41', NULL, NULL, NULL, NULL),
(4, 'DevNB/U/IT/2020/08/06', 'divcorrective', '2020-08-06', 'NA', 2, 2, '3', 7, NULL, 'divcorrective', 'divcorrective', 3, 0, '', 'null', 0, '', '', 'active', 1, '2020-08-06 15:00:24', NULL, NULL, NULL, NULL),
(5, 'DevNB/U/IT/2020/08/07', 'Create - Penyimpangan', '2020-08-06', 'NA', 2, 2, '3', 7, NULL, 'Create - Penyimpangan', 'Create - Penyimpangan', 3, 0, '', 'null', 0, '', '', 'active', 1, '2020-08-06 15:06:06', NULL, NULL, NULL, NULL),
(6, 'DevNB/U/IT/2020/08/08', 'title_improvement', '2020-08-06', 'NA', 2, 2, '3', 7, NULL, 'title_improvement', 'title_improvement', 3, 0, '', 'null', 0, '', '', 'active', 1, '2020-08-06 15:08:17', NULL, NULL, NULL, NULL),
(7, 'DevNB/U/IT/2020/08/09', 'title_improvement', '2020-08-06', 'NA', 2, 1, '3', 7, NULL, 'title_improvement', 'title_improvement', 3, 0, '', 'null', 0, '', '', 'active', 1, '2020-08-06 15:13:18', NULL, NULL, NULL, NULL),
(8, 'DevNB/U/QA/2020/08/10', 'SDSSSDSDS', '2020-08-07', 'QASS', 2, 2, '3', 7, NULL, 'FSDSDSDSDSDS', 'DSDSDSDSDSDSD', 2, 1, 'DSDSDSDSDSDS', 'null', 0, '', '', 'active', 352, '2020-08-07 13:20:44', NULL, NULL, NULL, NULL),
(9, 'DevNB/U/IT/2020/08/11', 'nama penyimpangan', '2020-08-11', 'NA', 2, 2, '3', 7, NULL, 'nama penyimpangan', 'nama penyimpangan', 3, 0, 'nama penyimpangan', 'null', 0, '', '', 'active', 1, '2020-08-11 08:33:17', NULL, NULL, NULL, NULL),
(10, 'DevNB/O/IT/2020/08/01', 'add', '2020-08-11', 'NA', 2, 2, '2', 3, NULL, 'fsdfds', 'fdsfdsfs', 3, 0, '', 'null', 0, '', '', 'active', 1, '2020-08-11 14:18:10', NULL, NULL, NULL, NULL),
(11, 'DevNB/O/IT/2020/08/02', 'fdfdsf', '2020-08-11', 'NA', 2, 2, '2', 6, NULL, 'fsgfdgfd', 'gdfgdf', 3, 0, '', 'null', 0, '', '', 'active', 1, '2020-08-11 14:21:30', NULL, NULL, NULL, NULL),
(12, 'DevNB//IT/2020/08/', 'rerere', '2020-08-11', 'fdfdfd', 2, 1, '2', 7, NULL, 'ffdfdfd', 'dfdfd', 3, 0, '', '', 0, '', '', 'active', 1, '2020-08-11 14:32:39', NULL, NULL, NULL, NULL),
(13, 'DevNB//IT/2020/08/', 'rerere', '2020-08-11', 'fdfdfd', 2, 1, '2', 7, NULL, 'ffdfdfd', 'dfdfd', 3, 0, '', '', 0, '', '', 'active', 1, '2020-08-11 14:32:47', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `e01_ts_formulirapprove`
--

CREATE TABLE `e01_ts_formulirapprove` (
  `id_formulirapprove` int(11) NOT NULL,
  `id_formulir` int(11) NOT NULL DEFAULT '0',
  `improvement_code` varchar(30) NOT NULL,
  `status_formulir` int(1) NOT NULL DEFAULT '0' COMMENT '0=notapprove,1=approve, 2=notapprove',
  `reason` text NOT NULL,
  `approve_name` varchar(25) NOT NULL,
  `nama_gambar` varchar(25) NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e01_ts_formulirapprove`
--

INSERT INTO `e01_ts_formulirapprove` (`id_formulirapprove`, `id_formulir`, `improvement_code`, `status_formulir`, `reason`, `approve_name`, `nama_gambar`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 1, 'DevNB/U/IT/2020/08/04', 1, '', '', '', 'nonactive', 136, '2020-08-06 11:42:11', NULL, NULL, 1, '2020-08-06 13:24:58'),
(2, 2, 'DevNB/U/IT/2020/08/04', 0, '', '', '', 'nonactive', NULL, NULL, NULL, NULL, 136, '2020-08-06 13:09:51'),
(3, 3, 'DevNB/U/IT/2020/08/05', 0, '', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 4, 'DevNB/U/IT/2020/08/06', 0, '', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 5, 'DevNB/U/IT/2020/08/07', 0, '', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 6, 'DevNB/U/IT/2020/08/08', 0, '', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 7, 'DevNB/U/IT/2020/08/09', 0, '', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 8, 'DevNB/U/QA/2020/08/10', 0, '', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 9, 'DevNB/U/IT/2020/08/11', 0, '', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 10, 'DevNB/O/IT/2020/08/01', 0, '', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 11, 'DevNB/O/IT/2020/08/02', 0, '', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `e01_ts_kesimpulan_akar`
--

CREATE TABLE `e01_ts_kesimpulan_akar` (
  `kesimpulan_akar_id` int(11) NOT NULL,
  `id_formulir` int(11) NOT NULL,
  `kesimpulan_akar` text NOT NULL,
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
-- Table structure for table `e01_ts_kesimpulan_akhir`
--

CREATE TABLE `e01_ts_kesimpulan_akhir` (
  `kesimpulan_akhir_id` int(11) NOT NULL,
  `id_formulir` int(11) NOT NULL,
  `kesimpulan_akhir` text NOT NULL,
  `ditindak_lanjuti` varchar(50) NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e01_ts_kesimpulan_akhir`
--

INSERT INTO `e01_ts_kesimpulan_akhir` (`kesimpulan_akhir_id`, `id_formulir`, `kesimpulan_akhir`, `ditindak_lanjuti`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 1, 'percoban v3', 'QA', 'active', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `e01_ts_rootcauseanalysis`
--

CREATE TABLE `e01_ts_rootcauseanalysis` (
  `id_rootcause` int(11) NOT NULL,
  `id_formulir` int(11) NOT NULL DEFAULT '0',
  `personel` text NOT NULL,
  `material` text NOT NULL,
  `alat_mesin` text NOT NULL,
  `metode` text NOT NULL,
  `sarana` text NOT NULL,
  `kesimpulan_akar` text NOT NULL,
  `department_name` varchar(5) NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e01_ts_rootcauseanalysis`
--

INSERT INTO `e01_ts_rootcauseanalysis` (`id_rootcause`, `id_formulir`, `personel`, `material`, `alat_mesin`, `metode`, `sarana`, `kesimpulan_akar`, `department_name`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 1, 'percoban v 3', 'percoban v 3', 'percoban v 3', 'percoban v 3', 'percoban v 3', 'percoban v 3', 'IT', 'active', 1, '2020-08-06 11:40:34', NULL, NULL, NULL, NULL),
(2, 2, 'percoban v 3', 'percoban v 3', 'percoban v 3', 'percoban v 3', 'percoban v 3', 'percoban v 3', 'IT', 'active', 1, '2020-08-06 11:40:35', NULL, NULL, NULL, NULL),
(3, 3, 'percobaan 2', 'percobaan 2', 'percobaan 2', 'percobaan 2', 'percobaan 2', 'percobaan 2', 'IT', 'active', 1, '2020-08-06 14:53:41', NULL, NULL, NULL, NULL),
(4, 4, 'divcorrective', 'divcorrective', 'divcorrective', 'divcorrective', 'divcorrective', 'divcorrective', 'IT', 'active', 1, '2020-08-06 15:00:24', NULL, NULL, NULL, NULL),
(5, 5, 'Create - Penyimpangan', 'Create - Penyimpangan', 'Create - Penyimpangan', 'Create - Penyimpangan', 'Create - Penyimpangan', 'Create - Penyimpangan', 'IT', 'active', 1, '2020-08-06 15:06:06', NULL, NULL, NULL, NULL),
(6, 6, 'title_improvement', 'title_improvement', 'title_improvement', 'title_improvement', 'title_improvement', 'title_improvement', 'IT', 'active', 1, '2020-08-06 15:08:17', NULL, NULL, NULL, NULL),
(7, 7, 'title_improvement', 'title_improvement', 'title_improvement', 'title_improvement', 'title_improvement', 'title_improvement', 'IT', 'active', 1, '2020-08-06 15:13:18', NULL, NULL, NULL, NULL),
(8, 8, 'fgfg', 'gfgfg', 'gfgfg', 'gfgf', 'gfg', 'fgfg', 'QA', 'active', 352, '2020-08-07 13:20:44', NULL, NULL, NULL, NULL),
(9, 9, 'nama penyimpangan', 'nama penyimpangan', 'nama penyimpangan', 'nama penyimpangan', 'nama penyimpangan', 'nama penyimpangan', 'IT', 'active', 1, '2020-08-11 08:33:17', NULL, NULL, NULL, NULL),
(10, 10, 'dfdsf', 'fdfds', 'dfdsf', 'fdsf', 'fdsfdsf', 'fdsfdsfdsf', 'IT', 'active', 1, '2020-08-11 14:18:10', NULL, NULL, NULL, NULL),
(11, 11, 'cxzc', 'vsdsdf', 'sfsgf', 'fdgdfg', 'gfdgdf', 'gdfgd', 'IT', 'active', 1, '2020-08-11 14:21:30', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `e01_vl_file_analisis`
--

CREATE TABLE `e01_vl_file_analisis` (
  `id_file_analisis` int(11) NOT NULL,
  `id_bank` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `nama_gambar` varchar(255) NOT NULL COMMENT 'gambar',
  `lokasi_gambar` varchar(255) NOT NULL COMMENT 'gambar',
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
-- Table structure for table `e01_vl_file_evaluasi`
--

CREATE TABLE `e01_vl_file_evaluasi` (
  `id_file_evaluasi` int(11) NOT NULL,
  `id_bank` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `nama_gambar` varchar(255) NOT NULL COMMENT 'gambar',
  `lokasi_gambar` varchar(255) NOT NULL COMMENT 'gambar',
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
-- Table structure for table `e02_ms_assets`
--

CREATE TABLE `e02_ms_assets` (
  `type_assets_id` int(11) NOT NULL,
  `type_assets_code` char(3) NOT NULL,
  `type_assets_name` varchar(25) NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e02_ms_assets`
--

INSERT INTO `e02_ms_assets` (`type_assets_id`, `type_assets_code`, `type_assets_name`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, '196', '0', 'nonactive', 1, '2019-08-19 06:15:21', 1, '2020-01-27 09:01:08', 1, '2020-02-09 21:57:37'),
(2, '196', '0', 'nonactive', 1, '2019-08-19 06:24:48', NULL, NULL, 1, '2020-01-24 15:42:03'),
(3, '123', '0', 'nonactive', 1, '2020-02-09 21:53:12', NULL, NULL, 1, '2020-02-09 21:53:17'),
(4, '134', '0', 'nonactive', 1, '2020-02-09 21:57:31', NULL, NULL, 1, '2020-02-09 22:04:44'),
(5, '213', '0', 'nonactive', 1, '2020-02-09 21:59:15', NULL, NULL, 1, '2020-02-09 21:59:19'),
(6, '147', '0', 'nonactive', 1, '2020-02-09 22:00:36', NULL, NULL, 1, '2020-02-09 22:00:40'),
(7, 'kpt', 'Komputer', 'active', 1, '2020-02-09 22:01:28', 1, '2020-04-02 16:47:50', NULL, NULL),
(8, '111', '0', 'nonactive', 1, '2020-02-09 22:04:37', NULL, NULL, 1, '2020-02-09 22:04:41'),
(9, 'q56', '0', 'nonactive', 1, '2020-02-09 22:07:39', NULL, NULL, 1, '2020-02-09 22:07:43'),
(10, 'tes', 'tesder', 'nonactive', 1, '2020-04-03 10:08:59', NULL, NULL, 1, '2020-04-03 10:09:04');

-- --------------------------------------------------------

--
-- Table structure for table `e02_ms_uom`
--

CREATE TABLE `e02_ms_uom` (
  `id_uom` int(11) NOT NULL,
  `uom_code` char(3) NOT NULL,
  `uom_name` varchar(25) NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e02_ms_uom`
--

INSERT INTO `e02_ms_uom` (`id_uom`, `uom_code`, `uom_name`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, '196', '0', 'nonactive', 1, '2019-08-19 06:15:21', 1, '2020-01-27 09:01:08', 1, '2020-02-09 21:57:37'),
(2, '196', '0', 'nonactive', 1, '2019-08-19 06:24:48', NULL, NULL, 1, '2020-01-24 15:42:03'),
(3, '123', '0', 'nonactive', 1, '2020-02-09 21:53:12', NULL, NULL, 1, '2020-02-09 21:53:17'),
(4, '134', '0', 'nonactive', 1, '2020-02-09 21:57:31', NULL, NULL, 1, '2020-02-09 22:04:44'),
(5, '213', '0', 'nonactive', 1, '2020-02-09 21:59:15', NULL, NULL, 1, '2020-02-09 21:59:19'),
(6, '147', '0', 'nonactive', 1, '2020-02-09 22:00:36', NULL, NULL, 1, '2020-02-09 22:00:40'),
(7, '434', 'PCS', 'active', 1, '2020-02-09 22:01:28', 56, '2020-02-24 11:59:12', NULL, NULL),
(8, '111', '0', 'nonactive', 1, '2020-02-09 22:04:37', NULL, NULL, 1, '2020-02-09 22:04:41'),
(9, 'q56', '0', 'nonactive', 1, '2020-02-09 22:07:39', NULL, NULL, 1, '2020-02-09 22:07:43');

-- --------------------------------------------------------

--
-- Table structure for table `e02_ts_assets`
--

CREATE TABLE `e02_ts_assets` (
  `assets_id` int(11) NOT NULL,
  `assets_date` date NOT NULL,
  `assets_code` varchar(20) NOT NULL,
  `assets_type` int(11) NOT NULL COMMENT 'combobox',
  `assets_location` int(11) NOT NULL COMMENT 'combobox',
  `assets_position` int(11) NOT NULL COMMENT 'combobox',
  `assets_responsible` varchar(10) NOT NULL,
  `assets_descripsi` text NOT NULL,
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
-- Table structure for table `e02_ts_bankbunga`
--

CREATE TABLE `e02_ts_bankbunga` (
  `id_bankbunga` int(11) NOT NULL,
  `id_bank` int(11) NOT NULL DEFAULT '0',
  `tahun` int(5) NOT NULL DEFAULT '0',
  `bulan` int(2) NOT NULL DEFAULT '0',
  `periode` date DEFAULT NULL,
  `nilaibunga` decimal(7,5) NOT NULL DEFAULT '0.00000',
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e02_ts_bankbunga`
--

INSERT INTO `e02_ts_bankbunga` (`id_bankbunga`, `id_bank`, `tahun`, `bulan`, `periode`, `nilaibunga`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 1, 2015, 12, '2015-12-01', '12.50000', 'active', 1, '2019-05-19 13:09:55', NULL, NULL, NULL, NULL),
(2, 1, 2016, 1, '2016-01-01', '12.36000', 'active', 1, '2019-05-19 13:34:34', NULL, NULL, NULL, NULL),
(3, 1, 2016, 2, '2016-02-01', '12.15000', 'active', 1, '2019-05-19 13:35:10', NULL, NULL, NULL, NULL),
(4, 1, 2016, 3, '2016-03-01', '11.87903', 'active', 1, '2019-05-19 13:35:38', 2, '2019-06-14 15:37:43', NULL, NULL),
(5, 1, 2016, 4, '2016-04-01', '11.75000', 'active', 1, '2019-05-19 13:36:13', NULL, NULL, NULL, NULL),
(6, 1, 2016, 5, '2016-05-01', '11.75000', 'active', 2, '2019-06-14 15:31:58', NULL, NULL, NULL, NULL),
(7, 1, 2016, 6, '2016-06-01', '11.62500', 'active', 2, '2019-06-14 15:32:35', NULL, NULL, NULL, NULL),
(8, 2, 2019, 6, '2019-06-01', '10.00000', 'active', 1, '2019-06-18 20:51:19', NULL, NULL, NULL, NULL),
(9, 1, 2019, 8, '2019-08-01', '12.00000', 'nonactive', 1, '2019-08-14 06:52:33', NULL, NULL, 1, '2019-08-14 06:56:11');

-- --------------------------------------------------------

--
-- Table structure for table `e02_ts_bankcabang`
--

CREATE TABLE `e02_ts_bankcabang` (
  `id_bankcabang` int(11) NOT NULL,
  `id_bank` int(11) NOT NULL DEFAULT '0',
  `no_rekening` varchar(20) NOT NULL,
  `kantor_cabank` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e02_ts_bankcabang`
--

INSERT INTO `e02_ts_bankcabang` (`id_bankcabang`, `id_bank`, `no_rekening`, `kantor_cabank`, `alamat`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 1, '', 'Lenovo', '', 'active', 1, '2019-05-18 12:06:20', 56, '2020-02-24 09:46:48', NULL, NULL),
(2, 1, '', 'HP', '', 'active', 1, '2019-05-18 12:06:31', 56, '2020-02-24 09:46:22', NULL, NULL),
(3, 1, 'core i3', 'Assus', '', 'active', 1, '2019-05-18 12:06:42', 56, '2020-02-24 13:02:15', NULL, NULL),
(4, 1, '', 'Assus', '', 'active', 1, '2019-05-18 12:06:58', 56, '2020-02-24 09:46:31', NULL, NULL),
(5, 2, '', 'KOTA B', '', 'active', 1, '2019-06-18 20:48:44', NULL, NULL, NULL, NULL),
(6, 1, '', 'test', '', 'nonactive', 1, '2019-08-14 06:40:05', NULL, NULL, 1, '2019-08-14 06:47:19');

-- --------------------------------------------------------

--
-- Table structure for table `e02_ts_bankquotatahunan`
--

CREATE TABLE `e02_ts_bankquotatahunan` (
  `id_bankquotatahunan` int(11) NOT NULL,
  `id_bank` int(11) NOT NULL,
  `tipe` int(1) DEFAULT NULL COMMENT '1=sbum,2=ssb,3=flpp',
  `tanggal_pko` date NOT NULL,
  `tahun` int(4) NOT NULL,
  `quota` int(10) NOT NULL DEFAULT '0',
  `keterangan` varchar(255) DEFAULT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e02_ts_bankquotatahunan`
--

INSERT INTO `e02_ts_bankquotatahunan` (`id_bankquotatahunan`, `id_bank`, `tipe`, `tanggal_pko`, `tahun`, `quota`, `keterangan`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 1, 1, '2019-08-15', 2019, 12, 'ytest kkj', 'active', 1, '2019-08-15 05:53:04', 1, '2019-08-15 06:03:15', 1, '2019-08-15 06:03:25'),
(2, 1, 2, '2019-08-16', 2018, 12, 'ddf', 'active', 1, '2019-08-15 06:02:59', NULL, NULL, 1, '2019-08-15 06:03:07');

-- --------------------------------------------------------

--
-- Table structure for table `e03_apps_info`
--

CREATE TABLE `e03_apps_info` (
  `id_info` int(11) NOT NULL,
  `title_info` varchar(100) NOT NULL,
  `content_info` varchar(250) NOT NULL,
  `nama_gambar` varchar(255) NOT NULL,
  `lokasi_gambar` varchar(255) NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e03_apps_info`
--

INSERT INTO `e03_apps_info` (`id_info`, `title_info`, `content_info`, `nama_gambar`, `lokasi_gambar`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(10, 'Perubahan Menu Utama', '<p>Perubahan tampilan pada menu Utama</p>', '', '', 'active', 2, '2020-02-04 15:00:10', 2, '2020-02-04 20:39:04', NULL, NULL),
(9, 'tes', '<p>tes</p>', '', '', 'nonactive', 2, '2020-02-04 09:23:10', NULL, NULL, 2, '2020-02-04 12:34:53'),
(8, 'info', '<p>info data</p>', '', '', 'nonactive', 2, '2020-02-04 09:20:03', NULL, NULL, 2, '2020-02-04 09:20:10'),
(7, 'QA', 'NGOPI dulu BOS', '', '', 'nonactive', 2, '2020-02-03 22:11:53', 2, '2020-02-04 08:35:01', 2, '2020-02-04 08:43:03');

-- --------------------------------------------------------

--
-- Table structure for table `e03_apps_progress`
--

CREATE TABLE `e03_apps_progress` (
  `id_progress` int(11) NOT NULL,
  `progress_title` varchar(100) NOT NULL,
  `progress_persen` varchar(3) NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e03_apps_progress`
--

INSERT INTO `e03_apps_progress` (`id_progress`, `progress_title`, `progress_persen`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(7, 'QA', 'Ngo', 'nonactive', 2, '2020-02-03 22:11:53', NULL, NULL, 2, '2020-02-04 00:28:38'),
(8, 'Penyimpangan', '100', 'active', 2, '2020-02-04 00:28:32', 1, '2020-06-11 09:10:52', NULL, NULL),
(9, 'Riadene', '72', 'active', 2, '2020-02-04 13:55:14', 1, '2020-06-11 09:00:53', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `e03_apps_public_bottom`
--

CREATE TABLE `e03_apps_public_bottom` (
  `id_public_bottom` int(11) NOT NULL,
  `apps_code` varchar(5) NOT NULL,
  `apps_name` varchar(150) NOT NULL,
  `url_apps` text NOT NULL,
  `icon_apps` varchar(50) NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e03_apps_public_bottom`
--

INSERT INTO `e03_apps_public_bottom` (`id_public_bottom`, `apps_code`, `apps_name`, `url_apps`, `icon_apps`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 'PP', 'HRIS', 'http://192.168.0.91/lessential/login', 'fa fa-book', 'active', NULL, NULL, 2, '2020-02-05 07:58:55', NULL, NULL),
(2, 'KTN', 'Perubahan', 'http://192.168.0.240/qa/perubahan/', 'fa fa-magic', 'active', NULL, NULL, 2, '2020-02-05 07:59:15', NULL, NULL),
(3, 'EMM', 'Pemusnahan', 'http://192.168.0.240/qa/pemusnahan_master/', 'fa fa-recycle', 'active', 1, '2020-01-30 13:37:02', 2, '2020-02-05 07:59:37', NULL, NULL),
(4, 'PMS', 'Manufacture', 'http://192.168.0.91/manufacture/login', 'fa fa-cog', 'active', 2, '2020-01-31 08:05:52', 2, '2020-02-05 08:00:02', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `e03_apps_public_up`
--

CREATE TABLE `e03_apps_public_up` (
  `id_public_up` int(11) NOT NULL,
  `apps_code` varchar(5) NOT NULL,
  `apps_name` varchar(150) NOT NULL,
  `url_apps` text NOT NULL,
  `icon_apps` varchar(50) NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e03_apps_public_up`
--

INSERT INTO `e03_apps_public_up` (`id_public_up`, `apps_code`, `apps_name`, `url_apps`, `icon_apps`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 'PP', 'Perbaikan', 'http://192.168.0.240/qa/penyimpangan/login', 'fa fa-gears', 'active', NULL, NULL, 2, '2020-02-05 07:56:38', NULL, NULL),
(2, 'KTN', 'kantin', 'https://192.168.0.240/kantin', 'fa fa-home', 'nonactive', NULL, NULL, 2, '2020-01-31 08:05:14', 2, '2020-02-03 23:25:07'),
(3, 'EMM', 'Booking Ruang Meeting', 'http://192.168.0.240/ememes/admin', 'fa fa-home', 'nonactive', 1, '2020-01-30 13:37:02', 2, '2020-01-31 08:05:08', 2, '2020-02-04 00:36:07'),
(4, 'PMS', 'MIS', 'http://192.168.0.91/sim/login', 'fa fa-suitcase', 'active', 2, '2020-01-31 08:05:52', 2, '2020-02-05 07:57:04', NULL, NULL),
(5, 'RDE', 'MIS2', 'https://192.168.0.191/sim2/login', 'fa fa-suitcase', 'active', 2, '2020-01-31 08:06:18', 2, '2020-02-05 07:57:30', NULL, NULL),
(20, 'stick', 'Sticker', 'http://192.168.0.91/sticker/login', 'fa fa-th', 'active', 2, '2020-02-04 08:42:14', 2, '2020-02-05 07:57:54', NULL, NULL),
(19, 'hris', 'Riadene', 'http://192.168.0.240/riadene/', 'fa fa-check-square-o', 'active', 2, '2020-02-04 08:41:45', 2, '2020-02-05 07:58:17', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `e03_apps_support_bottom`
--

CREATE TABLE `e03_apps_support_bottom` (
  `id_support_bottom` int(11) NOT NULL,
  `apps_code` varchar(5) NOT NULL,
  `apps_name` varchar(150) NOT NULL,
  `url_apps` text NOT NULL,
  `icon_apps` varchar(50) NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e03_apps_support_bottom`
--

INSERT INTO `e03_apps_support_bottom` (`id_support_bottom`, `apps_code`, `apps_name`, `url_apps`, `icon_apps`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 'PP', 'Pengendalian Perubahan', 'http://192.168.0.240/qa/perubahan/', 'fa fa-home', 'nonactive', NULL, NULL, 2, '2020-01-31 08:05:18', 2, '2020-02-04 06:11:44'),
(2, 'KTN', 'kantin', 'https://192.168.0.240/kantin', 'fa fa-home', 'nonactive', NULL, NULL, 2, '2020-01-31 08:05:14', 2, '2020-02-04 06:11:25'),
(3, 'EMM', 'Booking Ruang Meeting', 'http://192.168.0.240/ememes/admin', 'fa fa-home', 'nonactive', 1, '2020-01-30 13:37:02', 2, '2020-01-31 08:05:08', 2, '2020-02-04 06:11:18'),
(4, 'PMS', 'Pemusnahan', 'http://192.168.0.240/qa/pemusnahan_master/', 'fa fa-home', 'nonactive', 2, '2020-01-31 08:05:52', NULL, NULL, 2, '2020-02-04 06:11:41'),
(5, 'R&M', 'R & M', 'http://192.168.0.91/registrasi/login', 'fa fa-file-o', 'active', 2, '2020-01-31 08:06:18', 2, '2020-02-05 08:04:09', NULL, NULL),
(6, 'SPL', 'Sample', 'http://192.168.0.91/app_sample/login', 'fa fa-check-square-o', 'active', 2, '2020-01-31 08:06:51', 2, '2020-02-05 08:04:43', NULL, NULL),
(7, 'HRIS', 'HRIS', 'http://192.168.0.91/lessential/login', 'fa fa-home', 'nonactive', 2, '2020-01-31 08:07:24', NULL, NULL, 2, '2020-02-04 06:11:22'),
(8, 'PCR', 'Princing', 'http://192.168.0.91/pricing/login', 'fa fa-home', 'nonactive', 2, '2020-01-31 08:07:52', NULL, NULL, 2, '2020-02-04 06:11:38'),
(9, 'KTN', 'Kantin', 'https://192.168.0.240/kantin', 'fa fa-cutlery', 'active', 2, '2020-01-31 08:08:18', 2, '2020-02-05 08:05:10', NULL, NULL),
(10, 'DMS', 'DMS', 'http://192.168.0.91/dokumen/login', 'fa fa-home', 'nonactive', 2, '2020-01-31 08:08:40', NULL, NULL, 2, '2020-02-04 06:11:16'),
(11, 'MIS', 'MIS', 'http://192.168.0.91/sim/login', 'fa fa-home', 'nonactive', 2, '2020-01-31 08:09:08', NULL, NULL, 2, '2020-02-04 06:11:32'),
(12, 'MIS2', 'MIS2', 'https://192.168.0.191/sim2/login', 'fa fa-home', 'nonactive', 2, '2020-01-31 08:09:34', NULL, NULL, 2, '2020-02-04 06:11:34'),
(13, 'KUY', 'KUY', 'http://192.168.0.91/expedisi/login', 'fa fa-home', 'nonactive', 2, '2020-01-31 08:09:53', NULL, NULL, 2, '2020-02-04 06:11:28'),
(14, 'SIM', 'Assets', 'http://192.168.0.252/sim/', 'fa fa-briefcase', 'active', 2, '2020-01-31 08:10:18', 1, '2020-03-03 08:17:40', NULL, NULL),
(15, 'MFT', 'Manufacture', 'http://192.168.0.91/manufacture/login', 'fa fa-home', 'nonactive', 2, '2020-01-31 08:10:54', NULL, NULL, 2, '2020-02-04 06:11:30'),
(16, 'FPP', 'FPP', 'http://192.168.0.91/fpp/login', 'fa fa-home', 'nonactive', 2, '2020-01-31 08:11:15', NULL, NULL, 2, '2020-02-04 06:11:20'),
(17, 'EMS', 'Ememes', 'http://192.168.0.240/ememes/admin', 'fa fa-building-o', 'active', 2, '2020-01-31 08:11:49', 2, '2020-02-05 08:06:26', NULL, NULL),
(18, 'AMS', 'Aset Management System', 'http://192.168.0.252/sim/', 'fa fa-home', 'nonactive', 2, '2020-01-31 08:12:56', NULL, NULL, 2, '2020-02-04 06:11:11');

-- --------------------------------------------------------

--
-- Table structure for table `e03_apps_support_up`
--

CREATE TABLE `e03_apps_support_up` (
  `id_support_up` int(11) NOT NULL,
  `apps_code` varchar(5) NOT NULL,
  `apps_name` varchar(150) NOT NULL,
  `url_apps` text NOT NULL,
  `icon_apps` varchar(50) NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e03_apps_support_up`
--

INSERT INTO `e03_apps_support_up` (`id_support_up`, `apps_code`, `apps_name`, `url_apps`, `icon_apps`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 'PP', 'Pengendalian Perubahan', 'http://192.168.0.240/qa/perubahan/', 'fa fa-home', 'nonactive', NULL, NULL, 2, '2020-01-31 08:05:18', 2, '2020-02-04 06:10:36'),
(2, 'KTN', 'kantin', 'https://192.168.0.240/kantin', 'fa fa-home', 'nonactive', NULL, NULL, 2, '2020-01-31 08:05:14', 2, '2020-02-04 06:10:18'),
(3, 'PRC', 'Princing', 'http://192.168.0.91/pricing/login', 'fa fa-money', 'active', 1, '2020-01-30 13:37:02', 2, '2020-02-05 08:01:55', NULL, NULL),
(4, 'PMS', 'Pemusnahan', 'http://192.168.0.240/qa/pemusnahan_master/', 'fa fa-home', 'nonactive', 2, '2020-01-31 08:05:52', NULL, NULL, 2, '2020-02-04 06:10:34'),
(5, 'RDE', 'Riadene', 'http://192.168.0.240/riadene/', 'fa fa-home', 'nonactive', 2, '2020-01-31 08:06:18', NULL, NULL, 2, '2020-02-04 06:10:44'),
(6, 'PYN', 'Penyimpangan', 'http://192.168.0.240/qa/penyimpangan/login', 'fa fa-home', 'nonactive', 2, '2020-01-31 08:06:51', NULL, NULL, 2, '2020-02-04 06:10:39'),
(7, 'HRIS', 'HRIS', 'http://192.168.0.91/lessential/login', 'fa fa-home', 'nonactive', 2, '2020-01-31 08:07:24', NULL, NULL, 2, '2020-02-04 06:10:15'),
(8, 'PCR', 'Princing', 'http://192.168.0.91/pricing/login', 'fa fa-home', 'nonactive', 2, '2020-01-31 08:07:52', NULL, NULL, 2, '2020-02-04 06:10:31'),
(9, 'STK', 'Sticker', 'http://192.168.0.91/sticker/login', 'fa fa-home', 'nonactive', 2, '2020-01-31 08:08:18', NULL, NULL, 2, '2020-02-04 06:10:53'),
(10, 'DMS', 'DMS', 'http://192.168.0.91/dokumen/login', 'fa fa-file-pdf-o', 'active', 2, '2020-01-31 08:08:40', 2, '2020-02-05 08:02:27', NULL, NULL),
(11, 'MIS', 'MIS', 'http://192.168.0.91/sim/login', 'fa fa-home', 'nonactive', 2, '2020-01-31 08:09:08', NULL, NULL, 2, '2020-02-04 06:10:26'),
(12, 'MIS2', 'MIS2', 'https://192.168.0.191/sim2/login', 'fa fa-home', 'nonactive', 2, '2020-01-31 08:09:34', NULL, NULL, 2, '2020-02-04 06:10:28'),
(13, 'KUY', 'KUY', 'http://192.168.0.91/expedisi/login', 'fa fa-home', 'nonactive', 2, '2020-01-31 08:09:53', NULL, NULL, 2, '2020-02-04 06:10:21'),
(14, 'R&M', 'R&M', 'http://192.168.0.91/registrasi/login', 'fa fa-home', 'nonactive', 2, '2020-01-31 08:10:18', NULL, NULL, 2, '2020-02-04 06:10:41'),
(15, 'MFT', 'Manufacture', 'http://192.168.0.91/manufacture/login', 'fa fa-home', 'nonactive', 2, '2020-01-31 08:10:54', NULL, NULL, 2, '2020-02-04 06:10:23'),
(16, 'EPS', 'Expedisi', 'http://192.168.0.91/expedisi/login', 'fa fa-car', 'active', 2, '2020-01-31 08:11:15', 2, '2020-02-05 08:03:02', NULL, NULL),
(17, 'SAPP', 'Sample App', 'http://192.168.0.91/app_sample/login', 'fa fa-home', 'nonactive', 2, '2020-01-31 08:11:49', NULL, NULL, 2, '2020-02-04 06:10:47'),
(18, 'FPP', 'FPP', 'http://192.168.0.91/fpp/login', 'fa fa-ticket', 'active', 2, '2020-01-31 08:12:56', 2, '2020-02-05 08:03:34', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `e04_ms_component`
--

CREATE TABLE `e04_ms_component` (
  `id_component` int(2) NOT NULL,
  `code_component` varchar(5) NOT NULL,
  `nama_component` varchar(25) NOT NULL,
  `statusdata` varchar(11) NOT NULL,
  `createby` text NOT NULL,
  `createtime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e04_ms_component`
--

INSERT INTO `e04_ms_component` (`id_component`, `code_component`, `nama_component`, `statusdata`, `createby`, `createtime`) VALUES
(1, 'tmp', 'Temperatur', 'active', '', '0000-00-00 00:00:00'),
(2, 'psg', 'Pressure Gauge', 'active', '', '0000-00-00 00:00:00'),
(3, 'vos', 'Viskositas', 'active', '', '0000-00-00 00:00:00'),
(4, 'phh', 'pH', 'active', '', '0000-00-00 00:00:00'),
(5, 'mas', 'Massa', 'active', '', '0000-00-00 00:00:00'),
(6, 'klm', 'Kelembaban', 'active', '', '0000-00-00 00:00:00'),
(7, 'tmr', 'Timer', 'active', '', '0000-00-00 00:00:00'),
(8, 'con', 'Conduktivitas', 'active', '', '0000-00-00 00:00:00'),
(9, 'spc', 'Kecepatan', 'active', '', '0000-00-00 00:00:00'),
(10, 'vcg', 'Vacuum Gauge', 'active', '', '0000-00-00 00:00:00'),
(11, 'spce', 'Kecepatan Emulsi', 'active', '', '0000-00-00 00:00:00'),
(12, 'spca', 'Kecepatan Agitator', 'active', '', '0000-00-00 00:00:00'),
(13, 'tmph', 'Heating Temp', 'active', '', '0000-00-00 00:00:00'),
(14, 'kfi', 'Ketepatan Fotometri', 'active', '', '0000-00-00 00:00:00'),
(15, 'sre', 'SRE (Stray Radient Energy', 'active', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `e04_ms_tools`
--

CREATE TABLE `e04_ms_tools` (
  `tools_id` int(11) NOT NULL,
  `tools_code` varchar(15) NOT NULL,
  `tools_name` varchar(150) NOT NULL,
  `tools_merk` varchar(100) NOT NULL,
  `tools_noseri_model` varchar(100) NOT NULL,
  `tools_information` longtext NOT NULL,
  `tools_no_sertifikat` varchar(15) NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e04_ms_tools`
--

INSERT INTO `e04_ms_tools` (`tools_id`, `tools_code`, `tools_name`, `tools_merk`, `tools_noseri_model`, `tools_information`, `tools_no_sertifikat`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 'SPT', 'Spectroquant NOVA 60', 'Merck', '08450475', 'suhu standar 25 C', '', 'active', NULL, NULL, 135, '2020-09-26 10:01:59', NULL, NULL),
(2, 'SPT', 'Spectroquant TR 320', 'Merck ', '08480470', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'TTR', 'Thickness Tester ', 'NA', '0472530', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'DCR', 'Digital Capiler 12 inchi ', 'Krisbow ', 'KW06 -  423', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'VIS', 'Viscometer  ', 'Brookfield ', '8552211 / D220', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'PHM', 'pH meter Seven Exellence', 'Mettler Toledo', 'B243460759', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'PHM', 'pH Meter Seven Compact', 'Mettler Toledo', 'B309083619', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'MAR', 'Moisture Analyzer', 'Mettler Toledo', 'HB43-S', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'MPT', 'Melting Point MP-50', ' Mettler Toledo', 'B310112446', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'ASR', 'Air Sampler Met One', 'Merck ', 'MAS-100NT', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'KFR', 'Karl Fischer V20', 'Mettler Toledo', 'V20', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'VIS', 'Viscometer', 'Brookfield ', '8699933 / 0220 ', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'MIP', 'Micropipet 1 ml ', 'Eppendorf', 'K38426D', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'MIP', 'Micropipet 1 ml ', 'Eppendorf', '022846D', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'MIP', 'Micropipet 10 ml ', 'Eppendorf', '019358D', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'PHM', 'pH meter', 'OHAUS', 'Starter 3100', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'MIP', 'Micropipet 1 ml', 'Eppendorf', 'L22603 E', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'MIP', 'Micropipet 10 ml', 'Eppendorf', 'L40216E', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'PHM', 'pH meter seven compact ', 'Mettler Toledo', 'B535352577', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'BTN', 'Batu Timbang 500 g', 'Mettler Toledo', 'B611214739', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'BTN', 'Batu Timbang 500 mg', 'Mettler Toledo', 'B611214740', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'MIP', 'Micropipette', 'N/A', 'K44228F', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'MIP', 'Micropipet Eppendorf', 'N/A', 'R39206F', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'MIP', 'Micropipette', 'N/A', 'L22603E', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'ANE', 'Anemometer', 'Peak Meter', 'PM6252A', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'VIS', 'Viskometer', 'N/A', 'LVT / 8704750', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'PHM', 'pH Meter', 'N/A', 'B616356095', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'PHC', 'Multi Parameter', 'N/A', 'ST 3100 M / B 748062021', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(29, 'MIP', 'Micropipette 1-10 µL', 'Eppendorf', 'G28621I', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(30, 'VIS', 'Viscometer  ', 'Brookfield', '6529106LVT', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'PHM', 'pHmeter ', 'Neomet, ISTEK', '200L-08084 PH-200L', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(32, 'DCR', 'Digital Caliper', 'N/A', 'KW06-423', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(33, 'TTR', 'Thickness Gauge', 'N/A', 'A850806', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(34, 'CMR', 'Colorimeter', 'D02000.04-420', 'Cortex Technology', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(35, 'TMB', 'Timbangan Gewin', 'Gewinn', 'K3190-C602', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(36, 'TMB', 'Timbangan 500 Kg', 'Yamata', 'YDI-500 / 16050259', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(37, 'CEN', 'Centrifuge ', 'N/A', '0085800', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(38, 'HPL', 'HPLC ', 'N/A', 'C21254808717 LP', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(39, 'KFR', 'Karl Fischer ', 'N/A', 'B312153598', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(40, 'PHC', 'pH Conductivity', 'Mettler Toledo Seven Multi', 'B142352056', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(41, 'PHM', 'pH Meter ', 'Mettler Toledo Seven Easy S20', '1232115356', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(42, 'VIS', 'Viscometer ', 'Brookfield LVT', '8558382', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(43, 'DCR', 'Digital Caliper 12 inc ', 'N/A', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(44, 'ASR', 'Air Sampler', 'N/A', '104645', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(45, 'MAP', 'Macropipet', 'N/A', '21081054', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(46, 'SFM', 'Spectrofotometer', 'Thermo Sciencetific', '2M1L331001', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(47, 'VIS', 'Viscometer ', 'Brookfield DV2TRV', '8572785', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(48, 'PCR', 'Partikel Counter', 'N/A', '1302992967', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(49, 'MIP', 'Micropipette', 'N/A', 'N267890', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(50, 'BTN', 'Batu Timbang 500 mg', 'Mettler Toledo', 'F1 B509656191', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(51, 'BTN', 'Batu Timbang 500 g', 'Batu Timbang 500 g', 'F1 B509656189', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(52, 'TOC', 'Total Organic Carbon Analyzer', 'N/A', '816120179', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(53, 'EMS', 'Elmasonic', 'N/A', '100361106', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(54, 'MIP', 'Micropipette', 'N/A', 'Q32346F / -', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(55, 'HPL', 'HPLC ', 'N/A', 'L20104715336\r\nProminance / LC-20AD', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(56, 'HPL', 'HPLC', 'N/A', 'L20554800564\r\nProminance / LC-30AD', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(57, 'HPL', 'HPLC ', 'N/A', 'C21255010355\r\nLC 2010 CHT', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(58, 'VIS', 'Viscometer ', 'N/A', '8572785 DV2T RVTJ 0', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(59, 'MIP', 'Micropippete 100 - 1000 µL', 'N/A', 'G12705D\r\nResearch Plus B', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(60, 'MIP', 'Micropippete 100 - 1000 µL', 'N/A', '08J34516\r\nTransferpette Var', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(61, 'MIP', 'Micropippete 100 - 1000 µL', 'N/A', 'N16127C\r\nResearch Plus B', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(62, 'MIP', 'Micropippete 100 - 1000 µL', 'N/A', 'G12714D\r\nResearch Plus B', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(63, 'MIP', 'Micropippete 10 - 100 µL', 'N/A', 'I13168C\r\nResearch Plus B', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(64, 'MIP', 'Micropippete 10 - 100 µL', 'N/A', '3897129\r\nResearch 3110', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(65, 'MIP', 'Micropippete 10 - 100 µL', 'N/A', 'G11321D\r\nResearch Plus B', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(66, 'MIP', 'Micropippete 10 - 100 µL', 'N/A', 'G11206D\r\nResearch Plus B', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(67, 'MAP', 'Macropippete 1 - 10 mL', 'N/A', 'N17031C\r\nResearch Plus B', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(68, 'MAP', 'Macropippete 1 - 10 mL', 'N/A', 'N17038C\r\nResearch Plus B', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(69, 'PWR', 'Purified Water ', 'N/A', 'FLB00004504\r\nFlex-2/PF2XXXXM1', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(70, 'BTN', 'Batu Timbang 500 g ', 'N/A', 'OIML R111 F1 B526096227', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(71, 'BTN', 'Batu Timbang 500 mg', 'N/A', 'OIML F1 B526096228', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(72, 'DCR', 'Digital Caliper', 'N/A', '0002089 IP67 Special ABS', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(73, 'BTN', 'Batu Timbang 10 g', 'N/A', 'F1 / 10100019', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(74, 'BTN', 'Batu Timbang 200 g', 'Mettler Toledo', 'F2 / 22010019', '', '', 'active', NULL, NULL, 1, '2020-06-03 14:34:52', NULL, NULL),
(75, 'PHC', 'pH Conductivity Meter', 'N/A', 'B923745801\r\nSeven Compact Duo', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(76, 'OVN', 'Oven', 'Memmert ', 'UNB 400', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(77, 'OVN', 'Oven ED 115', 'BINDER ', '12-05122', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(78, 'ACL', 'Autoclave HVE-50 (Sterilisasi)', 'Hirayama', '30611114793', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(79, 'ACL', 'Autoclave HVE-50 (Destruksi)', 'Hirayama', '30611124804', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(80, 'INC', 'Incubator', 'BINDER ', 'BB720', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(81, 'THG', 'Thermohygrometer', 'TFA ', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(82, 'THG', 'Thermohygrometer', 'TFA ', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(83, 'THG', 'Thermohygrometer', 'TFA ', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(84, 'THG', 'Thermohygrometer', 'Corona', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(85, 'THM', 'Thermometer Gelas 3', 'Alla France', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(86, 'THM', 'Thermometer Gelas 4 ', 'Alla France', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(87, 'THM', 'Thermometer Gelas 1', 'Alla France', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(88, 'VCR', 'Vacuum Chamber', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(89, 'VCR', 'Vacuum Chamber', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(90, 'MAG', 'Magnehelic ', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(91, 'MAG', 'Magnehelic ', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(92, 'THG', 'Thermohygrometer', 'TFA ', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(93, 'THM', 'Thermometer Gelas 2', 'Alla France', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(94, 'THM', 'Thermometer Gelas 5', 'Alla France', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(95, 'STW', 'Stopwatch', 'NA', 'CT-20', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(96, 'STW', 'Stopwatch', 'NA', 'CT-20 / C04Q25', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(97, 'STW', 'Stopwatch', 'NA', 'TMR-100', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(98, 'STW', 'Stopwatch', 'NA', 'HS-3 / 107Q09R', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(99, 'STW', 'Stopwatch', 'NA', '120 Q 03P', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(100, 'STW', 'Stopwatch', 'NA', '210Q03R', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(101, 'STW', 'Stopwatch', 'NA', 'TMR-72 / -', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(102, 'THG', 'Thermohygrometer', 'TFA ', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(103, 'THG', 'Thermohygrometer', 'Corona', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(104, '', 'Vacuum Chamber', 'Yamamoto Keiki ', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(105, 'THG', 'Thermohygrometer', 'TFA ', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(106, 'THG', 'Thermohygrometer', 'TFA ', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(107, 'THG', 'Thermohygrometer', 'TFA ', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(108, 'THG', 'Thermohygrometer', 'TFA ', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(109, 'THM', 'Thermometer digital', 'Blue Gizmo', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(110, 'THM', 'Thermometer digital', 'Blue Gizmo', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(111, 'MAG', 'Magnehelic', '-', 'W21ACJH', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(112, 'MAG', 'Magnehelic', '-', 'W21ACKM', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(113, 'VGE', 'Vacuum Gauge', '-', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(114, 'VGE', 'Vacuum Gauge', '-', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(115, 'THG', 'Thermohygrometer', 'TFA ', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(116, 'THG', 'Thermohygrometer', 'TFA ', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(117, 'AAS', 'AAS', 'SPECTRUM INSTRUMENTS', 'SP-AA 3000', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(118, 'STW', 'Stopwatch', 'Canon', 'CT-20 / SN C 111 Q02', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(119, 'STW', 'Stopwatch', 'Canon', 'CT-20', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(120, 'VCR', 'Vacuum Chamber', 'ARMATHERM', 'EN837-1', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(121, 'VGE', 'Vacuum Gauge', 'ARMATHERM', 'EN837-1', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(122, 'MAG', 'Magnehelic', 'NA', 'Dwyer', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(123, 'THG', 'Thermohygrometer', 'NA', 'TFS / 0114', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(124, 'THG', 'Thermohygrometer', 'TFA ', 'AZ-HT-02', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(125, 'THG', 'Thermohygrometer', 'TFA ', 'AZ-HT-02', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(126, 'MAG', 'Magnehelic', 'NA', 'NA / Dwyer', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(127, 'MAG', 'Magnehelic', 'NA', 'NA / Dwyer', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(128, 'THM', 'Thermometer Digital', 'TFA ', 'AZ-HT-02', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(129, 'STW', 'Stopwatch', 'Canon', 'CT-20', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(130, 'MAG', 'Magnehelic', 'Dwyer', 'W06AE MB', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(131, 'MMR', 'Multimix Mixer', '-', 'Multi-mix 2003 SV', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(132, 'MMX', 'Medium Mixer 1', 'LS Industrial System', '\"08062320134\r\nSV008iCS-1\"', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(133, 'MMX', 'Medium Mixer 2', '-', '\"RZR 2041\r\n(111207311)\"', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(134, 'MMX', 'Medium Mixer 3', '-', '\"RZR 2041\r\n(101006283)\"', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(135, 'MMX', 'Medium Mixer 4', 'Heidolph', '\"RZR 2041\r\n(111207271)\"', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(136, 'MMX', 'Medium Mixer 5', 'Heidolph', '\"RGL 2\r\n(050401479)\"', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(137, 'THG', 'Thermohygrometer', 'NA', '\"GL-89\r\nAZ-HT-02\"', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(138, 'MPT', 'Melting Point ', 'Kruss', 'M 5000', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(139, 'MAR', 'Moisturizer Analysis', 'Mettler Toledo', 'HB43S-Halogen', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(140, 'OVN', 'Oven', 'Memmert', 'UNB 400', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(141, 'OVN', 'Oven', 'Memmert', 'UN55', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(142, 'VCR', 'Vacuum Leak Test', 'Mascotte', 'VLT 400 With Oil Less Vacuum Pump', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(143, 'CST', 'Mesin Cetak Sabun transparant', 'OMRON', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(144, 'SMK', 'Mesin mixer bedak kompak besar / super mixer kompak', 'Huang Chuan Machinery', 'HMQ / HMJ-7 1/2', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(145, 'PSK', 'Mesin Kemwall', 'WIKA', 'Type 2 / 5430924519', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(146, 'PTK', 'Mesin Preheating Portable', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(147, 'THG', 'Thermohygrometer', 'TFA', 'AZ-HT-02', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(148, 'THG', 'Thermohygrometer', 'TFA', 'AZ-HT-02', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(149, 'THG', 'Thermohygrometer', 'TFA', 'AZ-HT-02', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(150, 'CST', 'Mesin Cetak Sabun transparant', 'OMRON', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(151, 'THG', 'Thermohygrometer', 'TFA', '1010', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(152, 'THG', 'Thermohygrometer', 'TFA', '0814', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(153, 'CTE', 'Mesin Cooling Table', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(154, 'SAB', 'Mesin Suck & Blow', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(155, 'THM', 'Thermometer', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(156, 'THG', 'Thermohygrometer', 'TFA', 'AZ-HT-02', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(157, 'THG', 'Thermohygrometer', 'TFA', 'AZ-HT-02', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(158, 'THG', 'Thermohygrometer', 'TFA', 'AZ-HT-02', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(159, 'THG', 'Thermohygrometer', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(160, 'THG', 'Thermohygrometer', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(161, 'THG', 'Thermohygrometer', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(162, 'THG', 'Thermohygrometer', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(163, 'THG', 'Thermohygrometer', 'TFA', 'AZ-HT-02                     0616', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(164, 'THG', 'Thermohygrometer', 'TFA', 'AZ-HT-02', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(165, 'THG', 'Thermohygrometer', 'TFA', 'AZ-HT-02', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(166, 'THG', 'Thermohygrometer', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(167, 'SHR', 'Mesin Shrinkage', 'Shrink Tunel', 'CN-4520A(S)  EX10505072', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(168, 'SHR', 'Mesin Shrinkage', 'Shrink Tunel', 'CN-4520A(R)  EX1030709', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(169, 'SHR', 'Mesin Shrinkage', 'Shrink Tunel', '\"CN-4520A®\r\nEX1030401\"', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(170, 'SHR', 'Mesin Shrinkage', 'Shrink Tunel', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(171, 'THG', 'Thermohygrometer', 'TFA', 'AZ-HT-02', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(172, 'SHR', 'Mesin Shrinkage', 'Shrink Tunel', 'CN-4520A(R)  EX107010113', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(173, 'MMX', 'Mesin Medium Mixer', 'Dua Putra', 'NA (Merk LS Industrial Systems)', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(174, 'MMX', 'Mesin Medium Mixer', 'Dua Putra', 'NA (Merk LS Industrial Systems)', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(175, 'MMX', 'Mesin Medium Mixer', 'Dua Putra', 'NA (Merk LS Industrial Systems)', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(176, 'MMX', 'Mesin Medium Mixer', 'Dua Putra', 'MINI-L-2S0015M16 (Merk Easy Drive)', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(177, 'MMX', 'Mesin Medium Mixer', 'Dua Putra', 'MINI-L-2S0015M16 (Merk Easy Drive)', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(178, 'MMX', 'Mesin Medium Mixer', 'Dua Putra', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(179, 'VMX', 'Mesin Vertikal Mixer', 'Dua Putra', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(180, 'VMX', 'Mesin Vertikal Mixer', 'Dua Putra', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(181, 'VEM', 'Mesin VEM 150', 'Shang Yuh', 'SY 150', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(182, 'THG', 'Thermohygrometer', 'Sun Care', '\"302\r\n15006648\"', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(183, 'THG', 'Thermohygrometer', 'Sun Care', '\"302\r\n15006689\"', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(184, 'STW', 'Stopwatch', 'Casio', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(185, 'PTK', 'Mesin Preheating Tank', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(186, 'VMX', 'Mesin Vertikal Mixer', 'Dua Putra', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(187, 'THG', 'Thermohygrometer', 'TFA', 'AZ-HT-02', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(188, 'THG', 'Thermohygrometer', 'TFA', 'AZ-HT-02', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(189, 'THG', 'Thermohygrometer', 'TFA', 'AZ-HT-02', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(190, 'SWT', 'Stopwatch', 'Canon', 'CT-20', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(191, 'SWT', 'Stopwatch', 'Canon', 'CT-20', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(192, 'SWT', 'Stopwatch', 'Canon', 'CT-20', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(193, 'SWT', 'Stopwatch', 'Canon', 'CT-20', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(194, 'SWT', 'Stopwatch', 'Canon', 'CT-20', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(195, 'SWT', 'Stopwatch', 'Canon', 'CT-20', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(196, 'SWT', 'Stopwatch', 'Canon', 'CT-20', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(197, 'SWT', 'Stopwatch', 'Canon', 'CT-20', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(198, 'SWT', 'Stopwatch', 'Canon', 'CT-20', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(199, 'SWT', 'Stopwatch', 'Canon', 'CT-20', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(200, 'SWT', 'Stopwatch', 'Canon', 'CT-20', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(201, 'SWT', 'Stopwatch', 'Canon', 'CT-20', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(202, 'SWT', 'Stopwatch', 'Canon', 'CT-20', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(203, 'SWT', 'Stopwatch', 'Canon', 'CT-20', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(204, 'THM', 'Thermometer', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(205, 'THM', 'Thermometer', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(206, 'THM', 'Thermometer', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(207, 'THM', 'Thermometer', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(208, 'THM', 'Thermometer', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(209, 'THM', 'Thermometer Glass', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(210, 'THM', 'Thermometer Glass', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(211, 'THM', 'Thermometer Glass', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(212, 'THG', 'Thermohygrometer', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(213, 'SWT', 'Stopwatch', 'NA', 'Canon / CT-20', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(214, 'THG', 'Thermohygrometer', 'TFA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(215, 'THG', 'Thermohygrometer', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(216, 'SHR', 'Mesin Shrinkage', 'Shrink Tunel', 'CN-4520(R)  EX1010502', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(217, 'SHR', 'Mesin Shrinkage', 'Shrink Tunel', 'CN-4520(R)  EX1040502', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(218, 'SHR', 'Mesin Shrinkage', 'Shrink Tunel', 'CN-4520(R)  NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(219, 'SHR', 'Mesin Shrinkage', 'Shrink Tunel', 'CN-4520(R)  EX1020310', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(220, 'SHR', 'Mesin Shrinkage', 'Shrink Tunel', 'CN-4520(R)  EX1030401', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(221, 'THG', 'Thermohygrometer', 'TFA', 'AZ-HT-02', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(222, 'THG', 'Thermohygrometer', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(223, 'THC', 'Digital Thermocouple Indicator + Sensor', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(224, 'THG', 'Thermohygrometer', 'TFA', '\"AZ-HT-02\r\n0814\"', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(225, 'THG', 'Thermohygrometer', 'TFA', '\"AZ-HT-02\r\n0910\"', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(226, 'THG', 'Thermohygrometer', 'Suncare', '\"15009108\r\n303C\"', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(227, 'THG', 'Thermohygrometer', 'Suncare', '\"15006647\r\n302\"', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(228, 'THG', 'Thermohygrometer', 'TFA', '\"AZ-HT-02\r\n0814\"', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(229, 'THG', 'Thermohygrometer', 'TFA', '\"AZ-HT-02\r\n0814\"', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(230, 'THG', 'Thermohygrometer', 'NA', '\"AZ-HT-02\r\n0413\"', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(231, 'THG', 'Thermohygrometer', 'TFA', '\"AZ-HT-02\r\n1010\"', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(232, 'THG', 'Thermohygrometer', 'TFA', '\"AZ-HT-02\r\n0814\"', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(233, 'THG', 'Thermohygrometer', 'TFA', 'AZ-HT-02', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(234, 'VEM', 'Mesin VEM 150', 'NA', '\"FRN2,2E1S-4J\r\n11D434A0019H\"', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(235, 'VEM', 'Mesin VEM 150', 'NA', '\"FRN0-75E1S-4J\r\n25A877A0007H\"', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(236, 'VEM', 'Mesin VEM 265', 'Shang Yuh', 'EN 837-1 / 1105083551', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(237, 'VMX', 'Mesin Vertical Mixer', 'Dua Putera', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(238, 'VMX', 'Mesin Vertical Mixer', 'Dua Putera', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(239, 'VMX', 'Mesin Vertical Mixer', 'Dua Putera', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(240, 'VMX', 'Mesin Vertical Mixer', 'Dua Putera', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(241, 'MMX', 'Mesin Medium Mixer', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(242, 'PTK', 'Mesin Preheating Tank', '-', 'CP050 / 0401', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(243, 'PTK', 'Mesin Preheating Tank 80 Kg', '-', 'TC-R PT 100 / 092602', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(244, 'PTK', 'Mesin Preheating Tank 150 Kg', 'NA', 'TC-R PT 100 / 110202', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(245, 'SWT', 'Stopwatch', 'Canon', '\"CT-20\r\nC04Q30\"', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(246, 'SWT', 'Stopwatch', 'Canon', '\"CT-30\r\nC10Q01\"', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(247, 'SWT', 'Stopwatch', 'Canon', '\"CT-20\r\nC04Q25\"', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(248, 'SWT', 'Stopwatch', 'Canon', '\"CT-30\r\nC10Q01\"', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(249, 'SWT', 'Stopwatch', 'Canon', '\"CT-20\r\nC04Q27\"', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(250, 'SWT', 'Stopwatch', 'Canon', '\"CT-30\r\nC10Q07\"', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(251, 'SWT', 'Stopwatch', 'Canon', '\"CT-20\r\nC04Q25\"', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(252, 'MMX', 'Mesin Medium Mixer', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(253, 'MMX', 'Mesin Medium Mixer', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(254, 'THG', 'Thermohygrometer', 'TFA', '\"AZ-HT-02\r\n0814\"', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(255, 'THG', 'Thermohygrometer', 'NA', 'AZ-HT-02', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(256, 'THM', 'Thermometer Glass', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(257, 'THM', 'Thermometer Glass', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(258, 'MMX', 'Mesin Medium Mixer', 'Dua Putra', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(259, 'MMX', 'Mesin Medium Mixer', 'Dua Putra', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(260, 'MMX', 'Mesin Medium Mixer', 'Dua Putra', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(261, 'MMX', 'Mesin Medium Mixer', 'Dua Putra', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(262, 'MMX', 'Mesin Vertikal Mixer', 'Dua Putra', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(263, 'THG', 'Thermohygrometer', 'TFA', 'AZ-HT-02', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(264, 'THG', 'Thermohygrometer', 'TFA', 'AZ-HT-03', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(265, 'THG', 'Thermohygrometer', 'TFA', 'AZ-HT-04', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(266, 'THG', 'Thermohygrometer', 'TFA', 'AZ-HT-05', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(267, 'THM', 'Thermometer Glass', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(268, 'THM', 'Thermometer Glass', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(269, 'THG', 'Thermohygrometer', 'NA', '\"AZ-HT-02\r\n1017\"', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(270, 'THM', 'Thermometer Glass', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(271, 'THG', 'Thermohygrometer', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(272, 'THG', 'Thermohygrometer', 'TFA', 'AZ-HT-02', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(273, 'THG', 'Thermohygrometer', 'TFA', 'AZ-HT-02', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(274, 'THG', 'Thermohygrometer', 'TFA', 'AZ-HT-02', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(275, 'SHR', 'Mesin Shrinkage', 'Shrink Tunel', 'CN-4520A(R) EX106121111', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(276, 'SHR', 'Mesin Shrinkage', 'Shrink Tunel', 'CN-4520A(R) EX106121112', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(277, 'SHR', 'Mesin Shrinkage', 'Shrink Tunel', 'CN-4520A(R) EX107010112', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(278, 'SHR', 'Mesin Shrinkage', 'Shrink Tunel', 'CN-4520A(R) EX107010111', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(279, 'THG', 'Thermohygrometer', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(280, 'LPN', 'Lemari Pendingin', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(281, 'LPN', 'Lemari Pendingin', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(282, 'LPN', 'Lemari Pendingin', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(283, 'THG', 'Thermohygrometer', 'NA', '\"AZ-HT-02\r\n1010\"', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(284, 'THG', 'Thermohygrometer', 'NA', 'AZ-HT-02', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(285, 'THG', 'Thermohygrometer', 'NA', 'AZ-HT-02', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(286, 'LPN', 'Lemari Pendingin', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(287, 'THG', 'Thermohygrometer', 'TFA', 'AZ-HT-02', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(288, 'LPN', 'Lemari Pendingin', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(289, 'LPN', 'Lemari Pendingin', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(290, 'LPN', 'Lemari Pendingin', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(291, 'THG', 'Thermohygrometer', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(292, 'THG', 'Thermohygrometer', 'NA', 'AZ-HT-02', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(293, 'THG', 'Thermohygrometer', 'NA', 'AZ-HT-02', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(294, 'THG', 'Thermohygrometer', 'NA', 'AZ-HT-02', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(295, 'THG', 'Thermohygrometer', 'NA', 'AZ-HT-02', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(296, 'THG', 'Thermohygrometer', 'NA', 'AZ-HT-02', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(297, 'THG', 'Thermohygrometer', 'NA', 'AZ-HT-02', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(298, 'THG', 'Thermohygrometer', 'NA', 'AZ-HT-02', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(299, 'THG', 'Thermohygrometer', 'NA', 'AZ-HT-02', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(300, 'THG', 'Thermohygrometer', 'NA', 'AZ-HT-02', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(301, 'MAG', 'Magnehelic', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(302, 'MAG', 'Magnehelic', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(303, 'MAG', 'Magnehelic', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(304, 'THM', 'Thermometer Glass', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(305, 'THG', 'Thermohygrometer', 'NA', 'AZ-HT-02', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(306, 'THG', 'Thermohygrometer', 'NA', 'AZ-HT-02', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(307, 'THG', 'Thermohygrometer', 'NA', 'AZ-HT-02', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(308, 'THG', 'Thermohygrometer', 'NA', 'AZ-HT-02', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(309, 'THG', 'Thermohygrometer', 'NA', 'AZ-HT-02', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(310, 'THG', 'Thermohygrometer', 'TFA', 'AZ-HT-02', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(311, 'THM', 'Termometer Digital', 'ELITECH', 'ETC-100+', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(312, 'THM', 'Termometer Digital', 'ELITECH', 'ETC-100+', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(313, 'THM', 'Termometer Digital', 'ELITECH', 'ETC-100+', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(314, 'CEN', 'Centrifuge ', 'Hettich EBA 20', '0085800', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(315, 'MAR', 'Moisture Analyzer', 'AND-MX 50', 'P1022721', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(316, 'THG', 'Thermohygrometer', 'TFA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(317, 'VCR', 'Vacuum Chamber', 'Yamamoto Keiki Instrumens', 'A1/4 60', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(318, 'THG', 'Thermohygrometer', 'TFA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(319, 'VCR', 'Vacuum Chamber', 'Yamamoto Keiki Instrumens', 'A1/4 60', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(320, 'THG', 'Thermohygrometer', 'TFA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(321, 'INC', 'Incubator ', 'Memmert INB 400', 'E408.1123', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(322, 'ACL', 'Autoclave', ' Hirayama HVE-50', '30608102735', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(323, 'OVN', 'Oven ', 'Memmert UNB 400', 'C408.1782', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(324, 'INC', 'Incubator ', 'Binder BD 115', '11-16571', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(325, 'THG', 'Thermohygrometer', 'TFA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(326, 'THG', 'Thermohygrometer', 'TFA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(327, 'THG', 'Thermohygrometer', 'TFA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(328, 'THG', 'Thermohygrometer', 'TFA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(329, 'WTB', 'Waterbath', 'Memmert', 'WNB 14 / L408.1462', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(330, 'NVN', 'Ney Vulcan', 'NA', 'D-130', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(331, 'THG', 'Thermohygrometer', 'TFA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(332, 'THG', 'Thermohygrometer', 'TFA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(333, 'ACL', 'Autoclave', ' Hirayama HVE-50', '30613106151', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(334, 'MIC', 'Mini Centrifuge', 'Scan Speed', 'GS-22511060637', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(335, 'MAG', 'Magnehelic', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(336, 'MAG', 'Magnehelic', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(337, 'MAG', 'Magnehelic', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(338, 'THG', 'Thermohygrometer', 'TFA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(339, 'MAG', 'Magnehelic', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(340, 'THG', 'Thermohygrometer', 'TFA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(341, 'THG', 'Thermohygrometer', 'TFA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(342, 'THG', 'Thermohygrometer', 'TFA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(343, 'THG', 'Thermohygrometer', 'TFA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(344, 'THG', 'Thermohygrometer', 'TFA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(345, 'THG', 'Thermohygrometer', 'TFA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(346, 'THG', 'Thermohygrometer', 'TFA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(347, 'STW', 'Stopwatch', 'NA', 'CT-30 / C10Q01', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(348, 'EMS', 'Elmasonic', 'Elma', '100361106', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(349, 'MPT', 'Melting Point Meter', 'Kurss', '0716367 / M5000', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(350, 'CCH', 'Climatic Chamber', 'Sarana Lab Indonesia', 'SLI 2000 S / S 16553395-20069340', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(351, 'STW', 'Stopwatch', 'NA', 'HS-3', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(352, 'CCR', '\"Climatic Chamber \r\n(suhu 40?C)\"', 'Binder', '\"07-31474\r\nKBF P720\"', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(353, 'MIC', 'Mini Centrifuge ', 'Labogene', '\"GS225110020196\r\nScan Speed Mini Blue\"', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(354, 'WTB', 'Waterbath ', 'Memmert', '\"WNE14\r\nL413.0364\"', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(355, 'VMR', 'Vortex mixer', 'Thermo Scientific', '\"C1861120524576\r\nM37610-33\"', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(356, 'VMR', 'Vortex mixer', 'Thermo Scientific', '\"C1861120315765\r\nM37610-33\"', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(357, 'VMR', 'Vortex mixer', 'Thermo Scientific', '\"C1861101138337\r\nM37610-33\"', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(358, 'THG', 'Thermohygrometer', 'Corona', '\"GL-89\r\n(DCV-R&D-01)\"', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(359, 'THG', 'Thermohygrometer', 'Extech Instrumens', '\"445815\r\n(DCV-R&D-02)\"', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(360, 'THG', 'Thermohygrometer', 'TFA', '\"AZ-HT-02 ; 0714\r\n(DCV-R&D-03)\"', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(361, 'THG', 'Thermohygrometer', 'TFA Dostman', '\"30.5002\r\nAZ-HT-02 ; 0811\"', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(362, 'THG', 'Thermohygrometer', 'TFA', 'AZ-HT-02 ; 0413', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(363, 'THG', 'Thermohygrometer', 'Ebro', '\"62233433\r\nEB120TH1\"', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(364, 'THG', 'Thermohygrometer', 'Ebro', '\"62233829\r\nEB120TH1\"', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(365, 'THG', 'Thermohygrometer', 'Ebro', '\"62233830\r\nEB120TH1\"', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(366, 'THG', '\"Climatic Chamber \r\n(suhu 30?C)\"', 'Binder', '\"11-15239\r\nKBF P720 (E5.2)\"', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(367, 'THG', '\"Climatic Chamber \r\n(suhu 30?C)\"', 'Binder', '\"12-04650\r\nKBF P720 (E5.2)\"', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(368, 'TCR', 'Termometer Controller (Lemari Pendingin / Freezer)', 'Elitech', 'ETC-100+', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(369, 'TCR', 'Termometer Controller (Lemari Pendingin / Refrigerator)', 'Elitech', 'ETC-100+', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(370, 'THG', 'Thermohygrometer', 'NA', '\"AZ-HT-02\r\n0413\"', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(371, 'THG', 'Thermohygrometer', 'TFA', '\"AZ-HT-02\r\n0413\"', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(372, 'THG', 'Thermohygrometer', 'TFA  ', '\"AZ-HT-02\r\n0413\"', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(373, 'THG', 'Thermohygrometer', 'TFA  ', '\"AZ-HT-02\r\n0413\"', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(374, 'THG', 'Thermohygrometer', 'TFA', '\"AZ-HT-02\r\n0413\"', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(375, 'MAG', 'Magnehelic', 'Dwyer', 'W38Y FH', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(376, 'MAG', 'Magnehelic', 'Dwyer', 'W50Y FH', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(377, 'MAG', 'Magnehelic', 'Dwyer', 'W37Y AT', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(378, 'MAG', 'Magnehelic', 'Dwyer', 'W38Y FH', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(379, 'MAG', 'Magnehelic', 'Dwyer', 'W38Y FH', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(380, 'MAG', 'Magnehelic', 'Dwyer', 'W41Y JH', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(381, 'MAG', 'Magnehelic', 'Dwyer', 'W38Y FH', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(382, 'MAG', 'Magnehelic', 'Dwyer', 'W50Y FH', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(383, 'MAG', 'Magnehelic', 'Dwyer', 'W46T SW', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(384, 'MAG', 'Magnehelic', 'Dwyer', 'W41Y JH', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(385, 'MAG', 'Magnehelic', 'Dwyer', 'W49Y AT', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(386, 'MAG', 'Magnehelic', 'Dwyer', 'W50Y FH', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(387, 'MAG', 'Magnehelic', 'Dwyer', 'W41Y FH', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(388, 'MAG', 'Magnehelic', 'Dwyer', 'W41Y TC', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(389, 'VMR', 'Mesin VEM 10', 'Tanach Anugrah Sejati', 'ZJR-10', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(390, 'MMX', 'Mesin Medium Mixer', 'Dua Putra Tekmindo', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(391, 'VMX', 'Mesin Vertikal Mixer', 'Dua Putra Tekmindo', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(392, 'VEM', 'Mesin VEM 100', 'Yen Chen', '\"YC-Hm-100\r\nOB 3A 80071\"', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(393, 'VEM', 'Mesin VEM 50', 'Shang Yuh', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(394, 'GRI', 'Mesin Grinding', 'Dua Putra Tekmindo', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(395, 'STW', 'Stopwatch', 'Canon', 'CT-20', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(396, 'STW', 'Stopwatch', 'Canon', 'CT-20', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(397, 'STW', 'Stopwatch', 'Canon', 'CT-20', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(398, 'PTK', 'Mesin Preheating', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(399, 'THM', 'Thermometer', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(400, 'THM', 'Thermometer', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(401, 'THG', 'Thermohygrometer', 'NA', '\"AZ-HT-02\r\n0413\"', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(402, 'THG', 'Thermohygrometer', 'NA', '\"AZ-HT-02\r\n0512\"', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(403, 'MEO', 'Mesin Mixer Ekato', 'Ekato', '84714', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(404, 'THG', 'Thermohygrometer', 'NA', 'AZ-HT-02', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(405, 'THG', 'Thermohygrometer', 'NA', 'AZ-HT-02', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(406, 'THG', 'Thermohygrometer', 'NA', 'AZ-HT-02', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(407, 'THG', 'Thermohygrometer', 'NA', 'AZ-HT-02', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(408, 'THG', 'Thermohygrometer', 'NA', 'AZ-HT-02', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(409, 'THG', 'Thermohygrometer', 'NA', 'AZ-HT-02', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(410, 'THG', 'Thermohygrometer', 'NA', 'AZ-HT-02', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(411, 'THG', 'Thermohygrometer', 'NA', '\"AZ-HT-02\r\n0413\"', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(412, 'THG', 'Thermohygrometer', 'TFA Dostmann', '\"Werthem\r\n0811\"', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(413, 'THG', 'Thermohygrometer', 'NA', '\"AZ-HT-02\r\n0413\"', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(414, 'THG', 'Thermohygrometer', 'TFA', '\"AZ-HT-02\r\n0413\"', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(415, 'MAG', 'Magnehelic', 'Dwyer', 'W43Y JH', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(416, 'MAG', 'Magnehelic', 'Dwyer', 'W38Y FH', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(417, 'MAG', 'Magnehelic', 'Dwyer', 'W14Z JH', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(418, 'MAG', 'Magnehelic', 'Dwyer', 'W43Y TC', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(419, 'MAG', 'Magnehelic', 'Dwyer', 'W37Y AT', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(420, 'TFS', 'Mesin Tube Filler and Sealer K-600M', 'Kentex', '\"T 0833\r\nK 600\"', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(421, 'SHR', 'Mesin Shrink', 'Strink Tunnel', 'CN-4520 A', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(422, 'THM', 'Thermometer', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(423, 'THG', 'Thermohygrometer', 'NA', '\"AZ-HT-02\r\n0413\"', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(424, 'THG', 'Thermohygrometer', 'NA', '\"AZ-HT-02\r\n0814\"', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(425, 'THG', 'Thermohygrometer', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(426, 'THG', 'Thermohygrometer', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(427, 'THG', 'Thermohygrometer', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(428, 'THG', 'Thermohygrometer', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(429, 'MAG', 'Magnehelic', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(430, 'MAG', 'Magnehelic', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(431, 'MAG', 'Magnehelic', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(432, 'MAG', 'Magnehelic', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(433, 'MAG', 'Magnehelic', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(434, 'THG', 'Thermohygrometer', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(435, 'THG', 'Thermohygrometer', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(436, 'THG', 'Thermohygrometer', 'NA', 'NA', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(437, 'BTN', 'Batu Timbang 200 g', 'Giga Standard', 'F1', '', '', 'active', 1, '2020-06-03 14:36:12', 1, '2020-06-03 14:37:32', NULL, NULL),
(438, 'BTN', 'Batu Timbang 500 mg', 'Giga Standard', 'F11', '', '', 'active', 1, '2020-06-03 14:39:06', NULL, NULL, NULL, NULL),
(439, 'DTL', 'Data Logger', 'N/A', '174H1/3/40316715', '', '', 'active', 1, '2020-06-03 14:41:19', NULL, NULL, NULL, NULL),
(440, 'DTL', 'Data Logger', 'N/A', '175 H1/2', '', '', 'active', 1, '2020-06-03 14:41:55', NULL, NULL, NULL, NULL),
(441, 'DTL', 'Data Logger', 'N/A', '175 H1/1', '', '', 'active', 1, '2020-06-03 14:42:18', NULL, NULL, NULL, NULL),
(442, 'TAC', 'Tachometer', 'Sanusa', 'SE-100', '', '', 'active', 1, '2020-06-03 14:44:27', NULL, NULL, NULL, NULL),
(443, 'SPT', 'tes', 'tes', '334444', 'e', '', 'nonactive', 135, '2020-10-18 19:20:32', NULL, NULL, 135, '2020-10-18 19:20:45');

-- --------------------------------------------------------

--
-- Table structure for table `e04_ms_tools_detail`
--

CREATE TABLE `e04_ms_tools_detail` (
  `toolsdetail_id` int(11) NOT NULL,
  `tools_id` int(11) NOT NULL,
  `tools_code` varchar(7) NOT NULL,
  `toolsdetail_code` varchar(10) NOT NULL,
  `toolsdetail_name` varchar(150) NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e04_ms_tools_detail`
--

INSERT INTO `e04_ms_tools_detail` (`toolsdetail_id`, `tools_id`, `tools_code`, `toolsdetail_code`, `toolsdetail_name`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 6, '', 'phh/001', 'a. pH', 'active', 1, '2020-06-03 13:03:19', NULL, NULL, NULL, NULL),
(2, 6, '', 'con/001', 'b. Conductivity', 'active', 1, '2020-06-03 13:03:51', NULL, NULL, NULL, NULL),
(3, 5, '', 'a. Viskosi', 'vos/001', 'active', 1, '2020-06-03 13:41:33', NULL, NULL, NULL, NULL),
(4, 7, '', 'phh/001', 'a. pH', 'active', 1, '2020-06-03 13:42:31', NULL, NULL, NULL, NULL),
(5, 8, '', 'mas/001', 'a. Massa', 'active', 1, '2020-06-03 13:43:14', NULL, NULL, NULL, NULL),
(6, 9, '', 'tmp/001', 'a. Temperatur', 'active', 1, '2020-06-03 13:44:21', NULL, NULL, NULL, NULL),
(7, 12, '', 'vos/001', 'a. Viskositas', 'active', 1, '2020-06-03 13:45:18', NULL, NULL, NULL, NULL),
(8, 16, '', 'phh/001', 'a. pH ', 'active', 1, '2020-06-03 13:48:19', NULL, NULL, NULL, NULL),
(9, 19, '', 'phh/001', 'a.pH', 'active', 1, '2020-06-03 13:49:07', NULL, NULL, NULL, NULL),
(10, 20, '', 'mas/001', 'a.Massa', 'active', 1, '2020-06-03 13:49:56', NULL, NULL, NULL, NULL),
(11, 21, '', 'mas/001', 'a. Massa', 'active', 1, '2020-06-03 13:51:41', NULL, NULL, NULL, NULL),
(12, 26, '', 'vos/001', 'Viskositas', 'active', 1, '2020-06-03 13:52:25', NULL, NULL, NULL, NULL),
(13, 27, '', 'phh/001', 'a. pH', 'active', 1, '2020-06-03 13:53:22', NULL, NULL, NULL, NULL),
(14, 28, '', 'phh/001', 'a. pH', 'active', 1, '2020-06-03 13:54:01', NULL, NULL, NULL, NULL),
(15, 28, '', 'con/001', 'b. Conductivity', 'active', 1, '2020-06-03 13:54:19', NULL, NULL, NULL, NULL),
(16, 30, '', 'vos/001', 'a. Viskositas', 'active', 1, '2020-06-03 13:58:00', NULL, NULL, NULL, NULL),
(17, 31, '', 'phh/001', 'a. pH', 'active', 1, '2020-06-03 14:00:16', NULL, NULL, NULL, NULL),
(18, 36, '', 'mas/001', 'a. Massa', 'active', 1, '2020-06-03 14:01:02', NULL, NULL, NULL, NULL),
(19, 37, '', 'spc/001', 'a. Kecepatan', 'active', 1, '2020-06-03 14:06:32', NULL, NULL, NULL, NULL),
(20, 37, '', 'tmr/001', 'b. Timer', 'active', 1, '2020-06-03 14:06:57', NULL, NULL, NULL, NULL),
(21, 40, '', 'phh/001', 'a. pH', 'active', 1, '2020-06-03 14:09:28', NULL, NULL, NULL, NULL),
(22, 40, '', 'con/001', 'b. Conductivity', 'active', 1, '2020-06-03 14:09:44', NULL, NULL, NULL, NULL),
(23, 41, '', 'phh/001', 'a. pH', 'active', 1, '2020-06-03 14:11:37', NULL, NULL, NULL, NULL),
(24, 42, '', 'vos/001', 'a. Viskositas', 'active', 1, '2020-06-03 14:14:38', NULL, NULL, NULL, NULL),
(25, 46, '', 'pgg/001', 'a. Panjang Gelombang', 'active', 1, '2020-06-03 14:16:11', NULL, NULL, NULL, NULL),
(26, 46, '', 'kfi/001', 'b. Ketepatan Fotometri', 'active', 1, '2020-06-03 14:16:28', NULL, NULL, NULL, NULL),
(27, 46, '', 'sre/001', 'c. SRE (Stray Radient Energy)', 'active', 1, '2020-06-03 14:16:45', NULL, NULL, NULL, NULL),
(28, 47, '', 'vos/001', 'a. Viskositas', 'active', 1, '2020-06-03 14:18:50', NULL, NULL, NULL, NULL),
(29, 50, '', 'mas/001', 'a. Massa', 'active', 1, '2020-06-03 14:20:59', NULL, NULL, NULL, NULL),
(30, 51, '', 'mas/001', 'a. Massa', 'active', 1, '2020-06-03 14:22:49', NULL, NULL, NULL, NULL),
(31, 58, '', 'vos/001', 'a. Viskositas', 'active', 1, '2020-06-03 14:24:38', NULL, NULL, NULL, NULL),
(32, 70, '', 'mas/001', 'a. Massa', 'active', 1, '2020-06-03 14:26:10', NULL, NULL, NULL, NULL),
(33, 71, '', 'mas/001', 'a. Massa', 'active', 1, '2020-06-03 14:27:29', NULL, NULL, NULL, NULL),
(34, 73, '', 'mas/001', 'a. Massa', 'active', 1, '2020-06-03 14:28:12', NULL, NULL, NULL, NULL),
(35, 74, '', 'mas/001', 'a. Massa', 'active', 1, '2020-06-03 14:28:56', NULL, NULL, NULL, NULL),
(36, 437, '', 'mas/001', 'a. Massa', 'active', 1, '2020-06-03 14:38:15', NULL, NULL, NULL, NULL),
(37, 438, '', 'mas/001', 'a. Massa', 'active', 1, '2020-06-03 14:39:49', NULL, NULL, NULL, NULL),
(38, 53, '', 'test', 'test', 'active', 1, '2020-06-03 15:40:30', NULL, NULL, NULL, NULL),
(39, 53, '', 'tes1', 'tes1', 'active', 1, '2020-06-03 15:40:41', NULL, NULL, NULL, NULL),
(40, 72, '', 'test', 'test', 'active', 1, '2020-06-04 10:00:17', NULL, NULL, NULL, NULL),
(41, 72, '', 'test1', 'test2', 'active', 1, '2020-06-04 10:00:26', NULL, NULL, NULL, NULL),
(42, 1, '', 'Sh/001', 'Nama detail alat', 'active', 1, '2020-07-22 11:55:16', 135, '2020-09-26 10:00:37', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `e04_ms_tools_old`
--

CREATE TABLE `e04_ms_tools_old` (
  `tools_id` int(11) NOT NULL,
  `tools_code` varchar(15) NOT NULL,
  `tools_name` varchar(150) NOT NULL,
  `tools_merk` varchar(100) NOT NULL,
  `tools_noseri_model` varchar(100) NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e04_ms_tools_old`
--

INSERT INTO `e04_ms_tools_old` (`tools_id`, `tools_code`, `tools_name`, `tools_merk`, `tools_noseri_model`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 'SPT', 'Spectroquant NOVA 60', 'Merck ', '08450475', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'SPT', 'Spectroquant TR 320', 'Merck ', '08480470', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'TTR', 'Thickness Tester ', 'NA', '0472530', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'DCR', 'Digital Capiler 12 inchi ', 'Krisbow ', 'KW06 -  423', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'VIS', 'Viscometer  ', 'Brookfield ', '8552211 / D220', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'PHM', 'pH meter Seven Exellence', 'Mettler Toledo', 'B243460759', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'PHM', 'pH Meter Seven Compact', 'Mettler Toledo', 'B309083619', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'MAR', 'Moisture Analyzer', 'Mettler Toledo', 'HB43-S', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'MPT', 'Melting Point MP-50', ' Mettler Toledo', 'B310112446', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'ASR', 'Air Sampler Met One', 'Merck ', 'MAS-100NT', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'KFR', 'Karl Fischer V20', 'Mettler Toledo', 'V20', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'VIS', 'Viscometer', 'Brookfield ', '8699933 / 0220 ', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'MIP', 'Micropipet 1 ml ', 'Eppendorf', 'K38426D', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'MIP', 'Micropipet 1 ml ', 'Eppendorf', '022846D', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'MIP', 'Micropipet 10 ml ', 'Eppendorf', '019358D', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'PHM', 'pH meter', 'OHAUS', 'Starter 3100', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'MIP', 'Micropipet 1 ml', 'Eppendorf', 'L22603 E', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'MIP', 'Micropipet 10 ml', 'Eppendorf', 'L40216E', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'PHM', 'pH meter seven compact ', 'Mettler Toledo', 'B535352577', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'BTN', 'Batu Timbang 500 g', 'Mettler Toledo', 'B611214739', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'BTN', 'Batu Timbang 500 mg', 'Mettler Toledo', 'B611214740', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'MIP', 'Micropipette', '-', 'K44228F', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'MIP', 'Micropipet Eppendorf', '-', 'R39206F', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'MIP', 'Micropipette', '-', 'L22603E', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'ANE', 'Anemometer', 'Peak Meter', 'PM6252A', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'VIS', 'Viskometer', '-', 'LVT / 8704750', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'PHM', 'pH Meter', '-', 'B616356095', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'PHC', 'Multi Parameter', '-', 'ST 3100 M / B 748062021', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(29, 'MIP', 'Micropipette 1-10 µL', 'Eppendorf', 'G28621I', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(30, 'VIS', 'Viscometer  ', 'Brookfield', '6529106 LVT', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'PHM', 'pHmeter ', 'Neomet, ISTEK', '200L-08084 PH-200L', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(32, 'DCR', 'Digital Caliper', '-', 'KW06-423', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(33, 'TTR', 'Thickness Gauge', '-', 'A850806', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(34, 'CMR', 'Colorimeter', 'D02000.04-420', 'Cortex Technology', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(35, 'TMB', 'Timbangan Gewin', 'Gewinn', 'K3190-C602', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(36, 'TMB', 'Timbangan 500 Kg', 'Yamata', 'YDI-500 / 16050259', 'active', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `e04_ms_type_calibration`
--

CREATE TABLE `e04_ms_type_calibration` (
  `id_type` int(25) NOT NULL,
  `code_type` int(25) NOT NULL,
  `nama_type` varchar(50) NOT NULL,
  `statustype` varchar(50) NOT NULL,
  `createby` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e04_ms_type_calibration`
--

INSERT INTO `e04_ms_type_calibration` (`id_type`, `code_type`, `nama_type`, `statustype`, `createby`) VALUES
(1, 1, 'Eksternal', 'active', '0000-00-00'),
(2, 2, 'Internal', 'active', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `e04_ms_vendor`
--

CREATE TABLE `e04_ms_vendor` (
  `vendor_id` int(11) NOT NULL,
  `vendor_code` varchar(15) NOT NULL,
  `vendor_name` varchar(150) NOT NULL,
  `vendor_address` varchar(255) NOT NULL,
  `vendor_office_phone` varchar(11) NOT NULL,
  `vendor_office_phone2` varchar(11) NOT NULL,
  `vendor_email` varchar(200) NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e04_ms_vendor`
--

INSERT INTO `e04_ms_vendor` (`vendor_id`, `vendor_code`, `vendor_name`, `vendor_address`, `vendor_office_phone`, `vendor_office_phone2`, `vendor_email`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 'V-DITE01', 'PT. DITEK JAYA', 'Kedoya Elok Plaza, Blok DA-12', '0215806862', '', 'mutty@ditekjaya.co.id', 'active', NULL, NULL, 1, '2020-05-29 14:09:17', NULL, NULL),
(2, 'V-ELDE01', 'PT. ELDEPE KALIBRASI INSTRUMEN', 'Jl. Puspa Gading 8 Blok A1/50', '02146523111', '', 'rosdiana.eldepe@gmail.com', 'active', NULL, NULL, 1, '2020-05-29 14:09:43', NULL, NULL),
(3, 'V-INDO10', 'PT. Indofa Utama Multi Core', 'Jl. Tanah Abang II No. 107', '0215366 61', '0213809 83', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'V-INFI02', 'PT. Infiniti Bioanalitika Solusindo', 'Jl. Taman Aries Blok E1', '02129319468', '', 'irma@ibs.co.id', 'active', NULL, NULL, 1, '2020-05-29 14:10:33', NULL, NULL),
(5, 'V-KALI01', 'PT. KALIMAN', 'Komp. Green Garden Blok B 1-18', '02155774155', '', '', 'active', NULL, NULL, 1, '2020-04-30 13:04:33', NULL, NULL),
(6, 'V-MITR02', 'PT. Mitra Sarana Instrumentasi', 'Taman Kota Blok F2/10', '0218819 10', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'V-BERK01', 'PT.Berkat Air hidup Abadi', 'Ruko Pinangsia Blok I No.21 / Jl.Raya Perjuangan Kebon Jeruk', '0215573788', '0215310041', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'V-INDO05', 'PT.Indodacin Presisi Utama', 'Jl.Pangeran Jayakarta 126-129', '0216008462', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'V-Calt01', 'PT. CALTESYS INDONESIA', 'Jl. Puri Kencana Blok J1-2W', '0215826882', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'V-KEMI01', 'PT. Kemiko Indonesia', 'Kawasan Industri & Pergudangan Marunda ', '02128510820', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'V-SENT04', 'PT. Sentra Analitika Graha', 'Jl. Garuda No. 71E', '021 424303', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'V-CHEM02', 'PT. Chemoscience Indonesia', 'Jl. Panglima Polim Raya 107B ', '0217225018', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'V-KARS01', 'PT. KARSAMUDIKA ANDALAN UTAMA', 'Kmp. Gold Boulevard Blok R/43', '0215381155', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'V-MERC02', 'PT Merck Chemicals and Life Sciences ', 'Jl. TB Simatupang No. 8', '0212856 56', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'V-GRAH02', 'PT. Graha Cipta Abadi', 'Jl. Kanon No. 8 Komp. Arteri Sangkuriang', '0226651 55', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'V-TOTL01', 'CV. TOTAL Equipment Pharmacy', 'Klipang Pesona Asri III.F No. 1', '2476737057', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'V-GEWI01', 'PT.GEWINN GOLD HOTAMA', 'JL.Galaxy Raya No.6 Bekasi', '0218914 06', '0218914068', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'V-METT01', 'PT. Mettler Toledo Indonesia', 'Grha Persada 2nd Floor Unit D2, JL. K.H. Noer Ali ', '0212945 39', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'V-TRIAR01', 'PT. Tri Artha Manunggal', 'Komp. LUK-BPPT Blok L-10 Baktijaya - Setu', '02129308235', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `e04_ms_vendor_detail`
--

CREATE TABLE `e04_ms_vendor_detail` (
  `vendor_detail_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `vendor_detail_name` varchar(150) NOT NULL,
  `vendor_detail_phone` varchar(15) NOT NULL,
  `vendor_detail_phone2` varchar(15) NOT NULL,
  `vendor_detail_email` varchar(200) NOT NULL,
  `vendor_detail_email2` varchar(200) NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e04_ms_vendor_detail`
--

INSERT INTO `e04_ms_vendor_detail` (`vendor_detail_id`, `vendor_id`, `vendor_detail_name`, `vendor_detail_phone`, `vendor_detail_phone2`, `vendor_detail_email`, `vendor_detail_email2`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 1, 'Bpk Ramdhan', '085219164270', '0', 'mutty@ditekjaya.co.id', 'workshop@ditekjaya.com', 'active', NULL, NULL, 1, '2020-04-30 13:10:42', NULL, NULL),
(2, 1, 'Bpk. Saptogiri', '085219164270', '0813 1121 4114', 'mutty@ditekjaya.co.id', 'workshop@ditekjaya.', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 1, 'Bpk. Saptogiri / ABDUL RAHMAN', '085219164270', '0813 1121 4114', 'mutty@ditekjaya.co.id', 'workshop@ditekjaya.', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 2, 'Ibu Novika', '0851 0064 9981', '', 'rosdiana.eldepe@gmail.com, diana.', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 3, 'Pak Harijanto/Pak Kurniawan', '0816 145 0112', '', 'tsdindofa@yahoo.co.id', 'erma.jkt@indofa.com', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 4, 'Irma / Zul', '0819 0591 0245', '', 'irma@ibs.co.id', 'm.zulkarnain83@yahoo.com', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 5, 'Bpk. Yadi', '', '', 'yadi_kaliman@yahoo.com, ', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 6, 'Daffa', '0857 9492 6110', '', 'vikie.msi@gmail.com, sales.', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 7, 'Bpk.Indra/ Ibu Jenny', '08161816731', '', 'indra@baha.co.id', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 7, 'Bpk.Indra/ Ibu Jenny', '0878 8002 1111', '', 'sales@baha.co.id', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 8, 'Ibu Miftah', '+62 811-973-096', '', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 9, 'Bu Titin', '', '', 'titin@caltesys.com', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 10, 'Pak Anton / Ibu Anin', '0813-2838-0588', '', 'anindya@id.chemicogroup.com , ', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 10, ' Ibu Anin', '', '', 'ayu@id.chemicogroup.com', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(15, 11, 'Ibu Ambar Dwiastuti', '0812 8556 766', '', 'sales@ptsentra-ag.co', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(16, 12, 'Chris Dwi Hariana', '085782439429', '', 'chrisdh@chemoscience.co.id', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(17, 13, 'Syafarina', '0855 841 7671', '', 'syafarina@karsamudika.com', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(18, 14, 'Idil/ Dini/ Hans (+62 812-1287-', '+62 812-1287-38', '', 'hana.puspatirta@merckgroup', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(19, 15, 'Ir. Hadi Sularyo', '08122331915', '', 'graha_cipta_abadi@yahoo.co.id', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(20, 16, 'Bpk. Sudrajat', '081804416048', '', 'total_equipmen@yahoo.co.id', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(21, 17, 'Tina', '0812 9027 7113', '', 'sales_jkt@gewinngold.com', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(22, 18, 'Tb Achyadi/ Firmansyah ', '', '', 'tb.achyadi@mt.com, firmansyah.', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(23, 18, 'Rona Mentari', '', '', 'rona.mentari@mt.com', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(24, 19, 'Bpk. I Ketut Suada', '0816-4849645', '', 'info@tri-artha.com', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `e04_ts_calibration`
--

CREATE TABLE `e04_ts_calibration` (
  `calibration_id` int(11) NOT NULL,
  `tools_id` int(11) NOT NULL,
  `tools_code` varchar(7) NOT NULL,
  `calibration_type` varchar(15) NOT NULL,
  `calibration_code` varchar(35) NOT NULL,
  `startcalibration_date` date NOT NULL,
  `scope_code` varchar(2) NOT NULL COMMENT 'dont',
  `location_name` varchar(35) NOT NULL COMMENT 'dont',
  `position_name` varchar(35) NOT NULL COMMENT 'dont',
  `calibration_status` int(1) NOT NULL DEFAULT '1' COMMENT '0=not active, 1=active',
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `reminder` varchar(250) NOT NULL,
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e04_ts_calibration`
--

INSERT INTO `e04_ts_calibration` (`calibration_id`, `tools_id`, `tools_code`, `calibration_type`, `calibration_code`, `startcalibration_date`, `scope_code`, `location_name`, `position_name`, `calibration_status`, `statusdata`, `reminder`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 0, 'tools_c', 'calibration_typ', 'calibration_code', '0000-00-00', 'sc', 'location_name', 'position_name', 0, '', '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(2, 1, 'SPT', 'Eksternal', 'QC/K/SPT/2013/001', '2019-10-24', 'K', 'Departemen QC', 'R. Lab Fisika Kimia', 1, 'nonactive', '', NULL, NULL, NULL, NULL, 135, '2020-10-18 18:37:25'),
(3, 2, 'SPT', 'Eksternal', 'QC/K/SPT/2013/002', '2021-10-30', 'K', 'Departemen QC', 'R. Lab Fisika Kimia', 1, 'active', '1', NULL, NULL, 135, '2020-10-31 11:09:19', NULL, NULL),
(4, 3, 'TTR', 'Eksternal', 'QC/K/TTR/2013/003', '2019-05-09', 'K', 'Departemen QC', 'R. Lab Fisika Kimia', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 4, 'DCR', 'Eksternal', 'QC/K/DCR/2013/004', '2019-09-25', 'K', 'Departemen QC', 'R. Lab Fisika Kimia', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 76, 'OVN', 'Eksternal', 'QC/K/OVN/2013/005', '2020-03-05', 'K', 'Departemen QC', 'R. Lab Fisika Kimia', 1, 'nonactive', '', NULL, NULL, NULL, NULL, 135, '2020-10-18 18:46:19'),
(7, 77, 'OVN', 'Eksternal', 'QC/K/OVN/2013/006', '2020-06-15', 'K', 'Departemen QC', 'R. Preparasi Mikrobiologi', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 78, 'ACL', 'Eksternal', 'QC/K/ACL/2013/007', '2020-06-15', 'K', 'Departemen QC', 'R. Preparasi Mikrobiologi', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 79, 'ACL', 'Eksternal', 'QC/K/ACL/2013/008', '2020-06-15', 'K', 'Departemen QC', 'R. Preparasi Mikrobiologi', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 80, 'INC', 'Eksternal', 'QC/K/INC/2013/009', '2020-06-15', 'K', 'Departemen QC', 'R. Lab Mikrobiologi', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 5, 'VIS', 'Eksternal', 'QC/K/VIS/2013/013', '2020-01-14', 'K', 'Departemen QC', 'R. Lab Fisika Kimia', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 6, 'PHM', 'Eksternal', 'QC/K/PHM/2013/015', '2019-05-03', 'K', 'Departemen QC', 'R. IPC primer F ', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 7, 'PHM', 'Eksternal', 'QC/K/PHM/2013/016', '2020-01-14', 'K', 'Departemen QC', 'R. Lab Fisika Kimia', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 8, 'MAR', 'Eksternal', 'QC/K/MAR/2013/017', '2019-10-07', 'K', 'Departemen QC', 'R. Lab Fisika Kimia', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(15, 9, 'MPT', 'Eksternal', 'QC/K/MPT/2013/018', '2019-04-05', 'K', 'Departemen QC', 'R. Lab Fisika Kimia', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(16, 82, 'THG', 'Eksternal', 'QC/K/THG/2013/019', '2020-03-16', 'K', 'Departemen QC', 'R. Lab Mikrobiologi', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(17, 83, 'THG', 'Eksternal', 'QC/K/THG/2013/022', '2020-05-03', 'K', 'Departemen QC', 'R. Antara Mikrobiologi', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(18, 84, 'THG', 'Eksternal', 'QC/K/THG/2013/024', '2019-07-11', 'K', 'Departemen QC', 'Penyimpanan media Mikrobiologi', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(19, 10, 'ASR', 'Eksternal', 'QC/K/ASR/2013/025', '2019-10-24', 'K', 'Departemen QC', 'R. Lab Mikrobiologi', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(20, 11, 'KFR', 'Eksternal', 'QC/K/KFR/2013/026', '2019-05-28', 'K', 'Departemen QC', 'R. Lab Fisika Kimia', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(21, 85, 'THM', 'Eksternal', 'QC/K/THM/2013/027', '2019-09-05', 'K', 'Departemen QC', 'R. Lab Fisika Kimia', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(22, 86, 'THM', 'Eksternal', 'QC/K/THM/2013/028', '2019-09-05', 'K', 'Departemen QC', 'R. Lab Fisika Kimia', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(23, 87, 'THM', 'Eksternal', 'QC/K/THM/2013/029', '2019-05-07', 'K', 'Departemen QC', 'Cooling Box Lab Mikrobiologi ', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(24, 38, 'HPL', 'Eksternal', 'QC/K/HPL/2013/036', '0000-00-00', 'K', 'Departemen QC', 'R. Lab Fisika Kimia', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(25, 88, 'VCR', 'Eksternal', 'QC/K/VCR/2013/039', '2020-06-22', 'K', 'Departemen QC', 'R. Lab Fisika Kimia', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(26, 120, 'VCR', 'Eksternal', 'QC/K/VCR/2013/040', '2020-08-05', 'K', 'Departemen QC', 'R. IPC F Lantai 1', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(27, 55, 'HPL', 'Eksternal', 'QC/K/HPL/2013/043', '0000-00-00', 'K', 'Departemen QC', 'R. Preparasi Mikrobiologi', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(28, 90, 'MAG', 'Eksternal', 'QC/K/MAG/2013/048', '2019-07-15', 'K', 'Departemen QC', 'R. Uji Cemaran Mikroba 1', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(29, 91, 'MAG', 'Eksternal', 'QC/K/MAG/2013/049', '2019-07-15', 'K', 'Departemen QC', 'R. Uji Cemaran Mikroba 2', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(30, 92, 'THG', 'Eksternal', 'QC/K/THG/2013/050', '2020-08-10', 'K', 'Departemen QC', 'R. IPC G Lantai 1', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(31, 93, 'THM', 'Eksternal', 'QC/K/THM/2013/051', '2019-05-07', 'K', 'Departemen QC', 'Cooling Box Lab Fisika Kimia', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(32, 94, 'THM', 'Eksternal', 'QC/K/THM/2013/052', '2019-09-05', 'K', 'Departemen QC', 'R. Lab Fisika Kimia', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(33, 95, 'STW', 'Eksternal', 'QC/K/STW/2013/053', '2019-09-26', 'K', 'Departemen QC', 'R. Lab Mikrobiologi', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(34, 96, 'STW', 'Eksternal', 'QC/K/STW/2013/054', '2020-03-11', 'K', 'Departemen QC', 'R. Lab Fisika Kimia', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(35, 97, 'STW', 'Eksternal', 'QC/K/STW/2013/055', '2020-06-25', 'K', 'Departemen QC', 'R. IPC G Lantai 1', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(36, 98, 'STW', 'Eksternal', 'QC/K/STW/2013/056', '2020-06-23', 'K', 'Departemen QC', 'R. Lab Fisika Kimia', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(37, 99, 'STW', 'Eksternal', 'QC/K/STW/2013/057', '2020-06-25', 'K', 'Departemen QC', 'R. Lab Fisika Kimia', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(38, 100, 'STW', 'Eksternal', 'QC/K/STW/2013/058', '2020-06-24', 'K', 'Departemen QC', 'R. Lab Fisika Kimia', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(39, 101, 'STW', 'Eksternal', 'QC/K/STW/2013/060', '2019-09-24', 'K', 'Departemen QC', 'R. IPC G Lantai 1', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(40, 102, 'THG', 'Eksternal', 'QC/K/THG/2014/001', '2020-01-16', 'K', 'Departemen QC', 'R. IPC primer F ', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(41, 103, 'THG', 'Eksternal', 'QC/K/THG/2014/002', '2019-05-08', 'K', 'Departemen QC', 'R. Pertinggal Produk Jadi', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(42, 5, 'VIS', 'Eksternal', 'QC/K/VIS/2014/003', '2020-01-14', 'K', 'Departemen QC', 'R. IPC proses G', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(43, 13, 'MIP', 'Eksternal', 'QC/K/MIP/2014/004', '2019-04-30', 'K', 'Departemen QC', 'R. Lab Mikrobiologi', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(44, 142, 'VCR', 'Eksternal', 'QC/K/VCR/2015/003', '2020-06-22', 'K', 'Departemen QC', 'R. IPC Primer G Lantai 1', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(45, 340, 'THG', 'Eksternal', 'QC/K/THG/2015/006', '2019-07-11', 'K', 'Departemen QC', 'Pertinggal bahan baku bahan kemas ', 1, 'nonactive', '', NULL, NULL, NULL, NULL, 135, '2020-10-18 22:06:23'),
(46, 14, 'MIP', 'Eksternal', 'QC/K/MIP/2015/007', '2020-01-31', 'K', 'Departemen QC', 'R. Lab Mikrobiologi', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(47, 124, 'THG', 'Eksternal', 'QC/K/THG/2015/010', '2020-08-10', 'K', 'Departemen QC', 'R. Preparasi Mikrobiologi', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(48, 16, 'PHM', 'Eksternal', 'QC/K/PHM/2015/013', '2019-01-28', 'K', 'Departemen QC', 'R. Preparasi Mikrobiologi', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(49, 124, 'THG', 'Eksternal', 'QC/K/THG/2016/001', '2020-08-10', 'K', 'Departemen QC', 'R. Lab Fisika Kimia', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(50, 17, 'MIP', 'Eksternal', 'QC/K/MIP/2016/003', '2020-09-01', 'K', 'Departemen QC', 'R. Lab Mikrobiologi', 1, 'active', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(51, 18, 'MIP', 'Eksternal', 'QC/K/MIP/2016/004', '2019-07-02', 'K', 'Departemen QC', 'R. Lab Mikrobiologi', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(52, 19, 'PHM', 'Eksternal', 'QC/K/PHM/2016/005', '2020-01-14', 'K', 'Departemen QC', 'R. IPC Proses G', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(53, 109, 'THM', 'Eksternal', 'QC/K/THM/2016/006', '2019-05-09', 'K', 'Departemen QC', 'R. IPC Proses G Lantai 1', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(54, 110, 'THM', 'Eksternal', 'QC/K/THM/2016/007', '2019-05-09', 'K', 'Departemen QC', 'R. Lab Fisika Kimia', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(55, 20, 'BTN', 'Eksternal', 'QC/K/BTN/2016/008', '2020-06-23', 'K', 'Departemen QC', 'R. Lab Fisika Kimia', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(56, 21, 'BTN', 'Eksternal', 'QC/K/BTN/2016/009', '2020-06-25', 'K', 'Departemen QC', 'R. Lab Fisika Kimia', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(57, 22, 'MIP', 'Eksternal', 'QC/K/MIP/2017/001', '2020-01-31', 'K', 'Departemen QC', 'R. Lab Mikrobiologi', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(58, 34, 'CMR', 'Eksternal', 'QC/K/CMR/2017/002', '0000-00-00', 'K', 'Departemen QC', 'R. Lab Fisika Kimia', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(59, 23, 'MIP', 'Eksternal', 'QC/K/MIP/2017/003', '2020-06-18', 'K', 'Departemen QC', 'R. Lab Mikrobiologi', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(60, 24, 'MIP', 'Eksternal', 'QC/K/MIP/2017/004', '2020-09-01', 'K', 'Departemen QC', 'R. Lab Mikrobiologi', 1, 'active', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(61, 111, 'MAG', 'Eksternal', 'QC/K/MAG/2017/007', '2019-09-10', 'K', 'Departemen QC', 'R. Lab Mikrobiologi', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(62, 112, 'MAG', 'Eksternal', 'QC/K/MAG/2017/008', '2019-09-10', 'K', 'Departemen QC', 'R. Lab Mikrobiologi', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(63, 113, 'VGE', 'Eksternal', 'QC/K/VGE/2017/009', '2019-07-31', 'K', 'Departemen QC', 'Cadangan', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(64, 114, 'VGE', 'Eksternal', 'QC/K/VGE/2017/010', '2019-07-31', 'K', 'Departemen QC', 'Cadangan', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(65, 81, 'THG', 'Eksternal', 'QC/K/THG/2018/001', '2020-06-16', 'K', 'Departemen QC', 'R. IPC Proses G Lantai 2', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(66, 118, 'STW', 'Eksternal', 'QC/K/STW/2018/003', '2020-08-07', 'K', 'Departemen QC', 'R. IPC Proses G Lantai 2', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(67, 119, 'STW', 'Eksternal', 'QC/K/STW/2018/004', '2019-09-04', 'K', 'Departemen QC', 'R. Lab Fisika Kimia', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(68, 88, 'VCR', 'Eksternal', 'QC/K/VCR/2018/005', '2020-03-05', 'K', 'Departemen QC', 'R. IPC Primer G Lantai 2', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(69, 28, 'PHC', 'Eksternal', 'QC/K/PHC/2018/006', '2020-01-14', 'K', 'Departemen QC', 'R. IPC Proses G Lantai 1', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(70, 117, 'AAS', 'Eksternal', 'QC/K/AAS/2018/007', '0000-00-00', 'K', 'Departemen QC', 'R. Instrument AAS', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(71, 25, 'ANE', 'Eksternal', 'QC/K/ANE/2018/008', '0000-00-00', 'K', 'Departemen QC', 'R. Lab Mikrobiologi', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(72, 26, 'VIS', 'Eksternal', 'QC/K/VIS/2018/009', '2019-05-03', 'K', 'Departemen QC', 'R. IPC Proses G Lantai 2', 1, 'nonactive', '', NULL, NULL, NULL, NULL, 135, '2020-10-18 18:33:22'),
(73, 27, 'PHM', 'Eksternal', 'QC/K/PHM/2018/010', '2020-06-15', 'K', 'Departemen QC', 'R. IPC Proses G Lantai 2', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(74, 81, 'THG', 'Eksternal', 'QC/K/THG/2018/011', '2020-06-16', 'K', 'Departemen QC', 'R. Instrument AAS', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(75, 121, 'VGE', 'Eksternal', 'QC/K/VGE/2018/013', '2020-01-22', 'K', 'Departemen QC', 'R. Lab Fisika Kimia', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(76, 122, 'MAG', 'Eksternal', 'QC/K/MAG/2019/001', '2020-06-30', 'K', 'Departemen QC', 'Cadangan', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(77, 123, 'THG', 'Eksternal', 'QC/K/THG/2019/002', '2019-05-03', 'K', 'Departemen QC', 'R. Preparasi Mikrobiologi', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(78, 160, 'THG', 'Eksternal', 'QC/K/THG/2019/003', '2020-08-10', 'K', 'Departemen QC', 'Cadangan', 1, 'nonactive', '', NULL, NULL, NULL, NULL, 135, '2020-10-18 18:33:34'),
(79, 124, 'THG', 'Eksternal', 'QC/K/THG/2019/004', '2020-08-10', 'K', 'Departemen QC', 'Cadangan', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(80, 29, 'MIP', 'Eksternal', 'QC/K/MIP/2019/005', '2020-09-01', 'K', 'Departemen QC', 'R. Lab Mikrobiologi', 1, 'active', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(81, 385, 'MAG', 'Eksternal', 'QC/K/MAG/2019/006', '2020-08-12', 'K', 'Departemen QC', 'Cadangan', 1, 'active', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(82, 113, 'MAG', 'Eksternal', 'QC/K/MAG/2019/007', '2020-08-08', 'K', 'Departemen QC', 'Cadangan', 1, 'active', '2', NULL, NULL, NULL, NULL, NULL, NULL),
(83, 92, 'THM', 'Eksternal', 'QC/K/THM/2019/008', '2019-09-24', 'K', 'Departemen QC', 'Gedung G2', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(84, 119, 'STW', 'Eksternal', 'QC/K/STW/2019/009', '2019-12-26', 'K', 'Departemen QC', 'Cadangan', 1, 'active', '', NULL, NULL, 135, '2020-11-02 09:31:59', NULL, NULL),
(85, 131, 'MAG', 'Eksternal', 'QC/K/MAG/2019/010', '2020-03-03', 'K', 'Departemen QC', 'Cadangan', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(86, 30, 'VIS', 'Eksternal', 'RND/K/VIS/2013/006', '2020-06-17', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(87, 31, 'PHM', 'Eksternal', 'RND/K/PHM/2013/007', '2020-06-15', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(88, 31, 'HPT', 'Eksternal', 'RND/K/HPT/2013/008', '0000-00-00', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(89, 131, 'MMR', 'Eksternal', 'RND/K/MMR/2013/009', '2020-01-22', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(90, 132, 'MMX', 'Eksternal', 'RND/K/MMX/2013/010', '2020-01-22', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(91, 133, 'MMX', 'Eksternal', 'RND/K/MMX/2013/011', '2020-01-22', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(92, 135, 'MMX', 'Eksternal', 'RND/K/MMX/2013/012', '2020-08-07', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(93, 132, 'MMX', 'Eksternal', 'RND/K/MMX/2013/013', '2020-01-22', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(94, 132, 'MMX', 'Eksternal', 'RND/K/MMX/2013/015', '2020-01-22', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(95, 4, 'DCR', 'Eksternal', 'RND/K/DCR/2013/016', '2019-09-03', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(96, 3, 'TTR', 'Eksternal', 'RND/K/TTR/2013/017', '2019-10-28', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(97, 31, 'HPT', 'Eksternal', 'RND/K/HPT/2013/018', '0000-00-00', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(98, 95, 'STW', 'Eksternal', 'RND/K/STW/2013/019', '0000-00-00', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(99, 95, 'STW', 'Eksternal', 'RND/K/STW/2013/020', '0000-00-00', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(100, 95, 'STW', 'Eksternal', 'RND/K/STW/2013/021', '0000-00-00', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(101, 95, 'STW', 'Eksternal', 'RND/K/STW/2013/022', '0000-00-00', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(102, 95, 'STW', 'Eksternal', 'RND/K/STW/2013/023', '0000-00-00', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(103, 85, 'THM', 'Eksternal', 'RND/K/THM/2013/024', '0000-00-00', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(104, 85, 'THM', 'Eksternal', 'RND/K/THM/2013/025', '2020-08-25', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(105, 85, 'THM', 'Eksternal', 'RND/K/THM/2013/026', '0000-00-00', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(106, 85, 'THM', 'Eksternal', 'RND/K/THM/2013/027', '2020-08-25', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(107, 85, 'THM', 'Eksternal', 'RND/K/THM/2013/028', '2020-08-25', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(108, 85, 'THM', 'Eksternal', 'RND/K/THM/2013/029', '2020-08-25', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(109, 85, 'THM', 'Eksternal', 'RND/K/THM/2013/030', '2020-08-25', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(110, 81, 'THG', 'Eksternal', 'RND/K/THG/2015/001', '2020-08-14', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(111, 9, 'MPT', 'Eksternal', 'RND/K/MPT/2016/001', '2020-08-11', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(112, 8, 'MAR', 'Eksternal', 'RND/K/MAR/2016/002', '2020-08-11', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(113, 76, 'OVN', 'Eksternal', 'RND/K/OVN/2016/003', '2019-10-15', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(114, 76, 'OVN', 'Eksternal', 'RND/K/OVN/2016/004', '2019-10-15', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(115, 34, 'CMR', 'Eksternal', 'RND/K/CMR/2017/001', '2020-04-22', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(116, 88, 'VCR', 'Eksternal', 'RND/K/VCR/2017/002', '2020-08-14', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(117, 76, 'OVN', 'Eksternal', 'RND/K/OVN/2020/001', '0000-00-00', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(118, 132, 'MMX', 'Eksternal', 'RND/K/MMX/2020/002', '2020-08-07', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(119, 31, 'MXR', 'Eksternal', 'RND/K/MXR/2020/003', '0000-00-00', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(120, 31, 'MXR', 'Eksternal', 'RND/K/MXR/2020/004', '0000-00-00', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(121, 223, 'THC', 'Eksternal', 'PRD/K/THC/2013/007', '2020-05-05', 'K', 'Departemen Produksi', 'Lemari R. SPV Proses F Lantai 2', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(122, 81, 'THG', 'Eksternal', 'PRD/K/THG/2013/008', '2019-11-12', 'K', 'Departemen Produksi', 'R. Mixing Krim, Pasta, Gel\n(R. Mixi', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(123, 81, 'THG', 'Eksternal', 'PRD/K/THG/2013/009', '2020-07-13', 'K', 'Departemen Produksi', 'R. Mixing Krim, Pasta, Gel\n(R. Mixi', 1, 'active', '2', NULL, NULL, NULL, NULL, NULL, NULL),
(124, 81, 'THG', 'Eksternal', 'PRD/K/THG/2013/010', '2020-08-08', 'K', 'Departemen Produksi', 'R. Mixing Krim, Pasta, Gel\n(R. Mixi', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(125, 81, 'THG', 'Eksternal', 'PRD/K/THG/2013/011', '2020-08-08', 'K', 'Departemen Produksi', 'R. Mixing Cair Proses F Lantai 2', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(126, 81, 'THG', 'Eksternal', 'PRD/K/THG/2013/012', '2020-07-13', 'K', 'Departemen Produksi', 'R. Mixing Cair dan Cairan Kental 1 ', 1, 'active', '2', NULL, NULL, NULL, NULL, NULL, NULL),
(127, 81, 'THG', 'Eksternal', 'PRD/K/THG/2013/013', '2020-07-13', 'K', 'Departemen Produksi', 'R. Mixing Cair dan Cairan Kental 2 ', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(128, 81, 'THG', 'Eksternal', 'PRD/K/THG/2013/014', '2020-06-25', 'K', 'Departemen Produksi', 'R. Mixing Cair dan Cairan Kental 3 ', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(129, 81, 'THG', 'Eksternal', 'PRD/K/THG/2013/015', '2020-08-08', 'K', 'Departemen Produksi', 'R. IPC Proses F Lantai 2', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(130, 81, 'THG', 'Eksternal', 'PRD/K/THG/2013/016', '2020-08-08', 'K', 'Departemen Produksi', 'Koridor Proses F Lantai 2', 1, 'active', '2', NULL, NULL, NULL, NULL, NULL, NULL),
(131, 81, 'THG', 'Eksternal', 'PRD/K/THG/2013/017', '2020-08-08', 'K', 'Departemen Produksi', 'R. Proses F Lantai 2', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(132, 181, 'VEM', 'Eksternal', 'PRD/K/VEM/2013/018', '2020-06-16', 'K', 'Departemen Produksi', 'R. Proses F Lantai 2', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(133, 181, 'VEM', 'Eksternal', 'PRD/K/VEM/2013/019', '2020-06-19', 'K', 'Departemen Produksi', 'R. Proses F Lantai 2', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(134, 181, 'VEM', 'Eksternal', 'PRD/K/VEM/2013/020', '2019-06-19', 'K', 'Departemen Produksi', 'R. Proses F Lantai 2', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(135, 179, 'VMX', 'Eksternal', 'PRD/K/VMX/2013/021', '2020-03-18', 'K', 'Departemen Produksi', 'R. Proses F Lantai 2', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(136, 179, 'VMX', 'Eksternal', 'PRD/K/VMX/2013/022', '2020-03-18', 'K', 'Departemen Produksi', 'R. Proses F Lantai 2', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(137, 179, 'VMX', 'Eksternal', 'PRD/K/VMX/2013/023', '2020-03-18', 'K', 'Departemen Produksi', 'R. Proses F Lantai 2', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(138, 179, 'VMX', 'Eksternal', 'PRD/K/VMX/2013/024', '2020-03-18', 'K', 'Departemen Produksi', 'R. Proses F Lantai 2', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(139, 132, 'MMX', 'Eksternal', 'PRD/K/MMX/2013/025', '2020-07-08', 'K', 'Departemen Produksi', 'R. Produksi G1', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(140, 132, 'MMX', 'Eksternal', 'PRD/K/MMX/2013/027', '2020-07-29', 'K', 'Departemen Produksi', 'R. Mixing Krim, Pasta, Gel 3 (F Lan', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(141, 132, 'MMX', 'Eksternal', 'PRD/K/MMX/2013/028', '2020-07-08', 'K', 'Departemen Produksi', 'R. Prosesi G Lantai 1', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(142, 146, 'PTK', 'Eksternal', 'PRD/K/PTK/2013/029', '2020-06-16', 'K', 'Departemen Produksi', 'R. Proses F Lantai 2', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(143, 146, 'PTK', 'Eksternal', 'PRD/K/PTK/2013/030', '2020-06-16', 'K', 'Departemen Produksi', 'R. Proses F Lantai 2', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(144, 146, 'PTK', 'Eksternal', 'PRD/K/PTK/2013/031', '2020-06-16', 'K', 'Departemen Produksi', 'R. Proses F Lantai 2', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(145, 31, 'HPT', 'Eksternal', 'PRD/K/HPT/2013/032', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses F Lantai 2', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(146, 31, 'HPT', 'Eksternal', 'PRD/K/HPT/2013/033', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses F Lantai 2', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(147, 31, 'HPT', 'Eksternal', 'PRD/K/HPT/2013/034', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses F Lantai 2', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(148, 31, 'HPT', 'Eksternal', 'PRD/K/HPT/2013/035', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses F Lantai 2', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(149, 31, 'HPT', 'Eksternal', 'PRD/K/HPT/2013/036', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses F Lantai 2', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(150, 95, 'STW', 'Eksternal', 'PRD/K/STW/2013/037', '2020-03-30', 'K', 'Departemen Produksi', 'R. Proses F Lantai 2', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(151, 95, 'STW', 'Eksternal', 'PRD/K/STW/2013/038', '2020-03-30', 'K', 'Departemen Produksi', 'R. Proses F Lantai 2', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(152, 95, 'STW', 'Eksternal', 'PRD/K/STW/2013/039', '2020-03-30', 'K', 'Departemen Produksi', 'R. Proses F Lantai 2', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(153, 95, 'STW', 'Eksternal', 'PRD/K/STW/2013/040', '2020-04-30', 'K', 'Departemen Produksi', 'R. Proses F Lantai 2', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(154, 95, 'STW', 'Eksternal', 'PRD/K/STW/2013/041', '2020-04-28', 'K', 'Departemen Produksi', 'R. Proses F Lantai 2', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(155, 95, 'STW', 'Eksternal', 'PRD/K/STW/2013/042', '2020-04-25', 'K', 'Departemen Produksi', 'R. Proses F Lantai 2', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(156, 95, 'STW', 'Eksternal', 'PRD/K/STW/2013/043', '2020-04-30', 'K', 'Departemen Produksi', 'R. Proses F Lantai 2', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(157, 81, 'THG', 'Eksternal', 'PRD/K/THG/2013/052', '2019-03-28', 'K', 'Departemen Produksi', 'R. WIP Produk Ruahan Cairan Kental ', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(158, 81, 'THG', 'Eksternal', 'PRD/K/THG/2013/053', '2019-03-27', 'K', 'Departemen Produksi', 'R. Pengemasan Primer Cairan Kental ', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(159, 146, 'PTK', 'Eksternal', 'PRD/K/PTK/2013/070', '2018-11-13', 'K', 'Departemen Produksi', 'R. Mixing pemanasan padat sabun (Pr', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(160, 153, 'CTE', 'Eksternal', 'PRD/K/CTE/2013/072', '2019-05-10', 'K', 'Departemen Produksi', 'Kemas Primer F1 (R.Mixing Cetak Pad', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(161, 81, 'THG', 'Eksternal', 'PRD/K/THG/2013/074', '2019-03-27', 'K', 'Departemen Produksi', 'R. Pengemasan Primer F (Kemas Prime', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(162, 31, 'HPT', 'Eksternal', 'PRD/K/HPT/2013/075', '0000-00-00', 'K', 'Departemen Produksi', 'R. Cetak padat sabun &  pengemasan ', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(163, 31, 'HPT', 'Eksternal', 'PRD/K/HPT/2013/076', '0000-00-00', 'K', 'Departemen Produksi', 'Kemas Primer F1 (R. Mixing Cetah Pa', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(164, 167, 'SHR', 'Eksternal', 'PRD/K/SHR/2013/078', '2018-11-09', 'K', 'Departemen Produksi', 'Kemas Sekunder F1 (R.Pengemasan Sek', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(165, 167, 'SHR', 'Eksternal', 'PRD/K/SHR/2013/079', '2018-11-09', 'K', 'Departemen Produksi', 'Kemas Sekunder F1 (R.Pengemasan Sek', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(166, 81, 'THG', 'Eksternal', 'PRD/K/THG/2013/092', '2019-03-28', 'K', 'Departemen Produksi', 'R. Kemas Sekunder F', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(167, 132, 'MMX', 'Eksternal', 'PRD/K/MMX/2013/099', '2019-05-27', 'K', 'Departemen Produksi', 'R. Proses G Lantai 1', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(168, 132, 'MMX', 'Eksternal', 'PRD/K/MMX/2013/100', '2020-06-16', 'K', 'Departemen Produksi', 'R. Mixing Krim, Pasta, Gel 1  F Lan', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(169, 132, 'MMX', 'Eksternal', 'PRD/K/MMX/2013/101', '2020-07-08', 'K', 'Departemen Produksi', 'R. Proses G Lantai 1', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(170, 132, 'MMX', 'Eksternal', 'PRD/K/MMX/2013/102', '2020-07-08', 'K', 'Departemen Produksi', 'R. Proses G Lantai 1', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(171, 132, 'MMX', 'Eksternal', 'PRD/K/MMX/2013/103', '2020-07-08', 'K', 'Departemen Produksi', 'R. Proses G Lantai 1', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(172, 179, 'VMX', 'Eksternal', 'PRD/K/VMX/2013/104', '2020-07-08', 'K', 'Departemen Produksi', 'R. Mixing C (Gedung G Lantai 1)', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(173, 179, 'VMX', 'Eksternal', 'PRD/K/VMX/2013/105', '2020-07-08', 'K', 'Departemen Produksi', 'R. Mixing C (Gedung G Lantai 1)', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(174, 181, 'VEM', 'Eksternal', 'PRD/K/VEM/2013/106', '2020-05-17', 'K', 'Departemen Produksi', 'R. Mixing B (Gedung G Lantai 1)', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(175, 132, 'MMX', 'Eksternal', 'PRD/K/MMX/2013/107', '2020-07-29', 'K', 'Departemen Produksi', 'R. Mixing Krim, Pasta, Gel 2 (F Lan', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(176, 31, 'HPT', 'Eksternal', 'PRD/K/HPT/2013/108', '0000-00-00', 'K', 'Departemen Produksi', 'R. Mixing Krim, Pasta, Gel Gedung G', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(177, 31, 'HPT', 'Eksternal', 'PRD/K/HPT/2013/109', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses dan Pengemasan Line 3 (Ge', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(178, 31, 'HPT', 'Eksternal', 'PRD/K/HPT/2013/110', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses dan Pengemasan Line 4 (Ge', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(179, 31, 'HPT', 'Eksternal', 'PRD/K/HPT/2013/111', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses dan Pengemasan Line 1 (Ge', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(180, 81, 'THG', 'Eksternal', 'PRD/K/THG/2013/112', '2019-09-24', 'K', 'Departemen Produksi', 'R. Timbang G Lantai 1 (Dialihkan me', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(181, 81, 'THG', 'Eksternal', 'PRD/K/THG/2013/113', '2019-09-26', 'K', 'Departemen Produksi', 'R. Mixing B (Gedung G Lantai 1)', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(182, 81, 'THG', 'Eksternal', 'PRD/K/THG/2013/114', '2019-09-26', 'K', 'Departemen Produksi', 'R. Mixing C (Proses Gedung G Lantai', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(183, 95, 'STW', 'Eksternal', 'PRD/K/STW/2013/115', '2020-02-26', 'K', 'Departemen Produksi', 'R. Produksi G1 (Proses Gedung G Lan', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(184, 81, 'THG', 'Eksternal', 'PRD/K/THG/2013/127', '2019-03-28', 'K', 'Departemen Produksi', 'R. Transit Bahan Pengemas Primer G1', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(185, 167, 'SHR', 'Eksternal', 'PRD/K/SHR/2013/133', '2018-11-08', 'K', 'Departemen Produksi', 'Kemas Sekunder G1 (R.Pengemasan Sek', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(186, 167, 'SHR', 'Eksternal', 'PRD/K/SHR/2013/134', '2018-11-08', 'K', 'Departemen Produksi', 'Kemas Sekunder G1 (R.Pengemasan Sek', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(187, 167, 'SHR', 'Eksternal', 'PRD/K/SHR/2013/135', '2018-11-07', 'K', 'Departemen Produksi', 'Kemas Sekunder G1 (R.Pengemasan Sek', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(188, 167, 'SHR', 'Eksternal', 'PRD/K/SHR/2013/136', '2018-11-08', 'K', 'Departemen Produksi', 'Kemas Sekunder G1 (R.Pengemasan Sek', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(189, 167, 'SHR', 'Eksternal', 'PRD/K/SHR/2013/137', '2018-11-08', 'K', 'Departemen Produksi', 'Kemas Sekunder G1 (R.Pengemasan Sek', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(190, 31, 'CBX', 'Eksternal', 'PRD/K/CBX/2013/139', '0000-00-00', 'K', 'Departemen Produksi', 'K. Primer F Lantai 1 (R. WIP Produk', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(191, 85, 'THM', 'Eksternal', 'PRD/K/THM/2013/149', '2018-11-30', 'K', 'Departemen Produksi', 'Kemas Primer F1 (R.Mixing Lipstik) ', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(192, 31, 'HPT', 'Eksternal', 'PRD/K/HPT/2013/151', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses G Lantai 1 Line 5', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(193, 146, 'PTK', 'Eksternal', 'PRD/K/PTK/2013/152', '2019-05-17', 'K', 'Departemen Produksi', 'R. Mixing B (Gedung G Lantai 1)', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(194, 31, 'HPT', 'Eksternal', 'PRD/K/HPT/2014/001', '0000-00-00', 'K', 'Departemen Produksi', 'R. Mixing Lipstik (Kemas Primer Ged', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(195, 31, 'HPT', 'Eksternal', 'PRD/K/HPT/2017/001', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses Line 2 Gedung G Lantai 1', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(196, 81, 'THG', 'Eksternal', 'PRD/K/THG/2017/004', '2020-08-08', 'K', 'Departemen Produksi', 'R. Proses F Lantai 2', 1, 'active', '2', NULL, NULL, NULL, NULL, NULL, NULL),
(197, 81, 'THG', 'Eksternal', 'PRD/K/THG/2017/005', '2019-11-11', 'K', 'Departemen Produksi', 'R. Proses F Lantai 2', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(198, 179, 'VMX', 'Eksternal', 'PRD/K/VMX/2017/012', '2020-07-08', 'K', 'Departemen Produksi', 'R. Mixing C (G Lantai 1)', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(199, 81, 'THG', 'Eksternal', 'PRD/K/THG/2017/013', '2019-09-16', 'K', 'Departemen Produksi', 'R. Proses dan Pengemasan Gedung G L', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(200, 81, 'THG', 'Eksternal', 'PRD/K/THG/2017/014', '2019-09-16', 'K', 'Departemen Produksi', 'R. Pengemasan dan proses (Proses Ge', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(201, 81, 'THG', 'Eksternal', 'PRD/K/THG/2017/015', '2019-09-16', 'K', 'Departemen Produksi', 'R. WIP Produk Antara (Proses Gedung', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(202, 81, 'THG', 'Eksternal', 'PRD/K/THG/2017/016', '2019-09-16', 'K', 'Departemen Produksi', 'R. Gudang Satelit Gedung G Lantai 1', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(203, 81, 'THG', 'Eksternal', 'PRD/K/THG/2017/017', '2019-11-23', 'K', 'Departemen Produksi', 'R.mixing pemanasan padat sabun (Pro', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(204, 81, 'THG', 'Eksternal', 'PRD/K/THG/2017/018', '2019-11-23', 'K', 'Departemen Produksi', 'R.mixing serbuk tabur (Proses Gedun', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(205, 81, 'THG', 'Eksternal', 'PRD/K/THG/2017/019', '2019-11-23', 'K', 'Departemen Produksi', 'R.mixing serbuk compact (Proses Ged', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(206, 81, 'THG', 'Eksternal', 'PRD/K/THG/2017/020', '2019-10-02', 'K', 'Departemen Produksi', 'R. Mixing Lipstik (Kemas Primer Ged', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(207, 81, 'THG', 'Eksternal', 'PRD/K/THG/2017/021', '2019-10-02', 'K', 'Departemen Produksi', 'R. Pengemasan Primer Krim, Pasta, G', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(208, 81, 'THG', 'Eksternal', 'PRD/K/THG/2017/022', '2019-10-01', 'K', 'Departemen Produksi', 'R. Produk Ruahan Cream, Pasta, Gel ', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(209, 81, 'THG', 'Eksternal', 'PRD/K/THG/2017/023', '2019-09-16', 'K', 'Departemen Produksi', 'R. WIP Produk Ruhan Krim, Pasta, Ge', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(210, 81, 'THG', 'Eksternal', 'PRD/K/THG/2017/024', '2019-09-16', 'K', 'Departemen Produksi', 'R. Pengemasan Primer Cairan Kental ', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(211, 81, 'THG', 'Eksternal', 'PRD/K/THG/2017/025', '2019-09-16', 'K', 'Departemen Produksi', 'R. Pengemasan Primer Cairan Kental ', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(212, 81, 'THG', 'Eksternal', 'PRD/K/THG/2017/026', '2019-09-16', 'K', 'Departemen Produksi', 'R. Pengemasan Primer erbuk Tabur (K', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(213, 81, 'THG', 'Eksternal', 'PRD/K/THG/2017/030', '2019-10-02', 'K', 'Departemen Produksi', 'Kemas Sekunder G1 (R.Pengemasan Sek', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(214, 81, 'THG', 'Eksternal', 'PRD/K/THG/2017/031', '2019-10-03', 'K', 'Departemen Produksi', 'R. Adm. Kemas Sekunder F', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(215, 81, 'THG', 'Eksternal', 'PRD/K/THG/2017/032', '2019-10-03', 'K', 'Departemen Produksi', 'Kemas Sekunder G1 (R.Pengemasan Sek', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(216, 81, 'THG', 'Eksternal', 'PRD/K/THG/2017/033', '2019-10-02', 'K', 'Departemen Produksi', 'R. Kemas Sekunder F', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(217, 81, 'THG', 'Eksternal', 'PRD/K/THG/2017/035', '2019-03-27', 'K', 'Departemen Produksi', 'Kemas Sekunder G2 (R.Pengemasan Sek', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(218, 81, 'THG', 'Eksternal', 'PRD/K/THG/2017/036', '2019-03-28', 'K', 'Departemen Produksi', 'Kemas Primer G2 (R.Pengemasan Prime', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(219, 81, 'THG', 'Eksternal', 'PRD/K/THG/2017/037', '2019-03-27', 'K', 'Departemen Produksi', 'Kemas Primer G2 (R.Coding).', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(220, 81, 'THG', 'Eksternal', 'PRD/K/THG/2017/038', '2019-10-02', 'K', 'Departemen Produksi', 'K. Primer F1 (R.Pengemasan Primer I', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(221, 167, 'SHR', 'Eksternal', 'PRD/K/SHR/2017/040', '0000-00-00', 'K', 'Departemen Produksi', 'Kemas Sekunder F1 (R.Pengemasan Sek', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(222, 167, 'SHR', 'Eksternal', 'PRD/K/SHR/2017/041', '0000-00-00', 'K', 'Departemen Produksi', 'Kemas Sekunder F1 (R.Pengemasan Sek', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(223, 132, 'MMX', 'Eksternal', 'PRD/K/MMX/2018/007', '2020-06-15', 'K', 'Departemen Produksi', 'R. Proses G Lantai 2', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(224, 132, 'MMX', 'Eksternal', 'PRD/K/MMX/2018/008', '2020-06-15', 'K', 'Departemen Produksi', 'R. Proses G Lantai 2', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(225, 132, 'MMX', 'Eksternal', 'PRD/K/MMX/2018/009', '2020-06-15', 'K', 'Departemen Produksi', 'R. Proses G Lantai 2', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(226, 132, 'MMX', 'Eksternal', 'PRD/K/MMX/2018/010', '2020-06-15', 'K', 'Departemen Produksi', 'R. Proses G Lantai 2', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(227, 179, 'VMX', 'Eksternal', 'PRD/K/VMX/2018/011', '2020-06-15', 'K', 'Departemen Produksi', 'R. Proses G Lantai 2', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(228, 81, 'THG', 'Eksternal', 'PRD/K/THG/2018/012', '2020-08-08', 'K', 'Departemen Produksi', 'R. Proses G Lantai 2', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(229, 81, 'THG', 'Eksternal', 'PRD/K/THG/2018/013', '2020-02-05', 'K', 'Departemen Produksi', 'R. Proses G Lantai 2', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(230, 81, 'THG', 'Eksternal', 'PRD/K/THG/2018/014', '2020-02-05', 'K', 'Departemen Produksi', 'R. Proses G Lantai 2', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(231, 81, 'THG', 'Eksternal', 'PRD/K/THG/2018/015', '2020-02-05', 'K', 'Departemen Produksi', 'R. Proses G Lantai 2', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(232, 167, 'SHR', 'Eksternal', 'PRD/K/SHR/2018/029', '2018-11-06', 'K', 'Departemen Produksi', 'Kemas Sekunder G2 (R.Pengemasan Sek', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(233, 167, 'SHR', 'Eksternal', 'PRD/K/SHR/2018/030', '2018-11-06', 'K', 'Departemen Produksi', 'Kemas Sekunder G2 (R.Pengemasan Sek', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(234, 167, 'SHR', 'Eksternal', 'PRD/K/SHR/2018/031', '2018-11-05', 'K', 'Departemen Produksi', 'Kemas Sekunder G2 (R.Pengemasan Sek', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(235, 167, 'SHR', 'Eksternal', 'PRD/K/SHR/2018/032', '2018-11-06', 'K', 'Departemen Produksi', 'Kemas Sekunder G2 (R.Pengemasan Sek', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(236, 35, 'TMB', 'Eksternal', 'PRD/K/TMB/2018/033', '2020-08-05', 'K', 'Departemen Produksi', 'R. Timbang F Lantai 2', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(237, 31, 'HPT', 'Eksternal', 'PRD/K/HPT/2018/040', '0000-00-00', 'K', 'Departemen Produksi', 'R. Mixing Cairan G Lantai 2', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(238, 31, 'HPT', 'Eksternal', 'PRD/K/HPT/2018/041', '0000-00-00', 'K', 'Departemen Produksi', 'R. Mixing Cream G Lantai 1', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(239, 31, 'HPT', 'Eksternal', 'PRD/K/HPT/2018/042', '0000-00-00', 'K', 'Departemen Produksi', 'R. Mixing Cream G Lantai 1', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(240, 31, 'HPT', 'Eksternal', 'PRD/K/HPT/2018/043', '0000-00-00', 'K', 'Departemen Produksi', 'R. Mixing Cream G Lantai 1', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(241, 31, 'HPT', 'Eksternal', 'PRD/K/HPT/2018/044', '0000-00-00', 'K', 'Departemen Produksi', 'R. Mixing Cream, Pasta, Gel, Cair, ', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(242, 167, 'SHR', 'Eksternal', 'PRD/K/SHR/2018/045', '2018-11-07', 'K', 'Departemen Produksi', 'Kemas Sekunder F1 (R.Pengemasan Sek', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(243, 95, 'STW', 'Eksternal', 'PRD/K/STW/2018/046', '2020-02-27', 'K', 'Departemen Produksi', 'R. Proses G Lantai 1', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(244, 95, 'STW', 'Eksternal', 'PRD/K/STW/2018/047', '2020-02-29', 'K', 'Departemen Produksi', 'R. Proses G Lantai 1', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(245, 95, 'STW', 'Eksternal', 'PRD/K/STW/2018/048', '2020-02-27', 'K', 'Departemen Produksi', 'R. Proses G Lantai 1', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(246, 95, 'STW', 'Eksternal', 'PRD/K/STW/2018/049', '2020-02-28', 'K', 'Departemen Produksi', 'R. Proses G Lantai 1', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(247, 95, 'STW', 'Eksternal', 'PRD/K/STW/2018/050', '2020-02-28', 'K', 'Departemen Produksi', 'R. Proses G Lantai 1', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(248, 95, 'STW', 'Eksternal', 'PRD/K/STW/2018/051', '2020-03-04', 'K', 'Departemen Produksi', 'R. Proses G Lantai 1', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(249, 95, 'STW', 'Eksternal', 'PRD/K/STW/2018/052', '2020-03-03', 'K', 'Departemen Produksi', 'R. Proses G Lantai 1', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(250, 95, 'STW', 'Eksternal', 'PRD/K/STW/2018/053', '2020-02-22', 'K', 'Departemen Produksi', 'R. Proses G Lantai 1', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(251, 95, 'STW', 'Eksternal', 'PRD/K/STW/2018/054', '2020-02-25', 'K', 'Departemen Produksi', 'R. Proses G Lantai 1', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(252, 95, 'STW', 'Eksternal', 'PRD/K/STW/2018/055', '2020-03-23', 'K', 'Departemen Produksi', 'R. Mixing Cream, Pasta, Gel, Cair, ', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(253, 95, 'STW', 'Eksternal', 'PRD/K/STW/2018/056', '2020-06-30', 'K', 'Departemen Produksi', 'R.mixing pemanasan padat sabun Gedu', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(254, 95, 'STW', 'Eksternal', 'PRD/K/STW/2018/057', '2020-06-29', 'K', 'Departemen Produksi', 'R. Mixing Cream, Pasta, Gel, Cair &', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(255, 95, 'STW', 'Eksternal', 'PRD/K/STW/2018/058', '2020-06-30', 'K', 'Departemen Produksi', 'R. Mixing Cream, Pasta, Gel, Cair &', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(256, 95, 'STW', 'Eksternal', 'PRD/K/STW/2018/059', '2020-06-29', 'K', 'Departemen Produksi', 'R. Mixing Cream, Pasta, Gel, Cair &', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(257, 85, 'THM', 'Eksternal', 'PRD/K/THM/2018/060', '2020-02-12', 'K', 'Departemen Produksi', 'R. Mixing Cair 1 Gedung F Lantai 2', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(258, 85, 'THM', 'Eksternal', 'PRD/K/THM/2018/061', '2020-02-12', 'K', 'Departemen Produksi', 'R. Mixing Cair & Cairan Kental 2 Ge', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(259, 85, 'THM', 'Eksternal', 'PRD/K/THM/2018/062', '2020-04-25', 'K', 'Departemen Produksi', 'R. Mixing Cair & Cairan Kental 3 Ge', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(260, 85, 'THM', 'Eksternal', 'PRD/K/THM/2018/063', '2020-06-30', 'K', 'Departemen Produksi', 'R. Mixing Cair & Cairan Kental 4 Ge', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(261, 85, 'THM', 'Eksternal', 'PRD/K/THM/2018/064', '2020-02-25', 'K', 'Departemen Produksi', 'R. Proses & Pengemasan Line 1 Gedun', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(262, 85, 'THM', 'Eksternal', 'PRD/K/THM/2018/065', '2020-04-25', 'K', 'Departemen Produksi', 'R. Proses & Pengemasan Line 2 Gedun', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(263, 85, 'THM', 'Eksternal', 'PRD/K/THM/2018/066', '2020-02-25', 'K', 'Departemen Produksi', 'R. Proses & Pengemasan Line 3 Gedun', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(264, 85, 'THM', 'Eksternal', 'PRD/K/THM/2018/067', '2020-02-24', 'K', 'Departemen Produksi', 'R. Proses & Pengemasan Line 4 Gedun', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(265, 85, 'THM', 'Eksternal', 'PRD/K/THM/2018/068', '2019-07-04', 'K', 'Departemen Produksi', 'R. Proses & Pengemasan Line 5 Gedun', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(266, 85, 'THM', 'Eksternal', 'PRD/K/THM/2018/069', '2020-06-30', 'K', 'Departemen Produksi', 'R. Proses & Pengemasan Line 6 Gedun', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(267, 85, 'THM', 'Eksternal', 'PRD/K/THM/2018/070', '2020-06-30', 'K', 'Departemen Produksi', 'R. Mixing C Cream, Pasta, Gel Cair ', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(268, 85, 'THM', 'Eksternal', 'PRD/K/THM/2018/071', '2019-05-15', 'K', 'Departemen Produksi', 'R. Satelit Gedung G Lantai 1 (Kulka', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(269, 85, 'THM', 'Eksternal', 'PRD/K/THM/2018/072', '2019-05-03', 'K', 'Departemen Produksi', 'R.mixing pemanasan padat sabun Gedu', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(270, 85, 'THM', 'Eksternal', 'PRD/K/THM/2018/073', '2020-02-24', 'K', 'Departemen Produksi', 'R. Mixing Cream, Pasta, Gel, Cair &', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(271, 85, 'THM', 'Eksternal', 'PRD/K/THM/2018/074', '2020-02-25', 'K', 'Departemen Produksi', 'R. Mixing Cream, Pasta, Gel, Cair &', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(272, 85, 'THM', 'Eksternal', 'PRD/K/THM/2018/075', '2020-06-30', 'K', 'Departemen Produksi', 'R. Mixing Cream, Pasta, Gel, Cair &', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(273, 85, 'THM', 'Eksternal', 'PRD/K/THM/2018/076', '2020-08-14', 'K', 'Departemen Produksi', 'R. Mixing Cream, Pasta, Gel, Cair &', 1, 'active', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(274, 81, 'THG', 'Eksternal', 'PRD/K/THG/2018/077', '2020-07-14', 'K', 'Departemen Produksi', 'R. Mixing Cair dan Cairan Kental Ge', 1, 'active', '2', NULL, NULL, NULL, NULL, NULL, NULL),
(275, 95, 'STW', 'Eksternal', 'PRD/K/STW/2018/078', '2020-07-14', 'K', 'Departemen Produksi', 'R. Mixing Cair dan Cairan Kental Ge', 1, 'active', '2', NULL, NULL, NULL, NULL, NULL, NULL),
(276, 31, 'DRR', 'Eksternal', 'PRD/K/DRR/2019/002', '0000-00-00', 'K', 'Departemen Produksi', 'R. Mixing serbuk tabur & compact Ge', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(277, 81, 'THG', 'Eksternal', 'PRD/K/THG/2019/003', '2020-07-14', 'K', 'Departemen Produksi', 'R. Satelit Gedung G Lantai 2', 1, 'active', '2', NULL, NULL, NULL, NULL, NULL, NULL),
(278, 95, 'STW', 'Eksternal', 'PRD/K/STW/2019/004', '2020-07-14', 'K', 'Departemen Produksi', 'R. Proses G Lantai 1', 1, 'active', '2', NULL, NULL, NULL, NULL, NULL, NULL),
(279, 81, 'THG', 'Eksternal', 'PRD/K/THG/2019/006', '2019-10-09', 'K', 'Departemen Produksi', 'R. Pengemasan Primer F (Koridor)', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(280, 81, 'THG', 'Eksternal', 'WH/K/THG/2013/010', '2019-09-13', 'K', 'Departemen Gudang', 'R. FG Suhu Kamar (F)', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(281, 280, 'LPN', 'Eksternal', 'WH/K/LPN/2013/016', '2019-07-09', 'K', 'Departemen Gudang', 'R. RM Suhu Kamar (F)', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(282, 280, 'LPN', 'Eksternal', 'WH/K/LPN/2013/018', '2019-10-05', 'K', 'Departemen Gudang', 'R. FG Suhu Kamar (F)', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(283, 280, 'LPN', 'Eksternal', 'WH/K/LPN/2013/019', '2019-10-05', 'K', 'Departemen Gudang', 'R. FG Suhu Kamar (F)', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(284, 81, 'THG', 'Eksternal', 'WH/K/THG/2013/028', '2019-09-24', 'K', 'Departemen Gudang', 'R. Timbang G Lantai 1 (Dialihkan da', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(285, 81, 'THG', 'Eksternal', 'WH/K/THG/2016/001', '2019-10-22', 'K', 'Departemen Gudang', 'R. Timbang (F)', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(286, 81, 'THG', 'Eksternal', 'WH/K/THG/2016/002', '2019-10-22', 'K', 'Departemen Gudang', 'R. Sampling (F)', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(287, 280, 'LPN', 'Eksternal', 'WH/K/LPN/2016/003', '2020-02-22', 'K', 'Departemen Gudang', 'R. FG Suhu Kamar (F) (Rusak)', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `e04_ts_calibration` (`calibration_id`, `tools_id`, `tools_code`, `calibration_type`, `calibration_code`, `startcalibration_date`, `scope_code`, `location_name`, `position_name`, `calibration_status`, `statusdata`, `reminder`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(288, 81, 'THG', 'Eksternal', 'WH/K/THG/2017/001', '2018-07-03', 'K', 'Departemen Gudang', 'Cadangan', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(289, 81, 'THG', 'Eksternal', 'WH/K/THG/2017/002', '2019-09-16', 'K', 'Departemen Gudang', 'R. Gudang Satelit Gedung G Lantai 1', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(290, 280, 'LPN', 'Eksternal', 'WH/K/LPN/2018/001', '2019-07-09', 'K', 'Departemen Gudang', 'R. RM Suhu Kamar (F)', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(291, 280, 'LPN', 'Eksternal', 'WH/K/LPN/2018/002', '2019-11-18', 'K', 'Departemen Gudang', 'R. FG Suhu Kamar (E)', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(292, 280, 'LPN', 'Eksternal', 'WH/K/LPN/2018/003', '2019-11-18', 'K', 'Departemen Gudang', 'R. FG Suhu Kamar (E)', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(293, 81, 'THG', 'Eksternal', 'WH/K/THG/2018/004', '2020-02-26', 'K', 'Departemen Gudang', 'R. FG Suhu Kamar (E)', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(294, 81, 'THG', 'Eksternal', 'WH/K/THG/2018/006', '2020-02-26', 'K', 'Departemen Gudang', 'R. FG Maklon Suhu AC (E)', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(295, 81, 'THG', 'Eksternal', 'WH/K/THG/2018/007', '2020-03-20', 'K', 'Departemen Gudang', 'R. RM Suhu Kamar (F)', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(296, 81, 'THG', 'Eksternal', 'WH/K/THG/2018/008', '2020-03-20', 'K', 'Departemen Gudang', 'R. RM Suhu AC (F)', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(297, 81, 'THG', 'Eksternal', 'WH/K/THG/2018/009', '2019-09-13', 'K', 'Departemen Gudang', 'R. FG Suhu AC (F)', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(298, 81, 'THG', 'Eksternal', 'WH/K/THG/2018/011', '2020-02-26', 'K', 'Departemen Gudang', 'R. Timbang 2', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(299, 81, 'THG', 'Eksternal', 'WH/K/THG/2018/012', '2020-02-26', 'K', 'Departemen Gudang', 'Cadangan', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(300, 81, 'THG', 'Eksternal', 'WH/K/THG/2018/013', '2020-02-26', 'K', 'Departemen Gudang', 'R. Timbang 3', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(301, 81, 'THG', 'Eksternal', 'WH/K/THG/2018/014', '2020-02-26', 'K', 'Departemen Gudang', 'Gudang RM Suhu Kamar 2', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(302, 81, 'THG', 'Eksternal', 'WH/K/THG/2018/015', '2019-11-18', 'K', 'Departemen Gudang', 'R. RM Karantina', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(303, 90, 'MAG', 'Eksternal', 'WH/K/MAG/2018/016', '2019-11-12', 'K', 'Departemen Gudang', 'R. Timbang 3', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(304, 90, 'MAG', 'Eksternal', 'WH/K/MAG/2018/017', '2019-11-12', 'K', 'Departemen Gudang', 'R. Timbang 3', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(305, 90, 'MAG', 'Eksternal', 'WH/K/MAG/2018/018', '2019-11-12', 'K', 'Departemen Gudang', 'R. Timbang 3', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(306, 85, 'THM', 'Eksternal', 'WH/K/THM/2018/020', '0000-00-00', 'K', 'Departemen Gudang', 'R. Satelit Gedung G Lantai 1 (Kulka', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(307, 81, 'THG', 'Eksternal', 'WH/K/THG/2019/001', '2019-09-12', 'K', 'Departemen Gudang', 'Gudang RM', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(308, 81, 'THG', 'Eksternal', 'WH/K/THG/2019/002', '2019-09-12', 'K', 'Departemen Gudang', 'Gudang RM', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(309, 81, 'THG', 'Eksternal', 'WH/K/THG/2019/003', '2019-09-12', 'K', 'Departemen Gudang', 'Gudang FG', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(310, 81, 'THG', 'Eksternal', 'WH/K/THG/2019/004', '2019-09-12', 'K', 'Departemen Gudang', 'Gudang FG', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(311, 81, 'THG', 'Eksternal', 'WH/K/THG/2019/005', '2019-09-13', 'K', 'Departemen Gudang', 'Gudang FG', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(312, 81, 'THG', 'Eksternal', 'WH/K/THG/2019/006', '2019-10-22', 'K', 'Departemen Gudang', 'Gudang FG Theraskin & Maklon (Cadan', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(313, 81, 'THG', 'Eksternal', 'WH/K/THG/2019/007', '0000-00-00', 'K', 'Departemen Gudang', 'Gudang FG Theraskin & Maklon (Cadan', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(314, 81, 'THG', 'Eksternal', 'WH/K/THG/2019/008', '0000-00-00', 'K', 'Departemen Gudang', 'Gudang FG Theraskin & Maklon (Cadan', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(315, 85, 'THM', 'Eksternal', 'WH/K/THM/2019/009', '2019-10-21', 'K', 'Departemen Gudang', 'Gudang FG Theraskin & Maklon (Cadan', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(316, 85, 'THM', 'Eksternal', 'WH/K/THM/2019/010', '2019-10-22', 'K', 'Departemen Gudang', 'Gudang FG Theraskin & Maklon (Cadan', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(317, 85, 'THM', 'Eksternal', 'WH/K/THM/2019/011', '0000-00-00', 'K', 'Departemen Gudang', 'R. FG Suhu Kamar (F)', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(318, 38, 'HPL', 'Eksternal', 'RND/O/HPL/2013/001', '2020-01-21', 'O', 'Departemen R&d Cosmetic', 'R. Instrumen', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(319, 38, 'HPL', 'Eksternal', 'RND/O/HPL/2013/002', '2020-01-22', 'O', 'Departemen R&d Cosmetic', 'R. Instrumen', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(320, 38, 'HPL', 'Eksternal', 'RND/O/HPL/2013/003', '2020-01-23', 'O', 'Departemen R&d Cosmetic', 'R. Instrumen', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(321, 352, 'CCR', 'Eksternal', 'RND/O/CCR/2013/005', '2019-10-14', 'O', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(322, 5, 'VIS', 'Eksternal', 'RND/O/VIS/2013/006', '2020-06-17', 'O', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(323, 334, 'MIC', 'Eksternal', 'RND/O/MIC/2013/007', '2019-02-19', 'O', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(324, 329, 'WTB', 'Eksternal', 'RND/O/WTB/2013/008', '2020-02-03', 'O', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(325, 355, 'VMR', 'Eksternal', 'RND/O/VMR/2013/009', '2020-02-03', 'O', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(326, 355, 'VMR', 'Eksternal', 'RND/O/VMR/2013/010', '2020-02-03', 'O', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(327, 355, 'VMR', 'Eksternal', 'RND/O/VMR/2013/011', '2020-02-03', 'O', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(328, 81, 'THG', 'Eksternal', 'RND/O/THG/2013/012', '2020-06-30', 'O', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(329, 81, 'THG', 'Eksternal', 'RND/O/THG/2013/013', '2020-06-30', 'O', 'Departemen R&d Cosmetic', 'R. Instrumen', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(330, 81, 'THG', 'Eksternal', 'RND/O/THG/2013/014', '2020-06-30', 'O', 'Departemen R&d Cosmetic', 'R. Climatic Chamber', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(331, 81, 'THG', 'Eksternal', 'RND/O/THG/2013/015', '2020-09-10', 'O', 'Departemen R&d Cosmetic', 'Dept. R&D (Cadangan)', 1, 'active', '0', NULL, NULL, NULL, NULL, NULL, NULL),
(332, 81, 'THG', 'Eksternal', 'RND/O/THG/2013/016', '2020-09-10', 'O', 'Departemen R&d Cosmetic', 'Dept. R&D (Cadangan)', 1, 'active', '0', NULL, NULL, NULL, NULL, NULL, NULL),
(333, 81, 'THG', 'Eksternal', 'RND/O/THG/2013/017', '2020-01-07', 'O', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(334, 81, 'THG', 'Eksternal', 'RND/O/THG/2013/018', '2020-01-07', 'O', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(335, 81, 'THG', 'Eksternal', 'RND/O/THG/2013/019', '2020-01-07', 'O', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(336, 13, 'MIP', 'Eksternal', 'RND/O/MIP/2013/020', '2020-07-27', 'O', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(337, 13, 'MIP', 'Eksternal', 'RND/O/MIP/2013/021', '2020-05-27', 'O', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(338, 13, 'MIP', 'Eksternal', 'RND/O/MIP/2013/022', '2020-06-03', 'O', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(339, 13, 'MIP', 'Eksternal', 'RND/O/MIP/2013/023', '2020-06-03', 'O', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(340, 13, 'MIP', 'Eksternal', 'RND/O/MIP/2013/024', '2020-06-03', 'O', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(341, 13, 'MIP', 'Eksternal', 'RND/O/MIP/2013/025', '2020-06-03', 'O', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(342, 13, 'MIP', 'Eksternal', 'RND/O/MIP/2013/026', '2020-06-03', 'O', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(343, 13, 'MIP', 'Eksternal', 'RND/O/MIP/2013/027', '2020-06-03', 'O', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(344, 45, 'MAP', 'Eksternal', 'RND/O/MAP/2013/028', '2020-06-04', 'O', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(345, 45, 'MAP', 'Eksternal', 'RND/O/MAP/2013/029', '2020-06-04', 'O', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(346, 352, 'CCR', 'Eksternal', 'RND/O/CCR/2014/001', '2019-10-15', 'O', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(347, 69, 'PWR', 'Eksternal', 'RND/O/PWR/2014/002', '2020-04-14', 'O', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(348, 20, 'BTN', 'Eksternal', 'RND/O/BTN/2015/001', '2020-06-23', 'O', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(349, 20, 'BTN', 'Eksternal', 'RND/O/BTN/2015/002', '2020-06-30', 'O', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(350, 4, 'DCR', 'Eksternal', 'RND/O/DCR/2015/003', '2019-11-18', 'O', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(351, 352, 'CCR', 'Eksternal', 'RND/O/CCR/2016/001', '2020-08-24', 'O', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(352, 20, 'BTN', 'Eksternal', 'RND/O/BTN/2019/001', '2020-06-30', 'O', 'Departemen R&d Cosmetic', 'R. Lab Preparasi', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(353, 20, 'BTN', 'Eksternal', 'RND/O/BTN/2019/002', '2020-06-30', 'O', 'Departemen R&d Cosmetic', 'R. Lab Preparasi', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(354, 28, 'PHC', 'Eksternal', 'RND/O/PHC/2019/005', '2020-06-15', 'O', 'Departemen R&d Cosmetic', 'R. Lab Preparasi', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(355, 368, 'TCR', 'Eksternal', 'RND/O/TCR/2019/007', '2019-11-23', 'O', 'Departemen R&d Cosmetic', 'Lemari Pendingin', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(356, 368, 'TCR', 'Eksternal', 'RND/O/TCR/2019/008', '2019-11-23', 'O', 'Departemen R&d Cosmetic', 'Lemari Pendingin', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(357, 31, 'HPT', 'Eksternal', 'RND/O/HPT/2020/001', '2020-11-02', 'O', 'Departemen R&d Cosmetic', 'Ruang Manager Staff RND', 1, 'active', '1', NULL, NULL, 135, '2020-11-02 14:14:54', NULL, NULL),
(358, 4, 'DCR', 'Eksternal', 'RND/O/DCR/2020/002', '0000-00-00', 'O', 'Departemen R&d Cosmetic', 'R. Preparasi', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(359, 334, 'MIC', 'Eksternal', 'RND/O/MIC/2020/003', '2020-04-14', 'O', 'Departemen R&d Cosmetic', 'R. Preparasi', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(360, 37, 'CEN', 'Eksternal', 'QC/O/CEN/2013/001', '2020-06-22', 'O', 'Departemen QC', 'R. Lab QC', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(361, 8, 'MAR', 'Eksternal', 'QC/O/MAR/2013/002', '2020-06-18', 'O', 'Departemen QC', 'R. Lab QC', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(362, 38, 'HPL', 'Eksternal', 'QC/O/HPL/2013/003', '2020-08-26', 'O', 'Departemen QC', 'R. Instrumen', 1, 'active', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(363, 11, 'KFR', 'Eksternal', 'QC/O/KFR/2013/004', '2020-06-17', 'O', 'Departemen QC', 'R. Lab QC', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(364, 81, 'THG', 'Eksternal', 'QC/O/THG/2013/005', '0000-00-00', 'O', 'Departemen QC', 'R. Instrumen', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(365, 28, 'PHC', 'Eksternal', 'QC/O/PHC/2013/007', '2020-06-22', 'O', 'Departemen QC', 'R. IPC Produksi', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(366, 6, 'PHM', 'Eksternal', 'QC/O/PHM/2013/009', '0000-00-00', 'O', 'Departemen QC', 'R. IPC Produksi', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(367, 5, 'VIS', 'Eksternal', 'QC/O/VIS/2013/010', '0000-00-00', 'O', 'Departemen QC', 'R. IPC Produksi', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(368, 88, 'VCR', 'Eksternal', 'QC/O/VCR/2013/011', '2020-06-26', 'O', 'Departemen QC', 'R. Lab QC', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(369, 81, 'THG', 'Eksternal', 'QC/O/THG/2013/012', '0000-00-00', 'O', 'Departemen QC', 'R. Uji Cemaran Mikrobiologi', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(370, 88, 'VCR', 'Eksternal', 'QC/O/VCR/2013/013', '2020-06-05', 'O', 'Departemen QC', 'R. IPC Produksi', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(371, 4, 'DCR', 'Eksternal', 'QC/O/DCR/2013/014', '2020-06-24', 'O', 'Departemen QC', 'R. Lab QC', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(372, 81, 'THG', 'Eksternal', 'QC/O/THG/2013/015', '2020-06-24', 'O', 'Departemen QC', 'R. IPC Produksi', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(373, 80, 'INC', 'Eksternal', 'QC/O/INC/2013/016', '2020-06-22', 'O', 'Departemen QC', 'R. Preparasi Mikrobiologi', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(374, 78, 'ACL', 'Eksternal', 'QC/O/ACL/2013/017', '2020-06-22', 'O', 'Departemen QC', 'R. Preparasi Mikrobiologi', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(375, 76, 'OVN', 'Eksternal', 'QC/O/OVN/2013/019', '2020-06-18', 'O', 'Departemen QC', 'R. Preparasi Mikrobiologi', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(376, 80, 'INC', 'Eksternal', 'QC/O/INC/2013/020', '2020-06-18', 'O', 'Departemen QC', 'R. Preparasi Mikrobiologi', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(377, 10, 'ASR', 'Eksternal', 'QC/O/ASR/2013/021', '2019-10-31', 'O', 'Departemen QC', 'R. Preparasi Mikrobiologi', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(378, 81, 'THG', 'Eksternal', 'QC/O/THG/2013/022', '0000-00-00', 'O', 'Departemen QC', 'R. Uji Potensi Mikrobiologi', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(379, 45, 'MAP', 'Eksternal', 'QC/O/MAP/2013/024', '2019-11-22', 'O', 'Departemen QC', 'R. Preparasi Mikrobiologi', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(380, 81, 'THG', 'Eksternal', 'QC/O/THG/2013/025', '2020-07-30', 'O', 'Departemen QC', 'R. Pertinggal Non AC', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(381, 81, 'THG', 'Eksternal', 'QC/O/THG/2013/027', '0000-00-00', 'O', 'Departemen QC', 'R. Preparasi Mikrobiologi (Media)', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(382, 81, 'THG', 'Eksternal', 'QC/O/THG/2013/029', '2020-06-24', 'O', 'Departemen QC', 'R. Lab QC', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(383, 46, 'SFM', 'Eksternal', 'QC/O/SFM/2013/030', '2020-05-27', 'O', 'Departemen QC', 'R. Instrumen', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(384, 88, 'VCR', 'Eksternal', 'QC/O/VCR/2013/036', '0000-00-00', 'O', 'Departemen QC', 'R. Lab QC', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(385, 88, 'VCR', 'Eksternal', 'QC/O/VCR/2013/037', '0000-00-00', 'O', 'Departemen QC', 'R. IPC Produksi', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(386, 329, 'WTB', 'Eksternal', 'QC/O/WTB/2013/046', '2020-06-30', 'O', 'Departemen QC', 'R. Lab QC', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(387, 330, 'NVN', 'Eksternal', 'QC/O/NVN/2013/049', '2020-06-18', 'O', 'Departemen QC', 'R. Lab QC', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(388, 81, 'THG', 'Eksternal', 'QC/O/THG/2014/001', '2020-06-24', 'O', 'Departemen QC', 'R. Preparasi Mikrobiologi', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(389, 81, 'THG', 'Eksternal', 'QC/O/THG/2014/002', '2020-06-24', 'O', 'Departemen QC', 'R. Pertinggal AC', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(390, 5, 'VIS', 'Eksternal', 'QC/O/VIS/2014/003', '2020-01-17', 'O', 'Departemen QC', 'R. IPC Produksi', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(391, 78, 'ACL', 'Eksternal', 'QC/O/ACL/2014/004', '2020-08-25', 'O', 'Departemen QC', 'R. Preparasi Mikrobiologi', 1, 'active', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(392, 334, 'MIC', 'Eksternal', 'QC/O/MIC/2014/005', '2020-06-18', 'O', 'Departemen QC', 'R. Lab QC', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(393, 48, 'PCR', 'Eksternal', 'QC/O/PCR/2014/006', '2020-02-13', 'O', 'Departemen QC', 'R. Lab QC', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(394, 90, 'MAG', 'Eksternal', 'QC/O/MAG/2014/007', '2020-03-09', 'O', 'Departemen QC', 'R. Antara Mikrobiologi', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(395, 90, 'MAG', 'Eksternal', 'QC/O/MAG/2014/008', '2020-03-09', 'O', 'Departemen QC', 'R. Uji Cemaran Mikroba Mikrobiologi', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(396, 90, 'MAG', 'Eksternal', 'QC/O/MAG/2014/009', '2020-03-09', 'O', 'Departemen QC', 'R. Uji Potensi Mikrobiologi', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(397, 81, 'THG', 'Eksternal', 'QC/O/THG/2015/001', '2020-05-28', 'O', 'Departemen QC', 'R. Antara Mikrobiologi', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(398, 13, 'MIP', 'Eksternal', 'QC/O/MIP/2015/002', '2020-06-02', 'O', 'Departemen QC', 'R. Preparasi Mikrobiologi', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(399, 20, 'BTN', 'Eksternal', 'QC/O/BTN/2015/005', '2020-01-10', 'O', 'Departemen QC', 'R. Timbang', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(400, 20, 'BTN', 'Eksternal', 'QC/O/BTN/2015/006', '2020-01-10', 'O', 'Departemen QC', 'R. Timbang', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(401, 90, 'MAG', 'Eksternal', 'QC/O/MAG/2015/007', '2020-03-09', 'O', 'Departemen QC', 'R. Preparasi Mikrobiologi', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(402, 52, 'TOC', 'Eksternal', 'QC/O/TOC/2016/001', '2018-09-17', 'O', 'Departemen QC', 'R. Lab QC', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(403, 81, 'THG', 'Eksternal', 'QC/O/THG/2016/002', '2020-06-24', 'O', 'Departemen QC', 'R. Sampling Gudang B', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(404, 81, 'THG', 'Eksternal', 'QC/O/THG/2016/003', '2020-06-24', 'O', 'Departemen QC', 'R. Pertinggal AC', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(405, 81, 'THG', 'Eksternal', 'QC/O/THG/2016/004', '2020-06-24', 'O', 'Departemen QC', 'Biosafety Cabinet', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(406, 81, 'THG', 'Eksternal', 'QC/O/THG/2016/005', '0000-00-00', 'O', 'Departemen QC', 'Laminar Air Flow', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(407, 81, 'THG', 'Eksternal', 'QC/O/THG/2016/006', '0000-00-00', 'O', 'Departemen QC', 'R. Lab QC', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(408, 81, 'THG', 'Eksternal', 'QC/O/THG/2016/007', '0000-00-00', 'O', 'Departemen QC', 'R. Lab QC', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(409, 81, 'THG', 'Eksternal', 'QC/O/THG/2016/008', '0000-00-00', 'O', 'Departemen QC', 'R. Lab QC', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(410, 95, 'STW', 'Eksternal', 'QC/O/STW/2016/010', '0000-00-00', 'O', 'Departemen QC', 'R. IPC Produksi', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(411, 9, 'MPT', 'Eksternal', 'QC/O/MPT/2017/002', '0000-00-00', 'O', 'Departemen QC', 'R. Lab QC', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(412, 13, 'MIP', 'Eksternal', 'QC/O/MIP/2017/003', '2020-02-26', 'O', 'Departemen QC', 'R. Preparasi Mikrobiologi', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(413, 350, 'CCH', 'Eksternal', 'QC/O/CCH/2017/004', '2020-07-17', 'O', 'Departemen QC', 'R. Pertinggal', 1, 'active', '2', NULL, NULL, NULL, NULL, NULL, NULL),
(414, 95, 'STW', 'Eksternal', 'QC/O/STW/2017/005', '0000-00-00', 'O', 'Departemen QC', 'R. IPC Produksi', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(415, 81, 'THG', 'Eksternal', 'PRD/O/THG/2013/004', '2020-06-25', 'O', 'Departemen Produksi', 'R. Proses 1', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(416, 81, 'THG', 'Eksternal', 'PRD/O/THG/2013/005', '2020-07-13', 'O', 'Departemen Produksi', 'R. Proses 4', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(417, 81, 'THG', 'Eksternal', 'PRD/O/THG/2013/006', '2020-06-26', 'O', 'Departemen Produksi', 'R. Proses 5', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(418, 81, 'THG', 'Eksternal', 'PRD/O/THG/2013/007', '2020-06-26', 'O', 'Departemen Produksi', 'R. Produk Ruahan', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(419, 81, 'THG', 'Eksternal', 'PRD/O/THG/2013/008', '2020-08-08', 'O', 'Departemen Produksi', 'R. Timbang', 1, 'active', '2', NULL, NULL, NULL, NULL, NULL, NULL),
(420, 81, 'THG', 'Eksternal', 'PRD/O/THG/2013/009', '2020-07-13', 'O', 'Departemen Produksi', 'R. Kemas Primer 1', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(421, 81, 'THG', 'Eksternal', 'PRD/O/THG/2013/010', '2020-08-08', 'O', 'Departemen Produksi', 'R. Kemas Primer 2', 1, 'active', '2', NULL, NULL, NULL, NULL, NULL, NULL),
(422, 81, 'THG', 'Eksternal', 'PRD/O/THG/2013/012', '2020-07-13', 'O', 'Departemen Produksi', 'R. Kemas Primer 4', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(423, 81, 'THG', 'Eksternal', 'PRD/O/THG/2013/013', '2020-06-26', 'O', 'Departemen Produksi', 'R. Kemas Primer 5', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(424, 90, 'MAG', 'Eksternal', 'PRD/O/MAG/2013/014', '2020-08-12', 'O', 'Departemen Produksi', 'R. Antara Orang', 1, 'active', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(425, 90, 'MAG', 'Eksternal', 'PRD/O/MAG/2013/015', '2020-03-24', 'O', 'Departemen Produksi', 'R. Alat Bersih', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(426, 90, 'MAG', 'Eksternal', 'PRD/O/MAG/2013/016', '2020-08-12', 'O', 'Departemen Produksi', 'R. Kemas Primer 1', 1, 'active', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(427, 90, 'MAG', 'Eksternal', 'PRD/O/MAG/2013/017', '2020-03-26', 'O', 'Departemen Produksi', 'R. Kemas Primer 2', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(428, 90, 'MAG', 'Eksternal', 'PRD/O/MAG/2013/018', '2020-08-12', 'O', 'Departemen Produksi', 'R. Kemas Primer 3', 1, 'active', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(429, 90, 'MAG', 'Eksternal', 'PRD/O/MAG/2013/019', '2020-03-24', 'O', 'Departemen Produksi', 'R. Kemas Primer 4', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(430, 90, 'MAG', 'Eksternal', 'PRD/O/MAG/2013/020', '2020-08-12', 'O', 'Departemen Produksi', 'R. Kemas Primer 5', 1, 'active', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(431, 90, 'MAG', 'Eksternal', 'PRD/O/MAG/2013/021', '2020-08-12', 'O', 'Departemen Produksi', 'R. Cuci Alat', 1, 'active', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(432, 90, 'MAG', 'Eksternal', 'PRD/O/MAG/2013/022', '2020-03-24', 'O', 'Departemen Produksi', 'R. IPC Produksi', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(433, 90, 'MAG', 'Eksternal', 'PRD/O/MAG/2013/023', '2020-08-12', 'O', 'Departemen Produksi', 'R. Proses 1', 1, 'active', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(434, 90, 'MAG', 'Eksternal', 'PRD/O/MAG/2013/024', '2020-08-12', 'O', 'Departemen Produksi', 'R. Proses 2', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(435, 90, 'MAG', 'Eksternal', 'PRD/O/MAG/2013/025', '2020-08-12', 'O', 'Departemen Produksi', 'R. Proses 3', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(436, 90, 'MAG', 'Eksternal', 'PRD/O/MAG/2013/026', '2020-08-12', 'O', 'Departemen Produksi', 'R. Proses 4', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(437, 90, 'MAG', 'Eksternal', 'PRD/O/MAG/2013/027', '2020-03-26', 'O', 'Departemen Produksi', 'R. Proses 5', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(438, 90, 'MAG', 'Eksternal', 'PRD/O/MAG/2013/028', '2020-08-12', 'O', 'Departemen Produksi', 'R. Supervisor', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(439, 90, 'MAG', 'Eksternal', 'PRD/O/MAG/2013/029', '2020-03-24', 'O', 'Departemen Produksi', 'R. Produk Ruahan', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(440, 90, 'MAG', 'Eksternal', 'PRD/O/MAG/2013/030', '2020-08-12', 'O', 'Departemen Produksi', 'R. Timbang', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(441, 90, 'MAG', 'Eksternal', 'PRD/O/MAG/2013/031', '2020-08-12', 'O', 'Departemen Produksi', 'R. Wadah Bersih', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(442, 90, 'MAG', 'Eksternal', 'PRD/O/MAG/2013/032', '2020-03-26', 'O', 'Departemen Produksi', 'R. Antara Barang', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(443, 181, 'VEM', 'Eksternal', 'PRD/O/VEM/2013/033', '2020-03-16', 'O', 'Departemen Produksi', 'R. Proses 1', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(444, 132, 'MMX', 'Eksternal', 'PRD/O/MMX/2013/034', '2020-03-16', 'O', 'Departemen Produksi', 'R. Proses 1', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(445, 181, 'VEM', 'Eksternal', 'PRD/O/VEM/2013/036', '2020-03-17', 'O', 'Departemen Produksi', 'R. Proses 4', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(446, 181, 'VEM', 'Eksternal', 'PRD/O/VEM/2013/037', '2020-03-17', 'O', 'Departemen Produksi', 'R. Proses 5', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(447, 394, 'GRI', 'Eksternal', 'PRD/O/GRI/2013/038', '2020-03-17', 'O', 'Departemen Produksi', 'R. Proses 2', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(448, 420, 'TFS', 'Eksternal', 'PRD/O/TFS/2013/039', '2020-03-18', 'O', 'Departemen Produksi', 'R. Kemas Primer 1', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(449, 31, 'SAL', 'Eksternal', 'PRD/O/SAL/2013/040', '2020-03-16', 'O', 'Departemen Produksi', 'R. Kemas Primer 4', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(450, 167, 'SHR', 'Eksternal', 'PRD/O/SHR/2013/044', '2020-03-18', 'O', 'Departemen Produksi', 'R. Kemas Sekunder', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(451, 95, 'STW', 'Eksternal', 'PRD/O/STW/2013/052', '2020-07-10', 'O', 'Departemen Produksi', 'R. Proses Gedung A', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(452, 95, 'STW', 'Eksternal', 'PRD/O/STW/2013/053', '2020-07-10', 'O', 'Departemen Produksi', 'R. Proses Gedung A', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(453, 95, 'STW', 'Eksternal', 'PRD/O/STW/2013/054', '2020-02-13', 'O', 'Departemen Produksi', 'R. Proses Gedung A', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(454, 146, 'PTK', 'Eksternal', 'PRD/O/PTK/2013/057', '2020-03-17', 'O', 'Departemen Produksi', 'R. Proses 4', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(455, 85, 'THM', 'Eksternal', 'PRD/O/THM/2013/058', '2020-03-31', 'O', 'Departemen Produksi', 'R. Kemas Sekunder', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(456, 85, 'THM', 'Eksternal', 'PRD/O/THM/2013/059', '2020-03-31', 'O', 'Departemen Produksi', 'R. Proses Gedung A', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(457, 85, 'THM', 'Eksternal', 'PRD/O/THM/2013/060', '2020-03-31', 'O', 'Departemen Produksi', 'R. Proses Gedung A', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(458, 81, 'THG', 'Eksternal', 'PRD/O/THG/2015/001', '2020-08-08', 'O', 'Departemen Produksi', 'R. Proses 2', 1, 'active', '2', NULL, NULL, NULL, NULL, NULL, NULL),
(459, 81, 'THG', 'Eksternal', 'PRD/O/THG/2015/002', '2020-08-08', 'O', 'Departemen Produksi', 'R. Proses 3', 1, 'active', '2', NULL, NULL, NULL, NULL, NULL, NULL),
(460, 403, 'MEO', 'Eksternal', 'PRD/O/MEO/2015/003', '2020-03-17', 'O', 'Departemen Produksi', 'R. Proses 3', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(461, 81, 'THG', 'Eksternal', 'PRD/O/THG/2015/004', '2019-10-04', 'O', 'Departemen Produksi', 'R. Kemas Sekunder', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(462, 31, 'SAL', 'Eksternal', 'PRD/O/SAL/2016/001', '2020-03-16', 'O', 'Departemen Produksi', 'R. Kemas Primer 5', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(463, 81, 'THG', 'Eksternal', 'PRD/O/THG/2016/002', '2020-06-24', 'O', 'Departemen Produksi', 'R. Kemas Primer 3', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(464, 31, 'MXR', 'Eksternal', 'PRD/O/MXR/2016/003', '0000-00-00', 'O', 'Departemen Produksi', 'R. Proses 2 (menggantikan mesin ver', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(465, 81, 'THG', 'Eksternal', 'PRD/O/THG/2017/001', '2019-10-04', 'O', 'Departemen Produksi', 'A. Antara Orang', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(466, 81, 'THG', 'Eksternal', 'PRD/O/THG/2017/002', '2019-10-04', 'O', 'Departemen Produksi', 'Koridor', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(467, 81, 'THG', 'Eksternal', 'PRD/O/THG/2017/003', '2019-10-04', 'O', 'Departemen Produksi', 'R. Alat Bersih', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(468, 81, 'THG', 'Eksternal', 'PRD/O/THG/2017/004', '2019-10-04', 'O', 'Departemen Produksi', 'R. Cuci Alat', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(469, 81, 'THG', 'Eksternal', 'PRD/O/THG/2017/005', '2019-10-04', 'O', 'Departemen Produksi', 'R. Wadah Bersih', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(470, 81, 'THG', 'Eksternal', 'PRD/O/THG/2017/006', '2019-11-12', 'O', 'Departemen Produksi', 'R. Supervisor', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(471, 81, 'THG', 'Eksternal', 'PRD/O/THG/2017/007', '2019-11-11', 'O', 'Departemen Produksi', 'R. Antara Barang', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(472, 81, 'THG', 'Eksternal', 'PRD/O/THG/2018/001', '2020-06-24', 'O', 'Departemen Produksi', 'R. Karantina Kemas Sekunder', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(473, 81, 'THG', 'Eksternal', 'PRD/O/THG/2019/001', '2020-02-12', 'O', 'Departemen Produksi', 'R. Coding', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(474, 90, 'MAG', 'Eksternal', 'PRD/O/MAG/2020/001', '2020-02-12', 'O', 'Departemen Produksi', 'R. Staging', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(475, 81, 'THG', 'Eksternal', 'WH/O/THG/2013/004', '2019-09-13', 'O', 'Departemen Gudang', 'R. RM Suhu AC', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(476, 90, 'MAG', 'Eksternal', 'WH/O/MAG/2013/009', '2020-03-20', 'O', 'Departemen Gudang', 'R. Timbang', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(477, 90, 'MAG', 'Eksternal', 'WH/O/MAG/2013/010', '2020-03-20', 'O', 'Departemen Gudang', 'R. Cuci Alat', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(478, 90, 'MAG', 'Eksternal', 'WH/O/MAG/2013/011', '2020-03-20', 'O', 'Departemen Gudang', 'R. Antara Orang', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(479, 90, 'MAG', 'Eksternal', 'WH/O/MAG/2013/012', '2020-03-20', 'O', 'Departemen Gudang', 'R. Antara Barang', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(480, 90, 'MAG', 'Eksternal', 'WH/O/MAG/2013/013', '2020-03-20', 'O', 'Departemen Gudang', 'R. Sampling', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(481, 81, 'THG', 'Eksternal', 'WH/O/THG/2019/001', '2019-09-12', 'O', 'Departemen Gudang', 'R. Timbang Gedung B', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(482, 81, 'THG', 'Eksternal', 'WH/O/THG/2019/002', '2019-10-22', 'O', 'Departemen Gudang', 'R. FG Sejuk Obat', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(483, 81, 'THG', 'Eksternal', 'WH/O/THG/2019/003', '2019-10-22', 'O', 'Departemen Gudang', 'Cadangan', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(484, 20, 'BTN', 'Eksternal', 'QA/U/BTN/2013/001', '2020-07-28', 'U', 'Departemen QA', 'R. Sampling Gedung B', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(485, 20, 'BTN', 'Eksternal', 'QA/U/BTN/2013/002', '2020-07-28', 'U', 'Departemen QA', 'R. Sampling Gedung B', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(486, 20, 'BTN', 'Eksternal', 'QA/U/BTN/2013/003', '2020-07-28', 'U', 'Departemen QA', 'R. Sampling Gedung B', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(487, 20, 'BTN', 'Eksternal', 'QA/U/BTN/2013/004', '2020-01-10', 'U', 'Departemen QA', 'R. Sampling Gedung B', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(488, 20, 'BTN', 'Eksternal', 'QA/U/BTN/2013/005', '0000-00-00', 'U', 'Departemen QA', 'R. Sampling Gedung B', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(489, 20, 'BTN', 'Eksternal', 'QA/U/BTN/2013/006', '0000-00-00', 'U', 'Departemen QA', 'R. Sampling Gedung B', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(490, 20, 'BTN', 'Eksternal', 'QA/U/BTN/2013/007', '0000-00-00', 'U', 'Departemen QA', 'R. Sampling Gedung B', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(491, 20, 'BTN', 'Eksternal', 'QA/U/BTN/2013/008', '0000-00-00', 'U', 'Departemen QA', 'R. Sampling Gedung B', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(492, 20, 'BTN', 'Eksternal', 'QA/U/BTN/2013/009', '0000-00-00', 'U', 'Departemen QA', 'R. Sampling Gedung B', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(493, 20, 'BTN', 'Eksternal', 'QA/U/BTN/2013/010', '2020-07-17', 'U', 'Departemen QA', 'R. Sampling Gedung B', 1, 'active', '2', NULL, NULL, NULL, NULL, NULL, NULL),
(494, 20, 'BTN', 'Eksternal', 'QA/U/BTN/2015/001', '2020-01-14', 'U', 'Departemen QA', 'R. Sampling Gedung B', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(495, 20, 'BTN', 'Eksternal', 'QA/U/BTN/2015/002', '2020-07-17', 'U', 'Departemen QA', 'R. Sampling Gedung B', 1, 'active', '2', NULL, NULL, NULL, NULL, NULL, NULL),
(496, 20, 'BTN', 'Eksternal', 'QA/U/BTN/2015/003', '2020-01-09', 'U', 'Departemen QA', 'R. Sampling Gedung B', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(497, 20, 'BTN', 'Eksternal', 'QA/U/BTN/2015/004', '2020-01-09', 'U', 'Departemen QA', 'R. Sampling Gedung B', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(498, 20, 'BTN', 'Eksternal', 'QA/U/BTN/2015/005', '2020-01-09', 'U', 'Departemen QA', 'R. Sampling Gedung B', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(499, 442, 'TAC', 'Eksternal', 'ENG/U/TAC/2013/001', '2019-09-24', 'U', 'Departemen Maint & Eng ', 'Gedung A', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(500, 439, 'DTL', 'Eksternal', 'ENG/U/DTL/2013/002', '2020-04-02', 'U', 'Departemen Maint & Eng ', 'Maint & Eng', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(501, 439, 'DTL', 'Eksternal', 'ENG/U/DTL/2013/003', '2020-01-11', 'U', 'Departemen Maint & Eng ', 'Maint & Eng', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(502, 439, 'DTL', 'Eksternal', 'ENG/U/DTL/2013/004', '0000-00-00', 'U', 'Departemen Maint & Eng ', 'Maint & Eng', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(503, 31, 'BLR', 'Eksternal', 'ENG/U/BLR/2013/011', '2020-07-23', 'U', 'Departemen Maint & Eng ', 'Gedung A', 1, 'active', '2', NULL, NULL, NULL, NULL, NULL, NULL),
(504, 31, 'KMP', 'Eksternal', 'ENG/U/KMP/2013/012', '0000-00-00', 'U', 'Departemen Maint & Eng ', 'Gedung A', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(505, 31, 'PGB', 'Eksternal', 'ENG/U/PGB/2013/013', '2020-07-23', 'U', 'Departemen Maint & Eng ', 'VEM 100', 1, 'active', '2', NULL, NULL, NULL, NULL, NULL, NULL),
(506, 31, 'PGB', 'Eksternal', 'ENG/U/PGB/2013/014', '2020-07-23', 'U', 'Departemen Maint & Eng ', 'VEM 50', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(507, 31, 'WTP', 'Eksternal', 'U/WTP/2013/001', '0000-00-00', 'U', 'Departemen Maint & Eng ', 'Gedung F', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(508, 31, 'WTP', 'Eksternal', 'U/WWTP/2013/002', '0000-00-00', 'U', 'Departemen Maint & Eng ', 'Gedung F', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(509, 90, 'MAG', 'Eksternal', 'ENG/U/MAG/2014/001', '0000-00-00', 'U', 'Departemen Maint & Eng ', 'Sistem HVAZ Zona 1 (Produksi)', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(510, 90, 'MAG', 'Eksternal', 'ENG/U/MAG/2014/002', '0000-00-00', 'U', 'Departemen Maint & Eng ', 'Sistem HVAZ Zona 1 (Produksi)', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(511, 90, 'MAG', 'Eksternal', 'ENG/U/MAG/2014/003', '0000-00-00', 'U', 'Departemen Maint & Eng ', 'Sistem HVAZ Zona 2 (Produksi)', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(512, 90, 'MAG', 'Eksternal', 'ENG/U/MAG/2014/004', '0000-00-00', 'U', 'Departemen Maint & Eng ', 'Sistem HVAZ Zona 2 (Produksi)', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(513, 90, 'MAG', 'Eksternal', 'ENG/U/MAG/2014/005', '0000-00-00', 'U', 'Departemen Maint & Eng ', 'Sistem HVAC Zona 3 (Warehouse)', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(514, 90, 'MAG', 'Eksternal', 'ENG/U/MAG/2014/006', '0000-00-00', 'U', 'Departemen Maint & Eng ', 'Sistem HVAC Zona 3 (Warehouse)', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(515, 90, 'MAG', 'Eksternal', 'ENG/U/MAG/2014/007', '0000-00-00', 'U', 'Departemen Maint & Eng ', 'Sistem HVAC Zona 4 (QC Obat)', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(516, 90, 'MAG', 'Eksternal', 'ENG/U/MAG/2014/008', '0000-00-00', 'U', 'Departemen Maint & Eng ', 'Sistem HVAC Zona 4 (QC Obat)', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(517, 90, 'MAG', 'Eksternal', 'ENG/U/MAG/2014/009', '0000-00-00', 'U', 'Departemen Maint & Eng ', 'Sistem HVAC Zona 5 (QC Kosmetik)', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(518, 90, 'MAG', 'Eksternal', 'ENG/U/MAG/2014/010', '0000-00-00', 'U', 'Departemen Maint & Eng ', 'Sistem HVAC Zona 5 (QC Kosmetik)', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(519, 31, 'DCM', 'Eksternal', 'ENG/U/DCM/2015/001', '2018-07-30', 'U', 'Departemen Maint & Eng ', 'Maint & Eng', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(520, 31, 'WTP', 'Eksternal', 'U/WTP/2015/001', '0000-00-00', 'U', 'Departemen Maint & Eng ', 'Gedung A', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(521, 31, 'DCM', 'Eksternal', 'ENG/U/DCM/2015/003', '2019-09-24', 'U', 'Departemen Maint & Eng ', 'Maint & Eng', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(522, 31, 'MCR', 'Eksternal', 'ENG/U/MCR/2015/007', '0000-00-00', 'U', 'Departemen Maint & Eng ', 'Maint & Eng', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(523, 31, 'SWP', 'Eksternal', 'ENG/U/SWP/2015/008', '0000-00-00', 'U', 'Departemen Maint & Eng ', 'Maint & Eng', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(524, 85, 'THM', 'Eksternal', 'ENG/U/THM/2015/009', '0000-00-00', 'U', 'Departemen Maint & Eng ', 'Maint & Eng', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(525, 90, 'MAG', 'Eksternal', 'ENG/U/MAG/2017/001', '0000-00-00', 'U', 'Departemen Maint & Eng ', 'Sistem HVAC Zona 6 (Mezanine)', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(526, 90, 'MAG', 'Eksternal', 'ENG/U/MAG/2017/002', '0000-00-00', 'U', 'Departemen Maint & Eng ', 'Sistem HVAC Zona 6 (Mezanine)', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(527, 31, 'SWP', 'Eksternal', 'ENG/U/SWP/2018/001', '0000-00-00', 'U', 'Departemen Maint & Eng ', 'Maint & Eng', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(528, 31, 'IFT', 'Eksternal', 'ENG/U/IFT/2018/002', '0000-00-00', 'U', 'Departemen Maint & Eng ', 'Maint & Eng', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(529, 31, 'TDL', 'Eksternal', 'ENG/U/TDL/2019/001', '0000-00-00', 'U', 'Departemen Maint & Eng ', 'Maint & Eng', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(530, 31, 'TDL', 'Eksternal', 'ENG/U/TDL/2019/002', '0000-00-00', 'U', 'Departemen Maint & Eng ', 'Maint & Eng', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(531, 31, 'TDL', 'Eksternal', 'ENG/U/TDL/2019/003', '0000-00-00', 'U', 'Departemen Maint & Eng ', 'Maint & Eng', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(532, 20, 'BTN', 'Eksternal', 'WH/U/BTN/2017/001', '2020-06-30', 'U', 'Departemen Gudang', 'R. Sampling', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(533, 20, 'BTN', 'Eksternal', 'WH/U/BTN/2017/002', '2020-06-23', 'U', 'Departemen Gudang', 'R. Sampling', 1, 'active', '', NULL, NULL, NULL, NULL, NULL, NULL),
(534, 26, 'VIS', 'Eksternal', 'QC/K/VIS/2018/009', '2019-05-03', 'K', 'Departemen QC', 'R. IPC proses G', 1, 'active', '', 135, '2020-10-18 22:13:34', NULL, NULL, NULL, NULL),
(535, 82, 'THG', 'Eksternal', 'QC/K/THG/2019/003', '2020-08-10', 'K', 'Departemen QC', 'Cadangan', 1, 'active', '', 135, '2020-10-18 23:06:43', NULL, NULL, NULL, NULL),
(536, 1, 'SPT', 'Eksternal', 'QC/K/SPT/2013/001', '2019-10-24', 'K', 'Departemen QC', 'R. Lab Fisika Kimia', 1, 'active', '', 135, '2020-10-18 23:58:07', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `e04_ts_calibration_old`
--

CREATE TABLE `e04_ts_calibration_old` (
  `calibration_id` int(11) NOT NULL,
  `tools_id` int(11) NOT NULL,
  `tools_code` varchar(7) NOT NULL,
  `calibration_type` varchar(15) NOT NULL,
  `calibration_code` varchar(35) NOT NULL,
  `startcalibration_date` date NOT NULL,
  `scope_code` varchar(2) NOT NULL COMMENT 'dont',
  `location_name` varchar(35) NOT NULL COMMENT 'dont',
  `position_name` varchar(35) NOT NULL COMMENT 'dont',
  `calibration_status` int(1) NOT NULL DEFAULT '1' COMMENT '0=not active, 1=active',
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e04_ts_calibration_old`
--

INSERT INTO `e04_ts_calibration_old` (`calibration_id`, `tools_id`, `tools_code`, `calibration_type`, `calibration_code`, `startcalibration_date`, `scope_code`, `location_name`, `position_name`, `calibration_status`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(114, 0, 'tools_c', 'calibration_typ', 'calibration_code', '0000-00-00', 'sc', 'location_name', 'position_name', 0, '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(115, 0, 'SPT', 'Eksternal', 'QC/K/SPT/2013/001', '2019-10-24', 'K', 'Departemen QC', 'R. Lab Fisika Kimia', 1, 'active', NULL, NULL, 135, '2020-10-15 21:09:47', NULL, NULL),
(116, 0, 'SPT', 'Eksternal', 'QC/K/SPT/2013/002', '0000-00-00', 'K', 'Departemen QC', 'R. Lab Fisika Kimia', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(117, 0, 'TTR', 'Eksternal', 'QC/K/TTR/2013/003', '0000-00-00', 'K', 'Departemen QC', 'R. Lab Fisika Kimia', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(118, 0, 'DCR', 'Eksternal', 'QC/K/DCR/2013/004', '0000-00-00', 'K', 'Departemen QC', 'R. Lab Fisika Kimia', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(119, 0, 'OVN', 'Eksternal', 'QC/K/OVN/2013/005', '0000-00-00', 'K', 'Departemen QC', 'R. Lab Fisika Kimia', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(120, 0, 'ACL', 'Eksternal', 'QC/K/OVN/2013/006', '0000-00-00', 'K', 'Departemen QC', 'R. Preparasi Mikrobiologi', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(121, 0, 'ACL', 'Eksternal', 'QC/K/ACL/2013/007', '0000-00-00', 'K', 'Departemen QC', 'R. Preparasi Mikrobiologi', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(122, 0, 'ACL', 'Eksternal', 'QC/K/ACL/2013/008', '0000-00-00', 'K', 'Departemen QC', 'R. Preparasi Mikrobiologi', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(123, 0, 'INC', 'Eksternal', 'QC/K/INC/2013/009', '0000-00-00', 'K', 'Departemen QC', 'R. Lab Mikrobiologi', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(124, 0, 'VIS', 'Eksternal', 'QC/K/VIS/2013/013', '0000-00-00', 'K', 'Departemen QC', 'R. Lab Fisika Kimia', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(125, 0, 'PHM', 'Eksternal', 'QC/K/PHM/2013/015', '0000-00-00', 'K', 'Departemen QC', 'R. IPC primer F ', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(126, 0, 'PHM', 'Eksternal', 'QC/K/PHM/2013/016', '0000-00-00', 'K', 'Departemen QC', 'R. Lab Fisika Kimia', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(127, 0, 'MAR', 'Eksternal', 'QC/K/MAR/2013/017', '0000-00-00', 'K', 'Departemen QC', 'R. Lab Fisika Kimia', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(128, 0, 'MPT', 'Eksternal', 'QC/K/MPT/2013/018', '0000-00-00', 'K', 'Departemen QC', 'R. Lab Fisika Kimia', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(129, 0, 'THG', 'Eksternal', 'QC/K/THG/2013/019', '0000-00-00', 'K', 'Departemen QC', 'R. Lab Mikrobiologi', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(130, 0, 'THG', 'Eksternal', 'QC/K/THG/2013/022', '0000-00-00', 'K', 'Departemen QC', 'R. Antara Mikrobiologi', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(131, 0, 'THG', 'Eksternal', 'QC/K/THG/2013/024', '0000-00-00', 'K', 'Departemen QC', 'Penyimpanan media Mikrobiologi', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(132, 0, 'ASR', 'Eksternal', 'QC/K/ASR/2013/025', '0000-00-00', 'K', 'Departemen QC', 'R. Lab Mikrobiologi', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(133, 0, 'KFR', 'Eksternal', 'QC/K/KFR/2013/026', '0000-00-00', 'K', 'Departemen QC', 'R. Lab Fisika Kimia', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(134, 0, 'THM', 'Eksternal', 'QC/K/THM/2013/027', '0000-00-00', 'K', 'Departemen QC', 'R. Lab Fisika Kimia', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(135, 0, 'THM', 'Eksternal', 'QC/K/THM/2013/028', '0000-00-00', 'K', 'Departemen QC', 'R. Lab Fisika Kimia', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(136, 0, 'THM', 'Eksternal', 'QC/K/THM/2013/029', '0000-00-00', 'K', 'Departemen QC', 'Cooling Box Lab Mikrobiologi ', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(137, 0, 'HPL', 'Eksternal', 'QC/K/HPL/2013/036', '0000-00-00', 'K', 'Departemen QC', 'R. Lab Fisika Kimia', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(138, 0, 'VCR', 'Eksternal', 'QC/K/VCR/2013/039', '0000-00-00', 'K', 'Departemen QC', 'R. Lab Fisika Kimia', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(139, 0, 'VCR', 'Eksternal', 'QC/K/VCR/2013/040', '0000-00-00', 'K', 'Departemen QC', 'R. IPC F Lantai 1', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(140, 0, 'HPL', 'Eksternal', 'QC/K/HPL/2013/043', '0000-00-00', 'K', 'Departemen QC', 'R. Preparasi Mikrobiologi', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(141, 0, 'MAG', 'Eksternal', 'QC/K/MAG/2013/048', '0000-00-00', 'K', 'Departemen QC', 'R. Uji Cemaran Mikroba 1', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(142, 0, 'MAG', 'Eksternal', 'QC/K/MAG/2013/049', '0000-00-00', 'K', 'Departemen QC', 'R. Uji Cemaran Mikroba 2', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(143, 0, 'THG', 'Eksternal', 'QC/K/THG/2013/050', '0000-00-00', 'K', 'Departemen QC', 'R. IPC G Lantai 1', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(144, 0, 'THM', 'Eksternal', 'QC/K/THM/2013/051', '0000-00-00', 'K', 'Departemen QC', 'Cooling Box Lab Fisika Kimia', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(145, 0, 'THM', 'Eksternal', 'QC/K/THM/2013/052', '0000-00-00', 'K', 'Departemen QC', 'R. Lab Fisika Kimia', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(146, 0, 'STW', 'Eksternal', 'QC/K/STW/2013/053', '0000-00-00', 'K', 'Departemen QC', 'R. Lab Mikrobiologi', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(147, 0, 'STW', 'Eksternal', 'QC/K/STW/2013/054', '0000-00-00', 'K', 'Departemen QC', 'R. Lab Fisika Kimia', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(148, 0, 'STW', 'Eksternal', 'QC/K/STW/2013/055', '0000-00-00', 'K', 'Departemen QC', 'R. IPC G Lantai 1', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(149, 0, 'STW', 'Eksternal', 'QC/K/STW/2013/056', '0000-00-00', 'K', 'Departemen QC', 'R. Lab Fisika Kimia', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(150, 0, 'STW', 'Eksternal', 'QC/K/STW/2013/057', '0000-00-00', 'K', 'Departemen QC', 'R. Lab Fisika Kimia', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(151, 0, 'STW', 'Eksternal', 'QC/K/STW/2013/058', '0000-00-00', 'K', 'Departemen QC', 'R. Lab Fisika Kimia', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(152, 0, 'STW', 'Eksternal', 'QC/K/STW/2013/060', '0000-00-00', 'K', 'Departemen QC', 'R. IPC G Lantai 1', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(153, 0, 'THG', 'Eksternal', 'QC/K/THG/2014/001', '0000-00-00', 'K', 'Departemen QC', 'R. IPC primer F ', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(154, 0, 'THG', 'Eksternal', 'QC/K/THG/2014/002', '0000-00-00', 'K', 'Departemen QC', 'R. Pertinggal Produk Jadi', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(155, 0, 'VIS', 'Eksternal', 'QC/K/VIS/2014/003', '0000-00-00', 'K', 'Departemen QC', 'R. IPC proses G', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(156, 0, 'MIP', 'Eksternal', 'QC/K/MIP/2014/004', '0000-00-00', 'K', 'Departemen QC', 'R. Lab Mikrobiologi', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(157, 0, 'VCR', 'Eksternal', 'QC/K/VCR/2015/003', '0000-00-00', 'K', 'Departemen QC', 'R. IPC Primer G Lantai 1', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(158, 0, 'THG', 'Eksternal', 'QC/K/THG/2015/006', '0000-00-00', 'K', 'Departemen QC', 'Pertinggal bahan baku bahan kemas ', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(159, 0, 'MIP', 'Eksternal', 'QC/K/MIP/2015/007', '0000-00-00', 'K', 'Departemen QC', 'R. Lab Mikrobiologi', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(160, 0, 'THG', 'Eksternal', 'QC/K/THG/2015/010', '0000-00-00', 'K', 'Departemen QC', 'R. Preparasi Mikrobiologi', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(161, 0, 'PHM', 'Eksternal', 'QC/K/PHM/2015/013', '0000-00-00', 'K', 'Departemen QC', 'R. Preparasi Mikrobiologi', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(162, 0, 'THG', 'Eksternal', 'QC/K/THG/2016/001', '0000-00-00', 'K', 'Departemen QC', 'R. Lab Fisika Kimia', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(163, 0, 'MIP', 'Eksternal', 'QC/K/MIP/2016/003', '0000-00-00', 'K', 'Departemen QC', 'R. Lab Mikrobiologi', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(164, 0, 'MIP', 'Eksternal', 'QC/K/MIP/2016/004', '0000-00-00', 'K', 'Departemen QC', 'R. Lab Mikrobiologi', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(165, 0, 'PHM', 'Eksternal', 'QC/K/PHM/2016/005', '0000-00-00', 'K', 'Departemen QC', 'R. IPC Proses G', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(166, 0, 'THM', 'Eksternal', 'QC/K/THM/2016/006', '0000-00-00', 'K', 'Departemen QC', 'R. IPC Proses G Lantai 1', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(167, 0, 'THM', 'Eksternal', 'QC/K/THM/2016/007', '0000-00-00', 'K', 'Departemen QC', 'R. Lab Fisika Kimia', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(168, 0, 'BTN', 'Eksternal', 'QC/K/BTN/2016/008', '0000-00-00', 'K', 'Departemen QC', 'R. Lab Fisika Kimia', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(169, 0, 'BTN', 'Eksternal', 'QC/K/BTN/2016/009', '0000-00-00', 'K', 'Departemen QC', 'R. Lab Fisika Kimia', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(170, 0, 'MIP', 'Eksternal', 'QC/K/MIP/2017/001', '0000-00-00', 'K', 'Departemen QC', 'R. Lab Mikrobiologi', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(171, 0, 'CMR', 'Eksternal', 'QC/K/CMR/2017/002', '0000-00-00', 'K', 'Departemen QC', 'R. Lab Fisika Kimia', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(172, 0, 'MIP', 'Eksternal', 'QC/K/MIP/2017/003', '0000-00-00', 'K', 'Departemen QC', 'R. Lab Mikrobiologi', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(173, 0, 'MIP', 'Eksternal', 'QC/K/MIP/2017/004', '0000-00-00', 'K', 'Departemen QC', 'R. Lab Mikrobiologi', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(174, 0, 'MAG', 'Eksternal', 'QC/K/MAG/2017/007', '0000-00-00', 'K', 'Departemen QC', 'R. Lab Mikrobiologi', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(175, 0, 'MAG', 'Eksternal', 'QC/K/MAG/2017/008', '0000-00-00', 'K', 'Departemen QC', 'R. Lab Mikrobiologi', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(176, 0, 'VGE', 'Eksternal', 'QC/K/VGE/2017/009', '0000-00-00', 'K', 'Departemen QC', 'Cadangan', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(177, 0, 'VGE', 'Eksternal', 'QC/K/VGE/2017/010', '0000-00-00', 'K', 'Departemen QC', 'Cadangan', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(178, 0, 'THG', 'Eksternal', 'QC/K/THG/2018/001', '0000-00-00', 'K', 'Departemen QC', 'R. IPC Proses G Lantai 2', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(179, 0, 'STW', 'Eksternal', 'QC/K/STW/2018/003', '0000-00-00', 'K', 'Departemen QC', 'R. IPC Proses G Lantai 2', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(180, 0, 'STW', 'Eksternal', 'QC/K/STW/2018/004', '0000-00-00', 'K', 'Departemen QC', 'R. Lab Fisika Kimia', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(181, 0, 'VCR', 'Eksternal', 'QC/K/VCR/2018/005', '0000-00-00', 'K', 'Departemen QC', 'R. IPC Primer G Lantai 2', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(182, 0, 'PHC', 'Eksternal', 'QC/K/PHC/2018/006', '0000-00-00', 'K', 'Departemen QC', 'R. IPC Proses G Lantai 1', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(183, 0, 'AAS', 'Eksternal', 'QC/K/AAS/2018/007', '0000-00-00', 'K', 'Departemen QC', 'R. Instrument AAS', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(184, 0, 'ANE', 'Eksternal', 'QC/K/ANE/2018/008', '0000-00-00', 'K', 'Departemen QC', 'R. Lab Mikrobiologi', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(185, 0, 'VIS', 'Eksternal', 'QC/K/VIS/2018/009', '0000-00-00', 'K', 'Departemen QC', 'R. IPC Proses G Lantai 2', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(186, 0, 'PHM', 'Eksternal', 'QC/K/PHM/2018/010', '0000-00-00', 'K', 'Departemen QC', 'R. IPC Proses G Lantai 2', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(187, 0, 'THG', 'Eksternal', 'QC/K/THG/2018/011', '0000-00-00', 'K', 'Departemen QC', 'R. Instrument AAS', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(188, 0, 'VGE', 'Eksternal', 'QC/K/VGE/2018/013', '0000-00-00', 'K', 'Departemen QC', 'R. Lab Fisika Kimia', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(189, 0, 'MAG', 'Eksternal', 'QC/K/MAG/2019/001', '0000-00-00', 'K', 'Departemen QC', 'Cadangan', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(190, 0, 'THG', 'Eksternal', 'QC/K/THG/2019/002', '0000-00-00', 'K', 'Departemen QC', 'R. Preparasi Mikrobiologi', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(191, 0, 'THG', 'Eksternal', 'QC/K/THG/2019/003', '0000-00-00', 'K', 'Departemen QC', 'Cadangan', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(192, 0, 'THG', 'Eksternal', 'QC/K/THG/2019/004', '0000-00-00', 'K', 'Departemen QC', 'Cadangan', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(193, 0, 'MIP', 'Eksternal', 'QC/K/MIP/2019/005', '0000-00-00', 'K', 'Departemen QC', 'R. Lab Mikrobiologi', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(194, 0, 'MAG', 'Eksternal', 'QC/K/MAG/2019/006', '0000-00-00', 'K', 'Departemen QC', 'Cadangan', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(195, 0, 'MAG', 'Eksternal', 'QC/K/MAG/2019/007', '0000-00-00', 'K', 'Departemen QC', 'Cadangan', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(196, 0, 'THM', 'Eksternal', 'QC/K/THM/2019/008', '0000-00-00', 'K', 'Departemen QC', 'Gedung G2', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(197, 0, 'STW', 'Eksternal', 'QC/K/STW/2019/009', '0000-00-00', 'K', 'Departemen QC', 'Cadangan', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(198, 0, 'MAG', 'Eksternal', 'QC/K/MAG/2019/010', '0000-00-00', 'K', 'Departemen QC', 'Cadangan', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(199, 0, 'VIS', 'Eksternal', 'RND/K/VIS/2013/006', '0000-00-00', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(200, 0, 'PHM', 'Eksternal', 'RND/K/PHM/2013/007', '0000-00-00', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(201, 0, 'HPT', 'Eksternal', 'RND/K/HPT/2013/008', '0000-00-00', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(202, 0, 'MMR', 'Eksternal', 'RND/K/MMR/2013/009', '0000-00-00', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(203, 0, 'MMX', 'Eksternal', 'RND/K/MMX/2013/010', '0000-00-00', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(204, 0, 'MMX', 'Eksternal', 'RND/K/MMX/2013/011', '0000-00-00', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(205, 0, 'MMX', 'Eksternal', 'RND/K/MMX/2013/012', '0000-00-00', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(206, 0, 'MMX', 'Eksternal', 'RND/K/MMX/2013/013', '0000-00-00', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(207, 0, 'MMX', 'Eksternal', 'RND/K/MMX/2013/015', '0000-00-00', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(208, 0, 'DCR', 'Eksternal', 'RND/K/DCR/2013/016', '0000-00-00', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(209, 0, 'TTR', 'Eksternal', 'RND/K/TTR/2013/017', '0000-00-00', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(210, 0, 'HPT', 'Eksternal', 'RND/K/HPT/2013/018', '0000-00-00', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(211, 0, 'STW', 'Eksternal', 'RND/K/STW/2013/019', '0000-00-00', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(212, 0, 'STW', 'Eksternal', 'RND/K/STW/2013/020', '0000-00-00', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(213, 0, 'STW', 'Eksternal', 'RND/K/STW/2013/021', '0000-00-00', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(214, 0, 'STW', 'Eksternal', 'RND/K/STW/2013/022', '0000-00-00', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(215, 0, 'STW', 'Eksternal', 'RND/K/STW/2013/023', '0000-00-00', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(216, 0, 'THM', 'Eksternal', 'RND/K/THM/2013/024', '0000-00-00', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(217, 0, 'THM', 'Eksternal', 'RND/K/THM/2013/025', '0000-00-00', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(218, 0, 'THM', 'Eksternal', 'RND/K/THM/2013/026', '0000-00-00', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(219, 0, 'THM', 'Eksternal', 'RND/K/THM/2013/027', '0000-00-00', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(220, 0, 'THM', 'Eksternal', 'RND/K/THM/2013/028', '0000-00-00', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(221, 0, 'THM', 'Eksternal', 'RND/K/THM/2013/029', '0000-00-00', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(222, 0, 'THM', 'Eksternal', 'RND/K/THM/2013/030', '0000-00-00', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(223, 0, 'THG', 'Eksternal', 'RND/K/THG/2015/001', '0000-00-00', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(224, 0, 'MPT', 'Eksternal', 'RND/K/MPT/2016/001', '0000-00-00', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(225, 0, 'MAR', 'Eksternal', 'RND/K/MAR/2016/002', '0000-00-00', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(226, 0, 'OVN', 'Eksternal', 'RND/K/OVN/2016/003', '0000-00-00', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(227, 0, 'OVN', 'Eksternal', 'RND/K/OVN/2016/004', '0000-00-00', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(228, 0, 'CMR', 'Eksternal', 'RND/K/CMR/2017/001', '0000-00-00', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(229, 0, 'VCR', 'Eksternal', 'RND/K/VCR/2017/002', '0000-00-00', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(230, 0, 'OVN', 'Eksternal', 'RND/K/OVN/2020/001', '0000-00-00', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(231, 0, 'MMX', 'Eksternal', 'RND/K/MMX/2020/002', '0000-00-00', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(232, 0, 'MXR', 'Eksternal', 'RND/K/MXR/2020/003', '0000-00-00', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(233, 0, 'MXR', 'Eksternal', 'RND/K/MXR/2020/004', '0000-00-00', 'K', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(234, 0, 'THC', 'Eksternal', 'PRD/K/THC/2013/007', '0000-00-00', 'K', 'Departemen Produksi', 'Lemari R. SPV Proses F Lantai 2', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(235, 0, 'THG', 'Eksternal', 'PRD/K/THG/2013/008', '0000-00-00', 'K', 'Departemen Produksi', 'R. Mixing Krim, Pasta, Gel\n(R. Mixi', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(236, 0, 'THG', 'Eksternal', 'PRD/K/THG/2013/009', '0000-00-00', 'K', 'Departemen Produksi', 'R. Mixing Krim, Pasta, Gel\n(R. Mixi', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(237, 0, 'THG', 'Eksternal', 'PRD/K/THG/2013/010', '0000-00-00', 'K', 'Departemen Produksi', 'R. Mixing Krim, Pasta, Gel\n(R. Mixi', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(238, 0, 'THG', 'Eksternal', 'PRD/K/THG/2013/011', '0000-00-00', 'K', 'Departemen Produksi', 'R. Mixing Cair Proses F Lantai 2', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(239, 0, 'THG', 'Eksternal', 'PRD/K/THG/2013/012', '0000-00-00', 'K', 'Departemen Produksi', 'R. Mixing Cair dan Cairan Kental 1 ', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(240, 0, 'THG', 'Eksternal', 'PRD/K/THG/2013/013', '0000-00-00', 'K', 'Departemen Produksi', 'R. Mixing Cair dan Cairan Kental 2 ', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(241, 0, 'THG', 'Eksternal', 'PRD/K/THG/2013/014', '0000-00-00', 'K', 'Departemen Produksi', 'R. Mixing Cair dan Cairan Kental 3 ', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(242, 0, 'THG', 'Eksternal', 'PRD/K/THG/2013/015', '0000-00-00', 'K', 'Departemen Produksi', 'R. IPC Proses F Lantai 2', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(243, 0, 'THG', 'Eksternal', 'PRD/K/THG/2013/016', '0000-00-00', 'K', 'Departemen Produksi', 'Koridor Proses F Lantai 2', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(244, 0, 'THG', 'Eksternal', 'PRD/K/THG/2013/017', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses F Lantai 2', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(245, 0, 'VEM', 'Eksternal', 'PRD/K/VEM/2013/018', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses F Lantai 2', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(246, 0, 'VEM', 'Eksternal', 'PRD/K/VEM/2013/019', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses F Lantai 2', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(247, 0, 'VEM', 'Eksternal', 'PRD/K/VEM/2013/020', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses F Lantai 2', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(248, 0, 'VMX', 'Eksternal', 'PRD/K/VMX/2013/021', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses F Lantai 2', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(249, 0, 'VMX', 'Eksternal', 'PRD/K/VMX/2013/022', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses F Lantai 2', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(250, 0, 'VMX', 'Eksternal', 'PRD/K/VMX/2013/023', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses F Lantai 2', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(251, 0, 'VMX', 'Eksternal', 'PRD/K/VMX/2013/024', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses F Lantai 2', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(252, 0, 'MMX', 'Eksternal', 'PRD/K/MMX/2013/025', '0000-00-00', 'K', 'Departemen Produksi', 'R. Produksi G1', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(253, 0, 'MMX', 'Eksternal', 'PRD/K/MMX/2013/027', '0000-00-00', 'K', 'Departemen Produksi', 'R. Mixing Krim, Pasta, Gel 3 (F Lan', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(254, 0, 'MMX', 'Eksternal', 'PRD/K/MMX/2013/028', '0000-00-00', 'K', 'Departemen Produksi', 'R. Prosesi G Lantai 1', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(255, 0, 'PTK', 'Eksternal', 'PRD/K/PTK/2013/029', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses F Lantai 2', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(256, 0, 'PTK', 'Eksternal', 'PRD/K/PTK/2013/030', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses F Lantai 2', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(257, 0, 'PTK', 'Eksternal', 'PRD/K/PTK/2013/031', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses F Lantai 2', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(258, 0, 'HPT', 'Eksternal', 'PRD/K/HPT/2013/032', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses F Lantai 2', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(259, 0, 'HPT', 'Eksternal', 'PRD/K/HPT/2013/033', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses F Lantai 2', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(260, 0, 'HPT', 'Eksternal', 'PRD/K/HPT/2013/034', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses F Lantai 2', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(261, 0, 'HPT', 'Eksternal', 'PRD/K/HPT/2013/035', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses F Lantai 2', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(262, 0, 'HPT', 'Eksternal', 'PRD/K/HPT/2013/036', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses F Lantai 2', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(263, 0, 'STW', 'Eksternal', 'PRD/K/STW/2013/037', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses F Lantai 2', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(264, 0, 'STW', 'Eksternal', 'PRD/K/STW/2013/038', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses F Lantai 2', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(265, 0, 'STW', 'Eksternal', 'PRD/K/STW/2013/039', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses F Lantai 2', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(266, 0, 'STW', 'Eksternal', 'PRD/K/STW/2013/040', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses F Lantai 2', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(267, 0, 'STW', 'Eksternal', 'PRD/K/STW/2013/041', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses F Lantai 2', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(268, 0, 'STW', 'Eksternal', 'PRD/K/STW/2013/042', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses F Lantai 2', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(269, 0, 'STW', 'Eksternal', 'PRD/K/STW/2013/043', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses F Lantai 2', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(270, 0, 'THG', 'Eksternal', 'PRD/K/THG/2013/052', '0000-00-00', 'K', 'Departemen Produksi', 'R. WIP Produk Ruahan Cairan Kental ', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(271, 0, 'THG', 'Eksternal', 'PRD/K/THG/2013/053', '0000-00-00', 'K', 'Departemen Produksi', 'R. Pengemasan Primer Cairan Kental ', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(272, 0, 'PTK', 'Eksternal', 'PRD/K/PTK/2013/070', '0000-00-00', 'K', 'Departemen Produksi', 'R. Mixing pemanasan padat sabun (Pr', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(273, 0, 'CTE', 'Eksternal', 'PRD/K/CTE/2013/072', '0000-00-00', 'K', 'Departemen Produksi', 'Kemas Primer F1 (R.Mixing Cetak Pad', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(274, 0, 'THG', 'Eksternal', 'PRD/K/THG/2013/074', '0000-00-00', 'K', 'Departemen Produksi', 'R. Pengemasan Primer F (Kemas Prime', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(275, 0, 'HPT', 'Eksternal', 'PRD/K/HPT/2013/075', '0000-00-00', 'K', 'Departemen Produksi', 'R. Cetak padat sabun &  pengemasan ', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(276, 0, 'HPT', 'Eksternal', 'PRD/K/HPT/2013/076', '0000-00-00', 'K', 'Departemen Produksi', 'Kemas Primer F1 (R. Mixing Cetah Pa', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(277, 0, 'SHR', 'Eksternal', 'PRD/K/SHR/2013/078', '0000-00-00', 'K', 'Departemen Produksi', 'Kemas Sekunder F1 (R.Pengemasan Sek', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(278, 0, 'SHR', 'Eksternal', 'PRD/K/SHR/2013/079', '0000-00-00', 'K', 'Departemen Produksi', 'Kemas Sekunder F1 (R.Pengemasan Sek', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(279, 0, 'THG', 'Eksternal', 'PRD/K/THG/2013/092', '0000-00-00', 'K', 'Departemen Produksi', 'R. Kemas Sekunder F', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(280, 0, 'MMX', 'Eksternal', 'PRD/K/MMX/2013/099', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses G Lantai 1', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(281, 0, 'MMX', 'Eksternal', 'PRD/K/MMX/2013/100', '0000-00-00', 'K', 'Departemen Produksi', 'R. Mixing Krim, Pasta, Gel 1  F Lan', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(282, 0, 'MMX', 'Eksternal', 'PRD/K/MMX/2013/101', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses G Lantai 1', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(283, 0, 'MMX', 'Eksternal', 'PRD/K/MMX/2013/102', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses G Lantai 1', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(284, 0, 'MMX', 'Eksternal', 'PRD/K/MMX/2013/103', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses G Lantai 1', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(285, 0, 'VMX', 'Eksternal', 'PRD/K/VMX/2013/104', '0000-00-00', 'K', 'Departemen Produksi', 'R. Mixing C (Gedung G Lantai 1)', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(286, 0, 'VMX', 'Eksternal', 'PRD/K/VMX/2013/105', '0000-00-00', 'K', 'Departemen Produksi', 'R. Mixing C (Gedung G Lantai 1)', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(287, 0, 'VEM', 'Eksternal', 'PRD/K/VEM/2013/106', '0000-00-00', 'K', 'Departemen Produksi', 'R. Mixing B (Gedung G Lantai 1)', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(288, 0, 'MMX', 'Eksternal', 'PRD/K/MMX/2013/107', '0000-00-00', 'K', 'Departemen Produksi', 'R. Mixing Krim, Pasta, Gel 2 (F Lan', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(289, 0, 'HPT', 'Eksternal', 'PRD/K/HPT/2013/108', '0000-00-00', 'K', 'Departemen Produksi', 'R. Mixing Krim, Pasta, Gel Gedung G', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(290, 0, 'HPT', 'Eksternal', 'PRD/K/HPT/2013/109', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses dan Pengemasan Line 3 (Ge', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(291, 0, 'HPT', 'Eksternal', 'PRD/K/HPT/2013/110', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses dan Pengemasan Line 4 (Ge', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(292, 0, 'HPT', 'Eksternal', 'PRD/K/HPT/2013/111', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses dan Pengemasan Line 1 (Ge', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(293, 0, 'THG', 'Eksternal', 'PRD/K/THG/2013/112', '0000-00-00', 'K', 'Departemen Produksi', 'R. Timbang G Lantai 1 (Dialihkan me', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(294, 0, 'THG', 'Eksternal', 'PRD/K/THG/2013/113', '0000-00-00', 'K', 'Departemen Produksi', 'R. Mixing B (Gedung G Lantai 1)', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(295, 0, 'THG', 'Eksternal', 'PRD/K/THG/2013/114', '0000-00-00', 'K', 'Departemen Produksi', 'R. Mixing C (Proses Gedung G Lantai', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(296, 0, 'STW', 'Eksternal', 'PRD/K/STW/2013/115', '0000-00-00', 'K', 'Departemen Produksi', 'R. Produksi G1 (Proses Gedung G Lan', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(297, 0, 'THG', 'Eksternal', 'PRD/K/THG/2013/127', '0000-00-00', 'K', 'Departemen Produksi', 'R. Transit Bahan Pengemas Primer G1', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(298, 0, 'SHR', 'Eksternal', 'PRD/K/SHR/2013/133', '0000-00-00', 'K', 'Departemen Produksi', 'Kemas Sekunder G1 (R.Pengemasan Sek', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(299, 0, 'SHR', 'Eksternal', 'PRD/K/SHR/2013/134', '0000-00-00', 'K', 'Departemen Produksi', 'Kemas Sekunder G1 (R.Pengemasan Sek', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(300, 0, 'SHR', 'Eksternal', 'PRD/K/SHR/2013/135', '0000-00-00', 'K', 'Departemen Produksi', 'Kemas Sekunder G1 (R.Pengemasan Sek', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(301, 0, 'SHR', 'Eksternal', 'PRD/K/SHR/2013/136', '0000-00-00', 'K', 'Departemen Produksi', 'Kemas Sekunder G1 (R.Pengemasan Sek', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(302, 0, 'SHR', 'Eksternal', 'PRD/K/SHR/2013/137', '0000-00-00', 'K', 'Departemen Produksi', 'Kemas Sekunder G1 (R.Pengemasan Sek', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(303, 0, 'CBX', 'Eksternal', 'PRD/K/CBX/2013/139', '0000-00-00', 'K', 'Departemen Produksi', 'K. Primer F Lantai 1 (R. WIP Produk', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(304, 0, 'THM', 'Eksternal', 'PRD/K/THM/2013/149', '0000-00-00', 'K', 'Departemen Produksi', 'Kemas Primer F1 (R.Mixing Lipstik) ', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(305, 0, 'HPT', 'Eksternal', 'PRD/K/HPT/2013/151', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses G Lantai 1 Line 5', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(306, 0, 'PTK', 'Eksternal', 'PRD/K/PTK/2013/152', '0000-00-00', 'K', 'Departemen Produksi', 'R. Mixing B (Gedung G Lantai 1)', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(307, 0, 'HPT', 'Eksternal', 'PRD/K/HPT/2014/001', '0000-00-00', 'K', 'Departemen Produksi', 'R. Mixing Lipstik (Kemas Primer Ged', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(308, 0, 'HPT', 'Eksternal', 'PRD/K/HPT/2017/001', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses Line 2 Gedung G Lantai 1', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(309, 0, 'THG', 'Eksternal', 'PRD/K/THG/2017/004', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses F Lantai 2', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(310, 0, 'THG', 'Eksternal', 'PRD/K/THG/2017/005', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses F Lantai 2', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(311, 0, 'VMX', 'Eksternal', 'PRD/K/VMX/2017/012', '0000-00-00', 'K', 'Departemen Produksi', 'R. Mixing C (G Lantai 1)', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(312, 0, 'THG', 'Eksternal', 'PRD/K/THG/2017/013', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses dan Pengemasan Gedung G L', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(313, 0, 'THG', 'Eksternal', 'PRD/K/THG/2017/014', '0000-00-00', 'K', 'Departemen Produksi', 'R. Pengemasan dan proses (Proses Ge', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(314, 0, 'THG', 'Eksternal', 'PRD/K/THG/2017/015', '0000-00-00', 'K', 'Departemen Produksi', 'R. WIP Produk Antara (Proses Gedung', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(315, 0, 'THG', 'Eksternal', 'PRD/K/THG/2017/016', '0000-00-00', 'K', 'Departemen Produksi', 'R. Gudang Satelit Gedung G Lantai 1', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(316, 0, 'THG', 'Eksternal', 'PRD/K/THG/2017/017', '0000-00-00', 'K', 'Departemen Produksi', 'R.mixing pemanasan padat sabun (Pro', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(317, 0, 'THG', 'Eksternal', 'PRD/K/THG/2017/018', '0000-00-00', 'K', 'Departemen Produksi', 'R.mixing serbuk tabur (Proses Gedun', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(318, 0, 'THG', 'Eksternal', 'PRD/K/THG/2017/019', '0000-00-00', 'K', 'Departemen Produksi', 'R.mixing serbuk compact (Proses Ged', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(319, 0, 'THG', 'Eksternal', 'PRD/K/THG/2017/020', '0000-00-00', 'K', 'Departemen Produksi', 'R. Mixing Lipstik (Kemas Primer Ged', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(320, 0, 'THG', 'Eksternal', 'PRD/K/THG/2017/021', '0000-00-00', 'K', 'Departemen Produksi', 'R. Pengemasan Primer Krim, Pasta, G', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(321, 0, 'THG', 'Eksternal', 'PRD/K/THG/2017/022', '0000-00-00', 'K', 'Departemen Produksi', 'R. Produk Ruahan Cream, Pasta, Gel ', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(322, 0, 'THG', 'Eksternal', 'PRD/K/THG/2017/023', '0000-00-00', 'K', 'Departemen Produksi', 'R. WIP Produk Ruhan Krim, Pasta, Ge', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(323, 0, 'THG', 'Eksternal', 'PRD/K/THG/2017/024', '0000-00-00', 'K', 'Departemen Produksi', 'R. Pengemasan Primer Cairan Kental ', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(324, 0, 'THG', 'Eksternal', 'PRD/K/THG/2017/025', '0000-00-00', 'K', 'Departemen Produksi', 'R. Pengemasan Primer Cairan Kental ', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(325, 0, 'THG', 'Eksternal', 'PRD/K/THG/2017/026', '0000-00-00', 'K', 'Departemen Produksi', 'R. Pengemasan Primer erbuk Tabur (K', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(326, 0, 'THG', 'Eksternal', 'PRD/K/THG/2017/030', '0000-00-00', 'K', 'Departemen Produksi', 'Kemas Sekunder G1 (R.Pengemasan Sek', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(327, 0, 'THG', 'Eksternal', 'PRD/K/THG/2017/031', '0000-00-00', 'K', 'Departemen Produksi', 'R. Adm. Kemas Sekunder F', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(328, 0, 'THG', 'Eksternal', 'PRD/K/THG/2017/032', '0000-00-00', 'K', 'Departemen Produksi', 'Kemas Sekunder G1 (R.Pengemasan Sek', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(329, 0, 'THG', 'Eksternal', 'PRD/K/THG/2017/033', '0000-00-00', 'K', 'Departemen Produksi', 'R. Kemas Sekunder F', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(330, 0, 'THG', 'Eksternal', 'PRD/K/THG/2017/035', '0000-00-00', 'K', 'Departemen Produksi', 'Kemas Sekunder G2 (R.Pengemasan Sek', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(331, 0, 'THG', 'Eksternal', 'PRD/K/THG/2017/036', '0000-00-00', 'K', 'Departemen Produksi', 'Kemas Primer G2 (R.Pengemasan Prime', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(332, 0, 'THG', 'Eksternal', 'PRD/K/THG/2017/037', '0000-00-00', 'K', 'Departemen Produksi', 'Kemas Primer G2 (R.Coding).', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(333, 0, 'THG', 'Eksternal', 'PRD/K/THG/2017/038', '0000-00-00', 'K', 'Departemen Produksi', 'K. Primer F1 (R.Pengemasan Primer I', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(334, 0, 'SHR', 'Eksternal', 'PRD/K/SHR/2017/040', '0000-00-00', 'K', 'Departemen Produksi', 'Kemas Sekunder F1 (R.Pengemasan Sek', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(335, 0, 'SHR', 'Eksternal', 'PRD/K/SHR/2017/041', '0000-00-00', 'K', 'Departemen Produksi', 'Kemas Sekunder F1 (R.Pengemasan Sek', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(336, 0, 'MMX', 'Eksternal', 'PRD/K/MMX/2018/007', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses G Lantai 2', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(337, 0, 'MMX', 'Eksternal', 'PRD/K/MMX/2018/008', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses G Lantai 2', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(338, 0, 'MMX', 'Eksternal', 'PRD/K/MMX/2018/009', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses G Lantai 2', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(339, 0, 'MMX', 'Eksternal', 'PRD/K/MMX/2018/010', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses G Lantai 2', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(340, 0, 'VMX', 'Eksternal', 'PRD/K/VMX/2018/011', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses G Lantai 2', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(341, 0, 'THG', 'Eksternal', 'PRD/K/THG/2018/012', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses G Lantai 2', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(342, 0, 'THG', 'Eksternal', 'PRD/K/THG/2018/013', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses G Lantai 2', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(343, 0, 'THG', 'Eksternal', 'PRD/K/THG/2018/014', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses G Lantai 2', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(344, 0, 'THG', 'Eksternal', 'PRD/K/THG/2018/015', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses G Lantai 2', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(345, 0, 'SHR', 'Eksternal', 'PRD/K/SHR/2018/029', '0000-00-00', 'K', 'Departemen Produksi', 'Kemas Sekunder G2 (R.Pengemasan Sek', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(346, 0, 'SHR', 'Eksternal', 'PRD/K/SHR/2018/030', '0000-00-00', 'K', 'Departemen Produksi', 'Kemas Sekunder G2 (R.Pengemasan Sek', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(347, 0, 'SHR', 'Eksternal', 'PRD/K/SHR/2018/031', '0000-00-00', 'K', 'Departemen Produksi', 'Kemas Sekunder G2 (R.Pengemasan Sek', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(348, 0, 'SHR', 'Eksternal', 'PRD/K/SHR/2018/032', '0000-00-00', 'K', 'Departemen Produksi', 'Kemas Sekunder G2 (R.Pengemasan Sek', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(349, 0, 'TMB', 'Eksternal', 'PRD/K/TMB/2018/033', '0000-00-00', 'K', 'Departemen Produksi', 'R. Timbang F Lantai 2', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(350, 0, 'HPT', 'Eksternal', 'PRD/K/HPT/2018/040', '0000-00-00', 'K', 'Departemen Produksi', 'R. Mixing Cairan G Lantai 2', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(351, 0, 'HPT', 'Eksternal', 'PRD/K/HPT/2018/041', '0000-00-00', 'K', 'Departemen Produksi', 'R. Mixing Cream G Lantai 1', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(352, 0, 'HPT', 'Eksternal', 'PRD/K/HPT/2018/042', '0000-00-00', 'K', 'Departemen Produksi', 'R. Mixing Cream G Lantai 1', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(353, 0, 'HPT', 'Eksternal', 'PRD/K/HPT/2018/043', '0000-00-00', 'K', 'Departemen Produksi', 'R. Mixing Cream G Lantai 1', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(354, 0, 'HPT', 'Eksternal', 'PRD/K/HPT/2018/044', '0000-00-00', 'K', 'Departemen Produksi', 'R. Mixing Cream, Pasta, Gel, Cair, ', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(355, 0, 'SHR', 'Eksternal', 'PRD/K/SHR/2018/045', '0000-00-00', 'K', 'Departemen Produksi', 'Kemas Sekunder F1 (R.Pengemasan Sek', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(356, 0, 'STW', 'Eksternal', 'PRD/K/STW/2018/046', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses G Lantai 1', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(357, 0, 'STW', 'Eksternal', 'PRD/K/STW/2018/047', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses G Lantai 1', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(358, 0, 'STW', 'Eksternal', 'PRD/K/STW/2018/048', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses G Lantai 1', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(359, 0, 'STW', 'Eksternal', 'PRD/K/STW/2018/049', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses G Lantai 1', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(360, 0, 'STW', 'Eksternal', 'PRD/K/STW/2018/050', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses G Lantai 1', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(361, 0, 'STW', 'Eksternal', 'PRD/K/STW/2018/051', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses G Lantai 1', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(362, 0, 'STW', 'Eksternal', 'PRD/K/STW/2018/052', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses G Lantai 1', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(363, 0, 'STW', 'Eksternal', 'PRD/K/STW/2018/053', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses G Lantai 1', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(364, 0, 'STW', 'Eksternal', 'PRD/K/STW/2018/054', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses G Lantai 1', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(365, 0, 'STW', 'Eksternal', 'PRD/K/STW/2018/055', '0000-00-00', 'K', 'Departemen Produksi', 'R. Mixing Cream, Pasta, Gel, Cair, ', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(366, 0, 'STW', 'Eksternal', 'PRD/K/STW/2018/056', '0000-00-00', 'K', 'Departemen Produksi', 'R.mixing pemanasan padat sabun Gedu', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(367, 0, 'STW', 'Eksternal', 'PRD/K/STW/2018/057', '0000-00-00', 'K', 'Departemen Produksi', 'R. Mixing Cream, Pasta, Gel, Cair &', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(368, 0, 'STW', 'Eksternal', 'PRD/K/STW/2018/058', '0000-00-00', 'K', 'Departemen Produksi', 'R. Mixing Cream, Pasta, Gel, Cair &', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(369, 0, 'STW', 'Eksternal', 'PRD/K/STW/2018/059', '0000-00-00', 'K', 'Departemen Produksi', 'R. Mixing Cream, Pasta, Gel, Cair &', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(370, 0, 'THM', 'Eksternal', 'PRD/K/THM/2018/060', '0000-00-00', 'K', 'Departemen Produksi', 'R. Mixing Cair 1 Gedung F Lantai 2', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(371, 0, 'THM', 'Eksternal', 'PRD/K/THM/2018/061', '0000-00-00', 'K', 'Departemen Produksi', 'R. Mixing Cair & Cairan Kental 2 Ge', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(372, 0, 'THM', 'Eksternal', 'PRD/K/THM/2018/062', '0000-00-00', 'K', 'Departemen Produksi', 'R. Mixing Cair & Cairan Kental 3 Ge', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(373, 0, 'THM', 'Eksternal', 'PRD/K/THM/2018/063', '0000-00-00', 'K', 'Departemen Produksi', 'R. Mixing Cair & Cairan Kental 4 Ge', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(374, 0, 'THM', 'Eksternal', 'PRD/K/THM/2018/064', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses & Pengemasan Line 1 Gedun', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(375, 0, 'THM', 'Eksternal', 'PRD/K/THM/2018/065', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses & Pengemasan Line 2 Gedun', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(376, 0, 'THM', 'Eksternal', 'PRD/K/THM/2018/066', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses & Pengemasan Line 3 Gedun', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(377, 0, 'THM', 'Eksternal', 'PRD/K/THM/2018/067', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses & Pengemasan Line 4 Gedun', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(378, 0, 'THM', 'Eksternal', 'PRD/K/THM/2018/068', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses & Pengemasan Line 5 Gedun', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(379, 0, 'THM', 'Eksternal', 'PRD/K/THM/2018/069', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses & Pengemasan Line 6 Gedun', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(380, 0, 'THM', 'Eksternal', 'PRD/K/THM/2018/070', '0000-00-00', 'K', 'Departemen Produksi', 'R. Mixing C Cream, Pasta, Gel Cair ', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(381, 0, 'THM', 'Eksternal', 'PRD/K/THM/2018/071', '0000-00-00', 'K', 'Departemen Produksi', 'R. Satelit Gedung G Lantai 1 (Kulka', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(382, 0, 'THM', 'Eksternal', 'PRD/K/THM/2018/072', '0000-00-00', 'K', 'Departemen Produksi', 'R.mixing pemanasan padat sabun Gedu', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(383, 0, 'THM', 'Eksternal', 'PRD/K/THM/2018/073', '0000-00-00', 'K', 'Departemen Produksi', 'R. Mixing Cream, Pasta, Gel, Cair &', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(384, 0, 'THM', 'Eksternal', 'PRD/K/THM/2018/074', '0000-00-00', 'K', 'Departemen Produksi', 'R. Mixing Cream, Pasta, Gel, Cair &', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(385, 0, 'THM', 'Eksternal', 'PRD/K/THM/2018/075', '0000-00-00', 'K', 'Departemen Produksi', 'R. Mixing Cream, Pasta, Gel, Cair &', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(386, 0, 'THM', 'Eksternal', 'PRD/K/THM/2018/076', '0000-00-00', 'K', 'Departemen Produksi', 'R. Mixing Cream, Pasta, Gel, Cair &', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(387, 0, 'THG', 'Eksternal', 'PRD/K/THG/2018/077', '0000-00-00', 'K', 'Departemen Produksi', 'R. Mixing Cair dan Cairan Kental Ge', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(388, 0, 'STW', 'Eksternal', 'PRD/K/STW/2018/078', '0000-00-00', 'K', 'Departemen Produksi', 'R. Mixing Cair dan Cairan Kental Ge', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(389, 0, 'DRR', 'Eksternal', 'PRD/K/DRR/2019/002', '0000-00-00', 'K', 'Departemen Produksi', 'R. Mixing serbuk tabur & compact Ge', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(390, 0, 'THG', 'Eksternal', 'PRD/K/THG/2019/003', '0000-00-00', 'K', 'Departemen Produksi', 'R. Satelit Gedung G Lantai 2', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(391, 0, 'STW', 'Eksternal', 'PRD/K/STW/2019/004', '0000-00-00', 'K', 'Departemen Produksi', 'R. Proses G Lantai 1', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(392, 0, 'THG', 'Eksternal', 'PRD/K/THG/2019/006', '0000-00-00', 'K', 'Departemen Produksi', 'R. Pengemasan Primer F (Koridor)', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(393, 0, 'THG', 'Eksternal', 'WH/K/THG/2013/010', '0000-00-00', 'K', 'Departemen Gudang', 'R. FG Suhu Kamar (F)', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(394, 0, 'LPN', 'Eksternal', 'WH/K/LPN/2013/016', '0000-00-00', 'K', 'Departemen Gudang', 'R. RM Suhu Kamar (F)', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(395, 0, 'LPN', 'Eksternal', 'WH/K/LPN/2013/018', '0000-00-00', 'K', 'Departemen Gudang', 'R. FG Suhu Kamar (F)', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(396, 0, 'LPN', 'Eksternal', 'WH/K/LPN/2013/019', '0000-00-00', 'K', 'Departemen Gudang', 'R. FG Suhu Kamar (F)', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(397, 0, 'THG', 'Eksternal', 'WH/K/THG/2013/028', '0000-00-00', 'K', 'Departemen Gudang', 'R. Timbang G Lantai 1 (Dialihkan da', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(398, 0, 'THG', 'Eksternal', 'WH/K/THG/2016/001', '0000-00-00', 'K', 'Departemen Gudang', 'R. Timbang (F)', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(399, 0, 'THG', 'Eksternal', 'WH/K/THG/2016/002', '0000-00-00', 'K', 'Departemen Gudang', 'R. Sampling (F)', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(400, 0, 'LPN', 'Eksternal', 'WH/K/LPN/2016/003', '0000-00-00', 'K', 'Departemen Gudang', 'R. FG Suhu Kamar (F) (Rusak)', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(401, 0, 'THG', 'Eksternal', 'WH/K/THG/2017/001', '0000-00-00', 'K', 'Departemen Gudang', 'Cadangan', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(402, 0, 'THG', 'Eksternal', 'WH/K/THG/2017/002', '0000-00-00', 'K', 'Departemen Gudang', 'R. Gudang Satelit Gedung G Lantai 1', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(403, 0, 'LPN', 'Eksternal', 'WH/K/LPN/2018/001', '0000-00-00', 'K', 'Departemen Gudang', 'R. RM Suhu Kamar (F)', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(404, 0, 'LPN', 'Eksternal', 'WH/K/LPN/2018/002', '0000-00-00', 'K', 'Departemen Gudang', 'R. FG Suhu Kamar (E)', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(405, 0, 'LPN', 'Eksternal', 'WH/K/LPN/2018/003', '0000-00-00', 'K', 'Departemen Gudang', 'R. FG Suhu Kamar (E)', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(406, 0, 'THG', 'Eksternal', 'WH/K/THG/2018/004', '0000-00-00', 'K', 'Departemen Gudang', 'R. FG Suhu Kamar (E)', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(407, 0, 'THG', 'Eksternal', 'WH/K/THG/2018/006', '0000-00-00', 'K', 'Departemen Gudang', 'R. FG Maklon Suhu AC (E)', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(408, 0, 'THG', 'Eksternal', 'WH/K/THG/2018/007', '0000-00-00', 'K', 'Departemen Gudang', 'R. RM Suhu Kamar (F)', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(409, 0, 'THG', 'Eksternal', 'WH/K/THG/2018/008', '0000-00-00', 'K', 'Departemen Gudang', 'R. RM Suhu AC (F)', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(410, 0, 'THG', 'Eksternal', 'WH/K/THG/2018/009', '0000-00-00', 'K', 'Departemen Gudang', 'R. FG Suhu AC (F)', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `e04_ts_calibration_old` (`calibration_id`, `tools_id`, `tools_code`, `calibration_type`, `calibration_code`, `startcalibration_date`, `scope_code`, `location_name`, `position_name`, `calibration_status`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(411, 0, 'THG', 'Eksternal', 'WH/K/THG/2018/011', '0000-00-00', 'K', 'Departemen Gudang', 'R. Timbang 2', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(412, 0, 'THG', 'Eksternal', 'WH/K/THG/2018/012', '0000-00-00', 'K', 'Departemen Gudang', 'Cadangan', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(413, 0, 'THG', 'Eksternal', 'WH/K/THG/2018/013', '0000-00-00', 'K', 'Departemen Gudang', 'R. Timbang 3', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(414, 0, 'THG', 'Eksternal', 'WH/K/THG/2018/014', '0000-00-00', 'K', 'Departemen Gudang', 'Gudang RM Suhu Kamar 2', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(415, 0, 'THG', 'Eksternal', 'WH/K/THG/2018/015', '0000-00-00', 'K', 'Departemen Gudang', 'R. RM Karantina', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(416, 0, 'MAG', 'Eksternal', 'WH/K/MAG/2018/016', '0000-00-00', 'K', 'Departemen Gudang', 'R. Timbang 3', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(417, 0, 'MAG', 'Eksternal', 'WH/K/MAG/2018/017', '0000-00-00', 'K', 'Departemen Gudang', 'R. Timbang 3', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(418, 0, 'MAG', 'Eksternal', 'WH/K/MAG/2018/018', '0000-00-00', 'K', 'Departemen Gudang', 'R. Timbang 3', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(419, 0, 'THM', 'Eksternal', 'WH/K/THM/2018/020', '0000-00-00', 'K', 'Departemen Gudang', 'R. Satelit Gedung G Lantai 1 (Kulka', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(420, 0, 'THG', 'Eksternal', 'WH/K/THG/2019/001', '0000-00-00', 'K', 'Departemen Gudang', 'Gudang RM', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(421, 0, 'THG', 'Eksternal', 'WH/K/THG/2019/002', '0000-00-00', 'K', 'Departemen Gudang', 'Gudang RM', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(422, 0, 'THG', 'Eksternal', 'WH/K/THG/2019/003', '0000-00-00', 'K', 'Departemen Gudang', 'Gudang FG', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(423, 0, 'THG', 'Eksternal', 'WH/K/THG/2019/004', '0000-00-00', 'K', 'Departemen Gudang', 'Gudang FG', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(424, 0, 'THG', 'Eksternal', 'WH/K/THG/2019/005', '0000-00-00', 'K', 'Departemen Gudang', 'Gudang FG', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(425, 0, 'THG', 'Eksternal', 'WH/K/THG/2019/006', '0000-00-00', 'K', 'Departemen Gudang', 'Gudang FG Theraskin & Maklon (Cadan', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(426, 0, 'THG', 'Eksternal', 'WH/K/THG/2019/007', '0000-00-00', 'K', 'Departemen Gudang', 'Gudang FG Theraskin & Maklon (Cadan', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(427, 0, 'THG', 'Eksternal', 'WH/K/THG/2019/008', '0000-00-00', 'K', 'Departemen Gudang', 'Gudang FG Theraskin & Maklon (Cadan', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(428, 0, 'THM', 'Eksternal', 'WH/K/THM/2019/009', '0000-00-00', 'K', 'Departemen Gudang', 'Gudang FG Theraskin & Maklon (Cadan', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(429, 0, 'THM', 'Eksternal', 'WH/K/THM/2019/010', '0000-00-00', 'K', 'Departemen Gudang', 'Gudang FG Theraskin & Maklon (Cadan', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(430, 0, 'THM', 'Eksternal', 'WH/K/THM/2019/011', '0000-00-00', 'K', 'Departemen Gudang', 'R. FG Suhu Kamar (F)', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(431, 0, 'HPL', 'Eksternal', 'RND/O/HPL/2013/001', '0000-00-00', 'O', 'Departemen R&d Cosmetic', 'R. Instrumen', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(432, 0, 'HPL', 'Eksternal', 'RND/O/HPL/2013/002', '0000-00-00', 'O', 'Departemen R&d Cosmetic', 'R. Instrumen', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(433, 0, 'HPL', 'Eksternal', 'RND/O/HPL/2013/003', '0000-00-00', 'O', 'Departemen R&d Cosmetic', 'R. Instrumen', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(434, 0, 'CCR', 'Eksternal', 'RND/O/CCR/2013/005', '0000-00-00', 'O', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(435, 0, 'VIS', 'Eksternal', 'RND/O/VIS/2013/006', '0000-00-00', 'O', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(436, 0, 'MIC', 'Eksternal', 'RND/O/MIC/2013/007', '0000-00-00', 'O', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(437, 0, 'WTB', 'Eksternal', 'RND/O/WTB/2013/008', '0000-00-00', 'O', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(438, 0, 'VMR', 'Eksternal', 'RND/O/VMR/2013/009', '0000-00-00', 'O', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(439, 0, 'VMR', 'Eksternal', 'RND/O/VMR/2013/010', '0000-00-00', 'O', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(440, 0, 'VMR', 'Eksternal', 'RND/O/VMR/2013/011', '0000-00-00', 'O', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(441, 0, 'THG', 'Eksternal', 'RND/O/THG/2013/012', '0000-00-00', 'O', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(442, 0, 'THG', 'Eksternal', 'RND/O/THG/2013/013', '0000-00-00', 'O', 'Departemen R&d Cosmetic', 'R. Instrumen', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(443, 0, 'THG', 'Eksternal', 'RND/O/THG/2013/014', '0000-00-00', 'O', 'Departemen R&d Cosmetic', 'R. Climatic Chamber', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(444, 0, 'THG', 'Eksternal', 'RND/O/THG/2013/015', '0000-00-00', 'O', 'Departemen R&d Cosmetic', 'Dept. R&D (Cadangan)', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(445, 0, 'THG', 'Eksternal', 'RND/O/THG/2013/016', '0000-00-00', 'O', 'Departemen R&d Cosmetic', 'Dept. R&D (Cadangan)', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(446, 0, 'THG', 'Eksternal', 'RND/O/THG/2013/017', '0000-00-00', 'O', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(447, 0, 'THG', 'Eksternal', 'RND/O/THG/2013/018', '0000-00-00', 'O', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(448, 0, 'THG', 'Eksternal', 'RND/O/THG/2013/019', '0000-00-00', 'O', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(449, 0, 'MIP', 'Eksternal', 'RND/O/MIP/2013/020', '0000-00-00', 'O', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(450, 0, 'MIP', 'Eksternal', 'RND/O/MIP/2013/021', '0000-00-00', 'O', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(451, 0, 'MIP', 'Eksternal', 'RND/O/MIP/2013/022', '0000-00-00', 'O', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(452, 0, 'MIP', 'Eksternal', 'RND/O/MIP/2013/023', '0000-00-00', 'O', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(453, 0, 'MIP', 'Eksternal', 'RND/O/MIP/2013/024', '0000-00-00', 'O', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(454, 0, 'MIP', 'Eksternal', 'RND/O/MIP/2013/025', '0000-00-00', 'O', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(455, 0, 'MIP', 'Eksternal', 'RND/O/MIP/2013/026', '0000-00-00', 'O', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(456, 0, 'MIP', 'Eksternal', 'RND/O/MIP/2013/027', '0000-00-00', 'O', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(457, 0, 'MAP', 'Eksternal', 'RND/O/MAP/2013/028', '0000-00-00', 'O', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(458, 0, 'MAP', 'Eksternal', 'RND/O/MAP/2013/029', '0000-00-00', 'O', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(459, 0, 'CCR', 'Eksternal', 'RND/O/CCR/2014/001', '0000-00-00', 'O', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(460, 0, 'PWR', 'Eksternal', 'RND/O/PWR/2014/002', '0000-00-00', 'O', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(461, 0, 'BTN', 'Eksternal', 'RND/O/BTN/2015/001', '0000-00-00', 'O', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(462, 0, 'BTN', 'Eksternal', 'RND/O/BTN/2015/002', '0000-00-00', 'O', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(463, 0, 'DCR', 'Eksternal', 'RND/O/DCR/2015/003', '0000-00-00', 'O', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(464, 0, 'CCR', 'Eksternal', 'RND/O/CCR/2016/001', '0000-00-00', 'O', 'Departemen R&d Cosmetic', 'Laboratorium', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(465, 0, 'BTN', 'Eksternal', 'RND/O/BTN/2019/001', '0000-00-00', 'O', 'Departemen R&d Cosmetic', 'R. Lab Preparasi', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(466, 0, 'BTN', 'Eksternal', 'RND/O/BTN/2019/002', '0000-00-00', 'O', 'Departemen R&d Cosmetic', 'R. Lab Preparasi', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(467, 0, 'PHC', 'Eksternal', 'RND/O/PHC/2019/005', '0000-00-00', 'O', 'Departemen R&d Cosmetic', 'R. Lab Preparasi', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(468, 0, 'TCR', 'Eksternal', 'RND/O/TCR/2019/007', '0000-00-00', 'O', 'Departemen R&d Cosmetic', 'Lemari Pendingin', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(469, 0, 'TCR', 'Eksternal', 'RND/O/TCR/2019/008', '0000-00-00', 'O', 'Departemen R&d Cosmetic', 'Lemari Pendingin', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(470, 0, 'HPT', 'Eksternal', 'RND/O/HPT/2020/001', '0000-00-00', 'O', 'Departemen R&d Cosmetic', 'R. Preparasi', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(471, 0, 'DCR', 'Eksternal', 'RND/O/DCR/2020/002', '0000-00-00', 'O', 'Departemen R&d Cosmetic', 'R. Preparasi', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(472, 0, 'MIC', 'Eksternal', 'RND/O/MIC/2020/003', '0000-00-00', 'O', 'Departemen R&d Cosmetic', 'R. Preparasi', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(473, 0, 'CEN', 'Eksternal', 'QC/O/CEN/2013/001', '0000-00-00', 'O', 'Departemen QC', 'R. Lab QC', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(474, 0, 'MAR', 'Eksternal', 'QC/O/MAR/2013/002', '0000-00-00', 'O', 'Departemen QC', 'R. Lab QC', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(475, 0, 'HPL', 'Eksternal', 'QC/O/HPL/2013/003', '0000-00-00', 'O', 'Departemen QC', 'R. Instrumen', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(476, 0, 'KFR', 'Eksternal', 'QC/O/KFR/2013/004', '0000-00-00', 'O', 'Departemen QC', 'R. Lab QC', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(477, 0, 'THG', 'Eksternal', 'QC/O/THG/2013/005', '0000-00-00', 'O', 'Departemen QC', 'R. Instrumen', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(478, 0, 'PHC', 'Eksternal', 'QC/O/PHC/2013/007', '0000-00-00', 'O', 'Departemen QC', 'R. IPC Produksi', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(479, 0, 'PHM', 'Eksternal', 'QC/O/PHM/2013/009', '0000-00-00', 'O', 'Departemen QC', 'R. IPC Produksi', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(480, 0, 'VIS', 'Eksternal', 'QC/O/VIS/2013/010', '0000-00-00', 'O', 'Departemen QC', 'R. IPC Produksi', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(481, 0, 'VCR', 'Eksternal', 'QC/O/VCR/2013/011', '0000-00-00', 'O', 'Departemen QC', 'R. Lab QC', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(482, 0, 'THG', 'Eksternal', 'QC/O/THG/2013/012', '0000-00-00', 'O', 'Departemen QC', 'R. Uji Cemaran Mikrobiologi', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(483, 0, 'VCR', 'Eksternal', 'QC/O/VCR/2013/013', '0000-00-00', 'O', 'Departemen QC', 'R. IPC Produksi', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(484, 0, 'DCR', 'Eksternal', 'QC/O/DCR/2013/014', '0000-00-00', 'O', 'Departemen QC', 'R. Lab QC', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(485, 0, 'THG', 'Eksternal', 'QC/O/THG/2013/015', '0000-00-00', 'O', 'Departemen QC', 'R. IPC Produksi', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(486, 0, 'INC', 'Eksternal', 'QC/O/INC/2013/016', '0000-00-00', 'O', 'Departemen QC', 'R. Preparasi Mikrobiologi', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(487, 0, 'ACL', 'Eksternal', 'QC/O/ACL/2013/017', '0000-00-00', 'O', 'Departemen QC', 'R. Preparasi Mikrobiologi', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(488, 0, 'OVN', 'Eksternal', 'QC/O/OVN/2013/019', '0000-00-00', 'O', 'Departemen QC', 'R. Preparasi Mikrobiologi', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(489, 0, 'INC', 'Eksternal', 'QC/O/INC/2013/020', '0000-00-00', 'O', 'Departemen QC', 'R. Preparasi Mikrobiologi', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(490, 0, 'ASR', 'Eksternal', 'QC/O/ASR/2013/021', '0000-00-00', 'O', 'Departemen QC', 'R. Preparasi Mikrobiologi', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(491, 0, 'THG', 'Eksternal', 'QC/O/THG/2013/022', '0000-00-00', 'O', 'Departemen QC', 'R. Uji Potensi Mikrobiologi', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(492, 0, 'MAP', 'Eksternal', 'QC/O/MAP/2013/024', '0000-00-00', 'O', 'Departemen QC', 'R. Preparasi Mikrobiologi', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(493, 0, 'THG', 'Eksternal', 'QC/O/THG/2013/025', '0000-00-00', 'O', 'Departemen QC', 'R. Pertinggal Non AC', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(494, 0, 'THG', 'Eksternal', 'QC/O/THG/2013/027', '0000-00-00', 'O', 'Departemen QC', 'R. Preparasi Mikrobiologi (Media)', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(495, 0, 'THG', 'Eksternal', 'QC/O/THG/2013/029', '0000-00-00', 'O', 'Departemen QC', 'R. Lab QC', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(496, 0, 'SFM', 'Eksternal', 'QC/O/SFM/2013/030', '0000-00-00', 'O', 'Departemen QC', 'R. Instrumen', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(497, 0, 'VCR', 'Eksternal', 'QC/O/VCR/2013/036', '0000-00-00', 'O', 'Departemen QC', 'R. Lab QC', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(498, 0, 'VCR', 'Eksternal', 'QC/O/VCR/2013/037', '0000-00-00', 'O', 'Departemen QC', 'R. IPC Produksi', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(499, 0, 'WTB', 'Eksternal', 'QC/O/WTB/2013/046', '0000-00-00', 'O', 'Departemen QC', 'R. Lab QC', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(500, 0, 'NVN', 'Eksternal', 'QC/O/NVN/2013/049', '0000-00-00', 'O', 'Departemen QC', 'R. Lab QC', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(501, 0, 'THG', 'Eksternal', 'QC/O/THG/2014/001', '0000-00-00', 'O', 'Departemen QC', 'R. Preparasi Mikrobiologi', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(502, 0, 'THG', 'Eksternal', 'QC/O/THG/2014/002', '0000-00-00', 'O', 'Departemen QC', 'R. Pertinggal AC', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(503, 0, 'VIS', 'Eksternal', 'QC/O/VIS/2014/003', '0000-00-00', 'O', 'Departemen QC', 'R. IPC Produksi', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(504, 0, 'ACL', 'Eksternal', 'QC/O/ACL/2014/004', '0000-00-00', 'O', 'Departemen QC', 'R. Preparasi Mikrobiologi', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(505, 0, 'MIC', 'Eksternal', 'QC/O/MIC/2014/005', '0000-00-00', 'O', 'Departemen QC', 'R. Lab QC', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(506, 0, 'PCR', 'Eksternal', 'QC/O/PCR/2014/006', '0000-00-00', 'O', 'Departemen QC', 'R. Lab QC', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(507, 0, 'MAG', 'Eksternal', 'QC/O/MAG/2014/007', '0000-00-00', 'O', 'Departemen QC', 'R. Antara Mikrobiologi', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(508, 0, 'MAG', 'Eksternal', 'QC/O/MAG/2014/008', '0000-00-00', 'O', 'Departemen QC', 'R. Uji Cemaran Mikroba Mikrobiologi', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(509, 0, 'MAG', 'Eksternal', 'QC/O/MAG/2014/009', '0000-00-00', 'O', 'Departemen QC', 'R. Uji Potensi Mikrobiologi', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(510, 0, 'THG', 'Eksternal', 'QC/O/THG/2015/001', '0000-00-00', 'O', 'Departemen QC', 'R. Antara Mikrobiologi', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(511, 0, 'MIP', 'Eksternal', 'QC/O/MIP/2015/002', '0000-00-00', 'O', 'Departemen QC', 'R. Preparasi Mikrobiologi', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(512, 0, 'BTN', 'Eksternal', 'QC/O/BTN/2015/005', '0000-00-00', 'O', 'Departemen QC', 'R. Timbang', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(513, 0, 'BTN', 'Eksternal', 'QC/O/BTN/2015/006', '0000-00-00', 'O', 'Departemen QC', 'R. Timbang', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(514, 0, 'MAG', 'Eksternal', 'QC/O/MAG/2015/007', '0000-00-00', 'O', 'Departemen QC', 'R. Preparasi Mikrobiologi', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(515, 0, 'TOC', 'Eksternal', 'QC/O/TOC/2016/001', '0000-00-00', 'O', 'Departemen QC', 'R. Lab QC', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(516, 0, 'THG', 'Eksternal', 'QC/O/THG/2016/002', '0000-00-00', 'O', 'Departemen QC', 'R. Sampling Gudang B', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(517, 0, 'THG', 'Eksternal', 'QC/O/THG/2016/003', '0000-00-00', 'O', 'Departemen QC', 'R. Pertinggal AC', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(518, 0, 'THG', 'Eksternal', 'QC/O/THG/2016/004', '0000-00-00', 'O', 'Departemen QC', 'Biosafety Cabinet', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(519, 0, 'THG', 'Eksternal', 'QC/O/THG/2016/005', '0000-00-00', 'O', 'Departemen QC', 'Laminar Air Flow', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(520, 0, 'THG', 'Eksternal', 'QC/O/THG/2016/006', '0000-00-00', 'O', 'Departemen QC', 'R. Lab QC', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(521, 0, 'THG', 'Eksternal', 'QC/O/THG/2016/007', '0000-00-00', 'O', 'Departemen QC', 'R. Lab QC', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(522, 0, 'THG', 'Eksternal', 'QC/O/THG/2016/008', '0000-00-00', 'O', 'Departemen QC', 'R. Lab QC', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(523, 0, 'STW', 'Eksternal', 'QC/O/STW/2016/010', '0000-00-00', 'O', 'Departemen QC', 'R. IPC Produksi', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(524, 0, 'MPT', 'Eksternal', 'QC/O/MPT/2017/002', '0000-00-00', 'O', 'Departemen QC', 'R. Lab QC', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(525, 0, 'MIP', 'Eksternal', 'QC/O/MIP/2017/003', '0000-00-00', 'O', 'Departemen QC', 'R. Preparasi Mikrobiologi', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(526, 0, 'CCH', 'Eksternal', 'QC/O/CCH/2017/004', '0000-00-00', 'O', 'Departemen QC', 'R. Pertinggal', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(527, 0, 'STW', 'Eksternal', 'QC/O/STW/2017/005', '0000-00-00', 'O', 'Departemen QC', 'R. IPC Produksi', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(528, 0, 'THG', 'Eksternal', 'PRD/O/THG/2013/004', '0000-00-00', 'O', 'Departemen Produksi', 'R. Proses 1', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(529, 0, 'THG', 'Eksternal', 'PRD/O/THG/2013/005', '0000-00-00', 'O', 'Departemen Produksi', 'R. Proses 4', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(530, 0, 'THG', 'Eksternal', 'PRD/O/THG/2013/006', '0000-00-00', 'O', 'Departemen Produksi', 'R. Proses 5', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(531, 0, 'THG', 'Eksternal', 'PRD/O/THG/2013/007', '0000-00-00', 'O', 'Departemen Produksi', 'R. Produk Ruahan', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(532, 0, 'THG', 'Eksternal', 'PRD/O/THG/2013/008', '0000-00-00', 'O', 'Departemen Produksi', 'R. Timbang', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(533, 0, 'THG', 'Eksternal', 'PRD/O/THG/2013/009', '0000-00-00', 'O', 'Departemen Produksi', 'R. Kemas Primer 1', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(534, 0, 'THG', 'Eksternal', 'PRD/O/THG/2013/010', '0000-00-00', 'O', 'Departemen Produksi', 'R. Kemas Primer 2', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(535, 0, 'THG', 'Eksternal', 'PRD/O/THG/2013/012', '0000-00-00', 'O', 'Departemen Produksi', 'R. Kemas Primer 4', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(536, 0, 'THG', 'Eksternal', 'PRD/O/THG/2013/013', '0000-00-00', 'O', 'Departemen Produksi', 'R. Kemas Primer 5', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(537, 0, 'MAG', 'Eksternal', 'PRD/O/MAG/2013/014', '0000-00-00', 'O', 'Departemen Produksi', 'R. Antara Orang', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(538, 0, 'MAG', 'Eksternal', 'PRD/O/MAG/2013/015', '0000-00-00', 'O', 'Departemen Produksi', 'R. Alat Bersih', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(539, 0, 'MAG', 'Eksternal', 'PRD/O/MAG/2013/016', '0000-00-00', 'O', 'Departemen Produksi', 'R. Kemas Primer 1', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(540, 0, 'MAG', 'Eksternal', 'PRD/O/MAG/2013/017', '0000-00-00', 'O', 'Departemen Produksi', 'R. Kemas Primer 2', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(541, 0, 'MAG', 'Eksternal', 'PRD/O/MAG/2013/018', '0000-00-00', 'O', 'Departemen Produksi', 'R. Kemas Primer 3', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(542, 0, 'MAG', 'Eksternal', 'PRD/O/MAG/2013/019', '0000-00-00', 'O', 'Departemen Produksi', 'R. Kemas Primer 4', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(543, 0, 'MAG', 'Eksternal', 'PRD/O/MAG/2013/020', '0000-00-00', 'O', 'Departemen Produksi', 'R. Kemas Primer 5', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(544, 0, 'MAG', 'Eksternal', 'PRD/O/MAG/2013/021', '0000-00-00', 'O', 'Departemen Produksi', 'R. Cuci Alat', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(545, 0, 'MAG', 'Eksternal', 'PRD/O/MAG/2013/022', '0000-00-00', 'O', 'Departemen Produksi', 'R. IPC Produksi', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(546, 0, 'MAG', 'Eksternal', 'PRD/O/MAG/2013/023', '0000-00-00', 'O', 'Departemen Produksi', 'R. Proses 1', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(547, 0, 'MAG', 'Eksternal', 'PRD/O/MAG/2013/024', '0000-00-00', 'O', 'Departemen Produksi', 'R. Proses 2', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(548, 0, 'MAG', 'Eksternal', 'PRD/O/MAG/2013/025', '0000-00-00', 'O', 'Departemen Produksi', 'R. Proses 3', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(549, 0, 'MAG', 'Eksternal', 'PRD/O/MAG/2013/026', '0000-00-00', 'O', 'Departemen Produksi', 'R. Proses 4', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(550, 0, 'MAG', 'Eksternal', 'PRD/O/MAG/2013/027', '0000-00-00', 'O', 'Departemen Produksi', 'R. Proses 5', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(551, 0, 'MAG', 'Eksternal', 'PRD/O/MAG/2013/028', '0000-00-00', 'O', 'Departemen Produksi', 'R. Supervisor', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(552, 0, 'MAG', 'Eksternal', 'PRD/O/MAG/2013/029', '0000-00-00', 'O', 'Departemen Produksi', 'R. Produk Ruahan', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(553, 0, 'MAG', 'Eksternal', 'PRD/O/MAG/2013/030', '0000-00-00', 'O', 'Departemen Produksi', 'R. Timbang', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(554, 0, 'MAG', 'Eksternal', 'PRD/O/MAG/2013/031', '0000-00-00', 'O', 'Departemen Produksi', 'R. Wadah Bersih', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(555, 0, 'MAG', 'Eksternal', 'PRD/O/MAG/2013/032', '0000-00-00', 'O', 'Departemen Produksi', 'R. Antara Barang', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(556, 0, 'VEM', 'Eksternal', 'PRD/O/VEM/2013/033', '0000-00-00', 'O', 'Departemen Produksi', 'R. Proses 1', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(557, 0, 'MMX', 'Eksternal', 'PRD/O/MMX/2013/034', '0000-00-00', 'O', 'Departemen Produksi', 'R. Proses 1', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(558, 0, 'VEM', 'Eksternal', 'PRD/O/VEM/2013/036', '0000-00-00', 'O', 'Departemen Produksi', 'R. Proses 4', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(559, 0, 'VEM', 'Eksternal', 'PRD/O/VEM/2013/037', '0000-00-00', 'O', 'Departemen Produksi', 'R. Proses 5', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(560, 0, 'GRI', 'Eksternal', 'PRD/O/GRI/2013/038', '0000-00-00', 'O', 'Departemen Produksi', 'R. Proses 2', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(561, 0, 'TFS', 'Eksternal', 'PRD/O/TFS/2013/039', '0000-00-00', 'O', 'Departemen Produksi', 'R. Kemas Primer 1', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(562, 0, 'SAL', 'Eksternal', 'PRD/O/SAL/2013/040', '0000-00-00', 'O', 'Departemen Produksi', 'R. Kemas Primer 4', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(563, 0, 'SHR', 'Eksternal', 'PRD/O/SHR/2013/044', '0000-00-00', 'O', 'Departemen Produksi', 'R. Kemas Sekunder', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(564, 0, 'STW', 'Eksternal', 'PRD/O/STW/2013/052', '0000-00-00', 'O', 'Departemen Produksi', 'R. Proses Gedung A', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(565, 0, 'STW', 'Eksternal', 'PRD/O/STW/2013/053', '0000-00-00', 'O', 'Departemen Produksi', 'R. Proses Gedung A', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(566, 0, 'STW', 'Eksternal', 'PRD/O/STW/2013/054', '0000-00-00', 'O', 'Departemen Produksi', 'R. Proses Gedung A', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(567, 0, 'PTK', 'Eksternal', 'PRD/O/PTK/2013/057', '0000-00-00', 'O', 'Departemen Produksi', 'R. Proses 4', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(568, 0, 'THM', 'Eksternal', 'PRD/O/THM/2013/058', '0000-00-00', 'O', 'Departemen Produksi', 'R. Kemas Sekunder', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(569, 0, 'THM', 'Eksternal', 'PRD/O/THM/2013/059', '0000-00-00', 'O', 'Departemen Produksi', 'R. Proses Gedung A', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(570, 0, 'THM', 'Eksternal', 'PRD/O/THM/2013/060', '0000-00-00', 'O', 'Departemen Produksi', 'R. Proses Gedung A', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(571, 0, 'THG', 'Eksternal', 'PRD/O/THG/2015/001', '0000-00-00', 'O', 'Departemen Produksi', 'R. Proses 2', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(572, 0, 'THG', 'Eksternal', 'PRD/O/THG/2015/002', '0000-00-00', 'O', 'Departemen Produksi', 'R. Proses 3', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(573, 0, 'MEO', 'Eksternal', 'PRD/O/MEO/2015/003', '0000-00-00', 'O', 'Departemen Produksi', 'R. Proses 3', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(574, 0, 'THG', 'Eksternal', 'PRD/O/THG/2015/004', '0000-00-00', 'O', 'Departemen Produksi', 'R. Kemas Sekunder', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(575, 0, 'SAL', 'Eksternal', 'PRD/O/SAL/2016/001', '0000-00-00', 'O', 'Departemen Produksi', 'R. Kemas Primer 5', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(576, 0, 'THG', 'Eksternal', 'PRD/O/THG/2016/002', '0000-00-00', 'O', 'Departemen Produksi', 'R. Kemas Primer 3', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(577, 0, 'MXR', 'Eksternal', 'PRD/O/MXR/2016/003', '0000-00-00', 'O', 'Departemen Produksi', 'R. Proses 2 (menggantikan mesin ver', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(578, 0, 'THG', 'Eksternal', 'PRD/O/THG/2017/001', '0000-00-00', 'O', 'Departemen Produksi', 'A. Antara Orang', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(579, 0, 'THG', 'Eksternal', 'PRD/O/THG/2017/002', '0000-00-00', 'O', 'Departemen Produksi', 'Koridor', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(580, 0, 'THG', 'Eksternal', 'PRD/O/THG/2017/003', '0000-00-00', 'O', 'Departemen Produksi', 'R. Alat Bersih', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(581, 0, 'THG', 'Eksternal', 'PRD/O/THG/2017/004', '0000-00-00', 'O', 'Departemen Produksi', 'R. Cuci Alat', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(582, 0, 'THG', 'Eksternal', 'PRD/O/THG/2017/005', '0000-00-00', 'O', 'Departemen Produksi', 'R. Wadah Bersih', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(583, 0, 'THG', 'Eksternal', 'PRD/O/THG/2017/006', '0000-00-00', 'O', 'Departemen Produksi', 'R. Supervisor', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(584, 0, 'THG', 'Eksternal', 'PRD/O/THG/2017/007', '0000-00-00', 'O', 'Departemen Produksi', 'R. Antara Barang', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(585, 0, 'THG', 'Eksternal', 'PRD/O/THG/2018/001', '0000-00-00', 'O', 'Departemen Produksi', 'R. Karantina Kemas Sekunder', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(586, 0, 'THG', 'Eksternal', 'PRD/O/THG/2019/001', '0000-00-00', 'O', 'Departemen Produksi', 'R. Coding', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(587, 0, 'MAG', 'Eksternal', 'PRD/O/MAG/2020/001', '0000-00-00', 'O', 'Departemen Produksi', 'R. Staging', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(588, 0, 'THG', 'Eksternal', 'WH/O/THG/2013/004', '0000-00-00', 'O', 'Departemen Gudang', 'R. RM Suhu AC', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(589, 0, 'MAG', 'Eksternal', 'WH/O/MAG/2013/009', '0000-00-00', 'O', 'Departemen Gudang', 'R. Timbang', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(590, 0, 'MAG', 'Eksternal', 'WH/O/MAG/2013/010', '0000-00-00', 'O', 'Departemen Gudang', 'R. Cuci Alat', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(591, 0, 'MAG', 'Eksternal', 'WH/O/MAG/2013/011', '0000-00-00', 'O', 'Departemen Gudang', 'R. Antara Orang', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(592, 0, 'MAG', 'Eksternal', 'WH/O/MAG/2013/012', '0000-00-00', 'O', 'Departemen Gudang', 'R. Antara Barang', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(593, 0, 'MAG', 'Eksternal', 'WH/O/MAG/2013/013', '0000-00-00', 'O', 'Departemen Gudang', 'R. Sampling', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(594, 0, 'THG', 'Eksternal', 'WH/O/THG/2019/001', '0000-00-00', 'O', 'Departemen Gudang', 'R. Timbang Gedung B', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(595, 0, 'THG', 'Eksternal', 'WH/O/THG/2019/002', '0000-00-00', 'O', 'Departemen Gudang', 'R. FG Sejuk Obat', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(596, 0, 'THG', 'Eksternal', 'WH/O/THG/2019/003', '0000-00-00', 'O', 'Departemen Gudang', 'Cadangan', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(597, 0, 'BTN', 'Eksternal', 'QA/U/BTN/2013/001', '0000-00-00', 'U', 'Departemen QA', 'R. Sampling Gedung B', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(598, 0, 'BTN', 'Eksternal', 'QA/U/BTN/2013/002', '0000-00-00', 'U', 'Departemen QA', 'R. Sampling Gedung B', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(599, 0, 'BTN', 'Eksternal', 'QA/U/BTN/2013/003', '0000-00-00', 'U', 'Departemen QA', 'R. Sampling Gedung B', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(600, 0, 'BTN', 'Eksternal', 'QA/U/BTN/2013/004', '0000-00-00', 'U', 'Departemen QA', 'R. Sampling Gedung B', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(601, 0, 'BTN', 'Eksternal', 'QA/U/BTN/2013/005', '0000-00-00', 'U', 'Departemen QA', 'R. Sampling Gedung B', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(602, 0, 'BTN', 'Eksternal', 'QA/U/BTN/2013/006', '0000-00-00', 'U', 'Departemen QA', 'R. Sampling Gedung B', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(603, 0, 'BTN', 'Eksternal', 'QA/U/BTN/2013/007', '0000-00-00', 'U', 'Departemen QA', 'R. Sampling Gedung B', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(604, 0, 'BTN', 'Eksternal', 'QA/U/BTN/2013/008', '0000-00-00', 'U', 'Departemen QA', 'R. Sampling Gedung B', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(605, 0, 'BTN', 'Eksternal', 'QA/U/BTN/2013/009', '0000-00-00', 'U', 'Departemen QA', 'R. Sampling Gedung B', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(606, 0, 'BTN', 'Eksternal', 'QA/U/BTN/2013/010', '0000-00-00', 'U', 'Departemen QA', 'R. Sampling Gedung B', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(607, 0, 'BTN', 'Eksternal', 'QA/U/BTN/2015/001', '0000-00-00', 'U', 'Departemen QA', 'R. Sampling Gedung B', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(608, 0, 'BTN', 'Eksternal', 'QA/U/BTN/2015/002', '0000-00-00', 'U', 'Departemen QA', 'R. Sampling Gedung B', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(609, 0, 'BTN', 'Eksternal', 'QA/U/BTN/2015/003', '0000-00-00', 'U', 'Departemen QA', 'R. Sampling Gedung B', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(610, 0, 'BTN', 'Eksternal', 'QA/U/BTN/2015/004', '0000-00-00', 'U', 'Departemen QA', 'R. Sampling Gedung B', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(611, 0, 'BTN', 'Eksternal', 'QA/U/BTN/2015/005', '0000-00-00', 'U', 'Departemen QA', 'R. Sampling Gedung B', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(612, 0, 'TAC', 'Eksternal', 'ENG/U/TAC/2013/001', '0000-00-00', 'U', 'Departemen Maint & Eng ', 'Gedung A', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(613, 0, 'DTL', 'Eksternal', 'ENG/U/DTL/2013/002', '0000-00-00', 'U', 'Departemen Maint & Eng ', 'Maint & Eng', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(614, 0, 'DTL', 'Eksternal', 'ENG/U/DTL/2013/003', '0000-00-00', 'U', 'Departemen Maint & Eng ', 'Maint & Eng', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(615, 0, 'DTL', 'Eksternal', 'ENG/U/DTL/2013/004', '0000-00-00', 'U', 'Departemen Maint & Eng ', 'Maint & Eng', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(616, 0, 'BLR', 'Eksternal', 'ENG/U/BLR/2013/011', '0000-00-00', 'U', 'Departemen Maint & Eng ', 'Gedung A', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(617, 0, 'KMP', 'Eksternal', 'ENG/U/KMP/2013/012', '0000-00-00', 'U', 'Departemen Maint & Eng ', 'Gedung A', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(618, 0, 'PGB', 'Eksternal', 'ENG/U/PGB/2013/013', '0000-00-00', 'U', 'Departemen Maint & Eng ', 'VEM 100', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(619, 0, 'PGB', 'Eksternal', 'ENG/U/PGB/2013/014', '0000-00-00', 'U', 'Departemen Maint & Eng ', 'VEM 50', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(620, 0, 'WTP', 'Eksternal', 'U/WTP/2013/001', '0000-00-00', 'U', 'Departemen Maint & Eng ', 'Gedung F', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(621, 0, 'WTP', 'Eksternal', 'U/WWTP/2013/002', '0000-00-00', 'U', 'Departemen Maint & Eng ', 'Gedung F', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(622, 0, 'MAG', 'Eksternal', 'ENG/U/MAG/2014/001', '0000-00-00', 'U', 'Departemen Maint & Eng ', 'Sistem HVAZ Zona 1 (Produksi)', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(623, 0, 'MAG', 'Eksternal', 'ENG/U/MAG/2014/002', '0000-00-00', 'U', 'Departemen Maint & Eng ', 'Sistem HVAZ Zona 1 (Produksi)', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(624, 0, 'MAG', 'Eksternal', 'ENG/U/MAG/2014/003', '0000-00-00', 'U', 'Departemen Maint & Eng ', 'Sistem HVAZ Zona 2 (Produksi)', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(625, 0, 'MAG', 'Eksternal', 'ENG/U/MAG/2014/004', '0000-00-00', 'U', 'Departemen Maint & Eng ', 'Sistem HVAZ Zona 2 (Produksi)', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(626, 0, 'MAG', 'Eksternal', 'ENG/U/MAG/2014/005', '0000-00-00', 'U', 'Departemen Maint & Eng ', 'Sistem HVAC Zona 3 (Warehouse)', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(627, 0, 'MAG', 'Eksternal', 'ENG/U/MAG/2014/006', '0000-00-00', 'U', 'Departemen Maint & Eng ', 'Sistem HVAC Zona 3 (Warehouse)', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(628, 0, 'MAG', 'Eksternal', 'ENG/U/MAG/2014/007', '0000-00-00', 'U', 'Departemen Maint & Eng ', 'Sistem HVAC Zona 4 (QC Obat)', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(629, 0, 'MAG', 'Eksternal', 'ENG/U/MAG/2014/008', '0000-00-00', 'U', 'Departemen Maint & Eng ', 'Sistem HVAC Zona 4 (QC Obat)', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(630, 0, 'MAG', 'Eksternal', 'ENG/U/MAG/2014/009', '0000-00-00', 'U', 'Departemen Maint & Eng ', 'Sistem HVAC Zona 5 (QC Kosmetik)', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(631, 0, 'MAG', 'Eksternal', 'ENG/U/MAG/2014/010', '0000-00-00', 'U', 'Departemen Maint & Eng ', 'Sistem HVAC Zona 5 (QC Kosmetik)', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(632, 0, 'DCM', 'Eksternal', 'ENG/U/DCM/2015/001', '0000-00-00', 'U', 'Departemen Maint & Eng ', 'Maint & Eng', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(633, 0, 'WTP', 'Eksternal', 'U/WTP/2015/001', '0000-00-00', 'U', 'Departemen Maint & Eng ', 'Gedung A', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(634, 0, 'DCM', 'Eksternal', 'ENG/U/DCM/2015/003', '0000-00-00', 'U', 'Departemen Maint & Eng ', 'Maint & Eng', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(635, 0, 'MCR', 'Eksternal', 'ENG/U/MCR/2015/007', '0000-00-00', 'U', 'Departemen Maint & Eng ', 'Maint & Eng', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(636, 0, 'SWP', 'Eksternal', 'ENG/U/SWP/2015/008', '0000-00-00', 'U', 'Departemen Maint & Eng ', 'Maint & Eng', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(637, 0, 'THM', 'Eksternal', 'ENG/U/THM/2015/009', '0000-00-00', 'U', 'Departemen Maint & Eng ', 'Maint & Eng', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(638, 0, 'MAG', 'Eksternal', 'ENG/U/MAG/2017/001', '0000-00-00', 'U', 'Departemen Maint & Eng ', 'Sistem HVAC Zona 6 (Mezanine)', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(639, 0, 'MAG', 'Eksternal', 'ENG/U/MAG/2017/002', '0000-00-00', 'U', 'Departemen Maint & Eng ', 'Sistem HVAC Zona 6 (Mezanine)', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(640, 0, 'SWP', 'Eksternal', 'ENG/U/SWP/2018/001', '0000-00-00', 'U', 'Departemen Maint & Eng ', 'Maint & Eng', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(641, 0, 'IFT', 'Eksternal', 'ENG/U/IFT/2018/002', '0000-00-00', 'U', 'Departemen Maint & Eng ', 'Maint & Eng', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(642, 0, 'TDL', 'Eksternal', 'ENG/U/TDL/2019/001', '0000-00-00', 'U', 'Departemen Maint & Eng ', 'Maint & Eng', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(643, 0, 'TDL', 'Eksternal', 'ENG/U/TDL/2019/002', '0000-00-00', 'U', 'Departemen Maint & Eng ', 'Maint & Eng', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(644, 0, 'TDL', 'Eksternal', 'ENG/U/TDL/2019/003', '0000-00-00', 'U', 'Departemen Maint & Eng ', 'Maint & Eng', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(645, 0, 'BTN', 'Eksternal', 'WH/U/BTN/2017/001', '0000-00-00', 'U', 'Departemen Gudang', 'R. Sampling', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(646, 0, 'BTN', 'Eksternal', 'WH/U/BTN/2017/002', '0000-00-00', 'U', 'Departemen Gudang', 'R. Sampling', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `e04_ts_calibration_periode`
--

CREATE TABLE `e04_ts_calibration_periode` (
  `periode_id` int(11) NOT NULL,
  `calibration_id` int(11) NOT NULL,
  `vendor_id` int(3) NOT NULL COMMENT 'combobox	',
  `periode_year` varchar(4) NOT NULL,
  `periode_date` varchar(5) NOT NULL,
  `calibration_qty` int(3) NOT NULL DEFAULT '1' COMMENT '1 = default',
  `calibration_price` int(25) NOT NULL,
  `calibration_price_old` int(10) NOT NULL,
  `calibration_disc` int(3) NOT NULL,
  `calibration_ppn` int(2) NOT NULL DEFAULT '10' COMMENT '10 = default',
  `tools_id` int(3) NOT NULL,
  `tools_no_sertifikat` int(25) NOT NULL,
  `periode_information` varchar(255) NOT NULL,
  `status_calibration` int(1) NOT NULL DEFAULT '0' COMMENT '0=not calibrated, 1=oke calibrated',
  `nama_component` varchar(50) NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e04_ts_calibration_periode`
--

INSERT INTO `e04_ts_calibration_periode` (`periode_id`, `calibration_id`, `vendor_id`, `periode_year`, `periode_date`, `calibration_qty`, `calibration_price`, `calibration_price_old`, `calibration_disc`, `calibration_ppn`, `tools_id`, `tools_no_sertifikat`, `periode_information`, `status_calibration`, `nama_component`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(29, 84, 1, '2020', '10-24', 1, 0, 0, 0, 10, 2, 0, 'NA', 0, '', 'active', 135, '2020-10-02 10:26:33', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `e04_ts_calibration_podetail`
--

CREATE TABLE `e04_ts_calibration_podetail` (
  `id_position` int(11) NOT NULL,
  `c_pohedaer_id` int(11) NOT NULL,
  `calibration_code` varchar(25) NOT NULL COMMENT 'combobox',
  `calibration_price` int(25) NOT NULL,
  `calibration_qty` int(3) NOT NULL,
  `calibration_disc` int(25) NOT NULL,
  `calibration_disc_rp` int(25) NOT NULL,
  `calibration_total` int(25) NOT NULL,
  `calibration_ppn` int(25) NOT NULL,
  `no_po` varchar(25) NOT NULL,
  `status_po` varchar(25) NOT NULL,
  `estimasi_calibration` longtext NOT NULL,
  `vendor_id` int(3) NOT NULL COMMENT 'combobox',
  `tools_no_sertifikat` varchar(25) NOT NULL,
  `foto_sertifikat` varchar(500) NOT NULL,
  `periode_date_awal` date DEFAULT NULL,
  `periode_date_akhir` date NOT NULL,
  `nama_component` varchar(25) NOT NULL,
  `keterangan` longtext NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` date DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e04_ts_calibration_podetail`
--

INSERT INTO `e04_ts_calibration_podetail` (`id_position`, `c_pohedaer_id`, `calibration_code`, `calibration_price`, `calibration_qty`, `calibration_disc`, `calibration_disc_rp`, `calibration_total`, `calibration_ppn`, `no_po`, `status_po`, `estimasi_calibration`, `vendor_id`, `tools_no_sertifikat`, `foto_sertifikat`, `periode_date_awal`, `periode_date_akhir`, `nama_component`, `keterangan`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(136, 140, 'QC/K/TTR/2013/003', 50000, 1, 0, 0, 0, 0, 'P001', 'Sertifikat di terima', '1 Bulan', 3, 'SRT-05', 'srt_avatar.jpg', '2020-11-04', '2021-11-04', '', '', 'active', 135, '2020-11-04', 135, '2020-11-04 14:58:43', NULL, NULL),
(158, 140, 'QC/K/SPT/2013/002', 0, 1, 0, 0, 0, 0, '', 'Draft', '', 0, '', '', '1970-01-01', '1970-01-01', '', '', 'active', 135, '2020-11-04', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `e04_ts_calibration_podetail_new`
--

CREATE TABLE `e04_ts_calibration_podetail_new` (
  `id_position` int(11) NOT NULL,
  `c_pohedaer_id` int(11) NOT NULL,
  `calibration_code` varchar(25) NOT NULL COMMENT 'combobox',
  `calibration_price` int(25) NOT NULL,
  `calibration_qty` int(3) NOT NULL,
  `calibration_disc` int(25) NOT NULL,
  `calibration_disc_rp` int(25) NOT NULL,
  `calibration_total` int(25) NOT NULL,
  `calibration_ppn` int(25) NOT NULL,
  `no_po` varchar(25) NOT NULL,
  `status_po` varchar(25) NOT NULL,
  `vendor_id` int(3) NOT NULL COMMENT 'combobox',
  `tools_no_sertifikat` varchar(25) NOT NULL,
  `periode_date_awal` date NOT NULL,
  `periode_date_akhir` date NOT NULL,
  `nama_component` varchar(25) NOT NULL,
  `keterangan` longtext NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` date DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e04_ts_calibration_podetail_new`
--

INSERT INTO `e04_ts_calibration_podetail_new` (`id_position`, `c_pohedaer_id`, `calibration_code`, `calibration_price`, `calibration_qty`, `calibration_disc`, `calibration_disc_rp`, `calibration_total`, `calibration_ppn`, `no_po`, `status_po`, `vendor_id`, `tools_no_sertifikat`, `periode_date_awal`, `periode_date_akhir`, `nama_component`, `keterangan`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(360, 106, 'QC/K/SPT/2013/001', 4000, 1, 0, 0, 0, 0, 'P00006', 'Barang di terima', 6, 'SRT-023', '2020-10-13', '2021-10-13', '', 'Tidak Ada Keterangan', 'active', 135, '2020-10-13', 135, '2020-10-15 20:34:14', NULL, NULL),
(361, 106, 'QC/K/SPT/2013/002', 0, 1, 0, 0, 0, 0, '', 'Draft', 0, '', '2020-10-13', '2022-10-13', '', 'Tidak Ada Keterangan', 'nonactive', 135, '2020-10-13', NULL, NULL, 135, '2020-10-13 14:21:46'),
(362, 107, 'QC/K/SPT/2013/001', 10000, 1, 0, 0, 0, 0, 'P00002', 'Complete', 4, 'SRT-021', '2020-10-13', '2022-10-13', '', 'Tidak Ada Keterangan', 'active', 135, '2020-10-13', 135, '2020-10-15 18:44:40', NULL, NULL),
(363, 106, 'QC/K/SPT/2013/002', 0, 1, 0, 0, 0, 0, '', 'Draft', 0, '', '2020-10-13', '2022-10-13', '', 'Tidak Ada Keterangan', 'nonactive', 135, '2020-10-13', NULL, NULL, 135, '2020-10-13 18:35:44'),
(364, 106, 'QC/K/SPT/2013/002', 20000, 1, 0, 0, 0, 0, 'P0003', 'Draft', 18, 'SRT-043', '2020-10-13', '2021-10-13', '', 'Tidak Ada Keterangan', 'nonactive', 135, '2020-10-13', 135, '2020-10-13 18:38:16', 135, '2020-10-13 18:40:05'),
(365, 106, 'QC/K/SPT/2013/002', 0, 1, 0, 0, 0, 0, '', 'Draft', 0, '', '2020-10-14', '2022-10-14', '', 'Belum Ada Keterangan', 'nonactive', 135, '2020-10-14', NULL, NULL, 135, '2020-10-14 21:02:41'),
(366, 106, 'QC/K/SPT/2013/002', 0, 1, 0, 0, 0, 0, '', 'Draft', 0, '', '2020-10-14', '2022-10-14', '', 'Belum Ada Keterangan', 'nonactive', 135, '2020-10-14', NULL, NULL, 135, '2020-10-14 21:04:56'),
(367, 106, 'QC/K/SPT/2013/002', 0, 1, 0, 0, 0, 0, '', 'Draft', 0, '', '2020-10-14', '2021-10-14', '', 'Tidak Ada Keterangan', 'nonactive', 135, '2020-10-14', NULL, NULL, 135, '2020-10-14 21:30:56'),
(368, 0, '', 0, 0, 0, 0, 0, 0, '', 'Draft', 0, '', '0000-00-00', '0000-00-00', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(369, 0, '', 0, 0, 0, 0, 0, 0, '', 'Complete', 0, '', '0000-00-00', '0000-00-00', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(370, 0, '', 0, 0, 0, 0, 0, 0, '', 'Draft', 0, '', '0000-00-00', '0000-00-00', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(371, 0, '', 0, 0, 0, 0, 0, 0, '', 'Draft', 0, '', '0000-00-00', '0000-00-00', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(372, 106, 'QC/K/SPT/2013/002', 0, 1, 0, 0, 0, 0, '', 'Draft', 0, '', '2020-10-15', '2021-10-15', '', 'Tidak Ada Keterangan', 'nonactive', 135, '2020-10-15', NULL, NULL, 135, '2020-10-15 01:56:56'),
(373, 106, 'QC/K/SPT/2013/002', 0, 1, 0, 0, 0, 0, '', 'Draft', 0, '', '2020-10-15', '2021-10-15', '', 'Tidak Ada Keterangan', 'nonactive', 135, '2020-10-15', NULL, NULL, 135, '2020-10-15 02:01:17'),
(374, 106, 'QC/K/SPT/2013/002', 0, 1, 0, 0, 0, 0, '', 'Draft', 0, '', '1970-01-01', '1970-01-01', '', 'w', 'nonactive', 135, '2020-10-15', NULL, NULL, 135, '2020-10-15 02:01:45'),
(375, 106, 'QC/K/SPT/2013/002', 0, 1, 0, 0, 0, 0, '', 'Draft', 0, 'SA-09', '1970-01-01', '1970-01-01', '', 'q', 'nonactive', 135, '2020-10-15', 135, '2020-10-15 02:02:31', 135, '2020-10-15 02:03:08'),
(376, 106, 'QC/K/SPT/2013/002', 0, 1, 0, 0, 0, 0, '', 'Draft', 0, '', '1970-01-01', '1970-01-01', '', 'a', 'nonactive', 135, '2020-10-15', NULL, NULL, 135, '2020-10-15 02:04:27'),
(377, 106, 'QC/K/SPT/2013/002', 0, 1, 0, 0, 0, 0, '', 'Draft', 0, '', '1970-01-01', '1970-01-01', '', 'wer', 'nonactive', 135, '2020-10-15', NULL, NULL, 135, '2020-10-15 02:05:33'),
(378, 106, 'QC/K/SPT/2013/002', 0, 1, 0, 0, 0, 0, '', 'Draft', 0, '', '1970-01-01', '1970-01-01', '', 'wq', 'nonactive', 135, '2020-10-15', NULL, NULL, 135, '2020-10-15 02:06:10'),
(379, 106, 'QC/K/SPT/2013/002', 0, 1, 0, 0, 0, 0, '', 'Draft', 0, '', '1970-01-01', '1970-01-01', '', 'e', 'nonactive', 135, '2020-10-15', 135, '2020-10-15 02:21:18', 135, '2020-10-15 02:21:57'),
(380, 106, 'QC/K/TTR/2013/003', 0, 1, 0, 0, 0, 0, '', 'Draft', 0, '', '1970-01-01', '1970-01-01', '', 're', 'nonactive', 135, '2020-10-15', NULL, NULL, 135, '2020-10-15 02:21:08'),
(381, 106, 'QC/K/DCR/2013/004', 0, 1, 0, 0, 0, 0, '', 'Draft', 0, '', '1970-01-01', '1970-01-01', '', 'd', 'nonactive', 135, '2020-10-15', NULL, NULL, 135, '2020-10-15 02:13:26'),
(382, 106, 'QC/K/ACL/2013/007', 0, 1, 0, 0, 0, 0, '', 'Draft', 0, '', '1970-01-01', '1970-01-01', '', 'er', 'nonactive', 135, '2020-10-15', NULL, NULL, 135, '2020-10-15 02:13:20'),
(383, 106, 'QC/K/ACL/2013/008', 0, 1, 0, 0, 0, 0, '', 'Draft', 0, '', '1970-01-01', '1970-01-01', '', 'to', 'nonactive', 135, '2020-10-15', 135, '2020-10-15 02:13:10', 135, '2020-10-15 02:13:16'),
(384, 106, 'QC/K/OVN/2013/005', 0, 1, 0, 0, 0, 0, '', 'Draft', 0, '', '1970-01-01', '1970-01-01', '', 'd', 'nonactive', 135, '2020-10-15', NULL, NULL, 135, '2020-10-15 02:14:01'),
(385, 106, 'QC/K/DCR/2013/004', 0, 1, 0, 0, 0, 0, '', 'Draft', 0, '', '1970-01-01', '1970-01-01', '', 'q', 'nonactive', 135, '2020-10-15', NULL, NULL, 135, '2020-10-15 02:21:05'),
(386, 106, 'QC/K/SPT/2013/002', 10000, 1, 0, 0, 0, 0, 'AS090', 'Draft', 1, '', '1970-01-01', '1970-01-01', '', 'w', 'nonactive', 135, '2020-10-15', 135, '2020-10-15 18:43:28', 135, '2020-10-15 18:54:04'),
(387, 106, 'QC/K/SPT/2013/002', 0, 1, 0, 0, 0, 0, '', 'Draft', 0, '', '1970-01-01', '1970-01-01', '', 's', 'nonactive', 135, '2020-10-15', NULL, NULL, 135, '2020-10-15 19:00:53'),
(388, 106, 'QC/K/SPT/2013/002', 0, 1, 0, 0, 0, 0, '', 'Draft', 0, '', '1970-01-01', '1970-01-01', '', 'e', 'nonactive', 135, '2020-10-15', NULL, NULL, 135, '2020-10-15 19:07:24'),
(389, 106, 'QC/K/SPT/2013/002', 0, 1, 0, 0, 0, 0, '', 'Draft', 0, '', '1970-01-01', '1970-01-01', '', 'd', 'nonactive', 135, '2020-10-15', NULL, NULL, 135, '2020-10-15 19:16:07'),
(390, 106, 'QC/K/TTR/2013/003', 0, 1, 0, 0, 0, 0, '', 'Draft', 0, '', '1970-01-01', '1970-01-01', '', 'r', 'nonactive', 135, '2020-10-15', NULL, NULL, 135, '2020-10-15 19:14:24'),
(391, 106, 'QC/K/TTR/2013/003', 0, 1, 0, 0, 0, 0, '', 'Draft', 0, '', '1970-01-01', '1970-01-01', '', 'q', 'nonactive', 135, '2020-10-15', NULL, NULL, 135, '2020-10-15 19:14:46'),
(392, 106, 'QC/K/TTR/2013/003', 0, 1, 0, 0, 0, 0, '', 'Draft', 0, '', '1970-01-01', '1970-01-01', '', 'q', 'nonactive', 135, '2020-10-15', NULL, NULL, 135, '2020-10-15 19:15:36'),
(393, 106, 'QC/K/TTR/2013/003', 0, 1, 0, 0, 0, 0, '', 'Draft', 0, '', '1970-01-01', '1970-01-01', '', 'q', 'nonactive', 135, '2020-10-15', NULL, NULL, 135, '2020-10-15 19:16:31'),
(394, 106, 'QC/K/SPT/2013/002', 0, 1, 0, 0, 0, 0, '', 'Draft', 0, '', '1970-01-01', '1970-01-01', '', 'q', 'nonactive', 135, '2020-10-15', NULL, NULL, 135, '2020-10-15 19:17:45'),
(395, 106, 'QC/K/SPT/2013/002', 0, 1, 0, 0, 0, 0, '', 'Draft', 0, '', '1970-01-01', '1970-01-01', '', 'd', 'nonactive', 135, '2020-10-15', NULL, NULL, 135, '2020-10-15 20:25:21'),
(396, 106, 'QC/K/SPT/2013/002', 0, 1, 0, 0, 0, 0, '', 'Draft', 0, '', '1970-01-01', '1970-01-01', '', 'w', 'nonactive', 135, '2020-10-15', NULL, NULL, 135, '2020-10-15 20:26:09'),
(397, 106, 'QC/K/SPT/2013/002', 0, 1, 0, 0, 0, 0, '', 'Draft', 0, '', '1970-01-01', '1970-01-01', '', 'we', 'nonactive', 135, '2020-10-15', NULL, NULL, 135, '2020-10-15 20:32:48'),
(398, 106, 'QC/K/SPT/2013/002', 0, 1, 0, 0, 0, 0, '', 'Draft', 0, '', '1970-01-01', '1970-01-01', '', 'e', 'nonactive', 135, '2020-10-15', NULL, NULL, 135, '2020-10-15 20:33:29'),
(399, 106, 'QC/K/SPT/2013/002', 0, 1, 0, 0, 0, 0, '', 'Barang di terima', 0, '', '1970-01-01', '1970-01-01', '', 'e', 'nonactive', 135, '2020-10-15', NULL, NULL, 135, '2020-10-15 20:34:20');

-- --------------------------------------------------------

--
-- Table structure for table `e04_ts_calibration_poheader`
--

CREATE TABLE `e04_ts_calibration_poheader` (
  `c_pohedaer_id` int(11) NOT NULL,
  `calibrationpo_code` varchar(20) NOT NULL,
  `periode_date_awal` date NOT NULL,
  `periode_date_akhir` date NOT NULL,
  `date_po` date NOT NULL,
  `status_po` varchar(250) NOT NULL,
  `user_pk` varchar(30) NOT NULL,
  `nama_type` varchar(250) DEFAULT NULL,
  `department_pk` varchar(15) NOT NULL,
  `status_pk` int(1) NOT NULL DEFAULT '0' COMMENT '0= menunggu,1=disetujui',
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e04_ts_calibration_poheader`
--

INSERT INTO `e04_ts_calibration_poheader` (`c_pohedaer_id`, `calibrationpo_code`, `periode_date_awal`, `periode_date_akhir`, `date_po`, `status_po`, `user_pk`, `nama_type`, `department_pk`, `status_pk`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(140, 'PK/2020/11/009', '0000-00-00', '0000-00-00', '2020-11-02', '', 'plant_wisnu_sp', 'External', 'PR', 0, 'active', 934, '2020-11-02 13:02:21', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `e04_ts_trans_pk`
--

CREATE TABLE `e04_ts_trans_pk` (
  `periode_id` int(11) NOT NULL,
  `calibration_id` int(11) NOT NULL,
  `periode_year` varchar(4) NOT NULL,
  `periode_date` date NOT NULL,
  `calibration_executor` int(1) DEFAULT NULL COMMENT '1=internal, 2=eksternal',
  `vendor_id` int(11) NOT NULL COMMENT 'combobox',
  `periode_information` varchar(255) NOT NULL,
  `status_calibration` int(1) NOT NULL DEFAULT '0' COMMENT '0=not calibrated, 1=oke calibrated',
  `calibration_price` decimal(18,2) NOT NULL DEFAULT '0.00',
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e04_ts_trans_pk`
--

INSERT INTO `e04_ts_trans_pk` (`periode_id`, `calibration_id`, `periode_year`, `periode_date`, `calibration_executor`, `vendor_id`, `periode_information`, `status_calibration`, `calibration_price`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 2, '2020', '2020-04-22', NULL, 4, '', 1, '0.00', 'active', 1, '2020-04-22 09:51:45', 1, '2020-04-22 13:59:00', NULL, NULL),
(2, 2, '2021', '2021-04-22', 1, 0, '', 1, '0.00', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 1, '2020', '2020-04-22', NULL, 4, 'sayw', 1, '0.00', 'active', 1, '2020-04-22 14:40:37', NULL, NULL, NULL, NULL),
(4, 1, '2021', '2021-04-23', 1, 0, '', 1, '0.00', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 1, '2022', '2021-04-23', 1, 0, '', 1, '0.00', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 1, '2023', '2021-04-23', 1, 0, '', 1, '0.00', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 2, '2022', '2021-04-23', 1, 0, '', 1, '0.00', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 2, '2023', '2021-04-23', 1, 0, '', 1, '0.00', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 2, '2024', '2021-04-23', 1, 0, '', 1, '0.00', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 2, '2025', '2021-04-23', 1, 0, '', 1, '0.00', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 2, '2026', '2021-04-23', 1, 0, '', 1, '0.00', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 2, '2027', '2021-04-23', 1, 0, '', 1, '0.00', 'active', NULL, NULL, 1, '2020-04-23 14:14:32', NULL, NULL),
(13, 1, '2024', '2021-04-23', 1, 0, '', 1, '0.00', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 2, '2028', '2021-04-23', 1, 0, '', 1, '0.00', 'active', NULL, NULL, 1, '2020-04-23 14:16:06', NULL, NULL),
(15, 2, '2029', '2021-04-23', 1, 0, '', 1, '0.00', 'active', NULL, NULL, 1, '2020-04-23 14:16:08', NULL, NULL),
(16, 2, '2030', '2021-04-23', 1, 0, '', 1, '0.00', 'active', NULL, NULL, 1, '2020-04-23 14:16:27', NULL, NULL),
(17, 2, '2031', '2021-04-23', 1, 0, '', 1, '0.00', 'active', NULL, NULL, 1, '2020-04-23 14:17:03', NULL, NULL),
(18, 2, '2032', '2021-04-23', 1, 0, '', 1, '0.00', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(19, 2, '2033', '2021-04-23', 1, 0, '', 1, '0.00', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(20, 2, '2034', '2021-04-23', 1, 0, '', 1, '0.00', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(21, 2, '2035', '2021-04-23', 1, 0, '', 1, '0.00', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(22, 2, '2036', '2021-04-23', 1, 0, '', 1, '0.00', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(23, 1, '2025', '2021-04-23', 1, 0, '', 1, '0.00', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(24, 1, '2026', '2021-04-23', 1, 0, '', 0, '0.00', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(25, 2, '2037', '2021-04-23', 1, 0, '', 1, '0.00', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(26, 2, '2038', '2021-04-23', 1, 0, '', 1, '0.00', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(27, 2, '2039', '2021-04-23', 1, 0, '', 0, '0.00', 'active', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `e05_concept_product_step_1`
--

CREATE TABLE `e05_concept_product_step_1` (
  `konsep_produk_baru_id` int(11) NOT NULL,
  `no_konsep_produk` varchar(20) NOT NULL,
  `revisi_konsepproduk` int(2) NOT NULL DEFAULT '0',
  `tanggal_pembuatan` date NOT NULL,
  `nama_merk` varchar(50) NOT NULL,
  `nama_produk` varchar(150) DEFAULT NULL,
  `deskripsi_produk` varchar(255) NOT NULL,
  `kbahan_aktif` varchar(50) NOT NULL,
  `kegunaan` varchar(150) NOT NULL,
  `cara_pemakaian` varchar(150) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `bentuk` varchar(20) NOT NULL,
  `aroma` varchar(20) NOT NULL,
  `pH` varchar(20) NOT NULL,
  `viskositas` varchar(20) NOT NULL,
  `berat_jenis` varchar(10) NOT NULL,
  `produk_acuan` varchar(150) NOT NULL,
  `uji_efikasi` varchar(50) NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e05_concept_product_step_1`
--

INSERT INTO `e05_concept_product_step_1` (`konsep_produk_baru_id`, `no_konsep_produk`, `revisi_konsepproduk`, `tanggal_pembuatan`, `nama_merk`, `nama_produk`, `deskripsi_produk`, `kbahan_aktif`, `kegunaan`, `cara_pemakaian`, `warna`, `bentuk`, `aroma`, `pH`, `viskositas`, `berat_jenis`, `produk_acuan`, `uji_efikasi`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 'RNDK/2020/01', 0, '2020-06-26', 'TRUNCATE TABLE', 'TRUNCATE TABLE', 'TRUNCATE TABLE', 'TRUNCATE TABLE', 'TRUNCATE TABLE', 'TRUNCATE TABLE', 'TRUNCATE TABLE', 'TRUNCATE TABLE', 'TRUNCATE TABLE', 'TRUNCATE TABLE', 'TRUNCATE TABLE', 'TRUNCATE T', 'TRUNCATE TABLE', 'Tidak', 'active', 1, '2020-06-26 09:18:06', 1, '2020-06-26 09:22:09', NULL, NULL),
(5, 'RNDK/2020/02', 0, '2020-07-02', 'retestr', 'este', 'ers', 'moehamad', 'moehamad', 'moehamad', 'moehamad', 'moehamad', 'moehamad', 'moehamad', 'moehamad', 'moehamad', 'moehamad', 'Ya', 'nonactive', 1, '2020-07-02 10:20:25', 1, '2020-07-02 10:53:19', 1, '2020-07-02 11:13:58'),
(6, 'RNDK/2020/03', 0, '2020-08-05', 'saldy', 'saldy', 'saldy', 'saldy', 'saldy', 'saldy', 'saldy', 'saldy', 'saldy', 'saldy', 'saldy', 'saldy', 'saldy', 'Ya', 'nonactive', 1, '2020-08-05 09:50:31', NULL, NULL, 1, '2020-08-05 09:50:35'),
(7, 'RNDK/2020/04', 0, '2020-08-05', 'THERASKIN', 'FACIAL', 'FACIAL FACE', 'NA', 'FACIAL', 'BASUH', 'HIJAU', 'KOTAK', 'WANGI', 'BASA', 'OK', 'ADA', 'SABUN', 'Ya', 'active', 137, '2020-08-05 09:59:07', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `e05_concept_product_step_2`
--

CREATE TABLE `e05_concept_product_step_2` (
  `step_2_id` int(11) NOT NULL,
  `konsep_produk_baru_id` int(11) NOT NULL,
  `primer_jenis_kemasan` varchar(10) NOT NULL,
  `primer_jenis_lainlain` varchar(25) NOT NULL,
  `primer_bahan_kemasan` varchar(11) NOT NULL,
  `primer_warna_kemasan` varchar(15) NOT NULL,
  `primer_warna_lainlain` varchar(25) NOT NULL,
  `primer_tinggi_kemasan` varchar(50) NOT NULL,
  `primer_diameter_dalam` varchar(150) DEFAULT NULL COMMENT '1=internal, 2=eksternal',
  `primer_diameter_luar` varchar(255) NOT NULL COMMENT 'combobox',
  `primer_kapasitas_kemas` varchar(50) NOT NULL,
  `primer_valume_kemas` varchar(150) NOT NULL COMMENT '0=not calibrated, 1=oke calibrated',
  `primer_uji_kebocoran` varchar(150) NOT NULL,
  `primer_uji_transportasi` varchar(20) NOT NULL,
  `sekunder_jenis_kemasan` varchar(20) NOT NULL,
  `sekunder_bahan_kemasan` varchar(20) NOT NULL,
  `sekunder_warna_kemasan` varchar(20) NOT NULL,
  `sekunder_panjang_kemasan` varchar(20) NOT NULL,
  `sekunder_lebar_kemasan` varchar(10) NOT NULL,
  `sekunder_tinggi_kemasan` varchar(150) NOT NULL,
  `sekunder_tebal_kemasan` varchar(50) NOT NULL,
  `tersier_jenis_kemasan` varchar(20) NOT NULL,
  `tersier_bahan_kemasan` varchar(30) NOT NULL,
  `tersier_warna_kemasan` varchar(30) NOT NULL,
  `tersier_warna_lainlain` varchar(150) DEFAULT NULL,
  `tersier_panjang_kemasan` varchar(30) NOT NULL,
  `tersier_lebar_kemasan` varchar(30) NOT NULL,
  `tersier_tinggi_kemasan` varchar(30) NOT NULL,
  `tersier_tebal_kemasan` varchar(30) NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e05_concept_product_step_2`
--

INSERT INTO `e05_concept_product_step_2` (`step_2_id`, `konsep_produk_baru_id`, `primer_jenis_kemasan`, `primer_jenis_lainlain`, `primer_bahan_kemasan`, `primer_warna_kemasan`, `primer_warna_lainlain`, `primer_tinggi_kemasan`, `primer_diameter_dalam`, `primer_diameter_luar`, `primer_kapasitas_kemas`, `primer_valume_kemas`, `primer_uji_kebocoran`, `primer_uji_transportasi`, `sekunder_jenis_kemasan`, `sekunder_bahan_kemasan`, `sekunder_warna_kemasan`, `sekunder_panjang_kemasan`, `sekunder_lebar_kemasan`, `sekunder_tinggi_kemasan`, `sekunder_tebal_kemasan`, `tersier_jenis_kemasan`, `tersier_bahan_kemasan`, `tersier_warna_kemasan`, `tersier_warna_lainlain`, `tersier_panjang_kemasan`, `tersier_lebar_kemasan`, `tersier_tinggi_kemasan`, `tersier_tebal_kemasan`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 1, 'Tube', '', 'TRUNCATE TA', 'White Opaque', '', 'TRUNCATE TABLE', 'TRUNCATE TABLE', 'TRUNCATE TABLE', 'TRUNCATE TABLE', 'TRUNCATE TABLE', 'TRUNCATE TABLE', 'TRUNCATE TABLE', 'Shrink polos', 'TRUNCATE TABLE', 'TRUNCATE TABLE', 'TRUNCATE TABLE', 'TRUNCATE T', 'TRUNCATE TABLE', 'TRUNCATE TABLE', 'Master Box', 'TRUNCATE TABLE', 'TRUNCATE TABLETRUNCATE TABLE', NULL, 'TRUNCATE TABLE', 'TRUNCATE TABLE', 'TRUNCATE TABLE', 'TRUNCATE TABLE', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 5, 'Botol', '', 'moehamad', 'Transparant', '', 'moehamad', 'moehamad', 'moehamad', 'moehamad', 'moehamad', 'moehamad', 'moehamad', 'Stiker', 'moehamad', 'moehamad', 'moehamad', 'moehamad', 'moehamad', 'moehamad', 'Master Box', 'moehamad', 'moehamad', NULL, 'moehamad', 'moehamad', 'moehamad', 'moehamad', 'nonactive', NULL, NULL, NULL, NULL, 1, '2020-07-02 11:13:58'),
(6, 6, 'Botol', '', 'saldy', 'White Opaque', '', 'saldy', 'saldy', 'saldy', 'saldy', 'saldy', 'saldy', 'saldy', 'Innerbox', 'saldy', 'saldy', 'saldy', 'saldy', 'saldy', 'saldy', 'Master Box', 'saldy', 'saldy', NULL, 'saldy', 'saldy', 'saldy', 'saldy', 'nonactive', NULL, NULL, NULL, NULL, 1, '2020-08-05 09:50:35'),
(7, 7, 'Botol', '', 'PLASTIK', 'Transparant', '', '20cm', '0.5', '0.6', '50', '41', 'bocor', 'Muter-muter', 'Stiker', 'plastik', 'hijau', '20', '15', '20', '01', 'Master Box', 'plastik', 'ungu', NULL, '20', '15', '50', '20', 'active', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `e05_concept_product_step_3`
--

CREATE TABLE `e05_concept_product_step_3` (
  `step_3_id` int(11) NOT NULL,
  `konsep_produk_baru_id` int(11) NOT NULL,
  `bb_nama_bahan_baku` varchar(11) NOT NULL,
  `bb_inci_name` varchar(35) NOT NULL,
  `bb_manufacture` varchar(50) NOT NULL,
  `bb_harga_bahan_baku` varchar(150) DEFAULT NULL,
  `bb_moq` varchar(255) NOT NULL,
  `bb_pengunaan` varchar(50) NOT NULL,
  `bb_ketersedian_rm` varchar(150) NOT NULL,
  `bb_lead_time` varchar(150) NOT NULL,
  `bb_shelf_life` varchar(20) NOT NULL,
  `bb_penyimpanan` varchar(20) NOT NULL,
  `bk_nama_bahan_kemas` varchar(20) NOT NULL,
  `bk_komponen_bahan` varchar(20) NOT NULL,
  `bk_manufacture` varchar(20) NOT NULL,
  `bk_harga_bahan_kemas` varchar(10) NOT NULL,
  `bk_moq` varchar(150) NOT NULL,
  `bk_ketersediaan_pm` varchar(50) NOT NULL,
  `bk_lead_time` varchar(30) NOT NULL,
  `bk_penyimpanan` varchar(30) NOT NULL,
  `target_market` varchar(30) NOT NULL,
  `estimasi_penjualan` varchar(30) NOT NULL,
  `pendaftaran_notifikasi` varchar(30) NOT NULL,
  `rencana_launching_produk` varchar(30) NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e05_concept_product_step_3`
--

INSERT INTO `e05_concept_product_step_3` (`step_3_id`, `konsep_produk_baru_id`, `bb_nama_bahan_baku`, `bb_inci_name`, `bb_manufacture`, `bb_harga_bahan_baku`, `bb_moq`, `bb_pengunaan`, `bb_ketersedian_rm`, `bb_lead_time`, `bb_shelf_life`, `bb_penyimpanan`, `bk_nama_bahan_kemas`, `bk_komponen_bahan`, `bk_manufacture`, `bk_harga_bahan_kemas`, `bk_moq`, `bk_ketersediaan_pm`, `bk_lead_time`, `bk_penyimpanan`, `target_market`, `estimasi_penjualan`, `pendaftaran_notifikasi`, `rencana_launching_produk`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 5, 'moehamad', 'moehamad', 'moehamad', 'moehamad', 'moehamad', 'moehamad', 'Ready Stock', 'moehamad', 'moehamad', 'moehamad', 'moehamad', 'moehamad', 'moehamad', 'moehamad', 'moehamad', 'Ready Stock', 'moehamad', 'moehamad', 'moehamad', 'moehamad', 'moehamad', 'moehamad123', 'nonactive', NULL, NULL, NULL, NULL, 1, '2020-07-02 11:13:58'),
(2, 6, 'saldy', 'saldy', 'saldy', 'saldy', 'saldy', 'saldy', 'Indent', 'saldy', 'saldy', 'saldy', 'saldy', 'saldy', 'saldy', 'saldy', 'saldy', 'Indent', 'saldy', 'saldy', 'saldy', 'saldy', 'saldy', 'saldy', 'nonactive', NULL, NULL, NULL, NULL, 1, '2020-08-05 09:50:35'),
(3, 7, 'RM', 'NEW ITEM', 'SUPPLIER', '50', '02', '10%', 'Indent', '20', '30', '10', 'KEMAS', 'ADA', 'SUPP', '15', '10', 'Ready Stock', '10', '30', '30', '50', '001', 'BESUK', 'active', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `e05_concept_product_step_4`
--

CREATE TABLE `e05_concept_product_step_4` (
  `step_4_id` int(11) NOT NULL,
  `konsep_produk_baru_id` varchar(11) NOT NULL,
  `tanggal_pembuatan` date NOT NULL,
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
-- Table structure for table `e05_konsep_produk_baru`
--

CREATE TABLE `e05_konsep_produk_baru` (
  `konsep_produk_baru_id` int(11) NOT NULL,
  `no_konsep_produk` varchar(20) NOT NULL,
  `revisike` int(2) NOT NULL DEFAULT '0',
  `tanggal_pembuatan` date NOT NULL,
  `status_kosep` int(1) NOT NULL DEFAULT '0' COMMENT '0 = revisi, 1 finis',
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e05_konsep_produk_baru`
--

INSERT INTO `e05_konsep_produk_baru` (`konsep_produk_baru_id`, `no_konsep_produk`, `revisike`, `tanggal_pembuatan`, `status_kosep`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(2, 'RND-K/2020/08/001', 6, '2020-05-08', 1, 'active', 1, '2020-08-05 10:08:40', 1, '2020-08-05 15:29:34', NULL, NULL),
(3, 'RND-K/2020/08/002', 0, '0000-00-00', 0, 'nonactive', 1, '2020-08-05 12:01:34', NULL, NULL, 1, '2020-08-05 12:02:49'),
(4, 'RND-K/2020/08/002', 0, '2020-08-05', 0, 'active', 1, '2020-08-05 12:02:53', NULL, NULL, NULL, NULL),
(5, 'RND-K/2020/08/003', 0, '2020-08-05', 0, 'active', 1, '2020-08-05 15:30:14', NULL, NULL, NULL, NULL),
(6, 'RND-K/2020/08/004', 0, '2020-08-10', 0, 'active', 136, '2020-08-10 10:49:24', NULL, NULL, NULL, NULL),
(7, 'RND-K/2020/08/005', 0, '2020-08-11', 0, 'nonactive', 1, '2020-08-11 14:56:12', NULL, NULL, 1, '2020-08-11 14:57:10'),
(8, 'RND-K/2020/08/006', 0, '2020-08-11', 0, 'active', 1, '2020-08-11 14:56:50', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `e05_konsep_produk_baru_detail`
--

CREATE TABLE `e05_konsep_produk_baru_detail` (
  `konsep_produk_detail` int(11) NOT NULL,
  `konsep_produk_baru_id` int(11) NOT NULL,
  `copy_data` int(1) NOT NULL DEFAULT '0',
  `revisi` int(2) NOT NULL,
  `nama_merk` varchar(50) NOT NULL,
  `nama_produk` varchar(150) DEFAULT NULL,
  `deskripsi_produk` varchar(255) NOT NULL,
  `kbahan_aktif` varchar(50) NOT NULL,
  `kegunaan` varchar(150) NOT NULL,
  `cara_pemakaian` varchar(150) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `bentuk` varchar(20) NOT NULL,
  `aroma` varchar(20) NOT NULL,
  `pH` varchar(20) NOT NULL,
  `viskositas` varchar(20) NOT NULL,
  `berat_jenis` varchar(10) NOT NULL,
  `produk_acuan` varchar(150) NOT NULL,
  `uji_efikasi` varchar(50) NOT NULL,
  `primer_jenis_kemasan` varchar(10) NOT NULL,
  `primer_jenis_lainlain` varchar(25) NOT NULL,
  `primer_bahan_kemasan` varchar(11) NOT NULL,
  `primer_warna_kemasan` varchar(15) NOT NULL,
  `primer_warna_lainlain` varchar(25) NOT NULL,
  `primer_tinggi_kemasan` varchar(50) NOT NULL,
  `primer_diameter_dalam` varchar(150) DEFAULT NULL COMMENT '1=internal; 2=eksternal',
  `primer_diameter_luar` varchar(255) NOT NULL COMMENT 'combobox',
  `primer_kapasitas_kemasan` varchar(50) NOT NULL,
  `primer_valume_kemasan` varchar(150) NOT NULL COMMENT '0=not calibrated; 1=oke calibrated',
  `primer_uji_kebocoran` varchar(150) NOT NULL,
  `primer_uji_transportasi` varchar(20) NOT NULL,
  `sekunder_jenis_kemasan` varchar(20) NOT NULL,
  `sekunder_bahan_kemasan` varchar(20) NOT NULL,
  `sekunder_warna_kemasan` varchar(20) NOT NULL,
  `sekunder_panjang_kemasan` varchar(20) NOT NULL,
  `sekunder_lebar_kemasan` varchar(10) NOT NULL,
  `sekunder_tinggi_kemasan` varchar(150) NOT NULL,
  `sekunder_tebal_kemasan` varchar(50) NOT NULL,
  `tersier_jenis_kemasan` varchar(20) NOT NULL,
  `tersier_bahan_kemasan` varchar(30) NOT NULL,
  `tersier_warna_kemasan` varchar(30) NOT NULL,
  `tersier_warna_lainlain` varchar(150) NOT NULL,
  `tersier_panjang_kemasan` varchar(30) NOT NULL,
  `tersier_lebar_kemasan` varchar(30) NOT NULL,
  `tersier_tinggi_kemasan` varchar(30) NOT NULL,
  `tersier_tebal_kemasan` varchar(30) NOT NULL,
  `bb_nama_bahan_baku` varchar(11) NOT NULL,
  `bb_inci_name` varchar(35) NOT NULL,
  `bb_manufacture` varchar(50) NOT NULL,
  `bb_harga_bahan_baku` varchar(150) DEFAULT NULL,
  `bb_moq` varchar(255) NOT NULL,
  `bb_pengunaan` varchar(50) NOT NULL,
  `bb_ketersedian_rm` varchar(150) NOT NULL,
  `bb_lead_time` varchar(150) NOT NULL,
  `bb_shelf_life` varchar(20) NOT NULL,
  `bb_penyimpanan` varchar(20) NOT NULL,
  `bk_nama_bahan_kemas` varchar(20) NOT NULL,
  `bk_komponen_bahan` varchar(20) NOT NULL,
  `bk_manufacture` varchar(20) NOT NULL,
  `bk_harga_bahan_kemas` varchar(10) NOT NULL,
  `bk_moq` varchar(150) NOT NULL,
  `bk_ketersediaan_pm` varchar(50) NOT NULL,
  `bk_lead_time` varchar(30) NOT NULL,
  `bk_penyimpanan` varchar(30) NOT NULL,
  `target_market` varchar(30) NOT NULL,
  `estimasi_penjualan` varchar(30) NOT NULL,
  `pendaftaran_notifikasi` varchar(30) NOT NULL,
  `rencana_launching_produk` varchar(30) NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e05_konsep_produk_baru_detail`
--

INSERT INTO `e05_konsep_produk_baru_detail` (`konsep_produk_detail`, `konsep_produk_baru_id`, `copy_data`, `revisi`, `nama_merk`, `nama_produk`, `deskripsi_produk`, `kbahan_aktif`, `kegunaan`, `cara_pemakaian`, `warna`, `bentuk`, `aroma`, `pH`, `viskositas`, `berat_jenis`, `produk_acuan`, `uji_efikasi`, `primer_jenis_kemasan`, `primer_jenis_lainlain`, `primer_bahan_kemasan`, `primer_warna_kemasan`, `primer_warna_lainlain`, `primer_tinggi_kemasan`, `primer_diameter_dalam`, `primer_diameter_luar`, `primer_kapasitas_kemasan`, `primer_valume_kemasan`, `primer_uji_kebocoran`, `primer_uji_transportasi`, `sekunder_jenis_kemasan`, `sekunder_bahan_kemasan`, `sekunder_warna_kemasan`, `sekunder_panjang_kemasan`, `sekunder_lebar_kemasan`, `sekunder_tinggi_kemasan`, `sekunder_tebal_kemasan`, `tersier_jenis_kemasan`, `tersier_bahan_kemasan`, `tersier_warna_kemasan`, `tersier_warna_lainlain`, `tersier_panjang_kemasan`, `tersier_lebar_kemasan`, `tersier_tinggi_kemasan`, `tersier_tebal_kemasan`, `bb_nama_bahan_baku`, `bb_inci_name`, `bb_manufacture`, `bb_harga_bahan_baku`, `bb_moq`, `bb_pengunaan`, `bb_ketersedian_rm`, `bb_lead_time`, `bb_shelf_life`, `bb_penyimpanan`, `bk_nama_bahan_kemas`, `bk_komponen_bahan`, `bk_manufacture`, `bk_harga_bahan_kemas`, `bk_moq`, `bk_ketersediaan_pm`, `bk_lead_time`, `bk_penyimpanan`, `target_market`, `estimasi_penjualan`, `pendaftaran_notifikasi`, `rencana_launching_produk`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(6, 2, 1, 0, 'tersier_warna_lainlain', 'tersier_warna_lainlain', 'tersier_warna_lainlain', 'tersier_warna_lainlain', 'tersier_warna_lainlain', 'tersier_warna_lainlain', 'tersier_warna_lainla', 'tersier_warna_lainla', 'tersier_warna_lainla', 'tersier_warna_lainla', 'tersier_warna_lainla', 'tersier_wa', 'tersier_warna_lainlain', 'Tidak', 'Botol', '', 'tersier_war', 'Transparant', '', 'tersier_warna_lainlain', 'tersier_warna_lainlain', 'tersier_warna_lainlain', 'tersier_warna_lainlain', 'tersier_warna_lainlain', 'tersier_warna_lainlain', 'tersier_warna_lainla', 'Stiker', 'tersier_warna_lainla', 'tersier_warna_lainla', 'tersier_warna_lainla', 'tersier_wa', 'tersier_warna_lainlain', 'tersier_warna_lainlain', '', 'tersier_warna_lainlain', 'tersier_warna_lainlain', '', 'tersier_warna_lainlain', 'tersier_warna_lainlain', 'tersier_warna_lainlain', 'tersier_warna_lainlain', 'tersier_war', 'tersier_warna_lainlain', 'tersier_warna_lainlain', 'tersier_warna_lainlain', 'tersier_warna_lainlain', 'tersier_warna_lainlain', 'Ready Stock', 'tersier_warna_lainlain', 'tersier_warna_lainla', 'tersier_warna_lainla', 'tersier_warna_lainla', 'tersier_warna_lainla', 'tersier_warna_lainla', 'tersier_wa', 'tersier_warna_lainlain', 'Indent', 'tersier_warna_lainlain', 'tersier_warna_lainlain', 'tersier_warna_lainlain', 'tersier_warna_lainlain', 'tersier_warna_lainlain', 'tersier_warna_lainlain', 'active', 1, '2020-08-05 10:35:00', 1, '2020-08-05 12:32:51', NULL, NULL),
(24, 2, 1, 1, 'tersier_warna_lainlain', 'tersier_warna_lainlain', 'tersier_warna_lainlain', 'tersier_warna_lainlain', 'tersier_warna_lainlain', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'active', NULL, NULL, 1, '2020-08-05 12:33:34', NULL, NULL),
(25, 2, 1, 2, 'tersier_warna_lainlain', 'tersier_warna_lainlain', 'tersier_warna_lainlain', 'tersier_warna_lainlain', 'tersier_warna_lainlain', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'active', NULL, NULL, 1, '2020-08-05 12:33:38', NULL, NULL),
(26, 2, 1, 3, 'tersier_warna_lainlain', 'tersier_warna_lainlain', 'tersier_warna_lainlain', 'tersier_warna_lainlain', 'tersier_warna_lainlain', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'active', NULL, NULL, 1, '2020-08-05 13:39:18', NULL, NULL),
(27, 2, 1, 4, 'tersier_warna_lainlain', 'tersier_warna_lainlain', 'tersier_warna_lainlain', 'tersier_warna_lainlain', 'tersier_warna_lainlain', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'active', NULL, NULL, 1, '2020-08-05 13:44:33', NULL, NULL),
(28, 2, 1, 5, 'tersier_warna_lainlain', 'tersier_warna_lainlain', 'tersier_warna_lainlain', 'tersier_warna_lainlain', 'tersier_warna_lainlain ', 'tersier_warna_lainlain 1', 'tersier_warna_lainla', 'tersier_warna_lainla', 'tersier_warna_lainla', 'tersier_warna_lainla', 'tersier_warna_lainla', 'tersier_wa', 'tersier_warna_lainlain 8', 'Ya', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'active', NULL, NULL, 1, '2020-08-05 13:53:54', NULL, NULL),
(29, 2, 1, 6, 'tersier_warna_lainlain', 'tersier_warna_lainlain', 'tersier_warna_lainlain', 'tersier_warna_lainlain', 'tersier_warna_lainlain ', 'tersier_warna_lainlain 1', 'tersier_warna_lainla', 'tersier_warna_lainla', 'tersier_warna_lainla', 'tersier_warna_lainla', 'tersier_warna_lainla', 'tersier_wa', 'tersier_warna_lainlain 8', 'Ya', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'active', NULL, NULL, 136, '2020-08-05 14:01:34', NULL, NULL),
(30, 2, 1, 7, 'tersier_warna_lainlain', 'tersier_warna_lainlain', 'tersier_warna_lainlain', 'tersier_warna_lainlain', 'tersier_warna_lainlain', 'tersier_warna_lainlain 1', 'tersier_warna_lainla', 'tersier_warna_lainla', 'tersier_warna_lainla', 'tersier_warna_lainla', 'tersier_warna_lainla', 'tersier_wa', 'tersier_warna_lainlain 8', 'Ya', 'Botol', '', 'primer_valu', 'Transparant', '', 'primer_valume_kemas', 'primer_valume_kemas', 'primer_valume_kemas', 'primer_valume_kemas', 'primer_valume_kemas', 'primer_valume_kemasprimer_valume_kemas', 'primer_valume_kemas', 'Stiker', 'primer_valume_kemas', 'primer_valume_kemas', 'primer_valume_kemas', 'primer_val', 'primer_valume_kemas', 'primer_valume_kemas', 'Master Box', 'primer_valume_kemas', 'primer_valume_kemas', '', 'primer_valume_kemas', 'primer_valume_kemas', 'primer_valume_kemas', 'primer_valume_kemas', 'primer_valu', 'primer_valume_kemas', 'primer_valume_kemas', 'primer_valume_kemas', 'primer_valume_kemas', 'primer_valume_kemas', 'Ready Stock', 'primer_valume_kemas', 'primer_valume_kemas', 'primer_valume_kemas', 'primer_valume_kemas', 'primer_valume_kemas', 'primer_valume_kemas', 'primer_val', 'primer_valume_kemas', 'Ready Stock', 'primer_valume_kemas', 'primer_valume_kemas', 'primer_valume_kemas', 'primer_valume_kemas', 'primer_valume_kemas', 'primer_valume_kemas', 'active', NULL, NULL, 1, '2020-08-05 15:18:16', NULL, NULL),
(31, 2, 1, 8, 'tersier_warna_lainlain', 'tersier_warna_lainlain', 'tersier_warna_lainlain', 'tersier_warna_lainlain', 'tersier_warna_lainlain', 'tersier_warna_lainlain 1', 'tersier_warna_lainla', 'tersier_warna_lainla', 'tersier_warna_lainla', 'tersier_warna_lainla', 'tersier_warna_lainla', 'tersier_wa', 'tersier_warna_lainlain 8', 'Ya', 'Botol', '', 'primer_valu', 'Transparant', '', 'primer_valume_kemas', 'primer_valume_kemas', '', 'primer_valume_kemas', 'primer_valume_kemas', 'primer_valume_kemasprimer_valume_kemas', 'primer_valume_kemas', 'Stiker', 'primer_valume_kemas', 'primer_valume_kemas', 'primer_valume_kemas', 'primer_val', 'primer_valume_kemas', 'primer_valume_kemas', 'Master Box', 'primer_valume_kemas', 'primer_valume_kemas', '', 'primer_valume_kemas', 'primer_valume_kemas', 'primer_valume_kemas', 'primer_valume_kemas', 'primer_valu', 'primer_valume_kemas', 'primer_valume_kemas', 'primer_valume_kemas', 'primer_valume_kemas', 'primer_valume_kemas', 'Ready Stock', 'primer_valume_kemas', 'primer_valume_kemas', 'primer_valume_kemas', 'primer_valume_kemas', 'primer_valume_kemas', 'primer_valume_kemas', 'primer_val', 'primer_valume_kemas', 'Ready Stock', 'primer_valume_kemas', 'primer_valume_kemas', 'primer_valume_kemas', 'primer_valume_kemas', 'primer_valume_kemas', 'primer_valume_kemas', 'active', NULL, NULL, 1, '2020-08-05 15:26:26', NULL, NULL),
(32, 2, 2, 9, 'tersier_warna_lainlain', 'tersier_warna_lainlain', 'tersier_warna_lainlain', 'tersier_warna_lainlain', 'tersier_warna_lainlain', 'tersier_warna_lainlain 1', 'tersier_warna_lainla', 'tersier_warna_lainla', 'tersier_warna_lainla', 'tersier_warna_lainla', 'tersier_warna_lainla', 'tersier_wa', 'tersier_warna_lainlain 8', 'Ya', 'Botol', '', 'primer_valu', 'Transparant', '', 'primer_valume_kemas', 'primer_valume_kemas', '', 'primer_valume_kemas', 'primer_valume_kemas', 'primer_valume_kemasprimer_valume_kemas', 'primer_valume_kemas', 'Stiker', 'primer_valume_kemas', 'primer_valume_kemas', 'primer_valume_kemas', 'primer_val', 'primer_valume_kemas', 'primer_valume_kemas', 'Master Box', 'primer_valume_kemas', 'primer_valume_kemas', '', 'primer_valume_kemas', 'primer_valume_kemas', 'primer_valume_kemas', 'primer_valume_kemas', 'primer_valu', 'primer_valume_kemas', 'primer_valume_kemas', 'primer_valume_kemas', 'primer_valume_kemas', 'primer_valume_kemas', 'Ready Stock', 'primer_valume_kemas', 'primer_valume_kemas', 'primer_valume_kemas', 'primer_valume_kemas', 'primer_valume_kemas', 'primer_valume_kemas', 'primer_val', 'primer_valume_kemas', 'Ready Stock', 'primer_valume_kemas', 'primer_valume_kemas', 'primer_valume_kemas', 'primer_valume_kemas', 'primer_valume_kemas', 'primer_valume_kemas', 'active', NULL, NULL, 663, '2020-08-05 15:55:28', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `e06_new_schedule`
--

CREATE TABLE `e06_new_schedule` (
  `schedule_id` int(11) NOT NULL,
  `namaKaryawan` varchar(234) NOT NULL,
  `code_schedule` varchar(15) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `approve_schedule` int(1) NOT NULL DEFAULT '0' COMMENT '0 =open, 1 = lock',
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e06_new_schedule`
--

INSERT INTO `e06_new_schedule` (`schedule_id`, `namaKaryawan`, `code_schedule`, `start_date`, `end_date`, `approve_schedule`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, '', 'IT/2020/06/01', '2020-06-01', '2020-06-06', 1, 'active', 1, '2020-06-15 15:27:15', 1, '2020-06-17 16:38:50', NULL, NULL),
(2, '', 'IT/2020/07/01', '2020-07-01', '2020-07-10', 0, 'active', 136, '2020-06-25 15:05:01', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `e06_new_schedule_detail`
--

CREATE TABLE `e06_new_schedule_detail` (
  `schedule_iddetail` int(11) NOT NULL,
  `schedule_id` int(11) NOT NULL,
  `code_schedule` varchar(15) NOT NULL,
  `namaKaryawan` varchar(150) NOT NULL,
  `schedule_date` date NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e06_new_schedule_detail`
--

INSERT INTO `e06_new_schedule_detail` (`schedule_iddetail`, `schedule_id`, `code_schedule`, `namaKaryawan`, `schedule_date`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 1, 'IT/2020/06/01', '', '2020-06-01', 'active', 1, '2020-06-15 15:27:15', NULL, NULL, NULL, NULL),
(2, 1, 'IT/2020/06/01', '', '2020-06-02', 'active', 1, '2020-06-15 15:27:15', NULL, NULL, NULL, NULL),
(3, 1, 'IT/2020/06/01', '', '2020-06-03', 'active', 1, '2020-06-15 15:27:15', NULL, NULL, NULL, NULL),
(4, 1, 'IT/2020/06/01', '', '2020-06-04', 'active', 1, '2020-06-15 15:27:15', NULL, NULL, NULL, NULL),
(5, 1, 'IT/2020/06/01', '', '2020-06-05', 'active', 1, '2020-06-15 15:27:15', NULL, NULL, NULL, NULL),
(6, 1, 'IT/2020/06/01', '', '2020-06-06', 'active', 1, '2020-06-15 15:27:15', NULL, NULL, NULL, NULL),
(7, 2, 'IT/2020/07/01', '', '2020-07-01', 'active', 136, '2020-06-25 15:05:01', NULL, NULL, NULL, NULL),
(8, 2, 'IT/2020/07/01', '', '2020-07-02', 'active', 136, '2020-06-25 15:05:01', NULL, NULL, NULL, NULL),
(9, 2, 'IT/2020/07/01', '', '2020-07-03', 'active', 136, '2020-06-25 15:05:01', NULL, NULL, NULL, NULL),
(10, 2, 'IT/2020/07/01', '', '2020-07-04', 'active', 136, '2020-06-25 15:05:01', NULL, NULL, NULL, NULL),
(11, 2, 'IT/2020/07/01', '', '2020-07-05', 'active', 136, '2020-06-25 15:05:01', NULL, NULL, NULL, NULL),
(12, 2, 'IT/2020/07/01', '', '2020-07-06', 'active', 136, '2020-06-25 15:05:01', NULL, NULL, NULL, NULL),
(13, 2, 'IT/2020/07/01', '', '2020-07-07', 'active', 136, '2020-06-25 15:05:01', NULL, NULL, NULL, NULL),
(14, 2, 'IT/2020/07/01', '', '2020-07-08', 'active', 136, '2020-06-25 15:05:01', NULL, NULL, NULL, NULL),
(15, 2, 'IT/2020/07/01', '', '2020-07-09', 'active', 136, '2020-06-25 15:05:01', NULL, NULL, NULL, NULL),
(16, 2, 'IT/2020/07/01', '', '2020-07-10', 'active', 136, '2020-06-25 15:05:01', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `e06_new_schedule_detail_user`
--

CREATE TABLE `e06_new_schedule_detail_user` (
  `schedule_byuser` int(11) NOT NULL,
  `schedule_id` int(11) NOT NULL,
  `namaKaryawan` varchar(199) NOT NULL,
  `schedule_date` varchar(10) NOT NULL,
  `status_schedule` int(1) NOT NULL DEFAULT '1',
  `schedule_note_user` text NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL,
  `preferences` text,
  `test` text,
  `STEFANUS LAY` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `e06_new_schedule_user`
--

CREATE TABLE `e06_new_schedule_user` (
  `schedule_iduser` int(11) NOT NULL,
  `schedule_id` int(11) NOT NULL,
  `code_schedule` varchar(15) NOT NULL,
  `namaKaryawan` varchar(150) NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e06_new_schedule_user`
--

INSERT INTO `e06_new_schedule_user` (`schedule_iduser`, `schedule_id`, `code_schedule`, `namaKaryawan`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 1, 'IT/2020/06/01', 'BUDI IRWAN FIRMANSYAH', 'active', 1, '2020-06-15 15:27:15', NULL, NULL, NULL, NULL),
(2, 1, 'IT/2020/06/01', 'JOKO YUANA', 'active', 1, '2020-06-15 15:27:15', NULL, NULL, NULL, NULL),
(3, 1, 'IT/2020/06/01', 'MOEHAMAD SALDY AMIRULLAH JAFAR', 'active', 1, '2020-06-15 15:27:15', NULL, NULL, NULL, NULL),
(4, 1, 'IT/2020/06/01', 'MOH. BAYU EDHI WIBOWO', 'active', 1, '2020-06-15 15:27:15', NULL, NULL, NULL, NULL),
(5, 1, 'IT/2020/06/01', 'STEFANUS LAY', 'active', 1, '2020-06-15 15:27:15', NULL, NULL, NULL, NULL),
(6, 1, 'IT/2020/06/01', 'BUDI IRWAN FIRMANSYAH', 'active', 1, '2020-06-15 15:27:15', NULL, NULL, NULL, NULL),
(7, 1, 'IT/2020/06/01', 'JOKO YUANA', 'active', 1, '2020-06-15 15:27:15', NULL, NULL, NULL, NULL),
(8, 1, 'IT/2020/06/01', 'MOEHAMAD SALDY AMIRULLAH JAFAR', 'active', 1, '2020-06-15 15:27:15', NULL, NULL, NULL, NULL),
(9, 1, 'IT/2020/06/01', 'MOH. BAYU EDHI WIBOWO', 'active', 1, '2020-06-15 15:27:15', NULL, NULL, NULL, NULL),
(10, 1, 'IT/2020/06/01', 'STEFANUS LAY', 'active', 1, '2020-06-15 15:27:15', NULL, NULL, NULL, NULL),
(11, 1, 'IT/2020/06/01', 'BUDI IRWAN FIRMANSYAH', 'active', 1, '2020-06-15 15:27:15', NULL, NULL, NULL, NULL),
(12, 1, 'IT/2020/06/01', 'JOKO YUANA', 'active', 1, '2020-06-15 15:27:15', NULL, NULL, NULL, NULL),
(13, 1, 'IT/2020/06/01', 'MOEHAMAD SALDY AMIRULLAH JAFAR', 'active', 1, '2020-06-15 15:27:15', NULL, NULL, NULL, NULL),
(14, 1, 'IT/2020/06/01', 'MOH. BAYU EDHI WIBOWO', 'active', 1, '2020-06-15 15:27:15', NULL, NULL, NULL, NULL),
(15, 1, 'IT/2020/06/01', 'STEFANUS LAY', 'active', 1, '2020-06-15 15:27:15', NULL, NULL, NULL, NULL),
(16, 1, 'IT/2020/06/01', 'BUDI IRWAN FIRMANSYAH', 'active', 1, '2020-06-15 15:27:15', NULL, NULL, NULL, NULL),
(17, 1, 'IT/2020/06/01', 'JOKO YUANA', 'active', 1, '2020-06-15 15:27:15', NULL, NULL, NULL, NULL),
(18, 1, 'IT/2020/06/01', 'MOEHAMAD SALDY AMIRULLAH JAFAR', 'active', 1, '2020-06-15 15:27:15', NULL, NULL, NULL, NULL),
(19, 1, 'IT/2020/06/01', 'MOH. BAYU EDHI WIBOWO', 'active', 1, '2020-06-15 15:27:15', NULL, NULL, NULL, NULL),
(20, 1, 'IT/2020/06/01', 'STEFANUS LAY', 'active', 1, '2020-06-15 15:27:15', NULL, NULL, NULL, NULL),
(21, 1, 'IT/2020/06/01', 'BUDI IRWAN FIRMANSYAH', 'active', 1, '2020-06-15 15:27:15', NULL, NULL, NULL, NULL),
(22, 1, 'IT/2020/06/01', 'JOKO YUANA', 'active', 1, '2020-06-15 15:27:15', NULL, NULL, NULL, NULL),
(23, 1, 'IT/2020/06/01', 'MOEHAMAD SALDY AMIRULLAH JAFAR', 'active', 1, '2020-06-15 15:27:15', NULL, NULL, NULL, NULL),
(24, 1, 'IT/2020/06/01', 'MOH. BAYU EDHI WIBOWO', 'active', 1, '2020-06-15 15:27:15', NULL, NULL, NULL, NULL),
(25, 1, 'IT/2020/06/01', 'STEFANUS LAY', 'active', 1, '2020-06-15 15:27:15', NULL, NULL, NULL, NULL),
(26, 2, 'IT/2020/07/01', 'BUDI IRWAN FIRMANSYAH', 'active', 136, '2020-06-25 15:05:01', NULL, NULL, NULL, NULL),
(27, 2, 'IT/2020/07/01', 'JOKO YUANA', 'active', 136, '2020-06-25 15:05:01', NULL, NULL, NULL, NULL),
(28, 2, 'IT/2020/07/01', 'MOEHAMAD SALDY AMIRULLAH JAFAR', 'active', 136, '2020-06-25 15:05:01', NULL, NULL, NULL, NULL),
(29, 2, 'IT/2020/07/01', 'MOH. BAYU EDHI WIBOWO', 'active', 136, '2020-06-25 15:05:01', NULL, NULL, NULL, NULL),
(30, 2, 'IT/2020/07/01', 'STEFANUS LAY', 'active', 136, '2020-06-25 15:05:01', NULL, NULL, NULL, NULL),
(31, 2, 'IT/2020/07/01', 'BUDI IRWAN FIRMANSYAH', 'active', 136, '2020-06-25 15:05:01', NULL, NULL, NULL, NULL),
(32, 2, 'IT/2020/07/01', 'JOKO YUANA', 'active', 136, '2020-06-25 15:05:01', NULL, NULL, NULL, NULL),
(33, 2, 'IT/2020/07/01', 'MOEHAMAD SALDY AMIRULLAH JAFAR', 'active', 136, '2020-06-25 15:05:01', NULL, NULL, NULL, NULL),
(34, 2, 'IT/2020/07/01', 'MOH. BAYU EDHI WIBOWO', 'active', 136, '2020-06-25 15:05:01', NULL, NULL, NULL, NULL),
(35, 2, 'IT/2020/07/01', 'STEFANUS LAY', 'active', 136, '2020-06-25 15:05:01', NULL, NULL, NULL, NULL),
(36, 2, 'IT/2020/07/01', 'BUDI IRWAN FIRMANSYAH', 'active', 136, '2020-06-25 15:05:01', NULL, NULL, NULL, NULL),
(37, 2, 'IT/2020/07/01', 'JOKO YUANA', 'active', 136, '2020-06-25 15:05:01', NULL, NULL, NULL, NULL),
(38, 2, 'IT/2020/07/01', 'MOEHAMAD SALDY AMIRULLAH JAFAR', 'active', 136, '2020-06-25 15:05:01', NULL, NULL, NULL, NULL),
(39, 2, 'IT/2020/07/01', 'MOH. BAYU EDHI WIBOWO', 'active', 136, '2020-06-25 15:05:01', NULL, NULL, NULL, NULL),
(40, 2, 'IT/2020/07/01', 'STEFANUS LAY', 'active', 136, '2020-06-25 15:05:01', NULL, NULL, NULL, NULL),
(41, 2, 'IT/2020/07/01', 'BUDI IRWAN FIRMANSYAH', 'active', 136, '2020-06-25 15:05:01', NULL, NULL, NULL, NULL),
(42, 2, 'IT/2020/07/01', 'JOKO YUANA', 'active', 136, '2020-06-25 15:05:01', NULL, NULL, NULL, NULL),
(43, 2, 'IT/2020/07/01', 'MOEHAMAD SALDY AMIRULLAH JAFAR', 'active', 136, '2020-06-25 15:05:01', NULL, NULL, NULL, NULL),
(44, 2, 'IT/2020/07/01', 'MOH. BAYU EDHI WIBOWO', 'active', 136, '2020-06-25 15:05:01', NULL, NULL, NULL, NULL),
(45, 2, 'IT/2020/07/01', 'STEFANUS LAY', 'active', 136, '2020-06-25 15:05:01', NULL, NULL, NULL, NULL),
(46, 2, 'IT/2020/07/01', 'BUDI IRWAN FIRMANSYAH', 'active', 136, '2020-06-25 15:05:01', NULL, NULL, NULL, NULL),
(47, 2, 'IT/2020/07/01', 'JOKO YUANA', 'active', 136, '2020-06-25 15:05:01', NULL, NULL, NULL, NULL),
(48, 2, 'IT/2020/07/01', 'MOEHAMAD SALDY AMIRULLAH JAFAR', 'active', 136, '2020-06-25 15:05:01', NULL, NULL, NULL, NULL),
(49, 2, 'IT/2020/07/01', 'MOH. BAYU EDHI WIBOWO', 'active', 136, '2020-06-25 15:05:01', NULL, NULL, NULL, NULL),
(50, 2, 'IT/2020/07/01', 'STEFANUS LAY', 'active', 136, '2020-06-25 15:05:01', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `e06_schedule`
--

CREATE TABLE `e06_schedule` (
  `schedule_id` int(11) NOT NULL,
  `NIK` int(11) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `department` varchar(15) NOT NULL,
  `KodeSeksi` varchar(7) NOT NULL,
  `schedule_date` varchar(10) NOT NULL,
  `date01` int(1) NOT NULL DEFAULT '1' COMMENT '1=masuk,2=wfh,3=libur,4=lain lain',
  `date02` int(1) NOT NULL DEFAULT '1' COMMENT '1=masuk,2=wfh,3=libur,4=lain lain',
  `date03` int(1) NOT NULL DEFAULT '1' COMMENT '1=masuk,2=wfh,3=libur,4=lain lain',
  `date04` int(1) NOT NULL DEFAULT '1' COMMENT '1=masuk,2=wfh,3=libur,4=lain lain',
  `date05` int(1) NOT NULL DEFAULT '1' COMMENT '1=masuk,2=wfh,3=libur,4=lain lain',
  `date06` int(1) NOT NULL DEFAULT '1' COMMENT '1=masuk,2=wfh,3=libur,4=lain lain',
  `date07` int(1) NOT NULL DEFAULT '1' COMMENT '1=masuk,2=wfh,3=libur,4=lain lain',
  `date08` int(1) NOT NULL DEFAULT '1' COMMENT '1=masuk,2=wfh,3=libur,4=lain lain',
  `date09` int(1) NOT NULL DEFAULT '1' COMMENT '1=masuk,2=wfh,3=libur,4=lain lain',
  `date10` int(1) NOT NULL DEFAULT '1' COMMENT '1=masuk,2=wfh,3=libur,4=lain lain',
  `date11` int(1) NOT NULL DEFAULT '1' COMMENT '1=masuk,2=wfh,3=libur,4=lain lain',
  `date12` int(1) NOT NULL DEFAULT '1' COMMENT '1=masuk,2=wfh,3=libur,4=lain lain',
  `date13` int(1) NOT NULL DEFAULT '1' COMMENT '1=masuk,2=wfh,3=libur,4=lain lain',
  `date14` int(1) NOT NULL DEFAULT '1' COMMENT '1=masuk,2=wfh,3=libur,4=lain lain',
  `date15` int(1) NOT NULL DEFAULT '1' COMMENT '1=masuk,2=wfh,3=libur,4=lain lain',
  `date16` int(1) NOT NULL DEFAULT '1' COMMENT '1=masuk,2=wfh,3=libur,4=lain lain',
  `date17` int(1) NOT NULL DEFAULT '1' COMMENT '1=masuk,2=wfh,3=libur,4=lain lain',
  `date18` int(1) NOT NULL DEFAULT '1' COMMENT '1=masuk,2=wfh,3=libur,4=lain lain',
  `date19` int(1) NOT NULL DEFAULT '1' COMMENT '1=masuk,2=wfh,3=libur,4=lain lain',
  `date20` int(1) NOT NULL DEFAULT '1' COMMENT '1=masuk,2=wfh,3=libur,4=lain lain',
  `date21` int(1) NOT NULL DEFAULT '1' COMMENT '1=masuk,2=wfh,3=libur,4=lain lain',
  `date22` int(1) NOT NULL DEFAULT '1' COMMENT '1=masuk,2=wfh,3=libur,4=lain lain',
  `date23` int(1) NOT NULL DEFAULT '1' COMMENT '1=masuk,2=wfh,3=libur,4=lain lain',
  `date24` int(1) NOT NULL DEFAULT '1' COMMENT '1=masuk,2=wfh,3=libur,4=lain lain',
  `date25` int(1) NOT NULL DEFAULT '1' COMMENT '1=masuk,2=wfh,3=libur,4=lain lain',
  `date26` int(1) NOT NULL DEFAULT '1' COMMENT '1=masuk,2=wfh,3=libur,4=lain lain',
  `date27` int(1) NOT NULL DEFAULT '1' COMMENT '1=masuk,2=wfh,3=libur,4=lain lain',
  `date28` int(1) NOT NULL DEFAULT '1' COMMENT '1=masuk,2=wfh,3=libur,4=lain lain',
  `date29` int(1) NOT NULL DEFAULT '1' COMMENT '1=masuk,2=wfh,3=libur,4=lain lain',
  `date30` int(1) NOT NULL DEFAULT '1' COMMENT '1=masuk,2=wfh,3=libur,4=lain lain',
  `date31` int(1) NOT NULL DEFAULT '1' COMMENT '1=masuk,2=wfh,3=libur,4=lain lain',
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e06_schedule`
--

INSERT INTO `e06_schedule` (`schedule_id`, `NIK`, `nama_karyawan`, `department`, `KodeSeksi`, `schedule_date`, `date01`, `date02`, `date03`, `date04`, `date05`, `date06`, `date07`, `date08`, `date09`, `date10`, `date11`, `date12`, `date13`, `date14`, `date15`, `date16`, `date17`, `date18`, `date19`, `date20`, `date21`, `date22`, `date23`, `date24`, `date25`, `date26`, `date27`, `date28`, `date29`, `date30`, `date31`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 2019072843, 'BUDI IRWAN FIRMANSYAH', 'IT', 'IT', '2020-06', 1, 2, 3, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'active', NULL, NULL, 1, '2020-05-26 14:57:41', NULL, NULL),
(2, 2011010489, 'JOKO YUANA', 'IT', 'IT', '2020-06', 2, 1, 3, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'active', NULL, NULL, 1, '2020-05-26 14:57:42', NULL, NULL),
(3, 2019123383, 'MOEHAMAD SALDY AMIRULLAH JAFAR', 'IT', 'IT', '2020-06', 3, 2, 1, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'active', NULL, NULL, 1, '2020-05-26 14:57:43', 1, '2020-05-26 15:24:35'),
(4, 2014010934, 'MOH. BAYU EDHI WIBOWO', 'IT', 'IT', '2020-06', 1, 1, 2, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'active', NULL, NULL, 1, '2020-05-26 14:57:44', NULL, NULL),
(5, 2019123334, 'STEFANUS LAY', 'IT', 'IT', '2020-06', 1, 1, 1, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'active', NULL, NULL, 1, '2020-05-26 14:57:46', NULL, NULL),
(6, 2019072843, 'BUDI IRWAN FIRMANSYAH', 'IT', 'IT', '2020-07', 1, 2, 2, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'active', NULL, NULL, 1, '2020-05-26 16:22:54', NULL, NULL),
(7, 2011010489, 'JOKO YUANA', 'IT', 'IT', '2020-07', 2, 1, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'active', NULL, NULL, 1, '2020-05-26 16:22:56', NULL, NULL),
(8, 2019123383, 'MOEHAMAD SALDY AMIRULLAH JAFAR', 'IT', 'IT', '2020-07', 1, 2, 2, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'active', NULL, NULL, 1, '2020-05-26 16:22:59', NULL, NULL),
(9, 2014010934, 'MOH. BAYU EDHI WIBOWO', 'IT', 'IT', '2020-07', 2, 1, 3, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'active', NULL, NULL, 1, '2020-05-26 16:23:03', NULL, NULL),
(10, 2019123334, 'STEFANUS LAY', 'IT', 'IT', '2020-07', 1, 2, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'active', NULL, NULL, 1, '2020-05-26 16:23:06', NULL, NULL),
(11, 2017061346, 'ADITYA DAMARA', 'ADMIN', '854', '', 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 2017061346, 'ADITYA DAMARA', 'ADMIN', '854', '', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 2017061346, 'ADITYA DAMARA', 'ADMIN', '854', '', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 2017061346, 'ADITYA DAMARA', 'ADMIN', '854', '', 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(15, 2019123334, 'STEFANUS LAY', 'IT', 'IT', '', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(16, 2019123334, 'STEFANUS LAY', 'IT', 'IT', '', 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(17, 2019123334, 'STEFANUS LAY', 'IT', 'IT', '', 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(18, 2019123334, 'STEFANUS LAY', 'IT', 'IT', '', 4, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(19, 2019123334, 'STEFANUS LAY', 'IT', 'IT', '', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(20, 2019123334, 'STEFANUS LAY', 'IT', 'IT', '', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(21, 2019123334, 'STEFANUS LAY', 'IT', 'IT', '', 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(22, 2019123334, 'STEFANUS LAY', 'IT', 'IT', '', 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(23, 2019123334, 'STEFANUS LAY', 'IT', 'IT', '', 4, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(24, 2008100218, 'SEPTIARA NOERISKA ANGGRAINI', 'ADMIN', '854', '2020-07', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(25, 2014121047, 'AIDA NURLATIFAH', 'FA', '302', '', 1, 2, 3, 4, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'active', NULL, NULL, 141, '2020-05-27 12:00:25', NULL, NULL),
(26, 2005080040, 'BAWON IMRONAH', 'FA', '302', '', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(27, 2012010627, 'DEWI RAHMAWATI', 'FA', '302', '', 3, 4, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'active', NULL, NULL, 141, '2020-05-27 12:00:41', NULL, NULL),
(28, 2015051117, 'DIAN KURWANTO', 'FA', '302', '', 4, 3, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'active', NULL, NULL, 141, '2020-05-27 12:00:53', NULL, NULL),
(29, 2019072833, 'DWI ANDIKA PUTRI', 'FA', '302', '', 1, 2, 3, 4, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'active', NULL, NULL, 141, '2020-05-27 12:01:02', NULL, NULL),
(30, 2011010489, 'JOKO YUANA', 'IT', 'IT', '', 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(31, 2011010489, 'JOKO YUANA', 'IT', 'IT', '', 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(32, 2011010489, 'JOKO YUANA', 'IT', 'IT', '', 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(33, 2011010489, 'JOKO YUANA', 'IT', 'IT', '', 4, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(34, 2011010489, 'JOKO YUANA', 'IT', 'IT', '', 4, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(35, 2011010489, 'JOKO YUANA', 'IT', 'IT', '', 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(36, 2011010489, 'JOKO YUANA', 'IT', 'IT', '', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(37, 2011010489, 'JOKO YUANA', 'IT', 'IT', '', 4, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(38, 2019123383, 'MOEHAMAD SALDY AMIRULLAH JAFAR', 'IT', 'IT', '', 4, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(39, 2019123383, 'MOEHAMAD SALDY AMIRULLAH JAFAR', 'IT', 'IT', '', 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(40, 2019123383, 'MOEHAMAD SALDY AMIRULLAH JAFAR', 'IT', 'IT', '', 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(41, 2019123383, 'MOEHAMAD SALDY AMIRULLAH JAFAR', 'IT', 'IT', '', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(42, 2019123383, 'MOEHAMAD SALDY AMIRULLAH JAFAR', 'IT', 'IT', '', 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(43, 2014010934, 'MOH. BAYU EDHI WIBOWO', 'IT', 'IT', '', 4, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(44, 2014010934, 'MOH. BAYU EDHI WIBOWO', 'IT', 'IT', '', 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(45, 2014010934, 'MOH. BAYU EDHI WIBOWO', 'IT', 'IT', '', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(46, 2014010934, 'MOH. BAYU EDHI WIBOWO', 'IT', 'IT', '', 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(47, 2019123334, 'STEFANUS LAY', 'IT', 'IT', '', 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(48, 2019123334, 'STEFANUS LAY', 'IT', 'IT', '', 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(49, 2019123334, 'STEFANUS LAY', 'IT', 'IT', '', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(50, 2019123334, 'STEFANUS LAY', 'IT', 'IT', '', 4, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(51, 2019072843, 'BUDI IRWAN FIRMANSYAH', 'IT', 'IT', '', 4, 1, 1, 1, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'nonactive', NULL, NULL, 1, '2020-05-29 10:15:28', 135, '2020-05-27 12:19:39'),
(52, 2019072843, 'BUDI IRWAN FIRMANSYAH', 'IT', 'IT', '', 3, 1, 1, 1, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'nonactive', NULL, NULL, 1, '2020-05-29 10:15:28', 135, '2020-05-27 12:19:32'),
(53, 2019072843, 'BUDI IRWAN FIRMANSYAH', 'IT', 'IT', '', 2, 1, 1, 1, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'nonactive', NULL, NULL, 1, '2020-05-29 10:15:28', 135, '2020-05-27 12:19:27'),
(54, 2019072843, 'BUDI IRWAN FIRMANSYAH', 'IT', 'IT', '', 1, 1, 1, 1, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'nonactive', NULL, NULL, 1, '2020-05-29 10:15:28', 135, '2020-05-27 12:19:20'),
(55, 2019072843, 'BUDI IRWAN FIRMANSYAH', 'IT', 'IT', '', 4, 1, 1, 1, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'nonactive', NULL, NULL, 1, '2020-05-29 10:15:28', 135, '2020-05-27 12:19:11'),
(56, 2019072843, 'BUDI IRWAN FIRMANSYAH', 'IT', 'IT', '', 1, 1, 1, 1, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'active', NULL, NULL, 1, '2020-05-29 10:15:28', NULL, NULL),
(57, 2011010489, 'JOKO YUANA', 'IT', 'IT', '2020-05', 1, 1, 2, 1, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'active', NULL, NULL, 136, '2020-05-28 09:36:22', NULL, NULL),
(58, 2019072843, 'BUDI IRWAN FIRMANSYAH', 'IT', 'IT', '', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'active', NULL, NULL, 1, '2020-05-29 10:15:28', NULL, NULL),
(59, 2019072843, 'BUDI IRWAN FIRMANSYAH', 'IT', 'IT', '', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'active', NULL, NULL, 1, '2020-05-29 10:15:28', NULL, NULL),
(60, 2019072843, 'BUDI IRWAN FIRMANSYAH', 'IT', 'IT', '', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'active', NULL, NULL, 1, '2020-05-29 10:15:28', NULL, NULL),
(61, 2019072843, 'BUDI IRWAN FIRMANSYAH', 'IT', 'IT', '', 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'active', NULL, NULL, 1, '2020-05-29 10:15:28', NULL, NULL),
(62, 2019072843, 'BUDI IRWAN FIRMANSYAH', 'IT', 'IT', '', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `e06_schedule_detail`
--

CREATE TABLE `e06_schedule_detail` (
  `schedule_detail_id` int(11) NOT NULL,
  `schedule_id` int(11) NOT NULL,
  `schedule_date` varchar(10) NOT NULL,
  `schedule_notewfh` text NOT NULL COMMENT '1=wfh,2=masuk,3=lbr,4=lain-lain',
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e06_schedule_detail`
--

INSERT INTO `e06_schedule_detail` (`schedule_detail_id`, `schedule_id`, `schedule_date`, `schedule_notewfh`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 1, '0000-00-00', '0', 'nonactive', 1, '2020-05-13 11:42:41', NULL, NULL, 1, '2020-05-26 16:10:57'),
(2, 2, '0000-00-00', '0', 'active', 1, '2020-05-13 11:42:45', NULL, NULL, NULL, NULL),
(3, 3, '0000-00-00', '0', 'active', 1, '2020-05-13 11:42:51', NULL, NULL, NULL, NULL),
(4, 4, '0000-00-00', '0', 'active', 1, '2020-05-13 11:42:56', NULL, NULL, NULL, NULL),
(5, 5, '0000-00-00', '0', 'active', 1, '2020-05-13 11:43:00', NULL, NULL, NULL, NULL),
(6, 1, '06-05-2020', '<p>1. Maintenance All server Openbravo</p><p>2. Maintenance Server Mail server</p>', 'active', 1, '2020-05-26 16:34:32', 136, '2020-05-27 08:19:08', NULL, NULL),
(7, 6, '27-05-2020', '<p>1. Develop report untuk suport server Openbravo :</p><p>a. Report ED dan No BATCH dari WE untuk persiapan coding produksi</p><p>b. Report history PO -&gt; suport PPIC</p><p>c. Report kartu stok WIP by no Batch</p><p><br></p><p>&nbsp;</p>', 'active', 136, '2020-05-27 08:21:28', NULL, NULL, NULL, NULL),
(8, 6, '28-05-2020', '<p>1. Develop Aplikasi Konsep Produk Baru</p><p><br></p>', 'active', 136, '2020-05-27 08:26:44', NULL, NULL, NULL, NULL),
(9, 1, '10-06-2020', '<p>tes input</p>', 'active', 136, '2020-05-27 10:08:11', NULL, NULL, NULL, NULL),
(10, 1, '27-05-2020', '<p>testing input lagi</p>', 'active', 1, '2020-05-27 11:49:47', NULL, NULL, NULL, NULL),
(11, 1, '17-05-2020', '<p>4556+</p>', 'active', 136, '2020-05-28 11:59:22', NULL, NULL, NULL, NULL),
(12, 1, '02-06-2020', '<p>123</p>', 'active', 136, '2020-05-29 08:36:08', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `e07_psample`
--

CREATE TABLE `e07_psample` (
  `psample_id` int(11) NOT NULL,
  `pic_marketing` varchar(50) NOT NULL,
  `tgl_input` date NOT NULL,
  `ps_code` varchar(15) NOT NULL,
  `nama_customer` varchar(150) NOT NULL,
  `nama_sample` varchar(150) NOT NULL,
  `keterangan_formula` text NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e07_psample`
--

INSERT INTO `e07_psample` (`psample_id`, `pic_marketing`, `tgl_input`, `ps_code`, `nama_customer`, `nama_sample`, `keterangan_formula`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(3, 'test', '2020-08-03', 'TM/2020/08/001', 'test', 'test', 'test', 'active', 1, '2020-08-03 09:51:09', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `e07_psample_detail`
--

CREATE TABLE `e07_psample_detail` (
  `psample_detail_id` int(11) NOT NULL,
  `psample_id` int(11) NOT NULL,
  `jumlah_sample` int(4) NOT NULL,
  `ukuran_sample` int(3) NOT NULL,
  `kemasan_sample` varchar(25) NOT NULL,
  `tgl_permintaan` date NOT NULL,
  `tgl_trial` date NOT NULL,
  `tgl_selesai_trial` date NOT NULL,
  `tgl_pengiriman` date NOT NULL,
  `no_surat` varchar(35) NOT NULL,
  `status_sample` varchar(11) NOT NULL,
  `keterangan_jumlah` varchar(150) NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e07_psample_detail`
--

INSERT INTO `e07_psample_detail` (`psample_detail_id`, `psample_id`, `jumlah_sample`, `ukuran_sample`, `kemasan_sample`, `tgl_permintaan`, `tgl_trial`, `tgl_selesai_trial`, `tgl_pengiriman`, `no_surat`, `status_sample`, `keterangan_jumlah`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 1, 1, 12, 'botol', '2020-08-03', '2020-08-04', '2020-08-05', '2020-08-06', 'tgl_pengiriman121212', '120', '112', 'active', 1, '2020-08-03 08:44:07', 1, '2020-08-03 08:45:52', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `e15_formula_1_d`
--

CREATE TABLE `e15_formula_1_d` (
  `formula_id_D` int(11) NOT NULL,
  `formula_id_H` int(11) NOT NULL,
  `no` varchar(3) NOT NULL,
  `nama_dagang` varchar(25) NOT NULL,
  `inci_name` varchar(25) NOT NULL,
  `fungsi` varchar(25) NOT NULL,
  `no_cas` varchar(25) NOT NULL,
  `konsentrasi` varchar(25) NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e15_formula_1_d`
--

INSERT INTO `e15_formula_1_d` (`formula_id_D`, `formula_id_H`, `no`, `nama_dagang`, `inci_name`, `fungsi`, `no_cas`, `konsentrasi`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 1, '1', 'namada dagang 1', 'ince name 1', 'fungsi 1', 'no cas 1', 'konsentasi 1', 'active', 1, '2020-07-09 08:45:14', NULL, NULL, NULL, NULL),
(2, 1, '2', 'namada dagang 2', 'ince name 2', 'fungsi 2', 'no cas 2', 'konsentasi 2', 'active', 1, '2020-07-09 08:45:14', NULL, NULL, NULL, NULL),
(3, 1, '3', 'namada dagang 3', 'ince name 3', 'fungsi 3', 'no cas 3', 'konsentasi 3', 'active', 1, '2020-07-09 08:45:14', NULL, NULL, NULL, NULL),
(4, 1, '4', 'namada dagang 4', 'ince name 4', 'fungsi 4', 'no cas 4', 'konsentasi 4', 'active', 1, '2020-07-09 08:45:14', NULL, NULL, NULL, NULL),
(5, 1, '5', 'namada dagang 5', 'ince name 5', 'fungsi 5', 'no cas 5', 'konsentasi 5', 'active', 1, '2020-07-09 08:45:14', NULL, NULL, NULL, NULL),
(6, 1, '6', 'namada dagang 6', 'ince name 6', 'fungsi 6', 'no cas 6', 'konsentasi 6', 'active', 1, '2020-07-09 08:45:14', NULL, NULL, NULL, NULL),
(7, 1, '7', 'namada dagang 7', 'ince name 7', 'fungsi 7', 'no cas 7', 'konsentasi 7', 'active', 1, '2020-07-09 08:45:14', NULL, NULL, NULL, NULL),
(8, 1, '8', 'namada dagang 8', 'ince name 8', 'fungsi 8', 'no cas 8', 'konsentasi 8', 'active', 1, '2020-07-09 08:45:14', NULL, NULL, NULL, NULL),
(9, 1, '9', 'namada dagang 9', 'ince name 9', 'fungsi 9', 'no cas 9', 'konsentasi 9', 'active', 1, '2020-07-09 08:45:14', NULL, NULL, NULL, NULL),
(10, 1, '10', 'namada dagang 10', 'ince name 10', 'fungsi 10', 'no cas 10', 'konsentasi 10', 'active', 1, '2020-07-09 08:45:14', NULL, NULL, NULL, NULL),
(11, 1, '11', 'namada dagang 11', 'ince name 11', 'fungsi 11', 'no cas 11', 'konsentasi 11', 'active', 1, '2020-07-09 08:45:14', NULL, NULL, NULL, NULL),
(12, 1, '1', 'namada dagang 1', 'ince name 1', 'fungsi 1', 'no cas 1', 'konsentasi 1', 'active', 1, '2020-07-13 14:24:02', NULL, NULL, NULL, NULL),
(13, 1, '2', 'namada dagang 2', 'ince name 2', 'fungsi 2', 'no cas 2', 'konsentasi 2', 'active', 1, '2020-07-13 14:24:02', NULL, NULL, NULL, NULL),
(14, 1, '3', 'namada dagang 3', 'ince name 3', 'fungsi 3', 'no cas 3', 'konsentasi 3', 'active', 1, '2020-07-13 14:24:02', NULL, NULL, NULL, NULL),
(15, 1, '4', 'namada dagang 4', 'ince name 4', 'fungsi 4', 'no cas 4', 'konsentasi 4', 'active', 1, '2020-07-13 14:24:02', NULL, NULL, NULL, NULL),
(16, 1, '5', 'namada dagang 5', 'ince name 5', 'fungsi 5', 'no cas 5', 'konsentasi 5', 'active', 1, '2020-07-13 14:24:02', NULL, NULL, NULL, NULL),
(17, 1, '6', 'namada dagang 6', 'ince name 6', 'fungsi 6', 'no cas 6', 'konsentasi 6', 'active', 1, '2020-07-13 14:24:02', NULL, NULL, NULL, NULL),
(18, 1, '7', 'namada dagang 7', 'ince name 7', 'fungsi 7', 'no cas 7', 'konsentasi 7', 'active', 1, '2020-07-13 14:24:02', NULL, NULL, NULL, NULL),
(19, 1, '1', 'namada dagang 1', 'ince name 1', 'fungsi 1', 'no cas 1', 'konsentasi 1', 'active', 1, '2020-07-13 14:24:40', NULL, NULL, NULL, NULL),
(20, 1, '2', 'namada dagang 2', 'ince name 2', 'fungsi 2', 'no cas 2', 'konsentasi 2', 'active', 1, '2020-07-13 14:24:40', NULL, NULL, NULL, NULL),
(21, 1, '3', 'namada dagang 3', 'ince name 3', 'fungsi 3', 'no cas 3', 'konsentasi 3', 'active', 1, '2020-07-13 14:24:40', NULL, NULL, NULL, NULL),
(22, 1, '4', 'namada dagang 4', 'ince name 4', 'fungsi 4', 'no cas 4', 'konsentasi 4', 'active', 1, '2020-07-13 14:24:40', NULL, NULL, NULL, NULL),
(23, 1, '5', 'namada dagang 5', 'ince name 5', 'fungsi 5', 'no cas 5', 'konsentasi 5', 'active', 1, '2020-07-13 14:24:40', NULL, NULL, NULL, NULL),
(24, 1, '6', 'namada dagang 6', 'ince name 6', 'fungsi 6', 'no cas 6', 'konsentasi 6', 'active', 1, '2020-07-13 14:24:40', NULL, NULL, NULL, NULL),
(25, 1, '7', 'namada dagang 7', 'ince name 7', 'fungsi 7', 'no cas 7', 'konsentasi 7', 'active', 1, '2020-07-13 14:24:40', NULL, NULL, NULL, NULL),
(26, 2, '1', 'Tropical Banana Tea Tree ', '-', 'Baru', '15-01-2020', '', 'active', 719, '2020-07-23 09:29:37', NULL, NULL, NULL, NULL),
(27, 2, '2', 'Peel-Off Mask Brightening', '-', 'Baru', '43872', '', 'active', 719, '2020-07-23 09:29:37', NULL, NULL, NULL, NULL),
(28, 2, '3', '', '', '', '', '', 'active', 719, '2020-07-23 09:29:37', NULL, NULL, NULL, NULL),
(29, 2, '4', '', '', '', '', '', 'active', 719, '2020-07-23 09:29:37', NULL, NULL, NULL, NULL),
(30, 2, '5', '', '', '', '', '', 'active', 719, '2020-07-23 09:29:37', NULL, NULL, NULL, NULL),
(31, 2, '', '', '', '', '', '', 'active', 719, '2020-07-23 09:29:37', NULL, NULL, NULL, NULL),
(32, 2, '', '', '', '', '', '', 'active', 719, '2020-07-23 09:29:37', NULL, NULL, NULL, NULL),
(33, 2, '1', 'Optimals Serum Vitamin C', 'Perubahan preservative Do', 'Perpanjangan NA >>>', '', '', 'active', 719, '2020-07-23 09:29:59', NULL, NULL, NULL, NULL),
(34, 2, 'Not', '23-01-2020', '', '', '', '', 'active', 719, '2020-07-23 09:29:59', NULL, NULL, NULL, NULL),
(35, 2, '2', '', '', '', '', '', 'active', 719, '2020-07-23 09:29:59', NULL, NULL, NULL, NULL),
(36, 2, '3', '', '', '', '', '', 'active', 719, '2020-07-23 09:29:59', NULL, NULL, NULL, NULL),
(37, 2, '4', '', '', '', '', '', 'active', 719, '2020-07-23 09:29:59', NULL, NULL, NULL, NULL),
(38, 2, '5', '', '', '', '', '', 'active', 719, '2020-07-23 09:29:59', NULL, NULL, NULL, NULL),
(39, 1, 'No.', 'Nama Dagang', 'INCI Name', 'Fungsi', 'No. CAS', 'Konsentrasi (%)', 'active', 663, '2020-07-23 09:34:55', NULL, NULL, NULL, NULL),
(40, 1, '1', 'Aquadem', 'Aqua', 'Solvent', '7732-18-5', '89.63', 'active', 663, '2020-07-23 09:34:55', NULL, NULL, NULL, NULL),
(41, 1, '2', 'Ethanol Prima', 'Alcohol denat', 'Solvent', '64-17-5', '3', 'active', 663, '2020-07-23 09:34:55', NULL, NULL, NULL, NULL),
(42, 1, '3', 'Camphor Synthetic DAB 8', 'Camphor', 'Aromatic', '76-22-2', '0.01', 'active', 663, '2020-07-23 09:34:55', NULL, NULL, NULL, NULL),
(43, 1, '4', 'Allantoin', 'Allantoin', 'Anti Irritant', '97-59-6', '0.2', 'active', 663, '2020-07-23 09:34:55', NULL, NULL, NULL, NULL),
(44, 1, '5', 'D-Panthenol', 'Panthenol', 'Moisturizing', '81-13-0', '0.2', 'active', 663, '2020-07-23 09:34:55', NULL, NULL, NULL, NULL),
(45, 1, '6', 'Propylene Glycol (PGUSP)', 'Propylene glycol', 'Humectant', '57-55-6', '2', 'active', 663, '2020-07-23 09:34:55', NULL, NULL, NULL, NULL),
(46, 1, '7', 'Purasal S/HQ 60 atau Gala', 'Sodium lactate', 'Skin conditioning', '867-56-1', '2', 'active', 663, '2020-07-23 09:34:55', NULL, NULL, NULL, NULL),
(47, 1, '8', 'Purac PH 90 atau Galacid ', 'Lactic acid', 'Brihghtening', '79-33-4', '2', 'active', 663, '2020-07-23 09:34:55', NULL, NULL, NULL, NULL),
(48, 1, '9', 'Purac BF P/41', 'Lactic acid', 'Skin conditioning', '79-33-4', '0.16', 'active', 663, '2020-07-23 09:34:55', NULL, NULL, NULL, NULL),
(49, 1, '10', 'Microcare® PHC', 'Chlorphenesin', 'Preservative', '104-29-0', '0.16', 'active', 663, '2020-07-23 09:34:55', NULL, NULL, NULL, NULL),
(50, 1, '', '', 'Phenoxyethanol', 'Preservative', '122-99-6', '0.56', 'active', 663, '2020-07-23 09:34:55', NULL, NULL, NULL, NULL),
(51, 1, '', '', 'Glycerin', 'Humectant', '56-81-5', '0.01', 'active', 663, '2020-07-23 09:34:55', NULL, NULL, NULL, NULL),
(52, 1, '', '', 'Aqua', 'Solvent', '7732-18-5', '0.07', 'active', 663, '2020-07-23 09:34:55', NULL, NULL, NULL, NULL),
(53, 1, '', '', '', '', '', '', 'active', 663, '2020-07-23 09:34:55', NULL, NULL, NULL, NULL),
(54, 1, 'Tot', '', '', '', '', '100', 'active', 663, '2020-07-23 09:34:55', NULL, NULL, NULL, NULL),
(55, 1, '', '', '', '', '', '', 'active', 663, '2020-07-23 09:34:55', NULL, NULL, NULL, NULL),
(56, 1, '', '', '', '', '', '', 'active', 663, '2020-07-23 09:34:55', NULL, NULL, NULL, NULL),
(57, 1, '', '', '', '', '', '', 'active', 663, '2020-07-23 09:34:55', NULL, NULL, NULL, NULL),
(58, 1, '', '', '', '', '', '', 'active', 663, '2020-07-23 09:34:55', NULL, NULL, NULL, NULL),
(59, 1, '', '', '', '', '', '', 'active', 663, '2020-07-23 09:34:55', NULL, NULL, NULL, NULL),
(60, 1, '', '', '', '', '', '', 'active', 663, '2020-07-23 09:34:55', NULL, NULL, NULL, NULL),
(61, 1, '', '', '', '', '', '', 'active', 663, '2020-07-23 09:34:55', NULL, NULL, NULL, NULL),
(62, 1, '', '', '', '', '', '', 'active', 663, '2020-07-23 09:34:55', NULL, NULL, NULL, NULL),
(63, 1, '', '', '', '', '', '', 'active', 663, '2020-07-23 09:34:55', NULL, NULL, NULL, NULL),
(64, 1, '', '', '', '', '', '', 'active', 663, '2020-07-23 09:34:55', NULL, NULL, NULL, NULL),
(65, 1, '', '', '', '', '', '', 'active', 663, '2020-07-23 09:34:55', NULL, NULL, NULL, NULL),
(66, 1, '', '', '', '', '', '', 'active', 663, '2020-07-23 09:34:55', NULL, NULL, NULL, NULL),
(67, 1, '', '', '', '', '', '', 'active', 663, '2020-07-23 09:34:55', NULL, NULL, NULL, NULL),
(68, 1, '', '', '', '', '', '', 'active', 663, '2020-07-23 09:34:55', NULL, NULL, NULL, NULL),
(69, 1, '', '', '', '', '', '', 'active', 663, '2020-07-23 09:34:55', NULL, NULL, NULL, NULL),
(70, 1, '', '', '', '', '', '', 'active', 663, '2020-07-23 09:34:55', NULL, NULL, NULL, NULL),
(71, 1, '', '', '', '', '', '', 'active', 663, '2020-07-23 09:34:55', NULL, NULL, NULL, NULL),
(72, 1, '', '', '', '', '', '', 'active', 663, '2020-07-23 09:34:55', NULL, NULL, NULL, NULL),
(73, 1, '', '', '', '', '', '', 'active', 663, '2020-07-23 09:34:55', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `e15_formula_1_h`
--

CREATE TABLE `e15_formula_1_h` (
  `formula_id_H` int(11) NOT NULL,
  `no_document` varchar(25) NOT NULL,
  `merek` varchar(35) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `bentuk_sediaan` varchar(25) NOT NULL,
  `warna_sediaan` varchar(25) NOT NULL,
  `kemasan_primer` varchar(25) NOT NULL,
  `kemasan_sekunder` varchar(25) NOT NULL,
  `ukuran_kemasan` int(5) NOT NULL,
  `kategori` varchar(25) DEFAULT NULL,
  `sub_kategori` varchar(25) DEFAULT NULL,
  `no_formula` varchar(25) NOT NULL,
  `no_revisi` varchar(25) NOT NULL,
  `tgl_berlaku` date NOT NULL,
  `formula_khusus` varchar(25) NOT NULL,
  `persamaan_produk` varchar(25) NOT NULL,
  `dibuat_oleh` varchar(35) DEFAULT NULL,
  `tgl_dibuat` datetime NOT NULL,
  `disetujui_oleh` varchar(35) DEFAULT NULL,
  `tgl_disetujui` datetime DEFAULT NULL,
  `diterima_oleh` varchar(35) DEFAULT NULL,
  `tgl_diterima` datetime DEFAULT NULL,
  `diketahui_oleh` varchar(35) DEFAULT NULL,
  `tgl_diketahui` datetime DEFAULT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e15_formula_1_h`
--

INSERT INTO `e15_formula_1_h` (`formula_id_H`, `no_document`, `merek`, `nama_produk`, `bentuk_sediaan`, `warna_sediaan`, `kemasan_primer`, `kemasan_sekunder`, `ukuran_kemasan`, `kategori`, `sub_kategori`, `no_formula`, `no_revisi`, `tgl_berlaku`, `formula_khusus`, `persamaan_produk`, `dibuat_oleh`, `tgl_dibuat`, `disetujui_oleh`, `tgl_disetujui`, `diterima_oleh`, `tgl_diterima`, `diketahui_oleh`, `tgl_diketahui`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 'RNDK-F/2020/01', 'Teraskin', 'Teraskin a', 'Teraskin b', 'Teraskin c', 'Teraskin d', 'Teraskin e', 12, NULL, NULL, '134679', 'Teraskin f', '2020-07-09', 'Teraskin g', 'Teraskin r', 'MOEHAMAD SALDY AMIRULLAH JAFAR', '2020-07-09 08:44:07', 'ALIFAH PUTRI UTAMI', '2020-07-21 08:52:20', NULL, NULL, NULL, NULL, 'active', 1, '2020-07-09 08:44:07', NULL, NULL, NULL, NULL),
(2, 'RNDK-F/2020/02', 'aa', 'aa', 'aaa', 'aaa', 'aa', 'aa', 0, NULL, NULL, 'aaa', 'aaa', '2020-07-23', 'aa', 'aa', 'BASARIA SUMARTINI SIMATUPANG', '2020-07-23 09:29:16', NULL, NULL, NULL, NULL, NULL, NULL, 'active', 719, '2020-07-23 09:29:16', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `e15_formula_2`
--

CREATE TABLE `e15_formula_2` (
  `formula_id_2` int(11) NOT NULL,
  `formula_id_H` int(11) NOT NULL,
  `klaim_produk` varchar(25) NOT NULL,
  `cara_pakai` varchar(25) NOT NULL,
  `perhatian` varchar(25) NOT NULL,
  `catataan` varchar(25) NOT NULL,
  `keterangan` varchar(25) NOT NULL,
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
-- Table structure for table `e15_formula_2_prosedur`
--

CREATE TABLE `e15_formula_2_prosedur` (
  `formula_prosedur_2` int(11) NOT NULL,
  `formula_id_H` int(11) NOT NULL,
  `no` int(3) NOT NULL,
  `prosedur_pembuatan` varchar(25) NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e15_formula_2_prosedur`
--

INSERT INTO `e15_formula_2_prosedur` (`formula_prosedur_2`, `formula_id_H`, `no`, `prosedur_pembuatan`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 1, 1, 'prosedur 1', 'active', 1, '2020-07-09 08:45:27', NULL, NULL, NULL, NULL),
(2, 1, 2, 'prosedur 2', 'active', 1, '2020-07-09 08:45:27', NULL, NULL, NULL, NULL),
(3, 1, 3, 'prosedur 3', 'active', 1, '2020-07-09 08:45:27', NULL, NULL, NULL, NULL),
(4, 1, 4, 'prosedur 4', 'active', 1, '2020-07-09 08:45:27', NULL, NULL, NULL, NULL),
(5, 1, 5, 'prosedur 5', 'active', 1, '2020-07-09 08:45:27', NULL, NULL, NULL, NULL),
(6, 1, 6, 'prosedur 6', 'active', 1, '2020-07-09 08:45:27', NULL, NULL, NULL, NULL),
(7, 1, 7, 'prosedur 7', 'active', 1, '2020-07-09 08:45:27', NULL, NULL, NULL, NULL),
(8, 1, 8, 'prosedur 8', 'active', 1, '2020-07-09 08:45:27', NULL, NULL, NULL, NULL),
(9, 1, 9, 'prosedur 9', 'active', 1, '2020-07-09 08:45:27', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `e_04_ms_calibration_type`
--

CREATE TABLE `e_04_ms_calibration_type` (
  `id_calibration_type` int(11) NOT NULL,
  `calibration_type` varchar(255) NOT NULL,
  `createtime` datetime NOT NULL,
  `updateby` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `_calendar`
--

CREATE TABLE `_calendar` (
  `id` int(11) NOT NULL,
  `title` varchar(126) DEFAULT NULL,
  `description` text,
  `color` varchar(24) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `statusdata` enum('active','nonactive') NOT NULL DEFAULT 'active',
  `createby` int(11) NOT NULL,
  `createtime` datetime NOT NULL,
  `updateby` int(11) NOT NULL,
  `updatetime` datetime NOT NULL,
  `deleteby` int(11) NOT NULL,
  `deletetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_calendar`
--

INSERT INTO `_calendar` (`id`, `title`, `description`, `color`, `start_date`, `end_date`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 'KODEKU Event', '<p><b>Montepless </b>arbi</p>', '#FFD700', '2017-01-16', '2017-01-20', 'active', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(8, 'AREMA', '', '#40E0D0', '2017-01-01', '2017-01-03', 'active', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(9, 'Ngepil', '<p>asdasdsa</p>', '#008000', '2017-01-07', '2017-01-09', 'active', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(10, 'AREMA ', '', '#0071c5', '2017-01-01', '2017-01-02', 'active', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(14, 'lockdown', '', '#FF0000', '2020-04-01', '2020-04-18', 'active', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(15, 'lockdown1', 'tes', NULL, '0000-00-00', '0000-00-00', 'active', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(16, 'oke', 'oke siap', NULL, '2020-04-04', '2020-04-05', 'active', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(17, 'titile', 'deskripsi', '#008000', '2020-04-01', '2020-04-01', 'active', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(18, 'yellow', 'yellow', '#FFD700', '2020-04-01', '2020-04-01', 'active', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(19, 'puasa', 'sebentar lagi', '#40E0D0', '2020-04-24', '2020-04-25', 'active', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(20, 'kondangan', 'puasa', '#40E0D0', '2020-04-26', '2020-04-30', 'active', 1, '2020-04-26 13:16:32', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(21, 'lockdown guys', 'diisi deh', '', '2020-05-14', '2020-05-06', 'active', 141, '2020-05-16 14:19:35', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `_department`
--

CREATE TABLE `_department` (
  `id_department` int(11) NOT NULL,
  `department_code` varchar(20) NOT NULL,
  `department_name` varchar(15) NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_department`
--

INSERT INTO `_department` (`id_department`, `department_code`, `department_name`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 'IT', 'IT', 'active', 1, '2019-08-19 06:15:21', 56, '2020-02-26 10:04:13', 1, '2020-02-09 21:57:37'),
(2, 'QA', 'QA', 'active', 1, '2019-08-19 06:24:48', 56, '2020-02-26 10:04:19', 1, '2020-01-24 15:42:03'),
(3, 'QC', 'QC', 'active', 1, '2020-02-09 21:53:12', 56, '2020-02-26 10:03:39', 1, '2020-02-09 21:53:17'),
(4, 'General Affair', 'GA', 'active', 1, '2020-02-09 21:57:31', 56, '2020-02-26 10:07:47', 1, '2020-02-09 22:04:44'),
(5, 'Human Resources', 'HR', 'active', 1, '2020-02-09 21:59:15', 56, '2020-02-26 10:10:04', 1, '2020-02-09 21:59:19'),
(6, 'FA & Acc', 'FA & Acc', 'active', 1, '2020-02-09 22:00:36', 56, '2020-02-26 10:07:14', 1, '2020-02-09 22:00:40'),
(7, '43432', 'FA', 'nonactive', 1, '2020-02-09 22:01:28', NULL, NULL, 56, '2020-02-26 10:07:19'),
(8, 'PLANT', 'PLANT', 'active', 1, '2020-02-09 22:04:37', 1, '2020-03-06 10:35:31', 1, '2020-02-09 22:04:41'),
(9, 'R&D Pharma', 'R&D Pharma', 'active', 1, '2020-02-09 22:07:39', 56, '2020-02-26 10:09:19', 1, '2020-02-09 22:07:43'),
(10, 'Produksi', 'Produksi', 'active', 56, '2020-02-26 10:01:14', 56, '2020-02-26 10:06:52', NULL, NULL),
(11, 'Warehouse', 'WH', 'active', 56, '2020-02-26 10:01:29', 2, '2020-02-28 14:05:04', NULL, NULL),
(12, 'Maint & Eng', 'Maint & Eng', 'active', 56, '2020-02-26 10:01:55', 56, '2020-02-26 10:08:55', NULL, NULL),
(13, 'PPIC', 'PPIC', 'active', 56, '2020-02-26 10:02:37', NULL, NULL, NULL, NULL),
(14, 'Regulatory Affairs', 'RA', 'active', 56, '2020-02-26 10:09:43', 56, '2020-02-26 10:12:51', NULL, NULL),
(15, 'R&D Cosmetic', 'R&D Cosmetic', 'active', 56, '2020-02-26 10:10:21', NULL, NULL, NULL, NULL),
(16, 'BDTM', 'BDTM', 'active', 56, '2020-02-26 10:10:33', NULL, NULL, NULL, NULL),
(17, 'CEO', 'CEO', 'active', 56, '2020-02-26 10:11:26', NULL, NULL, NULL, NULL),
(18, 'CFO', 'CFO', 'active', 2, '2020-03-12 21:08:30', NULL, NULL, NULL, NULL),
(19, 'PCM', 'PROCUREMENT', 'active', 1, '2020-04-14 09:37:09', 1, '2020-05-13 13:22:29', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `_icon`
--

CREATE TABLE `_icon` (
  `id_icon` int(11) NOT NULL,
  `icon` varchar(25) NOT NULL,
  `icon_name` varchar(20) NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_icon`
--

INSERT INTO `_icon` (`id_icon`, `icon`, `icon_name`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, '19631', '0', 'nonactive', 1, '2019-08-19 06:15:21', 1, '2020-01-27 09:01:08', 1, '2020-02-09 21:57:37'),
(2, '19661', '0', 'nonactive', 1, '2019-08-19 06:24:48', NULL, NULL, 1, '2020-01-24 15:42:03'),
(3, '12313', '0', 'nonactive', 1, '2020-02-09 21:53:12', NULL, NULL, 1, '2020-02-09 21:53:17'),
(4, '13432', '0', 'nonactive', 1, '2020-02-09 21:57:31', NULL, NULL, 1, '2020-02-09 22:04:44'),
(5, '21321', '0', 'nonactive', 1, '2020-02-09 21:59:15', NULL, NULL, 1, '2020-02-09 21:59:19'),
(6, '14787', '0', 'nonactive', 1, '2020-02-09 22:00:36', NULL, NULL, 1, '2020-02-09 22:00:40'),
(7, '43432', 'e01', 'nonactive', 1, '2020-02-09 22:01:28', NULL, NULL, 56, '2020-02-26 13:16:17'),
(8, '11111', '0', 'nonactive', 1, '2020-02-09 22:04:37', NULL, NULL, 1, '2020-02-09 22:04:41'),
(9, 'q5645', '0', 'nonactive', 1, '2020-02-09 22:07:39', NULL, NULL, 1, '2020-02-09 22:07:43'),
(10, 'far fa-circle', 'circle', 'active', 56, '2020-02-26 12:37:14', 56, '2020-02-26 13:19:50', NULL, NULL),
(11, 'fas fa-home', 'Home', 'active', 56, '2020-02-26 13:18:50', NULL, NULL, NULL, NULL),
(12, 'fas fa-caravan', 'Caravan', 'nonactive', 56, '2020-02-26 13:19:27', NULL, NULL, 56, '2020-02-26 13:19:42'),
(13, 'fas fa-tachometer-alt', 'tachometer-alt', 'active', 56, '2020-02-26 13:20:12', NULL, NULL, NULL, NULL),
(14, 'fas fa-concierge-bell', 'concierge-bell', 'active', 56, '2020-02-26 13:20:33', NULL, NULL, NULL, NULL),
(15, 'fab fa-chromecast', 'chromecast', 'active', 56, '2020-02-26 13:20:51', NULL, NULL, NULL, NULL),
(16, 'fas fa-luggage-cart', 'luggage-cart', 'active', 56, '2020-02-26 13:21:09', NULL, NULL, NULL, NULL),
(17, 'fas fa-shoe-prints', 'shoe-prints', 'active', 56, '2020-02-26 13:21:27', NULL, NULL, NULL, NULL),
(18, 'fas fa-file-invoice', 'file-invoice', 'active', 56, '2020-02-26 16:16:30', NULL, NULL, NULL, NULL),
(19, 'far fa-file-image', 'file-image', 'active', 56, '2020-02-26 16:16:49', NULL, NULL, NULL, NULL),
(20, 'far fa-file-alt', 'file-alt', 'active', 56, '2020-02-26 16:17:11', NULL, NULL, NULL, NULL),
(21, 'fas fa-print', 'print', 'active', 56, '2020-02-26 16:19:45', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `_like_apps`
--

CREATE TABLE `_like_apps` (
  `tools_id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `like_dislike` int(1) NOT NULL DEFAULT '0' COMMENT '0=dislike, 1=like',
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_like_apps`
--

INSERT INTO `_like_apps` (`tools_id`, `id_user`, `username`, `like_dislike`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 0, 'Spectroquant NOVA 60', 0, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 0, 'Spectroquant TR 320', 0, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 0, 'Thickness Tester ', 0, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 0, 'Digital Capiler 12 inchi ', 0, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 0, 'Viscometer  ', 0, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 0, 'pH meter Seven Exellence', 0, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 0, 'pH Meter Seven Compact', 0, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 0, 'Moisture Analyzer', 0, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 0, 'Melting Point MP-50', 0, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 0, 'Air Sampler Met One', 0, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 0, 'Karl Fischer V20', 0, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 0, 'Viscometer', 0, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 0, 'Micropipet 1 ml ', 0, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 0, 'Micropipet 1 ml ', 0, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(15, 0, 'Micropipet 10 ml ', 0, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(16, 0, 'pH meter', 0, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(17, 0, 'Micropipet 1 ml', 0, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(18, 0, 'Micropipet 10 ml', 0, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(19, 0, 'pH meter seven compact ', 0, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(20, 0, 'Batu Timbang 500 g', 0, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(21, 0, 'Batu Timbang 500 mg', 0, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(22, 0, 'Micropipette', 0, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(23, 0, 'Micropipet Eppendorf', 0, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(24, 0, 'Micropipette', 0, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(25, 0, 'Anemometer', 0, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(26, 0, 'Viskometer', 0, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(27, 0, 'pH Meter', 0, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(28, 0, 'Multi Parameter', 0, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(29, 0, 'Micropipette 1-10 µL', 0, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(30, 0, 'Viscometer  ', 0, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(31, 0, 'pHmeter ', 0, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(32, 0, 'Digital Caliper', 0, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(33, 0, 'Thickness Gauge', 0, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(34, 0, 'Colorimeter', 0, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(35, 0, 'Timbangan Gewin', 0, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(36, 0, 'Timbangan 500 Kg', 0, 'active', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `_logno`
--

CREATE TABLE `_logno` (
  `id` int(11) NOT NULL,
  `name_apps` varchar(5) NOT NULL,
  `program` varchar(33) DEFAULT NULL,
  `periode` int(11) DEFAULT NULL,
  `bln` char(2) DEFAULT NULL,
  `lastno` bigint(20) DEFAULT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_logno`
--

INSERT INTO `_logno` (`id`, `name_apps`, `program`, `periode`, `bln`, `lastno`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 'e01', 'K', 2020, '03', 4, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'e01', 'O', 2020, '03', 3, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'e01', 'U', 2020, '03', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'e04', 'K', 2020, '', 50, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'e04', 'O', 2020, '', 6, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'e04', 'U', 2020, '', 3, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'e01', 'K', 2020, '06', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(8, '', 'O', 2020, '07', NULL, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'e01', 'K', 2020, '07', 4, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'e01', 'O', 2020, '07', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'e01', 'U', 2020, '07', 18, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'e01', 'U', 2020, '08', 11, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'e01', 'O', 2020, '08', 2, 'active', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `_message`
--

CREATE TABLE `_message` (
  `id_message` int(11) NOT NULL,
  `message_code` varchar(20) NOT NULL,
  `message_subject` varchar(25) NOT NULL,
  `message` text NOT NULL,
  `message_name` varchar(150) NOT NULL,
  `message_divisi` varchar(10) NOT NULL,
  `nama_gambar` text NOT NULL,
  `lokasi_gambar` text NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_message`
--

INSERT INTO `_message` (`id_message`, `message_code`, `message_subject`, `message`, `message_name`, `message_divisi`, `nama_gambar`, `lokasi_gambar`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, '196310231985032003', '0', 'Retno Pudjiastuti, ST,M.Si', '', '0', 'Pejabat Pembuat Komitmen Satker Ditjen Pembiayaan Perumahan', '2018-01-01', 'nonactive', 1, '2019-08-19 06:15:21', 1, '2020-01-27 09:01:08', 1, '2020-02-09 21:57:37'),
(2, '196610181995031002', '0', 'Ir. Samson Sibarani,MT', '', '0', 'Pejabat Pembuat Komitmen Satker Ditjen Pembiayaan Perumahan', '2017-01-01', 'nonactive', 1, '2019-08-19 06:24:48', NULL, NULL, 1, '2020-01-24 15:42:03'),
(3, '1231321321312131321', '0', '12321312', '', '0', '12332112', '2020-02-04', 'nonactive', 1, '2020-02-09 21:53:12', NULL, NULL, 1, '2020-02-09 21:53:17'),
(4, '1343243546546546eqwe', '0', 'qeqwewqwqewqe', '', '0', 'weqqweqweqwe', '2020-02-06', 'nonactive', 1, '2020-02-09 21:57:31', NULL, NULL, 1, '2020-02-09 22:04:44'),
(5, '21321331231232312321', '0', 'eewqeqwwqe', '', '0', 'qeqeqweqweeqweqw', '2020-02-06', 'nonactive', 1, '2020-02-09 21:59:15', NULL, NULL, 1, '2020-02-09 21:59:19'),
(6, '1478765432113456432', '0', 'rtytrewewrtyittrewq', '', '0', 'eqwrtyurewertyuyre', '2020-02-06', 'nonactive', 1, '2020-02-09 22:00:36', NULL, NULL, 1, '2020-02-09 22:00:40'),
(7, '4343242424234324erw2', 'e01', 'wqrerewrewwerewrewr', '', '0', 'rewrewrewrewrewrewrew', '2020-02-19', 'active', 1, '2020-02-09 22:01:28', NULL, NULL, NULL, NULL),
(8, '11111111111111111111', '0', '222223333eeeeeeee', '', '0', 'qqqqqqqqqqqqqqqqqqqq', '2020-02-06', 'nonactive', 1, '2020-02-09 22:04:37', NULL, NULL, 1, '2020-02-09 22:04:41'),
(9, 'q5645555555555555555', '0', 'ytryry', '', '0', 'trrrrrrrrr', '2020-02-05', 'nonactive', 1, '2020-02-09 22:07:39', NULL, NULL, 1, '2020-02-09 22:07:43'),
(10, '', 'tes', 'tes', '', '0', '', '', 'active', 2, '2020-03-08 16:38:06', NULL, NULL, NULL, NULL),
(11, '', 'ter', '<p>ter</p>', '', '0', '', '', 'active', 2, '2020-03-08 17:46:55', NULL, NULL, NULL, NULL),
(12, '', 'ter', '<p>tes</p>', ' itadministrator', '0', '', '', 'active', 2, '2020-03-08 17:49:22', NULL, NULL, NULL, NULL),
(13, '', 'perbaikan Printer', '<p>segera</p>', ' IT', 'IT', '', '', 'active', 2, '2020-03-08 18:11:54', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `_message_to`
--

CREATE TABLE `_message_to` (
  `id_message_to` int(11) NOT NULL,
  `id_message` varchar(20) NOT NULL,
  `message_code` varchar(25) NOT NULL,
  `message_divisi` varchar(150) NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_message_to`
--

INSERT INTO `_message_to` (`id_message_to`, `id_message`, `message_code`, `message_divisi`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, '196310231985032003', '0', '', 'nonactive', 1, '2019-08-19 06:15:21', 1, '2020-01-27 09:01:08', 1, '2020-02-09 21:57:37'),
(2, '196610181995031002', '0', '', 'nonactive', 1, '2019-08-19 06:24:48', NULL, NULL, 1, '2020-01-24 15:42:03'),
(3, '1231321321312131321', '0', '', 'nonactive', 1, '2020-02-09 21:53:12', NULL, NULL, 1, '2020-02-09 21:53:17'),
(4, '1343243546546546eqwe', '0', '', 'nonactive', 1, '2020-02-09 21:57:31', NULL, NULL, 1, '2020-02-09 22:04:44'),
(5, '21321331231232312321', '0', '', 'nonactive', 1, '2020-02-09 21:59:15', NULL, NULL, 1, '2020-02-09 21:59:19'),
(6, '1478765432113456432', '0', '', 'nonactive', 1, '2020-02-09 22:00:36', NULL, NULL, 1, '2020-02-09 22:00:40'),
(7, '4343242424234324erw2', 'e01', '', 'active', 1, '2020-02-09 22:01:28', NULL, NULL, NULL, NULL),
(8, '11111111111111111111', '0', '', 'nonactive', 1, '2020-02-09 22:04:37', NULL, NULL, 1, '2020-02-09 22:04:41'),
(9, 'q5645555555555555555', '0', '', 'nonactive', 1, '2020-02-09 22:07:39', NULL, NULL, 1, '2020-02-09 22:07:43');

-- --------------------------------------------------------

--
-- Table structure for table `_position`
--

CREATE TABLE `_position` (
  `id_position` int(11) NOT NULL,
  `position_code` varchar(10) NOT NULL,
  `position_name` varchar(35) NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_position`
--

INSERT INTO `_position` (`id_position`, `position_code`, `position_name`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 'Mgr', 'Manager IT', 'active', 1, '2020-03-16 08:52:20', 1, '2020-07-06 09:14:35', NULL, NULL),
(2, 'stf', 'Staff', 'active', 1, '2020-03-16 08:52:32', NULL, NULL, NULL, NULL),
(3, 'spr', 'Supervisor', 'active', 1, '2020-03-16 08:53:11', NULL, NULL, NULL, NULL),
(4, 'ofb', 'office Boy', 'active', 1, '2020-03-16 08:54:18', NULL, NULL, NULL, NULL),
(5, 'cslt', 'Consultant', 'active', 1, '2020-03-16 08:54:58', NULL, NULL, NULL, NULL),
(6, 'opr', 'Operator', 'active', 1, '2020-03-16 08:55:11', NULL, NULL, NULL, NULL),
(7, 'ast', 'Assistant Manager', 'active', 1, '2020-03-16 08:55:50', NULL, NULL, NULL, NULL),
(8, 'cfo', 'CFO', 'active', 1, '2020-04-13 16:25:50', NULL, NULL, NULL, NULL),
(9, 'pcm', 'procurement', 'active', 1, '2020-04-14 09:35:55', NULL, NULL, NULL, NULL),
(10, 'mgr rndk', 'Manager RnDK', 'active', 1, '2020-07-06 08:56:45', NULL, NULL, NULL, NULL),
(11, 'mgr sdr', 'Manager SISDUR', 'active', 1, '2020-07-06 09:18:21', NULL, NULL, NULL, NULL),
(12, 'mgr pyl', 'MANAGER PAYROLL', 'active', 1, '2020-07-06 09:19:11', NULL, NULL, NULL, NULL),
(13, 'mgr hr', 'MANAGER HR', 'active', 1, '2020-07-06 09:19:29', NULL, NULL, NULL, NULL),
(14, 'mgr ga', 'MANAGER GA', 'active', 1, '2020-07-06 09:19:50', NULL, NULL, NULL, NULL),
(15, 'mgr acc', 'MANAGER ACCOUNTING & FINA', 'active', 1, '2020-07-06 09:20:44', NULL, NULL, NULL, NULL),
(16, 'mgr prc', 'MANAGER PROCRUTMENT', 'active', 1, '2020-07-06 09:21:12', NULL, NULL, NULL, NULL),
(17, 'mgr ppic', 'MANAGER PPIC', 'active', 1, '2020-07-06 09:21:33', NULL, NULL, NULL, NULL),
(18, 'mgr so&si', 'MANAGER SELES ORDER & SEL', 'active', 1, '2020-07-06 09:22:39', NULL, NULL, NULL, NULL),
(19, 'mgr eng', 'MANAGER ENGINEERING', 'active', 1, '2020-07-06 09:23:18', NULL, NULL, NULL, NULL),
(20, 'mgr plant', 'MANAGER PLANT', 'active', 1, '2020-07-06 09:23:47', NULL, NULL, NULL, NULL),
(21, 'mgr produk', 'MANAGER PRODUKSI', 'active', 1, '2020-07-06 09:24:12', NULL, NULL, NULL, NULL),
(22, 'mgr whs', 'MANAGER WAREHOUSE', 'active', 1, '2020-07-06 09:27:04', NULL, NULL, NULL, NULL),
(23, 'mgr qa', 'MANAGER QA', 'active', 1, '2020-07-06 09:27:20', NULL, NULL, NULL, NULL),
(24, 'mgr qck', 'MANAGER QC KOSMETIK', 'active', 1, '2020-07-06 09:27:50', NULL, NULL, NULL, NULL),
(25, 'mgr qco', 'MANAGER QA OBAT', 'active', 1, '2020-07-06 09:28:12', NULL, NULL, NULL, NULL),
(26, 'mgr rndo', 'MANAGER RnD OBAT', 'active', 1, '2020-07-06 09:28:53', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `_statusall_apps`
--

CREATE TABLE `_statusall_apps` (
  `id_status` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_statusall_apps`
--

INSERT INTO `_statusall_apps` (`id_status`, `status`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 'Open', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Closed', 'active', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `_support`
--

CREATE TABLE `_support` (
  `support_id` int(11) NOT NULL,
  `support_date` date NOT NULL,
  `support_code` varchar(15) NOT NULL,
  `support_subject` varchar(150) NOT NULL,
  `support_message` text NOT NULL,
  `namaKaryawan` varchar(200) NOT NULL COMMENT 'combobox',
  `department_name` varchar(25) NOT NULL COMMENT 'combobox',
  `support_status` int(1) NOT NULL DEFAULT '0' COMMENT '0=wait, 1 = accept, 2 =  disagree, 3 = finis',
  `support_reason` text NOT NULL,
  `support_name` varchar(150) NOT NULL,
  `lokasi_gambar` varchar(225) NOT NULL,
  `nama_gamabr` varchar(225) NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_support`
--

INSERT INTO `_support` (`support_id`, `support_date`, `support_code`, `support_subject`, `support_message`, `namaKaryawan`, `department_name`, `support_status`, `support_reason`, `support_name`, `lokasi_gambar`, `nama_gamabr`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, '2020-03-21', 'ID-2020030001', 'Software', 'Printer tidak bisa tarik kertas bisa aja  coba liat lagi textnya ya jangan sampai engga di lihat ya', 'MOEHAMAD SALDY AMIRULLAH JAFAR', 'IT', 0, '', '', '', '', 'nonactive', 1, '2020-03-21 20:18:29', 1, '2020-03-21 21:40:49', 1, '2020-03-22 02:07:38'),
(2, '2020-03-21', 'IT-2020030002', 'Software', 'tidak bisa terkoneksi kejaringan base bisa aja ya , klo mau di rmh aja ya jangan di rumah aja', 'MOEHAMAD SALDY AMIRULLAH JAFAR', 'IT', 2, 'tidak setuju karna tidak setuju', 'MOEHAMAD SALDY AMIRULLAH JAFAR', '', '', 'active', 1, '2020-03-21 22:50:02', 1, '2020-03-31 16:50:47', NULL, NULL),
(3, '2020-03-31', 'IT-2020030003', 'Network', 'jaringan mati total di PPIC', 'MOEHAMAD SALDY AMIRULLAH JAFAR', 'IT', 2, 'tidak setuju', '', '', '', 'active', 1, '2020-03-31 13:38:00', 1, '2020-03-31 16:10:11', NULL, NULL),
(4, '2020-03-31', 'IT-2020030004', 'Software', 'office tiba\" tidak bisa dibuka,  excel dan word', 'MOEHAMAD SALDY AMIRULLAH JAFAR', 'IT', 2, 'karna kesalahan sendiri bukan dari  IT', 'MOEHAMAD SALDY AMIRULLAH JAFAR', '', '', 'active', 6, '2020-03-31 16:52:10', 1, '2020-03-31 16:52:52', NULL, NULL),
(5, '2020-03-31', 'IT-2020030005', 'Network', 'tidak bisa konek wifi asn di ruang meeting 7', 'DENNY RACHMADI', 'WH', 2, 'salah sendiri', 'MOEHAMAD SALDY AMIRULLAH JAFAR', '', '', 'active', 6, '2020-03-31 16:57:58', 1, '2020-03-31 16:58:26', NULL, NULL),
(6, '2020-05-01', 'IT-2020050006', 'Hardware', 'tes', 'MOEHAMAD SALDY AMIRULLAH JAFAR', 'IT', 2, 'oke', 'MOEHAMAD SALDY AMIRULLAH JAFAR', '', '', 'active', 1, '2020-05-01 16:15:52', 1, '2020-05-01 16:16:39', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `_support_detail`
--

CREATE TABLE `_support_detail` (
  `supportdetail_id` int(11) NOT NULL,
  `support_id` date NOT NULL,
  `support_code` varchar(15) NOT NULL,
  `supportdetail_progres` int(3) NOT NULL,
  `support_message` text NOT NULL,
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
-- Table structure for table `_support_message`
--

CREATE TABLE `_support_message` (
  `support_id` int(11) NOT NULL,
  `support_date` date NOT NULL,
  `support_code` varchar(15) NOT NULL,
  `support_subject` varchar(150) NOT NULL,
  `support_message` text NOT NULL,
  `namaKaryawan` varchar(200) NOT NULL COMMENT 'combobox',
  `department_name` varchar(25) NOT NULL COMMENT 'combobox',
  `support_status` int(1) NOT NULL DEFAULT '0' COMMENT '0=not read, 1=read',
  `lokasi_gambar` varchar(225) NOT NULL,
  `nama_gamabr` varchar(225) NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_support_message`
--

INSERT INTO `_support_message` (`support_id`, `support_date`, `support_code`, `support_subject`, `support_message`, `namaKaryawan`, `department_name`, `support_status`, `lokasi_gambar`, `nama_gamabr`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, '2020-03-21', 'ID-2020030001', 'Software', 'Printer tidak bisa tarik kertas bisa aja  coba liat lagi textnya ya jangan sampai engga di lihat ya', 'MOEHAMAD SALDY AMIRULLAH JAFAR', 'IT', 0, '', '', 'nonactive', 1, '2020-03-21 20:18:29', 1, '2020-03-21 21:40:49', 1, '2020-03-22 02:07:38'),
(2, '2020-03-21', 'IT-2020030002', 'Software', 'tidak bisa terkoneksi kejaringan base b', 'MOEHAMAD SALDY AMIRULLAH JAFAR', 'IT', 0, '', '', 'active', 1, '2020-03-21 22:50:02', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apps_00_manual_book_app`
--
ALTER TABLE `apps_00_manual_book_app`
  ADD PRIMARY KEY (`manual_bkapp_id`);

--
-- Indexes for table `apps_05_file`
--
ALTER TABLE `apps_05_file`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `apps_05_progress`
--
ALTER TABLE `apps_05_progress`
  ADD PRIMARY KEY (`progress_id`);

--
-- Indexes for table `apps_05_progressdetail_child`
--
ALTER TABLE `apps_05_progressdetail_child`
  ADD PRIMARY KEY (`progresschild_id`);

--
-- Indexes for table `apps_05_progress_detail`
--
ALTER TABLE `apps_05_progress_detail`
  ADD PRIMARY KEY (`progressdetail_id`);

--
-- Indexes for table `e00_location`
--
ALTER TABLE `e00_location`
  ADD PRIMARY KEY (`id_location`);

--
-- Indexes for table `e00_position`
--
ALTER TABLE `e00_position`
  ADD PRIMARY KEY (`id_position`);

--
-- Indexes for table `e00_scope`
--
ALTER TABLE `e00_scope`
  ADD PRIMARY KEY (`scope_id`);

--
-- Indexes for table `e00_signatory`
--
ALTER TABLE `e00_signatory`
  ADD PRIMARY KEY (`id_penandatangan`);

--
-- Indexes for table `e00_support_subject`
--
ALTER TABLE `e00_support_subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `e01_ms_jenis_penyimpangan`
--
ALTER TABLE `e01_ms_jenis_penyimpangan`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `e01_ms_katagori`
--
ALTER TABLE `e01_ms_katagori`
  ADD PRIMARY KEY (`id_katagori`);

--
-- Indexes for table `e01_ms_resiko`
--
ALTER TABLE `e01_ms_resiko`
  ADD PRIMARY KEY (`id_resiko`);

--
-- Indexes for table `e01_ms_ruanglingkup`
--
ALTER TABLE `e01_ms_ruanglingkup`
  ADD PRIMARY KEY (`id_ruanglingkup`);

--
-- Indexes for table `e01_ms_tipe`
--
ALTER TABLE `e01_ms_tipe`
  ADD PRIMARY KEY (`id_tipe`);

--
-- Indexes for table `e01_tmp_penyimpangan`
--
ALTER TABLE `e01_tmp_penyimpangan`
  ADD PRIMARY KEY (`id_formulir`);

--
-- Indexes for table `e01_ts_capa`
--
ALTER TABLE `e01_ts_capa`
  ADD PRIMARY KEY (`id_capa`),
  ADD KEY `id_bank` (`id_formulir`);

--
-- Indexes for table `e01_ts_capa_corrective`
--
ALTER TABLE `e01_ts_capa_corrective`
  ADD PRIMARY KEY (`corrective_id`),
  ADD KEY `id_bank` (`id_formulir`);

--
-- Indexes for table `e01_ts_capa_preventive`
--
ALTER TABLE `e01_ts_capa_preventive`
  ADD PRIMARY KEY (`id_preventive`),
  ADD KEY `id_bank` (`id_formulir`);

--
-- Indexes for table `e01_ts_depart_terkait`
--
ALTER TABLE `e01_ts_depart_terkait`
  ADD PRIMARY KEY (`id_approve`);

--
-- Indexes for table `e01_ts_ditindak_lanjuti`
--
ALTER TABLE `e01_ts_ditindak_lanjuti`
  ADD PRIMARY KEY (`dilanjuti_id`);

--
-- Indexes for table `e01_ts_evaluasi_tindakan`
--
ALTER TABLE `e01_ts_evaluasi_tindakan`
  ADD PRIMARY KEY (`id_evaluasi_tindakan`),
  ADD KEY `id_bank` (`id_formulir`);

--
-- Indexes for table `e01_ts_finalconclusion`
--
ALTER TABLE `e01_ts_finalconclusion`
  ADD PRIMARY KEY (`finalconclusion_id`),
  ADD KEY `id_bank` (`id_formulir`),
  ADD KEY `tahun` (`id_formulir`);

--
-- Indexes for table `e01_ts_formulir`
--
ALTER TABLE `e01_ts_formulir`
  ADD PRIMARY KEY (`id_formulir`);

--
-- Indexes for table `e01_ts_formulirapprove`
--
ALTER TABLE `e01_ts_formulirapprove`
  ADD PRIMARY KEY (`id_formulirapprove`),
  ADD KEY `id_bank` (`id_formulir`),
  ADD KEY `tahun` (`id_formulir`);

--
-- Indexes for table `e01_ts_kesimpulan_akar`
--
ALTER TABLE `e01_ts_kesimpulan_akar`
  ADD PRIMARY KEY (`kesimpulan_akar_id`);

--
-- Indexes for table `e01_ts_kesimpulan_akhir`
--
ALTER TABLE `e01_ts_kesimpulan_akhir`
  ADD PRIMARY KEY (`kesimpulan_akhir_id`);

--
-- Indexes for table `e01_ts_rootcauseanalysis`
--
ALTER TABLE `e01_ts_rootcauseanalysis`
  ADD PRIMARY KEY (`id_rootcause`),
  ADD KEY `id_bank` (`id_formulir`),
  ADD KEY `tahun` (`id_formulir`);

--
-- Indexes for table `e01_vl_file_analisis`
--
ALTER TABLE `e01_vl_file_analisis`
  ADD PRIMARY KEY (`id_file_analisis`);

--
-- Indexes for table `e01_vl_file_evaluasi`
--
ALTER TABLE `e01_vl_file_evaluasi`
  ADD PRIMARY KEY (`id_file_evaluasi`);

--
-- Indexes for table `e02_ms_assets`
--
ALTER TABLE `e02_ms_assets`
  ADD PRIMARY KEY (`type_assets_id`);

--
-- Indexes for table `e02_ms_uom`
--
ALTER TABLE `e02_ms_uom`
  ADD PRIMARY KEY (`id_uom`);

--
-- Indexes for table `e02_ts_assets`
--
ALTER TABLE `e02_ts_assets`
  ADD PRIMARY KEY (`assets_id`);

--
-- Indexes for table `e02_ts_bankbunga`
--
ALTER TABLE `e02_ts_bankbunga`
  ADD PRIMARY KEY (`id_bankbunga`),
  ADD KEY `id_bank` (`id_bank`),
  ADD KEY `tahun` (`tahun`,`bulan`,`id_bank`);

--
-- Indexes for table `e02_ts_bankcabang`
--
ALTER TABLE `e02_ts_bankcabang`
  ADD PRIMARY KEY (`id_bankcabang`),
  ADD KEY `id_bank` (`id_bank`);

--
-- Indexes for table `e02_ts_bankquotatahunan`
--
ALTER TABLE `e02_ts_bankquotatahunan`
  ADD PRIMARY KEY (`id_bankquotatahunan`),
  ADD KEY `id_bank` (`id_bank`);

--
-- Indexes for table `e03_apps_info`
--
ALTER TABLE `e03_apps_info`
  ADD PRIMARY KEY (`id_info`);

--
-- Indexes for table `e03_apps_progress`
--
ALTER TABLE `e03_apps_progress`
  ADD PRIMARY KEY (`id_progress`);

--
-- Indexes for table `e03_apps_public_bottom`
--
ALTER TABLE `e03_apps_public_bottom`
  ADD PRIMARY KEY (`id_public_bottom`);

--
-- Indexes for table `e03_apps_public_up`
--
ALTER TABLE `e03_apps_public_up`
  ADD PRIMARY KEY (`id_public_up`);

--
-- Indexes for table `e03_apps_support_bottom`
--
ALTER TABLE `e03_apps_support_bottom`
  ADD PRIMARY KEY (`id_support_bottom`);

--
-- Indexes for table `e03_apps_support_up`
--
ALTER TABLE `e03_apps_support_up`
  ADD PRIMARY KEY (`id_support_up`);

--
-- Indexes for table `e04_ms_component`
--
ALTER TABLE `e04_ms_component`
  ADD PRIMARY KEY (`id_component`);

--
-- Indexes for table `e04_ms_tools`
--
ALTER TABLE `e04_ms_tools`
  ADD PRIMARY KEY (`tools_id`);

--
-- Indexes for table `e04_ms_tools_detail`
--
ALTER TABLE `e04_ms_tools_detail`
  ADD PRIMARY KEY (`toolsdetail_id`);

--
-- Indexes for table `e04_ms_tools_old`
--
ALTER TABLE `e04_ms_tools_old`
  ADD PRIMARY KEY (`tools_id`);

--
-- Indexes for table `e04_ms_type_calibration`
--
ALTER TABLE `e04_ms_type_calibration`
  ADD PRIMARY KEY (`id_type`);

--
-- Indexes for table `e04_ms_vendor`
--
ALTER TABLE `e04_ms_vendor`
  ADD PRIMARY KEY (`vendor_id`);

--
-- Indexes for table `e04_ms_vendor_detail`
--
ALTER TABLE `e04_ms_vendor_detail`
  ADD PRIMARY KEY (`vendor_detail_id`);

--
-- Indexes for table `e04_ts_calibration`
--
ALTER TABLE `e04_ts_calibration`
  ADD PRIMARY KEY (`calibration_id`);

--
-- Indexes for table `e04_ts_calibration_old`
--
ALTER TABLE `e04_ts_calibration_old`
  ADD PRIMARY KEY (`calibration_id`);

--
-- Indexes for table `e04_ts_calibration_periode`
--
ALTER TABLE `e04_ts_calibration_periode`
  ADD PRIMARY KEY (`periode_id`);

--
-- Indexes for table `e04_ts_calibration_podetail`
--
ALTER TABLE `e04_ts_calibration_podetail`
  ADD PRIMARY KEY (`id_position`);

--
-- Indexes for table `e04_ts_calibration_podetail_new`
--
ALTER TABLE `e04_ts_calibration_podetail_new`
  ADD PRIMARY KEY (`id_position`);

--
-- Indexes for table `e04_ts_calibration_poheader`
--
ALTER TABLE `e04_ts_calibration_poheader`
  ADD PRIMARY KEY (`c_pohedaer_id`);

--
-- Indexes for table `e04_ts_trans_pk`
--
ALTER TABLE `e04_ts_trans_pk`
  ADD PRIMARY KEY (`periode_id`);

--
-- Indexes for table `e05_concept_product_step_1`
--
ALTER TABLE `e05_concept_product_step_1`
  ADD PRIMARY KEY (`konsep_produk_baru_id`);

--
-- Indexes for table `e05_concept_product_step_2`
--
ALTER TABLE `e05_concept_product_step_2`
  ADD PRIMARY KEY (`step_2_id`);

--
-- Indexes for table `e05_concept_product_step_3`
--
ALTER TABLE `e05_concept_product_step_3`
  ADD PRIMARY KEY (`step_3_id`);

--
-- Indexes for table `e05_concept_product_step_4`
--
ALTER TABLE `e05_concept_product_step_4`
  ADD PRIMARY KEY (`step_4_id`);

--
-- Indexes for table `e05_konsep_produk_baru`
--
ALTER TABLE `e05_konsep_produk_baru`
  ADD PRIMARY KEY (`konsep_produk_baru_id`);

--
-- Indexes for table `e05_konsep_produk_baru_detail`
--
ALTER TABLE `e05_konsep_produk_baru_detail`
  ADD PRIMARY KEY (`konsep_produk_detail`);

--
-- Indexes for table `e06_new_schedule`
--
ALTER TABLE `e06_new_schedule`
  ADD PRIMARY KEY (`schedule_id`);

--
-- Indexes for table `e06_new_schedule_detail`
--
ALTER TABLE `e06_new_schedule_detail`
  ADD PRIMARY KEY (`schedule_iddetail`);

--
-- Indexes for table `e06_new_schedule_detail_user`
--
ALTER TABLE `e06_new_schedule_detail_user`
  ADD PRIMARY KEY (`schedule_byuser`);

--
-- Indexes for table `e06_new_schedule_user`
--
ALTER TABLE `e06_new_schedule_user`
  ADD PRIMARY KEY (`schedule_iduser`);

--
-- Indexes for table `e06_schedule`
--
ALTER TABLE `e06_schedule`
  ADD PRIMARY KEY (`schedule_id`);

--
-- Indexes for table `e06_schedule_detail`
--
ALTER TABLE `e06_schedule_detail`
  ADD PRIMARY KEY (`schedule_detail_id`);

--
-- Indexes for table `e07_psample`
--
ALTER TABLE `e07_psample`
  ADD PRIMARY KEY (`psample_id`);

--
-- Indexes for table `e07_psample_detail`
--
ALTER TABLE `e07_psample_detail`
  ADD PRIMARY KEY (`psample_detail_id`);

--
-- Indexes for table `e15_formula_1_d`
--
ALTER TABLE `e15_formula_1_d`
  ADD PRIMARY KEY (`formula_id_D`);

--
-- Indexes for table `e15_formula_1_h`
--
ALTER TABLE `e15_formula_1_h`
  ADD PRIMARY KEY (`formula_id_H`);

--
-- Indexes for table `e15_formula_2`
--
ALTER TABLE `e15_formula_2`
  ADD PRIMARY KEY (`formula_id_2`);

--
-- Indexes for table `e15_formula_2_prosedur`
--
ALTER TABLE `e15_formula_2_prosedur`
  ADD PRIMARY KEY (`formula_prosedur_2`);

--
-- Indexes for table `e_04_ms_calibration_type`
--
ALTER TABLE `e_04_ms_calibration_type`
  ADD PRIMARY KEY (`id_calibration_type`);

--
-- Indexes for table `_calendar`
--
ALTER TABLE `_calendar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_department`
--
ALTER TABLE `_department`
  ADD PRIMARY KEY (`id_department`);

--
-- Indexes for table `_icon`
--
ALTER TABLE `_icon`
  ADD PRIMARY KEY (`id_icon`);

--
-- Indexes for table `_like_apps`
--
ALTER TABLE `_like_apps`
  ADD PRIMARY KEY (`tools_id`);

--
-- Indexes for table `_logno`
--
ALTER TABLE `_logno`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_message`
--
ALTER TABLE `_message`
  ADD PRIMARY KEY (`id_message`);

--
-- Indexes for table `_message_to`
--
ALTER TABLE `_message_to`
  ADD PRIMARY KEY (`id_message_to`);

--
-- Indexes for table `_position`
--
ALTER TABLE `_position`
  ADD PRIMARY KEY (`id_position`);

--
-- Indexes for table `_statusall_apps`
--
ALTER TABLE `_statusall_apps`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `_support`
--
ALTER TABLE `_support`
  ADD PRIMARY KEY (`support_id`);

--
-- Indexes for table `_support_detail`
--
ALTER TABLE `_support_detail`
  ADD PRIMARY KEY (`supportdetail_id`);

--
-- Indexes for table `_support_message`
--
ALTER TABLE `_support_message`
  ADD PRIMARY KEY (`support_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apps_00_manual_book_app`
--
ALTER TABLE `apps_00_manual_book_app`
  MODIFY `manual_bkapp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `apps_05_file`
--
ALTER TABLE `apps_05_file`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `apps_05_progress`
--
ALTER TABLE `apps_05_progress`
  MODIFY `progress_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `apps_05_progressdetail_child`
--
ALTER TABLE `apps_05_progressdetail_child`
  MODIFY `progresschild_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `apps_05_progress_detail`
--
ALTER TABLE `apps_05_progress_detail`
  MODIFY `progressdetail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `e00_location`
--
ALTER TABLE `e00_location`
  MODIFY `id_location` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `e00_position`
--
ALTER TABLE `e00_position`
  MODIFY `id_position` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `e00_scope`
--
ALTER TABLE `e00_scope`
  MODIFY `scope_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `e00_signatory`
--
ALTER TABLE `e00_signatory`
  MODIFY `id_penandatangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `e00_support_subject`
--
ALTER TABLE `e00_support_subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `e01_ms_jenis_penyimpangan`
--
ALTER TABLE `e01_ms_jenis_penyimpangan`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `e01_ms_katagori`
--
ALTER TABLE `e01_ms_katagori`
  MODIFY `id_katagori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `e01_ms_resiko`
--
ALTER TABLE `e01_ms_resiko`
  MODIFY `id_resiko` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `e01_ms_ruanglingkup`
--
ALTER TABLE `e01_ms_ruanglingkup`
  MODIFY `id_ruanglingkup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `e01_ms_tipe`
--
ALTER TABLE `e01_ms_tipe`
  MODIFY `id_tipe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `e01_tmp_penyimpangan`
--
ALTER TABLE `e01_tmp_penyimpangan`
  MODIFY `id_formulir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `e01_ts_capa`
--
ALTER TABLE `e01_ts_capa`
  MODIFY `id_capa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `e01_ts_capa_corrective`
--
ALTER TABLE `e01_ts_capa_corrective`
  MODIFY `corrective_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `e01_ts_capa_preventive`
--
ALTER TABLE `e01_ts_capa_preventive`
  MODIFY `id_preventive` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `e01_ts_depart_terkait`
--
ALTER TABLE `e01_ts_depart_terkait`
  MODIFY `id_approve` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `e01_ts_ditindak_lanjuti`
--
ALTER TABLE `e01_ts_ditindak_lanjuti`
  MODIFY `dilanjuti_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `e01_ts_evaluasi_tindakan`
--
ALTER TABLE `e01_ts_evaluasi_tindakan`
  MODIFY `id_evaluasi_tindakan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `e01_ts_finalconclusion`
--
ALTER TABLE `e01_ts_finalconclusion`
  MODIFY `finalconclusion_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `e01_ts_formulir`
--
ALTER TABLE `e01_ts_formulir`
  MODIFY `id_formulir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `e01_ts_formulirapprove`
--
ALTER TABLE `e01_ts_formulirapprove`
  MODIFY `id_formulirapprove` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `e01_ts_kesimpulan_akar`
--
ALTER TABLE `e01_ts_kesimpulan_akar`
  MODIFY `kesimpulan_akar_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `e01_ts_kesimpulan_akhir`
--
ALTER TABLE `e01_ts_kesimpulan_akhir`
  MODIFY `kesimpulan_akhir_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `e01_ts_rootcauseanalysis`
--
ALTER TABLE `e01_ts_rootcauseanalysis`
  MODIFY `id_rootcause` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `e01_vl_file_analisis`
--
ALTER TABLE `e01_vl_file_analisis`
  MODIFY `id_file_analisis` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `e01_vl_file_evaluasi`
--
ALTER TABLE `e01_vl_file_evaluasi`
  MODIFY `id_file_evaluasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `e02_ms_assets`
--
ALTER TABLE `e02_ms_assets`
  MODIFY `type_assets_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `e02_ms_uom`
--
ALTER TABLE `e02_ms_uom`
  MODIFY `id_uom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `e02_ts_assets`
--
ALTER TABLE `e02_ts_assets`
  MODIFY `assets_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `e02_ts_bankbunga`
--
ALTER TABLE `e02_ts_bankbunga`
  MODIFY `id_bankbunga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `e02_ts_bankcabang`
--
ALTER TABLE `e02_ts_bankcabang`
  MODIFY `id_bankcabang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `e02_ts_bankquotatahunan`
--
ALTER TABLE `e02_ts_bankquotatahunan`
  MODIFY `id_bankquotatahunan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `e03_apps_info`
--
ALTER TABLE `e03_apps_info`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `e03_apps_progress`
--
ALTER TABLE `e03_apps_progress`
  MODIFY `id_progress` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `e03_apps_public_bottom`
--
ALTER TABLE `e03_apps_public_bottom`
  MODIFY `id_public_bottom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `e03_apps_public_up`
--
ALTER TABLE `e03_apps_public_up`
  MODIFY `id_public_up` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `e03_apps_support_bottom`
--
ALTER TABLE `e03_apps_support_bottom`
  MODIFY `id_support_bottom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `e03_apps_support_up`
--
ALTER TABLE `e03_apps_support_up`
  MODIFY `id_support_up` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `e04_ms_component`
--
ALTER TABLE `e04_ms_component`
  MODIFY `id_component` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `e04_ms_tools`
--
ALTER TABLE `e04_ms_tools`
  MODIFY `tools_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=444;

--
-- AUTO_INCREMENT for table `e04_ms_tools_detail`
--
ALTER TABLE `e04_ms_tools_detail`
  MODIFY `toolsdetail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `e04_ms_tools_old`
--
ALTER TABLE `e04_ms_tools_old`
  MODIFY `tools_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `e04_ms_type_calibration`
--
ALTER TABLE `e04_ms_type_calibration`
  MODIFY `id_type` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `e04_ms_vendor`
--
ALTER TABLE `e04_ms_vendor`
  MODIFY `vendor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `e04_ms_vendor_detail`
--
ALTER TABLE `e04_ms_vendor_detail`
  MODIFY `vendor_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `e04_ts_calibration`
--
ALTER TABLE `e04_ts_calibration`
  MODIFY `calibration_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=537;

--
-- AUTO_INCREMENT for table `e04_ts_calibration_old`
--
ALTER TABLE `e04_ts_calibration_old`
  MODIFY `calibration_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=647;

--
-- AUTO_INCREMENT for table `e04_ts_calibration_periode`
--
ALTER TABLE `e04_ts_calibration_periode`
  MODIFY `periode_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `e04_ts_calibration_podetail`
--
ALTER TABLE `e04_ts_calibration_podetail`
  MODIFY `id_position` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT for table `e04_ts_calibration_podetail_new`
--
ALTER TABLE `e04_ts_calibration_podetail_new`
  MODIFY `id_position` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=400;

--
-- AUTO_INCREMENT for table `e04_ts_calibration_poheader`
--
ALTER TABLE `e04_ts_calibration_poheader`
  MODIFY `c_pohedaer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `e04_ts_trans_pk`
--
ALTER TABLE `e04_ts_trans_pk`
  MODIFY `periode_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `e05_concept_product_step_1`
--
ALTER TABLE `e05_concept_product_step_1`
  MODIFY `konsep_produk_baru_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `e05_concept_product_step_2`
--
ALTER TABLE `e05_concept_product_step_2`
  MODIFY `step_2_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `e05_concept_product_step_3`
--
ALTER TABLE `e05_concept_product_step_3`
  MODIFY `step_3_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `e05_concept_product_step_4`
--
ALTER TABLE `e05_concept_product_step_4`
  MODIFY `step_4_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `e05_konsep_produk_baru`
--
ALTER TABLE `e05_konsep_produk_baru`
  MODIFY `konsep_produk_baru_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `e05_konsep_produk_baru_detail`
--
ALTER TABLE `e05_konsep_produk_baru_detail`
  MODIFY `konsep_produk_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `e06_new_schedule`
--
ALTER TABLE `e06_new_schedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `e06_new_schedule_detail`
--
ALTER TABLE `e06_new_schedule_detail`
  MODIFY `schedule_iddetail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `e06_new_schedule_detail_user`
--
ALTER TABLE `e06_new_schedule_detail_user`
  MODIFY `schedule_byuser` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `e06_new_schedule_user`
--
ALTER TABLE `e06_new_schedule_user`
  MODIFY `schedule_iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `e06_schedule`
--
ALTER TABLE `e06_schedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `e06_schedule_detail`
--
ALTER TABLE `e06_schedule_detail`
  MODIFY `schedule_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `e07_psample`
--
ALTER TABLE `e07_psample`
  MODIFY `psample_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `e07_psample_detail`
--
ALTER TABLE `e07_psample_detail`
  MODIFY `psample_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `e15_formula_1_d`
--
ALTER TABLE `e15_formula_1_d`
  MODIFY `formula_id_D` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `e15_formula_1_h`
--
ALTER TABLE `e15_formula_1_h`
  MODIFY `formula_id_H` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `e15_formula_2`
--
ALTER TABLE `e15_formula_2`
  MODIFY `formula_id_2` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `e15_formula_2_prosedur`
--
ALTER TABLE `e15_formula_2_prosedur`
  MODIFY `formula_prosedur_2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `e_04_ms_calibration_type`
--
ALTER TABLE `e_04_ms_calibration_type`
  MODIFY `id_calibration_type` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `_calendar`
--
ALTER TABLE `_calendar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `_department`
--
ALTER TABLE `_department`
  MODIFY `id_department` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `_icon`
--
ALTER TABLE `_icon`
  MODIFY `id_icon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `_like_apps`
--
ALTER TABLE `_like_apps`
  MODIFY `tools_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `_logno`
--
ALTER TABLE `_logno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `_message`
--
ALTER TABLE `_message`
  MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `_message_to`
--
ALTER TABLE `_message_to`
  MODIFY `id_message_to` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `_position`
--
ALTER TABLE `_position`
  MODIFY `id_position` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `_statusall_apps`
--
ALTER TABLE `_statusall_apps`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `_support`
--
ALTER TABLE `_support`
  MODIFY `support_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `_support_detail`
--
ALTER TABLE `_support_detail`
  MODIFY `supportdetail_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `_support_message`
--
ALTER TABLE `_support_message`
  MODIFY `support_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
