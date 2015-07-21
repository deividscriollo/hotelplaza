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
INSERT INTO `ciudad` (`id`,`nombre_ciudad`,`id_provincia`) VALUES 
 ('1','Camilo Ponce','1'),
 ('10','Paute','1'),
 ('100','Yaguachi','10'),
 ('101','Atuntaqui (Antonio Ante)','11'),
 ('102','Cotacachi','11'),
 ('103','Ibarra','11'),
 ('104','Otavalo','11'),
 ('105','Pimampiro','11'),
 ('106','Urcuqui','11'),
 ('107','Calvas (Cariamanga)','12'),
 ('108','Catamayo','12'),
 ('109','Celica','12'),
 ('11','Pucara','1'),
 ('110','Chaguarpamba','12'),
 ('111','Espindola','12'),
 ('112','Gonzanama','12'),
 ('113','Loja','12'),
 ('114','Macara','12'),
 ('115','Paltas (Catacocha)','12'),
 ('116','Pindal','12'),
 ('117','Puyango (Alamor)','12'),
 ('118','Quilanga','12'),
 ('119','Saraguro','12'),
 ('12','San Fernando','1'),
 ('120','Sozoranga','12'),
 ('121','Zapotillo','12'),
 ('122','Baba','13'),
 ('123','Babahoyo','13'),
 ('124','Buena Fe','13'),
 ('125','Mocache','13'),
 ('126','Montalvo','13'),
 ('127','Palenque','13'),
 ('128','Pueblo Viejo','13'),
 ('129','Quevedo','13'),
 ('13','Santa Isabel','1'),
 ('130','Urdaneta','13');
INSERT INTO `ciudad` (`id`,`nombre_ciudad`,`id_provincia`) VALUES 
 ('131','Valencia','13'),
 ('132','Ventanas','13'),
 ('133','Vinces','13'),
 ('134','24 De Mayo','14'),
 ('135','Bolivar','14'),
 ('136','Chone','14'),
 ('137','El Carmen','14'),
 ('138','Flavio Alfaro','14'),
 ('139','Jama','14'),
 ('14','Sevilla De Oro','1'),
 ('140','Jaramijo','14'),
 ('141','Jipijapa','14'),
 ('142','Junin','14'),
 ('143','Manta','14'),
 ('144','Montecristi','14'),
 ('145','Olmedo','14'),
 ('146','Pajan','14'),
 ('147','Pedernales','14'),
 ('148','Pichincha','14'),
 ('149','Portoviejo','14'),
 ('15','Sigsig','1'),
 ('150','Puerto Lopez','14'),
 ('151','Rocafuerte','14'),
 ('152','San Vicente','14'),
 ('153','Santa Ana','14'),
 ('154','Sucre','14'),
 ('155','Tosagua','14'),
 ('156','Gualaquiza','15'),
 ('157','Huamboya','15'),
 ('158','Limon indanza','15'),
 ('159','LogroÃ±o','15'),
 ('16','Caluma','2'),
 ('160','Morona','15'),
 ('161','Pablo VI','15'),
 ('162','Palora','15'),
 ('163','San Juan Bosco','15'),
 ('164','Santiago','15');
INSERT INTO `ciudad` (`id`,`nombre_ciudad`,`id_provincia`) VALUES 
 ('165','Sucua','15'),
 ('166','Taisha','15'),
 ('167','Twintza','15'),
 ('168','Archidona','16'),
 ('169','Carlos J. Arosemena','16'),
 ('17','Chillanes','2'),
 ('170','El Chaco','16'),
 ('171','Quijos','16'),
 ('172','Tena','16'),
 ('173','Aguarico','17'),
 ('174','La Joya De Los Sachas','17'),
 ('175','Loreto','17'),
 ('176','Orellana','17'),
 ('177','Arajuno','18'),
 ('178','Mera','18'),
 ('179','Pastaza','18'),
 ('18','Chimbo','2'),
 ('180','Santa Clara','18'),
 ('181','Cayambe','19'),
 ('182','Mejia','19'),
 ('183','Pedro Moncayo','19'),
 ('184','Pedro Vicente Maldonado','19'),
 ('185','Puerto Quito','19'),
 ('186','Quito','19'),
 ('187','RumiÃ±ahui','19'),
 ('188','San Miguel De Los Bancos','19'),
 ('189','La Libertad','20'),
 ('19','Echeandia','2'),
 ('190','Salinas','20'),
 ('191','Santa Elena','20'),
 ('192','Santo Domingo De Los TsÃ¡chilas','21'),
 ('193','Cascales','22'),
 ('194','Cuyabeno','22'),
 ('195','Gonzalo Pizarro','22'),
 ('196','Lago Agrio','22');
