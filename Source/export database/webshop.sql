-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 06 okt 2014 om 10:28
-- Serverversie: 5.6.17
-- PHP-versie: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `webshop`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `categorien`
--

CREATE TABLE IF NOT EXISTS `categorien` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Category` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Category` (`Category`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Gegevens worden geëxporteerd voor tabel `categorien`
--

INSERT INTO `categorien` (`ID`, `Category`) VALUES
(1, 'Notebook');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gebruikers`
--

CREATE TABLE IF NOT EXISTS `gebruikers` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `gebruikersnaam` varchar(20) NOT NULL,
  `wachtwoord` varchar(50) NOT NULL,
  `naam` varchar(50) NOT NULL,
  `straat` varchar(50) NOT NULL,
  `straatnummer` varchar(11) NOT NULL,
  `woonplaats` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `rol` int(2) NOT NULL,
  `geboortedatum` date NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Gegevens worden geëxporteerd voor tabel `gebruikers`
--

INSERT INTO `gebruikers` (`ID`, `gebruikersnaam`, `wachtwoord`, `naam`, `straat`, `straatnummer`, `woonplaats`, `email`, `rol`, `geboortedatum`) VALUES
(1, 'shams', '76671d4b83f6e6f953ea2dfb75ded921', 'shams hadi', 'laan van mensen rechten', '500', 'apeldoorn', 'shams.hadi@student.aventus.nl', 0, '1995-03-25');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `producten`
--

CREATE TABLE IF NOT EXISTS `producten` (
  `ID` int(50) NOT NULL AUTO_INCREMENT,
  `Naam` varchar(50) NOT NULL,
  `Merk` varchar(10) DEFAULT NULL,
  `Prijs` double NOT NULL,
  `Omschrijving` varchar(3000) NOT NULL,
  `Typenaam` varchar(50) NOT NULL,
  `Typenummer` int(50) NOT NULL,
  `Foto` varchar(50) NOT NULL DEFAULT 'nopic.jpg',
  `Gewicht` double DEFAULT NULL,
  `SchermX` double DEFAULT NULL,
  `SchermY` double DEFAULT NULL,
  `Schermdiagonaal` double DEFAULT NULL,
  `Geheugen` double DEFAULT NULL,
  `CPU` varchar(30) DEFAULT NULL,
  `GPU` varchar(30) DEFAULT NULL,
  `CPUSpeed` double DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID_2` (`ID`),
  KEY `ID` (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Gegevens worden geëxporteerd voor tabel `producten`
--

INSERT INTO `producten` (`ID`, `Naam`, `Merk`, `Prijs`, `Omschrijving`, `Typenaam`, `Typenummer`, `Foto`, `Gewicht`, `SchermX`, `SchermY`, `Schermdiagonaal`, `Geheugen`, `CPU`, `GPU`, `CPUSpeed`) VALUES
(4, 'Laptop BT1', 'BT', 1399.99, 'aldslasjflkaglkasglkasj ajlkasdjfl asdjfl jadfljsadlfj lasdfj lajfla sjflasjdl fkjsadkf sa', 'Notebook', 1, 'nopic.jpg', 2.53, 1920, 1080, 15.6, 12, 'Intel Core i7', 'Nvidia Titan Z', 2.1),
(5, 'Laptop BT2', 'BT', 1499.99, 'dsajdasfjdsfjsjsadjdasjsadjnsadj', 'Notebook', 1, 'nopic.jpg', 2.31, 1920, 1080, 15.6, 12, 'Intel Core i5', 'Nvidia Titan Z', 2.3),
(6, 'Laptop BT3', 'BT', 1599.99, 'kkkafffjaksjsejej kdjkasdj asdk jkasd asdj ajkd jkajdk ajskdjka jkdajd jkasjd jasdj asjd jajkd jasdjk asjd jasdjk asjdjasdj jks jsj jksdjajsd asjdajkdasdjkasjkasjks asdjkaj', 'Notebook', 1, 'nopic.jpg', 2.41, 1920, 1080, 15.6, 16, 'Intel Core i3', 'Nvidia Titan Z', 2.8),
(7, 'Netbook Sony Vaio 4450', 'Sony', 499.99, 'fkdksaf jasdklfj dsafjsdal jlasjflsdkjfl kasjfklsa jflasj klsfdjkal fjaslkfj askl', 'Netbook', 2, 'nopic.jpg', 1.04, 1366, 768, 10.4, 4, 'Intel Atom 4', 'Intel GMA 2000', 1.3),
(8, 'Netbook Sony Vaio 4450', 'Sony', 459.99, 'fkdksaf jasdklfj dsafjsdal jlasjflsdkjfl kasjfklsa jflasj klsfdjkal fjaslkfj askl', 'Netbook', 2, 'nopic.jpg', 1.34, 1366, 768, 10.4, 2, 'Intel Atom 4', 'Intel GMA 2000', 1.2);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `rol`
--

CREATE TABLE IF NOT EXISTS `rol` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `rolnaam` varchar(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Gegevens worden geëxporteerd voor tabel `rol`
--

INSERT INTO `rol` (`ID`, `rolnaam`) VALUES
(1, 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
