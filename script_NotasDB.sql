drop database  if exists NOTASDB_DWES;


create database NOTASDB_DWES;
use NOTASDB_DWES;



CREATE TABLE USUARIOS (
  User VARCHAR(50) ,
  Pass VARCHAR(50),
  Tipo VARCHAR(50)
  )
/*TYPE=InnoDB*/
;

CREATE TABLE NOTASPRIM (
  NomAlum  VARCHAR(50) ,
  MediaPrim FLOAT,
  FechAprobado DATE /*  formato  'AAAA-MM-DD'*/
  )
/*TYPE=InnoDB*/
;

CREATE TABLE NOTASSEG (
  NomAlum  VARCHAR(50) ,
  NomAsig VARCHAR(50),
  NotaAsig INTEGER
  )
/*TYPE=InnoDB*/
;

CREATE TABLE RESULTCICLO (
  NomAlum  VARCHAR(50) ,
  MediaSeg FLOAT,
  MediaCiclo FLOAT,
  FechAprobado DATE /*  formato  'AAAA-MM-DD'*/
  )
/*TYPE=InnoDB*/
;


CREATE TABLE MEDIAS (
  NomAlum  VARCHAR(50) ,
  MediaPri FLOAT,
  MediaSeg FLOAT,
  MediaCiclo FLOAT
  )
/*TYPE=InnoDB*/
;




/*
Tabla USUARIOS
*/
insert into USUARIOS values ('user1','pass1','tipo1');
insert into USUARIOS values ('user2','pass2','tipo2');
insert into USUARIOS values ('user3','pass3','tipo3');



/*
Tabla NOTASPRIM
*/
insert into NOTASPRIM values ('PILAR',9,'2024/6/30');
insert into NOTASPRIM values ('HUGO',8,'2024/6/30');
insert into NOTASPRIM values ('JESÚS',7,'2024/6/30');
insert into NOTASPRIM values ('RICARDO',6,'2024/6/30');
insert into NOTASPRIM values ('ARTURO',5,'2024/6/30');
insert into NOTASPRIM values ('MELISSA',5,'2024/6/30');



/*
Tabla NOTASSEG
*/
insert into NOTASSEG values ('PILAR','DIN',9);
insert into NOTASSEG values ('PILAR','EIE',8);
insert into NOTASSEG values ('PILAR','DAW',7);
insert into NOTASSEG values ('PILAR','ING',6);
insert into NOTASSEG values ('PILAR','DEC',5);

insert into NOTASSEG values ('HUGO','DIN',8);
insert into NOTASSEG values ('HUGO','EIE',8);
insert into NOTASSEG values ('HUGO','DAW',9);
insert into NOTASSEG values ('HUGO','ING',7);
insert into NOTASSEG values ('HUGO','DEC',5);

insert into NOTASSEG values ('JESÚS','DIN',5);
insert into NOTASSEG values ('JESÚS','EIE',7);
insert into NOTASSEG values ('JESÚS','DAW',8);
insert into NOTASSEG values ('JESÚS','ING',5);
insert into NOTASSEG values ('JESÚS','DEC',6);


insert into NOTASSEG values ('RICARDO','DIN',7);
insert into NOTASSEG values ('RICARDO','EIE',6);
insert into NOTASSEG values ('RICARDO','DAW',6);
insert into NOTASSEG values ('RICARDO','ING',5);
insert into NOTASSEG values ('RICARDO','DEC',5);


insert into NOTASSEG values ('ARTURO','DIN',8);
insert into NOTASSEG values ('ARTURO','EIE',8);
insert into NOTASSEG values ('ARTURO','DAW',8);
insert into NOTASSEG values ('ARTURO','ING',8);
insert into NOTASSEG values ('ARTURO','DEC',8);

insert into NOTASSEG values ('MELISSA','SRI',9);
insert into NOTASSEG values ('MELISSA','EIE',7);
insert into NOTASSEG values ('MELISSA','DAW',6);
insert into NOTASSEG values ('MELISSA','ING',5);
insert into NOTASSEG values ('MELISSA','DEC',7);



/*
Tabla RESULTCICLO
*/

insert into RESULTCICLO values ('PILAR',0,0,NULL);
insert into RESULTCICLO values ('HUGO',0,0,NULL);
insert into RESULTCICLO values ('JESÚS',0,0,NULL);
insert into RESULTCICLO values ('RICARDO',0,0,NULL);
insert into RESULTCICLO values ('ARTURO',0,0,NULL);
insert into RESULTCICLO values ('MELISSA',0,0,NULL);


/*
Tabla MEDIAS
*/

insert into MEDIAS values ('PILAR',0,0,0);
insert into MEDIAS values ('HUGO',0,0,0);
insert into MEDIAS values ('JESÚS',0,0,0);
insert into MEDIAS values ('RICARDO',0,0,0);
insert into MEDIAS values ('ARTURO',0,0,0);
insert into MEDIAS values ('MELISSA',0,0,0);
