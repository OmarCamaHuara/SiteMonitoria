create database sistema;

create table usuarios(
     id int not null primary key AUTO_INCREMENT,
     nome varchar(80) not null,
     imagem varchar(150),
     email varchar(80) not null UNIQUE,
     senha char(32) not null
)
drop table from id = '1';
select * from usuarios;
