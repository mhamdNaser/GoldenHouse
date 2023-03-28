-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2023 at 06:23 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `masterpice`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `country` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `street_1` varchar(255) DEFAULT NULL,
  `street_2` varchar(255) DEFAULT NULL,
  `street_3` varchar(255) DEFAULT NULL,
  `zip_code` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Category_Name` varchar(255) NOT NULL,
  `Category_Description` varchar(255) NOT NULL,
  `Category_Image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `Category_Name`, `Category_Description`, `Category_Image`, `created_at`, `updated_at`) VALUES
(1, 'Housing', 'Buses and taxis with high efficiency', 'housing.jpg', '2023-03-02 05:55:40', '2023-03-02 05:56:47'),
(2, 'Furniture', 'We offer you furniture for nominal fees without you having to buy it', 'furniture.jpg', '2023-03-02 05:55:58', '2023-03-02 05:55:58'),
(3, 'Cleaning', 'Taking care of the cleanliness of the rooms and the furniture in them', 'clean.jpg', '2023-03-02 05:56:10', '2023-03-02 05:56:10'),
(4, 'Transport', 'A group of bots and rooms for rent, suitable for everyone10', 'delivery.jpg', '2023-03-02 05:56:27', '2023-03-02 05:56:27');

-- --------------------------------------------------------

--
-- Table structure for table `clean_services`
--

CREATE TABLE `clean_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `serviceCategory` bigint(20) UNSIGNED NOT NULL,
  `partnerId` bigint(20) UNSIGNED NOT NULL,
  `serviceName` varchar(255) NOT NULL,
  `serviceDescription` varchar(255) NOT NULL,
  `servicePrice` varchar(255) NOT NULL,
  `service_photo1` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clean_services`
--

INSERT INTO `clean_services` (`id`, `serviceCategory`, `partnerId`, `serviceName`, `serviceDescription`, `servicePrice`, `service_photo1`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 'CR-cleaninig', 'For a clean room with a nice smell, choose our service to get the scent and reassurance, \"Your room is in safe hands.\"', '16', 'clean.jpg', '2023-03-04 09:55:53', '2023-03-04 09:55:53');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `posts_id` bigint(20) UNSIGNED NOT NULL,
  `comment_text` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `users_id`, `posts_id`, `comment_text`, `created_at`, `updated_at`) VALUES
(1, 4, 1, 'Thank you Mr Muhammed', '2023-03-04 08:28:08', '2023-03-04 08:28:08'),
(3, 5, 1, 'this is anew comment', '2023-03-20 06:58:41', '2023-03-20 06:58:41');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `facebook_link` varchar(255) DEFAULT NULL,
  `twitter_link` varchar(255) DEFAULT NULL,
  `instagram_link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `delivery_services`
--

CREATE TABLE `delivery_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `serviceCategory` bigint(20) UNSIGNED NOT NULL,
  `partnerId` bigint(20) UNSIGNED NOT NULL,
  `serviceName` varchar(255) NOT NULL,
  `serviceDescription` varchar(255) NOT NULL,
  `servicePrice` int(20) DEFAULT NULL,
  `service_photo1` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `delivery_services`
--

INSERT INTO `delivery_services` (`id`, `serviceCategory`, `partnerId`, `serviceName`, `serviceDescription`, `servicePrice`, `service_photo1`, `created_at`, `updated_at`) VALUES
(1, 4, 1, 'FastTaxi', 'Modern taxis are distinguished by the accuracy of appointments and the speed of response', 25, 'delivery.jpg', '2023-03-04 10:05:54', '2023-03-04 10:05:54');

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
-- Table structure for table `furniture_services`
--

