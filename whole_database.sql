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
  `quick_desc` varchar(30) DEFAULT NULL,
  `quick_definition` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detail_wisata`
--

LOCK TABLES `detail_wisata` WRITE;
/*!40000 ALTER TABLE `detail_wisata` DISABLE KEYS */;
INSERT INTO `detail_wisata` VALUES (1,'Tanah Lot','Tanah Lot','20.000 orang','Br. Beraban, Kec. Kediri, Kabupaten Tabanan, Bali','Temple in the Open Ocean','To many people, Tanah Lot epitomizes the romantic island of Bali. Tanah Lot means Land in The Sea, a perfectly fit name for its unique offshore settings. The silhouette of Pura Tanah Lot is one of the most popular iconic features of Bali.'),(2,'GWK','Garuda Wisnu Kencana','200.000 orang','Jl. Raya Uluwatu, Ungasan, Kuta Sel, Kabupaten Badung, Bali','Cultural Park','GWK Cultural Park is home to some of the most iconic cultural landmarks in Bali, including the magnificent Garuda Wisnu Kencana statue, which stands tall at 121 meters and is a representation of the Hindu god Vishnu and his mount, the Garuda bird.'),(3,'Monkey Forest Ubud','Sacred Monkey Forest Sanctuary','100.000 orang','Jl. Monkey Forest, Ubud, Kecamatan Ubud, Kabupaten Gianyar, Bali','Sanctuary','The Ubud Monkey Forest is a nature reserve and temple complex in Ubud, Bali. It houses approximately 340 monkeys which are known as long-tailed Macaques (Macaca fascicularis). There are four groups of monkeys each occupying different territories in the park. The Sacred Monkey Forest is a popular tourist attraction in Ubud and is often visited by over 10,000 tourists a month.'),(4,'Pantai Jimbaran','Jimbaran Beach','0 orang','Jimbaran Village, Kabupaten Badung, Bali','White Sand Beach','One of the white sand beaches with sunset views that are so beautiful, so beautiful every evening this beach is crowded with visitors. Jimbaran Beach is one of the tourist attractions in Jimbaran Bali which is very well known to foreign countries. the sand is fine and white to yellow – brass. Cleanliness on this beach is always maintained, because there are janitors on duty to clean the beach area.'),(5,'Kebun Raya Bedugul','Bedugul Botanical Garden','15.500 orang','Jl. Kebun Raya Candikuning, Baturiti, Kabupaten Tabanan, Bali','Botanical Garden','Tourist attractions Bedugul Bali Botanical Garden or known as the Bali Botanical Garden, one of the 10 favorite and famous tourist attractions in Bali which are most frequently visited by tourists.');
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
  `email` varchar(100) DEFAULT NULL,
  `fullname` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('admin','admin','1',NULL,NULL),('andi','andi','0',NULL,NULL),('ardik','ppppp','0','ooooo@gmail.com','irfan ode ardik'),('deode','ooooo','0','odeeeee@gmail.com','ode ardika'),('ifode','irfan','0','irfanardika@gmail.com','irfan ardika'),('odeardika','odeardika','1',NULL,NULL),('odeputu','12345','0','putuode@gmail.com','ode putu'),('sing up','12345','0','singup@gmail.com','test sign up');
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

-- Dump completed on 2023-05-26 19:28:39
