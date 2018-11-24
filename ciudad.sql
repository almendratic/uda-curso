CREATE TABLE `ciudad` (
  `codigo` CHAR(3) NOT NULL PRIMARY KEY,
  `nombre` CHAR(52) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `ciudad` VALUES ('CUE','Cuenca');
INSERT INTO `ciudad` VALUES ('GYE','Guayaquil');
INSERT INTO `ciudad` VALUES ('UIO','Quito');

