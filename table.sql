create table usuarios(
     id int not null primary key AUTO_INCREMENT,
     nome varchar(80) not null,
     email varchar(80) not null UNIQUE,
     senha char(32) not null
)

select * from usuarios;