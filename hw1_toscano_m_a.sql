-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 29, 2023 alle 23:38
-- Versione del server: 10.4.25-MariaDB
-- Versione PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hw1_toscano_m_a`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `message` varchar(255) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `message`, `dt`) VALUES
(1, 'cew', 've@h.i', 'nytbrv', '2023-05-28 16:52:12'),
(2, 'cew', 've@h.i', 'nytbrv', '2023-05-28 16:53:00'),
(3, 'cew', 've@h.i', 'nytbrv', '2023-05-28 16:54:34'),
(4, 'd', 'brvec@vt.o', 'btrevc', '2023-05-28 16:54:51'),
(5, 'd', 'brvec@vt.o', 'btrevc', '2023-05-28 16:56:41'),
(6, 'd', 'brvec@vt.o', 'btrevc', '2023-05-28 16:57:33'),
(7, 'q', 'ce@f.f', 'xcew', '2023-05-29 22:45:11'),
(8, 'q', 'ce@f.f', 'xcew', '2023-05-29 22:45:51');

-- --------------------------------------------------------

--
-- Struttura della tabella `old_values`
--

CREATE TABLE `old_values` (
  `id` int(11) NOT NULL,
  `sensor_id` int(11) NOT NULL,
  `val` int(11) NOT NULL,
  `data_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `old_values`
--

