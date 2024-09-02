<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/configs/conexao.php';

class Usuario
{
    public $id_usuario;
    public $email;
    public $senha;
    public $foto_perfil;
    public $nome;
    public $nivel_acesso;

    public function cadastrarUsuario()
    {
        try {
            $conn = Conexao::conectar();
            $sql = 'INSERT INTO usuarios (email, senha, foto_perfil, nome, nivel_acesso) VALUES (:email, :senha, :foto_perfil, :nome, :nivel_acesso)';
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':email', $this->email);
            $stmt->bindValue(':senha', $this->senha);
            $stmt->bindValue(':foto_perfil', $this->foto_perfil);
            $stmt->bindValue(':nome', $this->nome);
            $stmt->bindValue(':nivel_acesso', $this->nivel_acesso);
            $stmt->execute();
        } catch (PDOException $erro) {
            echo $erro->getMessage();
        }
    }

    public function editarUsuario()
    {
        try {
            $conn = Conexao::conectar();
            $sql = 'UPDATE usuarios SET email = :email, senha = :senha, foto_perfil = :foto_perfil, nome = :nome, nivel_acesso = :nivel_acesso WHERE id_usuario = :id';
            $stmt = $conn->prepare($sql);

            $stmt->bindValue(':id', $this->id_usuario);
            $stmt->bindValue(':email', $this->email);
            $stmt->bindValue(':senha', $this->senha);
            $stmt->bindValue(':foto_perfil', $this->foto_perfil);
            $stmt->bindValue(':nome', $this->nome);
            $stmt->bindValue(':nivel_acesso', $this->nivel_acesso);

            $stmt->execute();
        } catch (PDOException $erro) {
            echo $erro->getMessage();
        }
    }
}
?>
