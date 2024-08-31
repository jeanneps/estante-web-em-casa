<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/configs/conexao.php';

class categoria {
    public $id_categoria;
    public $nome_categoria;


   public function cadastrarCategoria()
{
    try {
        $conn = Conexao::conectar();
        $sql = 'INSERT INTO categoria (nome_categoria) VALUES (:nome_categoria)';
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':nome_categoria', $this->nome_categoria);
      
        $stmt->execute();
    } catch (PDOException $erro) {
        echo $erro->getMessage();
    }
}


static function selecionarCategoria($id_categoria)
{
    try {
        $conn = Conexao::conectar();
        $sql = 'SELECT * FROM categoria WHERE id_categoria = :id';
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':id', $id_categoria, PDO::PARAM_INT);

        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $erro) {
        echo $erro->getMessage();
    }
}
}