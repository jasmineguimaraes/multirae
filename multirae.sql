create database bd_multirae
default character set utf8
default collate utf8_general_ci;

use bd_multirae;

create table cadastro_usuario(
id_usuario int auto_increment not null,
id_multirao int,
nome varchar(60) not null,
data_nascimento date not null,
cpf varchar(14) not null,
cep varchar(8) not null,
endereco varchar(60) not null,
senha varchar(80) not null,
email varchar(50) not null,
unique(email, cpf),
primary key(id_usuario),
constraint fk_usuario_multirao 
foreign key(id_multirao) 
references multirao(id_multirao)
)default charset utf8;

create table multirao(
id_multirao int not null auto_increment,
titulo varchar(80) not null,
descricao varchar(200) not null,
img_multirao varchar(10) not null,
data_multirao date not null,
local_multirao varchar(50) not null,
primary key(id_multirao)
)default charset utf8;

describe cadastro_usuario;

alter table cadastro_usuario
modify data_nascimento date; 
