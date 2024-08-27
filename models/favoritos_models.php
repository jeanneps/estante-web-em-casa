<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/configs/conexao.php';


class Favorito {
    public $pdo;
    
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
    
    public function adicionarFavorito($id_usuario, $id_livro) {
        $sql = "INSERT INTO Favoritos (id_usuario, id_livro) VALUES (:id_usuario, :id_livro)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id_usuario', $id_usuario, PDO::PARAM_INT);
        $stmt->bindParam(':id_livro', $id_livro, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function removerFavorito($id_usuario, $id_livro) {
        $sql = "DELETE FROM Favoritos WHERE id_usuario = :id_usuario AND id_livro = :id_livro";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id_usuario', $id_usuario, PDO::PARAM_INT);
        $stmt->bindParam(':id_livro', $id_livro, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function listarFavoritos($id_usuario) {
        $sql = "SELECT * FROM Favoritos WHERE id_usuario = :id_usuario";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id_usuario', $id_usuario, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
