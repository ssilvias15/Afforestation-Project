-- MySQL dump 10.13  Distrib 5.5.57, for debian-linux-gnu (x86_64)
--
-- Host: 0.0.0.0    Database: afforestation
-- ------------------------------------------------------
-- Server version	5.5.57-0ubuntu0.14.04.1

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
-- Table structure for table `markers`
--

DROP TABLE IF EXISTS `markers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `markers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `address` varchar(80) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  `type` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `markers`
--

LOCK TABLES `markers` WRITE;
/*!40000 ALTER TABLE `markers` DISABLE KEYS */;
INSERT INTO `markers` VALUES (1,'Plantation 1','Bogtown',53.301167,-7.104573,'plantation'),(2,'Plantation 2','Ballycumber Elly',53.318550,-7.648992,'plantation'),(3,'Plantation 3','Walsh Island',53.203957,-7.242498,'plantation');
/*!40000 ALTER TABLE `markers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `news_id` int(50) NOT NULL AUTO_INCREMENT,
  `news_tytle` varchar(200) NOT NULL,
  `news_short_description` varchar(500) NOT NULL,
  `news_long_description` varchar(50000) NOT NULL,
  PRIMARY KEY (`news_id`),
  KEY `news_id` (`news_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (1,'Origins of amphibian-killing fungus uncovered','A deadly fungus that has ravaged amphibian populations worldwide probably originated in East Asia, new research suggests.\r\n\r\nA study in Science journal supports an idea that the pet trade helped spread killer strains of the chytrid fungus around the globe.\r\n\r\nThe fungus is a major cause of the devastating declines experienced by frogs, toads, newts and salamanders.\r\n\r\nThere is no known effective measure for controlling the disease.\r\n\r\nThe authors of the report highlight the need to tighten biose','http://www.bbc.com/news/science-environment-44075687'),(2,'Guatemala volcano: Dozens die as Fuego volcano erupts','A deadly fungus that has ravaged amphibian populations worldwide probably originated in East Asia, new research suggests.\r\n\r\nA study in Science journal supports an idea that the pet trade helped spread killer strains of the chytrid fungus around the globe.\r\n\r\nThe fungus is a major cause of the devastating declines experienced by frogs, toads, newts and salamanders.\r\n\r\nThere is no known effective measure for controlling the disease.','http://www.bbc.com/news/world-latin-america-44350974'),(3,'50 nations \'curbing plastic pollution\'','Fifty nations are now taking action to reduce plastic pollution, according to the biggest report so far from the UN.\r\n\r\nIt reveals that the Galapagos will ban single-use plastics, Sri Lanka will ban styrofoam and China is insisting on biodegradable bags.\r\n\r\nBut the authors warn that far more needs to be done to reduce the vast flow of plastic into rivers and oceans.\r\n\r\nWhat’s more, they say, good policies to curb plastic waste in many nations have failed because of poor enforcement.\r\n\r\nAction ag','http://www.bbc.com/news/science-environment-44359614'),(4,'Carbon \'bubble\' could cost global economy trillions','A rapid reduction in demand for fossil fuels could see global economic losses of $1-4 trillion by 2035 according to a new report.\r\n\r\nEnergy efficiency and low carbon technology could cause the downturn, even if governments fail to take new steps to meet the Paris climate goals.\r\n\r\nThe resulting \'carbon bubble\' could cause losses larger than the 2008 financial crisis, the authors say.\r\n\r\nThe US and Canada would be the biggest losers, the study finds.\r\n\r\nAccording to the International Energy Agenc','http://www.bbc.com/news/science-environment-44357243');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `user_id` int(50) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(18) NOT NULL,
  `password` varchar(45) NOT NULL,
  `users_type_id` tinyint(8) NOT NULL,
  `reg_message` varchar(1000) NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `user_id` (`user_id`),
  KEY `users_type_id` (`users_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (2,'ssilvias15@yahoo.com','Silvia','Sirbu','1234',2,'Hi, I would like to register as a Community User'),(3,'abc@gmail.com','John','Coady','yupty',2,'Hi, I would like to register as a Community User'),(5,'ase@yahoo.com','Silvia','Sirbu','123456',2,'Hi, I would like to register as a Community User'),(6,'ase@yahoo.com','Silvia','Sirbu','123456',2,'Hi, I would like to register as a Community User'),(7,'ssilvias15@wp.com','Silvia','Sirbu','12347',2,'Hi, I would like to register as a Community User'),(8,'ssilvias159@yahoo.com','Silvia','Sirbu','1234u',2,'Hi, I would like to register as a Community User'),(9,'ssilvias15@yahoo.com','Silvia','Sirbu','1234',2,'Hi, I would like to register as a Community User'),(10,'ssilvias15@yahoo.com','Silvia','Sirbu','1234',2,'Hi, I would like to register as a Community User'),(11,'123@yahoo.com','Silvia','Sirbu','12345678',2,'Hi, I would like to register as a Community User'),(12,'ss@yahoo.com','Silvia','Sirbu','erfkltg',2,'Hi, I would like to register as a Community User'),(13,'hfj@yur.com','Silvia','Sirbu','Mp45j',2,'Hi, I would like to register as a Community User'),(14,'aaa@bbb.com','Silvia','Sirbu','uiiii',2,'Hi, I would like to register as a Community User'),(15,'aaa@bbb.com','Silvia','Sirbu','uiiii',2,'Hi, I would like to register as a Community User'),(16,'ss6666@yahoo.com','Silvia','Sirbu','jkkjgjrk',2,'Hi, I would like to register as a Community User'),(17,'ss58@yahoo.com','Silvia','Sirbu','tlkyhy',2,'Hi, I would like to register as a Community User'),(18,'ss@yahoo.com','Silvia','Sirbu','yuhjlu;j;l',2,'Hi, I would like to register as a Community User'),(19,'ssas15@yahoo.com','Silvia','Sirbu','myhklu',2,'Hi, I would like to register as a Community User'),(20,'IIIIII@YYY.com','Silvia','Sirbu','kjret5kk5',2,'Hi, I would like to register as a Community User'),(21,'ss@oo.com','Silvia','Sirbu','5lkt456',2,'Hi, I would like to register as a Community User'),(22,'ff@ff.com','Silvia','Sirbu','ytkuk',2,'Hi, I would like to register as a Community User'),(27,'88@hhh.com','Silvia','Sirbu','tyujyt',3,''),(28,'rere@lkfg.com','Silvia','Sirbu','78u768',4,'Hi, I would like to register as a Land Owner'),(29,'rere@lkfg.com','Silvia','Sirbu','78u768',4,'Hi, I would like to register as a Land Owner'),(30,'rere@lkfg.com','Silvia','Sirbu','78u768',4,'Hi, I would like to register as a Land Owner'),(31,'email@email.com','Silvia','Sirbu','Surname',4,'I am interested to join the programme. Can you please let me know about it?'),(32,'456@email.com','Silvia','Sirbu','Surname',4,'I am interested to join the programme. Can you please let me know about it?'),(33,'555@gmail.com','8888','wehjrew','refmre',3,'Registration Form');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_type`
--

DROP TABLE IF EXISTS `users_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_type` (
  `type_id` tinyint(8) NOT NULL DEFAULT '2',
  `type` varchar(30) NOT NULL,
  PRIMARY KEY (`type_id`),
  KEY `type_id` (`type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_type`
--

LOCK TABLES `users_type` WRITE;
/*!40000 ALTER TABLE `users_type` DISABLE KEYS */;
INSERT INTO `users_type` VALUES (1,'admin'),(2,'community'),(3,'co-ordinator'),(4,'land-owner');
/*!40000 ALTER TABLE `users_type` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-11  8:43:28
