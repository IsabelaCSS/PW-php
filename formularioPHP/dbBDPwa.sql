create database dbBDPwa;
use dbBDPwa;

create table tbCliente(
cod int PRIMARY KEY auto_increment,
nome varchar(50) not null,
senha char(6) not null ,
sexo char(1) not null ,
estado char(2) not null 
);

select * from tbCliente;
