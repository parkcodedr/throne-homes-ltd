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
DROP DATABASE IF EXISTS `thronehomesltd`;
CREATE DATABASE IF NOT EXISTS `thronehomesltd` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `thronehomesltd`;

-- Dumping structure for table thronehomesltd.daomniorders
DROP TABLE IF EXISTS `daomniorders`;
CREATE TABLE IF NOT EXISTS `daomniorders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) DEFAULT NULL,
  `content_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `othername` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maritalststatus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'backend/images/placeholder.png',
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_mode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_plan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_price` decimal(13,2) DEFAULT NULL,
  `price_pay` decimal(13,2) DEFAULT NULL,
  `pay_monthly` decimal(13,2) DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `officeaddress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idtype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idcard` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idpassport` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'backend/images/placeholder.png',
  `learn_about` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_reference` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'standby',
  `kin_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kin_relationship` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kin_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kin_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kin_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kin_city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preferred_location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plot` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `daomnilandtypes_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table thronehomesltd.daomniorders: ~18 rows (approximately)
/*!40000 ALTER TABLE `daomniorders` DISABLE KEYS */;
REPLACE INTO `daomniorders` (`id`, `admin_id`, `content_id`, `user_id`, `firstname`, `title`, `lastname`, `othername`, `date_of_birth`, `gender`, `maritalststatus`, `email`, `address`, `passport`, `group`, `payment_mode`, `payment_plan`, `order_price`, `price_pay`, `pay_monthly`, `phone`, `employer`, `officeaddress`, `city`, `idtype`, `idcard`, `idpassport`, `learn_about`, `transaction_reference`, `status`, `kin_name`, `kin_relationship`, `kin_phone`, `kin_email`, `kin_address`, `kin_city`, `preferred_location`, `plot`, `agent`, `payment_type`, `daomnilandtypes_id`, `created_at`, `updated_at`) VALUES
	(1, 2, 1, 2, 'emmanuel', NULL, 'ilori', NULL, NULL, NULL, NULL, 'emma2474u@gmail.com', '123, Abuja', 'public/frontend/images/passports/00ebee2f5a18210eefd47a295e3bf4cf.JPG', 'Lands', NULL, 'installments', 2700000.00, 750000.00, 302500.00, '08169612348', NULL, NULL, NULL, NULL, NULL, 'backend/images/placeholder.png', 'thanks', NULL, 'standby', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '6', 1, '2021-04-04 07:41:32', '2021-04-04 07:41:32'),
	(2, 2, 2, 2, 'emmanuel', NULL, 'ilori', NULL, NULL, NULL, NULL, 'emma2474u@gmail.com', '123, Abuja', 'public/frontend/images/passports/00ebee2f5a18210eefd47a295e3bf4cf.JPG', 'Lands', NULL, 'installments', 2700000.00, 750000.00, 302500.00, '08169612348', NULL, NULL, NULL, NULL, NULL, 'backend/images/placeholder.png', 'thanks', 'vrzH5fWXdwoG14FvXl6aIaoSN', 'confirmed', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '6', 1, '2021-04-04 07:42:07', '2021-04-04 07:42:23'),
	(3, 2, 3, 2, 'emmanuel', NULL, 'ilori', NULL, NULL, NULL, NULL, 'emma2474u@gmail.com', '123, Abuja', 'public/frontend/images/passports/00ebee2f5a18210eefd47a295e3bf4cf.JPG', 'Lands', NULL, 'installments', 2700000.00, 750000.00, 302500.00, '08169612348', NULL, NULL, NULL, NULL, NULL, 'backend/images/placeholder.png', 'thanks', NULL, 'standby', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '6', 1, '2021-04-04 07:53:57', '2021-04-04 07:53:57'),
	(4, 2, 4, 17, 'Smart', 'Mr', 'Samuel', 'DAD', '2021-04-07', 'Male', 'Single', 'raysamtob@gmail.com', 'Lagos, Nigeria', 'public/frontend/images/passports/b7863d882a4476df8e44351f5f8c2e2d.jpg', 'Lands', NULL, 'installments', 2700000.00, 750000.00, 650000.00, '+2347065384842', NULL, 'Lagos, Nigeria', 'Oshodi', 'Voter\'s Card', '3242412313', 'public/frontend/images/passports/2266445f20c3104cf5166fde6c70814f.jpg', 'OK', NULL, 'standby', 'LOP', 'BROTHER', '+2347065384842', 'raysamtob@gmail.com', 'Lagos, Nigeria', 'Oshodi', 'LONDON', '1', '21321312', '3', 1, '2021-04-06 07:23:46', '2021-04-06 07:23:46'),
	(5, 2, 5, 2, 'Emmanuel', 'Mr', 'ILORI', 'Olukolapo', '1981-04-06', 'Male', 'Single', 'emma2474u@gmail.com', '123, Abuja', 'public/frontend/images/passports/1ab84bd66c27a76d7d9ac7536a71c1aa.JPG', 'Lands', NULL, 'installments', 2700000.00, 750000.00, 110000.00, '09099999999', 'Throne Investment Homes Ltd', 'Abuja HQ', 'Abuja/Nigeria', 'Driver\'s License', '1234567890', 'public/frontend/images/passports/89717a08e38490ee4dee785f7cc4ed81.jpg', 'Thanks for the medium', NULL, 'standby', 'ILORI Olalekan', 'Sibling', '09090000000', 'olalekan@thronehomesltd.com', 'CA', 'CA/USA', 'Lugbe', '1', 'emmanuel/1234567890', '6', 1, '2021-04-06 07:40:30', '2021-04-06 07:40:30'),
	(6, 2, 6, 2, 'Emmanuel', 'Mr', 'ILORI', 'Olukolapo', '1981-04-06', 'Male', 'Single', 'emma2474u@gmail.com', '123, Abuja', 'public/frontend/images/passports/1ab84bd66c27a76d7d9ac7536a71c1aa.JPG', 'Lands', NULL, 'installments', 2700000.00, 750000.00, 110000.00, '09099999999', 'Throne Investment Homes Ltd', 'Abuja HQ', 'Abuja/Nigeria', 'Driver\'s License', '1234567890', 'public/frontend/images/passports/89717a08e38490ee4dee785f7cc4ed81.jpg', 'Thanks for the medium', NULL, 'standby', 'ILORI Olalekan', 'Sibling', '09090000000', 'olalekan@thronehomesltd.com', 'CA', 'CA/USA', 'Lugbe', '1', 'emmanuel/1234567890', '6', 1, '2021-04-06 07:41:04', '2021-04-06 07:41:04'),
	(7, 2, 7, 2, 'Emmanuel', 'Mr', 'ILORI', 'Olukolapo', '1981-12-06', 'Male', 'Single', 'emma2474u@gmail.com', '123, Abuja', 'public/frontend/images/passports/bb98ee49a0448b405fb5876106ddf313.JPG', 'Lands', NULL, 'installments', 2700000.00, 750000.00, 88750.00, '08169612348', 'Throne Investment Homes Ltd', 'Central Area, Abuja', 'Abuja/Nigeria', 'Driver\'s License', '1234567890', 'public/frontend/images/passports/4040013c923a0794fba61873977d0d7e.JPG', 'Nice Job', 'cgIw1MEjFZ85mwIwdN0AOV5l9', 'confirmed', 'ILORI Olalekan', 'Sibling', '09095187267', 'emmanuel@daomnitraders.com', 'CA', 'CA/Nigeria', 'Lugbe', '1', 'emmanuel/1234567890', '6', 1, '2021-04-07 08:37:01', '2021-04-07 08:37:15'),
	(8, 2, 8, 2, 'Emmanuel', 'Mr', 'ILORI', 'Olukolapo', '1981-12-06', 'Male', 'Single', 'emma2474u@gmail.com', 'km 25, kubwa expressway', 'public/frontend/images/passports/a6a04c4e7c9d633cda7e515fa08921d2.PNG', 'Lands', NULL, 'installments', 3000000.00, 750000.00, 385000.00, '09095187267', 'ThroneHomesltd', 'Abuja office', 'Abuja/Nigeria', 'Driver\'s License', '1234567890', 'public/frontend/images/passports/a6a04c4e7c9d633cda7e515fa08921d2.PNG', NULL, NULL, 'standby', 'ILORI Olalekan', 'Sibling', '09095187267', 'emmanuel@daomnitraders.com', 'California', 'CA/USA', 'Lugbe', '2', 'Emmanuel/1234567890', '6', 2, '2021-04-20 04:08:31', '2021-04-20 04:08:31'),
	(9, 2, 9, 2, 'Emmanuel', 'Mr', 'ILORI', 'Olukolapo', '1981-12-06', 'Male', 'Single', 'emma2474u@gmail.com', 'Abuja', 'public/frontend/images/passports/06232a133509eb4bd25eafafd5093bb6.jpg', 'Lands', NULL, 'installments', 2700000.00, 750000.00, 88750.00, '09095187267', 'Thronehomesltd', 'Abuja', 'Abuja/Nigeria', 'Driver\'s License', '1234567890', 'public/frontend/images/passports/06232a133509eb4bd25eafafd5093bb6.jpg', 'online', NULL, 'standby', 'ILORI Olalekan', 'Sibling', '08169612348', 'emmanuel@thronehomesltd.com', 'CA', 'CA/USA', 'LUGBE', '1', 'emmanuel/1234567890', '6', 1, '2021-04-20 18:04:04', '2021-04-20 18:04:04'),
	(10, 2, 10, 2, 'Emmanuel', 'Mr', 'ILORI', 'Olukolapo', '1981-12-06', 'Male', 'Single', 'emma2474u@gmail.com', 'Abuja', 'public/frontend/images/passports/06232a133509eb4bd25eafafd5093bb6.jpg', 'Lands', NULL, 'installments', 2700000.00, 750000.00, 88750.00, '09095187267', 'Thronehomesltd', 'Abuja', 'Abuja/Nigeria', 'Driver\'s License', '1234567890', 'public/frontend/images/passports/06232a133509eb4bd25eafafd5093bb6.jpg', 'online', NULL, 'standby', 'ILORI Olalekan', 'Sibling', '08169612348', 'emmanuel@thronehomesltd.com', 'CA', 'CA/USA', 'LUGBE', '1', 'emmanuel/1234567890', '6', 1, '2021-04-20 18:06:14', '2021-04-20 18:06:14'),
	(11, 2, 11, 2, 'Emmanuel', 'Mr', 'ILORI', 'Olukolapo', '1981-12-06', 'Male', 'Single', 'emma2474u@gmail.com', 'Abuja', 'public/frontend/images/passports/4163e140b54d471c1e9bc655f8374ce8.jpg', 'Lands', NULL, 'installments', 2700000.00, 750000.00, 88750.00, '09095187267', 'Thronehomesltd', 'Abuja', 'Abuja/Nigeria', 'Driver\'s License', '1234567890', 'public/frontend/images/passports/4163e140b54d471c1e9bc655f8374ce8.jpg', 'online', NULL, 'standby', 'ILORI Olalekan', 'Sibling', '08169612348', 'emmanuel@thronehomesltd.com', 'CA', 'CA/USA', 'LUGBE', '1', 'emmanuel/1234567890', '6', 1, '2021-04-20 18:38:17', '2021-04-20 18:38:17'),
	(12, 2, 12, 19, 'Adegbola', 'Miss', 'Kehinde', 'simisola', '1992-11-20', 'Female', 'Single', 'adegbolakehindesimisola@gmail.com', 'lugbe abuja', 'public/frontend/images/passports/ce3f8ecf1d85e9772b136303341660e4.jpeg', 'Lands', NULL, 'installments', 2700000.00, 750000.00, 110000.00, '08169725786', 'MR lalekan Micheal ilori', 'PLOT 23,no 2 leventis building samuel adesujo ademelugun street, off muhammed buhari wat central businessarea district,FCT,Abuja', 'abuja', 'Voter\'s Card', '56789', 'public/frontend/images/passports/ce3f8ecf1d85e9772b136303341660e4.jpeg', 'from  a friend', NULL, 'standby', 'adegbola kehinde kofofoworola', 'sister', '08169725786', 'adegbolakehindesimisola@gmail.com', 'sango', 'abuja/nigeria', 'crd lugbe', '1', '0812343567', '6', 1, '2021-04-21 11:14:43', '2021-04-21 11:14:43'),
	(13, 2, 13, 19, 'Adegbola', 'Miss', 'Kehinde', 'simisola', '1992-11-20', 'Female', 'Single', 'adegbolakehindesimisola@gmail.com', 'lugbe abuja', 'public/frontend/images/passports/ce3f8ecf1d85e9772b136303341660e4.jpeg', 'Lands', NULL, 'installments', 2700000.00, 750000.00, 110000.00, '08169725786', 'MR lalekan Micheal ilori', 'PLOT 23,no 2 leventis building samuel adesujo ademelugun street, off muhammed buhari wat central businessarea district,FCT,Abuja', 'abuja', 'Voter\'s Card', '56789', 'public/frontend/images/passports/ce3f8ecf1d85e9772b136303341660e4.jpeg', 'from  a friend', NULL, 'standby', 'adegbola kehinde kofofoworola', 'sister', '08169725786', 'adegbolakehindesimisola@gmail.com', 'sango', 'abuja/nigeria', 'crd lugbe', '1', '0812343567', '6', 1, '2021-04-21 11:18:29', '2021-04-21 11:18:29'),
	(14, 2, 14, 19, 'Adegbola', 'Miss', 'Kehinde', 'simisola', '1992-11-20', 'Female', 'Single', 'adegbolakehindesimisola@gmail.com', 'lugbe abuja', 'public/frontend/images/passports/ce3f8ecf1d85e9772b136303341660e4.jpeg', 'Lands', NULL, 'installments', 2700000.00, 750000.00, 110000.00, '08169725786', 'MR lalekan Micheal ilori', 'PLOT 23,no 2 leventis building samuel adesujo ademelugun street, off muhammed buhari wat central businessarea district,FCT,Abuja', 'abuja', 'Voter\'s Card', '56789', 'public/frontend/images/passports/ce3f8ecf1d85e9772b136303341660e4.jpeg', 'from  a friend', NULL, 'standby', 'adegbola kehinde kofofoworola', 'sister', '08169725786', 'adegbolakehindesimisola@gmail.com', 'sango', 'abuja/nigeria', 'crd lugbe', '1', '0812343567', '6', 1, '2021-04-21 11:18:34', '2021-04-21 11:18:34'),
	(15, 2, 15, 19, 'Adegbola', 'Miss', 'Kehinde', 'simisola', '1992-11-20', 'Female', 'Single', 'adegbolakehindesimisola@gmail.com', 'lugbe abuja', 'public/frontend/images/passports/ce3f8ecf1d85e9772b136303341660e4.jpeg', 'Lands', NULL, 'installments', 2700000.00, 750000.00, 110000.00, '08169725786', 'MR lalekan Micheal ilori', 'PLOT 23,no 2 leventis building samuel adesujo ademelugun street, off muhammed buhari wat central businessarea district,FCT,Abuja', 'abuja', 'Voter\'s Card', '56789', 'public/frontend/images/passports/ce3f8ecf1d85e9772b136303341660e4.jpeg', 'from  a friend', 'tNljhLneIKiIKaFqw6JG4InfK', 'confirmed', 'adegbola kehinde kofofoworola', 'sister', '08169725786', 'adegbolakehindesimisola@gmail.com', 'sango', 'abuja/nigeria', 'crd lugbe', '1', '0812343567', '6', 1, '2021-04-21 11:19:41', '2021-04-21 11:20:41'),
	(16, 2, 16, 2, 'Emmanuel', 'Mr', 'ILORI', 'Olukolapo', '1981-12-06', 'Male', 'Single', 'emma2474u@gmail.com', 'Abuja', 'public/frontend/images/passports/2847b7b1ba22b0831953bccc247539f7.JPG', 'Lands', NULL, 'installments', 2700000.00, 750000.00, 181500.00, '09095187267', 'Thronehomesltd', 'Abuja', 'Abuja/Nigeria', 'Driver\'s License', '1234567899', 'public/frontend/images/passports/2847b7b1ba22b0831953bccc247539f7.JPG', 'thanks for the medium', NULL, 'standby', 'ILORI Olalekan', 'Sibling', '09090000000', 'emmanuel@thronehomesltd.com', 'Abuja', 'Abuja/Nigeria', 'Lugbe', '1', 'Emmanuel/1234567890', '12', 1, '2021-05-01 05:54:52', '2021-05-01 05:54:52'),
	(17, 2, 17, 2, 'Emmanuel', 'Mr', 'ILORI', 'Olukolapo', '1981-12-06', 'Male', 'Single', 'emma2474u@gmail.com', 'Abuja', 'public/frontend/images/passports/2847b7b1ba22b0831953bccc247539f7.JPG', 'Lands', NULL, 'installments', 2700000.00, 750000.00, 181500.00, '09095187267', 'Thronehomesltd', 'Abuja', 'Abuja/Nigeria', 'Driver\'s License', '1234567899', 'public/frontend/images/passports/2847b7b1ba22b0831953bccc247539f7.JPG', 'thanks for the medium', 'UHTBauIxVx5DB7JJcdJzzUhXJ', 'confirmed', 'ILORI Olalekan', 'Sibling', '09090000000', 'emmanuel@thronehomesltd.com', 'Abuja', 'Abuja/Nigeria', 'Lugbe', '1', 'Emmanuel/1234567890', '12', 1, '2021-05-01 05:57:47', '2021-05-01 05:58:06'),
	(18, 2, 18, 2, 'Emmanuel', 'Mr', 'ILORI', 'Olukolapo', '1981-12-06', 'Male', 'Single', 'emma2474u@gmail.com', 'Abuja', 'public/frontend/images/passports/2847b7b1ba22b0831953bccc247539f7.JPG', 'Lands', NULL, 'installments', 2700000.00, 750000.00, 181500.00, '09095187267', 'Thronehomesltd', 'Abuja', 'Abuja/Nigeria', 'Driver\'s License', '1234567899', 'public/frontend/images/passports/2847b7b1ba22b0831953bccc247539f7.JPG', 'thanks for the medium', NULL, 'standby', 'ILORI Olalekan', 'Sibling', '09090000000', 'emmanuel@thronehomesltd.com', 'Abuja', 'Abuja/Nigeria', 'Lugbe', '1', 'Emmanuel/1234567890', '12', 1, '2021-05-01 05:58:30', '2021-05-01 05:58:30'),
	(19, 2, 19, 2, 'Emmanuel', 'Mr', 'ILORI', 'Olukolapo', '1981-12-06', 'Male', 'Single', 'emma2474u@gmail.com', 'Abuja', 'public/frontend/images/passports/2847b7b1ba22b0831953bccc247539f7.JPG', 'Lands', NULL, 'installments', 2700000.00, 750000.00, 181500.00, '09095187267', 'Thronehomesltd', 'Abuja', 'Abuja/Nigeria', 'Driver\'s License', '1234567899', 'public/frontend/images/passports/2847b7b1ba22b0831953bccc247539f7.JPG', 'thanks for the medium', 'dzOSaGEaC1PbddAsrbLUiwrJC', 'confirmed', 'ILORI Olalekan', 'Sibling', '09090000000', 'emmanuel@thronehomesltd.com', 'Abuja', 'Abuja/Nigeria', 'Lugbe', '1', 'Emmanuel/1234567890', '12', 1, '2021-05-01 06:29:35', '2021-05-01 06:29:53'),
	(20, 2, 20, 2, 'Emmanuel', 'Mr', 'ILORI', 'Olukolapo', '1981-12-06', 'Male', 'Single', 'emma2474u@gmail.com', 'Abuja', 'public/frontend/images/passports/2847b7b1ba22b0831953bccc247539f7.JPG', 'Lands', NULL, 'installments', 2700000.00, 750000.00, 181500.00, '09095187267', 'Thronehomesltd', 'Abuja', 'Abuja/Nigeria', 'Driver\'s License', '1234567899', 'public/frontend/images/passports/2847b7b1ba22b0831953bccc247539f7.JPG', 'thanks for the medium', NULL, 'standby', 'ILORI Olalekan', 'Sibling', '09090000000', 'emmanuel@thronehomesltd.com', 'Abuja', 'Abuja/Nigeria', 'Lugbe', '1', 'Emmanuel/1234567890', '12', 1, '2021-05-01 06:33:53', '2021-05-01 06:33:53');
/*!40000 ALTER TABLE `daomniorders` ENABLE KEYS */;

-- Dumping structure for table thronehomesltd.daomni_additional_facilities_rates
DROP TABLE IF EXISTS `daomni_additional_facilities_rates`;
CREATE TABLE IF NOT EXISTS `daomni_additional_facilities_rates` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) DEFAULT NULL,
  `content_id` int(11) DEFAULT NULL,
  `daomnilandtypes_id` int(11) DEFAULT NULL,
  `facility_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rates` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `available` int(11) NOT NULL DEFAULT '0',
  `display` int(11) NOT NULL DEFAULT '1',
  `group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Lands',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=113 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table thronehomesltd.daomni_additional_facilities_rates: ~112 rows (approximately)
