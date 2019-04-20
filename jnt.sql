-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2019 at 04:05 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jnt`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(15) NOT NULL,
  `nama_admin` varchar(50) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `no_telepon` varchar(12) DEFAULT NULL,
  `gaji` int(11) DEFAULT NULL,
  `id_pengirim` int(11) DEFAULT NULL,
  `id_barang` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `alamat`, `no_telepon`, `gaji`, `id_pengirim`, `id_barang`) VALUES
(1450, 'Ben', 'Jl. Mawar, No.09, RT 03, RW 01, Desa Lengkong, Bojongsoang, Kab. Bandung', '082112347856', 2500000, 1, 1),
(1451, 'Agus Pratama', 'Jl. Anggrek, No.01, RT 07, RW 04, Kec. Dayeuhkolot, Kab. Bandung', '081156743409', 2500000, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `jenis_barang` varchar(30) DEFAULT NULL,
  `berat_barang` int(30) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `id_pengirim` int(11) DEFAULT NULL,
  `total_harga` int(30) DEFAULT NULL,
  `id_penerima` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `jenis_barang`, `berat_barang`, `keterangan`, `id_admin`, `id_pengirim`, `total_harga`, `id_penerima`) VALUES
(1, 'pakaian', 2, 'warna hitam', 1450, 1, 26000, 1),
(2, 'sepatu', 1, 'Ukuran 40, Warna Hitam, Merk Adidas', 1451, 2, 11000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `kurir`
--

CREATE TABLE `kurir` (
  `id_kurir` varchar(15) NOT NULL,
  `nama_kurir` varchar(40) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `no_telepon` varchar(12) DEFAULT NULL,
  `gaji` int(30) DEFAULT NULL,
  `id_pengiriman` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kurir`
--

