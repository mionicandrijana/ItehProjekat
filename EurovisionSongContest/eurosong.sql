-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 25, 2013 at 10:23 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eurosong`
--

-- --------------------------------------------------------

--
-- Table structure for table `drzave`
--

CREATE TABLE IF NOT EXISTS `drzave` (
  `id_drz` int(11) NOT NULL AUTO_INCREMENT,
  `naziv` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_faza` int(11) NOT NULL,
  PRIMARY KEY (`id_drz`),
  KEY `id_faza` (`id_faza`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=40 ;

--
-- Dumping data for table `drzave`
--

INSERT INTO `drzave` (`id_drz`, `naziv`, `id_faza`) VALUES
(1, 'Austria', 1),
(2, 'Belarus', 1),
(3, 'Belgium', 1),
(4, 'Croatia', 1),
(5, 'Cyprus', 1),
(6, 'Denmark', 1),
(7, 'Estonia', 1),
(8, 'Ireland', 1),
(9, 'Lithuania', 1),
(10, 'Moldova', 1),
(11, 'Montenegro', 1),
(12, 'Russia', 1),
(13, 'Serbia', 1),
(14, 'Slovenia', 1),
(15, 'Ukraine', 1),
(16, 'The Netherlands', 1),
(17, 'Albania', 2),
(18, 'Armenia', 2),
(19, 'Azerbaijan', 2),
(20, 'Bulgaria', 2),
(21, 'F.Y.R. Macedonia', 2),
(22, 'Finland', 2),
(23, 'Georgia', 2),
(24, 'Greece', 2),
(25, 'Hungary', 2),
(26, 'Iceland', 2),
(27, 'Israel', 2),
(28, 'Latvia', 2),
(29, 'Norway', 2),
(30, 'Malta', 2),
(31, 'Romania', 2),
(32, 'San Marino', 2),
(33, 'Switzerland', 2),
(34, 'France', 3),
(35, 'Germany', 3),
(36, 'Italy', 3),
(37, 'Sweden', 3),
(38, 'United Kingdom', 3),
(39, 'Spain', 3);

-- --------------------------------------------------------

--
-- Table structure for table `faze_takmicenja`
--

CREATE TABLE IF NOT EXISTS `faze_takmicenja` (
  `id_faza` int(11) NOT NULL AUTO_INCREMENT,
  `naziv_faze` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_faza`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `faze_takmicenja`
--

INSERT INTO `faze_takmicenja` (`id_faza`, `naziv_faze`) VALUES
(1, '1st Semi-Final'),
(2, '2nd Semi-Final'),
(3, 'Final');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE IF NOT EXISTS `history` (
  `year` int(4) NOT NULL AUTO_INCREMENT,
  `winner` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `id_drz` int(11) NOT NULL,
  PRIMARY KEY (`year`),
  KEY `id_drz` (`id_drz`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2013 ;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`year`, `winner`, `id_drz`) VALUES
(1998, 'Dana International', 38),
(1999, 'Charlotte', 27),
(2000, 'Olsen Brothers', 37),
(2001, 'Tanel Padar', 6),
(2002, 'Marie N', 7),
(2003, 'Sertab Erener', 28),
(2004, 'Ruslana', 42),
(2005, 'Helena Paparizou', 15),
(2006, 'Lordi', 24),
(2007, 'Marija Serifovic', 22),
(2008, 'Dima Bilan', 13),
(2009, 'Alexander Rybak', 12),
(2010, 'Lena', 29),
(2011, 'Ell/Nikki', 35),
(2012, 'Loreen', 19);

-- --------------------------------------------------------

--
-- Table structure for table `komentari`
--

CREATE TABLE IF NOT EXISTS `komentari` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ime` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `komentar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `video` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Dumping data for table `komentari`
--

INSERT INTO `komentari` (`id`, `ime`, `komentar`, `video`) VALUES
(12, 'Bojana N', 'You are great.', 2),
(13, 'Janko', 'Best song.', 2),
(14, 'Jana', '<html>Ovo je spam</html>', 1),
(15, 'Danica', 'Great song.', 4),
(16, 'Mina', 'Congradulation :)', 3);

-- --------------------------------------------------------

--
-- Table structure for table `predstavnici`
--

CREATE TABLE IF NOT EXISTS `predstavnici` (
  `id_pred` int(11) NOT NULL AUTO_INCREMENT,
  `ime_prezime` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pesma` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_drz` int(11) NOT NULL,
  PRIMARY KEY (`id_pred`),
  KEY `id_drz` (`id_drz`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=40 ;

--
-- Dumping data for table `predstavnici`
--

INSERT INTO `predstavnici` (`id_pred`, `ime_prezime`, `pesma`, `id_drz`) VALUES
(1, 'Natália Kelly', 'Shine ', 1),
(2, 'Alyona Lanskaya', 'Rhythm Of Love', 2),
(3, 'Roberto Bellarosa', 'Love Kills ', 3),
(4, 'Super Klapa', 'Mižerja ', 4),
(5, 'Despina Olympiou', 'An Me Thimase ', 5),
(6, 'Emmelie de Forest', 'Only Teardrops', 6),
(7, 'To be announced', '', 7),
(8, 'Ryan Dolan', 'Only Love Survives ', 8),
(9, 'Andrius Pojavis', 'Something ', 9),
(10, 'To be announced', '', 10),
(11, 'Who See', 'Igranka ', 11),
(12, 'To be announced', '', 12),
(13, 'To be announced', '', 13),
(14, 'Hannah', 'To be announced', 14),
(15, 'Zlata Ognevich', 'Gravity ', 15),
(16, 'Anouk', 'To be announced', 16),
(17, 'Adrian Lulgjuraj & Bledar Sejko', 'Identitet', 17),
(18, 'Gor Sujyan', 'To be announced', 18),
(19, 'To be announced', '', 19),
(20, 'Elitsa & Stoyan', 'To be announced', 20),
(21, 'Lozano & Esma', 'To be announced', 21),
(22, 'Krista Siegfrids', ' 	Marry Me ', 22),
(23, 'Nodi Tatishvili & Sophie Gelovani', 'Waterfall ', 23),
(24, 'Koza Mostra and Agathonas Iakovidis', ' 	Alcohol Is Free ', 24),
(25, 'To be announced', '', 25),
(26, 'Eyþór Ingi Gunnlaugsson', 'Ég á Líf', 26),
(27, 'To be announced', '', 27),
(28, 'PeR', 'Here We Go ', 28),
(29, 'Margaret Berger', 'I Feed You My Love ', 29),
(30, 'Gianluca Bezzina', 'Tomorrow ', 30),
(31, 'To be announced', '', 31),
(32, 'Valentina Monetta', 'Crisalide ', 32),
(33, '', 'You And Me ', 33),
(34, 'Amandine Bourgeois', 'L''Enfer Et Moi ', 34),
(35, 'Cascada', 'Glorious ', 35),
(36, 'To be announced', '', 36),
(37, 'To be announced', '', 37),
(38, 'To be announced', '', 38),
(39, 'ESDM - El Sueño De Morfeo', 'To be announced', 39);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `drzave`
--
ALTER TABLE `drzave`
  ADD CONSTRAINT `drzave_ibfk_2` FOREIGN KEY (`id_faza`) REFERENCES `faze_takmicenja` (`id_faza`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `predstavnici`
--
ALTER TABLE `predstavnici`
  ADD CONSTRAINT `predstavnici_ibfk_1` FOREIGN KEY (`id_drz`) REFERENCES `drzave` (`id_drz`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
