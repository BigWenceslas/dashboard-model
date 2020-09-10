-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 10 sep. 2020 à 07:04
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `afriqup`
--

-- --------------------------------------------------------

--
-- Structure de la table `banniere_accueils`
--

CREATE TABLE `banniere_accueils` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `titre` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `banniere_accueils`
--

INSERT INTO `banniere_accueils` (`id`, `created_at`, `updated_at`, `titre`, `description`, `image`) VALUES
(2, '2020-08-24 09:56:00', '2020-08-24 09:59:50', 'ETUDE-EMPLOI-FORMATION-INCUBATEUR-MISE EN RELATION', 'Notre Cabinet realise vos etudes et vous met en relation avec des personnes et institutions adequates pour atteindre nos objectifs.', 'banniere-accueils/August2020/qnuXx8BfPGWx0BAb1LG2.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `categories_formations`
--

CREATE TABLE `categories_formations` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories_formations`
--

INSERT INTO `categories_formations` (`id`, `nom`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Formations gratuites', '<p>Les formations gratuites que nous mettons a votre disposition.</p>', '2020-06-24 08:21:43', '2020-06-24 08:21:43'),
(2, 'Formations payantes', '<p>Les formations payantes que nous mettons a votre disposition.</p>', '2020-06-24 08:21:43', '2020-06-24 08:21:43');

-- --------------------------------------------------------

--
-- Structure de la table `categories_services`
--

CREATE TABLE `categories_services` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories_services`
--

INSERT INTO `categories_services` (`id`, `nom`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Services gratuits', '<p>Services accessibles gratuitement mis a votre disposition par nos soins</p>', '2020-06-24 08:23:05', '2020-06-28 08:44:01'),
(2, 'Services payants', '<p>Services accessibles après paiement mis a votre disposition par nos soins</p>', '2020-06-24 08:23:05', '2020-06-28 08:44:01');

-- --------------------------------------------------------

--
-- Structure de la table `competences`
--

CREATE TABLE `competences` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descriptif` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_data` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `configurations`
--

CREATE TABLE `configurations` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valeur` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `configurations`
--

INSERT INTO `configurations` (`id`, `created_at`, `updated_at`, `cle`, `valeur`) VALUES
(1, '2020-06-29 06:41:16', '2020-06-29 06:41:16', 'devise', 'FCFA'),
(2, '2020-09-07 04:22:29', '2020-09-07 04:22:29', 'email_contactez_nous', 'infos@africkup.com');

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pieces_jointes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `created_at`, `updated_at`, `nom`, `prenom`, `telephone`, `email`, `message`, `pieces_jointes`) VALUES
(1, '2020-09-04 08:20:08', '2020-09-04 08:20:08', 'Non proident aliqui', 'Suscipit aut amet r', ' +1 (649) 238-8922', 'Qui ipsa ab deserun', 'Ipsum distinctio Op', 'IseLmYgQBveVmIUH454be7CdcHrBxx-metaQ1YgQXJpc3RpZGUgRlIucGRm-.pdf|1Kjxa80BArTNrEy0EjNH6VCT2i7Nr0-metaQ1YgQXJpc3RpZGUgRU4ucGRm-.pdf'),
(2, '2020-09-04 08:22:09', '2020-09-04 08:22:09', 'Quibusdam perspiciat', 'Ea et cillum amet e', ' +1 (898) 409-2832', 'Aut non lorem commod', 'Laudantium providen', 'g32uiRNEoVeVZV5x310hfAZn861XdA-metaQ1YgQXJpc3RpZGUgRlIucGRm-.pdf|aCW2Kj9JZuIRybIpl6LcO2zzdtG34D-metaQ1YgQXJpc3RpZGUgRU4ucGRm-.pdf'),
(3, '2020-09-04 08:23:36', '2020-09-04 08:23:36', 'Vel pariatur Conseq', 'Porro recusandae Ni', ' +1 (432) 638-4377', 'At occaecat ut ullam', 'Recusandae Ut labor', 'cI942Rjsw6HKOJkXzwKsXgCqLVbjOm-metaQ1YgQXJpc3RpZGUgRlIucGRm-.pdf|VIEt0HYHalOzqNOVi0wc5cE7ZIlkS4-metaQ1YgQXJpc3RpZGUgRU4ucGRm-.pdf'),
(4, '2020-09-04 08:25:54', '2020-09-04 08:25:54', 'Est saepe voluptatem', 'Est eaque ratione ab', ' +1 (693) 915-6472', 'Commodi beatae accus', 'Distinctio Lorem in', 'dQcNmrYeS80Pysv8TaeeQOkQ2IEoXa-metaQ1YgQXJpc3RpZGUgRlIucGRm-.pdf|nT90dXq8AwGDdrSvayfIJbuk02j5a4-metaQ1YgQXJpc3RpZGUgRU4ucGRm-.pdf'),
(5, '2020-09-04 08:27:31', '2020-09-04 08:27:31', 'A consequat Et vita', 'Aut cillum recusanda', ' +1 (292) 195-8414', 'Molestiae ex ducimus', 'Aut vitae est sit v', '8kyryF02qfFZjWL2lqJJurud527ojm-metaQ1YgQXJpc3RpZGUgRlIucGRm-.pdf'),
(6, '2020-09-04 11:21:10', '2020-09-04 11:21:10', 'Asperiores et ration', 'Molestiae amet quia', ' +1 (438) 809-4968', 'Voluptatem natus cup', 'Sint eum voluptatem ', 'uZ98LI3Io81UP6e9HTX7uoW0aifsnY-metaQ1YgQXJpc3RpZGUgRU4ucGRm-.pdf'),
(7, '2020-09-04 11:21:53', '2020-09-04 11:21:53', 'Laudantium aperiam ', 'Praesentium reprehen', ' +1 (124) 777-2049', 'Dolorem eum assumend', 'Sint ipsum ipsum i', 'nRCexi13VpCM9dBC653PIXfEvbWKz9-metaQ1YgQXJpc3RpZGUgRU4ucGRm-.pdf'),
(8, '2020-09-04 12:01:11', '2020-09-04 12:01:11', 'Id qui ut non ut', 'Quis nostrud aut con', ' +1 (998) 872-2962', 'Optio rerum in sunt', 'Ducimus quia nulla ', 'B410Wx6I3Aw26HaKllmFTA9KqiYYQD-metaQ1YgQXJpc3RpZGUgRlIucGRm-.pdf'),
(9, '2020-09-04 12:21:03', '2020-09-04 12:21:03', 'Pariatur Aliquip al', 'Ab dolore temporibus', ' +1 (753) 562-2774', 'Quis nisi voluptatem', 'Et adipisicing minus', 'NsFN81YKZ0XsnKcJwAii7xKYuQRvO1-metaQ1YgQXJpc3RpZGUgRlIucGRm-.pdf'),
(10, '2020-09-07 04:29:52', '2020-09-07 04:29:52', 'Aristide', 'Bessala', ' 690763957', 'bessala93@gmail.com', 'wretert', 'xL8YzLSf3rEtWiijY9tUW82pFoxWeO-metaQ2FwdHVyZSBkdSAyMDIwLTA5LTA3IDA3LTU0LTUxLnBuZw==-.png'),
(11, '2020-09-07 04:35:29', '2020-09-07 04:35:29', 'Developpeur', 'Quantahive', ' 690763957', 'bessala93@gmail.com', 'Tests avec documents', 'qyXYgShIsfHnhBGvlSDgMAH6NzWiP4-metaQ1YgQXJpc3RpZGUgRlIucGRm-.pdf|HpqLf1iSwnzhsWDuspnKmGEAfOlKlG-metaQ1YgQXJpc3RpZGUgRU4ucGRm-.pdf'),
(12, '2020-09-07 04:40:02', '2020-09-07 04:40:02', 'Dev', 'Quantahive', ' 690763957', 'bessala93@gmail.com', 'Test avec document', 'P2clUbqMZrtWOUr9QHW4gbjfjE8xaT-metaQ1YgQXJpc3RpZGUgRlIucGRm-.pdf');

-- --------------------------------------------------------

--
-- Structure de la table `cursus_academiques`
--

CREATE TABLE `cursus_academiques` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `annee` int(11) NOT NULL,
  `document` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_data` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT 0,
  `browse` tinyint(1) NOT NULL DEFAULT 1,
  `read` tinyint(1) NOT NULL DEFAULT 1,
  `edit` tinyint(1) NOT NULL DEFAULT 1,
  `add` tinyint(1) NOT NULL DEFAULT 1,
  `delete` tinyint(1) NOT NULL DEFAULT 1,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '{}', 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, '{}', 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, '{}', 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, '{}', 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, '{}', 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 8),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, '{}', 9),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":\"0\",\"taggable\":\"0\"}', 11),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 12),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, '{}', 16),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 0, 1, 1, 1, 1, 1, '{}', 10),
