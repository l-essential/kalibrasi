-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2020 at 02:04 AM
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
-- Database: `lessential`
--
CREATE DATABASE IF NOT EXISTS `lessential` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `lessential`;

-- --------------------------------------------------------

--
-- Table structure for table `badanhukum`
--

DROP TABLE IF EXISTS `badanhukum`;
CREATE TABLE `badanhukum` (
  `id_badanhukum` int(11) NOT NULL,
  `badanhukum` varchar(50) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `statusbadanhukum` int(1) NOT NULL DEFAULT '1' COMMENT '1=normal,2=blacklish',
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `badanhukum`
--

INSERT INTO `badanhukum` (`id_badanhukum`, `badanhukum`, `keterangan`, `statusbadanhukum`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 'PT. SARANA BAHTERA SEJAHTERA', '', 1, 'active', 1, '2019-05-18 12:09:00', 1, '2019-08-14 01:41:43', NULL, NULL),
(2, 'PT. SULTANA KARYA LESTARI', '', 1, 'active', 1, '2019-05-18 12:09:09', 1, '2019-08-19 06:43:52', NULL, NULL),
(3, 'PT. TRISTAN JAYA MANDIRI', '', 1, 'active', 1, '2019-05-18 12:09:19', NULL, NULL, NULL, NULL),
(4, 'PT. MERBAU SUKSES JAYA', '', 1, 'active', 1, '2019-05-18 12:09:36', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `e00_location`
--

DROP TABLE IF EXISTS `e00_location`;
CREATE TABLE `e00_location` (
  `id_location` int(11) NOT NULL,
  `location_code` varchar(25) NOT NULL,
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
(1, 'ter', 'ter', 'active', 2, '2020-03-05 16:53:59', NULL, NULL, NULL, NULL),
(2, '09', '012', 'active', 1, '2020-03-06 13:32:14', 1, '2020-03-06 13:34:48', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `e00_position`
--

DROP TABLE IF EXISTS `e00_position`;
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
(4, 2, '', 'R.prod', 'Ruang Produksi', 'active', 1, '2020-03-06 13:41:22', NULL, NULL, NULL, NULL),
(5, 2, '', '23', '23', 'active', 1, '2020-03-06 13:42:04', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `e00_signatory`
--

DROP TABLE IF EXISTS `e00_signatory`;
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
-- Table structure for table `e01_ms_jenis_penyimpangan`
--

DROP TABLE IF EXISTS `e01_ms_jenis_penyimpangan`;
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

DROP TABLE IF EXISTS `e01_ms_katagori`;
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

DROP TABLE IF EXISTS `e01_ms_resiko`;
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

DROP TABLE IF EXISTS `e01_ms_ruanglingkup`;
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

DROP TABLE IF EXISTS `e01_ms_tipe`;
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
-- Table structure for table `e01_ts_capa`
--

DROP TABLE IF EXISTS `e01_ts_capa`;
CREATE TABLE `e01_ts_capa` (
  `id_bankcabang` int(11) NOT NULL,
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
-- Table structure for table `e01_ts_depart_terkait`
--

DROP TABLE IF EXISTS `e01_ts_depart_terkait`;
CREATE TABLE `e01_ts_depart_terkait` (
  `id_approve` int(11) NOT NULL,
  `id_formulir` int(11) NOT NULL,
  `improvement_code` varchar(30) DEFAULT NULL,
  `department_name` varchar(15) DEFAULT NULL,
  `status_approve` int(1) DEFAULT '0' COMMENT '0=not approve, 1=approve, 2=notapprove',
  `reason` text,
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

DROP TABLE IF EXISTS `e01_ts_evaluasi_tindakan`;
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

-- --------------------------------------------------------

--
-- Table structure for table `e01_ts_formulir`
--

DROP TABLE IF EXISTS `e01_ts_formulir`;
CREATE TABLE `e01_ts_formulir` (
  `id_formulir` int(11) NOT NULL,
  `improvement_code` varchar(30) NOT NULL,
  `title_improvement` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `number` varchar(30) NOT NULL,
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
  `status_penyimpangan` enum('OPEN','CLOSED') NOT NULL DEFAULT 'OPEN',
  `tindaklajuti_oleh` varchar(11) NOT NULL COMMENT 'dont',
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
-- Table structure for table `e01_ts_formulirapprove`
--

DROP TABLE IF EXISTS `e01_ts_formulirapprove`;
CREATE TABLE `e01_ts_formulirapprove` (
  `id_formulirapprove` int(11) NOT NULL,
  `id_formulir` int(11) NOT NULL DEFAULT '0',
  `improvement_code` varchar(30) NOT NULL,
  `status_formulir` int(1) NOT NULL DEFAULT '0' COMMENT '0=notapprove,1=approve, 2=notapprove',
  `reason` text NOT NULL,
  `approve_name` varchar(25) NOT NULL,
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
-- Table structure for table `e01_ts_rootcauseanalysis`
--

DROP TABLE IF EXISTS `e01_ts_rootcauseanalysis`;
CREATE TABLE `e01_ts_rootcauseanalysis` (
  `id_rootcause` int(11) NOT NULL,
  `id_formulir` int(11) NOT NULL DEFAULT '0',
  `personel` text NOT NULL,
  `material` text NOT NULL,
  `alat_mesin` text NOT NULL,
  `metode` text NOT NULL,
  `sarana` text NOT NULL,
  `department_name` varchar(5) NOT NULL,
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
-- Table structure for table `e01_vl_file_analisis`
--

DROP TABLE IF EXISTS `e01_vl_file_analisis`;
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

DROP TABLE IF EXISTS `e01_vl_file_evaluasi`;
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

DROP TABLE IF EXISTS `e02_ms_assets`;
CREATE TABLE `e02_ms_assets` (
  `id_assets` int(11) NOT NULL,
  `assets_code` char(3) NOT NULL,
  `assets_name` varchar(25) NOT NULL,
  `assets_merk` varchar(100) NOT NULL,
  `assets_type` varchar(100) NOT NULL,
  `assets_model` varchar(100) NOT NULL,
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

INSERT INTO `e02_ms_assets` (`id_assets`, `assets_code`, `assets_name`, `assets_merk`, `assets_type`, `assets_model`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, '196', '0', '0', '', '', 'nonactive', 1, '2019-08-19 06:15:21', 1, '2020-01-27 09:01:08', 1, '2020-02-09 21:57:37'),
(2, '196', '0', '0', '', '', 'nonactive', 1, '2019-08-19 06:24:48', NULL, NULL, 1, '2020-01-24 15:42:03'),
(3, '123', '0', '0', '', '', 'nonactive', 1, '2020-02-09 21:53:12', NULL, NULL, 1, '2020-02-09 21:53:17'),
(4, '134', '0', '0', '', '', 'nonactive', 1, '2020-02-09 21:57:31', NULL, NULL, 1, '2020-02-09 22:04:44'),
(5, '213', '0', '0', '', '', 'nonactive', 1, '2020-02-09 21:59:15', NULL, NULL, 1, '2020-02-09 21:59:19'),
(6, '147', '0', '0', '', '', 'nonactive', 1, '2020-02-09 22:00:36', NULL, NULL, 1, '2020-02-09 22:00:40'),
(7, '434', 'Komputer', '0', '', '', 'active', 1, '2020-02-09 22:01:28', 56, '2020-02-24 11:58:44', NULL, NULL),
(8, '111', '0', '0', '', '', 'nonactive', 1, '2020-02-09 22:04:37', NULL, NULL, 1, '2020-02-09 22:04:41'),
(9, 'q56', '0', '0', '', '', 'nonactive', 1, '2020-02-09 22:07:39', NULL, NULL, 1, '2020-02-09 22:07:43');

-- --------------------------------------------------------

--
-- Table structure for table `e02_ms_uom`
--

DROP TABLE IF EXISTS `e02_ms_uom`;
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
-- Table structure for table `e02_ts_bank`
--

DROP TABLE IF EXISTS `e02_ts_bank`;
CREATE TABLE `e02_ts_bank` (
  `id_bank` int(11) NOT NULL,
  `id_location` varchar(20) NOT NULL COMMENT 'combobox',
  `kode_BANK` varchar(11) NOT NULL,
  `nama_bank` varchar(50) NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e02_ts_bank`
--

INSERT INTO `e02_ts_bank` (`id_bank`, `id_location`, `kode_BANK`, `nama_bank`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, '7', '', 'Komputer', 'active', 2, '2019-05-16 23:35:26', 56, '2020-02-24 09:42:05', NULL, NULL),
(2, '0', '', 'BANK TEST', 'nonactive', 1, '2019-06-18 20:48:21', NULL, NULL, 1, '2019-08-14 05:46:02'),
(3, '0', '', 'test', 'nonactive', 1, '2019-08-15 06:11:21', NULL, NULL, 1, '2019-08-15 06:11:44'),
(4, '34', '', 'Komputer', 'active', 56, '2020-02-24 14:04:42', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `e02_ts_bankbunga`
--

DROP TABLE IF EXISTS `e02_ts_bankbunga`;
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

DROP TABLE IF EXISTS `e02_ts_bankcabang`;
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

DROP TABLE IF EXISTS `e02_ts_bankquotatahunan`;
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

DROP TABLE IF EXISTS `e03_apps_info`;
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

DROP TABLE IF EXISTS `e03_apps_progress`;
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
(8, 'Penyimpangan', '100', 'active', 2, '2020-02-04 00:28:32', 2, '2020-03-08 13:33:21', NULL, NULL),
(9, 'Riadene', '72', 'active', 2, '2020-02-04 13:55:14', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `e03_apps_public_bottom`
--

DROP TABLE IF EXISTS `e03_apps_public_bottom`;
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

DROP TABLE IF EXISTS `e03_apps_public_up`;
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

DROP TABLE IF EXISTS `e03_apps_support_bottom`;
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

DROP TABLE IF EXISTS `e03_apps_support_up`;
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
-- Table structure for table `e04_ms_tools`
--

DROP TABLE IF EXISTS `e04_ms_tools`;
CREATE TABLE `e04_ms_tools` (
  `id_tools` int(11) NOT NULL,
  `tools_code` varchar(15) NOT NULL,
  `tools_name` varchar(150) NOT NULL,
  `tools_merk` varchar(100) NOT NULL,
  `tools_model` varchar(35) NOT NULL,
  `tools_nosertifikat` varchar(100) NOT NULL,
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

INSERT INTO `e04_ms_tools` (`id_tools`, `tools_code`, `tools_name`, `tools_merk`, `tools_model`, `tools_nosertifikat`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, ' <div class=\"te', ' <div class=\"text-right\" id=\"c', ' <div class=\"text-right\" id=\"c', ' <div class=\"text-right\" id=\"c', '', 'nonactive', 1, '2020-03-06 11:15:32', NULL, NULL, 1, '2020-03-06 11:16:09'),
(2, 'test', 'test', 'test', 'test', 'tes', 'nonactive', 1, '2020-03-06 11:16:22', 1, '2020-03-06 11:23:18', 1, '2020-03-06 11:23:22'),
(3, 'test1', 'test', 'test', 'test', 'test', 'nonactive', 1, '2020-03-06 11:23:07', NULL, NULL, 1, '2020-03-06 11:23:11'),
(4, 'test', 'test', 'test', 'test', 'test', 'active', 1, '2020-03-06 14:03:17', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `_department`
--

DROP TABLE IF EXISTS `_department`;
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
(17, 'CEO', 'CEO', 'active', 56, '2020-02-26 10:11:26', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `_icon`
--

DROP TABLE IF EXISTS `_icon`;
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
-- Table structure for table `_logno`
--

DROP TABLE IF EXISTS `_logno`;
CREATE TABLE `_logno` (
  `id` int(11) NOT NULL,
  `name_apps` char(3) NOT NULL,
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
(2, '', 'K', 2020, '03', 11, 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(3, '', 'U', 2020, '03', 1, 'active', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `_message`
--

DROP TABLE IF EXISTS `_message`;
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

DROP TABLE IF EXISTS `_message_to`;
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
-- Table structure for table `_statusall_apps`
--

DROP TABLE IF EXISTS `_statusall_apps`;
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `badanhukum`
--
ALTER TABLE `badanhukum`
  ADD PRIMARY KEY (`id_badanhukum`);

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
-- Indexes for table `e00_signatory`
--
ALTER TABLE `e00_signatory`
  ADD PRIMARY KEY (`id_penandatangan`);

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
-- Indexes for table `e01_ts_capa`
--
ALTER TABLE `e01_ts_capa`
  ADD PRIMARY KEY (`id_bankcabang`),
  ADD KEY `id_bank` (`id_formulir`);

--
-- Indexes for table `e01_ts_depart_terkait`
--
ALTER TABLE `e01_ts_depart_terkait`
  ADD PRIMARY KEY (`id_approve`);

--
-- Indexes for table `e01_ts_evaluasi_tindakan`
--
ALTER TABLE `e01_ts_evaluasi_tindakan`
  ADD PRIMARY KEY (`id_evaluasi_tindakan`),
  ADD KEY `id_bank` (`id_formulir`);

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
  ADD PRIMARY KEY (`id_assets`);

--
-- Indexes for table `e02_ms_uom`
--
ALTER TABLE `e02_ms_uom`
  ADD PRIMARY KEY (`id_uom`);

--
-- Indexes for table `e02_ts_bank`
--
ALTER TABLE `e02_ts_bank`
  ADD PRIMARY KEY (`id_bank`);

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
-- Indexes for table `e04_ms_tools`
--
ALTER TABLE `e04_ms_tools`
  ADD PRIMARY KEY (`id_tools`);

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
-- Indexes for table `_statusall_apps`
--
ALTER TABLE `_statusall_apps`
  ADD PRIMARY KEY (`id_status`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `badanhukum`
--
ALTER TABLE `badanhukum`
  MODIFY `id_badanhukum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `e00_location`
--
ALTER TABLE `e00_location`
  MODIFY `id_location` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `e00_position`
--
ALTER TABLE `e00_position`
  MODIFY `id_position` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `e00_signatory`
--
ALTER TABLE `e00_signatory`
  MODIFY `id_penandatangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT for table `e01_ts_capa`
--
ALTER TABLE `e01_ts_capa`
  MODIFY `id_bankcabang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `e01_ts_depart_terkait`
--
ALTER TABLE `e01_ts_depart_terkait`
  MODIFY `id_approve` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `e01_ts_evaluasi_tindakan`
--
ALTER TABLE `e01_ts_evaluasi_tindakan`
  MODIFY `id_evaluasi_tindakan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `e01_ts_formulir`
--
ALTER TABLE `e01_ts_formulir`
  MODIFY `id_formulir` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `e01_ts_formulirapprove`
--
ALTER TABLE `e01_ts_formulirapprove`
  MODIFY `id_formulirapprove` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `e01_ts_rootcauseanalysis`
--
ALTER TABLE `e01_ts_rootcauseanalysis`
  MODIFY `id_rootcause` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id_assets` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `e02_ms_uom`
--
ALTER TABLE `e02_ms_uom`
  MODIFY `id_uom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `e02_ts_bank`
--
ALTER TABLE `e02_ts_bank`
  MODIFY `id_bank` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- AUTO_INCREMENT for table `e04_ms_tools`
--
ALTER TABLE `e04_ms_tools`
  MODIFY `id_tools` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `_department`
--
ALTER TABLE `_department`
  MODIFY `id_department` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `_icon`
--
ALTER TABLE `_icon`
  MODIFY `id_icon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `_logno`
--
ALTER TABLE `_logno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT for table `_statusall_apps`
--
ALTER TABLE `_statusall_apps`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
