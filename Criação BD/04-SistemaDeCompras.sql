-- -----------------------------------------------------
-- Table `Site_aulas`.`status_transacoes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Site_aulas`.`status_transacoes`;

CREATE  TABLE IF NOT EXISTS `Site_aulas`.`status_transacoes` (
  `Id` INT NOT NULL AUTO_INCREMENT ,
  `Nome` VARCHAR(10) NOT NULL ,
   PRIMARY KEY (`Id`));
   
 
 -- -----------------------------------------------------
-- Dados padrão da tabela status_transacoes
-- -----------------------------------------------------
INSERT into status_transacoes (nome) values ('Iniciada');

INSERT into status_transacoes (nome) values ('Completada');

INSERT into status_transacoes (nome) values ('Creditada');


-- -----------------------------------------------------
-- Table `Site_aulas`.`transacoes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Site_aulas`.`transacoes`;

CREATE  TABLE IF NOT EXISTS `Site_aulas`.`transacoes` (
	`Id` INT NOT NULL AUTO_INCREMENT ,
	`Usuario_Id` INT NOT NULL ,
	`Valor` REAL NOT NULL,
	`Data` DATETIME NOT NULL ,
	`Status_id` INT NOT NULL ,
	`Transacao_PagSeguro` VARCHAR(10) NOT NULL ,
	PRIMARY KEY (`Id`) ,
	CONSTRAINT `fk_transacao_Usuario`
		FOREIGN KEY (`Usuario_Id` )
			REFERENCES `Site_aulas`.`Usuario` (`Id` ),
	CONSTRAINT `fk_transacoes_status_transacoes`
			FOREIGN KEY (`Status_id` )
			REFERENCES `Site_aulas`.`status_transacoes` (`Id`)
   )
   
   -- -----------------------------------------------------
-- Table `Site_aulas`.`creditos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Site_aulas`.`creditos`;

CREATE  TABLE IF NOT EXISTS `Site_aulas`.`creditos` (
	`Id` INT NOT NULL AUTO_INCREMENT ,
	`Usuario_Id` INT NOT NULL ,
	`Valor` REAL NOT NULL,
	`Saldo_atual` REAL NOT NULL,
	`Data` DATE NOT NULL ,
	`Tipo_transacao` BIT NOT NULL ,
	PRIMARY KEY (`Id`) ,
	CONSTRAINT `fk_creditos_Usuario`
		FOREIGN KEY (`Usuario_Id` )
			REFERENCES `Site_aulas`.`Usuario` (`Id` )
)