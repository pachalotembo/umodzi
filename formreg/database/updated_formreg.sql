-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2022 at 10:13 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `updated_formreg`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `innovations`
--

CREATE TABLE `innovations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_goals` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_services` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `individual_skills` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `raised_funding` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_registration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pending_funding` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `registration_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `organisation_services` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `development_stage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_invest` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `market_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `solve_problems` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `competitors` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usefulness` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cost` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `technological_idea` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_to_market` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accessibility` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `support_needed` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `documents` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `innovations`
--

INSERT INTO `innovations` (`id`, `project_name`, `project_goals`, `other_services`, `individual_skills`, `raised_funding`, `project_registration`, `pending_funding`, `registration_type`, `project_type`, `organisation_services`, `development_stage`, `current_invest`, `market_type`, `solve_problems`, `competitors`, `usefulness`, `cost`, `technological_idea`, `time_to_market`, `accessibility`, `support_needed`, `documents`, `created_at`, `updated_at`) VALUES
(1, 'ty', 'y', NULL, NULL, 'yes', 'yes', 'no', 'patent', 'energy_and_renewable_resources', 'yuu', 'proof_of_concept', 'yu', '\"demographic\"', 'yes', 'no', 'good', 'good', 'bad', 'bad', 'very_good', '\"finance\"', 'Documents_1663333358idea form.pdf', NULL, NULL),
(2, 'Infor Recordial System', 'To support innovators', 'Software development', '', 'no', 'yes', 'no', 'trademark', 'information_technology', 'Sofware development', 'proof_of_concept', '100,000', '\"geographic\"', 'yes', 'no', 'excellent', 'excellent', 'excellent', 'very_good', 'excellent', '\"finance\"', 'Documents_1663335249idea form.pdf', NULL, NULL),
(3, 't4t', 't4t', 't4t', 't4t', 'yes', 'yes', 'yes', 'patent', 'information_technology', 't4t', 'idea', 't4t', '\"behavioral\"', 'yes', 'no', 'bad', 'excellent', 'bad', 'good', 'good', '\"promotion\"', 'Documents_1663335809idea form.pdf', NULL, NULL),
(4, '667u', '7u', 'u77', 'u7u', 'yes', 'yes', 'yes', 'patent', 'energy_and_renewable_resources', '65yu765', 'idea', '6y', '\"demographic\"', 'no', 'yes', 'bad', 'bad', 'very_good', 'bad', 'bad', '\"scholarship\"', 'Documents_1663337231idea form.pdf', NULL, NULL),
(5, 'tytyty', 'tyt', NULL, NULL, 'yes', 'yes', 'yes', 'patent', 'energy_and_renewable_resources', 'yty', 'proof_of_concept', 'yty', '\"demographic\"', 'no', 'yes', 'bad', 'bad', 'bad', 'bad', 'bad', '\"finance\"', 'Documents_1663337378idea form.pdf', NULL, NULL),
(6, 'Bridge Construction', 'to help ease transportation', NULL, 'building', 'no', 'no', 'yes', 'patent', 'other', 'construction', 'idea', '1,000,000', '\"geographic\"', 'yes', 'yes', 'very_good', 'good', 'good', 'very_good', 'very_good', '\"finance\"', 'Documents_1663338440IRS form sample.pdf', NULL, NULL),
(7, 'EFEFE', 'FEF', 'FEF', 'FEF', 'yes', 'yes', 'yes', 'patent', 'information_technology', 'FEFE', 'proof_of_concept', 'FEF', '[\"demographic\",\"psychographic\",\"behavioral\"]', 'yes', 'yes', 'bad', 'good', 'very_good', 'good', 'very_good', '[\"finance\",\"promotion\",\"advertisement\"]', 'Documents_1663341122idea form.pdf', NULL, NULL),
(8, 'pachalo', 'rtegegrg', 'ggrgrgr', 'dggergregg', 'yes', 'yes', 'yes', 'patent', 'information_technology', 'grgrg', 'idea', 'vgfvgvergerg', '[\"demographic\",\"psychographic\"]', 'no', 'yes', 'good', 'good', 'bad', 'good', 'good', '[\"other\",\"scholarship\",\"advertisement\"]', 'Documents_1663567420IRS form sample.pdf', NULL, NULL),
(9, 'grgerg', 'grg', 'rgrg', 'grgr', 'yes', 'yes', 'yes', 'trademark', 'health', 'grgrg', 'piloting', '1928948234', '[\"demographic\",\"behavioral\"]', 'yes', 'no', 'good', 'good', 'very_good', 'good', 'good', '[\"finance\",\"promotion\",\"advertisement\"]', 'Documents_1663567691idea form.pdf', NULL, NULL),
(10, 'Street Security Lights', 'to provide security around communities', NULL, 'software development', 'no', 'no', 'no', 'N/A', 'information_technology', 'software development', 'proof_of_concept', '500000', '[\"geographic\",\"behavioral\"]', 'yes', 'no', 'excellent', 'good', 'excellent', 'very_good', 'excellent', '[\"finance\"]', 'Documents_1663574984idea form.pdf', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(63, '2022_09_11_143132_create_org_users_table', 1),
(92, '2014_10_12_000000_create_users_table', 2),
(93, '2014_10_12_100000_create_password_resets_table', 2),
(94, '2019_08_19_000000_create_failed_jobs_table', 2),
(95, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(96, '2022_09_12_151508_create_orgusers_table', 2),
(97, '2022_09_14_090024_create_innovations_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orgusers`
--

CREATE TABLE `orgusers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `organisation_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `organisation_regnum` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `representative_country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orgusers`
--

INSERT INTO `orgusers` (`id`, `organisation_name`, `organisation_regnum`, `country`, `firstname`, `lastname`, `gender`, `date`, `email`, `email_verified_at`, `nationality`, `representative_country`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Houses', 'hhgh', 'england', 'khuti', 'khuti', 'Male', NULL, 'khuti@gmail.com', NULL, 'efrregre', 'grgrg', NULL, NULL, '2022-09-19 05:08:04', '2022-09-19 05:08:04'),
(2, 'kingz', 'etwetrt', 'Malawi', 'khuthi', 'khuthi', 'Male', '2022-09-01', 'khuthi@gmail.com', NULL, 'Malawian', 'Malawi', NULL, NULL, '2022-09-19 06:00:31', '2022-09-19 06:00:31');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `gender`, `date`, `email`, `email_verified_at`, `nationality`, `country`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'mishy', 'xx', 'Male', '2022-09-06', 'mishy@gmail.com', NULL, 'xxx', 'xxx', '$2y$10$hM1TTlLszrjrYNQ9PaMTIufsyqu5vrvSmYwISgxsfe25YSQndDv8C', NULL, '2022-09-15 12:32:00', '2022-09-15 12:32:00'),
(2, 'linda', 'zaoneka', 'Female', '2022-08-29', 'linda@gmail.com', NULL, 'Malawian', 'Malawi', '$2y$10$kHnQCGc4rEL7uBVKUNvvfes2JrWlj0wBC5aiIUwL7OaZDXxdBmJbe', NULL, '2022-09-19 05:06:03', '2022-09-19 05:06:03'),
(3, 'khuti', NULL, NULL, NULL, 'khuti@gmail.com', NULL, NULL, NULL, '$2y$10$UIp09gedQOE9nk1QxsF8bemO1wwta8OS20q/c9AZxVJsFFLfw21XW', NULL, '2022-09-19 05:08:04', '2022-09-19 05:08:04'),
(4, 'sdsdsd', 'dsdsd', 'Female', '2022-09-06', 'hhh@gmail.com', NULL, 'malawian', 'csdvddv', '$2y$10$9Yvpfmj1SM9vesubIOr1K.7EghmSFE/wwKhw/StjW1dqzAt4oneAi', NULL, '2022-09-19 05:36:43', '2022-09-19 05:36:43'),
(5, 'Angella', 'Biko', 'Female', '2022-10-05', 'biko@gmail.com', NULL, 'Tanzanian', 'Malawi', '$2y$10$FPpV4JfncthSejQOwYfOuulcy3a2ghT9ik3oRd5y1ZMWICCgHMQlm', NULL, '2022-09-19 05:45:15', '2022-09-19 05:45:15'),
(6, 'babylon', 'babs', 'Female', '2022-09-06', 'babs@gmail.com', NULL, 'Kenyan', 'Tanzania', '$2y$10$qLb9EpsdCdOja4dIjn/87.TmofhGgrKZXmV1sUusSBKokzCQKlv1i', NULL, '2022-09-19 05:50:11', '2022-09-19 05:50:11'),
(7, 'khuthi', NULL, NULL, NULL, 'khuthi@gmail.com', NULL, NULL, NULL, '$2y$10$irbqN2MnfH3q8YckStMnHe3eTnmckLwopQbXoPFyyzZrI1qRkdrD.', NULL, '2022-09-19 06:00:31', '2022-09-19 06:00:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `innovations`
--
ALTER TABLE `innovations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orgusers`
--
ALTER TABLE `orgusers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orgusers_email_unique` (`email`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `innovations`
--
ALTER TABLE `innovations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `orgusers`
--
ALTER TABLE `orgusers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
