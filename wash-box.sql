-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2021 at 12:49 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wash-box`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `area_id` bigint(20) UNSIGNED NOT NULL,
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lng` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `build` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `floor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apartment_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `client_id`, `area_id`, `city_id`, `name`, `lat`, `lng`, `street`, `build`, `floor`, `apartment_number`, `notes`, `phone`, `created_at`, `updated_at`) VALUES
(2, 2, 2, 1, NULL, '12345', '123456', 'aaa', '12a', '9', '2', 'aaa', '01015960452', '2021-02-20 20:24:01', '2021-02-20 20:24:01');

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`id`, `city_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-02-20 19:42:57', '2021-02-20 19:42:57'),
(2, 1, '2021-02-20 19:42:57', '2021-02-20 19:42:57'),
(3, 1, '2021-02-20 19:42:58', '2021-02-20 19:42:58'),
(4, 1, '2021-02-20 19:42:58', '2021-02-20 19:42:58'),
(5, 1, '2021-02-20 19:42:58', '2021-02-20 19:42:58'),
(6, 2, '2021-02-20 19:42:58', '2021-02-20 19:42:58'),
(7, 2, '2021-02-20 19:42:59', '2021-02-20 19:42:59'),
(8, 2, '2021-02-20 19:42:59', '2021-02-20 19:42:59'),
(9, 2, '2021-02-20 19:42:59', '2021-02-20 19:42:59'),
(10, 2, '2021-02-20 19:42:59', '2021-02-20 19:42:59'),
(11, 3, '2021-02-20 19:43:00', '2021-02-20 19:43:00'),
(12, 3, '2021-02-20 19:43:00', '2021-02-20 19:43:00'),
(13, 3, '2021-02-20 19:43:00', '2021-02-20 19:43:00'),
(14, 3, '2021-02-20 19:43:00', '2021-02-20 19:43:00'),
(15, 3, '2021-02-20 19:43:00', '2021-02-20 19:43:00'),
(16, 4, '2021-02-20 19:43:01', '2021-02-20 19:43:01'),
(17, 4, '2021-02-20 19:43:01', '2021-02-20 19:43:01'),
(18, 4, '2021-02-20 19:43:01', '2021-02-20 19:43:01'),
(19, 4, '2021-02-20 19:43:01', '2021-02-20 19:43:01'),
(20, 4, '2021-02-20 19:43:02', '2021-02-20 19:43:02');

-- --------------------------------------------------------

--
-- Table structure for table `area_translations`
--

