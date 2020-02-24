-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 16 jan. 2020 à 20:09
-- Version du serveur :  5.7.26
-- Version de PHP : 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `testhallo`
--

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

CREATE TABLE `commandes` (
  `id_order` int(11) NOT NULL,
  `nom_client` varchar(50) NOT NULL,
  `prenom_client` varchar(50) NOT NULL,
  `mail_client` varchar(50) NOT NULL,
  `tel_client` int(50) NOT NULL,
  `addresse` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `zip` int(5) NOT NULL,
  `galette` varchar(50) NOT NULL,
  `boisson_qtt` int(10) NOT NULL,
  `boisson_nom` varchar(50) NOT NULL,
  `instr_commande` text NOT NULL,
  `time_commande` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `planning`
--

CREATE TABLE `planning` (
  `id_planning` int(50) NOT NULL,
  `jour` date NOT NULL,
  `heure` text NOT NULL,
  `statut` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `planning`
--

INSERT INTO `planning` (`id_planning`, `jour`, `heure`, `statut`) VALUES
(1, '2018-01-08', '14h', 'is-selected'),
(2, '2018-01-09', '14h', 'is-selected'),
(3, '2018-01-10', '14h', 'dispo'),
(4, '2018-01-11', '14h', 'dispo'),
(5, '2018-01-12', '14h', 'dispo'),
(6, '2018-01-08', '15h', 'dispo'),
(7, '2018-01-09', '15h', 'dispo'),
(8, '2018-01-10', '15h', 'is-selected'),
(9, '2018-01-11', '15h', 'dispo'),
(10, '2018-01-12', '15h', 'dispo'),
(11, '2018-01-08', '16h', 'dispo'),
(12, '2018-01-09', '16h', 'dispo'),
(13, '2018-01-10', '16h', 'is-selected'),
(14, '2018-01-11', '16h', 'dispo'),
(15, '2018-01-12', '16h', 'is-selected'),
(16, '2018-01-08', '17h', 'dispo'),
(17, '2018-01-09', '17h', 'dispo'),
(18, '2018-01-10', '17h', 'dispo'),
(19, '2018-01-11', '17h', 'is-selected'),
(20, '2018-01-12', '17h', 'is-selected'),
(21, '2018-01-08', '18h', 'dispo'),
(22, '2018-01-09', '18h', 'dispo'),
(23, '2018-01-10', '18h', 'is-selected'),
(24, '2018-01-11', '18h', 'is-selected'),
(25, '2018-01-12', '18h', 'is-selected'),
(26, '2018-01-15', '14h', 'dispo'),
(27, '2018-01-16', '14h', 'dispo'),
(28, '2018-01-17', '14h', 'is-selected'),
(29, '2018-01-18', '14h', 'dispo'),
(30, '2018-01-19', '14h', 'dispo'),
(31, '2018-01-15', '15h', 'dispo'),
(32, '2018-01-16', '15h', 'dispo'),
(33, '2018-01-17', '15h', 'dispo'),
(34, '2018-01-18', '15h', 'dispo'),
(35, '2018-01-19', '15h', 'dispo'),
(36, '2018-01-15', '16h', 'dispo'),
(37, '2018-01-16', '16h', 'dispo'),
(38, '2018-01-17', '16h', 'dispo'),
(39, '2018-01-18', '16h', 'dispo'),
(40, '2018-01-19', '16h', 'dispo'),
(41, '2018-01-15', '17h', 'dispo'),
(42, '2018-01-16', '17h', 'dispo'),
(43, '2018-01-17', '17h', 'dispo'),
(44, '2018-01-18', '17h', 'dispo'),
(45, '2018-01-19', '17h', 'dispo'),
(46, '2018-01-15', '18h', 'dispo'),
(47, '2018-01-16', '18h', 'dispo'),
(48, '2018-01-17', '18h', 'dispo'),
(49, '2018-01-18', '18h', 'dispo'),
(50, '2018-01-19', '18h', 'dispo'),
(51, '2018-01-22', '14h', 'dispo'),
(52, '2018-01-23', '14h', 'dispo'),
(53, '2018-01-24', '14h', 'dispo'),
(54, '2018-01-25', '14h', 'dispo'),
(55, '2018-01-26', '14h', 'dispo'),
(56, '2018-01-22', '15h', 'dispo'),
(57, '2018-01-23', '15h', 'dispo'),
(58, '2018-01-24', '15h', 'dispo'),
(59, '2018-01-25', '15h', 'dispo'),
(60, '2018-01-26', '15h', 'dispo'),
(61, '2018-01-22', '16h', 'dispo'),
(62, '2018-01-23', '16h', 'dispo'),
(63, '2018-01-24', '16h', 'dispo'),
(64, '2018-01-25', '16h', 'dispo'),
(65, '2018-01-26', '16h', 'dispo'),
(66, '2018-01-22', '17h', 'dispo'),
(67, '2018-01-23', '17h', 'dispo'),
(68, '2018-01-24', '17h', 'dispo'),
(69, '2018-01-25', '17h', 'dispo'),
(70, '2018-01-26', '17h', 'dispo'),
(71, '2018-01-22', '18h', 'dispo'),
(72, '2018-01-23', '18h', 'dispo'),
(73, '2018-01-24', '18h', 'dispo'),
(74, '2018-01-25', '18h', 'dispo'),
(75, '2018-01-26', '18h', 'dispo');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `time_request` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `prenom`, `nom`, `company`, `email`, `time_request`) VALUES
(2, 'malaspina', 'Marc-Antoine', 'Bourlinguez Podcast', 'marcanmalas@gmail.com', '2020-01-05 17:50:55');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`id_order`);

--
-- Index pour la table `planning`
--
ALTER TABLE `planning`
  ADD PRIMARY KEY (`id_planning`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commandes`
--
ALTER TABLE `commandes`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `planning`
--
ALTER TABLE `planning`
  MODIFY `id_planning` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
