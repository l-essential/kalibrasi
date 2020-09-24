-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2020 at 11:27 AM
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
CREATE DATABASE IF NOT EXISTS `lessential_kpi` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `lessential_kpi`;

-- --------------------------------------------------------

--
-- Table structure for table `kpi`
--

DROP TABLE IF EXISTS `kpi`;
CREATE TABLE `kpi` (
  `kpi_id` int(11) NOT NULL,
  `periode_id` int(11) NOT NULL,
  `detail_id` int(11) NOT NULL,
  `kpi_objective` varchar(150) NOT NULL,
  `bobot` varchar(3) NOT NULL,
  `kpi_value` decimal(1,0) NOT NULL,
  `supporting_information` text NOT NULL,
  `target_objective` varchar(2) NOT NULL,
  `target_kpi` varchar(2) NOT NULL,
  `jan` varchar(2) NOT NULL,
  `feb` varchar(2) NOT NULL,
  `mar` varchar(2) NOT NULL,
  `apr` varchar(2) NOT NULL,
  `mei` varchar(2) NOT NULL,
  `jun` varchar(2) NOT NULL,
  `jul` varchar(2) NOT NULL,
  `ags` varchar(2) NOT NULL,
  `sep` varchar(2) NOT NULL,
  `okt` varchar(2) NOT NULL,
  `nov` varchar(2) NOT NULL,
  `des` varchar(2) NOT NULL,
  `actual` int(2) NOT NULL,
  `target_vs_actual` varchar(10) NOT NULL,
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

INSERT INTO `kpi` (`kpi_id`, `periode_id`, `detail_id`, `kpi_objective`, `bobot`, `kpi_value`, `supporting_information`, `target_objective`, `target_kpi`, `jan`, `feb`, `mar`, `apr`, `mei`, `jun`, `jul`, `ags`, `sep`, `okt`, `nov`, `des`, `actual`, `target_vs_actual`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 0, 1, 'PKWT Karyawan', '15', '0', 'Proses perubahan status karyawan dan perpanjangan Perjanjian Kerja karyawan, maksimal 20 HK sebelum perjanjian kerja berakhir, dibuktikan dengan daftar perpanjangan Perjanjian Kerja Karyawan Penilaian berdasarkan dua hal, pemenuhan FPK dan ketepatan waktu dalam pemenuhan FPK', '1', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', 4, '100', 'active', 1, '2020-07-27 15:40:51', NULL, NULL, NULL, NULL),
(2, 0, 1, 'Evaluasi Kompetensi Karya', '15', '1', 'Proses perubahan status karyawan dan perpanjangan Perjanjian Kerja karyawan, maksimal 21 HK sebelum perjanjian kerja berakhir, dibuktikan dengan daftar perpanjangan Perjanjian Kerja Karyawan Penilaian berdasarkan dua hal, pemenuhan FPK dan ketepatan waktu dalam pemenuhan FPK', '1', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', 4, '100', 'active', 1, '2020-07-27 15:40:51', NULL, NULL, NULL, NULL),
(3, 0, 1, 'Evaluasi kinerja karyawan', '15', '1', 'Melakukan evaluasi kinerja karyawan 2 kali dalam setahun yaitu di bulan Juli & Desember', '1', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', 4, '100', 'active', 1, '2020-07-27 15:40:51', NULL, NULL, NULL, NULL),
(4, 0, 1, 'Rekruitment', '15', '1', 'Rekrutmen calon karyawan baru dapat dipenuhi berdasarkan FPK, semenjak permintaan disetujui sesuai dengan SK Direksi', '1', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', 4, '100', 'active', 1, '2020-07-27 15:40:51', NULL, NULL, NULL, NULL),
(5, 0, 1, 'Data Base Karyawan', '15', '1', 'Persentase berdasarkan pemutakhiran data base karyawan dari setiap Dept pada setiap bulan', '1', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', 4, '100', 'active', 1, '2020-07-27 15:40:51', NULL, NULL, NULL, NULL),
(6, 0, 1, 'Training Karyawan', '15', '1', 'Pelaksanaan Training Road Map sesuai dengan jadwal yang disetujui Management', '1', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', 4, '100', 'active', 1, '2020-07-27 15:40:51', NULL, NULL, NULL, NULL),
(7, 0, 1, 'Induksi Karyawan', '15', '0', 'Orientasi karyawan baru dilakukan maksimal 5 HK terhitung dari karyawan baru mulai bergabung, data berdasarkan penerimaan karyawan dan jadwal induksi karyawan', '1', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', 4, '100', 'active', 1, '2020-07-27 15:40:51', NULL, NULL, NULL, NULL),
(8, 0, 4, 'PKWT Karyawan', '15', '1', 'Proses perubahan status karyawan dan perpanjangan Perjanjian Kerja karyawan, maksimal 20 HK sebelum perjanjian kerja berakhir, dibuktikan dengan daftar perpanjangan Perjanjian Kerja Karyawan Penilaian berdasarkan dua hal, pemenuhan FPK dan ketepatan waktu dalam pemenuhan FPK', '1', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', 4, '100', 'active', 1, '2020-07-29 08:51:41', NULL, NULL, NULL, NULL),
(9, 0, 4, 'Evaluasi Kompetensi Karya', '15', '1', 'Proses perubahan status karyawan dan perpanjangan Perjanjian Kerja karyawan, maksimal 21 HK sebelum perjanjian kerja berakhir, dibuktikan dengan daftar perpanjangan Perjanjian Kerja Karyawan Penilaian berdasarkan dua hal, pemenuhan FPK dan ketepatan waktu dalam pemenuhan FPK', '1', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', 4, '100', 'active', 1, '2020-07-29 08:51:41', NULL, NULL, NULL, NULL),
(10, 0, 4, 'Evaluasi kinerja karyawan', '15', '1', 'Melakukan evaluasi kinerja karyawan 2 kali dalam setahun yaitu di bulan Juli & Desember', '1', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', 4, '100', 'active', 1, '2020-07-29 08:51:41', NULL, NULL, NULL, NULL),
(11, 0, 4, 'Rekruitment', '15', '1', 'Rekrutmen calon karyawan baru dapat dipenuhi berdasarkan FPK, semenjak permintaan disetujui sesuai dengan SK Direksi', '1', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', 4, '100', 'active', 1, '2020-07-29 08:51:41', NULL, NULL, NULL, NULL),
(12, 0, 4, 'Data Base Karyawan', '15', '1', 'Persentase berdasarkan pemutakhiran data base karyawan dari setiap Dept pada setiap bulan', '1', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', 4, '100', 'active', 1, '2020-07-29 08:51:41', NULL, NULL, NULL, NULL),
(13, 0, 4, 'Training Karyawan', '15', '1', 'Pelaksanaan Training Road Map sesuai dengan jadwal yang disetujui Management', '1', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', 4, '100', 'active', 1, '2020-07-29 08:51:41', NULL, NULL, NULL, NULL),
(14, 0, 4, 'Induksi Karyawan', '15', '0', 'Orientasi karyawan baru dilakukan maksimal 5 HK terhitung dari karyawan baru mulai bergabung, data berdasarkan penerimaan karyawan dan jadwal induksi karyawan', '1', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', 4, '100', 'active', 1, '2020-07-29 08:51:41', NULL, NULL, NULL, NULL),
(15, 2, 10, 'PKWT Karyawan', '0.1', '1', 'Proses perubahan status karyawan dan perpanjangan Perjanjian Kerja karyawan, maksimal 20 HK sebelum perjanjian kerja berakhir, dibuktikan dengan daftar perpanjangan Perjanjian Kerja Karyawan Penilaian berdasarkan dua hal, pemenuhan FPK dan ketepatan waktu dalam pemenuhan FPK', '1', '5', '', '', '', '', '', '', '', '5', '5', '5', '', '5', 0, '5', 'active', 1, '2020-07-30 09:47:23', NULL, NULL, NULL, NULL),
(16, 2, 10, 'Evaluasi Kompetensi Karyawan', '0.2', '1', 'Proses perubahan status karyawan dan perpanjangan Perjanjian Kerja karyawan, maksimal 21 HK sebelum perjanjian kerja berakhir, dibuktikan dengan daftar perpanjangan Perjanjian Kerja Karyawan Penilaian berdasarkan dua hal, pemenuhan FPK dan ketepatan waktu dalam pemenuhan FPK', '1', '5', '', '', '', '', '', '', '', '', '', '', '', '5', 0, '5', 'active', 1, '2020-07-30 09:47:23', NULL, NULL, NULL, NULL),
(17, 2, 10, 'Evaluasi kinerja karyawan', '0.2', '1', 'Melakukan evaluasi kinerja karyawan 2 kali dalam setahun yaitu di bulan Juli & Desember', '1', '5', '', '', '', '', '', '', '', '', '', '', '', '5', 0, '5', 'active', 1, '2020-07-30 09:47:23', NULL, NULL, NULL, NULL),
(18, 2, 10, 'Rekruitment', '0.1', '1', 'Rekrutmen calon karyawan baru dapat dipenuhi berdasarkan FPK, semenjak permintaan disetujui sesuai dengan SK Direksi', '1', '5', '', '', '', '', '', '', '', '5', '5', '5', '', '5', 0, '5', 'active', 1, '2020-07-30 09:47:23', NULL, NULL, NULL, NULL),
(19, 2, 10, 'Data Base Karyawan', '0.1', '1', 'Persentase berdasarkan pemutakhiran data base karyawan dari setiap Dept pada setiap bulan', '1', '5', '', '', '', '', '', '', '', '5', '5', '5', '', '5', 0, '5', 'active', 1, '2020-07-30 09:47:23', NULL, NULL, NULL, NULL),
(20, 2, 10, 'Training Karyawan', '0.1', '1', 'Pelaksanaan Training Road Map sesuai dengan jadwal yang disetujui Management', '1', '5', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 'active', 1, '2020-07-30 09:47:23', NULL, NULL, NULL, NULL),
(21, 2, 10, 'Induksi Karyawan', '0.0', '0', 'Orientasi karyawan baru dilakukan maksimal 5 HK terhitung dari karyawan baru mulai bergabung, data berdasarkan penerimaan karyawan dan jadwal induksi karyawan', '1', '5', '', '', '', '', '', '', '', '5', '5', '5', '', '5', 0, '5', 'active', 1, '2020-07-30 09:47:23', NULL, NULL, NULL, NULL),
(22, 0, 10, 'PKWT Karyawan', '15', '1', 'Proses perubahan status karyawan dan perpanjangan Perjanjian Kerja karyawan, maksimal 20 HK sebelum perjanjian kerja berakhir, dibuktikan dengan daftar perpanjangan Perjanjian Kerja Karyawan Penilaian berdasarkan dua hal, pemenuhan FPK dan ketepatan waktu dalam pemenuhan FPK', '1', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', 4, '100', 'active', 1, '2020-07-30 09:48:32', NULL, NULL, NULL, NULL),
(23, 0, 10, 'Evaluasi Kompetensi Karyawan', '15', '1', 'Proses perubahan status karyawan dan perpanjangan Perjanjian Kerja karyawan, maksimal 21 HK sebelum perjanjian kerja berakhir, dibuktikan dengan daftar perpanjangan Perjanjian Kerja Karyawan Penilaian berdasarkan dua hal, pemenuhan FPK dan ketepatan waktu dalam pemenuhan FPK', '1', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', 4, '100', 'active', 1, '2020-07-30 09:48:32', NULL, NULL, NULL, NULL),
(24, 0, 10, 'Evaluasi kinerja karyawan', '15', '1', 'Melakukan evaluasi kinerja karyawan 2 kali dalam setahun yaitu di bulan Juli & Desember', '1', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', 4, '100', 'active', 1, '2020-07-30 09:48:32', NULL, NULL, NULL, NULL),
(25, 0, 10, 'Rekruitment', '15', '1', 'Rekrutmen calon karyawan baru dapat dipenuhi berdasarkan FPK, semenjak permintaan disetujui sesuai dengan SK Direksi', '1', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', 4, '100', 'active', 1, '2020-07-30 09:48:32', NULL, NULL, NULL, NULL),
(26, 0, 10, 'Data Base Karyawan', '15', '1', 'Persentase berdasarkan pemutakhiran data base karyawan dari setiap Dept pada setiap bulan', '1', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', 4, '100', 'active', 1, '2020-07-30 09:48:32', NULL, NULL, NULL, NULL),
(27, 0, 10, 'Training Karyawan', '15', '1', 'Pelaksanaan Training Road Map sesuai dengan jadwal yang disetujui Management', '1', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', 4, '100', 'active', 1, '2020-07-30 09:48:32', NULL, NULL, NULL, NULL),
(28, 0, 10, 'Induksi Karyawan', '15', '0', 'Orientasi karyawan baru dilakukan maksimal 5 HK terhitung dari karyawan baru mulai bergabung, data berdasarkan penerimaan karyawan dan jadwal induksi karyawan', '1', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', 4, '100', 'active', 1, '2020-07-30 09:48:32', NULL, NULL, NULL, NULL),
(29, 3, 15, 'PKWT Karyawan', '0.1', '1', 'Proses perubahan status karyawan dan perpanjangan Perjanjian Kerja karyawan, maksimal 20 HK sebelum perjanjian kerja berakhir, dibuktikan dengan daftar perpanjangan Perjanjian Kerja Karyawan Penilaian berdasarkan dua hal, pemenuhan FPK dan ketepatan waktu dalam pemenuhan FPK', '1', '5', '', '', '', '', '', '', '', '5', '5', '5', '', '5', 0, '5', 'active', 1, '2020-07-30 09:52:20', NULL, NULL, NULL, NULL),
(30, 3, 15, 'Evaluasi Kompetensi Karyawan', '0.2', '1', 'Proses perubahan status karyawan dan perpanjangan Perjanjian Kerja karyawan, maksimal 21 HK sebelum perjanjian kerja berakhir, dibuktikan dengan daftar perpanjangan Perjanjian Kerja Karyawan Penilaian berdasarkan dua hal, pemenuhan FPK dan ketepatan waktu dalam pemenuhan FPK', '1', '5', '', '', '', '', '', '', '', '', '', '', '', '5', 0, '5', 'active', 1, '2020-07-30 09:52:20', NULL, NULL, NULL, NULL),
(31, 3, 15, 'Evaluasi kinerja karyawan', '0.2', '1', 'Melakukan evaluasi kinerja karyawan 2 kali dalam setahun yaitu di bulan Juli & Desember', '1', '5', '', '', '', '', '', '', '', '', '', '', '', '5', 0, '5', 'active', 1, '2020-07-30 09:52:20', NULL, NULL, NULL, NULL),
(32, 3, 15, 'Rekruitment', '0.1', '1', 'Rekrutmen calon karyawan baru dapat dipenuhi berdasarkan FPK, semenjak permintaan disetujui sesuai dengan SK Direksi', '1', '5', '', '', '', '', '', '', '', '5', '5', '5', '', '5', 0, '5', 'active', 1, '2020-07-30 09:52:20', NULL, NULL, NULL, NULL),
(33, 3, 15, 'Data Base Karyawan', '0.1', '1', 'Persentase berdasarkan pemutakhiran data base karyawan dari setiap Dept pada setiap bulan', '1', '5', '', '', '', '', '', '', '', '5', '5', '5', '', '5', 0, '5', 'active', 1, '2020-07-30 09:52:20', NULL, NULL, NULL, NULL),
(34, 3, 15, 'Training Karyawan', '0.1', '1', 'Pelaksanaan Training Road Map sesuai dengan jadwal yang disetujui Management', '1', '5', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 'active', 1, '2020-07-30 09:52:20', NULL, NULL, NULL, NULL),
(35, 3, 15, 'Induksi Karyawan', '0.0', '0', 'Orientasi karyawan baru dilakukan maksimal 5 HK terhitung dari karyawan baru mulai bergabung, data berdasarkan penerimaan karyawan dan jadwal induksi karyawan', '1', '5', '', '', '', '', '', '', '', '5', '5', '5', '', '5', 0, '5', 'active', 1, '2020-07-30 09:52:20', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `periode`
--

DROP TABLE IF EXISTS `periode`;
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
(6, '2023', '2024', 'IT', 'active', 1, '2020-08-11 17:00:53', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `periode_detail`
--

DROP TABLE IF EXISTS `periode_detail`;
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
(26, 6, 'BUDI IRWAN FIRMANSYAH', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(27, 6, 'MOEHAMAD SALDY AMIRULLAH JAFAR', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(28, 6, 'MOH. BAYU EDHI WIBOWO', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL),
(29, 6, 'STEFANUS LAY', '', '', 'active', NULL, NULL, NULL, NULL, NULL, NULL);

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
  MODIFY `kpi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `periode`
--
ALTER TABLE `periode`
  MODIFY `periode_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `periode_detail`
--
ALTER TABLE `periode_detail`
  MODIFY `detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