/*!40000 ALTER TABLE `daomni_additional_facilities_rates` DISABLE KEYS */;
REPLACE INTO `daomni_additional_facilities_rates` (`id`, `admin_id`, `content_id`, `daomnilandtypes_id`, `facility_name`, `rates`, `description`, `available`, `display`, `group`, `created_at`, `updated_at`) VALUES
	(1, 2, 1, 1, 'Latitude', '0.0000', '', 1, 1, 'Lands facilities', '2021-04-04 06:37:31', '2021-04-04 06:37:31'),
	(2, 2, 2, 1, 'Longitude', '0.0000', '', 1, 1, 'Lands facilities', '2021-04-04 06:37:31', '2021-04-04 06:37:31'),
	(3, 2, 3, 1, 'Size', '450', 'sqm', 1, 1, 'Lands facilities', '2021-04-04 06:37:31', '2021-04-04 06:37:31'),
	(4, 2, 4, 1, 'Best for', '3', 'Bedroom Detached Penthouse + BQ', 1, 1, 'Lands facilities', '2021-04-04 06:37:31', '2021-04-04 06:37:31'),
	(5, 2, 5, 1, 'Good access road', 'yes', '', 1, 1, 'Lands facilities', '2021-04-04 06:37:31', '2021-04-04 06:37:31'),
	(6, 2, 6, 1, 'Water Supply', 'yes', '', 1, 1, 'Lands facilities', '2021-04-04 06:37:31', '2021-04-04 06:37:31'),
	(7, 2, 7, 1, 'Electricity', 'yes', '', 1, 1, 'Lands facilities', '2021-04-04 06:37:31', '2021-04-04 06:37:31'),
	(8, 2, 1, 1, 'Spacious Living room & Dining', '0.0000', '', 1, 1, 'Houses Specifications', '2021-04-04 06:37:31', '2021-04-04 06:37:31'),
	(9, 2, 2, 1, 'Visitors Toilet', '0.0000', '', 1, 1, 'Houses Specifications', '2021-04-04 06:37:31', '2021-04-04 06:37:31'),
	(10, 2, 3, 1, 'Spacious two bedroom each', '450', 'sqm', 1, 1, 'Houses Specifications', '2021-04-04 06:37:31', '2021-04-04 06:37:31'),
	(11, 2, 4, 1, 'Kitchen & store', '3', 'bedroom', 1, 1, 'Houses Specifications', '2021-04-04 06:37:31', '2021-04-04 06:37:31'),
	(12, 2, 5, 1, 'Sit-Out', 'yes', '', 1, 1, 'Houses Specifications', '2021-04-04 06:37:31', '2021-04-04 06:37:31'),
	(13, 2, 6, 1, 'Relaxation spot', 'yes', '', 1, 1, 'Houses Specifications', '2021-04-04 06:37:31', '2021-04-04 06:37:31'),
	(14, 2, 7, 1, 'Parking space for two cars', 'yes', '', 1, 1, 'Houses Specifications', '2021-04-04 06:37:31', '2021-04-04 06:37:31'),
	(15, 2, 1, 2, 'Latitude', '0.0000', '', 1, 1, 'Lands facilities', '2021-04-04 06:37:33', '2021-04-04 06:37:33'),
	(16, 2, 2, 2, 'Longitude', '0.0000', '', 1, 1, 'Lands facilities', '2021-04-04 06:37:33', '2021-04-04 06:37:33'),
	(17, 2, 3, 2, 'Size', '500', 'sqm', 1, 1, 'Lands facilities', '2021-04-04 06:37:33', '2021-04-04 06:37:33'),
	(18, 2, 4, 2, 'Best for', '4', 'Bedroom Fully Detached Duplex + BQ', 1, 1, 'Lands facilities', '2021-04-04 06:37:33', '2021-04-04 06:37:33'),
	(19, 2, 5, 2, 'Good access road', 'yes', '', 1, 1, 'Lands facilities', '2021-04-04 06:37:33', '2021-04-04 06:37:33'),
	(20, 2, 6, 2, 'Water Supply', 'yes', '', 1, 1, 'Lands facilities', '2021-04-04 06:37:33', '2021-04-04 06:37:33'),
	(21, 2, 7, 2, 'Electricity', 'yes', '', 1, 1, 'Lands facilities', '2021-04-04 06:37:33', '2021-04-04 06:37:33'),
	(22, 2, 1, 2, 'Spacious Living room & Dining', '0.0000', '', 1, 1, 'Houses Specifications', '2021-04-04 06:37:33', '2021-04-04 06:37:33'),
	(23, 2, 2, 2, 'Visitors Toilet', '0.0000', '', 1, 1, 'Houses Specifications', '2021-04-04 06:37:33', '2021-04-04 06:37:33'),
	(24, 2, 3, 2, 'Spacious two bedroom each', '500', 'sqm', 1, 1, 'Houses Specifications', '2021-04-04 06:37:33', '2021-04-04 06:37:33'),
	(25, 2, 4, 2, 'Kitchen & store', '4', 'bedroom', 1, 1, 'Houses Specifications', '2021-04-04 06:37:33', '2021-04-04 06:37:33'),
	(26, 2, 5, 2, 'Sit-Out', 'yes', '', 1, 1, 'Houses Specifications', '2021-04-04 06:37:33', '2021-04-04 06:37:33'),
	(27, 2, 6, 2, 'Relaxation spot', 'yes', '', 1, 1, 'Houses Specifications', '2021-04-04 06:37:33', '2021-04-04 06:37:33'),
	(28, 2, 7, 2, 'Parking space for two cars', 'yes', '', 1, 1, 'Houses Specifications', '2021-04-04 06:37:33', '2021-04-04 06:37:33'),
	(29, 2, 1, 3, 'Latitude', '0.0000', '', 1, 1, 'Lands facilities', '2021-04-04 06:37:36', '2021-04-04 06:37:36'),
	(30, 2, 2, 3, 'Longitude', '0.0000', '', 1, 1, 'Lands facilities', '2021-04-04 06:37:36', '2021-04-04 06:37:36'),
	(31, 2, 3, 3, 'Size', '600', 'sqm', 1, 1, 'Lands facilities', '2021-04-04 06:37:36', '2021-04-04 06:37:36'),
	(32, 2, 4, 3, 'Best for', '4', 'Bedroom Fully Detached Duplex + BQ', 1, 1, 'Lands facilities', '2021-04-04 06:37:36', '2021-04-04 06:37:36'),
	(33, 2, 5, 3, 'Good access road', 'yes', '', 1, 1, 'Lands facilities', '2021-04-04 06:37:36', '2021-04-04 06:37:36'),
	(34, 2, 6, 3, 'Water Supply', 'yes', '', 1, 1, 'Lands facilities', '2021-04-04 06:37:36', '2021-04-04 06:37:36'),
	(35, 2, 7, 3, 'Electricity', 'yes', '', 1, 1, 'Lands facilities', '2021-04-04 06:37:36', '2021-04-04 06:37:36'),
	(36, 2, 1, 3, 'Spacious Living room & Dining', '0.0000', '', 1, 1, 'Houses Specifications', '2021-04-04 06:37:36', '2021-04-04 06:37:36'),
	(37, 2, 2, 3, 'Visitors Toilet', '0.0000', '', 1, 1, 'Houses Specifications', '2021-04-04 06:37:36', '2021-04-04 06:37:36'),
	(38, 2, 3, 3, 'Spacious two bedroom each', '600', 'sqm', 1, 1, 'Houses Specifications', '2021-04-04 06:37:36', '2021-04-04 06:37:36'),
	(39, 2, 4, 3, 'Kitchen & store', '4', 'bedroom', 1, 1, 'Houses Specifications', '2021-04-04 06:37:36', '2021-04-04 06:37:36'),
	(40, 2, 5, 3, 'Sit-Out', 'yes', '', 1, 1, 'Houses Specifications', '2021-04-04 06:37:36', '2021-04-04 06:37:36'),
	(41, 2, 6, 3, 'Relaxation spot', 'yes', '', 1, 1, 'Houses Specifications', '2021-04-04 06:37:36', '2021-04-04 06:37:36'),
	(42, 2, 7, 3, 'Parking space for two cars', 'yes', '', 1, 1, 'Houses Specifications', '2021-04-04 06:37:36', '2021-04-04 06:37:36'),
	(43, 2, 1, 4, 'Latitude', '0.0000', '', 1, 1, 'Lands facilities', '2021-04-04 06:37:38', '2021-04-04 06:37:38'),
	(44, 2, 2, 4, 'Longitude', '0.0000', '', 1, 1, 'Lands facilities', '2021-04-04 06:37:38', '2021-04-04 06:37:38'),
	(45, 2, 3, 4, 'Size', '450', 'sqm', 1, 1, 'Lands facilities', '2021-04-04 06:37:38', '2021-04-04 06:37:38'),
	(46, 2, 4, 4, 'Best for', '3', 'Bedroom Detached Duplex', 1, 1, 'Lands facilities', '2021-04-04 06:37:38', '2021-04-04 06:37:38'),
	(47, 2, 5, 4, 'Good access road', 'yes', '', 1, 1, 'Lands facilities', '2021-04-04 06:37:38', '2021-04-04 06:37:38'),
	(48, 2, 6, 4, 'Water Supply', 'yes', '', 1, 1, 'Lands facilities', '2021-04-04 06:37:38', '2021-04-04 06:37:38'),
	(49, 2, 7, 4, 'Electricity', 'yes', '', 1, 1, 'Lands facilities', '2021-04-04 06:37:38', '2021-04-04 06:37:38'),
	(50, 2, 1, 4, 'Spacious Living room & Dining', '0.0000', '', 1, 1, 'Houses Specifications', '2021-04-04 06:37:38', '2021-04-04 06:37:38'),
	(51, 2, 2, 4, 'Visitors Toilet', '0.0000', '', 1, 1, 'Houses Specifications', '2021-04-04 06:37:38', '2021-04-04 06:37:38'),
	(52, 2, 3, 4, 'Spacious two bedroom each', '450', 'sqm', 1, 1, 'Houses Specifications', '2021-04-04 06:37:38', '2021-04-04 06:37:38'),
	(53, 2, 4, 4, 'Kitchen & store', '3', 'bedroom', 1, 1, 'Houses Specifications', '2021-04-04 06:37:38', '2021-04-04 06:37:38'),
	(54, 2, 5, 4, 'Sit-Out', 'yes', '', 1, 1, 'Houses Specifications', '2021-04-04 06:37:38', '2021-04-04 06:37:38'),
	(55, 2, 6, 4, 'Relaxation spot', 'yes', '', 1, 1, 'Houses Specifications', '2021-04-04 06:37:38', '2021-04-04 06:37:38'),
	(56, 2, 7, 4, 'Parking space for two cars', 'yes', '', 1, 1, 'Houses Specifications', '2021-04-04 06:37:38', '2021-04-04 06:37:38'),
	(57, 2, 1, 5, 'Latitude', '0.0000', '', 1, 1, 'Lands facilities', '2021-04-04 06:37:40', '2021-04-04 06:37:40'),
	(58, 2, 2, 5, 'Longitude', '0.0000', '', 1, 1, 'Lands facilities', '2021-04-04 06:37:40', '2021-04-04 06:37:40'),
	(59, 2, 3, 5, 'Size', '500', 'sqm', 1, 1, 'Lands facilities', '2021-04-04 06:37:40', '2021-04-04 06:37:40'),
	(60, 2, 4, 5, 'Best for', '4', 'Bedroom Fully Detached Duplex + BQ', 1, 1, 'Lands facilities', '2021-04-04 06:37:40', '2021-04-04 06:37:40'),
	(61, 2, 5, 5, 'Good access road', 'yes', '', 1, 1, 'Lands facilities', '2021-04-04 06:37:40', '2021-04-04 06:37:40'),
	(62, 2, 6, 5, 'Water Supply', 'yes', '', 1, 1, 'Lands facilities', '2021-04-04 06:37:40', '2021-04-04 06:37:40'),
	(63, 2, 7, 5, 'Electricity', 'yes', '', 1, 1, 'Lands facilities', '2021-04-04 06:37:40', '2021-04-04 06:37:40'),
	(64, 2, 1, 5, 'Spacious Living room & Dining', '0.0000', '', 1, 1, 'Houses Specifications', '2021-04-04 06:37:40', '2021-04-04 06:37:40'),
	(65, 2, 2, 5, 'Visitors Toilet', '0.0000', '', 1, 1, 'Houses Specifications', '2021-04-04 06:37:40', '2021-04-04 06:37:40'),
	(66, 2, 3, 5, 'Spacious two bedroom each', '500', 'sqm', 1, 1, 'Houses Specifications', '2021-04-04 06:37:40', '2021-04-04 06:37:40'),
	(67, 2, 4, 5, 'Kitchen & store', '4', 'bedroom', 1, 1, 'Houses Specifications', '2021-04-04 06:37:40', '2021-04-04 06:37:40'),
	(68, 2, 5, 5, 'Sit-Out', 'yes', '', 1, 1, 'Houses Specifications', '2021-04-04 06:37:40', '2021-04-04 06:37:40'),
	(69, 2, 6, 5, 'Relaxation spot', 'yes', '', 1, 1, 'Houses Specifications', '2021-04-04 06:37:40', '2021-04-04 06:37:40'),
	(70, 2, 7, 5, 'Parking space for two cars', 'yes', '', 1, 1, 'Houses Specifications', '2021-04-04 06:37:40', '2021-04-04 06:37:40'),
	(71, 2, 1, 6, 'Latitude', '0.0000', '', 1, 1, 'Lands facilities', '2021-04-04 06:37:42', '2021-04-04 06:37:42'),
	(72, 2, 2, 6, 'Longitude', '0.0000', '', 1, 1, 'Lands facilities', '2021-04-04 06:37:42', '2021-04-04 06:37:42'),
	(73, 2, 3, 6, 'Size', '600', 'sqm', 1, 1, 'Lands facilities', '2021-04-04 06:37:42', '2021-04-04 06:37:42'),
	(74, 2, 4, 6, 'Best for', '4', 'Bedroom Fully Detached Duplex + BQ', 1, 1, 'Lands facilities', '2021-04-04 06:37:42', '2021-04-04 06:37:42'),
	(75, 2, 5, 6, 'Good access road', 'yes', '', 1, 1, 'Lands facilities', '2021-04-04 06:37:42', '2021-04-04 06:37:42'),
	(76, 2, 6, 6, 'Water Supply', 'yes', '', 1, 1, 'Lands facilities', '2021-04-04 06:37:42', '2021-04-04 06:37:42'),
	(77, 2, 7, 6, 'Electricity', 'yes', '', 1, 1, 'Lands facilities', '2021-04-04 06:37:42', '2021-04-04 06:37:42'),
	(78, 2, 1, 6, 'Spacious Living room & Dining', '0.0000', '', 1, 1, 'Houses Specifications', '2021-04-04 06:37:42', '2021-04-04 06:37:42'),
	(79, 2, 2, 6, 'Visitors Toilet', '0.0000', '', 1, 1, 'Houses Specifications', '2021-04-04 06:37:42', '2021-04-04 06:37:42'),
	(80, 2, 3, 6, 'Spacious two bedroom each', '600', 'sqm', 1, 1, 'Houses Specifications', '2021-04-04 06:37:42', '2021-04-04 06:37:42'),
	(81, 2, 4, 6, 'Kitchen & store', '4', 'bedroom', 1, 1, 'Houses Specifications', '2021-04-04 06:37:42', '2021-04-04 06:37:42'),
	(82, 2, 5, 6, 'Sit-Out', 'yes', '', 1, 1, 'Houses Specifications', '2021-04-04 06:37:42', '2021-04-04 06:37:42'),
	(83, 2, 6, 6, 'Relaxation spot', 'yes', '', 1, 1, 'Houses Specifications', '2021-04-04 06:37:42', '2021-04-04 06:37:42'),
	(84, 2, 7, 6, 'Parking space for two cars', 'yes', '', 1, 1, 'Houses Specifications', '2021-04-04 06:37:42', '2021-04-04 06:37:42'),
	(85, 2, 1, 7, 'Latitude', '0.0000', '', 1, 1, 'Lands facilities', '2021-04-04 06:37:45', '2021-04-04 06:37:45'),
	(86, 2, 2, 7, 'Longitude', '0.0000', '', 1, 1, 'Lands facilities', '2021-04-04 06:37:45', '2021-04-04 06:37:45'),
	(87, 2, 3, 7, 'Size', '450', 'sqm', 1, 1, 'Lands facilities', '2021-04-04 06:37:45', '2021-04-04 06:37:45'),
	(88, 2, 4, 7, 'Best for', '3', 'Bedroom Detached Duplex', 1, 1, 'Lands facilities', '2021-04-04 06:37:45', '2021-04-04 06:37:45'),
	(89, 2, 5, 7, 'Good access road', 'yes', '', 1, 1, 'Lands facilities', '2021-04-04 06:37:45', '2021-04-04 06:37:45'),
	(90, 2, 6, 7, 'Water Supply', 'yes', '', 1, 1, 'Lands facilities', '2021-04-04 06:37:45', '2021-04-04 06:37:45'),
	(91, 2, 7, 7, 'Electricity', 'yes', '', 1, 1, 'Lands facilities', '2021-04-04 06:37:45', '2021-04-04 06:37:45'),
	(92, 2, 1, 7, 'Spacious Living room & Dining', '0.0000', '', 1, 1, 'Houses Specifications', '2021-04-04 06:37:45', '2021-04-04 06:37:45'),
	(93, 2, 2, 7, 'Visitors Toilet', '0.0000', '', 1, 1, 'Houses Specifications', '2021-04-04 06:37:45', '2021-04-04 06:37:45'),
	(94, 2, 3, 7, 'Spacious two bedroom each', '450', 'sqm', 1, 1, 'Houses Specifications', '2021-04-04 06:37:45', '2021-04-04 06:37:45'),
	(95, 2, 4, 7, 'Kitchen & store', '3', 'bedroom', 1, 1, 'Houses Specifications', '2021-04-04 06:37:45', '2021-04-04 06:37:45'),
	(96, 2, 5, 7, 'Sit-Out', 'yes', '', 1, 1, 'Houses Specifications', '2021-04-04 06:37:45', '2021-04-04 06:37:45'),
	(97, 2, 6, 7, 'Relaxation spot', 'yes', '', 1, 1, 'Houses Specifications', '2021-04-04 06:37:45', '2021-04-04 06:37:45'),
	(98, 2, 7, 7, 'Parking space for two cars', 'yes', '', 1, 1, 'Houses Specifications', '2021-04-04 06:37:45', '2021-04-04 06:37:45'),
	(99, 2, 1, 8, 'Latitude', '0.0000', '', 1, 1, 'Lands facilities', '2021-04-04 06:37:47', '2021-04-04 06:37:47'),
	(100, 2, 2, 8, 'Longitude', '0.0000', '', 1, 1, 'Lands facilities', '2021-04-04 06:37:47', '2021-04-04 06:37:47'),
	(101, 2, 3, 8, 'Size', '450', 'sqm', 1, 1, 'Lands facilities', '2021-04-04 06:37:47', '2021-04-04 06:37:47'),
	(102, 2, 4, 8, 'Best for', '3', 'Bedroom Detached Duplex', 1, 1, 'Lands facilities', '2021-04-04 06:37:47', '2021-04-04 06:37:47'),
	(103, 2, 5, 8, 'Good access road', 'yes', '', 1, 1, 'Lands facilities', '2021-04-04 06:37:47', '2021-04-04 06:37:47'),
	(104, 2, 6, 8, 'Water Supply', 'yes', '', 1, 1, 'Lands facilities', '2021-04-04 06:37:47', '2021-04-04 06:37:47'),
	(105, 2, 7, 8, 'Electricity', 'yes', '', 1, 1, 'Lands facilities', '2021-04-04 06:37:47', '2021-04-04 06:37:47'),
	(106, 2, 1, 8, 'Spacious Living room & Dining', '0.0000', '', 1, 1, 'Houses Specifications', '2021-04-04 06:37:47', '2021-04-04 06:37:47'),
	(107, 2, 2, 8, 'Visitors Toilet', '0.0000', '', 1, 1, 'Houses Specifications', '2021-04-04 06:37:47', '2021-04-04 06:37:47'),
	(108, 2, 3, 8, 'Spacious two bedroom each', '450', 'sqm', 1, 1, 'Houses Specifications', '2021-04-04 06:37:47', '2021-04-04 06:37:47'),
	(109, 2, 4, 8, 'Kitchen & store', '3', 'bedroom', 1, 1, 'Houses Specifications', '2021-04-04 06:37:47', '2021-04-04 06:37:47'),
	(110, 2, 5, 8, 'Sit-Out', 'yes', '', 1, 1, 'Houses Specifications', '2021-04-04 06:37:47', '2021-04-04 06:37:47'),
	(111, 2, 6, 8, 'Relaxation spot', 'yes', '', 1, 1, 'Houses Specifications', '2021-04-04 06:37:47', '2021-04-04 06:37:47'),
	(112, 2, 7, 8, 'Parking space for two cars', 'yes', '', 1, 1, 'Houses Specifications', '2021-04-04 06:37:47', '2021-04-04 06:37:47');
