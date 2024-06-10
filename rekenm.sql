-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 10 jun 2024 om 20:03
-- Serverversie: 10.4.32-MariaDB
-- PHP-versie: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rekenm`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `geschiedenis`
--

CREATE TABLE `geschiedenis` (
  `berekening` varchar(11) NOT NULL,
  `uitkomst` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `geschiedenis`
--

INSERT INTO `geschiedenis` (`berekening`, `uitkomst`) VALUES
('5+4', '9'),
('5+4', '9'),
('5+4', '9'),
('5+4', '9'),
('5+4', '9'),
('5+4', '9'),
('3+2', '5'),
('3+2', '5'),
('3+2', '5'),
('3+3-8+7-4', '13'),
('5-8-6-7', '-16'),
('5+5+9*8', '19'),
('2+1', '3'),
('2+1', '3'),
('5+2+8', '15'),
('5%4', '1'),
('3+9', '12'),
('6+5%9', '11'),
('3.7+8', '11'),
('3.7+8', '11'),
('3.7*9', '27'),
('3.7*9', '27'),
('3.7*9', '27'),
('2.6+6', '8'),
('2.6+6', '8'),
('2.6+6', '8'),
('2.6+6', '8'),
('2.6+6', '8'),
('2.6+6', '8'),
('2.6+6', '8'),
('2.6+6', '8'),
('93.55+22', '115'),
('93.55+22', '115');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
