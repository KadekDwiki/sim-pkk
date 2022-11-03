-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 02, 2022 at 12:56 AM
-- Server version: 5.7.33
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pkk_informasi_sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `kode_kelas` varchar(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `wali_kelas` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `kode_kelas`, `nama`, `wali_kelas`, `jurusan`) VALUES
(1, 'XII RPL 1', 'XII Rekayasa Perangkat Lunak 1', 'XII RPL 1', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `level` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `kelas` varchar(11) DEFAULT NULL,
  `wali_kelas` varchar(100) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `no_telp` varchar(20) NOT NULL,
  `no_telportu` varchar(20) DEFAULT NULL,
  `tgl_lahir` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `level`, `name`, `email`, `kelas`, `wali_kelas`, `jurusan`, `no_telp`, `no_telportu`, `tgl_lahir`, `jenis_kelamin`, `alamat`, `password`) VALUES
(1, '28840', 'siswa', 'I Kadek Dwiki Nusanjaya', 'nusanjaya@gmail.com', 'XII RPL 1', '', '', '09238103', '09831321', '2022-10-09', 'Laki-laki', 'jl. gamias sibanggede', 'hahahah'),
(2, '28841', 'siswa', 'I ketut jaya', 'jaya@gmail.com', 'XII RPL 1', '', '', '09092138', '09839123', '2022-10-19', 'Laki-laki', 'Jl. rijasa', '123'),
(3, 'guru1', 'guru', 'Pak joni', 'joni@gmail.com', '', 'XII RPL 1', '', '0870987790', NULL, '2022-10-02', 'L', 'Jl. Kenangan selamanya', '123'),
(4, 'admin1', 'admin', 'admin budiman', 'admin@gmail.com', NULL, NULL, NULL, '09238103', NULL, '2022-10-05', 'L', 'Jl. tidak diketahui alamatnya', '123'),
(5, '28830', 'siswa', 'kadekdwiki', 'jaya@gmail.com', 'XII RPL 1', NULL, NULL, '23432432', '2232131', '2022-10-21', 'Laki-laki', 'kkasjdnf sdfaksjdf df', '123'),
(6, '342423', 'siswa', 'dwiki team', 'nusanjayadwiki@gmail.com', 'XII RPL 1', NULL, NULL, '121231', '23423423', '2022-10-26', 'Laki-laki', 'dfafsdfsd', ''),
(9, '12312', 'siswa', 'informasi sekolah', '', 'XII RPL 1', NULL, NULL, '1233423423', '23123123', '2022-10-26', 'Perempuan', 'sdfsdfsdf', ''),
(10, '28890', 'siswa', 'Putu Eka', 'text@gmail.com', 'XII RPL 1', NULL, NULL, '1233423423', '23123123', '2022-10-28', 'Perempuan', 'Br. Cabe darmasaba', ''),
(11, '12312', 'siswa', 'dwiki', 'dwiki@gmail.com', 'XII RPL 1', NULL, NULL, '1233423423', '23123123', '2022-10-26', 'Perempuan', 'Jl. Keresahan', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `wali_kelas` (`wali_kelas`),
  ADD UNIQUE KEY `kode_kelas` (`kode_kelas`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kelas` (`kelas`),
  ADD KEY `wali_kelas` (`wali_kelas`),
  ADD KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
