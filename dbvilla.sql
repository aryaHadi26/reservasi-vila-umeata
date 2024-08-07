-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Agu 2024 pada 16.21
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbvilla`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `jenis`, `deskripsi`, `gambar`) VALUES
(1, 'Kolam Renang', 'Ume Ata Villa & Resort menyediakan kolam renang private bagi pengunjung. Namun bagi masyarakat yang ingin sekedar foto, diperbolehkan dengan waktu yang ditentukan oleh pengelola.', 'kolam.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `No_Kamar` int(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri2`
--

CREATE TABLE `galeri2` (
  `id_galeri2` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri_bubara`
--

CREATE TABLE `galeri_bubara` (
  `id_bubara` int(11) NOT NULL,
  `keterangan` varchar(20) NOT NULL,
  `galeri` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `galeri_bubara`
--

INSERT INTO `galeri_bubara` (`id_bubara`, `keterangan`, `galeri`) VALUES
(1, 'tampak depan', 'bubaraa.jpg'),
(2, 'ruang tengah', 'bubarab.jpg'),
(3, 'ruang makan', 'bubarac.jpg'),
(4, 'kamar', 'bubarad.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri_tatihu`
--

CREATE TABLE `galeri_tatihu` (
  `id_tatihu` int(11) NOT NULL,
  `keterangan` varchar(20) NOT NULL,
  `galerii` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `galeri_tatihu`
--

INSERT INTO `galeri_tatihu` (`id_tatihu`, `keterangan`, `galerii`) VALUES
(1, 'kamar', 'tatihua.jpg'),
(2, 'ruang tengah', 'tatihub,jpg'),
(3, 'ruang makan', 'tatihuc.jpg'),
(4, 'kamar mandi', 'tatihud.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_bank`
--

CREATE TABLE `jenis_bank` (
  `id_bank` int(11) NOT NULL,
  `nama_bank` varchar(15) NOT NULL,
  `no_rek` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jenis_bank`
--

INSERT INTO `jenis_bank` (`id_bank`, `nama_bank`, `no_rek`) VALUES
(1, 'BRI', '297542589257120 (BRI)'),
(2, 'MANDIRI', '02772775195746 (MANDIRI)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar`
--

CREATE TABLE `kamar` (
  `No_Kamar` char(15) NOT NULL,
  `Jenis` varchar(50) DEFAULT NULL,
  `Type` varchar(50) DEFAULT NULL,
  `Tarif` double DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `kamar`
--

INSERT INTO `kamar` (`No_Kamar`, `Jenis`, `Type`, `Tarif`, `gambar`, `deskripsi`, `status`) VALUES
('1', 'Villa Bubara', 'Villa', 2500000, 'vilabubara.jpg', '2,500,000/ malam\r\nDetail Villa :\r\n2 Kamar tidur ukuran Queen Bed,\r\nRuang Tamu,\r\nRuang Makan,\r\nKamar Mandi dan Toilet.\r\n\r\nKapasitas kamar :\r\n4 Pax\r\nSampai dengan :\r\n8 Pax\r\nDengan penambahan Extra Bed Rp.200.000/malam.', 'Tidak Tersedia'),
('2', 'villa Salmaneti Kawalinya', 'villa', 2500000, 'vilakawalinya.jpg', '2,500,000 / malam\r\nDetail Villa :\r\n1 Kamar tidur utama,\r\n1 Kamar tidur twin bed,\r\nRuang Tamu,\r\nRuang Makan,\r\nKamar Mandi dan Toilet.\r\n\r\nKapasitas kamar :\r\n4 Pax\r\nSampai dengan :\r\n8 Pax\r\nDengan penambahan Extra Bed Rp.200.000/malam.', 'Tersedia'),
('3', 'Villa Tatihu', 'Villa', 1500000, 'vilatatihu.jpg', '1,500,000 / malam\r\nDetail Villa :\r\n1 Kamar tidur utama,\r\nRuang Tamu,\r\nRuang Makan,\r\nMini Kitchen,\r\nKamar Mandi dan Toilet.\r\n\r\nKapasitas kamar :\r\n2 Pax\r\nAtau 2 Dewasa, 2 Anak\r\nSampai dengan :\r\n4 Pax dewasa\r\nDengan penambahan Extra Bed Rp.200.000/malam', 'Tidak Tersedia'),
('4', 'Villa Garopa', 'villa', 2500000, 'vilagaropa.jpg', '2,500,000 / malam\r\n\r\nDetail Villa :\r\n1 Kamar tidur utama,\r\n1 Kamar tidur twin bed,\r\nRuang Tamu,\r\nRuang Makan,\r\nKamar Mandi dan Toilet.\r\n\r\nKapasitas kamar :\r\n4 Pax\r\nSampai dengan :\r\n8 Pax\r\nDengan penambahan Extra Bed Rp.200.000/malam.', 'Tersedia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfirmasi`
--

CREATE TABLE `konfirmasi` (
  `id_konfirmasi` int(11) NOT NULL,
  `id_pelanggan` int(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jumlah_transfer` int(11) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `gambar` text NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `jk` varchar(11) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama`, `username`, `password`, `no_hp`, `jk`, `alamat`, `email`) VALUES
(13, 'user', 'user', 'user1234', '081212121212', 'pria', 'asd', 'user@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `saran`
--

CREATE TABLE `saran` (
  `id_saran` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `nama` varchar(35) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `deskripsi1` varchar(50) NOT NULL,
  `deskripsi2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `slider`
--

INSERT INTO `slider` (`id_slider`, `gambar`, `deskripsi1`, `deskripsi2`) VALUES
(1, 'umeata.jpeg', 'Welcome To Ume Ata Villa & Resort', 'Villa & Resort');

-- --------------------------------------------------------

--
-- Struktur dari tabel `staff`
--

CREATE TABLE `staff` (
  `id_staff` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `nama` varchar(25) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tamu`
--

CREATE TABLE `tamu` (
  `id_pelanggan` char(15) NOT NULL,
  `Nama` varchar(100) DEFAULT NULL,
  `Alamat` char(15) DEFAULT NULL,
  `Asal` varchar(100) DEFAULT NULL,
  `NoTlp` char(15) DEFAULT NULL,
  `jk` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `No_Faktur` varchar(50) NOT NULL,
  `No_Kamar` char(15) NOT NULL,
  `id_pelanggan` varchar(11) NOT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `tgl_keluar` date DEFAULT NULL,
  `lama_menginap` int(11) NOT NULL,
  `Tarif` varchar(50) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Telpon` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`No_Faktur`, `No_Kamar`, `id_pelanggan`, `tgl_masuk`, `tgl_keluar`, `lama_menginap`, `Tarif`, `Nama`, `Telpon`, `Email`, `pesan`) VALUES
('66b31d455e763', '1', '11', '2024-08-07', '2024-08-10', 3, '250000', 'joko widodo', '0887968468', 'joko@gmail.com', ''),
('66b32de084e76', '3', '11', '2024-08-07', '2024-08-10', 3, '150000', 'joko widodo', '0887968468', 'joko@gmail.com', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `namauser` varchar(30) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `namauser`, `Username`, `Password`, `level`) VALUES
(5, 'admin', 'admin', 'admin1234', 'pimpinan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`),
  ADD KEY `No_Kamar` (`No_Kamar`);

--
-- Indeks untuk tabel `galeri2`
--
ALTER TABLE `galeri2`
  ADD PRIMARY KEY (`id_galeri2`);

--
-- Indeks untuk tabel `galeri_bubara`
--
ALTER TABLE `galeri_bubara`
  ADD PRIMARY KEY (`id_bubara`);

--
-- Indeks untuk tabel `galeri_tatihu`
--
ALTER TABLE `galeri_tatihu`
  ADD PRIMARY KEY (`id_tatihu`);

--
-- Indeks untuk tabel `jenis_bank`
--
ALTER TABLE `jenis_bank`
  ADD PRIMARY KEY (`id_bank`);

--
-- Indeks untuk tabel `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`No_Kamar`);

--
-- Indeks untuk tabel `konfirmasi`
--
ALTER TABLE `konfirmasi`
  ADD PRIMARY KEY (`id_konfirmasi`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`id_saran`);

--
-- Indeks untuk tabel `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indeks untuk tabel `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id_staff`);

--
-- Indeks untuk tabel `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`No_Faktur`),
  ADD KEY `No_Kamar` (`No_Kamar`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `galeri2`
--
ALTER TABLE `galeri2`
  MODIFY `id_galeri2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `galeri_bubara`
--
ALTER TABLE `galeri_bubara`
  MODIFY `id_bubara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `galeri_tatihu`
--
ALTER TABLE `galeri_tatihu`
  MODIFY `id_tatihu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `jenis_bank`
--
ALTER TABLE `jenis_bank`
  MODIFY `id_bank` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `konfirmasi`
--
ALTER TABLE `konfirmasi`
  MODIFY `id_konfirmasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `saran`
--
ALTER TABLE `saran`
  MODIFY `id_saran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `staff`
--
ALTER TABLE `staff`
  MODIFY `id_staff` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
