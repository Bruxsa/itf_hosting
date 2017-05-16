-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.5.50 - MySQL Community Server (GPL)
-- ОС Сервера:                   Win32
-- HeidiSQL Версия:              9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп структуры базы данных host
CREATE DATABASE IF NOT EXISTS `host` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `host`;


-- Дамп структуры для таблица host.curator
CREATE TABLE IF NOT EXISTS `curator` (
  `curator_id` int(11) NOT NULL AUTO_INCREMENT,
  `name_curator` varchar(50) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  `email_curator` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`curator_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Экспортируемые данные не выделены.


-- Дамп структуры для таблица host.database
CREATE TABLE IF NOT EXISTS `database` (
  `database_id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) DEFAULT NULL,
  `name_database` varchar(50) DEFAULT NULL,
  `password_database` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`database_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Экспортируемые данные не выделены.


-- Дамп структуры для таблица host.project
CREATE TABLE IF NOT EXISTS `project` (
  `project_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `group` varchar(50) DEFAULT NULL,
  `curator_id` int(11) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `description` text,
  `git` varchar(50) DEFAULT NULL,
  `subdomain` varchar(50) DEFAULT NULL,
  `status_progect` tinyint(2) DEFAULT '0',
  `approve_code` varchar(50) DEFAULT NULL,
  `reject_code` varchar(50) DEFAULT NULL,
  `date_add` date DEFAULT NULL,
  `date_check` date DEFAULT NULL,
  `files_size` int(11) DEFAULT NULL,
  `date_size` datetime DEFAULT NULL,
  `use_mysql` tinyint(1) DEFAULT '0',
  `use_composer` tinyint(1) DEFAULT '0',
  `use_npm` tinyint(1) DEFAULT '0',
  `user_id` int(11) DEFAULT NULL,
  `projectcol` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`project_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Экспортируемые данные не выделены.


-- Дамп структуры для таблица host.release
CREATE TABLE IF NOT EXISTS `release` (
  `release_id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) DEFAULT NULL,
  `date_time` datetime DEFAULT NULL,
  `release_type` tinyint(2) DEFAULT '0',
  `log` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`release_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Экспортируемые данные не выделены.


-- Дамп структуры для таблица host.user
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `email_user` varchar(50) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `password_hash` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO curator (`name_curator`, `status`, `email_curator`)  
	VALUES('Казаков В.Г.', '1' , 'liskaaliska@gmail.com'),
('Казаков В.В.', '1' , 'VladaMarti@yandex.ru'),
('Осипов А.Л.', '0' , 'osipov@yandex.ru'),
('Кощеев Г.С.', '1' , 'Vlada-cotic@mail.ru'),
('Крылов А.С.', '0' , 'Krilov@yandex.ru'),
('Терещенко С.Н.', '1' , 'VladaMarti@yandex.ru'),
('Горбачева А.Г.', '0' , 'gorbacheva@yandex.ru'),
('Павлова А.И.', '1' , 'Vlasya1@mail.ru'),
('Бабешко В.Н.', '0' , 'babeshko@yandex.ru'),
('Соболева И.А.', '0' , 'Soboleva@yandex.ru');
-- Экспортируемые данные не выделены.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
