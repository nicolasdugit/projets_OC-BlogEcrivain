-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  ven. 18 mai 2018 à 11:50
-- Version du serveur :  10.1.26-MariaDB
-- Version de PHP :  7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `testOC`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `comment_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `inscription_date` date NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `members`
--

INSERT INTO `members` (`id`, `pseudo`, `pass`, `email`, `inscription_date`, `group_id`) VALUES
(29, '@dmin', '@dmin', 'duquesne.nico@gmail.com', '2018-05-17', 1);

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `creation_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `creation_date`) VALUES
(18, 'Chapitre 2', 'Suspendisse rutrum viverra condimentum. Fusce semper velit enim, sed varius ipsum pretium semper. Vivamus iaculis enim risus, non volutpat nisl accumsan ornare. Morbi pharetra ut odio id euismod. Integer condimentum, ex non feugiat sagittis, nisi dui posuere mi, non condimentum velit risus et magna. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque bibendum nisi non efficitur maximus. Mauris congue ex massa, sit amet feugiat dui vehicula et. Nulla pulvinar, arcu eget pellentesque ullamcorper, dolor sem gravida augue, volutpat elementum risus felis et elit.\r\n', '2018-05-16 09:47:19'),
(17, 'Chapitre 1', ' Sed scelerisque condimentum eros, eu efficitur mauris tempus et. Nulla facilisi. Donec et felis tortor. Integer posuere massa ac purus pretium, ac efficitur mi elementum. Phasellus non nisi ut est posuere volutpat eu ut magna. Suspendisse vel volutpat est. Sed cursus erat ut volutpat egestas. Phasellus ut luctus ligula. Quisque volutpat purus ante, id aliquam diam accumsan in. Cras at laoreet nisi. Cras quis massa ut nisi commodo lacinia. Duis hendrerit, tellus vitae hendrerit efficitur, mi purus sodales purus, et porta velit ipsum vel sapien. Curabitur volutpat dui sit amet volutpat venenatis.\r\n\r\nAenean molestie pharetra gravida. Donec in nisi non nunc viverra gravida non id sapien. Ut luctus nibh at semper porta. Donec nec tristique est. Duis condimentum eget quam et semper. Duis at tortor lacus. Sed id neque sed nunc mollis finibus sed vel lorem', '2018-05-16 09:46:45'),
(19, 'Chapitre 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dictum malesuada tortor sit amet scelerisque. Fusce commodo mi mi, eget posuere tortor sagittis ac. Aliquam erat volutpat. Sed fringilla congue urna quis pretium. Aliquam commodo lectus id massa feugiat, eu sodales sem suscipit. Donec varius eget augue ut commodo. Etiam ut elit mauris. Mauris mauris nibh, fermentum et lectus vitae, vulputate aliquam odio. Ut nec ex ut metus facilisis lacinia. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi venenatis nibh ac justo posuere elementum. In cursus lorem ipsum, vel scelerisque lectus consequat eget. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras id sollicitudin leo, eu faucibus tellus. Phasellus tristique lacus ac finibus lacinia.\r\n\r\nProin iaculis dui sed libero porttitor, sollicitudin cursus metus eleifend. Vivamus sed mollis lorem. Maecenas eu arcu laoreet sapien efficitur sollicitudin. Vivamus nunc lorem, ornare id maximus non, iaculis quis est. Maecenas sit amet diam gravida, venenatis velit et, gravida ante. Vivamus sed orci sed ipsum egestas semper eu sed dolor. Phasellus quis fermentum augue, non dignissim est. Cras ante nisl, hendrerit sed convallis id, cursus ut nisl. Fusce leo odio, volutpat non nisl id, rhoncus pellentesque mi. Fusce mollis orci non purus pellentesque, quis ornare neque scelerisque.\r\n\r\nDuis vitae condimentum tortor. Ut ut tempor quam, tincidunt cursus lorem. Etiam nunc purus, euismod sit amet diam dictum, ultrices porta orci. Sed commodo, felis id suscipit pharetra, tortor massa vestibulum enim, id condimentum urna enim eget orci. Cras tincidunt, augue nec rhoncus ultrices, felis sem fringilla purus, at tincidunt lacus enim a lectus. Fusce eu elit erat. Aenean porttitor arcu consectetur, varius lacus euismod, bibendum lectus. Maecenas quis turpis faucibus, cursus leo ut, cursus risus. Etiam at neque sit amet lacus semper semper quis ac est. Fusce eros sem, commodo eu ligula a, tempor facilisis quam. Donec congue iaculis ex a imperdiet. Donec ac turpis vitae nisl accumsan accumsan. Nam facilisis ligula mattis, varius orci nec, scelerisque urna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer viverra libero non tortor vehicula, et vulputate augue cursus.\r\n\r\nQuisque id pretium est. Duis eget augue erat. Sed dignissim accumsan quam in tempus. Curabitur rhoncus arcu vitae sollicitudin pretium. In ac auctor est. Cras bibendum nisl id felis sollicitudin malesuada. Nullam pharetra tellus ut nisl venenatis scelerisque. Mauris aliquam consectetur aliquam. Maecenas id elit lacinia, tempus lorem quis, eleifend diam. Ut quis euismod leo. Etiam neque odio, tempus ut malesuada ac, luctus eu felis. Maecenas fermentum suscipit ligula, id congue libero volutpat in. Sed ex est, accumsan sit amet arcu ut, dignissim commodo massa.\r\n\r\nDuis accumsan, orci at iaculis elementum, elit odio lobortis dolor, eget dictum quam metus eu arcu. Phasellus dignissim sagittis justo, ut lacinia mauris tincidunt quis. Duis maximus quis erat sed porta. Vestibulum laoreet nunc sed dolor ullamcorper pharetra. Phasellus accumsan sed leo ac commodo. Suspendisse ullamcorper dolor posuere leo bibendum, at lacinia felis elementum. Quisque at lorem pharetra neque vestibulum rutrum.', '2018-05-18 15:03:31');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT pour la table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
