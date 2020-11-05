create database bd_multirae
default character set utf8
default collate utf8_unicode_ci;

use bd_multirae;

create table mutirao(
id_mutirao int auto_increment,
titulo varchar(80) unique,
local_mut varchar(50),
dt_mut date,
img_mut varchar(50),
descricao varchar(200) unique,
data_mut datetime default now(),
primary key(id_mutirao)
)character set utf8 collate utf8_unicode_ci;

create table cadastro_usuario(
id_usuario int auto_increment not null,
id_mutirao int,
cad_tipo varchar(7) not null,
nomec varchar(60) not null,
dt_nasc date not null,
cpf varchar(14) not null,
telefone varchar(12) not null,
cep varchar(9) not null,
endereco varchar(60) not null,
email varchar(80) not null,
senha varchar(50) not null,
data_cad datetime default now(),
unique(email, cpf),
primary key(id_usuario),
constraint fk_usuario_mutirao 
foreign key(id_mutirao) 
references mutirao(id_mutirao)
)character set utf8 collate utf8_unicode_ci;