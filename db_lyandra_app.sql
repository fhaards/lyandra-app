-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Apr 2022 pada 23.35
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
  `about` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`id`, `email`, `name`, `phone`, `address`, `about`) VALUES
(1, 'lyandra_eo@mail.com', 'Lyandra Project Event Organizer', '+628133115522', 'St. Sudirman kav 32, Jakarta Selatan , Indonesia', '<h2 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; line-height: 1.2; font-size: 24px; font-family: Nunito, sans-serif; color: #012970;\">Expeditsa voluptas omnis cupiditate totam eveniet nobis sint iste. Dolores est repellat corrupti reprehenderit.</h2>\r\n<p style=\"box-sizing: border-box; margin: 15px 0px 30px; line-height: 24px; color: #444444; font-family: \'Open Sans\', sans-serif; font-size: 16px;\">Quisquam vel ut sint cum eos hic dolores aperiam. Sed deserunt et. Inventore et et dolor consequatur itaque ut voluptate sed et. Magnam nam ipsum tenetur suscipit voluptatum nam et est corrupti.</p>');

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
-- Struktur dari tabel `tournament`
--

CREATE TABLE `tournament` (
  `tournament_id` varchar(30) NOT NULL,
  `tournament_name` varchar(100) NOT NULL,
  `event_date` datetime NOT NULL,
  `regist_date` datetime NOT NULL,
  `closed_date` datetime NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `status` int(1) NOT NULL,
  `description` text NOT NULL,
  `max_participants` int(3) NOT NULL,
  `venue` varchar(100) DEFAULT NULL,
  `venue_map` text DEFAULT NULL,
  `bracket` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tournament`
--

INSERT INTO `tournament` (`tournament_id`, `tournament_name`, `event_date`, `regist_date`, `closed_date`, `created_date`, `status`, `description`, `max_participants`, `venue`, `venue_map`, `bracket`) VALUES
('TRN09042022014142NXG', 'Tangerang Selatan Karate Tour', '2022-04-29 01:38:00', '2022-04-01 01:38:00', '2022-04-21 10:38:00', '2022-04-09 01:41:42', 1, '<p style=\"box-sizing: inherit; margin: 0px 0px 1rem; padding: 0px; font-family: HelveticaNeue, Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"box-sizing: inherit; font-family: HelveticaNeue-CondensedBold, Arial, Helvetica, sans-serif; font-weight: bolder;\">The city of Konya (Turkey) welcomed representatives of a Karate delegation to evaluate the conditions around the upcoming 2022 World Cadet, Junior &amp; U21 Championships.</span></p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 1rem; padding: 0px; font-family: HelveticaNeue, Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">Headed by WKF Organising Commission chairman Esteban Perez, the official visit was coordinated by Turkish Karate Federation president Aslan Abid Uguz and had members of the local organising team in attendance.</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 1rem; padding: 0px; font-family: HelveticaNeue, Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">The official hotels and venue for the event were reviewed while different logistic matters were analysed to ensure that the best conditions for the event are guaranteed.&nbsp;</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 1rem; padding: 0px; font-family: HelveticaNeue, Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">The 2022 edition of the World Underage Championships is scheduled to be held in Konya from October 26 to 30. The last edition of the biggest age-group event for the sport was held in Santiago (Chile) in 2019 with nearly 1500 youngsters from 86 countries participating in the event.</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 1rem; padding: 0px; font-family: HelveticaNeue, Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">WKF Organising Commission chairman Esteban Perez said:</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 1rem; padding: 0px; font-family: HelveticaNeue, Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">&ldquo;I would like to thank TKF President Aslan Abid Uguz, competition manager Yaser Sahintekin, and the head of the LOC Hikmet Yanartas for their support and hospitality over these past few days. The visit to Konya has been very gratifying and we are ready to organise a memorable event.</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 1rem; padding: 0px; font-family: HelveticaNeue, Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">&ldquo;We expect over 1500 athletes from 120 countries, with a total tally of 2500 accredited people. The Sport ve Kongre Merkezi sports hall offers the right conditions for the tournament and I am sure that the LOC and the TKF will do their utmost to organise a great celebration of our sport in a few months.&rdquo;&nbsp;</p>', 8, 'GOR Gunung Sindur', 'https://www.google.com/maps/place/GOR+Gunung+Sindur/@-6.3870038,106.6727178,17z/data=!3m1!4b1!4m5!3m4!1s0x2e69e7e39281eaf9:0x6b6d04c4a3ca7a80!8m2!3d-6.3871447!4d106.6748928', NULL),
('TRN090420220234445kt', 'Bogor Open Karate Tournament', '2022-04-30 00:00:00', '2022-04-01 00:00:00', '2022-04-26 00:00:00', '2022-04-09 02:34:44', 1, '<p style=\"box-sizing: inherit; margin: 0px 0px 1rem; padding: 0px; font-family: HelveticaNeue, Arial, Helvetica, sans-serif; font-size: 14px;\"><span style=\"box-sizing: inherit; font-family: HelveticaNeue-CondensedBold, Arial, Helvetica, sans-serif; font-weight: bolder;\">The city of Konya (Turkey) welcomed representatives of a Karate delegation to evaluate the conditions around the upcoming 2022 World Cadet, Junior &amp; U21 Championships.</span></p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 1rem; padding: 0px; font-family: HelveticaNeue, Arial, Helvetica, sans-serif; font-size: 14px;\">Headed by WKF Organising Commission chairman Esteban Perez, the official visit was coordinated by Turkish Karate Federation president Aslan Abid Uguz and had members of the local organising team in attendance.</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 1rem; padding: 0px; font-family: HelveticaNeue, Arial, Helvetica, sans-serif; font-size: 14px;\">The official hotels and venue for the event were reviewed while different logistic matters were analysed to ensure that the best conditions for the event are guaranteed.&nbsp;</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 1rem; padding: 0px; font-family: HelveticaNeue, Arial, Helvetica, sans-serif; font-size: 14px;\">The 2022 edition of the World Underage Championships is scheduled to be held in Konya from October 26 to 30. The last edition of the biggest age-group event for the sport was held in Santiago (Chile) in 2019 with nearly 1500 youngsters from 86 countries participating in the event.</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 1rem; padding: 0px; font-family: HelveticaNeue, Arial, Helvetica, sans-serif; font-size: 14px;\">WKF Organising Commission chairman Esteban Perez said:</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 1rem; padding: 0px; font-family: HelveticaNeue, Arial, Helvetica, sans-serif; font-size: 14px;\">&ldquo;I would like to thank TKF President Aslan Abid Uguz, competition manager Yaser Sahintekin, and the head of the LOC Hikmet Yanartas for their support and hospitality over these past few days. The visit to Konya has been very gratifying and we are ready to organise a memorable event.</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 1rem; padding: 0px; font-family: HelveticaNeue, Arial, Helvetica, sans-serif; font-size: 14px;\">&ldquo;We expect over 1500 athletes from 120 countries, with a total tally of 2500 accredited people. The Sport ve Kongre Merkezi sports hall offers the right conditions for the tournament and I am sure that the LOC and the TKF will do their utmost to organise a great celebration of our sport in a few months.&rdquo;&nbsp;</p>', 8, 'GOR Gunung Sindur', 'https://www.google.com/maps/place/GOR+Gunung+Sindur/@-6.3870038,106.6727178,17z/data=!3m1!4b1!4m5!3m4!1s0x2e69e7e39281eaf9:0x6b6d04c4a3ca7a80!8m2!3d-6.3871447!4d106.6748928', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tournament_condition`
--

CREATE TABLE `tournament_condition` (
  `tournament_id` varchar(30) NOT NULL,
  `min_weight` int(10) NOT NULL,
  `max_weight` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tournament_condition`
--

INSERT INTO `tournament_condition` (`tournament_id`, `min_weight`, `max_weight`) VALUES
('TRN09042022014142NXG', 50, 60),
('TRN090420220234445kt', 60, 70);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tournament_file`
--

CREATE TABLE `tournament_file` (
  `tournament_id` varchar(30) NOT NULL,
  `rules` text DEFAULT NULL,
  `logo` text DEFAULT NULL,
  `banner` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tournament_file`
--

INSERT INTO `tournament_file` (`tournament_id`, `rules`, `logo`, `banner`) VALUES
('TRN09042022014142NXG', '0ceb6eb55daaf3b50c30e9f550b1ab8b.pdf', 'c97705b248a212dac495680fa6385ac7.jpg', 'ba6b46938445d0f121f42e4d4f74e9e8.jpg'),
('TRN090420220234445kt', '94f1479791d2e967487e2f0d28ae6a95.pdf', '04df2dca21a3a5731eefe0f7a90b6de5.jpg', '7c0fabe80d9229f5d161859dcb7cbf97.png');

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
(15, 'TRN090420220234445kt', 20, '2022-04-09 04:33:25', 0);

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
(24, 'Yayan Majalengka', 'lookatmars5', '$2y$10$6TkNbfah.LeY/MvucctQ3uOrqV903ES27jxib8gjcVy0SNhvrKZ0G', 'user', '2', '2022-04-06 19:41:21', '2022-04-06 19:45:42'),
(25, 'Galih Purwadadi', 'lookatmars10', '$2y$10$VJp8YSBWw8h7fgyzVUXQZeLY4rIp7NHb21nUJwUeXr9c0QNRacpT2', 'user', '2', '2022-04-07 21:12:32', '2022-04-09 05:53:16');

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
  `belt` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` int(5) DEFAULT NULL,
  `height` int(5) DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users_account`
--

INSERT INTO `users_account` (`user_id`, `contingent_id`, `gender`, `phone`, `class`, `belt`, `weight`, `height`, `address`, `photo`) VALUES
(20, 6, 'Male', '081317352815', 'UFC', 'Blue', 61, 175, 'Perum Bukit Dago A-9 32', 'a4b20194ca92eed0778cf38702ab79f2.jpg'),
(21, 4, 'Female', '081155669987', 'HeavyWeight', 'Red', 65, 180, 'Desa Mundak Jaya RT/RW 003/004 , Kecamatan Mundakjaya, Indramayu', '2085b42db22ccc8e7e703467a61229b5.jpg'),
(22, 5, 'Male', '081388998845', 'Heavy', 'Red', 56, 180, 'Bogor', '0aacd4ddda414e0503433ba9f7fd5533.jpg'),
(23, 5, 'Male', '081388998866', 'Heavy', 'Blue', 56, 175, 'Jakarta Selatan', '033f9bb56c79a1bb7dd06df925fc7f47.jpg'),
(24, 5, 'Male', '081388998841', 'Heavy', 'Red', 55, 170, 'Serpong', '911b4959efbc6f48642c476460160dca.jpg'),
(25, 4, 'Male', '081522336655', NULL, 'Red', 60, 180, 'Jakarta Barat', NULL);

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
-- Indeks untuk tabel `tournament`
--
ALTER TABLE `tournament`
  ADD PRIMARY KEY (`tournament_id`);

--
-- Indeks untuk tabel `tournament_condition`
--
ALTER TABLE `tournament_condition`
  ADD PRIMARY KEY (`tournament_id`);

--
-- Indeks untuk tabel `tournament_file`
--
ALTER TABLE `tournament_file`
  ADD PRIMARY KEY (`tournament_id`);

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
-- AUTO_INCREMENT untuk tabel `tournament_participant`
--
ALTER TABLE `tournament_participant`
  MODIFY `participant_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
