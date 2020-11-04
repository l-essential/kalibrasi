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
-- Database: `lessential_hris`
--

-- --------------------------------------------------------

--
-- Table structure for table `kpi_detail`
--

CREATE TABLE `kpi_detail` (
  `objective_id` int(11) NOT NULL,
  `kpi_objective` varchar(100) NOT NULL,
  `bobot` varchar(2) NOT NULL,
  `kpi_value` decimal(1,0) NOT NULL,
  `supporting` varchar(225) NOT NULL,
  `target_kpi` int(3) NOT NULL,
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
-- Table structure for table `kpi_name`
--

CREATE TABLE `kpi_name` (
  `kpi_name_id` int(11) NOT NULL,
  `name_employee` varchar(75) NOT NULL,
  `kpi_date` date NOT NULL,
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
-- Table structure for table `kpi_periode`
--

CREATE TABLE `kpi_periode` (
  `kpi_id` int(11) NOT NULL,
  `periode_awal` varchar(20) NOT NULL,
  `periode_akhir` varchar(15) NOT NULL,
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
-- Table structure for table `mst_department`
--

CREATE TABLE `mst_department` (
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
-- Dumping data for table `mst_department`
--

INSERT INTO `mst_department` (`id_department`, `department_code`, `department_name`, `statusdata`, `createby`, `createtime`, `updateby`, `updatetime`, `deleteby`, `deletetime`) VALUES
(1, 'IT', 'IT', 'active', 1, '2019-08-19 06:15:21', 56, '2020-02-26 10:04:13', 1, '2020-02-09 21:57:37'),
(2, 'QA', 'QA', 'active', 1, '2019-08-19 06:24:48', 56, '2020-02-26 10:04:19', 1, '2020-01-24 15:42:03'),
(3, 'QC', 'QC', 'active', 1, '2020-02-09 21:53:12', 56, '2020-02-26 10:03:39', 1, '2020-02-09 21:53:17'),
(4, 'General Affair', 'GA', 'active', 1, '2020-02-09 21:57:31', 56, '2020-02-26 10:07:47', 1, '2020-02-09 22:04:44'),
(5, 'Human Resources', 'HR', 'active', 1, '2020-02-09 21:59:15', 56, '2020-02-26 10:10:04', 1, '2020-02-09 21:59:19'),
(6, 'FA & Acc', 'FA & Acc', 'active', 1, '2020-02-09 22:00:36', 56, '2020-02-26 10:07:14', 1, '2020-02-09 22:00:40'),
(7, '43432', 'FA', 'nonactive', 1, '2020-02-09 22:01:28', NULL, NULL, 56, '2020-02-26 10:07:19'),
(8, 'PLANT', 'PLANT', 'active', 1, '2020-02-09 22:04:37', 1, '2020-03-06 10:35:31', 1, '2020-02-09 22:04:41'),
(9, 'RND', 'RND', 'active', 1, '2020-02-09 22:07:39', 56, '2020-02-26 10:09:19', 1, '2020-02-09 22:07:43'),
(10, 'PRD', 'PRD', 'active', 56, '2020-02-26 10:01:14', 56, '2020-02-26 10:06:52', NULL, NULL),
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
-- Table structure for table `mst_divisi`
--

CREATE TABLE `mst_divisi` (
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

-- --------------------------------------------------------

--
-- Table structure for table `mst_jabatan`
--

CREATE TABLE `mst_jabatan` (
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

-- --------------------------------------------------------

--
-- Table structure for table `mst_karyawan`
--

CREATE TABLE `mst_karyawan` (
  `karyawan_id` int(11) NOT NULL,
  `NIK` int(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `PIN` varchar(15) NOT NULL,
  `namaKaryawan` varchar(150) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `alamatKota` varchar(255) NOT NULL,
  `alamatKodePos` varchar(15) NOT NULL,
  `tempatLahir` varchar(15) NOT NULL,
  `tanggalLahir` varchar(15) NOT NULL,
  `kodeDepartment` int(15) NOT NULL,
  `KodeSeksi` int(15) NOT NULL,
  `kodeDivisi` int(15) NOT NULL,
  `kodeJabatan` int(15) NOT NULL,
  `kodeTipeKaryawan` int(15) NOT NULL,
  `kodeJenisKelamin` int(15) NOT NULL,
  `kodeAgama` int(15) NOT NULL,
  `kodePendidikan` int(15) NOT NULL,
  `kodeStatusKawin` int(15) NOT NULL,
  `kodeKebangsaan` int(15) NOT NULL,
  `kodeShiftRekap` int(15) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `nama_gambar` varchar(255) NOT NULL,
  `lokasi_gambar` varchar(255) NOT NULL,
  `tglMulaiKerja` varchar(15) NOT NULL,
  `tglPengunduranDiri` varchar(15) NOT NULL,
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
-- Table structure for table `mst_section`
--

CREATE TABLE `mst_section` (
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
-- Indexes for dumped tables
--

--
-- Indexes for table `kpi_detail`
--
ALTER TABLE `kpi_detail`
  ADD PRIMARY KEY (`objective_id`);

--
-- Indexes for table `kpi_name`
--
ALTER TABLE `kpi_name`
  ADD PRIMARY KEY (`kpi_name_id`);

--
-- Indexes for table `kpi_periode`
--
ALTER TABLE `kpi_periode`
  ADD PRIMARY KEY (`kpi_id`);

--
-- Indexes for table `mst_department`
--
ALTER TABLE `mst_department`
  ADD PRIMARY KEY (`id_department`);

--
-- Indexes for table `mst_divisi`
--
ALTER TABLE `mst_divisi`
  ADD PRIMARY KEY (`id_department`);

--
-- Indexes for table `mst_jabatan`
--
ALTER TABLE `mst_jabatan`
  ADD PRIMARY KEY (`id_department`);

--
-- Indexes for table `mst_karyawan`
--
ALTER TABLE `mst_karyawan`
  ADD PRIMARY KEY (`karyawan_id`);

--
-- Indexes for table `mst_section`
--
ALTER TABLE `mst_section`
  ADD PRIMARY KEY (`id_department`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kpi_detail`
--
ALTER TABLE `kpi_detail`
  MODIFY `objective_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kpi_name`
--
ALTER TABLE `kpi_name`
  MODIFY `kpi_name_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kpi_periode`
--
ALTER TABLE `kpi_periode`
  MODIFY `kpi_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mst_department`
--
ALTER TABLE `mst_department`
  MODIFY `id_department` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `mst_divisi`
--
ALTER TABLE `mst_divisi`
  MODIFY `id_department` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mst_jabatan`
--
ALTER TABLE `mst_jabatan`
  MODIFY `id_department` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mst_karyawan`
--
ALTER TABLE `mst_karyawan`
  MODIFY `karyawan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mst_section`
--
ALTER TABLE `mst_section`
  MODIFY `id_department` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