CREATE TABLE `furniture_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `serviceCategory` bigint(20) UNSIGNED NOT NULL,
  `partnerId` bigint(20) UNSIGNED NOT NULL,
  `serviceName` varchar(255) NOT NULL,
  `serviceDescription` varchar(255) NOT NULL,
  `service_photo1` varchar(255) DEFAULT NULL,
  `service_photo2` varchar(255) DEFAULT NULL,
  `service_photo3` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `house_services`
--

CREATE TABLE `house_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `serviceCategory` bigint(20) UNSIGNED NOT NULL,
  `partnerId` bigint(20) UNSIGNED NOT NULL,
  `serviceName` varchar(255) NOT NULL,
  `serviceDescription` varchar(510) NOT NULL,
  `romeNumber` int(11) NOT NULL,
  `bedNumber` int(11) NOT NULL,
  `allbed` int(11) NOT NULL,
  `servicePrice` float NOT NULL,
  `service_photo1` varchar(255) DEFAULT NULL,
  `service_photo2` varchar(255) DEFAULT NULL,
  `service_photo3` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `house_services`
--

INSERT INTO `house_services` (`id`, `serviceCategory`, `partnerId`, `serviceName`, `serviceDescription`, `romeNumber`, `bedNumber`, `allbed`, `servicePrice`, `service_photo1`, `service_photo2`, `service_photo3`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'T-Room', 'This apartment is a two-room unit, featuring a single bed in each room. The unit is equipped with two fully functional bathrooms, a well-appointed kitchen, and essential furniture. The apartment offers a comfortable and convenient living space, designed to accommodate the needs of individuals or couples', 2, 1, 2, 35, 'cover.webp', 'cover.webp', 'cover.webp', '2023-03-18 10:14:18', '2023-03-18 10:14:18'),
(2, 1, 1, 'Q-room', 'is apartment is a two-room unit, featuring a two single bed in each room. The unit is equipped with two fully functional bathrooms, a well-appointed kitchen, and essential furniture. The apartment offers a comfortable and convenient living space, designed to accommodate the needs of individuals or couples', 2, 2, 4, 30, 'T-room.webp', 'T-room.webp', 'T-room.webp', '2023-03-18 10:15:18', '2023-03-18 10:15:18'),
(3, 1, 4, 'A-room', 'This apartment is a two-room unit, featuring a single bed in each room. The unit is equipped with two fully functional bathrooms, a well-appointed kitchen, and essential furniture. The apartment offers a comfortable and convenient living space, designed to accommodate the needs of individuals or couples', 2, 1, 2, 42, 'cover.webp', 'cover.webp', 'cover.webp', '2023-03-18 15:45:19', '2023-03-18 15:45:19');

-- --------------------------------------------------------

--
-- Table structure for table `massages`
--

CREATE TABLE `massages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_massage` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `content_massage` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `massages`
--

INSERT INTO `massages` (`id`, `title_massage`, `email`, `content_massage`, `created_at`, `updated_at`) VALUES
(1, 'find service', 'huda@gmail.com', 'I would like a double room for two people who are medium -cost. I want it close to the downtown and secure transportation to and from the university', '2023-03-04 08:20:15', '2023-03-04 08:20:15');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_02_01_104616_create_addresses_table', 1),
(6, '2023_02_01_104650_create_contacts_table', 1),
(7, '2023_02_02_064934_create_pios_table', 1),
(8, '2023_02_02_065109_create_posts_table', 1),
(9, '2023_02_02_065220_create_comments_table', 1),
(10, '2023_02_02_065435_create_massages_table', 1),
(11, '2023_02_04_102037_create_categories_table', 1),
(12, '2023_02_17_185734_create_house_services_table', 1),
(13, '2023_02_17_185855_create_clean_services_table', 1),
(14, '2023_02_17_185921_create_delivery_services_table', 1),
(15, '2023_02_17_185951_create_furniture_services_table', 1),
(19, '2023_03_17_190835_create_reservisions_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
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
-- Table structure for table `pios`
--

CREATE TABLE `pios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `pio_text` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pios`
--

INSERT INTO `pios` (`id`, `users_id`, `pio_text`, `created_at`, `updated_at`) VALUES
(18, 4, 'Full Stack Developer', '2023-03-04 12:45:37', '2023-03-04 12:45:37'),
(22, 1, 'FullStack Web Developer', '2023-03-20 05:06:21', '2023-03-20 05:06:21'),
(25, 5, 'FullStack Web Developer', '2023-03-20 06:15:23', '2023-03-20 06:15:23');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `post_text` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `users_id`, `post_text`, `created_at`, `updated_at`) VALUES
(1, 1, 'Welcome to the Golden House website blog. This blog is for students in our housing', '2023-03-04 08:26:28', '2023-03-04 08:26:28'),
(2, 1, 'Laravel Project get started', '2023-03-06 12:46:56', '2023-03-06 12:46:56'),
(3, 1, 'مدونة بسيطة لطلبة الجامعات المشتركين في موقعنا', '2023-03-20 13:44:31', '2023-03-20 13:44:31');

