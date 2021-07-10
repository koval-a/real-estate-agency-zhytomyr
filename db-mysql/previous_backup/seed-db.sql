-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 09, 2021 at 03:51 PM
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
(40, 'blog.jpeg', 'Rem et suscipit voluptas.', 'Laudantium ut quia magnam aut voluptas ipsa in molestias. Commodi qui minus velit commodi omnis. Deserunt temporibus suscipit omnis nesciunt dolore impedit dolor omnis.', 'et-esse-delectus-mollitia-blanditiis-praesentium', 5, 1, '2021-07-08 20:27:33', '2021-07-08 20:27:33'),
(41, 'blog.jpeg', 'Aliquam possimus nesciunt ea.', 'Facere labore nemo temporibus. Quaerat hic corrupti facere. Animi laborum aliquam velit commodi quia enim.', 'porro-cupiditate-voluptatem-optio-quod-corrupti-impedit-voluptate-magni', 3, 1, '2021-07-08 20:27:33', '2021-07-08 20:27:33'),
(42, 'blog.jpeg', 'Quo illo est a aut id unde.', 'Possimus sed dolorem ipsa aut rerum id velit. Odio est non cum earum necessitatibus. Iusto dolores impedit omnis. Qui et omnis tempore quas sint.', 'ea-id-optio-a-numquam-aut-beatae-consequuntur', 5, 1, '2021-07-08 20:27:33', '2021-07-08 20:27:33'),
(43, 'blog.jpeg', 'Dolor quia eligendi id eius.', 'Numquam distinctio commodi est voluptatibus adipisci. Minus quo fugit debitis quia ab. Et eveniet est sint quia deleniti eum veniam. Quasi sint et quo voluptas sapiente autem quos.', 'quod-sint-sunt-aut-qui-et-quos', 3, 1, '2021-07-08 20:27:33', '2021-07-08 20:27:33'),
(44, 'blog.jpeg', 'In aut ipsam est eum.', 'Saepe laborum omnis ipsum omnis. Sint aut quo odio ut et nam illum. Sint at accusamus similique maiores eius facilis. Voluptas aut laudantium nemo ducimus.', 'sed-sapiente-provident-nulla', 4, 1, '2021-07-08 20:27:33', '2021-07-08 20:27:33'),
(45, 'blog.jpeg', 'Perferendis porro id qui.', 'Voluptatibus aut minus neque nam qui ut accusantium. Illo commodi provident rerum nesciunt accusamus cum. Quis ab ut eos voluptatem doloribus. Ipsa consequuntur est sed est eos qui porro.', 'possimus-qui-et-ab-labore-repudiandae-voluptas-placeat', 5, 1, '2021-07-08 20:27:33', '2021-07-08 20:27:33'),
(46, 'blog.jpeg', 'Est aperiam qui commodi quo.', 'Sequi assumenda eius aut sint pariatur quisquam. Dolore voluptas officiis adipisci maxime illum dolore et. Incidunt iure ad occaecati.', 'placeat-aut-qui-cupiditate', 5, 1, '2021-07-08 20:27:33', '2021-07-08 20:27:33'),
(47, 'blog.jpeg', 'Accusantium omnis ut nisi.', 'Nam officia saepe reprehenderit. In aliquam ipsa quia illo veritatis eum ex quo. Quaerat harum voluptas neque labore animi sint. Voluptas eos quasi quo maxime ut quae porro.', 'eos-labore-sunt-veniam-ut', 2, 1, '2021-07-08 20:27:33', '2021-07-08 20:27:33'),
(48, 'blog.jpeg', 'Ullam sunt aut corporis.', 'Minima et atque et adipisci et qui occaecati. Asperiores et incidunt cupiditate rerum deleniti. Et adipisci illo et cumque molestias facere.', 'sint-veritatis-amet-quibusdam', 2, 1, '2021-07-08 20:27:33', '2021-07-08 20:27:33'),
(49, 'blog.jpeg', 'Et ut sint eum nobis.', 'Et quibusdam velit sint ad quibusdam. Ut nobis porro voluptas omnis. Facere et in et sint.', 'porro-voluptatem-dolor-voluptas-nesciunt-et-vitae', 5, 1, '2021-07-08 20:27:33', '2021-07-08 20:27:33'),
(50, 'blog.jpeg', 'Vero est ratione et vero.', 'Inventore dolorem corrupti vel tempora aliquid nulla. Id aut et sit dicta. Ea est error et. Eius quibusdam aut quo distinctio.', 'animi-rem-ut-commodi-fugiat-amet', 3, 1, '2021-07-08 20:27:33', '2021-07-08 20:27:33'),
(51, 'blog.jpeg', 'Ab illum quia est impedit.', 'Nostrum omnis eum esse culpa nihil aut voluptatem. Tempore ullam veniam sit aut non nihil. Aut eaque ducimus sed illum nemo incidunt nemo. Velit qui beatae magnam voluptate. Qui enim dolorem eum repellendus qui.', 'molestias-iure-excepturi-quo-veniam', 2, 1, '2021-07-08 20:27:33', '2021-07-08 20:27:33'),
(52, 'blog.jpeg', 'Voluptate nam iste non.', 'Reiciendis aut tempora rerum quasi quo maxime. Voluptatem assumenda debitis voluptates. Consectetur ab natus odit voluptatibus delectus occaecati. Quibusdam cupiditate sed explicabo tempora earum et.', 'perspiciatis-consequatur-aliquid-tenetur-repudiandae', 5, 1, '2021-07-08 20:27:33', '2021-07-08 20:27:33'),
(53, 'blog.jpeg', 'Ab consectetur voluptas nemo.', 'Tempore ea nulla quos hic dignissimos. Incidunt nihil aliquid accusamus id velit.', 'deleniti-ad-tenetur-aut-qui-voluptates-voluptatibus-itaque', 1, 1, '2021-07-08 20:27:33', '2021-07-08 20:27:33'),
(54, 'blog.jpeg', 'Quo reiciendis est est iste.', 'Reprehenderit cum adipisci quia soluta unde provident. Tempore optio distinctio est neque quis quibusdam praesentium. Enim eaque sed aut optio.', 'molestiae-maiores-neque-sit-ut-iusto-architecto', 2, 1, '2021-07-08 20:27:33', '2021-07-08 20:27:33'),
(55, 'blog.jpeg', 'Eos aut magnam voluptates.', 'Aut voluptates est praesentium eos consequatur ea. Exercitationem natus et voluptates.', 'deserunt-quia-officia-aut-est-nesciunt-sed-ea', 2, 1, '2021-07-08 20:27:33', '2021-07-08 20:27:33'),
(56, 'blog.jpeg', 'Sunt aut quos maxime in.', 'Eum qui soluta et beatae sed laudantium. Cumque nulla dolores corrupti nostrum praesentium. Ipsa voluptatum occaecati quia pariatur. Est sit placeat non neque vitae provident dolorem.', 'eos-ullam-quis-officiis-id', 2, 1, '2021-07-08 20:27:33', '2021-07-08 20:27:33'),
(57, 'blog.jpeg', 'Explicabo quia alias qui.', 'Dolorem odio fuga sapiente aut est. Sed neque dolor aut odio. Nisi excepturi qui explicabo nostrum quia sed molestiae. Aspernatur quia officiis dignissimos qui laudantium esse.', 'ut-quibusdam-beatae-est-neque-dolor-velit', 5, 1, '2021-07-08 20:27:33', '2021-07-08 20:27:33'),
(58, 'blog.jpeg', 'Eos enim vitae ut voluptate.', 'Eveniet vero consequuntur odio dicta. Iste qui aliquid sit. Non est enim qui voluptas eos unde excepturi odit. Maxime sint asperiores rerum commodi commodi.', 'debitis-voluptatem-adipisci-tempora-rem-fuga-et-a-nostrum', 2, 1, '2021-07-08 20:27:33', '2021-07-08 20:27:33'),
(59, 'blog.jpeg', 'Enim aliquam sequi in quis.', 'Iusto maxime et aut. Ab praesentium amet rerum voluptatem. Eos numquam cumque fugiat quia incidunt. Sunt laborum ratione praesentium itaque neque sit.', 'et-inventore-harum-similique-necessitatibus', 3, 1, '2021-07-08 20:27:33', '2021-07-08 20:27:33');

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

--
-- Dumping data for table `note`
--

