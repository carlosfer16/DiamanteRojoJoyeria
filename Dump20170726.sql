-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: localhost    Database: proyecto_joyeria
-- ------------------------------------------------------
-- Server version	5.7.14-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `carrito`
--

DROP TABLE IF EXISTS `carrito`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carrito` (
  `car_id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_id` int(11) NOT NULL,
  `car_fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `car_estado` int(11) DEFAULT '0',
  `cli_id` int(11) DEFAULT '0',
  `co_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`car_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carrito`
--

LOCK TABLES `carrito` WRITE;
/*!40000 ALTER TABLE `carrito` DISABLE KEYS */;
INSERT INTO `carrito` VALUES (2,3,'2017-07-26 00:02:57',1,1,4),(3,8,'2017-07-26 00:26:40',1,1,5),(4,4,'2017-07-26 00:31:39',1,1,6);
/*!40000 ALTER TABLE `carrito` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categorias`
--

DROP TABLE IF EXISTS `categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categorias` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_nombre` varchar(200) NOT NULL,
  `cat_visible` int(11) NOT NULL DEFAULT '1',
  `cat_fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias`
--

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` VALUES (1,'Ruby',1,'2017-07-20 07:00:51'),(2,'Compromisos',1,'2017-07-22 01:50:17'),(3,'Bodas',1,'2017-07-22 01:51:23'),(4,'Compromisos1',0,'2017-07-22 12:31:36'),(5,'Diamantes',1,'2017-07-22 12:39:12');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clientes` (
  `cli_id` int(11) NOT NULL AUTO_INCREMENT,
  `cli_nombre` varchar(200) NOT NULL,
  `cli_apellido` varchar(200) NOT NULL,
  `cli_domicilio` varchar(400) DEFAULT NULL,
  `cli_visible` int(11) NOT NULL DEFAULT '1',
  `cli_tipo` int(11) NOT NULL DEFAULT '2',
  `cli_correo` varchar(200) DEFAULT NULL,
  `cli_perfil` varchar(400) DEFAULT 'noimage',
  `cli_pass` varchar(200) NOT NULL,
  PRIMARY KEY (`cli_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (1,'Carlos','Morales','SIN DOMICILIO',1,1,'admin@tienda.com','noimage','0192023a7bbd73250516f069df18b500'),(2,'Blancas','Garcia','Sin domicilio',1,2,'garcia@tienda.com','noimage','0c909a141f1f2c0a1cb602b0b2d7d050'),(3,'Jeremy','Alejando','Sin Domicilio',1,2,'jeremy@tienda.com','noimage','0d1a3886da850143ba2212db65f5d2b7'),(4,'Prueba','prueba','prueba',0,2,'prueba@tienda.com','noimage','dc599a9972fde3045dab59dbd1ae170b');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comentarios`
--

DROP TABLE IF EXISTS `comentarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comentarios` (
  `com_id` int(11) NOT NULL AUTO_INCREMENT,
  `com_coment` varchar(500) NOT NULL,
  `cli_id` int(11) DEFAULT NULL,
  `com_estatus` int(11) NOT NULL DEFAULT '0',
  `com_fecha` datetime DEFAULT CURRENT_TIMESTAMP,
  `pro_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`com_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comentarios`
--

