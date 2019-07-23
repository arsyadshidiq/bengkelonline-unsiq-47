-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19 Jul 2019 pada 18.10
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bengkelol`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id_user` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gambar` varchar(300) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_user`, `username`, `password`, `gambar`, `level`) VALUES
(25, 'arsyad', 'limao', '', 'admin'),
(31, 'arsyad', 'kuat', 'hunter.jpg', 'admin'),
(32, 'limao', 'juzz', 'dollar.jpg', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `beli`
--

CREATE TABLE IF NOT EXISTS `beli` (
`id_beli` int(30) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `onderdil` varchar(15) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `harga` int(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `beli`
--

INSERT INTO `beli` (`id_beli`, `nama`, `onderdil`, `jumlah`, `tgl`, `harga`) VALUES
(3, 'sudi', 'tebeng', 1, '2222-02-23', 34000),
(5, 'arsyad limao', 'plat', 1, '1998-02-12', 4888),
(6, 'Sui', 'busi', 1, '2019-09-12', 20000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `faktur`
--

CREATE TABLE IF NOT EXISTS `faktur` (
  `id_cust` int(23) NOT NULL,
`id_faktur` int(20) NOT NULL,
  `harga` int(30) NOT NULL,
  `onderdil` varchar(20) NOT NULL,
  `jml` int(30) NOT NULL,
  `tgl_servis` date NOT NULL,
  `total_biaya` int(34) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `faktur`
--

INSERT INTO `faktur` (`id_cust`, `id_faktur`, `harga`, `onderdil`, `jml`, `tgl_servis`, `total_biaya`) VALUES
(0, 54, 45000, 'tebeng', 6, '2018-03-02', 89000),
(0, 56, 30000, 'lampu', 2, '2019-03-04', 35000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `onderdil`
--

CREATE TABLE IF NOT EXISTS `onderdil` (
`id_kat` int(20) NOT NULL,
  `nm_kat` varchar(50) NOT NULL,
  `harga` int(20) DEFAULT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `onderdil`
--

INSERT INTO `onderdil` (`id_kat`, `nm_kat`, `harga`, `keterangan`) VALUES
(2, 'knalpot', 500000, 'second'),
(9, 'busi', 15000, 'new'),
(10, 'tebeng', 23000, 'ori');

-- --------------------------------------------------------

--
-- Struktur dari tabel `saran`
--

CREATE TABLE IF NOT EXISTS `saran` (
`id_saran` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `saran` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `saran`
--

INSERT INTO `saran` (`id_saran`, `username`, `email`, `saran`) VALUES
(3, 'arsyad', 'arsyad742gmail.com', 'Maaf yang membuat situs ini no nya berapa?'),
(4, 'wahyudi', 'whayudi89@gmail.com', 'bagus rancangan website nya'),
(9, 'ZUDI', 'SUDI88@GMAIL.COM', 'BAGUS DEH'),
(10, 'limao', 'limao99@gmail.co.id', 'sangat bagus sekali					');

-- --------------------------------------------------------

--
-- Struktur dari tabel `servis`
--

CREATE TABLE IF NOT EXISTS `servis` (
`id_cust` int(23) NOT NULL,
  `nama_pelanggan` varchar(20) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `id_kat` int(20) NOT NULL,
  `masalah` varchar(30) NOT NULL,
  `no_plat` varchar(20) NOT NULL,
  `no_telp` int(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `id_faktur` int(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `servis`
--

INSERT INTO `servis` (`id_cust`, `nama_pelanggan`, `jenis`, `id_kat`, `masalah`, `no_plat`, `no_telp`, `alamat`, `tanggal`, `id_faktur`) VALUES
(40, 'arsyad shidiq', 'motor', 0, ' busi masi', 'AA 4720 BB', 2147483647, 'kaliwiro', '2018-03-23', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `beli`
--
ALTER TABLE `beli`
 ADD PRIMARY KEY (`id_beli`);

--
-- Indexes for table `faktur`
--
ALTER TABLE `faktur`
 ADD PRIMARY KEY (`id_faktur`);

--
-- Indexes for table `onderdil`
--
ALTER TABLE `onderdil`
 ADD PRIMARY KEY (`id_kat`);

--
-- Indexes for table `saran`
--
ALTER TABLE `saran`
 ADD PRIMARY KEY (`id_saran`);

--
-- Indexes for table `servis`
--
ALTER TABLE `servis`
 ADD PRIMARY KEY (`id_cust`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `beli`
--
ALTER TABLE `beli`
MODIFY `id_beli` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `faktur`
--
ALTER TABLE `faktur`
MODIFY `id_faktur` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `onderdil`
--
ALTER TABLE `onderdil`
MODIFY `id_kat` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `saran`
--
ALTER TABLE `saran`
MODIFY `id_saran` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `servis`
--
ALTER TABLE `servis`
MODIFY `id_cust` int(23) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
