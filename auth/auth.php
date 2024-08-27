<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/configs/conexao.php';
session_start();
class Auth
{

    static function login($email, $senha)
    {
        try {
            $conn = Conexao::conectar();

            // Verifica se é um doador
            $sql = 'SELECT * FROM usuarios WHERE email = :email';

            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':email', $email);

            $stmt->execute();

            $resultado = $stmt->fetch();

            if (!empty($resultado) && password_verify($senha, $resultado['senha'])) {
                $_SESSION['id_usuario'] = $resultado['id_usuario'];
                $_SESSION['email'] = $resultado['email'];
                $_SESSION['foto_perfil'] = $resultado['foto-perfil'];
                $_SESSION['nome'] = $resultado['nome'];
                


                header('Location: /jeane/estante_web/index.php');
                exit();
            } else {
                setcookie('aviso', 'Você errou o E-mail ou a Senha!!!', time() + 3600, '/jeane/estante_web/');
                header('Location: /jeane/estante_web/views/login.php');
                exit();
            }
        } catch (PDOException $erro) {
            echo $erro->getMessage();
        }
    }
}
