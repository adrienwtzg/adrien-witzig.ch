-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 29 avr. 2025 à 21:50
-- Version du serveur :  5.7.17
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `fd2`
--

-- --------------------------------------------------------

--
-- Structure de la table `budget`
--

CREATE TABLE `budget` (
  `idPlanning` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `idCategory` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Déchargement des données de la table `budget`
--

INSERT INTO `budget` (`idPlanning`, `year`, `month`, `amount`, `idCategory`) VALUES
(1, 2025, 1, 1000, 2),
(2, 2025, 2, 2000, 3),
(3, 2025, 9, 715, 5);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `idCategory` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `type` enum('Income','Expenses','Savings','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`idCategory`, `name`, `type`) VALUES
(1, 'Loyer', 'Expenses'),
(2, 'Tati', 'Income'),
(3, 'Salaire (net)', 'Income'),
(4, 'Courses', 'Expenses'),
(5, 'Impôts', 'Savings'),
(6, 'Vacances', 'Savings');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `budget`
--
ALTER TABLE `budget`
  ADD PRIMARY KEY (`idPlanning`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`idCategory`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `budget`
--
ALTER TABLE `budget`
  MODIFY `idPlanning` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `idCategory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
