-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2019 at 12:52 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `balatmas_pekanbaru`
--

-- --------------------------------------------------------

--
-- Table structure for table `kuesioner`
--

CREATE TABLE `kuesioner` (
  `id_kuesioner` int(20) NOT NULL,
  `id_pemandu` int(20) NOT NULL,
  `no_wacana` int(20) NOT NULL,
  `id_peserta` int(20) NOT NULL,
  `nilai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kuesioner`
--

INSERT INTO `kuesioner` (`id_kuesioner`, `id_pemandu`, `no_wacana`, `id_peserta`, `nilai`) VALUES
(1, 2, 2, 1, '4');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `nilai` int(20) NOT NULL,
  `nilai_tulisan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pemandu_pelatihan`
--

CREATE TABLE `pemandu_pelatihan` (
  `id_pemandu` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat_lengkap` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `umur` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tamatan` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `password` varchar(256) NOT NULL,
  `foto` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemandu_pelatihan`
--

INSERT INTO `pemandu_pelatihan` (`id_pemandu`, `nama`, `alamat_lengkap`, `tempat_lahir`, `tgl_lahir`, `umur`, `jenis_kelamin`, `tamatan`, `pekerjaan`, `status`, `agama`, `password`, `foto`) VALUES
(2, 'Mario Pandi', 'thrhtrhtrhthtrhrt', 'samosir', '1998-12-06', '21', 'Pria', 'sma', 'Mahasiwa', 'Belum Kawin', 'Katolik', 'e10adc3949ba59abbe56e057f20f883e', 'mario.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `peserta_pelatihan`
--

CREATE TABLE `peserta_pelatihan` (
  `id_peserta` int(20) NOT NULL,
  `nama_peserta` varchar(50) NOT NULL,
  `alamat_lengkap` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `umur` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tamatan` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peserta_pelatihan`
--

INSERT INTO `peserta_pelatihan` (`id_peserta`, `nama_peserta`, `alamat_lengkap`, `tempat_lahir`, `tgl_lahir`, `umur`, `jenis_kelamin`, `tamatan`, `pekerjaan`, `status`, `agama`, `password`) VALUES
(1, 'Mario Pandi', 'ert', 'samosir', '1998-04-05', '21', 'Pria', 'sma', 'Mahasiwa', 'Belum Kawin', 'Katolik', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `wacana_pelatihan`
--

CREATE TABLE `wacana_pelatihan` (
  `no_wacana` int(20) NOT NULL,
  `id_pemandu` int(20) NOT NULL,
  `nama_wacana` varchar(100) NOT NULL,
  `isi_wacana` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wacana_pelatihan`
--

INSERT INTO `wacana_pelatihan` (`no_wacana`, `id_pemandu`, `nama_wacana`, `isi_wacana`) VALUES
(2, 2, 'Belajar', ' ewfwefew'),
(3, 2, 'Menanam Padi', 'cara menanam padi yg benar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kuesioner`
--
ALTER TABLE `kuesioner`
  ADD PRIMARY KEY (`id_kuesioner`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`nilai`);

--
-- Indexes for table `pemandu_pelatihan`
--
ALTER TABLE `pemandu_pelatihan`
  ADD PRIMARY KEY (`id_pemandu`);

--
-- Indexes for table `peserta_pelatihan`
--
ALTER TABLE `peserta_pelatihan`
  ADD PRIMARY KEY (`id_peserta`);

--
-- Indexes for table `wacana_pelatihan`
--
ALTER TABLE `wacana_pelatihan`
  ADD PRIMARY KEY (`no_wacana`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kuesioner`
--
ALTER TABLE `kuesioner`
  MODIFY `id_kuesioner` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pemandu_pelatihan`
--
ALTER TABLE `pemandu_pelatihan`
  MODIFY `id_pemandu` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `peserta_pelatihan`
--
ALTER TABLE `peserta_pelatihan`
  MODIFY `id_peserta` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wacana_pelatihan`
--
ALTER TABLE `wacana_pelatihan`
  MODIFY `no_wacana` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
