CREATE SCHEMA `agenda` DEFAULT CHARACTER SET utf8mb4 ;
USE agenda;
CREATE TABLE `agenda`.`t_categorias` (
  `id_categoria` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(255) NULL,
  `descripcion` TEXT NULL,
  `fechaInsert` DATETIME NOT NULL DEFAULT now(),
  PRIMARY KEY (`id_categoria`));
CREATE TABLE `agenda`.`t_contactos` (
  `id_agenda` INT NOT NULL AUTO_INCREMENT,
  `id_categoria` INT NOT NULL,
  `nombre` VARCHAR(255) NULL,
  `paterno` VARCHAR(255) NULL,
  `materno` VARCHAR(255) NULL,
  `telefono` VARCHAR(255) NULL,
  `email` VARCHAR(255) NULL,
  `fechaInsert` DATETIME NOT NULL DEFAULT now(),
  PRIMARY KEY (`id_agenda`));
ALTER TABLE `agenda`.`t_contactos` 
ADD INDEX `fkContactoCategoria_idx` (`id_categoria` ASC);
;
ALTER TABLE `agenda`.`t_contactos` 
ADD CONSTRAINT `fkContactoCategoria`
  FOREIGN KEY (`id_categoria`)
  REFERENCES `agenda`.`t_categorias` (`id_categoria`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;