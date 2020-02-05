-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 04, 2020 at 08:33 PM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `braddy`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `created_at`, `updated_at`) VALUES
(1, 'Food', '2020-01-31 22:46:45', '2020-01-31 22:46:45'),
(2, 'Fashion', '2020-01-31 22:46:49', '2020-01-31 22:46:49'),
(3, 'Electronics', '2020-01-31 22:46:52', '2020-01-31 22:46:52'),
(4, 'Home And Other', '2020-01-31 22:49:59', '2020-01-31 22:49:59');

-- --------------------------------------------------------

--
-- Table structure for table `form_autopopulates`
--

CREATE TABLE `form_autopopulates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ifsc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `form_populates`
--

CREATE TABLE `form_populates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `header` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `form_populates`
--

INSERT INTO `form_populates` (`id`, `header`, `table_name`, `model`, `route`, `created_at`, `updated_at`) VALUES
(1, 'Category', 'categories', 'Category', 'formbuilder', '2020-01-31 22:44:08', '2020-01-31 22:44:08'),
(2, 'Unit', 'units', 'Unit', 'formbuilder', '2020-01-31 22:44:36', '2020-01-31 22:44:36'),
(3, 'Products', 'products', 'Product', 'formbuilder', '2020-01-31 22:45:40', '2020-01-31 22:45:40');

-- --------------------------------------------------------

--
-- Table structure for table `form_populate_indices`
--

CREATE TABLE `form_populate_indices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `form_populate_id` bigint(20) UNSIGNED NOT NULL,
  `exclude` json DEFAULT NULL,
  `notes` json DEFAULT NULL,
  `script` json DEFAULT NULL,
  `master_keys` json DEFAULT NULL,
  `foreign_keys` json DEFAULT NULL,
  `class` json DEFAULT NULL,
  `attribute` json DEFAULT NULL,
  `cnotes` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `form_populate_indices`
--

INSERT INTO `form_populate_indices` (`id`, `form_populate_id`, `exclude`, `notes`, `script`, `master_keys`, `foreign_keys`, `class`, `attribute`, `cnotes`, `created_at`, `updated_at`) VALUES
(1, 1, '[\"id\", \"updated_at\", \"created_at\"]', '[\"\"]', NULL, NULL, NULL, NULL, '{\"category\": \"Required\"}', '[\"\"]', '2020-01-31 22:44:19', '2020-01-31 22:44:19'),
(2, 2, '[\"id\", \"updated_at\", \"created_at\"]', '[\"\"]', NULL, NULL, NULL, NULL, '{\"unit\": \"Required\"}', '[\"\"]', '2020-01-31 22:45:18', '2020-01-31 22:45:18'),
(3, 3, '[\"id\", \"updated_at\", \"created_at\"]', '[\"\"]', NULL, NULL, '{\"Unit\": [\"unit_id\", \"id\", \"unit\"], \"Category\": [\"category_id\", \"id\", \"category\"]}', NULL, '{\"name\": \"Required\", \"rate\": \"Required\", \"unit_id\": \"Required\"}', '[\"\"]', '2020-01-31 22:46:20', '2020-01-31 22:46:20');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `customer`, `created_at`, `updated_at`) VALUES
(1, 'customer', '2020-02-02 16:50:23', '2020-02-02 16:50:23'),
(2, 'customer', '2020-02-02 16:53:00', '2020-02-02 16:53:00'),
(3, 'customer', '2020-02-02 16:56:07', '2020-02-02 16:56:07'),
(4, 'customer', '2020-02-02 17:00:25', '2020-02-02 17:00:25'),
(5, 'customer', '2020-02-02 17:00:58', '2020-02-02 17:00:58'),
(6, 'customer', '2020-02-02 17:01:48', '2020-02-02 17:01:48'),
(7, 'customer', '2020-02-02 17:06:53', '2020-02-02 17:06:53'),
(8, 'customer', '2020-02-02 17:07:16', '2020-02-02 17:07:16'),
(9, 'customer', '2020-02-02 17:07:46', '2020-02-02 17:07:46'),
(10, 'customer', '2020-02-02 17:08:24', '2020-02-02 17:08:24');

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
(93, '2014_10_12_000000_create_users_table', 1),
(94, '2014_10_12_100000_create_password_resets_table', 1),
(95, '2019_11_30_064845_create_form_autopopulates_table', 1),
(96, '2019_12_03_095151_create_form_populates_table', 1),
(97, '2019_12_04_110021_create_form_populate_indices_table', 1),
(98, '2020_01_27_170343_create_categories_table', 1),
(99, '2020_01_27_170535_create_units_table', 1),
(104, '2020_01_27_183942_create_products_table', 2),
(105, '2020_01_28_032405_create_sales_table', 2),
(106, '2020_01_30_012834_create_product_details_table', 2),
(107, '2020_01_31_013842_create_invoices_table', 2);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `barcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_id` bigint(20) UNSIGNED NOT NULL,
  `m_r_p` decimal(8,2) NOT NULL,
  `rate` decimal(8,2) NOT NULL,
  `gst` decimal(8,2) NOT NULL,
  `hsn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `barcode`, `category_id`, `name`, `unit_id`, `m_r_p`, `rate`, `gst`, `hsn`, `created_at`, `updated_at`) VALUES
