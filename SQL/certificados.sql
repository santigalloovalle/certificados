-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jun 20, 2023 at 10:41 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `certificados`
--

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `download_date` date DEFAULT NULL,
  `download_hour` char(255) DEFAULT NULL,
  `id_people` bigint(20) UNSIGNED NOT NULL,
  `id_users` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `certificates`
--

INSERT INTO `certificates` (`id`, `download_date`, `download_hour`, `id_people`, `id_users`, `created_at`, `updated_at`) VALUES
(1, '2017-01-07', '20:12:43', 1, 87, '2023-06-21 01:17:16', '2023-06-21 01:17:16'),
(2, '1994-11-04', '09:05:39', 118, 140, '2023-06-21 01:17:16', '2023-06-21 01:17:16'),
(3, '1987-02-03', '19:00:33', 55, 2, '2023-06-21 01:17:16', '2023-06-21 01:17:16'),
(4, '1986-06-02', '08:17:52', 10, 40, '2023-06-21 01:17:16', '2023-06-21 01:17:16'),
(5, '1996-07-28', '23:15:36', 14, 114, '2023-06-21 01:17:16', '2023-06-21 01:17:16');

-- --------------------------------------------------------

--
-- Table structure for table `contracts`
--

CREATE TABLE `contracts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contract` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contracts`
--

INSERT INTO `contracts` (`id`, `contract`, `created_at`, `updated_at`) VALUES
(1, 'Por definir', '2023-06-21 01:17:07', '2023-06-21 01:17:07'),
(2, 'Término Fijo', '2023-06-21 01:17:07', '2023-06-21 01:17:07'),
(3, 'Término Indefinido', '2023-06-21 01:17:07', '2023-06-21 01:17:07'),
(4, 'Obra o labor', '2023-06-21 01:17:07', '2023-06-21 01:17:07');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Por definir', '2023-06-21 01:17:07', '2023-06-21 01:17:07'),
(2, 'Tarjeta de Identidad', '2023-06-21 01:17:07', '2023-06-21 01:17:07'),
(3, 'Cédula de Ciudadanía', '2023-06-21 01:17:07', '2023-06-21 01:17:07'),
(4, 'Tarjeta de Extranjeria', '2023-06-21 01:17:07', '2023-06-21 01:17:07'),
(5, 'Cédula de Extranjería', '2023-06-21 01:17:08', '2023-06-21 01:17:08');

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
(55, '2014_10_12_100000_create_password_resets_table', 1),
(56, '2019_08_19_000000_create_failed_jobs_table', 1),
(57, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(58, '2023_04_24_163922_create_documents_table', 1),
(59, '2023_04_24_164453_create_contracts_table', 1),
(60, '2023_04_25_201239_create_roles_table', 1),
(61, '2023_04_25_201240_create_users_table', 1),
(62, '2023_04_26_163516_create_people_table', 1),
(63, '2023_05_29_172457_create_certificates_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_documents` bigint(20) UNSIGNED NOT NULL,
  `doc` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `id_contracts` bigint(20) UNSIGNED NOT NULL,
  `salary` varchar(255) NOT NULL,
  `date_i` date NOT NULL,
  `date_f` date NOT NULL,
  `onus` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `pay_per_hour` varchar(255) NOT NULL,
  `id_users` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`id`, `id_documents`, `doc`, `date`, `id_contracts`, `salary`, `date_i`, `date_f`, `onus`, `area`, `pay_per_hour`, `id_users`, `created_at`, `updated_at`) VALUES
