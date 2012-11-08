SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `Site_aulas` ;
CREATE SCHEMA IF NOT EXISTS `Site_aulas` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `Site_aulas` ;

-- -----------------------------------------------------
-- Table `Site_aulas`.`Nivel Curso`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Site_aulas`.`Nivel Curso` ;

CREATE  TABLE IF NOT EXISTS `Site_aulas`.`Nivel Curso` (
  `Id` INT NOT NULL AUTO_INCREMENT ,
  `Nivel` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`Id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Site_aulas`.`Curso`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Site_aulas`.`Curso` ;

CREATE  TABLE IF NOT EXISTS `Site_aulas`.`Curso` (
  `Id` INT NOT NULL AUTO_INCREMENT ,
  `Nome` VARCHAR(45) NOT NULL ,
  `Nivel Curso_Id` INT NOT NULL ,
  PRIMARY KEY (`Id`) ,
  INDEX `fk_Curso_Nivel Curso1_idx` (`Nivel Curso_Id` ASC) ,
  CONSTRAINT `fk_Curso_Nivel Curso1`
    FOREIGN KEY (`Nivel Curso_Id` )
    REFERENCES `Site_aulas`.`Nivel Curso` (`Id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Site_aulas`.`Usuario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Site_aulas`.`Usuario` ;

CREATE  TABLE IF NOT EXISTS `Site_aulas`.`Usuario` (
  `Id` INT NOT NULL ,
  `Nome` VARCHAR(45) NOT NULL ,
  `DN` DATE NOT NULL ,
  `CPF` VARCHAR(15) NOT NULL ,
  `Email` VARCHAR(45) NOT NULL ,
  `Senha` VARCHAR(45) NOT NULL ,
  `Senha_temp` VARCHAR(45) NOT NULL ,
  `Data_exp` DATETIME NOT NULL ,
  `RG` VARCHAR(20) NOT NULL ,
  `Sobrenome` VARCHAR(45) NOT NULL ,
  `Sexo` BINARY NOT NULL ,
  `Pais` VARCHAR(45) NOT NULL ,
  `UF` VARCHAR(45) NOT NULL ,
  `CEP` VARCHAR(10) NOT NULL ,
  `Cidade` VARCHAR(45) NOT NULL ,
  `Endereço` VARCHAR(145) NOT NULL ,
  `Complemento` VARCHAR(45) NOT NULL ,
  `Bairro` VARCHAR(45) NOT NULL ,
  `Telefone` INT NOT NULL ,
  `Celular` INT NOT NULL ,
  `Banco` VARCHAR(45) NOT NULL ,
  `Agencia` VARCHAR(45) NOT NULL ,
  `CC` VARCHAR(45) NOT NULL ,
  `Usuario` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`Id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Site_aulas`.`Aluno`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Site_aulas`.`Aluno` ;

CREATE  TABLE IF NOT EXISTS `Site_aulas`.`Aluno` (
  `Id` INT NOT NULL AUTO_INCREMENT ,
  `Usuario_Id` INT NOT NULL ,
  PRIMARY KEY (`Id`) ,
  INDEX `fk_Aluno_Usuario1_idx` (`Usuario_Id` ASC) ,
  CONSTRAINT `fk_Aluno_Usuario1`
    FOREIGN KEY (`Usuario_Id` )
    REFERENCES `Site_aulas`.`Usuario` (`Id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Site_aulas`.`Professor`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Site_aulas`.`Professor` ;

CREATE  TABLE IF NOT EXISTS `Site_aulas`.`Professor` (
  `Id` INT NOT NULL AUTO_INCREMENT ,
  `Usuario_Id` INT NOT NULL ,
  PRIMARY KEY (`Id`) ,
  INDEX `fk_Professor_Usuario1_idx` (`Usuario_Id` ASC) ,
  CONSTRAINT `fk_Professor_Usuario1`
    FOREIGN KEY (`Usuario_Id` )
    REFERENCES `Site_aulas`.`Usuario` (`Id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Site_aulas`.`Curso_Professor`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Site_aulas`.`Curso_Professor` ;

CREATE  TABLE IF NOT EXISTS `Site_aulas`.`Curso_Professor` (
  `Id` INT NOT NULL AUTO_INCREMENT ,
  `Curso_Id` INT NOT NULL ,
  `Professor_Id` INT NOT NULL ,
  PRIMARY KEY (`Id`) ,
  INDEX `fk_Curso_has_Professor_Professor1_idx` (`Professor_Id` ASC) ,
  INDEX `fk_Curso_has_Professor_Curso1_idx` (`Curso_Id` ASC) ,
  CONSTRAINT `fk_Curso_has_Professor_Curso1`
    FOREIGN KEY (`Curso_Id` )
    REFERENCES `Site_aulas`.`Curso` (`Id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Curso_has_Professor_Professor1`
    FOREIGN KEY (`Professor_Id` )
    REFERENCES `Site_aulas`.`Professor` (`Id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Site_aulas`.`Aula`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Site_aulas`.`Aula` ;

CREATE  TABLE IF NOT EXISTS `Site_aulas`.`Aula` (
  `Id` INT NOT NULL AUTO_INCREMENT ,
  `Curso_Id` INT NOT NULL ,
  `Aluno_Id` INT NOT NULL ,
  `Professor_Id` INT NOT NULL ,
  `Nome` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`Id`) ,
  INDEX `fk_Aula_Curso1_idx` (`Curso_Id` ASC) ,
  INDEX `fk_Aula_Aluno1_idx` (`Aluno_Id` ASC) ,
  INDEX `fk_Aula_Professor1_idx` (`Professor_Id` ASC) ,
  CONSTRAINT `fk_Aula_Curso1`
    FOREIGN KEY (`Curso_Id` )
    REFERENCES `Site_aulas`.`Curso` (`Id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Aula_Aluno1`
    FOREIGN KEY (`Aluno_Id` )
    REFERENCES `Site_aulas`.`Aluno` (`Id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Aula_Professor1`
    FOREIGN KEY (`Professor_Id` )
    REFERENCES `Site_aulas`.`Professor` (`Id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Site_aulas`.`Aluno_Curso`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Site_aulas`.`Aluno_Curso` ;

CREATE  TABLE IF NOT EXISTS `Site_aulas`.`Aluno_Curso` (
  `Id` INT NOT NULL AUTO_INCREMENT ,
  `Aluno_Id` INT NOT NULL ,
  `Curso_Id` INT NOT NULL ,
  PRIMARY KEY (`Id`) ,
  INDEX `fk_Aluno_has_Curso_Curso1_idx` (`Curso_Id` ASC) ,
  INDEX `fk_Aluno_has_Curso_Aluno1_idx` (`Aluno_Id` ASC) ,
  CONSTRAINT `fk_Aluno_has_Curso_Aluno1`
    FOREIGN KEY (`Aluno_Id` )
    REFERENCES `Site_aulas`.`Aluno` (`Id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Aluno_has_Curso_Curso1`
    FOREIGN KEY (`Curso_Id` )
    REFERENCES `Site_aulas`.`Curso` (`Id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Site_aulas`.`Avaliacao`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Site_aulas`.`Avaliacao` ;

CREATE  TABLE IF NOT EXISTS `Site_aulas`.`Avaliacao` (
  `Id` INT NOT NULL ,
  `Nota` INT NOT NULL ,
  `Descricao` VARCHAR(45) NOT NULL ,
  `Data` DATE NOT NULL ,
  `Aula_Id` INT NOT NULL ,
  PRIMARY KEY (`Id`) ,
  INDEX `fk_Avaliação_Aula1_idx` (`Aula_Id` ASC) ,
  CONSTRAINT `fk_Avaliação_Aula1`
    FOREIGN KEY (`Aula_Id` )
    REFERENCES `Site_aulas`.`Aula` (`Id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
