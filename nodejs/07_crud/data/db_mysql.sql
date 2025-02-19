-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 01. Aug 2024 um 12:28
-- Server-Version: 5.6.13
-- PHP-Version: 8.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `db_mysql`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tb_movies`
--

CREATE TABLE `tb_movies` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `year` int(11) NOT NULL,
  `description` text NOT NULL,
  `createdAt` date NOT NULL,
  `updatedAt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `tb_movies`
--

INSERT INTO `tb_movies` (`id`, `title`, `year`, `description`, `createdAt`, `updatedAt`) VALUES
(1, 'The Godfather: Part II', 1974, 'The early life and career of Vito Corleone in 1920s New York City is portrayed, while his son, Michael, expands and tightens his grip on the family crime syndicate.', '2024-08-01', '2024-08-01'),
(2, 'Il no bueno', 2000, 'A bounty hunting scam joins two men in an uneasy alliance against a third in a race to find a fortune in gold buried in a remote cemetery.', '2024-08-01', '2024-08-01'),
(3, 'Pups Fiction', 1999, 'The lives of two mob hitmen, a boxer, a gangster and his wife, and a pair of diner bandits intertwine in four tales of violence and redemption.', '2024-08-01', '2024-08-01'),
(4, 'Inception', 2010, 'A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a C.E.O., but his tragic past may doom the project and his team to disaster.', '2024-08-01', '2024-08-01'),
(5, '12 Angry Men', 1957, 'The film tells the story of a jury of 12 men as they deliberate the conviction or acquittal of a teenager charged with murder on the basis of reasonable doubt.', '2024-08-01', '2024-08-01'),
(6, 'Nosferatu', 1922, 'Murnau and starring Max Schreck as Count Orlok, a vampire who preys on the wife (Greta Schröder) of his estate agent (Gustav von Wangenheim) and brings the plague to their town.', '2024-08-01', '2024-08-01'),
(7, 'Metropolis', 1927, 'Made in Germany during the Weimar period, Metropolis is set in a futuristic urban dystopia and follows the attempts of Freder, the wealthy son of the city master, and Maria, a saintly figure to the workers, to overcome the vast gulf separating the classes in their city and bring the workers together.', '2024-08-01', '2024-08-01');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `tb_movies`
--
ALTER TABLE `tb_movies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `tb_movies`
--
ALTER TABLE `tb_movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
