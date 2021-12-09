-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 09, 2021 at 12:49 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `concourschant`
--

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `song` text,
  `verif1` varchar(3) NOT NULL DEFAULT 'NON',
  `rejeter` varchar(3) NOT NULL DEFAULT 'NON',
  `fichier` varchar(255) DEFAULT NULL,
  `verif2` varchar(3) NOT NULL DEFAULT 'NON',
  `rejeter2` varchar(3) NOT NULL DEFAULT 'NON'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id`, `pseudo`, `song`, `verif1`, `rejeter`, `fichier`, `verif2`, `rejeter2`) VALUES
(1, 'fabrizio', 'Les lacs du Connemara par Michel Sardou', 'OUI', 'NON', 'beggin1.mp3', 'OUI', 'NON'),
(2, 'babouche', 'La Boheme par Charles Aznavour', 'OUI', 'NON', 'La Boheme par Charles Aznavour', 'NON', 'OUI'),
(3, 'tom', NULL, 'NON', 'OUI', NULL, 'NON', 'NON'),
(4, 'thomas', 'Défaite de famille par OrelSan', 'OUI', 'NON', NULL, 'NON', 'NON'),
(5, 'roro', 'Shivers par Ed Sheeran', 'OUI', 'NON', NULL, 'NON', 'NON'),
(6, 'jm', 'La Moula par MHD', 'OUI', 'NON', NULL, 'NON', 'NON'),
(7, 'yann', 'Fruit de la Passion par Franky Vincent', 'OUI', 'NON', 'Fruit de la Passion par Franky Vincent', 'NON', 'NON'),
(8, 'cricri', 'Natural Blues par Moby', 'OUI', 'NON', 'Natural Blues par Moby', 'NON', 'OUI'),
(9, 'bob', 'Allumer le feu par Johnny Hallyday', 'OUI', 'NON', 'Allumer le feu par Johnny Hallyday', 'OUI', 'NON');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `age` int(2) NOT NULL,
  `sexe` varchar(5) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `telephone` varchar(14) NOT NULL,
  `adresse` text NOT NULL,
  `codepostal` int(5) NOT NULL,
  `ville` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `nom`, `prenom`, `age`, `sexe`, `email`, `password`, `telephone`, `adresse`, `codepostal`, `ville`) VALUES
(1, 'admin', 'admin', 'admin', 20, 'homme', 'admin@gmail.com', '$2y$10$Q4g4FWwcdw7JQIx8rw/G/.fn5TpsffA2rDLzXQAFbAqF9nF4N0bky', '5555555555', '12 rue du pont', 51000, 'bibi'),
(2, 'fabrizio', 'fabrizio', 'fabrizio', 11, 'homme', 'fab@gmail.com', '$2y$10$0UxCUi9KHsfyA4uB9HKQ0uHRI4bc4ZoCtKUpK0rTXdig6bklGXUr2', '4444444444', '1bis rue du lycee', 62000, 'Gstaadt'),
(3, 'babouche', 'babouche', 'babouche', 33, 'femme', 'babouche@gmail.com', '$2y$10$pAJUk.GNhidxfL6Sm6wheebhpxd7hd/7AQw3V6WTO7U4vJVr8BWVa', '6666666666', '12 des ajoncs', 44332, 'djdjd'),
(4, 'tom', 'tom', 'tom', 33, 'homme', 'tom@gmail.com', '$2y$10$IFiM0uARg319uDfhKZrONu6/hfXM7XKdXeMPeyeqEp83l1MiXiDN.', '111111111111', '33 rue des cons', 33333, 'jojdojoj'),
(5, 'thomas', 'thomas', 'thomas', 30, 'homme', 'thomas@gmail.com', '$2y$10$e8X9SQrcPFDlHDSujL3MnefIiy5jxZuj7US88PehcCF4jBRPZlOSm', '1234567898', '12 bobb', 44444, 'blabla'),
(6, 'roro', 'roro', 'romane', 22, 'homme', 'romane@gmail.com', '$2y$10$M6qeO7BQcIMhM2aYYox0Tu3KUWRm82B/SVRL8zsXZ8.qfHnkO7TLm', '232323232323', '12 blabla', 22222, 'endk'),
(7, 'jm', 'jm', 'jm', 55, 'homme', 'jm@google.com', '$2y$10$z4L8WRjaUekbcF/xBamNeuMnIRaZcYg8evOqeGzG.8VD3U7S6DivO', '123432343456', '33 rree', 65467, 'djdh'),
(8, 'yann', 'yann', 'yann', 33, 'homme', 'yann@gmail.com', '$2y$10$N8aUe8xlMr257u./VV.buOx4I2jToRRwKguTGMqGa9VURkMrvRpDO', '344567456678', '12 rue du pont', 44444, 'hfhf'),
(9, 'cricri', 'cricri', 'cricri', 22, 'homme', 'cricri@gmail.com', '$2y$10$e0S6CNFjrGup2F2748HkvO6qzKLXMBpFmwWDPtlzeT9NwEnV2gpuG', '34567876543', 'ddjk', 34567, 'Edkfk'),
(10, 'bob', 'bob', 'bob', 44, 'homme', 'bob@hotmail.fr', '$2y$10$9xnGac0q0eYTwPPyZDKwF.VwTemRL20Ie3g6wYhiuwXzP5eBX2ZUa', '4567876543', '12 rue du pont', 45678, 'blabla');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
