-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Lis 18, 2023 at 11:30 AM
-- Wersja serwera: 10.4.28-MariaDB
-- Wersja PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erpdatabase`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `imie` varchar(20) DEFAULT NULL,
  `nazwisko` varchar(30) DEFAULT NULL,
  `adres` varchar(30) DEFAULT NULL,
  `e_mail` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `imie`, `nazwisko`, `adres`, `e_mail`) VALUES
(3, 'toamsz', 'kwas', 'laczna', 'tenemail@gmail.com'),
(4, 'igor', 'masny', 'krzywa', 'taktenmail@.pl'),
(5, 'karool', 'hass', 'kwiatowaa', 'email2@wp.pl'),
(10, 'cyprian', 'B', 'asd', 'sad@adsf'),
(11, 'cyprian', 'B', 'asd', 'sad@adsf'),
(12, 'cyprian', 'B', 'asd', 'sad@adsf'),
(13, 'cyprian', 'B', 'asd', 'sad@adsf'),
(14, 'pan', 'pann', 'adres', 'mail@'),
(15, 'pan', 'pann', 'adres', 'mail@'),
(16, 'pan', 'pann', 'adres', 'mail@'),
(17, 'pan', 'pann', 'adres', 'mail@'),
(18, 'pan', 'pann', 'adres', 'mail@');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `imie` varchar(20) DEFAULT NULL,
  `nazwisko` varchar(30) DEFAULT NULL,
  `stanowisko` varchar(30) DEFAULT NULL,
  `wynagrodzenie` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `imie`, `nazwisko`, `stanowisko`, `wynagrodzenie`) VALUES
(1, 'adam', 'snak', 'informatyk', 4000),
(2, 'gabriela', 'zeromska', 'dyrektor', 5000),
(3, 'dorian', 'haras', 'nauczyciel', 3800),
(4, 'brajan', 'chwast', 'sekretariat', 3600),
(5, 'zygmunt', 'krol', 'konserwator', 4000),
(6, 'pracownik', 'pracownik', 'dyrek', 2000),
(7, 'admin', 'admini', 'prezes', 189739812);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `employee_actions`
--

CREATE TABLE `employee_actions` (
  `id` int(11) NOT NULL,
  `id_klienta` int(11) DEFAULT NULL,
  `id_pracownika` int(11) DEFAULT NULL,
  `id_products` int(11) DEFAULT NULL,
  `typ_akcji` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_actions`
--

INSERT INTO `employee_actions` (`id`, `id_klienta`, `id_pracownika`, `id_products`, `typ_akcji`) VALUES
(1, 2, 4, 5, 'usuniecie_produktu'),
(2, 4, 1, 4, 'edycja_produktu'),
(3, 5, 5, 3, 'dodanie_produktu'),
(4, 3, 2, 2, 'edycja_produktu'),
(5, 1, 3, 1, 'usuniecie_produktu');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `historia`
--

