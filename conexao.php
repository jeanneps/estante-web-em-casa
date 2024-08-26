<?php

define('NOME_BANCO', 'estante');
define('LOCAL_BANCO', 'localhost');
define('USUARIO', 'root');
define('SENHA', '');

class Conexao {
    static function conectar() {
        $conn = new PDO('mysql:host=' . LOCAL_BANCO . ';dbname=' . NOME_BANCO . ';charset=utf8', USUARIO, SENHA);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn; 
    }
}