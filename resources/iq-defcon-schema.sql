DROP DATABASE `iq-defcon`;
CREATE SCHEMA `iq-defcon` DEFAULT CHARACTER SET utf8 ;
USE `iq-defcon` ;

CREATE TABLE `iq-defcon`.`user` (
  `id` INT ZEROFILL NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;
INSERT INTO `iq-defcon`.`user` VALUES(NULL, 'iq-defcon', 'iq-defcon');

CREATE TABLE `iq-defcon`.`comment` (
  `id` INT ZEROFILL NOT NULL AUTO_INCREMENT,
  `comment` TINYTEXT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;
INSERT INTO `iq-defcon`.`comment` VALUES(NULL, 'Congratulations on setting up IQ DefCon!');
