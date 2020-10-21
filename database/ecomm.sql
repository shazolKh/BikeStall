-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2020 at 10:50 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomm`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `details`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Maecenas hendrerit purus tincidunt', '<p><strong>Nullam quis tempor ligula, nec ornare dui. Sed fermentum magna ipsum, sit amet malesuada ante pretium in. Maecenas hendrerit purus tincidunt feugiat iaculis. Donec tincidunt dolor semper fermentum lacinia. Morbi dolor ex, rhoncus quis nibh in, porta facilisis metus. Donec pulvinar bibendum lob</strong>ortis. Vivamus consequat eros sit amet lorem tristique, sit amet viverra dolor maximus. Proin est nisi, ornare eu gravida eget, fringilla sit amet augue.</p>', '562864.jpg', '2020-10-14 23:35:21', '2020-10-14 23:47:45');

-- --------------------------------------------------------

--
-- Table structure for table `admin_reviews`
--

CREATE TABLE `admin_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `written_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_reviews`
--

INSERT INTO `admin_reviews` (`id`, `title`, `details`, `written_by`, `image1`, `image2`, `image3`, `created_at`, `updated_at`) VALUES
(1, 'review Title one', '<p>Review One Details&nbsp;</p>', 'writter one', '852040.jpg', '73007.PNG', '482072.jpg', '2020-10-11 03:24:28', '2020-10-11 06:54:51'),
(3, 'Standart Post', '<p>Duis euismod, enim id fermentum bibendum, nulla risus molestie sem, at tempus nunc leo cursus nunc&nbsp;<a href=\"#\">read more</a></p>', 'admin', '816806.png', '99179.png', '316870.png', '2020-10-14 06:34:54', '2020-10-14 06:34:54'),
(4, 'Post without Photo', '<p>Duis euismod, enim id fermentum bibendum, nulla risus molestie sem, at tempus nunc leo cursus nuncDuis euismod, enim id fermentum bibendum, nulla risus molestie sem, at tempus nunc leo cursus nuncDuis euismod, enim id fermentum bibendum, nulla risus molestie sem, at tempus nunc leo cursus nuncDuis euismod, enim id fermentum bibendum, nulla risus molestie sem, at tempus nunc leo cursus nuncDuis euismod, enim id fermentum bibendum, nulla risus molestie sem, at tempus nunc leo cursus nuncDuis euismod, enim id fermentum bibendum, nulla risus molestie sem, at tempus nunc leo cursus nunc</p>', 'admin', '257148.jpg', '712204.jpg', '441480.jpg', '2020-10-14 06:35:42', '2020-10-14 06:35:42'),
(5, 'Standart Post with Sidebar', '<p>Duis euismod, enim id fermentum bibendum, nulla risus molestie sem, at tempus nunc leo cursus nunc</p>\r\n\r\n<p>Duis euismod, enim id fermentum bibendum, nulla risus molestie sem, at tempus nunc leo cursus nunc</p>\r\n\r\n<p>Duis euismod, enim id fermentum bibendum, nulla risus molestie sem, at tempus nunc leo cursus nunc</p>\r\n\r\n<p>Duis euismod, enim id fermentum bibendum, nulla risus molestie sem, at tempus nunc leo cursus nunc</p>', 'admin', '460296.jpg', '76024.jpg', '350066.jpg', '2020-10-14 06:36:32', '2020-10-14 06:36:32');

-- --------------------------------------------------------

--
-- Table structure for table `bikes`
--

