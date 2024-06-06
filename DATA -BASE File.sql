-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2024 at 08:57 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mzoughi`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` varchar(550) DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `is_delete` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `name`, `slug`, `meta_title`, `meta_description`, `meta_keywords`, `created_by`, `status`, `is_delete`, `created_at`, `updated_at`) VALUES
(11, 'Boga', 'BogaCidre', 'Boga', 'Boga', 'Boga', 55, 0, 0, '2024-03-30 23:12:41', '2024-03-31 00:18:04'),
(12, 'Apla', 'Apla', 'Apla', 'Apla', 'Apla', 55, 0, 0, '2024-03-30 23:16:35', '2024-03-30 23:16:35'),
(13, 'Prince', 'Prince', 'Prince', 'Prince', 'Prince', 55, 0, 0, '2024-03-30 23:29:40', '2024-03-30 23:29:40'),
(14, 'Sicam', 'Sicam', 'Sicam', 'Sicam', 'Sicam', 55, 0, 0, '2024-03-30 23:37:39', '2024-03-30 23:37:39'),
(15, 'TOM', 'TOM', 'TOM', 'TOM', 'TOM', 55, 0, 0, '2024-03-31 03:59:32', '2024-03-31 03:59:32'),
(16, 'Kif', 'Kif', 'Kif', 'Kif', 'Kif', 55, 0, 0, '2024-03-31 04:08:07', '2024-03-31 04:08:07'),
(17, 'NEBLIA', 'NEBLIA', 'NEBLIA', 'NEBLIA', 'NEBLIA', 55, 0, 0, '2024-03-31 04:12:42', '2024-03-31 04:12:42'),
(18, 'PRÉSIDENT', 'PRÉSIDENT', 'PRÉSIDENT', 'PRÉSIDENT', 'PRÉSIDENT', 55, 0, 0, '2024-03-31 04:17:25', '2024-03-31 04:17:25'),
(19, 'Oh!', 'Oh!', 'Oh!', 'Oh!', 'Oh!', 55, 0, 0, '2024-03-31 04:24:17', '2024-03-31 04:24:17'),
(20, 'LAH\'NEYA', 'LAH\'NEYA', 'LAH\'NEYA', 'LAH\'NEYA', 'LAH\'NEYA', 55, 0, 0, '2024-03-31 04:30:20', '2024-03-31 04:30:20');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 0,
  `is_delete` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `meta_title`, `meta_description`, `meta_keywords`, `created_by`, `status`, `is_delete`, `created_at`, `updated_at`) VALUES
(9, 'Getränke', 'Getränke', 'Getränke', 'Getränke', 'Getränke', 55, 0, 0, '2024-03-30 22:57:16', '2024-03-30 22:57:16'),
(10, 'Süße Lebensmittel', 'SüßeLebensmittel', 'Süße Lebensmittel', 'Süße Lebensmittel', 'Süße Lebensmittel', 55, 0, 0, '2024-03-30 23:28:19', '2024-03-30 23:28:19'),
(11, 'Lebensmittelgeschäft', 'Lebensmittelgeschäft', 'Lebensmittelgeschäft', 'Lebensmittelgeschäft', 'Lebensmittelgeschäft', 55, 0, 0, '2024-03-30 23:36:59', '2024-03-30 23:39:24'),
(12, 'Molkerei- und Milchprodukte', 'Molkerei- und Milchprodukte', 'Molkerei- und Milchprodukte', 'Molkerei- und Milchprodukte', 'Molkerei- und Milchprodukte', 55, 0, 0, '2024-03-31 04:16:41', '2024-03-31 04:16:41');

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `is_delete` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`id`, `name`, `code`, `created_by`, `status`, `is_delete`, `created_at`, `updated_at`) VALUES
(1, 'daz', '#a93d3d', 11, 0, 1, '2024-03-06 20:13:37', '2024-03-06 20:31:22'),
(2, 'Red', '#ef0101', 11, 0, 0, '2024-03-06 20:31:19', '2024-03-09 01:14:19'),
(3, 'yellow', '#f6fa00', 11, 0, 0, '2024-03-09 01:14:33', '2024-03-09 01:14:33'),
(4, 'bluesky', '#00d8f5', 11, 0, 0, '2024-03-09 01:14:45', '2024-03-09 21:40:52'),
(5, 'black', '#000000', 11, 0, 0, '2024-03-09 01:14:51', '2024-03-09 01:14:51'),
(6, 'white', '#eef6f5', 11, 0, 0, '2024-03-25 02:37:05', '2024-03-25 02:37:05'),
(7, 'caramel', '#d2d454', 11, 0, 0, '2024-03-25 02:37:30', '2024-03-25 02:37:30'),
(8, 'rouge bordeaux', '#d25151', 11, 0, 0, '2024-03-25 02:37:49', '2024-03-25 02:37:49'),
(9, 'rose', '#f55696', 11, 0, 0, '2024-03-25 02:43:25', '2024-03-25 02:43:25'),
(10, 'blue ciel', '#007bff', 11, 0, 0, '2024-03-25 02:47:19', '2024-03-25 02:47:19'),
(11, 'yellow hell', '#e4d321', 11, 0, 0, '2024-03-25 02:47:38', '2024-03-25 02:47:38'),
(12, 'schwarz', '#000000', 53, 0, 1, '2024-03-30 19:15:47', '2024-03-30 19:20:32'),
(13, 'rose', '#e2035c', 53, 0, 0, '2024-03-30 19:24:37', '2024-03-30 19:24:37'),
(14, 'schwarz', '#000000', 53, 0, 0, '2024-03-30 19:35:11', '2024-03-30 19:35:11'),
(15, 'gren', '#aeff00', 55, 0, 0, '2024-03-31 02:28:39', '2024-03-31 02:28:39');

-- --------------------------------------------------------

--
-- Table structure for table `discount_code`
--

CREATE TABLE `discount_code` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `percent_amount` varchar(255) DEFAULT NULL,
  `expire_date` date DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `is_delete` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `discount_code`
--

INSERT INTO `discount_code` (`id`, `name`, `type`, `percent_amount`, `expire_date`, `status`, `is_delete`, `created_at`, `updated_at`) VALUES
(4, 'Coupon', 'Percent', '25', '2024-03-22', 0, 1, '2024-03-29 19:55:13', '2024-03-29 21:47:25'),
(5, 'slide1', '', '', '0000-00-00', 1, 1, '2024-03-29 21:22:50', '2024-03-31 22:21:33'),
(6, 'sayed', 'Amount', '100', '2024-03-30', 0, 0, '2024-03-29 21:37:56', '2024-03-29 21:37:56'),
(7, 'x-9526hgyt4', 'Percent', 'user', '2024-04-19', 0, 0, '2024-03-29 21:47:40', '2024-03-31 19:04:02'),
(8, 'x-9526hgyt455', 'Amount', '2', '2024-04-03', 0, 0, '2024-03-31 19:04:52', '2024-03-31 19:04:52'),
(9, 'X4551SDHDZUI', 'Amount', '5', '2024-04-18', 0, 0, '2024-04-03 01:03:14', '2024-04-03 01:03:14');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `address_one` varchar(255) DEFAULT NULL,
  `address_tow` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `postcode` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `note` text DEFAULT NULL,
  `discount_code` varchar(255) DEFAULT NULL,
  `discount_amount` varchar(25) NOT NULL DEFAULT '0',
  `shipping_id` varchar(25) DEFAULT NULL,
  `shipping_amount` varchar(25) NOT NULL DEFAULT '0',
  `total_amount` varchar(25) NOT NULL DEFAULT '0',
  `payment_method` varchar(25) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `is_delete` tinyint(4) NOT NULL DEFAULT 0,
  `is_payment` tinyint(4) NOT NULL DEFAULT 0,
  `payment_data` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `first_name`, `last_name`, `company_name`, `country`, `address_one`, `address_tow`, `city`, `state`, `postcode`, `phone`, `email`, `note`, `discount_code`, `discount_amount`, `shipping_id`, `shipping_amount`, `total_amount`, `payment_method`, `status`, `is_delete`, `is_payment`, `payment_data`, `created_at`, `updated_at`) VALUES
