-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 24, 2019 at 09:41 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sik`
--

-- --------------------------------------------------------

--
-- Table structure for table `bahan_baku`
--

CREATE TABLE `bahan_baku` (
  `id_bahan` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bahan_baku`
--

INSERT INTO `bahan_baku` (`id_bahan`, `nama`, `stok`) VALUES
(1, 'kayu', 0),
(2, 'lem', 0),
(3, 'skrup', 26),
(4, 'engsel', 50),
(5, 'cat', 16),
(6, 'kaca', 16);

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id` int(11) NOT NULL,
  `kd_trans` varchar(50) NOT NULL,
  `kd_barang` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id`, `kd_trans`, `kd_barang`, `jumlah`, `harga`, `status`) VALUES
(16, 'INV1904150084203', 4, 1, 4500000, 1),
(17, 'INV1904150084203', 1, 1, 2800000, 1),
(18, 'INV1904150084203', 5, 1, 5700000, 1),
(19, 'INV1904180033147', 4, 1, 4500000, 0),
(20, 'INV1904180033147', 5, 1, 5700000, 0),
(21, 'INV1904240085844', 1, 1, 2800000, 1),
(22, 'INV1904240085844', 4, 1, 4500000, 1),
(23, 'INV1904240085844', 5, 1, 5700000, 1),
(24, 'INV1904240093432', 4, 1, 4500000, 0),
(25, 'INV1904240093432', 5, 1, 5700000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_bahanbaku`
--

CREATE TABLE `pembelian_bahanbaku` (
  `id` int(11) NOT NULL,
  `tanggal_req` datetime NOT NULL,
  `kd_produksi` int(11) NOT NULL,
  `kd_bahan` int(11) NOT NULL,
  `request` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian_bahanbaku`
--

INSERT INTO `pembelian_bahanbaku` (`id`, `tanggal_req`, `kd_produksi`, `kd_bahan`, `request`, `status`) VALUES
(4, '2019-04-15 13:53:30', 33317, 1, 3, 2),
(5, '2019-04-18 08:45:44', 33317, 5, 3, 2),
(6, '2019-04-24 14:03:21', 33320, 5, 3, 2),
(7, '2019-04-24 14:05:51', 33321, 1, 1, 2),
(8, '2019-04-24 14:06:37', 33321, 1, 1, 2),
(9, '2019-04-24 14:08:27', 33322, 1, 9, 2);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `kd_barang` int(10) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `harga` int(50) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`kd_barang`, `nama_barang`, `deskripsi`, `harga`, `foto`) VALUES
(1, 'kursi macan', 'kursi dengan motif macan dari kayu pinus', 2800000, 'pen.jpg'),
(2, 'Almari monalisa', 'almari besar, bermotif istana', 9300000, 'note.jpg'),
(4, 'meja makan lingkaran', 'terbuat dari akar kayu jati tua yang sangat kokoh', 4500000, 'peng.jpg'),
(5, 'Pintu', 'Daun pintu motif batik', 5700000, 'folio.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `product_formula`
--

CREATE TABLE `product_formula` (
  `id_for` int(11) NOT NULL,
  `kd_produk` int(11) NOT NULL,
  `kd_bahan` int(11) NOT NULL,
  `jumlah_bahan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_formula`
--

INSERT INTO `product_formula` (`id_for`, `kd_produk`, `kd_bahan`, `jumlah_bahan`) VALUES
(4, 1, 1, 8),
(5, 1, 2, 5),
(6, 1, 5, 5),
(7, 2, 1, 20),
(8, 2, 5, 15),
(9, 2, 4, 14),
(10, 2, 3, 32),
(11, 2, 6, 6),
(12, 4, 1, 7),
(13, 4, 2, 5),
(14, 5, 1, 10),
(15, 5, 2, 5),
(16, 5, 5, 8);

-- --------------------------------------------------------

--
-- Table structure for table `produksi`
--

CREATE TABLE `produksi` (
  `id_produk` int(11) NOT NULL,
  `tgl_produksi` datetime NOT NULL,
  `kd_pembelian` int(11) NOT NULL,
  `kd_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produksi`
--

INSERT INTO `produksi` (`id_produk`, `tgl_produksi`, `kd_pembelian`, `kd_produk`, `jumlah`, `status`) VALUES
(33317, '2019-04-15 13:44:51', 17, 1, 1, 1),
(33318, '2019-04-15 13:45:05', 16, 4, 1, 2),
(33319, '2019-04-15 13:45:08', 18, 5, 1, 2),
(33320, '2019-04-24 14:01:40', 21, 1, 1, 2),
(33321, '2019-04-24 14:01:55', 22, 4, 1, 2),
(33322, '2019-04-24 14:01:58', 23, 5, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `keterangan`) VALUES
(0, 'Transaksi Dibatalkan'),
(1, 'Menunggu Verifikasi Pembayaran'),
(2, 'Pembayaran Tidak Valid, Transaksi Dibatalkan'),
(3, 'Sedang Diteruskan ke Bag.Produksi'),
(4, 'Sedang di Produksi'),
(5, 'Produksi Selesai, diteruskan ke Bag.Pengiriman '),
(6, 'Barang Dalam Pengiriman Kurir'),
(7, 'Transaksi Selesai, Barang Diterima');

-- --------------------------------------------------------

--
-- Table structure for table `status_produksi`
--

CREATE TABLE `status_produksi` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_produksi`
--

INSERT INTO `status_produksi` (`id`, `keterangan`) VALUES
(1, 'sedang di produksi'),
(2, 'Produksi Selesai ');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `kd_trans` varchar(50) NOT NULL,
  `tgl_trans` date NOT NULL,
  `tgl_pembayaran` datetime NOT NULL,
  `tgl_pengiriman` date NOT NULL,
  `kd_cust` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `total` int(11) NOT NULL,
  `bukti` varchar(250) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`kd_trans`, `tgl_trans`, `tgl_pembayaran`, `tgl_pengiriman`, `kd_cust`, `nama`, `alamat`, `total`, `bukti`, `status`) VALUES
('INV1904150084203', '2019-04-15', '2019-04-15 13:42:18', '0000-00-00', 6, 'okky', 'malang', 13000000, 'pembayarancustomer/620190415134218.jpg', 7),
('INV1904180033147', '2019-04-18', '2019-04-18 08:33:00', '0000-00-00', 6, 'awaw', 'aaafff', 10200000, 'pembayarancustomer/620190418083300.JPG', 1),
('INV1904240085844', '2019-04-24', '2019-04-24 13:59:09', '0000-00-00', 6, 'okky', 'malang', 13000000, 'pembayarancustomer/620190424135909.png', 7),
('INV1904240093432', '2019-04-24', '2019-04-24 14:34:56', '0000-00-00', 6, 'okky', 'kembang turi', 10200000, 'pembayarancustomer/620190424143456.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `kd_cust` int(10) NOT NULL,
  `nama_cust` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`kd_cust`, `nama_cust`, `alamat`, `email`, `password`, `level`) VALUES
(1, 'faisal', 'jalkam', 'f@gmail.com', 'a', 6),
(2, 'wildan', 'jl', 'w@gmail.com', 'a', 4),
(3, 'anji', 'ass', 'a@gmail.com', 'a', 5),
(4, 'momo', 'm', 'm@gmail.com', 'a', 2),
(5, 'panji', 'as', 'p@gmail.com', 'a', 3),
(6, 'okky', 'blitar', 'ok@gmail.com', 'a', 6),
(7, 'nyakk', 'mlggg', 'nyak@gmail.com', 'a', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bahan_baku`
--
ALTER TABLE `bahan_baku`
  ADD PRIMARY KEY (`id_bahan`),
  ADD UNIQUE KEY `nama` (`nama`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kd_trans` (`kd_trans`),
  ADD KEY `kd_barang` (`kd_barang`);

--
-- Indexes for table `pembelian_bahanbaku`
--
ALTER TABLE `pembelian_bahanbaku`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_req_kdbahan` (`kd_bahan`),
  ADD KEY `fk_req_kdproduksi` (`kd_produksi`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`kd_barang`),
  ADD KEY `kd_barang` (`kd_barang`);

--
-- Indexes for table `product_formula`
--
ALTER TABLE `product_formula`
  ADD PRIMARY KEY (`id_for`),
  ADD KEY `fk_produk_formula` (`kd_produk`),
  ADD KEY `fk_formula_bahan` (`kd_bahan`);

--
-- Indexes for table `produksi`
--
ALTER TABLE `produksi`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `fk_produk_pembelian` (`kd_pembelian`),
  ADD KEY `fk_statusproduksi` (`status`),
  ADD KEY `fk_kd_produk` (`kd_produk`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status_produksi`
--
ALTER TABLE `status_produksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`kd_trans`),
  ADD UNIQUE KEY `kd_trans` (`kd_trans`),
  ADD KEY `kd_cust` (`kd_cust`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`kd_cust`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bahan_baku`
--
ALTER TABLE `bahan_baku`
  MODIFY `id_bahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `pembelian_bahanbaku`
--
ALTER TABLE `pembelian_bahanbaku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `kd_barang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_formula`
--
ALTER TABLE `product_formula`
  MODIFY `id_for` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `produksi`
--
ALTER TABLE `produksi`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33323;

--
-- AUTO_INCREMENT for table `status_produksi`
--
ALTER TABLE `status_produksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `kd_cust` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `fk_pembelian_produk` FOREIGN KEY (`kd_barang`) REFERENCES `product` (`kd_barang`),
  ADD CONSTRAINT `sdasdasd` FOREIGN KEY (`kd_trans`) REFERENCES `transaksi` (`kd_trans`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pembelian_bahanbaku`
--
ALTER TABLE `pembelian_bahanbaku`
  ADD CONSTRAINT `fk_req_kdbahan` FOREIGN KEY (`kd_bahan`) REFERENCES `bahan_baku` (`id_bahan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_req_kdproduksi` FOREIGN KEY (`kd_produksi`) REFERENCES `produksi` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_formula`
--
ALTER TABLE `product_formula`
  ADD CONSTRAINT `fk_formula_bahan` FOREIGN KEY (`kd_bahan`) REFERENCES `bahan_baku` (`id_bahan`),
  ADD CONSTRAINT `fk_produk_formula` FOREIGN KEY (`kd_produk`) REFERENCES `product` (`kd_barang`);

--
-- Constraints for table `produksi`
--
ALTER TABLE `produksi`
  ADD CONSTRAINT `fk_kd_produk` FOREIGN KEY (`kd_produk`) REFERENCES `product` (`kd_barang`),
  ADD CONSTRAINT `fk_produk_pembelian` FOREIGN KEY (`kd_pembelian`) REFERENCES `pembelian` (`id`),
  ADD CONSTRAINT `fk_statusproduksi` FOREIGN KEY (`status`) REFERENCES `status_produksi` (`id`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `fk_cust` FOREIGN KEY (`kd_cust`) REFERENCES `user` (`kd_cust`),
  ADD CONSTRAINT `fk_jenis_status` FOREIGN KEY (`status`) REFERENCES `status` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
