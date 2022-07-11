-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 11 juil. 2022 à 21:50
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `crud_gestion`
--

-- --------------------------------------------------------

--
-- Structure de la table `agent`
--

CREATE TABLE `agent` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `Matricule_Agent` varchar(255) NOT NULL,
  ` Commentaire` text NOT NULL,
  `service` varchar(255) NOT NULL,
  `Objet_Demande` varchar(255) NOT NULL,
  `Date_depot` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `agent`
--

INSERT INTO `agent` (`id`, `nom`, `prenom`, `Matricule_Agent`, ` Commentaire`, `service`, `Objet_Demande`, `Date_depot`) VALUES
(0, 'Koffi', 'Willy Ange', 'koffi225@gmail.com', '0707245687', 'DSI', '0000', '2022-07-11'),
(1, 'Amelan', 'Patricia', 'Amelan0@gmail.com', '0102804352', 'DMG', '2525', '2022-07-11');

-- --------------------------------------------------------

--
-- Structure de la table `demande`
--

CREATE TABLE `demande` (
  `id` int(11) NOT NULL,
  `NumTicket` varchar(255) NOT NULL,
  `Datedemande` date NOT NULL,
  `theme` varchar(255) NOT NULL,
  `objet` varchar(255) NOT NULL,
  `statut` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `demande`
--

INSERT INTO `demande` (`id`, `NumTicket`, `Datedemande`, `theme`, `objet`, `statut`) VALUES
(1, '01', '2022-07-20', 'Evaluation des performances', 'Traitement', 'En cours'),
(2, '02', '2022-07-05', 'PEC-MER', 'A traiter', 'En cours');

-- --------------------------------------------------------

--
-- Structure de la table `enregistrement`
--

CREATE TABLE `enregistrement` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenoms` varchar(255) NOT NULL,
  `matricule_agent` varchar(255) NOT NULL,
  `date_demande` date NOT NULL,
  `objet_demande` varchar(255) NOT NULL,
  `commentaire` varchar(255) NOT NULL,
  `service_agent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `enregistrement`
--

INSERT INTO `enregistrement` (`id`, `nom`, `prenoms`, `matricule_agent`, `date_demande`, `objet_demande`, `commentaire`, `service_agent`) VALUES
(1, 'koffi willy Ange', '', 'Evaluation des performances', '0000-00-00', '', '...', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `demande`
--
ALTER TABLE `demande`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `enregistrement`
--
ALTER TABLE `enregistrement`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `demande`
--
ALTER TABLE `demande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `enregistrement`
--
ALTER TABLE `enregistrement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
