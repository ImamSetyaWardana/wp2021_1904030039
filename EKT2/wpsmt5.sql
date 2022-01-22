-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2022 at 09:59 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wpsmt5`
--

-- --------------------------------------------------------

--
-- Table structure for table `calon_mhs`
--

CREATE TABLE `calon_mhs` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(9) NOT NULL,
  `agama` varchar(9) NOT NULL,
  `sekolah_asal` varchar(20) NOT NULL,
  `foto_maba` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `calon_mhs`
--

INSERT INTO `calon_mhs` (`id`, `nama`, `alamat`, `jenis_kelamin`, `agama`, `sekolah_asal`, `foto_maba`) VALUES
(1, 'imam setya wardana', 'jl.surya 6', 'laki-laki', 'islam', 'smk iqro', 'foto3.png'),
(2, 'angga prayoga', 'jl.raya rajeg', 'laki-laki', 'islam', 'unis tangerang', 'foto4.png');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_dosen`
--

CREATE TABLE `daftar_dosen` (
  `foto_dosen` varchar(10) NOT NULL,
  `nama` varchar(10) NOT NULL,
  `nidn` int(8) NOT NULL,
  `jenis_kelamin` varchar(6) NOT NULL,
  `email` varchar(9) NOT NULL,
  `alamat_rumah` varchar(15) NOT NULL,
  `agama` varchar(6) NOT NULL,
  `pendidikan_s1` varchar(8) NOT NULL,
  `pendidikan_s2` varchar(8) NOT NULL,
  `pendidikan_s3` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar_dosen`
--

INSERT INTO `daftar_dosen` (`foto_dosen`, `nama`, `nidn`, `jenis_kelamin`, `email`, `alamat_rumah`, `agama`, `pendidikan_s1`, `pendidikan_s2`, `pendidikan_s3`) VALUES
('foto3.png', 'imam setya', 1001, 'laki-l', 'imamsetya', 'pasar kemis', 'islam', 'unis tan', 'UIN', 'UPH'),
('foto4.png', 'eko', 1002, 'laki-l', 'imamsetya', 'pasar kemis', 'islam', 'asd', 'asdas', 'sada');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calon_mhs`
--
ALTER TABLE `calon_mhs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftar_dosen`
--
ALTER TABLE `daftar_dosen`
  ADD PRIMARY KEY (`nidn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calon_mhs`
--
ALTER TABLE `calon_mhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
