﻿# Host: LOCALHOST  (Version 5.6.16)
# Date: 2018-08-15 07:37:01
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "autor"
#

DROP TABLE IF EXISTS `autor`;
CREATE TABLE `autor` (
  `id_autor` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `apellido_p` varchar(35) DEFAULT NULL,
  `apellido_m` varchar(35) DEFAULT NULL,
  `fec_nac` date DEFAULT NULL,
  `lug_nac` varchar(35) DEFAULT NULL,
  `activo` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id_autor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "autor"
#

INSERT INTO `autor` VALUES (1,'JOSE','LOPEZ','QUIJADO',NULL,'Valencia, ES',1);

#
# Structure for table "categoria"
#

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(35) DEFAULT NULL,
  `activo` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "categoria"
#

INSERT INTO `categoria` VALUES (1,'Revista',1),(2,'Tecnología',1);

#
# Structure for table "editorial"
#

DROP TABLE IF EXISTS `editorial`;
CREATE TABLE `editorial` (
  `id_editorial` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(35) DEFAULT NULL,
  `dir` varchar(255) DEFAULT NULL,
  `tel` varchar(50) DEFAULT NULL,
  `ciud` varchar(35) DEFAULT NULL,
  `cod_post` varchar(10) DEFAULT NULL,
  `activo` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id_editorial`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "editorial"
#

INSERT INTO `editorial` VALUES (1,'Editorial RA-MA S.A. ','Puerta del Sol','0521-2318833','Madrid','1212',1),(2,'ANAYA MULTIMEDIA','Barca del mar','0521-2318834','Madrid','1213',0);

#
# Structure for table "libro"
#

DROP TABLE IF EXISTS `libro`;
CREATE TABLE `libro` (
  `isbn` varchar(11) NOT NULL DEFAULT 'unknow',
  `nombre` varchar(200) NOT NULL DEFAULT 'unknow',
  `id_autor` int(10) unsigned NOT NULL DEFAULT '0',
  `descripción` mediumblob NOT NULL,
  `id_editorial` int(11) unsigned NOT NULL DEFAULT '0',
  `id_categoria` int(11) unsigned NOT NULL DEFAULT '0',
  `activo` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`isbn`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "libro"
#

INSERT INTO `libro` VALUES ('978-84-415-','MYSQL AVANZADO (SEGUNDA EDICIÓN)',2,X'BF4C6520677573746172ED612074656E65722073752070726F70696F20706F7274616C20656E20496E7465726E65743F20436F6E2061797564612064652065737465206C6962726F2C20617072656E646572E120612070726F6772616D61722061706C69636163696F6E657320656E2050485020792061207574696C697A6172206C612062617365206465206461746F73204D7953514C2C20792C20636F6D62696E616E646F20657374617320646F7320706F74656E7465732068657272616D69656E74617320792073696E206E6563657369646164206465207175652074656E6761206E696E67FA6E20636F6E6F63696D69656E746F2070726576696F',1,1,1),('978-84-7897','CREACION DE UN PORTAL CON PHP Y MYSQL. 3É EDICION.',1,X'45737461206F627261206C6520656E7365F16120612063726561722072E1706964616D656E74652073697374656D617320666961626C657320636F6E204D7953514C2E204573637269746F20706F72206578706572746F7320636F6E20756E6120616D706C696120657870657269656E636961207072E1637469636120656E206C6120637265616369F36E206465206772616E6465732073697374656D61732C2065737461206564696369F36E20616E616C697A6120656C2072656E64696D69656E746F206465204D7953514C20636F6E20646574616C6C6520792073652063656E74726120656E206C6120736F6C6964657A2C206C61207365677572696461642079206C6120696E7465677269646164206465206C6F73206461746F732E20417072656E642E2E2E',2,1,1),('978-84-9964','DOMINE PHP Y MYSQL. 2ª EDICION',2,X'45737465206C6962726F20657374E12064697365F161646F2079206573637269746F207061726120617175656C6C617320706572736F6E6173207175652C20636F6E6F6369656E646F205848544D4C2079204A6176615363726970742C2064657365616E2064617220756E2073616C746F206164656C616E746520656E206C6120637265616369F36E20646520736974696F73207765622C20636F6E206C612070726F6772616D616369F36E2064696EE16D69636120656E20656C206C61646F2064656C207365727669646F722E20417472E1732071756564616E206C6F732064ED6173206F736375726F7320656E20717565206C61732070E167696E6173',1,2,0);
