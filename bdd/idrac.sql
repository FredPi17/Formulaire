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
-- Base de données :  `idrac`
--

-- --------------------------------------------------------

--
-- Structure de la table `absences`
--

CREATE TABLE `absences` (
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
-- Structure de la table `administration`
--

CREATE TABLE `administration` (
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
-- Structure de la table `apprenant`
--

CREATE TABLE `apprenant` (
  `id` int(11) NOT NULL,
  `numContrat` int(11) NOT NULL,
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
  `numContrat` int(11) NOT NULL,
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
(1, '2017-05-10', '2017-06-10', 'BACHELOR IDRAC', 'Niveau II Responsable du marketing et du développement commercial ', '28 novembre 2017', '390', '8 000', '14,29', 1),
(2, '2017-05-10', '2017-06-10', 'CYCLE LES EXPERTS BAC +4/5', 'Niveau 1 Manager de la stratégie Commerciale ', '28 novembre 2017', '390', '18 000', '16,07', 2);

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

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `IDutilisateur` int(11) NOT NULL,
  `MDP` varchar(50) COLLATE utf8_bin NOT NULL,
  `Mail` varchar(100) COLLATE utf8_bin NOT NULL,
  `Nom` varchar(100) COLLATE utf8_bin NOT NULL,
  `Prenom` varchar(100) COLLATE utf8_bin NOT NULL,
  `Admin` tinyint(1) NOT NULL DEFAULT '0',
  `image` varchar(150) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`IDutilisateur`, `MDP`, `Mail`, `Nom`, `Prenom`, `Admin`, `image`) VALUES
(2, 'e0440b0c80321f60ca3d96ae6ee3075b5e26c436', 'fredericpinaud@epsi.fr', 'Pinaud', 'Frederic', 1, 'image/fred.jpg'),
(14, 'de947fa5b2b9fc00c510c987fe3c80d61b3dda93', 'lorisrabatel@epsi.fr', 'rabatel', 'loris', 1, NULL),
(15, 'd4c3eddbc828b7baae79008e0a70bb06c41073ec', 'hugolausenazpire@epsi.fr', 'Lausenaz Pire', 'Hugo', 1, NULL),
(16, '4fe0807b1736baf0cf06f21641ba4d8826a0b09a', 'aureliebuillet@epsi.fr', 'Buillet', 'Aurelie', 1, NULL),
(17, '71da63337af87c4416f4398efcbe8b5a5570ab48', 'josephtabailloux@epsi.fr', 'Tabailloux', 'Joseph', 1, NULL),
(18, 'test', 'test@test.fr', 'pinaud', 'fred', 1, NULL),
(19, 'test', 'test@test.fr', 'pinaud', 'fred', 1, NULL);

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
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`IDutilisateur`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `IDutilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
