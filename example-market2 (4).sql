-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 16 2023 г., 11:26
-- Версия сервера: 5.7.39
-- Версия PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `example-market2`
--

-- --------------------------------------------------------

--
-- Структура таблицы `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `cart_items`
--

CREATE TABLE `cart_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `cart_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `title`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Гормон роста', 'Place <em>some</em> <u>text</u> <strong>here</strong>', '2023-06-16 05:13:29', '2023-06-16 05:13:29', NULL),
(2, 'Инъекционные препараты', 'Place <em>some</em> <u>text</u> <strong>here</strong>', '2023-06-16 05:13:48', '2023-06-16 05:13:48', NULL),
(3, 'Таблетированные препараты', 'Place <em>some</em> <u>text</u> <strong>here</strong>', '2023-06-16 05:13:54', '2023-06-16 05:13:54', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_02_050157_create_categories_table', 1),
(6, '2023_06_02_050222_create_products_table', 1),
(7, '2023_06_02_133928_add_image_url_to_products_table', 1),
(8, '2023_06_07_120310_create_cart_table', 1),
(9, '2023_06_07_134402_create_cart_items_table', 1),
(10, '2023_06_15_055626_create_permission_tables', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `catalog_id` bigint(20) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `img_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `catalog_id`, `title`, `description`, `price`, `created_at`, `updated_at`, `deleted_at`, `img_url`) VALUES
(1, 1, 'Geanheal (Джинхил) 100IU', 'Geanheal (Джинхил) 100IU\r\n\r\nГормон роста GEANHEAL Джинхил - это легендарный гормон роста. Он стоял у истоков возникновения соматропина. Появился раньше Джинтропина и Ансомона, но в отличии от них так и не вышел на широкий мировой рынок. Фарм компании, которые изготовили Джинтропин и Ансомон ориентировались именно на этот гормон роста - Джинхил. Он был эталоном в то время, таким он остался и сейчас. Только в 2019 году удалось наконец вывести этот гормон роста из Китая и наладить поставки на широкий мировой рынок. \r\n\r\n \r\n\r\nГормон роста GEANHEAL Джинхил - является абсолютным лидером среди гормонов роста на сегодняшний день по очистке и эффекту, поэтому его стоимость аналогична аптечному Джинтропину или Ансомону, не смотря на то, что этот гормон роста мало известен в рунете и зарубежном интернете. Однако на китайском рынке он лидирует уже много лет, как эталонный гормон роста.\r\n\r\nЭффекты от применения\r\n\r\n· Рост сухой мускулатуры;\r\n\r\n· Защита мышц от разрушения;\r\n\r\n· Сжигание жира;\r\n\r\n· Регулировка траты энергии;\r\n\r\n· Ускоренная регенерация;\r\n\r\n· Омолаживающий эффект;\r\n\r\n· Повторный рост внутренних органов;\r\n\r\n· Рост до 26 лет;\r\n\r\n· Укрепление костей;\r\n\r\n· Повышение концентрации глюкозы;\r\n\r\n· Укрепление иммунной системы.\r\n \r\n\r\n\r\nКак использовать Гормон роста GEANHEAL Джинхил ?\r\n\r\nВ пачке содержится 10 флаконов по 10 ЕД действующего вещества - соматотропина! \r\n\r\nБазовая дозировка - 5 ЕД в сутки, соблюдая ее одного флакона будет хватать на 2 дня, итого 1 пачки гормона роста GEANHEAL Джинхил хватит на 20 дней\r\n\r\nВАЖНО! Сухой и готовый раствор нужно хранить в холодильнике!\r\n\r\nКурс длиться от 3 до 6 месяцев. \r\n\r\nНаш магазин гарантирует качество препарата GEANHEAL Джинхил и советует его Вам!', 51000, NULL, NULL, NULL, 'storage/products/dzhinhil.jpg'),
(2, 1, 'Somatotropin TechPharm ( жидкий )', ' В современной спортивной фармакологии выпускаются самые разнообразные препараты для развития физических показателей спортсмена. С прошлого столетия также совершенствовались препараты и на основе соматотропина. Еще с 80-х годов спортсменам известно его влияние на рост сухой мускулатуры и похудение. Советуем купить для достижения качественной рельефной фигуры.\r\n\r\nГормон роста в бодибилдинге\r\n\r\nПервые препараты на основе гормона роста были разработаны путем вытяжки гормона из трупов. Затем в 1981 году стали разрабатывать препараты с рекомбинантным ГР.\r\n\r\nПрошлое столетие 89 год – Олимпийский комитет запретил применение препаратов на основе ГР в спорте. Спортсменов это не остановило и распространение ГР в спорте возрастало.\r\n\r\nВ наше время соматотропин применяется атлетами бодибилдинга и других направлений для получения качественного рельефа, сушки и сухой массы. Его применяют как сольно, так и в комбинациях со стероидами или жиросжигателями.\r\n\r\nГормон роста как основа развития человека\r\n\r\nГормон роста, так же встречается под названием соматотропный гормон или соматотропин, является важным гормоном, вырабатываемым передней долей гипофиза. От его концентрации в детском возрасте зависит развитие ребенка, а именно его рост. Нехватка или переизбыток гормона может повлиять на рост ребенка. Соматотропин вызывает линейный рост длинных трубчатых костей в конечностях.\r\n\r\nСтандартная концентрация гормона в организме обычно составляет от 1 до 5 нг/мл в крови, но во время пика она зашкаливает по 10-20, а иногда и до 45 нг/мл. Но с возрастом секреция гормона снижается. В период от 50 до 70 лет количество гормона становится вдвое меньше, что способствует ускоренному старению человека. Также из-за его нехватки могут появиться такие последствия, как слабоумие, депрессия, ухудшение памяти и общего самочувствия.\r\n\r\nЭффект от применения\r\n\r\nПравильное применение гормона способствует качественному улучшению следующих показателей:\r\n\r\n· Рост сухой массы;\r\n\r\n· Регенерация;\r\n\r\n· Защита от распада мышц;\r\n\r\n· Похудение;\r\n\r\n· Рост (с учетом возраста спортсмена меньше 26 лет);\r\n\r\n· Укрепление костей и связок;\r\n\r\n· Повышение концентрации глюкозы;\r\n\r\n· Укрепление иммунитета;\r\n\r\n· Омоложение.\r\n\r\nПобочные эффекты\r\n\r\nПередозировка не несет никакого положительного эффекта и способствует развитию побочных эффектов.\r\n\r\n· Накопление лишней жидкости в тканях мышц;\r\n\r\n· Подавляется функция щитовидной железы;\r\n\r\n· Развивается Тунельный синдром;\r\n\r\n· Повышается артериальное давление;\r\n\r\n· Повышается риск получить гипергликемию;\r\n\r\n· Апатия, слабость, боль в мышцах и суставах, сонливость;\r\n\r\n· В редком случае риск гинекомастии.\r\n\r\nСпособ применения и дозы\r\n\r\nПрепарат может применяться индивидуально, или сочетаться со стероидами или жиросжигателями для получения или усиления определенного эффекта.\r\n\r\nНачинайте курс с 5 ед 1 раз утром. Вводите инъекцию подкожно за 30-60 мин до еды. После 1 недели курса, если побочные эффекты отсутствуют, вводить по 5 ед 2 раза в первой половине дня. Курс длится от 3 до 6 месяцев.', 60600, NULL, NULL, NULL, 'storage/products/samotropin.png'),
(5, 1, 'ANSOMONE (ORIGINAL)', 'Что из себя представляет Гормон Роста?\r\n\r\nГормон роста, или как он часто встречается под названием соматотропный гормон или соматотропин, соматропин, это один из гормонов который самостоятельно вырабатывается организмом человека. Секретируется передней долей гипофиза в головном мозге. Он играет огромную роль в правильном развитии детей и подростков, так как отвечает за рост. Это происходит за счет роста костей.\r\n\r\nВлияние возраста на секрецию ГР\r\n\r\nСамый пик секреции гормона наблюдается у детей, так как это требуется для правильного развития ребенка. Постепенно с возрастом концентрация гормона снижается. К старости у человека секреция гормона снижается вдвое, что способствует ускоренному старению человека. Недостаточность гормона вызывает депрессию, ухудшение памяти, развитие слабоумия и т.д.\r\n\r\nГормон роста в спорте\r\n\r\nВ спорте соматотропин весьма популярен среди бодибилдеров, так как способствует всем важным для них качествам. Препарат на основе гормона помогает формировать качественный рельеф мышечной массы. Он отвечает за рост сухой мускулатуры, и ее сушки за счет сжигания жиров. Кроме того он укрепляет кости и иммунитет, что значительно снизит риск получения травм при тренировках.\r\n\r\nВ прошлом первоначальной целью получения препаратов на основе соматотропина являлась медицина. Его активно использовали при лечении СПИДа и других заболеваний, связанных с нехваткой гормона роста. Но он вскоре начал набирать обороты спроста в спорте, так как способствовал похудению и повышению роста сухой массы.\r\n\r\nДанные качества заинтересовали спортсменов. И, несмотря на то, что в 1989 году Олимпиский комитет выставил запрет на использование соматотропина, это не остановило спортсменов. Он по сей день используется атлетами и комбинируется с другими стероидами.\r\n\r\nЭффект от применения\r\n\r\n· Рост сухой мышечной массы;\r\n\r\n· Защита мышц от распада;\r\n\r\n· Сжигание жировых отложений;\r\n\r\n· Ускорение регенерации;\r\n\r\n· Эффект омоложения;\r\n\r\n· Рост костей у спортсменов до 26 лет;\r\n\r\n· Укрепление костей и связок;\r\n\r\n· Укрепление иммунной системы.\r\n\r\nПобочные эффекты\r\n\r\n· Развитие Тунельного синдрома;\r\n\r\n· Гипергликемия;\r\n\r\n· Накопление лишней жидкости в тканях;\r\n\r\n· Повышение АД;\r\n\r\n· Подавление функций щитовидной железы и др.\r\n\r\nСпособ применения и дозы\r\n\r\nПервоначально пройдите обследование у врача. Препарат не рекомендован спортсменам до 20 лет.\r\n\r\nСольный курс ГР начинается с минимальной дозы 5 ед. предварительно порошок соматотропина разводится для инъекции. Укол ставят подкожно за 30-60 мин до еды. Спустя 1-2 недели при отсутствии побочных эффектов доза повышается до 10 ед, то есть использовать по 5 ед 2 раза в день. Длительность курса составляет 3-6 месяцев.', 84500, NULL, NULL, NULL, 'storage/products/ANSOMONE.jpg'),
(6, 1, 'SOMATROPIN NOVARTIS', 'Генно-инженерный соматотропный гормон, воздействуя на пластинки эпифиза трубчатых костей, стимулирует рост костей скелета. Активирует синтез хондроитин сульфата и коллагена, повышает выведение гидроксипролина, способствует увеличению массы тела. Регулирует белковый обмен: стимулирует транспорт аминокислот в клетку и синтез белка. Увеличивает число и размер мышечных клеток, гепатоцитов, клеток вилочковой, щитовидной железы, надпочечников и половых желез. Мобилизует жиры: снижает концентрацию холестерина и повышает ТГ, уменьшает объем жировой ткани. Задерживает Na+, K+, фосфор и воду в организме (препятствует выведению); оказывает анаболическое (стимулирует транспорт аминокислот в клетку и синтез белка), гипергликемическое действие (подавляет высвобождение инсулина).', 46000, NULL, NULL, NULL, 'storage/products/SOMATROPIN.jpg'),
(7, 1, 'NOVARTIS SOMATROPIN 50UI', '', 26600, NULL, NULL, NULL, 'storage/products/NOVARTIS.png'),
(8, 1, 'GEROTROP (ГЕРОТРОП) 100IU', 'Эффекты от применения\r\n\r\n· Рост сухой мускулатуры;\r\n\r\n· Защита мышц от разрушения;\r\n\r\n· Сжигание жира;\r\n\r\n· Регулировка траты энергии;\r\n\r\n· Ускоренная регенерация;\r\n\r\n· Омолаживающий эффект;\r\n\r\n· Повторный рост внутренних органов;\r\n\r\n· Рост до 26 лет;\r\n\r\n· Укрепление костей;\r\n\r\n· Повышение концентрации глюкозы;\r\n\r\n· Укрепление иммунной системы.\r\n \r\n\r\nГР выпускается в форме порошка и предварительно разводится раствором из второй ампулы. Полученный раствор соматотропина используют в качестве инъекции.\r\n\r\nНачальная дозировка составляет 5 ед 1 раз в день. Вводить подкожно. После 2-3 недель курса при отсутствии побочных эффектов дозу повышают. Использовать по 5 ед 2 раза в сутки. Инъекцию делать за 30-60 мин до еды. Длительность курса 3-6 месяцев.', 45000, NULL, NULL, NULL, 'storage/products/GEROTROP.jpg'),
(11, 1, 'GEROTROP (СУХОЙ) 10 AMPOULES X 1ML', 'СУХОЙ геротроп 10 Ампул в Пачке\r\n\r\nЭффекты от применения\r\n\r\n· Рост сухой мускулатуры;\r\n\r\n· Защита мышц от разрушения;\r\n\r\n· Сжигание жира;\r\n\r\n· Регулировка траты энергии;\r\n\r\n· Ускоренная регенерация;\r\n\r\n· Омолаживающий эффект;\r\n\r\n· Повторный рост внутренних органов;\r\n\r\n· Рост до 26 лет;\r\n\r\n· Укрепление костей;\r\n\r\n· Повышение концентрации глюкозы;\r\n\r\n· Укрепление иммунной системы.\r\n \r\n\r\nГР выпускается в форме порошка и предварительно разводится раствором из второй ампулы. Полученный раствор соматотропина используют в качестве инъекции.\r\n\r\nНачальная дозировка составляет 5 ед 1 раз в день. Вводить подкожно. После 2-3 недель курса при отсутствии побочных эффектов дозу повышают. Использовать по 5 ед 2 раза в сутки. Инъекцию делать за 30-60 мин до еды. Длительность курса 3-6 месяцев.', 46000, NULL, NULL, NULL, 'storage/products/GEROTROP-S.jpg'),
(12, 1, 'GENOTROPIN PFIZER (ГЕНОТРОПИН)', 'Genotropin Pfizer (Генотропин)  12Mg/ml\r\n\r\nСостав:\r\nКартридж для инъектора Генотропин Пен® 5,3 состоит из двух частей. Одна содержит лиофилизат: активное вещество, рекомбинантный соматропин 6,1 мг (18,4 ME);\r\nвспомогательные вещества: глицин - 2,3 мг, маннит - 1,8 мг, натрия дигидрофосфат безводный - 0,33 мг, натрия гидрофосфат безводный - 0,32 мг,\r\nвторая - растворитель: m-крезол - 3,4 мг, маннит - 45 мг, вода для инъекций - до 1,14 мл.\r\nКартридж для инъектора Генотропин Пен® 12 состоит из двух частей. Одна содержит лиофилизат: активное вещество, рекомбинантный соматропин 13,8 мг (41,4 ME); вспомогательные вещества: глицин - 2,3 мг, маннит - 14 мг, натрия дигидрофосфат безводный - 0,47 мг, натрия гидрофосфат безводный - 0,46 мг,\r\nвторая - растворитель: m-крезол - 3,4 мг, маннит - 32 мг, вода для инъекций - до 1,13 мл.\r\nСостав раствора, полученного после смешивания содержимого обеих частей картриджа Генотропин 5,3 мг (16 ME), на 1 мл:\r\nАктивное вещество: рекомбинантный соматропин 5,3 мг (16 ME)\r\nВспомогательные вещества: глицин - 2,0 мг, маннит - 41 мг, натрия дигидрофосфат безводный - 0,29 мг, натрия гидрофосфат безводный - 0,28 мг, m-крезол - 3,0 мг, вода для инъекций - до 1 мл.\r\nСостав раствора, полученного после смешивания содержимого обеих частей картриджа Генотропин 12 мг (36 ME), на 1 мл:\r\nАктивное вещество: рекомбинантный соматропин -12 мг (36 ME)\r\nВспомогательные вещества: глицин - 2,0 мг, маннит - 40 мг, натрия дигидрофосфат безводный - 0,41 мг, натрия гидрофосфат безводный - 0,40 мг, m-крезол - 3,0 мг, вода для инъекций - до 1 мл.\r\n\r\nОписание: Лиофилизат белого цвета.\r\nРастворитель - прозрачная бесцветная жидкость.\r\n\r\nФармакотерапевтическая группа: Соматотропный гормон\r\nКод ATX Н01АС01\r\n\r\nФАРМАКОЛОГИЧЕСКИЕ СВОЙСТВА\r\nГенотропин содержит синтезированный с помощью рекомбинантных технологий соматропин, идентичный человеческому гормону роста. У детей с недостаточностью эндогенного гормона роста и синдромом Прадера-Вилли соматропин усиливает и ускоряет линейный рост скелета. Как у взрослых, так и у детей соматропин поддерживает нормальную структуру тела, стимулируя рост мышц и способствуя мобилизации жира.\r\nОсобенно чувствительна к соматропину висцеральная жировая ткань. Помимо стимуляции липолиза, соматропин уменьшает поступление триглицеридов в жировые депо. Соматропин увеличивает концентрацию инсулиноподобного ростового фактора (ИРФ-1) и ИРФ-связывающего белка (ИРФСБ-3) в сыворотке крови.\r\nПомимо вышеназванных свойств были показаны следующие эффекты соматропина:\r\nОбмен липидов\r\nСоматропин стимулирует рецепторы печени к липопротеинам низкой плотности (ЛПНП) и воздействует на профиль липидов и липопротеидов в сыворотке. В целом, назначение соматропина пациентам с дефицитом гормона роста приводит к снижению концентрации ЛПНП и аполипопротеина В в сыворотке крови. Также может наблюдаться снижение уровня общего холестерина.\r\nОбмен углеводов\r\nСоматропин увеличивает уровень инсулина, однако при этом уровень глюкозы натощак обычно не изменяется. У детей с гипопитуитаризмом может наблюдаться гипогликемия натощак. Соматропин купирует это состояние.\r\nВодно-солевой обмен\r\nНедостаток гормона роста ассоциируется со снижением объема плазмы и тканевой жидкости. Оба эти показателя быстро увеличиваются после лечения соматропином. Соматропин способствует задержке натрия, калия и фосфора.\r\nКостный метаболизм\r\nСоматропин стимулирует костный метаболизм. У больных с дефицитом гормона роста и остеопорозом продолжительное лечение соматропином приводит к восстановлению минерального состава и плотности костей.\r\nФизическая работоспособность\r\nЛечение соматропином увеличивает мышечную силу и физическую выносливость. Соматропин также увеличивает сердечный выброс, однако механизм этого эффекта пока не выяснен. Определенную роль в этом может играть уменьшение периферического сосудистого сопротивления.\r\nПсихический статус\r\nУ больных с дефицитом гормона роста может наблюдаться снижение умственных способностей и изменения психического статуса. Соматропин повышает жизненный тонус, улучшает память и влияет на баланс нейротрансмиттеров в головном мозге.\r\n\r\nФАРМАКОКИНЕТИКА\r\nВсасывание\r\nКак у здоровых лиц, так и у пациентов с недостаточностью гормона роста всасывается примерно 80% подкожно введенного Генотропина. После подкожного введения препарата в дозе 0,1 МЕ/кг максимальная концентрация и время ее достижения в плазме крови составляют 13-35 нг/мл и 3-6 часов соответственно. Средний объем распределения составляет - 0,5 - 2,1 л/кг.\r\nВыведение\r\nСредний период полувыведения после внутривенного введения Генотропина у больных с недостаточностью гормона роста составляет около 0,4 часа. При подкожном введении препарата период полувыведения достигает 2-3 часов. Наблюдаемая разница вероятно связана с более медленным всасыванием при подкожной инъекции. Метаболизируется в почках и печени, около 0,1% в неизмененном виде выводится с желчью.\r\nСубпопуляции\r\nАбсолютная биодоступность Генотропина при подкожном введении одинакова у лиц мужского и женского пола.', 70000, NULL, NULL, NULL, 'storage/products/GENOTROPIN.jpeg'),
(13, 1, 'NANOTROP', '', 43600, NULL, NULL, NULL, 'storage/products/NANOTROP.png'),
(14, 1, 'QITROPE R-HGH (КЬЮТРОП) 100IU', 'гормон роста, разработанный для применения в медицине и спорте. Состоит из аналога природного вещества и не уступает всем его качествам. Пользуется большой популярностью в спорте. Гормон роста вырабатывается в организме передней долей гипофиза на протяжении всей жизни. При правильной выработке у детей прибавляется вес, в подростковом возрасте формируется тело. После 26 лет вещество перестаёт так интенсивно преобразовываться и поступает в кровь в минимальном количестве. В профессиональном спорте соматотропин применяют с целью увеличения мышечной массы, повышения силовых возможностей, предотвращения катаболизма. Большинство бодибилдеров ценят средство за эффективность и безопасность. Единственным минусом является дорогостоящая стоимость. Многие, желая сэкономить для цели набора мускулатуры, приобретают стероиды. Важно помнить, что это не одно и то же, есть существенная разница по эффективности и безопасности. Перед применением любого лекарственного средства, изучите все нюансы и рекомендации, а также возможные побочные реакции.\r\n\r\nДействие на курсе\r\n\r\n· Ускоряет рост мышечной ткани, делает упругими и рельефными мышцы;\r\n\r\n· Сжигает больше часть жировых накоплений, препятствует их дальнейшему образованию;\r\n\r\n· Тормозит разрушение мускулатуры, позволяет сохранить уже существующий объем;\r\n\r\n· Не затрагивает ресурсов организма, повышает энергетический потенциал;\r\n\r\n· Обладает общеукрепляющими свойствами;\r\n\r\n· Положительно действует на кости и суставы;\r\n\r\n· Нормализует уровень глюкозы в крови;\r\n\r\n· Повышает выносливость и силу;\r\n\r\n· Улучшает сексуальные показатели;\r\n\r\n· Позволяет выдерживать длительные нагрузки, преодолевать дистанции;\r\n\r\n· Улучшает психологическое состояние, повышает самооценку.', 41700, NULL, NULL, NULL, 'storage/products/QITROPE.jpg'),
(15, 1, 'SOMATEX (СОМАТЕКС) 100IU', 'Somatex (Соматекс) 100IU\r\n\r\nСоматекс – инновационный продукт российской компании GeneticLab. По официальным документам Somatex – реагент, предназначенный для исследований в лабораторных условиях биохимических процессов в тканях млекопитающих. Отказавшись от фармакологической лицензии, таким образом разработчики решили две задачи:\r\n\r\nСняли с себя всякую ответственность за последствия нецелевого использования.\r\nУпростили процедуру лицензирования и выхода препарата на российский и международный рынок.\r\nЛабораторные исследования и личные наблюдения спортсменов выявили целый список наиболее устойчивых эффектов:\r\n\r\nУвеличение плотности и эластичности кожи.\r\nУлучшение кровотока в почках.\r\nУменьшение потребления глюкозы печенью.\r\nУскорение процесса синтеза белка и заживления после травмы или хирургического вмешательства, снижение риска инфицирования.\r\nУлучшая алгоритм расщепления жиров (липолиз), снижает массу общего жира в организме.\r\nПродлевая время захвата кальция, усиливает минерализацию кости. Способствует укреплению суставов и связок в организме.\r\nВыравнивает холестериновый фон одновременным снижением уровня ЛПНП (плохого холестерина) и повышением ЛПВП (хорошего холестерина).\r\nДаёт возможность в два и более раза качественно и количественно поднять показатели физической нагрузки, сократить время восстановления между тренировками.\r\nУвеличивает объём мышечной массы.\r\nМягко регулирует работу по выработке серотонина и эндорфина, благодаря чему гарантировано улучшение качества эмоционального фона.\r\nИграет положительную роль в улучшении функциональных свойств гомеостаза.\r\nСпособствует лучшему глюконеогенезу в клетках почек и печени.\r\nСпособствует поддержанию и функционированию поджелудочной железы.\r\nСтимулирует иммунную систему.\r\nУвеличивает скорость периферического дейодирования, способствуя таким образом превращению гормона Т4 в Т3.', 43600, NULL, NULL, NULL, 'storage/products/SOMATEX.jpg'),
(16, 1, 'SOMATROPIN TECHPHARM 10X10IU', '', 60600, NULL, NULL, NULL, 'storage/products/SOMATROPIN-10X10IU.png'),
(19, 1, 'парацетамол', 'ДЛОдывта ыждвлажы ывждал', 450, NULL, NULL, NULL, 'storage/products/sustanon.jpeg'),
(38, 2, 'ибуфен', 'Препарат можно использовать курсом соло и в сочетании с Метаном, Тренболоном и другими нестероидными средствами (гормон роста, пептиды). Чтобы результат на выходе был максимальным, соблюдайте дозировку и по возможности перейдите на правильное питание. Многие опытные атлеты во время набора мышц переходят на спортивное питание и используют всевозможные спортивные добавки.', 78238, NULL, NULL, NULL, 'storage/products/sustanon.jpeg');

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'user', 'web', '2023-06-16 05:05:22', '2023-06-16 05:05:22'),
(2, 'admin', 'web', '2023-06-16 05:05:27', '2023-06-16 05:05:27');

-- --------------------------------------------------------

--
-- Структура таблицы `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
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
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'dima', 'dima@gmail.com', NULL, '$2y$10$LTZ3yrIDTK16iuqpvGEtqeuQh1F9Y6A78oo6lowl9kT/nQrc3UJb2', NULL, '2023-06-16 05:03:51', '2023-06-16 05:03:51'),
(3, 'admin', 'admin@admin.com', NULL, '$2y$10$QZkNUVbMQegV2NpQ/gbzIesjwgmdyGxRE/ws7LVFWJZDyQlZd26VO', NULL, '2023-06-16 05:11:47', '2023-06-16 05:11:47');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`);

--
-- Индексы таблицы `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_items_product_id_foreign` (`product_id`),
  ADD KEY `cart_items_cart_id_foreign` (`cart_id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Индексы таблицы `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Индексы таблицы `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `cart_items`
--
ALTER TABLE `cart_items`
  ADD CONSTRAINT `cart_items_cart_id_foreign` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cart_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Ограничения внешнего ключа таблицы `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