CREATE TABLE `area_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `area_translations`
--

INSERT INTO `area_translations` (`id`, `name`, `locale`, `area_id`, `created_at`, `updated_at`) VALUES
(1, ' منقطه0', 'ar', 1, '2021-02-20 19:42:57', '2021-02-20 19:42:57'),
(2, 'area 0', 'en', 1, '2021-02-20 19:42:57', '2021-02-20 19:42:57'),
(3, ' منقطه1', 'ar', 2, '2021-02-20 19:42:57', '2021-02-20 19:42:57'),
(4, 'area 1', 'en', 2, '2021-02-20 19:42:57', '2021-02-20 19:42:57'),
(5, ' منقطه2', 'ar', 3, '2021-02-20 19:42:58', '2021-02-20 19:42:58'),
(6, 'area 2', 'en', 3, '2021-02-20 19:42:58', '2021-02-20 19:42:58'),
(7, ' منقطه3', 'ar', 4, '2021-02-20 19:42:58', '2021-02-20 19:42:58'),
(8, 'area 3', 'en', 4, '2021-02-20 19:42:58', '2021-02-20 19:42:58'),
(9, ' منقطه4', 'ar', 5, '2021-02-20 19:42:58', '2021-02-20 19:42:58'),
(10, 'area 4', 'en', 5, '2021-02-20 19:42:58', '2021-02-20 19:42:58'),
(11, ' منقطه0', 'ar', 6, '2021-02-20 19:42:58', '2021-02-20 19:42:58'),
(12, 'area 0', 'en', 6, '2021-02-20 19:42:58', '2021-02-20 19:42:58'),
(13, ' منقطه1', 'ar', 7, '2021-02-20 19:42:59', '2021-02-20 19:42:59'),
(14, 'area 1', 'en', 7, '2021-02-20 19:42:59', '2021-02-20 19:42:59'),
(15, ' منقطه2', 'ar', 8, '2021-02-20 19:42:59', '2021-02-20 19:42:59'),
(16, 'area 2', 'en', 8, '2021-02-20 19:42:59', '2021-02-20 19:42:59'),
(17, ' منقطه3', 'ar', 9, '2021-02-20 19:42:59', '2021-02-20 19:42:59'),
(18, 'area 3', 'en', 9, '2021-02-20 19:42:59', '2021-02-20 19:42:59'),
(19, ' منقطه4', 'ar', 10, '2021-02-20 19:42:59', '2021-02-20 19:42:59'),
(20, 'area 4', 'en', 10, '2021-02-20 19:42:59', '2021-02-20 19:42:59'),
(21, ' منقطه0', 'ar', 11, '2021-02-20 19:43:00', '2021-02-20 19:43:00'),
(22, 'area 0', 'en', 11, '2021-02-20 19:43:00', '2021-02-20 19:43:00'),
(23, ' منقطه1', 'ar', 12, '2021-02-20 19:43:00', '2021-02-20 19:43:00'),
(24, 'area 1', 'en', 12, '2021-02-20 19:43:00', '2021-02-20 19:43:00'),
(25, ' منقطه2', 'ar', 13, '2021-02-20 19:43:00', '2021-02-20 19:43:00'),
(26, 'area 2', 'en', 13, '2021-02-20 19:43:00', '2021-02-20 19:43:00'),
(27, ' منقطه3', 'ar', 14, '2021-02-20 19:43:00', '2021-02-20 19:43:00'),
(28, 'area 3', 'en', 14, '2021-02-20 19:43:00', '2021-02-20 19:43:00'),
(29, ' منقطه4', 'ar', 15, '2021-02-20 19:43:01', '2021-02-20 19:43:01'),
(30, 'area 4', 'en', 15, '2021-02-20 19:43:01', '2021-02-20 19:43:01'),
(31, ' منقطه0', 'ar', 16, '2021-02-20 19:43:01', '2021-02-20 19:43:01'),
(32, 'area 0', 'en', 16, '2021-02-20 19:43:01', '2021-02-20 19:43:01'),
(33, ' منقطه1', 'ar', 17, '2021-02-20 19:43:01', '2021-02-20 19:43:01'),
(34, 'area 1', 'en', 17, '2021-02-20 19:43:01', '2021-02-20 19:43:01'),
(35, ' منقطه2', 'ar', 18, '2021-02-20 19:43:01', '2021-02-20 19:43:01'),
(36, 'area 2', 'en', 18, '2021-02-20 19:43:01', '2021-02-20 19:43:01'),
(37, ' منقطه3', 'ar', 19, '2021-02-20 19:43:02', '2021-02-20 19:43:02'),
(38, 'area 3', 'en', 19, '2021-02-20 19:43:02', '2021-02-20 19:43:02'),
(39, ' منقطه4', 'ar', 20, '2021-02-20 19:43:02', '2021-02-20 19:43:02'),
(40, 'area 4', 'en', 20, '2021-02-20 19:43:02', '2021-02-20 19:43:02');

-- --------------------------------------------------------

--
-- Table structure for table `balances`
--

CREATE TABLE `balances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `balance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `payment_data` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_object` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`payment_object`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `balances`
--

INSERT INTO `balances` (`id`, `client_id`, `balance`, `payment_data`, `payment_object`, `created_at`, `updated_at`) VALUES
(1, 2, '150', NULL, NULL, '2021-02-20 20:52:20', '2021-02-20 20:52:20'),
(2, 2, '250', NULL, NULL, '2021-02-20 20:52:34', '2021-02-20 20:52:34');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `created_at`, `updated_at`) VALUES
(1, '2021-02-20 19:42:56', '2021-02-20 19:42:56'),
(2, '2021-02-20 19:42:58', '2021-02-20 19:42:58'),
(3, '2021-02-20 19:42:59', '2021-02-20 19:42:59'),
(4, '2021-02-20 19:43:01', '2021-02-20 19:43:01');

-- --------------------------------------------------------

--
-- Table structure for table `city_translations`
--