/*!40000 ALTER TABLE `daomni_additional_facilities_rates` ENABLE KEYS */;

-- Dumping structure for table thronehomesltd.daomni_admin_terms_conditions
DROP TABLE IF EXISTS `daomni_admin_terms_conditions`;
CREATE TABLE IF NOT EXISTS `daomni_admin_terms_conditions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) NOT NULL,
  `content_id` int(11) DEFAULT NULL,
  `terms_conditions` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table thronehomesltd.daomni_admin_terms_conditions: ~4 rows (approximately)
/*!40000 ALTER TABLE `daomni_admin_terms_conditions` DISABLE KEYS */;
REPLACE INTO `daomni_admin_terms_conditions` (`id`, `admin_id`, `content_id`, `terms_conditions`, `created_at`, `updated_at`) VALUES
	(1, 2, 1, 'Payment is required at least 24 hours. before coming to office for proper documentation, to confirm your purchase.', '2021-04-04 06:37:27', '2021-04-04 06:37:27'),
	(2, 2, 2, 'Confirmed payment will be fully attend to - first come , first serve.', '2021-04-04 06:37:27', '2021-04-04 06:37:27'),
	(3, 2, 3, 'We will delete unpaid order without notice to reduce workload on server', '2021-04-04 06:37:27', '2021-04-04 06:37:27'),
	(4, 2, 4, 'We open 8:00am to 5:00pm (Monday-Friday) while 10:00am to 3:00pm (Saturday)', '2021-04-04 06:37:27', '2021-04-04 06:37:27');
/*!40000 ALTER TABLE `daomni_admin_terms_conditions` ENABLE KEYS */;

-- Dumping structure for table thronehomesltd.daomni_contacts
DROP TABLE IF EXISTS `daomni_contacts`;
CREATE TABLE IF NOT EXISTS `daomni_contacts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) DEFAULT NULL,
  `content_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `channel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table thronehomesltd.daomni_contacts: ~0 rows (approximately)
/*!40000 ALTER TABLE `daomni_contacts` DISABLE KEYS */;
REPLACE INTO `daomni_contacts` (`id`, `admin_id`, `content_id`, `name`, `email`, `subject`, `phone`, `message`, `channel`, `created_at`, `updated_at`) VALUES
	(1, 2, 1, 'Kevin Nwankwor', 'knn335@yahoo.com', 'Land in Lugbe', '6787704210', 'Does the land you are selling have C of O ...just want to know what am buying', 'https://www.thronehomesltd.com/contact', '2021-04-27 01:13:00', '2021-04-27 01:13:00');
/*!40000 ALTER TABLE `daomni_contacts` ENABLE KEYS */;

-- Dumping structure for table thronehomesltd.daomni_correspondences
DROP TABLE IF EXISTS `daomni_correspondences`;
CREATE TABLE IF NOT EXISTS `daomni_correspondences` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) DEFAULT NULL,
  `content_id` int(11) DEFAULT NULL,
  `timing` int(11) NOT NULL DEFAULT '0',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `display` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table thronehomesltd.daomni_correspondences: ~3 rows (approximately)
/*!40000 ALTER TABLE `daomni_correspondences` DISABLE KEYS */;
REPLACE INTO `daomni_correspondences` (`id`, `admin_id`, `content_id`, `timing`, `email`, `display`, `created_at`, `updated_at`) VALUES
	(1, 2, 1, 0, 'info@thronehomesltd.com', 1, '2021-04-04 06:37:27', '2021-04-04 06:37:27'),
	(2, 2, 2, 0, 'emma2474u@gmail.com', 1, '2021-04-04 06:37:27', '2021-04-04 06:37:27'),
	(3, 2, 3, 0, 'emmanuel@throneautos.com', 1, '2021-04-04 06:37:27', '2021-04-04 06:37:27');
/*!40000 ALTER TABLE `daomni_correspondences` ENABLE KEYS */;

-- Dumping structure for table thronehomesltd.daomni_coupontrackers
DROP TABLE IF EXISTS `daomni_coupontrackers`;
CREATE TABLE IF NOT EXISTS `daomni_coupontrackers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `coupon_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table thronehomesltd.daomni_coupontrackers: ~0 rows (approximately)
/*!40000 ALTER TABLE `daomni_coupontrackers` DISABLE KEYS */;
/*!40000 ALTER TABLE `daomni_coupontrackers` ENABLE KEYS */;

-- Dumping structure for table thronehomesltd.daomni_discount_modal
DROP TABLE IF EXISTS `daomni_discount_modal`;
CREATE TABLE IF NOT EXISTS `daomni_discount_modal` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) NOT NULL,
  `content_id` int(11) DEFAULT NULL,
  `app_loader_icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `app_modal_advert1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `advert1_discount_percent` int(11) NOT NULL DEFAULT '50',
  `app_modal_advert2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `advert2_discount_percent` int(11) NOT NULL DEFAULT '20',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `daomni_discount_modal_admin_id_unique` (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table thronehomesltd.daomni_discount_modal: ~0 rows (approximately)
/*!40000 ALTER TABLE `daomni_discount_modal` DISABLE KEYS */;
REPLACE INTO `daomni_discount_modal` (`id`, `admin_id`, `content_id`, `app_loader_icon`, `app_modal_advert1`, `advert1_discount_percent`, `app_modal_advert2`, `advert2_discount_percent`, `created_at`, `updated_at`) VALUES
	(1, 2, 1, 'frontend/images/thronehomes.png', 'frontend/images/advert1.jpg', 50, 'frontend/images/advert2.jpg', 20, '2021-04-04 06:37:27', '2021-04-04 06:37:27');
/*!40000 ALTER TABLE `daomni_discount_modal` ENABLE KEYS */;

-- Dumping structure for table thronehomesltd.daomni_downpayments
DROP TABLE IF EXISTS `daomni_downpayments`;
CREATE TABLE IF NOT EXISTS `daomni_downpayments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `daomnilandtypes_id` int(11) DEFAULT NULL,
  `initial_payment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '750000',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table thronehomesltd.daomni_downpayments: ~8 rows (approximately)
/*!40000 ALTER TABLE `daomni_downpayments` DISABLE KEYS */;
REPLACE INTO `daomni_downpayments` (`id`, `daomnilandtypes_id`, `initial_payment`, `created_at`, `updated_at`) VALUES
	(1, 1, '750000', '2021-04-04 06:37:29', '2021-04-04 06:37:29'),
	(2, 2, '750000', '2021-04-04 06:37:32', '2021-04-04 06:37:32'),
	(3, 3, '750000', '2021-04-04 06:37:34', '2021-04-04 06:37:34'),
	(4, 4, '750000', '2021-04-04 06:37:37', '2021-04-04 06:37:37'),
	(5, 5, '750000', '2021-04-04 06:37:38', '2021-04-04 06:37:38'),
	(6, 6, '750000', '2021-04-04 06:37:40', '2021-04-04 06:37:40'),
	(7, 7, '750000', '2021-04-04 06:37:42', '2021-04-04 06:37:42'),
	(8, 8, '750000', '2021-04-04 06:37:46', '2021-04-04 06:37:46');
/*!40000 ALTER TABLE `daomni_downpayments` ENABLE KEYS */;

-- Dumping structure for table thronehomesltd.daomni_influentialcoupons
DROP TABLE IF EXISTS `daomni_influentialcoupons`;
CREATE TABLE IF NOT EXISTS `daomni_influentialcoupons` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `coupon_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `allocated_percentage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enduser_percentage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table thronehomesltd.daomni_influentialcoupons: ~18 rows (approximately)
/*!40000 ALTER TABLE `daomni_influentialcoupons` DISABLE KEYS */;
REPLACE INTO `daomni_influentialcoupons` (`id`, `user_id`, `coupon_code`, `status`, `allocated_percentage`, `enduser_percentage`, `created_at`, `updated_at`) VALUES
	(1, 1, '1234567890', 'active', '10', '5', '2021-04-04 06:37:27', '2021-04-04 06:37:27'),
	(2, 5, 'emmanuel', 'active', '10', '5', '2021-04-04 19:51:15', '2021-04-04 19:51:15'),
	(3, 6, 'emmy', 'active', '10', '5', '2021-04-04 20:12:14', '2021-04-04 20:12:14'),
	(4, 7, 'emmy170', 'active', '10', '5', '2021-04-04 20:21:57', '2021-04-04 20:21:57'),
	(5, 8, 'emmanuel671', 'active', '10', '5', '2021-04-04 21:12:06', '2021-04-04 21:12:06'),
	(6, 9, 'emmanuel769', 'active', '10', '5', '2021-04-04 21:13:17', '2021-04-04 21:13:17'),
	(7, 10, 'emmanuella', 'active', '10', '5', '2021-04-05 13:02:09', '2021-04-05 13:02:09'),
	(8, 11, 'emmanuell0', 'active', '10', '5', '2021-04-05 13:19:12', '2021-04-05 13:19:12'),
	(9, 12, 'emmanuella864', 'active', '10', '5', '2021-04-05 13:23:37', '2021-04-05 13:23:37'),
	(10, 13, 'emmanuel767', 'active', '10', '5', '2021-04-05 13:28:44', '2021-04-05 13:28:44'),
	(11, 14, 'emmanuel231', 'active', '10', '5', '2021-04-05 13:31:30', '2021-04-05 13:31:30'),
	(12, 15, 'sharon', 'active', '10', '5', '2021-04-05 19:56:16', '2021-04-05 19:56:16'),
	(13, 16, 'lekan', 'active', '10', '5', '2021-04-05 19:58:39', '2021-04-05 19:58:39'),
	(14, 17, 'smart', 'active', '10', '5', '2021-04-10 07:07:55', '2021-04-10 07:07:55'),
	(15, 4, 'emmy1234', 'active', '10', '5', '2021-04-10 07:07:55', '2021-04-13 16:29:00'),
	(16, 18, 'favour', 'active', '10', '5', '2021-04-20 00:07:44', '2021-04-20 00:07:44'),
	(17, 20, 'muhsin', 'active', '10', '5', '2021-04-25 12:44:48', '2021-04-25 12:44:48'),
	(18, 21, 'ekenedilichukwu', 'active', '10', '5', '2021-04-26 19:39:22', '2021-04-26 19:39:22');
/*!40000 ALTER TABLE `daomni_influentialcoupons` ENABLE KEYS */;

-- Dumping structure for table thronehomesltd.daomni_landdetail_images
DROP TABLE IF EXISTS `daomni_landdetail_images`;
CREATE TABLE IF NOT EXISTS `daomni_landdetail_images` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) NOT NULL,
  `content_id` int(11) DEFAULT NULL,
  `daomnilandtypes_id` int(11) DEFAULT NULL,
  `land_plan_images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Land',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table thronehomesltd.daomni_landdetail_images: ~34 rows (approximately)
