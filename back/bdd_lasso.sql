-- MariaDB dump 10.19  Distrib 10.6.5-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: bdd_lasso
-- ------------------------------------------------------
-- Server version       10.6.5-MariaDB-1:10.6.5+maria~focal

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `association`
--

DROP TABLE IF EXISTS `association`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `association` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npa_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creation_date` datetime NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `score` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `association`
--

LOCK TABLES `association` WRITE;
/*!40000 ALTER TABLE `association` DISABLE KEYS */;
INSERT INTO `association` VALUES (1,'Unicef','Les enfants sont le présent et l’avenir du monde. Ils ont besoin d’être protégés, de voir leurs droits respectés, et ils méritent que l’on construise, pour et avec eux, un monde meilleur pour demai
n. UNICEF met tout en œuvre pour que chacun d’entre eux puisse vivre, grandir et s’épanouir.',NULL,'https://teteamodeler.ouest-france.fr/unicef-france.png','3 rue Duguay-Trouin 75282 Paris Cedex 06','09 69 36 84 68','1946-12-11 00:00:00','http
s://www.unicef.fr/',100),(2,'Amnéstie International','On dit souvent “L’important c’est de participer”. Mais lorsqu\'|| 'il s’agit de droits humains, l’important c’est aussi de gagner. Nous voulons combattre, ensemble, pour sans cesse remporter de
s victoires, l’une après l’autre. Car nous en remportons… mais cela ne se sait pas assez. Notre organisation est née d’une première victoire : la libération de prisonniers d’opinion. Cette première victoire fut l’étincelle qui a déclenché un m
ouvement rassemblant aujourd\'||'hui plus de 10 millions de personnes dans 70 pays.',NULL,'https://www.ramboliweb.com/images/Infos/logo-d-amnesty-international.jpg','76, boulevard de la Villette - 75940 Paris cedex 19','01 53 38 65 65','1961-05-2
8 00:00:00','https://www.amnesty.fr/',100),(3,'Les restaurants du coeur','Fondés par Coluche en 1985, les Restos du Cœur est une association loi de 1901, reconnue d’utilité publique, sous le nom officiel de « les Restaurants du Cœur – les Rela
is du Cœur ». Ils ont pour but « d’aider et d’apporter une assistance bénévole aux personnes démunies, notamment dans le domaine alimentaire par l’accès à des repas gratuits, et par la participation à leur insertion sociale et économique, ains
i qu’à toute action contre la pauvreté sous toutes ses formes ».',NULL,'https://upload.wikimedia.org/wikipedia/fr/thumb/a/ad/Restos_du_coeur_Logo.svg/1200px-Restos_du_coeur_Logo.svg.png','42 Rue de Clichy, 75009 Paris','01 53 32 23 23','1985-0
9-26 00:00:00','https://www.restosducoeur.org/',100),(4,'Secours catholique','Le Secours catholique est un service de l\'||'Église catholique en France. Fidèle aux orientations initiales définies par Jean Rodhain2, le Secours catholique prend son
 appui dans la doctrine sociale de l\'||'Église pour venir en aide aux plus démunis « sans distinction de race, de religion ou de nationalité », dans le respect de la charité chrétienne.',NULL,'https://upload.wikimedia.org/wikipedia/fr/b/bd/Logo-
Secours-Catholique-Caritas-France.png','106, rue du Bac, 75007','01 45 49 73 00','1946-09-08 00:00:00','https://www.secours-catholique.org',100),(5,'Secours populaires','Jour après jour, ici comme ailleurs, le Secours populaire, association re
connue d’utilité publique, agit pour un monde plus juste et plus solidaire, en permettant à chacun de s’émanciper et trouver sa place de citoyen, là où il vit, travaille ou étudie.',NULL,'https://upload.wikimedia.org/wikipedia/fr/thumb/8/80/Se
cours_populaire_logo.svg/640px-Secours_populaire_logo.svg.png','9-11 Rue Froissart','01 44 78 21 00','1945-11-15 00:00:00','https://www.secourspopulaire.fr',100),(6,'Action contre la faim','une organisation non-gouvernementale de solidarité in
ternationale (ONG) – Action contre la Faim – lutte contre la faim dans le monde. Les conflits, les dérèglements climatiques, la pauvreté, les inégalités d’accès à l’eau, aux soins, sont autant de causes de la malnutrition. Notre mission est de
 sauver des vies en éliminant la faim par la prévention, la détection et le traitement de la sous-nutrition, en particulier pendant et après les situations d’urgence liées aux conflits et aux catastrophes naturelles.',NULL,'https://upload.wiki
media.org/wikipedia/fr/thumb/2/27/Logo_Action_contre_la_faim.svg/1200px-Logo_Action_contre_la_faim.svg.png','14 Bd de Douaumont, 75017 Paris','01 70 84 70 84','1979-04-25 00:00:00','https://www.actioncontrelafaim.org',100),(7,'La Croix Rouge',
'Croix-Rouge insertion s’enracine dans le même socle de références. L’humanité est ainsi le premier des principes qui guident son action : rendre notre monde plus humain, cela signifie vouloir agir au quotidien pour préserver ce qui constitue
l’humain de chaque personne, à savoir sa dignité.',NULL,'1864-05-25 00:00:00','98 rue Didot, 75694','01 44 43 11 00','1964-05-25 00:00:00','https://www.croix-rouge.fr',100),(8,'Médecin sans frontiere','Médecins Sans Frontières est une associat
ion médicale humanitaire internationale, créée en 1971 à Paris par des médecins et des journalistes. Depuis cinquante ans, Médecins Sans Frontières apporte une assistance médicale à des populations dont la vie ou la santé sont menacées, en Fra
nce ou à l’étranger : principalement en cas de conflits armés, mais aussi d\'||'épidémies, de pandémies, de catastrophes naturelles ou encore d\'||'exclusion des soins.',NULL,'https://upload.wikimedia.org/wikipedia/fr/thumb/6/69/MSF.svg/1200px-MSF.s
vg.png','14-34 avenue Jean Jaurès 75019 - Paris','01 40 21 29 29','1971-12-22 00:00:00','https://www.msf.fr',100),(9,'Les blouses roses','Un engagement fort auprès des enfants et adultes hospitalisés et des personnes âgées. Depuis plus de 75 a
ns, les Blouses Roses distraient, réconfortent, écoutent, apportent de la joie dans le quotidien des soins et de la solitude.',NULL,'https://www.lesblousesroses.asso.fr/img/logo-lesblousesroses.png?v=1','5 Rue Barye, 75017 Paris','01 46 22 82
32','1944-01-10 00:00:00','http://www.lesblousesroses.asso.fr',100),(10,'SPA','Depuis 1845, la Société Protectrice des Animaux œuvre pour la défense et le bien-être des animaux. Et c’est d’ailleurs dans la région Parisienne qu’a ouvert le tout
 premier refuge de la SPA en 1903, à Gennevilliers. C’est aussi dans la capitale que réside le siège de la SPA. Vous souhaitez adopter un animal dans une SPA proche de Paris, ou obtenir plus de renseignements sur les refuges de la région ? Déc
ouvrez dans cet article tout ce qu’il faut savoir sur la Société Protectrice des Animaux près de Paris.',NULL,'https://upload.wikimedia.org/wikipedia/fr/0/00/Logo_de_la_SPA_%28France%29.png','39 Bd Berthier, 75017 Paris','01 43 80 40 66','1846
-04-03 00:00:00','https://www.la-spa.fr',100),(11,'Sidaction','Les actions de Sidaction bénéficient à toutes les personnes vivant avec le VIH, sans distinction. L’intérêt des malades dicte la stratégie de l’association dans ses choix au quotid
ien.',NULL,'https://upload.wikimedia.org/wikipedia/fr/thumb/0/0b/Logo_Sidaction.svg/1200px-Logo_Sidaction.svg.png','228 rue du Faubourg Saint-Martin - 75010 Paris','01 53 26 45 55','1994-02-17 00:00:00','https://www.sidaction.org',100),(12,'Le
s sauveteurs en mer','La Société nationale de sauvetage en mer (SNSM) est une association française. Elle a pour vocation de secourir bénévolement et gratuitement les vies humaines en danger en mer, autour des côtes françaises, y compris dans
les départements et territoires d\'||'outre-mer.',NULL,'https://www.francegenerosites.org/wp-content/uploads/2021/01/400x400_SNSM-Les-sauveteurs-en-mer.jpg','8 Cité d\'||'Antin, 75009 Paris','01 56 02 64 64','1967-06-13 00:00:00','https://www.snsm.o
rg',100),(13,'||'||'Emmaüs','Emmaüs France est une association loi de 1901, créée en 1985, qui regroupe l\'||'ensemble des associations françaises membres d\'||'Emmaüs International.',NULL,'https://resize-pdm.francedimanche.ladmedia.fr/rcrop/635,500/img/2
019-11/emmaus-france.jpg?version=v1','47 avenue de la Résistance, 93104 Montreuil Cedex','09 70 81 89 60','1985-10-22 00:00:00','https://emmaus-france.org',100),(14,'Saint Vincent de Paul','La Confédération internationale de la Société de Sain
t-Vincent-de-Paul (SSVP) est une organisation de bienfaisance, catholique, laïque, dirigée par des bénévoles, et fondée à Paris en 1833 par un groupe de laïcs catholiques parmi lesquels se trouvait celui qui fut plus tard béatifié par le pape
Jean-Paul II : le bienheureux Frédéric Ozanam.',NULL,'https://photos.infolocale.fr/infoLocale/organisme/226/226429/logo/20180528131109.jpg','120 Av. du Général Leclerc, 75014 Paris','01 42 92 08 10','1833-04-23 00:00:00','https://www.ssvp.fr',
100),(15,'L214','L214 est une association de défense des animaux utilisés comme ressources alimentaires (viande, lait, œufs, poissons). Depuis ses débuts en 2008, elle a rendu publiques plus de 100 enquêtes révélant les conditions d’élevage, d
e transport et d’abattage des animaux. Ces vidéos ont permis de révéler les pratiques routinières et les dysfonctionnements d’une industrie qui considère et traite les animaux comme des marchandises.',NULL,'https://photos.infolocale.fr/infoLoc
ale/organisme/226/226429/logo/20180528131109.jpg','4 rue du soleil 67204 Achenheim','09 72 56 28','2008-03-14 00:00:00','https://www.l214.com',100),(16,'GreenPeace','Greenpeace est une organisation internationale. Elle est présente sur tous le
s continents et tous les océans grâce à ses 28 bureaux nationaux et régionaux et ses trois bateaux. Elle compte plus de trois millions d’adhérents à travers le monde qui la soutiennent et agissent avec elle.',NULL,'https://www.grainepaca.org/w
p-content/uploads/2018/03/greenpeace-logo.jpg','13 Rue d\'||'Enghien, 75010 Paris','01 80 96 96 96','1971-08-19 00:00:00','https://www.l214.com',100),(17,'30 millions d’amis','30 millions d\'||'amis renvoie à la fois à une émission de télévision, un
 magazine mensuel avec ses posters, et une fondation : la Fondation 30 Millions d\'||'Amis. Ces différents organismes se préoccupent tous des animaux de compagnie, notamment les chats, chiens, chevaux, furets, lapins, cochons d\'||'inde, rats, hamst
ers, souris, canaris, perruches, perroquets, reptiles de terrarium, poissons rouges, poissons tropicaux et autres NAC, mais aussi de la faune sauvage (par exemple les bonobos, guépards).',NULL,'https://www.montelimar.fr/application/files/6115/
4452/0698/Logo_30_millions.jpg','40 Cr Albert 1er, 75008 Paris','01 56 59 04 44','1976-01-06 00:00:00','https://www.30millionsdamis.fr',100),(18,'Enfants Du Désert','L’association Enfants du Désert existe depuis 2005. Elle a vu le jour suite à
 un voyage sur les terres marocaines qui a encouragé Laetitia et Emmanuel Chevallier à s’engager pour une cause qui porte sens : l’accès à l’éducation des enfants du sud marocain.',NULL,'https://enfantsdudesert.org/wp-content/uploads/2017/12/L
OGO-EDD-PNG.png','','','2005-07-09 00:00:00','https://enfantsdudesert.org',100),(19,'We forest','Notre vision : Un monde où les communautés et la nature prospèrent ensemble de manière durable pour arrêter le réchauffement climatique de notre v
ivant.\nNotre mission: Conserver et restaurer l\'||'intégrité écologique des forêts et des paysages, en engageant les communautés à mettre en œuvre et à fournir des solutions durables pour le climat, la nature et les personnes.\nNos valeurs : Les
 valeurs qui inspirent notre travail sont : Intégrité, Transparence, Excellence, Collaboration, Passion et Courage.\nNotre objectif : Notre objectif est d\'||'atteindre plus de 100 millions d\'||'arbres - l\'||'équivalent d\'||'environ 85 000 hectares - r
estaurés ou conservés d\'||'ici la fin de 2024, apportant une contribution significative à la Décennie des Nations Unies pour la restauration des écosystèmes .',NULL,'https://www.noblehealthfood.fr/uploads/1/0/0/1/100141192/logoweforest-vectorise
d_orig.png','77 Bd Malesherbes, 75008 Paris','01 73 04 72 02','1973-05-20 00:00:00','https://www.weforest.org',100),(20,'Agir pour l’environnement','Agir pour l\'||'Environnement est une association de mobilisation citoyenne oeuvrant pour une pla
nète vivable. L\'||'association fait pression sur les responsables politiques et décideurs économiques en menant des campagnes réunissant un large réseau d\'||'associations et de citoyens. Afin de garder intacte son indépendance d\'action, l\'associ
ation refuse tout financement issu des pouvoirs publics.',NULL,'https://images.squarespace-cdn.com/content/v1/5511146be4b0e59bac9ae0eb/1593091582900-I7PWL0TM3Q1JB143IDG6/agir+pour.png?format=1000w','2 Rue du N, 75018 Paris','01 40 31 02 37','1
997-02-05 00:00:00','https://www.agirpourlenvironnement.org',100),(21,'Petit frère des pauvres','Depuis 1946, les Petits Frères des Pauvres luttent contre l\'||'isolement et la solitude des personnes âgées, prioritairement les plus démunies. Par
nos actions, nous recréons des liens leur permettant de reprendre goût à la vie et faire partie du monde qui les entoure. Vivre tout simplement.',NULL,'https://www.petitsfreresdespauvres.fr/src/images/logo-red-retina.png','44 Rue de la Chine,
75020 Paris','08 00 47 47 88','1946-04-19 00:00:00','https://www.petitsfreresdespauvres.fr',100);
/*!40000 ALTER TABLE `association` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `association_category`
--

DROP TABLE IF EXISTS `association_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `association_category` (
  `association_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`association_id`,`category_id`),
  KEY `IDX_308101A7EFB9C8A5` (`association_id`),
  KEY `IDX_308101A712469DE2` (`category_id`),
  CONSTRAINT `FK_308101A712469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  CONSTRAINT `FK_308101A7EFB9C8A5` FOREIGN KEY (`association_id`) REFERENCES `association` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `association_category`
--

LOCK TABLES `association_category` WRITE;
/*!40000 ALTER TABLE `association_category` DISABLE KEYS */;
INSERT INTO `association_category` VALUES (1,7),(1,8),(1,9),(1,10),(2,7),(2,9),(3,3),(3,8),(3,9),(4,4),(4,9),(5,9),(6,7),(6,8),(6,9),(7,4),(7,7),(7,9),(7,10),(8,4),(8,7),(8,9),(9,3),(9,4),(9,8),(9,9),(10,2),(10,4),(11,4),(11,7),(11,9),(12,4),(
12,9),(13,3),(13,9),(14,3),(14,9),(15,2),(15,5),(16,5),(16,7),(16,10),(17,2),(17,10),(18,7),(18,8),(18,9),(19,5),(19,7),(19,10),(20,5),(20,10),(21,3),(21,4),(21,9);
/*!40000 ALTER TABLE `association_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `association_user`
--

DROP TABLE IF EXISTS `association_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `association_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `score_update_user` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `association_user`
--

LOCK TABLES `association_user` WRITE;
/*!40000 ALTER TABLE `association_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `association_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `association_user_user`
--

DROP TABLE IF EXISTS `association_user_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `association_user_user` (
  `association_user_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`association_user_id`,`user_id`),
  KEY `IDX_53F593F5693C433F` (`association_user_id`),
  KEY `IDX_53F593F5A76ED395` (`user_id`),
  CONSTRAINT `FK_53F593F5693C433F` FOREIGN KEY (`association_user_id`) REFERENCES `association_user` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_53F593F5A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `association_user_user`
--

LOCK TABLES `association_user_user` WRITE;
/*!40000 ALTER TABLE `association_user_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `association_user_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'General'),(2,'Animaux'),(3,'Seniors'),(4,'Sante'),(5,'Ecologie'),(6,'Aide a la personne'),(7,'International'),(8,'Enfants'),(9,'Humanitaire'),(10,'Educatif');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_migration_versions`
--

LOCK TABLES `doctrine_migration_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_migration_versions` DISABLE KEYS */;
INSERT INTO `doctrine_migration_versions` VALUES ('DoctrineMigrations\\Version20220320213949','2022-03-20 22:40:15',916),('DoctrineMigrations\\Version20220320232042','2022-03-21 00:20:53',87),('DoctrineMigrations\\Version20220321123819','2022-
03-21 13:38:25',57),('DoctrineMigrations\\Version20220321215801','2022-03-21 22:59:27',241),('DoctrineMigrations\\Version20220321220637','2022-03-21 23:06:46',131),('DoctrineMigrations\\Version20220321220836','2022-03-21 23:08:49',218);
/*!40000 ALTER TABLE `doctrine_migration_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `favoris`
--

DROP TABLE IF EXISTS `favoris`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `favoris` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `associations_id` int(11) DEFAULT NULL,
  `user_favoris_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_8933C4324122538A` (`associations_id`),
  KEY `IDX_8933C432F68F41F7` (`user_favoris_id`),
  CONSTRAINT `FK_8933C4324122538A` FOREIGN KEY (`associations_id`) REFERENCES `association` (`id`),
  CONSTRAINT `FK_8933C432F68F41F7` FOREIGN KEY (`user_favoris_id`) REFERENCES `favoris` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `favoris`
--

LOCK TABLES `favoris` WRITE;
/*!40000 ALTER TABLE `favoris` DISABLE KEYS */;
/*!40000 ALTER TABLE `favoris` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `question`
--

DROP TABLE IF EXISTS `question`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint(1) NOT NULL,
  `detail_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question`
--

LOCK TABLES `question` WRITE;
/*!40000 ALTER TABLE `question` DISABLE KEYS */;
INSERT INTO `question` VALUES (1,'Souhaitez-vous vous engager dans des actions ?',0,'General'),(2,'Souhaitez-vous simplement apporter une aide financière ?',0,'General'),(3,'Avez-vous du temps à accorder à votre engagement (à partir d’1 heure
par semaine) ?',0,'General'),(4,'Êtes-vous prêt à quitter la France pour aider ?',0,'General'),(5,'Souhaitez-vous aider financièrement des enfants dans le besoin ?',0,'General'),(6,'Avez-vous un frère ou une soeur ?',0,'Enfants'),(7,'Êtes-vous
 membre d’une famille nombreuse ?',0,'Enfants'),(8,'Avez-vous des enfants ?',0,'Enfants'),(9,'Avez-vous déjà fait du babysitting ?',0,'Enfants'),(10,'Êtes-vous quelqu’un à l’écoute ?',0,'Aide a la personne'),(11,'Allez-vous aider votre prochai
n ?',0,'Aide a la personne'),(12,'Aimez-vous faire de nouvelles rencontres ?',0,'Aide a la personne'),(13,'Avez-vous connus vos grands-parents ?',0,'Seniors'),(14,'Aimez-vous les jeux de société ?',0,'Seniors'),(15,'Êtes-vous à l’aise avec les
 personnes agées ?',0,'Seniors'),(16,'Avez-vous un animal de compagnie ?',0,'Animaux'),(17,'Avez-vous connu de près ou de loin quelqu’un qui a développer une maladie grave ?',0,'Sante'),(18,'Êtes-vous membre du corps medical ?',0,'Sante'),(19,
'La santé publique est-elle une priorité pour vous ?',0,'Sante'),(20,'Avez-vous un animal de compagnie ?',0,'Animaux'),(21,'Avez-vous contracté une allergie provoquée par certains animaux ?',0,'Animaux'),(22,'Souhaitez-vous vous engager pour l
a cause animal ?',0,'Animaux'),(23,'Avez-vous un animal de compagnie ?',0,'Animaux'),(24,'Avez-vous connu de près ou de loin quelqu’un qui a développer une maladie grave ?',0,'Sante'),(25,'Vous sentez-vous concerné par l’avenir de la planète ?
',0,'Ecologie'),(26,'Faites-vous attention à vos habitudes concernant la pollution ?',0,'Ecologie'),(27,'Militez-vous pour lutter contre le réchauffement climatique ?',0,'Ecologie'),(28,'Voulez-vous partir à l’international ?',0,'International
'),(29,'Aimez-vous voyager ?',0,'International'),(30,'Est-il impoprtant pour vous que votre implication ais une répercution mondiale ?',0,'International'),(31,'Seriez-vous prêt à quitter la France pour poursuivre votre mission à l’étranger ?',
0,'International'),(32,'Pensez-vous que d’autres pays sont plus dans le besoin que le notre ?',0,'International'),(33,'Seriez-vous prêt à participer bénévolement à la surveillance des plages pour assurer la sécurité des baigneurs ?',1,'Les sau
veteurs en mer'),(34,'Selon vous, semble-t-il nécessaire d’ augmenter le nombre d’équipements et de personnels pour surveiller les plages ?',1,'Les sauveteurs en mer'),(35,'Êtes-vous à l’aise avec des animaux atypiques (reptiles, mygales, fure
ts,...) ?',1,'30 millions d\'||'amis'),(36,'Souhaitez-vous garder des animaux ?',1,'30 millions d\'||'amis'),(37,'Êtes-vous prêt à adopter des animaux abandonnés ou traumatisés ?',1,'30 millions d\'||'amis'),(38,'Souhaitez-vous réaliser des missions d’
enquête et de conseil pour repérer et aider les personnes qui ont des mauvais comportements avec les animaux ?',1,'SPA'),(39,'Souhaitez-vous réaliser des petits travaux simples de bricolage et nettoyage ?',1,'SPA'),(40,'Vous sentez-vous concer
né par le conflit ukraino-russe ?',1,'Unicef'),(41,'Souhaitez-vous venir en aide aux Haïtiens après les catastrophes naturelles ?',1,'Unicef'),(42,'Construire des écoles en Afrique est primordial selon vous ?',1,'Unicef'),(43,'Penses-tu que le
 nucléaire est une ressource durable et écologique ?',1,'GreenPeace'),(44,'Crois-tu en la science pour résoudre les problèmes climatiques ?',1,'GreenPeace'),(45,'Crois-tu en l’Homme pour résoudre les problèmes climatiques ?',1,'GreenPeace');
/*!40000 ALTER TABLE `question` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `question_user`
--

DROP TABLE IF EXISTS `question_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `question_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle_already_answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question_user`
--

LOCK TABLES `question_user` WRITE;
/*!40000 ALTER TABLE `question_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `question_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `associations_id` int(11) DEFAULT NULL,
  `questions_id` int(11) DEFAULT NULL,
  `questions_user_id` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_8D93D6494122538A` (`associations_id`),
  KEY `IDX_8D93D649BCB134CE` (`questions_id`),
  KEY `IDX_8D93D649D4EBF353` (`questions_user_id`),
  CONSTRAINT `FK_8D93D6494122538A` FOREIGN KEY (`associations_id`) REFERENCES `association` (`id`),
  CONSTRAINT `FK_8D93D649BCB134CE` FOREIGN KEY (`questions_id`) REFERENCES `question` (`id`),
  CONSTRAINT `FK_8D93D649D4EBF353` FOREIGN KEY (`questions_user_id`) REFERENCES `question_user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,NULL,NULL,NULL,'j_beining@hetic.eu','Jael','Beining','$2y$13$sQ8zK/geFrAbKxdYkAdPD.cAupazAWtBqzWgAOMQ6GuO/ElthJZzK'),(2,NULL,NULL,NULL,'simon.durant@gmail.com','Simon','Durant','$2y$13$yuwe2s8kFNLOxrouj8FNJ.xJOzE4M
kMJmke3AaFxBT9vZ16Rx0ABu'),(4,NULL,NULL,NULL,'simon2.durant@gmail.com','Simon2','Durant2','$2y$13$LeIIqy1viQLjmm6Ss.mDmeE9BVjpKurMrDYpEafJxD5ZXchKKtDWC'),(5,NULL,NULL,NULL,'test.test@gmail.com','Test','Test','$2y$13$oC4AuaLVY9y2S9SEJCaC0O9126v
mxJX8z0mDx0WFu8d1uaCAv8Dyq'),(6,NULL,NULL,NULL,'lisa.doyen@gmail.com','Lisa','Doyen','$2y$13$TRleKPRCaBPRF30cSFA.lu/B8/XiBpLUkmb3s28.JLrq/oStAit7u'),(7,NULL,NULL,NULL,'test3.test3@gmail.com','test3','test3','$2y$13$T0/9qpX0gQbs2UAb/ShIjubUnQUQ
ic6MyEEcMkgYGDjHF7..WR/Au'),(8,NULL,NULL,NULL,'test4.test4@gmail.com','test4','test4','$2y$13$clETPt4QxY7l0TzOIgmyBeWob0sUAL90mPhx4S1SaOQPDm65lHm6u');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-03-22  8:18:18