LOCK TABLES `comentarios` WRITE;
/*!40000 ALTER TABLE `comentarios` DISABLE KEYS */;
INSERT INTO `comentarios` VALUES (1,'Hola hola',1,1,'2017-07-24 23:46:13',1),(2,'casd',1,1,'2017-07-25 00:15:21',1),(3,'carlos moraes',1,2,'2017-07-25 00:18:26',9);
/*!40000 ALTER TABLE `comentarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comprobantes`
--

DROP TABLE IF EXISTS `comprobantes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comprobantes` (
  `co_id` int(11) NOT NULL AUTO_INCREMENT,
  `co_tarjeta` int(11) NOT NULL,
  `co_fecha` datetime DEFAULT CURRENT_TIMESTAMP,
  `cli_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`co_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comprobantes`
--

LOCK TABLES `comprobantes` WRITE;
/*!40000 ALTER TABLE `comprobantes` DISABLE KEYS */;
INSERT INTO `comprobantes` VALUES (1,2147483647,'2017-07-26 00:13:47',1),(2,2147483647,'2017-07-26 00:13:47',1),(3,2147483647,'2017-07-26 00:13:47',1),(4,2147483647,'2017-07-26 00:13:47',1),(5,2147483647,'2017-07-26 00:27:02',1),(6,2147483647,'2017-07-26 00:31:56',1);
/*!40000 ALTER TABLE `comprobantes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `favoritos`
--

DROP TABLE IF EXISTS `favoritos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `favoritos` (
  `fav_id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_id` int(11) NOT NULL,
  `fav_estatus` int(11) DEFAULT '1',
  `cli_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`fav_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `favoritos`
--

LOCK TABLES `favoritos` WRITE;
/*!40000 ALTER TABLE `favoritos` DISABLE KEYS */;
INSERT INTO `favoritos` VALUES (1,9,0,2),(2,1,1,2),(3,2,1,2);
/*!40000 ALTER TABLE `favoritos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productos` (
  `pro_id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_nombre` varchar(200) DEFAULT NULL,
  `pro_visible` int(11) NOT NULL DEFAULT '1',
  `pro_fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pro_costo` decimal(10,2) NOT NULL DEFAULT '1.00',
  `pro_imagen` varchar(500) DEFAULT 'noimage',
  `cat_id` int(11) DEFAULT '1',
  `pro_desc` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`pro_id`),
  KEY `FK_PersonOrder` (`cat_id`),
  CONSTRAINT `FK_PersonOrder` FOREIGN KEY (`cat_id`) REFERENCES `categorias` (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (1,'ca',0,'2017-07-20 02:06:41',20.00,'noimage',1,'Probando'),(2,'Anillo',1,'2017-07-20 02:07:33',60.00,'noimage',1,'Prueba'),(3,'Anillos',1,'2017-07-20 02:08:00',55.00,'noimage',1,NULL),(4,'carlos',1,'2017-07-20 13:49:11',25.00,'noimage',1,NULL),(5,'carlos',0,'2017-07-20 13:58:57',12.00,'noimage',1,NULL),(6,'asd',1,'2017-07-20 14:01:27',15.00,'noimage',1,NULL),(7,'Mi Reina',1,'2017-07-20 18:03:57',500.00,'productos/js7fdGE9bWS6v4f10tIn92H391YR1VhpYsfPCq64.jpeg',1,NULL),(8,'El supremo',1,'2017-07-22 13:38:05',15000.00,'noimage',1,NULL),(9,'EL NI PEDO',0,'2017-07-22 13:44:13',15885.00,'noimage',2,NULL),(10,'prueba',1,'2017-07-22 14:30:26',144.00,'noimage',5,NULL),(11,'Anillo',1,'2017-07-22 17:56:13',60.00,'noimage',1,NULL);
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_cliente`
--

DROP TABLE IF EXISTS `tipo_cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_cliente` (
  `tc_id` int(11) NOT NULL AUTO_INCREMENT,
  `tc_nombre` varchar(200) NOT NULL,
  `tc_visible` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`tc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_cliente`
--

LOCK TABLES `tipo_cliente` WRITE;
/*!40000 ALTER TABLE `tipo_cliente` DISABLE KEYS */;
INSERT INTO `tipo_cliente` VALUES (1,'Administrador',1),(2,'Cliente',1);
/*!40000 ALTER TABLE `tipo_cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `vw_carrito`
--

DROP TABLE IF EXISTS `vw_carrito`;
/*!50001 DROP VIEW IF EXISTS `vw_carrito`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `vw_carrito` AS SELECT 
 1 AS `cantidad`,
 1 AS `pro_id`,
 1 AS `pro_nombre`,
 1 AS `pro_costo`,
 1 AS `total`,
 1 AS `cli_id`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `vw_comentarios`
--

DROP TABLE IF EXISTS `vw_comentarios`;
/*!50001 DROP VIEW IF EXISTS `vw_comentarios`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `vw_comentarios` AS SELECT 
 1 AS `com_id`,
 1 AS `com_coment`,
 1 AS `cli_id`,
 1 AS `com_estatus`,
 1 AS `com_fecha`,
 1 AS `nombre`,
 1 AS `pro_id`,
 1 AS `pro_nombre`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `vw_gastos`
--

DROP TABLE IF EXISTS `vw_gastos`;
/*!50001 DROP VIEW IF EXISTS `vw_gastos`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `vw_gastos` AS SELECT 
 1 AS `cantidad`,
 1 AS `pro_id`,
 1 AS `pro_nombre`,
 1 AS `pro_costo`,
 1 AS `total`,
 1 AS `cli_id`,
 1 AS `co_id`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `vw_mescomprobante`
--

DROP TABLE IF EXISTS `vw_mescomprobante`;
/*!50001 DROP VIEW IF EXISTS `vw_mescomprobante`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `vw_mescomprobante` AS SELECT 
 1 AS `co_id`,
 1 AS `co_tarjeta`,
 1 AS `co_fecha`,
 1 AS `cli_id`,
 1 AS `total`*/;
