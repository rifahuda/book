-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Feb 2021 pada 02.25
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
  `u_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `d_user`
--

INSERT INTO `d_user` (`u_email`, `u_name`, `u_pwd`, `u_verifydate`, `u_id`) VALUES
('a@gmail.com', 'Andi', '$2y$10$QED3pDK1XgxscWC4oDSr7evuAY6uorQWou0eD6DafJpY4x9rduEnO', '2021-02-03 07:17:21', 'abc123'),
('b@gmail.com', 'Budi', '$2y$10$fADA7IwJWRw//e6O1qTLL./f5k4Wi11cWEhr6mxUIVW8rBkGmlNqa', '2021-01-31 23:55:50', 'abc123'),
('c@gmail.com', 'Caca', '$2y$10$srSqlE0JkWMoKAvDLd.9JOml2ZpDa220M/8uutCxgJ65WNn0rpF7S', '2021-01-31 23:55:08', 'abc123'),
('d@gmail.com', 'Didi', '$2y$10$R2rI7MDFD9zbBt2AolbiWO7AycGhbio.0A0BQ8K8DQ5rlnamlDnxi', '2021-01-31 23:56:27', 'abc123'),
('e@gmail.com', 'Eko', '$2y$10$mF3FVa.Lx4MS3gefznjitOs/wvoPNJJp6iqokmoJrB9Manlm5MmDe', '2021-01-31 23:56:57', 'abc123'),
('f@gmail.com', 'Fadil', '$2y$10$NB2slgKeWDNHrpLVSaxwyOGPsIpIt0dbVqZHQP7yXLwdnNC1q76ES', '2021-02-01 00:10:22', 'abc123'),
('g@gmail.com', 'Gaga', '$2y$10$wrB9d3.LLMwB0weB3RkjBOUF2oyZ32vnHz.3HVRcG3jha27zE0gvq', '2021-02-01 02:37:57', 'abc123'),
('h@gmail.com', 'Handi Mani', '$2y$10$AUrhvXXd1K0W1dktuQnvDeeTzTC1U6P6PE2rXeBFLkOU9mhw.GJ1m', '2021-02-03 03:41:08', 'abc123'),
('i@gmail.com', 'iis', '$2y$10$fcuD./P7kPd7JyfDMuWaEe.0dnP3s1NtlmhC/r6dZB/x/7oyHGpFe', '2021-02-02 00:34:04', 'abc123'),
('j@gmail.com', 'jojo', '$2y$10$BFwf7ikClAAtsstZOoJ4peKAvkT0cYvgWBCxkidEWfRrxkreVGIHe', '2021-02-02 00:45:26', 'abc123'),
('k@gmail.com', 'kiki', '$2y$10$x12GguSUwlxamrDzd6M83O1lQcAQEbRrOkpFk2CRqFuXA.1jP0j/.', '2021-02-02 01:58:27', 'abc123'),
('l@gmail.com', 'lala', '$2y$10$Ivk0vbR0kVvDCNJhFaMYOu66J6/h6Y8sQsnocXwMdOHk07YM35WNO', '2021-02-03 01:54:01', 'abc123'),
('m@gmail.com', '', '', NULL, 'abc123');

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
