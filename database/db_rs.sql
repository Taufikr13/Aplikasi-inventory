-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jul 2023 pada 12.11
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rs`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(11) NOT NULL,
  `kode_barang` varchar(12) NOT NULL,
  `nama_barang` varchar(60) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `stok` int(11) NOT NULL,
  `satuan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `kode_barang`, `nama_barang`, `deskripsi`, `stok`, `satuan`) VALUES
(1, 'KB0DBF', 'PEPSODEN', 'Baik', 80, 'kg'),
(2, 'KB0DBG', 'Kondom', '88800', 18, 'pcs'),
(3, 'MB202301', 'ciptaden', 'Baik', 10, 'pcs'),
(4, 'MB202302', 'dildo', 'alat ', 0, 'pcs'),
(5, 'MB202303', 'bola', 'alat ', 70, 'pcs'),
(6, 'kbgggg01', 'ciptaden lemon', '09888d', 90, 'pcs');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barangkeluar`
--

CREATE TABLE `tb_barangkeluar` (
  `id_barangKeluar` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `jumlahBarang` int(11) NOT NULL,
  `id_unit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_barangkeluar`
--

INSERT INTO `tb_barangkeluar` (`id_barangKeluar`, `id_barang`, `tanggal_keluar`, `jumlahBarang`, `id_unit`) VALUES
(11, 1, '2023-07-10', 10, 3);

--
-- Trigger `tb_barangkeluar`
--
DELIMITER $$
CREATE TRIGGER `kurangistok` AFTER INSERT ON `tb_barangkeluar` FOR EACH ROW BEGIN
UPDATE tb_barang SET stok = stok-NEW.jumlahBarang WHERE id_barang = NEW.id_barang;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barangmasuk`
--

CREATE TABLE `tb_barangmasuk` (
  `id_barangMasuk` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `jumlahBarang` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `id_supplier` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_barangmasuk`
--

INSERT INTO `tb_barangmasuk` (`id_barangMasuk`, `id_barang`, `tanggal_masuk`, `jumlahBarang`, `keterangan`, `id_supplier`) VALUES
(8, 3, '2023-07-10', 10, 'staditur', 1);

--
-- Trigger `tb_barangmasuk`
--
DELIMITER $$
CREATE TRIGGER `masuk` AFTER INSERT ON `tb_barangmasuk` FOR EACH ROW BEGIN
UPDATE tb_barang SET stok = stok+NEW.jumlahBarang WHERE id_barang = NEW.id_barang;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_supplier`
--

CREATE TABLE `tb_supplier` (
  `id_supplier` int(11) NOT NULL,
  `kode_supllier` varchar(10) NOT NULL,
  `nama_supplier` varchar(50) NOT NULL,
  `alamat_supplier` varchar(100) NOT NULL,
  `tlpn_supplier` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_supplier`
--

INSERT INTO `tb_supplier` (`id_supplier`, `kode_supllier`, `nama_supplier`, `alamat_supplier`, `tlpn_supplier`) VALUES
(1, 'KDB005', 'Taufik Rahmat ', 'Kp', '08578'),
(3, 'KBDG', 'ucok', 'kp.nenggeng', '086xx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_unitpenerima`
--

CREATE TABLE `tb_unitpenerima` (
  `id_unit` int(11) NOT NULL,
  `nama_unit` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_unitpenerima`
--

INSERT INTO `tb_unitpenerima` (`id_unit`, `nama_unit`, `keterangan`) VALUES
(1, 'un', 'aktik'),
(3, 'unit logistik', 'op');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(60) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `username`, `password`) VALUES
(1, 'Taufik Rahmat Hidayat', 'taufik13', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `tb_barangkeluar`
--
ALTER TABLE `tb_barangkeluar`
  ADD PRIMARY KEY (`id_barangKeluar`);

--
-- Indeks untuk tabel `tb_barangmasuk`
--
ALTER TABLE `tb_barangmasuk`
  ADD PRIMARY KEY (`id_barangMasuk`);

--
-- Indeks untuk tabel `tb_supplier`
--
ALTER TABLE `tb_supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indeks untuk tabel `tb_unitpenerima`
--
ALTER TABLE `tb_unitpenerima`
  ADD PRIMARY KEY (`id_unit`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_barangkeluar`
--
ALTER TABLE `tb_barangkeluar`
  MODIFY `id_barangKeluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_barangmasuk`
--
ALTER TABLE `tb_barangmasuk`
  MODIFY `id_barangMasuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_supplier`
--
ALTER TABLE `tb_supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_unitpenerima`
--
ALTER TABLE `tb_unitpenerima`
  MODIFY `id_unit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
