-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.21-MariaDB


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema aku
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ aku;
USE aku;

--
-- Table structure for table `aku`.`registration`
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE `registration` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fname` varchar(45) NOT NULL DEFAULT '',
  `lname` varchar(45) NOT NULL DEFAULT '',
  `address` varchar(45) NOT NULL DEFAULT '',
  `city` varchar(45) NOT NULL DEFAULT '',
  `country` varchar(45) NOT NULL DEFAULT '',
  `adge` int(10) unsigned NOT NULL DEFAULT '0',
  `program` varchar(45) NOT NULL DEFAULT '',
  `email` varchar(45) NOT NULL DEFAULT '',
  `department` varchar(45) NOT NULL DEFAULT '',
  `mobile` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aku`.`registration`
--

/*!40000 ALTER TABLE `registration` DISABLE KEYS */;
/*!40000 ALTER TABLE `registration` ENABLE KEYS */;


--
-- Table structure for table `aku`.`student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE `student` (
  `Stud_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Stud_fname` varchar(45) NOT NULL DEFAULT '',
  `Stud_lname` varchar(45) NOT NULL DEFAULT '',
  `Stud_bday` date NOT NULL DEFAULT '0000-00-00',
  `Stud_mobile` int(10) unsigned NOT NULL DEFAULT '0',
  `Stud_address` varchar(45) NOT NULL DEFAULT '',
  PRIMARY KEY (`Stud_id`)
) ENGINE=InnoDB AUTO_INCREMENT=157 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aku`.`student`
--

/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` (`Stud_id`,`Stud_fname`,`Stud_lname`,`Stud_bday`,`Stud_mobile`,`Stud_address`) VALUES 
 (2,'Amanuel','Eshete','1994-08-08',123456,'Gondar City, Ethiopia'),
 (3,'Francis Rey','Padao','2001-01-01',123456,'Axum City, Ethiopia'),
 (4,'Rudy','Duterte','1991-01-01',123456,'Philippines'),
 (5,'Jose','Rizal','1990-01-01',123456,'Philippines'),
 (6,'Wilmar','Padao','1981-01-01',123456,'London'),
 (7,'Juan','Dela Cruz','2001-01-01',12345678,'Philippines'),
 (153,'Joseph','Estrada','2017-05-07',123456,'Philippines'),
 (154,'Fidel','Ramos','2017-01-05',1234567,'Philippines'),
 (155,'Vice','Ganda','1980-01-01',12345678,'Germany'),
 (156,'Willy Joy','Padao','1990-08-28',123456,'Philippines');
/*!40000 ALTER TABLE `student` ENABLE KEYS */;


--
-- Table structure for table `aku`.`user_login`
--

DROP TABLE IF EXISTS `user_login`;
CREATE TABLE `user_login` (
  `login_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `login_username` varchar(45) NOT NULL DEFAULT '',
  `login_password` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aku`.`user_login`
--

/*!40000 ALTER TABLE `user_login` DISABLE KEYS */;
INSERT INTO `user_login` (`login_id`,`login_username`,`login_password`) VALUES 
 (1,'user1','1234abcd');
/*!40000 ALTER TABLE `user_login` ENABLE KEYS */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
