-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.0.19-nt


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema hotel_plaza
--

CREATE DATABASE IF NOT EXISTS hotel_plaza;
USE hotel_plaza;

--
-- Definition of table `cargo`
--

DROP TABLE IF EXISTS `cargo`;
CREATE TABLE `cargo` (
  `id` varchar(45) NOT NULL,
  `nombre_cargo` varchar(45) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cargo`
--

/*!40000 ALTER TABLE `cargo` DISABLE KEYS */;
INSERT INTO `cargo` (`id`,`nombre_cargo`) VALUES 
 ('1','ADMINISTRADOR'),
 ('2','USUARIO');
/*!40000 ALTER TABLE `cargo` ENABLE KEYS */;


--
-- Definition of table `ciudad`
--

DROP TABLE IF EXISTS `ciudad`;
CREATE TABLE `ciudad` (
  `id` varchar(45) NOT NULL,
  `nombre_ciudad` text NOT NULL,
  `id_provincia` varchar(45) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `FK_ciudad_provincia` (`id_provincia`),
  CONSTRAINT `FK_ciudad_provincia` FOREIGN KEY (`id_provincia`) REFERENCES `provincia` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ciudad`
--

/*!40000 ALTER TABLE `ciudad` DISABLE KEYS */;
/*!40000 ALTER TABLE `ciudad` ENABLE KEYS */;


--
-- Definition of table `clave`
--

DROP TABLE IF EXISTS `clave`;
CREATE TABLE `clave` (
  `id` varchar(45) NOT NULL,
  `id_usuario` varchar(45) NOT NULL,
  `clave` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `FK_clave_usuario` (`id_usuario`),
  CONSTRAINT `FK_clave_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clave`
--

/*!40000 ALTER TABLE `clave` DISABLE KEYS */;
/*!40000 ALTER TABLE `clave` ENABLE KEYS */;


--
-- Definition of table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE `cliente` (
  `id` varchar(45) NOT NULL,
  `nombre_cliente` text NOT NULL,
  `apellido_cliente` text NOT NULL,
  `tipo_identificacion` text NOT NULL,
  `identificacion` text NOT NULL,
  `direccion` text NOT NULL,
  `telefono` text NOT NULL,
  `celular` text NOT NULL,
  `email` text NOT NULL,
  `extranjero` varchar(45) NOT NULL,
  `id_ciudad` varchar(45) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `FK_cliente_ciudad` (`id_ciudad`),
  CONSTRAINT `FK_cliente_ciudad` FOREIGN KEY (`id_ciudad`) REFERENCES `ciudad` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cliente`
--

/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;


--
-- Definition of table `habitacion`
--

DROP TABLE IF EXISTS `habitacion`;
CREATE TABLE `habitacion` (
  `id` varchar(45) NOT NULL,
  `id_tipo_habitacion` varchar(45) NOT NULL,
  `nro_personas` varchar(45) NOT NULL,
  `nro_habitacion` varchar(45) NOT NULL,
  `descripcion` text NOT NULL,
  `estado` int(10) unsigned NOT NULL,
  `fecha` datetime NOT NULL,
  `id_hotel` varchar(45) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `FK_habitacion_tipo_habitacion` (`id_tipo_habitacion`),
  KEY `FK_habitacion_hotel` (`id_hotel`),
  CONSTRAINT `FK_habitacion_hotel` FOREIGN KEY (`id_hotel`) REFERENCES `hotel` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_habitacion_tipo_habitacion` FOREIGN KEY (`id_tipo_habitacion`) REFERENCES `tipo_habitacion` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `habitacion`
--

/*!40000 ALTER TABLE `habitacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `habitacion` ENABLE KEYS */;


--
-- Definition of table `habitacion_imagen`
--

DROP TABLE IF EXISTS `habitacion_imagen`;
CREATE TABLE `habitacion_imagen` (
  `id` varchar(45) NOT NULL,
  `imagen` varchar(45) NOT NULL,
  `estado` int(10) unsigned NOT NULL,
  `id_habitacion` varchar(45) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `FK_habitacion_imagen_habitacion` (`id_habitacion`),
  CONSTRAINT `FK_habitacion_imagen_habitacion` FOREIGN KEY (`id_habitacion`) REFERENCES `habitacion` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `habitacion_imagen`
--

/*!40000 ALTER TABLE `habitacion_imagen` DISABLE KEYS */;
/*!40000 ALTER TABLE `habitacion_imagen` ENABLE KEYS */;


--
-- Definition of table `hotel`
--

DROP TABLE IF EXISTS `hotel`;
CREATE TABLE `hotel` (
  `id` varchar(45) NOT NULL,
  `nombre_hotel` text NOT NULL,
  `direccion` text NOT NULL,
  `telefono` text NOT NULL,
  `imagen` text NOT NULL,
  `celular` varchar(45) NOT NULL,
  `web` text NOT NULL,
  `estado` int(10) unsigned NOT NULL,
  `fecha` datetime NOT NULL,
  `id_ciudad` varchar(45) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `FK_hotel_ciudad` (`id_ciudad`),
  CONSTRAINT `FK_hotel_ciudad` FOREIGN KEY (`id_ciudad`) REFERENCES `ciudad` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

/*!40000 ALTER TABLE `hotel` DISABLE KEYS */;
/*!40000 ALTER TABLE `hotel` ENABLE KEYS */;


--
-- Definition of table `notas`
--

DROP TABLE IF EXISTS `notas`;
CREATE TABLE `notas` (
  `id` varchar(45) NOT NULL,
  `id_cliente` varchar(45) NOT NULL,
  `descripcion` text NOT NULL,
  `fecha` datetime NOT NULL,
  `estado` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `FK_notas_cliente` (`id_cliente`),
  CONSTRAINT `FK_notas_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notas`
--

/*!40000 ALTER TABLE `notas` DISABLE KEYS */;
/*!40000 ALTER TABLE `notas` ENABLE KEYS */;


--
-- Definition of table `pais`
--

DROP TABLE IF EXISTS `pais`;
CREATE TABLE `pais` (
  `id` varchar(45) NOT NULL,
  `codigo` text NOT NULL,
  `nombre_pais` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pais`
--

/*!40000 ALTER TABLE `pais` DISABLE KEYS */;
INSERT INTO `pais` (`id`,`codigo`,`nombre_pais`) VALUES 
 ('1','(+93)','Afganistán'),
 ('10','(+213)','Argelia'),
 ('100','(+61)','Islas Cocos'),
 ('101','(+682)','Islas Cook'),
 ('102','(+298)','Islas Feroe'),
 ('103','(+679)','Islas Fiji'),
 ('104','(+500)','Islas Malvinas'),
 ('105','(1+)','Islas Marianas del Norte'),
 ('106','(+692)','Islas Marshall'),
 ('107','(+1)','Islas menores alejadas de los Estados Unidos'),
 ('108','(+77)','Islas Salomón'),
 ('109','(+1)','Islas Turcas y Caicos'),
 ('11','(+54)','Argentina'),
 ('110','(+1)','Islas Vírgenes Británicas'),
 ('111','(+1)','Islas Vírgenes, EE.UU.'),
 ('112','(+972)','Israel'),
 ('113','(+39)','Italia'),
 ('114','(+1)','Jamaica'),
 ('115','(+47)','Jan Mayen'),
 ('116','(+81)','Japón'),
 ('117','(+44)','Jersey'),
 ('118','(+962)','Jordania'),
 ('119','(+7)','Kazajistán'),
 ('12','(+374)','Armenia'),
 ('120','(+254)','Kenia'),
 ('121','(+996)','Kirguistán'),
 ('122','(+686)','Kiribati'),
 ('123','(+965)','Kuwait'),
 ('124','(+856)','Laos'),
 ('125','(+1)','Las Bahamas');
INSERT INTO `pais` (`id`,`codigo`,`nombre_pais`) VALUES 
 ('126','(+266)','Lesoto'),
 ('127','(+371)','Letonia'),
 ('128','(+961)','Líbano'),
 ('129','(+231)','Liberia'),
 ('13','(+297)','Aruba'),
 ('130','(+218)','Libia'),
 ('131','(+423)','Liechtenstein'),
 ('132','(+370)','Lituania'),
 ('133','(+352)','Luxemburgo'),
 ('134','(+853)','Macao RAE'),
 ('135','(+261)','Madagascar'),
 ('136','(+60)','Malasia'),
 ('137','(+265)','Malawi'),
 ('138','(+960)','Maldivas'),
 ('139','(+223)','Malí'),
 ('14','(+61)','Australia'),
 ('140','(+356)','Malta'),
 ('141','(+212)','Marruecos'),
 ('142','(+596)','Martinica'),
 ('143','(+230)','Mauricio'),
 ('144','(+222)','Mauritania'),
 ('145','(+262)','Mayotte'),
 ('146','(+52)','México'),
 ('147','(+691)','Micronesia'),
 ('148','(+373)','Moldova'),
 ('149','(+377)','Mónaco'),
 ('15','(+43)','Austria'),
 ('150','(+976)','Mongolia'),
 ('151','(+382)','Montenegro'),
 ('152','(+1)','Montserrat'),
 ('153','(+258)','Mozambique'),
 ('154','(+95)','Myanmar'),
 ('155','(+264)','Namibia');
INSERT INTO `pais` (`id`,`codigo`,`nombre_pais`) VALUES 
 ('156','(+674)','Nauru'),
 ('157','(+977)','Nepal'),
 ('158','(+505)','Nicaragua'),
 ('159','(+227)','Níger'),
 ('16','(+970)','Autoridad Palestina'),
 ('160','(+234)','Nigeria'),
 ('161','(+683)','Niue'),
 ('162','(+47)','Noruega'),
 ('163','(+687)','Nueva Caledonia'),
 ('164','(+64)','Nueva Zelanda'),
 ('165','(+968)','Omán'),
 ('166','(+31)','Países Bajos'),
 ('167','(+92)','Pakistán'),
 ('168','(+680)','Palaos'),
 ('169','(+507)','Panamá'),
 ('17','(+972)','Autoridad Palestina'),
 ('170','(+675)','Papúa Nueva Guinea'),
 ('171','(+595)','Paraguay'),
 ('172','(+51)','Perú'),
 ('173','(+689)','Polinesia Francesa'),
 ('174','(+48)','Polonia'),
 ('175','(+351)','Portugal'),
 ('176','(+974)','Qatar'),
 ('177','(+973)','Reino de Baréin'),
 ('178','(+44)','Reino Unido'),
 ('179','(+236)','República Centroafricana'),
 ('18','(+994)','Azerbaiyán'),
 ('180','(+420)','República Checa'),
 ('181','(+242)','República del Congo'),
 ('182','(+1)','República Dominicana');
INSERT INTO `pais` (`id`,`codigo`,`nombre_pais`) VALUES 
 ('183','(+262)','Reunión'),
 ('184','(+250)','Ruanda'),
 ('185','(+40)','Rumania'),
 ('186','(+7)','Rusia'),
 ('187','(+1)','Saint Kitts y Nevis'),
 ('188','(+685)','Samoa'),
 ('189','(+378)','San Marino'),
 ('19','(+880)','Bangladesh'),
 ('190','(+508)','San Pedro y Miquelón'),
 ('191','(+1)','San Vicente y las Granadinas'),
 ('192','(+290)','Santa Elena, Ascensión y Tristán de Acuña'),
 ('193','(+1)','Santa Lucía'),
 ('194','(Ciudad del Vaticano)','Santa Sede'),
 ('195','(+239)','Santo Tomé y Príncipe'),
 ('196','(+221)','Senegal'),
 ('197','(+381)','Serbia'),
 ('198','(+248)','Seychelles'),
 ('199','(+232)','Sierra Leona'),
 ('2','(+355)','Albania'),
 ('20','(+1)','Barbados'),
 ('200','(+65)','Singapur'),
 ('201','(+963)','Siria'),
 ('202','(+252)','Somalia'),
 ('203','(+94)','Sri Lanka'),
 ('204','(+268)','Suazilandia'),
 ('205','(+27)','Sudáfrica'),
 ('206','(+249)','Sudán'),
 ('207','(+46)','Suecia'),
 ('208','(+41)','Suiza'),
 ('209','(+597)','Surinam');
INSERT INTO `pais` (`id`,`codigo`,`nombre_pais`) VALUES 
 ('21','(+375)','Belarús'),
 ('210','(+66)','Tailandia'),
 ('211','(+886)','Taiwán'),
 ('212','(+255)','Tanzania'),
 ('213','(+992)','Tayikistán'),
 ('214','(+44)','Territorio Británico del Océano Índico'),
 ('215','(+670)','Timor-Leste'),
 ('216','(+228)','Togo'),
 ('217','(+690)','Tokelau'),
 ('218','(+676)','Tonga'),
 ('219','(+1)','Trinidad y Tobago'),
 ('22','(+32)','Bélgica'),
 ('220','(+290)','Tristán da Cunha'),
 ('221','(+216)','Túnez'),
 ('222','(+993)','Turkmenistán'),
 ('223','(+60)','Turquía'),
 ('224','(+688)','Tuvalu'),
 ('225','(+380)','Ucrania'),
 ('226','(+256)','Uganda'),
 ('227','(+598)','Uruguay'),
 ('228','(+998)','Uzbekistán'),
 ('229','(+678)','Vanuatu'),
 ('23','(+501)','Belice'),
 ('230','(+58)','Venezuela'),
 ('231','(+84)','Vietnam'),
 ('232','(+681)','Wallis y Futuna'),
 ('233','(+967)','Yemen'),
 ('234','(+253)','Yibuti'),
 ('235','(+260)','Zambia'),
 ('236','(+263)','Zimbabue'),
 ('24','(+229)','Benín'),
 ('25','(+1)','Bermudas');
INSERT INTO `pais` (`id`,`codigo`,`nombre_pais`) VALUES 
 ('26','(+591)','Bolivia'),
 ('27','(+387)','Bosnia y Herzegovina'),
 ('28','(+267)','Botsuana'),
 ('29','(+55)','Brasil'),
 ('3','(+49)','Alemania'),
 ('30','(+673)','Brunéi'),
 ('31','(+359)','Bulgaria'),
 ('32','(+226)','Burkina Faso'),
 ('33','(+257)','Burundi'),
 ('34','(+975)','Bután'),
 ('35','(+238)','Cabo Verde'),
 ('36','(+855)','Camboya'),
 ('37','(+237)','Camerún'),
 ('38','(+1)','Canadá'),
 ('39','(+57)','Colombia'),
 ('4','(+376)','Andorra'),
 ('40','(+269)','Comoras'),
 ('41','(RDC)','Congo'),
 ('42','(+850)','Corea del Norte'),
 ('43','(+82)','Corea del Sur'),
 ('44','(+506)','Costa Rica'),
 ('45','(Hrvatska)','Croacia'),
 ('46','(+53)','Cuba'),
 ('47','(+235)','Chad'),
 ('48','(+56)','Chile'),
 ('49','(+86)','China'),
 ('5','(+244)','Angola'),
 ('50','(+357)','Chipre'),
 ('51','(+45)','Dinamarca'),
 ('52','(+1)','Dominica'),
 ('53','(+593)','Ecuador'),
 ('54','(+20)','Egipto'),
 ('55','(+503)','El Salvador'),
 ('56','(+971)','Emiratos Árabes Unidos');
INSERT INTO `pais` (`id`,`codigo`,`nombre_pais`) VALUES 
 ('57','(+291)','Eritrea'),
 ('58','(+421)','Eslovaquia'),
 ('59','(+386)','Eslovenia'),
 ('6','(+672)','Antártida'),
 ('60','(+34)','España'),
 ('61','(+1)','Estados Unidos'),
 ('62','(+372)','Estonia'),
 ('63','(+251)','Etiopía'),
 ('64','(+389)','Ex-República Yugoslava de Macedonia'),
 ('65','(+63)','Filipinas'),
 ('66','(+358)','Finlandia'),
 ('67','(+33)','Francia'),
 ('68','(+241)','Gabón'),
 ('69','(+220)','Gambia'),
 ('7','(+1)','Antigua Y Barbuda'),
 ('70','(+995)','Georgia'),
 ('71','(+233)','Ghana'),
 ('72','(+350)','Gibraltar'),
 ('73','(+1)','Granada'),
 ('74','(+30)','Grecia'),
 ('75','(+299)','Groenlandia'),
 ('76','(+590))','Guadalupe'),
 ('77','(+1)','Guam'),
 ('78','(+502)','Guatemala'),
 ('79','(+594)','Guayana Francesa'),
 ('8','(+599)','Antiguas Antillas Holandesas'),
 ('80','(+44)','Guernsey'),
 ('81','(+224)','Guinea'),
 ('82','(+240)','Guinea Ecuatorial'),
 ('83','(+245)','Guinea-Bissau'),
 ('84','(+592)','Guyana'),
 ('85','(+509)','Haití');
INSERT INTO `pais` (`id`,`codigo`,`nombre_pais`) VALUES 
 ('86','(+504)','Honduras'),
 ('87','(+852)','Hong Kong RAE'),
 ('88','(+36)','Hungría'),
 ('89','(+91)','India'),
 ('9','(+966)','Arabia Saudí'),
 ('90','(+62)','Indonesia'),
 ('91','(+964)','Irak'),
 ('92','(+98)','Irán'),
 ('93','(+353)','Irlanda'),
 ('94','(+247)','Isla Ascensión'),
 ('95','(+47)','Isla Bouvet'),
 ('96','(+61)','Isla Christmas'),
 ('97','(+44)','Isla de Man'),
 ('98','(+354)','Islandia'),
 ('99','(+1)','Islas Caimán');
/*!40000 ALTER TABLE `pais` ENABLE KEYS */;


--
-- Definition of table `provincia`
--

DROP TABLE IF EXISTS `provincia`;
CREATE TABLE `provincia` (
  `id` varchar(45) NOT NULL,
  `nombre_provincia` text NOT NULL,
  `id_pais` varchar(45) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `FK_provincina_pais` (`id_pais`),
  CONSTRAINT `FK_provincina_pais` FOREIGN KEY (`id_pais`) REFERENCES `pais` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provincia`
--

/*!40000 ALTER TABLE `provincia` DISABLE KEYS */;
/*!40000 ALTER TABLE `provincia` ENABLE KEYS */;


--
-- Definition of table `reserva`
--

DROP TABLE IF EXISTS `reserva`;
CREATE TABLE `reserva` (
  `id` varchar(45) NOT NULL,
  `id_cliente` varchar(45) NOT NULL,
  `id_usuario` varchar(45) NOT NULL,
  `id_habitacion` varchar(45) NOT NULL,
  `fecha_reserva` datetime NOT NULL,
  `fecha_toma` datetime NOT NULL,
  `fecha_entrega` datetime NOT NULL,
  `estado_reserva` int(10) unsigned NOT NULL,
  `observaciones` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `FK_reserva_cliente` (`id_cliente`),
  KEY `FK_reserva_usuario` (`id_usuario`),
  KEY `FK_reserva_habitacion` (`id_habitacion`),
  CONSTRAINT `FK_reserva_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_reserva_habitacion` FOREIGN KEY (`id_habitacion`) REFERENCES `habitacion` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_reserva_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reserva`
--

/*!40000 ALTER TABLE `reserva` DISABLE KEYS */;
/*!40000 ALTER TABLE `reserva` ENABLE KEYS */;


--
-- Definition of table `tarifas`
--

DROP TABLE IF EXISTS `tarifas`;
CREATE TABLE `tarifas` (
  `id` varchar(45) NOT NULL,
  `fecha_inicio` datetime NOT NULL,
  `fecha_fin` datetime NOT NULL,
  `precio` varchar(45) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `id_habitacion` varchar(45) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `FK_tarifas_habitacion` (`id_habitacion`),
  CONSTRAINT `FK_tarifas_habitacion` FOREIGN KEY (`id_habitacion`) REFERENCES `habitacion` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tarifas`
--

/*!40000 ALTER TABLE `tarifas` DISABLE KEYS */;
/*!40000 ALTER TABLE `tarifas` ENABLE KEYS */;


--
-- Definition of table `tipo_habitacion`
--

DROP TABLE IF EXISTS `tipo_habitacion`;
CREATE TABLE `tipo_habitacion` (
  `id` varchar(45) NOT NULL,
  `nombre` text NOT NULL,
  `fecha` datetime NOT NULL,
  `estado` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipo_habitacion`
--

/*!40000 ALTER TABLE `tipo_habitacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipo_habitacion` ENABLE KEYS */;


--
-- Definition of table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `id` varchar(45) NOT NULL,
  `id_hotel` varchar(45) NOT NULL,
  `nombre_usuario` text NOT NULL,
  `apellido_usuario` text NOT NULL,
  `tipo_identificacion` varchar(45) NOT NULL,
  `identificacion` varchar(45) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `celular` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `fecha` datetime NOT NULL,
  `id_ciudad` varchar(45) NOT NULL,
  `id_cargo` varchar(45) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `FK_usuario_ciudad` (`id_ciudad`),
  KEY `FK_usuario_hotel` (`id_hotel`),
  KEY `FK_usuario_cargo` (`id_cargo`),
  CONSTRAINT `FK_usuario_cargo` FOREIGN KEY (`id_cargo`) REFERENCES `cargo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_usuario_ciudad` FOREIGN KEY (`id_ciudad`) REFERENCES `ciudad` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_usuario_hotel` FOREIGN KEY (`id_hotel`) REFERENCES `hotel` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
