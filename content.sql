-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2020 at 10:21 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `content`
--

-- --------------------------------------------------------

--
-- Table structure for table `createposts`
--

CREATE TABLE `createposts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) DEFAULT 1,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `createposts`
--

INSERT INTO `createposts` (`id`, `title`, `body`, `image`, `status`, `slug`, `created_at`, `updated_at`) VALUES
(3, 'The Definite Article', 'The definite article is the word the. It limits the meaning of a noun to one particular thing. For example, your friend might ask, “Are you going to the party this weekend?” The definite article tells you that your friend is referring to a specific party that both of you know about. The definite article can be used with singular, plural, or uncountable nouns. Below are some examples of the definite article the used in context:', '1593872334.jpg', 1, 'The-Definite-Article', '2020-07-04 08:18:54', '2020-07-04 08:22:10'),
(7, 'Businesses can be for-profit entities', 'A business is defined as an organization or enterprising entity engaged in commercial, industrial, or professional activities.\r\n\r\nBusinesses can be for-profit entities or non-profit organizations that operate to fulfill a charitable mission or further a social cause. \r\n\r\nThe term business also refers to the organized efforts and activities of individuals to produce and sell goods and services for profit.\r\n\r\nBusinesses range in scale from a sole proprietorship to an international corporation.', '1593872504.jpg', 1, 'Businesses-can-be-for-profit-entities', '2020-07-04 08:21:44', '2020-07-04 12:33:47'),
(8, 'Humayun Faridi 2', 'Humayun Faridi was a Bangladeshi actor of film, TV, and theater. He was born on 29 May 1952 in Narinda, Dhaka, East Pakistan (now Bangladesh). Faridi made his television debut through drama, ‘Nil Nakshar Shandaney’ in 1982. He was well-known for his extraordinary roles in different dramas like Songsaptak (1987-88), Pathar Shomoy(1989), Dui Bhai (1990), Shiter Pakhi (1991), Kothao Keu Nei (1990), Shomudre Gangchil (1993) and Kachher Manush. And he won the hearts of millions by his work. He got many awards. He has a daughter from first wife Minu, named Debjani.', '1593887372.jpg', 0, 'humayun-faridi-2', '2020-07-04 12:29:32', '2020-07-04 12:38:28'),
(9, 'Humayun Faridi', 'Humayun Faridi was a Bangladeshi actor of film, TV, and theater. He was born on 29 May 1952 in Narinda, Dhaka, East Pakistan (now Bangladesh). Faridi made his television debut through drama, ‘Nil Nakshar Shandaney’ in 1982. He was well-known for his extraordinary roles in different dramas like Songsaptak (1987-88), Pathar Shomoy(1989), Dui Bhai (1990), Shiter Pakhi (1991), Kothao Keu Nei (1990), Shomudre Gangchil (1993) and Kachher Manush. And he won the hearts of millions by his work. He got many awards. He has a daughter from first wife Minu, named Debjani.', '1593887419.jpg', 1, 'humayun-faridi', '2020-07-04 12:30:19', '2020-07-04 12:31:33'),
(10, 'Lional Messi', 'Messi was born on June 24, 1987, in Rosario, Argentina. As a young boy, Messi tagged along when his two older brothers played soccer with their friends, unintimidated by the bigger boys. At the age of 8, he was recruited to join the youth system of Newell\'s Old Boys, a Rosario-based club. Recognizably smaller than most of the kids in his age group, Messi was eventually diagnosed by doctors as suffering from a hormone deficiency that restricted his growth. Messi\'s parents, Jorge and Ceclia, decided on a regimen of nightly growth-hormone injections for their son, though it soon proved impossible to pay several hundred dollars per month for the medication.', '1593887589.jpg', 1, 'lional-messi', '2020-07-04 12:33:09', '2020-07-05 02:18:10');

-- --------------------------------------------------------

--
-- Table structure for table `createvideos`
--

CREATE TABLE `createvideos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `createvideos`
--

