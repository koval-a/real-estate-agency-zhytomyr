-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 04, 2021 at 01:50 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `dom_zt`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
                               `id` bigint(20) UNSIGNED NOT NULL,
                               `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
                               `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
                               `created_at` timestamp NULL DEFAULT NULL,
                               `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `name`, `type`, `created_at`, `updated_at`) VALUES
(17, 'Земля сільськогосподарського призначення ', 'land', NULL, NULL),
(18, 'Земля житлової й суспільної забудови ', 'land', NULL, NULL),
(19, 'Земля оздоровчого призначення ', 'land', NULL, NULL),
(20, 'Земля рекреаційного призначення ', 'land', NULL, NULL),
(21, 'Земля лісового фонду ', 'land', NULL, NULL),
(22, 'Земля водного фонду ', 'land', NULL, NULL),
(23, 'Земля промисловості, транспорту та іншого призначення ', 'land', NULL, NULL),
(24, 'Земля запасу, резервного фонду та загального користування', 'land', NULL, NULL),
(25, 'Магазин', 'commercial-real-estate', NULL, NULL),
(26, 'Салон', 'commercial-real-estate', NULL, NULL),
(27, 'Ресторан/кафе/бар', 'commercial-real-estate', NULL, NULL),
(28, 'Кав’ярня', 'commercial-real-estate', NULL, NULL),
(29, 'Офісні приміщення ', 'commercial-real-estate', NULL, NULL),
(30, 'Склад/ангар ', 'commercial-real-estate', NULL, NULL),
(31, 'Окремі будівлі ', 'commercial-real-estate', NULL, NULL),
(32, 'Частина будівлі', 'commercial-real-estate', NULL, NULL),
(33, 'База відпочинку/готель', 'commercial-real-estate', NULL, NULL),
(34, 'Приміщення промислового призначення', 'commercial-real-estate', NULL, NULL),
(35, 'МАФ', 'commercial-real-estate', NULL, NULL),
(36, 'Торгова точка на ринку', 'commercial-real-estate', NULL, NULL),
(37, 'АЗС', 'commercial-real-estate', NULL, NULL),
(38, 'Автомийка', 'commercial-real-estate', NULL, NULL),
(39, 'Шиномонтаж', 'commercial-real-estate', NULL, NULL),
(40, 'СТО (станція тех. обслуговування)', 'commercial-real-estate', NULL, NULL),
(41, 'Фермерське господарство', 'commercial-real-estate', NULL, NULL),
(42, 'Інше', 'commercial-real-estate', NULL, NULL),
(43, '-none-', 'none', NULL, NULL),
(44, 'Будинок', 'house', NULL, NULL),
(45, 'Частина будинку (власний двір)', 'house', NULL, NULL),
(46, 'Частина будинку (спільний двір)', 'house', NULL, NULL),
(47, 'Клубний будинок', 'house', NULL, NULL),
(48, 'Котедж', 'house', NULL, NULL),
(49, 'Дача', 'house', NULL, NULL),
(50, 'Таунхаус', 'house', NULL, NULL),
(51, 'Новобудова', 'flat', NULL, NULL),
(52, 'Сталінка', 'flat', NULL, NULL),
(53, 'Хрущовка', 'flat', NULL, NULL),
(54, 'Чешка', 'flat', NULL, NULL),
(55, 'Гуртожиток', 'flat', NULL, NULL),
(56, 'Житловий фонд 80-90-і', 'flat', NULL, NULL),
(57, 'Житловий фонд 91—2000-і', 'flat', NULL, NULL),
(58, 'Житловий фонд 2001-2010-і', 'flat', NULL, NULL),
(59, 'Житловий фонд від 2011 року', 'flat', NULL, NULL),
(60, 'На етапі будівництва ', 'flat', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_article`
--