CREATE TABLE `historia` (
  `id` int(11) NOT NULL,
  `czas` datetime DEFAULT NULL,
  `czynnosc` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `historia`
--

INSERT INTO `historia` (`id`, `czas`, `czynnosc`) VALUES
(1, '2023-11-06 11:59:12', 'Dodanie klienta'),
(2, '2023-11-06 12:08:43', 'Dodanie klienta'),
(3, '2023-11-06 12:10:03', 'Dodanie klienta'),
(4, '2023-11-06 12:10:41', 'Dodanie klienta'),
(5, '2023-11-06 12:14:29', 'Dodanie klienta'),
(6, '2023-11-06 12:15:18', 'Dodanie klienta'),
(7, '2023-11-06 12:15:55', 'Dodanie klienta'),
(8, '2023-11-06 12:17:37', 'Dodanie klienta'),
(9, '2023-11-06 12:18:15', 'Dodanie klienta'),
(10, '2023-11-06 12:52:14', 'Dodanie pracownika'),
(11, '2023-11-06 13:07:01', 'Dodanie produktu'),
(12, '2023-11-06 13:17:58', 'Dodanie produktu'),
(13, '2023-11-06 13:35:54', 'Usuniecie klienta kl'),
(14, '2023-11-06 13:37:52', 'Usuniecie klienta kl'),
(15, '2023-11-06 13:39:08', 'Usuniecie klienta kl'),
(16, '2023-11-06 13:39:33', 'Usuniecie klienta kl'),
(17, '2023-11-06 13:39:38', 'Usuniecie klienta kl'),
(18, '2023-11-06 13:39:49', 'Usuniecie klienta kl'),
(19, '2023-11-06 13:39:50', 'Usuniecie klienta kl'),
(20, '2023-11-06 13:39:51', 'Usuniecie klienta kl'),
(21, '2023-11-06 13:39:51', 'Usuniecie klienta kl'),
(22, '2023-11-06 13:39:52', 'Usuniecie klienta kl'),
(23, '2023-11-06 13:39:54', 'Usuniecie klienta kl'),
(24, '2023-11-06 13:40:31', 'Usuniecie klienta kl'),
(25, '2023-11-06 13:40:39', 'Usuniecie klienta kl'),
(26, '2023-11-06 13:40:50', 'Usuniecie klienta kl'),
(27, '2023-11-06 13:41:02', 'Usuniecie klienta kl'),
(28, '2023-11-06 15:58:35', 'Usunięcie klienta'),
(29, '2023-11-06 16:04:24', 'Usuniecie klienta klienta'),
(30, '2023-11-06 16:04:52', 'Usuniecie klienta klienta'),
(31, '2023-11-06 16:05:03', 'Usuniecie klienta klienta'),
(32, '2023-11-06 18:06:20', 'Dodanie klienta'),
(33, '2023-11-07 19:19:30', 'Usuniecie klienta klienta'),
(34, '2023-11-07 19:22:16', 'Usuniecie klienta klienta'),
(35, '2023-11-07 19:24:07', 'Usuniecie klienta klienta'),
(36, '2023-11-07 19:24:18', 'Usuniecie klienta klienta'),
(37, '2023-11-07 19:25:34', 'Usuniecie klienta klienta'),
(38, '2023-11-07 19:25:57', 'Usuniecie klienta klienta'),
(39, '2023-11-07 19:26:11', 'Usuniecie klienta klienta'),
(40, '2023-11-07 19:26:19', 'Usuniecie klienta klienta'),
(41, '2023-11-07 19:27:25', 'Usuniecie klienta klienta'),
(42, '2023-11-07 19:27:31', 'Usuniecie klienta klienta'),
(43, '2023-11-07 19:28:38', 'Dodanie klienta'),
(44, '2023-11-07 19:29:09', 'Usuniecie klienta klienta'),
(45, '2023-11-11 19:06:14', 'Dodanie klienta'),
(46, '2023-11-11 19:08:11', 'Usuniecie klienta klienta'),
(47, '2023-11-14 16:38:22', 'Usuniecie produktu '),
(48, '2023-11-14 16:45:28', 'Dodanie produktu'),
(49, '2023-11-14 18:03:39', 'Edycja produktu nazwa'),
(50, '2023-11-14 18:03:44', 'Edycja produktu nazwa'),
(51, '2023-11-14 18:05:28', 'Edycja produktu nazwa'),
(52, '2023-11-14 18:05:54', 'Edycja produktu nazwa'),
(53, '2023-11-14 18:06:10', 'Edycja produktu nazwa'),
(54, '2023-11-14 18:07:09', 'Edycja produktu nazwa'),
(55, '2023-11-14 18:07:30', 'Edycja produktu nazwa'),
(56, '2023-11-14 18:07:37', 'Edycja produktu nazwa'),
(57, '2023-11-14 18:11:37', 'Edycja produktu ceny'),
(58, '2023-11-14 18:11:53', 'Edycja produktu ceny'),
(59, '2023-11-14 18:12:07', 'Edycja produktu ceny'),
(60, '2023-11-14 18:12:21', 'Edycja produktu opisu'),
(61, '2023-11-14 18:12:54', 'Edycja produktu ceny'),
(62, '2023-11-14 18:13:50', 'Edycja produktu nazwa'),
(63, '2023-11-14 18:14:10', 'Edycja produktu opisu'),
(64, '2023-11-14 18:17:17', 'Edycja produktu dostepnosc'),
(65, '2023-11-14 18:18:23', 'Edycja produktu dostepnosc'),
(66, '2023-11-16 13:33:45', 'Dodanie produktu'),
(67, '2023-11-16 13:34:18', 'Edycja produktu nazwa'),
(68, '2023-11-16 13:34:31', 'Edycja produktu dostepnosc'),
(69, '2023-11-16 13:35:17', 'Usuniecie produktu '),
(70, '2023-11-16 13:36:37', 'Dodanie pracownika'),
(71, '2023-11-18 10:21:24', 'Usuniecie produktu '),
(72, '2023-11-18 10:28:54', 'Edycja produktu nazwa'),
(73, '2023-11-18 10:29:18', 'Edycja produktu nazwa'),
(74, '2023-11-18 10:37:06', 'Edycja produktu nazwa'),
(75, '2023-11-18 10:37:34', 'Edycja produktu nazwa'),
(76, '2023-11-18 10:37:34', 'Edycja produktu nazwa'),
(77, '2023-11-18 10:37:34', 'Edycja produktu nazwa'),
(78, '2023-11-18 10:37:41', 'Edycja produktu nazwa'),
(79, '2023-11-18 10:37:46', 'Edycja produktu nazwa'),
(80, '2023-11-18 10:40:40', 'Edycja produktu cena'),
(81, '2023-11-18 10:43:12', 'Edycja produktu opis'),
(82, '2023-11-18 10:43:25', 'Edycja produktu opis'),
(83, '2023-11-18 10:52:48', 'Usuniecie klienta klienta'),
(84, '2023-11-18 10:57:34', 'Edycja klienta imie'),
(85, '2023-11-18 10:57:40', 'Edycja klienta nazwisko'),
(86, '2023-11-18 10:58:40', 'Edycja klienta nazwisko'),
(87, '2023-11-18 11:00:13', 'Edycja klienta adres'),
(88, '2023-11-18 11:00:25', 'Edycja klienta e_mail'),
(89, '2023-11-18 11:00:50', 'Edycja klienta e_mail'),
(90, '2023-11-18 11:01:12', 'Edycja klienta e_mail');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `zamowienie` int(11) DEFAULT NULL,
  `data_zamowienia` date DEFAULT NULL,
  `klient` int(11) DEFAULT NULL,
  `produkt` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `zamowienie`, `data_zamowienia`, `klient`, `produkt`) VALUES
(1, 5, '2007-04-01', 4, 5),
(2, 14, '2021-06-11', 1, 4),
(3, 544, '2022-02-21', 5, 3),
(4, 2, '2004-03-31', 2, 2),
(5, 787, '2000-12-04', 3, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(20) DEFAULT NULL,
  `opis` varchar(30) DEFAULT NULL,
  `cena` double DEFAULT NULL,
  `dostepnosc` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `nazwa`, `opis`, `cena`, `dostepnosc`) VALUES
(2, 'monitor', 'msi', 123, 0),
(3, 'klawiatura', 'madog', 222, 1),
(4, 'myszka', 'logitech', 204, 1),
(5, 'kabel', 'vga__hdmi', 200, 0),
(8, 'NowaNazwa', 'NowyOpis', 321, 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `login` varchar(20) NOT NULL,
  `haslo` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`login`, `haslo`) VALUES
('admini', 'admin'),
('klient', '123456'),
('pracownik', '12345'),
('qwerty', '123'),
('test', '1234');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `employee_actions`
--
ALTER TABLE `employee_actions`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `historia`
--
ALTER TABLE `historia`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `employee_actions`
--
ALTER TABLE `employee_actions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `historia`
--
ALTER TABLE `historia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
