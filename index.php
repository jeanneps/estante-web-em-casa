<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/models/livro.php';

$listagem_livro = livro::listarLivros();
?>



<main id="index">
<div id="div_campanhas">
    <?php foreach ($listagem_livro as $livro): ?>
      <div class="card">
        <a href="/jeane/estante_web/views/exp_livro.php?id=<?= $livro['id_livro'] ?>" id="link_livro">
          
          <img src="data:image; base64, <?= base64_encode($livro['capa']) ?> " alt="" >
        </a>
      </div>
    <?php endforeach; ?>
  </div>



    <?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_rodape.php';
?>