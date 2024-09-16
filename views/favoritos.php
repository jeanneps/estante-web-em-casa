<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante_web/models/favoritos.php';


//$listar_favorito = Favorito::listarFavoritos($_SESSION['id_usuario']);
?>

    <main id="favoritos">
        <!-- <section class="container">

            <div class="conteiner2"><img src="../imgs/seta.svg" alt="icone de seleção" width="30px" height="30px">Didáticos
            </div>
            <div class="conteiner2"><img src="../imgs/seta.svg" alt="icone de seleção" width="30px" height="30px">Religiosos
            </div>
            <div class="conteiner2"><img src="../imgs/seta.svg" alt="icone de seleção" width="30px" height="30px">Romances
            </div>
            <div class="conteiner2"><img src="../imgs/seta.svg" alt="icone de seleção" width="30px" height="30px">Ficção
            </div>
            <div class="conteiner2"><img src="../imgs/seta.svg" alt="icone de seleção" width="30px" height="30px">Suspense e terror
            </div>
            <div class="conteiner2"><img src="../imgs/seta.svg" alt="icone de seleção" width="30px" height="30px">Infantil
            </div>
            <div class="conteiner2"><img src="../imgs/seta.svg" alt="icone de seleção" width="30px" height="30px">Aventura

        </section> -->


        <div class="container3"> Não há categorias adicionadas
        <?php foreach ($listar_favorito as $favorito) : ?>
          <img src="data:image; base64, <?= base64_encode($favorito['capa']) ?>" alt="" />
          <h1><?= $favorito['titulo'] ?></h1>
        </div>
      <?php endforeach; ?>




        </div>

    </main>
    <?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_rodape.php';
?>