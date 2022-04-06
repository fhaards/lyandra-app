-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2022 at 04:00 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

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
-- Table structure for table `about`
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
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `email`, `name`, `phone`, `address`, `vision`, `mission`, `about`) VALUES
(1, 'lyandra_eo@mail.com', 'Lyandra Project Event Organizer', '+628133115522', 'St. Sudirman kav 32, Jakarta Selatan , Indonesia', '<p>Testimonials</p>', '<p>Testimonials</p>', '&lt;h2 style=&quot;box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; line-height: 1.2; font-size: 24px; font-family: Nunito, sans-serif; color: #012970;&quot;&gt;Expedita voluptas omnis cupiditate totam eveniet nobis sint iste. Dolores est repellat corrupti reprehenderit.&lt;/h2&gt;\r\n&lt;p style=&quot;box-sizing: border-box; margin: 15px 0px 30px; line-height: 24px; color: #444444; font-family: \'Open Sans\', sans-serif; font-size: 16px;&quot;&gt;Quisquam vel ut sint cum eos hic dolores aperiam. Sed deserunt et. Inventore et et dolor consequatur itaque ut voluptate sed et. Magnam nam ipsum tenetur suscipit voluptatum nam et est corrupti.&lt;/p&gt;');

-- --------------------------------------------------------

--
-- Table structure for table `contingent`
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
-- Dumping data for table `contingent`
--

INSERT INTO `contingent` (`contingent_id`, `created_by`, `contingent_createdat`, `contingent_name`, `contingent_phone`, `contingent_address`, `contingent_status`) VALUES
(4, 1, '2022-04-05 01:43:58', 'Tiger Boxer', '081255668845', 'Tangerang Selatan', 1),
(5, 1, '2022-04-05 01:44:56', 'Tangsel Karate Club', '081255669845', 'Tangerang Selatan', 1),
(6, 1, '2022-04-05 01:46:09', 'Bogor Boxer ', '081365698877', 'Bogor', 1);

-- --------------------------------------------------------

