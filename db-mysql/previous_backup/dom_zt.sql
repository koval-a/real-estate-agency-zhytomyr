-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 07, 2021 at 11:42 PM
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
(17, '1624225708.png', 'Оренда нерухомості: як сплачується податок та чи діють пільги', 'Головне управління ДПС у Житомирській області нагадує, що згідно зі ст. 266 Податкового кодексу об\'єктом оподаткування податком на нерухоме майно, відмінне від земельної ділянки, є об\'єкт житлової та нежитлової нерухомості, в тому числі його частка.\r\n\r\nКрім того, нормами статті 266 ПК передбачено пільги зі сплати податку на нерухоме майно, відмінне від земельної ділянки. Водночас, пільги з податку, що сплачується на відповідній території з об\'єктів житлової нерухомості, для фізичних осіб не надаються на об\'єкти оподаткування, що використовуються їх власниками з метою одержання доходів (здаються в оренду, лізинг, позичку, використовуються у підприємницькій діяльності).\r\n\r\nСлідкуйте за реєстраційними змінами нерухомості в системі SMS-Маяк. Захистіть свій бізнес та нерухомість від рейдерства\r\n\r\nЗгідно з нормою ст. 810 глави 59 Цивільного кодексу договором найму (оренди) житла визнається цивільно-правовий договір, в силу якого одна сторона - власник житла (наймодавець) передає або зобов\'язується передати другій стороні (наймачеві) житло для проживання у ньому на певний строк за плату. Наявність саме цивільно-правового договору є необхідною умовою для того, щоб відповідна операція вважалася орендною операцією для підтвердження здачі житла в оренду.\r\n\r\nОбчислення суми податку з об\'єкта/об\'єктів житлової нерухомості, які перебувають у власності фізичної особи, здійснюється контролюючим органом за місцем податкової адреси (місцем реєстрації) власника такої нерухомості.\r\n\r\nПлатники податку мають можливість звернутися з письмовою заявою до контролюючого органу за своєю податковою адресою для проведення звірки даних, зокрема, щодо об\'єктів житлової нерухомості, в тому числі їх часток, що перебувають у їх власності, права на користування пільгою зі сплати податку.\r\n\r\nОтже, якщо фізична особа - власник об\'єкта житлової нерухомості протягом кількох місяців звітного року здавала об\'єкт житлової нерухомості в оренду, пільга зі сплати податку на нерухоме майно, відмінне від земельної ділянки, на такий об\'єкт не застосовується починаючи з того місяця, в якому фактично об\'єкт здавався в оренду, та до кінця місяця, в якому припинено здачу в оренду такого об\'єкта.', 'orenda-nerukhomost-yak-splachu-tsya-podatok-ta-chi-d-yut-p-lgi', 2, 1, '2021-06-20 18:48:28', '2021-06-20 18:48:28'),
(18, 'blog.jpeg', 'Test blog post', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis deleniti distinctio mollitia nihil perspiciatis. Aut autem cupiditate dolores doloribus enim facilis id, maxime nesciunt nobis ratione sed soluta sunt tempore?', 'test-blog-post', 2, 1, '2021-06-20 18:57:26', '2021-06-20 18:57:26'),
(19, 'blog.jpeg', 'Валерій Зайченко про ситуацію на ринку нерухомості Житомира, ціни на квартири та «безкоштовних екскурсоводів»', 'Валерій Зайченко працює на житомирському ринку нерухомості з 1998 року, тривалий час очолює громадську організацію «Житомирська рієлторська палата». Який сьогодні ринок нерухомості в обласному центрі, скільки коштують квартири та чому покупці почали знову поглядати на вторинний ринок – читайте в інтерв’ю з експертом по нерухомості та інвестиціях Валерієм Зайченком.\r\n\r\n– Який сьогодні ринок нерухомості в Житомирі, які ціни?\r\n\r\n– Досить жвавий, але трохи бідний вторинний ринок на одно- та двокімнатні квартири. Ціна квартири на вторинному ринку залежить від району її розташування, поверху, стану та швидкості продажу. В середньому ціни на однокімнатні квартири – від 18000 до 28000 доларів США , на двокімнатні – від 21000 до 35000 доларів США, а на квартири з більшою кількістю кімнат ще на 10-20% вище.\r\n\r\n– А яка ситуація сьогодні на первинному ринку Житомира?\r\n\r\n– Я працюю на ринку нерухомості вже досить довго і завжди мріяв, щоб в Житомирі почали з’являтися новобудови. Багато проводив роботи зі своїм колективом по залученню інвестиційно-будівельних компаній для розбудови Житомира, але якось вони не могли вирішити з нашою мерією ці організаційні питання… І на щастя житомирян та жителів Житомирської області, останні роки «диво» сталося – багатоповерхові комплекси прикрасили наше місто. Біля 70% покупців з вторинного ринку впродовж 3-х років купляли новобудови. І це було однією з причин зниження цін на вторинному ринку до весни 2019 року. Ціни на новобудови коливаються від 13000 до 15000 гривень за квадратний метр. Є знижки, є розстрочки – все індивідуально в кожному ЖК.\r\n\r\n\r\n\r\n– Що трапилось весною 2019 року на ринку нерухомості Житомира?\r\n\r\n– На мій особистий погляд, весною покупці стали більш прискіпливо ставитися до новобудов, їх ступеню готовності, термінів здачі будинків в експлуатацію та підключення мереж до цих будинків. Також стали прислуховуватись до тих, хто вже купив та зробив ремонт й розповідав, з якими труднощами зіткнувся при цьому. Порівнявши ціни первинного та вторинного ринків, частина покупців повернулась на вторинний ринок. До речі, зробити ремонт квартири в Житомирі коштує від 200 доларів за квадратний метр, це разом із матеріалами. Саме тому ми бачимо підвищення ціни на житло на вторинному ринку Житомира з літа і до середини осені, плюс до цього – «просів» долар.\r\n\r\n– Яка ситуація зараз і які прогнози?\r\n\r\n– Сьогодні ситуація більш-менш стабільна – покупці на первинному та вторинному ринках 50х50. Але всі з нетерпінням чекають, коли почнуть рости поверхи в ЖК, які знаходяться в самому центрі. Ситуація до Нового року значно не зміниться, якщо не буде росту долара та суттєвої зміни економічної ситуації в Україні, і загострення бойових дій на Сході.\r\n\r\n– Рієлтори допомагають відділам продаж житлових комплексів реалізовувати квартири?\r\n\r\n– Рієлторів сьогодні ділять на категорії – «безкоштовні екскурсоводи» і «профі». Відділам продаж з «безкоштовними екскурсоводами» працювати було просто і зручно. А «профі» для них конкуренти – вони укладають договори, контролюють купівлю-продаж, «вибивають» преференції і знижки для своїх клієнтів, зменшують ризики при купівлі квартири, роблять юридичну експертизу документів перед оплатою. Безумовно, професійні рієлтори працюють краще, ніж менеджери відділів продаж. Й найголовніше – вони не на зарплаті у керівництва ЖК і порадять, що купляти.\r\n\r\n– Розшифруйте, що таке «безкоштовні екскурсоводи»?\r\n\r\n– Так можна назвати людей з незначним досвідом роботи, або які працюють неофіційно. Але ж вони про це не кажуть клієнтам. Уявіть собі хірурга, який всього місяць вчився, кинув навчання і пішов робити операції людям. Так і «безкоштовні» - місяць в агентстві побули й пішли «в люди»… В основному це молоді люди без життєвого досвіду, які не до кінця розуміють важливість і наслідки своїх дій, неякісної роботи. Вони змінюють номери телефонів, у них немає офісу, і знайти їх практично неможливо. «Безкоштовні» дають рекламу, потім, знайшовши продавця, оцінюють його квартиру або будинок нижче ринкової вартості на 25-30%, не укладаючи договорів, бо працюють неофіційно. Швидко продають об’єкт і шукають другого недосвідченого клієнта. І таких випадків сотні. Найгірше те, що від їхніх дій страждають люди і думають, що всі рієлтори такі.\r\n\r\n\r\n\r\n– Скільки всього працює рієлторів в Житомирі?\r\n\r\n– На ринку нерухомості Житомира працює понад 600 операторів, це разом з агентами, які працюють в агентствах.\r\n\r\n– На «екскурсоводів» немає управи?\r\n\r\n– На самому багатому ринку немає закону про рієлторську діяльність, відповідно і відповідальності у «безкоштовних» немає.\r\n\r\n– Що порадите людям, які хочуть продати чи купити нерухомість?\r\n\r\n– Краще всього вибрати рієлтора по рекомендації. Якщо такого немає то знайдіть рієлторів в інтернеті, почитайте про них, про агентство і призначте зустріч, бажано – в їхньому офісі. Подивіться на керівництво, на рієлтора, поспілкуйтесь. Сходіть в інші агентства, які працюють офіційно, придивіться, порівняйте і самостійно виберіть собі продавця вашої нерухомості, з яким вам буде безпечно і комфортно працювати.', 'valer-j-zajchenko-pro-situats-yu-na-rinku-nerukhomost-zhitomira-ts-ni-na-kvartiri-ta-bezkoshtovnikh-ekskursovod-v', 2, 1, '2021-06-20 18:59:06', '2021-06-20 18:59:06');

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
(43, 'Flat \"ABC\"', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid deleniti, earum enim expedita facilis modi possimus veritatis. Amet autem eum, exercitationem facere id impedit iusto maiores praesentium reprehenderit rerum sunt.', '322112.00', 1, 51, NULL, 14, 'текст', 'Київська 77', '32.00', '/files/images/obekts/flat/flat-abc/1625681457.jpg', 0, 2, 21, 21, 'Централізоване', 52, 9, 'flat-abc', 5, 0, 1, NULL, '2021-07-07 15:10:57', '2021-07-07 20:05:53'),
(44, '123', '31', '13.00', 1, 51, NULL, 10, 'eqweqw21', 'trytry', '132.00', '/files/images/default/obekt.jpeg', 1, 2, 22, 12, 'Автономне', 51, 6, '123', 8, 0, NULL, NULL, '2021-07-07 20:26:29', '2021-07-07 20:26:29');

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
(4, 'Alen Delon', '380980123123', 'Київська 77', '2021-05-28 17:37:34', '2021-05-28 17:37:34'),
(5, 'John Doe', '0675785994', 'Щорса 12', '2021-05-28 17:38:20', '2021-07-07 14:54:21'),
(6, 'Імя Прізвище', '980091209', 'Київська 67', '2021-06-04 09:53:34', '2021-06-04 09:53:34'),
(7, 'Мойша Ротенберг', '990019910', 'Одеса, пр.Буьвар 4', '2021-06-04 10:19:01', '2021-06-04 10:19:01'),
(8, 'Іван Житомирський', '990023030', 'Житомир Щорса 12', '2021-06-04 10:28:49', '2021-06-04 10:28:49'),
(9, 'Bob Dreqk', '980042020', 'USA, CA. 58420', '2021-06-04 10:38:23', '2021-06-04 10:38:23'),
(10, 'Жорж Центральний', '0970010330', 'вул. Київська 89', '2021-06-04 10:42:43', '2021-06-25 21:36:06');

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
(6, 'Анна', 'ann@dom-zt.com', 0, NULL, '$2y$10$gIpsYXyX6u/b8Zdb5UiTnusi8wlG.AbfQFkWErDO9KK7lQQRDxAdG', '1621606721.png', '098-122-2221', NULL, '2021-05-21 11:18:41', '2021-05-21 11:18:41'),
(7, 'Ім\'я Прізвище', 'mail@dom-zt.com', 0, NULL, '$2y$10$3mZFMat.4WgkQ/n26jVuau5emNgtgATDBB8XmHA6vNLXZ2noe85w.', '1621607029.png', '098-1202-3011', NULL, '2021-05-21 11:23:49', '2021-05-21 11:23:49'),
(9, 'Ольга Ткаченко', 'tkachenko@dom-zt.ocm', 0, NULL, '$2y$10$j3HkZVJSO6NR/OJnvVVm8u0RMxyCnYtqFF1VkIxgwbUJl2jzDU1h6', 'avatar.png', '098-122-2225', NULL, '2021-07-02 21:14:00', '2021-07-02 21:14:00');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `obekts`
--
ALTER TABLE `obekts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
