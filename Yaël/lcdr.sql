-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 21 oct. 2022 à 17:46
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `lcdr`
--

-- --------------------------------------------------------

--
-- Structure de la table `caissesavon`
--

CREATE TABLE `caissesavon` (
  `nomCaisseSavon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `nomCategorie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`nomCategorie`) VALUES
('C3'),
('C4'),
('C7');

-- --------------------------------------------------------

--
-- Structure de la table `confrerie`
--

CREATE TABLE `confrerie` (
  `bio` varchar(255) NOT NULL,
  `nomConfrerie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `confrerie`
--

INSERT INTO `confrerie` (`bio`, `nomConfrerie`) VALUES
('Les États du Velay composés de bénédictins, claristes, trappistes, cordeliers ou célestins, ont quitté l’abri austère de leurs monastères le temps d’une prière avec leur reliquaire.', 'Les États du Velay'),
('Attirée par l’odeur du pain chaud et le bruit des meules de pierre qui crissent sur le blé, la vie s’active autour des boulangers qui pétrissent et donneront forme au meilleur pain de la contrée !', 'Les Bannetiers de Montagnac'),
('Ces guerriers sans foi ni loi ne répondent qu’à l’appel de l’argent. En attendant de prêter leurs services au plus offrant, ils vaquent à leur occupation de mercenaires et de festoyeurs, de jour comme de nuit.', 'Les Mercenaires du Velay'),
('Ces passionnés d’armes partagent bien volontiers leurs savoirs dans le maniement de l’épée, de la vouge et de la hallebarde. Leurs démonstrations de force et de technique ne manqueront pas d’impressionner les passants.', 'La Piedtailhe'),
('Le murmure court qu’une attaque est imminente dans l’enceinte de la cité. Les preux chevaliers croisent le fer dans des entrainements réguliers pour ne pas laisser la moindre chance à l’ennemi.', 'Les Affres d\'Adonaï'),
('Les lances aiguisées, les Piquiers sont toujours prêts à se saisir de leurs armes pour défendre leur roi et la population ! Ils patrouillent dans la ville pour s’assurer de la sécurité de tous mais assurent également les soins aux soldats blessés grâce à ', 'Les Piquiers du Velay'),
('Les fiers archers du Velay initieront les audacieux au tir à l’arc. Ces derniers devront faire preuve de précision et de concentration pour ne pas manquer leur cible.', 'La première compagnie des Archers du Velay'),
('Les bonnes gens de Cramailh et Croc en Jambe excellent particulièrement dans le travail de la laine, le coulage de bougies, la fonte de médailles et l’artisanat en général. N’hésitez pas à passer un moment auprès d’eux pour découvrir les secrets de ces sa', 'Cramailh et Croc en jambe'),
('La joyeuse assemblée réunie dans les jardins de Galard peut compter sur les comédiens de Miramande pour apporter légèreté et drôlerie à ce jardin des Isles à visiter absolument !', 'L\'Isle de Miramande'),
('Quand arrive le mois de septembre, les vendanges touchent à leur fin. Les vignerons de Panaveyre ont bien travaillé cette année et partageront leurs secrets de fabrication jusqu’à présent bien gardés.', 'L\'Isle de Panaveyre'),
('Les rôtisseurs s’activent devant leur feu afin de cuire poulets et lapins, et les plumeuses de volailles fabriquent des oreillers et édredons bien douillets ! Sur le marché de l’Estrapade, les plus gourmets viennent sélectionner leurs volailles pour festo', 'L\'Isle de l\'Estrapade'),
('Autour des jeux de dés, de cartes et palets, tous viennent se défier et parier les deniers prêtés par le croupier. Les paris marchent fort bien et les affaires sont prospères ! Mais attention, l’armée du Roi veille et vient jouer les trouble-fête !', 'L\'Isle de Papelengue'),
('Les gens de Garamentes ont plus d’une corde à leur arc : Ils présentent leurs différentes armes et en expliquent les techniques de fourbissement et d’entretien. Ils feutrent la laine, travaillent le cuir et fabriquent des carreaux avec l’argile rouge tout', 'L\'Isle de Garamentes'),
('On se détend dans les étuves de Lioussac, en se faisant savonner vigoureusement et délicatement parfumer, tout en se délectant des volailles et autres poulardes préparées par les rôtisseurs de l’Estrapade !', 'L\'Isle de Lioussac'),
('Dans ce camp se trouve de bien utiles connaissances. Des secrets de la fabrication du papier aux techniques calligraphiques à la plume d’oie, en passant par la reliure et la couture des livres, les artisans de ce camp ont plus d’un talent dans leurs mains', 'L\'Isle de la Viguerie'),
('Sous la protection de la Vierge et de Sainte Gertrude ses saints patrons, la confrérie des tissuteurs rubaniers, artisans de la petite navette, confectionne des galons, rubans et autres lacets qui iront agrémenter les habits des gens de grandes maisons du', 'L\'Isle de Mochafède'),
('Les bannis occitans des Pieds Poudreux sont composés de déserteurs, d’aventuriers insoumis et de mercenaires errants … Islotiers des états du Velay, ce sont des enfants de la guerre qui, rassemblés en bandes sont méprisés à l’époque. Ils n’en sont pas moi', 'Les Pieds Poudreux'),
('Les Compains sont d’aimables et joyeux compagnons qui n’ont de cesse de partager leurs savoir-faire et leurs histoires. Certains s’affairent en cuisine où d’autres sont à l’ouvrage autour du « Papegaï », le grill Renaissance, pendant que quelques-uns pren', 'Les Compains'),
('Les moines de St Théofrède viennent de sortir de leur retraite du Monastier-sur-Gazeilles et s’adonnent patiemment au travail du cuir pendant que les joyeux musiciens des Mange Chèvres font résonner cuivres et tambours.\r\n\r\n', 'Les Mange-Chèvres'),
('À l’aide d’une réplique d’une machine élévatoire, les tailleurs de pierre, charpentiers, scieurs de longs et autres compagnons bâtisseurs entreprennent de construire, une assise aux dimensions de Gargantua ! Leur immense atelier vous permettra d’appréhend', 'Les Bâtisseurs d\'Antan'),
('En 1511, alors que Maximilien Ier rappelle tous les lansquenets, des mercenaires d’origine germanique éparpillés en Europe au service des princes, il s’en trouve quelques-uns qui choisissent de demeurer au service de François Ier et deviennent la célèbre ', 'Les Schwarze Landsknechte'),
('Venant des terres autour de la Durande, ils portent des traditions ancestrales mais font preuve d’une grande curiosité pour les nouvelles sciences que notre époque développe. Leur habileté est remarquable dans les jeux qu’ils vous proposent de partager ou', 'Trolvergne'),
('Ces fameux saltimbanques ont voyagé dans toutes les directions pour y découvrir l’art lumineux du spectacle et l’art sombre de l’illusion. Du nord au sud et même à l’est, tout à l’est, jusqu’au prochain océan, là où personne ne peut traduire ce qui se dit', 'Ersa Malombrina'),
('Ayant vécu leur lot de batailles, ces valeureux vétérans se consacrent maintenant à la fabrication des arcs et des flèches qu\'ils ont si longtemps maniés.', 'L\'Arc en Main');

-- --------------------------------------------------------

--
-- Structure de la table `parcours`
--

CREATE TABLE `parcours` (
  `nomParcours` varchar(255) NOT NULL,
  `distanceMetres` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `participant`
--

CREATE TABLE `participant` (
  `nomParticipant` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `telephone` int(10) NOT NULL,
  `mail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
