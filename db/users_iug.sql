-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 14 fév. 2022 à 12:19
-- Version du serveur : 10.4.19-MariaDB
-- Version de PHP : 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `users_iug`
--

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `etab` varchar(255) NOT NULL,
  `added_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `name`, `surname`, `password`, `email`, `etab`, `added_at`) VALUES
(1, 'Dony', 'donald', '53e11eb7b24cc39e33733a0ff06640f1b39425ea', 'azerty@gmail.com', 'IUG', '0000-00-00 00:00:00'),
(2, 'Nkouathio', 'Ulrich', '20392cb5bf7be3b0de1f7370677fd1c294490f27', 'donaldnkouathio@gmail.com', 'IAI', '0000-00-00 00:00:00'),
(3, 'Ngako', 'Donald', '20392cb5bf7be3b0de1f7370677fd1c294490f27', 'donaldnkouathio3@gmail.com', 'Fac science', '0000-00-00 00:00:00'),
(4, 'donaldo', 'Nkouat', 'b587285d3b354a3647e0d1c1d8410364685c773b', 'donaldnkouathio2@gmail.com', 'ESG', '0000-00-00 00:00:00'),
(5, 'Nkouathio Ngako', 'Donald', 'a249e493da87935202c09a79126c0a5f0698d73e', 'azerty@gmail.comaz', 'IUG', '2022-02-14 00:38:43'),
(9, 'user', 'Admin', 'c7671a080dac929da08e47158b5bda9a29348339', 'user@gmail.com', 'IUG', '2022-02-14 11:36:58');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