CREATE TABLE `blog_article` (
                                `id` bigint(20) UNSIGNED NOT NULL,
                                `picture` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'blog.jpeg',
                                `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
                                `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
                                `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
                                `category_id` bigint(20) UNSIGNED NOT NULL,
                                `author_id` bigint(20) UNSIGNED NOT NULL,
                                `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
                                `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_article`
--

INSERT INTO `blog_article` (`id`, `picture`, `title`, `text`, `slug`, `category_id`, `author_id`, `created_at`, `updated_at`) VALUES
(10, 'blog.jpeg', 'Test blog ro delete', 'tebfjk gjksffsdf s;flksfijs df [sghbusgh asdhgs\'a f sdfnsdg\r\n sdhdfgk sfsdklf skf apfo iakdpasd\r\n jghsdkjf s fj[padfji ruthokauh f\'a\r\nf ghdkfsdfghsdk kffskdjgjksdljfsh fhsdklfjsldfh a\'ofh asfjseihjeo jdfnasklf basjfk sihf \r\njgb dlf a;jf argmsl ghsrighwopehgsd jijffjfj \'a. \' f\\f o', 'test-blog-article-2-for-delete', 2, 1, '2021-05-28 19:15:38', '2021-05-28 19:15:38'),
(11, '1622304286.jpg', 'Test', 'asd', 'ads', 2, 1, '2021-05-29 13:04:46', '2021-05-29 13:04:46'),
(13, 'blog.jpeg', 'ads', 'asdasda', 'asdasdasdasdasd', 2, 1, '2021-05-29 13:07:14', '2021-05-29 13:07:14');

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE `blog_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_category`
--

INSERT INTO `blog_category` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Новини', 'news', NULL, NULL),
(2, 'Статті', 'article', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Квартира', 'flat', NULL, NULL),
(2, 'Будинок', 'house', NULL, NULL),
(3, 'Земельна ділянка', 'land', NULL, NULL),
(4, 'Комерційна нерухомість', 'commercial-real-estate', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `obekt_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `url_img`, `obekt_id`, `created_at`, `updated_at`) VALUES
(9, '/files/images/obekts/flat/kvartira-na-global/1622811214-falt-3.png', 30, '2021-06-04 09:53:34', '2021-06-04 09:53:34'),
(10, '/files/images/obekts/flat/kvartira-na-global/1622811214-flat-2.png', 30, '2021-06-04 09:53:34', '2021-06-04 09:53:34'),
(11, '/files/images/obekts/flat/kvartira-na-global/1622811214-flat-4.png', 30, '2021-06-04 09:53:34', '2021-06-04 09:53:34'),
(12, '/files/images/obekts/house/budinok-vlasnij/1622812741-house-2.png', 33, '2021-06-04 10:19:01', '2021-06-04 10:19:01'),
(13, '/files/images/obekts/house/budinok-vlasnij/1622812741-house-3.png', 33, '2021-06-04 10:19:01', '2021-06-04 10:19:01'),
(14, '/files/images/obekts/house/budinok-vlasnij/1622812741-house-4.png', 33, '2021-06-04 10:19:01', '2021-06-04 10:19:01'),
(15, '/files/images/obekts/house/budinok-vlasnij/1622812741-house-5.png', 33, '2021-06-04 10:19:01', '2021-06-04 10:19:01'),
(16, '/files/images/obekts/land/zemlya-dlya-kartoshki/1622813329-land-2.png', 35, '2021-06-04 10:28:49', '2021-06-04 10:28:49'),
(17, '/files/images/obekts/land/zemlya-dlya-kartoshki/1622813329-land-3.png', 35, '2021-06-04 10:28:49', '2021-06-04 10:28:49'),
(18, '/files/images/obekts/commercial-real-estate/of-s/1622814163-com-2.png', 37, '2021-06-04 10:42:43', '2021-06-04 10:42:43'),
(19, '/files/images/obekts/commercial-real-estate/of-s/1622814163-com-3.png', 37, '2021-06-04 10:42:43', '2021-06-04 10:42:43'),
(20, '/files/images/obekts/commercial-real-estate/of-s/1622814163-com-4.png', 37, '2021-06-04 10:42:43', '2021-06-04 10:42:43');

-- --------------------------------------------------------

--
-- Table structure for table `location`
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
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `region_id`, `rayon_id`, `city_id`, `city_rayon_id`, `street`, `note`, `created_at`, `updated_at`) VALUES
(66, 1, 51, 93, 14, 'Мистецькі ворота 14', 'біля Арки', '2021-06-04 09:53:34', '2021-06-04 09:53:34'),
(67, 1, 51, 93, 12, 'Київська 77', '12', '2021-06-04 10:14:17', '2021-06-04 10:14:17'),
(68, 1, 54, 93, 34, 'trytry', '21', '2021-06-04 10:16:07', '2021-06-04 10:16:07'),
(69, 1, 75, 31, 34, 'вулиця назва', 'за поворотом на право', '2021-06-04 10:18:32', '2021-06-04 10:18:32'),
(70, 1, 75, 31, 34, 'вулиця назва', 'за поворотом на право', '2021-06-04 10:19:01', '2021-06-04 10:19:01'),
(71, 1, 61, 93, 34, 'Вулиця 12', 'нотатки', '2021-06-04 10:26:43', '2021-06-04 10:26:43'),
(72, 1, 75, 6, 34, '-', 'За селом', '2021-06-04 10:28:49', '2021-06-04 10:28:49'),
(73, 1, 75, 16, 34, 'вул.Центральна 12', 'в околиці села', '2021-06-04 10:38:23', '2021-06-04 10:38:23'),
(74, 1, 51, 93, 24, 'текст 4', 'текст', '2021-06-04 10:42:19', '2021-06-04 10:42:19'),
(75, 1, 51, 93, 24, 'текст 4', 'текст', '2021-06-04 10:42:43', '2021-06-04 10:42:43'),
(76, 1, 51, 93, 14, 'Перемоги 12', 'біля ТЦ', '2021-06-04 10:49:24', '2021-06-04 10:49:24');

-- --------------------------------------------------------

--
-- Table structure for table `location_city`
--

CREATE TABLE `location_city` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `location_city`
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
-- Table structure for table `location_city_rayon`
--

CREATE TABLE `location_city_rayon` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rayon_city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `location_city_rayon`
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
-- Table structure for table `location_rayon`
--

CREATE TABLE `location_rayon` (
                                  `id` bigint(20) UNSIGNED NOT NULL,
                                  `rayon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
                                  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
                                  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `location_rayon`
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
-- Table structure for table `location_region`
--

CREATE TABLE `location_region` (
                                   `id` bigint(20) UNSIGNED NOT NULL,
                                   `region` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
                                   `created_at` timestamp NULL DEFAULT NULL,
                                   `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `location_region`
--

INSERT INTO `location_region` (`id`, `region`, `created_at`, `updated_at`) VALUES
(1, 'Житомирська область', NULL, NULL);

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
-- Table structure for table `note`
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

-- --------------------------------------------------------

--
-- Table structure for table `obekts`
--

CREATE TABLE `obekts` (
                          `id` bigint(20) UNSIGNED NOT NULL,
                          `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
                          `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
                          `price` decimal(12,2) NOT NULL,
                          `category_id` bigint(20) UNSIGNED NOT NULL,
                          `square` decimal(12,2) NOT NULL,
                          `location_id` bigint(20) UNSIGNED NOT NULL,
                          `rayon_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
                          `city_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
                          `main_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
                          `isPublic` tinyint(1) NOT NULL,
                          `count_room` int(11) NOT NULL,
                          `count_level` int(11) NOT NULL,
                          `level` int(11) NOT NULL,
                          `opalenyaName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no name',
                          `appointment_id` bigint(20) UNSIGNED NOT NULL,
                          `rieltor_id` bigint(20) UNSIGNED NOT NULL,
                          `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
                          `owner_id` bigint(20) UNSIGNED NOT NULL,
                          `isPay` tinyint(4) NOT NULL,
                          `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
                          `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `obekts`
--

INSERT INTO `obekts` (`id`, `name`, `description`, `price`, `category_id`, `square`, `location_id`, `rayon_name`, `city_name`, `main_img`, `isPublic`, `count_room`, `count_level`, `level`, `opalenyaName`, `appointment_id`, `rieltor_id`, `slug`, `owner_id`, `isPay`, `created_at`, `updated_at`) VALUES
(30, 'Квартира на Глобалі', 'Квартира на Глобалі в новостройці біля арки.', '76400.00', 1, '65.00', 66, 'м.Житомир', 'Центр', '/files/images/obekts/flat/kvartira-na-global/1622811214.png', 1, 3, 12, 5, 'Автономне', 51, 7, 'kvartira-na-global', 6, 0, '2021-06-04 09:53:34', '2021-06-04 09:53:34'),
(31, 'Квартира на Київський', 'Квартира на Київський Квартира на Київський', '34777.00', 1, '45.00', 67, 'м.Житомир', 'Мальованка', '/files/images/obekts/flat/kvartira-na-ki-vskij/1622812457.png', 1, 1, 5, 1, 'Централізоване', 53, 7, 'kvartira-na-ki-vskij', 5, 0, '2021-06-04 10:14:17', '2021-06-04 10:14:17'),
(32, 'ЖК \"ПАРК\" Квартира', 'квартира в парку від забудовника, власник, текст і тд.', '45222.00', 1, '34.00', 68, 'Черняхівський', '-', '/files/images/obekts/flat/zhk-park-kvartira/1622812567.png', 1, 3, 21, 5, 'Централізоване', 60, 6, 'zhk-park-kvartira', 4, 0, '2021-06-04 10:16:07', '2021-06-04 10:16:07'),
(33, 'Будинок Власний', 'Будинок для життя за містом', '45.00', 2, '123.00', 70, 'Житомирський', 'c. Вершина', '/files/images/obekts/house/budinok-vlasnij/1622812741.png', 1, 3, 2, 0, 'Централізоване', 48, 7, 'budinok-vlasnij', 7, 0, '2021-06-04 10:19:01', '2021-06-04 10:19:01'),
(34, 'Будинок 34 дорога', 'Будинок класний, сусіди прекрасні, купуйте скоріше.', '189564.00', 2, '230.00', 71, 'Андрушівський', '-', '/files/images/obekts/house/budinok-34-doroga/1622813203.png', 1, 4, 2, 0, 'Автономне', 44, 6, 'budinok-34-doroga', 4, 0, '2021-06-04 10:26:43', '2021-06-04 10:26:43'),
(35, 'Земля для картошки', 'Земельна ділянки вирощування картоплі', '340900.00', 3, '234.00', 72, 'Житомирський', 'c. Лісівщина', '/files/images/obekts/land/zemlya-dlya-kartoshki/1622813329.png', 1, 0, 0, 0, 'none', 17, 7, 'zemlya-dlya-kartoshki', 8, 0, '2021-06-04 10:28:49', '2021-06-04 10:28:49'),
(36, 'Земля для озера', 'Для будівництва озера із прибрежною інфраструктурою.', '56000.00', 3, '500.00', 73, 'Житомирський', 'c. Вигода', '/files/images/obekts/land/zemlya-dlya-ozera/1622813903.png', 1, 0, 0, 0, 'none', 22, 7, 'zemlya-dlya-ozera', 9, 0, '2021-06-04 10:38:23', '2021-06-04 10:38:23'),
(37, 'Офіс', 'Офіс з ремонтом, меблями, гарні сусіди.', '390111.00', 4, '300.00', 75, 'м.Житомир', 'Глобал', '/files/images/obekts/commercial-real-estate/of-s/1622814163.png', 1, 0, 0, 0, 'Централізоване', 29, 7, 'of-s', 10, 0, '2021-06-04 10:42:43', '2021-06-04 10:42:43'),
(38, 'Магазин', 'Магазин в центрі 120метрів + ремонт. Підвальне приміщення.', '121300.00', 4, '120.00', 76, 'м.Житомир', 'Центр', '/files/images/obekts/commercial-real-estate/magazin/1622814564.png', 1, 0, 0, 0, 'Автономне', 25, 7, 'magazin', 4, 0, '2021-06-04 10:49:24', '2021-06-04 10:49:24');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
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
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`id`, `name`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(4, 'Alen Delon', 980091202, 'Київська 77', '2021-05-28 17:37:34', '2021-05-28 17:37:34'),
(5, 'John Doe', 675785994, 'Щорса 12', '2021-05-28 17:38:20', '2021-05-28 17:38:20'),
(6, 'Імя Прізвище', 980091209, 'Київська 67', '2021-06-04 09:53:34', '2021-06-04 09:53:34'),
(7, 'Мойша Ротенберг', 990019910, 'Одеса, пр.Буьвар 4', '2021-06-04 10:19:01', '2021-06-04 10:19:01'),
(8, 'Іван Житомирський', 990023030, 'Житомир Щорса 12', '2021-06-04 10:28:49', '2021-06-04 10:28:49'),
(9, 'Bob Dreqk', 980042020, 'USA, CA. 58420', '2021-06-04 10:38:23', '2021-06-04 10:38:23'),
(10, 'Жорж Центральний', 990019911, 'вул. Київська 89', '2021-06-04 10:42:43', '2021-06-04 10:42:43');

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
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
                            `id` bigint(20) NOT NULL,
                            `name` text NOT NULL,
                            `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
                            `updatede_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `is_admin`, `email_verified_at`, `password`, `avatar`, `phone`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@dom-zt.com', 1, NULL, '$2y$10$seRtjZqJ1587f1Zvw5DmEeFS8o4lq8/JVSOUaIQAGhDrvtMxItzCK', 'avatar.png', '098-000-0001', NULL, '2021-04-26 18:55:07', '2021-04-26 18:55:07'),
(5, 'Артем Коваль', 'a.koval@dom-zt.com', 0, NULL, '$2y$10$ow.QH6GNqZ4Z2HBlqLwPCeZVABwIXpWNB3H.MBkrgpEeRZriIwSWK', '1621604759.png', '099-000-00-99', NULL, '2021-05-21 10:45:59', '2021-05-21 10:45:59'),
(6, 'Анна', 'ann@dom-zt.com', 0, NULL, '$2y$10$gIpsYXyX6u/b8Zdb5UiTnusi8wlG.AbfQFkWErDO9KK7lQQRDxAdG', '1621606721.png', '098-122-2221', NULL, '2021-05-21 11:18:41', '2021-05-21 11:18:41'),
(7, 'Ім\'я Прізвище', 'mail@dom-zt.com', 0, NULL, '$2y$10$3mZFMat.4WgkQ/n26jVuau5emNgtgATDBB8XmHA6vNLXZ2noe85w.', '1621607029.png', '098-1202-3011', NULL, '2021-05-21 11:23:49', '2021-05-21 11:23:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_article`
--
ALTER TABLE `blog_article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_article_category_id_index` (`category_id`),
  ADD KEY `blog_article_author_id_index` (`author_id`);

--
-- Indexes for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `files_obekt_id_index` (`obekt_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`),
  ADD KEY `location_region_id_index` (`region_id`),
  ADD KEY `location_rayon_id_index` (`rayon_id`),
  ADD KEY `location_city_id_index` (`city_id`),
  ADD KEY `location_city_rayon_id_index` (`city_rayon_id`);

--
-- Indexes for table `location_city`
--
ALTER TABLE `location_city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location_city_rayon`
--
ALTER TABLE `location_city_rayon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location_rayon`
--
ALTER TABLE `location_rayon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location_region`
--
ALTER TABLE `location_region`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_2` (`id`),
  ADD KEY `note_obekt_id_index` (`obekt_id`),
  ADD KEY `note_user_id_index` (`user_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `obekts`
--
ALTER TABLE `obekts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `obekts_category_id_index` (`category_id`),
  ADD KEY `obekts_location_id_index` (`location_id`),
  ADD KEY `obekts_appointment_id_index` (`appointment_id`),
  ADD KEY `obekts_rieltor_id_index` (`rieltor_id`),
  ADD KEY `owner_id` (`owner_id`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `blog_article`
--
ALTER TABLE `blog_article`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `location_city`
--
ALTER TABLE `location_city`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `location_city_rayon`
--
ALTER TABLE `location_city_rayon`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `location_rayon`
--
ALTER TABLE `location_rayon`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `location_region`
--
ALTER TABLE `location_region`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `note`
--
ALTER TABLE `note`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `obekts`
--
ALTER TABLE `obekts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog_article`
--
ALTER TABLE `blog_article`
  ADD CONSTRAINT `blog_article_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `blog_article_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `blog_category` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `files`
--
ALTER TABLE `files`
  ADD CONSTRAINT `files_obekt_id_foreign` FOREIGN KEY (`obekt_id`) REFERENCES `obekts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `location`
--
ALTER TABLE `location`
  ADD CONSTRAINT `location_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `location_city` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `location_city_rayon_id_foreign` FOREIGN KEY (`city_rayon_id`) REFERENCES `location_city_rayon` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `location_rayon_id_foreign` FOREIGN KEY (`rayon_id`) REFERENCES `location_rayon` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `location_region_id_foreign` FOREIGN KEY (`region_id`) REFERENCES `location_region` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `note`
--
ALTER TABLE `note`
  ADD CONSTRAINT `note_obekt_id_foreign` FOREIGN KEY (`obekt_id`) REFERENCES `obekts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `note_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `obekts`
--
ALTER TABLE `obekts`
  ADD CONSTRAINT `obekts_appointment_id_foreign` FOREIGN KEY (`appointment_id`) REFERENCES `appointment` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `obekts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `obekts_ibfk_1` FOREIGN KEY (`owner_id`) REFERENCES `owner` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `obekts_location_id_foreign` FOREIGN KEY (`location_id`) REFERENCES `location` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `obekts_rieltor_id_foreign` FOREIGN KEY (`rieltor_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
