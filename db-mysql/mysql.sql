-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 23, 2021 at 04:20 PM
-- Server version: 5.7.30
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `dom_zt`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment_house`
--

CREATE TABLE `appointment_house` (
                                     `id` bigint(20) UNSIGNED NOT NULL,
                                     `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
                                     `created_at` timestamp NULL DEFAULT NULL,
                                     `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointment_house`
--

INSERT INTO `appointment_house` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'test', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `appointment_land`
--

CREATE TABLE `appointment_land` (
                                    `id` bigint(20) UNSIGNED NOT NULL,
                                    `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
                                    `created_at` timestamp NULL DEFAULT NULL,
                                    `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointment_land`
--

INSERT INTO `appointment_land` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'test', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
                        `id` bigint(20) UNSIGNED NOT NULL,
                        `date_publish` date NOT NULL,
                        `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
                        `post` text COLLATE utf8mb4_unicode_ci NOT NULL,
                        `img_url` text COLLATE utf8mb4_unicode_ci NOT NULL,
                        `user_id` bigint(20) UNSIGNED NOT NULL,
                        `category_id` int(12) NOT NULL,
                        `created_at` timestamp NULL DEFAULT NULL,
                        `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `date_publish`, `title`, `post`, `img_url`, `user_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, '2021-04-11', '5 типів квартир які варто купити', 'В цій статті ми розповіпо про 5 типів кварти, які варто купити. Ці типи квартир завжду будуть актуальними та реантабельними на ринку нерухомості і за потреба швидко продадуться.\r\n\r\nТип 1. Квартира - студія.\r\nТип 2. Углова квартира на 1 поверсі.\r\nТип 3. Квартира із панорамними вікнами.\r\nТип 4. Квартира в центрі міста.\r\nТип 5. Квартира у престижному рафоні міста.\r\n\r\nЗаключення:\r\nЯку саме квартуру вам купити - це верішувати вам, але де її купувати,  то це в dom-zt.com\r\n', 'https://kvartirka.com/blog/wp-content/uploads/2020/01/CTjBGLa2AdB1W7UbfBMMYdaTp9FxuUfBv7Cn.jpg', 2, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE `blog_category` (
                                 `id` int(12) NOT NULL,
                                 `name` text NOT NULL,
                                 `slug` text NOT NULL,
                                 `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
                                 `updatede_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_category`
--

INSERT INTO `blog_category` (`id`, `name`, `slug`, `created_at`, `updatede_at`) VALUES
(1, 'Новини', '', '2021-04-09 15:41:35', '2021-04-09 15:41:35'),
(2, 'Статті', '', '2021-04-09 15:42:03', '2021-04-09 15:42:03'),
(3, 'Поради', '', '2021-04-09 15:42:03', '2021-04-09 15:42:03');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
                            `id` bigint(20) UNSIGNED NOT NULL,
                            `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
                            `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
                            `created_at` timestamp NULL DEFAULT NULL,
                            `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Земельна ділянка', '', NULL, NULL),
(2, 'Будинок', '', NULL, NULL),
(3, 'Квартира', '', NULL, NULL),
(4, 'Комерційна нерухомість', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
                               `id` bigint(20) UNSIGNED NOT NULL,
                               `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
                               `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
                               `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
                               `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
                               `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
                               `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
                         `id` bigint(20) UNSIGNED NOT NULL,
                         `url_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
                         `obekt_id` bigint(20) UNSIGNED NOT NULL,
                         `created_at` timestamp NULL DEFAULT NULL,
                         `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
                            `id` bigint(20) UNSIGNED NOT NULL,
                            `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
                            `created_at` timestamp NULL DEFAULT NULL,
                            `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Житомир', NULL, NULL),
(2, 'Житомирська область', NULL, NULL);

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
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2019_08_19_000000_create_failed_jobs_table', 1),
(10, '2021_03_23_233647_create_category_table', 1),
(11, '2021_03_23_233737_create_location_table', 1),
(12, '2021_03_23_233856_create_appointment_house_table', 1),
(13, '2021_03_23_233925_create_appointment_land_table', 1),
(14, '2021_03_23_234233_create_obekts_table', 2),
(15, '2021_03_23_235504_create_files_table', 3),
(16, '2021_03_23_235621_create_note_table', 4),
(17, '2021_03_23_235838_create_blog_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `note`
--

CREATE TABLE `note` (
                        `id` bigint(20) UNSIGNED NOT NULL,
                        `date_publish` date NOT NULL,
                        `note_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
                        `obekt_id` bigint(20) UNSIGNED NOT NULL,
                        `user_id` bigint(20) UNSIGNED NOT NULL,
                        `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
                        `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `note`
--

INSERT INTO `note` (`id`, `date_publish`, `note_text`, `obekt_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '2021-04-12', 'Квартира в центрі продаж срочний', 2, 2, NULL, NULL),
(2, '2021-04-28', 'qewewweqew', 2, 2, NULL, NULL),
(9, '2021-04-22', '234', 2, 2, '2021-04-22 10:12:09', '2021-04-22 10:12:09'),
(10, '2021-04-22', 'Test note text', 2, 2, '2021-04-22 10:21:45', '2021-04-22 10:21:45'),
(11, '2021-04-22', 'dom note', 3, 2, '2021-04-22 11:03:25', '2021-04-22 11:03:25'),
(12, '2021-04-23', '12', 4, 2, '2021-04-23 12:11:32', '2021-04-23 12:11:32'),
(13, '2021-04-23', 'ewr', 5, 2, '2021-04-23 12:11:39', '2021-04-23 12:11:39');

-- --------------------------------------------------------

--
-- Table structure for table `obekts`
--

CREATE TABLE `obekts` (
                          `id` bigint(20) UNSIGNED NOT NULL,
                          `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
                          `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
                          `price` decimal(12,2) NOT NULL,
                          `category_id` bigint(20) UNSIGNED NOT NULL,
                          `square` decimal(12,2) NOT NULL,
                          `location_id` bigint(20) UNSIGNED NOT NULL,
                          `main_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
                          `isPublic` tinyint(1) NOT NULL,
                          `count_room` int(11) NOT NULL,
                          `count_level` int(11) NOT NULL,
                          `level` int(11) NOT NULL,
                          `opalenya` int(11) NOT NULL,
                          `isNewBuild` tinyint(1) NOT NULL,
                          `isPartHouse` tinyint(1) NOT NULL,
                          `isPartYard` tinyint(1) NOT NULL,
                          `appointment_land_id` bigint(20) UNSIGNED NOT NULL,
                          `appointment_house_id` bigint(20) UNSIGNED NOT NULL,
                          `type_house` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
                          `rieltor_id` bigint(20) UNSIGNED NOT NULL,
                          `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
                          `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
                          `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `obekts`
--

INSERT INTO `obekts` (`id`, `name`, `description`, `price`, `category_id`, `square`, `location_id`, `main_img`, `isPublic`, `count_room`, `count_level`, `level`, `opalenya`, `isNewBuild`, `isPartHouse`, `isPartYard`, `appointment_land_id`, `appointment_house_id`, `type_house`, `rieltor_id`, `slug`, `created_at`, `updated_at`) VALUES
(2, 'Квартира в центрі', 'Квартира в центрі міста', '35900.00', 3, '45.00', 1, 'https://kvartirka.com/blog/wp-content/uploads/2020/01/CTjBGLa2AdB1W7UbfBMMYdaTp9FxuUfBv7Cn.jpg', 1, 2, 5, 1, 1, 0, 0, 0, 1, 1, 'Квартира', 2, 'flat-in-center', '2021-04-21 15:51:16', '2021-04-25 15:51:21'),
(3, 'Dom', 'dom in city ', '213.00', 2, '415.00', 1, 'main.png', 1, 5, 2, 2, 1, 1, 1, 1, 1, 1, '12332', 2, 'dom-zt', '2021-04-22 14:01:35', '2021-04-22 14:01:35'),
(4, 'Office', 'Office desc', '122121.00', 4, '221.00', 1, 'main.png', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'Office', 2, 'office', '2021-04-23 15:10:32', '2021-04-23 15:10:32'),
(5, 'Land', 'Land desc', '21.00', 1, '221.00', 1, 'main.png', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'Land', 2, 'Land', '2021-04-23 15:10:52', '2021-04-23 15:10:52');

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
                         `id` bigint(20) UNSIGNED NOT NULL,
                         `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
                         `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
                         `email_verified_at` timestamp NULL DEFAULT NULL,
                         `is_admin` tinyint(1) DEFAULT NULL,
                         `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
                         `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default_avatar.png',
                         `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
                         `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                         `created_at` timestamp NULL DEFAULT NULL,
                         `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `is_admin`, `password`, `avatar`, `phone`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@dom-zt.com', NULL, 1, '$2y$10$GTHcbWNwsRBJg7XbjV1W4..82Du2Ewy6x.uxKlKuBUVJIPbeKt1y2', 'avatar.png', '000-000-0000', NULL, '2021-03-23 21:41:55', '2021-03-23 21:41:55'),
(2, 'Rieltor', 'rieltor@dom-zt.com', NULL, 0, '$2y$10$sSExMS384LlIppyOPLHF0OhiJnGxEzL89LdyXYPGcLrl2PdZmydWW', 'avatar.png', '098-001-0101', NULL, '2021-03-23 21:41:55', '2021-03-23 21:41:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment_house`
--
ALTER TABLE `appointment_house`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment_land`
--
ALTER TABLE `appointment_land`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
    ADD PRIMARY KEY (`id`),
  ADD KEY `blog_user_id_index` (`user_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `blog_category`
--
ALTER TABLE `blog_category`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
    ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
    ADD PRIMARY KEY (`id`),
  ADD KEY `files_obekt_id_index` (`obekt_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `note`
--
ALTER TABLE `note`
    ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `note_obekt_id_index` (`obekt_id`),
  ADD KEY `note_user_id_index` (`user_id`),
  ADD KEY `id_2` (`id`);

--
-- Indexes for table `obekts`
--
ALTER TABLE `obekts`
    ADD PRIMARY KEY (`id`),
  ADD KEY `obekts_category_id_index` (`category_id`),
  ADD KEY `obekts_location_id_index` (`location_id`),
  ADD KEY `obekts_appointment_land_id_index` (`appointment_land_id`),
  ADD KEY `obekts_appointment_house_id_index` (`appointment_house_id`),
  ADD KEY `obekts_rieltor_id_index` (`rieltor_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
    ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
    ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment_house`
--
ALTER TABLE `appointment_house`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment_land`
--
ALTER TABLE `appointment_land`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_category`
--
ALTER TABLE `blog_category`
    MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
    MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `note`
--
ALTER TABLE `note`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `obekts`
--
ALTER TABLE `obekts`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
    ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `blog_category` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `blog_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `files`
--
ALTER TABLE `files`
    ADD CONSTRAINT `files_obekt_id_foreign` FOREIGN KEY (`obekt_id`) REFERENCES `obekts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `note`
--
ALTER TABLE `note`
    ADD CONSTRAINT `note_obekt_id_foreign` FOREIGN KEY (`obekt_id`) REFERENCES `obekts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `note_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `obekts`
--
ALTER TABLE `obekts`
    ADD CONSTRAINT `obekts_appointment_house_id_foreign` FOREIGN KEY (`appointment_house_id`) REFERENCES `appointment_house` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `obekts_appointment_land_id_foreign` FOREIGN KEY (`appointment_land_id`) REFERENCES `appointment_land` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `obekts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `obekts_location_id_foreign` FOREIGN KEY (`location_id`) REFERENCES `location` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `obekts_rieltor_id_foreign` FOREIGN KEY (`rieltor_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
