create database trabalho_dwe;
use trabalho_dwe;

create table usuarios (
	id int(5) not null auto_increment primary key,
	nome varchar(30) not null,
    login varchar(30) not null,
    senha varchar(30) not null
);

create table locais (
    id int (5) not null auto_increment primary key,
    tipo varchar(100) not null,
    nomeespaco varchar(30) not null,
    cidade  varchar(30) not null,
    bairro  varchar(30) not null,
    rua  varchar(30) not null,
    numero int(10)
);

create table agendamentos (
	id int (5) not null auto_increment primary key,
    idespaco int (5) not null,
    idusuario int (5),
    dataagendamento date,
    hora time,
    estado varchar(1)
);


