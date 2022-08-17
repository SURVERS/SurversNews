-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 17 2022 г., 21:51
-- Версия сервера: 10.4.12-MariaDB
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `surversnews`
--

-- --------------------------------------------------------

--
-- Структура таблицы `accounts`
--

CREATE TABLE `accounts` (
  `Hash` varchar(24) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Login` varchar(24) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(31) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Theme` int(11) NOT NULL,
  `Email` varchar(144) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Установить электронную почту',
  `AvailableEmail` int(11) NOT NULL,
  `EnterForEmail` int(1) NOT NULL,
  `Avatar` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default_avatar.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `accounts`
--

INSERT INTO `accounts` (`Hash`, `Login`, `Password`, `Theme`, `Email`, `AvailableEmail`, `EnterForEmail`, `Avatar`) VALUES
('S21UW3ASDSASURVERS123', 'Survers_Legendary', 'test123', 0, '123123@gmail.com', 0, 0, 'YBGHuEBggRtwHofPHzYml.png');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `ID` int(11) NOT NULL,
  `Text` varchar(1500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Date` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`ID`, `Text`, `Date`) VALUES
(1, 'Обновление сайта SURVERS NEWS v1.2 (8 августа):<br />\r\n- Добавлена проверка на кнопку в шапке \"Войти\"<br />\r\n- В профиле можно оставлять посты<br />\r\n- На главной странице теперь качественно отображаются новости<br />\r\n- Оптимизирован сайт', 'August 8, 2022, 12:10:23'),
(7, 'Обновление сайта SURVERS NEWS v1.3 (10 августа):<br />\r\n- Добавлена функция \"Тема сайта\".<br />\r\n- Исправлен баг с ником на шапке<br />\r\n- Исправлен дизайн профиля<br />\r\n- Теперь в профиле можно управлять своим аккаунтом', 'August 10, 2022, 11:34:38'),
(9, 'Обновление сайта SURVERS NEWS v1.4 (13 августа):<br />\r\n- Добавлена система уведомлений<br />\r\n- Улучшил свою систему диалогов<br />\r\n- Теперь можно добавлять/удалять E-mail (без подтверждений пока что)<br />\r\n- Теперь можно включать/выключать вход по почте (без функционала пока что)', 'August 13, 2022, 22:14:24'),
(10, 'Обновление сайта SURVERS NEWS v1.5 (16 августа):<br />\r\n- Сделано управление аватарками (удалить и добавить [ без функционала ]', 'August 16, 2022, 23:21:19'),
(11, 'Обновление сайта SURVERS NEWS v1.6 (17 августа):<br />\r\n- Полноценная система смены/удаление аватарки<br />\r\n- Обновлениа система защиты аккаунта v1.2<br />\r\n- Добавлена кнопка в настройках \"Назад\"<br />\r\n<br />\r\nВсё, всё что я хотел сделать, я сделал, это мой второй крупный сайт, с функционалом, при этом я НЕ Профессионал в PHP, и написал такой сайт, уже в следующем сайте, код будет в два раза круче, этот сайт будет слит на GitHub<br />\r\n<br />\r\n#SurversFamily #GumballFamily', 'August 17, 2022, 21:21:00');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`Hash`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
