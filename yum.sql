CREATE DATABASE  IF NOT EXISTS `chicheng` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `chicheng`;
-- MySQL dump 10.13  Distrib 5.6.13, for Win32 (x86)
--
-- Host: localhost    Database: chicheng
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.19-MariaDB

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
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(145) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'Food'),(2,'Traffice'),(3,'Clothes'),(4,'Commodity'),(5,'Red Packets'),(6,'Groceries'),(7,'Kids'),(8,'Amazon'),(9,'Online Shopping'),(10,'Entertainment'),(11,'medicar'),(12,'SkinCare'),(13,'Other'),(14,'Travel');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subcategory`
--

DROP TABLE IF EXISTS `subcategory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subcategory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(145) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subcategory`
--

LOCK TABLES `subcategory` WRITE;
/*!40000 ALTER TABLE `subcategory` DISABLE KEYS */;
INSERT INTO `subcategory` VALUES (1,'Breakfast',1),(2,'Lunch',1),(3,'Dinner',1),(4,'Fruit',1),(5,'test',2);
/*!40000 ALTER TABLE `subcategory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_category`
--

DROP TABLE IF EXISTS `user_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(245) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=304 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_category`
--

LOCK TABLES `user_category` WRITE;
/*!40000 ALTER TABLE `user_category` DISABLE KEYS */;
INSERT INTO `user_category` VALUES (303,3,'jj'),(302,3,'kevin'),(301,3,'oo');
/*!40000 ALTER TABLE `user_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_subcategory`
--

DROP TABLE IF EXISTS `user_subcategory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_subcategory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `user_category_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1083 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_subcategory`
--

LOCK TABLES `user_subcategory` WRITE;
/*!40000 ALTER TABLE `user_subcategory` DISABLE KEYS */;
INSERT INTO `user_subcategory` VALUES (1076,3,'tttt',1,NULL),(1077,3,'poke',NULL,301),(1078,3,'poke',1,NULL),(1079,3,'mcale',NULL,302),(1080,3,'yumm',8,NULL),(1081,3,'feee',2,NULL),(1082,3,'yum',NULL,303);
/*!40000 ALTER TABLE `user_subcategory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_key` varchar(145) DEFAULT NULL,
  `username` varchar(145) DEFAULT NULL,
  `password` varchar(145) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'e85c5cfe','asdf','4297f44b13955235245b2497399d7a93'),(2,'6d8cd69a','123123','5f4dcc3b5aa765d61d8327deb882cf99'),(3,'6c2312a1','1111','74b87337454200d4d33f80c4663dc5e5'),(4,'87c567b7','1111','74b87337454200d4d33f80c4663dc5e5'),(5,'83eb1fef','1111','74b87337454200d4d33f80c4663dc5e5'),(6,'4c49dcfa','1111','74b87337454200d4d33f80c4663dc5e5'),(7,'508f5621','1111','74b87337454200d4d33f80c4663dc5e5'),(8,'3587e24f','gry260','bb47b8c918c5da97a6aa5f0d673ebb95');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_expense`
--

DROP TABLE IF EXISTS `users_expense`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_expense` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `user_category_id` int(11) DEFAULT NULL,
  `subcategory_id` int(11) DEFAULT NULL,
  `user_subcategory_id` int(11) DEFAULT NULL,
  `name` varchar(245) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `price` double DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `comment` varchar(245) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_expense`
--

LOCK TABLES `users_expense` WRITE;
/*!40000 ALTER TABLE `users_expense` DISABLE KEYS */;
INSERT INTO `users_expense` VALUES (36,3,1,NULL,2,1081,'name','2015-06-12',123123,'2017-08-05 01:20:20','aaa'),(37,3,2,NULL,NULL,1081,'name','2015-06-12',13.12,'2017-08-05 00:53:55','comments'),(38,3,2,NULL,NULL,1081,'name','2015-06-12',13.12,'2017-08-04 00:48:21','comments'),(39,3,2,NULL,5,NULL,'name','2015-06-12',13.12,'2017-08-04 00:48:42','comments'),(40,3,2,NULL,NULL,NULL,'name','2015-06-12',13.12,'2017-08-04 00:50:21','comments'),(41,3,1,NULL,2,NULL,'name','2015-06-12',13.12,'2017-08-04 00:51:10','comments'),(42,3,2,NULL,NULL,NULL,'name','2015-06-12',13.12,'2017-08-04 00:51:22','comments'),(43,3,2,NULL,NULL,NULL,'name','2015-06-12',13.12,'2017-08-04 00:52:42','comments'),(44,3,2,NULL,NULL,NULL,'name','2015-06-12',13.12,'2017-08-04 00:53:20','comments'),(45,3,1,NULL,3,NULL,'name','2015-06-12',13.12,'2017-08-04 00:54:48','comments'),(46,3,2,NULL,NULL,NULL,'name','2015-06-12',13.12,'2017-08-04 00:55:20','comments'),(47,3,2,NULL,NULL,NULL,'name','2015-06-12',13.12,'2017-08-04 00:56:28','comments'),(48,3,2,NULL,NULL,NULL,'name','2015-06-12',13.12,'2017-08-04 00:57:14','comments'),(49,3,2,NULL,NULL,NULL,'name','2015-06-12',13.12,'2017-08-04 00:57:19','comments'),(50,3,2,NULL,5,NULL,'name','2015-06-12',13.12,'2017-08-04 00:58:09','comments'),(51,3,2,NULL,NULL,1081,'name','2015-06-12',13.12,'2017-08-04 00:58:17','comments'),(52,3,NULL,302,NULL,1079,'name','2015-06-12',13.12,'2017-08-04 00:59:19','comments'),(53,3,1,NULL,1,NULL,'name','2015-06-12',13.12,'2017-08-04 01:01:54','comments'),(54,3,2,NULL,NULL,1081,'name','2015-06-12',13.12,'2017-08-04 01:04:54','comments'),(55,3,1,NULL,2,NULL,'afasdf','2015-06-12',13.12,'2017-08-04 01:05:16','comments'),(56,3,2,NULL,NULL,1081,'name','2015-06-12',13.12,'2017-08-04 19:57:19','comments'),(57,3,2,NULL,NULL,1081,'name','2015-06-12',13.12,'2017-08-04 19:57:20','comments'),(58,3,1,NULL,2,NULL,'name','2015-06-12',13.12,'2017-08-04 20:57:58','comments'),(59,3,2,NULL,NULL,1081,'name','2015-06-12',13.12,'2017-08-04 20:59:34','comments'),(60,3,2,NULL,NULL,1081,'name','2015-06-12',13.12,'2017-08-05 00:42:44','comments'),(61,3,1,NULL,1,NULL,'name','2015-06-12',13.12,'2017-08-05 00:50:31','comments'),(62,3,1,NULL,1,NULL,'name','2015-06-12',3333,'2017-08-05 00:51:04','comments'),(63,3,1,NULL,1,NULL,'name','2015-06-12',13.12,'2017-08-05 00:55:09','klop'),(64,3,NULL,303,NULL,1082,'sdafasdf','2015-06-12',13.12,'2017-08-05 01:21:18','c');
/*!40000 ALTER TABLE `users_expense` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-08-04 16:23:08
