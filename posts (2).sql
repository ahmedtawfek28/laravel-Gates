-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2018 at 08:53 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` double(8,2) NOT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '0',
  `is_published2` tinyint(1) NOT NULL DEFAULT '0',
  `is_published3` tinyint(1) NOT NULL DEFAULT '0',
  `is_published4` tinyint(1) NOT NULL DEFAULT '0',
  `is_published5` tinyint(1) NOT NULL DEFAULT '0',
  `is_published6` tinyint(1) NOT NULL DEFAULT '0',
  `is_published7` tinyint(1) NOT NULL DEFAULT '0',
  `is_published8` tinyint(1) NOT NULL DEFAULT '0',
  `is_published9` tinyint(1) NOT NULL DEFAULT '0',
  `is_published10` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `is_published`, `is_published2`, `is_published3`, `is_published4`, `is_published5`, `is_published6`, `is_published7`, `is_published8`, `is_published9`, `is_published10`, `created_at`, `updated_at`) VALUES
(1, 'ربع لانشون حلواني', 22.00, 1, 1, 1, 1, 1, 1, 0, 1, 0, 0, '2018-09-08 15:40:20', '2018-09-08 20:01:50'),
(2, 'ربع لانشون عادي', 12.00, 1, 1, 1, 1, 1, 1, 0, 1, 0, 0, '2018-09-08 15:44:44', '2018-09-08 20:00:16'),
(3, '2 لتر بيبسي', 13.00, 0, 1, 1, 1, 0, 1, 1, 1, 0, 0, '2018-09-08 15:59:00', '2018-09-08 16:30:03'),
(4, 'شيبسي كبير', 5.00, 1, 1, 1, 1, 1, 0, 1, 0, 0, 0, '2018-09-08 16:03:52', '2018-09-08 20:01:52'),
(7, 'اي حاجة', 13.00, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, '2018-09-08 16:31:00', '2018-09-08 20:06:40'),
(9, 'اي حاجة', 22.00, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2018-09-08 16:31:19', '2018-09-08 20:06:46'),
(10, 'اي حاجة', 123.00, 0, 0, 1, 0, 1, 1, 0, 0, 0, 0, '2018-09-08 16:31:28', '2018-09-09 06:26:48'),
(11, 'اي حاجة', 33.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2018-09-08 16:31:48', '2018-09-08 18:46:22'),
(12, 'ضضض', 13.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2018-09-08 16:46:33', '2018-09-08 18:46:22'),
(13, 'اي حاجه', 15.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2018-09-09 06:27:13', '2018-09-09 06:27:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
