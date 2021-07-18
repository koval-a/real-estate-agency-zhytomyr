-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 18, 2021 at 05:26 PM
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
(60, 'На етапі будівництва ', 'flat', NULL, NULL),
(61, 'Частина будинку', 'house', NULL, NULL);

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
(1, 'blog.jpeg', 'Quo et quo sint ex et.', 'Vel vel voluptatem harum ut ipsum unde dolorum. Temporibus fugiat ducimus blanditiis accusamus. Officia dolor quae accusantium magnam alias nam est. Quidem suscipit iure eius commodi nam.', 'velit-sed-occaecati-totam-ab-minus-vero-corrupti-ad', 3, 1, '2021-07-10 08:05:59', '2021-07-10 08:05:59'),
(2, 'blog.jpeg', 'Sint est iste quis.', 'Sint voluptas culpa omnis recusandae. Id dolor eveniet velit ea. Voluptas aspernatur nostrum explicabo unde quisquam.', 'ut-qui-quos-temporibus-libero-architecto-voluptatem', 5, 1, '2021-07-10 08:05:59', '2021-07-10 08:05:59'),
(3, 'blog.jpeg', 'Sed aspernatur sed labore.', 'Id commodi impedit et provident. Libero expedita nulla nemo voluptatem. Doloremque optio reiciendis et ipsa itaque ut corrupti. Qui voluptates error neque qui quos.', 'ut-aperiam-distinctio-quam-veritatis-in-quibusdam', 1, 1, '2021-07-10 08:05:59', '2021-07-10 08:05:59'),
(4, 'blog.jpeg', 'Voluptatum qui enim ut omnis.', 'Autem laboriosam illo et magni quod blanditiis. Molestiae blanditiis distinctio quo. Eum id velit reprehenderit vero incidunt. Magni et eligendi aut rerum et consectetur.', 'velit-autem-eum-ut', 1, 1, '2021-07-10 08:05:59', '2021-07-10 08:05:59'),
(5, 'blog.jpeg', 'Est impedit nam ut omnis.', 'Aut repudiandae non nostrum est sint ut. Esse dolor culpa quia adipisci esse cumque consectetur. Sit dolorem ut non placeat incidunt.', 'repudiandae-temporibus-expedita-voluptas-ullam', 4, 1, '2021-07-10 08:05:59', '2021-07-10 08:05:59'),
(6, 'blog.jpeg', 'Doloribus sed odit culpa.', 'Dicta sint qui corporis dolorum facilis officiis. Tenetur porro nostrum quo cupiditate. Nobis ut deleniti repudiandae sit corrupti tempora.', 'nam-quaerat-molestiae-cupiditate', 4, 1, '2021-07-10 08:05:59', '2021-07-10 08:05:59'),
(7, 'blog.jpeg', 'Quia atque qui sit suscipit.', 'Dolor ea nemo quisquam nihil. Non eum at corrupti ipsa eveniet. Et velit illo quo et porro.', 'ratione-praesentium-sint-iure-aut', 2, 1, '2021-07-10 08:05:59', '2021-07-10 08:05:59'),
(8, 'blog.jpeg', 'Vitae quos et et eveniet vel.', 'Ea beatae est aliquam quidem. Consequuntur amet commodi praesentium sint. Quod omnis quibusdam commodi provident. Blanditiis corrupti ipsam id facere cumque recusandae dicta.', 'accusantium-rerum-ab-voluptas', 1, 1, '2021-07-10 08:05:59', '2021-07-10 08:05:59'),
(9, 'blog.jpeg', 'Consequatur quam nihil illum.', 'Voluptate et illo qui aut porro accusamus nostrum. Officiis possimus eligendi in accusantium commodi. Fugit incidunt quia magni temporibus officia.', 'explicabo-unde-dolore-quia-odio', 5, 1, '2021-07-10 08:05:59', '2021-07-10 08:05:59'),
(10, 'blog.jpeg', 'Sit velit labore nihil.', 'Et atque et qui quos. Quia tempora ut harum tempora et est voluptas maiores. Ipsum eum eos laudantium unde dolorum hic.', 'aut-aut-ut-qui', 2, 1, '2021-07-10 08:05:59', '2021-07-10 08:05:59'),
(11, 'blog.jpeg', 'Omnis et et harum molestiae.', 'Perspiciatis natus ex reiciendis iure et aliquid atque. Et quidem sit debitis iusto mollitia sed. In et sed officia fugiat illum. Repellat corporis excepturi voluptas dolores voluptatibus.', 'nemo-id-qui-blanditiis-aut-dolores-deleniti-velit', 5, 1, '2021-07-10 08:05:59', '2021-07-10 08:05:59'),
(12, 'blog.jpeg', 'Molestiae dolorem est totam.', 'Maiores temporibus sunt omnis ut ea quas sed sequi. Eum explicabo consectetur quos quo nostrum cum. Commodi velit explicabo velit fugit esse et.', 'cumque-placeat-iste-sit-et-inventore-debitis-voluptatem', 4, 1, '2021-07-10 08:05:59', '2021-07-10 08:05:59'),
(13, 'blog.jpeg', 'Aut aut maxime nesciunt sed.', 'Totam ex quia in at autem vel reiciendis. Aut sapiente est assumenda quod nesciunt quis delectus libero. Qui est alias illo non nam.', 'saepe-ipsa-repellendus-accusantium-et-et-sit', 3, 1, '2021-07-10 08:05:59', '2021-07-10 08:05:59'),
(14, 'blog.jpeg', 'Facilis et architecto non.', 'Libero ea iusto est tenetur ea perferendis. Quas et sit aut consequatur consequatur rerum amet.', 'tempora-consequatur-doloremque-quisquam-eveniet-deleniti', 2, 1, '2021-07-10 08:05:59', '2021-07-10 08:05:59'),
(15, 'blog.jpeg', 'Voluptatibus quis optio et.', 'Illum possimus rerum nulla. Sint voluptatem molestiae dolorem accusantium possimus ad. Ut cumque iusto quam.', 'voluptatibus-dignissimos-voluptatibus-nihil-aut-et-et', 4, 1, '2021-07-10 08:05:59', '2021-07-10 08:05:59'),
(16, 'blog.jpeg', 'Temporibus in cum beatae.', 'Accusamus velit saepe quo laudantium vel suscipit optio aut. Velit modi natus et voluptates dicta. Deleniti vel quia sint qui aut in. Blanditiis magnam consequatur velit quaerat.', 'necessitatibus-qui-maiores-provident-occaecati-sint', 4, 1, '2021-07-10 08:05:59', '2021-07-10 08:05:59'),
(17, 'blog.jpeg', 'Eaque molestiae modi rerum.', 'Dignissimos possimus ullam nostrum rerum voluptatem. Ducimus rerum dignissimos est consectetur omnis voluptatum ea. Maxime tenetur tempore error deserunt.', 'est-et-a-consectetur-qui-iusto', 2, 1, '2021-07-10 08:05:59', '2021-07-10 08:05:59'),
(18, 'blog.jpeg', 'Eveniet ullam et ad.', 'Qui ut nisi quas. Vero tempora quo corporis beatae maiores. Nulla quisquam animi atque architecto asperiores deleniti.', 'aut-eos-qui-amet-et-fugiat-ea-nesciunt-ut', 5, 1, '2021-07-10 08:05:59', '2021-07-10 08:05:59'),
(19, 'blog.jpeg', 'Eveniet dolores aliquid eum.', 'Excepturi culpa aut maiores odio itaque asperiores. Qui quasi neque aut. Commodi qui provident aut et occaecati in. Harum et beatae veritatis quia non.', 'voluptate-voluptates-deserunt-cumque-laudantium-laboriosam-et-consectetur', 3, 1, '2021-07-10 08:05:59', '2021-07-10 08:05:59'),
(20, 'blog.jpeg', 'Provident ducimus sunt modi.', 'Et quia dolor possimus veritatis ab voluptas nisi. Sunt omnis culpa doloremque similique. Velit officiis consequatur optio provident.', 'perspiciatis-labore-id-veritatis-dolore-dicta-recusandae-quod', 1, 1, '2021-07-10 08:05:59', '2021-07-10 08:05:59');

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
(2, 'Статті', 'article', NULL, NULL),
(3, 'Архітектура', 'architecture', NULL, NULL),
(4, 'Будівництво', 'сonstruction', NULL, NULL),
(5, 'Будівлі', 'buildings', NULL, NULL);

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
(2, 'Приватний сектор', 'house', NULL, NULL),
(3, 'Земельна ділянка', 'land', NULL, NULL),
(4, 'Комерційна нерухомість', 'commercial-real-estate', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
                            `id` int(11) NOT NULL,
                            `name` varchar(191) NOT NULL,
                            `email` varchar(191) NOT NULL,
                            `commnet` text NOT NULL,
                            `starts` int(11) NOT NULL DEFAULT '5',
                            `date` date NOT NULL,
                            `public` int(11) NOT NULL,
                            `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
                            `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `commnet`, `starts`, `date`, `public`, `created_at`, `updated_at`) VALUES
