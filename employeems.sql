-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2024 at 05:47 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employeems`
--

-- --------------------------------------------------------

--
-- Table structure for table `ajaxes`
--

CREATE TABLE `ajaxes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `joining_date` date DEFAULT NULL,
  `joining_salary` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ajaxes`
--

INSERT INTO `ajaxes` (`id`, `name`, `joining_date`, `joining_salary`, `created_at`, `updated_at`) VALUES
(1, 'Kelsie Olsen', '1994-03-28', 86, '2024-01-26 23:03:36', '2024-01-26 23:03:36'),
(2, 'Miriam Camacho', '2009-05-16', 4, '2024-01-26 23:04:33', '2024-01-26 23:04:33'),
(3, 'Miriam Camacho', '2009-05-16', 4, '2024-01-26 23:04:58', '2024-01-26 23:04:58'),
(4, 'Evangeline Houston', '1972-04-28', 31, '2024-01-26 23:05:04', '2024-01-26 23:05:04'),
(5, 'Kirby Henson', '2010-12-26', 11, '2024-01-26 23:10:07', '2024-01-26 23:10:07'),
(6, 'Troy Wells', '1973-08-27', 86, '2024-01-26 23:10:15', '2024-01-26 23:10:15'),
(7, 'Samantha Barton', '1999-03-27', 58, '2024-01-26 23:20:48', '2024-01-26 23:20:48'),
(8, 'Jasper Herrera', '2001-01-06', 30, '2024-01-26 23:27:37', '2024-01-26 23:27:37'),
(9, 'Aphrodite Ochoa', '2003-01-05', 88, '2024-01-26 23:27:48', '2024-01-26 23:27:48'),
(10, 'Hilda Obrien', '2013-03-10', 23, '2024-01-26 23:27:53', '2024-01-26 23:27:53'),
(11, 'Rosalyn Rasmussen', '2008-12-16', 14, '2024-01-26 23:28:00', '2024-01-26 23:28:00'),
(12, 'Sopoline Gordon', '2016-07-04', 6, '2024-01-29 04:08:02', '2024-01-29 04:08:02'),
(13, 'Kalia Sears', '2001-01-23', 98, '2024-01-29 04:08:14', '2024-01-29 04:08:14'),
(14, 'Kawser', '2024-01-16', 23456, '2024-01-30 00:03:55', '2024-01-30 00:03:55'),
(15, 'Kawser', '2024-01-01', 56789, '2024-01-30 00:04:14', '2024-01-30 00:04:14');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `phone`, `address`, `image`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Brittany Hogan', 'botogapu@mailinator.com', '+1 (286) 415-3812', 'Necessitatibus moles', NULL, '$2y$12$tFfRVXLP7HVfvJiDwjN1G.W0ibh8PZR6DMVb9wXHZpRUXrMR8m3Z6', '2024-02-13 02:54:52', '2024-02-13 02:54:52'),
(2, 'Minerva Barlow', 'nununupa@mailinator.com', '+1 (933) 139-5939', 'Sint in ea corrupti', NULL, '$2y$12$LQF8IkS8O5ltdlsPR0I5t.QvwluF7iPsTl/IhoMfF6xgR4B7LthGC', '2024-02-13 02:56:26', '2024-02-13 02:56:26'),
(3, 'Solomon Russo', 'wusemiryx@mailinator.com', '+1 (529) 386-2802', 'Non et distinctio O', NULL, '$2y$12$0s7y5SYyQvGv7eCNO7q81uH5.3TD/eEHAPmmNfXPW9lpdUNtEK.0i', '2024-02-13 02:58:28', '2024-02-13 02:58:28'),
(4, 'kawser', 'kawser@gmail.com', '01608406596', 'Gulshan-2', NULL, '$2y$12$Y7EqvhSQlSLw.aS2YQP90O66XmJz3IzTgQsWd0Yo3djEctUNq3a5W', '2024-02-13 03:33:50', '2024-02-14 01:25:39'),
(5, 'Leilani Dudley', 'xaputuqiz@mailinator.com', '+1 (263) 292-5211', 'Dolore doloremque el', NULL, '$2y$12$XULiCwq/moOMaFLL8aF2OuvPw28t82q9ESL4PP5qWJBhsjITfbZFK', '2024-02-13 04:42:22', '2024-02-13 04:42:22'),
(6, 'tushar', 'tushar@gmail.com', '01845627587', 'uttara', NULL, '$2y$12$mg6w1oOjUgYndgcRdjm8ZewY5oj97Oun3scqVXWUcxlNYh4d8jnKa', '2024-02-13 04:44:21', '2024-02-13 04:44:21'),
(7, 'Chancellor Tyler', 'zaxosykute@mailinator.com', '+1 (668) 773-7071', 'A voluptatum impedit', NULL, '$2y$12$jKtljUdNXMVNq5l5Bc3rieYh1kh6aTBMA2MHFt3dDW.Zb.JflNqT2', '2024-02-13 04:45:09', '2024-02-13 04:45:09'),
(8, 'Bruno Serrano', 'xikyruqaly@mailinator.com', '+1 (567) 555-4929', 'Aliquam nostrum vita', NULL, '$2y$12$WOQvY9gmBM/a2SaazE9LteEftV4FpRJuS0bmVGvR6PtketBPkGLQ6', '2024-02-13 23:18:13', '2024-02-13 23:18:13'),
(9, 'Reece Rosa', 'gogih@mailinator.com', '+1 (393) 855-2962', 'Similique consequatu', NULL, '$2y$12$wCRAuSYFYdKpowH8BLdIBO8bJR9O9T4dl4niXubiueE0qfT6Futvu', '2024-02-13 23:18:37', '2024-02-13 23:18:37'),
(10, 'Jared Malone', 'parywivile@mailinator.com', '+1 (196) 698-4654', 'Omnis cumque qui nes', NULL, '$2y$12$u9XvZMGxnlYKzCSvBAIj6Od6.PnfR4Q1UxmxfYHoUnjZN/79n3FI.', '2024-02-13 23:39:44', '2024-02-13 23:39:44'),
(11, 'Darius Valdez', 'kytidaqe@mailinator.com', '+1 (361) 726-3015', 'Dolor non ab et reic', NULL, '$2y$12$yOlfdpceKyvaRZMkOW5N4e9.G8HpPB4ThsZLx1ZbBVmatMzvM1Nim', '2024-02-13 23:45:36', '2024-02-13 23:45:36'),
(12, 'Winter Porter', 'pywuqoh@mailinator.com', '+1 (493) 975-7385', 'Ut minus suscipit de', NULL, '$2y$12$St7aP/2dIybbU6iKOGdP3OU167.7hHXeuktcuDIQW1FBQxZGJIVFa', '2024-02-13 23:45:50', '2024-02-13 23:45:50');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `departmentId` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `departmentId`, `name`, `created_at`, `updated_at`) VALUES
(19, 10013, 'WEB', '2024-01-17 00:14:59', '2024-01-17 00:14:59'),
(20, 10014, 'Software', '2024-01-17 00:15:19', '2024-01-17 00:15:19'),
(21, 10015, 'HR', '2024-01-17 00:15:24', '2024-01-17 00:15:24'),
(22, 10016, 'Account', '2024-01-17 00:15:36', '2024-01-17 00:15:36');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `employee_id` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `zip_code` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `salary` double DEFAULT NULL,
  `hire_date` date DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `department_id`, `first_name`, `last_name`, `employee_id`, `email`, `phone_number`, `birth_date`, `address`, `city`, `state`, `zip_code`, `country`, `gender`, `position`, `salary`, `hire_date`, `notes`, `status`, `created_at`, `updated_at`) VALUES
(1, 21, 'kawser', 'Hossain', '22001', 'kawser@gmail.com', '+1 (184) 703-3199', '2024-01-01', 'Illo voluptates qui', 'Fuga Mollit blandit', 'Sylhet', '68713', 'Ut velit ipsum exce', 'Male', 'Magna inventore qui', 25000, '2024-01-16', 'Unde dolorum eveniet', 'deactive', '2024-01-15 12:24:33', '2024-02-03 04:55:48'),
(2, 22, 'Germaine', 'Hinton', '22002', 'wufygy@mailinator.com', '+1 (382) 562-9282', '1973-07-16', 'Atque veniam offici', 'Omnis eos rem veniam', 'Chittagong', '60417', 'Eligendi reiciendis', 'Others', 'Tempor vero beatae b', 83, '2008-02-09', 'Dolore harum do reru', 'deactive', '2024-01-15 12:28:06', '2024-01-17 00:17:04'),
(3, 20, 'Ulla', 'Rocha', '22003', 'lelalibux@mailinator.com', '+1 (705) 191-3394', '2013-02-14', 'Ipsam nesciunt eos', 'Culpa rerum suscipit', 'Mymensingh', '83713', 'Est sint a adipisici', 'Male', 'Ad asperiores amet', 120000, '1987-11-24', 'Laborum Non eveniet', 'deactive', '2024-01-15 12:35:17', '2024-02-03 04:59:00'),
(4, 19, 'kawser', 'hossain', '22004', '18103210kawser@gmail.com', '+1 (281) 254-1182', '2000-06-12', 'Qui vero non autem s', 'Delectus dolores re', 'Sylhet', '35415', 'Voluptatum commodi q', 'Male', 'Aliquam', 60644, '2021-01-16', 'Nostrum et ut corpor', 'active', '2024-01-16 08:32:41', '2024-01-17 00:38:15'),
(6, 19, 'Tushar', 'mia', '22005', 'kawserhossain1811@gmail.com', '01780589932', '1999-01-01', 'uttara dhaka', 'uttara', 'Dhaka', '1232', 'Bangladesh', 'Male', 'Fresher', 20000, '2024-01-17', 'new joining', 'active', '2024-01-17 00:30:32', '2024-01-17 00:30:32'),
(7, 22, 'Aman', 'ullah', '22006', 'aman@gmail.com', '017382747823', '1996-02-16', 'uttara dhaka', 'Uttara', 'Dhaka', '1232', 'Bangladesh', 'Female', 'Mid lavel', 40000, '2024-01-17', 'New joining', 'active', '2024-01-17 00:33:09', '2024-02-04 03:07:29'),
(8, 22, 'Mim', 'Akhter', '22007', 'mim@gmail.com', '01827328882', '1996-06-17', 'Unknown', 'Cumilla', 'Dhaka', '1232', 'Bangladesh', 'Female', 'Leader', 60000, '2024-01-01', 'New', 'active', '2024-01-17 00:37:14', '2024-02-09 22:48:09'),
(9, 22, 'Patricia', 'Fisher', '22008', 'kawserhossain1830@gmail.com', '+1 (529) 494-9903', '1986-03-18', 'Voluptatem illum au', 'Omnis quia aut modi', 'Mymensingh', '39882', 'Est est neque dolor', 'Male', 'Reprehenderit vitae', 840000, '2017-10-16', 'Aut et consequuntur', 'active', '2024-02-03 04:38:25', '2024-02-03 04:54:35');

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
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(11, '2024_01_14_063956_create_departments_table', 2),
(13, '2024_01_14_063996_create_employees_table', 3),
(17, '2024_01_25_042155_create_ajaxes_table', 5),
(18, '2024_01_24_070724_create_products_table', 6),
(19, '2024_02_13_061609_create_orders_table', 7),
(20, '2024_02_13_084336_create_customers_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `productCode` double NOT NULL,
  `productName` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `description` text NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'active',
  `discount` int(11) DEFAULT NULL,
  `discount-type` varchar(255) DEFAULT NULL,
  `productPrice` varchar(255) NOT NULL,
  `productImage` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productCode`, `productName`, `quantity`, `description`, `status`, `discount`, `discount-type`, `productPrice`, `productImage`, `created_at`, `updated_at`) VALUES
