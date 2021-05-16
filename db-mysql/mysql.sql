-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:8889
-- Время создания: Май 15 2021 г., 23:30
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
(17, 'Земля сільськогосподарського призначення ', 'Земля', NULL, NULL),
(18, 'Земля житлової й суспільної забудови ', 'Земля', NULL, NULL),
(19, 'Земля оздоровчого призначення ', 'Земля', NULL, NULL),
(20, 'Земля рекреаційного призначення ', 'Земля', NULL, NULL),
(21, 'Земля лісового фонду ', 'Земля', NULL, NULL),
(22, 'Земля водного фонду ', 'Земля', NULL, NULL),
(23, 'Земля промисловості, транспорту та іншого призначення ', 'Земля', NULL, NULL),
(24, 'Земля запасу, резервного фонду та загального користування', 'Земля', NULL, NULL),
(25, 'Магазин', 'Комерційна нерухомість', NULL, NULL),
(26, 'Салон', 'Комерційна нерухомість', NULL, NULL),
(27, 'Ресторан/кафе/бар', 'Комерційна нерухомість', NULL, NULL),
(28, 'Кав’ярня', 'Комерційна нерухомість', NULL, NULL),
(29, 'Офісні приміщення ', 'Комерційна нерухомість', NULL, NULL),
(30, 'Склад/ангар ', 'Комерційна нерухомість', NULL, NULL),
(31, 'Окремі будівлі ', 'Комерційна нерухомість', NULL, NULL),
(32, 'Частина будівлі', 'Комерційна нерухомість', NULL, NULL),
(33, 'База відпочинку/готель', 'Комерційна нерухомість', NULL, NULL),
(34, 'Приміщення промислового призначення', 'Комерційна нерухомість', NULL, NULL),
(35, 'МАФ', 'Комерційна нерухомість', NULL, NULL),
(36, 'Торгова точка на ринку', 'Комерційна нерухомість', NULL, NULL),
(37, 'АЗС', 'Комерційна нерухомість', NULL, NULL),
(38, 'Автомийка', 'Комерційна нерухомість', NULL, NULL),
(39, 'Шиномонтаж', 'Комерційна нерухомість', NULL, NULL),
(40, 'СТО (станція тех. обслуговування)', 'Комерційна нерухомість', NULL, NULL),
(41, 'Фермерське господарство', 'Комерційна нерухомість', NULL, NULL),
(42, 'Інше', 'Комерційна нерухомість', NULL, NULL),
(43, '-none-', 'Квартира/Будинок', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `blog_article`
--

CREATE TABLE `blog_article` (
                                `id` bigint(20) UNSIGNED NOT NULL,
                                `picture` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
                                `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
                                `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
                                `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
                                `category_id` bigint(20) UNSIGNED NOT NULL,
                                `author_id` bigint(20) UNSIGNED NOT NULL,
                                `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
                                `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `blog_article`
--

INSERT INTO `blog_article` (`id`, `picture`, `title`, `text`, `slug`, `category_id`, `author_id`, `created_at`, `updated_at`) VALUES
(2, 'blog.jpeg', 'Blog Post 1', 'Text for test post in blog', 'test-blog', 1, 2, '2021-05-10 18:36:24', NULL),
(7, '1620689497.png', '123', '123', '123', 2, 1, '2021-05-10 20:31:37', '2021-05-10 20:31:37'),
(8, '1620690021.png', 'das', 'ads', 'asd', 2, 1, '2021-05-10 20:40:21', '2021-05-10 20:40:21'),
(9, '1620807969.png', 'Коваль Артем Володимирович', 'yrryryyr', '34567890', 2, 1, '2021-05-12 05:26:09', '2021-05-12 05:26:09');

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
                            `street` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
                            `note` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
                            `created_at` timestamp NULL DEFAULT NULL,
                            `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `location`
--

INSERT INTO `location` (`id`, `region_id`, `rayon_id`, `city_id`, `city_rayon_id`, `street`, `note`, `created_at`, `updated_at`) VALUES
(5, 1, 75, 30, 34, 'Київсбка 89', '3 поверх', NULL, NULL),
(6, 1, 51, 93, 24, 'Київська 89', '3 поверх', NULL, NULL);

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
(3, 'смт.Гуйва', NULL, NULL),
(4, 'c. Туровець', NULL, NULL),
(5, 'c. Мошківка', NULL, NULL),
(6, 'c. Лісівщина', NULL, NULL),
(7, 'c. Кринички', NULL, NULL),
(8, 'c. Грабівка', NULL, NULL),
(9, 'c. Троянів', NULL, NULL),
(10, 'c. Ставецьке', NULL, NULL),
(11, 'c. Бистрі', NULL, NULL),
(12, 'c. Двірець', NULL, NULL),
(13, 'c. Волиця', NULL, NULL),
(14, 'c. Вишневе', NULL, NULL),
(15, 'c. Садки', NULL, NULL),
(16, 'c. Вигода', NULL, NULL),
(17, 'c. Соснівка', NULL, NULL),
(18, 'c. Рудня-Городище', NULL, NULL),
(19, 'c. Роздольне', NULL, NULL),
(20, 'c. Гай', NULL, NULL),
(21, 'c. Скоморохи', NULL, NULL),
(22, 'c. Світин', NULL, NULL),
(23, 'c. Ружки', NULL, NULL),
(24, 'c. Павленківка', NULL, NULL),
(25, 'c. Озерянка', NULL, NULL),
(26, 'c. Червоний Степок', NULL, NULL),
(27, 'c. Миролюбівка', NULL, NULL),
(28, 'c. Леонівка', NULL, NULL),
(29, 'c. Млинище', NULL, NULL),
(30, 'c. Лука', NULL, NULL),
(31, 'c. Вершина', NULL, NULL),
(32, 'с. Тарасівка', NULL, NULL),
(33, 'с. Ліщин', NULL, NULL),
(34, 'с. Калинівка', NULL, NULL),
(35, 'с. Перлявка', NULL, NULL),
(36, 'с. Катеринівка', NULL, NULL),
(37, 'с. Новоселиця', NULL, NULL),
(38, 'с. Давидівка', NULL, NULL),
(39, 'с. Бондарці', NULL, NULL),
(40, 'с. Барашівка', NULL, NULL),
(41, 'с. Улянівка', NULL, NULL),
(42, 'с. Михайлівка', NULL, NULL),
(43, 'с. Залізня', NULL, NULL),
(44, 'с. Головенка', NULL, NULL),
(45, 'с. Нова Вигода', NULL, NULL),
(46, 'с. Гадзинка', NULL, NULL),
(47, 'с. Березина', NULL, NULL),
(48, 'с. Крута', NULL, NULL),
(49, 'с. Глибочок', NULL, NULL),
(50, 'с. Старошийка', NULL, NULL),
(51, 'с. Покостівка', NULL, NULL),
(52, 'с. Іванківці', NULL, NULL),
(53, 'с. Городище', NULL, NULL),
(54, 'с. Вертокиївка', NULL, NULL),
(55, 'с. Рудківка', NULL, NULL),
(56, 'с. Нова Василівка', NULL, NULL),
(57, 'с. Мусіївка', NULL, NULL),
(58, 'с. Василівка', NULL, NULL),
(59, 'с. Болярка', NULL, NULL),
(60, 'с. Руденька', NULL, NULL),
(61, 'с. Нова Рудня', NULL, NULL),
(62, 'с. Черемошне', NULL, NULL),
(63, 'с. Дубовець', NULL, NULL),
(64, 'с. Богданівка', NULL, NULL),
(65, 'с. Березівка', NULL, NULL),
(66, 'с. Рудня Пошта', NULL, NULL),
(67, 'с. Заможне', NULL, NULL),
(68, 'с. Левків', NULL, NULL),
(69, 'с. Клітчин', NULL, NULL),
(70, 'c. Сінгури', NULL, NULL),
(71, 'c. Пряжів', NULL, NULL),
(72, 'c. Піски', NULL, NULL),
(73, 'c. Тетерівка', NULL, NULL),
(74, 'c. Станишівка', NULL, NULL),
(75, 'c. Слобода-Селець', NULL, NULL),
(76, 'c. Піщанка', NULL, NULL),
(77, 'c. Оліївка', NULL, NULL),
(78, 'с. Корчак', NULL, NULL),
(79, 'с. Кодня', NULL, NULL),
(80, 'с. Сонячне', NULL, NULL),
(81, 'с. Кам\'янка', NULL, NULL),
(82, 'с. Довжик', NULL, NULL),
(83, 'с. Тригір\'я', NULL, NULL),
(84, 'с. Вереси', NULL, NULL),
(85, 'с. Буки', NULL, NULL),
(86, 'смт. Озерне', NULL, NULL),
(87, 'смт. Новогуйвинське', NULL, NULL),
(88, 'с. Іванівка', NULL, NULL),
(89, 'с. Зарічани', NULL, NULL),
(90, 'с. Дениші', NULL, NULL),
(91, 'с. Глибочиця', NULL, NULL),
(92, 'с. Висока Піч', NULL, NULL),
(93, '-none-', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `location_city_rayon`
--

CREATE TABLE `location_city_rayon` (
                                       `id` bigint(20) UNSIGNED NOT NULL,
                                       `rayon_city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
                                       `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
                                       `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `location_city_rayon`
--

INSERT INTO `location_city_rayon` (`id`, `rayon_city`, `created_at`, `updated_at`) VALUES
(10, 'Вокзал', '2021-05-10 22:06:20', '2021-05-10 22:06:20'),
(11, 'Крошня', '2021-05-10 22:09:27', '2021-05-10 22:09:27'),
(12, 'Мальованка', '2021-05-10 22:09:27', '2021-05-10 22:09:27'),
(13, 'Сінний ринок', '2021-05-10 22:09:27', '2021-05-10 22:09:27'),
(14, 'Центр', '2021-05-10 22:09:27', '2021-05-10 22:09:27'),
(15, 'Чулочна фабрика', '2021-05-10 22:09:27', '2021-05-10 22:09:27'),
(16, 'Аеропорт', '2021-05-10 22:09:27', '2021-05-10 22:09:27'),
(17, 'Житній ринок', '2021-05-10 22:09:27', '2021-05-10 22:09:27'),
(18, 'Корбутівка', '2021-05-10 22:09:27', '2021-05-10 22:09:27'),
(19, 'Музична фабрика', '2021-05-10 22:09:27', '2021-05-10 22:09:27'),
(20, 'Паперова фабрика', '2021-05-10 22:09:27', '2021-05-10 22:09:27'),
(21, 'Польова', '2021-05-10 22:09:27', '2021-05-10 22:09:27'),
(22, 'Промавтоматика', '2021-05-10 22:09:27', '2021-05-10 22:09:27'),
(23, 'Мар\'янівка', '2021-05-10 22:09:27', '2021-05-10 22:09:27'),
(24, 'Глобал', '2021-05-10 22:09:27', '2021-05-10 22:09:27'),
(25, 'Богунія', '2021-05-10 22:09:27', '2021-05-10 22:09:27'),
(26, 'Хмільники', '2021-05-10 22:09:27', '2021-05-10 22:09:27'),
(27, 'Промавтоматика', '2021-05-10 22:09:27', '2021-05-10 22:09:27'),
(28, 'Смолянка', '2021-05-10 22:09:27', '2021-05-10 22:09:27'),
(29, 'Східний', '2021-05-10 22:09:27', '2021-05-10 22:09:27'),
(30, 'Малікова', '2021-05-10 22:09:27', '2021-05-10 22:09:27'),
(31, 'Максютова', '2021-05-10 22:09:27', '2021-05-10 22:09:27'),
(32, 'ДОС', '2021-05-10 22:09:27', '2021-05-10 22:09:27'),
(33, 'Хінчанка', '2021-05-10 22:09:27', '2021-05-10 22:09:27'),
(34, '-', '2021-05-10 22:38:48', '2021-05-10 22:38:48');

-- --------------------------------------------------------

--
-- Структура таблицы `location_rayon`
--

CREATE TABLE `location_rayon` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rayon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `location_rayon`
--

INSERT INTO `location_rayon` (`id`, `rayon`, `created_at`, `updated_at`) VALUES
(51, 'м.Житомир', '2021-05-10 22:14:17', '2021-05-10 22:14:17'),
(52, 'Попільнянський', '2021-05-10 22:17:41', '2021-05-10 22:17:41'),
(53, 'Брусилівський', '2021-05-10 22:17:41', '2021-05-10 22:17:41'),
(54, 'Черняхівський', '2021-05-10 22:17:41', '2021-05-10 22:17:41'),
(55, 'Радомишльський', '2021-05-10 22:17:41', '2021-05-10 22:17:41'),
(56, 'Коростишівський', '2021-05-10 22:17:41', '2021-05-10 22:17:41'),
(57, 'Пулинський', '2021-05-10 22:17:41', '2021-05-10 22:17:41'),
(58, 'Любарський', '2021-05-10 22:17:41', '2021-05-10 22:17:41'),
(59, 'Романівський', '2021-05-10 22:17:41', '2021-05-10 22:17:41'),
(60, 'Хорошівський', '2021-05-10 22:17:41', '2021-05-10 22:17:41'),
(61, 'Андрушівський', '2021-05-10 22:17:41', '2021-05-10 22:17:41'),
(62, 'Чуднівський', '2021-05-10 22:17:41', '2021-05-10 22:17:41'),
(63, 'Олевський', '2021-05-10 22:17:41', '2021-05-10 22:17:41'),
(64, 'Овруцький', '2021-05-10 22:17:41', '2021-05-10 22:17:41'),
(65, 'Хорошівський', '2021-05-10 22:17:41', '2021-05-10 22:17:41'),
(66, 'Лугинський', '2021-05-10 22:17:41', '2021-05-10 22:17:41'),
(67, 'Народицький', '2021-05-10 22:17:41', '2021-05-10 22:17:41'),
(68, 'Баранівський', '2021-05-10 22:17:41', '2021-05-10 22:17:41'),
(69, 'Ємільчинський', '2021-05-10 22:17:41', '2021-05-10 22:17:41'),
(70, 'Малинський', '2021-05-10 22:17:41', '2021-05-10 22:17:41'),
(71, 'Новоград-Волинський', '2021-05-10 22:17:41', '2021-05-10 22:17:41'),
(72, 'Коростенський', '2021-05-10 22:17:41', '2021-05-10 22:17:41'),
(73, 'Бердичівський', '2021-05-10 22:17:41', '2021-05-10 22:17:41'),
(74, 'Ружинський', '2021-05-10 22:17:41', '2021-05-10 22:17:41'),
(75, 'Житомирський', '2021-05-10 22:37:06', '2021-05-10 22:37:06');

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
(5, '2021-05-10', 'Admin', 8, 1, NULL, NULL),
(6, '2021-05-11', 'Rieltor', 8, 2, NULL, NULL);

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
(8, 'Кваритира на Київській', 'Квартира трикімнатна на Київській, із автономним опаленням, 89м2.', '57000.00', 1, '89.00', 6, 'obekt.png', 1, 3, 5, 1, 1, 'Автономне', 0, 0, 0, 43, 1, 'flat-on-kievska', 1, '2021-05-10 22:43:16', '2021-05-10 22:43:16');

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
(1, 'Bob Jefri', 990010000, 'Житомир, вул.Київська 88', '2021-04-28 12:49:15', '2021-04-28 12:49:15'),
(2, 'wqe', 990010011, 'qeqew', '2021-05-08 20:31:26', '2021-05-08 20:31:26');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT для таблицы `blog_article`
--
ALTER TABLE `blog_article`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `location`
--
ALTER TABLE `location`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `location_city`
--
ALTER TABLE `location_city`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT для таблицы `location_city_rayon`
--
ALTER TABLE `location_city_rayon`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT для таблицы `location_rayon`
--
ALTER TABLE `location_rayon`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `owner`
--
ALTER TABLE `owner`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
