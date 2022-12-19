CREATE DATABASE minicms;

USE DATABASE minicms;

CREATE TABLE usuarios(
idusuario SMALLINT NOT NULL AUTO_INCREMENT,
email VARCHAR(100) NOT NULL,
nombre VARCHAR(20) NOT NULL,
apellido VARCHAR (20) NOT NULL,
contrasena VARCHAR (150) NOT NULL,
activo TINYINT NOT NULL DEFAULT 1,
PRIMARY KEY(idusuario)
);



CREATE TABLE contenidos(
idcontenido MEDIUMINT NOT NULL AUTO_INCREMENT,
idclasificacion TINYINT NOT NULL,
autor_idusuario SMALLINT NOT NULL,
imagen VARCHAR (255) NOT NULL,
titulo VARCHAR (200),
subtitulo MEDIUMTEXT,
contenido TEXT,
PRIMARY KEY(idcontenido)
);

CREATE TABLE clasificaciones(
idclasificacion TINYINT NOT NULL AUTO_INCREMENT,
nombre VARCHAR(50),
PRIMARY KEY(idclasificacion)
);

INSERT INTO clasificaciones VALUES(0,'Clasificaciones');
INSERT INTO clasificaciones VALUES(1,'NOTICIAS');
INSERT INTO clasificaciones VALUES(2,'ASOCIACION');
INSERT INTO clasificaciones VALUES(3,'INFORMACION');
INSERT INTO clasificaciones VALUES(4,'OTROS');

INSERT INTO usuarios VALUES(1,'admin@cms.cl','ADMIN','ADMIN','admin',1);
INSERT INTO usuarios VALUES(2,'rvaliente@cms.cl','RICHARD','VALIENTE','12345678',1);
INSERT INTO usuarios VALUES(3,'clira@cms.cl','CARLOS','LIRA','12345678',1);
INSERT INTO usuarios VALUES(4,'cgonzalez@cms.cl','CARLOS','GONZALEZ','12345678',1);
INSERT INTO usuarios VALUES(5,'mnegrete@cms.cl','MIGUEL','NEGRETE','12345678',1);
INSERT INTO usuarios VALUES(6,'ccorales@cms.cl','CRISTIAN','CORALES','12345678',0);
INSERT INTO usuarios VALUES(7,'jrobles@cms.cl','JUAN','ROBLES','12345678',0);


INSERT INTO contenidos VALUES(1,'admin@cms.cl','ADMIN','ADMIN','admin',1);

