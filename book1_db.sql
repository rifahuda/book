-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Feb 2021 pada 07.03
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book1_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `d_user`
--

CREATE TABLE `d_user` (
  `u_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `u_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `u_pwd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `u_verifydate` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `u_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `d_user`
--

INSERT INTO `d_user` (`u_email`, `u_name`, `u_pwd`, `u_verifydate`, `created_at`, `updated_at`, `u_id`) VALUES
('a@gmail.com', 'bababa', '$2y$10$U0SnBTGTN0lnkB27zPameeaMPhg.07oQpClQjlLJxO4tgoQJvyWOW', NULL, NULL, NULL, 'abc123'),
('b@gmail.com', 'asd', '$2y$10$lQVkoJIAVKP9I47UAggT1O4nCFfez04zEQz7FOWULGPacLvm9tv46', NULL, NULL, NULL, 'abc123'),
('c@gmail.com', 'Cici', '$2y$10$4qPKRuoZqsEBAtmt8GOmfeb.W1BzU65NxtRqoME.NFZBzVZEBQSBG', NULL, NULL, NULL, 'abc123'),
('d@gmail.com', 'koko', '$2y$10$kRN2GNCXR5909SjWhD.ZheiMW44ALDy8mXAJvosdUp/IqRYf1bHRW', NULL, NULL, NULL, 'abc123'),
('e@gmail.com', 'eoeo', '$2y$10$EwJd8YEYuy2Xooj.7TuDseBbYpPpcktY1Yiv8HLtrH7UeTKkDPKP2', NULL, NULL, NULL, 'abc123'),
('f@gmail.com', 'fufu', '$2y$10$hxhT8jsPdTFbssn5FxmMYOUVkV3f9MddZZFj/xBm7iEz/YmYXg0HC', NULL, NULL, '2021-01-31 21:46:16', 'abc123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_01_25_145936_create_anggota_table', 1),
(5, '2021_01_31_082245_create_d_user', 2),
(6, '2021_01_31_084803_create_d_user_table', 3),
(7, '2021_01_31_092936_create_d_user_table', 4),
(8, '2021_01_31_114934_create_d_user_table', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_anggota`
--

CREATE TABLE `m_anggota` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `a_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `a_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `a_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_users`
--

CREATE TABLE `m_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `u_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `u_anggota_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `u_username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `u_email_verified_at` timestamp NULL DEFAULT NULL,
  `u_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `m_users`
--

INSERT INTO `m_users` (`id`, `u_email`, `u_anggota_id`, `u_username`, `u_email_verified_at`, `u_password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'rifaaachmadhuda@gmail.com', NULL, '', NULL, '12345678', NULL, NULL, NULL),
(6, 'dev@gmail.com', NULL, 'dev', NULL, '$2y$10$/awpLbcblBWus.ZN55.r4ed3Hmm7RLrpoxgqG9Oc4fTCj7Etj9Xpa', NULL, '2021-01-25 05:42:44', '2021-01-25 05:42:44'),
(7, 'dev@gmail.com', NULL, 'dev2', NULL, '$2y$10$hTe.5kpNrDqutNGGL3hEDOs0J2RcUG7DAz1EL4THyh7lUaD4wj0gO', NULL, '2021-01-25 05:49:28', '2021-01-25 05:49:28'),
(8, 'dev@gmail.com', NULL, 'gg', NULL, '$2y$10$jM2/PYdf0uxb7V8xjmMR.O3kWYbe6j2WeHYtK70UnEpjjDKAutfl2', NULL, '2021-01-25 05:51:01', '2021-01-25 05:51:01'),
(10, 'dev@gmail.com', NULL, 'admin', NULL, '$2y$10$IF7Jl6RsLyiHqULhFbztROkbZ9tWttcGb1aIp22bF6y2Ni3WqiYD2', NULL, '2021-01-25 11:26:45', '2021-01-25 11:26:45'),
(11, 'rifaaachmadhuda1@gmail.com', NULL, 'rifa1', NULL, '$2y$10$l5/MkvDOdmXB62TdKqYl4e4bzO1oNLVQBtjfgmayF2A/jCIRampTC', NULL, '2021-01-25 20:32:10', '2021-01-25 20:32:10'),
(12, 'rif@gmail.com', NULL, 'rifa2', NULL, '$2y$10$/uKJxaLRkj186pmELhkJFOzQkdmCV6DvHTeCPQrAcJ.XVwz..FMRq', NULL, '2021-01-26 01:13:40', '2021-01-26 01:13:40'),
(13, 'rifaaachmadhuda3@gmail.com', NULL, 'RifaHuda', NULL, '$2y$10$8GYk5bH8.PQoNurrF/pj5Of.4iaIDmX9blv4UHguFBYPjcNXuoLuS', NULL, '2021-01-28 01:58:31', '2021-01-28 01:58:31'),
(14, 'dsadas', NULL, 'sadsa', NULL, '$2y$10$LU6IKYB0GN6shoYKhAlGzO0gIHt.aJZdA/a91IAX8jSba8.vxQXJm', NULL, '2021-01-28 02:25:08', '2021-01-28 02:25:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `d_user`
--
ALTER TABLE `d_user`
  ADD PRIMARY KEY (`u_email`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `m_anggota`
--
ALTER TABLE `m_anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `m_users`
--
ALTER TABLE `m_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `m_users_u_username_unique` (`u_username`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `m_anggota`
--
ALTER TABLE `m_anggota`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `m_users`
--
ALTER TABLE `m_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
