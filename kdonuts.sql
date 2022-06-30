-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2022 at 05:04 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kdonuts`
--

-- --------------------------------------------------------

--
-- Table structure for table `diskon`
--

CREATE TABLE `diskon` (
  `id_diskon` int(11) NOT NULL,
  `id_barang` varchar(11) NOT NULL,
  `nama_diskon` varchar(125) NOT NULL,
  `diskon` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diskon`
--

INSERT INTO `diskon` (`id_diskon`, `id_barang`, `nama_diskon`, `diskon`, `time`) VALUES
(1, '9Ufwo', '0', 0, '2022-06-28 00:58:04'),
(2, 'L9vCb', '0', 0, '2022-06-28 01:11:31'),
(3, 'hfqZ2', '0', 0, '2022-06-28 01:12:59'),
(4, 'ViWhN', 'harian', 5, '2022-06-28 01:13:27'),
(5, 'owcph', '0', 0, '2022-06-28 01:14:02'),
(6, 'ydFlb', '0', 0, '2022-06-28 01:18:22'),
(7, 'oXPtL', '0', 0, '2022-06-28 01:19:04');

-- --------------------------------------------------------

--
-- Table structure for table `ongkir`
--

CREATE TABLE `ongkir` (
  `id_ongkir` int(11) NOT NULL,
  `desa_kel` varchar(30) NOT NULL,
  `ongkir` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ongkir`
--

INSERT INTO `ongkir` (`id_ongkir`, `desa_kel`, `ongkir`) VALUES
(1, 'ciawigebang', '1000'),
(2, 'Ciawilor', '2000'),
(3, 'Cigarukgak', '3000'),
(4, 'cihaur', '4000'),
(5, 'cihirup', '5000'),
(6, 'cijagamulya', '6000'),
(7, 'cikubangmulya', '7000'),
(8, 'ciomas', '8000'),
(9, 'ciputat', '9000'),
(10, 'dukuhdalem', '10000'),
(11, 'geresik', '11000'),
(12, 'kadurama', '12000'),
(13, 'kapandayan', '13000'),
(14, 'karangkamulyan', '14000'),
(15, 'kramatmulya', '15000'),
(16, 'cibeureum', '16000'),
(17, 'cimara', '17000'),
(18, 'kawungsari', '18000'),
(19, 'randusari', '19000'),
(20, 'sukadana', '20000'),
(21, 'bantarpanjang', '21000'),
(22, 'ciangir', '22000'),
(23, 'cibingbin', '23000'),
(24, 'cipindok', '24000'),
(25, 'cisaat', '25000'),
(26, 'sitenjo', '26000'),
(27, 'dukuhbadag', '27000'),
(28, 'bunder', '28000'),
(29, 'cibulan', '29000'),
(30, 'cidahu', '30000'),
(31, 'cieurih', '31000'),
(32, 'cihidenggirang', '32000'),
(33, 'cikesik', '33000'),
(34, 'jatimulya', '34000'),
(35, 'Babakanjati', '35000'),
(36, 'Bunigeulis', '36000'),
(37, 'Cibuntu', '37000'),
(38, 'Indapatra', '38000'),
(39, 'Jambugeulis', '39000'),
(40, 'Karangmuncang', '40000'),
(41, 'Koreak', '41000'),
(42, 'Panawuanÿ', '42000'),
(43, 'Sangkanmulya', '43000'),
(44, 'Sangkanurip', '44000'),
(45, 'Timbang', '45000'),
(46, 'Babakanmulya', '46000'),
(47, 'Cigadung', '47000'),
(48, 'Cigugur', '48000'),
(49, 'Cileuleuy', '49000'),
(50, 'Cipari', '50000'),
(51, 'Cisantana', '51000'),
(52, 'Gunungkeling', '52000'),
(53, 'Puncak', '53000'),
(54, 'Sukamulya', '54000'),
(55, 'Winduherang', '55000'),
(56, 'Bungurberes', '56000'),
(57, 'Cilebak', '57000'),
(58, 'Cilimusari', '58000'),
(59, 'Jalatrang', '59000'),
(60, 'Legokherang', '60000'),
(61, 'Mandapajayaÿ', '61000'),
(62, 'Patala', '62000'),
(63, 'Bandorasa Kulon', '63000'),
(64, 'Bandorasa Wetan', '64000'),
(65, 'Bojongÿ', '65000'),
(66, 'Caracasÿ', '66000'),
(67, 'Cibeureum', '67000'),
(68, 'Sukajaya', '68000'),
(69, 'Mulyajaya', '69000'),
(70, 'Mekarjayaÿ', '70000'),
(71, 'Margamukti', '71000'),
(72, 'Cijemit', '72000'),
(73, 'Ciniru', '73000'),
(74, 'Cipedes', '74000'),
(75, 'Mekarsari', '75000'),
(76, 'Cimaranten', '76000'),
(77, 'Cipicung', '77000'),
(78, 'Karoya', '78000'),
(79, 'Babakanmulya', '79000'),
(80, 'Ciniru', '80000'),
(81, 'Jalaksana', '81000'),
(82, 'Maniskidulÿ', '82000'),
(83, 'Awirarangan', '83000'),
(84, 'Cibinuang', '84000'),
(85, 'Kuningan', '85000'),
(86, 'Purwawinangun', '86000'),
(87, 'Cijoho', '87000'),
(88, 'Ancaran', '88000'),
(89, 'Karangtawang', '89000'),
(90, 'Citangtuÿ', '90000');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` varchar(10) NOT NULL,
  `id_barang` varchar(15) NOT NULL,
  `id_transaksi` varchar(30) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `id_barang`, `id_transaksi`, `quantity`) VALUES
