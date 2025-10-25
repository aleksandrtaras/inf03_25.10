-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 28 Kwi 2018, 20:07
-- Wersja serwera: 10.1.10-MariaDB
-- Wersja PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `test3`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `studenci`
--

CREATE TABLE `studenci` (
  `id` int(11) NOT NULL,
  `imie` varchar(60) NOT NULL,
  `nazwisko` varchar(70) NOT NULL,
  `wiek` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `studenci`
--

INSERT INTO `studenci` (`id`, `imie`, `nazwisko`, `wiek`) VALUES
(1, 'anna', 'kwiatkowska', 21),
(2, 'agnieszka', 'Kowalska', 12),
(3, 'Anna', 'Pawe?ko', 41),
(3, 'Anna', 'Pawelko', 41),
(5, 'Wioletta', 'Wilk', 25);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
