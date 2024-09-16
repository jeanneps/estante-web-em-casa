<?php
// Inclui o arquivo de configuração com constantes para conexão com o banco de dados
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/configs/config.php';

class Conexao {
    // Método estático para criar uma conexão com o banco de dados
    static function conectar() {
        // Cria uma nova instância de PDO para conexão com o banco de dados
        $conn = new PDO(
            'mysql:host=' . LOCAL_BANCO . ';dbname=' . NOME_BANCO . ';charset=utf8', // DSN (Data Source Name) que especifica o tipo de banco de dados, o host, o nome do banco de dados e o charset
            USUARIO, // Nome de usuário para a conexão
            SENHA // Senha para a conexão
        );

        // Define o modo de erro do PDO para lançar exceções em caso de erros
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Retorna a conexão estabelecida
        return $conn; 
    }
}
?>
