-- MySQL dump 10.13  Distrib 8.0.20, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: kohaku
-- ------------------------------------------------------
-- Server version	8.0.20

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
-- Table structure for table `clase`
--

DROP TABLE IF EXISTS `clase`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clase` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `url` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `id_instructor` int unsigned NOT NULL,
  `start` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `end` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `inicio_normal` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `final_normal` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_instructor` (`id_instructor`),
  CONSTRAINT `clase_ibfk_1` FOREIGN KEY (`id_instructor`) REFERENCES `usuario` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clase`
--

LOCK TABLES `clase` WRITE;
/*!40000 ALTER TABLE `clase` DISABLE KEYS */;
INSERT INTO `clase` VALUES (1,'primera clase','mi primera clase','http://localhost/calendario/descripcion_evento.php?id=1',7,'1614438660000','1614442320000','27/02/2021 12:11:00','27/02/2021 13:12:00'),(2,'clase de estiramiento','clase de estiramiento','http://localhost/calendario/descripcion_evento.php?id=2',6,'1614448260000','1614451920000','27/02/2021 14:51:00','27/02/2021 15:52:00'),(4,'clase martes','clase martes','http://localhost/calendario/descripcion_evento.php?id=4',6,'1614279600000','1614283200000','25/02/2021 16:00:00','25/02/2021 17:00:00'),(6,'clase lunes','clase lunes','http://localhost/calendario/descripcion_evento.php?id=6',6,'1612210680000','1612214280000','01/02/2021 17:18:00','01/02/2021 18:18:00'),(8,'clase de prueba','mejorar','http://localhost/calendario/descripcion_evento.php?id=8',7,'1612647720000','1612651320000','06/02/2021 18:42:00','06/02/2021 19:42:00'),(9,'clase de prueba','mejorar','http://localhost/calendario/descripcion_evento.php?id=9',7,'1613339460000','1613343060000','14/02/2021 18:51:00','14/02/2021 19:51:00'),(10,'clase de brazo','clase de brazo','http://localhost/calendario/descripcion_evento.php?id=10',7,'1614981600000','1614985200000','05/03/2021 19:00:00','05/03/2021 20:00:00'),(11,'clase de brazo','clase de brazo','http://localhost/calendario/descripcion_evento.php?id=11',7,'1615411740000','1615418940000','10/03/2021 18:29:00','10/03/2021 20:29:00'),(13,'clase domingo 7','clase de pATADA','models/descripcion_evento.php?id=13',7,'1615163160000','1615166760000','07/03/2021 21:26:00','07/03/2021 22:26:00'),(14,'gbnf','fgn','models/descripcion_evento.php?id=14',7,'1615163760000','1615163760000','07/03/2021 21:36:00','07/03/2021 21:36:00'),(15,'sdf','sdf','models/descripcion_evento.php?id=15',7,'1615423020000','1615423020000','10/03/2021 21:37:00','10/03/2021 21:37:00'),(16,'sdf','sdf','models/descripcion_evento.php?id=16',7,'1615423020000','1615423020000','10/03/2021 21:37:00','10/03/2021 21:37:00'),(17,'adv','sdf','models/descripcion_evento.php?id=17',7,'1615337040000','1615337040000','09/03/2021 21:44:00','09/03/2021 21:44:00'),(18,'wsedrf','sedf','models/descripcion_evento.php?id=18',8,'1616633100000','1616633100000','24/03/2021 21:45:00','24/03/2021 21:45:00'),(19,'wsedrf','sedf','models/descripcion_evento.php?id=19',8,'1616633100000','1616633100000','24/03/2021 21:45:00','24/03/2021 21:45:00'),(20,'wsedrf','sedf','models/descripcion_evento.php?id=20',8,'1616633100000','1616633100000','24/03/2021 21:45:00','24/03/2021 21:45:00'),(22,'sdv','dfv','models/descripcion_evento.php?id=22',7,'1614646080000','1614646080000','01/03/2021 21:48:00','01/03/2021 21:48:00');
/*!40000 ALTER TABLE `clase` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-03-12 22:47:15
