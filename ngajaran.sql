-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2021 at 03:54 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ngajaran`
--

-- --------------------------------------------------------

--
-- Table structure for table `ketua_rt`
--

CREATE TABLE `ketua_rt` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `rt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ketua_rt`
--

INSERT INTO `ketua_rt` (`id`, `nama`, `rt`) VALUES
(1, 'Andika', '1'),
(2, 'Ozi', '2'),
(3, 'Dita', '3'),
(4, 'Rena', '4'),
(5, 'Ambar', '5'),
(6, 'Aurel', '6'),
(7, 'Zahra', '7'),
(8, 'Aji', '8'),
(9, 'Novi', '9');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'Admin', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(100) NOT NULL,
  `sub_menu_PUSKB` varchar(100) NOT NULL,
  `sub_menu_KelKg` varchar(100) NOT NULL,
  `sub_menu_RentangUsia` varchar(100) NOT NULL,
  `sub_menu_DataWarga` varchar(100) NOT NULL,
  `url_Puskb` varchar(100) NOT NULL,
  `url_KelKeg` varchar(100) NOT NULL,
  `url_dataWarga` varchar(100) NOT NULL,
  `url_rentangUsia` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `rt` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `menu`, `sub_menu_PUSKB`, `sub_menu_KelKg`, `sub_menu_RentangUsia`, `sub_menu_DataWarga`, `url_Puskb`, `url_KelKeg`, `url_dataWarga`, `url_rentangUsia`, `url`, `rt`) VALUES
(1, 'Data RT 01', 'PUS dan KB', 'Kelompok Kegiatan', 'Rentang Usia', 'Data Warga', 'Admin/dataPUSKB', 'Admin/dataKelKg', 'admin/dataWarga', 'admin/dataRentangUsia', 'admin/dataAdmin', '1'),
(2, 'Data RT 02', 'PUS dan KB', 'Kelompok Kegiatan', 'Rentang Usia', 'Data Warga', 'Admin/dataPUSKB', 'Admin/dataKelKg', 'admin/dataWarga', 'admin/dataRentangUsia', 'admin/dataAdmin', '2'),
(3, 'Data RT 03', 'PUS dan KB', 'Kelompok Kegiatan', 'Rentang Usia', 'Data Warga', 'Admin/dataPUSKB', 'Admin/dataKelKg', 'admin/dataWarga', 'admin/dataRentangUsia', 'admin/dataAd', '3'),
(4, 'Data RT 04', 'PUS dan KB', 'Kelompok Kegiatan', 'Rentang Usia', 'Data Warga', 'Admin/dataPUSKB', 'Admin/dataKelKg', 'admin/dataWarga', 'Admin/dataRentangUsia', 'Admin/dataPUSKB1', '4'),
(5, 'Data RT 05', 'PUS dan KB', 'Kelompok Kegiatan', 'Rentang Usia', 'Data Warga', 'Admin/dataPUSKB', 'Admin/dataKelKg', 'admin/dataWarga', 'Admin/dataRentangUsia', 'Admin/dataPUSKB', '5'),
(6, 'Data RT 06', 'PUS dan KB', 'Kelompok Kegiatan', 'Rentang Usia', 'Data Warga', 'Admin/dataPUSKB', 'Admin/dataKelKg', 'admin/dataWarga', 'Admin/dataRentangUsia', 'Admin/dataPUSKB1', '6'),
(7, 'Data RT 07', 'PUS dan KB', 'Kelompok Kegiatan', 'Rentang Usia', 'Data Warga', 'Admin/dataPUSKB', 'Admin/dataKelKg', 'admin/dataWarga', 'Admin/dataRentangUsia', 'Admin/dataPUSKB1', '7'),
(8, 'Data RT 08', 'PUS dan KB', 'Kelompok Kegiatan', 'Rentang Usia', 'Data Warga', 'Admin/dataPUSKB', 'Admin/dataKelKg', 'admin/dataWarga', 'Admin/dataRentangUsia', 'Admin/dataPUSKB1', '8'),
(9, 'Data RT 09', 'PUS dan KB', 'Kelompok Kegiatan', 'Rentang Usia', 'Data Warga', 'Admin/dataPUSKB', 'Admin/dataKelKg', 'admin/dataWarga', 'Admin/dataRentangUsia', 'Admin/dataPUSKB1', '9');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_warga`
--

