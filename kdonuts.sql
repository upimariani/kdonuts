-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Agu 2022 pada 14.32
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
(9, 'uKxoD', '0', 0, '2022-07-19 12:05:32'),
(10, 'GCLOV', '0', 0, '2022-07-19 12:06:05'),
(11, 'PEzbm', '0', 0, '2022-07-19 12:06:31'),
(12, 'tMbg6', '0', 0, '2022-07-19 12:06:52'),
(13, 'qr83F', '0', 0, '2022-07-19 12:07:12'),
(14, 'ZGDfr', '0', 0, '2022-07-19 12:07:38'),
(15, '23VIZ', '0', 0, '2022-07-19 12:08:03'),
(16, '8UgSv', '0', 0, '2022-07-19 12:08:32'),
(17, 'azxSB', '0', 0, '2022-07-19 12:09:07'),
(18, 'TwG4u', '0', 0, '2022-07-19 12:09:35'),
(19, 'Cq0PG', '0', 0, '2022-07-19 12:10:07'),
(20, 'i1wf7', '0', 0, '2022-07-19 12:10:29'),
(21, 'vE7Cg', '0', 0, '2022-07-19 12:10:55'),
(22, 'YDgch', '0', 0, '2022-07-19 12:11:17'),
(23, '4fPQ8', '0', 0, '2022-07-19 12:11:46'),
(24, 'OAx8J', '0', 0, '2022-07-19 12:12:13');

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
(4, 'Cigandamekar'),
(5, 'Cigugur'),
(6, 'Cilimus'),
(7, 'Cipicung'),
(8, 'Jalaksana'),
(9, 'Kadugede'),
(10, 'Kramatmulya'),
(11, 'Kuningan'),
(12, 'Lebakwangi'),
(13, 'Nusaherang'),
(14, 'Sindangagung');

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
(1, 1, 'Ciawigebang', '15000'),
(2, 1, 'Cihaur', '15000'),
(5, 1, 'Ciawilor', '15000'),
(6, 1, 'Cihirup', '15000'),
(7, 1, 'Pamijahan', '15000'),
(8, 1, 'Pangkalan', '15000'),
(9, 1, 'Sidaraja', '15000'),
(10, 4, 'Bunigeulis', '12000'),
(11, 4, 'karangmuncang', '12000'),
(12, 4, 'Panawuan', '12000'),
(13, 4, 'Sangkanmulya', '11500'),
(14, 4, 'Sangkanurip', '11000'),
(15, 5, 'Babakanmulya', '10000'),
(16, 5, 'Cileuleuy', '11000'),
(17, 5, 'Cisantana', '11500'),
(18, 5, 'Gunungkeling', '7000'),
(19, 5, 'Puncak', '11500'),
(20, 5, 'Cigadung', '10000'),
(21, 5, 'Cigugur', '9000'),
(22, 5, 'Cipari', '7000'),
(23, 5, 'Sukamulya', '9500'),
(24, 6, 'Bandorasa Kulon', '12000'),
(25, 6, 'Bandorasa Wetan', '11500'),
(26, 6, 'Bojong', '12500'),
(27, 6, 'Caracas', '14500'),
(28, 6, 'Cilimus', '14000'),
(29, 6, 'Linggarjati', '12500'),
(30, 6, 'Sampora', '15000'),
(31, 6, 'Setianegara', '13000'),
(32, 7, 'Cipicung', '11000'),
(33, 7, 'Mekarsari', '11000'),
(34, 7, 'Muncangela', '10500'),
(35, 7, 'Pamulihan', '11000'),
(36, 7, 'Sukamukti', '11000'),
(37, 7, 'Susukan', '11500'),
(38, 7, 'Susukan', '11500'),
(39, 8, 'Jalaksana', '10000'),
(40, 8, 'Maniskidul', '11000'),
(41, 8, 'Manislor', '10500'),
(42, 8, 'Nanggerang', '10000'),
(43, 8, 'Sadamantra', '10000'),
(44, 8, 'Sindangbarang', '11000'),
(45, 9, 'Bayuning', '12000'),
(46, 9, 'Cipondok', '11000'),
(47, 9, 'Kadugede', '11500'),
(48, 9, 'Sindangjawa', '11000'),
(49, 9, 'Windujanten', '11000'),
(50, 10, 'Bojong', '8500'),
(51, 10, 'Cibentang', '8500'),
(52, 10, 'Cikaso', '9000'),
(53, 10, 'Cikubangsari', '9000'),
(54, 10, 'Cilaja', '8500'),
(55, 10, 'Cilowa', '8000'),
(56, 10, 'Gandasoli', '8500'),
(57, 10, 'Kramatmulya', '8500'),
(58, 10, 'Gereba', '8500'),
(59, 10, 'Karangmangu', '9000'),
(60, 10, 'Pajambon', '9000'),
(61, 10, 'Ragawacana', '8500'),
(62, 11, 'Ancaran', '8000'),
(63, 11, 'Cibinuang', '7000'),
(64, 11, 'Karangtawang', '8000'),
(65, 11, 'Kasturi', '7500'),
(66, 11, 'Kedungarum', '7500'),
(67, 11, 'Padarek', '7500'),
(68, 11, 'Awirarangan', '4000'),
(69, 11, 'Cigintung', '6000'),
(70, 11, 'Cijoho', '5000'),
(71, 11, 'Ciporang', '6500'),
(72, 11, 'Cirendang', '7500'),
(73, 11, 'Citangtu', '6000'),
(74, 11, 'Kuningan', '4000'),
(75, 11, 'Puwawinangun', '2000'),
(76, 11, 'Winduhaji', '6500'),
(77, 11, 'Windusengkahan', '6000'),
(78, 12, 'Bendungan', '9000'),
(79, 12, 'Cinagara', '9000'),
(80, 12, 'Cineumbeuy', '9000'),
(81, 12, 'Lebakwangi', '9000'),
(82, 12, 'Mancagar', '9000'),
(83, 12, 'Pagundan', '9000'),
(84, 13, 'Haurkuning', '13000'),
(85, 13, 'Kertawirama', '13000'),
(86, 13, 'Nusaherang', '13000'),
(87, 14, 'Babakanreuma', '8500'),
(88, 14, 'Kaduagung', '8500'),
(89, 14, 'Kertaungaran', '8500'),
(90, 14, 'Kertawangunan', '8500'),
(91, 14, 'Kertayasa', '8500'),
(92, 14, 'Mekarmukti', '8500'),
(93, 14, 'Sindangagung', '8500'),
(94, 14, 'Sindangsari', '7500'),
(95, 14, 'Taraju', '8500');

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
('45por', 'qr83F', '20220726U8KA0MPL', 3),
('90jLN', 'PEzbm', '20220809BFVIUTSM', 16),
('Aw4kP', 'uKxoD', '20220726PJ4NFKIL', 1),
('dnw6k', 'uKxoD', '20220726U8KA0MPL', 1),
('gpfzt', 'YDgch', '20220809BFVIUTSM', 21),
('iTEb6', 'qr83F', '20220726PJ4NFKIL', 1),
('l7k6H', 'YDgch', '20220809RQOO7QBZ', 2),
('Le02a', 'PEzbm', '20220726U8KA0MPL', 1),
('StvOZ', 'uKxoD', '20220726NJ7ZQUGP', 1);

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
(1, '20220726U8KA0MPL', 11, 'RT. 23 RW. 03 Desa/Kel. PAMIJAHAN ', 4),
(2, '20220726PJ4NFKIL', 45, 'RT. 14 RW. 03 Desa/Kel. kuningan', 4),
(3, '20220726NJ7ZQUGP', 84, 'RT. 14 RW. 34 Desa/Kel. kuningan', 4),
(4, '20220809BFVIUTSM', 19, 'RT. 12 RW. 03 Desa/Kel. LINK.KRAMAT JAYA RT/RW 007/003', 0),
(5, '20220809RQOO7QBZ', 12, 'RT. 12 RW. 2 Desa/Kel. coba', 0);

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
(1, '45por', 5, 'the best', '2022-07-26 11:40:06'),
(2, 'dnw6k', 4, 'enak banget', '2022-07-26 11:39:49'),
(3, 'Le02a', 2, 'crncy', '2022-07-26 11:39:58'),
(4, 'iTEb6', 3, 'enak bangett', '2022-07-26 12:05:40'),
(5, 'Aw4kP', 4, 'enakk', '2022-07-26 12:04:52'),
(6, 'StvOZ', 1, 'not bad', '2022-07-26 12:10:31'),
(7, 'gpfzt', 0, '', '0000-00-00 00:00:00'),
(8, '90jLN', 0, '', '0000-00-00 00:00:00'),
(9, 'l7k6H', 0, '', '0000-00-00 00:00:00');

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
('23VIZ', 'Meses', '6500', 'Donat topping meses pakai olesan cokelat bukan butter cream jadinya enak dan nyokelat banget', 28, 'Meses.jpg'),
('4fPQ8', 'Blueberry Kopyor', '6500', 'Donat dengan topping blueberry kopyor yang dihias dengan coklat yang berbentuk mata dan smile', 30, 'Blueberry_Kopyor.jpg'),
('8UgSv', 'Tiramisu', '6500', 'Donat dengan topping tiramisu lumer diatasnya', 30, 'Tiramisu.jpg'),
('azxSB', 'Strawberry Kopyor', '6500', 'Donat dengan topping strawberry yang menyelimuti bagian atas donat', 30, 'Strawberry_Kopyor.jpg'),
('Cq0PG', 'Vanilla Oreo', '6500', 'Donat dengan topping vanilla dan variasi bubuk oreo di atasnya', 29, 'Vanilla_Oreo.jpg'),
('GCLOV', 'Kacang Panggang', '6500', 'Donat topping coklat yang berpadu dengan kacang panggang diatasnya membuat donat terasa renyah dan dijamin bikin ketagihan', 30, 'Kacang_Panggang.jpg'),
('i1wf7', 'Lemon Kopyor', '6500', 'Donat dengan topping lemon kopyor yang dihias dengan coklat yang bertuliskan Iyou', 29, 'Lemon_Kopyor.jpg'),
('OAx8J', 'Choco Kopyor', '6500', 'Donat dengan topping choco kopyor yang dihias dengan susu berbentuk wajah dan terdapat jelly dibagian matanya', 30, 'Choco_Kopyor.jpg'),
('PEzbm', 'Almond', '6500', 'Donat topping chocolate yang menyelimuti bagian atas dan beberapa potongan almond', 13, 'Almond.jpg'),
('qr83F', 'White Forest', '6500', 'Donat dengan topping cokelat yang dilapisi dengan keju diatasnya', 26, 'White_Forest.jpg'),
('tMbg6', 'Black Forest', '6500', 'Donat dengan lapisan black forest', 30, 'Black_Forest.jpg'),
('TwG4u', 'Blueberry', '6500', 'Donat dengan topping bluberry yang menyelimuti bagian atas donat', 28, 'Blueberry.jpg'),
('uKxoD', 'Choco Vanilla', '6500', 'Donat topping vanilla dengan saus chocolate berbentuk kotak-kota diatasnya', 22, 'Choco_Vanilla.jpg'),
('vE7Cg', 'Choco Banana', '6500', 'Donat dengan topping choco dan dihias selai pisang diatasnya yang membentuk bunga', 30, 'Choco_Banana.jpg'),
('YDgch', 'Red Strawberry', '6500', 'Donat dengan topping strawberry yang menggoda dan dihias dengan selai strawberry yang berbentuk setangkai daun dan juga diberi meses diatasnya', 7, 'Red_Strawberry.jpg'),
('ZGDfr', 'Cappucino', '6500', 'Donat cokelat dengan topping cappucino', 30, 'Cappucino.jpg');

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
('20220726NJ7ZQUGP', 8, '19500', '2022-07-26', '31084499740-bukti_transfer1.jpg'),
('20220726PJ4NFKIL', 8, '25000', '2022-07-26', '31084499740-bukti_transfer.jpg'),
('20220726U8KA0MPL', 8, '44500', '2022-07-26', 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-13.jpg'),
('20220809BFVIUTSM', 13, '252000', '2022-08-09', NULL),
('20220809RQOO7QBZ', 13, '25000', '2022-08-09', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `id_ongkir` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `rt` varchar(5) NOT NULL,
  `rw` varchar(5) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `kode_pos` int(11) NOT NULL,
  `level_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `id_ongkir`, `username`, `email`, `password`, `nama_lengkap`, `alamat`, `rt`, `rw`, `no_hp`, `kode_pos`, `level_user`) VALUES
(1, 0, 'admin', 'aril@gmail.com', 'admin123', 'Aril F', 'Kuningan Jawa Barat', '', '', '085156727368', 45552, 1),
(3, 0, 'pemilik', 'pemilik@gmail.com', 'pemilik', 'Pemilik', 'LINK.KRAMAT JAYA RT/RW 007/003', '', '', '085156727368', 45552, 2),
(8, 0, 'beni1', 'beni@gmail.com', 'beni1', 'Beni Okto', 'Perumnas Ciporang', '', '', '081234567890', 45514, 3),
(9, 0, 'reva15', 'revatriana.permana03@gmail.com', 'reva15', 'Revatriana Permana', 'Desa Cilowa', '', '', '089693740125', 45523, 3),
(10, 0, 'pelanggan', 'firan6308@gmail.com', 'sdsd', 'coba coba', 'LINK.KRAMAT JAYA RT/RW 007/003', '', '', '0875698745633', 45552, 3),
(11, 0, 'dfdf', 'upimariani@gmail.com', 'dfre', 'sdsd sdfdf', 'LINK.KRAMAT JAYA RT/RW 007/003', '', '', '0875698745633', 45552, 3),
(12, 34, 'zikra', 'lusydwie08@gmail.com', 'eretr', 'sds ytu', 'LINK.KRAMAT JAYA RT/RW 007/003', '', '', '085156727368', 45552, 3),
(13, 19, 'pelanggan', 'lusydwie08@gmail.com', 'dffdd', 'csf fg', 'LINK.KRAMAT JAYA RT/RW 007/003', '12', '03', '0875698745633', 45552, 3);

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
  MODIFY `id_diskon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `ongkir`
--
ALTER TABLE `ongkir`
  MODIFY `id_ongkir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT untuk tabel `pengiriman`
--
ALTER TABLE `pengiriman`
  MODIFY `id_pengiriman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `penilaian_pelanggan`
--
ALTER TABLE `penilaian_pelanggan`
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