-- --------------------------------------------------------

--
-- Table structure for table `reservisions`
--

CREATE TABLE `reservisions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `usersId` bigint(20) UNSIGNED NOT NULL,
  `categoryId` bigint(20) UNSIGNED NOT NULL,
  `partnerId` bigint(20) UNSIGNED NOT NULL,
  `serviceId` int(11) NOT NULL,
  `reserState` varchar(255) NOT NULL DEFAULT 'pending',
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `userIdCard` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservisions`
--

INSERT INTO `reservisions` (`id`, `usersId`, `categoryId`, `partnerId`, `serviceId`, `reserState`, `startDate`, `endDate`, `userIdCard`, `created_at`, `updated_at`) VALUES
(1, 5, 1, 4, 3, 'accept', '2023-06-01', '2023-10-31', 'userIdcard.png', '2023-03-18 16:01:53', '2023-03-20 07:31:54'),
(2, 5, 1, 1, 1, 'pending', '2023-05-01', '2023-12-31', 'userIdcard.png', '2023-03-18 16:02:13', '2023-03-20 07:35:26'),
(3, 1, 4, 1, 1, 'accept', '2023-04-30', '2023-10-25', 'userIdcard.png', '2023-03-18 17:56:04', '2023-03-19 08:36:31'),
(4, 5, 3, 1, 1, 'pending', '2023-05-01', '2023-09-20', 'userIdcard.png', '2023-03-20 07:44:53', '2023-03-20 07:44:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userttype` varchar(255) NOT NULL,
  `user_first_name` varchar(255) NOT NULL,
  `user_last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `user_photo` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `Date_of_Birth` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `userttype`, `user_first_name`, `user_last_name`, `email`, `phone`, `user_photo`, `gender`, `Date_of_Birth`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ADM', 'muhammed', 'naser edden', 'naser1@gmail.com', 776830893, '22.jpg', NULL, NULL, '$2y$10$CTNEWioVaS1YZKdJqZz8FOhohSRet3g.sLISx1rnoNRSK3Varsua.', NULL, '2023-02-19 02:12:23', '2023-02-19 02:12:23'),
(2, 'STD', 'Karam', 'Hatem', 'karam@gmail.com', 776830800, '1.jpeg', NULL, NULL, '$2y$10$yVo8iPfxYE3zGDE1yIe/KOGq8ssvUGgpmZnOdOfuCiURreWKQp4tO', NULL, '2023-03-02 05:49:04', '2023-03-02 05:49:04'),
(4, 'SVP', 'Amro', 'Shandaq', 'amro@gmail.com', 776830110, '1077114.png', NULL, NULL, '$2y$10$mFD1KE1hIrj2wKXLb4wRlOsO6uZTjbpWN9iF79yTuZ0M1NEa1bJPa', NULL, '2023-03-02 10:52:56', '2023-03-02 10:52:56'),
(5, 'STD', 'talab', 'yaseen', 'talab@gmail.com', 776830812, 'user.png', NULL, NULL, '$2y$10$co/cltOJGoCUWc5myWNAG.AOcmqBtVIp3D58POPtGM1fduuGyU3Zm', NULL, '2023-03-16 06:27:49', '2023-03-16 06:27:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addresses_users_id_foreign` (`users_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clean_services`
--
ALTER TABLE `clean_services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `clean_services_servicecategory_foreign` (`serviceCategory`),
  ADD KEY `clean_services_partnerid_foreign` (`partnerId`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_users_id_foreign` (`users_id`),
  ADD KEY `comments_posts_id_foreign` (`posts_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contacts_users_id_foreign` (`users_id`);

--
-- Indexes for table `delivery_services`
--
ALTER TABLE `delivery_services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `delivery_services_servicecategory_foreign` (`serviceCategory`),
  ADD KEY `delivery_services_partnerid_foreign` (`partnerId`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `furniture_services`
--
ALTER TABLE `furniture_services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `furniture_services_servicecategory_foreign` (`serviceCategory`),
  ADD KEY `furniture_services_partnerid_foreign` (`partnerId`);

--
-- Indexes for table `house_services`
--
ALTER TABLE `house_services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `house_services_servicecategory_foreign` (`serviceCategory`),
  ADD KEY `house_services_partnerid_foreign` (`partnerId`);

--
-- Indexes for table `massages`
--
ALTER TABLE `massages`
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
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pios`
--
ALTER TABLE `pios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pios_users_id_foreign` (`users_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_users_id_foreign` (`users_id`);

--
-- Indexes for table `reservisions`
--
ALTER TABLE `reservisions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservisions_usersid_foreign` (`usersId`),
  ADD KEY `reservisions_categoryid_foreign` (`categoryId`),
  ADD KEY `reservisions_partnerid_foreign` (`partnerId`);

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
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `clean_services`
--
ALTER TABLE `clean_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `delivery_services`
--
ALTER TABLE `delivery_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `furniture_services`
--
ALTER TABLE `furniture_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `house_services`
--
ALTER TABLE `house_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `massages`
--
ALTER TABLE `massages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pios`
--
ALTER TABLE `pios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reservisions`
--
ALTER TABLE `reservisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `clean_services`
--
ALTER TABLE `clean_services`
  ADD CONSTRAINT `clean_services_partnerid_foreign` FOREIGN KEY (`partnerId`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `clean_services_servicecategory_foreign` FOREIGN KEY (`serviceCategory`) REFERENCES `categories` (`id`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_posts_id_foreign` FOREIGN KEY (`posts_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `comments_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `contacts_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `delivery_services`
--
ALTER TABLE `delivery_services`
  ADD CONSTRAINT `delivery_services_partnerid_foreign` FOREIGN KEY (`partnerId`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `delivery_services_servicecategory_foreign` FOREIGN KEY (`serviceCategory`) REFERENCES `categories` (`id`);

--
-- Constraints for table `furniture_services`
--
ALTER TABLE `furniture_services`
  ADD CONSTRAINT `furniture_services_partnerid_foreign` FOREIGN KEY (`partnerId`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `furniture_services_servicecategory_foreign` FOREIGN KEY (`serviceCategory`) REFERENCES `categories` (`id`);

--
-- Constraints for table `house_services`
--
ALTER TABLE `house_services`
  ADD CONSTRAINT `house_services_partnerid_foreign` FOREIGN KEY (`partnerId`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `house_services_servicecategory_foreign` FOREIGN KEY (`serviceCategory`) REFERENCES `categories` (`id`);

--
-- Constraints for table `pios`
--
ALTER TABLE `pios`
  ADD CONSTRAINT `pios_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `reservisions`
--
ALTER TABLE `reservisions`
  ADD CONSTRAINT `reservisions_categoryid_foreign` FOREIGN KEY (`categoryId`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `reservisions_partnerid_foreign` FOREIGN KEY (`partnerId`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `reservisions_usersid_foreign` FOREIGN KEY (`usersId`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
