<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/models/livro.php';
// require_once $_SERVER['DOCUMENT_ROOT'] . '/estante_web/models/categoria.php';


$id_livro = $_GET['id_livro'];
$livro = new Livros ($id_livro);

?>

<main class="adicionar_categorias">

    <section class="ad_livros">
        <h2 class="box">Editar Livro <img src="/jeane/estante_web/imgs/config.svg" alt="ícone seta" width="40px" height="40px"></h2>

        <form action="/jeane/Estante_Web/controllers/livro_edit_controller.php" method="post">
        <input type="hidden" name="id" value="<?= $livro->id_livro?>">
            <div>
                <label for="adicionar_imagem">
                <img src="data:image; base64, <?= base64_encode($livro->capa) ?>" alt="">Imagem:</label>
                <input type="file" name="adicionar_imagem" id="adicionar_imagem" accept=".png, .jpeg">
            </div>
            <label for="adicionar_titulo">Titulo:</label>
            <input type="text" name="adicionar_titulo" id="adicionar titulo" value="<?=$livro->titulo;?>" placeholder="Digite o Titulo...">

            <label for="adicionar_autor">Autor:</label>
            <input type="text" name="adicionar_autor" id="adicionar autor" value="<?=$livro->autor;?>" placeholder="Digite o Autor...">

            <label for="adicionar_categoria">Categoria:</label>
            <input type="text" name="adicionar_categoria" id="adicionar categoria" value="" placeholder="Digite a Categoria...">

            <label for="sinopse">Sinopse:</label>
            <textarea name="sinopse"><?=$livro->sinopse;?>" id="sinopse" cols="58" rows="10">Digite a Sinopse...</textarea placeholder="Digite a Sinopse ">
              
              
                    <form action="" method="post">
                    <button type="submit" value="Salvar">Salvar</button>
                     </form>
                     
            </form>
            <form action="/jeane/estante_web/controlles/livro_del_controller.php" method="post" onsubmit="return confirm('Você tem certeza que quer deletar o livro ?')">
                <input type="hidden" nome="id" value="<?= $livro['id_livro'] ?>">
                <button type="submit" value="deletar">Deletar</button>
            </form>
        </section>
    </main>
    <?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_rodape.php';
    ?>