<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/models/livros.php';

$id_livro = $_GET['id'];
$livros = livros::selecionarLivro($id_livro);

?>
<main>
<div>
<?php foreach ($livros as $id_livro): ?>
  <img src="data:image;base64,<?= base64_encode($livros['capa']);?>" alt="">
    <h1><?= htmlspecialchars($livros['autor']) ?></h1>
    <h1><?= htmlspecialchars($livros['titulo']) ?></h1>
    <h1><?= htmlspecialchars($livros['categoria']) ?></h1>
  </div>
  <div>
    <p><?= htmlspecialchars($livros['sinopse']) ?></p>

    <?php endforeach; ?>
  </div>


  <?php
  require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_rodape.php';
  ?>