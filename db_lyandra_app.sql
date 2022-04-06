-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Apr 2022 pada 00.19
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lyandra_app`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE `about` (
  `id` int(10) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `vision` text DEFAULT NULL,
  `mission` text DEFAULT NULL,
  `about` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`id`, `email`, `name`, `phone`, `address`, `vision`, `mission`, `about`) VALUES
(1, 'lyandra_eo@mail.com', 'Lyandra Project Event Organizer', '+628133115522', 'St. Sudirman kav 32, Jakarta Selatan , Indonesia', '<p>Testimonials</p>', '<p>Testimonials</p>', '&lt;h2 style=&quot;box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; line-height: 1.2; font-size: 24px; font-family: Nunito, sans-serif; color: #012970;&quot;&gt;Expedita voluptas omnis cupiditate totam eveniet nobis sint iste. Dolores est repellat corrupti reprehenderit.&lt;/h2&gt;\r\n&lt;p style=&quot;box-sizing: border-box; margin: 15px 0px 30px; line-height: 24px; color: #444444; font-family: \'Open Sans\', sans-serif; font-size: 16px;&quot;&gt;Quisquam vel ut sint cum eos hic dolores aperiam. Sed deserunt et. Inventore et et dolor consequatur itaque ut voluptate sed et. Magnam nam ipsum tenetur suscipit voluptatum nam et est corrupti.&lt;/p&gt;');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contingent`
--

