-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 31 Mars 2015 à 00:31
-- Version du serveur :  5.6.21
-- Version de PHP :  5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `tip_nomenclature`
--

-- --------------------------------------------------------

--
-- Structure de la table `composes_inorganique`
--

CREATE TABLE IF NOT EXISTS `composes_inorganique` (
`id` int(11) NOT NULL,
  `formuleChimique` text NOT NULL,
  `nom` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `composes_inorganique`
--

INSERT INTO `composes_inorganique` (`id`, `formuleChimique`, `nom`) VALUES
(1, 'AcBr<sub>3</sub>', 'bromure d''actinium'),
(2, 'BBr<sub>3</sub>', 'tribromure de bore'),
(3, 'BaB<sub>6</sub>', 'borure de baryum'),
(4, 'C', 'carbone'),
(5, 'Ca(CN)<sub>2</sub>', 'cyanure de calcium'),
(6, 'DyCl<sub>2</sub>', 'chlorure de dysprosium(II)'),
(7, 'Er', 'erbium'),
(8, 'FNO<sub>3</sub>', 'nitrate de fluor'),
(9, 'FeCO<sub>3</sub>', 'carbonate de fer(II)'),
(10, 'GaI<sub>3</sub>', 'iodure de gallium(III)'),
(11, 'GeO<sub>2</sub>', 'dioxyde de germanium'),
(12, 'HNO<sub>3</sub>', 'acide nitrique'),
(13, 'H<sub>2</sub>SO<sub>4</sub>', 'acide sulfurique'),
(14, 'KCN', 'cyanure de potassium'),
(15, 'K<sub>2</sub>CO<sub>3</sub>', 'carbonate de potassium'),
(16, 'MgB<sub>2</sub>', 'diborure de magnésium'),
(17, 'NaCl', 'chlorure de sodium'),
(18, 'PBr<sub>3</sub>', 'tribromure de phosphore'),
(19, 'PbCO<sub>3</sub>', 'carbonate de plomb'),
(20, 'SO', 'monoxyde de soufre'),
(21, 'UCl<sub>5</sub>', 'chlorure d''uranium(V)'),
(22, 'VF<sub>2</sub>', 'fluorure de vanadium(II)');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `composes_inorganique`
--
ALTER TABLE `composes_inorganique`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `composes_inorganique`
--
ALTER TABLE `composes_inorganique`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
