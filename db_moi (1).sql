-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2022 at 02:36 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_moi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_kegiatan`
--

CREATE TABLE `tb_kegiatan` (
  `ID` int(11) NOT NULL,
  `nama_kegiatan` text NOT NULL,
  `tanggal_kegiatan` date NOT NULL,
  `tanggal_akhir_kegiatan` date NOT NULL,
  `deskripsi` text NOT NULL,
  `status_kegiatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kegiatan`
--

INSERT INTO `tb_kegiatan` (`ID`, `nama_kegiatan`, `tanggal_kegiatan`, `tanggal_akhir_kegiatan`, `deskripsi`, `status_kegiatan`) VALUES
(2, 'keigatan Uji Coba', '2022-05-26', '2022-05-27', 'Ini Kegiatan Uji Coba ', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tb_setting`
--

CREATE TABLE `tb_setting` (
  `ID` int(11) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `youtube` varchar(100) NOT NULL,
  `kontak_email` varchar(100) NOT NULL,
  `kontak_telpon` varchar(15) NOT NULL,
  `kontak_alamat` text NOT NULL,
  `audio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_setting`
--

INSERT INTO `tb_setting` (`ID`, `facebook`, `instagram`, `youtube`, `kontak_email`, `kontak_telpon`, `kontak_alamat`, `audio`) VALUES
(1, 'https://www.facebook.com/', 'https://www.instagram.com', 'https://www.youtube.com', 'email@email.com', '111 222 333', 'Jln Raya Bogor 1234', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `ID` int(11) NOT NULL,
  `nama_lengkap` varchar(250) NOT NULL,
  `nama_panggilan` varchar(250) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `no_polisi` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email_moi` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `type_mobil` varchar(100) NOT NULL,
  `warna_mobil` varchar(100) NOT NULL,
  `tahun_keluaran` varchar(10) NOT NULL,
  `tanggal_registrasi` date NOT NULL,
  `alamat` text NOT NULL,
  `alasan_bergabung` text NOT NULL,
  `regional` varchar(100) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `id_member` varchar(100) NOT NULL,
  `foto` text NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `token` text NOT NULL,
  `hak_akses` varchar(150) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`ID`, `nama_lengkap`, `nama_panggilan`, `jenis_kelamin`, `no_polisi`, `tanggal_lahir`, `no_hp`, `email_moi`, `email`, `type_mobil`, `warna_mobil`, `tahun_keluaran`, `tanggal_registrasi`, `alamat`, `alasan_bergabung`, `regional`, `provinsi`, `id_member`, `foto`, `keterangan`, `token`, `hak_akses`, `password`) VALUES
(7, 'SUPERADMIN', 'SUPERADMIN', 'PRIA', 'F 1028 AV', '0000-00-00', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '123456789', '', '', 'QR120220524013609', 'Super Admin', '387a909cf410977ba168a7b98c63ae29'),
(8, 'admin', 'admin', 'PRIA', '', '0000-00-00', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', 'PP20220524125641628c73995f4b3.png', '', 'QR120220524014421', 'Admin', 'c8461b7540f187223afec94d1cdeb6a6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tb_setting`
--
ALTER TABLE `tb_setting`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_setting`
--
ALTER TABLE `tb_setting`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
