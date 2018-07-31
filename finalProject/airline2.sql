-- MySQL dump 10.13  Distrib 5.6.24, for Win64 (x86_64)
--
-- Host: localhost    Database: gradairlines
-- ------------------------------------------------------
-- Server version	5.6.17

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
-- Table structure for table `airplane`
--

DROP TABLE IF EXISTS `airplane`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `airplane` (
  `ID` varchar(10) NOT NULL,
  `type` varchar(10) NOT NULL,
  `company` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `airplane`
--

LOCK TABLES `airplane` WRITE;
/*!40000 ALTER TABLE `airplane` DISABLE KEYS */;
INSERT INTO `airplane` VALUES ('1717','A167','Airbus'),('1212','B123','Boeing'),('1131','B455','Boeing'),('1616','A123','Airbus'),('1211','A124','Airbus'),('1987','B467','Boeing');
/*!40000 ALTER TABLE `airplane` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `airport`
--

DROP TABLE IF EXISTS `airport`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `airport` (
  `code` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `airport`
--

LOCK TABLES `airport` WRITE;
/*!40000 ALTER TABLE `airport` DISABLE KEYS */;
INSERT INTO `airport` VALUES ('ATL','Atlanta Hartsfield','Atlanta','Georgia','USA'),('LAS','McCarran International Airport','Las Vegas','Nevada','USA'),('DAL','Dallas Love Field','Dallas','Texas','USA'),('DFW','Dallas Fort Worth Airport','Dallas','Texas','USA'),('LAX','Los Angeles International Airport','Los Angeles','California','USA'),('SEA','Seattle-Tacoma International Airport','Seattle','Washington','USA'),('JFK','John F. Kennedy International Airport','New York City','New York','USA'),('SFO','San Francisco International','San Fransciso','California','USA');
/*!40000 ALTER TABLE `airport` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `book` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `time` datetime NOT NULL,
  `date` date NOT NULL,
  `flightno` varchar(10) NOT NULL,
  `username` varchar(45) NOT NULL,
  `classtype` varchar(20) NOT NULL,
  `paid` int(1) DEFAULT '0',
  PRIMARY KEY (`ID`,`flightno`),
  KEY `username_idx` (`username`),
  KEY `classname_idx` (`classtype`),
  KEY `flightno_idx` (`flightno`,`classtype`),
  CONSTRAINT `flightno` FOREIGN KEY (`flightno`, `classtype`) REFERENCES `class` (`number`, `name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `username` FOREIGN KEY (`username`) REFERENCES `passanger` (`username`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `book`
--

LOCK TABLES `book` WRITE;
/*!40000 ALTER TABLE `book` DISABLE KEYS */;
INSERT INTO `book` VALUES (1,'2018-10-09 19:00:00','2018-12-05','BB234','tugba','Economy',0),(2,'2018-12-01 17:23:00','2018-12-01','AB345','sworoop','Economy',1),(3,'2018-12-01 17:24:00','2018-12-02','BB123','eda','Economy',0),(4,'2018-12-01 17:25:00','2018-12-01','AA123','arda','Business',1),(5,'2018-12-01 17:26:00','2018-12-01','AA186','evrim','Business',1),(6,'2018-12-01 17:27:00','2018-12-01','AA765','elif','Business',1),(7,'2018-12-01 17:27:00','2018-12-01','AA155','rifat','Economy',1),(8,'2018-12-02 04:22:32','2018-12-02','AA112','tugba','Economy',0),(9,'2018-12-02 04:26:29','2018-12-02','AA120','evrim','Economy',0),(10,'2018-12-02 04:26:29','2018-12-02','AA100','arda','Economy',0),(11,'2018-12-02 04:27:36','2018-12-02','AA1512','eda','Economy',0),(12,'2018-12-02 04:27:36','2018-12-03','AA151','eda','Economy',0),(13,'2018-12-02 05:55:15','2018-12-02','AA152','elif','Economy',1),(14,'2018-12-02 05:55:15','2018-12-03','AA157','tugba','Economy',1),(15,'2018-12-02 05:57:27','2018-12-02','AA166','fatma','Economy',1),(16,'2018-12-02 05:57:27','2018-12-03','AA154','rifat','Economy',1),(17,'2018-12-02 05:58:11','2018-12-02','AA112','ali','Economy',1),(18,'2018-12-02 05:58:11','2018-12-03','AA162','ayse','Economy',1),(19,'2018-12-02 06:05:52','2018-12-02','AA6861','asli','Economy',0),(20,'2018-12-02 11:46:57','2018-12-02','AA100','berra','Business',0),(21,'2018-12-02 11:56:31','2018-12-02','AA986','zeynep','Economy',0),(22,'2018-12-02 01:24:08','2018-12-02','AA120','emel','Economy',1),(23,'2018-12-02 01:24:08','2018-12-02','AA100','devrim','Economy',1),(24,'2018-12-02 01:24:42','2018-12-02','AA6861','nermin','Economy',1),(25,'2018-12-02 01:26:46','2018-12-02','AA986','fahri','Economy',1),(26,'2018-12-02 01:26:46','2018-12-03','AA986','selin','Economy',1),(27,'2018-12-02 02:34:02','2018-12-02','AA786','ozlem','Economy',0),(28,'2018-12-02 02:34:02','2018-12-02','AA697','efe','Economy',0),(29,'2018-12-06 06:48:46','2018-12-06','AA566','emir','Economy',1),(30,'2018-12-06 07:26:56','2018-12-06','AA1512','sera','Economy',0),(32,'2018-12-06 07:27:20','2018-12-06','AA6861','ali','Economy',0),(34,'2018-12-06 10:04:30','2018-12-06','AA120','ahmed','Economy',1),(45,'2018-12-07 01:46:49','2018-12-06','AA986','katty','Economy',1),(54,'2018-12-07 02:12:07','2018-12-06','AA100','perry','Economy',1),(55,'2018-12-07 02:13:40','2018-12-06','AA100','britney','Economy',0),(56,'2018-12-07 12:50:44','2018-12-06','AA180','justin','Economy',1),(60,'2018-12-07 12:57:53','2018-12-06','AA100','angelina','Economy',0),(61,'2018-12-07 01:50:05','2018-12-07','AA600','burt','Economy',1),(63,'2018-12-07 01:53:03','2018-12-07','AA100','jolie','Economy',1),(66,'2018-12-07 01:55:51','2018-12-07','AA986','christen','Business',1),(67,'2018-12-07 01:55:51','2018-12-08','AA1512','angel','Business',1);
/*!40000 ALTER TABLE `book` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `class`
--

DROP TABLE IF EXISTS `class`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `class` (
  `number` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `capacity` int(11) NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`number`,`name`),
  KEY `number_idx` (`number`),
  CONSTRAINT `number` FOREIGN KEY (`number`) REFERENCES `flight` (`number`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class`
--

LOCK TABLES `class` WRITE;
/*!40000 ALTER TABLE `class` DISABLE KEYS */;
INSERT INTO `class` VALUES ('AA100','Business',5,500),('AA100','Economy',200,180),('AA120','Business',15,4000),('AA120','Economy',100,1000),('AA1512','Business',1,200),('AA1512','Economy',100,100),('AA180','Business',15,800),('AA180','Economy',100,240),('AA181','Business',10,200),('AA181','Economy',100,100),('AA600','Business',5,200),('AA600','Economy',80,50),('AA601','Business',3,300),('AA601','Economy',50,60),('AA6861','Business',3,100),('AA6861','Economy',100,40),('AA6927','Business',10,100),('AA6927','Economy',200,40),('AA80','Business',3,200),('AA80','Economy',80,50),('AA986','Business',8,400),('AA986','Economy',120,120);
/*!40000 ALTER TABLE `class` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `flight`
--

DROP TABLE IF EXISTS `flight`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `flight` (
  `number` varchar(20) NOT NULL,
  `airplane_id` varchar(10) NOT NULL,
  `departure` varchar(10) NOT NULL,
  `d_time` time NOT NULL,
  `arrival` varchar(10) NOT NULL,
  `a_time` time NOT NULL,
  PRIMARY KEY (`number`),
  KEY `code_idx` (`departure`,`arrival`),
  KEY `airplaneid_idx` (`airplane_id`),
  KEY `arrival_idx` (`arrival`),
  CONSTRAINT `airplaneid` FOREIGN KEY (`airplane_id`) REFERENCES `airplane` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `arrival` FOREIGN KEY (`arrival`) REFERENCES `airport` (`code`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `departure` FOREIGN KEY (`departure`) REFERENCES `airport` (`code`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `flight`
--

LOCK TABLES `flight` WRITE;
/*!40000 ALTER TABLE `flight` DISABLE KEYS */;
INSERT INTO `flight` VALUES ('AA100','1201','ATL','18:35:00','JFK','21:00:00'),('AA120','1201','DFW','14:35:00','LAS','17:30:00'),('AA1512','1170','LAS','13:40:00','DFW','19:30:00'),('AA180','1201','DFW','07:35:00','ATL','10:30:00'),('AA181','1170','SFO','19:30:00','DFW','22:00:00'),('AA600','1201','DAL','17:00:00','SEA','21:00:00'),('AA601','1201','SEA','20:00:00','DAL','23:00:00'),('AA6861','1201','SFO','11:00:00','SEA','13:00:00'),('AA6927','1201','SEA','17:00:00','SFO','19:00:00'),('AA80','1170','LAX','20:00:00','DFW','23:00:00'),('AA986','1170','DFW','10:00:00','SEA','14:00:00');
/*!40000 ALTER TABLE `flight` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `passanger`
--

DROP TABLE IF EXISTS `passanger`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `passanger` (
  `username` varchar(30) NOT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `middlename` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `cellphone` varchar(15) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `passanger`
--

LOCK TABLES `passanger` WRITE;
/*!40000 ALTER TABLE `passanger` DISABLE KEYS */;
INSERT INTO `passanger` VALUES ('tugba','tugba',NULL,'guler','tguler1@gsu.edu','4043453434','female','1980-09-09','abcdef123456'),('eda','eda','','guler','eda@gmail.com','2143456543','','0000-00-00','pass123'),('arda','arda',NULL,'timberlake','arda@gsu.edu','','Male',NULL,'arda1'),('ali','ali',NULL,'ayse','ali@gsu.edu',NULL,'Male',NULL,'ali21'),('ahmed','tay','','tay','t@gsu.edu','987654321','','2010-12-06','T23456'),('justin','justin','','timberlake','just@uga.edu','9998887777','','2015-12-06','just'),('angel','angel',NULL,'jolie','angel@gsu.edu','','Female',NULL,'angel21');
/*!40000 ALTER TABLE `passanger` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-07-07 16:57:20
