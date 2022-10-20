-- MySQL dump 10.13  Distrib 8.0.30, for Linux (x86_64)
--
-- Host: localhost    Database: saccomodationmis
-- ------------------------------------------------------
-- Server version	8.0.30-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `accomodated_incollege`
--

DROP TABLE IF EXISTS `accomodated_incollege`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `accomodated_incollege` (
  `id` int NOT NULL AUTO_INCREMENT,
  `room_id` int DEFAULT '0',
  `student_id` int DEFAULT '0',
  `academic_year` varchar(15) DEFAULT '',
  `level_class` varchar(15) DEFAULT '',
  `regdate` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `room_id` (`room_id`),
  KEY `student_id` (`student_id`),
  CONSTRAINT `accomodated_incollege_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `accomodated_incollege_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accomodated_incollege`
--

LOCK TABLES `accomodated_incollege` WRITE;
/*!40000 ALTER TABLE `accomodated_incollege` DISABLE KEYS */;
INSERT INTO `accomodated_incollege` VALUES (1,3,3,'2021','3b','2021-03-11 13:59:22'),(2,1,20,'2020','3','2021-03-11 14:03:36'),(3,2,1,'2020-2021','3','2022-10-19 20:44:50');
/*!40000 ALTER TABLE `accomodated_incollege` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `accomodated_outside`
--

DROP TABLE IF EXISTS `accomodated_outside`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `accomodated_outside` (
  `id` int NOT NULL AUTO_INCREMENT,
  `student_id` int DEFAULT '0',
  `landlord_name` varchar(70) DEFAULT '',
  `landlord_nid` varchar(70) DEFAULT '',
  `landlord_phone` varchar(15) DEFAULT '',
  `house_no` varchar(15) DEFAULT '',
  `district` varchar(70) DEFAULT '',
  `sector` varchar(70) DEFAULT '',
  `cell` varchar(70) DEFAULT '',
  `village` varchar(70) DEFAULT '',
  `academic_year` varchar(15) DEFAULT '',
  `level_class` varchar(15) DEFAULT '',
  `status` varchar(40) NOT NULL DEFAULT 'pending',
  `regdate` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `student_id` (`student_id`),
  CONSTRAINT `accomodated_outside_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accomodated_outside`
--

LOCK TABLES `accomodated_outside` WRITE;
/*!40000 ALTER TABLE `accomodated_outside` DISABLE KEYS */;
INSERT INTO `accomodated_outside` VALUES (1,5,'karangwa','1204480923553','0786332','21','rulindo','tumba','tumba',' bushoki','2020','3b','Rejected','2021-03-11 14:01:38'),(2,20,'Kamana','12437689','078454651','23','rulindo','tumba','bushoki','bushoki','2020','3','Rejected','2021-03-11 14:05:20'),(3,17,'kamana','12464956538','07845465','34','rulindo','tumba','bushoki','bushoki','2020','3','Approved','2021-03-11 14:08:02'),(4,17,'kamana','12464956538','07845465','34','rulindo','tumba','bushoki','bushoki','2020','3','pending','2021-03-11 14:08:10'),(5,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2021','3A','pending','2021-11-22 21:15:33');
/*!40000 ALTER TABLE `accomodated_outside` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `administrators`
--

DROP TABLE IF EXISTS `administrators`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `administrators` (
  `id` int NOT NULL AUTO_INCREMENT,
  `names` varchar(50) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `password` varchar(70) DEFAULT NULL,
  `regdate` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `administrators`
--

LOCK TABLES `administrators` WRITE;
/*!40000 ALTER TABLE `administrators` DISABLE KEYS */;
INSERT INTO `administrators` VALUES (1,'Maurice','0787274716','MTIzNDU=','2021-01-24 11:12:45');
/*!40000 ALTER TABLE `administrators` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rooms` (
  `id` int NOT NULL AUTO_INCREMENT,
  `names` varchar(50) DEFAULT NULL,
  `description` varchar(15) DEFAULT '',
  `gender` varchar(15) DEFAULT 'Male',
  `host` int DEFAULT '0',
  `regdate` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rooms`
--

LOCK TABLES `rooms` WRITE;
/*!40000 ALTER TABLE `rooms` DISABLE KEYS */;
INSERT INTO `rooms` VALUES (1,'R1','For boys and ho','Male',1,'2021-01-24 11:18:06'),(2,'R2','Yakira 8','Male',8,'2021-02-12 15:33:59'),(3,'R3','only girls','Female',13,'2021-03-11 13:56:13');
/*!40000 ALTER TABLE `rooms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `students` (
  `id` int NOT NULL AUTO_INCREMENT,
  `names` varchar(70) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(255) DEFAULT '',
  `regno` varchar(10) NOT NULL,
  `nid` varchar(16) NOT NULL,
  `gender` varchar(16) NOT NULL,
  `department` varchar(255) DEFAULT '',
  `password` varchar(60) DEFAULT NULL,
  `delete_status` varchar(5) DEFAULT 'No',
  `delete_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `regdate` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
INSERT INTO `students` VALUES (1,'Manzi ','0726183048','','17RP01021','121212121322','Male','IT','MTIzNDU=','No','2021-01-24 11:17:38','2021-01-24 11:17:38'),(2,'Kamana John','0787945454','','19RP18998','1199845645765','Male','ET',NULL,'No','2021-01-24 14:38:09','2021-01-24 14:38:09'),(3,'Manzi Roger','0787945456','','19RP18990','1199845645760','Male','IT',NULL,'No','2021-01-24 14:38:47','2021-01-24 14:38:47'),(4,'Kanyana Aljne','0726183049','','17TP0221','1132343838','Female','RE: Renewable En',NULL,'No','2021-01-24 16:46:36','2021-01-24 16:46:36'),(5,'Cassandra','0784634118','','17RP00959','1212764649944','Female','IT:Information T','MTIzNDU=','No','2021-02-12 15:35:55','2021-02-12 15:35:55'),(6,'Kabatesi','0789456125','','17RP09232','2345678876543','Male','RE','MTIzNDU=','No','2021-03-08 10:32:45','2021-03-08 10:32:45'),(17,'Ingabire','0789456320','mnzroger@gmail.com','17RP01000','1234563233','Male','IT','MTIzNDU=','No','2021-03-11 12:10:03','2021-03-11 12:10:03'),(19,'sandra','0787274716','','17rp00959','43873268735','Female','IT','MTIzNDU=','No','2021-03-11 13:55:31','2021-03-11 13:55:31'),(20,'Rukundo Omax','07845434','chaphannzabonimana@gmail.com','17rp04385','15427578787','Male','ET:Electronics Telecomunication','MTIzNDU=','No','2021-03-11 14:03:08','2021-03-11 14:03:08'),(21,'Morris','0780000001','','17RP0100','1190823223232232','Male','IT','MTIzNDU=','No','2022-10-20 08:14:25','2022-10-20 08:14:25');
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-10-20  8:15:51
