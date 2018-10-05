-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 05 2018 г., 10:04
-- Версия сервера: 5.7.20
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `testzadanie`
--

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1538557173),
('m130524_201442_init', 1538557175);

-- --------------------------------------------------------

--
-- Структура таблицы `options_shop`
--

CREATE TABLE `options_shop` (
  `id_options_shop` int(11) NOT NULL,
  `name_options_shop` varchar(255) NOT NULL,
  `value_options_shop` varchar(255) NOT NULL,
  `act_options_shop` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `options_shop`
--

INSERT INTO `options_shop` (`id_options_shop`, `name_options_shop`, `value_options_shop`, `act_options_shop`) VALUES
(1, 'sort', '1', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `price_date`
--

CREATE TABLE `price_date` (
  `id_price_date` int(11) NOT NULL,
  `date_start` int(11) NOT NULL,
  `date_end` int(11) DEFAULT NULL,
  `price_price_date` decimal(11,2) NOT NULL,
  `id_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `price_date`
--

INSERT INTO `price_date` (`id_price_date`, `date_start`, `date_end`, `price_price_date`, `id_product`) VALUES
(5, 1451595600, NULL, '8000.00', 5),
(6, 1462050000, 1483218000, '12000.00', 5),
(7, 1467320400, 1473454800, '15000.00', 5),
(8, 1496264400, 1508446800, '20000.00', 5),
(9, 1513285200, 1514667600, '5000.00', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name_products` varchar(500) NOT NULL,
  `price_products` decimal(10,2) NOT NULL,
  `act_products` int(11) DEFAULT NULL,
  `img_products` varchar(255) DEFAULT NULL,
  `description_products` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name_products`, `price_products`, `act_products`, `img_products`, `description_products`) VALUES
(1, 'Школьные брюки', '320.00', 1, '', ''),
(2, 'Школьная блузка Анастасия', '300.00', 1, '', ''),
(3, 'Брюки Никки', '320.00', 1, '', ''),
(4, 'Школьные шорты', '265.00', 1, '', ''),
(5, 'Школьная форма', '10000.00', 1, '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Sergey', '0BnRvL4CAcOhNo5EFvLth7vACJKZ3fSI', '$2y$13$le3SbAsDSaVoOi3VnThzQuwsFk7JzY.6qpSdGA8Jm8YYZMUpBUVkG', NULL, 'f.b.layker@gmail.com', 10, 1538561091, 1538561091);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `options_shop`
--
ALTER TABLE `options_shop`
  ADD PRIMARY KEY (`id_options_shop`);

--
-- Индексы таблицы `price_date`
--
ALTER TABLE `price_date`
  ADD PRIMARY KEY (`id_price_date`),
  ADD KEY `id_product` (`id_product`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `options_shop`
--
ALTER TABLE `options_shop`
  MODIFY `id_options_shop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `price_date`
--
ALTER TABLE `price_date`
  MODIFY `id_price_date` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `price_date`
--
ALTER TABLE `price_date`
  ADD CONSTRAINT `price_date_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
