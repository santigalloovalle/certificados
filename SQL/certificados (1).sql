-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-05-2023 a las 19:46:27
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `certificados`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contracts`
--

CREATE TABLE `contracts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contract` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `contracts`
--

INSERT INTO `contracts` (`id`, `contract`) VALUES
(1, 'Tiempo completo'),
(2, 'Medio tiempo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documents`
--

CREATE TABLE `documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `documents`
--

INSERT INTO `documents` (`id`, `type`) VALUES
(1, 'Tarjeta de Identidad'),
(2, 'Cedula de Ciudadania'),
(3, 'Tarjeta de Extranjeria'),
(4, 'Cedula de Extranjeria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
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
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_04_24_163922_documents', 1),
(6, '2023_04_24_164453_contracts', 1),
(7, '2023_04_25_201239_roles', 1),
(8, '2023_04_26_163516_people', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `people`
--

CREATE TABLE `people` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_documents` bigint(20) UNSIGNED NOT NULL,
  `doc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_roles` bigint(20) UNSIGNED NOT NULL,
  `id_contracts` bigint(20) UNSIGNED NOT NULL,
  `salary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pay_per_hour` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_users` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `people`
--

INSERT INTO `people` (`id`, `name`, `id_documents`, `doc`, `id_roles`, `id_contracts`, `salary`, `pay_per_hour`, `id_users`, `created_at`, `updated_at`) VALUES
(1, 'Test', 2, '123', 2, 1, '123', '123', 1, '2023-05-04 23:18:39', '2023-05-04 23:18:39'),
(2, 'Elsie Vandervort Sr.', 1, '21565', 1, 1, '85780', '22926', 1, '2023-05-04 23:45:43', '2023-05-04 23:45:43'),
(3, 'Autumn Schuppe', 1, '10310', 1, 1, '44141', '47181', 1, '2023-05-04 23:45:43', '2023-05-04 23:45:43'),
(4, 'Roderick Daniel', 1, '22158', 1, 1, '47864', '44086', 1, '2023-05-04 23:45:43', '2023-05-04 23:45:43'),
(5, 'Katlyn Schneider', 1, '38977', 1, 1, '38514', '38214', 1, '2023-05-04 23:45:43', '2023-05-04 23:45:43'),
(6, 'Joaquin Zemlak', 1, '64764', 1, 1, '19799', '51897', 1, '2023-05-04 23:45:43', '2023-05-04 23:45:43'),
(7, 'Freida Corwin', 1, '47218', 1, 1, '22254', '87720', 1, '2023-05-04 23:45:43', '2023-05-04 23:45:43'),
(8, 'Prof. Tremaine Waelchi PhD', 1, '22682', 1, 1, '54478', '27741', 1, '2023-05-04 23:45:43', '2023-05-04 23:45:43'),
(9, 'Mr. Jocelyn Gorczany', 1, '19848', 1, 1, '14068', '37316', 1, '2023-05-04 23:45:43', '2023-05-04 23:45:43'),
(10, 'Nola Volkman', 1, '64198', 1, 1, '82347', '16014', 1, '2023-05-04 23:45:43', '2023-05-04 23:45:43'),
(11, 'Dr. Dion Kovacek PhD', 1, '85456', 1, 1, '93192', '83131', 1, '2023-05-04 23:45:43', '2023-05-04 23:45:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
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
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `role`) VALUES
(1, 'Administrativos'),
(2, 'Profesores de planta'),
(3, 'Profesores de catedra'),
(4, 'Aprendices'),
(5, 'Talleristas bienestar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'egallo@uniempresarial.edu.co', NULL, '$2y$10$mX3nFy57hjIM4CXu8iNh2Of2lRVZj5PPEfNc0l3jUsswzUakehGb2', NULL, '2023-05-04 23:02:10', '2023-05-04 23:02:10'),
(2, 'ernest.wehner@example.org', '2023-05-04 23:42:11', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'B2vOtoQnW7', '2023-05-04 23:42:11', '2023-05-04 23:42:11'),
(3, 'becker.ervin@example.com', '2023-05-04 23:42:11', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'vwWTmahN3o', '2023-05-04 23:42:11', '2023-05-04 23:42:11'),
(4, 'cgislason@example.org', '2023-05-04 23:42:11', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'hY98h1GLx2', '2023-05-04 23:42:11', '2023-05-04 23:42:11'),
(5, 'khalid08@example.net', '2023-05-04 23:42:11', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'q2wrtQkXhB', '2023-05-04 23:42:11', '2023-05-04 23:42:11'),
(6, 'bmitchell@example.org', '2023-05-04 23:42:11', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '4t5MifOtTn', '2023-05-04 23:42:11', '2023-05-04 23:42:11'),
(7, 'green.abdullah@example.net', '2023-05-04 23:42:11', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'xKLnHutY3b', '2023-05-04 23:42:11', '2023-05-04 23:42:11'),
(8, 'eudora.kerluke@example.org', '2023-05-04 23:42:11', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'l8dTRa75UL', '2023-05-04 23:42:11', '2023-05-04 23:42:11'),
(9, 'ashlee55@example.net', '2023-05-04 23:42:11', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1uqdcki0yx', '2023-05-04 23:42:11', '2023-05-04 23:42:11'),
(10, 'harvey.hilario@example.net', '2023-05-04 23:42:11', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'eblDVhpV5W', '2023-05-04 23:42:11', '2023-05-04 23:42:11'),
(11, 'mossie15@example.net', '2023-05-04 23:42:11', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'HOz1QyXVvx', '2023-05-04 23:42:11', '2023-05-04 23:42:11'),
(12, 'isadore78@example.org', '2023-05-04 23:43:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1c6hD5AoTl', '2023-05-04 23:43:03', '2023-05-04 23:43:03'),
(13, 'thurman.shanahan@example.net', '2023-05-04 23:43:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Cp5au3hSkD', '2023-05-04 23:43:03', '2023-05-04 23:43:03'),
(14, 'cecelia.collier@example.org', '2023-05-04 23:43:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ln8IQGkxtA', '2023-05-04 23:43:03', '2023-05-04 23:43:03'),
(15, 'justina.becker@example.net', '2023-05-04 23:43:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '66t9YyJMRJ', '2023-05-04 23:43:03', '2023-05-04 23:43:03'),
(16, 'francis.connelly@example.org', '2023-05-04 23:43:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'FMguZ3j1vS', '2023-05-04 23:43:03', '2023-05-04 23:43:03'),
(17, 'ron.hermann@example.net', '2023-05-04 23:43:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Of3RsD8hIs', '2023-05-04 23:43:03', '2023-05-04 23:43:03'),
(18, 'carter.willard@example.com', '2023-05-04 23:43:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'rezNfSnDrR', '2023-05-04 23:43:03', '2023-05-04 23:43:03'),
(19, 'vhessel@example.org', '2023-05-04 23:43:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'gxz92OU5B9', '2023-05-04 23:43:03', '2023-05-04 23:43:03'),
(20, 'ola95@example.com', '2023-05-04 23:43:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'gQqtzBH73R', '2023-05-04 23:43:03', '2023-05-04 23:43:03'),
(21, 'mellie63@example.net', '2023-05-04 23:43:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'yBTnHOAOVB', '2023-05-04 23:43:03', '2023-05-04 23:43:03'),
(22, 'payton86@example.net', '2023-05-04 23:43:33', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '7HSc81BjL3', '2023-05-04 23:43:33', '2023-05-04 23:43:33'),
(23, 'keebler.verda@example.net', '2023-05-04 23:43:33', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'qXId7xmrNt', '2023-05-04 23:43:33', '2023-05-04 23:43:33'),
(24, 'nikolas81@example.com', '2023-05-04 23:43:33', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'FUcRqS8Spr', '2023-05-04 23:43:33', '2023-05-04 23:43:33'),
(25, 'terry19@example.org', '2023-05-04 23:43:33', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '8QyO44uyIC', '2023-05-04 23:43:33', '2023-05-04 23:43:33'),
(26, 'probel@example.net', '2023-05-04 23:43:33', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Lg3x8BCfZ5', '2023-05-04 23:43:33', '2023-05-04 23:43:33'),
(27, 'sarina21@example.com', '2023-05-04 23:43:33', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'FPzrUMy1Sx', '2023-05-04 23:43:33', '2023-05-04 23:43:33'),
(28, 'pbailey@example.com', '2023-05-04 23:43:33', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '3aACLir0Dh', '2023-05-04 23:43:33', '2023-05-04 23:43:33'),
(29, 'kirlin.brown@example.org', '2023-05-04 23:43:33', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'hDDSZcUhUD', '2023-05-04 23:43:33', '2023-05-04 23:43:33'),
(30, 'emoore@example.com', '2023-05-04 23:43:33', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '5Y3uMVbWiD', '2023-05-04 23:43:33', '2023-05-04 23:43:33'),
(31, 'yjast@example.com', '2023-05-04 23:43:33', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'UV5OC3E3PA', '2023-05-04 23:43:33', '2023-05-04 23:43:33'),
(32, 'west.wava@example.net', '2023-05-04 23:43:58', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '9DPKNY965b', '2023-05-04 23:43:58', '2023-05-04 23:43:58'),
(33, 'iborer@example.com', '2023-05-04 23:43:58', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'pJ8p0HOqAZ', '2023-05-04 23:43:58', '2023-05-04 23:43:58'),
(34, 'elza88@example.net', '2023-05-04 23:43:58', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ACerW4VMiL', '2023-05-04 23:43:58', '2023-05-04 23:43:58'),
(35, 'dabshire@example.org', '2023-05-04 23:43:58', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'b5KSl4iXo5', '2023-05-04 23:43:58', '2023-05-04 23:43:58'),
(36, 'barton.misty@example.com', '2023-05-04 23:43:58', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'IUmxhxwefA', '2023-05-04 23:43:58', '2023-05-04 23:43:58'),
(37, 'moriah.cassin@example.org', '2023-05-04 23:43:58', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'vpcmQJMutK', '2023-05-04 23:43:58', '2023-05-04 23:43:58'),
(38, 'wade31@example.org', '2023-05-04 23:43:58', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'V1kBfKOtA2', '2023-05-04 23:43:58', '2023-05-04 23:43:58'),
(39, 'araynor@example.com', '2023-05-04 23:43:58', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'gO9aQt05lA', '2023-05-04 23:43:58', '2023-05-04 23:43:58'),
(40, 'june.hermann@example.com', '2023-05-04 23:43:58', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'rYGsgfevcC', '2023-05-04 23:43:58', '2023-05-04 23:43:58'),
(41, 'ydicki@example.org', '2023-05-04 23:43:58', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '6lMIdKTeug', '2023-05-04 23:43:58', '2023-05-04 23:43:58'),
(42, 'streich.nyah@example.net', '2023-05-04 23:44:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'FeZennQn4T', '2023-05-04 23:44:27', '2023-05-04 23:44:27'),
(43, 'skilback@example.net', '2023-05-04 23:44:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'u6ehASC9CV', '2023-05-04 23:44:27', '2023-05-04 23:44:27'),
(44, 'frances92@example.com', '2023-05-04 23:44:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'LWsmmBdX6H', '2023-05-04 23:44:27', '2023-05-04 23:44:27'),
(45, 'susan.ferry@example.org', '2023-05-04 23:44:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '8J4wgTqbMQ', '2023-05-04 23:44:27', '2023-05-04 23:44:27'),
(46, 'esperanza.zulauf@example.net', '2023-05-04 23:44:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '8svNJmJqna', '2023-05-04 23:44:27', '2023-05-04 23:44:27'),
(47, 'franecki.zachary@example.org', '2023-05-04 23:44:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '3nUQQFrXAr', '2023-05-04 23:44:27', '2023-05-04 23:44:27'),
(48, 'howell.art@example.org', '2023-05-04 23:44:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'HCLha29juZ', '2023-05-04 23:44:27', '2023-05-04 23:44:27'),
(49, 'kpadberg@example.net', '2023-05-04 23:44:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'xnO6pkRZd7', '2023-05-04 23:44:27', '2023-05-04 23:44:27'),
(50, 'neva.dickens@example.com', '2023-05-04 23:44:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '0JZdawKhcd', '2023-05-04 23:44:27', '2023-05-04 23:44:27'),
(51, 'walker.natalie@example.com', '2023-05-04 23:44:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '8hGzH5GNZt', '2023-05-04 23:44:27', '2023-05-04 23:44:27'),
(52, 'wuckert.eliane@example.com', '2023-05-04 23:45:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '6iOquiCBFm', '2023-05-04 23:45:17', '2023-05-04 23:45:17'),
(53, 'schinner.emilio@example.net', '2023-05-04 23:45:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'IAfxQqvyNu', '2023-05-04 23:45:17', '2023-05-04 23:45:17'),
(54, 'adrien73@example.net', '2023-05-04 23:45:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'fLs3Zk7Q3f', '2023-05-04 23:45:17', '2023-05-04 23:45:17'),
(55, 'littel.stephania@example.org', '2023-05-04 23:45:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'O1vJiVDHOW', '2023-05-04 23:45:17', '2023-05-04 23:45:17'),
(56, 'brad.mills@example.net', '2023-05-04 23:45:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'udKUzouuG3', '2023-05-04 23:45:17', '2023-05-04 23:45:17'),
(57, 'vdibbert@example.net', '2023-05-04 23:45:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'dtgiSRjlxQ', '2023-05-04 23:45:17', '2023-05-04 23:45:17'),
(58, 'mdeckow@example.com', '2023-05-04 23:45:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'vhsOlKg6Nv', '2023-05-04 23:45:17', '2023-05-04 23:45:17'),
(59, 'lauriane18@example.com', '2023-05-04 23:45:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '0Tpr2DX72O', '2023-05-04 23:45:17', '2023-05-04 23:45:17'),
(60, 'ahegmann@example.net', '2023-05-04 23:45:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'FUZHQHRi2A', '2023-05-04 23:45:17', '2023-05-04 23:45:17'),
(61, 'lcole@example.net', '2023-05-04 23:45:17', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Cbqe0IeBBl', '2023-05-04 23:45:17', '2023-05-04 23:45:17'),
(62, 'violet19@example.net', '2023-05-04 23:45:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'cs1KDjDW3v', '2023-05-04 23:45:43', '2023-05-04 23:45:43'),
(63, 'savannah84@example.org', '2023-05-04 23:45:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'H027ODzuWI', '2023-05-04 23:45:43', '2023-05-04 23:45:43'),
(64, 'gregorio.klein@example.org', '2023-05-04 23:45:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'pwon57y1e5', '2023-05-04 23:45:43', '2023-05-04 23:45:43'),
(65, 'julius.hills@example.com', '2023-05-04 23:45:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'yQhp4J0NUO', '2023-05-04 23:45:43', '2023-05-04 23:45:43'),
(66, 'rey.kerluke@example.com', '2023-05-04 23:45:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'mNhy2gpSY1', '2023-05-04 23:45:43', '2023-05-04 23:45:43'),
(67, 'zoey44@example.com', '2023-05-04 23:45:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '4kZLbdKf0R', '2023-05-04 23:45:43', '2023-05-04 23:45:43'),
(68, 'haag.alvis@example.org', '2023-05-04 23:45:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'w2iiCfMB1j', '2023-05-04 23:45:43', '2023-05-04 23:45:43'),
(69, 'medhurst.eliseo@example.org', '2023-05-04 23:45:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ZFCUPWDx4X', '2023-05-04 23:45:43', '2023-05-04 23:45:43'),
(70, 'rosalee44@example.org', '2023-05-04 23:45:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '3cRztFBIXC', '2023-05-04 23:45:43', '2023-05-04 23:45:43'),
(71, 'kuphal.rosendo@example.net', '2023-05-04 23:45:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2ZGjmyHCgZ', '2023-05-04 23:45:43', '2023-05-04 23:45:43');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contracts`
--
ALTER TABLE `contracts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`),
  ADD KEY `people_id_documents_foreign` (`id_documents`),
  ADD KEY `people_id_roles_foreign` (`id_roles`),
  ADD KEY `people_id_contracts_foreign` (`id_contracts`),
  ADD KEY `people_id_users_foreign` (`id_users`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contracts`
--
ALTER TABLE `contracts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `people`
--
ALTER TABLE `people`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `people`
--
ALTER TABLE `people`
  ADD CONSTRAINT `people_id_contracts_foreign` FOREIGN KEY (`id_contracts`) REFERENCES `contracts` (`id`),
  ADD CONSTRAINT `people_id_documents_foreign` FOREIGN KEY (`id_documents`) REFERENCES `documents` (`id`),
  ADD CONSTRAINT `people_id_roles_foreign` FOREIGN KEY (`id_roles`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `people_id_users_foreign` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
