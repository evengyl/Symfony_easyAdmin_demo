-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 19 mai 2021 à 10:43
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `test`;

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20210409133914', '2021-04-09 15:39:26', 276),
('DoctrineMigrations\\Version20210409145025', '2021-04-09 16:51:05', 204);

-- --------------------------------------------------------

--
-- Structure de la table `dresseurs`
--

DROP TABLE IF EXISTS `dresseurs`;
CREATE TABLE `dresseurs` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `dresseurs`
--

INSERT INTO `dresseurs` (`id`, `name`) VALUES
(1, 'sacha'),
(2, 'ondine');

-- --------------------------------------------------------

--
-- Structure de la table `pokemons`
--

DROP TABLE IF EXISTS `pokemons`;
CREATE TABLE `pokemons` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `pokemons`
--

INSERT INTO `pokemons` (`id`, `name`) VALUES
(1, 'Bulbizarrereererrer'),
(3, 'Herbizarre'),
(4, 'Salamèche'),
(5, 'Pikachu'),
(6, 'Mew');

-- --------------------------------------------------------

--
-- Structure de la table `pokemons_dresseurs`
--

DROP TABLE IF EXISTS `pokemons_dresseurs`;
CREATE TABLE `pokemons_dresseurs` (
  `pokemons_id` int(11) NOT NULL,
  `dresseurs_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `pokemons_dresseurs`
--

INSERT INTO `pokemons_dresseurs` (`pokemons_id`, `dresseurs_id`) VALUES
(1, 2),
(3, 1);

-- --------------------------------------------------------

--
-- Structure de la table `pokemons_types`
--

DROP TABLE IF EXISTS `pokemons_types`;
CREATE TABLE `pokemons_types` (
  `pokemons_id` int(11) NOT NULL,
  `types_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `pokemons_types`
--

INSERT INTO `pokemons_types` (`pokemons_id`, `types_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4);

-- --------------------------------------------------------

--
-- Structure de la table `types`
--

DROP TABLE IF EXISTS `types`;
CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `types`
--

INSERT INTO `types` (`id`, `name`) VALUES
(1, 'Feu'),
(2, 'Plante'),
(3, 'Psy'),
(4, 'Electrique');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `dresseurs`
--
ALTER TABLE `dresseurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pokemons`
--
ALTER TABLE `pokemons`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pokemons_dresseurs`
--
ALTER TABLE `pokemons_dresseurs`
  ADD PRIMARY KEY (`pokemons_id`,`dresseurs_id`),
  ADD KEY `IDX_7A5892BB263F4792` (`pokemons_id`),
  ADD KEY `IDX_7A5892BBCB0983B2` (`dresseurs_id`);

--
-- Index pour la table `pokemons_types`
--
ALTER TABLE `pokemons_types`
  ADD PRIMARY KEY (`pokemons_id`,`types_id`),
  ADD KEY `IDX_B7FC4A10263F4792` (`pokemons_id`),
  ADD KEY `IDX_B7FC4A108EB23357` (`types_id`);

--
-- Index pour la table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `dresseurs`
--
ALTER TABLE `dresseurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `pokemons`
--
ALTER TABLE `pokemons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `pokemons_dresseurs`
--
ALTER TABLE `pokemons_dresseurs`
  ADD CONSTRAINT `FK_7A5892BB263F4792` FOREIGN KEY (`pokemons_id`) REFERENCES `pokemons` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_7A5892BBCB0983B2` FOREIGN KEY (`dresseurs_id`) REFERENCES `dresseurs` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `pokemons_types`
--
ALTER TABLE `pokemons_types`
  ADD CONSTRAINT `FK_B7FC4A10263F4792` FOREIGN KEY (`pokemons_id`) REFERENCES `pokemons` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_B7FC4A108EB23357` FOREIGN KEY (`types_id`) REFERENCES `types` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
