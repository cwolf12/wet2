-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 01. Jul 2013 um 15:39
-- Server Version: 5.5.32
-- PHP-Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `wet2`
--
CREATE DATABASE IF NOT EXISTS `wet2` DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci;
USE `wet2`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `details`
--

CREATE TABLE IF NOT EXISTS `details` (
  `ID` int(32) NOT NULL AUTO_INCREMENT,
  `Titel` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `Info` varchar(16000) COLLATE latin1_general_ci NOT NULL,
  `Foto` mediumtext COLLATE latin1_general_ci NOT NULL,
  `Bewertung` int(1) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Titel` (`Titel`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=6 ;

--
-- Daten für Tabelle `details`
--

INSERT INTO `details` (`ID`, `Titel`, `Info`, `Foto`, `Bewertung`) VALUES
(1, '', '', '', 0),
(2, 'asdf', 'asfd', 'afsd', 0),
(3, 'fasdf', 'safd', 'asfd', 3),
(4, 'test', 'test', 'test', 1),
(5, 'test2', 'test2', 'test2', 2);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `programm`
--

CREATE TABLE IF NOT EXISTS `programm` (
  `ID` int(32) NOT NULL AUTO_INCREMENT,
  `Datum` date NOT NULL,
  `Uhrzeit` time NOT NULL,
  `Titel` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `Art` varchar(100) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `Datum` (`Datum`,`Titel`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=4 ;

--
-- Daten für Tabelle `programm`
--

INSERT INTO `programm` (`ID`, `Datum`, `Uhrzeit`, `Titel`, `Art`) VALUES
(1, '2012-12-12', '12:00:00', 'test', 'test'),
(2, '2013-12-12', '13:00:00', 'test2', 'test'),
(3, '2012-12-12', '12:00:00', 'test', 'test');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(20) NOT NULL AUTO_INCREMENT,
  `user` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `password` varchar(2048) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `Admin` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `user` (`user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Daten für Tabelle `user`
--

INSERT INTO `user` (`ID`, `user`, `password`, `email`, `Admin`) VALUES
(1, 'admin', 'wet2admin', 'admin@wet2', 1),
(5, 'test', 'test', 'test@test', 0),
(6, 'test2', 'test2', 'test2@test2', 0),
(7, 'test3', 'test', 'test@test', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
