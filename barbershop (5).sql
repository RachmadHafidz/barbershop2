-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Des 2020 pada 13.46
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barbershop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(120) NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL,
  `alamat` varchar(120) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_customer`, `nama`, `username`, `password`, `alamat`, `no_telepon`, `role_id`) VALUES
(12, 'bagus', 'bagus123', 'caf1a3dfb505ffed0d024130f58c5cfa', 'kedungsari', '085673738383', 2),
(13, 'admin', 'ipang99', '21232f297a57a5a743894a0e4a801fc3', 'surabaya', '085738382929', 1),
(14, 'ifar', 'ifar123', '5ec829debe54b19a5f78d9a65b900a39', 'indonesia', '08576665666', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket_cukur`
--

CREATE TABLE `paket_cukur` (
  `id_paket` int(11) NOT NULL,
  `nama_paket` varchar(120) NOT NULL,
  `detail_paket` varchar(120) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `paket_cukur`
--

INSERT INTO `paket_cukur` (`id_paket`, `nama_paket`, `detail_paket`, `harga`, `status`) VALUES
(5, 'Paket Super Soni', 'cukur + keramass', '200000', '1'),
(8, 'PAKET LEGREK', 'CUKUR RAMBUTtttt', '200000', '0'),
(9, 'Paket Premium', 'cukur + keramas', '100000', ''),
(10, 'PAKET HEMATttt', 'cukur + keramas', '200000', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_order` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `nama_paket` varchar(120) NOT NULL,
  `detail_paket` varchar(120) NOT NULL,
  `harga` varchar(120) NOT NULL,
  `alamat_order` varchar(120) NOT NULL,
  `tanggal_order` date NOT NULL,
  `status_order` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_order`, `id_customer`, `id_paket`, `nama_paket`, `detail_paket`, `harga`, `alamat_order`, `tanggal_order`, `status_order`) VALUES
(14, 14, 8, 'PAKET LEGREK', 'CUKUR RAMBUTtttt', '200000', 'ds kedungsari dsn kemiri mojokerto', '2020-12-17', 'Belum Selesai'),
(16, 14, 9, 'Paket Premium', 'cukur + keramas', '100000', 'jombang', '2020-12-12', 'Belum Selesai'),
(17, 14, 5, 'Paket Super Soni', 'cukur + keramasssssssssssssssss', '200000', 'surabaya sunan ampel', '2020-12-08', 'Belum Selesai'),
(18, 12, 9, 'Paket Premium', 'cukur + keramas', '100.000', 'papua barat', '2020-12-13', 'Belum Selesai');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indeks untuk tabel `paket_cukur`
--
ALTER TABLE `paket_cukur`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_order`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `paket_cukur`
--
ALTER TABLE `paket_cukur`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
