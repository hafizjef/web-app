-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.28-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for laundrydb
CREATE DATABASE IF NOT EXISTS `laundrydb` /*!40100 DEFAULT CHARACTER SET ascii */;
USE `laundrydb`;

-- Dumping structure for table laundrydb.booking
CREATE TABLE IF NOT EXISTS `booking` (
  `orderid` int(11) NOT NULL AUTO_INCREMENT,
  `customerid` int(11) NOT NULL,
  `date` date NOT NULL,
  `weight` double NOT NULL,
  `totalprice` double NOT NULL,
  `services` text NOT NULL,
  `items` text NOT NULL,
  `status` enum('N','P','C') NOT NULL DEFAULT 'N',
  PRIMARY KEY (`orderid`),
  KEY `FK__users` (`customerid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=ascii;

-- Data exporting was unselected.
-- Dumping structure for table laundrydb.customer
CREATE TABLE IF NOT EXISTS `customer` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `active` enum('Y','N') NOT NULL DEFAULT 'Y',
  `name` varchar(50) NOT NULL,
  `username` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phonenumber` char(10) NOT NULL,
  `password` char(255) NOT NULL,
  `address` varchar(300) NOT NULL,
  `token` char(32) NOT NULL,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=ascii;

-- Data exporting was unselected.
-- Dumping structure for table laundrydb.staff
CREATE TABLE IF NOT EXISTS `staff` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phonenumber` char(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(255) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=ascii;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