/*!40000 ALTER TABLE `daomni_landdetail_images` DISABLE KEYS */;
REPLACE INTO `daomni_landdetail_images` (`id`, `admin_id`, `content_id`, `daomnilandtypes_id`, `land_plan_images`, `group`, `created_at`, `updated_at`) VALUES
	(1, 2, 1, 1, 'frontend/images/properties/propertiesdetails/2_1_floorplan.png', 'Floorplan', '2021-04-04 06:37:30', '2021-04-04 06:37:30'),
	(2, 2, 1, 1, 'frontend/images/properties/propertiesdetails/2_1_groundfloor.png', 'Groundfloorplan', '2021-04-04 06:37:30', '2021-04-04 06:37:30'),
	(3, 2, 1, 1, 'frontend/images/properties/propertiesdetails/2_1_CRD_LUGBE_FRONT_VIEW.jpg', 'LandHouseFrontView', '2021-04-04 06:37:31', '2021-04-04 06:37:31'),
	(4, 2, 1, 1, 'frontend/images/properties/propertiesdetails/2_1_CRD_LUGBE_FRONT_VIEW.jpg', 'LandHouseBackView', '2021-04-04 06:37:31', '2021-04-04 06:37:31'),
	(5, 2, 2, 2, 'frontend/images/properties/propertiesdetails/2_2_floorplan.png', 'Floorplan', '2021-04-04 06:37:32', '2021-04-04 06:37:32'),
	(6, 2, 2, 2, 'frontend/images/properties/propertiesdetails/2_2_groundfloor.png', 'Groundfloorplan', '2021-04-04 06:37:32', '2021-04-04 06:37:32'),
	(7, 2, 2, 2, 'frontend/images/properties/propertiesdetails/2_2_CRD_LUGBE_FRONT_VIEW.jpg', 'LandHouseFrontView', '2021-04-04 06:37:33', '2021-04-04 06:37:33'),
	(8, 2, 2, 2, 'frontend/images/properties/propertiesdetails/2_2_CRD_LUGBE_FRONT_VIEW.jpg', 'LandHouseBackView', '2021-04-04 06:37:33', '2021-04-04 06:37:33'),
	(9, 2, 3, 3, 'frontend/images/properties/propertiesdetails/2_3_floorplan.png', 'Floorplan', '2021-04-04 06:37:34', '2021-04-04 06:37:34'),
	(10, 2, 3, 3, 'frontend/images/properties/propertiesdetails/2_3_groundfloor.png', 'Groundfloorplan', '2021-04-04 06:37:36', '2021-04-04 06:37:36'),
	(11, 2, 3, 3, 'frontend/images/properties/propertiesdetails/2_3_CRD_LUGBE_FRONT_VIEW.jpg', 'LandHouseFrontView', '2021-04-04 06:37:36', '2021-04-04 06:37:36'),
	(12, 2, 3, 3, 'frontend/images/properties/propertiesdetails/2_3_CRD_LUGBE_FRONT_VIEW.jpg', 'LandHouseBackView', '2021-04-04 06:37:36', '2021-04-04 06:37:36'),
	(13, 2, 4, 4, 'frontend/images/properties/propertiesdetails/2_4_floorplan.png', 'Floorplan', '2021-04-04 06:37:37', '2021-04-04 06:37:37'),
	(14, 2, 4, 4, 'frontend/images/properties/propertiesdetails/2_4_groundfloor.png', 'Groundfloorplan', '2021-04-04 06:37:37', '2021-04-04 06:37:37'),
	(15, 2, 4, 4, 'frontend/images/properties/propertiesdetails/2_4_IDU_FRONT_VIEW.jpg', 'LandHouseFrontView', '2021-04-04 06:37:38', '2021-04-04 06:37:38'),
	(16, 2, 4, 4, 'frontend/images/properties/propertiesdetails/2_4_IDU_FRONT_VIEW.jpg', 'LandHouseBackView', '2021-04-04 06:37:38', '2021-04-04 06:37:38'),
	(17, 2, 5, 5, 'frontend/images/properties/propertiesdetails/2_5_floorplan.png', 'Floorplan', '2021-04-04 06:37:39', '2021-04-04 06:37:39'),
	(18, 2, 5, 5, 'frontend/images/properties/propertiesdetails/2_5_groundfloor.png', 'Groundfloorplan', '2021-04-04 06:37:39', '2021-04-04 06:37:39'),
	(19, 2, 5, 5, 'frontend/images/properties/propertiesdetails/2_5_IDU_FRONT_VIEW.jpg', 'LandHouseFrontView', '2021-04-04 06:37:40', '2021-04-04 06:37:40'),
	(20, 2, 5, 5, 'frontend/images/properties/propertiesdetails/2_5_IDU_FRONT_VIEW.jpg', 'LandHouseBackView', '2021-04-04 06:37:40', '2021-04-04 06:37:40'),
	(21, 2, 6, 6, 'frontend/images/properties/propertiesdetails/2_6_floorplan.png', 'Floorplan', '2021-04-04 06:37:41', '2021-04-04 06:37:41'),
	(22, 2, 6, 6, 'frontend/images/properties/propertiesdetails/2_6_groundfloor.png', 'Groundfloorplan', '2021-04-04 06:37:41', '2021-04-04 06:37:41'),
	(23, 2, 6, 6, 'frontend/images/properties/propertiesdetails/2_6_IDU_FRONT_VIEW.jpg', 'LandHouseFrontView', '2021-04-04 06:37:42', '2021-04-04 06:37:42'),
	(24, 2, 6, 6, 'frontend/images/properties/propertiesdetails/2_6_IDU_FRONT_VIEW.jpg', 'LandHouseBackView', '2021-04-04 06:37:42', '2021-04-04 06:37:42'),
	(25, 2, 7, 7, 'frontend/images/properties/propertiesdetails/2_7_floorplan.png', 'Floorplan', '2021-04-04 06:37:43', '2021-04-04 06:37:43'),
	(26, 2, 7, 7, 'frontend/images/properties/propertiesdetails/2_7_groundfloor.png', 'Groundfloorplan', '2021-04-04 06:37:43', '2021-04-04 06:37:43'),
	(27, 2, 7, 7, 'frontend/images/properties/propertiesdetails/2_7_APO_FRONT_VIEW.jpg', 'LandHouseFrontView', '2021-04-04 06:37:45', '2021-04-04 06:37:45'),
	(28, 2, 7, 7, 'frontend/images/properties/propertiesdetails/2_7_APO_FRONT_VIEW.jpg', 'LandHouseBackView', '2021-04-04 06:37:45', '2021-04-04 06:37:45'),
	(29, 2, 8, 8, 'frontend/images/properties/propertiesdetails/2_8_floorplan.png', 'Floorplan', '2021-04-04 06:37:47', '2021-04-04 06:37:47'),
	(30, 2, 8, 8, 'frontend/images/properties/propertiesdetails/2_8_groundfloor.png', 'Groundfloorplan', '2021-04-04 06:37:47', '2021-04-04 06:37:47'),
	(31, 2, 8, 8, 'frontend/images/properties/propertiesdetails/2_8_ACO_FRONT_VIEW.jpg', 'LandHouseFrontView', '2021-04-04 06:37:47', '2021-04-04 06:37:47'),
	(32, 2, 8, 8, 'frontend/images/properties/propertiesdetails/2_8_ACO_FRONT_VIEW.jpg', 'LandHouseBackView', '2021-04-04 06:37:47', '2021-04-04 06:37:47'),
	(33, 2, 1, 9, 'frontend/images/properties/propertiesdetails/2_1_APO_FRONT_VIEW.jpg', 'Houses', '2021-04-04 06:37:47', '2021-04-04 06:37:47'),
	(34, 2, 1, 9, 'frontend/images/properties/propertiesdetails/2_1_APO_FRONT_VIEW.jpg', 'Houses', '2021-04-04 06:37:48', '2021-04-04 06:37:48');
/*!40000 ALTER TABLE `daomni_landdetail_images` ENABLE KEYS */;

-- Dumping structure for table thronehomesltd.daomni_landtypes
DROP TABLE IF EXISTS `daomni_landtypes`;
CREATE TABLE IF NOT EXISTS `daomni_landtypes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) NOT NULL,
  `content_id` int(11) DEFAULT NULL,
  `page_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lands_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lands_location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lands_size` int(11) NOT NULL DEFAULT '0',
  `lands_size_si_unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'sqm',
  `lands_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lands_details` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lands_details_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lands_price` decimal(13,2) NOT NULL DEFAULT '0.00',
  `infrastructure` decimal(13,2) NOT NULL DEFAULT '0.00',
  `feature1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feature2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lands_total` int(11) NOT NULL DEFAULT '0',
  `lands_total_sold` int(11) NOT NULL DEFAULT '0',
  `si_unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '/ plot',
  `lands_detail_others` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Other Lands',
  `section_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ESTATE SERVICES',
  `section_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ESTATE INCLUDES:',
  `section_info` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lands_detail_booking` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'BUY YOUR LANDS',
  `lands_star_voted` int(11) NOT NULL DEFAULT '5',
  `lands_detail_available_info` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'AVAILABLE LANDS',
  `flaticon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table thronehomesltd.daomni_landtypes: ~9 rows (approximately)
/*!40000 ALTER TABLE `daomni_landtypes` DISABLE KEYS */;
REPLACE INTO `daomni_landtypes` (`id`, `admin_id`, `content_id`, `page_name`, `lands_name`, `lands_location`, `lands_size`, `lands_size_si_unit`, `lands_img`, `lands_details`, `lands_details_link`, `lands_price`, `infrastructure`, `feature1`, `feature2`, `lands_total`, `lands_total_sold`, `si_unit`, `lands_detail_others`, `section_title`, `section_subtitle`, `section_info`, `lands_detail_booking`, `lands_star_voted`, `lands_detail_available_info`, `flaticon`, `created_at`, `updated_at`) VALUES
	(1, 2, 1, 'Lands', 'CRD Lugbe 450', 'Lugbe', 450, 'sqm', 'frontend/images/properties/2_1_CRD_LUGBE.jpg', 'Crd lugbe 450', '/land_details', 2700000.00, 1500000.00, '', '', 40, 0, '/ plot', 'Other Lands', 'ESTATE SERVICES', 'ESTATE INCLUDES:', NULL, 'SUBSCRIBE NOW', 5, 'AVAILABLE LANDS', 'flaticon-tray-1', '2021-04-04 06:37:29', '2021-04-04 06:37:29'),
	(2, 2, 2, 'Lands', 'CRD Lugbe 500', 'Lugbe', 500, 'sqm', 'frontend/images/properties/2_2_CRD_LUGBE.jpg', 'Crd lugbe 500', '/land_details', 3000000.00, 1500000.00, '', '', 10, 0, '/ plot', 'Other Lands', 'ESTATE SERVICES', 'ESTATE INCLUDES:', NULL, 'SUBSCRIBE NOW', 5, 'AVAILABLE LANDS', 'flaticon-tray-1', '2021-04-04 06:37:32', '2021-04-04 06:37:32'),
	(3, 2, 3, 'Lands', 'CRD Lugbe 600', 'Lugbe', 600, 'sqm', 'frontend/images/properties/2_3_CRD_LUGBE.jpg', 'Crd lugbe 600', '/land_details', 3500000.00, 1500000.00, '', '', 16, 0, '/ plot', 'Other Lands', 'ESTATE SERVICES', 'ESTATE INCLUDES:', NULL, 'SUBSCRIBE NOW', 5, 'AVAILABLE LANDS', 'flaticon-tray-1', '2021-04-04 06:37:34', '2021-04-04 06:37:34'),
	(4, 2, 4, 'Lands', 'IDU 450', 'IDU', 450, 'sqm', 'frontend/images/properties/2_4_IDU_Railway_Station.jpg', 'Idu 450', '/land_details', 3800000.00, 1700000.00, '', '', 810, 0, '/ plot', 'Other Lands', 'ESTATE SERVICES', 'ESTATE INCLUDES:', NULL, 'SUBSCRIBE NOW', 5, 'AVAILABLE LANDS', 'flaticon-nature', '2021-04-04 06:37:37', '2021-04-04 06:37:37'),
	(5, 2, 5, 'Lands', 'IDU 500', 'IDU', 500, 'sqm', 'frontend/images/properties/2_5_IDU_Railway_Station.jpg', 'Idu 500', '/land_details', 4200000.00, 1700000.00, '', '', 200, 0, '/ plot', 'Other Lands', 'ESTATE SERVICES', 'ESTATE INCLUDES:', NULL, 'SUBSCRIBE NOW', 5, 'AVAILABLE LANDS', 'flaticon-nature', '2021-04-04 06:37:38', '2021-04-04 06:37:38'),
	(6, 2, 6, 'Lands', 'IDU 600', 'IDU', 600, 'sqm', 'frontend/images/properties/2_6_IDU_Railway_Station.jpg', 'Idu 600', '/land_details', 5000000.00, 1700000.00, '', '', 250, 0, '/ plot', 'Other Lands', 'ESTATE SERVICES', 'ESTATE INCLUDES:', NULL, 'SUBSCRIBE NOW', 5, 'AVAILABLE LANDS', 'flaticon-nature', '2021-04-04 06:37:40', '2021-04-04 06:37:40'),
	(7, 2, 7, 'Lands', 'APO 450', 'APO', 450, 'sqm', 'frontend/images/properties/2_7_APO_Temporary_IMAGE.jpg', 'Apo 450', '/land_details', 20000000.00, 0.00, '', '', 6, 0, '/ plot', 'Other Lands', 'ESTATE SERVICES', 'ESTATE INCLUDES:', NULL, 'SUBSCRIBE NOW', 5, 'AVAILABLE LANDS', 'flaticon-screen-1', '2021-04-04 06:37:42', '2021-04-04 06:37:42'),
	(8, 2, 8, 'Lands', 'ACO 450', 'ACO', 450, 'sqm', 'frontend/images/properties/2_8_ACO_Temporary_IMAGE.jpg', 'Aco 450', '/land_details', 6000000.00, 0.00, '', '', 4, 0, '/ plot', 'Other Lands', 'ESTATE SERVICES', 'ESTATE INCLUDES:', NULL, 'SUBSCRIBE NOW', 5, 'AVAILABLE LANDS', 'flaticon-tray-1', '2021-04-04 06:37:46', '2021-04-04 06:37:46'),
	(9, 2, 1, 'Houses', 'APO_5_Bedroom_Detached_Duplex', 'APO', 5, 'sqm', 'frontend/images/properties/2_1_1.jpg', 'Enjoy a great apo_5_bedroom_detached_duplex', '/houses_details', 70000000.00, 0.00, '', '', 1, 0, '/ house', 'Other Houses', 'ESTATE SERVICES', 'ESTATE INCLUDES:', NULL, 'SUBSCRIBE NOW', 5, 'AVAILABLE HOUSES', 'flaticon-hotel', '2021-04-04 06:37:47', '2021-04-04 06:37:47');