SET character_set_client = @saved_cs_client;

--
-- Dumping events for database 'proyecto_joyeria'
--

--
-- Dumping routines for database 'proyecto_joyeria'
--

--
-- Final view structure for view `vw_carrito`
--

/*!50001 DROP VIEW IF EXISTS `vw_carrito`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `vw_carrito` AS (select count(`c`.`pro_id`) AS `cantidad`,`p`.`pro_id` AS `pro_id`,`p`.`pro_nombre` AS `pro_nombre`,`p`.`pro_costo` AS `pro_costo`,(count(`c`.`pro_id`) * `p`.`pro_costo`) AS `total`,`c`.`cli_id` AS `cli_id` from (`carrito` `c` join `productos` `p` on((`p`.`pro_id` = `c`.`pro_id`))) where (`c`.`car_estado` = 0) group by `p`.`pro_id`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `vw_comentarios`
--

/*!50001 DROP VIEW IF EXISTS `vw_comentarios`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `vw_comentarios` AS (select `com`.`com_id` AS `com_id`,`com`.`com_coment` AS `com_coment`,`com`.`cli_id` AS `cli_id`,`com`.`com_estatus` AS `com_estatus`,cast(`com`.`com_fecha` as date) AS `com_fecha`,concat(`c`.`cli_nombre`,' ',`c`.`cli_apellido`) AS `nombre`,`com`.`pro_id` AS `pro_id`,`p`.`pro_nombre` AS `pro_nombre` from ((`comentarios` `com` join `clientes` `c` on((`c`.`cli_id` = `com`.`cli_id`))) join `productos` `p` on((`p`.`pro_id` = `com`.`pro_id`)))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `vw_gastos`
--

/*!50001 DROP VIEW IF EXISTS `vw_gastos`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `vw_gastos` AS (select count(`c`.`pro_id`) AS `cantidad`,`p`.`pro_id` AS `pro_id`,`p`.`pro_nombre` AS `pro_nombre`,`p`.`pro_costo` AS `pro_costo`,(count(`c`.`pro_id`) * `p`.`pro_costo`) AS `total`,`c`.`cli_id` AS `cli_id`,`c`.`co_id` AS `co_id` from (`carrito` `c` join `productos` `p` on((`p`.`pro_id` = `c`.`pro_id`))) where (`c`.`car_estado` = 1) group by `p`.`pro_id`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `vw_mescomprobante`
--

/*!50001 DROP VIEW IF EXISTS `vw_mescomprobante`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `vw_mescomprobante` AS (select `co`.`co_id` AS `co_id`,`co`.`co_tarjeta` AS `co_tarjeta`,`co`.`co_fecha` AS `co_fecha`,`co`.`cli_id` AS `cli_id`,sum(`c`.`total`) AS `total` from (`comprobantes` `co` join `vw_gastos` `c` on((`c`.`co_id` = `co`.`co_id`))) where (cast(now() as date) = cast(`co`.`co_fecha` as date)) group by `co`.`co_id`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-07-26  0:32:19
