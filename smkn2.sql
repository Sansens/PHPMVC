-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Sep 2022 pada 15.29
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smkn2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `komli`
--

CREATE TABLE `komli` (
  `komli` varchar(20) DEFAULT NULL,
  `tgl_berdiri` date DEFAULT NULL,
  `nama_kakomli` varchar(50) DEFAULT NULL,
  `jum_siswa` smallint(5) UNSIGNED DEFAULT NULL,
  `akreditasi` enum('A','B','C','N/A') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `komli`
--

INSERT INTO `komli` (`komli`, `tgl_berdiri`, `nama_kakomli`, `jum_siswa`, `akreditasi`) VALUES
('Teknik Konstruksi da', '2004-04-23', 'HERY WAHYU DWIANTORO,S.T', 210, 'A'),
('Kuliner', '2004-04-23', 'AENG DWI ASMARANI, S.Pd', 432, 'A'),
('Desain Pemodelan dan', '2008-05-05', 'Drs. ENDRO SUPRIYONO', 321, 'A'),
('Rekayasa Perangkat L', '2011-07-10', 'ERVI RAHMAWATI, ST', 332, 'A'),
('Teknik Pemanasan, Ta', '2014-04-12', 'RICKE DWANA SERVIANTI, S.Pd', 358, 'N/A'),
('Akuntansi', '2015-07-25', 'KURNIYANTI PUJI H, S.E, M.Pd', 367, 'N/A'),
('Teknik Pengelasan', '2019-06-23', 'AMANG ARDY CAHYO NIARGO, S.Pd', 34, 'N/A'),
('Animasi', '2020-04-22', 'Wahyu Tri Wulansari, S.P.d.', 34, 'N/A'),
('Teknik Komputer dan ', '2020-04-22', 'Novi Dyah Puspitasari', 36, 'N/A'),
('Teknik Listrik', '2020-04-22', 'Sula Akbar Riski, S.P.d.', 34, 'N/A');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nis` char(8) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jns_kel` enum('L','P') DEFAULT NULL,
  `tinggi` tinyint(3) UNSIGNED DEFAULT NULL,
  `asal_sekolah` varchar(50) DEFAULT NULL,
  `komli` varchar(50) DEFAULT NULL,
  `nilai_un` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nis`, `nama`, `jns_kel`, `tinggi`, `asal_sekolah`, `komli`, `nilai_un`) VALUES
('1399', 'ACHMAD WONG PRASOJO', 'L', 165, 'SMPN 3 TRENGGALEK', 'Teknik Konstruksi da', '30.00'),
('1400', 'ADI SANTOSO', 'L', 160, 'SMPN 4 TRENGGALEK', 'Teknik Konstruksi da', '29.00'),
('1401', 'AGISTA DWI SAPUTRA', 'L', 164, 'SMPN 5 TRENGGALEK', 'Teknik Konstruksi da', '27.00'),
('1404', 'FEBRILIAN NINDA YUANA', 'P', 160, 'SMPN 1 TUGU', 'Kuliner', '30.00'),
('1405', 'FITRIA RATNA NOVITASARI', 'P', 170, 'MTsN 3 TRENGGALEK', 'Kuliner', '27.00'),
('1406', 'GADIS TIARA PUTRI ISLAMI', 'P', 169, 'SMPN 2 KARANGAN', 'Kuliner', '33.00'),
('1409', 'NAZILATUL FITRIANI', 'P', 161, 'SMPN 1 TRENGGALEK', 'Desain Pemodelan dan', '33.00'),
('1410', 'NONSHITA SELLY CAHYANI', 'P', 160, 'SMPN 2 DURENAN', 'Desain Pemodelan dan', '30.00'),
('1411', 'NORHAFIDZ AHMAD', 'L', 162, 'SMPN 2 POGALAN', 'Desain Pemodelan dan', '32.00'),
('1414', 'AULIYA RIZKI SEPTIANI', 'P', 166, 'SMPN 1 TRENGGALEK', 'Rekayasa Perangkat L', '28.00'),
('1415', 'AZIS FERDIYANSYAH', 'L', 165, 'SMPN 2 POGALAN', 'Rekayasa Perangkat L', '32.00'),
('1416', 'BAGAS ARYA SYAH PUTRA', 'L', 169, 'SMPN 1 TUGU', 'Rekayasa Perangkat L', '34.00'),
('1419', 'NANDA PURWO GANTI', 'L', 166, 'MTsN 1 TRENGGALEK', 'Teknik Pemanasan, Ta', '35.00'),
('1420', 'NANDA WAHYU EKA RAHMADANI', 'P', 164, 'SMPN 2 TRENGGALEK', 'Teknik Pemanasan, Ta', '28.00'),
('1423', 'RANA HAMZAH', 'L', 166, 'SMPN 3 KARANGAN', 'Teknik Pemanasan, Ta', '32.00'),
('1424', 'ANIS SRI UTAMI', 'P', 168, 'SMPN 2 TUGU', 'Akuntansi', '32.00'),
('1425', 'ANISA VIDA BADIATUN NUHA', 'P', 163, 'SMPN 2 TRENGGALEK', 'Akuntansi', '27.00'),
('1426', 'APRILIA AYUNINGSIH', 'P', 160, 'SMPN 2 POGALAN', 'Akuntansi', '31.00'),
('1429', 'DIMAS AJIB ASNAWI', 'L', 168, 'SMPN 1 BENDUNGAN', 'Teknik Pengelasan', '33.00'),
('1430', 'DIMAS FAHREZA UTAMA', 'L', 170, 'SMPN 1 DONGKO', 'Teknik Pengelasan', '32.00'),
('1431', 'DIMAS PUTRA AJI MUHTAROM', 'L', 163, 'MTsN 2 TRENGGALEK', 'Teknik Pengelasan', '30.00'),
('47534750', 'Sanjaya', NULL, 170, 'SMPN 1 TRENGGALEK', NULL, '40.00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
