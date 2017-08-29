drop database if exists sistema;

create database if not exists sistema;

use sistema;

create table if not exists clientes(
	id int(10) not null auto_increment primary key,
	codigo varchar(10) not null,
	nombre varchar(30) not null,
	apellidos varchar(50) not null,
	direccion varchar(100) not null,
	telefono varchar(10) not null,
	email varchar(30) not null
);

create table if not exists usuarios(
	id int(10) not null auto_increment primary key,
	usuario varchar(20) not null,
	perfil varchar(20) not null,
	password varchar(30) not null
);

insert into usuarios(usuario, perfil, password) values ('victor', 'administrador', 'qwerty');

insert into clientes(codigo, nombre, apellidos, direccion, telefono, email) values ('XTYUVB', 'Victor', 'Sanchez', 'Hidalgo #2 Colonia Aguayo, Santa Cruz Xoxocotlan', '9512873825', 'sanchezvicthor3@gmail.com');