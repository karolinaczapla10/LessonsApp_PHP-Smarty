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
-- Struktura tabeli dla tabeli `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `passwd` varchar(256) NOT NULL,
  `name` varchar(64) NOT NULL,
  `surname` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `student`
--

INSERT INTO `student` (`id`, `email`, `passwd`, `name`, `surname`) VALUES
(0, '(pusty)', '', '(pusty)', '(pusty)'),
(16, 'karolinaczapla10@wp.pl', '$argon2i$v=19$m=65536,t=4,p=1$TVdIQjZrbGJwWElzY0NnaA$OISXokfPfa4tyxCQDarUBlbi0M/n1s5nPbkxToZweJ8', 'Karolina', 'Czapla'),
(70, 'dorotaiwaldek1@wp.pl', '$argon2i$v=19$m=65536,t=4,p=1$b0ZGaHEzUzBsYURCaFA5QQ$7QOsoK5yXrX+eVwzpa57L6wpLQoXaqExSAv82I9pwQU', 'Dorota', 'Czapla');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
