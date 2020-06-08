-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 08-06-2020 a las 19:55:58
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_final`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cobradors`
--

DROP TABLE IF EXISTS `cobradors`;
CREATE TABLE IF NOT EXISTS `cobradors` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

DROP TABLE IF EXISTS `mensajes`;
CREATE TABLE IF NOT EXISTS `mensajes` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `send_id` int(10) UNSIGNED NOT NULL,
  `recibe_id` int(10) UNSIGNED NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`id`, `send_id`, `recibe_id`, `body`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 'ss', '2020-06-08 05:02:10', '2020-06-08 05:02:10'),
(2, 1, 3, 'sss', '2020-06-08 05:02:34', '2020-06-08 05:02:34'),
(3, 1, 7, 'sss', '2020-06-08 05:14:17', '2020-06-08 05:14:17'),
(4, 1, 3, 'zzz', '2020-06-08 05:15:10', '2020-06-08 05:15:10'),
(5, 1, 5, 'Paga', '2020-06-08 05:18:53', '2020-06-08 05:18:53'),
(6, 1, 3, 'hh', '2020-06-08 05:20:44', '2020-06-08 05:20:44'),
(7, 1, 6, 'Hola', '2020-06-08 05:25:00', '2020-06-08 05:25:00'),
(8, 1, 3, 'Joaa', '2020-06-08 05:25:54', '2020-06-08 05:25:54'),
(9, 1, 2, 'El pago del servicio esta por vencer', '2020-06-08 06:35:12', '2020-06-08 06:35:12'),
(10, 1, 2, 'Hola', '2020-06-08 07:26:28', '2020-06-08 07:26:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(10, '2014_10_12_000000_create_users_table', 1),
(11, '2014_10_12_100000_create_password_resets_table', 1),
(12, '2019_08_19_000000_create_failed_jobs_table', 1),
(13, '2020_06_04_175722_create_suscriptors_table', 2),
(14, '2020_06_04_175840_create_cobradors_table', 2),
(15, '2020_06_04_180317_create_servicios_table', 2),
(16, '2020_06_07_222719_create_mensajes_table', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`(250))
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

DROP TABLE IF EXISTS `servicios`;
CREATE TABLE IF NOT EXISTS `servicios` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Costo` decimal(8,2) NOT NULL,
  `MontoMora` decimal(8,2) NOT NULL,
  `Foto1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Foto2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Foto3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `Nombre`, `Costo`, `MontoMora`, `Foto1`, `Foto2`, `Foto3`, `created_at`, `updated_at`) VALUES
(9, 'Spinnig', '450.00', '25.00', '2086633925.jpg', '517753742.jpg', '2035736724.jpg', '2020-06-07 23:43:32', '2020-06-08 00:23:27'),
(7, 'Pesas', '350.00', '10.00', '643447870.png', '409898232.jpg', '1966232780.jpg', '2020-06-05 05:11:30', '2020-06-08 00:34:57'),
(10, 'Crossfit', '600.00', '20.00', '1436556193.jpg', '1200646407.jpg', '796715963.jpg', '2020-06-07 23:57:43', '2020-06-08 00:29:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suscriptors`
--

DROP TABLE IF EXISTS `suscriptors`;
CREATE TABLE IF NOT EXISTS `suscriptors` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rol` enum('cobrador','suscriptor') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'suscriptor',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`) USING HASH
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `rol`, `created_at`, `updated_at`) VALUES
(1, 'angel', 'angel_allan_duy@hotmail.com', NULL, '$2y$10$AEG/s0hWpitCV.WLFMnhxeDmj58y7/RmijjhnrZwCsEA5NEoh0BC2', NULL, 'cobrador', '2020-06-03 23:37:36', '2020-06-03 23:37:36'),
(2, 'yescas', 'ayescas255@gmail.com', NULL, '$2y$10$v5FmW5dJts.vVB2DNxDAROS4xRYHAn5tqxJYzvynEb.8w6mGqV6g6', 'Ee92bQ6INV3L3Ek5ARzCYwlfS2LoDzUtgcW96qJa5WzesDtwlkLkwRaZDLEI', 'suscriptor', '2020-06-04 23:46:47', '2020-06-04 23:46:47'),
(3, 'antonio', 'angel66@hotmail.es', NULL, '$2y$10$ElMJ6NxzII9y10VDg6HreuFUxm35DTh7fw261iMt52E4ah6g.TPRO', NULL, 'suscriptor', '2020-06-04 23:51:01', '2020-06-04 23:51:01'),
(5, 'angelevidenciascrud', 'e1guzman@ittg.edu.mx', NULL, '$2y$10$fH.Zkv4dV4U08S7JIkY6neq9f7oQ/WdSu3JD00SbLL1ff1vAVHnyS', NULL, 'suscriptor', '2020-06-04 23:54:34', '2020-06-04 23:54:34'),
(6, 'angelevidenciascrudajax', 'dogor75@live.com.mx', NULL, '$2y$10$hFg8Xsrq/lpdxA5hv8r8KeThwHmr41KD4jvBv4fY6AS13szDZRHb6', NULL, 'suscriptor', '2020-06-05 00:00:55', '2020-06-05 00:00:55'),
(7, 'carlos', 'carlo66@gmail.com', NULL, '$2y$10$ctSFlfo45HcQAZ639LKX8OPwe6giK.sfKD1Ick4bUecoeZr0eLoU6', NULL, 'suscriptor', '2020-06-08 00:36:08', '2020-06-08 00:36:08'),
(8, 'sistemas', 'anto96@gmail.com', NULL, '$2y$10$FQV0LqTVF/HxWyWjArCuNOi5cUzr3XioF7TJ2gCU2QttOShiPYeOi', NULL, 'suscriptor', '2020-06-08 09:48:41', '2020-06-08 09:48:41');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
