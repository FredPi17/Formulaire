-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 17 Février 2018 à 15:55
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
-- Structure de la table `absences`
--

CREATE TABLE `absences` (
  `id` int(11) NOT NULL,
  `numContrat` varchar(11) COLLATE utf8_bin NOT NULL,
  `adresse` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `fonction` varchar(255) COLLATE utf8_bin NOT NULL,
  `nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(255) COLLATE utf8_bin NOT NULL,
  `telephone` varchar(255) COLLATE utf8_bin NOT NULL,
  `titre` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `administration`
--

CREATE TABLE `administration` (
  `id` int(11) NOT NULL,
  `numContrat` varchar(11) COLLATE utf8_bin NOT NULL,
  `adresse` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `fonction` varchar(255) COLLATE utf8_bin NOT NULL,
  `nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(255) COLLATE utf8_bin NOT NULL,
  `telephone` varchar(255) COLLATE utf8_bin NOT NULL,
  `titre` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `apprenant`
--

CREATE TABLE `apprenant` (
  `id` int(11) NOT NULL,
  `numContrat` varchar(11) COLLATE utf8_bin NOT NULL,
  `nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(255) COLLATE utf8_bin NOT NULL,
  `titre` varchar(255) COLLATE utf8_bin NOT NULL,
  `formation` varchar(255) COLLATE utf8_bin NOT NULL,
  `nomFormation` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `contratpro`
--

CREATE TABLE `contratpro` (
  `id` int(11) NOT NULL,
  `numContrat` int(11) NOT NULL,
  `contrat` varchar(255) COLLATE utf8_bin NOT NULL,
  `dateDebut` datetime NOT NULL,
  `dateFin` datetime NOT NULL,
  `dureeHebdo` varchar(255) COLLATE utf8_bin NOT NULL,
  `intitule` varchar(255) COLLATE utf8_bin NOT NULL,
  `remuneration` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `execution`
--

CREATE TABLE `execution` (
  `id` int(11) NOT NULL,
  `numContrat` varchar(11) COLLATE utf8_bin NOT NULL,
  `adresse` varchar(255) COLLATE utf8_bin NOT NULL,
  `cp` int(11) NOT NULL,
  `effectif` int(11) NOT NULL,
  `NAF` varchar(255) COLLATE utf8_bin NOT NULL,
  `raisonSociale` varchar(255) COLLATE utf8_bin NOT NULL,
  `secteurActivite` varchar(255) COLLATE utf8_bin NOT NULL,
  `SIRET` varchar(255) COLLATE utf8_bin NOT NULL,
  `telephone` varchar(255) COLLATE utf8_bin NOT NULL,
  `ville` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `facturation`
--

CREATE TABLE `facturation` (
  `id` int(11) NOT NULL,
  `numContrat` int(11) NOT NULL,
  `adresse` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `fonction` varchar(255) COLLATE utf8_bin NOT NULL,
  `nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(255) COLLATE utf8_bin NOT NULL,
  `telephone` varchar(255) COLLATE utf8_bin NOT NULL,
  `titre` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `financement`
--

CREATE TABLE `financement` (
  `id` int(11) NOT NULL,
  `numContrat` int(11) NOT NULL,
  `adresse1` varchar(255) COLLATE utf8_bin NOT NULL,
  `adresse2` varchar(255) COLLATE utf8_bin NOT NULL,
  `commentaire` varchar(255) COLLATE utf8_bin NOT NULL,
  `cp` int(11) NOT NULL,
  `ville` varchar(255) COLLATE utf8_bin NOT NULL,
  `ocpa` varchar(255) COLLATE utf8_bin NOT NULL,
  `subrogation` varchar(255) COLLATE utf8_bin NOT NULL,
  `formation` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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

-- --------------------------------------------------------

--
-- Structure de la table `signataire`
--

CREATE TABLE `signataire` (
  `id` int(11) NOT NULL,
  `numContrat` int(11) NOT NULL,
  `adresse` varchar(255) COLLATE utf8_bin NOT NULL,
  `cp` int(11) NOT NULL,
  `effectif` int(11) NOT NULL,
  `NAF` varchar(255) COLLATE utf8_bin NOT NULL,
  `raisonSociale` varchar(255) COLLATE utf8_bin NOT NULL,
  `secteurActivite` varchar(255) COLLATE utf8_bin NOT NULL,
  `SIRET` int(11) NOT NULL,
  `telephone` varchar(255) COLLATE utf8_bin NOT NULL,
  `ville` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `signatairecontrat`
--

CREATE TABLE `signatairecontrat` (
  `id` int(11) NOT NULL,
  `numContrat` int(11) NOT NULL,
  `adresse` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `fonction` varchar(255) COLLATE utf8_bin NOT NULL,
  `nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(255) COLLATE utf8_bin NOT NULL,
  `telephone` varchar(255) COLLATE utf8_bin NOT NULL,
  `titre` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `taxeapprentissage`
--

CREATE TABLE `taxeapprentissage` (
  `id` int(11) NOT NULL,
  `numContrat` int(11) NOT NULL,
  `adresse` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `fonction` varchar(255) COLLATE utf8_bin NOT NULL,
  `nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(255) COLLATE utf8_bin NOT NULL,
  `telephone` varchar(255) COLLATE utf8_bin NOT NULL,
  `titre` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `tuteur`
--

CREATE TABLE `tuteur` (
  `id` int(11) NOT NULL,
  `numContrat` int(11) NOT NULL,
  `adresse` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `fonction` varchar(255) COLLATE utf8_bin NOT NULL,
  `nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(255) COLLATE utf8_bin NOT NULL,
  `telephone` varchar(255) COLLATE utf8_bin NOT NULL,
  `titre` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `absences`
--
ALTER TABLE `absences`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `numContrat` (`numContrat`);

--
-- Index pour la table `administration`
--
ALTER TABLE `administration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `numContrat` (`numContrat`);

--
-- Index pour la table `apprenant`
--
ALTER TABLE `apprenant`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `numContrat` (`numContrat`);

--
-- Index pour la table `contratpro`
--
ALTER TABLE `contratpro`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `numContrat` (`numContrat`);

--
-- Index pour la table `execution`
--
ALTER TABLE `execution`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `numContrat` (`numContrat`);

--
-- Index pour la table `facturation`
--
ALTER TABLE `facturation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `numContrat` (`numContrat`);

--
-- Index pour la table `financement`
--
ALTER TABLE `financement`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `numContrat` (`numContrat`);

--
-- Index pour la table `infos`
--
ALTER TABLE `infos`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `signataire`
--
ALTER TABLE `signataire`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `numContrat` (`numContrat`);

--
-- Index pour la table `signatairecontrat`
--
ALTER TABLE `signatairecontrat`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `numContrat` (`numContrat`);

--
-- Index pour la table `taxeapprentissage`
--
ALTER TABLE `taxeapprentissage`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `numContrat` (`numContrat`);

--
-- Index pour la table `tuteur`
--
ALTER TABLE `tuteur`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `numContrat` (`numContrat`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `absences`
--
ALTER TABLE `absences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `administration`
--
ALTER TABLE `administration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `apprenant`
--
ALTER TABLE `apprenant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `contratpro`
--
ALTER TABLE `contratpro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `execution`
--
ALTER TABLE `execution`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `facturation`
--
ALTER TABLE `facturation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `financement`
--
ALTER TABLE `financement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `infos`
--
ALTER TABLE `infos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `signataire`
--
ALTER TABLE `signataire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `signatairecontrat`
--
ALTER TABLE `signatairecontrat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `taxeapprentissage`
--
ALTER TABLE `taxeapprentissage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `tuteur`
--
ALTER TABLE `tuteur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `absences`
--
ALTER TABLE `absences`
  ADD CONSTRAINT `absences_ibfk_1` FOREIGN KEY (`numContrat`) REFERENCES `apprenant` (`numContrat`) ON DELETE CASCADE;

--
-- Contraintes pour la table `administration`
--
ALTER TABLE `administration`
  ADD CONSTRAINT `administration_ibfk_1` FOREIGN KEY (`numContrat`) REFERENCES `execution` (`numContrat`) ON DELETE CASCADE;

--
-- Contraintes pour la table `facturation`
--
ALTER TABLE `facturation`
  ADD CONSTRAINT `facturation_ibfk_1` FOREIGN KEY (`numContrat`) REFERENCES `signataire` (`numContrat`) ON DELETE CASCADE;

--
-- Contraintes pour la table `financement`
--
ALTER TABLE `financement`
  ADD CONSTRAINT `financement_ibfk_1` FOREIGN KEY (`numContrat`) REFERENCES `signatairecontrat` (`numContrat`) ON DELETE CASCADE;

--
-- Contraintes pour la table `signatairecontrat`
--
ALTER TABLE `signatairecontrat`
  ADD CONSTRAINT `signatairecontrat_ibfk_1` FOREIGN KEY (`numContrat`) REFERENCES `tuteur` (`numContrat`) ON DELETE CASCADE;

--
-- Contraintes pour la table `taxeapprentissage`
--
ALTER TABLE `taxeapprentissage`
  ADD CONSTRAINT `taxeapprentissage_ibfk_1` FOREIGN KEY (`numContrat`) REFERENCES `financement` (`numContrat`) ON DELETE CASCADE;

--
-- Contraintes pour la table `tuteur`
--
ALTER TABLE `tuteur`
  ADD CONSTRAINT `tuteur_ibfk_1` FOREIGN KEY (`numContrat`) REFERENCES `contratpro` (`numContrat`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
