-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 24 2019 г., 08:48
-- Версия сервера: 10.1.38-MariaDB
-- Версия PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `13_12_18_khalafov`
--

-- --------------------------------------------------------

--
-- Структура таблицы `excursion`
--

CREATE TABLE `excursion` (
  `id` int(10) UNSIGNED NOT NULL,
  `excursion_name` varchar(100) NOT NULL COMMENT 'Название экскурсии',
  `quantity` varchar(30) NOT NULL COMMENT 'Количество человек',
  `user_id` int(10) UNSIGNED DEFAULT NULL COMMENT 'ID пользователя'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Экскурсии';

--
-- Дамп данных таблицы `excursion`
--

INSERT INTO `excursion` (`id`, `excursion_name`, `quantity`, `user_id`) VALUES
(1, 'Национальный парк Фудзи-Хаконэ-Изу', '1', 14),
(2, 'Национальный парк Фудзи-Хаконэ-Изу', '10-20', 15),
(3, 'Традиционный Токио', '1-5', 16),
(4, 'Национальный парк Фудзи-Хаконэ-Изу', '1-5', 17),
(5, 'Национальный парк Фудзи-Хаконэ-Изу', '1-5', 18),
(6, 'Национальный парк Фудзи-Хаконэ-Изу', '1-5', 19),
(7, 'Национальный парк Фудзи-Хаконэ-Изу', '1-5', 20),
(8, 'Национальный парк Фудзи-Хаконэ-Изу', '1-5', 21),
(9, 'Традиционный Токио', 'Более 20', 22),
(10, 'Асакуса и парк Уэно', '10-20', 23);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `excursion`
--
ALTER TABLE `excursion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `excursion`
--
ALTER TABLE `excursion`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
