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
  `nombre_pais` text NOT NULL,
  `codigo_postal` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pais`
--

/*!40000 ALTER TABLE `pais` DISABLE KEYS */;
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
  CONSTRAINT `FK_reserva_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_reserva_habitacion` FOREIGN KEY (`id_habitacion`) REFERENCES `habitacion` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
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
  PRIMARY KEY  (`id`),
  KEY `FK_usuario_ciudad` (`id_ciudad`),
  KEY `FK_usuario_hotel` (`id_hotel`),
  CONSTRAINT `FK_usuario_hotel` FOREIGN KEY (`id_hotel`) REFERENCES `hotel` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_usuario_ciudad` FOREIGN KEY (`id_ciudad`) REFERENCES `ciudad` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
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
