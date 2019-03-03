-- MySQL Script generated by MySQL Workbench
-- Fri Mar  1 16:21:06 2019
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema ereputation
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema ereputation
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `ereputation` DEFAULT CHARACTER SET utf8 ;
SHOW WARNINGS;
USE `ereputation` ;

-- -----------------------------------------------------
-- Table `ereputation`.`user`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ereputation`.`user` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `ereputation`.`user` (
  `iduser` INT NOT NULL AUTO_INCREMENT,
  `userfirstname` VARCHAR(45) NULL,
  `userlastname` VARCHAR(45) NULL,
  `useremail` VARCHAR(45) NULL,
  `userpassword` VARCHAR(45) NOT NULL,
  `userlogin` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`iduser`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `ereputation`.`socialnetworks`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ereputation`.`socialnetworks` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `ereputation`.`socialnetworks` (
  `idsocialnetwork` INT NOT NULL AUTO_INCREMENT,
  `socialnetworkname` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idsocialnetwork`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `ereputation`.`e-commerces`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ereputation`.`e-commerces` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `ereputation`.`e-commerces` (
  `ide-commerce` INT NOT NULL AUTO_INCREMENT,
  `e-commercename` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`ide-commerce`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `ereputation`.`commandes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ereputation`.`commandes` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `ereputation`.`commandes` (
  `idcommande` INT NOT NULL AUTO_INCREMENT,
  `commandeclient` VARCHAR(45) NOT NULL,
  `commandedate` DATE NOT NULL,
  `commandeprix` VARCHAR(45) NOT NULL,
  `commandequantite` VARCHAR(45) NOT NULL,
  `e-commerces_ide-commerce` INT NOT NULL,
  PRIMARY KEY (`idcommande`),
  CONSTRAINT `fk_commandes_e-commerces1`
    FOREIGN KEY (`e-commerces_ide-commerce`)
    REFERENCES `ereputation`.`e-commerces` (`ide-commerce`)
    ON DELETE NO ACTION
    ON UPDATE CASCADE)
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `fk_commandes_e-commerces1_idx` ON `ereputation`.`commandes` (`e-commerces_ide-commerce` ASC) VISIBLE;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `ereputation`.`connectionsocialnetwork`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ereputation`.`connectionsocialnetwork` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `ereputation`.`connectionsocialnetwork` (
  `idconnection` INT NOT NULL AUTO_INCREMENT,
  `connectionlogin` VARCHAR(45) NOT NULL,
  `connectionpassword` VARCHAR(45) NOT NULL,
  `user_iduser` INT NOT NULL,
  `socialnetworks_idsocialnetwork` INT NOT NULL,
  PRIMARY KEY (`idconnection`),
  CONSTRAINT `fk_connection_user1`
    FOREIGN KEY (`user_iduser`)
    REFERENCES `ereputation`.`user` (`iduser`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_connection_socialnetworks1`
    FOREIGN KEY (`socialnetworks_idsocialnetwork`)
    REFERENCES `ereputation`.`socialnetworks` (`idsocialnetwork`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `fk_connection_user1_idx` ON `ereputation`.`connectionsocialnetwork` (`user_iduser` ASC) VISIBLE;

SHOW WARNINGS;
CREATE INDEX `fk_connection_socialnetworks1_idx` ON `ereputation`.`connectionsocialnetwork` (`socialnetworks_idsocialnetwork` ASC) VISIBLE;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `ereputation`.`connectionecommerce`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ereputation`.`connectionecommerce` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `ereputation`.`connectionecommerce` (
  `idconnection` INT NOT NULL AUTO_INCREMENT,
  `connectionlogin` VARCHAR(45) NOT NULL,
  `connectionpassword` VARCHAR(45) NOT NULL,
  `user_iduser` INT NOT NULL,
  `e-commerces_ide-commerce` INT NOT NULL,
  `connectionecommercecol` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idconnection`),
  CONSTRAINT `fk_connectionecommerce_user1`
    FOREIGN KEY (`user_iduser`)
    REFERENCES `ereputation`.`user` (`iduser`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_connectionecommerce_e-commerces1`
    FOREIGN KEY (`e-commerces_ide-commerce`)
    REFERENCES `ereputation`.`e-commerces` (`ide-commerce`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `fk_connectionecommerce_user1_idx` ON `ereputation`.`connectionecommerce` (`user_iduser` ASC) VISIBLE;

SHOW WARNINGS;
CREATE INDEX `fk_connectionecommerce_e-commerces1_idx` ON `ereputation`.`connectionecommerce` (`e-commerces_ide-commerce` ASC) VISIBLE;

SHOW WARNINGS;
USE `ereputation` ;


SHOW WARNINGS;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
