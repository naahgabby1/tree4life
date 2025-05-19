-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2025 at 01:45 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tree4life`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Stand-in structure for view `logindetails`
-- (See below for the actual view)
--
CREATE TABLE `logindetails` (
`id` bigint(20)
,`username` varchar(20)
,`firstname` varchar(48)
,`surname` varchar(48)
,`othername` varchar(48)
,`name` varchar(146)
,`password` varchar(255)
,`role_id` int(2)
,`user_role` varchar(100)
,`forlife_permission` int(1)
,`yfc_permission` int(1)
,`station_id` int(16)
,`station_name` varchar(50)
,`district_id` int(32)
,`district_name` varchar(256)
,`region_id` int(16)
,`region_name` varchar(256)
,`division_id` int(16)
,`division_name` varchar(48)
,`department_id` int(16)
,`department_name` varchar(48)
,`unit_id` int(16)
,`unit_name` varchar(48)
,`status` varchar(1)
);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('0JHIiniyX08ilf9o3hSQ5zRZg4jzZhg9yhcH0eVy', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:138.0) Gecko/20100101 Firefox/138.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSTM2ZkxtRnJtNnFCVjc0T0hIR2JRQTVNbFh5NTlxNGdnaWdZWHdZeCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTc6ImxvZ2luX2xvZ2luZ3VhcmRfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7Tjt9', 1747596652),
('9YaAi01zspMPUZLtA5qlS9qdgx0cSdSNiH79MKXo', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:138.0) Gecko/20100101 Firefox/138.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiTXJkU1Zac0FxdDhKQTRTbUlzVWlhV3Z6dGNubFkwMER6dEM2R0N3NyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1747597327),
('as0KpYI6Pb84NiAc3NGh9ByBFpZTFkfY8OtQU1yu', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:138.0) Gecko/20100101 Firefox/138.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoicElmaUxPT2Z0SGZvVDZ3a1NqZ3A1Z0VicVRzRkN2WTd1aklrOHFDZyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1747597355),
('BSmz9dOkSXOlDfHeW8T7ZqK77mVBeYbwpo04Ak3n', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:138.0) Gecko/20100101 Firefox/138.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoic2htVHVOaU1qcGVOZVhuZ3VPTDVjSzd6WE9mNEpRa1lZT25ITHFYdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1747597338),
('EXhzTHRYZzdz8xIuMJ4PKeifLFnotJtqzHoLSRPw', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:138.0) Gecko/20100101 Firefox/138.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiYXd0YWNGVTFDbXVrQVFHcGJMekhHdjBYbDE2NjY0Y1hubWtYNTZpMCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTc6ImxvZ2luX2xvZ2luZ3VhcmRfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7Tjt9', 1747596640),
('hP5ynqA2zkTIyAdG66MOasVQNHly6T8W28OVGDVl', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:138.0) Gecko/20100101 Firefox/138.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoicnBTQmNYcEg2VlBOYk9lNmNLOTRWV2RRQ3lveDZiYzgwVmlyM0ZPaiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1747596546),
('JLurzX4CbctYEmI43IcSbOBFo4PzOWjrwgMWMeNU', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:138.0) Gecko/20100101 Firefox/138.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoidzlNSmF3SENBcGUwUGhRbk9VU1VsemxPQ0FvWGVDMDZJOVZGUFlHciI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1747597341),
('rSgoT4lJy7Cr4sM95Zk2fey03lokS98i6mDda0H7', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:138.0) Gecko/20100101 Firefox/138.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMlU5SUVDMEhSTWp2MUYwSm01MDcyU0o4NjFQbUlDYngwZmRaWEI5cyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1747597349),
('U6OlPGhZQoBE0dRmcFQ8vuTRhlbZAshLh9dmu7Sr', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:138.0) Gecko/20100101 Firefox/138.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoia1dDb1NXbHBFTGRRVXpSWVdCT3BFeXJQR0VhVDl5TXM1ck1DN2UzeSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NTc6ImxvZ2luX2xvZ2luZ3VhcmRfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7Tjt9', 1747596543),
('YBnAGWQd96fUehcPw8MycVa2gdwFzX5lC9n9xYUH', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:138.0) Gecko/20100101 Firefox/138.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiWVVWa0I4Rk1oSzhDbDVKREdsVUFPQm95cmNHaFd4SGFGcVNZaW9SVCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTc6ImxvZ2luX2xvZ2luZ3VhcmRfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7Tjt9', 1747599517),
('ZSDlJXh8BqrNpzWNOsHFy71o18rZuKzMVuNynhRA', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:138.0) Gecko/20100101 Firefox/138.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWDVvOGExVmFQaEl0MXVWS21DTTVBblVhQ1F0ejlNcVRubDJXU3lsayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1747596654);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE `tbl_role` (
  `id` bigint(20) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `date_time` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_role`
