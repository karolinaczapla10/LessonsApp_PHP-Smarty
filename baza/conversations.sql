-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 26 Sty 2023, 20:15
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
-- Struktura tabeli dla tabeli `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `login` varchar(64) NOT NULL,
  `passwd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `admin`
--

INSERT INTO `admin` (`id`, `login`, `passwd`) VALUES
(1, 'admin', '$argon2i$v=19$m=65536,t=4,p=1$STJieW1VazZPbVdqS3pFMw$1osr6X72aiIW55zSJrSyvcNQmm2ZcMop6/L7KSyHqHY'),
(2, 'admin', '$argon2i$v=19$m=65536,t=4,p=1$STJieW1VazZPbVdqS3pFMw$1osr6X72aiIW55zSJrSyvcNQmm2ZcMop6/L7KSyHqHY');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `meeting`
--

CREATE TABLE `meeting` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `student` int(11) NOT NULL,
  `teacher` int(11) NOT NULL,
  `room` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `meeting`
--

INSERT INTO `meeting` (`id`, `date`, `student`, `teacher`, `room`) VALUES
(823, '2023-01-27 08:00:00', 0, 1, 1),
(824, '2023-01-27 09:00:00', 0, 1, 1),
(825, '2023-01-27 10:00:00', 0, 1, 1),
(826, '2023-01-27 11:00:00', 0, 1, 1),
(827, '2023-01-27 12:00:00', 0, 1, 1),
(828, '2023-01-27 13:00:00', 0, 1, 1),
(829, '2023-01-27 14:00:00', 0, 1, 1),
(830, '2023-01-27 15:00:00', 0, 1, 1),
(831, '2023-01-28 08:00:00', 0, 3, 2),
(832, '2023-01-28 09:00:00', 0, 3, 2),
(833, '2023-01-28 10:00:00', 0, 3, 2),
(834, '2023-01-28 11:00:00', 0, 3, 2),
(835, '2023-01-28 12:00:00', 0, 3, 2),
(836, '2023-01-28 13:00:00', 0, 3, 2),
(837, '2023-01-28 14:00:00', 0, 3, 2),
(838, '2023-01-28 15:00:00', 0, 3, 2),
(839, '2023-01-30 08:00:00', 0, 16, 3),
(840, '2023-01-30 09:00:00', 0, 16, 3),
(841, '2023-01-30 10:00:00', 0, 16, 3),
(842, '2023-01-30 11:00:00', 0, 16, 3),
(843, '2023-01-30 12:00:00', 0, 16, 3),
(844, '2023-01-30 13:00:00', 0, 16, 3),
(845, '2023-01-30 14:00:00', 0, 16, 3),
(846, '2023-01-30 15:00:00', 0, 16, 3);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `number` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `room`
--

INSERT INTO `room` (`id`, `number`) VALUES
(1, 'room1'),
(2, 'room2'),
(3, 'room3'),
(4, 'room4');

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
-- Indeksy dla tabeli `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `meeting`
--
ALTER TABLE `meeting`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student` (`student`),
  ADD KEY `teacher` (`teacher`),
  ADD KEY `room` (`room`) USING BTREE;

--
-- Indeksy dla tabeli `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeksy dla tabeli `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `meeting`
--
ALTER TABLE `meeting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=847;

--
-- AUTO_INCREMENT dla tabeli `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT dla tabeli `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `meeting`
--
ALTER TABLE `meeting`
  ADD CONSTRAINT `meeting_ibfk_1` FOREIGN KEY (`student`) REFERENCES `student` (`id`),
  ADD CONSTRAINT `meeting_ibfk_2` FOREIGN KEY (`teacher`) REFERENCES `teacher` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `meeting_ibfk_3` FOREIGN KEY (`room`) REFERENCES `room` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