(1, 'John', 'user@email.com', 'Good', 5, '2021-07-17', 0, '2021-07-17 17:48:55', '2021-07-17 18:27:42'),
(2, 'Ann', 'user@email.com', 'BadLorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aut beatae doloremque error in maiores provident quas ratione reprehenderit veritatis. Consectetur enim facilis fuga, fugiat iste magni perspiciatis quaerat reiciendis?', 1, '2021-07-17', 1, '2021-07-17 17:50:45', '2021-07-17 17:50:45');

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
(33, 'Хінчанка', '2021-05-10 22:09:27', '2021-05-10 22:09:27');

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
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(12,2) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `location_rayon_id` bigint(20) UNSIGNED DEFAULT NULL,
  `location_city_id` bigint(20) UNSIGNED DEFAULT NULL,
  `location_city_rayon_id` bigint(20) UNSIGNED DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  `address` text COLLATE utf8mb4_unicode_ci,
  `square` decimal(12,2) NOT NULL,
  `main_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isPublic` tinyint(1) NOT NULL,
  `count_room` int(11) DEFAULT NULL,
  `count_level` int(11) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `opalenyaName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appointment_id` bigint(20) UNSIGNED NOT NULL,
  `rieltor_id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner_id` bigint(20) UNSIGNED NOT NULL,
  `isPay` tinyint(4) DEFAULT NULL,
  `type_wall_id` int(11) DEFAULT NULL,
  `square_hause_land` int(12) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `obekts`
