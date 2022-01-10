-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2022 at 04:04 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wbsabsensikuonlinev1`
--

-- --------------------------------------------------------

--
-- Table structure for table `building`
--

CREATE TABLE `building` (
  `building_id` int(8) NOT NULL,
  `code` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `building_scanner` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `building`
--

INSERT INTO `building` (`building_id`, `code`, `name`, `address`, `building_scanner`) VALUES
(1, 'SWGA4/2021', 'Kantor Pusat - Gedung B', '401XD Group, Jl. Sumbawa, Ulak Karang Utara, Padang, Sumatera Barat, 25133', ''),
(2, 'SWZ8Z/2021', 'Kantor Pusat - Gedung A', '401XD Group, Jl. Sumbawa, Ulak Karang Utara, Padang, Sumatera Barat, 25133', ''),
(3, 'SWYRA/2021', 'Kantor Pusat - Gedung C', '401XD Group, Jl. Sumbawa, Ulak Karang Utara, Padang, Sumatera Barat, 25133', ''),
(4, 'SWQM6/2021', 'Kantor Pusat - Gedung D', '401XD Group, Jl. Sumbawa, Ulak Karang Utara, Padang, Sumatera Barat, 25133', '');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `employees_code` varchar(20) NOT NULL,
  `employees_email` varchar(30) NOT NULL,
  `employees_password` varchar(100) NOT NULL,
  `employees_name` varchar(50) NOT NULL,
  `position_id` int(5) NOT NULL,
  `shift_id` int(11) NOT NULL,
  `building_id` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `created_login` datetime NOT NULL,
  `created_cookies` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `employees_code`, `employees_email`, `employees_password`, `employees_name`, `position_id`, `shift_id`, `building_id`, `photo`, `created_login`, `created_cookies`) VALUES
(33, 'OM001-2022', 'test123@gmail.com', 'acd2bcf0a751e78ba7a1904d55cb26b00b7b5c21ea1c7a91b373c2cf44ae0b29', 'zxczxc', 1, 5, 1, '', '2022-01-10 18:56:06', 'cf5831de3973012ae4f2ee60242fb617'),
(34, 'OM002-2022', 'test321@gmail.com', 'acd2bcf0a751e78ba7a1904d55cb26b00b7b5c21ea1c7a91b373c2cf44ae0b29', 'bagjasn', 1, 5, 2, '', '2022-01-10 18:56:06', 'cf5831de3973012ae4f2ee60242fb617'),
(35, 'OM003-2022', 'test222@gmail.com', 'acd2bcf0a751e78ba7a1904d55cb26b00b7b5c21ea1c7a91b373c2cf44ae0b29', 'bagjazxc', 2, 5, 3, '', '2022-01-10 18:56:06', 'cf5831de3973012ae4f2ee60242fb617'),
(36, 'OM004-2022', 'test221@gmail.com', 'acd2bcf0a751e78ba7a1904d55cb26b00b7b5c21ea1c7a91b373c2cf44ae0b29', 'bagjasn', 1, 4, 2, '', '2022-01-10 18:56:06', 'cf5831de3973012ae4f2ee60242fb617'),
(37, 'OM005-2022', '222@gmail.com', 'acd2bcf0a751e78ba7a1904d55cb26b00b7b5c21ea1c7a91b373c2cf44ae0b29', 'azxczxc', 2, 4, 2, '', '2022-01-10 18:56:06', 'cf5831de3973012ae4f2ee60242fb617'),
(38, 'OM006-2022', '111@gmail.com', 'acd2bcf0a751e78ba7a1904d55cb26b00b7b5c21ea1c7a91b373c2cf44ae0b29', 'zzxczxczxca', 2, 4, 2, '', '2022-01-10 18:56:06', 'cf5831de3973012ae4f2ee60242fb617');

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id` int(245) NOT NULL,
  `name` varchar(245) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`id`, `name`) VALUES