/*!40000 ALTER TABLE `daomni_landtypes` ENABLE KEYS */;

-- Dumping structure for table thronehomesltd.daomni_land_services
DROP TABLE IF EXISTS `daomni_land_services`;
CREATE TABLE IF NOT EXISTS `daomni_land_services` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) NOT NULL,
  `content_id` int(11) DEFAULT NULL,
  `daomnilandtypes_id` int(11) DEFAULT NULL,
  `land_services` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `available` int(11) NOT NULL DEFAULT '0',
  `display` int(11) NOT NULL DEFAULT '0',
  `group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'room',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=217 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table thronehomesltd.daomni_land_services: ~216 rows (approximately)
/*!40000 ALTER TABLE `daomni_land_services` DISABLE KEYS */;
REPLACE INTO `daomni_land_services` (`id`, `admin_id`, `content_id`, `daomnilandtypes_id`, `land_services`, `available`, `display`, `group`, `created_at`, `updated_at`) VALUES
	(1, 2, 1, 1, 'double_bed', 0, 1, 'Lands', '2021-04-04 06:37:29', '2021-04-04 06:37:29'),
	(2, 2, 2, 1, '80_sq_mt', 0, 1, 'Lands', '2021-04-04 06:37:29', '2021-04-04 06:37:29'),
	(3, 2, 3, 1, '2_persons', 0, 1, 'Lands', '2021-04-04 06:37:29', '2021-04-04 06:37:29'),
	(4, 2, 4, 1, 'free_internet', 0, 1, 'Lands', '2021-04-04 06:37:29', '2021-04-04 06:37:29'),
	(5, 2, 5, 1, 'complimentary_breakfast', 0, 1, 'Lands', '2021-04-04 06:37:29', '2021-04-04 06:37:29'),
	(6, 2, 6, 1, 'private_balcony', 0, 1, 'Lands', '2021-04-04 06:37:29', '2021-04-04 06:37:29'),
	(7, 2, 7, 1, 'free_newspaper', 0, 1, 'Lands', '2021-04-04 06:37:29', '2021-04-04 06:37:29'),
	(8, 2, 8, 1, 'flat_tv_screen', 0, 1, 'Lands', '2021-04-04 06:37:29', '2021-04-04 06:37:29'),
	(9, 2, 9, 1, 'full_ac', 0, 1, 'Lands', '2021-04-04 06:37:29', '2021-04-04 06:37:29'),
	(10, 2, 10, 1, 'beach_view', 0, 1, 'Lands', '2021-04-04 06:37:29', '2021-04-04 06:37:29'),
	(11, 2, 11, 1, 'room_service', 0, 1, 'Lands', '2021-04-04 06:37:29', '2021-04-04 06:37:29'),
	(12, 2, 12, 1, 'desk', 0, 1, 'Lands', '2021-04-04 06:37:29', '2021-04-04 06:37:29'),
	(13, 2, 13, 1, 'bathroom', 0, 1, 'Lands', '2021-04-04 06:37:29', '2021-04-04 06:37:29'),
	(14, 2, 14, 1, 'wardrobe', 0, 1, 'Lands', '2021-04-04 06:37:29', '2021-04-04 06:37:29'),
	(15, 2, 15, 1, 'bathrobe', 0, 1, 'Lands', '2021-04-04 06:37:29', '2021-04-04 06:37:29'),
	(16, 2, 16, 1, 'free_toiletries', 0, 1, 'Lands', '2021-04-04 06:37:29', '2021-04-04 06:37:29'),
	(17, 2, 17, 1, 'slippers', 0, 1, 'Lands', '2021-04-04 06:37:29', '2021-04-04 06:37:29'),
	(18, 2, 18, 1, 'satellite_channels', 0, 1, 'Lands', '2021-04-04 06:37:29', '2021-04-04 06:37:29'),
	(19, 2, 19, 1, 'electric_kettle', 0, 1, 'Lands', '2021-04-04 06:37:29', '2021-04-04 06:37:29'),
	(20, 2, 20, 1, 'minibar', 0, 1, 'Lands', '2021-04-04 06:37:29', '2021-04-04 06:37:29'),
	(21, 2, 21, 1, 'refrigerator', 0, 1, 'Lands', '2021-04-04 06:37:29', '2021-04-04 06:37:29'),
	(22, 2, 22, 1, 'wake_up_service', 0, 1, 'Lands', '2021-04-04 06:37:29', '2021-04-04 06:37:29'),
	(23, 2, 23, 1, 'linen', 0, 1, 'Lands', '2021-04-04 06:37:29', '2021-04-04 06:37:29'),
	(24, 2, 24, 1, 'towels', 0, 1, 'Lands', '2021-04-04 06:37:29', '2021-04-04 06:37:29'),
	(25, 2, 1, 2, 'double_bed', 0, 1, 'Lands', '2021-04-04 06:37:32', '2021-04-04 06:37:32'),
	(26, 2, 2, 2, '80_sq_mt', 0, 1, 'Lands', '2021-04-04 06:37:32', '2021-04-04 06:37:32'),
	(27, 2, 3, 2, '2_persons', 0, 1, 'Lands', '2021-04-04 06:37:32', '2021-04-04 06:37:32'),
	(28, 2, 4, 2, 'free_internet', 0, 1, 'Lands', '2021-04-04 06:37:32', '2021-04-04 06:37:32'),
	(29, 2, 5, 2, 'complimentary_breakfast', 0, 1, 'Lands', '2021-04-04 06:37:32', '2021-04-04 06:37:32'),
	(30, 2, 6, 2, 'private_balcony', 0, 1, 'Lands', '2021-04-04 06:37:32', '2021-04-04 06:37:32'),
	(31, 2, 7, 2, 'free_newspaper', 0, 1, 'Lands', '2021-04-04 06:37:32', '2021-04-04 06:37:32'),
	(32, 2, 8, 2, 'flat_tv_screen', 0, 1, 'Lands', '2021-04-04 06:37:32', '2021-04-04 06:37:32'),
	(33, 2, 9, 2, 'full_ac', 0, 1, 'Lands', '2021-04-04 06:37:32', '2021-04-04 06:37:32'),
	(34, 2, 10, 2, 'beach_view', 0, 1, 'Lands', '2021-04-04 06:37:32', '2021-04-04 06:37:32'),
	(35, 2, 11, 2, 'room_service', 0, 1, 'Lands', '2021-04-04 06:37:32', '2021-04-04 06:37:32'),
	(36, 2, 12, 2, 'desk', 0, 1, 'Lands', '2021-04-04 06:37:32', '2021-04-04 06:37:32'),
	(37, 2, 13, 2, 'bathroom', 0, 1, 'Lands', '2021-04-04 06:37:32', '2021-04-04 06:37:32'),
	(38, 2, 14, 2, 'wardrobe', 0, 1, 'Lands', '2021-04-04 06:37:32', '2021-04-04 06:37:32'),
	(39, 2, 15, 2, 'bathrobe', 0, 1, 'Lands', '2021-04-04 06:37:32', '2021-04-04 06:37:32'),
	(40, 2, 16, 2, 'free_toiletries', 0, 1, 'Lands', '2021-04-04 06:37:32', '2021-04-04 06:37:32'),
	(41, 2, 17, 2, 'slippers', 0, 1, 'Lands', '2021-04-04 06:37:32', '2021-04-04 06:37:32'),
	(42, 2, 18, 2, 'satellite_channels', 0, 1, 'Lands', '2021-04-04 06:37:32', '2021-04-04 06:37:32'),
	(43, 2, 19, 2, 'electric_kettle', 0, 1, 'Lands', '2021-04-04 06:37:32', '2021-04-04 06:37:32'),
	(44, 2, 20, 2, 'minibar', 0, 1, 'Lands', '2021-04-04 06:37:32', '2021-04-04 06:37:32'),
	(45, 2, 21, 2, 'refrigerator', 0, 1, 'Lands', '2021-04-04 06:37:32', '2021-04-04 06:37:32'),
	(46, 2, 22, 2, 'wake_up_service', 0, 1, 'Lands', '2021-04-04 06:37:32', '2021-04-04 06:37:32'),
	(47, 2, 23, 2, 'linen', 0, 1, 'Lands', '2021-04-04 06:37:32', '2021-04-04 06:37:32'),
	(48, 2, 24, 2, 'towels', 0, 1, 'Lands', '2021-04-04 06:37:32', '2021-04-04 06:37:32'),
	(49, 2, 1, 3, 'double_bed', 0, 1, 'Lands', '2021-04-04 06:37:34', '2021-04-04 06:37:34'),
	(50, 2, 2, 3, '80_sq_mt', 0, 1, 'Lands', '2021-04-04 06:37:34', '2021-04-04 06:37:34'),
	(51, 2, 3, 3, '2_persons', 0, 1, 'Lands', '2021-04-04 06:37:34', '2021-04-04 06:37:34'),
	(52, 2, 4, 3, 'free_internet', 0, 1, 'Lands', '2021-04-04 06:37:34', '2021-04-04 06:37:34'),
	(53, 2, 5, 3, 'complimentary_breakfast', 0, 1, 'Lands', '2021-04-04 06:37:34', '2021-04-04 06:37:34'),
	(54, 2, 6, 3, 'private_balcony', 0, 1, 'Lands', '2021-04-04 06:37:34', '2021-04-04 06:37:34'),
	(55, 2, 7, 3, 'free_newspaper', 0, 1, 'Lands', '2021-04-04 06:37:34', '2021-04-04 06:37:34'),
	(56, 2, 8, 3, 'flat_tv_screen', 0, 1, 'Lands', '2021-04-04 06:37:34', '2021-04-04 06:37:34'),
	(57, 2, 9, 3, 'full_ac', 0, 1, 'Lands', '2021-04-04 06:37:34', '2021-04-04 06:37:34'),
	(58, 2, 10, 3, 'beach_view', 0, 1, 'Lands', '2021-04-04 06:37:34', '2021-04-04 06:37:34'),
	(59, 2, 11, 3, 'room_service', 0, 1, 'Lands', '2021-04-04 06:37:34', '2021-04-04 06:37:34'),
	(60, 2, 12, 3, 'desk', 0, 1, 'Lands', '2021-04-04 06:37:34', '2021-04-04 06:37:34'),
	(61, 2, 13, 3, 'bathroom', 0, 1, 'Lands', '2021-04-04 06:37:34', '2021-04-04 06:37:34'),
	(62, 2, 14, 3, 'wardrobe', 0, 1, 'Lands', '2021-04-04 06:37:34', '2021-04-04 06:37:34'),
	(63, 2, 15, 3, 'bathrobe', 0, 1, 'Lands', '2021-04-04 06:37:34', '2021-04-04 06:37:34'),
	(64, 2, 16, 3, 'free_toiletries', 0, 1, 'Lands', '2021-04-04 06:37:34', '2021-04-04 06:37:34'),
	(65, 2, 17, 3, 'slippers', 0, 1, 'Lands', '2021-04-04 06:37:34', '2021-04-04 06:37:34'),
	(66, 2, 18, 3, 'satellite_channels', 0, 1, 'Lands', '2021-04-04 06:37:34', '2021-04-04 06:37:34'),
	(67, 2, 19, 3, 'electric_kettle', 0, 1, 'Lands', '2021-04-04 06:37:34', '2021-04-04 06:37:34'),
	(68, 2, 20, 3, 'minibar', 0, 1, 'Lands', '2021-04-04 06:37:34', '2021-04-04 06:37:34'),
	(69, 2, 21, 3, 'refrigerator', 0, 1, 'Lands', '2021-04-04 06:37:34', '2021-04-04 06:37:34'),
	(70, 2, 22, 3, 'wake_up_service', 0, 1, 'Lands', '2021-04-04 06:37:34', '2021-04-04 06:37:34'),
	(71, 2, 23, 3, 'linen', 0, 1, 'Lands', '2021-04-04 06:37:34', '2021-04-04 06:37:34'),
	(72, 2, 24, 3, 'towels', 0, 1, 'Lands', '2021-04-04 06:37:34', '2021-04-04 06:37:34'),
	(73, 2, 1, 4, 'double_bed', 0, 1, 'Lands', '2021-04-04 06:37:37', '2021-04-04 06:37:37'),
	(74, 2, 2, 4, '80_sq_mt', 0, 1, 'Lands', '2021-04-04 06:37:37', '2021-04-04 06:37:37'),
	(75, 2, 3, 4, '2_persons', 0, 1, 'Lands', '2021-04-04 06:37:37', '2021-04-04 06:37:37'),
	(76, 2, 4, 4, 'free_internet', 0, 1, 'Lands', '2021-04-04 06:37:37', '2021-04-04 06:37:37'),
	(77, 2, 5, 4, 'complimentary_breakfast', 0, 1, 'Lands', '2021-04-04 06:37:37', '2021-04-04 06:37:37'),
	(78, 2, 6, 4, 'private_balcony', 0, 1, 'Lands', '2021-04-04 06:37:37', '2021-04-04 06:37:37'),
	(79, 2, 7, 4, 'free_newspaper', 0, 1, 'Lands', '2021-04-04 06:37:37', '2021-04-04 06:37:37'),
	(80, 2, 8, 4, 'flat_tv_screen', 0, 1, 'Lands', '2021-04-04 06:37:37', '2021-04-04 06:37:37'),
	(81, 2, 9, 4, 'full_ac', 0, 1, 'Lands', '2021-04-04 06:37:37', '2021-04-04 06:37:37'),
	(82, 2, 10, 4, 'beach_view', 0, 1, 'Lands', '2021-04-04 06:37:37', '2021-04-04 06:37:37'),
	(83, 2, 11, 4, 'room_service', 0, 1, 'Lands', '2021-04-04 06:37:37', '2021-04-04 06:37:37'),
	(84, 2, 12, 4, 'desk', 0, 1, 'Lands', '2021-04-04 06:37:37', '2021-04-04 06:37:37'),
	(85, 2, 13, 4, 'bathroom', 0, 1, 'Lands', '2021-04-04 06:37:37', '2021-04-04 06:37:37'),
	(86, 2, 14, 4, 'wardrobe', 0, 1, 'Lands', '2021-04-04 06:37:37', '2021-04-04 06:37:37'),
	(87, 2, 15, 4, 'bathrobe', 0, 1, 'Lands', '2021-04-04 06:37:37', '2021-04-04 06:37:37'),
	(88, 2, 16, 4, 'free_toiletries', 0, 1, 'Lands', '2021-04-04 06:37:37', '2021-04-04 06:37:37'),
	(89, 2, 17, 4, 'slippers', 0, 1, 'Lands', '2021-04-04 06:37:37', '2021-04-04 06:37:37'),
	(90, 2, 18, 4, 'satellite_channels', 0, 1, 'Lands', '2021-04-04 06:37:37', '2021-04-04 06:37:37'),
	(91, 2, 19, 4, 'electric_kettle', 0, 1, 'Lands', '2021-04-04 06:37:37', '2021-04-04 06:37:37'),
	(92, 2, 20, 4, 'minibar', 0, 1, 'Lands', '2021-04-04 06:37:37', '2021-04-04 06:37:37'),
	(93, 2, 21, 4, 'refrigerator', 0, 1, 'Lands', '2021-04-04 06:37:37', '2021-04-04 06:37:37'),
	(94, 2, 22, 4, 'wake_up_service', 0, 1, 'Lands', '2021-04-04 06:37:37', '2021-04-04 06:37:37'),
	(95, 2, 23, 4, 'linen', 0, 1, 'Lands', '2021-04-04 06:37:37', '2021-04-04 06:37:37'),
	(96, 2, 24, 4, 'towels', 0, 1, 'Lands', '2021-04-04 06:37:37', '2021-04-04 06:37:37'),
	(97, 2, 1, 5, 'double_bed', 0, 1, 'Lands', '2021-04-04 06:37:38', '2021-04-04 06:37:38'),
	(98, 2, 2, 5, '80_sq_mt', 0, 1, 'Lands', '2021-04-04 06:37:38', '2021-04-04 06:37:38'),
	(99, 2, 3, 5, '2_persons', 0, 1, 'Lands', '2021-04-04 06:37:38', '2021-04-04 06:37:38'),
	(100, 2, 4, 5, 'free_internet', 0, 1, 'Lands', '2021-04-04 06:37:38', '2021-04-04 06:37:38'),
	(101, 2, 5, 5, 'complimentary_breakfast', 0, 1, 'Lands', '2021-04-04 06:37:38', '2021-04-04 06:37:38'),
	(102, 2, 6, 5, 'private_balcony', 0, 1, 'Lands', '2021-04-04 06:37:38', '2021-04-04 06:37:38'),
	(103, 2, 7, 5, 'free_newspaper', 0, 1, 'Lands', '2021-04-04 06:37:38', '2021-04-04 06:37:38'),
	(104, 2, 8, 5, 'flat_tv_screen', 0, 1, 'Lands', '2021-04-04 06:37:38', '2021-04-04 06:37:38'),
	(105, 2, 9, 5, 'full_ac', 0, 1, 'Lands', '2021-04-04 06:37:38', '2021-04-04 06:37:38'),
	(106, 2, 10, 5, 'beach_view', 0, 1, 'Lands', '2021-04-04 06:37:38', '2021-04-04 06:37:38'),
	(107, 2, 11, 5, 'room_service', 0, 1, 'Lands', '2021-04-04 06:37:38', '2021-04-04 06:37:38'),
	(108, 2, 12, 5, 'desk', 0, 1, 'Lands', '2021-04-04 06:37:38', '2021-04-04 06:37:38'),
	(109, 2, 13, 5, 'bathroom', 0, 1, 'Lands', '2021-04-04 06:37:38', '2021-04-04 06:37:38'),
	(110, 2, 14, 5, 'wardrobe', 0, 1, 'Lands', '2021-04-04 06:37:38', '2021-04-04 06:37:38'),
	(111, 2, 15, 5, 'bathrobe', 0, 1, 'Lands', '2021-04-04 06:37:38', '2021-04-04 06:37:38'),
	(112, 2, 16, 5, 'free_toiletries', 0, 1, 'Lands', '2021-04-04 06:37:38', '2021-04-04 06:37:38'),
	(113, 2, 17, 5, 'slippers', 0, 1, 'Lands', '2021-04-04 06:37:38', '2021-04-04 06:37:38'),
	(114, 2, 18, 5, 'satellite_channels', 0, 1, 'Lands', '2021-04-04 06:37:38', '2021-04-04 06:37:38'),
	(115, 2, 19, 5, 'electric_kettle', 0, 1, 'Lands', '2021-04-04 06:37:38', '2021-04-04 06:37:38'),
	(116, 2, 20, 5, 'minibar', 0, 1, 'Lands', '2021-04-04 06:37:38', '2021-04-04 06:37:38'),
	(117, 2, 21, 5, 'refrigerator', 0, 1, 'Lands', '2021-04-04 06:37:38', '2021-04-04 06:37:38'),
	(118, 2, 22, 5, 'wake_up_service', 0, 1, 'Lands', '2021-04-04 06:37:38', '2021-04-04 06:37:38'),
	(119, 2, 23, 5, 'linen', 0, 1, 'Lands', '2021-04-04 06:37:38', '2021-04-04 06:37:38'),
	(120, 2, 24, 5, 'towels', 0, 1, 'Lands', '2021-04-04 06:37:38', '2021-04-04 06:37:38'),
	(121, 2, 1, 6, 'double_bed', 0, 1, 'Lands', '2021-04-04 06:37:40', '2021-04-04 06:37:40'),
	(122, 2, 2, 6, '80_sq_mt', 0, 1, 'Lands', '2021-04-04 06:37:41', '2021-04-04 06:37:41'),
	(123, 2, 3, 6, '2_persons', 0, 1, 'Lands', '2021-04-04 06:37:41', '2021-04-04 06:37:41'),
	(124, 2, 4, 6, 'free_internet', 0, 1, 'Lands', '2021-04-04 06:37:41', '2021-04-04 06:37:41'),
	(125, 2, 5, 6, 'complimentary_breakfast', 0, 1, 'Lands', '2021-04-04 06:37:41', '2021-04-04 06:37:41'),
	(126, 2, 6, 6, 'private_balcony', 0, 1, 'Lands', '2021-04-04 06:37:41', '2021-04-04 06:37:41'),
	(127, 2, 7, 6, 'free_newspaper', 0, 1, 'Lands', '2021-04-04 06:37:41', '2021-04-04 06:37:41'),
	(128, 2, 8, 6, 'flat_tv_screen', 0, 1, 'Lands', '2021-04-04 06:37:41', '2021-04-04 06:37:41'),
	(129, 2, 9, 6, 'full_ac', 0, 1, 'Lands', '2021-04-04 06:37:41', '2021-04-04 06:37:41'),
	(130, 2, 10, 6, 'beach_view', 0, 1, 'Lands', '2021-04-04 06:37:41', '2021-04-04 06:37:41'),
	(131, 2, 11, 6, 'room_service', 0, 1, 'Lands', '2021-04-04 06:37:41', '2021-04-04 06:37:41'),
	(132, 2, 12, 6, 'desk', 0, 1, 'Lands', '2021-04-04 06:37:41', '2021-04-04 06:37:41'),
	(133, 2, 13, 6, 'bathroom', 0, 1, 'Lands', '2021-04-04 06:37:41', '2021-04-04 06:37:41'),
	(134, 2, 14, 6, 'wardrobe', 0, 1, 'Lands', '2021-04-04 06:37:41', '2021-04-04 06:37:41'),
	(135, 2, 15, 6, 'bathrobe', 0, 1, 'Lands', '2021-04-04 06:37:41', '2021-04-04 06:37:41'),
	(136, 2, 16, 6, 'free_toiletries', 0, 1, 'Lands', '2021-04-04 06:37:41', '2021-04-04 06:37:41'),
	(137, 2, 17, 6, 'slippers', 0, 1, 'Lands', '2021-04-04 06:37:41', '2021-04-04 06:37:41'),
	(138, 2, 18, 6, 'satellite_channels', 0, 1, 'Lands', '2021-04-04 06:37:41', '2021-04-04 06:37:41'),
	(139, 2, 19, 6, 'electric_kettle', 0, 1, 'Lands', '2021-04-04 06:37:41', '2021-04-04 06:37:41'),
	(140, 2, 20, 6, 'minibar', 0, 1, 'Lands', '2021-04-04 06:37:41', '2021-04-04 06:37:41'),
	(141, 2, 21, 6, 'refrigerator', 0, 1, 'Lands', '2021-04-04 06:37:41', '2021-04-04 06:37:41'),
	(142, 2, 22, 6, 'wake_up_service', 0, 1, 'Lands', '2021-04-04 06:37:41', '2021-04-04 06:37:41'),
	(143, 2, 23, 6, 'linen', 0, 1, 'Lands', '2021-04-04 06:37:41', '2021-04-04 06:37:41'),
	(144, 2, 24, 6, 'towels', 0, 1, 'Lands', '2021-04-04 06:37:41', '2021-04-04 06:37:41'),
	(145, 2, 1, 7, 'double_bed', 0, 1, 'Lands', '2021-04-04 06:37:42', '2021-04-04 06:37:42'),
	(146, 2, 2, 7, '80_sq_mt', 0, 1, 'Lands', '2021-04-04 06:37:42', '2021-04-04 06:37:42'),
	(147, 2, 3, 7, '2_persons', 0, 1, 'Lands', '2021-04-04 06:37:42', '2021-04-04 06:37:42'),
	(148, 2, 4, 7, 'free_internet', 0, 1, 'Lands', '2021-04-04 06:37:42', '2021-04-04 06:37:42'),
	(149, 2, 5, 7, 'complimentary_breakfast', 0, 1, 'Lands', '2021-04-04 06:37:42', '2021-04-04 06:37:42'),
	(150, 2, 6, 7, 'private_balcony', 0, 1, 'Lands', '2021-04-04 06:37:42', '2021-04-04 06:37:42'),
	(151, 2, 7, 7, 'free_newspaper', 0, 1, 'Lands', '2021-04-04 06:37:43', '2021-04-04 06:37:43'),
	(152, 2, 8, 7, 'flat_tv_screen', 0, 1, 'Lands', '2021-04-04 06:37:43', '2021-04-04 06:37:43'),
	(153, 2, 9, 7, 'full_ac', 0, 1, 'Lands', '2021-04-04 06:37:43', '2021-04-04 06:37:43'),
	(154, 2, 10, 7, 'beach_view', 0, 1, 'Lands', '2021-04-04 06:37:43', '2021-04-04 06:37:43'),
	(155, 2, 11, 7, 'room_service', 0, 1, 'Lands', '2021-04-04 06:37:43', '2021-04-04 06:37:43'),
	(156, 2, 12, 7, 'desk', 0, 1, 'Lands', '2021-04-04 06:37:43', '2021-04-04 06:37:43'),
	(157, 2, 13, 7, 'bathroom', 0, 1, 'Lands', '2021-04-04 06:37:43', '2021-04-04 06:37:43'),
	(158, 2, 14, 7, 'wardrobe', 0, 1, 'Lands', '2021-04-04 06:37:43', '2021-04-04 06:37:43'),
	(159, 2, 15, 7, 'bathrobe', 0, 1, 'Lands', '2021-04-04 06:37:43', '2021-04-04 06:37:43'),
	(160, 2, 16, 7, 'free_toiletries', 0, 1, 'Lands', '2021-04-04 06:37:43', '2021-04-04 06:37:43'),
	(161, 2, 17, 7, 'slippers', 0, 1, 'Lands', '2021-04-04 06:37:43', '2021-04-04 06:37:43'),
	(162, 2, 18, 7, 'satellite_channels', 0, 1, 'Lands', '2021-04-04 06:37:43', '2021-04-04 06:37:43'),
	(163, 2, 19, 7, 'electric_kettle', 0, 1, 'Lands', '2021-04-04 06:37:43', '2021-04-04 06:37:43'),
	(164, 2, 20, 7, 'minibar', 0, 1, 'Lands', '2021-04-04 06:37:43', '2021-04-04 06:37:43'),
	(165, 2, 21, 7, 'refrigerator', 0, 1, 'Lands', '2021-04-04 06:37:43', '2021-04-04 06:37:43'),
	(166, 2, 22, 7, 'wake_up_service', 0, 1, 'Lands', '2021-04-04 06:37:43', '2021-04-04 06:37:43'),
	(167, 2, 23, 7, 'linen', 0, 1, 'Lands', '2021-04-04 06:37:43', '2021-04-04 06:37:43'),
	(168, 2, 24, 7, 'towels', 0, 1, 'Lands', '2021-04-04 06:37:43', '2021-04-04 06:37:43'),
	(169, 2, 1, 8, 'double_bed', 0, 1, 'Lands', '2021-04-04 06:37:46', '2021-04-04 06:37:46'),
	(170, 2, 2, 8, '80_sq_mt', 0, 1, 'Lands', '2021-04-04 06:37:46', '2021-04-04 06:37:46'),
	(171, 2, 3, 8, '2_persons', 0, 1, 'Lands', '2021-04-04 06:37:46', '2021-04-04 06:37:46'),
	(172, 2, 4, 8, 'free_internet', 0, 1, 'Lands', '2021-04-04 06:37:46', '2021-04-04 06:37:46'),
	(173, 2, 5, 8, 'complimentary_breakfast', 0, 1, 'Lands', '2021-04-04 06:37:46', '2021-04-04 06:37:46'),
	(174, 2, 6, 8, 'private_balcony', 0, 1, 'Lands', '2021-04-04 06:37:46', '2021-04-04 06:37:46'),
	(175, 2, 7, 8, 'free_newspaper', 0, 1, 'Lands', '2021-04-04 06:37:46', '2021-04-04 06:37:46'),
	(176, 2, 8, 8, 'flat_tv_screen', 0, 1, 'Lands', '2021-04-04 06:37:46', '2021-04-04 06:37:46'),
	(177, 2, 9, 8, 'full_ac', 0, 1, 'Lands', '2021-04-04 06:37:46', '2021-04-04 06:37:46'),
	(178, 2, 10, 8, 'beach_view', 0, 1, 'Lands', '2021-04-04 06:37:46', '2021-04-04 06:37:46'),
	(179, 2, 11, 8, 'room_service', 0, 1, 'Lands', '2021-04-04 06:37:46', '2021-04-04 06:37:46'),
	(180, 2, 12, 8, 'desk', 0, 1, 'Lands', '2021-04-04 06:37:46', '2021-04-04 06:37:46'),
	(181, 2, 13, 8, 'bathroom', 0, 1, 'Lands', '2021-04-04 06:37:46', '2021-04-04 06:37:46'),
	(182, 2, 14, 8, 'wardrobe', 0, 1, 'Lands', '2021-04-04 06:37:46', '2021-04-04 06:37:46'),
	(183, 2, 15, 8, 'bathrobe', 0, 1, 'Lands', '2021-04-04 06:37:46', '2021-04-04 06:37:46'),
	(184, 2, 16, 8, 'free_toiletries', 0, 1, 'Lands', '2021-04-04 06:37:46', '2021-04-04 06:37:46'),
	(185, 2, 17, 8, 'slippers', 0, 1, 'Lands', '2021-04-04 06:37:46', '2021-04-04 06:37:46'),
	(186, 2, 18, 8, 'satellite_channels', 0, 1, 'Lands', '2021-04-04 06:37:46', '2021-04-04 06:37:46'),
	(187, 2, 19, 8, 'electric_kettle', 0, 1, 'Lands', '2021-04-04 06:37:46', '2021-04-04 06:37:46'),
	(188, 2, 20, 8, 'minibar', 0, 1, 'Lands', '2021-04-04 06:37:46', '2021-04-04 06:37:46'),
	(189, 2, 21, 8, 'refrigerator', 0, 1, 'Lands', '2021-04-04 06:37:46', '2021-04-04 06:37:46'),
	(190, 2, 22, 8, 'wake_up_service', 0, 1, 'Lands', '2021-04-04 06:37:46', '2021-04-04 06:37:46'),
	(191, 2, 23, 8, 'linen', 0, 1, 'Lands', '2021-04-04 06:37:46', '2021-04-04 06:37:46'),
	(192, 2, 24, 8, 'towels', 0, 1, 'Lands', '2021-04-04 06:37:46', '2021-04-04 06:37:46'),
	(193, 2, 1, 9, 'double_bed', 0, 1, 'Houses', '2021-04-04 06:37:47', '2021-04-04 06:37:47'),
	(194, 2, 2, 9, '80_sq_mt', 0, 1, 'Houses', '2021-04-04 06:37:47', '2021-04-04 06:37:47'),
	(195, 2, 3, 9, '2_persons', 0, 1, 'Houses', '2021-04-04 06:37:47', '2021-04-04 06:37:47'),
	(196, 2, 4, 9, 'free_internet', 0, 1, 'Houses', '2021-04-04 06:37:47', '2021-04-04 06:37:47'),
	(197, 2, 5, 9, 'complimentary_breakfast', 0, 1, 'Houses', '2021-04-04 06:37:47', '2021-04-04 06:37:47'),
	(198, 2, 6, 9, 'private_balcony', 0, 1, 'Houses', '2021-04-04 06:37:47', '2021-04-04 06:37:47'),
	(199, 2, 7, 9, 'free_newspaper', 0, 1, 'Houses', '2021-04-04 06:37:47', '2021-04-04 06:37:47'),
	(200, 2, 8, 9, 'flat_tv_screen', 0, 1, 'Houses', '2021-04-04 06:37:47', '2021-04-04 06:37:47'),
	(201, 2, 9, 9, 'full_ac', 0, 1, 'Houses', '2021-04-04 06:37:47', '2021-04-04 06:37:47'),
	(202, 2, 10, 9, 'beach_view', 0, 1, 'Houses', '2021-04-04 06:37:47', '2021-04-04 06:37:47'),
	(203, 2, 11, 9, 'room_service', 0, 1, 'Houses', '2021-04-04 06:37:47', '2021-04-04 06:37:47'),
	(204, 2, 12, 9, 'desk', 0, 1, 'Houses', '2021-04-04 06:37:47', '2021-04-04 06:37:47'),
	(205, 2, 13, 9, 'bathroom', 0, 1, 'Houses', '2021-04-04 06:37:47', '2021-04-04 06:37:47'),
	(206, 2, 14, 9, 'wardrobe', 0, 1, 'Houses', '2021-04-04 06:37:47', '2021-04-04 06:37:47'),
	(207, 2, 15, 9, 'bathrobe', 0, 1, 'Houses', '2021-04-04 06:37:47', '2021-04-04 06:37:47'),
	(208, 2, 16, 9, 'free_toiletries', 0, 1, 'Houses', '2021-04-04 06:37:47', '2021-04-04 06:37:47'),
	(209, 2, 17, 9, 'slippers', 0, 1, 'Houses', '2021-04-04 06:37:47', '2021-04-04 06:37:47'),
	(210, 2, 18, 9, 'satellite_channels', 0, 1, 'Houses', '2021-04-04 06:37:47', '2021-04-04 06:37:47'),
	(211, 2, 19, 9, 'electric_kettle', 0, 1, 'Houses', '2021-04-04 06:37:47', '2021-04-04 06:37:47'),
	(212, 2, 20, 9, 'minibar', 0, 1, 'Houses', '2021-04-04 06:37:47', '2021-04-04 06:37:47'),
	(213, 2, 21, 9, 'refrigerator', 0, 1, 'Houses', '2021-04-04 06:37:47', '2021-04-04 06:37:47'),
	(214, 2, 22, 9, 'wake_up_service', 0, 1, 'Houses', '2021-04-04 06:37:47', '2021-04-04 06:37:47'),
	(215, 2, 23, 9, 'linen', 0, 1, 'Houses', '2021-04-04 06:37:47', '2021-04-04 06:37:47'),
	(216, 2, 24, 9, 'towels', 0, 1, 'Houses', '2021-04-04 06:37:47', '2021-04-04 06:37:47');
/*!40000 ALTER TABLE `daomni_land_services` ENABLE KEYS */;

-- Dumping structure for table thronehomesltd.daomni_pandemics
DROP TABLE IF EXISTS `daomni_pandemics`;
CREATE TABLE IF NOT EXISTS `daomni_pandemics` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) NOT NULL,
  `content_id` int(11) DEFAULT NULL,
  `measures` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table thronehomesltd.daomni_pandemics: ~6 rows (approximately)
/*!40000 ALTER TABLE `daomni_pandemics` DISABLE KEYS */;
REPLACE INTO `daomni_pandemics` (`id`, `admin_id`, `content_id`, `measures`, `created_at`, `updated_at`) VALUES
	(1, 2, 1, 'regularly and thoroughly wash your hands with soap under running water or use alcohol based \r\n   sanitizer if water is not available.', '2021-04-04 06:37:54', '2021-04-04 06:37:54'),
	(2, 2, 2, 'cover your mouth and nose with your bent elbow or tissue when you cough or sneeze. dispose\r\n  properly into a dustbin and sanitize your hand', '2021-04-04 06:37:54', '2021-04-04 06:37:54'),
	(3, 2, 4, 'avoid touching your eyes,nose,and mouth with unwashed hands', '2021-04-04 06:37:54', '2021-04-04 06:37:54'),
	(4, 2, 5, 'maintain at least two metres distance between yourself and anyone who is coughing or \r\n  sneezing around you', '2021-04-04 06:37:54', '2021-04-04 06:37:54'),
	(5, 2, 6, 'if you have travelled recently from a country with widespread community transmission\r\n  of covid-19  out break in the last 14 days,and you have a fever,cough,or breathing \r\n  difficultly call NCDC\r\n', '2021-04-04 06:37:54', '2021-04-04 06:37:54'),
	(6, 2, 7, 'if you have travelled recently from a country with widespread community transmission of \r\n  covid-19 outbreak in the last 14 days,stay at home and isolate your self', '2021-04-04 06:37:54', '2021-04-04 06:37:54');
/*!40000 ALTER TABLE `daomni_pandemics` ENABLE KEYS */;

-- Dumping structure for table thronehomesltd.daomni_projects
DROP TABLE IF EXISTS `daomni_projects`;
CREATE TABLE IF NOT EXISTS `daomni_projects` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `project_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_details` longtext COLLATE utf8mb4_unicode_ci,
  `project_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_cost` decimal(10,2) DEFAULT '0.00',
  `project_price` decimal(10,2) DEFAULT '0.00',
  `feature_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table thronehomesltd.daomni_projects: ~2 rows (approximately)
