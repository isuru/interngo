-- MariaDB dump 10.19  Distrib 10.4.32-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: interngo
-- ------------------------------------------------------
-- Server version	10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `companycredential`
--

DROP TABLE IF EXISTS `companycredential`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `companycredential` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `compname` varchar(100) NOT NULL,
  `brno` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` int(5) NOT NULL,
  `sysdate` datetime NOT NULL DEFAULT current_timestamp(),
  `adminremarks` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `companycredential`
--

LOCK TABLES `companycredential` WRITE;
/*!40000 ALTER TABLE `companycredential` DISABLE KEYS */;
INSERT INTO `companycredential` VALUES (1,'RTR Company','1200','RTR','$2y$10$UypIhSR6YAMeAokSgV./..uh3wFQqV3YksksbxjrrxpQoJOZAMe/S',1,'2025-02-08 20:03:04','');
/*!40000 ALTER TABLE `companycredential` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `interenalldetails`
--

DROP TABLE IF EXISTS `interenalldetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `interenalldetails` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(200) NOT NULL,
  `nameinitial` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `nicno` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` int(20) NOT NULL,
  `edutype` varchar(100) NOT NULL,
  `university` varchar(200) NOT NULL,
  `field` varchar(200) NOT NULL,
  `jobcategory` varchar(100) NOT NULL,
  `jobrole` varchar(100) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `skills` varchar(200) NOT NULL,
  `portfolio` varchar(200) NOT NULL,
  `docname` varchar(200) NOT NULL,
  `docurl` varchar(200) NOT NULL,
  `status` int(5) NOT NULL,
  `sysdate` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `interenalldetails`
--

LOCK TABLES `interenalldetails` WRITE;
/*!40000 ALTER TABLE `interenalldetails` DISABLE KEYS */;
INSERT INTO `interenalldetails` VALUES (1,'Rupasinghe','Ravindu','2025-02-11','851423788V','ravindu.theja@gmail.com',771265590,'Diploma','NIBM','Test','IT','Software Developer','','C# , HTML','https://test.url','CODSE232P015.pdf','uploads/CODSE232P015.pdf',1,'2025-02-09 06:53:56');
/*!40000 ALTER TABLE `interenalldetails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `interncredential`
--

DROP TABLE IF EXISTS `interncredential`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `interncredential` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nameInitial` varchar(100) NOT NULL,
  `nic` varchar(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` int(1) NOT NULL,
  `sysdate` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `interncredential`
--

LOCK TABLES `interncredential` WRITE;
/*!40000 ALTER TABLE `interncredential` DISABLE KEYS */;
INSERT INTO `interncredential` VALUES (1,'P.K.R.T.Rupasinghe','972171727V','RTR','$2y$10$xp4.SU6fy64OCLl04M1cOeZrrpAx39cF1YO1ipBQHtPHBzLhFLTcq',1,'0000-00-00 00:00:00'),(2,'Tharidnu Devinda','741741741V','TDD','$2y$10$QsWmU0r/rijxGL73mRihG.p.9ultP97EtLDrXPV0ILJ.yOD.bkv8y',1,'0000-00-00 00:00:00'),(3,'Tharidnu Devinda','741741741V','TDR','$2y$10$U.WlmMz1FcJgXIBApThBj.e3Mkz06YS4Hwdr0bVa1Cg88RS9yBYEG',1,'0000-00-00 00:00:00'),(4,'PKR Theja Rupasinghe','972171727V','ravindu','$2y$10$NxLi2jhxFb/6n1uHdmfJH.Tdk7P7Pvv629CMFZ9QJHzzYLlTrGK6W',1,'0000-00-00 00:00:00'),(5,'Ravindu Theja','851423788V','ravi','$2y$10$65OXPngHE12C/s1PkNzfeedYMjTCmknC.1CQvN5eLQH2RxjmVmBwS',1,'0000-00-00 00:00:00');
/*!40000 ALTER TABLE `interncredential` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-02-09 10:35:17
