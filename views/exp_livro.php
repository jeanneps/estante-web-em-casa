<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/models/livro.php';

$id_livro = $_GET['id'];
$mostar_livro = livros::selecionarLivro($id_livro);

?>
<main>

<img src="data:image;base64,<?= base64_encode($mostar_ivro['capa']) ?>" alt="">
    <div>
      <h1><?= htmlspecialchars($mostar_livro['autor']) ?></h1>
      <h1><?= htmlspecialchars($mostar_livro['titulo']) ?></h1>
      <h1><?= htmlspecialchars($mostar_livro['categoria']) ?></h1>
    </div>
    <div> <p><?= htmlspecialchars($mostar_livro['sinopse']) ?></p></div>


<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_rodape.php';
?>