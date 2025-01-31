
/*
drop database bookorama;
*/

create database bookorama;
use bookorama;

create table customers(
 customerid int unsigned not null auto_increment primary key,
 name char(30) not null,
 address char(40) not null,
 city char(20) not null);

create table orders(
 orderid int unsigned not null auto_increment primary key,
 customerid int unsigned not null,
 amount float(6,2),
 date date not null);

create table books( 
 isbn char(13) not null primary key,
 author char(30),
 title char(60),
 price float(4,2));

create table order_items(
 orderid int unsigned not null,
 isbn char(13) not null,
 quantity tinyint unsigned,
 primary key (orderid, isbn));

create table book_reviews( 
 isbn char(13) not null primary key,
 review text);
 
 commit;
 