-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 03 Apr 2016 pada 06.25
-- Versi Server: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `penjualan_pkl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alternatif`
--

CREATE TABLE IF NOT EXISTS `alternatif` (
  `NIS` varchar(12) NOT NULL,
  `Nama_siswa` varchar(50) DEFAULT NULL,
  `k1` varchar(3) DEFAULT NULL,
  `k2` varchar(3) DEFAULT NULL,
  `k3` varchar(3) DEFAULT NULL,
  `k4` varchar(3) DEFAULT NULL,
  `k5` varchar(3) DEFAULT NULL,
  `k6` varchar(3) DEFAULT NULL,
  `k7` varchar(3) DEFAULT NULL,
  `k8` varchar(3) DEFAULT NULL,
  `Alamat` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alternatif`
--

INSERT INTO `alternatif` (`NIS`, `Nama_siswa`, `k1`, `k2`, `k3`, `k4`, `k5`, `k6`, `k7`, `k8`, `Alamat`) VALUES
('sis01', 'Heru', '5', '5', '5', '4', '5', '4', '4', '5', 'Lumajang'),
('sis02', 'Mutiara', '5', '4', '5', '3', '5', '5', '4', '5', 'Mojokerto'),
('sis03', 'Putri', '4', '3', '4', '4', '5', '2', '4', '5', 'Jakarta');

-- --------------------------------------------------------

--
-- Stand-in structure for view `detail_penjualan`
--
CREATE TABLE IF NOT EXISTS `detail_penjualan` (
`id_member` varchar(15)
,`nama_member` varchar(30)
,`alamat` text
,`password` varchar(20)
,`id_rumah` int(10)
,`judul` varchar(50)
,`deskripsi` text
,`harga` varchar(15)
,`no_hp` varchar(12)
,`lokasi` text
,`gambar` varchar(50)
,`id_tanah` int(10)
,`judul_tanah` varchar(30)
,`deskripsi_tanah` text
,`harga_tanah` varchar(15)
,`no_hp_tanah` varchar(12)
,`lokasi_tanah` text
,`gambar_tanah` text
);
-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id_member` varchar(15) NOT NULL,
  `nama_member` varchar(30) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `alamat` text,
  `no_hp` varchar(12) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `ket` char(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id_member`, `nama_member`, `email`, `alamat`, `no_hp`, `password`, `ket`) VALUES
('201603190001', 'ana', NULL, 'candipuro, lumajang', '', '123', NULL),
('201603270001', 'rico', 'ricots47@gmail.com', 'bwi', '-', '123', NULL);

-- --------------------------------------------------------

--
-- Stand-in structure for view `member_rumah`
--
CREATE TABLE IF NOT EXISTS `member_rumah` (
`id_member` varchar(15)
,`nama_member` varchar(30)
,`alamat` text
,`password` varchar(20)
,`id_rumah` int(10)
,`judul` varchar(50)
,`deskripsi` text
,`harga` varchar(15)
,`no_hp` varchar(12)
,`lokasi` text
,`gambar` varchar(50)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `member_tanah`
--
CREATE TABLE IF NOT EXISTS `member_tanah` (
`id_member` varchar(15)
,`nama_member` varchar(30)
,`alamat` text
,`no_hp` varchar(12)
,`password` varchar(20)
,`id_tanah` int(10)
,`judul_tanah` varchar(30)
,`deskripsi_tanah` text
,`harga_tanah` varchar(15)
,`no_hp_tanah` varchar(12)
,`lokasi_tanah` text
,`gambar_tanah` text
);
-- --------------------------------------------------------

--
-- Struktur dari tabel `rumah`
--

CREATE TABLE IF NOT EXISTS `rumah` (
  `id_member` varchar(15) DEFAULT NULL,
`id_rumah` int(10) NOT NULL,
  `judul` varchar(50) DEFAULT NULL,
  `deskripsi` text,
  `harga` varchar(15) DEFAULT NULL,
  `no_hp` varchar(12) DEFAULT NULL,
  `lokasi` text,
  `gambar` varchar(50) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rumah`
--

INSERT INTO `rumah` (`id_member`, `id_rumah`, `judul`, `deskripsi`, `harga`, `no_hp`, `lokasi`, `gambar`) VALUES
('201603190001', 13, 'rumah di jual', 'rumah di sekitan malang', '200 juta', '', 'malang selatan', 'pemkab_1.jpg'),
('201603190001', 14, 'rumah di jual', 'rumah kita', '', '', 'pakis', 'Tulips.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanah`
--

CREATE TABLE IF NOT EXISTS `tanah` (
  `id_member` varchar(15) DEFAULT NULL,
`id_tanah` int(10) NOT NULL,
  `judul_tanah` varchar(30) DEFAULT NULL,
  `deskripsi_tanah` text,
  `harga_tanah` varchar(15) DEFAULT NULL,
  `no_hp_tanah` varchar(12) DEFAULT NULL,
  `lokasi_tanah` text,
  `gambar_tanah` text
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tanah`
--

INSERT INTO `tanah` (`id_member`, `id_tanah`, `judul_tanah`, `deskripsi_tanah`, `harga_tanah`, `no_hp_tanah`, `lokasi_tanah`, `gambar_tanah`) VALUES
('201603190001', 3, 'tanah', 'de', '12 juta', '', 'malang', 'Desert.jpg'),
('201603190001', 4, 'tanh di jual', '-', '-', '', 'pakis', 'Lighthouse.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `username` varchar(10) NOT NULL DEFAULT '',
  `password` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur untuk view `detail_penjualan`
--
DROP TABLE IF EXISTS `detail_penjualan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `detail_penjualan` AS select `member_rumah`.`id_member` AS `id_member`,`member_rumah`.`nama_member` AS `nama_member`,`member_rumah`.`alamat` AS `alamat`,`member_rumah`.`password` AS `password`,`member_rumah`.`id_rumah` AS `id_rumah`,`member_rumah`.`judul` AS `judul`,`member_rumah`.`deskripsi` AS `deskripsi`,`member_rumah`.`harga` AS `harga`,`member_rumah`.`no_hp` AS `no_hp`,`member_rumah`.`lokasi` AS `lokasi`,`member_rumah`.`gambar` AS `gambar`,`tanah`.`id_tanah` AS `id_tanah`,`tanah`.`judul_tanah` AS `judul_tanah`,`tanah`.`deskripsi_tanah` AS `deskripsi_tanah`,`tanah`.`harga_tanah` AS `harga_tanah`,`tanah`.`no_hp_tanah` AS `no_hp_tanah`,`tanah`.`lokasi_tanah` AS `lokasi_tanah`,`tanah`.`gambar_tanah` AS `gambar_tanah` from (`member_rumah` left join `tanah` on((`member_rumah`.`id_member` = `tanah`.`id_tanah`)));

-- --------------------------------------------------------

--
-- Struktur untuk view `member_rumah`
--
DROP TABLE IF EXISTS `member_rumah`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `member_rumah` AS select `member`.`id_member` AS `id_member`,`member`.`nama_member` AS `nama_member`,`member`.`alamat` AS `alamat`,`member`.`password` AS `password`,`rumah`.`id_rumah` AS `id_rumah`,`rumah`.`judul` AS `judul`,`rumah`.`deskripsi` AS `deskripsi`,`rumah`.`harga` AS `harga`,`rumah`.`no_hp` AS `no_hp`,`rumah`.`lokasi` AS `lokasi`,`rumah`.`gambar` AS `gambar` from (`member` join `rumah`) where (`member`.`id_member` = `rumah`.`id_member`);

-- --------------------------------------------------------

--
-- Struktur untuk view `member_tanah`
--
DROP TABLE IF EXISTS `member_tanah`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `member_tanah` AS select `member`.`id_member` AS `id_member`,`member`.`nama_member` AS `nama_member`,`member`.`alamat` AS `alamat`,`member`.`no_hp` AS `no_hp`,`member`.`password` AS `password`,`tanah`.`id_tanah` AS `id_tanah`,`tanah`.`judul_tanah` AS `judul_tanah`,`tanah`.`deskripsi_tanah` AS `deskripsi_tanah`,`tanah`.`harga_tanah` AS `harga_tanah`,`tanah`.`no_hp_tanah` AS `no_hp_tanah`,`tanah`.`lokasi_tanah` AS `lokasi_tanah`,`tanah`.`gambar_tanah` AS `gambar_tanah` from (`member` join `tanah`) where (`member`.`id_member` = `tanah`.`id_member`);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
 ADD PRIMARY KEY (`NIS`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
 ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `rumah`
--
ALTER TABLE `rumah`
 ADD PRIMARY KEY (`id_rumah`), ADD KEY `id_member` (`id_member`);

--
-- Indexes for table `tanah`
--
ALTER TABLE `tanah`
 ADD PRIMARY KEY (`id_tanah`), ADD KEY `id_member` (`id_member`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
 ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rumah`
--
ALTER TABLE `rumah`
MODIFY `id_rumah` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tanah`
--
ALTER TABLE `tanah`
MODIFY `id_tanah` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