--
-- Table structure for table `requests`
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
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`req_id`, `uuid`, `name`, `passport_id`, `email`, `gender`, `phone`, `nationality`, `address_indonesia`, `passport_img`, `req_status`, `req_status_info`, `category`, `created_at`, `updated_at`, `extend_at`, `expired_at`, `visa_img`, `requests_type`, `img_letter`) VALUES
('ERP-040222-849A', '849a03d5-ec75-4f7a-8bf1-b3bcd10331c0', 'Muhammad Fahmi', '123456789', 'test2@mail.com', 'Male', '081317352815', 'Bangladesh', 'Test', 'ERP-040222-849A-Passport.jpg', 'Waiting', '', 'New', '2022-02-04 22:52:45', '2022-02-04 22:52:45', NULL, NULL, 'ERP-040222-849A-Visa.jpg', 'ERP', NULL),
('ITK-040222-849A', '849a03d5-ec75-4f7a-8bf1-b3bcd10331c0', 'Muhammad Fahmi', '12345678', 'test2@mail.com', 'Male', '081317352815', 'Bangladesh', 'Jakarta', 'ITK-040222-849A-Passport.jpg', 'Waiting', '', 'New', '2022-02-04 22:04:19', '2022-02-04 22:04:19', NULL, '2022-03-04 22:04:19', 'ITK-040222-849A-Visa.jpg', 'ITK', NULL),
('KITAS-040222-849A', '849a03d5-ec75-4f7a-8bf1-b3bcd10331c0', 'Muhammad Fahmi', '12345678', 'test2@mail.com', 'Male', '081317352815', 'Bangladesh', 'Test', 'KITAS-040222-849A-Passport.jpg', 'Waiting', '', 'Extend', '2022-02-04 22:03:25', '2022-02-04 22:03:25', '2023-03-05 16:05:32', '2024-03-05 16:05:32', 'KITAS-040222-849A-Visa.jpg', 'KITAS', 'KITAS-040222-849A-Extend.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tournament`
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
-- Dumping data for table `tournament`
--

INSERT INTO `tournament` (`tournament_id`, `tournament_name`, `event_date`, `regist_date`, `closed_date`, `created_date`, `logo`, `banner`, `status`, `rules`, `description`, `max_participants`, `venue`, `venue_map`) VALUES
('TRN06042022120715JFX', 'Karate 1 Series A Bogor Open', '2022-04-28 10:00:00', '2022-04-07 00:06:00', '2022-04-26 00:06:00', '2022-04-06 12:07:15', '6f9cfd9d34c69f2c6da0f2b58a0a5a4c.jpg', '19049fdeb90340953d9b3c1bbce11011.png', 1, 'add8e211af1bee6a23abdb1a921fb215.pdf', '<p style=\"text-align: justify;\"><span style=\"font-family: HelveticaNeue, Arial, Helvetica, sans-serif; font-size: 20px;\">The Karate 1 - Series A comprises a number of first-class international tournaments all over the world aiming to raise the annual number of WKF events while giving competitors even more opportunities to improve their positions at WKF World ranking. Additionally, the Karate 1-Series A provides added window to showcase the magnificence of Karate\'s major events and the progress of the sport worldwide.</span></p>', 8, 'GOR Gunung Sindur', 'https://www.google.com/maps/place/GOR+Gunung+Sindur/@-6.3870038,106.6727178,17z/data=!3m1!4b1!4m5!3m4!1s0x2e69e7e39281eaf9:0x6b6d04c4a3ca7a80!8m2!3d-6.3871447!4d106.6748928'),
('TRN31032022050837EsX', 'Karate 1 Youth League Limassol', '2022-05-26 10:11:00', '2022-03-19 05:06:00', '2022-03-05 05:06:00', '2022-03-31 05:08:37', '048dc4cfdc2485da26f1ea5fb8504a66.jpg', '0f92b01f7258365ef4e77ea2645d72b9.jpg', 1, '8b53d8ad2ef44c3af310811073aa2a20.pdf', '<p style=\"box-sizing: inherit; margin: 0px 0px 1rem; padding: 0px; font-family: HelveticaNeue, Arial, Helvetica, sans-serif; font-size: 14px; text-align: center;\"><span style=\"box-sizing: inherit; font-family: HelveticaNeue-CondensedBold, Arial, Helvetica, sans-serif; font-weight: bolder;\">The seconds Karate 1-Youth League event of the season will be held in Limassol (Cyprus). The tournament is scheduled from April 29 to May 01.</span></p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 1rem; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; font-family: HelveticaNeue, Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify;\">After the opening competition in Acapulco (Mexico), the 2022 Karate 1-Youth League travels to Limassol (Cyprus) for an event that has become a solid fixture in the international calendar. The city of Limassol welcomes a major Karate event for the third time as it hosted competitions in 2019 and 2021, with the tournament in 2020 cancelled due to the coronavirus pandemic.<br />Youngsters from all over the world will be travelling to Limassol to showcase their abilities and will be participating in an event that usually attracts large numbers of competitors. Over 700 participants from 37 countries took part in the event in 2021, amid the COVID-19 epidemic, while over 1500 young competitors from 59 nations competed at the event in 2019.</p>', 8, 'GOR Saratoga', 'https://www.google.com/maps/place/GOR+Saratoga/@-6.3451625,106.7359328,17z/data=!3m1!4b1!4m5!3m4!1s0x2e69ef77ab423cfd:0xcac34046942a0312!8m2!3d-6.3451678!4d106.7381215');

-- --------------------------------------------------------

--
-- Table structure for table `tournament_match`
--

CREATE TABLE `tournament_match` (
  `match_id` int(10) NOT NULL,
  `match_tournament` varchar(30) NOT NULL,
  `match_name` varchar(30) NOT NULL,
  `match_player_1` int(10) DEFAULT NULL,
  `match_player_2` int(10) DEFAULT NULL,
  `match_winner` int(10) DEFAULT NULL,
  `match_null` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tournament_participant`
--

CREATE TABLE `tournament_participant` (
  `participant_id` int(10) NOT NULL,
  `participant_tournament` varchar(30) NOT NULL,
  `participant_user` int(10) NOT NULL,
  `submit_at` datetime NOT NULL,
  `participant_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tournament_participant`
--

INSERT INTO `tournament_participant` (`participant_id`, `participant_tournament`, `participant_user`, `submit_at`, `participant_status`) VALUES
(3, 'TRN31032022050837EsX', 20, '2022-04-05 03:28:17', 0),
(4, 'TRN31032022050837EsX', 21, '2022-04-05 04:45:29', 1),
(5, 'TRN06042022120715JFX', 20, '2022-04-06 07:53:41', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `username`, `password`, `level`, `user_status`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'superadmin', '$2y$10$Gc1cmaDA/9PT.6cRdXON2uivHMWF.CyD8E21ZD87Ne6tlOEIcJo3m', 'superadmin', '1', '2021-12-22 08:37:27', '2021-12-22 08:37:27'),
(20, 'Muhammad Fahmi', 'fhaards', '$2y$10$GHgRFNhyTDRN0Zyt9Xkuu.R3mHPhSgGwA29l1dJvnOh7ECLiuTJ1G', 'user', '2', '2022-04-04 18:51:57', '2022-04-04 19:02:11'),
(21, 'Lia Hermawati', 'liahermaw', '$2y$10$e9543sF8Phv2wh0Vf9oPeO0hPo1ax9i5Kyg5R2.nEBQmvovAN1jsS', 'user', '2', '2022-04-04 19:57:08', '2022-04-04 21:44:21');

-- --------------------------------------------------------

--
-- Table structure for table `users_account`
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
-- Dumping data for table `users_account`
--

INSERT INTO `users_account` (`user_id`, `contingent_id`, `gender`, `phone`, `class`, `belt`, `weight`, `height`, `address`, `photo`) VALUES
(20, 6, 'Male', '081317352815', 'UFC', 1, 88, 175, 'Perum Bukit Dago A-9 32', 'a4b20194ca92eed0778cf38702ab79f2.jpg'),
(21, 4, 'Female', '081155669987', 'HeavyWeight', 1, 65, 180, 'Desa Mundak Jaya RT/RW 003/004 , Kecamatan Mundakjaya, Indramayu', '2085b42db22ccc8e7e703467a61229b5.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contingent`
--
ALTER TABLE `contingent`
  ADD PRIMARY KEY (`contingent_id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`req_id`);

--
-- Indexes for table `tournament`
--
ALTER TABLE `tournament`
  ADD PRIMARY KEY (`tournament_id`);

--
-- Indexes for table `tournament_match`
--
ALTER TABLE `tournament_match`
  ADD PRIMARY KEY (`match_id`);

--
-- Indexes for table `tournament_participant`
--
ALTER TABLE `tournament_participant`
  ADD PRIMARY KEY (`participant_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `users_email_unique` (`username`);

--
-- Indexes for table `users_account`
--
ALTER TABLE `users_account`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contingent`
--
ALTER TABLE `contingent`
  MODIFY `contingent_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tournament_match`
--
ALTER TABLE `tournament_match`
  MODIFY `match_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tournament_participant`
--
ALTER TABLE `tournament_participant`
  MODIFY `participant_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