(72, 12, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(73, 12, 'nom', 'text', 'Nom', 1, 1, 1, 1, 1, 1, '{}', 2),
(74, 12, 'description', 'rich_text_box', 'Description', 0, 1, 1, 1, 1, 1, '{}', 3),
(75, 13, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(76, 13, 'nom', 'text', 'Nom', 1, 1, 1, 1, 1, 1, '{}', 2),
(77, 13, 'description', 'rich_text_box', 'Description', 0, 1, 1, 1, 1, 1, '{}', 3),
(78, 15, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(79, 15, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 2),
(80, 15, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 3),
(81, 15, 'nom', 'text', 'Nom', 1, 1, 1, 1, 1, 1, '{\"display\":{\"width\":\"4\",\"id\":\"nom_formation\"}}', 4),
(82, 15, 'slug', 'text', 'Slug', 0, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"nom\",\"forceUpdate\":true},\"display\":{\"width\":\"4\",\"id\":\"slug_formation\"}}', 5),
(83, 15, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"publish\",\"options\":{\"option1\":\"publish\",\"option2\":\"trash\"},\"display\":{\"width\":\"4\",\"id\":\"statut_formation\"}}', 6),
(84, 15, 'description', 'rich_text_box', 'Description', 0, 1, 1, 1, 1, 1, '{}', 7),
(85, 15, 'categorie_id', 'text', 'Categorie Id', 0, 1, 1, 1, 1, 1, '{}', 8),
(86, 15, 'image_formation', 'image', 'Image Formation', 0, 1, 1, 1, 1, 1, '{\"display\":{\"width\":\"3\",\"id\":\"image_formation\"}}', 9),
(87, 15, 'formation_belongsto_categories_formation_relationship', 'relationship', 'categories_formations', 0, 1, 1, 1, 1, 1, '{\"display\":{\"width\":\"3\",\"id\":\"categorie_formation\"},\"model\":\"App\\\\CategoriesFormation\",\"table\":\"categories_formations\",\"type\":\"belongsTo\",\"column\":\"categorie_id\",\"key\":\"id\",\"label\":\"nom\",\"pivot_table\":\"categories_formations\",\"pivot\":\"0\",\"taggable\":\"0\"}', 10),
(88, 16, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(89, 16, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 2),
(90, 16, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 3),
(91, 16, 'nom', 'text', 'Nom', 1, 1, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\",\"id\":\"nom_service\"}}', 4),
(92, 16, 'slug', 'text', 'Slug', 0, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"nom\",\"forceUpdate\":true},\"display\":{\"width\":\"6\",\"id\":\"slug_service\"}}', 5),
(93, 16, 'description', 'rich_text_box', 'Description', 0, 0, 1, 1, 1, 1, '{}', 6),
(94, 16, 'image_service', 'image', 'Image Service', 0, 1, 1, 1, 1, 1, '{\"display\":{\"width\":\"3\",\"id\":\"image_service\"}}', 7),
(95, 16, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"publie\",\"options\":{\"publie\":\"Publie\",\"en_attente\":\"En attente\"},\"display\":{\"width\":\"3\",\"id\":\"statut_service\"}}', 8),
(96, 16, 'categorie_id', 'text', 'Categorie Id', 0, 1, 1, 1, 1, 1, '{}', 9),
(97, 16, 'service_belongsto_categories_service_relationship', 'relationship', 'categories_services', 0, 1, 1, 1, 1, 1, '{\"display\":{\"width\":\"3\",\"id\":\"categorie_service\"},\"model\":\"App\\\\CategoriesService\",\"table\":\"categories_services\",\"type\":\"belongsTo\",\"column\":\"categorie_id\",\"key\":\"id\",\"label\":\"nom\",\"pivot_table\":\"categories_formations\",\"pivot\":\"0\",\"taggable\":\"0\"}', 10),
(98, 15, 'prix', 'number', 'Prix', 0, 1, 1, 1, 1, 1, '{\"display\":{\"width\":\"3\",\"id\":\"prix_formation\"}}', 10),
(99, 16, 'prix', 'number', 'Prix', 0, 1, 1, 1, 1, 1, '{\"display\":{\"width\":\"3\",\"id\":\"prix_service\"}}', 10),
(100, 17, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(101, 17, 'nom', 'text', 'Nom', 1, 1, 1, 1, 1, 1, '{}', 3),
(102, 17, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 4),
(103, 17, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5),
(104, 17, 'services_produits', 'text_area', 'Services Produits', 0, 1, 1, 1, 1, 1, '{}', 6),
(105, 17, 'ville', 'text', 'Ville', 0, 1, 1, 1, 1, 1, '{}', 8),
(106, 17, 'pays', 'select_dropdown', 'Pays', 0, 1, 1, 1, 1, 1, '{\"default\":\"CM\",\"options\":{\"AF\":\"Afghanistan\",\"ZA\":\"Afrique du Sud\",\"AL\":\"Albanie\",\"DZ\":\"Alg\\u00e9rie\",\"DE\":\"Allemagne\",\"AD\":\"Andorre\",\"AO\":\"Angola\",\"AI\":\"Anguilla\",\"AQ\":\"Antarctique\",\"AG\":\"Antigua-et-Barbuda\",\"AN\":\"Antilles n\\u00e9erlandaises\",\"SA\":\"Arabie saoudite\",\"AR\":\"Argentine\",\"AM\":\"Arm\\u00e9nie\",\"AW\":\"Aruba\",\"AU\":\"Australie\",\"AT\":\"Autriche\",\"AZ\":\"Azerba\\u00efdjan\",\"BS\":\"Bahamas\",\"BH\":\"Bahre\\u00efn\",\"BD\":\"Bangladesh\",\"BB\":\"Barbade\",\"BY\":\"B\\u00e9larus\",\"BE\":\"Belgique\",\"BZ\":\"Belize\",\"BJ\":\"B\\u00e9nin\",\"BM\":\"Bermudes\",\"BT\":\"Bhoutan\",\"BO\":\"Bolivie\",\"BA\":\"Bosnie-Herz\\u00e9govine\",\"BW\":\"Botswana\",\"BR\":\"Br\\u00e9sil\",\"BN\":\"Brun\\u00e9i Darussalam\",\"BG\":\"Bulgarie\",\"BF\":\"Burkina Faso\",\"BI\":\"Burundi\",\"KH\":\"Cambodge\",\"Cameroun\":\"Cameroun\",\"CA\":\"Canada\",\"CV\":\"Cap-Vert\",\"EA\":\"Ceuta et Melilla\",\"CL\":\"Chili\",\"CN\":\"Chine\",\"CY\":\"Chypre\",\"CO\":\"Colombie\",\"KM\":\"Comores\",\"CG\":\"Congo-Brazzaville\",\"KP\":\"Cor\\u00e9e du Nord\",\"KR\":\"Cor\\u00e9e du Sud\",\"CR\":\"Costa Rica\",\"CI\":\"C\\u00f4te d\\u2019Ivoire\",\"HR\":\"Croatie\",\"CU\":\"Cuba\",\"DK\":\"Danemark\",\"DG\":\"Diego Garcia\",\"DJ\":\"Djibouti\",\"DM\":\"Dominique\",\"EG\":\"\\u00c9gypte\",\"SV\":\"El Salvador\",\"AE\":\"\\u00c9mirats arabes unis\",\"EC\":\"\\u00c9quateur\",\"ER\":\"\\u00c9rythr\\u00e9e\",\"ES\":\"Espagne\",\"EE\":\"Estonie\",\"VA\":\"\\u00c9tat de la Cit\\u00e9 du Vatican\",\"FM\":\"\\u00c9tats f\\u00e9d\\u00e9r\\u00e9s de Micron\\u00e9sie\",\"US\":\"\\u00c9tats-Unis\",\"ET\":\"\\u00c9thiopie\",\"FJ\":\"Fidji\",\"FI\":\"Finlande\",\"FR\":\"France\",\"GA\":\"Gabon\",\"GM\":\"Gambie\",\"GE\":\"G\\u00e9orgie\",\"GS\":\"G\\u00e9orgie du Sud et les \\u00eeles Sandwich du Sud\",\"GH\":\"Ghana\",\"GI\":\"Gibraltar\",\"GR\":\"Gr\\u00e8ce\",\"GD\":\"Grenade\",\"GL\":\"Groenland\",\"GP\":\"Guadeloupe\",\"GU\":\"Guam\",\"GT\":\"Guatemala\",\"GG\":\"Guernesey\",\"GN\":\"Guin\\u00e9e\",\"GQ\":\"Guin\\u00e9e \\u00e9quatoriale\",\"GW\":\"Guin\\u00e9e-Bissau\",\"GY\":\"Guyana\",\"GF\":\"Guyane fran\\u00e7aise\",\"HT\":\"Ha\\u00efti\",\"HN\":\"Honduras\",\"HU\":\"Hongrie\",\"BV\":\"\\u00cele Bouvet\",\"CX\":\"\\u00cele Christmas\",\"CP\":\"\\u00cele Clipperton\",\"AC\":\"\\u00cele de l\'Ascension\",\"IM\":\"\\u00cele de Man\",\"NF\":\"\\u00cele Norfolk\",\"AX\":\"\\u00celes \\u00c5land\",\"KY\":\"\\u00celes Ca\\u00efmans\",\"IC\":\"\\u00celes Canaries\",\"CC\":\"\\u00celes Cocos - Keeling\",\"CK\":\"\\u00celes Cook\",\"FO\":\"\\u00celes F\\u00e9ro\\u00e9\",\"HM\":\"\\u00celes Heard et MacDonald\",\"FK\":\"\\u00celes Malouines\",\"MP\":\"\\u00celes Mariannes du Nord\",\"MH\":\"\\u00celes Marshall\",\"UM\":\"\\u00celes Mineures \\u00c9loign\\u00e9es des \\u00c9tats-Unis\",\"SB\":\"\\u00celes Salomon\",\"TC\":\"\\u00celes Turks et Ca\\u00efques\",\"VG\":\"\\u00celes Vierges britanniques\",\"VI\":\"\\u00celes Vierges des \\u00c9tats-Unis\",\"IN\":\"Inde\",\"ID\":\"Indon\\u00e9sie\",\"IQ\":\"Irak\",\"IR\":\"Iran\",\"IE\":\"Irlande\",\"IS\":\"Islande\",\"IL\":\"Isra\\u00ebl\",\"IT\":\"Italie\",\"JM\":\"Jama\\u00efque\",\"JP\":\"Japon\",\"JE\":\"Jersey\",\"JO\":\"Jordanie\",\"KZ\":\"Kazakhstan\",\"KE\":\"Kenya\",\"KG\":\"Kirghizistan\",\"KI\":\"Kiribati\",\"KW\":\"Kowe\\u00eft\",\"LA\":\"Laos\",\"LS\":\"Lesotho\",\"LV\":\"Lettonie\",\"LB\":\"Liban\",\"LR\":\"Lib\\u00e9ria\",\"LY\":\"Libye\",\"LI\":\"Liechtenstein\",\"LT\":\"Lituanie\",\"LU\":\"Luxembourg\",\"MK\":\"Mac\\u00e9doine\",\"MG\":\"Madagascar\",\"MY\":\"Malaisie\",\"MW\":\"Malawi\",\"MV\":\"Maldives\",\"ML\":\"Mali\",\"MT\":\"Malte\",\"MA\":\"Maroc\",\"MQ\":\"Martinique\",\"MU\":\"Maurice\",\"MR\":\"Mauritanie\",\"YT\":\"Mayotte\",\"MX\":\"Mexique\",\"MD\":\"Moldavie\",\"MC\":\"Monaco\",\"MN\":\"Mongolie\",\"ME\":\"Mont\\u00e9n\\u00e9gro\",\"MS\":\"Montserrat\",\"MZ\":\"Mozambique\",\"MM\":\"Myanmar\",\"NA\":\"Namibie\",\"NR\":\"Nauru\",\"NP\":\"N\\u00e9pal\",\"NI\":\"Nicaragua\",\"NE\":\"Niger\",\"NG\":\"Nig\\u00e9ria\",\"NU\":\"Niue\",\"NO\":\"Norv\\u00e8ge\",\"NC\":\"Nouvelle-Cal\\u00e9donie\",\"NZ\":\"Nouvelle-Z\\u00e9lande\",\"OM\":\"Oman\",\"UG\":\"Ouganda\",\"UZ\":\"Ouzb\\u00e9kistan\",\"PK\":\"Pakistan\",\"PW\":\"Palaos\",\"PA\":\"Panama\",\"PG\":\"Papouasie-Nouvelle-Guin\\u00e9e\",\"PY\":\"Paraguay\",\"NL\":\"Pays-Bas\",\"PE\":\"P\\u00e9rou\",\"PH\":\"Philippines\",\"PN\":\"Pitcairn\",\"PL\":\"Pologne\",\"PF\":\"Polyn\\u00e9sie fran\\u00e7aise\",\"PR\":\"Porto Rico\",\"PT\":\"Portugal\",\"QA\":\"Qatar\",\"HK\":\"R.A.S. chinoise de Hong Kong\",\"MO\":\"R.A.S. chinoise de Macao\",\"QO\":\"r\\u00e9gions \\u00e9loign\\u00e9es de l\\u2019Oc\\u00e9anie\",\"CF\":\"R\\u00e9publique centrafricaine\",\"CD\":\"R\\u00e9publique d\\u00e9mocratique du Congo\",\"DO\":\"R\\u00e9publique dominicaine\",\"CZ\":\"R\\u00e9publique tch\\u00e8que\",\"RE\":\"R\\u00e9union\",\"RO\":\"Roumanie\",\"GB\":\"Royaume-Uni\",\"RU\":\"Russie\",\"RW\":\"Rwanda\",\"EH\":\"Sahara occidental\",\"BL\":\"Saint-Barth\\u00e9l\\u00e9my\",\"KN\":\"Saint-Kitts-et-Nevis\",\"SM\":\"Saint-Marin\",\"MF\":\"Saint-Martin\",\"PM\":\"Saint-Pierre-et-Miquelon\",\"VC\":\"Saint-Vincent-et-les Grenadines\",\"SH\":\"Sainte-H\\u00e9l\\u00e8ne\",\"LC\":\"Sainte-Lucie\",\"WS\":\"Samoa\",\"AS\":\"Samoa am\\u00e9ricaines\",\"ST\":\"Sao Tom\\u00e9-et-Principe\",\"SN\":\"S\\u00e9n\\u00e9gal\",\"RS\":\"Serbie\",\"CS\":\"Serbie-et-Mont\\u00e9n\\u00e9gro\",\"SC\":\"Seychelles\",\"SL\":\"Sierra Leone\",\"SG\":\"Singapour\",\"SK\":\"Slovaquie\",\"SI\":\"Slov\\u00e9nie\",\"SO\":\"Somalie\",\"SD\":\"Soudan\",\"LK\":\"Sri Lanka\",\"SE\":\"Su\\u00e8de\",\"CH\":\"Suisse\",\"SR\":\"Suriname\",\"SJ\":\"Svalbard et \\u00cele Jan Mayen\",\"SZ\":\"Swaziland\",\"SY\":\"Syrie\",\"TJ\":\"Tadjikistan\",\"TW\":\"Ta\\u00efwan\",\"TZ\":\"Tanzanie\",\"TD\":\"Tchad\",\"TF\":\"Terres australes fran\\u00e7aises\",\"IO\":\"Territoire britannique de l\'oc\\u00e9an Indien\",\"PS\":\"Territoire palestinien\",\"TH\":\"Tha\\u00eflande\",\"TL\":\"Timor oriental\",\"TG\":\"Togo\",\"TK\":\"Tokelau\",\"TO\":\"Tonga\",\"TT\":\"Trinit\\u00e9-et-Tobago\",\"TA\":\"Tristan da Cunha\",\"TN\":\"Tunisie\",\"TM\":\"Turkm\\u00e9nistan\",\"TR\":\"Turquie\",\"TV\":\"Tuvalu\",\"UA\":\"Ukraine\",\"EU\":\"Union europ\\u00e9enne\",\"UY\":\"Uruguay\",\"VU\":\"Vanuatu\",\"VE\":\"Venezuela\",\"VN\":\"Vi\\u00eat Nam\",\"WF\":\"Wallis-et-Futuna\",\"YE\":\"Y\\u00e9men\",\"ZM\":\"Zambie\",\"ZW\":\"Zimbabwe\"}}', 7),
(107, 17, 'site_web', 'text', 'Site Web', 0, 0, 1, 1, 1, 1, '{}', 9),
(108, 17, 'logo', 'image', 'Logo', 0, 1, 1, 1, 1, 1, '{}', 10),
(109, 17, 'adresse', 'text_area', 'Adresse', 0, 1, 1, 1, 1, 1, '{}', 11),
(110, 17, 'accueil_service_client', 'text', 'Accueil Service Client', 0, 0, 1, 1, 1, 1, '{}', 12),
(111, 17, 'statut', 'select_dropdown', 'Statut', 0, 1, 1, 1, 1, 1, '{\"default\":\"EN ATTENTE\",\"options\":{\"option1\":\"VERIFIE\",\"option2\":\"EN ATTENTE\",\"option3\":\"REJETE\"}}', 13),
(112, 17, 'categorie', 'text', 'Categorie', 0, 1, 1, 1, 1, 1, '{}', 2),
(113, 16, 'tag', 'select_dropdown', 'Tag', 0, 1, 1, 1, 1, 1, '{\"default\":\"service_payant\",\"options\":{\"service_payant\":\"Service Payant\",\"service_gratuit\":\"Service Gratuit\"},\"display\":{\"width\":\"3\",\"id\":\"tag_service\"}}', 11),
(114, 18, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(115, 18, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 2),
(116, 18, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 3),
(117, 18, 'cle', 'text', 'Cle', 1, 1, 1, 1, 1, 1, '{}', 4),
(118, 18, 'valeur', 'text_area', 'Valeur', 1, 1, 1, 1, 1, 1, '{}', 5),
(119, 15, 'tag', 'select_dropdown', 'Tag', 0, 1, 1, 1, 1, 1, '{\"default\":\"formation-gratuite\",\"options\":{\"formation-gratuite\":\"Formation Gratuite\",\"formation-payante\":\"Formation Payante\"},\"display\":{\"width\":\"3\",\"id\":\"tag_formation\"}}', 11),
(120, 17, 'description', 'rich_text_box', 'Description', 0, 1, 1, 1, 1, 1, '{}', 15),
(121, 17, 'lien_video', 'text', 'Lien Video', 0, 1, 1, 1, 1, 1, '{}', 14),
(135, 22, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(136, 22, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 2),
(137, 22, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 3),
(138, 22, 'titre', 'text', 'Titre', 1, 1, 1, 1, 1, 1, '{}', 4),
(139, 22, 'description', 'markdown_editor', 'Description', 1, 1, 1, 1, 1, 1, '{}', 5),
(140, 22, 'image', 'image', 'Image', 1, 1, 1, 1, 1, 1, '{}', 6),
(141, 23, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(142, 23, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 2),
(143, 23, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 3),
(144, 23, 'texte', 'markdown_editor', 'Texte', 1, 1, 1, 1, 1, 1, '{}', 4),
(145, 23, 'user', 'text', 'User', 0, 1, 1, 1, 1, 1, '{}', 5),
(146, 23, 'etat', 'select_dropdown', 'Etat', 0, 1, 1, 1, 1, 1, '{\"default\":\"moderation\",\"options\":{\"moderation\":\"Moderation\",\"publie\":\"Publie\"}}', 6),
(147, 23, 'temoignage_belongsto_user_relationship', 'relationship', 'users', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\User\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"user\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"banniere_accueils\",\"pivot\":\"0\",\"taggable\":\"0\"}', 7),
(148, 1, 'email_verified_at', 'timestamp', 'Email Verified At', 0, 1, 1, 1, 1, 1, '{}', 7),
(149, 1, 'prenom', 'text', 'Prenom', 0, 1, 1, 1, 1, 1, '{}', 13),
(150, 1, 'nom', 'text', 'Nom', 0, 1, 1, 1, 1, 1, '{}', 14),
(151, 1, 'fonction', 'text', 'Fonction', 0, 1, 1, 1, 1, 1, '{}', 15),
(152, 24, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(153, 24, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 2),
(154, 24, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 3),
(155, 24, 'nom', 'text', 'Nom', 1, 1, 1, 1, 1, 1, '{\"display\":{\"width\":\"3\",\"id\":\"nom\"}}', 4),
(156, 24, 'prenom', 'text', 'Prenom', 1, 1, 1, 1, 1, 1, '{\"display\":{\"width\":\"3\",\"id\":\"prenom\"}}', 5),
(157, 24, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, '{\"display\":{\"width\":\"3\",\"id\":\"email\"}}', 6),
(158, 24, 'telephone', 'text', 'Telephone', 1, 1, 1, 1, 1, 1, '{\"display\":{\"width\":\"3\",\"id\":\"telephone\"}}', 7),
(159, 24, 'ville', 'text', 'Ville', 0, 1, 1, 1, 1, 1, '{\"display\":{\"width\":\"3\",\"id\":\"ville\"}}', 9),
(160, 24, 'pays', 'text', 'Pays', 0, 1, 1, 1, 1, 1, '{\"display\":{\"width\":\"3\",\"id\":\"pays\"}}', 8),
(161, 24, 'photo', 'image', 'Photo', 1, 1, 1, 1, 1, 1, '{\"display\":{\"width\":\"3\",\"id\":\"photo\"}}', 10),
(162, 24, 'cv', 'file', 'Cv', 0, 1, 1, 1, 1, 1, '{\"display\":{\"width\":\"3\",\"id\":\"cv\"}}', 11),
(163, 24, 'dernier_diplome', 'file', 'Dernier Diplome', 0, 1, 1, 1, 1, 1, '{\"display\":{\"width\":\"3\",\"id\":\"dernier_diplome\"}}', 12),
(164, 24, 'abonne_newsletter', 'select_dropdown', 'Abonne Newsletter', 0, 1, 1, 1, 1, 1, '{\"default\":\"1\",\"options\":{\"0\":\"Non\",\"1\":\"Oui\"},\"display\":{\"width\":\"3\",\"id\":\"abonne_newsletter\"}}', 13),
(165, 24, 'type_stage_recherche', 'select_dropdown', 'Type Stage Recherche', 0, 1, 1, 1, 1, 1, '{\"default\":\"cdi\",\"options\":{\"cdi\":\"CDI\",\"cdd\":\"STAGE\",\"stage\":\"STAGE\"},\"display\":{\"width\":\"3\",\"id\":\"type_contrat\"}}', 15),
(166, 24, 'duree_stage_souhaitee', 'select_dropdown', 'Duree Stage Souhaitee', 0, 1, 1, 1, 1, 1, '{\"default\":\"3_mois\",\"options\":{\"1_mois\":\"1 Mois\",\"2_mois\":\"2 Mois\",\"3_mois\":\"3 Mois\",\"4_mois\":\"4 Mois\",\"5_mois\":\"5 Mois\",\"6_mois\":\"6 Mois\"},\"display\":{\"width\":\"3\",\"id\":\"duree_contrat\"}}', 16),
(167, 24, 'newsletter_whatsapp', 'select_dropdown', 'Newsletter Whatsapp', 0, 1, 1, 1, 1, 1, '{\"default\":\"1\",\"options\":{\"0\":\"Non\",\"1\":\"Oui\"},\"display\":{\"width\":\"3\",\"id\":\"newsletter_whatsapp\"}}', 14),
(168, 24, 'type_compte', 'select_multiple', 'Type Compte', 1, 1, 1, 1, 1, 1, '{\"default\":\"etudiant\",\"options\":{\"etudiant\":\"Etudiant\",\"freelance\":\"Freelance\",\"entreprise\":\"Entreprise\"},\"display\":{\"width\":\"3\",\"id\":\"type_compte\"}}', 17),
(169, 24, 'donnees_compte_belongsto_user_relationship', 'relationship', 'users', 0, 1, 1, 1, 1, 1, '{\"display\":{\"width\":\"3\",\"id\":\"user_id\"},\"model\":\"App\\\\User\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"user\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"banniere_accueils\",\"pivot\":\"0\",\"taggable\":\"0\"}', 18),
(170, 24, 'user', 'text', 'User', 1, 1, 1, 1, 1, 1, '{}', 18),
(171, 25, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(172, 25, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 2),
(173, 25, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 3),
(174, 25, 'titre', 'text', 'Titre', 1, 1, 1, 1, 1, 1, '{}', 4),
(175, 25, 'descriptif', 'markdown_editor', 'Descriptif', 0, 1, 1, 1, 1, 1, '{}', 5),
(176, 25, 'user_data', 'text', 'User Data', 0, 1, 1, 1, 1, 1, '{}', 6),
(177, 25, 'competence_belongsto_donnees_compte_relationship', 'relationship', 'donnees_comptes', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\DonneesCompte\",\"table\":\"donnees_comptes\",\"type\":\"belongsTo\",\"column\":\"user_data\",\"key\":\"id\",\"label\":\"email\",\"pivot_table\":\"banniere_accueils\",\"pivot\":\"0\",\"taggable\":null}', 7),
(178, 26, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(179, 26, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 2),
(180, 26, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 3),
(181, 26, 'titre', 'text', 'Titre', 1, 1, 1, 1, 1, 1, '{}', 4),
(182, 26, 'annee', 'text', 'Annee', 1, 1, 1, 1, 1, 1, '{}', 5),
(183, 26, 'document', 'file', 'Document', 0, 1, 1, 1, 1, 1, '{}', 6),
(184, 26, 'user_data', 'text', 'User Data', 1, 1, 1, 1, 1, 1, '{}', 7),
(185, 26, 'cursus_academique_belongsto_donnees_compte_relationship', 'relationship', 'donnees_comptes', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\DonneesCompte\",\"table\":\"donnees_comptes\",\"type\":\"belongsTo\",\"column\":\"user_data\",\"key\":\"id\",\"label\":\"nom\",\"pivot_table\":\"banniere_accueils\",\"pivot\":\"0\",\"taggable\":\"0\"}', 8),
(186, 27, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(187, 27, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 2),
(188, 27, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 3),
(189, 27, 'titre', 'text', 'Titre', 1, 1, 1, 1, 1, 1, '{}', 4),
(190, 27, 'descriptif', 'markdown_editor', 'Descriptif', 0, 1, 1, 1, 1, 1, '{}', 5),
(191, 27, 'user_data', 'text', 'User Data', 1, 1, 1, 1, 1, 1, '{}', 6),
(192, 27, 'reference_belongsto_donnees_compte_relationship', 'relationship', 'donnees_comptes', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\DonneesCompte\",\"table\":\"donnees_comptes\",\"type\":\"belongsTo\",\"column\":\"user_data\",\"key\":\"id\",\"label\":\"nom\",\"pivot_table\":\"banniere_accueils\",\"pivot\":\"0\",\"taggable\":null}', 7),
(193, 28, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(194, 28, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 2),
(195, 28, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 3),
(196, 28, 'poste', 'text', 'Poste', 1, 1, 1, 1, 1, 1, '{}', 4),
(197, 28, 'annee', 'text', 'Annee', 1, 1, 1, 1, 1, 1, '{}', 5),
(198, 28, 'duree', 'text', 'Duree', 1, 1, 1, 1, 1, 1, '{}', 6),
(199, 28, 'user_data', 'text', 'User Data', 1, 1, 1, 1, 1, 1, '{}', 7),
(200, 28, 'experiences_professionnelle_belongsto_donnees_compte_relationship', 'relationship', 'donnees_comptes', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\DonneesCompte\",\"table\":\"donnees_comptes\",\"type\":\"belongsTo\",\"column\":\"user_data\",\"key\":\"id\",\"label\":\"nom\",\"pivot_table\":\"banniere_accueils\",\"pivot\":\"0\",\"taggable\":null}', 8),
(201, 15, 'lien_video1', 'text', 'Lien Video1', 0, 1, 1, 1, 1, 1, '{\"display\":{\"width\":\"4\",\"id\":\"lien_video1_formation\"}}', 12),
(202, 15, 'lien_video2', 'text', 'Lien Video2', 0, 1, 1, 1, 1, 1, '{\"display\":{\"width\":\"4\",\"id\":\"lien_video2_formation\"}}', 13),
(203, 15, 'lien_video3', 'text', 'Lien Video3', 0, 1, 1, 1, 1, 1, '{\"display\":{\"width\":\"4\",\"id\":\"lien_video3_formation\"}}', 14),
(204, 16, 'type_facturation', 'select_dropdown', 'Type Facturation', 0, 1, 1, 1, 1, 1, '{\"display\":{\"width\":\"3\",\"id\":\"type_facturation_service\"},\"default\":\"a_partir_de\",\"options\":{\"a_partir_de\":\"A partir de\",\"mois\":\"Par Mois\",\"rapport\":\"Par Rapport\"}}', 12),
(205, 29, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(206, 29, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 2),
(207, 29, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 3),
(208, 29, 'question', 'markdown_editor', 'Question', 1, 1, 1, 1, 1, 1, '{\"display\":{\"id\":\"question\",\"width\":\"6\"}}', 4),
(209, 29, 'ordre', 'number', 'Ordre', 0, 1, 1, 1, 1, 1, 'null', 6),
(210, 29, 'description', 'markdown_editor', 'Description', 0, 1, 1, 1, 1, 1, '{\"display\":{\"id\":\"description\",\"width\":\"6\"}}', 5),
(211, 30, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(212, 30, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 2),
(213, 30, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 3),
(214, 30, 'question', 'markdown_editor', 'Question', 1, 1, 1, 1, 1, 1, '{\"display\":{\"id\":\"question\",\"width\":\"6\"}}', 4),
(215, 30, 'ordre', 'text', 'Ordre', 0, 1, 1, 1, 1, 1, '{}', 6),
(216, 30, 'description', 'markdown_editor', 'Description', 0, 1, 1, 1, 1, 1, '{\"display\":{\"id\":\"description\",\"width\":\"6\"}}', 5),
(217, 31, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(218, 31, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 2),
(219, 31, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 3),
(220, 31, 'question', 'markdown_editor', 'Question', 1, 1, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\",\"id\":\"question\"}}', 4),
(221, 31, 'ordre', 'number', 'Ordre', 0, 1, 1, 1, 1, 1, '{}', 6),
(222, 31, 'description', 'markdown_editor', 'Description', 0, 1, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\",\"id\":\"description\"}}', 5),
(223, 32, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(224, 32, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 2),
(225, 32, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 3),
(226, 32, 'question', 'markdown_editor', 'Question', 1, 1, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\",\"id\":\"question\"}}', 4),
(227, 32, 'ordre', 'number', 'Ordre', 1, 1, 1, 1, 1, 1, '{}', 6),
(228, 32, 'description', 'markdown_editor', 'Description', 0, 1, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\",\"id\":\"description\"}}', 5),
(229, 33, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(230, 33, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 2),
(231, 33, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 3),
(232, 33, 'question', 'markdown_editor', 'Question', 1, 1, 1, 1, 1, 1, '{\"display\":{\"id\":\"question\",\"width\":\"6\"}}', 4),
(233, 33, 'ordre', 'number', 'Ordre', 0, 1, 1, 1, 1, 1, '{}', 6),
(234, 33, 'description', 'markdown_editor', 'Description', 0, 1, 1, 1, 1, 1, '{\"display\":{\"id\":\"description\",\"width\":\"6\"}}', 5);

-- --------------------------------------------------------

--
-- Structure de la table `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT 0,
  `server_side` tinyint(4) NOT NULL DEFAULT 0,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2020-06-14 19:05:23', '2020-08-24 14:36:59'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2020-06-14 19:05:24', '2020-06-14 19:05:24'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController', '', 1, 0, NULL, '2020-06-14 19:05:24', '2020-06-14 19:05:24'),
(12, 'categories_formations', 'categories-formations', 'Categories Formation', 'Categories Formations', 'voyager-categories', 'App\\CategoriesFormation', NULL, NULL, 'Les catégories des formations', 1, 0, '{\"order_column\":\"id\",\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null}', '2020-06-24 07:34:30', '2020-06-24 07:34:30'),
(13, 'categories_services', 'categories-services', 'Categories Service', 'Categories Services', 'voyager-categories', 'App\\CategoriesService', NULL, NULL, NULL, 1, 0, '{\"order_column\":\"id\",\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null}', '2020-06-24 07:36:33', '2020-06-24 07:36:33'),
(15, 'formations', 'formations', 'Formation', 'Formations', 'voyager-certificate', 'App\\Formation', NULL, NULL, NULL, 1, 0, '{\"order_column\":\"id\",\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2020-06-24 08:05:22', '2020-09-02 12:59:55'),
(16, 'services', 'services', 'Service', 'Services', NULL, 'App\\Service', NULL, NULL, NULL, 1, 0, '{\"order_column\":\"id\",\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2020-06-24 08:11:28', '2020-09-03 03:19:57'),
(17, 'entreprises', 'entreprises', 'Entreprise', 'Entreprises', 'voyager-company', 'App\\Entreprise', NULL, NULL, NULL, 1, 0, '{\"order_column\":\"id\",\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2020-06-26 06:31:42', '2020-07-04 23:20:00'),
(18, 'configurations', 'configurations', 'Configuration', 'Configurations', 'voyager-edit', 'App\\Configuration', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2020-06-29 06:40:52', '2020-06-29 06:40:52'),
(19, 'banniere_accueil', 'banniere-accueil', 'Banniere Accueil', 'Banniere Accueils', 'voyager-images', 'App\\BanniereAccueil', NULL, NULL, NULL, 1, 0, '{\"order_column\":\"id\",\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null}', '2020-08-24 08:17:54', '2020-08-24 08:17:54'),
(22, 'banniere_accueils', 'banniere-accueils', 'Banniere Accueil', 'Banniere Accueils', 'voyager-images', 'App\\BanniereAccueil', NULL, NULL, NULL, 1, 0, '{\"order_column\":\"id\",\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null}', '2020-08-24 09:55:52', '2020-08-24 09:55:52'),
(23, 'temoignages', 'temoignages', 'Temoignage', 'Temoignages', 'voyager-thumbs-up', 'App\\Temoignage', NULL, NULL, NULL, 1, 0, '{\"order_column\":\"id\",\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2020-08-24 13:24:10', '2020-08-24 13:30:23'),
(24, 'donnees_comptes', 'donnees-comptes', 'Donnees Compte', 'Donnees Comptes', 'voyager-people', 'App\\DonneesCompte', NULL, NULL, NULL, 1, 0, '{\"order_column\":\"id\",\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2020-09-01 14:32:15', '2020-09-01 21:10:03'),
(25, 'competences', 'competences', 'Competence', 'Competences', 'voyager-list', 'App\\Competence', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2020-09-01 21:26:32', '2020-09-01 21:26:32'),
(26, 'cursus_academiques', 'cursus-academiques', 'Cursus Academique', 'Cursus Academiques', 'voyager-company', 'App\\CursusAcademique', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-09-01 21:30:35', '2020-09-01 21:31:57'),
(27, 'references', 'references', 'Reference', 'References', 'voyager-file-text', 'App\\Reference', NULL, NULL, NULL, 1, 0, '{\"order_column\":\"id\",\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null}', '2020-09-01 21:32:45', '2020-09-01 21:32:45'),
(28, 'experiences_professionnelles', 'experiences-professionnelles', 'Experiences Professionnelle', 'Experiences Professionnelles', 'voyager-list-add', 'App\\ExperiencesProfessionnelle', NULL, NULL, NULL, 1, 0, '{\"order_column\":\"id\",\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null}', '2020-09-01 21:34:30', '2020-09-01 21:34:30'),
(29, 'evaluations_entreprises_clients', 'evaluations-entreprises-clients', 'Evaluations Entreprises Client', 'Evaluations Entreprises Clients', NULL, 'App\\EvaluationsEntreprisesClient', NULL, NULL, NULL, 1, 0, '{\"order_column\":\"ordre\",\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2020-09-07 05:09:59', '2020-09-07 05:09:59'),
(30, 'evaluations_entreprises_developpements', 'evaluations-entreprises-developpements', 'Evaluations Entreprises Developpement', 'Evaluations Entreprises Developpements', 'voyager-question', 'App\\EvaluationsEntreprisesDeveloppement', NULL, NULL, NULL, 1, 0, '{\"order_column\":\"ordre\",\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2020-09-07 05:11:23', '2020-09-07 05:11:23'),
(31, 'evaluations_entreprises_performances', 'evaluations-entreprises-performances', 'Evaluations Entreprises Performance', 'Evaluations Entreprises Performances', 'voyager-question', 'App\\EvaluationsEntreprisesPerformance', NULL, NULL, NULL, 1, 0, '{\"order_column\":\"ordre\",\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2020-09-07 05:13:20', '2020-09-07 05:13:20'),
(32, 'evaluations_entreprises_problemes', 'evaluations-entreprises-problemes', 'Evaluations Entreprises Probleme', 'Evaluations Entreprises Problemes', 'voyager-question', 'App\\EvaluationsEntreprisesProbleme', NULL, NULL, NULL, 1, 0, '{\"order_column\":\"ordre\",\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-09-07 05:14:20', '2020-09-07 06:34:50'),
(33, 'evaluations_entreprises_produits', 'evaluations-entreprises-produits', 'Evaluations Entreprises Produit', 'Evaluations Entreprises Produits', 'voyager-question', 'App\\EvaluationsEntreprisesProduit', NULL, NULL, NULL, 1, 0, '{\"order_column\":\"ordre\",\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2020-09-07 05:22:20', '2020-09-07 05:22:20');

-- --------------------------------------------------------

--
-- Structure de la table `donnees_comptes`
--

CREATE TABLE `donnees_comptes` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pays` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cv` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dernier_diplome` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `abonne_newsletter` tinyint(4) DEFAULT NULL,
  `type_stage_recherche` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duree_stage_souhaitee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `newsletter_whatsapp` tinyint(4) DEFAULT NULL,
  `type_compte` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `entreprises`
--

CREATE TABLE `entreprises` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `services_produits` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ville` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pays` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_web` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresse` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accueil_service_client` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `statut` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categorie` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lien_video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `entreprises`
--

INSERT INTO `entreprises` (`id`, `nom`, `created_at`, `updated_at`, `services_produits`, `ville`, `pays`, `site_web`, `logo`, `adresse`, `accueil_service_client`, `statut`, `categorie`, `description`, `lien_video`, `slug`) VALUES
(4, 'FINI HOTEL, Limbe, CAMEROUN, domaine: IMMOBILIER', '2020-07-02 05:14:31', '2020-07-02 05:14:31', NULL, 'LIMBE', 'AF', 'https://www.finihotel.com/', 'entreprises/July2020/4BrHmJF0pxV3qbN49wci.jpeg', '5899 Limbe….', NULL, NULL, 'HOTELLERIE & EVENEMENTIEL', '<p><span style=\"color: #000000; font-family: \'Open Sans\', \'sans-serif;\'; text-align: center;\">LE FINI h&ocirc;tel est un heureux m&eacute;lange de confort et de modernit&eacute; nich&eacute; sur la c&ocirc;te atlantique du Cameroun.</span><br style=\"color: #000000; font-family: \'Open Sans\', \'sans-serif;\'; text-align: center;\" /><span style=\"color: #000000; font-family: \'Open Sans\', \'sans-serif;\'; text-align: center;\">Climatis&eacute;es, insonoris&eacute;es, spacieuses et tr&egrave;s bien &eacute;quip&eacute;es, les &nbsp;chambres et suites de l\'h&ocirc;tel offrent un design contemporain et toutes les commodit&eacute;s de la vie moderne.</span></p>', NULL, NULL),
(5, 'NEMS A DOMICILE', '2020-07-02 06:31:50', '2020-07-02 06:31:50', 'NEMS EN TOUT GENRE', 'YAOUNDE', 'AF', NULL, 'entreprises/July2020/tntXV2tAPNP9Ooh9AOYo.png', 'contacter 237694700817', 'EXCELLENT', 'Verifié', 'AGRO-ALIMENTAIRE & MEDICAL', '<p>Vente distribution, aprovisionnement des Neme</p>', NULL, NULL),
(6, 'DELICIOUS CLARITA', '2020-07-02 06:34:07', '2020-07-02 06:34:07', 'CAKE DESIGN, EVENEMENTS ENFANTS', 'YAOUNDE', 'AF', NULL, 'entreprises/July2020/7CjxDH2bdU0WGlg4iq1j.png', 'deliciousclarita@yahoo.fr 237699307316', NULL, NULL, 'AGRO-ALIMENTAIRE & MEDICAL', '<p>deliciousclarita@yahoo.fr 237699307316</p>', NULL, NULL),
(9, 'NEMS A DOMICILE', '2020-07-03 14:06:00', '2020-07-04 13:28:14', 'NEMS EN TOUT GENRE', 'YAOUNDE', 'Cameroun', NULL, 'entreprises/July2020/NQlItunUm4wJAKaNfGVx.png', 'contacter 237694700817', NULL, 'VERIFIE', 'AGRO-ALIMENTAIRE & MEDICAL', '<p>contacter 237694700817</p>', NULL, NULL),
(10, 'DELICIOUS CLARITA', '2020-07-03 14:13:23', '2020-07-03 14:13:23', 'CAKE DESIGN, EVENEMENTS ENFANTS', 'YAOUNDE', 'Cameroun', NULL, 'entreprises/July2020/qhzFhQDKwejEyGal1u09.png', 'CAKE DESIGN, EVENEMENTS ENFANTS', NULL, NULL, 'AGRO-ALIMENTAIRE & MEDICAL', NULL, NULL, NULL),
(11, 'MNEK VILLAGE STORE', '2020-07-03 14:18:10', '2020-07-03 14:18:10', 'LUNETTES MEDICALES', 'YAOUNDE', 'Cameroun', NULL, 'entreprises/July2020/dginKLhhC0aY2nlOGBss.png', 'BONAPRISO 237 677251159 et  237 693229503', NULL, NULL, 'AGRO-ALIMENTAIRE & MEDICAL', NULL, NULL, NULL),
(12, 'ANDOMAN\'S BAG', '2020-07-03 14:32:00', '2020-07-04 23:21:00', 'MAROQUINERIE PAGNE et CUIR VERITABLE', 'DOUALA', 'AF', NULL, 'entreprises/July2020/5Mh7u9ADId8XixJazDP4.png', 'BONAMOUSSADI 237 690845110', NULL, 'option1', 'VESTIMENTAIRE, BIJOUTERIE, BEAUTE & COSMETIQUE', NULL, NULL, NULL),
(13, 'CASA CONCEPT & SERVICES', '2020-07-03 14:36:00', '2020-07-04 08:33:45', 'APPARTEMENT MEUBLé DE LUXE ,', NULL, 'Cameroun', NULL, 'entreprises/July2020/lAmE7x54nt1CuasQEs5i.png', 'BEEDI  237 679790915', NULL, 'Verifié', 'IMMOBILIER, BTP & AMEUBLEMENT', NULL, NULL, NULL),
(14, 'SPIDER SECURITY', '2020-07-03 14:41:00', '2020-07-03 14:48:22', 'sécurité,', NULL, 'Cameroun', NULL, 'entreprises/July2020/iFj4GxMrX32uK5YOaoKB.png', 'sécurité,, etc…!', NULL, NULL, 'JURIDIQUE, IMPOTS & SECURITE', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `evaluations`
--

CREATE TABLE `evaluations` (
  `id` int(10) UNSIGNED NOT NULL,
  `question_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `question_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_5` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_6` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_7` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_8` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_9` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_10` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `evaluations`
--

INSERT INTO `evaluations` (`id`, `question_1`, `created_at`, `updated_at`, `question_2`, `question_3`, `question_4`, `question_5`, `question_6`, `question_7`, `question_8`, `question_9`, `question_10`) VALUES
(1, 'Aspernatur voluptas ', NULL, NULL, 'Irure similique aliq', 'Accusantium incididu', 'Velit quo quae in no', 'Beatae eos dolore et', 'Dolor enim et elit ', 'Nisi rerum omnis pra', 'Adipisicing sint qui', 'Nisi amet quasi odi', 'Velit eius sint et e'),
(2, 'Rerum totam quam vol', '2020-07-12 14:46:51', '2020-07-12 14:46:51', 'Nam pariatur Dolore', 'Quaerat qui dolorum ', 'Velit voluptas Nam ', 'Dicta magnam hic vol', 'Fuga Esse quasi vel', 'Sint excepteur repre', 'Pariatur Ullam non ', 'Aut adipisicing quo ', 'Non necessitatibus n'),
(3, 'Error vel eiusmod co', '2020-07-12 20:54:00', '2020-07-12 20:54:00', 'Veniam aut quos ame', 'Id voluptatem dolor', 'Occaecat aspernatur ', 'Iure aliqua Beatae ', 'Reiciendis laborum i', 'Fugit voluptatem ut', 'Repudiandae aut reru', 'Odio dicta consequat', 'Officia duis quia qu');

-- --------------------------------------------------------

--
-- Structure de la table `evaluations_entreprises_clients`
--

CREATE TABLE `evaluations_entreprises_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ordre` int(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `evaluations_entreprises_clients`
--

INSERT INTO `evaluations_entreprises_clients` (`id`, `created_at`, `updated_at`, `question`, `ordre`, `description`) VALUES
(1, '2020-09-07 06:41:33', '2020-09-07 06:41:33', 'Qui est votre client?', 0, NULL),
(2, '2020-09-07 06:41:55', '2020-09-07 06:41:55', 'Qui est le premier client idéal? Qui pouvez-vous aider en premier?', 1, NULL),
(3, '2020-09-07 06:42:17', '2020-09-07 06:42:17', 'Avez-vous des moyens clairs pour atteindre votre marché cible? (Si vous avez une cible claire, cela peut vous conduire à des moyens très évidents d\'atteindre votre clientèle).', 2, NULL),
(4, '2020-09-07 06:42:30', '2020-09-07 06:42:30', 'La solution s\'adresse-t-elle à un profil client très spécifique?', 3, NULL),
(5, '2020-09-07 06:42:45', '2020-09-07 06:42:45', 'La solution est-elle bien définie et facilement compréhensible par le client cible?', 4, NULL),
(6, '2020-09-07 06:43:02', '2020-09-07 06:43:02', 'La solution est-elle claire pour votre client cible? Est-il clair ce qu\'il fera pour eux, comment\r\nils l\'utilisent ou pourquoi ils en ont besoin? (Définissez clairement le concept et la manière\r\ndont vous prévoyez de le démontrer, ainsi que les produits et services et comment vous\r\nprévoyez de les développer).', 5, NULL),
(7, '2020-09-07 06:43:23', '2020-09-07 06:43:23', 'Pourquoi les clients sont-ils motivés à acheter et à utiliser ce produit ou service?', 6, NULL),
(8, '2020-09-07 06:43:36', '2020-09-07 06:43:36', 'Le problème que vous attaquez est-il un problème majeur pour votre client cible?', 7, NULL),
(9, '2020-09-07 06:43:54', '2020-09-07 06:43:54', 'Votre solution respecte-t-elle le budget du marché cible?', 8, NULL),
(10, '2020-09-07 06:44:19', '2020-09-07 06:44:19', 'Comment sauront-ils si votre produit a résolu le problème?', 9, NULL),
(11, '2020-09-07 06:44:35', '2020-09-07 06:44:35', 'Qui tire le plus de valeur de votre produit?', 10, NULL),
(12, '2020-09-07 06:44:48', '2020-09-07 06:44:48', 'Sont-ils prêts à payer?', 11, NULL),
(13, '2020-09-07 06:45:01', '2020-09-07 06:45:01', 'Est-il facile pour votre client de trouver votre produit?', 12, NULL),
(14, '2020-09-07 06:45:37', '2020-09-07 06:45:37', 'Quel type de clients avez-vous et sont-ils réguliers?', 13, NULL),
(15, '2020-09-07 06:45:56', '2020-09-07 06:45:56', 'Avez-vous des références/clients ? leurs contacts ?', 14, NULL),
(16, '2020-09-07 06:46:30', '2020-09-07 06:46:30', 'Qui seront les clients et quelle est la taille de l\'opportunité de marché? Indiquez le marché\r\ntotal disponible, le segment que vous prévoyez de desservir et un calendrier qui montre\r\ncomment vous prévoyez d\'entrer et de capturer ce marché, au fil du temps. Expliquez toutes les hypothèses que vous avez faites.', 15, NULL),
(17, '2020-09-07 06:46:44', '2020-09-07 06:46:44', 'Que devez-vous faire pour avoir un client et combien cela vous coûte-t-il?', 16, NULL),
(18, '2020-09-07 06:47:00', '2020-09-07 06:47:00', 'De quels clients devriez-vous fuir?', 17, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `evaluations_entreprises_developpements`
--

CREATE TABLE `evaluations_entreprises_developpements` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ordre` int(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `evaluations_entreprises_developpements`
--

INSERT INTO `evaluations_entreprises_developpements` (`id`, `created_at`, `updated_at`, `question`, `ordre`, `description`) VALUES
(1, '2020-09-07 07:00:00', '2020-09-07 07:19:56', 'Y a-t-il une possibilité de devenir le meilleur dans votre domaine ?', 0, NULL),
(2, '2020-09-07 07:00:00', '2020-09-07 07:20:08', 'Est-ce dans des limites raisonnables que vous pourriez (à un moment donné) devenir le\r\nmeilleur ?', 1, NULL),
(3, '2020-09-07 07:01:00', '2020-09-07 07:20:51', 'Pouvez-vous être l\'un des meilleurs, avec le bon investissement?', 2, NULL),
(4, '2020-09-07 07:01:00', '2020-09-07 07:21:09', 'Avez-vous une propriété intellectuelle (IP) unique liée à votre solution? Avez-vous (ou allez-\r\nvous) faire des investissements importants qui contribueront à créer une barrière pour les\r\nconcurrents?', 3, NULL),
(5, '2020-09-07 07:01:00', '2020-09-07 07:21:33', 'Vous avez une position unique sur le marché grâce à des partenariats, des contrats ou une\r\nsituation géographique? Plus votre solution est défendable, mieux c\'est.', 4, NULL),
(6, '2020-09-07 07:01:00', '2020-09-07 07:21:59', 'Etes-vous dépendant d\'un partenaire, d\'un organisme de réglementation, d\'un client ou d\'un\r\nfabricant particulier pour cette activité?', 5, NULL),
(7, '2020-09-07 07:02:00', '2020-09-07 07:22:34', 'Dans quelle mesure êtes-vous dépendant des partenaires, fournisseurs, régulateurs, fabricants ou autres entreprises?', 6, NULL),
(8, '2020-09-07 07:02:00', '2020-09-07 07:23:22', 'Y a-t-il des obstacles techniques, de conception, d\'adoption ou de fabrication majeurs à\r\nrésoudre?', 7, NULL),
(9, '2020-09-07 07:02:00', '2020-09-07 07:24:14', 'Quelles sont les principales étapes du produit?', 8, NULL),
(10, '2020-09-07 07:03:00', '2020-09-07 07:24:38', 'Quelles sont les principales caractéristiques différenciées de votre produit ou service?', 9, NULL),
(11, '2020-09-07 07:03:00', '2020-09-07 07:25:46', 'Qu\'avez-vous appris des premières versions du produit ou du service?', 10, NULL),
(12, '2020-09-07 07:03:00', '2020-09-07 07:26:35', 'Quelles sont les deux ou trois fonctionnalités clés que vous prévoyez d\'ajouter?', 11, NULL),
(13, '2020-09-07 07:04:00', '2020-09-07 07:27:09', 'À quelle fréquence envisagez-vous d\'améliorer ou de mettre à jour le produit ou le service ?', 12, NULL),
(14, '2020-09-07 07:04:00', '2020-09-07 07:28:38', 'Quelle est la durée du cycle de développement de votre produit/service?', 13, NULL),
(15, '2020-09-07 07:05:00', '2020-09-07 07:29:17', 'Qui rédige les notes lors de votre réunion de développement produit?', 14, NULL),
(16, '2020-09-07 07:05:00', '2020-09-07 07:30:15', 'Quelle idée concrète améliorera le plus le KPI? Quel support? Quel facile?', 15, NULL),
(17, '2020-09-07 07:05:00', '2020-09-07 07:31:50', 'Quelle est la spécification du produit / fonctionnalité que nous voulons créer?', 16, NULL),
(18, '2020-09-07 07:06:00', '2020-09-07 07:32:15', 'Si l’on vous offre des financements, comment seront ils utilisés et quels progrès seront réalisés avec ces financements?', 17, NULL),
(19, '2020-09-07 07:06:00', '2020-09-07 07:32:53', 'L\'évolution prévue pour l\'entreprise est-elle réaliste?', 18, NULL),
(20, '2020-09-07 07:06:00', '2020-09-07 07:33:12', 'Les projections financières de l’entreprise sont-elles réalistes et intéressantes?', 19, NULL),
(21, '2020-09-07 07:06:00', '2020-09-07 07:33:35', 'Votre formation juridique est-elle propre et conforme aux lois applicables ?', 20, NULL),
(22, '2020-09-07 07:07:00', '2020-09-07 07:33:55', 'L\'entreprise a-t-elle une technologie différente ?', 21, NULL),
(23, '2020-09-07 07:07:00', '2020-09-07 07:34:21', 'Dans quelle mesure la technologie de l’entreprise est-elle différente ?', 22, NULL),
(24, '2020-09-07 07:07:00', '2020-09-07 07:35:49', 'Quels avantages compétitifs y aura-t-il par rapport à la technologie existante?', 23, NULL),
(25, '2020-09-07 07:08:00', '2020-09-07 07:36:29', 'Dans quelle mesure sera-t-il facile de reproduire la technologie ?', 24, NULL),
(26, '2020-09-07 07:08:00', '2020-09-07 07:37:19', 'Quel sera le coût de l\'intégration de la technologie dans chaque produit?', 25, NULL),
(27, '2020-09-07 07:37:56', '2020-09-07 07:37:56', 'Quelle est la propriété intellectuelle clé de l\'entreprise (brevets, brevets en instance, droits d\'auteur, secrets commerciaux, marques, noms de domaine)?', 26, NULL),
(28, '2020-09-07 07:38:23', '2020-09-07 07:38:23', 'Comment la propriété intellectuelle de l’entreprise a-t-elle été développée?', 27, NULL),
(29, '2020-09-07 07:38:40', '2020-09-07 07:38:40', 'La propriété intellectuelle appartient-elle correctement à l\'entreprise et tous les employés et consultants ont-ils cédé la propriété intellectuelle à l\'entreprise?', 28, NULL),
(30, '2020-09-07 07:38:55', '2020-09-07 07:38:55', 'Si la propriété intellectuelle a été développée dans une université ou grâce à des subventions\r\ngouvernementales ou avec une technologie open source, comment l\'entreprise a-t-elle le\r\ndroit d\'utiliser la technologie?', 29, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `evaluations_entreprises_performances`
--

CREATE TABLE `evaluations_entreprises_performances` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ordre` int(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `evaluations_entreprises_performances`
--

INSERT INTO `evaluations_entreprises_performances` (`id`, `created_at`, `updated_at`, `question`, `ordre`, `description`) VALUES
(1, '2020-09-07 07:11:46', '2020-09-07 07:11:46', 'L\'opportunité de marché est-elle grande?', 0, NULL),
(2, '2020-09-07 07:12:02', '2020-09-07 07:12:02', 'Quelles solutions, technologies ou entreprises actuelles ou futures peuvent concurrencer les vôtres sur le marché?', 1, NULL),
(3, '2020-09-07 07:12:00', '2020-09-07 07:12:29', 'Comment le vôtre est-il différencié? quelle est sa proposition de valeur unique par rapport à la concurrence; pourquoi votre solution va-t-elle gagner?', 2, NULL),
(4, '2020-09-07 07:12:44', '2020-09-07 07:12:44', 'Quelle propriété intellectuelle ou autres barrières à l\'entrée vous permettront de rester en avance sur la concurrence?', 3, NULL),
(5, '2020-09-07 07:12:59', '2020-09-07 07:12:59', 'La startup a-t-elle atteint des repères établis? Sinon, que faut-il faire pour remettre le démarrage sur la bonne voie?', 4, NULL),
(6, '2020-09-07 07:13:18', '2020-09-07 07:13:18', 'Votre entreprise a-t-elle généré des bénéfices significatifs sans investisseurs extérieurs?', 5, NULL),
(7, '2020-09-07 07:13:00', '2020-09-07 07:13:41', 'Pouvez-vous établir rapidement une position de leader sur votre marché cible sans capitaux importants?', 6, NULL),
(8, '2020-09-07 07:13:54', '2020-09-07 07:13:54', 'Votre marché cible disposera-t-il d\'un budget suffisant pour que votre produit soit évalué afin qu\'il puisse être distribué efficacement?', 7, NULL),
(9, '2020-09-07 07:14:11', '2020-09-07 07:14:11', 'Votre marché cible peut-il être un environnement à faible taux de désabonnement?', 8, NULL),
(10, '2020-09-07 07:14:33', '2020-09-07 07:14:33', 'Aimerez-vous travailler sur ce marché pendant de nombreuses années?', 9, NULL),
(11, '2020-09-07 07:15:09', '2020-09-07 07:15:09', 'Quelle première traction positive la société a-t-elle obtenue? (La création d\'un produit bêta ou peu viable, Clients initiaux ou pilotes, en particulier les clients de marque, Partenariats stratégiques, Témoignages de clients, Admission à des programmes compétitifs tels que Y Combinator ou d\'autres accélérateurs ou incubateurs technologiques).', 10, NULL),
(12, '2020-09-07 07:15:23', '2020-09-07 07:15:23', 'Quels sont selon vous les principaux risques pour l\'entreprise?', 11, NULL),
(13, '2020-09-07 07:15:39', '2020-09-07 07:15:39', 'Quels risques juridiques avez-vous? Le modèle commercial sera-t-il conforme aux lois applicables, y compris en élargissant la protection de la vie privée?', 12, NULL),
(14, '2020-09-07 07:15:54', '2020-09-07 07:15:54', 'Quels risques technologiques avez-vous?', 13, NULL),
(15, '2020-09-07 07:16:09', '2020-09-07 07:16:09', 'Avez-vous des risques réglementaires?', 14, NULL),
(16, '2020-09-07 07:16:23', '2020-09-07 07:16:23', 'Existe-t-il des risques de responsabilité du fait des produits?', 15, NULL),
(17, '2020-09-07 07:16:48', '2020-09-07 07:16:48', 'Quelles mesures prévoyez-vous prendre pour atténuer ces risques?', 16, NULL),
(18, '2020-09-07 07:17:00', '2020-09-07 07:17:00', 'Pourquoi le produit de l\'entreprise est-il excellent?', 17, NULL),
(19, '2020-09-07 07:17:22', '2020-09-07 07:17:22', 'Pourquoi les utilisateurs se soucient-ils de votre produit ou service?', 18, NULL),
(20, '2020-09-07 07:17:37', '2020-09-07 07:17:37', 'Qu\'utilisez-vous pour mesurer la manière dont les utilisateurs interagissent avec votre produit?', 19, NULL),
(21, '2020-09-07 07:17:58', '2020-09-07 07:17:58', 'Quels 5 à 10 paramètres mesurez-vous pour comprendre comment votre produit fonctionne? Pourquoi ces métriques?', 20, NULL),
(22, '2020-09-07 07:18:13', '2020-09-07 07:18:13', 'Lorsque vous créez un nouveau produit ou une nouvelle fonctionnalité, quelle est la métrique qui s\'améliorera grâce à cette fonctionnalité / produit?', 21, NULL),
(23, '2020-09-07 07:18:28', '2020-09-07 07:18:28', 'Quel chiffre suivez-vous pour montrer la performance de votre entreprise?', 22, NULL),
(24, '2020-09-07 07:18:51', '2020-09-07 07:18:51', 'Quel est votre KPI de niveau supérieur (revenus, utilisation)?', 23, NULL),
(25, '2020-09-07 07:19:07', '2020-09-07 07:19:07', 'Quelles sont les métriques sous-jacentes qui contribuent à atteindre votre KPI de haut niveau (nouveaux utilisateurs, rétention des utilisateurs, contenu créé => DAU sur Social Cam)?', 24, NULL),
(26, '2020-09-07 07:19:20', '2020-09-07 07:19:20', 'Laquelle de ces mesures essayez-vous de faire avancer ce cycle de développement?', 25, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `evaluations_entreprises_problemes`
--

CREATE TABLE `evaluations_entreprises_problemes` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ordre` int(11) NOT NULL DEFAULT 0,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `evaluations_entreprises_problemes`
--

INSERT INTO `evaluations_entreprises_problemes` (`id`, `created_at`, `updated_at`, `question`, `ordre`, `description`) VALUES
(1, '2020-09-07 06:33:46', '2020-09-07 06:33:46', 'Quel est votre secteur d’activité ?', 0, 'Specifier le secteur d\'activite de l\'entreprise'),
(2, '2020-09-07 06:34:07', '2020-09-07 06:34:07', 'Quel problème résolvez-vous ou voulez-vous résoudre ?', 1, NULL),
(3, '2020-09-07 06:35:10', '2020-09-07 06:35:10', 'Pouvez-vous énoncer clairement le problème en deux phrases?', 2, NULL),
(4, '2020-09-07 06:35:29', '2020-09-07 06:35:29', 'Quel problème sera résolu à la fin de de l’utilisation de vos produits ou vos services ?', 3, NULL),
(5, '2020-09-07 06:35:47', '2020-09-07 06:35:47', 'À quel problème difficile, besoin du marché ou point de douleur client répondez-vous?', 4, NULL),
(6, '2020-09-07 06:36:18', '2020-09-07 06:36:18', 'Pourquoi est-il important de résoudre ce problème en particulier?', 5, NULL),
(7, '2020-09-07 06:36:44', '2020-09-07 06:36:44', 'Pourquoi votre idée est-elle la meilleure solution?', 6, NULL),
(8, '2020-09-07 06:37:03', '2020-09-07 06:37:03', 'Pourquoi est-ce la solution la plus rentable?', 7, NULL),
(9, '2020-09-07 06:37:33', '2020-09-07 06:37:33', 'Quelle est votre solution unique au problème, comment fonctionne-t-elle et en quoi est-elle 10 fois meilleure que les autres solutions au problème?', 8, NULL),
(10, '2020-09-07 06:37:51', '2020-09-07 06:37:51', 'Quelle est la première indication que vos produits ou vos services fonctionnent ?', 9, NULL),
(11, '2020-09-07 06:38:13', '2020-09-07 06:38:13', 'A la fin de de l’utilisation de vos produits ou vos services, le problème est-il totalement\r\nrésolu ? reviendra-t-il ? Quel résultat attendons-nous?', 10, NULL),
(12, '2020-09-07 06:38:28', '2020-09-07 06:38:28', 'Quelle est l\'intensité du problème?', 11, NULL),
(13, '2020-09-07 06:39:10', '2020-09-07 06:39:10', 'Le marché est-il en croissance? Si c\'est énorme et que vous avez une bien meilleure solution, le potentiel est évidemment énorme. Regardez Uber. Cela a peut-être commencé dans un petit nombre de villes, mais l\'opportunité globale du marché était énorme - combien de personnes ont besoin de se déplacer dans les villes du monde?', 12, NULL),
(14, '2020-09-07 06:39:00', '2020-09-07 06:39:47', 'À quelle fréquence votre utilisateur rencontre-t-il le problème?', 13, NULL),
(15, '2020-09-07 06:40:01', '2020-09-07 06:40:01', 'Cette solution est-elle 10 fois meilleure que toutes les autres alternatives du marché?', 14, NULL),
(16, '2020-09-07 06:40:14', '2020-09-07 06:40:14', 'Votre solution nécessite-t-elle un écosystème unique ou est-ce déjà en place?', 21, NULL),
(17, '2020-09-07 06:40:28', '2020-09-07 06:40:28', 'Avez-vous rencontré le problème vous-même?', 16, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `evaluations_entreprises_produits`
--

CREATE TABLE `evaluations_entreprises_produits` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ordre` int(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `evaluations_entreprises_produits`
--

INSERT INTO `evaluations_entreprises_produits` (`id`, `created_at`, `updated_at`, `question`, `ordre`, `description`) VALUES
(1, '2020-09-07 06:49:26', '2020-09-07 06:49:26', 'Votre produit résout-il réellement le problème? Soyez honnête. Comment et pourquoi?', 0, NULL),
(2, '2020-09-07 06:49:39', '2020-09-07 06:49:39', 'Décrivez vos produits et/ou vos services', 1, NULL),
(3, '2020-09-07 06:49:57', '2020-09-07 06:49:57', 'Est-ce clair comment vous allez gagner de l\'argent?', 2, NULL),
(4, '2020-09-07 06:50:09', '2020-09-07 06:50:09', 'Quels sont leurs coûts fixes? (vos produits et/ou vos services)', 3, NULL),
(5, '2020-09-07 06:50:00', '2020-09-07 06:50:36', 'Quels sont leurs coûts variables? (vos produits et/ou vos services)', 4, NULL),
(6, '2020-09-07 06:51:10', '2020-09-07 06:51:10', 'Sont-ils rentables? (vos produits et/ou vos services)', 5, NULL),
(7, '2020-09-07 06:51:26', '2020-09-07 06:51:26', 'Faites-vous des réductions ou commencez avec un prix très bas? Envisagez-vous cette\r\napproche? Si oui, pourquoi?', 6, NULL),
(8, '2020-09-07 06:51:38', '2020-09-07 06:51:38', 'Quels sont les clients les plus désespérés, comment leur parlez-vous en premier?', 7, NULL),
(9, '2020-09-07 06:51:52', '2020-09-07 06:51:52', 'Comment trouvez-vous des personnes qui sont prêtes à utiliser vos «mauvaises» premières\r\nversions de votre produit?', 8, NULL),
(10, '2020-09-07 06:52:05', '2020-09-07 06:52:05', 'La vente est-elle complexe, nécessitant l\'adhésion de plusieurs personnes de l\'entreprise\r\ncible?', 9, NULL),
(11, '2020-09-07 06:52:17', '2020-09-07 06:52:17', 'Y a-t-il eu un test ou un exemple de volonté des clients de payer pour une solution similaire?', 10, NULL),
(12, '2020-09-07 06:52:30', '2020-09-07 06:52:30', 'Y a-t-il eu des preuves que les clients sont prêts à payer pour cette solution (ou une solution\r\nsimilaire)?', 11, NULL),
(13, '2020-09-07 06:52:43', '2020-09-07 06:52:43', 'L\'achat est-il ponctuel, récurrent ou périodique?', 12, NULL),
(14, '2020-09-07 06:53:01', '2020-09-07 06:53:01', 'S\'agit-il d\'un produit ou d\'un service qui se prête à une facturation périodique et continue (par exemple, logiciel de sécurité, stockage, analyse, assurance)?', 13, NULL),
(15, '2020-09-07 06:53:13', '2020-09-07 06:53:13', 'S\'agit-il d\'un produit ou d\'un service à acheter une fois (par exemple, photographe de\r\nmariage, achat d\'une maison, télévision, location de salle de banquet, etc.)?', 14, NULL),
(16, '2020-09-07 06:53:00', '2020-09-07 06:53:51', 'Quelle entreprise va cesser ses activités sans vous utiliser?', 15, NULL),
(17, '2020-09-07 06:54:30', '2020-09-07 06:54:30', 'Qui sont les fondateurs et les membres clés de l\'équipe? Quels sont leurs diplômes et expérience dans le domaine ? Pourquoi sont-ils particulièrement qualifiés pour diriger cette entreprise et livrer la solution sur le marché? Votre équipe possède-t-elle les compétences techniques nécessaires pour réussir?', 16, NULL),
(18, '2020-09-07 06:54:46', '2020-09-07 06:54:46', 'Avez-vous les connaissances et les relations nécessaires pour être un leader sur votre marché\r\ncible? Si vous ne possédez pas tous les outils dont vous avez besoin, êtes-vous dans une\r\nsituation où vous pouvez convaincre d\'autres personnes de rejoindre votre équipe et de\r\ncompléter ce tableau?', 17, NULL),
(19, '2020-09-07 06:55:10', '2020-09-07 06:55:10', 'Quels ajouts clés à l\'équipe sont nécessaires à court terme? Comment comptez-vous faire\r\névoluer l\'équipe au cours des 12 prochains mois? Y a-t-il des trous importants et comment\r\ncomptez-vous les combler ? Comment comptez-vous évoluer pour atteindre les objectifs de\r\nvotre plan d’affaires ?', 18, NULL),
(20, '2020-09-07 06:55:31', '2020-09-07 06:55:31', 'Pourquoi l’équipe est-elle particulièrement capable d’exécuter le plan d’affaires de l’entreprise?', 19, NULL),
(21, '2020-09-07 06:57:00', '2020-09-07 06:57:27', 'Combien d\'employés l\'entreprise compte-t-elle?', 20, NULL),
(22, '2020-09-07 06:57:53', '2020-09-07 06:57:53', 'Qu\'est-ce qui motive les fondateurs? Votre équipe a-t-elle le courage de persévérer dans les hauts et les bas? Les fondateurs sont-ils passionnés et déterminés? Se consacreront-ils à la croissance de l\'entreprise et feront-ils face aux inévitables défis?', 21, NULL),
(23, '2020-09-07 06:58:20', '2020-09-07 06:58:20', 'Les fondateurs comprennent-ils les données financières et les indicateurs clés de leur\r\nentreprise?', 22, NULL),
(24, '2020-09-07 06:58:38', '2020-09-07 06:58:38', 'Quelle sont la missions et la passion de votre entreprise ? Les employés les ont-ils compris et\r\nintégré ?', 23, NULL),
(25, '2020-09-07 06:59:00', '2020-09-07 06:59:18', 'Quels ressources, outils et informations directionnelles sont nécessaires pour concrétiser cette mission?', 24, NULL),
(26, '2020-09-07 06:59:34', '2020-09-07 06:59:34', 'Si nécessaire, votre équipe est-elle prête à s’adapter à de nouvelles conditions ou objectifs ?', 25, NULL),
(27, '2020-09-07 06:59:55', '2020-09-07 06:59:55', 'Avez-vous un business plan, un business model, des résultats ou prévisions pluriannuels et un plan de capitalisation indiquant le montant que vous prévoyez d’amasser ?', 26, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `experiences_professionnelles`
--

CREATE TABLE `experiences_professionnelles` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `poste` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `annee` int(11) NOT NULL,
  `duree` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_data` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `formations`
--

CREATE TABLE `formations` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categorie_id` int(11) DEFAULT NULL,
  `image_formation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prix` int(11) DEFAULT 0,
  `tag` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lien_video1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lien_video2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lien_video3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `formations`
--

INSERT INTO `formations` (`id`, `created_at`, `updated_at`, `nom`, `slug`, `status`, `description`, `categorie_id`, `image_formation`, `prix`, `tag`, `lien_video1`, `lien_video2`, `lien_video3`) VALUES
(1, '2020-06-24 08:22:00', '2020-09-02 13:15:13', 'MONTEZ SON CV PROFESSIONEL PAR AFRICKUP', 'montez-son-cv-professionel-par-africkup', 'option1', '<p>Que vous ayez envie de devenir plus tard votre propre patron ou d&rsquo;avoir plusieurs entr&eacute;es en parall&egrave;le, Commencer par obtenir un emploi bien r&eacute;mun&eacute;r&eacute;, est le meilleur moyen de <strong>financer</strong> la r&eacute;alisation de vos r&ecirc;ves.</p>\r\n<p>&nbsp;</p>\r\n<p>Whether you want to be your own boss later or want to have multiple entries in parallel, Getting a good paying job first is the best way to finance the fulfillment of your dreams.</p>', 1, 'formations/July2020/i0hjNoBnGHFB4Rt7h5rm.jpg', 0, 'formation-gratuite', 'xGvIdbB67Qs', NULL, NULL),
(2, '2020-06-29 07:35:00', '2020-09-02 13:18:28', 'REUSSIR SON ENTRETIEN PAR LE STORYTELLING', 'reussir-son-entretien-par-le-storytelling', 'option1', '<p>Apprenez les techniques du <strong>storytelling</strong> pour r&eacute;ussir votre entretien <strong>d&rsquo;embauche</strong> ou pr&eacute;sentation.</p>\r\n<p>&nbsp;</p>\r\n<p>Learn the techniques of <strong>storytelling</strong> to succeed in your <strong>job interview</strong> or presentation.</p>', 1, 'formations/June2020/T6WT9Ku399ijMDBDR0Pl.jpg', 0, 'formation-gratuite', '7pMZ0rAfX4I', NULL, NULL),
(3, '2020-06-29 14:33:00', '2020-09-02 13:30:31', 'CHOISIR SON IDEE DE BUSINESS', 'choisir-son-idee-de-business', 'option1', '<p>Vivez de votre passion et d&eacute;couvrez comment la diversifier pour avoir plusieurs <strong>sources de revenus</strong>. Choisissez un travail que vous aimez et vous n\'aurez pas &agrave; travailler un seul jour de votre vie. &ndash; <em><strong>Confucius</strong></em></p>\r\n<p>&nbsp;</p>\r\n<p>Make a living from your passion and discover how to diversify it to have several <strong>sources of revenue</strong>. Choose a job that you enjoy and you won\'t have to work a day in your life. &ndash; <em><strong>Confucius</strong></em></p>\r\n<p>&nbsp;</p>', 1, 'formations/July2020/ynH1YqH76tA2pLibqKyD.png', 0, 'formation-gratuite', 'WG84sMJVThI', 'j4V3Qi8OA68', 'N-WczFfF7pE'),
(4, '2020-06-29 14:35:00', '2020-09-02 13:32:51', 'SE LANCER DANS L\'ENTREPRENARIAT PAR AFRICKUP', 'se-lancer-dans-l-entreprenariat-par-africkup', 'option1', '<p>DEFINITION &ndash; MOTIVATION &ndash; ACTION</p>', 1, 'formations/June2020/ALudWaaI2Ds6OlzIZmNH.jpg', 0, 'formation-gratuite', 'bZXj4sLM7K8', 'RtjmeOQBs10', 'RrD7rp4uysY'),
(5, '2020-06-29 14:37:00', '2020-09-02 14:28:02', 'TRANSFORMER SON SAVOIR EN ARGENT', 'transformer-son-savoir-en-argent', 'option1', '<h5 style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 0.5rem; font-family: avenir; font-weight: 400; line-height: 1.2; color: #000000; font-size: 18px; text-transform: capitalize; text-align: left;\"><a style=\"box-sizing: border-box; outline: none 0px; color: #000000; text-decoration-line: none; background-color: transparent; transition: all 0.2s linear 0s;\" href=\"#\">TRANSFORMER SON SAVOIR EN ARGENT</a></h5>', 2, 'formations/June2020/FtFstkuXBP6Y3EE3kGxF.jpg', 10000, 'formation-payante', NULL, NULL, NULL),
(6, '2020-06-29 14:38:00', '2020-09-02 14:28:20', 'TAXER SES SERVICES OU SES PRODUITS', 'taxer-ses-services-ou-ses-produits', 'option1', '<h5 style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 0.5rem; font-family: avenir; font-weight: 400; line-height: 1.2; color: #000000; font-size: 18px; text-transform: capitalize; text-align: left;\"><a style=\"box-sizing: border-box; outline: none 0px; color: #000000; text-decoration-line: none; background-color: transparent; transition: all 0.2s linear 0s;\" href=\"#\">TAXER SES SERVICES OU SES PRODUITS</a></h5>', 2, 'formations/June2020/SOqRVxPO90ajUhuCSTkF.jpg', 10000, 'formation-payante', NULL, NULL, NULL),
(7, '2020-06-29 14:40:00', '2020-09-02 14:27:32', 'AMELIORER SON SERVICE CLIENTS', 'ameliorer-son-service-clients', 'option1', '<h5 style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 0.5rem; font-family: avenir; font-weight: 400; line-height: 1.2; color: #000000; font-size: 18px; text-transform: capitalize; text-align: left;\"><a style=\"box-sizing: border-box; outline: none 0px; color: #000000; text-decoration-line: none; background-color: transparent; transition: all 0.2s linear 0s;\" href=\"#\">AMELIORER SON SERVICE CLIENTS</a></h5>', 2, 'formations/June2020/QW3GTlHMNpqDzlodHxwP.jpg', 10000, 'formation-payante', NULL, NULL, NULL),
(8, '2020-06-29 14:42:00', '2020-09-02 14:27:05', 'INCUBATEUR D’ENTREPRISES ET DES STARTUP', 'incubateur-d-entreprises-et-des-startup', 'option1', NULL, 2, 'formations/June2020/I5sme781oFx9m6yjUfx5.jpg', 10000, 'formation-payante', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2020-06-14 19:05:25', '2020-06-14 19:05:25');

-- --------------------------------------------------------

--
-- Structure de la table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2020-06-14 19:05:25', '2020-08-24 07:44:47', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, 5, 7, '2020-06-14 19:05:25', '2020-06-15 21:56:51', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, 29, 1, '2020-06-14 19:05:25', '2020-08-24 07:44:33', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, 29, 3, '2020-06-14 19:05:26', '2020-09-01 15:15:42', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 6, '2020-06-14 19:05:26', '2020-09-07 05:23:08', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 1, '2020-06-14 19:05:26', '2020-06-15 21:52:49', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 2, '2020-06-14 19:05:26', '2020-06-15 21:52:49', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 3, '2020-06-14 19:05:26', '2020-06-15 21:52:49', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 4, '2020-06-14 19:05:26', '2020-06-15 21:52:49', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, 5, 6, '2020-06-14 19:05:26', '2020-06-15 21:56:37', 'voyager.settings.index', NULL),
(11, 1, 'Hooks', '', '_self', 'voyager-hook', NULL, 5, 5, '2020-06-14 19:05:32', '2020-06-15 21:52:49', 'voyager.hooks', NULL),
(20, 1, 'Categories Formations', '', '_self', 'voyager-categories', NULL, 30, 1, '2020-06-24 07:34:30', '2020-08-24 07:45:37', 'voyager.categories-formations.index', NULL),
(21, 1, 'Categories Services', '', '_self', 'voyager-categories', NULL, 30, 3, '2020-06-24 07:36:33', '2020-08-24 07:45:43', 'voyager.categories-services.index', NULL),
(22, 1, 'Formations', '', '_self', 'voyager-certificate', NULL, 30, 2, '2020-06-24 08:05:22', '2020-08-24 07:45:41', 'voyager.formations.index', NULL),
(23, 1, 'Services', '', '_self', 'voyager-wallet', '#000000', 30, 4, '2020-06-24 08:11:29', '2020-08-24 07:45:45', 'voyager.services.index', 'null'),
(24, 1, 'Entreprises', '', '_self', 'voyager-company', NULL, 30, 5, '2020-06-26 06:31:43', '2020-08-24 07:45:50', 'voyager.entreprises.index', NULL),
(25, 1, 'Configurations', '', '_self', 'voyager-edit', NULL, 31, 3, '2020-06-29 06:40:52', '2020-08-24 13:27:49', 'voyager.configurations.index', NULL),
(27, 1, 'Contacts', '', '_self', 'voyager-telephone', NULL, 30, 6, '2020-07-12 11:24:12', '2020-09-07 04:47:53', 'voyager.contacts.index', NULL),
(29, 1, 'Gestion des Utilisateurs', '', '_self', 'voyager-people', '#000000', NULL, 2, '2020-08-24 07:44:07', '2020-08-24 07:47:58', NULL, ''),
(30, 1, 'Gestion des données', '', '_self', 'voyager-folder', '#000000', NULL, 3, '2020-08-24 07:45:18', '2020-08-24 07:48:20', NULL, ''),
(31, 1, 'Gestion du site', '', '_self', 'voyager-file-text', '#000000', NULL, 5, '2020-08-24 08:15:09', '2020-09-07 05:23:08', NULL, ''),
(35, 1, 'Banniere Accueils', '', '_self', 'voyager-images', NULL, 31, 1, '2020-08-24 09:55:53', '2020-08-24 13:27:43', 'voyager.banniere-accueils.index', NULL),
(36, 1, 'Temoignages', '', '_self', 'voyager-thumbs-up', NULL, 31, 2, '2020-08-24 13:24:11', '2020-08-24 13:27:49', 'voyager.temoignages.index', NULL),
(37, 1, 'Donnees Comptes', '', '_self', 'voyager-people', NULL, 29, 2, '2020-09-01 14:32:15', '2020-09-01 15:15:41', 'voyager.donnees-comptes.index', NULL),
(38, 1, 'Competences', '', '_self', 'voyager-list', NULL, 29, 4, '2020-09-01 21:26:32', '2020-09-01 21:35:31', 'voyager.competences.index', NULL),
(39, 1, 'Cursus Academiques', '', '_self', 'voyager-company', NULL, 29, 5, '2020-09-01 21:30:35', '2020-09-01 21:35:39', 'voyager.cursus-academiques.index', NULL),
(40, 1, 'References', '', '_self', 'voyager-file-text', NULL, 29, 6, '2020-09-01 21:32:45', '2020-09-01 21:35:46', 'voyager.references.index', NULL),
(41, 1, 'Experiences Professionnelles', '', '_self', 'voyager-list-add', NULL, 29, 7, '2020-09-01 21:34:30', '2020-09-01 21:35:54', 'voyager.experiences-professionnelles.index', NULL),
(43, 1, 'Evaluations Entreprises', '', '_self', 'voyager-zoom-in', '#000000', NULL, 4, '2020-09-07 04:52:07', '2020-09-07 04:53:00', NULL, ''),
(44, 1, 'Questions Clients', '', '_self', 'voyager-question', '#000000', 43, 2, '2020-09-07 05:09:59', '2020-09-07 05:25:37', 'voyager.evaluations-entreprises-clients.index', 'null'),
(45, 1, 'Questions Développements', '', '_self', 'voyager-question', '#000000', 43, 5, '2020-09-07 05:11:23', '2020-09-07 07:19:33', 'voyager.evaluations-entreprises-developpements.index', 'null'),
(46, 1, 'Questions Performances', '', '_self', 'voyager-question', '#000000', 43, 4, '2020-09-07 05:13:20', '2020-09-07 07:19:33', 'voyager.evaluations-entreprises-performances.index', 'null'),
(47, 1, 'Questions Problemes', '', '_self', 'voyager-question', '#000000', 43, 1, '2020-09-07 05:14:20', '2020-09-07 05:25:17', 'voyager.evaluations-entreprises-problemes.index', 'null'),
(48, 1, 'Questions Produits', '', '_self', 'voyager-question', '#000000', 43, 3, '2020-09-07 05:22:20', '2020-09-07 06:48:10', 'voyager.evaluations-entreprises-produits.index', 'null');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2016_01_01_000000_add_voyager_user_fields', 1),
(3, '2016_01_01_000000_create_data_types_table', 1),
(4, '2016_05_19_173453_create_menu_table', 1),
(5, '2016_10_21_190000_create_roles_table', 1),
(6, '2016_10_21_190000_create_settings_table', 1),
(7, '2016_11_30_135954_create_permission_table', 1),
(8, '2016_11_30_141208_create_permission_role_table', 1),
(9, '2016_12_26_201236_data_types__add__server_side', 1),
(10, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(11, '2017_01_14_005015_create_translations_table', 1),
(12, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(13, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(14, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(15, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(16, '2017_08_05_000000_add_group_to_settings_table', 1),
(17, '2017_11_26_013050_add_user_role_relationship', 1),
(18, '2017_11_26_015000_create_user_roles_table', 1),
(19, '2018_03_11_000000_add_user_settings', 1),
(20, '2018_03_14_000000_add_details_to_data_types_table', 1),
(21, '2018_03_16_000000_make_settings_value_nullable', 1),
(22, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2020-06-14 19:05:26', '2020-06-14 19:05:26'),
(2, 'browse_bread', NULL, '2020-06-14 19:05:27', '2020-06-14 19:05:27'),
(3, 'browse_database', NULL, '2020-06-14 19:05:27', '2020-06-14 19:05:27'),
(4, 'browse_media', NULL, '2020-06-14 19:05:27', '2020-06-14 19:05:27'),
(5, 'browse_compass', NULL, '2020-06-14 19:05:27', '2020-06-14 19:05:27'),
(6, 'browse_menus', 'menus', '2020-06-14 19:05:27', '2020-06-14 19:05:27'),
(7, 'read_menus', 'menus', '2020-06-14 19:05:27', '2020-06-14 19:05:27'),
(8, 'edit_menus', 'menus', '2020-06-14 19:05:27', '2020-06-14 19:05:27'),
(9, 'add_menus', 'menus', '2020-06-14 19:05:27', '2020-06-14 19:05:27'),
(10, 'delete_menus', 'menus', '2020-06-14 19:05:27', '2020-06-14 19:05:27'),
(11, 'browse_roles', 'roles', '2020-06-14 19:05:27', '2020-06-14 19:05:27'),
(12, 'read_roles', 'roles', '2020-06-14 19:05:28', '2020-06-14 19:05:28'),
(13, 'edit_roles', 'roles', '2020-06-14 19:05:28', '2020-06-14 19:05:28'),
(14, 'add_roles', 'roles', '2020-06-14 19:05:28', '2020-06-14 19:05:28'),
(15, 'delete_roles', 'roles', '2020-06-14 19:05:28', '2020-06-14 19:05:28'),
(16, 'browse_users', 'users', '2020-06-14 19:05:28', '2020-06-14 19:05:28'),
(17, 'read_users', 'users', '2020-06-14 19:05:28', '2020-06-14 19:05:28'),
(18, 'edit_users', 'users', '2020-06-14 19:05:28', '2020-06-14 19:05:28'),
(19, 'add_users', 'users', '2020-06-14 19:05:28', '2020-06-14 19:05:28'),
(20, 'delete_users', 'users', '2020-06-14 19:05:28', '2020-06-14 19:05:28'),
(21, 'browse_settings', 'settings', '2020-06-14 19:05:28', '2020-06-14 19:05:28'),
(22, 'read_settings', 'settings', '2020-06-14 19:05:28', '2020-06-14 19:05:28'),
(23, 'edit_settings', 'settings', '2020-06-14 19:05:28', '2020-06-14 19:05:28'),
(24, 'add_settings', 'settings', '2020-06-14 19:05:28', '2020-06-14 19:05:28'),
(25, 'delete_settings', 'settings', '2020-06-14 19:05:28', '2020-06-14 19:05:28'),
(26, 'browse_hooks', NULL, '2020-06-14 19:05:32', '2020-06-14 19:05:32'),
(67, 'browse_categories_formations', 'categories_formations', '2020-06-24 07:34:30', '2020-06-24 07:34:30'),
(68, 'read_categories_formations', 'categories_formations', '2020-06-24 07:34:30', '2020-06-24 07:34:30'),
(69, 'edit_categories_formations', 'categories_formations', '2020-06-24 07:34:30', '2020-06-24 07:34:30'),
(70, 'add_categories_formations', 'categories_formations', '2020-06-24 07:34:30', '2020-06-24 07:34:30'),
(71, 'delete_categories_formations', 'categories_formations', '2020-06-24 07:34:30', '2020-06-24 07:34:30'),
(72, 'browse_categories_services', 'categories_services', '2020-06-24 07:36:33', '2020-06-24 07:36:33'),
(73, 'read_categories_services', 'categories_services', '2020-06-24 07:36:33', '2020-06-24 07:36:33'),
(74, 'edit_categories_services', 'categories_services', '2020-06-24 07:36:33', '2020-06-24 07:36:33'),
(75, 'add_categories_services', 'categories_services', '2020-06-24 07:36:33', '2020-06-24 07:36:33'),
(76, 'delete_categories_services', 'categories_services', '2020-06-24 07:36:33', '2020-06-24 07:36:33'),
(77, 'browse_formations', 'formations', '2020-06-24 08:05:22', '2020-06-24 08:05:22'),
(78, 'read_formations', 'formations', '2020-06-24 08:05:22', '2020-06-24 08:05:22'),
(79, 'edit_formations', 'formations', '2020-06-24 08:05:22', '2020-06-24 08:05:22'),
(80, 'add_formations', 'formations', '2020-06-24 08:05:22', '2020-06-24 08:05:22'),
(81, 'delete_formations', 'formations', '2020-06-24 08:05:22', '2020-06-24 08:05:22'),
(82, 'browse_services', 'services', '2020-06-24 08:11:28', '2020-06-24 08:11:28'),
(83, 'read_services', 'services', '2020-06-24 08:11:28', '2020-06-24 08:11:28'),
(84, 'edit_services', 'services', '2020-06-24 08:11:29', '2020-06-24 08:11:29'),
(85, 'add_services', 'services', '2020-06-24 08:11:29', '2020-06-24 08:11:29'),
(86, 'delete_services', 'services', '2020-06-24 08:11:29', '2020-06-24 08:11:29'),
(87, 'browse_entreprises', 'entreprises', '2020-06-26 06:31:43', '2020-06-26 06:31:43'),
(88, 'read_entreprises', 'entreprises', '2020-06-26 06:31:43', '2020-06-26 06:31:43'),
(89, 'edit_entreprises', 'entreprises', '2020-06-26 06:31:43', '2020-06-26 06:31:43'),
(90, 'add_entreprises', 'entreprises', '2020-06-26 06:31:43', '2020-06-26 06:31:43'),
(91, 'delete_entreprises', 'entreprises', '2020-06-26 06:31:43', '2020-06-26 06:31:43'),
(92, 'browse_configurations', 'configurations', '2020-06-29 06:40:52', '2020-06-29 06:40:52'),
(93, 'read_configurations', 'configurations', '2020-06-29 06:40:52', '2020-06-29 06:40:52'),
(94, 'edit_configurations', 'configurations', '2020-06-29 06:40:52', '2020-06-29 06:40:52'),
(95, 'add_configurations', 'configurations', '2020-06-29 06:40:52', '2020-06-29 06:40:52'),
(96, 'delete_configurations', 'configurations', '2020-06-29 06:40:52', '2020-06-29 06:40:52'),
(97, 'browse_banniere_accueil', 'banniere_accueil', '2020-08-24 08:17:54', '2020-08-24 08:17:54'),
(98, 'read_banniere_accueil', 'banniere_accueil', '2020-08-24 08:17:54', '2020-08-24 08:17:54'),
(99, 'edit_banniere_accueil', 'banniere_accueil', '2020-08-24 08:17:54', '2020-08-24 08:17:54'),
(100, 'add_banniere_accueil', 'banniere_accueil', '2020-08-24 08:17:54', '2020-08-24 08:17:54'),
(101, 'delete_banniere_accueil', 'banniere_accueil', '2020-08-24 08:17:54', '2020-08-24 08:17:54'),
(112, 'browse_banniere_accueils', 'banniere_accueils', '2020-08-24 09:55:53', '2020-08-24 09:55:53'),
(113, 'read_banniere_accueils', 'banniere_accueils', '2020-08-24 09:55:53', '2020-08-24 09:55:53'),
(114, 'edit_banniere_accueils', 'banniere_accueils', '2020-08-24 09:55:53', '2020-08-24 09:55:53'),
(115, 'add_banniere_accueils', 'banniere_accueils', '2020-08-24 09:55:53', '2020-08-24 09:55:53'),
(116, 'delete_banniere_accueils', 'banniere_accueils', '2020-08-24 09:55:53', '2020-08-24 09:55:53'),
(117, 'browse_temoignages', 'temoignages', '2020-08-24 13:24:10', '2020-08-24 13:24:10'),
(118, 'read_temoignages', 'temoignages', '2020-08-24 13:24:10', '2020-08-24 13:24:10'),
(119, 'edit_temoignages', 'temoignages', '2020-08-24 13:24:10', '2020-08-24 13:24:10'),
(120, 'add_temoignages', 'temoignages', '2020-08-24 13:24:10', '2020-08-24 13:24:10'),
(121, 'delete_temoignages', 'temoignages', '2020-08-24 13:24:10', '2020-08-24 13:24:10'),
(122, 'browse_donnees_comptes', 'donnees_comptes', '2020-09-01 14:32:15', '2020-09-01 14:32:15'),
(123, 'read_donnees_comptes', 'donnees_comptes', '2020-09-01 14:32:15', '2020-09-01 14:32:15'),
(124, 'edit_donnees_comptes', 'donnees_comptes', '2020-09-01 14:32:15', '2020-09-01 14:32:15'),
(125, 'add_donnees_comptes', 'donnees_comptes', '2020-09-01 14:32:15', '2020-09-01 14:32:15'),
(126, 'delete_donnees_comptes', 'donnees_comptes', '2020-09-01 14:32:15', '2020-09-01 14:32:15'),
(127, 'browse_competences', 'competences', '2020-09-01 21:26:32', '2020-09-01 21:26:32'),
(128, 'read_competences', 'competences', '2020-09-01 21:26:32', '2020-09-01 21:26:32'),
(129, 'edit_competences', 'competences', '2020-09-01 21:26:32', '2020-09-01 21:26:32'),
(130, 'add_competences', 'competences', '2020-09-01 21:26:32', '2020-09-01 21:26:32'),
(131, 'delete_competences', 'competences', '2020-09-01 21:26:32', '2020-09-01 21:26:32'),
(132, 'browse_cursus_academiques', 'cursus_academiques', '2020-09-01 21:30:35', '2020-09-01 21:30:35'),
(133, 'read_cursus_academiques', 'cursus_academiques', '2020-09-01 21:30:35', '2020-09-01 21:30:35'),
(134, 'edit_cursus_academiques', 'cursus_academiques', '2020-09-01 21:30:35', '2020-09-01 21:30:35'),
(135, 'add_cursus_academiques', 'cursus_academiques', '2020-09-01 21:30:35', '2020-09-01 21:30:35'),
(136, 'delete_cursus_academiques', 'cursus_academiques', '2020-09-01 21:30:35', '2020-09-01 21:30:35'),
(137, 'browse_references', 'references', '2020-09-01 21:32:45', '2020-09-01 21:32:45'),
(138, 'read_references', 'references', '2020-09-01 21:32:45', '2020-09-01 21:32:45'),
(139, 'edit_references', 'references', '2020-09-01 21:32:45', '2020-09-01 21:32:45'),
(140, 'add_references', 'references', '2020-09-01 21:32:45', '2020-09-01 21:32:45'),
(141, 'delete_references', 'references', '2020-09-01 21:32:45', '2020-09-01 21:32:45'),
(142, 'browse_experiences_professionnelles', 'experiences_professionnelles', '2020-09-01 21:34:30', '2020-09-01 21:34:30'),
(143, 'read_experiences_professionnelles', 'experiences_professionnelles', '2020-09-01 21:34:30', '2020-09-01 21:34:30'),
(144, 'edit_experiences_professionnelles', 'experiences_professionnelles', '2020-09-01 21:34:30', '2020-09-01 21:34:30'),
(145, 'add_experiences_professionnelles', 'experiences_professionnelles', '2020-09-01 21:34:30', '2020-09-01 21:34:30'),
(146, 'delete_experiences_professionnelles', 'experiences_professionnelles', '2020-09-01 21:34:30', '2020-09-01 21:34:30'),
(147, 'browse_evaluations_entreprises_clients', 'evaluations_entreprises_clients', '2020-09-07 05:09:59', '2020-09-07 05:09:59'),
(148, 'read_evaluations_entreprises_clients', 'evaluations_entreprises_clients', '2020-09-07 05:09:59', '2020-09-07 05:09:59'),
(149, 'edit_evaluations_entreprises_clients', 'evaluations_entreprises_clients', '2020-09-07 05:09:59', '2020-09-07 05:09:59'),
(150, 'add_evaluations_entreprises_clients', 'evaluations_entreprises_clients', '2020-09-07 05:09:59', '2020-09-07 05:09:59'),
(151, 'delete_evaluations_entreprises_clients', 'evaluations_entreprises_clients', '2020-09-07 05:09:59', '2020-09-07 05:09:59'),
(152, 'browse_evaluations_entreprises_developpements', 'evaluations_entreprises_developpements', '2020-09-07 05:11:23', '2020-09-07 05:11:23'),
(153, 'read_evaluations_entreprises_developpements', 'evaluations_entreprises_developpements', '2020-09-07 05:11:23', '2020-09-07 05:11:23'),
(154, 'edit_evaluations_entreprises_developpements', 'evaluations_entreprises_developpements', '2020-09-07 05:11:23', '2020-09-07 05:11:23'),
(155, 'add_evaluations_entreprises_developpements', 'evaluations_entreprises_developpements', '2020-09-07 05:11:23', '2020-09-07 05:11:23'),
(156, 'delete_evaluations_entreprises_developpements', 'evaluations_entreprises_developpements', '2020-09-07 05:11:23', '2020-09-07 05:11:23'),
(157, 'browse_evaluations_entreprises_performances', 'evaluations_entreprises_performances', '2020-09-07 05:13:20', '2020-09-07 05:13:20'),
(158, 'read_evaluations_entreprises_performances', 'evaluations_entreprises_performances', '2020-09-07 05:13:20', '2020-09-07 05:13:20'),
(159, 'edit_evaluations_entreprises_performances', 'evaluations_entreprises_performances', '2020-09-07 05:13:20', '2020-09-07 05:13:20'),
(160, 'add_evaluations_entreprises_performances', 'evaluations_entreprises_performances', '2020-09-07 05:13:20', '2020-09-07 05:13:20'),
(161, 'delete_evaluations_entreprises_performances', 'evaluations_entreprises_performances', '2020-09-07 05:13:20', '2020-09-07 05:13:20'),
(162, 'browse_evaluations_entreprises_problemes', 'evaluations_entreprises_problemes', '2020-09-07 05:14:20', '2020-09-07 05:14:20'),
(163, 'read_evaluations_entreprises_problemes', 'evaluations_entreprises_problemes', '2020-09-07 05:14:20', '2020-09-07 05:14:20'),
(164, 'edit_evaluations_entreprises_problemes', 'evaluations_entreprises_problemes', '2020-09-07 05:14:20', '2020-09-07 05:14:20'),
(165, 'add_evaluations_entreprises_problemes', 'evaluations_entreprises_problemes', '2020-09-07 05:14:20', '2020-09-07 05:14:20'),
(166, 'delete_evaluations_entreprises_problemes', 'evaluations_entreprises_problemes', '2020-09-07 05:14:20', '2020-09-07 05:14:20'),
(167, 'browse_evaluations_entreprises_produits', 'evaluations_entreprises_produits', '2020-09-07 05:22:20', '2020-09-07 05:22:20'),
(168, 'read_evaluations_entreprises_produits', 'evaluations_entreprises_produits', '2020-09-07 05:22:20', '2020-09-07 05:22:20'),
(169, 'edit_evaluations_entreprises_produits', 'evaluations_entreprises_produits', '2020-09-07 05:22:20', '2020-09-07 05:22:20'),
(170, 'add_evaluations_entreprises_produits', 'evaluations_entreprises_produits', '2020-09-07 05:22:20', '2020-09-07 05:22:20'),
(171, 'delete_evaluations_entreprises_produits', 'evaluations_entreprises_produits', '2020-09-07 05:22:20', '2020-09-07 05:22:20');

-- --------------------------------------------------------

--
-- Structure de la table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1),
(72, 1),
(73, 1),
(74, 1),
(75, 1),
(76, 1),
(77, 1),
(78, 1),
(79, 1),
(80, 1),
(81, 1),
(82, 1),
(83, 1),
(84, 1),
(85, 1),
(86, 1),
(87, 1),
(88, 1),
(89, 1),
(90, 1),
(91, 1),
(92, 1),
(93, 1),
(94, 1),
(95, 1),
(96, 1),
(97, 1),
(98, 1),
(99, 1),
(100, 1),
(101, 1),
(112, 1),
(113, 1),
(114, 1),
(115, 1),
(116, 1),
(117, 1),
(118, 1),
(119, 1),
(120, 1),
(121, 1),
(122, 1),
(123, 1),
(124, 1),
(125, 1),
(126, 1),
(127, 1),
(128, 1),
(129, 1),
(130, 1),
(131, 1),
(132, 1),
(133, 1),
(134, 1),
(135, 1),
(136, 1),
(137, 1),
(138, 1),
(139, 1),
(140, 1),
(141, 1),
(142, 1),
(143, 1),
(144, 1),
(145, 1),
(146, 1),
(147, 1),
(148, 1),
(149, 1),
(150, 1),
(151, 1),
(152, 1),
(153, 1),
(154, 1),
(155, 1),
(156, 1),
(157, 1),
(158, 1),
(159, 1),
(160, 1),
(161, 1),
(162, 1),
(163, 1),
(164, 1),
(165, 1),
(166, 1),
(167, 1),
(168, 1),
(169, 1),
(170, 1),
(171, 1);

-- --------------------------------------------------------

--
-- Structure de la table `references`
--

CREATE TABLE `references` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descriptif` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_data` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2020-06-14 19:05:26', '2020-06-14 19:05:26'),
(2, 'user', 'Normal User', '2020-06-14 19:05:26', '2020-06-14 19:05:26');

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_service` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categorie_id` int(11) DEFAULT NULL,
  `prix` int(11) DEFAULT 0,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_facturation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`id`, `created_at`, `updated_at`, `nom`, `slug`, `description`, `image_service`, `status`, `categorie_id`, `prix`, `tag`, `type_facturation`) VALUES
(2, '2020-06-24 22:26:00', '2020-09-03 03:43:19', 'EVALUATION DE VOTRE ENTREPRISE', 'evaluation-de-votre-entreprise', '<p><span style=\"font-family: Times New Roman, serif;\"><span style=\"font-size: 16px;\">&laquo; Estimez la <strong>valeur de votre entreprise</strong> et managez vos risques grace &agrave; quelques </span></span><span style=\"font-family: Times New Roman, serif;\"><span style=\"font-size: 16px;\">questions simples. Vous recevrez ensuite (72h), votre <strong>rapport d&rsquo;&eacute;valuation </strong></span></span><span style=\"font-family: Times New Roman, serif;\"><span style=\"font-size: 16px;\"><strong>complet</strong>.&nbsp;Nous vous offrons une &eacute;valuation de votre id&eacute;e de business avec quelques </span></span><span style=\"font-family: Times New Roman, serif;\"><span style=\"font-size: 16px;\">propositions d&rsquo;am&eacute;liorations.&nbsp; Contactez-nous.</span></span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-family: Times New Roman, serif;\"><span style=\"font-size: 16px;\">We offer you an <strong>evaluation of your business</strong> idea with some suggestions for </span></span><span style=\"font-family: Times New Roman, serif;\"><span style=\"font-size: 16px;\"><strong>improvements</strong>.&rdquo;</span></span></p>\r\n<p>&nbsp;</p>', 'services/July2020/CD6WG8T1rKj0KCK6iJC1.jpg', 'publie', 2, 10000, 'service_payant', 'rapport'),
(4, '2020-06-29 10:08:00', '2020-09-03 03:32:11', 'STATUT VERIFIE POUR LES ENTREPRISES', 'statut-verifie-pour-les-entreprises', '<h5 style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 0.5rem; font-family: avenir; font-weight: 400; line-height: 1.2; color: #000000; font-size: 18px; text-transform: capitalize; text-align: left;\"><span style=\"color: #000000; font-family: avenir;\"><span style=\"font-size: 18px; font-weight: 400; text-transform: capitalize;\">Seules les entreprises portant la mention <strong>VERIFIE</strong>, ont &eacute;t&eacute; tester par </span></span><span style=\"color: #000000; font-family: avenir;\"><span style=\"font-size: 18px; font-weight: 400; text-transform: capitalize;\"><strong>Africkup</strong> et sont <strong>100% africaines</strong>.</span></span></h5>\r\n<h5 style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 0.5rem; font-family: avenir; font-weight: 400; line-height: 1.2; color: #000000; font-size: 18px; text-transform: capitalize; text-align: left;\">&nbsp;</h5>\r\n<h5 style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 0.5rem; font-family: avenir; font-weight: 400; line-height: 1.2; color: #000000; font-size: 18px; text-transform: capitalize; text-align: left;\"><span style=\"color: #000000; font-family: avenir;\"><span style=\"font-size: 18px; font-weight: 400; text-transform: capitalize;\">Only companies marked <strong>VERIFIED</strong>, have been tested by <strong>Africkup</strong> and </span></span><span style=\"color: #000000; font-family: avenir;\"><span style=\"font-size: 18px; font-weight: 400; text-transform: capitalize;\">are <strong>100% African</strong>.</span></span></h5>', 'services/June2020/HOTbsrRnR1ce3OiLI3AS.jpg', 'publie', 2, 10000, 'service_payant', 'mois'),
(5, '2020-06-29 10:10:00', '2020-09-03 03:28:45', 'VOTRE PUBLICITÉ SUR NOS PLATEFORMES', 'votre-publicite-sur-nos-plateformes', '<p>Int&eacute;ress&eacute; &agrave; promouvoir votre entreprise sur <em><strong>Africkup.com</strong></em>? FAITES DE LA <strong>PUBLICIT&Eacute;</strong> AVEC NOUS.</p>\r\n<p>Interested in promoting your business on <em><strong>Africkup.com</strong></em>? <strong>ADVERTISE</strong> WITH US.</p>', 'services/June2020/a0Cu42i64LdeqKHbHbuL.jpg', 'publie', 2, 10000, 'service_payant', 'mois'),
(6, '2020-06-29 10:11:00', '2020-09-03 03:25:45', 'ETUDES TECHNIQUES DE VOS PROJETS', 'etudes-techniques-de-vos-projets', '<p><span style=\"color: #000000;\">Grace &agrave; nos &eacute;tudes, nous testons en profondeur vos id&eacute;e et r&eacute;duisons </span><span style=\"color: #000000;\">les <strong>incertitudes</strong> ainsi que les <strong>risques</strong> : c\'est le meilleur moyen de </span><span style=\"color: #000000;\">conna&icirc;tre vos chances de succ&egrave;s et mettre en place une <strong>meilleure </strong></span><span style=\"color: #000000;\"><strong>strat&eacute;gies</strong>.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"color: #000000;\">Thanks to our studies, we thoroughly test your idea and reduce the </span><span style=\"color: #000000;\"><strong>uncertainties</strong> as well as the <strong>risks</strong>: it is the best way to know your </span><span style=\"color: #000000;\">chances of success and to put in place a <strong>better strategies</strong>.</span></p>', 'services/July2020/xBb3jFMMlwrFRz6PWXxC.jpg', 'publie', 2, 30000, 'service_payant', 'a_partir_de'),
(7, '2020-07-03 20:00:00', '2020-09-03 03:23:25', 'AIDE A LA CREATION D’ENTREPRISE', 'aide-a-la-creation-d-entreprise', '<p>Nous avons la maitrise dans la <strong>cr&eacute;ation d&rsquo;entreprise</strong>, nous vous conseillerons sur le statut <strong>juridique</strong> qui vous est adapt&eacute; et toute la <strong>proc&eacute;dure</strong>.</p>\r\n<p>&nbsp;</p>\r\n<p>We have mastery in <strong>setting up a business</strong>, we will advise you on the <strong>legal status</strong> that is suitable for you and the entire <strong>procedure</strong>.</p>', 'services/July2020/xPZs0lgo8nlguH7z9BB6.jpg', 'publie', 2, 30000, 'service_payant', 'a_partir_de'),
(8, '2020-07-03 20:10:00', '2020-09-03 03:21:48', 'MARKETING DIGITAL PERSONNALISE', 'marketing-digital-personnalise', '<p>Nous vous&nbsp; aidons &agrave; d&eacute;velopper l\'image de votre <strong>entreprise</strong> sur <strong>Internet</strong> pour ainsi assoir votre cr&eacute;dibilit&eacute; sur le web. Si Internet parle de vous via diff&eacute;rents canaux, vous vous d&eacute;marquez aupr&egrave;s de vos <strong>clients</strong>.</p>\r\n<p>&nbsp;</p>\r\n<p>We help you to develop the image of your <strong>company</strong> on the <strong>Internet</strong> so as to establish your credibility on the web. If the Internet talks about you through different channels, you stand out among your <strong>customers</strong>.</p>\r\n<p>&nbsp;</p>', 'services/July2020/IU1U6PiAnH0FSkzzH4Dz.jpg', 'publie', 2, 50000, 'service_payant', 'a_partir_de'),
(9, '2020-09-03 03:50:47', '2020-09-03 03:50:47', 'Mise en relation – Organisation déjeuners d’affaires', 'mise-en-relation-organisation-dejeuners-d-affaires', '<p>vous avez un <strong>projet</strong> pr&eacute;cis et vous recherchez un <strong>partenaire</strong> ou <strong>expert</strong> ?</p>\r\n<p>Vous &ecirc;tes dans une ville pr&eacute;cise et aimerez qu&rsquo;on vous organise un <strong>&eacute;v&egrave;nement</strong> ou un <strong>d&eacute;jeuner</strong> avec des <strong>potentiels partenaires</strong>.</p>', 'services/September2020/jnmp3eUfFx9cqRXY641L.jpeg', 'publie', 2, 10000, 'service_payant', 'mois'),
(10, '2020-09-03 03:53:43', '2020-09-03 03:53:43', 'listing sur nos plateformes', 'listing-sur-nos-plateformes', '<p>Nous aidons les clients &agrave; vous trouver en ligne en vous aidant &agrave; cr&eacute;er <strong>UN PROFIL GRATUIT</strong>, lien contactez-nous.</p>\r\n<p>&nbsp;</p>\r\n<p>We help customers find your business online by helping you create <strong>A FREE COMPANY PROFILE</strong>.</p>', 'services/September2020/UqcktDrltD8XzO4wQcvd.jpg', 'publie', 1, 0, 'service_gratuit', 'a_partir_de');

-- --------------------------------------------------------

--
-- Structure de la table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', NULL, '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', 'settings/June2020/yUf7Odsa15kVPwPDoZFf.jpg', '', 'image', 5, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Welcome to Afriqup', '', 'text', 1, 'Admin'),
(8, 'admin.loader', 'Admin Loader', 'settings/June2020/8LxDfCarKkAmOvh0S8H5.png', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', 'settings/June2020/8Tm2Sk3m8YTONcM7WDis.png', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', NULL, '', 'text', 2, 'Admin'),
(12, 'admin.admin_title', 'Admin Title', 'Afriqup', NULL, 'text', 6, 'Admin'),
(13, 'site.admin_title', 'Admin Title', 'Afriqup', NULL, 'text', 7, 'Site');

-- --------------------------------------------------------

--
-- Structure de la table `temoignages`
--

CREATE TABLE `temoignages` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `texte` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user` int(11) DEFAULT NULL,
  `etat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `temoignages`
--

INSERT INTO `temoignages` (`id`, `created_at`, `updated_at`, `texte`, `user`, `etat`) VALUES
(1, '2020-08-24 13:26:00', '2020-08-24 13:27:11', 'rrtertert', 2, 'publie'),
(2, '2020-08-24 13:26:00', '2020-08-24 13:27:05', 'rrtertert', 2, 'publie'),
(3, '2020-08-30 08:00:46', '2020-08-30 08:00:46', 'asdasdasd', 2, 'publie');

-- --------------------------------------------------------

--
-- Structure de la table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fonction` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`, `prenom`, `nom`, `fonction`) VALUES
(1, 1, 'gladys marie gabrielle dima dima', 'dimadima.marie@gmail.com', 'users/August2020/ikAUHYt3gzgq2o75Lxwh.jpeg', NULL, '$2y$10$/QtlnsR.DaHvhHBtMNIU4e6o.q8uGtFRrFpxC44vEKXbrcfN5yQw2', 'ZKJdCpzVTlFqucgVxWdA17Vq3Taouiu8EZlYgcnLVScRi7gwlqaQr6owu0Qz', '{\"locale\":\"en\"}', '2020-06-15 18:14:04', '2020-08-24 08:09:21', NULL, NULL, NULL),
(2, 1, 'dev', 'admin@quantahive.net', 'users/default.png', NULL, '$2y$10$gGUGEHkLKSHWCJef5TE2buzRoZO.S5WdoVjzSUD6f/YNOUBxqScC.', NULL, NULL, '2020-08-24 08:11:33', '2020-08-24 08:11:33', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `banniere_accueils`
--
ALTER TABLE `banniere_accueils`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categories_formations`
--
ALTER TABLE `categories_formations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categories_services`
--
ALTER TABLE `categories_services`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `competences`
--
ALTER TABLE `competences`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `configurations`
--
ALTER TABLE `configurations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cursus_academiques`
--
ALTER TABLE `cursus_academiques`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Index pour la table `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Index pour la table `donnees_comptes`
--
ALTER TABLE `donnees_comptes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `entreprises`
--
ALTER TABLE `entreprises`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `evaluations`
--
ALTER TABLE `evaluations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `evaluations_entreprises_clients`
--
ALTER TABLE `evaluations_entreprises_clients`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `evaluations_entreprises_developpements`
--
ALTER TABLE `evaluations_entreprises_developpements`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `evaluations_entreprises_performances`
--
ALTER TABLE `evaluations_entreprises_performances`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `evaluations_entreprises_problemes`
--
ALTER TABLE `evaluations_entreprises_problemes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `evaluations_entreprises_produits`
--
ALTER TABLE `evaluations_entreprises_produits`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `experiences_professionnelles`
--
ALTER TABLE `experiences_professionnelles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `formations`
--
ALTER TABLE `formations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `formations_nom_unique` (`nom`);

--
-- Index pour la table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Index pour la table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Index pour la table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Index pour la table `references`
--
ALTER TABLE `references`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Index pour la table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `services_nom_unique` (`nom`);

--
-- Index pour la table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Index pour la table `temoignages`
--
ALTER TABLE `temoignages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Index pour la table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `banniere_accueils`
--
ALTER TABLE `banniere_accueils`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `categories_formations`
--
ALTER TABLE `categories_formations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `categories_services`
--
ALTER TABLE `categories_services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `competences`
--
ALTER TABLE `competences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `configurations`
--
ALTER TABLE `configurations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `cursus_academiques`
--
ALTER TABLE `cursus_academiques`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=235;

--
-- AUTO_INCREMENT pour la table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `donnees_comptes`
--
ALTER TABLE `donnees_comptes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `entreprises`
--
ALTER TABLE `entreprises`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `evaluations`
--
ALTER TABLE `evaluations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `evaluations_entreprises_clients`
--
ALTER TABLE `evaluations_entreprises_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `evaluations_entreprises_developpements`
--
ALTER TABLE `evaluations_entreprises_developpements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `evaluations_entreprises_performances`
--
ALTER TABLE `evaluations_entreprises_performances`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `evaluations_entreprises_problemes`
--
ALTER TABLE `evaluations_entreprises_problemes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `evaluations_entreprises_produits`
--
ALTER TABLE `evaluations_entreprises_produits`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `experiences_professionnelles`
--
ALTER TABLE `experiences_professionnelles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `formations`
--
ALTER TABLE `formations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- AUTO_INCREMENT pour la table `references`
--
ALTER TABLE `references`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `temoignages`
--
ALTER TABLE `temoignages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Contraintes pour la table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
