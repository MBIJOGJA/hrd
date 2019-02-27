-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2019 at 09:06 AM
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
-- Database: `sistempegawai`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `id_absen` int(10) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `id_shift` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `jam_masuk` time NOT NULL,
  `jam_pulang` time NOT NULL,
  `keterangan_masuk` varchar(100) NOT NULL,
  `keterangan_pulang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`id_absen`, `nip`, `id_shift`, `tanggal`, `jam_masuk`, `jam_pulang`, `keterangan_masuk`, `keterangan_pulang`) VALUES
(2, 'MBI0002', 1, '2018-05-02', '06:36:51', '00:00:00', 'tepat', '-');

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id` int(5) NOT NULL,
  `nm_lengkap` varchar(100) DEFAULT NULL,
  `jeniskelamin` enum('Laki-laki','Perempuan') DEFAULT NULL,
  `kewarganegaraan` varchar(100) DEFAULT NULL,
  `alamat_sesuai_ktp` text,
  `alamat_domisil` text,
  `phone` char(12) DEFAULT NULL,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `agama` varchar(100) DEFAULT NULL,
  `gol_darah` varchar(100) DEFAULT NULL,
  `status_pernikahan` varchar(100) DEFAULT NULL,
  `tinggi_bdn` int(10) DEFAULT NULL,
  `berat_bdn` int(10) DEFAULT NULL,
  `no_ktp` char(16) DEFAULT NULL,
  `no_rek` char(15) DEFAULT NULL,
  `nm_bank` varchar(100) DEFAULT NULL,
  `nm_pemilik_rek` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `nm_lengkap`, `jeniskelamin`, `kewarganegaraan`, `alamat_sesuai_ktp`, `alamat_domisil`, `phone`, `tempat_lahir`, `tgl_lahir`, `agama`, `gol_darah`, `status_pernikahan`, `tinggi_bdn`, `berat_bdn`, `no_ktp`, `no_rek`, `nm_bank`, `nm_pemilik_rek`) VALUES
