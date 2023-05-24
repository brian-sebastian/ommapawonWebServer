-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2023 at 08:44 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ommapawon`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_order`
--

CREATE TABLE `detail_order` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_order` int(10) UNSIGNED NOT NULL,
  `id_menu` int(10) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `harga` decimal(10,2) NOT NULL,
  `catatan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_order`
--

INSERT INTO `detail_order` (`id`, `id_order`, `id_menu`, `qty`, `harga`, `catatan`, `created_at`, `updated_at`) VALUES
(96, 127, 2, 1, 13000.00, NULL, '2022-11-16 16:31:31', '2022-11-16 16:31:31'),
(183, 207, 4, 1, 13000.00, NULL, '2023-02-14 09:22:34', '2023-02-14 09:22:34'),
(184, 208, 5, 3, 16000.00, NULL, '2023-02-14 10:01:10', '2023-02-14 10:01:10'),
(185, 209, 5, 1, 16000.00, NULL, '2023-02-14 10:20:32', '2023-02-14 10:20:32'),
(186, 210, 5, 1, 16000.00, NULL, '2023-02-14 10:26:12', '2023-02-14 10:26:12'),
(187, 211, 4, 2, 13000.00, NULL, '2023-02-14 23:22:27', '2023-02-14 23:22:27'),
(188, 212, 10, 2, 19000.00, NULL, '2023-02-14 23:25:58', '2023-02-14 23:25:58'),
(189, 213, 4, 1, 13000.00, NULL, '2023-02-14 23:29:24', '2023-02-14 23:29:24'),
(190, 214, 4, 1, 13000.00, NULL, '2023-02-14 23:33:28', '2023-02-14 23:33:28'),
(191, 215, 4, 1, 13000.00, NULL, '2023-02-14 23:36:58', '2023-02-14 23:36:58'),
(192, 216, 6, 1, 16000.00, NULL, '2023-02-14 23:38:53', '2023-02-14 23:38:53'),
(193, 217, 7, 1, 13000.00, NULL, '2023-02-14 23:42:57', '2023-02-14 23:42:57'),
(195, 219, 4, 1, 13000.00, NULL, '2023-02-15 01:24:25', '2023-02-15 01:24:25'),
(202, 226, 4, 1, 13000.00, NULL, '2023-05-03 03:00:50', '2023-05-03 03:00:50'),
(203, 226, 5, 2, 16000.00, NULL, '2023-05-03 03:00:50', '2023-05-03 03:00:50');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(10) UNSIGNED NOT NULL,
  `kategori_nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kategori_nama`, `kategori_deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Nasi', 'Aneka Nasi Goreng', '2022-09-01 13:16:27', '2022-09-01 13:16:27'),
(2, 'Mie', 'Aneka Mie Goreng', '2022-12-24 04:13:59', '2022-12-24 04:13:59'),
(3, 'Sayur', 'Aneka Sayuran', '2022-12-24 04:14:15', '2022-12-24 04:14:15'),
(4, 'Lauk', 'Aneka Lauk', '2022-12-24 04:15:20', '2022-12-24 04:15:20');

-- --------------------------------------------------------

--
-- Table structure for table `konsumen`
--

CREATE TABLE `konsumen` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_konsumen` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_telpon` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `konsumen`
--

