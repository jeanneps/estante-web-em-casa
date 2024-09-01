<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/auth/auth.php';
$logado = Auth::estarLogado();
  
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estante Web</title>
    <link rel="stylesheet" href="/jeane/estante_web/css/style.css">
    <link rel="shortcut icon" href="/jeane/estante_web/imgs/favicon.icon.jpg" type="image/x-icon">
</head>

<body>
    <header>
        <div class="logo-busca">
            <h1>Estante Web</h1>
            <form action="">
                <label for="busca">Buscar</label>
                <input type="search" name="busca" id="busca" style="width: 200px; height: 25px;">
            </form>

        </div>

    </header>
    <nav aria-label="Navegação principal">
        <a href="/jeane/estante_web/index.php"style="font-size: 20px">inicio</a>
        <a href="/jeane/estante_web/views/quem_somos.php"style="font-size: 20px">Quem somos</a>
        <a href="/jeane/estante_web/views/contato.php"style="font-size: 20px">Contato</a>
       
        <?php if ($logado): ?> 
            <a href="/jeane/estante_web/views/favoritos.php"
            class="alinhar" style="font-size: 20px"><img src="/jeane/estante_web/imgs/star.png.png" alt="ícone de favoritos" width="20px" height="20px" >
            Favoritos
        </a>
            <h1 style="font-size: 20px">Olá, Usuario</h1>
        <button class="hamburguer">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <ul class="nav-links">
            <li><a href="/jeane/estante_web/views/perfil.php">Perfil</a></li>
            <li><a href="/jeane/estante_web/controllers/logout_controller.php">Sair</a></li>
        </ul> 
        <?php else: ?>
            <a href="/jeane/estante_web/views/login.php"style="font-size: 20px">Login</a>
         

        <?php endif; ?>
    </nav>
    <script>
        // JavaScript para alternar o menu hambúrguer
        document.querySelector('.hamburguer')?.addEventListener('click', function() {
            this.classList.toggle('active');
            document.querySelector('.nav-links')?.classList.toggle('active');
        });
    </script>