(4, 'q', 'Laki-laki', 'q', 'q', 'q', 'q', 'q', '2019-01-01', 'Islam', 'q', 'Belum Menikah', 0, 0, 'q', 'q', 'q', 'q'),
(5, 'q', 'Laki-laki', 'q', 'q', 'q', 'q', 'q', '2019-01-01', 'Islam', 'q', 'Belum Menikah', 0, 0, 'q', 'q', 'q', 'q'),
(6, 'q', 'Laki-laki', 'q', 'q', 'q', 'q', 'q', '2019-01-01', 'Islam', 'q', 'Belum Menikah', 0, 0, 'q', 'q', 'q', 'q'),
(7, 'q', 'Laki-laki', 'q', 'q', 'q', 'q', 'q', '2019-01-01', 'Islam', 'q', 'Belum Menikah', 0, 0, 'q', 'q', 'q', 'q'),
(8, 'q', 'Laki-laki', 'q', 'q', 'q', 'q', 'q', '2019-01-01', 'Islam', 'q', 'Belum Menikah', 0, 0, 'q', 'q', 'q', 'q'),
(9, 'q', 'Laki-laki', 'q', 'q', 'q', 'q', 'q', '2019-01-01', 'Islam', 'q', 'Belum Menikah', 0, 0, 'q', 'q', 'q', 'q'),
(10, 'q', 'Laki-laki', 'q', 'q', 'q', 'q', 'q', '2019-01-01', 'Islam', 'q', 'Belum Menikah', 0, 0, 'q', 'q', 'q', 'q'),
(11, 'q', 'Laki-laki', 'q', 'q', 'q', 'q', 'q', '2019-01-01', 'Islam', 'q', 'Belum Menikah', 0, 0, 'q', 'q', 'q', 'q'),
(12, 'q', 'Laki-laki', 'q', 'q', 'q', 'q', 'q', '2019-01-01', 'Islam', 'q', 'Belum Menikah', 0, 0, 'q', 'q', 'q', 'q'),
(13, 't', '', 't', 't', 't', 't', 't', '0000-00-00', 'Pilih', 't', 'Pilih', 0, 0, 't', 't', 't', 't'),
(14, 't', '', 't', 't', 't', 't', 't', '0000-00-00', 'Pilih', 't', 'Pilih', 0, 0, 't', 't', 't', 't'),
(15, 't', '', 't', 't', 't', 't', 't', '0000-00-00', 'Pilih', 't', 'Pilih', 0, 0, 't', 't', 't', 't'),
(16, 't', '', 't', 't', 't', 't', 't', '0000-00-00', 'Pilih', 't', 'Pilih', 0, 0, 't', 't', 't', 't'),
(17, 't', '', 't', 't', 't', 't', 't', '0000-00-00', 'Pilih', 't', 'Pilih', 0, 0, 't', 't', 't', 't'),
(18, 't', '', 't', 't', 't', 't', 't', '0000-00-00', 'Pilih', 't', 'Pilih', 0, 0, 't', 't', 't', 't'),
(19, 't', '', 't', 't', 't', 't', 't', '0000-00-00', 'Pilih', 't', 'Pilih', 0, 0, 't', 't', 't', 't'),
(20, 't', '', 't', 't', 't', 't', 't', '0000-00-00', 'Pilih', 't', 'Pilih', 0, 0, 't', 't', 't', 't'),
(21, 't', '', 't', 't', 't', 't', 't', '0000-00-00', 'Pilih', 't', 'Pilih', 0, 0, 't', 't', 't', 't'),
(22, 't', '', 't', 't', 't', 't', 't', '0000-00-00', 'Pilih', 't', 'Pilih', 0, 0, 't', 't', 't', 't'),
(23, 't', '', 't', 't', 't', 't', 't', '0000-00-00', 'Pilih', 't', 'Pilih', 0, 0, 't', 't', 't', 't'),
(24, 't', '', 't', 't', 't', 't', 't', '0000-00-00', 'Pilih', 't', 'Pilih', 0, 0, 't', 't', 't', 't'),
(25, 't', '', 't', 't', 't', 't', 't', '0000-00-00', 'Pilih', 't', 'Pilih', 0, 0, 't', 't', 't', 't'),
(26, 't', '', 't', 't', 't', 't', 't', '0000-00-00', 'Pilih', 't', 'Pilih', 0, 0, 't', 't', 't', 't'),
(27, 'q', '', 'q', 'q', 'q', 'q', 'q', '0000-00-00', 'Pilih', 'q', 'Pilih', 0, 0, 'q', 'q', 'q', 'q'),
(28, 'q', '', 'q', 'q', 'q', 'q', 'q', '0000-00-00', 'Pilih', 'q', 'Pilih', 0, 0, 'q', 'q', 'q', 'q'),
(29, 'q', '', 'q', 'q', 'q', 'q', 'q', '0000-00-00', 'Pilih', 'q', 'Pilih', 0, 0, 'q', 'q', 'q', 'q'),
(30, 'q', '', 'q', 'q', 'q', 'q', 'q', '0000-00-00', 'Pilih', 'q', 'Pilih', 0, 0, 'q', 'q', 'q', 'q'),
(31, 'q', '', 'q', 'q', 'q', 'q', 'q', '0000-00-00', 'Pilih', 'q', 'Pilih', 0, 0, 'q', 'q', 'q', 'q'),
(32, 'q', '', 'q', 'q', 'q', 'q', 'q', '0000-00-00', 'Pilih', 'q', 'Pilih', 0, 0, 'q', 'q', 'q', 'q'),
(33, 'q', '', 'q', 'q', 'q', 'q', 'q', '0000-00-00', 'Pilih', 'q', 'Pilih', 0, 0, 'q', 'q', 'q', 'q'),
(34, 'q', '', 'q', 'q', 'q', 'q', 'q', '0000-00-00', 'Pilih', 'q', 'Pilih', 0, 0, 'q', 'q', 'q', 'q'),
(35, 'q', '', 'q', 'q', 'q', 'q', 'q', '0000-00-00', 'Pilih', 'q', 'Pilih', 0, 0, 'q', 'q', 'q', 'q'),
(36, 'q', '', 'q', 'q', 'q', 'q', 'q', '0000-00-00', 'Pilih', 'q', 'Pilih', 0, 0, 'q', 'q', 'q', 'q'),
(37, 'a', '', 'a', 'a', 'a', 'a', 'a', '0000-00-00', 'Pilih', 'a', 'Pilih', 0, 0, 'a', 'a', 'a', 'a'),
(38, 'a', '', 'a', 'a', 'a', 'a', 'a', '0000-00-00', 'Pilih', 'a', 'Pilih', 0, 0, 'a', 'a', 'a', 'a'),
(39, '', '', '', '', '', '', '', '0000-00-00', '', '', '', 0, 0, '', '', '', ''),
(40, 'q', '', 'q', 'q', 'q', 'q', 'q', '0000-00-00', 'Pilih', 'q', 'Pilih', 0, 0, 'q', 'q', 'q', 'q');

-- --------------------------------------------------------

--
-- Table structure for table `cuti`
--