INSERT INTO `konsumen` (`id`, `nama_konsumen`, `email`, `nomor_telpon`, `token`, `created_at`, `updated_at`) VALUES
(18, 'maulanabrian', 'maulanabrian56@gmail.com', '6289515314512', 'ccF-0BnAT1C5WZ0ClxEORC:APA91bEj3rtyNOnUZw8n1jhCaWJuAToIJtkJnvBTZAvuHOfdZVR7ep6D7Sob0tTDSsROnl1e1iIJ0BMTa05dcHI6P3OaxHSTV4VzQgpRs0nCzKGNFBM8Dijyu1_Hr6yV_Jah7CHNiqLO', '2022-10-12 19:09:40', '2023-02-14 09:20:43'),
(25, 'Bp Sumarno', 'bpaksumarno@gmail.com', '6287865467868', 'ccF-0BnAT1C5WZ0ClxEORC:APA91bEj3rtyNOnUZw8n1jhCaWJuAToIJtkJnvBTZAvuHOfdZVR7ep6D7Sob0tTDSsROnl1e1iIJ0BMTa05dcHI6P3OaxHSTV4VzQgpRs0nCzKGNFBM8Dijyu1_Hr6yV_Jah7CHNiqLO', '2023-02-14 03:09:28', '2023-02-14 09:47:10'),
(26, 'Bu Yulian', 'buyulian@gmail.com', '6286543567896', 'ccF-0BnAT1C5WZ0ClxEORC:APA91bEj3rtyNOnUZw8n1jhCaWJuAToIJtkJnvBTZAvuHOfdZVR7ep6D7Sob0tTDSsROnl1e1iIJ0BMTa05dcHI6P3OaxHSTV4VzQgpRs0nCzKGNFBM8Dijyu1_Hr6yV_Jah7CHNiqLO', '2023-02-14 10:18:57', '2023-02-14 10:18:57'),
(27, 'Bu nuril', 'bunuril@gmail.com', '6286754356897', 'ccF-0BnAT1C5WZ0ClxEORC:APA91bEj3rtyNOnUZw8n1jhCaWJuAToIJtkJnvBTZAvuHOfdZVR7ep6D7Sob0tTDSsROnl1e1iIJ0BMTa05dcHI6P3OaxHSTV4VzQgpRs0nCzKGNFBM8Dijyu1_Hr6yV_Jah7CHNiqLO', '2023-02-14 10:24:44', '2023-02-14 10:24:44'),
(28, 'priyanka', 'priyanka@gmail.com', '6285731568525', 'fOO81mhHRlWT3dUvwK7Yqc:APA91bHYC2Pjkb96UwJWhaHFxWeJxV_WgPSwYj0QbgxucF4eJ1dgpQxq4vc049gExVVu3ZwMnjDnyO4jnUxCi2ERKJjKlr1pE7VGvAEiSd3hDxxy7FnAov78jtHZie0khEI3GKkZNJG5', '2023-02-14 23:21:38', '2023-02-14 23:21:38'),
(29, 'widiya', 'widiya@gmail.com', '6285873586525', 'fOO81mhHRlWT3dUvwK7Yqc:APA91bHYC2Pjkb96UwJWhaHFxWeJxV_WgPSwYj0QbgxucF4eJ1dgpQxq4vc049gExVVu3ZwMnjDnyO4jnUxCi2ERKJjKlr1pE7VGvAEiSd3hDxxy7FnAov78jtHZie0khEI3GKkZNJG5', '2023-02-14 23:25:17', '2023-02-14 23:25:17'),
(30, 'fani', 'fani@gmail.com', '6285835425685', 'fOO81mhHRlWT3dUvwK7Yqc:APA91bHYC2Pjkb96UwJWhaHFxWeJxV_WgPSwYj0QbgxucF4eJ1dgpQxq4vc049gExVVu3ZwMnjDnyO4jnUxCi2ERKJjKlr1pE7VGvAEiSd3hDxxy7FnAov78jtHZie0khEI3GKkZNJG5', '2023-02-14 23:28:34', '2023-02-14 23:28:34'),
(31, 'lily', 'lily@gmail.com', '6289532543565', 'fOO81mhHRlWT3dUvwK7Yqc:APA91bHYC2Pjkb96UwJWhaHFxWeJxV_WgPSwYj0QbgxucF4eJ1dgpQxq4vc049gExVVu3ZwMnjDnyO4jnUxCi2ERKJjKlr1pE7VGvAEiSd3hDxxy7FnAov78jtHZie0khEI3GKkZNJG5', '2023-02-14 23:32:46', '2023-02-14 23:32:46'),
(32, 'icha', 'icha@gmail.com', '6285358425658', 'fOO81mhHRlWT3dUvwK7Yqc:APA91bHYC2Pjkb96UwJWhaHFxWeJxV_WgPSwYj0QbgxucF4eJ1dgpQxq4vc049gExVVu3ZwMnjDnyO4jnUxCi2ERKJjKlr1pE7VGvAEiSd3hDxxy7FnAov78jtHZie0khEI3GKkZNJG5', '2023-02-14 23:35:35', '2023-02-14 23:35:35'),
(33, 'daus', 'daus@gmail.com', '6285355258468', 'fOO81mhHRlWT3dUvwK7Yqc:APA91bHYC2Pjkb96UwJWhaHFxWeJxV_WgPSwYj0QbgxucF4eJ1dgpQxq4vc049gExVVu3ZwMnjDnyO4jnUxCi2ERKJjKlr1pE7VGvAEiSd3hDxxy7FnAov78jtHZie0khEI3GKkZNJG5', '2023-02-14 23:37:57', '2023-02-14 23:37:57'),
(34, 'rafly', 'rafly@gmail.com', '6285868735435', 'fOO81mhHRlWT3dUvwK7Yqc:APA91bHYC2Pjkb96UwJWhaHFxWeJxV_WgPSwYj0QbgxucF4eJ1dgpQxq4vc049gExVVu3ZwMnjDnyO4jnUxCi2ERKJjKlr1pE7VGvAEiSd3hDxxy7FnAov78jtHZie0khEI3GKkZNJG5', '2023-02-14 23:41:52', '2023-02-14 23:41:52');

