-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 15. Feb 2018 um 10:11
-- Server-Version: 10.1.13-MariaDB
-- PHP-Version: 5.6.21

-- --------------------------------------------------------

--
-- Daten für Tabelle `person`
--

INSERT INTO `person` (`id_person`, `firstname`, `lastname`, `email`, `license_plate`, `picture`, `password`) VALUES
(1, 'Ferdinand', 'Harz', 'ferdinand_harz@mail.com', 'FL-FL1234', NULL, '*2470C0C06DEE42FD1618BB99005ADCA2EC9D1E19'),
(2, 'Marek', 'Salzinger', 'marek_salzinger@mail.com', 'FL-FL2222', NULL, '*2470C0C06DEE42FD1618BB99005ADCA2EC9D1E19'),
(3, 'Daniel', 'Hartz', 'daniel_hartz@mail.com', NULL, NULL, '*2470C0C06DEE42FD1618BB99005ADCA2EC9D1E19'),
(4, 'Lars', 'Braunshausen', 'lars_braunshausen@mail.com', 'FL-FL3333', NULL, '*2470C0C06DEE42FD1618BB99005ADCA2EC9D1E19');

-- --------------------------------------------------------

--
-- Daten für Tabelle `person_demands_trip`
--

INSERT INTO `person_demands_trip` (`id_passenger`, `id_trip`, `passenger_count`, `accepted`) VALUES
(1, 2, 1, NULL),
(3, 3, 1, NULL),
(4, 2, 1, 1);

-- --------------------------------------------------------

--
-- Daten für Tabelle `station`
--

INSERT INTO `station` (`id_station`, `name`, `latitude`, `longitude`) VALUES
(1, 'Flensburg', 54.7937431, 9.4469964),
(2, 'Schleswig', 54.523931, 9.563227),
(3, 'Niebüll', 54.787426, 8.830843);

-- --------------------------------------------------------

--
-- Daten für Tabelle `trip`
--

INSERT INTO `trip` (`id_trip`, `start_time`, `id_driver`, `departure_latitude`, `departure_longitude`, `destination_latitude`, `destination_longitude`, `available_seats`) VALUES
(1, '2018-02-15 11:00:00', 4, 54.7937431, 9.4469964, 54.523931, 9.563227, 2),
(2, '2018-02-15 11:00:00', 2, 54.523931, 9.563227, 54.7937431, 9.4469964, 4),
(3, '2018-02-15 14:40:00', NULL, 54.7937431, 9.4469964, 54.787426, 8.830843, NULL);
