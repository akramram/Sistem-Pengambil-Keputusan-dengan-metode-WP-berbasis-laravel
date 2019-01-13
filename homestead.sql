-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 13, 2019 at 11:53 AM
-- Server version: 5.7.23
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homestead`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

DROP TABLE IF EXISTS `alternatif`;
CREATE TABLE IF NOT EXISTS `alternatif` (
  `id_alternatif` int(11) NOT NULL AUTO_INCREMENT,
  `alternatif` varchar(255) NOT NULL,
  `k1` float NOT NULL,
  `k2` float NOT NULL,
  `k3` float NOT NULL,
  `k4` float NOT NULL,
  `k5` float NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_alternatif`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `alternatif`, `k1`, `k2`, `k3`, `k4`, `k5`, `updated_at`, `created_at`) VALUES
(1, 'Aryo', 1, 2, 2, 3, 1, '2019-01-11 01:56:40', '0000-00-00 00:00:00'),
(2, 'Yohanes', 5, 2, 1, 3, 5, '2019-01-11 01:56:54', '0000-00-00 00:00:00'),
(3, 'Tyas', 1, 1, 1, 1, 1, '2019-01-11 01:57:03', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

DROP TABLE IF EXISTS `hasil`;
CREATE TABLE IF NOT EXISTS `hasil` (
  `id_alternatif` int(255) NOT NULL,
  `alternatif` varchar(255) NOT NULL,
  `hasil` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil`
--

INSERT INTO `hasil` (`id_alternatif`, `alternatif`, `hasil`) VALUES
(1, 'Aryo', 0.224746),
(2, 'Yohanes', 0.613892),
(3, 'Tyas', 0.161362);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

DROP TABLE IF EXISTS `kriteria`;
CREATE TABLE IF NOT EXISTS `kriteria` (
  `id_kriteria` int(11) NOT NULL AUTO_INCREMENT,
  `kriteria` varchar(255) NOT NULL,
  `kepentingan` varchar(255) NOT NULL,
  `cost_benefit` varchar(255) NOT NULL,
  PRIMARY KEY (`id_kriteria`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `kriteria`, `kepentingan`, `cost_benefit`) VALUES
(1, 'Jumlah Tanggungan', '2', 'benefit'),
(2, 'Gaji', '4', 'cost'),
(3, 'Umur', '2', 'benefit'),
(4, 'Tipe', '3', 'cost'),
(5, 'Harga', '4', 'cost');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
