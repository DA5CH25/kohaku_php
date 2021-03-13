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
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `id_usuario` int unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `numero_identificacion` varchar(20) NOT NULL,
  `telefono_fijo` varchar(20) NOT NULL,
  `telefono_movil` varchar(20) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `correo_electronico` varchar(100) NOT NULL,
  `clases_restantes` int NOT NULL,
  `clave` varchar(100) NOT NULL,
  `tipo_usuario_id_tipo_usuario` int unsigned NOT NULL,
  `tipo_documento_id_tipo_documento` int unsigned NOT NULL,
  `rango_usuario_id_rango_usuario` int unsigned NOT NULL,
  `estado_usuario_id_estado_usuario` int unsigned NOT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `id_usuario_UNIQUE` (`id_usuario`),
  KEY `fk_usuario_tipo_usuario1_idx` (`tipo_usuario_id_tipo_usuario`),
  KEY `fk_usuario_tipo_documento1_idx` (`tipo_documento_id_tipo_documento`),
  KEY `fk_usuario_rango_usuario1_idx` (`rango_usuario_id_rango_usuario`),
  KEY `fk_usuario_estado_usuario1_idx` (`estado_usuario_id_estado_usuario`),
  CONSTRAINT `fk_usuario_estado_usuario1` FOREIGN KEY (`estado_usuario_id_estado_usuario`) REFERENCES `estado_usuario` (`id_estado_usuario`),
  CONSTRAINT `fk_usuario_rango_usuario1` FOREIGN KEY (`rango_usuario_id_rango_usuario`) REFERENCES `rango_usuario` (`id_rango_usuario`),
  CONSTRAINT `fk_usuario_tipo_documento1` FOREIGN KEY (`tipo_documento_id_tipo_documento`) REFERENCES `tipo_documento` (`id_tipo_documento`),
  CONSTRAINT `fk_usuario_tipo_usuario1` FOREIGN KEY (`tipo_usuario_id_tipo_usuario`) REFERENCES `tipo_usuario` (`id_tipo_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'Daniela','Rivera','1014057063','4561353','1684632087','Cll 128 N85-b51','Daniela58@gmail.com',2,'E2-FD-08-41-D8-95-A1-B2-61-80-22-56-46-27-7A-0D',3,4,1,1),(2,'Wilson2','hererra','1014020356','1268532','1286435023','cll 20 NO 07-08','wilson28@gmail.com',0,'E2-FD-08-41-D8-95-A1-B2-61-80-22-56-46-27-7A-0D',3,1,2,2),(3,'Juan','Mendez','1014538965','2684736','1035429876','Cll 30 No 05-10','Juan15@gmail.com',4,'E2-FD-08-41-D8-95-A1-B2-61-80-22-56-46-27-7A-0D',3,4,2,1),(4,'Diana2','Cruz','1015048962','3526845','1458792302','Cll40 No 08-10','Diana14@gmail.com',0,'E2-FD-08-41-D8-95-A1-B2-61-80-22-56-46-27-7A-0D',3,3,3,1),(5,'Leidy','Lemes','1014240071','2536892','1302659875','Cll50 No 08-15','Leidy18@gmail.com',0,'E2-FD-08-41-D8-95-A1-B2-61-80-22-56-46-27-7A-0D',1,1,3,1),(6,'Lorena','Diaz','1023598562','4126598','1325690235','Cll60No10-20','LorenaDiaz@gmail.com',0,'E2-FD-08-41-D8-95-A1-B2-61-80-22-56-46-27-7A-0D',2,3,3,1),(7,'Andres','Baron','1152365890','1359862','1365987562','Cll127 No85-B51','Andreskl@gmail.com',0,'E2-FD-08-41-D8-95-A1-B2-61-80-22-56-46-27-7A-0D',2,1,3,1),(8,'Mateo','torro','1236589232','1235658','2356985126','Cll130No25 -56','MateoTorro@gmail.com',0,'E2-FD-08-41-D8-95-A1-B2-61-80-22-56-46-27-7A-0D',2,3,3,1),(9,'Julian','Valensuela','1023659810','2356882','1236598856','Cll25 No 90-B15','JulianVale@gmail.es',5,'E2-FD-08-41-D8-95-A1-B2-61-80-22-56-46-27-7A-0D',3,4,2,2),(10,'Teresa','Jesus','51763133','2365965','2364598256','Cll10 No 84 -52','Teresa20@gmail.es',5,'E2-FD-08-41-D8-95-A1-B2-61-80-22-56-46-27-7A-0D',3,3,1,3);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-03-12 22:47:17
