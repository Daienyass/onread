create database db_rc;

create table tbl_rc(
id int(100) primary key auto_increment not null,
idNo int(50) not null,
password varchar(100) not null);


create table tbl_form(
id int(100) primary key auto_increment not null,
firstname varchar(50) not null,
lastname varchar(50) not null,
IDno varchar(25),
term varchar(20),
schoolyear varchar(50),
grades int(15),
yes varchar(10),
no varchar(10),
one varchar(100),
two varchar(100),
three varchar(100),
four varchar(100),
five varchar(100),
six varchar(100),
reason varchar(100), 
promise varchar(100));