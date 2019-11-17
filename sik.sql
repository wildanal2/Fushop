-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 17 Nov 2019 pada 15.13
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 5.6.40

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
-- Struktur dari tabel `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `category`
--

INSERT INTO `category` (`id`, `keterangan`) VALUES
(1, 'cloth sofa'),
(2, 'Kursi Kantor'),
(3, 'Karpet'),
(4, 'Matterss & Bed');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `kd_barang` int(10) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `longdeskripsi` text NOT NULL,
  `berat` double NOT NULL,
  `harga` int(50) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `id_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`kd_barang`, `nama_barang`, `deskripsi`, `longdeskripsi`, `berat`, `harga`, `shop_id`, `id_category`) VALUES
(1, 'FLINTAN', 'Kursi kantor, vissle hitam', '', 0, 999000, 1, 2),
(2, 'NOMINELL/FLINTAN', 'Kursi kantor dgn sndrn tangan, abu-abu', '', 0, 1249000, 1, 2),
(3, 'LÅNGFJÄLL', 'Kursi kantor dgn sndrn tangan, gunnared abu-abu tua/putih', '', 0, 3199000, 1, 2),
(4, 'FJÄLLBERGET', 'Kursi rapat, veneer kayu oak diwarnai putih/gunnared krem', '', 0, 2999000, 1, 2),
(5, 'JÄRVFJÄLLET', 'Kursi kantor dgn sndrn tangan, glose hitam', '', 0, 3799000, 1, 2),
(6, 'TROLLBERGET', 'Penyangga berdiri/duduk aktif, glose hitam', '', 0, 1999000, 1, 2),
(7, 'HATTEFJÄLL', 'Kursi kantor dgn sndrn tangan, gunnared abu-abu medium/putih', '', 0, 3999000, 1, 2),
(8, 'MARKUS', 'Kursi kantor, glose hitam', '', 0, 2999000, 1, 2),
(9, 'NOMINELL/FLINTAN', 'Kursi kantor dgn sndrn tangan, abu-abu', '', 0, 1249000, 1, 2),
(11, 'Kursi Busa Polar - Ikea', 'Kursi Busa nyaman berbahan polar', 'kursi di import dari luar negeri', 2, 349000, 2, 2),
(15, 'klippan', 'Sofa 2 dudukan, vissle abu-abu', 'Kami meluncurkan sofa KLIPPAN pada 1980-an dan sampai sekarang masih menjadi favorit. Nyaman, pas hampir di mana-mana dan memiliki banyak sarung untuk dipilih. Klasik modern dan abadi!', 49.2, 2895000, 2, 1),
(16, 'hemlingby', 'Sofa 2 dudukan, knisa abu-abu tua', 'sofa kecil berukuran kecil dan rapi yang mudah dilengkapi, meskipun ruang terbatas.', 34.32, 1795000, 2, 1),
(17, 'knopparp', 'Sofa 2 dudukan, knisa abu-abu muda', 'KNOPPARP adalah sofa kecil dengan hati besar yang sangat cocok di mana pun di ruang terbatas. Dirancang dengan cerdas, ringan, serta dengan sarung empuk nan nyaman dan menggunakan lebih sedikit bahan sehingga baik untuk planet ini.', 17.42, 1995000, 2, 1),
(18, 'VIMLE', 'Sofa 3 dudukan, dengan ujung terbuka/dalstorp aneka warna', 'Sofa ini dapat dibentuk sesuai dengan keinginan Anda untuk ruangan di rumah. Pilih jumlah dudukannya, desain dan fungsi. Sebagaimana keluarga Anda atau rumah Anda berkembang, tambahkan sofa dan biarkan ikut tumbuh bersama Anda.', 40, 9090000, 2, 1),
(19, 'EKTORP', 'Sofa 2 dudukan, lofallet krem', 'Seri tempat duduk EKTORP kami tercinta memiliki desain yang abadi serta bantal kursi tebal nyaman yang indah. Sarung mudah diganti, sehingga belilah satu atau dua sarung tambahan dan ubah sesuai keinginan atau musim.', 60, 3995000, 2, 1),
(20, 'Boneka Hias', 'Boneka sepecial kain', 'terbuat dari bahan yang lembut 100% cotton', 0.2, 150000, 2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_foto`
--

CREATE TABLE `product_foto` (
  `id` int(11) NOT NULL,
  `fotoid` int(11) NOT NULL,
  `source` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `product_foto`
--

INSERT INTO `product_foto` (`id`, `fotoid`, `source`, `tag`) VALUES
(1, 1, 'products/filtan1.jpg', '1'),
(2, 2, 'products/0724628_PE734561_S5.jpg', '1'),
(3, 3, 'products/0726969_PE735470_S5.jpg', '1'),
(4, 4, 'products/0724716_PE734599_S5.jpg', 'q'),
(6, 15, 'products/2019-11-11-15-21-22.jpg', 'Sofa'),
(7, 16, 'products/2019-11-11-15-24-59.jpg', 'Sofa'),
(8, 17, 'products/2019-11-11-15-26-52.jpg', 'Sofa'),
(9, 18, 'products/2019-11-11-15-30-17.jpg', 'Sofa'),
(10, 19, 'products/2019-11-11-15-33-35.jpg', 'Sofa'),
(11, 5, 'products/0725408_PE734840_S4.jpg', ''),
(12, 6, 'products/0460806_PE607042_S4.jpg', ''),
(13, 7, 'products/0724660_PE734558_S4.jpg', ''),
(14, 8, 'products/0724714_PE734597_S4.jpg', ''),
(15, 9, 'products/0724709_PE734591_S4.jpg', ''),
(16, 11, 'products/0661921_PE712124_S4.jpg', ''),
(17, 20, 'products/2019-11-11-17-47-51.jpg', 'Sofa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `shop`
--

CREATE TABLE `shop` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `shop_name` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `nowa` varchar(20) NOT NULL,
  `kodepos` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `shop`
--

INSERT INTO `shop` (`id`, `user_id`, `shop_name`, `kota`, `nohp`, `nowa`, `kodepos`, `status`) VALUES
(1, 8, 'Sahabat Kayu', 'Kota Malang', '081333495201', '081333495201', 61411, 1),
(2, 12, 'IKEA OFFICIAL', 'Tanggerang', '', '', 16661, 1),
(3, 14, 'Informa Furniture', 'Surabaya', '', '', 16653, 1),
(4, 13, 'Olympic Furniture', 'Malang', '', '', 11641, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `kd_cust` int(10) NOT NULL,
  `first` varchar(255) NOT NULL,
  `last` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`kd_cust`, `first`, `last`, `email`, `password`, `level`, `status`) VALUES
(8, 'wildan', '', 'widanal2@gmail.com', '123', 3, 0),
(9, 'Jawa Timur', 'mubarok', 'njnj@gmail.com', '123123', 1, 1),
(10, 'joko', 'puti', 'jskajka@gmail.com', '123123', 1, 1),
(11, 'yasa', 'gaming', 'yasa@gmail.com', '12345', 1, 1),
(12, 'Ikea', 'official', 'ikea.official@gmail.com', '123123123', 3, 1),
(13, 'olympic', 'furniture', 'olympic.furniture@gmail.com', '123123123', 3, 1),
(14, 'informa', 'furniture', 'informa.furniture@gmail.com', '123123123', 3, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`kd_barang`),
  ADD KEY `kd_barang` (`kd_barang`),
  ADD KEY `fkproductshop` (`shop_id`),
  ADD KEY `category_prod` (`id_category`);

--
-- Indeks untuk tabel `product_foto`
--
ALTER TABLE `product_foto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkphotoproduct` (`fotoid`);

--
-- Indeks untuk tabel `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkuserid` (`user_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`kd_cust`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `kd_barang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `product_foto`
--
ALTER TABLE `product_foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `kd_cust` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `category_prod` FOREIGN KEY (`id_category`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fkproductshop` FOREIGN KEY (`shop_id`) REFERENCES `shop` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `product_foto`
--
ALTER TABLE `product_foto`
  ADD CONSTRAINT `fkphotoproduct` FOREIGN KEY (`fotoid`) REFERENCES `product` (`kd_barang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `shop`
--
ALTER TABLE `shop`
  ADD CONSTRAINT `fkuserid` FOREIGN KEY (`user_id`) REFERENCES `user` (`kd_cust`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
