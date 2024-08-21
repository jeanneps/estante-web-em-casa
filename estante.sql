-- Cria o banco de dados chamado 'estante'
CREATE DATABASE estante;

-- Seleciona o banco de dados 'estante' para usar nas operações seguintes
USE estante;

-- Cria a tabela 'Usuarios'
CREATE TABLE Usuarios (
    id_usuario INT AUTO_INCREMENT PRIMARY KEY, -- Identificador único do usuário (chave primária, autoincrementa)
    email VARCHAR(255) UNIQUE NOT NULL, -- E-mail do usuário (único e não nulo)
    senha VARCHAR(255) NOT NULL, -- Senha do usuário (não nula)
    foto_perfil VARCHAR(255), -- Caminho ou URL da foto de perfil do usuário
    nome VARCHAR(255) -- Nome do usuário
);

-- Cria a tabela 'Livros'
CREATE TABLE Livros (
    id_livro INT AUTO_INCREMENT PRIMARY KEY, -- Identificador único do livro (chave primária, autoincrementa)
    titulo VARCHAR(255) NOT NULL, -- Título do livro (não nulo)
    autor VARCHAR(255) NOT NULL, -- Autor do livro (não nulo)
    sinopse TEXT, -- Sinopse do livro
    capa VARCHAR(255) -- Caminho ou URL da imagem da capa do livro
);

-- Cria a tabela 'Categorias'
CREATE TABLE Categorias (
    id_categoria INT AUTO_INCREMENT PRIMARY KEY, -- Identificador único da categoria (chave primária, autoincrementa)
    nome_categoria VARCHAR(255) NOT NULL -- Nome da categoria (não nulo)
);

-- Cria a tabela 'Livros_Categorias' para o relacionamento muitos-para-muitos entre livros e categorias
CREATE TABLE Livros_Categorias (
    id_livro INT, -- Identificador do livro (chave estrangeira)
    id_categoria INT, -- Identificador da categoria (chave estrangeira)
    PRIMARY KEY (id_livro, id_categoria), -- Chave primária composta das colunas id_livro e id_categoria
    FOREIGN KEY (id_livro) REFERENCES Livros(id_livro) ON DELETE CASCADE, -- Chave estrangeira referenciando 'Livros', exclui entradas na tabela se o livro for removido
    FOREIGN KEY (id_categoria) REFERENCES Categorias(id_categoria) ON DELETE CASCADE -- Chave estrangeira referenciando 'Categorias', exclui entradas na tabela se a categoria for removida
);

-- Cria a tabela 'Favoritos' para armazenar os livros favoritados pelos usuários
CREATE TABLE Favoritos (
    id_favorito INT AUTO_INCREMENT PRIMARY KEY, -- Identificador único do favorito (chave primária, autoincrementa)
    id_usuario INT, -- Identificador do usuário que favoritou o livro (chave estrangeira)
    id_livro INT, -- Identificador do livro que foi favoritado (chave estrangeira)
    FOREIGN KEY (id_usuario) REFERENCES Usuarios(id_usuario) ON DELETE CASCADE, -- Chave estrangeira referenciando 'Usuarios', exclui entradas na tabela se o usuário for removido
    FOREIGN KEY (id_livro) REFERENCES Livros(id_livro) ON DELETE CASCADE -- Chave estrangeira referenciando 'Livros', exclui entradas na tabela se o livro for removido
);