(1, '8901088026864', 1, 'Parachute After Shower - Anti Drandruff Cream, 100gm', 5, '90.00', '85.00', '18.00', '1233', '2020-02-02 16:49:52', '2020-02-02 16:49:52');

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` bigint(20) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`id`, `product_id`, `quantity`, `type`, `created_at`, `updated_at`) VALUES
(1, 1, 20, 'CREDIT', '2020-02-02 16:50:13', '2020-02-02 16:50:13'),
(2, 1, 2, 'DEBIT', '2020-02-02 16:50:23', '2020-02-02 16:50:23'),
(3, 1, 2, 'DEBIT', '2020-02-02 16:53:00', '2020-02-02 16:53:00'),
(4, 1, 2, 'DEBIT', '2020-02-02 16:56:07', '2020-02-02 16:56:07'),
(5, 1, 2, 'DEBIT', '2020-02-02 17:00:25', '2020-02-02 17:00:25'),
(6, 1, 2, 'DEBIT', '2020-02-02 17:00:58', '2020-02-02 17:00:58'),
(7, 1, 2, 'DEBIT', '2020-02-02 17:01:48', '2020-02-02 17:01:48'),
(8, 1, 2, 'DEBIT', '2020-02-02 17:06:53', '2020-02-02 17:06:53'),
(9, 1, 2, 'DEBIT', '2020-02-02 17:07:16', '2020-02-02 17:07:16'),
(10, 1, 2, 'DEBIT', '2020-02-02 17:07:46', '2020-02-02 17:07:46'),
(11, 1, 3, 'DEBIT', '2020-02-02 17:08:24', '2020-02-02 17:08:24');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invoice_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` bigint(20) NOT NULL,
  `rate` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `invoice_id`, `product_id`, `quantity`, `rate`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, '85.00', '2020-02-02 16:50:23', '2020-02-02 16:50:23'),
(2, 2, 1, 2, '85.00', '2020-02-02 16:53:00', '2020-02-02 16:53:00'),
(3, 3, 1, 2, '85.00', '2020-02-02 16:56:07', '2020-02-02 16:56:07'),
(4, 4, 1, 2, '85.00', '2020-02-02 17:00:25', '2020-02-02 17:00:25'),
(5, 5, 1, 2, '85.00', '2020-02-02 17:00:58', '2020-02-02 17:00:58'),
(6, 6, 1, 2, '85.00', '2020-02-02 17:01:48', '2020-02-02 17:01:48'),
(7, 7, 1, 2, '85.00', '2020-02-02 17:06:53', '2020-02-02 17:06:53'),
(8, 8, 1, 2, '85.00', '2020-02-02 17:07:16', '2020-02-02 17:07:16'),
(9, 9, 1, 2, '85.00', '2020-02-02 17:07:46', '2020-02-02 17:07:46'),
(10, 10, 1, 3, '85.00', '2020-02-02 17:08:24', '2020-02-02 17:08:24');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `unit`, `created_at`, `updated_at`) VALUES
(1, 'Pkt', '2020-01-31 22:47:00', '2020-01-31 22:47:00'),
(2, 'KG', '2020-01-31 22:47:03', '2020-01-31 22:47:03'),
(3, 'Ltr', '2020-01-31 22:47:06', '2020-01-31 22:47:06'),
(4, 'Gr', '2020-01-31 22:47:09', '2020-01-31 22:47:09'),
(5, 'Pcs', '2020-01-31 22:47:12', '2020-01-31 22:47:12');

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
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_category_unique` (`category`);

--
-- Indexes for table `form_autopopulates`
--
ALTER TABLE `form_autopopulates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_populates`
--
ALTER TABLE `form_populates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_populate_indices`
--
ALTER TABLE `form_populate_indices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `form_populate_indices_form_populate_id_foreign` (`form_populate_id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_name_unique` (`name`),
  ADD UNIQUE KEY `products_barcode_unique` (`barcode`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `units_unit_unique` (`unit`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `form_autopopulates`
--
ALTER TABLE `form_autopopulates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form_populates`
--
ALTER TABLE `form_populates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `form_populate_indices`
--
ALTER TABLE `form_populate_indices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `form_populate_indices`
--
ALTER TABLE `form_populate_indices`
  ADD CONSTRAINT `form_populate_indices_form_populate_id_foreign` FOREIGN KEY (`form_populate_id`) REFERENCES `form_populates` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
