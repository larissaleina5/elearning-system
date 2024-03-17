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
-- Table structure for table `proposition_question`
--

DROP TABLE IF EXISTS `proposition_question`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `proposition_question` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `question_id` bigint unsigned NOT NULL,
  `proposition_id` bigint unsigned NOT NULL,
  `isGoodOrFalse` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `proposition_question_question_id_foreign` (`question_id`),
  KEY `proposition_question_proposition_id_foreign` (`proposition_id`),
  CONSTRAINT `proposition_question_proposition_id_foreign` FOREIGN KEY (`proposition_id`) REFERENCES `propositions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `proposition_question_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proposition_question`
--

LOCK TABLES `proposition_question` WRITE;
/*!40000 ALTER TABLE `proposition_question` DISABLE KEYS */;
INSERT INTO `proposition_question` VALUES (2,2,2,1,NULL,NULL),(3,2,3,0,NULL,NULL),(4,2,4,0,NULL,NULL),(5,2,5,0,NULL,NULL),(6,3,6,0,NULL,NULL),(7,3,7,1,NULL,NULL),(8,3,8,0,NULL,NULL),(9,3,9,0,NULL,NULL),(10,4,10,1,NULL,NULL),(11,4,11,0,NULL,NULL),(12,4,12,0,NULL,NULL),(13,4,13,0,NULL,NULL),(14,5,14,0,NULL,NULL),(15,5,15,1,NULL,NULL),(16,5,16,0,NULL,NULL),(17,5,17,0,NULL,NULL),(18,6,18,0,NULL,NULL),(19,6,19,1,NULL,NULL),(20,6,20,0,NULL,NULL),(21,6,21,0,NULL,NULL),(22,7,22,0,NULL,NULL),(23,7,23,1,NULL,NULL),(24,7,24,0,NULL,NULL),(25,7,25,0,NULL,NULL),(26,8,26,0,NULL,NULL),(27,8,27,1,NULL,NULL),(28,8,28,0,NULL,NULL),(29,8,29,0,NULL,NULL);
/*!40000 ALTER TABLE `proposition_question` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-03-17 13:19:21
