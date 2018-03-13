-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 15. Feb 2018 um 10:11
-- Server-Version: 10.1.13-MariaDB
-- PHP-Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Datenbank: `passengerbench`
--
CREATE DATABASE IF NOT EXISTS `passengerbench` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `passengerbench`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `person`
--

CREATE TABLE `person` (
  `id_person` int(11) NOT NULL COMMENT 'identifier of a person',
  `firstname` varchar(50) NOT NULL COMMENT 'the firstname of a person',
  `lastname` varchar(50) NOT NULL COMMENT 'the lastname of a person',
  `email` varchar(255) NOT NULL COMMENT 'email address of a user',
  `license_plate` varchar(15) DEFAULT NULL COMMENT 'license plate of the person''s car',
  `picture` varchar(255) DEFAULT NULL COMMENT 'link to the picture of a person',
  `password` varchar(1000) NOT NULL COMMENT 'the password of the user account'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='person entity, that includes drivers and passengers';

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `person_demands_trip`
--

CREATE TABLE `person_demands_trip` (
  `id_passenger` int(11) NOT NULL COMMENT 'foreign key to the person table',
  `id_trip` int(11) NOT NULL COMMENT 'foreign key to the trip table',
  `passenger_count` int(11) NOT NULL COMMENT 'number of passengers, who dmand a trip',
  `accepted` tinyint(1) DEFAULT NULL COMMENT 'is set when a driver accepts the demand'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='relation between a passenger and a trip';


-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `station`
--

CREATE TABLE `station` (
  `id_station` int(11) NOT NULL COMMENT 'identifer of a station',
  `name` varchar(50) DEFAULT NULL,
  `latitude` double NOT NULL COMMENT 'latitude value of a station',
  `longitude` double NOT NULL COMMENT 'longitude value of a station'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='default stations that are visible on a map';

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `trip`
--

CREATE TABLE `trip` (
  `id_trip` int(11) NOT NULL COMMENT 'identifier of a trip',
  `start_time` datetime NOT NULL COMMENT 'the time when a driver departs from the departure destination',
  `id_driver` int(11) DEFAULT NULL COMMENT 'foreign key to person table',
  `departure_latitude` double NOT NULL COMMENT 'latitude value of the departure',
  `departure_longitude` double NOT NULL COMMENT 'longitude value of the departure',
  `destination_latitude` double NOT NULL COMMENT 'latitude value of the destination',
  `destination_longitude` double NOT NULL COMMENT 'longitude value of the destination',
  `available_seats` int(11) DEFAULT NULL COMMENT 'number of available seats in the driver''s car'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='the trips, that drivers and passengers create';

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id_person`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indizes für die Tabelle `person_demands_trip`
--
ALTER TABLE `person_demands_trip`
  ADD PRIMARY KEY (`id_passenger`,`id_trip`),
  ADD KEY `id_passenger` (`id_passenger`),
  ADD KEY `id_trip` (`id_trip`);

--
-- Indizes für die Tabelle `station`
--
ALTER TABLE `station`
  ADD PRIMARY KEY (`id_station`);

--
-- Indizes für die Tabelle `trip`
--
ALTER TABLE `trip`
  ADD PRIMARY KEY (`id_trip`),
  ADD KEY `id_driver` (`id_driver`) USING BTREE;

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `person`
--
ALTER TABLE `person`
  MODIFY `id_person` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identifier of a person', AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT für Tabelle `station`
--
ALTER TABLE `station`
  MODIFY `id_station` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identifer of a station', AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT für Tabelle `trip`
--
ALTER TABLE `trip`
  MODIFY `id_trip` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identifier of a trip', AUTO_INCREMENT=4;
--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `person_demands_trip`
--
ALTER TABLE `person_demands_trip`
  ADD CONSTRAINT `id_passenger_fk` FOREIGN KEY (`id_passenger`) REFERENCES `person` (`id_person`) ON DELETE CASCADE,
  ADD CONSTRAINT `id_trip_fk` FOREIGN KEY (`id_trip`) REFERENCES `trip` (`id_trip`) ON DELETE CASCADE;

--
-- Constraints der Tabelle `trip`
--
ALTER TABLE `trip`
  ADD CONSTRAINT `id_driver_fk` FOREIGN KEY (`id_driver`) REFERENCES `person` (`id_person`) ON DELETE SET NULL;
