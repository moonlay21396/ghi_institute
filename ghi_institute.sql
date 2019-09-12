-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2019 at 06:41 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ghi_institute`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `photo`, `name`, `text`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '5d7520bc90624_blog-img_03.jpg', 'Blog 1', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, aliquam reiciendis beatae saepe perspiciatis provident iusto aperiam, consectetur iste, maiores tempore atque. Quis minima, quasi error molestias facere quaerat perspiciatis!<br></p>', 1, '2019-09-08 08:49:59', '2019-09-08 09:09:40'),
(3, '5d7776a1eb3e5_8.jpg', 'Blog 2', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, aliquam reiciendis beatae saepe perspiciatis provident iusto aperiam, consectetur iste, maiores tempore atque. Quis minima, quasi error molestias facere quaerat perspiciatis!<br></p>', 2, '2019-09-10 00:22:09', '2019-09-10 03:40:41');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fee` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `photo`, `start_date`, `duration`, `fee`, `description`, `category`, `created_at`, `updated_at`) VALUES
(1, 'Level 4 Diploma In Computing', '5d78cfcacaea4_8.png', '2019-10-01', '2 Years', '2000000', '<p>The Level 4 Diploma in Computing is a 120-credit Ofqual regulated qualification. It provides the core knowledge, understanding and skills to support learners planning to further their studies in computing.<br></p>', 'academic', '2019-09-10 00:49:33', '2019-09-11 04:15:08'),
(2, 'Web Development with PHP', '5d78e964e7a5b_5.png', '2019-09-18', '3 month', '150000', '<p><span style=\"color: rgba(255, 255, 255, 0.75); font-family: Roboto, sans-serif; font-size: 13px; background-color: rgba(0, 0, 0, 0.5);\">Web Development Course with (PHP, MySQL, AJAX, JSON, PHP OOP and MVC)</span><br></p>', 'diploma', '2019-09-10 00:50:25', '2019-09-11 06:02:36'),
(3, 'Front End Development', '5d78d0e36b76f_4.png', '2019-09-28', '3 Month', '100000', '<p><span style=\"color: rgba(255, 255, 255, 0.75); font-family: Roboto, sans-serif; font-size: 13px; background-color: rgba(0, 0, 0, 0.5);\">Front End Development Course with (HTML,CSS,BOOTSTRAP,JavaScript,jQuery)</span><br></p>', 'diploma', '2019-09-10 00:51:09', '2019-09-11 04:23:56'),
(4, 'Android Development', '5d78d21d06a18_6.png', '2019-09-11', '3 Month', '250,000', '<p><span style=\"color: rgba(255, 255, 255, 0.75); font-family: Roboto, sans-serif; font-size: 13px; background-color: rgba(0, 0, 0, 0.5);\">Android Development with (Java, Kotalin)</span><br></p>', 'diploma', '2019-09-11 04:23:17', '2019-09-11 04:23:17'),
(5, 'Linux System Adminstration', '5d78d28ac19ff_7.png', '2019-09-16', '3 Month', '100,000', '<span style=\"color: rgba(255, 255, 255, 0.75); font-family: Roboto, sans-serif; font-size: 13px; background-color: rgba(0, 0, 0, 0.5);\">Linux System with (Network Engineer, System Administrator)</span>', 'diploma', '2019-09-11 04:25:06', '2019-09-11 20:59:10');

-- --------------------------------------------------------

--
-- Table structure for table `course_categories`
--

CREATE TABLE `course_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_categories`
--

