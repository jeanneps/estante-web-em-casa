<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/configs/conexao.php';

class livros
{
    public $id_livro;
    public $titulo;
    public $autor;
    public $sinopse;
    public $categoria;
    public $capa;

public function __construct($id = false)
{
    if($id){
        $this->id_livro = $id;
    }   
}
  
// function para cadastrar livro pelo adim
    public function cadastrarLivros()
    {
        try {
            $conn = Conexao::conectar();
            $sql = 'INSERT INTO livros (titulo, autor, sinopse, categoria, capa) VALUES (:titulo, :autor, :sinopse, :categoria, :capa)';
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':titulo', $this->titulo);
            $stmt->bindValue(':autor', $this->autor);
            $stmt->bindValue(':sinopse', $this->sinopse);
            $stmt->bindValue(':categoria', $this->categoria);
            $stmt->bindValue(':capa', $this->capa);

            $stmt->execute();
        } catch (PDOException $erro) {
            echo $erro->getMessage();
        }
    }
// function para exibir todos os livros no index
    static function mostrarLivros()
    {
        try {
            $conn = Conexao::conectar();
            $sql = 'SELECT id_livro, titulo, capa FROM livros';
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $erro) {
            echo $erro->getMessage();
        }
    }
// function para selecionar/exibir somente um livro em outra pagina exp_livro
    static function selecionarLivro($id_livro)
    {
        try {
            $conn = Conexao::conectar();
            $sql = 'SELECT * FROM livros WHERE id_livro = :id';
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':id', $id_livro, PDO::PARAM_INT);

            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $erro) {
            echo $erro->getMessage();
        }
    }

//deletar livros
    static function deletarLivro($id_livro)
    {
        try {
            $conn = Conexao::conectar();
            $sql = 'DELETE FROM livros WHERE id_livro = :id';
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':id', $id_livro);

            $stmt->execute();
        } catch (PDOException $erro) {
            echo $erro->getMessage();
        }
    }
    //editar livros
    public function editarLivro() {
        try {
            $conn = Conexao::conectar();
            $sql = 'UPDATE livros SET titulo = :titulo, autor = :autor, sinopse = :sinopse, categoria = :categoria, capa = :capa WHERE id_livro = :id';
            $stmt = $conn->prepare($sql);
    
            $stmt->bindValue(':id', $this->id_livro);
            $stmt->bindValue(':titulo', $this->titulo);
            $stmt->bindValue(':autor', $this->autor);
            $stmt->bindValue(':sinopse', $this->sinopse);
            $stmt->bindValue(':categoria', $this->categoria);
            $stmt->bindValue(':capa', $this->capa);
            
    
            $stmt->execute();
    
        } catch (PDOException $erro) {
            echo $erro->getMessage();
        }
    }
}
