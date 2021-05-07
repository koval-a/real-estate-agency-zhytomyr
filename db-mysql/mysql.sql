-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:8889
-- Время создания: Май 07 2021 г., 15:42
-- Версия сервера: 5.7.30
-- Версия PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- База данных: `dom_zt`
--

-- --------------------------------------------------------

--
-- Структура таблицы `appointment`
--

CREATE TABLE `appointment` (
                               `id` bigint(20) UNSIGNED NOT NULL,
                               `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
                               `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
                               `created_at` timestamp NULL DEFAULT NULL,
                               `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `appointment`
--

INSERT INTO `appointment` (`id`, `name`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Землі сільськогосподарського призначення', 'Земля', NULL, NULL),
(2, 'Землі природно-заповідного та іншого природоохоронного призначення', 'Земля', NULL, NULL),
(3, 'Землі житлової та громадської забудови', 'Земля', NULL, NULL),
(4, 'Землі оздоровчого призначення', 'Земля', NULL, NULL),
(5, 'Землі рекреаційного призначення', 'Земля', NULL, NULL),
(6, 'Землі історико-культурного призначення', 'Земля', NULL, NULL),
(7, 'Землі лісогосподарського призначення', 'Земля', NULL, NULL),
(8, 'Землі водного фонду', 'Земля', NULL, NULL),
(9, 'Землі промисловості, транспорту, зв\'язку, енергетики, оборони та іншого призначення', 'Земля', NULL, NULL),
(10, 'Нерухомість вільного призначення', 'Комерційна нерухомість', NULL, NULL),
(11, 'Нерухомість для роздрібної торгівлі', 'Комерційна нерухомість', NULL, NULL),
(12, 'Офісна нерухомість', 'Комерційна нерухомість', NULL, NULL),
(13, 'Індустріальна нерухомість', 'Комерційна нерухомість', NULL, NULL),
(14, 'Апартаменти', 'Комерційна нерухомість', NULL, NULL),
(15, 'Соціальна нерухомість', 'Комерційна нерухомість', NULL, NULL),
(16, 'Без призначення', 'Бім+Квартира', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `blog_article`
--

CREATE TABLE `blog_article` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `author_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `blog_article`
--

INSERT INTO `blog_article` (`id`, `picture`, `title`, `text`, `category_id`, `author_id`, `created_at`, `updated_at`) VALUES
(1, 'picture.png', 'Нові квартири в Житомирі', 'Текст про Нові квартири в Житомирі', 1, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `blog_category`
--

CREATE TABLE `blog_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `blog_category`
--

INSERT INTO `blog_category` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Новини', 'news', NULL, NULL),
(2, 'Статті', 'article', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Квартира', 'flat', NULL, NULL),
(2, 'Будинок', 'house', NULL, NULL),
(3, 'Земельна ділянка', 'land', NULL, NULL),
(4, 'Комерційна нерухомість', 'commercial-real-estate', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `files`
--

CREATE TABLE `files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `obekt_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `files`
--

INSERT INTO `files` (`id`, `url_img`, `obekt_id`, `created_at`, `updated_at`) VALUES
(1, 'falt/3/pic-01.png\r\n', 3, NULL, NULL),
(2, 'flat/3/pic-04.png', 3, NULL, NULL),
(3, 'flat/3/pic-02.png', 3, NULL, NULL),
(4, 'flat/3/pic-03.png', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `location`
--

CREATE TABLE `location` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `region_id` bigint(20) UNSIGNED NOT NULL,
  `rayon_id` bigint(20) UNSIGNED NOT NULL,
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `city_rayon_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `location`
--

INSERT INTO `location` (`id`, `region_id`, `rayon_id`, `city_id`, `city_rayon_id`, `created_at`, `updated_at`) VALUES
(1, 1, 29, 1, 8, NULL, NULL),
(2, 1, 29, 1, 4, NULL, NULL),
(3, 1, 29, 1, 5, NULL, NULL),
(4, 1, 27, 2, 9, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `location_city`
--

CREATE TABLE `location_city` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `location_city`
--

INSERT INTO `location_city` (`id`, `city`, `created_at`, `updated_at`) VALUES
(1, 'Житомир', NULL, NULL),
(2, 'Не Житомир', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `location_city_rayon`
--

CREATE TABLE `location_city_rayon` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rayon_city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `location_city_rayon`
--

INSERT INTO `location_city_rayon` (`id`, `rayon_city`, `created_at`, `updated_at`) VALUES
(1, 'Крошня', NULL, NULL),
(2, 'Вокзал', NULL, NULL),
(3, 'Центр', NULL, NULL),
(4, 'Богунія', NULL, NULL),
(5, 'Гідропарк', NULL, NULL),
(6, 'Малікова', NULL, NULL),
(7, 'Рудня', NULL, NULL),
(8, 'Довженка', NULL, NULL),
(9, 'Не район Житомира', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `location_rayon`
--

CREATE TABLE `location_rayon` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rayon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `location_rayon`
--

INSERT INTO `location_rayon` (`id`, `rayon`, `created_at`, `updated_at`) VALUES
(20, 'Андрушківський', NULL, NULL),
(21, 'Березівська', NULL, NULL),
(22, 'Брусилівська', NULL, NULL),
(23, 'Високівська', NULL, NULL),
(24, 'Вишевицька', NULL, NULL),
(25, 'Вільшанська', NULL, NULL),
(26, 'Волицька', NULL, NULL),
(27, 'Глибочицька', NULL, NULL),
(28, 'Городоцька', NULL, NULL),
(29, 'Житомирська', NULL, NULL),
(30, 'Квітнева', NULL, NULL),
(31, 'Корнинська', NULL, NULL),
(32, 'Коростишівська', NULL, NULL),
(33, 'Курненська', NULL, NULL),
(34, 'Любарська', NULL, NULL),
(35, 'Миропільська', NULL, NULL),
(36, 'Новоборівська', NULL, NULL),
(37, 'Новогуйвинська', NULL, NULL),
(38, 'Оліївська', NULL, NULL),
(39, 'Попільнянська', NULL, NULL),
(40, 'Потіївська', NULL, NULL),
(41, 'Пулинська', NULL, NULL),
(42, 'Радомишльська', NULL, NULL),
(43, 'Романівська', NULL, NULL),
(44, 'Станишівська', NULL, NULL),
(45, 'Старосілецька', NULL, NULL),
(46, 'Тетерівська', NULL, NULL),
(47, 'Харитонівська', NULL, NULL),
(48, 'Хорошівська', NULL, NULL),
(49, 'Черняхівська', NULL, NULL),
(50, 'Чуднівська', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `location_region`
--

CREATE TABLE `location_region` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `region` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `location_region`
--

INSERT INTO `location_region` (`id`, `region`, `created_at`, `updated_at`) VALUES
(1, 'Житомирська область', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2021_04_26_212414_create_category_table', 1),
(4, '2021_04_26_213002_create_location_region_table', 1),
(5, '2021_04_26_213012_create_location_city_table', 1),
(6, '2021_04_26_213023_create_location_rayon_table', 1),
(7, '2021_04_26_213156_create_appointment_table', 1),
(8, '2021_04_26_221010_create_location_city_rayon_table', 2),
(9, '2021_04_26_221238_create_location_table', 3),
(10, '2021_04_26_224319_create_blog_category_table', 4),
(11, '2021_04_26_225157_create_blog_article_table', 5),
(12, '2021_04_26_225648_create_obekts_table', 6),
(13, '2021_04_26_230046_create_note_table', 7),
(14, '2021_04_26_230057_create_files_table', 7);

-- --------------------------------------------------------

--
-- Структура таблицы `note`
--

CREATE TABLE `note` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date_publish` date NOT NULL,
  `note_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `obekt_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `note`
--

INSERT INTO `note` (`id`, `date_publish`, `note_text`, `obekt_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '2021-04-28', 'Офіс на Довженка потрібно Терміново здати в оренду', 1, 2, NULL, NULL),
(2, '2021-04-26', '213', 4, 2, '2021-04-26 20:56:20', '2021-04-26 20:56:20'),
(3, '2021-04-27', 'Квартира', 3, 2, '2021-04-26 21:39:48', '2021-04-26 21:39:48'),
(4, '2021-04-27', 'Земля', 5, 2, '2021-04-26 21:39:57', '2021-04-26 21:39:57'),
(5, '2021-04-27', 'Під магазин', 6, 2, '2021-04-26 21:40:10', '2021-04-26 21:40:10');

-- --------------------------------------------------------

--
-- Структура таблицы `obekts`
--

CREATE TABLE `obekts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(12,2) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `square` decimal(12,2) NOT NULL,
  `location_id` bigint(20) UNSIGNED NOT NULL,
  `main_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isPublic` tinyint(1) NOT NULL,
  `count_room` int(11) NOT NULL,
  `count_level` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `isOpalenya` int(11) NOT NULL,
  `opalenyaName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no name',
  `isNewBuild` tinyint(1) NOT NULL,
  `isPartHouse` tinyint(1) NOT NULL,
  `isPartYard` tinyint(1) NOT NULL,
  `appointment_id` bigint(20) UNSIGNED NOT NULL,
  `rieltor_id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `obekts`
--

INSERT INTO `obekts` (`id`, `name`, `description`, `price`, `category_id`, `square`, `location_id`, `main_img`, `isPublic`, `count_room`, `count_level`, `level`, `isOpalenya`, `opalenyaName`, `isNewBuild`, `isPartHouse`, `isPartYard`, `appointment_id`, `rieltor_id`, `slug`, `owner_id`, `created_at`, `updated_at`) VALUES
(1, 'Офіс на Довженка', 'Офіс під будь який вид діялності', '200.00', 4, '30.00', 1, 'office.png', 0, 2, 5, 1, 1, 'Автономне', 0, 0, 0, 12, 2, 'office-on-dovzenka', 1, '2021-04-03 23:33:59', NULL),
(3, 'Квартира', 'Офіс під будь який вид діялності', '200.00', 1, '50.00', 1, 'flat.png', 1, 2, 12, 1, 1, 'Центральне', 0, 0, 0, 12, 2, 'flat-1', 1, '2021-04-12 23:34:02', NULL),
(4, 'Будинок', 'Офіс під будь який вид діялності', '1450.00', 2, '130.00', 2, 'house.png', 1, 5, 2, 0, 1, 'Автономне', 0, 0, 0, 12, 2, 'house', 1, '2021-04-20 23:34:05', NULL),
(5, 'Земля', 'Офіс під будь який вид діялності', '12200.00', 3, '300.00', 3, 'land.png', 1, 0, 0, 0, 0, 'no name', 0, 0, 0, 12, 2, 'land', 1, '2021-04-24 23:34:08', NULL),
(6, 'Комерційна нерухомість', 'Офіс під будь який вид діялності', '600.00', 1, '110.00', 1, 'com.png', 1, 3, 5, 3, 1, 'Автономне', 0, 0, 0, 12, 2, 'commercial-estate', 1, '2021-04-25 23:34:11', NULL),
(7, 'Офіс на Площі', 'Офіс під будь який вид діялності', '500.00', 4, '30.00', 1, 'office.png', 0, 2, 5, 1, 1, 'Центральне', 0, 0, 0, 12, 2, 'office', 1, '2021-04-26 23:34:14', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `owner`
--

CREATE TABLE `owner` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `phone` int(12) NOT NULL,
  `address` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `owner`
--

INSERT INTO `owner` (`id`, `name`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Bob Jefri', 990010000, 'Житомир, вул.Київська 88', '2021-04-28 12:49:15', '2021-04-28 12:49:15');

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` int(11) NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'avatar.png',
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `is_admin`, `email_verified_at`, `password`, `avatar`, `phone`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@dom-zt.com', 1, NULL, '$2y$10$seRtjZqJ1587f1Zvw5DmEeFS8o4lq8/JVSOUaIQAGhDrvtMxItzCK', 'avatar.png', '098-000-0001', NULL, '2021-04-26 18:55:07', '2021-04-26 18:55:07'),
(2, 'Rieltor', 'rieltor@dom-zt.com', 0, NULL, '$2y$10$ho5KIuJxj.osCd2i/5DXZ.xx/GAXpb3V/tM2L76Ohr9UXV2trN11W', 'avatar.png', '098-000-0002', NULL, '2021-04-26 18:55:07', '2021-04-26 18:55:07');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `blog_article`
--
ALTER TABLE `blog_article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_article_category_id_index` (`category_id`),
  ADD KEY `blog_article_author_id_index` (`author_id`);

--
-- Индексы таблицы `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `files_obekt_id_index` (`obekt_id`);

--
-- Индексы таблицы `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`),
  ADD KEY `location_region_id_index` (`region_id`),
  ADD KEY `location_rayon_id_index` (`rayon_id`),
  ADD KEY `location_city_id_index` (`city_id`),
  ADD KEY `location_city_rayon_id_index` (`city_rayon_id`);

--
-- Индексы таблицы `location_city`
--
ALTER TABLE `location_city`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `location_city_rayon`
--
ALTER TABLE `location_city_rayon`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `location_rayon`
--
ALTER TABLE `location_rayon`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `location_region`
--
ALTER TABLE `location_region`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_2` (`id`),
  ADD KEY `note_obekt_id_index` (`obekt_id`),
  ADD KEY `note_user_id_index` (`user_id`),
  ADD KEY `id` (`id`);

--
-- Индексы таблицы `obekts`
--
ALTER TABLE `obekts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `obekts_category_id_index` (`category_id`),
  ADD KEY `obekts_location_id_index` (`location_id`),
  ADD KEY `obekts_appointment_id_index` (`appointment_id`),
  ADD KEY `obekts_rieltor_id_index` (`rieltor_id`),
  ADD KEY `owner_id` (`owner_id`);

--
-- Индексы таблицы `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `blog_article`
--
ALTER TABLE `blog_article`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `location`
--
ALTER TABLE `location`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `location_city`
--
ALTER TABLE `location_city`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `location_city_rayon`
--
ALTER TABLE `location_city_rayon`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `location_rayon`
--
ALTER TABLE `location_rayon`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT для таблицы `location_region`
--
ALTER TABLE `location_region`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `note`
--
ALTER TABLE `note`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `obekts`
--
ALTER TABLE `obekts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `owner`
--
ALTER TABLE `owner`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `blog_article`
--
ALTER TABLE `blog_article`
  ADD CONSTRAINT `blog_article_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `blog_article_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `blog_category` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `files`
--
ALTER TABLE `files`
  ADD CONSTRAINT `files_obekt_id_foreign` FOREIGN KEY (`obekt_id`) REFERENCES `obekts` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `location`
--
ALTER TABLE `location`
  ADD CONSTRAINT `location_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `location_city` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `location_city_rayon_id_foreign` FOREIGN KEY (`city_rayon_id`) REFERENCES `location_city_rayon` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `location_rayon_id_foreign` FOREIGN KEY (`rayon_id`) REFERENCES `location_rayon` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `location_region_id_foreign` FOREIGN KEY (`region_id`) REFERENCES `location_region` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `note`
--
ALTER TABLE `note`
  ADD CONSTRAINT `note_obekt_id_foreign` FOREIGN KEY (`obekt_id`) REFERENCES `obekts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `note_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `obekts`
--
ALTER TABLE `obekts`
  ADD CONSTRAINT `obekts_appointment_id_foreign` FOREIGN KEY (`appointment_id`) REFERENCES `appointment` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `obekts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `obekts_ibfk_1` FOREIGN KEY (`owner_id`) REFERENCES `owner` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `obekts_location_id_foreign` FOREIGN KEY (`location_id`) REFERENCES `location` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `obekts_rieltor_id_foreign` FOREIGN KEY (`rieltor_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
