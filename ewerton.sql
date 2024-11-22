create database EWERTON;
use EWERTON;

CREATE TABLE Clientes (
    ID_cliente INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    telefone VARCHAR(15)
);

CREATE TABLE Colaboradores (
    ID_colaborador INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    cargo VARCHAR(50)
);

CREATE TABLE Chamados (
    ID_chamado INT PRIMARY KEY AUTO_INCREMENT,
    descricao TEXT NOT NULL,
    criticidade ENUM('baixa', 'média', 'alta') NOT NULL,
    status ENUM('aberto', 'em andamento', 'resolvido') DEFAULT 'aberto',
    data_abertura TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    ID_cliente INT,
    ID_colaborador INT,
    FOREIGN KEY (ID_cliente) REFERENCES Clientes(ID_cliente),
    FOREIGN KEY (ID_colaborador) REFERENCES Colaboradores(ID_colaborador)
);
