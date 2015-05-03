-- phpMyAdmin SQL Dump
-- version 4.3.9
-- http://www.phpmyadmin.net
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 03 maj 2015 kl 13:58
-- Serverversion: 5.6.21
-- PHP-version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databas: `bucketlist`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `CategoryID` int(64) NOT NULL COMMENT 'KategoriID',
  `Title` varchar(255) COLLATE utf8_swedish_ci NOT NULL COMMENT 'Titel på kategorin',
  `Icon` varchar(255) COLLATE utf8_swedish_ci NOT NULL COMMENT 'Ikonbild',
  `Color` varchar(255) COLLATE utf8_swedish_ci NOT NULL COMMENT 'Färg för kategorin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci COMMENT='Tabell för kategorier';

-- --------------------------------------------------------

--
-- Tabellstruktur `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `CommentID` int(64) NOT NULL COMMENT 'ID för kommentaren',
  `UserID` int(64) NOT NULL COMMENT 'ID för användaren',
  `CommentatorID` int(64) NOT NULL COMMENT 'ID för den som har gjort kommantaren',
  `Text` varchar(255) COLLATE utf8_swedish_ci NOT NULL COMMENT 'Text i kommentaren',
  `Timestamp` datetime(6) NOT NULL COMMENT 'Tid som kommentarens gjordes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci COMMENT='Tabell för kommentarer';

-- --------------------------------------------------------

--
-- Tabellstruktur `friends`
--

CREATE TABLE IF NOT EXISTS `friends` (
  `UserID` int(64) NOT NULL COMMENT 'Användarens ID',
  `FriendsID` int(64) NOT NULL COMMENT 'Vännens ID',
  `Accepted` tinyint(1) NOT NULL COMMENT 'Om användaren har fixat'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci COMMENT='Vänner tabellen';

-- --------------------------------------------------------

--
-- Tabellstruktur `list`
--

CREATE TABLE IF NOT EXISTS `list` (
  `ListID` int(64) NOT NULL COMMENT 'ID för den inviduella listan.',
  `ItemID` int(64) NOT NULL COMMENT 'ID för det individuella föremål ',
  `UserID` int(64) NOT NULL COMMENT 'ID för användaren',
  `URL` varchar(255) COLLATE utf8_swedish_ci NOT NULL COMMENT 'URL till listan',
  `Private` tinyint(1) NOT NULL COMMENT 'Om listan ska vara privat'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci COMMENT='Tabell för listan';

--
-- Dumpning av Data i tabell `list`
--

INSERT INTO `list` (`ListID`, `ItemID`, `UserID`, `URL`, `Private`) VALUES
(1, 1, 1, 'Nothing', 1),
(2, 2, 1, 'Nothing', 1),
(3, 3, 1, 'Nothing', 1),
(4, 4, 1, 'Nothing', 1),
(5, 5, 1, 'Nothing', 1);

-- --------------------------------------------------------

--
-- Tabellstruktur `listitem`
--

CREATE TABLE IF NOT EXISTS `listitem` (
  `ItemID` int(64) NOT NULL COMMENT 'ID för föremålet',
  `CategoryID` int(64) NOT NULL COMMENT 'ID för kategorierna',
  `UserId` int(255) NOT NULL,
  `Title` varchar(255) COLLATE utf8_swedish_ci NOT NULL COMMENT 'Titel för föremålet',
  `Desc` varchar(255) COLLATE utf8_swedish_ci NOT NULL COMMENT 'Beskrivande text för föremålet',
  `Image` varchar(255) COLLATE utf8_swedish_ci NOT NULL COMMENT 'Bilden som ska finnas i listitem',
  `Checked` tinyint(1) NOT NULL COMMENT 'Ser om den är avklarad',
  `Rank` int(64) NOT NULL COMMENT 'Rankning +1 för att öka',
  `Private` tinyint(1) NOT NULL COMMENT 'Om föremålet är privat'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci COMMENT='Tabell för inviduella föremål som kopplas till listor';

--
-- Dumpning av Data i tabell `listitem`
--

INSERT INTO `listitem` (`ItemID`, `CategoryID`, `UserId`, `Title`, `Desc`, `Image`, `Checked`, `Rank`, `Private`) VALUES
(1, 1, 1, 'Something fun.', 'First item.', '', 0, 7, 1),
(2, 2, 1, 'Going jumping!', 'Go jump from a cliff!', '', 1, 1, 1),
(3, 3, 1, 'Help in a war!', 'Help fight the evil!', '', 0, 2, 1),
(4, 3, 1, 'Have a drink!', 'Drink something good.', '', 1, 3, 1),
(5, 4, 1, 'Go travel!', 'Travel to a foreign country!', '', 0, 4, 1);

-- --------------------------------------------------------

--
-- Tabellstruktur `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(64) NOT NULL COMMENT 'Användarens ID',
  `UserName` varchar(255) COLLATE utf8_swedish_ci NOT NULL COMMENT 'Användarens namn ska vara unikt',
  `Password` varchar(255) COLLATE utf8_swedish_ci NOT NULL COMMENT 'Användarens lösenord',
  `Fname` varchar(255) COLLATE utf8_swedish_ci NOT NULL COMMENT 'Användarens förnamn',
  `Lname` varchar(255) COLLATE utf8_swedish_ci NOT NULL COMMENT 'Användarens efternamn',
  `Age` date NOT NULL COMMENT 'Användarens ålder',
  `Mail` varchar(255) COLLATE utf8_swedish_ci NOT NULL COMMENT 'Användarens email',
  `Country` varchar(255) COLLATE utf8_swedish_ci NOT NULL COMMENT 'Landet som användaren bor i',
  `Gender` varchar(255) COLLATE utf8_swedish_ci NOT NULL COMMENT 'Användarens kön',
  `Userpicture` varchar(255) COLLATE utf8_swedish_ci NOT NULL COMMENT 'Användarens bild',
  `Role` int(64) NOT NULL COMMENT 'Användarens roll (två stycken, admin och vanlig användare)',
  `Facebook` varchar(255) COLLATE utf8_swedish_ci NOT NULL COMMENT 'Användarens facebook (osäker på denna)',
  `remember_token` varchar(100) COLLATE utf8_swedish_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci COMMENT='Tabellen för användaren.';

