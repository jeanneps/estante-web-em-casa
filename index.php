<?php
// Inclui o cabeçalho do site
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_cabecalho.php';

// Inclui o modelo de livros para acesso às funções relacionadas aos livros
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/models/livros.php';

// Obtém a lista de livros usando a função mostrarLivros da classe livros
$livros = livros::mostrarLivros();
?>

<main id="index">
    <!-- Seção de categorias de livros favoritos -->
    <div id="favoritos">
        <section class="container">
            <!-- Lista de categorias com ícones -->
            <div class="conteiner2">
                <img src="/jeane/estante_web/imgs/seta.svg" alt="icone de seleção" width="30px" height="30px">
                Didáticos
            </div>
            <div class="conteiner2">
                <img src="/jeane/estante_web/imgs/seta.svg" alt="icone de seleção" width="30px" height="30px">
                Religiosos
            </div>
            <div class="conteiner2">
                <img src="/jeane/estante_web/imgs/seta.svg" alt="icone de seleção" width="30px" height="30px">
                Romances
            </div>
            <div class="conteiner2">
                <img src="/jeane/estante_web/imgs/seta.svg" alt="icone de seleção" width="30px" height="30px">
                Ficção
            </div>
            <div class="conteiner2">
                <img src="/jeane/estante_web/imgs/seta.svg" alt="icone de seleção" width="30px" height="30px">
                Suspense e terror
            </div>
            <div class="conteiner2">
                <img src="/jeane/estante_web/imgs/seta.svg" alt="icone de seleção" width="30px" height="30px">
                Infantil
            </div>
            <div class="conteiner2">
                <img src="/jeane/estante_web/imgs/seta.svg" alt="icone de seleção" width="30px" height="30px">
                Aventura
            </div>
        </section>
    </div>
 
    <!-- Seção para exibir a lista de livros -->
    <div class="livros_conteiner">
        <?php foreach ($livros as $livro): ?>
            <!-- Loop para exibir cada livro -->
            <div class="livro">
                <!-- Link para a página de detalhes do livro -->
                <a href="/jeane/estante_web/views/exp_livro.php?id=<?= htmlspecialchars($livro['id_livro']) ?>">
                    <!-- Imagem da capa do livro, convertida para base64 -->
                    <img class="capa" src="data:image/jpeg;base64, <?= base64_encode($livro['capa']); ?>" alt="capa de livro">
                    <!-- Título do livro -->
                    <h2 class="titulo" style="color: #000;" ><?= htmlspecialchars($livro['titulo']); ?></h2>
                </a>
                <!-- Ícone de favorito -->
                <img src="/jeane/estante_web/imgs/favorito.svg" alt="" class="favorito2">
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Inclui o rodapé do site -->
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_rodape.php'; ?>
