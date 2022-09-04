-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 04, 2022 at 02:49 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartverse`
--

-- --------------------------------------------------------

--
-- Table structure for table `highlightsids`
--

DROP TABLE IF EXISTS `highlightsids`;
CREATE TABLE IF NOT EXISTS `highlightsids` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `mainHighlightRight` int(11) NOT NULL,
  `mainHighlightLeft` int(11) NOT NULL,
  `MostRead1` int(11) NOT NULL,
  `MostRead2` int(11) NOT NULL,
  `MostRead3` int(11) NOT NULL,
  `MostRead4` int(11) NOT NULL,
  `MostRead5` int(11) NOT NULL,
  `Recommended1` int(11) NOT NULL,
  `Recommended2` int(11) NOT NULL,
  `Recommended3` int(11) NOT NULL,
  `Recommended4` int(11) NOT NULL,
  `Recommended5` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `highlightsids`
--

INSERT INTO `highlightsids` (`id`, `mainHighlightRight`, `mainHighlightLeft`, `MostRead1`, `MostRead2`, `MostRead3`, `MostRead4`, `MostRead5`, `Recommended1`, `Recommended2`, `Recommended3`, `Recommended4`, `Recommended5`, `created_at`, `updated_at`) VALUES
(1, 13, 13, 13, 12, 13, 1, 12, 1, 1, 13, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2022_08_01_112826_create_posts_table', 1),
(4, '2022_08_01_123840_create_highlightsids_table', 1),
(5, '2022_08_13_231850_create_sessions_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `thumb_image` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `metadescription` varchar(168) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_id` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `thumb_image`, `title`, `slug`, `metadescription`, `author`, `author_id`, `category`, `text`, `created_at`, `updated_at`) VALUES
(1, 'c10481d99d9c7116133f48333efeb7d2_1660447321.png', 'Final da 4ª temporada de \'Stranger Things\' terá quase 2h30min... - Veja mais em https://www.uol.com.', 'final-da-4a-temporada-de-stranger-things-tera-quase-2h30min-veja-mais-em-httpswwwuolcom', 'dsadas', 'Leonardo Oliveira', '2', 'cinema', '<p>Digite o conte&uacute;do da p&aacute;gina aqui :)</p>', NULL, NULL),
(2, '92da0febcd425784881588d78fb6f761_1660447480.png', '17', 'fewkfiewkvpof3qkovkwqosla', 'dwkqovdw', 'Leonardo Oliveira', '2', 'livros', '<p>Digite o conte&uacute;do da p&aacute;gina aqui :)</p>', '2022-08-14 03:24:40', '2022-08-14 03:24:40'),
(12, '9b686033d56643d0c94e61d3eac4f4cd_1660448037.png', '16', 'ffdsfdfad', 'dsadas', 'Geovanna Sthefany', '3', 'cinema', '<p>Digite o conte&uacute;do da p&aacute;gina aqui :)</p>', '2022-08-14 03:33:57', '2022-08-14 03:33:57'),
(13, '032b2cc936860b03048302d991c3498f_1660923594.jpg', '15', 'testeoficialrealrefwpokvdopwqkvdwqo', 'kdoqakdopvw', 'Leonardo Oliveira', '2', 'livros', '<p>Digite o conte&uacute;do da p&aacute;gina aqui :)</p>', '2022-08-19 15:39:54', '2022-08-19 15:39:54'),
(14, 'c10481d99d9c7116133f48333efeb7d2_1660447321.png', '14', 'dsa', 'dsadsa', 'Leonardo O.', '6', 'Livros', '32323243423', '2022-09-02 13:00:55', '2022-09-02 13:00:55'),
(15, 'c10481d99d9c7116133f48333efeb7d2_1660447321.png', '1', 'dsa', 'dsadsa', 'Leonardo O.', '6', 'Livros', '32323243423', '2022-09-02 13:01:09', '2022-09-02 13:01:09'),
(16, 'c10481d99d9c7116133f48333efeb7d2_1660447321.png', '2', 'dsa', 'dsadsa', 'Leonardo O.', '6', 'Livros', '32323243423', '2022-09-02 13:01:09', '2022-09-02 13:01:09'),
(17, 'c10481d99d9c7116133f48333efeb7d2_1660447321.png', '3', 'dsa', 'dsadsa', 'Leonardo O.', '6', 'Livros', '32323243423', '2022-09-02 13:01:09', '2022-09-02 13:01:09'),
(18, 'c10481d99d9c7116133f48333efeb7d2_1660447321.png', '4', 'dsa', 'dsadsa', 'Leonardo O.', '6', 'Livros', '32323243423', '2022-09-02 13:01:09', '2022-09-02 13:01:09'),
(19, 'c10481d99d9c7116133f48333efeb7d2_1660447321.png', '5', 'dsa', 'dsadsa', 'Leonardo O.', '6', 'Livros', '32323243423', '2022-09-02 13:01:09', '2022-09-02 13:01:09'),
(20, 'c10481d99d9c7116133f48333efeb7d2_1660447321.png', '6', 'dsa', 'dsadsa', 'Leonardo O.', '6', 'Livros', '32323243423', '2022-09-02 13:01:09', '2022-09-02 13:01:09'),
(21, 'c10481d99d9c7116133f48333efeb7d2_1660447321.png', '7', 'dsa', 'dsadsa', 'Leonardo O.', '6', 'Livros', '32323243423', '2022-09-02 13:01:09', '2022-09-02 13:01:09'),
(22, 'c10481d99d9c7116133f48333efeb7d2_1660447321.png', '8', 'dsa', 'dsadsa', 'Leonardo O.', '6', 'Livros', '32323243423', '2022-09-02 13:01:09', '2022-09-02 13:01:09'),
(23, 'c10481d99d9c7116133f48333efeb7d2_1660447321.png', '9', 'dsa', 'dsadsa', 'Leonardo O.', '6', 'Livros', '32323243423', '2022-09-02 13:01:09', '2022-09-02 13:01:09'),
(24, 'c10481d99d9c7116133f48333efeb7d2_1660447321.png', '10', 'dsa', 'dsadsa', 'Leonardo O.', '6', 'Livros', '32323243423', '2022-09-02 13:01:09', '2022-09-02 13:01:09'),
(25, 'c10481d99d9c7116133f48333efeb7d2_1660447321.png', '11', 'dsa', 'dsadsa', 'Leonardo O.', '6', 'Livros', '32323243423', '2022-09-02 13:01:09', '2022-09-02 13:01:09'),
(26, 'c10481d99d9c7116133f48333efeb7d2_1660447321.png', '12', 'dsa', 'dsadsa', 'Leonardo O.', '6', 'Livros', '32323243423', '2022-09-02 13:01:09', '2022-09-02 13:01:09'),
(27, 'c10481d99d9c7116133f48333efeb7d2_1660447321.png', '13', 'dsa', 'dsadsa', 'Leonardo O.', '6', 'Livros', '32323243423', '2022-09-02 13:01:09', '2022-09-02 13:01:09');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('uBymSGkbzG5XhIz7zn89kOLSLOJoFhxYJySDvwnE', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiek5xVVR3T1c0a2Q5N1NZZDBCSDA4RG5wcVlEVFpFTVZUeEx2ODY0aCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1662302947);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(2, 'Leonardo Oliveira', 'oleonardo78@gmail.com', '$2y$10$eJJX1dnuEZ2FWp/gWP6LD.Xk/HBinsbYZCm/pf7pNPlwmrWScbfNS', '1hwfpxCxqOVIX5qi7apIB104GNuFh3geTkustAUq5QHW84qO7gXULYt9SjF7', 'euuuu.webp', '2022-08-14 05:27:39', '2022-08-14 05:27:39'),
(3, 'Geovanna Sthefany', 'geovann.sthefany11@gmail.com', '$2y$10$WjyFEDimR5s8/OujBLBMiuJstXu/Pt6GkqUT0qfyq.8eoNW5nKPD.', NULL, 'geomo.png', '2022-08-14 05:55:53', '2022-08-14 05:55:53');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
