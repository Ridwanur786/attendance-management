-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2023 at 04:03 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
-- Table structure for table `home_works`
--

CREATE TABLE `home_works` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_works`
--

INSERT INTO `home_works` (`id`, `student_id`, `status`, `created_at`, `updated_at`) VALUES
(2, 16, 'approved', '2023-09-01 11:41:22', '2023-09-01 11:41:22'),
(3, 16, 'N/A', '2023-09-01 11:41:22', '2023-09-01 11:41:22'),
(4, 20, 'approved', '2023-09-01 11:41:22', '2023-09-01 11:41:22'),
(5, 15, 'N/A', '2023-09-01 11:41:22', '2023-09-01 11:41:22'),
(6, 16, 'pending', '2023-09-01 11:41:22', '2023-09-01 11:41:22'),
(7, 20, 'pending', '2023-09-01 11:41:22', '2023-09-01 11:41:22'),
(8, 11, 'approved', '2023-09-01 11:41:22', '2023-09-02 07:12:05'),
(9, 17, 'approved', '2023-09-01 11:41:22', '2023-09-01 11:43:29'),
(10, 11, 'approved', '2023-09-01 11:41:22', '2023-09-01 11:41:22'),
(11, 19, 'approved', '2023-09-01 11:41:22', '2023-09-01 11:42:09');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_08_18_113050_create_admins_table', 1),
(6, '2023_08_18_113114_create_teachers_table', 1),
(7, '2023_08_18_113140_create_students_table', 1),
(8, '2023_08_18_113203_create_parents_table', 1),
(9, '2023_08_20_162715_add_class_and_attendance_columns_to_students', 2),
(10, '2023_08_28_183022_update_students_table', 3),
(11, '2023_08_29_101700_create_students_table', 4),
(12, '2023_08_30_065939_create_students_table', 5),
(13, '2023_08_30_070206_create_students_table', 6),
(14, '2023_09_01_060133_create_homework_table', 7),
(15, '2023_09_01_061235_create_homework_table', 8),
(16, '2023_09_01_090227_create_home_works_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  `attendance` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT '{}' CHECK (json_valid(`attendance`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `role`, `password`, `class`, `attendance`, `created_at`, `updated_at`) VALUES
(11, 'Russ Senger', 'dejon54@example.com', 'student', '$2y$10$A9qAvgEiqitkKrvpzu5RuePYiMkiv3Fb13rS0z708s.qEuWHguEgq', 'classFour', '{\"classFour\":\"absent\"}', '2023-08-30 03:01:07', '2023-08-31 23:35:21'),
(12, 'Sibyl Gaylord', 'neoma.bartell@example.org', 'student', '$2y$10$YgIZUry/jTdkzesP2p5XcuBkWYJAGQMSDmD7kyupVX7er7p3C8A6y', 'classFour', '{\"classFour\":\"absent\"}', '2023-08-30 03:01:07', '2023-08-31 23:35:21'),
(13, 'Seamus Turner', 'medhurst.mozell@example.net', 'student', '$2y$10$jUqFJnt66wnaqkPohqRNsOfrUXp/l2LIyKe4NyfcsE948wsYdHfzi', 'classFour', '{\"classFour\":\"present\"}', '2023-08-30 03:01:07', '2023-08-31 23:35:21'),
(14, 'Jordy O\'Keefe', 'kirlin.brooks@example.com', 'student', '$2y$10$/9NWBhOXgOSB8FODKQnlXOONEVr0l.mXqbWV6G2cEhKaup/B.NtDO', 'classThree', '{\"classThree\":\"absent\"}', '2023-08-30 03:01:07', '2023-08-31 23:34:30'),
(15, 'Zander Wisoky', 'gregg.rice@example.org', 'student', '$2y$10$gx8KtfHmtpLFr/ppw0W4Gu5MpIPVz1q9I/./mWZkp/sxzKq.4QfSe', 'classFour', '{\"classFour\":\"present\"}', '2023-08-30 03:01:07', '2023-08-31 23:35:21'),
(16, 'Mrs. Cathy Swift', 'stroman.peyton@example.org', 'student', '$2y$10$ueq6BNjyYesIO0jMSfX7D.60k0JjaKNGa.fLl0RwjjVq/5kEX5Sv2', 'classOne', '{\"classOne\":\"present\"}', '2023-08-30 03:01:07', '2023-08-31 23:20:37'),
(17, 'Dr. Grover Lueilwitz DDS', 'nikki41@example.net', 'student', '$2y$10$NNbdVDzihWUe8qjpYHv/9uuEu9YTeGoDkpJowfo28Kg3zvbFD7O6m', 'classSix', '{\"classSix\":\"absent\"}', '2023-08-30 03:01:07', '2023-08-31 23:36:33'),
(18, 'Thelma Hintz', 'xhilpert@example.org', 'student', '$2y$10$5CWlmYy2MD0Ti0obN6duo.AW4of2NjXbIO1xkjHoZUWWrsI6Gw3zO', 'play', '{\"play\":\"present\"}', '2023-08-30 03:01:07', '2023-08-31 23:19:10'),
(19, 'Kiel Pollich', 'jaron88@example.org', 'student', '$2y$10$UxAXbIIqWtqvl.Kwxz/AZ.euRNkVG17vVNAG8WsHDZMf2O9JXjr06', 'play', '{\"play\":\"absent\"}', '2023-08-30 03:01:07', '2023-08-31 23:19:10'),
(20, 'Benton Mayer', 'oleta01@example.org', 'student', '$2y$10$n4p7c8vWFLKW1dATR14AFev3eC6/J9fiFQ6/Sj6YwjY9CBVTwtVH.', 'play', '{\"play\":\"present\"}', '2023-08-30 03:01:07', '2023-08-31 23:19:10');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `email`, `role`, `password`, `created_at`, `updated_at`) VALUES
(2, 'Miss Jeanne Ziemann Jr.', 'ada78@example.net', 'teacher', '$2y$10$9T.d34Pye1ZxEXt47XUUMO5A6xhzWdqHsJ4rBJrq4i/phGzKbVMpK', '2023-08-28 11:54:00', '2023-08-28 11:54:00');

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `home_works`
--
ALTER TABLE `home_works`
  ADD PRIMARY KEY (`id`),
  ADD KEY `home_works_student_id_foreign` (`student_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `parents_email_unique` (`email`);

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
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_email_unique` (`email`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teachers_email_unique` (`email`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_works`
--
ALTER TABLE `home_works`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `home_works`
--
ALTER TABLE `home_works`
  ADD CONSTRAINT `home_works_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
