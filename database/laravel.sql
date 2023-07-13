-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 09 2023 г., 01:15
-- Версия сервера: 5.7.39
-- Версия PHP: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `laravel`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `price` double NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `code`, `description`, `image`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Мобильные телефоны', 'mobiles', 'В этом разделе вы найдёте самые популярные мобильные телефонамы по отличным ценам!', 'categories/mobiles.jpg', 0, NULL, NULL),
(2, 'Портативная техника', 'portable', 'Раздел с портативной техникой.', 'categories/portable.jpg', 0, NULL, NULL),
(3, 'Бытовая техника', 'appliances', 'Раздел с бытовой техникой', 'categories/appliances.jpg', 0, NULL, NULL),
(4, 'Игровые консоли', 'console', 'Раньше геймеры выбирали между тетрисом и 8-битными приставками, сегодня же игровая индустрия сделала огромный скачок.', 'categories/consoles.jpg', 0, NULL, NULL);

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
(3, '2023_06_15_143434_create_products_table', 1),
(4, '2023_06_15_144428_create_categories_table', 1),
(5, '2023_06_21_170236_create_order_product_table', 1),
(6, '2023_06_21_175628_create_orders_table', 1),
(7, '2023_06_21_205156_update_order_product_table', 1),
(8, '2023_06_28_160257_alter_table_users', 1),
(9, '2023_06_28_162552_alter_table_orders', 1),
(10, '2023_07_04_161929_alert_table_products', 1),
(11, '2023_07_07_205631_alter_table_products_count', 1),
(12, '2023_07_08_121339_create_sliders_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `order_product`
--

CREATE TABLE `order_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `count` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `price` double NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `new` tinyint(4) NOT NULL DEFAULT '0',
  `hit` tinyint(4) NOT NULL DEFAULT '0',
  `recommend` tinyint(4) NOT NULL DEFAULT '0',
  `count` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `code`, `description`, `image`, `price`, `created_at`, `updated_at`, `new`, `hit`, `recommend`, `count`, `deleted_at`) VALUES
(1, 1, 'iPhone X 64GB', 'iphone_x_64', 'Отличный продвинутый телефон с памятью на 64 gb', 'products/iphone_x.jpg', 71990, NULL, NULL, 1, 1, 1, 6, NULL),
(2, 1, 'iPhone 13 256GB', 'iphone_13_256', 'Отличный продвинутый телефон с памятью на 256 gb', 'products/iphone_x_silver.jpg', 89990, NULL, NULL, 1, 0, 1, 6, NULL),
(3, 1, 'Realme C55 256Gb Black', 'realme_ c55_256Gb_black', 'Зачем платить за лишнее? Легендарный Realme', 'products/Realme_ C55_256Gb Black.jpeg', 12490, NULL, NULL, 1, 0, 1, 7, NULL),
(4, 1, 'iPhone 5SE', 'iphone_5se', 'Отличный классический iPhone', 'products/iphone_5.jpg', 17221, NULL, NULL, 0, 1, 0, 0, NULL),
(5, 2, 'Наушники Beats Audio', 'beats_audio', 'Отличный звук от Dr. Dre', 'products/beats.jpg', 20221, NULL, NULL, 0, 0, 1, 7, NULL),
(6, 2, 'Камера GoPro', 'gopro', 'Снимай самые яркие моменты с помощью этой камеры', 'products/gopro.jpg', 12000, NULL, NULL, 1, 0, 1, 10, NULL),
(7, 2, 'Камера Panasonic HC-V770', 'panasonic_hc-v770', 'Для серьёзной видео съемки нужна серьёзная камера. Panasonic HC-V770 для этих целей лучший выбор!', 'products/video_panasonic.jpg', 27900, NULL, NULL, 1, 1, 0, 9, NULL),
(8, 3, 'Кофемашина DeLongi', 'delongi', 'Хорошее утро начинается с хорошего кофе!', 'products/delongi.jpg', 25200, NULL, NULL, 1, 1, 0, 2, NULL),
(9, 3, 'Холодильник Haier', 'haier', 'Для большой семьи большой холодильник!', 'products/haier.jpg', 40200, NULL, NULL, 0, 1, 1, 10, NULL),
(10, 3, 'Блендер Moulinex', 'moulinex', 'Для самых смелых идей', 'products/moulinex.jpg', 4200, NULL, NULL, 1, 0, 1, 1, NULL),
(11, 3, 'Мясорубка Bosch', 'bosch', 'Любите домашние котлеты? Вам определенно стоит посмотреть на эту мясорубку!', 'products/bosch.jpg', 9200, NULL, NULL, 1, 0, 0, 3, NULL),
(12, 4, 'Sony Playstation 5 825 ГБ SSD', 'ps5', 'Самая популярная консоль нового поколения!PlayStation 5 получила 16 ГБ оперативной памяти нового стандарта GDDR6 с пропускной способностью 448 ГБ в секунду. PlayStation 5 имеет оптический привод Ultra HD Blu-ray и использует диски Blu-ray объёмом до 100 ГБ.', 'products/ps5.png', 55000, NULL, NULL, 0, 0, 0, 3, NULL),
(13, 4, 'Series X 1000 ГБ SSD', 'xbox', 'Собранная в оригинальном черном корпусе игровая консоль Microsoft Xbox Series X внешне напоминает мини-компьютер. Конфигурация устройства впечатляет не меньше, чем внешний вид. Консоль оборудована 3.8-гигагерцовым процессором AMD Zen 2, видеоядром AMD RDNA 2, 16 ГБ оперативной памяти GDDR6 и 1 ТБ встроенной памяти.', 'products/xbox.png', 41000, NULL, NULL, 0, 0, 0, 3, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1=hidden,0=visible',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'Администратор', 'admin@example.com', NULL, '$2y$10$5Qnr38gspAqHwr3LvIb3qebvg/lPGWhAe3JibwKJczErXdG8NgOR.', NULL, NULL, NULL, 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
