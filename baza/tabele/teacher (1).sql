-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 26 Sty 2023, 20:16
-- Wersja serwera: 10.4.25-MariaDB
-- Wersja PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `conversations`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `surname` varchar(128) NOT NULL,
  `language` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `surname`, `language`) VALUES
(1, 'Anna', 'Smolarek', 'Angielski'),
(3, 'Katarzyna', 'Michalska', 'Angielski'),
(4, 'Anna', 'Matuszak', 'Angielski'),
(5, 'Katarzyna', 'Michalska', 'Angielski'),
(7, 'Marta', 'Michalska', 'Niemiecki'),
(8, 'Mateusz', 'Kowalski', 'Niemiecki'),
(9, 'Marta', 'Michalska', 'Niemiecki'),
(10, 'Mateusz', 'Kowalski', 'Niemiecki'),
(11, 'Marcin', 'Kowal', 'Niemiecki'),
(12, 'Adam', 'Gałuszewski', 'Francuski'),
(13, 'Michalina', 'Romańska', 'Francuski'),
(14, 'Anna', 'Czapla', 'Francuski'),
(15, 'Michalina', 'Skorupska', 'Hiszpański'),
(16, 'Karolina', 'Ciseł', 'Hiszpański'),
(17, 'Michał', 'Adamczyk', 'Hiszpański');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
