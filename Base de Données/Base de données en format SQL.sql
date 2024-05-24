-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 24 mai 2024 à 12:39
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `galerieart`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin_data`
--

DROP TABLE IF EXISTS `admin_data`;
CREATE TABLE IF NOT EXISTS `admin_data` (
  `ID_admin` int NOT NULL AUTO_INCREMENT,
  `prenom_admin` varchar(50) NOT NULL,
  `nom_admin` varchar(50) NOT NULL,
  `username_admin` varchar(50) NOT NULL,
  `password_admin` varchar(255) NOT NULL,
  `data_utilisateur_id` int NOT NULL,
  PRIMARY KEY (`ID_admin`),
  KEY `data_utilisateur_id` (`data_utilisateur_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `role`) VALUES
(5, 'Darkhell', '1234', '0'),
(6, 'gopamuk', 'Pa$$w0rd!', '0'),
(7, 'mawomuquk', 'Pa$$w0rd!', '0'),
(8, 'myditoki', 'Pa$$w0rd!', '0'),
(9, 'xuvox', 'Pa$$w0rd!', '0'),
(10, 'tokef', 'Pa$$w0rd!', '0'),
(11, 'zetywece', 'Pa$$w0rd!', '0'),
(12, 'vyloruje', 'Pa$$w0rd!', '0'),
(13, 'didinujel', 'Pa$$w0rd!', '0'),
(14, 'xeloco', 'Pa$$w0rd!', '0'),
(15, 'chrystal002', 'vélo123', '0');

-- --------------------------------------------------------

--
-- Structure de la table `user_data`
--

DROP TABLE IF EXISTS `user_data`;
CREATE TABLE IF NOT EXISTS `user_data` (
  `user_data_id` int NOT NULL AUTO_INCREMENT,
  `prenom_user` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nom_user` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`user_data_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `user_data`
--

INSERT INTO `user_data` (`user_data_id`, `prenom_user`, `nom_user`) VALUES
(5, 'Claude', 'peltier'),
(6, 'Architecto est comm', 'sequi facere perspic'),
(7, 'Sed omnis ullam quis', 'quia eos quia id quo'),
(8, 'Velit id enim dolo', 'quas numquam volupta'),
(9, 'Expedita rerum quis', 'do eu quidem sed lab'),
(10, 'Corporis ut ipsa no', 'velit aspernatur lib'),
(11, 'Accusamus aliquid ea', 'qui eius ut tempor m'),
(12, 'Proident et harum v', 'mollitia blanditiis'),
(13, 'Do sint est sed inci', 'sit ab non deserunt'),
(14, 'Fugit praesentium p', 'non sint laborum dol'),
(15, 'chrystal', 'corman');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `admin_data`
--
ALTER TABLE `admin_data`
  ADD CONSTRAINT `admin_data_ibfk_1` FOREIGN KEY (`data_utilisateur_id`) REFERENCES `user_data` (`user_data_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
