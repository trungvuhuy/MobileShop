-- MySQL dump 10.13  Distrib 5.6.27, for Win64 (x86_64)
--
-- Host: localhost    Database: thuhuongmart
-- ------------------------------------------------------
-- Server version	5.6.27-log

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
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `myname` varchar(100) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (39,'e10adc3949ba59abbe56e057f20f883e','administrator','Quản trị hệ thống','truongtoanttk5@gmail.com','2012-06-27 17:51:40','2012-07-12 15:50:30',1),(43,'e10adc3949ba59abbe56e057f20f883e','administrator2','Quản trị viên 1','quantrivien@yahoo.com','2012-07-12 15:51:02','2016-09-03 17:35:44',1),(44,'e10adc3949ba59abbe56e057f20f883e','vhtrung','Vũ huy Trung','trungvuhuy@live.com','2016-09-03 17:52:50','2016-09-03 17:52:50',0);
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `brands` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `code` varchar(20) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `code_UNIQUE` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brands`
--

LOCK TABLES `brands` WRITE;
/*!40000 ALTER TABLE `brands` DISABLE KEYS */;
INSERT INTO `brands` VALUES (1,'Nokia','nokia',1),(2,'Samsung','samsung',1),(3,'Apple','apple',1),(4,'Xiaomi','xiaomi',1);
/*!40000 ALTER TABLE `brands` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `title_eng` varchar(100) NOT NULL,
  `order` int(11) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `postdate` varchar(20) NOT NULL,
  `alias` varchar(100) NOT NULL,
  `alias_eng` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=116 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,0,'Điện thoại','',0,'1','','dien-thoai',''),(2,0,'Phụ kiện','',0,'1','','phu-kien','');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `invoices`
--

DROP TABLE IF EXISTS `invoices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `invoices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_product` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `address` text,
  `mobile` varchar(20) NOT NULL,
  `note` text,
  `quantity_product` varchar(50) DEFAULT NULL,
  `created` date NOT NULL,
  `status` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `invoices`
--

