-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Окт 18 2024 г., 04:30
-- Версия сервера: 10.4.32-MariaDB
-- Версия PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `plants`
--

-- --------------------------------------------------------

--
-- Структура таблицы `field_list`
--

CREATE TABLE `field_list` (
  `field_id` int(11) NOT NULL,
  `field_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `field_list`
--

INSERT INTO `field_list` (`field_id`, `field_name`) VALUES
(1, 'Поле №1'),
(2, 'Поле №2'),
(3, 'Поле №3'),
(4, 'Поле №4'),
(5, 'Поле №5'),
(6, 'Поле №6'),
(7, 'Поле №7'),
(8, 'Поле №8'),
(9, 'Поле №9'),
(10, 'Поле №10');

-- --------------------------------------------------------

--
-- Структура таблицы `plants_field`
--

CREATE TABLE `plants_field` (
  `plants_id` int(11) NOT NULL,
  `plants_image` varchar(50) NOT NULL,
  `plants_name` varchar(50) NOT NULL,
  `plants_field_name` int(11) NOT NULL,
  `plants_description` varchar(200) NOT NULL,
  `plants_cost_ton` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `plants_field`
--

INSERT INTO `plants_field` (`plants_id`, `plants_image`, `plants_name`, `plants_field_name`, `plants_description`, `plants_cost_ton`) VALUES
(1, '001.jpg', 'Репа', 1, 'Однолетнее или двухлетнее травянистое растение, семейства капустных', 4800),
(2, '002.jpg', 'Морковь', 2, 'Имеет пурпурную кожицу и блестящую желто-оранжевую сердцевину', 3200),
(3, '003.jpg', 'Помидоры сорта дакота', 3, 'Индетерминантный сорт, плоды массой до 800 гр. с великолепными вкусовыми качествами', 9800),
(4, '004.jpg', 'Хлопчатник', 4, 'Род семейства Мальвовые. Древесные и травянистые, многолетние, двулетние и однолетние растения', 5400),
(5, '005.jpg', 'Картофель', 5, 'Многолетнее травянистое растение из семейства пасленовых', 2700),
(6, '006.jpg', 'Помидоры сорта сердце Италии', 3, 'Плоды красно-малиновые, сердцевидной формы, массой 300-400 гр. с отличными вкусовыми качествами', 7400),
(7, '007.jpg', 'Капуста огородная', 3, 'Одомашненное более 3500 лет назад двулетнее растение рода Капуста (Brassica) семейства Капустные (Крестоцветные)', 7350),
(8, '008.jpg', 'Перец стручковый', 7, 'Название ряда различных растений, а также распространённых пряностей, получаемых из их плодов', 9400),
(9, '009.jpg', 'Фасоль', 10, 'Травянистые растения, чаще однолетние, большею частью вьющиеся, с перистыми листьями. Корневая система стержневая.', 6900),
(10, '010.jpg', 'Кукуруза', 8, 'Кукуруза — высокорослое однолетнее травянистое растение, достигающее высоты 3 м и более', 8200);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `field_list`
--
ALTER TABLE `field_list`
  ADD PRIMARY KEY (`field_id`);

--
-- Индексы таблицы `plants_field`
--
ALTER TABLE `plants_field`
  ADD PRIMARY KEY (`plants_id`),
  ADD KEY `plants_field_name` (`plants_field_name`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `field_list`
--
ALTER TABLE `field_list`
  MODIFY `field_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `plants_field`
--
ALTER TABLE `plants_field`
  MODIFY `plants_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `plants_field`
--
ALTER TABLE `plants_field`
  ADD CONSTRAINT `plants_field_ibfk_1` FOREIGN KEY (`plants_field_name`) REFERENCES `field_list` (`field_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