(1, 3, '1234567890', '2023-06-20', 2, '123', '2023-06-20', '2023-06-20', 'Talento Humano', 'Área', '123', 1, NULL, NULL),
(2, 1, '1234567890', '2023-06-20', 1, '1', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1', 2, NULL, NULL),
(3, 3, '1010191744', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 3, NULL, NULL),
(4, 3, '1015445645', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 4, NULL, NULL),
(5, 3, '1014306814', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 5, NULL, NULL),
(6, 3, '1110471786', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 6, NULL, NULL),
(7, 3, '1026556379', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 7, NULL, NULL),
(8, 3, '1022419785', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 8, NULL, NULL),
(9, 3, '1022366946', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 9, NULL, NULL),
(10, 3, '52986423', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 10, NULL, NULL),
(11, 3, '1030592804', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 11, NULL, NULL),
(12, 3, '1015999610', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 12, NULL, NULL),
(13, 3, '1020726372', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 13, NULL, NULL),
(14, 3, '60347555', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 14, NULL, NULL),
(15, 3, '79849027', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 15, NULL, NULL),
(16, 3, '19465494', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 16, NULL, NULL),
(17, 3, '52335958', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 17, NULL, NULL),
(18, 3, '13507576', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 18, NULL, NULL),
(19, 3, '19472803', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 19, NULL, NULL),
(20, 3, '51711175', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 20, NULL, NULL),
(21, 3, '79952023', '2023-06-20', 2, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 21, NULL, NULL),
(22, 3, '79685387', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 22, NULL, NULL),
(23, 3, '79594368', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 23, NULL, NULL),
(24, 3, '1026257764', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 24, NULL, NULL),
(25, 3, '19431842', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 25, NULL, NULL),
(26, 3, '52518180', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 26, NULL, NULL),
(27, 3, '19333786', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 27, NULL, NULL),
(28, 3, '51718899', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 28, NULL, NULL),
(29, 3, '80235620', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 29, NULL, NULL),
(30, 3, '80051309', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 30, NULL, NULL),
(31, 3, '1026254561', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 31, NULL, NULL),
(32, 3, '80424314', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 32, NULL, NULL),
(33, 3, '1022345760', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 33, NULL, NULL),
(34, 3, '79158430', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 34, NULL, NULL),
(35, 3, '79960152', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 35, NULL, NULL),
(36, 3, '1031135321', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 36, NULL, NULL),
(37, 3, '52097483', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 37, NULL, NULL),
(38, 3, '79732404', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 38, NULL, NULL),
(39, 3, '79361530', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 39, NULL, NULL),
(40, 3, '74281208', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 40, NULL, NULL),
(41, 3, '1020790573', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 41, NULL, NULL),
(42, 3, '52113539', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 42, NULL, NULL),
(43, 3, '52153848', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 43, NULL, NULL),
(44, 3, '52186290', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 44, NULL, NULL),
(45, 3, '51815663', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 45, NULL, NULL),
(46, 3, '52359037', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 46, NULL, NULL),
(47, 3, '79503622', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 47, NULL, NULL),
(48, 3, '1013645661', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 48, NULL, NULL),
(49, 3, '1065593313', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 49, NULL, NULL),
(50, 3, '1033787726', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 50, NULL, NULL),
(51, 3, '1019093268', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 51, NULL, NULL),
(52, 3, '79154384', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 52, NULL, NULL),
(53, 3, '52195180', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 53, NULL, NULL),
(54, 3, '40326022', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 54, NULL, NULL),
(55, 3, '1030638997', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 55, NULL, NULL),
(56, 3, '1019097237', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 56, NULL, NULL),
(57, 3, '52053210', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 57, NULL, NULL),
(58, 3, '1073154812', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 58, NULL, NULL),
(59, 3, '1127586868', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 59, NULL, NULL),
(60, 3, '79708041', '2023-06-20', 2, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 60, NULL, NULL),
(61, 3, '80205033', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 61, NULL, NULL),
(62, 3, '1032462260', '2023-06-20', 2, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 62, NULL, NULL),
(63, 3, '5005706870', '2023-06-20', 2, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 63, NULL, NULL),
(64, 3, '52694323', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 64, NULL, NULL),
(65, 3, '80133096', '2023-06-20', 2, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 65, NULL, NULL),
(66, 3, '9762912', '2023-06-20', 2, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 66, NULL, NULL),
(67, 3, '79686814', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 67, NULL, NULL),
(68, 3, '79896633', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 68, NULL, NULL),
(69, 3, '55167717', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 69, NULL, NULL),
(70, 3, '1110476132', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 70, NULL, NULL),
(71, 3, '1013580086', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 71, NULL, NULL),
(72, 3, '1072654855', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 72, NULL, NULL),
(73, 3, '1030623541', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 73, NULL, NULL),
(74, 3, '1019015127', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 74, NULL, NULL),
(75, 3, '52875792', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 75, NULL, NULL),
(76, 3, '52550640', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 76, NULL, NULL),
(77, 3, '51799900', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 77, NULL, NULL),
(78, 3, '1068976266', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 78, NULL, NULL),
(79, 3, '72134209', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 79, NULL, NULL),
(80, 3, '1023959836', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 80, NULL, NULL),
(81, 3, '88236238', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 81, NULL, NULL),
(82, 3, '1110555259', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 82, NULL, NULL),
(83, 3, '1022386859', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 83, NULL, NULL),
(84, 3, '79408744', '2023-06-20', 2, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 84, NULL, NULL),
(85, 3, '52783469', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 85, NULL, NULL),
(86, 3, '1072432312', '2023-06-20', 2, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 86, NULL, NULL),
(87, 3, '1026302904', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 87, NULL, NULL),
(88, 3, '1016052910', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 88, NULL, NULL),
(89, 3, '80758962', '2023-06-20', 2, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 89, NULL, NULL),
(90, 3, '52805391', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 90, NULL, NULL),
(91, 3, '1032413175', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 91, NULL, NULL),
(92, 3, '1032437365', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 92, NULL, NULL),
(93, 3, '80093597', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 93, NULL, NULL),
(94, 3, '1118199024', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 94, NULL, NULL),
(95, 3, '23782511', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 95, NULL, NULL),
(96, 3, '1136884828', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 96, NULL, NULL),
(97, 3, '1014287935', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 97, NULL, NULL),
(98, 3, '1022322060', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 98, NULL, NULL),
(99, 3, '52198628', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 99, NULL, NULL),
(100, 3, '7127448', '2023-06-20', 2, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 100, NULL, NULL),
(101, 3, '80003238', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 101, NULL, NULL),
(102, 3, '80881074', '2023-06-20', 2, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 102, NULL, NULL),
(103, 3, '79909630', '2023-06-20', 2, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 103, NULL, NULL),
(104, 3, '52419029', '2023-06-20', 2, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 104, NULL, NULL),
(105, 3, '79780502', '2023-06-20', 2, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 105, NULL, NULL),
(106, 3, '11306343', '2023-06-20', 2, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 106, NULL, NULL),
(107, 3, '80049520', '2023-06-20', 2, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 107, NULL, NULL),
(108, 3, '79704262', '2023-06-20', 2, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 108, NULL, NULL),
(109, 3, '1022404616', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 109, NULL, NULL),
(110, 3, '1193047729', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 110, NULL, NULL),
(111, 3, '1013681366', '2023-06-20', 1, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 111, NULL, NULL),
(112, 3, '1011080360', '2023-06-20', 2, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 112, NULL, NULL),
(113, 3, '52324292', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 113, NULL, NULL),
(114, 3, '80816887', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 114, NULL, NULL),
(115, 3, '52690259', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 115, NULL, NULL),
(116, 3, '79305987', '2023-06-20', 2, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 116, NULL, NULL),
(117, 3, '1019046011', '2023-06-20', 2, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 117, NULL, NULL),
(118, 3, '52355719', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 118, NULL, NULL),
(119, 3, '53007880', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 119, NULL, NULL),
(120, 3, '1012447532', '2023-06-20', 2, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 120, NULL, NULL),
(121, 3, '1000992547', '2023-06-20', 2, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 121, NULL, NULL),
(122, 3, '52953236', '2023-06-20', 2, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 122, NULL, NULL),
(123, 3, '14396227', '2023-06-20', 2, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 123, NULL, NULL),
(124, 3, '1110453620', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 124, NULL, NULL),
(125, 3, '1001050513', '2023-06-20', 2, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 125, NULL, NULL),
(126, 3, '1000213587', '2023-06-20', 2, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 126, NULL, NULL),
(127, 3, '1018473558', '2023-06-20', 2, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 127, NULL, NULL),
(128, 3, '636797', '2023-06-20', 2, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 128, NULL, NULL),
(129, 3, '1032474295', '2023-06-20', 2, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 129, NULL, NULL),
(130, 3, '36751892', '2023-06-20', 2, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 130, NULL, NULL),
(131, 3, '1022326825', '2023-06-20', 2, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 131, NULL, NULL),
(132, 3, '52422895', '2023-06-20', 2, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 132, NULL, NULL),
(133, 3, '1076649052', '2023-06-20', 2, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 133, NULL, NULL),
(134, 3, '1012322640', '2023-06-20', 1, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 134, NULL, NULL),
(135, 3, '1022951035', '2023-06-20', 2, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 135, NULL, NULL),
(136, 3, '1012449817', '2023-06-20', 1, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 136, NULL, NULL),
(137, 3, '1026575761', '2023-06-20', 3, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 137, NULL, NULL),
(138, 3, '1015421561', '2023-06-20', 2, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 138, NULL, NULL),
(139, 3, '79144074', '2023-06-20', 2, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 139, NULL, NULL),
(140, 3, '41593448', '2023-06-20', 2, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 140, NULL, NULL),
(141, 3, '1022381158', '2023-06-20', 2, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 141, NULL, NULL),
(142, 3, '80821415', '2023-06-20', 2, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 142, NULL, NULL),
(143, 3, '1010760937', '2023-06-20', 1, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 143, NULL, NULL),
(144, 3, '79750181', '2023-06-20', 2, '1200000', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1200000', 144, NULL, NULL),
(145, 3, '1234567890', '2023-06-20', 2, '123', '2023-06-20', '2023-06-20', 'Talento Humano', 'Área', '123', 145, NULL, NULL),
(146, 1, '1234567890', '2023-06-20', 1, '1', '2023-06-20', '2023-06-20', 'cargo', 'Área', '1', 146, NULL, NULL),
(147, 1, '0', '2023-06-20', 1, '0', '2023-06-20', '2023-06-20', '0', '0', '0', 147, '2023-06-21 01:28:07', '2023-06-21 01:28:07');

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Por definir', '2023-06-21 01:17:07', '2023-06-21 01:17:07'),
(2, 'Administrativos', '2023-06-21 01:17:07', '2023-06-21 01:17:07'),
(3, 'Docentes planta', '2023-06-21 01:17:07', '2023-06-21 01:17:07'),
(4, 'Docentes cátedra', '2023-06-21 01:17:07', '2023-06-21 01:17:07'),
(5, 'Aprendices', '2023-06-21 01:17:07', '2023-06-21 01:17:07'),
(6, 'Talleristas bienestar', '2023-06-21 01:17:07', '2023-06-21 01:17:07');

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
  `id_roles` bigint(20) UNSIGNED NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `id_roles`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', 'admin@uniempresarial.edu.co', NULL, '$2y$10$LbsdmAPm/19ZwopRdQnq1uc9/9Wap9p4uxNggwqnyL8WdFlWqW/Xi', 2, NULL, NULL, NULL),
(2, 'user', 'user@uniempresarial.edu.co', NULL, '$2y$10$CgPSERl4XK6OWojqyO1e4uCun7W8SnEoS2H1hf1OrMY9uA/lzb8Q.', 3, NULL, NULL, NULL),
(3, 'MARTINEZ TALERO YARLEYDI LEONOR', 'ymartinez@uniempresarial.edu.co', NULL, '$2y$10$/NH6zRGRU4sJ/FY3AkqBAO2E8tvPkt1ejBJq5pCRNZs/vwRUPvsR.', 3, NULL, NULL, NULL),
(4, 'RODRIGUEZ GARCIA CINDY PAMELA', 'cprodriguez@uniempresarial.edu.co', NULL, '$2y$10$2SbL69SVbC3iMfTpGnQJNOq.Wsf7cBm5KXnhoUZ4Ful6NnKnoRCkG', 3, NULL, NULL, NULL),
(5, 'VALENCIA  RINCON PAULA NICOL', 'pvalencia@uniempresarial.edu.co', NULL, '$2y$10$hRqWSpAgtUmvV5zviFyJIu/eGlJY2Z4cysTBETaUkMZDWtsAHF.ve', 2, NULL, NULL, NULL),
(6, 'PARRA RUIZ ESNEDA', 'esparra@uniempresarial.edu.co', NULL, '$2y$10$NReXE9/9f19bcSR/DuWx0uRYjv7JlnM7X97YJHH5wl.e6q9G0mmSK', 3, NULL, NULL, NULL),
(7, 'ANDRADE SANCHEZ KHADIDJA BIBIANA', 'bandrade@uniempresarial.edu.co', NULL, '$2y$10$8o9d.7eLt6QQeyh4nYV1zOY2ItOHyLFA51tLH/ruXpSelXozXXvse', 3, NULL, NULL, NULL),
(8, 'MARIN MORENO CARLOS ANDRES', 'cmarin@uniempresarial.edu.co', NULL, '$2y$10$/7rwufxlALRt.1BJ.QSDie8JBl05DAk.VVqygDzQqoa/ye5xeyW6K', 3, NULL, NULL, NULL),
(9, 'TRIANA MENA NASLY ANDREA ', 'atriana@uniempresarial.edu.co', NULL, '$2y$10$gS8luDTKhja9Im8OslcPxOIbE.kxBArxFuWiapLqTQxvqtpvwEe16', 3, NULL, NULL, NULL),
(10, 'CUPITRA  LUZ ADRIANA', 'lcupitra@uniempresarial.edu.co', NULL, '$2y$10$bYyHbHBTZvwOkj.RA8.qEuPMHpE1wbUuHTLFl3q6osRxK/YR8zt.2', 3, NULL, NULL, NULL),
(11, 'CRISTIAN MICHEL MENDEZ DEVIA', 'cmendez@uniempresarial.edu.co', NULL, '$2y$10$iRM8DhzLgfKo.xvbQ5mWj.52z0YQxSX8yJxjA2NbG994yjqwbgpUm', 3, NULL, NULL, NULL),
(12, 'GUEVARA MARTINEZ ANGIE JULIETH', 'aguevara@uniempresarial.edu.co', NULL, '$2y$10$5uvA1ATq4hrxDdHI/vtEPela/YNPr0BJEylf0Y1imvJ/bHKbyMrJW', 3, NULL, NULL, NULL),
(13, 'GARCIA CORDOBA ASTRID LILIANA', 'agarcia@uniempresarial.edu.co', NULL, '$2y$10$fgMFsBnVmEvMnv8nT2Qo4.t5EJkOTpdMgFQZ6fl69HNF3aZXjfGQa', 3, NULL, NULL, NULL),
(14, 'TABORDA OCAMPO BEATRIZ EUGENIA', 'btaborda@uniempresarial.edu.co', NULL, '$2y$10$z2tnz/2bf/.QEU39I0mUyO9Hw89grxcua6ByQ3Zc6JlJA.Y63ZN3y', 3, NULL, NULL, NULL),
(15, 'SUSA RUBIANO RICARDO', 'rsusa@uniempresarial.edu.co', NULL, '$2y$10$VQxJsrQXvTACvi.G7fZY4e58ubx95iGbi4dJbKmrO2yLs2s31PpC.', 3, NULL, NULL, NULL),
(16, 'HOYOS BALLESTEROS RICARDO ', 'rhoyos@uniempresarial.edu.co', NULL, '$2y$10$woftI32SqsTUe1uDMZHveefz9qkhdrqJlbr3EU936vNzeKiXDeXRW', 3, NULL, NULL, NULL),
(17, 'OLARTE RODRIGUEZ INGRID CAROLINA', 'colarte@uniempresarial.edu.co', NULL, '$2y$10$mASniofU5r8VJqYtsjEDO.wPIoDjDiVi7IK8SaLhp5NGeMe5Ae9Ee', 3, NULL, NULL, NULL),
(18, 'FERREIRA RODRIGUEZ JOSE IVAN EDUARDO', 'jferreira@uniempresarial.edu.co', NULL, '$2y$10$Guc8oXjJw5lDLDPggy3V3.c7wLds0uTOUMAPfbV8Ed/GUSTBMd8mK', 3, NULL, NULL, NULL),
(19, 'GONZALEZ NOVOA HENRY', 'hgonzalez@uniempresarial.edu.co', NULL, '$2y$10$hXr0YT.0a.LCMjqddWZHOOGXtPb3DXHPpuWB9I4fsZn5s3QPc5YRu', 3, NULL, NULL, NULL),
(20, 'ROBAYO MACIAS MARIA DEL CARMEN', 'mrobayo@uniempresarial.edu.co', NULL, '$2y$10$MGABaaYAoY/cWHWew6elyuQ6D/cexVy3butlPSXp6Ebq1YqR9IjgW', 3, NULL, NULL, NULL),
(21, 'VARGAS HERNANDEZ RICARDO AUGUSTO', 'rvargas@uniempresarial.edu.co', NULL, '$2y$10$TNgXjJzCgaTbubivXVLWleqmk031VdxhKnLkwI6kM9KQo8mtoTknK', 3, NULL, NULL, NULL),
(22, 'ACERO HENAO JACK HARBITH', 'jacero@uniempresarial.edu.co', NULL, '$2y$10$/K3keas6cMAqbzkLER057u9Wip71KRvc5UEvQj1Pj.0Z0zxGNidzq', 3, NULL, NULL, NULL),
(23, 'MENDOZA TOLOSA HENRY ANTONIO', 'hmendoza@uniempresarial.edu.co', NULL, '$2y$10$CzWsazAVw.7/yH9l8u1.p.cc51ubqY/MIBVJHTtqPL9d1hahJ6RMW', 3, NULL, NULL, NULL),
(24, 'GARCIA PINZON JUAN CARLOS', 'jugarcia@uniempresarial.edu.co', NULL, '$2y$10$XFlD08x/PsVfVf0KPakinuDpQBiPb7MUH5UdDXVs3rF.d2omuZ7O6', 3, NULL, NULL, NULL),
(25, 'JURADO DIAZ RAMON MARIA', 'mjurado@uniempresarial.edu.co', NULL, '$2y$10$79JfIUwjiB9BSik2LcvXY.Vex0AahHhBLEIS/OucuUe51C7jXv1Ja', 3, NULL, NULL, NULL),
(26, 'CHAVES BELTRAN LUISA ANDREA', 'lchaves@uniempresarial.edu.co', NULL, '$2y$10$XDKz5eQyRA2K1tgoDj7wFe6kCRgXCvvjNFVlQO2H6I7TcHyKc/z9a', 3, NULL, NULL, NULL),
(27, 'GOMEZ CARRE¥O LUIS GABRIEL', 'lgomez@uniempresarial.edu.co', NULL, '$2y$10$DpD.x8ls7Cs.Hj.AHX.WROyPZukZ9Zd5R9PBbzeYj4U2CPIO/.Eee', 3, NULL, NULL, NULL),
(28, 'RICO RUIZ FRANCY IGNORI', 'frico@uniempresarial.edu.co', NULL, '$2y$10$sb7qlbDZfngBtC5dnKW4SOv1A96cUxEN72yUDDsosHjDKeBtmL/uW', 3, NULL, NULL, NULL),
(29, 'MUÑOZ SALGADO JUAN GUILLERMO', 'jumunoz@uniempresarial.edu.co', NULL, '$2y$10$2NDwMRwtIEy97GlPNMPVSO.4stzQR7MTie1loGyYYMigwpm/6Hive', 3, NULL, NULL, NULL),
(30, 'ALDANA MIRANDA DANIEL ORLANDO', 'daldana@uniempresarial.edu.co', NULL, '$2y$10$dRpA2Rl2sWwWn6wl907ZCeLiSADIH54ZJ4N0.oSeDvqP3vPpvgKd2', 3, NULL, NULL, NULL),
(31, 'CARDONA VARGAS JENNY ANDREA', 'acardona@uniempresarial.edu.co', NULL, '$2y$10$L92eswZR2jwaDyez2fbrdeiussMoLxnp9Wshbi5qREE75MXEC94N.', 3, NULL, NULL, NULL),
(32, 'DUQUE MIRANDA JUAN CARLOS', 'jcduque@uniempresarial.edu.co', NULL, '$2y$10$zucm.j62vYDJASE8.gubCudl3TKJikxVnlk/Zx5h7vmWlNvhMkFJq', 3, NULL, NULL, NULL),
(33, 'ARGUELLO VASQUEZ ANDRES MAURICIO ', 'aarguello@uniempresarial.edu.co', NULL, '$2y$10$dyvZKIA9DXSuMJEC91HkRerh/rE3erqyKrPOKnyVV5FRWPwzqFgNK', 3, NULL, NULL, NULL),
(34, 'RODRIGUEZ GOMEZ JUAN CARLOS', 'jurodriguez@uniempresarial.edu.co', NULL, '$2y$10$zhPtg8RcQ0gm.kq.7Sj/8eXWj.jawCbfzHYJ0QnIIhmH7.lBkm7ry', 3, NULL, NULL, NULL),
(35, 'VILLA RIVERA JOAQUIN ANDRES', 'jvilla@uniempresarial.edu.co', NULL, '$2y$10$CK96yUnXjwOWLc3nswp3UutkX97dOk0xmuCgt2YRD0J9NL.N9WKGi', 3, NULL, NULL, NULL),
(36, 'GUATAVITA ORDOÑEZ LAURA XIMENA', 'lguatavita@uniempresarial.edu.co', NULL, '$2y$10$lCd/azksRftjk26.bscB9.xdWXtdwPJodBVb1.Mtl5Dpu/NMB7pAu', 3, NULL, NULL, NULL),
(37, 'BONILLA  ANA LUCIA', 'abonilla@uniempresarial.edu.co', NULL, '$2y$10$N7Msuo2BXWtEjfSvCK2yheWCnM3Cils3he5ncS6lz1fcEUCW6MWTi', 3, NULL, NULL, NULL),
(38, 'LEON VILLANUEVA ALEXANDER', 'aleon@uniempresarial.edu.co', NULL, '$2y$10$OOkPEQCBaC31rwxnCRAfp.KEQr67BfdCj0KP/X66WXKcj8aL0/Xye', 3, NULL, NULL, NULL),
(39, 'TORRES SANMIGUEL WILLIAM PETER', 'wtorres@uniempresarial.edu.co', NULL, '$2y$10$SA4BpYkMhZkVDB2WXjAQhuXVqnOFUC0oQIpS9rpPOkyEwg3sZoXCO', 3, NULL, NULL, NULL),
(40, 'MORA CALDERON NELSON ', 'nmora@uniempresarial.edu.co', NULL, '$2y$10$S73er65tpAntoTOtHoQYden6k5fCXOnDMyAI1tn/tSj57QxjXXg9W', 3, NULL, NULL, NULL),
(41, 'MURILLO BARRERA LAURA GERALDINE', 'lmurillo@uniempresarial.edu.co', NULL, '$2y$10$VgIcul5ODV9Fa1gcVTJPrejVOcVxBaK.PJD6lq3axRV3dt8cU/jIq', 3, NULL, NULL, NULL),
(42, 'LIZARAZO JIMENEZ LUZ YAZMIN', 'llizarazo@uniempresarial.edu.co', NULL, '$2y$10$iNMoAFUPZfBIo1DQNDYWzuJrpOj6P0USq635DkXWVfp8IPTheKY4C', 3, NULL, NULL, NULL),
(43, 'SUAREZ CORTES LYDA ADRIANA', 'lsuarez@uniempresarial.edu.co', NULL, '$2y$10$SVFWLybq9DC17xtuopWHJOUzdfUlhu77joqP3p.7eWqznvtQauyQi', 3, NULL, NULL, NULL),
(44, 'HIGUERA SARMIENTO SANDRA JOHANA', 'shiguera@uniempresarial.edu.co', NULL, '$2y$10$dMIjATxfV.kkyTGiJXnrWeMdAzuEBainczMJQBmFcWNUMnKFCx4cO', 3, NULL, NULL, NULL),
(45, 'REYES MORENO LUZ MARLENN', 'lreyes@uniempresarial.edu.co', NULL, '$2y$10$47yqW7vAU7AmuE5cRY96n.f9SGbqZUGl3jMJQc7BIKIcfATjkzWVm', 3, NULL, NULL, NULL),
(46, 'ACOSTA AMAYA AURA CAROLINA', 'aacosta@uniempresarial.edu.co', NULL, '$2y$10$Seu0AUr3vUCPWI/VrcuiWOJa5eQzE6iYTITt.5fgELg27JBdJP4yO', 3, NULL, NULL, NULL),
(47, 'CASTELLANOS ACOSTA LUIS FELIPE', 'lcastellanos@uniempresarial.edu.co', NULL, '$2y$10$GqwBcSGrmtRmVmiVYJXttejI16P2kWLJxQGabT3z1BEIF4g0XD76q', 3, NULL, NULL, NULL),
(48, 'NIÑO CHIVARA LUISA FERNANDA', 'lnino@uniempresarial.edu.co', NULL, '$2y$10$UqQxw/VBSHkc3OOQ0Ad.Y.i/zs7AdMKBGlKJ555XOY7fyzAH19Rqq', 3, NULL, NULL, NULL),
(49, 'LAMBRA¥O ROMERO SARA LUZ', 'slambrano@uniempresarial.edu.co', NULL, '$2y$10$igHhoDTZ/ZCNcCkTfLgFguOetKZv88oebwUPqCSIEuvfhhiHKD.h6', 3, NULL, NULL, NULL),
(50, 'HOYOS RUIZ DUVAN CAMILO', 'dhoyos@uniempresarial.edu.co', NULL, '$2y$10$Wv/72IY539FpG35Csi2SWue/TnciobTvUe86oq9Lym4sxzFb08tKy', 3, NULL, NULL, NULL),
(51, 'GOMEZ PAREDES LAURA VERONICA', 'lagomez@uniempresarial.edu.co', NULL, '$2y$10$QmizXO4aFo2m/UNfiKPW2.zFnuH0H2uk6IxAu/1ZDzbtaVB8YQ.s2', 3, NULL, NULL, NULL),
(52, 'LANGEBAEK RUEDA CARL HENRIK', 'clangebaek@uniempresarial.edu.co', NULL, '$2y$10$x2Wjuvhq1bu1wMInNcfKMeGSsxfGl6g1kuF4yTc5zNMG.Zo4Ufx.O', 3, NULL, NULL, NULL),
(53, 'TORO LEAL NORMA ALEXANDRA', 'atoro@uniempresarial.edu.co', NULL, '$2y$10$8asSJb5XGHXPlkQ/scBKa.sIfp/u5bYCocbabQw1YDFre/jIu8iAm', 3, NULL, NULL, NULL),
(54, 'ROBLES VILLABONA NIDIA JOHANNA', 'nrobles@uniempresarial.edu.co', NULL, '$2y$10$uZaTmp0rGKnrAWCMHpO4TeCpIfPcwHCDkCFS/qmvsv.icHMM3Ozsu', 3, NULL, NULL, NULL),
(55, 'DUQUE MORALES SANDRA MILENA', 'sduque@uniempresarial.edu.co', NULL, '$2y$10$xm3nFOkXdiofGAO/yBWMjuiGifrl/ptQ7wNBCDrqGjzgZNn/Blax.', 3, NULL, NULL, NULL),
(56, 'MONTERO HENDE GUSTAVO ANDRES', 'gamontero@uniempresarial.edu.co', NULL, '$2y$10$0cIFShdinwmx75cQbB7VPuzfTfdQkDmxsLWSjPSO4JOku.2ocxY12', 3, NULL, NULL, NULL),
(57, 'MOLINA ROJAS YASMIN', 'ymolina@uniempresarial.edu.co', NULL, '$2y$10$HPO5O/aw1ideadjHGbB9Lu/i.RcoM/hDZS/LAdYbFdGrq3XAh3VLW', 3, NULL, NULL, NULL),
(58, 'TRUJILLO VARGAS GIOVANNY HERNANDO', 'gtrujillo@uniempresarial.edu.co', NULL, '$2y$10$fYknIcORJfxvbZ0P.MTDbO.bnQtthw5AEj24bnthQpKKr0jB4JfJq', 3, NULL, NULL, NULL),
(59, 'DELGADO JAIMES KELLYN JOHANNA', 'kdelgado@uniempresarial.edu.co', NULL, '$2y$10$BWtsigVlTZQSKRrSb85RuOajqFVGamDfM/7DX3CpitbSz4iGlLnmC', 3, NULL, NULL, NULL),
(60, 'TORRES ARIZA JAIME MAURICIO', 'jtorres@uniempresarial.edu.co', NULL, '$2y$10$nGJ9hBAvoX1/PNjoPWn/f./bt3hIy0t8Ve8JF5rSnqdUEOwO8p9cS', 3, NULL, NULL, NULL),
(61, 'ROJAS LEON JUAN PABLO', 'jrleon@uniempresarial.edu.co', NULL, '$2y$10$j1suwMd065x22KNr.L6XGeJv32FkaKOT26TVdZmkTqnQ4o.ICiEG2', 3, NULL, NULL, NULL),
(62, 'CHAPARRO HERNANDEZ ELSY NATHALIA', 'echaparro@uniempresarial.edu.co', NULL, '$2y$10$AaMfxwy1TJMsol94U5cKgeBX1oYClZsRHsYVSCIPhg03RFe4WcWk6', 3, NULL, NULL, NULL),
(63, 'CASTILLO RAMIREZ ADOLFO DAVID', 'acastillor@uniempresarial.edu.co', NULL, '$2y$10$obEhlpaqlJ0cWhe4Ckf7Xuvj1GpKz0/KQJqQ.9zI228mpLjLSEW4O', 3, NULL, NULL, NULL),
(64, 'ACHURY PRADA YENNY', 'yachury@uniempresarial.edu.co', NULL, '$2y$10$IgFPQwR4jzcMn.61cp1DrOCSTTrJ1AzoJZECuiJ5Td72vWSPATODS', 3, NULL, NULL, NULL),
(65, 'MANUEL FERNANDO TORRES CIFUENTES', 'mtorres@uniempresarial.edu.co', NULL, '$2y$10$pOa4KOkcjQgjLL.wlOEXSeRlxyCLX2a.PDh/b0RI20.wRPxiJMec6', 3, NULL, NULL, NULL),
(66, 'CASTAÑO CHAMORRO CAMILO ALEXEY', 'ccastanoc@uniempresarial.edu.co', NULL, '$2y$10$wGNrShmxLaY2U5oYlWCm2e4bRCjY6TbD2NysXjXvDhoJVNPVwqScW', 3, NULL, NULL, NULL),
(67, 'ZARUR LATORRE FRANCISCO SAID', 'fzarur@uniempresarial.edu.co', NULL, '$2y$10$5N1IOPZzZZoJHmwPetuPuu0vRuPq4KQH40dXPIB/4Nu79yunLmPty', 3, NULL, NULL, NULL),
(68, 'SANDOVAL LLANOS JOHN JAIRO', 'jsandoval@uniempresarial.edu.co', NULL, '$2y$10$jfUVDr0bO8G8WAdHm6U38uTtZBoVT6rORD53.aXQD7h.imbtgdp8O', 3, NULL, NULL, NULL),
(69, 'PUENTES CAMINOS MARGARITA ELENA', 'mpuentesc@uniempresarial.edu.co', NULL, '$2y$10$6VcYH1su7wJ9Ugmb0GuyJOK.G9eXpSyt1CFUZI72ShdO7mfJ7n6vq', 3, NULL, NULL, NULL),
(70, 'HURTADO RUIZ EDWIN', 'ehurtado@uniempresarial.edu.co', NULL, '$2y$10$7Xn2nVuM4mxlf4FkSNOMG.Qg3I4NNqlGUv90K0aLd0RYQ2eFDfjd.', 3, NULL, NULL, NULL),
(71, 'FONSECA GUTIERREZ MARIA ALEJANDRA', 'afonseca@uniempresarial.edu.co', NULL, '$2y$10$UBP5O5kEgNZnkAkDIu2l9Oxik5M8xKP12fACJmpLsnA9oM98Blm/i', 3, NULL, NULL, NULL),
(72, 'GOMEZ SEGURA CARLOS ENRIQUE', 'cegomez@uniempresarial.edu.co', NULL, '$2y$10$Q5YiNiCFofNIVU0DHBZpuuqHY/XYTd8HFtyEsACdeXgPa6YpDbwxW', 3, NULL, NULL, NULL),
(73, 'ARBELAEZ ARTEAGA SONIA PATRICIA', 'sarbelaez@uniempresarial.edu.co', NULL, '$2y$10$BRjO4RaxIrl5Bsg1pCjODOP81.6Su9J6DumUsve6DM6aacNmVK.8q', 3, NULL, NULL, NULL),
(74, 'FAJARDO MORENO CAMILO ANDRES', 'cfajardo@uniempresarial.edu.co', NULL, '$2y$10$F/HPoj6KAT8C6dPA7D/uIe7tXD35h3BfChPk7/cIFHL6pCEpNTy.O', 3, NULL, NULL, NULL),
(75, 'RATIVA HUERTAS CLAUDIA SOFIA', 'crativa@uniempresarial.edu.co', NULL, '$2y$10$V5uIw3T2e6il9dVwxJ354.nRqT2v6Pyhpl2i8ImQyuIXoyH0nJV0m', 3, NULL, NULL, NULL),
(76, 'ALVAREZ ZULUAGA LUZ FATIMA', 'lalvarez@uniempresarial.edu.co', NULL, '$2y$10$EgjZy.zH2d7QvEvAq0HlqeR0yHaNLlidjVy9knLvyqS.ud3VWFNwm', 3, NULL, NULL, NULL),
(77, 'HOYOS RESTREPO JUANA MARGARITA', 'jhoyos@uniempresarial.edu.co', NULL, '$2y$10$SkVbwNswKDZDEz2R5YwMdumDGkeZdKSpRisVUkaPCThn1qdQUwZjS', 3, NULL, NULL, NULL),
(78, 'PACHON GUTIERREZ ADRIANA PAOLA', 'apachon@uniempresarial.edu.co', NULL, '$2y$10$yNrhaXwr9ZRsSdjwQ2obX.NJ2KBXvU/RfaY7X9aWTJgtlkycP3xZG', 3, NULL, NULL, NULL),
(79, 'BELTRAN GOMEZ ADAN', 'abeltran@uniempresarial.edu.co', NULL, '$2y$10$HzsthyPYcSAkOmsLNB/sqOE2.yJWybHCR32UC.djshsdJH6XeOm9S', 3, NULL, NULL, NULL),
(80, 'RINCON FUENTES JEIMY CAROLINA', 'jrinconf@uniempresarial.edu.co', NULL, '$2y$10$eALfc4l4HbPElpP0myygLuU9fsrMQDYpnjV0LVelw6eGDN6IKTtK.', 3, NULL, NULL, NULL),
(81, 'ESPINOSA VELASQUEZ JOHN JAIRO', 'jespinosa@uniempresarial.edu.co', NULL, '$2y$10$9mkqUpGk5OhvdLjfa6zLVeZcPwRxtV4uSb8wDtJZBEx9L63RNjnOS', 3, NULL, NULL, NULL),
(82, 'SAAVEDRA MARTINEZ LUISA FERNANDA', 'lsaavedra@uniempresarial.edu.co', NULL, '$2y$10$jFJJjQGm4bnSA7MZsMcJl.mzCk2Fxr4Z0L7WNyPnTzpdC3b8W/.jS', 3, NULL, NULL, NULL),
(83, 'ROMERO JIMENEZ KAROL VIVIANA', 'kvromero@uniempresarial.edu.co', NULL, '$2y$10$H1hLzFKGOqxIxzPZoiBzl.Fb5Uhk3f3xFyiVbn81N7YY5rd5GykPq', 3, NULL, NULL, NULL),
(84, 'LIZARAZO SIERRA NESTOR JAVIER', 'nlizarazo@uniempresarial.edu.co', NULL, '$2y$10$wrtAXaRo6JutpKlpgJIAIuDvvPrPgMXJmvt7sjQMqAn3tAwK8lyJy', 3, NULL, NULL, NULL),
(85, 'CARRERO FORERO IBETH BIBIANA', 'icarrero@uniempresarial.edu.co', NULL, '$2y$10$0lo2EUTECkfyn9cjsFdL5ObDr02q7gdvxlSSWv6t..yfQtPVI4Ex6', 3, NULL, NULL, NULL),
(86, 'NEME MAYORGA YEIMY MAGALY', 'ymagaly@uniempresarial.edu.co', NULL, '$2y$10$3cD53SlBqz/VpfpB0hBG0uF4Kv4e8DpCrcNDOCacZG949W9sJYN9G', 3, NULL, NULL, NULL),
(87, 'BERMUDEZ RODRIGUEZ ERICK SEBASTIAN', 'ebermudezr@uniempresarial.edu.co', NULL, '$2y$10$rEjOL0ocdi/dJBjbfiSoZ.LCizZxuAGQ1oawMFbRgFAZdtBPECRxO', 3, NULL, NULL, NULL),
(88, 'ARIZA CARRILLO MARIA FERNANDA', 'mariza@uniempresarial.edu.co', NULL, '$2y$10$NJ.SLPQKhlAATOoUX2vEbuQ1gDtSeVba/yY.5yrnm3EIqgFn8hFLa', 3, NULL, NULL, NULL),
(89, 'PEREZ RODRIGUEZ CARLOS ANDRES', 'cperez@uniempresarial.edu.co', NULL, '$2y$10$lAHpJbL0mNkxAlRPgjs71.76Gt1JuojjthEQBOyr5Dgk5ubxGCUcu', 3, NULL, NULL, NULL),
(90, 'CARDOZO CABAS GINA GELTRUDIS', 'gcardozo@uniempresarial.edu.co', NULL, '$2y$10$VwCPf29UKzdcfW/a1z7hU.I//LDwiQDwFG5xwaubJvrPEINP./vp6', 3, NULL, NULL, NULL),
(91, 'VARGAS SANTIAGO MILLER ESNEYDER', 'mvargas@uniempresarial.edu.co', NULL, '$2y$10$81vrSzOlLljO8VCYT9PBXOXicpxrajbMNJ5DzH0RhmrmDxynlE1ci', 3, NULL, NULL, NULL),
(92, 'VARGAS TELLEZ DIANA CATALINA', 'dvargas@uniempresarial.edu.co', NULL, '$2y$10$yxeMtQpC6.MuL2m8ZAj6KeTeJ0VNKf3QZ2QLja1AHvRKOKHJiNs7m', 3, NULL, NULL, NULL),
(93, 'OLIVARES TENORIO MIGUEL ANGEL ', 'molivares@uniempresarial.edu.co', NULL, '$2y$10$WXVcdtmy3bjRqooWATAaGu84TOzj8c2GW7Q8XI2krTRsN3MtT2gtC', 3, NULL, NULL, NULL),
(94, 'LESMES ALFONSO JESSICA ANDREA', 'jlesmes@uniempresarial.edu.co', NULL, '$2y$10$wevgN/hFkyAAxS2vOYolZuNlzvBr0TaB363IDWydipttySRDTxWZS', 3, NULL, NULL, NULL),
(95, 'VELANDIA RUIZ CLAUDIA', 'cvelandiar@uniempresarial.edu.co', NULL, '$2y$10$vPCtUJv/sVU.5DCVBkie/.IHk8jilUZaRhCLmavn.AGNHNM6QHDLS', 3, NULL, NULL, NULL),
(96, 'BUENO CASALLAS ANDRES FELIPE ', 'abueno@uniempresarial.edu.co', NULL, '$2y$10$ZqcS9B9gdXoy6pD6.wye3u1ylFNH8rbDrwPPELwcdNZJ6AcsDmKuO', 3, NULL, NULL, NULL),
(97, 'JULETH JULIANA IBARRA RAMIREZ', 'jibarra@uniempresarial.edu.co', NULL, '$2y$10$YQQDPhHj8eheOo6zMadnc.lWjHPQb7TRSltY9/8CL.8ZQJwk.CB9y', 3, NULL, NULL, NULL),
(98, 'MOLANO MORENO MILLER STEVEN', 'mmolanos@uniempresarial.edu.co', NULL, '$2y$10$vC/pQCdloJtsPYnSUGobYOjpMJ8NaAszkqBUZgSZnZIV8rU0qRNIK', 5, NULL, NULL, NULL),
(99, 'GARCIA AVILA BEATRIZ HELENA', 'bgarcia@uniempresarial.edu.co', NULL, '$2y$10$w5CS97SOW2KN1.GQn4fKp.ABLroT.uaBPagT.zfe2pPUeeBrikWj.', 3, NULL, NULL, NULL),
(100, 'CASTILLO CASTELLANOS DIEGO FERNANDO', 'dcastillof@uniempresarial.edu.co', NULL, '$2y$10$hm17e.xXI7DqqlAIzTLGyOLk5Jy2uxH9qztPbYFWB3y0uHn/gW23K', 3, NULL, NULL, NULL),
(101, 'TORRES VISASUS JOVANNI ANDRES', 'jtorresv@uniempresarial.edu.co', NULL, '$2y$10$69y.TaXyWpjjP/mb5lYdgOUvwLQgUbY0h12ayNu3EjWVa7xYM80Fu', 3, NULL, NULL, NULL),
(102, 'NEIRA RUEDA JAVIER ORLANDO', 'jdneira@uniempresarial.edu.co', NULL, '$2y$10$7Z9OH059QSqN5sCl6IMuNevqANQ53/iRJK50XsRPjeLtdNQ1EjLrO', 3, NULL, NULL, NULL),
(103, 'GODOY GIL OSCAR FELIPE', 'ogodoy@uniempresarial.edu.co', NULL, '$2y$10$Ev61rvjUUZ.kOZkgKAMyOetbx6qkbmJrMX5finyxvXc.SlgHj0umG', 3, NULL, NULL, NULL),
(104, 'CAMARGO PABON MARCELA', 'mcamargo@uniempresarial.edu.co', NULL, '$2y$10$9gnXBgmviCWGIgu8YBgVeeAARyAmn8BrlDrG8t/XbQMCNZJ/cOaEi', 3, NULL, NULL, NULL),
(105, 'CAMERO ANGARITA FABIO ENRIQUE', 'fcamero@uniempresarial.edu.co', NULL, '$2y$10$KbI93o9V.AY0k8ADUUDdmOtGslMIa/BZLo3ck8MdZlJN4h9w3UJK6', 3, NULL, NULL, NULL),
(106, 'ESTEFAN RAMIREZ FRANCISCO', 'festefan@uniempresarial.edu.co', NULL, '$2y$10$GIlXFzIgGJZ027vWGzFrRu3EAu18kivOq69uEYdXQpUa6NuQyAOWC', 3, NULL, NULL, NULL),
(107, 'MARIN YAIMA JOSE ALEJANDRO', 'jmarin@uniempesarial.edu.co', NULL, '$2y$10$QHEEWHo2tXMF1Df9A6Qi8uLt2d6VaVC8wkw9V7rw7kTjNrv/e3wry', 3, NULL, NULL, NULL),
(108, 'RUIZ GUERRERO YOVANNY', 'yruiz@uniempresarial.edu.co', NULL, '$2y$10$TduSJhQYbjgRgr3jOIn9.O/dpWCKcQZmsZCNCk8HWC.NG0UXra9F6', 3, NULL, NULL, NULL),
(109, 'RAMIREZ PINZON LUISA DANIELA', 'ldramirez@uniempresarial.edu.co', NULL, '$2y$10$Td9YdRJaEUUZ8qWWKkPA3.HcuqtApCuLhJ6EenHUztCB9YO5zscCC', 3, NULL, NULL, NULL),
(110, 'SAENZ GUERRERO CARLOS ANDRES', 'csaenz@uniempresarial.edu.co', NULL, '$2y$10$P992Jvnjp1TH7Vs8yB4gV.3FWzTIyMw7ktay7QMEoHBPc8r5NURY.', 5, NULL, NULL, NULL),
(111, 'DUARTE HERNANDEZ KEVIN', 'kduarteh@uniempresarial.edu.co', NULL, '$2y$10$xeyU3GFqDn6pkGXDDQo6Iue6YanTQv/Nl9fQYBBk/4RKxtTqPR5xi', 3, NULL, NULL, NULL),
(112, 'GARCIA VALERO JULIANA', 'jgarciav@uniempresarial.edu.co', NULL, '$2y$10$nZ7DWnxezXjhw8WA.V.KdejHRB6C4iLDWLK6UKy9AYUtJOmOKddhC', 3, NULL, NULL, NULL),
(113, 'MELO MUÑOZ DIANA ROCIO', 'drmelo@uniempresarial.edu.co', NULL, '$2y$10$Qw8YqiNdwDuJrhA5EQo58u7MlRCGYqbLcnf/98mFI9rAZBVWBkO22', 3, NULL, NULL, NULL),
(114, 'BUITRAGO MALAMBO CHRISTIAN ', 'chbuitrago@uniempresarial.edu.co', NULL, '$2y$10$vN7TZund8T8SUKos5w01He2hSaVAamsXhHoU1TcxEChQ/aNRLPRLa', 3, NULL, NULL, NULL),
(115, 'CASALLAS LOZANO MARGARITA MARÖA', 'mcasallas@uniempresarial.edu.co', NULL, '$2y$10$IQ89btDsA4VS1QyQJ3AumeYYEptdyzGJpoPWclJ7YenbDVQG1LPnO', 3, NULL, NULL, NULL),
(116, 'ZAMUDIO ESPINOSA WILLIAM ARMANDO', 'wzamudio@uniempresarial.edu.co', NULL, '$2y$10$iBmZGWNOknSxK2OILc4qU.aIdtU7fP//qkgwL2gaTtdm6rhk9t.XG', 3, NULL, NULL, NULL),
(117, 'OVIEDO LLANOS ADRIANA MARIA ', 'aoviedo@uniempresarial.edu.co', NULL, '$2y$10$DjMOp1F04..MN98pBo.29egH7xe00FZUVycC13w8qVzeFmnNZHvJC', 3, NULL, NULL, NULL),
(118, 'VEGA MENDEZ MILLERLANDHY', 'mvega@uniempresarial.edu.co', NULL, '$2y$10$mrdLUSOyn/d1Ce/Wbd0lf.guTJa0nMPjkXyD0a0fmFUoIHi0LSp8u', 3, NULL, NULL, NULL),
(119, 'BULA DE LEON KATHERINE ', 'kbula@uniempresarial.edu.co', NULL, '$2y$10$Y3w9pZzsz6dKZqXMph8eJ.AURs96MnGjF86.VSoIW9SZbd9prokGy', 3, NULL, NULL, NULL),
(120, 'RUBIANO RODRIGUEZ PABLO ANTONIO', 'prubiano@uniempresarial.edu.co', NULL, '$2y$10$K05gJlAigdwfc4cFa5BDi.8qeM81Lwi0ksIx8i1pRjMk3W9bHJ/RS', 3, NULL, NULL, NULL),
(121, 'ARIAS ARIAS EVELYN DAYANA', 'earias@uniempresarial.edu.co', NULL, '$2y$10$7L5yyIkk2q.GD6h4GMWMXOBryQzSwr0d3wapJzCBOwU50rT4k6m3u', 3, NULL, NULL, NULL),
(122, 'SANDOVAL GALVIS MARIA ANGELICA', 'masandoval@uniempresarial.edu.co', NULL, '$2y$10$.A3Wq6E5gQ2/klIbt3dNjuX26crEwJzEyygAHI.udfp5E/DR/bdMC', 3, NULL, NULL, NULL),
(123, 'AGUILAR SANCHEZ JOSE EDWIN ', 'jeaguilar@uniempresarial.edu.co', NULL, '$2y$10$N/cYaHBRU1DPZsFT5jLcWuGl9DcgTSnwC8y0GNHz0Z2Ijy9UDyWCi', 3, NULL, NULL, NULL),
(124, 'SERRANO SERRATO LEIDY VIVIANA ', 'lvserrano@uniempresarial.edu.co', NULL, '$2y$10$Xs5L0Vr1T6FxH04BB2k/GuaDBYwtPQjbUaXUyvXbZOo9v/7vJEa2O', 3, NULL, NULL, NULL),
(125, 'LOPEZ VARON LUISA FERNANDA ', 'llopezv@uniempresarial.edu.co', NULL, '$2y$10$tgvVVED6EvlwG9WUKWlF8e79xm5cNUIIuVbeqDP9ACsDpd9TMVZsm', 3, NULL, NULL, NULL),
(126, 'VALENCIA AYALA LIZETH MARIANA ', 'lvalenciaa@uniempresarial.edu.co', NULL, '$2y$10$g2Iq8LAbDx8wAOeN5Pn3OOrObXpRaA3GpEEv7CiEiMYkECXUMvWei', 3, NULL, NULL, NULL),
(127, 'CASTAÑO BONILLA SEBASTIAN FELIPE  ', 'scastano@uniempresarial.edu.co', NULL, '$2y$10$oXb0/L5cZQZ2mgZsiq2Cgu3OOQkGzldmUHcYYpTqOdMosz2tkjjuy', 3, NULL, NULL, NULL),
(128, 'CAMPOS JULCA CRISTHIAM DANIEL ', 'ccampos@uniempresarial.edu.co', NULL, '$2y$10$oQOwGV5XHhsIkjKcZ9hVLO.OgXYBYFcH47YQE5owN1mb2C/dY/vBW', 3, NULL, NULL, NULL),
(129, 'RESTREPO DUARTE ESTEFANIA', 'erestrepo@uniempresarial.edu.co', NULL, '$2y$10$H28gGaWmS1b/7CXOMiOdMOqhZZEeXYzavYzX9n7jGpUw0HqVm3u/6', 3, NULL, NULL, NULL),
(130, 'AGUIRRE ROMO DIANA ARELY', 'draguirre@uniempresarial.edu.co', NULL, '$2y$10$QVACY21Lw3B8SdPNCY6IT.jH9oQejertkYWp.m83xw46wO1ofFwem', 3, NULL, NULL, NULL),
(131, 'GARAVITO PEREZ CARLOS EDUARDO', 'cgaravito@uniempresarial.edu.co', NULL, '$2y$10$.jSueQOoIB/A0Ve.1sBqlesTFaZPaYP0KdaIytUvo7/BOU7CjIGDu', 3, NULL, NULL, NULL),
(132, 'CACERES CLAUDIA JULIANA', 'ccaceres@uniempresarial.edu.co', NULL, '$2y$10$7NScJepl9gXkPiXO9pP66.8.4q4ExaBZV28/hrzSNZjxpVbwwOB/C', 3, NULL, NULL, NULL),
(133, 'MONTAÑO ORTIZ EDWIN', 'emontano@uniempresarial.edu.co', NULL, '$2y$10$8bJc5RrX/GpG/i6uSijyKOmCsAyC9b3t6KExiP07IWKyjmjVXrd2O', 3, NULL, NULL, NULL),
(134, 'REY CRUZ CARLOS ANDRES', 'crey@uniempresarial.edu.co', NULL, '$2y$10$1FMWLHxETctF55xXPj3uCefwPQ5EQ6lpJXOhb6NaDGolLJnI1m3fq', 5, NULL, NULL, NULL),
(135, 'ROJAS RINCON JOAN SEBASTIAN ', 'jrojasr@uniempresarial.edu.co', NULL, '$2y$10$X4rBjqYn7Zz/c2/iP5C3MeTbStda4sDjqUFI.tCOuEwPkCl9iVfQW', 3, NULL, NULL, NULL),
(136, 'CARDENAS HERRERA CLAUDIA PATRICIA', 'cpcardenas@uniempresarial.edu.co', NULL, '$2y$10$7yraC0aQgemPqebrH2uVD.M2n8Lqb2JmrilqmwBOReWn.wvqa9vFC', 5, NULL, NULL, NULL),
(137, 'ARCILA RODRIGUEZ KELLY GERALDYN', 'karcila@uniempresarial.edu.co', NULL, '$2y$10$hKbyfUf/sK7.ikJwZSxnkeBw3TBY/w0q.b5j/jBx0vy0z/QyzlTiW', 3, NULL, NULL, NULL),
(138, 'RODRIGUEZ HERRERA SINDY ASTRID', 'srodriguez@uniempresarial.edu.co', NULL, '$2y$10$pPvy4e4c0giFep9d0Q9Y/O1RNkQeYQcvfzrw5q8bB9QvL4WNf3Rmy', 3, NULL, NULL, NULL),
(139, 'FERREIRA ACOSTA ALEJANDRA', 'aferreira@uniempresarial.edu.co', NULL, '$2y$10$YH20XWaEIL0kq7JUT4xGpOf4YFXdV4Yp26wHC3hQl20ZefKgcDMMy', 3, NULL, NULL, NULL),
(140, 'GOMEZ ROLDAN IGNACIO', 'igomez@uniempresarial.edu.co', NULL, '$2y$10$aVnOreEt14y3yuHk6s4If.rR59euVj.yelMjkRCIrNOftHAioo.u.', 3, NULL, NULL, NULL),
(141, 'GAITAN DE RONDEROS MARIA TERESA', 'mgaitan@uniempresarial.edu.co', NULL, '$2y$10$KFdLYfRSVtsZawc7YT82auK7JXxhCDMDrChpo3N8HI2HJxbzFOkJS', 3, NULL, NULL, NULL),
(142, 'GONZALEZ MENDOZA DIEGO FERNANDO', 'dgonzalezm@uniempresarial.edu.co', NULL, '$2y$10$C5Y.JouUSywcD1K.gbU3ZeL//qR5G8pSn8MY8lcGNUx3Rc5x2xzIG', 5, NULL, NULL, NULL),
(143, 'DEVIA HURTADO DAVID SANTIAGO ', 'ddevia@uniempresarial.edu.co', NULL, '$2y$10$4PLo3HF/8HGBAc.xgPusGeOhCBQPUGRVEfORg48WTOF.UHRmljM8S', 5, NULL, NULL, NULL),
(144, 'GALINDO RINCON WILLIAM RAFAEL', 'wgalindo@uniempresarial.edu.co', NULL, '$2y$10$GtxHYpB4ims3p29NxoYfLuhmf4keOS9fXygi57HaDTFk.vXteOP9O', 3, NULL, NULL, NULL),
(145, 'Administrador', 'admin@gmail.com', NULL, '$2y$10$LIPURqXpGq8sAo3kut0D7./WC2xis6V9HB5uSWKKeS9PPrtjZqiHO', 2, NULL, NULL, NULL),
(146, 'user', 'user@gmail.com', NULL, '$2y$10$kXFCg5uBEyaHS5n3CcFda.sq3mJTDWVOfzF2p59W.v.U3w.nKi1QK', 3, NULL, NULL, NULL),
(147, '0', 'a@a', NULL, '$2y$10$hb8czIuInTq.CzAA0EFFdu9K7hNvumkmt4LofLuibDtrRv.UNs9jS', 1, NULL, '2023-06-21 01:28:07', '2023-06-21 01:28:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `certificates_id_people_foreign` (`id_people`),
  ADD KEY `certificates_id_users_foreign` (`id_users`);

--
-- Indexes for table `contracts`
--
ALTER TABLE `contracts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`),
  ADD KEY `people_id_documents_foreign` (`id_documents`),
  ADD KEY `people_id_contracts_foreign` (`id_contracts`),
  ADD KEY `people_id_users_foreign` (`id_users`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_id_roles_foreign` (`id_roles`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contracts`
--
ALTER TABLE `contracts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `certificates`
--
ALTER TABLE `certificates`
  ADD CONSTRAINT `certificates_id_people_foreign` FOREIGN KEY (`id_people`) REFERENCES `people` (`id`),
  ADD CONSTRAINT `certificates_id_users_foreign` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`);

--
-- Constraints for table `people`
--
ALTER TABLE `people`
  ADD CONSTRAINT `people_id_contracts_foreign` FOREIGN KEY (`id_contracts`) REFERENCES `contracts` (`id`),
  ADD CONSTRAINT `people_id_documents_foreign` FOREIGN KEY (`id_documents`) REFERENCES `documents` (`id`),
  ADD CONSTRAINT `people_id_users_foreign` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_id_roles_foreign` FOREIGN KEY (`id_roles`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
