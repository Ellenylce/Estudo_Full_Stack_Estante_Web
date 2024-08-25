CREATE DATABASE estante_web; --Criando banco de dados Estante Web
USE estante_web; -- Acessando o banco de dados

-- Tabela usuarios
CREATE TABLE usuarios (
    id_usuario INT PRIMARY KEY AUTO_INCREMENT,
    nome_user VARCHAR(100),
    email_user VARCHAR(100) UNIQUE,
    senha_user VARCHAR(255),
    foto_user BLOB
);


-- Para identificar os administradores irei criar uma senha fixa nop banco de dados para que o administrador utilize no login para entrar na pagina do administrador e se cadastrar e ir pro bancos de dados
-- Tabela administradores
CREATE TABLE administradores (
    id_adm INT PRIMARY KEY AUTO_INCREMENT,
    nome_adm VARCHAR(100),
    email_adm VARCHAR(100) UNIQUE,
    senha_adm VARCHAR(255),
    foto_adm BLOB,
    contato_adm VARCHAR(20)
);


-- Tabela categorias
CREATE TABLE categorias (
    id_categoria INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100)
);

-- inserir as categorias de livros
INSERT INTO categorias (nome) VALUES
('Educativo'), ('Religioso'), ('Infantil'), ('Aventura'), ('Ficção Científica'), ('Romance');

-- Tabela de livros
CREATE TABLE livros (
    id_livro INT PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(255),
    autor VARCHAR(100),
    sinopse TEXT,
    capa BLOB
);

-- Tabela Relacionamento (livro_categoria)
CREATE TABLE livro_categoria (
    id_livro INT,
    id_categoria INT,
    PRIMARY KEY (id_livro, id_categoria), --mesmo livro não pode ser associado à mesma categoria mais de uma vez.
    FOREIGN KEY (id_livro) REFERENCES livros(id_livro), 
    FOREIGN KEY (id_categoria) REFERENCES categorias(id_categoria) 
);

-- Tabela favoritos
CREATE TABLE favoritos (
    id_favorito INT PRIMARY KEY AUTO_INCREMENT,
    usuario_id INT,
    livro_id INT,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id_usuario),
    FOREIGN KEY (livro_id) REFERENCES livros(id_livro)
);