CREATE TABLE `tbl_data_warga` (
  `id` int(11) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `bpjs` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `no_kk` varchar(100) NOT NULL,
  `rt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_data_warga`
--

INSERT INTO `tbl_data_warga` (`id`, `nik`, `nama`, `tanggal_lahir`, `jenis_kelamin`, `bpjs`, `status`, `no_kk`, `rt`) VALUES
(7, '186710011', 'Ardiasnyah', '2021-02-04', 'Laki-Laki', '1212', 'Kepala Keluarga', '22211212', '1'),
(8, '212121', 'Anisa', '2017-02-07', 'Perempuan', '3232', 'Ibu Rumah Tanggal', '', '1'),
(9, '12345678923456745', 'M Andika Riski', '2007-02-07', 'Laki-Laki', '1234567890345', 'Kepala Keluarga', '12345678901234567', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelompok_kegiatan`
--

CREATE TABLE `tbl_kelompok_kegiatan` (
  `id` int(11) NOT NULL,
  `kepala_keluarga` varchar(100) NOT NULL,
  `jumlah_anggota_keluarga` varchar(100) NOT NULL,
  `bkb` enum('ya','tidak') NOT NULL,
  `bkr` enum('ya','tidak') NOT NULL,
  `bkl` enum('ya','tidak') NOT NULL,
  `uppks` enum('ya','tidak') NOT NULL,
  `pik_r` enum('ya','tidak') NOT NULL,
  `rt` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kelompok_kegiatan`
--

INSERT INTO `tbl_kelompok_kegiatan` (`id`, `kepala_keluarga`, `jumlah_anggota_keluarga`, `bkb`, `bkr`, `bkl`, `uppks`, `pik_r`, `rt`) VALUES
(4, 'Joko', '4', 'ya', 'ya', 'ya', 'tidak', 'ya', '1'),
(7, 'Parman', '4', 'tidak', 'ya', 'ya', 'ya', 'ya', '2'),
(10, 'Joni', '2', 'tidak', 'ya', 'ya', 'ya', 'ya', '1'),
(11, 'Supri', '1', 'ya', 'ya', 'ya', 'ya', 'ya', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pusdankb`
--

CREATE TABLE `tbl_pusdankb` (
  `id` int(11) NOT NULL,
  `nama_istri` varchar(100) NOT NULL,
  `nama_suami` varchar(100) NOT NULL,
  `ttl_istri` date NOT NULL,
  `ttl_suami` date NOT NULL,
  `jumlah_anak` varchar(100) NOT NULL,
  `umur_anak_terkecil` varchar(100) NOT NULL,
  `kesertaan_kb` varchar(100) NOT NULL,
  `rt` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pusdankb`
--

INSERT INTO `tbl_pusdankb` (`id`, `nama_istri`, `nama_suami`, `ttl_istri`, `ttl_suami`, `jumlah_anak`, `umur_anak_terkecil`, `kesertaan_kb`, `rt`) VALUES
(22, 'Aminah', 'Fauzi', '2021-02-23', '2021-02-07', '2', '12', 'PIL', '7'),
(23, 'Jamila', 'Supri', '2021-02-09', '2021-02-16', '2', '12', 'PIL', '9'),
(24, 'Jamila', 'Sarpi', '2021-02-17', '2021-02-01', '2', '2', 'PIL', '2'),
(25, 'jamila', 'Supri', '2021-02-15', '2021-02-15', '5', '3', 'PIL', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rentang_usia`
--

CREATE TABLE `tbl_rentang_usia` (
  `id` int(11) NOT NULL,
  `umur` varchar(100) NOT NULL,
  `laki_laki` int(11) NOT NULL,
  `perempuan` int(11) NOT NULL,
  `rt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_rentang_usia`
--

INSERT INTO `tbl_rentang_usia` (`id`, `umur`, `laki_laki`, `perempuan`, `rt`) VALUES
(1, '0 - 4', 3, 3, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ketua_rt`
--
ALTER TABLE `ketua_rt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_data_warga`
--
ALTER TABLE `tbl_data_warga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kelompok_kegiatan`
--
ALTER TABLE `tbl_kelompok_kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pusdankb`
--
ALTER TABLE `tbl_pusdankb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_rentang_usia`
--
ALTER TABLE `tbl_rentang_usia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ketua_rt`
--
ALTER TABLE `ketua_rt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_data_warga`
--
ALTER TABLE `tbl_data_warga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_kelompok_kegiatan`
--
ALTER TABLE `tbl_kelompok_kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_pusdankb`
--
ALTER TABLE `tbl_pusdankb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_rentang_usia`
--
ALTER TABLE `tbl_rentang_usia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
