-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2022 at 09:36 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_61`
--

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_01_15_162440_create_roles_table', 2),
(6, '2022_01_15_173151_add_role_to_user_table', 3),
(7, '2022_01_15_174402_add_role_to_user_table', 4),
(8, '2022_01_16_003113_create_threads_table', 5),
(9, '2022_01_16_003650_add_thread_to_user', 5),
(10, '2022_01_16_013550_create_threads_table', 6),
(11, '2022_01_16_015558_add_thread_to_user', 7),
(12, '2022_01_22_185142_add_image_to_thread_table', 8);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'moderator', NULL, NULL),
(3, 'user', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE `threads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `threads`
--

INSERT INTO `threads` (`id`, `author`, `title`, `content`, `user_id`, `created_at`, `updated_at`, `image`) VALUES
(1, 'Abdelrahman attia', 'asdasd', 'asdasd', 0, '2022-01-18 09:19:10', '2022-01-18 09:19:10', ''),
(2, 'Rei', 'asdasd', 'asdasdasdasd', 0, '2022-01-18 09:35:43', '2022-01-18 09:35:43', ''),
(3, 'Underworld', 'asdasd', 'asdasd', 0, '2022-01-18 11:57:29', '2022-01-18 11:57:29', ''),
(4, 'Abdelrahman attia11', 'asdasd', 'asdasd', 0, '2022-01-18 12:00:10', '2022-01-18 12:00:10', ''),
(5, 'Abdelrahman attia123123', 'asdasda11a', 'asdasd11', 0, '2022-01-18 12:01:11', '2022-01-18 12:01:11', ''),
(8, 'admin', 'asdasdasd', 'asdasdasd', 18, '2022-01-21 15:31:27', '2022-01-21 15:31:27', ''),
(9, 'admin', 'asdas2211', 'as1123123', 18, '2022-01-21 15:58:51', '2022-01-21 15:58:51', ''),
(10, 'Rei', 'sadasdasd', 'asdasdasd', 4, '2022-01-24 07:41:13', '2022-01-24 07:41:13', '1643017273_9fd2a66efc962b660d1a931e8d9789e8--beautiful-tattoos-cool-tattoos.jpg'),
(15, 'Rei', 'asdasd', 'asdasd', 4, '2022-01-24 08:41:59', '2022-01-24 08:41:59', '1643020919_61.gif'),
(20, 'Rei', 'asdasd', 'asdasdasd', 4, '2022-01-24 11:14:39', '2022-01-24 11:14:39', '1643030079_9fd2a66efc962b660d1a931e8d9789e8--beautiful-tattoos-cool-tattoos.jpg'),
(21, 'Rei', 'asdasd', 'asdasdasd', 4, '2022-01-24 11:14:59', '2022-01-24 11:14:59', '1643030099_6lahrwxu32a81.jpg'),
(22, 'Rei', 'asdasd', 'asdasd', 4, '2022-01-24 11:34:26', '2022-01-24 11:34:26', '1643031266_9fd2a66efc962b660d1a931e8d9789e8--beautiful-tattoos-cool-tattoos.jpg'),
(23, 'Rei', 'asdasd', 'asdasd', 4, '2022-01-24 11:34:34', '2022-01-24 11:34:34', '1643031274_6lahrwxu32a81.jpg'),
(24, 'Rei', 'asdasdasd', 'asdasdasd', 4, '2022-01-24 11:43:25', '2022-01-24 11:43:25', '1643031805_5789f6f52eabb07b6e27acc809b57a77_3619634157438052657.gif'),
(25, 'Rei', 'asdasd', 'asdasd', 4, '2022-01-24 11:44:28', '2022-01-24 11:44:28', '1643031868_ca9174ba5fb038712fd7fb9b754ce3c9.gif'),
(26, 'Rei', 'asdasdasdas', 'dasdasdasd', 4, '2022-01-24 11:56:24', '2022-01-24 11:56:24', '1643032584_5789f6f52eabb07b6e27acc809b57a77_3619634157438052657.gif');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `thread_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `thread_id`, `role_id`) VALUES
(2, 'Abdelrahman attia', 'reix77x@gmail.com', NULL, '$2y$10$UO6pNyUV8.oHCZgEQcA9L.8ZKTDgD8rVLh0qMRi6tN5MfkKKp8BtS', NULL, '2022-01-14 17:34:48', '2022-01-18 12:19:35', '1', 2),
(4, 'Rei', 'valkyriex77@gmail.com', NULL, '$2y$10$yJyKZCUYTGjffdsMq.1x7eTF1sjhwV7IZSl/WdpoQ6C8zN4/q4e5K', 'PRU3FDiVFyufZyugG5ejCtKY88ffcj7TiJrLQ0Jz73cfRYps8LSGjurtjpWd', '2022-01-14 17:54:08', '2022-01-14 17:54:08', '2', 1),
(6, 'Abdelrahman attia11', 'valkyriexaa77@gmail.com', NULL, '$2y$10$Ax7YNraMYIk0Qa7UwBQOCutbEnjkjwiczbYwqusjkQGnLMdWMdM8q', NULL, '2022-01-14 17:58:36', '2022-01-18 12:20:58', '4', 2),
(8, 'Abdelrahman attia123123', 'valkyr123123iex77@gmail.com', NULL, '$2y$10$IqwoTJ7zH1dutntwYmPLeuo0ZAZw1rqz0OfqRaLA3gO.kXwVVG0ty', NULL, '2022-01-15 16:33:22', '2022-01-15 16:33:22', '5', 1),
(12, 'Underworld', 'asada@zaza.com', NULL, '$2y$10$sQr.OJhRuq.ncdBJiDGMrec05KH3CxJT7eAOY6v6QX3Yq0Tq6J1K.', NULL, '2022-01-15 19:40:33', '2022-01-15 19:40:33', '3', 3),
(18, 'admin', 'reix7227x@gmail.com', NULL, '$2y$10$DPn3AM3VIyUsMFz7Q2LhbOxBQF7Wl.CjV/N7AXY.wsEvhdRyZFzH2', NULL, '2022-01-21 15:23:58', '2022-01-21 15:23:58', NULL, NULL),
(19, 'Reix7', 'valkyriex77777777@gmail.com', NULL, '$2y$10$9Yvj9tGEv/sstSqhv.Ts3.C9lexvghrHsI8q/NNbeBg.33DDEFyFC', NULL, '2022-01-22 14:44:00', '2022-01-22 14:44:00', '', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `threads`
--
ALTER TABLE `threads`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `threads`
--
ALTER TABLE `threads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