/*!40000 ALTER TABLE `daomni_projects` DISABLE KEYS */;
REPLACE INTO `daomni_projects` (`id`, `project_title`, `project_details`, `project_type`, `project_cost`, `project_price`, `feature_image`, `created_at`, `updated_at`) VALUES
	(1, 'APO\'s project', 'This plot has 600 sqm land size and is located at APO. The projection is to have five bedroom detached duplex. Building experts have commenced work on the land and work has been in progress from one stage to the other.\r\n<br><br>\r\nThe progress so far on the plot are as follows:\r\n<br>\r\n1 The clearing of the land<br>\r\n2 Fencing of the plot<br>\r\n3 Pegging and foundation stage<br>\r\n<br>\r\nOn finishing, this house will be affordable. The star price is only seventy million naira (70,000,000.00) on completion.<br><br>\r\nHurry and pay.', 'land', 0.00, 0.00, 'frontend/images/projects/APOPROJECT1.jpeg', '2021-04-08 00:00:00', '2021-04-08 00:00:00'),
	(2, 'Guzape\'s Project', 'This magnificent and eye- catching five (5) bedroom duplex with penthouse and two (2) living rooms all in suit with boys quatres (BQ) attached is located at Gusape, Asokoro extension.<br><br>\r\nWith a critical look, it shows that this house is sophisticated right from it’s foundation to the top level. It is a house capable of giving one the comfort one may desire.<br><br>\r\nThe material economy of this house is extremely high because all the building materials used are of high and lasting quality.<br><br>\r\nThe interior decoration catches the following features:<br>\r\n1 High quality chairs<br>\r\n2 High quality television and sound system<br>\r\n3 Refrigerators<br>\r\n4 Wardrobes<br>\r\n5 Air conditions<br>\r\n6 High quality cottons<br>\r\n7 High quality kitchen cabinet and utensils<br>\r\n8 Gas cooker and lots more<br>\r\n<br>The power and water supply are constant.\r\n<br>The price of this beautiful house is very, very affordable. It attracts only four hundred and ten million (410,000,000) naira only.\r\n<br>As a matter of fact, this house is a well-furnished apartment. <br>It is a pay and pack in.', 'house', 0.00, 0.00, 'frontend/images/projects/GUZAPE1.jpeg', '2021-04-08 00:00:00', '2021-04-08 00:00:00');
