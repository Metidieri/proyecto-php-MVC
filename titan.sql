-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.10.2-MariaDB-1:10.10.2+maria~ubu2204 - mariadb.org binary distribution
-- SO del servidor:              debian-linux-gnu
-- HeidiSQL Versión:             12.3.0.6589
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para database
CREATE DATABASE IF NOT EXISTS `database` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci */;
USE `database`;

-- Volcando estructura para tabla database.Pedido
CREATE TABLE IF NOT EXISTS `Pedido` (
  `id_pedido` int(3) NOT NULL AUTO_INCREMENT,
  `fecha` date DEFAULT NULL,
  `usu` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_pedido`),
  KEY `usu` (`usu`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla database.Pedido: ~10 rows (aproximadamente)
INSERT INTO `Pedido` (`id_pedido`, `fecha`, `usu`) VALUES
	(1, '2023-05-08', 1),
	(2, '2023-05-08', 3),
	(3, '2023-05-29', 3),
	(4, '2023-06-05', 3),
	(29, '2023-06-05', 3),
	(31, '2023-06-12', 3);

-- Volcando estructura para tabla database.ProdPedido
CREATE TABLE IF NOT EXISTS `ProdPedido` (
  `id_producto` int(3) NOT NULL,
  `id_pedido` int(3) NOT NULL,
  `cantidad` int(3) DEFAULT 1,
  PRIMARY KEY (`id_producto`,`id_pedido`),
  KEY `pedido` (`id_pedido`),
  CONSTRAINT `pedido` FOREIGN KEY (`id_pedido`) REFERENCES `Pedido` (`id_pedido`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `producto` FOREIGN KEY (`id_producto`) REFERENCES `Producto` (`id_producto`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla database.ProdPedido: ~8 rows (aproximadamente)
INSERT INTO `ProdPedido` (`id_producto`, `id_pedido`, `cantidad`) VALUES
	(1, 2, 3),
	(1, 31, 1),
	(2, 1, 4),
	(2, 2, 4),
	(3, 1, 1),
	(3, 31, 1),
	(4, 1, 3),
	(4, 2, 10);

-- Volcando estructura para tabla database.Producto
CREATE TABLE IF NOT EXISTS `Producto` (
  `id_producto` int(3) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `procedencia` int(11) DEFAULT NULL,
  `foto` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_producto`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla database.Producto: ~5 rows (aproximadamente)
INSERT INTO `Producto` (`id_producto`, `nombre`, `precio`, `descripcion`, `procedencia`, `foto`) VALUES
	(1, 'Platano', 10, 'Fruta que se optiene del platanero', 1, 'platanos.jfif'),
	(2, 'Manzana', 4, 'Fruta que se optiene del manzano', 2, 'manzanas.jfif'),
	(3, 'Pera', 7, 'Fruta que se optiene del olmo', 1, 'peras.jfif'),
	(4, 'Higo', 4, 'Fruta que se obtiene de la higuera', 2, 'higos.jfif');

-- Volcando estructura para tabla database.Usuarios
CREATE TABLE IF NOT EXISTS `Usuarios` (
  `id_usuario` int(3) NOT NULL AUTO_INCREMENT,
  `nick` varchar(15) DEFAULT NULL,
  `contra` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla database.Usuarios: ~3 rows (aproximadamente)
INSERT INTO `Usuarios` (`id_usuario`, `nick`, `contra`) VALUES
	(1, 'admin', 'admin'),
	(3, 'pedro', '1234'),
	(5, 'carlos', '1234');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
