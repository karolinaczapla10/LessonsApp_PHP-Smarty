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

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `meeting`
--
ALTER TABLE `meeting`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student` (`student`),
  ADD KEY `teacher` (`teacher`),
  ADD KEY `room` (`room`) USING BTREE;

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `meeting`
--
ALTER TABLE `meeting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=847;

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