/*!40000 ALTER TABLE `daomni_projects` ENABLE KEYS */;

-- Dumping structure for table thronehomesltd.daomni_projectsimages
DROP TABLE IF EXISTS `daomni_projectsimages`;
CREATE TABLE IF NOT EXISTS `daomni_projectsimages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `project_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_image_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table thronehomesltd.daomni_projectsimages: ~32 rows (approximately)
/*!40000 ALTER TABLE `daomni_projectsimages` DISABLE KEYS */;
REPLACE INTO `daomni_projectsimages` (`id`, `project_id`, `project_image_link`, `created_at`, `updated_at`) VALUES
	(1, '1', 'frontend/images/projects/APOPROJECT1.jpeg', '2021-04-08 00:00:00', '2021-04-15 00:00:00'),
	(2, '1', 'frontend/images/projects/APOPROJECT2.jpeg', '2021-04-08 00:00:00', '2021-04-15 00:00:00'),
	(3, '1', 'frontend/images/projects/APOPROJECT3.jpeg', '2021-04-08 00:00:00', '2021-04-15 00:00:00'),
	(4, '1', 'frontend/images/projects/APOPROJECT4.jpeg', '2021-04-08 00:00:00', '2021-04-15 00:00:00'),
	(5, '1', 'frontend/images/projects/APOPROJECT5.jpeg', '2021-04-08 00:00:00', '2021-04-15 00:00:00'),
	(6, '1', 'frontend/images/projects/APOPROJECT6.jpeg', '2021-04-08 00:00:00', '2021-04-15 00:00:00'),
	(7, '1', 'frontend/images/projects/APOPROJECT7.jpeg', '2021-04-08 00:00:00', '2021-04-15 00:00:00'),
	(8, '1', 'frontend/images/projects/APOPROJECT8.jpeg', '2021-04-08 00:00:00', '2021-04-15 00:00:00'),
	(9, '1', 'frontend/images/projects/APOPROJECT9.jpeg', '2021-04-08 00:00:00', '2021-04-15 00:00:00'),
	(10, '1', 'frontend/images/projects/APOPROJECT10.jpeg', '2021-04-08 00:00:00', '2021-04-15 00:00:00'),
	(11, '1', 'frontend/images/projects/APOPROJECT11.jpeg', '2021-04-08 00:00:00', '2021-04-15 00:00:00'),
	(12, '1', 'frontend/images/projects/APOPROJECT12.jpeg', '2021-04-08 00:00:00', '2021-04-15 00:00:00'),
	(13, '2', 'frontend/images/projects/Guzape1.jpeg', '2021-04-08 00:00:00', '2021-04-15 00:00:00'),
	(14, '2', 'frontend/images/projects/Guzape2.jpeg', '2021-04-08 00:00:00', '2021-04-15 00:00:00'),
	(15, '2', 'frontend/images/projects/Guzape3.jpeg', '2021-04-08 00:00:00', '2021-04-15 00:00:00'),
	(16, '2', 'frontend/images/projects/Guzape4.jpeg', '2021-04-08 00:00:00', '2021-04-15 00:00:00'),
	(17, '2', 'frontend/images/projects/Guzape5.jpeg', '2021-04-08 00:00:00', '2021-04-15 00:00:00'),
	(18, '2', 'frontend/images/projects/Guzape6.jpeg', '2021-04-08 00:00:00', '2021-04-15 00:00:00'),
	(19, '2', 'frontend/images/projects/Guzape7.jpeg', '2021-04-08 00:00:00', '2021-04-15 00:00:00'),
	(20, '2', 'frontend/images/projects/Guzape8.jpeg', '2021-04-08 00:00:00', '2021-04-15 00:00:00'),
	(21, '2', 'frontend/images/projects/Guzape9.jpeg', '2021-04-08 00:00:00', '2021-04-15 00:00:00'),
	(22, '2', 'frontend/images/projects/Guzape10.jpeg', '2021-04-08 00:00:00', '2021-04-15 00:00:00'),
	(23, '2', 'frontend/images/projects/Guzape11.jpeg', '2021-04-08 00:00:00', '2021-04-15 00:00:00'),
	(24, '2', 'frontend/images/projects/Guzape12.jpeg', '2021-04-08 00:00:00', '2021-04-15 00:00:00'),
	(25, '2', 'frontend/images/projects/Guzape13.jpeg', '2021-04-08 00:00:00', '2021-04-15 00:00:00'),
	(26, '8', 'frontend/images/projects/8.jpg', '2021-04-08 00:00:00', '2021-04-15 00:00:00'),
	(27, '7', 'frontend/images/projects/7.jpg', '2021-04-08 00:00:00', '2021-04-15 00:00:00'),
	(28, '8', 'frontend/images/projects/8.jpg', '2021-04-08 00:00:00', '2021-04-15 00:00:00'),
	(29, '7', 'frontend/images/projects/7.jpg', '2021-04-08 00:00:00', '2021-04-15 00:00:00'),
	(30, '8', 'frontend/images/projects/8.jpg', '2021-04-08 00:00:00', '2021-04-15 00:00:00'),
	(31, '7', 'frontend/images/projects/7.jpg', '2021-04-08 00:00:00', '2021-04-15 00:00:00'),
	(32, '8', 'frontend/images/projects/8.jpg', '2021-04-08 00:00:00', '2021-04-15 00:00:00');
/*!40000 ALTER TABLE `daomni_projectsimages` ENABLE KEYS */;

