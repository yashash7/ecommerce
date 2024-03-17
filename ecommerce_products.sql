-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: localhost    Database: ecommerce
-- ------------------------------------------------------
-- Server version	8.0.32

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
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `price` int DEFAULT NULL,
  `imgurl` text,
  `category` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (2,'henley shirts',39,'https://m.media-amazon.com/images/I/61v-quCxZAL._AC_UL480_FMwebp_QL65_.jpg','men'),(4,'Mens black T-shirt',22,'https://m.media-amazon.com/images/I/71F4P1t80EL._AC_UL480_FMwebp_QL65_.jpg','men'),(5,'Mens western fit casuals',12,'https://m.media-amazon.com/images/I/81Pjw+BUtxL._AC_UL480_FMwebp_QL65_.jpg','men'),(6,'Men casual shirt',13,'https://m.media-amazon.com/images/I/81+oQBvBR-L._AC_UL480_FMwebp_QL65_.jpg','men'),(7,'Womens casual sweat shirt',30,'https://m.media-amazon.com/images/I/71K7W60RImL._AC_UL480_FMwebp_QL65_.jpg','women'),(8,'western shirt for women',39,'https://m.media-amazon.com/images/I/81AET7P5ASL._AC_UL480_FMwebp_QL65_.jpg','women'),(9,'womens floral top',25,'https://m.media-amazon.com/images/I/810yz3XJoYS._AC_UL480_FMwebp_QL65_.jpg','women'),(10,'2 piece outfit for women',29,'https://m.media-amazon.com/images/I/7102mgoKZXL._AC_UL480_FMwebp_QL65_T1F_.jpg','women'),(11,'womens fleece jacket',39,'https://m.media-amazon.com/images/I/71o6FTyGMXL._AC_UL480_FMwebp_QL65_.jpg','women'),(12,'cropped jean jacket for women',51,'https://m.media-amazon.com/images/I/71gR3P-Pc6L._AC_UL480_FMwebp_QL65_.jpg','women'),(13,'floral maxi dress for women',25,'https://m.media-amazon.com/images/I/41-vW7kTv8L._AC_SR320,400_.jpg','women'),(14,'long-sleeve t-shirt',29,'https://m.media-amazon.com/images/I/71jGLr6AZfL._AC_UL480_FMwebp_QL65_.jpg','men');
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

-- Dump completed on 2024-03-17 15:37:25