INSERT INTO `old_values` (`id`, `sensor_id`, `val`, `data_time`) VALUES
(1, 22, 231, '2023-05-14 16:37:46'),
(2, 22, 23, '2023-05-14 16:46:29'),
(3, 22, 23, '2023-05-14 16:46:51'),
(4, 22, 230, '2023-05-14 16:50:43'),
(5, 36, 234, '2023-05-14 16:53:01'),
(6, 22, 230, '2023-05-14 16:53:01'),
(7, 36, 238, '2023-05-14 16:54:14'),
(8, 22, 230, '2023-05-14 16:54:14'),
(9, 37, 554, '2023-05-14 16:54:14'),
(10, 36, 240, '2023-05-14 16:55:35'),
(11, 22, 230, '2023-05-14 16:55:35'),
(12, 37, 570, '2023-05-14 16:55:35'),
(13, 36, 240, '2023-05-14 16:55:43'),
(14, 22, 230, '2023-05-14 16:55:43'),
(15, 37, 567, '2023-05-14 16:55:43'),
(16, 36, 240, '2023-05-14 16:55:51'),
(17, 22, 230, '2023-05-14 16:55:51'),
(18, 37, 567, '2023-05-14 16:55:51'),
(19, 36, 240, '2023-05-14 16:55:59'),
(20, 22, 230, '2023-05-14 16:55:59'),
(21, 37, 566, '2023-05-14 16:55:59'),
(22, 36, 240, '2023-05-14 16:56:07'),
(23, 22, 230, '2023-05-14 16:56:08'),
(24, 37, 568, '2023-05-14 16:56:08'),
(25, 36, 240, '2023-05-14 16:56:16'),
(26, 22, 230, '2023-05-14 16:56:16'),
(27, 37, 561, '2023-05-14 16:56:16'),
(28, 36, 240, '2023-05-14 16:56:24'),
(29, 22, 230, '2023-05-14 16:56:24'),
(30, 37, 558, '2023-05-14 16:56:24'),
(31, 36, 240, '2023-05-14 16:56:32'),
(32, 22, 230, '2023-05-14 16:56:32'),
(33, 37, 558, '2023-05-14 16:56:32'),
(34, 36, 239, '2023-05-14 16:56:40'),
(35, 22, 230, '2023-05-14 16:56:40'),
(36, 37, 558, '2023-05-14 16:56:40'),
(37, 36, 239, '2023-05-14 16:56:48'),
(38, 22, 230, '2023-05-14 16:56:48'),
(39, 37, 553, '2023-05-14 16:56:48'),
(40, 36, 239, '2023-05-14 16:56:56'),
(41, 22, 230, '2023-05-14 16:56:57'),
(42, 37, 548, '2023-05-14 16:56:57'),
(43, 36, 240, '2023-05-14 16:57:05'),
(44, 22, 230, '2023-05-14 16:57:05'),
(45, 37, 549, '2023-05-14 16:57:05'),
(46, 36, 239, '2023-05-14 16:57:13'),
(47, 22, 230, '2023-05-14 16:57:13'),
(48, 37, 541, '2023-05-14 16:57:13'),
(49, 36, 239, '2023-05-14 16:57:21'),
(50, 22, 230, '2023-05-14 16:57:21'),
(51, 37, 545, '2023-05-14 16:57:22'),
(52, 36, 239, '2023-05-14 16:57:30'),
(53, 22, 230, '2023-05-14 16:57:30'),
(54, 37, 545, '2023-05-14 16:57:30'),
(55, 36, 239, '2023-05-14 16:57:38'),
(56, 22, 230, '2023-05-14 16:57:38'),
(57, 37, 538, '2023-05-14 16:57:38'),
(58, 36, 239, '2023-05-14 16:57:46'),
(59, 22, 230, '2023-05-14 16:57:46'),
(60, 37, 537, '2023-05-14 16:57:46'),
(61, 36, 240, '2023-05-14 16:57:54'),
(62, 22, 230, '2023-05-14 16:57:54'),
(63, 37, 537, '2023-05-14 16:57:54'),
(64, 36, 240, '2023-05-14 16:58:02'),
(65, 22, 230, '2023-05-14 16:58:02'),
(66, 37, 536, '2023-05-14 16:58:02'),
(67, 36, 239, '2023-05-14 16:58:10'),
(68, 22, 230, '2023-05-14 16:58:10'),
(69, 37, 533, '2023-05-14 16:58:11'),
(70, 22, 220, '2023-05-14 23:53:10'),
(71, 22, 230, '2023-05-17 11:08:26'),
(72, 36, 239, '2023-05-17 11:12:12'),
(73, 37, 533, '2023-05-17 11:12:28'),
(74, 22, 230, '2023-05-17 12:37:06'),
(75, 36, 239, '2023-05-17 12:37:11'),
(76, 37, 533, '2023-05-17 12:37:11'),
(77, 22, 230, '2023-05-17 12:37:32'),
(78, 36, 239, '2023-05-17 12:37:37'),
(79, 37, 533, '2023-05-17 12:37:38'),
(80, 22, 230, '2023-05-17 12:43:59'),
(81, 22, 230, '2023-05-17 12:44:14'),
(82, 23, 50, '2023-05-17 12:53:29'),
(83, 26, 5, '2023-05-17 17:04:33'),
(84, 23, 50, '2023-05-17 17:04:34'),
(85, 30, 49, '2023-05-17 17:18:23'),
(86, 24, 322, '2023-05-18 00:00:23'),
(87, 23, 50, '2023-05-20 11:12:05'),
(88, 21, 50, '2023-05-20 12:44:53'),
(89, 22, 230, '2023-05-20 12:44:58'),
(90, 23, 50, '2023-05-20 12:45:08'),
(91, 26, 5, '2023-05-20 12:45:49'),
(92, 28, 53, '2023-05-20 12:46:43'),
(93, 36, 239, '2023-05-20 12:48:08'),
(94, 37, 533, '2023-05-20 12:48:14'),
(95, 26, 5, '2023-05-28 10:40:51'),
(96, 28, 53, '2023-05-28 10:40:52'),
(97, 36, 239, '2023-05-28 10:40:55'),
(98, 37, 533, '2023-05-28 10:40:56'),
(99, 22, 230, '2023-05-29 10:24:47'),
(100, 21, 50, '2023-05-29 10:24:48'),
(101, 23, 50, '2023-05-29 10:24:48'),
(102, 26, 5, '2023-05-29 10:24:50'),
(103, 28, 53, '2023-05-29 10:24:51'),
(104, 36, 239, '2023-05-29 10:24:55'),
(105, 37, 533, '2023-05-29 10:25:26'),
(106, 22, 230, '2023-05-29 22:41:12'),
(107, 36, 239, '2023-05-29 22:47:12');

