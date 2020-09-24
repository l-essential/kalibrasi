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
-- Database: `lessential_chat`
--
CREATE DATABASE IF NOT EXISTS `lessential_chat` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `lessential_chat`;

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE `chat` (
  `chat_id` int(11) NOT NULL,
  `chat_pengirim` int(11) NOT NULL,
  `chat_penerima` int(11) NOT NULL,
  `chat_isi` text COLLATE utf8mb4_bin NOT NULL,
  `chat_waktu` datetime NOT NULL,
  `chat_status` int(11) NOT NULL,
  `chat_tipe` varchar(10) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`chat_id`, `chat_pengirim`, `chat_penerima`, `chat_isi`, `chat_waktu`, `chat_status`, `chat_tipe`) VALUES
(1, 1, 4, 'pagi pak yun', '2020-07-28 21:42:41', 1, 'text'),
(2, 4, 1, 'iya sal', '2020-07-28 21:43:19', 1, 'text'),
(3, 4, 1, '<img class=\'pesan-gambar\' src=\'../gambar/chat/8041.png\'>', '2020-07-28 21:43:41', 1, 'gambar'),
(4, 219, 1, 'sal', '2020-07-28 21:46:40', 1, 'text'),
(5, 6, 1, 'mas saldy lagi dimana?', '2020-07-29 05:40:35', 1, 'text'),
(6, 1, 219, 'tes', '2020-07-29 08:47:10', 1, 'text'),
(7, 1, 219, 'tes enter', '2020-07-29 08:48:21', 1, 'text'),
(8, 1, 2, 'tes saya', '2020-07-29 10:42:05', 1, 'text'),
(9, 2, 1, 'iya mas knp?', '2020-07-29 10:44:04', 1, 'text'),
(10, 1, 2, 'okedah stef makasih ya', '2020-07-29 10:44:29', 1, 'text'),
(11, 586, 1, 'pak saldy', '2020-07-29 11:56:34', 1, 'text'),
(12, 2, 1, 'tes', '2020-07-29 12:01:36', 1, 'text'),
(13, 1, 2, 'stef tes aja', '2020-07-29 12:01:51', 1, 'text'),
(14, 1, 2, '<img class=\'pesan-gambar\' src=\'../gambar/chat/10264.png\'>', '2020-07-29 12:02:04', 1, 'gambar'),
(15, 1, 2, '6843.xlsx', '2020-07-29 12:02:13', 1, 'file'),
(16, 1, 586, 'iya untuk user sudah bisa di coba ya', '2020-07-29 12:39:51', 0, 'text'),
(17, 1, 586, '<img class=\'pesan-gambar\' src=\'../gambar/chat/20704.png\'>', '2020-07-29 12:43:30', 0, 'gambar'),
(18, 1, 586, 'itu saya pakai login rnd_rizki', '2020-07-29 12:44:34', 0, 'text'),
(19, 219, 1, 'tes', '2020-07-29 13:03:41', 1, 'text'),
(20, 219, 1, 'oke', '2020-07-29 13:04:04', 1, 'text'),
(21, 1, 2, 'tes notifikasi stef', '2020-07-29 13:04:47', 1, 'text'),
(22, 219, 1, '13:19', '2020-07-29 13:19:33', 1, 'text'),
(23, 6, 1, 'iya', '2020-07-29 14:33:55', 1, 'text'),
(24, 219, 1, 'tes lagi notif', '2020-07-29 16:43:14', 1, 'text'),
(25, 6, 1, 'saldy', '2020-07-29 16:50:53', 1, 'text'),
(26, 219, 1, 'test kamis', '2020-07-30 08:06:47', 1, 'text'),
(27, 219, 1, 'mas saldy', '2020-08-03 14:53:17', 1, 'text'),
(28, 219, 1, 'udah bisa belum?', '2020-08-03 14:53:22', 1, 'text'),
(29, 1, 219, 'belum', '2020-08-03 15:02:20', 1, 'text'),
(30, 1, 352, 'nnti klo udah di kabarin mba dini', '2020-08-04 08:02:12', 1, 'text'),
(31, 1, 530, 'sudah saya matiin mba untuk time outnya ', '2020-08-04 15:43:50', 0, 'text'),
(32, 1, 530, '😁', '2020-08-04 15:43:56', 0, 'text'),
(33, 1, 352, 'mba dini blm ya', '2020-08-07 13:07:09', 1, 'text'),
(34, 1, 352, 'senin ya', '2020-08-07 13:07:15', 1, 'text'),
(35, 352, 1, 'oke senin ya', '2020-08-07 13:12:57', 1, 'text'),
(36, 352, 1, 'jangan lupa : NA harusnya No. Kode', '2020-08-07 13:13:13', 1, 'text'),
(37, 352, 1, 'di dalem tahap CAPA harusnya PIC bukan masuk WFH libur dll', '2020-08-07 13:13:37', 1, 'text'),
(38, 352, 1, 'Didalem tahap CA ada kolom corrective action dibawahnya ditulis duedate', '2020-08-07 13:14:47', 1, 'text'),
(39, 352, 1, 'klo statusnya close tanggal close juga dicantumin', '2020-08-07 13:15:06', 1, 'text'),
(40, 352, 1, 'Pas kil add data pada CA yang tertulis create file analisis harusnya ganti jadi Create Corrective Action', '2020-08-07 13:17:17', 1, 'text'),
(41, 352, 1, 'layout CA sama PA beda. satu pop up, satu gak', '2020-08-07 13:17:43', 1, 'text'),
(42, 352, 1, 'Select some option diganti jadi departemen terkait', '2020-08-07 13:19:26', 1, 'text'),
(43, 352, 1, 'Pada tahap CAPA bukan PPIC tapi PIC', '2020-08-07 13:19:55', 1, 'text'),
(44, 1, 352, 'oke sore ya mba dini', '2020-08-10 09:00:27', 0, 'text'),
(45, 7, 1, 'Coba..tes', '2020-08-10 14:17:24', 1, 'text'),
(46, 1, 7, 'pak', '2020-08-10 14:17:26', 1, 'text'),
(47, 7, 1, '😇', '2020-08-10 14:17:33', 1, 'text'),
(48, 1, 7, '😯', '2020-08-10 14:17:37', 1, 'text'),
(49, 1, 7, '27647.xlsx', '2020-08-10 14:17:49', 1, 'file'),
(50, 7, 1, '17599.xlsx', '2020-08-10 14:17:51', 1, 'file'),
(51, 1, 7, '<img class=\'pesan-gambar\' src=\'../gambar/chat/24012.png\'>', '2020-08-10 14:18:04', 1, 'gambar'),
(52, 1, 352, 'coba sore ya mba dini', '2020-08-11 08:07:48', 0, 'text');

