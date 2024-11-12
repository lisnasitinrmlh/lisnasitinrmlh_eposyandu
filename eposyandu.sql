-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Nov 2024 pada 04.57
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
-- Database: `eposyandu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_balita`
--

CREATE TABLE `data_balita` (
  `tgl_input` varchar(25) NOT NULL,
  `nib` int(25) NOT NULL,
  `nama_balita` varchar(50) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `tgl_lahir_balita` varchar(25) NOT NULL,
  `umur` varchar(25) NOT NULL,
  `bb` varchar(25) NOT NULL,
  `tb` varchar(25) NOT NULL,
  `lk` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data untuk tabel `data_balita`
--

INSERT INTO `data_balita` (`tgl_input`, `nib`, `nama_balita`, `nama_ayah`, `nama_ibu`, `gender`, `tgl_lahir_balita`, `umur`, `bb`, `tb`, `lk`) VALUES
('2024-11-02', 12345, 'Sakira Anjani', 'Fadil Jaidi', 'Siti', 'Laki-Laki', '2022-02-03', '2 Tahun', '40 kg', '100 cm', '10 cm');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_bayi`
--

CREATE TABLE `data_bayi` (
  `tgl_input` varchar(25) NOT NULL,
  `nib` int(25) NOT NULL,
  `nama_bayi` varchar(50) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `tgl_lahir_bayi` varchar(25) NOT NULL,
  `umur` varchar(25) NOT NULL,
  `bb` varchar(25) NOT NULL,
  `tb` varchar(25) NOT NULL,
  `lk` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data untuk tabel `data_bayi`
--

INSERT INTO `data_bayi` (`tgl_input`, `nib`, `nama_bayi`, `nama_ayah`, `nama_ibu`, `gender`, `tgl_lahir_bayi`, `umur`, `bb`, `tb`, `lk`) VALUES
('2024-11-02', 567894, 'Dilla Aurora', 'Budi Budiono', 'Asri Lestari', 'Laki-Laki', '2024-09-09', '2 Bulan', '20 kg', '50 cm', '10 cm');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_ibu`
--

CREATE TABLE `data_ibu` (
  `tgl_input` varchar(25) NOT NULL,
  `kode_peserta` int(25) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(25) NOT NULL,
  `nama_suami` varchar(50) NOT NULL,
  `tanggal_lahir_suami` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kb`
--

CREATE TABLE `data_kb` (
  `tgl_input` varchar(25) NOT NULL,
  `kode_peserta` int(25) NOT NULL,
  `nama_istri` varchar(50) NOT NULL,
  `nama_suami` varchar(50) NOT NULL,
  `program_kb` varchar(25) NOT NULL,
  `jenis_suntik` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data untuk tabel `data_kb`
--

INSERT INTO `data_kb` (`tgl_input`, `kode_peserta`, `nama_istri`, `nama_suami`, `program_kb`, `jenis_suntik`) VALUES
('2024-11-02', 4002, 'Yalili Azzahra', 'Zeje Bachim', 'Pel', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id` varchar(5) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `nisn` varchar(16) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat_lahir` varchar(60) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`id`, `nama`, `nisn`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `asal_sekolah`, `alamat`, `status`) VALUES
('1', 'Deswita', '987654321', 'Perempuan', 'Pemalang', '2021-10-01', 'SMP Negeri 86 Nusantara', 'Pemalang', 'Diterima'),
('2', 'Bejo Suloyo', '8376323', 'Laki-laki', 'Pekalongan', '1998-12-22', 'SLTP 2 Pekalongan', 'Sumedang', 'Masih Seleksi'),
('3', 'Slamet', '956354', 'Laki-laki', 'Semarang', '1998-01-06', 'SMP Negeri 86 Nusantara', 'Pemalang', 'Diterima'),
('4', 'Ahmad', '123456785', 'Laki-laki', 'Semarang', '1990-12-12', 'SMP Negeri 86 Nusantara', 'Jakarta', 'Masih Seleksi'),
('5', 'Alex', '12345', 'Laki-laki', 'Pemalang', '2021-10-07', 'SMP Negeri 86 Nusantara', 'Pemalang', 'Tidak Diterima'),
('6', 'Dita', '987654321', 'Perempuan', 'Pemalang', '2021-10-01', 'SMP Negeri 86 Nusantara', 'Pemalang', 'Diterima'),
('7', 'Dewita', '987654321', 'Perempuan', 'Pemalang', '2021-10-01', 'SMP Negeri 86 Nusantara', 'Pemalang', 'Tidak Diterima'),
('8', 'Bambang Sugiyono', '00065675465675', 'Laki-laki', 'Bandung', '2004-07-15', 'SMP 4 Bandung', 'Bandung, Jawa Barat', 'Diterima');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` varchar(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `pass` varchar(260) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `pass`, `type`) VALUES
('1', 'admin', 'admin', 'admin'),
('2', 'petugas1', '12345', 'siswa');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_balita`
--
ALTER TABLE `data_balita`
  ADD PRIMARY KEY (`nib`);

--
-- Indeks untuk tabel `data_bayi`
--
ALTER TABLE `data_bayi`
  ADD PRIMARY KEY (`nib`);

--
-- Indeks untuk tabel `data_ibu`
--
ALTER TABLE `data_ibu`
  ADD PRIMARY KEY (`kode_peserta`);

--
-- Indeks untuk tabel `data_kb`
--
ALTER TABLE `data_kb`
  ADD PRIMARY KEY (`kode_peserta`);

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_balita`
--
ALTER TABLE `data_balita`
  MODIFY `nib` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12346;

--
-- AUTO_INCREMENT untuk tabel `data_bayi`
--
ALTER TABLE `data_bayi`
  MODIFY `nib` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=567895;

--
-- AUTO_INCREMENT untuk tabel `data_ibu`
--
ALTER TABLE `data_ibu`
  MODIFY `kode_peserta` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202402;

--
-- AUTO_INCREMENT untuk tabel `data_kb`
--
ALTER TABLE `data_kb`
  MODIFY `kode_peserta` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4003;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
