-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2022 at 04:49 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fashion`
--

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE `cards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`id`, `name`, `email`, `phone`, `address`, `product_title`, `price`, `quantity`, `image`, `product_id`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 'usama', 'usama@gmail.com', '03176318129', 'rahim yar khan', 'women dress', '3000', '3', '1662579791.png', '9', '4', '2022-09-10 06:05:35', '2022-09-10 06:05:35'),
(54, 'Umair Naeem', 'umairnaeem148@gmail.com', '03082305619', 'Rahim Yar Khan', 'women black dress', '5000', '5', '1662579890.png', '10', '10', '2022-09-21 03:03:26', '2022-09-21 03:03:26'),
(55, 'Umair Naeem', 'umairnaeem148@gmail.com', '03082305619', 'Rahim Yar Khan', 'Blue shirt', '900', '6', '1662576585.png', '8', '10', '2022-09-21 03:03:33', '2022-09-21 03:03:33');

-- --------------------------------------------------------

--
-- Table structure for table `catagories`
--

CREATE TABLE `catagories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `catagory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catagories`
--

INSERT INTO `catagories` (`id`, `catagory`, `created_at`, `updated_at`) VALUES
(8, 'pent', '2022-09-05 01:44:33', '2022-09-05 01:44:33'),
(12, 'Black shirt', '2022-09-12 21:33:43', '2022-09-12 21:33:43'),
(13, 'women Black dress', '2022-09-12 21:33:59', '2022-09-12 21:33:59'),
(14, 'Formal shirt', '2022-09-12 21:34:20', '2022-09-12 21:34:20'),
(15, 'Black Frock', '2022-09-12 21:34:48', '2022-09-12 21:34:48'),
(16, 'Red Frock', '2022-09-12 21:35:00', '2022-09-12 21:35:00'),
(17, 'watch', '2022-09-26 01:21:05', '2022-09-26 01:21:05'),
(18, 'toy', '2022-09-26 01:21:18', '2022-09-26 01:21:18'),
(19, 'perfume', '2022-09-26 01:25:17', '2022-09-26 01:25:17');

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_08_31_223654_create_sessions_table', 1),
(7, '2022_09_04_180027_create_catagories_table', 2),
(8, '2022_09_05_193437_create_products_table', 3),
(9, '2022_09_08_220920_create_cards_table', 4),
(12, '2022_09_11_202517_create_orders_table', 5),
(13, '2022_09_15_222139_create_notifications_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `address`, `user_id`, `product_title`, `price`, `quantity`, `image`, `product_id`, `payment_status`, `delivery_status`, `created_at`, `updated_at`) VALUES
(1, 'usman', 'usmanaleem169@gmail.com', '0317631833', 'Rahim Yar Khan', '6', 'lady dress', '90', '3', '1662580050.png', '13', 'cash on delivery', 'Delivered', '2022-09-12 04:11:07', '2022-09-13 06:05:10'),
(2, 'usman', 'usmanaleem169@gmail.com', '0317631833', 'Rahim Yar Khan', '6', 'Blue shirt', '300', '2', '1662576585.png', '8', 'cash on delivery', 'Delivered', '2022-09-12 04:11:07', '2022-09-13 06:05:15'),
(3, 'usman', 'usmanaleem169@gmail.com', '0317631833', 'Rahim Yar Khan', '6', 'Blue shirt', '900', '6', '1662576585.png', '8', 'cash on delivery', 'procssing', '2022-09-12 04:11:07', '2022-09-12 04:11:07'),
(4, 'usman', 'usmanaleem169@gmail.com', '0317631833', 'Rahim Yar Khan', '6', 'lady dress', '90', '3', '1662580050.png', '13', 'cash on delivery', 'procssing', '2022-09-12 04:18:58', '2022-09-12 04:18:58'),
(5, 'usman', 'usmanaleem169@gmail.com', '0317631833', 'Rahim Yar Khan', '6', 'Blue shirt', '300', '2', '1662576585.png', '8', 'cash on delivery', 'procssing', '2022-09-12 04:18:58', '2022-09-12 04:18:58'),
(6, 'usman', 'usmanaleem169@gmail.com', '0317631833', 'Rahim Yar Khan', '6', 'Blue shirt', '900', '6', '1662576585.png', '8', 'cash on delivery', 'procssing', '2022-09-12 04:18:58', '2022-09-12 04:18:58'),
(7, 'usman', 'usmanaleem169@gmail.com', '0317631833', 'Rahim Yar Khan', '6', 'women dress', '3000', '1', '1662579791.png', '9', 'cash on delivery', 'procssing', '2022-09-12 04:29:35', '2022-09-12 04:29:35'),
(8, 'usman', 'usmanaleem169@gmail.com', '0317631833', 'Rahim Yar Khan', '6', 'pink shirt', '2000', '1', '1662579940.png', '11', 'cash on delivery', 'procssing', '2022-09-12 04:29:35', '2022-09-12 04:29:35'),
(10, 'usman', 'usmanaleem169@gmail.com', '0317631833', 'Rahim Yar Khan', '6', 'women black dress', '1000', '1', '1662579890.png', '10', 'cash on delivery', 'procssing', '2022-09-13 01:01:42', '2022-09-13 01:01:42'),
(11, 'usman', 'usmanaleem169@gmail.com', '0317631833', 'Rahim Yar Khan', '6', 'Blue shirt', '450', '3', '1662576585.png', '8', 'cash on delivery', 'procssing', '2022-09-13 01:34:45', '2022-09-13 01:34:45'),
(12, 'usman', 'usmanaleem169@gmail.com', '0317631833', 'Rahim Yar Khan', '6', 'lady dress', '150', '5', '1662580050.png', '13', 'cash on delivery', 'procssing', '2022-09-13 04:48:04', '2022-09-13 04:48:04'),
(13, 'usman', 'usmanaleem169@gmail.com', '0317631833', 'Rahim Yar Khan', '6', 'womens Blue frock', '40000', '4', '1662994025.png', '12', 'cash on delivery', 'procssing', '2022-09-13 04:48:04', '2022-09-13 04:48:04'),
(14, 'usman', 'usmanaleem169@gmail.com', '0317631833', 'Rahim Yar Khan', '6', 'LOgo shirts', '4200', '3', '1662993941.jpg', '20', 'cash on delivery', 'procssing', '2022-09-13 04:48:04', '2022-09-13 04:48:04'),
(15, 'usman', 'usmanaleem169@gmail.com', '0317631833', 'Rahim Yar Khan', '6', 'Blue shirt', '300', '2', '1662576585.png', '8', 'cash on delivery', 'procssing', '2022-09-13 04:48:04', '2022-09-13 04:48:04'),
(16, 'usman', 'usmanaleem169@gmail.com', '0317631833', 'Rahim Yar Khan', '6', 'pink shirt', '2000', '1', '1662579940.png', '11', 'paid', 'procssing', '2022-09-13 04:58:20', '2022-09-13 04:58:20'),
(17, 'usman', 'usmanaleem169@gmail.com', '0317631833', 'Rahim Yar Khan', '6', 'white shirt', '3000', '3', '1662993892.jpg', '19', 'paid', 'procssing', '2022-09-13 04:58:20', '2022-09-13 04:58:20'),
(18, 'usman', 'usmanaleem169@gmail.com', '0317631833', 'Rahim Yar Khan', '6', 'LOgo shirts', '4200', '3', '1662993941.jpg', '20', 'paid', 'procssing', '2022-09-13 04:58:20', '2022-09-13 04:58:20'),
(19, 'Uzair Iqbal', 'uzair@gmail.com', '0346769114', 'Rahim Yar Khan', '7', 'Black shirt', '4800', '3', '1662993457.png', '15', 'paid', 'procssing', '2022-09-13 09:17:26', '2022-09-13 09:17:26'),
(20, 'Uzair Iqbal', 'uzair@gmail.com', '0346769114', 'Rahim Yar Khan', '7', 'lady dress', '90', '3', '1662580050.png', '13', 'paid', 'procssing', '2022-09-13 09:17:26', '2022-09-13 09:17:26'),
(21, 'Uzair Iqbal', 'uzair@gmail.com', '0346769114', 'Rahim Yar Khan', '7', 'women black dress', '3000', '3', '1662579890.png', '10', 'paid', 'procssing', '2022-09-13 09:17:26', '2022-09-13 09:17:26'),
(22, 'Usama Aleem', 'usamaaleemaleem@gmail.com', '03176318139', 'lahore', '9', 'women black dress', '4000', '4', '1662579890.png', '10', 'cash on delivery', 'you canceled the order', '2022-09-16 06:06:28', '2022-09-18 12:10:52'),
(23, 'Usama Aleem', 'usamaaleemaleem@gmail.com', '03176318139', 'lahore', '9', 'Yellow shirt', '4800', '4', '1662993840.jpg', '18', 'cash on delivery', 'you canceled the order', '2022-09-16 06:06:28', '2022-09-18 12:10:57'),
(24, 'Usama Aleem', 'usamaaleemaleem@gmail.com', '03176318139', 'lahore', '9', 'LOgo shirts', '4200', '3', '1662993941.jpg', '20', 'cash on delivery', 'you canceled the order', '2022-09-16 06:06:28', '2022-09-18 12:13:28'),
(25, 'Usama Aleem', 'usamaaleemaleem@gmail.com', '03176318139', 'lahore', '9', 'Black Frock', '60000', '5', '1662993407.png', '14', 'paid', 'procssing', '2022-09-20 01:28:54', '2022-09-20 01:28:54'),
(26, 'Usama Aleem', 'usamaaleemaleem@gmail.com', '03176318139', 'lahore', '9', 'Black shirt', '1600', '1', '1662993457.png', '15', 'paid', 'procssing', '2022-09-20 01:28:54', '2022-09-20 01:28:54'),
(27, 'Usama Aleem', 'usamaaleemaleem@gmail.com', '03176318139', 'lahore', '9', 'LOgo shirts', '9800', '7', '1662993941.jpg', '20', 'paid', 'procssing', '2022-09-20 01:28:54', '2022-09-20 01:28:54'),
(28, 'Usama Aleem', 'usamaaleemaleem@gmail.com', '03176318139', 'lahore', '9', 'women black dress', '4000', '4', '1662579890.png', '10', 'paid', 'procssing', '2022-09-20 01:28:54', '2022-09-20 01:28:54'),
(29, 'Usama Aleem', 'usamaaleemaleem@gmail.com', '03176318139', 'lahore', '9', 'Black Frock', '36000', '3', '1662993407.png', '14', 'cash on delivery', 'procssing', '2022-09-20 03:07:32', '2022-09-20 03:07:32'),
(30, 'Usama Aleem', 'usamaaleemaleem@gmail.com', '03176318139', 'lahore', '9', 'pink shirt', '8000', '4', '1662579940.png', '11', 'cash on delivery', 'procssing', '2022-09-20 03:07:32', '2022-09-20 03:07:32'),
(31, 'Usama Aleem', 'usamaaleemaleem@gmail.com', '03176318139', 'lahore', '9', 'Blue shirt', '150', '1', '1662576585.png', '8', 'cash on delivery', 'procssing', '2022-09-20 03:07:32', '2022-09-20 03:07:32'),
(32, 'Usama Aleem', 'usamaaleemaleem@gmail.com', '03176318139', 'lahore', '9', 'Blue shirt', '900', '6', '1662576585.png', '8', 'cash on delivery', 'procssing', '2022-09-20 05:13:49', '2022-09-20 05:13:49'),
(33, 'Usama Aleem', 'usamaaleemaleem@gmail.com', '03176318139', 'lahore', '9', 'women black dress', '1000', '1', '1662579890.png', '10', 'cash on delivery', 'procssing', '2022-09-20 05:13:49', '2022-09-20 05:13:49'),
(34, 'Usama Aleem', 'usamaaleemaleem@gmail.com', '03176318139', 'lahore', '9', 'lady dress', '30', '1', '1662580050.png', '13', 'cash on delivery', 'procssing', '2022-09-20 05:13:49', '2022-09-20 05:13:49'),
(35, 'Usama Aleem', 'usamaaleemaleem@gmail.com', '03176318139', 'lahore', '9', 'Red Frock', '12000', '1', '1662993519.png', '16', 'cash on delivery', 'procssing', '2022-09-20 05:13:49', '2022-09-20 05:13:49'),
(36, 'Usama Aleem', 'usamaaleemaleem@gmail.com', '03176318139', 'lahore', '9', 'pink shirt', '10000', '5', '1662579940.png', '11', 'cash on delivery', 'procssing', '2022-09-20 20:13:20', '2022-09-20 20:13:20'),
(37, 'Usama Aleem', 'usamaaleemaleem@gmail.com', '03176318139', 'lahore', '9', 'Blue shirt', '750', '5', '1662576585.png', '8', 'cash on delivery', 'procssing', '2022-09-20 20:24:02', '2022-09-20 20:24:02'),
(38, 'Usama Aleem', 'usamaaleemaleem@gmail.com', '03176318139', 'lahore', '9', 'Yellow shirt', '7200', '6', '1662993840.jpg', '18', 'cash on delivery', 'procssing', '2022-09-20 20:25:13', '2022-09-20 20:25:13'),
(39, 'Usama Aleem', 'usamaaleemaleem@gmail.com', '03176318139', 'lahore', '9', 'white shirt', '5000', '5', '1662993892.jpg', '19', 'cash on delivery', 'procssing', '2022-09-26 01:17:33', '2022-09-26 01:17:33'),
(40, 'Usama Aleem', 'usamaaleemaleem@gmail.com', '03176318139', 'lahore', '9', 'lady dress', '210', '7', '1662580050.png', '13', 'cash on delivery', 'procssing', '2022-09-26 01:17:33', '2022-09-26 01:17:33'),
(41, 'Uzair Iqbal', 'uzair69iqbal@gmail.com', '0317631833', 'lahore', '11', 'Black Frock', '48000', '4', '1662993407.png', '14', 'cash on delivery', 'procssing', '2022-09-27 22:31:56', '2022-09-27 22:31:56'),
(42, 'Uzair Iqbal', 'uzair69iqbal@gmail.com', '0317631833', 'lahore', '11', 'Black shirt', '6400', '4', '1662993457.png', '15', 'cash on delivery', 'procssing', '2022-09-27 22:31:56', '2022-09-27 22:31:56'),
(43, 'Usama Aleem', 'usamaaleemaleem@gmail.com', '03176318139', 'lahore', '9', 'women black dress', '4000', '4', '1662579890.png', '10', 'cash on delivery', 'procssing', '2022-12-04 11:14:18', '2022-12-04 11:14:18'),
(44, 'Usama Aleem', 'usamaaleemaleem@gmail.com', '03176318139', 'lahore', '9', 'perfume', '12000', '6', '1664130361.jpg', '23', 'cash on delivery', 'procssing', '2022-12-04 11:14:18', '2022-12-04 11:14:18'),
(45, 'Usama Aleem', 'usamaaleemaleem@gmail.com', '03176318139', 'lahore', '9', 'teady bear', '500', '5', '1664130198.jpg', '22', 'cash on delivery', 'procssing', '2022-12-04 11:14:18', '2022-12-04 11:14:18'),
(46, 'Usama Aleem', 'usamaaleemaleem@gmail.com', '03176318139', 'lahore', '9', 'Black shirt', '8000', '5', '1662993457.png', '15', 'cash on delivery', 'procssing', '2022-12-04 11:14:18', '2022-12-04 11:14:18');

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
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `catagory` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `image`, `catagory`, `quantity`, `price`, `discount_price`, `created_at`, `updated_at`) VALUES
(8, 'Blue shirt', 'Blue shirt', '1662576585.png', 'Blue shirt', '1', '1200', '150', '2022-09-08 01:49:45', '2022-09-08 01:49:45'),
(10, 'women black dress', 'women black dress', '1662579890.png', NULL, '5', '15000', '1000', '2022-09-08 02:44:50', '2022-09-08 02:44:50'),
(11, 'pink shirt', 'pink shirt', '1662579940.png', NULL, '1', '2000', NULL, '2022-09-08 02:45:40', '2022-09-08 02:45:40'),
(12, 'womens Blue frock', 'Blue frock', '1662994025.png', NULL, '1', '12000', '10000', '2022-09-08 02:46:37', '2022-09-12 21:47:05'),
(13, 'lady dress', 'laddy dress', '1662580050.png', NULL, '1', '3330', '30', '2022-09-08 02:47:30', '2022-09-08 02:47:30'),
(14, 'Black Frock', 'womens Black frock', '1662993407.png', 'Black Frock', '2', '12000', NULL, '2022-09-12 21:36:48', '2022-09-12 21:36:48'),
(15, 'Black shirt', 'Mens Black shirt', '1662993457.png', 'Black shirt', '1', '1600', NULL, '2022-09-12 21:37:37', '2022-09-12 21:37:37'),
(16, 'Red Frock', 'Red Frock', '1662993519.png', 'Red Frock', '1', '15000', '12000', '2022-09-12 21:38:39', '2022-09-12 21:38:39'),
(17, 'Black Dress', 'Black Dress', '1662993603.png', 'women Black dress', '3', '1550', '15000', '2022-09-12 21:40:03', '2022-09-12 21:40:03'),
(18, 'Yellow shirt', 'this is yellow unique shirt', '1662993840.jpg', NULL, '1', '1500', '1200', '2022-09-12 21:44:00', '2022-09-12 21:44:00'),
(19, 'white shirt', 'white shirt', '1662993892.jpg', NULL, '1', '1200', '1000', '2022-09-12 21:44:52', '2022-09-12 21:44:52'),
(20, 'LOgo shirts', 'Logo shirts', '1662993941.jpg', NULL, '3', '1500', '1400', '2022-09-12 21:45:41', '2022-09-12 21:45:41'),
(21, 'Watch', 'Watch for mens', '1664130021.jpg', NULL, '1', '1100', NULL, '2022-09-26 01:20:21', '2022-09-26 01:20:21'),
(22, 'teady bear', 'teady bear', '1664130198.jpg', 'toy', '1', '1500', '100', '2022-09-26 01:23:18', '2022-09-26 01:23:18'),
(23, 'perfume', 'perfume for mens', '1664130361.jpg', 'perfume', '1', '2000', NULL, '2022-09-26 01:26:01', '2022-09-26 01:26:01');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('frh1mkmW6DtJl2chzjxBqVCBQriUVSj1t6GAz6Wa', 9, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoieUZBU1Z3cVhCMjlPVXQ0OEJSY1hkbzJMSHV6ZFVFd2M3MlBydHhuRyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9kdWN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6OTtzOjU6ImFsZXJ0IjthOjA6e319', 1670123783),
('u5QpZLM9noS1qZUBTj9zO68TKIYNRyHI8aBdX9AJ', 9, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZWVwc0tBM2c3djk5OFdIVHR3cXIybXVIQkNtemZpZ2E5dlU1SGNQTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9yZWRpcmVjdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjk7fQ==', 1671247545);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `usertype`, `phone`, `address`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'admin@gmail.com', '1', '2147483647', 'lahore', '2022-09-15 04:19:07', '$2y$10$Lep4AwFUj2A1HoO0MWZ6ueiGIknNgeZOTXNOQW06DLbGSc6muFXNS', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-01 05:57:22', '2022-09-01 05:57:22'),
(3, 'Ahmed', 'ahmed@gmail.com', '0', '03176098712', 'Rahim Yar Khan', '2022-09-15 04:19:33', '$2y$10$WkwnqNG2bfCQ4d1gRJfb0OQzE2w5tyq5jhhjLI6w28aSLjiz1uPqK', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-02 21:13:56', '2022-09-02 21:13:56'),
(6, 'usman', 'usmanaleem169@gmail.com', '0', '0317631833', 'Rahim Yar Khan', '2022-09-14 04:20:32', '$2y$10$xSSdTBiL/JOEa0jsJ8vZ.OO9I3i18AQOjj/WLB0rPLSH4Ih./J.7e', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-11 03:19:16', '2022-09-11 03:19:16'),
(7, 'Uzair Iqbal', 'uzair@gmail.com', '0', '0346769114', 'Rahim Yar Khan', '2022-09-15 04:20:03', '$2y$10$Uesir53y4rbADeioVRKI0uI.bW5M7oJUFbWLKor4IMzc1.cPspT9i', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-13 09:15:30', '2022-09-13 09:15:30'),
(9, 'Usama Aleem', 'usamaaleemaleem@gmail.com', '0', '03176318139', 'lahore', '2022-09-15 11:13:17', '$2y$10$G4kCeG3n7LtlkXvi7C2.j.QJTdZKs/EmGeVuGjD4.WX7CeRzTgSuu', NULL, NULL, NULL, 'QaQKGUyN6LSSdevqzeDNB7lOjJAoIknnrr4JkyxE5VX46Zf3yRnQfaKxddyp', NULL, NULL, '2022-09-15 11:12:55', '2022-09-20 20:12:05'),
(10, 'Umair Naeem', 'umairnaeem148@gmail.com', '0', '03082305619', 'Rahim Yar Khan', NULL, '$2y$10$6JSRt5AdYY1vLb9/PmW1D./KOsz8a6JbIv3M2EWZrPXx9o1UOewPO', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-21 02:53:48', '2022-09-21 02:53:48'),
(11, 'Uzair Iqbal', 'uzair69iqbal@gmail.com', '0', '0317631833', 'lahore', NULL, '$2y$10$MYjaAWLEydv.xhWgQRDui.8kq8Nq0Mlxnh55lvrsygcNJJvHx4mDO', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-27 22:28:17', '2022-09-27 22:28:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catagories`
--
ALTER TABLE `catagories`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `cards`
--
ALTER TABLE `cards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `catagories`
--
ALTER TABLE `catagories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
