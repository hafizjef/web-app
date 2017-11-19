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
  `booking_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `weight` tinyint(3) NOT NULL,
  `total` tinyint(3) NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT '0',
  `service_type` tinyint(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`booking_id`),
  KEY `FK__users` (`customer_id`),
  KEY `FK_booking_staff` (`staff_id`),
  CONSTRAINT `FK__users` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`userid`),
  CONSTRAINT `FK_booking_staff` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`)
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

-- Data exporting was unselected.
-- Dumping structure for table laundrydb.customer
CREATE TABLE IF NOT EXISTS `customer` (
  `userid` int(11) NOT NULL,
  `usertype` tinyint(2) NOT NULL DEFAULT '0',
  `username` varchar(60) NOT NULL,
  `emailaddress` varchar(60) NOT NULL,
  `phonenumber` char(10) NOT NULL,
  `password` char(255) NOT NULL,
  `address` varchar(300) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

-- Data exporting was unselected.
-- Dumping structure for table laundrydb.staff
CREATE TABLE IF NOT EXISTS `staff` (
  `staff_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phonenumber` char(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(255) NOT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
