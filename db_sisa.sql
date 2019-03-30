-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30 Mar 2019 pada 04.32
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
  `nama` varchar(255) NOT NULL,
  `pos_pendapatan` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mst_anggaran_masuk`
--

CREATE TABLE `mst_anggaran_masuk` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `biaya` int(11) NOT NULL,
  `ref_anggaran` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mst_anggaran_masuk`
--

INSERT INTO `mst_anggaran_masuk` (`id`, `nama`, `biaya`, `ref_anggaran`, `created_at`, `updated_at`) VALUES
(1, 'KELAS X', 382500, 1, '2019-03-30 03:32:13', '2019-03-30 03:32:13'),
(2, 'KELAS XI', 330000, 1, '2019-03-30 03:32:13', '2019-03-30 03:32:13'),
(3, 'KELAS XII', 335000, 1, '2019-03-30 03:32:13', '2019-03-30 03:32:13'),
(4, 'KELAS X', 1000000, 2, '2019-03-30 03:32:13', '2019-03-30 03:32:13'),
(5, 'KELAS XI', 1000000, 2, '2019-03-30 03:32:13', '2019-03-30 03:32:13'),
(6, 'KELAS XII', 1000000, 2, '2019-03-30 03:32:13', '2019-03-30 03:32:13'),
(7, 'KELAS X', 2500000, 3, '2019-03-30 03:32:13', '2019-03-30 03:32:13'),
(8, 'KELAS X', 15000, 4, '2019-03-30 03:32:13', '2019-03-30 03:32:13'),
(9, 'KELAS XI', 20000, 4, '2019-03-30 03:32:13', '2019-03-30 03:32:13'),
(10, 'KELAS XII', 20000, 4, '2019-03-30 03:32:13', '2019-03-30 03:32:13'),
(11, 'KELAS X', 15000, 5, '2019-03-30 03:32:13', '2019-03-30 03:32:13'),
(12, 'KELAS XI', 30000, 5, '2019-03-30 03:32:13', '2019-03-30 03:32:13'),
(13, 'KELAS XII', 30000, 5, '2019-03-30 03:32:13', '2019-03-30 03:32:13'),
(14, 'KELAS XII', 50000, 6, '2019-03-30 03:32:13', '2019-03-30 03:32:13'),
(15, 'KELAS XII', 55000, 7, '2019-03-30 03:32:13', '2019-03-30 03:32:13'),
(16, 'KELAS XII', 45000, 8, '2019-03-30 03:32:13', '2019-03-30 03:32:13'),
(17, 'KELAS X', 1200000, 9, '2019-03-30 03:32:14', '2019-03-30 03:32:14'),
(18, 'KELAS XI', 45000, 10, '2019-03-30 03:32:14', '2019-03-30 03:32:14'),
(19, 'KELAS X', 100000, 11, '2019-03-30 03:32:14', '2019-03-30 03:32:14'),
(20, 'KELAS X', 200000, 12, '2019-03-30 03:32:14', '2019-03-30 03:32:14'),
(21, 'KELAS XII', 1050000, 12, '2019-03-30 03:32:14', '2019-03-30 03:32:14'),
(22, 'KELAS X', 150000, 13, '2019-03-30 03:32:14', '2019-03-30 03:32:14'),
(23, 'KELAS X', 7500, 14, '2019-03-30 03:32:14', '2019-03-30 03:32:14'),
(24, 'KELAS XI', 20000, 14, '2019-03-30 03:32:14', '2019-03-30 03:32:14'),
(25, 'KELAS X', 5000, 15, '2019-03-30 03:32:14', '2019-03-30 03:32:14'),
(26, 'KELAS XI', 5000, 15, '2019-03-30 03:32:14', '2019-03-30 03:32:14'),
(27, 'KELAS XII', 5000, 15, '2019-03-30 03:32:14', '2019-03-30 03:32:14'),
(28, 'UANG PENERIMAAN REKENING LITRIK ATGI', 1600000, 16, '2019-03-30 03:32:14', '2019-03-30 03:32:14'),
(29, 'KELAS X', 12500, 17, '2019-03-30 03:32:14', '2019-03-30 03:32:14'),
(30, 'KELAS XI', 12500, 17, '2019-03-30 03:32:14', '2019-03-30 03:32:14'),
(31, 'KELAS XII', 40000, 17, '2019-03-30 03:32:14', '2019-03-30 03:32:14'),
(32, 'KELAS X', 100000, 18, '2019-03-30 03:32:14', '2019-03-30 03:32:14'),
(33, 'KELAS XI', 50000, 18, '2019-03-30 03:32:14', '2019-03-30 03:32:14'),
(34, 'KELAS XII', 50000, 18, '2019-03-30 03:32:14', '2019-03-30 03:32:14'),
(35, 'KELAS XII', 200000, 21, '2019-03-30 03:32:14', '2019-03-30 03:32:14'),
(36, 'KELAS XI', 25000, 22, '2019-03-30 03:32:14', '2019-03-30 03:32:14'),
(37, 'KELAS XII', 25000, 22, '2019-03-30 03:32:14', '2019-03-30 03:32:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mst_guru`
--

CREATE TABLE `mst_guru` (
  `id` int(11) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `status_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mst_guru`
--

INSERT INTO `mst_guru` (`id`, `nip`, `nama`, `status_id`, `created_at`, `updated_at`) VALUES
(1, '216105', 'Septiansah Nur Aziz', 1, '2019-03-23 16:25:18', '2019-03-27 15:34:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mst_kelas`
--

CREATE TABLE `mst_kelas` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jurusan_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mst_kelas`
--

INSERT INTO `mst_kelas` (`id`, `nama`, `jurusan_id`, `created_at`, `updated_at`) VALUES
(1, 'XII MM-2', 4, '2019-03-23 16:22:47', '2019-03-25 15:34:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mst_siswa`
--

CREATE TABLE `mst_siswa` (
  `id` int(11) NOT NULL,
  `nomor_induk` varchar(255) NOT NULL,
  `nomor_induk_nasional` varchar(255) DEFAULT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `agama_id` int(11) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `asal_sekolah` varchar(255) NOT NULL,
  `tahun_masuk` varchar(255) NOT NULL,
  `status_id` tinyint(1) NOT NULL,
  `nama_ayah` varchar(255) DEFAULT NULL,
  `nama_ibu` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mst_siswa`
--

INSERT INTO `mst_siswa` (`id`, `nomor_induk`, `nomor_induk_nasional`, `nama`, `alamat`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama_id`, `no_hp`, `email`, `asal_sekolah`, `tahun_masuk`, `status_id`, `nama_ayah`, `nama_ibu`, `foto`, `created_at`, `updated_at`) VALUES
(1, '92317077', '', 'Burhan Mafazi', 'Jl. Ngarai No. 5 Kelapa Dua Cimanggis Depok', 'JAKARTA', '1995-05-16', 'Laki-Laki', 1, '085695682973', 'burhanmafazi@gmail.com', 'SMP N 102 JAKARTA', '2018', 1, '', '', '', '2019-03-23 16:23:49', '2019-03-25 15:32:31');

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
-- Struktur dari tabel `ref_anggaran_keluar`
--

CREATE TABLE `ref_anggaran_keluar` (
  `id` int(11) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ref_anggaran_keluar`
--

INSERT INTO `ref_anggaran_keluar` (`id`, `kode`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'K1', 'Gaji & Tunjangan Karyawan Edukatif & Adm', '2019-03-29 16:54:27', '2019-03-29 16:54:27'),
(2, 'K2', 'Honor Kelebihan Mengajar', '2019-03-29 16:54:27', '2019-03-29 16:54:27'),
(3, 'K41', 'Tunjangan Fungsional SMK Grafika Y. Lektur', '2019-03-29 16:54:27', '2019-03-29 16:54:27'),
(4, 'K3', 'Biaya Honor 4 Satpam + 1 Koordinator', '2019-03-29 16:54:27', '2019-03-29 16:54:27'),
(5, 'K4', 'Biaya Uang Makan Guru Mengajar Praktik Sore', '2019-03-29 16:54:27', '2019-03-29 16:54:27'),
(6, 'K6', 'Tunjangan Hari Raya', '2019-03-29 16:54:27', '2019-03-29 16:54:27'),
(7, 'K6', 'Tenaga Pendidik dan Non Kependidikan', '2019-03-29 16:54:27', '2019-03-29 16:54:27'),
(8, 'K6', 'Pengawas', '2019-03-29 16:54:27', '2019-03-29 16:54:27'),
(9, 'K7', 'Honorarium TIM APBS', '2019-03-29 16:54:27', '2019-03-29 16:54:27'),
(10, 'K9', 'Biaya Praktikum *', '2019-03-29 16:54:27', '2019-03-29 16:54:27'),
(11, 'K13', 'Biaya ATK (Alat Tulis Kantor) *', '2019-03-29 16:54:27', '2019-03-29 16:54:27'),
(12, 'K14', 'Biaya Rekening Listrik *', '2019-03-29 16:54:27', '2019-03-29 16:54:27'),
(13, 'K16', 'Biaya Bahan Bakar Kendaraan Dinas & Transport', '2019-03-29 16:54:27', '2019-03-29 16:54:27'),
(14, 'K16', 'Mobil Toyota Kijang Inova', '2019-03-29 16:54:27', '2019-03-29 16:54:27'),
(15, 'K17', 'Motor Honda Revo Absolute', '2019-03-29 16:54:27', '2019-03-29 16:54:27'),
(16, '', 'Biaya Service Kendaraan Dinas', '2019-03-29 16:54:27', '2019-03-29 16:54:27'),
(17, 'K18', 'Mobil Toyota Kijang Inova', '2019-03-29 16:54:27', '2019-03-29 16:54:27'),
(18, 'K19', 'Motor Honda Revo Absolute', '2019-03-29 16:54:27', '2019-03-29 16:54:27'),
(19, 'K20', 'Biaya Pajak Kendaraan Dinas Mobil dan Motor ', '2019-03-29 16:54:27', '2019-03-29 16:54:27'),
(20, 'K34', 'Biaya Rapat Raker Tahun 2017/2018', '2019-03-29 16:54:27', '2019-03-29 16:54:27'),
(21, 'K34', 'Biaya Rapat Awal Tahun 2017/2018', '2019-03-29 16:54:27', '2019-03-29 16:54:27'),
(22, 'K35', 'Biaya Guru Piket', '2019-03-29 16:54:28', '2019-03-29 16:54:28'),
(23, 'K36', 'Biaya Konsumsi Guru dan Karyawan', '2019-03-29 16:54:28', '2019-03-29 16:54:28'),
(24, 'K5', 'Biaya Kesehatan Guru dan Karyawan', '2019-03-29 16:54:28', '2019-03-29 16:54:28'),
(25, 'K10', 'Biaya Perawatan Mesin', '2019-03-29 16:54:28', '2019-03-29 16:54:28'),
(26, 'K11', 'Biaya Perawatan Gedung', '2019-03-29 16:54:28', '2019-03-29 16:54:28'),
(27, 'K8', 'Biaya Internet', '2019-03-29 16:54:28', '2019-03-29 16:54:28'),
(28, 'K33', 'Pengembangan SDM', '2019-03-29 16:54:28', '2019-03-29 16:54:28'),
(29, 'K28', 'Promosi', '2019-03-29 16:54:28', '2019-03-29 16:54:28'),
(30, 'K15', 'Biaya Rekening Telpon', '2019-03-29 16:54:28', '2019-03-29 16:54:28'),
(31, 'K42', 'Biaya Akreditasi (Tabungan)', '2019-03-29 16:54:28', '2019-03-29 16:54:28'),
(32, 'K43', 'Biaya Monitoring Evaluasi', '2019-03-29 16:54:28', '2019-03-29 16:54:28'),
(33, 'K46', 'Biaya Hut SMK Grafika Y. Lektur', '2019-03-29 16:54:28', '2019-03-29 16:54:28'),
(34, 'K25', 'Biaya Osis *', '2019-03-29 16:54:28', '2019-03-29 16:54:28'),
(35, 'K22', 'Biaya Pelaksanaan Ulangan Umum & TKM', '2019-03-29 16:54:28', '2019-03-29 16:54:28'),
(36, 'K23', 'Biaya Pelaksanaan UN/US 2017/2018', '2019-03-29 16:54:28', '2019-03-29 16:54:28'),
(37, 'K24', 'Biaya Uji Praktek Keahlian Kelas XII', '2019-03-29 16:54:28', '2019-03-29 16:54:28'),
(38, 'K26', 'Biaya Wisuda Kelas XII', '2019-03-29 16:54:28', '2019-03-29 16:54:28'),
(39, 'K29', 'Biaya Pakai Seragam Kelas X', '2019-03-29 16:54:28', '2019-03-29 16:54:28'),
(40, 'K31', 'Biaya Prakerin Kelas XI', '2019-03-29 16:54:28', '2019-03-29 16:54:28'),
(41, 'K27', 'Biaya PPDB', '2019-03-29 16:54:28', '2019-03-29 16:54:28'),
(42, 'K32', 'Biaya Kunjungan Industri Kelas X', '2019-03-29 16:54:28', '2019-03-29 16:54:28'),
(43, 'K32', 'Biaya Tour Kelas XII', '2019-03-29 16:54:28', '2019-03-29 16:54:28'),
(44, 'K28', 'Biaya Mos dan LDK', '2019-03-29 16:54:28', '2019-03-29 16:54:28'),
(45, 'K39', 'Biaya Uji Kompetensi Kelas X dan XI', '2019-03-29 16:54:28', '2019-03-29 16:54:28'),
(46, 'K45', 'Biaya Komite Sekolah', '2019-03-29 16:54:28', '2019-03-29 16:54:28'),
(47, 'K48', 'Biaya Klinik Kesehatan Sekolah X,XI,XII', '2019-03-29 16:54:28', '2019-03-29 16:54:28'),
(48, 'K49', 'Biaya Urin Kelas X,XI,XII', '2019-03-29 16:54:28', '2019-03-29 16:54:28'),
(49, 'K52', 'Pendalaman Materi', '2019-03-29 16:54:28', '2019-03-29 16:54:28'),
(50, 'K53', 'Atribut Kelas XI, XII', '2019-03-29 16:54:28', '2019-03-29 16:54:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_anggaran_masuk`
--

CREATE TABLE `ref_anggaran_masuk` (
  `id` int(11) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ref_anggaran_masuk`
--

INSERT INTO `ref_anggaran_masuk` (`id`, `kode`, `nama`, `created_at`, `updated_at`) VALUES
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
(16, 'D16', 'UANG PENERIMAAN REKENING LISTRIK ATGI', '2019-03-23 16:32:24', '2019-03-30 02:06:56'),
(17, 'D17', 'UANG KKS (KLINIK KESEHATAN)', '2019-03-23 16:32:24', '2019-03-23 16:32:24'),
(18, 'D18', 'TES URINE', '2019-03-23 16:32:24', '2019-03-23 16:32:24'),
(19, 'D21', 'PENDALAMAN MATERI', '2019-03-23 16:32:24', '2019-03-23 16:32:24'),
(20, 'D22', 'ATRIBUT', '2019-03-23 16:32:24', '2019-03-23 16:32:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_jurusan`
--

CREATE TABLE `ref_jurusan` (
  `id` int(11) NOT NULL,
  `kode_jurusan` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `status_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ref_jurusan`
--

INSERT INTO `ref_jurusan` (`id`, `kode_jurusan`, `nama`, `status_id`, `created_at`, `updated_at`) VALUES
(1, 'DG', 'Desain Grafis', 1, '2019-03-25 15:28:52', '2019-03-27 15:56:32'),
(2, 'PG', 'Produksi Grafika', 1, '2019-03-25 15:28:52', '2019-03-27 16:52:59'),
(3, 'TKJ', 'Teknik Komputer dan Jaringan', 1, '2019-03-25 15:28:52', '2019-03-27 15:56:32'),
(4, 'MM', 'Multimedia', 1, '2019-03-25 15:28:52', '2019-03-27 15:56:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_periode`
--

CREATE TABLE `ref_periode` (
  `id` int(11) NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `semester` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `tahun_ajaran` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ref_periode`
--

INSERT INTO `ref_periode` (`id`, `tahun`, `semester`, `status`, `tahun_ajaran`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, '2018', 1, 1, '2018/2019', 'GANJIL', '2019-03-23 16:19:23', '2019-03-25 15:32:48');

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
(1, 'AKTIF', '2019-03-24 17:09:09', '2019-03-25 15:33:03'),
(2, 'NON-AKTIF', '2019-03-24 17:09:09', '2019-03-25 15:33:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tran_kelas`
--

CREATE TABLE `tran_kelas` (
  `id` int(11) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `periode_id` int(11) NOT NULL,
  `jurusan_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'Burhan Mafazi', 'bmafazi', '827ccb0eea8a706c4c34a16891f84e7b', 2, '2019-03-23 15:52:43', '2019-03-23 15:52:04', '2019-03-28 10:34:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mst_anggaran_keluar`
--
ALTER TABLE `mst_anggaran_keluar`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `ref_anggaran_keluar`
--
ALTER TABLE `ref_anggaran_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_anggaran_masuk`
--
ALTER TABLE `ref_anggaran_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_jurusan`
--
ALTER TABLE `ref_jurusan`
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
-- Indexes for table `tran_kelas`
--
ALTER TABLE `tran_kelas`
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
-- AUTO_INCREMENT for table `mst_anggaran_keluar`
--
ALTER TABLE `mst_anggaran_keluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mst_anggaran_masuk`
--
ALTER TABLE `mst_anggaran_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

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
-- AUTO_INCREMENT for table `ref_anggaran_keluar`
--
ALTER TABLE `ref_anggaran_keluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `ref_anggaran_masuk`
--
ALTER TABLE `ref_anggaran_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `ref_jurusan`
--
ALTER TABLE `ref_jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- AUTO_INCREMENT for table `tran_kelas`
--
ALTER TABLE `tran_kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