--

INSERT INTO `obekts` (`id`, `name`, `description`, `price`, `category_id`, `location_rayon_id`, `location_city_id`, `location_city_rayon_id`, `note`, `address`, `square`, `main_img`, `isPublic`, `count_room`, `count_level`, `level`, `opalenyaName`, `appointment_id`, `rieltor_id`, `slug`, `owner_id`, `isPay`, `type_wall_id`, `square_hause_land`, `created_at`, `updated_at`) VALUES
(1001, 'Квартира 1', 'Опис', '324.00', 1, 51, NULL, 11, 'текст', 'вулиця назва', '234.00', '/files/images/default/obekt.jpeg', 1, 32, 34, 32, 'Автономне', 51, 32, 'kvartira-1', 1001, 0, 2, NULL, '2021-07-18 09:36:00', '2021-07-18 09:36:00'),
(1002, 'квартира 2', 'Опис', '32.00', 1, 54, NULL, NULL, NULL, NULL, '32.00', '/files/images/default/obekt.jpeg', 1, 32, 44, 32, 'Автономне', 54, 32, 'kvartira-2', 1001, 0, 4, NULL, '2021-07-18 09:36:37', '2021-07-18 09:36:37');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `phone` text NOT NULL,
  `address` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`id`, `name`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(1001, 'Жорж Центральний', '0990019911', NULL, '2021-07-18 09:36:00', '2021-07-18 09:36:00'),
(1002, 'John Doe', '09812222', NULL, '2021-07-18 09:37:47', '2021-07-18 09:37:47'),
(1003, 'Name Surname', '1231231231', NULL, '2021-07-18 09:37:55', '2021-07-18 09:37:55'),
(1004, 'test', '4567890', NULL, '2021-07-18 09:38:04', '2021-07-18 09:38:04'),
(1005, '213', '3809807', NULL, '2021-07-18 09:38:18', '2021-07-18 09:38:18');

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
-- Table structure for table `type_wall`
--

