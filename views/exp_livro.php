<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/models/livro.php';

$id_livro = $_GET['id'];
$mostar_livro = livro::mostrarLivro($id_livro);

?>
<main>

<img src="data:image;base64,<?= base64_encode($mostar_ivro['capa']) ?>" alt="" id="img_mostrarCampanha">
    <div id="main-campanha">
      <h1 class="nome_hospital">O <?= htmlspecialchars($mostar_campanha['hospital']) ?> precisa de doação de sangue do tipo</h1>
      <span class="tipo_sanguineoCampanha"><?= htmlspecialchars($mostar_campanha['tipo_sanguineo']) ?></span>
    </div>
    <p class="paragrafo_campanha">Entre os dias <?= date_format(date_create(htmlspecialchars($mostar_campanha['data_inicio'])), 'd')  ?> a <?= date_format(date_create(htmlspecialchars($mostar_campanha['data_fim'])), 'd/m/Y') ?></p>

    <p class="paragrafo_campanha">
      Contatos:
      <a href="#" id="telefone-link"><?= htmlspecialchars($mostar_campanha['telefone']) ?></a>






<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_rodape.php';
?>