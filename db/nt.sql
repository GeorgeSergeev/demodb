-- phpMyAdmin SQL Dump
-- version 3.3.3
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Янв 14 2013 г., 10:40
-- Версия сервера: 5.1.50
-- Версия PHP: 5.3.14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `note`
--

-- --------------------------------------------------------

--
-- Структура таблицы `nt`
--

DROP TABLE IF EXISTS `nt`;
CREATE TABLE IF NOT EXISTS `nt` (
  `code` int(11) NOT NULL AUTO_INCREMENT,
  `FIO` varchar(30) COLLATE cp1251_bin NOT NULL,
  `CITY` varchar(20) COLLATE cp1251_bin NOT NULL,
  `phone` int(11) NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=cp1251 COLLATE=cp1251_bin AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `nt`
--

INSERT INTO `nt` (`code`, `FIO`, `CITY`, `phone`) VALUES
(1, 'Иваенов', 'УЛЬЯНОВСК', 11111),
(3, 'Сидоров', 'Севастополь', 33333),
(4, 'Семенов', 'Севастополь', 22222),
(5, 'Мушкин', 'Мухов', 12);
