-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 01 Décembre 2022 à 10:55
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `grpc6`
--

-- --------------------------------------------------------

--
-- Structure de la table `experiences`
--

CREATE TABLE `experiences` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `experiences`
--

INSERT INTO `experiences` (`id`, `user_id`, `title`, `content`, `start_date`, `end_date`) VALUES
(1, 5, 'Travail saisonnier dans la restauration au poste de plongeur', 'Restaurant Les Pécheurs : adaptation à une nouvelle activité dans un cadre précis. Expérience du monde du travail et collaboration avec une équipe constituée de plusieurs corps et de profils variés. Flexibilité des horaires.', '2022-12-05', '2022-12-07'),
(2, 5, 'experience', 'content', '2022-12-06', '2022-12-09');

-- --------------------------------------------------------

--
-- Structure de la table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `level` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `skills`
--

INSERT INTO `skills` (`id`, `user_id`, `type`, `name`, `level`) VALUES
(1, 5, 0, 'Français', 1),
(2, 5, 0, 'Anglais', 2),
(3, 5, 1, 'Python', 3),
(4, 8, 1, 'SQL', 4);

-- --------------------------------------------------------

--
-- Structure de la table `socials`
--

CREATE TABLE `socials` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `social_name` varchar(20) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(254) NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(80) NOT NULL,
  `account_status` int(11) NOT NULL DEFAULT '0',
  `bio` text,
  `qualities` varchar(100) DEFAULT NULL,
  `profile_picture` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `account_status`, `bio`, `qualities`, `profile_picture`) VALUES
(5, 'gdalmon@gaming.tech', 'Gabriel DALMON', '2a5dcf74ce058213b908a63f631cb5864e5dad23', 2, 'Étudiant en G.Tech au Gaming Campus', 'Autonome, ouvert, curieux.', 'gabriel_profile_pic.webp'),
(8, 'anthony@gmail.com', 'Anthony LEGRIX', '2a5dcf74ce058213b908a63f631cb5864e5dad23', 2, NULL, NULL, 'anthony_profile_pic.webp'),
(9, 'dalmgabi@gmail.com', 'Gabriel', '2a5dcf74ce058213b908a63f631cb5864e5dad23', 2, NULL, NULL, NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
