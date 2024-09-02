<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/models/livros.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_cabecalho.php';

$id_livro = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$livro = livros::selecionarLivro($id_livro);

if (!$livro) {
    echo "Livro não encontrado.";
    exit();
}
?>

<main class="exp_livro">

    <div class="livros_conteiner2">
        <h1>Sinopse</h1>
       <div class="lado"> <img src="data:image/jpeg;base64,<?= base64_encode($livro['capa']); ?>" alt="capa do livro">
       <p style="font-size: 20px;"><?= htmlspecialchars($livro['sinopse']) ?>
    </p>
</div>
        <h4><?= htmlspecialchars($livro['autor']); ?></h4>
        <h1><?= htmlspecialchars($livro['titulo']); ?></h1>
        <h4><?= htmlspecialchars($livro['categoria']); ?></h4>
        
    </div>
</main>
