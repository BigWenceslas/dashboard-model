-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mer. 01 juil. 2020 à 00:02
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
(1, '2020-06-29 06:41:16', '2020-06-29 06:41:16', 'devise', 'FCFA');

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
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, NULL, 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, NULL, 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, NULL, 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, NULL, 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, NULL, 12),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 1, 1, 1, 1, 1, 1, NULL, 9),
(72, 12, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(73, 12, 'nom', 'text', 'Nom', 1, 1, 1, 1, 1, 1, '{}', 2),
(74, 12, 'description', 'rich_text_box', 'Description', 0, 1, 1, 1, 1, 1, '{}', 3),
(75, 13, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(76, 13, 'nom', 'text', 'Nom', 1, 1, 1, 1, 1, 1, '{}', 2),
(77, 13, 'description', 'rich_text_box', 'Description', 0, 1, 1, 1, 1, 1, '{}', 3),
(78, 15, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(79, 15, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 2),
(80, 15, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 3),
(81, 15, 'nom', 'text', 'Nom', 1, 1, 1, 1, 1, 1, '{}', 4),
(82, 15, 'slug', 'text', 'Slug', 0, 0, 0, 0, 0, 1, '{\"slugify\":{\"origin\":\"nom\",\"forceUpdate\":true}}', 5),
(83, 15, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"publish\",\"options\":{\"option1\":\"publish\",\"option2\":\"trash\"}}', 6),
(84, 15, 'description', 'rich_text_box', 'Description', 0, 1, 1, 1, 1, 1, '{}', 7),
(85, 15, 'categorie_id', 'text', 'Categorie Id', 0, 1, 1, 1, 1, 1, '{}', 8),
(86, 15, 'image_formation', 'image', 'Image Formation', 0, 1, 1, 1, 1, 1, '{}', 9),
(87, 15, 'formation_belongsto_categories_formation_relationship', 'relationship', 'categories_formations', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\CategoriesFormation\",\"table\":\"categories_formations\",\"type\":\"belongsTo\",\"column\":\"categorie_id\",\"key\":\"id\",\"label\":\"nom\",\"pivot_table\":\"categories_formations\",\"pivot\":\"0\",\"taggable\":\"0\"}', 10),
(88, 16, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(89, 16, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 2),
(90, 16, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 3),
(91, 16, 'nom', 'text', 'Nom', 1, 1, 1, 1, 1, 1, '{}', 4),
(92, 16, 'slug', 'text', 'Slug', 0, 0, 0, 0, 0, 1, '{\"slugify\":{\"origin\":\"nom\",\"forceUpdate\":true}}', 5),
(93, 16, 'description', 'rich_text_box', 'Description', 0, 1, 1, 1, 1, 1, '{}', 6),
(94, 16, 'image_service', 'image', 'Image Service', 0, 1, 1, 1, 1, 1, '{}', 7),
(95, 16, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"publish\",\"options\":{\"option1\":\"publish\",\"option2\":\"trash\"}}', 8),
(96, 16, 'categorie_id', 'text', 'Categorie Id', 0, 1, 1, 1, 1, 1, '{}', 9),
(97, 16, 'service_belongsto_categories_service_relationship', 'relationship', 'categories_services', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\CategoriesService\",\"table\":\"categories_services\",\"type\":\"belongsTo\",\"column\":\"categorie_id\",\"key\":\"id\",\"label\":\"nom\",\"pivot_table\":\"categories_formations\",\"pivot\":\"0\",\"taggable\":\"0\"}', 10),
(98, 15, 'prix', 'number', 'Prix', 0, 1, 1, 1, 1, 1, '{}', 10),
(99, 16, 'prix', 'number', 'Prix', 0, 1, 1, 1, 1, 1, '{}', 10),
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
(111, 17, 'statut', 'text', 'Statut', 0, 1, 1, 1, 1, 1, '{}', 13),
(112, 17, 'categorie', 'text', 'Categorie', 0, 1, 1, 1, 1, 1, '{}', 2),
(113, 16, 'tag', 'text_area', 'Tag', 0, 1, 1, 1, 1, 1, '{}', 11),
(114, 18, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(115, 18, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 2),
(116, 18, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 3),
(117, 18, 'cle', 'text', 'Cle', 1, 1, 1, 1, 1, 1, '{}', 4),
(118, 18, 'valeur', 'text_area', 'Valeur', 1, 1, 1, 1, 1, 1, '{}', 5),
(119, 15, 'tag', 'text_area', 'Tag', 0, 1, 1, 1, 1, 1, '{}', 11),
(120, 17, 'description', 'rich_text_box', 'Description', 0, 1, 1, 1, 1, 1, '{}', 15),
(121, 17, 'lien_video', 'text', 'Lien Video', 0, 1, 1, 1, 1, 1, '{}', 14),
(122, 15, 'lien_video', 'text', 'Lien Video', 0, 1, 1, 1, 1, 1, '{}', 12);

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
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', '', 1, 0, NULL, '2020-06-14 19:05:23', '2020-06-14 19:05:23'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2020-06-14 19:05:24', '2020-06-14 19:05:24'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController', '', 1, 0, NULL, '2020-06-14 19:05:24', '2020-06-14 19:05:24'),
(12, 'categories_formations', 'categories-formations', 'Categories Formation', 'Categories Formations', 'voyager-categories', 'App\\CategoriesFormation', NULL, NULL, 'Les catégories des formations', 1, 0, '{\"order_column\":\"id\",\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null}', '2020-06-24 07:34:30', '2020-06-24 07:34:30'),
(13, 'categories_services', 'categories-services', 'Categories Service', 'Categories Services', 'voyager-categories', 'App\\CategoriesService', NULL, NULL, NULL, 1, 0, '{\"order_column\":\"id\",\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null}', '2020-06-24 07:36:33', '2020-06-24 07:36:33'),
(15, 'formations', 'formations', 'Formation', 'Formations', 'voyager-certificate', 'App\\Formation', NULL, NULL, NULL, 1, 0, '{\"order_column\":\"id\",\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2020-06-24 08:05:22', '2020-06-30 14:59:04'),
(16, 'services', 'services', 'Service', 'Services', NULL, 'App\\Service', NULL, NULL, NULL, 1, 0, '{\"order_column\":\"id\",\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2020-06-24 08:11:28', '2020-06-29 06:37:23'),
(17, 'entreprises', 'entreprises', 'Entreprise', 'Entreprises', 'voyager-company', 'App\\Entreprise', NULL, NULL, NULL, 1, 0, '{\"order_column\":\"id\",\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2020-06-26 06:31:42', '2020-06-30 14:45:25'),
(18, 'configurations', 'configurations', 'Configuration', 'Configurations', 'voyager-edit', 'App\\Configuration', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2020-06-29 06:40:52', '2020-06-29 06:40:52');

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
  `lien_video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `entreprises`
--

INSERT INTO `entreprises` (`id`, `nom`, `created_at`, `updated_at`, `services_produits`, `ville`, `pays`, `site_web`, `logo`, `adresse`, `accueil_service_client`, `statut`, `categorie`, `description`, `lien_video`) VALUES
(2, 'NEMS A DOMICILE', '2020-06-27 19:09:00', '2020-06-30 14:46:27', 'NEMS EN TOUT GENRE', 'YAOUNDE', 'Cameroun', NULL, 'entreprises/June2020/tQAY4Ajv5ZUrX6sJgb7X.jpeg', 'contacter 237694700817', 'EXCELLENT', 'VERIFIE', 'AGRO-ALIMENTAIRE & MEDICAL', '<h2 style=\"box-sizing: inherit; font-family: \'Roboto Slab\', \'Helvetica Neue\', sans-serif; line-height: 1.5; margin: 0px 0px 0.5em; padding: 0em; color: rgba(0, 0, 0, 0.8);\">I don\'t want to be rescued.</h2>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 0.5em; line-height: 1.5; color: rgba(0, 0, 0, 0.8); font-family: Roboto, \'Helvetica Neue\', sans-serif; font-size: 16px;\">And from now on you\'re all named Bender Jr. Daddy Bender, we\'re hungry. Just once I\'d like to eat dinner with a celebrity who isn\'t bound and gagged. For one beautiful night I knew what it was like to be a grandmother. Subjugated, yet honored.</p>\r\n<ol style=\"box-sizing: inherit; color: rgba(0, 0, 0, 0.8); font-family: Roboto, \'Helvetica Neue\', sans-serif; font-size: 16px;\">\r\n<li style=\"box-sizing: inherit; font-size: 1em; line-height: 1.5em; margin-bottom: 0.5em;\">And until then, I can never die?</li>\r\n<li style=\"box-sizing: inherit; font-size: 1em; line-height: 1.5em; margin-bottom: 0.5em;\">That\'s the ONLY thing about being a slave.</li>\r\n<li style=\"box-sizing: inherit; font-size: 1em; line-height: 1.5em; margin-bottom: 0.5em;\">And until then, I can never die?</li>\r\n</ol>\r\n<h3 style=\"box-sizing: inherit; font-family: \'Roboto Slab\', \'Helvetica Neue\', sans-serif; line-height: 1.33em; margin: calc(2rem - 0.165em) 0em 1rem; padding: 0em; font-size: 1.28rem; color: rgba(0, 0, 0, 0.8);\">Goodbye, cruel world. Goodbye, cruel lamp. Goodbye, cruel velvet drapes, lined with what would appear to be some sort of cruel muslin and the cute little pom-pom curtain pull cords. Cruel though they may be&hellip;</h3>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 0.5em; line-height: 1.5; color: rgba(0, 0, 0, 0.8); font-family: Roboto, \'Helvetica Neue\', sans-serif; font-size: 16px;\">We can\'t compete with Mom! Her company is big and evil! Ours is small and neutral! I didn\'t ask for a completely reasonable excuse! I asked you to get busy! You, a bobsleder!? That I\'d like to see! Now what?</p>\r\n<ul style=\"box-sizing: inherit; color: rgba(0, 0, 0, 0.8); font-family: Roboto, \'Helvetica Neue\', sans-serif; font-size: 16px;\">\r\n<li style=\"box-sizing: inherit; font-size: 1em; line-height: 1.5em; margin-bottom: 0.5em;\">There, now he\'s trapped in a book I wrote: a crummy world of plot holes and spelling errors!</li>\r\n<li style=\"box-sizing: inherit; font-size: 1em; line-height: 1.5em; margin-bottom: 0.5em;\">These old Doomsday Devices are dangerously unstable. I\'ll rest easier not knowing where they are.</li>\r\n<li style=\"box-sizing: inherit; font-size: 1em; line-height: 1.5em; margin-bottom: 0.5em;\">I love you, buddy!</li>\r\n</ul>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 0.5em; line-height: 1.5; color: rgba(0, 0, 0, 0.8); font-family: Roboto, \'Helvetica Neue\', sans-serif; font-size: 16px;\">And I\'d do it again! And perhaps a third time! But that would be it. I\'ll tell them you went down prying the wedding ring off his cold, dead finger. And yet you haven\'t said what I told you to say! How can any of us trust you?</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 0.5em; line-height: 1.5; color: rgba(0, 0, 0, 0.8); font-family: Roboto, \'Helvetica Neue\', sans-serif; font-size: 16px;\">Yeah, lots of people did. No, just a regular mistake. Who\'s brave enough to fly into something we all keep calling a death sphere? Then we\'ll go with that data file!</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 0.5em; line-height: 1.5; color: rgba(0, 0, 0, 0.8); font-family: Roboto, \'Helvetica Neue\', sans-serif; font-size: 16px;\">Well I\'da done better, but it\'s plum hard pleading a case while awaiting trial for that there incompetence. Do a flip! Bender, quit destroying the universe! But, like most politicians, he promised more than he could deliver.</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 0.5em; line-height: 1.5; color: rgba(0, 0, 0, 0.8); font-family: Roboto, \'Helvetica Neue\', sans-serif; font-size: 16px;\">Yes. You gave me a dollar and some candy. The key to victory is discipline, and that means a well made bed. You will practice until you can make your bed in your sleep. Daddy Bender, we\'re hungry. You know, I was God once.</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 0.5em; line-height: 1.5; color: rgba(0, 0, 0, 0.8); font-family: Roboto, \'Helvetica Neue\', sans-serif; font-size: 16px;\">Bender, you risked your life to save me! With a warning label this big, you know they gotta be fun! Oh, all right, I am. But if anything happens to me, tell them I died robbing some old man. Of all the friends I\'ve had&hellip; you\'re the first.</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 0.5em; line-height: 1.5; color: rgba(0, 0, 0, 0.8); font-family: Roboto, \'Helvetica Neue\', sans-serif; font-size: 16px;\">Fetal stemcells, aren\'t those controversial? You\'re going back for the Countess, aren\'t you? As an interesting side note, as a head without a body, I envy the dead. Ven ve voke up, ve had zese wodies.</p>', NULL);

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
  `lien_video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `formations`
--

INSERT INTO `formations` (`id`, `created_at`, `updated_at`, `nom`, `slug`, `status`, `description`, `categorie_id`, `image_formation`, `prix`, `tag`, `lien_video`) VALUES
(1, '2020-06-24 08:22:00', '2020-06-29 07:39:21', 'MONTER SON CV PROFFESSIONEL PAR AFRICKUP', NULL, 'option1', '<p style=\"margin-bottom: 0.28cm; direction: ltr; line-height: 1.08px; font-size: medium; text-transform: none; margin-left: 5cm;\"><span style=\"color: #4c4c4c;\"><span style=\"font-family: Arial Narrow, serif;\"><span style=\"font-size: 8pt;\"><strong><span style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Que vous ayez envie de devenir plus tard votre propre patron ou d&rsquo;avoir plusieurs entr&eacute;es en parall&egrave;le, Commencer par obtenir un emploi bien r&eacute;mun&eacute;r&eacute;, est le meilleur moyen de financer la r&eacute;alisation de vos r&ecirc;ves.</span></strong></span></span></span></p>', 1, 'formations/June2020/AC583ejx93hS1xZ4qg8q.jpg', 0, 'Formation gratuite', 'ZLhYLaRcMAU'),
(2, '2020-06-29 07:35:00', '2020-06-30 19:46:41', 'REUSSIR SON ENTRETIEN PAR LE STORYTELLING', NULL, 'option1', '<h1 style=\"box-sizing: inherit; margin: 0em 0px 0.5em; font-family: \'Roboto Slab\', \'Helvetica Neue\', sans-serif; line-height: 1.25; padding: 0em; min-height: 1rem; color: rgba(0, 0, 0, 0.8);\">Look, last night was a mistake.</h1>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 0.5em; line-height: 1.5; font-size: 1.25em; color: rgba(0, 0, 0, 0.8); font-family: Roboto, \'Helvetica Neue\', sans-serif;\">We\'ll need to have a look inside you with this camera. Belligerent and numerous. Kids don\'t turn rotten just from watching TV. Please, Don-Bot&hellip; look into your hard drive, and open your mercy file!</p>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 0.5em; line-height: 1.5; color: rgba(0, 0, 0, 0.8); font-family: Roboto, \'Helvetica Neue\', sans-serif; font-size: 16px;\">Noooooo! No, I\'m Santa Claus! Ummm&hellip;to eBay?&nbsp;<strong style=\"box-sizing: inherit;\">Who said that?</strong>&nbsp;<em style=\"box-sizing: inherit;\">SURE you can die!</em>&nbsp;You want to die?!</p>\r\n<h2 style=\"box-sizing: inherit; font-family: \'Roboto Slab\', \'Helvetica Neue\', sans-serif; line-height: 1.5; margin: 0px 0px 0.5em; padding: 0em; color: rgba(0, 0, 0, 0.8);\">Leela, Bender, we\'re going grave robbing.</h2>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 0.5em; line-height: 1.5; color: rgba(0, 0, 0, 0.8); font-family: Roboto, \'Helvetica Neue\', sans-serif; font-size: 16px;\">Bender, you risked your life to save me! Whoa a real live robot; or is that some kind of cheesy New Year\'s costume? Noooooo! Stop it, stop it. It\'s fine. I will \'destroy\' you!</p>\r\n<ol style=\"box-sizing: inherit; color: rgba(0, 0, 0, 0.8); font-family: Roboto, \'Helvetica Neue\', sans-serif; font-size: 16px;\">\r\n<li style=\"box-sizing: inherit; font-size: 1em; line-height: 1.5em; margin-bottom: 0.5em;\">I videotape every customer that comes in here, so that I may blackmail them later.</li>\r\n<li style=\"box-sizing: inherit; font-size: 1em; line-height: 1.5em; margin-bottom: 0.5em;\">Well, thanks to the Internet, I\'m now bored with sex. Is there a place on the web that panders to my lust for violence?</li>\r\n<li style=\"box-sizing: inherit; font-size: 1em; line-height: 1.5em; margin-bottom: 0.5em;\">And why did \'I\' have to take a cab?</li>\r\n<li>&nbsp;</li>\r\n</ol>', 1, 'formations/June2020/T6WT9Ku399ijMDBDR0Pl.jpg', 0, 'Formation gratuite', NULL),
(3, '2020-06-29 14:33:00', '2020-06-29 14:34:03', 'CHOISIR SON IDEE DE BUSINESS', NULL, 'option1', '<h5 style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 0.5rem; font-family: avenir; font-weight: 400; line-height: 1.2; color: #000000; font-size: 18px; text-transform: capitalize; text-align: center;\"><a style=\"box-sizing: border-box; outline: none 0px; color: #000000; text-decoration-line: none; background-color: transparent; transition: all 0.2s linear 0s;\" href=\"#\">CHOISIR SON IDEE DE BUSINESS</a></h5>', 1, 'formations/June2020/gzjiPUQrLtLDhZnGJdse.jpg', 0, 'Service gratuit', NULL),
(4, '2020-06-29 14:35:39', '2020-06-29 14:35:39', 'SE LANCER DANS L\'ENTREPRENARIAT PAR AFRICKUP', NULL, 'option1', '<h5 style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 0.5rem; font-family: avenir; font-weight: 400; line-height: 1.2; color: #000000; font-size: 18px; text-transform: capitalize; text-align: left;\"><a style=\"box-sizing: border-box; outline: none 0px; text-decoration-line: none; background-color: transparent; transition: all 0.2s linear 0s;\" href=\"#\">SE LANCER DANS L\'ENTREPRENARIAT PAR AFRICKUP</a></h5>', 1, 'formations/June2020/ALudWaaI2Ds6OlzIZmNH.jpg', 0, 'Formation gratuite', NULL),
(5, '2020-06-29 14:37:00', '2020-06-29 14:38:43', 'TRANSFORMER SON SAVOIR EN ARGENT', NULL, 'option1', '<h5 style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 0.5rem; font-family: avenir; font-weight: 400; line-height: 1.2; color: #000000; font-size: 18px; text-transform: capitalize; text-align: left;\"><a style=\"box-sizing: border-box; outline: none 0px; color: #000000; text-decoration-line: none; background-color: transparent; transition: all 0.2s linear 0s;\" href=\"#\">TRANSFORMER SON SAVOIR EN ARGENT</a></h5>', 2, 'formations/June2020/FtFstkuXBP6Y3EE3kGxF.jpg', 75000, 'Formation payante', NULL),
(6, '2020-06-29 14:38:00', '2020-06-29 14:38:56', 'TAXER SES SERVICES OU SES PRODUITS', NULL, 'option1', '<h5 style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 0.5rem; font-family: avenir; font-weight: 400; line-height: 1.2; color: #000000; font-size: 18px; text-transform: capitalize; text-align: left;\"><a style=\"box-sizing: border-box; outline: none 0px; color: #000000; text-decoration-line: none; background-color: transparent; transition: all 0.2s linear 0s;\" href=\"#\">TAXER SES SERVICES OU SES PRODUITS</a></h5>', 2, 'formations/June2020/SOqRVxPO90ajUhuCSTkF.jpg', 80000, 'Formation payante', NULL),
(7, '2020-06-29 14:40:00', '2020-06-29 14:40:45', 'AMELIORER SON SERVICE CLIENTS', NULL, 'option1', '<h5 style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 0.5rem; font-family: avenir; font-weight: 400; line-height: 1.2; color: #000000; font-size: 18px; text-transform: capitalize; text-align: left;\"><a style=\"box-sizing: border-box; outline: none 0px; color: #000000; text-decoration-line: none; background-color: transparent; transition: all 0.2s linear 0s;\" href=\"#\">AMELIORER SON SERVICE CLIENTS</a></h5>', 2, 'formations/June2020/QW3GTlHMNpqDzlodHxwP.jpg', 90000, 'Programming', NULL),
(8, '2020-06-29 14:42:29', '2020-06-29 14:42:29', 'INCUBATEUR D’ENTREPRISES ET DES STARTUP', NULL, 'option1', '<h5 style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 0.5rem; font-family: avenir; font-weight: 400; line-height: 1.2; color: #000000; font-size: 18px; text-transform: capitalize; text-align: left;\"><span style=\"color: #000000;\"><a style=\"box-sizing: border-box; outline: none 0px; background-color: transparent; transition: all 0.2s linear 0s; color: #000000; text-decoration: underline;\" href=\"#\">INCUBATEUR D&rsquo;ENTREPRISES ET DES STARTUP</a></span></h5>', 2, 'formations/June2020/I5sme781oFx9m6yjUfx5.jpg', 105000, 'Service payant', NULL);

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
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2020-06-14 19:05:25', '2020-06-14 19:05:25', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, 5, 7, '2020-06-14 19:05:25', '2020-06-15 21:56:51', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 2, '2020-06-14 19:05:25', '2020-06-24 08:08:15', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 3, '2020-06-14 19:05:26', '2020-06-24 08:08:15', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 10, '2020-06-14 19:05:26', '2020-06-29 06:58:21', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 1, '2020-06-14 19:05:26', '2020-06-15 21:52:49', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 2, '2020-06-14 19:05:26', '2020-06-15 21:52:49', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 3, '2020-06-14 19:05:26', '2020-06-15 21:52:49', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 4, '2020-06-14 19:05:26', '2020-06-15 21:52:49', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, 5, 6, '2020-06-14 19:05:26', '2020-06-15 21:56:37', 'voyager.settings.index', NULL),
(11, 1, 'Hooks', '', '_self', 'voyager-hook', NULL, 5, 5, '2020-06-14 19:05:32', '2020-06-15 21:52:49', 'voyager.hooks', NULL),
(20, 1, 'Categories Formations', '', '_self', 'voyager-categories', NULL, NULL, 4, '2020-06-24 07:34:30', '2020-06-24 08:08:15', 'voyager.categories-formations.index', NULL),
(21, 1, 'Categories Services', '', '_self', 'voyager-categories', NULL, NULL, 6, '2020-06-24 07:36:33', '2020-06-24 08:08:22', 'voyager.categories-services.index', NULL),
(22, 1, 'Formations', '', '_self', 'voyager-certificate', NULL, NULL, 5, '2020-06-24 08:05:22', '2020-06-24 08:08:19', 'voyager.formations.index', NULL),
(23, 1, 'Services', '', '_self', 'voyager-wallet', '#000000', NULL, 7, '2020-06-24 08:11:29', '2020-06-24 08:19:16', 'voyager.services.index', 'null'),
(24, 1, 'Entreprises', '', '_self', 'voyager-company', NULL, NULL, 8, '2020-06-26 06:31:43', '2020-06-26 06:32:18', 'voyager.entreprises.index', NULL),
(25, 1, 'Configurations', '', '_self', 'voyager-edit', NULL, NULL, 9, '2020-06-29 06:40:52', '2020-06-29 06:58:21', 'voyager.configurations.index', NULL);

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
(96, 'delete_configurations', 'configurations', '2020-06-29 06:40:52', '2020-06-29 06:40:52');

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
(96, 1);

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
  `tag` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`id`, `created_at`, `updated_at`, `nom`, `slug`, `description`, `image_service`, `status`, `categorie_id`, `prix`, `tag`) VALUES
(2, '2020-06-24 22:26:00', '2020-06-30 15:38:04', 'EVALUATION STARTUP', NULL, '<ol style=\"box-sizing: inherit; color: rgba(0, 0, 0, 0.8); font-family: Roboto, \'Helvetica Neue\', sans-serif; font-size: 16px; text-transform: none;\">\r\n<li style=\"box-sizing: inherit; font-size: 1em; line-height: 1.5em; margin-bottom: 0.5em;\">And until then, I can never die?</li>\r\n</ol>\r\n<h3 style=\"box-sizing: inherit; font-family: \'Roboto Slab\', \'Helvetica Neue\', sans-serif; line-height: 1.33em; margin: calc(2rem - 0.165em) 0em 1rem; padding: 0em; font-size: 1.28rem; color: rgba(0, 0, 0, 0.8);\">Goodbye, cruel world. Goodbye, cruel lamp. Goodbye, cruel velvet drapes, lined with what would appear to be some sort of cruel muslin and the cute little pom-pom curtain pull cords. Cruel though they may be&hellip;</h3>\r\n<p style=\"box-sizing: inherit; margin: 0px 0px 0.5em; line-height: 1.5; color: rgba(0, 0, 0, 0.8); font-family: Roboto, \'Helvetica Neue\', sans-serif; font-size: 16px; text-transform: none;\">We can\'t compete with Mom! Her company is big and evil! Ours is small and neutral! I didn\'t ask for a completely reasonable excuse! I asked you to get busy! You, a bobsleder!? That I\'d like to see! Now what?</p>\r\n<ul style=\"box-sizing: inherit; color: rgba(0, 0, 0, 0.8); font-family: Roboto, \'Helvetica Neue\', sans-serif; font-size: 16px; text-transform: none;\">\r\n<li style=\"box-sizing: inherit; font-size: 1em; line-height: 1.5em; margin-bottom: 0.5em;\">There, now he\'s trapped in a book I wrote: a crummy world of plot holes and spelling errors!</li>\r\n<li style=\"box-sizing: inherit; font-size: 1em; line-height: 1.5em; margin-bottom: 0.5em;\">These old Doomsday Devices are dangerously unstable. I\'ll rest easier not knowing where they are.</li>\r\n<li style=\"box-sizing: inherit; font-size: 1em; line-height: 1.5em; margin-bottom: 0.5em;\">I love you, buddy!</li>\r\n</ul>', 'services/June2020/MV9Gxdn3Yh1CvnCA3KlW.png', 'option1', 1, 0, 'Service gratuit'),
(3, '2020-06-24 22:26:00', '2020-06-29 10:01:54', 'LISTING SUR NOS PLATEFORMES', NULL, '<h5 style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 0.5rem; font-family: avenir; font-weight: 400; line-height: 1.2; color: #000000; font-size: 18px; text-transform: capitalize; text-align: left;\"><a style=\"box-sizing: border-box; outline: none 0px; text-decoration-line: none; background-color: transparent; transition: all 0.2s linear 0s;\" href=\"#\">LISTING SUR NOS PLATEFORMES</a></h5>', 'services/June2020/MiJ8G6L6JwEbgB4W2Dl4.jpg', 'option1', 1, 0, 'Service gratuit'),
(4, '2020-06-29 10:08:49', '2020-06-29 10:08:49', 'STATUT VERIFIE POUR LES ENTREPRISES', NULL, '<h5 style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 0.5rem; font-family: avenir; font-weight: 400; line-height: 1.2; color: #000000; font-size: 18px; text-transform: capitalize; text-align: left;\"><a style=\"box-sizing: border-box; outline: none 0px; color: #000000; text-decoration-line: none; background-color: transparent; transition: all 0.2s linear 0s;\" href=\"#\">STATUT VERIFIE POUR LES ENTREPRISES</a></h5>', 'services/June2020/HOTbsrRnR1ce3OiLI3AS.jpg', 'option1', 2, 100000, 'Service payant'),
(5, '2020-06-29 10:10:06', '2020-06-29 10:10:06', 'VOTRE PUBLICITE SUR NOS PLATEFORMES', NULL, '<h5 style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 0.5rem; font-family: avenir; font-weight: 400; line-height: 1.2; color: #000000; font-size: 18px; text-transform: capitalize; text-align: left;\"><a style=\"box-sizing: border-box; outline: none 0px; text-decoration-line: none; background-color: transparent; transition: all 0.2s linear 0s;\" href=\"#\">VOTRE PUBLICITE SUR NOS PLATEFORMES</a></h5>', 'services/June2020/a0Cu42i64LdeqKHbHbuL.jpg', 'option1', 2, 150000, 'Service payant'),
(6, '2020-06-29 10:11:07', '2020-06-29 10:11:07', 'ETUDES TECHNIQUES DE VOS PROJETS', NULL, '<h5 style=\"box-sizing: border-box; outline: none; margin-top: 0px; margin-bottom: 0.5rem; font-family: avenir; font-weight: 400; line-height: 1.2; color: #000000; font-size: 18px; text-transform: capitalize; text-align: center;\"><a style=\"box-sizing: border-box; outline: none 0px; color: #000000; text-decoration-line: none; background-color: transparent; transition: all 0.2s linear 0s;\" href=\"#\">ETUDES TECHNIQUES DE VOS PROJETS</a></h5>', 'services/June2020/m7DHXLuBs1escHHV67N2.png', 'option1', 2, 75000, 'Programming');

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
(7, 'admin.description', 'Admin Description', 'Welcome to Afriqup', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', 'settings/June2020/8LxDfCarKkAmOvh0S8H5.png', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', 'settings/June2020/8Tm2Sk3m8YTONcM7WDis.png', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', NULL, '', 'text', 1, 'Admin'),
(12, 'admin.admin_title', 'Admin Title', 'Afriqup', NULL, 'text', 6, 'Admin'),
(13, 'site.admin_title', 'Admin Title', 'Afriqup', NULL, 'text', 7, 'Site');

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(1, 1, 'aristide', 'aristide@elitehive.net', 'users/June2020/hv3AI6AVz1M2LzFVCUA6.png', NULL, '$2y$10$Gcn.vxvpWmk0ymgpVPWin.k9hlMzxQpRdq7tELE9L/xLdUvwcbxqa', NULL, '{\"locale\":\"en\"}', '2020-06-15 18:14:04', '2020-06-24 07:09:34');

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
-- Index pour la table `configurations`
--
ALTER TABLE `configurations`
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
-- Index pour la table `entreprises`
--
ALTER TABLE `entreprises`
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
-- AUTO_INCREMENT pour la table `configurations`
--
ALTER TABLE `configurations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT pour la table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `entreprises`
--
ALTER TABLE `entreprises`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
