CREATE TABLE `presidente` (
  `codigo` CHAR(2) NOT NULL PRIMARY KEY,
  `nombre` CHAR(52) NOT NULL,
  `anio` INT(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `presidente` VALUES ('SD','Sixto Durán Ballén',1992);
INSERT INTO `presidente` VALUES ('AB','Abdalá Bucaram Ortiz',1996);
INSERT INTO `presidente` VALUES ('RA','Rosalía Arteaga Serrano',1996);
INSERT INTO `presidente` VALUES ('FA','Fabián Alarcón Rivera',1997);
INSERT INTO `presidente` VALUES ('JM','Jamil Mahuad Witt',1998);
INSERT INTO `presidente` VALUES ('GN','Gustavo Noboa Bejarano',1998);
INSERT INTO `presidente` VALUES ('LG','Lucio Gutiérrez Borbúa',2003);
INSERT INTO `presidente` VALUES ('AP','Alfredo Palacio González',2003);
INSERT INTO `presidente` VALUES ('RC','Rafael Correa Delgado',2007);
INSERT INTO `presidente` VALUES ('LM','Lenín Moreno Garcés',2017);
