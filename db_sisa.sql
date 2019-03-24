-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24 Mar 2019 pada 18.29
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sisa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mst_anggaran_keluar`
--

CREATE TABLE `mst_anggaran_keluar` (
  `id` int(11) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mst_anggaran_masuk`
--

CREATE TABLE `mst_anggaran_masuk` (
  `id` int(11) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mst_anggaran_masuk`
--

INSERT INTO `mst_anggaran_masuk` (`id`, `kode`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'D1', 'UANG SPP', '2019-03-23 16:26:13', '2019-03-23 16:26:13'),
(2, 'D2', 'UANG PRAKTIKUM', '2019-03-23 16:32:24', '2019-03-23 16:32:24'),
(3, 'D3', 'UANG PENGEMBANGAN PENDIDIKAN SISWA BARU', '2019-03-23 16:32:24', '2019-03-23 16:32:24'),
(4, 'D4', 'UANG OSIS', '2019-03-23 16:32:24', '2019-03-23 16:32:24'),
(5, 'D5', 'UANG KEGIATAN ULANGAN UMUM DAN TKM', '2019-03-23 16:32:24', '2019-03-23 16:32:24'),
(6, 'D6', 'UANG US/UN', '2019-03-23 16:32:24', '2019-03-23 16:32:24'),
(7, 'D7', 'UANG UN PRODUKTIF (UPK)', '2019-03-23 16:32:24', '2019-03-23 16:32:24'),
(8, 'D8', 'UANG WISUDA', '2019-03-23 16:32:24', '2019-03-23 16:32:24'),
(9, 'D9', 'UANG SERAGAM SEKOLAH', '2019-03-23 16:32:24', '2019-03-23 16:32:24'),
(10, 'D10', 'UANG PRAKERIN', '2019-03-23 16:32:24', '2019-03-23 16:32:24'),
(11, 'D11', 'UANG FORMULIR PPDB', '2019-03-23 16:32:24', '2019-03-23 16:32:24'),
(12, 'D12', 'UANG KUNJUNGAN INDUSTRI', '2019-03-23 16:32:24', '2019-03-23 16:32:24'),
(13, 'D13', 'UANG MOS DAN LDK', '2019-03-23 16:32:24', '2019-03-23 16:32:24'),
(14, 'D14', 'UANG UJI PRAKTEK KEAHLIAN', '2019-03-23 16:32:24', '2019-03-23 16:32:24'),
(15, 'D15', 'UANG KOMITE SEKOLAH', '2019-03-23 16:32:24', '2019-03-23 16:32:24'),
(16, 'D2', 'UANG PENERIMAAN REKENING LISTRIK ATGI', '2019-03-23 16:32:24', '2019-03-23 16:32:24'),
(17, 'D17', 'UANG KKS (KLINIK KESEHATAN)', '2019-03-23 16:32:24', '2019-03-23 16:32:24'),
(18, 'D18', 'TES URINE', '2019-03-23 16:32:24', '2019-03-23 16:32:24'),
(19, 'D21', 'PENDALAMAN MATERI', '2019-03-23 16:32:24', '2019-03-23 16:32:24'),
(20, 'D22', 'ATRIBUT', '2019-03-23 16:32:24', '2019-03-23 16:32:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mst_guru`
--

CREATE TABLE `mst_guru` (
  `id` int(11) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mst_guru`
--

INSERT INTO `mst_guru` (`id`, `nip`, `nama`, `created_at`, `updated_at`) VALUES
(1, '216105', 'Septiansah Nur Aziz', '2019-03-23 16:25:18', '2019-03-23 16:25:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mst_kelas`
--

CREATE TABLE `mst_kelas` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mst_kelas`
--

INSERT INTO `mst_kelas` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'XII - 2', '2019-03-23 16:22:47', '2019-03-23 16:22:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mst_siswa`
--

CREATE TABLE `mst_siswa` (
  `id` int(11) NOT NULL,
  `nomor_induk` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `kota_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `agama_id` int(11) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `asal_sekolah` varchar(255) NOT NULL,
  `tahun_masuk` varchar(255) NOT NULL,
  `status_id` tinyint(1) NOT NULL,
  `nama_ayah` varchar(255) NOT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mst_siswa`
--

INSERT INTO `mst_siswa` (`id`, `nomor_induk`, `nama`, `kelas_id`, `alamat`, `kota_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama_id`, `no_hp`, `email`, `asal_sekolah`, `tahun_masuk`, `status_id`, `nama_ayah`, `nama_ibu`, `created_at`, `updated_at`) VALUES
(1, '92317077', 'Burhan Mafazi', 1, 'Jl. Ngarai No. 5 Kelapa Dua Cimanggis Depok', 'JAKARTA', '1995-05-16', 'Laki-Laki', 1, '085695682973', 'burhanmafazi@gmail.com', 'SMP N 102 JAKARTA', '2018', 1, '', '', '2019-03-23 16:23:49', '2019-03-24 17:22:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_agama`
--

CREATE TABLE `ref_agama` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ref_agama`
--

INSERT INTO `ref_agama` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Islam', '2019-03-24 17:23:57', '2019-03-24 17:23:57'),
(2, 'Protestan', '2019-03-24 17:23:57', '2019-03-24 17:23:57'),
(3, 'Katolik', '2019-03-24 17:23:57', '2019-03-24 17:23:57'),
(4, 'Hindu', '2019-03-24 17:23:57', '2019-03-24 17:23:57'),
(5, 'Budha', '2019-03-24 17:23:57', '2019-03-24 17:23:57'),
(6, 'Kong Hu Cu', '2019-03-24 17:23:57', '2019-03-24 17:23:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_periode`
--

CREATE TABLE `ref_periode` (
  `id` int(11) NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ref_periode`
--

INSERT INTO `ref_periode` (`id`, `tahun`, `status`, `created_at`, `updated_at`) VALUES
(1, '2018/2019', 1, '2019-03-23 16:19:23', '2019-03-23 16:20:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_role`
--

CREATE TABLE `ref_role` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ref_role`
--

INSERT INTO `ref_role` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Kepala Sekolah', '2019-03-23 15:49:19', '2019-03-23 15:48:59'),
(2, 'Bendahara', '2019-03-23 15:49:11', '2019-03-23 15:48:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_status`
--

CREATE TABLE `ref_status` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ref_status`
--

INSERT INTO `ref_status` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Aktif', '2019-03-24 17:09:09', '2019-03-24 17:09:09'),
(2, 'Non-aktif', '2019-03-24 17:09:09', '2019-03-24 17:09:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `login_terakhir` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `role_id`, `created_at`, `updated_at`, `login_terakhir`) VALUES
(1, 'Burhan Mafazi', 'bmafazi', '827ccb0eea8a706c4c34a16891f84e7b', 2, '2019-03-23 15:52:43', '2019-03-23 15:52:04', '2019-03-24 10:48:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mst_anggaran_masuk`
--
ALTER TABLE `mst_anggaran_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_guru`
--
ALTER TABLE `mst_guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_kelas`
--
ALTER TABLE `mst_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_siswa`
--
ALTER TABLE `mst_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_agama`
--
ALTER TABLE `ref_agama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_periode`
--
ALTER TABLE `ref_periode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_role`
--
ALTER TABLE `ref_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_status`
--
ALTER TABLE `ref_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mst_anggaran_masuk`
--
ALTER TABLE `mst_anggaran_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `mst_guru`
--
ALTER TABLE `mst_guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mst_kelas`
--
ALTER TABLE `mst_kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mst_siswa`
--
ALTER TABLE `mst_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ref_agama`
--
ALTER TABLE `ref_agama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ref_periode`
--
ALTER TABLE `ref_periode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ref_role`
--
ALTER TABLE `ref_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ref_status`
--
ALTER TABLE `ref_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `ref_role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
