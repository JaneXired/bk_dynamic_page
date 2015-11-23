-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 23. Nov 2015 um 12:13
-- Server-Version: 5.6.26
-- PHP-Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `derix-hensel-bremer`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `umfrage`
--

CREATE TABLE IF NOT EXISTS `umfrage` (
  `id` int(3) NOT NULL,
  `antwort_1` int(1) NOT NULL,
  `antwort_2` int(1) NOT NULL,
  `antwort_3` int(1) NOT NULL,
  `antwort_4` int(1) NOT NULL,
  `antwort_5` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=295 DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `umfrage`
--

INSERT INTO `umfrage` (`id`, `antwort_1`, `antwort_2`, `antwort_3`, `antwort_4`, `antwort_5`) VALUES
(218, 1, 0, 0, 0, 0),
(219, 0, 1, 0, 0, 0),
(220, 0, 0, 1, 0, 0),
(221, 0, 0, 0, 1, 0),
(222, 0, 0, 0, 0, 1),
(223, 0, 1, 0, 0, 0),
(224, 0, 0, 1, 0, 0),
(225, 0, 0, 1, 0, 0),
(226, 0, 0, 1, 0, 0),
(227, 0, 1, 0, 0, 0),
(228, 0, 1, 0, 0, 0),
(229, 1, 0, 0, 0, 0),
(230, 0, 0, 0, 1, 0),
(231, 0, 0, 0, 1, 0),
(232, 0, 0, 0, 1, 0),
(233, 0, 0, 0, 1, 0),
(234, 0, 0, 0, 0, 1),
(235, 0, 0, 0, 0, 1),
(236, 0, 0, 0, 0, 1),
(237, 0, 0, 1, 0, 0),
(238, 0, 0, 1, 0, 0),
(239, 0, 0, 1, 0, 0),
(240, 0, 0, 1, 0, 0),
(241, 0, 0, 1, 0, 0),
(242, 1, 0, 0, 0, 0),
(243, 0, 1, 0, 0, 0),
(244, 0, 1, 0, 0, 0),
(245, 0, 0, 0, 0, 1),
(246, 0, 0, 0, 0, 1),
(247, 0, 0, 0, 0, 1),
(248, 0, 0, 0, 0, 1),
(249, 0, 0, 0, 0, 1),
(250, 0, 0, 0, 0, 1),
(251, 0, 0, 0, 0, 1),
(252, 0, 0, 0, 0, 1),
(253, 0, 1, 0, 0, 0),
(254, 0, 1, 0, 0, 0),
(255, 0, 0, 0, 0, 0),
(256, 0, 0, 1, 0, 0),
(257, 1, 0, 0, 0, 0),
(258, 0, 1, 0, 0, 0),
(259, 1, 0, 0, 0, 0),
(260, 1, 0, 0, 0, 0),
(261, 0, 1, 0, 0, 0),
(262, 1, 0, 0, 0, 0),
(263, 1, 0, 0, 0, 0),
(264, 1, 0, 0, 0, 0),
(265, 1, 0, 0, 0, 0),
(266, 1, 0, 0, 0, 0),
(267, 0, 0, 0, 1, 0),
(268, 0, 1, 0, 0, 0),
(269, 1, 0, 0, 0, 0),
(270, 1, 0, 0, 0, 0),
(271, 1, 0, 0, 0, 0),
(272, 1, 0, 0, 0, 0),
(273, 1, 0, 0, 0, 0),
(274, 1, 0, 0, 0, 0),
(275, 1, 0, 0, 0, 0),
(276, 1, 0, 0, 0, 0),
(277, 0, 0, 0, 0, 1),
(278, 0, 0, 1, 0, 0),
(279, 1, 0, 0, 0, 0),
(280, 1, 0, 0, 0, 0),
(281, 1, 0, 0, 0, 0),
(282, 0, 1, 0, 0, 0),
(283, 1, 0, 0, 0, 0),
(284, 1, 0, 0, 0, 0),
(285, 0, 1, 0, 0, 0),
(286, 1, 0, 0, 0, 0),
(287, 1, 0, 0, 0, 0),
(288, 0, 1, 0, 0, 0),
(289, 1, 0, 0, 0, 0),
(290, 1, 0, 0, 0, 0),
(291, 0, 0, 0, 0, 1),
(292, 1, 0, 0, 0, 0),
(293, 1, 0, 0, 0, 0),
(294, 0, 1, 0, 0, 0);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `umfrage`
--
ALTER TABLE `umfrage`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `umfrage`
--
ALTER TABLE `umfrage`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=295;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
