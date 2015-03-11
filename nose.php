CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) NOT NULL DEFAULT '',
  `usuario` varchar(10) NOT NULL DEFAULT '',
  `password` varchar(100) NOT NULL DEFAULT '',
  `tipo` int(1) NOT NULL DEFAULT '3',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `temas` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(10) DEFAULT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `fecha_pub` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `contenido` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `comentarios` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(10) DEFAULT NULL,
  `id_tema` int(10) DEFAULT NULL,
  `comentario` text,
  `fecha_pub` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;