-- Dumping structure for table thronehomesltd.daomni_roles
DROP TABLE IF EXISTS `daomni_roles`;
CREATE TABLE IF NOT EXISTS `daomni_roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) DEFAULT NULL,
  `content_id` int(11) DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table thronehomesltd.daomni_roles: ~12 rows (approximately)
/*!40000 ALTER TABLE `daomni_roles` DISABLE KEYS */;
REPLACE INTO `daomni_roles` (`id`, `admin_id`, `content_id`, `role`, `created_at`, `updated_at`) VALUES
	(1, 0, 0, 'super', '2021-04-04 06:37:27', '2021-04-04 06:37:27'),
	(2, 2, 1, 'admin', '2021-04-04 06:37:27', '2021-04-04 06:37:27'),
	(3, 2, 2, 'user', '2021-04-04 06:37:27', '2021-04-04 06:37:27'),
	(4, 2, 3, 'laundary', '2021-04-04 06:37:27', '2021-04-04 06:37:27'),
	(5, 2, 4, 'inventory', '2021-04-04 06:37:27', '2021-04-04 06:37:27'),
	(6, 2, 5, 'staff', '2021-04-04 06:37:27', '2021-04-04 06:37:27'),
	(7, 2, 6, 'frontdesk', '2021-04-04 06:37:27', '2021-04-04 06:37:27'),
	(8, 2, 7, 'security', '2021-04-04 06:37:27', '2021-04-04 06:37:27'),
	(9, 2, 8, 'accounting', '2021-04-04 06:37:27', '2021-04-04 06:37:27'),
	(10, 2, 9, 'maintenance', '2021-04-04 06:37:27', '2021-04-04 06:37:27'),
	(11, 2, 10, 'architectural', '2021-04-04 06:37:27', '2021-04-04 06:37:27'),
	(12, 2, 11, 'agent', '2021-04-04 09:47:42', '2021-04-04 09:47:45');
/*!40000 ALTER TABLE `daomni_roles` ENABLE KEYS */;

-- Dumping structure for table thronehomesltd.daomni_setting_index_about
DROP TABLE IF EXISTS `daomni_setting_index_about`;
CREATE TABLE IF NOT EXISTS `daomni_setting_index_about` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) NOT NULL,
  `content_id` int(11) DEFAULT NULL,
  `section_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_branding_info` longtext COLLATE utf8mb4_unicode_ci,
  `section_branding_info_ext` longtext COLLATE utf8mb4_unicode_ci,
  `section_label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `daomni_setting_index_about_admin_id_unique` (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table thronehomesltd.daomni_setting_index_about: ~0 rows (approximately)
/*!40000 ALTER TABLE `daomni_setting_index_about` DISABLE KEYS */;
REPLACE INTO `daomni_setting_index_about` (`id`, `admin_id`, `content_id`, `section_title`, `section_subtitle`, `section_branding_info`, `section_branding_info_ext`, `section_label`, `section_link`, `section_img`, `created_at`, `updated_at`) VALUES
	(1, 2, 1, 'About Us', 'Welcome to Throne Investment Homes', '<title></title>Throne Investment Homes Limited (TIHL) is a viral real estate development and construction company driven with the highest passion to provide the best living \r\nHome experience for all living in Abuja metropolis and beyond.  TIHL has been projected to war against homelessness among the people of Nigeria and Africa in general.  This has been set to be achieved through the organization of competent professional engineers whose expertise are competent enough to guarantee our objective.\r\nTIHL is also a platform for investment. By this we mean that our clients can pay for land or house and allow it to appreciate. If the property appreciates to the extent of your satisfaction, then we can help you sale the property on a good profit margin.\r\nAt TIHL , we believe real dreams are beyond wishes and imaginations and that is why we don’t build house, but we build homes.<br><br>\r\n\r\n<title>WHY THRONE INVESTMENT HOMES LIMITED</title>\r\nHouse shortage has been a major problem in Africa. A large number of people have find it difficult to own a house of their own because of one deficiency or the other. TIHL has emerged to close the gap and put smile on the faces of people by putting up  painless scheme that would give all clients access to own a house.\r\nSecondly, it is TIHL because we know and understand the value of investments and that is why we had put a  team of expertise together to analyze and give you the best investment properties that will yield a better value in a short period of time.<br><br>\r\n\r\n<title>OUR HISTORY</title>\r\nOur history is basically on the notable and successful achievements we have made over the years in terms of customers satisfaction. It is not gain saying of the fact that Throne Homes has recorded success through customers satisfaction by providing adequate and acceptable services to her clients in the following area:<br>\r\n1. Selling of lands<br>\r\n2. Selling of houses<br>\r\n3. Issuance of Allocation paper to the clients<br>\r\n4. Issuance of offer paper to clients<br>\r\n5. Issuance of deed of partition.<br>\r\nAt present, we have properties (lands and houses) for sale at Apo, ACO, Idu and Lugbe. All in Federal Capital Territory (FCT), Abuja.<br><br>\r\n\r\n<title>OUR MISSION</title>\r\nTo provide and deliver direct to our clients quality services that would enable them not just to have a house but homes. This will be made possible through  trust and reliability.<br><br>\r\n\r\n<title>OUR GOAL</title>\r\nTo ensure that every serious average citizen of Nigeria and Africa who wishes to have a house gets one through organization of various payment scheme that would enable clients to purchase properties.<br><br>\r\n\r\n<title>LEGITIMACY</title>\r\nLegitimacy is the key to every successful business. At Throne Homes, we take it seriously when it comes to the authenticity of our properties, and that is why we will never advertise properties we don’t have. If you pay today, we will give you instant allocation and you can move to the site immediately and start building on your assigned plot.<br><br>\r\n\r\n<title>TRANSPARENCY</title>\r\nAll monetary activities can be tracked and viewed on the company’s app. You can also make a deposit  or withdrawal at convenience.<br><br>\r\n\r\n<title>RELIABILITY</title>\r\nWe are very much reliable. Our reliability is based on our legitimacy and transparency. We make sure no stone is left unturn during and after transaction. All authentic documents entitled to client/s must all be delivered without sentiment.<br><br>\r\n\r\n<title>PAYMENT FLAXIBILITY</title>\r\nAt Throne Homes, we understand that all hands are not equal. We make plans that make your dreams come true by creating an installment payment scheme that gives everybody opportunity to own a property in Throne Homes by just depositing initial amount of fifty thousand (50,000) naira.<br><br>\r\n\r\n<title>NB:</title>\r\nWe believe real dream are beyond wishes and imagination and that is why at Throne Investment Homes Limited, we don’t build houses, we build homes. <br><br>', '', 'Read More', '/about', 'frontend/images/thronehomes.png', '2021-04-04 06:37:27', '2021-04-04 06:37:27');
/*!40000 ALTER TABLE `daomni_setting_index_about` ENABLE KEYS */;

-- Dumping structure for table thronehomesltd.daomni_setting_index_lands
DROP TABLE IF EXISTS `daomni_setting_index_lands`;
CREATE TABLE IF NOT EXISTS `daomni_setting_index_lands` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) NOT NULL,
  `content_id` int(11) DEFAULT NULL,
  `section_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_lands` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_lands_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `daomni_setting_index_lands_admin_id_unique` (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table thronehomesltd.daomni_setting_index_lands: ~0 rows (approximately)
/*!40000 ALTER TABLE `daomni_setting_index_lands` DISABLE KEYS */;
REPLACE INTO `daomni_setting_index_lands` (`id`, `admin_id`, `content_id`, `section_title`, `section_subtitle`, `section_lands`, `section_lands_link`, `created_at`, `updated_at`) VALUES
	(1, 2, 1, 'LANDS', 'Available lands', 'View all lands', '/lands', '2021-04-04 06:37:27', '2021-04-04 06:37:27');
/*!40000 ALTER TABLE `daomni_setting_index_lands` ENABLE KEYS */;

-- Dumping structure for table thronehomesltd.daomni_setting_navs
DROP TABLE IF EXISTS `daomni_setting_navs`;
CREATE TABLE IF NOT EXISTS `daomni_setting_navs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) NOT NULL,
  `content_id` int(11) DEFAULT NULL,
  `nav_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nav_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nav_dropdown` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nav_submenu0` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nav_submenu1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nav_submenu2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nav_submenu3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nav_submenu4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nav_submenu5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nav_submenu6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nav_submenu7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nav_submenu8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nav_submenu9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table thronehomesltd.daomni_setting_navs: ~8 rows (approximately)
/*!40000 ALTER TABLE `daomni_setting_navs` DISABLE KEYS */;
REPLACE INTO `daomni_setting_navs` (`id`, `admin_id`, `content_id`, `nav_name`, `nav_link`, `nav_dropdown`, `nav_submenu0`, `nav_submenu1`, `nav_submenu2`, `nav_submenu3`, `nav_submenu4`, `nav_submenu5`, `nav_submenu6`, `nav_submenu7`, `nav_submenu8`, `nav_submenu9`, `created_at`, `updated_at`) VALUES
	(1, 2, 1, 'home', '/index', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-04 06:37:27', '2021-04-04 06:37:27'),
	(2, 2, 2, 'about', '/about', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-04 06:37:27', '2021-04-04 06:37:27'),
	(3, 2, 3, 'properties', '/#', 'dropdown', '/lands', '/houses', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-04 06:37:27', '2021-04-04 06:37:27'),
	(4, 2, 4, 'projects', '/projects', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-04 06:37:27', '2021-04-04 06:37:27'),
	(5, 2, 5, 'contact', '/contact', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-04 06:37:27', '2021-04-04 06:37:27'),
	(6, 2, 6, 'covid-19 safety', '/covid-19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-04 06:37:27', '2021-04-04 06:37:27'),
	(7, 2, 7, 'login', '/login', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-04 06:37:27', '2021-04-04 06:37:27'),
	(8, 2, 8, 'become an influencer', '/become_an_influencer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-04 06:37:27', '2021-04-04 06:37:27');
/*!40000 ALTER TABLE `daomni_setting_navs` ENABLE KEYS */;

-- Dumping structure for table thronehomesltd.daomni_setting_services
DROP TABLE IF EXISTS `daomni_setting_services`;
CREATE TABLE IF NOT EXISTS `daomni_setting_services` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) NOT NULL,
  `content_id` int(11) DEFAULT NULL,
  `service_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flaticon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_details` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_count` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table thronehomesltd.daomni_setting_services: ~4 rows (approximately)
/*!40000 ALTER TABLE `daomni_setting_services` DISABLE KEYS */;
REPLACE INTO `daomni_setting_services` (`id`, `admin_id`, `content_id`, `service_title`, `service_subtitle`, `service_image`, `flaticon`, `service`, `service_details`, `service_count`, `created_at`, `updated_at`) VALUES
	(1, 2, 1, 'SERVICES', 'Check out awesome services', 'frontend/images/services/architecture.jpg', 'flaticon-architecture', 'Architectural & 3D Drawing', 'We give a very good design , with this, you will be more familiar with actual construction at your finger tips', 2, '2021-04-04 06:37:48', '2021-04-04 06:37:48'),
	(2, 2, 2, 'SERVICES', 'Check out awesome services', 'frontend/images/services/property.jpg', 'flaticon-house', 'Property Sales', 'We sell fast, and you can resell through us', 1, '2021-04-04 06:37:48', '2021-04-04 06:37:48'),
	(3, 2, 3, 'SERVICES', 'Check out awesome services', 'frontend/images/services/facility.jpg', 'flaticon-factory', 'Facility Management', 'With skill and experience, you will never regret leaving your properties for us.', 9, '2021-04-04 06:37:48', '2021-04-04 06:37:48'),
	(4, 2, 4, 'SERVICES', 'Check out awesome services', 'frontend/images/services/construction.jpg', 'flaticon-brickwall', 'Construction, Supplies & General Contracts', 'We are professional, all technical teams are available for you at your convinience. We supply you with first grade item.', 1, '2021-04-04 06:37:48', '2021-04-04 06:37:48');
/*!40000 ALTER TABLE `daomni_setting_services` ENABLE KEYS */;

-- Dumping structure for table thronehomesltd.daomni_setting_siteinfos
DROP TABLE IF EXISTS `daomni_setting_siteinfos`;
CREATE TABLE IF NOT EXISTS `daomni_setting_siteinfos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) NOT NULL,
  `content_id` int(11) DEFAULT NULL,
  `app_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `app_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `app_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `welcomenote` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `booking_btn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coy_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coy_apple_icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coy_icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coy_address` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coy_city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coy_state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coy_phone_nos` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coy_facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coy_twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coy_youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `breadcrumb_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'frontend/images/throne_breadcrumb.jpg',
  `coy_contact_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coy_contact_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coy_contact_note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coy_contact_right` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coy_contact_rightsub` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coy_contact_botton_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coy_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pandemic_intro` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'With current updates from WHO, NCDC and industry best practices to contain the scourge, we have the below measures which we encourage all our customers to regularly follow while you visit our office or while going with you to sites.',
  `pandemic_measure_caption` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Below are some measures put in place by the WHO and NCDC to ensure your safety:',
  `terms_conditions_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Terms and Conditions',
  `paymentgatewayroute` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'https://daomnipay.reizcontinentalhotels.com',
  `synchronizationroute` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'http://hms.daomnitraders.com',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `daomni_setting_siteinfos_admin_id_unique` (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table thronehomesltd.daomni_setting_siteinfos: ~0 rows (approximately)
/*!40000 ALTER TABLE `daomni_setting_siteinfos` DISABLE KEYS */;
REPLACE INTO `daomni_setting_siteinfos` (`id`, `admin_id`, `content_id`, `app_name`, `app_email`, `app_phone`, `welcomenote`, `booking_btn`, `coy_logo`, `coy_apple_icon`, `coy_icon`, `meta_keywords`, `meta_description`, `contact_label`, `coy_address`, `coy_city`, `coy_state`, `coy_phone_nos`, `coy_facebook`, `coy_twitter`, `coy_youtube`, `breadcrumb_img`, `coy_contact_title`, `coy_contact_subtitle`, `coy_contact_note`, `coy_contact_right`, `coy_contact_rightsub`, `coy_contact_botton_name`, `coy_url`, `pandemic_intro`, `pandemic_measure_caption`, `terms_conditions_title`, `paymentgatewayroute`, `synchronizationroute`, `created_at`, `updated_at`) VALUES
	(1, 2, 1, 'Throne_Homes_Ltd', 'info@thronehomesltd.com', '07062010348', 'Welcome to Throne Homes Ltd', 'SUBSCRIBE NOW', 'frontend/images/thronehomes.png', 'frontend/images/thronehomes.png', 'frontend/images/thronehomes.png', 'land lands abuja lagos portharcourt ph nigeria house houses africa hospitality hotels car hire rooms halls swimming pool pools booking bookings Jumia, hotels.com vacation travel flight', 'We are located at the heart of FCT in a serene environment, with many lands and houses', 'Contact Info', 'ABUJA OFFICE>>>Plot 232, No. 2, Leventis Building, Samuel Adesujo Ademulegun Street, Off Muhammadu Buhari Way, Central Business District, Nigeria.>>>07062010348, 07062010349, 08033404715:::LAGOS OFFICE>>>No. 13, Olutosin Ajayi Street, Ajao Estate, Isolo, Lagos, Nigeria.>>>07013500815:::CALIFONIA OFFICE>>>3300 W RoseCrans Ave, Suite 204, Hawthorne CA, 90250, USA.>>>+13109568795', 'Abuja', 'FCT', '07062010348, 07062010349, 08033404715, +13109568795', 'https://web.facebook.com/thronehomes/', 'https://twitter.com/thronehomes', '#', 'frontend/images/throne_breadcrumb.jpg', 'CONTACT US', 'LET’S TALK', 'We are glad to have you, send us a message, we will get back to you as soon as possible.', 'GET IN TOUCH', 'HOW TO FIND US', 'SEND YOUR MESSAGE', 'www.thronehomesltd.com', 'With current updates from WHO, NCDC and industry best practices to contain the scourge, we have below measures which we encourage all our customers to regularly follow while you visit our office or while going with you to sites.', 'Below are some measures put in place by the WHO and NCDC to ensure your safety:', 'Terms and Conditions', 'https://daomnipay.thronehomesltd.com', 'http://hms.daomnitraders.com', '2021-04-04 06:37:27', '2021-04-04 06:37:27');
/*!40000 ALTER TABLE `daomni_setting_siteinfos` ENABLE KEYS */;

-- Dumping structure for table thronehomesltd.daomni_setting_sliders
DROP TABLE IF EXISTS `daomni_setting_sliders`;
CREATE TABLE IF NOT EXISTS `daomni_setting_sliders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) NOT NULL,
  `content_id` int(11) DEFAULT NULL,
  `slider_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_caption` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_caption_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_caption_link_label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_last_link_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_last_label_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_last_link_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_last_label_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table thronehomesltd.daomni_setting_sliders: ~3 rows (approximately)
/*!40000 ALTER TABLE `daomni_setting_sliders` DISABLE KEYS */;
REPLACE INTO `daomni_setting_sliders` (`id`, `admin_id`, `content_id`, `slider_img`, `slider_caption`, `slider_caption_link`, `slider_caption_link_label`, `slider_last_link_1`, `slider_last_label_1`, `slider_last_link_2`, `slider_last_label_2`, `created_at`, `updated_at`) VALUES
	(1, 2, 1, 'frontend/images/slider/thronehomes_4.jpg', 'DON\'T WAIT TO BUY, BUY AND WAIT!', '/buynow', 'SUBSCRIBE NOW', '/contact', 'CONTACT US NOW', '#', 'THRONE INVESTMENT HOMES', '2021-04-04 06:37:27', '2021-04-04 06:37:27'),
	(2, 2, 2, 'frontend/images/slider/thronehomes_7.jpg', '...WITH VARIETIES OF PROPERTIES...', '#', 'You\'ll Never Forget Your Experience', '/buynow', 'SUBSCRIBE NOW', '/contact', 'CONTACT US NOW', '2021-04-04 06:37:27', '2021-04-04 06:37:27'),
	(3, 2, 3, 'frontend/images/slider/thronehomes_2.jpg', 'ENJOY YOUR PROPERTY', '#', 'Land/House at a cheap rate', '/buynow', 'SUBSCRIBE NOW', '/contact', 'CONTACT US NOW', '2021-04-04 06:37:27', '2021-04-04 06:37:27');
/*!40000 ALTER TABLE `daomni_setting_sliders` ENABLE KEYS */;

-- Dumping structure for table thronehomesltd.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3016 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table thronehomesltd.migrations: ~25 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1261, '2021_01_19_222656_create_daomni_contacts_table', 2),
	(1262, '2021_01_24_042152_create_daomni_pandemics_table', 2),
	(1539, '2021_03_25_142936_create__daomni_downpayment_table', 4),
	(2994, '2014_10_12_000000_create_users_table', 5),
	(2995, '2014_10_12_100000_create_password_resets_table', 5),
	(2996, '2021_03_12_115301_create_daomni_roles_table', 5),
	(2997, '2021_03_12_120240_create_daomni_setting_siteinfos_table', 5),
	(2998, '2021_03_12_120742_create_daomni_setting_navs_table', 5),
	(2999, '2021_03_12_121652_create_daomni_correspondences_table', 5),
	(3000, '2021_03_12_123536_create_daomni_discount_modal_table', 5),
	(3001, '2021_03_12_124415_create_daomni_setting_sliders_table', 5),
	(3002, '2021_03_12_125622_create_daomni_admin_terms_conditions_table', 5),
	(3003, '2021_03_12_131611_create_daomni_setting_index_about_table', 5),
	(3004, '2021_03_12_132851_create_daomni_setting_index_lands_table', 5),
	(3005, '2021_03_12_134803_create_daomni_landtypes_table', 5),
	(3006, '2021_03_13_170516_create_daomni_land_services_table', 5),
	(3007, '2021_03_13_172440_create_daomni_setting_services_table', 5),
	(3008, '2021_03_16_025802_create_daomni_contacts_table', 5),
	(3009, '2021_03_16_061930_create_daomni_pandemics_table', 5),
	(3010, '2021_03_16_144840_create_daomniorders_table', 5),
	(3011, '2021_03_18_085756_create_daomni_influentialcoupons_table', 5),
	(3012, '2021_03_18_090050_create_daomni_coupontrackers_table', 5),
	(3013, '2021_03_18_211538_create_daomni_downpayments_table', 5),
	(3014, '2021_03_27_121643_create_daomni_landdetail_images_table', 5),
	(3015, '2021_03_27_172804_create_daomni_additional_facilities_rates_table', 5);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table thronehomesltd.password_resets
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table thronehomesltd.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table thronehomesltd.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(11) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL DEFAULT '2',
  `admin_id` int(11) DEFAULT NULL,
  `content_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `middlename` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `channel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
