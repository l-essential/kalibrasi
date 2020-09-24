-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2020 at 11:16 AM
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
CREATE DATABASE IF NOT EXISTS `lessential_hris` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `lessential_hris`;

-- --------------------------------------------------------

--
-- Table structure for table `kpi_detail`
--

DROP TABLE IF EXISTS `kpi_detail`;
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

DROP TABLE IF EXISTS `kpi_name`;
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

DROP TABLE IF EXISTS `kpi_periode`;
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

DROP TABLE IF EXISTS `mst_department`;
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

-- --------------------------------------------------------

--
-- Table structure for table `mst_divisi`
--

DROP TABLE IF EXISTS `mst_divisi`;
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

DROP TABLE IF EXISTS `mst_jabatan`;
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

DROP TABLE IF EXISTS `mst_karyawan`;
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

DROP TABLE IF EXISTS `mst_section`;
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
  MODIFY `id_department` int(11) NOT NULL AUTO_INCREMENT;

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