--

INSERT INTO `tbl_role` (`id`, `name`, `date_time`) VALUES
(1, 'Super Administrator', '2025-05-17'),
(2, 'Administrator', '2025-05-17'),
(3, 'Validator', '2025-05-17'),
(4, 'Authoriser', '2025-05-17'),
(5, 'Regional Authoriser', '2025-05-17'),
(6, 'Finance', '2025-05-17'),
(7, 'Audit', '2025-05-17'),
(8, 'Secretariat', '2025-05-17'),
(9, 'Human Resource', '2025-05-17'),
(10, 'Executive Director', '2025-05-17'),
(11, 'Chief Executive', '2025-05-17');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` bigint(20) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role_id` int(2) DEFAULT NULL,
  `forlife_permission` int(1) NOT NULL DEFAULT 0,
  `yfc_permission` int(1) NOT NULL DEFAULT 0,
  `status` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `password`, `role_id`, `forlife_permission`, `yfc_permission`, `status`) VALUES
(1, '1262931', '$2y$12$vLZweLl9UrFWuJJvtvIDY.0Ix3PnniegwDUfeuk1gLqNwmT6k0Gze', 1, 1, 1, '1'),
(3, 'admin', '$2y$12$2ttUT9GL7X/oBOBry13NTuFPvZ5z7UOf5KoiSpoDTDGubw8/dlhKq', 7, 1, 1, '1'),
(4, '233505', '$2y$12$wOnVAKa4SNbaOnn6tjN7EOzzPKuR/K9lTVG3O5ehlpyRckVi..dt.', 2, 1, 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure for view `logindetails`
--
DROP TABLE IF EXISTS `logindetails`;

CREATE ALGORITHM=UNDEFINED DEFINER=`Gabby`@`%` SQL SECURITY DEFINER VIEW `logindetails`  AS SELECT `tbl_users`.`id` AS `id`, `tbl_users`.`username` AS `username`, `fchr`.`staff_bio`.`firstname` AS `firstname`, `fchr`.`staff_bio`.`surname` AS `surname`, `fchr`.`staff_bio`.`othername` AS `othername`, concat(`fchr`.`staff_bio`.`firstname`,' ',`fchr`.`staff_bio`.`othername`,' ',`fchr`.`staff_bio`.`surname`) AS `name`, `tbl_users`.`password` AS `password`, `tbl_users`.`role_id` AS `role_id`, `tbl_role`.`name` AS `user_role`, `tbl_users`.`forlife_permission` AS `forlife_permission`, `tbl_users`.`yfc_permission` AS `yfc_permission`, `fchr`.`station`.`station_id` AS `station_id`, `fchr`.`station`.`station_name` AS `station_name`, `fchr`.`district`.`district_id` AS `district_id`, `fchr`.`district`.`district_name` AS `district_name`, `fchr`.`region`.`region_id` AS `region_id`, `fchr`.`region`.`region_name` AS `region_name`, `fchr`.`division`.`division_id` AS `division_id`, `fchr`.`division`.`division_name` AS `division_name`, `fchr`.`department`.`department_id` AS `department_id`, `fchr`.`department`.`department_name` AS `department_name`, `fchr`.`unit`.`unit_id` AS `unit_id`, `fchr`.`unit`.`unit_name` AS `unit_name`, `tbl_users`.`status` AS `status` FROM ((((((((`fchr`.`staff_bio` join `fchr`.`station` on(`fchr`.`staff_bio`.`station_id` = `fchr`.`station`.`station_id`)) join `fchr`.`district` on(`fchr`.`station`.`district_id` = `fchr`.`district`.`district_id`)) join `fchr`.`region` on(`fchr`.`district`.`region_id` = `fchr`.`region`.`region_id`)) join `fchr`.`department` on(`fchr`.`staff_bio`.`department_id` = `fchr`.`department`.`department_id`)) join `fchr`.`unit` on(`fchr`.`staff_bio`.`unit_id` = `fchr`.`unit`.`unit_id`)) join `fchr`.`division` on(`fchr`.`department`.`division_id` = `fchr`.`division`.`division_id`)) join `tbl_users` on(`fchr`.`staff_bio`.`staff_id` = `tbl_users`.`username`)) join `tbl_role` on(`tbl_users`.`role_id` = `tbl_role`.`id`)) WHERE `fchr`.`staff_bio`.`confirm_unconfirm` = 1 AND `fchr`.`staff_bio`.`staff_status_id` = 1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
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
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
