-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2021 at 12:40 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dana_desa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_dana_keluar`
--

CREATE TABLE `tb_dana_keluar` (
  `id_dana_keluar` int(11) NOT NULL,
  `id_desa` int(11) NOT NULL,
  `kebutuhan` varchar(100) NOT NULL,
  `jml_biaya` double NOT NULL,
  `tgl_keluar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_dana_keluar`
--

INSERT INTO `tb_dana_keluar` (`id_dana_keluar`, `id_desa`, `kebutuhan`, `jml_biaya`, `tgl_keluar`) VALUES
(1, 1, 'beli paku 20 kg', 1000000, '2021-07-04'),
(2, 1, 'beli paku 20 kg', 2000000, '2021-07-14');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dana_masuk`
--

CREATE TABLE `tb_dana_masuk` (
  `id_dana_masuk` int(11) NOT NULL,
  `id_instansi` int(11) NOT NULL,
  `id_desa` int(11) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `saldo_awal` double NOT NULL,
  `keperluan` varchar(100) NOT NULL,
  `sisa_saldo` double NOT NULL,
  `file_rak` varchar(300) NOT NULL,
  `lokasi` varchar(300) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_dana_masuk`
--

INSERT INTO `tb_dana_masuk` (`id_dana_masuk`, `id_instansi`, `id_desa`, `tgl_masuk`, `saldo_awal`, `keperluan`, `sisa_saldo`, `file_rak`, `lokasi`, `status`) VALUES
(5, 1, 1, '2021-09-06', 7000000, 'pembangunan sanitasi', 7000000, 'WORD-KARTU VAKSIN2.pdf', 'jl diponegoro.....', 'realisasi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_desa`
--

CREATE TABLE `tb_desa` (
  `id_desa` int(11) NOT NULL,
  `nama_desa` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kepala_desa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_desa`
--

INSERT INTO `tb_desa` (`id_desa`, `nama_desa`, `alamat`, `kepala_desa`) VALUES
(1, 'desa pasireurih', 'pasireurih', 'sugino');

-- --------------------------------------------------------

--
-- Table structure for table `tb_instansi`
--

CREATE TABLE `tb_instansi` (
  `id_instansi` int(11) NOT NULL,
  `nama_instansi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_instansi`
--

INSERT INTO `tb_instansi` (`id_instansi`, `nama_instansi`) VALUES
(1, 'Dinas PUPR Kab. Lebak');

-- --------------------------------------------------------

--
-- Table structure for table `tb_lpj`
--

CREATE TABLE `tb_lpj` (
  `id_lpj` int(11) NOT NULL,
  `id_desa` int(11) NOT NULL,
  `file_lpj` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_lpj`
--

INSERT INTO `tb_lpj` (`id_lpj`, `id_desa`, `file_lpj`) VALUES
(2, 1, 'SURAT IJIN ORANGTUA.pdf'),
(3, 1, 'INTRUKSI WALIKOTA.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `nama_lengkap`, `level`) VALUES
(1, 'admin', 'admin', 'admin', 'admin'),
(2, 'diki', 'diki', 'diki', 'kepala desa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_dana_keluar`
--
ALTER TABLE `tb_dana_keluar`
  ADD PRIMARY KEY (`id_dana_keluar`);

--
-- Indexes for table `tb_dana_masuk`
--
ALTER TABLE `tb_dana_masuk`
  ADD PRIMARY KEY (`id_dana_masuk`);

--
-- Indexes for table `tb_desa`
--
ALTER TABLE `tb_desa`
  ADD PRIMARY KEY (`id_desa`);

--
-- Indexes for table `tb_instansi`
--
ALTER TABLE `tb_instansi`
  ADD PRIMARY KEY (`id_instansi`);

--
-- Indexes for table `tb_lpj`
--
ALTER TABLE `tb_lpj`
  ADD PRIMARY KEY (`id_lpj`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_dana_keluar`
--
ALTER TABLE `tb_dana_keluar`
  MODIFY `id_dana_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_dana_masuk`
--
ALTER TABLE `tb_dana_masuk`
  MODIFY `id_dana_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_desa`
--
ALTER TABLE `tb_desa`
  MODIFY `id_desa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_instansi`
--
ALTER TABLE `tb_instansi`
  MODIFY `id_instansi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_lpj`
--
ALTER TABLE `tb_lpj`
  MODIFY `id_lpj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
