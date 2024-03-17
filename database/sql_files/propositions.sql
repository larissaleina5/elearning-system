-- MySQL dump 10.13  Distrib 8.0.34, for Linux (x86_64)
--
-- Host: localhost    Database: elearning
-- ------------------------------------------------------
-- Server version	8.0.34-0ubuntu0.22.04.1

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
-- Table structure for table `propositions`
--

DROP TABLE IF EXISTS `propositions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `propositions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `proposition_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `propositions`
--

LOCK TABLES `propositions` WRITE;
/*!40000 ALTER TABLE `propositions` DISABLE KEYS */;
INSERT INTO `propositions` VALUES (2,'Hyper text markup Language','2024-03-11 07:47:01','2024-03-11 07:47:01'),(3,'Hype text mark Language','2024-03-11 07:47:01','2024-03-11 07:47:01'),(4,'Hyper text markup Link','2024-03-11 07:47:02','2024-03-11 07:47:02'),(5,'Hyper text management Language','2024-03-11 07:47:02','2024-03-11 07:47:02'),(6,'font-size','2024-03-16 19:32:27','2024-03-16 19:32:27'),(7,'font-weight','2024-03-16 19:32:27','2024-03-16 19:32:27'),(8,'font-text','2024-03-16 19:32:27','2024-03-16 19:32:27'),(9,'font-bold','2024-03-16 19:32:28','2024-03-16 19:32:28'),(10,'color','2024-03-16 19:44:07','2024-03-16 19:44:07'),(11,'background-color','2024-03-16 19:44:08','2024-03-16 19:44:08'),(12,'text-color','2024-03-16 19:44:08','2024-03-16 19:44:08'),(13,'text-background','2024-03-16 19:44:08','2024-03-16 19:44:08'),(14,'font-weight','2024-03-16 19:50:44','2024-03-16 19:50:44'),(15,'font-style','2024-03-16 19:50:44','2024-03-16 19:50:44'),(16,'font-type','2024-03-16 19:50:44','2024-03-16 19:50:44'),(17,'font','2024-03-16 19:50:44','2024-03-16 19:50:44'),(18,'spacing elements','2024-03-17 11:04:28','2024-03-17 11:04:28'),(19,'skip a line in a paragraph','2024-03-17 11:04:28','2024-03-17 11:04:28'),(20,'italicize elements','2024-03-17 11:04:28','2024-03-17 11:04:28'),(21,'make a paragraph bold','2024-03-17 11:04:28','2024-03-17 11:04:28'),(22,'use the text-space property','2024-03-17 11:09:44','2024-03-17 11:09:44'),(23,'use the text-center property','2024-03-17 11:09:45','2024-03-17 11:09:45'),(24,'use the text-font property','2024-03-17 11:09:45','2024-03-17 11:09:45'),(25,'use the text-sample','2024-03-17 11:09:45','2024-03-17 11:09:45'),(26,'two','2024-03-17 11:10:43','2024-03-17 11:10:43'),(27,'one','2024-03-17 11:10:43','2024-03-17 11:10:43'),(28,'rr','2024-03-17 11:10:43','2024-03-17 11:10:43'),(29,'yo','2024-03-17 11:10:43','2024-03-17 11:10:43');
/*!40000 ALTER TABLE `propositions` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-03-17 13:18:45