CREATE TABLE `city_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `city_translations`
--

INSERT INTO `city_translations` (`id`, `name`, `locale`, `city_id`, `created_at`, `updated_at`) VALUES
(1, ' مدينه 0', 'ar', 1, '2021-02-20 19:42:57', '2021-02-20 19:42:57'),
(2, 'City  0', 'en', 1, '2021-02-20 19:42:57', '2021-02-20 19:42:57'),
(3, ' مدينه 1', 'ar', 2, '2021-02-20 19:42:58', '2021-02-20 19:42:58'),
(4, 'City  1', 'en', 2, '2021-02-20 19:42:58', '2021-02-20 19:42:58'),
(5, ' مدينه 2', 'ar', 3, '2021-02-20 19:42:59', '2021-02-20 19:42:59'),
(6, 'City  2', 'en', 3, '2021-02-20 19:42:59', '2021-02-20 19:42:59'),
(7, ' مدينه 3', 'ar', 4, '2021-02-20 19:43:01', '2021-02-20 19:43:01'),
(8, 'City  3', 'en', 4, '2021-02-20 19:43:01', '2021-02-20 19:43:01');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `balance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `api_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fcm_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'en',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `mobile`, `email`, `password`, `balance`, `name`, `image`, `api_token`, `fcm_token`, `locale`, `created_at`, `updated_at`) VALUES
(2, '01015960452', 'medoeid50@gmail.com', '$2y$10$P8WQJlj5trV1vh3xtAjO3.qp87vqIZiItSmszUtH23NBHu22KtM8G', '400', 'Mohamed Eid', NULL, 'mJpTP8eX77VWeSzDglmRrFlbqyqhcsULPx57LNdJmJVMwFYAilV7d3J2F6Ux8YJ6uE85CCPwH5URjX3hxC0Y0wu6RkRNfS1KcoTk', '12345678', 'en', '2021-02-20 18:47:24', '2021-02-20 20:52:34');

-- --------------------------------------------------------

--
-- Table structure for table `client_package`
--

CREATE TABLE `client_package` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `package_id` bigint(20) UNSIGNED NOT NULL,
  `expire_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client_package`
--

INSERT INTO `client_package` (`id`, `client_id`, `package_id`, `expire_date`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '2021-02-20', NULL, NULL),
(3, 2, 1, '2021-05-20', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2021_02_17_131945_create_packages_table', 1),
(10, '2021_02_17_132012_create_package_translations_table', 1),
(15, '2021_02_17_141023_create_services_table', 2),
(16, '2021_02_17_141409_create_service_translations_table', 2),
(17, '2021_02_20_183541_create_prices_table', 2),
(18, '2021_02_20_184036_create_price_translations_table', 2),
(20, '2021_02_20_193020_create_clients_table', 3),
(21, '2021_02_20_212655_create_cities_table', 4),
(22, '2021_02_20_213021_create_city_translations_table', 4),
(23, '2021_02_20_213107_create_areas_table', 4),
(24, '2021_02_20_213124_create_area_translations_table', 4),
(26, '2021_02_20_215256_create_addresses_table', 5),
(27, '2021_02_20_223807_create_balances_table', 6),
(28, '2021_02_20_231206_create_client_package_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `discount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subscription_term` int(11) DEFAULT 0,
  `number_of_pieces` int(11) DEFAULT 0,
  `number_of_visits` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `price`, `discount`, `image`, `subscription_term`, `number_of_pieces`, `number_of_visits`, `created_at`, `updated_at`) VALUES
(1, '350', '0', 'RqB23pWLHT3vTMGqKMCmVjJ2VoRO7cTwSqgxEi9f.jpg', 3, 50, 50, '2021-02-17 11:49:20', '2021-02-17 11:49:20');

-- --------------------------------------------------------

--
-- Table structure for table `package_translations`
--

CREATE TABLE `package_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `package_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `package_translations`
--

INSERT INTO `package_translations` (`id`, `name`, `description`, `locale`, `package_id`, `created_at`, `updated_at`) VALUES
(1, 'باقه 1', '<p>لوريم</p>', 'ar', 1, '2021-02-17 11:49:21', '2021-02-17 11:49:21'),
(2, 'package 1', '<p>lorem</p>', 'en', 1, '2021-02-17 11:49:21', '2021-02-17 11:49:21');

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
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `normal_cost` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `quick_cost` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`id`, `normal_cost`, `quick_cost`, `service_id`, `created_at`, `updated_at`) VALUES
(2, '40', '30', 2, '2021-02-20 17:06:02', '2021-02-20 17:06:02'),
(3, '42', '33', 2, '2021-02-20 17:06:03', '2021-02-20 17:06:03'),
(4, '44', '36', 2, '2021-02-20 17:06:03', '2021-02-20 17:06:03'),
(5, '46', '39', 2, '2021-02-20 17:06:03', '2021-02-20 17:06:03'),
(6, '48', '42', 2, '2021-02-20 17:06:03', '2021-02-20 17:06:03'),
(7, '40', '30', 3, '2021-02-20 17:06:04', '2021-02-20 17:06:04'),
(8, '42', '33', 3, '2021-02-20 17:06:04', '2021-02-20 17:06:04'),
(9, '44', '36', 3, '2021-02-20 17:06:04', '2021-02-20 17:06:04'),
(10, '46', '39', 3, '2021-02-20 17:06:05', '2021-02-20 17:06:05'),
(11, '48', '42', 3, '2021-02-20 17:06:05', '2021-02-20 17:06:05'),
(12, '40', '30', 4, '2021-02-20 17:06:05', '2021-02-20 17:06:05'),
(13, '42', '33', 4, '2021-02-20 17:06:05', '2021-02-20 17:06:05'),
(14, '44', '36', 4, '2021-02-20 17:06:06', '2021-02-20 17:06:06'),
(15, '46', '39', 4, '2021-02-20 17:06:06', '2021-02-20 17:06:06'),
(16, '48', '42', 4, '2021-02-20 17:06:06', '2021-02-20 17:06:06'),
(17, '40', '30', 5, '2021-02-20 17:06:07', '2021-02-20 17:06:07'),
(18, '42', '33', 5, '2021-02-20 17:06:07', '2021-02-20 17:06:07'),
(19, '44', '36', 5, '2021-02-20 17:06:07', '2021-02-20 17:06:07'),
(20, '46', '39', 5, '2021-02-20 17:06:07', '2021-02-20 17:06:07'),
(21, '48', '42', 5, '2021-02-20 17:06:08', '2021-02-20 17:06:08');

-- --------------------------------------------------------

--
-- Table structure for table `price_translations`
--

CREATE TABLE `price_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `price_translations`
--