CREATE TABLE `bikes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `bike_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bike_model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bike_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `engine` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mileage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube_link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bikes`
--

INSERT INTO `bikes` (`id`, `category_id`, `sub_category_id`, `brand_id`, `bike_name`, `bike_model`, `bike_color`, `engine`, `mileage`, `description`, `price`, `image`, `image1`, `image2`, `image3`, `youtube_link`, `created_at`, `updated_at`) VALUES
(1, 6, 6, 1, 'BK-One', 'BK-M-1', 'BKM-Black', '120', '75', '<p><strong>BKM-One</strong> Description</p>', '190000', '146300.png', '146300.png', '146300.png', '146300.png', 'https://www.youtube.com/watch?v=ChKfyWSCybs', '2020-10-09 15:01:41', '2020-10-11 11:11:50'),
(2, 7, 10, 2, 'BK Three', 'BK Three Model', 'Blue, Red', '144', '70', '<p>3rd Bike Description</p>', '300000', '944962.PNG', '453125.PNG', '700649.PNG', '373952.png', 'https://www.youtube.com/watch?v=8Ad3npW4BV0', '2020-10-09 23:37:27', '2020-10-11 11:08:22'),
(4, 8, 6, 2, '4 image test 2', '4 model test', 'black 4', '100', '54', '<p>mjabbwjdhb iuah wduaiw auiwiuhawu iuawh&nbsp;</p>', '400000', '165093.jpg', '722379.jpg', '345307.jpg', '593264.png', 'https://www.youtube.com/watch?v=eDW44A_noK8', '2020-10-10 00:21:07', '2020-10-10 03:15:57'),
(5, 9, 6, 3, 'yt test', 'yt model', 'red', '126', '45', '<p>Youtube video test</p>', '200000', '204465.PNG', '584204.PNG', '499302.jpeg', '646949.png', 'https://www.youtube.com/watch?v=6di34z0eAaI', '2020-10-10 01:56:27', '2020-10-11 11:10:49'),
(6, 7, 8, 2, 'hgcch', 'jhj liil iiugu', 'jygjtht', '180', '28', '<p>yg&nbsp; kuygdjytfuyg i djyh m uygu h nh g jumj</p>', '1236800', '953552.jpg', '281407.jpg', '89522.PNG', '136225.PNG', 'https://www.youtube.com/watch?v=LOP2i7CD2_k', '2020-10-10 14:12:44', '2020-10-11 11:12:49'),
(7, 8, 10, 6, 'Dell one', 'dl', 'red', '200', '25', '<p>ytrutyrzurejryhytgi yugyugcitf iuygkurf iyj</p>', '200000', '86192.png', '310299.png', '615541.png', '288098.png', 'ytsxdjytfuygdtfygilu', '2020-10-13 09:53:18', '2020-10-13 09:53:18'),
(8, 8, 9, 4, 'ajwnkd a', 'kjkasd', 'bksjhdbk', '96', '35', '<p>akwjd auwl&nbsp;</p>', '200000', '958445.png', '561171.png', '764064.png', '810048.png', 'silsiliefhsiluf siuhf iau hlfi', '2020-10-13 23:16:42', '2020-10-13 23:16:42');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 1,
  `br_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `parent_id`, `br_name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'B-One', 'First Brand Inserted', 1, '2020-10-09 14:37:56', '2020-10-09 14:37:56'),
(2, 1, 'B-Two', '<p>2nd Ŵ Inserted</p>', 1, '2020-10-09 14:38:13', '2020-10-09 14:49:47'),
(3, 1, 'B-3', '<p>Brand Description with <strong>CKEDITOR</strong></p>', 1, '2020-10-09 14:41:17', '2020-10-09 14:41:17'),
(4, 1, 'Brand show 3', '<p>this is brands thressssss</p>', 1, '2020-10-12 09:19:23', '2020-10-12 09:19:23'),
(6, 1, 'DELL', '<p>dell</p>', 1, '2020-10-12 09:20:26', '2020-10-12 09:20:26'),
(7, 1, 'BELL', '<p>BEELLLLLL</p>', 1, '2020-10-12 09:20:44', '2020-10-12 09:20:44'),
(8, 1, 'CELL', '<p>Cellll</p>', 1, '2020-10-12 09:21:04', '2020-10-12 09:21:04'),
(9, 1, 'Felll', '<p>jajbwdkja</p>', 1, '2020-10-12 09:21:24', '2020-10-12 09:21:24'),
(10, 1, 'sell', '<p>ajbwdja</p>', 1, '2020-10-12 09:21:51', '2020-10-12 09:21:51');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ct_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `ct_name`, `description`, `cat_image`, `status`, `created_at`, `updated_at`) VALUES
(6, 'ONE', '<p>ajbwjk lijwaiu iuawhid a</p>', '623533.png', 1, '2020-10-13 07:38:48', '2020-10-13 08:19:39'),
(7, 'TWO', '<p>ajwnd u oiajw idwby aiwu ialw</p>', '551987.jpg', 1, '2020-10-13 07:41:21', '2020-10-15 01:37:43'),
(8, 'THREE', '<p>ywgdmh aiaiudyuwadfkyawgd kuah dka</p>', '155725.png', 1, '2020-10-13 08:20:26', '2020-10-13 08:20:26'),
(9, 'FOUR', '<p>jhbj dyagiuyg dyagkudy gkawu yg</p>', '828282.jpg', 1, '2020-10-13 08:20:46', '2020-10-13 08:20:46');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bike_id` int(10) UNSIGNED NOT NULL,
  `writer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `comment` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `bike_id`, `writer`, `status`, `comment`, `created_at`, `updated_at`) VALUES
(1, 1, 'Shazol', 1, 'This is First Comment', '2020-10-14 10:17:06', '2020-10-15 06:34:56'),
(2, 7, 'ah d', 1, 'iuahw udhawiuha kuh i', '2020-10-14 10:17:51', '2020-10-14 11:13:43'),
(4, 1, 'ATN', 1, 'Pellentesque sit amet velit sed ligula suscipit posuere. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris ornare libero in enim semper lacinia. Sed in ipsum mollis, hendrerit est nec, tempus neque. Proin in turpis vel quam ullamcorper tristique. Fusce elit erat, consequat eget rhoncus eget, facilisis quis leo. Mauris vestibulum magna mollis erat placerat, quis interdum arcu porttitor. Sed ornare nisi libero, gravida finibus erat pellentesque sit amet. Cras dignissim dapibus est et imperdiet. Vestibulum vestibulum pellentesque lorem, sed posuere dui interdum eget.', '2020-10-14 11:43:43', '2020-10-15 06:35:03'),
(5, 2, 'AJ', 0, 'this is a comment', '2020-10-15 05:39:16', '2020-10-15 05:39:16'),
(6, 8, 'auwdgu', 1, 'iuhwkaiu 8uaywu tdgtiauhkdli8wl auyhi uwdyai8ywd lia', '2020-10-15 06:25:13', '2020-10-15 08:00:14'),
(7, 1, 'New Review', 1, 'Approved', '2020-10-15 06:35:42', '2020-10-15 06:35:55');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `information` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insta` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `full_spacs`
--

