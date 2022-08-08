-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 08, 2022 at 02:58 PM
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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `highlightsids`
--

INSERT INTO `highlightsids` (`id`, `mainHighlightRight`, `mainHighlightLeft`, `MostRead1`, `MostRead2`, `MostRead3`, `MostRead4`, `MostRead5`, `Recommended1`, `Recommended2`, `Recommended3`, `Recommended4`, `Recommended5`, `created_at`, `updated_at`) VALUES
(1, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, NULL, NULL);

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
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_08_01_112826_create_posts_table', 2),
(3, '2022_08_01_123250_create_highlightids_table', 3),
(4, '2022_08_01_123840_create_highlightsids_table', 4),
(5, '2022_08_01_144155_create_users_table', 5);

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `thumb_image`, `title`, `slug`, `metadescription`, `author`, `author_id`, `category`, `text`, `created_at`, `updated_at`) VALUES
(17, 'b9d12860ebd46a0c72476f94060748ca_1659959633.jpg', 'dsadas', 'dsadas', 'dsadsa', 'Leonardo Oliveira', '1', 'Series', '<p>Digite o conte&uacute;do da p&aacute;gina aqui :)</p>', '2022-08-08 11:53:53', '2022-08-08 11:53:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `choosed_name` varchar(28) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_picture` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isAuthor` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `choosed_name`, `email`, `password`, `profile_picture`, `isAuthor`, `created_at`, `updated_at`) VALUES
(1, 'Leonardo Oliveira', 'Leonardo O.', 'oleonardo78@gmail.com', '123', 'eeuuu.jpg', 1, NULL, NULL),
(3, 'Geovanna Sthefany', 'Geovanna', 'geovann.sthefany11@gmail.com', '123456789', 'cb67037fedc21955889fc0cc63dac103.jpg', 1, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
