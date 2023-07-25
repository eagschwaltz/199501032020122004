-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2021 at 10:38 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sicece`
--

-- --------------------------------------------------------

--
-- Table structure for table `file_data`
--

CREATE TABLE `file_data` (
  `id_file` int(20) NOT NULL,
  `nomor_perkara` varchar(50) NOT NULL,
  `jenis_pihak` int(20) NOT NULL,
  `kakel` varchar(100) NOT NULL,
  `ktp_pihak1` varchar(100) NOT NULL,
  `ktp_pihak2` varchar(150) DEFAULT NULL,
  `user_file` varchar(100) NOT NULL,
  `sptjm` varchar(150) DEFAULT NULL,
  `tanggal_upload` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `approve_status` int(2) NOT NULL,
  `tanggal_approve` datetime NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file_data`
--

INSERT INTO `file_data` (`id_file`, `nomor_perkara`, `jenis_pihak`, `kakel`, `ktp_pihak1`, `ktp_pihak2`, `user_file`, `sptjm`, `tanggal_upload`, `approve_status`, `tanggal_approve`, `keterangan`) VALUES
(17, '1/Pdt.G/2021/PA.Pyk', 2, '82021120850571530.pdf', '82021120850571531.pdf', NULL, '82021120850571532.pdf', NULL, '2021-12-15 07:50:45', 0, '0000-00-00 00:00:00', ''),
(18, '2/Pdt.G/2021/PA.Pyk', 1, '82021120850571542.pdf', '82021120850571543.pdf', NULL, '82021120850571544.pdf', NULL, '2021-12-15 07:53:26', 0, '0000-00-00 00:00:00', ''),
(19, '3/Pdt.P/2021/PA.Pyk', 1, '3__Aplikasi_Antrean_Sidang_Badilag.pdf', '3__Aplikasi_Antrean_Sidang_Badilag1.pdf', NULL, '3__Aplikasi_Antrean_Sidang_Badilag2.pdf', NULL, '2021-12-15 07:54:32', 0, '0000-00-00 00:00:00', ''),
(20, '5/Pdt.P/2021/PA.Pyk', 1, 'Instrumen_Perintah_Panggilan.pdf', 'Instrumen_Perintah_Panggilan1.pdf', 'Instrumen_Perintah_Panggilan2.pdf', 'Instrumen_Perintah_Panggilan3.pdf', NULL, '2021-12-15 07:56:16', 0, '0000-00-00 00:00:00', ''),
(21, '454/Pdt.P/2021/PA.Pyk', 1, '82021120850571548.pdf', '82021120850571549.pdf', NULL, '82021120850571550.pdf', NULL, '2021-12-15 08:21:20', 0, '0000-00-00 00:00:00', ''),
(22, '457/Pdt.G/2021/PA.Pyk', 1, 'Instrumen_Perintah_Panggilan7.pdf', 'Instrumen_Perintah_Panggilan8.pdf', NULL, 'Instrumen_Perintah_Panggilan9.pdf', NULL, '2021-12-15 08:31:01', 0, '0000-00-00 00:00:00', ''),
(23, '65/Pdt.P/2021/PA.Pyk', 1, '132_2_UJI_PETIK_SOP_Kak_Alya_(2).pdf', 'Instrumen_Perintah_Panggilan13.pdf', NULL, '3__Aplikasi_Antrean_Sidang_Badilag6.pdf', NULL, '2021-12-15 08:54:01', 0, '0000-00-00 00:00:00', ''),
(24, '45/Pdt.G/2021/PA.Pyk', 1, '82021120850571554.pdf', '82021120850571555.pdf', NULL, '82021120850571556.pdf', NULL, '2021-12-15 12:13:59', 0, '0000-00-00 00:00:00', ''),
(25, '8/Pdt.G/2021/PA.Pyk', 1, '82021120850571560.pdf', '82021120850571561.pdf', NULL, '82021120850571562.pdf', NULL, '2021-12-15 12:43:35', 0, '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `instansi`
--

CREATE TABLE `instansi` (
  `id_instansi` int(20) NOT NULL,
  `nama_instansi` varchar(100) NOT NULL,
  `singkatan` char(50) NOT NULL,
  `logo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_perkara`
--

CREATE TABLE `jenis_perkara` (
  `id_jenis_perkara` int(2) NOT NULL,
  `jenis_perkara` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_perkara`
--

INSERT INTO `jenis_perkara` (`id_jenis_perkara`, `jenis_perkara`) VALUES
(1, 'cerai'),
(2, 'isbat nikah');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_pihak`
--

CREATE TABLE `jenis_pihak` (
  `id_jenis_pihak` int(2) NOT NULL,
  `jenis_pihak` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_pihak`
--

INSERT INTO `jenis_pihak` (`id_jenis_pihak`, `jenis_pihak`) VALUES
(1, 'penggugat'),
(2, 'tergugat'),
(3, 'pemohon'),
(4, 'termohon');

-- --------------------------------------------------------

--
-- Table structure for table `pihak`
--

CREATE TABLE `pihak` (
  `id_pihak` int(20) NOT NULL,
  `pengaju` int(20) NOT NULL,
  `jenis_perkara` int(2) NOT NULL,
  `nama_pihak1` varchar(100) NOT NULL,
  `nama_pihak2` varchar(100) NOT NULL,
  `alamat_pihak1` text NOT NULL,
  `alamat_pihak2` text NOT NULL,
  `nomor_perkara` varchar(50) NOT NULL,
  `pengambilan` varchar(50) NOT NULL,
  `status_anak` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pihak`
--

INSERT INTO `pihak` (`id_pihak`, `pengaju`, `jenis_perkara`, `nama_pihak1`, `nama_pihak2`, `alamat_pihak1`, `alamat_pihak2`, `nomor_perkara`, `pengambilan`, `status_anak`) VALUES
(41, 1, 1, 'Rani ', 'fdgfg', 'sdfdfg', 'aerfser', '454/Pdt.G/2021/PA.Pyk', '1', NULL),
(43, 1, 2, 'riana', 'rion', 'bsk', 'pdg pjg', '65/Pdt.P/2021/PA.Pyk', '1', NULL),
(44, 1, 1, 'Rani ', 'Rian', 'payakumbuh barat', 'kjgjhghv', '45/Pdt.G/2021/PA.Pyk', '1', 'asdfghjk'),
(45, 1, 1, 'sdfsad', 'j', 'adsdf', 'sadfdg', '8/Pdt.G/2021/PA.Pyk', '1', 'sdfdfg');

-- --------------------------------------------------------

--
-- Table structure for table `progress`
--

CREATE TABLE `progress` (
  `id_progress` int(2) NOT NULL,
  `status_progress` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `progress`
--

INSERT INTO `progress` (`id_progress`, `status_progress`) VALUES
(0, 'Belum Terkirim'),
(1, 'Terkirim'),
(2, 'Sedang diverifikasi'),
(3, 'Approve'),
(4, 'Tidak Diterima'),
(5, 'Selesai Dicetak'),
(6, 'Sudah Diambil');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(20) NOT NULL,
  `id_group_fk` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `id_group_fk`, `username`, `password`) VALUES
(1, 1, 'admin', 'admin'),
(2, 2, 'ptsp', 'ptsppayakumbuh');

-- --------------------------------------------------------

--
-- Table structure for table `user_group`
--

CREATE TABLE `user_group` (
  `id_user_group` int(20) NOT NULL,
  `group_level` int(10) NOT NULL,
  `group_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_group`
--

INSERT INTO `user_group` (`id_user_group`, `group_level`, `group_name`) VALUES
(1, 1, 'admin'),
(2, 2, 'ptsp'),
(3, 3, 'capil');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `file_data`
--
ALTER TABLE `file_data`
  ADD PRIMARY KEY (`id_file`);

--
-- Indexes for table `instansi`
--
ALTER TABLE `instansi`
  ADD PRIMARY KEY (`id_instansi`);

--
-- Indexes for table `jenis_perkara`
--
ALTER TABLE `jenis_perkara`
  ADD PRIMARY KEY (`id_jenis_perkara`);

--
-- Indexes for table `jenis_pihak`
--
ALTER TABLE `jenis_pihak`
  ADD PRIMARY KEY (`id_jenis_pihak`);

--
-- Indexes for table `pihak`
--
ALTER TABLE `pihak`
  ADD PRIMARY KEY (`id_pihak`),
  ADD UNIQUE KEY `nomor_perkara` (`nomor_perkara`),
  ADD KEY `id_jenis_pihak_fk` (`pengaju`);

--
-- Indexes for table `progress`
--
ALTER TABLE `progress`
  ADD PRIMARY KEY (`id_progress`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `fk_user` (`id_group_fk`);

--
-- Indexes for table `user_group`
--
ALTER TABLE `user_group`
  ADD PRIMARY KEY (`id_user_group`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `file_data`
--
ALTER TABLE `file_data`
  MODIFY `id_file` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `instansi`
--
ALTER TABLE `instansi`
  MODIFY `id_instansi` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis_perkara`
--
ALTER TABLE `jenis_perkara`
  MODIFY `id_jenis_perkara` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jenis_pihak`
--
ALTER TABLE `jenis_pihak`
  MODIFY `id_jenis_pihak` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pihak`
--
ALTER TABLE `pihak`
  MODIFY `id_pihak` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_group`
--
ALTER TABLE `user_group`
  MODIFY `id_user_group` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pihak`
--
ALTER TABLE `pihak`
  ADD CONSTRAINT `id_jenis_pihak_fk` FOREIGN KEY (`pengaju`) REFERENCES `jenis_pihak` (`id_jenis_pihak`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`id_group_fk`) REFERENCES `user_group` (`id_user_group`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