-- --------------------------------------------------------

--
-- Table structure for table `kurir`
--

CREATE TABLE `kurir` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_restoran` int(10) UNSIGNED NOT NULL,
  `nama_kurir` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_telp_kurir` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_kurir` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kurir`
--

INSERT INTO `kurir` (`id`, `id_restoran`, `nama_kurir`, `nomor_telp_kurir`, `email_kurir`, `token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Moise Kean', '6285731437774', 'kean@gmail.com\r\n', 'co3TYYTIRdeIkOetSq5Fq8:APA91bENn5JAEz1I5dTTBYS0swsBm1DLC2ecpOjJPYDzBSX3JUrXHbCAPvArD9UqFSRRMq7uMxjqig7Af415h2pWbQTrGcFxslJuAfJTyCEDLPoPCtbnGYZkwZIm0JgjQTIVcYDgNVne', '2022-09-19 20:22:11', '2023-02-02 13:42:04'),
(8, 1, 'brian', '787286872687', 'mnksmnalknsm,', NULL, '2022-09-28 21:35:36', '2022-09-28 21:35:36'),
(10, 1, 'qmbun', '0896546788889', 'qmbun@gmail.com', NULL, '2022-10-06 21:08:03', '2022-10-06 22:14:06'),
(12, 1, 'mbah', '85451678991881', 'mbah@gmail.com', NULL, '2022-10-06 21:18:10', '2022-10-06 22:13:34');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_restoran` int(10) UNSIGNED NOT NULL,
  `id_kategori` int(10) UNSIGNED NOT NULL,
  `nama_makanan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(10) NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_ketersediaan` tinyint(1) NOT NULL DEFAULT 0,
  `menu_delete` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `id_restoran`, `id_kategori`, `nama_makanan`, `image`, `harga`, `deskripsi`, `menu_ketersediaan`, `menu_delete`, `created_at`, `updated_at`) VALUES
