-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 19 juil. 2021 à 14:38
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `online_shopping`
--
CREATE DATABASE IF NOT EXISTS `online_shopping` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `online_shopping`;

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `price` double NOT NULL,
  `picture` varchar(255) NOT NULL,
  `category` enum('Computer','Headphones','Keyboards','Phones') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `price`, `picture`, `category`) VALUES
(1, 'Best computer', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 500, '', 'Computer'),
(2, 'Asus x400', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 800, '', 'Computer'),
(3, 'iPhone 12', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 1200, '', 'Phones'),
(4, 'Huawei P30', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 30, '', 'Phones'),
(5, 'Corsair HeadSet G30', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 100, '', 'Headphones'),
(6, 'Corsair K90', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 90, '', 'Keyboards'),
(7, 'HyperX 700', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 70, '', 'Headphones'),
(8, 'Roccat P70', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 70, '', 'Keyboards');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
