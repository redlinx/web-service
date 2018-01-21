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
  `md_1` varchar(100) NOT NULL DEFAULT '',
  `md_2` varchar(100) NOT NULL DEFAULT '',
  `md_3` varchar(100) NOT NULL DEFAULT '',
  `md_4` varchar(100) NOT NULL DEFAULT '',
  `md_5` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`Stud_id`)
) ENGINE=InnoDB AUTO_INCREMENT=175 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aku`.`student`
--

/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` (`Stud_id`,`Stud_fname`,`Stud_lname`,`Stud_bday`,`Stud_mobile`,`Stud_address`,`md_1`,`md_2`,`md_3`,`md_4`,`md_5`) VALUES 
 (173,'Girmay','Gerezgiher','1999-01-01',12345678,'Axum City','31b8c7e101e859b01cc5ece48ae40a04417d8e3c','1f4d5dfec4fdfe15fc075d13329cf633bab005a1','c861781b1f2d361c2519d1859cc38c8b7c762904','7c222fb2927d828af22f592134e8932480637c0d','d6f3df7cb3281743f3683457725e28f65f89310a'),
 (174,'Daniel','Berhe','1999-01-01',12345678,'Axum City','7b37259e149636e3330d530cbf408f2b8c1eda6a','66bc1feb83bae4b1595883c9abffd667d707d7f2','88918a0c616443b4bbb1adf9e81ad79c7c1ba403','7c222fb2927d828af22f592134e8932480637c0d','d6f3df7cb3281743f3683457725e28f65f89310a');
/*!40000 ALTER TABLE `student` ENABLE KEYS */;


--
-- Table structure for table `aku`.`student_secure`
--

DROP TABLE IF EXISTS `student_secure`;
CREATE TABLE `student_secure` (
  `stud_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `stud_fname` varchar(45) NOT NULL DEFAULT '',
  `stud_fname_SHA1` varchar(45) NOT NULL DEFAULT '',
  `stud_lname` varchar(45) NOT NULL DEFAULT '',
  `stud_lname_SHA1` varchar(45) NOT NULL DEFAULT '',
  PRIMARY KEY (`stud_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aku`.`student_secure`
--

/*!40000 ALTER TABLE `student_secure` DISABLE KEYS */;
INSERT INTO `student_secure` (`stud_id`,`stud_fname`,`stud_fname_SHA1`,`stud_lname`,`stud_lname_SHA1`) VALUES 
 (1,'francis rey','0064643bba53dc091eaf83b0600cf4afae322e74','padao','9ef13a8a99a884a2338ca0b30cbded9752c9db45');
/*!40000 ALTER TABLE `student_secure` ENABLE KEYS */;


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
