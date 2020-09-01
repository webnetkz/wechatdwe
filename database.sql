-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Сен 01 2020 г., 07:16
-- Версия сервера: 5.5.65-MariaDB-cll-lve
-- Версия PHP: 7.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `tsxgkkan_`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `phone` varchar(55) NOT NULL,
  `pass` varchar(55) NOT NULL,
  `firstName` char(50) NOT NULL,
  `lastName` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `phone`, `pass`, `firstName`, `lastName`) VALUES
(2, '123', '123', 'first', 'last'),
(38, '321', '1', '1', '2'),
(39, '18710045913', 'a19870729', 'Qifeng', 'Huang'),
(40, '+79175277117', 'qaz1', 'Андрей', 'Аншуков'),
(41, 'paysera', 'pass123', 'Pay', 'Sera'),
(42, '870778036338767', 'ottcg293', 'Найля', 'Серикова'),
(43, '7767', '123', 'Наме', 'Аа'),
(44, 'йцу123', '123', 'Bahitzhan', 'Urynbassarov');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
