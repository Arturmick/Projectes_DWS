--drop database  if exists clientesdb_dwes;


create database clientesdb_dwes;
use clientesdb_dwes;
CREATE TABLE Cliente (
  DNI INTEGER UNSIGNED  NOT NULL  ,
  Nombre VARCHAR(50)  NOT NULL  ,
  Ape1 VARCHAR(50)  NOT NULL  ,
  Ape2 VARCHAR(50)  NULL  ,
  Nick VARCHAR(10)  NOT NULL  ,
  Passwd VARCHAR(10)  NOT NULL  ,
  Saldo FLOAT  NULL  ,
  Moroso INTEGER UNSIGNED NULL )
/*TYPE=InnoDB*/
;




CREATE TABLE Articulo (
  idArticulo INTEGER UNSIGNED NOT NULL,
  Descripcion VARCHAR(50)  NOT NULL  ,
  Precio FLOAT  NOT NULL  ,
  Stock INTEGER UNSIGNED  NULL DEFAULT 0 );



CREATE TABLE Articulo2 (
  idArticulo INTEGER UNSIGNED NOT NULL,
  Descripcion VARCHAR(50)  NOT NULL  ,
  Precio FLOAT  NOT NULL  ,
  Stock INTEGER UNSIGNED  NULL DEFAULT 0 );

CREATE TABLE Factura (
  idFactura INTEGER UNSIGNED  NOT NULL,
  Cliente_DNI INTEGER UNSIGNED  NOT NULL  ,
  Fecha INTEGER UNSIGNED  NOT NULL );



CREATE TABLE Articulo_Factura (
  Articulo_idArticulo INTEGER UNSIGNED NOT NULL  ,
  Factura_idFactura INTEGER UNSIGNED  NOT NULL  ,
  Numero INTEGER UNSIGNED  NOT NULL
);

INSERT INTO `articulo` VALUES (0000000001,'Linterna HJ1',40,98),(0000000002,'Pilas 1.5V',25.5,194),(0000000003,'Mochila M28',125.5,50),(0000000004,'Brujula T30',6.99,18),(0000000005,'Cantimplora Fusion',10,29),(0000000006,'Saco Polar HJ2',78.95,53);
INSERT INTO `cliente` VALUES (14,'Francisco','Lopez','Sanchis','franlo','fran1',1000,0),(15,'Pedro','Martinez',NULL,'peter','pet1',1000,0),(25,'Manolo','Perez','Aspar','manu','man1',1000,0),(33,'Marcos','Heredia','Buendia','marcs','mar1',1000,0),(367809,'Guillermo','Toro','Fuentes','guille','gui1',1000,0),(456781,'Julia','Sanches','Guarner','juli','jul1',1000,0),(31678901,'Ana','Bermejo','Beltan','anaber','ana1',1000,0);
INSERT INTO `factura` VALUES (1,33,20080205),(2,456781,20080311),(3,456781,20080324);
INSERT INTO `Articulo_Factura` VALUES (0000000001,1,2),(0000000002,1,3),(0000000004,1,2),(0000000002,2,3),(0000000004,3,5),(0000000005,2,1);

