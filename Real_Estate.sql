-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 09, 2018 at 05:15 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Real_Estate`
--

-- --------------------------------------------------------

--
-- Table structure for table `listings`
--

CREATE TABLE `listings` (
  `listingId` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `city` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('sale','rent') COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `listings`
--

INSERT INTO `listings` (`listingId`, `name`, `description`, `photo`, `price`, `city`, `type`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Flat for sale at Central Londod', 'Flat for sale in excellent location located at Central London,near subway station,250 square meters. Price 500,000', '/img/property_1.jpg', 500, 'London', 'sale', 1, '2017-07-12 21:00:00', '2017-09-19 21:00:00'),
(2, 'Appartment for rent - Chalkidiki', 'Appartment available for rent located at Chalkidiki-Greece.Recently rennovated,suitable for families looking forward to enjoy their vacation in Greece\r\n600$/month ', '/img/property_2.jpg', 600, 'Chalkidiki', 'rent', 1, '2017-09-12 21:00:00', '2017-12-31 22:00:00'),
(3, 'Mansion for sale - Mikonos', 'Mansion for sale located at Mikonos Island - Greece\r\nAn excellent opportunity for this 1500 square meter mansion with pool,35 private rooms,13 WCs\r\n5,000,000 $ only', '/img/property_3.jpg', 5000000, 'Mikonos', 'sale', 1, '2018-01-02 22:00:00', '2017-10-31 22:00:00'),
(4, 'Apartment For Rent', 'Located at Serres (Central Macedonia Greece), \r\nIn excellent condition , recently renovated.\r\n(price /month)', '/img/rent_apart_1.jpg', 300, 'Serres', 'rent', 8, '2018-01-08 22:00:00', '2018-01-08 22:00:00'),
(5, 'My Condo is for Sale', 'I sell my condo,it is in excellent condition,with a great view.\r\n250 square meters', '/img/property_3.jpg', 300000, 'Thessaloniki', 'sale', 10, '2018-01-07 22:00:00', NULL);

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
(3, '2018_01_07_095649_create_listings_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('kostas@gmail.com', '$2y$10$sydh2KnAm96hiuqJnRXy1OJL2pO/KGvLppjkAKnd9vuDsvDQnQTdm', '2018-01-08 06:44:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `first_name`, `last_name`, `city`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'kostas', 'kostas@gmail.com', 'kostas123', 'Kostas', 'Mantz', 'Thessaloniki', NULL, NULL, NULL),
(6, 'aris', 'aris@gmail.com', '$2y$10$2kH6JBXnAvAFGU0DXgAD9.Kgsx9qhyqsV1qAm33q2j4iaPMJSsGwO', NULL, NULL, NULL, '55sWVuVSKzxk66TWXHt97JczOvZTfQnEXToMNeNyGZkLGhXHr69c1jDSn7Zy', '2018-01-07 17:25:54', '2018-01-07 17:25:54'),
(7, 'kostas', 'pozaris@gm.com', '$2y$10$Z15seXidxuRG1JRqK34PgOziTIo6GZpL8yVNRa2FUMZ9J6FcZtzKq', NULL, NULL, NULL, '5G0BgGNPYdZPv53Ecw1yOAWATkU0PLpoCPScO8FPMy0CGPDzNDiVvJnriOgF', '2018-01-07 18:07:58', '2018-01-07 18:07:58'),
(8, 'leonidas', 'leonidas@gmail.com', '$2y$10$eDzWP0KFf2YmTUARVS85BuhZUVt6whlY0xD8IS7mYlGpoSSOTNpz2', NULL, NULL, NULL, NULL, '2018-01-07 21:00:34', '2018-01-07 21:00:34'),
(9, 'aris', 'pav_mits@hotmail.com', '$2y$10$ULbneg1G.92MUOnbM4stv.gfgTaZ22WvvJ9liYG7Wk/b7Nl1DZjRu', NULL, NULL, NULL, NULL, '2018-01-07 23:57:18', '2018-01-07 23:57:18'),
(10, 'kostas', 'kostas.m@gmail.com', '$2y$10$ZDg0zphg9zJ1MjJNe.QSeOOKkwkHDhb6yO9q2w0ViNDZ9aorSj3Yy', NULL, NULL, NULL, 'QR8yTnHCvnhVzAYROsgD9j51ZQBwCwwn3T20KbjGErGoOq1Rs7VimEkanpPa', '2018-01-08 02:18:41', '2018-01-08 02:18:41'),
(11, 'Photios', 'photios@gmail.com', '$2y$10$TMbFH7ponu/t9udVz4Evt.eW.U.pnXXmYb8IV34QG5atTjLPAged2', NULL, NULL, NULL, NULL, '2018-01-08 04:00:15', '2018-01-08 04:00:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `listings`
--
ALTER TABLE `listings`
  ADD PRIMARY KEY (`listingId`),
  ADD KEY `listings_user_id_foreign` (`user_id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `listings`
--
ALTER TABLE `listings`
  MODIFY `listingId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `listings`
--
ALTER TABLE `listings`
  ADD CONSTRAINT `listings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
