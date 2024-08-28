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

CREATE TABLE livros (
  id INT PRIMARY KEY AUTO_INCREMENT,
  titulo VARCHAR(255),
  paginas INT,
  autor VARCHAR(255),
  sinopse TEXT,
  genero VARCHAR(50),
  capa LONGBLOB,
  id_usuario INT,
  FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario)
);


INSERT INTO livros (titulo, autor, paginas, sinopse, capa, genero)
VALUES 
('Orgulho e Preconceito', 'Jane Austen', 432, 'Um clássico da literatura, que conta a história de amor entre Elizabeth Bennet e o orgulhoso Mr. Darcy, explorando temas como julgamentos sociais e a importância da verdadeira conexão.', '', 'Romance'),

('A Culpa é das Estrelas', 'John Green', 336, 'Hazel e Gus são dois adolescentes com câncer que se apaixonam e embarcam em uma jornada emocionante, confrontando a finitude da vida e a força do amor.', '', 'Romance'),

('Um Dia', 'David Nicholls', 334, 'Quentin Jacobsen se apaixona por sua vizinha misteriosa, Margo, que desaparece misteriosamente. Uma jornada de autodescoberta e a busca por um amor perdido.', '', 'Romance'),

('Cidade de Papel', 'John Green', 384, 'Emma e Dexter se encontram em um dia específico a cada ano por 20 anos, construindo uma amizade profunda que se transforma em algo mais. Um romance emocionante sobre amor, perdas e escolhas.', '', 'Romance'),

('Normal People', 'Sally Rooney', 288, 'Connell e Marianne são dois jovens de classes sociais diferentes que se apaixonam na Irlanda. Um romance contemporâneo que explora temas como desejo, insegurança e a complexidade das relações humanas.', '', 'Romance'),

('Um amor para recordar', 'Nicholas Sparks', 256, 'Landon Carter, um adolescente popular e atlético, conhece Jamie Sullivan, uma garota inteligente e devota, em uma apresentação escolar. Inicialmente atraído por sua beleza e bondade, Landon se vê cada vez mais envolvido em um relacionamento profundo e transformador com Jamie. ', '', 'Romance'),

('Use a cabeça! Python', 'Allen B. Downey', 616, 'Aborda os fundamentos da programação de forma clara e concisa, utilizando Python como linguagem principal. Ideal para iniciantes. ', '', 'Educativo'),

('Use a cabeça! Java', 'Kathy Sierra, Bert Bates e Trisha Gee', 736, 'Aborda os fundamentos da programação de forma clara e concisa, utilizando Java como linguagem principal. Ideal para iniciantes. ', '', 'Educativo')
;


-- -- Tabela categorias
-- CREATE TABLE categorias (
--     id_categoria INT PRIMARY KEY AUTO_INCREMENT,
--     nome VARCHAR(100)
-- );

-- -- inserir as categorias de livros
-- INSERT INTO categorias (nome) VALUES
-- ('Educativo'), ('Religioso'), ('Infantil'), ('Aventura'), ('Ficção Científica'), ('Romance');

-- -- Tabela de livros
-- CREATE TABLE livros (
--     id_livro INT PRIMARY KEY AUTO_INCREMENT,
--     titulo VARCHAR(255),
--     autor VARCHAR(100),
--     sinopse TEXT,
--     capa BLOB
-- );

-- -- Tabela Relacionamento (livro_categoria)
-- CREATE TABLE livro_categoria (
--     id_livro INT,
--     id_categoria INT,
--     PRIMARY KEY (id_livro, id_categoria), --mesmo livro não pode ser associado à mesma categoria mais de uma vez.
--     FOREIGN KEY (id_livro) REFERENCES livros(id_livro), 
--     FOREIGN KEY (id_categoria) REFERENCES categorias(id_categoria) 
-- );

-- -- Tabela favoritos
-- CREATE TABLE favoritos (
--     id_favorito INT PRIMARY KEY AUTO_INCREMENT,
--     usuario_id INT,
--     livro_id INT,
--     FOREIGN KEY (usuario_id) REFERENCES usuarios(id_usuario),
--     FOREIGN KEY (livro_id) REFERENCES livros(id_livro)
-- );