-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2021 at 02:00 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
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
(1, 'Admin', 'Admin123@gmail.com', NULL, '$2y$10$fwUTRabrgvn0tXM1UypTXeL.kSfE12Dj0igMWSP4EqzAIPQrusIem', NULL, NULL, '2021-10-20 06:58:22');

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `question_order` int(11) NOT NULL,
  `snippets_no` int(11) NOT NULL,
  `answer_order` int(11) NOT NULL,
  `answers` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `question_order`, `snippets_no`, `answer_order`, `answers`, `created_at`, `updated_at`) VALUES
(2, 1, 1, 1, 'Growing business with quite a few customers working on creating an increasingly\nrecognised brand and starting to imlement business systems to become more\nefficient', '2021-10-19 00:20:45', '2021-10-19 00:20:45'),
(3, 1, 1, 2, 'Scaling business where the focus is moving to managing risk and using systems\r\nprocesses to ensure compliance and achieve consistency in product and\r\ncustomer care', '2021-10-19 00:20:45', '2021-10-19 00:20:45'),
(4, 1, 1, 3, 'Business selling across multiple markets with a need to comply with and\r\ndeliver on different market requirements', '2021-10-19 00:20:46', '2021-10-19 00:20:46'),
(5, 1, 1, 4, 'Omni channel business selling product across multiple markets and\r\nmultiple platforms including online', '2021-10-19 00:20:46', '2021-10-19 00:20:46'),
(16, 4, 1, 1, 'The system easily integrates operations (on\r\nfarm, on boat, on premises', '2021-10-19 03:11:32', '2021-10-19 03:11:32'),
(17, 4, 2, 2, 'The system is compatible with our supply\r\nchain partners so that we get full chain\r\ntraceability through to the customer', '2021-10-19 03:11:32', '2021-10-19 03:11:32'),
(18, 4, 2, 3, 'The system is compatible with the systems\r\nour customers use', '2021-10-19 03:11:32', '2021-10-19 03:11:32'),
(19, 4, 3, 4, 'The system is compliant with international\r\nstandards and supports secure data\r\nexchange', '2021-10-19 03:11:32', '2021-10-19 03:11:32'),
(20, 5, 1, 1, 'Consumers can access information\r\nabout who produced the product and\r\nwhere it is from', '2021-10-19 03:15:23', '2021-10-19 03:15:23'),
(21, 5, 1, 2, 'Consumers can find out whether the\r\nproduct they have purchased is genuine', '2021-10-19 03:15:23', '2021-10-19 03:15:23'),
(22, 5, 1, 3, 'Consumers can see that the product\r\nhas not been tampered with', '2021-10-19 03:15:24', '2021-10-19 03:15:24'),
(23, 5, 2, 4, 'Consumers can access information\r\nabout the journey from producer to\r\nplate', '2021-10-19 03:15:24', '2021-10-19 03:15:24'),
(24, 6, 1, 1, 'AUSTRALIA ONLY', '2021-10-19 03:26:43', '2021-10-19 03:26:43'),
(25, 6, 3, 2, 'INTERNATIONAL MARKETS (NOT INCLUDING CHINA)', '2021-10-19 03:26:43', '2021-10-19 03:26:43'),
(26, 6, 2, 3, 'INTERNATIONAL MARKETS (INCLUDING CHINA)', '2021-10-19 03:26:44', '2021-10-19 03:26:44'),
(27, 7, 1, 1, 'Extremely confident', '2021-10-20 07:37:31', '2021-10-20 07:37:31'),
(28, 7, 2, 2, 'Quite confident', '2021-10-20 07:37:31', '2021-10-20 07:37:31'),
(29, 7, 3, 3, 'Not too confident', '2021-10-20 07:37:32', '2021-10-20 07:37:32'),
(30, 7, 2, 4, 'Not confident at all', '2021-10-20 07:37:32', '2021-10-20 07:37:32'),
(31, 7, 3, 5, 'Unsure', '2021-10-20 07:37:32', '2021-10-20 07:37:32'),
(32, 8, 3, 1, 'Fast', '2021-10-20 07:43:34', '2021-10-20 07:43:34'),
(33, 8, 3, 2, 'Intermediate', '2021-10-20 07:43:34', '2021-10-20 07:43:34'),
(34, 8, 3, 3, 'Slow/poor', '2021-10-20 07:43:34', '2021-10-20 07:43:34'),
(35, 8, 3, 4, 'Intermittent and/or unreliable', '2021-10-20 07:43:34', '2021-10-20 07:43:34'),
(36, 9, 1, 1, 'We can devote 1 to 5 hours per week', '2021-10-20 07:46:07', '2021-10-20 07:46:07'),
(37, 9, 1, 2, 'We can devote 5 to 10 hours per week', '2021-10-20 07:46:08', '2021-10-20 07:46:08'),
(38, 9, 3, 3, 'We can devote more than 20 hours per week (I.e. more than 0.5FTE)', '2021-10-20 07:46:08', '2021-10-20 07:46:08'),
(39, 10, 2, 1, 'We can devote up to $5,000 per year', '2021-10-20 07:47:24', '2021-10-20 07:47:24'),
(40, 10, 2, 2, 'We can devote up to $15,000 per year', '2021-10-20 07:47:24', '2021-10-20 07:47:24'),
(41, 10, 3, 3, 'We can devote more than $15,000 per year', '2021-10-20 07:47:24', '2021-10-20 07:47:24'),
(42, 1, 1, 5, 'Small family/team business or solopreneur selling products to a few\r\nCustomers/clients with limited or no internal business systems', '2021-10-22 05:32:27', '2021-10-22 05:32:27'),
(43, 3, 2, 1, 'To help me comply with my food safety and QA requirements', '2021-10-23 01:35:39', '2021-10-23 01:35:39'),
(44, 3, 2, 2, 'To help manage and monitor the performance of my supply chain through to\r\nMy customers. E.g to ensure temperature compliance', '2021-10-23 01:35:39', '2021-10-23 01:35:39'),
(45, 3, 2, 3, 'To track where my product is after it leaves our premises', '2021-10-23 01:35:40', '2021-10-23 01:35:40'),
(46, 3, 3, 4, 'To support and build my brand story', '2021-10-23 01:35:40', '2021-10-23 01:35:40'),
(47, 3, 3, 5, 'To make it easier for customers and consumers to know whether they have\r\na genuine product', '2021-10-23 01:35:40', '2021-10-23 01:35:40'),
(48, 3, 3, 6, 'To reduce opportunities for my product to be copied or for my packaging to be\r\nreused for other products', '2021-10-23 01:35:40', '2021-10-23 01:35:40'),
(49, 3, 3, 7, 'To help verify my product claims (eg. Provenance, organic, sustainability,\nQuality certifications', '2021-10-23 01:35:40', '2021-10-23 01:35:40'),
(51, 2, 2, 1, 'YES', '2021-10-23 02:49:12', '2021-10-23 02:49:12'),
(52, 2, 2, 2, 'NO', '2021-10-23 02:49:12', '2021-10-23 02:49:12'),
(53, 2, 1, 3, 'UNSURE', '2021-10-23 02:49:32', '2021-10-23 02:49:32');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_first_word` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_remaining_word` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_sequence_no` int(11) NOT NULL,
  `cat_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bg_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_first_word`, `cat_remaining_word`, `cat_sequence_no`, `cat_description`, `bg_image`, `created_at`, `updated_at`) VALUES
(1, 'your', 'business', 1, 'Traceability systems can help all kinds of business. Before we dive\r\ninto helping you choose one that is right for you, we need to\r\nunderstand what stage your business is at.', '1634734478.jpg', '2021-10-19 00:17:32', '2021-10-20 07:24:38'),
(2, 'Motivations', '& expectations', 2, 'There are many reasons that food businesses might want to\r\ndonsider implementing a traceability system. These reasons will\r\ndirectly influence the kind of systems that you should consider. In\r\nthis section we ask you about what your motivations and\r\nexpectations are?', '1634734493.jpg', '2021-10-19 00:18:24', '2021-10-20 07:24:53'),
(3, 'your', 'markets', 3, 'The kind of traceability system you choose will be influenced by\r\nwhere you sell your product and who you sell it to. There are\r\ndifferent legislative requirements for traceability if you export your\r\nproducts. In some markets such as china there are very specific\r\nrequirements and expectations that you may need to consider.', '1634734508.jpg', '2021-10-19 03:16:39', '2021-10-20 07:25:08'),
(4, 'Digital', 'Capabilities', 4, 'Traceability systems do not always need access to and/or use of\r\ndigital technology - sometimes pen and paper will do!\r\nUnderstanding the level of accesss you have to digital technology,\r\nhow confident you are and any barriers (such as poor internet\r\nconnections) will help us generate appropriate suggestions.', '1634734523.jpg', '2021-10-20 06:59:33', '2021-10-20 07:25:23'),
(5, 'Time', '& resources', 5, 'Understanding how much time and money you have available to\r\nfind and implement a traceability system will, to a large extent,\r\ninfluence the kind of system that you should focus on in the first\r\ninstance. You may change this in the future but it gives you a good\r\nplace to start', '1634735663.jpg', '2021-10-20 07:44:23', '2021-10-20 07:44:23');

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
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `category_order` int(11) NOT NULL,
  `question` longtext NOT NULL,
  `answer_type` varchar(255) NOT NULL,
  `background_color` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `queston_no`, `category_order`, `question`, `answer_type`, `background_color`, `created_at`, `updated_at`) VALUES
(4, 4, 2, 'Traceability systems can help businesses become more efficient, saving time and money as well\r\nas reducing waste. When choosing a traceability system, how importantare the following\r\ncompatibility features', 'Composition', '#dba6a6', '2021-10-19 03:03:56', '2021-10-19 08:33:56'),
(5, 5, 2, 'How important is it that your traceability system supports the following consumer focused features', 'Composition', '#d1bebe', '2021-10-19 03:14:35', '2021-10-19 08:44:35'),
(6, 6, 3, 'Where do you currently sell, or intend to sell your products?', 'redio', '#bf9898', '2021-10-19 03:25:58', '2021-10-19 08:55:58'),
(7, 7, 4, 'How confident are you that you have the skills and knowledge to implement and managed\r\na digital technology based traceability system in your business', 'redio', '#e0b7b7', '2021-10-20 07:35:56', '2021-10-20 13:05:56'),
(8, 8, 4, 'How would you rate the level of internet connectivity in your business', 'redio', '#cbd3d9', '2021-10-22 11:34:31', '2021-10-22 11:34:31'),
(9, 9, 5, 'How much time do you and/or other people who work in your business have available to\r\nImplement and manage a traceability system? You can add the time from different people in\r\nyour business together for this question.', 'redio', '#f0dede', '2021-10-20 07:45:26', '2021-10-20 13:15:26'),
(10, 10, 5, 'What is your budget for implementing and managing a traceability system within your business? The\r\nBudget is for costs other than salaries for you or your employees?', 'redio', '#e0dbdb', '2021-10-20 07:46:47', '2021-10-20 13:16:47'),
(11, 1, 1, 'Select one of the following which BEST describes your business?', 'redio', '#e0d9d9', '2021-10-22 05:39:45', '2021-10-22 11:09:45'),
(12, 3, 2, 'What do you want a traceability system to help with in your business? You can chose as many as you want', 'redio', '#d9cbcb', '2021-10-23 01:33:46', '2021-10-23 07:03:46'),
(13, 2, 1, 'Do you have a unique identifier coding system for you products? This could be a batch or\r\nor a product code that you allocate at some point when the product is created, stored\r\nand/or sold?', 'redio', '#dbcdcd', '2021-10-23 02:48:11', '2021-10-23 08:18:11');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `pdf` longtext NOT NULL,
  `answer_data` longtext NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `user_id`, `user_name`, `pdf`, `answer_data`, `date`, `created_at`, `updated_at`) VALUES
(7, 2, 'Admin', '1637317982', '[{\"answer\":\"Scaling business where the focus is moving to managing risk and using systemsprocesses to ensure compliance and achieve consistency in product andcustomer care\",\"answer_type\":\"redio\",\"snippets_text\":\"You have inidcated that your business is best described as [answer]. You may have had a little dificulty deciding which statement suits and may have thought that you fit across two or more categories.  Don\\u2019t be too concerned because we use your answer to this question to help us determine where you should probably start in asessing your own readiness and need for different kinds of traceability systems and technologies.  You will be able to access all the information and advice available in our resources library so you can add to the list yourself..\",\"category\":\"your business\",\"question\":\"Select one of the following which BEST describes your business?\",\"question_no\":\"1\",\"answer_order\":\"2\"},{\"answer\":\"NO\",\"answer_type\":\"redio\",\"snippets_text\":\"Congratulations you have the basic building block for traceability in place.  The product identifier system you use will be important information to discuss with any technology supplier.\",\"category\":\"your business\",\"question\":\"Do you have a unique identifier coding system for you products? This could be a batch oror a product code that you allocate at some point when the product is created, storedand\\/or sold?\",\"question_no\":\"2\",\"answer_order\":\"2\"},{\"answer\":\"To support and build my brand story\",\"answer_type\":\"redio\",\"snippets_text\":\"The basic building block for a traceability system is to have a unique product identification system.  The good news is that how you do this is completely your choice.  We suggest that you go to our resources page [insert link] and have a look at how to set up a product identifier system that suits your needs.\",\"category\":\"Motivations & expectations\",\"question\":\"What do you want a traceability system to help with in your business? You can chose as many as you want\",\"question_no\":\"3\",\"answer_order\":\"4\"},{\"answer\":{\"16\":\"The system easily integrates operations (onfarm, on boat, on premises = Not important\",\"17\":\"The system is compatible with our supplychain partners so that we get full chaintraceability through to the customer = Unsure\",\"18\":\"The system is compatible with the systemsour customers use = Unsure\",\"19\":\"The system is compliant with internationalstandards and supports secure dataexchange = Unsure\"},\"answer_type\":\"Composition\",\"snippets_text\":\"The basic building block for a traceability system is to have a unique product identification system.  The good news is that how you do this is completely your choice.  We suggest that you go to our resources page [insert link] and have a look at how to set up a product identifier system that suits your needs.\",\"category\":\"Motivations & expectations\",\"question\":\"Traceability systems can help businesses become more efficient, saving time and money as wellas reducing waste. When choosing a traceability system, how importantare the followingcompatibility features\",\"question_no\":\"4\",\"answer_order\":\"4\"},{\"answer\":{\"20\":\"Consumers can access informationabout who produced the product andwhere it is from = Not important\",\"21\":\"Consumers can find out whether theproduct they have purchased is genuine = Unsure\",\"22\":\"Consumers can see that the producthas not been tampered with = Unsure\",\"23\":\"Consumers can access informationabout the journey from producer toplate = Unsure\"},\"answer_type\":\"Composition\",\"snippets_text\":\"You have inidcated that your business is best described as [answer]. You may have had a little dificulty deciding which statement suits and may have thought that you fit across two or more categories.  Don\\u2019t be too concerned because we use your answer to this question to help us determine where you should probably start in asessing your own readiness and need for different kinds of traceability systems and technologies.  You will be able to access all the information and advice available in our resources library so you can add to the list yourself..\",\"category\":\"Motivations & expectations\",\"question\":\"How important is it that your traceability system supports the following consumer focused features\",\"question_no\":\"5\",\"answer_order\":\"3\"},{\"answer\":\"INTERNATIONAL MARKETS (NOT INCLUDING CHINA)\",\"answer_type\":\"redio\",\"snippets_text\":\"The basic building block for a traceability system is to have a unique product identification system.  The good news is that how you do this is completely your choice.  We suggest that you go to our resources page [insert link] and have a look at how to set up a product identifier system that suits your needs.\",\"category\":\"your markets\",\"question\":\"Where do you currently sell, or intend to sell your products?\",\"question_no\":\"6\",\"answer_order\":\"2\"},{\"answer\":\"Quite confident\",\"answer_type\":\"redio\",\"snippets_text\":\"Congratulations you have the basic building block for traceability in place.  The product identifier system you use will be important information to discuss with any technology supplier.\",\"category\":\"Digital Capabilities\",\"question\":\"How confident are you that you have the skills and knowledge to implement and manageda digital technology based traceability system in your business\",\"question_no\":\"7\",\"answer_order\":\"2\"},{\"answer\":\"Intermediate\",\"answer_type\":\"redio\",\"snippets_text\":\"The basic building block for a traceability system is to have a unique product identification system.  The good news is that how you do this is completely your choice.  We suggest that you go to our resources page [insert link] and have a look at how to set up a product identifier system that suits your needs.\",\"category\":\"Digital Capabilities\",\"question\":\"How would you rate the level of internet connectivity in your business\",\"question_no\":\"8\",\"answer_order\":\"2\"},{\"answer\":\"We can devote 1 to 5 hours per week\",\"answer_type\":\"redio\",\"snippets_text\":\"You have inidcated that your business is best described as [answer]. You may have had a little dificulty deciding which statement suits and may have thought that you fit across two or more categories.  Don\\u2019t be too concerned because we use your answer to this question to help us determine where you should probably start in asessing your own readiness and need for different kinds of traceability systems and technologies.  You will be able to access all the information and advice available in our resources library so you can add to the list yourself..\",\"category\":\"Time & resources\",\"question\":\"How much time do you and\\/or other people who work in your business have available toImplement and manage a traceability system? You can add the time from different people inyour business together for this question.\",\"question_no\":\"9\",\"answer_order\":\"1\"},{\"answer\":\"We can devote up to $15,000 per year\",\"answer_type\":\"redio\",\"snippets_text\":\"Congratulations you have the basic building block for traceability in place.  The product identifier system you use will be important information to discuss with any technology supplier.\",\"category\":\"Time & resources\",\"question\":\"What is your budget for implementing and managing a traceability system within your business? TheBudget is for costs other than salaries for you or your employees?\",\"question_no\":\"10\",\"answer_order\":\"2\"}]', '2021-11-19', '2021-11-19 05:04:34', '2021-11-19 05:04:34'),
(8, 2, 'Admin', '1637321877', '[{\"answer\":\"Scaling business where the focus is moving to managing risk and using systemsprocesses to ensure compliance and achieve consistency in product andcustomer care\",\"answer_type\":\"redio\",\"snippets_text\":\"You have inidcated that your business is best described as [answer]. You may have had a little dificulty deciding which statement suits and may have thought that you fit across two or more categories.  Don\\u2019t be too concerned because we use your answer to this question to help us determine where you should probably start in asessing your own readiness and need for different kinds of traceability systems and technologies.  You will be able to access all the information and advice available in our resources library so you can add to the list yourself..\",\"category\":\"your business\",\"question\":\"Select one of the following which BEST describes your business?\",\"question_no\":\"1\",\"answer_order\":\"2\"},{\"answer\":\"NO\",\"answer_type\":\"redio\",\"snippets_text\":\"Congratulations you have the basic building block for traceability in place.  The product identifier system you use will be important information to discuss with any technology supplier.\",\"category\":\"your business\",\"question\":\"Do you have a unique identifier coding system for you products? This could be a batch oror a product code that you allocate at some point when the product is created, storedand\\/or sold?\",\"question_no\":\"2\",\"answer_order\":\"2\"},{\"answer\":\"To support and build my brand story\",\"answer_type\":\"redio\",\"snippets_text\":\"The basic building block for a traceability system is to have a unique product identification system.  The good news is that how you do this is completely your choice.  We suggest that you go to our resources page [insert link] and have a look at how to set up a product identifier system that suits your needs.\",\"category\":\"Motivations & expectations\",\"question\":\"What do you want a traceability system to help with in your business? You can chose as many as you want\",\"question_no\":\"3\",\"answer_order\":\"4\"},{\"answer\":{\"16\":\"The system easily integrates operations (onfarm, on boat, on premises = Not important\",\"17\":\"The system is compatible with our supplychain partners so that we get full chaintraceability through to the customer = Not important\",\"18\":\"The system is compatible with the systemsour customers use = Not important\",\"19\":\"The system is compliant with internationalstandards and supports secure dataexchange = Not important\"},\"answer_type\":\"Composition\",\"snippets_text\":\"The basic building block for a traceability system is to have a unique product identification system.  The good news is that how you do this is completely your choice.  We suggest that you go to our resources page [insert link] and have a look at how to set up a product identifier system that suits your needs.\",\"category\":\"Motivations & expectations\",\"question\":\"Traceability systems can help businesses become more efficient, saving time and money as wellas reducing waste. When choosing a traceability system, how importantare the followingcompatibility features\",\"question_no\":\"4\",\"answer_order\":\"4\"},{\"answer\":{\"20\":\"Consumers can access informationabout who produced the product andwhere it is from = Not important\",\"21\":\"Consumers can find out whether theproduct they have purchased is genuine = Unsure\",\"22\":\"Consumers can see that the producthas not been tampered with = Unsure\",\"23\":\"Consumers can access informationabout the journey from producer toplate = Unsure\"},\"answer_type\":\"Composition\",\"snippets_text\":\"Congratulations you have the basic building block for traceability in place.  The product identifier system you use will be important information to discuss with any technology supplier.\",\"category\":\"Motivations & expectations\",\"question\":\"How important is it that your traceability system supports the following consumer focused features\",\"question_no\":\"5\",\"answer_order\":\"4\"},{\"answer\":\"INTERNATIONAL MARKETS (NOT INCLUDING CHINA)\",\"answer_type\":\"redio\",\"snippets_text\":\"The basic building block for a traceability system is to have a unique product identification system.  The good news is that how you do this is completely your choice.  We suggest that you go to our resources page [insert link] and have a look at how to set up a product identifier system that suits your needs.\",\"category\":\"your markets\",\"question\":\"Where do you currently sell, or intend to sell your products?\",\"question_no\":\"6\",\"answer_order\":\"2\"},{\"answer\":\"Not confident at all\",\"answer_type\":\"redio\",\"snippets_text\":\"Congratulations you have the basic building block for traceability in place.  The product identifier system you use will be important information to discuss with any technology supplier.\",\"category\":\"Digital Capabilities\",\"question\":\"How confident are you that you have the skills and knowledge to implement and manageda digital technology based traceability system in your business\",\"question_no\":\"7\",\"answer_order\":\"4\"},{\"answer\":\"Intermittent and\\/or unreliable\",\"answer_type\":\"redio\",\"snippets_text\":\"The basic building block for a traceability system is to have a unique product identification system.  The good news is that how you do this is completely your choice.  We suggest that you go to our resources page [insert link] and have a look at how to set up a product identifier system that suits your needs.\",\"category\":\"Digital Capabilities\",\"question\":\"How would you rate the level of internet connectivity in your business\",\"question_no\":\"8\",\"answer_order\":\"4\"},{\"answer\":\"We can devote 5 to 10 hours per week\",\"answer_type\":\"redio\",\"snippets_text\":\"You have inidcated that your business is best described as [answer]. You may have had a little dificulty deciding which statement suits and may have thought that you fit across two or more categories.  Don\\u2019t be too concerned because we use your answer to this question to help us determine where you should probably start in asessing your own readiness and need for different kinds of traceability systems and technologies.  You will be able to access all the information and advice available in our resources library so you can add to the list yourself..\",\"category\":\"Time & resources\",\"question\":\"How much time do you and\\/or other people who work in your business have available toImplement and manage a traceability system? You can add the time from different people inyour business together for this question.\",\"question_no\":\"9\",\"answer_order\":\"2\"},{\"answer\":\"We can devote more than $15,000 per year\",\"answer_type\":\"redio\",\"snippets_text\":\"The basic building block for a traceability system is to have a unique product identification system.  The good news is that how you do this is completely your choice.  We suggest that you go to our resources page [insert link] and have a look at how to set up a product identifier system that suits your needs.\",\"category\":\"Time & resources\",\"question\":\"What is your budget for implementing and managing a traceability system within your business? TheBudget is for costs other than salaries for you or your employees?\",\"question_no\":\"10\",\"answer_order\":\"3\"},{\"answer\":\"We can devote up to $15,000 per year\",\"answer_type\":\"redio\",\"snippets_text\":\"Congratulations you have the basic building block for traceability in place.  The product identifier system you use will be important information to discuss with any technology supplier.\",\"category\":\"Time & resources\",\"question\":\"What is your budget for implementing and managing a traceability system within your business? TheBudget is for costs other than salaries for you or your employees?\",\"question_no\":\"10\",\"answer_order\":\"2\"}]', '2021-11-19', '2021-11-19 06:11:09', '2021-11-19 06:11:09'),
(9, 2, 'Admin', '1637324642', '[{\"answer\":\"Growing business with quite a few customers working on creating an increasinglyrecognised brand and starting to imlement business systems to become moreefficient\",\"answer_type\":\"redio\",\"snippets_text\":\"You have inidcated that your business is best described as [answer]. You may have had a little dificulty deciding which statement suits and may have thought that you fit across two or more categories.  Don\\u2019t be too concerned because we use your answer to this question to help us determine where you should probably start in asessing your own readiness and need for different kinds of traceability systems and technologies.  You will be able to access all the information and advice available in our resources library so you can add to the list yourself..\",\"category\":\"your business\",\"question\":\"Select one of the following which BEST describes your business?\",\"question_no\":\"1\",\"answer_order\":\"1\"},{\"answer\":\"NO\",\"answer_type\":\"redio\",\"snippets_text\":\"Congratulations you have the basic building block for traceability in place.  The product identifier system you use will be important information to discuss with any technology supplier.\",\"category\":\"your business\",\"question\":\"Do you have a unique identifier coding system for you products? This could be a batch oror a product code that you allocate at some point when the product is created, storedand\\/or sold?\",\"question_no\":\"2\",\"answer_order\":\"2\"},{\"answer\":\"To track where my product is after it leaves our premises\",\"answer_type\":\"redio\",\"snippets_text\":\"Congratulations you have the basic building block for traceability in place.  The product identifier system you use will be important information to discuss with any technology supplier.\",\"category\":\"Motivations & expectations\",\"question\":\"What do you want a traceability system to help with in your business? You can chose as many as you want\",\"question_no\":\"3\",\"answer_order\":\"3\"},{\"answer\":{\"16\":\"The system easily integrates operations (onfarm, on boat, on premises = Not important\",\"17\":\"The system is compatible with our supplychain partners so that we get full chaintraceability through to the customer = Not important\",\"18\":\"The system is compatible with the systemsour customers use = Not important\",\"19\":\"The system is compliant with internationalstandards and supports secure dataexchange = Not important\"},\"answer_type\":\"Composition\",\"snippets_text\":\"The basic building block for a traceability system is to have a unique product identification system.  The good news is that how you do this is completely your choice.  We suggest that you go to our resources page [insert link] and have a look at how to set up a product identifier system that suits your needs.\",\"category\":\"Motivations & expectations\",\"question\":\"Traceability systems can help businesses become more efficient, saving time and money as wellas reducing waste. When choosing a traceability system, how importantare the followingcompatibility features\",\"question_no\":\"4\",\"answer_order\":\"4\"},{\"answer\":{\"20\":\"Consumers can access informationabout who produced the product andwhere it is from = Not important\",\"21\":\"Consumers can find out whether theproduct they have purchased is genuine = Unsure\",\"22\":\"Consumers can see that the producthas not been tampered with = Unsure\",\"23\":\"Consumers can access informationabout the journey from producer toplate = Unsure\"},\"answer_type\":\"Composition\",\"snippets_text\":\"Congratulations you have the basic building block for traceability in place.  The product identifier system you use will be important information to discuss with any technology supplier.\",\"category\":\"Motivations & expectations\",\"question\":\"How important is it that your traceability system supports the following consumer focused features\",\"question_no\":\"5\",\"answer_order\":\"4\"},{\"answer\":\"INTERNATIONAL MARKETS (NOT INCLUDING CHINA)\",\"answer_type\":\"redio\",\"snippets_text\":\"The basic building block for a traceability system is to have a unique product identification system.  The good news is that how you do this is completely your choice.  We suggest that you go to our resources page [insert link] and have a look at how to set up a product identifier system that suits your needs.\",\"category\":\"your markets\",\"question\":\"Where do you currently sell, or intend to sell your products?\",\"question_no\":\"6\",\"answer_order\":\"2\"},{\"answer\":\"Quite confident\",\"answer_type\":\"redio\",\"snippets_text\":\"Congratulations you have the basic building block for traceability in place.  The product identifier system you use will be important information to discuss with any technology supplier.\",\"category\":\"Digital Capabilities\",\"question\":\"How confident are you that you have the skills and knowledge to implement and manageda digital technology based traceability system in your business\",\"question_no\":\"7\",\"answer_order\":\"2\"},{\"answer\":\"Slow\\/poor\",\"answer_type\":\"redio\",\"snippets_text\":\"The basic building block for a traceability system is to have a unique product identification system.  The good news is that how you do this is completely your choice.  We suggest that you go to our resources page [insert link] and have a look at how to set up a product identifier system that suits your needs.\",\"category\":\"Digital Capabilities\",\"question\":\"How would you rate the level of internet connectivity in your business\",\"question_no\":\"8\",\"answer_order\":\"3\"},{\"answer\":\"We can devote 5 to 10 hours per week\",\"answer_type\":\"redio\",\"snippets_text\":\"You have inidcated that your business is best described as [answer]. You may have had a little dificulty deciding which statement suits and may have thought that you fit across two or more categories.  Don\\u2019t be too concerned because we use your answer to this question to help us determine where you should probably start in asessing your own readiness and need for different kinds of traceability systems and technologies.  You will be able to access all the information and advice available in our resources library so you can add to the list yourself..\",\"category\":\"Time & resources\",\"question\":\"How much time do you and\\/or other people who work in your business have available toImplement and manage a traceability system? You can add the time from different people inyour business together for this question.\",\"question_no\":\"9\",\"answer_order\":\"2\"},{\"answer\":\"We can devote up to $15,000 per year\",\"answer_type\":\"redio\",\"snippets_text\":\"Congratulations you have the basic building block for traceability in place.  The product identifier system you use will be important information to discuss with any technology supplier.\",\"category\":\"Time & resources\",\"question\":\"What is your budget for implementing and managing a traceability system within your business? TheBudget is for costs other than salaries for you or your employees?\",\"question_no\":\"10\",\"answer_order\":\"2\"}]', '2021-11-19', '2021-11-19 06:55:26', '2021-11-19 06:55:26');

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
(1, 1, 'You have inidcated that your business is best described as [answer]. You may have had a little dificulty deciding which statement suits and may have thought that you fit across two or more categories.  Don’t be too concerned because we use your answer to this question to help us determine where you should probably start in asessing your own readiness and need for different kinds of traceability systems and technologies.  You will be able to access all the information and advice available in our resources library so you can add to the list yourself..', '2021-10-13 06:03:31', '2021-10-24 22:44:35'),
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Admin', 'admin123@gmail.com', NULL, '$2y$10$tCJZgCZActs3VWDP/VSkLOeGdaZ65MZbpkfosItmClJ2bSTBdAvse', NULL, '2021-10-21 22:31:16', '2021-10-21 22:31:16');

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
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `snippets`
--
ALTER TABLE `snippets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
