-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 20, 2019 at 06:25 AM
-- Server version: 10.0.38-MariaDB-0ubuntu0.16.04.1
-- PHP Version: 7.0.33-0ubuntu0.16.04.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pu`
--
CREATE DATABASE IF NOT EXISTS `db_pu` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_pu`;

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
-- Table structure for table `bank`
--

DROP TABLE IF EXISTS `bank`;
CREATE TABLE `bank` (
  `id_bank` int(11) NOT NULL,
  `kode_bank` varchar(30) NOT NULL,
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
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id_bank`, `kode_bank`, `nama_bank`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 'BTN', 'PT BANK TABUNGAN NEGARA (PERSERO), Tbk', 'active', 2, '2019-05-16 23:35:26', 1, '2019-08-19 06:56:38', NULL, NULL),
(2, '', 'BANK TEST', 'nonactive', 1, '2019-06-18 20:48:21', NULL, NULL, 1, '2019-08-14 05:46:02'),
(3, '', 'test', 'nonactive', 1, '2019-08-15 06:11:21', NULL, NULL, 1, '2019-08-15 06:11:44');

-- --------------------------------------------------------

--
-- Table structure for table `bankbunga`
--

DROP TABLE IF EXISTS `bankbunga`;
CREATE TABLE `bankbunga` (
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
-- Dumping data for table `bankbunga`
--

INSERT INTO `bankbunga` (`id_bankbunga`, `id_bank`, `tahun`, `bulan`, `periode`, `nilaibunga`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
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
-- Table structure for table `bankcabang`
--

DROP TABLE IF EXISTS `bankcabang`;
CREATE TABLE `bankcabang` (
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
-- Dumping data for table `bankcabang`
--

INSERT INTO `bankcabang` (`id_bankcabang`, `id_bank`, `no_rekening`, `kantor_cabank`, `alamat`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 1, '', 'PONTIANAK', '', 'active', 1, '2019-05-18 12:06:20', 1, '2019-08-14 06:39:38', NULL, NULL),
(2, 1, '', 'GORONTALO', '', 'active', 1, '2019-05-18 12:06:31', 1, '2019-08-19 06:59:59', NULL, NULL),
(3, 1, '', 'BANJARMASIN', '', 'active', 1, '2019-05-18 12:06:42', 1, '2019-08-14 06:39:54', NULL, NULL),
(4, 1, '', 'MEDAN', '', 'active', 1, '2019-05-18 12:06:58', NULL, NULL, NULL, NULL),
(5, 2, '', 'KOTA B', '', 'active', 1, '2019-06-18 20:48:44', NULL, NULL, NULL, NULL),
(6, 1, '', 'test', '', 'nonactive', 1, '2019-08-14 06:40:05', NULL, NULL, 1, '2019-08-14 06:47:19');

-- --------------------------------------------------------

--
-- Table structure for table `bankquotatahunan`
--

DROP TABLE IF EXISTS `bankquotatahunan`;
CREATE TABLE `bankquotatahunan` (
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
-- Dumping data for table `bankquotatahunan`
--

INSERT INTO `bankquotatahunan` (`id_bankquotatahunan`, `id_bank`, `tipe`, `tanggal_pko`, `tahun`, `quota`, `keterangan`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 1, 1, '2019-08-15', 2019, 12, 'ytest kkj', 'active', 1, '2019-08-15 05:53:04', 1, '2019-08-15 06:03:15', 1, '2019-08-15 06:03:25'),
(2, 1, 2, '2019-08-16', 2018, 12, 'ddf', 'active', 1, '2019-08-15 06:02:59', NULL, NULL, 1, '2019-08-15 06:03:07');

-- --------------------------------------------------------

--
-- Table structure for table `desa`
--

DROP TABLE IF EXISTS `desa`;
CREATE TABLE `desa` (
  `id_desa` int(11) NOT NULL,
  `id_kecamatan` int(11) NOT NULL DEFAULT '0',
  `kode_desa` varchar(10) NOT NULL,
  `nama_desa` varchar(60) DEFAULT NULL,
  `kodepos` int(10) DEFAULT '0',
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `desa`
--

INSERT INTO `desa` (`id_desa`, `id_kecamatan`, `kode_desa`, `nama_desa`, `kodepos`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 1, '123', 'test update', 15710, 'nonactive', 1, '2019-08-30 01:53:53', 1, '2019-08-30 01:55:43', 1, '2019-08-30 01:55:50'),
(2, 1, 'jhvhvh', 'vhvh', 15711, 'nonactive', 1, '2019-08-30 01:54:49', NULL, NULL, 1, '2019-08-30 01:55:18'),
(3, 1, 'jb jbjb', 'jbjb', 12345, 'nonactive', 1, '2019-08-30 01:55:35', NULL, NULL, 1, '2019-08-30 01:55:46'),
(4, 1, '12', 'test', 15710, 'nonactive', 1, '2019-08-30 01:58:31', NULL, NULL, 1, '2019-08-30 01:58:36'),
(5, 4, '123', 'MEKARBAKTI update', 1, 'active', 1, '2019-08-30 02:22:15', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jeniskpr`
--

DROP TABLE IF EXISTS `jeniskpr`;
CREATE TABLE `jeniskpr` (
  `id_jeniskpr` int(11) NOT NULL,
  `jeniskpr` varchar(50) NOT NULL,
  `id_jenisrumah` int(1) DEFAULT NULL COMMENT '1=tapak,2=susun',
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jeniskpr`
--

INSERT INTO `jeniskpr` (`id_jeniskpr`, `jeniskpr`, `id_jenisrumah`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 'KPR SSB Tapak', 1, 'active', 2, '2019-05-16 23:29:24', NULL, NULL, NULL, NULL),
(2, 'KPR SSB Susun', 2, 'active', 2, '2019-05-16 23:29:39', NULL, NULL, NULL, NULL),
(3, 'KPR SSM Tapak', 1, 'active', 2, '2019-05-16 23:29:48', 1, '2019-08-14 01:49:23', NULL, NULL),
(4, 'KPR SSM Susun', 2, 'active', 2, '2019-05-16 23:30:01', NULL, NULL, NULL, NULL),
(5, 'KPR Sejahtera Tapak', 1, 'active', 2, '2019-05-16 23:30:34', NULL, NULL, NULL, NULL),
(6, 'KPR Sejahtera Syariah Susun', 2, 'active', 2, '2019-05-16 23:30:51', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jenisrumah`
--

DROP TABLE IF EXISTS `jenisrumah`;
CREATE TABLE `jenisrumah` (
  `id_jenisrumah` int(11) NOT NULL,
  `kode_jenisrumah` varchar(10) NOT NULL,
  `nama_jenisrumah` varchar(50) NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenisrumah`
--

INSERT INTO `jenisrumah` (`id_jenisrumah`, `kode_jenisrumah`, `nama_jenisrumah`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 'tapak', 'Tapak', 'active', 1, '2019-08-19 07:17:18', NULL, NULL, NULL, NULL),
(2, 'susun', 'Susun', 'active', 1, '2019-08-19 07:17:28', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

DROP TABLE IF EXISTS `kecamatan`;
CREATE TABLE `kecamatan` (
  `id_kecamatan` int(11) NOT NULL,
  `id_kota` int(11) NOT NULL,
  `kode_kecamatan` varchar(10) NOT NULL,
  `nama_kecamatan` varchar(60) NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `id_kota`, `kode_kecamatan`, `nama_kecamatan`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 6, '123', 'test kec up', 'active', 1, '2019-08-30 01:02:00', 1, '2019-08-30 01:03:30', 1, '2019-08-30 01:02:08'),
(2, 6, '1222', 'test 2 ui', 'active', 1, '2019-08-30 01:03:19', 1, '2019-08-30 01:03:43', NULL, NULL),
(3, 3, '01', 'test', 'active', 1, '2019-08-30 02:01:48', NULL, NULL, NULL, NULL),
(4, 2, '01', 'test aja', 'active', 1, '2019-08-30 02:09:35', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kotakabupaten`
--

DROP TABLE IF EXISTS `kotakabupaten`;
CREATE TABLE `kotakabupaten` (
  `id_kota` int(11) NOT NULL,
  `id_provinsi` int(11) NOT NULL DEFAULT '0',
  `kode_kota` varchar(10) NOT NULL,
  `kota` varchar(60) NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kotakabupaten`
--

INSERT INTO `kotakabupaten` (`id_kota`, `id_provinsi`, `kode_kota`, `kota`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 1, '', 'TANGERANG', 'active', 1, '2019-05-18 12:17:31', NULL, NULL, NULL, NULL),
(2, 2, '123', 'KUBU RAYA', 'active', 1, '2019-05-18 14:04:06', 1, '2019-09-10 04:37:21', NULL, NULL),
(3, 3, '', 'Gorontalo ', 'active', 1, '2019-05-18 14:05:47', NULL, NULL, NULL, NULL),
(4, 4, '', 'BANJARBARU', 'active', 1, '2019-05-18 14:07:14', NULL, NULL, NULL, NULL),
(5, 5, '', 'LABUHAN BATU', 'active', 1, '2019-05-18 14:08:12', NULL, NULL, NULL, NULL),
(6, 2, '1111', 'test aja update', 'active', 1, '2019-08-30 00:35:20', 1, '2019-08-30 00:45:04', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `m_batashargarumah`
--

DROP TABLE IF EXISTS `m_batashargarumah`;
CREATE TABLE `m_batashargarumah` (
  `id_m_batashargarumah` int(11) NOT NULL,
  `id_provinsi` int(11) NOT NULL,
  `tanggal_tmt` date NOT NULL COMMENT 'terhitung mulai tanggal',
  `batasnilai_rumahtapak` int(18) NOT NULL DEFAULT '0',
  `batasnilai_rumahsusun` int(18) NOT NULL DEFAULT '0',
  `harga_perm2` int(11) NOT NULL DEFAULT '0',
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_batashargarumah`
--

INSERT INTO `m_batashargarumah` (`id_m_batashargarumah`, `id_provinsi`, `tanggal_tmt`, `batasnilai_rumahtapak`, `batasnilai_rumahsusun`, `harga_perm2`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 2, '2019-09-11', 128000000, 200000000, 1000000, 'active', 1, '2019-09-11 21:25:56', NULL, NULL, NULL, NULL),
(2, 4, '2018-01-01', 120000000, 1000000000, 12222222, 'nonactive', 1, '2019-09-11 21:27:50', 1, '2019-09-11 21:28:48', 1, '2019-09-11 21:28:53');

-- --------------------------------------------------------

--
-- Table structure for table `m_batashargarumahpengecualian`
--

DROP TABLE IF EXISTS `m_batashargarumahpengecualian`;
CREATE TABLE `m_batashargarumahpengecualian` (
  `id_m_batashargarumahpengecualian` int(11) NOT NULL,
  `id_provinsi` int(11) NOT NULL,
  `id_kota` int(11) NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `id_desa` int(11) NOT NULL,
  `levelsub` int(11) NOT NULL DEFAULT '0' COMMENT 'level turunan dari provinsi sampai ke desa berada di posisi mana',
  `tanggal_tmt` date NOT NULL COMMENT 'terhitung mulai tanggal',
  `batasnilai_rumahtapak` int(18) NOT NULL DEFAULT '0',
  `batasnilai_rumahsusun` int(18) NOT NULL DEFAULT '0',
  `harga_perm2` int(11) NOT NULL DEFAULT '0',
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_batashargarumahpengecualian`
--

INSERT INTO `m_batashargarumahpengecualian` (`id_m_batashargarumahpengecualian`, `id_provinsi`, `id_kota`, `id_kecamatan`, `id_desa`, `levelsub`, `tanggal_tmt`, `batasnilai_rumahtapak`, `batasnilai_rumahsusun`, `harga_perm2`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 3, 0, 0, 0, 1, '2019-09-12', 100000000, 29999999, 1000000, 'nonactive', 1, '2019-09-12 00:02:08', NULL, NULL, 1, '2019-09-12 00:07:11'),
(2, 3, 3, 0, 0, 0, '2019-09-12', 12999999, 199999999, 0, 'nonactive', 1, '2019-09-12 00:06:09', NULL, NULL, 1, '2019-09-12 00:07:07'),
(3, 3, 3, 3, 0, 3, '2019-09-12', 20000000, 30000000, 2000000, 'nonactive', 1, '2019-09-12 00:06:43', 1, '2019-09-12 00:06:58', 1, '2019-09-12 00:07:03');

-- --------------------------------------------------------

--
-- Table structure for table `m_bataspengasilan`
--

DROP TABLE IF EXISTS `m_bataspengasilan`;
CREATE TABLE `m_bataspengasilan` (
  `id_m_bataspengasilan` int(11) NOT NULL,
  `id_provinsi` int(11) NOT NULL,
  `tanggal_tmt` date NOT NULL COMMENT 'terhitung mulai tanggal',
  `batasnilai_rumahtapak` int(11) NOT NULL DEFAULT '0',
  `batasnilai_rumahsusun` int(11) NOT NULL DEFAULT '0',
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_bataspengasilan`
--

INSERT INTO `m_bataspengasilan` (`id_m_bataspengasilan`, `id_provinsi`, `tanggal_tmt`, `batasnilai_rumahtapak`, `batasnilai_rumahsusun`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 3, '2019-09-11', 1000000, 2000000, 'nonactive', 1, '2019-09-11 05:38:08', 1, '2019-09-11 05:43:29', 1, '2019-09-11 05:43:47'),
(2, 3, '2019-09-27', 10000000, 10000000, 'nonactive', 1, '2019-09-11 05:38:51', 1, '2019-09-11 05:43:38', 1, '2019-09-11 05:43:43');

-- --------------------------------------------------------

--
-- Table structure for table `m_sukubungabirate`
--

DROP TABLE IF EXISTS `m_sukubungabirate`;
CREATE TABLE `m_sukubungabirate` (
  `id_m_sukubungabirate` int(11) NOT NULL,
  `tanggal_terbit` date NOT NULL,
  `tahun` int(4) NOT NULL DEFAULT '0',
  `bulan` int(2) NOT NULL DEFAULT '0',
  `bi_rate` decimal(8,6) NOT NULL DEFAULT '0.000000',
  `jumlahhari_efektif` int(2) NOT NULL DEFAULT '0',
  `sisa_hari` int(2) NOT NULL DEFAULT '0',
  `totalharidalambulan` int(2) NOT NULL DEFAULT '0',
  `sukubunga_kpr` decimal(5,2) NOT NULL DEFAULT '0.00',
  `sukubunga_kprbi` decimal(5,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaan`
--

DROP TABLE IF EXISTS `pekerjaan`;
CREATE TABLE `pekerjaan` (
  `id_pekerjaan` int(11) NOT NULL,
  `kode` int(2) DEFAULT NULL,
  `pekerjaan` varchar(15) NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pekerjaan`
--

INSERT INTO `pekerjaan` (`id_pekerjaan`, `kode`, `pekerjaan`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 1, 'PNS', 'active', 2, '2019-05-13 05:35:09', 1, '2019-08-14 01:33:25', NULL, NULL),
(2, 2, 'TNI/POLRI', 'active', 2, '2019-05-16 23:24:26', 1, '2019-08-14 01:33:39', NULL, NULL),
(3, 3, 'SWASTA', 'active', 2, '2019-05-16 23:24:40', 1, '2019-08-14 01:33:46', NULL, NULL),
(4, 3, 'WIRASWASTA', 'nonactive', 2, '2019-05-16 23:24:48', 1, '2019-08-14 01:33:57', 1, '2019-09-12 11:06:26'),
(5, 5, 'LAINNYA', 'active', 2, '2019-05-16 23:24:58', 1, '2019-08-14 01:34:04', NULL, NULL),
(6, NULL, 'TEST', 'nonactive', 1, '2019-06-18 20:45:50', NULL, NULL, 1, '2019-06-18 20:46:03'),
(7, 4, 'WIRASWASTA', 'active', 1, '2019-09-12 11:06:49', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `penandatangan`
--

DROP TABLE IF EXISTS `penandatangan`;
CREATE TABLE `penandatangan` (
  `id_penandatangan` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama_penandatangan` varchar(80) NOT NULL,
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
-- Dumping data for table `penandatangan`
--

INSERT INTO `penandatangan` (`id_penandatangan`, `nip`, `nama_penandatangan`, `jabatan_penandatangan`, `tanggal_tmt`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, '196310231985032003', 'Retno Pudjiastuti, ST,M.Si', 'Pejabat Pembuat Komitmen Satker Ditjen Pembiayaan Perumahan', '2018-01-01', 'active', 1, '2019-08-19 06:15:21', 1, '2019-08-19 06:21:30', NULL, NULL),
(2, '196610181995031002', 'Ir. Samson Sibarani,MT', 'Pejabat Pembuat Komitmen Satker Ditjen Pembiayaan Perumahan', '2017-01-01', 'active', 1, '2019-08-19 06:24:48', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `perumahan`
--

DROP TABLE IF EXISTS `perumahan`;
CREATE TABLE `perumahan` (
  `id_perumahan` int(11) NOT NULL,
  `id_kodepos` int(11) NOT NULL DEFAULT '0' COMMENT 'combobox',
  `perumahan` varchar(50) NOT NULL,
  `alamat` varchar(160) NOT NULL,
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
-- Dumping data for table `perumahan`
--

INSERT INTO `perumahan` (`id_perumahan`, `id_kodepos`, `perumahan`, `alamat`, `luastanah`, `luasbangunan`, `keterangan`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 5, 'AL ASMA', 'AL ASMA B 7 , SEI KAKAP , SEI KAKAP , KUBU RAYA , KALIMANTAN BARAT  78381', 274, 36, '', 'active', 1, '2019-05-18 12:11:41', 1, '2019-05-18 15:20:26', NULL, NULL),
(2, 6, 'GRIYA SULTANA', 'GRIYA SULTANA F 03 , TIMUATO , TELAGA BIRU , GORONTALO  , GORONTALO  96181', 256, 36, '', 'active', 1, '2019-05-18 12:12:16', 1, '2019-05-18 15:22:22', NULL, NULL),
(3, 7, 'GRAHA PERMATA INDAH 9 TAHAP 2', 'KOMPLEK GRAHA PERMATA INDAH 9 TAHAP 2 - 22 RT :004 RT :001 , GUNTUNG PAYUNG , LANDASAN ULIN , BANJARBARU  , KALIMANTAN SELATAN  70721', 254, 36, '', 'active', 1, '2019-05-18 12:12:45', 1, '2019-05-18 15:22:49', NULL, NULL),
(4, 7, 'GRAHA PERMATA INDAH 9 TAHAP 2 - 39 RT :004 RT :001', 'GRAHA PERMATA INDAH 9 TAHAP 2 - 39 RT :004 RT :001 , GUNTUNG PAYUNG , LANDASAN ULIN , BANJARBARU  , KALIMANTAN SELATAN  70721', 252, 36, '', 'active', 1, '2019-05-18 12:14:27', 1, '2019-05-18 15:23:04', NULL, NULL),
(5, 8, 'RAJA HABIB', 'RAJA HABIB G 1 , SIOLDENGAN , RANTAU SELATAN , LABUHAN BATU , SUMATERA UTARA  21428', 249, 36, '', 'active', 1, '2019-05-18 12:14:52', 1, '2019-05-18 15:23:18', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `perumahanharga`
--

DROP TABLE IF EXISTS `perumahanharga`;
CREATE TABLE `perumahanharga` (
  `id_perumahanharga` int(11) NOT NULL,
  `id_perumahan` int(11) NOT NULL DEFAULT '0',
  `tahun` int(5) NOT NULL DEFAULT '0',
  `harga` int(11) NOT NULL DEFAULT '0',
  `uangmuka` int(11) NOT NULL DEFAULT '0',
  `nilaikpr` int(11) NOT NULL DEFAULT '0',
  `sukubunga` decimal(5,2) NOT NULL DEFAULT '0.00' COMMENT 'dalam persen',
  `tenor` int(5) NOT NULL DEFAULT '0' COMMENT 'dalam bulan',
  `angsuran` int(11) NOT NULL DEFAULT '0',
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perumahanharga`
--

INSERT INTO `perumahanharga` (`id_perumahanharga`, `id_perumahan`, `tahun`, `harga`, `uangmuka`, `nilaikpr`, `sukubunga`, `tenor`, `angsuran`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 5, 2015, 110000000, 11000000, 99000000, '5.00', 180, 794900, 'active', 1, '2019-05-18 16:04:53', 1, '2019-05-18 16:13:32', NULL, NULL),
(2, 1, 2015, 95000000, 10000000, 85000000, '5.00', 240, 568400, 'active', 1, '2019-05-18 16:07:23', 1, '2019-05-18 16:14:25', NULL, NULL),
(3, 2, 2015, 105000000, 15000000, 90000000, '5.00', 120, 971300, 'active', 1, '2019-05-18 16:08:43', 1, '2019-05-18 16:14:38', NULL, NULL),
(4, 3, 2015, 121000000, 7000000, 114000000, '5.00', 180, 915300, 'active', 1, '2019-05-18 16:11:06', 1, '2019-05-18 16:13:48', NULL, NULL),
(5, 4, 2015, 121000000, 7000000, 114000000, '5.00', 180, 915300, 'active', 1, '2019-05-18 16:12:03', 1, '2019-05-18 16:14:06', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

DROP TABLE IF EXISTS `peserta`;
CREATE TABLE `peserta` (
  `id_peserta` bigint(20) NOT NULL,
  `statusschedule` enum('waiting','generate') NOT NULL DEFAULT 'waiting',
  `statuslunas` enum('belumlunas','sudahlunas') NOT NULL DEFAULT 'belumlunas',
  `nama_peserta` varchar(100) NOT NULL,
  `id_bankcabang` int(11) NOT NULL DEFAULT '0',
  `id_pekerjaan` int(11) NOT NULL DEFAULT '0',
  `jeniskelamin` enum('L','P') NOT NULL,
  `no_ktp_peserta` varchar(16) NOT NULL DEFAULT '0',
  `npwp` varchar(15) NOT NULL DEFAULT '0',
  `gajipokok` int(11) NOT NULL DEFAULT '0',
  `nama_pasangan` varchar(100) NOT NULL,
  `no_ktp_pasangan` varchar(16) NOT NULL DEFAULT '0',
  `no_rekening` varchar(20) NOT NULL DEFAULT '0',
  `tgl_akad` date NOT NULL,
  `sbum` decimal(11,2) DEFAULT NULL,
  `id_badanhukum` int(11) NOT NULL DEFAULT '0',
  `id_perumahan` int(11) NOT NULL DEFAULT '0',
  `id_perumahanharga` int(11) NOT NULL DEFAULT '0',
  `selisihangsuran` decimal(11,2) NOT NULL DEFAULT '0.00',
  `nilaiflpp` decimal(11,2) NOT NULL DEFAULT '0.00',
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`id_peserta`, `statusschedule`, `statuslunas`, `nama_peserta`, `id_bankcabang`, `id_pekerjaan`, `jeniskelamin`, `no_ktp_peserta`, `npwp`, `gajipokok`, `nama_pasangan`, `no_ktp_pasangan`, `no_rekening`, `tgl_akad`, `sbum`, `id_badanhukum`, `id_perumahan`, `id_perumahanharga`, `selisihangsuran`, `nilaiflpp`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 'generate', 'belumlunas', 'SITI UTAMI', 1, 1, 'P', '6101035410840002', '361209927702000', 2570200, 'RUDY LADAFIQ CHANIAGO', '6171051606800015', '4201020417550', '2015-12-08', '0.00', 1, 1, 2, '0.00', '0.00', 'active', 1, '2019-05-18 22:03:27', 1, '2019-05-19 16:29:55', NULL, NULL),
(2, 'generate', 'belumlunas', 'EKO SYARIFUDIN', 2, 2, 'L', '7571061106830003', '779792654822000', 2800000, 'LIAN MUSTAFA', '7571065702820002', '11001020037563', '2015-12-18', '0.00', 2, 2, 3, '0.00', '0.00', 'active', 1, '2019-05-19 12:17:04', 1, '2019-05-19 14:32:08', NULL, NULL),
(3, 'generate', 'belumlunas', 'MUHAMMAD FATAH', 3, 1, 'L', '6372050904900003', '692563711446000', 2834000, '', '', '1001020795773', '2015-12-17', '0.00', 3, 3, 4, '0.00', '0.00', 'active', 1, '2019-05-19 12:20:50', 1, '2019-05-19 14:32:15', NULL, NULL),
(4, 'generate', 'belumlunas', 'BAGAS NOOR SEPTIA ADI', 3, 3, 'L', '6372051808830003', '740429501732000', 2500000, 'RISMAWATI', '6305025901930001', '1001020793307', '2015-12-11', '0.00', 3, 4, 5, '0.00', '0.00', 'active', 1, '2019-05-19 12:23:08', 1, '2019-05-19 14:32:22', NULL, NULL),
(5, 'generate', 'belumlunas', 'SURYANI RAHMADHANI', 4, 3, 'P', '1210024707900003', '080639727116000', 3000000, 'SOFYAN', '1210011909840003', '301020937023', '2015-12-08', '0.00', 4, 5, 1, '0.00', '0.00', 'active', 1, '2019-05-19 12:25:15', 1, '2019-05-19 14:32:29', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pesertaangsuran`
--

DROP TABLE IF EXISTS `pesertaangsuran`;
CREATE TABLE `pesertaangsuran` (
  `id_pesertaangsuran` bigint(20) NOT NULL,
  `id_peserta` bigint(20) NOT NULL DEFAULT '0',
  `duedate` date DEFAULT NULL,
  `tahun` int(4) NOT NULL DEFAULT '0',
  `bulan` int(2) NOT NULL DEFAULT '0',
  `tenorke` int(5) NOT NULL DEFAULT '0',
  `bunga_persentase` decimal(6,5) DEFAULT '0.00000',
  `angsuran` decimal(11,2) NOT NULL DEFAULT '0.00',
  `bunga_cicilan` decimal(11,2) NOT NULL DEFAULT '0.00',
  `pokok` decimal(11,2) NOT NULL DEFAULT '0.00',
  `outstanding` decimal(11,2) NOT NULL DEFAULT '0.00',
  `selisih` decimal(11,2) NOT NULL DEFAULT '0.00',
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesertaangsuran`
--

INSERT INTO `pesertaangsuran` (`id_pesertaangsuran`, `id_peserta`, `duedate`, `tahun`, `bulan`, `tenorke`, `bunga_persentase`, `angsuran`, `bunga_cicilan`, `pokok`, `outstanding`, `selisih`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 1, '2015-12-08', 2015, 12, 1, '0.12500', '978178.00', '885417.00', '92761.00', '84907239.00', '409778.00', 'active', 1, '2019-05-19 14:30:48', 1, '2019-06-18 21:49:19', NULL, NULL),
(2, 1, '2016-01-08', 2016, 1, 2, '0.12360', '969745.00', '874544.60', '95200.00', '84812039.00', '401345.00', 'active', 1, '2019-05-19 14:30:48', 1, '2019-06-18 21:49:19', NULL, NULL),
(3, 1, '2016-02-08', 2016, 2, 3, '0.12150', '957194.00', '858721.90', '98472.00', '84713567.00', '388794.00', 'active', 1, '2019-05-19 14:30:48', 1, '2019-06-18 21:49:19', NULL, NULL),
(4, 1, '2016-03-08', 2016, 3, 4, '0.11879', '941129.00', '838595.80', '102533.00', '84611034.00', '372729.00', 'active', 1, '2019-05-19 14:30:48', 1, '2019-06-18 21:49:19', NULL, NULL),
(5, 1, '2016-04-08', 2016, 4, 5, '0.11750', '933496.00', '828483.00', '105013.00', '84506021.00', '365096.00', 'active', 1, '2019-05-19 14:30:48', 1, '2019-06-18 21:49:19', NULL, NULL),
(6, 1, '2016-05-08', 2016, 5, 6, '0.11750', '933438.00', '828483.00', '104955.00', '84401066.00', '365038.00', 'active', 1, '2019-05-19 14:30:48', 1, '2019-06-18 21:49:19', NULL, NULL),
(7, 1, '2016-06-08', 2016, 6, 7, '0.11625', '926106.00', '817635.30', '108471.00', '84292595.00', '357706.00', 'active', 1, '2019-05-19 14:30:48', 1, '2019-06-18 21:49:19', NULL, NULL),
(8, 1, '2016-07-08', 2016, 7, 8, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:48', NULL, NULL, NULL, NULL),
(9, 1, '2016-08-08', 2016, 8, 9, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:48', NULL, NULL, NULL, NULL),
(10, 1, '2016-09-08', 2016, 9, 10, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:48', NULL, NULL, NULL, NULL),
(11, 1, '2016-10-08', 2016, 10, 11, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:48', NULL, NULL, NULL, NULL),
(12, 1, '2016-11-08', 2016, 11, 12, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:48', NULL, NULL, NULL, NULL),
(13, 1, '2016-12-08', 2016, 12, 13, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:48', NULL, NULL, NULL, NULL),
(14, 1, '2017-01-08', 2017, 1, 14, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:48', NULL, NULL, NULL, NULL),
(15, 1, '2017-02-08', 2017, 2, 15, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:48', NULL, NULL, NULL, NULL),
(16, 1, '2017-03-08', 2017, 3, 16, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:48', NULL, NULL, NULL, NULL),
(17, 1, '2017-04-08', 2017, 4, 17, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:48', NULL, NULL, NULL, NULL),
(18, 1, '2017-05-08', 2017, 5, 18, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:48', NULL, NULL, NULL, NULL),
(19, 1, '2017-06-08', 2017, 6, 19, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:48', NULL, NULL, NULL, NULL),
(20, 1, '2017-07-08', 2017, 7, 20, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:48', NULL, NULL, NULL, NULL),
(21, 1, '2017-08-08', 2017, 8, 21, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:48', NULL, NULL, NULL, NULL),
(22, 1, '2017-09-08', 2017, 9, 22, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:48', NULL, NULL, NULL, NULL),
(23, 1, '2017-10-08', 2017, 10, 23, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:48', NULL, NULL, NULL, NULL),
(24, 1, '2017-11-08', 2017, 11, 24, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:48', NULL, NULL, NULL, NULL),
(25, 1, '2017-12-08', 2017, 12, 25, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:48', NULL, NULL, NULL, NULL),
(26, 1, '2018-01-08', 2018, 1, 26, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:48', NULL, NULL, NULL, NULL),
(27, 1, '2018-02-08', 2018, 2, 27, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:48', NULL, NULL, NULL, NULL),
(28, 1, '2018-03-08', 2018, 3, 28, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:48', NULL, NULL, NULL, NULL),
(29, 1, '2018-04-08', 2018, 4, 29, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:48', NULL, NULL, NULL, NULL),
(30, 1, '2018-05-08', 2018, 5, 30, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:48', NULL, NULL, NULL, NULL),
(31, 1, '2018-06-08', 2018, 6, 31, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:48', NULL, NULL, NULL, NULL),
(32, 1, '2018-07-08', 2018, 7, 32, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:48', NULL, NULL, NULL, NULL),
(33, 1, '2018-08-08', 2018, 8, 33, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:48', NULL, NULL, NULL, NULL),
(34, 1, '2018-09-08', 2018, 9, 34, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:48', NULL, NULL, NULL, NULL),
(35, 1, '2018-10-08', 2018, 10, 35, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:48', NULL, NULL, NULL, NULL),
(36, 1, '2018-11-08', 2018, 11, 36, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:48', NULL, NULL, NULL, NULL),
(37, 1, '2018-12-08', 2018, 12, 37, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:48', NULL, NULL, NULL, NULL),
(38, 1, '2019-01-08', 2019, 1, 38, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:48', NULL, NULL, NULL, NULL),
(39, 1, '2019-02-08', 2019, 2, 39, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:48', NULL, NULL, NULL, NULL),
(40, 1, '2019-03-08', 2019, 3, 40, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:48', NULL, NULL, NULL, NULL),
(41, 1, '2019-04-08', 2019, 4, 41, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:48', NULL, NULL, NULL, NULL),
(42, 1, '2019-05-08', 2019, 5, 42, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:48', NULL, NULL, NULL, NULL),
(43, 1, '2019-06-08', 2019, 6, 43, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:48', NULL, NULL, NULL, NULL),
(44, 1, '2019-07-08', 2019, 7, 44, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:48', NULL, NULL, NULL, NULL),
(45, 1, '2019-08-08', 2019, 8, 45, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:48', NULL, NULL, NULL, NULL),
(46, 1, '2019-09-08', 2019, 9, 46, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:48', NULL, NULL, NULL, NULL),
(47, 1, '2019-10-08', 2019, 10, 47, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:48', NULL, NULL, NULL, NULL),
(48, 1, '2019-11-08', 2019, 11, 48, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:48', NULL, NULL, NULL, NULL),
(49, 1, '2019-12-08', 2019, 12, 49, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:48', NULL, NULL, NULL, NULL),
(50, 1, '2020-01-08', 2020, 1, 50, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:48', NULL, NULL, NULL, NULL),
(51, 1, '2020-02-08', 2020, 2, 51, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:48', NULL, NULL, NULL, NULL),
(52, 1, '2020-03-08', 2020, 3, 52, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:48', NULL, NULL, NULL, NULL),
(53, 1, '2020-04-08', 2020, 4, 53, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:48', NULL, NULL, NULL, NULL),
(54, 1, '2020-05-08', 2020, 5, 54, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:48', NULL, NULL, NULL, NULL),
(55, 1, '2020-06-08', 2020, 6, 55, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:48', NULL, NULL, NULL, NULL),
(56, 1, '2020-07-08', 2020, 7, 56, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:48', NULL, NULL, NULL, NULL),
(57, 1, '2020-08-08', 2020, 8, 57, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:48', NULL, NULL, NULL, NULL),
(58, 1, '2020-09-08', 2020, 9, 58, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:48', NULL, NULL, NULL, NULL),
(59, 1, '2020-10-08', 2020, 10, 59, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:48', NULL, NULL, NULL, NULL),
(60, 1, '2020-11-08', 2020, 11, 60, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:48', NULL, NULL, NULL, NULL),
(61, 1, '2020-12-08', 2020, 12, 61, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:48', NULL, NULL, NULL, NULL),
(62, 1, '2021-01-08', 2021, 1, 62, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:48', NULL, NULL, NULL, NULL),
(63, 1, '2021-02-08', 2021, 2, 63, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:48', NULL, NULL, NULL, NULL),
(64, 1, '2021-03-08', 2021, 3, 64, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:48', NULL, NULL, NULL, NULL),
(65, 1, '2021-04-08', 2021, 4, 65, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:48', NULL, NULL, NULL, NULL),
(66, 1, '2021-05-08', 2021, 5, 66, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:48', NULL, NULL, NULL, NULL),
(67, 1, '2021-06-08', 2021, 6, 67, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(68, 1, '2021-07-08', 2021, 7, 68, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(69, 1, '2021-08-08', 2021, 8, 69, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(70, 1, '2021-09-08', 2021, 9, 70, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(71, 1, '2021-10-08', 2021, 10, 71, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(72, 1, '2021-11-08', 2021, 11, 72, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(73, 1, '2021-12-08', 2021, 12, 73, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(74, 1, '2022-01-08', 2022, 1, 74, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(75, 1, '2022-02-08', 2022, 2, 75, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(76, 1, '2022-03-08', 2022, 3, 76, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(77, 1, '2022-04-08', 2022, 4, 77, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(78, 1, '2022-05-08', 2022, 5, 78, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(79, 1, '2022-06-08', 2022, 6, 79, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(80, 1, '2022-07-08', 2022, 7, 80, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(81, 1, '2022-08-08', 2022, 8, 81, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(82, 1, '2022-09-08', 2022, 9, 82, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(83, 1, '2022-10-08', 2022, 10, 83, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(84, 1, '2022-11-08', 2022, 11, 84, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(85, 1, '2022-12-08', 2022, 12, 85, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(86, 1, '2023-01-08', 2023, 1, 86, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(87, 1, '2023-02-08', 2023, 2, 87, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(88, 1, '2023-03-08', 2023, 3, 88, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(89, 1, '2023-04-08', 2023, 4, 89, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(90, 1, '2023-05-08', 2023, 5, 90, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(91, 1, '2023-06-08', 2023, 6, 91, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(92, 1, '2023-07-08', 2023, 7, 92, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(93, 1, '2023-08-08', 2023, 8, 93, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(94, 1, '2023-09-08', 2023, 9, 94, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(95, 1, '2023-10-08', 2023, 10, 95, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(96, 1, '2023-11-08', 2023, 11, 96, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(97, 1, '2023-12-08', 2023, 12, 97, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(98, 1, '2024-01-08', 2024, 1, 98, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(99, 1, '2024-02-08', 2024, 2, 99, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(100, 1, '2024-03-08', 2024, 3, 100, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(101, 1, '2024-04-08', 2024, 4, 101, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(102, 1, '2024-05-08', 2024, 5, 102, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(103, 1, '2024-06-08', 2024, 6, 103, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(104, 1, '2024-07-08', 2024, 7, 104, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(105, 1, '2024-08-08', 2024, 8, 105, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(106, 1, '2024-09-08', 2024, 9, 106, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(107, 1, '2024-10-08', 2024, 10, 107, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(108, 1, '2024-11-08', 2024, 11, 108, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(109, 1, '2024-12-08', 2024, 12, 109, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(110, 1, '2025-01-08', 2025, 1, 110, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(111, 1, '2025-02-08', 2025, 2, 111, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(112, 1, '2025-03-08', 2025, 3, 112, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(113, 1, '2025-04-08', 2025, 4, 113, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(114, 1, '2025-05-08', 2025, 5, 114, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(115, 1, '2025-06-08', 2025, 6, 115, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(116, 1, '2025-07-08', 2025, 7, 116, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(117, 1, '2025-08-08', 2025, 8, 117, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(118, 1, '2025-09-08', 2025, 9, 118, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(119, 1, '2025-10-08', 2025, 10, 119, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(120, 1, '2025-11-08', 2025, 11, 120, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(121, 1, '2025-12-08', 2025, 12, 121, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(122, 1, '2026-01-08', 2026, 1, 122, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(123, 1, '2026-02-08', 2026, 2, 123, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(124, 1, '2026-03-08', 2026, 3, 124, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(125, 1, '2026-04-08', 2026, 4, 125, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(126, 1, '2026-05-08', 2026, 5, 126, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(127, 1, '2026-06-08', 2026, 6, 127, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(128, 1, '2026-07-08', 2026, 7, 128, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(129, 1, '2026-08-08', 2026, 8, 129, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(130, 1, '2026-09-08', 2026, 9, 130, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(131, 1, '2026-10-08', 2026, 10, 131, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(132, 1, '2026-11-08', 2026, 11, 132, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(133, 1, '2026-12-08', 2026, 12, 133, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(134, 1, '2027-01-08', 2027, 1, 134, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(135, 1, '2027-02-08', 2027, 2, 135, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(136, 1, '2027-03-08', 2027, 3, 136, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(137, 1, '2027-04-08', 2027, 4, 137, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(138, 1, '2027-05-08', 2027, 5, 138, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(139, 1, '2027-06-08', 2027, 6, 139, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(140, 1, '2027-07-08', 2027, 7, 140, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(141, 1, '2027-08-08', 2027, 8, 141, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(142, 1, '2027-09-08', 2027, 9, 142, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(143, 1, '2027-10-08', 2027, 10, 143, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(144, 1, '2027-11-08', 2027, 11, 144, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(145, 1, '2027-12-08', 2027, 12, 145, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(146, 1, '2028-01-08', 2028, 1, 146, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(147, 1, '2028-02-08', 2028, 2, 147, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(148, 1, '2028-03-08', 2028, 3, 148, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(149, 1, '2028-04-08', 2028, 4, 149, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(150, 1, '2028-05-08', 2028, 5, 150, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(151, 1, '2028-06-08', 2028, 6, 151, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(152, 1, '2028-07-08', 2028, 7, 152, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(153, 1, '2028-08-08', 2028, 8, 153, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(154, 1, '2028-09-08', 2028, 9, 154, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(155, 1, '2028-10-08', 2028, 10, 155, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(156, 1, '2028-11-08', 2028, 11, 156, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(157, 1, '2028-12-08', 2028, 12, 157, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(158, 1, '2029-01-08', 2029, 1, 158, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(159, 1, '2029-02-08', 2029, 2, 159, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(160, 1, '2029-03-08', 2029, 3, 160, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(161, 1, '2029-04-08', 2029, 4, 161, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(162, 1, '2029-05-08', 2029, 5, 162, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(163, 1, '2029-06-08', 2029, 6, 163, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(164, 1, '2029-07-08', 2029, 7, 164, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(165, 1, '2029-08-08', 2029, 8, 165, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(166, 1, '2029-09-08', 2029, 9, 166, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(167, 1, '2029-10-08', 2029, 10, 167, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(168, 1, '2029-11-08', 2029, 11, 168, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(169, 1, '2029-12-08', 2029, 12, 169, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(170, 1, '2030-01-08', 2030, 1, 170, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(171, 1, '2030-02-08', 2030, 2, 171, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(172, 1, '2030-03-08', 2030, 3, 172, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(173, 1, '2030-04-08', 2030, 4, 173, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(174, 1, '2030-05-08', 2030, 5, 174, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(175, 1, '2030-06-08', 2030, 6, 175, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(176, 1, '2030-07-08', 2030, 7, 176, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(177, 1, '2030-08-08', 2030, 8, 177, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(178, 1, '2030-09-08', 2030, 9, 178, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(179, 1, '2030-10-08', 2030, 10, 179, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(180, 1, '2030-11-08', 2030, 11, 180, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(181, 1, '2030-12-08', 2030, 12, 181, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(182, 1, '2031-01-08', 2031, 1, 182, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(183, 1, '2031-02-08', 2031, 2, 183, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(184, 1, '2031-03-08', 2031, 3, 184, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(185, 1, '2031-04-08', 2031, 4, 185, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(186, 1, '2031-05-08', 2031, 5, 186, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(187, 1, '2031-06-08', 2031, 6, 187, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(188, 1, '2031-07-08', 2031, 7, 188, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(189, 1, '2031-08-08', 2031, 8, 189, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(190, 1, '2031-09-08', 2031, 9, 190, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(191, 1, '2031-10-08', 2031, 10, 191, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(192, 1, '2031-11-08', 2031, 11, 192, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(193, 1, '2031-12-08', 2031, 12, 193, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(194, 1, '2032-01-08', 2032, 1, 194, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(195, 1, '2032-02-08', 2032, 2, 195, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(196, 1, '2032-03-08', 2032, 3, 196, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(197, 1, '2032-04-08', 2032, 4, 197, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(198, 1, '2032-05-08', 2032, 5, 198, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:49', NULL, NULL, NULL, NULL),
(199, 1, '2032-06-08', 2032, 6, 199, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:50', NULL, NULL, NULL, NULL),
(200, 1, '2032-07-08', 2032, 7, 200, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:50', NULL, NULL, NULL, NULL),
(201, 1, '2032-08-08', 2032, 8, 201, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:50', NULL, NULL, NULL, NULL),
(202, 1, '2032-09-08', 2032, 9, 202, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:50', NULL, NULL, NULL, NULL),
(203, 1, '2032-10-08', 2032, 10, 203, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:50', NULL, NULL, NULL, NULL),
(204, 1, '2032-11-08', 2032, 11, 204, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:50', NULL, NULL, NULL, NULL),
(205, 1, '2032-12-08', 2032, 12, 205, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:50', NULL, NULL, NULL, NULL),
(206, 1, '2033-01-08', 2033, 1, 206, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:50', NULL, NULL, NULL, NULL),
(207, 1, '2033-02-08', 2033, 2, 207, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:50', NULL, NULL, NULL, NULL),
(208, 1, '2033-03-08', 2033, 3, 208, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:50', NULL, NULL, NULL, NULL),
(209, 1, '2033-04-08', 2033, 4, 209, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:50', NULL, NULL, NULL, NULL),
(210, 1, '2033-05-08', 2033, 5, 210, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:50', NULL, NULL, NULL, NULL),
(211, 1, '2033-06-08', 2033, 6, 211, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:50', NULL, NULL, NULL, NULL),
(212, 1, '2033-07-08', 2033, 7, 212, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:50', NULL, NULL, NULL, NULL),
(213, 1, '2033-08-08', 2033, 8, 213, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:50', NULL, NULL, NULL, NULL),
(214, 1, '2033-09-08', 2033, 9, 214, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:50', NULL, NULL, NULL, NULL),
(215, 1, '2033-10-08', 2033, 10, 215, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:50', NULL, NULL, NULL, NULL),
(216, 1, '2033-11-08', 2033, 11, 216, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:50', NULL, NULL, NULL, NULL),
(217, 1, '2033-12-08', 2033, 12, 217, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:50', NULL, NULL, NULL, NULL),
(218, 1, '2034-01-08', 2034, 1, 218, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:50', NULL, NULL, NULL, NULL),
(219, 1, '2034-02-08', 2034, 2, 219, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:50', NULL, NULL, NULL, NULL),
(220, 1, '2034-03-08', 2034, 3, 220, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:50', NULL, NULL, NULL, NULL),
(221, 1, '2034-04-08', 2034, 4, 221, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:50', NULL, NULL, NULL, NULL),
(222, 1, '2034-05-08', 2034, 5, 222, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:50', NULL, NULL, NULL, NULL),
(223, 1, '2034-06-08', 2034, 6, 223, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:50', NULL, NULL, NULL, NULL),
(224, 1, '2034-07-08', 2034, 7, 224, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:50', NULL, NULL, NULL, NULL),
(225, 1, '2034-08-08', 2034, 8, 225, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:50', NULL, NULL, NULL, NULL),
(226, 1, '2034-09-08', 2034, 9, 226, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:50', NULL, NULL, NULL, NULL),
(227, 1, '2034-10-08', 2034, 10, 227, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:50', NULL, NULL, NULL, NULL),
(228, 1, '2034-11-08', 2034, 11, 228, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:50', NULL, NULL, NULL, NULL),
(229, 1, '2034-12-08', 2034, 12, 229, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:50', NULL, NULL, NULL, NULL),
(230, 1, '2035-01-08', 2035, 1, 230, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:50', NULL, NULL, NULL, NULL),
(231, 1, '2035-02-08', 2035, 2, 231, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:50', NULL, NULL, NULL, NULL),
(232, 1, '2035-03-08', 2035, 3, 232, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:50', NULL, NULL, NULL, NULL),
(233, 1, '2035-04-08', 2035, 4, 233, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:50', NULL, NULL, NULL, NULL),
(234, 1, '2035-05-08', 2035, 5, 234, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:50', NULL, NULL, NULL, NULL),
(235, 1, '2035-06-08', 2035, 6, 235, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:50', NULL, NULL, NULL, NULL),
(236, 1, '2035-07-08', 2035, 7, 236, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:50', NULL, NULL, NULL, NULL),
(237, 1, '2035-08-08', 2035, 8, 237, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:50', NULL, NULL, NULL, NULL),
(238, 1, '2035-09-08', 2035, 9, 238, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:50', NULL, NULL, NULL, NULL),
(239, 1, '2035-10-08', 2035, 10, 239, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:50', NULL, NULL, NULL, NULL),
(240, 1, '2035-11-08', 2035, 11, 240, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:30:50', NULL, NULL, NULL, NULL),
(241, 2, '2015-12-18', 2015, 12, 1, '0.12500', '1354663.00', '937500.00', '417163.00', '89582837.00', '383363.00', 'active', 1, '2019-05-19 14:32:07', 1, '2019-06-18 21:49:19', NULL, NULL),
(242, 2, '2016-01-18', 2016, 1, 2, '0.12360', '1346712.00', '922703.20', '424009.00', '89158828.00', '375412.00', 'active', 1, '2019-05-19 14:32:07', 1, '2019-06-18 21:49:19', NULL, NULL),
(243, 2, '2016-02-18', 2016, 2, 3, '0.12150', '1335054.00', '902733.10', '432321.00', '88726507.00', '363754.00', 'active', 1, '2019-05-19 14:32:07', 1, '2019-06-18 21:49:19', NULL, NULL),
(244, 2, '2016-03-18', 2016, 3, 4, '0.11879', '1320256.00', '878320.70', '441935.00', '88284572.00', '348956.00', 'active', 1, '2019-05-19 14:32:07', 1, '2019-06-18 21:49:19', NULL, NULL),
(245, 2, '2016-04-18', 2016, 4, 5, '0.11750', '1313101.00', '864453.10', '448648.00', '87835924.00', '341801.00', 'active', 1, '2019-05-19 14:32:07', 1, '2019-06-18 21:49:19', NULL, NULL),
(246, 2, '2016-05-18', 2016, 5, 6, '0.11750', '1312764.00', '864453.10', '448311.00', '87387613.00', '341464.00', 'active', 1, '2019-05-19 14:32:07', 1, '2019-06-18 21:49:19', NULL, NULL),
(247, 2, '2016-06-18', 2016, 6, 7, '0.11625', '1305980.00', '846567.50', '459413.00', '86928200.00', '334680.00', 'active', 1, '2019-05-19 14:32:07', 1, '2019-06-18 21:49:19', NULL, NULL),
(248, 2, '2016-07-18', 2016, 7, 8, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(249, 2, '2016-08-18', 2016, 8, 9, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(250, 2, '2016-09-18', 2016, 9, 10, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(251, 2, '2016-10-18', 2016, 10, 11, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(252, 2, '2016-11-18', 2016, 11, 12, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(253, 2, '2016-12-18', 2016, 12, 13, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(254, 2, '2017-01-18', 2017, 1, 14, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(255, 2, '2017-02-18', 2017, 2, 15, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(256, 2, '2017-03-18', 2017, 3, 16, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(257, 2, '2017-04-18', 2017, 4, 17, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(258, 2, '2017-05-18', 2017, 5, 18, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(259, 2, '2017-06-18', 2017, 6, 19, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(260, 2, '2017-07-18', 2017, 7, 20, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(261, 2, '2017-08-18', 2017, 8, 21, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(262, 2, '2017-09-18', 2017, 9, 22, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(263, 2, '2017-10-18', 2017, 10, 23, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(264, 2, '2017-11-18', 2017, 11, 24, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(265, 2, '2017-12-18', 2017, 12, 25, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(266, 2, '2018-01-18', 2018, 1, 26, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(267, 2, '2018-02-18', 2018, 2, 27, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(268, 2, '2018-03-18', 2018, 3, 28, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(269, 2, '2018-04-18', 2018, 4, 29, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(270, 2, '2018-05-18', 2018, 5, 30, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(271, 2, '2018-06-18', 2018, 6, 31, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(272, 2, '2018-07-18', 2018, 7, 32, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(273, 2, '2018-08-18', 2018, 8, 33, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(274, 2, '2018-09-18', 2018, 9, 34, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(275, 2, '2018-10-18', 2018, 10, 35, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(276, 2, '2018-11-18', 2018, 11, 36, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(277, 2, '2018-12-18', 2018, 12, 37, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(278, 2, '2019-01-18', 2019, 1, 38, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(279, 2, '2019-02-18', 2019, 2, 39, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(280, 2, '2019-03-18', 2019, 3, 40, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(281, 2, '2019-04-18', 2019, 4, 41, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(282, 2, '2019-05-18', 2019, 5, 42, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(283, 2, '2019-06-18', 2019, 6, 43, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(284, 2, '2019-07-18', 2019, 7, 44, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(285, 2, '2019-08-18', 2019, 8, 45, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(286, 2, '2019-09-18', 2019, 9, 46, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(287, 2, '2019-10-18', 2019, 10, 47, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(288, 2, '2019-11-18', 2019, 11, 48, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(289, 2, '2019-12-18', 2019, 12, 49, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(290, 2, '2020-01-18', 2020, 1, 50, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(291, 2, '2020-02-18', 2020, 2, 51, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(292, 2, '2020-03-18', 2020, 3, 52, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(293, 2, '2020-04-18', 2020, 4, 53, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(294, 2, '2020-05-18', 2020, 5, 54, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(295, 2, '2020-06-18', 2020, 6, 55, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(296, 2, '2020-07-18', 2020, 7, 56, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(297, 2, '2020-08-18', 2020, 8, 57, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(298, 2, '2020-09-18', 2020, 9, 58, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(299, 2, '2020-10-18', 2020, 10, 59, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(300, 2, '2020-11-18', 2020, 11, 60, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(301, 2, '2020-12-18', 2020, 12, 61, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(302, 2, '2021-01-18', 2021, 1, 62, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(303, 2, '2021-02-18', 2021, 2, 63, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(304, 2, '2021-03-18', 2021, 3, 64, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(305, 2, '2021-04-18', 2021, 4, 65, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(306, 2, '2021-05-18', 2021, 5, 66, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(307, 2, '2021-06-18', 2021, 6, 67, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(308, 2, '2021-07-18', 2021, 7, 68, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(309, 2, '2021-08-18', 2021, 8, 69, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(310, 2, '2021-09-18', 2021, 9, 70, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(311, 2, '2021-10-18', 2021, 10, 71, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(312, 2, '2021-11-18', 2021, 11, 72, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(313, 2, '2021-12-18', 2021, 12, 73, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(314, 2, '2022-01-18', 2022, 1, 74, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(315, 2, '2022-02-18', 2022, 2, 75, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(316, 2, '2022-03-18', 2022, 3, 76, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(317, 2, '2022-04-18', 2022, 4, 77, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(318, 2, '2022-05-18', 2022, 5, 78, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(319, 2, '2022-06-18', 2022, 6, 79, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(320, 2, '2022-07-18', 2022, 7, 80, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(321, 2, '2022-08-18', 2022, 8, 81, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(322, 2, '2022-09-18', 2022, 9, 82, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(323, 2, '2022-10-18', 2022, 10, 83, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(324, 2, '2022-11-18', 2022, 11, 84, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(325, 2, '2022-12-18', 2022, 12, 85, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(326, 2, '2023-01-18', 2023, 1, 86, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(327, 2, '2023-02-18', 2023, 2, 87, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(328, 2, '2023-03-18', 2023, 3, 88, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(329, 2, '2023-04-18', 2023, 4, 89, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(330, 2, '2023-05-18', 2023, 5, 90, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:07', NULL, NULL, NULL, NULL),
(331, 2, '2023-06-18', 2023, 6, 91, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:08', NULL, NULL, NULL, NULL),
(332, 2, '2023-07-18', 2023, 7, 92, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:08', NULL, NULL, NULL, NULL),
(333, 2, '2023-08-18', 2023, 8, 93, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:08', NULL, NULL, NULL, NULL),
(334, 2, '2023-09-18', 2023, 9, 94, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:08', NULL, NULL, NULL, NULL),
(335, 2, '2023-10-18', 2023, 10, 95, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:08', NULL, NULL, NULL, NULL);
INSERT INTO `pesertaangsuran` (`id_pesertaangsuran`, `id_peserta`, `duedate`, `tahun`, `bulan`, `tenorke`, `bunga_persentase`, `angsuran`, `bunga_cicilan`, `pokok`, `outstanding`, `selisih`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(336, 2, '2023-11-18', 2023, 11, 96, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:08', NULL, NULL, NULL, NULL),
(337, 2, '2023-12-18', 2023, 12, 97, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:08', NULL, NULL, NULL, NULL),
(338, 2, '2024-01-18', 2024, 1, 98, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:08', NULL, NULL, NULL, NULL),
(339, 2, '2024-02-18', 2024, 2, 99, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:08', NULL, NULL, NULL, NULL),
(340, 2, '2024-03-18', 2024, 3, 100, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:08', NULL, NULL, NULL, NULL),
(341, 2, '2024-04-18', 2024, 4, 101, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:08', NULL, NULL, NULL, NULL),
(342, 2, '2024-05-18', 2024, 5, 102, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:08', NULL, NULL, NULL, NULL),
(343, 2, '2024-06-18', 2024, 6, 103, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:08', NULL, NULL, NULL, NULL),
(344, 2, '2024-07-18', 2024, 7, 104, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:08', NULL, NULL, NULL, NULL),
(345, 2, '2024-08-18', 2024, 8, 105, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:08', NULL, NULL, NULL, NULL),
(346, 2, '2024-09-18', 2024, 9, 106, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:08', NULL, NULL, NULL, NULL),
(347, 2, '2024-10-18', 2024, 10, 107, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:08', NULL, NULL, NULL, NULL),
(348, 2, '2024-11-18', 2024, 11, 108, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:08', NULL, NULL, NULL, NULL),
(349, 2, '2024-12-18', 2024, 12, 109, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:08', NULL, NULL, NULL, NULL),
(350, 2, '2025-01-18', 2025, 1, 110, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:08', NULL, NULL, NULL, NULL),
(351, 2, '2025-02-18', 2025, 2, 111, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:08', NULL, NULL, NULL, NULL),
(352, 2, '2025-03-18', 2025, 3, 112, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:08', NULL, NULL, NULL, NULL),
(353, 2, '2025-04-18', 2025, 4, 113, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:08', NULL, NULL, NULL, NULL),
(354, 2, '2025-05-18', 2025, 5, 114, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:08', NULL, NULL, NULL, NULL),
(355, 2, '2025-06-18', 2025, 6, 115, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:08', NULL, NULL, NULL, NULL),
(356, 2, '2025-07-18', 2025, 7, 116, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:08', NULL, NULL, NULL, NULL),
(357, 2, '2025-08-18', 2025, 8, 117, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:08', NULL, NULL, NULL, NULL),
(358, 2, '2025-09-18', 2025, 9, 118, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:08', NULL, NULL, NULL, NULL),
(359, 2, '2025-10-18', 2025, 10, 119, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:08', NULL, NULL, NULL, NULL),
(360, 2, '2025-11-18', 2025, 11, 120, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:08', NULL, NULL, NULL, NULL),
(361, 3, '2015-12-17', 2015, 12, 1, '0.12500', '1432256.00', '1187500.00', '244756.00', '113755244.00', '516956.00', 'active', 1, '2019-05-19 14:32:14', 1, '2019-06-18 21:49:19', NULL, NULL),
(362, 3, '2016-01-17', 2016, 1, 2, '0.12360', '1421611.00', '1171679.00', '249932.00', '113505312.00', '506311.00', 'active', 1, '2019-05-19 14:32:14', 1, '2019-06-18 21:49:19', NULL, NULL),
(363, 3, '2016-02-17', 2016, 2, 3, '0.12150', '1405834.00', '1149241.30', '256593.00', '113248719.00', '490534.00', 'active', 1, '2019-05-19 14:32:14', 1, '2019-06-18 21:49:19', NULL, NULL),
(364, 3, '2016-03-17', 2016, 3, 4, '0.11879', '1385691.00', '1121070.80', '264620.00', '112984099.00', '470391.00', 'active', 1, '2019-05-19 14:32:14', 1, '2019-06-18 21:49:19', NULL, NULL),
(365, 3, '2016-04-17', 2016, 4, 5, '0.11750', '1376086.00', '1106302.60', '269783.00', '112714316.00', '460786.00', 'active', 1, '2019-05-19 14:32:14', 1, '2019-06-18 21:49:19', NULL, NULL),
(366, 3, '2016-05-17', 2016, 5, 6, '0.11750', '1375921.00', '1106302.60', '269618.00', '112444698.00', '460621.00', 'active', 1, '2019-05-19 14:32:14', 1, '2019-06-18 21:49:19', NULL, NULL),
(367, 3, '2016-06-17', 2016, 6, 7, '0.11625', '1366730.00', '1089308.00', '277422.00', '112167276.00', '451430.00', 'active', 1, '2019-05-19 14:32:14', 1, '2019-06-18 21:49:19', NULL, NULL),
(368, 3, '2016-07-17', 2016, 7, 8, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:14', NULL, NULL, NULL, NULL),
(369, 3, '2016-08-17', 2016, 8, 9, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:14', NULL, NULL, NULL, NULL),
(370, 3, '2016-09-17', 2016, 9, 10, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:14', NULL, NULL, NULL, NULL),
(371, 3, '2016-10-17', 2016, 10, 11, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:14', NULL, NULL, NULL, NULL),
(372, 3, '2016-11-17', 2016, 11, 12, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:14', NULL, NULL, NULL, NULL),
(373, 3, '2016-12-17', 2016, 12, 13, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:14', NULL, NULL, NULL, NULL),
(374, 3, '2017-01-17', 2017, 1, 14, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:14', NULL, NULL, NULL, NULL),
(375, 3, '2017-02-17', 2017, 2, 15, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:14', NULL, NULL, NULL, NULL),
(376, 3, '2017-03-17', 2017, 3, 16, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:14', NULL, NULL, NULL, NULL),
(377, 3, '2017-04-17', 2017, 4, 17, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:14', NULL, NULL, NULL, NULL),
(378, 3, '2017-05-17', 2017, 5, 18, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:14', NULL, NULL, NULL, NULL),
(379, 3, '2017-06-17', 2017, 6, 19, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:14', NULL, NULL, NULL, NULL),
(380, 3, '2017-07-17', 2017, 7, 20, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:14', NULL, NULL, NULL, NULL),
(381, 3, '2017-08-17', 2017, 8, 21, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:14', NULL, NULL, NULL, NULL),
(382, 3, '2017-09-17', 2017, 9, 22, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:14', NULL, NULL, NULL, NULL),
(383, 3, '2017-10-17', 2017, 10, 23, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:14', NULL, NULL, NULL, NULL),
(384, 3, '2017-11-17', 2017, 11, 24, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:14', NULL, NULL, NULL, NULL),
(385, 3, '2017-12-17', 2017, 12, 25, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:14', NULL, NULL, NULL, NULL),
(386, 3, '2018-01-17', 2018, 1, 26, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:14', NULL, NULL, NULL, NULL),
(387, 3, '2018-02-17', 2018, 2, 27, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:14', NULL, NULL, NULL, NULL),
(388, 3, '2018-03-17', 2018, 3, 28, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:14', NULL, NULL, NULL, NULL),
(389, 3, '2018-04-17', 2018, 4, 29, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:14', NULL, NULL, NULL, NULL),
(390, 3, '2018-05-17', 2018, 5, 30, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:14', NULL, NULL, NULL, NULL),
(391, 3, '2018-06-17', 2018, 6, 31, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:14', NULL, NULL, NULL, NULL),
(392, 3, '2018-07-17', 2018, 7, 32, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:14', NULL, NULL, NULL, NULL),
(393, 3, '2018-08-17', 2018, 8, 33, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:14', NULL, NULL, NULL, NULL),
(394, 3, '2018-09-17', 2018, 9, 34, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:14', NULL, NULL, NULL, NULL),
(395, 3, '2018-10-17', 2018, 10, 35, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:14', NULL, NULL, NULL, NULL),
(396, 3, '2018-11-17', 2018, 11, 36, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:14', NULL, NULL, NULL, NULL),
(397, 3, '2018-12-17', 2018, 12, 37, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:14', NULL, NULL, NULL, NULL),
(398, 3, '2019-01-17', 2019, 1, 38, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:14', NULL, NULL, NULL, NULL),
(399, 3, '2019-02-17', 2019, 2, 39, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:14', NULL, NULL, NULL, NULL),
(400, 3, '2019-03-17', 2019, 3, 40, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:14', NULL, NULL, NULL, NULL),
(401, 3, '2019-04-17', 2019, 4, 41, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:14', NULL, NULL, NULL, NULL),
(402, 3, '2019-05-17', 2019, 5, 42, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:14', NULL, NULL, NULL, NULL),
(403, 3, '2019-06-17', 2019, 6, 43, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:14', NULL, NULL, NULL, NULL),
(404, 3, '2019-07-17', 2019, 7, 44, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:14', NULL, NULL, NULL, NULL),
(405, 3, '2019-08-17', 2019, 8, 45, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:14', NULL, NULL, NULL, NULL),
(406, 3, '2019-09-17', 2019, 9, 46, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:14', NULL, NULL, NULL, NULL),
(407, 3, '2019-10-17', 2019, 10, 47, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:14', NULL, NULL, NULL, NULL),
(408, 3, '2019-11-17', 2019, 11, 48, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:14', NULL, NULL, NULL, NULL),
(409, 3, '2019-12-17', 2019, 12, 49, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:14', NULL, NULL, NULL, NULL),
(410, 3, '2020-01-17', 2020, 1, 50, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:14', NULL, NULL, NULL, NULL),
(411, 3, '2020-02-17', 2020, 2, 51, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:14', NULL, NULL, NULL, NULL),
(412, 3, '2020-03-17', 2020, 3, 52, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:14', NULL, NULL, NULL, NULL),
(413, 3, '2020-04-17', 2020, 4, 53, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:14', NULL, NULL, NULL, NULL),
(414, 3, '2020-05-17', 2020, 5, 54, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:14', NULL, NULL, NULL, NULL),
(415, 3, '2020-06-17', 2020, 6, 55, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:14', NULL, NULL, NULL, NULL),
(416, 3, '2020-07-17', 2020, 7, 56, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:14', NULL, NULL, NULL, NULL),
(417, 3, '2020-08-17', 2020, 8, 57, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:14', NULL, NULL, NULL, NULL),
(418, 3, '2020-09-17', 2020, 9, 58, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:14', NULL, NULL, NULL, NULL),
(419, 3, '2020-10-17', 2020, 10, 59, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:14', NULL, NULL, NULL, NULL),
(420, 3, '2020-11-17', 2020, 11, 60, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:14', NULL, NULL, NULL, NULL),
(421, 3, '2020-12-17', 2020, 12, 61, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:14', NULL, NULL, NULL, NULL),
(422, 3, '2021-01-17', 2021, 1, 62, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:14', NULL, NULL, NULL, NULL),
(423, 3, '2021-02-17', 2021, 2, 63, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(424, 3, '2021-03-17', 2021, 3, 64, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(425, 3, '2021-04-17', 2021, 4, 65, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(426, 3, '2021-05-17', 2021, 5, 66, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(427, 3, '2021-06-17', 2021, 6, 67, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(428, 3, '2021-07-17', 2021, 7, 68, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(429, 3, '2021-08-17', 2021, 8, 69, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(430, 3, '2021-09-17', 2021, 9, 70, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(431, 3, '2021-10-17', 2021, 10, 71, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(432, 3, '2021-11-17', 2021, 11, 72, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(433, 3, '2021-12-17', 2021, 12, 73, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(434, 3, '2022-01-17', 2022, 1, 74, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(435, 3, '2022-02-17', 2022, 2, 75, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(436, 3, '2022-03-17', 2022, 3, 76, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(437, 3, '2022-04-17', 2022, 4, 77, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(438, 3, '2022-05-17', 2022, 5, 78, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(439, 3, '2022-06-17', 2022, 6, 79, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(440, 3, '2022-07-17', 2022, 7, 80, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(441, 3, '2022-08-17', 2022, 8, 81, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(442, 3, '2022-09-17', 2022, 9, 82, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(443, 3, '2022-10-17', 2022, 10, 83, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(444, 3, '2022-11-17', 2022, 11, 84, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(445, 3, '2022-12-17', 2022, 12, 85, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(446, 3, '2023-01-17', 2023, 1, 86, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(447, 3, '2023-02-17', 2023, 2, 87, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(448, 3, '2023-03-17', 2023, 3, 88, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(449, 3, '2023-04-17', 2023, 4, 89, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(450, 3, '2023-05-17', 2023, 5, 90, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(451, 3, '2023-06-17', 2023, 6, 91, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(452, 3, '2023-07-17', 2023, 7, 92, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(453, 3, '2023-08-17', 2023, 8, 93, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(454, 3, '2023-09-17', 2023, 9, 94, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(455, 3, '2023-10-17', 2023, 10, 95, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(456, 3, '2023-11-17', 2023, 11, 96, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(457, 3, '2023-12-17', 2023, 12, 97, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(458, 3, '2024-01-17', 2024, 1, 98, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(459, 3, '2024-02-17', 2024, 2, 99, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(460, 3, '2024-03-17', 2024, 3, 100, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(461, 3, '2024-04-17', 2024, 4, 101, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(462, 3, '2024-05-17', 2024, 5, 102, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(463, 3, '2024-06-17', 2024, 6, 103, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(464, 3, '2024-07-17', 2024, 7, 104, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(465, 3, '2024-08-17', 2024, 8, 105, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(466, 3, '2024-09-17', 2024, 9, 106, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(467, 3, '2024-10-17', 2024, 10, 107, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(468, 3, '2024-11-17', 2024, 11, 108, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(469, 3, '2024-12-17', 2024, 12, 109, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(470, 3, '2025-01-17', 2025, 1, 110, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(471, 3, '2025-02-17', 2025, 2, 111, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(472, 3, '2025-03-17', 2025, 3, 112, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(473, 3, '2025-04-17', 2025, 4, 113, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(474, 3, '2025-05-17', 2025, 5, 114, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(475, 3, '2025-06-17', 2025, 6, 115, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(476, 3, '2025-07-17', 2025, 7, 116, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(477, 3, '2025-08-17', 2025, 8, 117, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(478, 3, '2025-09-17', 2025, 9, 118, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(479, 3, '2025-10-17', 2025, 10, 119, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(480, 3, '2025-11-17', 2025, 11, 120, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(481, 3, '2025-12-17', 2025, 12, 121, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(482, 3, '2026-01-17', 2026, 1, 122, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(483, 3, '2026-02-17', 2026, 2, 123, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(484, 3, '2026-03-17', 2026, 3, 124, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(485, 3, '2026-04-17', 2026, 4, 125, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(486, 3, '2026-05-17', 2026, 5, 126, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(487, 3, '2026-06-17', 2026, 6, 127, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(488, 3, '2026-07-17', 2026, 7, 128, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(489, 3, '2026-08-17', 2026, 8, 129, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(490, 3, '2026-09-17', 2026, 9, 130, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(491, 3, '2026-10-17', 2026, 10, 131, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(492, 3, '2026-11-17', 2026, 11, 132, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(493, 3, '2026-12-17', 2026, 12, 133, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(494, 3, '2027-01-17', 2027, 1, 134, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(495, 3, '2027-02-17', 2027, 2, 135, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(496, 3, '2027-03-17', 2027, 3, 136, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(497, 3, '2027-04-17', 2027, 4, 137, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(498, 3, '2027-05-17', 2027, 5, 138, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(499, 3, '2027-06-17', 2027, 6, 139, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(500, 3, '2027-07-17', 2027, 7, 140, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(501, 3, '2027-08-17', 2027, 8, 141, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(502, 3, '2027-09-17', 2027, 9, 142, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(503, 3, '2027-10-17', 2027, 10, 143, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(504, 3, '2027-11-17', 2027, 11, 144, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(505, 3, '2027-12-17', 2027, 12, 145, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(506, 3, '2028-01-17', 2028, 1, 146, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(507, 3, '2028-02-17', 2028, 2, 147, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(508, 3, '2028-03-17', 2028, 3, 148, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(509, 3, '2028-04-17', 2028, 4, 149, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(510, 3, '2028-05-17', 2028, 5, 150, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(511, 3, '2028-06-17', 2028, 6, 151, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(512, 3, '2028-07-17', 2028, 7, 152, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(513, 3, '2028-08-17', 2028, 8, 153, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(514, 3, '2028-09-17', 2028, 9, 154, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(515, 3, '2028-10-17', 2028, 10, 155, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(516, 3, '2028-11-17', 2028, 11, 156, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(517, 3, '2028-12-17', 2028, 12, 157, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(518, 3, '2029-01-17', 2029, 1, 158, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(519, 3, '2029-02-17', 2029, 2, 159, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(520, 3, '2029-03-17', 2029, 3, 160, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(521, 3, '2029-04-17', 2029, 4, 161, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(522, 3, '2029-05-17', 2029, 5, 162, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(523, 3, '2029-06-17', 2029, 6, 163, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(524, 3, '2029-07-17', 2029, 7, 164, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(525, 3, '2029-08-17', 2029, 8, 165, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(526, 3, '2029-09-17', 2029, 9, 166, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(527, 3, '2029-10-17', 2029, 10, 167, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(528, 3, '2029-11-17', 2029, 11, 168, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(529, 3, '2029-12-17', 2029, 12, 169, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(530, 3, '2030-01-17', 2030, 1, 170, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(531, 3, '2030-02-17', 2030, 2, 171, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(532, 3, '2030-03-17', 2030, 3, 172, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(533, 3, '2030-04-17', 2030, 4, 173, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(534, 3, '2030-05-17', 2030, 5, 174, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(535, 3, '2030-06-17', 2030, 6, 175, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(536, 3, '2030-07-17', 2030, 7, 176, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(537, 3, '2030-08-17', 2030, 8, 177, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(538, 3, '2030-09-17', 2030, 9, 178, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(539, 3, '2030-10-17', 2030, 10, 179, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(540, 3, '2030-11-17', 2030, 11, 180, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:15', NULL, NULL, NULL, NULL),
(541, 4, '2015-12-11', 2015, 12, 1, '0.12500', '1432256.00', '1187500.00', '244756.00', '113755244.00', '516956.00', 'active', 1, '2019-05-19 14:32:20', 1, '2019-06-18 21:49:19', NULL, NULL),
(542, 4, '2016-01-11', 2016, 1, 2, '0.12360', '1421611.00', '1171679.00', '249932.00', '113505312.00', '506311.00', 'active', 1, '2019-05-19 14:32:20', 1, '2019-06-18 21:49:19', NULL, NULL),
(543, 4, '2016-02-11', 2016, 2, 3, '0.12150', '1405834.00', '1149241.30', '256593.00', '113248719.00', '490534.00', 'active', 1, '2019-05-19 14:32:20', 1, '2019-06-18 21:49:19', NULL, NULL),
(544, 4, '2016-03-11', 2016, 3, 4, '0.11879', '1385691.00', '1121070.80', '264620.00', '112984099.00', '470391.00', 'active', 1, '2019-05-19 14:32:20', 1, '2019-06-18 21:49:19', NULL, NULL),
(545, 4, '2016-04-11', 2016, 4, 5, '0.11750', '1376086.00', '1106302.60', '269783.00', '112714316.00', '460786.00', 'active', 1, '2019-05-19 14:32:20', 1, '2019-06-18 21:49:19', NULL, NULL),
(546, 4, '2016-05-11', 2016, 5, 6, '0.11750', '1375921.00', '1106302.60', '269618.00', '112444698.00', '460621.00', 'active', 1, '2019-05-19 14:32:20', 1, '2019-06-18 21:49:19', NULL, NULL),
(547, 4, '2016-06-11', 2016, 6, 7, '0.11625', '1366730.00', '1089308.00', '277422.00', '112167276.00', '451430.00', 'active', 1, '2019-05-19 14:32:20', 1, '2019-06-18 21:49:19', NULL, NULL),
(548, 4, '2016-07-11', 2016, 7, 8, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:20', NULL, NULL, NULL, NULL),
(549, 4, '2016-08-11', 2016, 8, 9, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:20', NULL, NULL, NULL, NULL),
(550, 4, '2016-09-11', 2016, 9, 10, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:20', NULL, NULL, NULL, NULL),
(551, 4, '2016-10-11', 2016, 10, 11, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:20', NULL, NULL, NULL, NULL),
(552, 4, '2016-11-11', 2016, 11, 12, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:20', NULL, NULL, NULL, NULL),
(553, 4, '2016-12-11', 2016, 12, 13, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:20', NULL, NULL, NULL, NULL),
(554, 4, '2017-01-11', 2017, 1, 14, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:20', NULL, NULL, NULL, NULL),
(555, 4, '2017-02-11', 2017, 2, 15, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:20', NULL, NULL, NULL, NULL),
(556, 4, '2017-03-11', 2017, 3, 16, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:20', NULL, NULL, NULL, NULL),
(557, 4, '2017-04-11', 2017, 4, 17, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:20', NULL, NULL, NULL, NULL),
(558, 4, '2017-05-11', 2017, 5, 18, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:20', NULL, NULL, NULL, NULL),
(559, 4, '2017-06-11', 2017, 6, 19, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:20', NULL, NULL, NULL, NULL),
(560, 4, '2017-07-11', 2017, 7, 20, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:20', NULL, NULL, NULL, NULL),
(561, 4, '2017-08-11', 2017, 8, 21, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:20', NULL, NULL, NULL, NULL),
(562, 4, '2017-09-11', 2017, 9, 22, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:20', NULL, NULL, NULL, NULL),
(563, 4, '2017-10-11', 2017, 10, 23, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:20', NULL, NULL, NULL, NULL),
(564, 4, '2017-11-11', 2017, 11, 24, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:20', NULL, NULL, NULL, NULL),
(565, 4, '2017-12-11', 2017, 12, 25, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:20', NULL, NULL, NULL, NULL),
(566, 4, '2018-01-11', 2018, 1, 26, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:20', NULL, NULL, NULL, NULL),
(567, 4, '2018-02-11', 2018, 2, 27, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:20', NULL, NULL, NULL, NULL),
(568, 4, '2018-03-11', 2018, 3, 28, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:20', NULL, NULL, NULL, NULL),
(569, 4, '2018-04-11', 2018, 4, 29, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:20', NULL, NULL, NULL, NULL),
(570, 4, '2018-05-11', 2018, 5, 30, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:20', NULL, NULL, NULL, NULL),
(571, 4, '2018-06-11', 2018, 6, 31, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:20', NULL, NULL, NULL, NULL),
(572, 4, '2018-07-11', 2018, 7, 32, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:20', NULL, NULL, NULL, NULL),
(573, 4, '2018-08-11', 2018, 8, 33, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(574, 4, '2018-09-11', 2018, 9, 34, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(575, 4, '2018-10-11', 2018, 10, 35, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(576, 4, '2018-11-11', 2018, 11, 36, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(577, 4, '2018-12-11', 2018, 12, 37, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(578, 4, '2019-01-11', 2019, 1, 38, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(579, 4, '2019-02-11', 2019, 2, 39, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(580, 4, '2019-03-11', 2019, 3, 40, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(581, 4, '2019-04-11', 2019, 4, 41, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(582, 4, '2019-05-11', 2019, 5, 42, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(583, 4, '2019-06-11', 2019, 6, 43, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(584, 4, '2019-07-11', 2019, 7, 44, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(585, 4, '2019-08-11', 2019, 8, 45, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(586, 4, '2019-09-11', 2019, 9, 46, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(587, 4, '2019-10-11', 2019, 10, 47, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(588, 4, '2019-11-11', 2019, 11, 48, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(589, 4, '2019-12-11', 2019, 12, 49, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(590, 4, '2020-01-11', 2020, 1, 50, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(591, 4, '2020-02-11', 2020, 2, 51, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(592, 4, '2020-03-11', 2020, 3, 52, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(593, 4, '2020-04-11', 2020, 4, 53, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(594, 4, '2020-05-11', 2020, 5, 54, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(595, 4, '2020-06-11', 2020, 6, 55, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(596, 4, '2020-07-11', 2020, 7, 56, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(597, 4, '2020-08-11', 2020, 8, 57, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(598, 4, '2020-09-11', 2020, 9, 58, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(599, 4, '2020-10-11', 2020, 10, 59, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(600, 4, '2020-11-11', 2020, 11, 60, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(601, 4, '2020-12-11', 2020, 12, 61, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(602, 4, '2021-01-11', 2021, 1, 62, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(603, 4, '2021-02-11', 2021, 2, 63, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(604, 4, '2021-03-11', 2021, 3, 64, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(605, 4, '2021-04-11', 2021, 4, 65, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(606, 4, '2021-05-11', 2021, 5, 66, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(607, 4, '2021-06-11', 2021, 6, 67, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(608, 4, '2021-07-11', 2021, 7, 68, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(609, 4, '2021-08-11', 2021, 8, 69, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(610, 4, '2021-09-11', 2021, 9, 70, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(611, 4, '2021-10-11', 2021, 10, 71, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(612, 4, '2021-11-11', 2021, 11, 72, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(613, 4, '2021-12-11', 2021, 12, 73, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(614, 4, '2022-01-11', 2022, 1, 74, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(615, 4, '2022-02-11', 2022, 2, 75, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(616, 4, '2022-03-11', 2022, 3, 76, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(617, 4, '2022-04-11', 2022, 4, 77, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(618, 4, '2022-05-11', 2022, 5, 78, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(619, 4, '2022-06-11', 2022, 6, 79, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(620, 4, '2022-07-11', 2022, 7, 80, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(621, 4, '2022-08-11', 2022, 8, 81, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(622, 4, '2022-09-11', 2022, 9, 82, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(623, 4, '2022-10-11', 2022, 10, 83, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(624, 4, '2022-11-11', 2022, 11, 84, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(625, 4, '2022-12-11', 2022, 12, 85, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(626, 4, '2023-01-11', 2023, 1, 86, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(627, 4, '2023-02-11', 2023, 2, 87, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(628, 4, '2023-03-11', 2023, 3, 88, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(629, 4, '2023-04-11', 2023, 4, 89, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(630, 4, '2023-05-11', 2023, 5, 90, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(631, 4, '2023-06-11', 2023, 6, 91, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(632, 4, '2023-07-11', 2023, 7, 92, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(633, 4, '2023-08-11', 2023, 8, 93, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(634, 4, '2023-09-11', 2023, 9, 94, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(635, 4, '2023-10-11', 2023, 10, 95, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(636, 4, '2023-11-11', 2023, 11, 96, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(637, 4, '2023-12-11', 2023, 12, 97, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(638, 4, '2024-01-11', 2024, 1, 98, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(639, 4, '2024-02-11', 2024, 2, 99, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(640, 4, '2024-03-11', 2024, 3, 100, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(641, 4, '2024-04-11', 2024, 4, 101, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(642, 4, '2024-05-11', 2024, 5, 102, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(643, 4, '2024-06-11', 2024, 6, 103, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(644, 4, '2024-07-11', 2024, 7, 104, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(645, 4, '2024-08-11', 2024, 8, 105, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(646, 4, '2024-09-11', 2024, 9, 106, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(647, 4, '2024-10-11', 2024, 10, 107, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(648, 4, '2024-11-11', 2024, 11, 108, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(649, 4, '2024-12-11', 2024, 12, 109, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(650, 4, '2025-01-11', 2025, 1, 110, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(651, 4, '2025-02-11', 2025, 2, 111, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(652, 4, '2025-03-11', 2025, 3, 112, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(653, 4, '2025-04-11', 2025, 4, 113, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(654, 4, '2025-05-11', 2025, 5, 114, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(655, 4, '2025-06-11', 2025, 6, 115, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(656, 4, '2025-07-11', 2025, 7, 116, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(657, 4, '2025-08-11', 2025, 8, 117, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(658, 4, '2025-09-11', 2025, 9, 118, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(659, 4, '2025-10-11', 2025, 10, 119, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(660, 4, '2025-11-11', 2025, 11, 120, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(661, 4, '2025-12-11', 2025, 12, 121, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(662, 4, '2026-01-11', 2026, 1, 122, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(663, 4, '2026-02-11', 2026, 2, 123, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(664, 4, '2026-03-11', 2026, 3, 124, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(665, 4, '2026-04-11', 2026, 4, 125, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(666, 4, '2026-05-11', 2026, 5, 126, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(667, 4, '2026-06-11', 2026, 6, 127, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(668, 4, '2026-07-11', 2026, 7, 128, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(669, 4, '2026-08-11', 2026, 8, 129, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL);
INSERT INTO `pesertaangsuran` (`id_pesertaangsuran`, `id_peserta`, `duedate`, `tahun`, `bulan`, `tenorke`, `bunga_persentase`, `angsuran`, `bunga_cicilan`, `pokok`, `outstanding`, `selisih`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(670, 4, '2026-09-11', 2026, 9, 130, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(671, 4, '2026-10-11', 2026, 10, 131, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(672, 4, '2026-11-11', 2026, 11, 132, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(673, 4, '2026-12-11', 2026, 12, 133, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(674, 4, '2027-01-11', 2027, 1, 134, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(675, 4, '2027-02-11', 2027, 2, 135, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(676, 4, '2027-03-11', 2027, 3, 136, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(677, 4, '2027-04-11', 2027, 4, 137, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(678, 4, '2027-05-11', 2027, 5, 138, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(679, 4, '2027-06-11', 2027, 6, 139, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(680, 4, '2027-07-11', 2027, 7, 140, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(681, 4, '2027-08-11', 2027, 8, 141, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(682, 4, '2027-09-11', 2027, 9, 142, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(683, 4, '2027-10-11', 2027, 10, 143, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(684, 4, '2027-11-11', 2027, 11, 144, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(685, 4, '2027-12-11', 2027, 12, 145, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(686, 4, '2028-01-11', 2028, 1, 146, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:21', NULL, NULL, NULL, NULL),
(687, 4, '2028-02-11', 2028, 2, 147, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:22', NULL, NULL, NULL, NULL),
(688, 4, '2028-03-11', 2028, 3, 148, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:22', NULL, NULL, NULL, NULL),
(689, 4, '2028-04-11', 2028, 4, 149, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:22', NULL, NULL, NULL, NULL),
(690, 4, '2028-05-11', 2028, 5, 150, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:22', NULL, NULL, NULL, NULL),
(691, 4, '2028-06-11', 2028, 6, 151, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:22', NULL, NULL, NULL, NULL),
(692, 4, '2028-07-11', 2028, 7, 152, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:22', NULL, NULL, NULL, NULL),
(693, 4, '2028-08-11', 2028, 8, 153, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:22', NULL, NULL, NULL, NULL),
(694, 4, '2028-09-11', 2028, 9, 154, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:22', NULL, NULL, NULL, NULL),
(695, 4, '2028-10-11', 2028, 10, 155, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:22', NULL, NULL, NULL, NULL),
(696, 4, '2028-11-11', 2028, 11, 156, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:22', NULL, NULL, NULL, NULL),
(697, 4, '2028-12-11', 2028, 12, 157, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:22', NULL, NULL, NULL, NULL),
(698, 4, '2029-01-11', 2029, 1, 158, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:22', NULL, NULL, NULL, NULL),
(699, 4, '2029-02-11', 2029, 2, 159, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:22', NULL, NULL, NULL, NULL),
(700, 4, '2029-03-11', 2029, 3, 160, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:22', NULL, NULL, NULL, NULL),
(701, 4, '2029-04-11', 2029, 4, 161, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:22', NULL, NULL, NULL, NULL),
(702, 4, '2029-05-11', 2029, 5, 162, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:22', NULL, NULL, NULL, NULL),
(703, 4, '2029-06-11', 2029, 6, 163, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:22', NULL, NULL, NULL, NULL),
(704, 4, '2029-07-11', 2029, 7, 164, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:22', NULL, NULL, NULL, NULL),
(705, 4, '2029-08-11', 2029, 8, 165, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:22', NULL, NULL, NULL, NULL),
(706, 4, '2029-09-11', 2029, 9, 166, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:22', NULL, NULL, NULL, NULL),
(707, 4, '2029-10-11', 2029, 10, 167, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:22', NULL, NULL, NULL, NULL),
(708, 4, '2029-11-11', 2029, 11, 168, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:22', NULL, NULL, NULL, NULL),
(709, 4, '2029-12-11', 2029, 12, 169, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:22', NULL, NULL, NULL, NULL),
(710, 4, '2030-01-11', 2030, 1, 170, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:22', NULL, NULL, NULL, NULL),
(711, 4, '2030-02-11', 2030, 2, 171, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:22', NULL, NULL, NULL, NULL),
(712, 4, '2030-03-11', 2030, 3, 172, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:22', NULL, NULL, NULL, NULL),
(713, 4, '2030-04-11', 2030, 4, 173, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:22', NULL, NULL, NULL, NULL),
(714, 4, '2030-05-11', 2030, 5, 174, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:22', NULL, NULL, NULL, NULL),
(715, 4, '2030-06-11', 2030, 6, 175, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:22', NULL, NULL, NULL, NULL),
(716, 4, '2030-07-11', 2030, 7, 176, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:22', NULL, NULL, NULL, NULL),
(717, 4, '2030-08-11', 2030, 8, 177, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:22', NULL, NULL, NULL, NULL),
(718, 4, '2030-09-11', 2030, 9, 178, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:22', NULL, NULL, NULL, NULL),
(719, 4, '2030-10-11', 2030, 10, 179, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:22', NULL, NULL, NULL, NULL),
(720, 4, '2030-11-11', 2030, 11, 180, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:22', NULL, NULL, NULL, NULL),
(721, 5, '2015-12-08', 2015, 12, 1, '0.12500', '1243801.00', '1031250.00', '212551.00', '98787449.00', '448901.00', 'active', 1, '2019-05-19 14:32:28', 1, '2019-06-18 21:49:19', NULL, NULL),
(722, 5, '2016-01-08', 2016, 1, 2, '0.12360', '1234557.00', '1017510.70', '217046.00', '98570403.00', '439657.00', 'active', 1, '2019-05-19 14:32:28', 1, '2019-06-18 21:49:19', NULL, NULL),
(723, 5, '2016-02-08', 2016, 2, 3, '0.12150', '1220856.00', '998025.30', '222831.00', '98347572.00', '425956.00', 'active', 1, '2019-05-19 14:32:28', 1, '2019-06-18 21:49:20', NULL, NULL),
(724, 5, '2016-03-08', 2016, 3, 4, '0.11879', '1203363.00', '973561.50', '229802.00', '98117770.00', '408463.00', 'active', 1, '2019-05-19 14:32:28', 1, '2019-06-18 21:49:20', NULL, NULL),
(725, 5, '2016-04-08', 2016, 4, 5, '0.11750', '1195022.00', '960736.50', '234286.00', '97883484.00', '400122.00', 'active', 1, '2019-05-19 14:32:28', 1, '2019-06-18 21:49:20', NULL, NULL),
(726, 5, '2016-05-08', 2016, 5, 6, '0.11750', '1194879.00', '960736.50', '234143.00', '97649341.00', '399979.00', 'active', 1, '2019-05-19 14:32:28', 1, '2019-06-18 21:49:20', NULL, NULL),
(727, 5, '2016-06-08', 2016, 6, 7, '0.11625', '1186897.00', '945978.00', '240919.00', '97408422.00', '391997.00', 'active', 1, '2019-05-19 14:32:28', 1, '2019-06-18 21:49:20', NULL, NULL),
(728, 5, '2016-07-08', 2016, 7, 8, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(729, 5, '2016-08-08', 2016, 8, 9, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(730, 5, '2016-09-08', 2016, 9, 10, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(731, 5, '2016-10-08', 2016, 10, 11, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(732, 5, '2016-11-08', 2016, 11, 12, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(733, 5, '2016-12-08', 2016, 12, 13, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(734, 5, '2017-01-08', 2017, 1, 14, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(735, 5, '2017-02-08', 2017, 2, 15, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(736, 5, '2017-03-08', 2017, 3, 16, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(737, 5, '2017-04-08', 2017, 4, 17, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(738, 5, '2017-05-08', 2017, 5, 18, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(739, 5, '2017-06-08', 2017, 6, 19, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(740, 5, '2017-07-08', 2017, 7, 20, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(741, 5, '2017-08-08', 2017, 8, 21, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(742, 5, '2017-09-08', 2017, 9, 22, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(743, 5, '2017-10-08', 2017, 10, 23, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(744, 5, '2017-11-08', 2017, 11, 24, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(745, 5, '2017-12-08', 2017, 12, 25, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(746, 5, '2018-01-08', 2018, 1, 26, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(747, 5, '2018-02-08', 2018, 2, 27, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(748, 5, '2018-03-08', 2018, 3, 28, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(749, 5, '2018-04-08', 2018, 4, 29, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(750, 5, '2018-05-08', 2018, 5, 30, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(751, 5, '2018-06-08', 2018, 6, 31, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(752, 5, '2018-07-08', 2018, 7, 32, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(753, 5, '2018-08-08', 2018, 8, 33, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(754, 5, '2018-09-08', 2018, 9, 34, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(755, 5, '2018-10-08', 2018, 10, 35, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(756, 5, '2018-11-08', 2018, 11, 36, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(757, 5, '2018-12-08', 2018, 12, 37, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(758, 5, '2019-01-08', 2019, 1, 38, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(759, 5, '2019-02-08', 2019, 2, 39, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(760, 5, '2019-03-08', 2019, 3, 40, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(761, 5, '2019-04-08', 2019, 4, 41, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(762, 5, '2019-05-08', 2019, 5, 42, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(763, 5, '2019-06-08', 2019, 6, 43, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(764, 5, '2019-07-08', 2019, 7, 44, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(765, 5, '2019-08-08', 2019, 8, 45, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(766, 5, '2019-09-08', 2019, 9, 46, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(767, 5, '2019-10-08', 2019, 10, 47, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(768, 5, '2019-11-08', 2019, 11, 48, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(769, 5, '2019-12-08', 2019, 12, 49, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(770, 5, '2020-01-08', 2020, 1, 50, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(771, 5, '2020-02-08', 2020, 2, 51, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(772, 5, '2020-03-08', 2020, 3, 52, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(773, 5, '2020-04-08', 2020, 4, 53, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(774, 5, '2020-05-08', 2020, 5, 54, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(775, 5, '2020-06-08', 2020, 6, 55, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(776, 5, '2020-07-08', 2020, 7, 56, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(777, 5, '2020-08-08', 2020, 8, 57, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(778, 5, '2020-09-08', 2020, 9, 58, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(779, 5, '2020-10-08', 2020, 10, 59, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(780, 5, '2020-11-08', 2020, 11, 60, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(781, 5, '2020-12-08', 2020, 12, 61, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(782, 5, '2021-01-08', 2021, 1, 62, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(783, 5, '2021-02-08', 2021, 2, 63, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(784, 5, '2021-03-08', 2021, 3, 64, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(785, 5, '2021-04-08', 2021, 4, 65, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(786, 5, '2021-05-08', 2021, 5, 66, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(787, 5, '2021-06-08', 2021, 6, 67, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(788, 5, '2021-07-08', 2021, 7, 68, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(789, 5, '2021-08-08', 2021, 8, 69, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(790, 5, '2021-09-08', 2021, 9, 70, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(791, 5, '2021-10-08', 2021, 10, 71, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(792, 5, '2021-11-08', 2021, 11, 72, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(793, 5, '2021-12-08', 2021, 12, 73, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(794, 5, '2022-01-08', 2022, 1, 74, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(795, 5, '2022-02-08', 2022, 2, 75, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(796, 5, '2022-03-08', 2022, 3, 76, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(797, 5, '2022-04-08', 2022, 4, 77, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(798, 5, '2022-05-08', 2022, 5, 78, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(799, 5, '2022-06-08', 2022, 6, 79, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(800, 5, '2022-07-08', 2022, 7, 80, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(801, 5, '2022-08-08', 2022, 8, 81, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(802, 5, '2022-09-08', 2022, 9, 82, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(803, 5, '2022-10-08', 2022, 10, 83, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(804, 5, '2022-11-08', 2022, 11, 84, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(805, 5, '2022-12-08', 2022, 12, 85, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(806, 5, '2023-01-08', 2023, 1, 86, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(807, 5, '2023-02-08', 2023, 2, 87, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(808, 5, '2023-03-08', 2023, 3, 88, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(809, 5, '2023-04-08', 2023, 4, 89, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(810, 5, '2023-05-08', 2023, 5, 90, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(811, 5, '2023-06-08', 2023, 6, 91, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(812, 5, '2023-07-08', 2023, 7, 92, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(813, 5, '2023-08-08', 2023, 8, 93, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(814, 5, '2023-09-08', 2023, 9, 94, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(815, 5, '2023-10-08', 2023, 10, 95, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(816, 5, '2023-11-08', 2023, 11, 96, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(817, 5, '2023-12-08', 2023, 12, 97, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(818, 5, '2024-01-08', 2024, 1, 98, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(819, 5, '2024-02-08', 2024, 2, 99, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(820, 5, '2024-03-08', 2024, 3, 100, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(821, 5, '2024-04-08', 2024, 4, 101, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(822, 5, '2024-05-08', 2024, 5, 102, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(823, 5, '2024-06-08', 2024, 6, 103, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(824, 5, '2024-07-08', 2024, 7, 104, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(825, 5, '2024-08-08', 2024, 8, 105, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(826, 5, '2024-09-08', 2024, 9, 106, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(827, 5, '2024-10-08', 2024, 10, 107, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(828, 5, '2024-11-08', 2024, 11, 108, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:28', NULL, NULL, NULL, NULL),
(829, 5, '2024-12-08', 2024, 12, 109, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(830, 5, '2025-01-08', 2025, 1, 110, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(831, 5, '2025-02-08', 2025, 2, 111, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(832, 5, '2025-03-08', 2025, 3, 112, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(833, 5, '2025-04-08', 2025, 4, 113, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(834, 5, '2025-05-08', 2025, 5, 114, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(835, 5, '2025-06-08', 2025, 6, 115, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(836, 5, '2025-07-08', 2025, 7, 116, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(837, 5, '2025-08-08', 2025, 8, 117, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(838, 5, '2025-09-08', 2025, 9, 118, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(839, 5, '2025-10-08', 2025, 10, 119, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(840, 5, '2025-11-08', 2025, 11, 120, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(841, 5, '2025-12-08', 2025, 12, 121, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(842, 5, '2026-01-08', 2026, 1, 122, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(843, 5, '2026-02-08', 2026, 2, 123, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(844, 5, '2026-03-08', 2026, 3, 124, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(845, 5, '2026-04-08', 2026, 4, 125, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(846, 5, '2026-05-08', 2026, 5, 126, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(847, 5, '2026-06-08', 2026, 6, 127, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(848, 5, '2026-07-08', 2026, 7, 128, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(849, 5, '2026-08-08', 2026, 8, 129, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(850, 5, '2026-09-08', 2026, 9, 130, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(851, 5, '2026-10-08', 2026, 10, 131, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(852, 5, '2026-11-08', 2026, 11, 132, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(853, 5, '2026-12-08', 2026, 12, 133, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(854, 5, '2027-01-08', 2027, 1, 134, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(855, 5, '2027-02-08', 2027, 2, 135, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(856, 5, '2027-03-08', 2027, 3, 136, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(857, 5, '2027-04-08', 2027, 4, 137, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(858, 5, '2027-05-08', 2027, 5, 138, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(859, 5, '2027-06-08', 2027, 6, 139, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(860, 5, '2027-07-08', 2027, 7, 140, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(861, 5, '2027-08-08', 2027, 8, 141, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(862, 5, '2027-09-08', 2027, 9, 142, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(863, 5, '2027-10-08', 2027, 10, 143, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(864, 5, '2027-11-08', 2027, 11, 144, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(865, 5, '2027-12-08', 2027, 12, 145, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(866, 5, '2028-01-08', 2028, 1, 146, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(867, 5, '2028-02-08', 2028, 2, 147, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(868, 5, '2028-03-08', 2028, 3, 148, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(869, 5, '2028-04-08', 2028, 4, 149, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(870, 5, '2028-05-08', 2028, 5, 150, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(871, 5, '2028-06-08', 2028, 6, 151, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(872, 5, '2028-07-08', 2028, 7, 152, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(873, 5, '2028-08-08', 2028, 8, 153, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(874, 5, '2028-09-08', 2028, 9, 154, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(875, 5, '2028-10-08', 2028, 10, 155, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(876, 5, '2028-11-08', 2028, 11, 156, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(877, 5, '2028-12-08', 2028, 12, 157, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(878, 5, '2029-01-08', 2029, 1, 158, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(879, 5, '2029-02-08', 2029, 2, 159, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(880, 5, '2029-03-08', 2029, 3, 160, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(881, 5, '2029-04-08', 2029, 4, 161, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(882, 5, '2029-05-08', 2029, 5, 162, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(883, 5, '2029-06-08', 2029, 6, 163, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(884, 5, '2029-07-08', 2029, 7, 164, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(885, 5, '2029-08-08', 2029, 8, 165, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(886, 5, '2029-09-08', 2029, 9, 166, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(887, 5, '2029-10-08', 2029, 10, 167, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(888, 5, '2029-11-08', 2029, 11, 168, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(889, 5, '2029-12-08', 2029, 12, 169, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(890, 5, '2030-01-08', 2030, 1, 170, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(891, 5, '2030-02-08', 2030, 2, 171, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(892, 5, '2030-03-08', 2030, 3, 172, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(893, 5, '2030-04-08', 2030, 4, 173, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(894, 5, '2030-05-08', 2030, 5, 174, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(895, 5, '2030-06-08', 2030, 6, 175, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(896, 5, '2030-07-08', 2030, 7, 176, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(897, 5, '2030-08-08', 2030, 8, 177, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(898, 5, '2030-09-08', 2030, 9, 178, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(899, 5, '2030-10-08', 2030, 10, 179, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL),
(900, 5, '2030-11-08', 2030, 11, 180, '0.00000', '0.00', '0.00', '0.00', '0.00', '0.00', 'active', 1, '2019-05-19 14:32:29', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

DROP TABLE IF EXISTS `provinsi`;
CREATE TABLE `provinsi` (
  `id_provinsi` int(11) NOT NULL,
  `kode_provinsi` varchar(10) NOT NULL,
  `provinsi` varchar(60) NOT NULL,
  `statusdata` enum('active','nonactive') DEFAULT 'active',
  `createby` int(11) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `deleteby` int(11) DEFAULT NULL,
  `deletetime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id_provinsi`, `kode_provinsi`, `provinsi`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, '', 'BANTEN', 'nonactive', 1, '2019-05-18 12:17:26', 1, '2019-05-18 13:03:23', 1, '2019-05-18 14:52:57'),
(2, '123', 'Kalimantan Barat', 'active', 1, '2019-05-18 14:03:43', 1, '2019-08-28 06:54:17', NULL, NULL),
(3, '', 'Gorontalo ', 'active', 1, '2019-05-18 14:05:40', NULL, NULL, NULL, NULL),
(4, '', 'Kalimantan Selatan', 'active', 1, '2019-05-18 14:07:02', NULL, NULL, NULL, NULL),
(5, '', 'Sumatra Utara', 'active', 1, '2019-05-18 14:08:01', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roleapps`
--

DROP TABLE IF EXISTS `roleapps`;
CREATE TABLE `roleapps` (
  `id_role` int(11) NOT NULL,
  `roleapps` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roleapps`
--

INSERT INTO `roleapps` (`id_role`, `roleapps`) VALUES
(2, 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `t_pengajuanbankdetail`
--

DROP TABLE IF EXISTS `t_pengajuanbankdetail`;
CREATE TABLE `t_pengajuanbankdetail` (
  `id_t_pengajuanbankdetail` int(11) NOT NULL,
  `id_t_pengajuanbankheader` int(11) NOT NULL,
  `id_jeniskpr` int(11) NOT NULL,
  `kpr1_jumlahunit` int(8) NOT NULL DEFAULT '0',
  `kpr1_harga` int(18) NOT NULL DEFAULT '0',
  `kpr2_jumlahunit` int(8) NOT NULL DEFAULT '0' COMMENT 'jika flpp',
  `kpr2_harga` int(18) NOT NULL DEFAULT '0' COMMENT 'jika flpp',
  `permintaan_unit` int(8) NOT NULL DEFAULT '0' COMMENT 'yang di minta oleh bank',
  `permintaan_harga` int(18) NOT NULL DEFAULT '0' COMMENT 'yang di minta oleh bank',
  `lampiran_form1` varchar(255) NOT NULL,
  `statusproses` int(1) NOT NULL DEFAULT '1' COMMENT '1=menunggu,2=proses,3=finish',
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
-- Table structure for table `t_pengajuanbankheader`
--

DROP TABLE IF EXISTS `t_pengajuanbankheader`;
CREATE TABLE `t_pengajuanbankheader` (
  `id_t_pengajuanbankheader` int(11) NOT NULL,
  `no_sk` varchar(60) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `daritanggal` date NOT NULL,
  `sampaitanggal` date NOT NULL,
  `id_bankquotatahunan` int(11) NOT NULL,
  `prihal` varchar(255) NOT NULL,
  `jenisperhitungan` int(1) NOT NULL COMMENT '1=Anuitas,2=Efektivitas',
  `cek_dukcapil` int(1) NOT NULL COMMENT '1=Ya,0=Tidak',
  `statuspembayaranpertama` int(1) NOT NULL COMMENT '1=Ya,0=Tidak, Untuk tipe SBUM maka tidak',
  `lampiran_spv` varchar(255) NOT NULL COMMENT 'surat pernyataan verifikasi',
  `lampiran_drkas` varchar(255) NOT NULL COMMENT 'daftar rekapitulasi kelompok sasaran',
  `lampiran_lainnya` varchar(255) NOT NULL,
  `statuspengajuan` int(1) NOT NULL DEFAULT '1' COMMENT '1=menunggu,2=proses,3=finish',
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
-- Table structure for table `useraccess`
--

DROP TABLE IF EXISTS `useraccess`;
CREATE TABLE `useraccess` (
  `id_user` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` text NOT NULL COMMENT 'dont',
  `fullname` varchar(50) NOT NULL,
  `id_role` int(11) DEFAULT NULL COMMENT 'combobox',
  `email` varchar(50) NOT NULL,
  `nomor_telpon` varchar(50) DEFAULT NULL,
  `nomor_handphone` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useraccess`
--

INSERT INTO `useraccess` (`id_user`, `username`, `password`, `fullname`, `id_role`, `email`, `nomor_telpon`, `nomor_handphone`) VALUES
(1, 'riadi', '202cb962ac59075b964b07152d234b70', 'Ahmad Riadi', 1, 'ahmadriadi.ti@gmail.com', NULL, NULL),
(2, 'admin', '202cb962ac59075b964b07152d234b70', 'Administrator', 1, '-', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `badanhukum`
--
ALTER TABLE `badanhukum`
  ADD PRIMARY KEY (`id_badanhukum`);

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id_bank`);

--
-- Indexes for table `bankbunga`
--
ALTER TABLE `bankbunga`
  ADD PRIMARY KEY (`id_bankbunga`),
  ADD KEY `id_bank` (`id_bank`),
  ADD KEY `tahun` (`tahun`,`bulan`,`id_bank`);

--
-- Indexes for table `bankcabang`
--
ALTER TABLE `bankcabang`
  ADD PRIMARY KEY (`id_bankcabang`),
  ADD KEY `id_bank` (`id_bank`);

--
-- Indexes for table `bankquotatahunan`
--
ALTER TABLE `bankquotatahunan`
  ADD PRIMARY KEY (`id_bankquotatahunan`),
  ADD KEY `id_bank` (`id_bank`);

--
-- Indexes for table `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`id_desa`),
  ADD KEY `id_kota` (`id_kecamatan`);

--
-- Indexes for table `jeniskpr`
--
ALTER TABLE `jeniskpr`
  ADD PRIMARY KEY (`id_jeniskpr`);

--
-- Indexes for table `jenisrumah`
--
ALTER TABLE `jenisrumah`
  ADD PRIMARY KEY (`id_jenisrumah`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`),
  ADD KEY `id_kota` (`id_kota`);

--
-- Indexes for table `kotakabupaten`
--
ALTER TABLE `kotakabupaten`
  ADD PRIMARY KEY (`id_kota`),
  ADD KEY `id_provinsi` (`id_provinsi`);

--
-- Indexes for table `m_batashargarumah`
--
ALTER TABLE `m_batashargarumah`
  ADD PRIMARY KEY (`id_m_batashargarumah`),
  ADD KEY `id_provinsi` (`id_provinsi`);

--
-- Indexes for table `m_batashargarumahpengecualian`
--
ALTER TABLE `m_batashargarumahpengecualian`
  ADD PRIMARY KEY (`id_m_batashargarumahpengecualian`),
  ADD KEY `id_provinsi` (`id_provinsi`),
  ADD KEY `id_kota` (`id_kota`),
  ADD KEY `id_kecamatan` (`id_kecamatan`),
  ADD KEY `id_desa` (`id_desa`);

--
-- Indexes for table `m_bataspengasilan`
--
ALTER TABLE `m_bataspengasilan`
  ADD PRIMARY KEY (`id_m_bataspengasilan`),
  ADD KEY `id_provinsi` (`id_provinsi`);

--
-- Indexes for table `m_sukubungabirate`
--
ALTER TABLE `m_sukubungabirate`
  ADD PRIMARY KEY (`id_m_sukubungabirate`);

--
-- Indexes for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id_pekerjaan`);

--
-- Indexes for table `penandatangan`
--
ALTER TABLE `penandatangan`
  ADD PRIMARY KEY (`id_penandatangan`);

--
-- Indexes for table `perumahan`
--
ALTER TABLE `perumahan`
  ADD PRIMARY KEY (`id_perumahan`),
  ADD KEY `id_kodepos` (`id_kodepos`);

--
-- Indexes for table `perumahanharga`
--
ALTER TABLE `perumahanharga`
  ADD PRIMARY KEY (`id_perumahanharga`),
  ADD KEY `id_perumahan` (`id_perumahan`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id_peserta`),
  ADD KEY `id_bankcabang` (`id_bankcabang`),
  ADD KEY `id_pekerjaan` (`id_pekerjaan`),
  ADD KEY `id_badanhukum` (`id_badanhukum`),
  ADD KEY `id_perumahan` (`id_perumahan`),
  ADD KEY `no_ktp_peserta` (`no_ktp_peserta`),
  ADD KEY `tgl_akad` (`tgl_akad`),
  ADD KEY `id_perumahanharga` (`id_perumahanharga`),
  ADD KEY `statusschedule` (`statusschedule`);

--
-- Indexes for table `pesertaangsuran`
--
ALTER TABLE `pesertaangsuran`
  ADD PRIMARY KEY (`id_pesertaangsuran`),
  ADD KEY `id_peserta` (`id_peserta`),
  ADD KEY `tahun` (`tahun`),
  ADD KEY `bulan` (`bulan`),
  ADD KEY `tenorke` (`tenorke`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- Indexes for table `roleapps`
--
ALTER TABLE `roleapps`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `t_pengajuanbankdetail`
--
ALTER TABLE `t_pengajuanbankdetail`
  ADD PRIMARY KEY (`id_t_pengajuanbankdetail`),
  ADD KEY `id_t_pengajuanbankheader` (`id_t_pengajuanbankheader`),
  ADD KEY `id_jeniskpr` (`id_jeniskpr`);

--
-- Indexes for table `t_pengajuanbankheader`
--
ALTER TABLE `t_pengajuanbankheader`
  ADD PRIMARY KEY (`id_t_pengajuanbankheader`),
  ADD KEY `id_bankquotatahunan` (`id_bankquotatahunan`);

--
-- Indexes for table `useraccess`
--
ALTER TABLE `useraccess`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `badanhukum`
--
ALTER TABLE `badanhukum`
  MODIFY `id_badanhukum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id_bank` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `bankbunga`
--
ALTER TABLE `bankbunga`
  MODIFY `id_bankbunga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `bankcabang`
--
ALTER TABLE `bankcabang`
  MODIFY `id_bankcabang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `bankquotatahunan`
--
ALTER TABLE `bankquotatahunan`
  MODIFY `id_bankquotatahunan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `desa`
--
ALTER TABLE `desa`
  MODIFY `id_desa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `jeniskpr`
--
ALTER TABLE `jeniskpr`
  MODIFY `id_jeniskpr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `jenisrumah`
--
ALTER TABLE `jenisrumah`
  MODIFY `id_jenisrumah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kotakabupaten`
--
ALTER TABLE `kotakabupaten`
  MODIFY `id_kota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `m_batashargarumah`
--
ALTER TABLE `m_batashargarumah`
  MODIFY `id_m_batashargarumah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `m_batashargarumahpengecualian`
--
ALTER TABLE `m_batashargarumahpengecualian`
  MODIFY `id_m_batashargarumahpengecualian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `m_bataspengasilan`
--
ALTER TABLE `m_bataspengasilan`
  MODIFY `id_m_bataspengasilan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `m_sukubungabirate`
--
ALTER TABLE `m_sukubungabirate`
  MODIFY `id_m_sukubungabirate` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id_pekerjaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `penandatangan`
--
ALTER TABLE `penandatangan`
  MODIFY `id_penandatangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `perumahan`
--
ALTER TABLE `perumahan`
  MODIFY `id_perumahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `perumahanharga`
--
ALTER TABLE `perumahanharga`
  MODIFY `id_perumahanharga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id_peserta` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pesertaangsuran`
--
ALTER TABLE `pesertaangsuran`
  MODIFY `id_pesertaangsuran` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=901;
--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id_provinsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `roleapps`
--
ALTER TABLE `roleapps`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `t_pengajuanbankdetail`
--
ALTER TABLE `t_pengajuanbankdetail`
  MODIFY `id_t_pengajuanbankdetail` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_pengajuanbankheader`
--
ALTER TABLE `t_pengajuanbankheader`
  MODIFY `id_t_pengajuanbankheader` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `useraccess`
--
ALTER TABLE `useraccess`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