INSERT INTO `kurir` (`id_kurir`, `nama_kurir`, `alamat`, `no_telepon`, `gaji`, `id_pengiriman`) VALUES
('1501', 'Agus Purnomo', 'Jl. Melati, No. 110, RT 04, RW 05, Kec. Bojongsoang, Kab. Bandung.', '081256742348', 2500000, 1),
('1502', 'Ardiyansah', 'Jl. Adipati Agung, No. 02, RT 07, RW 07, Kec. Baleendah, Kab. Bandung', '081178906543', 2500000, NULL),
('1503', 'Rizki A.', 'Jl. Sari Endah Raya, No.09, RT 06, RW 03, Kec. Baleendah, Kab. Bandung', '087789099009', 2500000, 2),
('1504', 'M. Fathur', 'Jl. Adhiyaksa Raya, No. 23, RW 02, RT 02, Sukapura Buah Batu, Kab. Bandung ', '087745543001', 2500000, NULL),
('1505', 'Aldo Rasyid', 'Jl. Dayeuhkolot Raya, No.10, RT 05, RW 05, Citereup, Dayeuhkolot, Kab. Bandung', '089970071290', 2500000, NULL),
('1506', 'Fariz M.', 'Jl. Dayeuhkolot Raya, No. 20, RT 04, RW 05, Citeureup, Dayeuhkolot, Kab. Bandung', '087890065467', 2500000, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `penerima`
--

CREATE TABLE `penerima` (
  `id_penerima` int(11) NOT NULL,
  `nama_penerima` varchar(50) DEFAULT NULL,
  `no_telepon` varchar(12) DEFAULT NULL,
  `kota` varchar(30) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `id_barang` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penerima`
--

INSERT INTO `penerima` (`id_penerima`, `nama_penerima`, `no_telepon`, `kota`, `alamat`, `id_barang`) VALUES
(1, 'Budi', '082256473421', 'Bandung', 'Jl. PGA, No. 21, RW 02, RT 02, Kec. Bojongsoang, Kab. Bandung, 40287', 1),
(2, 'raisa', '082234569009', 'Bandung', 'Jl. Raya, No. 04, RW 03, RT 03, Cisurupan, Kec. Cibiru, Kab. Bandung, 40614', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pengirim`
--

CREATE TABLE `pengirim` (
  `id_pengirim` int(11) NOT NULL,
  `nama_pengirim` varchar(50) DEFAULT NULL,
  `no_telepon` varchar(12) DEFAULT NULL,
  `kota` varchar(50) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `id_barang` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengirim`
--

INSERT INTO `pengirim` (`id_pengirim`, `nama_pengirim`, `no_telepon`, `kota`, `alamat`, `id_admin`, `id_barang`) VALUES
(1, 'sarah', '081356437806', 'Cimahi', 'Jl. Anaya, no. 06, RT 05, RW 03, Kec. Cimahi Selatan, Kab. Cimahi.', 1450, 1),
(2, 'Ulfah Fadilah', '082167765409', 'Jakarta Timur', 'Jl. Teratai, No. 30, RT 03, RW. 03, Kebayoran Lama, Jakarta Selatan, DKI Jakarta, 12240', 1451, 2);

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman`
--

CREATE TABLE `pengiriman` (
  `id_pengiriman` int(11) NOT NULL,
  `tgl_pengiriman` date DEFAULT NULL,
  `tgl_sampai` date DEFAULT NULL,
  `id_barang` int(11) DEFAULT NULL,
  `id_kurir` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengiriman`
--

INSERT INTO `pengiriman` (`id_pengiriman`, `tgl_pengiriman`, `tgl_sampai`, `id_barang`, `id_kurir`) VALUES
(1, '2019-04-11', '2019-04-14', 1, '1502'),
(2, '2019-04-11', '2019-04-14', 2, '1503');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `id_pengirim` (`id_pengirim`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_admin` (`id_admin`),
  ADD KEY `id_pengirim` (`id_pengirim`),
  ADD KEY `id_penerima` (`id_penerima`);

--
-- Indexes for table `kurir`
--
ALTER TABLE `kurir`
  ADD PRIMARY KEY (`id_kurir`),
  ADD KEY `id_pengiriman` (`id_pengiriman`);

--
-- Indexes for table `penerima`
--
ALTER TABLE `penerima`
  ADD PRIMARY KEY (`id_penerima`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `pengirim`
--
ALTER TABLE `pengirim`
  ADD PRIMARY KEY (`id_pengirim`),
  ADD KEY `id_admin` (`id_admin`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`id_pengiriman`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_kurir` (`id_kurir`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `penerima`
--
ALTER TABLE `penerima`
  MODIFY `id_penerima` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengirim`
--
ALTER TABLE `pengirim`
  MODIFY `id_pengirim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengiriman`
--
ALTER TABLE `pengiriman`
  MODIFY `id_pengiriman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`id_pengirim`) REFERENCES `pengirim` (`id_pengirim`),
  ADD CONSTRAINT `admin_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`);

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`),
  ADD CONSTRAINT `barang_ibfk_2` FOREIGN KEY (`id_pengirim`) REFERENCES `pengirim` (`id_pengirim`),
  ADD CONSTRAINT `barang_ibfk_3` FOREIGN KEY (`id_penerima`) REFERENCES `penerima` (`id_penerima`);

--
-- Constraints for table `kurir`
--
ALTER TABLE `kurir`
  ADD CONSTRAINT `kurir_ibfk_1` FOREIGN KEY (`id_pengiriman`) REFERENCES `pengiriman` (`id_pengiriman`);

--
-- Constraints for table `penerima`
--
ALTER TABLE `penerima`
  ADD CONSTRAINT `penerima_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`);

--
-- Constraints for table `pengirim`
--
ALTER TABLE `pengirim`
  ADD CONSTRAINT `pengirim_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`),
  ADD CONSTRAINT `pengirim_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`);

--
-- Constraints for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD CONSTRAINT `pengiriman_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`),
  ADD CONSTRAINT `pengiriman_ibfk_2` FOREIGN KEY (`id_kurir`) REFERENCES `kurir` (`id_kurir`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
