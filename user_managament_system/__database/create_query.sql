
-- create database if not exists corso_formarete;

-- show databases;
use corso_formarete;

-- create table if not exists User(
--     userId int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
--     firstName varchar(255) NOT NULL,
--     lastName varchar(255) NOT NULL,
--     email varchar(150) NOT NULL,
--     birthday DATE
-- );


-- show tables;
-- describe user;


insert into user (firstName,lastName,email,birthday)
values ('Mario','Rossi','rossi.m@email.com','1980-01-20');

select * from user;


