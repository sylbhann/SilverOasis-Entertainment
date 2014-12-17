/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `comments` */

DROP TABLE IF EXISTS `comments`;

CREATE TABLE `comments` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `itemId` int(11) NOT NULL,
  `comment` text,
  `updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`),
  KEY `userId_idx` (`userId`),
  KEY `itemId_idx` (`itemId`),
  CONSTRAINT `itemId` FOREIGN KEY (`itemId`) REFERENCES `items` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `userId` FOREIGN KEY (`userId`) REFERENCES `users` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8;

/*Data for the table `comments` */

insert  into `comments`(`Id`,`userId`,`itemId`,`comment`,`updated`);

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `description` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `roles` */

insert  into `roles`(`Id`,`name`,`description`) 
values (1,'User','Honored Guest'),
        (2,'Editor','Web Editor'),
        (3, 'Subscriber', 'Email Subscriber'),
        (4, 'Oasian', 'A Fan of SilverOasis'),
        (5, 'Riftwalker', 'A Fan of the Riftwalker Series'),
        (6, 'Known', 'Database Does Recognize'),
        (7, 'Unknown', 'Database Does Not Recognize'),
        (8, 'Basic', 'Limited Controls'),
        (9, 'Banned', 'Removed from Database'),
        (10, 'General', 'Temporary Guest'),
        (11, 'Manager', 'Officer'),
        (12, 'Co-Manager', 'Co-Officer'),
        (13, 'GM', 'Game Moderator'),
        (14, 'Engineer', 'Works on the Database'),
        (15, 'Admin', 'Web Administrator'),
;
/*
define('ROLE_ID_EDITOR', 2);
define('ROLE_ID_SUBSCRIBER', 3);
define('ROLE_ID_OASIAN', 4);
define('ROLE_ID_RIFTWALKER', 5);
define('ROLE_ID_KNOWN', 6);
define('ROLE_ID_UNKNOWN', 7);
define('ROLE_ID_BASIC', 8);
define('ROLE_ID_BANNED', 9);
define('ROLE_ID_GENERAL', 10);
define('ROLE_ID_MANAGER', 11);
define('ROLE_ID_CO-MANAGER', 12);
define('ROLE_ID_GM', 13);
define('ROLE_ID_ENGINEER', 14);
*/

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `email` varchar(128) NOT NULL,
  `passwordhash` varchar(128) NOT NULL,
  `roleId` int(11) DEFAULT '0',
  PRIMARY KEY (`Id`),
  UNIQUE KEY `username_UNIQUE` (`email`),
  KEY `roleId_idx` (`roleId`),
  CONSTRAINT `roleId` FOREIGN KEY (`roleId`) REFERENCES `roles` (`Id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`Id`,`firstname`,`lastname`,`email`,`passwordhash`,`roleId`);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