-- --------------------------------------------------------

--
-- Table structure for table `online`
--

DROP TABLE IF EXISTS `online`;
CREATE TABLE `online` (
  `online_id` int(11) NOT NULL,
  `online_pengirim` int(11) NOT NULL,
  `online_penerima` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_nama` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_foto` text,
  `user_status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_email`, `user_nama`, `user_password`, `user_foto`, `user_status`) VALUES
(1, 'moehamad', 'MOEHAMAD SALDY', 'e10adc3949ba59abbe56e057f20f883e', '13953_AdminLTELogo1.png', 'offline'),
(2, 'stef', 'STEFANUS LAY', 'e10adc3949ba59abbe56e057f20f883e', 'logo.png', 'offline'),
(3, 'emmy', 'EMMY MAYLAZA', 'e10adc3949ba59abbe56e057f20f883e', 'logo.png', 'offline'),
(4, 'yuniarto', 'YUNIARTO', 'e10adc3949ba59abbe56e057f20f883e', 'logo.png', 'offline'),
(5, 'toni', 'SANTONI', 'e10adc3949ba59abbe56e057f20f883e', 'logo.png', 'offline'),
(6, 'budi', 'BUDI IRWAN FIRMANSYAH', 'e10adc3949ba59abbe56e057f20f883e', 'logo.png', 'offline'),
(7, 'joko', 'JOKO YUANA', 'e10adc3949ba59abbe56e057f20f883e', 'logo.png', 'offline'),
(9, 'bayuedhi', 'MOH. BAYU EDHI WIBOWO', 'e10adc3949ba59abbe56e057f20f883e', 'logo.png', 'offline'),
(14, 'rnd_lyanlie', 'LYANLIE WINARTO', 'e10adc3949ba59abbe56e057f20f883e', 'logo.png', 'offline'),
(15, 'rnd_verycha', 'VERYCHA FINISH WIYA TANIA', 'e10adc3949ba59abbe56e057f20f883e', 'logo.png', 'offline'),
(140, 'rnd_lupita', 'LUPITA CRISTY', 'e10adc3949ba59abbe56e057f20f883e', 'logo.png', 'offline'),
(141, 'rnd_tri', 'TRI LESTARI', 'e10adc3949ba59abbe56e057f20f883e', 'logo.png', 'offline'),
(145, 'rnd_dudut', 'DUDUT YUDHIYONO', 'e10adc3949ba59abbe56e057f20f883e', 'logo.png', 'offline'),
(182, 'rnd_wulan', 'WULAN PUSPITOSARI', 'e10adc3949ba59abbe56e057f20f883e', 'logo.png', 'offline'),
(189, 'rnd_amanda', 'AMANDA PUTRI INTAN GAYATRI', 'e10adc3949ba59abbe56e057f20f883e', 'logo.png', 'offline'),
(192, 'rnd_dicky', 'DICKY PERDANA PUTRA', 'e10adc3949ba59abbe56e057f20f883e', 'logo.png', 'offline'),
(208, 'ia_hertina', 'HERTINA SINURAYA', 'e10adc3949ba59abbe56e057f20f883e', 'logo.png', 'offline'),
(217, 'qa_ika', 'IKA RESTYANI', 'e10adc3949ba59abbe56e057f20f883e', 'logo.png', 'offline'),
(240, 'rnd_oka', 'OKA SYAFRIKA', 'e10adc3949ba59abbe56e057f20f883e', 'logo.png', 'offline'),
(256, 'qa_rita', 'RITA LUTHVIANA', 'e10adc3949ba59abbe56e057f20f883e', 'logo.png', 'offline'),
(265, 'rnd_adhitya', 'ADHITYA WIDHI UTAMA', 'e10adc3949ba59abbe56e057f20f883e', 'logo.png', 'offline'),
(266, 'rnd_fitria', 'FITRIA SYAHDINI', 'e10adc3949ba59abbe56e057f20f883e', 'logo.png', 'offline'),
(285, 'rnd_arfiyah', 'ARFIYAH TRI MEIRINA', 'e10adc3949ba59abbe56e057f20f883e', 'logo.png', 'offline'),
(286, 'qa_ayu', 'AYU WANDIRA PUTRI', 'e10adc3949ba59abbe56e057f20f883e', 'logo.png', 'offline'),
(344, 'rnd_yunda', 'YUNDA ANDINI WULANDARI', 'e10adc3949ba59abbe56e057f20f883e', 'logo.png', 'offline'),
(352, 'qa_dini', 'IHLI ANIS HARDINI', 'e10adc3949ba59abbe56e057f20f883e', 'logo.png', 'offline'),
(402, 'rnd_nina', 'NINA AMINATUR ROHMAH', 'e10adc3949ba59abbe56e057f20f883e', 'logo.png', 'offline'),
(415, 'bd_yulia', 'YULIA HASANAH', 'e10adc3949ba59abbe56e057f20f883e', 'logo.png', 'offline'),
(420, 'rnd_mohamad', 'MOHAMAD LAELY MANSUR', 'e10adc3949ba59abbe56e057f20f883e', 'logo.png', 'offline'),
(423, 'qa_loubna', 'LOUBNA SYLVINA DEWI', 'e10adc3949ba59abbe56e057f20f883e', 'logo.png', 'offline'),
(436, 'rnd_aulia', 'AULIA FARHAN', 'e10adc3949ba59abbe56e057f20f883e', 'logo.png', 'offline'),
(530, 'rnd_rizki', 'RIZKI AMELIA', 'e10adc3949ba59abbe56e057f20f883e', 'logo.png', 'offline'),
(533, 'rnd_kurnia', 'KURNIA AMANDA', 'e10adc3949ba59abbe56e057f20f883e', 'logo.png', 'offline'),
(542, 'qa_nauli', 'NAULI MARSHA ANDIANI', 'e10adc3949ba59abbe56e057f20f883e', 'logo.png', 'offline'),
(548, 'rnd_ridwan', 'RIDWAN ARIFIN', 'e10adc3949ba59abbe56e057f20f883e', 'logo.png', 'offline'),
(576, 'rnd_siti', 'SITI NURFITRIANI', 'e10adc3949ba59abbe56e057f20f883e', 'logo.png', 'offline'),
(582, 'qa_erik', 'ERIK FIRMAN RUSDIANTO', 'e10adc3949ba59abbe56e057f20f883e', 'logo.png', 'offline'),
(583, 'rnd_ratih', 'RATIH DARA SYADILLAH', 'e10adc3949ba59abbe56e057f20f883e', 'logo.png', 'offline'),
(585, 'rnd_desmita', 'DESMITA', 'e10adc3949ba59abbe56e057f20f883e', 'logo.png', 'offline'),
(586, 'rnd_basaria', 'BASARIA SUMARTINI SIMATUPANG', 'e10adc3949ba59abbe56e057f20f883e', 'logo.png', 'offline'),
(593, 'rnd_zaira', 'ZAIRA EVITA', 'e10adc3949ba59abbe56e057f20f883e', 'logo.png', 'offline'),
(609, 'div. head afi_yuniarto', 'YUNIARTO', 'e10adc3949ba59abbe56e057f20f883e', 'logo.png', 'offline'),
(662, 'rnd_eka', 'EKA ROSDIANA', 'e10adc3949ba59abbe56e057f20f883e', 'logo.png', 'offline'),
(668, 'qa_novita', 'NOVITA HANDAYANI', 'e10adc3949ba59abbe56e057f20f883e', 'logo.png', 'offline'),
(670, 'rnd_elizabeth', 'ELIZABETH VIRGILDA', 'e10adc3949ba59abbe56e057f20f883e', 'logo.png', 'offline'),
(681, 'rnd_tuti', 'TUTI ASAROH', 'e10adc3949ba59abbe56e057f20f883e', 'logo.png', 'offline'),
(686, 'rnd_winfika', 'WINFIKA WIBISONO PUTRI', 'e10adc3949ba59abbe56e057f20f883e', 'logo.png', 'offline'),
(688, 'rnd_evy', 'EVY KUSUMASTUTIE', 'e10adc3949ba59abbe56e057f20f883e', 'logo.png', 'offline'),
(697, 'rnd_dessy', 'DESSY KAMALIA', 'e10adc3949ba59abbe56e057f20f883e', 'logo.png', 'offline'),
(703, 'rnd_puti', 'PUTI RAHMI ARIEF', 'e10adc3949ba59abbe56e057f20f883e', 'logo.png', 'offline'),
(714, 'qa_dadan', 'DADAN PEDRIYANS NURCAHYA', 'e10adc3949ba59abbe56e057f20f883e', 'logo.png', 'offline'),
(723, 'rnd_diah', 'DIAH TRI FITRIAH', 'e10adc3949ba59abbe56e057f20f883e', 'logo.png', 'offline'),
(724, 'rnd_rini', 'RINI RADITA', 'e10adc3949ba59abbe56e057f20f883e', 'logo.png', 'offline'),
(725, 'rnd_iin', 'I IN INNAYATUL ULA', 'e10adc3949ba59abbe56e057f20f883e', 'logo.png', 'offline'),
(736, 'qa_ahmad', 'AHMAD APRIANSYAH', 'e10adc3949ba59abbe56e057f20f883e', 'logo.png', 'offline'),
(737, 'rnd_yuni', 'YUNI AZIZA', 'e10adc3949ba59abbe56e057f20f883e', 'logo.png', 'offline'),
(738, 'qa_bella', 'BELLA DAMAYANTI', 'e10adc3949ba59abbe56e057f20f883e', 'logo.png', 'offline'),
(741, 'wh_denny', 'DENNY RACHMADI', 'e10adc3949ba59abbe56e057f20f883e', 'logo.png', 'offline'),
(768, 'rnd_rizky_sp', 'RIZKY SETIYO PUTRI', 'e10adc3949ba59abbe56e057f20f883e', 'logo.png', 'offline'),
(769, 'rnd_rizky_r', 'RIZKY ROMADON', 'e10adc3949ba59abbe56e057f20f883e', 'logo.png', 'offline');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `online`
--
ALTER TABLE `online`
  ADD PRIMARY KEY (`online_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `online`
--
ALTER TABLE `online`
  MODIFY `online_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=770;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
