-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 28, 2022 at 03:27 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_jadwal` varchar(255) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_tutup` time NOT NULL,
  `hari` varchar(255) NOT NULL,
  `jenis_faskes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jadwal`
--

INSERT INTO `tb_jadwal` (`id`, `id_jadwal`, `jam_mulai`, `jam_tutup`, `hari`, `jenis_faskes`) VALUES
(2, 'A0002', '18:35:55', '17:00:00', 'Selasa', 'Pukesmas'),
(4, 'A0004', '05:00:00', '09:50:35', 'Rabu', 'Pukesmas'),
(5, 'A0005', '10:45:00', '14:35:00', 'Rabu', 'Klinik');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendaftaran`
--

CREATE TABLE `tb_pendaftaran` (
  `id_daftar` int(11) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(255) NOT NULL,
  `umur` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `desa` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `jenis_faskes` varchar(255) NOT NULL,
  `nohp` varchar(200) NOT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pendaftaran`
--

INSERT INTO `tb_pendaftaran` (`id_daftar`, `nama`, `nik`, `tgl_lahir`, `jk`, `umur`, `alamat`, `desa`, `kecamatan`, `jenis_faskes`, `nohp`, `created_at`) VALUES
(1, 'Nama Saya', '10101010101010101010', '1995-02-21', 'Laki-laki', '76', 'test test', 'Pemalii', 'Pemali', 'Pukesmas', '0908080808080', '2022-08-20'),
(2, 'Test Nama', '1999999999999999999', '1999-02-21', 'Perempuan', '23', 'Pangkal pinang Bes cinema', 'Kacang Pedang', 'Air Hitam Keruh', 'Klinik', '0800808878887', '2022-08-21'),
(3, 'test1', '99999999999999999999', '1999-02-06', 'Laki-laki', '34', 'test1test1test1test1test1test1test1', 'test1', 'test1', 'Klinik', '0808080808008', '2022-08-22'),
(4, 'test1', '99999999999999999999', '1999-02-06', 'Laki-laki', '34', 'test1test1test1test1test1test1test1', 'test1', 'test1', 'Klinik', '0808080808008', '2022-08-23'),
(5, 'test1', '99999999999999999999', '1999-02-06', 'Laki-laki', '34', 'test1test1test1test1test1test1test1', 'test1', 'test1', 'Klinik', '0808080808008', '2022-08-24'),
(6, 'test2', '99999999999999', '1999-12-22', 'Laki-laki', '23', 'test2test2test2test2test2', 'test2', 'test2', 'Klinik', '0808080809878', '2022-08-25'),
(7, 'test2', '99999999999999', '1999-12-22', 'Laki-laki', '23', 'test2test2test2test2test2', 'test2', 'test2', 'Klinik', '0808080809878', '2022-08-26'),
(8, 'pendaftaran', '34567897867', '1999-02-12', 'Laki-laki', '54', 'pendaftaranpendaftaranpendaftaran', 'pendaftaran', 'pendaftaran', 'Klinik', '0090909090909', '2022-08-25'),
(9, 'test3', '080808978687675656', '1999-12-22', 'Perempuan', '23', 'test3test3test3test3', 'test3', 'test3', 'Pukesmas', '07070707070', '2022-08-26'),
(13, 'test4', '10000000002929', '1999-11-11', 'Laki-laki', '23', 'test4test4test4test4test4', 'test4', 'test4', 'Pukesmas', '089829829829', '2022-08-24'),
(14, 'test4', '10000000002929', '1999-11-11', 'Laki-laki', '23', 'test4test4test4test4test4', 'test4', 'test4', 'Pukesmas', '089829829829', '2022-08-23'),
(15, 'test5', '2345678997654434', '1999-11-21', 'Laki-laki', '23', 'test5test5test5test5test5', 'test5', 'test5', 'Klinik', '070707070707', '2022-08-24'),
(16, 'test7', '1000000000000', '1999-12-22', 'Perempuan', '12', 'test7test7test7test7', 'test7', 'test7', 'Klinik', '04040404040', '2022-08-25'),
(17, 'test8', '3783333333333111', '1988-12-12', 'Laki-laki', '21', 'test8test8test8test8test8test8', 'test8', 'test8', 'Pukesmas', '211212121212', '2022-08-24'),
(18, 'test 8', '10000000000000092010', '1998-12-12', 'Perempuan', '32', 'test 8test 8test 8test 8test 8', 'test 8', 'test 8', 'Klinik', '0808101801', '2022-08-25');

-- --------------------------------------------------------

--
-- Table structure for table `tb_stok`
--

CREATE TABLE `tb_stok` (
  `id` int(11) UNSIGNED NOT NULL,
  `jenis_vaksin` varchar(255) NOT NULL,
  `jumlah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_stok`
--

INSERT INTO `tb_stok` (`id`, `jenis_vaksin`, `jumlah`) VALUES
(1, 'Astrazeneca', '8697'),
(2, 'Pfizer', '50'),
(3, 'Moderna', '122'),
(4, 'Spurnik V', '50'),
(5, 'Sinopharm', '120'),
(6, 'Sinovac', '300');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idadmin` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` text NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idadmin`, `username`, `password`, `nama_lengkap`, `email`, `no_hp`) VALUES
(1, 'admin', 'admin', 'Administrator', 'admin123@gmail.com', '0813131313');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  ADD PRIMARY KEY (`id_daftar`);

--
-- Indexes for table `tb_stok`
--
ALTER TABLE `tb_stok`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idadmin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  MODIFY `id_daftar` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_stok`
--
ALTER TABLE `tb_stok`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
