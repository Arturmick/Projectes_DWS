


--drop table Articulo_Factura;
--drop table Articulo;
--drop table Factura;
--drop table Cliente;

--drop database bd1_dwes;

--create database bd1_dwes
-- use bd1_dwes;


CREATE TABLE clientes_dwes (
  id INTEGER UNSIGNED  NOT NULL  ,
  nombre VARCHAR(50)  NOT NULL  ,
  telefono VARCHAR(9)  NOT NULL  ,
PRIMARY KEY(id))
/*TYPE=InnoDB*/
;



INSERT INTO `clientes_dwes` VALUES (1,'Cliente1','111111111');
INSERT INTO `clientes_dwes` VALUES (2,'Cliente2','222222222');
INSERT INTO `clientes_dwes` VALUES (3,'Cliente3','333333333');
INSERT INTO `clientes_dwes` VALUES (4,'Cliente4','444444444');
INSERT INTO `clientes_dwes` VALUES (5,'Cliente5','555555555');


CREATE TABLE usuarios (
  user VARCHAR(50)  NOT NULL ,
  pass VARCHAR(50)  NOT NULL,
  rol VARCHAR(50)  NOT NULL
);

INSERT INTO `usuarios` VALUES ('usu1','pass1','rol1');
INSERT INTO `usuarios` VALUES ('usu2','pass2','rol1');
INSERT INTO `usuarios` VALUES ('usu3','pass3','rol2');
INSERT INTO `usuarios` VALUES ('usu4','pass4','rol2');


commit;