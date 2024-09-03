<?php
// require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/auth/auth.php';
Auth::painelAdmin(); // Verifica se o usuário tem permissão de admin

// require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_cabecalho.php';
?>
<main class="perfil">
    <section class="container_perfil">
        <h1>Olá, Admin</h1>
        <form>
            <div><button type="submit" value="Gerenciar Categorias">Gerenciar Categorias</button></div>
            <div><button type="submit" value="Gerenciar Livros">Gerenciar Livros</button></div>
        </form>
    </section>
</main>
<?php
// require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_rodape.php';
?>
