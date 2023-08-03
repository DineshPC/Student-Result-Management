-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2023 at 02:39 PM
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
-- Database: `srm`
--

-- --------------------------------------------------------

--
-- Table structure for table `classroom`
--

CREATE TABLE `classroom` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `classroom`
--

INSERT INTO `classroom` (`id`, `name`, `created_by`, `created_at`, `updated_at`) VALUES
(12, 'TYCS SEM-5', 'Admin', '2023-07-09 07:27:28', '2023-07-09 07:27:28'),
(13, 'TYCS SEM-6', 'Admin', '2023-07-09 07:54:23', '2023-07-09 07:54:23');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `obtain_marks` int(11) NOT NULL,
  `total_marks` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `student_id`, `class_id`, `subject_id`, `obtain_marks`, `total_marks`, `created_at`, `updated_at`) VALUES
(14, 3, 12, 1, 81, 100, '2023-07-09 09:31:50', '2023-07-09 09:31:50'),
(15, 3, 12, 2, 82, 100, '2023-07-09 09:31:50', '2023-07-09 09:31:50'),
(16, 3, 12, 3, 83, 100, '2023-07-09 09:31:50', '2023-07-09 09:31:50'),
(17, 3, 12, 4, 84, 100, '2023-07-09 09:31:50', '2023-07-09 09:31:50'),
(18, 3, 12, 5, 85, 100, '2023-07-09 09:31:50', '2023-07-09 09:31:50'),
(19, 3, 12, 6, 86, 100, '2023-07-09 09:31:50', '2023-07-09 09:31:50'),
(20, 3, 12, 7, 87, 100, '2023-07-09 09:31:50', '2023-07-09 09:31:50'),
(21, 3, 12, 8, 88, 100, '2023-07-09 09:31:50', '2023-07-09 09:31:50'),
(30, 5, 12, 1, 71, 100, '2023-07-09 11:48:19', '2023-07-09 11:48:19'),
(31, 5, 12, 2, 72, 100, '2023-07-09 11:48:19', '2023-07-09 11:48:19'),
(32, 5, 12, 3, 73, 100, '2023-07-09 11:48:19', '2023-07-09 11:48:19'),
(33, 5, 12, 4, 74, 100, '2023-07-09 11:48:19', '2023-07-09 11:48:19'),
(34, 5, 12, 5, 75, 100, '2023-07-09 11:48:19', '2023-07-09 11:48:19'),
(35, 5, 12, 6, 76, 100, '2023-07-09 11:48:19', '2023-07-09 11:48:19'),
(36, 5, 12, 7, 77, 100, '2023-07-09 11:48:19', '2023-07-09 11:48:19'),
(37, 5, 12, 8, 78, 100, '2023-07-09 11:48:19', '2023-07-09 11:48:19');

-- --------------------------------------------------------

--
-- Table structure for table `results2`
--

CREATE TABLE `results2` (
  `id` int(11) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `obtain_marks` int(11) NOT NULL,
  `total_marks` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `results2`
--

INSERT INTO `results2` (`id`, `student_id`, `class_id`, `subject_id`, `obtain_marks`, `total_marks`, `created_at`, `update_at`) VALUES
(0, 3, 1, 3, 86, 100, '2023-07-08 18:07:51', '2023-07-08 18:07:51'),
(1, 3, 1, 1, 80, 100, '2023-07-08 18:05:20', '2023-07-08 18:05:20'),
(2, 3, 1, 2, 85, 100, '2023-07-08 18:06:30', '2023-07-08 18:06:30'),
(4, 3, 1, 4, 86, 100, '2023-07-08 18:07:51', '2023-07-08 18:07:51'),
(5, 3, 1, 5, 75, 100, '2023-07-08 18:10:24', '2023-07-08 18:10:24');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(30) NOT NULL COMMENT 'Theory , Practical ',
  `class` varchar(30) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `type`, `class`, `updated_at`, `created_at`, `created_by`) VALUES
