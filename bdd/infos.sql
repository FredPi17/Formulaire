-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 22 Juin 2017 à 13:41
-- Version du serveur :  10.1.16-MariaDB
-- Version de PHP :  5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `sdc`
--

-- --------------------------------------------------------

--
-- Structure de la table `infos`
--

CREATE TABLE `infos` (
  `id` int(11) NOT NULL,
  `dateDebut` date NOT NULL,
  `dateFin` date NOT NULL,
  `intitule` varchar(255) COLLATE utf8_bin NOT NULL,
  `diplome` varchar(255) COLLATE utf8_bin NOT NULL,
  `calendrier` varchar(255) COLLATE utf8_bin NOT NULL,
  `tarifFormation` varchar(255) COLLATE utf8_bin NOT NULL,
  `coutFormation` varchar(10) COLLATE utf8_bin NOT NULL,
  `coutHoraire` varchar(10) COLLATE utf8_bin NOT NULL,
  `idFormation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `infos`
--

INSERT INTO `infos` (`id`, `dateDebut`, `dateFin`, `intitule`, `diplome`, `calendrier`, `tarifFormation`, `coutFormation`, `coutHoraire`, `idFormation`) VALUES
(1, '2017-05-10', '2017-06-10', 'BACHELOR 3 Responsable de Communication', 'Niveau II Responsable de Communication', '28 novembre 2017', '390', '8 000', '14,29', 1),
(2, '2017-05-10', '2017-06-10', 'BAC +4 / +5 Manager de la Communication Stratégique et Digitale', 'Niveau 1 Manager de la stratégie Commerciale ', '28 novembre 2017', '390', '18 000', '16,07', 2),
(3, '2017-05-10', '2017-06-10', 'BAC +5 Manager de la Communication Stratégique et Digitale', 'Niveau 1 Manager de la stratégie Commerciale', '28 novembre 2017', '390', '9 100', '18,57', 3);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `infos`
--
ALTER TABLE `infos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `infos`
--
ALTER TABLE `infos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