INSERT INTO `createvideos` (`id`, `title`, `body`, `link`, `status`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Corona vaccine', 'Claiming success in preliminary animal modelling trial for Covid-19 vaccine, Globe Biotech Limited has claimed to be the first company from Bangladesh to have a Covid-19 vaccine under development.\r\n\r\nThey received the result after conducting the preliminary trial on five rabbits from June 10 to June 28, said Dr Asif Mahmud, assistant manager and in-charge, Research and Development, Globe Biotech Limited at a press conference at its corporate office in Dhaka’s Tejgaon on Thursday afternoon.\r\n\r\nHowever, after trials are completed, it would take another six months for the vaccine to be marketed, he claimed.\r\n\r\nThe company is yet to apply for a patent and before the patent is ensured it would not disclose the data received from the trial, he added.\r\n\r\n“We have already formulated the regulated animal trial guideline and the tests would be concluded within four to six weeks,” he said adding that after which the company will seek ethical approvals from the Bangladesh Medical Research Council (BMRC).\r\n\r\nWhen (and if) they acquire those approvals, the company will be ready to move on to human trials through third parties under the supervision of the Directorate General of Drug Administration (DGDA) in order to assess the effectiveness of the drug.\r\n\r\nHe said they went for the SPR method for the tests. SPR, Surface plasmon resonance is an optical technique utilized for detecting molecular interactions.\r\n\r\nAccording to the scientist, a 12-member scientific group started the research on March 18 led by Globe Biotech CEO Kakon Nag and COO Naznin Sultana. Both of them supervised the team from Canada.\r\n\r\nRegarding genome sequencing, he said they have taken some 76 genome sequences under their consideration, where they have found that a sequence (numbered 614) has a mutation point that they have used for amino acid bonding.\r\n\r\nAsif said on June 10, the rabbits were isolated and on June 12 they collected serum to analyze if they have already developed the antibody. On June 14 three of them were given the invented dose for the first time.', 'https://www.youtube.com/embed/MJd0J5R_WOg', 1, 'Corona-vaccine', '2020-07-03 12:06:58', '2020-07-04 13:04:46'),
(3, '\"ধূমপায়ীরা প্রকৃত দেশপ্রেমিক !', 'Smoking can cause lung disease by damaging your airways and the small air sacs (alveoli) found in your lungs. Lung diseases caused by smoking include COPD, which includes emphysema and chronic bronchitis. Cigarette smoking causes most cases of lung cancer.', 'https://www.youtube.com/embed/EQPkdzj45WA', 1, '\"ধূমপায়ীরা-প্রকৃত-দেশপ্রেমিক-!', '2020-07-04 05:23:12', '2020-07-04 05:23:12'),
(7, 'Texans Are A Paying A Terrible Toll', 'Congressman Lloyd Doggett (D-TX) joins Ayman Mohyeldin as his state is experiencing a sharp rise in COVID-19 cases. Doggett places blame on Texas Governor Greg Abbott, who he says has tied the hands of local government and is in \"denial\" about the seriousness of the problem there. Aired on 07/03/2020. \r\n\r\nCongressman Lloyd Doggett (D-TX) joins Ayman Mohyeldin as his state is experiencing a sharp rise in COVID-19 cases. Doggett places blame on Texas Governor Greg Abbott, who he says has tied the hands of local government and is in \"denial\" about the seriousness of the problem there. Aired on 07/03/2020.', 'https://www.youtube.com/embed/p1exXZEFBnY', 1, 'texans-are-a-paying-a-terrible-toll', '2020-07-04 12:23:26', '2020-07-04 12:23:26'),
(8, 'Shakib is in the best team of 21st century', 'Shakib Al Hasan (Bengali: সাকিব আল হাসান; born 24 March 1987) is a Bangladeshi international cricketer who has played all three formats of the game. Internationally, Shakib has been recognised as one of the greatest all-rounders of all time.[1][2][3] He was ranked as one of the world\'s most famous athletes by ESPN World Fame 100 in 2019.[4] His aggressive left-handed batting style in the middle order, controlled slow left-arm orthodox bowling, and athletic fielding has helped him win trophies in top leagues across the world.[5][6]\r\n\r\nIn 2015, Shakib became the first and only cricketer in history to be ranked the \'No.1 all-rounder\' by ICC in its Player Rankings in all three formats of the game (Test, Twenty20 and One Day Internationals).[7] He is currently ranked no.1 in odis and no.2 in tests and t-20s. On 13 January 2017, he registered the highest individual score (217) by a Bangladeshi batsman in Tests.[8] In November 2018, he became the first bowler for Bangladesh to take 200 wickets in Tests.[9] In June 2019, Shakib became the fastest player to score 6,000 runs and take 250 wickets in ODIs in just 199 matches.[10] He is the highest run-scorer as well as the highest wicket-taker for Bangladesh in ICC ODI World Cups. He is also the only cricketer to score 1000 runs and to take 30 wickets in the World Cup. At the 2019 Cricket World Cup, Shakib became the first cricketer to score 600 runs and take 10 wickets in a single World Cup.', 'https://www.youtube.com/embed/HH2PIrL4tXw', 1, 'shakib-is-in-the-best-team-of-21st-century', '2020-07-04 12:28:04', '2020-07-04 12:37:57');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_07_03_143006_create_createposts_table', 2),
(5, '2020_07_03_143849_create_createposts_table', 3),
(6, '2020_07_03_173516_create_createvideos_table', 4);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'mrx', 'mrx@gmail.com', NULL, '$2y$10$CJWP12KeP7ZriVejIx0oouuD4JEF0uOa.j3hWgYnRdH7KZBkgZHPy', NULL, '2020-07-03 05:51:53', '2020-07-03 05:51:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `createposts`
--
ALTER TABLE `createposts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `createposts_title_unique` (`title`);

--
-- Indexes for table `createvideos`
--
ALTER TABLE `createvideos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `createvideos_title_unique` (`title`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- AUTO_INCREMENT for table `createposts`
--
ALTER TABLE `createposts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `createvideos`
--
ALTER TABLE `createvideos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
