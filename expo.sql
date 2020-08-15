-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 15 août 2020 à 22:34
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `expo`
--

-- --------------------------------------------------------

--
-- Structure de la table `annuaire`
--

CREATE TABLE `annuaire` (
  `idannuaire` int(10) UNSIGNED NOT NULL,
  `nom` varchar(45) NOT NULL,
  `prenom` varchar(45) NOT NULL,
  `telephone` int(11) NOT NULL,
  `email` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `annuaire`
--

INSERT INTO `annuaire` (`idannuaire`, `nom`, `prenom`, `telephone`, `email`) VALUES
(1, 'Khalid', 'Janily', 645379230, 'khalidd@hotmail.com'),
(2, 'Aouatif', 'Barkaty', 674839242, 'Barkayiaf@hotmail.com'),
(3, 'Horria', 'Kalili', 674632819, 'Kalilhor@gmail.com'),
(4, 'Hocain', 'Jelony', 644457390, 'houc77@gmail.com'),
(5, 'Lamiae', 'Loubany', 632168180, 'lamiae44lob@gmail.com'),
(6, 'Touille', 'Sacha', 645678967, 'Sacha.Touille@gmail.com'),
(7, 'Omayma', 'Alami', 645738900, 'omaalami@gmail.com'),
(8, 'Noufel', 'Alainy', 688773065, 'Alainynof@gmail.com'),
(9, 'Chouaib', 'Jirary', 648877306, 'Jirarychoub@gmail.com'),
(10, 'Karim', 'Bestaoui', 643738605, 'bestaoukarir@gmail.com'),
(11, 'Loubna', 'Slimi', 632167890, 'loubnaslim8lb@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `annuaire_has_societes`
--

CREATE TABLE `annuaire_has_societes` (
  `annuaire_idannuaire` int(10) UNSIGNED NOT NULL,
  `societes_idsocietes` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `annuaire_has_societes`
--

INSERT INTO `annuaire_has_societes` (`annuaire_idannuaire`, `societes_idsocietes`) VALUES
(1, 9),
(2, 6),
(3, 5),
(4, 8),
(5, 4),
(6, 3),
(7, 1),
(8, 10),
(9, 7),
(10, 2);

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

CREATE TABLE `facture` (
  `idfacture` int(10) UNSIGNED NOT NULL,
  `numero` int(11) NOT NULL,
  `date_facture` date NOT NULL,
  `motif_prestation` varchar(45) NOT NULL,
  `societes_idsocietes` int(10) UNSIGNED NOT NULL,
  `annuaire_idannuaire` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `facture`
--

INSERT INTO `facture` (`idfacture`, `numero`, `date_facture`, `motif_prestation`, `societes_idsocietes`, `annuaire_idannuaire`) VALUES
(1, 1, '2018-03-23', 'chauffage', 9, 1),
(2, 2, '2018-04-18', 'téléphone', 6, 2),
(3, 3, '2018-05-06', 'électricité', 5, 3),
(4, 4, '2018-06-15', 'eau', 8, 4),
(5, 5, '2018-07-23', 'centre équestre', 4, 5),
(6, 6, '2018-08-18', 'gaz', 3, 6),
(7, 7, '2018-08-19', 'Restaurant', 1, 7),
(8, 8, '2018-08-21', 'vente', 10, 8),
(9, 9, '2018-08-23', 'boucherie', 7, 9);

-- --------------------------------------------------------

--
-- Structure de la table `societes`
--

CREATE TABLE `societes` (
  `idsocietes` int(10) UNSIGNED NOT NULL,
  `nom_societe` varchar(45) NOT NULL,
  `adresse` varchar(60) NOT NULL,
  `pays` varchar(45) NOT NULL,
  `telephone_societe` bigint(18) NOT NULL,
  `num_tva` bigint(18) UNSIGNED NOT NULL,
  `type_idtype` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `societes`
--

INSERT INTO `societes` (`idsocietes`, `nom_societe`, `adresse`, `pays`, `telephone_societe`, `num_tva`, `type_idtype`) VALUES
(1, 'alliance marocmaroc', 'IMMEUBLE ZENITH II, LOTISSEMENT ATTAOUFIK Casablanca', 'maroc', 522731789, 8000000003, 2),
(2, 'maroc chrono', 'Km 3,500 Angle Rue Rif Et Route Des Zaers, Souissi - Souissi', 'Maroc', 545697489, 909444090, 2),
(3, 'maroc conseil', 'LOT 102B/2 ZONE FRANCHE D\'EXPORTATION Rabat', 'France', 7784789789789, 333033303, 1),
(4, 'Ponet Academie', 'Avenue du Brise lame 38, 3615 Outsiplou', 'Maroc', 6969696969, 422731789, 2),
(5, 'Rowenta', 'Boulvard du Bon Air 23, 2124320 Guangzhou', 'Chine', 100010101, 233222333223, 1),
(6, 'Telecon', 'Rue des charmes 23, 76533 Paris', 'France', 2346895380, 5353853773, 1),
(7, 'Chonet', 'Rue de la truie qui file 08, 72100 Le Mans', 'Maroc', 6868686868, 468287878, 2),
(8, 'MAGHREB STEEL', 'Rue du cul du putois 03, 39230 Mantry', 'Maroc', 37303730373, 730707073, 1),
(9, 'LABEL\'VIE', 'Rue de l’enfer 666, 63450 Saint-Saturnin', 'France', 666666666, 136667777777, 1),
(10, 'Boule d\'or', 'Rue des Deux-Boules 08, 75000 Paris', 'France', 8800880000, 380000380, 2);

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `idtype` int(10) UNSIGNED NOT NULL,
  `type` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `type`
--

INSERT INTO `type` (`idtype`, `type`) VALUES
(1, 'fournisseur'),
(2, 'client');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(60) NOT NULL,
  `user_type` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `username`, `password`, `user_type`) VALUES
(1, 'J-C', '9770d1c99cd356280d7bb78b97bdbe4bf25ff1da', 'godmode'),
(2, 'Mumu', 'f2ff241eac83db641cadb1c8af3b0d8ca9fa7160', 'modomode');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `annuaire`
--
ALTER TABLE `annuaire`
  ADD PRIMARY KEY (`idannuaire`);

--
-- Index pour la table `annuaire_has_societes`
--
ALTER TABLE `annuaire_has_societes`
  ADD PRIMARY KEY (`annuaire_idannuaire`,`societes_idsocietes`),
  ADD KEY `fk_annuaire_has_societes_societes1_idx` (`societes_idsocietes`),
  ADD KEY `fk_annuaire_has_societes_annuaire1_idx` (`annuaire_idannuaire`);

--
-- Index pour la table `facture`
--
ALTER TABLE `facture`
  ADD PRIMARY KEY (`idfacture`),
  ADD KEY `fk_facture_societes1_idx` (`societes_idsocietes`),
  ADD KEY `fk_facture_annuaire1_idx` (`annuaire_idannuaire`);

--
-- Index pour la table `societes`
--
ALTER TABLE `societes`
  ADD PRIMARY KEY (`idsocietes`),
  ADD KEY `fk_societes_type1_idx` (`type_idtype`);

--
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`idtype`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `annuaire`
--
ALTER TABLE `annuaire`
  MODIFY `idannuaire` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `facture`
--
ALTER TABLE `facture`
  MODIFY `idfacture` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `societes`
--
ALTER TABLE `societes`
  MODIFY `idsocietes` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `type`
--
ALTER TABLE `type`
  MODIFY `idtype` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `annuaire_has_societes`
--
ALTER TABLE `annuaire_has_societes`
  ADD CONSTRAINT `fk_annuaire_has_societes_annuaire1` FOREIGN KEY (`annuaire_idannuaire`) REFERENCES `annuaire` (`idannuaire`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_annuaire_has_societes_societes1` FOREIGN KEY (`societes_idsocietes`) REFERENCES `societes` (`idsocietes`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `facture`
--
ALTER TABLE `facture`
  ADD CONSTRAINT `fk_facture_annuaire1` FOREIGN KEY (`annuaire_idannuaire`) REFERENCES `annuaire` (`idannuaire`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_facture_societes1` FOREIGN KEY (`societes_idsocietes`) REFERENCES `societes` (`idsocietes`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