CREATE TABLE `full_spacs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bike_id` int(11) NOT NULL,
  `body_length` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body_width` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body_height` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wheel_base` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ground_clearance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kerb_weight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fuel_tank_cap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `engine_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `displacement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `max_power` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `max_torque` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bore` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ignition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fuel_system` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fuel_cap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gear_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gear_num` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `f_tyre_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b_tyre_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wheel_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `front_break` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rear_break` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chassis_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `front_suspension` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `back_suspension` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `battery` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `head_lamp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gen_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `disclaimer` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `full_spacs`
--

INSERT INTO `full_spacs` (`id`, `bike_id`, `body_length`, `body_width`, `body_height`, `wheel_base`, `ground_clearance`, `kerb_weight`, `fuel_tank_cap`, `engine_type`, `displacement`, `max_power`, `max_torque`, `bore`, `start_method`, `ignition`, `fuel_system`, `fuel_cap`, `gear_type`, `gear_num`, `f_tyre_size`, `b_tyre_size`, `wheel_type`, `front_break`, `rear_break`, `chassis_type`, `front_suspension`, `back_suspension`, `battery`, `head_lamp`, `gen_description`, `disclaimer`, `created_at`, `updated_at`) VALUES
(1, 2, 'test length', 'test width', 'test height', 'test base', 'cle', 'test length', 'jadjil', 'Air cooled, 120 CC, 4 stroke, 1 cylinder', 'test dis', 'max test power', 'max RPM test', 'jabw', 'wbjahjab', 'abwjhbd', 'jawbdha', 'jadjil', 'kajbda', '5', 'ajbdjj', 'iawubdu', 'bwdua', 'bah', 'uabwbud', 'jawbdhva', 'ajbwda', 'hadkhav', 'jahbwdku', 'jabhd', '<p>jhab,djbiDaWU Duah <strong>duhauwhd a</strong></p>', '<p>u<em>guaywydbkuaywgi aud auygd</em> uahdiah dytaf daod awgawi7 daw</p>', '2020-10-10 08:00:37', '2020-10-10 08:00:37'),
(2, 6, 'jhwva', 'jabwjdba', 'J', 'BBJABWDJ', 'HB', 'jhwva', 'jh ajhbd', 'HHU', 'HHQU', 'jawbhj', 'HB', 'bbuh', 'b', 'jwbdj', 'jbajd', 'jh ajhbd', 'jh jhabwj', 'jabwbjd', 'ajwhd', 'jabwjd', 'maw dj', 'jwabhdj', 'ja  wj', 'jbdwaj', 'jawbjha', 'jabwj', 'hbjdb', 'lkamwkd', '<p>jjwa&nbsp; djawba da w abwdja</p>', '<p>ajbwdjabwda</p>', '2020-10-10 10:18:06', '2020-10-10 10:24:46'),
(3, 4, 'kjawbjdbh', 'jbawhdbahbawjh', 'bqUBHWBD', 'UBHBWDH', 'HBBHWDAWH', 'AWB  DJH', 'JHBJDBA', 'B AWDHBA', 'AJBWJ', 'HBJDBWA', 'AKJWNDKJ', 'JBSDJBAW', 'JBAWJDB', 'JBAWJDBA', 'WKJANJ', 'JHBJDBA', 'JH WAJDB', 'JAH JHBA  W', 'JBHAJDBAW', 'JAW DJ', 'JBAJWFB', 'JBA JBA', 'JBJBFI', 'POEKTOI', 'KAWJNFKA', 'KAJWBFAJW', 'JNSWUWHNAJ', 'JABWFUWHBDAJ', '<p>JWABDJAB MND AB DAWBAN BAWQ</p>', '<p>KAJBWDWHA WDAWIDB ABD AIUWDBAHD ADHAOI</p>', '2020-10-10 10:19:08', '2020-10-10 10:19:08'),
(5, 5, 'ukygydgvya', 'bhajwhvdhHV', 'AHVSDHAGubaJHBH', 'uabwjdhb', 'hvawhdvjy', 'hvHDVHAuv', 'yhg', 'vhvg', 'v', 'hgv', 'hgv', 'hv', 'uv', 'hvv', 'hvu', 'yhg', 'vhgv', 'hg', 'hgvnh', 'gvh', 'gvhm', 'vhmv', 'hgv', 'hgvnhg', 'vhgvyhv', 'nhg', 'vmh', 'vmh', '<p>vh</p>', '<p>hyvhv</p>', '2020-10-10 11:45:04', '2020-10-10 11:45:04'),
(6, 1, 'bK one length', 'bK one W', 'bK one H', 'bK one WB', '120', '150 KG', 'JA CJH', 'air cooled, 200, 4, 4', '200', 'jba', 'jsbi', 'jabwuIU', 'IUABWAB', 'UAWBKJW  H', 'AJBWD', 'JA CJH', 'UABJ', 'AJB DA', 'IUBAJB', 'JABHFJA', 'jbajbh', 'jbawj', 'ajbwjdh', 'uiabwdj', 'ajhw dj', 'jhabwdja', 'jah dj', 'ajwjd', '<p>ahbdjawhd ajhdbahwb uh ajbwjdiaw ygaw udhavdaywdg aiuhjwh uwhdauwdba fliad awgd ajbhdyga fuahdj hawygdg ai</p>\r\n\r\n<p>&nbsp;</p>', '<p>jawbhdkjah iuhwdgga ijw daidja udhwao 8ubwdb ailw</p>', '2020-10-12 01:20:48', '2020-10-12 01:20:48'),
(7, 4, 'iuawhkd IHA WUii', 'ih iuhi uawh i', 'iuha wiudh', 'ih iu', 'hiuh', 'i h', 'iuh', 'i u', 'hi', 'uh', 'iuh', 'iu', 'h ui', 'h', 'ih', 'iuh', 'iuh', 'iu', 'usygy dj', 'ku', 'ug yu', 'guy', 'g', 'uh', 'r', '7', 'uy g', 'uyg', '<p>u ajwbdk uahl duahl&nbsp;</p>', '<p>kuah duah diuahi li</p>', '2020-10-14 03:37:08', '2020-10-14 03:37:08'),
(8, 8, 'awgyd kaj', 'u', 'ug', 'kuyg', 'k', 'uyg', 'kjy', 'gk', 'uf', 'tf', 'ku', 'gl', 'yf', 'u', 'f', 'kjy', 'g ku', 'gt', 'fku', 'gk', 'ug', 'u', 'dryjfg', 'u', 'ygu7', 'yg k', 'yf ku', 'gtfk', '<p>ku</p>', '<p>g uk</p>', '2020-10-14 03:37:54', '2020-10-14 03:37:54'),
(9, 7, 'kjawkd UH iuhuHU', 'H', 'IU G', 'YUG', 'U', 'G KUYG', 'U', 'HK', 'TCJ', 'KY', 'LIU', 'F', 'KGI', 'U G', 'UKYG', 'U', 'GUK', 'G YF', 'U', 'G KUY', 'GYU', 'FG KU', 'G Y', 'G', 'KUG', 'KUY', 'GKUY', 'G KU', '<p>G KUYG</p>', '<p>&nbsp;KUYG</p>', '2020-10-14 03:40:25', '2020-10-14 03:40:25');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(21, 'FIRST', '1602686440.png', '2020-10-14 08:40:40', '2020-10-14 08:40:40'),
(22, 'SECOND', '1602686452.png', '2020-10-14 08:40:52', '2020-10-14 08:40:52'),
(23, 'THIRD', '1602686464.png', '2020-10-14 08:41:04', '2020-10-14 08:41:04');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_10_09_194652_create_categories_table', 2),
(5, '2020_10_09_195553_create_brands_table', 3),
(6, '2020_10_09_205107_create_bikes_table', 4),
(7, '2020_10_10_094504_create_full_spacs_table', 5),
(8, '2020_10_10_163543_create_news_table', 6),
(9, '2020_10_11_074656_create_admin_reviews_table', 7),
(10, '2020_10_11_130800_create_galleries_table', 8),
(11, '2020_10_12_165405_create_sub_categories_table', 9),
(12, '2020_10_14_141320_create_photo_galleries_table', 10),
(13, '2020_10_15_051745_create_abouts_table', 11),
(14, '2020_10_15_093822_create_contacts_table', 12),
(15, '2020_10_15_104646_create_contacts_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `headline` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `article` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `nws_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `headline`, `article`, `nws_image`, `created_at`, `updated_at`) VALUES
(6, 'Maecenas hendrerit purus tincidunt feugiat iaculis', '<p>Nullam quis tempor ligula, nec ornare dui. Sed fermentum magna ipsum, sit amet malesuada ante pretium in. Maecenas hendrerit purus tincidunt feugiat iaculis. Donec tincidunt dolor semper fermentum lacinia. Morbi dolor ex, rhoncus quis nibh in, porta facilisis metus. Donec pulvinar bibendum lobortis. Vivamus consequat eros sit amet lorem tristique, sit amet viverra dolor maximus. Proin est nisi, ornare eu gravida eget, fringilla sit amet augue.</p>', '502884.jpg', '2020-10-15 01:08:06', '2020-10-15 01:10:53'),
(7, 'Standart Post', '<p>Duis euismod, enim id fermentum bibendum, nulla risus molestie sem, at tempus nunc leo cursus nunc</p>', '572415.jpg', '2020-10-15 01:08:46', '2020-10-15 01:08:46');

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
-- Table structure for table `photo_galleries`
--

