-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: localhost    Database: class_record
-- ------------------------------------------------------
-- Server version	8.0.30

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
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `students` (
  `student_id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(125) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `section` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `course` varchar(45) NOT NULL,
  `date_added` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
INSERT INTO `students` VALUES (1,'Darrenlie Loede','Benitez','Ace','loedeb@gmail.com','BSIT','2022-10-08 16:16:45'),(2,'Zack','Tabdulo','Grace','zacktabdulo@gmail.com','BACOMM','2022-10-08 10:27:26'),(47,'Danrriel Leondalle','Benitez','Ace','danrrielb@gmail.com','BSIT','2022-10-08 10:17:14'),(48,'Ma. Leodelle ','Benitez','Bay','cuteegohan@gmail.com','BSCS','2022-10-08 10:20:30'),(49,'Dante','Benitez','Lodge','dlbenitez@pldt.com.ph','BSMT','2022-10-08 10:21:02'),(50,'Ralph Lauren','Santos','Ace','ralphlauren@gmail.com','BSIT','2022-10-08 10:21:37'),(51,'Jimmy','Santos','Lodge','jimmysaints@gmail.com','BSMA','2022-10-08 10:21:57'),(52,'Vic','Sotto','Lodge','sottoV@gmail.com','BSMA','2022-10-08 10:26:16'),(53,'Jisoo','Park','SeoulTwo','parkjihyo@jyp.kr','BMMA','2022-10-08 10:27:26'),(54,'Chaeyoung','Son','SeoulTwo','ddalgi@jyp.kr','BMMA','2022-10-08 10:28:01'),(56,'Ace','Banzuelo','Grace','acebanzuelo@gmail.com','BACOMM','2022-10-09 09:06:27'),(57,'James Alfred','Gomez','Lodge','james@gmail.com','BSIT','2022-10-09 15:13:00');
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `students_archive`
--

DROP TABLE IF EXISTS `students_archive`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `students_archive` (
  `student_archive_id` int NOT NULL,
  `student_archive_firstname` varchar(45) NOT NULL,
  `student_archive_lastname` varchar(45) NOT NULL,
  `student_archive_section` varchar(45) NOT NULL,
  `student_archive_email` varchar(45) NOT NULL,
  `student_archive_course` varchar(45) NOT NULL,
  `student_archive_date` timestamp NOT NULL,
  PRIMARY KEY (`student_archive_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students_archive`
--

LOCK TABLES `students_archive` WRITE;
/*!40000 ALTER TABLE `students_archive` DISABLE KEYS */;
INSERT INTO `students_archive` VALUES (55,'John','Wick','Ace','wick@john.com.jp','BSMA','2022-10-09 02:51:40');
/*!40000 ALTER TABLE `students_archive` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-10-09 23:36:07
