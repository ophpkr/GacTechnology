-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  mar. 17 mars 2020 à 11:44
-- Version du serveur :  5.7.28
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gactechnology`
--
CREATE DATABASE IF NOT EXISTS `gactechnology` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `gactechnology`;

-- --------------------------------------------------------

--
-- Structure de la table `mobile_data`
--

DROP TABLE IF EXISTS `mobile_data`;
CREATE TABLE IF NOT EXISTS `mobile_data` (
  `id_mobile_data` int(11) NOT NULL AUTO_INCREMENT,
  `volume_mobile_data` int(11) NOT NULL,
  `time_mobile_data` time NOT NULL,
  `id_subscriber` int(11) NOT NULL,
  PRIMARY KEY (`id_mobile_data`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `phone_call`
--

DROP TABLE IF EXISTS `phone_call`;
CREATE TABLE IF NOT EXISTS `phone_call` (
  `id_call` int(11) NOT NULL AUTO_INCREMENT,
  `duration_call` time NOT NULL,
  `date_call` date NOT NULL,
  PRIMARY KEY (`id_call`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `sms`
--

DROP TABLE IF EXISTS `sms`;
CREATE TABLE IF NOT EXISTS `sms` (
  `id_sms` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_sms`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
