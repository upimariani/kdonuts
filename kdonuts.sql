-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jul 2022 pada 07.11
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.4.22

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
-- Struktur dari tabel `diskon`
--

CREATE TABLE `diskon` (
  `id_diskon` int(11) NOT NULL,
  `id_barang` varchar(11) NOT NULL,
  `nama_diskon` varchar(125) NOT NULL,
  `diskon` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `diskon`
--

INSERT INTO `diskon` (`id_diskon`, `id_barang`, `nama_diskon`, `diskon`, `time`) VALUES
(1, '9Ufwo', '0', 0, '2022-06-28 00:58:04'),
(2, 'L9vCb', '0', 0, '2022-06-28 01:11:31'),
(3, 'hfqZ2', '0', 0, '2022-06-28 01:12:59'),
(4, 'ViWhN', 'harian', 5, '2022-06-28 01:13:27'),
(5, 'owcph', '0', 0, '2022-06-28 01:14:02'),
(6, 'ydFlb', '0', 0, '2022-06-28 01:18:22'),
(7, 'oXPtL', '0', 0, '2022-06-28 01:19:04'),
(8, 'gFCpV', '0', 0, '2022-06-30 11:55:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kecamatan` int(11) NOT NULL,
  `nama_kecamatan` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `nama_kecamatan`) VALUES
(1, 'Ciawigebang'),
(2, 'Kuningan'),
(3, 'Cigugur');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ongkir`
--

CREATE TABLE `ongkir` (
  `id_ongkir` int(11) NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `desa_kel` varchar(30) NOT NULL,
  `ongkir` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ongkir`
--

INSERT INTO `ongkir` (`id_ongkir`, `id_kecamatan`, `desa_kel`, `ongkir`) VALUES
(1, 1, 'Ciawigebang', '10000'),
(2, 1, 'Cihaur', '12000'),
(3, 2, 'Purwawinangun', '6000'),
(4, 3, 'Cigadung', '10000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` varchar(10) NOT NULL,
  `id_barang` varchar(15) NOT NULL,
  `id_transaksi` varchar(30) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `id_barang`, `id_transaksi`, `quantity`) VALUES
('4MYae', 'hfqZ2', '20220717P7FXYQ1B', 1),
('TvsCE', 'L9vCb', '20220717P7FXYQ1B', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengiriman`
--

CREATE TABLE `pengiriman` (
  `id_pengiriman` int(11) NOT NULL,
  `id_transaksi` varchar(30) NOT NULL,
  `id_ongkir` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `status_pengiriman` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengiriman`
--

INSERT INTO `pengiriman` (`id_pengiriman`, `id_transaksi`, `id_ongkir`, `alamat`, `status_pengiriman`) VALUES
(1, '20220717P7FXYQ1B', 1, 'RT. 12 RW. 2 Desa/Kel. Ciawigebang, Kuningan', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penilaian_pelanggan`
--

CREATE TABLE `penilaian_pelanggan` (
  `id_penilaian` int(11) NOT NULL,
  `id_pemesanan` varchar(10) NOT NULL,
  `info_penilaian` int(11) NOT NULL,
  `review` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penilaian_pelanggan`
--

INSERT INTO `penilaian_pelanggan` (`id_penilaian`, `id_pemesanan`, `info_penilaian`, `review`, `tanggal`) VALUES
(1, 'TvsCE', 5, 'enak bangett', '2022-07-17 05:09:55'),
(2, '4MYae', 4, 'recommeden', '2022-07-17 05:10:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
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
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_barang`, `nama_barang`, `harga_barang`, `deskripsi`, `qty_barang`, `gambar`) VALUES
('9Ufwo', 'Lotus Biscoff', '15000', 'Donut with cocho lotus biscof', 44, '0f5fd6d73fff88b485267569d878a1bf.jpg'),
('gFCpV', 'coba', '10000', 'sdsd', 30, 'ec7015644f02c6f571656d636c229904.jpg'),
('hfqZ2', 'Ravolis', '10000', 'Donuts Ravolis Donus', 99, '2d58d5b6cebaeb06f84f5b278b6188b8.jpg'),
('L9vCb', 'Biscuit Donut', '10000', 'Donuts Oreo Valia', 92, '1b3c89bce8ea4b99389d23686bb1bdfe.jpg'),
('owcph', 'Red Velvet', '15000', 'Donuts Red Velvet and Vanila Delight', 99, 'bd403c59b5470bf4cdbd4ef55e5cd856.jpg'),
('oXPtL', 'Sugar Donuts', '15000', 'Donuts Sugar Melted', 89, '4e08d06fc841a907fc4c9ccfe7732a71.jpg'),
('ViWhN', 'Blubery', '12000', 'Bluberry Donuts', 90, '176cd46e04c2f17dd5fd8a4f03611345.jpg'),
('ydFlb', 'Green Tea', '16000', 'Green Tea Donut', 97, '9aced0576437cfcf3f0f8ab606b6a170.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` varchar(30) NOT NULL,
  `id_user` int(11) NOT NULL,
  `total_order` varchar(12) NOT NULL,
  `tanggal_order` varchar(15) NOT NULL,
  `pembayaran` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `total_order`, `tanggal_order`, `pembayaran`) VALUES
('20220717P7FXYQ1B', 7, '50000', '2022-07-17', 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-11.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
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
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `password`, `nama_lengkap`, `alamat`, `no_hp`, `kode_pos`, `level_user`) VALUES
(1, 'admin', 'aril@gmail.com', 'admin123', 'Aril F', 'Kuningan Jawa Barat', '085156727368', 45552, 1),
(3, 'pemilik', 'pemilik@gmail.com', 'pemilik', 'Pemilik', 'LINK.KRAMAT JAYA RT/RW 007/003', '085156727368', 45552, 2),
(7, 'zikra', 'zikra@gmail.com', 'zikra123', 'Zikra Ahmad', 'LINK.KRAMAT JAYA RT/RW 007/003', '085156727368', 45552, 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `diskon`
--
ALTER TABLE `diskon`
  ADD PRIMARY KEY (`id_diskon`);

--
-- Indeks untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indeks untuk tabel `ongkir`
--
ALTER TABLE `ongkir`
  ADD PRIMARY KEY (`id_ongkir`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indeks untuk tabel `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`id_pengiriman`);

--
-- Indeks untuk tabel `penilaian_pelanggan`
--
ALTER TABLE `penilaian_pelanggan`
  ADD PRIMARY KEY (`id_penilaian`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `diskon`
--
ALTER TABLE `diskon`
  MODIFY `id_diskon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `ongkir`
--
ALTER TABLE `ongkir`
  MODIFY `id_ongkir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pengiriman`
--
ALTER TABLE `pengiriman`
  MODIFY `id_pengiriman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `penilaian_pelanggan`
--
ALTER TABLE `penilaian_pelanggan`
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
