-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Feb 2020 pada 08.22
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_online`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(120) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id_brg`, `nama_brg`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(6, 'Peralatan Fitness Air Quincy Sports', 'QuincyLabel Tummy Trimmer Termurah', 'Peralatan Olahraga', 49000, 19, 'images_(3).jpg'),
(7, 'Sepeda Statis-Air bike', 'BG Alat Peralatan Fitness Sepeda Statis-Air bike- Alat Olahraga Murah 8702', 'Peralatan Olahraga', 1348300, 10, 'images_(4).jpg'),
(8, 'Roller Perut Roda-Kokoh', 'Roller Perut Roda-Kokoh AB Peralatan Olahraga untuk Latihan Inti-AB Perlengkapan Olahraga Seperti Otot Perut Toner-AB Perlengkapan Olahraga Digunakan seperti Di Rumah Peralatan Olahraga BAIK UNTUK Pria &amp; Wanita', 'Peralatan Olahraga', 157000, 5, 'images_(5)1.jpg'),
(9, '500m Super Strong Nylon Fishing Line Main Line Fly Fishing Accessory', 'Super Strong Nylon Fishing', 'Peralatan Olahraga', 34000, 450, 'images_(6).jpg'),
(11, 'Gamis GAMBAR LOL LED NYALA', 'Gamis GAMBAR LOL LED NYALA utk anak usia 6-11th dengan mangset ', 'Pakaian Anak-anak', 38000, 12, 'images_(7)1.jpg'),
(13, 'Gamis LOL LED NYALA', 'Gamis LOL LED NYALA anak utk usia 6-11thn', 'Pakaian Anak-anak', 38000, 15, 'images_(8).jpg'),
(14, 'JO &amp; NIC Kemeja Tunik Wanita', 'JO &amp; NIC Kemeja Tunik Wanita Lengan Panjang 3 size M/L/XL', 'Pakaian Wanita', 70200, 24, '7918338ceb935124cb5710cdb16c9ff0.jpg'),
(15, 'Shoppaholic Shop Baju Pria Marvel - Hitam', 'Shoppaholic Shop Baju Pria Marvel - Hitam', 'Pakaian Pria', 38000, 55, 'images_(9).jpg'),
(16, 'Pria Kerah Turndown Polo shirt', 'Pria Kerah Turndown Polo shirt anak muda Gaya Korea lengan pendek baju kaos pria Tren kepribadian kerah kemeja Lengan Pendek Kaos pada pakaian', 'Pakaian Pria', 140400, 23, 'images_(10).jpg'),
(17, 'mengo KAOS', 'mengo KAOS PRIA FASHION GENNARO 3 UKURAN M-L-XL', 'Pakaian Pria', 57500, 8, 'images_(11).jpg'),
(18, 'Kabel AV', 'Kabel Av beragam ukuran', 'Elektronik', 90000, 3, 'images_(12).jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(56) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`) VALUES
(1, 'Ahmad Mishbakhud Diyar', 'Rembang, Jawa tengah', '2020-02-01 05:21:49', '2020-02-02 05:21:49'),
(2, 'Estariani Putri', 'Blora, Jawa Tengah', '2020-02-02 08:28:46', '2020-02-03 08:28:46'),
(3, 'Sebastian Yonko', 'Kebumen, Jawa Tengah', '2020-02-02 09:05:31', '2020-02-03 09:05:31'),
(4, 'Finda Putri', 'Rembang, Jawa tengah', '2020-02-02 09:08:21', '2020-02-03 09:08:21'),
(5, 'Gus', 'Tangerang, Jakarta Selatan', '2020-02-02 09:11:47', '2020-02-03 09:11:47'),
(6, 'Fiersa Bersari', 'Bogor, Jawa barat', '2020-02-02 09:15:06', '2020-02-03 09:15:06'),
(7, 'Fiersa Bersari', 'Bogor, Jawa barat', '2020-02-02 09:16:15', '2020-02-03 09:16:15'),
(8, 'Ria Ricis', 'Bekasi, Jakarta Selatan', '2020-02-02 09:18:32', '2020-02-03 09:18:32'),
(9, 'Ahmad Luffy', 'Malang, Jawa Timur', '2020-02-02 11:15:00', '2020-02-03 11:15:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_brg`, `nama_brg`, `jumlah`, `harga`, `pilihan`) VALUES
(1, 1, 3, '0', 1, 350000, ''),
(2, 1, 4, '0', 2, 600000, ''),
(3, 2, 3, 'Sepatu Nike', 1, 350000, ''),
(4, 2, 4, 'Sepatu Lasem', 1, 600000, ''),
(5, 3, 3, 'Sepatu Nike', 1, 350000, ''),
(6, 4, 1, 'Sepatu', 1, 300000, ''),
(7, 5, 4, 'Sepatu Lasem', 1, 600000, ''),
(8, 6, 5, 'Tas Gunung Eiger', 1, 1250000, ''),
(9, 7, 5, 'Tas Gunung Eiger', 1, 1250000, ''),
(10, 8, 2, 'Sepatu Adidas', 1, 4500000, ''),
(11, 9, 1, 'Sepatu', 1, 300000, ''),
(12, 9, 6, 'Peralatan Fitness Air Quincy Sports', 1, 49000, '');

--
-- Trigger `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN
	UPDATE tb_barang SET stok = stok-NEW.jumlah
    WHERE id_brg = NEW.id_brg;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'admin', 'admin', '123', 1),
(3, 'Ahmad Mishbakhud Diyar', 'diyar', '$2y$10$xEerjAp/EiFY8T9WYPFqROyXs2IQm8RjXbiF.zTmrAJ', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indeks untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
