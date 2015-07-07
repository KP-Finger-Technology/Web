/*
SQLyog Community Edition- MySQL GUI v8.17 
MySQL - 5.6.12-log : Database - k1254269_fingertech
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`k1254269_fingertech` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `k1254269_fingertech`;

/*Table structure for table `blog` */

DROP TABLE IF EXISTS `blog`;

CREATE TABLE `blog` (
  `blogid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `content` longtext NOT NULL,
  `category` varchar(100) NOT NULL,
  `image_name` varchar(200) NOT NULL,
  `publish_on` date NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`blogid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `blog` */

insert  into `blog`(`blogid`,`title`,`content`,`category`,`image_name`,`publish_on`,`timestamp`) values (2,'The minimum broadband download speeds now begin at 25Mbps, up from 4Mbps','As part of its 2015 Broadband Progress Report, the Federal Communications Commission has voted to change the definition of broadband by raising the minimum download speeds needed from 4Mbps to 25Mbps, and the minimum upload speed from 1Mbps to 3Mbps, which effectively triples the number of US households without broadband access. Currently, 6.3 percent of US households donâ€™t have access to broadband under the previous 4Mpbs/1Mbps threshold, while another 13.1 percent don&acute;t have access to broadband under the new 25Mbps downstream threshold.\r\n\r\nFCC Commissioner Tom Wheeler was vehement in his support for the new broadband standard. \"When 80 percent of Americans can access 25-3, that&acute;s a standard. We have a problem that 20 percent can&acute;t. We have a responsibility to that 20 percent,\" Commissioner Wheeler said.\r\n\r\n\"We are never satisfied with the status quo. We want better. We continue to push the limit, and that is notable when it comes to technology,\" FCC Commissioner Mignon Clyburn said. \"As consumers adopt and demand more from their platforms and devices, the need for broadband will increase, requiring robust networks to be in place in order to keep up. What is crystal clear to me is that the broadband speeds of yesteryear are woefully inadequate today and beyond.\"\r\n\r\nFCC Commissioner Jessica Rosenworcel wants to increase the minimum broadband standards far past the new 25Mbps download threshold, up to 100Mbps. \"We invented the internet. We can do audacious things if we set big goals, and I think our new threshold, frankly, should be 100Mbps. I think anything short of that shortchanges our children, our future, and our new digital economy,\" Commissioner Rosenworcel said.\r\n\r\n\"I THINK OUR NEW THRESHOLD, FRANKLY, SHOULD BE 100MBPS.\"\r\n\r\nTaking his argument against changing the broadband standard into deep space, FCC Commissioner Michael O&acute;Rielly said \"the report notes that 4K TV requires 25Mbps, but 4K TV is still relatively new and is not expected to be widely adopted for years to come. While the statute directs us to look at advanced capability, this stretches the concept to an untenable extreme. Some people, for example, believe probably incorrectly that we are on a path to interplanetary teleportation. Should we include the estimated bandwidth for that as well?\"\r\n\r\nChanging the national broadband standards to 25Mbps down and 3Mbps up is a bold move for the FCC, which has faced opposition from cable providers which are staunchly against this measure, as it essentially removed DSL services from the broadband discussion. While cable and fiber optic services can easily meet the new standards, DSL â€” which is delivered over telephone lines â€” generally never reach the new download threshold.\r\n\r\nCURRENT DSL OFFERINGS WON&acute;T BE CONSIDERED BROADBAND UNDER NEW RULES\r\n\r\n\r\nCompanies like AT&T and Verizon, which employ DSL services to a notable number of their users â€” 4 million of AT&Tâ€™s 16 million broadband subscribers and 2.6 million of Verizonâ€™s 9.2 million subscribers have DSL. AT&Tâ€™s fastest DSL offerings only reach 6Mbps down, while Verizonâ€™s DSL speeds top out at 15Mbps, and that wonâ€™t be increasing, at least on Verizonâ€™s end. Speaking to Ars Technica, a Verizon spokesperson said \"we currently do not have any plans to enhance that.\" As you would expect, cable companies werenâ€™t too happy about the new rule.\r\n\r\nIn a letter sent to the FCC last week, the National Cable & Telecommunications Association (NCTA) made known its objections to any changes to current broadband standards, stating that examples used by supporters of raising the broadband standards \"dramatically exaggerate the amount of bandwidth needed by the typical broadband user.\" Netflix is one of those supporters pushing for a higher broadband standards, as faster broadband speeds are needed to stream its 4K content, and will increase its potential for more subscribers. But right now, Netflixâ€™s interests and the publicâ€™s interests are aligned â€” everyone wants faster broadband internet except for the people who have to provide the service.\r\n\r\nThe NCTA told the FCC that 25Mbps down isn&acute;t needed for 4K streaming â€” the number Netflix recommends for anyone streaming its Ultra HD content â€” and that users aren&acute;t even interested in higher quality content yet. \"Netflix, for instance, bases its call for a 25 Mbps download threshold on what it believes consumers need for streaming 4K and Ultra HD video content â€” despite the fact that only a tiny fraction of consumers use their broadband connections in this manner,\" the NCTA said. \"...The consensus among others in the industry that 25 Mbps is significantly more bandwidth than is needed for 4K streaming.\"\r\n\r\nWhile you may not need a minimum download speed of 25Mbps to stream 4K content, it wouldn&acute;t hurt, and standing pat with subpar US broadband capabilities just isn&acute;t a viable option at this point. With the US currently ranked 25th in the world in broadband speeds, the FCC&acute;s decision will force cable providers to step up speeds for everyone, something that probably would have happened with even a little competition in the broadband market.','general','mtf_CAkIj_672.jpg','2015-02-27','2015-02-01 02:19:35'),(3,'This is whatÂ´s happening inside your camera at 10,000 frames per second','The \"D\" in DSLR does not stand for dark magic. In fact, that snap of the shutter you hear when taking a picture is a wonderful symphony of mechanical engineering at work, and happens so fast that you canÂ´t really enjoy it all with the naked eye. Luckily, the Slow Mo Guys have painstakingly chronicled whatÂ´s happening with the mechanical shutter of a Canon 7D using a very fast (and expensive) Phantom Flex camera, recording various shutter speeds at a mind-boggling 10,000 frames per second.\r\n\r\nThe result shows what happens when you click that shutter button, including the viewfinder mirror lifting while the rolling shutter exposes a portion of the sensor. Slowed down you can see the obvious, though normally invisible differences in the various speeds. Slow Mo Guy Gavin Free also shows how the rolling shutter effect can end up creating bizarre and often unwanted effects in both stills and video, something that is thankfully not apparent in this video of melons being detonated, which was filmed using a different shutter technology.','camera','e53408f229b6dcff14035024d5b8db5c.jpg','2015-01-31','2015-01-31 19:53:03');

/*Table structure for table `blogcomment` */

DROP TABLE IF EXISTS `blogcomment`;

CREATE TABLE `blogcomment` (
  `bcommentid` int(11) NOT NULL AUTO_INCREMENT,
  `blogid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  `comment` longtext NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`bcommentid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `blogcomment` */

insert  into `blogcomment`(`bcommentid`,`blogid`,`name`,`email`,`website`,`comment`,`timestamp`) values (1,2,'Test','test@gmail.com','','   Good Article!','2015-02-02 18:12:40');

/*Table structure for table `comment` */

DROP TABLE IF EXISTS `comment`;

CREATE TABLE `comment` (
  `commentid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `content` varchar(2000) NOT NULL,
  PRIMARY KEY (`commentid`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `comment` */

insert  into `comment`(`commentid`,`name`,`email`,`content`) values (1,'asdasd','depz.sdc@gmail.com','x'),(2,'asdasd','depz.sdc@gmail.com','xxxx'),(10,'ernest','ernest@finger-technology.com','adsdad'),(11,'asdsad','ernest@finger-technology.com','asdadasd'),(12,'ernest','ernest@finger-technology.com','test dari web');

/*Table structure for table `logs` */

DROP TABLE IF EXISTS `logs`;

CREATE TABLE `logs` (
  `logid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(20) NOT NULL,
  `trans` varchar(20) NOT NULL,
  `tab` varchar(20) NOT NULL,
  `des` varchar(20) NOT NULL,
  `servicetime` varchar(50) NOT NULL,
  PRIMARY KEY (`logid`)
) ENGINE=InnoDB AUTO_INCREMENT=179 DEFAULT CHARSET=latin1;

/*Data for the table `logs` */

insert  into `logs`(`logid`,`userid`,`trans`,`tab`,`des`,`servicetime`) values (2,1,'EDIT','About','Data telah diubah','08-08-2014 01:22:09'),(3,1,'EDIT','About','Data telah diubah','08-08-2014 01:28:40'),(4,1,'EDIT','Product','Data telah diubah','16-08-2014 00:17:28'),(5,1,'EDIT','Product','Data telah diubah','19-08-2014 22:56:04'),(6,1,'EDIT','Mobile','Content data telah d','19-08-2014 23:38:04'),(7,1,'EDIT','Desktop','Content data telah d','19-08-2014 23:39:16'),(8,1,'EDIT','Web','Data telah diubah','19-08-2014 23:46:27'),(9,1,'EDIT','Web','Data telah diubah','19-08-2014 23:46:55'),(10,1,'EDIT','Web','Data telah diubah','19-08-2014 23:47:10'),(11,1,'NEW','Web','Data telah ditambahk','20-08-2014 00:19:57'),(12,1,'EDIT','Web','Data telah diubah','20-08-2014 00:27:02'),(13,1,'NEW','Desktop','Data telah ditambahk','20-08-2014 00:28:52'),(14,1,'DELETE','Web','Data telah dihapus','20-08-2014 00:30:55'),(15,1,'NEW','Web','Data telah ditambahk','20-08-2014 00:31:11'),(16,1,'NEW','Desktop','Data telah ditambahk','20-08-2014 00:31:36'),(17,1,'DELETE','Desktop','Data telah dihapus','20-08-2014 00:31:58'),(18,1,'NEW','Mobile','Data telah ditambah','20-08-2014 00:32:39'),(19,1,'EDIT','Mobile','Content data telah d','20-08-2014 00:33:00'),(20,1,'EDIT','Mobile','Content data telah d','20-08-2014 00:34:42'),(21,1,'EDIT','Mobile','Content data telah d','20-08-2014 00:35:45'),(22,2,'EDIT','Mobile','Content data telah d','22-08-2014 08:46:43'),(23,2,'EDIT','Product','Data telah diubah','22-08-2014 08:52:44'),(24,2,'EDIT','Mobile','Content data telah d','22-08-2014 08:54:18'),(25,1,'EDIT','Web','Data telah diubah','22-08-2014 13:02:46'),(26,1,'EDIT','Web','Data telah diubah','22-08-2014 13:03:49'),(27,1,'EDIT','Web','Data telah diubah','22-08-2014 13:04:28'),(28,1,'NEW','Web','Data telah ditambahk','22-08-2014 13:06:02'),(29,1,'DELETE','Web','Data telah dihapus','22-08-2014 13:06:10'),(30,1,'DELETE','Career','Data telah dihapus','22-08-2014 13:09:56'),(31,1,'DELETE','Career','Data telah dihapus','22-08-2014 13:09:59'),(32,1,'DELETE','Career','Data telah dihapus','22-08-2014 13:10:03'),(33,1,'NEW','Web','Data telah ditambahk','22-08-2014 14:22:45'),(34,1,'NEW','Web','Data telah ditambahk','22-08-2014 14:24:20'),(35,1,'NEW','Web','Data telah ditambahk','22-08-2014 14:24:44'),(36,1,'DELETE','Products','Data telah dihapus','25-08-2014 14:09:06'),(37,1,'DELETE','Products','Data telah dihapus','25-08-2014 14:09:39'),(38,1,'DELETE','Products','Data telah dihapus','25-08-2014 14:09:44'),(39,1,'EDIT','Mobile','Content data telah d','25-08-2014 14:12:35'),(40,1,'NEW','Career','Data telah ditambah','26-08-2014 11:49:53'),(41,1,'EDIT','Career','Data telah diubah','26-08-2014 11:53:30'),(42,1,'EDIT','Career','Data telah diubah','26-08-2014 11:56:49'),(43,1,'NEW','Career','Data telah ditambah','26-08-2014 12:10:00'),(44,1,'NEW','Career','Data telah ditambah','26-08-2014 12:11:46'),(45,1,'NEW','Products','Data telah ditambahk','26-08-2014 14:01:56'),(46,1,'EDIT','Product','Data telah diubah','26-08-2014 14:04:33'),(47,1,'EDIT','Product','Data telah diubah','26-08-2014 14:13:34'),(48,1,'DELETE','Products','Data telah dihapus','26-08-2014 14:14:23'),(49,1,'NEW','Products','Data telah ditambahk','26-08-2014 14:14:49'),(50,1,'EDIT','About','Data telah diubah','28-08-2014 12:55:58'),(51,1,'EDIT','About','Data telah diubah','28-08-2014 12:56:20'),(52,1,'EDIT','About','Data telah diubah','28-08-2014 12:56:40'),(53,1,'EDIT','Mobile','Content data telah d','28-08-2014 13:14:16'),(54,1,'EDIT','Desktop','Content data telah d','28-08-2014 13:14:50'),(55,1,'EDIT','Web','Data telah diubah','28-08-2014 13:15:04'),(56,1,'DELETE','Desktop','Data telah dihapus','22-09-2014 08:38:46'),(57,1,'DELETE','Desktop','Data telah dihapus','22-09-2014 08:38:50'),(58,1,'NEW','Desktop','Data telah ditambahk','22-09-2014 08:40:01'),(59,1,'DELETE','Mobile','Data telah dihapus','22-09-2014 09:01:41'),(60,1,'DELETE','Mobile','Data telah dihapus','22-09-2014 09:01:51'),(61,1,'NEW','Mobile','Data telah ditambah','22-09-2014 09:03:54'),(62,1,'NEW','Mobile','Data telah ditambah','22-09-2014 09:05:45'),(63,1,'NEW','Mobile','Data telah ditambah','22-09-2014 09:06:02'),(64,1,'NEW','Mobile','Data telah ditambah','22-09-2014 09:07:03'),(65,1,'NEW','Mobile','Data telah ditambah','22-09-2014 09:07:18'),(66,1,'EDIT','Web','Data telah diubah','22-09-2014 10:33:34'),(67,1,'EDIT','Web','Data telah diubah','22-09-2014 10:33:46'),(68,1,'EDIT','Web','Data telah diubah','22-09-2014 10:33:58'),(69,1,'EDIT','Web','Data telah diubah','22-09-2014 10:34:12'),(70,1,'EDIT','Web','Data telah diubah','22-09-2014 10:34:27'),(71,2,'EDIT','Product','Data telah diubah','28-11-2014 06:49:49'),(72,2,'EDIT','Mobile','Content data telah d','28-11-2014 06:52:31'),(73,2,'EDIT','Mobile','Content data telah d','28-11-2014 06:57:42'),(74,2,'EDIT','Mobile','Content data telah d','28-11-2014 06:59:44'),(75,2,'DELETE','Mobile','Data telah dihapus','28-11-2014 07:00:57'),(76,2,'NEW','Mobile','Data telah ditambah','28-11-2014 07:02:01'),(77,2,'DELETE','Mobile','Data telah dihapus','28-11-2014 07:03:18'),(78,2,'DELETE','Mobile','Data telah dihapus','28-11-2014 07:03:22'),(79,2,'DELETE','Mobile','Data telah dihapus','28-11-2014 07:03:25'),(80,2,'DELETE','Mobile','Data telah dihapus','28-11-2014 07:03:29'),(81,2,'DELETE','Mobile','Data telah dihapus','28-11-2014 07:03:32'),(82,2,'NEW','Mobile','Data telah ditambah','28-11-2014 07:04:00'),(83,2,'NEW','Mobile','Data telah ditambah','28-11-2014 07:04:34'),(84,2,'NEW','Mobile','Data telah ditambah','28-11-2014 07:05:07'),(85,2,'NEW','Mobile','Data telah ditambah','28-11-2014 07:05:38'),(86,2,'NEW','Mobile','Data telah ditambah','28-11-2014 07:06:07'),(87,2,'DELETE','Products','Data telah dihapus','28-11-2014 07:06:46'),(88,2,'EDIT','Product','Data telah diubah','28-11-2014 07:09:51'),(89,2,'EDIT','Product','Data telah diubah','28-11-2014 07:33:46'),(90,2,'EDIT','Product','Data telah diubah','28-11-2014 07:34:03'),(91,2,'NEW','Products','Data telah ditambahk','28-11-2014 07:39:08'),(92,2,'DELETE','Products','Data telah dihapus','28-11-2014 07:42:40'),(93,2,'DELETE','Products','Data telah dihapus','28-11-2014 07:42:49'),(94,2,'EDIT','Product','Data telah diubah','28-11-2014 07:45:22'),(95,2,'NEW','Products','Data telah ditambahk','28-11-2014 08:44:05'),(96,2,'NEW','Products','Data telah ditambahk','28-11-2014 08:44:45'),(97,2,'NEW','Products','Data telah ditambahk','28-11-2014 08:52:02'),(98,2,'DELETE','Products','Data telah dihapus','28-11-2014 08:52:41'),(99,2,'DELETE','Products','Data telah dihapus','28-11-2014 08:52:47'),(100,2,'NEW','Products','Data telah ditambahk','28-11-2014 08:54:34'),(101,2,'EDIT','Product','Data telah diubah','28-11-2014 08:55:39'),(102,2,'EDIT','Product','Data telah diubah','28-11-2014 09:04:19'),(103,2,'DELETE','Products','Data telah dihapus','28-11-2014 09:26:27'),(104,2,'NEW','Products','Data telah ditambahk','28-11-2014 09:27:47'),(105,2,'EDIT','Mobile','Content data telah d','28-11-2014 09:43:10'),(106,2,'EDIT','Desktop','Content data telah d','28-11-2014 09:45:08'),(107,2,'EDIT','Web','Data telah diubah','28-11-2014 09:45:48'),(108,2,'EDIT','Web','Data telah diubah','28-11-2014 09:46:32'),(109,2,'EDIT','Web','Data telah diubah','28-11-2014 09:46:44'),(110,2,'EDIT','Web','Data telah diubah','28-11-2014 09:47:54'),(111,2,'EDIT','Web','Data telah diubah','28-11-2014 09:48:49'),(112,2,'EDIT','Web','Data telah diubah','28-11-2014 11:56:14'),(113,2,'EDIT','Web','Data telah diubah','28-11-2014 11:57:11'),(114,2,'EDIT','Web','Data telah diubah','28-11-2014 11:59:13'),(115,2,'EDIT','Web','Data telah diubah','28-11-2014 12:00:01'),(116,2,'DELETE','Web','Data telah dihapus','28-11-2014 12:12:05'),(117,2,'EDIT','Web','Data telah diubah','28-11-2014 12:12:38'),(118,2,'EDIT','Web','Data telah diubah','28-11-2014 12:13:46'),(119,2,'EDIT','Web','Data telah diubah','28-11-2014 12:16:25'),(120,2,'NEW','Web','Data telah ditambahk','28-11-2014 12:22:59'),(121,2,'NEW','Web','Data telah ditambahk','28-11-2014 12:26:09'),(122,2,'NEW','Web','Data telah ditambahk','28-11-2014 12:27:14'),(123,2,'EDIT','Desktop','Content data telah d','28-11-2014 12:40:47'),(124,2,'NEW','Blod','Data telah ditambahk','27-01-2015 00:23:15'),(125,2,'EDIT','Blog','Data telah diubah','27-01-2015 00:38:34'),(126,2,'DELETE','Blog','Data telah dihapus','27-01-2015 00:44:34'),(127,2,'NEW','Blod','Data telah ditambahk','27-01-2015 18:48:28'),(128,2,'NEW','Products Detail','Data telah ditambahk','29-01-2015 06:00:44'),(129,2,'NEW','Products Detail','Data telah ditambahk','29-01-2015 06:07:54'),(130,2,'DELETE','Products Detail','Data telah dihapus','29-01-2015 06:36:53'),(131,2,'DELETE','Products Detail','Data telah dihapus','29-01-2015 06:39:36'),(132,2,'NEW','Products Detail','Data telah ditambahk','31-01-2015 06:53:43'),(133,2,'DELETE','Products Detail','Data telah dihapus','31-01-2015 06:54:10'),(134,2,'NEW','Products Detail','Data telah ditambahk','31-01-2015 06:56:22'),(135,2,'DELETE','Products Detail','Data telah dihapus','31-01-2015 06:58:05'),(136,2,'NEW','Products Detail','Data telah ditambahk','31-01-2015 06:59:31'),(137,2,'DELETE','Products Detail','Data telah dihapus','31-01-2015 06:59:43'),(138,2,'NEW','Products Detail','Data telah ditambahk','31-01-2015 07:56:29'),(139,2,'EDIT','Product','Data telah diubah','31-01-2015 10:52:02'),(140,2,'EDIT','Product','Data telah diubah','31-01-2015 10:52:13'),(141,2,'EDIT','Product Detail','Data telah diubah','31-01-2015 10:54:09'),(142,2,'EDIT','Product Detail','Data telah diubah','31-01-2015 10:54:23'),(143,2,'EDIT','Product Detail','Data telah diubah','31-01-2015 10:56:00'),(144,2,'EDIT','Product Detail','Data telah diubah','31-01-2015 11:33:55'),(145,2,'EDIT','Product Detail','Data telah diubah','31-01-2015 11:35:06'),(146,2,'EDIT','Product Detail','Data telah diubah','31-01-2015 11:35:55'),(147,2,'EDIT','Product Detail','Data telah diubah','31-01-2015 11:38:24'),(148,2,'EDIT','Product Detail','Data telah diubah','31-01-2015 11:43:31'),(149,2,'EDIT','Product Detail','Data telah diubah','31-01-2015 11:53:14'),(150,2,'EDIT','Product Detail','Data telah diubah','31-01-2015 11:54:32'),(151,2,'EDIT','Product Detail','Data telah diubah','31-01-2015 11:56:50'),(152,2,'EDIT','Product Detail','Data telah diubah','31-01-2015 11:58:10'),(153,2,'EDIT','Product Detail','Data telah diubah','31-01-2015 12:01:00'),(154,2,'EDIT','Product Detail','Data telah diubah','31-01-2015 12:03:13'),(155,2,'EDIT','Product Detail','Data telah diubah','31-01-2015 12:03:31'),(156,2,'EDIT','Product Detail','Data telah diubah','31-01-2015 12:03:57'),(157,2,'EDIT','Product Detail','Data telah diubah','31-01-2015 12:05:57'),(158,2,'EDIT','Product Detail','Data telah diubah','31-01-2015 12:06:54'),(159,2,'EDIT','Product Detail','Data telah diubah','31-01-2015 12:07:23'),(160,2,'EDIT','Product Detail','Data telah diubah','31-01-2015 12:07:56'),(161,2,'EDIT','Product Detail','Data telah diubah','31-01-2015 12:08:25'),(162,2,'EDIT','Product Detail','Data telah diubah','31-01-2015 12:08:36'),(163,2,'EDIT','Product Detail','Data telah diubah','31-01-2015 12:08:48'),(164,2,'EDIT','Product Detail','Data telah diubah','31-01-2015 12:09:01'),(165,2,'EDIT','Product Detail','Data telah diubah','31-01-2015 12:09:19'),(166,2,'EDIT','Product Detail','Data telah diubah','31-01-2015 12:14:56'),(167,2,'EDIT','Product Detail','Data telah diubah','31-01-2015 12:15:05'),(168,2,'EDIT','Product Detail','Data telah diubah','31-01-2015 12:15:17'),(169,2,'EDIT','Product Detail','Data telah diubah','31-01-2015 12:16:07'),(170,2,'NEW','Products Detail','Data telah ditambahk','31-01-2015 12:20:05'),(171,2,'EDIT','Product Detail','Data telah diubah','31-01-2015 12:38:28'),(172,2,'EDIT','Blog','Data telah diubah','31-01-2015 17:43:07'),(173,2,'NEW','Blod','Data telah ditambahk','31-01-2015 17:49:05'),(174,2,'EDIT','Blog','Data telah diubah','31-01-2015 17:50:40'),(175,2,'EDIT','Blog','Data telah diubah','31-01-2015 17:52:18'),(176,2,'EDIT','Blog','Data telah diubah','31-01-2015 17:53:03'),(177,0,'NEW','Blod','Data telah ditambahk','02-02-2015 16:12:40'),(178,2,'DELETE','Comment','Data telah dihapus','02-02-2015 16:34:27');

/*Table structure for table `messages` */

DROP TABLE IF EXISTS `messages`;

CREATE TABLE `messages` (
  `messageid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `content` varchar(1000) NOT NULL,
  PRIMARY KEY (`messageid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `messages` */

/*Table structure for table `pageabout` */

DROP TABLE IF EXISTS `pageabout`;

CREATE TABLE `pageabout` (
  `aboutid` int(11) NOT NULL AUTO_INCREMENT,
  `tittle` varchar(50) NOT NULL,
  `content` varchar(2000) NOT NULL,
  `picture` varchar(20) NOT NULL,
  PRIMARY KEY (`aboutid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `pageabout` */

insert  into `pageabout`(`aboutid`,`tittle`,`content`,`picture`) values (1,'EXPERTISE','Fingertechnology is a new generation of Information Technology Service Company initiated by a team of experienced IT professionals. We see the importance of bringing integrity to each project.Our professional team has wide and deep understanding of the mobile and web technology. Well-complimented by rich experience across all the major enterprises, and the capability to deliver superior end-to-end business solutions, simply makes us the best choice of IT consultant across the industries.','leaf.png'),(2,'FULLY RESPONSIVE','Fingertechnology provides wide range of IT development services to various customers across the world. We have developed many IT solutions specific to different industries in order to optimize business processes and reach target customers effectively using immense potential of IT. We listen, collaborate, and work with our customer from idea generation to app implementation.','mobile.png'),(3,'HIGH EFFICIENCY','We believe efficiency is the key to success. Our IT professionals will provide you with the most efficient way to solve any of your problems. Each one of them will be treated quickly, organized, cost efficient, and right to the point.','battery.png');

/*Table structure for table `pageaboutbu` */

DROP TABLE IF EXISTS `pageaboutbu`;

CREATE TABLE `pageaboutbu` (
  `aboutid` int(11) NOT NULL AUTO_INCREMENT,
  `tittle` varchar(50) NOT NULL,
  `content` varchar(2000) NOT NULL,
  `picture` varchar(20) NOT NULL,
  PRIMARY KEY (`aboutid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `pageaboutbu` */

insert  into `pageaboutbu`(`aboutid`,`tittle`,`content`,`picture`) values (1,'GENERATIONS','Fingertechnology is a new Generation Technology Services company initiated by a team of experienced IT professionals. Our professional team has a Perfect understanding of the mobile and web technology, well-complimented by rich experience across all the major enterprise verticals and the capability to deliver end-to-end business solutions, makes us the mobile consultant of choice across industries.','leaf.png'),(2,'FULLY RESPONSIVE','Fingertechnology provide mobile development services to various customers across the world. We have developed many Mobility solutions specific to different industries in order to optimize business processes and reach target customers effectively using immense potential of mobility. We work with our customer from idea generation to App implementation and bring out expertise in mobility and various business domains.','mobile.png'),(3,'HIGH EFFICIENCY','We believe that innovation comes from inspiration. We know that a sense of humor goes a long way. We see the importance of bringing integrity to each project. We know that our clients are intelligent, creative people, which mean that we work with you to collaborate and make sure that you love everything that we come up with.','battery.png');

/*Table structure for table `pagecareer` */

DROP TABLE IF EXISTS `pagecareer`;

CREATE TABLE `pagecareer` (
  `careerid` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(11) NOT NULL,
  `content` longtext NOT NULL,
  PRIMARY KEY (`careerid`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `pagecareer` */

insert  into `pagecareer`(`careerid`,`category`,`content`) values (9,'','<h3><strong>Senior Mobile Application Developer</strong></h3>\r\n\r\n<p><strong>Responsibilities:</strong><br />\r\n&bull; Acting as lead iOS and/ or Android developer. Depending on the skills set can be lead on one platform and play<br />\r\na supporting role across the other.<br />\r\n&bull; Working closely with another mobile app developer leading the other platform development<br />\r\n&bull; Deliver across the entire app life cycle concept, design, build, deploy, test, release to app stores and support<br />\r\n&bull; Working directly with developers and product managers to conceptualize, build, test and realize products<br />\r\n&bull; Gather requirements around functionality and translate those requirements into elegant functional solutions<br />\r\n&bull; Build prototypes at tech scoping stage of projects<br />\r\n&bull; Working along the web developers to create and maintain a robust framework to support the apps<br />\r\n&bull; Working with the front end developers to build the interface with focus on usability features<br />\r\n&bull; Create compelling device specific user interfaces and experiences<br />\r\n&bull; Standardizing the platform and in some cases apps to deliver across multiple brands with minimal duplication<br />\r\nof effort<br />\r\n&bull; Optimizing performance for the apps</p>\r\n\r\n<p><br />\r\n<strong>Requirements:</strong><br />\r\n&bull; At least 2 years experiences in the same position.<br />\r\n&bull; Experience with: JAVA, Android, Xcode - IOS Development<br />\r\n&bull; Knowing Security Implementation in mobile apps<br />\r\n&bull; Knowing LAMP Stack Development is a plus</p>\r\n'),(10,'','<h2><strong>Junior Mobile Application Developer</strong></h2>\r\n\r\n<p><strong>Responsibilities:</strong><br />\r\n&bull; Working closely with another mobile app developer leading the other platform development<br />\r\n&bull; Deliver across the entire app life cycle concept, design, build, deploy, test, release to app stores and support<br />\r\n&bull; Build prototypes at tech scoping stage of projects<br />\r\n&bull; Create compelling device specific user interfaces and experiences<br />\r\n&bull; Standardizing the platform and in some cases apps to deliver across multiple brands with minimal duplication<br />\r\nof effort<br />\r\n&bull; Optimizing performance for the apps</p>\r\n\r\n<p><br />\r\n<strong>Requirements:</strong><br />\r\n&bull; Minimum of 1 years related work experience , Fresh graduate are welcome<br />\r\n&bull; For iOS: XCODE<br />\r\n&bull; For Android: Java, Android SDK<br />\r\n&bull; Experience with JSON, XML and XHTML<br />\r\n&bull; Experience with web front-end development frameworks such as HTML5, Javascript, CSS, Phonegap is a plus<br />\r\n&bull; Deploying mobile applications<br />\r\n&bull; Computer Science degree or equivalent academic background</p>\r\n'),(11,'','<h2><strong>Web Developer</strong></h2>\r\n\r\n<p><strong>Responsibilities:</strong><br />\r\n&bull; Create customer-centric designs by integrating marketing objectives, target audience, and creative assets into<br />\r\nadvertising designs<br />\r\n&bull; Support sales teams by bringing big ideas to life through ideation and creation of high fidelity designs for sales<br />\r\npresentations<br />\r\n&bull; Support marketing and sales teams with design and execution of marketing collateral and materials<br />\r\n&bull; Coordinate with development teams on ad execution and deployment</p>\r\n\r\n<p><br />\r\n<strong>Requirements:</strong><br />\r\n&bull; Minimum of 1years related work experience<br />\r\n&bull; Strong Knowledge of Photoshop, Illustrator, InDesign<br />\r\n&bull; Strong Knowledge of HTML &amp; CSS<br />\r\n&bull; Any Knowledge of Javascript, JQuery, XML, JSON is welcomed<br />\r\n&bull; Any Knowledge of Server Side Scripting (PHP, ColdFusion, etc.) is welcomed<br />\r\n&bull; Any Knowledge of Database Software: MS SQL, MySQL is welcomed</p>\r\n');

/*Table structure for table `pagecontact` */

DROP TABLE IF EXISTS `pagecontact`;

CREATE TABLE `pagecontact` (
  `contactid` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(200) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`contactid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `pagecontact` */

insert  into `pagecontact`(`contactid`,`address`,`phone`,`email`) values (1,'Metro Centro Broadway Blok B No 56 2nd Floor, Pantai Indah Kapuk\r\nJakarta Utara\r\nDKI Jakarta 11460, Indonesia','(021) 30010432','sales@finger-technology.com');

/*Table structure for table `pagedesktop` */

DROP TABLE IF EXISTS `pagedesktop`;

CREATE TABLE `pagedesktop` (
  `desktopid` int(11) NOT NULL AUTO_INCREMENT,
  `tittle` varchar(50) NOT NULL,
  `content` varchar(500) NOT NULL,
  `picture` varchar(50) NOT NULL,
  PRIMARY KEY (`desktopid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `pagedesktop` */

insert  into `pagedesktop`(`desktopid`,`tittle`,`content`,`picture`) values (4,'Spartan Training Camp','Spartan Training Camp','01 Spartan Training Camp.jpg');

/*Table structure for table `pagemobiles` */

DROP TABLE IF EXISTS `pagemobiles`;

CREATE TABLE `pagemobiles` (
  `mobileid` int(11) NOT NULL AUTO_INCREMENT,
  `tittle` varchar(50) NOT NULL,
  `content` varchar(500) NOT NULL,
  `picture` varchar(50) NOT NULL,
  PRIMARY KEY (`mobileid`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `pagemobiles` */

insert  into `pagemobiles`(`mobileid`,`tittle`,`content`,`picture`) values (9,'Fashion Square','Fashion Square','Apps mobile-1 (Fashion Square).jpg'),(10,'Fit Fix','Fit Fix','Apps mobile-2 (Fit Fix).jpg'),(11,'Kwan Gems','Kwan Gems','Apps mobile-3 (Kwan Gems).jpg'),(12,'Academy Car Sales','Academy Car Sales','Apps mobile-4 (Academy Car Sales).jpg'),(13,'Lords Property','Lords Property','Apps mobile-5 (Lords Property).jpg');

/*Table structure for table `pageproducts` */

DROP TABLE IF EXISTS `pageproducts`;

CREATE TABLE `pageproducts` (
  `productsid` int(11) NOT NULL AUTO_INCREMENT,
  `tittle` varchar(50) NOT NULL,
  `content` varchar(500) NOT NULL,
  `picture` varchar(20) NOT NULL,
  PRIMARY KEY (`productsid`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `pageproducts` */

insert  into `pageproducts`(`productsid`,`tittle`,`content`,`picture`) values (9,'Munch It','Munch It','01 Munch It.jpg'),(11,'FingerDeals','FingerDeals','01 FingerDeals.jpg'),(13,'FingertipSales','FingertipSales','Untitled-1 copy.jpg');

/*Table structure for table `pageproductsdetail` */

DROP TABLE IF EXISTS `pageproductsdetail`;

CREATE TABLE `pageproductsdetail` (
  `productsdetailid` int(11) NOT NULL AUTO_INCREMENT,
  `productsid` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` longtext NOT NULL,
  `m_type` varchar(50) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `video_id` varchar(100) NOT NULL,
  `video_thumb` varchar(100) NOT NULL,
  PRIMARY KEY (`productsdetailid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `pageproductsdetail` */

insert  into `pageproductsdetail`(`productsdetailid`,`productsid`,`title`,`content`,`m_type`,`picture`,`video_id`,`video_thumb`) values (4,9,'Image show','test','image','2014-01-25-20-56-05_deco.jpg','',''),(5,9,'product video','test','video','','ZaUnELYy2C0','');

/*Table structure for table `pagewebs` */

DROP TABLE IF EXISTS `pagewebs`;

CREATE TABLE `pagewebs` (
  `webid` int(11) NOT NULL AUTO_INCREMENT,
  `tittle` varchar(50) NOT NULL,
  `content` varchar(500) NOT NULL,
  `picture` varchar(50) NOT NULL,
  PRIMARY KEY (`webid`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `pagewebs` */

insert  into `pagewebs`(`webid`,`tittle`,`content`,`picture`) values (1,'Bali Wedding','Bali Wedding','01 Bali Wedding.jpg'),(3,'Complete Form','Complete Form','02 Complete Form.jpg'),(5,'Decore','Decore','03 Decore.jpg'),(7,'Frank Zumer','Frank Zumer','04 Frank Zumer.jpg'),(8,'Photo Portfolio','Photo Portfolio','05 Photo Portfolio.jpg'),(9,'Uniview','Uniview','06 Uniview.jpg'),(10,'Zakjohns','Zakjohns','07 Zakjohns.jpg');

/*Table structure for table `services` */

DROP TABLE IF EXISTS `services`;

CREATE TABLE `services` (
  `serviceid` int(11) NOT NULL AUTO_INCREMENT,
  `tittle` varchar(50) NOT NULL,
  `content` varchar(5000) NOT NULL,
  PRIMARY KEY (`serviceid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `services` */

insert  into `services`(`serviceid`,`tittle`,`content`) values (1,'Mobile','Finger Technology offer professional service for mobile application development. We made a commitment to provide outstanding, impressive, and distinct mobile application that could help the mobility of the user. With expertise in every mobile platform, which allows us to give wider type of service in every industry to be fulfilled.'),(2,'Desktop','We provide desktop app creation and customization from simple to complex apps that can fulfill various types of needs. Our IT professionals are undoubtedly experienced in adjusting the program to both specific operating system and across operating systems.'),(3,'Web Design','Designing web canâ€™t be easier. We provide solution in designing website for both business and non-business organization. With our expertise in design and programming, we provide you with solution that suits your needs.');

/*Table structure for table `subscribe` */

DROP TABLE IF EXISTS `subscribe`;

CREATE TABLE `subscribe` (
  `memberid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `facebookid` varchar(200) NOT NULL,
  `facebookusername` varchar(200) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`memberid`),
  UNIQUE KEY `NewIndex1` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `subscribe` */

insert  into `subscribe`(`memberid`,`name`,`email`,`facebookid`,`facebookusername`,`timestamp`) values (1,'irwandi','irwandi@test.com','','','2015-02-02 20:18:49'),(12,'irwandi','irwandijakub@yahoo.coooooom','','','2015-02-10 12:51:44');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `position` int(11) NOT NULL COMMENT '1=can edit & add, 2 = just edit',
  `avatar` varchar(20) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`userid`,`name`,`username`,`password`,`position`,`avatar`) values (1,'admin','admin','21232f297a57a5a743894a0e4a801fc3',1,'avatar5.png'),(2,'adm','adm','b09c600fddc573f117449b3723f23d64',2,'avatar4.png');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
