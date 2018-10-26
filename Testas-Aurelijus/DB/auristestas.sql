-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 2018 m. Spa 25 d. 13:33
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auristestas`
--

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `data`
--

DROP TABLE IF EXISTS `data`;
CREATE TABLE IF NOT EXISTS `data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(200) DEFAULT NULL,
  `city` varchar(200) NOT NULL,
  `genre` varchar(200) NOT NULL,
  `age` int(11) NOT NULL,
  `likes` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Sukurta duomenų kopija lentelei `data`
--

INSERT INTO `data` (`id`, `ip`, `city`, `genre`, `age`, `likes`) VALUES
(1, '192.168.1.111', 'Vilnius', 'Vyras', 20, 'nothing'),
(2, NULL, 'Vilnius', 'Kita', 14, 'vfee'),
(3, '::1', 'Vilnius', 'Moteris', 552, 'nbhgnh'),
(4, '::1', 'Vilnius', 'Moteris', 552, 'nbhgnh'),
(5, '', 'Vilnius', 'Moteris', 552, 'nbhgnh');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
