<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/auth/auth.php';

    $email_login = $_POST['email'];
    $senha_login = $_POST['senha'];

    Auth::login($email_login, $senha_login);
?>