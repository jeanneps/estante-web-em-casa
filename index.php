<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/models/livros.php';

$livros = livros::mostrarLivros();
 
?>

<main id="index">
 
<div id="favoritos">
        <section class="container">

            <div class="conteiner2"><img src="/jeane/estante_web/imgs/seta.svg" alt="icone de seleção" width="30px" height="30px">Didáticos
            </div>
            <div class="conteiner2"><img src="/jeane/estante_web/imgs/seta.svg" alt="icone de seleção" width="30px" height="30px">Religiosos
            </div>
            <div class="conteiner2"><img src="/jeane/estante_web/imgs/seta.svg" alt="icone de seleção" width="30px" height="30px">Romances
            </div>
            <div class="conteiner2"><img src="/jeane/estante_web/imgs/seta.svg" alt="icone de seleção" width="30px" height="30px">Ficção
            </div>
            <div class="conteiner2"><img src="/jeane/estante_web/imgs/seta.svg" alt="icone de seleção" width="30px" height="30px">Suspense e terror
            </div>
            <div class="conteiner2"><img src="/jeane/estante_web/imgs/seta.svg" alt="icone de seleção" width="30px" height="30px">Infantil
            </div>
            <div class="conteiner2"><img src="/jeane/estante_web/imgs/seta.svg" alt="icone de seleção" width="30px" height="30px">Aventura

        </section>
 </div>
 
    <div class="livros_conteiner">
        <?php foreach ($livros as $livro): ?>
            <div class="livro">
            <a href="/jeane/estante_web/views/exp_livro.php?id=<?= htmlspecialchars($livro['id_livro']) ?>">
                <img class="capa" src="data:image/jpeg;base64, <?= base64_encode($livro['capa']); ?>" alt="capa de livro">
                <h2 class="titulo" ><?= htmlspecialchars($livro['titulo']); ?></h2>
            </a>
            
            <form action="/estante_web/controllers/favoritar_livros_controller.php" method="post">
          <input type="hidden" name="id_livro" value="<?= $livro['id_livro'] ?>">
          <input type="hidden" name="id_usuario" value="<?= $_SESSION['id_usuario'] ?>">
          <button type="submit"><img src="/jeane/estante_web/imgs/favorito.svg" alt="" class="favorito2"></button>
             
            </div>
            <?php endforeach; ?>
    </div>




    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_rodape.php'; ?>

