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
-- Table structure for table `detail_wisata`
--

DROP TABLE IF EXISTS `detail_wisata`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `detail_wisata` (
  `id` int NOT NULL AUTO_INCREMENT,
  `place_name` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `price` varchar(25) NOT NULL,
  `address` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detail_wisata`
--

LOCK TABLES `detail_wisata` WRITE;
/*!40000 ALTER TABLE `detail_wisata` DISABLE KEYS */;
INSERT INTO `detail_wisata` VALUES (1,'Tanah Lot','Tanah Lot','20.000 orang','Br. Beraban, Kec. Kediri, Kabupaten Tabanan, Bali');
/*!40000 ALTER TABLE `detail_wisata` ENABLE KEYS */;
UNLOCK TABLES;

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
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reviews` (
  `id` int NOT NULL AUTO_INCREMENT,
  `place_name` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `date_review` datetime DEFAULT CURRENT_TIMESTAMP,
  `reviews` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reviews`
--

LOCK TABLES `reviews` WRITE;
/*!40000 ALTER TABLE `reviews` DISABLE KEYS */;
INSERT INTO `reviews` VALUES (1,'Tanah Lot','andi','2023-05-26 01:08:10','Banyak ada makanan enak, Tempatnya sangat bagus ada goa ular juga'),(2,'Tanah Lot','ode','2023-05-26 01:08:36','Tempatnya sangat bagus, Bersih tempatnya, Puranya bagus, sunset bagus');
/*!40000 ALTER TABLE `reviews` ENABLE KEYS */;
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

--
-- Table structure for table `wisata_events`
--

DROP TABLE IF EXISTS `wisata_events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `wisata_events` (
  `id` int NOT NULL AUTO_INCREMENT,
  `place_name` varchar(50) NOT NULL,
  `event_name` varchar(100) NOT NULL,
  `event_date` date NOT NULL,
  `detail` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wisata_events`
--

LOCK TABLES `wisata_events` WRITE;
/*!40000 ALTER TABLE `wisata_events` DISABLE KEYS */;
INSERT INTO `wisata_events` VALUES (1,'Tanah Lot','Tanah Lot Arts Festival','2023-06-01','The town of Tabanan, Bali is home to Tanah Lot Temple. A beautiful and magnificent temple standing on an offshore island. Right in the northwestern of Denpasar. Thousands of tourist visit this site every year. Then the government thought of an upgrade. That\'s how Tanah Lot Arts Festival started. The target was 55,000 thousand visitors. It also introduces a massive performance by 1800 dancers called Rejang Sandat. Tanah Lot Arts Festival runs for three days showcasing numerous cultural Tabanan heritage. While the schedule isn\'t limited to arts, it also has culinary sections. Where the coffee festival will also take part, it exhibits local coffee varieties as well as talented baristas from coffee shops across the city.');
/*!40000 ALTER TABLE `wisata_events` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-05-26  3:07:43