CREATE TABLE `type_wall` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatede_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type_wall`
--

INSERT INTO `type_wall` (`id`, `name`, `created_at`, `updatede_at`) VALUES
(1, 'Не обрано', '2021-06-20 19:34:22', '2021-06-20 19:34:22'),
(2, 'каркасний\r\n', '2021-06-20 19:34:38', '2021-06-20 19:34:38'),
(3, 'силікатна цегла\r\n', '2021-06-20 19:34:44', '2021-06-20 19:34:44'),
(4, 'панель\r\n', '2021-06-20 19:34:50', '2021-06-20 19:34:50'),
(5, 'піноблок\r\n', '2021-06-20 19:34:57', '2021-06-20 19:34:57'),
(6, 'моноліт\r\n', '2021-06-20 19:35:07', '2021-06-20 19:35:07'),
(7, 'ракушняк\r\n', '2021-06-20 19:35:12', '2021-06-20 19:35:12'),
(8, 'блочно-цегляний', '2021-06-20 19:35:19', '2021-06-20 19:35:19'),
(9, 'цегла\r\n', '2021-07-17 14:36:32', '2021-07-17 14:36:32');

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
(32, 'Артем Олексійович Павлюк', 'user@dom-zt.com', 0, '2021-07-10 08:09:11', '$2y$10$ogZdgIYTYOK4H9gj3HpUrukwAekXaiUA3F21stGyoF99fSVmEGRJS', 'avatar.png', '+380980228551', '9SRDhEiIjY7oBCfdFrQ4ACE2NpyS2tlc5pMoZ0EiLUubKudiCGG3RpF0WIMc', '2021-07-10 08:09:12', '2021-07-10 08:09:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

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
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `files_obekt_id_index` (`obekt_id`);

--
-- Indexes for table `location_city`
--
ALTER TABLE `location_city`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `location_city_rayon`
--
ALTER TABLE `location_city_rayon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `location_rayon`
--
ALTER TABLE `location_rayon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

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
  ADD KEY `obekts_appointment_id_index` (`appointment_id`),
  ADD KEY `obekts_rieltor_id_index` (`rieltor_id`),
  ADD KEY `owner_id` (`owner_id`),
  ADD KEY `id` (`id`),
  ADD KEY `type_wall_id` (`type_wall_id`),
  ADD KEY `location_rayon_id` (`location_rayon_id`),
  ADD KEY `location_city_id` (`location_city_id`),
  ADD KEY `location_ciity_rayon_id` (`location_city_rayon_id`);

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
-- Indexes for table `type_wall`
--
ALTER TABLE `type_wall`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `blog_article`
--
ALTER TABLE `blog_article`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `location_city`
--
ALTER TABLE `location_city`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `location_city_rayon`
--
ALTER TABLE `location_city_rayon`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `location_rayon`
--
ALTER TABLE `location_rayon`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1003;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1006;

--
-- AUTO_INCREMENT for table `type_wall`
--
ALTER TABLE `type_wall`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

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
-- Constraints for table `note`
--
ALTER TABLE `note`
  ADD CONSTRAINT `note_obekt_id_foreign` FOREIGN KEY (`obekt_id`) REFERENCES `obekts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `note_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `obekts`
--
ALTER TABLE `obekts`
  ADD CONSTRAINT `obekts_appointment_id_foreign` FOREIGN KEY (`appointment_id`) REFERENCES `appointment` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `obekts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `obekts_ibfk_1` FOREIGN KEY (`owner_id`) REFERENCES `owner` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `obekts_ibfk_2` FOREIGN KEY (`type_wall_id`) REFERENCES `type_wall` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `obekts_ibfk_3` FOREIGN KEY (`location_rayon_id`) REFERENCES `location_rayon` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `obekts_ibfk_4` FOREIGN KEY (`location_city_id`) REFERENCES `location_city` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `obekts_ibfk_5` FOREIGN KEY (`location_city_rayon_id`) REFERENCES `location_city_rayon` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `obekts_rieltor_id_foreign` FOREIGN KEY (`rieltor_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
