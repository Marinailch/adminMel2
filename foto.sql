-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 09 2017 г., 00:08
-- Версия сервера: 5.6.31
-- Версия PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `foto`
--

-- --------------------------------------------------------

--
-- Структура таблицы `foto`
--

CREATE TABLE IF NOT EXISTS `foto` (
  `id` int(11) NOT NULL,
  `link` text NOT NULL,
  `link_id` int(11) NOT NULL,
  `main_foto_id` enum('Y','N') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=201 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `foto`
--

INSERT INTO `foto` (`id`, `link`, `link_id`, `main_foto_id`) VALUES
(1, '1.jpg', 1, 'N'),
(2, '2.jpg', 1, 'N'),
(3, '3.jpg', 1, 'N'),
(4, '4.jpg', 1, 'N'),
(5, '5.jpg', 1, 'N'),
(6, '6.jpg', 1, 'N'),
(7, '7.jpg', 1, 'N'),
(8, '8.jpg', 1, 'N'),
(9, '9.jpg', 1, 'N'),
(10, '10.jpg', 1, 'N'),
(11, '11.jpg', 1, 'N'),
(12, '12.jpg', 1, 'N'),
(13, '13.jpg', 1, 'N'),
(14, '14.jpg', 1, 'N'),
(15, '15.jpg', 1, 'N'),
(16, '16.jpg', 1, 'N'),
(17, '17.jpg', 1, 'N'),
(18, '18.jpg', 1, 'N'),
(19, '19.jpg', 1, 'N'),
(20, '20.jpg', 1, 'N'),
(21, '21.jpg', 1, 'N'),
(22, '22.jpg', 1, 'N'),
(23, '23.jpg', 1, 'N'),
(24, '24.jpg', 1, 'N'),
(25, '25.jpg', 1, 'N'),
(26, '26.jpg', 1, 'N'),
(27, '27.jpg', 1, 'N'),
(28, 't.jpg', 1, 'Y'),
(29, '28.jpg', 2, 'N'),
(30, '29.jpg', 2, 'N'),
(31, '30.jpg', 2, 'N'),
(32, '31.jpg', 2, 'N'),
(33, '32.jpg', 2, 'N'),
(34, '33.jpg', 2, 'N'),
(35, '34.jpg', 2, 'N'),
(36, '35.jpg', 2, 'N'),
(37, '36.jpg', 2, 'N'),
(38, '37.jpg', 2, 'N'),
(39, '38.jpg', 2, 'N'),
(40, '39.jpg', 2, 'N'),
(41, 't2.jpg', 2, 'Y'),
(42, '40.jpg', 3, 'N'),
(43, '41.jpg', 3, 'N'),
(44, '42.jpg', 3, 'N'),
(45, '43.jpg', 3, 'N'),
(46, '44.jpg', 3, 'N'),
(47, '45.jpg', 3, 'N'),
(48, '46.jpg', 3, 'N'),
(49, '47.jpg', 3, 'N'),
(50, '48.jpg', 3, 'N'),
(51, '49.jpg', 3, 'N'),
(52, 't3.jpg', 3, 'Y'),
(53, '50.jpg', 4, 'N'),
(54, '51.jpg', 4, 'N'),
(55, '52.jpg', 4, 'N'),
(56, '53.jpg', 4, 'N'),
(57, '54.jpg', 4, 'N'),
(58, '55.jpg', 4, 'N'),
(59, '56.jpg', 4, 'N'),
(60, '57.jpg', 4, 'N'),
(61, '58.jpg', 4, 'N'),
(62, '59.jpg', 4, 'N'),
(63, '60.jpg', 4, 'N'),
(64, '61.jpg', 4, 'N'),
(65, 't4.jpg', 4, 'Y'),
(66, '62.jpg', 5, 'N'),
(67, '63.jpg', 5, 'N'),
(68, '64.jpg', 5, 'N'),
(69, '65.jpg', 5, 'N'),
(70, 't5.jpg', 5, 'Y'),
(71, '66.jpg', 6, 'N'),
(72, '67.jpg', 6, 'N'),
(73, '68.jpg', 6, 'N'),
(74, '69.jpg', 6, 'N'),
(75, '70.jpg', 6, 'N'),
(76, '71.jpg', 6, 'N'),
(77, '72.jpg', 6, 'N'),
(78, '73.jpg', 6, 'N'),
(79, '74.jpg', 6, 'N'),
(80, '75.jpg', 6, 'N'),
(81, '76.jpg', 6, 'N'),
(82, '77.jpg', 6, 'N'),
(83, '78.jpg', 6, 'N'),
(84, '79.jpg', 6, 'N'),
(85, 't6.jpg', 6, 'Y'),
(86, '80.jpg', 7, 'N'),
(87, '81.jpg', 7, 'N'),
(88, '82.jpg', 7, 'N'),
(89, '83.jpg', 7, 'N'),
(90, '84.jpg', 7, 'N'),
(91, '85.jpg', 7, 'N'),
(92, '86.jpg', 7, 'N'),
(93, 't7.jpg', 7, 'Y'),
(94, '87.jpg', 8, 'N'),
(95, '88.jpg', 8, 'N'),
(96, '89.jpg', 8, 'N'),
(97, '90.jpg', 8, 'N'),
(98, '91.jpg', 8, 'N'),
(99, '92.jpg', 8, 'N'),
(100, '93.jpg', 8, 'N'),
(101, 't8.jpg', 8, 'Y'),
(102, '94.jpg', 9, 'N'),
(103, '95.jpg', 9, 'N'),
(104, '96.jpg', 9, 'N'),
(105, '97.jpg', 9, 'N'),
(106, '98.jpg', 9, 'N'),
(107, '99.jpg', 9, 'N'),
(108, '100.jpg', 9, 'N'),
(109, '101.jpg', 9, 'N'),
(110, '102.jpg', 9, 'N'),
(111, '103.jpg', 9, 'N'),
(112, '104.jpg', 9, 'N'),
(113, 't9.jpg', 9, 'Y'),
(114, '105.jpg', 10, 'Y'),
(115, '106.jpg', 10, 'N'),
(116, '107.jpg', 10, 'N'),
(117, '108.jpg', 10, 'N'),
(118, '109.jpg', 10, 'N'),
(119, '110.jpg', 10, 'N'),
(120, 't10.jpg', 10, 'N'),
(121, '111.jpg', 11, 'N'),
(122, '112.jpg', 11, 'N'),
(123, '113.jpg', 11, 'N'),
(124, '114.jpg', 11, 'N'),
(125, '115.jpg', 11, 'N'),
(126, '116.jpg', 11, 'N'),
(127, 't11.jpg', 11, 'Y'),
(128, '117.jpg', 12, 'N'),
(129, '118.jpg', 12, 'N'),
(130, '119.jpg', 12, 'N'),
(131, '120.jpg', 12, 'N'),
(132, '121.jpg', 12, 'N'),
(133, '122.jpg', 12, 'N'),
(134, '123.jpg', 12, 'N'),
(135, '124.jpg', 12, 'N'),
(136, '125.jpg', 12, 'N'),
(137, '126.jpg', 12, 'N'),
(138, '127.jpg', 12, 'N'),
(139, '128.jpg', 12, 'N'),
(140, '129.jpg', 12, 'N'),
(141, '130.jpg', 12, 'N'),
(142, '131.jpg', 12, 'N'),
(143, 't12.jpg', 12, 'Y'),
(198, '24e1f8836ec4bc8327b516d2a7786239.JPG', 39, 'Y'),
(199, '7b710c76033ed48fe6c4b47f977d1769.JPG', 39, 'N'),
(200, 'e61303ad32aab58881652218101d983b.jpg', 39, 'N');

-- --------------------------------------------------------

--
-- Структура таблицы `main`
--

CREATE TABLE IF NOT EXISTS `main` (
  `id` int(11) NOT NULL,
  `title1` varchar(50) NOT NULL,
  `title2` varchar(50) NOT NULL,
  `class` varchar(255) NOT NULL,
  `height` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `main`
--

INSERT INTO `main` (`id`, `title1`, `title2`, `class`, `height`) VALUES
(1, 'Кафе Ван Гог', '2014/04', 'interio_work landscape furniture', '1'),
(2, 'Квартира в Днепре', '2012/02', 'interio_life', '1'),
(3, 'МЖК Звездный', '2014/04', 'interio_life', '1'),
(4, 'Квартира на Дзержинского', '2014/05', 'interio_life', '2'),
(5, 'Музейный парк', '2010/01', 'landscape', '2'),
(6, 'ЖК Панорама', '2014/09', 'interio_life', '2'),
(7, 'Загородный дом, 120м2', 'Пос. Новоселица', 'interio_life', '1'),
(8, 'ЖК "Энигма", 120м2', 'г. Днепр', 'interio_life', '2'),
(9, 'Офис', 'г.Днепр', 'interio_work', '2'),
(10, 'Вестибюль офиса', 'г. Мелитополь', 'interio_work', '2'),
(11, 'Офис косметической фирмы', 'г. Днепр', 'interio_work', '2'),
(12, 'Загородный дом, 250м2', 'г. Москва', 'interio_life', '1'),
(39, 'Mycatalog', '33-4345', 'interio_work interio_life furniture', '1');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `link_id` (`link_id`);

--
-- Индексы таблицы `main`
--
ALTER TABLE `main`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `foto`
--
ALTER TABLE `foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=201;
--
-- AUTO_INCREMENT для таблицы `main`
--
ALTER TABLE `main`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `foto`
--
ALTER TABLE `foto`
  ADD CONSTRAINT `foto_ibfk_1` FOREIGN KEY (`link_id`) REFERENCES `main` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `main`
--
ALTER TABLE `main`
  ADD CONSTRAINT `main_ibfk_1` FOREIGN KEY (`id`) REFERENCES `foto` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