INSERT INTO `price_translations` (`id`, `name`, `locale`, `price_id`, `created_at`, `updated_at`) VALUES
(2, ' توع الغسيل0', 'ar', 2, '2021-02-20 17:06:02', '2021-02-20 17:06:02'),
(3, '8sil type 0', 'en', 2, '2021-02-20 17:06:02', '2021-02-20 17:06:02'),
(4, ' توع الغسيل1', 'ar', 3, '2021-02-20 17:06:03', '2021-02-20 17:06:03'),
(5, '8sil type 1', 'en', 3, '2021-02-20 17:06:03', '2021-02-20 17:06:03'),
(6, ' توع الغسيل2', 'ar', 4, '2021-02-20 17:06:03', '2021-02-20 17:06:03'),
(7, '8sil type 2', 'en', 4, '2021-02-20 17:06:03', '2021-02-20 17:06:03'),
(8, ' توع الغسيل3', 'ar', 5, '2021-02-20 17:06:03', '2021-02-20 17:06:03'),
(9, '8sil type 3', 'en', 5, '2021-02-20 17:06:03', '2021-02-20 17:06:03'),
(10, ' توع الغسيل4', 'ar', 6, '2021-02-20 17:06:04', '2021-02-20 17:06:04'),
(11, '8sil type 4', 'en', 6, '2021-02-20 17:06:04', '2021-02-20 17:06:04'),
(12, ' توع الغسيل0', 'ar', 7, '2021-02-20 17:06:04', '2021-02-20 17:06:04'),
(13, '8sil type 0', 'en', 7, '2021-02-20 17:06:04', '2021-02-20 17:06:04'),
(14, ' توع الغسيل1', 'ar', 8, '2021-02-20 17:06:04', '2021-02-20 17:06:04'),
(15, '8sil type 1', 'en', 8, '2021-02-20 17:06:04', '2021-02-20 17:06:04'),
(16, ' توع الغسيل2', 'ar', 9, '2021-02-20 17:06:04', '2021-02-20 17:06:04'),
(17, '8sil type 2', 'en', 9, '2021-02-20 17:06:05', '2021-02-20 17:06:05'),
(18, ' توع الغسيل3', 'ar', 10, '2021-02-20 17:06:05', '2021-02-20 17:06:05'),
(19, '8sil type 3', 'en', 10, '2021-02-20 17:06:05', '2021-02-20 17:06:05'),
(20, ' توع الغسيل4', 'ar', 11, '2021-02-20 17:06:05', '2021-02-20 17:06:05'),
(21, '8sil type 4', 'en', 11, '2021-02-20 17:06:05', '2021-02-20 17:06:05'),
(22, ' توع الغسيل0', 'ar', 12, '2021-02-20 17:06:05', '2021-02-20 17:06:05'),
(23, '8sil type 0', 'en', 12, '2021-02-20 17:06:05', '2021-02-20 17:06:05'),
(24, ' توع الغسيل1', 'ar', 13, '2021-02-20 17:06:06', '2021-02-20 17:06:06'),
(25, '8sil type 1', 'en', 13, '2021-02-20 17:06:06', '2021-02-20 17:06:06'),
(26, ' توع الغسيل2', 'ar', 14, '2021-02-20 17:06:06', '2021-02-20 17:06:06'),
(27, '8sil type 2', 'en', 14, '2021-02-20 17:06:06', '2021-02-20 17:06:06'),
(28, ' توع الغسيل3', 'ar', 15, '2021-02-20 17:06:06', '2021-02-20 17:06:06'),
(29, '8sil type 3', 'en', 15, '2021-02-20 17:06:06', '2021-02-20 17:06:06'),
(30, ' توع الغسيل4', 'ar', 16, '2021-02-20 17:06:06', '2021-02-20 17:06:06'),
(31, '8sil type 4', 'en', 16, '2021-02-20 17:06:06', '2021-02-20 17:06:06'),
(32, ' توع الغسيل0', 'ar', 17, '2021-02-20 17:06:07', '2021-02-20 17:06:07'),
(33, '8sil type 0', 'en', 17, '2021-02-20 17:06:07', '2021-02-20 17:06:07'),
(34, ' توع الغسيل1', 'ar', 18, '2021-02-20 17:06:07', '2021-02-20 17:06:07'),
(35, '8sil type 1', 'en', 18, '2021-02-20 17:06:07', '2021-02-20 17:06:07'),
(36, ' توع الغسيل2', 'ar', 19, '2021-02-20 17:06:07', '2021-02-20 17:06:07'),
(37, '8sil type 2', 'en', 19, '2021-02-20 17:06:07', '2021-02-20 17:06:07'),
(38, ' توع الغسيل3', 'ar', 20, '2021-02-20 17:06:07', '2021-02-20 17:06:07'),
(39, '8sil type 3', 'en', 20, '2021-02-20 17:06:08', '2021-02-20 17:06:08'),
(40, ' توع الغسيل4', 'ar', 21, '2021-02-20 17:06:08', '2021-02-20 17:06:08'),
(41, '8sil type 4', 'en', 21, '2021-02-20 17:06:08', '2021-02-20 17:06:08');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `icon`, `created_at`, `updated_at`) VALUES
(2, 'defualt.png', '2021-02-20 17:06:02', '2021-02-20 17:06:02'),
(3, 'defualt.png', '2021-02-20 17:06:04', '2021-02-20 17:06:04'),
(4, 'defualt.png', '2021-02-20 17:06:05', '2021-02-20 17:06:05'),
(5, 'defualt.png', '2021-02-20 17:06:06', '2021-02-20 17:06:06');