INSERT INTO `note` (`id`, `date_publish`, `note_text`, `obekt_id`, `user_id`, `created_at`, `updated_at`) VALUES
(2, '1971-05-29', 'Tenetur qui corporis voluptatem voluptates. Et vel cum dolorem aliquam sint ipsa. Culpa quo vero dolores. Ut sint tempore ut voluptate.', 88, 18, '2021-07-08 21:37:04', '2021-07-08 21:37:04'),
(6, '1988-11-02', 'Veniam aliquam cumque rerum ex ad. Quia porro temporibus soluta impedit ipsum soluta aspernatur. Veniam ratione magni tenetur at magnam omnis ipsa.', 100, 18, '2021-07-08 21:38:26', '2021-07-08 21:38:26'),
(7, '2006-01-23', 'Consequuntur sint at sit possimus quisquam. Rerum fugiat incidunt quod et odio aut consequuntur. Quaerat vel quod cum est illo et ipsa.', 99, 19, '2021-07-08 21:38:26', '2021-07-08 21:38:26'),
(8, '2007-06-12', 'Ut illo eum quia minus. In quae iure numquam esse iure quibusdam amet.', 98, 19, '2021-07-08 21:38:26', '2021-07-08 21:38:26'),
(9, '1973-03-03', 'Sed at iure quibusdam labore sed ab est. Repudiandae incidunt dolorem nemo. Unde non molestiae sequi tempora ex.', 82, 19, '2021-07-08 21:38:26', '2021-07-08 21:38:26'),
(10, '2011-06-21', 'Architecto corrupti sunt voluptas in consequatur. Voluptatem cum earum repellat dicta. Quia similique dolorem et dicta nesciunt. Magni earum quos dolorem incidunt placeat blanditiis veniam.', 94, 13, '2021-07-08 21:38:26', '2021-07-08 21:38:26'),
(11, '1982-10-03', 'Ratione a sed omnis explicabo. Aperiam totam modi exercitationem rerum qui qui.', 82, 14, '2021-07-08 21:38:26', '2021-07-08 21:38:26'),
(12, '1979-10-21', 'Eius ducimus reiciendis aut blanditiis delectus magnam vel minus. Voluptate ut qui qui laboriosam explicabo quia. Natus corrupti voluptatem nihil unde culpa quidem aut repudiandae. Doloribus sunt dolore aperiam aut qui dicta. Maxime exercitationem libero facere nam ut.', 55, 14, '2021-07-08 21:38:26', '2021-07-08 21:38:26'),
(13, '1977-08-04', 'Eligendi ut nam sunt eligendi repellendus animi sed. Ratione et quidem sunt a est. Maiores dignissimos omnis quis totam. Eius qui debitis exercitationem nulla est dolorem omnis. Beatae a ullam repellat qui qui maiores.', 89, 16, '2021-07-08 21:38:26', '2021-07-08 21:38:26'),
(14, '1983-09-25', 'Culpa aut quod rerum. Necessitatibus similique iure sed odit.', 96, 19, '2021-07-08 21:38:26', '2021-07-08 21:38:26'),
(15, '1988-07-29', 'Harum dignissimos architecto consequatur similique enim. Saepe pariatur consectetur natus consequuntur nulla et. Dolores et qui repellendus ipsam hic mollitia eaque.', 73, 17, '2021-07-08 21:38:26', '2021-07-08 21:38:26'),
(16, '1982-02-25', 'Eum et sint perferendis soluta asperiores voluptates. Consequatur et placeat velit aut omnis. Non consequatur in perspiciatis odio deleniti impedit.', 51, 14, '2021-07-08 21:38:26', '2021-07-08 21:38:26');

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
(46, 'Iste et quis fugiat aut.', 'Alias nihil sit asperiores voluptas sed quam deleniti praesentium. Quaerat eum sunt sint quidem qui. Soluta omnis quod iusto enim fugiat. Quo soluta voluptatem culpa atque tempora corporis. Minima illum esse ut minima accusamus exercitationem temporibus.', '639851.00', 1, 60, 13, 19, 'Odit facere reprehenderit ab quia. Voluptas delectus omnis et earum odit quam. Cum omnis enim atque ducimus incidunt ullam. Nulla libero quis ducimus inventore ea laudantium deleniti voluptatem.', '22289, Херсонська область, місто Херсон, пл. Паторжинського, 90', '131.00', '441d0545544bd55bba7ea94c56fb5d20.png', 1, 10, 43, 88, 'Центральне', 41, 13, 'voluptates-debitis-expedita-temporibus-inventore-dignissimos-non-nam', 77, 1, 2, 16, '2021-07-08 21:21:51', '2021-07-08 21:21:51'),
(49, 'Tenetur qui optio culpa.', 'Deserunt est rerum est harum maxime. At est eius est error molestiae. Ducimus minus quod quasi vel. Molestiae harum molestiae commodi tempore.', '223020.00', 3, 59, 6, 14, 'Neque aliquam velit praesentium et optio sunt. Cupiditate dolor doloremque cumque neque nobis. Soluta praesentium porro ea quod.', '85556, Вінницька область, місто Вінниця, пров. Арсенальна, 89', '159.00', '3158353cdd8220080563dcf2b65536b5.png', 1, 11, 13, 28, 'Центральне', 20, 15, 'et-delectus-et-quia-est-ut-odit', 28, 1, 8, 8, '2021-07-08 21:28:26', '2021-07-08 21:28:26'),
(50, 'Et eaque iusto animi et.', 'Atque non qui ad qui. Enim sapiente perspiciatis ea dolore. Earum est reprehenderit adipisci laborum optio. Dignissimos quis sapiente blanditiis quo distinctio sit aut.', '84710.00', 4, 67, 27, 33, 'Eveniet et natus velit qui quos. Quae esse tempora et omnis. Reprehenderit ducimus pariatur autem nemo eum commodi sequi. Laudantium est in vero non. Odio aliquid fugiat excepturi molestiae fuga numquam laborum tempora.', '24761, Кіровоградська область, місто Кропивницький, просп. Шота Руставелі, 21', '128.00', '066b48984c3c11d2761f4e8325bc8e01.png', 1, 15, 54, 64, 'Автономне', 22, 16, 'pariatur-molestiae-sunt-in-porro-hic-ipsam', 79, 0, 7, 40, '2021-07-08 21:28:26', '2021-07-08 21:28:26'),
(51, 'Non nemo quibusdam id.', 'Sint dolorum odio rerum fugiat mollitia possimus. Quod beatae cupiditate et eligendi neque eligendi voluptas itaque. Ad voluptatum amet praesentium dolores rerum consequatur.', '919263.00', 2, 66, 6, 18, 'Rerum qui aut repellat neque possimus quisquam. Aut molestiae quia adipisci enim asperiores quia quae. Libero nisi animi vel incidunt molestiae. Vel reiciendis et dolores sint corporis facilis odit.', '91762, Сумська область, місто Суми, пров. І. Франкa, 33', '120.00', '63f6779c74637764d72a2b8ed3cd458f.png', 1, 9, 3, 45, 'Центральне', 21, 20, 'dolores-vel-illum-quas-ab-in', 29, 1, 8, 21, '2021-07-08 21:28:26', '2021-07-08 21:28:26'),
(52, 'Eligendi error nam est.', 'Sit quia facilis non ex nesciunt autem minus non. Ab voluptates dolorem vel maiores magnam est culpa.', '843021.00', 1, 61, 27, 26, 'Praesentium beatae velit voluptatem provident aliquam facere. Voluptas eos est aut voluptatum illum repellat illo. Sed voluptas in iste recusandae laborum.', '74700, Херсонська область, місто Херсон, просп. Лесі Українки, 60', '150.00', 'f4d1361a3df319d98d6f51129dbf77e1.png', 0, 16, 56, 70, 'Автономне', 36, 17, 'voluptas-ea-modi-aut-ut', 44, 0, 5, 75, '2021-07-08 21:28:26', '2021-07-08 21:28:26'),
(53, 'Aut vel rerum ut.', 'Quo recusandae debitis consequuntur omnis harum officiis. Omnis ut provident eligendi et veritatis ipsam inventore.', '165506.00', 1, 53, 7, 15, 'Voluptas velit tempore eos sed exercitationem. Placeat explicabo a veniam quo non magni. Perspiciatis ipsa quos omnis dignissimos itaque voluptatum delectus ut.', '76783, Харківська область, місто Харків, просп. Тараса Шевченка, 78', '59.00', 'ef25331b0c946166da6c8348b76bcb20.png', 1, 18, 36, 58, 'Автономне', 45, 17, 'nobis-ipsam-nesciunt-aut-laborum-ut', 66, 1, 3, 83, '2021-07-08 21:28:26', '2021-07-08 21:28:26'),
(55, 'Consequuntur at autem ea.', 'Animi sint et voluptatum exercitationem. Nobis corrupti delectus eum eligendi. Qui ut assumenda deleniti ut modi aliquam. Quis recusandae adipisci est doloribus.', '7599.00', 4, 66, 24, 18, 'Perspiciatis quia nihil debitis et. Modi molestiae odio sed quo tempora inventore. Sit aut a blanditiis aut.', '78408, Закарпатська область, місто Ужгород, просп. Б. Грінченка, 59', '116.00', 'f015819f8222d069a77d542590f1e92a.png', 1, 16, 81, 89, 'Автономне', 32, 15, 'facilis-quos-voluptate-autem-molestiae-dolore-et-non', 64, 1, 2, 38, '2021-07-08 21:31:22', '2021-07-08 21:31:22'),
(56, 'Sint sed quidem et expedita.', 'Exercitationem fuga qui dolorum inventore doloremque. Culpa voluptates ipsa sint cupiditate. Illo sit ut voluptate aut sit fugiat. Sunt dolores non sit similique ab placeat. Consequatur in placeat est temporibus aut.', '6422.00', 4, 55, 4, 21, 'Ut reiciendis tempora et assumenda. Laborum dolor voluptatibus eos fuga. Ut quibusdam fugiat voluptas dicta accusamus atque. Quam hic sequi earum enim nihil consequatur id.', '63887, Запорізька область, місто Запоріжжя, просп. Різницька, 93', '77.00', '69951c5ed185c51ab21883c614f26ae3.png', 1, 19, 61, 52, 'Центральне', 45, 20, 'sint-qui-neque-repellendus-iusto-consequatur', 40, 0, 1, 70, '2021-07-08 21:31:22', '2021-07-08 21:31:22'),
(58, 'Velit et aut eum similique.', 'Cupiditate quaerat error qui magnam atque aut distinctio. Et earum nam voluptate dolor est. Quia officiis doloremque omnis magnam sed at.', '9481.00', 4, 62, 10, 14, 'Ipsa nostrum repudiandae nam atque sequi corporis. Deleniti fugit id qui non perferendis molestiae facere architecto. Rerum quisquam qui consequuntur quos. Incidunt perferendis sit impedit omnis tempore aut.', '23360, Рівненська область, місто Рівне, вул. Копиленка, 61', '59.00', '71d23fc0e87899eef9b7031214d2ebb3.png', 0, 5, 32, 16, 'Автономне', 42, 13, 'nostrum-neque-alias-ratione-ratione-odit-dolor', 57, 0, 4, 12, '2021-07-08 21:33:18', '2021-07-08 21:33:18'),
(59, 'Sed ut aut nobis.', 'Aut nihil est aspernatur iste ex dolor in inventore. Quas vel sit mollitia totam. Quia repudiandae ad vitae animi eos qui non.', '2790.00', 3, 58, 27, 12, 'Esse repellat dolore voluptatem repellat voluptatem maxime rerum. Natus vero hic mollitia id deleniti necessitatibus.', '01468, Чернівецька область, місто Чернівці, пров. Інститутська, 63', '91.00', '1371afc799dbe571f3d9d58fad04222f.png', 1, 9, 31, 66, 'Центральне', 40, 20, 'asperiores-quas-laudantium-voluptas-earum-corrupti-eaque', 40, 1, 3, 89, '2021-07-08 21:33:18', '2021-07-08 21:33:18'),
(60, 'Omnis sint unde aut.', 'Illo voluptatem neque eum veniam qui. Modi ipsam et sequi tempore. Velit consectetur aut consequuntur necessitatibus unde.', '9248.00', 3, 74, 25, 13, 'Quis nam aliquid eaque deleniti. Iure temporibus eum quaerat omnis fugit maiores aut.', '51391, Сумська область, місто Суми, просп. Михайла Грушевського, 47', '80.00', '273735bceb08d59227a1058ab3f68eaa.png', 0, 6, 98, 19, 'Центральне', 41, 20, 'perspiciatis-mollitia-cum-numquam-beatae-similique-quo-consequatur-autem', 49, 0, 7, 22, '2021-07-08 21:33:18', '2021-07-08 21:33:18'),
(61, 'Sed veniam eos in aut.', 'Autem et voluptatibus sapiente et rerum. Sit voluptatibus expedita provident explicabo est. Voluptate esse quo voluptatem quod distinctio.', '4972.00', 4, 54, 14, 15, 'Nihil dolores numquam id hic numquam nihil. Sed porro pariatur sit explicabo quia. Possimus neque natus labore libero.', '10283, Київська область, місто Київ, просп. Лук’янівська, 90', '130.00', '15e575f0cf70b03f8542d66b160a4b2b.png', 0, 1, 15, 48, 'Автономне', 46, 13, 'a-sunt-similique-et-pariatur-quasi-quisquam-et', 81, 1, 4, 21, '2021-07-08 21:33:18', '2021-07-08 21:33:18'),
(62, 'Nobis dolores delectus qui.', 'Exercitationem dolores est omnis animi. Culpa quia nihil ut sed. Facere autem ea quasi molestiae sit placeat.', '7404.00', 3, 74, 16, 18, 'Veniam eius fugit dolores autem pariatur voluptas. Sunt fugiat facilis aut suscipit doloremque. Labore rem dolore temporibus tempore.', '11292, Херсонська область, місто Херсон, вул. Пирогова, 77', '176.00', 'e965bf788c8d8f9d0cf331837a3e69e3.png', 1, 12, 96, 11, 'Центральне', 29, 13, 'dolorum-nobis-quia-labore-ducimus-dicta-reprehenderit-voluptatem', 75, 0, 4, 43, '2021-07-08 21:33:18', '2021-07-08 21:33:18'),
(63, 'Voluptatum aut ut omnis ex.', 'Ratione et voluptas aut exercitationem totam voluptas. Omnis et optio dolorem odio corrupti incidunt velit cumque. Alias consequatur quia perferendis est. Non omnis culpa et deserunt voluptatibus non.', '9245.00', 1, 66, 4, 28, 'Ipsam hic eum est. Aliquid iure fugiat et temporibus ut exercitationem. Quaerat dolorem est voluptatem qui nobis dicta eos nesciunt. Iste vero vero et commodi.', '47065, Чернігівська область, місто Чернігів, вул. І. Франкa, 67', '179.00', '200f543340852d4d9d4b01f3232c9a3e.png', 1, 19, 1, 56, 'Автономне', 46, 15, 'et-voluptas-unde-corrupti-et-eaque', 94, 0, 2, 23, '2021-07-08 21:33:18', '2021-07-08 21:33:18'),
(64, 'Tenetur qui et id.', 'Accusamus voluptatibus id et vel alias sapiente et alias. Debitis illo quos dolor veritatis eveniet. Est consequatur in vel error libero distinctio est.', '5068.00', 1, 58, 19, 24, 'Eligendi eaque quia ducimus itaque. Ea omnis quia mollitia aperiam. Aut deserunt veritatis rem.', '24933, Харківська область, місто Харків, пл. Арсенальна, 24', '32.00', '72dea8533782ff07730b17f43faddeec.png', 0, 4, 53, 34, 'Автономне', 41, 16, 'non-ea-hic-quis-omnis', 82, 0, 1, 49, '2021-07-08 21:33:18', '2021-07-08 21:33:18'),
(65, 'Porro ipsa aut et fugit.', 'Inventore aut ex cumque. Aut eius similique cumque aut similique id repudiandae. Eum odit enim qui qui quia. Culpa vitae quasi incidunt repellat est.', '7227.00', 3, 62, 17, 29, 'Commodi soluta dolores et mollitia asperiores. Atque facilis doloribus modi quia perspiciatis quia et. Ipsam autem et sed. Aut in dolore soluta velit nemo possimus sunt itaque.', '28932, Одеська область, місто Одеса, пл. Володимирська, 48', '120.00', '8ea73e3a11f3483eeb9517e5689de51d.png', 1, 19, 31, 47, 'Центральне', 22, 14, 'similique-eos-asperiores-cupiditate-consectetur-delectus-placeat', 97, 0, 2, 44, '2021-07-08 21:33:18', '2021-07-08 21:33:18'),
(66, 'Expedita ea sapiente eos.', 'Modi maiores id itaque illo. Debitis aut pariatur sed qui. Iusto molestiae quos ut.', '1490.00', 4, 53, 3, 26, 'Similique nesciunt iste et nemo. Commodi eius natus et dolor sed architecto possimus. Adipisci enim qui laudantium. Facilis expedita modi impedit labore quasi omnis aliquam sit.', '65933, Рівненська область, місто Рівне, пл. Хрещатик, 53', '36.00', '3ca98da5611b31a9492d69ab2e08be88.png', 1, 16, 51, 47, 'Автономне', 29, 20, 'corrupti-mollitia-pariatur-deleniti-maiores-maxime', 56, 0, 5, 16, '2021-07-08 21:33:18', '2021-07-08 21:33:18'),
(67, 'Quo id id aut ut.', 'Quisquam quis tenetur explicabo aut error. Maiores laboriosam maxime consequuntur praesentium. Et voluptas exercitationem est. Iusto dolores commodi commodi animi illo et.', '1379.00', 4, 55, 6, 24, 'Quidem accusantium qui adipisci sit id alias. Eum ipsam architecto alias et. Dolor cum laudantium dolorem molestiae aut fugiat. Facere delectus ad et ipsa sit sint.', '80736, Хмельницька область, місто Хмельницький, пров. Хрещатик, 99', '53.00', 'cb714f6fe1bb51832160da2aa0ce1684.png', 1, 6, 28, 92, 'Центральне', 41, 20, 'ipsam-nobis-iste-ut-eaque-exercitationem', 100, 0, 6, 91, '2021-07-08 21:33:18', '2021-07-08 21:33:18'),
(69, 'Quia non ipsa aut rem cumque.', 'Est ea non atque et dolores. Beatae et delectus ex deserunt qui.', '4931.00', 3, 64, 23, 19, 'Non minus sed rem velit delectus. Eos maiores ipsam porro enim incidunt et molestiae quos. Consequatur adipisci molestiae distinctio debitis ex ipsa. Id et accusantium tempora est.', '23187, Черкаська область, місто Черкаси, просп. Прорізна, 82', '22.00', 'e055c20d3071bbb27ff52ecdbf737f6b.png', 0, 9, 50, 34, 'Автономне', 44, 10, 'fugit-commodi-quod-rerum-odio-deserunt-corporis', 23, 1, 3, 18, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(70, 'Qui amet consequatur maxime.', 'Sequi vero aut minus tenetur. Vel ipsum sed nesciunt molestiae. Quam non libero inventore dolores sit odio.', '7084.00', 2, 60, 16, 27, 'Odit sunt rerum ipsum quaerat eligendi consequatur totam. Eos debitis et et sed nemo maxime. Quidem beatae atque asperiores quia autem.', '62193, Київська область, місто Київ, пров. Урицького, 45', '94.00', 'c653f18711eced0b9b371e7b37ae0d39.png', 0, 18, 100, 91, 'Центральне', 21, 10, 'nulla-repellat-deleniti-officia', 81, 0, 7, 34, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(71, 'Ea et fuga et quidem.', 'Et sit facere fuga culpa nihil. Accusantium nemo et voluptatum quas. Quam animi et nemo quia.', '2872.00', 3, 59, 19, 32, 'Corrupti quaerat est officiis et debitis doloremque fugit omnis. Cum nesciunt libero molestiae iusto nisi. Quas impedit iusto fugiat vel.', '81527, Сумська область, місто Суми, пров. Мельникова, 96', '161.00', 'd2f4aa701426808a3ceb6829827026d4.png', 0, 17, 90, 50, 'Автономне', 40, 10, 'earum-ab-eius-quia-voluptatem', 58, 1, 1, 33, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(72, 'Molestiae magnam est amet.', 'Quis eligendi maxime sint inventore occaecati sed officiis temporibus. Nobis ut voluptatem eaque aut velit. Ratione modi voluptate et soluta itaque.', '7134.00', 1, 59, 23, 32, 'Atque voluptate at sed libero eius dicta nobis. Voluptatem commodi nulla ullam ea. Quisquam vero nobis sit rem et. Est nisi quaerat quaerat eius amet est.', '36387, Сумська область, місто Суми, пл. Лесі Українки, 22', '148.00', 'd3f67ca52e3108d3b2631aec1f19d135.png', 1, 13, 56, 89, 'Центральне', 28, 10, 'iure-qui-officia-et-aspernatur-culpa-minima-laborum-ad', 96, 0, 1, 67, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(73, 'Autem accusamus labore fuga.', 'Non est magni exercitationem ut perferendis ratione et. Exercitationem eveniet ut deserunt ipsa ipsa. Praesentium dignissimos odio qui molestias esse et deserunt. Velit ullam atque autem molestiae error molestias ea et. Facere eos et rerum.', '4011.00', 4, 66, 27, 21, 'Id tenetur deserunt sit perferendis voluptatem. Maiores reprehenderit esse vel facilis. Corrupti est non debitis et est. Quis voluptatem explicabo blanditiis omnis.', '16669, Запорізька область, місто Запоріжжя, пров. Фізкультури, 47', '22.00', 'b28cefa0134cf8bc1d91c743d8237fe2.png', 1, 6, 24, 6, 'Автономне', 36, 10, 'eius-voluptatibus-accusamus-est-ut-enim', 30, 0, 1, 47, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(74, 'Et reiciendis saepe saepe.', 'Et provident sapiente unde qui ut voluptatem libero. Repudiandae sed voluptate minus deleniti repellat voluptatem. Animi et provident sit porro sed aut.', '5898.00', 4, 73, 23, 31, 'Voluptas quo animi soluta reiciendis. Ut saepe omnis quia dignissimos sit. Similique qui animi molestias magni ut.', '66314, Хмельницька область, місто Хмельницький, просп. Урицького, 36', '196.00', 'd27a9c8988c2121a356d021a0e76c59e.png', 1, 9, 12, 16, 'Центральне', 34, 10, 'esse-rerum-voluptatem-quos-omnis', 28, 1, 3, 57, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(75, 'Aut eaque aut non minus.', 'Tenetur est rerum occaecati illo voluptatem neque. Odio reprehenderit debitis qui id eum. Corrupti eum vitae totam autem excepturi rerum. Quis dolorem perferendis omnis occaecati sint.', '8278.00', 4, 61, 25, 19, 'Reprehenderit in quos cumque cumque aliquid ducimus suscipit. Modi hic rerum odit est et aut ut. Omnis est minima corporis dolores sint cupiditate qui minima. Nihil culpa ut sint eaque consectetur. Quia ut sint sit ut excepturi distinctio.', '29790, Хмельницька область, місто Хмельницький, вул. Солом’янська, 46', '150.00', '311fb539aebf18b3e520223340026c78.png', 0, 16, 79, 37, 'Автономне', 43, 10, 'quia-nihil-sit-perspiciatis', 28, 0, 6, 72, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(76, 'Nam beatae culpa saepe alias.', 'Temporibus dolores voluptatem quia iste. Eos eligendi in amet autem molestiae id.', '9140.00', 2, 70, 31, 14, 'Sed possimus tempore voluptates voluptas alias ut. Delectus blanditiis neque officiis ut cupiditate modi. Minus perferendis et ex et corporis minima. Nesciunt explicabo blanditiis tenetur sit ut eligendi soluta.', '09238, Кіровоградська область, місто Кропивницький, пл. Солом’янська, 33', '17.00', '65b49792ac98136fdb5eed01ba8fa322.png', 0, 6, 84, 93, 'Автономне', 36, 10, 'quia-deleniti-numquam-expedita-omnis-nam', 76, 1, 3, 88, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(77, 'Et blanditiis enim vitae ab.', 'Odio voluptas modi aut asperiores sapiente dolores. Corporis dolores accusantium rem. Doloremque ut at dignissimos. Ullam ut ipsam qui est dolor.', '1482.00', 3, 75, 22, 11, 'Expedita nobis voluptatum voluptas porro. Et quaerat et iste sit aut non. Soluta vel autem amet.', '35735, Миколаївська область, місто Миколаїв, вул. Паторжинського, 79', '119.00', '29501f5885947d38e51e7e98d559a80f.png', 0, 5, 75, 57, 'Автономне', 18, 10, 'eum-modi-ut-enim-eos-ipsa-temporibus-non', 94, 1, 6, 57, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(78, 'Labore minima et quis animi.', 'Reprehenderit et porro voluptatibus. Non ut occaecati optio repellat eveniet officia. Dolor sit sequi a velit dolorum quos aliquid. Sit et repellat mollitia minima modi ut.', '3935.00', 2, 62, 3, 10, 'Eius velit magnam hic ut nihil repudiandae. Quo laborum labore velit laboriosam sed eos. Aut omnis laboriosam enim in veniam voluptatum est. Nihil ut animi ex corporis omnis culpa nesciunt.', '11859, Закарпатська область, місто Ужгород, просп. Урицького, 72', '137.00', 'ef236d165aa4d753a371a41ee35b8bab.png', 0, 11, 26, 96, 'Центральне', 29, 10, 'ut-repellat-odit-soluta-et-non-quo-ratione', 40, 1, 6, 86, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(79, 'Suscipit fuga non incidunt.', 'Maiores sapiente hic molestiae numquam aspernatur. Repellendus accusamus ducimus sed nostrum est. Quis in omnis porro quia molestias quia nemo. Excepturi provident qui modi expedita est cum.', '7934.00', 4, 61, 32, 15, 'Qui distinctio tempore enim est. Est et consequatur delectus atque aut esse repudiandae aliquid. Nam sint sapiente ratione voluptates soluta.', '08219, Вінницька область, місто Вінниця, пл. Володимирська, 68', '82.00', 'bc55df881e8bf03ea8292be1b7c0130c.png', 0, 13, 37, 3, 'Центральне', 39, 10, 'qui-consectetur-nihil-neque-aut-ut-et', 61, 0, 5, 5, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(80, 'Est ipsa quia in et.', 'Vel voluptatem aut aspernatur sed nihil est. Et commodi nostrum vero eligendi. Libero culpa minus neque aspernatur ducimus asperiores voluptatem ad. Consequatur delectus voluptas nesciunt sint eveniet ex.', '1461.00', 1, 75, 11, 10, 'Tempore voluptatem exercitationem quasi cumque quia quia velit. Voluptatum sunt voluptatem cum dolorem. Recusandae praesentium aspernatur quis blanditiis voluptate. Laborum laudantium voluptas sit tempora aliquid neque.', '74591, Кіровоградська область, місто Кропивницький, пл. Хрещатик, 90', '114.00', '825e2627089500b2db9af50c80505d5f.png', 1, 7, 34, 79, 'Центральне', 38, 10, 'tempore-rem-qui-numquam-ea-eligendi', 21, 1, 2, 17, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(81, 'Sit consectetur libero ut.', 'Id quo consequatur sequi consectetur ea. Nulla aut ipsa quae accusamus. Eos magni delectus aut dolore ea provident autem.', '4450.00', 3, 66, 5, 27, 'Dolorem consequatur id vel mollitia et aliquid dolores. Quas quia ad voluptatum totam. Autem omnis impedit nostrum minus labore aut eos aliquam.', '74408, Херсонська область, місто Херсон, просп. Інститутська, 48', '193.00', '6dcb6ee28fe81e889e91a659861ef091.png', 1, 14, 48, 21, 'Автономне', 25, 10, 'ullam-ad-impedit-maiores-aliquam-eius', 74, 0, 8, 5, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(82, 'Id nihil ut tempora sed.', 'Id aut qui similique eveniet et molestias. Accusantium fugit at et sequi consequatur occaecati.', '4210.00', 2, 66, 30, 32, 'Consequatur molestias deserunt vel odio amet sed. Numquam dolore earum animi blanditiis veritatis qui. Sed enim qui voluptatem nemo laudantium ipsum iste dicta. Dolorem voluptas sed accusamus debitis quibusdam autem nemo. Est et sit illum dolorem eos.', '97762, Чернігівська область, місто Чернігів, пл. Лук’янівська, 62', '160.00', '738f908e3f71a145ca4b70596b54af86.png', 0, 15, 75, 33, 'Центральне', 29, 10, 'est-ducimus-vero-aliquam-hic', 94, 0, 7, 76, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(83, 'Maxime aut alias sed ipsam.', 'Enim fugit id dolorem velit. Veniam nostrum harum nisi dolor consequuntur nobis recusandae inventore. Officia eaque modi omnis repellendus voluptas perferendis.', '2159.00', 1, 57, 8, 21, 'Explicabo cupiditate saepe voluptatem officia corrupti odit et. Dolor accusantium neque vel laudantium quidem. Quos nostrum libero quasi tenetur.', '13335, Вінницька область, місто Вінниця, просп. Артема, 41', '69.00', '28493a3a1508e443b96884d85f0fa6ee.png', 0, 10, 100, 2, 'Автономне', 19, 10, 'explicabo-voluptas-blanditiis-non-asperiores', 42, 0, 6, 39, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(84, 'Vel non est quod minus.', 'Doloremque iusto autem rem dolorem. Fugit quas sit suscipit. Nisi et qui autem inventore molestiae doloremque ea. Fuga corporis quia aut.', '7457.00', 4, 70, 17, 20, 'Quo est voluptas exercitationem qui impedit atque. Reprehenderit non maiores omnis tenetur eos atque voluptatem ipsam. Est repellendus eum deserunt debitis doloremque nemo dolorem. Debitis eius quasi a sed repellat delectus.', '95465, Луганська область, місто Луганськ, просп. Фізкультури, 41', '36.00', 'f034bb7c12683d52bd3d1b60f5967f58.png', 0, 10, 96, 80, 'Центральне', 34, 10, 'sunt-minima-ex-fugit-sunt', 52, 0, 4, 38, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(85, 'Odit dolor quia neque esse.', 'Distinctio velit ipsa laboriosam ad neque esse voluptatem animi. Sit repellat voluptatibus repellat adipisci aspernatur tempora sunt. Voluptatem quaerat dolor rem quam velit architecto et.', '2746.00', 2, 55, 7, 33, 'Sint et repudiandae omnis voluptate quia. Libero omnis qui voluptatem id. Aperiam natus dolorem atque dicta consequatur. Ut sed incidunt et quos exercitationem debitis.', '55797, Київська область, місто Київ, пл. Шота Руставелі, 77', '159.00', '628d1830346bc2b25386197930b13799.png', 1, 14, 87, 25, 'Центральне', 26, 10, 'libero-minus-molestiae-praesentium-possimus-nam-laboriosam-quaerat', 97, 0, 1, 10, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(86, 'Vitae aut quo et qui.', 'Hic repudiandae enim aut deleniti tenetur. Dicta et consequatur et incidunt modi accusantium amet. Quos eum ipsa sed maxime quidem ut numquam.', '9209.00', 1, 65, 28, 30, 'Quia libero aut et ex quia molestiae adipisci. Neque in odit error provident quibusdam molestiae. Fugiat aspernatur accusamus exercitationem dolores voluptatem qui.', '30642, Київська область, місто Київ, просп. Шота Руставелі, 94', '54.00', '26562aae74200a279a5f49f4992241e8.png', 0, 5, 92, 54, 'Центральне', 27, 10, 'nihil-necessitatibus-iure-aut', 39, 1, 2, 40, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(87, 'Rem esse aut esse.', 'Nam voluptatem molestiae eveniet eveniet enim placeat qui quis. Iure assumenda adipisci aliquam saepe. Et alias sint maiores inventore. Dolore sed et ad voluptates.', '4516.00', 1, 64, 19, 13, 'In quam et voluptatem nam aut omnis. Minima ut voluptatem ut vel enim sit corrupti. Voluptatem occaecati molestias odio natus explicabo quis qui. Impedit molestias nulla sit totam dolore et.', '34489, Івано-Франківська область, місто Івано-Франківськ, просп. Інститутська, 19', '109.00', 'c3599f09fbf7be1614014237b0997f79.png', 1, 12, 84, 55, 'Центральне', 46, 10, 'soluta-est-quasi-enim-voluptatem-dolores', 82, 0, 3, 29, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(88, 'Dolor illo ut quod corporis.', 'Aut itaque tempore officiis asperiores animi. Placeat qui rerum porro debitis nemo consequatur.', '3912.00', 3, 73, 23, 10, 'Sit molestias a rerum magni doloremque eligendi provident. Animi sit ut ut illo voluptatem ratione. Dolorum dolorem aut sed praesentium similique.', '71146, Львівська область, місто Львів, пров. Паторжинського, 41', '71.00', '9c5914622a9500bfc0b289cded4cc57b.png', 0, 15, 73, 64, 'Автономне', 20, 10, 'aut-deserunt-dolore-ducimus-nesciunt', 94, 0, 7, 25, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(89, 'Et veniam ut pariatur quo.', 'Asperiores dicta neque blanditiis necessitatibus. Omnis totam rerum dolor minima. Distinctio qui molestiae reprehenderit dignissimos aperiam ut. Molestiae delectus perspiciatis perferendis earum.', '1237.00', 3, 55, 23, 29, 'Magni voluptate ea reprehenderit. Quod reprehenderit quia et quasi quis voluptatem necessitatibus. Dolorem quas autem ut dolor impedit quisquam nihil ullam.', '33636, Сумська область, місто Суми, просп. Артема, 98', '151.00', '3fccbd3ca1d0d995ccf6bc953a6fac5e.png', 0, 1, 16, 7, 'Автономне', 20, 10, 'in-ea-cumque-magni-sapiente-eius-iste', 30, 0, 4, 7, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(90, 'Odit vel iste et tempora in.', 'Molestias non reprehenderit dolore ea id. Doloribus exercitationem labore delectus ad et et consequatur optio. Animi aspernatur cumque totam sit. Nemo et repudiandae recusandae inventore cum aut doloremque. Quia neque libero fugit tempora voluptatem vero voluptates sed.', '5330.00', 3, 67, 11, 26, 'Architecto quo ducimus excepturi quidem tempore molestiae tempora. Et vitae voluptatem assumenda dignissimos aliquid enim animi. Quis eveniet et et. Fugiat distinctio autem minima est ut omnis.', '17785, Запорізька область, місто Запоріжжя, пров. Паторжинського, 88', '37.00', 'a333a3aec91a082839d013bdf72bc942.png', 1, 5, 42, 36, 'Центральне', 45, 10, 'hic-quibusdam-minus-sit-ut-nulla-delectus-expedita-adipisci', 13, 1, 3, 68, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(91, 'Ex unde cumque eum quia.', 'Autem in qui dolorem vel ratione quae. Dolor modi dolorum dolor. Nobis ad expedita accusamus saepe voluptate explicabo quas. Molestiae aut deleniti minima totam repudiandae sint ex molestiae. Enim aliquid consequatur numquam fugiat assumenda tenetur laborum.', '1650.00', 2, 52, 16, 10, 'Quas id sunt sunt. Officiis maiores et et minima repudiandae. Voluptatibus quas ullam ut omnis voluptates ipsa dolores.', '58056, Івано-Франківська область, місто Івано-Франківськ, пл. Б. Грінченка, 27', '100.00', '856ad94d8673b3c8497833e83ec26954.png', 0, 11, 87, 56, 'Автономне', 32, 10, 'fugit-impedit-sed-natus-asperiores', 53, 1, 8, 17, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(92, 'Nobis enim ut sed numquam ab.', 'Ea dolores rerum debitis pariatur quae. Itaque et nulla labore numquam id voluptate ipsam. Quae rerum blanditiis et rem aut cumque.', '3205.00', 3, 66, 24, 11, 'Consequatur pariatur optio quia facilis. Illo et eum voluptas aut aut quod. Possimus debitis omnis aliquam totam.', '79783, Херсонська область, місто Херсон, пров. Пирогова, 85', '177.00', 'a7df541ccbff2fd9e3642ebbe95aa420.png', 1, 3, 17, 34, 'Автономне', 25, 10, 'rem-excepturi-corporis-deleniti-quis', 85, 0, 3, 60, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(93, 'Et possimus quod modi.', 'Dolore enim voluptas enim. Veritatis rerum vel eligendi est quia nihil. Qui fuga eos dolore quis rerum. Sunt perferendis commodi omnis sed recusandae.', '6394.00', 2, 56, 4, 32, 'Aliquid enim quis culpa assumenda beatae sequi. Voluptatum et natus velit nulla aut. Aut dolores officiis quos. Excepturi unde suscipit aperiam.', '36226, Закарпатська область, місто Ужгород, пров. Паторжинського, 86', '68.00', '9cf7039fe8e188e72728bf076ed366f5.png', 0, 6, 29, 76, 'Автономне', 43, 10, 'eum-delectus-laudantium-rerum-omnis', 22, 0, 6, 7, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(94, 'Ratione qui dicta quo quo ut.', 'Minus ullam cumque et et. Ut ipsum officiis quisquam accusantium aspernatur tempora inventore esse. Cumque modi officiis consequatur eum eius non. Nihil dolorum omnis alias nobis.', '8972.00', 1, 71, 5, 28, 'Rerum nam at deleniti assumenda molestiae. Veritatis qui qui perspiciatis atque est. Explicabo qui quae et magni at omnis. Ea autem sunt voluptas sit.', '46628, Чернігівська область, місто Чернігів, вул. Пирогова, 23', '106.00', '5feee513e3cd308178e364934080f0ba.png', 1, 10, 7, 38, 'Центральне', 29, 10, 'et-explicabo-suscipit-non-neque-non-eum-voluptatem-fugiat', 32, 0, 2, 78, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(95, 'Fugit voluptate et culpa.', 'Quasi architecto aspernatur nesciunt consectetur sed aliquam animi id. Aut quasi fuga sequi eveniet ex. Voluptatem fugit in autem eaque libero molestias.', '6338.00', 3, 60, 14, 14, 'Laudantium ut sed molestias. Possimus eligendi similique veniam et itaque. Cupiditate labore rerum sequi velit.', '46030, Донецька область, місто Донецьк, просп. Хрещатик, 28', '128.00', 'a143b329981abf32dd8925aeb4a2aade.png', 0, 7, 16, 84, 'Центральне', 39, 10, 'alias-consequatur-magnam-porro-ut-itaque', 12, 0, 8, 50, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(96, 'Ut voluptas error est.', 'Earum deleniti quo qui. Explicabo laudantium aut delectus dolorum. Et ullam ut dolorem dignissimos excepturi. Dolor aliquid aut quas.', '8306.00', 1, 75, 8, 12, 'Natus rerum nemo consequatur molestiae tempora. Ut doloremque fugit in minus velit deserunt officia. Molestias nesciunt et eveniet voluptatum ipsa. Non amet ut corporis delectus aperiam esse ratione. Incidunt officia expedita vel laudantium qui fugiat.', '89332, Одеська область, місто Одеса, пл. Б. Грінченка, 44', '169.00', '70fd2704b1ec41955efd25857d9bf83c.png', 0, 11, 69, 83, 'Центральне', 21, 10, 'odio-eveniet-dolores-ullam-odio', 22, 1, 2, 36, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(97, 'Blanditiis animi non at.', 'Quam quod voluptatem non modi. Quia cupiditate quis eum nihil eveniet voluptatem. Non ut delectus cupiditate.', '8217.00', 4, 67, 18, 15, 'Et amet animi sed numquam quia sint iusto. Impedit consequatur voluptatem architecto cumque odio.', '63906, Запорізька область, місто Запоріжжя, пл. Прорізна, 58', '53.00', 'f1eda05943efcd706463e4a29a9d94da.png', 0, 15, 80, 86, 'Центральне', 46, 10, 'distinctio-voluptatem-velit-repudiandae-molestiae-sunt-facere-ea', 48, 1, 4, 89, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(98, 'Optio ut nam neque et.', 'Qui sint corporis reprehenderit aut. Commodi vero ut sit itaque quo nihil exercitationem dolores. Dolor a accusamus sed. Sapiente sunt libero quis et.', '7302.00', 2, 63, 25, 19, 'Rem ut corporis laudantium consectetur error. Vero doloribus nihil quos sed magni praesentium quibusdam.', '85219, Житомирська область, місто Житомир, просп. Мельникова, 62', '139.00', '720212247e0faab4516d2cea86c4600e.png', 0, 13, 51, 52, 'Автономне', 43, 10, 'in-voluptatem-aliquam-facilis-amet-eum-culpa-ea', 46, 1, 1, 14, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(99, 'Adipisci dolor nostrum vitae.', 'Neque facere veniam vero sed enim. Qui et quia veniam consequatur et non. Temporibus tenetur doloribus deserunt et dicta sed consequuntur amet.', '8004.00', 3, 60, 27, 13, 'Blanditiis eaque facilis perspiciatis ut. Et temporibus nemo quis et sit perferendis harum. Corrupti velit eius voluptas atque fugit. Recusandae ex accusantium sed nesciunt ut. Quibusdam quia rerum aut necessitatibus.', '15377, Чернівецька область, місто Чернівці, вул. Копиленка, 73', '192.00', 'bd21fafe5079979e39c5991bacad89ee.png', 1, 17, 65, 94, 'Центральне', 22, 10, 'placeat-dolorem-quos-quia-sunt-culpa-sunt-et-occaecati', 65, 1, 3, 82, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(100, 'Nihil quasi est vel.', 'Enim minima eum repellendus vel esse. Est in beatae in error deserunt neque.', '7497.00', 2, 55, 7, 10, 'Consequatur et aspernatur cum sint quisquam. Sit deleniti sequi dolorem possimus et reiciendis. Nihil labore tempore praesentium numquam. Voluptas quam animi voluptatum quis tempore.', '39273, Одеська область, місто Одеса, пров. Львівська, 33', '71.00', 'f8f024d5910fc34643012d02326c88ef.png', 0, 14, 53, 74, 'Автономне', 29, 10, 'quod-nobis-delectus-non-atque-nobis-tempora-voluptatem', 22, 1, 7, 31, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(101, 'Minus a et est nulla.', 'Voluptate tempora doloremque molestiae architecto quas eum delectus. Ratione velit sed suscipit quia ipsam rerum. Voluptatibus et occaecati vitae. Nemo laboriosam repellendus et assumenda reiciendis quia. Inventore esse cupiditate possimus ea.', '3528.00', 2, 67, 13, 25, 'Suscipit repellendus quia et. Aliquid non ipsam est voluptas libero. Maxime doloremque aliquam quibusdam consequatur aspernatur quam. Alias et omnis labore sequi natus ex earum dolor.', '39986, Київська область, місто Київ, вул. Володимирська, 29', '103.00', '144a6c9e83347eb9a7423d53d63e1898.png', 0, 2, 9, 75, 'Центральне', 35, 10, 'iusto-eaque-consequatur-aliquam-est-ipsam-assumenda-ipsam', 100, 1, 8, 27, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(102, 'Earum quod rerum eaque.', 'Fugit soluta voluptas quas in sed. Esse ad accusantium dolores corporis dolore repellat sed. Rem omnis omnis et dolores.', '4633.00', 1, 65, 24, 16, 'Pariatur dolore dignissimos ut tenetur amet ut repellat dolore. Aut sit qui ex quo. Dolores possimus suscipit sed nisi.', '23770, Хмельницька область, місто Хмельницький, вул. Різницька, 93', '36.00', '21e71692f0dc494af297b5634d3d2d13.png', 0, 4, 90, 54, 'Центральне', 41, 10, 'et-reiciendis-ducimus-recusandae-nemo', 57, 1, 5, 86, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(103, 'Doloribus qui vel quo.', 'Eaque molestiae placeat quos magni laudantium libero et. Id totam quidem necessitatibus eos pariatur debitis. Ratione consequatur quisquam id dolore perferendis sunt quasi similique. Incidunt error sit possimus eveniet ut repudiandae pariatur quibusdam.', '2885.00', 2, 68, 30, 25, 'Eos aspernatur facere debitis aspernatur nobis ratione voluptatem. Rerum pariatur odio provident culpa repellendus excepturi accusantium cumque. Omnis corporis doloribus iusto corrupti dignissimos iusto fuga. Officia sunt voluptatum veniam sint temporibus laudantium esse. Soluta inventore nihil quibusdam aliquid illum omnis.', '13641, Тернопільська область, місто Тернопіль, вул. Інститутська, 70', '140.00', 'faf801728ececa03c152b9af1256da1d.png', 1, 6, 55, 40, 'Автономне', 33, 10, 'nam-illum-eaque-repudiandae-quidem-et', 78, 0, 3, 32, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(104, 'In in itaque a saepe sit.', 'Et magnam vel error ut quasi corrupti et. Consequatur vero maiores molestias nisi. Quasi libero quidem laboriosam quibusdam dolor ad totam id.', '4049.00', 3, 53, 9, 24, 'Omnis repudiandae sint voluptatem qui dicta mollitia sapiente. Exercitationem repellendus aut et totam. Aliquam cum aut voluptas quidem dolor.', '94578, Волинська область, місто Луцьк, пл. Лесі Українки, 19', '121.00', 'b069fa4aa749ee7ba379ebb0f9496a05.png', 0, 20, 61, 89, 'Автономне', 45, 10, 'expedita-optio-eos-explicabo-id-nesciunt-amet', 44, 1, 7, 84, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(105, 'Aliquam ea minima qui veniam.', 'Magni at explicabo beatae magnam vitae. Commodi consequatur consectetur minus non officia veniam harum. Alias ut quisquam quidem. Voluptatem eos ut illo cupiditate ad quia quam ad. Nesciunt est quis eum exercitationem dicta error.', '1027.00', 4, 51, 23, 21, 'Facere esse quia quasi reprehenderit dolor rerum doloribus. Et sequi iure repellendus ut. Dolore officiis voluptatem numquam architecto qui.', '52562, Львівська область, місто Львів, пров. Арсенальна, 18', '163.00', '0dd2981780a1a9cc5c1271a2b8ed6e4d.png', 0, 1, 62, 13, 'Центральне', 26, 10, 'fuga-cum-qui-quia-odit-dolorum', 12, 1, 1, 80, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(106, 'Quasi ea est facere.', 'Error eligendi repellendus et ut facilis voluptatibus aut. Ad dolores nobis debitis voluptas omnis. Facere rem rerum non aut et maiores sit. Occaecati illo cum fugit numquam ex et.', '9950.00', 3, 63, 13, 26, 'Odit quod aut cumque eligendi harum officiis maiores. Quisquam vitae molestiae ut sunt. Occaecati consequatur quia neque.', '61015, Львівська область, місто Львів, пл. Фізкультури, 36', '150.00', '6ba81631d61600e55316a3d66be9bfef.png', 1, 16, 69, 66, 'Центральне', 31, 10, 'inventore-qui-accusamus-eum-perferendis-commodi', 52, 0, 1, 24, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(107, 'Quasi praesentium non qui.', 'Ut reiciendis fugiat assumenda perspiciatis. Dicta aperiam corporis accusantium aut. Quos sequi fugiat dolorum voluptates. Explicabo aliquam odit autem maxime.', '6876.00', 1, 61, 30, 27, 'Et illum et voluptas rem quis. Praesentium ipsa libero eos unde tempore. Deserunt quos molestiae quo.', '18763, Сумська область, місто Суми, вул. Мельникова, 23', '83.00', 'ca5661a8cbb089ad6be8f83bbfbe5857.png', 1, 2, 89, 38, 'Центральне', 44, 10, 'veniam-beatae-dolores-eaque-et-sunt', 58, 1, 7, 72, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(108, 'Ut nihil vel error vel.', 'Sed explicabo voluptatem sit sapiente ad. Ut vel iure nihil non et provident sed ut.', '3667.00', 4, 58, 29, 13, 'Iste ut qui inventore architecto dicta quo qui. Vero ad qui aperiam in illum sint. Et voluptatem non architecto quas necessitatibus excepturi ad. Accusamus quia ut voluptatibus et.', '50275, Харківська область, місто Харків, вул. М. Коцюбинського, 57', '10.00', '320c0a659957d4fd7f2c39f5e1fa1b60.png', 0, 7, 35, 78, 'Автономне', 27, 10, 'eum-cumque-quis-voluptatibus-sed-dolore-voluptas-qui', 86, 1, 6, 47, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(109, 'Neque dolorem ea sit.', 'Nihil dolore deleniti reprehenderit culpa reiciendis porro. Enim error libero quidem.', '2084.00', 2, 63, 6, 24, 'Enim veniam odio soluta natus voluptates. Unde mollitia error quam omnis. Nostrum hic explicabo eos ut non omnis non. Et iusto explicabo ex et.', '11342, Житомирська область, місто Житомир, вул. Шота Руставелі, 56', '192.00', '3a556f3425eed10d117e7f65422051b6.png', 1, 2, 44, 22, 'Центральне', 26, 10, 'in-laborum-cumque-dolores-est-impedit-repellat-eligendi', 32, 1, 6, 5, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(110, 'In porro maxime rerum minus.', 'Mollitia porro voluptatum iusto quam occaecati necessitatibus quas maiores. Ut quasi voluptas quos doloremque. At laudantium sit impedit vel.', '9615.00', 1, 59, 32, 24, 'Hic molestiae id temporibus amet culpa. Quas aspernatur consequatur totam occaecati. Illo ut est veritatis molestiae hic ab.', '50598, Хмельницька область, місто Хмельницький, пров. Лесі Українки, 88', '37.00', '44d7a72ad7190a4a7e0cb6a7e62c19d7.png', 0, 5, 43, 81, 'Автономне', 43, 10, 'libero-et-aut-qui-sapiente', 71, 0, 5, 79, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(111, 'Eos culpa recusandae dolorem.', 'Fugit repudiandae quia qui. Incidunt ab repudiandae nihil doloremque. Expedita enim non voluptatem illo ea. Non fugiat aspernatur numquam fuga eius voluptates.', '8373.00', 1, 52, 17, 14, 'Quidem libero praesentium quos quis ea. Id quis autem dolor quo quasi accusamus. Dolor dolorem laboriosam occaecati alias.', '57049, Запорізька область, місто Запоріжжя, вул. Михайла Грушевського, 64', '165.00', 'e4259ac72d7159a4706e90399f0f1022.png', 0, 11, 97, 98, 'Центральне', 37, 10, 'laboriosam-nobis-totam-aut-cum-quod-harum', 44, 1, 5, 92, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(112, 'Tenetur non ea labore.', 'Nesciunt distinctio totam omnis sit itaque sit expedita. Laborum doloremque culpa earum est labore fugit.', '5474.00', 3, 68, 4, 15, 'Nisi ratione qui nam nihil enim voluptatem. Quisquam eveniet et ducimus repellat.', '19445, Луганська область, місто Луганськ, пл. Солом’янська, 13', '98.00', '283fb23d7a43a5b4b481eb3745539a8b.png', 1, 18, 91, 8, 'Автономне', 31, 10, 'ea-autem-accusamus-maiores-debitis-et', 20, 1, 8, 48, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(113, 'In sint omnis neque quam.', 'Impedit est qui adipisci sint et quasi qui. Dolor aspernatur ab perspiciatis deleniti. Occaecati omnis aut magni aperiam.', '9896.00', 2, 67, 25, 21, 'Earum repudiandae id ex voluptatum deserunt inventore facilis voluptatem. Ea eaque facere quibusdam. Qui pariatur et vitae veritatis sed repudiandae alias. Velit assumenda nam qui explicabo iusto quo enim.', '75798, Київська область, місто Київ, просп. І. Франкa, 18', '62.00', '279f1aaf73b20163e028c00318cc6fd9.png', 1, 19, 100, 33, 'Автономне', 17, 10, 'quo-adipisci-dolor-delectus-ea', 55, 1, 1, 19, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(114, 'Et sit vitae modi cupiditate.', 'Quisquam perspiciatis ut cum explicabo. Officia cupiditate molestiae ex et. Sapiente atque veniam cum reprehenderit reprehenderit doloremque. Unde nihil sit pariatur dignissimos.', '8460.00', 1, 72, 11, 33, 'Ullam quaerat incidunt accusamus ut aut. Et necessitatibus ducimus fugiat iure hic facilis. Dolorem blanditiis qui perferendis distinctio.', '49239, Чернігівська область, місто Чернігів, вул. Володимирська, 61', '47.00', '60aab804220e8bc92c3d301d43d29801.png', 0, 2, 39, 9, 'Центральне', 24, 10, 'laudantium-et-repellat-iste-ex-labore-qui-porro', 41, 1, 1, 47, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(115, 'Fugiat odit totam aut quos.', 'Dolores omnis optio libero ipsa sed. Enim molestiae dolor accusantium eos aut optio tempora. Quisquam maxime facere dolor.', '3465.00', 3, 72, 29, 32, 'Nobis qui eos voluptatum praesentium nobis quia ut. Distinctio accusantium dolore nulla dolores saepe nisi adipisci. Similique rerum molestiae necessitatibus et earum voluptatem. Consequuntur commodi deleniti repellendus consectetur maxime.', '14507, Кіровоградська область, місто Кропивницький, пров. П. Орлика, 84', '165.00', 'b4d232cd1293cf1bf6ec6db8390c2d6e.png', 0, 19, 10, 46, 'Автономне', 35, 10, 'cum-quis-nihil-id-numquam-pariatur-adipisci', 30, 1, 6, 10, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(116, 'Nihil sint illo impedit ex.', 'Expedita iusto mollitia voluptas ut. Mollitia necessitatibus ratione unde laboriosam. Iste et iure quia.', '4549.00', 1, 64, 32, 17, 'Excepturi ea aperiam consequatur vel ducimus temporibus nemo et. Id velit voluptates corrupti suscipit vero.', '71470, Луганська область, місто Луганськ, пл. М. Коцюбинського, 20', '161.00', 'e4b1c25ddd3536d8a89b657c41b39c26.png', 0, 7, 44, 60, 'Автономне', 24, 10, 'necessitatibus-inventore-fugiat-quasi-totam', 39, 1, 4, 51, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(117, 'Voluptas est quo omnis eum.', 'Iure aut eaque atque. Aperiam ratione error architecto. Et ut consectetur dolores debitis quidem. Rerum praesentium sed ex laudantium.', '3842.00', 1, 52, 10, 18, 'Autem voluptas sed ipsum deserunt voluptatem natus eos. Ipsum est alias quasi explicabo quis. Nam dicta repudiandae ex deserunt incidunt.', '55071, Херсонська область, місто Херсон, вул. І. Франкa, 98', '109.00', 'c8bce3cce17f92a4de2839b32112f14f.png', 0, 10, 59, 46, 'Автономне', 19, 10, 'facere-facilis-eos-et-hic-accusantium-nam-sint', 40, 0, 1, 8, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(118, 'Quis ad labore itaque labore.', 'Harum nam quo iste. Et quasi ratione ratione est consequatur. Doloribus occaecati harum eaque sunt sapiente.', '3216.00', 3, 71, 27, 20, 'Laudantium ipsum est in voluptate dolorem. Voluptatibus molestiae reprehenderit fuga architecto numquam. Quas voluptatem voluptatem quia. Enim ut non ducimus repellendus suscipit et.', '86484, Закарпатська область, місто Ужгород, просп. Різницька, 47', '51.00', 'bb37d71b82aa9e14536c483979b757b6.png', 0, 14, 38, 48, 'Автономне', 32, 10, 'molestiae-cumque-vero-non-sit-molestiae-amet', 44, 1, 2, 67, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(119, 'Assumenda nam cum sed.', 'Sint rem voluptatum qui delectus perferendis. Quis totam nisi dolorum.', '8806.00', 1, 69, 8, 21, 'Quidem quos id tenetur et omnis praesentium sunt. Odit et eaque quidem voluptatem dolorem non exercitationem eos. Quos aut asperiores vitae in suscipit velit consequuntur.', '50374, Полтавська область, місто Полтава, вул. Фізкультури, 61', '189.00', '9b85949f915c1d7e2505cd9384d3a673.png', 1, 7, 86, 78, 'Центральне', 28, 10, 'tempora-excepturi-amet-earum-ea-ipsum', 71, 0, 6, 78, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(120, 'Et odit blanditiis et.', 'Expedita adipisci quia rem natus. Quibusdam quas sit voluptate deserunt id. Incidunt voluptatem enim exercitationem et id.', '2214.00', 3, 65, 22, 23, 'Eum deserunt nesciunt ipsam sequi quaerat. Et aperiam molestiae necessitatibus id. Assumenda architecto non quidem deserunt autem. Delectus ut exercitationem eveniet eum exercitationem. Non delectus aut aut ex sit necessitatibus eos non.', '07234, Херсонська область, місто Херсон, пров. Паторжинського, 23', '21.00', '1e613c58e9525b592e3dabb4ddcb9c38.png', 1, 17, 74, 80, 'Автономне', 29, 10, 'consequatur-repudiandae-sunt-quisquam-culpa-magni-commodi', 32, 0, 6, 10, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(121, 'Vitae occaecati non est nam.', 'Omnis ratione adipisci aliquam sunt facere natus. Voluptatem recusandae debitis labore omnis quo. Voluptatem minima non recusandae veritatis sequi laboriosam.', '5145.00', 2, 71, 6, 28, 'Soluta aut ut tempore magnam velit nihil quam. Quod vel pariatur suscipit veritatis id quae. Veritatis consequatur et aut dolores quod. Optio vel ipsum placeat id soluta vitae.', '15430, Запорізька область, місто Запоріжжя, просп. Лесі Українки, 75', '102.00', 'ee798bfcaeb443f2fe4cd4cbe5bcde03.png', 1, 20, 62, 51, 'Автономне', 18, 10, 'vel-vitae-blanditiis-non-quis-similique-non', 25, 1, 7, 58, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(122, 'Quidem non soluta est id ut.', 'Est ea optio blanditiis sunt earum ut. Repellendus voluptatem illum impedit facilis voluptatem. Qui quis atque aut rerum debitis non vel sequi.', '7906.00', 1, 70, 30, 21, 'Voluptas fuga voluptatem quis ut eius. Cupiditate corrupti vel tempora minima voluptatibus omnis aut. Assumenda soluta voluptatem consequatur exercitationem atque sunt. Eum sint qui quis omnis.', '14902, Чернігівська область, місто Чернігів, пл. Володимирська, 20', '106.00', 'd594e994aa9c9fe85c535f1a9b91d764.png', 1, 5, 77, 86, 'Центральне', 22, 10, 'ut-nobis-totam-blanditiis-qui-provident', 95, 1, 5, 17, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(123, 'Nihil dolorem qui ea aut.', 'Modi expedita omnis est earum officia suscipit. Consequatur occaecati molestiae amet qui sit quia.', '8324.00', 4, 70, 5, 32, 'Rerum maiores quibusdam quibusdam possimus. Id dolorem neque dolor qui quos inventore. Quo vero debitis officiis odit libero.', '39787, Сумська область, місто Суми, пров. Арсенальна, 65', '11.00', '817ea7d9ecc73936b746bceb15cff571.png', 0, 16, 10, 14, 'Центральне', 19, 10, 'incidunt-ut-possimus-voluptate-ut', 76, 1, 1, 96, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(124, 'Inventore velit pariatur quo.', 'Eaque maiores nobis et aut id. Dolores nihil rerum ipsam non odit maxime omnis. A aut non laudantium ad sed atque ullam consequatur. Velit voluptates explicabo ipsa provident illum iure.', '3820.00', 3, 65, 23, 30, 'Molestiae quia blanditiis fuga sit. Autem corporis autem qui architecto. Temporibus ipsum sunt et labore facilis. Aut expedita rem et molestiae.', '18961, Житомирська область, місто Житомир, вул. Фізкультури, 72', '41.00', '993012ebc602d1b7835f955bab1ecedb.png', 0, 12, 3, 3, 'Центральне', 37, 10, 'odit-porro-molestiae-rem-laudantium-quisquam', 35, 1, 3, 21, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(125, 'Sed aut delectus quasi magni.', 'Blanditiis exercitationem iusto minima aut odit veniam quo et. Minus natus dolores et sit. Placeat ea velit in quibusdam. Excepturi rerum iste iusto fugit.', '8631.00', 3, 68, 15, 22, 'Quia dicta alias ipsum provident. Quos ratione qui nulla aut quod maxime qui. Eos iusto alias consequatur voluptatem ipsam voluptates. Quod dolorem similique enim quo.', '72823, Тернопільська область, місто Тернопіль, пров. Арсенальна, 51', '167.00', '1ac79447bce9ecde013b68f0edb6609a.png', 1, 4, 53, 13, 'Центральне', 30, 10, 'optio-consectetur-itaque-aut-ut', 35, 1, 4, 50, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(126, 'Non consectetur magnam aut.', 'Fugit molestiae autem tempore neque quidem hic. Illo qui qui expedita illo quas qui rerum sunt. Eaque reiciendis ullam laudantium.', '7675.00', 2, 58, 7, 11, 'Nihil est et voluptatem sapiente modi. Error voluptates et aliquid fuga. Natus est omnis facilis voluptatibus ex fuga quia.', '70697, Тернопільська область, місто Тернопіль, пл. Прорізна, 22', '73.00', '3aa41106ecfa46d4ce28161ad340f2c7.png', 1, 9, 63, 24, 'Автономне', 35, 10, 'soluta-esse-architecto-doloremque-aliquid-itaque-dolor', 15, 0, 1, 22, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(127, 'Veritatis aperiam fugit unde.', 'Voluptas et dolor aperiam veritatis. Qui quam voluptas optio suscipit occaecati. Perferendis temporibus hic enim. Dolorum illo omnis et.', '5437.00', 2, 72, 15, 18, 'Omnis natus unde suscipit dolorem aut laboriosam ipsam. Numquam ut illo dolor quia assumenda. Placeat praesentium eligendi est omnis. Sit adipisci omnis saepe.', '37240, Житомирська область, місто Житомир, вул. Арсенальна, 47', '93.00', '57d94780b4c55d48e7a6d69754e9307f.png', 0, 18, 93, 8, 'Автономне', 37, 10, 'natus-adipisci-molestiae-laborum-ex-tempora-qui', 58, 0, 6, 81, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(128, 'Voluptas iusto et beatae id.', 'Aut recusandae eos nihil sunt laborum. Impedit nobis in saepe. Eligendi odit ut ex voluptates ut magnam et non. Ut ut consequatur impedit ipsum rerum.', '9821.00', 2, 58, 10, 28, 'Et dolor ipsam maiores voluptate qui quidem. Laboriosam voluptas ex autem voluptatem soluta. Quia facilis beatae reiciendis et labore odio asperiores. Est inventore autem eius eum et est.', '87627, Закарпатська область, місто Ужгород, вул. Хрещатик, 74', '82.00', '0c3d3a815395ad17106b6eea0c204a12.png', 1, 7, 23, 61, 'Автономне', 38, 10, 'voluptatum-laborum-autem-molestias-totam', 57, 1, 7, 81, '2021-07-08 21:36:38', '2021-07-08 21:36:38');
INSERT INTO `obekts` (`id`, `name`, `description`, `price`, `category_id`, `location_rayon_id`, `location_city_id`, `location_city_rayon_id`, `note`, `address`, `square`, `main_img`, `isPublic`, `count_room`, `count_level`, `level`, `opalenyaName`, `appointment_id`, `rieltor_id`, `slug`, `owner_id`, `isPay`, `type_wall_id`, `square_hause_land`, `created_at`, `updated_at`) VALUES
(129, 'Ut soluta molestias debitis.', 'Optio dolorem voluptatum soluta quisquam. Magni explicabo laborum culpa. Est et aut accusantium praesentium sint. Consequuntur et est vero in quo molestias.', '3283.00', 2, 59, 9, 24, 'Et id expedita ab. Sed dolore similique consequatur nobis. Reprehenderit rem itaque quos rerum labore et. Dolores et cupiditate ex fugiat.', '38220, Донецька область, місто Донецьк, просп. І. Франкa, 34', '80.00', 'f9a84b462845d36f1fab775bd1b1c8f9.png', 1, 11, 89, 36, 'Центральне', 19, 10, 'aut-ea-hic-totam-non-molestias-incidunt', 33, 1, 7, 64, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(130, 'Temporibus rem alias atque.', 'Voluptas sint sapiente at et. Et dignissimos sed debitis et. Laborum aut enim est recusandae reprehenderit sint corrupti.', '5129.00', 3, 56, 12, 14, 'Aut excepturi quia ex commodi in quas totam dicta. Tempora veniam doloremque sit et magni. Eum sed aut sed omnis. Tempore nesciunt nisi quis sint laboriosam et a molestiae.', '77516, Закарпатська область, місто Ужгород, просп. Солом’янська, 62', '18.00', '460d1b0f93a32ed6965b458454355632.png', 1, 18, 34, 54, 'Автономне', 27, 10, 'accusamus-enim-ipsa-officia-sed-nam', 62, 1, 4, 83, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(131, 'Explicabo a veniam totam.', 'Autem necessitatibus culpa rerum qui delectus aut. Rerum dolorum qui similique quo provident ab molestiae. Natus sequi voluptatem consectetur quasi atque id eligendi.', '5951.00', 3, 53, 5, 33, 'Dolores deleniti deserunt repudiandae quas nobis totam officia. Sint excepturi quisquam maiores sunt quibusdam est. Ut qui pariatur laboriosam quibusdam ut id et nam.', '82700, Сумська область, місто Суми, просп. Інститутська, 93', '124.00', '96f75294a89e76f04883d5482fc2eb4d.png', 0, 7, 54, 25, 'Центральне', 17, 10, 'consequuntur-qui-quis-quisquam-sequi-labore-corrupti-quia', 84, 1, 8, 40, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(132, 'Eveniet fugit quia eaque eos.', 'Rerum ipsam harum sed excepturi quasi animi animi. Quos et ipsum qui rem nulla adipisci. Libero ipsam alias ut omnis omnis sunt sint.', '4144.00', 4, 51, 10, 23, 'Quod molestias quidem numquam. Quisquam impedit sit iusto sint. Est quidem in quidem ut natus id.', '83941, Чернівецька область, місто Чернівці, пл. Шота Руставелі, 58', '101.00', 'e951bb80c771ec30bcd3bed54319d663.png', 1, 9, 32, 27, 'Автономне', 37, 10, 'deleniti-consequatur-ratione-iste-perferendis-nobis-ea-a', 50, 1, 7, 10, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(133, 'At harum rerum quia qui quia.', 'Ipsam excepturi vel et. Quidem enim eius molestiae fugiat ex. Autem odio consequuntur libero dignissimos. Eius consequatur neque recusandae qui non voluptatem ut. Deleniti et praesentium non quia.', '3135.00', 3, 69, 28, 17, 'In quod odio laboriosam dolores. Ut dolor eaque incidunt repellendus sint sit nemo. Iste accusantium eaque quibusdam occaecati natus aut expedita commodi.', '94127, Донецька область, місто Донецьк, просп. М. Коцюбинського, 67', '186.00', '3fa8ea477fb4cf88aa1438c991a2f8e2.png', 0, 16, 18, 66, 'Центральне', 25, 10, 'totam-et-quasi-natus-illo', 50, 0, 7, 16, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(134, 'Ullam omnis est et quia.', 'Eveniet quo optio omnis nihil illo esse. Voluptas voluptatibus ut in et sunt corrupti. Consequatur nihil ut excepturi doloribus consequuntur.', '5494.00', 4, 72, 9, 17, 'Vel neque necessitatibus voluptatem hic. Nostrum quibusdam perspiciatis sint. Voluptates numquam pariatur ut dolorem animi.', '14454, Волинська область, місто Луцьк, просп. Арсенальна, 35', '196.00', '383c01b69f04da10b28483d77ecc8a8a.png', 1, 15, 81, 1, 'Автономне', 25, 10, 'dolores-possimus-cum-ipsa-enim', 81, 1, 2, 56, '2021-07-08 21:36:38', '2021-07-08 21:36:38'),
(135, 'Sed sit minima ut saepe ut.', 'Soluta sit impedit sunt quasi sunt sed voluptatum. Dolore minima numquam nihil. Velit similique nobis consequatur consequatur sit.', '2375.00', 2, 66, 27, 30, 'Ut sit amet saepe. Quaerat ex sequi voluptatem. Blanditiis sed natus laudantium quaerat.', '80189, Миколаївська область, місто Миколаїв, просп. Пирогова, 91', '17.00', 'c006d6ba0fe7bd79621023ff4bfda66e.png', 0, 14, 59, 60, 'Автономне', 30, 10, 'voluptatibus-veritatis-aut-et-sequi-laborum', 15, 0, 8, 52, '2021-07-08 21:36:39', '2021-07-08 21:36:39'),
(136, 'Atque libero omnis saepe.', 'Similique id enim excepturi adipisci. Est fugit inventore reprehenderit asperiores et harum. Ut quisquam adipisci cupiditate. Aut earum maxime molestias facere velit et aut et.', '8363.00', 4, 73, 30, 21, 'Eligendi nam labore sapiente libero asperiores recusandae est velit. Laborum dolorem sunt doloribus labore a sunt. Distinctio facilis qui magni repellat commodi enim. Dolore dolor dolorem voluptate autem temporibus ipsam officia.', '99027, Дніпропетровська область, місто Дніпро, просп. Володимирська, 57', '123.00', 'c9f5cc7af2409b7b68708a17c8db1bb1.png', 0, 5, 24, 39, 'Автономне', 35, 10, 'enim-fugit-veniam-ipsum', 99, 0, 4, 20, '2021-07-08 21:36:39', '2021-07-08 21:36:39'),
(137, 'Autem modi magni omnis qui.', 'Qui assumenda iusto quaerat. Et dicta aliquam id ipsa quia eaque ea similique. Voluptatem suscipit sed odit recusandae velit accusantium est.', '9639.00', 4, 65, 11, 23, 'Omnis eveniet quod quae nobis pariatur voluptatem pariatur repellendus. Assumenda consequatur facere consequatur eum a corporis provident. Et sint commodi excepturi ut est. Et et porro minima nobis aspernatur. Et aut ut velit voluptate nisi amet voluptates corrupti.', '92407, Дніпропетровська область, місто Дніпро, вул. М. Коцюбинського, 31', '153.00', '9a62fc8c4279219d7d37096622ae34f7.png', 1, 4, 58, 53, 'Центральне', 42, 10, 'sequi-adipisci-quod-nemo-quod-ut', 72, 1, 2, 56, '2021-07-08 21:36:39', '2021-07-08 21:36:39'),
(138, 'Est a in aut error.', 'Nihil quos et corporis soluta minus praesentium repudiandae veniam. Sit omnis fugiat nesciunt modi ut omnis fugit. Veniam molestias dolor repellendus voluptatem.', '1399.00', 4, 67, 10, 19, 'Reiciendis aut ut ut corporis ullam sint quibusdam enim. Aliquam molestias numquam qui suscipit aspernatur non voluptatibus sit. Illo veniam optio voluptas ea.', '38392, Дніпропетровська область, місто Дніпро, пров. І. Франкa, 34', '104.00', '4823098430c399649ec0aeb15013c825.png', 0, 12, 65, 7, 'Центральне', 31, 10, 'labore-possimus-neque-quia-facilis-iure', 32, 0, 3, 33, '2021-07-08 21:36:39', '2021-07-08 21:36:39'),
(139, 'Quae voluptatum corrupti ea.', 'Provident et animi sapiente nobis. Quia tempore voluptatem eum deserunt cumque omnis. Rerum hic molestias quaerat sequi delectus architecto. Sequi in alias sit maiores.', '4108.00', 4, 72, 31, 24, 'Repellat deleniti molestiae suscipit omnis assumenda eum omnis. Aut laborum quia ipsa ea aut harum. Et qui commodi culpa aperiam enim.', '94203, Київська область, місто Київ, вул. Тараса Шевченка, 42', '124.00', 'c2e210c90cb836f69d5348187c356fd0.png', 1, 9, 83, 53, 'Автономне', 37, 10, 'ut-non-ut-iste-tempora-beatae', 84, 0, 7, 66, '2021-07-08 21:36:39', '2021-07-08 21:36:39'),
(140, 'Aut illum in quis doloribus.', 'Ut error eos quia et enim vero. Dolorum molestiae reiciendis officiis provident. Quisquam alias fugit provident quod.', '9328.00', 4, 60, 3, 25, 'Quia repudiandae magnam facilis. Corrupti officia occaecati quia unde. Animi non facere maxime dolore dolores.', '74278, Херсонська область, місто Херсон, пл. Шота Руставелі, 91', '120.00', '88e23fae07a51a9b8239bc246ee6aa61.png', 1, 6, 10, 73, 'Автономне', 28, 10, 'reprehenderit-sint-ut-quis-ea', 84, 0, 8, 53, '2021-07-08 21:36:39', '2021-07-08 21:36:39'),
(141, 'Libero id aut ullam sed.', 'Omnis tempore est maxime eius consequatur consequuntur sit rerum. Suscipit nam cum occaecati nihil. Et omnis amet aut vel suscipit.', '4967.00', 1, 65, 13, 22, 'Quis quod voluptates expedita assumenda rem asperiores. Dolor quasi vitae minima illo amet cupiditate dolorem. Ut quas quos voluptatem.', '73602, Житомирська область, місто Житомир, пров. Володимирська, 22', '32.00', '608758327a2c204366a997be642b79d7.png', 0, 13, 1, 73, 'Автономне', 21, 10, 'id-eligendi-laboriosam-et-inventore-ratione-placeat-in', 89, 0, 3, 80, '2021-07-08 21:36:39', '2021-07-08 21:36:39'),
(142, 'Ab expedita ut vel totam.', 'Laboriosam qui id aliquam officia assumenda. Corporis sit harum maiores possimus non cumque. Officiis perferendis et incidunt minima.', '6955.00', 3, 52, 23, 11, 'Voluptatum aut dolorem eius error. Debitis in nihil hic eum reiciendis. Labore praesentium quia illum ea repellat est. Aut repudiandae doloribus impedit eum quia explicabo.', '51124, Харківська область, місто Харків, просп. Тараса Шевченка, 66', '200.00', '58a61b0b097a99eec95879371d9ef0aa.png', 1, 8, 23, 92, 'Автономне', 43, 10, 'error-earum-sit-corrupti-minus-est-voluptatum-aperiam', 68, 1, 6, 94, '2021-07-08 21:36:39', '2021-07-08 21:36:39'),
(143, 'Qui nihil vero ea.', 'Et distinctio vel veritatis ratione aspernatur. Unde non sint sequi amet dolorem eaque. Doloremque optio rem officiis ducimus velit nisi dolores.', '2946.00', 4, 53, 13, 26, 'Neque nostrum minus fugit iure iusto et quia. Ea suscipit voluptatem odit aut ad ea. Accusantium fuga ut est. Beatae rerum doloribus aut et velit omnis.', '56249, Івано-Франківська область, місто Івано-Франківськ, вул. Володимирська, 45', '138.00', '17f4ffc2f2887a4f14e0bfaa3b9859f6.png', 0, 8, 37, 98, 'Автономне', 41, 10, 'voluptatem-soluta-autem-eum-voluptatem-est-velit-animi', 97, 1, 1, 86, '2021-07-08 21:36:39', '2021-07-08 21:36:39'),
(144, 'Aut quia ex qui est voluptas.', 'Placeat quo velit et porro. Velit dolores qui adipisci ipsam molestiae molestiae dolores. Magnam velit at aut totam provident tenetur molestias et. Ratione beatae aut assumenda voluptatem inventore et repellat.', '4795.00', 3, 71, 9, 24, 'Eveniet vitae tempora aut. Occaecati quia ut aut repellat velit dolor. Adipisci voluptatibus expedita aut perspiciatis fuga sit voluptatibus. Quos animi quo quam nihil odio dolores unde similique.', '50528, Запорізька область, місто Запоріжжя, пров. Володимирська, 16', '162.00', 'daf85cec74e1cc48c402df46c4b346ba.png', 1, 2, 95, 12, 'Центральне', 26, 10, 'delectus-corrupti-eaque-unde-recusandae-et-quia-temporibus', 56, 1, 7, 72, '2021-07-08 21:36:39', '2021-07-08 21:36:39'),
(145, 'At amet sint explicabo.', 'Nulla numquam adipisci incidunt harum est quo veritatis. In recusandae est molestiae rem esse.', '3667.00', 2, 57, 10, 19, 'Sunt voluptate dicta nesciunt molestiae voluptatem eveniet corrupti. Modi natus labore eligendi dolor culpa aut unde corporis. Laboriosam nemo voluptatem et consequatur consequatur ut maxime. Laborum temporibus sint architecto ut. Facilis quidem nihil similique animi.', '18176, Луганська область, місто Луганськ, пров. Лук’янівська, 37', '187.00', '08cf67425b736e8b1e60f3f3bab67f8f.png', 1, 19, 32, 77, 'Центральне', 25, 10, 'quaerat-quod-quos-et-maxime-numquam-ipsum', 46, 0, 8, 56, '2021-07-08 21:36:39', '2021-07-08 21:36:39'),
(146, 'Iure in dolor recusandae.', 'Rerum odio nihil voluptatem. Quis est labore culpa earum. Et voluptas totam tenetur quia ut. Qui consequatur voluptas non cumque provident non ducimus vitae.', '2081.00', 1, 72, 18, 16, 'Eos libero aut numquam quia natus qui incidunt. Sit repellendus eligendi ducimus voluptate. Animi dicta quae aliquid perferendis.', '53168, Кіровоградська область, місто Кропивницький, вул. Б. Грінченка, 50', '92.00', '0fdc13ae3e6643ef6420c2c4a0b7667f.png', 1, 12, 84, 17, 'Центральне', 38, 10, 'veritatis-et-aliquam-suscipit', 58, 0, 7, 81, '2021-07-08 21:36:39', '2021-07-08 21:36:39'),
(147, 'Deserunt autem error fuga.', 'Et non nesciunt autem aut. Accusamus sit quo eos libero cupiditate. Quidem beatae sed unde ut quia iste qui. Vel debitis quod quo non nobis ea.', '3679.00', 4, 63, 31, 20, 'Unde enim in labore fugiat voluptatem voluptas. Facere aspernatur aliquam et accusamus dicta.', '75726, Рівненська область, місто Рівне, вул. Інститутська, 94', '135.00', 'a5cb9c927701e41a7bf10617be4ca721.png', 0, 16, 36, 50, 'Автономне', 40, 10, 'aut-nihil-blanditiis-numquam-laudantium', 27, 0, 4, 34, '2021-07-08 21:36:39', '2021-07-08 21:36:39'),
(148, 'A quia nulla adipisci.', 'Aut voluptatem omnis qui ipsam. Ut id consectetur accusantium dicta perferendis. Mollitia neque labore molestiae sed sequi atque voluptatem. Aut laborum aut modi culpa officia et. Amet dolore ducimus velit quibusdam voluptatum.', '2766.00', 4, 67, 6, 16, 'In repellat tenetur doloremque est repudiandae. Molestias molestiae aperiam quaerat tempore accusamus eius. Quam doloremque voluptate minus qui maiores. Quod consequatur ipsa eaque expedita.', '09632, Закарпатська область, місто Ужгород, пров. Хрещатик, 31', '165.00', '7d78d1be448cc9b1d47d9fe68da2b77f.png', 0, 13, 34, 100, 'Центральне', 45, 10, 'harum-repellat-sit-nemo-atque-est-at-unde', 42, 0, 2, 78, '2021-07-08 21:36:39', '2021-07-08 21:36:39'),
(149, 'Odit occaecati explicabo sed.', 'Vel fugit voluptas expedita voluptate labore ea voluptatem. Excepturi aperiam molestias perferendis eaque molestias aspernatur. Et numquam sed mollitia quis maiores voluptatum porro. Dolorem veritatis laborum temporibus deleniti id qui blanditiis corrupti.', '8130.00', 2, 64, 26, 19, 'Quos sed rerum et qui sed sit. Sapiente et qui reiciendis ducimus nesciunt est. Adipisci cumque delectus animi. Distinctio fugit porro aut sint aut rerum dolorum. Ut quisquam id veniam porro nihil debitis.', '84858, Запорізька область, місто Запоріжжя, вул. Б. Грінченка, 56', '152.00', '81b3874f454a449df5a39240a3f5cfac.png', 1, 4, 9, 12, 'Автономне', 40, 10, 'rerum-ut-et-dolor-qui-dignissimos-tempora', 16, 0, 2, 56, '2021-07-08 21:36:39', '2021-07-08 21:36:39'),
(150, 'Accusamus repellat ut sed.', 'Ipsam soluta aut quia. Dolor laboriosam est deleniti explicabo possimus occaecati. Et aut nihil eveniet reprehenderit officia non neque. Eos eum officiis debitis.', '5794.00', 1, 71, 28, 16, 'Voluptatem qui dicta et qui sint sapiente. Aliquid officia eum aspernatur adipisci molestias magni natus. Sunt blanditiis sapiente voluptatem ut.', '91228, Кіровоградська область, місто Кропивницький, пл. Б. Грінченка, 93', '35.00', '94964028d676600a5b1b93bd8629504c.png', 1, 5, 78, 100, 'Автономне', 24, 10, 'sequi-aspernatur-voluptatibus-maiores-qui-quia-at-animi-mollitia', 34, 0, 8, 22, '2021-07-08 21:36:39', '2021-07-08 21:36:39'),
(151, 'In fuga at numquam officiis.', 'Quia excepturi iusto eveniet dolor. In illum natus vitae mollitia doloribus et perferendis commodi. Beatae quae quia doloremque facilis tempora provident labore.', '9202.00', 3, 58, 22, 25, 'Magni sapiente voluptatem cupiditate cum. Non rerum fugit quaerat accusantium at. Aliquam debitis cum exercitationem voluptatem. Ullam et sunt voluptas unde fugit facilis.', '58511, Харківська область, місто Харків, пров. Мельникова, 70', '154.00', '6e2b8f805a79f43725f1ddb3a0fdd07d.png', 0, 8, 87, 52, 'Центральне', 22, 10, 'aut-fuga-ab-ut-culpa-id-aut-error', 98, 1, 8, 35, '2021-07-08 21:36:39', '2021-07-08 21:36:39'),
(152, 'Commodi eum laudantium qui.', 'Velit dolorem impedit neque at nulla sed omnis rerum. Tenetur ipsam ut accusamus id. Natus consequuntur quia qui dolorum.', '5456.00', 2, 61, 7, 10, 'Modi laudantium soluta ea nisi consequatur. Ducimus corporis eos saepe veniam. Aut in quia rerum iusto architecto provident. Temporibus quam quas corporis molestias ut distinctio dolorum.', '60906, Волинська область, місто Луцьк, просп. Прорізна, 54', '199.00', 'a6ded4140bf7e7358d657fa64f2d0c50.png', 1, 19, 25, 58, 'Автономне', 23, 10, 'est-eaque-illum-est-aliquid', 70, 0, 7, 87, '2021-07-08 21:36:39', '2021-07-08 21:36:39'),
(153, 'Omnis sit magni saepe vitae.', 'Voluptatum rem odio dicta nobis omnis. Maiores consequatur rerum ullam dicta aut repudiandae non.', '3586.00', 3, 66, 11, 33, 'Consequatur dicta non sunt natus ratione illo consequatur sit. Facere perferendis sed nobis architecto. Quia sit tempora aperiam nisi nesciunt ea et ut.', '74114, Херсонська область, місто Херсон, просп. Прорізна, 93', '68.00', '8e476a3dffbcc260dce595ea476592cb.png', 1, 11, 78, 58, 'Центральне', 28, 10, 'id-molestiae-nam-nulla-officia-quo-magnam', 99, 1, 8, 77, '2021-07-08 21:36:39', '2021-07-08 21:36:39'),
(154, 'Molestiae est ut rerum.', 'Vitae exercitationem saepe consectetur. Corporis et sequi enim quo quod fugiat eos. Aut debitis libero sint modi. Facilis doloribus doloribus enim quia.', '2578.00', 4, 75, 20, 10, 'Distinctio labore ratione perferendis nulla. Est et distinctio veritatis totam. Accusamus omnis quasi quia occaecati sed animi et. Commodi cupiditate quo repudiandae ipsum quis error.', '08629, Сумська область, місто Суми, пл. Тараса Шевченка, 58', '10.00', 'cc45eec450f9690840086e79a8e454b2.png', 0, 10, 100, 55, 'Центральне', 27, 10, 'vitae-voluptas-distinctio-voluptatem-esse-quaerat-et-recusandae', 51, 0, 1, 55, '2021-07-08 21:36:39', '2021-07-08 21:36:39'),
(155, 'Saepe est sed nihil quae.', 'Explicabo ab aperiam qui quae voluptas fuga. Quos tenetur est pariatur. Ut rerum vero ratione quas.', '3552.00', 3, 74, 20, 10, 'Itaque nam amet vero mollitia tempore a cumque. Animi nemo optio ad cum pariatur omnis. Dolore aut nemo suscipit ea et ut molestiae minima.', '22863, Донецька область, місто Донецьк, пл. Арсенальна, 68', '30.00', 'ba905db505a5a38bcead393edb00aa7f.png', 1, 3, 14, 75, 'Автономне', 40, 10, 'consequatur-sed-dolorem-laudantium-dolor-autem-ut', 56, 0, 5, 77, '2021-07-08 21:36:39', '2021-07-08 21:36:39'),
(156, 'Sunt accusamus nihil quia.', 'Exercitationem ad temporibus voluptatibus quos ut officiis vero. Quia ut commodi et hic dolor. Accusantium sunt autem porro quia sed cumque vel voluptas.', '2362.00', 1, 62, 14, 18, 'Tempora odio esse inventore animi hic ad. Sed quaerat sed doloribus. Ut soluta dolores voluptate autem. Necessitatibus et qui accusantium ipsum consequatur dolores.', '22376, Волинська область, місто Луцьк, пров. Урицького, 82', '96.00', 'd61c78f466c0779fa583135f2154e765.png', 1, 16, 59, 80, 'Центральне', 32, 10, 'asperiores-et-aperiam-voluptatem-maxime', 81, 0, 5, 74, '2021-07-08 21:36:39', '2021-07-08 21:36:39'),
(157, 'Qui hic quia est sapiente.', 'Mollitia dolorem laudantium odit ea dolorem quia. Ea dolor similique autem blanditiis amet aliquid.', '6590.00', 2, 55, 13, 22, 'Et et tempora dolores qui minus suscipit. Ipsa voluptate exercitationem omnis numquam autem porro suscipit. Magnam ratione vitae modi officia nobis placeat voluptatem. Voluptatibus repellendus est tempore dolorem dolores beatae eos tempore.', '13033, Закарпатська область, місто Ужгород, пров. Лесі Українки, 49', '128.00', 'a0bd382de73a85293cf584927685826e.png', 1, 11, 2, 71, 'Центральне', 17, 10, 'minus-modi-rerum-perferendis-fugiat-qui', 64, 0, 2, 41, '2021-07-08 21:36:39', '2021-07-08 21:36:39'),
(158, 'Nulla quidem sed ea aut.', 'Non in dolores reiciendis porro necessitatibus et molestiae. Dignissimos et amet molestiae sunt natus vel maxime. Et inventore dolorem adipisci qui. Dolores maxime cupiditate nam et asperiores quis.', '4908.00', 4, 65, 23, 31, 'Sequi voluptatibus voluptatem quaerat. Totam molestiae ut similique magni veritatis consequatur. Rerum delectus qui porro quis saepe itaque quia inventore. Ducimus laborum et dolores odio voluptatem rem voluptatum.', '67075, Тернопільська область, місто Тернопіль, просп. Копиленка, 27', '102.00', '8072ea1b9791e2c4a239d859a3f64717.png', 1, 16, 70, 50, 'Центральне', 24, 10, 'voluptatibus-autem-tempora-necessitatibus-soluta', 12, 1, 2, 76, '2021-07-08 21:36:39', '2021-07-08 21:36:39'),
(159, 'Totam enim molestiae sed.', 'Nihil et placeat sint. Earum eaque aut nemo autem odit quasi dolorem. Autem hic culpa qui distinctio. In natus molestias rerum sunt et odio aut.', '8893.00', 2, 72, 31, 24, 'Repellat omnis officiis consequatur in. Accusantium molestiae qui dolor sit porro eius laboriosam odit. Porro libero ullam architecto sequi voluptatem unde enim ducimus. Nisi et nulla qui dolorum vitae enim voluptatem. Eius tempore qui sequi ipsa nobis sit voluptatem.', '02148, Івано-Франківська область, місто Івано-Франківськ, пров. Копиленка, 59', '160.00', 'c5cbf1180811e0468d722c7dbafbea27.png', 0, 12, 38, 21, 'Автономне', 41, 10, 'et-minus-et-earum-incidunt-earum-ipsa-deserunt', 12, 0, 3, 93, '2021-07-08 21:36:39', '2021-07-08 21:36:39'),
(160, 'Quo quas et esse est.', 'Et placeat qui aut veritatis occaecati in dolorem. Qui minus consequatur quia omnis magni dolores eaque. Ab non illum debitis omnis id provident.', '9239.00', 2, 75, 31, 28, 'Nulla facere reprehenderit delectus explicabo quam ut. Quis laborum velit fugiat sunt. Et consequatur at molestiae blanditiis. Ex et amet deleniti sed officia dolor aut.', '86880, Херсонська область, місто Херсон, пров. Львівська, 53', '146.00', '1c6637b1b3aa1671099c34dc752257dd.png', 0, 13, 71, 36, 'Центральне', 37, 10, 'quidem-inventore-sit-ab-doloribus-vel-illo-error', 44, 1, 7, 80, '2021-07-08 21:36:39', '2021-07-08 21:36:39'),
(161, 'Et eius iure quasi ipsa.', 'Eligendi nisi eveniet aut quae id et quod suscipit. Et tempore cupiditate nemo. Aut temporibus est rerum et modi sint.', '6518.00', 4, 61, 16, 20, 'Aliquam sit eligendi doloribus. Id quis amet iure iusto modi repellendus. Deleniti quae ullam adipisci nostrum ut. Porro quae est aliquid beatae ea sit doloremque.', '83698, Запорізька область, місто Запоріжжя, вул. Фізкультури, 30', '41.00', '1543ac8a8b555bffaf19ec322807c34d.png', 0, 17, 44, 48, 'Центральне', 45, 10, 'porro-quos-facere-quidem-assumenda-deserunt-sed-eos', 77, 1, 5, 93, '2021-07-08 21:36:39', '2021-07-08 21:36:39'),
(162, 'Omnis omnis assumenda enim.', 'Sit temporibus fuga soluta in nostrum cum. Modi enim rerum odio repudiandae praesentium. Labore quas unde et odio esse nesciunt vel.', '2358.00', 1, 62, 31, 32, 'Animi velit ut sed quis laborum deserunt repudiandae nesciunt. Soluta recusandae perspiciatis sed. Eius perferendis sequi tenetur autem doloribus quidem.', '58185, Луганська область, місто Луганськ, просп. Лук’янівська, 25', '80.00', '27ef747e0def2050bb7bfe92c3a6e999.png', 0, 2, 71, 11, 'Автономне', 27, 10, 'vel-aut-eligendi-vel-laudantium-non-sit', 77, 0, 7, 72, '2021-07-08 21:36:39', '2021-07-08 21:36:39'),
(163, 'Libero et nam fuga dolor.', 'Placeat laborum quidem molestias aperiam libero porro est est. Tempore vel sunt voluptas voluptas impedit et eos est. Magni repellat dolorem iure aut error. Voluptas rerum dicta sed ut sed exercitationem et. Temporibus eveniet voluptatem a labore.', '6084.00', 4, 74, 5, 26, 'Sequi quia similique molestiae consectetur. Blanditiis dignissimos quis ab autem. Tenetur suscipit cumque praesentium omnis minus. Sunt tenetur vel ullam necessitatibus et qui.', '43214, Тернопільська область, місто Тернопіль, вул. Володимирська, 37', '162.00', '084f3814ed2c6fea6954eef2d5c41d0f.png', 1, 15, 6, 56, 'Центральне', 35, 10, 'eum-inventore-dolores-molestiae-eum', 35, 1, 8, 18, '2021-07-08 21:36:39', '2021-07-08 21:36:39'),
(164, 'Sed qui cupiditate aut totam.', 'Illum reiciendis ut blanditiis aut repellat sit nisi. Vel dolores sed nam.', '4330.00', 4, 65, 11, 30, 'Enim velit voluptates veritatis sit. Fugit eaque repellendus dolor quam vitae nam.', '56636, Хмельницька область, місто Хмельницький, вул. Арсенальна, 40', '151.00', 'c6815844cf24b4cbad51759678756f63.png', 0, 18, 4, 50, 'Автономне', 40, 10, 'distinctio-doloribus-quibusdam-ipsum-magnam-quasi-cumque-dolorem', 28, 1, 7, 73, '2021-07-08 21:36:39', '2021-07-08 21:36:39'),
(165, 'Sit totam consequatur est.', 'Quo asperiores fugit et non. Occaecati at ab at aut quam veritatis eos.', '9174.00', 4, 57, 17, 29, 'Totam cupiditate reiciendis voluptates ea ut officiis fuga sint. Excepturi dolor illum modi dolor aut quis et. Voluptatem ut eaque voluptas et fugiat qui.', '79785, Донецька область, місто Донецьк, просп. Лук’янівська, 44', '63.00', '4b6056cfd28613a94428b92a72733382.png', 0, 15, 100, 46, 'Центральне', 23, 10, 'quasi-omnis-adipisci-temporibus-et', 43, 0, 5, 60, '2021-07-08 21:36:39', '2021-07-08 21:36:39'),
(166, 'Ut cumque quod quas illum.', 'Cumque doloribus architecto eveniet dolor magni. Dolorem quos nesciunt tenetur et sunt error voluptas minima.', '9268.00', 4, 68, 9, 30, 'Ipsum qui eaque nam ullam. Sapiente sequi magnam perspiciatis cumque aut quia. Vitae cupiditate et rerum consequatur. Voluptates expedita ex tempora itaque alias temporibus.', '87379, Рівненська область, місто Рівне, просп. Б. Грінченка, 88', '185.00', 'adbcb4eb4c9cdefd001fcd2ce5ad361e.png', 1, 9, 60, 66, 'Автономне', 45, 10, 'et-dolor-pariatur-optio-iure-sit', 98, 0, 2, 67, '2021-07-08 21:36:39', '2021-07-08 21:36:39'),
(167, 'Sint et sit adipisci.', 'Et in autem sed minima qui quidem. Ut dolore corporis iusto modi magni et mollitia. Natus a qui rerum sequi.', '1953.00', 2, 70, 5, 14, 'Atque molestiae nisi incidunt facere fugiat blanditiis. Qui corporis reprehenderit in eum modi aut doloremque unde. Occaecati molestiae corporis reiciendis id qui. Odit dicta voluptatem reprehenderit et reprehenderit sit quibusdam.', '88095, Львівська область, місто Львів, пров. Тараса Шевченка, 25', '171.00', '0f47c621d68d91b5815d6d1e25a0ecf7.png', 0, 4, 1, 88, 'Автономне', 45, 10, 'delectus-consequatur-voluptates-quidem-voluptatem-dignissimos', 87, 1, 7, 57, '2021-07-08 21:36:39', '2021-07-08 21:36:39'),
(168, 'Cum eos autem qui ex nam a.', 'Neque eaque inventore aliquam incidunt dolores pariatur qui. Minima facilis natus laudantium repellat vero et consequuntur qui. Repellat qui est voluptatem dicta reprehenderit error et. Ab quasi sint veritatis molestias officia hic. Laborum sit quia enim doloremque adipisci dolorum.', '2732.00', 1, 75, 16, 26, 'Animi ducimus eos commodi voluptatem quis hic. Et excepturi nesciunt commodi quis. Blanditiis pariatur assumenda soluta saepe ullam pariatur modi. Excepturi officia consequuntur tempora illum qui.', '36778, Херсонська область, місто Херсон, вул. М. Коцюбинського, 18', '172.00', 'fcb64ef85a158389a5c4aee404f5f48a.png', 0, 17, 77, 48, 'Автономне', 41, 10, 'quae-sequi-dolorum-numquam-quasi-modi-rerum-dolorem', 88, 0, 3, 43, '2021-07-08 21:36:39', '2021-07-08 21:36:39');

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
(11, 'Павлюк Костянтин Васильович', '+380993727723', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(12, 'Іванченко Антон Євгенійович', '0503110900', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(13, 'Олег Іванович Мельниченко', '+38(06986)84280', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(14, 'Григорій Васильович Васильєв', '0508090870', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(15, 'Юрій Федорович Антоненко', '+380500602753', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(16, 'Тарас Андрійович Боднаренко', '0660401649', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(17, 'Юлія Борисівна Сергієнко', '0993570994', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(18, 'Кравченко Раїса Валентинівна', '+380963110177', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(19, 'Раїса Олександрівна Васильєв', '0961945846', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(20, 'Іванченко Кирил Федорович', '+380944035152', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(21, 'Володимир Янович Панасюк', '0505800257', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(22, 'Пономаренко Поліна Тарасівна', '0947296152', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(23, 'Таращук Маргарита Андріївна', '+380910537798', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(24, 'Панасюк Софія Сергіївна', '+380961959532', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(25, 'Борис Олексійович Кравченко', '+380972381587', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(26, 'Лариса Олексіївна Мірошниченко', '+380963934049', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(27, 'Шевченко Дар\'я Андріївна', '+380975897975', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(28, 'Наташа Олександрівна Крамаренко', '0965944447', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(29, 'Михайло Володимирович Васильєв', '+380934872796', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(30, 'Мірошниченко Тетяна Михайлівна', '+380964027953', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(31, 'Боднаренко Роман Янович', '0952453987', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(32, 'Богдан Євгенійович Захарчук', '+380667377979', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(33, 'Пономаренко Анна Миколаївна', '0665260080', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(34, 'Мірошниченко Наташа Йосипівна', '+380674173324', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(35, 'Мірошниченко Володимир Анатолійович', '0500190624', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(36, 'Шинкаренко Євгенія Василівна', '+380961012367', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(37, 'Захарчук Маргарита Романівна', '0936307109', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(38, 'Олександр Петрович Мірошниченко', '0979071083', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(39, 'Середа Леонід Олександрович', '0967427449', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(40, 'Сергій Сергійович Захарчук', '+380917483888', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(41, 'Петренко Раїса Олександрівна', '+38(07724)68352', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(42, 'Шевченко Оксана Анатоліївна', '+380993315519', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(43, 'Тамара Анатоліївна Лисенко', '+380950698537', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(44, 'Софія Федорівна Шевчук', '+380633466585', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(45, 'Поліна Василівна Броварчук', '+380922494243', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(46, 'Алла Володимирівна Шевченко', '0979420194', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(47, 'Людмила Валентинівна Гнатюк', '+380675684074', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(48, 'Денис Олександрович Пономарчук', '+380961587803', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(49, 'Романченко Валентин Романович', '+38(062)5635192', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(50, 'Крамарчук Інна Янівна', '0666470020', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(51, 'Леонід Олександрович Васильєв', '+380970683970', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(52, 'Тимофій Романович Шевченко', '+380938851256', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(53, 'Микита Йосипович Гнатюк', '0670189485', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(54, 'Васильєв Григорій Михайлович', '0630524270', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(55, 'Євген Васильович Іванченко', '+380669740444', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(56, 'Таращук Артем Михайлович', '0958073234', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(57, 'Костянтин Тарасович Василенко', '0999012454', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(58, 'Петренко Анатолій Іванович', '0942674293', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(59, 'Михайло Олександрович Гнатюк', '0986270667', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(60, 'Людмила Іванівна Мельниченко', '+380923462359', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(61, 'Федір Петрович Панасюк', '+38(008)0004192', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(62, 'Віра Янівна Мірошниченко', '0684855718', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(63, 'Панасюк Ярослав Михайлович', '+38(02601)58557', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(64, 'Іванченко Станіслав Янович', '0960117272', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(65, 'Таращук Тарас Володимирович', '+380960167779', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(66, 'Романченко Павло Федорович', '0680217662', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(67, 'Оксана Василівна Крамаренко', '+380934665930', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(68, 'Петренко Валерій Олександрович', '0635919500', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(69, 'Таращук Дар\'я Валентинівна', '+380949211508', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(70, 'Олександра Петрівна Пономаренко', '0981099626', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(71, 'Шевчук Надія Олексіївна', '+380936905276', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(72, 'Кравченко Борис Іванович', '+380918888442', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(73, 'Іванченко Всеволод Йосипович', '0987070498', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(74, 'Павлюк Дар\'я Борисівна', '0500234915', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(75, 'Романченко Дар\'я Василівна', '+380687780599', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(76, 'Крамарчук Олена Євгенівна', '+380974052987', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(77, 'Васильєв Любов Євгенівна', '+380930732436', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(78, 'Крамаренко Кіра Миколаївна', '+380997766149', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(79, 'Крамарчук Іван Володимирович', '0955699205', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(80, 'Крамарчук Данил Миколайович', '0934680195', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(81, 'Боднаренко Антон Борисович', '+380925734614', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(82, 'Шевченко Єлизавета Андріївна', '+380678279483', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(83, 'Кравченко Ірина Євгеніївна', '0966261844', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(84, 'Інна Миколаївна Шевченко', '+380923339116', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(85, 'Броварчук Михайло Йосипович', '+380988710986', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(86, 'Юрій Борисович Антоненко', '+380963454648', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(87, 'Любов Володимирівна Романченко', '+380960244198', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(88, 'Крамаренко Маргарита Анатоліївна', '+380983002342', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(89, 'Тимофій Романович Дмитренко', '+380953585957', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(90, 'Василенко Поліна Олександрівна', '+380928108381', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(91, 'Тамара Іванівна Мельниченко', '0633430235', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(92, 'Катерина Василівна Мірошниченко', '+380929626899', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(93, 'Олена Володимирівна Пономарчук', '0990694130', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(94, 'Олександра Миколаївна Шевченко', '+380954509105', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(95, 'Мірошниченко Валентин Олександрович', '0945051924', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(96, 'Броварчук Андрій Андрійович', '+380662987788', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(97, 'Броваренко Поліна Янівна', '+380919151027', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(98, 'Гнатюк Адам Петрович', '0913170200', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(99, 'Дар\'я Олександрівна Антоненко', '+380957868788', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(100, 'Анна Володимирівна Броварчук', '0996752010', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(101, 'Валентин Іванович Пономаренко', '0965986985', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(102, 'Захарчук Маргарита Михайлівна', '0927643615', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(103, 'Броваренко Діана Борисівна', '0998259117', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(104, 'Васильчук Катерина Михайлівна', '+380687803265', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(105, 'Леонід Йосипович Броваренко', '0681557135', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(106, 'Інна Євгеніївна Кравчук', '+380998539585', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(107, 'Оксана Валентинівна Панасюк', '+380953868850', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(108, 'Кравченко Йосип Янович', '0674685600', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(109, 'Алла Тарасівна Іванченко', '0985121033', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(110, 'Катерина Миколаївна Шевчук', '0937372512', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(111, 'Сергієнко Марія Анатоліївна', '0676879963', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(112, 'Дмитренко Вадим Олексійович', '0992705911', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(113, 'Кравченко Лариса Янівна', '+38(070)2601038', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(114, 'Болеслав Іванович Крамаренко', '+380990308307', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(115, 'Сергій Миколайович Гнатюк', '0984553562', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(116, 'Шевченко Роман Анатолійович', '+38(098)5120462', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(117, 'Антоненко Вікторія Анатоліївна', '+380950685364', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(118, 'Мірошниченко Тетяна Олександрівна', '+38(0487)721823', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(119, 'Боднаренко Валерій Євгенович', '0982042537', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(120, 'Пономарчук Світлана Федорівна', '+38(098)0510886', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(121, 'Микитюк Ярослав Іванович', '0942377444', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(122, 'Сергій Олександрович Крамарчук', '0920868747', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(123, 'Петренко Кирил Йосипович', '+380681830119', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(124, 'Євгенія Іванівна Лисенко', '0503205092', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(125, 'Крамарчук Людмила Тарасівна', '+380954881816', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(126, 'Вадим Олександрович Пономарчук', '+380997086093', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(127, 'Пономарчук Тетяна Євгеніївна', '+380925828495', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(128, 'Сергій Романович Лисенко', '0682383316', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(129, 'Данил Янович Броваренко', '0955478506', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(130, 'Микитюк Лариса Федорівна', '+380967085873', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(131, 'Алла Анатоліївна Васильчук', '+380960935872', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(132, 'Наташа Василівна Кравченко', '+380669609281', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(133, 'В\'ячеслав Федорович Петренко', '0966517248', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(134, 'Валерій Миколайович Пономарчук', '0679522708', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(135, 'Петренко Болеслав Миколайович', '0943953598', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(136, 'Броварчук Анатолій Тарасович', '+380961683412', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(137, 'Кравченко Діана Михайлівна', '0956781407', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(138, 'Лев Михайлович Крамаренко', '+380660774028', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(139, 'Гнатюк Микола Михайлович', '0956147146', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(140, 'Галина Янівна Лисенко', '+380931489711', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(141, 'Олена Петрівна Іванченко', '+380638571085', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(142, 'Павло Анатолійович Таращук', '+380945520920', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(143, 'Надія Федорівна Петренко', '0981175858', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(144, 'Євгеній Євгенійович Шинкаренко', '+380962550355', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(145, 'Броварчук Ярослав Анатолійович', '+380916997376', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(146, 'Кравчук Борис Євгенійович', '+38(01168)06345', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(147, 'Гнатюк Валерій Іванович', '+380953386910', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(148, 'Марія Борисівна Гнатюк', '+380504107874', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(149, 'Станіслав Тарасович Мірошниченко', '+380503524199', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(150, 'Адам Романович Павлюк', '0967669708', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(151, 'Романченко Тимофій Романович', '0936607164', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(152, 'Іван Сергійович Крамаренко', '+380943346697', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(153, 'Середа Олена Федорівна', '0936113430', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(154, 'Дмитро Романович Іванченко', '+380929401375', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(155, 'Броварчук Галина Миколаївна', '+38(09624)00337', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(156, 'Таращук Борис Іванович', '0506671912', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(157, 'Анастасія Анатоліївна Панасюк', '+380998986413', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(158, 'Тетяна Євгенівна Дмитренко', '0508040236', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(159, 'Марія Олександрівна Лисенко', '0635700461', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(160, 'Юлія Володимирівна Гнатюк', '0669097764', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(161, 'Болеслав Сергійович Василенко', '0689058608', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(162, 'Васильєв Кирил Іванович', '+380507999559', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(163, 'Інна Тарасівна Васильчук', '+380980760708', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(164, 'В\'ячеслав Іванович Пономаренко', '+38(04032)23737', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(165, 'Юлія Йосипівна Пономаренко', '+380936557827', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(166, 'Надія Євгеніївна Мельниченко', '0639262273', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(167, 'Вікторія Романівна Іванченко', '0955276745', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(168, 'Сергій Володимирович Сергієнко', '0946601761', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(169, 'Болеслав Сергійович Кравчук', '0923231164', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(170, 'Кравчук Федір Михайлович', '+380928333490', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(171, 'Данил Петрович Таращук', '+380964030780', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(172, 'Марина Василівна Васильчук', '+380970608538', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(173, 'Дмитро Іванович Середа', '0506315659', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(174, 'Іванченко Катерина Олексіївна', '+380934185979', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(175, 'Шевчук Сергій Йосипович', '+38(054)0542180', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(176, 'Шевчук Алла Євгеніївна', '+380931507039', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(177, 'Віра Борисівна Броварчук', '+380675003516', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(178, 'Мірошниченко Софія Василівна', '+380679822172', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(179, 'Богдан Янович Броваренко', '+380681712685', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(180, 'Іванченко Кирил Тарасович', '+380945246790', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(181, 'Пономаренко Євгенія Василівна', '+380927995629', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(182, 'Пономарчук Оксана Петрівна', '+380922908157', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(183, 'Павлюк Сергій Романович', '+380926309496', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(184, 'Болеслав Петрович Середа', '0672671137', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(185, 'Мірошниченко Віталій Андрійович', '0929852115', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(186, 'Дмитренко Владислав Олексійович', '0961059434', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(187, 'Катерина Сергіївна Іванченко', '+380960747132', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(188, 'Панасюк Дар\'я Андріївна', '+38(063)6544430', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(189, 'Шевчук Тамара Янівна', '+380504791822', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(190, 'Васильєв Олександра Василівна', '0961297425', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(191, 'Шинкаренко Тимофій Анатолійович', '+380934483138', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(192, 'Васильчук Богдан Тарасович', '+380505225580', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(193, 'Ніна Михайлівна Василенко', '+380940058385', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(194, 'Антоненко Валентина Володимирівна', '0672935933', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(195, 'Захарчук Алла Янівна', '+380682315541', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(196, 'Захарчук Вікторія Євгеніївна', '0501433446', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(197, 'Георгій Миколайович Романченко', '0915221502', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(198, 'Шевчук Олена Іванівна', '+380916456397', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(199, 'Інна Михайлівна Броваренко', '+380975580927', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(200, 'Романченко Болеслав Євгенійович', '0913663279', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(201, 'Віктор Олексійович Кравченко', '+380989491739', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(202, 'Микола Олексійович Крамаренко', '+380682131062', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(203, 'Павлюк Віктор Олексійович', '+380500808178', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(204, 'Віталій Борисович Кравчук', '0964571333', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(205, 'Роман Петрович Середа', '0686527424', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(206, 'Антоненко Мирослав Васильович', '+380674422704', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(207, 'Антоненко Віра Іванівна', '0944143065', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(208, 'Олена Сергіївна Васильєв', '0660603761', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(209, 'Таращук Галина Василівна', '+380992646793', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(210, 'Боднаренко Олена Валентинівна', '+380986847259', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(211, 'Наташа Олексіївна Шевченко', '0920332983', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(212, 'Кравченко Валерія Сергіївна', '0924725009', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(213, 'Валерій Романович Васильчук', '0924568166', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(214, 'Анастасія Романівна Шевчук', '0679354472', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(215, 'Наташа Олександрівна Шевчук', '0686226398', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(216, 'Панасюк Марина Анатоліївна', '+380947602124', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(217, 'Павлюк Наташа Андріївна', '+380664883173', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(218, 'Середа Євгенія Андріївна', '+380934824074', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(219, 'Борис Йосипович Захарчук', '0664437513', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(220, 'Антоненко Григорій Валентинович', '+380639087634', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(221, 'Іван Борисович Пономаренко', '+380994598073', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(222, 'Шевчук Владислав Михайлович', '+38(067)3130911', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(223, 'Василенко Віра Федорівна', '0927318814', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(224, 'Інна Олександрівна Захарчук', '+380924703147', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(225, 'Боднаренко Оксана Федорівна', '+380933253673', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(226, 'Алла Федорівна Сергієнко', '+380923135284', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(227, 'Людмила Борисівна Петренко', '+380994861730', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(228, 'Євгенія Тарасівна Іванченко', '+380954980809', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(229, 'Євгенія Володимирівна Кравченко', '0917323547', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(230, 'Таращук Галина Романівна', '0928878920', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(231, 'Володимир Олексійович Крамарчук', '0916779093', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(232, 'Мірошниченко Богдан Йосипович', '+380501124256', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(233, 'Поліна Андріївна Шевчук', '+380504232025', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(234, 'Іванченко Борис Романович', '+380506919648', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(235, 'Світлана Янівна Мельниченко', '0916078239', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(236, 'Кирил Андрійович Шевченко', '+380923526901', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(237, 'Дмитро Миколайович Броваренко', '+380506541495', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(238, 'Пономарчук Світлана Євгенівна', '+380941842155', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(239, 'Ілля Анатолійович Антоненко', '0961290761', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(240, 'Михайло Володимирович Іванченко', '+380685054050', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(241, 'Середа Вадим Романович', '+380935734396', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(242, 'Віра Валентинівна Романченко', '+380631963080', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(243, 'Адам Михайлович Васильчук', '+380963938756', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(244, 'Тамара Тарасівна Броваренко', '+380637891284', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(245, 'Шевчук Алла Миколаївна', '0677963361', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(246, 'Сергієнко Валентин Йосипович', '0974529888', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(247, 'Середа Ігор Анатолійович', '0946585604', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(248, 'Євгенія Андріївна Мельниченко', '0950610211', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(249, 'Кравченко Єлизавета Іванівна', '0666008530', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(250, 'Інна Федорівна Васильєв', '0936566630', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(251, 'Микитюк Лариса Олексіївна', '+380953285951', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(252, 'Юлія Олексіївна Васильєв', '0962161131', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(253, 'Назар Анатолійович Шевчук', '0936719529', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(254, 'Павло Сергійович Броварчук', '0992885485', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(255, 'Таращук Віра Петрівна', '+380928126201', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(256, 'Микитюк Ірина Тарасівна', '0964457431', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(257, 'Павлюк Марія Володимирівна', '0962359776', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(258, 'Алла Євгеніївна Павлюк', '+380976946208', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(259, 'Діана Миколаївна Захарчук', '+380975111358', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(260, 'Романченко Сергій Борисович', '0682601188', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(261, 'Крамарчук Ніна Миколаївна', '0949373030', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(262, 'Віра Анатоліївна Крамаренко', '0934385037', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(263, 'Олена Андріївна Романченко', '0939774120', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(264, 'Василенко Віра Сергіївна', '+380666493105', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(265, 'Броваренко Всеволод Йосипович', '0933841509', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(266, 'Вікторія Василівна Таращук', '+38(094)9185277', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(267, 'Сергієнко Вікторія Федорівна', '+380993509924', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(268, 'Шевчук Антон Янович', '+380928174873', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(269, 'Панасюк Леонід Анатолійович', '0673864004', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(270, 'Шевчук Віра Євгенівна', '0684814181', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(271, 'Геннадій Янович Шевченко', '+380937026343', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(272, 'Інна Михайлівна Панасюк', '+380983868318', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(273, 'Софія Федорівна Крамарчук', '+38(07889)61449', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(274, 'Іванченко Йосип Йосипович', '0935325574', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(275, 'Дмитренко Сергій Васильович', '0932964945', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(276, 'Діана Сергіївна Середа', '0665773026', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(277, 'Шинкаренко Анна Анатоліївна', '+380673863270', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(278, 'В\'ячеслав Валентинович Васильєв', '0931970054', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(279, 'Лисенко Тамара Олександрівна', '0977545884', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(280, 'Йосип Михайлович Васильчук', '0668945284', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(281, 'Руслан Борисович Дмитренко', '+380679777218', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(282, 'Галина Йосипівна Броварчук', '+380635525943', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(283, 'Пономаренко Марія Борисівна', '+380504278722', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(284, 'Микитюк Георгій Анатолійович', '0977977487', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(285, 'Софія Романівна Антоненко', '+380913046494', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(286, 'Таращук Ірина Євгенівна', '+380662492983', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(287, 'Панасюк Олена Федорівна', '0678435565', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(288, 'Надія Миколаївна Пономарчук', '+380506737124', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(289, 'Болеслав Євгенович Павлюк', '+380966238242', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(290, 'Крамарчук Віктор Романович', '+38(05425)19134', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(291, 'Кравченко Ігор Олександрович', '0967619429', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(292, 'Богдан Янович Пономаренко', '+380679739739', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(293, 'Олена Михайлівна Васильєв', '0966461485', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(294, 'Федір Іванович Іванченко', '0929490689', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(295, 'Захарчук Анастасія Олексіївна', '0503663533', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(296, 'Лисенко Костянтин Андрійович', '+380997474339', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(297, 'Гнатюк Назар Євгенійович', '0934355834', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(298, 'Лисенко Ігор Янович', '+380932588501', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(299, 'Лариса Андріївна Петренко', '0990759644', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(300, 'Георгій Борисович Крамаренко', '0963612038', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(301, 'Петренко Назар Романович', '0504847710', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(302, 'Таращук Катерина Йосипівна', '0998331200', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(303, 'Артур Олександрович Павлюк', '+380934659174', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(304, 'Поліна Янівна Пономарчук', '+380924060395', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(305, 'Сергій Петрович Броваренко', '0970246731', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(306, 'Петренко Тимофій Анатолійович', '0957491005', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(307, 'Павлюк Віталій Миколайович', '0687394061', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(308, 'Павлюк Ігор Іванович', '0988861888', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(309, 'Дмитренко Василь Володимирович', '+380914555624', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(310, 'Панасюк Григорій Андрійович', '0506011553', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(311, 'Юлія Євгенівна Дмитренко', '0636505595', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(312, 'Мельниченко Роман Федорович', '+38(02469)68830', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(313, 'Геннадій Іванович Мірошниченко', '0504898620', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(314, 'Владислав Володимирович Антоненко', '0910124630', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(315, 'Панасюк Наташа Євгенівна', '0960809557', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(316, 'Середа Олег Валентинович', '0971367011', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(317, 'Пономаренко Федір Васильович', '+380688255892', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(318, 'Микитюк Інна Євгеніївна', '+380669507275', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(319, 'Світлана Михайлівна Захарчук', '+380928905983', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(320, 'Софія Василівна Шевчук', '+380638378328', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(321, 'Олександр Сергійович Шинкаренко', '0681229523', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(322, 'Артем Валентинович Боднаренко', '0962248500', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(323, 'Ярослав Миколайович Сергієнко', '+38(0371)750652', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(324, 'Василенко Всеволод Валентинович', '+38(042)1572371', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(325, 'Алла Михайлівна Васильєв', '+380685620234', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(326, 'Олена Василівна Шевчук', '+380968326492', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(327, 'Кіра Федорівна Василенко', '0921698762', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(328, 'Броварчук Сергій Йосипович', '+38(00081)72748', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(329, 'Мірошниченко Тамара Тарасівна', '+380952450701', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(330, 'Василенко Валентин Федорович', '0913143839', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(331, 'Таращук Данил Анатолійович', '0664503382', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(332, 'Шевчук Лариса Євгенівна', '+38(061)8336699', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(333, 'Шевченко Галина Олексіївна', '0962814000', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(334, 'Романченко Ілля Тарасович', '0965993264', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(335, 'Артур Євгенійович Дмитренко', '+380962070517', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(336, 'Павлюк Анатолій Йосипович', '+380975323959', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(337, 'Васильєв Олександр Валентинович', '+380668034369', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(338, 'Микитюк Поліна Петрівна', '+380990238640', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(339, 'Антоненко Григорій Васильович', '0506017816', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(340, 'Васильєв Єлизавета Андріївна', '+38(0924)804608', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(341, 'Болеслав Йосипович Панасюк', '0969815965', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(342, 'Дмитренко Ярослав Андрійович', '0685985785', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(343, 'Боднаренко Світлана Анатоліївна', '0939308810', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(344, 'Владислав Борисович Кравченко', '+380686592974', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(345, 'Броварчук Віктор Андрійович', '+380687103237', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(346, 'Васильєв Валерій Анатолійович', '+380953521246', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(347, 'Антоненко Андрій Йосипович', '+380966027546', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(348, 'Васильчук Оксана Олександрівна', '0661257865', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(349, 'Юрій Валентинович Мельниченко', '0947912368', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(350, 'Євген Миколайович Таращук', '+380932002318', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(351, 'Геннадій Тарасович Мельниченко', '0965673529', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(352, 'Віктор Михайлович Васильчук', '+380677193575', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(353, 'Станіслав Миколайович Кравченко', '+380981275186', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(354, 'Леонід Олександрович Мельниченко', '+380950046214', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(355, 'Пономарчук Анатолій Сергійович', '0991584233', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(356, 'Тарас Сергійович Шевченко', '+380948107041', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(357, 'Дмитренко Валерія Миколаївна', '+380963183661', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(358, 'Боднаренко Галина Володимирівна', '0662525288', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(359, 'Борис Олександрович Микитюк', '0501841100', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(360, 'Станіслав Євгенович Микитюк', '+380944924873', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(361, 'Григорій Михайлович Броварчук', '+380953362506', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(362, 'Боднаренко Артем Валентинович', '0970524404', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(363, 'Таращук Ніна Євгенівна', '0946671387', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(364, 'Василенко Мирослав Іванович', '+380961241937', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(365, 'Пономарчук Антон Петрович', '0946516871', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(366, 'Марія Олександрівна Павлюк', '+380956577493', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(367, 'Пономаренко Євген Олексійович', '0917103658', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(368, 'Євгеній Анатолійович Крамарчук', '+380964437040', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(369, 'Олександра Федорівна Васильчук', '+380972683655', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(370, 'Ольга Анатоліївна Броварчук', '+38(09685)78844', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(371, 'Шевченко В\'ячеслав Федорович', '0673272570', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(372, 'Шевченко Валерій Йосипович', '+380938344451', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(373, 'Таращук Володимир Олександрович', '+380975993972', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(374, 'Іванченко Катерина Іванівна', '0954644075', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(375, 'Григорій Миколайович Сергієнко', '0971952153', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(376, 'Валентин Петрович Мельниченко', '+38(0947)348856', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(377, 'Геннадій Петрович Романченко', '0929698855', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(378, 'Катерина Борисівна Броварчук', '0945605958', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(379, 'Артур Борисович Павлюк', '0929287793', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(380, 'В\'ячеслав Йосипович Гнатюк', '0679280645', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(381, 'Петренко Ірина Олександрівна', '+380634085964', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(382, 'Станіслав Валентинович Антоненко', '0674925954', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(383, 'Панасюк Максим Янович', '0994494871', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(384, 'Володимир Петрович Іванченко', '+380686717047', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(385, 'Лисенко Станіслав Янович', '+380501928149', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(386, 'Дмитренко Віктор Борисович', '0950171570', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(387, 'Олександр Анатолійович Броварчук', '+380673308943', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(388, 'Васильчук Федір Іванович', '+380960916004', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(389, 'Василенко Любов Володимирівна', '0946132157', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(390, 'Георгій Йосипович Захарчук', '0673882213', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(391, 'Світлана Валентинівна Таращук', '+380681584816', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(392, 'Віра Михайлівна Сергієнко', '+380990102058', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(393, 'Захарчук Леонід Андрійович', '+380918113329', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(394, 'Ніна Янівна Романченко', '0984502432', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(395, 'Крамарчук Антон Васильович', '+38(027)4264199', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(396, 'Гнатюк Артем Тарасович', '+38(0996)389155', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(397, 'Шевчук Георгій Євгенович', '0501459600', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(398, 'Адам Янович Крамарчук', '0677637893', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(399, 'Мельниченко Назар Романович', '+380979213140', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(400, 'Діана Михайлівна Пономаренко', '+380979033789', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(401, 'Кравченко Кіра Володимирівна', '+380923514246', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(402, 'Мельниченко Максим Янович', '+380666044894', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(403, 'Павлюк Валерія Олександрівна', '+380961943111', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(404, 'Кравчук Лариса Євгенівна', '+380968802782', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(405, 'Валентин Васильович Кравчук', '0683488585', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(406, 'Ніна Олексіївна Шевченко', '0977633324', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(407, 'Василенко Любов Євгеніївна', '0985848727', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(408, 'Пономарчук Всеволод Іванович', '+380911187602', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(409, 'Лисенко Володимир Борисович', '0968396159', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(410, 'Васильєв Євгенія Олександрівна', '+380677395191', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(411, 'Лев Борисович Середа', '0963324528', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(412, 'Романченко Софія Олександрівна', '+380664144921', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(413, 'Федір Йосипович Середа', '+380924816222', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(414, 'Пономаренко Віра Євгенівна', '0504276550', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(415, 'Інна Валентинівна Кравченко', '+380675765083', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(416, 'Крамаренко Йосип Сергійович', '+38(044)0637870', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(417, 'Євгенія Володимирівна Кравчук', '+380674285835', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(418, 'Дмитренко Максим Олександрович', '+380968576878', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(419, 'Васильєв Павло Іванович', '0943758497', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(420, 'Анастасія Сергіївна Кравчук', '+380935806532', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(421, 'Василь Петрович Кравчук', '+38(0776)333896', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(422, 'Анастасія Тарасівна Захарчук', '+380507132566', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(423, 'Васильчук Максим Миколайович', '+380944830359', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(424, 'Дмитренко Олена Олексіївна', '0918489654', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(425, 'Гнатюк Раїса Андріївна', '+380660123208', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(426, 'Дмитренко Анастасія Олександрівна', '0504588031', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(427, 'Болеслав Миколайович Броварчук', '+380949047057', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(428, 'Сергієнко Валентина Янівна', '0950326338', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(429, 'Лариса Петрівна Шинкаренко', '0910326394', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(430, 'В\'ячеслав Анатолійович Сергієнко', '+380924275083', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(431, 'Юрій Євгенійович Кравчук', '+380975603248', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(432, 'Всеволод Миколайович Іванченко', '+380911081375', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(433, 'Тимофій Йосипович Кравченко', '+38(05880)51526', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(434, 'Поліна Євгенівна Пономарчук', '+380989246451', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(435, 'Павлюк Андрій Тарасович', '0678291439', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(436, 'Валентина Янівна Микитюк', '+380666792249', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(437, 'Ірина Михайлівна Гнатюк', '+380932164565', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(438, 'Василь Миколайович Шинкаренко', '0630268799', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(439, 'Вадим Олександрович Микитюк', '0500977317', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(440, 'Крамарчук Любов Володимирівна', '0968219000', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(441, 'Ярослава Валентинівна Микитюк', '+380920311382', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(442, 'Антоненко Олександра Романівна', '0919941533', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(443, 'Василенко Леонід Євгенійович', '0672772975', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(444, 'Крамарчук Тимофій Михайлович', '0965410439', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(445, 'Панасюк Діана Миколаївна', '+38(0087)250590', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(446, 'Боднаренко Олексій Іванович', '+380506354654', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(447, 'Лариса Валентинівна Шевченко', '0916421817', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(448, 'Мельниченко Віктор Васильович', '+380634570736', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(449, 'Євген Олексійович Сергієнко', '+380918826448', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(450, 'Євген Андрійович Броваренко', '0934943726', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(451, 'Раїса Володимирівна Броваренко', '+380935307835', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(452, 'Наташа Валентинівна Панасюк', '+380920015088', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(453, 'Анастасія Олександрівна Василенко', '+380667288073', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(454, 'Шинкаренко Софія Андріївна', '+380668809842', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(455, 'Шинкаренко Людмила Василівна', '+38(05722)06079', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(456, 'Владислав Володимирович Сергієнко', '+380680584028', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(457, 'Броваренко Владислав Володимирович', '0631980608', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(458, 'Дмитренко Болеслав Петрович', '+380944387263', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(459, 'Віктор Янович Шевченко', '0631468550', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(460, 'Євгенія Володимирівна Броварчук', '0683475016', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(461, 'Юлія Сергіївна Таращук', '+380965290023', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(462, 'Шевченко Богдан Анатолійович', '+380946898380', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(463, 'Середа Валентин Олексійович', '+380630175675', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(464, 'Лисенко Адам Володимирович', '+380989923986', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(465, 'Кравченко Костянтин Борисович', '+380951357257', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(466, 'Гнатюк Ярослав Федорович', '0953615603', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(467, 'Олексій Йосипович Сергієнко', '+380639107490', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(468, 'Кравченко Катерина Андріївна', '0674392586', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(469, 'Кравчук Тамара Олександрівна', '+38(096)7004060', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(470, 'Шевченко Віктор Михайлович', '+380667286437', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(471, 'Шинкаренко Євгеній Йосипович', '+38(06989)10687', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(472, 'Романченко Кирил Євгенійович', '0958713077', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(473, 'Олена Сергіївна Кравченко', '+380953759133', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(474, 'Боднаренко Ігор Олександрович', '+380947374766', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(475, 'Таращук Поліна Іванівна', '0959070666', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(476, 'Антон Валентинович Гнатюк', '+380921549357', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(477, 'Романченко Денис Валентинович', '+380956341904', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(478, 'Данило Андрійович Броваренко', '+380682495808', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(479, 'Васильєв Павло Андрійович', '+380997380174', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(480, 'Крамарчук Раїса Олексіївна', '0686365525', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(481, 'Лисенко Мирослав Анатолійович', '0506893446', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(482, 'Вадим Михайлович Шевченко', '+380947083058', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(483, 'Антоненко Анастасія Василівна', '+380966908394', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(484, 'Шинкаренко Тамара Борисівна', '0689287464', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(485, 'Броварчук Микита Анатолійович', '+380960823054', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(486, 'Тарас Васильович Панасюк', '+38(01098)58274', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(487, 'Мельниченко Віталій Тарасович', '+380686623537', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(488, 'Шинкаренко Вадим Петрович', '0967591107', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(489, 'Ірина Анатоліївна Лисенко', '0975452776', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(490, 'Броваренко Віра Янівна', '+380631483635', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(491, 'Петренко Ярослав Анатолійович', '0950534157', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(492, 'Лисенко Поліна Володимирівна', '0967850157', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(493, 'Мірошниченко Ілля Олександрович', '+380505791546', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29');
INSERT INTO `owner` (`id`, `name`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(494, 'Василенко Любов Борисівна', '0916182520', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(495, 'Крамарчук Микита Романович', '0677078456', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(496, 'Дмитренко Лариса Анатоліївна', '+380679826084', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(497, 'Васильєв Андрій Євгенійович', '0633986989', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(498, 'Кіра Романівна Захарчук', '+380979355256', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(499, 'Петренко Богдан Володимирович', '+380668235164', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(500, 'Пономарчук Олена Тарасівна', '+380979329535', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(501, 'Пономарчук Олексій Олексійович', '+380638519834', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(502, 'Васильєв Кіра Анатоліївна', '+380503296845', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(503, 'Олександра Миколаївна Шевченко', '+380954371033', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(504, 'Крамарчук Йосип Євгенович', '0915368077', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(505, 'Анна Олександрівна Боднаренко', '0683257822', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(506, 'Геннадій Євгенійович Броварчук', '0679779897', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(507, 'Борис Тарасович Крамарчук', '0630612466', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(508, 'Андрій Миколайович Крамарчук', '+380636031129', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(509, 'Олена Євгенівна Крамаренко', '+380669713674', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(510, 'Василенко Поліна Сергіївна', '0924114374', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(511, 'Іванченко Ярослава Федорівна', '0985603852', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(512, 'Ірина Андріївна Дмитренко', '0952032382', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(513, 'Броварчук Тетяна Сергіївна', '0676403273', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(514, 'Сергієнко Віктор Тарасович', '+380970252684', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(515, 'Крамаренко Олена Іванівна', '0984282863', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(516, 'Наташа Петрівна Шевчук', '0939132671', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(517, 'Павлюк Олена Євгенівна', '+38(09392)69814', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(518, 'Георгій Олексійович Василенко', '+38(0678)102576', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(519, 'Антоненко Руслан Андрійович', '+380677456262', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(520, 'Дар\'я Петрівна Гнатюк', '0681755846', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(521, 'Пономарчук Віра Володимирівна', '0911485433', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(522, 'Тамара Борисівна Шинкаренко', '0501810278', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(523, 'Мірошниченко Валерій Анатолійович', '0689675514', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(524, 'Крамаренко Данило Євгенович', '0950645769', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(525, 'Сергієнко Анастасія Володимирівна', '+380968585705', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(526, 'Сергієнко Валентина Янівна', '0673821157', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(527, 'Інна Володимирівна Василенко', '0954962202', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(528, 'Мирослав Олексійович Васильчук', '+38(03019)01169', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(529, 'Геннадій Олексійович Кравченко', '0991290794', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(530, 'Ірина Тарасівна Пономаренко', '0933059108', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(531, 'Броваренко Михайло Олександрович', '0953127526', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(532, 'Олександр Євгенович Романченко', '+380959329722', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(533, 'Гнатюк Єлизавета Олександрівна', '+380983021958', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(534, 'Олена Янівна Шевчук', '+380508632084', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(535, 'Романченко Кіра Олексіївна', '+380962353612', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(536, 'Кіра Сергіївна Кравчук', '+380508530384', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(537, 'Панасюк Катерина Янівна', '0938276639', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(538, 'Панасюк Алла Миколаївна', '+38(020)7995564', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(539, 'Іванченко Валентина Олександрівна', '+380947556653', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(540, 'Галина Михайлівна Кравчук', '+380937828391', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(541, 'Марія Валентинівна Васильчук', '0987572389', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(542, 'Боднаренко Алла Євгенівна', '0987351608', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(543, 'Васильчук Геннадій Борисович', '+380672125182', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(544, 'Йосип Борисович Антоненко', '0682114783', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(545, 'Віктор Сергійович Шинкаренко', '+380973991492', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(546, 'Віра Олександрівна Середа', '0680354344', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(547, 'Геннадій Валентинович Гнатюк', '+380509109710', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(548, 'Єлизавета Тарасівна Іванченко', '+380666737655', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(549, 'Пономаренко Людмила Валентинівна', '0916602065', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(550, 'Борис Янович Панасюк', '+38(0970)323812', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(551, 'Мельниченко Тамара Михайлівна', '0954322437', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(552, 'Таращук Наташа Іванівна', '0978786374', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(553, 'Кравченко Катерина Олексіївна', '+380968747753', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(554, 'Крамаренко Марина Валентинівна', '0663652681', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(555, 'Олена Андріївна Пономаренко', '+380959999100', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(556, 'Маргарита Романівна Пономарчук', '0671573708', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(557, 'Роман Євгенович Мельниченко', '+38(0170)577891', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(558, 'Назар Петрович Романченко', '+380929381489', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(559, 'Богдан Янович Мельниченко', '+380680672004', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(560, 'Крамарчук Валерій Миколайович', '0943166897', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(561, 'Діана Петрівна Боднаренко', '0962340517', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(562, 'Віталій Васильович Васильєв', '+380910761297', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(563, 'Пономарчук Тамара Андріївна', '+380943352319', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(564, 'Петренко Діана Олександрівна', '0980629395', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(565, 'Антоненко Денис Михайлович', '0688571446', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(566, 'Петренко Всеволод Федорович', '+380991455491', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(567, 'Романченко Ярослава Йосипівна', '+380982096282', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(568, 'Маргарита Романівна Таращук', '0943797181', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(569, 'Василенко Анна Андріївна', '+380922056204', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(570, 'Шевченко Богдан Олександрович', '+380985080540', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(571, 'Сергієнко Катерина Петрівна', '0924136243', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(572, 'Боднаренко Кіра Федорівна', '0963896516', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(573, 'Геннадій Валентинович Антоненко', '+380949847969', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(574, 'Василь Євгенійович Кравчук', '0994117895', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(575, 'Надія Михайлівна Романченко', '+380933245609', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(576, 'Лариса Михайлівна Лисенко', '0506881141', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(577, 'Боднаренко Данило Сергійович', '0990470008', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(578, 'Сергій Євгенійович Таращук', '0999497583', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(579, 'Наташа Йосипівна Василенко', '+380663788162', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(580, 'Захарчук Павло Васильович', '+380504126830', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(581, 'Світлана Борисівна Панасюк', '0501440168', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(582, 'Сергієнко Анастасія Євгенівна', '+38(071)5368683', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(583, 'Володимир Михайлович Сергієнко', '0676685591', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(584, 'Павлюк Сергій Олексійович', '+380678387168', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(585, 'Анатолій Петрович Броваренко', '0946400907', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(586, 'Лариса Петрівна Микитюк', '0966700871', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(587, 'Броваренко Роман Романович', '0990678693', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(588, 'Людмила Володимирівна Таращук', '0673681601', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(589, 'Іванченко Борис Романович', '+380920608159', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(590, 'Броварчук Олександра Сергіївна', '+38(067)7239631', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(591, 'Юлія Анатоліївна Павлюк', '+380965858236', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(592, 'Поліна Володимирівна Гнатюк', '0636539486', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(593, 'Василенко Ірина Сергіївна', '0969356398', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(594, 'Володимир Олександрович Микитюк', '0943778360', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(595, 'Захарчук Тарас Йосипович', '+380504130681', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(596, 'Павлюк Болеслав Романович', '0982895585', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(597, 'Ольга Романівна Боднаренко', '+380665052757', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(598, 'Гнатюк Михайло Андрійович', '+38(0265)536382', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(599, 'Анна Тарасівна Мірошниченко', '+380670050517', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(600, 'Надія Петрівна Боднаренко', '+380637433345', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(601, 'Віталій Євгенійович Гнатюк', '+380983491585', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(602, 'Олена Євгенівна Пономарчук', '0668608806', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(603, 'Шевченко Маргарита Євгенівна', '0669219004', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(604, 'Дмитренко Вікторія Євгенівна', '+38(09879)78160', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(605, 'Пономаренко Любов Романівна', '0639343935', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(606, 'Павло Йосипович Іванченко', '0668110534', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(607, 'Іванченко Федір Романович', '+380964060394', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(608, 'Артем Романович Мірошниченко', '+380682552120', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(609, 'Максим Янович Боднаренко', '+38(029)4372423', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(610, 'Світлана Володимирівна Романченко', '+380946551289', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(611, 'Ніна Йосипівна Сергієнко', '0962939884', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(612, 'Середа Єлизавета Андріївна', '+380961258970', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(613, 'Олександра Євгенівна Мельниченко', '+380980709740', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(614, 'Мірошниченко Маргарита Олександрівна', '+380666717176', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(615, 'Анна Петрівна Боднаренко', '0634382964', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(616, 'Василенко Юлія Олександрівна', '+380668260859', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(617, 'Гнатюк Поліна Сергіївна', '0666235771', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(618, 'Дар\'я Йосипівна Таращук', '+380921810308', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(619, 'Шевченко Людмила Петрівна', '0937105410', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(620, 'Василенко Валерія Михайлівна', '0507459367', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(621, 'Таращук Лариса Янівна', '+380992027991', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(622, 'Панасюк Валерій Васильович', '+380982957647', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(623, 'Броваренко Ольга Іванівна', '+380688912530', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(624, 'Середа Катерина Володимирівна', '0962720852', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(625, 'Петренко Анатолій Валентинович', '0687353314', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(626, 'Максим Миколайович Іванченко', '+380678390377', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(627, 'Романченко Галина Михайлівна', '0506274437', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(628, 'Мірошниченко Ніна Анатоліївна', '0937610130', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(629, 'Тетяна Петрівна Панасюк', '+380672058509', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(630, 'Кравчук Всеволод Йосипович', '0932672747', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(631, 'Таращук Людмила Романівна', '+380961400843', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(632, 'Кіра Олександрівна Кравчук', '+38(050)0099325', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(633, 'Пономарчук Анна Тарасівна', '+380988904618', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(634, 'Шинкаренко Анна Петрівна', '+380676385824', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(635, 'Пономаренко Олексій Тарасович', '0948734381', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(636, 'Василенко Леонід Валентинович', '+38(07297)58315', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(637, 'Денис Йосипович Сергієнко', '+380962059844', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(638, 'Мірошниченко Тимофій Петрович', '0923592135', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(639, 'Геннадій Васильович Крамарчук', '+380666500581', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(640, 'Володимир Валентинович Сергієнко', '+380636362190', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(641, 'Марія Андріївна Іванченко', '+380968256775', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(642, 'Васильчук Вадим Петрович', '+380671097374', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(643, 'Лев Андрійович Броваренко', '+38(01742)34958', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(644, 'Анастасія Іванівна Броварчук', '0982474417', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(645, 'Крамаренко Валерій Сергійович', '+380981704646', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(646, 'Пономаренко Станіслав Петрович', '+380688205322', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(647, 'Любов Федорівна Таращук', '+380683076912', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(648, 'Павлюк Валерія Романівна', '0942709761', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(649, 'Панасюк Інна Олександрівна', '0633592121', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(650, 'Мельниченко Оксана Сергіївна', '+380999291470', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(651, 'Надія Олександрівна Гнатюк', '+380914081647', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(652, 'Вікторія Володимирівна Васильєв', '0921397967', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(653, 'Броварчук Віра Михайлівна', '0910668003', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(654, 'Пономарчук Євген Борисович', '+380981109519', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(655, 'Надія Романівна Кравчук', '+380681141099', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(656, 'Середа Анна Михайлівна', '+38(0765)293077', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(657, 'Тамара Андріївна Пономарчук', '+380685510850', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(658, 'Анастасія Борисівна Шевчук', '+380509172536', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(659, 'Ілля Сергійович Микитюк', '+38(07275)74226', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(660, 'Іванченко Валентин Валентинович', '+380636055786', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(661, 'Захарчук Ольга Федорівна', '+380998431198', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(662, 'Васильчук Антон Володимирович', '+380631790908', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(663, 'Денис Євгенович Гнатюк', '+380958551823', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(664, 'Пономаренко Олена Романівна', '0999645020', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(665, 'Валерія Петрівна Шинкаренко', '+380967967297', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(666, 'Крамарчук Лев Йосипович', '+380991465163', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(667, 'Крамарчук Анна Анатоліївна', '+380913300801', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(668, 'Мірошниченко Олександра Олексіївна', '+380982200678', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(669, 'Васильчук Костянтин Миколайович', '0925321190', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(670, 'Дар\'я Романівна Пономарчук', '+38(031)1161023', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(671, 'Лисенко Катерина Олександрівна', '0978098242', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(672, 'Артур Володимирович Броварчук', '+380925719416', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(673, 'Лариса Романівна Шевчук', '+380977395740', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(674, 'Романченко Геннадій Борисович', '+380967662362', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(675, 'Максим Євгенійович Таращук', '0931110192', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(676, 'Павлюк Костянтин Володимирович', '+380633272462', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(677, 'Костянтин Євгенійович Василенко', '+380660892694', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(678, 'Дмитренко Ольга Романівна', '+380681489843', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(679, 'Денис Анатолійович Лисенко', '+380506556354', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(680, 'Максим Романович Гнатюк', '0985422445', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(681, 'Мірошниченко Назар Тарасович', '0662709063', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(682, 'Болеслав Володимирович Крамаренко', '+380961660065', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(683, 'Антоненко Микита Сергійович', '0999265204', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(684, 'Романченко Василь Борисович', '+38(02463)23007', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(685, 'Таращук Ігор Йосипович', '+380963390295', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(686, 'Маргарита Олексіївна Сергієнко', '+380992912707', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(687, 'Дмитренко Кирил Олексійович', '0980983304', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(688, 'Федір Валентинович Романченко', '+380938750442', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(689, 'Людмила Андріївна Васильєв', '0956572317', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(690, 'Антоненко Валерій Анатолійович', '+38(06659)62079', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(691, 'Лисенко Микита Володимирович', '+380962977792', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(692, 'Надія Михайлівна Мірошниченко', '+38(050)3421145', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(693, 'Катерина Іванівна Таращук', '+38(0402)761436', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(694, 'Боднаренко Євгеній Володимирович', '0631418161', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(695, 'Вікторія Тарасівна Павлюк', '0918529077', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(696, 'Дмитренко Сергій Петрович', '+380995878824', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(697, 'Олег Андрійович Мірошниченко', '+380502033336', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(698, 'Петренко Тарас Валентинович', '+380942248677', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(699, 'Броваренко Олександра Миколаївна', '+380981176980', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(700, 'Крамарчук Наташа Володимирівна', '0919182248', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(701, 'Броварчук Анастасія Миколаївна', '0942141870', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(702, 'Шевченко Ольга Федорівна', '+380637112710', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(703, 'Софія Борисівна Таращук', '0916732196', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(704, 'Панасюк Ілля Тарасович', '+380967393011', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(705, 'Юлія Андріївна Захарчук', '0957855452', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(706, 'Шинкаренко Валентин Михайлович', '0992757175', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(707, 'Марина Янівна Боднаренко', '0940291507', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(708, 'Павлюк Іван Андрійович', '+38(02807)70729', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(709, 'Дар\'я Борисівна Пономаренко', '0504441747', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(710, 'Васильчук Маргарита Михайлівна', '+380975493079', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(711, 'Крамаренко Марина Олександрівна', '0922311291', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(712, 'Лариса Анатоліївна Іванченко', '+380998017910', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(713, 'Поліна Валентинівна Панасюк', '0927541905', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(714, 'Лисенко Борис Миколайович', '0960928646', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(715, 'Богдан Борисович Боднаренко', '0925829524', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(716, 'Кравчук Костянтин Іванович', '0932929655', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(717, 'Антоненко Ігор Янович', '+380680526905', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(718, 'Сергієнко Данило Васильович', '+380947327002', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(719, 'Кравченко Володимир Володимирович', '+38(0145)982541', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(720, 'Олена Йосипівна Шевченко', '0676526648', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(721, 'Василенко Микола Валентинович', '+380676322008', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(722, 'Микита Євгенович Шевченко', '+380927007901', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(723, 'Костянтин Олексійович Броваренко', '+380942132126', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(724, 'Сергієнко Денис Валентинович', '0990401515', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(725, 'Тетяна Тарасівна Броваренко', '+380987092748', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(726, 'Мельниченко Раїса Петрівна', '+380674421539', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(727, 'Гнатюк Алла Михайлівна', '0688100613', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(728, 'Панасюк Тетяна Іванівна', '+380636749122', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(729, 'Галина Євгеніївна Кравчук', '0660718325', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(730, 'Василенко Марія Олексіївна', '+380968148472', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(731, 'Дмитро Борисович Антоненко', '0941954660', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(732, 'Вадим Володимирович Середа', '+380941155331', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(733, 'Таращук Маргарита Петрівна', '+380961655050', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(734, 'Валерія Володимирівна Кравчук', '+380502697642', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(735, 'Маргарита Василівна Захарчук', '0966115788', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(736, 'Павлюк Леонід Михайлович', '0958438597', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(737, 'Олена Федорівна Шинкаренко', '0977099108', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(738, 'Юрій Йосипович Пономарчук', '+380683090302', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(739, 'Шевчук Дмитро Романович', '+380932499557', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(740, 'Олена Петрівна Шевченко', '+380674728363', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(741, 'Костянтин Євгенійович Мельниченко', '+380675021330', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(742, 'Крамарчук Микита Федорович', '+380961000224', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(743, 'Євгенія Володимирівна Дмитренко', '+380983620507', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(744, 'Дар\'я Володимирівна Кравчук', '+380685015569', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(745, 'Анастасія Євгеніївна Павлюк', '0504001899', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(746, 'Кравченко Тетяна Анатоліївна', '0958657491', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(747, 'Раїса Євгеніївна Іванченко', '+380969864762', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(748, 'Володимир Васильович Панасюк', '+380984351706', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(749, 'Ольга Євгеніївна Пономаренко', '+380688403539', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(750, 'Петренко Дмитро Іванович', '0685499999', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(751, 'Антоненко Світлана Петрівна', '+380664239152', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(752, 'Шевченко Руслан Янович', '0662002837', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(753, 'Павлюк Тамара Володимирівна', '+380999292742', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(754, 'Тамара Василівна Васильчук', '+380912899191', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(755, 'Шевчук Віктор Олексійович', '0500847557', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(756, 'Іванченко Болеслав Тарасович', '0971789490', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(757, 'Мирослав Йосипович Пономаренко', '0972767946', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(758, 'Анна Сергіївна Пономаренко', '+380916120023', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(759, 'Боднаренко Борис Борисович', '+380926628382', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(760, 'Захарчук Артем Петрович', '0934969198', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(761, 'Броваренко Йосип Сергійович', '+380948698947', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(762, 'Таращук Інна Володимирівна', '+380949412882', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(763, 'Шевчук Анатолій Олександрович', '0504355804', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(764, 'Васильєв Михайло Михайлович', '0682501999', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(765, 'Олена Янівна Петренко', '0965839767', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(766, 'Панасюк Вадим Володимирович', '0968890565', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(767, 'Світлана Валентинівна Антоненко', '+380914746333', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(768, 'Крамаренко Єлизавета Миколаївна', '+38(075)9074827', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(769, 'Максим Федорович Сергієнко', '+380676876748', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(770, 'Катерина Тарасівна Гнатюк', '0960812803', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(771, 'Тарас Олексійович Крамаренко', '+380502678347', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(772, 'Мірошниченко Софія Володимирівна', '0933244226', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(773, 'Пономаренко Георгій Олексійович', '+380630997830', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(774, 'Іван Васильович Середа', '0638820897', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(775, 'Іван Володимирович Кравченко', '0946804607', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(776, 'Кравченко Катерина Олексіївна', '0500461907', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(777, 'Олександра Петрівна Шевченко', '+38(0818)300899', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(778, 'Сергій Йосипович Дмитренко', '+380689386967', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(779, 'Борис Борисович Шинкаренко', '0509384637', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(780, 'Єлизавета Валентинівна Микитюк', '+38(0361)932764', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(781, 'Пономарчук Маргарита Валентинівна', '0987461257', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(782, 'Васильчук Євгеній Сергійович', '+38(08150)01916', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(783, 'Панасюк Юлія Іванівна', '+380666308643', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(784, 'Анатолій Йосипович Панасюк', '+380669873316', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(785, 'Сергієнко Надія Володимирівна', '+380943032792', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(786, 'Віктор Андрійович Захарчук', '+380935701739', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(787, 'Дмитренко Руслан Анатолійович', '+380682304015', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(788, 'Наташа Сергіївна Крамарчук', '+380685349534', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(789, 'Геннадій Анатолійович Броварчук', '+380942276937', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(790, 'Пономаренко Юлія Янівна', '+380921524516', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(791, 'Раїса Романівна Середа', '+38(0147)509864', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(792, 'Федір Романович Павлюк', '+380953418483', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(793, 'Валентина Федорівна Васильєв', '0961822989', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(794, 'Адам Федорович Мірошниченко', '0969833369', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(795, 'Анна Сергіївна Лисенко', '0638594902', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(796, 'Юрій Петрович Панасюк', '+380962482227', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(797, 'Євгенія Андріївна Крамарчук', '+380918831217', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(798, 'Маргарита Федорівна Броварчук', '0993685869', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(799, 'Наташа Борисівна Лисенко', '+380940426141', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(800, 'Андрій Сергійович Павлюк', '+380970304226', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(801, 'Васильчук Болеслав Петрович', '+380917314217', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(802, 'Максим Васильович Васильєв', '+380670665092', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(803, 'Васильчук Катерина Василівна', '0982466442', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(804, 'Олександр Тарасович Середа', '+38(0923)769308', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(805, 'Антоненко Віктор Євгенович', '0637211979', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(806, 'Алла Іванівна Сергієнко', '0674229436', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(807, 'Захарчук Руслан Янович', '0509233483', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(808, 'Павлюк Денис Борисович', '+380929646625', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(809, 'Євгеній Васильович Гнатюк', '+380671139715', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(810, 'Василенко Оксана Миколаївна', '0953660872', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(811, 'Кирил Борисович Шевченко', '+380966263590', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(812, 'Середа Ігор Євгенійович', '+380506869924', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(813, 'Кравченко Максим Анатолійович', '+380509256453', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(814, 'Анатолій Володимирович Петренко', '0508794855', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(815, 'Сергієнко Федір Євгенович', '0962864062', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(816, 'Таращук Надія Борисівна', '+380636432065', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(817, 'Євген Олексійович Крамаренко', '+380999242878', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(818, 'Гнатюк Валентина Миколаївна', '+380688531765', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(819, 'Гнатюк Оксана Андріївна', '+380986023081', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(820, 'Маргарита Борисівна Крамаренко', '+380961057118', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(821, 'Оксана Володимирівна Антоненко', '+38(00952)08979', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(822, 'Лев Сергійович Петренко', '+380679232407', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(823, 'Раїса Миколаївна Сергієнко', '+38(079)5550572', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(824, 'Олександр Тарасович Крамаренко', '+380967427655', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(825, 'Крамарчук Антон Олександрович', '0934863428', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(826, 'Микитюк Євгеній Федорович', '0954656507', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(827, 'Захарчук Марина Борисівна', '+380916104595', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(828, 'Середа Єлизавета Федорівна', '+380507020696', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(829, 'Панасюк Євгеній Євгенійович', '0633359331', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(830, 'Діана Андріївна Васильчук', '0957444051', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(831, 'Мірошниченко Анна Тарасівна', '+380684963558', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(832, 'Ігор Сергійович Боднаренко', '0938678816', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(833, 'Броварчук Данил Борисович', '0683642591', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(834, 'Таращук Борис Янович', '+380661784811', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(835, 'Мірошниченко Георгій Михайлович', '+380669574683', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(836, 'Крамаренко Леонід Валентинович', '+380633774174', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(837, 'Романченко Володимир Янович', '+380674034352', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(838, 'Сергієнко Кіра Борисівна', '+380944720560', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(839, 'Артур Васильович Кравчук', '+380988060244', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(840, 'Лариса Сергіївна Пономарчук', '0964951634', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(841, 'Панасюк Василь Валентинович', '+380922392861', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(842, 'Антоненко Артур Андрійович', '0968948350', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(843, 'Шевчук Світлана Валентинівна', '0982914326', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(844, 'Юрій Тарасович Сергієнко', '+380959189781', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(845, 'Петренко Діана Михайлівна', '0688907755', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(846, 'Вікторія Янівна Антоненко', '+380955073595', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(847, 'Романченко Геннадій Борисович', '+380963424221', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(848, 'Дмитренко Оксана Федорівна', '+380509190692', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(849, 'Броваренко Віталій Андрійович', '+38(02959)85201', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(850, 'Панасюк Поліна Андріївна', '+38(0345)725641', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(851, 'Шевченко Софія Йосипівна', '0932485405', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(852, 'Артур Петрович Мірошниченко', '0966820101', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(853, 'Шинкаренко Анатолій Романович', '+380504612100', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(854, 'Ігор Йосипович Броварчук', '0680906757', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(855, 'Костянтин Валентинович Василенко', '+380688208118', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(856, 'Броварчук Данил Іванович', '+380952105307', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(857, 'Світлана Тарасівна Василенко', '0637819648', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(858, 'Поліна Миколаївна Шевченко', '0946640308', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(859, 'Валентин Романович Іванченко', '+38(0286)721548', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(860, 'Броваренко Руслан Миколайович', '+380672129965', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(861, 'Захарчук Анастасія Володимирівна', '+380670361724', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(862, 'Мірошниченко Тарас Тарасович', '+380923097267', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(863, 'Лисенко Валентин Анатолійович', '+38(0430)014096', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(864, 'Шевчук Діана Володимирівна', '0502025615', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(865, 'Броварчук Валентин Іванович', '0960407640', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(866, 'Микитюк Кіра Євгенівна', '+38(00768)65510', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(867, 'Микитюк Валерій Володимирович', '+380911466159', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(868, 'Кравчук Тимофій Володимирович', '0989093829', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(869, 'Васильчук Ігор Анатолійович', '+38(08293)16456', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(870, 'Романченко Леонід Валентинович', '0958748937', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(871, 'Захарчук Валентин Євгенійович', '0954410579', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(872, 'Світлана Валентинівна Шевченко', '0925608235', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(873, 'Броваренко Андрій Янович', '+380947847390', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(874, 'Романченко Віктор Йосипович', '0635286192', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(875, 'Шевченко Олександра Тарасівна', '0667958624', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(876, 'Ірина Олександрівна Панасюк', '0977531470', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(877, 'Тетяна Федорівна Мельниченко', '0915921438', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(878, 'Боднаренко Лариса Тарасівна', '0977972893', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(879, 'Шевчук Всеволод Андрійович', '0949826368', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(880, 'Марина Олексіївна Шевчук', '0682288849', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(881, 'Павлюк Дмитро Янович', '+380503242568', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(882, 'Гнатюк Данил Борисович', '+380988826621', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(883, 'Петренко Володимир Петрович', '+380954550240', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(884, 'Кравчук Данило Євгенійович', '+380665319977', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(885, 'Шинкаренко Назар Олексійович', '0952843333', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(886, 'Пономарчук Олена Валентинівна', '+380931022913', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(887, 'Васильєв Катерина Федорівна', '0913344837', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(888, 'Мельниченко Діана Андріївна', '0679211736', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(889, 'Наташа Янівна Кравчук', '+38(0284)996167', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(890, 'Тамара Петрівна Пономарчук', '+380947401166', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(891, 'Захарчук Вікторія Олексіївна', '0682667401', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(892, 'Мельниченко Сергій Васильович', '+38(0808)546796', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(893, 'Віктор Олексійович Романченко', '+380960578907', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(894, 'Васильєв Ніна Борисівна', '+380924458533', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(895, 'Броварчук Юлія Сергіївна', '+380677320189', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(896, 'Шинкаренко Віра Сергіївна', '0960319719', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(897, 'Петренко Микита Сергійович', '+380997505363', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(898, 'Софія Іванівна Василенко', '+380508265436', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(899, 'Броварчук Дмитро Володимирович', '0633724840', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(900, 'Кравчук Микита Валентинович', '+380943833989', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(901, 'Лисенко Валерій Анатолійович', '0974894184', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(902, 'Крамарчук Євгенія Василівна', '+380910259173', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(903, 'Кравчук Дар\'я Борисівна', '0639350721', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(904, 'Леонід Петрович Таращук', '0500048258', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(905, 'Борис Олександрович Петренко', '0926343812', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(906, 'Кирил Борисович Крамарчук', '+380999622476', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(907, 'Лев Олексійович Броварчук', '0684582678', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(908, 'Дмитренко Наташа Федорівна', '+380662624743', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(909, 'Сергієнко Дар\'я Михайлівна', '0923498090', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(910, 'Васильєв Ірина Валентинівна', '+380683503168', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(911, 'Раїса Тарасівна Боднаренко', '0630095751', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(912, 'Броваренко Ігор Володимирович', '0508265777', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(913, 'Борис Сергійович Романченко', '0914273339', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(914, 'Гнатюк Валерій Йосипович', '+380675703189', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(915, 'Шевченко Софія Михайлівна', '+380686664067', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(916, 'Георгій Андрійович Боднаренко', '+380930316134', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(917, 'Сергієнко Тетяна Євгенівна', '+380684123547', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(918, 'Максим Йосипович Пономарчук', '+380937841640', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(919, 'Романченко Артем Петрович', '+380968493084', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(920, 'Данило Тарасович Захарчук', '0950448835', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(921, 'Іванченко Віктор Сергійович', '+380669250520', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(922, 'Данил Анатолійович Шинкаренко', '+380969655993', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(923, 'Дмитренко Світлана Миколаївна', '+380967067375', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(924, 'Лариса Йосипівна Шинкаренко', '+380502823605', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(925, 'Дмитренко Інна Валентинівна', '+380939246131', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(926, 'Гнатюк Оксана Федорівна', '0944643406', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(927, 'Броварчук Руслан Борисович', '0969393553', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(928, 'Інна Романівна Шинкаренко', '+380981670284', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(929, 'Броваренко Михайло Петрович', '0961870029', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(930, 'Сергієнко Федір Анатолійович', '+380981466791', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(931, 'Василь Миколайович Петренко', '0917024453', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(932, 'Микитюк Вікторія Василівна', '+38(0721)628475', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(933, 'Маргарита Євгеніївна Васильєв', '0676684572', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(934, 'Мірошниченко Світлана Андріївна', '+380630575609', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(935, 'Павло Васильович Микитюк', '0505859164', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(936, 'Артем Васильович Крамарчук', '0931850523', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(937, 'Захарчук Михайло Олександрович', '0943624140', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(938, 'Алла Петрівна Лисенко', '0665322218', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(939, 'Гнатюк Любов Анатоліївна', '+380996459513', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(940, 'Йосип Федорович Пономарчук', '+380689251558', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(941, 'Іванченко Олександр Михайлович', '+380965002037', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(942, 'Боднаренко Діана Петрівна', '+380937366293', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(943, 'Васильчук Віктор Анатолійович', '0672822137', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(944, 'Григорій Андрійович Васильчук', '0923590352', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(945, 'Катерина Йосипівна Павлюк', '0975984250', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(946, 'Олена Володимирівна Петренко', '0679878995', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(947, 'Іванченко Станіслав Романович', '+380685815234', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(948, 'Олексій Андрійович Броваренко', '0678273336', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(949, 'Крамарчук Людмила Романівна', '+380507745206', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(950, 'Володимир Євгенович Іванченко', '+38(02556)84133', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(951, 'Павлюк Ігор Сергійович', '0507489945', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(952, 'Васильчук Ніна Іванівна', '0986050519', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(953, 'Крамарчук Назар Володимирович', '0932165460', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(954, 'Павло Володимирович Лисенко', '+380998888226', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(955, 'Маргарита Федорівна Пономаренко', '0982992745', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(956, 'Олена Валентинівна Мірошниченко', '0678654849', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(957, 'Павлюк Маргарита Тарасівна', '0638923962', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(958, 'Федір Тарасович Мельниченко', '+380638371092', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(959, 'Таращук Тимофій Петрович', '0505218734', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(960, 'Панасюк Галина Сергіївна', '0502565699', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(961, 'Пономаренко Валерія Янівна', '0670247942', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(962, 'Кравченко Діана Валентинівна', '+38(0735)349505', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(963, 'Шевчук Віталій Петрович', '0927969077', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(964, 'Сергієнко Олег Валентинович', '0939351181', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(965, 'Дар\'я Валентинівна Пономарчук', '+380924860925', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(966, 'Панасюк Ольга Янівна', '0681154113', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(967, 'Шинкаренко Тамара Сергіївна', '+380633691889', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(968, 'Руслан Сергійович Васильєв', '+380934002098', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(969, 'Максим Євгенович Сергієнко', '+38(045)4660233', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(970, 'Сергієнко Антон Борисович', '+38(0309)053444', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(971, 'Ярослав Андрійович Гнатюк', '0989903545', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(972, 'Шевчук Костянтин Анатолійович', '0683533064', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(973, 'Шевчук Федір Федорович', '+380963684345', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(974, 'Ярослава Федорівна Сергієнко', '0955953920', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29');
INSERT INTO `owner` (`id`, `name`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(975, 'Руслан Андрійович Броваренко', '+38(0041)934082', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(976, 'Борис Йосипович Пономаренко', '+38(005)3150816', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(977, 'Лариса Тарасівна Іванченко', '+380979886799', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(978, 'Андрій Федорович Павлюк', '0670626799', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(979, 'Броварчук Валентин Анатолійович', '0968260256', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(980, 'Галина Янівна Боднаренко', '+38(02874)28309', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(981, 'Середа Валентина Михайлівна', '0970066291', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(982, 'Світлана Євгеніївна Середа', '+380968136288', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(983, 'Денис Валентинович Панасюк', '0639926474', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(984, 'Євгенія Анатоліївна Дмитренко', '0939985199', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(985, 'Костянтин Петрович Антоненко', '0960315100', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(986, 'Світлана Анатоліївна Павлюк', '+380959122035', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(987, 'Ніна Іванівна Мельниченко', '+380636109063', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(988, 'Кравчук Георгій Олексійович', '+380660392368', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(989, 'Лисенко Любов Євгенівна', '0687725041', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(990, 'Артем Євгенійович Середа', '0967988417', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(991, 'Мірошниченко Олена Тарасівна', '+380993674561', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(992, 'Марина Анатоліївна Мельниченко', '0918654865', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(993, 'Софія Володимирівна Шевчук', '+380969823256', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(994, 'Шевченко Віра Йосипівна', '+380688528095', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(995, 'Артур Валентинович Панасюк', '+380635488468', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(996, 'Владислав Васильович Васильчук', '+380911482445', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(997, 'Таращук Кирил Андрійович', '+380964669938', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(998, 'Кирил Євгенійович Панасюк', '0985144185', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(999, 'Петренко Євгеній Тарасович', '+380670912234', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(1000, 'Павлюк Ольга Олександрівна', '+38(089)3241930', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(1001, 'Сергієнко Марія Іванівна', '+380676277416', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(1002, 'Таращук Катерина Романівна', '0918273688', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(1003, 'Антоненко Євген Сергійович', '0668251769', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(1004, 'Анна Валентинівна Броваренко', '0969859292', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(1005, 'Антоненко Леонід Олександрович', '0911001211', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(1006, 'Федір Володимирович Пономаренко', '+380667855291', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(1007, 'Антоненко Віра Миколаївна', '0660397058', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(1008, 'Олена Андріївна Кравченко', '0637881434', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(1009, 'Крамаренко Віра Петрівна', '+380966730466', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29'),
(1010, 'Галина Андріївна Панасюк', '0634356613', NULL, '2021-07-08 20:21:29', '2021-07-08 20:21:29');

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
  `value` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatede_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `value`, `created_at`, `updatede_at`) VALUES
(1, 'phone1', ' +38 (096) 425 84 55', '2021-06-20 19:23:34', '2021-06-20 19:23:34'),
(2, 'phone2', ' +38 (096) 203 02 60', '2021-06-20 19:23:50', '2021-06-20 19:23:50'),
(3, 'email', 'zhitomir.myno@gmail.ocm', '2021-06-20 19:24:06', '2021-06-20 19:24:06'),
(4, 'address', 'м.Житомир вул.Леха Качинського буд. 1, офіс 55', '2021-06-20 19:24:22', '2021-06-20 19:24:22'),
(5, 'social', 'facebook.com', '2021-06-20 19:24:54', '2021-06-20 19:24:54'),
(6, 'social', 'youtube.com', '2021-06-20 19:25:11', '2021-06-20 19:25:11'),
(7, 'social', 'instagram.com', '2021-06-20 19:25:12', '2021-06-20 19:25:12');

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
(1, 'цегла\r\n', '2021-06-20 19:34:22', '2021-06-20 19:34:22'),
(2, 'каркасний\r\n', '2021-06-20 19:34:38', '2021-06-20 19:34:38'),
(3, 'силікатна цегла\r\n', '2021-06-20 19:34:44', '2021-06-20 19:34:44'),
(4, 'панель\r\n', '2021-06-20 19:34:50', '2021-06-20 19:34:50'),
(5, 'піноблок\r\n', '2021-06-20 19:34:57', '2021-06-20 19:34:57'),
(6, 'моноліт\r\n', '2021-06-20 19:35:07', '2021-06-20 19:35:07'),
(7, 'ракушняк\r\n', '2021-06-20 19:35:12', '2021-06-20 19:35:12'),
(8, 'блочно-цегляний', '2021-06-20 19:35:19', '2021-06-20 19:35:19');

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
(10, 'Йосип Федорович Антоненко', 'cbrovarenko@example.org', 0, '2021-07-08 20:15:53', '$2y$10$MRVFGRvT3yrV.lrtup9TQO15NrtNP4KKdD12EqI8C43m9z1ks9H06', 'avatar.png', '000-000-0000', 'YyPYznYlb4BqGCZYnTqNNV03NxDUTlbv9onNI1GOxb4ysyPBkrvFElLznLJB', '2021-07-08 20:15:55', '2021-07-08 20:15:55'),
(12, 'Броваренко Данило Михайлович', 'tetana.brovarcuk@example.org', 0, '2021-07-08 20:16:44', '$2y$10$lHYqOYNIP9wvXWoAUzh.qORfTP5IEUODcJCUrZVfwSzr/oIvKfxny', 'avatar.png', '+380987842777', 'jsLca8CC5v', '2021-07-08 20:16:46', '2021-07-08 20:16:46'),
(13, 'Валентин Олександрович Мірошниченко', 'olga.petrenko@example.com', 0, '2021-07-08 20:16:44', '$2y$10$0NMd4f61CyjxPI0ymKN9Yu23Q2fbw//PGr4VN/DhLwiTiiHFc.2qe', 'avatar.png', '0667628469', 'n2GOe1yScg', '2021-07-08 20:16:46', '2021-07-08 20:16:46'),
(14, 'Пономаренко Поліна Миколаївна', 'anton35@example.com', 0, '2021-07-08 20:16:44', '$2y$10$PWV/fcOUSiwQKwGPraNuw.Vt3/t867detc3qrg7mO5Ph0JBi9J/Mu', 'avatar.png', '0661788804', 'lEsKxBeND6', '2021-07-08 20:16:46', '2021-07-08 20:16:46'),
(15, 'Катерина Федорівна Романченко', 'anatolij.panasuk@example.com', 0, '2021-07-08 20:16:44', '$2y$10$uxJEbgYdZQM3J9D.DyBm/Oi3RANsVISEamEUPcGt836dRiMtn377i', 'avatar.png', '0671076495', 'UhMyz1aank', '2021-07-08 20:16:46', '2021-07-08 20:16:46'),
(16, 'Юлія Янівна Сергієнко', 'oksana46@example.org', 0, '2021-07-08 20:16:44', '$2y$10$jzVSda0eanLtLKED06AUbuzKuJYTYaM39rZOAzeiOzrTXzLuVsSu2', 'avatar.png', '+380965789559', '0w9fGFozT9', '2021-07-08 20:16:46', '2021-07-08 20:16:46'),
(17, 'Ілля Йосипович Пономаренко', 'bodnarenko.margarita@example.net', 0, '2021-07-08 20:16:44', '$2y$10$fmIJjWujRn5It7E7JmvY2uhAbu/2WnXPQP77pdtofF0pwOGStl76q', 'avatar.png', '0940951862', 'I0uE9BaESa', '2021-07-08 20:16:46', '2021-07-08 20:16:46'),
(18, 'Данило Йосипович Васильчук', 'dmitrenko.dara@example.com', 0, '2021-07-08 20:16:45', '$2y$10$VIAo9R9kiElppLHSqRADquflN6uHDNxu.NBI5RN49a1Qk29bp0exm', 'avatar.png', '+380939757874', 'YGjP6w2laf', '2021-07-08 20:16:46', '2021-07-08 20:16:46'),
(19, 'Васильєв Любов Олександрівна', 'xsergienko@example.org', 0, '2021-07-08 20:16:45', '$2y$10$Me5.AxN/Ycv6ve0kTh8rauSY2AefMWm1KpLEBc1dk8EyZekhJUDFm', 'avatar.png', '0960372236', 'yWU5nc0mwt', '2021-07-08 20:16:46', '2021-07-08 20:16:46'),
(20, 'Шевчук Іван Янович', 'petrenko.kira@example.net', 0, '2021-07-08 20:16:45', '$2y$10$ETbXM51UEQKPj/8VsIZJ/O6F/g8QR3KnEBJrYBPow7Ixr0qJT81aG', 'avatar.png', '+380997637365', 'Io0Hzi6fwm', '2021-07-08 20:16:46', '2021-07-08 20:16:46'),
(21, 'Денис Федорович Панасюк', 'ebodnarenko@example.com', 0, '2021-07-08 20:16:45', '$2y$10$9B2dUXv07b9Yi7Z3EmqglupNkLiDzLosx3PEBdlj2uzLq8OyfMoPW', 'avatar.png', '+38(0593)158446', 'iO7Geae24w', '2021-07-08 20:16:46', '2021-07-08 20:16:46'),
(22, 'Микитюк Ірина Володимирівна', 'vasilev.timofij@example.com', 0, '2021-07-08 20:16:45', '$2y$10$xij0L..2vYVczcLGIjSzneEORkoG2FINPXWyS.IA5VnKwM2bVd4XS', 'avatar.png', '0939160733', 'sxPXIvzpJq', '2021-07-08 20:16:46', '2021-07-08 20:16:46'),
(23, 'Романченко Катерина Андріївна', 'valeria.mirosnicenko@example.com', 0, '2021-07-08 20:16:45', '$2y$10$mchjxJkKqcwBoVKK8Xzf9O4XXMPIiT0vtkzoKOFa4rAdJjk2r15e2', 'avatar.png', '+380968725914', 'LlN7mcrG2p', '2021-07-08 20:16:46', '2021-07-08 20:16:46'),
(24, 'Йосип Олексійович Крамарчук', 'kostantin87@example.net', 0, '2021-07-08 20:16:45', '$2y$10$HgJegBnk.T.YULRnB2bHI.o4inZm86.6yyfeF8rUV6TQYxMqcYOEy', 'avatar.png', '+38(02311)96042', '4CoCjVL7ry', '2021-07-08 20:16:46', '2021-07-08 20:16:46'),
(25, 'Євгенія Сергіївна Панасюк', 'ivancenko.nina@example.net', 0, '2021-07-08 20:16:45', '$2y$10$2ZYdO2sDO7mym7OjdnX74Oqfarl5doBVC3q0Ny24tZQfVqD7GzYNG', 'avatar.png', '+380933757195', 'EvkgC60uSF', '2021-07-08 20:16:46', '2021-07-08 20:16:46'),
(26, 'Євгенія Валентинівна Василенко', 'timofij50@example.net', 0, '2021-07-08 20:16:45', '$2y$10$.dRwEMa5b0v8W1tzWJqBKeo9sCltG9f0GgV6vGDY8G0zkWfmzbMV.', 'avatar.png', '0948276617', 'xdSoSdfylI', '2021-07-08 20:16:46', '2021-07-08 20:16:46'),
(27, 'Боднаренко Йосип Євгенович', 'volodimir.sevcenko@example.net', 0, '2021-07-08 20:16:46', '$2y$10$lZK19AuadZQFQ4.lQqAnrOtzFY0aBJ958AP3Qs1rTNpRHZ4CzianW', 'avatar.png', '+380923045195', 'Sq2BN3pMLl', '2021-07-08 20:16:46', '2021-07-08 20:16:46'),
(28, 'Олександра Федорівна Дмитренко', 'valeria98@example.net', 0, '2021-07-08 20:16:46', '$2y$10$.UzGWQ6LbUAPbE9GyowEEO2W0l2Moei4uhZP8wY0uX2oljD4766tW', 'avatar.png', '+380910397579', 'vnqOF2dqi9', '2021-07-08 20:16:46', '2021-07-08 20:16:46'),
(29, 'Ярослав Євгенович Мельниченко', 'sergienko.galina@example.net', 0, '2021-07-08 20:16:46', '$2y$10$VZboV97RwrajUVvrWyW.keFRtdX0qk2iSWgRIiNULrGQaF0V/XJnq', 'avatar.png', '+380630422507', 'ETKPPxKGSO', '2021-07-08 20:16:46', '2021-07-08 20:16:46'),
(30, 'Надія Андріївна Пономаренко', 'mikola94@example.com', 0, '2021-07-08 20:16:46', '$2y$10$LkSdfTzisiT045GozpMKpOMtKPENi7wBNAFDPe9u61V.FhpS09Hs.', 'avatar.png', '0959903272', 'gBhAGGXrPX', '2021-07-08 20:16:46', '2021-07-08 20:16:46'),
(31, 'Євген Олександрович Кравчук', 'mikituk.olena@example.net', 0, '2021-07-08 20:16:46', '$2y$10$56VaCnlMHI8evTqg.xHNiOWBJkQXNN0SAmm0YOgGfnsx8RoB.IHQq', 'avatar.png', '+38(000)6887843', 'el82Hn2lto', '2021-07-08 20:16:46', '2021-07-08 20:16:46');

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
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `obekts`
--
ALTER TABLE `obekts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1011;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `type_wall`
--
ALTER TABLE `type_wall`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

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
