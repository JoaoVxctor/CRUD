CREATE DATABASE IF NOT EXISTS crud;

USE crud;
CREATE TABLE IF NOT EXISTS cadastro(
	id INT(11)  AUTO_INCREMENT PRIMARY KEY, 
	razaoSocial VARCHAR(50) NOT NULL,
	nomeFantasia VARCHAR(50) NOT NULL,
    cnpj VARCHAR(50) NOT NULL,
	email VARCHAR(30) NOT NULL,
    endereco VARCHAR(50) NOT NULL,
    cidade VARCHAR(50) NOT NULL,
    estado VARCHAR(50) NOT NULL,
    telefone VARCHAR(30),
    dataDeCadastro VARCHAR(20),
    categoria VARCHAR(30),
    status VARCHAR(10),
    agencia VARCHAR(20),
    conta VARCHAR(25)
);