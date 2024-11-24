-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 25 nov. 2024 à 00:25
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bd`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id_comment` int(11) NOT NULL,
  `commentaire` text DEFAULT NULL,
  `datecommenataire` datetime DEFAULT current_timestamp(),
  `note` int(11) DEFAULT NULL,
  `id_vehicule` int(11) NOT NULL,
  `id_personne` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE `personne` (
  `id_personne` int(11) NOT NULL,
  `civilite` varchar(25) DEFAULT NULL,
  `prenom` varchar(25) DEFAULT NULL,
  `nom` varchar(25) DEFAULT NULL,
  `login` varchar(25) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `role` varchar(15) DEFAULT 'CLIENT',
  `date_inscription` datetime DEFAULT current_timestamp(),
  `tel` varchar(20) DEFAULT NULL,
  `mdp` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`id_personne`, `civilite`, `prenom`, `nom`, `login`, `email`, `role`, `date_inscription`, `tel`, `mdp`) VALUES
(2, 'Mme', 'Client', 'Client', 'Client', '', '', '2024-11-15 16:58:13', '0987654321', '$2y$10$eK0mS0JmhnEB9GnC9vyIh.EO.7MIrbvNy7sTlPj.vJFYH6ZT9X9Cm'),
(4, 'Mr', 'Admin', 'ADMIN', 'Admin', '', '', '2024-11-24 14:33:28', '0887654321', '$2y$10$G0zcG4g2.FcvFbuJ5Z67SupO4qrETlVDdHufdd9CJjE84r.XEXzFK'),
(7, 'Mr', 'Test1', 'TEST1', 'Test', 'test@test.com', 'Client', '2024-11-24 23:48:37', '0230405060', '$2y$10$OFfx1Dr.vuzKTb/OGWdVJ.9z.qt93xjK4ubNdfV4NGwhVEBgmjrj.'),
(9, 'Mme', 'Test2', 'TEST2', 'TESTT', 'test2@test2.com', 'Client', '2024-11-24 23:49:39', '0987654323', '$2y$10$sEM9KgWZ54zv7jbK1UOVGeWW9ZwAcEJuy7R4CMywsa85uv6Z1uNVW');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id_reservation` int(11) NOT NULL,
  `date_reservation` datetime DEFAULT current_timestamp(),
  `date_debut` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  `id_vehicule` int(11) NOT NULL,
  `id_personne` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id_reservation`, `date_reservation`, `date_debut`, `date_fin`, `id_vehicule`, `id_personne`) VALUES
(1, '2024-11-25 00:17:38', '2024-11-27', '2024-11-30', 26, 9);

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

CREATE TABLE `vehicule` (
  `id_vehicule` int(11) NOT NULL,
  `marque` varchar(25) DEFAULT NULL,
  `modele` varchar(25) DEFAULT NULL,
  `matricule` varchar(25) DEFAULT NULL,
  `prix_journalier` decimal(7,2) DEFAULT NULL,
  `type_vehicule` varchar(25) DEFAULT NULL,
  `statut_dispo` int(1) DEFAULT 1,
  `photo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `vehicule`
--

INSERT INTO `vehicule` (`id_vehicule`, `marque`, `modele`, `matricule`, `prix_journalier`, `type_vehicule`, `statut_dispo`, `photo`) VALUES
(22, 'BMW', '2021', '300DQZD', 300.00, 'Voiture', 1, 'bmw.jpeg'),
(23, 'Toyota', '2021', 'QDQZDQZZZ', 300.00, 'Camion', 1, 'ToyotaCamion.jpeg'),
(26, 'Toyota', '2022', 'QZQZJKDQN', 100.00, 'Voiture', 1, 'Toyota.jpeg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `id_vehicule` (`id_vehicule`),
  ADD KEY `id_personne` (`id_personne`);

--
-- Index pour la table `personne`
--
ALTER TABLE `personne`
  ADD PRIMARY KEY (`id_personne`),
  ADD UNIQUE KEY `login` (`login`),
  ADD UNIQUE KEY `tel` (`tel`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id_reservation`),
  ADD KEY `id_vehicule` (`id_vehicule`),
  ADD KEY `id_personne` (`id_personne`);

--
-- Index pour la table `vehicule`
--
ALTER TABLE `vehicule`
  ADD PRIMARY KEY (`id_vehicule`),
  ADD UNIQUE KEY `matricule` (`matricule`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `personne`
--
ALTER TABLE `personne`
  MODIFY `id_personne` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id_reservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `vehicule`
--
ALTER TABLE `vehicule`
  MODIFY `id_vehicule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `commentaire_ibfk_1` FOREIGN KEY (`id_vehicule`) REFERENCES `vehicule` (`id_vehicule`),
  ADD CONSTRAINT `commentaire_ibfk_2` FOREIGN KEY (`id_personne`) REFERENCES `personne` (`id_personne`);

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`id_vehicule`) REFERENCES `vehicule` (`id_vehicule`),
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`id_personne`) REFERENCES `personne` (`id_personne`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
