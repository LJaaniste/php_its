-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Loomise aeg: Märts 21, 2024 kell 03:13 PL
-- Serveri versioon: 10.4.32-MariaDB
-- PHP versioon: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Andmebaas: `muusikapood`
--

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `albumid`
--

CREATE TABLE `albumid` (
  `id` int(10) NOT NULL,
  `artist` varchar(255) NOT NULL,
  `album` varchar(255) NOT NULL,
  `aasta` year(4) NOT NULL,
  `hind` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Andmete tõmmistamine tabelile `albumid`
--

INSERT INTO `albumid` (`id`, `artist`, `album`, `aasta`, `hind`) VALUES
(1, 'Onu Bella', 'Fiat', '1998', 110.20),
(2, 'Allina', 'Tres-Zap', '1993', 88.92),
(3, 'Gaylord', 'Gembucket', '2003', 57.02),
(4, 'Orel', 'Bitwolf', '1996', 76.74),
(5, 'Edi', 'Fix San', '2010', 48.58),
(6, 'Leon', 'Domainer', '1997', 34.44),
(7, 'Beverley', 'Stim', '1982', 51.56),
(8, 'Kirbie', 'Konklux', '1996', 31.52),
(9, 'Baily', 'Y-find', '2010', 62.68),
(10, 'Eldridge', 'Sonair', '1998', 24.70),
(11, 'Nollie', 'Stringtough', '2010', 95.91),
(12, 'Scot', 'Zontrax', '2003', 85.22),
(13, 'Halli', 'Domainer', '1995', 81.37),
(14, 'Jenilee', 'Latlux', '2006', 74.69),
(15, 'Nolana', 'Bigtax', '2006', 39.20),
(16, 'Ferrell', 'Cardguard', '1976', 5.63),
(17, 'Lily', 'Vagram', '1990', 65.80),
(18, 'Rosalind', 'Asoka', '1997', 85.43),
(19, 'Vania', 'Mat Lam Tam', '1964', 76.66),
(20, 'Nels', 'Flexidy', '2012', 38.23),
(21, 'Kirby', 'Tempsoft', '2006', 55.75),
(22, 'Sophia', 'Job', '1998', 13.30),
(23, 'Carlyn', 'Stringtough', '2007', 35.61),
(24, 'Mercie', 'Kanlam', '2013', 77.37),
(25, 'Teddy', 'Treeflex', '2008', 82.81),
(26, 'Charmian', 'Viva', '1998', 40.67),
(27, 'Lyon', 'Transcof', '2007', 52.31),
(28, 'Dag', 'Alphazap', '2012', 12.47),
(29, 'Aloin', 'Bytecard', '2008', 51.70),
(30, 'Randi', 'It', '2010', 44.55),
(31, 'Aharon', 'Y-find', '2010', 8.19),
(32, 'Filmore', 'Voyatouch', '1997', 59.36),
(33, 'Byran', 'Daltfresh', '2005', 61.97),
(34, 'Valerye', 'Konklux', '1993', 9.67),
(35, 'Myrwyn', 'Alphazap', '1993', 81.61),
(36, 'Stirling', 'Gembucket', '1993', 51.79),
(37, 'Dede', 'Y-Solowarm', '2007', 94.70),
(38, 'Skye', 'Transcof', '2005', 75.26),
(39, 'Lauretta', 'Home Ing', '2006', 66.69),
(40, 'Berri', 'Transcof', '1993', 75.90),
(41, 'Katrinka', 'Home Ing', '1994', 78.01),
(42, 'Forester', 'Redhold', '2010', 64.96),
(43, 'Neely', 'Alpha', '1996', 96.61),
(44, 'Ruthie', 'Domainer', '1992', 37.21),
(45, 'Leigh', 'Tempsoft', '2006', 57.44),
(46, 'Mord', 'Fixflex', '2006', 57.75),
(47, 'Dewey', 'Bytecard', '2006', 51.06),
(48, 'Valida', 'Alpha', '1989', 26.53),
(49, 'Darius', 'Namfix', '1992', 13.44),
(50, 'Dunc', 'Tampflex', '2001', 92.76),
(51, 'Reggie', 'Bitwolf', '2001', 48.55),
(52, 'Thibaut', 'Daltfresh', '2004', 6.84),
(53, 'Zacharie', 'Y-find', '2008', 90.63),
(54, 'Matti', 'Wrapsafe', '1998', 33.33),
(55, 'Berenice', 'Gembucket', '2007', 81.52),
(56, 'Dawna', 'Regrant', '2005', 11.94),
(57, 'Shelba', 'Treeflex', '2008', 25.16),
(58, 'Garry', 'Alphazap', '2012', 65.28),
(59, 'Delmor', 'Greenlam', '2006', 65.26),
(60, 'Jeremias', 'Pannier', '1992', 94.05),
(61, 'Aline', 'Redhold', '1992', 27.31),
(62, 'Noell', 'Treeflex', '2007', 11.59),
(63, 'Elizabeth', 'Wrapsafe', '1999', 45.68),
(64, 'North', 'Vagram', '2006', 91.04),
(65, 'Cloe', 'Cardify', '1974', 24.68),
(66, 'Wolf', 'Konklab', '2010', 59.20),
(67, 'Renato', 'Mat Lam Tam', '2000', 48.62),
(68, 'Eugenius', 'Job', '2003', 43.00),
(69, 'Boycie', 'Tempsoft', '1996', 86.91),
(70, 'Sandy', 'Asoka', '2007', 15.27),
(71, 'Scottie', 'Lotlux', '1986', 18.86),
(72, 'Iormina', 'Biodex', '2004', 23.12),
(73, 'Pate', 'Keylex', '2002', 35.92),
(74, 'Jeannette', 'Solarbreeze', '2006', 47.16),
(75, 'Dominick', 'Tempsoft', '2011', 58.02),
(76, 'Tito', 'Konklux', '1991', 82.82),
(77, 'Sheila', 'Rank', '1993', 29.02),
(78, 'Barbabas', 'Bigtax', '1990', 84.77),
(79, 'Valenka', 'Biodex', '1992', 24.81),
(80, 'Rayshell', 'Gembucket', '1999', 89.37),
(81, 'Elsy', 'Fixflex', '2010', 55.59),
(82, 'Leonard', 'Quo Lux', '2009', 8.34),
(83, 'Cherilyn', 'Job', '2000', 3.98),
(84, 'Janey', 'Vagram', '1998', 66.76),
(85, 'Doralyn', 'Kanlam', '1999', 72.46),
(86, 'Angel', 'Vagram', '2005', 74.48),
(87, 'Erick', 'Konklab', '1993', 7.14),
(88, 'Phylys', 'Cardify', '2012', 43.75),
(89, 'Dev', 'Kanlam', '1999', 47.37),
(90, 'Beatriz', 'Cardguard', '2007', 62.41),
(91, 'Taite', 'Greenlam', '1996', 90.35),
(92, 'Mora', 'Alphazap', '2006', 50.05),
(93, 'Karolina', 'Konklux', '1992', 50.94),
(94, 'Durand', 'It', '2007', 7.79),
(95, 'Vivyan', 'Opela', '2010', 54.10),
(96, 'Randall', 'Andalax', '2011', 49.88),
(97, 'Clare', 'Pannier', '1996', 49.87),
(98, 'Courtenay', 'Subin', '2001', 27.53),
(99, 'Nannette', 'Stronghold', '1993', 17.11),
(100, 'Carolan', 'Tres-Zap', '1984', 58.90),
(101, 'Marci', 'Tres-Zap', '2004', 21.34);

--
-- Indeksid tõmmistatud tabelitele
--

--
-- Indeksid tabelile `albumid`
--
ALTER TABLE `albumid`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT tõmmistatud tabelitele
--

--
-- AUTO_INCREMENT tabelile `albumid`
--
ALTER TABLE `albumid`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
