-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 20, 2020 at 08:01 PM
-- Server version: 5.7.32-0ubuntu0.18.04.1
-- PHP Version: 7.3.24-3+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `silooman`
--

-- --------------------------------------------------------

--
-- Table structure for table `aktivitas`
--

CREATE TABLE `aktivitas` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `informasi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `lahan_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aktivitas`
--

INSERT INTO `aktivitas` (`id`, `judul`, `informasi`, `gambar`, `lahan_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Bajak Sawah', 'pakai sapi', '141220164042.jpeg', 1, '2020-12-14 09:40:42', '2020-12-14 09:40:42', '2020-12-14 16:40:42'),
(2, 'asdasdaasdasd', 'asd', '201220105843.jpeg', 1, '2020-12-20 03:58:43', '2020-12-20 03:58:43', '2020-12-20 10:58:43');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `keuangan`
--

CREATE TABLE `keuangan` (
  `id` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `tanggal_beli` date NOT NULL,
  `bukti` varchar(255) DEFAULT NULL,
  `id_permintaan` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keuangan`
--

INSERT INTO `keuangan` (`id`, `harga`, `tanggal_beli`, `bukti`, `id_permintaan`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 111, '2020-12-29', '201220121713.jpeg', 3, '2020-12-20 05:17:13', '2020-12-20 05:17:13', NULL),
(5, 100000, '2020-12-19', '201220124041.jpeg', 4, '2020-12-20 05:40:41', '2020-12-20 05:40:41', NULL),
(6, 1000000, '2020-12-20', '201220124626.png', 5, '2020-12-20 05:46:26', '2020-12-20 05:46:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `komentar` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_aktivitas` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `komentar`, `id_user`, `id_aktivitas`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'saya sudah membajak sawah', 1, 1, '2020-12-14 09:41:22', '2020-12-14 09:41:22', '2020-12-14 16:41:22'),
(2, 'coba', 2, 1, '2020-12-15 06:05:40', '2020-12-15 06:05:40', '2020-12-15 13:05:40'),
(3, 'ak komentar', 1, 1, '2020-12-15 06:08:00', '2020-12-15 06:08:00', '2020-12-15 13:08:00'),
(4, 'asd', 2, 1, '2020-12-18 23:32:39', '2020-12-18 23:32:39', '2020-12-19 06:32:39'),
(5, 'halo', 2, 1, '2020-12-20 05:38:33', '2020-12-20 05:38:33', '2020-12-20 12:38:33');

-- --------------------------------------------------------

--
-- Table structure for table `lahan`
--

CREATE TABLE `lahan` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `lokasi_lahan` varchar(50) NOT NULL,
  `ukuran_lahan` double(10,0) NOT NULL,
  `ukuran_lahan_garap` double(10,0) NOT NULL,
  `jenis_bibit` varchar(40) NOT NULL,
  `obat` varchar(40) NOT NULL,
  `pupuk` varchar(40) NOT NULL,
  `hasil_tanam` decimal(10,0) DEFAULT NULL,
  `mulai` date DEFAULT NULL,
  `selesai` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lahan`
--

INSERT INTO `lahan` (`id`, `judul`, `lokasi_lahan`, `ukuran_lahan`, `ukuran_lahan_garap`, `jenis_bibit`, `obat`, `pupuk`, `hasil_tanam`, `mulai`, `selesai`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Lahan sawah bapak marti', 'Silir Agung', 5, 3, 'Padi', 'suburganik', 'suburganik', '100', '2020-12-23', '2020-12-31', '2020-12-14 09:39:16', '2020-12-20 05:53:53', NULL),
(2, '1', '1', 1, 1, '1', '1', '1', '100', '2020-12-16', '2021-01-01', '2020-12-20 04:41:52', '2020-12-20 05:54:10', NULL),
(3, 'lahan', 'kampus', 10, 9, '1', '1', '1', NULL, '2020-12-21', NULL, '2020-12-20 05:48:52', '2020-12-20 05:50:46', NULL),
(4, '111', '1', 12, 10, '1', '1', '1', NULL, '2020-12-16', NULL, '2020-12-20 05:50:13', '2020-12-20 05:51:32', NULL),
(5, '1', '1', 1, 0, '1', '1', '1', NULL, '2020-12-20', NULL, '2020-12-20 05:56:55', '2020-12-20 05:56:55', NULL),
(6, '10', '10', 10, 9, '1', '1', '1', NULL, '2020-12-20', NULL, '2020-12-20 05:57:39', '2020-12-20 05:57:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permintaan`
--

