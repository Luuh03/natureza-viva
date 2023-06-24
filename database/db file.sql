create database trabalho_dwe;
use trabalho_dwe;

create table usuarios (
	id int(5) not null auto_increment primary key,
	nome varchar(30) not null,
    login varchar(30) not null,
    senha varchar(30) not null
);
