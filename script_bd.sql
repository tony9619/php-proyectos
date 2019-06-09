create database chat_bd;

use chat_bd;

create table chat(
 id_chat int(11) primary key AUTO_INCREMENT, 
 usuario varchar(50),
 mensaje varchar(255),
 fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);