CREATE TABLE `permintaan` (
  `id` int(11) NOT NULL,
  `kebutuhan` varchar(150) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `id_lahan` int(11) NOT NULL,
  `id_statuspermintaan` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `permintaan`
--

INSERT INTO `permintaan` (`id`, `kebutuhan`, `jumlah`, `keterangan`, `id_lahan`, `id_statuspermintaan`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'suburganik', 10, 'aorganik ya pak', 1, 2, '2020-12-14 16:44:55', '2020-12-19 06:19:30', NULL),
(3, 'a', 1, 'a', 1, 1, '2020-12-19 06:19:57', '2020-12-19 06:20:01', NULL),
(4, 'Semen', 10, 'butuh gan cepet', 1, 1, '2020-12-20 12:39:54', '2020-12-20 12:40:16', NULL),
(5, 'pasir', 1, 'asd', 1, 1, '2020-12-20 12:43:23', '2020-12-20 12:45:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('GyEYh7xhZxqI6MHFGkyBatgRntcscbygybZhR6B4', 1, '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:84.0) Gecko/20100101 Firefox/84.0', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiampnVWp0Q3hCRllmYVM5WGxoWkZrWEhwSzhKdWdJNWk5VUdwaGNCMSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXRhLWxhaGFuIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRUYVlPaVIxU2lrY0VNSmY5ZVp4NW51ZVJLTlhEd2RhenBHTjc4cVM5MjVBSThhNVVhY0VlLiI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkVGFZT2lSMVNpa2NFTUpmOWVaeDVudWVSS05YRHdkYXpwR043OHFTOTI1QUk4YTVVYWNFZS4iO30=', 1608469059),
('unfWHinHgqc1RdP7wKJmJ90sEitHg2LR0P2pLrsG', 2, '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:84.0) Gecko/20100101 Firefox/84.0', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiTXVuS3BqYjlHUFlHWTJXa0l2RnRrVDkwTGxxUTNYUnZNd1hmSng0biI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXRhLWxhaGFuIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MjtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJFdaOFVOT0FFc1NrMlpsQVpONThYcC4uMHRhTzZQOHExVE8wNGpuOFFoYThzbkFDNXdZdG51IjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRXWjhVTk9BRXNTazJabEFaTjU4WHAuLjB0YU82UDhxMVRPMDRqbjhRaGE4c25BQzV3WXRudSI7fQ==', 1608468481);

-- --------------------------------------------------------

--
-- Table structure for table `status_permintaan`
--

CREATE TABLE `status_permintaan` (
  `id` int(11) NOT NULL,
  `status_permintaan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status_permintaan`
--

INSERT INTO `status_permintaan` (`id`, `status_permintaan`) VALUES
(0, 'Menunggu'),
(1, 'Disetujui'),
(2, 'Ditolak');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pekerja',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'pekerja', 'pekerja', 'pekerja@pekerja', NULL, '$2y$10$TaYOiR1SikcEMJf9eZx5nueRKNXDwdazpGN78qS925AI8a5UacEe.', NULL, NULL, NULL, NULL, NULL, '2020-12-14 09:38:13', '2020-12-14 09:38:13'),
(2, 'pemilik', 'pemilik', 'pemilik@pemilik', NULL, '$2y$10$WZ8UNOAEsSk2ZlAZN58Xp..0taO6P8q1TO04jn8Qha8snAC5wYtnu', NULL, NULL, NULL, NULL, 'profile-photos/IQNpRidNfkQfCfSrIAM1jMtHBrBj2JwpYBuBWndG.jpeg', '2020-12-14 09:45:31', '2020-12-20 05:46:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aktivitas`
--
ALTER TABLE `aktivitas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lahan_id` (`lahan_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `keuangan`
--
ALTER TABLE `keuangan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_permintaan` (`id_permintaan`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_aktivitas` (`id_aktivitas`);

--
-- Indexes for table `lahan`
--
ALTER TABLE `lahan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permintaan`
--
ALTER TABLE `permintaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_statuspermintaan` (`id_statuspermintaan`),
  ADD KEY `lahan_id` (`id_lahan`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `status_permintaan`
--
ALTER TABLE `status_permintaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `aktivitas`
--
ALTER TABLE `aktivitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `keuangan`
--
ALTER TABLE `keuangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `lahan`
--
ALTER TABLE `lahan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `permintaan`
--
ALTER TABLE `permintaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `status_permintaan`
--
ALTER TABLE `status_permintaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `aktivitas`
--
ALTER TABLE `aktivitas`
  ADD CONSTRAINT `aktivitas_ibfk_1` FOREIGN KEY (`lahan_id`) REFERENCES `lahan` (`id`);

--
-- Constraints for table `keuangan`
--
ALTER TABLE `keuangan`
  ADD CONSTRAINT `keuangan_ibfk_1` FOREIGN KEY (`id_permintaan`) REFERENCES `permintaan` (`id`);

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `komentar_ibfk_2` FOREIGN KEY (`id_aktivitas`) REFERENCES `aktivitas` (`id`);

--
-- Constraints for table `permintaan`
--
ALTER TABLE `permintaan`
  ADD CONSTRAINT `permintaan_ibfk_1` FOREIGN KEY (`id_statuspermintaan`) REFERENCES `status_permintaan` (`id`),
  ADD CONSTRAINT `permintaan_ibfk_2` FOREIGN KEY (`id_lahan`) REFERENCES `lahan` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
