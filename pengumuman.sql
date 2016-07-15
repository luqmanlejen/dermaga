/*
SQLyog Professional v12.09 (64 bit)
MySQL - 10.1.10-MariaDB : Database - stat
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`stat` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `stat`;

/*Table structure for table `pengumuman` */

DROP TABLE IF EXISTS `pengumuman`;

CREATE TABLE `pengumuman` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tajuk` varchar(255) DEFAULT NULL,
  `pengumuman` text,
  `tarikh` date DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` varchar(20) DEFAULT NULL,
  `updated_by` varchar(20) DEFAULT NULL,
  `start_dt` varchar(20) DEFAULT NULL,
  `end_dt` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `pengumuman` */

insert  into `pengumuman`(`id`,`tajuk`,`pengumuman`,`tarikh`,`status`,`created_at`,`updated_at`,`created_by`,`updated_by`,`start_dt`,`end_dt`) values (6,'Test Pengumuman Publish','asdsa','2016-07-20','0',NULL,'2016-07-15 04:43:55',NULL,'1','07/14/2016   ','   07/14/2016'),(7,'Test Pengumuman Archive','dasds','2016-07-26','1','2016-07-14 16:04:44','2016-07-15 04:35:50','1','1','07/26/2016   ','   07/26/2016');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