CREATE TABLE `photo_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photo_galleries`
--

INSERT INTO `photo_galleries` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(2, 'hvhkm', '1602686380.jpg', '2020-10-14 08:39:40', '2020-10-14 08:39:40'),
(3, 'jhvvkhvm', '1602686389.jpg', '2020-10-14 08:39:49', '2020-10-14 08:39:49'),
(4, 'jhbkhmhvmhjc', '1602686398.jpg', '2020-10-14 08:39:58', '2020-10-14 08:39:58');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_ct_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `sub_ct_name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(5, 6, 'One Sub1', '<p>kjakwn djailwk.da</p>', '757106.jpg', '2020-10-13 08:22:39', '2020-10-13 08:22:39'),
(6, 6, 'One Sub2', '<p>widja uhdiuadwhg yafkuykgd aukw</p>', '427149.jpg', '2020-10-13 08:23:08', '2020-10-15 01:43:32'),
(8, 7, 'Two Sub 2', '<p>kjadh uah duhadi uaydf ao8d</p>', '589433.png', '2020-10-13 08:23:54', '2020-10-13 08:23:54'),
(9, 8, 'Three Sub 1', '<p>awkdh auhd iuahwd gauwfh aiow</p>', '823088.png', '2020-10-13 08:24:27', '2020-10-13 08:24:27'),
(10, 8, 'Three Sub 2', '<p>hu wudh a7ud audh a7w</p>', '794422.png', '2020-10-13 08:24:56', '2020-10-13 08:24:56'),
(11, 9, 'Four Sub 1', '<p>kajdn luahld ial dugadu haliwda</p>', '279592.png', '2020-10-13 08:25:16', '2020-10-13 08:25:16'),
(12, 9, 'Four Sub 2', '<p>uHW udahwl idaijd yagwf a</p>', '322754.png', '2020-10-13 08:25:37', '2020-10-13 08:25:37'),
(13, 7, '2two 2nd', '<p>hvhhvkyug uiuh ligjtilu hlk</p>', '123381.png', '2020-10-13 09:56:29', '2020-10-13 09:56:29');

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
  `admin` tinyint(1) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$IpjfuldiW4OpYL/PK1V7M.W1kCXEQO1HECPCgx8uoySyW.Vxxc7/2', 1, NULL, '2020-10-09 12:12:27', '2020-10-16 10:15:34'),
(2, 'shazol', 'shazol@gmail.com', NULL, '$2y$10$3bQdpX1huIY/ZjQs0khxx.aVEub74lY2Fi6aRzg1LwyDYco8VnCJy', NULL, NULL, '2020-10-09 13:18:01', '2020-10-09 13:18:01'),
(3, 'szl', 'szl@gmail.com', NULL, '$2y$10$xvOy.ii4EXNRY8kS4ZwPtebTemJimCRr5mSupMmmqw62fz39F/9Z2', NULL, NULL, '2020-10-09 13:20:25', '2020-10-09 13:20:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_reviews`
--
ALTER TABLE `admin_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bikes`
--
ALTER TABLE `bikes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `full_spacs`
--
ALTER TABLE `full_spacs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `photo_galleries`
--
ALTER TABLE `photo_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_reviews`
--
ALTER TABLE `admin_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bikes`
--
ALTER TABLE `bikes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `full_spacs`
--
ALTER TABLE `full_spacs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `photo_galleries`
--
ALTER TABLE `photo_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