('1iovG', 'ydFlb', '20220629WHIIAJSX', 1),
('bTAJC', 'owcph', '20220630NTC4ZH1D', 1),
('Fjmuv', 'oXPtL', '20220630NTC4ZH1D', 1),
('I3fi4', '9Ufwo', '2022063041RW5BZD', 1),
('qepz9', 'oXPtL', '20220630FEVNLWHM', 10),
('RAmEh', 'ViWhN', '2022063041RW5BZD', 10),
('rLRQU', 'L9vCb', '20220629WHIIAJSX', 1),
('ul6fi', 'ydFlb', '20220630NTC4ZH1D', 2),
('vV9gM', '9Ufwo', '20220629WHIIAJSX', 3);

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman`
--

CREATE TABLE `pengiriman` (
  `id_pengiriman` int(11) NOT NULL,
  `id_transaksi` varchar(30) NOT NULL,
  `id_ongkir` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `status_pengiriman` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengiriman`
--

INSERT INTO `pengiriman` (`id_pengiriman`, `id_transaksi`, `id_ongkir`, `alamat`, `status_pengiriman`) VALUES
(1, '20220629WHIIAJSX', 6, 'Ciawigebang, Kuningan', 4),
(2, '20220630NTC4ZH1D', 55, 'Gunungkeling, Kuningan Jawa Barat', 0),
(3, '2022063041RW5BZD', 3, 'LINK.KRAMAT JAYA RT/RW 007/003', 3),
(4, '20220630FEVNLWHM', 1, 'Ciawigebang, Kuningan', 0);

-- --------------------------------------------------------

--
-- Table structure for table `penilaian_pelanggan`
--

