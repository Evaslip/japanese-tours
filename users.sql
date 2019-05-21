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
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL COMMENT 'Имя пользователя',
  `email` varchar(50) NOT NULL COMMENT 'Email',
  `phone` varchar(16) NOT NULL COMMENT 'Номер телефона'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Пользователи';

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`) VALUES
(2, 'Василий Иванов', 'ivanov@mail.ru', '123'),
(3, 'Дмитрий Зубков', 'zybkov@mail.ru', '84651463'),
(4, 'Игорь Афонин', 'slipknot992@mail.ru', '123321'),
(5, 'Екатерина', 'slipknot992@mail.ru', '123'),
(6, 'Ксения Фоменко', 'slipknot992@mail.ru', '121143'),
(7, 'Юрий', 'slipknot992@mail.ru', '123132'),
(8, 'Игорь', 'daronmalakian992@gmail.com', '1242353245'),
(11, 'Василий', 'ivanov@mail.ru', '2131'),
(12, 'Иван', 'slipknot992@mail.ru', '124314124'),
(14, 'Иван', 'slipknot992@mail.ru', '124314124'),
(15, 'Василий', 'daronmalakian992@gmail.com', '121143'),
(16, 'Алексей', 'slipknot992@mail.ru', '121143'),
(17, 'Светлана', 'daronmalakian992@gmail.com', '12421342'),
(18, 'Светлана', 'daronmalakian992@gmail.com', '12421342'),
(19, 'Светлана', 'daronmalakian992@gmail.com', '12421342'),
(20, 'Дмитрий Зубков', 'daronmalakian992@gmail.com', '56757'),
(21, 'Дмитрий Зубков', 'daronmalakian992@gmail.com', '56757'),
(22, 'Валерий', 'ivanov@mail.ru', '95432165'),
(23, 'Валерий', 'ivanov@mail.ru', '95432165');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
