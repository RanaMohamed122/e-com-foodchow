-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2020 at 06:35 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-com`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `special_requirements` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double(8,2) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `user_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `session_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `name`, `description`, `remember_token`, `created_at`, `updated_at`, `image`) VALUES
(23, 0, 'Plates', 'main dishes', NULL, '2020-08-15 14:29:07', '2020-08-15 14:29:07', '95059.jpg'),
(24, 0, 'Half-Plated', 'Half-Plated', NULL, '2020-08-15 14:29:55', '2020-08-15 14:29:55', '59851.jpg'),
(25, 0, 'Fast Food', 'Fast Food', NULL, '2020-08-15 14:30:58', '2020-08-15 14:30:58', '22004.jpg'),
(26, 0, 'Italian food', 'Italian Food', NULL, '2020-08-15 14:31:44', '2020-08-15 14:31:44', '57226.jpg'),
(27, 0, 'Diet meals', 'Diet meals', NULL, '2020-08-15 14:32:19', '2020-08-15 14:32:19', '42627.jpg'),
(28, 0, 'Desserts', 'Desserts', NULL, '2020-08-15 14:32:46', '2020-08-15 14:32:46', '33921.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `chefs`
--

CREATE TABLE `chefs` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `project_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chef_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chef_number` int(11) NOT NULL,
  `chef_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chefs`
--

INSERT INTO `chefs` (`id`, `category_id`, `project_name`, `image`, `chef_name`, `chef_number`, `chef_email`, `created_at`, `updated_at`) VALUES
(16, 28, 'chef1', '54437.jpg', 'mariam', 10000000, 'mmm@mail.com', '2020-08-17 10:53:01', '2020-08-17 10:53:01'),
(17, 28, 'chef2', '87008.jpg', 'mariam', 10000000, 'mmm@mail.com', '2020-08-17 12:06:58', '2020-08-17 12:06:58');

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
(3, '2018_03_18_121109_create_category_table', 1),
(4, '2018_03_30_171722_create_products_table', 1),
(5, '2020_08_14_152008_create_chefs_table', 2),
(6, '2020_08_15_140346_add_image_to_category_table', 3),
(7, '2020_08_18_184151_create_cart_table', 4),
(8, '2020_08_19_133441_create_orders_table', 5),
(9, '2020_08_22_195131_create_order_items_table', 6),
(10, '2020_08_24_140739_create_review_table', 7),
(11, '2020_08_24_141524_create_reviews_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` float DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deliver_fees` float DEFAULT NULL,
  `payment_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_name`, `user_email`, `phone`, `address`, `total`, `description`, `created_at`, `updated_at`, `deliver_fees`, `payment_method`) VALUES
(107, 'mariam moustafa', 'mariam2@gmail.com', '01093890967', 'mokkatam street 9', 480, '', '2020-08-23 13:23:10', '2020-08-23 13:23:10', 50, 'cash'),
(108, 'mariam moustafa', 'mariam2@gmail.com', '01093890967', 'mokkatam street 9', 480, '', '2020-08-23 13:28:56', '2020-08-23 13:28:56', 50, 'cash'),
(109, 'rana mohame', 'rana@gmail', '01001352562', 'my address', NULL, NULL, '2020-08-23 13:55:48', '2020-08-23 13:55:48', NULL, NULL),
(110, 'rana mohame', 'rana@gmail', '01001352562', 'my address', 12, '', '2020-08-23 13:59:47', '2020-08-23 13:59:47', 50, 'cash');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `product_name`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(213, 107, 19, 'product1', 1, 12.00, '2020-08-23 13:23:10', '2020-08-23 13:23:10'),
(214, 107, 20, 'product4.1', 2, 234.00, '2020-08-23 13:23:10', '2020-08-23 13:23:10'),
(215, 108, 19, 'product1', 1, 12.00, '2020-08-23 13:28:56', '2020-08-23 13:28:56'),
(216, 108, 20, 'product4.1', 2, 234.00, '2020-08-23 13:28:56', '2020-08-23 13:28:56'),
(217, 110, 19, 'product1', 1, 12.00, '2020-08-23 13:59:47', '2020-08-23 13:59:47');

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
('mariam2@gmail.com', '$2y$10$7cl1kjMxoo5Atx6rQ7qGRuTIF8xB.uaavqkoPa.AhVBGFdJmvqyNa', '2020-08-23 23:03:35'),
('mariam.moustafa1997@gmail.com', '$2y$10$cocTKqOfNRhY7EUoHe4XHOXxygEZHuU2xhheL1LZxSa8UzbbyjV36', '2020-08-23 23:07:42');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `chef_id` int(11) NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_time` decimal(10,0) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `chef_id`, `product_name`, `description`, `project_name`, `price`, `image`, `rating`, `delivery_time`, `status`, `created_at`, `updated_at`) VALUES
(19, 23, 16, 'product1', 'first product', 'project1', 12.00, '7487.jpg', '4.6', '345', 1, '2020-08-17 16:07:15', '2020-08-17 16:07:15'),
(20, 23, 17, 'product4.1', 'sssss', 'project 2', 234.00, '60976.jpg', NULL, '44', 1, '2020-08-17 17:33:16', '2020-08-17 17:33:16');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chef_id` int(11) DEFAULT NULL,
  `project_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '223-2231186_profile-icon-png-image-free-download-searchpng-unknown.png',
  `review` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `user_name`, `chef_id`, `project_name`, `user_image`, `review`, `created_at`, `updated_at`) VALUES
