-- MySQL Script generated by MySQL Workbench
-- Wed Apr 28 21:40:29 2021
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema salao_inteligente
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema salao_inteligente
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `salao_inteligente` DEFAULT CHARACTER SET utf8 ;
USE `salao_inteligente` ;

-- -----------------------------------------------------
-- Table `salao_inteligente`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `salao_inteligente`.`usuario` (
  `idUsuario` INT NOT NULL AUTO_INCREMENT,
  `nome_usuario` VARCHAR(255) NOT NULL,
  `senha` INT NOT NULL,
  `login` VARCHAR(45) NOT NULL,
  `data_cadastro` DATE NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `cpf` VARCHAR(12) NOT NULL,
  `telefone` VARCHAR(15) NOT NULL,
  PRIMARY KEY (`idUsuario`),
  UNIQUE INDEX `cpf_UNIQUE` (`cpf` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `salao_inteligente`.`servicos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `salao_inteligente`.`servicos` (
  `idservicos` INT NOT NULL AUTO_INCREMENT,
  `nome_servico` VARCHAR(45) NULL,
  `valor_servico` DECIMAL(3,2) NULL,
  PRIMARY KEY (`idservicos`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `salao_inteligente`.`agendar_servicos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `salao_inteligente`.`agendar_servicos` (
  `idagendar_servicos` INT NOT NULL AUTO_INCREMENT,
  `data_solicitacao` DATE NULL,
  `data_servico` DATE NULL,
  `horas` VARCHAR(6) NULL,
  `usuario` INT NULL,
  `servicos` INT NULL,
  `status` INT NULL,
  PRIMARY KEY (`idagendar_servicos`),
  INDEX `usuario_idx` (`usuario` ASC),
  INDEX `servicos_idx` (`servicos` ASC),
  CONSTRAINT `usuario`
    FOREIGN KEY (`usuario`)
    REFERENCES `salao_inteligente`.`usuario` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `servicos`
    FOREIGN KEY (`servicos`)
    REFERENCES `salao_inteligente`.`servicos` (`idservicos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `salao_inteligente`.`historico_servicos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `salao_inteligente`.`historico_servicos` (
  `idhistorico_servicos` INT NOT NULL AUTO_INCREMENT,
  `idagendar_servicos` INT NULL,
  `data_solicitacao` DATE NULL,
  `data_servico` DATE NULL,
  `servicos` INT NULL,
  `status` INT NULL,
  PRIMARY KEY (`idhistorico_servicos`),
  INDEX `agendar_serviso_idx` (`idagendar_servicos` ASC),
  CONSTRAINT `agendar_servicos`
    FOREIGN KEY (`idagendar_servicos`)
    REFERENCES `salao_inteligente`.`agendar_servicos` (`idagendar_servicos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
