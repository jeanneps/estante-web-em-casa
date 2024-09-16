<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/auth/auth.php';
session_start();


// Inclui o arquivo com a classe Auth


// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtém os dados do formulário
    $email = $_POST['email'];
    $senha = $_POST['senha'];


    // Chama o método de login da classe Auth
    Auth::login($email, $senha);

    if (Auth::painelAdmin()) {
        header('Location: /jeane/estante_web/views/painel_admin.php');
        exit();
    } else {
        // Redirecionar para uma página de erro ou exibir uma mensagem de erro
        header('Location: /jeane/estante_web/index.php');
        exit();
    }
} 
