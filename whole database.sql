CREATE DATABASE  IF NOT EXISTS `wisata_finder` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `wisata_finder`;
-- MySQL dump 10.13  Distrib 8.0.31, for Win64 (x86_64)
--
-- Host: localhost    Database: wisata_finder
-- ------------------------------------------------------
-- Server version	8.0.31

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `keyword_tempat_wisata`
--

DROP TABLE IF EXISTS `keyword_tempat_wisata`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `keyword_tempat_wisata` (
  `id` int NOT NULL AUTO_INCREMENT,
  `place_name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `detail_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `detail_location` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `keyword_tempat_wisata`
--

LOCK TABLES `keyword_tempat_wisata` WRITE;
/*!40000 ALTER TABLE `keyword_tempat_wisata` DISABLE KEYS */;
INSERT INTO `keyword_tempat_wisata` VALUES (1,'GWK','ganesha wisnu kencana gwk','jimbaran kuta selatan badung '),(2,'Tanah Lot','tanah lot pura pantai','tabanan kediri'),(3,'Monkey Forest Ubud','temple mandala suci wenara sacred sanctuary monkey forest hutan monyet pura','ubud gianyar bali padangtegal dalam agung'),(4,'Pantai Jimbaran','beach pantai','jimbaran bali badung kuta selatan'),(5,'Kebun Raya Bedugul','kebun raya bedugul botanical garden','tabanan bali baturiti tabanan candikuning');
/*!40000 ALTER TABLE `keyword_tempat_wisata` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `photo_wisata_place`
--

DROP TABLE IF EXISTS `photo_wisata_place`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `photo_wisata_place` (
  `id` int NOT NULL AUTO_INCREMENT,
  `place_name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `folder_path` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `photo_wisata_place`
--

LOCK TABLES `photo_wisata_place` WRITE;
/*!40000 ALTER TABLE `photo_wisata_place` DISABLE KEYS */;
/*!40000 ALTER TABLE `photo_wisata_place` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` varchar(10) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('admin','admin','1'),('andi','andi','0');
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

-- Dump completed on 2023-05-24 19:32:47
