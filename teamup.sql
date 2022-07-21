-- MySQL dump 10.13  Distrib 8.0.29, for Linux (x86_64)
--
-- Host: localhost    Database: teamup
-- ------------------------------------------------------
-- Server version	8.0.29-0ubuntu0.20.04.3

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `ch_favorites`
--

DROP TABLE IF EXISTS `ch_favorites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ch_favorites` (
  `id` bigint NOT NULL,
  `user_id` bigint NOT NULL,
  `favorite_id` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ch_favorites`
--

LOCK TABLES `ch_favorites` WRITE;
/*!40000 ALTER TABLE `ch_favorites` DISABLE KEYS */;
/*!40000 ALTER TABLE `ch_favorites` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ch_messages`
--

DROP TABLE IF EXISTS `ch_messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ch_messages` (
  `id` bigint NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_id` bigint NOT NULL,
  `to_id` bigint NOT NULL,
  `body` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ch_messages`
--

LOCK TABLES `ch_messages` WRITE;
/*!40000 ALTER TABLE `ch_messages` DISABLE KEYS */;
INSERT INTO `ch_messages` VALUES (2137046511,'user',3,2,'how are you',NULL,0,'2022-07-21 00:42:02','2022-07-21 00:42:02'),(2547015930,'user',3,1,'hello',NULL,0,'2022-07-21 00:41:41','2022-07-21 00:41:41');
/*!40000 ALTER TABLE `ch_messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `club_categories`
--

DROP TABLE IF EXISTS `club_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `club_categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `admin_id` bigint unsigned NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `club_categories_admin_id_foreign` (`admin_id`),
  CONSTRAINT `club_categories_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `club_categories`
--

LOCK TABLES `club_categories` WRITE;
/*!40000 ALTER TABLE `club_categories` DISABLE KEYS */;
INSERT INTO `club_categories` VALUES (1,1,'Academic','2022-07-21 00:13:16','2022-07-21 00:13:16'),(2,1,'Cultural','2022-07-21 00:13:16','2022-07-21 00:13:16'),(3,1,'Honors','2022-07-21 00:13:16','2022-07-21 00:13:16'),(4,1,'Music/Performing Arts','2022-07-21 00:13:16','2022-07-21 00:13:16'),(5,1,'Service/Social Justice','2022-07-21 00:13:16','2022-07-21 00:13:16'),(6,1,'General Interest and Spiritual','2022-07-21 00:13:16','2022-07-21 00:13:16'),(7,1,'Arts & Culture','2022-07-21 00:13:16','2022-07-21 00:13:16'),(8,1,'Sports','2022-07-21 02:10:07','2022-07-21 02:10:07');
/*!40000 ALTER TABLE `club_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `club_slider_images`
--

DROP TABLE IF EXISTS `club_slider_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `club_slider_images` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `president_id` bigint unsigned NOT NULL,
  `club_id` bigint unsigned NOT NULL,
  `slider_no` int NOT NULL,
  `slider_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `club_slider_images_president_id_foreign` (`president_id`),
  KEY `club_slider_images_club_id_foreign` (`club_id`),
  CONSTRAINT `club_slider_images_club_id_foreign` FOREIGN KEY (`club_id`) REFERENCES `clubs` (`id`) ON DELETE CASCADE,
  CONSTRAINT `club_slider_images_president_id_foreign` FOREIGN KEY (`president_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `club_slider_images`
--

LOCK TABLES `club_slider_images` WRITE;
/*!40000 ALTER TABLE `club_slider_images` DISABLE KEYS */;
INSERT INTO `club_slider_images` VALUES (1,23,2,1,'image/club_slider_image/1738948028815607.jpg','2022-07-21 02:24:32','2022-07-21 02:24:32'),(2,23,2,2,'image/club_slider_image/1738948351401203.jpg','2022-07-21 02:29:40','2022-07-21 02:29:40'),(3,23,2,3,'image/club_slider_image/1738948829598255.jpg','2022-07-21 02:37:16','2022-07-21 02:37:16');
/*!40000 ALTER TABLE `club_slider_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clubs`
--

DROP TABLE IF EXISTS `clubs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clubs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `president_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vision` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mission` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `approval` tinyint(1) DEFAULT NULL,
  `home_slider_approval` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `clubs_president_id_foreign` (`president_id`),
  CONSTRAINT `clubs_president_id_foreign` FOREIGN KEY (`president_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clubs`
--

LOCK TABLES `clubs` WRITE;
/*!40000 ALTER TABLE `clubs` DISABLE KEYS */;
INSERT INTO `clubs` VALUES (1,2,'Art Club','The Art Club is a place for practicing artists to hone in on their skills, develop their techniques and portfolios, collaborate with other artists like themselves, create bonds with the community through the arts, and learn how to work together through group projects that will beautify the school and community.','Arts & Culture','Our vision is for the Vero Beach Art Club to be the voice and the representative of the visual arts and artists of our community, and to be a beacon of Artistic endeavor for the Treasure Coast. We will strive to do this by both continuing our existing programs and by strengthening our ties to our growing artistic community. We will continue our established programs as we seek to expand on them.','Purpose of the Club: Art Club gives students the opportunity to meet monthly in a more relaxed and informal setting to discuss and work on art. Students may work on projects of their own interest or may use the time as an extension of an enrolled art class.','image/club/art_club.jpg',1,1,'2022-07-21 00:13:16','2022-07-21 00:13:16'),(2,23,'UWU Cricket Club','NSBM Cricket club is one of the most pioneering sports clubs established at NSBM since its inception. We are a prosperous club with a long tradition of nurturing talented and aspiring young cricketers to be the best that they can be.\r\n\r\nNSBM Cricket Club is a friendly, vibrant and progressive cricket club that features competitive and successful players in the NSBM Green University Town. We are an inclusive and nurturing club where new players and supporters are always warmly welcomed.','Sports','To provide a safe and friendly environment for cricketers, support staff, family, and friends. To play within the true spirit of the game. To provide all aspiring cricketers the chance to develop and improve their cricket. To promote the development of junior players to senior cricketers.','The Goodwood Cricket Club aims to provide a positive and enjoyable cricket experience for people of all ages and abilities in a fully structured, organised and resourced club environment, while developing players, people and partnerships in the community.','image/club/1738947761161152.jpg',NULL,NULL,'2022-07-21 02:20:17','2022-07-21 02:20:17');
/*!40000 ALTER TABLE `clubs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contacts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `events` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `president_id` bigint unsigned NOT NULL,
  `club_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `venue` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `events_president_id_foreign` (`president_id`),
  KEY `events_club_id_foreign` (`club_id`),
  CONSTRAINT `events_club_id_foreign` FOREIGN KEY (`club_id`) REFERENCES `clubs` (`id`) ON DELETE CASCADE,
  CONSTRAINT `events_president_id_foreign` FOREIGN KEY (`president_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` VALUES (1,23,2,'Inter University Cricket Tourament - 2022','<p><strong>Inter University Cricket Tourament - 2022&nbsp;</strong></p><p>&nbsp;</p><p><strong>Organized by: </strong>Sociological society of Uva Wellassa University of Sri Lanka</p><p>The tournament is to be held for both male and female undergraduates on 25 &nbsp;th of August 2022.</p><p>&nbsp;</p><p><i><strong>Instructions for the participants</strong></i></p><p>&nbsp;</p><p>1. This premier league has 4 overs.</p><p>2. Every team must have 7 players.</p><p>3. A player cannot participate in two teams.</p><p>4. A player can throw only one over</p><p>5. Players must bring their university identity cards.</p><p>6. It will be a knock out match and the umpire\'s decision would be considered final.</p><p>7 .The tournament will be held according to international rules and regulations, the teams which violate the rules and regulations will be eliminated from the tournament.</p>','image/events/1738949682399417.jpeg','2022-08-25','08:00:00','Playground, Uva Wellassa University of Sri Lanka','2022-07-21 02:53:16','2022-07-21 02:53:16');
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `history_logs`
--

DROP TABLE IF EXISTS `history_logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `history_logs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `history_logs_user_id_foreign` (`user_id`),
  CONSTRAINT `history_logs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `history_logs`
--

LOCK TABLES `history_logs` WRITE;
/*!40000 ALTER TABLE `history_logs` DISABLE KEYS */;
INSERT INTO `history_logs` VALUES (1,3,'Registered to the Art Club Annual Fee.','2022-07-21 00:57:54','2022-07-21 00:57:54'),(2,3,'Registered to the Art Club.','2022-07-21 00:57:59','2022-07-21 00:57:59'),(3,5,'Registered to the Art Club Annual Fee.','2022-07-21 01:24:00','2022-07-21 01:24:00'),(4,23,'Created the UWU Cricket Club.','2022-07-21 02:20:17','2022-07-21 02:20:17'),(5,23,'Added a club slider.','2022-07-21 02:24:32','2022-07-21 02:24:32'),(6,23,'Added a club slider.','2022-07-21 02:29:40','2022-07-21 02:29:40'),(7,23,'Added a club slider.','2022-07-21 02:37:16','2022-07-21 02:37:16'),(8,23,'Created an event as Inter University Cricket Tourament - 2022.','2022-07-21 02:50:49','2022-07-21 02:50:49'),(9,23,'Updated the Inter University Cricket Tourament - 2022 event','2022-07-21 02:51:13','2022-07-21 02:51:13'),(10,23,'Updated the Inter University Cricket Tourament - 2022 event','2022-07-21 02:53:16','2022-07-21 02:53:16'),(11,23,'Created a notice.','2022-07-21 02:54:15','2022-07-21 02:54:15'),(12,23,'Published a notice.','2022-07-21 02:54:26','2022-07-21 02:54:26');
/*!40000 ALTER TABLE `history_logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `meetings`
--

DROP TABLE IF EXISTS `meetings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `meetings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `president_id` bigint unsigned NOT NULL,
  `club_id` bigint unsigned NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meeting_link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meeting_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meeting_password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `meetings_president_id_foreign` (`president_id`),
  KEY `meetings_club_id_foreign` (`club_id`),
  CONSTRAINT `meetings_club_id_foreign` FOREIGN KEY (`club_id`) REFERENCES `clubs` (`id`) ON DELETE CASCADE,
  CONSTRAINT `meetings_president_id_foreign` FOREIGN KEY (`president_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `meetings`
--

LOCK TABLES `meetings` WRITE;
/*!40000 ALTER TABLE `meetings` DISABLE KEYS */;
/*!40000 ALTER TABLE `meetings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (47,'2014_10_12_000000_create_users_table',1),(48,'2014_10_12_100000_create_password_resets_table',1),(49,'2019_08_19_000000_create_failed_jobs_table',1),(50,'2019_12_14_000001_create_personal_access_tokens_table',1),(51,'2022_04_17_135413_create_sliders_table',1),(52,'2022_04_19_113436_create_clubs_table',1),(53,'2022_05_11_125752_create_events_table',1),(54,'2022_05_22_062106_create_meetings_table',1),(55,'2022_05_24_053450_create_notices_table',1),(56,'2022_06_08_151108_create_registered_users_table',1),(57,'2022_06_12_065654_create_statements_table',1),(58,'2022_06_13_999999_add_active_status_to_users',1),(59,'2022_06_13_999999_add_avatar_to_users',1),(60,'2022_06_13_999999_add_dark_mode_to_users',1),(61,'2022_06_13_999999_add_messenger_color_to_users',1),(62,'2022_06_13_999999_create_favorites_table',1),(63,'2022_06_13_999999_create_messages_table',1),(64,'2022_06_14_085458_create_club_categories_table',1),(65,'2022_06_17_141249_create_club_slider_images_table',1),(66,'2022_06_18_031211_create_payments_table',1),(67,'2022_07_04_165439_create_history_logs_table',1),(68,'2022_07_05_122643_create_notifications_table',1),(69,'2022_07_20_171604_create_contacts_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notices`
--

DROP TABLE IF EXISTS `notices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `notices` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `president_id` bigint unsigned NOT NULL,
  `club_id` bigint unsigned NOT NULL,
  `notice` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notices_president_id_foreign` (`president_id`),
  KEY `notices_club_id_foreign` (`club_id`),
  CONSTRAINT `notices_club_id_foreign` FOREIGN KEY (`club_id`) REFERENCES `clubs` (`id`) ON DELETE CASCADE,
  CONSTRAINT `notices_president_id_foreign` FOREIGN KEY (`president_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notices`
--

LOCK TABLES `notices` WRITE;
/*!40000 ALTER TABLE `notices` DISABLE KEYS */;
INSERT INTO `notices` VALUES (1,2,1,'Drawing and Painting Competition\n                             Arts Club of our university is going to organise a drawing and painting competition, to be held on Saturday, 9th March, 2022, 10:00 A.M. onwards in the university playground. The competition is open to students of all faculties. Students are requested to bring their own paints and colours, sheets will be provided on the spot. For more information, contact the undersigned.\n                             Rohan\n                            (Secretary, Arts Club)',1,'2022-07-21 00:13:16','2022-07-21 00:13:16'),(2,2,1,'Inter-House Drama Competition 2022:\n                             The Inter-House Drama Competition was held at the university auditorium on 18th February 2022. Performances were produced and directed by students of every faculty. Yellow House emerged champions performing the comedy ‘The Actor’s Nightmare’ and the ICT degree program followed as the Runner Up House. The Best Director Award was shared by Kehara Edirisinghe and Haresh Wedanayake of the BBST degree program. The Best Actor award was also bagged by Haresh Wedanayake of ICT. Ayesha Ariff and Suha Farouk (CST Degree) shared the award for Best Actress while Atara Isaac of ICT Degree won the award for Best Supporting Actor. Raid Rizan of BET degree won the award for Best Stage Manager.\n                             Congratulations to all the participants both on stage and behind the curtains for presenting such a wonderful evening of drama. The link below can be used to view the performance.',1,'2022-07-21 00:13:16','2022-07-21 00:13:16'),(3,2,1,'Ramazan and Wesak Assemblies:\n                             This term we have held two beautiful assemblies in the Auditorium to mark important religious events, Ramazan and Wesak. These included readings, dances and skits, and were a wonderful way for us to come together and share in times of cultural significance.\n                             Congratulations to all students and staff involved and thank you for creating such lovely events for us to all enjoy!',1,'2022-07-21 00:13:16','2022-07-21 00:13:16'),(4,23,2,'Cricket Trials For Under-18 School Team\r\n\r\nThe is to inform all our cricket players that selection for the school teams will be made on 29th July, 20xx between 9:00 AM and 2:00 PM in the school playground. Student Cricketers who wish to be in the school team must attend the trials. For any further details, contact the undersigned.\r\n\r\nAnkur\r\nSports Captain',1,'2022-07-21 02:54:15','2022-07-21 02:54:26');
/*!40000 ALTER TABLE `notices` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `notifications` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `show_to_admin` tinyint(1) NOT NULL DEFAULT '0',
  `show_to_president` tinyint(1) NOT NULL DEFAULT '0',
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notification` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_to_admin` tinyint(1) NOT NULL DEFAULT '0',
  `status_to_president` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notifications_user_id_foreign` (`user_id`),
  CONSTRAINT `notifications_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notifications`
--

LOCK TABLES `notifications` WRITE;
/*!40000 ALTER TABLE `notifications` DISABLE KEYS */;
INSERT INTO `notifications` VALUES (1,3,1,1,'<i class=\"fa-duotone fa-right-to-bracket ml-2\"></i>','Registered user Member.',0,0,'2022-07-21 00:20:25','2022-07-21 00:20:25'),(2,3,1,1,'<i class=\"fa-duotone fa-user-plus ml-2\"></i>','Member registered to the Art Club.',0,0,'2022-07-21 00:57:59','2022-07-21 00:57:59'),(3,2,1,0,'<i class=\"fa-duotone fa-user-plus ml-2\"></i>','Registered president President.',0,0,'2022-07-21 01:17:34','2022-07-21 01:17:34'),(4,5,1,1,'<i class=\"fa-duotone fa-right-to-bracket ml-2\"></i>','Registered user Member3.',0,0,'2022-07-21 01:23:20','2022-07-21 01:23:20'),(5,23,1,0,'<i class=\"fa-duotone fa-user-plus ml-2\"></i>','Registered president President2.',0,0,'2022-07-21 02:05:13','2022-07-21 02:05:13');
/*!40000 ALTER TABLE `notifications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `payments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `club_id` bigint unsigned NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payer_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payer_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(10,2) NOT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payments`
--

LOCK TABLES `payments` WRITE;
/*!40000 ALTER TABLE `payments` DISABLE KEYS */;
INSERT INTO `payments` VALUES (1,3,1,'Annual Fee','PAYID-MLMPDQA2VB06746CN604252T','E5TJ2Q5SLJ2JJ','sb-vdbmy19355866@business.example.com',20.00,'USD','approved','2022-07-21 00:57:54','2022-07-21 00:57:54'),(2,5,1,'Annual Fee','PAYID-MLMPP5A8TD05141XP6532711','E5TJ2Q5SLJ2JJ','sb-vdbmy19355866@business.example.com',20.00,'USD','approved','2022-07-21 01:24:00','2022-07-21 01:24:00');
/*!40000 ALTER TABLE `payments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `registered_users`
--

DROP TABLE IF EXISTS `registered_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `registered_users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `club_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `registered_users_user_id_foreign` (`user_id`),
  KEY `registered_users_club_id_foreign` (`club_id`),
  CONSTRAINT `registered_users_club_id_foreign` FOREIGN KEY (`club_id`) REFERENCES `clubs` (`id`) ON DELETE CASCADE,
  CONSTRAINT `registered_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registered_users`
--

LOCK TABLES `registered_users` WRITE;
/*!40000 ALTER TABLE `registered_users` DISABLE KEYS */;
INSERT INTO `registered_users` VALUES (1,3,1,'2022-07-21 00:57:59','2022-07-21 00:57:59');
/*!40000 ALTER TABLE `registered_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sliders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `president_id` bigint unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sliders_president_id_foreign` (`president_id`),
  CONSTRAINT `sliders_president_id_foreign` FOREIGN KEY (`president_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sliders`
--

LOCK TABLES `sliders` WRITE;
/*!40000 ALTER TABLE `sliders` DISABLE KEYS */;
/*!40000 ALTER TABLE `sliders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `statements`
--

DROP TABLE IF EXISTS `statements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `statements` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `admin_id` bigint unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statement` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `statements_admin_id_foreign` (`admin_id`),
  CONSTRAINT `statements_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `statements`
--

LOCK TABLES `statements` WRITE;
/*!40000 ALTER TABLE `statements` DISABLE KEYS */;
INSERT INTO `statements` VALUES (1,1,'welcome','We are pleased to welcome you to the University club management system. We have an excellent reputation for creating innovative entrepreneurs. We aim to give every student in our care the best possible education to prepare them for life beyond University. Through this system, you can view any club of the University and stay connected with us.','2022-07-21 00:13:16','2022-07-21 00:13:16'),(2,1,'about','We are a group of undergraduate students concentrating on forming a community of students that will work as a team to study web development and be interested in digitalization. Through this web application, we hope to bring all the clubs in the University closer to the students through the online methodology.','2022-07-21 00:13:16','2022-07-21 00:13:16'),(3,1,'mission','Our mission is to cultivate each student\'s spiritual, moral, social, emotional, and physical well-being via a learning experience that acknowledges each kid as an individual as well as a valuable asset to society. In addition to academic activities, we hope to make all activities effective in the light of the current situation that is directing students to extracurricular activities.','2022-07-21 00:13:16','2022-07-21 00:13:16'),(4,1,'plan','Due to the Covid-19 pandemic, we plan to carry out the vast majority of our projects online. This system allows us to connect with all our students and exchange information. Students can contact us anytime, and students who wish to join a particular club can register online through this system. It also allows us to move away from using paper and adapt to the modern world by collecting information through technology and efficiently managing it.','2022-07-21 00:13:16','2022-07-21 00:13:16'),(5,1,'vision','Our vision is to manage and maintain the societies within the University efficiently. In response to our concerns about the state of the planet, we are expanding our University and constructing a Green campus, which will give our students ownership, understanding, and duty to the world at large in climate care. We foresee their development into world-class practitioners through regular in-house training and workshops, allowing them to hold their own anywhere in an ever-changing world.','2022-07-21 00:13:16','2022-07-21 00:13:16');
/*!40000 ALTER TABLE `statements` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `role` tinyint(1) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sex` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `degree_program` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_line_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_line_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT '0',
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dark_mode` tinyint(1) NOT NULL DEFAULT '0',
  `messenger_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#2180f3',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,'Admin','admin@demo.com','2022-06-13 09:13:47',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$UQMWKz2BJIdqsN0NbIw4MOexYWHVUa4r9UiyzU1frlXuPMahTTTOa',NULL,'2022-07-21 00:13:16','2022-07-21 00:13:16',0,'assets/images/Icons/User/profile_pic.png',0,'#2180f3'),(2,2,'President','president@demo.com','2022-06-13 09:13:47',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$ZK4ob9qOzvzJ5KuXlJrk0Ova2XwFWvjoSjxAAPMZ9MUWVl6ZpNc9q',NULL,'2022-07-21 00:13:16','2022-07-21 00:13:16',0,'assets/images/Icons/User/profile_pic.png',0,'#2180f3'),(3,3,'Member','member@demo.com','2022-06-13 09:13:47',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$kxLOgsASn0uLEt1fMe4sy.7eXM1eI9NDVX4wD01nNlmuBeUGLKaY2',NULL,'2022-07-21 00:13:16','2022-07-21 00:13:16',0,'assets/images/Icons/User/profile_pic.png',0,'#2180f3'),(4,3,'Member2','member2@demo.com','2022-07-21 01:21:16',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$jXT.4nkmcKcOePNg3DXOheny9wInJPpuic8cmVPC6w31q92mpT31W',NULL,'2022-07-21 01:18:33','2022-07-21 01:21:16',0,'',0,'#2180f3'),(5,3,'Member3','member3@demo.com','2022-07-21 01:21:16',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$jXT.4nkmcKcOePNg3DXOheny9wInJPpuic8cmVPC6w31q92mpT31W',NULL,'2022-07-21 01:18:33','2022-07-21 01:21:16',0,'',0,'#2180f3'),(6,3,'Member4','member4@demo.com','2022-07-21 01:21:16',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$jXT.4nkmcKcOePNg3DXOheny9wInJPpuic8cmVPC6w31q92mpT31W',NULL,'2022-07-21 01:18:33','2022-07-21 01:21:16',0,'',0,'#2180f3'),(7,3,'Member5','member5@demo.com','2022-07-21 01:21:16',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$jXT.4nkmcKcOePNg3DXOheny9wInJPpuic8cmVPC6w31q92mpT31W',NULL,'2022-07-21 01:18:33','2022-07-21 01:21:16',0,'',0,'#2180f3'),(8,3,'Member6','member6@demo.com','2022-07-21 01:21:16',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$jXT.4nkmcKcOePNg3DXOheny9wInJPpuic8cmVPC6w31q92mpT31W',NULL,'2022-07-21 01:18:33','2022-07-21 01:21:16',0,'',0,'#2180f3'),(9,3,'Member7','member7@demo.com','2022-07-21 01:21:16',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$jXT.4nkmcKcOePNg3DXOheny9wInJPpuic8cmVPC6w31q92mpT31W',NULL,'2022-07-21 01:18:33','2022-07-21 01:21:16',0,'',0,'#2180f3'),(10,3,'Member8','member8@demo.com','2022-07-21 01:21:16',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$jXT.4nkmcKcOePNg3DXOheny9wInJPpuic8cmVPC6w31q92mpT31W',NULL,'2022-07-21 01:18:33','2022-07-21 01:21:16',0,'',0,'#2180f3'),(11,3,'Member9','member9@demo.com','2022-07-21 01:21:16',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$jXT.4nkmcKcOePNg3DXOheny9wInJPpuic8cmVPC6w31q92mpT31W',NULL,'2022-07-21 01:18:33','2022-07-21 01:21:16',0,'',0,'#2180f3'),(12,3,'Member10','member10@demo.com','2022-07-21 01:21:16',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$jXT.4nkmcKcOePNg3DXOheny9wInJPpuic8cmVPC6w31q92mpT31W',NULL,'2022-07-21 01:18:33','2022-07-21 01:21:16',0,'',0,'#2180f3'),(13,3,'Member11','member11@demo.com','2022-07-21 01:21:16',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$jXT.4nkmcKcOePNg3DXOheny9wInJPpuic8cmVPC6w31q92mpT31W',NULL,'2022-07-21 01:18:33','2022-07-21 01:21:16',0,'',0,'#2180f3'),(14,3,'Member12','member12@demo.com','2022-07-21 01:21:16',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$jXT.4nkmcKcOePNg3DXOheny9wInJPpuic8cmVPC6w31q92mpT31W',NULL,'2022-07-21 01:18:33','2022-07-21 01:21:16',0,'',0,'#2180f3'),(15,3,'Member13','member13@demo.com','2022-07-21 01:21:16',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$jXT.4nkmcKcOePNg3DXOheny9wInJPpuic8cmVPC6w31q92mpT31W',NULL,'2022-07-21 01:18:33','2022-07-21 01:21:16',0,'',0,'#2180f3'),(16,3,'Member14','member14@demo.com','2022-07-21 01:21:16',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$jXT.4nkmcKcOePNg3DXOheny9wInJPpuic8cmVPC6w31q92mpT31W',NULL,'2022-07-21 01:18:33','2022-07-21 01:21:16',0,'',0,'#2180f3'),(17,3,'Member15','member15@demo.com','2022-07-21 01:21:16',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$jXT.4nkmcKcOePNg3DXOheny9wInJPpuic8cmVPC6w31q92mpT31W',NULL,'2022-07-21 01:18:33','2022-07-21 01:21:16',0,'',0,'#2180f3'),(18,3,'Member16','member16@demo.com','2022-07-21 01:21:16',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$jXT.4nkmcKcOePNg3DXOheny9wInJPpuic8cmVPC6w31q92mpT31W',NULL,'2022-07-21 01:18:33','2022-07-21 01:21:16',0,'',0,'#2180f3'),(19,3,'Member17','member17@demo.com','2022-07-21 01:21:16',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$jXT.4nkmcKcOePNg3DXOheny9wInJPpuic8cmVPC6w31q92mpT31W',NULL,'2022-07-21 01:18:33','2022-07-21 01:21:16',0,'',0,'#2180f3'),(20,3,'Member18','member18@demo.com','2022-07-21 01:21:16',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$jXT.4nkmcKcOePNg3DXOheny9wInJPpuic8cmVPC6w31q92mpT31W',NULL,'2022-07-21 01:18:33','2022-07-21 01:21:16',0,'',0,'#2180f3'),(21,3,'Member19','member19@demo.com','2022-07-21 01:21:16',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$jXT.4nkmcKcOePNg3DXOheny9wInJPpuic8cmVPC6w31q92mpT31W',NULL,'2022-07-21 01:18:33','2022-07-21 01:21:16',0,'',0,'#2180f3'),(22,3,'Member20','member20@demo.com','2022-07-21 01:21:16',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$jXT.4nkmcKcOePNg3DXOheny9wInJPpuic8cmVPC6w31q92mpT31W',NULL,'2022-07-21 01:18:33','2022-07-21 01:21:16',0,'',0,'#2180f3'),(23,2,'President2','president2@demo.com','2022-07-21 01:21:16',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$jXT.4nkmcKcOePNg3DXOheny9wInJPpuic8cmVPC6w31q92mpT31W',NULL,'2022-07-21 01:18:33','2022-07-21 01:21:16',0,'',0,'#2180f3'),(24,2,'President3','president3@demo.com','2022-07-21 01:21:16',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$jXT.4nkmcKcOePNg3DXOheny9wInJPpuic8cmVPC6w31q92mpT31W',NULL,'2022-07-21 01:18:33','2022-07-21 01:21:16',0,'',0,'#2180f3'),(25,2,'President4','president4@demo.com','2022-07-21 01:21:16',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$jXT.4nkmcKcOePNg3DXOheny9wInJPpuic8cmVPC6w31q92mpT31W',NULL,'2022-07-21 01:18:33','2022-07-21 01:21:16',0,'',0,'#2180f3'),(26,2,'President5','president5@demo.com','2022-07-21 01:21:16',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$jXT.4nkmcKcOePNg3DXOheny9wInJPpuic8cmVPC6w31q92mpT31W',NULL,'2022-07-21 01:18:33','2022-07-21 01:21:16',0,'',0,'#2180f3'),(27,2,'President6','president6@demo.com','2022-07-21 01:21:16',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$jXT.4nkmcKcOePNg3DXOheny9wInJPpuic8cmVPC6w31q92mpT31W',NULL,'2022-07-21 01:18:33','2022-07-21 01:21:16',0,'',0,'#2180f3'),(28,2,'President7','president7@demo.com','2022-07-21 01:21:16',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$jXT.4nkmcKcOePNg3DXOheny9wInJPpuic8cmVPC6w31q92mpT31W',NULL,'2022-07-21 01:18:33','2022-07-21 01:21:16',0,'',0,'#2180f3'),(29,2,'President8','president8@demo.com','2022-07-21 01:21:16',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$jXT.4nkmcKcOePNg3DXOheny9wInJPpuic8cmVPC6w31q92mpT31W',NULL,'2022-07-21 01:18:33','2022-07-21 01:21:16',0,'',0,'#2180f3'),(30,2,'President9','president9@demo.com','2022-07-21 01:21:16',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$jXT.4nkmcKcOePNg3DXOheny9wInJPpuic8cmVPC6w31q92mpT31W',NULL,'2022-07-21 01:18:33','2022-07-21 01:21:16',0,'',0,'#2180f3'),(31,2,'President10','president10@demo.com','2022-07-21 01:21:16',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$jXT.4nkmcKcOePNg3DXOheny9wInJPpuic8cmVPC6w31q92mpT31W',NULL,'2022-07-21 01:18:33','2022-07-21 01:21:16',0,'',0,'#2180f3');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-07-21 14:09:31
