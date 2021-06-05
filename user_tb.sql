-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for thronehomesltd
CREATE DATABASE IF NOT EXISTS `thronehomesltd` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `thronehomesltd`;

-- Dumping structure for table thronehomesltd.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL DEFAULT '2',
  `admin_id` int(11) DEFAULT NULL,
  `content_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `middlename` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `channel` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_phone_unique` (`phone`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table thronehomesltd.users: ~18 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` (`id`, `role_id`, `admin_id`, `content_id`, `name`, `middlename`, `lastname`, `email`, `email_verified_at`, `password`, `address`, `city`, `country`, `phone`, `channel`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 1, 0, 0, 'Daomnitraders', 'Enterprises', 'Limited', 'emmanuel@daomnitraders.com', NULL, '$2y$10$PM.SwOdWpwZ4upxP1PfdBe.eS.e6wzkG886Wq/eE1LKsBcARA.ta6', 'Abuja', 'Abuja', 'Nigeria', '1234567890', 'http://localhost:7020/thronehomes/public', NULL, '2021-04-04 06:37:27', '2021-04-04 06:37:27'),
	(2, 3, 2, 1, 'emmanuel ilori', NULL, NULL, 'emma2474u@gmail.com', NULL, '$2y$10$WnyMosc0Ug2Nc0UMDLy3gOkxQehG9gAq/LCfyzECgo9a/UdhP/jhC', '123, Abuja', NULL, NULL, '08169612348', NULL, NULL, '2021-04-04 07:41:32', '2021-04-04 07:41:32'),
	(4, 12, 2, 2, 'Emmanuel', 'Olukolapo', 'ILORI', 'emma2474u2@gmail.com', NULL, '$2y$10$yAQIEwUwROgzXJaHjPxGTeZk3DzBqrdkEn/SYW59CfFfejmpZvayi', 'Abuja', NULL, NULL, '08169612340', NULL, NULL, '2021-04-04 14:29:14', '2021-04-04 14:29:14'),
	(5, 12, 2, 3, 'Emmanuel', 'Olukolapo', 'ILORI', 'emma1111111@gmail.com', NULL, '$2y$10$eTycVNxjH1pRlcfO2dnPi.u6aoVBHrNBH8kN77loV8BgyoD18Vsfe', 'Abuja', NULL, NULL, '08111111111', NULL, NULL, '2021-04-04 19:51:15', '2021-04-04 19:51:15'),
	(6, 12, 2, 4, 'Emmy', 'Olukolapo', 'ILORI', 'emma232323@gmail.com', NULL, '$2y$10$YvNHkb72BNV3Q/9YvSZv/e0wPTKUyoOd3w4086ti7V6x0aWpSVZOG', 'Abuja', NULL, NULL, '0802323232323', NULL, NULL, '2021-04-04 20:12:14', '2021-04-04 20:12:14'),
	(7, 12, 2, 5, 'emmy', 'Olu', 'ILORI', 'emmy121212@gmail.com', NULL, '$2y$10$BytvXhMb3/inPqGEzGE5VOBBC53EC03cI3nU3zcNs0lXz4Uyue2U2', 'Abuja', NULL, NULL, '08012121212', NULL, NULL, '2021-04-04 20:21:57', '2021-04-04 20:21:57'),
	(8, 12, 2, 6, 'Emmanuel', 'Olukolapo', 'ILORI', 'emma23456@gmail.com', NULL, '$2y$10$2btvKpNx83Vs0ONErMMZ2erErQUi5EKKXXy2A9E9Xy5La/PFkBepm', 'Abuja', NULL, NULL, '0909512121212', NULL, NULL, '2021-04-04 21:12:06', '2021-04-04 21:12:06'),
	(9, 12, 2, 7, 'Emmanuel', 'Olukolapo', 'ILORI', '12e214214@gmail.com', NULL, '$2y$10$OHWz6O85xWh2kW7570Zvie7WF.BFapeMTTcCUH2MgbBrj59hkFEeq', 'Abuja', NULL, NULL, '08111123222', NULL, NULL, '2021-04-04 21:13:17', '2021-04-04 21:13:17'),
	(10, 12, 2, 8, 'Emmanuella', 'Olukolapo', 'ILORI', 'emma5555@gmail.com', NULL, '$2y$10$a8d6OGXTwzFi878nlnUUnujjlG5d29uOptRkgEUZmizvvA4EGfXEG', 'Abuja', NULL, NULL, '08055555555', NULL, NULL, '2021-04-05 13:02:09', '2021-04-05 13:02:09'),
	(11, 12, 2, 9, 'Emmanuell0', 'Olukolapo', 'ILORI', 'emma66660@gmail.com', NULL, '$2y$10$VQCGdJbxA89zGXW.fJhsc.YR6fMBYoRgRjmFPBVR576N76WRCWFqi', '123, Abuja', NULL, NULL, '08066666660', NULL, NULL, '2021-04-05 13:19:12', '2021-04-05 13:19:12'),
	(14, 12, 2, 10, 'Emmanuel', 'Olukolapo', 'ILORI', 'emmy1234567890@gmail.com', NULL, '$2y$10$lISp9THkYcNfbpnRGZ.hf.rtbxzRV8UZ9RJ5zdjy3KaZwcTA2a7vi', '12345, Abuja', 'Abuja', 'Nigeria', '09012345667', NULL, NULL, '2021-04-05 13:31:30', '2021-04-05 13:31:30'),
	(15, 12, 2, 11, 'Sharon', NULL, 'Ooja', 'sharon.ooja@thronehomesltd.com', NULL, '$2y$10$.9EflB6hX5hPpksq.r2jIOpPd9yZxl4emCkP9C9N6i.PCCX8SLPQu', 'Abuja Office of ThroneHomes', 'Abuja', 'Nigeria', '07062010348', NULL, NULL, '2021-04-05 19:56:16', '2021-04-05 19:56:16'),
	(16, 12, 2, 12, 'lekan', NULL, 'Ilori', 'Thronecargo@gmail.com', NULL, '$2y$10$i2auwfcFEh16elH0n3UahOB7.OzuL9OQdB77C7sKX4W7DvOHjkzmq', '3300 W Rosecrans Ave, Suite 204', NULL, NULL, '3109568795', NULL, NULL, '2021-04-05 19:58:39', '2021-04-05 19:58:39'),
	(17, 11, 2, 10, 'Smart Samuel', NULL, NULL, 'raysamtob@gmail.com', NULL, '$2y$10$MH7repmmoWgCX1IdBOyqDOHt5Z7Xxhps7GW1WPqxKQ0.4Wo2WmP32', 'Lagos, Nigeria', NULL, NULL, '+2347065384842', NULL, NULL, '2021-04-06 07:20:23', '2021-04-06 07:20:23'),
	(18, 12, 2, 13, 'Favour', 'N.', 'Eze', 'missfeze@gmail.com', NULL, '$2y$10$ZrRRVMjIjKXc3jh0f2TKg.bq/z7j9FNNDoaxQlTJa7R9KmK/oaxz.', 'Updc Estate,Lekki', NULL, NULL, '08148176963', NULL, NULL, '2021-04-20 00:07:44', '2021-04-20 00:07:44'),
	(19, 2, NULL, NULL, 'Adegbola Kehinde', NULL, NULL, 'adegbolakehindesimisola@gmail.com', NULL, '$2y$10$5AWBnJcRkNUBfgeq/NAYmO2jpVhOQGunzhwM8rJbgL42a1KA4TY7a', 'lugbe abuja', NULL, NULL, '08169725786', NULL, NULL, '2021-04-21 11:14:43', '2021-04-21 11:14:43'),
	(20, 12, 2, 14, 'Muhsin', 'Adekunle', 'Mikail', 'mikailabdulmuhsin@gmail.com', NULL, '$2y$10$.5U5trwAxCwhh.yzOXlDBORIaBRXnaoQbohaeCc.kO7YcZXokGyRW', '6 Aleniboro  tanke oke odo Ilorin Kwara State', 'Ilorin', 'Nigeria', '08136031542', NULL, NULL, '2021-04-25 12:44:48', '2021-04-25 12:44:48'),
	(21, 12, 2, 15, 'Ekenedilichukwu', NULL, 'Ozonuwe', 'ekene.ozonuwe@gmail.com', NULL, '$2y$10$Dv6IXo9UVSzM0lvHZaUVreoX5v8e11uhcgrCp5RLVnMz0lm8GEugS', '22 Janda Court Etobicoke, ontario', NULL, NULL, '+15199656858', NULL, NULL, '2021-04-26 19:39:22', '2021-04-26 19:39:22');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
