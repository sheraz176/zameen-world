-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2023 at 10:08 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pp`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category_post`
--

CREATE TABLE `category_post` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `commentable_id` int(11) NOT NULL,
  `commentable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `parent` int(11) NOT NULL DEFAULT 0,
  `parent_id` int(11) DEFAULT NULL,
  `approved` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feature_property`
--

CREATE TABLE `feature_property` (
  `id` int(10) UNSIGNED NOT NULL,
  `property_id` int(11) NOT NULL,
  `feature_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `album_id` int(11) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `agent_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `property_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `agent_id`, `user_id`, `property_id`, `name`, `email`, `phone`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 'sheraz AlI', 'sherazdeveloper76@gmail.com', '03008758478', 'aanajn', 0, '2023-10-25 20:57:52', '2023-10-25 20:57:52'),
(2, 2, NULL, 2, 'sheraz AlI', 'sherazdeveloper76@gmail.com', '03008758478', 'xasxasxsax', 0, '2023-10-31 04:36:51', '2023-10-31 04:36:51'),
(3, 2, NULL, 2, 'sheraz AlI', 'sherazdeveloper76@gmail.com', '03008758478', 'scsasadxas', 0, '2023-10-31 04:43:06', '2023-10-31 04:43:06'),
(4, 2, NULL, 2, 'sheraz AlI', 'sherazdeveloper76@gmail.com', '03008758478', 'wsqsqsqwsqws', 0, '2023-10-31 04:43:23', '2023-10-31 04:43:23'),
(5, 2, NULL, 2, 'sheraz AlI', 'sherazdeveloper76@gmail.com', '03008758478', 'dmkwedjiwe kewdnwedi wkdnw', 0, '2023-10-31 04:47:28', '2023-10-31 04:47:28'),
(6, 2, NULL, 2, 'sheraz AlI', 'sherazdeveloper76@gmail.com', '03008758478', 'sxsxsdxs', 0, '2023-10-31 04:47:52', '2023-10-31 04:47:52'),
(7, 2, NULL, 2, 'Shelby Buckley', 'gemupi@mailinator.com', '52', 'Fugiat odit aut lab', 0, '2023-10-31 04:50:35', '2023-10-31 04:50:35'),
(8, 2, NULL, 2, 'Iola Santos', 'niquxypenu@mailinator.com', '28', 'Qui perspiciatis co', 0, '2023-10-31 04:52:57', '2023-10-31 04:52:57');

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
(3, '2018_05_07_134045_create_roles_table', 1),
(4, '2018_05_09_054206_create_tags_table', 1),
(5, '2018_05_09_135424_create_categories_table', 1),
(6, '2018_05_10_171517_create_posts_table', 1),
(7, '2018_05_10_172731_create_category_post_table', 1),
(8, '2018_05_10_172800_create_post_tag_table', 1),
(9, '2018_05_19_134221_create_features_table', 1),
(10, '2018_05_19_134753_create_feature_property_table', 1),
(11, '2018_07_06_171008_create_property_image_galleries_table', 1),
(12, '2018_07_18_042846_create_galleries_table', 1),
(13, '2018_08_12_081814_create_sliders_table', 1),
(14, '2018_08_12_113108_create_testimonials_table', 1),
(15, '2018_08_12_142529_create_albums_table', 1),
(16, '2018_08_15_194359_create_messages_table', 1),
(17, '2018_08_20_070748_create_settings_table', 1),
(18, '2018_08_24_073322_create_properties_table', 1),
(19, '2018_08_25_110649_create_comments_table', 1),
(20, '2018_09_04_183409_create_ratings_table', 1),
(21, '2018_10_17_153558_create_services_table', 1);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `view_count` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `is_approved` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

CREATE TABLE `post_tag` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `purpose` enum('sale','rent') COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('house','apartment') COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bedroom` int(11) NOT NULL,
  `bathroom` int(11) NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` int(11) NOT NULL,
  `agent_id` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `floor_plan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_latitude` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_longitude` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nearby` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `title`, `slug`, `price`, `featured`, `purpose`, `type`, `image`, `bedroom`, `bathroom`, `city`, `city_slug`, `address`, `area`, `agent_id`, `description`, `video`, `floor_plan`, `location_latitude`, `location_longitude`, `nearby`, `created_at`, `updated_at`) VALUES
(1, 'Maxime sint ad blan', 'maxime-sint-ad-blan', 184.00, 1, 'rent', 'house', 'maxime-sint-ad-blan-2023-10-25-65391e7c6672f.png', 99, 50, 'Mollitia est volupt', 'mollitia-est-volupt', 'Id sit beatae ad ip', 50, 1, '<p>Consectetur, quia et.</p>', 'Illum assumenda qui', 'default.png', 'Corrupti itaque sun', 'Iusto molestiae dolo', '<p>Cumque nulla sint, p.</p>', '2023-10-25 20:56:13', '2023-10-25 20:56:13'),
(2, 'Laboris et voluptate', 'laboris-et-voluptate', 60.00, 0, 'sale', 'apartment', 'laboris-et-voluptate-2023-10-25-65391fee3078f.png', 29, 43, 'Voluptatem pariatur', 'voluptatem-pariatur', 'Facilis minim necess', 29, 2, 'Irure nihil maxime d', 'Sunt quam vel modi e', 'default.png', 'Ipsam aliquam quo vo', 'Cum neque id quis of', 'Mollit beatae volupt', '2023-10-25 21:02:22', '2023-10-25 21:02:22'),
(3, 'Eaque tenetur rerum', 'eaque-tenetur-rerum', 608.00, 1, 'rent', 'house', 'eaque-tenetur-rerum-2023-10-30-654022d4e39fc.png', 38, 87, 'Cillum consequatur', 'cillum-consequatur', 'Corporis esse excep', 49, 1, '<p>Nostrud pariatur? La.</p>', 'https://youtu.be/RyYKXyvM3D4?list=PLz_YkiqIHesvWMGfavV8JFDQRJycfHUvD', 'floor-plan-2023-10-30-654022d5e55c1.png', '1', '1', '<p>lahore hall road</p>', '2023-10-31 04:40:38', '2023-10-31 04:40:38'),
(4, 'Maiores aliquip do e', 'maiores-aliquip-do-e', 27.00, 1, 'sale', 'apartment', 'maiores-aliquip-do-e-2023-10-30-654025c631638.png', 11, 92, 'Reprehenderit qui u', 'reprehenderit-qui-u', 'Aut ea aspernatur es', 6, 1, '<p>Ex soluta id optio, .</p>', 'In ullam qui quia ex', 'floor-plan-2023-10-30-654025d078669.png', '31.54972', '74.34361', '<p>Aspernatur nesciunt.</p>', '2023-10-31 04:53:21', '2023-10-31 04:53:21');

-- --------------------------------------------------------

--
-- Table structure for table `property_image_galleries`
--

CREATE TABLE `property_image_galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `property_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_image_galleries`
--

INSERT INTO `property_image_galleries` (`id`, `property_id`, `name`, `size`, `created_at`, `updated_at`) VALUES
(1, 3, 'gallary-2023-10-30-654022d6aaf31.jpg', '233006', '2023-10-31 04:40:38', '2023-10-31 04:40:38'),
(2, 3, 'gallary-2023-10-30-654022d6c1017.jfif', '18892', '2023-10-31 04:40:38', '2023-10-31 04:40:38'),
(3, 3, 'gallary-2023-10-30-654022d6c3ae6.jfif', '18892', '2023-10-31 04:40:38', '2023-10-31 04:40:38'),
(4, 3, 'gallary-2023-10-30-654022d6c6900.jpg', '57101', '2023-10-31 04:40:38', '2023-10-31 04:40:38'),
(5, 3, 'gallary-2023-10-30-654022d6cb4c2.jpg', '38224', '2023-10-31 04:40:38', '2023-10-31 04:40:38'),
(6, 3, 'gallary-2023-10-30-654022d6ce6b0.jpg', '74128', '2023-10-31 04:40:38', '2023-10-31 04:40:38'),
(7, 4, 'gallary-2023-10-30-654025d13044c.png', '1634711', '2023-10-31 04:53:21', '2023-10-31 04:53:21'),
(8, 4, 'gallary-2023-10-30-654025d1da3f2.png', '1634711', '2023-10-31 04:53:22', '2023-10-31 04:53:22'),
(9, 4, 'gallary-2023-10-30-654025d2923fa.jpg', '38224', '2023-10-31 04:53:22', '2023-10-31 04:53:22'),
(10, 4, 'gallary-2023-10-30-654025d295c6a.jpg', '74128', '2023-10-31 04:53:22', '2023-10-31 04:53:22');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `rating` decimal(8,2) NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', '2023-10-25 20:47:33', NULL),
(2, 'Agent', 'agent', '2023-10-25 20:47:33', NULL),
(3, 'User', 'user', '2023-10-25 20:47:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_order` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aboutus` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimonial` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `about` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `username`, `email`, `image`, `about`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'admin', 'admin@admin.com', 'default.png', 'Bio of admin', '$2y$10$NO7s8205ThtZE4rfXFPp4OCylW.xyYToIrSDaUDrffEBQPX9D9BIq', 'wJqoDx3DRMU7G6kryrEHtFH8LfmPnStii76tOImQjjm6oLM5JIaTTGFb7Aul', '2023-10-25 20:47:32', NULL),
(2, 2, 'Agent', 'agent', 'agent@agent.com', 'default.png', '', '$2y$10$E7635Itih3e3sU.H7d3sS.nZIVOgNm7ggbTdjwtwfEK57AMc2Oq3G', 'v54Wkpj9LndCNzHQXIb9ADbd7HMyjrOjUEpRm8bbD7Ztcgo7nij9z4YmODLD', '2023-10-25 20:47:32', NULL),
(3, 3, 'User', 'user', 'user@user.com', 'default.png', NULL, '$2y$10$gr5eRpflPighjHz5huzEQe3t1K19J3jNH8Drn006iYxtBOjPhQa2S', NULL, '2023-10-25 20:47:32', NULL),
(4, 3, 'sheraz AlI', 'sheraz', 'sherazdeveloper76@gmail.com', 'default.png', NULL, '$2y$10$/8wIfGGSHSko/YMjOo0ls.Lrfm1stlafvky8y.SUfAvcq/uCceg1S', 'FLM1oe1UiAE5wTfPkdGcU2GIvHN3MIRXCRYarjGcwQ2DRA4EGT1zekcstllj', '2023-11-01 15:03:21', '2023-11-01 15:03:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_post`
--
ALTER TABLE `category_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feature_property`
--
ALTER TABLE `feature_property`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `properties_slug_unique` (`slug`);

--
-- Indexes for table `property_image_galleries`
--
ALTER TABLE `property_image_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category_post`
--
ALTER TABLE `category_post`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feature_property`
--
ALTER TABLE `feature_property`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_tag`
--
ALTER TABLE `post_tag`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `property_image_galleries`
--
ALTER TABLE `property_image_galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