--
-- Dumpning av Data i tabell `users`
--

INSERT INTO `users` (`id`, `UserName`, `Password`, `Fname`, `Lname`, `Age`, `Mail`, `Country`, `Gender`, `Userpicture`, `Role`, `Facebook`, `remember_token`) VALUES
(1, 'Erik', '123456', 'Sna', 'Bel', '2015-02-03', 'snabel@mail.com', 'Sweden', 'Male', '', 0, '0', NULL),
(2, 'Sven-Erik2', '123456', 'Pe', 'Lle', '2015-02-26', 'pelle@mail.com', 'Sweden', 'Male', '', 0, '0', NULL),
(3, 'Staffan Jansson', '$2y$10$fmlvdp3N1iyKGDAmMw2m1.b07qwzcPWYX.RUccT.RTQv7LfLGHEE.', '', '', '0000-00-00', 'zion__01@hotmail.com', '0', '0', '0', 0, 'Facebook', NULL),
(4, 'GÃ¶ran', '123', '123', '123', '0000-00-00', '0', '123', '23', '0', 0, '0', NULL),
(5, 'Ykker', '123', '123', '123', '0000-00-00', '0', '123', '23', '0', 0, '0', NULL),
(9, 'Iller', '123', '123', '123', '0000-00-00', '0', '123', '23', '0', 0, '0', NULL),
(16, 'Pelle', '123', '123', '123', '0123-12-03', '0', '123', '123', '0', 0, '0', NULL),
(17, 'Olle', '123', '123', '123', '0123-12-03', '0', '123', 'female', '0', 0, '0', NULL),
(19, 'Sven', '123', '123', '123', '0123-12-03', '0', '123', 'female', '0', 0, '0', NULL),
(21, 'Pool', '123', '123', '123', '1232-12-03', '0', '123', 'Female', '0', 0, '0', NULL),
(22, '', '', '', '', '0000-00-00', '0', '', 'Female', '0', 0, '0', NULL);

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CategoryID`);

--
-- Index för tabell `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`CommentID`);

--
-- Index för tabell `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`UserID`,`FriendsID`);

--
-- Index för tabell `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`ListID`);

--
-- Index för tabell `listitem`
--
ALTER TABLE `listitem`
  ADD PRIMARY KEY (`ItemID`);

--
-- Index för tabell `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `UserName` (`UserName`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `category`
--
ALTER TABLE `category`
  MODIFY `CategoryID` int(64) NOT NULL AUTO_INCREMENT COMMENT 'KategoriID';
--
-- AUTO_INCREMENT för tabell `comments`
--
ALTER TABLE `comments`
  MODIFY `CommentID` int(64) NOT NULL AUTO_INCREMENT COMMENT 'ID för kommentaren';
--
-- AUTO_INCREMENT för tabell `list`
--
ALTER TABLE `list`
  MODIFY `ListID` int(64) NOT NULL AUTO_INCREMENT COMMENT 'ID för den inviduella listan.',AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT för tabell `listitem`
--
ALTER TABLE `listitem`
  MODIFY `ItemID` int(64) NOT NULL AUTO_INCREMENT COMMENT 'ID för föremålet',AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT för tabell `users`
--
ALTER TABLE `users`
  MODIFY `id` int(64) NOT NULL AUTO_INCREMENT COMMENT 'Användarens ID',AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
