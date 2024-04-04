/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 10.1.10-MariaDB : Database - kadmus
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`kadmus` /*!40100 DEFAULT CHARACTER SET latin1 */;

/*Table structure for table `access_login_failed` */

DROP TABLE IF EXISTS `access_login_failed`;

CREATE TABLE `access_login_failed` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `fake_username` varchar(20) NOT NULL,
  `ipaddress` varchar(20) NOT NULL DEFAULT '0.0.0.0',
  `hostname` varchar(255) NOT NULL,
  `city_region` text,
  `country` varchar(255) DEFAULT NULL,
  `access_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

/*Data for the table `access_login_failed` */

insert  into `access_login_failed`(`id`,`fake_username`,`ipaddress`,`hostname`,`city_region`,`country`,`access_date`) values (10,'worla','41.242.136.2','41.242.136.2','Accra,Greater Accra Region','Ghana','2016-11-04 10:36:48'),(11,'worla','41.242.136.5','41.242.136.5','Accra,Greater Accra Region','Ghana','2016-11-07 13:03:38'),(12,'bismark','197.251.252.242','197.251.252.242','Accra (Kpeshie),Greater Accra','Ghana','2016-11-07 13:50:31'),(13,'worla','41.242.136.5','41.242.136.5','Accra,Greater Accra Region','Ghana','2016-11-07 15:52:31'),(14,'worla','41.242.136.19','41.242.136.19','Accra,Greater Accra Region','Ghana','2016-11-09 20:38:57'),(15,'worla','41.242.136.19','41.242.136.19','Accra,Greater Accra Region','Ghana','2016-11-09 20:44:39'),(16,'worla','41.242.136.19','41.242.136.19','Accra,Greater Accra Region','Ghana','2016-11-09 20:47:06'),(17,'worla','41.242.136.19','41.242.136.19','Accra,Greater Accra Region','Ghana','2016-11-09 20:48:39'),(18,'worla','41.242.136.19','41.242.136.19','Accra,Greater Accra Region','Ghana','2016-11-09 21:09:10'),(19,'worla','41.242.136.19','41.242.136.19','Accra,Greater Accra Region','Ghana','2016-11-09 21:10:50'),(20,'worla','41.242.136.19','41.242.136.19','Accra,Greater Accra Region','Ghana','2016-11-09 21:11:41'),(21,'sysadmin','::1','GreenSun-Mac',',',NULL,'2016-11-25 01:09:36');

/*Table structure for table `access_login_success` */

DROP TABLE IF EXISTS `access_login_success`;

CREATE TABLE `access_login_success` (
  `login_id` int(20) NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(20) NOT NULL,
  `time_in` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `time_out` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `online` int(1) NOT NULL DEFAULT '1',
  `ipaddress` varchar(20) NOT NULL DEFAULT '0.0.0.0',
  `hostname` varchar(255) NOT NULL,
  `city_region` text,
  `country` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=InnoDB AUTO_INCREMENT=266 DEFAULT CHARSET=latin1;

/*Data for the table `access_login_success` */

insert  into `access_login_success`(`login_id`,`employee_id`,`time_in`,`time_out`,`online`,`ipaddress`,`hostname`,`city_region`,`country`) values (1,'TEMP/USR/001','2016-03-13 03:08:41','2016-10-26 10:47:20',1,'192.168.1.10','WORLA-PC',NULL,NULL),(2,'ML/TEMP/001','2016-10-21 11:58:38','2016-10-21 11:58:38',1,'::1','GreenSun-Mac',NULL,NULL),(3,'ML/TEMP/001','2016-10-26 09:12:55','2016-10-26 09:12:55',1,'::1','GreenSun-Mac',NULL,NULL),(4,'ML/TEMP/001','2016-10-26 09:14:31','2016-10-26 09:14:31',1,'::1','GreenSun-Mac',NULL,NULL),(5,'ML/TEMP/001','2016-10-26 09:14:44','2016-10-26 09:14:44',1,'::1','GreenSun-Mac',NULL,NULL),(6,'ML/TEMP/001','2016-10-26 09:39:38','2016-10-26 09:39:38',1,'::1','GreenSun-Mac',NULL,NULL),(7,'ML/TEMP/001','2016-10-26 09:39:49','2016-10-26 09:39:49',1,'::1','GreenSun-Mac',NULL,NULL),(8,'ML/TEMP/001','2016-10-26 09:41:46','2016-10-26 09:41:46',1,'::1','GreenSun-Mac',NULL,NULL),(9,'ML/TEMP/001','2016-10-26 09:44:26','2016-10-26 09:44:26',1,'::1','GreenSun-Mac',NULL,NULL),(10,'ML/TEMP/001','2016-10-26 09:51:47','2016-10-26 09:51:47',1,'::1','GreenSun-Mac',NULL,NULL),(11,'ML/TEMP/001','2016-10-26 09:52:25','2016-10-26 09:52:25',1,'::1','GreenSun-Mac',NULL,NULL),(12,'ML/TEMP/001','2016-10-26 09:54:57','2016-10-26 09:54:57',1,'::1','GreenSun-Mac',NULL,NULL),(13,'ML/TEMP/001','2016-10-26 09:55:35','2016-10-26 09:55:35',1,'::1','GreenSun-Mac',NULL,NULL),(14,'ML/TEMP/001','2016-10-26 10:09:50','2016-10-26 10:09:50',1,'::1','GreenSun-Mac',NULL,NULL),(17,'ML/TEMP/001','2016-10-26 10:44:50','2016-10-26 10:46:28',0,'::1','GreenSun-Mac',NULL,NULL),(18,'ML/TEMP/001','2016-10-26 12:41:22','2016-10-26 12:41:22',1,'::1','GreenSun-Mac',NULL,NULL),(19,'ML/TEMP/001','2016-10-27 03:39:12','2016-10-27 03:39:12',1,'::1','GreenSun-Mac',NULL,NULL),(20,'ML/TEMP/001','2016-10-30 05:32:21','2016-10-30 05:32:21',1,'::1','DESKTOP-HTPBM9H',NULL,NULL),(21,'ML/TEMP/001','2016-11-01 12:56:29','2016-11-01 12:56:29',1,'41.242.136.5','41.242.136.5',NULL,NULL),(22,'ML/TEMP/001','2016-11-01 13:24:34','2016-11-01 13:26:40',0,'197.251.252.242','197.251.252.242',NULL,NULL),(23,'ML/TEMP/001','2016-11-01 13:26:56','2016-11-01 13:26:56',1,'197.251.252.242','197.251.252.242',NULL,NULL),(24,'ML/TEMP/001','2016-11-01 13:28:19','2016-11-01 13:28:19',1,'41.242.136.5','41.242.136.5',NULL,NULL),(25,'ML/TEMP/001','2016-11-01 17:21:45','2016-11-01 17:21:45',1,'41.242.136.5','41.242.136.5',NULL,NULL),(26,'ML/TEMP/001','2016-11-02 14:33:37','2016-11-02 15:49:09',0,'197.251.252.242','197.251.252.242',NULL,NULL),(27,'ML/TEMP/001','2016-11-02 18:14:50','2016-11-02 19:22:02',0,'41.242.136.9','41.242.136.9',NULL,NULL),(28,'ML/TEMP/001','2016-11-03 12:49:32','2016-11-03 12:49:32',1,'41.242.137.48','41.242.137.48',NULL,NULL),(29,'ML/TEMP/001','2016-11-03 17:23:13','2016-11-03 20:30:12',0,'41.242.137.48','41.242.137.48',NULL,NULL),(30,'ML/TEMP/001','2016-11-04 10:41:34','2016-11-04 10:41:39',0,'41.242.136.2','41.242.136.2','Accra,Greater Accra Region','Ghana'),(31,'ML/TEMP/001','2016-11-04 11:39:33','2016-11-04 11:44:54',0,'197.251.252.242','197.251.252.242','Accra (Kpeshie),Greater Accra','Ghana'),(32,'ML/TEMP/001','2016-11-04 11:45:41','2016-11-04 11:45:41',1,'197.251.252.242','197.251.252.242','Accra (Kpeshie),Greater Accra','Ghana'),(33,'ML/TEMP/001','2016-11-07 08:56:55','2016-11-07 13:03:05',0,'41.242.136.5','41.242.136.5','Accra,Greater Accra Region','Ghana'),(34,'ML/TEMP/001','2016-11-07 13:03:14','2016-11-07 13:03:27',0,'41.242.136.5','41.242.136.5','Accra,Greater Accra Region','Ghana'),(35,'ML/TEMP/001','2016-11-07 13:03:54','2016-11-07 15:52:22',0,'41.242.136.5','41.242.136.5','Accra,Greater Accra Region','Ghana'),(36,'ML/TEMP/001','2016-11-07 13:42:54','2016-11-07 13:50:13',0,'197.251.252.242','197.251.252.242','Accra (Kpeshie),Greater Accra','Ghana'),(37,'ML/TEMP/001','2016-11-07 13:51:37','2016-11-07 14:00:18',0,'197.251.252.242','197.251.252.242','Accra (Kpeshie),Greater Accra','Ghana'),(38,'ML/TEMP/001','2016-11-07 14:00:21','2016-11-07 14:00:21',1,'197.251.252.242','197.251.252.242','Accra (Kpeshie),Greater Accra','Ghana'),(39,'ML/TEMP/001','2016-11-07 15:52:44','2016-11-07 15:52:44',1,'41.242.136.5','41.242.136.5','Accra,Greater Accra Region','Ghana'),(40,'ML/TEMP/001','2016-11-08 09:09:34','2016-11-08 09:09:34',1,'197.251.252.242','197.251.252.242','Accra (Kpeshie),Greater Accra','Ghana'),(41,'ML/TEMP/001','2016-11-08 10:48:57','2016-11-08 10:48:57',1,'41.242.136.25','41.242.136.25','Accra,Greater Accra Region','Ghana'),(42,'ML/TEMP/001','2016-11-08 12:26:25','2016-11-08 12:26:25',1,'41.242.136.25','41.242.136.25','Accra,Greater Accra Region','Ghana'),(43,'ML/TEMP/001','2016-11-08 16:27:44','2016-11-08 16:43:55',0,'41.242.136.25','41.242.136.25','Accra,Greater Accra Region','Ghana'),(44,'ML/TEMP/001','2016-11-09 09:20:25','2016-11-09 09:20:25',1,'197.251.252.242','197.251.252.242','Accra (Kpeshie),Greater Accra','Ghana'),(45,'ML/TEMP/001','2016-11-09 11:18:23','2016-11-09 11:18:23',1,'41.242.136.19','41.242.136.19','Accra,Greater Accra Region','Ghana'),(46,'ML/TEMP/001','2016-11-09 14:24:46','2016-11-09 14:24:46',1,'197.251.252.242','197.251.252.242','Accra (Kpeshie),Greater Accra','Ghana'),(47,'ML/TEMP/001','2016-11-09 15:24:36','2016-11-09 15:24:36',1,'41.242.136.19','41.242.136.19','Accra,Greater Accra Region','Ghana'),(48,'ML/TEMP/001','2016-11-09 19:23:45','2016-11-09 19:25:18',0,'41.242.136.19','41.242.136.19','Accra,Greater Accra Region','Ghana'),(49,'ML/TEMP/001','2016-11-09 20:38:41','2016-11-09 20:38:47',0,'41.242.136.19','41.242.136.19','Accra,Greater Accra Region','Ghana'),(50,'ML/TEMP/001','2016-11-10 08:21:45','2016-11-10 08:23:10',0,'197.251.252.242','197.251.252.242','Accra (Kpeshie),Greater Accra','Ghana'),(51,'ML/TEMP/001','2016-11-10 17:39:58','2016-11-10 17:39:58',1,'41.66.196.158','41.66.196.158','Accra,Greater Accra Region','Ghana'),(52,'ML/TEMP/001','2016-11-10 18:10:43','2016-11-10 18:10:43',1,'41.242.136.7','41.242.136.7','Accra,Greater Accra Region','Ghana'),(53,'ML/TEMP/001','2016-11-11 17:18:03','2016-11-11 17:37:11',0,'41.242.136.3','41.242.136.3','Accra,Greater Accra Region','Ghana'),(54,'ML/TEMP/001','2016-11-14 11:20:03','2016-11-14 11:20:03',1,'197.251.252.242','197.251.252.242','Accra (Kpeshie),Greater Accra','Ghana'),(55,'ML/TEMP/001','2016-11-14 11:27:43','2016-11-14 11:30:04',0,'197.159.139.201','197.159.139.201','Accra,Greater Accra Region','Ghana'),(56,'ML/TEMP/001','2016-11-14 13:16:42','2016-11-14 13:16:42',1,'197.159.139.201','197.159.139.201','Accra,Greater Accra Region','Ghana'),(57,'ML/TEMP/001','2016-11-15 08:48:36','2016-11-15 08:48:36',1,'197.251.252.242','197.251.252.242','Accra (Kpeshie),Greater Accra','Ghana'),(58,'ML/TEMP/001','2016-11-16 11:04:55','2016-11-16 12:01:17',0,'41.57.212.120','41.57.212.120','Accra,Greater Accra Region','Ghana'),(59,'ML/TEMP/001','2016-11-16 11:23:17','2016-11-16 12:07:08',0,'41.57.212.120','41.57.212.120','Accra,Greater Accra Region','Ghana'),(60,'ML/TEMP/001','2016-11-16 12:01:34','2016-11-16 12:05:41',0,'41.57.212.120','41.57.212.120','Accra,Greater Accra Region','Ghana'),(61,'ML/TEMP/001','2016-11-16 12:05:50','2016-11-16 12:05:50',1,'41.57.212.120','41.57.212.120','Accra,Greater Accra Region','Ghana'),(62,'ML/TEMP/001','2016-11-16 12:07:15','2016-11-16 12:07:15',1,'41.57.212.120','41.57.212.120','Accra,Greater Accra Region','Ghana'),(63,'ML/TEMP/001','2016-11-17 15:49:42','2016-11-17 15:49:42',1,'197.251.252.242','197.251.252.242',',',NULL),(64,'ML/TEMP/001','2016-11-17 15:49:55','2016-11-17 15:49:55',1,'197.251.252.242','197.251.252.242',',',NULL),(65,'ML/TEMP/001','2016-11-17 15:50:21','2016-11-17 15:50:21',1,'197.251.252.242','197.251.252.242',',',NULL),(66,'ML/TEMP/001','2016-11-17 16:11:33','2016-11-17 16:11:33',1,'197.251.252.242','197.251.252.242',',',NULL),(67,'ML/TEMP/001','2016-11-17 16:13:07','2016-11-17 16:13:07',1,'197.251.252.242','197.251.252.242',',',NULL),(68,'ML/TEMP/001','2016-11-18 09:00:47','2016-11-18 09:01:14',0,'41.57.212.120','41.57.212.120','Accra,Greater Accra Region','Ghana'),(69,'ML/TEMP/001','2016-11-18 09:01:20','2016-11-18 09:02:57',0,'41.57.212.120','41.57.212.120','Accra,Greater Accra Region','Ghana'),(70,'ML/TEMP/001','2016-11-18 11:33:28','2016-11-18 11:34:41',0,'41.57.212.120','41.57.212.120','Accra,Greater Accra Region','Ghana'),(71,'ML/TEMP/001','2016-11-18 11:35:14','2016-11-18 11:51:27',0,'41.57.212.120','41.57.212.120','Accra,Greater Accra Region','Ghana'),(72,'ML/TEMP/001','2016-11-18 15:17:34','2016-11-18 15:39:36',0,'41.57.212.120','41.57.212.120','Accra,Greater Accra Region','Ghana'),(73,'ML/TEMP/001','2016-11-19 12:24:16','2016-11-19 12:26:43',0,'41.189.163.43','41.189.163.43','Accra,Greater Accra Region','Ghana'),(74,'ML/TEMP/001','2016-11-19 12:25:48','2016-11-19 12:25:48',1,'197.191.125.32','197.191.125.32','Accra (Osu Klottey),Greater Accra','Ghana'),(75,'ML/TEMP/001','2016-11-21 14:58:46','2016-11-21 14:58:46',1,'197.251.252.242','197.251.252.242','Accra (Kpeshie),Greater Accra','Ghana'),(76,'ML/TEMP/001','2016-11-22 22:44:19','2016-11-22 22:47:26',0,'::1','GreenSun-Mac',',',NULL),(77,'ML/TEMP/001','2016-11-22 22:47:40','2016-11-22 22:47:40',1,'::1','GreenSun-Mac',',',NULL),(78,'ML/TEMP/001','2016-11-23 09:17:49','2016-11-23 09:18:00',0,'::1','GreenSun-Mac',',',NULL),(79,'ML/TEMP/001','2016-11-23 09:18:15','2016-11-23 09:33:59',0,'::1','GreenSun-Mac',',',NULL),(80,'ML/TEMP/001','2016-11-23 09:34:12','2016-11-23 09:35:04',0,'::1','GreenSun-Mac',',',NULL),(81,'ML/TEMP/001','2016-11-23 09:35:16','2016-11-23 09:39:12',0,'::1','GreenSun-Mac',',',NULL),(82,'ML/TEMP/001','2016-11-23 09:39:20','2016-11-23 10:09:41',0,'::1','GreenSun-Mac',',',NULL),(83,'ML/TEMP/001','2016-11-23 10:09:52','2016-11-23 11:47:16',0,'::1','GreenSun-Mac',',',NULL),(84,'ML/TEMP/001','2016-11-23 11:48:17','2016-11-23 11:48:17',1,'::1','GreenSun-Mac',',',NULL),(85,'ML/TEMP/001','2016-11-24 10:49:21','2016-11-24 10:49:21',1,'::1','GreenSun-Mac',',',NULL),(86,'ML/TEMP/001','2016-11-24 20:58:19','2016-11-24 20:58:19',1,'::1','GreenSun-Mac',',',NULL),(87,'ML/TEMP/001','2016-11-24 21:05:05','2016-11-24 21:13:49',0,'::1','GreenSun-Mac',',',NULL),(88,'ML/TEMP/001','2016-11-24 21:17:26','2016-11-24 21:38:06',0,'::1','GreenSun-Mac',',',NULL),(89,'ML/TEMP/001','2016-11-24 23:41:54','2016-11-24 23:51:05',0,'::1','GreenSun-Mac',',',NULL),(90,'ML/TEMP/001','2016-11-24 23:51:15','2016-11-24 23:56:27',0,'::1','GreenSun-Mac',',',NULL),(91,'ML/TEMP/001','2016-11-24 23:56:42','2016-11-24 23:58:57',0,'::1','GreenSun-Mac',',',NULL),(92,'ML/TEMP/001','2016-11-24 23:59:05','2016-11-25 00:43:37',0,'::1','GreenSun-Mac',',',NULL),(93,'KAD/SYS/1','2016-11-25 00:53:49','2016-11-25 01:07:28',0,'::1','GreenSun-Mac',',',NULL),(94,'KAD/SYS/1','2016-11-25 01:07:45','2016-11-25 01:09:08',0,'::1','GreenSun-Mac',',',NULL),(95,'KAD/SYS/1','2016-11-25 01:09:56','2016-11-25 01:09:56',1,'::1','GreenSun-Mac',',',NULL),(96,'ML/TEMP/001','2016-11-26 08:13:25','2016-11-26 08:13:25',1,'::1','GreenSun-Mac',',',NULL),(97,'ML/TEMP/001','2016-11-28 10:44:46','2016-11-28 10:44:46',1,'::1','GreenSun-Mac',',',NULL),(98,'ML/TEMP/001','2016-11-28 13:43:01','2016-11-28 13:43:01',1,'::1','GreenSun-Mac',',',NULL),(99,'ML/TEMP/001','2016-11-28 19:37:20','2016-11-28 19:37:20',1,'::1','GreenSun-Mac',',',NULL),(100,'ML/TEMP/001','2016-11-29 10:40:25','2016-11-29 10:40:25',1,'::1','GreenSun-Mac',',',NULL),(101,'ML/TEMP/001','2016-11-29 19:48:42','2016-11-29 19:48:42',1,'::1','GreenSun-Mac',',',NULL),(102,'ML/TEMP/001','2016-12-02 11:08:32','2016-12-02 11:08:32',1,'::1','GreenSun-Mac',',',NULL),(103,'ML/TEMP/001','2016-12-02 11:49:56','2016-12-02 13:53:46',0,'169.254.253.52','QUU',',',NULL),(104,'ML/TEMP/001','2016-12-02 11:57:54','2016-12-02 15:24:52',0,'169.254.244.245','GreenSun-Mac',',',NULL),(105,'ML/TEMP/001','2016-12-02 13:53:49','2016-12-02 16:12:45',0,'169.254.253.52','QUU',',',NULL),(106,'ML/TEMP/001','2016-12-02 15:25:00','2016-12-02 16:10:37',0,'169.254.244.245','GreenSun-Mac',',',NULL),(107,'ML/TEMP/001','2016-12-02 16:10:40','2016-12-02 16:11:01',0,'169.254.244.245','GreenSun-Mac',',',NULL),(108,'ML/TEMP/001','2016-12-02 16:11:03','2016-12-02 16:11:03',1,'169.254.244.245','GreenSun-Mac',',',NULL),(109,'ML/TEMP/001','2016-12-02 16:12:47','2016-12-02 16:20:11',0,'169.254.253.52','QUU',',',NULL),(110,'ML/TEMP/001','2016-12-02 16:20:13','2016-12-02 16:20:13',1,'169.254.253.52','QUU',',',NULL),(111,'ML/TEMP/001','2016-12-02 23:28:39','2016-12-02 23:28:39',1,'169.254.244.245','169.254.244.245',',',NULL),(112,'ML/TEMP/001','2016-12-05 10:41:24','2016-12-05 10:41:24',1,'169.254.244.245','169.254.244.245',',',NULL),(113,'ML/TEMP/001','2016-12-05 10:41:29','2016-12-05 10:41:29',1,'169.254.244.245','169.254.244.245',',',NULL),(114,'ML/TEMP/001','2016-12-05 17:58:02','2016-12-05 17:58:02',1,'169.254.244.245','169.254.244.245',',',NULL),(115,'ML/TEMP/001','2016-12-05 18:29:32','2016-12-05 18:29:32',1,'169.254.244.245','169.254.244.245',',',NULL),(116,'ML/TEMP/001','2016-12-08 19:15:25','2016-12-08 19:15:25',1,'::1','GreenSun-Mac',',',NULL),(117,'ML/TEMP/001','2016-12-09 19:04:47','2016-12-09 19:04:47',1,'::1','GreenSun-Mac',',',NULL),(118,'ML/TEMP/001','2016-12-10 14:42:18','2016-12-10 14:42:18',1,'::1','GreenSun-Mac',',',NULL),(119,'ML/TEMP/001','2016-12-12 11:11:42','2016-12-12 11:11:42',1,'::1','GreenSun-Mac',',',NULL),(120,'ML/TEMP/001','2016-12-12 18:14:18','2016-12-12 18:14:18',1,'::1','GreenSun-Mac',',',NULL),(121,'ML/TEMP/001','2016-12-16 12:20:24','2016-12-16 12:20:24',1,'::1','GreenSun-Mac',',',NULL),(122,'ML/TEMP/001','2016-12-16 16:26:27','2016-12-16 16:26:27',1,'::1','GreenSun-Mac',',',NULL),(123,'ML/TEMP/001','2016-12-17 06:59:29','2016-12-17 07:31:29',0,'::1','GreenSun-Mac',',',NULL),(124,'ML/TEMP/001','2016-12-17 08:19:49','2016-12-17 08:19:49',1,'::1','GreenSun-Mac',',',NULL),(125,'ML/TEMP/001','2016-12-17 14:40:35','2016-12-17 15:47:59',0,'::1','GreenSun-Mac',',',NULL),(126,'ML/TEMP/001','2016-12-17 15:48:04','2016-12-17 15:48:04',1,'::1','GreenSun-Mac',',',NULL),(127,'ML/TEMP/001','2016-12-26 03:08:34','2016-12-26 03:08:34',1,'::1','GreenSun-Mac',',',NULL),(128,'ML/TEMP/001','2016-12-26 08:07:35','2016-12-26 08:07:35',1,'::1','GreenSun-Mac',',',NULL),(129,'ML/TEMP/001','2016-12-28 15:12:35','2016-12-28 15:12:35',1,'::1','GreenSun-Mac',',',NULL),(130,'ML/TEMP/001','2016-12-28 17:17:17','2016-12-28 17:49:14',0,'::1','GreenSun-Mac',',',NULL),(131,'ML/TEMP/001','2016-12-28 17:49:19','2016-12-28 17:55:23',0,'::1','GreenSun-Mac',',',NULL),(132,'ML/TEMP/001','2016-12-28 17:55:27','2016-12-28 17:58:54',0,'::1','GreenSun-Mac',',',NULL),(133,'ML/TEMP/001','2016-12-28 17:58:58','2016-12-28 18:41:55',0,'::1','GreenSun-Mac',',',NULL),(134,'ML/TEMP/001','2016-12-28 18:41:58','2016-12-28 18:42:34',0,'::1','GreenSun-Mac',',',NULL),(135,'ML/TEMP/001','2016-12-28 18:42:38','2016-12-28 18:44:15',0,'::1','GreenSun-Mac',',',NULL),(136,'ML/TEMP/001','2016-12-28 18:44:18','2016-12-28 18:50:12',0,'::1','GreenSun-Mac',',',NULL),(137,'ML/TEMP/001','2016-12-28 18:50:15','2016-12-28 18:55:21',0,'::1','GreenSun-Mac',',',NULL),(138,'ML/TEMP/001','2016-12-28 18:55:26','2016-12-28 18:55:26',1,'::1','GreenSun-Mac',',',NULL),(139,'ML/TEMP/001','2016-12-28 19:07:33','2016-12-28 19:07:33',1,'192.168.1.100','AGYA',',',NULL),(140,'ML/TEMP/001','2016-12-28 19:08:36','2016-12-28 19:08:36',1,'192.168.1.103','192.168.1.103',',',NULL),(141,'ML/TEMP/001','2016-12-28 19:16:31','2016-12-28 19:16:31',1,'192.168.1.101','GreenSun-Mac',',',NULL),(142,'ML/TEMP/001','2016-12-28 21:46:05','2016-12-28 21:46:05',1,'192.168.1.100','GreenSun-Mac',',',NULL),(143,'ML/TEMP/001','2016-12-28 21:48:50','2016-12-28 22:25:02',0,'192.168.1.101','AGYA',',',NULL),(144,'ML/TEMP/001','2016-12-28 22:25:14','2016-12-28 22:25:14',1,'192.168.1.101','AGYA',',',NULL),(145,'ML/TEMP/001','2016-12-29 06:17:49','2016-12-29 07:31:37',0,'192.168.1.102','AGYA',',',NULL),(146,'ML/TEMP/001','2016-12-29 07:31:42','2016-12-29 07:32:19',0,'192.168.1.100','AGYA',',',NULL),(147,'ML/TEMP/001','2016-12-29 07:32:24','2016-12-29 07:32:24',1,'192.168.1.100','AGYA',',',NULL),(148,'ML/TEMP/001','2016-12-29 07:41:28','2016-12-29 07:41:28',1,'192.168.1.101','GreenSun-Mac',',',NULL),(149,'ML/TEMP/001','2016-12-29 11:51:27','2016-12-29 11:51:27',1,'192.168.1.102','GreenSun-Mac',',',NULL),(150,'ML/TEMP/001','2016-12-29 11:51:49','2016-12-29 17:47:56',0,'192.168.1.100','AGYA',',',NULL),(151,'ML/TEMP/001','2016-12-29 11:58:16','2016-12-29 11:58:16',1,'192.168.1.102','GreenSun-Mac',',',NULL),(152,'ML/TEMP/001','2016-12-29 13:28:42','2016-12-29 13:28:42',1,'192.168.1.102','GreenSun-Mac',',',NULL),(153,'ML/TEMP/001','2016-12-29 17:48:16','2016-12-29 17:48:16',1,'192.168.1.101','AGYA',',',NULL),(154,'ML/TEMP/001','2016-12-29 21:58:56','2016-12-29 22:14:30',0,'192.168.1.100','AGYA',',',NULL),(155,'ML/TEMP/001','2016-12-29 22:00:57','2016-12-29 22:00:57',1,'192.168.1.104','GreenSun-Mac',',',NULL),(156,'ML/TEMP/001','2016-12-29 22:15:02','2016-12-29 22:18:15',0,'192.168.1.100','AGYA',',',NULL),(157,'ML/TEMP/001','2016-12-29 22:18:26','2016-12-29 22:18:26',1,'192.168.1.100','AGYA',',',NULL),(158,'ML/TEMP/001','2016-12-30 06:57:06','2016-12-30 06:57:06',1,'192.168.1.100','GreenSun-Mac',',',NULL),(159,'ML/TEMP/001','2016-12-30 10:55:41','2016-12-30 10:55:41',1,'192.168.1.102','AGYA',',',NULL),(160,'ML/TEMP/001','2016-12-30 11:01:04','2016-12-30 11:01:04',1,'192.168.1.100','GreenSun-Mac',',',NULL),(161,'ML/TEMP/001','2016-12-30 18:46:19','2016-12-31 00:04:10',0,'192.168.1.101','DESKTOP-HTPBM9H',',',NULL),(162,'ML/TEMP/001','2017-01-04 19:25:46','2017-01-04 19:32:38',0,'::1','GreenSun-Mac',',',NULL),(163,'ML/TEMP/001','2017-01-04 19:32:40','2017-01-04 19:36:49',0,'::1','GreenSun-Mac',',',NULL),(164,'ML/TEMP/001','2017-01-04 19:36:52','2017-01-04 19:39:22',0,'::1','GreenSun-Mac',',',NULL),(165,'ML/TEMP/001','2017-01-04 19:37:35','2017-01-04 19:37:35',1,'::1','GreenSun-Mac',',',NULL),(166,'ML/TEMP/001','2017-01-04 19:39:24','2017-01-04 19:41:06',0,'::1','GreenSun-Mac',',',NULL),(167,'ML/TEMP/001','2017-01-04 19:41:09','2017-01-04 19:41:09',1,'::1','GreenSun-Mac',',',NULL),(168,'ML/TEMP/001','2017-01-05 02:49:21','2017-01-05 02:49:21',1,'::1','GreenSun-Mac',',',NULL),(169,'ML/TEMP/001','2017-01-05 08:50:35','2017-01-05 08:50:35',1,'::1','GreenSun-Mac',',',NULL),(170,'ML/TEMP/001','2017-01-05 16:33:42','2017-01-05 16:33:42',1,'::1','GreenSun-Mac',',',NULL),(171,'ML/TEMP/001','2017-01-05 23:25:23','2017-01-05 23:25:23',1,'::1','GreenSun-Mac',',',NULL),(172,'ML/TEMP/001','2017-01-06 14:25:57','2017-01-06 14:25:57',1,'::1','GreenSun-Mac',',',NULL),(173,'ML/TEMP/001','2017-01-07 11:38:11','2017-01-07 11:38:11',1,'192.168.1.100','GreenSun-Mac',',',NULL),(174,'ML/TEMP/001','2017-01-07 11:38:35','2017-01-07 11:38:35',1,'192.168.1.101','AGYA',',',NULL),(175,'ML/TEMP/001','2017-01-07 18:16:21','2017-01-07 18:16:21',1,'::1','Agya',',',NULL),(176,'ML/TEMP/001','2017-01-08 08:04:02','2017-01-08 08:04:02',1,'::1','Agya',',',NULL),(177,'ML/TEMP/001','2017-01-09 09:38:57','2017-01-09 09:38:57',1,'::1','Agya',',',NULL),(178,'ML/TEMP/001','2017-01-09 09:39:16','2017-01-09 09:39:16',1,'::1','Agya',',',NULL),(179,'ML/TEMP/001','2017-01-09 16:11:28','2017-01-09 16:11:28',1,'::1','Agya',',',NULL),(180,'ML/TEMP/001','2017-01-09 20:43:44','2017-01-09 20:53:27',0,'::1','Agya',',',NULL),(181,'ML/TEMP/001','2017-01-09 20:53:30','2017-01-09 20:54:55',0,'::1','Agya',',',NULL),(182,'ML/TEMP/001','2017-01-09 20:54:58','2017-01-09 20:56:33',0,'::1','Agya',',',NULL),(183,'ML/TEMP/001','2017-01-09 20:56:36','2017-01-09 21:00:28',0,'::1','Agya',',',NULL),(184,'ML/TEMP/001','2017-01-09 21:00:31','2017-01-09 21:13:25',0,'::1','Agya',',',NULL),(185,'ML/TEMP/001','2017-01-09 21:13:28','2017-01-09 21:13:28',1,'::1','Agya',',',NULL),(186,'ML/TEMP/001','2017-01-10 08:25:15','2017-01-10 08:25:15',1,'::1','Agya',',',NULL),(187,'ML/TEMP/001','2017-01-10 20:18:05','2017-01-10 20:22:51',0,'::1','GreenSun-Mac',',',NULL),(188,'ML/TEMP/001','2017-01-10 23:10:11','2017-01-10 23:33:17',0,'::1','GreenSun-Mac',',',NULL),(189,'ML/TEMP/001','2017-01-10 23:34:52','2017-01-10 23:34:52',1,'::1','GreenSun-Mac',',',NULL),(190,'ML/TEMP/001','2017-01-11 08:36:10','2017-01-11 08:36:10',1,'::1','GreenSun-Mac',',',NULL),(191,'ML/TEMP/001','2017-01-11 13:37:04','2017-01-11 13:37:04',1,'::1','GreenSun-Mac',',',NULL),(192,'ML/TEMP/001','2017-01-12 04:57:36','2017-01-12 04:57:36',1,'::1','GreenSun-Mac',',',NULL),(193,'ML/TEMP/001','2017-01-12 08:29:45','2017-01-12 08:29:45',1,'::1','GreenSun-Mac',',',NULL),(194,'ML/TEMP/001','2017-01-13 01:37:22','2017-01-13 01:37:22',1,'::1','GreenSun-Mac',',',NULL),(195,'ML/TEMP/001','2017-01-13 23:57:37','2017-01-13 23:57:37',1,'::1','GreenSun-Mac',',',NULL),(196,'ML/TEMP/001','2017-01-14 21:57:30','2017-01-14 21:57:30',1,'::1','GreenSun-Mac',',',NULL),(197,'ML/TEMP/001','2017-01-16 23:47:34','2017-01-16 23:47:34',1,'::1','GreenSun-Mac',',',NULL),(198,'ML/TEMP/001','2017-01-17 15:10:22','2017-01-17 15:10:22',1,'::1','GreenSun-Mac',',',NULL),(199,'ML/TEMP/001','2017-01-17 18:19:51','2017-01-17 18:19:51',1,'::1','GreenSun-Mac',',',NULL),(200,'ML/TEMP/001','2017-01-18 10:56:52','2017-01-18 10:56:52',1,'::1','GreenSun-Mac',',',NULL),(201,'ML/TEMP/001','2017-01-18 21:26:46','2017-01-18 21:26:46',1,'::1','GreenSun-Mac',',',NULL),(202,'ML/TEMP/001','2017-01-19 04:19:12','2017-01-19 04:19:12',1,'::1','GreenSun-Mac',',',NULL),(203,'ML/TEMP/001','2017-01-19 07:55:11','2017-01-19 07:55:11',1,'::1','GreenSun-Mac',',',NULL),(204,'ML/TEMP/001','2017-01-19 11:41:10','2017-01-19 11:41:10',1,'::1','GreenSun-Mac',',',NULL),(205,'ML/TEMP/001','2017-01-19 17:25:58','2017-01-19 17:25:58',1,'::1','GreenSun-Mac',',',NULL),(206,'ML/TEMP/001','2017-01-19 19:46:40','2017-01-19 21:02:12',0,'::1','GreenSun-Mac',',',NULL),(207,'ML/TEMP/001','2017-01-19 21:51:34','2017-01-19 22:54:23',0,'::1','GreenSun-Mac',',',NULL),(208,'ML/TEMP/001','2017-01-19 22:54:37','2017-01-19 22:54:37',1,'::1','GreenSun-Mac',',',NULL),(209,'ML/TEMP/001','2017-01-20 06:31:05','2017-01-20 06:31:05',1,'::1','GreenSun-Mac',',',NULL),(210,'ML/TEMP/001','2017-01-20 11:07:21','2017-01-20 11:07:21',1,'::1','GreenSun-Mac',',',NULL),(211,'ML/TEMP/001','2017-01-20 12:40:26','2017-01-20 12:40:26',1,'10.0.0.163','GreenSun-Mac.home',',',NULL),(212,'ML/TEMP/001','2017-01-23 22:49:53','2017-01-23 22:59:46',0,'::1','GreenSun-Mac',',',NULL),(213,'ML/TEMP/001','2017-02-21 11:20:00','2017-02-21 11:20:00',1,'::1','GreenSun-Mac',',',NULL),(214,'ML/TEMP/001','2017-02-22 00:19:11','2017-02-22 00:19:20',0,'::1','GreenSun-Mac',',',NULL),(215,'ML/TEMP/001','2017-02-22 01:11:37','2017-02-22 01:11:37',1,'::1','GreenSun-Mac',',',NULL),(216,'ML/TEMP/001','2017-02-23 06:45:20','2017-02-23 06:45:20',1,'::1','GreenSun-Mac',',',NULL),(217,'ML/TEMP/001','2017-02-27 22:31:20','2017-02-27 22:31:20',1,'::1','GreenSun-Mac',',',NULL),(218,'ML/TEMP/001','2017-02-28 04:25:55','2017-02-28 04:25:55',1,'::1','GreenSun-Mac',',',NULL),(219,'ML/TEMP/001','2017-02-28 13:33:16','2017-02-28 13:33:16',1,'::1','GreenSun-Mac',',',NULL),(220,'ML/TEMP/001','2017-02-28 18:16:37','2017-02-28 18:16:37',1,'::1','GreenSun-Mac',',',NULL),(221,'ML/TEMP/001','2017-03-01 09:11:32','2017-03-01 09:11:32',1,'::1','GreenSun-Mac',',',NULL),(222,'ML/TEMP/001','2017-03-01 15:05:46','2017-03-01 15:05:46',1,'::1','GreenSun-Mac',',',NULL),(223,'ML/TEMP/001','2017-03-01 23:59:14','2017-03-02 01:38:56',0,'::1','GreenSun-Mac',',',NULL),(224,'ML/TEMP/001','2017-03-02 01:25:34','2017-03-02 01:25:34',1,'::1','GreenSun-Mac',',',NULL),(225,'ML/TEMP/001','2017-03-02 01:39:06','2017-03-02 01:39:06',1,'::1','GreenSun-Mac',',',NULL),(226,'ML/TEMP/001','2017-03-03 20:57:33','2017-03-03 20:57:33',1,'::1','GreenSun-Mac',',',NULL),(227,'ML/TEMP/001','2017-03-11 14:52:43','2017-03-11 14:52:43',1,'::1','GreenSun-Mac',',',NULL),(228,'ML/TEMP/001','2017-03-13 00:16:41','2017-03-13 00:16:41',1,'::1','GreenSun-Mac',',',NULL),(229,'ML/TEMP/001','2017-03-13 10:31:51','2017-03-13 10:31:51',1,'::1','GreenSun-Mac',',',NULL),(230,'ML/TEMP/001','2017-03-13 17:33:19','2017-03-13 17:33:19',1,'::1','GreenSun-Mac',',',NULL),(231,'ML/TEMP/001','2017-03-14 08:34:27','2017-03-14 08:37:07',0,'::1','GreenSun-Mac',',',NULL),(232,'ML/TEMP/001','2017-03-15 11:57:03','2017-03-15 13:51:23',0,'::1','GreenSun-Mac',',',NULL),(233,'ML/TEMP/001','2017-03-15 13:51:53','2017-03-15 13:51:53',1,'192.168.1.101','GreenSun-Mac',',',NULL),(234,'ML/TEMP/001','2017-03-15 14:04:00','2017-03-15 14:04:00',1,'192.168.1.100','192.168.1.100',',',NULL),(235,'ML/TEMP/001','2017-03-15 21:39:14','2017-03-15 21:39:14',1,'192.168.1.101','192.168.1.101',',',NULL),(236,'ML/TEMP/001','2017-03-15 23:08:40','2017-03-15 23:08:40',1,'192.168.1.100','GreenSun-Mac',',',NULL),(237,'ML/TEMP/001','2017-03-15 23:09:13','2017-03-15 23:09:13',1,'192.168.1.101','BISMARK',',',NULL),(238,'ML/TEMP/001','2017-03-15 23:09:28','2017-03-15 23:09:28',1,'192.168.1.101','BISMARK',',',NULL),(239,'ML/TEMP/001','2017-03-15 23:09:57','2017-03-15 23:09:57',1,'192.168.1.101','BISMARK',',',NULL),(240,'ML/TEMP/001','2017-03-15 23:10:32','2017-03-15 23:10:32',1,'192.168.1.101','BISMARK',',',NULL),(241,'ML/TEMP/001','2017-03-15 23:11:14','2017-03-15 23:11:14',1,'192.168.1.101','BISMARK',',',NULL),(242,'ML/TEMP/001','2017-03-16 01:15:49','2017-03-16 01:15:49',1,'192.168.137.1','GreenSun-Mac.mshome.net',',',NULL),(243,'ML/TEMP/001','2017-03-16 01:20:46','2017-03-16 01:31:13',0,'::1','GreenSun-Mac',',',NULL),(244,'ML/TEMP/001','2017-03-16 02:25:29','2017-03-16 02:25:29',1,'::1','GreenSun-Mac',',',NULL),(245,'ML/TEMP/001','2017-03-16 06:44:33','2017-03-16 06:44:33',1,'::1','GreenSun-Mac',',',NULL),(246,'ML/TEMP/001','2016-03-28 20:06:24','2016-03-28 20:06:24',1,'::1','DESKTOP-1DH8U8V',',',NULL),(247,'ML/TEMP/001','2017-03-20 06:11:42','2017-03-20 06:11:42',1,'::1','DESKTOP-1DH8U8V',',',NULL),(248,'ML/TEMP/001','2017-03-20 08:55:16','2017-03-20 08:55:16',1,'::1','DESKTOP-1DH8U8V',',',NULL),(249,'ML/TEMP/001','2017-03-20 14:11:25','2017-03-20 14:11:25',1,'::1','DESKTOP-1DH8U8V',',',NULL),(250,'ML/TEMP/001','2017-03-21 09:15:33','2017-03-21 09:15:33',1,'::1','DESKTOP-1DH8U8V',',',NULL),(251,'ML/TEMP/001','2017-03-22 18:41:52','2017-03-22 18:41:52',1,'::1','DESKTOP-1DH8U8V',',',NULL),(252,'ML/TEMP/001','2017-03-22 22:10:02','2017-03-22 22:10:02',1,'::1','DESKTOP-1DH8U8V',',',NULL),(253,'ML/TEMP/001','2017-03-23 22:44:38','2017-03-23 22:44:38',1,'::1','DESKTOP-1DH8U8V',',',NULL),(254,'ML/TEMP/001','2017-03-24 04:42:33','2017-03-24 04:42:33',1,'::1','DESKTOP-1DH8U8V',',',NULL),(255,'ML/TEMP/001','2017-03-24 22:12:53','2017-03-24 22:12:53',1,'::1','GreenSun-Mac',',',NULL),(256,'ML/TEMP/001','2017-03-25 23:17:08','2017-03-25 23:17:08',1,'::1','GreenSun-Mac',',',NULL),(257,'ML/TEMP/001','2017-03-27 00:26:47','2017-03-27 00:26:47',1,'::1','GreenSun-Mac',',',NULL),(258,'ML/TEMP/001','2017-03-28 22:36:06','2017-03-28 22:36:06',1,'::1','GreenSun-Mac',',',NULL),(259,'ML/TEMP/001','2017-03-29 21:06:06','2017-03-29 21:06:06',1,'::1','GreenSun-Mac',',',NULL),(260,'ML/TEMP/001','2017-03-30 07:39:42','2017-03-30 09:11:55',0,'::1','GreenSun-Mac',',',NULL),(261,'ML/TEMP/001','2017-04-10 12:52:18','2017-04-10 12:52:18',1,'::1','GreenSun-Mac',',',NULL),(262,'ML/TEMP/001','2017-04-11 13:16:59','2017-04-11 13:29:06',0,'::1','GreenSun-Mac',',',NULL),(263,'ML/TEMP/001','2017-04-11 13:29:09','2017-04-11 13:39:16',0,'::1','GreenSun-Mac',',',NULL),(264,'ML/TEMP/001','2017-04-11 18:37:51','2017-04-11 18:37:51',1,'::1','GreenSun-Mac',',',NULL),(265,'ML/TEMP/001','2017-04-12 05:07:52','2017-04-12 07:00:09',0,'::1','GreenSun-Mac',',',NULL);

/*Table structure for table `access_roles_priviledges_group` */

DROP TABLE IF EXISTS `access_roles_priviledges_group`;

CREATE TABLE `access_roles_priviledges_group` (
  `group_id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(255) NOT NULL,
  `roles` text NOT NULL,
  `priviledges` text NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`group_id`),
  UNIQUE KEY `name` (`group_name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `access_roles_priviledges_group` */

insert  into `access_roles_priviledges_group`(`group_id`,`group_name`,`roles`,`priviledges`,`description`,`status`) values (1,'System Developers','Projects|Make Request|Approvals|Statistics|Chart Of Acct|PayRoll|Process Requests|Services|Purchases|Vehicle Policy|Purchase Order|New Employee|Manage Emp.|Leave Mgmt|Organization|New Stock|Manage Stock|Stock-Intake|Vendors|Register New|Users|Roles & Priv.|Backup|Audit|License|Settings|System|Model Install|Sales Order|Appraisal','Chart Of Acct-can delete|Chart Of Acct-can add|Chart Of Acct-can edit|Inc. Requests-Can Process Requests|Services-can delete|Services-can add|Services-can edit|Purchases-Department|Purchases-All|Vehicle Policy-Department|Vehicle Policy-All|Purchase Ord.-can make order|Purchase Ord.-can view list|Approvals-can approval|Approvals- can view list|New Employee-can delete|New Employee-can add|New Employee-can edit|Manage Emp.-can delete|Manage Emp.-can add|Manage Emp.-can edit|Leave Mgmt-Can Create New|Leave Mgmt-Can Edit Leave|Leave Mgmt-Can Delete Leave|Organization-Can Create Company Profile|Organization-Can Edit Company Profile|Organization-Can Delete Company Profile|New Stock-Can Delete Stock|New Stock-Can Add Stock|New Stock-Can Edit Stock|Manage Stock-can delete|Manage Stock-can add|Manage Stock-can edit|Vendors-can delete|Vendors-can add|Vendors-can edit|Register New-Can Add Prod / Cat / Desc|Register New-Can Edit Prod / Cat / Desc|Register New-Can Delete Prod / Cat / Desc|Users-Can Add User|Users-Can Edit User Info.|Users-Can Delete User|Users-Activate / Deactivate Users|Roles & Priv.-Can Set Roles & Priviledges|Backup-Can Backup Data|Audit-Can Access Department Audit|Audit-Can Access All Audit|License-Can Activate|Users-Can Delete User|Project-Create Project|Project-Edit / Delete Project|','Designers of this software',1),(2,'Administrator','Statistics|Make Request|Chart Of Acct|PayRoll|Process Requests|Services|Purchases|Vehicle Policy|Purchase Order|Approvals|New Employee|Manage Emp.|Leave Mgmt|Organization|New Stock|Manage Stock|Vendors|Register New|Users|Roles & Priv.|Backup|Audit|License|Settings|Projects','can delete|can add|can edit|Can Process Requests|can delete|can add|can edit|Department|All|Department|All|can make order|can view list|can approval|can view list|can delete|can add|can edit|can delete|can add|can edit|Can Create New|Can Edit Leave|Can Delete Leave|Can Create Company Profile|Can Edit Company Profile|Can Delete Company Profile|can delete|can add|can edit|can delete|can add|can edit|can delete|can add|can edit|Can Add New Product|Can Add User|Can Edit User Info.|Can Delete User|Activate / Deactivate Users|Project-Can Add|Project-Can Edit|Project-Can Delete|','People who have high level clearance within the system',1);

/*Table structure for table `access_roles_priviledges_user` */

DROP TABLE IF EXISTS `access_roles_priviledges_user`;

CREATE TABLE `access_roles_priviledges_user` (
  `employee_id` varchar(50) NOT NULL,
  `roles` text NOT NULL,
  `priviledges` text NOT NULL,
  `group_id` int(11) NOT NULL,
  `status` tinyint(1) DEFAULT '1',
  UNIQUE KEY `employee_id_UNIQUE` (`employee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `access_roles_priviledges_user` */

insert  into `access_roles_priviledges_user`(`employee_id`,`roles`,`priviledges`,`group_id`,`status`) values ('KAD/SYS/1','','',1,1),('ML/TEMP/001','','',1,1);

/*Table structure for table `access_sys_users` */

DROP TABLE IF EXISTS `access_sys_users`;

CREATE TABLE `access_sys_users` (
  `sys_user_id` varchar(20) NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `passwd` varchar(150) NOT NULL,
  `secret_code` varchar(100) NOT NULL,
  `active` char(1) NOT NULL DEFAULT '0',
  `login_attempt` char(1) NOT NULL DEFAULT '5',
  PRIMARY KEY (`sys_user_id`),
  UNIQUE KEY `employee_id_UNIQUE` (`sys_user_id`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `access_sys_users` */

insert  into `access_sys_users`(`sys_user_id`,`username`,`passwd`,`secret_code`,`active`,`login_attempt`) values ('KAD/SYS/1','sysadmin','$2y$10$vsuWZl3/LYRlZ2UTmniEme095IuyDcSWq6LQIapEPl9I.xjQcOCn6','$2y$10$vsuWZl3/LYRlZ2UTmniEme095IuyDcSWq6LQIapEPl9I.xjQcOCn6','1','5');

/*Table structure for table `access_users` */

DROP TABLE IF EXISTS `access_users`;

CREATE TABLE `access_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `passwd` varchar(100) NOT NULL,
  `employee_id` varchar(20) NOT NULL,
  `f_login` tinyint(1) NOT NULL DEFAULT '0',
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `login_attempt` tinyint(1) NOT NULL DEFAULT '5',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `access_users` */

insert  into `access_users`(`id`,`username`,`passwd`,`employee_id`,`f_login`,`active`,`login_attempt`) values (1,'worla','$2y$10$GuOFXrr8Xdd5JFHD9vzm8.tUeafbhkUfvImwdDkswS8NJJOqzV3BC','ML/TEMP/001',0,1,5),(7,'mordreds','$2y$10$X03Ijlh3GclqMhGPWlCpDuq1dnzN.pVkHBrMAK4azxMjnwPANKYnq','KAD/TEMP/003',0,1,5),(10,'bismark','$2y$10$c31.ifpb9gSeoq5Kz5eOjui6dMny546HFp8jPZy58oOborWUy2deC','KAD/TEMP/006',0,0,5);

/*Table structure for table `companyinfo` */

DROP TABLE IF EXISTS `companyinfo`;

CREATE TABLE `companyinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `tel_1` varchar(20) NOT NULL,
  `tel_2` varchar(20) NOT NULL,
  `fax` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `companyinfo` */

/*Table structure for table `dashboard_tabs` */

DROP TABLE IF EXISTS `dashboard_tabs`;

CREATE TABLE `dashboard_tabs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL,
  `bg` varchar(50) NOT NULL,
  `priviledges` varchar(255) NOT NULL,
  `type` varchar(100) NOT NULL,
  `active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

/*Data for the table `dashboard_tabs` */

insert  into `dashboard_tabs`(`id`,`name`,`comment`,`icon`,`link`,`bg`,`priviledges`,`type`,`active`) values (1,'Projects','Create & Manage All Projects','fa fa-road','Project/New_Project','bg-grey','Create Project|Edit / Delete Project','General',1),(2,'Make Request','Request For Mat / Veh / Equip / Labour','fa fa-pencil','Project/Requests','bg-grey','','General',0),(3,'Approvals','Create, Edit, Assignments','fa fa-thumbs-up','Procurement/Approvals','bg-grey','can approval | can view list','General',0),(4,'Purchases','All Purchases Made','fa fa-money','Procurement/Purchases','bg-aqua','Department|All','Procurement',0),(5,'Vehicle Policy','DVLA Policies & Maintenance','fa fa-car','Procurement/Vehicle_Policy','bg-aqua','Department|All','Procurement',0),(6,'Purchase Order','Productivity, Responsibilities','fa fa-pencil-square-o','Stores/Purchase_Order','bg-yellow','can make order|can view list','Stores',0),(8,'Stock-Intake','New Items For The Store','fa fa-list-ul','Stores/New_Stock','bg-yellow','Can Add Stock|Can Edit Stock','Stores',0),(9,'Manage Stock','Productivity, Responsibilities','fa fa-database','Stores/Manage_Stock','bg-yellow','can delete|can add|can edit','Stores',0),(10,'Vendors','Master Setup','fa fa-truck','Stores/Vendors','bg-yellow','can delete|can add|can edit','Stores',0),(12,'Chart Of Acct','Chart Of Account','fa fa-calculator','Accounts/Charts_Of_Account','bg-aqua','can delete|can add|can edit','Accounts',1),(14,'New Employee','Register New Employee','fa fa-user','Human_Resource/New_Employee','bg-green','can delete|can add|can edit','Human-Resource',1),(15,'Manage Emp.','Edit / Delete Employee Info','fa fa-users','Human_Resource/Manage_Employee','bg-green','can delete|can add|can edit','Human-Resource',1),(17,'Leave Mgmt','Create & Manage Employee\'s Leave','fa fa-pencil-square-o','Human_Resource/Leave_Management','bg-green','Can Create New|Can Edit Leave|Can Delete Leave','Human-Resource',1),(18,'Organization','Organizational Structure','fa fa-institution','Human_Resource/Organization','bg-green','Can Create Company Profile|Can Edit Company Profile|Can Delete Company Profile','Human-Resource',1),(20,'Users','Add New / Manage User(s)','fa fa-users','Administration/Users','bg-red','Can Add User|Can Edit User Info.|Can Delete User|Activate / Deactivate Users','Administration',1),(21,'Roles & Priv.','Set Roles & Priv. For Users / Groups','fa fa-unlock-alt','Administration/Roles_Priviledges','bg-red','Can Set Roles & Priviledges','Administration',1),(22,'Backup','Backup All Data ','fa fa-database','Administration/Backup','bg-red','Can Backup Data','Administration',1),(23,'Audit','Main Audit System','fa fa-database','Administration/Audit','bg-red','Can Access Department Audit|Can Access All Audit','Administration',1),(24,'PayRoll','Payslip,Pay Grade','fa fa-money','Accounts/PayRoll','bg-aqua','','Accounts',1),(25,'Register New','New Product / Category / Description','fa fa-plus','Stores/Register_Product','bg-yellow','Can Add Prod / Cat / Desc|Can Edit Prod / Cat / Desc|Can Delete Prod / Cat / Desc','Stores',1),(26,'License','Enter License Key To Activate System','fa fa-line-chart','Administration/License','bg-red','Can Activate','Administration',1),(27,'Settings','For Administrators Only','fa fa-lock-alt','Administration/Settings','bg-red','Can Activate / Deactivate System','Administration',1),(29,'System','For Developers Only','fa fa-lock-alt','System/Settings','bg-red','','Reserved',1),(30,'Model Install','For Developers Only','fa fa-lock-alt','System/Settings','bg-red','','Reserved',0),(31,'Sales Order','Make Sales Order','fa fa-money','Stores/SalesOrder','bg-yellow','Can Add Order|Edit / Delete An Order','Stores',1),(32,'Services','All Services Made','fa fa-tasks','Procurement/Services','bg-aqua','can delete|can add|can edit','Procurement',0),(33,'Process Requests','All Incoming /  Unprocessed Requests','fa fa-exchange','Procurement/Requests','bg-aqua','Can Process Requests','Procurement',1),(34,'Statistics','Informational Statistics','fa fa-bar-chart','Dashboard/Statistics','bg-grey','','General',1),(35,'Appraisal','Performance Accessment','fa fa-pie-chart','Human_Resource/appraisal','	\nbg-green','Can Add Order|Edit / Delete An Order','Human-Resource',0);

/*Table structure for table `dispute` */

DROP TABLE IF EXISTS `dispute`;

CREATE TABLE `dispute` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `card_no` varchar(20) NOT NULL,
  `cardholder_1` varchar(255) NOT NULL,
  `cardholder_2` varchar(255) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `mail_addr` varchar(100) NOT NULL,
  `date_requested` date NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `dispute` */

/*Table structure for table `general_last_ids` */

DROP TABLE IF EXISTS `general_last_ids`;

CREATE TABLE `general_last_ids` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `employee_id` tinyint(5) DEFAULT NULL,
  `group_id` tinyint(2) DEFAULT NULL,
  `sup_id` tinyint(2) DEFAULT NULL,
  `prod_id` tinyint(5) DEFAULT NULL,
  `cat_id` tinyint(5) DEFAULT NULL,
  `desc_id` tinyint(5) DEFAULT NULL,
  `proj_id` tinyint(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `general_last_ids` */

insert  into `general_last_ids`(`id`,`employee_id`,`group_id`,`sup_id`,`prod_id`,`cat_id`,`desc_id`,`proj_id`) values (1,6,3,0,0,NULL,NULL,NULL);

/*Table structure for table `group_roles_priviledges` */

DROP TABLE IF EXISTS `group_roles_priviledges`;

CREATE TABLE `group_roles_priviledges` (
  `group_id` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `roles` text NOT NULL,
  `priviledges` text NOT NULL,
  PRIMARY KEY (`group_id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `group_roles_priviledges` */

/*Table structure for table `hr_appraisal_daybook` */

DROP TABLE IF EXISTS `hr_appraisal_daybook`;

CREATE TABLE `hr_appraisal_daybook` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(50) NOT NULL,
  `report` text NOT NULL,
  `report_date` varchar(255) NOT NULL,
  `superior_name` varchar(255) NOT NULL,
  `superior_comment` varchar(500) NOT NULL,
  `initiative` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=latin1;

/*Data for the table `hr_appraisal_daybook` */

insert  into `hr_appraisal_daybook`(`id`,`employee_id`,`report`,`report_date`,`superior_name`,`superior_comment`,`initiative`) values (83,'CPH/MF/007','My name is Evans Owusu and this is my first daybook report without initiative','Friday February 19, 2016. 9:32:11 am','Kwateng Derrick~~~','I am your new supervisor and this is my first comment&nbsp;~~~',''),(84,'CPH/MF/007','My name is Evans Owusu and this is my first daybook report&nbsp;','Saturday February 20, 2016. 9:36:44 am','','','This is my first Initiave into this ministry');

/*Table structure for table `hr_appraisal_departments` */

DROP TABLE IF EXISTS `hr_appraisal_departments`;

CREATE TABLE `hr_appraisal_departments` (
  `id` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `hr_appraisal_departments` */

insert  into `hr_appraisal_departments`(`id`,`name`) values ('PAMS/DEPT/001','Executive'),('PAMS/DEPT/002','Information Technology'),('PAMS/DEPT/003','Human Resource'),('PAMS/DEPT/004','Accounts'),('PAMS/DEPT/005','Procurement'),('PAMS/DEPT/006','Operations'),('PAMS/DEPT/007','Mobilebanker'),('PAMS/DEPT/008','Credit');

/*Table structure for table `hr_appraisal_position` */

DROP TABLE IF EXISTS `hr_appraisal_position`;

CREATE TABLE `hr_appraisal_position` (
  `id` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `roles` varchar(255) NOT NULL,
  `priviledges` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `hr_appraisal_position` */

insert  into `hr_appraisal_position`(`id`,`name`,`roles`,`priviledges`) values ('PAMS/POS/001','System Administrator','Daybook|Performance|Grade|Comment|Daybook Reports|Total Performance|Questionnaires|Reports|Feedback|Users|System Settings','Comment-All|Daybook Reports-All|Reports-All'),('PAMS/POS/002','Administrator','Daybook|Comment|Daybook Reports|Reports|Users|System Settings','Comment-All|Daybook Reports-All|Reports-All'),('PAMS/POS/003','Managing Director (MD)','Performance|Grade|Comment|Total Performance|Reports','Comment-All|Reports-All'),('PAMS/POS/004','Supervisor','Daybook|Comment|Reports','Comment-Department|Reports-Department'),('PAMS/POS/005','Senior Staff','Daybook|Daybook Reports|Feedback',''),('PAMS/POS/006','Staff','Daybook|Daybook Reports|Feedback',''),('PAMS/POS/007','Field Officer','Daybook|Daybook Reports','Daybook Reports-Department'),('PAMS/POS/008','Manager','Daybook|Comment|Reports','Comment-All|Reports-All');

/*Table structure for table `hr_appraisal_questionnaires` */

DROP TABLE IF EXISTS `hr_appraisal_questionnaires`;

CREATE TABLE `hr_appraisal_questionnaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `grade_category` varchar(255) NOT NULL,
  `major_grade` varchar(255) NOT NULL,
  `grade_by` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `hr_appraisal_questionnaires` */

/*Table structure for table `hr_appraisal_session` */

DROP TABLE IF EXISTS `hr_appraisal_session`;

CREATE TABLE `hr_appraisal_session` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `session_date` varchar(50) NOT NULL,
  `employee_id` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `hr_appraisal_session` */

insert  into `hr_appraisal_session`(`id`,`session_date`,`employee_id`) values (10,'Friday February 19, 2016','CPH/MF/003'),(11,'Saturday February 20, 2016','CPH/MF/003');

/*Table structure for table `hr_companyinfo` */

DROP TABLE IF EXISTS `hr_companyinfo`;

CREATE TABLE `hr_companyinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `tel_1` varchar(20) NOT NULL,
  `tel_2` varchar(20) NOT NULL,
  `fax` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `hr_companyinfo` */

insert  into `hr_companyinfo`(`id`,`name`,`tel_1`,`tel_2`,`fax`,`email`,`address`) values (1,'Mawus Engineering Limited','(+233) 256-487-847','(+233) 256-982-479','(+233) 256-975-596','info@mawuseng.com','12 Lexemborg, Coca-Cola - Spintex');

/*Table structure for table `hr_countries` */

DROP TABLE IF EXISTS `hr_countries`;

CREATE TABLE `hr_countries` (
  `cou_code` char(2) NOT NULL DEFAULT '',
  `cou_name` varchar(80) NOT NULL DEFAULT '',
  PRIMARY KEY (`cou_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `hr_countries` */

insert  into `hr_countries`(`cou_code`,`cou_name`) values ('AD','Andorra'),('AE','United Arab Emirates'),('AF','Afghanistan'),('AG','Antigua and Barbuda'),('AI','Anguilla'),('AL','Albania'),('AM','Armenia'),('AN','Netherlands Antilles'),('AO','Angola'),('AQ','Antarctica'),('AR','Argentina'),('AS','American Samoa'),('AT','Austria'),('AU','Australia'),('AW','Aruba'),('AZ','Azerbaijan'),('BA','Bosnia and Herzegovina'),('BB','Barbados'),('BD','Bangladesh'),('BE','Belgium'),('BF','Burkina Faso'),('BG','Bulgaria'),('BH','Bahrain'),('BI','Burundi'),('BJ','Benin'),('BM','Bermuda'),('BN','Brunei Darussalam'),('BO','Bolivia'),('BR','Brazil'),('BS','Bahamas'),('BT','Bhutan'),('BV','Bouvet Island'),('BW','Botswana'),('BY','Belarus'),('BZ','Belize'),('CA','Canada'),('CC','Cocos (Keeling) Islands'),('CD','Congo, the Democratic Republic of the'),('CF','Central African Republic'),('CG','Congo'),('CH','Switzerland'),('CI','Cote D\'Ivoire'),('CK','Cook Islands'),('CL','Chile'),('CM','Cameroon'),('CN','China'),('CO','Colombia'),('CR','Costa Rica'),('CS','Serbia and Montenegro'),('CU','Cuba'),('CV','Cape Verde'),('CX','Christmas Island'),('CY','Cyprus'),('CZ','Czech Republic'),('DE','Germany'),('DJ','Djibouti'),('DK','Denmark'),('DM','Dominica'),('DO','Dominican Republic'),('DZ','Algeria'),('EC','Ecuador'),('EE','Estonia'),('EG','Egypt'),('EH','Western Sahara'),('ER','Eritrea'),('ES','Spain'),('ET','Ethiopia'),('FI','Finland'),('FJ','Fiji'),('FK','Falkland Islands (Malvinas)'),('FM','Micronesia, Federated States of'),('FO','Faroe Islands'),('FR','France'),('GA','Gabon'),('GB','United Kingdom'),('GD','Grenada'),('GE','Georgia'),('GF','French Guiana'),('GH','Ghana'),('GI','Gibraltar'),('GL','Greenland'),('GM','Gambia'),('GN','Guinea'),('GP','Guadeloupe'),('GQ','Equatorial Guinea'),('GR','Greece'),('GS','South Georgia and the South Sandwich Islands'),('GT','Guatemala'),('GU','Guam'),('GW','Guinea-Bissau'),('GY','Guyana'),('HK','Hong Kong'),('HM','Heard Island and Mcdonald Islands'),('HN','Honduras'),('HR','Croatia'),('HT','Haiti'),('HU','Hungary'),('ID','Indonesia'),('IE','Ireland'),('IL','Israel'),('IN','India'),('IO','British Indian Ocean Territory'),('IQ','Iraq'),('IR','Iran, Islamic Republic of'),('IS','Iceland'),('IT','Italy'),('JM','Jamaica'),('JO','Jordan'),('JP','Japan'),('KE','Kenya'),('KG','Kyrgyzstan'),('KH','Cambodia'),('KI','Kiribati'),('KM','Comoros'),('KN','Saint Kitts and Nevis'),('KP','Korea, Democratic People\'s Republic of'),('KR','Korea, Republic of'),('KW','Kuwait'),('KY','Cayman Islands'),('KZ','Kazakhstan'),('LA','Lao People\'s Democratic Republic'),('LB','Lebanon'),('LC','Saint Lucia'),('LI','Liechtenstein'),('LK','Sri Lanka'),('LR','Liberia'),('LS','Lesotho'),('LT','Lithuania'),('LU','Luxembourg'),('LV','Latvia'),('LY','Libyan Arab Jamahiriya'),('MA','Morocco'),('MC','Monaco'),('MD','Moldova, Republic of'),('MG','Madagascar'),('MH','Marshall Islands'),('MK','Macedonia, the Former Yugoslav Republic of'),('ML','Mali'),('MM','Myanmar'),('MN','Mongolia'),('MO','Macao'),('MP','Northern Mariana Islands'),('MQ','Martinique'),('MR','Mauritania'),('MS','Montserrat'),('MT','Malta'),('MU','Mauritius'),('MV','Maldives'),('MW','Malawi'),('MX','Mexico'),('MY','Malaysia'),('MZ','Mozambique'),('NA','Namibia'),('NC','New Caledonia'),('NE','Niger'),('NF','Norfolk Island'),('NG','Nigeria'),('NI','Nicaragua'),('NL','Netherlands'),('NO','Norway'),('NP','Nepal'),('NR','Nauru'),('NU','Niue'),('NZ','New Zealand'),('OM','Oman'),('PA','Panama'),('PE','Peru'),('PF','French Polynesia'),('PG','Papua New Guinea'),('PH','Philippines'),('PK','Pakistan'),('PL','Poland'),('PM','Saint Pierre and Miquelon'),('PN','Pitcairn'),('PR','Puerto Rico'),('PS','Palestinian Territory, Occupied'),('PT','Portugal'),('PW','Palau'),('PY','Paraguay'),('QA','Qatar'),('RE','Reunion'),('RO','Romania'),('RU','Russian Federation'),('RW','Rwanda'),('SA','Saudi Arabia'),('SB','Solomon Islands'),('SC','Seychelles'),('SD','Sudan'),('SE','Sweden'),('SG','Singapore'),('SH','Saint Helena'),('SI','Slovenia'),('SJ','Svalbard and Jan Mayen'),('SK','Slovakia'),('SL','Sierra Leone'),('SM','San Marino'),('SN','Senegal'),('SO','Somalia'),('SR','Suriname'),('ST','Sao Tome and Principe'),('SV','El Salvador'),('SY','Syrian Arab Republic'),('SZ','Swaziland'),('TC','Turks and Caicos Islands'),('TD','Chad'),('TF','French Southern Territories'),('TG','Togo'),('TH','Thailand'),('TJ','Tajikistan'),('TK','Tokelau'),('TL','Timor-Leste'),('TM','Turkmenistan'),('TN','Tunisia'),('TO','Tonga'),('TR','Turkey'),('TT','Trinidad and Tobago'),('TV','Tuvalu'),('TW','Taiwan'),('TZ','Tanzania, United Republic of'),('UA','Ukraine'),('UG','Uganda'),('UM','United States Minor Outlying Islands'),('US','United States'),('UY','Uruguay'),('UZ','Uzbekistan'),('VA','Holy See (Vatican City State)'),('VC','Saint Vincent and the Grenadines'),('VE','Venezuela'),('VG','Virgin Islands, British'),('VI','Virgin Islands, U.s.'),('VN','Viet Nam'),('VU','Vanuatu'),('WF','Wallis and Futuna'),('WS','Samoa'),('YE','Yemen'),('YT','Mayotte'),('ZA','South Africa'),('ZM','Zambia'),('ZW','Zimbabwe');

/*Table structure for table `hr_departments` */

DROP TABLE IF EXISTS `hr_departments`;

CREATE TABLE `hr_departments` (
  `dept_id` tinyint(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`dept_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `hr_departments` */

insert  into `hr_departments`(`dept_id`,`name`) values (1,'Procurement'),(2,'Human Resource'),(3,'Accounts'),(4,'Stores'),(5,'Site'),(6,'Information Technology'),(7,'Cheetah Corp Systems');

/*Table structure for table `hr_emp_emergency_info` */

DROP TABLE IF EXISTS `hr_emp_emergency_info`;

CREATE TABLE `hr_emp_emergency_info` (
  `employee_id` varchar(20) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `relationship` varchar(50) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `alt_tel` varchar(15) DEFAULT NULL,
  `home_addr` varchar(50) NOT NULL,
  `postal_addr` varchar(50) NOT NULL,
  UNIQUE KEY `mobile_UNIQUE` (`tel`),
  UNIQUE KEY `employee_id_UNIQUE` (`employee_id`),
  KEY `employee_id_idx` (`employee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `hr_emp_emergency_info` */

/*Table structure for table `hr_emp_other_info` */

DROP TABLE IF EXISTS `hr_emp_other_info`;

CREATE TABLE `hr_emp_other_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(20) NOT NULL,
  `social_security` varchar(20) DEFAULT NULL,
  `nat_id_type` varchar(20) NOT NULL,
  `nat_id_num` varchar(20) NOT NULL,
  `salary` tinyint(5) DEFAULT NULL,
  `bank_name` varchar(50) DEFAULT NULL,
  `acc_num` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `hr_emp_other_info` */

/*Table structure for table `hr_emp_pers_info` */

DROP TABLE IF EXISTS `hr_emp_pers_info`;

CREATE TABLE `hr_emp_pers_info` (
  `employee_id` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `gender` char(1) NOT NULL,
  `marital_status` varchar(10) NOT NULL,
  `country_id` char(2) NOT NULL,
  `home_addr` varchar(50) DEFAULT NULL,
  `postal_addr` varchar(50) DEFAULT NULL,
  `mobile` varchar(20) NOT NULL,
  `alt_mobile` varchar(20) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`employee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `hr_emp_pers_info` */

insert  into `hr_emp_pers_info`(`employee_id`,`firstname`,`lastname`,`gender`,`marital_status`,`country_id`,`home_addr`,`postal_addr`,`mobile`,`alt_mobile`,`email`) values ('KAD/SYS/1','Osborne ','Worla','M','','GH','','','0541786220','+233261879725','admin@cheetahcorp.com'),('ML/TEMP/001','Kelvin','Mitnick','M','Single','GH','Sonitra-Amasaman','Box An 10227,  Accra-North.','0541786220','+233261879725','admin@mawus.com');

/*Table structure for table `hr_emp_work_info` */

DROP TABLE IF EXISTS `hr_emp_work_info`;

CREATE TABLE `hr_emp_work_info` (
  `employee_id` varchar(20) NOT NULL,
  `job_title` varchar(50) DEFAULT NULL,
  `position_id` tinyint(2) DEFAULT NULL,
  `dept_id` tinyint(2) DEFAULT NULL,
  `employmt_type` varchar(20) DEFAULT NULL,
  `employmt_duration` varchar(50) DEFAULT NULL,
  `work_email` varchar(50) DEFAULT NULL,
  `pic` blob,
  `cv` blob,
  `date_employed` datetime DEFAULT NULL,
  UNIQUE KEY `employee_id_UNIQUE` (`employee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `hr_emp_work_info` */

insert  into `hr_emp_work_info`(`employee_id`,`job_title`,`position_id`,`dept_id`,`employmt_type`,`employmt_duration`,`work_email`,`pic`,`cv`,`date_employed`) values ('KAD/TEMP/001','System Developer',NULL,0,'Contract',NULL,'admin@mawusgh.com','','',NULL);

/*Table structure for table `hr_position` */

DROP TABLE IF EXISTS `hr_position`;

CREATE TABLE `hr_position` (
  `position_id` tinyint(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`position_id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `hr_position` */

insert  into `hr_position`(`position_id`,`name`,`description`) values (1,'System Administrator',NULL),(2,'Administrator',NULL),(3,'Managing Director (MD)',NULL),(4,'Supervisor',NULL),(5,'Senior Staff',NULL),(6,'Staff',NULL),(7,'Field Officer',NULL),(8,'Manager',NULL);

/*Table structure for table `product_audit` */

DROP TABLE IF EXISTS `product_audit`;

CREATE TABLE `product_audit` (
  `invoice_no` varchar(50) NOT NULL,
  `total_cost` int(11) NOT NULL,
  `sup_id` varchar(20) NOT NULL,
  `vendor` varchar(45) NOT NULL,
  `date_recv` varchar(50) NOT NULL,
  `comb_cat_id` varchar(600) NOT NULL,
  `comb_prod_id` varchar(600) NOT NULL,
  `comb_desc_id` varchar(600) NOT NULL,
  `comb_unit_price` varchar(600) NOT NULL,
  `comb_expiry` varchar(600) NOT NULL,
  `employee_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `product_audit` */

/*Table structure for table `product_category` */

DROP TABLE IF EXISTS `product_category`;

CREATE TABLE `product_category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(50) NOT NULL,
  PRIMARY KEY (`cat_id`),
  UNIQUE KEY `cat_name_UNIQUE` (`cat_name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `product_category` */

insert  into `product_category`(`cat_id`,`cat_name`) values (1,'Cosmetics'),(3,'Groceries'),(4,'Pastries'),(2,'Provisions');

/*Table structure for table `product_codes` */

DROP TABLE IF EXISTS `product_codes`;

CREATE TABLE `product_codes` (
  `prod_id` int(11) NOT NULL AUTO_INCREMENT,
  `prod_name` varchar(255) NOT NULL,
  `product_id` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`prod_id`),
  UNIQUE KEY `prod_id_UNIQUE` (`prod_id`),
  UNIQUE KEY `product_id_UNIQUE` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `product_codes` */

insert  into `product_codes`(`prod_id`,`prod_name`,`product_id`) values (1,'Nivea','PROD#001'),(2,'Nivea','PROD#002'),(3,'Nivea','PROD#003'),(4,'Blue Band','PROD#004'),(5,'Tummy','PROD#005'),(6,'Gino','PROD#006'),(7,'B Foster','PROD#007');

/*Table structure for table `product_desc` */

DROP TABLE IF EXISTS `product_desc`;

CREATE TABLE `product_desc` (
  `desc_id` int(11) NOT NULL AUTO_INCREMENT,
  `desc` varchar(50) NOT NULL,
  PRIMARY KEY (`desc_id`),
  UNIQUE KEY `desc_UNIQUE` (`desc`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `product_desc` */

insert  into `product_desc`(`desc_id`,`desc`) values (4,'Biscuit'),(9,'Bread'),(6,'Deodorant'),(7,'Margarine'),(1,'Milk'),(3,'Perfume'),(2,'Pomade'),(5,'Soap'),(8,'Tin Tomato');

/*Table structure for table `product_details` */

DROP TABLE IF EXISTS `product_details`;

CREATE TABLE `product_details` (
  `prod_id` varchar(20) NOT NULL,
  `cat_id` varchar(20) NOT NULL,
  `desc_id` varchar(20) NOT NULL,
  `location` text NOT NULL,
  `unit_qty` varchar(10) NOT NULL,
  `unit_price` int(11) NOT NULL,
  UNIQUE KEY `product_id_UNIQUE` (`prod_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `product_details` */

insert  into `product_details`(`prod_id`,`cat_id`,`desc_id`,`location`,`unit_qty`,`unit_price`) values ('1','1','3','Shelf A','',0),('2','1','5','Shelf A','',0),('3','1','6','Shelf C','',0),('4','2','7','Shelf A','',0),('5','2','7','Shelf C','',0),('6','3','8','Shelf Q','',0),('7','4','9','Shelf B','',0);

/*Table structure for table `product_live` */

DROP TABLE IF EXISTS `product_live`;

CREATE TABLE `product_live` (
  `prod_id` varchar(20) NOT NULL,
  `unit_qty` tinyint(1) NOT NULL,
  `unit_price` float NOT NULL DEFAULT '0',
  `cur_qty` int(11) NOT NULL DEFAULT '0',
  `expiry` date NOT NULL DEFAULT '0000-00-00',
  UNIQUE KEY `prod_id_UNIQUE` (`prod_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `product_live` */

insert  into `product_live`(`prod_id`,`unit_qty`,`unit_price`,`cur_qty`,`expiry`) values ('2',1,0,10,'2016-12-12'),('3',1,0,25,'2016-11-11'),('4',1,20,0,'2017-05-13'),('5',1,0,0,'0000-00-00'),('6',1,2,200,'2017-06-07'),('7',1,0,10,'2017-03-01'),('KAD/PROD/008',1,0,150,'2017-02-01');

/*Table structure for table `product_suppliers` */

DROP TABLE IF EXISTS `product_suppliers`;

CREATE TABLE `product_suppliers` (
  `sup_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `tel1` varchar(20) NOT NULL,
  `tel2` varchar(20) DEFAULT NULL,
  `addr` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `loc` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`sup_id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `product_suppliers` */

insert  into `product_suppliers`(`sup_id`,`name`,`tel1`,`tel2`,`addr`,`email`,`loc`) values (1,'FC Beauty','(+233) 389-048-937','(+233) 356-788-900','Box TM 27, Tema.','info@fcbeauty.com','Osu Re.'),(2,'TT Brothers','(+233) 456-459-080','(+233) 457-657-685','Box TM 897, Tema.','support@ttbrothers.com','Comm.11, Tema'),(3,'Unilever Ghana','(+233) 546-778-842','(+233) 203-858-530','Box TM 23, Tema.','info@unilevergh.com','Comm.8 Tema'),(4,'Kk Prepah Roofing Sheet','(+233) 456-567-689','(+233) 456-568-757','Box Pk 16, Pokuase.','support@kkprepah.com','Medie - Kotoku'),(5,'Nana K Gyasi Limited','(+233) 234-569-582','','Box Am 45, Amasaman','support@nanak.com','Pokuase'),(6,'WissPri Technologies Limited','(+233) 247-173-741','(+233) 267-856-453','Box K 75, Kanda Accra.','info@wisspri.com','Asylum Down ');

/*Table structure for table `product_suppliers_vendors` */

DROP TABLE IF EXISTS `product_suppliers_vendors`;

CREATE TABLE `product_suppliers_vendors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `tel1` varchar(20) NOT NULL,
  `tel2` varchar(20) DEFAULT NULL,
  `sup_id` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `product_suppliers_vendors` */

insert  into `product_suppliers_vendors`(`id`,`name`,`tel1`,`tel2`,`sup_id`) values (1,'Portia Akweley','(+233) 389-048-937','(+233) 356-788-900','1'),(2,'Johnson Kennedy','(+233) 456-459-080','(+233) 457-657-685','2'),(3,'Nana K','(+233) 546-778-842','(+233) 203-858-530','3'),(4,'Asaawa Kojo','(+233) 456-567-689','(+233) 456-568-757','4'),(5,'Cynthia Smith','(+233) 234-569-582','','5'),(6,'Gagaye 1','(+233) 247-173-741','(+233) 267-856-453','6');

/*Table structure for table `product_transact` */

DROP TABLE IF EXISTS `product_transact`;

CREATE TABLE `product_transact` (
  `prod_id` varchar(20) NOT NULL,
  `qty_withdrawn` int(11) NOT NULL,
  `date_withdrawn` datetime NOT NULL,
  `emp_id` varchar(20) NOT NULL,
  `site_id` varchar(20) NOT NULL,
  `purpose` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `product_transact` */

/*Table structure for table `project_info` */

DROP TABLE IF EXISTS `project_info`;

CREATE TABLE `project_info` (
  `proj_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `codename` text NOT NULL,
  `duration` varchar(50) NOT NULL,
  `budget` varchar(15) NOT NULL,
  `region` varchar(20) NOT NULL,
  `location` varchar(50) NOT NULL,
  `added_doc` text,
  `client` varchar(100) NOT NULL,
  `summary` text NOT NULL,
  `risk_report` text NOT NULL,
  PRIMARY KEY (`proj_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `project_info` */

insert  into `project_info`(`proj_id`,`name`,`codename`,`duration`,`budget`,`region`,`location`,`added_doc`,`client`,`summary`,`risk_report`) values (6,'Kwame Nkrumah Circle Interchange','K.N Circle Interchange','2016-12-29 To 2018-12-29','$50,000','Greater Accra Region','Nkrumah Circle','uploads/project/kwamenkrumahcircleinterchange.docx','Ministry Of Roads & Highways','Overpass linking Nima to Kaneshie and Caprice to Graphics Road',''),(7,'Kasoa - Winneba Interchange','Kasoa Interchange','2016-10-01 To 2017-11-30','$500,000','Central Region','Kasoa','','Ministry Of Roads & Highways','Linking Kasoa to Winneba and to its suburbs',''),(8,'Taifa Water works','TWk','2016-12-01 To 2017-01-30','4545','Greater Accra Region','Taifa','uploads/project/twk.docx','Ministor','to be completed ontime',''),(9,'Hacking Bank Of Ghana','Mitnickhack','2017-01-11 To 2017-02-01','5000','Ashanti Region','Acccra','','Bank Of Ghana','System Penetration',''),(10,'TPGL OSU CCTV','OSU CCTV','2017-01-19 To 2017-04-19','8000','Greater Accra Region','osu','uploads/project/osucctv.docx','TPGL','Installation of CCTV Camera at TPGL service station, ten cameras will be install.',''),(11,'The New 4-Storey Church Building','church building','2017-06-01 To 2017-12-31','GHC 90000','Greater Accra Region','Sonitra - Amasaman','uploads/projects/the new 4-storey church building/osucctv-copy(2).docx~~uploads/projects/the new 4-storey church building/osucctv-copy(3).docx~~uploads/projects/the new 4-storey church building/osucctv-copy(4).docx~~uploads/projects/the new 4-storey church building/osucctv-copy.docx~~','Presbyterian Chuch Of Ghana','Creating the new 4 storey for the church',''),(12,'I B I PROJECT','I B I PROJECT','2018-04-02 To 2018-05-02','$1000','Greater Accra Region','OSU RING WAY ESTATE','uploads/projects/i b i project/osucctv-copy(2).docx~~uploads/projects/i b i project/osucctv-copy(3).docx~~uploads/projects/i b i project/osucctv-copy.docx~~','OMEGAH CAPITAL','8 STOREY BUILDING','uploads/projects/i b i project/riskassessment.docx'),(13,'Amasaman - Nsawam Asphat Road Construction','Amasaman-Nsawam Road','2018-01-01 To 2018-03-30','$15000','Greater Accra Region','Amasaman','uploads/projects/amasaman - nsawam asphat road construction/contractbidding.docx~~uploads/projects/amasaman - nsawam asphat road construction/geologicalsurvey.docx~~','Ministry Of Roads & Highways','A 12km asphat road from the township of Amasaman to Nsawam','uploads/projects/amasaman - nsawam asphat road construction/riskassessment.docx'),(14,'4 Storey 16 Bedroom Teshie','Ta1','2017-04-10 To 2019-04-10','$30000','Greater Accra Region','Mats','uploads/projects/4 storey 16 bedroom teshie/honourcertificateoffreda.docx~~','Ministry Of Defence','4 Storey 16bedroom','uploads/projects/4 storey 16 bedroom teshie/riskassessment.docx');

/*Table structure for table `project_phases` */

DROP TABLE IF EXISTS `project_phases`;

CREATE TABLE `project_phases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ph_name` varchar(30) NOT NULL,
  `ph_artisans` text NOT NULL,
  `ph_duration` varchar(50) NOT NULL,
  `proj_id` int(11) NOT NULL,
  `status` char(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

/*Data for the table `project_phases` */

insert  into `project_phases`(`id`,`ph_name`,`ph_artisans`,`ph_duration`,`proj_id`,`status`) values (11,'Phase One','Procurement Department#Finance Department#Stores Department#','2016-12-29 To 2016-12-29',6,'1'),(12,'Phase Two','Stores Department#Mechanical Department#','2016-12-29 To 2016-12-29',6,'0'),(13,'Phase Three','Finance Department#Stores Department#Eelectrical Department#','2016-12-29 To 2016-12-29',6,'0'),(14,'Phase One','Procurement Department#','2016-12-29 To 2016-12-29',7,'0'),(15,'Phase Two','Stores Department#','2016-12-29 To 2016-12-29',7,'0'),(16,'Foundation','Finance Department#Eelectrical Department#','2016-12-01 To 2016-12-08',8,'0'),(17,'Finishing','Stores Department#Eelectrical Department#Mechanical Department#','2016-12-15 To 2016-12-22',8,'1'),(18,'Footprinting','Procurement Department#Finance Department#','2017-01-10 To 2017-01-10',9,'0'),(19,'REconnnaise','Finance Department#Eelectrical Department#','2017-01-10 To 2017-01-10',9,'0'),(20,'Phase One','Procurement Department#Finance Department#Stores Department#','2017-01-19 To 2017-01-20',10,'1'),(21,'phase Two','Finance Department#Stores Department#Eelectrical Department#','2017-01-21 To 2017-02-05',10,'0'),(22,'Phase One','Procurement Department#Finance Department#Stores Department#Eelectrical Department#Mechanical Department#','2016-06-01 To 2017-12-26',11,'1'),(23,'COMPLETE PHASE','Procurement Department#Finance Department#Eelectrical Department#Mechanical Department#','2018-04-09 To 2018-05-09',12,'1'),(24,'Ground Leveling & Preparation','Survey Department#Mechanical Department#','2018-01-08 To 2018-02-14',13,'1'),(25,'Asphat Coaltaring','Eelectrical Department#Mechanical Department#','2018-02-19 To 2018-03-29',13,'0'),(26,'Ground Preparation','Survey Department#Mechanical Department#','2017-04-10 To 2017-05-02',14,'0');

/*Table structure for table `project_reports` */

DROP TABLE IF EXISTS `project_reports`;

CREATE TABLE `project_reports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `report` text NOT NULL,
  `riskreport` text,
  `artisan` varchar(255) NOT NULL,
  `tk_id` int(11) NOT NULL,
  `phase_id` int(11) NOT NULL,
  `employee_id` varchar(20) DEFAULT NULL,
  `added_doc` text,
  `date_created` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `project_reports` */

insert  into `project_reports`(`id`,`report`,`riskreport`,`artisan`,`tk_id`,`phase_id`,`employee_id`,`added_doc`,`date_created`) values (1,'<p><b><i>This Is My First Report update</i></b></p>',NULL,'Finance Department',0,11,'ML/TEMP/001',NULL,'2017-01-17 01:07:49'),(2,'<p>This Is A Report For The <b>Finanace Department</b> Of The Project T<b>aifa Water Works</b>. And Updated Too</p>',NULL,'Finance Department',0,16,'ML/TEMP/001',NULL,'2017-01-17 15:15:19'),(3,'<p>theh &nbsp;w Wii Iw; I</p>',NULL,'Procurement Department',0,14,'ML/TEMP/001',NULL,'2017-01-18 10:59:39'),(4,'<p>job Done</p>',NULL,'Procurement Department',0,11,'ML/TEMP/001',NULL,'2017-01-19 23:40:40'),(10,'<p>this Is The Second Comment</p>','<p>this Is Risk&nbsp;</p>','Procurement Department',21,11,'ML/TEMP/001',NULL,'2017-03-01 18:12:40'),(11,'<p>this Is The Third Comment</p>','','Procurement Department',21,11,'ML/TEMP/001',NULL,'2017-03-02 00:05:09'),(12,'<p>This Report Is Under Survey</p>','<p>No Risk Identified</p>','Procurement Department',20,11,'ML/TEMP/001',NULL,'2017-03-02 02:57:37'),(13,'<p>kjlsnewlkfnr.kamse.fn</p>','<p>Petrol Tanker Closer To Welder</p>','Procurement Department',20,11,'ML/TEMP/001',NULL,'2017-03-15 12:01:05'),(14,'<p>Site Open To Public Hence Builders Should Take Notice</p>','<p>8ft Existing Manhole Needs To Be Covered Before Job Begins</p><p><br></p>','Procurement Department',29,23,'ML/TEMP/001',NULL,'2017-03-22 19:36:19');

/*Table structure for table `project_req_labour` */

DROP TABLE IF EXISTS `project_req_labour`;

CREATE TABLE `project_req_labour` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comb_name` text NOT NULL,
  `comb_persons` text NOT NULL,
  `comb_duration` text NOT NULL,
  `comb_per_charge` text,
  `comb_note` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Unique_id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `project_req_labour` */

insert  into `project_req_labour`(`id`,`comb_name`,`comb_persons`,`comb_duration`,`comb_per_charge`,`comb_note`) values (1,'Labourer~~','2~~','2017-03-15 To 2017-03-18~~','Null~~','Null~~'),(4,'df~~df~~','Null~~Null~~','2017-03-15 To 2017-03-15~~2017-03-15 To 2017-03-15~~','Null~~Null~~','Null~~Null~~'),(5,'Labourers~~','5~~','2017-03-15 To 2017-03-15~~','Null~~','Null~~'),(6,'Masons~~Labourers~~','10~~10~~','2017-03-15 To 2017-03-15~~2017-03-15 To 2017-03-15~~','Null~~Null~~','Null~~Null~~'),(7,'Labourers~~','10~~','2017-03-15 To 2017-03-15~~','Null~~','Null~~'),(8,'mASON~~','4~~','2017-03-22 To 2017-03-22~~','40~~','Null~~');

/*Table structure for table `project_req_machine` */

DROP TABLE IF EXISTS `project_req_machine`;

CREATE TABLE `project_req_machine` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comb_name` text NOT NULL,
  `comb_desc` text NOT NULL,
  `comb_purpose` text NOT NULL,
  `comb_duration` text,
  `comb_unit` text,
  `comb_req_type` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Unique_id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `project_req_machine` */

insert  into `project_req_machine`(`id`,`comb_name`,`comb_desc`,`comb_purpose`,`comb_duration`,`comb_unit`,`comb_req_type`) values (2,'Crane~~','CAT~~','To lift heavy motar~~','2017-03-15 To 2017-04-01~~','Null~~','Null~~'),(3,'wheel barrow~~','Any~~','Load Sand,Cement and motar~~','2017-03-15 To 2017-03-15~~','Null~~','Null~~'),(4,'Wheel Barrow~~','Null~~','Loading Sand, Stones and Motar~~','2017-03-15 To 2017-03-15~~','Null~~','Null~~'),(5,'Wheel Barrow~~','Null~~','Loading Sand, Stones and Motar~~','2017-03-15 To 2017-03-15~~','Null~~','Null~~'),(6,'bullduzor~~','CAT~~','Null~~','2017-03-22 To 2017-03-22~~','Null~~','Null~~');

/*Table structure for table `project_req_material` */

DROP TABLE IF EXISTS `project_req_material`;

CREATE TABLE `project_req_material` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comb_name` text NOT NULL,
  `comb_desc` text,
  `comb_qty` text NOT NULL,
  `comb_unit` text,
  `comb_req_type` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Unique_id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `project_req_material` */

insert  into `project_req_material`(`id`,`comb_name`,`comb_desc`,`comb_qty`,`comb_unit`,`comb_req_type`) values (2,'Cement~~','Dangote~~','40~~','Null~~','Request~~'),(5,'34~~','34~~','Null~~','3~~','Purchase~~'),(6,'Cement Bags~~','Ghacem~~','100~~','27~~','Purchase~~'),(7,'Cement~~','Dangote~~','100~~','Null~~','Request~~'),(8,'Cement~~','Dangote~~','100~~','Null~~','Request~~'),(9,'Cement~~','Dangote~~','200~~','27~~','Purchase~~');

/*Table structure for table `project_requests` */

DROP TABLE IF EXISTS `project_requests`;

CREATE TABLE `project_requests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `requested_by` varchar(20) NOT NULL COMMENT 'Employee Id',
  `task_id` int(11) NOT NULL,
  `tools_mat_id` varchar(20) DEFAULT NULL,
  `mach_equip_id` varchar(20) DEFAULT NULL,
  `labour_id` varchar(20) DEFAULT NULL,
  `save_code` varchar(20) DEFAULT NULL,
  `approval_stat` char(1) DEFAULT NULL COMMENT 'Approval Status',
  `approval_emp` varchar(20) DEFAULT NULL COMMENT 'Approval Employee',
  `dateOfrequest` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` char(1) NOT NULL DEFAULT '0' COMMENT 'Procurement Status',
  `processed_by` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `project_requests` */

insert  into `project_requests`(`id`,`requested_by`,`task_id`,`tools_mat_id`,`mach_equip_id`,`labour_id`,`save_code`,`approval_stat`,`approval_emp`,`dateOfrequest`,`status`,`processed_by`) values (1,'ML/TEMP/001',0,'5','Null','4',NULL,NULL,NULL,'2017-03-15 16:17:43','2',NULL),(2,'ML/TEMP/001',0,'6','3','5',NULL,NULL,NULL,'2017-03-15 17:09:14','0',NULL),(3,'ML/TEMP/001',0,'7','4','6','SVReqMTE~',NULL,NULL,'2017-03-15 17:50:51','0',NULL),(4,'ML/TEMP/001',12,'8','5','7',NULL,NULL,NULL,'2017-03-15 17:52:18','0',NULL),(5,'ML/TEMP/001',30,'9','6','8',NULL,NULL,NULL,'2017-03-22 19:53:24','0',NULL);

/*Table structure for table `project_tasks` */

DROP TABLE IF EXISTS `project_tasks`;

CREATE TABLE `project_tasks` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `tk_name` varchar(50) NOT NULL,
  `tk_duration` varchar(50) NOT NULL,
  `ph_artisan` varchar(50) NOT NULL,
  `phase_id` int(11) NOT NULL,
  `status` char(1) NOT NULL DEFAULT '0',
  `status_date` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

/*Data for the table `project_tasks` */

insert  into `project_tasks`(`id`,`tk_name`,`tk_duration`,`ph_artisan`,`phase_id`,`status`,`status_date`) values (1,'Sorting Between Invoices','2016-12-30 To 2016-12-30','Procurement Department',14,'1',NULL),(3,'Cash flow','2016-12-30 To 2016-12-30','Finance Department',16,'1',NULL),(5,'Cash-Out','2016-12-30 To 2016-12-30','Finance Department',16,'1',NULL),(6,'Fixing Magnetic Shield Transistors','2017-01-17 To 2017-01-17','Eelectrical Department',16,'0',NULL),(8,'Task N','2016-12-30 To 2016-12-30','Eelectrical Department',16,'1',NULL),(9,'Task N','2016-12-30 To 2016-12-30','Stores Department',17,'0',NULL),(10,'Task N','2016-12-30 To 2016-12-30','Stores Department',17,'0',NULL),(11,'Thief The Money Come','2017-03-20 To 2017-03-31','Finance Department',11,'1','2017-04-10 12:06:16'),(12,'Thiefing The Money From Bank Of Ghana','2016-12-30 To 2016-12-30','Finance Department',11,'1','2017-03-20 15:56:23'),(13,'Loot & Share Woyome Cash','2017-01-04 To 2017-02-14','Finance Department',16,'0',NULL),(14,'Fixing Floor Light','2017-01-07 To 2017-01-07','Eelectrical Department',17,'0',NULL),(15,'Killing People Fool','2017-01-07 To 2017-01-07','Mechanical Department',17,'1',NULL),(16,'Selling The Car','2017-01-18 To 2017-01-18','Procurement Department',18,'1',NULL),(17,'Yo','2017-01-18 To 2017-01-18','Procurement Department',14,'0',NULL),(19,'Yu','2017-01-18 To 2017-01-18','Procurement Department',18,'0',NULL),(20,'Survey','2017-01-19 To 2017-01-22','Procurement Department',11,'1','2017-03-29 21:29:45'),(21,'Leveling Of Site','2017-01-19 To 2017-01-19','Procurement Department',11,'1','2017-01-19 10:10:10'),(22,'Laying Of Pipes','2017-01-19 To 2017-01-19','Procurement Department',20,'1',NULL),(23,'Laying Of Cables','2017-01-20 To 2017-01-21','Procurement Department',20,'1',NULL),(24,'Beating Immigration At Post','2017-02-23 To 2017-02-23','Finance Department',11,'1','2017-03-29 21:28:50'),(25,'Stock Re-take','2017-03-11 To 2017-04-01','Stores Department',11,'0',NULL),(26,'Product Query','2017-03-11 To 2017-04-30','Stores Department',12,'0',NULL),(27,'Product Restock','2017-03-11 To 2017-05-11','Stores Department',11,'0',NULL),(28,'Stock Update','2017-03-13 To 2017-03-16','Stores Department',11,'0',NULL),(29,'SURVEY FOR SAFETY PROTECTION','2018-04-10 To 2018-04-12','Procurement Department',23,'1','2017-03-22 19:56:16'),(30,'Leveling Of Site','2017-03-22 To 2017-03-22','Procurement Department',23,'1','2017-03-22 19:55:26'),(31,'Sitting Of Building','2017-04-10 To 2017-04-15','Survey Department',26,'0',NULL);

/*Table structure for table `questionnaires` */

DROP TABLE IF EXISTS `questionnaires`;

CREATE TABLE `questionnaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `grade_category` varchar(255) NOT NULL,
  `major_grade` varchar(255) NOT NULL,
  `grade_by` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `questionnaires` */

/*Table structure for table `reserved_clients` */

DROP TABLE IF EXISTS `reserved_clients`;

CREATE TABLE `reserved_clients` (
  `client_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `addr` varchar(100) NOT NULL,
  `prim_tel` varchar(20) NOT NULL,
  `sec_tel` varchar(20) NOT NULL,
  `location` varchar(50) NOT NULL,
  `cou_code` char(2) NOT NULL DEFAULT 'GH',
  `dbname` varchar(20) NOT NULL,
  `state` char(1) NOT NULL,
  PRIMARY KEY (`client_id`),
  UNIQUE KEY `UNIQUE` (`name`,`prim_tel`,`sec_tel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `reserved_clients` */

/*Table structure for table `reserved_license_keys` */

DROP TABLE IF EXISTS `reserved_license_keys`;

CREATE TABLE `reserved_license_keys` (
  `license_id` int(20) NOT NULL AUTO_INCREMENT,
  `key` varchar(100) NOT NULL,
  `end_date` datetime NOT NULL,
  PRIMARY KEY (`license_id`,`key`,`end_date`),
  UNIQUE KEY `UNIQUE` (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `reserved_license_keys` */

/*Table structure for table `reserved_registered_keys` */

DROP TABLE IF EXISTS `reserved_registered_keys`;

CREATE TABLE `reserved_registered_keys` (
  `reg_key_id` int(20) NOT NULL AUTO_INCREMENT,
  `license_id` int(20) NOT NULL,
  `client_id` int(11) NOT NULL,
  `state` char(1) NOT NULL,
  PRIMARY KEY (`reg_key_id`),
  UNIQUE KEY `UNIQUE` (`license_id`,`client_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `reserved_registered_keys` */

/*Table structure for table `access_user_details` */

DROP TABLE IF EXISTS `access_user_details`;

/*!50001 DROP VIEW IF EXISTS `access_user_details` */;
/*!50001 DROP TABLE IF EXISTS `access_user_details` */;

/*!50001 CREATE TABLE  `access_user_details`(
 `id` int(11) ,
 `Employee_id` varchar(20) ,
 `Username` varchar(20) ,
 `Password` varchar(100) ,
 `Account_Status` tinyint(1) ,
 `User_Roles` text ,
 `User_Priviledges` text ,
 `Group_ID` int(11) ,
 `Group_Name` varchar(255) ,
 `Group_Roles` text ,
 `Group_Priviledges` text 
)*/;

/*Table structure for table `employee_personal_data` */

DROP TABLE IF EXISTS `employee_personal_data`;

/*!50001 DROP VIEW IF EXISTS `employee_personal_data` */;
/*!50001 DROP TABLE IF EXISTS `employee_personal_data` */;

/*!50001 CREATE TABLE  `employee_personal_data`(
 `EmployeeID` varchar(20) ,
 `FirstName` varchar(20) ,
 `LastName` varchar(20) ,
 `Gender` char(1) ,
 `MaritalStatus` varchar(10) ,
 `Country` varchar(80) ,
 `Residence` varchar(50) ,
 `PostalAddress` varchar(50) ,
 `PrimaryTel` varchar(20) ,
 `SecondaryTel` varchar(20) ,
 `Email` varchar(100) ,
 `NationalIDType` varchar(20) ,
 `NationalIDNum` varchar(20) ,
 `SocialSecurity` varchar(20) 
)*/;

/*Table structure for table `employee_work_data` */

DROP TABLE IF EXISTS `employee_work_data`;

/*!50001 DROP VIEW IF EXISTS `employee_work_data` */;
/*!50001 DROP TABLE IF EXISTS `employee_work_data` */;

/*!50001 CREATE TABLE  `employee_work_data`(
 `EmployeeID` varchar(20) ,
 `JobTitle` varchar(50) ,
 `JobPosition` varchar(50) ,
 `Department` varchar(255) ,
 `EmploymentType` varchar(20) ,
 `EmploymentDuration` varchar(50) ,
 `WorkEmail` varchar(50) ,
 `GuardianName` varchar(255) ,
 `Relationship` varchar(50) ,
 `Occupation` varchar(50) ,
 `PrimaryTel` varchar(15) ,
 `SecondaryTel` varchar(15) ,
 `Residence` varchar(50) ,
 `PostalAddress` varchar(50) 
)*/;

/*Table structure for table `prod_details` */

DROP TABLE IF EXISTS `prod_details`;

/*!50001 DROP VIEW IF EXISTS `prod_details` */;
/*!50001 DROP TABLE IF EXISTS `prod_details` */;

/*!50001 CREATE TABLE  `prod_details`(
 `CategoryID` int(11) ,
 `Category` varchar(50) ,
 `Product_ID` int(11) ,
 `Item_Name` varchar(255) ,
 `DescriptionID` int(11) ,
 `Description` varchar(50) ,
 `Location` text ,
 `Unit_Qty` tinyint(1) ,
 `Unit_Price` float ,
 `Current_Qty` int(11) ,
 `Expiry` date 
)*/;

/*Table structure for table `project_full_details` */

DROP TABLE IF EXISTS `project_full_details`;

/*!50001 DROP VIEW IF EXISTS `project_full_details` */;
/*!50001 DROP TABLE IF EXISTS `project_full_details` */;

/*!50001 CREATE TABLE  `project_full_details`(
 `ProjectId` int(11) ,
 `ProjectName` text ,
 `CodeName` text ,
 `Duration` varchar(50) ,
 `Budget` varchar(15) ,
 `Region` varchar(20) ,
 `Loc` varchar(50) ,
 `ProjDoc` text ,
 `Client` varchar(100) ,
 `Summary` text ,
 `PhaseId` int(11) ,
 `PhaseName` varchar(30) ,
 `PhaseTime` varchar(50) ,
 `Artisans` text ,
 `PhaseStatus` char(1) 
)*/;

/*View structure for view access_user_details */

/*!50001 DROP TABLE IF EXISTS `access_user_details` */;
/*!50001 DROP VIEW IF EXISTS `access_user_details` */;

/*!50001 CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `access_user_details` AS select `access_users`.`id` AS `id`,`access_users`.`employee_id` AS `Employee_id`,`access_users`.`username` AS `Username`,`access_users`.`passwd` AS `Password`,`access_users`.`active` AS `Account_Status`,`access_roles_priviledges_user`.`roles` AS `User_Roles`,`access_roles_priviledges_user`.`priviledges` AS `User_Priviledges`,`access_roles_priviledges_user`.`group_id` AS `Group_ID`,`access_roles_priviledges_group`.`group_name` AS `Group_Name`,`access_roles_priviledges_group`.`roles` AS `Group_Roles`,`access_roles_priviledges_group`.`priviledges` AS `Group_Priviledges` from ((`access_users` left join `access_roles_priviledges_user` on((`access_roles_priviledges_user`.`employee_id` = `access_users`.`employee_id`))) left join `access_roles_priviledges_group` on((`access_roles_priviledges_group`.`group_id` = `access_roles_priviledges_user`.`group_id`))) */;

/*View structure for view employee_personal_data */

/*!50001 DROP TABLE IF EXISTS `employee_personal_data` */;
/*!50001 DROP VIEW IF EXISTS `employee_personal_data` */;

/*!50001 CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `employee_personal_data` AS (select `hr_emp_pers_info`.`employee_id` AS `EmployeeID`,`hr_emp_pers_info`.`firstname` AS `FirstName`,`hr_emp_pers_info`.`lastname` AS `LastName`,`hr_emp_pers_info`.`gender` AS `Gender`,`hr_emp_pers_info`.`marital_status` AS `MaritalStatus`,`hr_countries`.`cou_name` AS `Country`,`hr_emp_pers_info`.`home_addr` AS `Residence`,`hr_emp_pers_info`.`postal_addr` AS `PostalAddress`,`hr_emp_pers_info`.`mobile` AS `PrimaryTel`,`hr_emp_pers_info`.`alt_mobile` AS `SecondaryTel`,`hr_emp_pers_info`.`email` AS `Email`,`hr_emp_other_info`.`nat_id_type` AS `NationalIDType`,`hr_emp_other_info`.`nat_id_num` AS `NationalIDNum`,`hr_emp_other_info`.`social_security` AS `SocialSecurity` from ((`hr_emp_pers_info` left join `hr_emp_other_info` on((`hr_emp_other_info`.`employee_id` = `hr_emp_pers_info`.`employee_id`))) left join `hr_countries` on((`hr_countries`.`cou_code` = convert(`hr_emp_pers_info`.`country_id` using utf8))))) */;

/*View structure for view employee_work_data */

/*!50001 DROP TABLE IF EXISTS `employee_work_data` */;
/*!50001 DROP VIEW IF EXISTS `employee_work_data` */;

/*!50001 CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `employee_work_data` AS (select `hr_emp_pers_info`.`employee_id` AS `EmployeeID`,`hr_emp_work_info`.`job_title` AS `JobTitle`,`hr_position`.`name` AS `JobPosition`,`hr_departments`.`name` AS `Department`,`hr_emp_work_info`.`employmt_type` AS `EmploymentType`,`hr_emp_work_info`.`employmt_duration` AS `EmploymentDuration`,`hr_emp_work_info`.`work_email` AS `WorkEmail`,`hr_emp_emergency_info`.`fullname` AS `GuardianName`,`hr_emp_emergency_info`.`relationship` AS `Relationship`,`hr_emp_emergency_info`.`occupation` AS `Occupation`,`hr_emp_emergency_info`.`tel` AS `PrimaryTel`,`hr_emp_emergency_info`.`alt_tel` AS `SecondaryTel`,`hr_emp_emergency_info`.`home_addr` AS `Residence`,`hr_emp_emergency_info`.`postal_addr` AS `PostalAddress` from ((((`hr_emp_pers_info` left join `hr_emp_work_info` on((`hr_emp_work_info`.`employee_id` = `hr_emp_pers_info`.`employee_id`))) left join `hr_position` on((`hr_position`.`position_id` = `hr_emp_work_info`.`position_id`))) left join `hr_departments` on((`hr_departments`.`dept_id` = `hr_emp_work_info`.`dept_id`))) left join `hr_emp_emergency_info` on((`hr_emp_emergency_info`.`employee_id` = `hr_emp_pers_info`.`employee_id`)))) */;

/*View structure for view prod_details */

/*!50001 DROP TABLE IF EXISTS `prod_details` */;
/*!50001 DROP VIEW IF EXISTS `prod_details` */;

/*!50001 CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `prod_details` AS select `product_category`.`cat_id` AS `CategoryID`,`product_category`.`cat_name` AS `Category`,`product_codes`.`prod_id` AS `Product_ID`,`product_codes`.`prod_name` AS `Item_Name`,`product_desc`.`desc_id` AS `DescriptionID`,`product_desc`.`desc` AS `Description`,`product_details`.`location` AS `Location`,`product_live`.`unit_qty` AS `Unit_Qty`,`product_live`.`unit_price` AS `Unit_Price`,`product_live`.`cur_qty` AS `Current_Qty`,`product_live`.`expiry` AS `Expiry` from ((((`product_codes` join `product_details` on((`product_codes`.`prod_id` = `product_details`.`prod_id`))) join `product_category` on((`product_details`.`cat_id` = `product_category`.`cat_id`))) join `product_desc` on((`product_details`.`desc_id` = `product_desc`.`desc_id`))) left join `product_live` on((`product_details`.`prod_id` = `product_live`.`prod_id`))) */;

/*View structure for view project_full_details */

/*!50001 DROP TABLE IF EXISTS `project_full_details` */;
/*!50001 DROP VIEW IF EXISTS `project_full_details` */;

/*!50001 CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `project_full_details` AS (select `project_info`.`proj_id` AS `ProjectId`,`project_info`.`name` AS `ProjectName`,`project_info`.`codename` AS `CodeName`,`project_info`.`duration` AS `Duration`,`project_info`.`budget` AS `Budget`,`project_info`.`region` AS `Region`,`project_info`.`location` AS `Loc`,`project_info`.`added_doc` AS `ProjDoc`,`project_info`.`client` AS `Client`,`project_info`.`summary` AS `Summary`,`project_phases`.`id` AS `PhaseId`,`project_phases`.`ph_name` AS `PhaseName`,`project_phases`.`ph_duration` AS `PhaseTime`,`project_phases`.`ph_artisans` AS `Artisans`,`project_phases`.`status` AS `PhaseStatus` from (`project_info` left join `project_phases` on((`project_phases`.`proj_id` = `project_info`.`proj_id`)))) */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
