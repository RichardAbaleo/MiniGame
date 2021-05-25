-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 
-- Généré le : mar. 25 mai 2021 à 05:06
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `minigame`
--

-- --------------------------------------------------------

--
-- Structure de la table `data`
--

DROP TABLE IF EXISTS `data`;
CREATE TABLE IF NOT EXISTS `data` (
  `username` varchar(10) NOT NULL,
  `record` int(100) NOT NULL DEFAULT '0',
  `pass` varchar(20) NOT NULL DEFAULT 'azerty'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `data`
--

INSERT INTO `data` (`username`, `record`, `pass`) VALUES
('Pipoule', 28, 'azerty'),
('Guillaume', 12, 'azeaze'),
('Vincent', 11, 'azeaze'),
('Philippe', 10, 'azeaze'),
('Léo', 9, 'azeaze'),
('Anis', 8, 'azeaze'),
('Robert', 7, 'azeaze'),
('Michel', 6, 'azeaze'),
('HIHIHIH', 5, 'azeaze'),
('Pixel', 4, 'azeaze'),
('AnisLeBG', 0, 'azerty');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
