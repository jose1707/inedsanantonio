-- MySQL dump 10.13  Distrib 5.6.39, for Linux (x86_64)
--
-- Host: localhost    Database: clinicamedica
-- ------------------------------------------------------
-- Server version	5.6.39-cll-lve

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
-- Current Database: `clinicamedica`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `clinicamedica` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `clinicamedica`;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'Doctor');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `consulta`
--

DROP TABLE IF EXISTS `consulta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `consulta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `motivo` text,
  `historial_enf` text,
  `p_a` varchar(40) DEFAULT NULL,
  `fc` varchar(40) DEFAULT NULL,
  `pulso` varchar(45) DEFAULT NULL,
  `t` varchar(45) DEFAULT NULL,
  `w` varchar(45) DEFAULT NULL,
  `frec_resp` varchar(45) DEFAULT NULL,
  `detalle` varchar(300) NOT NULL,
  `diagnostico` text,
  `tratamiento1` text,
  `tratamiento2` text,
  `rgb` varchar(40) DEFAULT NULL,
  `plt` varchar(40) DEFAULT NULL,
  `hto` varchar(45) DEFAULT NULL,
  `vse` varchar(45) DEFAULT NULL,
  `seg` varchar(45) DEFAULT NULL,
  `lint` varchar(45) DEFAULT NULL,
  `mon` varchar(45) DEFAULT NULL,
  `eos` varchar(45) DEFAULT NULL,
  `tp` varchar(45) DEFAULT NULL,
  `tpt` varchar(45) DEFAULT NULL,
  `fr` varchar(45) DEFAULT NULL,
  `aso` varchar(45) DEFAULT NULL,
  `pcr` varchar(45) DEFAULT NULL,
  `ag_prostatico` varchar(45) DEFAULT NULL,
  `glucosa` double DEFAULT NULL,
  `glucosa_post` double DEFAULT NULL,
  `nitrogeno` double DEFAULT NULL,
  `creatinina` varchar(45) DEFAULT NULL,
  `bilirrubina_t` double DEFAULT NULL,
  `bilirrubina_d` int(11) NOT NULL,
  `bilirrubina_i` double DEFAULT NULL,
  `proteina` double DEFAULT NULL,
  `albumina` double DEFAULT NULL,
  `globulina` double DEFAULT NULL,
  `relacion` double DEFAULT NULL,
  `acido` double DEFAULT NULL,
  `ldh` double DEFAULT NULL,
  `transaminasa_o` double DEFAULT NULL,
  `transaminasa_p` double DEFAULT NULL,
  `fosfata` double DEFAULT NULL,
  `colesterol_t` double DEFAULT NULL,
  `colesterol_h` double DEFAULT NULL,
  `colesterol_l` double DEFAULT NULL,
  `trigliceridos` double DEFAULT NULL,
  `lipasa` double DEFAULT NULL,
  `amilasa` double DEFAULT NULL,
  `ck_t` double DEFAULT NULL,
  `ck_mb` double DEFAULT NULL,
  `otros` text,
  `paciente_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_consulta_paciente1_idx` (`paciente_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `consulta`
--

LOCK TABLES `consulta` WRITE;
/*!40000 ALTER TABLE `consulta` DISABLE KEYS */;
/*!40000 ALTER TABLE `consulta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `medic`
--

DROP TABLE IF EXISTS `medic`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `medic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no` varchar(45) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `genero` varchar(3) DEFAULT NULL,
  `fecha_de_nac` date DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `category_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_medico_categoria1_idx` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `medic`
--

LOCK TABLES `medic` WRITE;
/*!40000 ALTER TABLE `medic` DISABLE KEYS */;
INSERT INTO `medic` VALUES (2,NULL,'Adan','Barrios',NULL,NULL,'adan@gmail.com','Xela','32329382938',1,1,'2017-11-03 01:07:29'),(3,NULL,'Gladys','Rivera',NULL,NULL,'gr@gmail.com','San Pedro','9328293829',1,NULL,'2017-11-03 01:08:34'),(4,NULL,'Roberto','Castillo',NULL,NULL,'roberCast@gmail.com','San Marcos','58547894',1,1,'2017-11-03 13:17:54');
/*!40000 ALTER TABLE `medic` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pacient`
--

DROP TABLE IF EXISTS `pacient`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pacient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `edad` date NOT NULL,
  `telefono` int(11) NOT NULL,
  `direccion` varchar(80) NOT NULL,
  `nombre_esp` varchar(50) DEFAULT NULL,
  `quirurgicos` text,
  `traumaticos` text,
  `alergico` text,
  `monarquia` varchar(45) DEFAULT NULL,
  `ciclos` varchar(50) DEFAULT NULL,
  `gestas` int(11) DEFAULT NULL,
  `partos` int(11) DEFAULT NULL,
  `cesareas` int(11) DEFAULT NULL,
  `abortos` int(11) DEFAULT NULL,
  `fur` date DEFAULT NULL,
  `fpp` varchar(45) DEFAULT NULL,
  `control_prenatal` varchar(50) DEFAULT NULL,
  `anti` text,
  `genero` varchar(6) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `es_favorito` tinyint(1) NOT NULL DEFAULT '1',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `medico` varchar(200) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pacient`
--

LOCK TABLES `pacient` WRITE;
/*!40000 ALTER TABLE `pacient` DISABLE KEYS */;
INSERT INTO `pacient` VALUES (15,'Alex jose','Morales','2017-11-04',2147483647,'Xela','no','','','','','',0,0,0,0,'0000-00-00','','','','m','',0,0,'',NULL),(16,'luis','juarez','2017-11-10',7667,'san marcos','no','','','','','',0,0,0,0,'0000-00-00','','','','h','',0,0,'',NULL),(17,'alis marce','merida','2017-11-06',764322,'san marcos',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','',0,0,'',NULL),(21,'Josefina','Sosa','2017-11-13',83293274,'Xela','Miguel Diaz','no','no','al sol','no','2',2,2,1,0,'2017-11-09','1','no','T de cobre','m','',1,1,'Rogelio Moran','2017-11-03 00:11:36'),(22,'Mariana','Joachin','2017-11-04',2147483647,'Huehuetenango','Hugo Lopez','no','no','no','no','1',0,0,0,0,'2017-11-17','0','no','no','m','',1,1,'no','2017-11-03 02:50:07'),(24,'Juan Carlos','Arreaga','1993-12-28',45871254,'san marcos','','','','','','',0,0,0,0,'2017-10-25','','','','Hombre','',1,1,'Roberto','2017-11-03 13:15:32'),(25,'Pedro','Fuentes','1995-07-12',273648828,'San Marcos','Marta Paz','apendice','no','no','','',0,0,0,0,'2017-11-08','','','','Hombre','',1,1,'Jose Orozco','2017-11-03 18:10:43'),(26,'Omar','Morales','1987-07-15',12345678,'San Marcos','Maria ','no','no','no','','',0,0,0,0,'2017-11-17','','','','Hombre','',1,1,'Jorge','2017-11-03 18:48:59');
/*!40000 ALTER TABLE `pacient` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment`
--

LOCK TABLES `payment` WRITE;
/*!40000 ALTER TABLE `payment` DISABLE KEYS */;
INSERT INTO `payment` VALUES (1,'Pendiente'),(2,'Pagado'),(3,'Anulado');
/*!40000 ALTER TABLE `payment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) DEFAULT NULL,
  `nota` text,
  `mensaje` text,
  `dia` varchar(45) DEFAULT NULL,
  `hora` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `sintomas` text,
  `enfermedad` text,
  `medicamentos` text,
  `reservacioncol` varchar(45) DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `is_web` tinyint(1) DEFAULT NULL,
  `medic_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pacient_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_reservacion_medico_idx` (`medic_id`),
  KEY `fk_reservacion_pago1_idx` (`payment_id`),
  KEY `fk_reservacion_usuario1_idx` (`user_id`),
  KEY `fk_reservacion_paciente1_idx` (`pacient_id`),
  KEY `fk_reservacion_estado1_idx` (`status_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservation`
--

LOCK TABLES `reservation` WRITE;
/*!40000 ALTER TABLE `reservation` DISABLE KEYS */;
INSERT INTO `reservation` VALUES (1,'dolor','revisar','revisar','13','5:00','2017-10-10 00:00:00','dolor','dolor','ninguno','no',100,2,1,1,1,1,1),(2,'dolor','klkl',NULL,'2017-11-08','09:07','2017-11-02 05:33:15','dolor','klk','acetaminofen',NULL,100,NULL,3,2,1,17,3),(3,'reconsulta','consulta',NULL,'2017-11-10','09:11','2017-11-02 05:47:32','dolor de cuerpo','gripe','tabcin',NULL,100,NULL,2,1,1,15,2),(5,'consulta','examinar ojos',NULL,'2017-11-26','01:12','2017-11-02 23:55:03','ardor en ojos','conjuntivitis','ninguno',NULL,100,NULL,3,2,1,15,2),(6,'ojos','infeccion ocular',NULL,'2017-11-16','13:11','2017-11-03 00:26:11','ardor en ojos','conjuntivitis','ninguno',NULL,100,NULL,3,1,1,22,1),(7,'antigua','no ',NULL,'2017-09-13','12:12','2017-11-03 02:16:42','no','no','no',NULL,20,NULL,2,2,1,16,2),(8,'Infarto','no',NULL,'2016-01-05','05:50','2017-11-03 02:18:10','no','no','no',NULL,50,NULL,3,2,1,16,2),(9,'golpe','no',NULL,'2017-11-01','09:10','2017-11-03 02:18:53','no','no','no',NULL,100,NULL,3,3,1,21,3),(10,'consulta','cosulta',NULL,'2017-11-06','12:21','2017-11-03 18:04:14','dolor','diagnosticar','ninguno',NULL,75,NULL,4,1,1,16,1),(11,'dolor Estomacal','paciente con dolor',NULL,'2017-11-03','20:30','2017-11-03 18:51:36','nausea','diagnosticar','ninguno',NULL,50,NULL,3,2,1,26,1),(12,'Citas ','',NULL,'2017-12-14','19:00','2017-12-13 18:18:04','','','',NULL,0,NULL,4,1,1,26,1),(13,'Transmision ','',NULL,'2017-12-15','14:00','2017-12-13 18:41:09','','','',NULL,600,NULL,4,1,1,25,1);
/*!40000 ALTER TABLE `reservation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `status`
--

LOCK TABLES `status` WRITE;
/*!40000 ALTER TABLE `status` DISABLE KEYS */;
INSERT INTO `status` VALUES (1,'Pendiente'),(2,'Aplicada'),(3,'No Asistio'),(4,'Cancelada');
/*!40000 ALTER TABLE `status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `name` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `lastname` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `email` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `password` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `is_admin` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'admin','administrador','administrador','admin@admin','90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad',1,1,NULL),(2,'marce','marce','ochoa','marce@gmail.com','90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad',1,1,NULL),(3,'admin2','admin2','administrator','admin24','e4df782e9185732c1bb3efcf052a21d4c11c605f',1,1,'2017-11-01 00:00:00'),(10,'mynor','Mynor Rene','Berduo','mynor@gmail.com','adcd7048512e64b48da55b027577886ee5a36350',1,1,'2017-11-01 13:35:28'),(11,'adonias','Adonias Antonio','Antonio','adonias@gmail.com','adcd7048512e64b48da55b027577886ee5a36350',1,1,'2017-11-01 13:36:18');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'clinicamedica'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-07 19:52:10