CREATE TABLE `contingent` (
  `contingent_id` int(10) NOT NULL,
  `created_by` int(10) DEFAULT NULL,
  `contingent_createdat` datetime DEFAULT NULL,
  `contingent_name` varchar(100) DEFAULT NULL,
  `contingent_phone` varchar(17) DEFAULT NULL,
  `contingent_address` text DEFAULT NULL,
  `contingent_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `contingent`
--

INSERT INTO `contingent` (`contingent_id`, `created_by`, `contingent_createdat`, `contingent_name`, `contingent_phone`, `contingent_address`, `contingent_status`) VALUES
(4, 1, '2022-04-05 01:43:58', 'Tiger Boxer', '081255668845', 'Tangerang Selatan', 1),
(5, 1, '2022-04-05 01:44:56', 'Tangsel Karate Club', '081255669845', 'Tangerang Selatan', 1),
(6, 1, '2022-04-05 01:46:09', 'Bogor Boxer ', '081365698877', 'Bogor', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `requests`
--

CREATE TABLE `requests` (
  `req_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passport_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_indonesia` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `passport_img` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `req_status` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `req_status_info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `extend_at` datetime DEFAULT NULL,
  `expired_at` datetime DEFAULT NULL,
  `visa_img` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `requests_type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_letter` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `requests`
--

INSERT INTO `requests` (`req_id`, `uuid`, `name`, `passport_id`, `email`, `gender`, `phone`, `nationality`, `address_indonesia`, `passport_img`, `req_status`, `req_status_info`, `category`, `created_at`, `updated_at`, `extend_at`, `expired_at`, `visa_img`, `requests_type`, `img_letter`) VALUES
('ERP-040222-849A', '849a03d5-ec75-4f7a-8bf1-b3bcd10331c0', 'Muhammad Fahmi', '123456789', 'test2@mail.com', 'Male', '081317352815', 'Bangladesh', 'Test', 'ERP-040222-849A-Passport.jpg', 'Waiting', '', 'New', '2022-02-04 22:52:45', '2022-02-04 22:52:45', NULL, NULL, 'ERP-040222-849A-Visa.jpg', 'ERP', NULL),
('ITK-040222-849A', '849a03d5-ec75-4f7a-8bf1-b3bcd10331c0', 'Muhammad Fahmi', '12345678', 'test2@mail.com', 'Male', '081317352815', 'Bangladesh', 'Jakarta', 'ITK-040222-849A-Passport.jpg', 'Waiting', '', 'New', '2022-02-04 22:04:19', '2022-02-04 22:04:19', NULL, '2022-03-04 22:04:19', 'ITK-040222-849A-Visa.jpg', 'ITK', NULL),
('KITAS-040222-849A', '849a03d5-ec75-4f7a-8bf1-b3bcd10331c0', 'Muhammad Fahmi', '12345678', 'test2@mail.com', 'Male', '081317352815', 'Bangladesh', 'Test', 'KITAS-040222-849A-Passport.jpg', 'Waiting', '', 'Extend', '2022-02-04 22:03:25', '2022-02-04 22:03:25', '2023-03-05 16:05:32', '2024-03-05 16:05:32', 'KITAS-040222-849A-Visa.jpg', 'KITAS', 'KITAS-040222-849A-Extend.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tournament`
--

CREATE TABLE `tournament` (
  `tournament_id` varchar(30) NOT NULL,
  `tournament_name` varchar(100) NOT NULL,
  `event_date` datetime NOT NULL,
  `regist_date` datetime NOT NULL,
  `closed_date` datetime NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `logo` text NOT NULL,
  `banner` text NOT NULL,
  `status` int(1) NOT NULL,
  `rules` text NOT NULL,
  `description` text NOT NULL,
  `max_participants` int(3) NOT NULL,
  `venue` varchar(100) DEFAULT NULL,
  `venue_map` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tournament`
--

INSERT INTO `tournament` (`tournament_id`, `tournament_name`, `event_date`, `regist_date`, `closed_date`, `created_date`, `logo`, `banner`, `status`, `rules`, `description`, `max_participants`, `venue`, `venue_map`) VALUES
('TRN070420220128573ST', 'Karateka Matchday Tangcit', '2022-04-30 01:27:00', '2022-04-01 01:28:00', '2022-04-21 01:28:00', '2022-04-07 01:28:57', '2e21735d08c400b032779e9248032369.jpg', 'ced044a9c75c4443b90ae409bf5485a1.jpg', 1, 'dab5716c0d054c32932ad5243cdd0b74.pdf', '<p>Matchday</p>', 8, 'GOR Bulungan', 'https://www.google.com/maps/place/GOR+Bulungan/@-6.2419549,106.7942041,17z/data=!3m1!4b1!4m5!3m4!1s0x2e69f16c6112ce35:0x94daaeefc30aaddc!8m2!3d-6.2419602!4d106.7963928'),
('TRN0704202202395694F', 'Jakarta Kickbox Matchday', '2022-04-30 02:38:00', '2022-04-01 02:38:00', '2022-04-20 02:38:00', '2022-04-07 02:39:56', '83cd1ab3c9a95e14bfc3b8baf6181d5f.jpg', '447de66c89e2a8815d06fc1957e55a1b.jpg', 1, 'f12016dac792d2f8a4c85b60b3dc0733.pdf', '<p>Jakarta Open Tournaments</p>', 4, 'GOR Jakarta Timur', 'https://www.google.com/maps/place/GOR+Jakarta+Timur/@-6.2349047,106.8656913,17z/data=!3m1!4b1!4m5!3m4!1s0x2e69f3751fb97561:0x48b90b1824e8055e!8m2!3d-6.23491!4d106.86788');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tournament_match`
--

CREATE TABLE `tournament_match` (
  `match_id` int(10) NOT NULL,
  `match_tournament_id` varchar(30) NOT NULL,
  `match_name` varchar(30) NOT NULL,
  `match_player_1` int(10) DEFAULT NULL,
  `match_player_2` int(10) DEFAULT NULL,
  `match_winner` int(10) DEFAULT NULL,
  `match_null` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tournament_match`
--

INSERT INTO `tournament_match` (`match_id`, `match_tournament_id`, `match_name`, `match_player_1`, `match_player_2`, `match_winner`, `match_null`) VALUES
(11, 'TRN070420220128573ST', 'match_round_1', NULL, NULL, NULL, NULL),
(12, 'TRN070420220128573ST', 'match_round_2', NULL, NULL, NULL, NULL),
(13, 'TRN070420220128573ST', 'match_round_3', NULL, NULL, NULL, NULL),
(14, 'TRN070420220128573ST', 'match_round_4', NULL, NULL, NULL, NULL),
(15, 'TRN070420220128573ST', 'semi_final_1', NULL, NULL, NULL, NULL),
(16, 'TRN070420220128573ST', 'semi_final_2', NULL, NULL, NULL, NULL),
(17, 'TRN070420220128573ST', 'grand_final', 20, 21, NULL, NULL),
(18, 'TRN0704202202395694F', 'match_round_1', 21, 22, NULL, NULL),
(19, 'TRN0704202202395694F', 'match_round_2', 23, 24, NULL, NULL),
(20, 'TRN0704202202395694F', 'grand_final', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tournament_participant`
--

CREATE TABLE `tournament_participant` (
  `participant_id` int(10) NOT NULL,
  `participant_tournament` varchar(30) NOT NULL,
  `participant_user` int(10) NOT NULL,
  `submit_at` datetime NOT NULL,
  `participant_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tournament_participant`
--

INSERT INTO `tournament_participant` (`participant_id`, `participant_tournament`, `participant_user`, `submit_at`, `participant_status`) VALUES
(6, 'TRN0704202202395694F', 20, '2022-04-07 02:46:44', 0),
(7, 'TRN0704202202395694F', 21, '2022-04-07 02:47:05', 1),
(8, 'TRN0704202202395694F', 22, '2022-04-07 02:47:21', 1),
(9, 'TRN0704202202395694F', 23, '2022-04-07 02:47:37', 1),
(10, 'TRN0704202202395694F', 24, '2022-04-07 02:48:00', 1),
(11, 'TRN070420220128573ST', 24, '2022-04-07 02:48:12', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `name`, `username`, `password`, `level`, `user_status`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'superadmin', '$2y$10$Gc1cmaDA/9PT.6cRdXON2uivHMWF.CyD8E21ZD87Ne6tlOEIcJo3m', 'superadmin', '1', '2021-12-22 08:37:27', '2021-12-22 08:37:27'),
(20, 'Muhammad Fahmi', 'lookatmars1', '$2y$10$GHgRFNhyTDRN0Zyt9Xkuu.R3mHPhSgGwA29l1dJvnOh7ECLiuTJ1G', 'user', '2', '2022-04-04 18:51:57', '2022-04-04 19:02:11'),
(21, 'Lia Hermawati', 'lookatmars2', '$2y$10$e9543sF8Phv2wh0Vf9oPeO0hPo1ax9i5Kyg5R2.nEBQmvovAN1jsS', 'user', '2', '2022-04-04 19:57:08', '2022-04-04 21:44:21'),
(22, 'Faris Salahuddin', 'lookatmars3', '$2y$10$AKeegLrXrOGD.LRmjHugl..E3FkzqnYryJX2lEP0YHAqYMaNkwY.2', 'user', '2', '2022-04-06 19:40:40', '2022-04-06 19:43:16'),
(23, 'Ibnu Zakaria', 'lookatmars4', '$2y$10$ptbQeKIpVE3GoWJSwN.K0.4JT3VL16wmqNhaqlLQUnl98fgS5GAc2', 'user', '2', '2022-04-06 19:40:59', '2022-04-06 19:44:35'),
(24, 'Yayan Majalengka', 'lookatmars5', '$2y$10$6TkNbfah.LeY/MvucctQ3uOrqV903ES27jxib8gjcVy0SNhvrKZ0G', 'user', '2', '2022-04-06 19:41:21', '2022-04-06 19:45:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_account`
--

CREATE TABLE `users_account` (
  `user_id` int(10) NOT NULL,
  `contingent_id` int(10) DEFAULT NULL,
  `gender` varchar(7) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `belt` int(1) DEFAULT NULL,
  `weight` int(5) DEFAULT NULL,
  `height` int(5) DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users_account`
--

INSERT INTO `users_account` (`user_id`, `contingent_id`, `gender`, `phone`, `class`, `belt`, `weight`, `height`, `address`, `photo`) VALUES
(20, 6, 'Male', '081317352815', 'UFC', 1, 88, 175, 'Perum Bukit Dago A-9 32', 'a4b20194ca92eed0778cf38702ab79f2.jpg'),
(21, 4, 'Female', '081155669987', 'HeavyWeight', 1, 65, 180, 'Desa Mundak Jaya RT/RW 003/004 , Kecamatan Mundakjaya, Indramayu', '2085b42db22ccc8e7e703467a61229b5.jpg'),
(22, 5, 'Male', '081388998845', 'Heavy', 1, 56, 180, 'Bogor', '0aacd4ddda414e0503433ba9f7fd5533.jpg'),
(23, 5, 'Male', '081388998866', 'Heavy', 1, 56, 175, 'Jakarta Selatan', '033f9bb56c79a1bb7dd06df925fc7f47.jpg'),
(24, 5, 'Male', '081388998841', 'Heavy', 1, 55, 170, 'Serpong', '911b4959efbc6f48642c476460160dca.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `contingent`
--
ALTER TABLE `contingent`
  ADD PRIMARY KEY (`contingent_id`);

--
-- Indeks untuk tabel `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`req_id`);

--
-- Indeks untuk tabel `tournament`
--
ALTER TABLE `tournament`
  ADD PRIMARY KEY (`tournament_id`);

--
-- Indeks untuk tabel `tournament_match`
--
ALTER TABLE `tournament_match`
  ADD PRIMARY KEY (`match_id`);

--
-- Indeks untuk tabel `tournament_participant`
--
ALTER TABLE `tournament_participant`
  ADD PRIMARY KEY (`participant_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `users_email_unique` (`username`);

--
-- Indeks untuk tabel `users_account`
--
ALTER TABLE `users_account`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `about`
--
ALTER TABLE `about`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `contingent`
--
ALTER TABLE `contingent`
  MODIFY `contingent_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tournament_match`
--
ALTER TABLE `tournament_match`
  MODIFY `match_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tournament_participant`
--
ALTER TABLE `tournament_participant`
  MODIFY `participant_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
