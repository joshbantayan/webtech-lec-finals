-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: webtechfinals
-- ------------------------------------------------------
-- Server version	5.7.21

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
-- Table structure for table `notes`
--

DROP TABLE IF EXISTS `notes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `content` longtext,
  `link` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notes`
--

LOCK TABLES `notes` WRITE;
/*!40000 ALTER TABLE `notes` DISABLE KEYS */;
INSERT INTO `notes` VALUES (1,'JSP','Java Server Pages','../pages/jsp.php'),(2,'Java Servlet','Java Servlets','../pages/jsp.php'),(3,'javax.servlet','javax.servlet package','../pages/jsp.php'),(4,'javax.servlet.http','javax.servlet package','../pages/jsp.php'),(5,'Server Side','Server Side Scripting','../pages/ss-scripting.php'),(6,'Web Security','Website Security','..pages/web-security.php'),(7,'A1','A1-Injection','../pages/web-security.php'),(8,'A2','A2- Broken Authentication','../pages/web-security.php'),(9,'A3','A3 - Sensitive Data Exposure','../pages/web-security.php'),(10,'A4','A4 - XML External Entities','../pages/web-security.php'),(11,'A5','A5 - Broken Access Control','../pages/web-security.php'),(12,'A6','A6 - Security Misconfiguration','../pages/web-security.php'),(13,'A7','A7 - Cross Site Scripting','../pages/web-security.php'),(14,'A8','A8 - Insecure Desiralization','../pages/web-security.php'),(15,'A9','A9 - Using Components with Known Vulnerabilities','../pages/web-security.php'),(16,'A10','A10 - Insufficient Logging and Monitoring','../pages/web-security.php'),(17,'Node','Node.js','../pages/nodeJs.php'),(18,'php','PHP','../pages/php.php');
/*!40000 ALTER TABLE `notes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-13 14:50:26