-- --------------------------------------------------------

--
-- Struttura della tabella `sensors`
--

CREATE TABLE `sensors` (
  `id_sensor` int(11) NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `val` float NOT NULL,
  `UnityOfM` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `store_old` tinyint(1) NOT NULL,
  `see_dashboard` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `sensors`
--

INSERT INTO `sensors` (`id_sensor`, `name`, `alias`, `val`, `UnityOfM`, `store_old`, `see_dashboard`) VALUES
(21, 'GridFrequency', 'Grid Frequency', 50, 'Hz', 1, 0),
(22, 'ACoutputVoltage', 'AC Output Voltage', 230.2, 'V', 1, 1),
(23, 'ACoutputFreq', 'AC Output Frequency', 49.9, 'Hz', 1, 0),
(24, 'ACoutputVA', 'AC Output VA', 322, 'VA', 0, 0),
(25, 'ACoutputPower', 'AC Output Power', 190, 'W', 0, 0),
(26, 'OutputLoadPerc', 'Output Load Percent', 5, '%', 1, 0),
(27, 'BusVoltage', 'Bus Voltage', 368, 'V', 0, 0),
(28, 'BatteryVoltage', 'Battery Voltage', 53.1, 'V', 1, 0),
(29, 'BatteryChargCurr', 'Battery Charging Current', 4, 'A', 0, 0),
(30, 'BatteryCapacity', 'Battery Capacity', 49, '%', 0, 0),
(31, 'InverterHeatsinkTemperature', 'Inverter Heatsink Temperature', 32, '°C', 0, 0),
(32, 'PVcurrentBattery', 'PV IN Current', 2.6, 'A', 1, 1),
(33, 'PVinputVoltage', 'PV IN Voltage', 201.2, ' V', 0, 1),
(34, 'BatteryVoltageFromScc', 'Battery Voltage From Scc', 0, 'V', 0, 1),
(35, 'BatteryDischCurr', 'Battery Discharge Current', 0, 'A', 0, 1),
(36, 'GridVoltage', 'Grid Voltage', 239.4, 'V', 1, 1),
(37, 'PWcharghPower', 'PV IN Power', 533, 'W', 1, 1);

--
-- Trigger `sensors`
--
DELIMITER $$
CREATE TRIGGER `store_value` AFTER UPDATE ON `sensors` FOR EACH ROW BEGIN
   IF OLD.store_old = 1 THEN
      INSERT INTO `old_values` (`sensor_id`, `val`) VALUES (NEW.id_sensor, NEW.val);
   END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(22, 'aaa', 'a@a.a', 'c2a46cdc6e6db7b5ff7273ac3105eb07'),
(23, 'marco', 'aaa@a.a', 'c2a46cdc6e6db7b5ff7273ac3105eb07'),
(24, 'samuele', 'test@test.com', 'b9de07bd166968867ef9cf38b03b9d71'),
(26, 'marco', 'marco@marco.it', 'c2a46cdc6e6db7b5ff7273ac3105eb07'),
(27, 'admin', 'samu@test.com', '79a19f1dab1507e0efad9c0647c4960e'),
(28, 'webmaster', 'samutest2@test.test', 'acd4a33ec66cec04d236ba3f8fb47fb1');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `old_values`
--
ALTER TABLE `old_values`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sensor_id` (`sensor_id`);

--
-- Indici per le tabelle `sensors`
--
ALTER TABLE `sensors`
  ADD PRIMARY KEY (`id_sensor`);

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT per la tabella `old_values`
--
ALTER TABLE `old_values`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT per la tabella `sensors`
--
ALTER TABLE `sensors`
  MODIFY `id_sensor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT per la tabella `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
