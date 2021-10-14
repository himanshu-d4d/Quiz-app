-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 14, 2021 at 05:12 PM
-- Server version: 5.7.29-0ubuntu0.16.04.1
-- PHP Version: 7.0.33-26+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz-app`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Admin123@gmail.com', NULL, '$2y$10$mPECocVzQ3bk6hpoJPFAx.KjD9HOxVYz4v5sWiDfM6dKZLQynnUtK', NULL, NULL, '2021-10-14 05:07:39');

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `snippets_no` int(11) NOT NULL,
  `answers` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `question_id`, `snippets_no`, `answers`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Small family/team business or solopreneur selling products to a few\nCustomers/clients with limited or no internal business systems', '2021-10-14 02:36:55', '2021-10-14 02:36:55'),
(2, 1, 2, 'Growing business with quite a few customers working on creating an increasingly\r\nrecognised brand and starting to imlement business systems to become more\r\nefficient', '2021-10-14 02:36:55', '2021-10-14 02:36:55'),
(3, 1, 3, 'Scaling business where the focus is moving to managing risk and using systems\r\nprocesses to ensure compliance and achieve consistency in product and\r\ncustomer care', '2021-10-14 02:36:55', '2021-10-14 02:36:55'),
(4, 1, 3, 'Business selling across multiple markets with a need to comply with and\r\ndeliver on different market requirements', '2021-10-14 02:36:55', '2021-10-14 02:36:55'),
(5, 1, 2, 'Omni channel business selling product across multiple markets and\r\nmultiple platforms including online', '2021-10-14 02:36:55', '2021-10-14 02:36:55'),
(6, 5, 2, 'YES', '2021-10-14 02:47:15', '2021-10-14 04:11:34'),
(7, 5, 2, 'NO', '2021-10-14 02:47:15', '2021-10-14 02:47:15'),
(8, 5, 2, 'UNSURE', '2021-10-14 02:47:15', '2021-10-14 02:47:15');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_first_word` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_remaining_word` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_sequence_no` int(11) NOT NULL,
  `cat_description` longtext COLLATE utf8mb4_unicode_ci,
  `bg_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_first_word`, `cat_remaining_word`, `cat_sequence_no`, `cat_description`, `bg_image`, `created_at`, `updated_at`) VALUES
(1, 'your', 'business', 1, 'Traceability systems can help all kinds of business. Before we dive\r\ninto helping you choose one that is right for you, we need to\r\nunderstand what stage your business is at.', '1634138223.jpg', '2021-10-13 03:47:44', '2021-10-13 09:48:20'),
(2, 'Motivations', '& expectations', 2, 'There are many reasons that food businesses might want to\r\ndonsider implementing a traceability system. These reasons will\r\ndirectly influence the kind of systems that you should consider. In\r\nthis section we ask you about what your motivations and\r\nexpectations are?', '1634116724.jpg', '2021-10-13 03:48:44', '2021-10-13 03:48:44'),
(3, 'your', 'markets', 3, 'The kind of traceability system you choose will be influenced by\r\nwhere you sell your product and who you sell it to. There are\r\ndifferent legislative requirements for traceability if you export your\r\nproducts. In some markets such as china there are very specific\r\nrequirements and expectations that you may need to consider.', '1634116787.jpg', '2021-10-13 03:49:47', '2021-10-13 03:49:47'),
(4, 'Digital', 'Capabilities', 4, 'Traceability systems do not always need access to and/or use of\r\ndigital technology - sometimes pen and paper will do!\r\nUnderstanding the level of accesss you have to digital technology,\r\nhow confident you are and any barriers (such as poor internet\r\nconnections) will help us generate appropriate suggestions.', '', '2021-10-14 05:09:39', '2021-10-14 05:09:39');

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
(5, '2021_10_10_130508_create_admins_table', 1),
(6, '2021_10_10_130857_create_categories_table', 1);

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
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `queston_no` int(11) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `question` longtext NOT NULL,
  `answer_type` varchar(255) NOT NULL,
  `next_action` varchar(11) DEFAULT NULL,
  `background_color` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `queston_no`, `category_id`, `question`, `answer_type`, `next_action`, `background_color`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Select one of the following which BEST describes your business?', 'redio', 'null', '#bd1a1a', '2021-10-14 02:32:15', '2021-10-13 09:50:00'),
(5, 2, 1, 'Do you have a unique identifier coding system for you products? This could be a batch or\r\nor a product code that you allocate at some point when the product is created, stored\r\nand/or sold?', 'redio', '2', '#d93535', '2021-10-14 02:46:30', '2021-10-14 08:16:30'),
(6, 3, 2, 'What do you want a traceability system to help with in your business? You can chose as many as you want', 'redio', 'null', '#754040', '2021-10-14 05:26:13', '2021-10-14 10:56:13');

-- --------------------------------------------------------

--
-- Table structure for table `snippets`
--

CREATE TABLE `snippets` (
  `id` int(11) NOT NULL,
  `snippets_no` int(11) NOT NULL,
  `snippets_text` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `snippets`
--

INSERT INTO `snippets` (`id`, `snippets_no`, `snippets_text`, `created_at`, `updated_at`) VALUES
(1, 1, 'You have inidcated that your business is best described as [answer]. You may have had a little dificulty deciding which statement suits and may have thought that you fit across two or more categories.  Don’t be too concerned because we use your answer to this question to help us determine where you should probably start in asessing your own readiness and need for different kinds of traceability systems and technologies.  You will be able to access all the information and advice available in our resources library so you can add to the list yourself..', '2021-10-13 06:03:31', '2021-10-13 21:58:30'),
(3, 2, 'Congratulations you have the basic building block for traceability in place.  The product identifier system you use will be important information to discuss with any technology supplier.', '2021-10-13 07:14:36', '2021-10-13 07:14:36'),
(4, 3, 'The basic building block for a traceability system is to have a unique product identification system.  The good news is that how you do this is completely your choice.  We suggest that you go to our resources page [insert link] and have a look at how to set up a product identifier system that suits your needs.', '2021-10-13 07:16:27', '2021-10-13 07:16:27');

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
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cat_sequence_no` (`cat_sequence_no`);

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
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `queston_no` (`queston_no`);

--
-- Indexes for table `snippets`
--
ALTER TABLE `snippets`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `snippets`
--
ALTER TABLE `snippets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
