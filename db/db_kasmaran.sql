-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02 Apr 2017 pada 05.58
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kasmaran`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_tbl`
--

CREATE TABLE `login_tbl` (
  `id_login` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `level` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login_tbl`
--

INSERT INTO `login_tbl` (`id_login`, `username`, `password`, `id_user`, `level`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 1),
(5, 'hadistlm', 'bfafc9ac18a7cb054eb9fd24a06602aa2e157918', 6, 2),
(6, 'unyu', '0706f6dde96903fe24a640ae058c9691177422cb', 5, 2),
(7, 'helloworld', '6adfb183a4a2c94a2f92dab5ade762a47889a5a1', 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil_tbl`
--

CREATE TABLE `profil_tbl` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profil_tbl`
--

INSERT INTO `profil_tbl` (`id_user`, `username`, `nama_lengkap`, `photo`, `comment`) VALUES
(29, 'unyu', '', '', 'Makan Apa Yg Enak Ya?');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_tbl`
--

CREATE TABLE `user_tbl` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `gender` enum('Pria','Wanita') NOT NULL,
  `foto` varchar(100) NOT NULL,
  `intro` varchar(130) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_tbl`
--

INSERT INTO `user_tbl` (`id_user`, `username`, `password`, `nama_lengkap`, `email`, `tgl_lahir`, `alamat`, `gender`, `foto`, `intro`) VALUES
(5, 'unyu', '0706f6dde96903fe24a640ae058c9691177422cb', 'Rizky Banew Firdaws', 'unyu@saja.com', '1009-05-09', 'Jalan jalan', 'Pria', 'Untitled-1.jpg', 'Akhiri Saja Semua'),
(6, 'hadistlm', 'bfafc9ac18a7cb054eb9fd24a06602aa2e157918', 'Hadist Laroebafi', 'hadist.lm@gmail.com', '0000-00-00', 'Rumah', 'Pria', 'Untitled-awdawd.jpg', ' Teman Sejati Tidak Pernah Berharap Kepada Anda, Karena Mereka Tau bahwa Anda Tidak Bisa Diharapkan'),
(8, 'loendz', '935234eb49c91e4bb14f27de9907451ce24002a5', 'Fulandari', 'khaykka_fm24@yahoo.co.id', '0000-00-00', 'Unkme', 'Wanita', '12799007_1712454238992089_7439268904356053040_n.png', ''),
(11, 'cindyyy', 'e700c19b7c74335a7eec3c769985ae02103094e2', 'Cindy Mutara', 'cindy@gmail.com', '2016-05-06', 'Indramayu', 'Wanita', 'Daftar+Gaji+PNS+2012.jpg', ''),
(12, 'sukiyem', 'e700c19b7c74335a7eec3c769985ae02103094e2', 'Surtini', 'surtini@gmail.com', '2016-05-03', 'Jawa Tengah', 'Wanita', 'photo(5).jpg', ''),
(13, 'lian', 'e6f14efef9fae0ae8f92d04007faea68035873ce', 'lian bangkok', 'lianbngkok@gmail.com', '1990-01-01', 'thailand', 'Wanita', 'DEV2.jpg', ''),
(15, 'Cinta', '832ea9e4e91cb6dd11307273cd1f71d30a57d1e8', 'Cinta ', 'cintaa@gmail.com', '2018-09-28', 'Kamerun', 'Wanita', 'file.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_tbl`
--
ALTER TABLE `login_tbl`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `profil_tbl`
--
ALTER TABLE `profil_tbl`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_tbl`
--
ALTER TABLE `login_tbl`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `profil_tbl`
--
ALTER TABLE `profil_tbl`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
