-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2019 at 12:12 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `antreankesehatan`
--

-- --------------------------------------------------------

--
-- Table structure for table `antrean`
--

CREATE TABLE `antrean` (
  `IdAntrean` varchar(10) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `Nomor` int(255) NOT NULL,
  `IdDaftarJadwal` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contohpasien`
--

CREATE TABLE `contohpasien` (
  `NIK` varchar(20) NOT NULL,
  `Nama Lengkap` varchar(255) NOT NULL,
  `Tanggal Lahir` date NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `Telepon` varchar(100) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `TanggalBuatAkun` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contohpasien`
--

INSERT INTO `contohpasien` (`NIK`, `Nama Lengkap`, `Tanggal Lahir`, `Email`, `Alamat`, `Telepon`, `Password`, `TanggalBuatAkun`) VALUES
('3273256609910001', 'Annisa Aisyha Malik', '1998-12-26', 'annisaa.malik@gmail.com', 'Jl Perdana Blok Q', '081280639988', '', '2019-09-24 14:45:00');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `idDokter` varchar(6) NOT NULL,
  `NamaDokter` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `Idjadwal` varchar(10) NOT NULL,
  `Hari` varchar(10) NOT NULL,
  `Jam Mulai` time(4) NOT NULL,
  `Jam Akhir` time(4) NOT NULL,
  `Available` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_09_27_160317_create_pasien_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `nik` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ttl` date NOT NULL,
  `alamat` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`nik`, `nama`, `email`, `password`, `username`, `ttl`, `alamat`, `telepon`, `remember_token`, `created_at`, `updated_at`) VALUES
('1234', 'Annisa Aisyha Malik', 'annisaa.malik@Gmail.com', '$2y$10$LuhQJD0MG2QwG82uRv/1auoIUzU3N2i.pWppl5FUdB.epmMY6fQu2', 'aaa', '1998-12-26', '123', '123', 'hMzMKwhZ0KPfmjPj3aaxUoPZYulP4THiN6bGzDz2HG1YjO3YIzVlrFDASsPy', '2019-09-27 23:53:41', '2019-09-27 23:53:41');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `poli`
--

CREATE TABLE `poli` (
  `Nama Poli` varchar(50) NOT NULL,
  `Kode Poli` varchar(10) NOT NULL,
  `Deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `punyajadwal`
--

CREATE TABLE `punyajadwal` (
  `DaftarJadwal` int(255) NOT NULL,
  `idPoli` varchar(10) NOT NULL,
  `idJadwal` varchar(10) NOT NULL,
  `idDokter` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `idRiwayat` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `idPunyaJadwal` varchar(255) NOT NULL,
  `Tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `antrean`
--
ALTER TABLE `antrean`
  ADD PRIMARY KEY (`IdAntrean`);

--
-- Indexes for table `contohpasien`
--
ALTER TABLE `contohpasien`
  ADD PRIMARY KEY (`NIK`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`idDokter`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`Idjadwal`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`nik`),
  ADD UNIQUE KEY `pasien_email_unique` (`email`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `poli`
--
ALTER TABLE `poli`
  ADD PRIMARY KEY (`Kode Poli`);

--
-- Indexes for table `punyajadwal`
--
ALTER TABLE `punyajadwal`
  ADD PRIMARY KEY (`DaftarJadwal`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `punyajadwal`
--
ALTER TABLE `punyajadwal`
  MODIFY `DaftarJadwal` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
