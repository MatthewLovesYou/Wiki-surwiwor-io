-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 23 Maj 2023, 20:09
-- Wersja serwera: 10.4.22-MariaDB
-- Wersja PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `zgloszenia`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `formulasz`
--

CREATE TABLE `formulasz` (
  `id_zgloszenia` int(11) NOT NULL,
  `nazwa_uzytkownika` varchar(45) COLLATE utf8_polish_ci NOT NULL,
  `problem` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `formulasz`
--

INSERT INTO `formulasz` (`id_zgloszenia`, `nazwa_uzytkownika`, `problem`) VALUES
(1, 'Meowski', 'Ta strona jest zbyt SUPER, aby z niej korzystać!!'),
(2, '', ''),
(3, '', ''),
(4, 'HohoMiko', 'Mam problem z tym że naprawdę te kolory są brzydkie, zmień je!');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `formulasz`
--
ALTER TABLE `formulasz`
  ADD PRIMARY KEY (`id_zgloszenia`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `formulasz`
--
ALTER TABLE `formulasz`
  MODIFY `id_zgloszenia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
