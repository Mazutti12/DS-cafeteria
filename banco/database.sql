CREATE DATABASE cafeteria;
USE cafeteria;

CREATE TABLE pedidos(
id int AUTO_INCREMENT PRIMARY KEY,
nome varchar(255) NOT NULL,
preco float NOT NULL
);