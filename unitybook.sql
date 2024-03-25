-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 24, 2024 at 03:22 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unitybook`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `companyName` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `phoneNumber` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `isFavorite` tinyint(1) NOT NULL DEFAULT '0',
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `companyName`, `phoneNumber`, `email`, `isFavorite`, `user_id`, `created_at`, `updated_at`) VALUES
(4, 'Dimas Takeda', 'UMN', '103910293120', 'asokd@gmail.com', 1, 1, '2024-03-13 00:54:47', '2024-03-13 01:22:03'),
(5, 'Albert Jawa', 'CV. Kurnia Jaya Sukses', '013910930129', 'asodk@gmail.com', 1, 1, '2024-03-13 00:54:59', '2024-03-13 01:22:00'),
(7, 'Alpin LPG', 'ilham', '192381293819', 'asidj@iasjd.com', 0, 2, '2024-03-13 01:34:42', '2024-03-13 01:36:22'),
(8, 'Dimas Takeda', 'Kadwa', '08234782342', 'sdsa@gmail.com', 0, 2, '2024-03-13 01:36:14', '2024-03-13 01:38:31'),
(9, 'Dimas Takeda', 'The Company', '085871524116', 'dimas.jepang@gmail.com', 1, 3, '2024-03-21 03:21:31', '2024-03-21 03:24:33'),
(13, 'Ilham Kurniawan', 'CV. Sukses Makmur Sentosa', '081923912832', 'ilham@gmail.com', 1, 4, '2024-03-23 08:43:11', '2024-03-23 09:53:18');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'newuser1', '$2y$10$M3PBTltA2TdOZBMvBeTGo.YHnmsfGsPiHj.kp/n5Knidn/7DlQK6W', '51a7ad8e7ed9a931da5f1e9752bb05987afe7b46343fe3128e1cfab26403ef3d', '2024-03-12 06:53:38', '2024-03-12 22:21:23'),
(2, 'jnhengker', '$2y$10$mwQysQwzKlT/vnZj4jgbzO9N3A80OKG1lRgj3qw/HIs5CH9pJCnVu', 'aff303bdf69b90e3d2447dd8378b21950fcfa2c3728278f80be42cccd5969de1', '2024-03-13 01:29:54', '2024-03-13 01:30:16'),
(3, 'dylanheboth', '$2y$10$n0S602EVM.FlMVoMigtnn.pAlmfiOAap9.P679RAmekEzOCwFtjMy', 'be10c99ac8f7a29bf838abfb5342285d9bd63ec1c2ee7fdaa7eec00feb8e865a', '2024-03-21 03:21:00', '2024-03-21 03:21:05'),
(4, 'dimasjepang', '$2y$10$l9gPSwvuB8QzE222qL8Go.LDWgPcjmZ1q7wTNnWMKlai6XTSh1b.q', '55d91a87daa296db06fbaaf3ac0ad73228d33f236e46b723e8b812d8b94812dc', '2024-03-23 08:42:29', '2024-03-23 09:52:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customer_phonenumber_unique` (`phoneNumber`),
  ADD UNIQUE KEY `customer_email_unique` (`email`),
  ADD KEY `customer_user_id_foreign` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
