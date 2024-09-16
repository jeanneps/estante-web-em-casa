<?php
// Inclui o arquivo de conexão com o banco de dados
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/configs/conexao.php';

// Inicia a sessão para gerenciar variáveis de sessão
session_start();

class Auth
{
    // Método estático para realizar o login do usuário
    static function login($email, $senha)
    {
        try {
            // Estabelece uma conexão com o banco de dados
            $conn = Conexao::conectar();

            // SQL para selecionar o usuário com o email fornecido
            $sql = 'SELECT * FROM usuarios WHERE email = :email';
            $stmt = $conn->prepare($sql);

            // Vincula o valor do parâmetro :email ao valor passado para a função
            $stmt->bindValue(':email', $email);

            // Executa a consulta SQL
            $stmt->execute();

            // Obtém o resultado da consulta
            $resultado = $stmt->fetch();

            // Verifica se o resultado não está vazio e se a senha fornecida corresponde à senha armazenada
            if (!empty($resultado) && password_verify($senha, $resultado['senha'])) {
                // Define variáveis de sessão com as informações do usuário
                $_SESSION['id_usuario'] = $resultado['id_usuario'];
                $_SESSION['email'] = $resultado['email'];
                $_SESSION['foto_perfil'] = $resultado['foto_perfil'];
                $_SESSION['nome'] = $resultado['nome'];
                $_SESSION['nivel_acesso'] = $resultado['nivel_acesso'];

                // echo '<pre>';
                //var_dump($_SESSION);
                //echo '</pre>';
            } else {
                // Define um cookie para informar que houve um erro de login
                setcookie('aviso', 'Você errou o E-mail ou a Senha!!!', time() + 3600, '/jeane/estante_web/');
                // Redireciona o usuário de volta para a página login
                header('Location: /jeane/estante_web/views/login.php');
                exit(); // Interrompe a execução do script após o redirecionamento
            }
        } catch (PDOException $erro) {
            // Exibe a mensagem de erro se ocorrer uma exceção PDO
            echo $erro->getMessage();
        }
    }

    // Método estático para realizar o logout do usuário
    static function logout()
    {
        // Limpa todas as variáveis de sessão
        session_unset();
        // Destrói a sessão atual
        session_destroy();
        // Redireciona o usuário para a página inicial
        header('Location: /jeane/estante_web/index.php');
        exit(); // Interrompe a execução do script após o redirecionamento
    }

    // Método estático para verificar se o usuário está logado
    static function estarLogado()
    {
        // Retorna true se a variável de sessão 'id_usuario' estiver definida, indicando que o usuário está logado
        return isset($_SESSION['id_usuario']);
        // Nota: A chamada `exit()` após o `return` é redundante e desnecessária
        exit();
    }

    // Método estático para verificar se o usuário tem acesso de administrador
    static function painelAdmin()
    {
        // Verifica se a sessão está ativa e se o nível de acesso é 2
        return isset($_SESSION['nivel_acesso']) && $_SESSION['nivel_acesso'] == 2;
    }
}