CREATE TABLE `penilaian_pelanggan` (
  `id_penilaian` int(11) NOT NULL,
  `id_pemesanan` varchar(10) NOT NULL,
  `info_penilaian` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penilaian_pelanggan`
--

INSERT INTO `penilaian_pelanggan` (`id_penilaian`, `id_pemesanan`, `info_penilaian`, `tanggal`) VALUES
(1, 'vV9gM', 4, '2022-06-29 13:23:00'),
(2, 'rLRQU', 5, '2022-06-29 13:23:10'),
(3, '1iovG', 5, '2022-06-29 13:23:13'),
(4, 'bTAJC', 0, '2022-06-30 02:38:06'),
(5, 'ul6fi', 0, '2022-06-30 02:38:09'),
(6, 'Fjmuv', 0, '2022-06-30 02:38:12'),
(7, 'I3fi4', 0, '2022-06-30 02:38:15'),
(8, 'RAmEh', 0, '2022-06-30 02:38:18'),
(9, 'qepz9', 0, '2022-06-30 02:38:21');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_barang` varchar(11) NOT NULL,
  `nama_barang` varchar(125) NOT NULL,
  `harga_barang` varchar(15) NOT NULL,
  `deskripsi` text NOT NULL,
  `qty_barang` int(11) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_barang`, `nama_barang`, `harga_barang`, `deskripsi`, `qty_barang`, `gambar`) VALUES
('9Ufwo', 'Lotus Biscoff', '15000', 'Donut with cocho lotus biscof', 46, '0f5fd6d73fff88b485267569d878a1bf.jpg'),
('hfqZ2', 'Ravolis', '10000', 'Donuts Ravolis Donus', 100, '2d58d5b6cebaeb06f84f5b278b6188b8.jpg'),
('L9vCb', 'Biscuit Donut', '10000', 'Donuts Oreo Valia', 99, '1b3c89bce8ea4b99389d23686bb1bdfe.jpg'),
('owcph', 'Red Velvet', '15000', 'Donuts Red Velvet and Vanila Delight', 99, 'bd403c59b5470bf4cdbd4ef55e5cd856.jpg'),
('oXPtL', 'Sugar Donuts', '15000', 'Donuts Sugar Melted', 89, '4e08d06fc841a907fc4c9ccfe7732a71.jpg'),
('ViWhN', 'Blubery', '12000', 'Bluberry Donuts', 90, '176cd46e04c2f17dd5fd8a4f03611345.jpg'),
('ydFlb', 'Green Tea', '16000', 'Green Tea Donut', 97, '9aced0576437cfcf3f0f8ab606b6a170.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` varchar(30) NOT NULL,
  `id_user` int(11) NOT NULL,
  `total_order` varchar(12) NOT NULL,
  `tanggal_order` varchar(15) NOT NULL,
  `pembayaran` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `total_order`, `tanggal_order`, `pembayaran`) VALUES
('20220629WHIIAJSX', 7, '77000', '2022-06-29', 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-11.jpg'),
('2022063041RW5BZD', 7, '132000', '2022-06-30', 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-11.jpg'),
('20220630FEVNLWHM', 7, '151000', '2022-06-30', NULL),
('20220630NTC4ZH1D', 7, '117000', '2022-06-30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `kode_pos` int(11) NOT NULL,
  `level_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `password`, `nama_lengkap`, `alamat`, `no_hp`, `kode_pos`, `level_user`) VALUES
(1, 'admin', 'aril@gmail.com', 'admin123', 'Aril F', 'Kuningan Jawa Barat', '085156727368', 45552, 1),
(3, 'pemilik', 'pemilik@gmail.com', 'pemilik', 'Pemilik', 'LINK.KRAMAT JAYA RT/RW 007/003', '085156727368', 45552, 2),
(7, 'zikra', 'zikra@gmail.com', 'zikra123', 'Zikra Ahmad', 'LINK.KRAMAT JAYA RT/RW 007/003', '085156727368', 45552, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diskon`
--
ALTER TABLE `diskon`
  ADD PRIMARY KEY (`id_diskon`);

--
-- Indexes for table `ongkir`
--
ALTER TABLE `ongkir`
  ADD PRIMARY KEY (`id_ongkir`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`id_pengiriman`);

--
-- Indexes for table `penilaian_pelanggan`
--
ALTER TABLE `penilaian_pelanggan`
  ADD PRIMARY KEY (`id_penilaian`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diskon`
--
ALTER TABLE `diskon`
  MODIFY `id_diskon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ongkir`
--
ALTER TABLE `ongkir`
  MODIFY `id_ongkir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT for table `pengiriman`
--
ALTER TABLE `pengiriman`
  MODIFY `id_pengiriman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `penilaian_pelanggan`
--
ALTER TABLE `penilaian_pelanggan`
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
