SET FOREIGN_KEY_CHECKS=0;

DROP DATABASE IF EXISTS `consultas_materias`;

CREATE DATABASE `consultas_materias`
    CHARACTER SET 'utf8'
    COLLATE 'utf8_general_ci';

USE `consultas_materias`;


DROP TABLE IF EXISTS `alumnos`;

CREATE TABLE `alumnos` (
  `legajo` int(6) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `email` varchar(50) default NULL,
  PRIMARY KEY  (`legajo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `profesores`;

CREATE TABLE `profesores` (
  `legajo` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `email` varchar(50) default NULL,
  `contrasenia` varchar(20) NOT NULL,
  PRIMARY KEY  (`legajo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `materias`;

CREATE TABLE `materias` (
  `id` int(11) NOT NULL,
  `nombre_materia` char(20) NOT NULL,
  `comision` varchar(5) default NULL,
  `anio` int(5) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `consultas`;

CREATE TABLE `consultas` (
  `id` int NOT NULL,
  `fecha_consulta` date DEFAULT NULL,
  `hora_consulta` time DEFAULT NULL,
  `cupo` int DEFAULT NULL,
  `id_Alumno` int DEFAULT NULL,
  `id_Profesor` int NOT NULL,
  `id_Materias` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Materias_Consultas_idx` (`id_Materias`),
  KEY `Alumno_Consultas_idx` (`id_Alumno`),
  KEY `Profesores_Consultas_idx` (`id_Profesor`),
  CONSTRAINT `Alumno_Consultas` FOREIGN KEY (`id_Alumno`) REFERENCES `alumnos` (`legajo`),
  CONSTRAINT `Materias_Consultas` FOREIGN KEY (`id_Materias`) REFERENCES `materias` (`id`),
  CONSTRAINT `Profesores_Consultas` FOREIGN KEY (`id_Profesor`) REFERENCES `profesores` (`legajo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;


INSERT INTO `alumnos` (`legajo`, `nombre`, `apellido`, `email`) VALUES
  (45185 ,'Aldana','Munoz','munozbaldana@gmail.com'),
  (45781 ,'Franco','Gaytan','gaytanfranco@gmail.com'),
  (45728 ,'Federico','Navos','fedenavos@gmail.com'),
  (10101010,'Ruben','Dario','rdario@gmail.com'),
  (11111111,'Casimiro','Cegado','casimirocegado9B@yahoo.com.ar'),
  (12121212,'Maria','Asquerino','masqu@gmail.com'),
  (13131313,'Antoine de','Saint-Exupery','anto_saex@gmail.com'),
  (14141414,'Jose','Echegaray','joseche@uol.com'),
  (15151515,'Isabel','Gemio','igemio@yahoo.com.ar'),
  (16161616,'Gertrudis','Gomez de Avellaneda','gertygomez@gmail.com'),
  (17171717,'Ana Maria','Matute','ana_m_matute@gmail.com'),
  (18181818,'Victor','Montenegro','v_monte_negro@hotmail.com'),
  (19191919,'Blaise','Pascal','blaise@pascal.com.ar'),
  (20202020,'Bella','Abzug','babzug333@yahoo.com');
COMMIT;


INSERT INTO `profesores` (`legajo`, `nombre`, `apellido`, `email`,`contrasenia`) VALUE
  (20101020,'Ruben','Dario','rdario@gmail.com','111111'),
  (22222222,'Daniela','Díaz','a@yahoo.com.ar','111112'),
  (22121222,'Maria','Asquerino','m@gmail.com','111113'),
  (23131323,'Antoine de','Saint-Exupery','l@gmail.com','111114'),
  (24141424,'Mario ','Bressano','joseche@uol.com','111115'),
  (25151525,'Isabel','Gemio','igemio@yahoo.com.ar','111116'),
  (26161626,'Adrian','Meca','am@gmail.com','111117'),
  (27171727,'Ana Maria','Matute','ana_m_matute@gmail.com','111118'),
  (28181828,'Victor','Montenegro','v_monte_negro@hotmail.com','111119');
COMMIT;


INSERT INTO `materias` (`id`, `nombre_materia`, `comision`, `anio`) VALUE
  (19,'Comunicaciones','305','3'),
  (44,'Entornos graficos','4E1','4'),
  (25,'Redes','404','4'),
  (28,'Simulacion','402','4'),
  (11,'Fisica II','204','2'),
  (18,'Diseño de sistemas','301','3'),
  (27,'Investigación operativa','401','4');
COMMIT;


INSERT INTO `consultas` (`id`, `fecha_consulta`, `hora_consulta`, `cupo`, `id_Alumno`, `id_Profesor`,`id_Materias`) VALUES
  ('11111','2021-12-01','13:30:00',10,'45781','22222222','44'),
  ('22222','2021-12-16','09:30:00',10,NULL,'26161626','25'),
  ('33333','2021-12-14','17:00:00',5,NULL,'20101020','25'),
  ('44444','2021-12-02','19:30:00',6,'45185','24141424','11'),
  ('55555','2021-12-23','12:00:00',10,'45728','26161626','19'),
  ('66666','2022-02-27','18:00:00',5,'13131313','22222222','44'),
  ('77777','2021-11-12','08:30:00',10,'45728','20101020','28'),
  ('88888','2022-02-16','10:00:00',6,'45185','28181828','18'),
  ('99999','2021-12-10','14:30:00',10,NULL,'24141424','11');

COMMIT;


