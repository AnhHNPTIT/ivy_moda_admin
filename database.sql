-- MySQL dump 10.13  Distrib 8.0.29, for Linux (x86_64)
--
-- Host: 66.42.54.109    Database: vtca
-- ------------------------------------------------------
-- Server version	8.0.32-0ubuntu0.22.10.2

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
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admins` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (1,'','','admin@gmail.com','1'),(2,'','','mswhite','mswhite'),(10,'','','admin','admin'),(11,'','','test@gmail.com','e10adc3949ba59abbe56e057f20f883e'),(12,'','','voicoixinhgai271297@gmail.com','c4ca4238a0b923820dcc509a6f75849b'),(13,'<script>alert(\"XSS\");</script>','<script>alert(\"XSS\");</script>','voicoixinhgai7@gmail.com','c4ca4238a0b923820dcc509a6f75849b'),(14,'test1','test1','test1@gmail.com','c4ca4238a0b923820dcc509a6f75849b'),(15,'\'test1\'?@','\'test1\'?@','test12@gmail.com','c4ca4238a0b923820dcc509a6f75849b'),(16,'','','voico97@gmail.com','c4ca4238a0b923820dcc509a6f75849b'),(17,'%a','a%','voic7@gmail.com','c4ca4238a0b923820dcc509a6f75849b');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `code` varchar(45) NOT NULL,
  `thumbnail` varchar(200) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `old_price` int NOT NULL,
  `price` int NOT NULL,
  `size` varchar(10) NOT NULL,
  `color` varchar(45) NOT NULL,
  `quantity` int NOT NULL DEFAULT '0',
  `introduction` mediumtext NOT NULL,
  `description` longtext NOT NULL,
  `preserve` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'aaaaa bggb ','2','images/vector.png','aaaaa-bggb-',4,5,'XL','red',6,'7','8','9'),(2,'update oe=kela','2','images/vector.png','update-oe-kela',4,5,'S','gray',6,'7','8','9'),(3,'dominich','2','images/vector.png','dominich',4,5,'S','gray',6,'7','8','9'),(6,'sasas','2','images/vector.png','sasas',2,2,'S','gray',2,'2','2','2'),(7,'sasas','2','images/vector.png','sasas',2,2,'S','gray',2,'2','2','2'),(8,'sasas','2','images/vector.png','sasas',2,2,'S','gray',2,'2','2','2'),(9,'sasas','2','images/vector.png','sasas',2,2,'S','gray',2,'2','2','2'),(10,'sasas','2','images/vector.png','sasas',2,2,'S','gray',2,'2','2','2'),(11,'sasas','2','images/vector.png','sasas',2,2,'S','gray',2,'2','2','2'),(12,'sasas','2','images/vector.png','sasas',2,2,'S','gray',2,'2','2','2'),(13,'sasas','2','images/vector.png','sasas',2,2,'S','gray',2,'2','2','2'),(14,'sasas','2','images/vector.png','sasas',2,2,'S','gray',2,'2','2','2'),(15,'sasas','2','images/vector.png','sasas',2,2,'S','gray',2,'2','2','2'),(17,'sasas','2','images/vector.png','sasas',2,2,'S','gray',2,'2','2','2'),(18,'sasas','2','images/vector.png','sasas',2,2,'S','gray',2,'2','2','2'),(19,'sasas','2','images/vector.png','sasas',2,2,'S','gray',2,'2','2','2'),(20,'sasas','2','images/vector.png','sasas',2,2,'S','gray',2,'2','2','2'),(21,'sasas','2','images/vector.png','sasas',2,2,'S','gray',2,'2','2','2'),(22,'domiich','2','images/vector.png','domiich',2,2,'S','gray',2,'2','2','2'),(23,'sasas','2','images/image.png','sasas',2,2,'S','gray',2,'2','2','2'),(24,'sasas','2','images/image.png','sasas',2,2,'S','gray',2,'2','2','2'),(25,'sasas','2','images/image.png','sasas',2,2,'S','gray',2,'2','2','2'),(26,'sasas 1234','2','images/Image.png','sasas-1234',2,2,'S','gray',2,'2','2','2'),(35,'demo','demo','images/Image.png','demo',1,2,'XL','red',12,'12','12','12');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-03-05 23:34:22
