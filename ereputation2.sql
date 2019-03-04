-- MySQL Script generated by MySQL Workbench
-- Mon Mar  4 11:32:46 2019
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema eruputation
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema eruputation
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `eruputation` DEFAULT CHARACTER SET utf8 ;
USE `eruputation` ;

-- -----------------------------------------------------
-- Table `eruputation`.`user`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `eruputation`.`user` ;

CREATE TABLE IF NOT EXISTS `eruputation`.`user` (
  `iduser` INT NOT NULL AUTO_INCREMENT,
  `userfirstname` VARCHAR(45) NULL,
  `userlastname` VARCHAR(45) NULL,
  `useremail` VARCHAR(45) NULL,
  `userpassword` VARCHAR(45) NOT NULL,
  `userlogin` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`iduser`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `eruputation`.`socialnetworks`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `eruputation`.`socialnetworks` ;

CREATE TABLE IF NOT EXISTS `eruputation`.`socialnetworks` (
  `idsocialnetwork` INT NOT NULL AUTO_INCREMENT,
  `socialnetworkname` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idsocialnetwork`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `eruputation`.`e-commerces`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `eruputation`.`e-commerces` ;

CREATE TABLE IF NOT EXISTS `eruputation`.`e-commerces` (
  `ide-commerce` INT NOT NULL AUTO_INCREMENT,
  `e-commercename` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`ide-commerce`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `eruputation`.`commandes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `eruputation`.`commandes` ;

CREATE TABLE IF NOT EXISTS `eruputation`.`commandes` (
  `idcommande` INT NOT NULL AUTO_INCREMENT,
  `commandeclient` VARCHAR(45) NOT NULL,
  `commandedate` DATE NOT NULL,
  `commandeprix` VARCHAR(45) NOT NULL,
  `commandequantite` VARCHAR(45) NOT NULL,
  `e-commerces_ide-commerce` INT NOT NULL,
  PRIMARY KEY (`idcommande`),
  CONSTRAINT `fk_commandes_e-commerces1`
    FOREIGN KEY (`e-commerces_ide-commerce`)
    REFERENCES `eruputation`.`e-commerces` (`ide-commerce`)
    ON DELETE NO ACTION
    ON UPDATE CASCADE)
ENGINE = InnoDB;

CREATE INDEX `fk_commandes_e-commerces1_idx` ON `eruputation`.`commandes` (`e-commerces_ide-commerce` ASC) VISIBLE;


-- -----------------------------------------------------
-- Table `eruputation`.`connectionsocialnetwork`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `eruputation`.`connectionsocialnetwork` ;

CREATE TABLE IF NOT EXISTS `eruputation`.`connectionsocialnetwork` (
  `idconnection` INT NOT NULL AUTO_INCREMENT,
  `connectionlogin` VARCHAR(45) NOT NULL,
  `connectionpassword` VARCHAR(45) NOT NULL,
  `user_iduser` INT NOT NULL,
  `socialnetworks_idsocialnetwork` INT NOT NULL,
  PRIMARY KEY (`idconnection`),
  CONSTRAINT `fk_connection_user1`
    FOREIGN KEY (`user_iduser`)
    REFERENCES `eruputation`.`user` (`iduser`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_connection_socialnetworks1`
    FOREIGN KEY (`socialnetworks_idsocialnetwork`)
    REFERENCES `eruputation`.`socialnetworks` (`idsocialnetwork`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;

CREATE INDEX `fk_connection_user1_idx` ON `eruputation`.`connectionsocialnetwork` (`user_iduser` ASC) VISIBLE;

CREATE INDEX `fk_connection_socialnetworks1_idx` ON `eruputation`.`connectionsocialnetwork` (`socialnetworks_idsocialnetwork` ASC) VISIBLE;


-- -----------------------------------------------------
-- Table `eruputation`.`connectionecommerce`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `eruputation`.`connectionecommerce` ;

CREATE TABLE IF NOT EXISTS `eruputation`.`connectionecommerce` (
  `idconnection` INT NOT NULL AUTO_INCREMENT,
  `connectionlogin` VARCHAR(45) NOT NULL,
  `connectionpassword` VARCHAR(45) NOT NULL,
  `user_iduser` INT NOT NULL,
  `e-commerces_ide-commerce` INT NOT NULL,
  `connectionecommercecol` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idconnection`),
  CONSTRAINT `fk_connectionecommerce_user1`
    FOREIGN KEY (`user_iduser`)
    REFERENCES `eruputation`.`user` (`iduser`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_connectionecommerce_e-commerces1`
    FOREIGN KEY (`e-commerces_ide-commerce`)
    REFERENCES `eruputation`.`e-commerces` (`ide-commerce`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;

CREATE INDEX `fk_connectionecommerce_user1_idx` ON `eruputation`.`connectionecommerce` (`user_iduser` ASC) VISIBLE;

CREATE INDEX `fk_connectionecommerce_e-commerces1_idx` ON `eruputation`.`connectionecommerce` (`e-commerces_ide-commerce` ASC) VISIBLE;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