INSERT INTO `course_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'academic', NULL, NULL),
(2, 'diploma', NULL, NULL),
(3, 'online course', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fee` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `timing` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `photo`, `title`, `fee`, `date`, `timing`, `location`, `event_category`, `detail`, `created_at`, `updated_at`) VALUES
(1, '5d7787b0db761_sg1.jpg', 'Event 1', 'free', '2019-09-19', '1pm to 5pm', 'Yangon', 'academy', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, aliquam reiciendis beatae saepe perspiciatis provident iusto aperiam, consectetur iste, maiores tempore atque. Quis minima, quasi error molestias facere quaerat perspiciatis!<br></p>', '2019-09-10 04:53:28', '2019-09-10 04:56:14'),
(2, '5d7788bae7903_5.jpg', 'Event 2', '5000', '2019-09-16', '10am to 12pm', 'Mandalay', 'other', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, aliquam reiciendis beatae saepe perspiciatis provident iusto aperiam, consectetur iste, maiores tempore atque. Quis minima, quasi error molestias facere quaerat perspiciatis!<br></p>', '2019-09-10 04:57:54', '2019-09-10 04:57:54');

-- --------------------------------------------------------

--
-- Table structure for table `eventstudents`
--

CREATE TABLE `eventstudents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `education` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `eventstudents`
--

INSERT INTO `eventstudents` (`id`, `event_id`, `name`, `email`, `phone`, `job`, `education`, `address`, `created_at`, `updated_at`) VALUES
(3, 2, 'Moon Lay', 'moonlay@gmail.com', '09543345876', 'IT', 'B.Tech(IT)', 'fbbgfhfghfh', '2019-09-11 08:23:59', '2019-09-11 08:23:59'),
(4, 1, 'SayarThu Yein Soe', 'thuyein@gmail.com', '09797294931', 'IT', 'B.Tech(IT)', 'rgretertertertert', '2019-09-11 09:13:09', '2019-09-11 09:13:09'),
(5, 1, 'Line Walker 2', 'moon123@gmail.com', '09765432234', 'IT', 'B.Tech(IT)', 'dfsdfsdffs', '2019-09-11 09:38:09', '2019-09-11 09:38:09');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `university` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `degree` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `photo`, `name`, `position`, `university`, `degree`, `fb_link`, `description`, `created_at`, `updated_at`) VALUES
(1, '5d7922d3b8e1b_7.png', 'Shu Aung Win', 'CIRRICULUN DEVELOPMENT', 'BAUMAN MOSCOW STATE TECHNICAL UNIVERSITY', 'PH.D CANDIDATE', 'https://www.facebook.com', '<p style=\"text-align: center;\"><span style=\"color: rgb(102, 102, 102); font-family: Roboto, sans-serif; font-size: 13px; text-align: start;\">Strong experienced in Microcontroller, Electrical, and Electronic. Also a well-known educator in Microchip Technology. Currently working as a lecturer, teaching PIC controller.</span><br></p>', '2019-09-08 05:54:08', '2019-09-11 10:10:34'),
(2, '5d79236a52856_6.png', 'Hla Myo Aung', 'ELECTRIAL & ELECTRIONAL', 'MOSCOW POWER ENGINEERING INSTITUTE', 'PH.D CANDIDATE (ELECTRICAL POWER)', 'https://www.facebook.com/hlamyoaung.aung.758', '<span style=\"color: rgb(102, 102, 102); font-family: Roboto, sans-serif; font-size: 13px;\">Strong experienced in Microcontroller, Electrical, and Electronic. Also a well-known educator in Microchip Technology. Currently working as a lecturer, teaching PIC controller.</span><br>', '2019-09-10 02:02:10', '2019-09-11 10:10:10'),
(3, '5d792446cc8ea_5.png', 'Win Htut', 'EMBEDDED SYSTEM', 'UNIVERSITY OF YADANARBON', 'LLB', 'https://www.facebook.com/WinHtutEquation', '<p><span style=\"color: rgb(102, 102, 102); font-family: Roboto, sans-serif; font-size: 13px;\">Young, Enthusiastic and a well-known educator. Specializing in an embedded system.</span><br></p>', '2019-09-11 10:13:50', '2019-09-11 10:13:50'),
(4, '5d7924f2e62c3_4.png', 'Thu Yein Soe', 'WEB DEVELOPMENT', 'MOSCOW POWER ENGINEERING INSTITUTE', 'M.SC.(NUCLEAR PHYSICS)', 'https://www.facebook.com/profile.php?id=100011464260891', '<p><span style=\"color: rgb(102, 102, 102); font-family: Roboto, sans-serif; font-size: 13px;\">A well-known Web Developer and Educator, Specialized in Database Architecture. Has experienced in Web Development projects. Now he is working as a product development director at Green Hackers Institute.</span><br></p>', '2019-09-11 10:16:42', '2019-09-11 10:16:42'),
(5, '5d79af66924ba_3.png', 'Pyae Soan Aung', 'COMPUTER SCIENCE', 'DEFENSE SERVICE ACADEMY', 'B.Sc', 'https://www.facebook.com/Ghostman.44', '<p><span style=\"color: rgb(102, 102, 102); font-family: Roboto, sans-serif; font-size: 13px;\">A highly motivated and experienced educator, currently working in Higher Education Field. Focus on Robot Operating System and Computer Science.</span><br></p>', '2019-09-11 20:07:26', '2019-09-11 20:07:26'),
(6, '5d79afd19c468_2.png', 'Dr. Thein Naing Tun', 'Principal', 'MOSCOW POWER ENGINEERING INSTITUTE', 'PH.D (ELECTRICAL POWER)', 'www.facebook.com', '<p><span style=\"color: rgb(102, 102, 102); font-family: Roboto, sans-serif; font-size: 13px;\">A highly motivated and experienced educator, currently working in Higher Education Field. Excellent administrative skill. Also got a Ph.D. degree focused on Electrical Machine from Moscow Power Engineering Institute.</span><br></p>', '2019-09-11 20:09:13', '2019-09-11 20:09:13'),
(8, '5d79b042f389a_1.png', 'Dr. Aung Win Hut', 'Principal', 'MOSCOW POWER ENGINEERING INSTITUTE', 'PH.D (ELECTRICAL POWER)', 'https://www.facebook.com/AungWinHtutGH', '<p><span style=\"color: rgb(102, 102, 102); font-family: Roboto, sans-serif; font-size: 13px;\">Founder of Green Hackers Team, and Co-Founder of Green Hackers Institute. A well-known educator, currently working as a Principal of Green Hackers Institute and holding a position of Director of Teaching and Learning.</span><br></p>', '2019-09-11 20:11:07', '2019-09-11 20:11:07');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_09_08_095934_create_course_categories_table', 2),
(4, '2019_09_08_100219_create_courses_table', 3),
(5, '2019_09_08_100840_create_members_table', 4),
(6, '2019_09_08_101359_create_events_table', 5),
(7, '2019_09_08_101905_create_blogs_table', 6),
(8, '2019_09_11_082756_create_enroll__students_table', 7),
(9, '2019_09_11_085322_create_eventstudents_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$s0wCyWVFjl4GEd6cDe0V4.EpKIP47BhDulqErsQADMK6GfQ2/VXCi', 'admin', NULL, '2019-09-08 00:28:44', '2019-09-08 00:28:44'),
(2, 'teacher', 'teacher@gmail.com', NULL, '$2y$10$9lVsACELlWM3Upm7S/ugEetd3hJiJLjGlAIGVZKoqxWyF.Btvfkni', 'teacher', NULL, '2019-09-08 00:31:16', '2019-09-08 00:31:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_categories`
--
ALTER TABLE `course_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eventstudents`
--
ALTER TABLE `eventstudents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `course_categories`
--
ALTER TABLE `course_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `eventstudents`
--
ALTER TABLE `eventstudents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
