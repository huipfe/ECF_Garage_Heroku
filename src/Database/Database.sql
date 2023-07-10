
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ecf_garage`
--

-- --------------------------------------------------------

--
-- Structure de la table `catalogue/listes voitures`
--

CREATE TABLE `catalogue_de_voitures` (
    `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Table Catalogue voiture';

-- --------------------------------------------------------

--
-- Structure de la table `horaires`
--

CREATE TABLE `horaires` (
    `jour` date NOT NULL,
    `heure_debut` varchar(50) NOT NULL,
    `heure_fin` varchar(50) NOT NULL,
    `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Tables des horaires';

-- --------------------------------------------------------

--
-- Structure de la table `img`
--

CREATE TABLE `img` (
  `image` varchar(255) NOT NULL,
  `id_image` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_image`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Tables des images';

-- --------------------------------------------------------

--
-- Structure de la table `information perso garage parrot`
--

CREATE TABLE `information_garage_parrot` (
  `adress` varchar(50) NOT NULL,
  `num` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Table information du site';

-- --------------------------------------------------------

--
-- Structure de la table `page d'accueil`
--

CREATE TABLE `page_d_accueil` (
  `Temoignage` varchar(50) NOT NULL,
  `id_image` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Contenu de la page d''Accueil';


-- -- --------------------------------------------------------

-- --
-- -- Structure de la table `rôle`
-- --

-- CREATE TABLE `rôle` (
--   `name` varchar(50) NOT NULL,
--   `is_admin` tinyint(1) NOT NULL,
--   `id` int NOT NULL AUTO_INCREMENT,
--   PRIMARY KEY (`id`)
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Table Rôle, qui désigne l''admin ou l''employé';

-- --------------------------------------------------------

--
-- Structure de la table `témoignages (commentaire)`
--

CREATE TABLE `témoignages` (
  `id` int NOT NULL AUTO_INCREMENT,
  `contenu` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `nom` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Tables des commentaires/témoignages';


-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1 if user is admin, 0 otherwise',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Table Utilisateur (Pour admin et employé)';

-- --------------------------------------------------------

--
-- Structure de la table `voiture`
--

CREATE TABLE `voiture` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `prix` float NOT NULL,
  `annee` int NOT NULL,
  `kilometrage` int NOT NULL,
  `marque` varchar(50) NOT NULL,
  `modele` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Table de voiture, liée au catalogue';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
