-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 31 2023 г., 07:47
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `sklad`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`, `created_at`) VALUES
(2, 'Elektronika', '30-08-2023 04:49:39'),
(3, 'Mobil telefonlar', '30-08-2023 04:49:53'),
(4, 'Kompyuterlar', '30-08-2023 04:50:11'),
(5, 'Oziq-ovqat', '30-08-2023 08:00:31');

-- --------------------------------------------------------

--
-- Структура таблицы `hisobot`
--

CREATE TABLE `hisobot` (
  `id` int NOT NULL,
  `tovar` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `jami` int DEFAULT NULL,
  `date` date NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `hisobot`
--

INSERT INTO `hisobot` (`id`, `tovar`, `jami`, `date`, `category`) VALUES
(1, 'asdadadsa', 5, '2023-08-30', 'asdasdadasdadads');

-- --------------------------------------------------------

--
-- Структура таблицы `prixod`
--

CREATE TABLE `prixod` (
  `id` int NOT NULL,
  `tovar` varchar(255) NOT NULL,
  `created_at` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `prixod`
--

INSERT INTO `prixod` (`id`, `tovar`, `created_at`) VALUES
(7, 'Mol go\'shti', '30-08-2023 10:44:55'),
(8, 'Mikrato\'lqinli pech', '30-08-2023 10:44:55'),
(9, 'Samsung S22 Ultra', '30-08-2023 10:44:55'),
(10, 'Redmi Note 12', '30-08-2023 10:44:55'),
(11, 'Lenovo', '30-08-2023 10:44:55'),
(12, 'Acer', '30-08-2023 11:40:19'),
(15, 'HP', '30-08-2023 11:40:35');

-- --------------------------------------------------------

--
-- Структура таблицы `sklad`
--

CREATE TABLE `sklad` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `tovar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `sklad`
--

INSERT INTO `sklad` (`id`, `title`, `created_at`, `tovar`) VALUES
(12, 'Sklad kampyuter', '30-08-2023 16:46:35', 'Lenovo'),
(13, 'Sklad kampyuter', '30-08-2023 16:46:35', 'Acer'),
(14, 'Sklad kampyuter', '30-08-2023 16:46:35', 'HP'),
(15, 'Sklad telfonlar', '30-08-2023 16:47:10', 'Samsung S22 Ultra'),
(16, 'Sklad telfonlar', '30-08-2023 16:47:10', 'Redmi Note 12');

-- --------------------------------------------------------

--
-- Структура таблицы `tovar`
--

CREATE TABLE `tovar` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` text NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `tovar`
--

INSERT INTO `tovar` (`id`, `title`, `price`, `image`, `created_at`, `category`) VALUES
(11, 'HP', '800$', 'c08454442.png', '30-08-2023 08:02:21', 'Kompyuterlar'),
(12, 'Acer', '700$', '167084527134946300102.avif', '30-08-2023 08:03:14', 'Kompyuterlar'),
(13, 'Lenovo', '500$', 'Без названия.jfif', '30-08-2023 08:04:37', 'Kompyuterlar'),
(14, 'Redmi Note 12', '150$', '6sAj9nSfwxod4sxvj1v0VA1eCnJaM8Dxc0oLSNum.jpg', '30-08-2023 08:06:08', 'Mobil telefonlar'),
(15, 'Samsung S22 Ultra', '$799.99', 'FLRC-214-B0-PhantomBlack-01-PDP-GALLERY-1600x1200.webp', '30-08-2023 08:07:50', 'Mobil telefonlar'),
(16, 'Mikrato&#039;lqinli pech', '900 000 so&#039;m', '6512bd43d9caa6e02c990b0a82652dca20230202144846370955x1d21ifjp.jpg', '30-08-2023 08:11:49', 'Elektronika'),
(17, 'Mol go&#039;shti', '80 000 so&#039;m', 'tolstiy-700x700.jpg', '30-08-2023 08:13:36', 'Oziq-ovqat');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `created_at` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`) VALUES
(5, 'Ermanov Shohruh', 'ermanovshohruh@gmail.com', 'db5d888a0480461f4fb978746d1baf34', '30-08-2023 20:11:31');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `hisobot`
--
ALTER TABLE `hisobot`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `prixod`
--
ALTER TABLE `prixod`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sklad`
--
ALTER TABLE `sklad`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tovar`
--
ALTER TABLE `tovar`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `hisobot`
--
ALTER TABLE `hisobot`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `prixod`
--
ALTER TABLE `prixod`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `sklad`
--
ALTER TABLE `sklad`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `tovar`
--
ALTER TABLE `tovar`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
