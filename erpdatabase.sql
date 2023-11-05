-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Lis 05, 2023 at 06:26 PM
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
(1, 'Jan', 'Kowalski', 'kwiatowa', 'email1@wp.pl'),
(2, 'wieslawa', 'nowak', 'polna', 'email2@o2.pl'),
(3, 'toamsz', 'kwas', 'laczna', 'tenemail@gmail.com'),
(4, 'igor', 'masny', 'krzywa', 'taktenmail@.pl'),
(5, 'karol', 'has', 'kwiatowa', 'email1@wp.pl');

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
(5, 'zygmunt', 'krol', 'konserwator', 4000);

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
  `dostepnosc` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `nazwa`, `opis`, `cena`, `dostepnosc`) VALUES
(1, 'kabel', 'hdmi', 13, b'1'),
(2, 'monitor', 'msi', 2331, b'1'),
(3, 'klawiatura', 'madog', 222, b'1'),
(4, 'myszka', 'logitech', 204, b'1'),
(5, 'przejsciowka', 'vga-hdmi', 20, b'1');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employee_actions`
--
ALTER TABLE `employee_actions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