(4, NULL, 'Unknown', 16, 'chef1', '223-2231186_profile-icon-png-image-free-download-searchpng-unknown.png', 'hi2', '2020-08-24 13:55:30', '2020-08-24 13:55:30'),
(5, 7, 'user', 16, 'chef1', '223-2231186_profile-icon-png-image-free-download-searchpng-unknown.png', 'hello', '2020-08-24 14:02:15', '2020-08-24 14:02:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '223-2231186_profile-icon-png-image-free-download-searchpng-unknown.png',
  `BuildingNumber` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `FloorNumber` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin` tinyint(1) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `address`, `image`, `BuildingNumber`, `FloorNumber`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'mariam', 'mariam@gmail.com', '123456', '0', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'rana', 'rana@gmail.com', '$2y$10$sjjdpSzIBy4LsUX94HbV5eOhc.5JOb.d.IOc9Tipnp6CKMvmzV95q', '456789', 'my address', '223-2231186_profile-icon-png-image-free-download-searchpng-unknown.png', 'dfghjk', 'ghjkl', 0, 'XdmZjgTUlR4NN4r9laPEl3GGFORFPcsT0SktmpDMo3eXPE4xergYecJu186o', '2020-08-13 14:58:47', '2020-08-22 14:13:15'),
(4, 'mariam moustafa', 'mariam2@gmail.com', '$2y$10$7ooF1SkWPa4rpk0071ODGuKUG/zqopmzL4KTCjkAvE1gC0TkoVgZu', '01093890967', 'mokkatam street 9', '223-2231186_profile-icon-png-image-free-download-searchpng-unknown.png', NULL, NULL, NULL, 'qsQG8jFfLelKAquB6OSaT1qlOKr3Is6tbUCp8vJqvm2VJImhGuHaFF8z6fGD', '2020-08-22 14:17:51', '2020-08-22 14:17:51'),
(5, 'user3', 'user3@mail.com', '$2y$10$b6/tYn3H5x/pvzIffqMEeOx0og5w0m3KSXk4bXFqXYN0uREuMoqCK', NULL, NULL, '223-2231186_profile-icon-png-image-free-download-searchpng-unknown.png', NULL, NULL, NULL, '0DMlY2JAPAL8IXCcp6DXn0d24lkem1ximfidk0PEVeM1Zj1PizFbVaOF3mAK', '2020-08-23 22:43:50', '2020-08-23 22:43:50'),
(6, 'user4', 'user4@mail.com', '$2y$10$iNotfIp42qRkldYqHDas/ekGH738D.2WEnspPNMRvW7m/3frPLLKW', NULL, NULL, '223-2231186_profile-icon-png-image-free-download-searchpng-unknown.png', NULL, NULL, NULL, 'lntSsw3UFVvC6eP8edsZXuuPtmqVCcsjog52MIkD1xj3wz0c4AJ5ax1QiMqV', '2020-08-23 22:47:13', '2020-08-23 22:47:13'),
(7, 'user', 'user@gmail.com', '$2y$10$aSbxGT0SkbKtTNVjEkgwv.wTu0dXjsjXjjRXPgewMsfXVAhTi4M0y', NULL, NULL, '223-2231186_profile-icon-png-image-free-download-searchpng-unknown.png', NULL, NULL, NULL, 'NNTJLUbaPwxuE9LOrn6VsCnhyL5RZ53HbwAwgWD4vRnzWZ955LjZ2hR20Fyk', '2020-08-23 22:55:29', '2020-08-23 22:55:29'),
(8, 'marioma', 'mariam.moustafa1997@gmail.com', '$2y$10$Q2H85GBJftZcYaQCufThJOx.MZS7fg/XS6oT5BryPwtmBSYZOfMxK', NULL, NULL, '223-2231186_profile-icon-png-image-free-download-searchpng-unknown.png', NULL, NULL, NULL, 'Ze8DeQMGx1TRqFQOIVnYEMKe4RTODsSV4GoHcuy5iuoJdumz0XfEPEO3Otut', '2020-08-23 23:07:04', '2020-08-23 23:07:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chefs`
--
ALTER TABLE `chefs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `chefs`
--
ALTER TABLE `chefs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=218;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
