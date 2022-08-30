-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 12, 2022 lúc 11:39 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `lrv-pj`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_qty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `prod_id`, `prod_qty`, `created_at`, `updated_at`) VALUES
(139, '2', '6', '1', '2022-08-01 21:25:19', '2022-08-01 21:25:19');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `popular` tinyint(4) NOT NULL DEFAULT 0,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_descrip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `status`, `popular`, `image`, `meta_title`, `meta_descrip`, `meta_keywords`, `created_at`, `updated_at`) VALUES
(7, 'Apple', 'Apple', 'Apple Cali', 0, 1, '1660125285.png', 'Apple Iphone', 'Apple', 'Apple', '2022-06-22 01:26:05', '2022-08-10 02:54:45'),
(8, 'Samsung', 'Samsung', 'Samsung Korea', 0, 1, '1660125295.png', 'Samsung', 'Samsung', 'Samsung', '2022-06-22 01:28:25', '2022-08-10 02:54:55'),
(9, 'Oppo', 'Oppo', 'Oppo China', 0, 1, '1660125305.png', 'Oppo', 'Oppo', 'Oppo', '2022-06-22 01:29:10', '2022-08-10 02:55:05'),
(10, 'Xiaomi', 'Xiaomi', 'Xiaomi China', 0, 1, '1660125317.png', 'Xiaomi', 'Xiaomi', 'Xiaomi', '2022-06-22 01:29:39', '2022-08-10 02:55:17'),
(11, 'LG', 'LG', 'LG Korea', 0, 1, '1660125229.png', 'LG', 'LG', 'LG', '2022-08-10 02:53:49', '2022-08-10 02:53:49'),
(12, 'HTC', 'HTC', 'HTC China', 0, 1, '1660125344.png', 'HTC', 'HTC', 'HTC', '2022-08-10 02:55:44', '2022-08-10 02:55:44'),
(13, 'Sony', 'Sony', 'Sony Japan', 0, 1, '1660125371.png', 'Sony', 'Sony', 'Sony', '2022-08-10 02:56:11', '2022-08-10 02:56:11'),
(14, 'Huawei', 'Huawei', 'Huawei China', 0, 1, '1660125399.png', 'Huawei', 'Huawei', 'Huawei', '2022-08-10 02:56:39', '2022-08-10 02:56:39'),
(15, 'Nokia', 'Nokia', 'Nokia China', 0, 1, '1660125426.png', 'Nokia', 'Nokia', 'Nokia', '2022-08-10 02:57:06', '2022-08-10 02:57:06');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_06_21_071531_create_categories_table', 2),
(6, '2022_06_22_034140_create_products_table', 3),
(7, '2022_06_27_081211_create_carts_table', 4),
(8, '2022_06_29_074235_create_orders_table', 5),
(9, '2022_06_29_075209_create_orders_items_table', 5),
(10, '2022_06_29_092353_create_order_items_table', 6),
(11, '2022_06_30_085350_create_wishlists_table', 7),
(12, '2022_07_07_075433_create_ratings_table', 8),
(13, '2022_07_19_034113_create_wishlists_table', 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pincode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_mode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tracking_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `fname`, `lname`, `email`, `phone`, `address1`, `address2`, `city`, `state`, `country`, `pincode`, `total_price`, `payment_mode`, `payment_id`, `status`, `message`, `tracking_no`, `created_at`, `updated_at`) VALUES
(1, '4', 'Nguyễn', 'Hiếu', 'mh2802@gmail.com', '0796265109', 'h5 k21', 'dũng sĩ thanh khê', 'Đà Nẵng', 'Thanh Khê', 'Đà Nẵng', '1231231', '27900000', NULL, NULL, 1, NULL, 'hieuminh3693', '2022-07-12 01:31:29', '2022-07-20 20:54:33'),
(2, '2', 'Nguyễn Minh', 'Hiếu', 'nminhhieu2802@gmail.com', '0796265109', 'h5 k21 dũng sĩ thanh khê', '371 Nguyễn Tất Thành', 'Đà Nẵng', 'Đà Nẵng', 'Quảng Nam', '280200', '55800000', 'Paid at home', NULL, 1, NULL, 'hieuminh9294', '2022-07-12 19:11:48', '2022-07-29 02:43:37'),
(3, '2', 'Nguyễn Minh', 'Hiếu', 'nminhhieu2802@gmail.com', '0796265109', 'h5 k21 dũng sĩ thanh khê', '371 Nguyễn Tất Thành', 'Đà Nẵng', 'Đà Nẵng', 'Quảng Nam', '280200', '55800000', 'Paid at home', NULL, 0, NULL, 'hieuminh2617', '2022-07-12 19:22:06', '2022-07-12 19:22:06'),
(4, '2', 'Nguyễn Minh', 'Hiếu', 'nminhhieu2802@gmail.com', '0796265109', 'h5 k21 dũng sĩ thanh khê', '371 Nguyễn Tất Thành', 'Đà Nẵng', 'Đà Nẵng', 'Quảng Nam', '280200', '181480000', 'Paid by Paypal', '2DS17802KU252225P', 0, NULL, 'hieuminh5673', '2022-07-12 20:09:41', '2022-07-12 20:09:41'),
(5, '2', 'Nguyễn Minh', 'Hiếu', 'nminhhieu2802@gmail.com', '0796265109', 'h5 k21 dũng sĩ thanh khê', '371 Nguyễn Tất Thành', 'Đà Nẵng', 'Đà Nẵng', 'Quảng Nam', '280200', '55800000', 'Paid by Paypal', '5JS45276JH539362R', 1, NULL, 'hieuminh1777', '2022-07-13 01:30:15', '2022-07-13 01:30:43'),
(6, '3', 'Nguyễn', 'Hiếu', 'hieubunny123123@gmail.com', '0796265109', 'h5 k21 dũng sĩ thanh khê', 'dũng sĩ thanh khê', 'Đà Nẵng', 'Thanh Khê', 'Đà Nẵng', '1231231', '27900000', NULL, NULL, 0, NULL, 'hieuminh9384', '2022-07-17 20:50:34', '2022-07-17 20:50:34'),
(7, '13', 'Nguyễn', 'Hiếu', 'hieumoi@gmail.com', '0796265109', 'h5 k21 dũng sĩ thanh khê', 'Thanh Khê', 'Đà Nẵng', 'Đà Nẵng', 'Đà Nẵng', '1231231', '27900000', NULL, NULL, 0, NULL, 'hieuminh5588', '2022-07-18 01:59:31', '2022-07-18 01:59:31'),
(8, '2', 'Nguyễn Minh', 'Hiếu', 'nminhhieu2802@gmail.com', '0796265109', 'h5 k21 dũng sĩ thanh khê', '371 Nguyễn Tất Thành', 'Đà Nẵng', 'Đà Nẵng', 'Quảng Nam', '280200', '147580000', NULL, NULL, 0, NULL, 'hieuminh6061', '2022-07-19 00:42:07', '2022-07-19 00:42:07'),
(9, '2', 'Nguyễn Minh', 'Hiếu', 'nminhhieu2802@gmail.com', '0796265109', 'h5 k21 dũng sĩ thanh khê', '371 Nguyễn Tất Thành', 'Đà Nẵng', 'Đà Nẵng', 'Quảng Nam', '280200', '83700000', NULL, NULL, 0, NULL, 'hieuminh3509', '2022-07-25 02:21:58', '2022-07-25 02:21:58'),
(10, '2', 'Nguyễn Minh', 'Hiếu', 'nminhhieu2802@gmail.com', '0796265109', 'h5 k21 dũng sĩ thanh khê', '371 Nguyễn Tất Thành', 'Đà Nẵng', 'Đà Nẵng', 'Quảng Nam', '280200', '17990000', 'Paid by Paypal', '77491392EG773135M', 0, NULL, 'hieuminh2022', '2022-07-29 02:36:59', '2022-07-29 02:36:59'),
(11, '2', 'Nguyễn Minh', 'Hiếu', 'nminhhieu2802@gmail.com', '0796265109', 'h5 k21 dũng sĩ thanh khê', '371 Nguyễn Tất Thành', 'Đà Nẵng', 'Đà Nẵng', 'Quảng Nam', '280200', '27900000', NULL, NULL, 0, NULL, 'hieuminh2205', '2022-07-29 02:37:18', '2022-07-29 02:37:18'),
(12, '25', 'Nguyễn', 'Hiếu', 'hieuminh28022000@gmail.com', '0796265109', 'h5 k21 dũng sĩ thanh khê', 'Thanh Khê', 'Đà Nẵng', 'Đà Nẵng', 'Đà Nẵng', '28902', '111600000', 'Paid by Paypal', '2YW3000814907020M', 1, NULL, 'hieuminh2925', '2022-08-12 01:19:24', '2022-08-12 01:20:03'),
(13, '25', 'Nguyễn', 'Hiếu', 'hieuminh28022000@gmail.com', '0796265109', 'h5 k21 dũng sĩ thanh khê', 'Thanh Khê', 'Đà Nẵng', 'Đà Nẵng', 'Đà Nẵng', '28902', '27900000', NULL, NULL, 0, NULL, 'hieuminh4427', '2022-08-12 01:22:25', '2022-08-12 01:22:25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `prod_id`, `qty`, `price`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '1', '27900000', '2022-07-12 01:31:29', '2022-07-12 01:31:29'),
(2, '2', '2', '1', '27900000', '2022-07-12 19:11:48', '2022-07-12 19:11:48'),
(3, '2', '4', '1', '27900000', '2022-07-12 19:11:48', '2022-07-12 19:11:48'),
(4, '3', '1', '2', '27900000', '2022-07-12 19:22:06', '2022-07-12 19:22:06'),
(5, '4', '1', '1', '27900000', '2022-07-12 20:09:41', '2022-07-12 20:09:41'),
(6, '4', '2', '4', '27900000', '2022-07-12 20:09:41', '2022-07-12 20:09:41'),
(7, '4', '6', '2', '20990000', '2022-07-12 20:09:41', '2022-07-12 20:09:41'),
(8, '5', '2', '1', '27900000', '2022-07-13 01:30:15', '2022-07-13 01:30:15'),
(9, '5', '5', '1', '27900000', '2022-07-13 01:30:15', '2022-07-13 01:30:15'),
(10, '6', '4', '1', '27900000', '2022-07-17 20:50:34', '2022-07-17 20:50:34'),
(11, '7', '5', '1', '27900000', '2022-07-18 01:59:31', '2022-07-18 01:59:31'),
(12, '8', '1', '1', '27900000', '2022-07-19 00:42:07', '2022-07-19 00:42:07'),
(13, '8', '4', '1', '27900000', '2022-07-19 00:42:07', '2022-07-19 00:42:07'),
(14, '8', '6', '1', '20990000', '2022-07-19 00:42:07', '2022-07-19 00:42:07'),
(15, '8', '2', '2', '24900000', '2022-07-19 00:42:07', '2022-07-19 00:42:07'),
(16, '8', '91', '1', '20990000', '2022-07-19 00:42:07', '2022-07-19 00:42:07'),
(17, '9', '1', '3', '27900000', '2022-07-25 02:21:58', '2022-07-25 02:21:58'),
(18, '10', '7', '1', '17990000', '2022-07-29 02:36:59', '2022-07-29 02:36:59'),
(19, '11', '4', '1', '27900000', '2022-07-29 02:37:18', '2022-07-29 02:37:18'),
(20, '12', '4', '4', '27900000', '2022-08-12 01:19:24', '2022-08-12 01:19:24'),
(21, '13', '1', '1', '27900000', '2022-08-12 01:22:25', '2022-08-12 01:22:25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('hieuhangkhong@gmail.com', '$2y$10$wSh0lcRdiK3ylqxqlEyltuDr2WPBYNziAPzSUbZ.9Ro2UuSUWnXk2', '2022-07-17 19:27:05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cate_id` bigint(20) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `small_description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `original_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selling_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tax` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `trending` tinyint(4) NOT NULL,
  `meta_title` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `cate_id`, `name`, `slug`, `small_description`, `description`, `original_price`, `selling_price`, `image`, `qty`, `tax`, `status`, `trending`, `meta_title`, `meta_keywords`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 7, 'Iphone 13 Pro Max (Black)', 'Iphone 13 Pro Max (Black)', 'Graphite 128GB', 'Graphite128GB', '29900000', '27900000', '1658137133.png', '1', '10', 0, 1, 'Sierra', '6.7-inch Super Retina XDR displayfootnote¹ with ProMotion for a faster, more responsive feel.Biggest Pro camera system upgrade ever for epic low-light shots and macro photography.A15 Bionic with 5-core GPU — the fastest chip ever in a smartphone. And superfast 5G.footnote².Ceramic Shield, tougher than any smartphone glass. And IP68 water resistance.footnote³.Up to 28 hours of video playbackfootnote⁴ — the best battery life ever on iPhone.', 'A15 Bionic with 5-core GPU — the fastest chip ever in a smartphone. And superfast 5G.footnote².Ceramic Shield, tougher than any smartphone glass. And IP68 water resistance.footnote³.Up to 28 hours of video playbackfootnote⁴ — the best battery life ever on iPhone.', '2022-06-22 02:25:12', '2022-08-12 01:22:25'),
(2, 7, 'Iphone 13 Pro  (Black)', 'Iphone 13 Pro  (Black)', 'Graphite 128GB', 'Graphite 128GB', '27900000', '24900000', '1658137233.png', '2', '10', 0, 1, 'Alpine', '6.1-inch Super Retina XDR displayfootnote¹ with ProMotion for a faster, more responsive feel.Biggest Pro camera system upgrade ever for epic low-light shots and macro photography.', 'A15 Bionic with 5-core GPU — the fastest chip ever in a smartphone. And superfast 5G.footnote².Ceramic Shield, tougher than any smartphone glass. And IP68 water resistance.footnote³.Up to 28 hours of video playbackfootnote⁴ — the best battery life ever on iPhone.', '2022-06-22 02:39:06', '2022-07-19 00:42:07'),
(4, 7, 'Iphone 13 Pro Max (Silver)', 'Iphone 13 Pro Max (Silver)', 'Silver 128GB', 'Silver 128GB', '29900000', '27900000', '1655967718.png', '2', '15', 0, 1, 'Silver', '6.7-inch Super Retina XDR displayfootnote¹ with ProMotion for a faster, more responsive feel.Biggest Pro camera system upgrade ever for epic low-light shots and macro photography.', 'A15 Bionic with 5-core GPU — the fastest chip ever in a smartphone. And superfast 5G.footnote².Ceramic Shield, tougher than any smartphone glass. And IP68 water resistance.footnote³.Up to 28 hours of video playbackfootnote⁴ — the best battery life ever on iPhone.', '2022-06-22 21:16:53', '2022-08-12 01:19:24'),
(5, 7, 'Iphone 13 Pro  (Silver)', 'Iphone 13 Pro  (Silver)', 'Silver 128GB', 'Silver 128GB', '27900000', '24900000', '1658137249.png', '0', '15', 0, 1, 'Gold', '6.1-inch Super Retina XDR displayfootnote¹ with ProMotion for a faster, more responsive feel.Biggest Pro camera system upgrade ever for epic low-light shots and macro photography.', 'A15 Bionic with 5-core GPU — the fastest chip ever in a smartphone. And superfast 5G.footnote².Ceramic Shield, tougher than any smartphone glass. And IP68 water resistance.footnote³.Up to 28 hours of video playbackfootnote⁴ — the best battery life ever on iPhone.', '2022-06-22 21:18:06', '2022-07-18 02:40:49'),
(6, 7, 'Iphone 13 (Black)', 'Iphone 13 (Black)', 'Black 128GB', 'Black 128GB', '22990000', '20990000', '1658137292.png', '7', '15', 0, 1, 'Blue', '6.1-inch Super Retina XDR displayfootnote¹ with ProMotion for a faster, more responsive feel.Biggest Pro camera system upgrade ever for epic low-light shots and macro photography.', 'A15 Bionic with 5-core GPU — the fastest chip ever in a smartphone. And superfast 5G.footnote².Ceramic Shield, tougher than any smartphone glass. And IP68 water resistance.footnote³.Up to 28 hours of video playbackfootnote⁴ — the best battery life ever on iPhone.', '2022-06-28 19:09:31', '2022-07-19 00:42:07'),
(7, 7, 'Iphone 13 mini (Black)', 'Iphone 13 mini (Black)', 'Pink 128GB', 'Pink 128GB', '20990000', '17990000', '1658137340.png', '9', '15', 0, 1, 'Pink', '5.4-inch Super Retina XDR displayfootnote¹ with ProMotion for a faster, more responsive feel.Biggest Pro camera system upgrade ever for epic low-light shots and macro photography.', 'A15 Bionic with 5-core GPU — the fastest chip ever in a smartphone. And superfast 5G.footnote².Ceramic Shield, tougher than any smartphone glass. And IP68 water resistance.footnote³.Up to 28 hours of video playbackfootnote⁴ — the best battery life ever on iPhone.', '2022-06-28 19:07:19', '2022-07-29 02:36:59'),
(8, 10, 'Xiaomi Mi 12 Pro', 'Xiaomi Mi 12 Pro', 'Black 256GB', 'Black 256GB', '22990000', '19990000', '1658197318.png', '10', '15', 0, 0, 'Black', 'Màn hình:  AMOLED6.73\"Quad HD+ (2K+) Hệ điều hành:  Android 12', 'Camera sau:  3 camera 50 MP Camera trước:  32 MP Chip:  Snapdragon 8 Gen 1 8 nhân RAM:  12 GB Bộ nhớ trong:  256 GB', '2022-06-22 21:19:18', '2022-07-18 19:21:58'),
(9, 9, 'Oppo Find X5 Pro', 'Oppo Find X5 Pro', 'White 256GB', 'White 256GB', '32990000', '30990000', '1658197332.png', '10', '15', 0, 0, 'White', 'Màn hình:  AMOLED6.7\"Quad HD+ (2K+) Hệ điều hành:  Android 12 Camera sau:  Chính 50 MP & Phụ 50 MP, 13 MP Camera trước:  32 MP Chip:  Snapdragon 888 RAM:  12 GB Bộ nhớ trong:  256 GB', 'SIM:\r\n\r\n2 Nano SIM hoặc 1 Nano SIM + 1 eSIMHỗ trợ 5G\r\nPin, Sạc:\r\n\r\n5000 mAh80 W', '2022-06-28 19:22:33', '2022-07-18 19:22:12'),
(10, 8, 'Samsung', 'Samsung', 'White 256GB', 'White 256GB', '30990000', '27990000', '1660202369.png', '10', '20', 0, 0, 'White', 'Màn hình:\r\n\r\nDynamic AMOLED 2X6.8\"Quad HD+ (2K+)\r\nHệ điều hành:\r\n\r\nAndroid 12\r\nCamera sau:\r\n\r\nChính 108 MP & Phụ 12 MP, 10 MP, 10 MP\r\nCamera trước:\r\n\r\n40 MP\r\nChip:\r\n\r\nSnapdragon 8 Gen 1 8 nhân\r\nRAM:\r\n\r\n8 GB\r\nBộ nhớ trong:\r\n\r\n128 GB', 'SIM:\r\n\r\n2 Nano SIM hoặc 1 Nano SIM + 1 eSIMHỗ trợ 5G\r\nPin, Sạc:\r\n\r\n5000 mAh45 W', '2022-06-28 19:24:07', '2022-08-11 00:19:29'),
(90, 8, 'Samsung Galaxy Z Fold 3', 'Samsung Galaxy Z Fold 3', 'Silver Phantom 256GB', 'Silver Phantom 256GB', '41990000', '31990000', '1658197365.png', '15', '10', 0, 0, 'Silver', 'Công nghệ màn hình:: Dynamic AMOLED 2X\r\nĐộ phân giải:: Full HD+ (1768 x 2208 Pixels)\r\nĐộ phân giải: 3 camera 12 MP, 10 MP & 4 MP\r\nHệ điều hành: Android 11\r\nChip xử lý (CPU): Snapdragon 888 8 nhân\r\nBộ nhớ trong (ROM): 256 GB\r\nRAM: 12 GB', 'Mạng di động: Hỗ trợ 5G\r\nSố khe sim: 2 Nano SIM\r\nDung lượng pin: 4400 mAh', '2022-07-11 20:03:57', '2022-07-18 19:22:45'),
(91, 7, 'Iphone 13 (White)', 'Iphone 13 (White)', 'White 128GB', 'White 128GB', '22990000', '20990000', '1658137453.png', '9', '10', 0, 0, 'White 128GB', '6.1-inch Super Retina XDR displayfootnote¹ with ProMotion for a faster, more responsive feel.Biggest Pro camera system upgrade ever for epic low-light shots and macro photography.', 'A15 Bionic with 5-core GPU — the fastest chip ever in a smartphone. And superfast 5G.footnote².Ceramic Shield, tougher than any smartphone glass. And IP68 water resistance.footnote³.Up to 28 hours of video playbackfootnote⁴ — the best battery life ever on iPhone.', '2022-07-18 02:44:13', '2022-07-19 00:42:07'),
(92, 7, 'Iphone 13 mini(White)', 'Iphone 13 mini(White)', 'White 128GB', 'White 128GB', '20990000', '17990000', '1658137759.png', '19', '15', 0, 0, 'White 128GB', '5.4-inch Super Retina XDR displayfootnote¹ with ProMotion for a faster, more responsive feel.Biggest Pro camera system upgrade ever for epic low-light shots and macro photography.', 'A15 Bionic with 5-core GPU — the fastest chip ever in a smartphone. And superfast 5G.footnote².Ceramic Shield, tougher than any smartphone glass. And IP68 water resistance.footnote³.Up to 28 hours of video playbackfootnote⁴ — the best battery life ever on iPhone.', '2022-07-18 02:49:19', '2022-07-18 02:49:19');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ratings`
--

CREATE TABLE `ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stars_rated` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ratings`
--

INSERT INTO `ratings` (`id`, `user_id`, `prod_id`, `stars_rated`, `created_at`, `updated_at`) VALUES
(1, '4', '1', '4', '2022-07-12 01:31:37', '2022-07-12 01:31:37'),
(2, '2', '4', '3', '2022-07-12 19:11:54', '2022-07-12 19:11:54'),
(3, '2', '1', '1', '2022-07-12 19:22:13', '2022-07-29 02:38:16'),
(4, '2', '2', '5', '2022-07-12 20:22:11', '2022-07-19 02:59:03'),
(5, '2', '6', '1', '2022-07-19 00:29:00', '2022-07-29 02:49:10'),
(6, '2', '91', '5', '2022-07-19 02:11:20', '2022-07-19 02:11:20'),
(7, '25', '1', '5', '2022-08-12 01:22:33', '2022-08-12 01:22:46');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pincode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `lname`, `phone`, `address1`, `address2`, `city`, `state`, `country`, `pincode`, `role_as`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Nguyễn Minh', 'nminhhieu2802@gmail.com', NULL, '$2y$10$Qh.am41eMyCjDyirO8gYBOlNO.A9lP0goy27E03f.9Hj2C489bZOa', 'Hiếu', '0796265109', 'h5 k21 dũng sĩ thanh khê', '371 Nguyễn Tất Thành', 'Đà Nẵng', 'Đà Nẵng', 'Quảng Nam', '280200', 1, '38TWaaq4LdgdxrX3fqXWc0uieVl2Ed6pkrPSzFY6QNcsoqKM400vbKE3Kjdg', '2022-06-20 21:00:15', '2022-06-29 02:27:35'),
(25, 'Nguyễn', 'hieuminh28022000@gmail.com', NULL, '$2y$10$G0cOK94PNbfLJI4rlQ/VIu7HN8OhYhERmejH1xoxgySH3oGIQWzwW', 'Hiếu', '0796265109', 'h5 k21 dũng sĩ thanh khê', 'Thanh Khê', 'Đà Nẵng', 'Đà Nẵng', 'Đà Nẵng', '28902', 0, '2x9xsKDM1go205enu3VUmLgIaQKdIrmiwpDxMbxzNEztElAKt5kurCfvqOlN', '2022-08-10 02:47:34', '2022-08-12 01:19:24'),
(26, 'Hiếu', 'hieuhangkhong@gmail.com', NULL, '$2y$10$Q5WcSK/LZ7rOWFPrUcTQwO1r07tkMOuH4nAni/EQXJn1VBGexXjvy', 'Minh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2022-08-11 01:33:05', '2022-08-11 01:33:05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `prod_id`, `created_at`, `updated_at`) VALUES
(6, '2', '2', '2022-07-29 02:42:52', '2022-07-29 02:42:52');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT cho bảng `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