(1, NULL, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test@gmail.com', 'qqffqefq', 'test', '0', '9', '0', '0', 'Paypal', 0, 0, 0, NULL, '2024-04-04 01:42:59', '2024-04-04 01:42:59'),
(2, NULL, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test@gmail.com', 'qqffqefq', 'test', '0', '9', '0', '0', 'Paypal', 0, 0, 0, NULL, '2024-04-04 01:43:25', '2024-04-04 01:43:25'),
(3, NULL, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test@gmail.com', 'qqffqefq', 'test', '0', '9', '0', '0', 'Paypal', 0, 0, 0, NULL, '2024-04-04 01:43:27', '2024-04-04 01:43:27'),
(4, NULL, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test@gmail.com', 'qqffqefq', 'test', '0', '9', '0', '0', 'Paypal', 0, 0, 0, NULL, '2024-04-04 02:27:32', '2024-04-04 02:27:32'),
(5, NULL, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test@gmail.com', 'qqffqefq', 'test', '0', '9', '0', '0', 'Paypal', 0, 0, 0, NULL, '2024-04-04 02:29:45', '2024-04-04 02:29:45'),
(6, NULL, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test@gmail.com', 'qqffqefq', 'test', '0', '9', '0', '0', 'Paypal', 0, 0, 0, NULL, '2024-04-04 02:33:41', '2024-04-04 02:33:41'),
(7, NULL, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test@gmail.com', 'qqffqefq', 'test', '0', '9', '0', '0', 'Paypal', 0, 0, 0, NULL, '2024-04-04 02:39:29', '2024-04-04 02:39:29'),
(8, NULL, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test@gmail.com', 'qqffqefq', 'test', '0', '9', '0', '0', 'Paypal', 0, 0, 0, NULL, '2024-04-04 02:40:35', '2024-04-04 02:40:35'),
(9, NULL, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test@gmail.com', 'test', 'X4551SDHDZUI', '5', '8', '5', '16', 'cash', 0, 0, 0, NULL, '2024-04-06 23:21:01', '2024-04-06 23:21:01'),
(10, 82, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test65ezez@gt.gt', 'reergrger', '', '0', '9', '4', '20', 'Paypal', 0, 0, 0, NULL, '2024-04-07 02:11:23', '2024-04-07 02:11:23'),
(11, 83, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'fitmed2081@gmail.com', 'eqffezezezfe', 'X4551SDHDZUI', '5', '8', '5', '29.03', 'Paypal', 0, 0, 0, NULL, '2024-04-07 02:16:09', '2024-04-07 02:16:09'),
(12, 55, 'me', 'me', 'me', 'me', 'me', 'me', 'me', 'me', 'me', 'me', 'fitmed2081@gmail.com', 'me', '', '0', '8', '5', '34.03', 'Paypal', 0, 0, 0, NULL, '2024-04-07 03:03:29', '2024-04-07 03:03:29'),
(13, 55, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'user@gmail.com', 'test', '', '0', '9', '4', '33.03', 'Paypal', 0, 0, 0, NULL, '2024-04-07 03:22:58', '2024-04-07 03:22:58'),
(14, 55, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test@gmail.com', 'test', '', '0', '8', '5', '34.03', 'cash', 0, 0, 1, NULL, '2024-04-07 04:02:20', '2024-04-07 04:02:20'),
(15, 55, 'zef', 'zef', 'zef', 'zef', 'ezf', 'ezf', 'zef', 'fez', 'zef', 'zef', 'user@gmail.com', 'fez', '', '0', '8', '5', '34.03', 'Paypal', 0, 0, 0, NULL, '2024-04-07 04:03:57', '2024-04-07 04:03:57'),
(16, 55, 'aa', 'aa', 'aa', 'aa', 'a', 'a', 'aa', 'aa', 'aa', 'aa', 'fitmed8@gmail.com', 'aa', '', '0', '8', '5', '34.03', 'cash', 0, 0, 1, NULL, '2024-04-07 04:07:10', '2024-04-07 04:07:10');

-- --------------------------------------------------------

--
-- Table structure for table `orders_item`
--

CREATE TABLE `orders_item` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `price` varchar(25) DEFAULT '0',
  `color_name` varchar(255) DEFAULT NULL,
  `size_name` varchar(255) NOT NULL,
  `size_amount` varchar(25) NOT NULL DEFAULT '0',
  `total_price` varchar(25) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders_item`
--

INSERT INTO `orders_item` (`id`, `order_id`, `product_id`, `quantity`, `price`, `color_name`, `size_name`, `size_amount`, `total_price`, `created_at`, `updated_at`) VALUES
(1, 9, 28, 8, '2', NULL, '', '0', '2', '2024-04-06 23:21:01', '2024-04-06 23:21:01'),
(2, 10, 28, 8, '2', NULL, '', '0', '2', '2024-04-07 02:11:23', '2024-04-07 02:11:23'),
(3, 11, 28, 9, '2', NULL, '', '0', '2', '2024-04-07 02:16:09', '2024-04-07 02:16:09'),
(4, 11, 29, 1, '1.5', NULL, '', '0', '1.5', '2024-04-07 02:16:09', '2024-04-07 02:16:09'),
(5, 11, 44, 1, '1.8', NULL, '', '0', '1.8', '2024-04-07 02:16:09', '2024-04-07 02:16:09'),
(6, 11, 38, 1, '0.99', NULL, '', '0', '0.99', '2024-04-07 02:16:09', '2024-04-07 02:16:09'),
(7, 11, 37, 1, '0.99', NULL, '', '0', '0.99', '2024-04-07 02:16:09', '2024-04-07 02:16:09'),
(8, 11, 35, 1, '0.8', NULL, '', '0', '0.8', '2024-04-07 02:16:10', '2024-04-07 02:16:10'),
(9, 11, 39, 1, '0.99', NULL, '', '0', '0.99', '2024-04-07 02:16:10', '2024-04-07 02:16:10'),
(10, 11, 33, 4, '0.99', NULL, '', '0', '0.99', '2024-04-07 02:16:10', '2024-04-07 02:16:10'),
(11, 12, 28, 9, '2', NULL, '', '0', '2', '2024-04-07 03:03:29', '2024-04-07 03:03:29'),
(12, 12, 29, 1, '1.5', NULL, '', '0', '1.5', '2024-04-07 03:03:29', '2024-04-07 03:03:29'),
(13, 12, 44, 1, '1.8', NULL, '', '0', '1.8', '2024-04-07 03:03:29', '2024-04-07 03:03:29'),
(14, 12, 38, 1, '0.99', NULL, '', '0', '0.99', '2024-04-07 03:03:29', '2024-04-07 03:03:29'),
(15, 12, 37, 1, '0.99', NULL, '', '0', '0.99', '2024-04-07 03:03:29', '2024-04-07 03:03:29'),
(16, 12, 35, 1, '0.8', NULL, '', '0', '0.8', '2024-04-07 03:03:29', '2024-04-07 03:03:29'),
(17, 12, 39, 1, '0.99', NULL, '', '0', '0.99', '2024-04-07 03:03:29', '2024-04-07 03:03:29'),
(18, 12, 33, 4, '0.99', NULL, '', '0', '0.99', '2024-04-07 03:03:29', '2024-04-07 03:03:29'),
(19, 13, 28, 9, '2', NULL, '', '0', '2', '2024-04-07 03:22:58', '2024-04-07 03:22:58'),
(20, 13, 29, 1, '1.5', NULL, '', '0', '1.5', '2024-04-07 03:22:58', '2024-04-07 03:22:58'),
(21, 13, 44, 1, '1.8', NULL, '', '0', '1.8', '2024-04-07 03:22:58', '2024-04-07 03:22:58'),
(22, 13, 38, 1, '0.99', NULL, '', '0', '0.99', '2024-04-07 03:22:58', '2024-04-07 03:22:58'),
(23, 13, 37, 1, '0.99', NULL, '', '0', '0.99', '2024-04-07 03:22:58', '2024-04-07 03:22:58'),
(24, 13, 35, 1, '0.8', NULL, '', '0', '0.8', '2024-04-07 03:22:58', '2024-04-07 03:22:58'),
(25, 13, 39, 1, '0.99', NULL, '', '0', '0.99', '2024-04-07 03:22:58', '2024-04-07 03:22:58'),
(26, 13, 33, 4, '0.99', NULL, '', '0', '0.99', '2024-04-07 03:22:58', '2024-04-07 03:22:58'),
(27, 14, 28, 9, '2', NULL, '', '0', '2', '2024-04-07 04:02:20', '2024-04-07 04:02:20'),
(28, 14, 29, 1, '1.5', NULL, '', '0', '1.5', '2024-04-07 04:02:20', '2024-04-07 04:02:20'),
(29, 14, 44, 1, '1.8', NULL, '', '0', '1.8', '2024-04-07 04:02:20', '2024-04-07 04:02:20'),
(30, 14, 38, 1, '0.99', NULL, '', '0', '0.99', '2024-04-07 04:02:20', '2024-04-07 04:02:20'),
(31, 14, 37, 1, '0.99', NULL, '', '0', '0.99', '2024-04-07 04:02:20', '2024-04-07 04:02:20'),
(32, 14, 35, 1, '0.8', NULL, '', '0', '0.8', '2024-04-07 04:02:20', '2024-04-07 04:02:20'),
(33, 14, 39, 1, '0.99', NULL, '', '0', '0.99', '2024-04-07 04:02:20', '2024-04-07 04:02:20'),
(34, 14, 33, 4, '0.99', NULL, '', '0', '0.99', '2024-04-07 04:02:20', '2024-04-07 04:02:20'),
(35, 15, 28, 9, '2', NULL, '', '0', '2', '2024-04-07 04:03:57', '2024-04-07 04:03:57'),
(36, 15, 29, 1, '1.5', NULL, '', '0', '1.5', '2024-04-07 04:03:57', '2024-04-07 04:03:57'),
(37, 15, 44, 1, '1.8', NULL, '', '0', '1.8', '2024-04-07 04:03:57', '2024-04-07 04:03:57'),
(38, 15, 38, 1, '0.99', NULL, '', '0', '0.99', '2024-04-07 04:03:57', '2024-04-07 04:03:57'),
(39, 15, 37, 1, '0.99', NULL, '', '0', '0.99', '2024-04-07 04:03:57', '2024-04-07 04:03:57'),
(40, 15, 35, 1, '0.8', NULL, '', '0', '0.8', '2024-04-07 04:03:57', '2024-04-07 04:03:57'),
(41, 15, 39, 1, '0.99', NULL, '', '0', '0.99', '2024-04-07 04:03:57', '2024-04-07 04:03:57'),
(42, 15, 33, 4, '0.99', NULL, '', '0', '0.99', '2024-04-07 04:03:57', '2024-04-07 04:03:57'),
(43, 16, 28, 9, '2', NULL, '', '0', '2', '2024-04-07 04:07:10', '2024-04-07 04:07:10'),
(44, 16, 29, 1, '1.5', NULL, '', '0', '1.5', '2024-04-07 04:07:10', '2024-04-07 04:07:10'),
(45, 16, 44, 1, '1.8', NULL, '', '0', '1.8', '2024-04-07 04:07:10', '2024-04-07 04:07:10'),
(46, 16, 38, 1, '0.99', NULL, '', '0', '0.99', '2024-04-07 04:07:10', '2024-04-07 04:07:10'),
(47, 16, 37, 1, '0.99', NULL, '', '0', '0.99', '2024-04-07 04:07:10', '2024-04-07 04:07:10'),
(48, 16, 35, 1, '0.8', NULL, '', '0', '0.8', '2024-04-07 04:07:10', '2024-04-07 04:07:10'),
(49, 16, 39, 1, '0.99', NULL, '', '0', '0.99', '2024-04-07 04:07:10', '2024-04-07 04:07:10'),
(50, 16, 33, 4, '0.99', NULL, '', '0', '0.99', '2024-04-07 04:07:10', '2024-04-07 04:07:10');

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
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `sku` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `sub_category_id` int(11) DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `old_price` double NOT NULL DEFAULT 0,
  `price` double NOT NULL DEFAULT 0,
  `short_description` text DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `additional_information` text DEFAULT NULL,
  `shipping_returns` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0: active, 1:Inactive',
  `is_delete` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0:not delete  1: is delete',
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `title`, `slug`, `sku`, `category_id`, `sub_category_id`, `brand_id`, `old_price`, `price`, `short_description`, `description`, `additional_information`, `shipping_returns`, `status`, `is_delete`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'ddze dezd zed', 'ddze-dezd-zed', NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, 1, 11, '2024-03-04 16:06:41', '2024-03-25 02:34:16'),
(2, 'reffer f\"rerf freefr', 'reffer-frerf-freefr', NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, 1, 11, '2024-03-04 16:07:33', '2024-03-25 02:34:15'),
(3, 'reffer f\"rerf freefr', 'reffer-frerf-freefr-3', NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, 1, 11, '2024-03-04 16:08:14', '2024-03-25 02:34:14'),
(4, 'bracleee', 'mohamed-mzoughi', 'gold', 1, 11, 4, 200, 555, 'bracleee', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 0, 1, 11, '2024-03-04 16:09:03', '2024-03-25 02:34:13'),
(5, 'dscs sdscd sdcds', 'dscs-sdscd-sdcds', 'fsfq', 5, 5, 4, 5162, 200, 'qfs', '<p>qfs</p>', 'qsf', '<p>fqsqf</p>', 0, 1, 11, '2024-03-04 16:38:29', '2024-03-25 02:34:12'),
(6, 'nike tn', 'mohamed-mzoughi-6', 'zed', 1, 11, 1, 2900, 2500, 'dcsdcs', '<p><strong>seffsefrereregeg</strong></p>', 'sdcscdsfsfd', '<p>cdscsdsf</p>', 0, 1, 11, '2024-03-04 16:39:18', '2024-03-25 02:34:11'),
(7, 'mohamed mzoughi', 'mohamed-mzoughi-7', 'qqcsqcs', 1, 11, 2, 5162, 200, 'csqcqs', '', 'qcscqs', 'cqsqcs', 1, 1, 11, '2024-03-04 16:40:51', '2024-03-25 02:34:11'),
(8, 'azdadz', 'azdadz', NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, 1, 11, '2024-03-09 21:16:26', '2024-03-09 22:36:48'),
(9, 'gucci knit cotton', 'gucci-knit-cotton', 'gucci knit cotton', 1, 12, 4, 1200, 950, 'gucci knit cottondedez', '<p style=\"text-align: left;\">&nbsp;</p>\r\n<table border=\"1\"><colgroup><col><col></colgroup>\r\n<tbody>\r\n<tr>\r\n<td>&nbsp;</td>\r\n<td>&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p><strong>gvghbbon</strong></p>', 'gucci knit cotton\r\nzdezeddezdezqscqcs\r\nqsccqscsq', '<p><strong>gucci <span style=\"background-color: rgb(230, 126, 35);\"><em>knit cotton pazdkpoazkdpokdaz</em></span></strong></p>', 0, 1, 11, '2024-03-10 00:03:30', '2024-03-25 02:34:09'),
(10, 'qscqcs', 'qscqcs', 'qscsqc', 1, 11, 4, 598, 5.5, 'qcscqs', '<p>cqsqcs</p>', 'qscqcs', '<p>qcsqcs</p>', 0, 1, 11, '2024-03-24 20:27:02', '2024-03-25 02:34:08'),
(11, 'T-shirt Gucci', 't-shirt-gucci', 'Gucci', 1, 10, 4, 250, 200, 'Gucci tragen', '<p>Gucci tragen</p>', 'Gucci tragen', '<p>Gucci tragen</p>', 0, 0, 11, '2024-03-25 02:35:35', '2024-03-25 02:36:24'),
(12, 'Nike Golf', 'nike-golf', 'nike', 1, 11, 5, 35, 25, 'nike golf', '<p>nike golf</p>', 'nike golf', '<p>nike golf</p>', 0, 0, 11, '2024-03-25 02:41:01', '2024-03-25 02:44:09'),
(13, 'Bag Travel', 'bag-travel', 'TNF', 4, 4, 6, 552, 250, 'danke', '<p>danke</p>', 'danke', '<p>danke</p>', 0, 0, 11, '2024-03-25 02:47:55', '2024-03-25 02:48:48'),
(14, 'nackenkissen', 'nackenkissen', 'nackenkissen', 4, 13, 7, 59, 26, 'nackenkissen', '<p>nackenkissen</p>', 'nackenkissen', '<p>nackenkissen</p>', 0, 0, 11, '2024-03-25 02:55:44', '2024-03-25 02:57:04'),
(15, 'Kappa Men\'s Low-Top Sneakers', 'kappa-mens-low-top-sneakers', 'Kappas', 1, 14, 8, 80, 62, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '<h1 class=\"title h1 mb-2\"><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</h1>', 0, 0, 11, '2024-03-25 02:59:44', '2024-03-25 21:01:35'),
(16, 'T-shirt', 't-shirt', 'efz', 1, 10, 4, 5162, 200, 'deqed', '<p>fez</p>', 'ezf', '', 0, 0, 11, '2024-03-26 00:52:57', '2024-03-26 00:53:21'),
(17, 'me', 'me', NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, 0, 11, '2024-03-28 09:22:42', '2024-03-28 09:22:42'),
(18, 'Boga Cidre', 'boga-cidre', 'Boga', 6, 15, 9, 3, 1.5, 'Boga cidre', '<p>Boga cidre</p>', 'Boga cidre', '<p>Boga cidre</p>', 0, 0, 53, '2024-03-30 19:15:58', '2024-03-30 19:17:23'),
(19, 'Élégante Jebba Moderne Tunisienne Rose En Satin', 'elegante-jebba-moderne-tunisienne-rose-en-satin', 'Élégante Jebba Moderne Tunisienne Rose En Satin', 7, 16, 10, 520, 260, 'Élégante Jebba Moderne Tunisienne Rose En Satin', '<h1 class=\"w-post-elm post_title us_custom_faee3857 entry-title color_link_inherit\">&Eacute;l&eacute;gante Jebba Moderne Tunisienne Rose En Satin</h1>', '', '<h1 class=\"w-post-elm post_title us_custom_faee3857 entry-title color_link_inherit\">&Eacute;l&eacute;gante Jebba Moderne Tunisienne Rose En Satin</h1>', 0, 0, 53, '2024-03-30 19:24:53', '2024-03-30 19:25:52'),
(20, 'Abaya Caftan Marocain Noire Brodée Dorée: Élégance Et Charme', 'abaya-caftan-marocain-noire-brodee-doree-elegance-et-charme', 'Abaya Caftan Marocain Noire Brodée Dorée: Élégance Et Charme', 7, 17, 10, 596, 200, 'Abaya Caftan Marocain Noire Brodée Dorée: Élégance Et Charme', '<h1 class=\"w-post-elm post_title us_custom_faee3857 entry-title color_link_inherit\">Abaya Caftan Marocain Noire Brod&eacute;e Dor&eacute;e: &Eacute;l&eacute;gance Et Charme</h1>', 'Abaya Caftan Marocain Noire Brodée Dorée: Élégance Et Charme', '<h1 class=\"w-post-elm post_title us_custom_faee3857 entry-title color_link_inherit\">Abaya Caftan Marocain Noire Brod&eacute;e Dor&eacute;e: &Eacute;l&eacute;gance Et Charme</h1>', 0, 0, 53, '2024-03-30 19:32:56', '2024-03-30 19:35:45'),
(21, 'Boga cidre', 'boga-cidre-21', 'Boga cidre', 9, 18, 11, 2.5, 1.5, 'Boga cidre', '<p>Boga cidre</p>', 'Boga cidre', '<p>Boga cidre</p>', 0, 1, 55, '2024-03-30 23:13:10', '2024-03-31 00:18:20'),
(22, 'Apla', 'apla', 'Apla', 9, 18, 12, 3.2, 1.5, 'Apla', '<p>Apla</p>', 'Apla', '<p>Apla</p>', 0, 1, 55, '2024-03-30 23:15:44', '2024-03-31 03:48:32'),
(23, 'Boga Lim', 'boga-lim', 'Boga Lim', 9, 18, 11, 2.6, 0.8, 'Boga Lim', '<p>Boga Lim</p>', 'Boga Lim', '<p>Boga Lim</p>', 0, 1, 55, '2024-03-30 23:18:09', '2024-03-31 03:48:23'),
(24, 'Schokoladenkuchen \'Prince\' 28 stuck', 'gateau-au-chocolat-prince', 'Schokoladenkuchen \'Prince\'', 10, 19, 13, 15.6, 10.5, '28 stuck', '<p>28 stuck</p>', '28 stuck', '<p>28 stuck</p>', 0, 0, 55, '2024-03-30 23:29:55', '2024-03-30 23:31:51'),
(25, 'Tomatenkonzentrat 800G', 'tomatenkonzentrat-800g', 'Tomatenkonzentrat', 11, 20, 14, 3.6, 2.8, 'Tomatenkonzentrat', '<p>Tomatenkonzentrat&nbsp;</p>', 'Tomatenkonzentrat', '<p>Tomatenkonzentrat&nbsp;</p>', 0, 0, 55, '2024-03-30 23:38:20', '2024-03-30 23:38:50'),
(26, 'pp', 'pp', NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, 1, 55, '2024-03-31 00:10:00', '2024-03-31 00:18:18'),
(27, 'Apla 1 Liter', 'apla-1-liter', 'Apla', 9, 18, 12, 1.2, 0.8, 'Apla', '<p>Apla</p>', 'Apla', '<p>Apla</p>', 0, 1, 55, '2024-03-31 03:48:45', '2024-03-31 03:52:27'),
(28, 'Boga 1,5 L', 'boga-1l', 'Boga', 9, 18, 11, 3.5, 2, 'Boga', '<p>Boga&nbsp;</p>', 'Boga', '<p>Boga sd</p>', 0, 0, 55, '2024-03-31 03:52:35', '2024-04-03 23:19:29'),
(29, 'Apla 1 L', 'apla-1-l', 'Apla', 9, 18, 12, 2.5, 1.5, 'Apla', '<p>Apla</p>', 'Apla', '<p>Apla</p>', 0, 0, 55, '2024-03-31 03:54:12', '2024-03-31 03:54:35'),
(30, 'Chocotom chocolat', 'chocotom-chocolat', 'Chocotom chocolat', 10, 21, 15, 1.6, 0.99, 'Chocotom chocolat', '<h1 class=\"page-title\"><span class=\"base\" data-ui-id=\"page-title-wrapper\">Chocotom chocolat</span></h1>', 'Chocotom chocolat', '<h1 class=\"page-title\"><span class=\"base\" data-ui-id=\"page-title-wrapper\">Chocotom chocolat</span></h1>', 0, 0, 55, '2024-03-31 03:59:44', '2024-03-31 04:00:12'),
(31, 'Chocotom vanille', 'chocotom-vanille', 'Chocotom vanille', 10, 21, 15, 1.6, 0.99, 'Chocotom vanille', '<h1 class=\"page-title\"><span class=\"base\" data-ui-id=\"page-title-wrapper\">Chocotom vanille</span></h1>', 'Chocotom vanille', '<h1 class=\"page-title\"><span class=\"base\" data-ui-id=\"page-title-wrapper\">Chocotom vanille</span></h1>', 0, 0, 55, '2024-03-31 04:01:11', '2024-03-31 04:01:33'),
(32, 'Chocotom Erdbeere', 'chocotom-erdbeere', 'Chocotom-Erdbeere', 10, 21, 15, 1.6, 0.99, 'Chocotom-Erdbeere', '<p>Chocotom-Erdbeere</p>', 'Chocotom-Erdbeere', '<p>Chocotom-Erdbeere</p>', 0, 0, 55, '2024-03-31 04:02:26', '2024-03-31 04:02:50'),
(33, 'Chocotom Milchschokolade', 'chocotom-milchschokolade', 'Chocotom Milchschokolade', 10, 21, 15, 1.6, 0.99, 'Chocotom Milchschokolade', '<p>Chocotom Milchschokolade</p>', 'Chocotom Milchschokolade', '<p>Chocotom Milchschokolade</p>', 0, 0, 55, '2024-03-31 04:03:39', '2024-03-31 04:04:12'),
(34, 'Chocotom Haselnuss schokolade', 'chocotom-haselnuss-schokolade', 'Haselnuss schokolade', 10, 21, 15, 1.6, 0.99, 'Haselnuss schokolade', '<p>Haselnuss schokolade</p>', 'Haselnuss schokolade', '<p>Haselnuss schokolade</p>', 0, 0, 55, '2024-03-31 04:04:53', '2024-03-31 04:05:23'),
(35, 'Gaufrettes Chocotom schokolade', 'gaufrettes-chocotom-schokolade', 'schokolade', 10, 21, 15, 1.3, 0.8, 'schokolade', '<p>schokolade</p>', 'schokolade', '<p>schokolade</p>', 0, 0, 55, '2024-03-31 04:06:22', '2024-03-31 04:06:47'),
(36, 'Smile Schokolade', 'smile-schokolade', 'Smile Schokolade', 10, 21, 16, 1.5, 0.99, 'Smile Schokolade', '<p>Smile Schokolade</p>', 'Smile Schokolade', '<p>Smile Schokolade</p>', 0, 0, 55, '2024-03-31 04:08:34', '2024-03-31 04:08:59'),
(37, 'Smile Erdberre', 'smile-erdberre', 'Smile Erdberre', 10, 21, 16, 1.5, 0.99, 'Smile Erdberre', '<p>Smile Erdberre</p>', 'Smile Erdberre', '<p>Smile Erdberre</p>', 0, 0, 55, '2024-03-31 04:09:35', '2024-03-31 04:09:59'),
(38, 'Smile Milch', 'smile-milch', 'Smile Milch', 10, 21, 16, 1.5, 0.99, 'Smile Milch', '<p>Smile Milch</p>', 'Smile Milch', '<p>Smile Milch</p>', 0, 0, 55, '2024-03-31 04:10:28', '2024-03-31 04:10:50'),
(39, 'Smile Haselnuss', 'smile-haselnuss', 'Smile Haselnuss', 10, 21, 16, 1.5, 0.99, 'Smile Haselnuss', '<p>Smile Haselnuss</p>', 'Smile Haselnuss', '<p>Smile Haselnuss</p>', 0, 0, 55, '2024-03-31 04:11:23', '2024-03-31 04:11:46'),
(40, 'Harissa', 'harissa', NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, 0, 55, '2024-03-31 04:12:52', '2024-03-31 04:12:52'),
(41, 'Harissa Du Capon x 2', 'harissa-du-capon', 'Harissa Du Capon', 11, 23, 17, 5.5, 3.99, 'Harissa Du Capon', '<p>Harissa Du Capon</p>', 'Harissa Du Capon', '<p>Harissa Du Capon</p>', 0, 0, 55, '2024-03-31 04:13:41', '2024-03-31 04:14:48'),
(42, 'Schmelzkäseaufstrich', 'schmelzkaseaufstrich', 'Schmelzkäseaufstrich', 12, 24, 18, 3.9, 2.2, 'Schmelzkäseaufstrich', '<p>Schmelzk&auml;seaufstrich</p>', 'Schmelzkäseaufstrich', '<p>Schmelzk&auml;seaufstrich</p>', 0, 0, 55, '2024-03-31 04:17:49', '2024-03-31 04:18:17'),
(43, 'Schmelzkäseaufstrich x 48 stuck', 'schmelzkaseaufstrich-x-48-stuck', 'Schmelzkäseaufstrich', 12, 24, 18, 10.99, 7.99, 'Schmelzkäseaufstrich', '<p>Schmelzk&auml;seaufstrich&nbsp;</p>', 'Schmelzkäseaufstrich', '<p>Schmelzk&auml;seaufstrich&nbsp;</p>', 0, 0, 55, '2024-03-31 04:20:34', '2024-03-31 04:21:00'),
(44, 'Oh! Birnen saft 1 Liter', 'oh-birnen-saft-1-liter', 'Oh! Birnen saft 1 Liter', 9, 25, 19, 2.55, 1.8, 'Oh! Birnen saft 1 Liter', '<p>Oh! Birnen saft 1 Liter</p>', 'Oh! Birnen saft 1 Liter', '<p>Oh! Birnen saft 1 Liter</p>', 0, 0, 55, '2024-03-31 04:24:33', '2024-04-03 01:53:35'),
(45, 'Natives Olivenöl extra 1 Liter', 'natives-olivenol-extra', 'Natives Olivenöl extra', 11, 26, 20, 20.55, 10, 'Natives Olivenöl extra', '<p>Natives Oliven&ouml;l extra</p>', 'Natives Olivenöl extra', '<p>Natives Oliven&ouml;l extra</p>', 0, 0, 55, '2024-03-31 04:31:10', '2024-03-31 04:31:45');

-- --------------------------------------------------------

--
-- Table structure for table `product_color`
--

CREATE TABLE `product_color` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `color_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_color`
--

INSERT INTO `product_color` (`id`, `product_id`, `color_id`, `created_at`, `updated_at`) VALUES
(71, 7, 4, '2024-03-11 05:47:13', '2024-03-11 05:47:13'),
(72, 7, 2, '2024-03-11 05:47:13', '2024-03-11 05:47:13'),
(86, 5, 4, '2024-03-12 01:29:35', '2024-03-12 01:29:35'),
(96, 4, 4, '2024-03-12 02:50:35', '2024-03-12 02:50:35'),
(101, 9, 5, '2024-03-12 18:59:31', '2024-03-12 18:59:31'),
(102, 9, 3, '2024-03-12 18:59:31', '2024-03-12 18:59:31'),
(107, 6, 5, '2024-03-24 20:25:39', '2024-03-24 20:25:39'),
(108, 6, 4, '2024-03-24 20:25:39', '2024-03-24 20:25:39'),
(111, 10, 3, '2024-03-24 20:32:41', '2024-03-24 20:32:41'),
(112, 11, 5, '2024-03-25 02:38:03', '2024-03-25 02:38:03'),
(113, 11, 7, '2024-03-25 02:38:03', '2024-03-25 02:38:03'),
(114, 11, 8, '2024-03-25 02:38:03', '2024-03-25 02:38:03'),
(115, 11, 6, '2024-03-25 02:38:03', '2024-03-25 02:38:03'),
(118, 12, 5, '2024-03-25 02:44:21', '2024-03-25 02:44:21'),
(119, 12, 9, '2024-03-25 02:44:21', '2024-03-25 02:44:21'),
(120, 13, 10, '2024-03-25 02:49:53', '2024-03-25 02:49:53'),
(121, 13, 2, '2024-03-25 02:49:53', '2024-03-25 02:49:53'),
(122, 13, 3, '2024-03-25 02:49:53', '2024-03-25 02:49:53'),
(123, 13, 11, '2024-03-25 02:49:53', '2024-03-25 02:49:53'),
(124, 14, 6, '2024-03-25 02:57:04', '2024-03-25 02:57:04'),
(157, 15, 2, '2024-03-25 22:58:14', '2024-03-25 22:58:14'),
(158, 15, 6, '2024-03-25 22:58:14', '2024-03-25 22:58:14'),
(171, 16, 10, '2024-03-26 02:09:45', '2024-03-26 02:09:45'),
(172, 16, 4, '2024-03-26 02:09:45', '2024-03-26 02:09:45'),
(173, 16, 7, '2024-03-26 02:09:45', '2024-03-26 02:09:45'),
(176, 19, 13, '2024-03-30 19:26:19', '2024-03-30 19:26:19'),
(179, 20, 14, '2024-03-30 19:35:45', '2024-03-30 19:35:45'),
(180, 22, 15, '2024-03-31 02:28:54', '2024-03-31 02:28:54');

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE `product_image` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `image_name` varchar(255) DEFAULT NULL,
  `image_extension` varchar(25) DEFAULT NULL,
  `order_by` int(11) DEFAULT 1,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_image`
--

INSERT INTO `product_image` (`id`, `product_id`, `image_name`, `image_extension`, `order_by`, `created_at`, `updated_at`) VALUES
(26, 7, '7poafdqcqio0nc4kaslan.jpg', 'jpg', 100, '2024-03-11 05:47:13', '2024-03-11 05:47:13'),
(27, 7, '7gxrqpgzpzduvvj79b4va.jpg', 'jpg', 100, '2024-03-11 05:47:13', '2024-03-11 05:47:13'),
(28, 7, '7rnmhrfdqat673f56epiy.jpg', 'jpg', 100, '2024-03-11 05:47:13', '2024-03-11 05:47:13'),
(29, 7, '7zbgjyndsccgseidufh0y.jpg', 'jpg', 100, '2024-03-11 05:47:13', '2024-03-11 05:47:13'),
(30, 7, '71l3x6v6iuqykecnpxcfe.jpg', 'jpg', 100, '2024-03-11 05:47:13', '2024-03-11 05:47:13'),
(31, 4, '4kdnzshxnolmgh8o78bxb.jpg', 'jpg', 1, '2024-03-11 17:29:04', '2024-03-12 02:50:15'),
(32, 4, '4ctkvyosnuiscoqubtfni.jpg', 'jpg', 3, '2024-03-11 17:29:04', '2024-03-12 02:50:27'),
(33, 4, '4h7k2zk6kuvldfdafz6la.jpg', 'jpg', 4, '2024-03-11 17:29:04', '2024-03-12 02:50:21'),
(34, 4, '4njm7ypukuj67cosuthqm.jpg', 'jpg', 5, '2024-03-11 17:29:04', '2024-03-12 02:50:15'),
(35, 4, '4daclx2zyl6p6nwkibleo.jpg', 'jpg', 6, '2024-03-11 17:29:04', '2024-03-12 02:50:15'),
(36, 4, '4f2txi4o4giwjl7mpaxgq.jpg', 'jpg', 2, '2024-03-11 17:29:04', '2024-03-12 02:50:27'),
(37, 4, '4k1pvjhdbemzjvtccmrsu.jpg', 'jpg', 7, '2024-03-11 17:29:04', '2024-03-12 02:50:15'),
(38, 5, '5u6ifvocitxmixg5olobb.jpg', 'jpg', 2, '2024-03-12 01:29:35', '2024-03-23 23:09:33'),
(39, 5, '5sysakdr32klbbi5klflz.jpg', 'jpg', 3, '2024-03-12 01:29:35', '2024-03-23 23:09:33'),
(40, 5, '5r8qjqdtpdo6wpapogcyp.jpg', 'jpg', 4, '2024-03-12 01:29:35', '2024-03-23 23:09:33'),
(41, 5, '5qoe5ytucnk8vkoejmt9e.jpg', 'jpg', 1, '2024-03-12 01:29:35', '2024-03-23 23:09:33'),
(42, 5, '52dxudfuky0pjtx7klsbh.jpg', 'jpg', 5, '2024-03-12 01:29:35', '2024-03-23 23:09:33'),
(43, 5, '59yy4gfzfyuqwmomn0sdl.jpg', 'jpg', 6, '2024-03-12 01:29:35', '2024-03-23 23:09:33'),
(44, 9, '9mcfktf2y3ffpktg9izjw.jpg', 'jpg', 4, '2024-03-12 03:22:42', '2024-03-12 19:02:58'),
(45, 9, '95jm1ifca7mpxxmtmaziv.jpg', 'jpg', 5, '2024-03-12 03:22:42', '2024-03-12 18:44:49'),
(46, 9, '9fqxwjqvwvuc1wdiyd9jd.jpg', 'jpg', 4, '2024-03-12 03:22:42', '2024-03-12 19:01:27'),
(47, 9, '98owltwalivmdohq6sdfu.jpg', 'jpg', 2, '2024-03-12 03:22:42', '2024-03-12 19:02:58'),
(48, 9, '94awh8onjqlihfazvzggb.jpg', 'jpg', 3, '2024-03-12 03:22:42', '2024-03-12 18:57:59'),
(49, 9, '9i9qkxdjkmlo9gp3hhbi0.jpg', 'jpg', 3, '2024-03-12 03:22:42', '2024-03-12 18:44:49'),
(50, 9, '9qtnuupwtndfdf1d7ivts.jpg', 'jpg', 5, '2024-03-12 03:22:42', '2024-03-12 19:02:58'),
(51, 6, '6liocm6ck1mdmkzsgysmp.jpg', 'jpg', 1, '2024-03-24 20:20:50', '2024-03-24 20:20:50'),
(52, 6, '6ofy9bnjkecg2vzsk0vop.jpg', 'jpg', 1, '2024-03-24 20:25:39', '2024-03-24 20:25:39'),
(53, 10, '10rogwwnol3mejf6hin3ml.jpg', 'jpg', 2, '2024-03-24 20:27:38', '2024-03-24 20:32:37'),
(54, 10, '10hkcq0pcg6cqpyvonhkzj.jpg', 'jpg', 3, '2024-03-24 20:27:38', '2024-03-24 20:32:37'),
(55, 10, '1039uj7o4jsregtxjx8x5w.jpg', 'jpg', 4, '2024-03-24 20:27:38', '2024-03-24 20:32:37'),
(56, 10, '10rypwlp0w9tzjsziosruz.jpg', 'jpg', 1, '2024-03-24 20:27:38', '2024-03-24 20:27:38'),
(57, 10, '10ogmsodvlicwjvyzvp21i.jpg', 'jpg', 5, '2024-03-24 20:27:38', '2024-03-24 20:32:37'),
(58, 11, '11f7we2gtle5pypb2vbpcb.jpg', 'jpg', 1, '2024-03-25 02:36:24', '2024-03-25 02:36:24'),
(59, 11, '113bmfaafztndjx5tlapkl.jpg', 'jpg', 1, '2024-03-25 02:36:24', '2024-03-25 02:36:24'),
(60, 11, '11ekorj0adxntnuhoknszf.jpg', 'jpg', 1, '2024-03-25 02:36:24', '2024-03-25 02:36:24'),
(61, 11, '11dqlpozi2c82ifid9blzd.jpg', 'jpg', 1, '2024-03-25 02:36:24', '2024-03-25 02:36:24'),
(62, 12, '12j72xzorgit3wtzfmf837.jpg', 'jpg', 2, '2024-03-25 02:44:09', '2024-03-25 02:44:17'),
(63, 12, '12j1mw7unbebwjjaqog9ep.jpg', 'jpg', 1, '2024-03-25 02:44:09', '2024-03-25 02:44:09'),
(64, 13, '13vjnjr4korefne8kcc0ar.jpg', 'jpg', 1, '2024-03-25 02:48:48', '2024-03-25 02:48:48'),
(65, 13, '13r5lfeitbzhcqbtkw3eci.jpg', 'jpg', 1, '2024-03-25 02:48:48', '2024-03-25 02:48:48'),
(66, 13, '134vpalan3hwib4un1qqfh.jpg', 'jpg', 1, '2024-03-25 02:48:48', '2024-03-25 02:48:48'),
(67, 13, '13rktzurllfbsbe3dulhwz.jpg', 'jpg', 1, '2024-03-25 02:48:48', '2024-03-25 02:48:48'),
(68, 14, '145gv9qm5bytji1rxu6l5h.jpg', 'jpg', 1, '2024-03-25 02:57:04', '2024-03-25 02:57:04'),
(69, 15, '15qfaz5va8omofomnaab4k.jpg', 'jpg', 1, '2024-03-25 03:00:12', '2024-03-25 22:56:57'),
(70, 15, '15875nfduzhcbybivkkuxo.jpg', 'jpg', 1, '2024-03-25 03:00:12', '2024-03-25 03:00:12'),
(71, 15, '15niotm6gt6z4eflnucqse.jpg', 'jpg', 2, '2024-03-25 22:56:47', '2024-03-25 22:58:05'),
(72, 15, '15nlzbt9f2k6euo0xagob4.jpg', 'jpg', 1, '2024-03-25 22:57:47', '2024-03-25 22:58:05'),
(73, 16, '16zhx7c1mfqq4w8ogljmlk.jpg', 'jpg', 1, '2024-03-26 00:53:21', '2024-03-26 00:53:21'),
(74, 16, '169h0oeu5duw4vgh2f8bjr.jpg', 'jpg', 1, '2024-03-26 00:53:21', '2024-03-26 00:53:21'),
(75, 16, '16s3cifhnohhxcggd81vrj.jpg', 'jpg', 1, '2024-03-26 00:53:21', '2024-03-26 00:53:21'),
(76, 18, '18owbpzcliqicob2fkp0ys.jpg', 'jpg', 1, '2024-03-30 19:17:23', '2024-03-30 19:17:23'),
(77, 19, '19bj1lbwlgmik0opugmfol.jpg', 'jpg', 2, '2024-03-30 19:25:52', '2024-03-30 19:25:58'),
(78, 19, '195ep2whusosuu33unbris.jpg', 'jpg', 1, '2024-03-30 19:25:52', '2024-03-30 19:25:52'),
(79, 19, '19tdurg0gmu7xzjzkb9dv0.jpg', 'jpg', 3, '2024-03-30 19:25:52', '2024-03-30 19:25:58'),
(80, 19, '19vegm4g0ipjuj19szofwl.jpg', 'jpg', 4, '2024-03-30 19:25:52', '2024-03-30 19:25:58'),
(81, 20, '20kf9zioalhof1drdpdxan.jpg', 'jpg', 1, '2024-03-30 19:33:39', '2024-03-30 19:33:39'),
(82, 20, '20bvmp3f9iufp5gcs6qd1r.jpg', 'jpg', 1, '2024-03-30 19:33:39', '2024-03-30 19:33:39'),
(83, 20, '20scl1nqvtbmp6fzb8czio.jpg', 'jpg', 1, '2024-03-30 19:33:39', '2024-03-30 19:33:39'),
(84, 20, '20jbjznok92w1wtgpwr6w0.jpg', 'jpg', 1, '2024-03-30 19:33:39', '2024-03-30 19:33:39'),
(85, 21, '21iyzzeb9z7o79boht7hmp.jpg', 'jpg', 1, '2024-03-30 23:14:25', '2024-03-30 23:14:25'),
(86, 22, '22gafddjby8vbnx2dgnk5u.jpg', 'jpg', 2, '2024-03-30 23:16:22', '2024-03-30 23:16:52'),
(87, 22, '22gb8ncshl73iiz1rjasu5.jpg', 'jpg', 1, '2024-03-30 23:16:22', '2024-03-30 23:16:22'),
(88, 23, '23qd19o0lqelgximb0v0wm.jpg', 'jpg', 4, '2024-03-30 23:19:13', '2024-03-30 23:22:27'),
(89, 23, '234uih7u0liw7vdgcjwtam.jpg', 'jpg', 2, '2024-03-30 23:19:13', '2024-03-30 23:20:26'),
(90, 23, '23b3phhe0hetucua2augp5.jpg', 'jpg', 1, '2024-03-30 23:20:16', '2024-03-30 23:20:16'),
(91, 23, '23bf430oirqn8aqyqtziev.jpg', 'jpg', 3, '2024-03-30 23:21:37', '2024-03-30 23:22:27'),
(92, 24, '24hejzb9o0peqfrxt4adm1.jpg', 'jpg', 1, '2024-03-30 23:31:51', '2024-03-30 23:31:51'),
(93, 24, '24zfx67b2m1jok9tz3dtwe.jpg', 'jpg', 1, '2024-03-30 23:32:52', '2024-03-30 23:32:52'),
(94, 25, '25pzp5rih0v0qw2b72cryg.jpg', 'jpg', 1, '2024-03-30 23:38:50', '2024-03-30 23:38:50'),
(95, 27, '27dzmghptq9foiprygpcit.jpg', 'jpg', 1, '2024-03-31 03:49:11', '2024-03-31 03:49:11'),
(96, 28, '28mcolhc4zutm5bsvpv5lu.jpg', 'jpg', 1, '2024-03-31 03:53:06', '2024-03-31 03:53:06'),
(97, 29, '29nlyo6dir72swynpdjxdh.jpg', 'jpg', 1, '2024-03-31 03:54:35', '2024-03-31 03:54:35'),
(98, 30, '30j2xohbrogy0625roi8dx.jpg', 'jpg', 1, '2024-03-31 04:00:12', '2024-03-31 04:00:12'),
(99, 31, '31wexaftgxnlerwax7dr3p.jpg', 'jpg', 1, '2024-03-31 04:01:33', '2024-03-31 04:01:33'),
(100, 32, '32y5ztiragwuhqjq9jzzeh.jpg', 'jpg', 1, '2024-03-31 04:02:50', '2024-03-31 04:02:50'),
(101, 33, '33omdbsc4xbzvufapfwyrh.jpg', 'jpg', 1, '2024-03-31 04:04:12', '2024-03-31 04:04:12'),
(102, 34, '34pxea7vqcqy9l21ctoguv.jpg', 'jpg', 1, '2024-03-31 04:05:23', '2024-03-31 04:05:23'),
(103, 35, '35bcfwfe5ovnrw8qbxafon.png', 'png', 1, '2024-03-31 04:06:47', '2024-03-31 04:06:47'),
(104, 36, '36b7chz8es1yputrk6b0nj.jpg', 'jpg', 1, '2024-03-31 04:08:59', '2024-03-31 04:08:59'),
(105, 37, '377netfud9mapfq8ilpd32.jpg', 'jpg', 1, '2024-03-31 04:09:59', '2024-03-31 04:09:59'),
(106, 38, '38useasvkcrnaiv46oxnqi.jpg', 'jpg', 1, '2024-03-31 04:10:50', '2024-03-31 04:10:50'),
(107, 39, '39oxnjsfyom1wurhfdsdil.jpg', 'jpg', 1, '2024-03-31 04:11:46', '2024-03-31 04:11:46'),
(108, 41, '41tgggx9j3bowumzxty6lu.jpg', 'jpg', 1, '2024-03-31 04:14:48', '2024-03-31 04:14:48'),
(109, 42, '42ihttrkgrykeetwyzbc3t.jpg', 'jpg', 1, '2024-03-31 04:18:17', '2024-03-31 04:18:17'),
(110, 43, '43bv6x6wfp48m4dnttfzzz.jpg', 'jpg', 1, '2024-03-31 04:21:00', '2024-03-31 04:21:00'),
(111, 44, '44nfxlpudeydp9ikbk3x8z.jpg', 'jpg', 1, '2024-03-31 04:25:00', '2024-03-31 04:25:00'),
(112, 45, '45umtvwxwk47qas9z1attt.jpg', 'jpg', 1, '2024-03-31 04:31:45', '2024-03-31 04:31:45');

-- --------------------------------------------------------

--
-- Table structure for table `product_size`
--

CREATE TABLE `product_size` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` float NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_size`
--

INSERT INTO `product_size` (`id`, `product_id`, `name`, `price`, `created_at`, `updated_at`) VALUES
(85, 7, '1.8', 2, '2024-03-11 05:47:13', '2024-03-11 05:47:13'),
(86, 7, '1.9', 0, '2024-03-11 05:47:13', '2024-03-11 05:47:13'),
(87, 7, '1.5', 0, '2024-03-11 05:47:13', '2024-03-11 05:47:13'),
(113, 5, 'qfs', 2600, '2024-03-12 01:29:35', '2024-03-12 01:29:35'),
(141, 4, '1.8', 6659, '2024-03-12 02:50:35', '2024-03-12 02:50:35'),
(154, 9, '1.8', 2600, '2024-03-12 18:59:31', '2024-03-12 18:59:31'),
(155, 9, '1.9', 2690, '2024-03-12 18:59:31', '2024-03-12 18:59:31'),
(156, 9, '2.2', 3500, '2024-03-12 18:59:31', '2024-03-12 18:59:31'),
(161, 6, '1.8', 2600, '2024-03-24 20:25:39', '2024-03-24 20:25:39'),
(162, 6, '1.9', 2800, '2024-03-24 20:25:39', '2024-03-24 20:25:39'),
(183, 15, '44.5', 65, '2024-03-25 22:58:14', '2024-03-25 22:58:14'),
(184, 15, '43', 72, '2024-03-25 22:58:14', '2024-03-25 22:58:14'),
(185, 15, '40', 0, '2024-03-25 22:58:14', '2024-03-25 22:58:14'),
(192, 16, 'S', 0, '2024-03-26 02:09:45', '2024-03-26 02:09:45'),
(193, 16, 'M', 15, '2024-03-26 02:09:45', '2024-03-26 02:09:45'),
(194, 16, 'XL', 20, '2024-03-26 02:09:45', '2024-03-26 02:09:45'),
(197, 18, '1.5 L', 0.5, '2024-03-30 19:18:14', '2024-03-30 19:18:14'),
(199, 19, 'M', 0, '2024-03-30 19:26:19', '2024-03-30 19:26:19'),
(200, 19, 'L', 15, '2024-03-30 19:26:19', '2024-03-30 19:26:19'),
(201, 19, 'XL', 25, '2024-03-30 19:26:19', '2024-03-30 19:26:19'),
(208, 20, 'M', 0, '2024-03-30 19:35:45', '2024-03-30 19:35:45'),
(209, 20, 'L', 20, '2024-03-30 19:35:45', '2024-03-30 19:35:45'),
(210, 20, 'XXL', 35, '2024-03-30 19:35:45', '2024-03-30 19:35:45'),
(211, 21, '1.5 L', 0.5, '2024-03-30 23:14:25', '2024-03-30 23:14:25'),
(226, 22, '1.5 L', 0.5, '2024-03-31 02:28:54', '2024-03-31 02:28:54'),
(227, 22, '2.0 L', 0.75, '2024-03-31 02:28:54', '2024-03-31 02:28:54');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_charge`
--

CREATE TABLE `shipping_charge` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` double NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `is_delete` tinyint(4) DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shipping_charge`
--

INSERT INTO `shipping_charge` (`id`, `name`, `price`, `status`, `is_delete`, `created_at`, `updated_at`) VALUES
(1, '0', 525, 0, 1, '0000-00-00 00:00:00', '2024-03-30 00:05:14'),
(2, '0', 522, 0, 1, '0000-00-00 00:00:00', '2024-03-30 00:05:12'),
(3, '0', 200, 0, 1, '0000-00-00 00:00:00', '2024-03-30 00:05:08'),
(4, 'cosx', 20, 1, 1, '0000-00-00 00:00:00', '2024-03-30 00:14:31'),
(5, 'admin', 522, 0, 1, '2024-03-30 00:14:37', '2024-03-30 00:47:14'),
(6, 'DHL', 10, 0, 1, '2024-03-30 00:46:01', '2024-03-30 00:51:00'),
(7, 'Hermes', 8, 0, 1, '2024-03-30 00:47:27', '2024-03-30 00:51:01'),
(8, 'DHL', 5, 0, 0, '2024-03-30 00:51:13', '2024-03-31 19:06:27'),
(9, 'Hermes', 4, 0, 0, '2024-03-30 00:51:44', '2024-03-31 19:06:19');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `description` varchar(20) DEFAULT NULL,
  `description2` varchar(20) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 0,
  `is_delete` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `name`, `photo`, `description`, `description2`, `link`, `created_by`, `status`, `is_delete`, `created_at`, `updated_at`) VALUES
(7, 'Boga Cidre 1.5 L', '660a0f5e91306.jpg', '100% Tunesische', 'Produkt .', 'http://127.0.0.1:8000/boga-1l', 55, 0, 0, '2024-03-31 23:26:28', '2024-04-01 01:35:26');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 0,
  `is_delete` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `category_id`, `name`, `slug`, `meta_title`, `meta_description`, `meta_keywords`, `created_by`, `status`, `is_delete`, `created_at`, `updated_at`) VALUES
(15, 6, 'Boga Cidre', 'BogaCidre', 'BogaCidre', 'BogaCidre', 'BogaCidre', 53, 0, 0, '2024-03-30 18:57:29', '2024-03-30 18:57:29'),
(18, 9, 'Gazouz', 'Gazouz', 'Gazouz', 'Gazouz', 'Gazouz', 55, 0, 0, '2024-03-30 23:11:44', '2024-03-30 23:11:44'),
(19, 10, 'Kuchen und Torten', 'KuchenundTorten', 'Kuchen und Torten', 'Kuchen und Torten', 'Kuchen und Torten', 55, 0, 0, '2024-03-30 23:29:11', '2024-03-30 23:29:11'),
(20, 11, 'Tomaten', 'Tomaten', 'Tomaten', 'Tomaten', 'Tomaten', 55, 0, 0, '2024-03-30 23:37:28', '2024-03-30 23:37:28'),
(21, 10, 'kekse', 'kekse', 'kekse', 'kekse', 'kekse', 55, 0, 0, '2024-03-31 03:58:31', '2024-03-31 03:58:31'),
(22, 10, 'Kif', 'Kif', 'Kif', 'Kif', 'Kif', 55, 0, 1, '2024-03-31 04:07:42', '2024-03-31 04:07:56'),
(23, 11, 'Harissa', 'Harissa', 'Harissa', 'Harissa', 'Harissa', 55, 0, 0, '2024-03-31 04:13:19', '2024-03-31 04:13:19'),
(24, 12, 'Käse', 'Käse', 'Käse', 'Käse', 'Käse', 55, 0, 0, '2024-03-31 04:17:12', '2024-03-31 04:17:12'),
(25, 9, 'Saft', 'Saft', 'Saft', 'Saft', 'Saft', 55, 0, 0, '2024-03-31 04:23:44', '2024-03-31 04:23:44'),
(26, 11, 'Olivenöl', 'Olivenöl', 'Olivenöl', 'Olivenöl', 'Olivenöl', 55, 0, 0, '2024-03-31 04:30:47', '2024-03-31 04:30:47');

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
  `is_admin` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0:customer, 1:admin',
  `photo` varchar(255) DEFAULT NULL,
  `IsActive` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0:active, 1:inactive',
  `is_delete` int(11) NOT NULL DEFAULT 0 COMMENT '0:not, 1:deleted',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `is_admin`, `photo`, `IsActive`, `status`, `is_delete`, `created_at`, `updated_at`) VALUES
(55, 'Mohamed', 'admin@gmail.com', NULL, '$2y$12$qEJ/N00LTJ.PeXVolont/.J2pzM6UT0JnVZT9nQReTjF2cCU23/Fm', NULL, 1, '660878a6d9c80.jpg', 1, 0, 0, '2024-03-30 19:10:30', '2024-03-30 19:40:06'),
(68, 'test', 'test@gmail.com', '2024-04-02 00:09:57', '$2y$12$m3QsIrNLyR/YVMHDxLZgd.Th8zjNKCVhDrzYl1ENFJBRd/8NOMNsS', 'QDYaq3UwU7j895fNWsQaNfxeAMV1Ts', 0, NULL, 0, 0, 0, '2024-04-01 22:36:13', '2024-04-06 15:45:46'),
(69, 'user', 'user@gmail.com', '2024-04-03 21:12:23', '$2y$12$z.K/tX79bYMf17S8hvAAvOU.3.JX4HQKUGPOZTsT3UgTLe4PObId2', 'mNWpNpyPOR8KpVoZN4LVUr77XoxVJdSJU8IyK9hDrNijAnPCI5MNalfW7jnQ', 0, NULL, 0, 0, 0, '2024-04-01 22:37:15', '2024-04-03 21:12:23'),
(70, 'test2', 'test2@gmail.com', '2024-04-02 00:11:27', '$2y$12$ixBBAB.gXaUh5AAArJVmdOtJEYEDY2hIIqEWMwsGtTauC2G.XB6.q', 'DM6zfFJ9WjblUL3Mq2XPjpcxYoGcpU', 0, NULL, 0, 0, 0, '2024-04-02 00:10:57', '2024-04-03 19:05:19'),
(71, 'Mzoughi', 'fitmed8@gmail.com', '2024-04-04 00:57:53', '$2y$12$aQvtgzSjAXtwtNJ1gG5i3eyyndJWoaTUFDz3ZoUx4rk/qWQh7V2bu', NULL, 0, NULL, 0, 0, 0, '2024-04-04 00:56:40', '2024-04-04 00:57:53'),
(72, 'med', 'user2@gmail.com', NULL, '$2y$12$FlloEe/NfaYqXXPHhhn1a..4DXOkPz32muONBEDGWO7sJAm0jFqqm', NULL, 0, NULL, 0, 0, 0, '2024-04-06 23:49:15', '2024-04-06 23:49:15'),
(73, 'test', 'test511@gmail.com', NULL, '$2y$12$dZnrG5gIwaw3syDtbCFM7OU7D3veQuTHxXo/7rC4eg9fgWjMFVTi2', NULL, 0, NULL, 0, 0, 0, '2024-04-06 23:50:08', '2024-04-06 23:50:08'),
(74, 'test', 'test511ee@gmail.com', NULL, '$2y$12$miD5Mnd.69R86mcOoQFj3uxfMWIDQp9yyJLG4AF8SMudU8i8uCUV6', NULL, 0, NULL, 0, 0, 0, '2024-04-06 23:50:53', '2024-04-06 23:50:53'),
(75, 'tes', 'test59656@il.tf', NULL, '$2y$12$0PjD1HWGKvSXsIpk.UtEV.n1MO2GFwjKdflFzaIfTPjR/UlZx7Gye', NULL, 0, NULL, 0, 0, 0, '2024-04-06 23:53:12', '2024-04-06 23:53:12'),
(76, 'tes', 'test59656efefefefef@il.tf', NULL, '$2y$12$RUUGFQ3dlDXHhosTuvbBgeX4wLP10LxCjF8gPMcZE05B5zhAOvrbK', NULL, 0, NULL, 0, 0, 0, '2024-04-06 23:54:10', '2024-04-06 23:54:10'),
(77, 'tes', 'test59656efefefefddddef@il.tf', NULL, '$2y$12$6S8AFU3UatjFzq70kez1g.UTfS.s4dC4gGR0IaR0PJ7wSvfV6xB32', NULL, 0, NULL, 0, 0, 0, '2024-04-06 23:56:53', '2024-04-06 23:56:53'),
(78, 'tes', 'xdzeddddef@il.tf', NULL, '$2y$12$ucRBYSF.LMZDWdOo1h004eTAbug/Je5SWx7nsbSB07EmrSGxn0mai', NULL, 0, NULL, 0, 0, 0, '2024-04-06 23:57:12', '2024-04-06 23:57:12'),
(79, 'tes', 'xdzeddddesddsdsf@il.tf', NULL, '$2y$12$asX92i6.4YaZ3Iquv3eTROwI/pOdi1IH8.vubtmMIrj7AjVgyDqcq', NULL, 0, NULL, 0, 0, 0, '2024-04-07 00:00:45', '2024-04-07 00:00:45'),
(80, 'tes', 'xdzeddddesddssdsddsdsf@il.tf', NULL, '$2y$12$9HEN7PSclIEdWU.YV.F5EOzDBGlRGk6m.RWEYORKIdWYWz37vCuC.', NULL, 0, NULL, 0, 0, 0, '2024-04-07 00:01:08', '2024-04-07 00:01:08'),
(81, 'test', 'test65@gt.gt', NULL, '$2y$12$sBzcioZVg3UF2a4mIOCOsOA5MbnITYq96QnPJPxBlp9chaNbsJjKK', NULL, 0, NULL, 0, 0, 0, '2024-04-07 00:08:09', '2024-04-07 00:08:09'),
(82, 'test', 'test65ezez@gt.gt', NULL, '$2y$12$k/M6fnoa5UP27SgdU8lEJeZq1lhyErMcH0nteawExC4hO75/hcFjy', NULL, 0, NULL, 0, 0, 0, '2024-04-07 00:11:23', '2024-04-07 00:11:23'),
(83, 'test', 'fitmed2081@gmail.com', NULL, '$2y$12$VdSuy660A2/09HP6R/sKfuTWzSkcWwFkMsQkkWe2/sEr1nrEbeXjK', NULL, 0, NULL, 0, 0, 0, '2024-04-07 00:16:09', '2024-04-07 00:16:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discount_code`
--
ALTER TABLE `discount_code`
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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_item`
--
ALTER TABLE `orders_item`
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
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_color`
--
ALTER TABLE `product_color`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_size`
--
ALTER TABLE `product_size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping_charge`
--
ALTER TABLE `shipping_charge`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
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
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `discount_code`
--
ALTER TABLE `discount_code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `orders_item`
--
ALTER TABLE `orders_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `product_color`
--
ALTER TABLE `product_color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- AUTO_INCREMENT for table `product_image`
--
ALTER TABLE `product_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `product_size`
--
ALTER TABLE `product_size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=228;

--
-- AUTO_INCREMENT for table `shipping_charge`
--
ALTER TABLE `shipping_charge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
