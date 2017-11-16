create database gymarbete;

use gymarbete

create table user (id int auto_increment primary key, name varchar(50) not null, 
	uname varchar(50), pword varchar(255) not null, email varchar(100), image blob);