INSERT INTO `ciudad` (`id`,`nombre_ciudad`,`id_provincia`) VALUES 
 ('197','Putumayo','22'),
 ('198','Shushufindi','22'),
 ('199','Sucumbios','22'),
 ('2','Chordeleg','1'),
 ('20','Guaranda','2'),
 ('200','Ambato','23'),
 ('201','BaÃ±os De Agua Santa','23'),
 ('202','Cevallos','23'),
 ('203','Mocha','23'),
 ('204','Patate','23'),
 ('205','Quero','23'),
 ('206','San Pedro De Pelileo','23'),
 ('207','Santiago De Pillaro','23'),
 ('208','Tisaleo','23'),
 ('209','Centinela Del Condor','24'),
 ('21','Las Naves','2'),
 ('210','Chinchipe','24'),
 ('211','El Pangui','24'),
 ('212','Nangaritza','24'),
 ('213','Palanda','24'),
 ('214','Yacuambi','24'),
 ('215','Yantzaza','24'),
 ('216','Zamora','24'),
 ('22','San Miguel','2'),
 ('23','Azogues','3'),
 ('24','Biblian','3'),
 ('25','CaÃ±ar','3'),
 ('26','Deleg','3'),
 ('27','La Troncal','3'),
 ('28','Suscal','3'),
 ('29','Tambo','3'),
 ('3','Cuenca','1'),
 ('30','Espejo','4'),
 ('31','Mira','4'),
 ('32','Montufar','4'),
 ('33','San Pedro De Huaca','4'),
 ('34','Tulcan','4');
INSERT INTO `ciudad` (`id`,`nombre_ciudad`,`id_provincia`) VALUES 
 ('35','Alausi','5'),
 ('36','Chambo','5'),
 ('37','Chunchi','5'),
 ('38','Colta','5'),
 ('39','Cumanda','5'),
 ('4','El Pan','1'),
 ('40','Guamote','5'),
 ('41','Guano','5'),
 ('42','Pallatanga','5'),
 ('43','Penipe','5'),
 ('44','Riobamba','5'),
 ('45','La Mana','6'),
 ('46','Latacunga','6'),
 ('47','Pangua','6'),
 ('48','Pujili','6'),
 ('49','Salcedo','6'),
 ('5','Giron','1'),
 ('50','Saquisili','6'),
 ('51','Sigchos','6'),
 ('52','Arenillas','7'),
 ('53','Atahualpa','7'),
 ('54','Balsas','7'),
 ('55','Chilla','7'),
 ('56','El Guabo','7'),
 ('57','Huaquillas','7'),
 ('58','Las Lajas','7'),
 ('59','Machala','7'),
 ('6','Guachapala','1'),
 ('60','Marcabeli','7'),
 ('61','Pasaje','7'),
 ('62','Pinas','7'),
 ('63','Portovelo','7'),
 ('64','Santa Rosa','7'),
 ('65','Zaruma','7'),
 ('66','Atacames','8'),
 ('67','Eloy Alfaro','8'),
 ('68','Esmeraldas','8'),
 ('69','Muisne','8'),
 ('7','Gualaceo','1'),
 ('70','Quininde','8'),
 ('71','Rio Verde','8');
INSERT INTO `ciudad` (`id`,`nombre_ciudad`,`id_provincia`) VALUES 
 ('72','San Lorenzo','8'),
 ('73','Isabela','9'),
 ('74','San Cristobal','9'),
 ('75','Santa Cruz','9'),
 ('76','Alfredo Baquerizo Moreno (Jujan)','10'),
 ('77','Balao','10'),
 ('78','Balzar','10'),
 ('79','Colimes','10'),
 ('8','Nabon','1'),
 ('80','Daule','10'),
 ('81','Duran','10'),
 ('82','El Triunfo','10'),
 ('83','Empalme','10'),
 ('84','General Antonio Elizalde (Bucay)','10'),
 ('85','General Villamil (Playas)','10'),
 ('86','Guayaquil','10'),
 ('87','Isidro Ayora','10'),
 ('88','Lomas De Sargentillo','10'),
 ('89','Marcelino Mariduena','10'),
 ('9','OÃ±a','1'),
 ('90','Milagro','10'),
 ('91','Naranjal','10'),
 ('92','Naranjito','10'),
 ('93','Nobol (Narcisa De Jesus)','10'),
 ('94','Palestina','10'),
 ('95','Pedro Carbo','10'),
 ('96','Samborondon','10'),
 ('97','Santa Lucia','10'),
 ('98','Simon Bolivar','10'),
 ('99','Urbina Jado (Salitre)','10');
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
INSERT INTO `clave` (`id`,`id_usuario`,`clave`) VALUES 
 ('00493755addd7131260','00493755addd7131260','123123');
/*!40000 ALTER TABLE `clave` ENABLE KEYS */;


--
-- Definition of table `clave_cliente`
--