(1, 'Artificial Intelligence', 'Theory', 'TYCS SEM-5', '2023-07-09 07:27:45', NULL, 'Admin'),
(2, 'Artificial Intelligence - Practical', 'Practical', 'TYCS SEM-5', '2023-07-09 07:27:48', NULL, 'Admin'),
(3, 'Information & Network Security', 'Theory', 'TYCS SEM-5', '2023-07-09 07:27:51', '2023-07-08 06:57:25', 'Admin'),
(4, 'Information & Network Security - Practical', 'Practical', 'TYCS SEM-5', '2023-07-09 07:27:53', '2023-07-08 06:58:31', 'Admin'),
(5, 'Linux Server Administration', 'Theory', 'TYCS SEM-5', '2023-07-09 07:27:56', '2023-07-08 06:59:06', 'Admin'),
(6, 'Linux Server Administration - Practical', 'Practical', 'TYCS SEM-5', '2023-07-09 07:27:58', '2023-07-08 06:59:20', 'Admin'),
(7, 'Cyber Forensics', 'Theory', 'TYCS SEM-5', '2023-07-09 07:28:01', '2023-07-08 06:59:38', 'Admin'),
(8, 'Cyber Forensics - Practical', 'Practical', 'TYCS SEM-5', '2023-07-09 07:28:03', '2023-07-08 06:59:59', 'Admin');

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
  `user_type` tinyint(4) NOT NULL DEFAULT 3 COMMENT '1:admin, 2:teacher, 3:student',
  `class` varchar(30) DEFAULT NULL COMMENT 'Student Class',
  `created_by` varchar(15) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `user_type`, `class`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$vJFPt63ulOHMsZ3bZcoBTu1kWdq/X9HMnrfrsQYCTH7Mb.VmYQsUe', 'RMltytPMmTsHFPJS6RHIOabIPoF2E6x7TFXnXzPcAZiO3F8aJVJHWZMFqKIx', 1, NULL, 'System', '2023-07-03 12:45:51', '2023-07-08 23:28:42'),
(3, 'Student', 'student@gmail.com', NULL, '$2y$10$vJFPt63ulOHMsZ3bZcoBTu1kWdq/X9HMnrfrsQYCTH7Mb.VmYQsUe', 'NwRBAwyc64tDByUqsf04m3dAd2khHhDaB1PrK3yGsP6HmnmycYWt2ljpUhun', 3, 'TYCS SEM-5', 'Teacher', '2023-07-03 12:45:51', '2023-07-09 02:16:20'),
(4, 'Teacher 2 ', 'teacher2@gmail.com', '2023-07-07 15:00:41', '$2y$10$vJFPt63ulOHMsZ3bZcoBTu1kWdq/X9HMnrfrsQYCTH7Mb.VmYQsUe', NULL, 2, NULL, 'Admin', '2023-07-07 15:00:41', '2023-07-07 15:00:41'),
(5, 'Student 2', 'student2@gmail.com', NULL, '$2y$10$vJFPt63ulOHMsZ3bZcoBTu1kWdq/X9HMnrfrsQYCTH7Mb.VmYQsUe', NULL, 3, 'TYCS SEM-5', 'Admin', '2023-07-08 04:19:25', '2023-07-09 05:57:25'),
(7, 'admin2', 'admin2@admin.com', NULL, '$2y$10$CyRvKvsc4JWGsGRI9BkrEuDxHQ7oEXwxMAPPITWKulIFiP3HKq0Im', NULL, 1, NULL, 'Admin', '2023-07-05 14:32:59', '2023-07-06 06:25:21'),
(9, 'admin 3', 'admin3@admin.com', NULL, '$2y$10$MNpsQh/GjG6VxeZxPDHi7OHM4Wf.5s33Su3B88yM9R1W2FCZQBzWi', NULL, 1, NULL, 'Admin', '2023-07-07 09:54:17', '2023-07-07 09:54:17'),
(10, 'Teacher', 'teacher@gmail.com', NULL, '$2y$10$FfdcPxqioFm.P5HF6UY3FOcvbdAQZyCm3/nI27OvHX1oHkguLwRbK', NULL, 2, NULL, 'Admin', '2023-07-07 10:02:59', '2023-07-07 10:02:59'),
(12, 'Vilas', 'vilas@gmail.com', NULL, '$2y$10$te2OkhxsQ8biaI6G7RL9TO8TGL9pziEl51vwrTmCCc44sWIq7u5Oa', NULL, 2, NULL, 'Admin', '2023-07-07 14:02:26', '2023-07-07 14:02:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classroom`
--
ALTER TABLE `classroom`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results2`
--
ALTER TABLE `results2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
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
-- AUTO_INCREMENT for table `classroom`
--
ALTER TABLE `classroom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `results2`
--
ALTER TABLE `results2`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