(1, 50001, 'Jaden Mccarty', 20, 'New', 'active', NULL, NULL, '963', '265c9ae9b7af5b.jpg', '2024-02-11 23:37:31', '2024-02-11 23:37:31'),
(2, 50002, 'Jillian Valentine', 20, 'New', 'active', NULL, NULL, '696', '265c9b2a9e04f1.png', '2024-02-11 23:54:49', '2024-02-11 23:54:49'),
(3, 50003, 'India Kerr', 20, 'New', 'active', NULL, NULL, '168', '265c9b2aed81fd.png', '2024-02-11 23:54:54', '2024-02-11 23:54:54'),
(4, 50004, 'Clayton Slater', 20, 'New', 'active', NULL, NULL, '558', '265c9b2b38663e.png', '2024-02-11 23:54:59', '2024-02-11 23:54:59'),
(5, 50005, 'Lester Curry', 20, 'New', 'active', NULL, NULL, '16', '265c9b2b8e41ce.png', '2024-02-11 23:55:04', '2024-02-11 23:55:04'),
(6, 50006, 'Kane Noel', 20, 'New', 'active', NULL, NULL, '447', '265c9b2bf50299.png', '2024-02-11 23:55:11', '2024-02-11 23:55:11'),
(7, 50007, 'Kevin Merritt', 20, 'New', 'active', NULL, NULL, '111', '265c9b2c5b182c.png', '2024-02-11 23:55:17', '2024-02-11 23:55:17'),
(8, 50008, 'Arden Schmidt', 20, 'New', 'active', NULL, NULL, '136', '265c9b2cbc3a6d.png', '2024-02-11 23:55:23', '2024-02-11 23:55:23'),
(9, 50009, 'Xander Taylor', 20, 'New', 'active', NULL, NULL, '331', '265c9b2d0f2887.png', '2024-02-11 23:55:28', '2024-02-11 23:55:28'),
(10, 50010, 'Debra Russell', 20, 'New', 'active', NULL, NULL, '846', '265c9b2d56f4fd.png', '2024-02-11 23:55:33', '2024-02-11 23:55:33'),
(11, 50011, 'Grant Henson', 20, 'New', 'active', NULL, NULL, '170', '265c9b2d98d212.png', '2024-02-11 23:55:37', '2024-02-11 23:55:37'),
(12, 50012, 'Lamar Harding', 20, 'New', 'active', NULL, NULL, '208', '265c9b2de126b9.png', '2024-02-11 23:55:42', '2024-02-11 23:55:42'),
(14, 50014, 'Gloria Talley', 20, 'New', 'active', NULL, NULL, '625', '265c9b2e86593b.png', '2024-02-11 23:55:52', '2024-02-11 23:55:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$12$lZrIRyfy.9Pf8aN6jaxVEOZJsKqYDGf7iNIZj6.jl4T75au32ACdq', NULL, '2024-01-13 23:34:14', '2024-01-13 23:34:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ajaxes`
--
ALTER TABLE `ajaxes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `departments_departmentid_unique` (`departmentId`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employees_email_unique` (`email`),
  ADD UNIQUE KEY `employees_phone_number_unique` (`phone_number`),
  ADD KEY `employees_department_id_foreign` (`department_id`);

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `ajaxes`
--
ALTER TABLE `ajaxes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
