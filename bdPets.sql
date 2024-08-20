create database dbPets CHARACTER SET utf8 COLLATE utf8_general_ci;

use dbPets;

create table tbPets(
codPet int not null auto_increment,
nomePet varchar(100) not null,
racaPet varchar(50) not null,
nomeDono varchar(100) not null,
telDono char(10) not null,
cpfDono char(14) not null,
primary key(codPet))ENGINE=InnoDB DEFAULT CHARSET=utf8 DEFAULT COLLATE utf8_unicode_ci;