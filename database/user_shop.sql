-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 01 2020 г., 12:02
-- Версия сервера: 10.3.13-MariaDB
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `user_shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `internet`
--

CREATE TABLE `internet` (
  `id` int(11) NOT NULL,
  `place` int(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `internet`
--

INSERT INTO `internet` (`id`, `place`, `last_name`, `phone`) VALUES
(7, 80, 'bidlos', '80292486995'),
(8, 80, 'Bembel', '80292486995'),
(9, 80, 'bidlos', '296842872'),
(10, 80, 'bidlos', '80292486995'),
(11, 80, 'Bembel', '80292486995'),
(12, 80, 'Bembel', '80292486995'),
(13, 80, 'Bembel', '80292486995'),
(14, 80, 'Bembel', '80292486995'),
(15, 80, 'Bembel', '80292486995'),
(16, 80, 'Bembel', '80292486995'),
(17, 80, 'Bembel', '80292486995'),
(18, 80, 'Bembel', '80292486995');

-- --------------------------------------------------------

--
-- Структура таблицы `shop_img`
--

CREATE TABLE `shop_img` (
  `id` int(11) NOT NULL,
  `img_name` tinytext NOT NULL,
  `shop_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `shop_img`
--

INSERT INTO `shop_img` (`id`, `img_name`, `shop_user_id`) VALUES
(20, 'Bez-imeni-1-kopiya.jpg', 13),
(21, 'izobrazhenie_viber_2020-01-26_18-56-00.jpg', 13),
(22, 'izobrazhenie_viber_2020-02-13_19-51-40.jpg', 13),
(23, 'izobrazhenie_viber_2020-02-14_19-34-42.jpg', 13);

-- --------------------------------------------------------

--
-- Структура таблицы `shop_items`
--

CREATE TABLE `shop_items` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `img` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `shop_items`
--

INSERT INTO `shop_items` (`id`, `title`, `description`, `date`, `img`, `category`, `user_id`) VALUES
(1, 'Трехколесный велик', 'Срочно продам Трехколесный велик чтобы было все збс потому что все говно! Но если присмотреться то может и ничего так пока так но не так что бы было все нормально делай нормально...Срочно продам Трехколесный велик чтобы было все збс потому что все говно! Но если присмотреться то может и ничего так пока так но не так что бы было все нормально делай нормально...Срочно продам Трехколесный велик чтобы было все збс потому что все говно! Но если присмотреться то может и ничего так пока так но не так что бы было все нормально делай нормально...', '2020-03-17', '', 'Велосипеды', 2),
(2, 'Трехколесный велик', 'Срочно продам Трехколесный велик чтобы было все збс потому что все говно! Но если присмотреться то может и ничего так пока так но не так что бы было все нормально делай нормально...Срочно продам Трехколесный велик чтобы было все збс потому что все говно! Но если присмотреться то может и ничего так пока так но не так что бы было все нормально делай нормально...Срочно продам Трехколесный велик чтобы было все збс потому что все говно! Но если присмотреться то может и ничего так пока так но не так что бы было все нормально делай нормально...', '2020-03-11', '', 'Мопеды', 2),
(3, 'гелик', 'Срочно продам Трехколесный велик чтобы было все збс потому что все говно! Но если присмотреться то может и ничего так пока так но не так что бы было все нормально делай нормально...Срочно продам Трехколесный велик чтобы было все збс потому что все говно! Но если присмотреться то может и ничего так пока так но не так что бы было все нормально делай нормально...Срочно продам Трехколесный велик чтобы было все збс потому что все говно! Но если присмотреться то может и ничего так пока так но не так что бы было все нормально делай нормально...', '2020-03-06', '', 'Танки', 2),
(4, 'Маффин', 'Срочно продам Трехколесный велик чтобы было все збс потому что все говно! Но если присмотреться то может и ничего так пока так но не так что бы было все нормально делай нормально...Срочно продам Трехколесный велик чтобы было все збс потому что все говно! Но если присмотреться то может и ничего так пока так но не так что бы было все нормально делай нормально...Срочно продам Трехколесный велик чтобы было все збс потому что все говно! Но если присмотреться то может и ничего так пока так но не так что бы было все нормально делай нормально...', '2020-03-03', '', 'Тапки', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `shop_user`
--

CREATE TABLE `shop_user` (
  `id` int(11) NOT NULL,
  `user_login` tinytext NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `shop_user`
--

INSERT INTO `shop_user` (`id`, `user_login`, `user_name`, `user_email`, `user_password`) VALUES
(18, 'admin', 'bidlos bidlos', 'bad851@mail.ru', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Структура таблицы `shop_user_shop`
--

CREATE TABLE `shop_user_shop` (
  `id` int(11) NOT NULL,
  `shop_name` varchar(50) NOT NULL,
  `shop_user_id` int(25) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `shop_user_shop`
--

INSERT INTO `shop_user_shop` (`id`, `shop_name`, `shop_user_id`, `date`) VALUES
(1, 'Тестовый магазин', 1, '2020-03-14'),
(2, 'Тестовый магазин1', 1, '2020-03-14'),
(3, 'Тестовый магазин2', 2, '2020-03-21');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `internet`
--
ALTER TABLE `internet`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `field_list` (`id`);

--
-- Индексы таблицы `shop_img`
--
ALTER TABLE `shop_img`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `shop_items`
--
ALTER TABLE `shop_items`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `shop_user`
--
ALTER TABLE `shop_user`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `shop_user_shop`
--
ALTER TABLE `shop_user_shop`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `internet`
--
ALTER TABLE `internet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `shop_img`
--
ALTER TABLE `shop_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `shop_items`
--
ALTER TABLE `shop_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `shop_user`
--
ALTER TABLE `shop_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `shop_user_shop`
--
ALTER TABLE `shop_user_shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
