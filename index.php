<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/models/livros.php';

$livros = livros::mostrarLivros();

?>

<main id="index">
    <div id="livros_conteiner">
        <?php foreach ($livros as $livro): ?>

            <img id="capa" src="data:image/jpeg;base64, <?php echo base64_encode($livro['capa']); ?>" alt="capa de livro">
            <h2 id="titulo"><?php echo htmlspecialchars($livro['titulo']); ?></h2>
            <img src="/jeane/estante_web/imgs/favorito.svg" alt="">

        <?php endforeach; ?>
    </div>
    <?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_rodape.php';
    ?>