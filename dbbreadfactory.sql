-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jul 2024 pada 04.34
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbbreadfactory`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` int(11) NOT NULL,
  `id_Pegawai_Outlet` int(11) NOT NULL,
  `id_roti` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `keranjang`
--

INSERT INTO `keranjang` (`id_keranjang`, `id_Pegawai_Outlet`, `id_roti`, `jumlah`) VALUES
(3, 3, 8, 10),
(4, 3, 8, 1),
(5, 4, 9, 2),
(6, 4, 9, 12222);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mekanisme_pembayaran`
--

CREATE TABLE `mekanisme_pembayaran` (
  `id_mekanisme` int(11) NOT NULL,
  `Nama_Mekanisme` varchar(30) NOT NULL,
  `Nomor_Rekening` varchar(20) NOT NULL,
  `Nama_Bank` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mekanisme_pembayaran`
--

INSERT INTO `mekanisme_pembayaran` (`id_mekanisme`, `Nama_Mekanisme`, `Nomor_Rekening`, `Nama_Bank`) VALUES
(1, 'MBANGKING', '123', 'BNI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `memesan`
--

CREATE TABLE `memesan` (
  `tanggal_pembayaran` date NOT NULL,
  `jumlah_pesanan` int(11) NOT NULL,
  `tanggal_pesan` date NOT NULL,
  `id_outlet` int(11) NOT NULL,
  `id_Pegawai_Outlet` int(11) NOT NULL,
  `id_roti` int(11) NOT NULL,
  `id_Pegawai_Pabrik` int(11) NOT NULL,
  `id_mekanisme` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `outlet`
--

CREATE TABLE `outlet` (
  `id_outlet` int(11) NOT NULL,
  `nama_outlet` varchar(100) NOT NULL,
  `id_Pegawai_Outlet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `outlet`
--

INSERT INTO `outlet` (`id_outlet`, `nama_outlet`, `id_Pegawai_Outlet`) VALUES
(1, 'Rumah roti abadi', 2),
(2, 'Roti Denpasar', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai_outlet`
--

CREATE TABLE `pegawai_outlet` (
  `id_Pegawai_Outlet` int(11) NOT NULL,
  `Nama_pegawai_outlet` varchar(100) NOT NULL,
  `Alamat_pegawai_outlet` varchar(100) NOT NULL,
  `jabatan_pegawa_outlet` varchar(30) NOT NULL,
  `Divisi_pegawai_outlet` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pegawai_outlet`
--

INSERT INTO `pegawai_outlet` (`id_Pegawai_Outlet`, `Nama_pegawai_outlet`, `Alamat_pegawai_outlet`, `jabatan_pegawa_outlet`, `Divisi_pegawai_outlet`, `password`) VALUES
(3, 'Yoga', 'Jalan Kampial indah perumahan puri kampial, bali, denpasar', 'Pekerja', 'Pembuat Roti', '1'),
(4, 'sugi', '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai_pabrik`
--

CREATE TABLE `pegawai_pabrik` (
  `id_Pegawai_Pabrik` int(11) NOT NULL,
  `jabatan_pegawai_pabrik` varchar(10) NOT NULL,
  `Divisi_pegawai_pabrik` varchar(10) NOT NULL,
  `Nama_pegawai_pabrik` varchar(100) NOT NULL,
  `Alamat_pegawai_pabrik` varchar(100) NOT NULL,
  `No_hp_pegawai_pabrik` varchar(15) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pegawai_pabrik`
--

INSERT INTO `pegawai_pabrik` (`id_Pegawai_Pabrik`, `jabatan_pegawai_pabrik`, `Divisi_pegawai_pabrik`, `Nama_pegawai_pabrik`, `Alamat_pegawai_pabrik`, `No_hp_pegawai_pabrik`, `password`) VALUES
(1, '1', '1', '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `roti`
--

CREATE TABLE `roti` (
  `id_roti` int(11) NOT NULL,
  `jenis_roti` varchar(20) NOT NULL,
  `harga` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `roti`
--

INSERT INTO `roti` (`id_roti`, `jenis_roti`, `harga`) VALUES
(8, 'Abon ayam madu', 100000),
(9, 'Sapi panggang keju', 104000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`),
  ADD KEY `id_roti` (`id_roti`),
  ADD KEY `id_Pegawai_Outlet` (`id_Pegawai_Outlet`);

--
-- Indeks untuk tabel `mekanisme_pembayaran`
--
ALTER TABLE `mekanisme_pembayaran`
  ADD PRIMARY KEY (`id_mekanisme`);

--
-- Indeks untuk tabel `memesan`
--
ALTER TABLE `memesan`
  ADD PRIMARY KEY (`id_outlet`,`id_roti`),
  ADD KEY `id_roti` (`id_roti`),
  ADD KEY `id_Pegawai_Pabrik` (`id_Pegawai_Pabrik`),
  ADD KEY `id_mekanisme` (`id_mekanisme`),
  ADD KEY `id_Pegawai_Outlet` (`id_Pegawai_Outlet`);

--
-- Indeks untuk tabel `outlet`
--
ALTER TABLE `outlet`
  ADD PRIMARY KEY (`id_outlet`),
  ADD KEY `id_Pegawai_Outlet` (`id_Pegawai_Outlet`);

--
-- Indeks untuk tabel `pegawai_outlet`
--
ALTER TABLE `pegawai_outlet`
  ADD PRIMARY KEY (`id_Pegawai_Outlet`);

--
-- Indeks untuk tabel `pegawai_pabrik`
--
ALTER TABLE `pegawai_pabrik`
  ADD PRIMARY KEY (`id_Pegawai_Pabrik`);

--
-- Indeks untuk tabel `roti`
--
ALTER TABLE `roti`
  ADD PRIMARY KEY (`id_roti`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `mekanisme_pembayaran`
--
ALTER TABLE `mekanisme_pembayaran`
  MODIFY `id_mekanisme` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `outlet`
--
ALTER TABLE `outlet`
  MODIFY `id_outlet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pegawai_outlet`
--
ALTER TABLE `pegawai_outlet`
  MODIFY `id_Pegawai_Outlet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pegawai_pabrik`
--
ALTER TABLE `pegawai_pabrik`
  MODIFY `id_Pegawai_Pabrik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `roti`
--
ALTER TABLE `roti`
  MODIFY `id_roti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD CONSTRAINT `keranjang_ibfk_1` FOREIGN KEY (`id_Pegawai_Outlet`) REFERENCES `pegawai_outlet` (`id_Pegawai_Outlet`),
  ADD CONSTRAINT `keranjang_ibfk_2` FOREIGN KEY (`id_roti`) REFERENCES `roti` (`id_roti`);

--
-- Ketidakleluasaan untuk tabel `memesan`
--
ALTER TABLE `memesan`
  ADD CONSTRAINT `memesan_ibfk_1` FOREIGN KEY (`id_outlet`) REFERENCES `outlet` (`id_outlet`),
  ADD CONSTRAINT `memesan_ibfk_2` FOREIGN KEY (`id_roti`) REFERENCES `roti` (`id_roti`),
  ADD CONSTRAINT `memesan_ibfk_4` FOREIGN KEY (`id_mekanisme`) REFERENCES `mekanisme_pembayaran` (`id_mekanisme`),
  ADD CONSTRAINT `memesan_ibfk_5` FOREIGN KEY (`id_Pegawai_Outlet`) REFERENCES `pegawai_outlet` (`id_Pegawai_Outlet`);

--
-- Ketidakleluasaan untuk tabel `outlet`
--
ALTER TABLE `outlet`
  ADD CONSTRAINT `outlet_ibfk_1` FOREIGN KEY (`id_Pegawai_Outlet`) REFERENCES `pegawai_outlet` (`id_Pegawai_Outlet`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