CREATE TABLE `cuti` (
  `id_cuti` int(10) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `periode` int(4) NOT NULL,
  `jml_cuti` int(10) NOT NULL,
  `sisa_cuti` int(10) NOT NULL,
  `flag_status` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cuti`
--

INSERT INTO `cuti` (`id_cuti`, `nip`, `periode`, `jml_cuti`, `sisa_cuti`, `flag_status`) VALUES
(5, 'MBI0001', 2018, 12, 8, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `datakeluarga`
--

CREATE TABLE `datakeluarga` (
  `id` int(5) NOT NULL,
  `nm_ayah` varchar(100) DEFAULT NULL,
  `usia_ayah` int(10) DEFAULT NULL,
  `pend_terakhir_ayah` varchar(100) DEFAULT NULL,
  `pekerjaan_ayah` varchar(100) DEFAULT NULL,
  `nm_ibu` varchar(100) DEFAULT NULL,
  `usia_ibu` int(10) DEFAULT NULL,
  `pend_terakhir_ibu` varchar(100) DEFAULT NULL,
  `pekerjaan_ibu` varchar(100) DEFAULT NULL,
  `nm_si` varchar(100) DEFAULT NULL,
  `usia_si` int(10) DEFAULT NULL,
  `pend_si` varchar(100) DEFAULT NULL,
  `kerja_si` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datakeluarga`
--

INSERT INTO `datakeluarga` (`id`, `nm_ayah`, `usia_ayah`, `pend_terakhir_ayah`, `pekerjaan_ayah`, `nm_ibu`, `usia_ibu`, `pend_terakhir_ibu`, `pekerjaan_ibu`, `nm_si`, `usia_si`, `pend_si`, `kerja_si`) VALUES
(1, 'q', 0, 'q', 'q', 'q', 0, 'q', 'q', 'q', 0, 'q', 'q'),
(2, 'q', 0, 'q', 'q', 'q', 0, 'q', 'q', 'q', 0, 'q', 'q'),
(3, 'q', 0, 'q', 'q', 'q', 0, 'q', 'q', 'q', 0, 'q', 'q'),
(4, 'q', 0, 'q', 'q', 'q', 0, 'q', 'q', 'q', 0, 'q', 'q'),
(5, 'q', 0, 'q', 'q', 'q', 0, 'q', 'q', 'q', 0, 'q', 'q'),
(6, 'q', 0, 'q', 'q', 'q', 0, 'q', 'q', 'q', 0, 'q', 'q'),
(7, 'q', 0, 'q', 'q', 'q', 0, 'q', 'q', 'q', 0, 'q', 'q'),
(8, 'q', 0, 'q', 'q', 'q', 0, 'q', 'q', 'q', 0, 'q', 'q'),
(9, 't', 0, 't', 't', 't', 0, 't', 't', 't', 0, 't', 't'),
(10, 't', 0, 't', 't', 't', 0, 't', 't', 't', 0, 't', 't'),
(11, 't', 0, 't', 't', 't', 0, 't', 't', 't', 0, 't', 't'),
(12, 't', 0, 't', 't', 't', 0, 't', 't', 't', 0, 't', 't'),
(13, 't', 0, 't', 't', 't', 0, 't', 't', 't', 0, 't', 't'),
(14, 't', 0, 't', 't', 't', 0, 't', 't', 't', 0, 't', 't'),
(15, 't', 0, 't', 't', 't', 0, 't', 't', 't', 0, 't', 't'),
(16, 't', 0, 't', 't', 't', 0, 't', 't', 't', 0, 't', 't'),
(17, 't', 0, 't', 't', 't', 0, 't', 't', 't', 0, 't', 't'),
(18, 't', 0, 't', 't', 't', 0, 't', 't', 't', 0, 't', 't'),
(19, 't', 0, 't', 't', 't', 0, 't', 't', 't', 0, 't', 't'),
(20, 't', 0, 't', 't', 't', 0, 't', 't', 't', 0, 't', 't'),
(21, 't', 0, 't', 't', 't', 0, 't', 't', 't', 0, 't', 't'),
(22, 't', 0, 't', 't', 't', 0, 't', 't', 't', 0, 't', 't'),
(23, 'q', 0, 'q', 'q', 'q', 0, 'q', 'q', 'q', 0, 'qq', 'q'),
(24, 'q', 0, 'q', 'q', 'q', 0, 'q', 'q', 'q', 0, 'qq', 'q'),
(25, 'q', 0, 'q', 'q', 'q', 0, 'q', 'q', 'q', 0, 'qq', 'q'),
(26, 'q', 0, 'q', 'q', 'q', 0, 'q', 'q', 'q', 0, 'qq', 'q'),
(27, 'q', 0, 'q', 'q', 'q', 0, 'q', 'q', 'q', 0, 'qq', 'q'),
(28, 'q', 0, 'q', 'q', 'q', 0, 'q', 'q', 'q', 0, 'qq', 'q'),
(29, 'q', 0, 'q', 'q', 'q', 0, 'q', 'q', 'q', 0, 'qq', 'q'),
(30, 'q', 0, 'q', 'q', 'q', 0, 'q', 'q', 'q', 0, 'qq', 'q'),
(31, 'q', 0, 'q', 'q', 'q', 0, 'q', 'q', 'q', 0, 'qq', 'q'),
(32, 'q', 0, 'q', 'q', 'q', 0, 'q', 'q', 'q', 0, 'qq', 'q'),
(33, 'a', 0, 'a', 'a', 'a', 0, 'a', 'a', 'a', 0, 'a', 'a'),
(34, 'a', 0, 'a', 'a', 'a', 0, 'a', 'a', 'a', 0, 'a', 'a'),
(35, '', 0, '', '', '', 0, '', '', '', 0, '', ''),
(36, 'q', 0, 'q', 'q', 'q', 0, 'q', 'q', 'q', 0, 'q', 'q');

-- --------------------------------------------------------

--
-- Table structure for table `detailkeluarga`
--

CREATE TABLE `detailkeluarga` (
  `id` int(11) NOT NULL,
  `nm_saudara` varchar(100) NOT NULL,
  `usia_saudara1` int(3) NOT NULL,
  `pend_terakhir_saudara1` varchar(20) NOT NULL,
  `pekerjaan_saudara1` varchar(100) NOT NULL,
  `nm_anak` varchar(100) NOT NULL,
  `usia_anak` int(3) NOT NULL,
  `jk_anak` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detailkeluarga`
--

INSERT INTO `detailkeluarga` (`id`, `nm_saudara`, `usia_saudara1`, `pend_terakhir_saudara1`, `pekerjaan_saudara1`, `nm_anak`, `usia_anak`, `jk_anak`) VALUES
(8, '', 0, '', '', '', 0, ''),
(9, '', 0, '', '', '', 0, ''),
(10, '', 0, '', '', '', 0, ''),
(11, '', 0, '', '', '', 0, ''),
(12, '', 0, '', '', '', 0, ''),
(13, '', 0, '', '', '', 0, ''),
(14, '', 0, '', '', '', 0, ''),
(15, '', 0, '', '', '', 0, ''),
(16, '', 0, '', '', '', 0, ''),
(17, '', 0, '', '', '', 0, ''),
(18, '', 0, '', '', '', 0, ''),
(19, '', 0, '', '', '', 0, ''),
(20, '', 0, '', '', '', 0, ''),
(21, '', 0, '', '', '', 0, ''),
(22, '', 0, '', '', '', 0, ''),
(23, '', 0, '', '', '', 0, ''),
(24, '', 0, '', '', '', 0, ''),
(25, '', 0, '', '', '', 0, ''),
(26, '', 0, '', '', '', 0, ''),
(27, '', 0, '', '', '', 0, ''),
(28, '', 0, '', '', '', 0, ''),
(29, '', 0, '', '', '', 0, ''),
(30, '', 0, '', '', '', 0, ''),
(31, '', 0, '', '', '', 0, ''),
(32, '', 0, '', '', '', 0, ''),
(33, '', 0, '', '', '', 0, ''),
(34, '', 0, '', '', '', 0, ''),
(35, '', 0, '', '', '', 0, ''),
(36, '', 0, '', '', '', 0, ''),
(37, '', 0, '', '', '', 0, ''),
(38, '', 0, '', '', '', 0, ''),
(39, '', 0, '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `hukuman`
--

CREATE TABLE `hukuman` (
  `id_hukuman` varchar(20) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `tgl_hukuman` date NOT NULL,
  `nm_hukuman` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hukuman`
--

INSERT INTO `hukuman` (`id_hukuman`, `nip`, `tgl_hukuman`, `nm_hukuman`) VALUES
('HKM/LR/05/18/0001', 'MBI0001', '2018-05-02', 'Penundaan Pengangkatan');

-- --------------------------------------------------------

--
-- Table structure for table `informasilainnya`
--

CREATE TABLE `informasilainnya` (
  `id` int(5) NOT NULL,
  `nm1` varchar(100) DEFAULT NULL,
  `hub1` varchar(100) DEFAULT NULL,
  `no_telp1` char(12) DEFAULT NULL,
  `alamat1` text,
  `jns_penyakit1` varchar(100) DEFAULT NULL,
  `wkt1` date DEFAULT NULL,
  `rs_kota1` varchar(100) DEFAULT NULL,
  `nm_perusahaan1` varchar(100) DEFAULT NULL,
  `periode_krj1` int(20) DEFAULT NULL,
  `posisi1` varchar(100) DEFAULT NULL,
  `gaji_akhir1` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `informasilainnya`
--

INSERT INTO `informasilainnya` (`id`, `nm1`, `hub1`, `no_telp1`, `alamat1`, `jns_penyakit1`, `wkt1`, `rs_kota1`, `nm_perusahaan1`, `periode_krj1`, `posisi1`, `gaji_akhir1`) VALUES
(4, '', '', '', '', '', '0000-00-00', '', '', 0, '', ''),
(5, '', '', '', '', '', '0000-00-00', '', '', 0, '', ''),
(6, '', '', '', '', '', '0000-00-00', '', '', 0, '', ''),
(7, '', '', '', '', '', '0000-00-00', '', '', 0, '', ''),
(8, '', '', '', '', '', '0000-00-00', '', '', 0, '', ''),
(9, '', '', '', '', '', '0000-00-00', '', '', 0, '', ''),
(10, '', '', '', '', '', '0000-00-00', '', '', 0, '', ''),
(11, '', '', '', '', '', '0000-00-00', '', '', 0, '', ''),
(12, '', '', '', '', '', '0000-00-00', '', '', 0, '', ''),
(13, '', '', '', '', '', '0000-00-00', '', '', 0, '', ''),
(14, '', '', '', '', '', '0000-00-00', '', '', 0, '', ''),
(15, '', '', '', '', '', '0000-00-00', '', '', 0, '', ''),
(16, '', '', '', '', '', '0000-00-00', '', '', 0, '', ''),
(17, '', '', '', '', '', '0000-00-00', '', '', 0, '', ''),
(18, '', '', '', '', '', '0000-00-00', '', '', 0, '', ''),
(19, '', '', '', '', '', '0000-00-00', '', '', 0, '', ''),
(20, '', '', '', '', '', '0000-00-00', '', '', 0, '', ''),
(21, '', '', '', '', '', '0000-00-00', '', '', 0, '', ''),
(22, '', '', '', '', '', '0000-00-00', '', '', 0, '', ''),
(23, '', '', '', '', '', '0000-00-00', '', '', 0, '', ''),
(24, '', '', '', '', '', '0000-00-00', '', '', 0, '', ''),
(25, '', '', '', '', '', '0000-00-00', '', '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` varchar(20) NOT NULL,
  `nm_jabatan` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nm_jabatan`) VALUES
('JAB001', 'DIrektur Utama a'),
('JAB002', 'Manager'),
('JAB003', 'Supervisor'),
('JAB004', 'Staff'),
('JAB006', 'presiden ');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(10) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `id_shift` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `nip`, `id_shift`, `tanggal`, `keterangan`) VALUES
(17, 'MBI0001', 1, '2018-05-01', 'Alfa'),
(18, 'MBI0001', 1, '2018-06-01', 'Alfa'),
(19, 'MBI0001', 1, '2018-05-01', 'sakit'),
(20, 'MBI0001', 1, '2018-06-01', 'sakit'),
(21, 'MBI0001', 1, '2018-05-01', 'lain-lain'),
(22, 'MBI0001', 1, '2018-05-01', 'lain-lain'),
(23, 'MBI0001', 1, '2018-06-01', 'lain-lain'),
(24, 'MBI0001', 1, '2018-05-02', 'telat'),
(25, 'MBI0002', 1, '2018-05-01', 'Alfa'),
(26, 'MBI0003', 1, '2018-03-01', 'Alfa'),
(27, 'MBI0004', 1, '2018-05-01', 'Alfa'),
(28, 'MBI0002', 1, '2018-05-02', 'telat');

-- --------------------------------------------------------

--
-- Table structure for table `jjg`
--

CREATE TABLE `jjg` (
  `id` int(10) NOT NULL,
  `nm_jjg` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jjg`
--

INSERT INTO `jjg` (`id`, `nm_jjg`) VALUES
(8, 'D-2'),
(9, 'D-3'),
(10, 'D-4'),
(7, 'MAN'),
(4, 'MTs'),
(11, 'S-1'),
(12, 'S-2'),
(13, 'S-3'),
(1, 'SD'),
(2, 'SDIT'),
(5, 'SMA'),
(6, 'SMK'),
(3, 'SMP');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `nip` varchar(20) NOT NULL,
  `nm_pegawai` varchar(32) NOT NULL,
  `jk` enum('Laki-laki','Perempuan') DEFAULT NULL,
  `tpt_lhr` varchar(32) DEFAULT NULL,
  `tgl_lhr` date DEFAULT NULL,
  `agama` varchar(20) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `email` varchar(32) DEFAULT NULL,
  `alamat` varchar(64) DEFAULT NULL,
  `tgl_msk` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`nip`, `nm_pegawai`, `jk`, `tpt_lhr`, `tgl_lhr`, `agama`, `no_hp`, `email`, `alamat`, `tgl_msk`) VALUES
('2019020005', 'Aldo', 'Laki-laki', 'Magelang', '7077-07-07', 'Islam', '080909', 'adwdadwadw@gmail.com', 'adawd', '2019-02-07'),
('2019020009', 'Anwar Saefudin Yuri', 'Laki-laki', 'Magelang', '2002-06-07', 'Islam', '085887763563', 'anwarsaefudin555@gmail.com', 'Magelang', '2019-02-06'),
('MBI0001', 'Maulida Fitroyani ', 'Perempuan', 'Magelang', '1986-03-11', 'Kristen Protestan', '089765432987', 'maulisa@gmail.com', 'Magelang', '2018-05-01'),
('MBI0002', 'Atfalina Gati Awanas', 'Perempuan', 'Magelang', '1985-03-12', 'Islam', '0896268765444', 'lina@gmail.com', 'Magelang', '2017-04-02'),
('MBI0003', 'Muhammad Fani', 'Laki-laki', 'Magelang', '1983-06-15', 'Islam', '089625434678', 'fani@gmai.com', 'Magelang', '2017-03-02'),
('MBI0004', 'Taufiq Brilian', 'Laki-laki', 'Magelang', '1992-06-17', 'Islam', '089777654456', 'a@gmail.com', 'Magelang', '2017-05-02'),
('MBI9020010', 'Dewi Puji Lestari', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id_pend` int(10) NOT NULL,
  `id_hiring` varchar(20) DEFAULT NULL,
  `thn_pend` varchar(10) DEFAULT NULL,
  `jenjang` varchar(40) DEFAULT NULL,
  `nm_pendidikan` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id_pend`, `id_hiring`, `thn_pend`, `jenjang`, `nm_pendidikan`) VALUES
(40, 'MBI0001', '2000-2007', ' ', 'SD N 1 Banyuwangi'),
(41, 'MBI0001', '2007-2010', '', 'SMP N 3  Banyuwangi'),
(42, 'MBI0001', '2010-2013', '', 'SMK N 7  Banyuwangi'),
(43, 'MBI0002', '2000-2007', 'SDIT', 'SD N 1 Magelang'),
(44, 'MBI0002', '2007-2010', 'SMP', 'SMP N 1 Magelang'),
(45, 'MBI0002', '2010-2013', 'SMK', 'SMK N 1 Magelang'),
(46, 'MBI0003', '2000-2007', 'SD', 'SD N 3 Magelang'),
(47, 'MBI0003', '2007-2010', 'SMP', 'SMP N 3 Magelang'),
(48, 'MBI0003', '2010-2013', 'SMK', 'SMK N 3 Magelang'),
(49, 'MBI0004', '', 'SD', 'SD N 5 Banyuwangi'),
(50, 'MBI0004', '', 'SMP', 'SMP N 5 Banyuwangi'),
(51, 'MBI0004', '', 'SMK', 'SMK N 5 Banyuwangi');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikankegiatan`
--

CREATE TABLE `pendidikankegiatan` (
  `id` int(5) NOT NULL,
  `jenjang_pend_sd` varchar(100) DEFAULT NULL,
  `thn_pend_sd` int(10) DEFAULT NULL,
  `nm_sklh_sd` varchar(100) DEFAULT NULL,
  `lulus_thn_sd` int(10) DEFAULT NULL,
  `jns_bhs1` varchar(100) DEFAULT NULL,
  `kem_dengar1` varchar(100) DEFAULT NULL,
  `kem_baca1` varchar(100) DEFAULT NULL,
  `kem_bicara1` varchar(100) DEFAULT NULL,
  `kem_tulis1` varchar(100) DEFAULT NULL,
  `nm_organisasi1` varchar(100) DEFAULT NULL,
  `waktu1` date DEFAULT NULL,
  `jabatan1` varchar(100) DEFAULT NULL,
  `nm_pelatihan1` varchar(100) DEFAULT NULL,
  `waktu_1` date DEFAULT NULL,
  `penyelenggara1` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendidikankegiatan`
--

INSERT INTO `pendidikankegiatan` (`id`, `jenjang_pend_sd`, `thn_pend_sd`, `nm_sklh_sd`, `lulus_thn_sd`, `jns_bhs1`, `kem_dengar1`, `kem_baca1`, `kem_bicara1`, `kem_tulis1`, `nm_organisasi1`, `waktu1`, `jabatan1`, `nm_pelatihan1`, `waktu_1`, `penyelenggara1`) VALUES
(6, '', 0, '', 0, '', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(7, '', 0, '', 0, '', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(8, '', 0, '', 0, '', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(9, '', 0, '', 0, '', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(10, '', 0, '', 0, '', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(11, '', 0, '', 0, '', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(12, '', 0, '', 0, '', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(13, '', 0, '', 0, '', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(14, '', 0, '', 0, '', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(15, '', 0, '', 0, '', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(16, '', 0, '', 0, '', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(17, '', 0, '', 0, '', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(18, '', 0, '', 0, '', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(19, '', 0, '', 0, '', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(20, '', 0, '', 0, '', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(21, '', 0, '', 0, '', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(22, '', 0, '', 0, '', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(23, '', 0, '', 0, '', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(24, '', 0, '', 0, '', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(25, '', 0, '', 0, '', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(26, '', 0, '', 0, '', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(27, '', 0, '', 0, '', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', ''),
(28, '', 0, '', 0, '', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `pengalaman_krj`
--

CREATE TABLE `pengalaman_krj` (
  `id_peng_krj` int(10) NOT NULL,
  `id_hiring` varchar(20) DEFAULT NULL,
  `thn_krj` varchar(10) DEFAULT NULL,
  `nm_krj` varchar(32) DEFAULT NULL,
  `nm_pt` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengalaman_krj`
--

INSERT INTO `pengalaman_krj` (`id_peng_krj`, `id_hiring`, `thn_krj`, `nm_krj`, `nm_pt`) VALUES
(33, 'MBI0001', '2010-2012', 'Admin', 'Armada jaya'),
(34, 'MBI0002', '2013-2013', 'Staff', 'Mandiri Magelang'),
(35, 'MBI0003', '2013-2013', 'Staff', 'BCA Magelang'),
(36, 'MBI0004', '2013-2013', 'Admin', 'PT USG');

-- --------------------------------------------------------

--
-- Table structure for table `pengambilan_cuti`
--

CREATE TABLE `pengambilan_cuti` (
  `id_pengambilan_cuti` int(10) NOT NULL,
  `id_cuti` int(10) NOT NULL,
  `tgl_cuti` date NOT NULL,
  `jml_cuti` int(10) NOT NULL,
  `flag_hrd` char(1) NOT NULL,
  `alasan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengambilan_cuti`
--

INSERT INTO `pengambilan_cuti` (`id_pengambilan_cuti`, `id_cuti`, `tgl_cuti`, `jml_cuti`, `flag_hrd`, `alasan`) VALUES
(6, 5, '2018-03-06', 2, 'Y', 'sakit'),
(7, 5, '2018-05-11', 2, 'Y', 'sakit');

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE `prestasi` (
  `id_prestasi` varchar(20) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `tgl_prestasi` date NOT NULL,
  `nm_prestasi` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prestasi`
--

INSERT INTO `prestasi` (`id_prestasi`, `nip`, `tgl_prestasi`, `nm_prestasi`) VALUES
('PRE/LR/05/18/0001', 'MBI0001', '2018-05-02', 'Serifikasi Nasional');

-- --------------------------------------------------------

--
-- Table structure for table `recruitment`
--

CREATE TABLE `recruitment` (
  `id_hiring` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `posisi` varchar(50) NOT NULL,
  `user_input` varchar(50) NOT NULL,
  `tgl_lamaran` date NOT NULL,
  `progres_recruitment` varchar(50) NOT NULL,
  `resume` text NOT NULL,
  `status_recruitment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recruitment`
--

INSERT INTO `recruitment` (`id_hiring`, `nama`, `posisi`, `user_input`, `tgl_lamaran`, `progres_recruitment`, `resume`, `status_recruitment`) VALUES
(55, 'Dewi Puji Lestari', 'Manager', 'dewi', '2019-01-03', 'User Interview', 'Database Oracle Untuk Pemula.pdf', 'Hired'),
(56, 'Atika Khuril Aini', 'Sistem Analis', 'atika', '2019-01-02', 'Pre-Interview', 'materi_1.pdf', 'Hired'),
(57, 'Anwar', 'Staff', 'Member', '2002-06-07', 'User Interview', 'Materi-Rekayasa-Perangkat-Lunak-1.pdf', 'Hired'),
(58, 'Aldo', 'Staff', 'Member', '2019-04-06', 'Skill Text', 'Materi-Rekayasa-Perangkat-Lunak-1.pdf', 'Hired');

-- --------------------------------------------------------

--
-- Table structure for table `shift`
--

CREATE TABLE `shift` (
  `id_shift` int(10) NOT NULL,
  `nama_shift` varchar(50) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `flag_aktif` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shift`
--

INSERT INTO `shift` (`id_shift`, `nama_shift`, `jam_mulai`, `jam_selesai`, `flag_aktif`) VALUES
(1, 'Pagi ', '07:00:00', '14:00:00', 'Y'),
(2, 'Siang', '14:00:00', '23:00:00', 'Y'),
(3, 'Malam', '23:00:00', '07:00:00', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `sk_krj`
--

CREATE TABLE `sk_krj` (
  `no_sk` varchar(20) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `tgl_sk` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `id_jabatan` varchar(20) NOT NULL,
  `id_unit_krj` varchar(20) NOT NULL,
  `id_status_pegawai` int(10) NOT NULL,
  `status_sk` enum('aktif','nonaktif') NOT NULL,
  `jenis_sk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sk_krj`
--

INSERT INTO `sk_krj` (`no_sk`, `nip`, `tgl_sk`, `tgl_selesai`, `id_jabatan`, `id_unit_krj`, `id_status_pegawai`, `status_sk`, `jenis_sk`) VALUES
('RS/LR/02/19/00007', '2019020009', '2019-02-06', '2019-02-06', 'JAB004', 'UKJ003', 5, 'aktif', 'SK'),
('RS/LR/05/18/00002', 'MBI0001', '2017-05-01', '2018-05-05', 'JAB004', 'UKJ010', 3, 'nonaktif', 'SK'),
('RS/LR/05/18/00003', 'MBI0002', '2017-05-02', '2018-05-05', 'JAB004', 'UKJ010', 1, 'aktif', 'SK'),
('RS/LR/05/18/00004', 'MBI0003', '2017-05-02', '2018-05-04', 'JAB004', 'UKJ003', 3, 'aktif', 'SK'),
('RS/LR/05/18/00005', 'MBI0004', '2017-05-02', '2018-05-02', 'JAB004', 'UKJ013', 3, 'aktif', 'SK'),
('RS/LR/08/18/00006', 'MBI0001', '2018-08-01', '2018-09-30', 'JAB001', 'UKJ003', 2, 'aktif', 'SK');

-- --------------------------------------------------------

--
-- Table structure for table `status_pegawai`
--

CREATE TABLE `status_pegawai` (
  `id_status_pegawai` int(10) NOT NULL,
  `status_pegawai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_pegawai`
--

INSERT INTO `status_pegawai` (`id_status_pegawai`, `status_pegawai`) VALUES
(1, 'Kontrak 1'),
(2, 'Kontrak 2'),
(3, 'Kontrak 3'),
(4, 'Pegawai Tetap'),
(5, 'Masa Percobaan');

-- --------------------------------------------------------

--
-- Table structure for table `unit_krj`
--

CREATE TABLE `unit_krj` (
  `id_unit_krj` varchar(20) NOT NULL,
  `nm_unit_krj` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit_krj`
--

INSERT INTO `unit_krj` (`id_unit_krj`, `nm_unit_krj`) VALUES
('UKJ001', 'Operasional Sumbagut'),
('UKJ002', 'Operasional Sumbagteng'),
('UKJ003', 'HRD'),
('UKJ004', 'Team Support & Security'),
('UKJ005', 'Team Maintenance'),
('UKJ006', 'Koordinator Cluster'),
('UKJ007', 'Bag. Administasi'),
('UKJ008', 'Team Backup Power'),
('UKJ009', 'Administrasi Umum'),
('UKJ010', 'Logistik'),
('UKJ011', 'Administrasi Keuangan'),
('UKJ013', 'Administrasi Keuangan'),
('UKJ12', '-');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(10) NOT NULL,
  `user` varchar(32) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `level` enum('admin','hrd','leadershift') NOT NULL,
  `foto` varchar(200) NOT NULL,
  `blokir` enum('N','Y') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `user`, `pass`, `nama`, `no_hp`, `level`, `foto`, `blokir`) VALUES
('USR001', 'admin', 'admin', 'Tutik Maryana', '081224923354', 'admin', 'admin.jpg', 'N'),
('USR002', 'hrd', 'hrd', 'Lionel Messi', '081365580887', 'hrd', '', 'N'),
('USR003', 'gm', 'gm', 'Hasyim Bakar', '081529373782', '', '', 'Y'),
('USR004', 'leadershift', 'leadershift', 'M. Firdaus ST', '+6281365580887', 'leadershift', '', 'N'),
('USR005', 'admin1', 'admin1', 'Nina', '0809798678', 'admin', '', 'N');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id_absen`),
  ADD KEY `nip` (`nip`),
  ADD KEY `nip_2` (`nip`),
  ADD KEY `id_shift` (`id_shift`);

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`id_cuti`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `datakeluarga`
--
ALTER TABLE `datakeluarga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detailkeluarga`
--
ALTER TABLE `detailkeluarga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hukuman`
--
ALTER TABLE `hukuman`
  ADD PRIMARY KEY (`id_hukuman`),
  ADD KEY `nik` (`nip`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `informasilainnya`
--
ALTER TABLE `informasilainnya`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`),
  ADD KEY `id_jabatan` (`id_jabatan`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `nip` (`nip`),
  ADD KEY `id_shift` (`id_shift`);

--
-- Indexes for table `jjg`
--
ALTER TABLE `jjg`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nm_jjg` (`nm_jjg`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `nip` (`nip`),
  ADD KEY `nip_2` (`nip`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id_pend`),
  ADD KEY `nm_pendidikan` (`nm_pendidikan`),
  ADD KEY `jenjang` (`jenjang`);

--
-- Indexes for table `pendidikankegiatan`
--
ALTER TABLE `pendidikankegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengalaman_krj`
--
ALTER TABLE `pengalaman_krj`
  ADD PRIMARY KEY (`id_peng_krj`);

--
-- Indexes for table `pengambilan_cuti`
--
ALTER TABLE `pengambilan_cuti`
  ADD PRIMARY KEY (`id_pengambilan_cuti`),
  ADD KEY `id_cuti` (`id_cuti`);

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id_prestasi`),
  ADD KEY `nik` (`nip`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `recruitment`
--
ALTER TABLE `recruitment`
  ADD PRIMARY KEY (`id_hiring`);

--
-- Indexes for table `shift`
--
ALTER TABLE `shift`
  ADD PRIMARY KEY (`id_shift`);

--
-- Indexes for table `sk_krj`
--
ALTER TABLE `sk_krj`
  ADD PRIMARY KEY (`no_sk`),
  ADD KEY `nip` (`nip`),
  ADD KEY `id_jabatan` (`id_jabatan`),
  ADD KEY `id_unit_krj` (`id_unit_krj`),
  ADD KEY `id_status_pegawai` (`id_status_pegawai`);

--
-- Indexes for table `status_pegawai`
--
ALTER TABLE `status_pegawai`
  ADD PRIMARY KEY (`id_status_pegawai`),
  ADD KEY `id_status_pegawai` (`id_status_pegawai`);

--
-- Indexes for table `unit_krj`
--
ALTER TABLE `unit_krj`
  ADD PRIMARY KEY (`id_unit_krj`),
  ADD KEY `id_unit_krj` (`id_unit_krj`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen`
--
ALTER TABLE `absen`
  MODIFY `id_absen` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `cuti`
--
ALTER TABLE `cuti`
  MODIFY `id_cuti` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `datakeluarga`
--
ALTER TABLE `datakeluarga`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `detailkeluarga`
--
ALTER TABLE `detailkeluarga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `informasilainnya`
--
ALTER TABLE `informasilainnya`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `jjg`
--
ALTER TABLE `jjg`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id_pend` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `pendidikankegiatan`
--
ALTER TABLE `pendidikankegiatan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `pengalaman_krj`
--
ALTER TABLE `pengalaman_krj`
  MODIFY `id_peng_krj` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `pengambilan_cuti`
--
ALTER TABLE `pengambilan_cuti`
  MODIFY `id_pengambilan_cuti` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `recruitment`
--
ALTER TABLE `recruitment`
  MODIFY `id_hiring` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `shift`
--
ALTER TABLE `shift`
  MODIFY `id_shift` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `status_pegawai`
--
ALTER TABLE `status_pegawai`
  MODIFY `id_status_pegawai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absen`
--
ALTER TABLE `absen`
  ADD CONSTRAINT `absen_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `pegawai` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cuti`
--
ALTER TABLE `cuti`
  ADD CONSTRAINT `cuti_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `pegawai` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hukuman`
--
ALTER TABLE `hukuman`
  ADD CONSTRAINT `hukuman_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `pegawai` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `pegawai` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwal_ibfk_2` FOREIGN KEY (`id_shift`) REFERENCES `shift` (`id_shift`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengambilan_cuti`
--
ALTER TABLE `pengambilan_cuti`
  ADD CONSTRAINT `pengambilan_cuti_ibfk_1` FOREIGN KEY (`id_cuti`) REFERENCES `cuti` (`id_cuti`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD CONSTRAINT `prestasi_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `pegawai` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sk_krj`
--
ALTER TABLE `sk_krj`
  ADD CONSTRAINT `sk_krj_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `pegawai` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sk_krj_ibfk_2` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id_jabatan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sk_krj_ibfk_5` FOREIGN KEY (`id_unit_krj`) REFERENCES `unit_krj` (`id_unit_krj`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sk_krj_ibfk_6` FOREIGN KEY (`id_status_pegawai`) REFERENCES `status_pegawai` (`id_status_pegawai`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
