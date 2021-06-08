-- MySQL dump 10.13  Distrib 8.0.25, for Linux (x86_64)
--
-- Host: localhost    Database: my_db
-- ------------------------------------------------------
-- Server version	8.0.25-0ubuntu0.21.04.1

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
-- Table structure for table `resume_data`
--

DROP TABLE IF EXISTS `resume_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `resume_data` (
  `id` int NOT NULL AUTO_INCREMENT,
  `type` varchar(60) NOT NULL,
  `phone` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `city` varchar(60) NOT NULL,
  `link` varchar(60) NOT NULL,
  `skillsArea` varchar(2000) NOT NULL,
  `profileArea` varchar(2000) NOT NULL,
  `profExpArea` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resume_data`
--

LOCK TABLES `resume_data` WRITE;
/*!40000 ALTER TABLE `resume_data` DISABLE KEYS */;
INSERT INTO `resume_data` VALUES (1,'default','+380665209238','a.kornev9102@gmail.com','Zaporizhzhya, Ukraine','https://github.com/AleksKornev','\r\n    Communication skills.\r\n    Problem solving.\r\n    Teamwork.\r\n    Research.\r\n    Creativity.\r\n    Accept criticism & Be open to change\r\n','I am engaged in system maintenance, development of new features, optimization. I want to gain experience in creating new projects, expand the pool of technologies with which I need to work. Unfortunately, I have no experience in programming. I have no back-end orfront-end development experience. I am ready to develop. At this time, I have returned to English courses . I plan to complete all levels, improve my level of spoken and written English','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, earum! Dignissimos molestiae deserunt iusto excepturi voluptates? Mollitia ratione reiciendis, error magnam maiores ipsum molestias adipisci cupiditate recusandae voluptatum et rem ab iusto autem aspernatur. Rerum, fugit totam? A et ipsa pariatur, dicta quaerat necessitatibus, voluptas modi assumenda quibusdam laboriosam illum cupiditate voluptatibus obcaecati iste molestiae. Quae consectetur in, pariatur perspiciatis nisi sapiente accusantium maxime tempora amet. Corporis, recusandae, dignissimos ipsum temporibus ipsam esse beatae nihil porro quae exercitationem quo earum magni. Sequi beatae mollitia qui facere similique debitis aperiam ex nostrum quod corporis delectus tempore soluta, tempora alias obcaecati sint?');
/*!40000 ALTER TABLE `resume_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `lastName` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (50,'fat','fat','fat@g.c','827ccb0eea8a706c4c34a16891f84e7b');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-05-28 12:01:20
