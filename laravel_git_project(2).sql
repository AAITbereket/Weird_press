-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2017 at 05:38 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_git_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `lonely_image_tables`
--

CREATE TABLE `lonely_image_tables` (
  `id` int(10) UNSIGNED NOT NULL,
  `Logged_user_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Photo_URL` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lonely_image_tables`
--

INSERT INTO `lonely_image_tables` (`id`, `Logged_user_email`, `Photo_URL`, `created_at`, `updated_at`) VALUES
(1, 'example@example.com', '/lonely/img/gallery/1.jpg', NULL, NULL),
(2, 'example@example.com', '/lonely/img/gallery/2.jpg', NULL, NULL),
(3, 'example@example.com', '/lonely/img/gallery/3.jpg', NULL, NULL),
(4, 'example@example.com', '/lonely/img/gallery/4.jpg', NULL, NULL),
(5, 'example@example.com', '/lonely/img/gallery/5.jpg', NULL, NULL),
(6, 'example@example.com', '/lonely/img/gallery/6.jpg', NULL, NULL),
(7, 'example@example.com', '/lonely/img/gallery/7.jpg', NULL, NULL),
(8, 'example@example.com', '/lonely/img/gallery/8.jpg', NULL, NULL),
(32, 'miketyson@gmail.com', '/lonely/img/uploads/gallery/hqdefault.jpg', '2017-02-10 22:55:23', '2017-02-10 22:55:23'),
(31, 'miketyson@gmail.com', '/lonely/img/uploads/gallery/bgtyson.jpg', '2017-02-10 22:55:23', '2017-02-10 22:55:23'),
(30, 'miketyson@gmail.com', '/lonely/img/uploads/gallery/1431444447281.jpeg', '2017-02-10 22:55:23', '2017-02-10 22:55:23'),
(27, 'fir@day.com', '/lonely/img/uploads/gallery/programming-wallpaper-1920x1080.jpg', '2017-02-10 08:18:26', '2017-02-10 08:18:26'),
(29, 'miketyson@gmail.com', '/lonely/img/uploads/gallery/4771471.jpg', '2017-02-10 22:55:23', '2017-02-10 22:55:23'),
(28, 'fir@day.com', '/lonely/img/uploads/gallery/music_is_magnificent-wallpaper-1920x1080.jpg', '2017-02-10 08:21:32', '2017-02-10 08:21:32'),
(33, 'miketyson@gmail.com', '/lonely/img/uploads/gallery/hqdefault2.jpg', '2017-02-10 22:55:23', '2017-02-10 22:55:23'),
(34, 'miketyson@gmail.com', '/lonely/img/uploads/gallery/images.jpeg', '2017-02-10 22:55:23', '2017-02-10 22:55:23'),
(35, 'miketyson@gmail.com', '/lonely/img/uploads/gallery/images4.jpeg', '2017-02-10 22:55:23', '2017-02-10 22:55:23'),
(36, 'miketyson@gmail.com', '/lonely/img/uploads/gallery/imagesf.jpeg', '2017-02-10 22:55:23', '2017-02-10 22:55:23'),
(37, 'miketyson@gmail.com', '/lonely/img/uploads/gallery/mike_tyson_2973177.jpg', '2017-02-10 22:55:23', '2017-02-10 22:55:23'),
(38, 'miketyson@gmail.com', '/lonely/img/uploads/gallery/mike-tyson-hd-wallpaper_3.jpg', '2017-02-10 22:55:23', '2017-02-10 22:55:23'),
(49, 'bobmarely@gmail.com', '/lonely/img/uploads/gallery/index.png', '2017-02-10 23:21:52', '2017-02-10 23:21:52'),
(45, 'bobmarely@gmail.com', '/lonely/img/uploads/gallery/images.jpeg', '2017-02-10 23:14:38', '2017-02-10 23:14:38'),
(46, 'bobmarely@gmail.com', '/lonely/img/uploads/gallery/BIO_Bio-Shorts_68_Bob-Marley_SF_HD_768x432-16x9.jpg', '2017-02-10 23:15:22', '2017-02-10 23:15:22'),
(47, 'bobmarely@gmail.com', '/lonely/img/uploads/gallery/bob-marley-wallpaper-1170x800.jpg', '2017-02-10 23:18:21', '2017-02-10 23:18:21'),
(48, 'bobmarely@gmail.com', '/lonely/img/uploads/gallery/UiErlyf.jpg', '2017-02-10 23:20:17', '2017-02-10 23:20:17'),
(50, 'swimmer@gmail.com', '/lonely/img/uploads/gallery/3724285-An-underwater-shot-of-a-woman-in-a-swimming-pool-Stock-Photo.jpg', '2017-02-11 00:08:25', '2017-02-11 00:08:25'),
(51, 'swimmer@gmail.com', '/lonely/img/uploads/gallery/imaages.jpeg', '2017-02-11 00:08:25', '2017-02-11 00:08:25'),
(52, 'swimmer@gmail.com', '/lonely/img/uploads/gallery/index.jpeg', '2017-02-11 00:08:25', '2017-02-11 00:08:25'),
(53, 'swimmer@gmail.com', '/lonely/img/uploads/gallery/swimamer.jpg', '2017-02-11 00:08:25', '2017-02-11 00:08:25'),
(54, 'swimmer@gmail.com', '/lonely/img/uploads/gallery/swimmers-stereotypes.jpg', '2017-02-11 00:08:25', '2017-02-11 00:08:25'),
(55, 'swimmer@gmail.com', '/lonely/img/uploads/gallery/Swimming-01.jpg', '2017-02-11 00:08:25', '2017-02-11 00:08:25'),
(56, 'check@5.com', '/lonely/img/uploads/gallery/baptism.jpg', '2017-02-11 02:18:45', '2017-02-11 02:18:45'),
(57, 'check@5.com', '/lonely/img/uploads/gallery/baptism_angel.jpg', '2017-02-11 02:18:45', '2017-02-11 02:18:45'),
(58, 'check@5.com', '/lonely/img/uploads/gallery/baptism-1.jpg', '2017-02-11 02:18:45', '2017-02-11 02:18:45');

-- --------------------------------------------------------

--
-- Table structure for table `lonely_main_tables`
--

CREATE TABLE `lonely_main_tables` (
  `id` int(10) UNSIGNED NOT NULL,
  `Logged_user_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Background_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `User_Name_display` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Name_subtitle` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `Story_title` text COLLATE utf8_unicode_ci NOT NULL,
  `My_story` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Block_qoute` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Story_leftSide_image` text COLLATE utf8_unicode_ci NOT NULL,
  `Hobby_one` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Hobby_two` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Hobby_three` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Hobby_four` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `URL_to_access` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lonely_main_tables`
--

INSERT INTO `lonely_main_tables` (`id`, `Logged_user_email`, `Background_image`, `User_Name_display`, `Name_subtitle`, `Story_title`, `My_story`, `Block_qoute`, `Story_leftSide_image`, `Hobby_one`, `Hobby_two`, `Hobby_three`, `Hobby_four`, `Phone`, `URL_to_access`, `created_at`, `updated_at`) VALUES
(1, 'example@example.com', '/lonely/img/bg1.jpg', 'Alice', 'I\'m 28 years old from a village near Alpen mountain and I\'m a spinster :(', 'You\'ll fall in love with me at the first sight', 'Lorem ipsum dolor sit amet, ei purto tamquam ceteros his, eos in graece posidonium. Ex nullam vidisse salutatus sed, ea persius phaedrum tincidunt vel. Option virtute nonumes ne est. Id homero expetendis eam, dictas rationibus ut has.', 'Pri pertinacia elaboraret te, an eirmod delicatissimi nec. Eu liber quodsi maiorum mei. Civibus perfecto rationibus id his, est noster nostrud aliquando at.', '/lonely/img/img1.jpg', 'Bachelor of Design', '10x failed in love', 'I love traveling', 'I\'m photographer', '+0123456789', '#', NULL, NULL),
(2, 'lonely@weirdpress.com', '/lonely/img/bg1.jpg', 'Beti', ' I\'m 28 years old from a village near Alpen mountain and I\'m a spinster :( ', 'You\'ll fall in love with me at the first sight', ' Lorem ipsum dolor sit amet, ei purto tamquam ceteros his, eos in graece posidonium. Ex nullam vidisse salutatus sed, ea persius phaedrum tincidunt vel. Option virtute nonumes ne est. Id homero expetendis eam, dictas rationibus ut has. ', 'Sometimes the more you look the less you see', '/lonely/img/img1.jpg', 'Bachelor of Design', '10x failed in love', 'I love traveling', 'I\'m photographer', '+123456789', '#', NULL, '2017-02-09 04:24:55'),
(4, 'fir@day.com', '/lonely/img/uploads/201654.jpg', 'Alice', '     I\'m 28 years old from a village near Alpen mountain and I\'m a spinster :(     ', 'You\'ll fall in love with me at the first sight', '     Lorem ipsum dolor sit amet, ei purto tamquam ceteros his, eos in graece posidonium. Ex nullam vidisse salutatus sed, ea persius phaedrum tincidunt vel. Option virtute nonumes ne est. Id homero expetendis eam, dictas rationibus ut has.     ', '     Pri pertinacia elaboraret te, an eirmod delicatissimi nec. Eu liber quodsi maiorum mei. Civibus perfecto rationibus id his, est noster nostrud aliquando at.     ', '/lonely/img/uploads/12613.jpg', 'Bachelor of Design', 'Love is greater', 'I love traveling', 'I\'m photographer', '+0123456789', '#', NULL, '2017-02-10 06:02:20'),
(7, 'miketyson@gmail.com', '/lonely/img/uploads/bgtyson.jpg', 'Mike Tyson', ' I am American former professional boxer. ', 'I fight for perfection.', ' I was born in Brooklyn, New York. \r\nI won gold medals at the 1981 and 1982 Junior Olympic Games, defeating Joe Cortez in 1981 and beating Kelton Brown in 1982. \r\nTyson\'s biological father is listed as "Purcell Tyson" (who was from Jamaica) on his birth certificate. ', ' Rhythm is everything in boxing. Every move you make starts with your heart, and that’s in rhythm or you’re in trouble. ', '/lonely/img/uploads/hqdefault.jpg', 'Bachelor of economics', 'love boxing', 'i hav travelled all over world', 'I love shooting', '+4994578945', '#', NULL, '2017-02-11 00:49:38'),
(8, 'bobmarely@gmail.com', '/lonely/img/uploads/f.jpg', 'Bob Marely', 'I am musician and guitarist who achieved international fame and acclaim.', 'One good thing about music, when it hits you, you feel no pain.', 'I am a Jamaican singer-songwriter, musician and guitarist who achieved international fame and acclaim blending mostly reggae, ska and rocksteady in his compositions', 'Music!—who loves it not? who has not felt his soul soothed and softened by its sweet influence?', '/lonely/img/uploads/bob-marley-wallpaper-1170x800.jpg', 'Bachelor of music', 'Love Reggae', 'i hav travelled all over world', 'I love shooting', '+5417846454', '#', NULL, '2017-02-10 23:11:21'),
(9, 'swimmer@gmail.com', '/lonely/img/uploads/Swimmer_in_Action_uhd.jpg', 'Jack', '   I\'m professional swimmer. ', 'Swimming is simply moving meditation.', ' Everybody has a little bit of the sun and moon in them. Everybody has a little bit of man, woman, and animal in them. Darks and lights in them.', ' The water doesn\'t know how old you are. ', '/lonely/img/uploads/depositphotos_9501246-stock-photo-athletic-swimmer-in-action-in.jpg', 'Bachelor of electrical', 'love swimming', 'i hav travelled all over world', 'I\'m photographer', '+2514565455', '#', NULL, '2017-02-11 00:07:35');

-- --------------------------------------------------------

--
-- Table structure for table `materialize_xes`
--

CREATE TABLE `materialize_xes` (
  `id` int(10) UNSIGNED NOT NULL,
  `Logged_user_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Color_choice` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Background_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `User_Name_display` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Name_subtitle` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `My_story` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Photo_image` text COLLATE utf8_unicode_ci NOT NULL,
  `Age` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `google` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pinterest` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Cv_document` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `URL_to_access` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `materialize_xes`
--

INSERT INTO `materialize_xes` (`id`, `Logged_user_email`, `Color_choice`, `Background_image`, `User_Name_display`, `Name_subtitle`, `My_story`, `Photo_image`, `Age`, `Phone`, `email`, `Address`, `facebook`, `twitter`, `google`, `pinterest`, `instagram`, `Cv_document`, `URL_to_access`, `created_at`, `updated_at`) VALUES
(1, 'hello@hell.com', 'color1', '/materializeX/images/home-bg.jpg', 'Jhone Doe', 'UX/UI Designer from Dhaka, Bangladesh', 'Hello, I’m a UI/UX Designer & Front End Developer from Victoria, Australia. I hold a master degree of Web Design from the World University. And scrambled it to make a type specimen book. It has survived not only five centuries', '/materializeX/images/person.png', '25', '+0123456789', 'email@domain.com', 'Dahaka, Bangladesh', '#', '#', '#', '#', '#', '#', '#', NULL, NULL),
(4, 'check@1.com', 'color7', '/materializeX/images/home-bg.jpg', 'Jhone Doe', 'UX/UI Designer from Dhaka, Bangladesh', '   Hello, I’m a UI/UX Designer & Front End Developer from Victoria, Australia. I hold a master degree of Web Design from the World University. And scrambled it to make a type specimen book. It has survived not only five centuries', '/materializeX/images/uploads/session-timeout-ajax.gif.png', '25', '+0123456789', 'check@1.com', 'Dahaka; Bangladesh', '#', '#', '', '#', '#', 'Teks_to_remeber.txt', '#', '2017-02-10 09:15:47', '2017-02-10 10:08:41'),
(11, 'bereket@gmail.com', 'color1', '/materializeX/images/uploads/maxresdefault.jpg', 'Beki. B', 'UX/UI Designer from Eth, Addis Ababa', '   Hello, I’m a UI/UX Designer & Front End Developer from Victoria, Australia. I hold a master degree of Web Design from the World University. And scrambled it to make a type specimen book. It has survived not only five centuries', '/materializeX/images/uploads/20160228_125423.jpg', '21', '+251922847962', 'bereket@gmail.com', 'Ethiopia, Addis Ababa', 'http://facebook.com/bereket', '#', '', '#', '#', '#', '#', '2017-02-10 23:29:39', '2017-02-10 23:38:40'),
(12, 'surafel@myspace.com', 'color7', '/materializeX/images/uploads/thumb-1920-176123.jpg', 'Su.', 'Software programmer', ' I have two years of programming experience using Python, C++ and Java. I have good experience of Web-design(CSS-JS-HTML5) also I have one year experince of developing web-application with PHP and MYSQL. And I have started developing website with wordpress this year.\r\nI have basic skills of networking. \r\n', '/materializeX/images/uploads/1229712996_final.jpg', '25', '+4992235465', 'surafel@myspace.com', 'Dahaka; Bangladesh', 'http://facebook.com/surafel', '#', '', '#', '#', 'CURRICULM VITE of bereket.doc', '#', '2017-02-10 23:40:55', '2017-02-10 23:56:52'),
(14, 'check@5.com', 'color1', '/materializeX/images/home-bg.jpg', 'Jhone Doe', 'UX/UI Designer from Dhaka, Bangladesh', 'Hello, I’m a UI/UX Designer & Front End Developer from Victoria, Australia. I hold a master degree of Web Design from the World University. And scrambled it to make a type specimen book. It has survived not only five centuries', '/materializeX/images/person.png', '25', '+0123456789', 'email@domain.com', 'Dahaka; Bangladesh', '#', '#', '#', '#', '#', '#', '#', '2017-02-11 02:19:41', '2017-02-11 02:19:41');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(70, '2014_10_12_000000_create_users_table', 1),
(71, '2014_10_12_100000_create_password_resets_table', 1),
(72, '2017_01_27_064519_create_materialize_xes_table', 1),
(73, '2017_01_31_030059_create_lonely_image_tables_table', 1),
(74, '2017_01_31_030652_create_lonely_main_tables_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `chosen_template` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `chosen_template`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(13, 'swimmer', 'swimmer@gmail.com', NULL, '$2y$10$mhAyA7.UxWhqRYDV7WAIUOzJqoPokNqH3qc.1e5ERsA7iK/f0N8n2', 'sBAs94Nfqf36arpMHubU687hUBJT9TzL7dPSPFm781buDGonPhUKaoRadkvt', '2017-02-10 23:58:38', '2017-02-11 00:25:03'),
(12, 'surafel', 'surafel@myspace.com', NULL, '$2y$10$AMKsdo/lpof8D78YFSLWJ.LnHisj8aX2QWvQhNvBu5ho83vrN932W', 'Gn1rx1brODKd7HFDKOl7X7yVo9dxt4Vpf3vc1a3wMmgpU3j6R7QemkwFpGwB', '2017-02-10 23:40:51', '2017-02-10 23:58:11'),
(11, 'bereket', 'bereket@gmail.com', NULL, '$2y$10$aMC85YPC07eVTwA.hoov7eQfe0EY4kMxKoaheOjVmvzQRagXkINYa', '700yptBBGP0wsOPyF8ubB7YWkLBGboh950nT9YMgwFR8rq5GSQfDwPbC2Sjh', '2017-02-10 23:29:29', '2017-02-10 23:39:35'),
(10, 'Bob Marely', 'bobmarely@gmail.com', NULL, '$2y$10$KtDqJaLnu0k768fkxrCkNun/mz6TWYrjgNhvtkSYBtx54NkpfqVOK', '6db0bfofIxWHPzQ7HKIqKNwdb6WP5fcQCwki5kY4mQ1s27I5MglMDmr8y3Ea', '2017-02-10 23:01:46', '2017-02-10 23:28:08'),
(8, 'Nati', 'Nati@gmail.com', NULL, '$2y$10$DFXslhWsINH2.LroeSCAwOAmeX4h/0bi9IyO8jCr5KfrD.i27dogW', 'wWdhDwtG8GdAISKC5DsDPMox28kj1OE1b8Z1KxoPqi8YJj5hcLFjAZnIrxZU', '2017-02-11 00:11:29', '2017-02-11 00:34:49'),
(9, 'mike tyson', 'miketyson@gmail.com', NULL, '$2y$10$5mKai18BIIHzPsFe.Kb1jOa6zuVfXL8bWdb8hAUjwg7u3xNDrqrWG', '1PZoHKqjtyqQw9CVuBaymlFSISFwfJuxkvDyR4cqWpNlVN9FtbYCtPoXyJ2J', '2017-02-11 00:35:46', '2017-02-10 23:01:20'),
(14, 'check', 'check@5.com', NULL, '$2y$10$Wa/VJTaGUy9mlI5695ZboOW.qPnIMVDUVH92pS6YKh3VnuSK2ucue', NULL, '2017-02-11 02:12:59', '2017-02-11 02:12:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lonely_image_tables`
--
ALTER TABLE `lonely_image_tables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lonely_main_tables`
--
ALTER TABLE `lonely_main_tables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materialize_xes`
--
ALTER TABLE `materialize_xes`
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
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

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
-- AUTO_INCREMENT for table `lonely_image_tables`
--
ALTER TABLE `lonely_image_tables`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `lonely_main_tables`
--
ALTER TABLE `lonely_main_tables`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `materialize_xes`
--
ALTER TABLE `materialize_xes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
