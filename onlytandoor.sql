-- MySQL dump 10.13  Distrib 5.5.54, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: onlytandoor
-- ------------------------------------------------------
-- Server version	5.5.54-0ubuntu0.14.04.1

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
-- Table structure for table `Categories`
--

DROP TABLE IF EXISTS `Categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `description` varchar(45) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Categories`
--

LOCK TABLES `Categories` WRITE;
/*!40000 ALTER TABLE `Categories` DISABLE KEYS */;
INSERT INTO `Categories` VALUES (14,'Burgers',NULL,'category/menu-title-burgers.jpg'),(15,'Pasta',NULL,'category/menu-title-pasta.jpg'),(16,'Pizza',NULL,'category/menu-title-pizza.jpg'),(17,'Sushi',NULL,'category/menu-title-sushi.jpg'),(18,'Desserts',NULL,'category/menu-title-desserts.jpg'),(19,'Drinks',NULL,'category/menu-title-drinks.jpg');
/*!40000 ALTER TABLE `Categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Line_Items`
--

DROP TABLE IF EXISTS `Line_Items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Line_Items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cart_id` int(11) DEFAULT NULL,
  `product_id` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Line_Items`
--

LOCK TABLES `Line_Items` WRITE;
/*!40000 ALTER TABLE `Line_Items` DISABLE KEYS */;
/*!40000 ALTER TABLE `Line_Items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Orders`
--

DROP TABLE IF EXISTS `Orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `total` decimal(10,0) DEFAULT NULL,
  `discount` decimal(10,0) DEFAULT NULL,
  `tax` decimal(10,0) DEFAULT NULL,
  `grand_total` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Orders`
--

LOCK TABLES `Orders` WRITE;
/*!40000 ALTER TABLE `Orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `Orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Products`
--

DROP TABLE IF EXISTS `Products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `discount` decimal(10,0) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Products`
--

LOCK TABLES `Products` WRITE;
/*!40000 ALTER TABLE `Products` DISABLE KEYS */;
INSERT INTO `Products` VALUES (3,'Beef Burger','Beef, cheese, potato, onion, fries',9,NULL,14,NULL),(4,'Broccoli','Chicken, cheese, potato, onion, fries',1,NULL,14,NULL),(5,'Chicken Burger','Chicken, cheese, potato, onion, fries',3,NULL,14,NULL),(6,'Creste di Galli','Pasta, cheese, potato, onion, fries',3,NULL,14,NULL),(12,'Beef Burger','Beef, cheese, potato, onion, fries',9,NULL,15,NULL),(13,'Broccoli','Chicken, cheese, potato, onion, fries',1,NULL,15,NULL),(14,'Chicken Burger','Chicken, cheese, potato, onion, fries',3,NULL,15,NULL),(15,'Creste di Galli','Pasta, cheese, potato, onion, fries',3,NULL,15,NULL),(16,'Beef Burger','Beef, cheese, potato, onion, fries',9,NULL,16,NULL),(17,'Broccoli','Chicken, cheese, potato, onion, fries',1,NULL,16,NULL),(18,'Chicken Burger','Chicken, cheese, potato, onion, fries',3,NULL,16,NULL),(19,'Creste di Galli','Pasta, cheese, potato, onion, fries',3,NULL,16,NULL),(20,'Beef Burger','Beef, cheese, potato, onion, fries',9,NULL,17,NULL),(21,'Broccoli','Chicken, cheese, potato, onion, fries',1,NULL,17,NULL),(22,'Chicken Burger','Chicken, cheese, potato, onion, fries',3,NULL,17,NULL),(23,'Creste di Galli','Pasta, cheese, potato, onion, fries',3,NULL,17,NULL),(24,'Beef Burger','Beef, cheese, potato, onion, fries',9,NULL,17,NULL),(25,'Broccoli','Chicken, cheese, potato, onion, fries',1,NULL,17,NULL),(26,'Chicken Burger','Chicken, cheese, potato, onion, fries',3,NULL,17,NULL),(27,'Creste di Galli','Pasta, cheese, potato, onion, fries',3,NULL,17,NULL),(28,'Beef Burger','Beef, cheese, potato, onion, fries',9,NULL,18,NULL),(29,'Broccoli','Chicken, cheese, potato, onion, fries',1,NULL,18,NULL),(30,'Chicken Burger','Chicken, cheese, potato, onion, fries',3,NULL,18,NULL),(31,'Creste di Galli','Pasta, cheese, potato, onion, fries',3,NULL,18,NULL),(32,'Beef Burger','Beef, cheese, potato, onion, fries',9,NULL,19,NULL),(33,'Broccoli','Chicken, cheese, potato, onion, fries',1,NULL,19,NULL),(34,'Chicken Burger','Chicken, cheese, potato, onion, fries',3,NULL,19,NULL),(35,'Creste di Galli','Pasta, cheese, potato, onion, fries',3,NULL,19,NULL);
/*!40000 ALTER TABLE `Products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblproduct`
--

DROP TABLE IF EXISTS `tblproduct`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblproduct` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_code` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblproduct`
--

LOCK TABLES `tblproduct` WRITE;
/*!40000 ALTER TABLE `tblproduct` DISABLE KEYS */;
INSERT INTO `tblproduct` VALUES (1,'3D Camera','3DcAM01','product-images/camera.jpg',1500.00),(2,'External Hard Drive','USB02','product-images/external-hard-drive.jpg',800.00),(3,'Wrist Watch','wristWear03','product-images/watch.jpg',300.00);
/*!40000 ALTER TABLE `tblproduct` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-10-15 20:57:55