LOCK TABLES `invoices` WRITE;
/*!40000 ALTER TABLE `invoices` DISABLE KEYS */;
INSERT INTO `invoices` VALUES (9,',56,','abc','','','','acc',',1,','2016-09-03',5),(10,',140,139,','Nguyễn X','','','0912111111','',',1,1,','2016-09-03',0);
/*!40000 ALTER TABLE `invoices` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `manager_admins`
--

DROP TABLE IF EXISTS `manager_admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `manager_admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `controller` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `manager_admins`
--

LOCK TABLES `manager_admins` WRITE;
/*!40000 ALTER TABLE `manager_admins` DISABLE KEYS */;
INSERT INTO `manager_admins` VALUES (2,'Danh mục sản phẩm','categories'),(3,'Danh mục tin tức','category_news'),(4,'Tỉnh thành','cities'),(5,'Liên hệ','contacts'),(6,'Hóa đơn','invoices'),(7,'Nhóm quản trị','manager_admin'),(8,'Tin tức','news'),(9,'Sản phẩm','products'),(10,'Thành viên','users');
/*!40000 ALTER TABLE `manager_admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `address` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `members`
--

LOCK TABLES `members` WRITE;
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
/*!40000 ALTER TABLE `members` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `category_id` int(11) NOT NULL,
  `maincategory_idx` int(10) DEFAULT NULL,
  `subcategory_idx` int(10) DEFAULT NULL,
  `images` varchar(255) NOT NULL,
  `images1` varchar(250) DEFAULT NULL,
  `images2` varchar(250) DEFAULT NULL,
  `images3` varchar(250) DEFAULT NULL,
  `images4` varchar(250) DEFAULT NULL,
  `price` int(10) NOT NULL,
  `price_promotion` int(10) DEFAULT NULL,
  `action` int(11) DEFAULT NULL,
  `content` text,
  `created` date NOT NULL,
  `prominent` int(1) DEFAULT NULL,
  `sale` int(1) DEFAULT NULL,
  `new` int(1) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `alias` varchar(250) NOT NULL,
  `brand_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=155 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (140,'Lumia 650',1,NULL,NULL,'upload/images/1472922360microsoft-lumia-950-400x460png.png','','','','',500000,NULL,NULL,'','2016-09-03',0,0,0,1,'lumia-650',1),(141,'Điện thoại iPhone 6s Plus 64GB',1,NULL,NULL,'upload/images/1472924802iphone-6s-plus-64gb-400-400x450png.png','','','','',23000000,NULL,NULL,'','2016-09-03',1,1,1,1,'dien-thoai-iphone-6s-plus-64gb',3),(142,'Điện thoại iPhone 6s Plus 32GB',1,NULL,NULL,'upload/images/1472924858iphone-6s-plus-64gb-400-400x450png.png','','','','',20000000,NULL,NULL,'','2016-09-03',0,1,1,1,'dien-thoai-iphone-6s-plus-32gb',3),(143,'Microsoft Lumia 640 XL',1,NULL,NULL,'upload/images/1472949152microsoft-lumia-640-xl-400-png-1-500x500png.png','','','','',3500000,NULL,NULL,'','2016-09-04',1,0,0,1,'microsoft-lumia-640-xl',1),(144,'Microsoft Lumia 540',1,NULL,NULL,'upload/images/1472949212microsoft-lumia-540-400x533-400x533png.png','','','','',2390000,NULL,NULL,'','2016-09-04',0,0,0,1,'microsoft-lumia-540',1),(145,'Điện thoại Nokia 230 Dual SIM',1,NULL,NULL,'upload/images/1472949251nokia-230-400x460png.png','','','','',1400000,NULL,NULL,'','2016-09-04',0,0,0,1,'dien-thoai-nokia-230-dual-sim',1),(146,'Điện thoại Nokia 105 Dual SIM',1,NULL,NULL,'upload/images/1472949312nokia-105-dual-sim-400x533png.png','','','','',400000,NULL,NULL,'','2016-09-04',0,0,0,1,'dien-thoai-nokia-105-dual-sim',1),(147,'Điện thoại Nokia 215 Dual Sim',1,NULL,NULL,'upload/images/1472949351nokia-215-dual-sim-2-400x460copy-400x460png.png','','','','',850000,NULL,NULL,'','2016-09-04',1,1,0,1,'dien-thoai-nokia-215-dual-sim',1),(148,'Điện thoại Samsung Galaxy S7 Edge',1,NULL,NULL,'upload/images/1472949460samsung-galaxy-s7-edge-1-400x460png.png','','','','',185000000,NULL,NULL,'','2016-09-04',1,0,1,1,'dien-thoai-samsung-galaxy-s7-edge',2),(149,'Điện thoại Samsung Galaxy A9 Pro',1,NULL,NULL,'upload/images/1472949514samsung-galaxy-a9-pro-1-400x460png.png','','','','',11000000,NULL,NULL,'','2016-09-04',0,0,0,1,'dien-thoai-samsung-galaxy-a9-pro',2),(150,'Samsung Galaxy Grand Prime G531',1,NULL,NULL,'upload/images/1472949579samsung-galaxy-grand-prime-g531-400x460png.png','','','','',3000000,NULL,NULL,'','2016-09-04',0,0,0,1,'samsung-galaxy-grand-prime-g531',2),(151,' iPhone 6 Plus 64GB',1,NULL,NULL,'upload/images/1472949636iphone-6-plus-64gb-3-400x460png.png','','','','',18500000,NULL,NULL,'','2016-09-04',1,1,1,1,'iphone-6-plus-64gb',3),(152,'Thiết bị kích sóng Wifi Xiaomi Repeater',2,NULL,NULL,'upload/images/1472949895thiet-bi-kich-song-wifi-xiaomi-repeater-trang-7044-9920502-6810155b2532117462914f3e55115c64-webp-productjpg.jpg','','','','',125000,NULL,NULL,'','2016-09-04',0,0,0,1,'thiet-bi-kich-song-wifi-xiaomi-repeater',4),(153,' Loa Bluetooth Xiaomi Square Box ',2,NULL,NULL,'upload/images/1472949999loa-bluetooth-xiaomi-square-box-trang-5069-1992712-29cf2de66fc2286a747ca0ee3dcc15e6-webp-productjpg.jpg','','','','',350000,NULL,NULL,'','2016-09-04',0,0,0,1,'loa-bluetooth-xiaomi-square-box',4),(139,'Nokia Lumia 730 Dual SIM',1,NULL,NULL,'upload/images/1472918303nokia-lumia-730-dual-sim-1-400x460png.png','upload/images/1472918316nokia-lumia-730-dual-sim-cam-org-1png.png','upload/images/1472918328nokia-lumia-730-dual-sim-trang-org-1png.png','','',2990000,NULL,NULL,'','2016-09-03',1,1,1,1,'nokia-lumia-730-dual-sim',1),(154,' Cốc sạc Xiaomi 2A',2,NULL,NULL,'upload/images/1472950058coc-sac-xiaomi-2a-1127-2811242-36f9ec7618f936e181a1fe4a253b215e-webp-zoomjpg.jpg','','','','',80000,NULL,NULL,'','2016-09-04',0,0,0,1,'coc-sac-xiaomi-2a',4);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-09-04 21:38:54
