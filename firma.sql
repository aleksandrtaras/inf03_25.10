-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Paź 25, 2025 at 12:10 PM
-- Wersja serwera: 10.4.28-MariaDB
-- Wersja PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `firma`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pracownicy`
--

CREATE TABLE `pracownicy` (
  `id` int(11) NOT NULL,
  `imie` varchar(20) NOT NULL,
  `nazwisko` varchar(20) NOT NULL,
  `placa` decimal(7,2) NOT NULL,
  `stanowisko` varchar(20) DEFAULT NULL,
  `pesel` char(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pracownicy`
--

INSERT INTO `pracownicy` (`id`, `imie`, `nazwisko`, `placa`, `stanowisko`, `pesel`) VALUES
(1, 'Adam', 'Kowalski', 1624.50, 'magazynier', '12345678901'),
(2, 'Adam', 'Nowak', 3760.00, 'kierownik', '92345678901'),
(3, 'Andrzej', 'Kowalski', 4200.00, 'kierownik', '72345678901'),
(4, 'Arkadiusz', 'Malinowski', 1600.00, 'kierowca', '92345678909'),
(5, 'Andrzej', 'Malinowski', 1450.00, 'sprzedawca', NULL),
(6, 'Krzysztof', 'Nowicki', 1300.00, 'sprzedawca', NULL),
(7, 'Kacper', 'Adamczyk', 1610.50, 'serwisant', '92341678903'),
(8, 'Kamil', 'Andrzejczak', 1200.00, 'asystent', NULL),
(9, 'Krzysztof', 'Arkuszewski', 1500.00, 'magazynier', '02343678913'),
(10, 'Kamil', 'Borowski', 1600.00, 'sprzedawca', '32349678913');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `pracownicy`
--
ALTER TABLE `pracownicy`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