-- --------------------------------------------------------

--
-- Table structure for table `service_translations`
--

CREATE TABLE `service_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_translations`
--

INSERT INTO `service_translations` (`id`, `name`, `locale`, `service_id`, `created_at`, `updated_at`) VALUES
(3, 'service ar 0', 'ar', 2, '2021-02-20 17:06:02', '2021-02-20 17:06:02'),
(4, 'service en 0', 'en', 2, '2021-02-20 17:06:02', '2021-02-20 17:06:02'),
(5, 'service ar 1', 'ar', 3, '2021-02-20 17:06:04', '2021-02-20 17:06:04'),
(6, 'service en 1', 'en', 3, '2021-02-20 17:06:04', '2021-02-20 17:06:04'),
(7, 'service ar 2', 'ar', 4, '2021-02-20 17:06:05', '2021-02-20 17:06:05'),
(8, 'service en 2', 'en', 4, '2021-02-20 17:06:05', '2021-02-20 17:06:05'),
(9, 'service ar 3', 'ar', 5, '2021-02-20 17:06:07', '2021-02-20 17:06:07'),
(10, 'service en 3', 'en', 5, '2021-02-20 17:06:07', '2021-02-20 17:06:07');

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
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'test', 'test@test.com', NULL, '$2y$10$0043ol6Z52A1ND9SuX0UdeNtxpmmGx55SXYkfNp5sLVk4gxs7AibO', NULL, NULL, '2021-02-17 11:47:32', '2021-02-17 11:47:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addresses_client_id_foreign` (`client_id`),
  ADD KEY `addresses_area_id_foreign` (`area_id`),
  ADD KEY `addresses_city_id_foreign` (`city_id`);

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `areas_city_id_foreign` (`city_id`);

