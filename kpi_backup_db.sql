/*
SQLyog Enterprise v10.42 
MySQL - 5.5.25a-log : Database - kpi_backup_db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`kpi_backup_db` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `kpi_backup_db`;

/*Table structure for table `calendar` */

DROP TABLE IF EXISTS `calendar`;

CREATE TABLE `calendar` (
  `datefield` date DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `calendar2021` */

DROP TABLE IF EXISTS `calendar2021`;

CREATE TABLE `calendar2021` (
  `datefield` date DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `calendar2022` */

DROP TABLE IF EXISTS `calendar2022`;

CREATE TABLE `calendar2022` (
  `datefield` date DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `tabel_log` */

DROP TABLE IF EXISTS `tabel_log`;

CREATE TABLE `tabel_log` (
  `backup_name` varchar(20) DEFAULT NULL,
  `created_on` datetime NOT NULL,
  `success` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/* Procedure structure for procedure `fill_calendar5` */

/*!50003 DROP PROCEDURE IF EXISTS  `fill_calendar5` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`dashboard`@`%` PROCEDURE `fill_calendar5`(start_date DATE, end_date DATE, name1 VARCHAR(20))
BEGIN
	DECLARE crt_date DATE;
	DECLARE crtname VARCHAR(20);
	SET crt_date=start_date;
	SET crtname=name1;
	WHILE
		crt_date <= end_date
	DO
		INSERT INTO calendar2022 VALUES(crt_date, crtname);
	SET crt_date = ADDDATE(crt_date, INTERVAL 1 DAY);
	END WHILE;
	END */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