(2, 1, 1, 'Nasi Goreng Hijau', 'foto-makanan/Ld91DwVbAjGUxEQ3OMOBsq3eQHoqPHupg2q5a7mj.jpg', 13000, 'Bawang Goreng + Ayam + Cabe + Timun', 1, 0, '2022-09-01 06:36:52', '2022-09-01 06:36:52'),
(4, 1, 1, 'Nasi Goreng Ayam', 'foto-makanan/F5JYMnIslXZ2jBaji725LYc9Blmq7v3tOCzBfniI.jpg', 13000, 'Ayam + Bawang Goreng + Kacang polong + Cabe + Timun', 1, 0, '2022-09-14 08:49:45', '2022-09-14 08:49:45'),
(5, 1, 1, 'Nasi Goreng Mawut', 'foto-makanan/maZWZS1uUofBN6cdADBnMpl4DVcezP4lowRtRoRK.jpg', 16000, 'Sosis + Ayam + Touge + Sawi + Bawang Goreng + Timun + Cabe', 1, 0, '2022-09-14 08:51:09', '2022-09-14 08:51:09'),
(6, 1, 1, 'Nasi Goreng Sosis', 'foto-makanan/KdTvIRRKCMVPnNd0c02NXbucbZ6DmOx0dO7YNG9M.jpg', 16000, 'Sosis + Ayam + Timun + Bawang Goreng', 1, 0, '2022-09-14 08:52:08', '2022-09-14 08:52:08'),
(7, 1, 1, 'Nasi Goreng Telur', 'foto-makanan/2774yew1QJJUeXGBaPpg1hxMgu35rmrz3oIA0EJq.jpg', 13000, 'Telut + Bawang Goreng + Cabe + Timun', 1, 0, '2022-12-05 09:00:14', '2022-12-05 09:00:14'),
(8, 1, 3, 'Capjay', 'foto-makanan/EWUafW5x9I99LHykqTnQ8lDhCzJPD0DeAfkprEq1.jpg', 21000, 'Sawi Hijau + Sawi Putih + Wortel + Bakso + Sosis + Jamur + Ayam + Kembang Kol + Janten', 1, 0, '2023-02-12 10:33:59', '2023-02-12 10:33:59'),
(9, 1, 4, 'Fuyunghai', 'foto-makanan/7DxVqSAaEylgMmMnGTuhyiVqT6Wp8ECFOYDV3zVU.jpg', 21000, 'Telur Goreng + Kacang Polong + Saus Asam Manis', 1, 0, '2023-02-12 10:34:46', '2023-02-12 10:34:46'),
(10, 1, 2, 'Mie Goreng Spesial', 'foto-makanan/AuD3jO7QWbUI0OTtCRuBcJPzMuxkT8HeycCuoaJc.jpg', 19000, 'Sosis + Ayam + Udang + Telur Mata Sapi + Cape + Timun + Kacang Polong', 1, 0, '2023-02-13 03:24:38', '2023-02-13 03:24:38'),
(11, 1, 2, 'Mie Goreng Ayam', 'foto-makanan/pllSZum4Uao0TM8oPWmWuTTBurxLpwmXEDmH88qa.jpg', 13000, 'Ayam + Cabe + Timun', 1, 0, '2023-02-13 03:25:35', '2023-02-13 03:25:35'),
(12, 1, 2, 'Mie Goreng Sosis', 'foto-makanan/hDhtiU23YUVVJKFifu2VKYEJgmFeiWYAbt8w9R4D.jpg', 16000, 'Sosis + Ayam + Cabe + Timun', 1, 0, '2023-02-13 03:26:17', '2023-02-13 03:26:17'),
(13, 1, 2, 'Mie Goreng Udang', 'foto-makanan/WgW3FQpNfbgQlHz5i3CcGvvQ7XbiYx6pcS6yFnh6.jpg', 16000, 'Udang + Ayam + Cabe + Timun', 1, 0, '2023-02-13 03:26:53', '2023-02-13 03:26:53');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_konsumen` int(10) UNSIGNED NOT NULL,
  `id_restoran` int(10) UNSIGNED NOT NULL,
  `order_lat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_long` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_catatan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_metode_bayar` enum('epay','cod','transfer') COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_jarak_antar` double NOT NULL,
  `order_biaya_anatar` decimal(10,2) NOT NULL,
  `order_status` enum('proses','batal','selesai','pengantaran','antrian','menunggu') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'proses',
  `order_delivery_id` int(11) DEFAULT NULL,
  `order_delivery_type` enum('kurir','restoran') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `id_konsumen`, `id_restoran`, `order_lat`, `order_long`, `order_alamat`, `order_catatan`, `order_metode_bayar`, `order_jarak_antar`, `order_biaya_anatar`, `order_status`, `order_delivery_id`, `order_delivery_type`, `created_at`, `updated_at`) VALUES
(127, 18, 1, '-7.3937275317024', '112.73154739290476', 'JP4J+9J2, Demeling, Gedangan, Kec. Gedangan, Kabupaten Sidoarjo, Jawa Timur 61254, Indonesia', NULL, 'cod', 1.36, 3000.00, 'selesai', 1, 'kurir', '2022-11-16 16:31:31', '2022-11-16 16:32:49'),
(207, 18, 1, '-7.400737993771179', '112.7251298725605', 'HPXG+P32, Jl. Mangga I, Dusun Sruni, Sruni, Kec. Gedangan, Kabupaten Sidoarjo, Jawa Timur 61254, Indonesia', NULL, 'cod', 0.42, 3000.00, 'selesai', 1, 'kurir', '2023-02-14 09:22:34', '2023-02-14 09:28:02'),
(208, 25, 1, '-7.39374282616816', '112.7264253795147', 'Gg. Raden Patah No.40, RT.2/RW.4, Megersari, Gedangan, Kec. Gedangan, Kabupaten Sidoarjo, Jawa Timur 61254, Indonesia', NULL, 'cod', 0.95, 3000.00, 'selesai', 1, 'kurir', '2023-02-14 10:01:10', '2023-02-14 10:03:55'),
(209, 26, 1, '-7.361703085083442', '112.72224985063076', 'Gg. VA No.11, Krajan Kulon, Waru, Kec. Waru, Kabupaten Sidoarjo, Jawa Timur 61256, Indonesia', NULL, 'cod', 4.33, 3000.00, 'selesai', 1, 'kurir', '2023-02-14 10:20:32', '2023-02-14 10:21:53'),
(210, 27, 1, '-7.429416055938683', '112.72179320454597', 'Jl. Raya Buduran No.34, Sawahan, Buduran, Kec. Buduran, Kabupaten Sidoarjo, Jawa Timur 61252, Indonesia', NULL, 'cod', 3.2, 3000.00, 'selesai', 1, 'kurir', '2023-02-14 10:26:12', '2023-02-14 10:28:20'),
(211, 28, 1, '-7.3992587739338', '112.72853460162877', 'JP2H+8C8, Jl. Manggis, Dusun Sruni, Sruni, Kec. Gedangan, Kabupaten Sidoarjo, Jawa Timur 61254, Indonesia', NULL, 'cod', 0.81, 3000.00, 'selesai', 1, 'kurir', '2023-02-14 23:22:27', '2023-02-14 23:23:54'),
(212, 29, 1, '-7.39425286304895', '112.72557578980923', 'JP4G+66C, Calukan, Keboansikep, Kec. Gedangan, Kabupaten Sidoarjo, Jawa Timur 61254, Indonesia', NULL, 'cod', 0.85, 3000.00, 'selesai', 1, 'kurir', '2023-02-14 23:25:58', '2023-02-14 23:26:43'),
(213, 30, 1, '-7.407788574240513', '112.73570884019136', 'Jl. RA. Mustika No.31, Tebel Timur, Tebel, Kec. Gedangan, Kabupaten Sidoarjo, Jawa Timur 61254, Indonesia', NULL, 'cod', 1.78, 3000.00, 'selesai', 1, 'kurir', '2023-02-14 23:29:24', '2023-02-14 23:31:24'),
(214, 31, 1, '-7.405181608152665', '112.72542927414179', 'Jl. Balai Desa Tebel No.30, Tebel Tengah, Tebel, Kec. Gedangan, Kabupaten Sidoarjo, Jawa Timur 61254, Indonesia', NULL, 'cod', 0.68, 3000.00, 'selesai', 1, 'kurir', '2023-02-14 23:33:28', '2023-02-14 23:34:21'),
(215, 32, 1, '-7.395787624971673', '112.72494480013847', 'JP4G+43M, Calukan, Keboansikep, Kec. Gedangan, Kabupaten Sidoarjo, Jawa Timur 61254, Indonesia', NULL, 'cod', 0.67, 3000.00, 'selesai', 1, 'kurir', '2023-02-14 23:36:58', '2023-02-14 23:39:45'),
(216, 33, 1, '-7.411786934041405', '112.72536657750607', 'HPQG+54R, Jl. Banjar, Kemantren, Banjarkemantren, Kec. Buduran, Kabupaten Sidoarjo, Jawa Timur 61252, Indonesia', NULL, 'cod', 1.32, 3000.00, 'selesai', 1, 'kurir', '2023-02-14 23:38:53', '2023-02-14 23:40:31'),
(217, 34, 1, '-7.393718887004125', '112.7245055884123', 'JP4F+GR5, Calukan, Keboansikep, Kec. Gedangan, Kabupaten Sidoarjo, Jawa Timur 61254, Indonesia', NULL, 'cod', 0.84, 3000.00, 'selesai', 1, 'kurir', '2023-02-14 23:42:57', '2023-02-14 23:43:29'),
(219, 18, 1, '-7.408762400621242', '112.72761426866055', 'HPRH+H4R, Tebel Tengah, Tebel, Kec. Gedangan, Kabupaten Sidoarjo, Jawa Timur 61254, Indonesia', NULL, 'cod', 1.14, 3000.00, 'selesai', 1, 'kurir', '2023-02-15 01:24:25', '2023-02-15 01:48:18'),
(226, 18, 1, '-7.408762400621242', '112.72761426866055', 'HPRH+H4R, Tebel Tengah, Tebel, Kec. Gedangan, Kabupaten Sidoarjo, Jawa Timur 61254, Indonesia', NULL, 'cod', 1.14, 3000.00, 'menunggu', NULL, NULL, '2023-05-03 03:00:50', '2023-05-03 03:01:44');

-- --------------------------------------------------------

--
-- Table structure for table `profit`
--

CREATE TABLE `profit` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_order` int(10) UNSIGNED NOT NULL,
  `biaya` decimal(10,3) NOT NULL,
  `status` enum('sukses','batal') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'sukses',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profit`
--

INSERT INTO `profit` (`id`, `id_order`, `biaya`, `status`, `created_at`, `updated_at`) VALUES
(77, 127, 50.000, 'sukses', '2022-11-16 16:31:32', '2022-11-16 16:31:32'),
(80, 207, 16.000, 'sukses', '2023-02-14 22:57:19', '2023-02-14 22:57:19'),
(82, 208, 42.000, 'sukses', '2023-02-14 23:01:42', '2023-02-14 23:01:42'),
(84, 209, 16.000, 'sukses', '2023-02-14 23:03:18', '2023-02-14 23:03:18'),
(85, 210, 16.000, 'sukses', '2023-02-14 23:03:54', '2023-02-14 23:03:54'),
(86, 211, 29.000, 'sukses', '2023-02-14 23:24:22', '2023-02-14 23:24:22'),
(87, 212, 41.000, 'sukses', '2023-02-14 23:26:55', '2023-02-14 23:26:55'),
(88, 213, 16.000, 'sukses', '2023-02-14 23:31:34', '2023-02-14 23:31:34'),
(89, 214, 16.000, 'sukses', '2023-02-14 23:34:30', '2023-02-14 23:34:30'),
(90, 215, 16.000, 'sukses', '2023-02-14 23:37:14', '2023-02-14 23:37:14'),
(91, 216, 16.000, 'sukses', '2023-02-14 23:39:56', '2023-02-14 23:39:56'),
(92, 217, 16.000, 'sukses', '2023-02-14 23:43:40', '2023-02-14 23:43:40');

-- --------------------------------------------------------

--
-- Table structure for table `restoran`
--

CREATE TABLE `restoran` (
  `id` int(10) UNSIGNED NOT NULL,
  `restoran_nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `restoran_phone` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `restoran_email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `restoran_alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `restoran_latitude` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `restoran_longitude` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `restoran_deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `restoran_oprasional` tinyint(1) NOT NULL DEFAULT 0,
  `restoran_delivery` enum('gratis','flat') COLLATE utf8mb4_unicode_ci NOT NULL,
  `restoran_delivery_tarif` decimal(10,2) NOT NULL DEFAULT 0.00,
  `jarak_pesanan` int(11) NOT NULL,
  `restoran_delivery_minimum` decimal(10,2) NOT NULL DEFAULT 0.00,
  `restoran_status` enum('aktif','non_aktif','review','blacklist','tolak') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'review',
  `token` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `restoran`
--

INSERT INTO `restoran` (`id`, `restoran_nama`, `restoran_phone`, `restoran_email`, `restoran_alamat`, `restoran_latitude`, `restoran_longitude`, `restoran_deskripsi`, `restoran_oprasional`, `restoran_delivery`, `restoran_delivery_tarif`, `jarak_pesanan`, `restoran_delivery_minimum`, `restoran_status`, `token`, `created_at`, `updated_at`) VALUES
(1, 'Omma Pawon', '6289515314512', 'ommapawon@gmail.com', 'Jl.Mangga III Blok F9, Sruni, Gedangan, Sidoarjo ', '-7.40061', '112.72133', 'Rumah Makan Yang menyediakan menu makanan  nasi goreng, mie goreng, capjay, fuyunghai, dll.', 1, 'flat', 3000.00, 6, 0.00, 'aktif', 'co3TYYTIRdeIkOetSq5Fq8:APA91bENn5JAEz1I5dTTBYS0swsBm1DLC2ecpOjJPYDzBSX3JUrXHbCAPvArD9UqFSRRMq7uMxjqig7Af415h2pWbQTrGcFxslJuAfJTyCEDLPoPCtbnGYZkwZIm0JgjQTIVcYDgNVne', '2022-09-01 03:16:13', '2023-01-02 09:04:49');

-- --------------------------------------------------------

--
-- Table structure for table `uat`
--

CREATE TABLE `uat` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_konsumen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ulasan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `uat`
--

INSERT INTO `uat` (`id`, `id_konsumen`, `ulasan`, `created_at`, `updated_at`) VALUES
(1, 'brian', 'makanan enak', '2022-09-21 18:40:44', '2022-09-21 18:40:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Admin', 'admin', 'admin@gmail.com', NULL, '$2y$10$QBId5673.cPaYsOBqxM/IuKHvSCezMsqzlcvxyZBvBvynTyXxSy52', NULL, '2023-05-02 09:21:26', '2023-05-02 09:21:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_order`
--
ALTER TABLE `detail_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_order_id_order_index` (`id_order`),
  ADD KEY `detail_order_id_menu_index` (`id_menu`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konsumen`
--
ALTER TABLE `konsumen`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `konsumen_konsumen_phone_unique` (`email`);

--
-- Indexes for table `kurir`
--
ALTER TABLE `kurir`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kurir_kurir_phone_unique` (`nomor_telp_kurir`),
  ADD KEY `kurir_id_restoran_foreign` (`id_restoran`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_id_restoran_foreign` (`id_restoran`),
  ADD KEY `menu_id_kategori_foreign` (`id_kategori`),
  ADD KEY `menu_menu_nama_index` (`nama_makanan`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id_konsumen_index` (`id_konsumen`),
  ADD KEY `order_id_restoran_index` (`id_restoran`),
  ADD KEY `order_order_metode_bayar_index` (`order_metode_bayar`),
  ADD KEY `order_order_status_index` (`order_status`);

--
-- Indexes for table `profit`
--
ALTER TABLE `profit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profit_id_order_index` (`id_order`),
  ADD KEY `profit_status_index` (`status`);

--
-- Indexes for table `restoran`
--
ALTER TABLE `restoran`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `restoran_restoran_phone_unique` (`restoran_phone`),
  ADD KEY `restoran_restoran_nama_index` (`restoran_nama`),
  ADD KEY `restoran_restoran_oprasional_index` (`restoran_oprasional`),
  ADD KEY `restoran_restoran_delivery_index` (`restoran_delivery`),
  ADD KEY `restoran_restoran_status_index` (`restoran_status`);

--
-- Indexes for table `uat`
--
ALTER TABLE `uat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_order`
--
ALTER TABLE `detail_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `konsumen`
--
ALTER TABLE `konsumen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `kurir`
--
ALTER TABLE `kurir`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=227;

--
-- AUTO_INCREMENT for table `profit`
--
ALTER TABLE `profit`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `restoran`
--
ALTER TABLE `restoran`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `uat`
--
ALTER TABLE `uat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_order`
--
ALTER TABLE `detail_order`
  ADD CONSTRAINT `detail_order_id_menu_foreign` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_order_id_order_foreign` FOREIGN KEY (`id_order`) REFERENCES `order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kurir`
--
ALTER TABLE `kurir`
  ADD CONSTRAINT `kurir_id_restoran_foreign` FOREIGN KEY (`id_restoran`) REFERENCES `restoran` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_id_kategori_foreign` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `menu_id_restoran_foreign` FOREIGN KEY (`id_restoran`) REFERENCES `restoran` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_id_konsumen_foreign` FOREIGN KEY (`id_konsumen`) REFERENCES `konsumen` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_id_restoran_foreign` FOREIGN KEY (`id_restoran`) REFERENCES `restoran` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `profit`
--
ALTER TABLE `profit`
  ADD CONSTRAINT `profit_id_order_foreign` FOREIGN KEY (`id_order`) REFERENCES `order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
