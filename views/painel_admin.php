<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_cabecalho.php';
// Verifica se o usuário está logado e tem permissão de administrador
// Verifica se o usuário está logado e se tem nível de acesso 2
if (!Auth::estarLogado() || !isset($_SESSION['nivel_acesso']) || $_SESSION['nivel_acesso'] != 2) {
    header('Location: /jeane/estante_web/views/login.php');
    exit();
}
?>
<main>
    <section class="perfil_admin">
        <h1>Olá, Admin</h1>
        <form>
            <div><button type="submit" value="Gerenciar Categorias">Gerenciar Categorias</button></div>
            <div><button type="submit" value="Gerenciar Livros">Gerenciar Livros</button></div>
        </form>
    </section>
</main>




