-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 04, 2019 at 01:46 PM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maitriseweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `ADMIN`
--

CREATE TABLE `ADMIN` (
  `id_admin` int(11) NOT NULL,
  `admin_name` varchar(250) NOT NULL,
  `admin_mdp` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ADMIN`
--

INSERT INTO `ADMIN` (`id_admin`, `admin_name`, `admin_mdp`) VALUES
(1, 'romain', 'romain'),
(2, 'axel', 'axel'),
(3, 'dje', 'dje');

-- --------------------------------------------------------

--
-- Table structure for table `PROJET`
--

CREATE TABLE `PROJET` (
  `id_projet` int(11) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `id_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `PROJET`
--

INSERT INTO `PROJET` (`id_projet`, `nom`, `description`, `image`, `id_type`) VALUES
(1, 'LA DOMOISE', 'La Domoise f˚t une brasserie avec embouteillage sur place et livraison journaliËre par tournÈes aux particuliers. Notre Ètablissement ‡ ouvert ses portes depuis plus de 50 ans.', 'img/domoise_screen.jpg', 1),
(2, 'AFRE', 'Un site utile et pratique souhaitÈ par ce club de rugby ( AFRE ‡ REIMS ).\r\nR…F…RENCEMENT', 'img/afre_screen.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `TYPE`
--

CREATE TABLE `TYPE` (
  `id_type` int(11) NOT NULL,
  `type_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `TYPE`
--

INSERT INTO `TYPE` (`id_type`, `type_name`) VALUES
(1, 'Sites Vitrine'),
(2, 'Sites E-commerce'),
(3, 'Applications interne'),
(4, 'Identitées visuel');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ADMIN`
--
ALTER TABLE `ADMIN`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `PROJET`
--
ALTER TABLE `PROJET`
  ADD PRIMARY KEY (`id_projet`),
  ADD KEY `PROJET_TYPE_FK` (`id_type`);

--
-- Indexes for table `TYPE`
--
ALTER TABLE `TYPE`
  ADD PRIMARY KEY (`id_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ADMIN`
--
ALTER TABLE `ADMIN`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `PROJET`
--
ALTER TABLE `PROJET`
  MODIFY `id_projet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `TYPE`
--
ALTER TABLE `TYPE`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `PROJET`
--
ALTER TABLE `PROJET`
  ADD CONSTRAINT `PROJET_TYPE_FK` FOREIGN KEY (`id_type`) REFERENCES `TYPE` (`id_type`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
