CREATE TABLE `usuario` ( 
	`id` INT NOT NULL AUTO_INCREMENT , 
	`nombre` VARCHAR(255) NOT NULL , 
	`email` VARCHAR(255) NOT NULL , 
	`password` VARCHAR(20) NOT NULL , 
	PRIMARY KEY (`id`)
) ENGINE = InnoDB;

INSERT INTO `usuario` (`id`, `nombre`, `email`, `password`) VALUES (NULL, 'Juan Perez', 'juan@perez.com', 'juan123'), (NULL, 'Maria Perez', 'maria@perez.com', 'maria123');