(1, 'PT.SUMMARECON AGUNG,Tbk'),
(2, 'RUMAH SAKIT ANNISA'),
(3, 'PT.DAECHANG AUTOMOTIVE INDONESIA'),
(4, 'PT.HAB DONG INDO'),
(5, 'PT.EUNSUNG RAYA INDONESIA'),
(6, 'PT.TOP ABADI'),
(7, 'PT.KORINA ABADI TEHNIK'),
(8, 'PT.KORINA GLOBAL TEHNIK'),
(9, 'PT.HANSUNG ELEKTRONIK INDONESIA'),
(10, 'PT.JIWON VENIX INDONESIA'),
(11, 'PT.ARSITEK HIGHPOLYMER'),
(12, 'PT.SEJONG SUMMIT INDONESIA'),
(13, 'PT.HANSUNG ELEKTRONIK INDONESIA'),
(14, 'PT.TSUHIYOSHI PROCORE INDONESIA'),
(15, 'HATAKEN LOGISTICS INDONESIA'),
(16, 'SHINSUNG AUTOMOTIVE INDONESIA'),
(17, 'PT.ASAHI SYINCROTECH INDONESIA'),
(18, 'PT.BASUKI GRAHA FABRIKATAMA'),
(19, 'PT.KUMOHI ENGINEERING INDONESIA'),
(20, 'PT.KJ TECH INDONESIA'),
(21, 'PT.KHN METAL INDONESIA'),
(22, 'PT.CITRA GALVANIZING INDONESIA'),
(23, 'PT.TIRTA JAYA');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `position_id` int(245) NOT NULL,
  `position_name` varchar(245) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`position_id`, `position_name`) VALUES
(1, 'STAFF'),
(2, 'KARYAWAN');

-- --------------------------------------------------------

--
-- Table structure for table `position_karyawan`
--

