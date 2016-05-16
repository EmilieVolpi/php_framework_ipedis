-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 16 Mai 2016 à 16:50
-- Version du serveur :  10.1.13-MariaDB
-- Version de PHP :  5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `frameworkipedis`
--

-- --------------------------------------------------------

--
-- Structure de la table `player`
--

CREATE TABLE `player` (
  `id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `ConnexionTime` datetime NOT NULL,
  `DeconnexionTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `player`
--

INSERT INTO `player` (`id`, `Name`, `Gender`, `ConnexionTime`, `DeconnexionTime`) VALUES
(1, 't', 'male', '0000-00-00 00:00:00', NULL),
(2, 'a', 'female', '2016-05-16 12:25:11', NULL),
(3, 'a', 'male', '2016-05-16 12:27:22', NULL),
(4, 'a', 'male', '2016-05-16 12:32:29', NULL),
(5, 'a', 'male', '2016-05-16 12:35:28', NULL),
(6, 'a', 'male', '2016-05-16 12:36:48', NULL),
(7, 'a', 'male', '2016-05-16 12:39:52', NULL),
(8, 'a', 'male', '2016-05-16 12:41:07', NULL),
(9, 'a', 'male', '2016-05-16 12:44:31', NULL),
(10, 'a', 'female', '2016-05-16 12:50:03', NULL),
(11, 'a', 'female', '2016-05-16 12:53:58', NULL),
(12, 'u', 'male', '2016-05-16 12:55:09', NULL),
(13, 'a', 'female', '2016-05-16 13:01:54', NULL),
(14, 'a', 'male', '2016-05-16 13:08:07', NULL),
(15, 'p', 'male', '2016-05-16 13:08:35', NULL),
(16, 'a', 'male', '2016-05-16 13:19:04', NULL),
(17, 'a', 'male', '2016-05-16 13:26:06', NULL),
(18, 'r', 'male', '2016-05-16 13:28:01', NULL),
(19, 'a', 'male', '2016-05-16 13:28:46', NULL),
(20, 'alex', 'female', '2016-05-16 13:40:15', NULL),
(21, 'a', 'male', '2016-05-16 14:18:13', NULL),
(22, 'a', 'male', '2016-05-16 14:24:15', NULL),
(23, 'a', 'male', '2016-05-16 14:25:44', NULL),
(24, 'a', 'male', '2016-05-16 14:30:23', NULL),
(25, 'a', 'male', '2016-05-16 14:32:01', NULL),
(42, 'a', 'male', '2016-05-16 15:02:06', NULL),
(43, 'a', 'male', '2016-05-16 15:03:20', NULL),
(44, 'a', 'male', '2016-05-16 15:04:05', NULL),
(45, 'a', 'male', '2016-05-16 15:06:06', NULL),
(46, 'a', 'male', '2016-05-16 15:06:33', NULL),
(47, 'a', 'male', '2016-05-16 15:07:25', NULL),
(48, 'a', 'male', '2016-05-16 15:07:49', NULL),
(49, 'a', 'male', '2016-05-16 15:08:35', NULL),
(50, 'a', 'male', '2016-05-16 15:11:30', NULL),
(51, 'a', 'male', '2016-05-16 15:58:37', NULL),
(52, 'a', 'male', '2016-05-16 15:59:17', NULL),
(53, 'a', 'male', '2016-05-16 16:01:15', NULL),
(54, 'a', 'male', '2016-05-16 16:13:30', NULL),
(55, 'a', 'male', '2016-05-16 16:28:24', NULL),
(56, 'a', 'male', '2016-05-16 16:28:45', NULL),
(57, 'a', 'male', '2016-05-16 16:29:18', NULL),
(58, 'a', 'male', '2016-05-16 16:30:21', NULL),
(59, 'a', 'male', '2016-05-16 16:31:41', NULL),
(60, 'a', 'male', '2016-05-16 16:35:37', NULL),
(61, 'Emilie', 'female', '2016-05-16 16:42:55', NULL),
(62, 'Emilie', 'female', '2016-05-16 16:44:57', NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `player`
--
ALTER TABLE `player`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
