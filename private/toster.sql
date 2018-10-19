-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Czas generowania: 19 Paź 2018, 08:11
-- Wersja serwera: 10.1.26-MariaDB-0+deb9u1
-- Wersja PHP: 7.0.30-0+deb9u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `toster`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `News`
--

CREATE TABLE `News` (
  `nId` int(11) NOT NULL,
  `n_Title` text COLLATE utf8_polish_ci NOT NULL,
  `n_Content` text COLLATE utf8_polish_ci NOT NULL,
  `n_AuthorNickname` varchar(25) COLLATE utf8_polish_ci NOT NULL,
  `n_Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `Users`
--

CREATE TABLE `Users` (
  `uId` int(11) NOT NULL,
  `u_Login` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `u_Password` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `u_Nickname` varchar(25) COLLATE utf8_polish_ci NOT NULL,
  `u_UserType` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `News`
--
ALTER TABLE `News`
  ADD PRIMARY KEY (`nId`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`uId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `News`
--
ALTER TABLE `News`
  MODIFY `nId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
--
-- AUTO_INCREMENT dla tabeli `Users`
--
ALTER TABLE `Users`
  MODIFY `uId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