CREATE TABLE `position_karyawan` (
  `position_karyawan_id` int(245) NOT NULL,
  `position_karyawan_name` varchar(245) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `position_keamanan`
--

CREATE TABLE `position_keamanan` (
  `position_id` int(5) NOT NULL,
  `position_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `position_keamanan`
--

INSERT INTO `position_keamanan` (`position_id`, `position_name`) VALUES
(8, 'CHIEF'),
(9, 'ANGGOTA');

-- --------------------------------------------------------

--
-- Table structure for table `presence`
--

CREATE TABLE `presence` (
  `presence_id` int(11) NOT NULL,
  `employees_id` int(11) NOT NULL,
  `presence_date` date NOT NULL,
  `time_in` time NOT NULL,
  `time_out` time NOT NULL,
  `picture_in` varchar(150) NOT NULL,
  `picture_out` varchar(150) NOT NULL,
  `present_id` int(11) NOT NULL COMMENT 'Masuk,Pulang,Tidak Hadir',
  `presence_address` text NOT NULL,
  `information` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `present_status`
--

CREATE TABLE `present_status` (
  `present_id` int(6) NOT NULL,
  `present_name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `present_status`
--

INSERT INTO `present_status` (`present_id`, `present_name`) VALUES
(1, 'Hadir'),
(2, 'Sakit'),
(3, 'Izin');

-- --------------------------------------------------------

--
-- Table structure for table `shift`
--

CREATE TABLE `shift` (
  `shift_id` int(11) NOT NULL,
  `shift_name` varchar(20) NOT NULL,
  `time_in` time NOT NULL,
  `time_out` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shift`
--

INSERT INTO `shift` (`shift_id`, `shift_name`, `time_in`, `time_out`) VALUES
(3, 'SHIFT SIANG', '13:00:00', '17:00:00'),
(4, 'SHIFT PAGI', '07:00:00', '11:00:00'),
(5, 'FULL TIME', '07:00:00', '17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `site`
--

CREATE TABLE `site` (
  `site_id` int(4) NOT NULL,
  `site_url` varchar(100) NOT NULL,
  `site_name` varchar(50) NOT NULL,
  `site_phone` char(12) NOT NULL,
  `site_address` text NOT NULL,
  `site_description` text NOT NULL,
  `site_logo` varchar(50) NOT NULL,
  `site_email` varchar(30) NOT NULL,
  `site_email_domain` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `site`
--

INSERT INTO `site` (`site_id`, `site_url`, `site_name`, `site_phone`, `site_address`, `site_description`, `site_logo`, `site_email`, `site_email_domain`) VALUES
(1, 'http://localhost/AbsensiOnlineV1/', 'Absensi Online - Foto Selfie & Auto Detect Lokasi', '082377823390', '401XD Group, Jl. Sumbawa, Ulak Karang Utara, Kec. Padang Utara, Kota Padang, Sumatera Barat 25133', 'Aplikasi Sistem Absensi Online Berbasis Foto Selfie dan Auto Detect Lokasi. Absen Karyawan Kini Jadi Lebih Efisien. Sistem absensi dengan verifikasi foto selfie atau webcam, dilengkapi fitur deteksi lokasi pengguna yang akurat.', 'logo-absensipng.png', 'mycoding@401xd.com', 'mycoding@401xd.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fullname` varchar(40) NOT NULL,
  `registered` datetime NOT NULL,
  `created_login` datetime NOT NULL,
  `last_login` datetime NOT NULL,
  `session` varchar(100) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `browser` varchar(30) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `email`, `password`, `fullname`, `registered`, `created_login`, `last_login`, `session`, `ip`, `browser`, `level`) VALUES
(1, 'admin', 'mycoding@401xd.com', '88b3340abaa6acbf87abe45f68fa8960224c1e36f6a96433bcbc490c84c9c6d2', 'ADMIN', '2021-02-03 10:22:00', '2021-07-02 13:40:09', '2021-07-02 13:40:16', '-', '1', 'Google Crome', 1),
(3, 'operator', '401xdssh@gmail.com', 'c0fc26e449ec10285f6b28a7f92b91dc4497af26dbf02aade5bd798c567390dc', 'OPERATOR', '2021-06-24 22:46:00', '2021-07-02 13:31:19', '2021-07-02 13:39:25', '-', '1', 'Google Crome', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_level`
--

CREATE TABLE `user_level` (
  `level_id` int(4) NOT NULL,
  `level_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_level`
--

INSERT INTO `user_level` (`level_id`, `level_name`) VALUES
(1, 'Administrator'),
(2, 'Operator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `building`
--
ALTER TABLE `building`
  ADD PRIMARY KEY (`building_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`position_id`);

--
-- Indexes for table `position_karyawan`
--
ALTER TABLE `position_karyawan`
  ADD PRIMARY KEY (`position_karyawan_id`);

--
-- Indexes for table `position_keamanan`
--
ALTER TABLE `position_keamanan`
  ADD PRIMARY KEY (`position_id`);

--
-- Indexes for table `presence`
--
ALTER TABLE `presence`
  ADD PRIMARY KEY (`presence_id`);

--
-- Indexes for table `present_status`
--
ALTER TABLE `present_status`
  ADD PRIMARY KEY (`present_id`);

--
-- Indexes for table `shift`
--
ALTER TABLE `shift`
  ADD PRIMARY KEY (`shift_id`);

--
-- Indexes for table `site`
--
ALTER TABLE `site`
  ADD PRIMARY KEY (`site_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_level`
--
ALTER TABLE `user_level`
  ADD PRIMARY KEY (`level_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `building`
--
ALTER TABLE `building`
  MODIFY `building_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id` int(245) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `position_id` int(245) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `position_karyawan`
--
ALTER TABLE `position_karyawan`
  MODIFY `position_karyawan_id` int(245) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `position_keamanan`
--
ALTER TABLE `position_keamanan`
  MODIFY `position_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `presence`
--
ALTER TABLE `presence`
  MODIFY `presence_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `present_status`
--
ALTER TABLE `present_status`
  MODIFY `present_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `shift`
--
ALTER TABLE `shift`
  MODIFY `shift_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `site`
--
ALTER TABLE `site`
  MODIFY `site_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_level`
--
ALTER TABLE `user_level`
  MODIFY `level_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