--
-- Indexes for table `area_translations`
--
ALTER TABLE `area_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `area_translations_area_id_foreign` (`area_id`),
  ADD KEY `area_translations_locale_index` (`locale`);

--
-- Indexes for table `balances`
--
ALTER TABLE `balances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `balances_client_id_foreign` (`client_id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city_translations`
--
ALTER TABLE `city_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `city_translations_city_id_foreign` (`city_id`),
  ADD KEY `city_translations_locale_index` (`locale`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_package`
--
ALTER TABLE `client_package`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_package_client_id_foreign` (`client_id`),
  ADD KEY `client_package_package_id_foreign` (`package_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_translations`
--
ALTER TABLE `package_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `package_translations_package_id_foreign` (`package_id`),
  ADD KEY `package_translations_locale_index` (`locale`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prices_service_id_foreign` (`service_id`);

--
-- Indexes for table `price_translations`
--
ALTER TABLE `price_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `price_translations_price_id_foreign` (`price_id`),
  ADD KEY `price_translations_locale_index` (`locale`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_translations`
--
ALTER TABLE `service_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_translations_service_id_foreign` (`service_id`),
  ADD KEY `service_translations_locale_index` (`locale`);

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
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `area_translations`
--
ALTER TABLE `area_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `balances`
--
ALTER TABLE `balances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `city_translations`
--
ALTER TABLE `city_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `client_package`
--
ALTER TABLE `client_package`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `package_translations`
--
ALTER TABLE `package_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `price_translations`
--
ALTER TABLE `price_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `service_translations`
--
ALTER TABLE `service_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_area_id_foreign` FOREIGN KEY (`area_id`) REFERENCES `areas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `addresses_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `addresses_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `areas`
--
ALTER TABLE `areas`
  ADD CONSTRAINT `areas_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `area_translations`
--
ALTER TABLE `area_translations`
  ADD CONSTRAINT `area_translations_area_id_foreign` FOREIGN KEY (`area_id`) REFERENCES `areas` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `balances`
--
ALTER TABLE `balances`
  ADD CONSTRAINT `balances_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `city_translations`
--
ALTER TABLE `city_translations`
  ADD CONSTRAINT `city_translations_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `client_package`
--
ALTER TABLE `client_package`
  ADD CONSTRAINT `client_package_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `client_package_package_id_foreign` FOREIGN KEY (`package_id`) REFERENCES `packages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `package_translations`
--
ALTER TABLE `package_translations`
  ADD CONSTRAINT `package_translations_package_id_foreign` FOREIGN KEY (`package_id`) REFERENCES `packages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `prices`
--
ALTER TABLE `prices`
  ADD CONSTRAINT `prices_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `price_translations`
--
ALTER TABLE `price_translations`
  ADD CONSTRAINT `price_translations_price_id_foreign` FOREIGN KEY (`price_id`) REFERENCES `prices` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `service_translations`
--
ALTER TABLE `service_translations`
  ADD CONSTRAINT `service_translations_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