DROP TABLE IF EXISTS `clave_cliente`;
CREATE TABLE `clave_cliente` (
  `id` varchar(45) NOT NULL,
  `clave_cliente` text NOT NULL,
  `id_cliente` varchar(45) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `fk_cliente_clave_cliente` (`id_cliente`),
  CONSTRAINT `fk_cliente_clave_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clave_cliente`
--

/*!40000 ALTER TABLE `clave_cliente` DISABLE KEYS */;
INSERT INTO `clave_cliente` (`id`,`clave_cliente`,`id_cliente`) VALUES 
 ('02141955adf14b5eb9c','123123','02141955adf14b5eb9c');
/*!40000 ALTER TABLE `clave_cliente` ENABLE KEYS */;


--
-- Definition of table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE `cliente` (
  `id` varchar(45) NOT NULL,
  `nombre_cliente` text,
  `apellido_cliente` text,
  `tipo_identificacion` text,
  `identificacion` text,
  `direccion` text,
  `telefono` text,
  `celular` text,
  `email` text,
  `id_ciudad` varchar(45) default NULL,
  `img` text,
  `fecha_creacion` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cliente`
--

/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` (`id`,`nombre_cliente`,`apellido_cliente`,`tipo_identificacion`,`identificacion`,`direccion`,`telefono`,`celular`,`email`,`id_ciudad`,`img`,`fecha_creacion`) VALUES 
 ('02141955adf14b5eb9c','qweqwew','123123qwe','CI','1002910345','qweqwe','(222) 222-222','(333) 333-3333','qw6@g.com','','02141955adf14b5eb9c.png','2015-07-21 02:14:19');
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
  `nombre_hotel` text,
  `direccion` text,
  `telefono` text,
  `imagen` text,
  `celular` varchar(45) default NULL,
  `web` text,
  `estado` int(10) unsigned default NULL,
  `fecha` datetime default NULL,
  `id_ciudad` varchar(45) default NULL,
  PRIMARY KEY  (`id`),
  KEY `FK_hotel_ciudad` (`id_ciudad`),
  CONSTRAINT `FK_hotel_ciudad` FOREIGN KEY (`id_ciudad`) REFERENCES `ciudad` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

/*!40000 ALTER TABLE `hotel` DISABLE KEYS */;
INSERT INTO `hotel` (`id`,`nombre_hotel`,`direccion`,`telefono`,`imagen`,`celular`,`web`,`estado`,`fecha`,`id_ciudad`) VALUES 
 ('1','HOTEL PLAZA VICTORIA','','',NULL,'','',NULL,NULL,NULL);
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
INSERT INTO `provincia` (`id`,`nombre_provincia`,`id_pais`) VALUES 
 ('1','Azuay','53'),
 ('10','Guayas','53'),
 ('11','Imbabura','53'),
 ('12','Loja','53'),
 ('13','Los RÃ­os','53'),
 ('14','ManabÃ­','53'),
 ('15','Morona Santiago','53'),
 ('16','Napo','53'),
 ('17','Orellana','53'),
 ('18','	Pastaza','53'),
 ('19','Pichincha','53'),
 ('2','BolÃ­var','53'),
 ('20','Santa Elena','53'),
 ('21','Santo Domingo de los TsÃ¡chilas','53'),
 ('22','SucumbÃ­os','53'),
 ('23','Tungurahua','53'),
 ('24','Zamora Chinchipe','53'),
 ('3','CaÃ±ar','53'),
 ('4','Carchi','53'),
 ('5','Chimborazo','53'),
 ('6','Cotopaxi','53'),
 ('7','El Oro','53'),
 ('8','Esmeraldas','53'),
 ('9','GalÃ¡pagos','53');
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
  `id_hotel` varchar(45) default NULL,
  `nombre_usuario` text,
  `tipo_identificacion` varchar(45) default NULL,
  `identificacion` varchar(45) default NULL,
  `telefono` varchar(45) default NULL,
  `celular` varchar(45) default NULL,
  `email` varchar(45) default NULL,
  `usuario` varchar(45) default NULL,
  `estado` varchar(45) default NULL,
  `fecha` datetime default NULL,
  `id_ciudad` varchar(45) default NULL,
  `id_cargo` varchar(45) default NULL,
  `extranjero` varchar(45) default NULL,
  `imagen` varchar(45) default NULL,
  `direccion` text,
  PRIMARY KEY  (`id`),
  KEY `FK_usuario_hotel` (`id_hotel`),
  KEY `FK_usuario_cargo` (`id_cargo`),
  CONSTRAINT `FK_usuario_cargo` FOREIGN KEY (`id_cargo`) REFERENCES `cargo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_usuario_hotel` FOREIGN KEY (`id_hotel`) REFERENCES `hotel` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`id`,`id_hotel`,`nombre_usuario`,`tipo_identificacion`,`identificacion`,`telefono`,`celular`,`email`,`usuario`,`estado`,`fecha`,`id_ciudad`,`id_cargo`,`extranjero`,`imagen`,`direccion`) VALUES 
 ('00493755addd7131260','1','qweqw','CI','1002910345','(123) 123-123','(222) 222-2222','wwwwwwwwww','qwe','0','2015-07-21 00:49:37','1','1','OFF','default.png','qweqwe');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
